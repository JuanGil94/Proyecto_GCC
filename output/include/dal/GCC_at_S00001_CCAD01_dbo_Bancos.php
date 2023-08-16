<?php
$dalTableBancos = array();
$dalTableBancos["BancoId"] = array("type"=>3,"varname"=>"BancoId", "name" => "BancoId", "autoInc" => "1");
$dalTableBancos["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableBancos["Banco"] = array("type"=>200,"varname"=>"Banco", "name" => "Banco", "autoInc" => "0");
$dalTableBancos["BancoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Bancos"] = &$dalTableBancos;
?>