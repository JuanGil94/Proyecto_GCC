<?php
$dalTableDirecciones = array();
$dalTableDirecciones["DireccionId"] = array("type"=>3,"varname"=>"DireccionId", "name" => "DireccionId", "autoInc" => "1");
$dalTableDirecciones["SancionadoId"] = array("type"=>3,"varname"=>"SancionadoId", "name" => "SancionadoId", "autoInc" => "0");
$dalTableDirecciones["CarcelId"] = array("type"=>3,"varname"=>"CarcelId", "name" => "CarcelId", "autoInc" => "0");
$dalTableDirecciones["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "0");
$dalTableDirecciones["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTableDirecciones["Barrio"] = array("type"=>200,"varname"=>"Barrio", "name" => "Barrio", "autoInc" => "0");
$dalTableDirecciones["Telefonos"] = array("type"=>200,"varname"=>"Telefonos", "name" => "Telefonos", "autoInc" => "0");
$dalTableDirecciones["Activa"] = array("type"=>11,"varname"=>"Activa", "name" => "Activa", "autoInc" => "0");
$dalTableDirecciones["DireccionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Direcciones"] = &$dalTableDirecciones;
?>