<?php
$tdataintereses_por_proceso_report = array();
$tdataintereses_por_proceso_report[".searchableFields"] = array();
$tdataintereses_por_proceso_report[".ShortName"] = "intereses_por_proceso_report";
$tdataintereses_por_proceso_report[".OwnerID"] = "";
$tdataintereses_por_proceso_report[".OriginalTable"] = "Intereses por Proceso";


$tdataintereses_por_proceso_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataintereses_por_proceso_report[".originalPagesByType"] = $tdataintereses_por_proceso_report[".pagesByType"];
$tdataintereses_por_proceso_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataintereses_por_proceso_report[".originalPages"] = $tdataintereses_por_proceso_report[".pages"];
$tdataintereses_por_proceso_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataintereses_por_proceso_report[".originalDefaultPages"] = $tdataintereses_por_proceso_report[".defaultPages"];

//	field labels
$fieldLabelsintereses_por_proceso_report = array();
$fieldToolTipsintereses_por_proceso_report = array();
$pageTitlesintereses_por_proceso_report = array();
$placeHoldersintereses_por_proceso_report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsintereses_por_proceso_report["Spanish"] = array();
	$fieldToolTipsintereses_por_proceso_report["Spanish"] = array();
	$placeHoldersintereses_por_proceso_report["Spanish"] = array();
	$pageTitlesintereses_por_proceso_report["Spanish"] = array();
	$fieldLabelsintereses_por_proceso_report["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipsintereses_por_proceso_report["Spanish"]["Proceso"] = "";
	$placeHoldersintereses_por_proceso_report["Spanish"]["Proceso"] = "";
	$fieldLabelsintereses_por_proceso_report["Spanish"]["Ano"] = "Ano";
	$fieldToolTipsintereses_por_proceso_report["Spanish"]["Ano"] = "";
	$placeHoldersintereses_por_proceso_report["Spanish"]["Ano"] = "";
	$fieldLabelsintereses_por_proceso_report["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsintereses_por_proceso_report["Spanish"]["Mes"] = "";
	$placeHoldersintereses_por_proceso_report["Spanish"]["Mes"] = "";
	$fieldLabelsintereses_por_proceso_report["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsintereses_por_proceso_report["Spanish"]["Intereses"] = "";
	$placeHoldersintereses_por_proceso_report["Spanish"]["Intereses"] = "";
	if (count($fieldToolTipsintereses_por_proceso_report["Spanish"]))
		$tdataintereses_por_proceso_report[".isUseToolTips"] = true;
}


	$tdataintereses_por_proceso_report[".NCSearch"] = true;



$tdataintereses_por_proceso_report[".shortTableName"] = "intereses_por_proceso_report";
$tdataintereses_por_proceso_report[".nSecOptions"] = 0;

$tdataintereses_por_proceso_report[".mainTableOwnerID"] = "";
$tdataintereses_por_proceso_report[".entityType"] = 8;
$tdataintereses_por_proceso_report[".connId"] = "GCC_at_S00001_CCAD01";


$tdataintereses_por_proceso_report[".strOriginalTableName"] = "Intereses por Proceso";

	



$tdataintereses_por_proceso_report[".showAddInPopup"] = false;

$tdataintereses_por_proceso_report[".showEditInPopup"] = false;

$tdataintereses_por_proceso_report[".showViewInPopup"] = false;

$tdataintereses_por_proceso_report[".listAjax"] = false;
//	temporary
//$tdataintereses_por_proceso_report[".listAjax"] = false;

	$tdataintereses_por_proceso_report[".audit"] = false;

	$tdataintereses_por_proceso_report[".locking"] = false;


$pages = $tdataintereses_por_proceso_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataintereses_por_proceso_report[".edit"] = true;
	$tdataintereses_por_proceso_report[".afterEditAction"] = 1;
	$tdataintereses_por_proceso_report[".closePopupAfterEdit"] = 1;
	$tdataintereses_por_proceso_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataintereses_por_proceso_report[".add"] = true;
$tdataintereses_por_proceso_report[".afterAddAction"] = 1;
$tdataintereses_por_proceso_report[".closePopupAfterAdd"] = 1;
$tdataintereses_por_proceso_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataintereses_por_proceso_report[".list"] = true;
}



$tdataintereses_por_proceso_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataintereses_por_proceso_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataintereses_por_proceso_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataintereses_por_proceso_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataintereses_por_proceso_report[".printFriendly"] = true;
}



