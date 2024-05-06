<?php
$dalTableFechas = array();
$dalTableFechas["FechaId"] = array("type"=>3,"varname"=>"FechaId", "name" => "FechaId", "autoInc" => "1");
$dalTableFechas["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableFechas["ActuacionId"] = array("type"=>3,"varname"=>"ActuacionId", "name" => "ActuacionId", "autoInc" => "0");
$dalTableFechas["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableFechas["Resolucion"] = array("type"=>200,"varname"=>"Resolucion", "name" => "Resolucion", "autoInc" => "0");
$dalTableFechas["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableFechas["FechaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Fechas"] = &$dalTableFechas;
?>