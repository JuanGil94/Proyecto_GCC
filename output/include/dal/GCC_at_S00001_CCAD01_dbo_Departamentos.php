<?php
$dalTableDepartamentos = array();
$dalTableDepartamentos["DepartamentoId"] = array("type"=>3,"varname"=>"DepartamentoId", "name" => "DepartamentoId", "autoInc" => "1");
$dalTableDepartamentos["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableDepartamentos["Departamento"] = array("type"=>200,"varname"=>"Departamento", "name" => "Departamento", "autoInc" => "0");
$dalTableDepartamentos["DepartamentoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Departamentos"] = &$dalTableDepartamentos;
?>