<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si el archivo fue enviado
    if (isset($_FILES['uploadedFile']) && isset($_POST['OficioId'])) {
        $file = $_FILES['uploadedFile'];
        $oficioId = htmlspecialchars($_POST['OficioId']); // Sanitizar el OficioId
 
        // Validar la extensión del archivo
        $allowedExtensions = ['doc', 'docx'];
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
 
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            echo "Error: Solo se permiten archivos Word (.doc, .docx).";
            exit;
        }
 
        // Definir el nombre del archivo
        $newFileName = "Plantilla_" . $oficioId . "." . $fileExtension;
 
        // Carpeta de destino
        $uploadDir = __DIR__ . "/templates_GCC/";
        //$uploadDir ="Projects/Proyecto_PCC_29112024/output/templates_GCC/";
 
        // Asegurarse de que la carpeta existe
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
 
        // Mover el archivo subido a la carpeta de destino
        $uploadFilePath = $uploadDir . $newFileName;
        if (move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
            echo "Archivo guardado como: " . $newFileName;
        } else {
            echo "Error al guardar el archivo.";
        }
    } else {
        echo "No se recibió archivo o OficioId.";
    }
}
?>