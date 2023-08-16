<?php
$dalTableEtapas = array();
$dalTableEtapas["EtapaId"] = array("type"=>3,"varname"=>"EtapaId", "name" => "EtapaId", "autoInc" => "1");
$dalTableEtapas["Etapa"] = array("type"=>200,"varname"=>"Etapa", "name" => "Etapa", "autoInc" => "0");
$dalTableEtapas["EtapaId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Etapas"] = &$dalTableEtapas;
?>