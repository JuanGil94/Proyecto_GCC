<?php
$dalTableReportes = array();
$dalTableReportes["ReporteId"] = array("type"=>3,"varname"=>"ReporteId", "name" => "ReporteId", "autoInc" => "1");
$dalTableReportes["Reporte"] = array("type"=>200,"varname"=>"Reporte", "name" => "Reporte", "autoInc" => "0");
$dalTableReportes["OficioId"] = array("type"=>3,"varname"=>"OficioId", "name" => "OficioId", "autoInc" => "0");
$dalTableReportes["Dias"] = array("type"=>3,"varname"=>"Dias", "name" => "Dias", "autoInc" => "0");
$dalTableReportes["Minimo"] = array("type"=>6,"varname"=>"Minimo", "name" => "Minimo", "autoInc" => "0");
$dalTableReportes["ReporteId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Reportes"] = &$dalTableReportes;
?>