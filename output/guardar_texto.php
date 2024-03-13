<?php
require_once("include/dbcommon.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el texto enviado por el usuario
    $texto = $_POST["texto"];
    $procesoId=$_POST["procesoId"];
    //echo $texto."<br>";
    //echo $procesoId."<br>";
    $response=DB::Exec("UPDATE Procesos set ConceptoAbogado='".$texto."' where ProcesoId=".$procesoId);
        //$this->resultUpdate=$resultado["response"];
        
        if ($response) {
            echo "<script>alert('Se guardo el ConceptoAbogado Correctamente');window.location.href='../procesos_list.php';</script>";
        }
        else{
            echo "Se presento el siguiente error: ".DB::LastError();
        }
    }