<?php
$dalTableAlertasOficios = array();
$dalTableAlertasOficios["AlertaOficioId"] = array("type"=>3,"varname"=>"AlertaOficioId", "name" => "AlertaOficioId", "autoInc" => "1");
$dalTableAlertasOficios["AlertaId"] = array("type"=>3,"varname"=>"AlertaId", "name" => "AlertaId", "autoInc" => "0");
$dalTableAlertasOficios["CarteraTipoId"] = array("type"=>3,"varname"=>"CarteraTipoId", "name" => "CarteraTipoId", "autoInc" => "0");
$dalTableAlertasOficios["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableAlertasOficios["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableAlertasOficios["ConceptoId"] = array("type"=>3,"varname"=>"ConceptoId", "name" => "ConceptoId", "autoInc" => "0");
$dalTableAlertasOficios["Carcel"] = array("type"=>11,"varname"=>"Carcel", "name" => "Carcel", "autoInc" => "0");
$dalTableAlertasOficios["SinDireccion"] = array("type"=>11,"varname"=>"SinDireccion", "name" => "SinDireccion", "autoInc" => "0");
$dalTableAlertasOficios["AlertaOficioId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_AlertasOficios"] = &$dalTableAlertasOficios;
?>