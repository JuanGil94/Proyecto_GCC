<?php
$tdatacumplimiento_de_metas_de_recaudo = array();
$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"] = array();
$tdatacumplimiento_de_metas_de_recaudo[".ShortName"] = "cumplimiento_de_metas_de_recaudo";
$tdatacumplimiento_de_metas_de_recaudo[".OwnerID"] = "";
$tdatacumplimiento_de_metas_de_recaudo[".OriginalTable"] = "Cumplimiento de metas de Recaudo";


$tdatacumplimiento_de_metas_de_recaudo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" );
$tdatacumplimiento_de_metas_de_recaudo[".originalPagesByType"] = $tdatacumplimiento_de_metas_de_recaudo[".pagesByType"];
$tdatacumplimiento_de_metas_de_recaudo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdatacumplimiento_de_metas_de_recaudo[".originalPages"] = $tdatacumplimiento_de_metas_de_recaudo[".pages"];
$tdatacumplimiento_de_metas_de_recaudo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\"}" );
$tdatacumplimiento_de_metas_de_recaudo[".originalDefaultPages"] = $tdatacumplimiento_de_metas_de_recaudo[".defaultPages"];

//	field labels
$fieldLabelscumplimiento_de_metas_de_recaudo = array();
$fieldToolTipscumplimiento_de_metas_de_recaudo = array();
$pageTitlescumplimiento_de_metas_de_recaudo = array();
$placeHolderscumplimiento_de_metas_de_recaudo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"] = array();
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"] = array();
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"] = array();
	$pageTitlescumplimiento_de_metas_de_recaudo["Spanish"] = array();
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["Seccional"] = "DIRECCION SECCIONAL";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["Seccional"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["Seccional"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["Meta"] = "META";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["Meta"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["Meta"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["Recaudo"] = "RECAUDO";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["Recaudo"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["Recaudo"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["Cumplimiento"] = "% DE CUMPLIMIENTO";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["Cumplimiento"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["Cumplimiento"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["Procesos"] = "META # PROCESOS";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["Procesos"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["Procesos"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["TotaProc"] = "CANT. PROCESOS";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["TotaProc"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["TotaProc"] = "";
	$fieldLabelscumplimiento_de_metas_de_recaudo["Spanish"]["CumpProc"] = "% DE PROCESOS";
	$fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]["CumpProc"] = "";
	$placeHolderscumplimiento_de_metas_de_recaudo["Spanish"]["CumpProc"] = "";
	if (count($fieldToolTipscumplimiento_de_metas_de_recaudo["Spanish"]))
		$tdatacumplimiento_de_metas_de_recaudo[".isUseToolTips"] = true;
}


	$tdatacumplimiento_de_metas_de_recaudo[".NCSearch"] = true;


	$tdatacumplimiento_de_metas_de_recaudo[".scrollGridBody"] = true;

$tdatacumplimiento_de_metas_de_recaudo[".shortTableName"] = "cumplimiento_de_metas_de_recaudo";
$tdatacumplimiento_de_metas_de_recaudo[".nSecOptions"] = 0;

$tdatacumplimiento_de_metas_de_recaudo[".mainTableOwnerID"] = "";
$tdatacumplimiento_de_metas_de_recaudo[".entityType"] = 6;
$tdatacumplimiento_de_metas_de_recaudo[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacumplimiento_de_metas_de_recaudo[".strOriginalTableName"] = "Cumplimiento de metas de Recaudo";

	



$tdatacumplimiento_de_metas_de_recaudo[".showAddInPopup"] = false;

$tdatacumplimiento_de_metas_de_recaudo[".showEditInPopup"] = false;

$tdatacumplimiento_de_metas_de_recaudo[".showViewInPopup"] = false;

$tdatacumplimiento_de_metas_de_recaudo[".listAjax"] = false;
//	temporary
//$tdatacumplimiento_de_metas_de_recaudo[".listAjax"] = false;

	$tdatacumplimiento_de_metas_de_recaudo[".audit"] = false;

	$tdatacumplimiento_de_metas_de_recaudo[".locking"] = false;


$pages = $tdatacumplimiento_de_metas_de_recaudo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacumplimiento_de_metas_de_recaudo[".edit"] = true;
	$tdatacumplimiento_de_metas_de_recaudo[".afterEditAction"] = 1;
	$tdatacumplimiento_de_metas_de_recaudo[".closePopupAfterEdit"] = 1;
	$tdatacumplimiento_de_metas_de_recaudo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacumplimiento_de_metas_de_recaudo[".add"] = true;
$tdatacumplimiento_de_metas_de_recaudo[".afterAddAction"] = 1;
$tdatacumplimiento_de_metas_de_recaudo[".closePopupAfterAdd"] = 1;
$tdatacumplimiento_de_metas_de_recaudo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacumplimiento_de_metas_de_recaudo[".list"] = true;
}



$tdatacumplimiento_de_metas_de_recaudo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacumplimiento_de_metas_de_recaudo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacumplimiento_de_metas_de_recaudo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacumplimiento_de_metas_de_recaudo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacumplimiento_de_metas_de_recaudo[".printFriendly"] = true;
}



$tdatacumplimiento_de_metas_de_recaudo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacumplimiento_de_metas_de_recaudo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacumplimiento_de_metas_de_recaudo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacumplimiento_de_metas_de_recaudo[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatacumplimiento_de_metas_de_recaudo[".ajaxCodeSnippetAdded"] = false;

$tdatacumplimiento_de_metas_de_recaudo[".buttonsAdded"] = false;

$tdatacumplimiento_de_metas_de_recaudo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacumplimiento_de_metas_de_recaudo[".isUseTimeForSearch"] = false;


$tdatacumplimiento_de_metas_de_recaudo[".badgeColor"] = "778899";


$tdatacumplimiento_de_metas_de_recaudo[".allSearchFields"] = array();
$tdatacumplimiento_de_metas_de_recaudo[".filterFields"] = array();
$tdatacumplimiento_de_metas_de_recaudo[".requiredSearchFields"] = array();

$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"] = array();
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "Seccional";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "Meta";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "Recaudo";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "Cumplimiento";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "Procesos";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "TotaProc";
$tdatacumplimiento_de_metas_de_recaudo[".googleLikeFields"][] = "CumpProc";




$tdatacumplimiento_de_metas_de_recaudo[".printerPageOrientation"] = 0;
$tdatacumplimiento_de_metas_de_recaudo[".nPrinterPageScale"] = 100;

$tdatacumplimiento_de_metas_de_recaudo[".nPrinterSplitRecords"] = 40;

$tdatacumplimiento_de_metas_de_recaudo[".geocodingEnabled"] = false;




$tdatacumplimiento_de_metas_de_recaudo[".isDisplayLoading"] = true;






$tdatacumplimiento_de_metas_de_recaudo[".pageSize"] = 1;

$tdatacumplimiento_de_metas_de_recaudo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacumplimiento_de_metas_de_recaudo[".strOrderBy"] = $tstrOrderBy;

$tdatacumplimiento_de_metas_de_recaudo[".orderindexes"] = array();


$tdatacumplimiento_de_metas_de_recaudo[".sqlHead"] = "";
$tdatacumplimiento_de_metas_de_recaudo[".sqlFrom"] = "";
$tdatacumplimiento_de_metas_de_recaudo[".sqlWhereExpr"] = "";
$tdatacumplimiento_de_metas_de_recaudo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacumplimiento_de_metas_de_recaudo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacumplimiento_de_metas_de_recaudo[".arrGroupsPerPage"] = $arrGPP;

$tdatacumplimiento_de_metas_de_recaudo[".highlightSearchResults"] = true;

$tableKeyscumplimiento_de_metas_de_recaudo = array();
$tdatacumplimiento_de_metas_de_recaudo[".Keys"] = $tableKeyscumplimiento_de_metas_de_recaudo;


$tdatacumplimiento_de_metas_de_recaudo[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","Seccional");
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


	$tdatacumplimiento_de_metas_de_recaudo["Seccional"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "Seccional";
//	Meta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Meta";
	$fdata["GoodName"] = "Meta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","Meta");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Meta";

	
		$fdata["FullName"] = "Meta";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["Meta"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "Meta";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

	
		$fdata["FullName"] = "Recaudo";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["Recaudo"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "Recaudo";
//	Cumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cumplimiento";
	$fdata["GoodName"] = "Cumplimiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","Cumplimiento");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Cumplimiento";

	
		$fdata["FullName"] = "Cumplimiento";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["Cumplimiento"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "Cumplimiento";
//	Procesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Procesos";
	$fdata["GoodName"] = "Procesos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","Procesos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Procesos";

	
		$fdata["FullName"] = "Procesos";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["Procesos"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "Procesos";
//	TotaProc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TotaProc";
	$fdata["GoodName"] = "TotaProc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","TotaProc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TotaProc";

	
		$fdata["FullName"] = "TotaProc";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["TotaProc"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "TotaProc";
//	CumpProc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CumpProc";
	$fdata["GoodName"] = "CumpProc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cumplimiento_de_metas_de_Recaudo","CumpProc");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "CumpProc";

	
		$fdata["FullName"] = "CumpProc";

	
	
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


	$tdatacumplimiento_de_metas_de_recaudo["CumpProc"] = $fdata;
		$tdatacumplimiento_de_metas_de_recaudo[".searchableFields"][] = "CumpProc";


$tables_data["Cumplimiento de metas de Recaudo"]=&$tdatacumplimiento_de_metas_de_recaudo;
$field_labels["Cumplimiento_de_metas_de_Recaudo"] = &$fieldLabelscumplimiento_de_metas_de_recaudo;
$fieldToolTips["Cumplimiento_de_metas_de_Recaudo"] = &$fieldToolTipscumplimiento_de_metas_de_recaudo;
$placeHolders["Cumplimiento_de_metas_de_Recaudo"] = &$placeHolderscumplimiento_de_metas_de_recaudo;
$page_titles["Cumplimiento_de_metas_de_Recaudo"] = &$pageTitlescumplimiento_de_metas_de_recaudo;


changeTextControlsToDate( "Cumplimiento de metas de Recaudo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cumplimiento de metas de Recaudo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cumplimiento de metas de Recaudo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/cumplimiento_de_metas_de_recaudo_ops.php" ) );



	
		;

							

$tdatacumplimiento_de_metas_de_recaudo[".sqlquery"] = $queryData_cumplimiento_de_metas_de_recaudo;



include_once(getabspath("include/cumplimiento_de_metas_de_recaudo_events.php"));
$tdatacumplimiento_de_metas_de_recaudo[".hasEvents"] = true;

?>