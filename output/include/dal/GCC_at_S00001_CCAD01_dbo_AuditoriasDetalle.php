<?php
$dalTableAuditoriasDetalle = array();
$dalTableAuditoriasDetalle["AuditoriaId"] = array("type"=>3,"varname"=>"AuditoriaId", "name" => "AuditoriaId", "autoInc" => "0");
$dalTableAuditoriasDetalle["Campo"] = array("type"=>200,"varname"=>"Campo", "name" => "Campo", "autoInc" => "0");
$dalTableAuditoriasDetalle["Valores"] = array("type"=>200,"varname"=>"Valores", "name" => "Valores", "autoInc" => "0");
$dalTableAuditoriasDetalle["AuditoriaId"]["key"]=true;
$dalTableAuditoriasDetalle["Campo"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_AuditoriasDetalle"] = &$dalTableAuditoriasDetalle;
?>