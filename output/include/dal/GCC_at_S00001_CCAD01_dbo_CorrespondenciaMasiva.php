<?php
$dalTableCorrespondenciaMasiva = array();
$dalTableCorrespondenciaMasiva["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableCorrespondenciaMasiva["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["proceso"] = array("type"=>3,"varname"=>"proceso", "name" => "proceso", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["correspondencia"] = array("type"=>3,"varname"=>"correspondencia", "name" => "correspondencia", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["enviado"] = array("type"=>11,"varname"=>"enviado", "name" => "enviado", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["observaciones"] = array("type"=>200,"varname"=>"observaciones", "name" => "observaciones", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["radicado"] = array("type"=>200,"varname"=>"radicado", "name" => "radicado", "autoInc" => "0");
$dalTableCorrespondenciaMasiva["id"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_CorrespondenciaMasiva"] = &$dalTableCorrespondenciaMasiva;
?>