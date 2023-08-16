<?php
$dalTableChequeosOficios = array();
$dalTableChequeosOficios["ChequeoOficioId"] = array("type"=>3,"varname"=>"ChequeoOficioId", "name" => "ChequeoOficioId", "autoInc" => "1");
$dalTableChequeosOficios["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableChequeosOficios["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableChequeosOficios["Radicado"] = array("type"=>200,"varname"=>"Radicado", "name" => "Radicado", "autoInc" => "0");
$dalTableChequeosOficios["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableChequeosOficios["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableChequeosOficios["ChequeoId"] = array("type"=>3,"varname"=>"ChequeoId", "name" => "ChequeoId", "autoInc" => "0");
$dalTableChequeosOficios["ChequeoOficioId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_ChequeosOficios"] = &$dalTableChequeosOficios;
?>