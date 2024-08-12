<?php
$tdatabdme_reporte_semestral = array();
$tdatabdme_reporte_semestral[".searchableFields"] = array();
$tdatabdme_reporte_semestral[".ShortName"] = "bdme_reporte_semestral";
$tdatabdme_reporte_semestral[".OwnerID"] = "";
$tdatabdme_reporte_semestral[".OriginalTable"] = "BDME Reporte Semestral";


$tdatabdme_reporte_semestral[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_reporte_semestral[".originalPagesByType"] = $tdatabdme_reporte_semestral[".pagesByType"];
$tdatabdme_reporte_semestral[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_reporte_semestral[".originalPages"] = $tdatabdme_reporte_semestral[".pages"];
$tdatabdme_reporte_semestral[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_reporte_semestral[".originalDefaultPages"] = $tdatabdme_reporte_semestral[".defaultPages"];

//	field labels
$fieldLabelsbdme_reporte_semestral = array();
$fieldToolTipsbdme_reporte_semestral = array();
$pageTitlesbdme_reporte_semestral = array();
$placeHoldersbdme_reporte_semestral = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_reporte_semestral["Spanish"] = array();
	$fieldToolTipsbdme_reporte_semestral["Spanish"] = array();
	$placeHoldersbdme_reporte_semestral["Spanish"] = array();
	$pageTitlesbdme_reporte_semestral["Spanish"] = array();
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Seccional"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Seccional"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Concepto"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Concepto"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["TipoDeudor"] = "Tipo Deudor";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["TipoDeudor"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["TipoDeudor"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Numero"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Numero"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Documento"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Documento"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["TipoDocumento"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["TipoDocumento"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Deuda"] = "Deuda";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Deuda"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Deuda"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["Estado"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["Estado"] = "";
	$fieldLabelsbdme_reporte_semestral["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsbdme_reporte_semestral["Spanish"]["SancionadoId"] = "";
	$placeHoldersbdme_reporte_semestral["Spanish"]["SancionadoId"] = "";
	if (count($fieldToolTipsbdme_reporte_semestral["Spanish"]))
		$tdatabdme_reporte_semestral[".isUseToolTips"] = true;
}


	$tdatabdme_reporte_semestral[".NCSearch"] = true;



$tdatabdme_reporte_semestral[".shortTableName"] = "bdme_reporte_semestral";
$tdatabdme_reporte_semestral[".nSecOptions"] = 0;

$tdatabdme_reporte_semestral[".mainTableOwnerID"] = "";
$tdatabdme_reporte_semestral[".entityType"] = 6;
$tdatabdme_reporte_semestral[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_reporte_semestral[".strOriginalTableName"] = "BDME Reporte Semestral";

	



$tdatabdme_reporte_semestral[".showAddInPopup"] = false;

$tdatabdme_reporte_semestral[".showEditInPopup"] = false;

$tdatabdme_reporte_semestral[".showViewInPopup"] = false;

$tdatabdme_reporte_semestral[".listAjax"] = false;
//	temporary
//$tdatabdme_reporte_semestral[".listAjax"] = false;

	$tdatabdme_reporte_semestral[".audit"] = false;

	$tdatabdme_reporte_semestral[".locking"] = false;


$pages = $tdatabdme_reporte_semestral[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_reporte_semestral[".edit"] = true;
	$tdatabdme_reporte_semestral[".afterEditAction"] = 1;
	$tdatabdme_reporte_semestral[".closePopupAfterEdit"] = 1;
	$tdatabdme_reporte_semestral[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_reporte_semestral[".add"] = true;
$tdatabdme_reporte_semestral[".afterAddAction"] = 1;
$tdatabdme_reporte_semestral[".closePopupAfterAdd"] = 1;
$tdatabdme_reporte_semestral[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_reporte_semestral[".list"] = true;
}



$tdatabdme_reporte_semestral[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_reporte_semestral[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_reporte_semestral[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_reporte_semestral[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_reporte_semestral[".printFriendly"] = true;
}



$tdatabdme_reporte_semestral[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_reporte_semestral[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_reporte_semestral[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_reporte_semestral[".isUseAjaxSuggest"] = false;



																																																																																																																																							

$tdatabdme_reporte_semestral[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_reporte_semestral[".buttonsAdded"] = false;

$tdatabdme_reporte_semestral[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_reporte_semestral[".isUseTimeForSearch"] = false;


$tdatabdme_reporte_semestral[".badgeColor"] = "778899";


$tdatabdme_reporte_semestral[".allSearchFields"] = array();
$tdatabdme_reporte_semestral[".filterFields"] = array();
$tdatabdme_reporte_semestral[".requiredSearchFields"] = array();

$tdatabdme_reporte_semestral[".googleLikeFields"] = array();
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Seccional";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Concepto";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "TipoDeudor";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Numero";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Documento";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "TipoDocumento";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Sancionado";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Deuda";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "Estado";
$tdatabdme_reporte_semestral[".googleLikeFields"][] = "SancionadoId";




$tdatabdme_reporte_semestral[".printerPageOrientation"] = 0;
$tdatabdme_reporte_semestral[".nPrinterPageScale"] = 100;

$tdatabdme_reporte_semestral[".nPrinterSplitRecords"] = 40;

$tdatabdme_reporte_semestral[".geocodingEnabled"] = false;










$tdatabdme_reporte_semestral[".pageSize"] = 20;

$tdatabdme_reporte_semestral[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_reporte_semestral[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_reporte_semestral[".orderindexes"] = array();


$tdatabdme_reporte_semestral[".sqlHead"] = "";
$tdatabdme_reporte_semestral[".sqlFrom"] = "";
$tdatabdme_reporte_semestral[".sqlWhereExpr"] = "";
$tdatabdme_reporte_semestral[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_reporte_semestral[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_reporte_semestral[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_reporte_semestral[".highlightSearchResults"] = true;

$tableKeysbdme_reporte_semestral = array();
$tdatabdme_reporte_semestral[".Keys"] = $tableKeysbdme_reporte_semestral;


$tdatabdme_reporte_semestral[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["FullName"] = "Seccional";

	
	
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


	$tdatabdme_reporte_semestral["Seccional"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["FullName"] = "Concepto";

	
	
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


	$tdatabdme_reporte_semestral["Concepto"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Concepto";
//	TipoDeudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDeudor";
	$fdata["GoodName"] = "TipoDeudor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","TipoDeudor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDeudor";

	
		$fdata["FullName"] = "TipoDeudor";

	
	
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


	$tdatabdme_reporte_semestral["TipoDeudor"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "TipoDeudor";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Numero");
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


	$tdatabdme_reporte_semestral["Numero"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Numero";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["FullName"] = "Documento";

	
	
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


	$tdatabdme_reporte_semestral["Documento"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","TipoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDocumento";

	
		$fdata["FullName"] = "TipoDocumento";

	
	
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


	$tdatabdme_reporte_semestral["TipoDocumento"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "TipoDocumento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Sancionado");
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


	$tdatabdme_reporte_semestral["Sancionado"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Sancionado";
//	Deuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Deuda";
	$fdata["GoodName"] = "Deuda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Deuda");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Deuda";

	
		$fdata["FullName"] = "Deuda";

	
	
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


	$tdatabdme_reporte_semestral["Deuda"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Deuda";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["FullName"] = "Estado";

	
	
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


	$tdatabdme_reporte_semestral["Estado"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "Estado";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Reporte_Semestral","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

	
		$fdata["FullName"] = "SancionadoId";

	
	
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


	$tdatabdme_reporte_semestral["SancionadoId"] = $fdata;
		$tdatabdme_reporte_semestral[".searchableFields"][] = "SancionadoId";


$tables_data["BDME Reporte Semestral"]=&$tdatabdme_reporte_semestral;
$field_labels["BDME_Reporte_Semestral"] = &$fieldLabelsbdme_reporte_semestral;
$fieldToolTips["BDME_Reporte_Semestral"] = &$fieldToolTipsbdme_reporte_semestral;
$placeHolders["BDME_Reporte_Semestral"] = &$placeHoldersbdme_reporte_semestral;
$page_titles["BDME_Reporte_Semestral"] = &$pageTitlesbdme_reporte_semestral;


changeTextControlsToDate( "BDME Reporte Semestral" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Reporte Semestral"] = array();
//	BDME Reporte Semestral Datachild
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BDME Reporte Semestral Datachild";
		$detailsParam["dOriginalTable"] = "BDME Reporte Semestral Datachild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "bdme_reporte_semestral_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("BDME_Reporte_Semestral_Datachild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["BDME Reporte Semestral"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BDME Reporte Semestral"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BDME Reporte Semestral"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["BDME Reporte Semestral"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BDME Reporte Semestral"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Reporte Semestral"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_reporte_semestral_ops.php" ) );



	
		;

										

$tdatabdme_reporte_semestral[".sqlquery"] = $queryData_bdme_reporte_semestral;



$tdatabdme_reporte_semestral[".hasEvents"] = false;

?>