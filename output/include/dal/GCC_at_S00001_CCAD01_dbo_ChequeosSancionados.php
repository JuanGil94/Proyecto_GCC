<?php
$dalTableChequeosSancionados = array();
$dalTableChequeosSancionados["ChequeoSancionadoId"] = array("type"=>3,"varname"=>"ChequeoSancionadoId", "name" => "ChequeoSancionadoId", "autoInc" => "1");
$dalTableChequeosSancionados["ChequeoId"] = array("type"=>3,"varname"=>"ChequeoId", "name" => "ChequeoId", "autoInc" => "0");
$dalTableChequeosSancionados["Sancionado"] = array("type"=>200,"varname"=>"Sancionado", "name" => "Sancionado", "autoInc" => "0");
$dalTableChequeosSancionados["TipoDocumentoId"] = array("type"=>3,"varname"=>"TipoDocumentoId", "name" => "TipoDocumentoId", "autoInc" => "0");
$dalTableChequeosSancionados["Documento"] = array("type"=>200,"varname"=>"Documento", "name" => "Documento", "autoInc" => "0");
$dalTableChequeosSancionados["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTableChequeosSancionados["Telefono"] = array("type"=>200,"varname"=>"Telefono", "name" => "Telefono", "autoInc" => "0");
$dalTableChequeosSancionados["CiudadId"] = array("type"=>3,"varname"=>"CiudadId", "name" => "CiudadId", "autoInc" => "0");
$dalTableChequeosSancionados["CarcelId"] = array("type"=>3,"varname"=>"CarcelId", "name" => "CarcelId", "autoInc" => "0");
$dalTableChequeosSancionados["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableChequeosSancionados["Masculino"] = array("type"=>11,"varname"=>"Masculino", "name" => "Masculino", "autoInc" => "0");
$dalTableChequeosSancionados["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableChequeosSancionados["ChequeoSancionadoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_ChequeosSancionados"] = &$dalTableChequeosSancionados;
?>