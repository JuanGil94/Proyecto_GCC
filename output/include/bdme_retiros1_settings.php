<?php
$tdatabdme_retiros1 = array();
$tdatabdme_retiros1[".searchableFields"] = array();
$tdatabdme_retiros1[".ShortName"] = "bdme_retiros1";
$tdatabdme_retiros1[".OwnerID"] = "";
$tdatabdme_retiros1[".OriginalTable"] = "BDME Retiros";


$tdatabdme_retiros1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_retiros1[".originalPagesByType"] = $tdatabdme_retiros1[".pagesByType"];
$tdatabdme_retiros1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_retiros1[".originalPages"] = $tdatabdme_retiros1[".pages"];
$tdatabdme_retiros1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_retiros1[".originalDefaultPages"] = $tdatabdme_retiros1[".defaultPages"];

//	field labels
$fieldLabelsbdme_retiros1 = array();
$fieldToolTipsbdme_retiros1 = array();
$pageTitlesbdme_retiros1 = array();
$placeHoldersbdme_retiros1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_retiros1["Spanish"] = array();
	$fieldToolTipsbdme_retiros1["Spanish"] = array();
	$placeHoldersbdme_retiros1["Spanish"] = array();
	$pageTitlesbdme_retiros1["Spanish"] = array();
	$fieldLabelsbdme_retiros1["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsbdme_retiros1["Spanish"]["SancionadoId"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["SancionadoId"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsbdme_retiros1["Spanish"]["Seccional"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Seccional"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsbdme_retiros1["Spanish"]["Concepto"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Concepto"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["TipoDeudor"] = "Tipo Deudor";
	$fieldToolTipsbdme_retiros1["Spanish"]["TipoDeudor"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["TipoDeudor"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsbdme_retiros1["Spanish"]["Numero"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Numero"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_retiros1["Spanish"]["Documento"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Documento"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipsbdme_retiros1["Spanish"]["TipoDocumento"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["TipoDocumento"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_retiros1["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Deuda"] = "Deuda";
	$fieldToolTipsbdme_retiros1["Spanish"]["Deuda"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Deuda"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Causal"] = "Causal";
	$fieldToolTipsbdme_retiros1["Spanish"]["Causal"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Causal"] = "";
	$fieldLabelsbdme_retiros1["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsbdme_retiros1["Spanish"]["Estado"] = "";
	$placeHoldersbdme_retiros1["Spanish"]["Estado"] = "";
	if (count($fieldToolTipsbdme_retiros1["Spanish"]))
		$tdatabdme_retiros1[".isUseToolTips"] = true;
}


	$tdatabdme_retiros1[".NCSearch"] = true;


	$tdatabdme_retiros1[".scrollGridBody"] = true;

$tdatabdme_retiros1[".shortTableName"] = "bdme_retiros1";
$tdatabdme_retiros1[".nSecOptions"] = 0;

$tdatabdme_retiros1[".mainTableOwnerID"] = "";
$tdatabdme_retiros1[".entityType"] = 6;
$tdatabdme_retiros1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_retiros1[".strOriginalTableName"] = "BDME Retiros";

	



$tdatabdme_retiros1[".showAddInPopup"] = false;

$tdatabdme_retiros1[".showEditInPopup"] = false;

$tdatabdme_retiros1[".showViewInPopup"] = false;

$tdatabdme_retiros1[".listAjax"] = false;
//	temporary
//$tdatabdme_retiros1[".listAjax"] = false;

	$tdatabdme_retiros1[".audit"] = false;

	$tdatabdme_retiros1[".locking"] = false;


$pages = $tdatabdme_retiros1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_retiros1[".edit"] = true;
	$tdatabdme_retiros1[".afterEditAction"] = 1;
	$tdatabdme_retiros1[".closePopupAfterEdit"] = 1;
	$tdatabdme_retiros1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_retiros1[".add"] = true;
$tdatabdme_retiros1[".afterAddAction"] = 1;
$tdatabdme_retiros1[".closePopupAfterAdd"] = 1;
$tdatabdme_retiros1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_retiros1[".list"] = true;
}



$tdatabdme_retiros1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_retiros1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_retiros1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_retiros1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_retiros1[".printFriendly"] = true;
}



$tdatabdme_retiros1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_retiros1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_retiros1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_retiros1[".isUseAjaxSuggest"] = false;



																																																																																																																																																												

$tdatabdme_retiros1[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_retiros1[".buttonsAdded"] = false;

$tdatabdme_retiros1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_retiros1[".isUseTimeForSearch"] = false;


$tdatabdme_retiros1[".badgeColor"] = "D2AF80";


$tdatabdme_retiros1[".allSearchFields"] = array();
$tdatabdme_retiros1[".filterFields"] = array();
$tdatabdme_retiros1[".requiredSearchFields"] = array();

$tdatabdme_retiros1[".googleLikeFields"] = array();
$tdatabdme_retiros1[".googleLikeFields"][] = "SancionadoId";
$tdatabdme_retiros1[".googleLikeFields"][] = "Seccional";
$tdatabdme_retiros1[".googleLikeFields"][] = "Concepto";
$tdatabdme_retiros1[".googleLikeFields"][] = "TipoDeudor";
$tdatabdme_retiros1[".googleLikeFields"][] = "Numero";
$tdatabdme_retiros1[".googleLikeFields"][] = "Documento";
$tdatabdme_retiros1[".googleLikeFields"][] = "TipoDocumento";
$tdatabdme_retiros1[".googleLikeFields"][] = "Sancionado";
$tdatabdme_retiros1[".googleLikeFields"][] = "Deuda";
$tdatabdme_retiros1[".googleLikeFields"][] = "Causal";
$tdatabdme_retiros1[".googleLikeFields"][] = "Estado";




$tdatabdme_retiros1[".printerPageOrientation"] = 0;
$tdatabdme_retiros1[".nPrinterPageScale"] = 100;

$tdatabdme_retiros1[".nPrinterSplitRecords"] = 40;

$tdatabdme_retiros1[".geocodingEnabled"] = false;




$tdatabdme_retiros1[".isDisplayLoading"] = true;






$tdatabdme_retiros1[".pageSize"] = 30;

$tdatabdme_retiros1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_retiros1[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_retiros1[".orderindexes"] = array();


$tdatabdme_retiros1[".sqlHead"] = "";
$tdatabdme_retiros1[".sqlFrom"] = "";
$tdatabdme_retiros1[".sqlWhereExpr"] = "";
$tdatabdme_retiros1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_retiros1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_retiros1[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_retiros1[".highlightSearchResults"] = true;

$tableKeysbdme_retiros1 = array();
$tdatabdme_retiros1[".Keys"] = $tableKeysbdme_retiros1;


$tdatabdme_retiros1[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","SancionadoId");
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


	$tdatabdme_retiros1["SancionadoId"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "SancionadoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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


	$tdatabdme_retiros1["Seccional"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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


	$tdatabdme_retiros1["Concepto"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Concepto";
//	TipoDeudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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


	$tdatabdme_retiros1["TipoDeudor"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "TipoDeudor";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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


	$tdatabdme_retiros1["Numero"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Numero";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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


	$tdatabdme_retiros1["Documento"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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


	$tdatabdme_retiros1["TipoDocumento"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "TipoDocumento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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


	$tdatabdme_retiros1["Sancionado"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Sancionado";
//	Deuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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


	$tdatabdme_retiros1["Deuda"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Deuda";
//	Causal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Causal";
	$fdata["GoodName"] = "Causal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Retiros","Causal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Causal";

	
		$fdata["FullName"] = "Causal";

	
	
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


	$tdatabdme_retiros1["Causal"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Causal";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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


	$tdatabdme_retiros1["Estado"] = $fdata;
		$tdatabdme_retiros1[".searchableFields"][] = "Estado";


$tables_data["BDME Retiros"]=&$tdatabdme_retiros1;
$field_labels["BDME_Retiros"] = &$fieldLabelsbdme_retiros1;
$fieldToolTips["BDME_Retiros"] = &$fieldToolTipsbdme_retiros1;
$placeHolders["BDME_Retiros"] = &$placeHoldersbdme_retiros1;
$page_titles["BDME_Retiros"] = &$pageTitlesbdme_retiros1;


changeTextControlsToDate( "BDME Retiros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Retiros"] = array();
//	BDME Retiros DataChild
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BDME Retiros DataChild";
		$detailsParam["dOriginalTable"] = "BDME Retiros DataChild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "bdme_retiros_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("BDME_Retiros_DataChild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["BDME Retiros"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BDME Retiros"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BDME Retiros"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["BDME Retiros"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BDME Retiros"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Retiros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_retiros1_ops.php" ) );



	
		;

											

$tdatabdme_retiros1[".sqlquery"] = $queryData_bdme_retiros1;



include_once(getabspath("include/bdme_retiros1_events.php"));
$tdatabdme_retiros1[".hasEvents"] = true;

?>