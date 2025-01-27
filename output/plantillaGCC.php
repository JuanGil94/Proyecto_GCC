<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class diccionario {
    public $procesoId, $sigobius;
    public function process ($procesoId,$oficioId,$sigobius,$obligacionLetras,$obligacionTotalLetras){
        //echo "value".$oficioId;
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
        $consulta=DB::Query("SELECT S.Seccional AS 'Seccional',* FROM Seccionales S
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId
        where P.ProcesoId =".$procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $info=array(
                "Seccional"=>$date["Seccional"],
                "Corporacion"=>$date["Corporacion"],
                "Unidad"=>$date["Unidad"],
                "Oficina"=>$date["Oficina"],
                "Serie"=>$date["Serie"],
            );
        }
        $info["Sigobius"]=$this->sigobius;
        $info["ObligacionLetras"]=$obligacionLetras;
        $info["ObligacionTotalLetras"]=$obligacionTotalLetras;
        $consulta=DB::Query("SELECT FORMAT(GETDATE(), 'dd \de MMMM \de yyyy', 'es-ES') AS 'fechahoy'");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Fecha"]=$date["fechahoy"];
            $info["fecha"]=$date["fechahoy"];
        }
        $consulta=DB::Query("SELECT MAX(Cuota) AS PlazoNum,dbo.Num2Text(MAX(Cuota)) AS PlazoLetras, dbo.Num2Text(FLOOR(MAX(Total))) AS CuotaLiquidaLetras,FORMAT(MAX(Total), 'C', 'es-CO') AS CuotaLiquida  FROM Acuerdos WHERE ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["PlazoLetras"]=$date["PlazoLetras"];
            $info["PlazoNum"]=$date["PlazoNum"];
            $info["CuotaLiquidaLetras"]=$date["CuotaLiquidaLetras"];
            $info["CuotaLiquida"]=$date["CuotaLiquida"];
        }
        $consulta=DB::Query("SELECT TOP 1 C.Radicado AS 'Sigobius',
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha',
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaDiezDias',
        C.Observaciones AS 'Observaciones',
		O.Oficio AS 'Oficio'
        FROM Correspondencias  C
        INNER JOIN Oficios O ON O.OficioId = C.OficioId
        WHERE O.OficioId =".$oficioId."AND C.ProcesoId =".$procesoId." ORDER BY C.CorrespondenciaId DESC");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Observaciones"]=$date["Observaciones"];
            $info["Oficio"]=$date["Oficio"];
            //$info["Fecha"]=$date["Fecha"];
            $info["FechaDiezDias"]=$date["FechaDiezDias"];
        }
        $consulta=DB::Query("SELECT FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaNotifiMandaLarga',
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaNotiManda'  
        FROM Correspondencias C WHERE C.OficioId=3138 and C.ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc()){
            $info["FechaNotifiMandaLarga"]=$date["FechaNotifiMandaLarga"];
            $info["FechaNotiManda"]=$date["FechaNotiManda"];
        }

        $consulta=DB::Query("SELECT C.Ciudad + ' - ' + D.Departamento AS 'CiudadDepartamento',
        C.Ciudad AS 'CiudadDespacho'
        FROM Ciudades C 
        INNER JOIN Departamentos D ON D.DepartamentoId = C.DepartamentoId 
        INNER JOIN Seccionales S ON S.CiudadId = C.CiudadId 
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId 
        LEFT JOIN Despachos DE ON DE.DespachoId = P.DespachoId
        WHERE P.ProcesoId = ".$procesoId);
        while( $date = $consulta->fetchAssoc() ){
            $info["CiudadDespacho"]=$date["CiudadDespacho"];
            $info["CiudadDepartamento"]=$date["CiudadDepartamento"];
        }
        $consulta=DB::Query("SELECT CI.Ciudad AS 'Ciudad'
         FROM Ciudades CI
        INNER JOIN Seccionales S ON S.CiudadId = CI.CiudadId
        INNER JOIN Procesos P ON S.SeccionalId = P.SeccionalId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Ciudad"]=$date["Ciudad"];
        }
        $consulta=DB::Query("SELECT U.UserName AS 'usuario', 
        DATENAME(year, C.Fecha) AS 'Ano',
        DATENAME(MONTH, C.Fecha) AS 'Mes',
        DATENAME(DAY, C.Fecha) AS 'Dia'
        FROM Correspondencias C
        INNER JOIN UserProfile U ON U.UserId = C.UserId
        WHERE OficioId =".$oficioId." AND  C.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            //$info["usuario"]=$date["usuario"];
            $info["Ano"]=$date["Ano"];
            $info["Dia"]=$date["Dia"];
            $info["Mes"]=$date["Mes"];
        }
        $info["usuario"]=$_SESSION["UserNameF"];
        $consulta=DB::Query("SELECT
        IIF (SA.Masculino=1,'identificado','identificada') AS 'identificado',
        IIF (SA.Masculino=1,'al señor','a la señora') AS 'alsenor',
        IIF (SA.Masculino=1,'El señor','la señora') AS 'ElSenor',
        IIF (SA.Masculino=1,'Respestado Señor','Respetada Señora') AS 'RespetadoSenor',
        IIF (SA.Masculino=1,'Señor','Señora')AS 'Senor',
        SA.Sancionado AS 'Sancionado',TD.TipoDocumento AS 'TipoDocumento',
        SA.Documento AS 'documento',
        SA.Email AS 'SancionadoEmail',
        Fallecimiento AS 'Fallecimiento',
        celular AS 'Telefono',
        celular AS 'SancionadoCelular'
        FROM Sancionados SA
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN TiposDocumentos TD ON TD.TipoDocumentoId = SA.TipoDocumentoId
        where P.ProcesoId =".$procesoId);

        while( $date = $consulta->fetchAssoc() )
		{
            $info["SancionadoCelular"]=$date["SancionadoCelular"];
            $info["Telefono"]=$date["Telefono"];
            $info["RespetadoSenor"]=$date["RespetadoSenor"];
            $info["Senor"]=$date["Senor"];
            $info["TipoDocumento"]=$date["TipoDocumento"];
            $info["tipodocumento"]=$date["TipoDocumento"];
            $info["documento"]=$date["documento"];
            $info["SancionadoEmail"]=$date["SancionadoEmail"];
            $info["Sancionado"]=$date["Sancionado"];
            $info["alsenor"]=$date["alsenor"];
            $info["ElSenor"]=$date["ElSenor"];
            $info["Costas"]=$date["Costas"];
            $info["identificado"]=$date["identificado"];
            $info["Fallecimiento"]=$date["Fallecimiento"];
        }
        $consulta=DB::Query("SELECT Radicado + ' de ' + FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Resolucion' 
        FROM Correspondencias where OficioId =4337 and ProcesoId =".$procesoId);

        while( $date = $consulta->fetchAssoc() )
		{
            $info["Resolucion"]=$date["Resolucion"];
        }
        
        $consulta=DB::Query("SELECT Radicado + ' de ' + FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'resolucionEmbargo' 
        FROM Correspondencias where OficioId = 4563 and ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["resolucionEmbargo"]=$date["resolucionEmbargo"];
        }
        /*
        $consulta=DB::Query("SELECT 
        CI.Ciudad AS 'SancionadoCiudad'
        FROM Direcciones D
        INNER JOIN Sancionados SA ON SA.SancionadoId = D.SancionadoId
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN Ciudades CI ON CI.CiudadId =D.CiudadId
        where D.Activa=1 and  P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SancionadoCiudad"]=$date["SancionadoCiudad"];
        }
        */
        $consulta=DB::Query("SELECT Numero AS 'Numero',
        --FORMAT(Obligacion, 'C', 'es-MX') AS 'Obligacion',
        FORMAT(Obligacion, 'C', 'es-CO')  AS Obligacion,
        Radicado AS 'Radicado',
        Costas AS 'Costas',
        InteresesInicial AS 'Intereses',
        FORMAT(Providencia, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaProvidenciaLarga',
        Providencia AS 'fechaProvidencia',
        FORMAT(Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga',
        FORMAT(Acuerdo, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaAcuerdoLarga',
        dbo.Procesos.ObligacionInicial + dbo.Procesos.CostasInicial + dbo.Procesos.InteresesInicial AS ObligacionTotal,
        FORMAT(CONVERT(DATE, Ejecutoria), 'dd/MM/yyyy') AS FechaEjecutoria,
        FORMAT(CONVERT(DATE, Plazo), 'dd/MM/yyyy') AS FechaPlazo,
        FORMAT(CONVERT(DATE, (DATEADD(YEAR, 5, Ejecutoria))), 'dd/MM/yyyy')  AS FechaPrescripcion,
        FORMAT(CONVERT(DATE, Fecha), 'dd/MM/yyyy') AS FechaCreacion
        FROM Procesos
        where ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["ObligacionTotal"]=$date["ObligacionTotal"];
            $info["Intereses"]=$date["Intereses"];
            $info["Radicado"]=$date["Radicado"];
            $info["Numero"]=$date["Numero"];
            $info["Obligacion"]=$date["Obligacion"];
            $info["FechaEjecutoriaLarga"]=$date["FechaEjecutoriaLarga"];
            $info["FechaProvidenciaLarga"]=$date["FechaProvidenciaLarga"];
            $info["fechaProvidencia"]=$date["fechaProvidencia"];
            $info["FechaAcuerdoLarga"]=$date["FechaAcuerdoLarga"];
            $info["FechaEjecutoria"]=$date["FechaEjecutoria"];
            $info["FechaCreacion"]=$date["FechaCreacion"];
            $info["FechaPrescripcion"]=$date["FechaPrescripcion"];
            $info["FechaPlazo"]=$date["FechaPlazo"];
        }
        //echo $info["Radicado"];
        $consulta=DB::Query("SELECT PR.Propiedad + ' - ' + Matricula AS Garantia  
        FROM Procesos P
        INNER JOIN Sancionados S ON S.SancionadoId = P.SancionadoId
        INNER JOIN Propiedades PR ON PR.SancionadoId = s.SancionadoId
          where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Garantia"]=$date["Garantia"];
        }

        $n=$info["Numero"];
        for ($i = 0; $i < strlen($n); $i++) {
            $caracter = $n[$i];
            //echo "Carácter en la posición $i: $caracter\n";
        }
        $numFormat=$n[0].$n[1].$n[2].$n[3].$n[4]."-".$n[5].$n[6].$n[7].$n[8]."-".$n[9].$n[10].$n[11]."-".$n[12].$n[13].$n[14].$n[15]."-".$n[16].$n[17].$n[18].$n[19].$n[20]."-".$n[21].$n[22];
        $info["numeroFormat"]=$numFormat;
        $consulta=DB::Query("SELECT
        UPPER (DESP.Despacho) AS 'Despacho'
        FROM Despachos DESP
        INNER JOIN Procesos P ON DESP.DespachoId = P.DespachoId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Despacho"]=$date["Despacho"];
        }
        $consulta=DB::Query("SELECT C.Concepto AS 'Concepto',
        CASE
           WHEN C.Concepto = 'MULTA' THEN 'de la multa'
           WHEN C.Concepto = 'POLIZA'THEN 'de la poliza'
           WHEN C.Concepto = 'INCAPACIDAD'THEN 'de la incapacidad'
           WHEN C.Concepto = 'REINTEGRO'THEN 'del reintegro'
           WHEN C.Concepto = 'ARANCEL'THEN 'del arancel'
           ELSE ''
       END AS 'delConcepto',
        CASE
           WHEN C.Concepto = 'MULTA' THEN 'una multa'
           WHEN C.Concepto = 'POLIZA'THEN 'una poliza'
           WHEN C.Concepto = 'INCAPACIDAD'THEN 'una incapacidad'
           WHEN C.Concepto = 'REINTEGRO'THEN 'un reintegro'
           WHEN C.Concepto = 'ARANCEL'THEN 'un arancel'
           ELSE ''
       END AS 'UnConcepto' 
       FROM Conceptos C
       INNER JOIN Procesos P ON P.ConceptoId = C.ConceptoId
       where P.ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Concepto"]=$date["Concepto"];
            $info["delConcepto"]=$date["delConcepto"];
            $info["UnConcepto"]=$date["UnConcepto"];
        }

        $consulta=DB::Query("SELECT S.Email AS 'SeccionalCorreo',
        S.Direccion AS 'SeccionalDireccion',
        S.Telefonos AS 'SeccionalTelefono',
        s.PiePagina AS 'PiePagina',
        s.NIT AS 'SeccionalNit'
         FROM Seccionales S
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SeccionalNit"]=$date["SeccionalNit"];
            $info["SeccionalCorreo"]=$date["SeccionalCorreo"];
            $info["SeccionalDireccion"]=$date["SeccionalDireccion"];
            $info["SeccionalTelefono"]=$date["SeccionalTelefono"];
            $info["PiePagina"]=$date["PiePagina"];
        }

        $consulta=DB::Query("SELECT 
        A.Abogado AS 'Abogado',
        IIF (A.Masculino=1,'El abogado','La abogada') AS 'ElAbogado',
        IIF (A.Masculino=1,'Doctor','Doctora') AS 'Doctor',
        IIF (A.Masculino=1,'Abogado Ejecutor','Abogada Ejecutora') AS 'AbogadoEjecutor',
        IIF (A.Masculino=1,'El Abogado Ejecutor','La Abogada Ejecutora') AS 'ElAbogadoEjecutor'
        FROM Abogados A
        INNER JOIN Procesos P ON P.AbogadoId =A.AbogadoId
        WHERE  P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["ElAbogado"]=$date["ElAbogado"];
            $info["Doctor"]=$date["Doctor"];
            $info["Abogado"]=$date["Abogado"];
            $info["AbogadoEjecutor"]=$date["AbogadoEjecutor"];
            $info["ElAbogadoEjecutor"]=$date["ElAbogadoEjecutor"];
        }
        /*
        $consulta=DB::Query("SELECT U.UserName AS 'usuario' FROM Correspondencias C
        INNER JOIN UserProfile U ON U.UserId = C.UserId
        WHERE OficioId =".$oficioId." AND  C.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["usuario"]=$date["usuario"];
        }
        */
        $consulta=DB::Query("SELECT Fecha AS 'FechaAcuerdo' 
        from Acuerdos where ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["FechaAcuerdo"]=$date["FechaAcuerdo"];
        }
        $consulta=DB::Query("SELECT  max(Acuerdos.Cuota) AS 'Plazo'
        FROM Acuerdos WHERE ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Plazo"]=$date["Plazo"];
        }

        $consulta=DB::Query("SELECT SUM(Pago) AS 'Recaudo' 
        FROM Pagos1 WHERE ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Recaudo"]=$date["Recaudo"];
        }
        $variables = array(
            'Seccional' => '',
            'Observaciones' => '',
            'Oficio' => '',
            'Sigobius' => '',
            'Fecha' => '',
            'FechaDiezDias' => '',
            'FechaNotifiMandaLarga' => '',
            'FechaNotiManda' => '',
            'CiudadDespacho' => '',
            'CiudadDepartamento' => '',
            'Ciudad' => '',
            'usuario' => '',
            'Ano' => '',
            'Dia' => '',
            'Mes' => '',
            'SancionadoCelular' => '',
            'Telefono' => '',
            'RespetadoSenor' => '',
            'Senor' => '',
            'TipoDocumento' => '',
            'documento' => '',
            'SancionadoEmail' => '',
            'Sancionado' => '',
            'alsenor' => '',
            'ElSenor' => '',
            'Costas' => '',
            'identificado' => '',
            'Fallecimiento' => '',
            'Resolucion' => '',
            'resolucionEmbargo' => '',
            'SancionadoCiudad' => '',
            'ObligacionTotal' => '',
            'Intereses' => '',
            'Radicado' => '',
            'Numero' => '',
            'Obligacion' => '',
            'FechaEjecutoriaLarga' => '',
            'FechaProvidenciaLarga' => '',
            'fechaProvidencia' => '',
            'FechaAcuerdoLarga' => '',
            'FechaEjecutoria' => '',
            'FechaCreacion' => '',
            'FechaPrescripcion' => '',
            'FechaPlazo' => '',
            'Garantia' => '',
            'numeroFormat' => '',
            'Despacho' => '',
            'Concepto' => '',
            'delConcepto' => '',
            'UnConcepto' => '',
            'SeccionalNit' => '',
            'SeccionalCorreo' => '',
            'SeccionalDireccion' => '',
            'SeccionalTelefono' => '',
            'PiePagina' => '',
            'ElAbogado' => '',
            'Doctor' => '',
            'Abogado' => '',
            'AbogadoEjecutor' => '',
            'ElAbogadoEjecutor' => '',
            'FechaAcuerdo' => '',
            'Plazo' => '',
            'Recaudo' => '',
            'ObligacionLetras'=>'',
            'ObligacionTotalLetras'=>'',
            'PlazoLetras'=>'',
            'PlazoNum'=>'',
            "Corporacion"=>'',
            "Unidad"=>'',
            "Oficina"=>'',
            "Serie"=>'',
        );
        $this->variables=$variables;
            //$numVariables=count(array_keys($variables));
            //echo $numVariables;
            return $info;
    }
    public function direcciones(){
        $consulta2=DB::Query("SELECT 
        STUFF(D.Direccion, 1, 1, UPPER(LEFT(D.Direccion, 1))) AS 'Direccion',CI.Ciudad,D.Barrio,D.Telefonos
        FROM Direcciones D
        INNER JOIN Sancionados SA ON SA.SancionadoId = D.SancionadoId
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN Ciudades CI ON CI.CiudadId =D.CiudadId
        where P.ProcesoId =".$this->procesoId);
        $i=0;
        while( $date = $consulta2->fetchAssoc() )
		{
            $direcciones[$i]["Direccion"]=$date["Direccion"];
            $direcciones[$i]['Ciudad']=$date["Ciudad"];
            $direcciones[$i]['Barrio']=$date["Barrio"];
            $direcciones[$i]['Telefonos']=$date["Telefonos"];
            $i++;
        }
        //print_r($direcciones);
        //echo "Numero de Direcciones: ".count($direcciones);
        //exit();
        if (count($direcciones)<1 && ($oficioId=4343 ||$oficioId=4328)){
            //Si no tiene direccion se debe poner por default SIN DIRECCION FISICA
            $direcciones[0]["Direccion"]='SIN DIRECCION FISICA';
            $direcciones[0]['Ciudad']='SIN DIRECCION FISICA';
            $direcciones[0]['Barrio']='SIN DIRECCION FISICA';
            $direcciones[0]['Telefonos']='SIN DIRECCION FISICA';
        }
        if (count($direcciones)<1){
            //Si no tiene direccion se debe poner por default SIN DIRECCION FISICA
            echo "<script>var aceptar=confirm ('El sancionado debe contener por lo menos una direccion');if(aceptar){location.reload();}</script>";
            exit();
        }
        $this->noDirecciones=count($direcciones);
        //print_r ($direcciones);
        return $direcciones;
    }
    public function tablaAcuerdo(){
        $consulta=DB::Query("SELECT Cuota,FORMAT(CONVERT(DATE, Fecha), 'dd/MM/yyyy') as Fecha,FORMAT(Capital, 'C', 'es-CO') AS Capital,FORMAT(Intereses, 'C', 'es-CO') AS Intereses,FORMAT(Costas, 'C', 'es-CO') AS Costas,FORMAT(InteresesPlazo, 'C', 'es-CO') AS InteresesPlazo,FORMAT(Total, 'C', 'es-CO') AS Total 
        from Liquidaciones WHERE ProcesoId=".$this->procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            //echo $date["Cuota"]; 
            $acuerdo[]=$date;
            //$cuotas[]=$date["Cuota"];
        }
        //print_r($acuerdo);
        return $acuerdo;
    }
    public function tablaAcuerdoSum(){
        $consulta=DB::Query("SELECT FORMAT(SUM(Capital), 'C', 'es-CO') AS sumCapital,FORMAT(SUM(Intereses), 'C', 'es-CO') AS sumIntereses,FORMAT(SUM(Costas), 'C', 'es-CO') AS sumCostas,FORMAT(SUM(InteresesPlazo), 'C', 'es-CO') AS sumInteresesPlazo,FORMAT(SUM(Total), 'C', 'es-CO') AS sumTotal 
        from Liquidaciones WHERE ProcesoId=".$this->procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            //echo $date["Cuota"]; 
            $acuerdoSum[]=$date;
            //$cuotas[]=$date["Cuota"];
        }
        //print_r($acuerdo);
        return $acuerdoSum;
    }
    public function getVariables(){
        return $this->variables;
    }
}
class plantillas extends diccionario{
    public $procesoId;
    public $oficioId;
    public $obligacionLetras;
    public $obligacionTotalLetras;
    public function __construct($procesoId,$oficioId,$obligacionLetras,$obligacionTotalLetras,$sigobius){
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
        $this->obligacionLetras=$obligacionLetras;
        $this->obligacionTotalLetras=$obligacionTotalLetras;
        $this->sigobius=$sigobius;
        //echo $sigobius;
    }
    public function funcGlobal(){
        if ($this->oficioId==4566){
            $this->acuerPago();
        }
        else {
        $info=parent::process($this->procesoId,$this->oficioId,$this->sigobius,$this->obligacionLetras,$this->obligacionTotalLetras);
        $direcciones=parent::direcciones();
        //echo "Valor del sigob a insertar en plantillas: ".$info["Sigobius"];
        //echo "Valor del Oficio: ".$this->oficioId;
        $templatePath = 'templates_GCC/Plantilla_'.$this->oficioId.'.docx';
        // Crear un objeto TemplateProcessor
        $templateProcessor = new TemplateProcessor($templatePath);
        $variables = $templateProcessor->getVariables();
        //echo count($variables);
        
    //print_r($variables);
        $case=count($direcciones);
        if($case>1){
            foreach( $direcciones as $key=>$dato){
                //echo $key;
                //print_r ($dato);
                //exit();
                $templateProcessor = new TemplateProcessor($templatePath);
                $direccion=$dato;
                $templateProcessor->setValue('direccion',$dato["Direccion"]);
                $templateProcessor->setValue('SancionadoCiudad',$dato["Ciudad"]);
                foreach($variables as $variable){
                    preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
                    //print_r();
                    $resultados = $matches[1];
                    //echo count($resultados);
                    for($i=0;$i<count($resultados);$i++){
                        $resultadoF.=$resultados[$i];
                    }

                    if ($info[$resultadoF]==!NULL){
                        $templateProcessor->setValue($resultadoF,$info[$resultadoF]);
                    }
                    
                    //$var[]=$resultadoF;
                    $resultadoF='';
                    //$resultados = $matches[1];
                    //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
                }
               // echo "Valor de Sigob antes de crear el archivo".$info["Sigobius"];
                $templateProcessor->saveAs('templates_GCC/Archivo_'.$this->procesoId.'_'.$this->oficioId.'_'.$key.'.docx');
            }
        }
        else{
            $templateProcessor = new TemplateProcessor($templatePath);
            foreach($variables as $variable){
                preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
                //print_r();
                $resultados = $matches[1];
                //echo count($resultados);
                for($i=0;$i<count($resultados);$i++){
                    $resultadoF.=$resultados[$i];
                }
                if ($info[$resultadoF]==!NULL){
                $templateProcessor->setValue($resultadoF,$info[$resultadoF]);
                }
                $templateProcessor->setValue('direccion',$direcciones[0]["Direccion"]);
                $templateProcessor->setValue('SancionadoCiudad',$direcciones[0]["Ciudad"]);
                //$var[]=$resultadoF;
                $resultadoF='';
                //$resultados = $matches[1];
                //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
            }

            $templateProcessor->saveAs('templates_GCC/ArchivoF_'.$this->procesoId.'_'.$this->oficioId.'.docx');
        }
        }
    }
    public function acuerPago(){
        $info=parent::process($this->procesoId,$this->oficioId,$this->sigobius,$this->obligacionLetras,$this->obligacionTotalLetras);
        $templatePath = 'templates_GCC/Plantilla_'.$this->oficioId.'.docx';
        // Crear un objeto TemplateProcessor
        $templateProcessor = new TemplateProcessor($templatePath);
        //$variables = $templateProcessor->getVariables();
        $templateProcessor->setValue('Sigobius',$info['Sigobius']);
        $templateProcessor->setValue('Ciudad',$info['Ciudad']);
        $templateProcessor->setValue('fecha',$info['fecha']);
        $templateProcessor->setValue('Seccional',$info['Seccional']);
        $templateProcessor->setValue('Numero',$info['Numero']);
        $templateProcessor->setValue('Número',$info['Numero']);
        $templateProcessor->setValue('identificado',$info['identificado']);
        $templateProcessor->setValue('tipodocumento',$info['tipodocumento']);
        $templateProcessor->setValue('Abogado',$info['Abogado']);
        $templateProcessor->setValue('abogadoejecutor',$info['abogadoejecutor']);
        $templateProcessor->setValue('SECCIONAL',$info['Seccional']);
        $templateProcessor->setValue('elabogadoejecutor',$info['elabogadoejecutor']);
        $templateProcessor->setValue('SeccionalCorreo',$info['SeccionalCorreo']);
        $templateProcessor->setValue('SeccionalDireccion',$info['SeccionalDireccion']);
        $templateProcessor->setValue('PlazoNum',$info['PlazoNum']);
        $templateProcessor->setValue('PlazoLetras',$info['PlazoLetras']);
        $templateProcessor->setValue('CuotaLiquidaLetras',$info['CuotaLiquidaLetras']);
        $templateProcessor->setValue('CuotaLiquida',$info['CuotaLiquida']);
        $templateProcessor->setValue('Senor',$info['Senor']);
        $templateProcessor->setValue('deudor',$info['Sancionado']);
        $templateProcessor->setValue('documento',$info['documento']);
        $templateProcessor->setValue('Deudor',$info['Sancionado']);
        $templateProcessor->setValue('SeccionalTelefono',$info['SeccionalTelefono']);
        $templateProcessor->setValue('Fecha',$info['Fecha']);
        $templateProcessor->setValue('AbogadoEjecutor',$info['AbogadoEjecutor']);
        $templateProcessor->setValue('USUARIO',$info['usuario']);
        $templateProcessor->setValue('PiePagina',$info['PiePagina']);
        $acuerdo=parent::tablaAcuerdo();
        $acuerdoSum=parent::tablaAcuerdoSum();
        $templateProcessor->cloneRow('rowValue', count($acuerdo));
        $count=1;
        foreach($acuerdo as $date){
            //Cuota,Fecha,Capital,Intereses,Costas,InteresesPlazo,Total 
            //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
            $templateProcessor->setValue('rowValue#'.$count, htmlspecialchars($date["Cuota"]));
            $templateProcessor->setValue('Fecha \@ dd/MM/yyyy#'.$count, htmlspecialchars($date["Fecha"]));
            $templateProcessor->setValue('Capital#'.$count, htmlspecialchars($date["Capital"]));
            $templateProcessor->setValue('Intereses#'.$count, htmlspecialchars($date["Intereses"]));
            $templateProcessor->setValue('Costas#'.$count, htmlspecialchars($date["Costas"]));
            $templateProcessor->setValue('InteresesPlazo#'.$count, htmlspecialchars($date["InteresesPlazo"]));
            $templateProcessor->setValue('Total#'.$count, htmlspecialchars($date["Total"]));
            $count++;
        }
        foreach($acuerdoSum as $date){
            //Cuota,Fecha,Capital,Intereses,Costas,InteresesPlazo,Total 
            //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
            $templateProcessor->setValue('totalCapital',htmlspecialchars($date["sumCapital"]));
            $templateProcessor->setValue('totalInt', htmlspecialchars($date["sumIntereses"]));
            $templateProcessor->setValue('totalCos', htmlspecialchars($date["sumCostas"]));
            $templateProcessor->setValue('totalIntPlaz', htmlspecialchars($date["sumInteresesPlazo"]));
            $templateProcessor->setValue('fullTotal', htmlspecialchars($date["sumTotal"]));
        }
        $templateProcessor->saveAs('templates_GCC/ArchivoF_'.$this->procesoId.'_'.$this->oficioId.'.docx'); 
    }
    public function getNoDirecciones(){
        return $this->noDirecciones;
    }
    public function html($archivo){
        preg_match_all('/\{([^}]*)\}/', $archivo, $matches);
        // $matches[1] contiene todas las palabras encontradas dentro de {}
        //print_r($matches[1]);
        //echo $archivo;
        $info=parent::process($this->procesoId,$this->oficioId,$this->sigobius,$this->obligacionLetras,$this->obligacionTotalLetras);
        foreach($matches[1] as $variable){
            if ($variable==!NULL){
                $archivo=str_replace($variable, $info[$variable], $archivo);
        }

        }
        //echo "Archivo Final:".$archivo;
        return $archivo;
        
        
    }
}
class plantillaCaratulas extends diccionario{
    public function caratulaProceso($procesoId,$oficioId) {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($procesoId,$oficioId,'','','');//se envia el procesoId el numero de la plantilla
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4561.docx');
            $templateWord->setValue('NumeroFormateado',$value["numeroFormat"]);
            $templateWord->setValue('Seccional',$value["Seccional"]);
            $templateWord->setValue('PiePagina',$value["PiePagina"]);
            $templateWord->setValue('Sancionado',$value["Sancionado"]);
            $templateWord->setValue('TipoDocumento',$value["TipoDocumento"]);
            $templateWord->setValue('documento',$value["documento"]);
            $templateWord->setValue('FechaEjecutoria',$value["FechaEjecutoria"]);
            $templateWord->setValue('FechaCreacion',$value["FechaCreacion"]);
            $templateWord->setValue('PiePagina',$value["PiePagina"]);
            $templateWord->setValue('Concepto',$value["Concepto"]);
            $templateWord->setValue('Despacho',$value["Despacho"]);
            $templateWord->setValue('Obligacion',$value["Obligacion"]);
            $templateWord->setValue('Radicado',$value["Radicado"]);
            $templateWord->setValue('Corporacion',$value["Corporacion"]);
            $templateWord->setValue('Unidad',$value["Unidad"]);
            $templateWord->setValue('Oficina',$value["Oficina"]);
            $templateWord->setValue('Serie',$value["Serie"]);
            $templateWord->setValue('Radicado',$value["Radicado"]);
            $templateWord->saveAs('templates_GCC/carProceso'.$this->procesoId.'.docx');
              
    }
    public function caratulaChequeo($chequeoId){
        $consulta=DB::Query("SELECT ChequeosSancionados.ChequeoSancionadoId,
        Chequeos.ChequeoId,
        Chequeos.Fecha,
        Chequeos.Origen,
        Chequeos.Remisorio,
        FORMAT(CONVERT(DATE, Chequeos.Providencia), 'dd/MM/yyyy') as ChequeosProvidencia,
        FORMAT(CONVERT(DATE, Chequeos.Ejecutoria), 'dd/MM/yyyy') as Ejecutoria,
        FORMAT(CONVERT(DATE, DATEADD(year, 5, Chequeos.Ejecutoria)), 'dd/MM/yyyy')  AS Prescripcion,
        FORMAT(CONVERT(DATE, Chequeos.Plazo), 'dd/MM/yyyy') as CPlazo,
        CASE
            WHEN PrimeraCopia = 1
            THEN 'SI'
            ELSE 'NO'
        END AS PrimeraCopia,
        CASE
            WHEN Autentica = 1
            THEN 'SI'
            ELSE 'NO'
        END AS Autentica,
        CASE
            WHEN PrestaMeritoEjecutivo = 1
            THEN 'SI'
            ELSE 'NO'
        END AS PrestaMeritoEjecutivo,
        CASE
            WHEN Clara = 1
            THEN 'SI'
            ELSE 'NO'
        END AS Clara,
        CASE
            WHEN Expresa = 1
            THEN 'SI'
            ELSE 'NO'
        END AS Expresa,
        CASE
            WHEN ActualmenteExigible = 1
            THEN 'SI'
            ELSE 'NO'
        END AS ActualmenteExigible,
        CASE
            WHEN CompetenciaDEAJ = 1
            THEN 'SI'
            ELSE 'NO'
        END AS CompetenciaDEAJ,
        CASE
            WHEN FaltaRequisitos = 1
            THEN 'SI'
            ELSE 'NO'
        END AS FaltaRequisitos,
        CASE
            WHEN FaltaCompetencia = 1
            THEN 'SI'
            ELSE 'NO'
        END AS FaltaCompetencia,
        CASE
            WHEN PorPrescripcion = 1
            THEN 'SI'
            ELSE 'NO'
        END AS PorPrescripcion,
        CASE
            WHEN MinJusticia = 1
            THEN 'SI'
            ELSE 'NO'
        END AS MinJusticia,
        Chequeos.Folios,
        Chequeos.Observaciones,
        Despachos.Codigo,
        Despachos.Despacho,
        ChequeosSancionados.Sancionado,
        ChequeosSancionados.Documento,
        ChequeosSancionados.Direccion,
        ChequeosSancionados.Telefono,
        ChequeosSancionados.Email,
        ChequeosSancionados.Masculino,
        ChequeosSancionados.Observaciones AS ChequeoObservaciones,
        FORMAT(Chequeos.Obligacion, 'C', 'es-CO') AS ChequeosObligacion,
        Chequeos.Costas,
        TiposDocumentos.TipoDocumento,
        Ciudades.Ciudad,
        Carceles.Carcel,
        Seccionales.Seccional SeccionalDestino,
        SeccionalesView.Seccional,
        SeccionalesView.PiePagina,
        SeccionalesView.CiudadDepartamento,
        Conceptos.Concepto
 FROM Chequeos
      INNER JOIN SeccionalesView ON Chequeos.SeccionalId = SeccionalesView.SeccionalId
      INNER JOIN Conceptos ON Chequeos.ConceptoId = Conceptos.ConceptoId
      LEFT JOIN ChequeosSancionados ON Chequeos.ChequeoId = ChequeosSancionados.ChequeoId
      LEFT JOIN Despachos ON Chequeos.DespachoId = Despachos.DespachoId
      LEFT JOIN Carceles ON ChequeosSancionados.CarcelId = Carceles.CarcelId
      LEFT JOIN TiposDocumentos ON ChequeosSancionados.TipoDocumentoId = TiposDocumentos.TipoDocumentoId
      LEFT JOIN Seccionales ON Chequeos.SeccionalIdDestino = Seccionales.SeccionalId
      LEFT JOIN Ciudades ON ChequeosSancionados.CiudadId = Ciudades.CiudadId
 WHERE Chequeos.ChequeoId =".$chequeoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $infoC["Despacho"]=$date["Despacho"];
            $infoC["Concepto"]=$date["Concepto"];
            $infoC["Sancionado"]=$date["Sancionado"];
            $infoC["Documento"]=$date["Documento"];
            $infoC["Sancionado"]=$date["Sancionado"];
            $infoC["Obligacion"]=$date["ChequeosObligacion"];
            $infoC["Providencia"]=$date["ChequeosProvidencia"];
            $infoC["Ejecutoria"]=$date["Ejecutoria"];
            $infoC["Prescripcion"]=$date["Prescripcion"];
            $infoC["Ejecutoria"]=$date["Ejecutoria"];
            $infoC["Plazo"]=$date["CPlazo"];
            $infoC["PrimeraCopia"]=$date["PrimeraCopia"];
            $infoC["Autentica"]=$date["Autentica"];
            $infoC["PrestaMeritoEjecutivo"]=$date["PrestaMeritoEjecutivo"];
            $infoC["Clara"]=$date["Clara"];
            $infoC["Expresa"]=$date["Expresa"];
            $infoC["ActualmenteExigible"]=$date["ActualmenteExigible"];
            $infoC["CompetenciaDEAJ"]=$date["CompetenciaDEAJ"];
            $infoC["FaltaCompetencia"]=$date["FaltaCompetencia"];
            $infoC["FaltaRequisitos"]=$date["FaltaRequisitos"];
            $infoC["PorPrescripcion"]=$date["PorPrescripcion"];
            $infoC["SeccionalDestino"]=$date["SeccionalDestino"];
            $infoC["MinJusticia"]=$date["MinJusticia"];
            $infoC["PiePagina"]=$date["PiePagina"];
            $infoC["Seccional"]=$date["Seccional"];
            $infoC["Remisorio"]=$date["Remisorio"];
            $infoC["ChequeoObservaciones"]=$date["Observaciones"];
        }
            //$infoC["Obligacion"]='$'.number_format($infoC["Obligacion"],2);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_Caratula.docx');
            $templateWord->setValue('Despacho',$infoC["Despacho"]);
            $templateWord->setValue('Concepto',$infoC["Concepto"]);
            $templateWord->setValue('Sancionado',$infoC["Sancionado"]);
            $templateWord->setValue('Documento',$infoC["Documento"]);
            $templateWord->setValue('Obligacion',$infoC["Obligacion"]);
            $templateWord->setValue('Providencia',$infoC["Providencia"]);
            $templateWord->setValue('Ejecutoria',$infoC["Ejecutoria"]);
            $templateWord->setValue('Prescripcion',$infoC["Prescripcion"]);
            $templateWord->setValue('Plazo',$infoC["Plazo"]);
            $templateWord->setValue('PrimeraCopia',$infoC["PrimeraCopia"]);
            $templateWord->setValue('Autentica',$infoC["Autentica"]);
            $templateWord->setValue('PrestaMeritoEjecutivo',$infoC["PrestaMeritoEjecutivo"]);
            $templateWord->setValue('Clara',$infoC["Clara"]);
            $templateWord->setValue('Expresa',$infoC["Expresa"]);
            $templateWord->setValue('ActualmenteExigible',$infoC["ActualmenteExigible"]);
            $templateWord->setValue('CompetenciaDEAJ',$infoC["CompetenciaDEAJ"]);
            $templateWord->setValue('FaltaRequisitos',$infoC["FaltaRequisitos"]);
            $templateWord->setValue('FaltaCompetencia',$infoC["FaltaCompetencia"]);
            $templateWord->setValue('PorPrescripcion',$infoC["PorPrescripcion"]);
            $templateWord->setValue('SeccionalDestino',$infoC["SeccionalDestino"]);
            $templateWord->setValue('MinJusticia',$infoC["MinJusticia"]);
            $templateWord->setValue('PiePagina',$infoC["PiePagina"]);
            $templateWord->setValue('Seccional',$infoC["Seccional"]);
            $templateWord->setValue('Remisorio',$infoC["Remisorio"]);
            $templateWord->setValue('ObserChequeo',$infoC["ChequeoObservaciones"]);
            $templateWord->saveAs('templates_GCC/carChequeo'.$chequeoId.'.docx');
    }
}
class diccionarioChequeo{
    public $chequeoId,$sigobius,$fecha,$observaciones;
    public $variables;
    public function process ($chequeoId,$oficioId,$sigobius,$fecha,$observaciones){
        if ($oficioId=='XXXXX'){
            //$templatePath=('templates_GCC/Plantilla_4573.docx');
            //$templatePath=('templates_GCC/Plantilla_4578.docx');
            /*
            $zip = new ZipArchive;
            if ($zip->open($templatePath) === TRUE) {
                // Leer el contenido del documento principal (word/document.xml)
                $xmlContent = $zip->getFromName('word/document.xml');

                // Cerrar el archivo ZIP
                $zip->close();

                // Mostrar el contenido XML
                header('Content-Type: text/xml');
                //echo $xmlContent;
            } else {
                echo "No se pudo abrir el archivo DOCX.";
            }
            */
            $value=$this->tablaChequeosSancionados();
            //print_r($value);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4573.docx');
            //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4578.docx');
            //echo "Valor del conteo: ".count($value);
            $templateWord->cloneBlock('DELETEME', 4,true,TRUE);
            $templateWord->cloneBlock('SANCIONADOS', count($value),TRUE,TRUE);
            $count=1;
            //$templateWord->cloneBlock('DELETEME', 2, true, true, $replacements);
            //$templateWord->setValue('Sancionado#1', "JUAN");
            //$templateWord->setValue('Sancionado#2', "PEDRO");
            foreach($value as $date){
                //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
                //$templateWord->setValue('Sancionado#'.$count, htmlspecialchars($date["C.Sancionado"]));
                //echo $date["C.Sancionado"];
                //print_r($date);
                $templateWord->setValue('Sancionado#'.$count, $date["Sancionado"]);
                //$templateWord->setValue('Sancionado#'.$count, htmlspecialchars($date["C.Sancionado"]));
                $templateWord->setValue('TipoDocumento#'.$count, htmlspecialchars($date["TipoDocumento"]));
                $templateWord->setValue('Documento#'.$count, htmlspecialchars($date["Documento"]));
                $count++;
            }
        $templateWord->saveAs('templates_GCC/APruebaFF.docx');
        exit();    
        }
        $this->chequeoId=$chequeoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
        $this->fecha=$fecha;
        $this->observaciones=$observaciones;
        $consulta=DB::Query("SELECT S.Seccional AS 'Seccional',
        S.PiePagina AS 'PiePagina', 
        S.Telefonos AS 'SeccionalTelefonos', 
        CI.Ciudad AS 'Ciudad' FROM Seccionales S
        INNER JOIN Chequeos C ON C.SeccionalId = S.SeccionalId
		INNER JOIN Ciudades CI ON CI.CiudadId = S.CiudadId
        where C.ChequeoId=".$chequeoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $info=array(
                "Ciudad"=>$date["Ciudad"],
                "Seccional"=>$date["Seccional"],
                "PiePagina"=>$date["PiePagina"],
                "SeccionalTelefonos"=>$date["SeccionalTelefonos"]
            );
        }
        $info["Sigobius"]=$this->sigobius;
        $info["Fecha"]=$this->fecha;
        //$info["Radicado"]=$this->sigobius;
        $info["Observaciones"]=$this->observaciones;
        $consulta=DB::Query("SELECT FORMAT(GETDATE(), 'dd \de MMMM \de yyyy', 'es-ES') AS 'fechahoy'");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["FechaHoy"]=$date["fechahoy"];
            $info["fechahoy"]=$date["fechahoy"];
        }

        $consulta=DB::Query("SELECT S.Email AS 'SeccionalCorreo',
        S.Direccion AS 'SeccionalDireccion',
        S.Telefonos AS 'SeccionalTelefono'
        FROM Seccionales S
        INNER JOIN Chequeos C ON C.SeccionalId = S.SeccionalId
        where C.ChequeoId=".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SeccionalCorreo"]=$date["SeccionalCorreo"];
            $info["SeccionalDireccion"]=$date["SeccionalDireccion"];
            $info["SeccionalTelefono"]=$date["SeccionalTelefono"];
        }

        $consulta=DB::Query("SELECT 
        CS.Sancionado AS 'Sancionado',
        TD.TipoDocumento AS 'TipoDocumento',
        CS.Documento AS 'Documento'
        FROM ChequeosSancionados CS
        INNER JOIN TiposDocumentos TD ON TD.TipoDocumentoId = CS.TipoDocumentoId
        INNER JOIN Chequeos C ON C.ChequeoId = cs.ChequeoId
        WHERE C.ChequeoId =".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Sancionado"]=$date["Sancionado"];
            $info["TipoDocumento"]=$date["TipoDocumento"];
            $info["Documento"]=$date["Documento"];
        }


        $consulta=DB::Query("SELECT A.Abogado AS 'Abogado',
        IIF (A.Masculino=1,'Abogado Ejecutor','Abogada Ejecutora') AS 'AbogadoEjecutor',
        U.UserName AS 'Usuario',
        C.Origen AS 'CUI',
        FORMAT(C.Providencia, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaProvidencia',
        FORMAT(C.Obligacion, 'C', 'es-CO') AS 'Obligacion',
        Ejecutoria AS 'FechaEjecutoria'
        FROM Chequeos C
        INNER JOIN Abogados A ON C.AbogadoId = A.AbogadoId
        INNER JOIN UserProfile U ON U.AbogadoId = A.AbogadoId
        WHERE C.ChequeoId =".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["AbogadoEjecutor"]=$date["AbogadoEjecutor"];
            $info["Abogado"]=$date["Abogado"];
            $info["CUI"]=$date["CUI"];
            $info["FechaProvidencia"]=$date["FechaProvidencia"];
            $info["Obligacion"]=$date["Obligacion"];
            $info["FechaEjecutoria"]=$date["FechaEjecutoria"];
        }
        $info["usuario"]=$_SESSION["UserNameF"];
        $consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Chequeos C ON C.DespachoId = D.DespachoId
        WHERE ChequeoId =".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Despacho"]=$date["Despacho"];
            $info["DespachoJuez"]=$date["DespachoJuez"];
            $info["DespachoDireccion"]=$date["DespachoDireccion"];
            $info["DespachoCorreo"]=$date["DespachoCorreo"];
            $info["Doctor"]=$date["Doctor"];
        }
        
        $consulta=DB::Query("SELECT Remisorio AS 'Remisorio',
        Remisorio AS 'REMISORIO'
        FROM Chequeos WHERE ChequeoId = ".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Remisorio"]=$date["Remisorio"];
            $info["REMISORIO"]=$date["REMISORIO"];
        }

        $consulta=DB::Query("SELECT MD.MotivoDevolucion AS 'MotivoDevolucion' 
        FROM Devoluciones D
		INNER JOIN MotivosDevoluciones MD ON MD.MotivoDevolucionId = D.MotivoDevolucionId
		WHERE ChequeoId =".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["MotivoDevolucion"]=$date["MotivoDevolucion"];
        }
        /*
        $consulta=DB::Query("SELECT
        FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha',
		Radicado as 'Radicado', 
		Observaciones AS 'Observaciones'
		FROM ChequeosOficios WHERE OficioId = 4573 AND Fecha <= GETDATE() AND ChequeoId =".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Fecha"]=$date["Fecha"];
            $info["Radicado"]=$date["Radicado"];
            $info["Observaciones"]=$date["Observaciones"];
        }
        */
        $variables = array(
            'Remisorio' => '',
            'REMISORIO' => '',
            'Seccional' => '',
            'Ciudad' => '',
            'Sigobius' => '',
            'fechahoy'=>'',
            'FechaHoy'=>'',
            'SeccionalCorreo'=>'',
            'SeccionalDireccion'=>'',
            'SeccionalTelefono'=>'',
            'Sancionado'=>'',
            'TipoDocumento'=>'',
            'Documento'=>'',
            'Abogado'=>'',
            'AbogadoEjecutor'=>'',
            'Despacho'=>'',
            'DespachoJuez'=>'',
            'DespachoDireccion'=>'',
            'DespachoCorreo'=>'',
            'Doctor'=>'',
            'MotivoDevolucion'=>'',
            'Fecha'=>'',
            'Radicado'=>'',
            'Observaciones'=>'',
            'Obligacion' =>'',
            'PiePagina' =>'',
            'SeccionalTelefonos' =>'',
            'FechaEjecutoria' =>''
        );
        $this->variables=$variables;
            return $info;
    }
    public function getVariables(){
        return $this->variables;
    }
    public function tablaChequeosSancionados(){
        $consulta=DB::Query("SELECT C.Sancionado,T.TipoDocumento,C.Documento
                            FROM ChequeosSancionados C INNER JOIN TiposDocumentos T ON C.TipoDocumentoId=T.TipoDocumentoId 
                            WHERE ChequeoId=".$this->chequeoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            //echo $date["Cuota"]; 
            $sancionados[]=$date;
            //$cuotas[]=$date["Cuota"];
        }
        //print_r($acuerdo);
        return $sancionados;
    }

}
class plantillaDev extends diccionarioChequeo{
    public $ChequeoId,$oficioId,$sigobius,$fecha,$observaciones;
    public function __construct($ChequeoId,$oficioId,$sigobius,$fecha,$observaciones){
        $this->chequeoId=$ChequeoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
        $this->fecha=$fecha;
        $this->observaciones=$observaciones;
    }
    public function funcGlobal(){
        $info=parent::process($this->chequeoId,$this->oficioId,$this->sigobius,$this->fecha,$this->observaciones);
        //$direcciones=parent::direcciones();
        $templatePath = 'templates_GCC/Plantilla_'.$this->oficioId.'.docx';
        // Crear un objeto TemplateProcessor
        $templateProcessor = new TemplateProcessor($templatePath);
        $variables = $templateProcessor->getVariables();
        //print_r ($variables);
        //$templateProcessor = new TemplateProcessor($templatePath);
        foreach($variables as $variable){
            preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
            //print_r($matches);
            $resultados = $matches[1];
            //echo count($resultados);
            for($i=0;$i<count($resultados);$i++){
                $resultadoF.=$resultados[$i];
            }
            //echo "Variable del documento ".$resultadoF.".Valor de la variable del diccionario: ".$info[$resultadoF]."<br>";
            if ($info[$resultadoF]==!NULL){
                $templateProcessor->setValue($resultadoF,$info[$resultadoF]);
            }//$var[]=$resultadoF;
            $resultadoF='';
            //$resultados = $matches[1];
            //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
        }
        if ($this->oficioId==4573){ //DEV_OLUCIÓN TITULO EJECUTIVO SUBSANAR SIGOBius
            $value=parent::tablaChequeosSancionados();
            //echo count($value);
            //exit();
            $templateProcessor->cloneBlock('DELETEME', 4,true,TRUE);
            $templateProcessor->cloneBlock('SANCIONADOS', count($value),TRUE,TRUE);
            $count=1;
            foreach($value as $date){
                //print_r($date);
                $templateProcessor->setValue('Sancionado#'.$count, $date["Sancionado"]);
                $templateProcessor->setValue('TipoDocumento#'.$count, htmlspecialchars($date["TipoDocumento"]));
                $templateProcessor->setValue('Documento#'.$count, htmlspecialchars($date["Documento"]));
                $count++;
            }
            //$templateProcessor->saveAs('templates_GCC/APruebaFF.docx');
            //exit();  
        }
        $templateProcessor->saveAs('templates_GCC/Archivo_'.$this->chequeoId.'_'.$this->oficioId.'.docx');  
        //exit();
        /*
        {
            foreach($variables as $variable){
                $templateProcessor = new TemplateProcessor($templatePath);
                preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
                //print_r();
                $resultados = $matches[1];
                //echo count($resultados);
                for($i=0;$i<count($resultados);$i++){
                    $resultadoF.=$resultados[$i];
                }
                $templateProcessor->setValue($resultadoF,$info[$resultadoF]);
                //$var[]=$resultadoF;
                $resultadoF='';
                //$resultados = $matches[1];
                //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
            }

            $templateProcessor->saveAs('templates_GCC/Archivo_'.$this->procesoId.'_'.$this->oficioId.'.docx');
        }
        */
    }
}

