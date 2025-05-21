<?php
$tdataprescripcionautomatica = array();
$tdataprescripcionautomatica[".searchableFields"] = array();
$tdataprescripcionautomatica[".ShortName"] = "prescripcionautomatica";
$tdataprescripcionautomatica[".OwnerID"] = "";
$tdataprescripcionautomatica[".OriginalTable"] = "dbo.Procesos";


$tdataprescripcionautomatica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprescripcionautomatica[".originalPagesByType"] = $tdataprescripcionautomatica[".pagesByType"];
$tdataprescripcionautomatica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprescripcionautomatica[".originalPages"] = $tdataprescripcionautomatica[".pages"];
$tdataprescripcionautomatica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprescripcionautomatica[".originalDefaultPages"] = $tdataprescripcionautomatica[".defaultPages"];

//	field labels
$fieldLabelsprescripcionautomatica = array();
$fieldToolTipsprescripcionautomatica = array();
$pageTitlesprescripcionautomatica = array();
$placeHoldersprescripcionautomatica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprescripcionautomatica["Spanish"] = array();
	$fieldToolTipsprescripcionautomatica["Spanish"] = array();
	$placeHoldersprescripcionautomatica["Spanish"] = array();
	$pageTitlesprescripcionautomatica["Spanish"] = array();
	$fieldLabelsprescripcionautomatica["Spanish"]["ProcesoId"] = "ProcesoId";
	$fieldToolTipsprescripcionautomatica["Spanish"]["ProcesoId"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprescripcionautomatica["Spanish"]["SeccionalId"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Numero"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Numero"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Despacho"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Despacho"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Codificador"] = "Codificador";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Codificador"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Codificador"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Sancionado"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Sancionado"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsprescripcionautomatica["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Masculino"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Masculino"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsprescripcionautomatica["Spanish"]["OficioId"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["OficioId"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["AlertaTipo"] = "Alerta Tipo";
	$fieldToolTipsprescripcionautomatica["Spanish"]["AlertaTipo"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["AlertaTipo"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Oficio"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Oficio"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsprescripcionautomatica["Spanish"]["Sigobius"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["Sigobius"] = "";
	$fieldLabelsprescripcionautomatica["Spanish"]["FechaPrescripcion"] = "Fecha Prescripcion";
	$fieldToolTipsprescripcionautomatica["Spanish"]["FechaPrescripcion"] = "";
	$placeHoldersprescripcionautomatica["Spanish"]["FechaPrescripcion"] = "";
	if (count($fieldToolTipsprescripcionautomatica["Spanish"]))
		$tdataprescripcionautomatica[".isUseToolTips"] = true;
}


	$tdataprescripcionautomatica[".NCSearch"] = true;



$tdataprescripcionautomatica[".shortTableName"] = "prescripcionautomatica";
$tdataprescripcionautomatica[".nSecOptions"] = 0;

$tdataprescripcionautomatica[".mainTableOwnerID"] = "";
$tdataprescripcionautomatica[".entityType"] = 1;
$tdataprescripcionautomatica[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprescripcionautomatica[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprescripcionautomatica[".showAddInPopup"] = false;

$tdataprescripcionautomatica[".showEditInPopup"] = false;

$tdataprescripcionautomatica[".showViewInPopup"] = false;

$tdataprescripcionautomatica[".listAjax"] = false;
//	temporary
//$tdataprescripcionautomatica[".listAjax"] = false;

	$tdataprescripcionautomatica[".audit"] = true;

	$tdataprescripcionautomatica[".locking"] = false;


$pages = $tdataprescripcionautomatica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprescripcionautomatica[".edit"] = true;
	$tdataprescripcionautomatica[".afterEditAction"] = 1;
	$tdataprescripcionautomatica[".closePopupAfterEdit"] = 1;
	$tdataprescripcionautomatica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprescripcionautomatica[".add"] = true;
$tdataprescripcionautomatica[".afterAddAction"] = 1;
$tdataprescripcionautomatica[".closePopupAfterAdd"] = 1;
$tdataprescripcionautomatica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprescripcionautomatica[".list"] = true;
}



$tdataprescripcionautomatica[".strSortControlSettingsJSON"] = "";

$tdataprescripcionautomatica[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataprescripcionautomatica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprescripcionautomatica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprescripcionautomatica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprescripcionautomatica[".printFriendly"] = true;
}



$tdataprescripcionautomatica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprescripcionautomatica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprescripcionautomatica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprescripcionautomatica[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataprescripcionautomatica[".ajaxCodeSnippetAdded"] = false;

$tdataprescripcionautomatica[".buttonsAdded"] = false;

$tdataprescripcionautomatica[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprescripcionautomatica[".isUseTimeForSearch"] = false;


$tdataprescripcionautomatica[".badgeColor"] = "DB7093";


$tdataprescripcionautomatica[".allSearchFields"] = array();
$tdataprescripcionautomatica[".filterFields"] = array();
$tdataprescripcionautomatica[".requiredSearchFields"] = array();

$tdataprescripcionautomatica[".googleLikeFields"] = array();
$tdataprescripcionautomatica[".googleLikeFields"][] = "ProcesoId";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Numero";
$tdataprescripcionautomatica[".googleLikeFields"][] = "FechaPrescripcion";
$tdataprescripcionautomatica[".googleLikeFields"][] = "SeccionalId";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Despacho";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Codificador";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Sancionado";
$tdataprescripcionautomatica[".googleLikeFields"][] = "SancionadoDocumento";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Masculino";
$tdataprescripcionautomatica[".googleLikeFields"][] = "OficioId";
$tdataprescripcionautomatica[".googleLikeFields"][] = "AlertaTipo";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Oficio";
$tdataprescripcionautomatica[".googleLikeFields"][] = "Sigobius";



$tdataprescripcionautomatica[".tableType"] = "list";

$tdataprescripcionautomatica[".printerPageOrientation"] = 0;
$tdataprescripcionautomatica[".nPrinterPageScale"] = 100;

$tdataprescripcionautomatica[".nPrinterSplitRecords"] = 40;

$tdataprescripcionautomatica[".geocodingEnabled"] = false;




$tdataprescripcionautomatica[".isDisplayLoading"] = true;

$tdataprescripcionautomatica[".isResizeColumns"] = true;





$tdataprescripcionautomatica[".pageSize"] = 20;

$tdataprescripcionautomatica[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Sancionado";
$tdataprescripcionautomatica[".strOrderBy"] = $tstrOrderBy;

$tdataprescripcionautomatica[".orderindexes"] = array();


$tdataprescripcionautomatica[".sqlHead"] = "        SELECT ProcesosView1.ProcesoId,  								ProcesosView1.Numero,  								ProcesosView1.FechaPrescripcion,                 ProcesosView1.SeccionalId,   								Abogados.Despacho,   								Abogados.Codificador,   								ProcesosView1.Sancionado,                  ProcesosView1.SancionadoDocumento,                  ProcesosView1.Masculino,                  AlertasOficios.OficioId,                  AlertasTipos.AlertaTipo,                  Oficios.Oficio,                  Oficios.Sigobius";
$tdataprescripcionautomatica[".sqlFrom"] = "FROM Abogados               INNER JOIN ProcesosView1               INNER JOIN AlertasTipos               INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId               INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId               INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId               LEFT OUTER JOIN Correspondencias               INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$tdataprescripcionautomatica[".sqlWhereExpr"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  							AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$tdataprescripcionautomatica[".sqlTail"] = "";

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
$tdataprescripcionautomatica[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprescripcionautomatica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprescripcionautomatica[".arrGroupsPerPage"] = $arrGPP;

$tdataprescripcionautomatica[".highlightSearchResults"] = true;

$tableKeysprescripcionautomatica = array();
$tableKeysprescripcionautomatica[] = "ProcesoId";
$tdataprescripcionautomatica[".Keys"] = $tableKeysprescripcionautomatica;


$tdataprescripcionautomatica[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","ProcesoId");
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


	$tdataprescripcionautomatica["ProcesoId"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "ProcesoId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.Numero";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataprescripcionautomatica["Numero"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Numero";
//	FechaPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaPrescripcion";
	$fdata["GoodName"] = "FechaPrescripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","FechaPrescripcion");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaPrescripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.FechaPrescripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataprescripcionautomatica["FechaPrescripcion"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "FechaPrescripcion";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","SeccionalId");
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


	$tdataprescripcionautomatica["SeccionalId"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "SeccionalId";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Despacho");
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


	$tdataprescripcionautomatica["Despacho"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Despacho";
//	Codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Codificador";
	$fdata["GoodName"] = "Codificador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Codificador");
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


	$tdataprescripcionautomatica["Codificador"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Codificador";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Sancionado");
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


	$tdataprescripcionautomatica["Sancionado"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","SancionadoDocumento");
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


	$tdataprescripcionautomatica["SancionadoDocumento"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "SancionadoDocumento";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Masculino");
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


	$tdataprescripcionautomatica["Masculino"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Masculino";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","OficioId");
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


	$tdataprescripcionautomatica["OficioId"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "OficioId";
//	AlertaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AlertaTipo";
	$fdata["GoodName"] = "AlertaTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","AlertaTipo");
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


	$tdataprescripcionautomatica["AlertaTipo"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "AlertaTipo";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Oficio");
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


	$tdataprescripcionautomatica["Oficio"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Oficio";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PrescripcionAutomatica","Sigobius");
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


	$tdataprescripcionautomatica["Sigobius"] = $fdata;
		$tdataprescripcionautomatica[".searchableFields"][] = "Sigobius";


$tables_data["PrescripcionAutomatica"]=&$tdataprescripcionautomatica;
$field_labels["PrescripcionAutomatica"] = &$fieldLabelsprescripcionautomatica;
$fieldToolTips["PrescripcionAutomatica"] = &$fieldToolTipsprescripcionautomatica;
$placeHolders["PrescripcionAutomatica"] = &$placeHoldersprescripcionautomatica;
$page_titles["PrescripcionAutomatica"] = &$pageTitlesprescripcionautomatica;


changeTextControlsToDate( "PrescripcionAutomatica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["PrescripcionAutomatica"] = array();
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["PrescripcionAutomatica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PrescripcionAutomatica"][$dIndex]["detailKeys"][]="ProcesoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["PrescripcionAutomatica"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PrescripcionAutomatica"][0] = $masterParams;
				$masterTablesData["PrescripcionAutomatica"][0]["masterKeys"] = array();
	$masterTablesData["PrescripcionAutomatica"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["PrescripcionAutomatica"][0]["detailKeys"] = array();
	$masterTablesData["PrescripcionAutomatica"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_prescripcionautomatica()
{
$proto0=array();
$proto0["m_strHead"] = "        SELECT";
$proto0["m_strFieldList"] = "ProcesosView1.ProcesoId,  								ProcesosView1.Numero,  								ProcesosView1.FechaPrescripcion,                 ProcesosView1.SeccionalId,   								Abogados.Despacho,   								Abogados.Codificador,   								ProcesosView1.Sancionado,                  ProcesosView1.SancionadoDocumento,                  ProcesosView1.Masculino,                  AlertasOficios.OficioId,                  AlertasTipos.AlertaTipo,                  Oficios.Oficio,                  Oficios.Sigobius";
$proto0["m_strFrom"] = "FROM Abogados               INNER JOIN ProcesosView1               INNER JOIN AlertasTipos               INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId               INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId               INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId               LEFT OUTER JOIN Correspondencias               INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  							AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$proto0["m_strOrderBy"] = "ORDER BY Sancionado";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  							AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)               AND (ProcesosView1.EstadoId = 2)               AND (ProcesosView1.CarteraTipoId IN(1, 2, 3, 4, 5))               AND (AlertasTipos.AlertaTipoId = 1)               AND (Abogados.Activo = 1)  							AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 0"
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
$proto6["m_srcTableName"] = "PrescripcionAutomatica";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Numero"
));

$proto8["m_sql"] = "ProcesosView1.Numero";
$proto8["m_srcTableName"] = "PrescripcionAutomatica";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.FechaPrescripcion"
));

$proto10["m_sql"] = "ProcesosView1.FechaPrescripcion";
$proto10["m_srcTableName"] = "PrescripcionAutomatica";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SeccionalId"
));

$proto12["m_sql"] = "ProcesosView1.SeccionalId";
$proto12["m_srcTableName"] = "PrescripcionAutomatica";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto14["m_sql"] = "Abogados.Despacho";
$proto14["m_srcTableName"] = "PrescripcionAutomatica";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto16["m_sql"] = "Abogados.Codificador";
$proto16["m_srcTableName"] = "PrescripcionAutomatica";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto18["m_sql"] = "ProcesosView1.Sancionado";
$proto18["m_srcTableName"] = "PrescripcionAutomatica";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto20["m_sql"] = "ProcesosView1.SancionadoDocumento";
$proto20["m_srcTableName"] = "PrescripcionAutomatica";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto22["m_sql"] = "ProcesosView1.Masculino";
$proto22["m_srcTableName"] = "PrescripcionAutomatica";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto24["m_sql"] = "AlertasOficios.OficioId";
$proto24["m_srcTableName"] = "PrescripcionAutomatica";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto26["m_sql"] = "AlertasTipos.AlertaTipo";
$proto26["m_srcTableName"] = "PrescripcionAutomatica";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto28["m_sql"] = "Oficios.Oficio";
$proto28["m_srcTableName"] = "PrescripcionAutomatica";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto30["m_sql"] = "Oficios.Sigobius";
$proto30["m_srcTableName"] = "PrescripcionAutomatica";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.Abogados";
$proto33["m_srcTableName"] = "PrescripcionAutomatica";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "AbogadoId";
$proto33["m_columns"][] = "Abogado";
$proto33["m_columns"][] = "Documento";
$proto33["m_columns"][] = "Tarjeta";
$proto33["m_columns"][] = "Direccion";
$proto33["m_columns"][] = "Telefonos";
$proto33["m_columns"][] = "Celular";
$proto33["m_columns"][] = "Email";
$proto33["m_columns"][] = "SeccionalId";
$proto33["m_columns"][] = "Masculino";
$proto33["m_columns"][] = "Activo";
$proto33["m_columns"][] = "Despacho";
$proto33["m_columns"][] = "Codificador";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "Abogados";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "PrescripcionAutomatica";
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
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "dbo.ProcesosView1";
$proto37["m_srcTableName"] = "PrescripcionAutomatica";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ProcesoId";
$proto37["m_columns"][] = "Fecha";
$proto37["m_columns"][] = "Numero";
$proto37["m_columns"][] = "Obligacion";
$proto37["m_columns"][] = "Costas";
$proto37["m_columns"][] = "Intereses";
$proto37["m_columns"][] = "Folios";
$proto37["m_columns"][] = "Observaciones";
$proto37["m_columns"][] = "Seccional";
$proto37["m_columns"][] = "Ciudad";
$proto37["m_columns"][] = "Abogado";
$proto37["m_columns"][] = "Masculino";
$proto37["m_columns"][] = "Despacho";
$proto37["m_columns"][] = "Concepto";
$proto37["m_columns"][] = "Motivo";
$proto37["m_columns"][] = "Estado";
$proto37["m_columns"][] = "Calificacion";
$proto37["m_columns"][] = "PiePagina";
$proto37["m_columns"][] = "CiudadDepartamento";
$proto37["m_columns"][] = "Sigobius";
$proto37["m_columns"][] = "Cuotas";
$proto37["m_columns"][] = "Abono";
$proto37["m_columns"][] = "Inicio";
$proto37["m_columns"][] = "VlrCuota";
$proto37["m_columns"][] = "VlrIntereses";
$proto37["m_columns"][] = "Garantia";
$proto37["m_columns"][] = "Recaudo";
$proto37["m_columns"][] = "Sancionado";
$proto37["m_columns"][] = "SancionadoDocumento";
$proto37["m_columns"][] = "SancionadoTipoDocumento";
$proto37["m_columns"][] = "SancionadoCiudad";
$proto37["m_columns"][] = "DespachoCiudad";
$proto37["m_columns"][] = "Providencia";
$proto37["m_columns"][] = "Ejecutoria";
$proto37["m_columns"][] = "Radicado";
$proto37["m_columns"][] = "Terminacion";
$proto37["m_columns"][] = "Liquidacion";
$proto37["m_columns"][] = "Dias";
$proto37["m_columns"][] = "Tipo";
$proto37["m_columns"][] = "Cantidad";
$proto37["m_columns"][] = "SancionadoMasculino";
$proto37["m_columns"][] = "SeccionalCorreo";
$proto37["m_columns"][] = "SeccionalDireccion";
$proto37["m_columns"][] = "SeccionalTelefonos";
$proto37["m_columns"][] = "Fallecimiento";
$proto37["m_columns"][] = "Notificacion";
$proto37["m_columns"][] = "SeccionalNit";
$proto37["m_columns"][] = "SeccionalId";
$proto37["m_columns"][] = "AbogadoId";
$proto37["m_columns"][] = "DespachoId";
$proto37["m_columns"][] = "SancionadoId";
$proto37["m_columns"][] = "ConceptoId";
$proto37["m_columns"][] = "NaturalezaId";
$proto37["m_columns"][] = "EstadoId";
$proto37["m_columns"][] = "EtapaId";
$proto37["m_columns"][] = "CalificacionId";
$proto37["m_columns"][] = "MotivoId";
$proto37["m_columns"][] = "ProcesoObservaciones";
$proto37["m_columns"][] = "Remisorio";
$proto37["m_columns"][] = "Acuerdo";
$proto37["m_columns"][] = "Incumplimiento";
$proto37["m_columns"][] = "Suspension";
$proto37["m_columns"][] = "Traslado";
$proto37["m_columns"][] = "Error";
$proto37["m_columns"][] = "Actuacion";
$proto37["m_columns"][] = "TipoDocumentoId";
$proto37["m_columns"][] = "Juridica";
$proto37["m_columns"][] = "SancionadoEmail";
$proto37["m_columns"][] = "SancionadoCelular";
$proto37["m_columns"][] = "CarteraTipoId";
$proto37["m_columns"][] = "ConceptoAbogado";
$proto37["m_columns"][] = "LiquidaIntereses";
$proto37["m_columns"][] = "Saldo";
$proto37["m_columns"][] = "Prescripcion";
$proto37["m_columns"][] = "FechaPrescripcion";
$proto37["m_columns"][] = "ObligacionInicial";
$proto37["m_columns"][] = "CostasInicial";
$proto37["m_columns"][] = "InteresesInicial";
$proto37["m_columns"][] = "Minjusticia_Def";
$proto37["m_columns"][] = "MinJusticia";
$proto37["m_columns"][] = "ActuacionId";
$proto37["m_columns"][] = "NotificacionValidada";
$proto37["m_columns"][] = "Validado";
$proto37["m_columns"][] = "Documento";
$proto37["m_columns"][] = "Seleccionado";
$proto37["m_columns"][] = "CompetenciaId";
$proto37["m_columns"][] = "SeleccionadoPor";
$proto37["m_columns"][] = "RadicadoNumero";
$proto37["m_columns"][] = "MinjusticiaId";
$proto37["m_columns"][] = "Contador";
$proto37["m_columns"][] = "ContadorCargo";
$proto37["m_columns"][] = "Director";
$proto37["m_columns"][] = "DirectorCargo";
$proto37["m_columns"][] = "Etapa";
$proto37["m_columns"][] = "Persuasivo";
$proto37["m_columns"][] = "Plazo";
$proto37["m_columns"][] = "Mayor";
$proto37["m_columns"][] = "Revocatoria";
$proto37["m_columns"][] = "RecaudoTerminado";
$proto37["m_columns"][] = "Naturaleza";
$proto37["m_columns"][] = "TasaTipo";
$proto37["m_columns"][] = "CarteraTipo";
$proto37["m_columns"][] = "Prescrita";
$proto37["m_columns"][] = "TrasladoCartera";
$proto37["m_columns"][] = "CarteraTipoIdOrigen";
$proto37["m_columns"][] = "TrasladoConcepto";
$proto37["m_columns"][] = "ConceptoIdOrigen";
$proto37["m_columns"][] = "CarteraTipoOrigen";
$proto37["m_columns"][] = "ConceptoOrigen";
$proto37["m_columns"][] = "ChequeoId";
$proto37["m_columns"][] = "VlrCostas";
$proto37["m_columns"][] = "VlrInteresesPlazo";
$proto37["m_columns"][] = "AbogadoDocumento";
$proto37["m_columns"][] = "DespachoCorreo";
$proto37["m_columns"][] = "DespachoDireccion";
$proto37["m_columns"][] = "DespachoJuez";
$proto37["m_columns"][] = "DespachoTelefonos";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN ProcesosView1";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "PrescripcionAutomatica";
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
	"m_sql" => "INNER JOIN AlertasTipos"
));

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN AlertasTipos";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "PrescripcionAutomatica";
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
	"m_sql" => "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId"
));

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.FechaPrescripcion <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "PrescripcionAutomatica";
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
	"m_sql" => "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId"
));

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "PrescripcionAutomatica";
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
	"m_sql" => "INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId"
));

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "PrescripcionAutomatica";
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
	"m_sql" => "LEFT OUTER JOIN Correspondencias"
));

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN Correspondencias";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "PrescripcionAutomatica";
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
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId"
));

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "PrescripcionAutomatica";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto64=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.ProcesoId"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SeccionalId"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.CarteraTipoId"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Fecha"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.FechaPrescripcion"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Numero"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto94=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Sancionado"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 0;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PrescripcionAutomatica";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_prescripcionautomatica = createSqlQuery_prescripcionautomatica();


	
		;

													

$tdataprescripcionautomatica[".sqlquery"] = $queryData_prescripcionautomatica;



$tdataprescripcionautomatica[".hasEvents"] = false;

?>