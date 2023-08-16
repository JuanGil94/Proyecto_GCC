<?php
$dalTableEmpresas = array();
$dalTableEmpresas["EmpresaId"] = array("type"=>3,"varname"=>"EmpresaId", "name" => "EmpresaId", "autoInc" => "1");
$dalTableEmpresas["Empresa"] = array("type"=>200,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTableEmpresas["Cierre"] = array("type"=>7,"varname"=>"Cierre", "name" => "Cierre", "autoInc" => "0");
$dalTableEmpresas["ValorMaximo"] = array("type"=>6,"varname"=>"ValorMaximo", "name" => "ValorMaximo", "autoInc" => "0");
$dalTableEmpresas["MaximoPesos"] = array("type"=>6,"varname"=>"MaximoPesos", "name" => "MaximoPesos", "autoInc" => "0");
$dalTableEmpresas["MaximoSalarios"] = array("type"=>6,"varname"=>"MaximoSalarios", "name" => "MaximoSalarios", "autoInc" => "0");
$dalTableEmpresas["MaximoUvt"] = array("type"=>6,"varname"=>"MaximoUvt", "name" => "MaximoUvt", "autoInc" => "0");
$dalTableEmpresas["EmailAprobador"] = array("type"=>200,"varname"=>"EmailAprobador", "name" => "EmailAprobador", "autoInc" => "0");
$dalTableEmpresas["Tope"] = array("type"=>6,"varname"=>"Tope", "name" => "Tope", "autoInc" => "0");
$dalTableEmpresas["DiasPersuasivo"] = array("type"=>3,"varname"=>"DiasPersuasivo", "name" => "DiasPersuasivo", "autoInc" => "0");
$dalTableEmpresas["CarteraEspecialUvt"] = array("type"=>6,"varname"=>"CarteraEspecialUvt", "name" => "CarteraEspecialUvt", "autoInc" => "0");
$dalTableEmpresas["TasaDTN"] = array("type"=>6,"varname"=>"TasaDTN", "name" => "TasaDTN", "autoInc" => "0");
$dalTableEmpresas["TasaCivil"] = array("type"=>6,"varname"=>"TasaCivil", "name" => "TasaCivil", "autoInc" => "0");
$dalTableEmpresas["InteresesPlazo"] = array("type"=>11,"varname"=>"InteresesPlazo", "name" => "InteresesPlazo", "autoInc" => "0");
$dalTableEmpresas["EmpresaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Empresas"] = &$dalTableEmpresas;
?>