class fichaTecnica {
    public $procesoId;
    public function __construct($procesoId){
        $this->procesoId=$procesoId;
    }
    public function processFicha (){
        //echo "value".$oficioId;
        $consulta=DB::Query("SELECT ProcesosView.ProcesoId
		,ProcesosView.SancionadoId
		,ProcesosView.Sancionado
		,ProcesosView.SancionadoDocumento AS Documento
		,ProcesosView.Concepto
		,ProcesosView.Numero
		,FORMAT(ProcesosView.Obligacion, 'C', 'es-CO') AS Obligacion
		,FORMAT(ProcesosView.Costas, 'C', 'es-CO') AS Costas
		,FORMAT(ProcesosView.Intereses, 'C', 'es-CO') AS Intereses
		,FORMAT(CONVERT(DATE, ProcesosView.Ejecutoria), 'dd/MM/yyyy') as Ejecutoria
		,FORMAT(CONVERT(DATE, ProcesosView.Providencia), 'dd/MM/yyyy') as Providencia
		,ProcesosView.ConceptoAbogado
		,ProcesosView.PiePagina
		,FORMAT(CONVERT(DATE, DATEADD(year, 5, CASE 
				WHEN ProcesosView.Incumplimiento IS NULL
					THEN CASE 
							WHEN ProcesosView.Acuerdo IS NULL
								THEN CASE 
										WHEN ProcesosView.Notificacion IS NULL
											THEN ProcesosView.Ejecutoria
										ELSE ProcesosView.Notificacion
										END
							ELSE ProcesosView.Acuerdo
							END
				ELSE ProcesosView.Incumplimiento
				END)), 'dd/MM/yyyy') as Prescripcion 
        ,FORMAT(CONVERT(DATE, ProcesosView.Plazo), 'dd/MM/yyyy') as Plazo 
	FROM ProcesosView
	WHERE ProcesoId =".$this->procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $info=array(
                "SancionadoId"=>$date["SancionadoId"],
                "Sancionado"=>$date["Sancionado"],
                "Documento"=>$date["Documento"],
                "Numero"=>$date["Numero"],
                "Concepto"=>$date["Concepto"],
                "Obligacion"=>$date["Obligacion"],
                "Intereses"=>$date["Intereses"],
                "Costas"=>$date["Costas"],
                "Providencia"=>$date["Providencia"],
                "Ejecutoria"=>$date["Ejecutoria"],
                "Prescripcion"=>$date["Prescripcion"],
                "Plazo"=>$date["Plazo"],
                "ConceptoAbogado"=>$date["ConceptoAbogado"],
                "PiePagina"=>$date["PiePagina"]
            );
        }
        $date = new DateTime();
        // Formatear la fecha y la hora
        $info["date"]=$date->format('Y-m-d H:i:s');
        return $info;
    }
    public function planFichaTecnica (){ 
        $info=$this->processFicha();
        $templatePath = 'templates_GCC/Plantilla_FichaTecnica.docx';
        $templateProcessor = new TemplateProcessor($templatePath);
        //$variables = $templateProcessor->getVariables();
        $templateProcessor->setValue('date',$info['date']);
        $templateProcessor->setValue('Sancionado',$info['Sancionado']);
        $templateProcessor->setValue('Documento',$info['Documento']);
        $templateProcessor->setValue('Numero',$info['Numero']);
        $templateProcessor->setValue('Concepto',$info['Concepto']);
        $templateProcessor->setValue('Obligacion',$info['Obligacion']);
        $templateProcessor->setValue('Intereses',$info['Intereses']);
        $templateProcessor->setValue('Costas',$info['Costas']);
        $templateProcessor->setValue('Providencia',$info['Providencia']);
        $templateProcessor->setValue('Ejecutoria',$info['Ejecutoria']);
        $templateProcessor->setValue('Prescripcion',$info['Prescripcion']);
        $templateProcessor->setValue('Plazo',$info['Plazo']);
        $templateProcessor->setValue('ConceptoAbogado',$info['ConceptoAbogado']);
        $templateProcessor->setValue('PiePagina',$info['PiePagina']);
        $correspondencias=$this->tablaCorrespondencias();
        $bienes=$this->tablaBienes($info['SancionadoId']);
        $templateProcessor->cloneRow('propiedad', count($bienes));
        $templateProcessor->cloneRow('fecha', count($correspondencias));
        $count=1;
        foreach($bienes as $date){
            //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
            $templateProcessor->setValue('propiedad#'.$count, htmlspecialchars($date["Propiedad"]));
            $templateProcessor->setValue('avaluo#'.$count, htmlspecialchars($date["Avaluo"]));
            $templateProcessor->setValue('ciudad#'.$count, htmlspecialchars($date["Fecha"]));
            $templateProcessor->setValue('dirección#'.$count, htmlspecialchars($date["Direccion"]));
            $templateProcessor->setValue('observaciones#'.$count, htmlspecialchars($date["Costas"]));
            $count++;
        }
        $count=1;
        foreach($correspondencias as $date){
            //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
            $templateProcessor->setValue('fecha#'.$count, htmlspecialchars($date["Fecha"]));
            $templateProcessor->setValue('oficio#'.$count, htmlspecialchars($date["Oficio"]));
            $templateProcessor->setValue('resolución#'.$count, htmlspecialchars($date["Resolucion"]));
            $templateProcessor->setValue('radicado#'.$count, htmlspecialchars($date["Radicado"]));
            $templateProcessor->setValue('observacionesC#'.$count, htmlspecialchars($date["Observaciones"]));
            $count++;
        }
        $templateProcessor->saveAs('templates_GCC/FichaTecnica_'.$this->procesoId.'.docx');
    }
    public function tablaCorrespondencias(){
        $consulta=DB::Query("SELECT        Actuaciones.ActuacionId, Oficios.OficioId, Oficios.Oficio, Actuaciones.Actuacion, Correspondencias.Fecha, Correspondencias.ProcesoId, Correspondencias.Sigobius, Correspondencias.Observaciones, Correspondencias.Codigo, 
                        Correspondencias.Resolucion, Correspondencias.AbogadoId, Correspondencias.UserId, Correspondencias.Radicado, Oficios.OficioIdRequisito
                        FROM            Actuaciones 
                        INNER JOIN      Oficios ON Actuaciones.ActuacionId = Oficios.ActuacionId 
                        INNER JOIN      Correspondencias ON Oficios.OficioId = Correspondencias.OficioId
                        WHERE        (Actuaciones.ActuacionId = 1035) and Correspondencias.ProcesoId=".$this->procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            //echo $date["Cuota"]; 
            $correspondencias[]=$date;
            //$cuotas[]=$date["Cuota"];
        }
        //print_r($acuerdo);
        return $correspondencias;
    }
    public function tablaBienes($sancionadoId){
        $consulta=DB::Query("SELECT Ciudades.Ciudad, 
       Propiedades.Propiedad, 
       Propiedades.Avaluo, 
       Propiedades.Observaciones, 
       Propiedades.Direccion 
    FROM Propiedades
    INNER JOIN Ciudades ON Propiedades.CiudadId = Ciudades.CiudadId
    WHERE Propiedades.SancionadoId =".$sancionadoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            //echo $date["Cuota"]; 
            $bienes[]=$date;
            //$cuotas[]=$date["Cuota"];
        }
        //print_r($acuerdo);
        return $bienes;
    }
}
class certificadoMensual{ 
    public $reportDate;
    public $UserNameF;
    public function __construct($reportDate,$UserNameF){
        $this->reportDate=$reportDate;
        $this->UserNameF=$UserNameF;
    }
    public function process(){
        //echo $_SESSION["SeccionalesWhere"];
        //echo $_SESSION["Seccionales"];
        $consulta=DB::Query("SELECT * FROM Seccionales WHERE SeccionalId in (".$_SESSION["Seccionales"].")");
        while( $date = $consulta->fetchAssoc()){
            $seccionales[]=$date["Seccional"];
        }
        //print_r($seccionales);

        $count=0;
        $rs=DB::Query("exec dbo.Procesos_Resumen @UserName='".$this->UserNameF."',@Mes='".$this->reportDate."',@Millones=0");
        while ($data = db_fetch_array($rs)) {
            //echo $data;
            //echo json_encode($data, JSON_PRETTY_PRINT);
            foreach ($data as $data2){
                $array[$count]=$data;
                //print_r($data2);
            }
            $count++;
            //echo "Columna1: " . $data["Columna1"] . ", Columna2: " . $data["Columna2"];
        }
        $data_seccional='';
        foreach ($array as $key=>$dataa){
            //echo $dataa["Seccional"];
            foreach($seccionales as $seccional){
                //echo "<br>Seccional: ".$seccional."<br>";
                if ($dataa["Seccional"]==$seccional){
                    $array_keys[$key]=$seccional;
                    //echo $key. "y la seecional es: ".$dataa["Seccional"]; 
                }
            }
        }
        //print_r($array_keys);
        // Nuevo array donde agruparemos las keys por ciudad
        $arrayAgrupado = array();

        // Recorrer el array original
        foreach ($array_keys as $key => $ciudad) {
            // Si la ciudad no existe en el array agrupado, la inicializamos como un array vacío
            if (!isset($arrayAgrupado[$ciudad])) {
                $arrayAgrupado[$ciudad] = array();
            }
            
            // Añadir la key al array correspondiente a la ciudad
            $arrayAgrupado[$ciudad][] = $key;
        }

        foreach ($arrayAgrupado as $ciudad=>$id){
            //echo "<br>".$ciudad." - ".$id."<br>";
            //echo $id[0];
            $info[$ciudad]=array(
                "Seccional"=>$array[$id[0]]["Seccional"],
                "Desde"=>$array[$id[0]]["Desde"],
                "Hasta"=>$array[$id[0]]["Hasta"],
                "pa"=>intval($array[$id[0]]["ProcAnte"]),
                "oa"=>floatval($array[$id[0]]["ObliAnte"]),
                "ca"=>floatval($array[$id[0]]["CostAnte"]),
                "ia"=>floatval($array[$id[0]]["InteAnte"]),
                "pb"=>floatval($array[$id[0]]["ProcActu"]),
                "ob"=>floatval($array[$id[0]]["ObliActu"]),
                "cb"=>floatval($array[$id[0]]["CostActu"]),
                "ib"=>floatval($array[$id[0]]["InteActu"]),
                "pc"=>floatval($array[$id[0]]["ProcReca"]),
                "oc"=>floatval($array[$id[0]]["ObliReca"]),
                "cc"=>floatval($array[$id[0]]["CostReca"]),
                "ic"=>floatval($array[$id[0]]["InteReca"]),
                "pd"=>floatval($array[$id[0]]["ProcTras"]),
                "od"=>floatval($array[$id[0]]["ObliTras"]),
                "cd"=>floatval($array[$id[0]]["CostTras"]),
                "id"=>floatval($array[$id[0]]["InteTras"]),
                "pe"=>floatval($array[$id[0]]["ProcNopa"]),
                "oe"=>floatval($array[$id[0]]["ObliNopa"]),
                "ce"=>floatval($array[$id[0]]["CostNopa"]),
                "ie"=>floatval($array[$id[0]]["InteNopa"]),
                "pf"=>floatval($array[$id[0]]["ProcNove"]),
                "of"=>floatval($array[$id[0]]["ObliNove"]),
                "cf"=>floatval($array[$id[0]]["CostNove"]),
                "if"=>floatval($array[$id[0]]["InteNove"]),
                "pg"=>floatval($array[$id[0]]["ProcMayo"]),
                "og"=>floatval($array[$id[0]]["ObliMayo"]),
                "cg"=>floatval($array[$id[0]]["CostMayo"]),
                "ig"=>floatval($array[$id[0]]["InteMayo"]),
                "ProcTota"=>floatval($array[$id[0]]["ProcTota"]),
                "ObliTota"=>floatval($array[$id[0]]["ObliTota"]),
                "CostTota"=>floatval($array[$id[0]]["CostTota"]),
                "InteTota"=>floatval($array[$id[0]]["InteTota"]),
                "DeteAnte"=>floatval($array[$id[0]]["DeteAnte"]),
                "DeteTota"=>floatval($array[$id[0]]["DeteTota"]),
                "DeteActu"=>floatval($array[$id[0]]["DeteActu"]),
                "CarteraTipo"=>$array[$id[0]]["CarteraTipo"],
                "ContadorCargo"=>$array[$id[0]]["ContadorCargo"],
                "Contador"=>$array[$id[0]]["Contador"],
                "Director"=>$array[$id[0]]["Director"],
                "DirectorCargo"=>$array[$id[0]]["DirectorCargo"],
                "Abogado"=>$array[$id[0]]["Abogado"],
                "AbogadoCargo"=>$array[$id[0]]["AbogadoCargo"],
                "date"=>now(),
            );
            $info[$ciudad]["sumRec"]=0;
            $info[$ciudad]["sumNov"]=0;
            $info[$ciudad]["sumCol"]=$info[$ciudad]["od"]+$info[$ciudad]["id"]+$info["cd"];
            $info[$ciudad]["sumCol1"]=$info[$ciudad]["oe"]+$info[$ciudad]["ie"]+$info["ce"];
            $info[$ciudad]["sumTot"]=$info[$ciudad]["DeteAnte"]+$info[$ciudad]["DeteActu"]-$info[$ciudad]["sumRec"]+$info[$ciudad]["sumCol"]-$info[$ciudad]["sumCol1"]+$info[$ciudad]["sumNov"];
            //REINTEGROS
            $info[$ciudad]["pa1"]=intval($array[$id[1]]["ProcAnte"]);
            $info[$ciudad]["oa1"]=floatval($array[$id[1]]["ObliAnte"]);
            $info[$ciudad]["ca1"]=floatval($array[$id[1]]["CostAnte"]);
            $info[$ciudad]["ia1"]=floatval($array[$id[1]]["InteAnte"]);
            $info[$ciudad]["pb1"]=floatval($array[$id[1]]["ProcActu"]);
            $info[$ciudad]["ob1"]=floatval($array[$id[1]]["ObliActu"]);
            $info[$ciudad]["cb1"]=floatval($array[$id[1]]["CostActu"]);
            $info[$ciudad]["ib1"]=floatval($array[$id[1]]["InteActu"]);
            $info[$ciudad]["pc1"]=floatval($array[$id[1]]["ProcReca"]);
            $info[$ciudad]["oc1"]=floatval($array[$id[1]]["ObliReca"]);
            $info[$ciudad]["cc1"]=floatval($array[$id[1]]["CostReca"]);
            $info[$ciudad]["ic1"]=floatval($array[$id[1]]["InteReca"]);
            $info[$ciudad]["pd1"]=floatval($array[$id[1]]["ProcTras"]);
            $info[$ciudad]["od1"]=floatval($array[$id[1]]["ObliTras"]);
            $info[$ciudad]["cd1"]=floatval($array[$id[1]]["CostTras"]);
            $info[$ciudad]["id1"]=floatval($array[$id[1]]["InteTras"]);
            $info[$ciudad]["pe1"]=floatval($array[$id[1]]["ProcNopa"]);
            $info[$ciudad]["oe1"]=floatval($array[$id[1]]["ObliNopa"]);
            $info[$ciudad]["ce1"]=floatval($array[$id[1]]["CostNopa"]);
            $info[$ciudad]["ie1"]=floatval($array[$id[1]]["InteNopa"]);
            $info[$ciudad]["pf1"]=floatval($array[$id[1]]["ProcNove"]);
            $info[$ciudad]["of1"]=floatval($array[$id[1]]["ObliNove"]);
            $info[$ciudad]["cf1"]=floatval($array[$id[1]]["CostNove"]);
            $info[$ciudad]["if1"]=floatval($array[$id[1]]["InteNove"]);
            $info[$ciudad]["pg1"]=floatval($array[$id[1]]["ProcMayo"]);
            $info[$ciudad]["og1"]=floatval($array[$id[1]]["ObliMayo"]);
            $info[$ciudad]["cg1"]=floatval($array[$id[1]]["CostMayo"]);
            $info[$ciudad]["ig1"]=floatval($array[$id[1]]["InteMayo"]);
            $info[$ciudad]["DeteAnteR"]=floatval($array[$id[1]]["DeteAnte"]);
            $info[$ciudad]["DeteActuR"]=floatval($array[$id[1]]["DeteActu"]);
            $info[$ciudad]["sumRecR"]=0;
            $info[$ciudad]["sumNovR"]=0;
            //INC[$ciudad]APACIDADES
            $info[$ciudad]["pa2"]=intval($array[$id[2]]["ProcAnte"]);        
            $info[$ciudad]["oa2"]=floatval($array[$id[2]]["ObliAnte"]);
            $info[$ciudad]["ca2"]=floatval($array[$id[2]]["CostAnte"]);
            $info[$ciudad]["ia2"]=floatval($array[$id[2]]["InteAnte"]);
            $info[$ciudad]["pb2"]=floatval($array[$id[2]]["ProcActu"]);
            $info[$ciudad]["ob2"]=floatval($array[$id[2]]["ObliActu"]);
            $info[$ciudad]["cb2"]=floatval($array[$id[2]]["CostActu"]);
            $info[$ciudad]["ib2"]=floatval($array[$id[2]]["InteActu"]);
            $info[$ciudad]["pc2"]=floatval($array[$id[2]]["ProcReca"]);
            $info[$ciudad]["oc2"]=floatval($array[$id[2]]["ObliReca"]);
            $info[$ciudad]["cc2"]=floatval($array[$id[2]]["CostReca"]);
            $info[$ciudad]["ic2"]=floatval($array[$id[2]]["InteReca"]);
            $info[$ciudad]["pd2"]=floatval($array[$id[2]]["ProcTras"]);
            $info[$ciudad]["od2"]=floatval($array[$id[2]]["ObliTras"]);
            $info[$ciudad]["cd2"]=floatval($array[$id[2]]["CostTras"]);
            $info[$ciudad]["id2"]=floatval($array[$id[2]]["InteTras"]);
            $info[$ciudad]["pe2"]=floatval($array[$id[2]]["ProcNopa"]);
            $info[$ciudad]["oe2"]=floatval($array[$id[2]]["ObliNopa"]);
            $info[$ciudad]["ce2"]=floatval($array[$id[2]]["CostNopa"]);
            $info[$ciudad]["ie2"]=floatval($array[$id[2]]["InteNopa"]);
            $info[$ciudad]["pf2"]=floatval($array[$id[2]]["ProcNove"]);
            $info[$ciudad]["of2"]=floatval($array[$id[2]]["ObliNove"]);
            $info[$ciudad]["cf2"]=floatval($array[$id[2]]["CostNove"]);
            $info[$ciudad]["if2"]=floatval($array[$id[2]]["InteNove"]);
            $info[$ciudad]["pg2"]=floatval($array[$id[2]]["ProcMayo"]);
            $info[$ciudad]["og2"]=floatval($array[$id[2]]["ObliMayo"]);
            $info[$ciudad]["cg2"]=floatval($array[$id[2]]["CostMayo"]);
            $info[$ciudad]["ig2"]=floatval($array[$id[2]]["InteMayo"]);
            $info[$ciudad]["sumColR"]=$info[$ciudad]["od1"]+$info[$ciudad]["id1"]+$info[$ciudad]["cd1"]+$info[$ciudad]["od2"]+$info[$ciudad]["id2"]+$info[$ciudad]["cd2"];
            $info[$ciudad]["sumCol1R"]=$info[$ciudad]["oe1"]+$info[$ciudad]["ie1"]+$info[$ciudad]["ce1"]+$info[$ciudad]["oe2"]+$info[$ciudad]["ie2"]+$info[$ciudad]["ce2"];
            $info[$ciudad]["sumtotR"]=$info[$ciudad]["DeteAnteR"]+$info[$ciudad]["DeteActuR"]-$info[$ciudad]["sumRecR"]+$info[$ciudad]["sumColR"]-$info[$ciudad]["sumCol1R"]+$info[$ciudad]["sumNovR"];
            $info[$ciudad]["sp"]=$info[$ciudad]["pa"]+$info[$ciudad]["pa1"]+$info[$ciudad]["pa2"];
            $info[$ciudad]["sumCasB"]=$info[$ciudad]["oa"]+$info[$ciudad]["ia"]+$info[$ciudad]["ca"]+$info[$ciudad]["oa1"]+$info[$ciudad]["ia1"]+$info[$ciudad]["ca1"]+$info[$ciudad]["oa2"]+$info[$ciudad]["ia2"]+$info[$ciudad]["ca2"];
            $info[$ciudad]["sumTT"]=$info[$ciudad]["sumCasB"]-$info[$ciudad]["DeteAnte"]-$info[$ciudad]["DeteAnteR"];
            $info[$ciudad]["spb"]=$info[$ciudad]["pb"]+$info[$ciudad]["pb1"]+$info[$ciudad]["pb2"];
            $info[$ciudad]["sumCasB1"]=$info[$ciudad]["ob"]+$info[$ciudad]["ib"]+$info[$ciudad]["cb"]+$info[$ciudad]["ob1"]+$info[$ciudad]["ib1"]+$info[$ciudad]["cb1"]+$info[$ciudad]["ob2"]+$info[$ciudad]["ib2"]+$info[$ciudad]["cb2"];
            $info[$ciudad]["sumTT1"]=$info[$ciudad]["sumCasB1"]-$info[$ciudad]["DeteActu"]-$info[$ciudad]["DeteActuR"];
            $info[$ciudad]["spc"]=$info[$ciudad]["pc"]+$info[$ciudad]["pc1"]+$info[$ciudad]["pc2"];
            $info[$ciudad]["sumCasB2"]=0;
            $info[$ciudad]["spd"]=$info[$ciudad]["pd"]+$info[$ciudad]["pd1"]+$info[$ciudad]["pd2"];
            $info[$ciudad]["sumTT2"]=$info[$ciudad]["sumCasB2"]-$info[$ciudad]["sumRecR"]-$info[$ciudad]["sumRec"];
            $info[$ciudad]["sumCasB3"]=$info[$ciudad]["od"]+$info[$ciudad]["id"]+$info[$ciudad]["cd"]+$info[$ciudad]["od1"]+$info[$ciudad]["id1"]+$info[$ciudad]["cd1"]+$info[$ciudad]["od2"]+$info[$ciudad]["id2"]+$info[$ciudad]["cd2"];
            $info[$ciudad]["spe"]=$info[$ciudad]["pe"]+$info[$ciudad]["pe1"]+$info[$ciudad]["pe2"];
            $info[$ciudad]["sumCasB4"]=$info[$ciudad]["oe"]+$info[$ciudad]["ie"]+$info[$ciudad]["ce"]+$info[$ciudad]["oe1"]+$info[$ciudad]["ie1"]+$info[$ciudad]["ce1"]+$info[$ciudad]["oe2"]+$info["ie2"]+$info[$ciudad]["ce2"];
            $info[$ciudad]["spf"]=$info[$ciudad]["pf"]+$info[$ciudad]["pf1"]+$info[$ciudad]["pf2"];
            $info[$ciudad]["sumtotA"]=$info[$ciudad]["sumCasB"]+$info[$ciudad]["sumCasB1"]-$info[$ciudad]["sumCasB2"]+$info[$ciudad]["sumCasB3"]-$info[$ciudad]["sumCasB4"]+$info[$ciudad]["sumNovR"];
            $info[$ciudad]["sumtotB"]=$info[$ciudad]["sumTT"]+$info[$ciudad]["sumTT1"]-$info[$ciudad]["sumTT2"]+0-$info[$ciudad]["sumCol1R"]+$info[$ciudad]["sumNovR"];
        }
        //print_r($info);
        //echo "<pre>";
        //print_r($arrayAgrupado);
        //echo "</pre>";
        //MULTAS
        echo "Seccional".$array[0]["Seccional"];
        $info["RESUMEN"]=array(
            "Seccional"=>$array[0]["Seccional"],
            "Desde"=>$array[0]["Desde"],
            "Hasta"=>$array[0]["Hasta"],
            "pa"=>intval($array[0]["ProcAnte"]),
            "oa"=>floatval($array[0]["ObliAnte"]),
            "ca"=>floatval($array[0]["CostAnte"]),
            "ia"=>floatval($array[0]["InteAnte"]),
            "pb"=>floatval($array[0]["ProcActu"]),
            "ob"=>floatval($array[0]["ObliActu"]),
            "cb"=>floatval($array[0]["CostActu"]),
            "ib"=>floatval($array[0]["InteActu"]),
            "pc"=>floatval($array[0]["ProcReca"]),
            "oc"=>floatval($array[0]["ObliReca"]),
            "cc"=>floatval($array[0]["CostReca"]),
            "ic"=>floatval($array[0]["InteReca"]),
            "pd"=>floatval($array[0]["ProcTras"]),
            "od"=>floatval($array[0]["ObliTras"]),
            "cd"=>floatval($array[0]["CostTras"]),
            "id"=>floatval($array[0]["InteTras"]),
            "pe"=>floatval($array[0]["ProcNopa"]),
            "oe"=>floatval($array[0]["ObliNopa"]),
            "ce"=>floatval($array[0]["CostNopa"]),
            "ie"=>floatval($array[0]["InteNopa"]),
            "pf"=>floatval($array[0]["ProcNove"]),
            "of"=>floatval($array[0]["ObliNove"]),
            "cf"=>floatval($array[0]["CostNove"]),
            "if"=>floatval($array[0]["InteNove"]),
            "pg"=>floatval($array[0]["ProcMayo"]),
            "og"=>floatval($array[0]["ObliMayo"]),
            "cg"=>floatval($array[0]["CostMayo"]),
            "ig"=>floatval($array[0]["InteMayo"]),
            "ProcTota"=>floatval($array[0]["ProcTota"]),
            "ObliTota"=>floatval($array[0]["ObliTota"]),
            "CostTota"=>floatval($array[0]["CostTota"]),
            "InteTota"=>floatval($array[0]["InteTota"]),
            "DeteAnte"=>floatval($array[0]["DeteAnte"]),
            "DeteTota"=>floatval($array[0]["DeteTota"]),
            "DeteActu"=>floatval($array[0]["DeteActu"]),
            "CarteraTipo"=>$array[0]["CarteraTipo"],
            "ContadorCargo"=>$array[0]["ContadorCargo"],
            "Contador"=>$array[0]["Contador"],
            "Director"=>$array[0]["Director"],
            "DirectorCargo"=>$array[0]["DirectorCargo"],
            "Abogado"=>$array[0]["Abogado"],
            "AbogadoCargo"=>$array[0]["AbogadoCargo"],
            "date"=>now(),
        );
        $info["RESUMEN"]["sumRec"]=0;
        $info["RESUMEN"]["sumNov"]=0;
        $info["RESUMEN"]["sumCol"]=$info["od"]+$info["id"]+$info["cd"];
        $info["RESUMEN"]["sumCol1"]=$info["oe"]+$info["ie"]+$info["ce"];
        $info["RESUMEN"]["sumTot"]=$info["DeteAnte"]+$info["DeteActu"]-$info["sumRec"]+$info["sumCol"]-$info["sumCol1"]+$info["sumNov"];
        //REINTEGROS
        $info["RESUMEN"]["pa1"]=intval($array[1]["ProcAnte"]);
        $info["RESUMEN"]["oa1"]=floatval($array[1]["ObliAnte"]);
        $info["RESUMEN"]["ca1"]=floatval($array[1]["CostAnte"]);
        $info["RESUMEN"]["ia1"]=floatval($array[1]["InteAnte"]);
        $info["RESUMEN"]["pb1"]=floatval($array[1]["ProcActu"]);
        $info["RESUMEN"]["ob1"]=floatval($array[1]["ObliActu"]);
        $info["RESUMEN"]["cb1"]=floatval($array[1]["CostActu"]);
        $info["RESUMEN"]["ib1"]=floatval($array[1]["InteActu"]);
        $info["RESUMEN"]["pc1"]=floatval($array[1]["ProcReca"]);
        $info["RESUMEN"]["oc1"]=floatval($array[1]["ObliReca"]);
        $info["RESUMEN"]["cc1"]=floatval($array[1]["CostReca"]);
        $info["RESUMEN"]["ic1"]=floatval($array[1]["InteReca"]);
        $info["RESUMEN"]["pd1"]=floatval($array[1]["ProcTras"]);
        $info["RESUMEN"]["od1"]=floatval($array[1]["ObliTras"]);
        $info["RESUMEN"]["cd1"]=floatval($array[1]["CostTras"]);
        $info["RESUMEN"]["id1"]=floatval($array[1]["InteTras"]);
        $info["RESUMEN"]["pe1"]=floatval($array[1]["ProcNopa"]);
        $info["RESUMEN"]["oe1"]=floatval($array[1]["ObliNopa"]);
        $info["RESUMEN"]["ce1"]=floatval($array[1]["CostNopa"]);
        $info["RESUMEN"]["ie1"]=floatval($array[1]["InteNopa"]);
        $info["RESUMEN"]["pf1"]=floatval($array[1]["ProcNove"]);
        $info["RESUMEN"]["of1"]=floatval($array[1]["ObliNove"]);
        $info["RESUMEN"]["cf1"]=floatval($array[1]["CostNove"]);
        $info["RESUMEN"]["if1"]=floatval($array[1]["InteNove"]);
        $info["RESUMEN"]["pg1"]=floatval($array[1]["ProcMayo"]);
        $info["RESUMEN"]["og1"]=floatval($array[1]["ObliMayo"]);
        $info["RESUMEN"]["cg1"]=floatval($array[1]["CostMayo"]);
        $info["RESUMEN"]["ig1"]=floatval($array[1]["InteMayo"]);
        $info["RESUMEN"]["DeteAnteR"]=floatval($array[1]["DeteAnte"]);
        $info["RESUMEN"]["DeteActuR"]=floatval($array[1]["DeteActu"]);
        $info["RESUMEN"]["sumRecR"]=0;
        $info["RESUMEN"]["sumNovR"]=0;
        //INCAPACIDADES
        $info["RESUMEN"]["pa2"]=intval($array[2]["ProcAnte"]);        
        $info["RESUMEN"]["oa2"]=floatval($array[2]["ObliAnte"]);
        $info["RESUMEN"]["ca2"]=floatval($array[2]["CostAnte"]);
        $info["RESUMEN"]["ia2"]=floatval($array[2]["InteAnte"]);
        $info["RESUMEN"]["pb2"]=floatval($array[2]["ProcActu"]);
        $info["RESUMEN"]["ob2"]=floatval($array[2]["ObliActu"]);
        $info["RESUMEN"]["cb2"]=floatval($array[2]["CostActu"]);
        $info["RESUMEN"]["ib2"]=floatval($array[2]["InteActu"]);
        $info["RESUMEN"]["pc2"]=floatval($array[2]["ProcReca"]);
        $info["RESUMEN"]["oc2"]=floatval($array[2]["ObliReca"]);
        $info["RESUMEN"]["cc2"]=floatval($array[2]["CostReca"]);
        $info["RESUMEN"]["ic2"]=floatval($array[2]["InteReca"]);
        $info["RESUMEN"]["pd2"]=floatval($array[2]["ProcTras"]);
        $info["RESUMEN"]["od2"]=floatval($array[2]["ObliTras"]);
        $info["RESUMEN"]["cd2"]=floatval($array[2]["CostTras"]);
        $info["RESUMEN"]["id2"]=floatval($array[2]["InteTras"]);
        $info["RESUMEN"]["pe2"]=floatval($array[2]["ProcNopa"]);
        $info["RESUMEN"]["oe2"]=floatval($array[2]["ObliNopa"]);
        $info["RESUMEN"]["ce2"]=floatval($array[2]["CostNopa"]);
        $info["RESUMEN"]["ie2"]=floatval($array[2]["InteNopa"]);
        $info["RESUMEN"]["pf2"]=floatval($array[2]["ProcNove"]);
        $info["RESUMEN"]["of2"]=floatval($array[2]["ObliNove"]);
        $info["RESUMEN"]["cf2"]=floatval($array[2]["CostNove"]);
        $info["RESUMEN"]["if2"]=floatval($array[2]["InteNove"]);
        $info["RESUMEN"]["pg2"]=floatval($array[2]["ProcMayo"]);
        $info["RESUMEN"]["og2"]=floatval($array[2]["ObliMayo"]);
        $info["RESUMEN"]["cg2"]=floatval($array[2]["CostMayo"]);
        $info["RESUMEN"]["ig2"]=floatval($array[2]["InteMayo"]);
        $info["RESUMEN"]["sumColR"]=$info["RESUMEN"]["od1"]+$info["RESUMEN"]["id1"]+$info["RESUMEN"]["cd1"]+$info["RESUMEN"]["od2"]+$info["RESUMEN"]["id2"]+$info["RESUMEN"]["cd2"];
        $info["RESUMEN"]["sumCol1R"]=$info["RESUMEN"]["oe1"]+$info["RESUMEN"]["ie1"]+$info["RESUMEN"]["ce1"]+$info["RESUMEN"]["oe2"]+$info["RESUMEN"]["ie2"]+$info["RESUMEN"]["ce2"];
        $info["RESUMEN"]["sumtotR"]=$info["RESUMEN"]["DeteAnteR"]+$info["RESUMEN"]["DeteActuR"]-$info["RESUMEN"]["sumRecR"]+$info["RESUMEN"]["sumColR"]-$info["RESUMEN"]["sumCol1R"]+$info["RESUMEN"]["sumNovR"];
        $info["RESUMEN"]["sp"]=$info["RESUMEN"]["pa"]+$info["RESUMEN"]["pa1"]+$info["RESUMEN"]["pa2"];
        $info["RESUMEN"]["sumCasB"]=$info["RESUMEN"]["oa"]+$info["RESUMEN"]["ia"]+$info["RESUMEN"]["ca"]+$info["RESUMEN"]["oa1"]+$info["RESUMEN"]["ia1"]+$info["RESUMEN"]["ca1"]+$info["RESUMEN"]["oa2"]+$info["RESUMEN"]["ia2"]+$info["RESUMEN"]["ca2"];
        $info["RESUMEN"]["sumTT"]=$info["RESUMEN"]["sumCasB"]-$info["RESUMEN"]["DeteAnte"]-$info["RESUMEN"]["DeteAnteR"];
        $info["RESUMEN"]["spb"]=$info["RESUMEN"]["pb"]+$info["RESUMEN"]["pb1"]+$info["RESUMEN"]["pb2"];
        $info["RESUMEN"]["sumCasB1"]=$info["RESUMEN"]["ob"]+$info["RESUMEN"]["ib"]+$info["RESUMEN"]["cb"]+$info["RESUMEN"]["ob1"]+$info["RESUMEN"]["ib1"]+$info["RESUMEN"]["cb1"]+$info["RESUMEN"]["ob2"]+$info["RESUMEN"]["ib2"]+$info["RESUMEN"]["cb2"];
        $info["RESUMEN"]["sumTT1"]=$info["RESUMEN"]["sumCasB1"]-$info["RESUMEN"]["DeteActu"]-$info["RESUMEN"]["DeteActuR"];
        $info["RESUMEN"]["spc"]=$info["RESUMEN"]["pc"]+$info["RESUMEN"]["pc1"]+$info["RESUMEN"]["pc2"];
        $info["RESUMEN"]["sumCasB2"]=0;
        $info["RESUMEN"]["spd"]=$info["RESUMEN"]["pd"]+$info["RESUMEN"]["pd1"]+$info["RESUMEN"]["pd2"];
        $info["RESUMEN"]["sumTT2"]=$info["RESUMEN"]["sumCasB2"]-$info["RESUMEN"]["sumRecR"]-$info["RESUMEN"]["sumRec"];
        $info["RESUMEN"]["sumCasB3"]=$info["RESUMEN"]["od"]+$info["RESUMEN"]["id"]+$info["RESUMEN"]["cd"]+$info["RESUMEN"]["od1"]+$info["RESUMEN"]["id1"]+$info["RESUMEN"]["cd1"]+$info["RESUMEN"]["od2"]+$info["RESUMEN"]["id2"]+$info["RESUMEN"]["cd2"];
        $info["RESUMEN"]["spe"]=$info["RESUMEN"]["pe"]+$info["RESUMEN"]["pe1"]+$info["RESUMEN"]["pe2"];
        $info["RESUMEN"]["sumCasB4"]=$info["RESUMEN"]["oe"]+$info["RESUMEN"]["ie"]+$info["RESUMEN"]["ce"]+$info["RESUMEN"]["oe1"]+$info["RESUMEN"]["ie1"]+$info["RESUMEN"]["ce1"]+$info["RESUMEN"]["oe2"]+$info["RESUMEN"]["ie2"]+$info["RESUMEN"]["ce2"];
        $info["RESUMEN"]["spf"]=$info["RESUMEN"]["pf"]+$info["RESUMEN"]["pf1"]+$info["RESUMEN"]["pf2"];
        $info["RESUMEN"]["sumtotA"]=$info["RESUMEN"]["sumCasB"]+$info["RESUMEN"]["sumCasB1"]-$info["RESUMEN"]["sumCasB2"]+$info["RESUMEN"]["sumCasB3"]-$info["RESUMEN"]["sumCasB4"]+$info["RESUMEN"]["sumNovR"];
        $info["RESUMEN"]["sumtotB"]=$info["RESUMEN"]["sumTT"]+$info["RESUMEN"]["sumTT1"]-$info["RESUMEN"]["sumTT2"]+0-$info["RESUMEN"]["sumCol1R"]+$info["RESUMEN"]["sumNovR"];
        //count($array)
        //print_r($array[1]);
        //echo "Numero de arrays: ".count($array);
        return $info;
    }
    
