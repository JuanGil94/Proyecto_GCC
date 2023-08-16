<?php
$dalTableCiudades = array();
$dalTableCiudades["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "1");
$dalTableCiudades["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableCiudades["Ciudad"] = array("type"=>200,"varname"=>"Ciudad", "name" => "Ciudad", "autoInc" => "0");
$dalTableCiudades["DepartamentoId"] = array("type"=>3,"varname"=>"DepartamentoId", "name" => "DepartamentoId", "autoInc" => "0");
$dalTableCiudades["CiudadId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Ciudades"] = &$dalTableCiudades;
?>