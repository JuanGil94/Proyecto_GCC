<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class diccionario {
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
        FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Fecha' 
        FROM Correspondencias  
        WHERE OficioId =".$oficioId." 
        AND ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Sigobius"]=$date["Sigobius"];
            $info["Fecha"]=$date["Fecha"];

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
        IIF (SA.Masculino=1,'al señor','a la señora') AS 'alsenor',
        IIF (SA.Masculino=1,'El señor','la señora') AS 'ElSenor',
        IIF (SA.Masculino=1,'Respestado Señor','Respetada Señora') AS 'RespetadoSenor',
        IIF (SA.Masculino=1,'Señor','Señora')AS 'Senor',
        SA.Sancionado AS 'Sancionado',TD.TipoDocumento AS 'TipoDocumento',
        SA.Documento AS 'Documento',
        SA.Email AS 'SancionadoEmail'
        FROM Sancionados SA
        INNER JOIN Procesos P ON SA.SancionadoId = P.SancionadoId
        INNER JOIN TiposDocumentos TD ON TD.TipoDocumentoId = SA.TipoDocumentoId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["RespetadoSenor"]=$date["RespetadoSenor"];
            $info["Senor"]=$date["Senor"];
            $info["TipoDocumento"]=$date["TipoDocumento"];
            $info["Documento"]=$date["Documento"];
            $info["SancionadoEmail"]=$date["SancionadoEmail"];
            $info["Sancionado"]=$date["Sancionado"];
            $info["alsenor"]=$date["alsenor"];
            $info["ElSenor"]=$date["ElSenor"];
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
        Obligacion AS 'Obligacion en letras', 
        Obligacion AS 'Obligacion',
        FORMAT(Providencia, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaProvidenciaLarga',
        FORMAT(Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga'  
        FROM Procesos
        where ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Numero"]=$date["Numero"];
            $info["Obligacion"]=$date["Obligacion"];
            $info["FechaEjecutoriaLarga"]=$date["FechaEjecutoriaLarga"];
            $info["FechaProvidenciaLarga"]=$date["FechaProvidenciaLarga"];
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
        s.PiePagina AS 'PiePgina'
         FROM Seccionales S
        INNER JOIN Procesos P ON P.SeccionalId = S.SeccionalId
        where P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["SeccionalCorreo"]=$date["SeccionalCorreo"];
            $info["SeccionalDireccion"]=$date["SeccionalDireccion"];
            $info["SeccionalTelefono"]=$date["SeccionalTelefono"];
            $info["PiePgina"]=$date["PiePgina"];
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
            $info["identificado"]=$date["identificado"];
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
}
class plantillas extends diccionario{
    public $procesoId;
    public $oficioId;
    public $obligacionLetras;
    public function __construct($procesoId,$oficioId,$obligacionLetras){
        $this->procesoId=$procesoId;
        $this->oficioId=$oficioId;
        $this->obligacionLetras=$obligacionLetras;
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
            $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
            $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
            $templateWord->saveAs('templates_GCC/notMandPago_'.$this->procesoId.'-'.$key.'.docx');
             
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
            $documento=$documento["usuario"];
            $Abogado=$documento["Abogado"];
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
            $templateWord->setValue('Obligacion',$Obligacion);
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
            $ObligacionLetras=$this->obligacionLetras;
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
}
?>