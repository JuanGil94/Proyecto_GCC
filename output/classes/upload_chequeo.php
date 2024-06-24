<?php
$archivo = $_FILES['archivo'];
$chequeoId=$_POST["chequeoId"];
$chequeoId=intval($chequeoId);
//echo "Value: ".$procesoId;
//print_r($procesoId);

if (!is_dir($chequeoId)){
    mkdir($chequeoId,0777);
}

for ($i=0;$i<count($archivo["name"]);$i++){
    if ($archivo["error"][$i]== UPLOAD_ERR_OK){
        $nombreArchivo = $archivo["name"][$i];
        $tipoArchivo = $archivo["type"][$i];
        $tamanioArchivo = $archivo["size"][$i];
        $archivoTemporal = $archivo["tmp_name"][$i];
        // Mover el archivo a una ubicación deseada
        //$ubicacionDestino = "carpeta_destino/" . $nombreArchivo;
        $flag=move_uploaded_file($archivoTemporal, $chequeoId.'/'.$nombreArchivo);
        //echo $flag."<br>";
        //echo "Archivo subido con éxito: $ubicacionDestino<br>";      
    }
    else {
        echo "Error en la carga del archivo $i.<br>";
    }
}
if ($flag==1){
    echo "<script>alert('Archivos Subidos Correctamentenete');window.location.href='../Chequeos_list.php';</script>";
    //echo "<h1>Documentos subidos correctamente</h1>";
    //header("Refresh: 2; URL=../procesos_list.php");
}
