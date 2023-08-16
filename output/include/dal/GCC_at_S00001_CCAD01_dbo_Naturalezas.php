<?php
$dalTableNaturalezas = array();
$dalTableNaturalezas["NaturalezaId"] = array("type"=>3,"varname"=>"NaturalezaId", "name" => "NaturalezaId", "autoInc" => "1");
$dalTableNaturalezas["Naturaleza"] = array("type"=>200,"varname"=>"Naturaleza", "name" => "Naturaleza", "autoInc" => "0");
$dalTableNaturalezas["ConceptoId"] = array("type"=>3,"varname"=>"ConceptoId", "name" => "ConceptoId", "autoInc" => "0");
$dalTableNaturalezas["TasaTipo"] = array("type"=>3,"varname"=>"TasaTipo", "name" => "TasaTipo", "autoInc" => "0");
$dalTableNaturalezas["Activa"] = array("type"=>11,"varname"=>"Activa", "name" => "Activa", "autoInc" => "0");
$dalTableNaturalezas["NaturalezaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Naturalezas"] = &$dalTableNaturalezas;
?>