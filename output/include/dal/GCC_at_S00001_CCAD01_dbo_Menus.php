<?php
$dalTableMenus = array();
$dalTableMenus["MenuId"] = array("type"=>3,"varname"=>"MenuId", "name" => "MenuId", "autoInc" => "1");
$dalTableMenus["Menu"] = array("type"=>200,"varname"=>"Menu", "name" => "Menu", "autoInc" => "0");
$dalTableMenus["Url"] = array("type"=>200,"varname"=>"Url", "name" => "Url", "autoInc" => "0");
$dalTableMenus["Imagen"] = array("type"=>200,"varname"=>"Imagen", "name" => "Imagen", "autoInc" => "0");
$dalTableMenus["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableMenus["MenuId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Menus"] = &$dalTableMenus;
?>