$tdataintereses_por_proceso_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataintereses_por_proceso_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataintereses_por_proceso_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataintereses_por_proceso_report[".isUseAjaxSuggest"] = false;



																																																																																																

$tdataintereses_por_proceso_report[".ajaxCodeSnippetAdded"] = false;

$tdataintereses_por_proceso_report[".buttonsAdded"] = false;

$tdataintereses_por_proceso_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataintereses_por_proceso_report[".isUseTimeForSearch"] = false;


$tdataintereses_por_proceso_report[".badgeColor"] = "CFAE83";


$tdataintereses_por_proceso_report[".allSearchFields"] = array();
$tdataintereses_por_proceso_report[".filterFields"] = array();
$tdataintereses_por_proceso_report[".requiredSearchFields"] = array();

$tdataintereses_por_proceso_report[".googleLikeFields"] = array();
$tdataintereses_por_proceso_report[".googleLikeFields"][] = "Proceso";
$tdataintereses_por_proceso_report[".googleLikeFields"][] = "Ano";
$tdataintereses_por_proceso_report[".googleLikeFields"][] = "Mes";
$tdataintereses_por_proceso_report[".googleLikeFields"][] = "Intereses";



$tdataintereses_por_proceso_report[".tableType"] = "report";

$tdataintereses_por_proceso_report[".printerPageOrientation"] = 0;
$tdataintereses_por_proceso_report[".nPrinterPageScale"] = 100;

$tdataintereses_por_proceso_report[".nPrinterSplitRecords"] = 40;

$tdataintereses_por_proceso_report[".geocodingEnabled"] = false;

//report settings

$tdataintereses_por_proceso_report[".reportPrintGroupsPerPage"] = 3;
$tdataintereses_por_proceso_report[".reportPrintRecordsPerPage"] = 40;

$tdataintereses_por_proceso_report[".pageSizeGroups"] = 5;
$tdataintereses_por_proceso_report[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdataintereses_por_proceso_report[".strOrderBy"] = $tstrOrderBy;

$tdataintereses_por_proceso_report[".orderindexes"] = array();


$tdataintereses_por_proceso_report[".sqlHead"] = "";
$tdataintereses_por_proceso_report[".sqlFrom"] = "";
$tdataintereses_por_proceso_report[".sqlWhereExpr"] = "";
$tdataintereses_por_proceso_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataintereses_por_proceso_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataintereses_por_proceso_report[".arrGroupsPerPage"] = $arrGPP;

$tdataintereses_por_proceso_report[".highlightSearchResults"] = true;

$tableKeysintereses_por_proceso_report = array();
$tdataintereses_por_proceso_report[".Keys"] = $tableKeysintereses_por_proceso_report;


$tdataintereses_por_proceso_report[".hideMobileList"] = array();




//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso_Report","Proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Proceso";

	
		$fdata["FullName"] = "Proceso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataintereses_por_proceso_report["Proceso"] = $fdata;
		$tdataintereses_por_proceso_report[".searchableFields"][] = "Proceso";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso_Report","Ano");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Ano";

	
		$fdata["FullName"] = "Ano";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataintereses_por_proceso_report["Ano"] = $fdata;
		$tdataintereses_por_proceso_report[".searchableFields"][] = "Ano";
//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso_Report","Mes");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["FullName"] = "Mes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataintereses_por_proceso_report["Mes"] = $fdata;
		$tdataintereses_por_proceso_report[".searchableFields"][] = "Mes";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso_Report","Intereses");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataintereses_por_proceso_report["Intereses"] = $fdata;
		$tdataintereses_por_proceso_report[".searchableFields"][] = "Intereses";


$tables_data["Intereses por Proceso Report"]=&$tdataintereses_por_proceso_report;
$field_labels["Intereses_por_Proceso_Report"] = &$fieldLabelsintereses_por_proceso_report;
$fieldToolTips["Intereses_por_Proceso_Report"] = &$fieldToolTipsintereses_por_proceso_report;
$placeHolders["Intereses_por_Proceso_Report"] = &$placeHoldersintereses_por_proceso_report;
$page_titles["Intereses_por_Proceso_Report"] = &$pageTitlesintereses_por_proceso_report;


changeTextControlsToDate( "Intereses por Proceso Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Intereses por Proceso Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Intereses por Proceso Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/intereses_por_proceso_report_ops.php" ) );



	
		;

				

$tdataintereses_por_proceso_report[".sqlquery"] = $queryData_intereses_por_proceso_report;



$tdataintereses_por_proceso_report[".hasEvents"] = false;

?>