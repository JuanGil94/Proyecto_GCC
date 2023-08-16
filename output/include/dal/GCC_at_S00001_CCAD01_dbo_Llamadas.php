<?php
$dalTableLlamadas = array();
$dalTableLlamadas["LlamadaId"] = array("type"=>3,"varname"=>"LlamadaId", "name" => "LlamadaId", "autoInc" => "1");
$dalTableLlamadas["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableLlamadas["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableLlamadas["Telefono"] = array("type"=>200,"varname"=>"Telefono", "name" => "Telefono", "autoInc" => "0");
$dalTableLlamadas["Contesto"] = array("type"=>200,"varname"=>"Contesto", "name" => "Contesto", "autoInc" => "0");
$dalTableLlamadas["Mensaje"] = array("type"=>200,"varname"=>"Mensaje", "name" => "Mensaje", "autoInc" => "0");
$dalTableLlamadas["LlamadaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Llamadas"] = &$dalTableLlamadas;
?>