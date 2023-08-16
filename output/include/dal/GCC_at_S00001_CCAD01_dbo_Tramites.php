<?php
$dalTableTramites = array();
$dalTableTramites["TramiteId"] = array("type"=>3,"varname"=>"TramiteId", "name" => "TramiteId", "autoInc" => "1");
$dalTableTramites["Tramite"] = array("type"=>200,"varname"=>"Tramite", "name" => "Tramite", "autoInc" => "0");
$dalTableTramites["TramiteId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Tramites"] = &$dalTableTramites;
?>