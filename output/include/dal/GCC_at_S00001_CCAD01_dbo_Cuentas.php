<?php
$dalTableCuentas = array();
$dalTableCuentas["CuentaId"] = array("type"=>3,"varname"=>"CuentaId", "name" => "CuentaId", "autoInc" => "1");
$dalTableCuentas["Cuenta"] = array("type"=>200,"varname"=>"Cuenta", "name" => "Cuenta", "autoInc" => "0");
$dalTableCuentas["BancoId"] = array("type"=>3,"varname"=>"BancoId", "name" => "BancoId", "autoInc" => "0");
$dalTableCuentas["Numero"] = array("type"=>200,"varname"=>"Numero", "name" => "Numero", "autoInc" => "0");
$dalTableCuentas["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTableCuentas["ConceptoId"] = array("type"=>3,"varname"=>"ConceptoId", "name" => "ConceptoId", "autoInc" => "0");
$dalTableCuentas["Activa"] = array("type"=>11,"varname"=>"Activa", "name" => "Activa", "autoInc" => "0");
$dalTableCuentas["CuentaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Cuentas"] = &$dalTableCuentas;
?>