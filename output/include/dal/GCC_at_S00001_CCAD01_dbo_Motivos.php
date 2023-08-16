<?php
$dalTableMotivos = array();
$dalTableMotivos["MotivoId"] = array("type"=>3,"varname"=>"MotivoId", "name" => "MotivoId", "autoInc" => "1");
$dalTableMotivos["Motivo"] = array("type"=>200,"varname"=>"Motivo", "name" => "Motivo", "autoInc" => "0");
$dalTableMotivos["MotivoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Motivos"] = &$dalTableMotivos;
?>