<?php
$dalTableUserProfile = array();
$dalTableUserProfile["UserId"] = array("type"=>3,"varname"=>"UserId", "name" => "UserId", "autoInc" => "1");
$dalTableUserProfile["UserName"] = array("type"=>202,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableUserProfile["HorarioId"] = array("type"=>3,"varname"=>"HorarioId", "name" => "HorarioId", "autoInc" => "0");
$dalTableUserProfile["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTableUserProfile["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "0");
$dalTableUserProfile["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableUserProfile["CarteraTipoId"] = array("type"=>3,"varname"=>"CarteraTipoId", "name" => "CarteraTipoId", "autoInc" => "0");
$dalTableUserProfile["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTableUserProfile["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre", "autoInc" => "0");
$dalTableUserProfile["UserId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_UserProfile"] = &$dalTableUserProfile;
?>