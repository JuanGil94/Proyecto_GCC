<?php
$dalTableAlertas = array();
$dalTableAlertas["AlertaId"] = array("type"=>3,"varname"=>"AlertaId", "name" => "AlertaId", "autoInc" => "1");
$dalTableAlertas["AlertaTipoId"] = array("type"=>3,"varname"=>"AlertaTipoId", "name" => "AlertaTipoId", "autoInc" => "0");
$dalTableAlertas["Dias"] = array("type"=>3,"varname"=>"Dias", "name" => "Dias", "autoInc" => "0");
$dalTableAlertas["ActuacionId"] = array("type"=>3,"varname"=>"ActuacionId", "name" => "ActuacionId", "autoInc" => "0");
$dalTableAlertas["Activa"] = array("type"=>11,"varname"=>"Activa", "name" => "Activa", "autoInc" => "0");
$dalTableAlertas["Publicar"] = array("type"=>11,"varname"=>"Publicar", "name" => "Publicar", "autoInc" => "0");
$dalTableAlertas["AlertaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Alertas"] = &$dalTableAlertas;
?>