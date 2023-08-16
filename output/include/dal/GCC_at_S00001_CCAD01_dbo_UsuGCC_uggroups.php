<?php
$dalTableUsuGCC_uggroups = array();
$dalTableUsuGCC_uggroups["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "1");
$dalTableUsuGCC_uggroups["Label"] = array("type"=>200,"varname"=>"Label", "name" => "Label", "autoInc" => "0");
$dalTableUsuGCC_uggroups["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableUsuGCC_uggroups["Comment"] = array("type"=>201,"varname"=>"Comment", "name" => "Comment", "autoInc" => "0");
$dalTableUsuGCC_uggroups["GroupID"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_UsuGCC_uggroups"] = &$dalTableUsuGCC_uggroups;
?>