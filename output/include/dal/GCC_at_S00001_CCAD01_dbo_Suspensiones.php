<?php
$dalTableSuspensiones = array();
$dalTableSuspensiones["SuspensionId"] = array("type"=>3,"varname"=>"SuspensionId", "name" => "SuspensionId", "autoInc" => "1");
$dalTableSuspensiones["Suspension"] = array("type"=>200,"varname"=>"Suspension", "name" => "Suspension", "autoInc" => "0");
$dalTableSuspensiones["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableSuspensiones["Sigobius"] = array("type"=>200,"varname"=>"Sigobius", "name" => "Sigobius", "autoInc" => "0");
$dalTableSuspensiones["Desde"] = array("type"=>7,"varname"=>"Desde", "name" => "Desde", "autoInc" => "0");
$dalTableSuspensiones["Hasta"] = array("type"=>7,"varname"=>"Hasta", "name" => "Hasta", "autoInc" => "0");
$dalTableSuspensiones["SuspensionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Suspensiones"] = &$dalTableSuspensiones;
?>