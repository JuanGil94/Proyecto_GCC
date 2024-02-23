<?php
$strTableName="dbo.ReporteCorporacionEspecialidad";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Procesos";

$gstrOrderBy="ORDER BY ProcesosView1.CarteraTipoId, 
              ProcesosView1.Seccional, 
              CorporacionesView.Corporacion, 
              SUBSTRING(Despachos.Codigo, 6, 4)";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>