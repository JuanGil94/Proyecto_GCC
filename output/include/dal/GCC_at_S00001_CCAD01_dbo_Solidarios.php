<?php
$dalTableSolidarios = array();
$dalTableSolidarios["SolidarioId"] = array("type"=>3,"varname"=>"SolidarioId", "name" => "SolidarioId", "autoInc" => "1");
$dalTableSolidarios["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableSolidarios["SancionadoId"] = array("type"=>3,"varname"=>"SancionadoId", "name" => "SancionadoId", "autoInc" => "0");
$dalTableSolidarios["SolidarioId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Solidarios"] = &$dalTableSolidarios;
?>