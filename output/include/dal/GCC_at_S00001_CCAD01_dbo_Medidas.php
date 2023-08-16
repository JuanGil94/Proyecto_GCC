<?php
$dalTableMedidas = array();
$dalTableMedidas["MedidaId"] = array("type"=>3,"varname"=>"MedidaId", "name" => "MedidaId", "autoInc" => "1");
$dalTableMedidas["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTableMedidas["PropiedadId"] = array("type"=>3,"varname"=>"PropiedadId", "name" => "PropiedadId", "autoInc" => "0");
$dalTableMedidas["EmbargoFecha"] = array("type"=>7,"varname"=>"EmbargoFecha", "name" => "EmbargoFecha", "autoInc" => "0");
$dalTableMedidas["EmbargoResolucion"] = array("type"=>200,"varname"=>"EmbargoResolucion", "name" => "EmbargoResolucion", "autoInc" => "0");
$dalTableMedidas["Secuestre"] = array("type"=>200,"varname"=>"Secuestre", "name" => "Secuestre", "autoInc" => "0");
$dalTableMedidas["SecuestreDocumento"] = array("type"=>200,"varname"=>"SecuestreDocumento", "name" => "SecuestreDocumento", "autoInc" => "0");
$dalTableMedidas["SecuestreDireccion"] = array("type"=>200,"varname"=>"SecuestreDireccion", "name" => "SecuestreDireccion", "autoInc" => "0");
$dalTableMedidas["SecuestreTelefono"] = array("type"=>200,"varname"=>"SecuestreTelefono", "name" => "SecuestreTelefono", "autoInc" => "0");
$dalTableMedidas["RemateFecha"] = array("type"=>135,"varname"=>"RemateFecha", "name" => "RemateFecha", "autoInc" => "0");
$dalTableMedidas["RemateResolucion"] = array("type"=>200,"varname"=>"RemateResolucion", "name" => "RemateResolucion", "autoInc" => "0");
$dalTableMedidas["Valor"] = array("type"=>6,"varname"=>"Valor", "name" => "Valor", "autoInc" => "0");
$dalTableMedidas["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableMedidas["Secuestrado"] = array("type"=>11,"varname"=>"Secuestrado", "name" => "Secuestrado", "autoInc" => "0");
$dalTableMedidas["SecuestroFecha"] = array("type"=>7,"varname"=>"SecuestroFecha", "name" => "SecuestroFecha", "autoInc" => "0");
$dalTableMedidas["Comision"] = array("type"=>11,"varname"=>"Comision", "name" => "Comision", "autoInc" => "0");
$dalTableMedidas["RemateAviso"] = array("type"=>11,"varname"=>"RemateAviso", "name" => "RemateAviso", "autoInc" => "0");
$dalTableMedidas["Aprobacion"] = array("type"=>11,"varname"=>"Aprobacion", "name" => "Aprobacion", "autoInc" => "0");
$dalTableMedidas["Entrega"] = array("type"=>11,"varname"=>"Entrega", "name" => "Entrega", "autoInc" => "0");
$dalTableMedidas["MedidaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Medidas"] = &$dalTableMedidas;
?>