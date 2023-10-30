<?php
require_once("include/dbcommon.php");
    if (isset($_GET["w1"])) {
        $procesoId = $_GET["w1"];
    }
    $procesoId=intval($procesoId);
    $consulta=DB::Query("SELECT * FROM Procesos where ProcesoId =".$procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
           echo $obligacion=$date["Obligacion"];
        }
