<?php
$dalTableNomenclaturas = array();
$dalTableNomenclaturas["IdNomenclatura"] = array("type"=>3,"varname"=>"IdNomenclatura", "name" => "IdNomenclatura", "autoInc" => "1");
$dalTableNomenclaturas["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableNomenclaturas["Nomenclatura"] = array("type"=>200,"varname"=>"Nomenclatura", "name" => "Nomenclatura", "autoInc" => "0");
$dalTableNomenclaturas["IdNomenclatura"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Nomenclaturas"] = &$dalTableNomenclaturas;
?>