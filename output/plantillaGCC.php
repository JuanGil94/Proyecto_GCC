<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class diccionario {
    public function process ($procesoId){
        $this->procesoId=$procesoId;

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
        WHERE OficioId = 1097 
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

        $consulta=DB::Query("SELECT Numero AS 'Numero',Obligacion AS 'Obligacion en letras', 
        Obligacion AS 'Obligacion',
        FORMAT(Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga'  
        FROM Procesos
        where ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Numero"]=$date["Numero"];
            $info["Obligacion"]=$date["Obligacion"];
            $info["FechaEjecutoriaLarga"]=$date["FechaEjecutoriaLarga"];
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
        IIF (A.Masculino=1,'Abogador Ejecutor','Abogada Ejecutora') AS 'AbogadoEjecutor'
        FROM Abogados A
        INNER JOIN Procesos P ON P.AbogadoId =A.AbogadoId
        WHERE  P.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $info["Abogado"]=$date["Abogado"];
        }

        $consulta=DB::Query("SELECT U.UserName AS 'usuario' FROM Correspondencias C
        INNER JOIN UserProfile U ON U.UserId = C.UserId
        WHERE OficioId =1097 AND  C.ProcesoId =".$procesoId);
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
    public function __construct($procesoId){
        $this->procesoId=$procesoId;
    }
    public function persuasivo() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        $value=parent::process($this->procesoId);
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
            $sanhocionadoEmail=$value["sancionadoEmail"];
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
        }
        $direcciones=parent::direcciones();
        //echo "Numero de Direcciones:".$length=count($direcciones);
        foreach( $direcciones as $key=>$dato){
            $direccion=$dato;
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
            $templateWord->setValue('Seccional',$Seccional);
            $templateWord->setValue('Sigobius',$Sigobius);
            $templateWord->setValue('ciudad',$Ciudad);
            $templateWord->setValue('fecha',$Fecha);   
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
            $templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'-'.$key.'.docx');
        }       
    }   
}       
?>