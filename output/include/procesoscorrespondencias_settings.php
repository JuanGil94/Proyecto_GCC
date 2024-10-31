<?php
$tdataprocesoscorrespondencias = array();
$tdataprocesoscorrespondencias[".searchableFields"] = array();
$tdataprocesoscorrespondencias[".ShortName"] = "procesoscorrespondencias";
$tdataprocesoscorrespondencias[".OwnerID"] = "";
$tdataprocesoscorrespondencias[".OriginalTable"] = "dbo.Procesos";


$tdataprocesoscorrespondencias[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprocesoscorrespondencias[".originalPagesByType"] = $tdataprocesoscorrespondencias[".pagesByType"];
$tdataprocesoscorrespondencias[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprocesoscorrespondencias[".originalPages"] = $tdataprocesoscorrespondencias[".pages"];
$tdataprocesoscorrespondencias[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprocesoscorrespondencias[".originalDefaultPages"] = $tdataprocesoscorrespondencias[".defaultPages"];

//	field labels
$fieldLabelsprocesoscorrespondencias = array();
$fieldToolTipsprocesoscorrespondencias = array();
$pageTitlesprocesoscorrespondencias = array();
$placeHoldersprocesoscorrespondencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesoscorrespondencias["Spanish"] = array();
	$fieldToolTipsprocesoscorrespondencias["Spanish"] = array();
	$placeHoldersprocesoscorrespondencias["Spanish"] = array();
	$pageTitlesprocesoscorrespondencias["Spanish"] = array();
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Obligacion"] = "Obli.Saldo";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Costas"] = "Cost.Saldo";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Costas"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Costas"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Intereses"] = "Inte.Saldo";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Intereses"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Numero"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Numero"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["N_Minjusticia"] = "N.Minjusticia";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["N_Minjusticia"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["N_Minjusticia"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Deudor"] = "Deudor";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Deudor"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Deudor"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Solidario"] = "Solidario";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Solidario"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Solidario"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["T_Documento"] = "T.Documento";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["T_Documento"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["T_Documento"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Documento"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Documento"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Concepto"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Concepto"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["No_Radicado_Origen"] = "No.Radicado Origen";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["No_Radicado_Origen"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["No_Radicado_Origen"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Competencia"] = "Competencia";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Competencia"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Competencia"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["F_Creaci_n"] = "F.Creación";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["F_Creaci_n"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["F_Creaci_n"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["F_Providencia"] = "F.Providencia";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["F_Providencia"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["F_Providencia"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["F_Ejecutoria"] = "F.Ejecutoria";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["F_Ejecutoria"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["F_Ejecutoria"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["F_Acuerdo_Pago"] = "F.Acuerdo Pago";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["F_Acuerdo_Pago"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["F_Acuerdo_Pago"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Estado"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Estado"] = "";
	$fieldLabelsprocesoscorrespondencias["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesoscorrespondencias["Spanish"]["Abogado"] = "";
	$placeHoldersprocesoscorrespondencias["Spanish"]["Abogado"] = "";
	if (count($fieldToolTipsprocesoscorrespondencias["Spanish"]))
		$tdataprocesoscorrespondencias[".isUseToolTips"] = true;
}


	$tdataprocesoscorrespondencias[".NCSearch"] = true;



$tdataprocesoscorrespondencias[".shortTableName"] = "procesoscorrespondencias";
$tdataprocesoscorrespondencias[".nSecOptions"] = 0;

$tdataprocesoscorrespondencias[".mainTableOwnerID"] = "";
$tdataprocesoscorrespondencias[".entityType"] = 1;
$tdataprocesoscorrespondencias[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesoscorrespondencias[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprocesoscorrespondencias[".showAddInPopup"] = false;

$tdataprocesoscorrespondencias[".showEditInPopup"] = false;

$tdataprocesoscorrespondencias[".showViewInPopup"] = false;

$tdataprocesoscorrespondencias[".listAjax"] = false;
//	temporary
//$tdataprocesoscorrespondencias[".listAjax"] = false;

	$tdataprocesoscorrespondencias[".audit"] = true;

	$tdataprocesoscorrespondencias[".locking"] = false;


$pages = $tdataprocesoscorrespondencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesoscorrespondencias[".edit"] = true;
	$tdataprocesoscorrespondencias[".afterEditAction"] = 1;
	$tdataprocesoscorrespondencias[".closePopupAfterEdit"] = 1;
	$tdataprocesoscorrespondencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesoscorrespondencias[".add"] = true;
$tdataprocesoscorrespondencias[".afterAddAction"] = 1;
$tdataprocesoscorrespondencias[".closePopupAfterAdd"] = 1;
$tdataprocesoscorrespondencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesoscorrespondencias[".list"] = true;
}



$tdataprocesoscorrespondencias[".strSortControlSettingsJSON"] = "";

$tdataprocesoscorrespondencias[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataprocesoscorrespondencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesoscorrespondencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesoscorrespondencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesoscorrespondencias[".printFriendly"] = true;
}



$tdataprocesoscorrespondencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesoscorrespondencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesoscorrespondencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesoscorrespondencias[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataprocesoscorrespondencias[".ajaxCodeSnippetAdded"] = false;

$tdataprocesoscorrespondencias[".buttonsAdded"] = false;

$tdataprocesoscorrespondencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesoscorrespondencias[".isUseTimeForSearch"] = false;


$tdataprocesoscorrespondencias[".badgeColor"] = "DC143C";


$tdataprocesoscorrespondencias[".allSearchFields"] = array();
$tdataprocesoscorrespondencias[".filterFields"] = array();
$tdataprocesoscorrespondencias[".requiredSearchFields"] = array();

$tdataprocesoscorrespondencias[".googleLikeFields"] = array();
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "N.Minjusticia";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Deudor";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Solidario";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "T.Documento";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Documento";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Concepto";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Numero";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "No.Radicado Origen";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Competencia";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "F.Creación";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "F.Providencia";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "F.Ejecutoria";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Obligacion";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Costas";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Intereses";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "F.Acuerdo Pago";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Estado";
$tdataprocesoscorrespondencias[".googleLikeFields"][] = "Abogado";



$tdataprocesoscorrespondencias[".tableType"] = "list";

$tdataprocesoscorrespondencias[".printerPageOrientation"] = 0;
$tdataprocesoscorrespondencias[".nPrinterPageScale"] = 100;

$tdataprocesoscorrespondencias[".nPrinterSplitRecords"] = 40;

$tdataprocesoscorrespondencias[".geocodingEnabled"] = false;




$tdataprocesoscorrespondencias[".isDisplayLoading"] = true;

$tdataprocesoscorrespondencias[".isResizeColumns"] = true;





$tdataprocesoscorrespondencias[".pageSize"] = 20;

$tdataprocesoscorrespondencias[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY P.Numero";
$tdataprocesoscorrespondencias[".strOrderBy"] = $tstrOrderBy;

$tdataprocesoscorrespondencias[".orderindexes"] = array();
	$tdataprocesoscorrespondencias[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "P.Numero");



$tdataprocesoscorrespondencias[".sqlHead"] = "SELECT P.NumeroMinjusticia AS [N.Minjusticia],  S.Sancionado AS Deudor,  ' ' AS Solidario,  TD.TipoDocumento AS [T.Documento],  S.Documento AS Documento,  C.Concepto AS Concepto,  P.Numero AS Numero,  P.Radicado AS [No.Radicado Origen],  SE.Seccional AS Competencia,  P.Fecha AS [F.Creación],  P.Providencia AS [F.Providencia],  P.Ejecutoria AS [F.Ejecutoria],  P.Obligacion AS Obligacion,  P.Costas AS Costas,  P.Intereses AS Intereses,  P.Acuerdo AS [F.Acuerdo Pago],  E.Estado AS Estado,  A.Abogado AS Abogado";
$tdataprocesoscorrespondencias[".sqlFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId  INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$tdataprocesoscorrespondencias[".sqlWhereExpr"] = "(NOT ((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))) AND (P.EstadoId=2 OR P.EstadoId=2)AND (P.CarteraTipoId = 1) AND ((P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))) AND ((P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL))";
$tdataprocesoscorrespondencias[".sqlTail"] = "";

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
$tdataprocesoscorrespondencias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesoscorrespondencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesoscorrespondencias[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesoscorrespondencias[".highlightSearchResults"] = true;

$tableKeysprocesoscorrespondencias = array();
$tableKeysprocesoscorrespondencias[] = "Numero";
$tdataprocesoscorrespondencias[".Keys"] = $tableKeysprocesoscorrespondencias;


$tdataprocesoscorrespondencias[".hideMobileList"] = array();




//	N.Minjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "N.Minjusticia";
	$fdata["GoodName"] = "N_Minjusticia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","N_Minjusticia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NumeroMinjusticia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.NumeroMinjusticia";

	
	
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


	$tdataprocesoscorrespondencias["N.Minjusticia"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "N.Minjusticia";
//	Deudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Deudor";
	$fdata["GoodName"] = "Deudor";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Deudor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Sancionado";

	
	
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


	$tdataprocesoscorrespondencias["Deudor"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Deudor";
//	Solidario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Solidario";
	$fdata["GoodName"] = "Solidario";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Solidario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Solidario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "' '";

	
	
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


	$tdataprocesoscorrespondencias["Solidario"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Solidario";
//	T.Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "T.Documento";
	$fdata["GoodName"] = "T_Documento";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","T_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDocumento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TD.TipoDocumento";

	
	
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


	$tdataprocesoscorrespondencias["T.Documento"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "T.Documento";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Documento";

	
	
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


	$tdataprocesoscorrespondencias["Documento"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Documento";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Concepto";

	
	
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


	$tdataprocesoscorrespondencias["Concepto"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Numero";

	
	
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


	$tdataprocesoscorrespondencias["Numero"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Numero";
//	No.Radicado Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "No.Radicado Origen";
	$fdata["GoodName"] = "No_Radicado_Origen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","No_Radicado_Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Radicado";

	
	
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


	$tdataprocesoscorrespondencias["No.Radicado Origen"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "No.Radicado Origen";
//	Competencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Competencia";
	$fdata["GoodName"] = "Competencia";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Competencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SE.Seccional";

	
	
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


	$tdataprocesoscorrespondencias["Competencia"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Competencia";
//	F.Creación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "F.Creación";
	$fdata["GoodName"] = "F_Creaci_n";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","F_Creaci_n");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Fecha";

	
	
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


	$tdataprocesoscorrespondencias["F.Creación"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "F.Creación";
//	F.Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "F.Providencia";
	$fdata["GoodName"] = "F_Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","F_Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Providencia";

	
	
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


	$tdataprocesoscorrespondencias["F.Providencia"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "F.Providencia";
//	F.Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "F.Ejecutoria";
	$fdata["GoodName"] = "F_Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","F_Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Ejecutoria";

	
	
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


	$tdataprocesoscorrespondencias["F.Ejecutoria"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "F.Ejecutoria";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=19";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataprocesoscorrespondencias["Obligacion"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataprocesoscorrespondencias["Costas"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Costas";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataprocesoscorrespondencias["Intereses"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Intereses";
//	F.Acuerdo Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "F.Acuerdo Pago";
	$fdata["GoodName"] = "F_Acuerdo_Pago";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","F_Acuerdo_Pago");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Acuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Acuerdo";

	
	
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


	$tdataprocesoscorrespondencias["F.Acuerdo Pago"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "F.Acuerdo Pago";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E.Estado";

	
	
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


	$tdataprocesoscorrespondencias["Estado"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Estado";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosCorrespondencias","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.Abogado";

	
	
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


	$tdataprocesoscorrespondencias["Abogado"] = $fdata;
		$tdataprocesoscorrespondencias[".searchableFields"][] = "Abogado";


$tables_data["dbo.ProcesosCorrespondencias"]=&$tdataprocesoscorrespondencias;
$field_labels["dbo_ProcesosCorrespondencias"] = &$fieldLabelsprocesoscorrespondencias;
$fieldToolTips["dbo_ProcesosCorrespondencias"] = &$fieldToolTipsprocesoscorrespondencias;
$placeHolders["dbo_ProcesosCorrespondencias"] = &$placeHoldersprocesoscorrespondencias;
$page_titles["dbo_ProcesosCorrespondencias"] = &$pageTitlesprocesoscorrespondencias;


changeTextControlsToDate( "dbo.ProcesosCorrespondencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosCorrespondencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosCorrespondencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesoscorrespondencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "P.NumeroMinjusticia AS [N.Minjusticia],  S.Sancionado AS Deudor,  ' ' AS Solidario,  TD.TipoDocumento AS [T.Documento],  S.Documento AS Documento,  C.Concepto AS Concepto,  P.Numero AS Numero,  P.Radicado AS [No.Radicado Origen],  SE.Seccional AS Competencia,  P.Fecha AS [F.Creación],  P.Providencia AS [F.Providencia],  P.Ejecutoria AS [F.Ejecutoria],  P.Obligacion AS Obligacion,  P.Costas AS Costas,  P.Intereses AS Intereses,  P.Acuerdo AS [F.Acuerdo Pago],  E.Estado AS Estado,  A.Abogado AS Abogado";
$proto0["m_strFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId  INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$proto0["m_strWhere"] = "(NOT ((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))) AND (P.EstadoId=2 OR P.EstadoId=2)AND (P.CarteraTipoId = 1) AND ((P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))) AND ((P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL))";
$proto0["m_strOrderBy"] = "ORDER BY P.Numero";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(NOT ((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))) AND (P.EstadoId=2 OR P.EstadoId=2)AND (P.CarteraTipoId = 1) AND ((P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))) AND ((P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(NOT ((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))) AND (P.EstadoId=2 OR P.EstadoId=2)AND (P.CarteraTipoId = 1) AND ((P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))) AND ((P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "NOT ((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "((6 = P.EstadoId) AND (P.EstadoId IS NOT NULL))"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "NOT";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "P.EstadoId=2 OR P.EstadoId=2";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "P.EstadoId=2 OR P.EstadoId=2"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "P.EstadoId=2";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=2";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "P.EstadoId=2";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=2";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "P.CarteraTipoId = 1";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 1";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "(P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))";
$proto14["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.SeccionalId = :session.SeccionalUser) OR ((P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL))"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
						$proto16=array();
$proto16["m_sql"] = "P.SeccionalId = :session.SeccionalUser";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= :session.SeccionalUser";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto14["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "(P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL)";
$proto18["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.SeccionalId IS NULL) AND (:session.SeccionalUser IS NULL)"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
						$proto20=array();
$proto20["m_sql"] = "P.SeccionalId IS NULL";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "IS NULL";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = true;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto18["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = ":session.SeccionalUser IS NULL";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session.SeccionalUser"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "IS NULL";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = true;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto18["m_contained"][]=$obj;
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto14["m_contained"][]=$obj;
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "(P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL)";
$proto24["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.SeleccionadoPor = ':session.UserNameF') OR ((P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)) OR (P.SeleccionadoPor IS NULL)"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
						$proto26=array();
$proto26["m_sql"] = "P.SeleccionadoPor = ':session.UserNameF'";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeleccionadoPor",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= ':session.UserNameF'";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = true;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto24["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "(P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)";
$proto28["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.SeleccionadoPor IS NULL) AND (':session.UserNameF' IS NULL)"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
						$proto30=array();
$proto30["m_sql"] = "P.SeleccionadoPor IS NULL";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeleccionadoPor",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "IS NULL";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = true;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto28["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "':session.UserNameF' IS NULL";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "':session.UserNameF'"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "IS NULL";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = true;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

			$proto28["m_contained"][]=$obj;
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = true;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto24["m_contained"][]=$obj;
						$proto34=array();
$proto34["m_sql"] = "P.SeleccionadoPor IS NULL";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeleccionadoPor",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "IS NULL";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = true;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

			$proto24["m_contained"][]=$obj;
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = true;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroMinjusticia",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto38["m_sql"] = "P.NumeroMinjusticia";
$proto38["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "N.Minjusticia";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto40["m_sql"] = "S.Sancionado";
$proto40["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Deudor";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto42["m_sql"] = "' '";
$proto42["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "Solidario";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumento",
	"m_strTable" => "TD",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto44["m_sql"] = "TD.TipoDocumento";
$proto44["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "T.Documento";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto46["m_sql"] = "S.Documento";
$proto46["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "Documento";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto48["m_sql"] = "C.Concepto";
$proto48["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "Concepto";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto50["m_sql"] = "P.Numero";
$proto50["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "Numero";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto52["m_sql"] = "P.Radicado";
$proto52["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "No.Radicado Origen";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "SE",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto54["m_sql"] = "SE.Seccional";
$proto54["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "Competencia";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto56["m_sql"] = "P.Fecha";
$proto56["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "F.Creación";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto58["m_sql"] = "P.Providencia";
$proto58["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "F.Providencia";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto60["m_sql"] = "P.Ejecutoria";
$proto60["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "F.Ejecutoria";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto62["m_sql"] = "P.Obligacion";
$proto62["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "Obligacion";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto64["m_sql"] = "P.Costas";
$proto64["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "Costas";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto66["m_sql"] = "P.Intereses";
$proto66["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "Intereses";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto68["m_sql"] = "P.Acuerdo";
$proto68["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "F.Acuerdo Pago";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "E",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto70["m_sql"] = "E.Estado";
$proto70["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "Estado";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto72["m_sql"] = "A.Abogado";
$proto72["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "Abogado";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "dbo.Procesos";
$proto75["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "ProcesoId";
$proto75["m_columns"][] = "SeccionalId";
$proto75["m_columns"][] = "AbogadoId";
$proto75["m_columns"][] = "Fecha";
$proto75["m_columns"][] = "Numero";
$proto75["m_columns"][] = "DespachoId";
$proto75["m_columns"][] = "SancionadoId";
$proto75["m_columns"][] = "Providencia";
$proto75["m_columns"][] = "Ejecutoria";
$proto75["m_columns"][] = "ConceptoId";
$proto75["m_columns"][] = "EstadoId";
$proto75["m_columns"][] = "EtapaId";
$proto75["m_columns"][] = "Folios";
$proto75["m_columns"][] = "Tipo";
$proto75["m_columns"][] = "Cantidad";
$proto75["m_columns"][] = "Obligacion";
$proto75["m_columns"][] = "Costas";
$proto75["m_columns"][] = "Liquidacion";
$proto75["m_columns"][] = "Dias";
$proto75["m_columns"][] = "Intereses";
$proto75["m_columns"][] = "Recaudo";
$proto75["m_columns"][] = "CalificacionId";
$proto75["m_columns"][] = "Terminacion";
$proto75["m_columns"][] = "MotivoId";
$proto75["m_columns"][] = "Observaciones";
$proto75["m_columns"][] = "Cuotas";
$proto75["m_columns"][] = "Abono";
$proto75["m_columns"][] = "Inicio";
$proto75["m_columns"][] = "VlrCuota";
$proto75["m_columns"][] = "VlrIntereses";
$proto75["m_columns"][] = "Garantia";
$proto75["m_columns"][] = "Radicado";
$proto75["m_columns"][] = "Remisorio";
$proto75["m_columns"][] = "Acuerdo";
$proto75["m_columns"][] = "Incumplimiento";
$proto75["m_columns"][] = "Notificacion";
$proto75["m_columns"][] = "Suspension";
$proto75["m_columns"][] = "Traslado";
$proto75["m_columns"][] = "Error";
$proto75["m_columns"][] = "CarteraTipoId";
$proto75["m_columns"][] = "ConceptoAbogado";
$proto75["m_columns"][] = "Origen";
$proto75["m_columns"][] = "Carpeta";
$proto75["m_columns"][] = "ImportacionId";
$proto75["m_columns"][] = "ActuacionId";
$proto75["m_columns"][] = "ObligacionInicial";
$proto75["m_columns"][] = "CostasInicial";
$proto75["m_columns"][] = "InteresesInicial";
$proto75["m_columns"][] = "MinJusticia";
$proto75["m_columns"][] = "Revocatoria";
$proto75["m_columns"][] = "Mayor";
$proto75["m_columns"][] = "NotificacionValidada";
$proto75["m_columns"][] = "Validado";
$proto75["m_columns"][] = "Seleccionado";
$proto75["m_columns"][] = "CompetenciaId";
$proto75["m_columns"][] = "MinjusticiaId";
$proto75["m_columns"][] = "SeleccionadoPor";
$proto75["m_columns"][] = "Subsanar";
$proto75["m_columns"][] = "NumeroMinjusticia";
$proto75["m_columns"][] = "ProcesoIdOrigen";
$proto75["m_columns"][] = "SeleccionadoFecha";
$proto75["m_columns"][] = "InteresesIniciales";
$proto75["m_columns"][] = "InteresesCalculados";
$proto75["m_columns"][] = "ProcesoIdDestino";
$proto75["m_columns"][] = "RecaudoMinjusticia";
$proto75["m_columns"][] = "RecaudoTerminado";
$proto75["m_columns"][] = "Persuasivo";
$proto75["m_columns"][] = "ObligacionCreacion";
$proto75["m_columns"][] = "InteresesCreacion";
$proto75["m_columns"][] = "CostasCreacion";
$proto75["m_columns"][] = "Plazo";
$proto75["m_columns"][] = "NaturalezaId";
$proto75["m_columns"][] = "TrasladoCartera";
$proto75["m_columns"][] = "CarteraTipoIdOrigen";
$proto75["m_columns"][] = "TrasladoConcepto";
$proto75["m_columns"][] = "ConceptoIdOrigen";
$proto75["m_columns"][] = "AutorizadoPlazo";
$proto75["m_columns"][] = "AutorizadoFecha";
$proto75["m_columns"][] = "AutorizadoPor";
$proto75["m_columns"][] = "Reliquidacion";
$proto75["m_columns"][] = "ChequeoId";
$proto75["m_columns"][] = "VlrCostas";
$proto75["m_columns"][] = "VlrInteresesPlazo";
$proto75["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "dbo.Procesos AS P";
$proto74["m_alias"] = "P";
$proto74["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_INNERJOIN";
			$proto79=array();
$proto79["m_strName"] = "dbo.Sancionados";
$proto79["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "SancionadoId";
$proto79["m_columns"][] = "Sancionado";
$proto79["m_columns"][] = "TipoDocumentoId";
$proto79["m_columns"][] = "Documento";
$proto79["m_columns"][] = "Email";
$proto79["m_columns"][] = "Celular";
$proto79["m_columns"][] = "Masculino";
$proto79["m_columns"][] = "Observaciones";
$proto79["m_columns"][] = "Fallecimiento";
$proto79["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId";
$proto78["m_alias"] = "S";
$proto78["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto80=array();
$proto80["m_sql"] = "S.SancionadoId = P.SancionadoId";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= P.SancionadoId";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_INNERJOIN";
			$proto83=array();
$proto83["m_strName"] = "dbo.TiposDocumentos";
$proto83["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "TipoDocumentoId";
$proto83["m_columns"][] = "Codigo";
$proto83["m_columns"][] = "TipoDocumento";
$proto83["m_columns"][] = "Juridica";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId";
$proto82["m_alias"] = "TD";
$proto82["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto84=array();
$proto84["m_sql"] = "TD.TipoDocumentoId = S.TipoDocumentoId";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "TD",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= S.TipoDocumentoId";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_INNERJOIN";
			$proto87=array();
$proto87["m_strName"] = "dbo.Conceptos";
$proto87["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "ConceptoId";
$proto87["m_columns"][] = "Concepto";
$proto87["m_columns"][] = "Activo";
$proto87["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId";
$proto86["m_alias"] = "C";
$proto86["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto88=array();
$proto88["m_sql"] = "C.ConceptoId = P.ConceptoId";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= P.ConceptoId";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_INNERJOIN";
			$proto91=array();
$proto91["m_strName"] = "dbo.Estados";
$proto91["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "EstadoId";
$proto91["m_columns"][] = "Estado";
$proto91["m_columns"][] = "Tipo";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId";
$proto90["m_alias"] = "E";
$proto90["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto92=array();
$proto92["m_sql"] = "E.EstadoId = P.EstadoId";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "E",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= P.EstadoId";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_INNERJOIN";
			$proto95=array();
$proto95["m_strName"] = "dbo.Abogados";
$proto95["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "AbogadoId";
$proto95["m_columns"][] = "Abogado";
$proto95["m_columns"][] = "Documento";
$proto95["m_columns"][] = "Tarjeta";
$proto95["m_columns"][] = "Direccion";
$proto95["m_columns"][] = "Telefonos";
$proto95["m_columns"][] = "Celular";
$proto95["m_columns"][] = "Email";
$proto95["m_columns"][] = "SeccionalId";
$proto95["m_columns"][] = "Masculino";
$proto95["m_columns"][] = "Activo";
$proto95["m_columns"][] = "Despacho";
$proto95["m_columns"][] = "Codificador";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$proto94["m_alias"] = "A";
$proto94["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto96=array();
$proto96["m_sql"] = "A.AbogadoId = P.AbogadoId";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= P.AbogadoId";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
												$proto98=array();
$proto98["m_link"] = "SQLL_INNERJOIN";
			$proto99=array();
$proto99["m_strName"] = "dbo.Seccionales";
$proto99["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "SeccionalId";
$proto99["m_columns"][] = "Codigo";
$proto99["m_columns"][] = "Seccional";
$proto99["m_columns"][] = "NIT";
$proto99["m_columns"][] = "CiudadId";
$proto99["m_columns"][] = "PiePagina";
$proto99["m_columns"][] = "Sigobius";
$proto99["m_columns"][] = "Email";
$proto99["m_columns"][] = "Direccion";
$proto99["m_columns"][] = "Telefonos";
$proto99["m_columns"][] = "PCI";
$proto99["m_columns"][] = "Contador";
$proto99["m_columns"][] = "ContadorCargo";
$proto99["m_columns"][] = "Director";
$proto99["m_columns"][] = "DirectorCargo";
$proto99["m_columns"][] = "Abogado";
$proto99["m_columns"][] = "AbogadoCargo";
$proto99["m_columns"][] = "Formato";
$proto99["m_columns"][] = "Corporacion";
$proto99["m_columns"][] = "Unidad";
$proto99["m_columns"][] = "Oficina";
$proto99["m_columns"][] = "Serie";
$proto99["m_columns"][] = "Subserie";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId";
$proto98["m_alias"] = "SE";
$proto98["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto100=array();
$proto100["m_sql"] = "SE.SeccionalId = P.SeccionalId";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "SE",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "= P.SeccionalId";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
												$proto102=array();
$proto102["m_link"] = "SQLL_INNERJOIN";
			$proto103=array();
$proto103["m_strName"] = "dbo.CarteraTipos";
$proto103["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "CarteraTipoId";
$proto103["m_columns"][] = "CarteraTipo";
$proto103["m_columns"][] = "Color";
$proto103["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$proto102["m_alias"] = "CA";
$proto102["m_srcTableName"] = "dbo.ProcesosCorrespondencias";
$proto104=array();
$proto104["m_sql"] = "CA.CarteraTipoId = P.CarteraTipoId";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CA",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= P.CarteraTipoId";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ProcesosCorrespondencias"
));

$proto106["m_column"]=$obj;
$proto106["m_bAsc"] = 1;
$proto106["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto106);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ProcesosCorrespondencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procesoscorrespondencias = createSqlQuery_procesoscorrespondencias();


	
		;

																		

$tdataprocesoscorrespondencias[".sqlquery"] = $queryData_procesoscorrespondencias;



include_once(getabspath("include/procesoscorrespondencias_events.php"));
$tdataprocesoscorrespondencias[".hasEvents"] = true;

?>