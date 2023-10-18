<?php
$tdataautorizaciones = array();
$tdataautorizaciones[".searchableFields"] = array();
$tdataautorizaciones[".ShortName"] = "autorizaciones";
$tdataautorizaciones[".OwnerID"] = "";
$tdataautorizaciones[".OriginalTable"] = "dbo.Chequeos";


$tdataautorizaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataautorizaciones[".originalPagesByType"] = $tdataautorizaciones[".pagesByType"];
$tdataautorizaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataautorizaciones[".originalPages"] = $tdataautorizaciones[".pages"];
$tdataautorizaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataautorizaciones[".originalDefaultPages"] = $tdataautorizaciones[".defaultPages"];

//	field labels
$fieldLabelsautorizaciones = array();
$fieldToolTipsautorizaciones = array();
$pageTitlesautorizaciones = array();
$placeHoldersautorizaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsautorizaciones["Spanish"] = array();
	$fieldToolTipsautorizaciones["Spanish"] = array();
	$placeHoldersautorizaciones["Spanish"] = array();
	$pageTitlesautorizaciones["Spanish"] = array();
	$fieldLabelsautorizaciones["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsautorizaciones["Spanish"]["ConceptoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["ConceptoId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["AbogadoId"] = "Abogado";
	$fieldToolTipsautorizaciones["Spanish"]["AbogadoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["AbogadoId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsautorizaciones["Spanish"]["Fecha"] = "";
	$placeHoldersautorizaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsautorizaciones["Spanish"]["DespachoId"] = "Competencia";
	$fieldToolTipsautorizaciones["Spanish"]["DespachoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["DespachoId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Origen"] = "No. Radicado de Origen";
	$fieldToolTipsautorizaciones["Spanish"]["Origen"] = "";
	$placeHoldersautorizaciones["Spanish"]["Origen"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Providencia"] = "Providencia";
	$fieldToolTipsautorizaciones["Spanish"]["Providencia"] = "";
	$placeHoldersautorizaciones["Spanish"]["Providencia"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipsautorizaciones["Spanish"]["Ejecutoria"] = "";
	$placeHoldersautorizaciones["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsautorizaciones["Spanish"]["PrimeraCopia"] = "Primera Copia";
	$fieldToolTipsautorizaciones["Spanish"]["PrimeraCopia"] = "";
	$placeHoldersautorizaciones["Spanish"]["PrimeraCopia"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Autentica"] = "Autentica";
	$fieldToolTipsautorizaciones["Spanish"]["Autentica"] = "";
	$placeHoldersautorizaciones["Spanish"]["Autentica"] = "";
	$fieldLabelsautorizaciones["Spanish"]["PrestaMeritoEjecutivo"] = "Presta Merito Ejecutivo";
	$fieldToolTipsautorizaciones["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$placeHoldersautorizaciones["Spanish"]["PrestaMeritoEjecutivo"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Clara"] = "Clara";
	$fieldToolTipsautorizaciones["Spanish"]["Clara"] = "";
	$placeHoldersautorizaciones["Spanish"]["Clara"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Expresa"] = "Expresa";
	$fieldToolTipsautorizaciones["Spanish"]["Expresa"] = "";
	$placeHoldersautorizaciones["Spanish"]["Expresa"] = "";
	$fieldLabelsautorizaciones["Spanish"]["ActualmenteExigible"] = "Actualmente Exigible";
	$fieldToolTipsautorizaciones["Spanish"]["ActualmenteExigible"] = "";
	$placeHoldersautorizaciones["Spanish"]["ActualmenteExigible"] = "";
	$fieldLabelsautorizaciones["Spanish"]["CompetenciaDEAJ"] = "Competencia";
	$fieldToolTipsautorizaciones["Spanish"]["CompetenciaDEAJ"] = "";
	$placeHoldersautorizaciones["Spanish"]["CompetenciaDEAJ"] = "";
	$fieldLabelsautorizaciones["Spanish"]["FaltaRequisitos"] = "Falta de Requisitos";
	$fieldToolTipsautorizaciones["Spanish"]["FaltaRequisitos"] = "";
	$placeHoldersautorizaciones["Spanish"]["FaltaRequisitos"] = "";
	$fieldLabelsautorizaciones["Spanish"]["FaltaCompetencia"] = "Falta de Competencia";
	$fieldToolTipsautorizaciones["Spanish"]["FaltaCompetencia"] = "";
	$placeHoldersautorizaciones["Spanish"]["FaltaCompetencia"] = "";
	$fieldLabelsautorizaciones["Spanish"]["PorPrescripcion"] = "Por Prescripción";
	$fieldToolTipsautorizaciones["Spanish"]["PorPrescripcion"] = "";
	$placeHoldersautorizaciones["Spanish"]["PorPrescripcion"] = "";
	$fieldLabelsautorizaciones["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsautorizaciones["Spanish"]["SeccionalId"] = "";
	$placeHoldersautorizaciones["Spanish"]["SeccionalId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsautorizaciones["Spanish"]["Folios"] = "";
	$placeHoldersautorizaciones["Spanish"]["Folios"] = "";
	$fieldLabelsautorizaciones["Spanish"]["SeccionalIdDestino"] = "Seccional Destino";
	$fieldToolTipsautorizaciones["Spanish"]["SeccionalIdDestino"] = "";
	$placeHoldersautorizaciones["Spanish"]["SeccionalIdDestino"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsautorizaciones["Spanish"]["Observaciones"] = "";
	$placeHoldersautorizaciones["Spanish"]["Observaciones"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Procesado"] = "Procesado";
	$fieldToolTipsautorizaciones["Spanish"]["Procesado"] = "";
	$placeHoldersautorizaciones["Spanish"]["Procesado"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsautorizaciones["Spanish"]["Tipo"] = "";
	$placeHoldersautorizaciones["Spanish"]["Tipo"] = "";
	$fieldLabelsautorizaciones["Spanish"]["FechaSancion"] = "Fecha Liquidación";
	$fieldToolTipsautorizaciones["Spanish"]["FechaSancion"] = "";
	$placeHoldersautorizaciones["Spanish"]["FechaSancion"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsautorizaciones["Spanish"]["Cantidad"] = "";
	$placeHoldersautorizaciones["Spanish"]["Cantidad"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsautorizaciones["Spanish"]["Obligacion"] = "";
	$placeHoldersautorizaciones["Spanish"]["Obligacion"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsautorizaciones["Spanish"]["Costas"] = "";
	$placeHoldersautorizaciones["Spanish"]["Costas"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Remisorio"] = "Remisorio";
	$fieldToolTipsautorizaciones["Spanish"]["Remisorio"] = "";
	$placeHoldersautorizaciones["Spanish"]["Remisorio"] = "";
	$fieldLabelsautorizaciones["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsautorizaciones["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipsautorizaciones["Spanish"]["MinJusticia"] = "";
	$placeHoldersautorizaciones["Spanish"]["MinJusticia"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Aprobado"] = "Aprobado";
	$fieldToolTipsautorizaciones["Spanish"]["Aprobado"] = "";
	$placeHoldersautorizaciones["Spanish"]["Aprobado"] = "";
	$fieldLabelsautorizaciones["Spanish"]["AprobadoPor"] = "Autorizado Por";
	$fieldToolTipsautorizaciones["Spanish"]["AprobadoPor"] = "";
	$placeHoldersautorizaciones["Spanish"]["AprobadoPor"] = "";
	$fieldLabelsautorizaciones["Spanish"]["FechaAprobacion"] = "F. Autorización";
	$fieldToolTipsautorizaciones["Spanish"]["FechaAprobacion"] = "";
	$placeHoldersautorizaciones["Spanish"]["FechaAprobacion"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Plazo"] = "Plazo";
	$fieldToolTipsautorizaciones["Spanish"]["Plazo"] = "";
	$placeHoldersautorizaciones["Spanish"]["Plazo"] = "";
	$fieldLabelsautorizaciones["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipsautorizaciones["Spanish"]["NaturalezaId"] = "";
	$placeHoldersautorizaciones["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsautorizaciones["Spanish"]["Sigobius"] = "";
	$placeHoldersautorizaciones["Spanish"]["Sigobius"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Monto"] = "Monto";
	$fieldToolTipsautorizaciones["Spanish"]["Monto"] = "";
	$placeHoldersautorizaciones["Spanish"]["Monto"] = "";
	$fieldLabelsautorizaciones["Spanish"]["TramiteId"] = "Tramite";
	$fieldToolTipsautorizaciones["Spanish"]["TramiteId"] = "";
	$placeHoldersautorizaciones["Spanish"]["TramiteId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Fisico"] = "Fisico";
	$fieldToolTipsautorizaciones["Spanish"]["Fisico"] = "";
	$placeHoldersautorizaciones["Spanish"]["Fisico"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Digital"] = "Digital";
	$fieldToolTipsautorizaciones["Spanish"]["Digital"] = "";
	$placeHoldersautorizaciones["Spanish"]["Digital"] = "";
	$fieldLabelsautorizaciones["Spanish"]["ChequeoId"] = "# Chequeo";
	$fieldToolTipsautorizaciones["Spanish"]["ChequeoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["ChequeoId"] = "";
	if (count($fieldToolTipsautorizaciones["Spanish"]))
		$tdataautorizaciones[".isUseToolTips"] = true;
}


	$tdataautorizaciones[".NCSearch"] = true;



$tdataautorizaciones[".shortTableName"] = "autorizaciones";
$tdataautorizaciones[".nSecOptions"] = 0;

$tdataautorizaciones[".mainTableOwnerID"] = "";
$tdataautorizaciones[".entityType"] = 1;
$tdataautorizaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdataautorizaciones[".strOriginalTableName"] = "dbo.Chequeos";

	



$tdataautorizaciones[".showAddInPopup"] = false;

$tdataautorizaciones[".showEditInPopup"] = false;

$tdataautorizaciones[".showViewInPopup"] = false;

$tdataautorizaciones[".listAjax"] = false;
//	temporary
//$tdataautorizaciones[".listAjax"] = false;

	$tdataautorizaciones[".audit"] = true;

	$tdataautorizaciones[".locking"] = false;


$pages = $tdataautorizaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataautorizaciones[".edit"] = true;
	$tdataautorizaciones[".afterEditAction"] = 1;
	$tdataautorizaciones[".closePopupAfterEdit"] = 1;
	$tdataautorizaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataautorizaciones[".add"] = true;
$tdataautorizaciones[".afterAddAction"] = 1;
$tdataautorizaciones[".closePopupAfterAdd"] = 1;
$tdataautorizaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataautorizaciones[".list"] = true;
}



$tdataautorizaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataautorizaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataautorizaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataautorizaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataautorizaciones[".printFriendly"] = true;
}



$tdataautorizaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataautorizaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataautorizaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataautorizaciones[".isUseAjaxSuggest"] = true;



											
										
										
																																																					

$tdataautorizaciones[".ajaxCodeSnippetAdded"] = false;

$tdataautorizaciones[".buttonsAdded"] = true;

$tdataautorizaciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdataautorizaciones[".isUseTimeForSearch"] = false;


$tdataautorizaciones[".badgeColor"] = "6DA5C8";


$tdataautorizaciones[".allSearchFields"] = array();
$tdataautorizaciones[".filterFields"] = array();
$tdataautorizaciones[".requiredSearchFields"] = array();

$tdataautorizaciones[".googleLikeFields"] = array();
$tdataautorizaciones[".googleLikeFields"][] = "ConceptoId";
$tdataautorizaciones[".googleLikeFields"][] = "AbogadoId";
$tdataautorizaciones[".googleLikeFields"][] = "Fecha";
$tdataautorizaciones[".googleLikeFields"][] = "DespachoId";
$tdataautorizaciones[".googleLikeFields"][] = "Origen";
$tdataautorizaciones[".googleLikeFields"][] = "Providencia";
$tdataautorizaciones[".googleLikeFields"][] = "Ejecutoria";
$tdataautorizaciones[".googleLikeFields"][] = "PrimeraCopia";
$tdataautorizaciones[".googleLikeFields"][] = "Autentica";
$tdataautorizaciones[".googleLikeFields"][] = "PrestaMeritoEjecutivo";
$tdataautorizaciones[".googleLikeFields"][] = "Clara";
$tdataautorizaciones[".googleLikeFields"][] = "Expresa";
$tdataautorizaciones[".googleLikeFields"][] = "ActualmenteExigible";
$tdataautorizaciones[".googleLikeFields"][] = "CompetenciaDEAJ";
$tdataautorizaciones[".googleLikeFields"][] = "FaltaRequisitos";
$tdataautorizaciones[".googleLikeFields"][] = "FaltaCompetencia";
$tdataautorizaciones[".googleLikeFields"][] = "PorPrescripcion";
$tdataautorizaciones[".googleLikeFields"][] = "SeccionalId";
$tdataautorizaciones[".googleLikeFields"][] = "Folios";
$tdataautorizaciones[".googleLikeFields"][] = "SeccionalIdDestino";
$tdataautorizaciones[".googleLikeFields"][] = "Observaciones";
$tdataautorizaciones[".googleLikeFields"][] = "Procesado";
$tdataautorizaciones[".googleLikeFields"][] = "Tipo";
$tdataautorizaciones[".googleLikeFields"][] = "FechaSancion";
$tdataautorizaciones[".googleLikeFields"][] = "Cantidad";
$tdataautorizaciones[".googleLikeFields"][] = "Obligacion";
$tdataautorizaciones[".googleLikeFields"][] = "Costas";
$tdataautorizaciones[".googleLikeFields"][] = "Remisorio";
$tdataautorizaciones[".googleLikeFields"][] = "CarteraTipoId";
$tdataautorizaciones[".googleLikeFields"][] = "MinJusticia";
$tdataautorizaciones[".googleLikeFields"][] = "Aprobado";
$tdataautorizaciones[".googleLikeFields"][] = "AprobadoPor";
$tdataautorizaciones[".googleLikeFields"][] = "FechaAprobacion";
$tdataautorizaciones[".googleLikeFields"][] = "Plazo";
$tdataautorizaciones[".googleLikeFields"][] = "NaturalezaId";
$tdataautorizaciones[".googleLikeFields"][] = "Sigobius";
$tdataautorizaciones[".googleLikeFields"][] = "Monto";
$tdataautorizaciones[".googleLikeFields"][] = "TramiteId";
$tdataautorizaciones[".googleLikeFields"][] = "Fisico";
$tdataautorizaciones[".googleLikeFields"][] = "Digital";
$tdataautorizaciones[".googleLikeFields"][] = "ChequeoId";



$tdataautorizaciones[".tableType"] = "list";

$tdataautorizaciones[".printerPageOrientation"] = 0;
$tdataautorizaciones[".nPrinterPageScale"] = 100;

$tdataautorizaciones[".nPrinterSplitRecords"] = 40;

$tdataautorizaciones[".geocodingEnabled"] = false;





$tdataautorizaciones[".isResizeColumns"] = true;





$tdataautorizaciones[".pageSize"] = 20;

$tdataautorizaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataautorizaciones[".strOrderBy"] = $tstrOrderBy;

$tdataautorizaciones[".orderindexes"] = array();


$tdataautorizaciones[".sqlHead"] = "SELECT C.ConceptoId,  C.AbogadoId,  C.Fecha,  C.DespachoId,  C.Origen,  C.Providencia,  C.Ejecutoria,  C.PrimeraCopia,  C.Autentica,  C.PrestaMeritoEjecutivo,  C.Clara,  C.Expresa,  C.ActualmenteExigible,  C.CompetenciaDEAJ,  C.FaltaRequisitos,  C.FaltaCompetencia,  C.PorPrescripcion,  C.SeccionalId,  C.Folios,  C.SeccionalIdDestino,  C.Observaciones,  C.Procesado,  C.Tipo,  C.FechaSancion,  C.Cantidad,  C.Obligacion,  C.Costas,  C.Remisorio,  C.CarteraTipoId,  C.MinJusticia,  C.Aprobado,  C.AprobadoPor,  C.FechaAprobacion,  C.Plazo,  C.NaturalezaId,  C.Sigobius,  C.Monto,  C.TramiteId,  C.Fisico,  C.Digital,  C.ChequeoId";
$tdataautorizaciones[".sqlFrom"] = "FROM dbo.Chequeos C  INNER JOIN Seccionales S ON s.SeccionalId = c.SeccionalId  INNER JOIN CarteraTipos CA ON CA.CarteraTipoId = C.CarteraTipoId  INNER JOIN Procesos P ON P.ChequeoId = C.ChequeoId";
$tdataautorizaciones[".sqlWhereExpr"] = "c.Obligacion = 0 or c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1";
$tdataautorizaciones[".sqlTail"] = "";

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
$tdataautorizaciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataautorizaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataautorizaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataautorizaciones[".highlightSearchResults"] = true;

$tableKeysautorizaciones = array();
$tableKeysautorizaciones[] = "ChequeoId";
$tdataautorizaciones[".Keys"] = $tableKeysautorizaciones;


$tdataautorizaciones[".hideMobileList"] = array();




//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.ConceptoId";

	
	
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


	$tdataautorizaciones["ConceptoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "ConceptoId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.AbogadoId";

	
	
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


	$tdataautorizaciones["AbogadoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "AbogadoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Fecha";

	
	
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


	$tdataautorizaciones["Fecha"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Fecha";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","DespachoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.DespachoId";

	
	
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


	$tdataautorizaciones["DespachoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "DespachoId";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

		$fdata["sourceSingle"] = "Origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Origen";

	
	
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


	$tdataautorizaciones["Origen"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Origen";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Providencia";

	
	
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


	$tdataautorizaciones["Providencia"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Ejecutoria";

	
	
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


	$tdataautorizaciones["Ejecutoria"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Ejecutoria";
//	PrimeraCopia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PrimeraCopia";
	$fdata["GoodName"] = "PrimeraCopia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","PrimeraCopia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PrimeraCopia";

		$fdata["sourceSingle"] = "PrimeraCopia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.PrimeraCopia";

	
	
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


	$tdataautorizaciones["PrimeraCopia"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "PrimeraCopia";
//	Autentica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Autentica";
	$fdata["GoodName"] = "Autentica";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Autentica");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Autentica";

		$fdata["sourceSingle"] = "Autentica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Autentica";

	
	
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


	$tdataautorizaciones["Autentica"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Autentica";
//	PrestaMeritoEjecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PrestaMeritoEjecutivo";
	$fdata["GoodName"] = "PrestaMeritoEjecutivo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","PrestaMeritoEjecutivo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PrestaMeritoEjecutivo";

		$fdata["sourceSingle"] = "PrestaMeritoEjecutivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.PrestaMeritoEjecutivo";

	
	
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


	$tdataautorizaciones["PrestaMeritoEjecutivo"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "PrestaMeritoEjecutivo";
//	Clara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Clara";
	$fdata["GoodName"] = "Clara";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Clara");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Clara";

		$fdata["sourceSingle"] = "Clara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Clara";

	
	
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


	$tdataautorizaciones["Clara"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Clara";
//	Expresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Expresa";
	$fdata["GoodName"] = "Expresa";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Expresa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Expresa";

		$fdata["sourceSingle"] = "Expresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Expresa";

	
	
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


	$tdataautorizaciones["Expresa"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Expresa";
//	ActualmenteExigible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ActualmenteExigible";
	$fdata["GoodName"] = "ActualmenteExigible";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","ActualmenteExigible");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "ActualmenteExigible";

		$fdata["sourceSingle"] = "ActualmenteExigible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.ActualmenteExigible";

	
	
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


	$tdataautorizaciones["ActualmenteExigible"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "ActualmenteExigible";
//	CompetenciaDEAJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CompetenciaDEAJ";
	$fdata["GoodName"] = "CompetenciaDEAJ";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","CompetenciaDEAJ");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "CompetenciaDEAJ";

		$fdata["sourceSingle"] = "CompetenciaDEAJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.CompetenciaDEAJ";

	
	
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


	$tdataautorizaciones["CompetenciaDEAJ"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "CompetenciaDEAJ";
//	FaltaRequisitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FaltaRequisitos";
	$fdata["GoodName"] = "FaltaRequisitos";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","FaltaRequisitos");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "FaltaRequisitos";

		$fdata["sourceSingle"] = "FaltaRequisitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.FaltaRequisitos";

	
	
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


	$tdataautorizaciones["FaltaRequisitos"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "FaltaRequisitos";
//	FaltaCompetencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FaltaCompetencia";
	$fdata["GoodName"] = "FaltaCompetencia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","FaltaCompetencia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "FaltaCompetencia";

		$fdata["sourceSingle"] = "FaltaCompetencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.FaltaCompetencia";

	
	
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


	$tdataautorizaciones["FaltaCompetencia"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "FaltaCompetencia";
//	PorPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PorPrescripcion";
	$fdata["GoodName"] = "PorPrescripcion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","PorPrescripcion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PorPrescripcion";

		$fdata["sourceSingle"] = "PorPrescripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.PorPrescripcion";

	
	
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


	$tdataautorizaciones["PorPrescripcion"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "PorPrescripcion";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.SeccionalId";

	
	
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


	$tdataautorizaciones["SeccionalId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "SeccionalId";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Folios");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Folios";

		$fdata["sourceSingle"] = "Folios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Folios";

	
	
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


	$tdataautorizaciones["Folios"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Folios";
//	SeccionalIdDestino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SeccionalIdDestino";
	$fdata["GoodName"] = "SeccionalIdDestino";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","SeccionalIdDestino");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalIdDestino";

		$fdata["sourceSingle"] = "SeccionalIdDestino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.SeccionalIdDestino";

	
	
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


	$tdataautorizaciones["SeccionalIdDestino"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "SeccionalIdDestino";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Observaciones";

	
	
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


	$tdataautorizaciones["Observaciones"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Observaciones";
//	Procesado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Procesado";
	$fdata["GoodName"] = "Procesado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Procesado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Procesado";

		$fdata["sourceSingle"] = "Procesado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Procesado";

	
	
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


	$tdataautorizaciones["Procesado"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Procesado";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Tipo";

	
	
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


	$tdataautorizaciones["Tipo"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Tipo";
//	FechaSancion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "FechaSancion";
	$fdata["GoodName"] = "FechaSancion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","FechaSancion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FechaSancion";

		$fdata["sourceSingle"] = "FechaSancion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.FechaSancion";

	
	
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


	$tdataautorizaciones["FechaSancion"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "FechaSancion";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Cantidad");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Cantidad";

	
	
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


	$tdataautorizaciones["Cantidad"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Obligacion";

	
	
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


	$tdataautorizaciones["Obligacion"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Costas";

	
	
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


	$tdataautorizaciones["Costas"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Costas";
//	Remisorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Remisorio";
	$fdata["GoodName"] = "Remisorio";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Remisorio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Remisorio";

		$fdata["sourceSingle"] = "Remisorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Remisorio";

	
	
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


	$tdataautorizaciones["Remisorio"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Remisorio";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.CarteraTipoId";

	
	
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


	$tdataautorizaciones["CarteraTipoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "CarteraTipoId";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","MinJusticia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "MinJusticia";

		$fdata["sourceSingle"] = "MinJusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.MinJusticia";

	
	
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


	$tdataautorizaciones["MinJusticia"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "MinJusticia";
//	Aprobado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Aprobado";
	$fdata["GoodName"] = "Aprobado";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Aprobado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aprobado";

		$fdata["sourceSingle"] = "Aprobado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Aprobado";

	
	
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


	$tdataautorizaciones["Aprobado"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Aprobado";
//	AprobadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "AprobadoPor";
	$fdata["GoodName"] = "AprobadoPor";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","AprobadoPor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AprobadoPor";

		$fdata["sourceSingle"] = "AprobadoPor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.AprobadoPor";

	
	
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


	$tdataautorizaciones["AprobadoPor"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "AprobadoPor";
//	FechaAprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "FechaAprobacion";
	$fdata["GoodName"] = "FechaAprobacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","FechaAprobacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FechaAprobacion";

		$fdata["sourceSingle"] = "FechaAprobacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.FechaAprobacion";

	
	
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


	$tdataautorizaciones["FechaAprobacion"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "FechaAprobacion";
//	Plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Plazo";
	$fdata["GoodName"] = "Plazo";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Plazo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Plazo";

		$fdata["sourceSingle"] = "Plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Plazo";

	
	
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


	$tdataautorizaciones["Plazo"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Plazo";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","NaturalezaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.NaturalezaId";

	
	
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


	$tdataautorizaciones["NaturalezaId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "NaturalezaId";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Sigobius");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Sigobius";

	
	
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


	$tdataautorizaciones["Sigobius"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Sigobius";
//	Monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Monto";
	$fdata["GoodName"] = "Monto";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Monto");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Monto";

		$fdata["sourceSingle"] = "Monto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Monto";

	
	
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


	$tdataautorizaciones["Monto"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Monto";
//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","TramiteId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TramiteId";

		$fdata["sourceSingle"] = "TramiteId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.TramiteId";

	
	
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


	$tdataautorizaciones["TramiteId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "TramiteId";
//	Fisico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Fisico";
	$fdata["GoodName"] = "Fisico";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Fisico");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Fisico";

		$fdata["sourceSingle"] = "Fisico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Fisico";

	
	
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


	$tdataautorizaciones["Fisico"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Fisico";
//	Digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Digital";
	$fdata["GoodName"] = "Digital";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Digital");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Digital";

		$fdata["sourceSingle"] = "Digital";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Digital";

	
	
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


	$tdataautorizaciones["Digital"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Digital";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","ChequeoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.ChequeoId";

	
	
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


	$tdataautorizaciones["ChequeoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "ChequeoId";


$tables_data["dbo.Autorizaciones"]=&$tdataautorizaciones;
$field_labels["dbo_Autorizaciones"] = &$fieldLabelsautorizaciones;
$fieldToolTips["dbo_Autorizaciones"] = &$fieldToolTipsautorizaciones;
$placeHolders["dbo_Autorizaciones"] = &$placeHoldersautorizaciones;
$page_titles["dbo_Autorizaciones"] = &$pageTitlesautorizaciones;


changeTextControlsToDate( "dbo.Autorizaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Autorizaciones"] = array();
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


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
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


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
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


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Autorizaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Autorizaciones"][0] = $masterParams;
				$masterTablesData["dbo.Autorizaciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Autorizaciones"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Autorizaciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Autorizaciones"][0]["detailKeys"][]="SeccionalId";
		
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
					$masterTablesData["dbo.Autorizaciones"][1] = $masterParams;
				$masterTablesData["dbo.Autorizaciones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Autorizaciones"][1]["masterKeys"][]="TramiteId";
				$masterTablesData["dbo.Autorizaciones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Autorizaciones"][1]["detailKeys"][]="TramiteId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_autorizaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "C.ConceptoId,  C.AbogadoId,  C.Fecha,  C.DespachoId,  C.Origen,  C.Providencia,  C.Ejecutoria,  C.PrimeraCopia,  C.Autentica,  C.PrestaMeritoEjecutivo,  C.Clara,  C.Expresa,  C.ActualmenteExigible,  C.CompetenciaDEAJ,  C.FaltaRequisitos,  C.FaltaCompetencia,  C.PorPrescripcion,  C.SeccionalId,  C.Folios,  C.SeccionalIdDestino,  C.Observaciones,  C.Procesado,  C.Tipo,  C.FechaSancion,  C.Cantidad,  C.Obligacion,  C.Costas,  C.Remisorio,  C.CarteraTipoId,  C.MinJusticia,  C.Aprobado,  C.AprobadoPor,  C.FechaAprobacion,  C.Plazo,  C.NaturalezaId,  C.Sigobius,  C.Monto,  C.TramiteId,  C.Fisico,  C.Digital,  C.ChequeoId";
$proto0["m_strFrom"] = "FROM dbo.Chequeos C  INNER JOIN Seccionales S ON s.SeccionalId = c.SeccionalId  INNER JOIN CarteraTipos CA ON CA.CarteraTipoId = C.CarteraTipoId  INNER JOIN Procesos P ON P.ChequeoId = C.ChequeoId";
$proto0["m_strWhere"] = "c.Obligacion = 0 or c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "c.Obligacion = 0 or c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "c.Obligacion = 0 or c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "c.Obligacion = 0";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 0";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1";
$proto6["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "c.Obligacion>(Select MaximoPesos from Empresas) and P.EstadoId <> 6 and c.Aprobado =1"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "c.Obligacion>(Select MaximoPesos from Empresas)";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = ">(Select MaximoPesos from Empresas)";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "P.EstadoId <> 6";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "<> 6";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "c.Aprobado =1";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Aprobado",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=1";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto16["m_sql"] = "C.ConceptoId";
$proto16["m_srcTableName"] = "dbo.Autorizaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto18["m_sql"] = "C.AbogadoId";
$proto18["m_srcTableName"] = "dbo.Autorizaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto20["m_sql"] = "C.Fecha";
$proto20["m_srcTableName"] = "dbo.Autorizaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto22["m_sql"] = "C.DespachoId";
$proto22["m_srcTableName"] = "dbo.Autorizaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto24["m_sql"] = "C.Origen";
$proto24["m_srcTableName"] = "dbo.Autorizaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto26["m_sql"] = "C.Providencia";
$proto26["m_srcTableName"] = "dbo.Autorizaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto28["m_sql"] = "C.Ejecutoria";
$proto28["m_srcTableName"] = "dbo.Autorizaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimeraCopia",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto30["m_sql"] = "C.PrimeraCopia";
$proto30["m_srcTableName"] = "dbo.Autorizaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Autentica",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto32["m_sql"] = "C.Autentica";
$proto32["m_srcTableName"] = "dbo.Autorizaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PrestaMeritoEjecutivo",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto34["m_sql"] = "C.PrestaMeritoEjecutivo";
$proto34["m_srcTableName"] = "dbo.Autorizaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Clara",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto36["m_sql"] = "C.Clara";
$proto36["m_srcTableName"] = "dbo.Autorizaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Expresa",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto38["m_sql"] = "C.Expresa";
$proto38["m_srcTableName"] = "dbo.Autorizaciones";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ActualmenteExigible",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto40["m_sql"] = "C.ActualmenteExigible";
$proto40["m_srcTableName"] = "dbo.Autorizaciones";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CompetenciaDEAJ",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto42["m_sql"] = "C.CompetenciaDEAJ";
$proto42["m_srcTableName"] = "dbo.Autorizaciones";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaRequisitos",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto44["m_sql"] = "C.FaltaRequisitos";
$proto44["m_srcTableName"] = "dbo.Autorizaciones";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "FaltaCompetencia",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto46["m_sql"] = "C.FaltaCompetencia";
$proto46["m_srcTableName"] = "dbo.Autorizaciones";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "PorPrescripcion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto48["m_sql"] = "C.PorPrescripcion";
$proto48["m_srcTableName"] = "dbo.Autorizaciones";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto50["m_sql"] = "C.SeccionalId";
$proto50["m_srcTableName"] = "dbo.Autorizaciones";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto52["m_sql"] = "C.Folios";
$proto52["m_srcTableName"] = "dbo.Autorizaciones";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalIdDestino",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto54["m_sql"] = "C.SeccionalIdDestino";
$proto54["m_srcTableName"] = "dbo.Autorizaciones";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto56["m_sql"] = "C.Observaciones";
$proto56["m_srcTableName"] = "dbo.Autorizaciones";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto58["m_sql"] = "C.Procesado";
$proto58["m_srcTableName"] = "dbo.Autorizaciones";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto60["m_sql"] = "C.Tipo";
$proto60["m_srcTableName"] = "dbo.Autorizaciones";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSancion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto62["m_sql"] = "C.FechaSancion";
$proto62["m_srcTableName"] = "dbo.Autorizaciones";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto64["m_sql"] = "C.Cantidad";
$proto64["m_srcTableName"] = "dbo.Autorizaciones";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto66["m_sql"] = "C.Obligacion";
$proto66["m_srcTableName"] = "dbo.Autorizaciones";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto68["m_sql"] = "C.Costas";
$proto68["m_srcTableName"] = "dbo.Autorizaciones";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Remisorio",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto70["m_sql"] = "C.Remisorio";
$proto70["m_srcTableName"] = "dbo.Autorizaciones";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto72["m_sql"] = "C.CarteraTipoId";
$proto72["m_srcTableName"] = "dbo.Autorizaciones";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto74["m_sql"] = "C.MinJusticia";
$proto74["m_srcTableName"] = "dbo.Autorizaciones";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobado",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto76["m_sql"] = "C.Aprobado";
$proto76["m_srcTableName"] = "dbo.Autorizaciones";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "AprobadoPor",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto78["m_sql"] = "C.AprobadoPor";
$proto78["m_srcTableName"] = "dbo.Autorizaciones";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAprobacion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto80["m_sql"] = "C.FechaAprobacion";
$proto80["m_srcTableName"] = "dbo.Autorizaciones";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto82["m_sql"] = "C.Plazo";
$proto82["m_srcTableName"] = "dbo.Autorizaciones";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto84["m_sql"] = "C.NaturalezaId";
$proto84["m_srcTableName"] = "dbo.Autorizaciones";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto86["m_sql"] = "C.Sigobius";
$proto86["m_srcTableName"] = "dbo.Autorizaciones";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Monto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto88["m_sql"] = "C.Monto";
$proto88["m_srcTableName"] = "dbo.Autorizaciones";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "TramiteId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto90["m_sql"] = "C.TramiteId";
$proto90["m_srcTableName"] = "dbo.Autorizaciones";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Fisico",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto92["m_sql"] = "C.Fisico";
$proto92["m_srcTableName"] = "dbo.Autorizaciones";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Digital",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto94["m_sql"] = "C.Digital";
$proto94["m_srcTableName"] = "dbo.Autorizaciones";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto96["m_sql"] = "C.ChequeoId";
$proto96["m_srcTableName"] = "dbo.Autorizaciones";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto98=array();
$proto98["m_link"] = "SQLL_MAIN";
			$proto99=array();
$proto99["m_strName"] = "dbo.Chequeos";
$proto99["m_srcTableName"] = "dbo.Autorizaciones";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "ChequeoId";
$proto99["m_columns"][] = "ConceptoId";
$proto99["m_columns"][] = "AbogadoId";
$proto99["m_columns"][] = "Fecha";
$proto99["m_columns"][] = "DespachoId";
$proto99["m_columns"][] = "Origen";
$proto99["m_columns"][] = "Providencia";
$proto99["m_columns"][] = "Ejecutoria";
$proto99["m_columns"][] = "PrimeraCopia";
$proto99["m_columns"][] = "Autentica";
$proto99["m_columns"][] = "PrestaMeritoEjecutivo";
$proto99["m_columns"][] = "Clara";
$proto99["m_columns"][] = "Expresa";
$proto99["m_columns"][] = "ActualmenteExigible";
$proto99["m_columns"][] = "CompetenciaDEAJ";
$proto99["m_columns"][] = "FaltaRequisitos";
$proto99["m_columns"][] = "FaltaCompetencia";
$proto99["m_columns"][] = "PorPrescripcion";
$proto99["m_columns"][] = "SeccionalId";
$proto99["m_columns"][] = "Folios";
$proto99["m_columns"][] = "SeccionalIdDestino";
$proto99["m_columns"][] = "Observaciones";
$proto99["m_columns"][] = "Procesado";
$proto99["m_columns"][] = "Tipo";
$proto99["m_columns"][] = "FechaSancion";
$proto99["m_columns"][] = "Cantidad";
$proto99["m_columns"][] = "Obligacion";
$proto99["m_columns"][] = "Costas";
$proto99["m_columns"][] = "Remisorio";
$proto99["m_columns"][] = "CarteraTipoId";
$proto99["m_columns"][] = "MinJusticia";
$proto99["m_columns"][] = "Aprobado";
$proto99["m_columns"][] = "AprobadoPor";
$proto99["m_columns"][] = "FechaAprobacion";
$proto99["m_columns"][] = "Plazo";
$proto99["m_columns"][] = "NaturalezaId";
$proto99["m_columns"][] = "Sigobius";
$proto99["m_columns"][] = "Monto";
$proto99["m_columns"][] = "TramiteId";
$proto99["m_columns"][] = "Fisico";
$proto99["m_columns"][] = "Digital";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "dbo.Chequeos C";
$proto98["m_alias"] = "C";
$proto98["m_srcTableName"] = "dbo.Autorizaciones";
$proto100=array();
$proto100["m_sql"] = "";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "";
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
$proto103["m_strName"] = "dbo.Seccionales";
$proto103["m_srcTableName"] = "dbo.Autorizaciones";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "SeccionalId";
$proto103["m_columns"][] = "Codigo";
$proto103["m_columns"][] = "Seccional";
$proto103["m_columns"][] = "NIT";
$proto103["m_columns"][] = "CiudadId";
$proto103["m_columns"][] = "PiePagina";
$proto103["m_columns"][] = "Sigobius";
$proto103["m_columns"][] = "Email";
$proto103["m_columns"][] = "Direccion";
$proto103["m_columns"][] = "Telefonos";
$proto103["m_columns"][] = "PCI";
$proto103["m_columns"][] = "Contador";
$proto103["m_columns"][] = "ContadorCargo";
$proto103["m_columns"][] = "Director";
$proto103["m_columns"][] = "DirectorCargo";
$proto103["m_columns"][] = "Abogado";
$proto103["m_columns"][] = "AbogadoCargo";
$proto103["m_columns"][] = "Formato";
$proto103["m_columns"][] = "Corporacion";
$proto103["m_columns"][] = "Unidad";
$proto103["m_columns"][] = "Oficina";
$proto103["m_columns"][] = "Serie";
$proto103["m_columns"][] = "Subserie";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "INNER JOIN Seccionales S ON s.SeccionalId = c.SeccionalId";
$proto102["m_alias"] = "S";
$proto102["m_srcTableName"] = "dbo.Autorizaciones";
$proto104=array();
$proto104["m_sql"] = "S.SeccionalId = C.SeccionalId";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= C.SeccionalId";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
												$proto106=array();
$proto106["m_link"] = "SQLL_INNERJOIN";
			$proto107=array();
$proto107["m_strName"] = "dbo.CarteraTipos";
$proto107["m_srcTableName"] = "dbo.Autorizaciones";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "CarteraTipoId";
$proto107["m_columns"][] = "CarteraTipo";
$proto107["m_columns"][] = "Color";
$proto107["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "INNER JOIN CarteraTipos CA ON CA.CarteraTipoId = C.CarteraTipoId";
$proto106["m_alias"] = "CA";
$proto106["m_srcTableName"] = "dbo.Autorizaciones";
$proto108=array();
$proto108["m_sql"] = "CA.CarteraTipoId = C.CarteraTipoId";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CA",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= C.CarteraTipoId";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

$proto106["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto106);

$proto0["m_fromlist"][]=$obj;
												$proto110=array();
$proto110["m_link"] = "SQLL_INNERJOIN";
			$proto111=array();
$proto111["m_strName"] = "dbo.Procesos";
$proto111["m_srcTableName"] = "dbo.Autorizaciones";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "ProcesoId";
$proto111["m_columns"][] = "SeccionalId";
$proto111["m_columns"][] = "AbogadoId";
$proto111["m_columns"][] = "Fecha";
$proto111["m_columns"][] = "Numero";
$proto111["m_columns"][] = "DespachoId";
$proto111["m_columns"][] = "SancionadoId";
$proto111["m_columns"][] = "Providencia";
$proto111["m_columns"][] = "Ejecutoria";
$proto111["m_columns"][] = "ConceptoId";
$proto111["m_columns"][] = "EstadoId";
$proto111["m_columns"][] = "EtapaId";
$proto111["m_columns"][] = "Folios";
$proto111["m_columns"][] = "Tipo";
$proto111["m_columns"][] = "Cantidad";
$proto111["m_columns"][] = "Obligacion";
$proto111["m_columns"][] = "Costas";
$proto111["m_columns"][] = "Liquidacion";
$proto111["m_columns"][] = "Dias";
$proto111["m_columns"][] = "Intereses";
$proto111["m_columns"][] = "Recaudo";
$proto111["m_columns"][] = "CalificacionId";
$proto111["m_columns"][] = "Terminacion";
$proto111["m_columns"][] = "MotivoId";
$proto111["m_columns"][] = "Observaciones";
$proto111["m_columns"][] = "Cuotas";
$proto111["m_columns"][] = "Abono";
$proto111["m_columns"][] = "Inicio";
$proto111["m_columns"][] = "VlrCuota";
$proto111["m_columns"][] = "VlrIntereses";
$proto111["m_columns"][] = "Garantia";
$proto111["m_columns"][] = "Radicado";
$proto111["m_columns"][] = "Remisorio";
$proto111["m_columns"][] = "Acuerdo";
$proto111["m_columns"][] = "Incumplimiento";
$proto111["m_columns"][] = "Notificacion";
$proto111["m_columns"][] = "Suspension";
$proto111["m_columns"][] = "Traslado";
$proto111["m_columns"][] = "Error";
$proto111["m_columns"][] = "CarteraTipoId";
$proto111["m_columns"][] = "ConceptoAbogado";
$proto111["m_columns"][] = "Origen";
$proto111["m_columns"][] = "Carpeta";
$proto111["m_columns"][] = "ImportacionId";
$proto111["m_columns"][] = "ActuacionId";
$proto111["m_columns"][] = "ObligacionInicial";
$proto111["m_columns"][] = "CostasInicial";
$proto111["m_columns"][] = "InteresesInicial";
$proto111["m_columns"][] = "MinJusticia";
$proto111["m_columns"][] = "Revocatoria";
$proto111["m_columns"][] = "Mayor";
$proto111["m_columns"][] = "NotificacionValidada";
$proto111["m_columns"][] = "Validado";
$proto111["m_columns"][] = "Seleccionado";
$proto111["m_columns"][] = "CompetenciaId";
$proto111["m_columns"][] = "MinjusticiaId";
$proto111["m_columns"][] = "SeleccionadoPor";
$proto111["m_columns"][] = "Subsanar";
$proto111["m_columns"][] = "NumeroMinjusticia";
$proto111["m_columns"][] = "ProcesoIdOrigen";
$proto111["m_columns"][] = "SeleccionadoFecha";
$proto111["m_columns"][] = "InteresesIniciales";
$proto111["m_columns"][] = "InteresesCalculados";
$proto111["m_columns"][] = "ProcesoIdDestino";
$proto111["m_columns"][] = "RecaudoMinjusticia";
$proto111["m_columns"][] = "RecaudoTerminado";
$proto111["m_columns"][] = "Persuasivo";
$proto111["m_columns"][] = "ObligacionCreacion";
$proto111["m_columns"][] = "InteresesCreacion";
$proto111["m_columns"][] = "CostasCreacion";
$proto111["m_columns"][] = "Plazo";
$proto111["m_columns"][] = "NaturalezaId";
$proto111["m_columns"][] = "TrasladoCartera";
$proto111["m_columns"][] = "CarteraTipoIdOrigen";
$proto111["m_columns"][] = "TrasladoConcepto";
$proto111["m_columns"][] = "ConceptoIdOrigen";
$proto111["m_columns"][] = "AutorizadoPlazo";
$proto111["m_columns"][] = "AutorizadoFecha";
$proto111["m_columns"][] = "AutorizadoPor";
$proto111["m_columns"][] = "Reliquidacion";
$proto111["m_columns"][] = "ChequeoId";
$proto111["m_columns"][] = "VlrCostas";
$proto111["m_columns"][] = "VlrInteresesPlazo";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "INNER JOIN Procesos P ON P.ChequeoId = C.ChequeoId";
$proto110["m_alias"] = "P";
$proto110["m_srcTableName"] = "dbo.Autorizaciones";
$proto112=array();
$proto112["m_sql"] = "P.ChequeoId = C.ChequeoId";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= C.ChequeoId";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Autorizaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_autorizaciones = createSqlQuery_autorizaciones();


	
		;

																																									

$tdataautorizaciones[".sqlquery"] = $queryData_autorizaciones;



include_once(getabspath("include/autorizaciones_events.php"));
$tdataautorizaciones[".hasEvents"] = true;

?>