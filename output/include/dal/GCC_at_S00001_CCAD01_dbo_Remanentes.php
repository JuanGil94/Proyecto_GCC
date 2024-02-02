<?php
$dalTableRemanentes = array();
$dalTableRemanentes["RemanenteId"] = array("type"=>3,"varname"=>"RemanenteId", "name" => "RemanenteId", "autoInc" => "1");
$dalTableRemanentes["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableRemanentes["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableRemanentes["Seleccionado"] = array("type"=>11,"varname"=>"Seleccionado", "name" => "Seleccionado", "autoInc" => "0");
$dalTableRemanentes["SeleccionadoFecha"] = array("type"=>135,"varname"=>"SeleccionadoFecha", "name" => "SeleccionadoFecha", "autoInc" => "0");
$dalTableRemanentes["SeleccionadoPor"] = array("type"=>200,"varname"=>"SeleccionadoPor", "name" => "SeleccionadoPor", "autoInc" => "0");
$dalTableRemanentes["Remanente"] = array("type"=>6,"varname"=>"Remanente", "name" => "Remanente", "autoInc" => "0");
$dalTableRemanentes["PagoId"] = array("type"=>3,"varname"=>"PagoId", "name" => "PagoId", "autoInc" => "0");
$dalTableRemanentes["PagoIdOrigen"] = array("type"=>3,"varname"=>"PagoIdOrigen", "name" => "PagoIdOrigen", "autoInc" => "0");
$dalTableRemanentes["RemanenteId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Remanentes"] = &$dalTableRemanentes;
?>