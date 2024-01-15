<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
//$procesoId=array();
$chequeoId=$_POST["chequeoId"];
$chequeoId=intval($chequeoId);
echo "Name: ".$nombre;
echo "Value: ".$chequeoId;
//print_r($procesoId);
/*
if (!is_dir($procesoId)){
    mkdir($procesoId,0777);
}
*/
$nombre='Chequeo_'.$chequeoId.'.pdf';
move_uploaded_file($archivo['tmp_name'],$nombre);
header("Refresh: 3; URL=../chequeos_list.php");
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
