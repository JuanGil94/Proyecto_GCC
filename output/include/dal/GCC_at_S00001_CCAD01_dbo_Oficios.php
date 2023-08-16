<?php
$dalTableOficios = array();
$dalTableOficios["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "1");
$dalTableOficios["Oficio"] = array("type"=>200,"varname"=>"Oficio", "name" => "Oficio", "autoInc" => "0");
$dalTableOficios["Archivo"] = array("type"=>200,"varname"=>"Archivo", "name" => "Archivo", "autoInc" => "0");
$dalTableOficios["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableOficios["ActuacionId"] = array("type"=>3,"varname"=>"ActuacionId", "name" => "ActuacionId", "autoInc" => "0");
$dalTableOficios["OficioIdRequisito"] = array("type"=>3,"varname"=>"OficioIdRequisito", "name" => "OficioIdRequisito", "autoInc" => "0");
$dalTableOficios["Direcciones"] = array("type"=>11,"varname"=>"Direcciones", "name" => "Direcciones", "autoInc" => "0");
$dalTableOficios["Edicion"] = array("type"=>11,"varname"=>"Edicion", "name" => "Edicion", "autoInc" => "0");
$dalTableOficios["Abierto"] = array("type"=>11,"varname"=>"Abierto", "name" => "Abierto", "autoInc" => "0");
$dalTableOficios["Sigobius"] = array("type"=>11,"varname"=>"Sigobius", "name" => "Sigobius", "autoInc" => "0");
$dalTableOficios["Devolucion"] = array("type"=>11,"varname"=>"Devolucion", "name" => "Devolucion", "autoInc" => "0");
$dalTableOficios["OficioId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Oficios"] = &$dalTableOficios;
?>