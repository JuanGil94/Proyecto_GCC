<?php
$dalTableActas = array();
$dalTableActas["ActaId"] = array("type"=>3,"varname"=>"ActaId", "name" => "ActaId", "autoInc" => "1");
$dalTableActas["Acta"] = array("type"=>3,"varname"=>"Acta", "name" => "Acta", "autoInc" => "0");
$dalTableActas["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableActas["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "0");
$dalTableActas["Consolidada"] = array("type"=>11,"varname"=>"Consolidada", "name" => "Consolidada", "autoInc" => "0");
$dalTableActas["Rechazo"] = array("type"=>11,"varname"=>"Rechazo", "name" => "Rechazo", "autoInc" => "0");
$dalTableActas["Pareja"] = array("type"=>200,"varname"=>"Pareja", "name" => "Pareja", "autoInc" => "0");
$dalTableActas["Abogado"] = array("type"=>200,"varname"=>"Abogado", "name" => "Abogado", "autoInc" => "0");
$dalTableActas["AbogadoMinjusticia"] = array("type"=>200,"varname"=>"AbogadoMinjusticia", "name" => "AbogadoMinjusticia", "autoInc" => "0");
$dalTableActas["ActaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Actas"] = &$dalTableActas;
?>