<?php
$dalTableCarteraTipos = array();
$dalTableCarteraTipos["CarteraTipoId"] = array("type"=>3,"varname"=>"CarteraTipoId", "name" => "CarteraTipoId", "autoInc" => "1");
$dalTableCarteraTipos["CarteraTipo"] = array("type"=>200,"varname"=>"CarteraTipo", "name" => "CarteraTipo", "autoInc" => "0");
$dalTableCarteraTipos["Color"] = array("type"=>200,"varname"=>"Color", "name" => "Color", "autoInc" => "0");
$dalTableCarteraTipos["Prescrita"] = array("type"=>11,"varname"=>"Prescrita", "name" => "Prescrita", "autoInc" => "0");
$dalTableCarteraTipos["CarteraTipoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_CarteraTipos"] = &$dalTableCarteraTipos;
?>