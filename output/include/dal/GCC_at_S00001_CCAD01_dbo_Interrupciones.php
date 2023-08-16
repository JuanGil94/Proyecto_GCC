<?php
$dalTableInterrupciones = array();
$dalTableInterrupciones["InterrupcionId"] = array("type"=>3,"varname"=>"InterrupcionId", "name" => "InterrupcionId", "autoInc" => "1");
$dalTableInterrupciones["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableInterrupciones["Inicio"] = array("type"=>7,"varname"=>"Inicio", "name" => "Inicio", "autoInc" => "0");
$dalTableInterrupciones["Finalizacion"] = array("type"=>7,"varname"=>"Finalizacion", "name" => "Finalizacion", "autoInc" => "0");
$dalTableInterrupciones["Suspension"] = array("type"=>11,"varname"=>"Suspension", "name" => "Suspension", "autoInc" => "0");
$dalTableInterrupciones["InterrupcionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Interrupciones"] = &$dalTableInterrupciones;
?>