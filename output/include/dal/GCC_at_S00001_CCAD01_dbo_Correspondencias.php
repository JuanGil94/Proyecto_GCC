<?php
$dalTableCorrespondencias = array();
$dalTableCorrespondencias["CorrespondenciaId"] = array("type"=>3,"varname"=>"CorrespondenciaId", "name" => "CorrespondenciaId", "autoInc" => "1");
$dalTableCorrespondencias["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableCorrespondencias["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableCorrespondencias["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableCorrespondencias["Sigobius"] = array("type"=>3,"varname"=>"Sigobius", "name" => "Sigobius", "autoInc" => "0");
$dalTableCorrespondencias["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableCorrespondencias["Resolucion"] = array("type"=>200,"varname"=>"Resolucion", "name" => "Resolucion", "autoInc" => "0");
$dalTableCorrespondencias["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableCorrespondencias["Radicado"] = array("type"=>200,"varname"=>"Radicado", "name" => "Radicado", "autoInc" => "0");
$dalTableCorrespondencias["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "0");
$dalTableCorrespondencias["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "0");
$dalTableCorrespondencias["CorrespondenciaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Correspondencias"] = &$dalTableCorrespondencias;
?>