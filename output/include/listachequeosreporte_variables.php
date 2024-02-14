<?php
$strTableName="dbo.ListaChequeosReporte";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Chequeos";

$gstrOrderBy="ORDER BY 
			Seccionales.Seccional,
			Chequeos.ChequeoId";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>