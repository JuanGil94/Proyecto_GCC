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
            $info["documento"]=$date["documento"];
            $info["SancionadoEmail"]=$date["SancionadoEmail"];
            $info["Sancionado"]=$date["Sancionado"];
            $info["alsenor"]=$date["alsenor"];
            $info["ElSenor"]=$date["ElSenor"];
            $info["Costas"]=$date["Costas"];
            $info["identificado"]=$date["identificado"];
        }
        $consulta=DB::Query("
        SELECT Radicado + ' de ' + FORMAT(Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS 'Resolucion' 
        FROM Correspondencias where OficioId = 4337 and ProcesoId =".$procesoId);

        while( $date = $consulta->fetchAssoc() )
		{
            $info["Resolucion"]=$date["Resolucion"];
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
        FORMAT(Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga',
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
            $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
           $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
           $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
           $ElAbogadoEjecutor=$$value["ElAbogadoEjecutor"];
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
}
?>