<?php
$tdatatablero_de_control_total_procesos = array();
$tdatatablero_de_control_total_procesos[".searchableFields"] = array();
$tdatatablero_de_control_total_procesos[".ShortName"] = "tablero_de_control_total_procesos";
$tdatatablero_de_control_total_procesos[".OwnerID"] = "";
$tdatatablero_de_control_total_procesos[".OriginalTable"] = "Tablero de Control Total Procesos";


$tdatatablero_de_control_total_procesos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatablero_de_control_total_procesos[".originalPagesByType"] = $tdatatablero_de_control_total_procesos[".pagesByType"];
$tdatatablero_de_control_total_procesos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatablero_de_control_total_procesos[".originalPages"] = $tdatatablero_de_control_total_procesos[".pages"];
$tdatatablero_de_control_total_procesos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatablero_de_control_total_procesos[".originalDefaultPages"] = $tdatatablero_de_control_total_procesos[".defaultPages"];

//	field labels
$fieldLabelstablero_de_control_total_procesos = array();
$fieldToolTipstablero_de_control_total_procesos = array();
$pageTitlestablero_de_control_total_procesos = array();
$placeHolderstablero_de_control_total_procesos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstablero_de_control_total_procesos["Spanish"] = array();
	$fieldToolTipstablero_de_control_total_procesos["Spanish"] = array();
	$placeHolderstablero_de_control_total_procesos["Spanish"] = array();
	$pageTitlestablero_de_control_total_procesos["Spanish"] = array();
	$fieldLabelstablero_de_control_total_procesos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipstablero_de_control_total_procesos["Spanish"]["Seccional"] = "";
	$placeHolderstablero_de_control_total_procesos["Spanish"]["Seccional"] = "";
	$fieldLabelstablero_de_control_total_procesos["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstablero_de_control_total_procesos["Spanish"]["Porcentaje"] = "";
	$placeHolderstablero_de_control_total_procesos["Spanish"]["Porcentaje"] = "";
	$fieldLabelstablero_de_control_total_procesos["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipstablero_de_control_total_procesos["Spanish"]["ProcTota"] = "";
	$placeHolderstablero_de_control_total_procesos["Spanish"]["ProcTota"] = "";
	$fieldLabelstablero_de_control_total_procesos["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipstablero_de_control_total_procesos["Spanish"]["ObliTota"] = "";
	$placeHolderstablero_de_control_total_procesos["Spanish"]["ObliTota"] = "";
	if (count($fieldToolTipstablero_de_control_total_procesos["Spanish"]))
		$tdatatablero_de_control_total_procesos[".isUseToolTips"] = true;
}


	$tdatatablero_de_control_total_procesos[".NCSearch"] = true;



$tdatatablero_de_control_total_procesos[".shortTableName"] = "tablero_de_control_total_procesos";
$tdatatablero_de_control_total_procesos[".nSecOptions"] = 0;

$tdatatablero_de_control_total_procesos[".mainTableOwnerID"] = "";
$tdatatablero_de_control_total_procesos[".entityType"] = 6;
$tdatatablero_de_control_total_procesos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatablero_de_control_total_procesos[".strOriginalTableName"] = "Tablero de Control Total Procesos";

	



$tdatatablero_de_control_total_procesos[".showAddInPopup"] = false;

$tdatatablero_de_control_total_procesos[".showEditInPopup"] = false;

$tdatatablero_de_control_total_procesos[".showViewInPopup"] = false;

$tdatatablero_de_control_total_procesos[".listAjax"] = false;
//	temporary
//$tdatatablero_de_control_total_procesos[".listAjax"] = false;

	$tdatatablero_de_control_total_procesos[".audit"] = false;

	$tdatatablero_de_control_total_procesos[".locking"] = false;


$pages = $tdatatablero_de_control_total_procesos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatablero_de_control_total_procesos[".edit"] = true;
	$tdatatablero_de_control_total_procesos[".afterEditAction"] = 1;
	$tdatatablero_de_control_total_procesos[".closePopupAfterEdit"] = 1;
	$tdatatablero_de_control_total_procesos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatablero_de_control_total_procesos[".add"] = true;
$tdatatablero_de_control_total_procesos[".afterAddAction"] = 1;
$tdatatablero_de_control_total_procesos[".closePopupAfterAdd"] = 1;
$tdatatablero_de_control_total_procesos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatablero_de_control_total_procesos[".list"] = true;
}



$tdatatablero_de_control_total_procesos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatablero_de_control_total_procesos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatablero_de_control_total_procesos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatablero_de_control_total_procesos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatablero_de_control_total_procesos[".printFriendly"] = true;
}



