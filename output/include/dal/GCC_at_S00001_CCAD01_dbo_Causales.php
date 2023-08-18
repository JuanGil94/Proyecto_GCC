<?php
$dalTableCausales = array();
$dalTableCausales["CausalId"] = array("type"=>3,"varname"=>"CausalId", "name" => "CausalId", "autoInc" => "1");
$dalTableCausales["Causal"] = array("type"=>200,"varname"=>"Causal", "name" => "Causal", "autoInc" => "0");
$dalTableCausales["Color"] = array("type"=>200,"varname"=>"Color", "name" => "Color", "autoInc" => "0");
$dalTableCausales["CausalId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Causales"] = &$dalTableCausales;
?>