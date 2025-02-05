<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Comprobar si se ha pasado el parámetro 'file'
if (isset($_GET['file'])) {
    $filePath = $_GET['file'];

    // Verificar si el archivo existe
    if (file_exists($filePath)) {
        // Establecer cabeceras para la descarga
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));

        // Limpiar cualquier salida previa
        ob_clean();
        flush();

        // Leer el archivo y enviarlo al navegador
        readfile($filePath);
        exit;
    } else {
        echo "Error: El archivo no existe en la ruta especificada.";
    }
} else {
    echo "Error: No se ha proporcionado la ruta del archivo.";
}
?>