$tdatatablero_de_control_total_procesos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatablero_de_control_total_procesos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatablero_de_control_total_procesos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatablero_de_control_total_procesos[".isUseAjaxSuggest"] = false;



																																																																																																																																																						

$tdatatablero_de_control_total_procesos[".ajaxCodeSnippetAdded"] = false;

$tdatatablero_de_control_total_procesos[".buttonsAdded"] = false;

$tdatatablero_de_control_total_procesos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatablero_de_control_total_procesos[".isUseTimeForSearch"] = false;


$tdatatablero_de_control_total_procesos[".badgeColor"] = "2F4F4F";


$tdatatablero_de_control_total_procesos[".allSearchFields"] = array();
$tdatatablero_de_control_total_procesos[".filterFields"] = array();
$tdatatablero_de_control_total_procesos[".requiredSearchFields"] = array();

$tdatatablero_de_control_total_procesos[".googleLikeFields"] = array();
$tdatatablero_de_control_total_procesos[".googleLikeFields"][] = "Seccional";
$tdatatablero_de_control_total_procesos[".googleLikeFields"][] = "Porcentaje";
$tdatatablero_de_control_total_procesos[".googleLikeFields"][] = "ProcTota";
$tdatatablero_de_control_total_procesos[".googleLikeFields"][] = "ObliTota";




$tdatatablero_de_control_total_procesos[".printerPageOrientation"] = 0;
$tdatatablero_de_control_total_procesos[".nPrinterPageScale"] = 100;

$tdatatablero_de_control_total_procesos[".nPrinterSplitRecords"] = 40;

$tdatatablero_de_control_total_procesos[".geocodingEnabled"] = false;










$tdatatablero_de_control_total_procesos[".pageSize"] = 20;

$tdatatablero_de_control_total_procesos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatablero_de_control_total_procesos[".strOrderBy"] = $tstrOrderBy;

$tdatatablero_de_control_total_procesos[".orderindexes"] = array();


$tdatatablero_de_control_total_procesos[".sqlHead"] = "";
$tdatatablero_de_control_total_procesos[".sqlFrom"] = "";
$tdatatablero_de_control_total_procesos[".sqlWhereExpr"] = "";
$tdatatablero_de_control_total_procesos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatablero_de_control_total_procesos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatablero_de_control_total_procesos[".arrGroupsPerPage"] = $arrGPP;

$tdatatablero_de_control_total_procesos[".highlightSearchResults"] = true;

$tableKeystablero_de_control_total_procesos = array();
$tdatatablero_de_control_total_procesos[".Keys"] = $tableKeystablero_de_control_total_procesos;


$tdatatablero_de_control_total_procesos[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Total_Procesos","Seccional");
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


	$tdatatablero_de_control_total_procesos["Seccional"] = $fdata;
		$tdatatablero_de_control_total_procesos[".searchableFields"][] = "Seccional";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Total_Procesos","Porcentaje");
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


	$tdatatablero_de_control_total_procesos["Porcentaje"] = $fdata;
		$tdatatablero_de_control_total_procesos[".searchableFields"][] = "Porcentaje";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Total_Procesos","ProcTota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcTota";

	
		$fdata["FullName"] = "ProcTota";

	
	
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


	$tdatatablero_de_control_total_procesos["ProcTota"] = $fdata;
		$tdatatablero_de_control_total_procesos[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_Total_Procesos","ObliTota");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliTota";

	
		$fdata["FullName"] = "ObliTota";

	
	
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


	$tdatatablero_de_control_total_procesos["ObliTota"] = $fdata;
		$tdatatablero_de_control_total_procesos[".searchableFields"][] = "ObliTota";


$tables_data["Tablero de Control Total Procesos"]=&$tdatatablero_de_control_total_procesos;
$field_labels["Tablero_de_Control_Total_Procesos"] = &$fieldLabelstablero_de_control_total_procesos;
$fieldToolTips["Tablero_de_Control_Total_Procesos"] = &$fieldToolTipstablero_de_control_total_procesos;
$placeHolders["Tablero_de_Control_Total_Procesos"] = &$placeHolderstablero_de_control_total_procesos;
$page_titles["Tablero_de_Control_Total_Procesos"] = &$pageTitlestablero_de_control_total_procesos;


changeTextControlsToDate( "Tablero de Control Total Procesos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tablero de Control Total Procesos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tablero de Control Total Procesos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tablero_de_control_total_procesos_ops.php" ) );



	
		;

				

$tdatatablero_de_control_total_procesos[".sqlquery"] = $queryData_tablero_de_control_total_procesos;



$tdatatablero_de_control_total_procesos[".hasEvents"] = false;

?>