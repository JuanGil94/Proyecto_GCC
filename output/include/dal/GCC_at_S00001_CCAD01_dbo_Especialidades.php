<?php
$dalTableEspecialidades = array();
$dalTableEspecialidades["EspecialidadId"] = array("type"=>3,"varname"=>"EspecialidadId", "name" => "EspecialidadId", "autoInc" => "1");
$dalTableEspecialidades["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableEspecialidades["Especialidad"] = array("type"=>200,"varname"=>"Especialidad", "name" => "Especialidad", "autoInc" => "0");
$dalTableEspecialidades["EspecialidadId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Especialidades"] = &$dalTableEspecialidades;
?>