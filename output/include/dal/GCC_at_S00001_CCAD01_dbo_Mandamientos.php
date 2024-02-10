<?php
$dalTableMandamientos = array();
$dalTableMandamientos["MandamientoId"] = array("type"=>3,"varname"=>"MandamientoId", "name" => "MandamientoId", "autoInc" => "1");
$dalTableMandamientos["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableMandamientos["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableMandamientos["Seleccionado"] = array("type"=>11,"varname"=>"Seleccionado", "name" => "Seleccionado", "autoInc" => "0");
$dalTableMandamientos["SeleccionadoFecha"] = array("type"=>135,"varname"=>"SeleccionadoFecha", "name" => "SeleccionadoFecha", "autoInc" => "0");
$dalTableMandamientos["SeleccionadoPor"] = array("type"=>200,"varname"=>"SeleccionadoPor", "name" => "SeleccionadoPor", "autoInc" => "0");
$dalTableMandamientos["MandamientoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Mandamientos"] = &$dalTableMandamientos;
?>