<?php
$dalTableUsuGCC_ugmembers = array();
$dalTableUsuGCC_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableUsuGCC_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableUsuGCC_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableUsuGCC_ugmembers["UserName"]["key"]=true;
$dalTableUsuGCC_ugmembers["GroupID"]["key"]=true;
$dalTableUsuGCC_ugmembers["Provider"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_UsuGCC_ugmembers"] = &$dalTableUsuGCC_ugmembers;
?>