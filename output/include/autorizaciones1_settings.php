<?php
$tdataautorizaciones1 = array();
$tdataautorizaciones1[".searchableFields"] = array();
$tdataautorizaciones1[".ShortName"] = "autorizaciones1";
$tdataautorizaciones1[".OwnerID"] = "";
$tdataautorizaciones1[".OriginalTable"] = "dbo.Chequeos";


$tdataautorizaciones1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataautorizaciones1[".originalPagesByType"] = $tdataautorizaciones1[".pagesByType"];
$tdataautorizaciones1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataautorizaciones1[".originalPages"] = $tdataautorizaciones1[".pages"];
$tdataautorizaciones1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataautorizaciones1[".originalDefaultPages"] = $tdataautorizaciones1[".defaultPages"];

//	field labels
$fieldLabelsautorizaciones1 = array();
$fieldToolTipsautorizaciones1 = array();
$pageTitlesautorizaciones1 = array();
$placeHoldersautorizaciones1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsautorizaciones1["Spanish"] = array();
	$fieldToolTipsautorizaciones1["Spanish"] = array();
	$placeHoldersautorizaciones1["Spanish"] = array();
	$pageTitlesautorizaciones1["Spanish"] = array();
	$fieldLabelsautorizaciones1["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsautorizaciones1["Spanish"]["ConceptoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["ConceptoId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["AbogadoId"] = "Abogado";
	$fieldToolTipsautorizaciones1["Spanish"]["AbogadoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["AbogadoId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsautorizaciones1["Spanish"]["Fecha"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Fecha"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["DespachoId"] = "Competencia";
	$fieldToolTipsautorizaciones1["Spanish"]["DespachoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["DespachoId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Origen"] = "No. Radicado de Origen";
	$fieldToolTipsautorizaciones1["Spanish"]["Origen"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Origen"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Providencia"] = "Providencia";
	$fieldToolTipsautorizaciones1["Spanish"]["Providencia"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Providencia"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipsautorizaciones1["Spanish"]["Ejecutoria"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["PrimeraCopia"] = "Primera Copia";
	$fieldToolTipsautorizaciones1["Spanish"]["PrimeraCopia"] = "";
	$placeHoldersautorizaciones1["Spanish"]["PrimeraCopia"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Autentica"] = "Autentica";
	$fieldToolTipsautorizaciones1["Spanish"]["Autentica"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Autentica"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["PrestaMeritoEjecutivo"] = "Presta Merito Ejecutivo";
	$fieldToolTipsautorizaciones1["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$placeHoldersautorizaciones1["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Clara"] = "Clara";
	$fieldToolTipsautorizaciones1["Spanish"]["Clara"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Clara"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Expresa"] = "Expresa";
	$fieldToolTipsautorizaciones1["Spanish"]["Expresa"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Expresa"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["ActualmenteExigible"] = "Actualmente Exigible";
	$fieldToolTipsautorizaciones1["Spanish"]["ActualmenteExigible"] = "";
	$placeHoldersautorizaciones1["Spanish"]["ActualmenteExigible"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["CompetenciaDEAJ"] = "Competencia";
	$fieldToolTipsautorizaciones1["Spanish"]["CompetenciaDEAJ"] = "";
	$placeHoldersautorizaciones1["Spanish"]["CompetenciaDEAJ"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["FaltaRequisitos"] = "Falta de Requisitos";
	$fieldToolTipsautorizaciones1["Spanish"]["FaltaRequisitos"] = "";
	$placeHoldersautorizaciones1["Spanish"]["FaltaRequisitos"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["FaltaCompetencia"] = "Falta de Competencia";
	$fieldToolTipsautorizaciones1["Spanish"]["FaltaCompetencia"] = "";
	$placeHoldersautorizaciones1["Spanish"]["FaltaCompetencia"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["PorPrescripcion"] = "Por Prescripción";
	$fieldToolTipsautorizaciones1["Spanish"]["PorPrescripcion"] = "";
	$placeHoldersautorizaciones1["Spanish"]["PorPrescripcion"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsautorizaciones1["Spanish"]["SeccionalId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsautorizaciones1["Spanish"]["Folios"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Folios"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["SeccionalIdDestino"] = "Seccional Destino";
	$fieldToolTipsautorizaciones1["Spanish"]["SeccionalIdDestino"] = "";
	$placeHoldersautorizaciones1["Spanish"]["SeccionalIdDestino"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsautorizaciones1["Spanish"]["Observaciones"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Observaciones"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Procesado"] = "Procesado";
	$fieldToolTipsautorizaciones1["Spanish"]["Procesado"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Procesado"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsautorizaciones1["Spanish"]["Tipo"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Tipo"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["FechaSancion"] = "Fecha Liquidación";
	$fieldToolTipsautorizaciones1["Spanish"]["FechaSancion"] = "";
	$placeHoldersautorizaciones1["Spanish"]["FechaSancion"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsautorizaciones1["Spanish"]["Cantidad"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Cantidad"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsautorizaciones1["Spanish"]["Obligacion"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Obligacion"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsautorizaciones1["Spanish"]["Costas"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Costas"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Remisorio"] = "Remisorio";
	$fieldToolTipsautorizaciones1["Spanish"]["Remisorio"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Remisorio"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsautorizaciones1["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipsautorizaciones1["Spanish"]["MinJusticia"] = "";
	$placeHoldersautorizaciones1["Spanish"]["MinJusticia"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Aprobado"] = "Aprobado";
	$fieldToolTipsautorizaciones1["Spanish"]["Aprobado"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Aprobado"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["AprobadoPor"] = "Autorizado Por";
	$fieldToolTipsautorizaciones1["Spanish"]["AprobadoPor"] = "";
	$placeHoldersautorizaciones1["Spanish"]["AprobadoPor"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["FechaAprobacion"] = "F. Autorización";
	$fieldToolTipsautorizaciones1["Spanish"]["FechaAprobacion"] = "";
	$placeHoldersautorizaciones1["Spanish"]["FechaAprobacion"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Plazo"] = "Plazo";
	$fieldToolTipsautorizaciones1["Spanish"]["Plazo"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Plazo"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipsautorizaciones1["Spanish"]["NaturalezaId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsautorizaciones1["Spanish"]["Sigobius"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Sigobius"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Monto"] = "Monto";
	$fieldToolTipsautorizaciones1["Spanish"]["Monto"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Monto"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["TramiteId"] = "Tramite";
	$fieldToolTipsautorizaciones1["Spanish"]["TramiteId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["TramiteId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Fisico"] = "Fisico";
	$fieldToolTipsautorizaciones1["Spanish"]["Fisico"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Fisico"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Digital"] = "Digital";
	$fieldToolTipsautorizaciones1["Spanish"]["Digital"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Digital"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["ChequeoId"] = "# Chequeo";
	$fieldToolTipsautorizaciones1["Spanish"]["ChequeoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["ChequeoId"] = "";
	if (count($fieldToolTipsautorizaciones1["Spanish"]))
		$tdataautorizaciones1[".isUseToolTips"] = true;
}


	$tdataautorizaciones1[".NCSearch"] = true;



$tdataautorizaciones1[".shortTableName"] = "autorizaciones1";
$tdataautorizaciones1[".nSecOptions"] = 0;

$tdataautorizaciones1[".mainTableOwnerID"] = "";
$tdataautorizaciones1[".entityType"] = 1;
$tdataautorizaciones1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataautorizaciones1[".strOriginalTableName"] = "dbo.Chequeos";

	



$tdataautorizaciones1[".showAddInPopup"] = false;

$tdataautorizaciones1[".showEditInPopup"] = false;

$tdataautorizaciones1[".showViewInPopup"] = false;

$tdataautorizaciones1[".listAjax"] = false;
//	temporary
//$tdataautorizaciones1[".listAjax"] = false;

	$tdataautorizaciones1[".audit"] = true;

	$tdataautorizaciones1[".locking"] = false;


$pages = $tdataautorizaciones1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataautorizaciones1[".edit"] = true;
	$tdataautorizaciones1[".afterEditAction"] = 1;
	$tdataautorizaciones1[".closePopupAfterEdit"] = 1;
	$tdataautorizaciones1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataautorizaciones1[".add"] = true;
$tdataautorizaciones1[".afterAddAction"] = 1;
$tdataautorizaciones1[".closePopupAfterAdd"] = 1;
$tdataautorizaciones1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataautorizaciones1[".list"] = true;
}



$tdataautorizaciones1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataautorizaciones1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataautorizaciones1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataautorizaciones1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataautorizaciones1[".printFriendly"] = true;
}



$tdataautorizaciones1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataautorizaciones1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataautorizaciones1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataautorizaciones1[".isUseAjaxSuggest"] = true;



											
										
										
																										

$tdataautorizaciones1[".ajaxCodeSnippetAdded"] = false;

$tdataautorizaciones1[".buttonsAdded"] = true;

$tdataautorizaciones1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataautorizaciones1[".isUseTimeForSearch"] = false;


$tdataautorizaciones1[".badgeColor"] = "7B68EE";


$tdataautorizaciones1[".allSearchFields"] = array();
$tdataautorizaciones1[".filterFields"] = array();
$tdataautorizaciones1[".requiredSearchFields"] = array();

$tdataautorizaciones1[".googleLikeFields"] = array();
$tdataautorizaciones1[".googleLikeFields"][] = "ConceptoId";
$tdataautorizaciones1[".googleLikeFields"][] = "AbogadoId";
$tdataautorizaciones1[".googleLikeFields"][] = "Fecha";
$tdataautorizaciones1[".googleLikeFields"][] = "DespachoId";
$tdataautorizaciones1[".googleLikeFields"][] = "Origen";
$tdataautorizaciones1[".googleLikeFields"][] = "Providencia";
$tdataautorizaciones1[".googleLikeFields"][] = "Ejecutoria";
$tdataautorizaciones1[".googleLikeFields"][] = "PrimeraCopia";
$tdataautorizaciones1[".googleLikeFields"][] = "Autentica";
$tdataautorizaciones1[".googleLikeFields"][] = "PrestaMeritoEjecutivo";
$tdataautorizaciones1[".googleLikeFields"][] = "Clara";
$tdataautorizaciones1[".googleLikeFields"][] = "Expresa";
$tdataautorizaciones1[".googleLikeFields"][] = "ActualmenteExigible";
$tdataautorizaciones1[".googleLikeFields"][] = "CompetenciaDEAJ";
$tdataautorizaciones1[".googleLikeFields"][] = "FaltaRequisitos";
$tdataautorizaciones1[".googleLikeFields"][] = "FaltaCompetencia";
$tdataautorizaciones1[".googleLikeFields"][] = "PorPrescripcion";
$tdataautorizaciones1[".googleLikeFields"][] = "SeccionalId";
$tdataautorizaciones1[".googleLikeFields"][] = "Folios";
$tdataautorizaciones1[".googleLikeFields"][] = "SeccionalIdDestino";
$tdataautorizaciones1[".googleLikeFields"][] = "Observaciones";
$tdataautorizaciones1[".googleLikeFields"][] = "Procesado";
$tdataautorizaciones1[".googleLikeFields"][] = "Tipo";
$tdataautorizaciones1[".googleLikeFields"][] = "FechaSancion";
$tdataautorizaciones1[".googleLikeFields"][] = "Cantidad";
$tdataautorizaciones1[".googleLikeFields"][] = "Obligacion";
$tdataautorizaciones1[".googleLikeFields"][] = "Costas";
$tdataautorizaciones1[".googleLikeFields"][] = "Remisorio";
$tdataautorizaciones1[".googleLikeFields"][] = "CarteraTipoId";
$tdataautorizaciones1[".googleLikeFields"][] = "MinJusticia";
$tdataautorizaciones1[".googleLikeFields"][] = "Aprobado";
$tdataautorizaciones1[".googleLikeFields"][] = "AprobadoPor";
$tdataautorizaciones1[".googleLikeFields"][] = "FechaAprobacion";
$tdataautorizaciones1[".googleLikeFields"][] = "Plazo";
$tdataautorizaciones1[".googleLikeFields"][] = "NaturalezaId";
$tdataautorizaciones1[".googleLikeFields"][] = "Sigobius";
$tdataautorizaciones1[".googleLikeFields"][] = "Monto";
$tdataautorizaciones1[".googleLikeFields"][] = "TramiteId";
$tdataautorizaciones1[".googleLikeFields"][] = "Fisico";
$tdataautorizaciones1[".googleLikeFields"][] = "Digital";
$tdataautorizaciones1[".googleLikeFields"][] = "ChequeoId";



$tdataautorizaciones1[".tableType"] = "list";

$tdataautorizaciones1[".printerPageOrientation"] = 0;
$tdataautorizaciones1[".nPrinterPageScale"] = 100;

$tdataautorizaciones1[".nPrinterSplitRecords"] = 40;

$tdataautorizaciones1[".geocodingEnabled"] = false;





$tdataautorizaciones1[".isResizeColumns"] = true;





$tdataautorizaciones1[".pageSize"] = 20;

$tdataautorizaciones1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataautorizaciones1[".strOrderBy"] = $tstrOrderBy;

$tdataautorizaciones1[".orderindexes"] = array();


$tdataautorizaciones1[".sqlHead"] = "SELECT ConceptoId,  AbogadoId,  Fecha,  DespachoId,  Origen,  Providencia,  Ejecutoria,  PrimeraCopia,  Autentica,  PrestaMeritoEjecutivo,  Clara,  Expresa,  ActualmenteExigible,  CompetenciaDEAJ,  FaltaRequisitos,  FaltaCompetencia,  PorPrescripcion,  SeccionalId,  Folios,  SeccionalIdDestino,  Observaciones,  Procesado,  Tipo,  FechaSancion,  Cantidad,  Obligacion,  Costas,  Remisorio,  CarteraTipoId,  MinJusticia,  Aprobado,  AprobadoPor,  FechaAprobacion,  Plazo,  NaturalezaId,  Sigobius,  Monto,  TramiteId,  Fisico,  Digital,  ChequeoId";
$tdataautorizaciones1[".sqlFrom"] = "FROM dbo.Chequeos";
$tdataautorizaciones1[".sqlWhereExpr"] = "";
$tdataautorizaciones1[".sqlTail"] = "";

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
$tdataautorizaciones1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataautorizaciones1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataautorizaciones1[".arrGroupsPerPage"] = $arrGPP;

$tdataautorizaciones1[".highlightSearchResults"] = true;

$tableKeysautorizaciones1 = array();
$tableKeysautorizaciones1[] = "ChequeoId";
$tdataautorizaciones1[".Keys"] = $tableKeysautorizaciones1;


$tdataautorizaciones1[".hideMobileList"] = array();




//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","ConceptoId");
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


	$tdataautorizaciones1["ConceptoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "ConceptoId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","AbogadoId");
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


	$tdataautorizaciones1["AbogadoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "AbogadoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Fecha");
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


	$tdataautorizaciones1["Fecha"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Fecha";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","DespachoId");
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
	$edata["LookupTable"] = "dbo.Despachos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Codigo + ' -  ' + Despacho";

	

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


	$tdataautorizaciones1["DespachoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "DespachoId";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Origen");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=23";

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


	$tdataautorizaciones1["Origen"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Origen";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Providencia");
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


	$tdataautorizaciones1["Providencia"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Ejecutoria");
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


	$tdataautorizaciones1["Ejecutoria"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Ejecutoria";
//	PrimeraCopia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PrimeraCopia";
	$fdata["GoodName"] = "PrimeraCopia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","PrimeraCopia");
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


	$tdataautorizaciones1["PrimeraCopia"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "PrimeraCopia";
//	Autentica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Autentica";
	$fdata["GoodName"] = "Autentica";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Autentica");
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


	$tdataautorizaciones1["Autentica"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Autentica";
//	PrestaMeritoEjecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PrestaMeritoEjecutivo";
	$fdata["GoodName"] = "PrestaMeritoEjecutivo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","PrestaMeritoEjecutivo");
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


	$tdataautorizaciones1["PrestaMeritoEjecutivo"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "PrestaMeritoEjecutivo";
//	Clara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Clara";
	$fdata["GoodName"] = "Clara";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Clara");
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


	$tdataautorizaciones1["Clara"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Clara";
//	Expresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Expresa";
	$fdata["GoodName"] = "Expresa";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Expresa");
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


	$tdataautorizaciones1["Expresa"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Expresa";
//	ActualmenteExigible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ActualmenteExigible";
	$fdata["GoodName"] = "ActualmenteExigible";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","ActualmenteExigible");
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


	$tdataautorizaciones1["ActualmenteExigible"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "ActualmenteExigible";
//	CompetenciaDEAJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CompetenciaDEAJ";
	$fdata["GoodName"] = "CompetenciaDEAJ";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","CompetenciaDEAJ");
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


	$tdataautorizaciones1["CompetenciaDEAJ"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "CompetenciaDEAJ";
//	FaltaRequisitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FaltaRequisitos";
	$fdata["GoodName"] = "FaltaRequisitos";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","FaltaRequisitos");
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


	$tdataautorizaciones1["FaltaRequisitos"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "FaltaRequisitos";
//	FaltaCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FaltaCompetencia";
	$fdata["GoodName"] = "FaltaCompetencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","FaltaCompetencia");
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


	$tdataautorizaciones1["FaltaCompetencia"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "FaltaCompetencia";
//	PorPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PorPrescripcion";
	$fdata["GoodName"] = "PorPrescripcion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","PorPrescripcion");
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


	$tdataautorizaciones1["PorPrescripcion"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "PorPrescripcion";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","SeccionalId");
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


	$tdataautorizaciones1["SeccionalId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "SeccionalId";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Folios");
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


	$tdataautorizaciones1["Folios"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Folios";
//	SeccionalIdDestino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SeccionalIdDestino";
	$fdata["GoodName"] = "SeccionalIdDestino";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","SeccionalIdDestino");
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


	$tdataautorizaciones1["SeccionalIdDestino"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "SeccionalIdDestino";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Observaciones");
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


	$tdataautorizaciones1["Observaciones"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Observaciones";
//	Procesado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Procesado";
	$fdata["GoodName"] = "Procesado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Procesado");
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


	$tdataautorizaciones1["Procesado"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Procesado";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Tipo");
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


	$tdataautorizaciones1["Tipo"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Tipo";
//	FechaSancion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "FechaSancion";
	$fdata["GoodName"] = "FechaSancion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","FechaSancion");
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


	$tdataautorizaciones1["FechaSancion"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "FechaSancion";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Cantidad");
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


	$tdataautorizaciones1["Cantidad"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Obligacion");
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


	$tdataautorizaciones1["Obligacion"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Costas");
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


	$tdataautorizaciones1["Costas"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Costas";
//	Remisorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Remisorio";
	$fdata["GoodName"] = "Remisorio";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Remisorio");
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


	$tdataautorizaciones1["Remisorio"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Remisorio";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","CarteraTipoId");
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


	$tdataautorizaciones1["CarteraTipoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "CarteraTipoId";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","MinJusticia");
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


	$tdataautorizaciones1["MinJusticia"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "MinJusticia";
//	Aprobado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Aprobado";
	$fdata["GoodName"] = "Aprobado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Aprobado");
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


	$tdataautorizaciones1["Aprobado"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Aprobado";
//	AprobadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "AprobadoPor";
	$fdata["GoodName"] = "AprobadoPor";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","AprobadoPor");
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


	$tdataautorizaciones1["AprobadoPor"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "AprobadoPor";
//	FechaAprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "FechaAprobacion";
	$fdata["GoodName"] = "FechaAprobacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","FechaAprobacion");
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


	$tdataautorizaciones1["FechaAprobacion"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "FechaAprobacion";
//	Plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Plazo";
	$fdata["GoodName"] = "Plazo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Plazo");
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


	$tdataautorizaciones1["Plazo"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Plazo";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","NaturalezaId");
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


	$tdataautorizaciones1["NaturalezaId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "NaturalezaId";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Sigobius");
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


	$tdataautorizaciones1["Sigobius"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Sigobius";
//	Monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Monto";
	$fdata["GoodName"] = "Monto";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Monto");
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


	$tdataautorizaciones1["Monto"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Monto";
//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","TramiteId");
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


	$tdataautorizaciones1["TramiteId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "TramiteId";
//	Fisico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Fisico";
	$fdata["GoodName"] = "Fisico";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Fisico");
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


	$tdataautorizaciones1["Fisico"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Fisico";
//	Digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Digital";
	$fdata["GoodName"] = "Digital";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Digital");
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


	$tdataautorizaciones1["Digital"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Digital";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","ChequeoId");
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


	$tdataautorizaciones1["ChequeoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "ChequeoId";


$tables_data["Autorizaciones"]=&$tdataautorizaciones1;
$field_labels["Autorizaciones"] = &$fieldLabelsautorizaciones1;
$fieldToolTips["Autorizaciones"] = &$fieldToolTipsautorizaciones1;
$placeHolders["Autorizaciones"] = &$placeHoldersautorizaciones1;
$page_titles["Autorizaciones"] = &$pageTitlesautorizaciones1;


changeTextControlsToDate( "Autorizaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Autorizaciones"] = array();
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


		
	$detailsTablesData["Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
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


		
	$detailsTablesData["Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
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


		
	$detailsTablesData["Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Autorizaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Autorizaciones"][0] = $masterParams;
				$masterTablesData["Autorizaciones"][0]["masterKeys"] = array();
	$masterTablesData["Autorizaciones"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["Autorizaciones"][0]["detailKeys"] = array();
	$masterTablesData["Autorizaciones"][0]["detailKeys"][]="SeccionalId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Tramites";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Tramites";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tramites";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Autorizaciones"][1] = $masterParams;
				$masterTablesData["Autorizaciones"][1]["masterKeys"] = array();
	$masterTablesData["Autorizaciones"][1]["masterKeys"][]="TramiteId";
				$masterTablesData["Autorizaciones"][1]["detailKeys"] = array();
	$masterTablesData["Autorizaciones"][1]["detailKeys"][]="TramiteId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_autorizaciones1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ConceptoId,  AbogadoId,  Fecha,  DespachoId,  Origen,  Providencia,  Ejecutoria,  PrimeraCopia,  Autentica,  PrestaMeritoEjecutivo,  Clara,  Expresa,  ActualmenteExigible,  CompetenciaDEAJ,  FaltaRequisitos,  FaltaCompetencia,  PorPrescripcion,  SeccionalId,  Folios,  SeccionalIdDestino,  Observaciones,  Procesado,  Tipo,  FechaSancion,  Cantidad,  Obligacion,  Costas,  Remisorio,  CarteraTipoId,  MinJusticia,  Aprobado,  AprobadoPor,  FechaAprobacion,  Plazo,  NaturalezaId,  Sigobius,  Monto,  TramiteId,  Fisico,  Digital,  ChequeoId";
$proto0["m_strFrom"] = "FROM dbo.Chequeos";
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
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto6["m_sql"] = "ConceptoId";
$proto6["m_srcTableName"] = "Autorizaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto8["m_sql"] = "AbogadoId";
$proto8["m_srcTableName"] = "Autorizaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "Autorizaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto12["m_sql"] = "DespachoId";
$proto12["m_srcTableName"] = "Autorizaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto14["m_sql"] = "Origen";
$proto14["m_srcTableName"] = "Autorizaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto16["m_sql"] = "Providencia";
$proto16["m_srcTableName"] = "Autorizaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto18["m_sql"] = "Ejecutoria";
$proto18["m_srcTableName"] = "Autorizaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimeraCopia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto20["m_sql"] = "PrimeraCopia";
$proto20["m_srcTableName"] = "Autorizaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Autentica",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto22["m_sql"] = "Autentica";
$proto22["m_srcTableName"] = "Autorizaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PrestaMeritoEjecutivo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto24["m_sql"] = "PrestaMeritoEjecutivo";
$proto24["m_srcTableName"] = "Autorizaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Clara",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto26["m_sql"] = "Clara";
$proto26["m_srcTableName"] = "Autorizaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Expresa",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto28["m_sql"] = "Expresa";
$proto28["m_srcTableName"] = "Autorizaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ActualmenteExigible",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto30["m_sql"] = "ActualmenteExigible";
$proto30["m_srcTableName"] = "Autorizaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CompetenciaDEAJ",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto32["m_sql"] = "CompetenciaDEAJ";
$proto32["m_srcTableName"] = "Autorizaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaRequisitos",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto34["m_sql"] = "FaltaRequisitos";
$proto34["m_srcTableName"] = "Autorizaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaCompetencia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto36["m_sql"] = "FaltaCompetencia";
$proto36["m_srcTableName"] = "Autorizaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PorPrescripcion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto38["m_sql"] = "PorPrescripcion";
$proto38["m_srcTableName"] = "Autorizaciones";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto40["m_sql"] = "SeccionalId";
$proto40["m_srcTableName"] = "Autorizaciones";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto42["m_sql"] = "Folios";
$proto42["m_srcTableName"] = "Autorizaciones";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalIdDestino",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto44["m_sql"] = "SeccionalIdDestino";
$proto44["m_srcTableName"] = "Autorizaciones";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto46["m_sql"] = "Observaciones";
$proto46["m_srcTableName"] = "Autorizaciones";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto48["m_sql"] = "Procesado";
$proto48["m_srcTableName"] = "Autorizaciones";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto50["m_sql"] = "Tipo";
$proto50["m_srcTableName"] = "Autorizaciones";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSancion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto52["m_sql"] = "FechaSancion";
$proto52["m_srcTableName"] = "Autorizaciones";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto54["m_sql"] = "Cantidad";
$proto54["m_srcTableName"] = "Autorizaciones";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto56["m_sql"] = "Obligacion";
$proto56["m_srcTableName"] = "Autorizaciones";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto58["m_sql"] = "Costas";
$proto58["m_srcTableName"] = "Autorizaciones";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Remisorio",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto60["m_sql"] = "Remisorio";
$proto60["m_srcTableName"] = "Autorizaciones";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto62["m_sql"] = "CarteraTipoId";
$proto62["m_srcTableName"] = "Autorizaciones";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto64["m_sql"] = "MinJusticia";
$proto64["m_srcTableName"] = "Autorizaciones";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobado",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto66["m_sql"] = "Aprobado";
$proto66["m_srcTableName"] = "Autorizaciones";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "AprobadoPor",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto68["m_sql"] = "AprobadoPor";
$proto68["m_srcTableName"] = "Autorizaciones";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAprobacion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto70["m_sql"] = "FechaAprobacion";
$proto70["m_srcTableName"] = "Autorizaciones";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto72["m_sql"] = "Plazo";
$proto72["m_srcTableName"] = "Autorizaciones";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto74["m_sql"] = "NaturalezaId";
$proto74["m_srcTableName"] = "Autorizaciones";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto76["m_sql"] = "Sigobius";
$proto76["m_srcTableName"] = "Autorizaciones";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Monto",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto78["m_sql"] = "Monto";
$proto78["m_srcTableName"] = "Autorizaciones";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "TramiteId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto80["m_sql"] = "TramiteId";
$proto80["m_srcTableName"] = "Autorizaciones";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Fisico",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto82["m_sql"] = "Fisico";
$proto82["m_srcTableName"] = "Autorizaciones";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Digital",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto84["m_sql"] = "Digital";
$proto84["m_srcTableName"] = "Autorizaciones";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "Autorizaciones"
));

$proto86["m_sql"] = "ChequeoId";
$proto86["m_srcTableName"] = "Autorizaciones";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "dbo.Chequeos";
$proto89["m_srcTableName"] = "Autorizaciones";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "ChequeoId";
$proto89["m_columns"][] = "ConceptoId";
$proto89["m_columns"][] = "AbogadoId";
$proto89["m_columns"][] = "Fecha";
$proto89["m_columns"][] = "DespachoId";
$proto89["m_columns"][] = "Origen";
$proto89["m_columns"][] = "Providencia";
$proto89["m_columns"][] = "Ejecutoria";
$proto89["m_columns"][] = "PrimeraCopia";
$proto89["m_columns"][] = "Autentica";
$proto89["m_columns"][] = "PrestaMeritoEjecutivo";
$proto89["m_columns"][] = "Clara";
$proto89["m_columns"][] = "Expresa";
$proto89["m_columns"][] = "ActualmenteExigible";
$proto89["m_columns"][] = "CompetenciaDEAJ";
$proto89["m_columns"][] = "FaltaRequisitos";
$proto89["m_columns"][] = "FaltaCompetencia";
$proto89["m_columns"][] = "PorPrescripcion";
$proto89["m_columns"][] = "SeccionalId";
$proto89["m_columns"][] = "Folios";
$proto89["m_columns"][] = "SeccionalIdDestino";
$proto89["m_columns"][] = "Observaciones";
$proto89["m_columns"][] = "Procesado";
$proto89["m_columns"][] = "Tipo";
$proto89["m_columns"][] = "FechaSancion";
$proto89["m_columns"][] = "Cantidad";
$proto89["m_columns"][] = "Obligacion";
$proto89["m_columns"][] = "Costas";
$proto89["m_columns"][] = "Remisorio";
$proto89["m_columns"][] = "CarteraTipoId";
$proto89["m_columns"][] = "MinJusticia";
$proto89["m_columns"][] = "Aprobado";
$proto89["m_columns"][] = "AprobadoPor";
$proto89["m_columns"][] = "FechaAprobacion";
$proto89["m_columns"][] = "Plazo";
$proto89["m_columns"][] = "NaturalezaId";
$proto89["m_columns"][] = "Sigobius";
$proto89["m_columns"][] = "Monto";
$proto89["m_columns"][] = "TramiteId";
$proto89["m_columns"][] = "Fisico";
$proto89["m_columns"][] = "Digital";
$proto89["m_columns"][] = "order";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "dbo.Chequeos";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Autorizaciones";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Autorizaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_autorizaciones1 = createSqlQuery_autorizaciones1();


	
		;

																																									

$tdataautorizaciones1[".sqlquery"] = $queryData_autorizaciones1;



include_once(getabspath("include/autorizaciones1_events.php"));
$tdataautorizaciones1[".hasEvents"] = true;

?>