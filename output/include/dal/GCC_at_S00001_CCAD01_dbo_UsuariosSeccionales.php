<?php
$dalTableUsuariosSeccionales = array();
$dalTableUsuariosSeccionales["UsuarioSeccionalId"] = array("type"=>3,"varname"=>"UsuarioSeccionalId", "name" => "UsuarioSeccionalId", "autoInc" => "1");
$dalTableUsuariosSeccionales["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "0");
$dalTableUsuariosSeccionales["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTableUsuariosSeccionales["UsuarioSeccionalId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_UsuariosSeccionales"] = &$dalTableUsuariosSeccionales;
?>