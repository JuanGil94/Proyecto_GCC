<?php
$dalTableEstados = array();
$dalTableEstados["EstadoId"] = array("type"=>3,"varname"=>"EstadoId", "name" => "EstadoId", "autoInc" => "1");
$dalTableEstados["Estado"] = array("type"=>200,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTableEstados["Tipo"] = array("type"=>3,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTableEstados["EstadoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Estados"] = &$dalTableEstados;
?>