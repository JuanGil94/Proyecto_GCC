<?php
$dalTableRecaudos = array();
$dalTableRecaudos["RecaudoId"] = array("type"=>3,"varname"=>"RecaudoId", "name" => "RecaudoId", "autoInc" => "1");
$dalTableRecaudos["CuentaId"] = array("type"=>3,"varname"=>"CuentaId", "name" => "CuentaId", "autoInc" => "0");
$dalTableRecaudos["Archivo"] = array("type"=>200,"varname"=>"Archivo", "name" => "Archivo", "autoInc" => "0");
$dalTableRecaudos["Fecha"] = array("type"=>200,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableRecaudos["Identificacion"] = array("type"=>200,"varname"=>"Identificacion", "name" => "Identificacion", "autoInc" => "0");
$dalTableRecaudos["Proceso"] = array("type"=>200,"varname"=>"Proceso", "name" => "Proceso", "autoInc" => "0");
$dalTableRecaudos["Deposito"] = array("type"=>200,"varname"=>"Deposito", "name" => "Deposito", "autoInc" => "0");
$dalTableRecaudos["Recaudo"] = array("type"=>200,"varname"=>"Recaudo", "name" => "Recaudo", "autoInc" => "0");
$dalTableRecaudos["Registro"] = array("type"=>135,"varname"=>"Registro", "name" => "Registro", "autoInc" => "0");
$dalTableRecaudos["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "0");
$dalTableRecaudos["Aprobada"] = array("type"=>11,"varname"=>"Aprobada", "name" => "Aprobada", "autoInc" => "0");
$dalTableRecaudos["RecaudoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Recaudos"] = &$dalTableRecaudos;
?>