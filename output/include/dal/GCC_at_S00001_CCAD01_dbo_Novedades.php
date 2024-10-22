<?php
$dalTableNovedades = array();
$dalTableNovedades["NovedadId"] = array("type"=>3,"varname"=>"NovedadId", "name" => "NovedadId", "autoInc" => "1");
$dalTableNovedades["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableNovedades["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableNovedades["Tipo"] = array("type"=>3,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTableNovedades["Anterior"] = array("type"=>200,"varname"=>"Anterior", "name" => "Anterior", "autoInc" => "0");
$dalTableNovedades["Nuevo"] = array("type"=>200,"varname"=>"Nuevo", "name" => "Nuevo", "autoInc" => "0");
$dalTableNovedades["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "0");
$dalTableNovedades["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableNovedades["MinJusticia"] = array("type"=>11,"varname"=>"MinJusticia", "name" => "MinJusticia", "autoInc" => "0");
$dalTableNovedades["NovedadId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Novedades"] = &$dalTableNovedades;
?>