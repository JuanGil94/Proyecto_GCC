<?php
$dalTableAyudas = array();
$dalTableAyudas["AyudaId"] = array("type"=>3,"varname"=>"AyudaId", "name" => "AyudaId", "autoInc" => "1");
$dalTableAyudas["Ayuda"] = array("type"=>200,"varname"=>"Ayuda", "name" => "Ayuda", "autoInc" => "0");
$dalTableAyudas["TemaId"] = array("type"=>3,"varname"=>"TemaId", "name" => "TemaId", "autoInc" => "0");
$dalTableAyudas["Respuesta"] = array("type"=>200,"varname"=>"Respuesta", "name" => "Respuesta", "autoInc" => "0");
$dalTableAyudas["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableAyudas["Visitas"] = array("type"=>3,"varname"=>"Visitas", "name" => "Visitas", "autoInc" => "0");
$dalTableAyudas["AyudaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Ayudas"] = &$dalTableAyudas;
?>