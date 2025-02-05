<?php
$tdatarecaudo_por_seccional = array();
$tdatarecaudo_por_seccional[".searchableFields"] = array();
$tdatarecaudo_por_seccional[".ShortName"] = "recaudo_por_seccional";
$tdatarecaudo_por_seccional[".OwnerID"] = "";
$tdatarecaudo_por_seccional[".OriginalTable"] = "Recaudo Por Seccional";


$tdatarecaudo_por_seccional[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatarecaudo_por_seccional[".originalPagesByType"] = $tdatarecaudo_por_seccional[".pagesByType"];
$tdatarecaudo_por_seccional[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatarecaudo_por_seccional[".originalPages"] = $tdatarecaudo_por_seccional[".pages"];
$tdatarecaudo_por_seccional[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatarecaudo_por_seccional[".originalDefaultPages"] = $tdatarecaudo_por_seccional[".defaultPages"];

//	field labels
$fieldLabelsrecaudo_por_seccional = array();
$fieldToolTipsrecaudo_por_seccional = array();
$pageTitlesrecaudo_por_seccional = array();
$placeHoldersrecaudo_por_seccional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecaudo_por_seccional["Spanish"] = array();
	$fieldToolTipsrecaudo_por_seccional["Spanish"] = array();
	$placeHoldersrecaudo_por_seccional["Spanish"] = array();
	$pageTitlesrecaudo_por_seccional["Spanish"] = array();
	$fieldLabelsrecaudo_por_seccional["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsrecaudo_por_seccional["Spanish"]["Seccional"] = "";
	$placeHoldersrecaudo_por_seccional["Spanish"]["Seccional"] = "";
	$fieldLabelsrecaudo_por_seccional["Spanish"]["RecaCorr"] = "Reca Corr";
	$fieldToolTipsrecaudo_por_seccional["Spanish"]["RecaCorr"] = "";
	$placeHoldersrecaudo_por_seccional["Spanish"]["RecaCorr"] = "";
	$fieldLabelsrecaudo_por_seccional["Spanish"]["RecaEjem"] = "Reca Ejem";
	$fieldToolTipsrecaudo_por_seccional["Spanish"]["RecaEjem"] = "";
	$placeHoldersrecaudo_por_seccional["Spanish"]["RecaEjem"] = "";
	$fieldLabelsrecaudo_por_seccional["Spanish"]["RecaMinj"] = "Reca Minj";
	$fieldToolTipsrecaudo_por_seccional["Spanish"]["RecaMinj"] = "";
	$placeHoldersrecaudo_por_seccional["Spanish"]["RecaMinj"] = "";
	$fieldLabelsrecaudo_por_seccional["Spanish"]["RecaTota"] = "Reca Tota";
	$fieldToolTipsrecaudo_por_seccional["Spanish"]["RecaTota"] = "";
	$placeHoldersrecaudo_por_seccional["Spanish"]["RecaTota"] = "";
	if (count($fieldToolTipsrecaudo_por_seccional["Spanish"]))
		$tdatarecaudo_por_seccional[".isUseToolTips"] = true;
}


	$tdatarecaudo_por_seccional[".NCSearch"] = true;



$tdatarecaudo_por_seccional[".shortTableName"] = "recaudo_por_seccional";
$tdatarecaudo_por_seccional[".nSecOptions"] = 0;

$tdatarecaudo_por_seccional[".mainTableOwnerID"] = "";
$tdatarecaudo_por_seccional[".entityType"] = 6;
$tdatarecaudo_por_seccional[".connId"] = "GCC_at_S00001_CCAD01";


$tdatarecaudo_por_seccional[".strOriginalTableName"] = "Recaudo Por Seccional";

	



$tdatarecaudo_por_seccional[".showAddInPopup"] = false;

$tdatarecaudo_por_seccional[".showEditInPopup"] = false;

$tdatarecaudo_por_seccional[".showViewInPopup"] = false;

$tdatarecaudo_por_seccional[".listAjax"] = false;
//	temporary
//$tdatarecaudo_por_seccional[".listAjax"] = false;

	$tdatarecaudo_por_seccional[".audit"] = false;

	$tdatarecaudo_por_seccional[".locking"] = false;


$pages = $tdatarecaudo_por_seccional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecaudo_por_seccional[".edit"] = true;
	$tdatarecaudo_por_seccional[".afterEditAction"] = 1;
	$tdatarecaudo_por_seccional[".closePopupAfterEdit"] = 1;
	$tdatarecaudo_por_seccional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecaudo_por_seccional[".add"] = true;
$tdatarecaudo_por_seccional[".afterAddAction"] = 1;
$tdatarecaudo_por_seccional[".closePopupAfterAdd"] = 1;
$tdatarecaudo_por_seccional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecaudo_por_seccional[".list"] = true;
}



$tdatarecaudo_por_seccional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecaudo_por_seccional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecaudo_por_seccional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecaudo_por_seccional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecaudo_por_seccional[".printFriendly"] = true;
}



$tdatarecaudo_por_seccional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecaudo_por_seccional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecaudo_por_seccional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecaudo_por_seccional[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																

$tdatarecaudo_por_seccional[".ajaxCodeSnippetAdded"] = false;

$tdatarecaudo_por_seccional[".buttonsAdded"] = false;

$tdatarecaudo_por_seccional[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecaudo_por_seccional[".isUseTimeForSearch"] = false;


$tdatarecaudo_por_seccional[".badgeColor"] = "DAA520";


$tdatarecaudo_por_seccional[".allSearchFields"] = array();
$tdatarecaudo_por_seccional[".filterFields"] = array();
$tdatarecaudo_por_seccional[".requiredSearchFields"] = array();

$tdatarecaudo_por_seccional[".googleLikeFields"] = array();
$tdatarecaudo_por_seccional[".googleLikeFields"][] = "Seccional";
$tdatarecaudo_por_seccional[".googleLikeFields"][] = "RecaCorr";
$tdatarecaudo_por_seccional[".googleLikeFields"][] = "RecaEjem";
$tdatarecaudo_por_seccional[".googleLikeFields"][] = "RecaMinj";
$tdatarecaudo_por_seccional[".googleLikeFields"][] = "RecaTota";




$tdatarecaudo_por_seccional[".printerPageOrientation"] = 0;
$tdatarecaudo_por_seccional[".nPrinterPageScale"] = 100;

$tdatarecaudo_por_seccional[".nPrinterSplitRecords"] = 40;

$tdatarecaudo_por_seccional[".geocodingEnabled"] = false;










$tdatarecaudo_por_seccional[".pageSize"] = 1;

$tdatarecaudo_por_seccional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarecaudo_por_seccional[".strOrderBy"] = $tstrOrderBy;

$tdatarecaudo_por_seccional[".orderindexes"] = array();


$tdatarecaudo_por_seccional[".sqlHead"] = "";
$tdatarecaudo_por_seccional[".sqlFrom"] = "";
$tdatarecaudo_por_seccional[".sqlWhereExpr"] = "";
$tdatarecaudo_por_seccional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 1;
$tdatarecaudo_por_seccional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecaudo_por_seccional[".arrGroupsPerPage"] = $arrGPP;

$tdatarecaudo_por_seccional[".highlightSearchResults"] = true;

$tableKeysrecaudo_por_seccional = array();
$tdatarecaudo_por_seccional[".Keys"] = $tableKeysrecaudo_por_seccional;


$tdatarecaudo_por_seccional[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo_Por_Seccional","Seccional");
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


	$tdatarecaudo_por_seccional["Seccional"] = $fdata;
		$tdatarecaudo_por_seccional[".searchableFields"][] = "Seccional";
//	RecaCorr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RecaCorr";
	$fdata["GoodName"] = "RecaCorr";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo_Por_Seccional","RecaCorr");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaCorr";

	
		$fdata["FullName"] = "RecaCorr";

	
	
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


	$tdatarecaudo_por_seccional["RecaCorr"] = $fdata;
		$tdatarecaudo_por_seccional[".searchableFields"][] = "RecaCorr";
//	RecaEjem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RecaEjem";
	$fdata["GoodName"] = "RecaEjem";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo_Por_Seccional","RecaEjem");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaEjem";

	
		$fdata["FullName"] = "RecaEjem";

	
	
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


	$tdatarecaudo_por_seccional["RecaEjem"] = $fdata;
		$tdatarecaudo_por_seccional[".searchableFields"][] = "RecaEjem";
//	RecaMinj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RecaMinj";
	$fdata["GoodName"] = "RecaMinj";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo_Por_Seccional","RecaMinj");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaMinj";

	
		$fdata["FullName"] = "RecaMinj";

	
	
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


	$tdatarecaudo_por_seccional["RecaMinj"] = $fdata;
		$tdatarecaudo_por_seccional[".searchableFields"][] = "RecaMinj";
//	RecaTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RecaTota";
	$fdata["GoodName"] = "RecaTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo_Por_Seccional","RecaTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaTota";

	
		$fdata["FullName"] = "RecaTota";

	
	
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


	$tdatarecaudo_por_seccional["RecaTota"] = $fdata;
		$tdatarecaudo_por_seccional[".searchableFields"][] = "RecaTota";


$tables_data["Recaudo Por Seccional"]=&$tdatarecaudo_por_seccional;
$field_labels["Recaudo_Por_Seccional"] = &$fieldLabelsrecaudo_por_seccional;
$fieldToolTips["Recaudo_Por_Seccional"] = &$fieldToolTipsrecaudo_por_seccional;
$placeHolders["Recaudo_Por_Seccional"] = &$placeHoldersrecaudo_por_seccional;
$page_titles["Recaudo_Por_Seccional"] = &$pageTitlesrecaudo_por_seccional;


changeTextControlsToDate( "Recaudo Por Seccional" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Recaudo Por Seccional"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Recaudo Por Seccional"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/recaudo_por_seccional_ops.php" ) );



	
		;

					

$tdatarecaudo_por_seccional[".sqlquery"] = $queryData_recaudo_por_seccional;



include_once(getabspath("include/recaudo_por_seccional_events.php"));
$tdatarecaudo_por_seccional[".hasEvents"] = true;

?>