<?php
$dalTableCarceles = array();
$dalTableCarceles["CarcelId"] = array("type"=>3,"varname"=>"CarcelId", "name" => "CarcelId", "autoInc" => "1");
$dalTableCarceles["Carcel"] = array("type"=>200,"varname"=>"Carcel", "name" => "Carcel", "autoInc" => "0");
$dalTableCarceles["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "0");
$dalTableCarceles["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTableCarceles["Telefono"] = array("type"=>200,"varname"=>"Telefono", "name" => "Telefono", "autoInc" => "0");
$dalTableCarceles["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableCarceles["CarcelId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Carceles"] = &$dalTableCarceles;
?>