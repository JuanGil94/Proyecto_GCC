<?php
$dalTablePrescritos = array();
$dalTablePrescritos["PrescritoId"] = array("type"=>3,"varname"=>"PrescritoId", "name" => "PrescritoId", "autoInc" => "1");
$dalTablePrescritos["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTablePrescritos["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTablePrescritos["Seleccionado"] = array("type"=>11,"varname"=>"Seleccionado", "name" => "Seleccionado", "autoInc" => "0");
$dalTablePrescritos["SeleccionadoFecha"] = array("type"=>135,"varname"=>"SeleccionadoFecha", "name" => "SeleccionadoFecha", "autoInc" => "0");
$dalTablePrescritos["SeleccionadoPor"] = array("type"=>200,"varname"=>"SeleccionadoPor", "name" => "SeleccionadoPor", "autoInc" => "0");
$dalTablePrescritos["PrescritoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Prescritos"] = &$dalTablePrescritos;
?>