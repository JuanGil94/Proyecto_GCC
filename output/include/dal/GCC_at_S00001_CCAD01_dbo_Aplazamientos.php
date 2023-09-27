<?php
$dalTableAplazamientos = array();
$dalTableAplazamientos["AplazamientoId"] = array("type"=>3,"varname"=>"AplazamientoId", "name" => "AplazamientoId", "autoInc" => "1");
$dalTableAplazamientos["AlertaId"] = array("type"=>3,"varname"=>"AlertaId", "name" => "AlertaId", "autoInc" => "0");
$dalTableAplazamientos["Aplazamiento"] = array("type"=>200,"varname"=>"Aplazamiento", "name" => "Aplazamiento", "autoInc" => "0");
$dalTableAplazamientos["Dias"] = array("type"=>3,"varname"=>"Dias", "name" => "Dias", "autoInc" => "0");
$dalTableAplazamientos["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableAplazamientos["AplazamientoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Aplazamientos"] = &$dalTableAplazamientos;
?>