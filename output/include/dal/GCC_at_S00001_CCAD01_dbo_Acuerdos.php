<?php
$dalTableAcuerdos = array();
$dalTableAcuerdos["AcuerdoId"] = array("type"=>3,"varname"=>"AcuerdoId", "name" => "AcuerdoId", "autoInc" => "1");
$dalTableAcuerdos["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableAcuerdos["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableAcuerdos["Total"] = array("type"=>6,"varname"=>"Total", "name" => "Total", "autoInc" => "0");
$dalTableAcuerdos["Capital"] = array("type"=>6,"varname"=>"Capital", "name" => "Capital", "autoInc" => "0");
$dalTableAcuerdos["Intereses"] = array("type"=>6,"varname"=>"Intereses", "name" => "Intereses", "autoInc" => "0");
$dalTableAcuerdos["Cuota"] = array("type"=>3,"varname"=>"Cuota", "name" => "Cuota", "autoInc" => "0");
$dalTableAcuerdos["Costas"] = array("type"=>6,"varname"=>"Costas", "name" => "Costas", "autoInc" => "0");
$dalTableAcuerdos["InteresesPlazo"] = array("type"=>6,"varname"=>"InteresesPlazo", "name" => "InteresesPlazo", "autoInc" => "0");
$dalTableAcuerdos["AcuerdoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Acuerdos"] = &$dalTableAcuerdos;
?>