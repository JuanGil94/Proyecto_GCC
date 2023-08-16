<?php
$dalTableSancionados = array();
$dalTableSancionados["SancionadoId"] = array("type"=>3,"varname"=>"SancionadoId", "name" => "SancionadoId", "autoInc" => "1");
$dalTableSancionados["Sancionado"] = array("type"=>200,"varname"=>"Sancionado", "name" => "Sancionado", "autoInc" => "0");
$dalTableSancionados["TipoDocumentoId"] = array("type"=>3,"varname"=>"TipoDocumentoId", "name" => "TipoDocumentoId", "autoInc" => "0");
$dalTableSancionados["Documento"] = array("type"=>200,"varname"=>"Documento", "name" => "Documento", "autoInc" => "0");
$dalTableSancionados["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableSancionados["Celular"] = array("type"=>200,"varname"=>"Celular", "name" => "Celular", "autoInc" => "0");
$dalTableSancionados["Masculino"] = array("type"=>11,"varname"=>"Masculino", "name" => "Masculino", "autoInc" => "0");
$dalTableSancionados["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableSancionados["Fallecimiento"] = array("type"=>7,"varname"=>"Fallecimiento", "name" => "Fallecimiento", "autoInc" => "0");
$dalTableSancionados["PrivadoLibertad"] = array("type"=>11,"varname"=>"PrivadoLibertad", "name" => "PrivadoLibertad", "autoInc" => "0");
$dalTableSancionados["SancionadoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Sancionados"] = &$dalTableSancionados;
?>