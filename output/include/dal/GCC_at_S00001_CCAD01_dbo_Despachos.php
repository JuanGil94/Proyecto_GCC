<?php
$dalTableDespachos = array();
$dalTableDespachos["DespachoId"] = array("type"=>3,"varname"=>"DespachoId", "name" => "DespachoId", "autoInc" => "1");
$dalTableDespachos["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableDespachos["Despacho"] = array("type"=>200,"varname"=>"Despacho", "name" => "Despacho", "autoInc" => "0");
$dalTableDespachos["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "0");
$dalTableDespachos["Especialidad"] = array("type"=>200,"varname"=>"Especialidad", "name" => "Especialidad", "autoInc" => "0");
$dalTableDespachos["Subespecialidad"] = array("type"=>200,"varname"=>"Subespecialidad", "name" => "Subespecialidad", "autoInc" => "0");
$dalTableDespachos["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableDespachos["Juez"] = array("type"=>200,"varname"=>"Juez", "name" => "Juez", "autoInc" => "0");
$dalTableDespachos["Correo"] = array("type"=>200,"varname"=>"Correo", "name" => "Correo", "autoInc" => "0");
$dalTableDespachos["Telefonos"] = array("type"=>200,"varname"=>"Telefonos", "name" => "Telefonos", "autoInc" => "0");
$dalTableDespachos["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTableDespachos["DespachoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Despachos"] = &$dalTableDespachos;
?>