<?php
$dalTableMotivosDevoluciones = array();
$dalTableMotivosDevoluciones["MotivoDevolucionId"] = array("type"=>3,"varname"=>"MotivoDevolucionId", "name" => "MotivoDevolucionId", "autoInc" => "1");
$dalTableMotivosDevoluciones["MotivoDevolucion"] = array("type"=>200,"varname"=>"MotivoDevolucion", "name" => "MotivoDevolucion", "autoInc" => "0");
$dalTableMotivosDevoluciones["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableMotivosDevoluciones["MotivoDevolucionId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_MotivosDevoluciones"] = &$dalTableMotivosDevoluciones;
?>