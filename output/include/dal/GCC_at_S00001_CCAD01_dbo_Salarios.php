<?php
$dalTableSalarios = array();
$dalTableSalarios["SalarioId"] = array("type"=>3,"varname"=>"SalarioId", "name" => "SalarioId", "autoInc" => "1");
$dalTableSalarios["Ano"] = array("type"=>3,"varname"=>"Ano", "name" => "Ano", "autoInc" => "0");
$dalTableSalarios["Salario"] = array("type"=>6,"varname"=>"Salario", "name" => "Salario", "autoInc" => "0");
$dalTableSalarios["SalarioId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Salarios"] = &$dalTableSalarios;
?>