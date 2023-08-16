<?php
$dalTablePresupuestos = array();
$dalTablePresupuestos["PresupuestoId"] = array("type"=>3,"varname"=>"PresupuestoId", "name" => "PresupuestoId", "autoInc" => "1");
$dalTablePresupuestos["Ano"] = array("type"=>3,"varname"=>"Ano", "name" => "Ano", "autoInc" => "0");
$dalTablePresupuestos["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTablePresupuestos["Meta"] = array("type"=>6,"varname"=>"Meta", "name" => "Meta", "autoInc" => "0");
$dalTablePresupuestos["Procesos"] = array("type"=>3,"varname"=>"Procesos", "name" => "Procesos", "autoInc" => "0");
$dalTablePresupuestos["PresupuestoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Presupuestos"] = &$dalTablePresupuestos;
?>