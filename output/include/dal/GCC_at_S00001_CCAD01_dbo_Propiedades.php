<?php
$dalTablePropiedades = array();
$dalTablePropiedades["PropiedadId"] = array("type"=>3,"varname"=>"PropiedadId", "name" => "PropiedadId", "autoInc" => "1");
$dalTablePropiedades["SancionadoId"] = array("type"=>3,"varname"=>"SancionadoId", "name" => "SancionadoId", "autoInc" => "0");
$dalTablePropiedades["TipoPropiedad"] = array("type"=>3,"varname"=>"TipoPropiedad", "name" => "TipoPropiedad", "autoInc" => "0");
$dalTablePropiedades["Propiedad"] = array("type"=>200,"varname"=>"Propiedad", "name" => "Propiedad", "autoInc" => "0");
$dalTablePropiedades["Matricula"] = array("type"=>200,"varname"=>"Matricula", "name" => "Matricula", "autoInc" => "0");
$dalTablePropiedades["Avaluo"] = array("type"=>6,"varname"=>"Avaluo", "name" => "Avaluo", "autoInc" => "0");
$dalTablePropiedades["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "0");
$dalTablePropiedades["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTablePropiedades["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTablePropiedades["PropiedadId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Propiedades"] = &$dalTablePropiedades;
?>