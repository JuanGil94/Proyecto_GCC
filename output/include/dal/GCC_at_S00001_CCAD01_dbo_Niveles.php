<?php
$dalTableNiveles = array();
$dalTableNiveles["NivelId"] = array("type"=>3,"varname"=>"NivelId", "name" => "NivelId", "autoInc" => "1");
$dalTableNiveles["Nivel"] = array("type"=>200,"varname"=>"Nivel", "name" => "Nivel", "autoInc" => "0");
$dalTableNiveles["Desde"] = array("type"=>3,"varname"=>"Desde", "name" => "Desde", "autoInc" => "0");
$dalTableNiveles["Hasta"] = array("type"=>3,"varname"=>"Hasta", "name" => "Hasta", "autoInc" => "0");
$dalTableNiveles["Busqueda"] = array("type"=>3,"varname"=>"Busqueda", "name" => "Busqueda", "autoInc" => "0");
$dalTableNiveles["Antiguedad"] = array("type"=>3,"varname"=>"Antiguedad", "name" => "Antiguedad", "autoInc" => "0");
$dalTableNiveles["Clasificacion"] = array("type"=>200,"varname"=>"Clasificacion", "name" => "Clasificacion", "autoInc" => "0");
$dalTableNiveles["NivelId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Niveles"] = &$dalTableNiveles;
?>