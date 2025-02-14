<?php
$tdataprocesos_sin_notificaci_n = array();
$tdataprocesos_sin_notificaci_n[".searchableFields"] = array();
$tdataprocesos_sin_notificaci_n[".ShortName"] = "procesos_sin_notificaci_n";
$tdataprocesos_sin_notificaci_n[".OwnerID"] = "";
$tdataprocesos_sin_notificaci_n[".OriginalTable"] = "Procesos Sin Notificación";


$tdataprocesos_sin_notificaci_n[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprocesos_sin_notificaci_n[".originalPagesByType"] = $tdataprocesos_sin_notificaci_n[".pagesByType"];
$tdataprocesos_sin_notificaci_n[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprocesos_sin_notificaci_n[".originalPages"] = $tdataprocesos_sin_notificaci_n[".pages"];
$tdataprocesos_sin_notificaci_n[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprocesos_sin_notificaci_n[".originalDefaultPages"] = $tdataprocesos_sin_notificaci_n[".defaultPages"];

//	field labels
$fieldLabelsprocesos_sin_notificaci_n = array();
$fieldToolTipsprocesos_sin_notificaci_n = array();
$pageTitlesprocesos_sin_notificaci_n = array();
$placeHoldersprocesos_sin_notificaci_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"] = array();
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"] = array();
	$placeHoldersprocesos_sin_notificaci_n["Spanish"] = array();
	$pageTitlesprocesos_sin_notificaci_n["Spanish"] = array();
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Abogado"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Abogado"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Fecha"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Numero"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Numero"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Sancionado"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Sancionado"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Intereses"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Costas"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Costas"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["Mandamiento"] = "Mandamiento";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["Mandamiento"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["Mandamiento"] = "";
	$fieldLabelsprocesos_sin_notificaci_n["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsprocesos_sin_notificaci_n["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesos_sin_notificaci_n["Spanish"]["EstadoId"] = "";
	if (count($fieldToolTipsprocesos_sin_notificaci_n["Spanish"]))
		$tdataprocesos_sin_notificaci_n[".isUseToolTips"] = true;
}


	$tdataprocesos_sin_notificaci_n[".NCSearch"] = true;


	$tdataprocesos_sin_notificaci_n[".scrollGridBody"] = true;

$tdataprocesos_sin_notificaci_n[".shortTableName"] = "procesos_sin_notificaci_n";
$tdataprocesos_sin_notificaci_n[".nSecOptions"] = 0;

$tdataprocesos_sin_notificaci_n[".mainTableOwnerID"] = "";
$tdataprocesos_sin_notificaci_n[".entityType"] = 6;
$tdataprocesos_sin_notificaci_n[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesos_sin_notificaci_n[".strOriginalTableName"] = "Procesos Sin Notificación";

	



$tdataprocesos_sin_notificaci_n[".showAddInPopup"] = false;

$tdataprocesos_sin_notificaci_n[".showEditInPopup"] = false;

$tdataprocesos_sin_notificaci_n[".showViewInPopup"] = false;

$tdataprocesos_sin_notificaci_n[".listAjax"] = false;
//	temporary
//$tdataprocesos_sin_notificaci_n[".listAjax"] = false;

	$tdataprocesos_sin_notificaci_n[".audit"] = false;

	$tdataprocesos_sin_notificaci_n[".locking"] = false;


$pages = $tdataprocesos_sin_notificaci_n[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesos_sin_notificaci_n[".edit"] = true;
	$tdataprocesos_sin_notificaci_n[".afterEditAction"] = 1;
	$tdataprocesos_sin_notificaci_n[".closePopupAfterEdit"] = 1;
	$tdataprocesos_sin_notificaci_n[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesos_sin_notificaci_n[".add"] = true;
$tdataprocesos_sin_notificaci_n[".afterAddAction"] = 1;
$tdataprocesos_sin_notificaci_n[".closePopupAfterAdd"] = 1;
$tdataprocesos_sin_notificaci_n[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesos_sin_notificaci_n[".list"] = true;
}



$tdataprocesos_sin_notificaci_n[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesos_sin_notificaci_n[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesos_sin_notificaci_n[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesos_sin_notificaci_n[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesos_sin_notificaci_n[".printFriendly"] = true;
}



$tdataprocesos_sin_notificaci_n[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesos_sin_notificaci_n[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesos_sin_notificaci_n[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesos_sin_notificaci_n[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																									

$tdataprocesos_sin_notificaci_n[".ajaxCodeSnippetAdded"] = false;

$tdataprocesos_sin_notificaci_n[".buttonsAdded"] = false;

$tdataprocesos_sin_notificaci_n[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesos_sin_notificaci_n[".isUseTimeForSearch"] = false;


$tdataprocesos_sin_notificaci_n[".badgeColor"] = "DAA520";


$tdataprocesos_sin_notificaci_n[".allSearchFields"] = array();
$tdataprocesos_sin_notificaci_n[".filterFields"] = array();
$tdataprocesos_sin_notificaci_n[".requiredSearchFields"] = array();

$tdataprocesos_sin_notificaci_n[".googleLikeFields"] = array();
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "SeccionalId";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Abogado";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Fecha";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "ConceptoId";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Numero";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Sancionado";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "SancionadoDocumento";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Obligacion";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Intereses";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Costas";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "Mandamiento";
$tdataprocesos_sin_notificaci_n[".googleLikeFields"][] = "EstadoId";




$tdataprocesos_sin_notificaci_n[".printerPageOrientation"] = 0;
$tdataprocesos_sin_notificaci_n[".nPrinterPageScale"] = 100;

$tdataprocesos_sin_notificaci_n[".nPrinterSplitRecords"] = 40;

$tdataprocesos_sin_notificaci_n[".geocodingEnabled"] = false;




$tdataprocesos_sin_notificaci_n[".isDisplayLoading"] = true;






$tdataprocesos_sin_notificaci_n[".pageSize"] = 2000;

$tdataprocesos_sin_notificaci_n[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprocesos_sin_notificaci_n[".strOrderBy"] = $tstrOrderBy;

$tdataprocesos_sin_notificaci_n[".orderindexes"] = array();


$tdataprocesos_sin_notificaci_n[".sqlHead"] = "";
$tdataprocesos_sin_notificaci_n[".sqlFrom"] = "";
$tdataprocesos_sin_notificaci_n[".sqlWhereExpr"] = "";
$tdataprocesos_sin_notificaci_n[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataprocesos_sin_notificaci_n[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesos_sin_notificaci_n[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesos_sin_notificaci_n[".highlightSearchResults"] = true;

$tableKeysprocesos_sin_notificaci_n = array();
$tdataprocesos_sin_notificaci_n[".Keys"] = $tableKeysprocesos_sin_notificaci_n;


$tdataprocesos_sin_notificaci_n[".hideMobileList"] = array();




//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

	
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataprocesos_sin_notificaci_n["CarteraTipoId"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "CarteraTipoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataprocesos_sin_notificaci_n["SeccionalId"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "SeccionalId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["FullName"] = "Abogado";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Abogado";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
	$edata["LookupOrderBy"] = "Abogado";

	
	
	
	

	
	
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


	$tdataprocesos_sin_notificaci_n["Abogado"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Fecha");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Fecha";

	
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


	$tdataprocesos_sin_notificaci_n["Fecha"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Fecha";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

	
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

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataprocesos_sin_notificaci_n["ConceptoId"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "ConceptoId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["FullName"] = "Numero";

	
	
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


	$tdataprocesos_sin_notificaci_n["Numero"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["FullName"] = "Sancionado";

	
	
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


	$tdataprocesos_sin_notificaci_n["Sancionado"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","SancionadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoDocumento";

	
		$fdata["FullName"] = "SancionadoDocumento";

	
	
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


	$tdataprocesos_sin_notificaci_n["SancionadoDocumento"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "SancionadoDocumento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

	
		$fdata["FullName"] = "Obligacion";

	
	
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


	$tdataprocesos_sin_notificaci_n["Obligacion"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

	
		$fdata["FullName"] = "Intereses";

	
	
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


	$tdataprocesos_sin_notificaci_n["Intereses"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

	
		$fdata["FullName"] = "Costas";

	
	
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


	$tdataprocesos_sin_notificaci_n["Costas"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Costas";
//	Mandamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Mandamiento";
	$fdata["GoodName"] = "Mandamiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","Mandamiento");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Mandamiento";

	
		$fdata["FullName"] = "Mandamiento";

	
	
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


	$tdataprocesos_sin_notificaci_n["Mandamiento"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "Mandamiento";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Notificaci_n","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

	
		$fdata["FullName"] = "EstadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EstadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataprocesos_sin_notificaci_n["EstadoId"] = $fdata;
		$tdataprocesos_sin_notificaci_n[".searchableFields"][] = "EstadoId";


$tables_data["Procesos Sin Notificación"]=&$tdataprocesos_sin_notificaci_n;
$field_labels["Procesos_Sin_Notificaci_n"] = &$fieldLabelsprocesos_sin_notificaci_n;
$fieldToolTips["Procesos_Sin_Notificaci_n"] = &$fieldToolTipsprocesos_sin_notificaci_n;
$placeHolders["Procesos_Sin_Notificaci_n"] = &$placeHoldersprocesos_sin_notificaci_n;
$page_titles["Procesos_Sin_Notificaci_n"] = &$pageTitlesprocesos_sin_notificaci_n;


changeTextControlsToDate( "Procesos Sin Notificación" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Procesos Sin Notificación"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Procesos Sin Notificación"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/procesos_sin_notificaci_n_ops.php" ) );



	
		;

													

$tdataprocesos_sin_notificaci_n[".sqlquery"] = $queryData_procesos_sin_notificaci_n;



include_once(getabspath("include/procesos_sin_notificaci_n_events.php"));
$tdataprocesos_sin_notificaci_n[".hasEvents"] = true;

?>