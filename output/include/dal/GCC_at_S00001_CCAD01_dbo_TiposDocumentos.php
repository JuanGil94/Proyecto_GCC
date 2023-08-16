<?php
$dalTableTiposDocumentos = array();
$dalTableTiposDocumentos["TipoDocumentoId"] = array("type"=>3,"varname"=>"TipoDocumentoId", "name" => "TipoDocumentoId", "autoInc" => "1");
$dalTableTiposDocumentos["Codigo"] = array("type"=>200,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "0");
$dalTableTiposDocumentos["TipoDocumento"] = array("type"=>200,"varname"=>"TipoDocumento", "name" => "TipoDocumento", "autoInc" => "0");
$dalTableTiposDocumentos["Juridica"] = array("type"=>11,"varname"=>"Juridica", "name" => "Juridica", "autoInc" => "0");
$dalTableTiposDocumentos["TipoDocumentoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_TiposDocumentos"] = &$dalTableTiposDocumentos;
?>