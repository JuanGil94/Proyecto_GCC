<?php
$dalTableDevoluciones = array();
$dalTableDevoluciones["DevolucionId"] = array("type"=>3,"varname"=>"DevolucionId", "name" => "DevolucionId", "autoInc" => "1");
$dalTableDevoluciones["ChequeoId"] = array("type"=>3,"varname"=>"ChequeoId", "name" => "ChequeoId", "autoInc" => "0");
$dalTableDevoluciones["MotivoDevolucionId"] = array("type"=>3,"varname"=>"MotivoDevolucionId", "name" => "MotivoDevolucionId", "autoInc" => "0");
$dalTableDevoluciones["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableDevoluciones["Subsanado"] = array("type"=>7,"varname"=>"Subsanado", "name" => "Subsanado", "autoInc" => "0");
$dalTableDevoluciones["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableDevoluciones["DevolucionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Devoluciones"] = &$dalTableDevoluciones;
?>