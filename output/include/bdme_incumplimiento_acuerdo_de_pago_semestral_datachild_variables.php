<?php
$strTableName="BDME Incumplimiento Acuerdo de Pago Semestral DataChild";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="BDME Incumplimiento Acuerdo de Pago Semestral DataChild";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>