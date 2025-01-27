<?php
$tdatamandamientoautomatico = array();
$tdatamandamientoautomatico[".searchableFields"] = array();
$tdatamandamientoautomatico[".ShortName"] = "mandamientoautomatico";
$tdatamandamientoautomatico[".OwnerID"] = "";
$tdatamandamientoautomatico[".OriginalTable"] = "dbo.Procesos";


$tdatamandamientoautomatico[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamandamientoautomatico[".originalPagesByType"] = $tdatamandamientoautomatico[".pagesByType"];
$tdatamandamientoautomatico[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamandamientoautomatico[".originalPages"] = $tdatamandamientoautomatico[".pages"];
$tdatamandamientoautomatico[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamandamientoautomatico[".originalDefaultPages"] = $tdatamandamientoautomatico[".defaultPages"];

//	field labels
$fieldLabelsmandamientoautomatico = array();
$fieldToolTipsmandamientoautomatico = array();
$pageTitlesmandamientoautomatico = array();
$placeHoldersmandamientoautomatico = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmandamientoautomatico["Spanish"] = array();
	$fieldToolTipsmandamientoautomatico["Spanish"] = array();
	$placeHoldersmandamientoautomatico["Spanish"] = array();
	$pageTitlesmandamientoautomatico["Spanish"] = array();
	$fieldLabelsmandamientoautomatico["Spanish"]["ProcesoId"] = "ProcesoId";
	$fieldToolTipsmandamientoautomatico["Spanish"]["ProcesoId"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["ProcesoId"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Persuasivo"] = "Persuasivo";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Persuasivo"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Persuasivo"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Despacho"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Despacho"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Codificador"] = "Codificador";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Codificador"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Codificador"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Sancionado"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Sancionado"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsmandamientoautomatico["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Masculino"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Masculino"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsmandamientoautomatico["Spanish"]["OficioId"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["OficioId"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["AlertaTipo"] = "Alerta Tipo";
	$fieldToolTipsmandamientoautomatico["Spanish"]["AlertaTipo"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["AlertaTipo"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Oficio"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Oficio"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Sigobius"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Sigobius"] = "";
	$fieldLabelsmandamientoautomatico["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsmandamientoautomatico["Spanish"]["Numero"] = "";
	$placeHoldersmandamientoautomatico["Spanish"]["Numero"] = "";
	if (count($fieldToolTipsmandamientoautomatico["Spanish"]))
		$tdatamandamientoautomatico[".isUseToolTips"] = true;
}


	$tdatamandamientoautomatico[".NCSearch"] = true;



$tdatamandamientoautomatico[".shortTableName"] = "mandamientoautomatico";
$tdatamandamientoautomatico[".nSecOptions"] = 0;

$tdatamandamientoautomatico[".mainTableOwnerID"] = "";
$tdatamandamientoautomatico[".entityType"] = 1;
$tdatamandamientoautomatico[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamandamientoautomatico[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatamandamientoautomatico[".showAddInPopup"] = false;

$tdatamandamientoautomatico[".showEditInPopup"] = false;

$tdatamandamientoautomatico[".showViewInPopup"] = false;

$tdatamandamientoautomatico[".listAjax"] = false;
//	temporary
//$tdatamandamientoautomatico[".listAjax"] = false;

	$tdatamandamientoautomatico[".audit"] = true;

	$tdatamandamientoautomatico[".locking"] = false;


$pages = $tdatamandamientoautomatico[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamandamientoautomatico[".edit"] = true;
	$tdatamandamientoautomatico[".afterEditAction"] = 1;
	$tdatamandamientoautomatico[".closePopupAfterEdit"] = 1;
	$tdatamandamientoautomatico[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamandamientoautomatico[".add"] = true;
$tdatamandamientoautomatico[".afterAddAction"] = 1;
$tdatamandamientoautomatico[".closePopupAfterAdd"] = 1;
$tdatamandamientoautomatico[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamandamientoautomatico[".list"] = true;
}



$tdatamandamientoautomatico[".strSortControlSettingsJSON"] = "";

$tdatamandamientoautomatico[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatamandamientoautomatico[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamandamientoautomatico[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamandamientoautomatico[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamandamientoautomatico[".printFriendly"] = true;
}



$tdatamandamientoautomatico[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamandamientoautomatico[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamandamientoautomatico[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamandamientoautomatico[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																										

$tdatamandamientoautomatico[".ajaxCodeSnippetAdded"] = false;

$tdatamandamientoautomatico[".buttonsAdded"] = false;

$tdatamandamientoautomatico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamandamientoautomatico[".isUseTimeForSearch"] = false;


$tdatamandamientoautomatico[".badgeColor"] = "E8926F";


$tdatamandamientoautomatico[".allSearchFields"] = array();
$tdatamandamientoautomatico[".filterFields"] = array();
$tdatamandamientoautomatico[".requiredSearchFields"] = array();

$tdatamandamientoautomatico[".googleLikeFields"] = array();
$tdatamandamientoautomatico[".googleLikeFields"][] = "ProcesoId";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Despacho";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Codificador";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Sancionado";
$tdatamandamientoautomatico[".googleLikeFields"][] = "SancionadoDocumento";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Masculino";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Numero";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Persuasivo";
$tdatamandamientoautomatico[".googleLikeFields"][] = "OficioId";
$tdatamandamientoautomatico[".googleLikeFields"][] = "AlertaTipo";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Oficio";
$tdatamandamientoautomatico[".googleLikeFields"][] = "Sigobius";



$tdatamandamientoautomatico[".tableType"] = "list";

$tdatamandamientoautomatico[".printerPageOrientation"] = 0;
$tdatamandamientoautomatico[".nPrinterPageScale"] = 100;

$tdatamandamientoautomatico[".nPrinterSplitRecords"] = 40;

$tdatamandamientoautomatico[".geocodingEnabled"] = false;




$tdatamandamientoautomatico[".isDisplayLoading"] = true;

$tdatamandamientoautomatico[".isResizeColumns"] = true;





$tdatamandamientoautomatico[".pageSize"] = 20;

$tdatamandamientoautomatico[".warnLeavingPages"] = true;



$tstrOrderBy = "order by 1";
$tdatamandamientoautomatico[".strOrderBy"] = $tstrOrderBy;

$tdatamandamientoautomatico[".orderindexes"] = array();


$tdatamandamientoautomatico[".sqlHead"] = "	SELECT ProcesosView1.ProcesoId,   		Abogados.Despacho,   		Abogados.Codificador,   		ProcesosView1.Sancionado,   		ProcesosView1.SancionadoDocumento,   		ProcesosView1.Masculino,  		ProcesosView1.Numero,   		--ProcesosView1.Persuasivo,   		(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) Persuasivo,  		AlertasOficios.OficioId,   		AlertasTipos.AlertaTipo,   		Oficios.Oficio,   		Oficios.Sigobius";
$tdatamandamientoautomatico[".sqlFrom"] = "FROM Abogados  		 INNER JOIN ProcesosView1  		 INNER JOIN AlertasTipos  		 INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId  		 ON (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= DATEADD(DAY, Alertas.Dias, GETDATE())  		 ON Abogados.AbogadoId = ProcesosView1.AbogadoId  		 INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId  		 INNER JOIN Oficios  		 ON AlertasOficios.OficioId = Oficios.OficioId  		 LEFT OUTER JOIN Correspondencias  		 INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$tdatamandamientoautomatico[".sqlWhereExpr"] = "( (Alertas.Activa = 1) AND   		   (ProcesosView1.EstadoId = 2) AND   		   (ProcesosView1.EtapaId = 1) AND   		   (ProcesosView1.Prescrita = 0) AND   		   (AlertasTipos.AlertaTipoId = 2) AND   		   (Abogados.Activo = 1) AND   		   (ProcesosView1.ConceptoId <> 2 OR (ProcesosView1.ConceptoId = 2 AND (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (4477, 4623)) ORDER BY Fecha DESC) <= DATEADD(DAY, 40, GETDATE())) )          AND  		   (AlertasOficios.Activo = 1)  		   AND   		   (Oficios.Activo = 1) AND   		   ( ( ProcesosView1.Acuerdo IS NULL  			 ) OR   			 ( NOT( ProcesosView1.Incumplimiento IS NULL  				  )  			 )  		   )  		 )  		 and not exists (select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328))  		 and exists(select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (1097,3143,3144,3191,3229,3260,4316,4320,4321,4326,4327,4388,4440,4477,4494,4547,4586))";
$tdatamandamientoautomatico[".sqlTail"] = "";

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
$tdatamandamientoautomatico[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamandamientoautomatico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamandamientoautomatico[".arrGroupsPerPage"] = $arrGPP;

$tdatamandamientoautomatico[".highlightSearchResults"] = true;

$tableKeysmandamientoautomatico = array();
$tableKeysmandamientoautomatico[] = "ProcesoId";
$tdatamandamientoautomatico[".Keys"] = $tableKeysmandamientoautomatico;


$tdatamandamientoautomatico[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","ProcesoId");
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


	$tdatamandamientoautomatico["ProcesoId"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "ProcesoId";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Despacho");
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


	$tdatamandamientoautomatico["Despacho"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Despacho";
//	Codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Codificador";
	$fdata["GoodName"] = "Codificador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Codificador");
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


	$tdatamandamientoautomatico["Codificador"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Codificador";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Sancionado");
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


	$tdatamandamientoautomatico["Sancionado"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","SancionadoDocumento");
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


	$tdatamandamientoautomatico["SancionadoDocumento"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "SancionadoDocumento";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Masculino");
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


	$tdatamandamientoautomatico["Masculino"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Masculino";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Numero");
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


	$tdatamandamientoautomatico["Numero"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Numero";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Persuasivo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Persuasivo";

		$fdata["sourceSingle"] = "Persuasivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC)";

	
	
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


	$tdatamandamientoautomatico["Persuasivo"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Persuasivo";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","OficioId");
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


	$tdatamandamientoautomatico["OficioId"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "OficioId";
//	AlertaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AlertaTipo";
	$fdata["GoodName"] = "AlertaTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","AlertaTipo");
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


	$tdatamandamientoautomatico["AlertaTipo"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "AlertaTipo";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Oficio");
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


	$tdatamandamientoautomatico["Oficio"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Oficio";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MandamientoAutomatico","Sigobius");
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


	$tdatamandamientoautomatico["Sigobius"] = $fdata;
		$tdatamandamientoautomatico[".searchableFields"][] = "Sigobius";


$tables_data["MandamientoAutomatico"]=&$tdatamandamientoautomatico;
$field_labels["MandamientoAutomatico"] = &$fieldLabelsmandamientoautomatico;
$fieldToolTips["MandamientoAutomatico"] = &$fieldToolTipsmandamientoautomatico;
$placeHolders["MandamientoAutomatico"] = &$placeHoldersmandamientoautomatico;
$page_titles["MandamientoAutomatico"] = &$pageTitlesmandamientoautomatico;


changeTextControlsToDate( "MandamientoAutomatico" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MandamientoAutomatico"] = array();
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
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


		
	$detailsTablesData["MandamientoAutomatico"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MandamientoAutomatico"][$dIndex]["detailKeys"][]="ProcesoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MandamientoAutomatico"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mandamientoautomatico()
{
$proto0=array();
$proto0["m_strHead"] = "	SELECT";
$proto0["m_strFieldList"] = "ProcesosView1.ProcesoId,   		Abogados.Despacho,   		Abogados.Codificador,   		ProcesosView1.Sancionado,   		ProcesosView1.SancionadoDocumento,   		ProcesosView1.Masculino,  		ProcesosView1.Numero,   		--ProcesosView1.Persuasivo,   		(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) Persuasivo,  		AlertasOficios.OficioId,   		AlertasTipos.AlertaTipo,   		Oficios.Oficio,   		Oficios.Sigobius";
$proto0["m_strFrom"] = "FROM Abogados  		 INNER JOIN ProcesosView1  		 INNER JOIN AlertasTipos  		 INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId  		 ON (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= DATEADD(DAY, Alertas.Dias, GETDATE())  		 ON Abogados.AbogadoId = ProcesosView1.AbogadoId  		 INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId  		 INNER JOIN Oficios  		 ON AlertasOficios.OficioId = Oficios.OficioId  		 LEFT OUTER JOIN Correspondencias  		 INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto0["m_strWhere"] = "( (Alertas.Activa = 1) AND   		   (ProcesosView1.EstadoId = 2) AND   		   (ProcesosView1.EtapaId = 1) AND   		   (ProcesosView1.Prescrita = 0) AND   		   (AlertasTipos.AlertaTipoId = 2) AND   		   (Abogados.Activo = 1) AND   		   (ProcesosView1.ConceptoId <> 2 OR (ProcesosView1.ConceptoId = 2 AND (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (4477, 4623)) ORDER BY Fecha DESC) <= DATEADD(DAY, 40, GETDATE())) )          AND  		   (AlertasOficios.Activo = 1)  		   AND   		   (Oficios.Activo = 1) AND   		   ( ( ProcesosView1.Acuerdo IS NULL  			 ) OR   			 ( NOT( ProcesosView1.Incumplimiento IS NULL  				  )  			 )  		   )  		 )  		 and not exists (select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328))  		 and exists(select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (1097,3143,3144,3191,3229,3260,4316,4320,4321,4326,4327,4388,4440,4477,4494,4547,4586))";
$proto0["m_strOrderBy"] = "order by 1";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "( (Alertas.Activa = 1) AND   		   (ProcesosView1.EstadoId = 2) AND   		   (ProcesosView1.EtapaId = 1) AND   		   (ProcesosView1.Prescrita = 0) AND   		   (AlertasTipos.AlertaTipoId = 2) AND   		   (Abogados.Activo = 1) AND   		   (ProcesosView1.ConceptoId <> 2 OR (ProcesosView1.ConceptoId = 2 AND (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (4477, 4623)) ORDER BY Fecha DESC) <= DATEADD(DAY, 40, GETDATE())) )          AND  		   (AlertasOficios.Activo = 1)  		   AND   		   (Oficios.Activo = 1) AND   		   ( ( ProcesosView1.Acuerdo IS NULL  			 ) OR   			 ( NOT( ProcesosView1.Incumplimiento IS NULL  				  )  			 )  		   )  		 )  		 and not exists (select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328))  		 and exists(select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (1097,3143,3144,3191,3229,3260,4316,4320,4321,4326,4327,4388,4440,4477,4494,4547,4586))";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "( (Alertas.Activa = 1) AND   		   (ProcesosView1.EstadoId = 2) AND   		   (ProcesosView1.EtapaId = 1) AND   		   (ProcesosView1.Prescrita = 0) AND   		   (AlertasTipos.AlertaTipoId = 2) AND   		   (Abogados.Activo = 1) AND   		   (ProcesosView1.ConceptoId <> 2 OR (ProcesosView1.ConceptoId = 2 AND (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (4477, 4623)) ORDER BY Fecha DESC) <= DATEADD(DAY, 40, GETDATE())) )          AND  		   (AlertasOficios.Activo = 1)  		   AND   		   (Oficios.Activo = 1) AND   		   ( ( ProcesosView1.Acuerdo IS NULL  			 ) OR   			 ( NOT( ProcesosView1.Incumplimiento IS NULL  				  )  			 )  		   )  		 )  		 and not exists (select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328))  		 and exists(select * from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (1097,3143,3144,3191,3229,3260,4316,4320,4321,4326,4327,4388,4440,4477,4494,4547,4586))"
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
$proto4["m_sql"] = "(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= ':session.fechaMandamientoA'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= ':session.fechaMandamientoA'"
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
$proto6["m_srcTableName"] = "MandamientoAutomatico";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto8["m_sql"] = "Abogados.Despacho";
$proto8["m_srcTableName"] = "MandamientoAutomatico";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto10["m_sql"] = "Abogados.Codificador";
$proto10["m_srcTableName"] = "MandamientoAutomatico";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto12["m_sql"] = "ProcesosView1.Sancionado";
$proto12["m_srcTableName"] = "MandamientoAutomatico";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto14["m_sql"] = "ProcesosView1.SancionadoDocumento";
$proto14["m_srcTableName"] = "MandamientoAutomatico";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto16["m_sql"] = "ProcesosView1.Masculino";
$proto16["m_srcTableName"] = "MandamientoAutomatico";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Numero"
));

$proto18["m_sql"] = "ProcesosView1.Numero";
$proto18["m_srcTableName"] = "MandamientoAutomatico";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC)"
));

$proto20["m_sql"] = "(SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC)";
$proto20["m_srcTableName"] = "MandamientoAutomatico";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Persuasivo";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto22["m_sql"] = "AlertasOficios.OficioId";
$proto22["m_srcTableName"] = "MandamientoAutomatico";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto24["m_sql"] = "AlertasTipos.AlertaTipo";
$proto24["m_srcTableName"] = "MandamientoAutomatico";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto26["m_sql"] = "Oficios.Oficio";
$proto26["m_srcTableName"] = "MandamientoAutomatico";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto28["m_sql"] = "Oficios.Sigobius";
$proto28["m_srcTableName"] = "MandamientoAutomatico";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Abogados";
$proto31["m_srcTableName"] = "MandamientoAutomatico";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "AbogadoId";
$proto31["m_columns"][] = "Abogado";
$proto31["m_columns"][] = "Documento";
$proto31["m_columns"][] = "Tarjeta";
$proto31["m_columns"][] = "Direccion";
$proto31["m_columns"][] = "Telefonos";
$proto31["m_columns"][] = "Celular";
$proto31["m_columns"][] = "Email";
$proto31["m_columns"][] = "SeccionalId";
$proto31["m_columns"][] = "Masculino";
$proto31["m_columns"][] = "Activo";
$proto31["m_columns"][] = "Despacho";
$proto31["m_columns"][] = "Codificador";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "Abogados";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "MandamientoAutomatico";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.ProcesosView1";
$proto35["m_srcTableName"] = "MandamientoAutomatico";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ProcesoId";
$proto35["m_columns"][] = "Fecha";
$proto35["m_columns"][] = "Numero";
$proto35["m_columns"][] = "Obligacion";
$proto35["m_columns"][] = "Costas";
$proto35["m_columns"][] = "Intereses";
$proto35["m_columns"][] = "Folios";
$proto35["m_columns"][] = "Observaciones";
$proto35["m_columns"][] = "Seccional";
$proto35["m_columns"][] = "Ciudad";
$proto35["m_columns"][] = "Abogado";
$proto35["m_columns"][] = "Masculino";
$proto35["m_columns"][] = "Despacho";
$proto35["m_columns"][] = "Concepto";
$proto35["m_columns"][] = "Motivo";
$proto35["m_columns"][] = "Estado";
$proto35["m_columns"][] = "Calificacion";
$proto35["m_columns"][] = "PiePagina";
$proto35["m_columns"][] = "CiudadDepartamento";
$proto35["m_columns"][] = "Sigobius";
$proto35["m_columns"][] = "Cuotas";
$proto35["m_columns"][] = "Abono";
$proto35["m_columns"][] = "Inicio";
$proto35["m_columns"][] = "VlrCuota";
$proto35["m_columns"][] = "VlrIntereses";
$proto35["m_columns"][] = "Garantia";
$proto35["m_columns"][] = "Recaudo";
$proto35["m_columns"][] = "Sancionado";
$proto35["m_columns"][] = "SancionadoDocumento";
$proto35["m_columns"][] = "SancionadoTipoDocumento";
$proto35["m_columns"][] = "SancionadoCiudad";
$proto35["m_columns"][] = "DespachoCiudad";
$proto35["m_columns"][] = "Providencia";
$proto35["m_columns"][] = "Ejecutoria";
$proto35["m_columns"][] = "Radicado";
$proto35["m_columns"][] = "Terminacion";
$proto35["m_columns"][] = "Liquidacion";
$proto35["m_columns"][] = "Dias";
$proto35["m_columns"][] = "Tipo";
$proto35["m_columns"][] = "Cantidad";
$proto35["m_columns"][] = "SancionadoMasculino";
$proto35["m_columns"][] = "SeccionalCorreo";
$proto35["m_columns"][] = "SeccionalDireccion";
$proto35["m_columns"][] = "SeccionalTelefonos";
$proto35["m_columns"][] = "Fallecimiento";
$proto35["m_columns"][] = "Notificacion";
$proto35["m_columns"][] = "SeccionalNit";
$proto35["m_columns"][] = "SeccionalId";
$proto35["m_columns"][] = "AbogadoId";
$proto35["m_columns"][] = "DespachoId";
$proto35["m_columns"][] = "SancionadoId";
$proto35["m_columns"][] = "ConceptoId";
$proto35["m_columns"][] = "NaturalezaId";
$proto35["m_columns"][] = "EstadoId";
$proto35["m_columns"][] = "EtapaId";
$proto35["m_columns"][] = "CalificacionId";
$proto35["m_columns"][] = "MotivoId";
$proto35["m_columns"][] = "ProcesoObservaciones";
$proto35["m_columns"][] = "Remisorio";
$proto35["m_columns"][] = "Acuerdo";
$proto35["m_columns"][] = "Incumplimiento";
$proto35["m_columns"][] = "Suspension";
$proto35["m_columns"][] = "Traslado";
$proto35["m_columns"][] = "Error";
$proto35["m_columns"][] = "Actuacion";
$proto35["m_columns"][] = "TipoDocumentoId";
$proto35["m_columns"][] = "Juridica";
$proto35["m_columns"][] = "SancionadoEmail";
$proto35["m_columns"][] = "SancionadoCelular";
$proto35["m_columns"][] = "CarteraTipoId";
$proto35["m_columns"][] = "ConceptoAbogado";
$proto35["m_columns"][] = "LiquidaIntereses";
$proto35["m_columns"][] = "Saldo";
$proto35["m_columns"][] = "Prescripcion";
$proto35["m_columns"][] = "FechaPrescripcion";
$proto35["m_columns"][] = "ObligacionInicial";
$proto35["m_columns"][] = "CostasInicial";
$proto35["m_columns"][] = "InteresesInicial";
$proto35["m_columns"][] = "Minjusticia_Def";
$proto35["m_columns"][] = "MinJusticia";
$proto35["m_columns"][] = "ActuacionId";
$proto35["m_columns"][] = "NotificacionValidada";
$proto35["m_columns"][] = "Validado";
$proto35["m_columns"][] = "Documento";
$proto35["m_columns"][] = "Seleccionado";
$proto35["m_columns"][] = "CompetenciaId";
$proto35["m_columns"][] = "SeleccionadoPor";
$proto35["m_columns"][] = "RadicadoNumero";
$proto35["m_columns"][] = "MinjusticiaId";
$proto35["m_columns"][] = "Contador";
$proto35["m_columns"][] = "ContadorCargo";
$proto35["m_columns"][] = "Director";
$proto35["m_columns"][] = "DirectorCargo";
$proto35["m_columns"][] = "Etapa";
$proto35["m_columns"][] = "Persuasivo";
$proto35["m_columns"][] = "Plazo";
$proto35["m_columns"][] = "Mayor";
$proto35["m_columns"][] = "Revocatoria";
$proto35["m_columns"][] = "RecaudoTerminado";
$proto35["m_columns"][] = "Naturaleza";
$proto35["m_columns"][] = "TasaTipo";
$proto35["m_columns"][] = "CarteraTipo";
$proto35["m_columns"][] = "Prescrita";
$proto35["m_columns"][] = "TrasladoCartera";
$proto35["m_columns"][] = "CarteraTipoIdOrigen";
$proto35["m_columns"][] = "TrasladoConcepto";
$proto35["m_columns"][] = "ConceptoIdOrigen";
$proto35["m_columns"][] = "CarteraTipoOrigen";
$proto35["m_columns"][] = "ConceptoOrigen";
$proto35["m_columns"][] = "ChequeoId";
$proto35["m_columns"][] = "VlrCostas";
$proto35["m_columns"][] = "VlrInteresesPlazo";
$proto35["m_columns"][] = "AbogadoDocumento";
$proto35["m_columns"][] = "DespachoCorreo";
$proto35["m_columns"][] = "DespachoDireccion";
$proto35["m_columns"][] = "DespachoJuez";
$proto35["m_columns"][] = "DespachoTelefonos";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN ProcesosView1";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "MandamientoAutomatico";
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

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN AlertasTipos"
));

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN AlertasTipos";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "MandamientoAutomatico";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId  		 ON (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= DATEADD(DAY, Alertas.Dias, GETDATE())  		 ON Abogados.AbogadoId = ProcesosView1.AbogadoId"
));

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId  		 ON (SELECT TOP (1) Fecha FROM Correspondencias WHERE (ProcesoId = ProcesosView1.ProcesoId) AND (OficioId IN (1097, 3143, 3144, 3191, 3229, 3260, 4316, 4320, 4321, 4326, 4327, 4388, 4440, 4477, 4494, 4547, 4586)) ORDER BY Fecha DESC) <= DATEADD(DAY, Alertas.Dias, GETDATE())  		 ON Abogados.AbogadoId = ProcesosView1.AbogadoId";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "MandamientoAutomatico";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId"
));

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "MandamientoAutomatico";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Oficios  		 ON AlertasOficios.OficioId = Oficios.OficioId"
));

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN Oficios  		 ON AlertasOficios.OficioId = Oficios.OficioId";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "MandamientoAutomatico";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "LEFT OUTER JOIN Correspondencias"
));

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN Correspondencias";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "MandamientoAutomatico";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
$obj = new SQLNonParsed(array(
	"m_sql" => "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId"
));

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId AND Alertas.AlertaId = Aplazamientos.AlertaId";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "MandamientoAutomatico";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto62=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.ProcesoId"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Fecha"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.CarteraTipoId"
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
	"m_sql" => "ProcesosView1.persuasivo"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Despacho"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Abogados.Codificador"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Sancionado"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.SancionadoDocumento"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesosView1.Masculino"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasOficios.OficioId"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "AlertasTipos.AlertaTipo"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Oficio"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Oficios.Sigobius"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
	$obj = new SQLNonParsed(array(
	"m_sql" => "Alertas.Dias"
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
	"m_sql" => "1"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 0;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="MandamientoAutomatico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mandamientoautomatico = createSqlQuery_mandamientoautomatico();


	
		;

												

$tdatamandamientoautomatico[".sqlquery"] = $queryData_mandamientoautomatico;



$tdatamandamientoautomatico[".hasEvents"] = false;

?>