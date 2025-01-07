<?php
$tdataprescripci_nautom_tica = array();
$tdataprescripci_nautom_tica[".searchableFields"] = array();
$tdataprescripci_nautom_tica[".ShortName"] = "prescripci_nautom_tica";
$tdataprescripci_nautom_tica[".OwnerID"] = "";
$tdataprescripci_nautom_tica[".OriginalTable"] = "dbo.Procesos";


$tdataprescripci_nautom_tica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprescripci_nautom_tica[".originalPagesByType"] = $tdataprescripci_nautom_tica[".pagesByType"];
$tdataprescripci_nautom_tica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprescripci_nautom_tica[".originalPages"] = $tdataprescripci_nautom_tica[".pages"];
$tdataprescripci_nautom_tica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprescripci_nautom_tica[".originalDefaultPages"] = $tdataprescripci_nautom_tica[".defaultPages"];

//	field labels
$fieldLabelsprescripci_nautom_tica = array();
$fieldToolTipsprescripci_nautom_tica = array();
$pageTitlesprescripci_nautom_tica = array();
$placeHoldersprescripci_nautom_tica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprescripci_nautom_tica["Spanish"] = array();
	$fieldToolTipsprescripci_nautom_tica["Spanish"] = array();
	$placeHoldersprescripci_nautom_tica["Spanish"] = array();
	$pageTitlesprescripci_nautom_tica["Spanish"] = array();
	$fieldLabelsprescripci_nautom_tica["Spanish"]["ProcesoId"] = "ProcesoId";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["ProcesoId"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["SeccionalId"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Despacho"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Despacho"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Codificador"] = "Codificador";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Codificador"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Codificador"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Sancionado"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Sancionado"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Masculino"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Masculino"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["OficioId"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["OficioId"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["AlertaTipo"] = "Alerta Tipo";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["AlertaTipo"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["AlertaTipo"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Oficio"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Oficio"] = "";
	$fieldLabelsprescripci_nautom_tica["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsprescripci_nautom_tica["Spanish"]["Sigobius"] = "";
	$placeHoldersprescripci_nautom_tica["Spanish"]["Sigobius"] = "";
	if (count($fieldToolTipsprescripci_nautom_tica["Spanish"]))
		$tdataprescripci_nautom_tica[".isUseToolTips"] = true;
}


	$tdataprescripci_nautom_tica[".NCSearch"] = true;



$tdataprescripci_nautom_tica[".shortTableName"] = "prescripci_nautom_tica";
$tdataprescripci_nautom_tica[".nSecOptions"] = 0;

$tdataprescripci_nautom_tica[".mainTableOwnerID"] = "";
$tdataprescripci_nautom_tica[".entityType"] = 1;
$tdataprescripci_nautom_tica[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprescripci_nautom_tica[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprescripci_nautom_tica[".showAddInPopup"] = false;

$tdataprescripci_nautom_tica[".showEditInPopup"] = false;

$tdataprescripci_nautom_tica[".showViewInPopup"] = false;

$tdataprescripci_nautom_tica[".listAjax"] = false;
//	temporary
//$tdataprescripci_nautom_tica[".listAjax"] = false;

	$tdataprescripci_nautom_tica[".audit"] = true;

	$tdataprescripci_nautom_tica[".locking"] = false;


$pages = $tdataprescripci_nautom_tica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprescripci_nautom_tica[".edit"] = true;
	$tdataprescripci_nautom_tica[".afterEditAction"] = 1;
	$tdataprescripci_nautom_tica[".closePopupAfterEdit"] = 1;
	$tdataprescripci_nautom_tica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprescripci_nautom_tica[".add"] = true;
$tdataprescripci_nautom_tica[".afterAddAction"] = 1;
$tdataprescripci_nautom_tica[".closePopupAfterAdd"] = 1;
$tdataprescripci_nautom_tica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprescripci_nautom_tica[".list"] = true;
}



$tdataprescripci_nautom_tica[".strSortControlSettingsJSON"] = "";

$tdataprescripci_nautom_tica[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataprescripci_nautom_tica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprescripci_nautom_tica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprescripci_nautom_tica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprescripci_nautom_tica[".printFriendly"] = true;
}



$tdataprescripci_nautom_tica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprescripci_nautom_tica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprescripci_nautom_tica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprescripci_nautom_tica[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdataprescripci_nautom_tica[".ajaxCodeSnippetAdded"] = false;

$tdataprescripci_nautom_tica[".buttonsAdded"] = false;

$tdataprescripci_nautom_tica[".addPageEvents"] = true;

// use timepicker for search panel
$tdataprescripci_nautom_tica[".isUseTimeForSearch"] = false;


$tdataprescripci_nautom_tica[".badgeColor"] = "DC143C";


$tdataprescripci_nautom_tica[".allSearchFields"] = array();
$tdataprescripci_nautom_tica[".filterFields"] = array();
$tdataprescripci_nautom_tica[".requiredSearchFields"] = array();

$tdataprescripci_nautom_tica[".googleLikeFields"] = array();
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "ProcesoId";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "SeccionalId";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Despacho";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Codificador";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Sancionado";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "SancionadoDocumento";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Masculino";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "OficioId";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "AlertaTipo";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Oficio";
$tdataprescripci_nautom_tica[".googleLikeFields"][] = "Sigobius";



$tdataprescripci_nautom_tica[".tableType"] = "list";

$tdataprescripci_nautom_tica[".printerPageOrientation"] = 0;
$tdataprescripci_nautom_tica[".nPrinterPageScale"] = 100;

$tdataprescripci_nautom_tica[".nPrinterSplitRecords"] = 40;

$tdataprescripci_nautom_tica[".geocodingEnabled"] = false;




$tdataprescripci_nautom_tica[".isDisplayLoading"] = true;

$tdataprescripci_nautom_tica[".isResizeColumns"] = true;





$tdataprescripci_nautom_tica[".pageSize"] = 20;

$tdataprescripci_nautom_tica[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Sancionado";
$tdataprescripci_nautom_tica[".strOrderBy"] = $tstrOrderBy;

$tdataprescripci_nautom_tica[".orderindexes"] = array();


$tdataprescripci_nautom_tica[".sqlHead"] = "        SELECT ProcesosView1.ProcesoId,                  ProcesosView1.SeccionalId,   			   Abogados.Despacho,   			   Abogados.Codificador,   			   ProcesosView1.Sancionado,                  ProcesosView1.SancionadoDocumento,                  ProcesosView1.Masculino,                  AlertasOficios.OficioId,                  AlertasTipos.AlertaTipo,                  Oficios.Oficio,                  Oficios.Sigobius";
$tdataprescripci_nautom_tica[".sqlFrom"] = "FROM Abogados               INNER JOIN ProcesosView1               INNER JOIN AlertasTipos               INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId               INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId                                            AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId               INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId               LEFT OUTER JOIN Correspondencias               INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId                                                                                                 AND Alertas.AlertaId = Aplazamientos.AlertaId";
$tdataprescripci_nautom_tica[".sqlWhereExpr"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  			 AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$tdataprescripci_nautom_tica[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataprescripci_nautom_tica[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataprescripci_nautom_tica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprescripci_nautom_tica[".arrGroupsPerPage"] = $arrGPP;

$tdataprescripci_nautom_tica[".highlightSearchResults"] = true;

$tableKeysprescripci_nautom_tica = array();
$tableKeysprescripci_nautom_tica[] = "ProcesoId";
$tdataprescripci_nautom_tica[".Keys"] = $tableKeysprescripci_nautom_tica;


$tdataprescripci_nautom_tica[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.ProcesoId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["ProcesoId"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "ProcesoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.SeccionalId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["SeccionalId"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "SeccionalId";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogados.Despacho";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["Despacho"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Despacho";
//	Codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Codificador";
	$fdata["GoodName"] = "Codificador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Codificador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codificador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogados.Codificador";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["Codificador"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Codificador";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.Sancionado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["Sancionado"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","SancionadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoDocumento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.SancionadoDocumento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["SancionadoDocumento"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "SancionadoDocumento";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Masculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Masculino";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.Masculino";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataprescripci_nautom_tica["Masculino"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Masculino";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertasOficios.OficioId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["OficioId"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "OficioId";
//	AlertaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AlertaTipo";
	$fdata["GoodName"] = "AlertaTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","AlertaTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AlertaTipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertasTipos.AlertaTipo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["AlertaTipo"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "AlertaTipo";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Oficio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficios.Oficio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescripci_nautom_tica["Oficio"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Oficio";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prescripci_nAutom_tica","Sigobius");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Sigobius";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficios.Sigobius";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataprescripci_nautom_tica["Sigobius"] = $fdata;
		$tdataprescripci_nautom_tica[".searchableFields"][] = "Sigobius";


$tables_data["PrescripciónAutomática"]=&$tdataprescripci_nautom_tica;
$field_labels["Prescripci_nAutom_tica"] = &$fieldLabelsprescripci_nautom_tica;
$fieldToolTips["Prescripci_nAutom_tica"] = &$fieldToolTipsprescripci_nautom_tica;
$placeHolders["Prescripci_nAutom_tica"] = &$placeHoldersprescripci_nautom_tica;
$page_titles["Prescripci_nAutom_tica"] = &$pageTitlesprescripci_nautom_tica;


changeTextControlsToDate( "PrescripciónAutomática" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["PrescripciónAutomática"] = array();
//	dbo.Acuerdos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Acuerdos";
		$detailsParam["dOriginalTable"] = "dbo.Acuerdos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "acuerdos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Acuerdos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Correspondencias
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Correspondencias";
		$detailsParam["dOriginalTable"] = "dbo.Correspondencias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "correspondencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Correspondencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Fechas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Fechas";
		$detailsParam["dOriginalTable"] = "dbo.Fechas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "fechas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Fechas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Intereses
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Intereses";
		$detailsParam["dOriginalTable"] = "dbo.Intereses";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "intereses";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Intereses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Interrupciones
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Interrupciones";
		$detailsParam["dOriginalTable"] = "dbo.Interrupciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interrupciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Interrupciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Liquidaciones
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Liquidaciones";
		$detailsParam["dOriginalTable"] = "dbo.Liquidaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "liquidaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Liquidaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Llamadas
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Llamadas";
		$detailsParam["dOriginalTable"] = "dbo.Llamadas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "llamadas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Llamadas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Medidas
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Medidas";
		$detailsParam["dOriginalTable"] = "dbo.Medidas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medidas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Medidas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Novedades
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Novedades";
		$detailsParam["dOriginalTable"] = "dbo.Novedades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "novedades";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Novedades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Pagos1
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Pagos1";
		$detailsParam["dOriginalTable"] = "dbo.Pagos1";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pagos1";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Pagos1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Reasignaciones
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Reasignaciones";
		$detailsParam["dOriginalTable"] = "dbo.Reasignaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reasignaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Reasignaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Solidarios
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Solidarios";
		$detailsParam["dOriginalTable"] = "dbo.Solidarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solidarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Solidarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["PrescripciónAutomática"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripciónAutomática"][$dIndex]["detailKeys"][]="ProcesoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["PrescripciónAutomática"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PrescripciónAutomática"][0] = $masterParams;
				$masterTablesData["PrescripciónAutomática"][0]["masterKeys"] = array();
	$masterTablesData["PrescripciónAutomática"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["PrescripciónAutomática"][0]["detailKeys"] = array();
	$masterTablesData["PrescripciónAutomática"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_prescripci_nautom_tica()
{
$proto0=array();
$proto0["m_strHead"] = "        SELECT";
$proto0["m_strFieldList"] = "ProcesosView1.ProcesoId,                  ProcesosView1.SeccionalId,   			   Abogados.Despacho,   			   Abogados.Codificador,   			   ProcesosView1.Sancionado,                  ProcesosView1.SancionadoDocumento,                  ProcesosView1.Masculino,                  AlertasOficios.OficioId,                  AlertasTipos.AlertaTipo,                  Oficios.Oficio,                  Oficios.Sigobius";
$proto0["m_strFrom"] = "FROM Abogados               INNER JOIN ProcesosView1               INNER JOIN AlertasTipos               INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId               INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId                                            AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId               INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId               LEFT OUTER JOIN Correspondencias               INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId                                                                                                 AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  			 AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$proto0["m_strOrderBy"] = "ORDER BY Sancionado";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  			 AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  			 AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "CASE                     WHEN ProcesosView1.FechaPrescripcion < MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, ProcesosView1.Ejecutoria)))                     THEN MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, ProcesosView1.Ejecutoria)))                     ELSE ProcesosView1.FechaPrescripcion                 END <= GETDATE()";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "CASE                     WHEN ProcesosView1.FechaPrescripcion < MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, ProcesosView1.Ejecutoria)))                     THEN MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, ProcesosView1.Ejecutoria)))                     ELSE ProcesosView1.FechaPrescripcion                 END <= GETDATE()"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = true;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.ProcesoId"
));

$proto6["m_sql"] = "ProcesosView1.ProcesoId";
$proto6["m_srcTableName"] = "PrescripciónAutomática";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SeccionalId"
));

