<?php
$dalTableActuaciones = array();
$dalTableActuaciones["ActuacionId"] = array("type"=>3,"varname"=>"ActuacionId", "name" => "ActuacionId", "autoInc" => "1");
$dalTableActuaciones["Actuacion"] = array("type"=>200,"varname"=>"Actuacion", "name" => "Actuacion", "autoInc" => "0");
$dalTableActuaciones["EstadoId"] = array("type"=>3,"varname"=>"EstadoId", "name" => "EstadoId", "autoInc" => "0");
$dalTableActuaciones["MotivoId"] = array("type"=>3,"varname"=>"MotivoId", "name" => "MotivoId", "autoInc" => "0");
$dalTableActuaciones["Intereses"] = array("type"=>11,"varname"=>"Intereses", "name" => "Intereses", "autoInc" => "0");
$dalTableActuaciones["EtapaId"] = array("type"=>3,"varname"=>"EtapaId", "name" => "EtapaId", "autoInc" => "0");
$dalTableActuaciones["ActuacionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Actuaciones"] = &$dalTableActuaciones;
?>