<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class plantillas {
    public $procesoId;
    public function __construct($procesoId){
        $this->procesoId=$procesoId;
    }
    public function persuasivo() {
        //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
        
        $info=DB::Query("SELECT 
        S.Seccional ,
        C.Radicado AS Sigobius,
        CI.Ciudad,
        FORMAT(C.Fecha, 'dd \de MMMM \de yyyy', 'es-ES') AS Fecha,
        IIF (SA.Masculino=1,'Señor','Señora')AS Senor,
        SA.Sancionado,
        STUFF(D.Direccion, 1, 1, UPPER(LEFT(D.Direccion, 1))) AS Direccion,
        CI.Ciudad+ ' ('+DE.Departamento+')' AS SancionadoCiudad,
        'Correo electrónico: '+SA.Email AS 'sancionadoEmail',
        P.Numero AS 'Numero',
        IIF (SA.Masculino=1,'Respestado Señor','Respetada Señora') AS RespetadoSenor,
        UPPER (DESP.Despacho) AS 'Despacho',
        FORMAT(P.Ejecutoria, 'dd \de MMMM \de yyyy', 'es-ES') AS 'FechaEjecutoriaLarga',
        TD.TipoDocumento AS 'TipoDocumento',
        SA.Documento AS 'Documento',
        P.Obligacion AS 'Obligacion en letras',
        P.Obligacion AS 'Obligacion',
        S.Email AS 'SeccionalCorreo',
		S.Direccion AS 'SeccionalDireccion',
		S.Telefonos AS 'SeccionalTelefono',
        S.PiePagina,
        A.Abogado,
        IIF (A.Masculino=1,'Abogador Ejecutor','Abogada Ejecutora') AS 'AbogadoEjecutor',
        U.UserName
        FROM Correspondencias C
        INNER JOIN Procesos P ON P.ProcesoId = C.ProcesoId
        INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId
        INNER JOIN Oficios O ON O.OficioId = C.OficioId
        INNER JOIN Sancionados SA ON SA.SancionadoId = P.SancionadoId
        INNER JOIN Direcciones D ON D.SancionadoId = SA.SancionadoId
        INNER JOIN Ciudades CI ON CI.CiudadId = D.CiudadId
        INNER JOIN Abogados A ON A.AbogadoId = p.AbogadoId
        INNER JOIN UserProfile U ON U.UserId = c.UserId
        INNER JOIN Departamentos DE ON DE.DepartamentoId = CI.DepartamentoId
        INNER JOIN Despachos DESP ON DESP.DespachoId = P.DespachoId
        INNER JOIN TiposDocumentos TD ON TD.TipoDocumentoId = SA.TipoDocumentoId
        where p.Numero = '11001079000020180085200' AND C.OficioId = 1097");

        while( $date = $info->fetchAssoc() )
        {
            $info2[]=array(
                "Seccional"=>$date["Seccional"],
                "Sigobius"=>$date["Sigobius"],
                "Ciudad"=>$date["Ciudad"],
                "Fecha"=>$date["Fecha"],
                "Senor"=>$date["Senor"],
                "Sancionado"=>$date["Sancionado"],
                "direccion"=>$date["Direccion"],
                "sancionadoCiudad"=>$date["SancionadoCiudad"],
                "sancionadoEmail"=>$date["sancionadoEmail"],
                "Numero"=>$date["Numero"],
                "RespetadoSenor"=>$date["RespetadoSenor"],
                "Despacho"=>$date["Despacho"],
                "FechaEjecutoriaLarga"=>$date["FechaEjecutoriaLarga"],
                "TipoDocumento"=>$date["TipoDocumento"],
                "documento"=>$date["Documento"],
                "Obligacion"=>$date["Obligacion"],
                "SeccionalCorreo"=>$date["SeccionalCorreo"],
                "PiePagina"=>$date["PiePagina"],
                "Abogado"=>$date["Abogado"],
                "AbogadoEjecutor"=>$date["AbogadoEjecutor"],
                "usuario"=>$date["UserName"],
                "SeccionalDireccion"=>$date["SeccionalDireccion"],
                "SeccionalTelefono"=>$date["SeccionalTelefono"],

            );
            //return $info;
        }
        
        foreach ($info2 as $key => $value) {
            $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
            //$templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');
            //echo count($key);
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
            // --- Asignamos valores a la plantilla  
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
        

        
        // --- Guardamos el documento
        //$templateWord->saveAs('templates_GCC/Persuasivo_'.$this->procesoId.'.docx');
        //$templateWord->saveAs('templates_GCC/Persuasivo.pdf','PDF');


        header("Content-Disposition: attachment; filename=templates_GCC/Persuasivo.docx; charset=iso-8859-1");
        file_get_contents('templates_GCC/Persuasivo.docx');
        //echo "Hola desde MiClase";
        
        
    }   
}       
?>