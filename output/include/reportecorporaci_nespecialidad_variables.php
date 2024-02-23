<?php
$strTableName="dbo.ReporteCorporaciónEspecialidad";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Procesos";

$gstrOrderBy="ORDER BY dbo.Procesos.CarteraTipoId, dbo.Procesos.SeccionalId, dbo.CorporacionesView.Corporacion, SUBSTRING(Despachos.Codigo, 6, 4)";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>