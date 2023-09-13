<?php
$dalTableIntereses = array();
$dalTableIntereses["InteresId"] = array("type"=>3,"varname"=>"InteresId", "name" => "InteresId", "autoInc" => "1");
$dalTableIntereses["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableIntereses["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableIntereses["Intereses"] = array("type"=>6,"varname"=>"Intereses", "name" => "Intereses", "autoInc" => "0");
$dalTableIntereses["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTableIntereses["Liquidacion"] = array("type"=>11,"varname"=>"Liquidacion", "name" => "Liquidacion", "autoInc" => "0");
$dalTableIntereses["PagoId"] = array("type"=>3,"varname"=>"PagoId", "name" => "PagoId", "autoInc" => "0");
$dalTableIntereses["order"] = array("type"=>3,"varname"=>"order", "name" => "order", "autoInc" => "0");
$dalTableIntereses["InteresId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Intereses"] = &$dalTableIntereses;
?>