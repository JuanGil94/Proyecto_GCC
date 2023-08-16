<?php
$dalTableFestivos = array();
$dalTableFestivos["FestivoId"] = array("type"=>3,"varname"=>"FestivoId", "name" => "FestivoId", "autoInc" => "1");
$dalTableFestivos["Festivo"] = array("type"=>200,"varname"=>"Festivo", "name" => "Festivo", "autoInc" => "0");
$dalTableFestivos["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableFestivos["FestivoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Festivos"] = &$dalTableFestivos;
?>