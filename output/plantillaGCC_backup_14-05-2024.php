<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class diccionario {
    public $procesoId;
    public function process ($procesoId,$oficioId){
        //echo "value".$oficioId;
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
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
            $info["Sigobius"]=$date["Sigobius"];
            $info["Fecha"]=$date["Fecha"];
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
        Obligacion AS Obligacion,
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
    public function __construct($procesoId,$oficioId,$obligacionLetras,$obligacionTotalLetras){
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
        $this->obligacionLetras=$obligacionLetras;
        $this->obligacionTotalLetras=$obligacionTotalLetras;
    }
    public function persuasivo() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $Despacho=$value["Despacho"];
            $FechaEjecutoriaLarga=$value["FechaEjecutoriaLarga"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $Obligacion=$value["Obligacion"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $SeccionalCorreo=$value["SeccionalCorreo"];
            $SeccionalDireccion=$value["SeccionalDireccion"];
            $SeccionalTelefono=$value["SeccionalTelefono"];
            $ElSenor=$value["ElSenor"];
            $ElSenor=$value["ElSenor"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('FechaEjecutoriaLarga',$FechaEjecutoriaLarga);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('SeccionalCorreo',$SeccionalCorreo);
            $templateWord->setValue('SeccionalDireccion',$SeccionalDireccion);
            $templateWord->setValue('SeccionalTelefono',$SeccionalTelefono);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }
    public function resMandPago() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Concepto=$value["Concepto"];
            $alsenor=$value["alsenor"];
            $Sancionado=$value["Sancionado"];
            $Numero=$value["Numero"];
            $Despacho=$value["Despacho"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $Obligacion=$value["Obligacion"];
            $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
            $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
            $identificado=$value["identificado"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4328.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->saveAs('templates_GCC/resMandPago_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }
    public function citMandPago() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Senor=$value["Senor"];
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Concepto=$value["Concepto"];
            $alsenor=$value["alsenor"];
            $Sancionado=$value["Sancionado"];
            $Numero=$value["Numero"];
            $Despacho=$value["Despacho"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $Obligacion=$value["Obligacion"];
            $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
            $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
            $identificado=$value["identificado"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $SancionadoCiudad=$value["SancionadoCiudad"];
            $SancionadoEmail=$value["SancionadoEmail"];
            $SeccionalDireccion=$value["SeccionalDireccion"];
            $SeccionalTelefono=$value["SeccionalTelefono"];
            $SeccionalCorreo=$value["SeccionalCorreo"];
            $ElSenor=$value["ElSenor"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4329.docx');
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('SancionadoCiudad',$SancionadoCiudad);
            $templateWord->setValue('SancionadoEmail',$SancionadoEmail);
            $templateWord->setValue('SeccionalDireccion',$SeccionalDireccion);
            $templateWord->setValue('SeccionalTelefono',$SeccionalTelefono);
            $templateWord->setValue('SeccionalCorreo',$SeccionalCorreo);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->saveAs('templates_GCC/citMandPago_'.$this->procesoId.'-'.$key.'.docx');
        }       
    } 
    public function susTerm() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $PiePagina=$value["PiePagina"];
        }
            //echo "Numero de Direcciones:".$length=count($direcciones);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4600.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->saveAs('templates_GCC/susTerm_'.$this->procesoId.'.docx');
              
    }
    public function resSusTerm() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $PiePagina=$value["PiePagina"];
        }
            //echo "Numero de Direcciones:".$length=count($direcciones);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4450.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->saveAs('templates_GCC/resSusTerm_'.$this->procesoId.'.docx');
              
    }
    public function notMandPago() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $alsenor=$value["alsenor"];
            $Sancionado=$value["Sancionado"];
            $identificado=$value["identificado"];
            $Numero=$value["Numero"];
            $TipoDocumento=$value["TipoDocumento"];
            $Obligacion=$value["Obligacion"];
            $PiePagina=$value["PiePagina"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $documento=$documento["usuario"];
            $Abogado=$documento["Abogado"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4498.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/notMandPago_'.$this->procesoId.'.docx');
             
    }
    public function constNotAvi() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Sancionado=$value["Sancionado"];
            $Numero=$value["Numero"];
            $PiePagina=$value["PiePagina"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $Abogado=$Abogado["Abogado"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4502.docx');
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/constNotAvi_'.$this->procesoId.'.docx');
    }
    public function resTermOrden() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
            $Sancionado=$value["Sancionado"];
            $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
            $Concepto=$value["Concepto"];
            $Numero=$value["Numero"];
            $Despacho=$value["Despacho"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $alsenor=$value["alsenor"];
        }
            //$direcciones=parent::direcciones();
            //echo "Numero de Direcciones:".$length=count($direcciones);
            //$direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4337.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/resTermOrden_'.$this->procesoId.'.docx');      
    }
    public function notCorMandPago() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4361.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('direccion',$direccion);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/notCorMandPago_'.$this->procesoId.'-'.$key.'.docx');
        }       
    } 
    public function resSegAdelEjec() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4346.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Sancionado=$value["Sancionado"];
            $Numero=$value["Numero"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $Obligacion=$value["Obligacion"];
            $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
            $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
            $identificado=$value["identificado"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $ElSenor=$value["ElSenor"];
            $Despacho=$value["Despacho"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4346.docx');
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->saveAs('templates_GCC/citMandPago_'.$this->procesoId.'.docx');
        
    }
    public function epsSigob() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_2137.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $usuario=$value["usuario"];
           $Senor=$value["Senor"];
           $Abogado=$value["Abogado"];
           $RespetadoSenor=$value["RespetadoSenor"];
           $SancionadoCiudad=$value["SancionadoCiudad"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_2137.docx');
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('SancionadoCiudad',$SancionadoCiudad);
            $templateWord->setValue('Abogado',$Abogado);       
            $templateWord->saveAs('templates_GCC/epsSigob_'.$this->procesoId.'.docx');
    } 
    public function notAviPres() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4509.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $usuario=$value["usuario"];
           $ElSenor=$value["ElSenor"];
           $Abogado=$value["Abogado"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $TipoDocumento=$value["TipoDocumento"];
           $FechaEjecutoriaLarga=$value["FechaEjecutoriaLarga"];
           $ObligacionTotal=$value["ObligacionTotal"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4509.docx');
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('FechaEjecutoriaLarga',$FechaEjecutoriaLarga);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal);      
            $templateWord->saveAs('templates_GCC/notAviPre_'.$this->procesoId.'.docx');
    }
    public function comTermProCorp() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4509.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $TipoDocumento=$value["TipoDocumento"];
           $Radicado=$value["Radicado"];
           $CiudadDespacho=$value["CiudadDespacho"];
           $Despacho=$value["Despacho"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4367.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Radicado',$Radicado);
            $templateWord->setValue('CiudadDespacho',$CiudadDespacho); 
            $templateWord->setValue('Despacho',$Despacho);     
            $templateWord->saveAs('templates_GCC/comTermProCorp_'.$this->procesoId.'.docx');
    }
    public function resDeTermPorPagTot() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4339.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $ObligacionTotalLetras=$this->obligacionTotalLetras;
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $TipoDocumento=$value["TipoDocumento"];
           $Despacho=$value["Despacho"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
           $Concepto=$value["Concepto"];
           $ObligacionLetras=$this->obligacionLetras;
           $Obligacion=$value["Obligacion"];
           $identificado=$value["identificado"];
           $Intereses=$value["Intereses"];
           $Costas=$value["Costas"];
           $alsenor=$value["alsenor"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $ObligacionTotal=$value["ObligacionTotal"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4339.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('ObligacionTotalLetras',$ObligacionTotalLetras);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('Intereses',$Intereses);
            $templateWord->setValue('Costas',$Costas);   
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal);    
            $templateWord->saveAs('templates_GCC/resDeTermPorPagTot_'.$this->procesoId.'.docx');
    }
    public function solEmbDinProdBanc() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4372.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $ObligacionTotalLetras=$this->obligacionTotalLetras;
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $TipoDocumento=$value["TipoDocumento"];
           $identificado=$value["identificado"];
           $Concepto=$value["Concepto"];
           $Observaciones=$value["Observaciones"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4372.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('Observaciones',$Observaciones);
            $templateWord->saveAs('templates_GCC/solEmbDinProdBanc_'.$this->procesoId.'.docx');
    }
    public function comTerProcSanc() {
       
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["SancionadoCiudad"];
            $sancionadoEmail=$value["SancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $usuario=$value["usuario"];
            $Resolucion=$value["Resolucion"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        
        foreach( $direcciones as $key=>$dato){
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1090.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Resolucion',$Resolucion);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/comTerProcSanc_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }
    public function resAvoPresTerMjdCer() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4416.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $ObligacionLetras=$this->obligacionLetras;
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Sancionado=$value["Sancionado"];
           $Numero=$value["Numero"];
           $Documento=$value["Documento"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $FechaEjecutoriaLarga=$value["FechaEjecutoriaLarga"];
           $Despacho=$value["Despacho"];
           $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $Obligacion=$value["Obligacion"];
           $FechaCreacion=$value["FechaCreacion"];
           $saldoObligacion=$value["saldoObligacion"];
           $FechaEjecutoria=$value["FechaEjecutoria"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4416.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);  
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);  
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('documento',$Documento);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('FechaEjecutoriaLarga',$FechaEjecutoriaLarga);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('FechaCreacion',$FechaCreacion);
            $templateWord->setValue('saldoObligacion',$saldoObligacion);
            $templateWord->setValue('FechaEjecutoria',$FechaEjecutoria);
            $templateWord->saveAs('templates_GCC/resAvoPresTerMjdCer_'.$this->procesoId.'.docx');
    }
    public function persCostJudSig() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4547.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $ObligacionLetras=$this->obligacionLetras;
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $Despacho=$value["Despacho"];
            $FechaEjecutoriaLarga=$value["FechaEjecutoriaLarga"];
            $TipoDocumento=$value["TipoDocumento"];
            $documento=$value["documento"];
            $Obligacion=$value["Obligacion"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
            $SeccionalCorreo=$value["SeccionalCorreo"];
            $SeccionalDireccion=$value["SeccionalDireccion"];
            $ElSenor=$value["ElSenor"];
            $identificado=$value["identificado"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4547.docx');
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);  
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('FechaEjecutoriaLarga',$FechaEjecutoriaLarga);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('SeccionalCorreo',$SeccionalCorreo);
            $templateWord->setValue('SeccionalDireccion',$SeccionalDireccion);
            $templateWord->setValue('identificado',$identificado);
            //$templateWord->saveAs('templates_GCC/persCostJudSig_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/persCostJudSig_'.$this->procesoId.'-'.$key.'.docx');
        }      
    }
    public function modParOtrTipOfiSig() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4438.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4438.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Numero',$Numero);       
            $templateWord->saveAs('templates_GCC/modParOtrTipOfiSig_'.$this->procesoId.'.docx');
    }
    public function desComiSig() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4365.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $ElAbogadoEjecutor=$value["El AbogadoEjecutor"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $ElSenor=$value["ElSenor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
           $SeccionalCorreo=$value["SeccionalCorreo"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4365.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('SeccionalCorreo',$SeccionalCorreo);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->saveAs('templates_GCC/desComiSig_'.$this->procesoId.'.docx');
    } 
    public function resEmbSumDin() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4347.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $ObligacionTotalLetras=$this->obligacionTotalLetras;
           $ObligacionTotal=$value["ObligacionTotal"];
           $ObligacionLetras=$this->obligacionLetras;
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $ElSenor=$value["ElSenor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
           $Obligacion=$value["Obligacion"];
           $identificado=$value["identificado"];
           
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4347.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal); 
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('ObligacionTotalLetras',$ObligacionTotalLetras);
            $templateWord->saveAs('templates_GCC/resEmbSumDin_'.$this->procesoId.'.docx');
    }
    public function NotPorAviResSegAde() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4464.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $ObligacionLetras=$this->obligacionLetras;
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $Abogado=$value["Abogado"];
           $ElSenor=$value["ElSenor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $Obligacion=$value["Obligacion"];
           $identificado=$value["identificado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4464.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->saveAs('templates_GCC/NotPorAviResSegAde_'.$this->procesoId.'.docx');
    }
    public function notPorCorrResSegAde() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4465.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $usuario=$value["usuario"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4465.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);  
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            //$templateWord->saveAs('templates_GCC/persCostJudSig_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/notPorCorrResSegAde_'.$this->procesoId.'-'.$key.'.docx');
        }      
    }
    public function citSegAdel() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4354.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $usuario=$value["usuario"];
            $documento=$value["documento"];
            $SeccionalCorreo=$value["SeccionalCorreo"];
            $Costas=$value["Costas"];
            $Intereses=$value["Intereses"];
            $Obligacion=$value["Obligacion"];
            $SeccionalDireccion=$value["SeccionalDireccion"];
            $ObligacionTotal=$value["ObligacionTotal"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4354.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);  
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Costas',$Costas);  
            $templateWord->setValue('SeccionalCorreo',$SeccionalCorreo);
            $templateWord->setValue('Intereses',$Intereses);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal);      
            $templateWord->setValue('SeccionalDireccion',$SeccionalDireccion);
            //$templateWord->saveAs('templates_GCC/persCostJudSig_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/citSegAdel_'.$this->procesoId.'-'.$key.'.docx');
        }      
    }
    public function notPorAviOtrRes() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4484.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4484.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);  
            $templateWord->saveAs('templates_GCC/notPorAviOtrRes_'.$this->procesoId.'.docx');
    }
    public function inforCoacVari() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4500.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
           $FechaAcuerdoLarga=$value["FechaAcuerdoLarga"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4500.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado); 
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('FechaAcuerdoLarga',$FechaAcuerdoLarga);
            $templateWord->saveAs('templates_GCC/inforCoacVari_'.$this->procesoId.'.docx');
    }
    public function conInfoDian() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1098.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $documento=$value["documento"];
           $Observaciones=$value["Observaciones"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1098.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Observaciones',$Observaciones);
            $templateWord->saveAs('templates_GCC/conInfoDian_'.$this->procesoId.'.docx');
    }
    public function resTermAnul() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4338.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $documento=$value["documento"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $Despacho=$value["Despacho"];
           $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
           $Concepto=$value["Concepto"];
           $alsenor=$value["alsenor"];
           $TipoDocumento=$value["TipoDocumento"];
           $ObligacionLetras=$this->obligacionLetras;
           $Obligacion=$value["Obligacion"];
           $alsenor=$value["alsenor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4338.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->saveAs('templates_GCC/resTermAnul_'.$this->procesoId.'.docx');
    }
    public function ofiEnvDespCom() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4366.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $documento=$value["documento"];
           $ElSenor=$value["ElSenor"];
           $TipoDocumento=$value["TipoDocumento"];
           $Resolucion=$value["Resolucion"];
           $SeccionalDireccion=$value["SeccionalDireccion"];
           $Observaciones=$value["Observaciones"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4366.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('SeccionalDireccion',$SeccionalDireccion);
            $templateWord->setValue('Resolucion',$Resolucion);
            $templateWord->setValue('Observaciones',$Observaciones);
            $templateWord->saveAs('templates_GCC/ofiEnvDespCom_'.$this->procesoId.'.docx');
    }
    public function respOfiPetVari() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4514.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Senor=$value["Senor"];
            $Sancionado=$value["Sancionado"];
            $direccion=$value["direccion"];
            $sancionadoCiudad=$value["sancionadoCiudad"];
            $sancionadoEmail=$value["sancionadoEmail"];
            $Numero=$value["Numero"];
            $RespetadoSenor=$value["RespetadoSenor"];
            $PiePagina=$value["PiePagina"];
            $Abogado=$value["Abogado"];
            $usuario=$value["usuario"];
            $documento=$value["documento"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $TipoDocumento=$value["TipoDocumento"];
            $Intereses=$value["Intereses"];
        }   
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4514.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);  
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('sancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('sancionadoEmail',$sancionadoEmail);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            //$templateWord->saveAs('templates_GCC/persCostJudSig_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/respOfiPetVari_'.$this->procesoId.'-'.$key.'.docx');
        }      
    }
    public function resTermMulFall() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4479.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $documento=$value["documento"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $Despacho=$value["Despacho"];
           $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
           $Concepto=$value["Concepto"];
           $alsenor=$value["alsenor"];
           $TipoDocumento=$value["TipoDocumento"];
           $ObligacionTotal=$value["ObligacionTotal"];
           $ObligacionTotalLetras=$this->obligacionTotalLetras;
           $identificado=$value["identificado"];
           $FechaEjecutoriaLarga=$value["FechaEjecutoriaLarga"];
           $Fallecimiento=$value["Fallecimiento"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4479.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('Concepto',$Concepto);
            $templateWord->setValue('alsenor',$alsenor);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal);  
            $templateWord->setValue('ObligacionTotalLetras',$ObligacionTotalLetras);
            $templateWord->setValue('identificado',$identificado);
            $templateWord->setValue('FechaEjecutoriaLarga',$FechaEjecutoriaLarga);
            $templateWord->setValue('Fallecimiento',$Fallecimiento);
            $templateWord->saveAs('templates_GCC/resTermMulFall_'.$this->procesoId.'.docx');
    }
    public function liqCredCost() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4358.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $ObligacionTotal=$value["ObligacionTotal"];
           $Costas=$value["Costas"];
           $Obligacion=$value["Obligacion"];
           $Intereses=$value["Intereses"];
           $Costas=$value["Costas"];
           $ObligacionTotalLetras=$this->obligacionTotalLetras;;
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4358.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal); 
            $templateWord->setValue('Costas',$Costas);   
            $templateWord->setValue('ObligacionTotalLetras',$ObligacionTotalLetras);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('Intereses',$Intereses);
            $templateWord->setValue('Costas',$Costas); 
            $templateWord->saveAs('templates_GCC/liqCredCost_'.$this->procesoId.'.docx');
    }
    public function ofiSoliDese() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4353.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Resolucion=$value["Resolucion"];
           $ElSenor=$value["ElSenor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
           $Senor=$value["Senor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4353.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Resolucion',$Resolucion);
            $templateWord->setValue('ElSenor',$ElSenor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('Senor',$Senor);
            $templateWord->saveAs('templates_GCC/ofiSoliDese_'.$this->procesoId.'.docx');
    }
    public function solInsEmbInmu() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4319.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4319.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->saveAs('templates_GCC/solInsEmbInmu_'.$this->procesoId.'.docx');
    }
    public function consDesfNotiOtrRes() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4527.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4527.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->saveAs('templates_GCC/consDesfNotiOtrRes_'.$this->procesoId.'.docx');
    }
    public function resSuspProc() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4420.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $Despacho=$value["Despacho"];
           $FechaProvidenciaLarga=$value["FechaProvidenciaLarga"];
           $Senor=$value["Senor"];
           $ObligacionLetras=$this->obligacionLetras;
           $Obligacion=$value["Obligacion"];
           $ObligacionTotal=$value["ObligacionTotal"];
           $ObligacionTotalLetras=$this->obligacionTotalLetras;
           $TipoDocumento=$value["TipoDocumento"];
           $documento=$value["documento"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4420.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('senor',$Senor);
            $templateWord->setValue('FechaProvidenciaLarga',$FechaProvidenciaLarga);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('ObligacionTotal',$ObligacionTotal);
            $templateWord->setValue('ObligacionTotalLetras',$ObligacionTotalLetras);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->saveAs('templates_GCC/resSuspProc_'.$this->procesoId.'.docx');
    }
    public function notCorrCertOtrRes() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4427.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            -$Senor=$value["Senor"];
            -$Seccional=$value["Seccional"];
            -$Sigobius=$value["Sigobius"];
            -$Ciudad=$value["Ciudad"];
            -$Fecha=$value["Fecha"];
            -$Sancionado=$value["Sancionado"];
            -$Numero=$value["Numero"];
            -$PiePagina=$value["PiePagina"];
            -$Abogado=$value["Abogado"];
            -$AbogadoEjecutor=$value["AbogadoEjecutor"];
            -$usuario=$value["usuario"];
            -$SancionadoCiudad=$value["SancionadoCiudad"];
            -$SancionadoEmail=$value["SancionadoEmail"];
            $direccion=$value["direccion"];
            $RespetadoSenor=$value["RespetadoSenor"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4427.docx');
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('SancionadoCiudad',$SancionadoCiudad);
            $templateWord->setValue('SancionadoEmail',$SancionadoEmail);
            $templateWord->setValue('Senor',$Senor);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('RespetadoSenor',$RespetadoSenor);
            $templateWord->saveAs('templates_GCC/notCorrCertOtrRes_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }
    public function resEmbInmu() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4331.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           $Seccional=$value["Seccional"];
           $Sigobius=$value["Sigobius"];
           $Ciudad=$value["Ciudad"];
           $Fecha=$value["Fecha"];
           $Numero=$value["Numero"];
           $PiePagina=$value["PiePagina"];
           $usuario=$value["usuario"];
           $Abogado=$value["Abogado"];
           $AbogadoEjecutor=$value["AbogadoEjecutor"];
           $Sancionado=$value["Sancionado"];
           $Despacho=$value["Despacho"];
           $Obligacion=$value["Obligacion"];
           $fechaProvidencia=$value["fechaProvidencia"];
           $ObligacionLetras=$this->obligacionLetras;
           $TipoDocumento=$value["TipoDocumento"];
           $ElAbogadoEjecutor=$value["ElAbogadoEjecutor"];
           $documento=$value["documento"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4331.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('Despacho',$Despacho);
            $templateWord->setValue('fechaProvidencia',$fechaProvidencia);
            $templateWord->setValue('ObligacionLetras',$ObligacionLetras);
            $templateWord->setValue('Obligacion',$Obligacion);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('ElAbogadoEjecutor',$ElAbogadoEjecutor);
            $templateWord->setValue('documento',$documento);
            $templateWord->saveAs('templates_GCC/consDesfNotiOtrRes_'.$this->procesoId.'.docx');
    }
    public function oficRespDerPeti() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_4344.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
            $direccion=$value["direccion"];
            $Seccional=$value["Seccional"];
            $Sigobius=$value["Sigobius"];
            $Ciudad=$value["Ciudad"];
            $Fecha=$value["Fecha"];
            $Numero=$value["Numero"];
            $PiePagina=$value["PiePagina"];
            $usuario=$value["usuario"];
            $Abogado=$value["Abogado"];
            $AbogadoEjecutor=$value["AbogadoEjecutor"];
            $Sancionado=$value["Sancionado"];
            $SancionadoEmail=$value["SancionadoEmail"];
            $sancionadoCiudad=$value["SancionadoCiudad"];
            $Senor=$value["Senor"];
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4344.docx');
            $templateWord->setValue('direccion',$direccion);
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('SancionadoEmail',$SancionadoEmail);
            $templateWord->setValue('SancionadoCiudad',$sancionadoCiudad);
            $templateWord->setValue('Senor',$Senor);
            //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
            $templateWord->saveAs('templates_GCC/oficRespDerPeti_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }
    public function solInsEmba() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_3140.docx');
        $value=parent::process($this->procesoId,$this->oficioId);
        //print_r ($value);
        foreach($value as $param=>$date){
           -$Seccional=$value["Seccional"];
           -$Sigobius=$value["Sigobius"];
           -$Ciudad=$value["Ciudad"];
           -$Fecha=$value["Fecha"];
           -$Numero=$value["Numero"];
           -$PiePagina=$value["PiePagina"];
           -$usuario=$value["usuario"];
           -$Abogado=$value["Abogado"];
           -$AbogadoEjecutor=$value["AbogadoEjecutor"];
           -$Sancionado=$value["Sancionado"];
           -$TipoDocumento=$value["TipoDocumento"];
           -$documento=$value["documento"];
        }
        //$direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_3140.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('Ciudad',$Ciudad);
            $templateWord->setValue('Fecha',$Fecha);   
            $templateWord->setValue('Numero',$Numero);
            $templateWord->setValue('PiePagina',$PiePagina);
            $templateWord->setValue('usuario',$usuario);
            $templateWord->setValue('Abogado',$Abogado);
            $templateWord->setValue('AbogadoEjecutor',$AbogadoEjecutor);
            $templateWord->setValue('Sancionado',$Sancionado);
            $templateWord->setValue('TipoDocumento',$TipoDocumento);
            $templateWord->setValue('documento',$documento);
            $templateWord->saveAs('templates_GCC/solInsEmba_'.$this->procesoId.'.docx');
    }
    
    public function acuPagoSig() {
        $value=parent::tablaAcuerdo();
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_4566.docx');
        $templateWord->cloneRow('Capital', count($value));
        foreach($value as $date){
            //$templateWord->setValues(array('rowValue#'.$date["Cuota"] => htmlspecialchars($date["Cuota"]),'Capital#'.$date["Cuota"]=>htmlspecialchars($date["Capital"])));
            $templateWord->setValue('rowValue#'.$date["Cuota"], htmlspecialchars($date["Cuota"]));
            $templateWord->setValue('Capital#'.$date["Cuota"], htmlspecialchars($date["Capital"]));
            $templateWord->setValue('Fecha \@ dd/MM/yyyy#'.$date["Cuota"], htmlspecialchars($date["Fecha"]));
            $templateWord->setValue('Intereses#'.$date["Cuota"], htmlspecialchars($date["Intereses"]));
            $templateWord->setValue('Costas#'.$date["Cuota"], htmlspecialchars($date["Costas"]));
            $templateWord->setValue('InteresesPlazo#'.$date["Cuota"], htmlspecialchars($date["InteresesPlazo"]));
            $templateWord->setValue('Total#'.$date["Cuota"], htmlspecialchars($date["Total"]));
            $count++;
        }
        $templateWord->saveAs('templates_GCC/acuPagoSig.docx');
    }
    public function funcGlobal(){
        $info=parent::process($this->procesoId,$this->oficioId);
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
        $value=parent::process($procesoId,$oficioId);//se envia el procesoId el numero de la plantilla
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
        Chequeos.Providencia,
        Chequeos.Ejecutoria,
        DATEADD(year, 5, Chequeos.Ejecutoria) AS Prescripcion,
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
        Chequeos.Obligacion,
        Chequeos.Costas,
        TiposDocumentos.TipoDocumento,
        Ciudades.Ciudad,
        Carceles.Carcel,
        Seccionales.Seccional SeccionalDestino,
        SeccionalesView.Seccional,
        SeccionalesView.PiePagina,
        SeccionalesView.CiudadDepartamento,
        Conceptos.Concepto, Chequeos.Plazo
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
            $infoC["Obligacion"]=$date["Obligacion"];
            $infoC["Providencia"]=$date["Providencia"];
            $infoC["Ejecutoria"]=$date["Ejecutoria"];
            $infoC["Prescripcion"]=$date["Prescripcion"];
            $infoC["Ejecutoria"]=$date["Ejecutoria"];
            $infoC["Plazo"]=$date["Plazo"];
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
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_Caratula.docx');
            $templateWord->setValue('Despacho',$infoC["Despacho"]);
            $templateWord->setValue('Concepto',$infoC["Concepto"]);
            $templateWord->setValue('Sancionado',$infoC["Sancionado"]);
            $templateWord->setValue('Documento',$infoC["Documento"]);
            $templateWord->setValue('Obligacion',$infoC["Obligacion"]);
            $templateWord->setValue('Providencia',$infoC["Providencia"]);
            $templateWord->setValue('Ejecutoria',$infoC["Ejecutoria"]);
            $templateWord->setValue('Prescripcion',$infoC["Prescripcion"]);
            $templateWord->setValue('Plazo',$$infoC["Plazo"]);
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
    public $chequeoId;
    public $variables;
    public function process ($chequeoId,$oficioId){
        $this->chequeoId=$chequeoId;
        $this->oficioId=$oficioId;
        $consulta=DB::Query("SELECT S.Seccional AS 'Seccional' FROM Seccionales S
        INNER JOIN Chequeos C ON C.SeccionalId = S.SeccionalId
        where C.ChequeoId=".$chequeoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $info=array(
                "Ciudad"=>$date["Seccional"],
                "Seccional"=>$date["Seccional"]
            );
        }
        $consulta=DB::Query("SELECT Radicado AS 'Sigobius',
        FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha'
        FROM ChequeosOficios
        WHERE OficioId=".$oficioId." and ChequeoId=".$chequeoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Sigobius"]=$date["Sigobius"];
            $info["Fecha"]=$date["Fecha"];
        }
        $variables = array(
            'Seccional' => '',
            'Ciudad' => '',
            'Sigobius' => '',
            'Fecha' => '',
            'Sancionado' =>'',
        );
        $this->variables=$variables;
            return $info;
    }
    public function getVariables(){
        return $this->variables;
    }

}
class plantillaDev extends diccionarioChequeo{
    public $ChequeoId;
    public $oficioId;
    public $obligacionLetras;
    public $obligacionTotalLetras;
    public function __construct($ChequeoId,$oficioId,$obligacionLetras,$obligacionTotalLetras){
        $this->chequeoId=$ChequeoId;
        $this->oficioId=$oficioId;
        $this->obligacionLetras=$obligacionLetras;
        $this->obligacionTotalLetras=$obligacionTotalLetras;
    }
    public function funcGlobal(){
        $info=parent::process($this->chequeoId,$this->oficioId);
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
            echo "Variable del documento ".$resultadoF.".Valor de la variable del diccionario: ".$info[$resultadoF]."<br>";
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