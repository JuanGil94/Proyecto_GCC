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
        
        $consulta=DB::Query("SELECT Radicado AS 'Sigobius',
        FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha',
        observaciones AS 'Observaciones' 
        FROM Correspondencias  
        WHERE OficioId =".$oficioId." 
        AND ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Sigobius"]=$date["Sigobius"];
            $info["Fecha"]=$date["Fecha"];

        }
        $consulta=DB::Query("SELECT C.Ciudad AS 'CiudadDespacho' FROM Procesos P 
        INNER JOIN Despachos D on P.DespachoId = D.DespachoId
        INNER JOIN Ciudades C ON C.CiudadId =D.CiudadId
        WHERE P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() ){
            $info["CiudadDespacho"]=$date["CiudadDespacho"];
        }
        $consulta=DB::Query("SELECT CI.Ciudad AS 'Ciudad' FROM Ciudades CI
        INNER JOIN Seccionales S ON S.CiudadId = CI.CiudadId
        INNER JOIN Procesos P ON S.SeccionalId = P.SeccionalId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Ciudad"]=$date["Ciudad"];
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
        Fallecimiento AS 'Fallecimiento'
        FROM Sancionados SA
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN TiposDocumentos TD ON TD.TipoDocumentoId = SA.TipoDocumentoId
        where P.ProcesoId =".$procesoId);

        while( $date = $consulta->fetchAssoc() )
		{
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
        $consulta=DB::Query("
        SELECT Radicado + ' de ' + FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Resolucion' 
        FROM Correspondencias where OficioId = 4337 and ProcesoId =".$procesoId);

        while( $date = $consulta->fetchAssoc() )
		{
            $info["Resolucion"]=$date["Resolucion"];
        }
        $consulta=DB::Query("
        SELECT Radicado + ' de ' + FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'resolucionEmbargo' 
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
        Obligacion AS 'Obligacion',
        Radicado AS 'Radicado',
        Costas AS 'Costas',
        InteresesInicial AS 'Intereses',
        FORMAT(Providencia, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaProvidenciaLarga',
        Providencia AS 'fechaProvidencia',
        FORMAT(Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga',
        FORMAT(Acuerdo, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaAcuerdoLarga',
        dbo.Procesos.ObligacionInicial + dbo.Procesos.CostasInicial + dbo.Procesos.InteresesInicial AS ObligacionTotal  
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
        }

        $consulta=DB::Query("SELECT
        UPPER (DESP.Despacho) AS 'Despacho'
        FROM Despachos DESP
        INNER JOIN Procesos P ON DESP.DespachoId = P.DespachoId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Despacho"]=$date["Despacho"];
        }
        $consulta=DB::Query("SELECT C.Concepto AS 'Concepto' 
        FROM Conceptos C
        INNER JOIN Procesos P ON P.ConceptoId = C.ConceptoId
        where P.ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Concepto"]=$date["Concepto"];
        }

        $consulta=DB::Query("SELECT S.Email AS 'SeccionalCorreo',
        S.Direccion AS 'SeccionalDireccion',
        S.Telefonos AS 'SeccionalTelefono',
        s.PiePagina AS 'PiePagina'
         FROM Seccionales S
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SeccionalCorreo"]=$date["SeccionalCorreo"];
            $info["SeccionalDireccion"]=$date["SeccionalDireccion"];
            $info["SeccionalTelefono"]=$date["SeccionalTelefono"];
            $info["PiePagina"]=$date["PiePagina"];
        }

        $consulta=DB::Query("SELECT 
        A.Abogado AS 'Abogado',
        IIF (A.Masculino=1,'Abogado Ejecutor','Abogada Ejecutora') AS 'AbogadoEjecutor',
        IIF (A.Masculino=1,'El Abogado Ejecutor','La Abogada Ejecutora') AS 'ElAbogadoEjecutor'
        FROM Abogados A
        INNER JOIN Procesos P ON P.AbogadoId =A.AbogadoId
        WHERE  P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Abogado"]=$date["Abogado"];
            $info["AbogadoEjecutor"]=$date["AbogadoEjecutor"];
            $info["ElAbogadoEjecutor"]=$date["ElAbogadoEjecutor"];
        }

        $consulta=DB::Query("SELECT U.UserName AS 'usuario' FROM Correspondencias C
        INNER JOIN UserProfile U ON U.UserId = C.UserId
        WHERE OficioId =".$oficioId." AND  C.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["usuario"]=$date["usuario"];
        }
            //agregar al array con su llave.
            //$miArreglo['clave4'] = 'valor4';
            //$info["Direcciones"]=array("Hola","Sooo","Value");
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
        //print_r ($direcciones);
        return $direcciones;
    }
    public function tablaAcuerdo(){
        $consulta=DB::Query("SELECT Cuota,Fecha,Capital,Intereses,Costas,InteresesPlazo,Total from Acuerdos WHERE ProcesoId=".$this->procesoId);
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
?>