<?php
$dalTableConceptos = array();
$dalTableConceptos["ConceptoId"] = array("type"=>3,"varname"=>"ConceptoId", "name" => "ConceptoId", "autoInc" => "1");
$dalTableConceptos["Concepto"] = array("type"=>200,"varname"=>"Concepto", "name" => "Concepto", "autoInc" => "0");
$dalTableConceptos["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableConceptos["Cuenta"] = array("type"=>200,"varname"=>"Cuenta", "name" => "Cuenta", "autoInc" => "0");
$dalTableConceptos["ConceptoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Conceptos"] = &$dalTableConceptos;
?>