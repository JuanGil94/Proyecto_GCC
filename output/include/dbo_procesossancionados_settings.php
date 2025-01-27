<?php
$tdatadbo_procesossancionados = array();
$tdatadbo_procesossancionados[".searchableFields"] = array();
$tdatadbo_procesossancionados[".ShortName"] = "dbo_procesossancionados";
$tdatadbo_procesossancionados[".OwnerID"] = "";
$tdatadbo_procesossancionados[".OriginalTable"] = "dbo.Procesos";


$tdatadbo_procesossancionados[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_procesossancionados[".originalPagesByType"] = $tdatadbo_procesossancionados[".pagesByType"];
$tdatadbo_procesossancionados[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_procesossancionados[".originalPages"] = $tdatadbo_procesossancionados[".pages"];
$tdatadbo_procesossancionados[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_procesossancionados[".originalDefaultPages"] = $tdatadbo_procesossancionados[".defaultPages"];

//	field labels
$fieldLabelsdbo_procesossancionados = array();
$fieldToolTipsdbo_procesossancionados = array();
$pageTitlesdbo_procesossancionados = array();
$placeHoldersdbo_procesossancionados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_procesossancionados["Spanish"] = array();
	$fieldToolTipsdbo_procesossancionados["Spanish"] = array();
	$placeHoldersdbo_procesossancionados["Spanish"] = array();
	$pageTitlesdbo_procesossancionados["Spanish"] = array();
	$fieldLabelsdbo_procesossancionados["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Fecha"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Fecha"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Numero"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Numero"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Providencia"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Providencia"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Ejecutoria"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Terminacion"] = "F. Terminación";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Terminacion"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Terminacion"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Observaciones"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Observaciones"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Radicado"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Radicado"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Acuerdo"] = "Acuerdo";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Acuerdo"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Acuerdo"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Incumplimiento"] = "F.Incumplimiento";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Incumplimiento"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Incumplimiento"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Concepto"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Concepto"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Saldo"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Saldo"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Estado"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Estado"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Etapa"] = "Etapa";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Etapa"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Etapa"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Seccional"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Seccional"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["CarteraTipo"] = "Tipo de Cartera";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["CarteraTipo"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["CarteraTipo"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Abogado"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Abogado"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Despacho"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Despacho"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["SancionadoId"] = "Deudor";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["SancionadoId"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["SancionadoId"] = "";
	$fieldLabelsdbo_procesossancionados["Spanish"]["Email"] = "Email";
	$fieldToolTipsdbo_procesossancionados["Spanish"]["Email"] = "";
	$placeHoldersdbo_procesossancionados["Spanish"]["Email"] = "";
	if (count($fieldToolTipsdbo_procesossancionados["Spanish"]))
		$tdatadbo_procesossancionados[".isUseToolTips"] = true;
}


	$tdatadbo_procesossancionados[".NCSearch"] = true;



$tdatadbo_procesossancionados[".shortTableName"] = "dbo_procesossancionados";
$tdatadbo_procesossancionados[".nSecOptions"] = 0;

$tdatadbo_procesossancionados[".mainTableOwnerID"] = "";
$tdatadbo_procesossancionados[".entityType"] = 1;
$tdatadbo_procesossancionados[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_procesossancionados[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatadbo_procesossancionados[".showAddInPopup"] = false;

$tdatadbo_procesossancionados[".showEditInPopup"] = false;

$tdatadbo_procesossancionados[".showViewInPopup"] = false;

$tdatadbo_procesossancionados[".listAjax"] = false;
//	temporary
//$tdatadbo_procesossancionados[".listAjax"] = false;

	$tdatadbo_procesossancionados[".audit"] = true;

	$tdatadbo_procesossancionados[".locking"] = false;


$pages = $tdatadbo_procesossancionados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_procesossancionados[".edit"] = true;
	$tdatadbo_procesossancionados[".afterEditAction"] = 1;
	$tdatadbo_procesossancionados[".closePopupAfterEdit"] = 1;
	$tdatadbo_procesossancionados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_procesossancionados[".add"] = true;
$tdatadbo_procesossancionados[".afterAddAction"] = 1;
$tdatadbo_procesossancionados[".closePopupAfterAdd"] = 1;
$tdatadbo_procesossancionados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_procesossancionados[".list"] = true;
}



$tdatadbo_procesossancionados[".strSortControlSettingsJSON"] = "";

$tdatadbo_procesossancionados[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatadbo_procesossancionados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_procesossancionados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_procesossancionados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_procesossancionados[".printFriendly"] = true;
}



$tdatadbo_procesossancionados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_procesossancionados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_procesossancionados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_procesossancionados[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdatadbo_procesossancionados[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_procesossancionados[".buttonsAdded"] = false;

$tdatadbo_procesossancionados[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_procesossancionados[".isUseTimeForSearch"] = false;


$tdatadbo_procesossancionados[".badgeColor"] = "e67349";


$tdatadbo_procesossancionados[".allSearchFields"] = array();
$tdatadbo_procesossancionados[".filterFields"] = array();
$tdatadbo_procesossancionados[".requiredSearchFields"] = array();

$tdatadbo_procesossancionados[".googleLikeFields"] = array();
$tdatadbo_procesossancionados[".googleLikeFields"][] = "SancionadoId";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Concepto";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Numero";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Fecha";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Providencia";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Ejecutoria";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Saldo";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Estado";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Etapa";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Seccional";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "CarteraTipo";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Abogado";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Acuerdo";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Incumplimiento";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Terminacion";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Radicado";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Despacho";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Observaciones";
$tdatadbo_procesossancionados[".googleLikeFields"][] = "Email";



$tdatadbo_procesossancionados[".tableType"] = "list";

$tdatadbo_procesossancionados[".printerPageOrientation"] = 0;
$tdatadbo_procesossancionados[".nPrinterPageScale"] = 100;

$tdatadbo_procesossancionados[".nPrinterSplitRecords"] = 40;

$tdatadbo_procesossancionados[".geocodingEnabled"] = false;




$tdatadbo_procesossancionados[".isDisplayLoading"] = true;

$tdatadbo_procesossancionados[".isResizeColumns"] = true;





$tdatadbo_procesossancionados[".pageSize"] = 20;

$tdatadbo_procesossancionados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadbo_procesossancionados[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_procesossancionados[".orderindexes"] = array();


$tdatadbo_procesossancionados[".sqlHead"] = "SELECT p.SancionadoId,  c.Concepto,  p.Numero,  p.Fecha,  p.Providencia,  p.Ejecutoria,  (p.Obligacion+p.Intereses+p.Costas) AS Saldo,  e.Estado,  et.Etapa,  s.Seccional,  ca.CarteraTipo,  a.Abogado,  p.Acuerdo,  p.Incumplimiento,  p.Terminacion,  p.Radicado,  d.Despacho,  p.Observaciones,  a.Email";
$tdatadbo_procesossancionados[".sqlFrom"] = "FROM dbo.Procesos AS p  LEFT OUTER JOIN dbo.Conceptos AS c ON p.ConceptoId = c.ConceptoId  LEFT OUTER JOIN dbo.Estados AS e ON p.EstadoId = e.EstadoId  LEFT OUTER JOIN dbo.Etapas AS et ON p.EtapaId = et.EtapaId  LEFT OUTER JOIN dbo.Seccionales AS s ON p.SeccionalId = s.SeccionalId  LEFT OUTER JOIN dbo.CarteraTipos AS ca ON p.CarteraTipoId = ca.CarteraTipoId  LEFT OUTER JOIN dbo.Abogados AS a ON p.AbogadoId = a.AbogadoId  LEFT OUTER JOIN dbo.Despachos AS d ON p.DespachoId = d.DespachoId  LEFT OUTER JOIN dbo.Motivos AS m ON p.MotivoId = m.MotivoId";
$tdatadbo_procesossancionados[".sqlWhereExpr"] = "";
$tdatadbo_procesossancionados[".sqlTail"] = "";

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
$tdatadbo_procesossancionados[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatadbo_procesossancionados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_procesossancionados[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_procesossancionados[".highlightSearchResults"] = true;

$tableKeysdbo_procesossancionados = array();
$tdatadbo_procesossancionados[".Keys"] = $tableKeysdbo_procesossancionados;


$tdatadbo_procesossancionados[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.SancionadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Sancionado+ ' -  ' +Documento";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatadbo_procesossancionados["SancionadoId"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "SancionadoId";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Concepto";

	
	
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


	$tdatadbo_procesossancionados["Concepto"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Numero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatadbo_procesossancionados["Numero"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatadbo_procesossancionados["Fecha"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Fecha";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Providencia";

	
	
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


	$tdatadbo_procesossancionados["Providencia"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Ejecutoria";

	
	
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


	$tdatadbo_procesossancionados["Ejecutoria"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Ejecutoria";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(p.Obligacion+p.Intereses+p.Costas)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatadbo_procesossancionados["Saldo"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Saldo";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Estado";

	
	
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


	$tdatadbo_procesossancionados["Estado"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Estado";
//	Etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Etapa";
	$fdata["GoodName"] = "Etapa";
	$fdata["ownerTable"] = "dbo.Etapas";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Etapa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "et.Etapa";

	
	
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


	$tdatadbo_procesossancionados["Etapa"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Etapa";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.Seccional";

	
	
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


	$tdatadbo_procesossancionados["Seccional"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Seccional";
//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ca.CarteraTipo";

	
	
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


	$tdatadbo_procesossancionados["CarteraTipo"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "CarteraTipo";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "a.Abogado";

	
	
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


	$tdatadbo_procesossancionados["Abogado"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Abogado";
//	Acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Acuerdo";
	$fdata["GoodName"] = "Acuerdo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Acuerdo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Acuerdo";

		$fdata["sourceSingle"] = "Acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Acuerdo";

	
	
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


	$tdatadbo_procesossancionados["Acuerdo"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Acuerdo";
//	Incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Incumplimiento";
	$fdata["GoodName"] = "Incumplimiento";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Incumplimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Incumplimiento";

		$fdata["sourceSingle"] = "Incumplimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Incumplimiento";

	
	
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


	$tdatadbo_procesossancionados["Incumplimiento"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Incumplimiento";
//	Terminacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Terminacion";
	$fdata["GoodName"] = "Terminacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Terminacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Terminacion";

		$fdata["sourceSingle"] = "Terminacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Terminacion";

	
	
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


	$tdatadbo_procesossancionados["Terminacion"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Terminacion";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

		$fdata["sourceSingle"] = "Radicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Radicado";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatadbo_procesossancionados["Radicado"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Radicado";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.Despacho";

	
	
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


	$tdatadbo_procesossancionados["Despacho"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Despacho";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadbo_procesossancionados["Observaciones"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Observaciones";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSancionados","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "a.Email";

	
	
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


	$tdatadbo_procesossancionados["Email"] = $fdata;
		$tdatadbo_procesossancionados[".searchableFields"][] = "Email";


$tables_data["dbo.ProcesosSancionados"]=&$tdatadbo_procesossancionados;
$field_labels["dbo_ProcesosSancionados"] = &$fieldLabelsdbo_procesossancionados;
$fieldToolTips["dbo_ProcesosSancionados"] = &$fieldToolTipsdbo_procesossancionados;
$placeHolders["dbo_ProcesosSancionados"] = &$placeHoldersdbo_procesossancionados;
$page_titles["dbo_ProcesosSancionados"] = &$pageTitlesdbo_procesossancionados;


changeTextControlsToDate( "dbo.ProcesosSancionados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosSancionados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosSancionados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ProcesosSancionados"][0] = $masterParams;
				$masterTablesData["dbo.ProcesosSancionados"][0]["masterKeys"] = array();
	$masterTablesData["dbo.ProcesosSancionados"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.ProcesosSancionados"][0]["detailKeys"] = array();
	$masterTablesData["dbo.ProcesosSancionados"][0]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_procesossancionados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "p.SancionadoId,  c.Concepto,  p.Numero,  p.Fecha,  p.Providencia,  p.Ejecutoria,  (p.Obligacion+p.Intereses+p.Costas) AS Saldo,  e.Estado,  et.Etapa,  s.Seccional,  ca.CarteraTipo,  a.Abogado,  p.Acuerdo,  p.Incumplimiento,  p.Terminacion,  p.Radicado,  d.Despacho,  p.Observaciones,  a.Email";
$proto0["m_strFrom"] = "FROM dbo.Procesos AS p  LEFT OUTER JOIN dbo.Conceptos AS c ON p.ConceptoId = c.ConceptoId  LEFT OUTER JOIN dbo.Estados AS e ON p.EstadoId = e.EstadoId  LEFT OUTER JOIN dbo.Etapas AS et ON p.EtapaId = et.EtapaId  LEFT OUTER JOIN dbo.Seccionales AS s ON p.SeccionalId = s.SeccionalId  LEFT OUTER JOIN dbo.CarteraTipos AS ca ON p.CarteraTipoId = ca.CarteraTipoId  LEFT OUTER JOIN dbo.Abogados AS a ON p.AbogadoId = a.AbogadoId  LEFT OUTER JOIN dbo.Despachos AS d ON p.DespachoId = d.DespachoId  LEFT OUTER JOIN dbo.Motivos AS m ON p.MotivoId = m.MotivoId";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
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
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto6["m_sql"] = "p.SancionadoId";
$proto6["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto8["m_sql"] = "c.Concepto";
$proto8["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto10["m_sql"] = "p.Numero";
$proto10["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto12["m_sql"] = "p.Fecha";
$proto12["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto14["m_sql"] = "p.Providencia";
$proto14["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto16["m_sql"] = "p.Ejecutoria";
$proto16["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(p.Obligacion+p.Intereses+p.Costas)"
));

$proto18["m_sql"] = "(p.Obligacion+p.Intereses+p.Costas)";
$proto18["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "e",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto20["m_sql"] = "e.Estado";
$proto20["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Etapa",
	"m_strTable" => "et",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto22["m_sql"] = "et.Etapa";
$proto22["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "s",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto24["m_sql"] = "s.Seccional";
$proto24["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipo",
	"m_strTable" => "ca",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto26["m_sql"] = "ca.CarteraTipo";
$proto26["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "a",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto28["m_sql"] = "a.Abogado";
$proto28["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto30["m_sql"] = "p.Acuerdo";
$proto30["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto32["m_sql"] = "p.Incumplimiento";
$proto32["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Terminacion",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto34["m_sql"] = "p.Terminacion";
$proto34["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto36["m_sql"] = "p.Radicado";
$proto36["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "d",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto38["m_sql"] = "d.Despacho";
$proto38["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "p",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto40["m_sql"] = "p.Observaciones";
$proto40["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "a",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto42["m_sql"] = "a.Email";
$proto42["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.Procesos";
$proto45["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "ProcesoId";
$proto45["m_columns"][] = "SeccionalId";
$proto45["m_columns"][] = "AbogadoId";
$proto45["m_columns"][] = "Fecha";
$proto45["m_columns"][] = "Numero";
$proto45["m_columns"][] = "DespachoId";
$proto45["m_columns"][] = "SancionadoId";
$proto45["m_columns"][] = "Providencia";
$proto45["m_columns"][] = "Ejecutoria";
$proto45["m_columns"][] = "ConceptoId";
$proto45["m_columns"][] = "EstadoId";
$proto45["m_columns"][] = "EtapaId";
$proto45["m_columns"][] = "Folios";
$proto45["m_columns"][] = "Tipo";
$proto45["m_columns"][] = "Cantidad";
$proto45["m_columns"][] = "Obligacion";
$proto45["m_columns"][] = "Costas";
$proto45["m_columns"][] = "Liquidacion";
$proto45["m_columns"][] = "Dias";
$proto45["m_columns"][] = "Intereses";
$proto45["m_columns"][] = "Recaudo";
$proto45["m_columns"][] = "CalificacionId";
$proto45["m_columns"][] = "Terminacion";
$proto45["m_columns"][] = "MotivoId";
$proto45["m_columns"][] = "Observaciones";
$proto45["m_columns"][] = "Cuotas";
$proto45["m_columns"][] = "Abono";
$proto45["m_columns"][] = "Inicio";
$proto45["m_columns"][] = "VlrCuota";
$proto45["m_columns"][] = "VlrIntereses";
$proto45["m_columns"][] = "Garantia";
$proto45["m_columns"][] = "Radicado";
$proto45["m_columns"][] = "Remisorio";
$proto45["m_columns"][] = "Acuerdo";
$proto45["m_columns"][] = "Incumplimiento";
$proto45["m_columns"][] = "Notificacion";
$proto45["m_columns"][] = "Suspension";
$proto45["m_columns"][] = "Traslado";
$proto45["m_columns"][] = "Error";
$proto45["m_columns"][] = "CarteraTipoId";
$proto45["m_columns"][] = "ConceptoAbogado";
$proto45["m_columns"][] = "Origen";
$proto45["m_columns"][] = "Carpeta";
$proto45["m_columns"][] = "ImportacionId";
$proto45["m_columns"][] = "ActuacionId";
$proto45["m_columns"][] = "ObligacionInicial";
$proto45["m_columns"][] = "CostasInicial";
$proto45["m_columns"][] = "InteresesInicial";
$proto45["m_columns"][] = "MinJusticia";
$proto45["m_columns"][] = "Revocatoria";
$proto45["m_columns"][] = "Mayor";
$proto45["m_columns"][] = "NotificacionValidada";
$proto45["m_columns"][] = "Validado";
$proto45["m_columns"][] = "Seleccionado";
$proto45["m_columns"][] = "CompetenciaId";
$proto45["m_columns"][] = "MinjusticiaId";
$proto45["m_columns"][] = "SeleccionadoPor";
$proto45["m_columns"][] = "Subsanar";
$proto45["m_columns"][] = "NumeroMinjusticia";
$proto45["m_columns"][] = "ProcesoIdOrigen";
$proto45["m_columns"][] = "SeleccionadoFecha";
$proto45["m_columns"][] = "InteresesIniciales";
$proto45["m_columns"][] = "InteresesCalculados";
$proto45["m_columns"][] = "ProcesoIdDestino";
$proto45["m_columns"][] = "RecaudoMinjusticia";
$proto45["m_columns"][] = "RecaudoTerminado";
$proto45["m_columns"][] = "Persuasivo";
$proto45["m_columns"][] = "ObligacionCreacion";
$proto45["m_columns"][] = "InteresesCreacion";
$proto45["m_columns"][] = "CostasCreacion";
$proto45["m_columns"][] = "Plazo";
$proto45["m_columns"][] = "NaturalezaId";
$proto45["m_columns"][] = "TrasladoCartera";
$proto45["m_columns"][] = "CarteraTipoIdOrigen";
$proto45["m_columns"][] = "TrasladoConcepto";
$proto45["m_columns"][] = "ConceptoIdOrigen";
$proto45["m_columns"][] = "AutorizadoPlazo";
$proto45["m_columns"][] = "AutorizadoFecha";
$proto45["m_columns"][] = "AutorizadoPor";
$proto45["m_columns"][] = "Reliquidacion";
$proto45["m_columns"][] = "ChequeoId";
$proto45["m_columns"][] = "VlrCostas";
$proto45["m_columns"][] = "VlrInteresesPlazo";
$proto45["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "dbo.Procesos AS p";
$proto44["m_alias"] = "p";
$proto44["m_srcTableName"] = "dbo.ProcesosSancionados";
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
$proto48["m_link"] = "SQLL_LEFTJOIN";
			$proto49=array();
$proto49["m_strName"] = "dbo.Conceptos";
$proto49["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ConceptoId";
$proto49["m_columns"][] = "Concepto";
$proto49["m_columns"][] = "Activo";
$proto49["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN dbo.Conceptos AS c ON p.ConceptoId = c.ConceptoId";
$proto48["m_alias"] = "c";
$proto48["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto50=array();
$proto50["m_sql"] = "c.ConceptoId = p.ConceptoId";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "c",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= p.ConceptoId";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_LEFTJOIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Estados";
$proto53["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "EstadoId";
$proto53["m_columns"][] = "Estado";
$proto53["m_columns"][] = "Tipo";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN dbo.Estados AS e ON p.EstadoId = e.EstadoId";
$proto52["m_alias"] = "e";
$proto52["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto54=array();
$proto54["m_sql"] = "e.EstadoId = p.EstadoId";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "e",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= p.EstadoId";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "dbo.Etapas";
$proto57["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "EtapaId";
$proto57["m_columns"][] = "Etapa";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN dbo.Etapas AS et ON p.EtapaId = et.EtapaId";
$proto56["m_alias"] = "et";
$proto56["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto58=array();
$proto58["m_sql"] = "et.EtapaId = p.EtapaId";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "et",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= p.EtapaId";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_LEFTJOIN";
			$proto61=array();
$proto61["m_strName"] = "dbo.Seccionales";
$proto61["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "SeccionalId";
$proto61["m_columns"][] = "Codigo";
$proto61["m_columns"][] = "Seccional";
$proto61["m_columns"][] = "NIT";
$proto61["m_columns"][] = "CiudadId";
$proto61["m_columns"][] = "PiePagina";
$proto61["m_columns"][] = "Sigobius";
$proto61["m_columns"][] = "Email";
$proto61["m_columns"][] = "Direccion";
$proto61["m_columns"][] = "Telefonos";
$proto61["m_columns"][] = "PCI";
$proto61["m_columns"][] = "Contador";
$proto61["m_columns"][] = "ContadorCargo";
$proto61["m_columns"][] = "Director";
$proto61["m_columns"][] = "DirectorCargo";
$proto61["m_columns"][] = "Abogado";
$proto61["m_columns"][] = "AbogadoCargo";
$proto61["m_columns"][] = "Formato";
$proto61["m_columns"][] = "Corporacion";
$proto61["m_columns"][] = "Unidad";
$proto61["m_columns"][] = "Oficina";
$proto61["m_columns"][] = "Serie";
$proto61["m_columns"][] = "Subserie";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "LEFT OUTER JOIN dbo.Seccionales AS s ON p.SeccionalId = s.SeccionalId";
$proto60["m_alias"] = "s";
$proto60["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto62=array();
$proto62["m_sql"] = "s.SeccionalId = p.SeccionalId";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "s",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= p.SeccionalId";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_LEFTJOIN";
			$proto65=array();
$proto65["m_strName"] = "dbo.CarteraTipos";
$proto65["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "CarteraTipoId";
$proto65["m_columns"][] = "CarteraTipo";
$proto65["m_columns"][] = "Color";
$proto65["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "LEFT OUTER JOIN dbo.CarteraTipos AS ca ON p.CarteraTipoId = ca.CarteraTipoId";
$proto64["m_alias"] = "ca";
$proto64["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto66=array();
$proto66["m_sql"] = "ca.CarteraTipoId = p.CarteraTipoId";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "ca",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= p.CarteraTipoId";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_LEFTJOIN";
			$proto69=array();
$proto69["m_strName"] = "dbo.Abogados";
$proto69["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "AbogadoId";
$proto69["m_columns"][] = "Abogado";
$proto69["m_columns"][] = "Documento";
$proto69["m_columns"][] = "Tarjeta";
$proto69["m_columns"][] = "Direccion";
$proto69["m_columns"][] = "Telefonos";
$proto69["m_columns"][] = "Celular";
$proto69["m_columns"][] = "Email";
$proto69["m_columns"][] = "SeccionalId";
$proto69["m_columns"][] = "Masculino";
$proto69["m_columns"][] = "Activo";
$proto69["m_columns"][] = "Despacho";
$proto69["m_columns"][] = "Codificador";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "LEFT OUTER JOIN dbo.Abogados AS a ON p.AbogadoId = a.AbogadoId";
$proto68["m_alias"] = "a";
$proto68["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto70=array();
$proto70["m_sql"] = "a.AbogadoId = p.AbogadoId";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "a",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= p.AbogadoId";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "dbo.Despachos";
$proto73["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "DespachoId";
$proto73["m_columns"][] = "Codigo";
$proto73["m_columns"][] = "Despacho";
$proto73["m_columns"][] = "CiudadId";
$proto73["m_columns"][] = "Especialidad";
$proto73["m_columns"][] = "Subespecialidad";
$proto73["m_columns"][] = "Activo";
$proto73["m_columns"][] = "Juez";
$proto73["m_columns"][] = "Correo";
$proto73["m_columns"][] = "Telefonos";
$proto73["m_columns"][] = "Direccion";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN dbo.Despachos AS d ON p.DespachoId = d.DespachoId";
$proto72["m_alias"] = "d";
$proto72["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto74=array();
$proto74["m_sql"] = "d.DespachoId = p.DespachoId";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "d",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= p.DespachoId";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "dbo.Motivos";
$proto77["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "MotivoId";
$proto77["m_columns"][] = "Motivo";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN dbo.Motivos AS m ON p.MotivoId = m.MotivoId";
$proto76["m_alias"] = "m";
$proto76["m_srcTableName"] = "dbo.ProcesosSancionados";
$proto78=array();
$proto78["m_sql"] = "m.MotivoId = p.MotivoId";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MotivoId",
	"m_strTable" => "m",
	"m_srcTableName" => "dbo.ProcesosSancionados"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= p.MotivoId";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ProcesosSancionados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_procesossancionados = createSqlQuery_dbo_procesossancionados();


	
		;

																			

$tdatadbo_procesossancionados[".sqlquery"] = $queryData_dbo_procesossancionados;



include_once(getabspath("include/dbo_procesossancionados_events.php"));
$tdatadbo_procesossancionados[".hasEvents"] = true;

?>