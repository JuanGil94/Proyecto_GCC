<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
//$procesoId=array();
$procesoId=$_POST["procesoId"];
$procesoId=intval($procesoId);
echo "Value: ".$procesoId;
//print_r($procesoId);

if (!is_dir($procesoId)){
    mkdir($procesoId,0777);
}
move_uploaded_file($archivo['tmp_name'],$procesoId.'/'.$nombre);
header("Refresh: 3; URL=../procesos_list.php");
echo "<h1>Documento subido correctamente</h1>";


/*
var_dump($archivo);
die();
*/
class Files {
    private $procesoId;
    public function __construct($procesoId) {
        $this->procesoId=$procesoId;
    }
    public function upload() {
        echo "Hola desde MiClase: ".$this->procesoId;
    }
}
