<?php
$dalTableAuditorias = array();
$dalTableAuditorias["AuditoriaId"] = array("type"=>3,"varname"=>"AuditoriaId", "name" => "AuditoriaId", "autoInc" => "1");
$dalTableAuditorias["Tipo"] = array("type"=>11,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTableAuditorias["Tabla"] = array("type"=>200,"varname"=>"Tabla", "name" => "Tabla", "autoInc" => "0");
$dalTableAuditorias["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableAuditorias["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "0");
$dalTableAuditorias["Ip"] = array("type"=>200,"varname"=>"Ip", "name" => "Ip", "autoInc" => "0");
$dalTableAuditorias["PrimaryKey"] = array("type"=>3,"varname"=>"PrimaryKey", "name" => "PrimaryKey", "autoInc" => "0");
$dalTableAuditorias["AuditoriaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Auditorias"] = &$dalTableAuditorias;
?>