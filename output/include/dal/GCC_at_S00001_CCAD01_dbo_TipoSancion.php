<?php
$dalTableTipoSancion = array();
$dalTableTipoSancion["IdTipo"] = array("type"=>3,"varname"=>"IdTipo", "name" => "IdTipo", "autoInc" => "1");
$dalTableTipoSancion["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre", "autoInc" => "0");
$dalTableTipoSancion["IdTipo"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_TipoSancion"] = &$dalTableTipoSancion;
?>