<?php
$dalTableRecaudosDetalles = array();
$dalTableRecaudosDetalles["RecaudoDetalleId"] = array("type"=>3,"varname"=>"RecaudoDetalleId", "name" => "RecaudoDetalleId", "autoInc" => "1");
$dalTableRecaudosDetalles["RecaudoId"] = array("type"=>3,"varname"=>"RecaudoId", "name" => "RecaudoId", "autoInc" => "0");
$dalTableRecaudosDetalles["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableRecaudosDetalles["Identificacion"] = array("type"=>200,"varname"=>"Identificacion", "name" => "Identificacion", "autoInc" => "0");
$dalTableRecaudosDetalles["Proceso"] = array("type"=>200,"varname"=>"Proceso", "name" => "Proceso", "autoInc" => "0");
$dalTableRecaudosDetalles["Deposito"] = array("type"=>200,"varname"=>"Deposito", "name" => "Deposito", "autoInc" => "0");
$dalTableRecaudosDetalles["Recaudo"] = array("type"=>6,"varname"=>"Recaudo", "name" => "Recaudo", "autoInc" => "0");
$dalTableRecaudosDetalles["PagoId"] = array("type"=>3,"varname"=>"PagoId", "name" => "PagoId", "autoInc" => "0");
$dalTableRecaudosDetalles["RecaudoDetalleId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_RecaudosDetalles"] = &$dalTableRecaudosDetalles;
?>