    function mergeDocx($docxFiles, $output) {
        $outputZip = new ZipArchive;
        if ($outputZip->open($output, ZipArchive::CREATE) !== TRUE) {
            exit("No se puede abrir el archivo de salida <$output>\n");
        }
    
        // Copiar archivos del primer DOCX al archivo de salida
        $zip1 = new ZipArchive;
        if ($zip1->open($docxFiles[0]) === TRUE) {
            for ($i = 0; $i < $zip1->numFiles; $i++) {
                $file = $zip1->getNameIndex($i);
                $outputZip->addFromString($file, $zip1->getFromName($file));
            }
    
            // Fusionar document.xml del primer archivo
            $doc1 = new DOMDocument;
            $doc1->loadXML($zip1->getFromName('word/document.xml'));
            $zip1->close();
        } else {
            exit("No se puede abrir el archivo DOCX: " . $docxFiles[0] . "\n");
        }
    
        // Procesar los archivos restantes
        for ($j = 1; $j < count($docxFiles); $j++) {
            $zip = new ZipArchive;
            if ($zip->open($docxFiles[$j]) === TRUE) {
                // Crear un salto de página antes de agregar el nuevo documento
                $paragraph = $doc1->createElement('w:p');
                $run = $doc1->createElement('w:r');
                $br = $doc1->createElement('w:br');
                $br->setAttribute('w:type', 'page');
                $run->appendChild($br);
                $paragraph->appendChild($run);
                $body1 = $doc1->getElementsByTagName('body')->item(0);
                $body1->appendChild($paragraph);
    
                // Fusionar document.xml del archivo actual
                $doc2 = new DOMDocument;
                $doc2->loadXML($zip->getFromName('word/document.xml'));
                $body2 = $doc2->getElementsByTagName('body')->item(0);
    
                foreach ($body2->childNodes as $child) {
                    $node = $doc1->importNode($child, true);
                    $body1->appendChild($node);
                }
    
                // Copiar todos los archivos del DOCX al archivo de salida, excepto document.xml
                for ($i = 0; $i < $zip->numFiles; $i++) {
                    $file = $zip->getNameIndex($i);
                    if ($file !== 'word/document.xml') {
                        $outputZip->addFromString($file, $zip->getFromName($file));
                    }
                }
    
                $zip->close();
            } else {
                exit("No se puede abrir el archivo DOCX: " . $docxFiles[$j] . "\n");
            }
        }
    
        // Guardar el document.xml fusionado en el archivo de salida
        $outputZip->addFromString('word/document.xml', $doc1->saveXML());
        $outputZip->close();
        //echo "Documentos unificados en $output\n";
    }
    public function reporteMensual(){
        //echo "Entro";
        $info=$this->process();
        //echo "Numero de ciudades: ".count($info)."<br>";
        foreach($info as $ciudad=>$data)
        {
            //echo count()
            //echo "<br>".$data["Seccional"]."<br>";
            $templatePath = 'templates_GCC/Plantilla_CertificadoMensual.docx';
            $templateProcessor = new TemplateProcessor($templatePath);
            $variables = $templateProcessor->getVariables();
            //print_r($info);
            //print_r($variables);
            $templateProcessor->setValue('Seccional',$data["Seccional"]);
            $templateProcessor->setValue('Desde',$data["Desde"]);
            $templateProcessor->setValue('Hasta',$data["Hasta"]);
            $templateProcessor->setValue('date',$data["date"]);
            $templateProcessor->setValue('Abogado',trim($data["Abogado"]));
            $templateProcessor->setValue('Contador',trim($data["Contador"]));
            $templateProcessor->setValue('Director',trim($data["Director"]));
            //se relaiza el siguiente paso con el fin de detecatr las variables XML (Cuestion anormal ya que no deberia tomar la variabel XML)
            foreach($variables as $variable){
                //echo "La variable es:".$variable." y la reemplazo por: ".$info[$variable]."<br>";
                $templateProcessor->setValue($variable,round(floatval($data[$variable])));
                preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
                //print_r($matches);
                $resultados = $matches[1];
                //print_r ($resultados);
                //echo count($resultados);
                for($i=0;$i<count($resultados);$i++){
                    $resultadoF.=$resultados[$i];
                }
                $templateProcessor->setValue($resultadoF,round(floatval($data[$resultadoF])));
                //echo "La variable es:".$resultadoF." y la reemplazo por: ".$info[$resultadoF]."<br>";
                 //echo "La variable es:".$variable." y la reemplazo por: ".$variable."<br>";
                //echo "Value: ".$resultadoF."<br>";
                /*
                if ($info[$resultadoF]==!NULL){
                    echo "La variable es:".$resultadoF." y la reemplazo por: ".$info[$resultadoF]."<br>";
                    $templateProcessor->setValue($resultadoF,$info[$resultadoF]);
                    //echo "Set Values";
                }
                */
                //$var[]=$resultadoF;
                $resultadoF='';
                //$resultados = $matches[1];
                //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
            }
            $seccional = str_replace('"', '',$data["Seccional"]);
            //$seccional=$info["Seccional"];
            //$templateProcessor->saveAs('templates_GCC/CerficadoMensual_'.$info["Seccional"].'.docx');
            $templateProcessor->saveAs('templates_GCC/CertificadoMensual_'.$seccional.'.docx');
        }
            foreach($info as $ciudad=>$data)
            {
                $seccional = str_replace('"', '',$data["Seccional"]);
                $docxFiles []='templates_GCC/CertificadoMensual_'.$seccional.'.docx';
            //$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_'.strval($i).'.docx';
            }
            //echo "Numero de Documentos: ".count($docxFiles)."<br>";
        //$docxFiles = array('templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx','templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx');
        $salida = 'templates_GCC/Resumen_Mensual_Final.docx';
        $this->mergeDocx($docxFiles, $salida);
    }
}
