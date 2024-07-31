<?php
$tdatabdme_retiros = array();
$tdatabdme_retiros[".searchableFields"] = array();
$tdatabdme_retiros[".ShortName"] = "bdme_retiros";
$tdatabdme_retiros[".OwnerID"] = "";
$tdatabdme_retiros[".OriginalTable"] = "BDME Retiros";


$tdatabdme_retiros[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_retiros[".originalPagesByType"] = $tdatabdme_retiros[".pagesByType"];
$tdatabdme_retiros[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_retiros[".originalPages"] = $tdatabdme_retiros[".pages"];
$tdatabdme_retiros[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_retiros[".originalDefaultPages"] = $tdatabdme_retiros[".defaultPages"];

//	field labels
$fieldLabelsbdme_retiros = array();
$fieldToolTipsbdme_retiros = array();
$pageTitlesbdme_retiros = array();
$placeHoldersbdme_retiros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_retiros["Spanish"] = array();
	$fieldToolTipsbdme_retiros["Spanish"] = array();
	$placeHoldersbdme_retiros["Spanish"] = array();
	$pageTitlesbdme_retiros["Spanish"] = array();
	$fieldLabelsbdme_retiros["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsbdme_retiros["Spanish"]["Seccional"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Seccional"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsbdme_retiros["Spanish"]["Concepto"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Concepto"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["TipoDeudor"] = "Tipo Deudor";
	$fieldToolTipsbdme_retiros["Spanish"]["TipoDeudor"] = "";
	$placeHoldersbdme_retiros["Spanish"]["TipoDeudor"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsbdme_retiros["Spanish"]["Numero"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Numero"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_retiros["Spanish"]["Documento"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Documento"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipsbdme_retiros["Spanish"]["TipoDocumento"] = "";
	$placeHoldersbdme_retiros["Spanish"]["TipoDocumento"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_retiros["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Deuda"] = "Deuda";
	$fieldToolTipsbdme_retiros["Spanish"]["Deuda"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Deuda"] = "";
	$fieldLabelsbdme_retiros["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsbdme_retiros["Spanish"]["Estado"] = "";
	$placeHoldersbdme_retiros["Spanish"]["Estado"] = "";
	if (count($fieldToolTipsbdme_retiros["Spanish"]))
		$tdatabdme_retiros[".isUseToolTips"] = true;
}


	$tdatabdme_retiros[".NCSearch"] = true;



$tdatabdme_retiros[".shortTableName"] = "bdme_retiros";
$tdatabdme_retiros[".nSecOptions"] = 0;

$tdatabdme_retiros[".mainTableOwnerID"] = "";
$tdatabdme_retiros[".entityType"] = 6;
$tdatabdme_retiros[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_retiros[".strOriginalTableName"] = "BDME Retiros";

	



$tdatabdme_retiros[".showAddInPopup"] = false;

$tdatabdme_retiros[".showEditInPopup"] = false;

$tdatabdme_retiros[".showViewInPopup"] = false;

$tdatabdme_retiros[".listAjax"] = false;
//	temporary
//$tdatabdme_retiros[".listAjax"] = false;

	$tdatabdme_retiros[".audit"] = false;

	$tdatabdme_retiros[".locking"] = false;


$pages = $tdatabdme_retiros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_retiros[".edit"] = true;
	$tdatabdme_retiros[".afterEditAction"] = 1;
	$tdatabdme_retiros[".closePopupAfterEdit"] = 1;
	$tdatabdme_retiros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_retiros[".add"] = true;
$tdatabdme_retiros[".afterAddAction"] = 1;
$tdatabdme_retiros[".closePopupAfterAdd"] = 1;
$tdatabdme_retiros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_retiros[".list"] = true;
}



$tdatabdme_retiros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_retiros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_retiros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_retiros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_retiros[".printFriendly"] = true;
}



$tdatabdme_retiros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_retiros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_retiros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_retiros[".isUseAjaxSuggest"] = false;



																																																																																																

$tdatabdme_retiros[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_retiros[".buttonsAdded"] = false;

$tdatabdme_retiros[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_retiros[".isUseTimeForSearch"] = false;


$tdatabdme_retiros[".badgeColor"] = "D2AF80";


$tdatabdme_retiros[".allSearchFields"] = array();
$tdatabdme_retiros[".filterFields"] = array();
$tdatabdme_retiros[".requiredSearchFields"] = array();

$tdatabdme_retiros[".googleLikeFields"] = array();
$tdatabdme_retiros[".googleLikeFields"][] = "Seccional";
$tdatabdme_retiros[".googleLikeFields"][] = "Concepto";
$tdatabdme_retiros[".googleLikeFields"][] = "TipoDeudor";
$tdatabdme_retiros[".googleLikeFields"][] = "Numero";
$tdatabdme_retiros[".googleLikeFields"][] = "Documento";
$tdatabdme_retiros[".googleLikeFields"][] = "TipoDocumento";
$tdatabdme_retiros[".googleLikeFields"][] = "Sancionado";
$tdatabdme_retiros[".googleLikeFields"][] = "Deuda";
$tdatabdme_retiros[".googleLikeFields"][] = "Estado";




$tdatabdme_retiros[".printerPageOrientation"] = 0;
$tdatabdme_retiros[".nPrinterPageScale"] = 100;

$tdatabdme_retiros[".nPrinterSplitRecords"] = 40;

$tdatabdme_retiros[".geocodingEnabled"] = false;










$tdatabdme_retiros[".pageSize"] = 20;

$tdatabdme_retiros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_retiros[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_retiros[".orderindexes"] = array();


$tdatabdme_retiros[".sqlHead"] = "";
$tdatabdme_retiros[".sqlFrom"] = "";
$tdatabdme_retiros[".sqlWhereExpr"] = "";
$tdatabdme_retiros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_retiros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_retiros[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_retiros[".highlightSearchResults"] = true;

$tableKeysbdme_retiros = array();
$tdatabdme_retiros[".Keys"] = $tableKeysbdme_retiros;


$tdatabdme_retiros[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Seccional");
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


	$tdatabdme_retiros["Seccional"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Concepto");
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


	$tdatabdme_retiros["Concepto"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Concepto";
//	TipoDeudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDeudor";
	$fdata["GoodName"] = "TipoDeudor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","TipoDeudor");
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


	$tdatabdme_retiros["TipoDeudor"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "TipoDeudor";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Numero");
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


	$tdatabdme_retiros["Numero"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Numero";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Documento");
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


	$tdatabdme_retiros["Documento"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","TipoDocumento");
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


	$tdatabdme_retiros["TipoDocumento"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "TipoDocumento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Sancionado");
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


	$tdatabdme_retiros["Sancionado"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Sancionado";
//	Deuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Deuda";
	$fdata["GoodName"] = "Deuda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Deuda");
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


	$tdatabdme_retiros["Deuda"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Deuda";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Estado");
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


	$tdatabdme_retiros["Estado"] = $fdata;
		$tdatabdme_retiros[".searchableFields"][] = "Estado";


$tables_data["BDME Retiros"]=&$tdatabdme_retiros;
$field_labels["BDME_Retiros"] = &$fieldLabelsbdme_retiros;
$fieldToolTips["BDME_Retiros"] = &$fieldToolTipsbdme_retiros;
$placeHolders["BDME_Retiros"] = &$placeHoldersbdme_retiros;
$page_titles["BDME_Retiros"] = &$pageTitlesbdme_retiros;


changeTextControlsToDate( "BDME Retiros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Retiros"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Retiros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_retiros_ops.php" ) );



	
		;

									

$tdatabdme_retiros[".sqlquery"] = $queryData_bdme_retiros;



$tdatabdme_retiros[".hasEvents"] = false;

?>