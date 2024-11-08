<?php
$dalTablecodificadoresDespacho = array();
$dalTablecodificadoresDespacho["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecodificadoresDespacho["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablecodificadoresDespacho["codificador"] = array("type"=>200,"varname"=>"codificador", "name" => "codificador", "autoInc" => "0");
$dalTablecodificadoresDespacho["id"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_codificadoresDespacho"] = &$dalTablecodificadoresDespacho;
?>