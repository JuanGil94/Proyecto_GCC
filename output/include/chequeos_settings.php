<?php
$tdatachequeos = array();
$tdatachequeos[".searchableFields"] = array();
$tdatachequeos[".ShortName"] = "chequeos";
$tdatachequeos[".OwnerID"] = "";
$tdatachequeos[".OriginalTable"] = "dbo.Chequeos";


$tdatachequeos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatachequeos[".originalPagesByType"] = $tdatachequeos[".pagesByType"];
$tdatachequeos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatachequeos[".originalPages"] = $tdatachequeos[".pages"];
$tdatachequeos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatachequeos[".originalDefaultPages"] = $tdatachequeos[".defaultPages"];

//	field labels
$fieldLabelschequeos = array();
$fieldToolTipschequeos = array();
$pageTitleschequeos = array();
$placeHolderschequeos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelschequeos["Spanish"] = array();
	$fieldToolTipschequeos["Spanish"] = array();
	$placeHolderschequeos["Spanish"] = array();
	$pageTitleschequeos["Spanish"] = array();
	$fieldLabelschequeos["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipschequeos["Spanish"]["ConceptoId"] = "";
	$placeHolderschequeos["Spanish"]["ConceptoId"] = "";
	$fieldLabelschequeos["Spanish"]["AbogadoId"] = "Abogado";
	$fieldToolTipschequeos["Spanish"]["AbogadoId"] = "";
	$placeHolderschequeos["Spanish"]["AbogadoId"] = "";
	$fieldLabelschequeos["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipschequeos["Spanish"]["Fecha"] = "";
	$placeHolderschequeos["Spanish"]["Fecha"] = "";
	$fieldLabelschequeos["Spanish"]["DespachoId"] = "Competencia";
	$fieldToolTipschequeos["Spanish"]["DespachoId"] = "";
	$placeHolderschequeos["Spanish"]["DespachoId"] = "";
	$fieldLabelschequeos["Spanish"]["Origen"] = "No. Radicado de Origen";
	$fieldToolTipschequeos["Spanish"]["Origen"] = "";
	$placeHolderschequeos["Spanish"]["Origen"] = "";
	$fieldLabelschequeos["Spanish"]["Providencia"] = "Providencia";
	$fieldToolTipschequeos["Spanish"]["Providencia"] = "";
	$placeHolderschequeos["Spanish"]["Providencia"] = "";
	$fieldLabelschequeos["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipschequeos["Spanish"]["Ejecutoria"] = "";
	$placeHolderschequeos["Spanish"]["Ejecutoria"] = "";
	$fieldLabelschequeos["Spanish"]["PrimeraCopia"] = "Primera Copia";
	$fieldToolTipschequeos["Spanish"]["PrimeraCopia"] = "";
	$placeHolderschequeos["Spanish"]["PrimeraCopia"] = "";
	$fieldLabelschequeos["Spanish"]["Autentica"] = "Autentica";
	$fieldToolTipschequeos["Spanish"]["Autentica"] = "";
	$placeHolderschequeos["Spanish"]["Autentica"] = "";
	$fieldLabelschequeos["Spanish"]["PrestaMeritoEjecutivo"] = "Presta Merito Ejecutivo";
	$fieldToolTipschequeos["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$placeHolderschequeos["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$fieldLabelschequeos["Spanish"]["Clara"] = "Clara";
	$fieldToolTipschequeos["Spanish"]["Clara"] = "";
	$placeHolderschequeos["Spanish"]["Clara"] = "";
	$fieldLabelschequeos["Spanish"]["Expresa"] = "Expresa";
	$fieldToolTipschequeos["Spanish"]["Expresa"] = "";
	$placeHolderschequeos["Spanish"]["Expresa"] = "";
	$fieldLabelschequeos["Spanish"]["ActualmenteExigible"] = "Actualmente Exigible";
	$fieldToolTipschequeos["Spanish"]["ActualmenteExigible"] = "";
	$placeHolderschequeos["Spanish"]["ActualmenteExigible"] = "";
	$fieldLabelschequeos["Spanish"]["CompetenciaDEAJ"] = "Competencia";
	$fieldToolTipschequeos["Spanish"]["CompetenciaDEAJ"] = "";
	$placeHolderschequeos["Spanish"]["CompetenciaDEAJ"] = "";
	$fieldLabelschequeos["Spanish"]["FaltaRequisitos"] = "Falta de Requisitos";
	$fieldToolTipschequeos["Spanish"]["FaltaRequisitos"] = "";
	$placeHolderschequeos["Spanish"]["FaltaRequisitos"] = "";
	$fieldLabelschequeos["Spanish"]["FaltaCompetencia"] = "Falta de Competencia";
	$fieldToolTipschequeos["Spanish"]["FaltaCompetencia"] = "";
	$placeHolderschequeos["Spanish"]["FaltaCompetencia"] = "";
	$fieldLabelschequeos["Spanish"]["PorPrescripcion"] = "Por Prescripción";
	$fieldToolTipschequeos["Spanish"]["PorPrescripcion"] = "";
	$placeHolderschequeos["Spanish"]["PorPrescripcion"] = "";
	$fieldLabelschequeos["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipschequeos["Spanish"]["SeccionalId"] = "";
	$placeHolderschequeos["Spanish"]["SeccionalId"] = "";
	$fieldLabelschequeos["Spanish"]["Folios"] = "Folios";
	$fieldToolTipschequeos["Spanish"]["Folios"] = "";
	$placeHolderschequeos["Spanish"]["Folios"] = "";
	$fieldLabelschequeos["Spanish"]["SeccionalIdDestino"] = "Seccional Destino";
	$fieldToolTipschequeos["Spanish"]["SeccionalIdDestino"] = "";
	$placeHolderschequeos["Spanish"]["SeccionalIdDestino"] = "";
	$fieldLabelschequeos["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipschequeos["Spanish"]["Observaciones"] = "";
	$placeHolderschequeos["Spanish"]["Observaciones"] = "";
	$fieldLabelschequeos["Spanish"]["Procesado"] = "Procesado";
	$fieldToolTipschequeos["Spanish"]["Procesado"] = "";
	$placeHolderschequeos["Spanish"]["Procesado"] = "";
	$fieldLabelschequeos["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipschequeos["Spanish"]["Tipo"] = "";
	$placeHolderschequeos["Spanish"]["Tipo"] = "";
	$fieldLabelschequeos["Spanish"]["FechaSancion"] = "Fecha Liquidación";
	$fieldToolTipschequeos["Spanish"]["FechaSancion"] = "";
	$placeHolderschequeos["Spanish"]["FechaSancion"] = "";
	$fieldLabelschequeos["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipschequeos["Spanish"]["Cantidad"] = "";
	$placeHolderschequeos["Spanish"]["Cantidad"] = "";
	$fieldLabelschequeos["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipschequeos["Spanish"]["Obligacion"] = "";
	$placeHolderschequeos["Spanish"]["Obligacion"] = "";
	$fieldLabelschequeos["Spanish"]["Costas"] = "Costas";
	$fieldToolTipschequeos["Spanish"]["Costas"] = "";
	$placeHolderschequeos["Spanish"]["Costas"] = "";
	$fieldLabelschequeos["Spanish"]["Remisorio"] = "Remisorio";
	$fieldToolTipschequeos["Spanish"]["Remisorio"] = "";
	$placeHolderschequeos["Spanish"]["Remisorio"] = "";
	$fieldLabelschequeos["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipschequeos["Spanish"]["CarteraTipoId"] = "";
	$placeHolderschequeos["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelschequeos["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipschequeos["Spanish"]["MinJusticia"] = "";
	$placeHolderschequeos["Spanish"]["MinJusticia"] = "";
	$fieldLabelschequeos["Spanish"]["Aprobado"] = "Aprobado";
	$fieldToolTipschequeos["Spanish"]["Aprobado"] = "";
	$placeHolderschequeos["Spanish"]["Aprobado"] = "";
	$fieldLabelschequeos["Spanish"]["AprobadoPor"] = "Autorizado Por";
	$fieldToolTipschequeos["Spanish"]["AprobadoPor"] = "";
	$placeHolderschequeos["Spanish"]["AprobadoPor"] = "";
	$fieldLabelschequeos["Spanish"]["FechaAprobacion"] = "F. Autorización";
	$fieldToolTipschequeos["Spanish"]["FechaAprobacion"] = "";
	$placeHolderschequeos["Spanish"]["FechaAprobacion"] = "";
	$fieldLabelschequeos["Spanish"]["Plazo"] = "Plazo";
	$fieldToolTipschequeos["Spanish"]["Plazo"] = "";
	$placeHolderschequeos["Spanish"]["Plazo"] = "";
	$fieldLabelschequeos["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipschequeos["Spanish"]["NaturalezaId"] = "";
	$placeHolderschequeos["Spanish"]["NaturalezaId"] = "";
	$fieldLabelschequeos["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipschequeos["Spanish"]["Sigobius"] = "";
	$placeHolderschequeos["Spanish"]["Sigobius"] = "";
	$fieldLabelschequeos["Spanish"]["Monto"] = "Monto";
	$fieldToolTipschequeos["Spanish"]["Monto"] = "";
	$placeHolderschequeos["Spanish"]["Monto"] = "";
	$fieldLabelschequeos["Spanish"]["TramiteId"] = "Tramite";
	$fieldToolTipschequeos["Spanish"]["TramiteId"] = "";
	$placeHolderschequeos["Spanish"]["TramiteId"] = "";
	$fieldLabelschequeos["Spanish"]["Fisico"] = "Fisico";
	$fieldToolTipschequeos["Spanish"]["Fisico"] = "";
	$placeHolderschequeos["Spanish"]["Fisico"] = "";
	$fieldLabelschequeos["Spanish"]["Digital"] = "Digital";
	$fieldToolTipschequeos["Spanish"]["Digital"] = "";
	$placeHolderschequeos["Spanish"]["Digital"] = "";
	$fieldLabelschequeos["Spanish"]["ChequeoId"] = "# Chequeo";
	$fieldToolTipschequeos["Spanish"]["ChequeoId"] = "";
	$placeHolderschequeos["Spanish"]["ChequeoId"] = "";
	$fieldLabelschequeos["Spanish"]["CantidadLetras"] = "Cantidad Letras";
	$fieldToolTipschequeos["Spanish"]["CantidadLetras"] = "";
	$placeHolderschequeos["Spanish"]["CantidadLetras"] = "";
	$fieldLabelschequeos["Spanish"]["ObligacionLetras"] = "Obligacion Letras";
	$fieldToolTipschequeos["Spanish"]["ObligacionLetras"] = "";
	$placeHolderschequeos["Spanish"]["ObligacionLetras"] = "";
	if (count($fieldToolTipschequeos["Spanish"]))
		$tdatachequeos[".isUseToolTips"] = true;
}


	$tdatachequeos[".NCSearch"] = true;



$tdatachequeos[".shortTableName"] = "chequeos";
$tdatachequeos[".nSecOptions"] = 0;

$tdatachequeos[".mainTableOwnerID"] = "";
$tdatachequeos[".entityType"] = 0;
$tdatachequeos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatachequeos[".strOriginalTableName"] = "dbo.Chequeos";

	



$tdatachequeos[".showAddInPopup"] = false;

$tdatachequeos[".showEditInPopup"] = false;

$tdatachequeos[".showViewInPopup"] = false;

$tdatachequeos[".listAjax"] = false;
//	temporary
//$tdatachequeos[".listAjax"] = false;

	$tdatachequeos[".audit"] = true;

	$tdatachequeos[".locking"] = false;


$pages = $tdatachequeos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachequeos[".edit"] = true;
	$tdatachequeos[".afterEditAction"] = 0;
	$tdatachequeos[".closePopupAfterEdit"] = 1;
	$tdatachequeos[".afterEditActionDetTable"] = "dbo.ChequeosOficios";
}

if( $pages[PAGE_ADD] ) {
$tdatachequeos[".add"] = true;
$tdatachequeos[".afterAddAction"] = 1;
$tdatachequeos[".closePopupAfterAdd"] = 1;
$tdatachequeos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachequeos[".list"] = true;
}



$tdatachequeos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachequeos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachequeos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachequeos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachequeos[".printFriendly"] = true;
}



$tdatachequeos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachequeos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachequeos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachequeos[".isUseAjaxSuggest"] = true;



								
							
							
																																																																																									

$tdatachequeos[".ajaxCodeSnippetAdded"] = false;

$tdatachequeos[".buttonsAdded"] = true;

$tdatachequeos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachequeos[".isUseTimeForSearch"] = false;


$tdatachequeos[".badgeColor"] = "CFAE83";


$tdatachequeos[".allSearchFields"] = array();
$tdatachequeos[".filterFields"] = array();
$tdatachequeos[".requiredSearchFields"] = array();

$tdatachequeos[".googleLikeFields"] = array();
$tdatachequeos[".googleLikeFields"][] = "CantidadLetras";
$tdatachequeos[".googleLikeFields"][] = "ObligacionLetras";
$tdatachequeos[".googleLikeFields"][] = "ConceptoId";
$tdatachequeos[".googleLikeFields"][] = "AbogadoId";
$tdatachequeos[".googleLikeFields"][] = "Fecha";
$tdatachequeos[".googleLikeFields"][] = "DespachoId";
$tdatachequeos[".googleLikeFields"][] = "Origen";
$tdatachequeos[".googleLikeFields"][] = "Providencia";
$tdatachequeos[".googleLikeFields"][] = "Ejecutoria";
$tdatachequeos[".googleLikeFields"][] = "PrimeraCopia";
$tdatachequeos[".googleLikeFields"][] = "Autentica";
$tdatachequeos[".googleLikeFields"][] = "PrestaMeritoEjecutivo";
$tdatachequeos[".googleLikeFields"][] = "Clara";
$tdatachequeos[".googleLikeFields"][] = "Expresa";
$tdatachequeos[".googleLikeFields"][] = "ActualmenteExigible";
$tdatachequeos[".googleLikeFields"][] = "CompetenciaDEAJ";
$tdatachequeos[".googleLikeFields"][] = "FaltaRequisitos";
$tdatachequeos[".googleLikeFields"][] = "FaltaCompetencia";
$tdatachequeos[".googleLikeFields"][] = "PorPrescripcion";
$tdatachequeos[".googleLikeFields"][] = "SeccionalId";
$tdatachequeos[".googleLikeFields"][] = "Folios";
$tdatachequeos[".googleLikeFields"][] = "SeccionalIdDestino";
$tdatachequeos[".googleLikeFields"][] = "Observaciones";
$tdatachequeos[".googleLikeFields"][] = "Procesado";
$tdatachequeos[".googleLikeFields"][] = "Tipo";
$tdatachequeos[".googleLikeFields"][] = "FechaSancion";
$tdatachequeos[".googleLikeFields"][] = "Cantidad";
$tdatachequeos[".googleLikeFields"][] = "Obligacion";
$tdatachequeos[".googleLikeFields"][] = "Costas";
$tdatachequeos[".googleLikeFields"][] = "Remisorio";
$tdatachequeos[".googleLikeFields"][] = "CarteraTipoId";
$tdatachequeos[".googleLikeFields"][] = "MinJusticia";
$tdatachequeos[".googleLikeFields"][] = "Aprobado";
$tdatachequeos[".googleLikeFields"][] = "AprobadoPor";
$tdatachequeos[".googleLikeFields"][] = "FechaAprobacion";
$tdatachequeos[".googleLikeFields"][] = "Plazo";
$tdatachequeos[".googleLikeFields"][] = "NaturalezaId";
$tdatachequeos[".googleLikeFields"][] = "Sigobius";
$tdatachequeos[".googleLikeFields"][] = "Monto";
$tdatachequeos[".googleLikeFields"][] = "TramiteId";
$tdatachequeos[".googleLikeFields"][] = "Fisico";
$tdatachequeos[".googleLikeFields"][] = "Digital";
$tdatachequeos[".googleLikeFields"][] = "ChequeoId";



$tdatachequeos[".tableType"] = "list";

$tdatachequeos[".printerPageOrientation"] = 0;
$tdatachequeos[".nPrinterPageScale"] = 100;

$tdatachequeos[".nPrinterSplitRecords"] = 40;

$tdatachequeos[".geocodingEnabled"] = false;





$tdatachequeos[".isResizeColumns"] = true;





$tdatachequeos[".pageSize"] = 20;

$tdatachequeos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ChequeoId DESC";
$tdatachequeos[".strOrderBy"] = $tstrOrderBy;

$tdatachequeos[".orderindexes"] = array();
	$tdatachequeos[".orderindexes"][] = array(43, (0 ? "ASC" : "DESC"), "ChequeoId");



$tdatachequeos[".sqlHead"] = "SELECT '' AS CantidadLetras,  '' AS ObligacionLetras,  ConceptoId,  AbogadoId,  Fecha,  DespachoId,  Origen,  Providencia,  Ejecutoria,  PrimeraCopia,  Autentica,  PrestaMeritoEjecutivo,  Clara,  Expresa,  ActualmenteExigible,  CompetenciaDEAJ,  FaltaRequisitos,  FaltaCompetencia,  PorPrescripcion,  SeccionalId,  Folios,  SeccionalIdDestino,  Observaciones,  Procesado,  Tipo,  FechaSancion,  Cantidad,  Obligacion,  Costas,  Remisorio,  CarteraTipoId,  MinJusticia,  Aprobado,  AprobadoPor,  FechaAprobacion,  Plazo,  NaturalezaId,  Sigobius,  Monto,  TramiteId,  Fisico,  Digital,  ChequeoId";
$tdatachequeos[".sqlFrom"] = "FROM dbo.Chequeos";
$tdatachequeos[".sqlWhereExpr"] = "(SeccionalId in (:session.SeccionalesWhere))";
$tdatachequeos[".sqlTail"] = "";

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
$tdatachequeos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachequeos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachequeos[".arrGroupsPerPage"] = $arrGPP;

$tdatachequeos[".highlightSearchResults"] = true;

$tableKeyschequeos = array();
$tableKeyschequeos[] = "ChequeoId";
$tdatachequeos[".Keys"] = $tableKeyschequeos;


$tdatachequeos[".hideMobileList"] = array();




//	CantidadLetras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CantidadLetras";
	$fdata["GoodName"] = "CantidadLetras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","CantidadLetras");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CantidadLetras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatachequeos["CantidadLetras"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "CantidadLetras";
//	ObligacionLetras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ObligacionLetras";
	$fdata["GoodName"] = "ObligacionLetras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","ObligacionLetras");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ObligacionLetras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatachequeos["ObligacionLetras"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "ObligacionLetras";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoId";

	
	
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
	$edata["LookupTable"] = "dbo.Conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Concepto";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "NaturalezaId";

	
	
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


	$tdatachequeos["ConceptoId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "ConceptoId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

				$edata["LookupWhere"] = "Activo=1";


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "SeccionalId", "lookup" => "SeccionalId" );

	
	

	
	
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


	$tdatachequeos["AbogadoId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "AbogadoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["Fecha"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Fecha";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","DespachoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoId";

	
	
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
	$edata["LookupTable"] = "dbo.Despachos1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "D.Codigo + ' -  ' +D. Despacho";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "SeccionalId", "lookup" => "SeccionalId" );

	
	

	
	
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


	$tdatachequeos["DespachoId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "DespachoId";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

		$fdata["sourceSingle"] = "Origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Origen";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=23";

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


	$tdatachequeos["Origen"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Origen";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Providencia";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["Providencia"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejecutoria";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["Ejecutoria"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Ejecutoria";
//	PrimeraCopia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PrimeraCopia";
	$fdata["GoodName"] = "PrimeraCopia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","PrimeraCopia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PrimeraCopia";

		$fdata["sourceSingle"] = "PrimeraCopia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimeraCopia";

	
	
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


	$tdatachequeos["PrimeraCopia"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "PrimeraCopia";
//	Autentica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Autentica";
	$fdata["GoodName"] = "Autentica";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Autentica");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Autentica";

		$fdata["sourceSingle"] = "Autentica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Autentica";

	
	
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


	$tdatachequeos["Autentica"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Autentica";
//	PrestaMeritoEjecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PrestaMeritoEjecutivo";
	$fdata["GoodName"] = "PrestaMeritoEjecutivo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","PrestaMeritoEjecutivo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PrestaMeritoEjecutivo";

		$fdata["sourceSingle"] = "PrestaMeritoEjecutivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrestaMeritoEjecutivo";

	
	
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


	$tdatachequeos["PrestaMeritoEjecutivo"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "PrestaMeritoEjecutivo";
//	Clara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Clara";
	$fdata["GoodName"] = "Clara";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Clara");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Clara";

		$fdata["sourceSingle"] = "Clara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clara";

	
	
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


	$tdatachequeos["Clara"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Clara";
//	Expresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Expresa";
	$fdata["GoodName"] = "Expresa";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Expresa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Expresa";

		$fdata["sourceSingle"] = "Expresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Expresa";

	
	
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


	$tdatachequeos["Expresa"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Expresa";
//	ActualmenteExigible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ActualmenteExigible";
	$fdata["GoodName"] = "ActualmenteExigible";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","ActualmenteExigible");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "ActualmenteExigible";

		$fdata["sourceSingle"] = "ActualmenteExigible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActualmenteExigible";

	
	
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


	$tdatachequeos["ActualmenteExigible"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "ActualmenteExigible";
//	CompetenciaDEAJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CompetenciaDEAJ";
	$fdata["GoodName"] = "CompetenciaDEAJ";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","CompetenciaDEAJ");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "CompetenciaDEAJ";

		$fdata["sourceSingle"] = "CompetenciaDEAJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompetenciaDEAJ";

	
	
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


	$tdatachequeos["CompetenciaDEAJ"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "CompetenciaDEAJ";
//	FaltaRequisitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FaltaRequisitos";
	$fdata["GoodName"] = "FaltaRequisitos";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","FaltaRequisitos");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "FaltaRequisitos";

		$fdata["sourceSingle"] = "FaltaRequisitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FaltaRequisitos";

	
	
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


	$tdatachequeos["FaltaRequisitos"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "FaltaRequisitos";
//	FaltaCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "FaltaCompetencia";
	$fdata["GoodName"] = "FaltaCompetencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","FaltaCompetencia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "FaltaCompetencia";

		$fdata["sourceSingle"] = "FaltaCompetencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FaltaCompetencia";

	
	
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


	$tdatachequeos["FaltaCompetencia"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "FaltaCompetencia";
//	PorPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PorPrescripcion";
	$fdata["GoodName"] = "PorPrescripcion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","PorPrescripcion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PorPrescripcion";

		$fdata["sourceSingle"] = "PorPrescripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PorPrescripcion";

	
	
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


	$tdatachequeos["PorPrescripcion"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "PorPrescripcion";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalId";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional";

				$edata["LookupWhere"] = "SeccionalId in (:session.SeccionalesWhere)";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AbogadoId";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "DespachoId";

	
	
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


	$tdatachequeos["SeccionalId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "SeccionalId";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Folios");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Folios";

		$fdata["sourceSingle"] = "Folios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Folios";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatachequeos["Folios"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Folios";
//	SeccionalIdDestino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SeccionalIdDestino";
	$fdata["GoodName"] = "SeccionalIdDestino";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","SeccionalIdDestino");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalIdDestino";

		$fdata["sourceSingle"] = "SeccionalIdDestino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalIdDestino";

	
	
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


	$tdatachequeos["SeccionalIdDestino"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "SeccionalIdDestino";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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


	$tdatachequeos["Observaciones"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Observaciones";
//	Procesado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Procesado";
	$fdata["GoodName"] = "Procesado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Procesado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Procesado";

		$fdata["sourceSingle"] = "Procesado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesado";

	
	
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


	$tdatachequeos["Procesado"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Procesado";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Tipo_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.tipoCobro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tipo";

	

	
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


	$tdatachequeos["Tipo"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Tipo";
//	FechaSancion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "FechaSancion";
	$fdata["GoodName"] = "FechaSancion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","FechaSancion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FechaSancion";

		$fdata["sourceSingle"] = "FechaSancion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSancion";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["FechaSancion"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "FechaSancion";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Cantidad");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Tipo_event1", "type" => "editing" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatachequeos["Cantidad"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "editing" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "change" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "blur" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatachequeos["Obligacion"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatachequeos["Costas"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Costas";
//	Remisorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Remisorio";
	$fdata["GoodName"] = "Remisorio";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Remisorio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Remisorio";

		$fdata["sourceSingle"] = "Remisorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remisorio";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatachequeos["Remisorio"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Remisorio";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CarteraTipo";

	

	
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


	$tdatachequeos["CarteraTipoId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "CarteraTipoId";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","MinJusticia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "MinJusticia";

		$fdata["sourceSingle"] = "MinJusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinJusticia";

	
	
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


	$tdatachequeos["MinJusticia"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "MinJusticia";
//	Aprobado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Aprobado";
	$fdata["GoodName"] = "Aprobado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Aprobado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aprobado";

		$fdata["sourceSingle"] = "Aprobado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Aprobado";

	
	
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


	$tdatachequeos["Aprobado"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Aprobado";
//	AprobadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "AprobadoPor";
	$fdata["GoodName"] = "AprobadoPor";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","AprobadoPor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AprobadoPor";

		$fdata["sourceSingle"] = "AprobadoPor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AprobadoPor";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatachequeos["AprobadoPor"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "AprobadoPor";
//	FechaAprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "FechaAprobacion";
	$fdata["GoodName"] = "FechaAprobacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","FechaAprobacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FechaAprobacion";

		$fdata["sourceSingle"] = "FechaAprobacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaAprobacion";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["FechaAprobacion"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "FechaAprobacion";
//	Plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Plazo";
	$fdata["GoodName"] = "Plazo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Plazo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Plazo";

		$fdata["sourceSingle"] = "Plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Plazo";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatachequeos["Plazo"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Plazo";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","NaturalezaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NaturalezaId";

	
	
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
	$edata["LookupTable"] = "dbo.Naturalezas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Naturaleza";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ConceptoId", "lookup" => "ConceptoId" );

	
	

	
	
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


	$tdatachequeos["NaturalezaId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "NaturalezaId";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Sigobius");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdatachequeos["Sigobius"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Sigobius";
//	Monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Monto";
	$fdata["GoodName"] = "Monto";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Monto");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Monto";

		$fdata["sourceSingle"] = "Monto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Monto";

	
	
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


	$tdatachequeos["Monto"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Monto";
//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","TramiteId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TramiteId";

		$fdata["sourceSingle"] = "TramiteId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TramiteId";

	
	
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
	$edata["LookupTable"] = "dbo.Tramites";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TramiteId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tramite";

	

	
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


	$tdatachequeos["TramiteId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "TramiteId";
//	Fisico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Fisico";
	$fdata["GoodName"] = "Fisico";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Fisico");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Fisico";

		$fdata["sourceSingle"] = "Fisico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fisico";

	
	
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


	$tdatachequeos["Fisico"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Fisico";
//	Digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Digital";
	$fdata["GoodName"] = "Digital";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","Digital");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Digital";

		$fdata["sourceSingle"] = "Digital";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Digital";

	
	
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


	$tdatachequeos["Digital"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "Digital";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Chequeos","ChequeoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeoId";

	
	
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


	$tdatachequeos["ChequeoId"] = $fdata;
		$tdatachequeos[".searchableFields"][] = "ChequeoId";


$tables_data["dbo.Chequeos"]=&$tdatachequeos;
$field_labels["dbo_Chequeos"] = &$fieldLabelschequeos;
$fieldToolTips["dbo_Chequeos"] = &$fieldToolTipschequeos;
$placeHolders["dbo_Chequeos"] = &$placeHolderschequeos;
$page_titles["dbo_Chequeos"] = &$pageTitleschequeos;


changeTextControlsToDate( "dbo.Chequeos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Chequeos"] = array();
//	dbo.ChequeosOficios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosOficios";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosOficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeosoficios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosOficios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//	dbo.ChequeosSancionados
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosSancionados";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosSancionados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeossancionados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosSancionados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//	dbo.Devoluciones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Devoluciones";
		$detailsParam["dOriginalTable"] = "dbo.Devoluciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "devoluciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Devoluciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Chequeos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Chequeos"][0] = $masterParams;
				$masterTablesData["dbo.Chequeos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Chequeos"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Chequeos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Chequeos"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chequeos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'' AS CantidadLetras,  '' AS ObligacionLetras,  ConceptoId,  AbogadoId,  Fecha,  DespachoId,  Origen,  Providencia,  Ejecutoria,  PrimeraCopia,  Autentica,  PrestaMeritoEjecutivo,  Clara,  Expresa,  ActualmenteExigible,  CompetenciaDEAJ,  FaltaRequisitos,  FaltaCompetencia,  PorPrescripcion,  SeccionalId,  Folios,  SeccionalIdDestino,  Observaciones,  Procesado,  Tipo,  FechaSancion,  Cantidad,  Obligacion,  Costas,  Remisorio,  CarteraTipoId,  MinJusticia,  Aprobado,  AprobadoPor,  FechaAprobacion,  Plazo,  NaturalezaId,  Sigobius,  Monto,  TramiteId,  Fisico,  Digital,  ChequeoId";
$proto0["m_strFrom"] = "FROM dbo.Chequeos";
$proto0["m_strWhere"] = "(SeccionalId in (:session.SeccionalesWhere))";
$proto0["m_strOrderBy"] = "ORDER BY ChequeoId DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "SeccionalId in (:session.SeccionalesWhere)";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in (:session.SeccionalesWhere)";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto6["m_sql"] = "''";
$proto6["m_srcTableName"] = "dbo.Chequeos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "CantidadLetras";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto8["m_sql"] = "''";
$proto8["m_srcTableName"] = "dbo.Chequeos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "ObligacionLetras";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto10["m_sql"] = "ConceptoId";
$proto10["m_srcTableName"] = "dbo.Chequeos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto12["m_sql"] = "AbogadoId";
$proto12["m_srcTableName"] = "dbo.Chequeos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto14["m_sql"] = "Fecha";
$proto14["m_srcTableName"] = "dbo.Chequeos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto16["m_sql"] = "DespachoId";
$proto16["m_srcTableName"] = "dbo.Chequeos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto18["m_sql"] = "Origen";
$proto18["m_srcTableName"] = "dbo.Chequeos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto20["m_sql"] = "Providencia";
$proto20["m_srcTableName"] = "dbo.Chequeos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto22["m_sql"] = "Ejecutoria";
$proto22["m_srcTableName"] = "dbo.Chequeos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimeraCopia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto24["m_sql"] = "PrimeraCopia";
$proto24["m_srcTableName"] = "dbo.Chequeos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Autentica",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto26["m_sql"] = "Autentica";
$proto26["m_srcTableName"] = "dbo.Chequeos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PrestaMeritoEjecutivo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto28["m_sql"] = "PrestaMeritoEjecutivo";
$proto28["m_srcTableName"] = "dbo.Chequeos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Clara",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto30["m_sql"] = "Clara";
$proto30["m_srcTableName"] = "dbo.Chequeos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Expresa",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto32["m_sql"] = "Expresa";
$proto32["m_srcTableName"] = "dbo.Chequeos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ActualmenteExigible",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto34["m_sql"] = "ActualmenteExigible";
$proto34["m_srcTableName"] = "dbo.Chequeos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CompetenciaDEAJ",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto36["m_sql"] = "CompetenciaDEAJ";
$proto36["m_srcTableName"] = "dbo.Chequeos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaRequisitos",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto38["m_sql"] = "FaltaRequisitos";
$proto38["m_srcTableName"] = "dbo.Chequeos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaCompetencia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto40["m_sql"] = "FaltaCompetencia";
$proto40["m_srcTableName"] = "dbo.Chequeos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PorPrescripcion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto42["m_sql"] = "PorPrescripcion";
$proto42["m_srcTableName"] = "dbo.Chequeos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto44["m_sql"] = "SeccionalId";
$proto44["m_srcTableName"] = "dbo.Chequeos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto46["m_sql"] = "Folios";
$proto46["m_srcTableName"] = "dbo.Chequeos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalIdDestino",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto48["m_sql"] = "SeccionalIdDestino";
$proto48["m_srcTableName"] = "dbo.Chequeos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto50["m_sql"] = "Observaciones";
$proto50["m_srcTableName"] = "dbo.Chequeos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto52["m_sql"] = "Procesado";
$proto52["m_srcTableName"] = "dbo.Chequeos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto54["m_sql"] = "Tipo";
$proto54["m_srcTableName"] = "dbo.Chequeos";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSancion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto56["m_sql"] = "FechaSancion";
$proto56["m_srcTableName"] = "dbo.Chequeos";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto58["m_sql"] = "Cantidad";
$proto58["m_srcTableName"] = "dbo.Chequeos";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto60["m_sql"] = "Obligacion";
$proto60["m_srcTableName"] = "dbo.Chequeos";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto62["m_sql"] = "Costas";
$proto62["m_srcTableName"] = "dbo.Chequeos";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Remisorio",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto64["m_sql"] = "Remisorio";
$proto64["m_srcTableName"] = "dbo.Chequeos";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto66["m_sql"] = "CarteraTipoId";
$proto66["m_srcTableName"] = "dbo.Chequeos";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto68["m_sql"] = "MinJusticia";
$proto68["m_srcTableName"] = "dbo.Chequeos";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobado",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto70["m_sql"] = "Aprobado";
$proto70["m_srcTableName"] = "dbo.Chequeos";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "AprobadoPor",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto72["m_sql"] = "AprobadoPor";
$proto72["m_srcTableName"] = "dbo.Chequeos";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAprobacion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto74["m_sql"] = "FechaAprobacion";
$proto74["m_srcTableName"] = "dbo.Chequeos";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto76["m_sql"] = "Plazo";
$proto76["m_srcTableName"] = "dbo.Chequeos";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto78["m_sql"] = "NaturalezaId";
$proto78["m_srcTableName"] = "dbo.Chequeos";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto80["m_sql"] = "Sigobius";
$proto80["m_srcTableName"] = "dbo.Chequeos";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Monto",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto82["m_sql"] = "Monto";
$proto82["m_srcTableName"] = "dbo.Chequeos";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "TramiteId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto84["m_sql"] = "TramiteId";
$proto84["m_srcTableName"] = "dbo.Chequeos";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Fisico",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto86["m_sql"] = "Fisico";
$proto86["m_srcTableName"] = "dbo.Chequeos";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Digital",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto88["m_sql"] = "Digital";
$proto88["m_srcTableName"] = "dbo.Chequeos";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto90["m_sql"] = "ChequeoId";
$proto90["m_srcTableName"] = "dbo.Chequeos";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "dbo.Chequeos";
$proto93["m_srcTableName"] = "dbo.Chequeos";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "ChequeoId";
$proto93["m_columns"][] = "ConceptoId";
$proto93["m_columns"][] = "AbogadoId";
$proto93["m_columns"][] = "Fecha";
$proto93["m_columns"][] = "DespachoId";
$proto93["m_columns"][] = "Origen";
$proto93["m_columns"][] = "Providencia";
$proto93["m_columns"][] = "Ejecutoria";
$proto93["m_columns"][] = "PrimeraCopia";
$proto93["m_columns"][] = "Autentica";
$proto93["m_columns"][] = "PrestaMeritoEjecutivo";
$proto93["m_columns"][] = "Clara";
$proto93["m_columns"][] = "Expresa";
$proto93["m_columns"][] = "ActualmenteExigible";
$proto93["m_columns"][] = "CompetenciaDEAJ";
$proto93["m_columns"][] = "FaltaRequisitos";
$proto93["m_columns"][] = "FaltaCompetencia";
$proto93["m_columns"][] = "PorPrescripcion";
$proto93["m_columns"][] = "SeccionalId";
$proto93["m_columns"][] = "Folios";
$proto93["m_columns"][] = "SeccionalIdDestino";
$proto93["m_columns"][] = "Observaciones";
$proto93["m_columns"][] = "Procesado";
$proto93["m_columns"][] = "Tipo";
$proto93["m_columns"][] = "FechaSancion";
$proto93["m_columns"][] = "Cantidad";
$proto93["m_columns"][] = "Obligacion";
$proto93["m_columns"][] = "Costas";
$proto93["m_columns"][] = "Remisorio";
$proto93["m_columns"][] = "CarteraTipoId";
$proto93["m_columns"][] = "MinJusticia";
$proto93["m_columns"][] = "Aprobado";
$proto93["m_columns"][] = "AprobadoPor";
$proto93["m_columns"][] = "FechaAprobacion";
$proto93["m_columns"][] = "Plazo";
$proto93["m_columns"][] = "NaturalezaId";
$proto93["m_columns"][] = "Sigobius";
$proto93["m_columns"][] = "Monto";
$proto93["m_columns"][] = "TramiteId";
$proto93["m_columns"][] = "Fisico";
$proto93["m_columns"][] = "Digital";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "dbo.Chequeos";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "dbo.Chequeos";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.Chequeos"
));

$proto96["m_column"]=$obj;
$proto96["m_bAsc"] = 0;
$proto96["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto96);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Chequeos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chequeos = createSqlQuery_chequeos();


	
		;

																																											

$tdatachequeos[".sqlquery"] = $queryData_chequeos;



include_once(getabspath("include/chequeos_events.php"));
$tdatachequeos[".hasEvents"] = true;

?>