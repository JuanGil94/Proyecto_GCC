<?php
require 'vendor/autoload.php';

// Ruta de la plantilla Word
$plantillaPath = 'ruta/a/tu/plantilla.docx';

// Crear un objeto TemplateProcessor con la plantilla
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($plantillaPath);

// Definir datos para reemplazar en la tabla
$datosTabla = array(
    array('NOMBRE1' => 'Juan', 'EDAD1' => 25),
    array('NOMBRE2' => 'María', 'EDAD2' => 30),
    // Agrega más filas según sea necesario
);

// Reemplazar los marcadores de posición en la tabla
foreach ($datosTabla as $fila => $datos) {
    foreach ($datos as $columna => $valor) {
        $templateProcessor->setValue($columna, $valor, $fila + 1); // +1 porque las filas en la plantilla comienzan desde 1
    }
}

// Guardar el nuevo documento
$nuevoDocumentoPath = 'ruta/a/tu/nuevo/documento.docx';
$templateProcessor->saveAs($nuevoDocumentoPath);

// Descargar el nuevo documento
header("Content-Disposition: attachment; filename=nuevo_documento.docx");
readfile($nuevoDocumentoPath);
exit;
?>
