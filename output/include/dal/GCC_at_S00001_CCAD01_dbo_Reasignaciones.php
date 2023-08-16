<?php
$dalTableReasignaciones = array();
$dalTableReasignaciones["ReasignacionId"] = array("type"=>3,"varname"=>"ReasignacionId", "name" => "ReasignacionId", "autoInc" => "1");
$dalTableReasignaciones["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableReasignaciones["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableReasignaciones["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "0");
$dalTableReasignaciones["ReasignacionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Reasignaciones"] = &$dalTableReasignaciones;
?>