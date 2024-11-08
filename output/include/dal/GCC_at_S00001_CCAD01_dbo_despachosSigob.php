<?php
$dalTabledespachosSigob = array();
$dalTabledespachosSigob["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledespachosSigob["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTabledespachosSigob["codigo"] = array("type"=>200,"varname"=>"codigo", "name" => "codigo", "autoInc" => "0");
$dalTabledespachosSigob["nombreCompleto"] = array("type"=>200,"varname"=>"nombreCompleto", "name" => "nombreCompleto", "autoInc" => "0");
$dalTabledespachosSigob["documento"] = array("type"=>200,"varname"=>"documento", "name" => "documento", "autoInc" => "0");
$dalTabledespachosSigob["cargo"] = array("type"=>200,"varname"=>"cargo", "name" => "cargo", "autoInc" => "0");
$dalTabledespachosSigob["area"] = array("type"=>200,"varname"=>"area", "name" => "area", "autoInc" => "0");
$dalTabledespachosSigob["institucion"] = array("type"=>200,"varname"=>"institucion", "name" => "institucion", "autoInc" => "0");
$dalTabledespachosSigob["id"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_despachosSigob"] = &$dalTabledespachosSigob;
?>