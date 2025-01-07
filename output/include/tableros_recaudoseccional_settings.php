<?php
$tdatatableros_recaudoseccional = array();
$tdatatableros_recaudoseccional[".searchableFields"] = array();
$tdatatableros_recaudoseccional[".ShortName"] = "tableros_recaudoseccional";
$tdatatableros_recaudoseccional[".OwnerID"] = "";
$tdatatableros_recaudoseccional[".OriginalTable"] = "Tableros_RecaudoSeccional";


$tdatatableros_recaudoseccional[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatableros_recaudoseccional[".originalPagesByType"] = $tdatatableros_recaudoseccional[".pagesByType"];
$tdatatableros_recaudoseccional[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatableros_recaudoseccional[".originalPages"] = $tdatatableros_recaudoseccional[".pages"];
$tdatatableros_recaudoseccional[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatableros_recaudoseccional[".originalDefaultPages"] = $tdatatableros_recaudoseccional[".defaultPages"];

//	field labels
$fieldLabelstableros_recaudoseccional = array();
$fieldToolTipstableros_recaudoseccional = array();
$pageTitlestableros_recaudoseccional = array();
$placeHolderstableros_recaudoseccional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstableros_recaudoseccional["Spanish"] = array();
	$fieldToolTipstableros_recaudoseccional["Spanish"] = array();
	$placeHolderstableros_recaudoseccional["Spanish"] = array();
	$pageTitlestableros_recaudoseccional["Spanish"] = array();
	$fieldLabelstableros_recaudoseccional["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipstableros_recaudoseccional["Spanish"]["Seccional"] = "";
	$placeHolderstableros_recaudoseccional["Spanish"]["Seccional"] = "";
	$fieldLabelstableros_recaudoseccional["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstableros_recaudoseccional["Spanish"]["Porcentaje"] = "";
	$placeHolderstableros_recaudoseccional["Spanish"]["Porcentaje"] = "";
	$fieldLabelstableros_recaudoseccional["Spanish"]["ProcReca"] = "Proc Reca";
	$fieldToolTipstableros_recaudoseccional["Spanish"]["ProcReca"] = "";
	$placeHolderstableros_recaudoseccional["Spanish"]["ProcReca"] = "";
	$fieldLabelstableros_recaudoseccional["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipstableros_recaudoseccional["Spanish"]["ObliReca"] = "";
	$placeHolderstableros_recaudoseccional["Spanish"]["ObliReca"] = "";
	if (count($fieldToolTipstableros_recaudoseccional["Spanish"]))
		$tdatatableros_recaudoseccional[".isUseToolTips"] = true;
}


	$tdatatableros_recaudoseccional[".NCSearch"] = true;



$tdatatableros_recaudoseccional[".shortTableName"] = "tableros_recaudoseccional";
$tdatatableros_recaudoseccional[".nSecOptions"] = 0;

$tdatatableros_recaudoseccional[".mainTableOwnerID"] = "";
$tdatatableros_recaudoseccional[".entityType"] = 6;
$tdatatableros_recaudoseccional[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatableros_recaudoseccional[".strOriginalTableName"] = "Tableros_RecaudoSeccional";

	



$tdatatableros_recaudoseccional[".showAddInPopup"] = false;

$tdatatableros_recaudoseccional[".showEditInPopup"] = false;

$tdatatableros_recaudoseccional[".showViewInPopup"] = false;

$tdatatableros_recaudoseccional[".listAjax"] = false;
//	temporary
//$tdatatableros_recaudoseccional[".listAjax"] = false;

	$tdatatableros_recaudoseccional[".audit"] = false;

	$tdatatableros_recaudoseccional[".locking"] = false;


$pages = $tdatatableros_recaudoseccional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatableros_recaudoseccional[".edit"] = true;
	$tdatatableros_recaudoseccional[".afterEditAction"] = 1;
	$tdatatableros_recaudoseccional[".closePopupAfterEdit"] = 1;
	$tdatatableros_recaudoseccional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatableros_recaudoseccional[".add"] = true;
$tdatatableros_recaudoseccional[".afterAddAction"] = 1;
$tdatatableros_recaudoseccional[".closePopupAfterAdd"] = 1;
$tdatatableros_recaudoseccional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatableros_recaudoseccional[".list"] = true;
}



$tdatatableros_recaudoseccional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatableros_recaudoseccional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatableros_recaudoseccional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatableros_recaudoseccional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatableros_recaudoseccional[".printFriendly"] = true;
}



$tdatatableros_recaudoseccional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatableros_recaudoseccional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatableros_recaudoseccional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatableros_recaudoseccional[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdatatableros_recaudoseccional[".ajaxCodeSnippetAdded"] = false;

$tdatatableros_recaudoseccional[".buttonsAdded"] = false;

$tdatatableros_recaudoseccional[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatableros_recaudoseccional[".isUseTimeForSearch"] = false;


$tdatatableros_recaudoseccional[".badgeColor"] = "CFAE83";


$tdatatableros_recaudoseccional[".allSearchFields"] = array();
$tdatatableros_recaudoseccional[".filterFields"] = array();
$tdatatableros_recaudoseccional[".requiredSearchFields"] = array();

$tdatatableros_recaudoseccional[".googleLikeFields"] = array();
$tdatatableros_recaudoseccional[".googleLikeFields"][] = "Seccional";
$tdatatableros_recaudoseccional[".googleLikeFields"][] = "Porcentaje";
$tdatatableros_recaudoseccional[".googleLikeFields"][] = "ProcReca";
$tdatatableros_recaudoseccional[".googleLikeFields"][] = "ObliReca";




$tdatatableros_recaudoseccional[".printerPageOrientation"] = 0;
$tdatatableros_recaudoseccional[".nPrinterPageScale"] = 100;

$tdatatableros_recaudoseccional[".nPrinterSplitRecords"] = 40;

$tdatatableros_recaudoseccional[".geocodingEnabled"] = false;




$tdatatableros_recaudoseccional[".isDisplayLoading"] = true;






$tdatatableros_recaudoseccional[".pageSize"] = 20;

$tdatatableros_recaudoseccional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatableros_recaudoseccional[".strOrderBy"] = $tstrOrderBy;

$tdatatableros_recaudoseccional[".orderindexes"] = array();


$tdatatableros_recaudoseccional[".sqlHead"] = "";
$tdatatableros_recaudoseccional[".sqlFrom"] = "";
$tdatatableros_recaudoseccional[".sqlWhereExpr"] = "";
$tdatatableros_recaudoseccional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatableros_recaudoseccional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatableros_recaudoseccional[".arrGroupsPerPage"] = $arrGPP;

$tdatatableros_recaudoseccional[".highlightSearchResults"] = true;

$tableKeystableros_recaudoseccional = array();
$tdatatableros_recaudoseccional[".Keys"] = $tableKeystableros_recaudoseccional;


$tdatatableros_recaudoseccional[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tableros_RecaudoSeccional","Seccional");
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


	$tdatatableros_recaudoseccional["Seccional"] = $fdata;
		$tdatatableros_recaudoseccional[".searchableFields"][] = "Seccional";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tableros_RecaudoSeccional","Porcentaje");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Porcentaje";

	
		$fdata["FullName"] = "Porcentaje";

	
	
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


	$tdatatableros_recaudoseccional["Porcentaje"] = $fdata;
		$tdatatableros_recaudoseccional[".searchableFields"][] = "Porcentaje";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tableros_RecaudoSeccional","ProcReca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcReca";

	
		$fdata["FullName"] = "ProcReca";

	
	
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


	$tdatatableros_recaudoseccional["ProcReca"] = $fdata;
		$tdatatableros_recaudoseccional[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tableros_RecaudoSeccional","ObliReca");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliReca";

	
		$fdata["FullName"] = "ObliReca";

	
	
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


	$tdatatableros_recaudoseccional["ObliReca"] = $fdata;
		$tdatatableros_recaudoseccional[".searchableFields"][] = "ObliReca";


$tables_data["Tableros_RecaudoSeccional"]=&$tdatatableros_recaudoseccional;
$field_labels["Tableros_RecaudoSeccional"] = &$fieldLabelstableros_recaudoseccional;
$fieldToolTips["Tableros_RecaudoSeccional"] = &$fieldToolTipstableros_recaudoseccional;
$placeHolders["Tableros_RecaudoSeccional"] = &$placeHolderstableros_recaudoseccional;
$page_titles["Tableros_RecaudoSeccional"] = &$pageTitlestableros_recaudoseccional;


changeTextControlsToDate( "Tableros_RecaudoSeccional" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tableros_RecaudoSeccional"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tableros_RecaudoSeccional"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tableros_recaudoseccional_ops.php" ) );



	
		;

				

$tdatatableros_recaudoseccional[".sqlquery"] = $queryData_tableros_recaudoseccional;



$tdatatableros_recaudoseccional[".hasEvents"] = false;

?>