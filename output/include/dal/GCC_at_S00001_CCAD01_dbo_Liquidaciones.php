<?php
$dalTableLiquidaciones = array();
$dalTableLiquidaciones["LiquidacionId"] = array("type"=>3,"varname"=>"LiquidacionId", "name" => "LiquidacionId", "autoInc" => "1");
$dalTableLiquidaciones["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableLiquidaciones["Cuota"] = array("type"=>3,"varname"=>"Cuota", "name" => "Cuota", "autoInc" => "0");
$dalTableLiquidaciones["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableLiquidaciones["Capital"] = array("type"=>6,"varname"=>"Capital", "name" => "Capital", "autoInc" => "0");
$dalTableLiquidaciones["Intereses"] = array("type"=>6,"varname"=>"Intereses", "name" => "Intereses", "autoInc" => "0");
$dalTableLiquidaciones["Total"] = array("type"=>6,"varname"=>"Total", "name" => "Total", "autoInc" => "0");
$dalTableLiquidaciones["Costas"] = array("type"=>6,"varname"=>"Costas", "name" => "Costas", "autoInc" => "0");
$dalTableLiquidaciones["InteresesPlazo"] = array("type"=>6,"varname"=>"InteresesPlazo", "name" => "InteresesPlazo", "autoInc" => "0");
$dalTableLiquidaciones["LiquidacionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Liquidaciones"] = &$dalTableLiquidaciones;
?>