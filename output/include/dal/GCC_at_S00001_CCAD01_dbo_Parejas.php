<?php
$dalTableParejas = array();
$dalTableParejas["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "0");
$dalTableParejas["Pareja"] = array("type"=>200,"varname"=>"Pareja", "name" => "Pareja", "autoInc" => "0");
$dalTableParejas["AbogadoMinjusticia"] = array("type"=>200,"varname"=>"AbogadoMinjusticia", "name" => "AbogadoMinjusticia", "autoInc" => "0");
$dalTableParejas["AbogadoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Parejas"] = &$dalTableParejas;
?>