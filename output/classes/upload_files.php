<?php
if (isset($_POST['variablePOST'])) {
    $valorPOST = htmlspecialchars($_POST['variablePOST']);
    //echo "Valor recibido por POST: " . $valorPOST . "<br>";
}
$procesoId=$_POST["variablePOST"];
if (!is_dir($procesoId)){
    mkdir($procesoId,0777);
}
if (!empty($_FILES['archivos']['name'][0])) {
    $carpetaDestino = $procesoId."/"; // Carpeta donde se guardarán los archivos
    $archivosSubidos = [];

    // Recorrer cada archivo subido
    for ($i = 0; $i < count($_FILES['archivos']['name']); $i++) {
        $nombreArchivo = basename($_FILES['archivos']['name'][$i]);
        $rutaArchivo = $carpetaDestino . $nombreArchivo;

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES['archivos']['tmp_name'][$i], $rutaArchivo)) {
            $archivosSubidos[] = htmlspecialchars($nombreArchivo) . " se ha subido correctamente.";
        } else {
            $archivosSubidos[] = "Error al subir " . htmlspecialchars($nombreArchivo) . ".";
        }
    }
    // Mostrar los resultados de la subida
    //echo implode("<br>", $archivosSubidos);
} else {
    echo "No se seleccionaron archivos.";
}
/*

$archivo = $_FILES['archivo'];
$procesoId=$_POST["procesoId"];
$procesoId=intval($procesoId);
//echo "Value: ".$procesoId;
//print_r($procesoId);

if (!is_dir($procesoId)){
    mkdir($procesoId,0777);
}

for ($i=0;$i<count($archivo["name"]);$i++){
    if ($archivo["error"][$i]== UPLOAD_ERR_OK){
        $nombreArchivo = $archivo["name"][$i];
        $tipoArchivo = $archivo["type"][$i];
        $tamanioArchivo = $archivo["size"][$i];
        $archivoTemporal = $archivo["tmp_name"][$i];
        // Mover el archivo a una ubicación deseada
        //$ubicacionDestino = "carpeta_destino/" . $nombreArchivo;
        $flag=move_uploaded_file($archivoTemporal, $procesoId.'/'.$nombreArchivo);
        //echo $flag."<br>";
        //echo "Archivo subido con éxito: $ubicacionDestino<br>";      
    }
    else {
        echo "Error en la carga del archivo $i.<br>";
    }
}
if ($flag==1){
    
    echo "<script>alert('Archivos Subidos Correctamentenete');window.location.href='../procesos_list.php';</script>";
    //echo "<h1>Documentos subidos correctamente</h1>";
    //header("Refresh: 2; URL=../procesos_list.php");
}
    */
//header("Refresh: 3; URL=../procesos_list.php");
//echo "<h1>Documento subido correctamente</h1>";
