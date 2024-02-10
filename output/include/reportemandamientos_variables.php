<?php
$strTableName="dbo.ReporteMandamientos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Mandamientos";

$gstrOrderBy="ORDER BY P.CarteraTipoId, S.Seccional, A.Abogado, P.ConceptoId, M.Fecha, SA.Sancionado";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>