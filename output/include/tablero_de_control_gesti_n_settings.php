<?php
$tdatatablero_de_control_gesti_n = array();
$tdatatablero_de_control_gesti_n[".searchableFields"] = array();
$tdatatablero_de_control_gesti_n[".ShortName"] = "tablero_de_control_gesti_n";
$tdatatablero_de_control_gesti_n[".OwnerID"] = "";
$tdatatablero_de_control_gesti_n[".OriginalTable"] = "Tablero de Control Gestión";


$tdatatablero_de_control_gesti_n[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatablero_de_control_gesti_n[".originalPagesByType"] = $tdatatablero_de_control_gesti_n[".pagesByType"];
$tdatatablero_de_control_gesti_n[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatablero_de_control_gesti_n[".originalPages"] = $tdatatablero_de_control_gesti_n[".pages"];
$tdatatablero_de_control_gesti_n[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatablero_de_control_gesti_n[".originalDefaultPages"] = $tdatatablero_de_control_gesti_n[".defaultPages"];

//	field labels
$fieldLabelstablero_de_control_gesti_n = array();
$fieldToolTipstablero_de_control_gesti_n = array();
$pageTitlestablero_de_control_gesti_n = array();
$placeHolderstablero_de_control_gesti_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstablero_de_control_gesti_n["Spanish"] = array();
	$fieldToolTipstablero_de_control_gesti_n["Spanish"] = array();
	$placeHolderstablero_de_control_gesti_n["Spanish"] = array();
	$pageTitlestablero_de_control_gesti_n["Spanish"] = array();
	$fieldLabelstablero_de_control_gesti_n["Spanish"]["TotalPersuasivo"] = "Total Persuasivo";
	$fieldToolTipstablero_de_control_gesti_n["Spanish"]["TotalPersuasivo"] = "";
	$placeHolderstablero_de_control_gesti_n["Spanish"]["TotalPersuasivo"] = "";
	$fieldLabelstablero_de_control_gesti_n["Spanish"]["TotalCoactivo"] = "Total Coactivo";
	$fieldToolTipstablero_de_control_gesti_n["Spanish"]["TotalCoactivo"] = "";
	$placeHolderstablero_de_control_gesti_n["Spanish"]["TotalCoactivo"] = "";
	$fieldLabelstablero_de_control_gesti_n["Spanish"]["TotalCoactivoEjecucion"] = "Total Coactivo Ejecucion";
	$fieldToolTipstablero_de_control_gesti_n["Spanish"]["TotalCoactivoEjecucion"] = "";
	$placeHolderstablero_de_control_gesti_n["Spanish"]["TotalCoactivoEjecucion"] = "";
	$fieldLabelstablero_de_control_gesti_n["Spanish"]["TotalCoactivoTerminacion"] = "Total Coactivo Terminacion";
	$fieldToolTipstablero_de_control_gesti_n["Spanish"]["TotalCoactivoTerminacion"] = "";
	$placeHolderstablero_de_control_gesti_n["Spanish"]["TotalCoactivoTerminacion"] = "";
	if (count($fieldToolTipstablero_de_control_gesti_n["Spanish"]))
		$tdatatablero_de_control_gesti_n[".isUseToolTips"] = true;
}


	$tdatatablero_de_control_gesti_n[".NCSearch"] = true;



$tdatatablero_de_control_gesti_n[".shortTableName"] = "tablero_de_control_gesti_n";
$tdatatablero_de_control_gesti_n[".nSecOptions"] = 0;

$tdatatablero_de_control_gesti_n[".mainTableOwnerID"] = "";
$tdatatablero_de_control_gesti_n[".entityType"] = 6;
$tdatatablero_de_control_gesti_n[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatablero_de_control_gesti_n[".strOriginalTableName"] = "Tablero de Control Gestión";

	



$tdatatablero_de_control_gesti_n[".showAddInPopup"] = false;

$tdatatablero_de_control_gesti_n[".showEditInPopup"] = false;

$tdatatablero_de_control_gesti_n[".showViewInPopup"] = false;

$tdatatablero_de_control_gesti_n[".listAjax"] = false;
//	temporary
//$tdatatablero_de_control_gesti_n[".listAjax"] = false;

	$tdatatablero_de_control_gesti_n[".audit"] = false;

	$tdatatablero_de_control_gesti_n[".locking"] = false;


$pages = $tdatatablero_de_control_gesti_n[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatablero_de_control_gesti_n[".edit"] = true;
	$tdatatablero_de_control_gesti_n[".afterEditAction"] = 1;
	$tdatatablero_de_control_gesti_n[".closePopupAfterEdit"] = 1;
	$tdatatablero_de_control_gesti_n[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatablero_de_control_gesti_n[".add"] = true;
$tdatatablero_de_control_gesti_n[".afterAddAction"] = 1;
$tdatatablero_de_control_gesti_n[".closePopupAfterAdd"] = 1;
$tdatatablero_de_control_gesti_n[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatablero_de_control_gesti_n[".list"] = true;
}



$tdatatablero_de_control_gesti_n[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatablero_de_control_gesti_n[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatablero_de_control_gesti_n[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatablero_de_control_gesti_n[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatablero_de_control_gesti_n[".printFriendly"] = true;
}



$tdatatablero_de_control_gesti_n[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatablero_de_control_gesti_n[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatablero_de_control_gesti_n[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatablero_de_control_gesti_n[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdatatablero_de_control_gesti_n[".ajaxCodeSnippetAdded"] = false;

$tdatatablero_de_control_gesti_n[".buttonsAdded"] = false;

$tdatatablero_de_control_gesti_n[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatablero_de_control_gesti_n[".isUseTimeForSearch"] = false;


$tdatatablero_de_control_gesti_n[".badgeColor"] = "6DA5C8";


$tdatatablero_de_control_gesti_n[".allSearchFields"] = array();
$tdatatablero_de_control_gesti_n[".filterFields"] = array();
$tdatatablero_de_control_gesti_n[".requiredSearchFields"] = array();

$tdatatablero_de_control_gesti_n[".googleLikeFields"] = array();
$tdatatablero_de_control_gesti_n[".googleLikeFields"][] = "TotalPersuasivo";
$tdatatablero_de_control_gesti_n[".googleLikeFields"][] = "TotalCoactivo";
$tdatatablero_de_control_gesti_n[".googleLikeFields"][] = "TotalCoactivoEjecucion";
$tdatatablero_de_control_gesti_n[".googleLikeFields"][] = "TotalCoactivoTerminacion";




$tdatatablero_de_control_gesti_n[".printerPageOrientation"] = 0;
$tdatatablero_de_control_gesti_n[".nPrinterPageScale"] = 100;

$tdatatablero_de_control_gesti_n[".nPrinterSplitRecords"] = 40;

$tdatatablero_de_control_gesti_n[".geocodingEnabled"] = false;




$tdatatablero_de_control_gesti_n[".isDisplayLoading"] = true;






$tdatatablero_de_control_gesti_n[".pageSize"] = 20;

$tdatatablero_de_control_gesti_n[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatablero_de_control_gesti_n[".strOrderBy"] = $tstrOrderBy;

$tdatatablero_de_control_gesti_n[".orderindexes"] = array();


$tdatatablero_de_control_gesti_n[".sqlHead"] = "";
$tdatatablero_de_control_gesti_n[".sqlFrom"] = "";
$tdatatablero_de_control_gesti_n[".sqlWhereExpr"] = "";
$tdatatablero_de_control_gesti_n[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatablero_de_control_gesti_n[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatablero_de_control_gesti_n[".arrGroupsPerPage"] = $arrGPP;

$tdatatablero_de_control_gesti_n[".highlightSearchResults"] = true;

$tableKeystablero_de_control_gesti_n = array();
$tdatatablero_de_control_gesti_n[".Keys"] = $tableKeystablero_de_control_gesti_n;


$tdatatablero_de_control_gesti_n[".hideMobileList"] = array();




//	TotalPersuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TotalPersuasivo";
	$fdata["GoodName"] = "TotalPersuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Gesti_n","TotalPersuasivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TotalPersuasivo";

	
		$fdata["FullName"] = "TotalPersuasivo";

	
	
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


	$tdatatablero_de_control_gesti_n["TotalPersuasivo"] = $fdata;
		$tdatatablero_de_control_gesti_n[".searchableFields"][] = "TotalPersuasivo";
//	TotalCoactivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TotalCoactivo";
	$fdata["GoodName"] = "TotalCoactivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Gesti_n","TotalCoactivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TotalCoactivo";

	
		$fdata["FullName"] = "TotalCoactivo";

	
	
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


	$tdatatablero_de_control_gesti_n["TotalCoactivo"] = $fdata;
		$tdatatablero_de_control_gesti_n[".searchableFields"][] = "TotalCoactivo";
//	TotalCoactivoEjecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalCoactivoEjecucion";
	$fdata["GoodName"] = "TotalCoactivoEjecucion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Gesti_n","TotalCoactivoEjecucion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TotalCoactivoEjecucion";

	
		$fdata["FullName"] = "TotalCoactivoEjecucion";

	
	
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


	$tdatatablero_de_control_gesti_n["TotalCoactivoEjecucion"] = $fdata;
		$tdatatablero_de_control_gesti_n[".searchableFields"][] = "TotalCoactivoEjecucion";
//	TotalCoactivoTerminacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TotalCoactivoTerminacion";
	$fdata["GoodName"] = "TotalCoactivoTerminacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Gesti_n","TotalCoactivoTerminacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TotalCoactivoTerminacion";

	
		$fdata["FullName"] = "TotalCoactivoTerminacion";

	
	
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


	$tdatatablero_de_control_gesti_n["TotalCoactivoTerminacion"] = $fdata;
		$tdatatablero_de_control_gesti_n[".searchableFields"][] = "TotalCoactivoTerminacion";


$tables_data["Tablero de Control Gestión"]=&$tdatatablero_de_control_gesti_n;
$field_labels["Tablero_de_Control_Gesti_n"] = &$fieldLabelstablero_de_control_gesti_n;
$fieldToolTips["Tablero_de_Control_Gesti_n"] = &$fieldToolTipstablero_de_control_gesti_n;
$placeHolders["Tablero_de_Control_Gesti_n"] = &$placeHolderstablero_de_control_gesti_n;
$page_titles["Tablero_de_Control_Gesti_n"] = &$pageTitlestablero_de_control_gesti_n;


changeTextControlsToDate( "Tablero de Control Gestión" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tablero de Control Gestión"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tablero de Control Gestión"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tablero_de_control_gesti_n_ops.php" ) );



	
		;

				

$tdatatablero_de_control_gesti_n[".sqlquery"] = $queryData_tablero_de_control_gesti_n;



include_once(getabspath("include/tablero_de_control_gesti_n_events.php"));
$tdatatablero_de_control_gesti_n[".hasEvents"] = true;

?>