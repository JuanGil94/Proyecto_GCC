<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class diccionario {
    public $procesoId, $sigobius;
    public function process ($procesoId,$oficioId,$sigobius){
        //echo "value".$oficioId;
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
        $consulta=DB::Query("SELECT S.Seccional AS 'Seccional' FROM Seccionales S
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId
        where P.ProcesoId =".$procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $info=array(
                "Seccional"=>$date["Seccional"]
            );
        }
        $info["Sigobius"]=$this->sigobius;
        $consulta=DB::Query("SELECT FORMAT(GETDATE(), 'dd \de MMMM \de yyyy', 'es-ES') AS 'fechahoy'");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Fecha"]=$date["fechahoy"];
            $info["fecha"]=$date["fechahoy"];
        }
        $consulta=DB::Query("SELECT C.Radicado AS 'Sigobius',
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha',
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaDiezDias',
        C.Observaciones AS 'Observaciones',
		O.Oficio AS 'Oficio'
        FROM Correspondencias  C
        INNER JOIN Oficios O ON O.OficioId = C.OficioId
        WHERE O.OficioId =".$oficioId."AND C.ProcesoId =".$procesoId);
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
            $info["usuario"]=$date["usuario"];
            $info["Ano"]=$date["Ano"];
            $info["Dia"]=$date["Dia"];
            $info["Mes"]=$date["Mes"];
        }

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
        $consulta=DB::Query("SELECT 
        CI.Ciudad AS 'SancionadoCiudad'
        FROM Direcciones D
        INNER JOIN Sancionados SA ON SA.SancionadoId = D.SancionadoId
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN Ciudades CI ON CI.CiudadId =D.CiudadId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SancionadoCiudad"]=$date["SancionadoCiudad"];
        }

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
            'usuario' => '',
            'FechaAcuerdo' => '',
            'Plazo' => '',
            'Recaudo' => '',
        );
        $this->variables=$variables;
            //$numVariables=count(array_keys($variables));
            //echo $numVariables;
            return $info;
    }
    public function direcciones(){
        $consulta2=DB::Query("SELECT 
        STUFF(D.Direccion, 1, 1, UPPER(LEFT(D.Direccion, 1))) AS 'Direccion'
        FROM Direcciones D
        INNER JOIN Sancionados SA ON SA.SancionadoId = D.SancionadoId
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN Ciudades CI ON CI.CiudadId =D.CiudadId
        where P.ProcesoId =".$this->procesoId);
        while( $date = $consulta2->fetchAssoc() )
		{
            $direcciones[]=$date["Direccion"];
        }
        //echo "Numero de Direcciones: ".count($direcciones);
        if (count($direcciones)<1){
            echo "<script>var aceptar=confirm ('El sancionado debe contener por lo menos una direccion');if(aceptar){location.reload();}</script>";
            exit();
        }
        $this->noDirecciones=count($direcciones);
        //print_r ($direcciones);
        return $direcciones;
    }
    public function tablaAcuerdo(){
        $consulta=DB::Query("SELECT Cuota,Fecha,Capital,Intereses,Costas,InteresesPlazo,Total 
        from Acuerdos WHERE ProcesoId=".$this->procesoId);
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
    }
    public function funcGlobal(){
        $info=parent::process($this->procesoId,$this->oficioId,$this->sigobius);
        $direcciones=parent::direcciones();
        $templatePath = 'templates_GCC/Plantilla_'.$this->oficioId.'.docx';
        // Crear un objeto TemplateProcessor
        $templateProcessor = new TemplateProcessor($templatePath);
        $variables = $templateProcessor->getVariables();
        //echo count($variables);
        //print_r($variables);
        $case=count($direcciones);
        if($case>0){
            foreach( $direcciones as $key=>$dato){
                $templateProcessor = new TemplateProcessor($templatePath);
                $direccion=$dato;
                $templateProcessor->setValue('direccion',$direccion);
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
                //$var[]=$resultadoF;
                $resultadoF='';
                //$resultados = $matches[1];
                //$resultadoF=$resultados[0].$resultados[1].$resultados[2].$resultados[3];
            }

            $templateProcessor->saveAs('templates_GCC/Archivo_'.$this->procesoId.'_'.$this->oficioId.'.docx');
        }
    }
    public function getNoDirecciones(){
        return $this->noDirecciones;
    }
    /*
    public function acuPagoSig() {
        function calcularPagoMensual($tasa, $nper, $va) {
            // Convertir la tasa de interés anual a la tasa de interés por período
            $tasa_periodo = $tasa / 12 / 100; // Dividir por 12 para obtener la tasa mensual
        
            // Calcular el pago mensual utilizando la fórmula de amortización de préstamos
            $pago = ($tasa_periodo * $va) / (1 - pow(1 + $tasa_periodo, -$nper));
        
            return $pago;
        }
        
        // Ejemplo de uso
        $tasaInteresAnual = 12; // Tasa de interés anual
        $plazoEnMeses = 12; // Número total de pagos del préstamo
        $valorPrestamo = 7377170; // Valor presente del préstamo
        $pagoMensual = calcularPagoMensual($tasaInteresAnual, $plazoEnMeses, $valorPrestamo);
        
        echo "El pago mensual necesario es: " . number_format($pagoMensual, 2);
    } 
    */
}
class plantillaCaratulas extends diccionario{
    public function caratulaProceso($procesoId,$oficioId) {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($procesoId,$oficioId,'');//se envia el procesoId el numero de la plantilla
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
            $templateWord->saveAs('templates_GCC/carProceso'.$this->procesoId.'.docx');
              
    }
    public function caratulaChequeo($chequeoId){
        $consulta=DB::Query("SELECT ChequeosSancionados.ChequeoSancionadoId,
        Chequeos.ChequeoId,
        Chequeos.Fecha,
        Chequeos.Origen,
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
            $templateWord->saveAs('templates_GCC/carChequeo'.$chequeoId.'.docx');
    }
}
class diccionarioChequeo{
    public $chequeoId,$sigobius;
    public $variables;
    public function process ($chequeoId,$oficioId,$sigobius){
        $this->chequeoId=$chequeoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
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
            $info["Usuario"]=$date["Usuario"];
            $info["CUI"]=$date["CUI"];
            $info["FechaProvidencia"]=$date["FechaProvidencia"];
            $info["Obligacion"]=$date["Obligacion"];
            $info["FechaEjecutoria"]=$date["FechaEjecutoria"];
        }
        
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

}
class plantillaDev extends diccionarioChequeo{
    public $ChequeoId,$oficioId,$sigobius;
    public function __construct($ChequeoId,$oficioId,$sigobius){
        $this->chequeoId=$ChequeoId;
        $this->oficioId=$oficioId;
        $this->sigobius=$sigobius;
    }
    public function funcGlobal(){
        $info=parent::process($this->chequeoId,$this->oficioId,$this->sigobius);
        //$direcciones=parent::direcciones();
        $templatePath = 'templates_GCC/Plantilla_'.$this->oficioId.'.docx';
        // Crear un objeto TemplateProcessor
        $templateProcessor = new TemplateProcessor($templatePath);
        $variables = $templateProcessor->getVariables();
        //print_r($variables);
        //echo count($variables);
        //print_r($variables);
        //$case=count($direcciones);
        $templateProcessor = new TemplateProcessor($templatePath);
        //$direccion=$dato;
        //$templateProcessor->setValue('direccion',$direccion);
        foreach($variables as $variable){
            preg_match_all('/<w:t>(.*?)<\/w:t>/', $variable, $matches);
            //print_r();
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
        $templateProcessor->saveAs('templates_GCC/Archivo_'.$this->chequeoId.'_'.$this->oficioId.'.docx');  

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

?>