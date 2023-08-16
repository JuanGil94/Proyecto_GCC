<?php
$dalTableIPsRestringidas = array();
$dalTableIPsRestringidas["IPRestringidaId"] = array("type"=>3,"varname"=>"IPRestringidaId", "name" => "IPRestringidaId", "autoInc" => "1");
$dalTableIPsRestringidas["IPRestringida"] = array("type"=>200,"varname"=>"IPRestringida", "name" => "IPRestringida", "autoInc" => "0");
$dalTableIPsRestringidas["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTableIPsRestringidas["IPRestringidaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_IPsRestringidas"] = &$dalTableIPsRestringidas;
?>