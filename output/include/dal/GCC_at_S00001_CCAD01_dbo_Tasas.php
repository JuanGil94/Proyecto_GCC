<?php
$dalTableTasas = array();
$dalTableTasas["TasaId"] = array("type"=>3,"varname"=>"TasaId", "name" => "TasaId", "autoInc" => "1");
$dalTableTasas["Desde"] = array("type"=>7,"varname"=>"Desde", "name" => "Desde", "autoInc" => "0");
$dalTableTasas["Hasta"] = array("type"=>7,"varname"=>"Hasta", "name" => "Hasta", "autoInc" => "0");
$dalTableTasas["Tasa"] = array("type"=>5,"varname"=>"Tasa", "name" => "Tasa", "autoInc" => "0");
$dalTableTasas["Tipo"] = array("type"=>3,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTableTasas["TasaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Tasas"] = &$dalTableTasas;
?>