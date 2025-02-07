<?php
$tdatabdme_publica = array();
$tdatabdme_publica[".searchableFields"] = array();
$tdatabdme_publica[".ShortName"] = "bdme_publica";
$tdatabdme_publica[".OwnerID"] = "";
$tdatabdme_publica[".OriginalTable"] = "BDME Publica";


$tdatabdme_publica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_publica[".originalPagesByType"] = $tdatabdme_publica[".pagesByType"];
$tdatabdme_publica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_publica[".originalPages"] = $tdatabdme_publica[".pages"];
$tdatabdme_publica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_publica[".originalDefaultPages"] = $tdatabdme_publica[".defaultPages"];

//	field labels
$fieldLabelsbdme_publica = array();
$fieldToolTipsbdme_publica = array();
$pageTitlesbdme_publica = array();
$placeHoldersbdme_publica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_publica["Spanish"] = array();
	$fieldToolTipsbdme_publica["Spanish"] = array();
	$placeHoldersbdme_publica["Spanish"] = array();
	$pageTitlesbdme_publica["Spanish"] = array();
	$fieldLabelsbdme_publica["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_publica["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_publica["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_publica["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_publica["Spanish"]["Documento"] = "";
	$placeHoldersbdme_publica["Spanish"]["Documento"] = "";
	if (count($fieldToolTipsbdme_publica["Spanish"]))
		$tdatabdme_publica[".isUseToolTips"] = true;
}


	$tdatabdme_publica[".NCSearch"] = true;



$tdatabdme_publica[".shortTableName"] = "bdme_publica";
$tdatabdme_publica[".nSecOptions"] = 0;

$tdatabdme_publica[".mainTableOwnerID"] = "";
$tdatabdme_publica[".entityType"] = 6;
$tdatabdme_publica[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_publica[".strOriginalTableName"] = "BDME Publica";

	



$tdatabdme_publica[".showAddInPopup"] = false;

$tdatabdme_publica[".showEditInPopup"] = false;

$tdatabdme_publica[".showViewInPopup"] = false;

$tdatabdme_publica[".listAjax"] = false;
//	temporary
//$tdatabdme_publica[".listAjax"] = false;

	$tdatabdme_publica[".audit"] = false;

	$tdatabdme_publica[".locking"] = false;


$pages = $tdatabdme_publica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_publica[".edit"] = true;
	$tdatabdme_publica[".afterEditAction"] = 1;
	$tdatabdme_publica[".closePopupAfterEdit"] = 1;
	$tdatabdme_publica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_publica[".add"] = true;
$tdatabdme_publica[".afterAddAction"] = 1;
$tdatabdme_publica[".closePopupAfterAdd"] = 1;
$tdatabdme_publica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_publica[".list"] = true;
}



$tdatabdme_publica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_publica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_publica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_publica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_publica[".printFriendly"] = true;
}



$tdatabdme_publica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_publica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_publica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_publica[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdatabdme_publica[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_publica[".buttonsAdded"] = false;

$tdatabdme_publica[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_publica[".isUseTimeForSearch"] = false;


$tdatabdme_publica[".badgeColor"] = "1E90FF";


$tdatabdme_publica[".allSearchFields"] = array();
$tdatabdme_publica[".filterFields"] = array();
$tdatabdme_publica[".requiredSearchFields"] = array();

$tdatabdme_publica[".googleLikeFields"] = array();
$tdatabdme_publica[".googleLikeFields"][] = "Sancionado";
$tdatabdme_publica[".googleLikeFields"][] = "Documento";




$tdatabdme_publica[".printerPageOrientation"] = 0;
$tdatabdme_publica[".nPrinterPageScale"] = 100;

$tdatabdme_publica[".nPrinterSplitRecords"] = 40;

$tdatabdme_publica[".geocodingEnabled"] = false;










$tdatabdme_publica[".pageSize"] = 20;

$tdatabdme_publica[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_publica[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_publica[".orderindexes"] = array();


$tdatabdme_publica[".sqlHead"] = "";
$tdatabdme_publica[".sqlFrom"] = "";
$tdatabdme_publica[".sqlWhereExpr"] = "";
$tdatabdme_publica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_publica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_publica[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_publica[".highlightSearchResults"] = true;

$tableKeysbdme_publica = array();
$tdatabdme_publica[".Keys"] = $tableKeysbdme_publica;


$tdatabdme_publica[".hideMobileList"] = array();




//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Publica","Sancionado");
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


	$tdatabdme_publica["Sancionado"] = $fdata;
		$tdatabdme_publica[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Publica","Documento");
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


	$tdatabdme_publica["Documento"] = $fdata;
		$tdatabdme_publica[".searchableFields"][] = "Documento";


$tables_data["BDME Publica"]=&$tdatabdme_publica;
$field_labels["BDME_Publica"] = &$fieldLabelsbdme_publica;
$fieldToolTips["BDME_Publica"] = &$fieldToolTipsbdme_publica;
$placeHolders["BDME_Publica"] = &$placeHoldersbdme_publica;
$page_titles["BDME_Publica"] = &$pageTitlesbdme_publica;


changeTextControlsToDate( "BDME Publica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Publica"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Publica"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_publica_ops.php" ) );



	
		;

		

$tdatabdme_publica[".sqlquery"] = $queryData_bdme_publica;



include_once(getabspath("include/bdme_publica_events.php"));
$tdatabdme_publica[".hasEvents"] = true;

?>