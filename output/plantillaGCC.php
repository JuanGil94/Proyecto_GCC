<?php

require_once dirname(__FILE__).'/libs/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

class plantillas {
    public function persuasivo() {
        $templateWord = new TemplateProcessor('templates_GCC/Plantilla_1097.docx');

        $nombre = "Juan";
        $direccion = "Mi direcci�n";
        $municipio = "Mrd";
        $provincia = "Bdj";
        $cp = "02541";
        $telefono = "24536784";


        // --- Asignamos valores a la plantilla
        $templateWord->setValue('sancionado',$nombre);
        $templateWord->setValue('direccion_empresa',$direccion);
        $templateWord->setValue('municipio_empresa',$municipio);
        $templateWord->setValue('provincia_empresa',$provincia);
        $templateWord->setValue('cp_empresa',$cp);
        $templateWord->setValue('telefono_empresa',$telefono);

        // --- Guardamos el documento
        $templateWord->saveAs('templates_GCC/Persuasivo.docx');

        header("Content-Disposition: attachment; filename=templates_GCC/Persuasivo.docx; charset=iso-8859-1");
        echo file_get_contents('templates_GCC/Persuasivo.docx');
        echo "Hola desde MiClase";
    }
}

        
?>