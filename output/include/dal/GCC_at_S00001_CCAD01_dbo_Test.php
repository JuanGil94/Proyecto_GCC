<?php
$dalTableTest = array();
$dalTableTest["TestId"] = array("type"=>3,"varname"=>"TestId", "name" => "TestId", "autoInc" => "1");
$dalTableTest["Test"] = array("type"=>200,"varname"=>"Test", "name" => "Test", "autoInc" => "0");
$dalTableTest["Nivel"] = array("type"=>200,"varname"=>"Nivel", "name" => "Nivel", "autoInc" => "0");
$dalTableTest["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTableTest["Porcentaje"] = array("type"=>5,"varname"=>"Porcentaje", "name" => "Porcentaje", "autoInc" => "0");
$dalTableTest["TestId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Test"] = &$dalTableTest;
?>