$proto8["m_sql"] = "ProcesosView1.SeccionalId";
$proto8["m_srcTableName"] = "PrescripciónAutomática";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto10["m_sql"] = "Abogados.Despacho";
$proto10["m_srcTableName"] = "PrescripciónAutomática";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto12["m_sql"] = "Abogados.Codificador";
$proto12["m_srcTableName"] = "PrescripciónAutomática";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto14["m_sql"] = "ProcesosView1.Sancionado";
$proto14["m_srcTableName"] = "PrescripciónAutomática";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto16["m_sql"] = "ProcesosView1.SancionadoDocumento";
$proto16["m_srcTableName"] = "PrescripciónAutomática";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto18["m_sql"] = "ProcesosView1.Masculino";
$proto18["m_srcTableName"] = "PrescripciónAutomática";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto20["m_sql"] = "AlertasOficios.OficioId";
$proto20["m_srcTableName"] = "PrescripciónAutomática";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto22["m_sql"] = "AlertasTipos.AlertaTipo";
$proto22["m_srcTableName"] = "PrescripciónAutomática";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto24["m_sql"] = "Oficios.Oficio";
$proto24["m_srcTableName"] = "PrescripciónAutomática";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto26["m_sql"] = "Oficios.Sigobius";
$proto26["m_srcTableName"] = "PrescripciónAutomática";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Abogados";
$proto29["m_srcTableName"] = "PrescripciónAutomática";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "AbogadoId";
$proto29["m_columns"][] = "Abogado";
$proto29["m_columns"][] = "Documento";
$proto29["m_columns"][] = "Tarjeta";
$proto29["m_columns"][] = "Direccion";
$proto29["m_columns"][] = "Telefonos";
$proto29["m_columns"][] = "Celular";
$proto29["m_columns"][] = "Email";
$proto29["m_columns"][] = "SeccionalId";
$proto29["m_columns"][] = "Masculino";
$proto29["m_columns"][] = "Activo";
$proto29["m_columns"][] = "Despacho";
$proto29["m_columns"][] = "Codificador";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "Abogados";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "PrescripciónAutomática";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.ProcesosView1";
$proto33["m_srcTableName"] = "PrescripciónAutomática";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ProcesoId";
$proto33["m_columns"][] = "Fecha";
$proto33["m_columns"][] = "Numero";
$proto33["m_columns"][] = "Obligacion";
$proto33["m_columns"][] = "Costas";
$proto33["m_columns"][] = "Intereses";
$proto33["m_columns"][] = "Folios";
$proto33["m_columns"][] = "Observaciones";
$proto33["m_columns"][] = "Seccional";
$proto33["m_columns"][] = "Ciudad";
$proto33["m_columns"][] = "Abogado";
$proto33["m_columns"][] = "Masculino";
$proto33["m_columns"][] = "Despacho";
$proto33["m_columns"][] = "Concepto";
$proto33["m_columns"][] = "Motivo";
$proto33["m_columns"][] = "Estado";
$proto33["m_columns"][] = "Calificacion";
$proto33["m_columns"][] = "PiePagina";
$proto33["m_columns"][] = "CiudadDepartamento";
$proto33["m_columns"][] = "Sigobius";
$proto33["m_columns"][] = "Cuotas";
$proto33["m_columns"][] = "Abono";
$proto33["m_columns"][] = "Inicio";
$proto33["m_columns"][] = "VlrCuota";
$proto33["m_columns"][] = "VlrIntereses";
$proto33["m_columns"][] = "Garantia";
$proto33["m_columns"][] = "Recaudo";
$proto33["m_columns"][] = "Sancionado";
$proto33["m_columns"][] = "SancionadoDocumento";
$proto33["m_columns"][] = "SancionadoTipoDocumento";
$proto33["m_columns"][] = "SancionadoCiudad";
$proto33["m_columns"][] = "DespachoCiudad";
$proto33["m_columns"][] = "Providencia";
$proto33["m_columns"][] = "Ejecutoria";
$proto33["m_columns"][] = "Radicado";
$proto33["m_columns"][] = "Terminacion";
$proto33["m_columns"][] = "Liquidacion";
$proto33["m_columns"][] = "Dias";
$proto33["m_columns"][] = "Tipo";
$proto33["m_columns"][] = "Cantidad";
$proto33["m_columns"][] = "SancionadoMasculino";
$proto33["m_columns"][] = "SeccionalCorreo";
$proto33["m_columns"][] = "SeccionalDireccion";
$proto33["m_columns"][] = "SeccionalTelefonos";
$proto33["m_columns"][] = "Fallecimiento";
$proto33["m_columns"][] = "Notificacion";
$proto33["m_columns"][] = "SeccionalNit";
$proto33["m_columns"][] = "SeccionalId";
$proto33["m_columns"][] = "AbogadoId";
$proto33["m_columns"][] = "DespachoId";
$proto33["m_columns"][] = "SancionadoId";
$proto33["m_columns"][] = "ConceptoId";
$proto33["m_columns"][] = "NaturalezaId";
$proto33["m_columns"][] = "EstadoId";
$proto33["m_columns"][] = "EtapaId";
$proto33["m_columns"][] = "CalificacionId";
$proto33["m_columns"][] = "MotivoId";
$proto33["m_columns"][] = "ProcesoObservaciones";
$proto33["m_columns"][] = "Remisorio";
$proto33["m_columns"][] = "Acuerdo";
$proto33["m_columns"][] = "Incumplimiento";
$proto33["m_columns"][] = "Suspension";
$proto33["m_columns"][] = "Traslado";
$proto33["m_columns"][] = "Error";
$proto33["m_columns"][] = "Actuacion";
$proto33["m_columns"][] = "TipoDocumentoId";
$proto33["m_columns"][] = "Juridica";
$proto33["m_columns"][] = "SancionadoEmail";
$proto33["m_columns"][] = "SancionadoCelular";
$proto33["m_columns"][] = "CarteraTipoId";
$proto33["m_columns"][] = "ConceptoAbogado";
$proto33["m_columns"][] = "LiquidaIntereses";
$proto33["m_columns"][] = "Saldo";
$proto33["m_columns"][] = "Prescripcion";
$proto33["m_columns"][] = "FechaPrescripcion";
$proto33["m_columns"][] = "ObligacionInicial";
$proto33["m_columns"][] = "CostasInicial";
$proto33["m_columns"][] = "InteresesInicial";
$proto33["m_columns"][] = "Minjusticia_Def";
$proto33["m_columns"][] = "MinJusticia";
$proto33["m_columns"][] = "ActuacionId";
$proto33["m_columns"][] = "NotificacionValidada";
$proto33["m_columns"][] = "Validado";
$proto33["m_columns"][] = "Documento";
$proto33["m_columns"][] = "Seleccionado";
$proto33["m_columns"][] = "CompetenciaId";
$proto33["m_columns"][] = "SeleccionadoPor";
$proto33["m_columns"][] = "RadicadoNumero";
$proto33["m_columns"][] = "MinjusticiaId";
$proto33["m_columns"][] = "Contador";
$proto33["m_columns"][] = "ContadorCargo";
$proto33["m_columns"][] = "Director";
$proto33["m_columns"][] = "DirectorCargo";
$proto33["m_columns"][] = "Etapa";
$proto33["m_columns"][] = "Persuasivo";
$proto33["m_columns"][] = "Plazo";
$proto33["m_columns"][] = "Mayor";
$proto33["m_columns"][] = "Revocatoria";
$proto33["m_columns"][] = "RecaudoTerminado";
$proto33["m_columns"][] = "Naturaleza";
$proto33["m_columns"][] = "TasaTipo";
$proto33["m_columns"][] = "CarteraTipo";
$proto33["m_columns"][] = "Prescrita";
$proto33["m_columns"][] = "TrasladoCartera";
$proto33["m_columns"][] = "CarteraTipoIdOrigen";
$proto33["m_columns"][] = "TrasladoConcepto";
$proto33["m_columns"][] = "ConceptoIdOrigen";
$proto33["m_columns"][] = "CarteraTipoOrigen";
$proto33["m_columns"][] = "ConceptoOrigen";
$proto33["m_columns"][] = "ChequeoId";
$proto33["m_columns"][] = "VlrCostas";
$proto33["m_columns"][] = "VlrInteresesPlazo";
$proto33["m_columns"][] = "AbogadoDocumento";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN ProcesosView1";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "PrescripciónAutomática";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN AlertasTipos"
));

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN AlertasTipos";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "PrescripciónAutomática";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId"
));

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "PrescripciónAutomática";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId                                            AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId"
));

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId                                            AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "PrescripciónAutomática";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId"
));

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "PrescripciónAutomática";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "LEFT OUTER JOIN Correspondencias"
));

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN Correspondencias";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "PrescripciónAutomática";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId                                                                                                 AND Alertas.AlertaId = Aplazamientos.AlertaId"
));

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId                                                                                                 AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "PrescripciónAutomática";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto60=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.ProcesoId"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SeccionalId"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.CarteraTipoId"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Fecha"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.FechaPrescripcion"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto88=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Sancionado"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 0;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PrescripciónAutomática";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_prescripci_nautom_tica = createSqlQuery_prescripci_nautom_tica();


	
		;

											

$tdataprescripci_nautom_tica[".sqlquery"] = $queryData_prescripci_nautom_tica;



include_once(getabspath("include/prescripci_nautom_tica_events.php"));
$tdataprescripci_nautom_tica[".hasEvents"] = true;

?>