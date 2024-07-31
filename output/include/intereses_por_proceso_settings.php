<?php
$tdataintereses_por_proceso = array();
$tdataintereses_por_proceso[".searchableFields"] = array();
$tdataintereses_por_proceso[".ShortName"] = "intereses_por_proceso";
$tdataintereses_por_proceso[".OwnerID"] = "";
$tdataintereses_por_proceso[".OriginalTable"] = "Intereses por Proceso";


$tdataintereses_por_proceso[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataintereses_por_proceso[".originalPagesByType"] = $tdataintereses_por_proceso[".pagesByType"];
$tdataintereses_por_proceso[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataintereses_por_proceso[".originalPages"] = $tdataintereses_por_proceso[".pages"];
$tdataintereses_por_proceso[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataintereses_por_proceso[".originalDefaultPages"] = $tdataintereses_por_proceso[".defaultPages"];

//	field labels
$fieldLabelsintereses_por_proceso = array();
$fieldToolTipsintereses_por_proceso = array();
$pageTitlesintereses_por_proceso = array();
$placeHoldersintereses_por_proceso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsintereses_por_proceso["Spanish"] = array();
	$fieldToolTipsintereses_por_proceso["Spanish"] = array();
	$placeHoldersintereses_por_proceso["Spanish"] = array();
	$pageTitlesintereses_por_proceso["Spanish"] = array();
	$fieldLabelsintereses_por_proceso["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipsintereses_por_proceso["Spanish"]["Proceso"] = "";
	$placeHoldersintereses_por_proceso["Spanish"]["Proceso"] = "";
	$fieldLabelsintereses_por_proceso["Spanish"]["Ano"] = "Ano";
	$fieldToolTipsintereses_por_proceso["Spanish"]["Ano"] = "";
	$placeHoldersintereses_por_proceso["Spanish"]["Ano"] = "";
	$fieldLabelsintereses_por_proceso["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsintereses_por_proceso["Spanish"]["Mes"] = "";
	$placeHoldersintereses_por_proceso["Spanish"]["Mes"] = "";
	$fieldLabelsintereses_por_proceso["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsintereses_por_proceso["Spanish"]["Intereses"] = "";
	$placeHoldersintereses_por_proceso["Spanish"]["Intereses"] = "";
	if (count($fieldToolTipsintereses_por_proceso["Spanish"]))
		$tdataintereses_por_proceso[".isUseToolTips"] = true;
}


	$tdataintereses_por_proceso[".NCSearch"] = true;



$tdataintereses_por_proceso[".shortTableName"] = "intereses_por_proceso";
$tdataintereses_por_proceso[".nSecOptions"] = 0;

$tdataintereses_por_proceso[".mainTableOwnerID"] = "";
$tdataintereses_por_proceso[".entityType"] = 6;
$tdataintereses_por_proceso[".connId"] = "GCC_at_S00001_CCAD01";


$tdataintereses_por_proceso[".strOriginalTableName"] = "Intereses por Proceso";

	



$tdataintereses_por_proceso[".showAddInPopup"] = false;

$tdataintereses_por_proceso[".showEditInPopup"] = false;

$tdataintereses_por_proceso[".showViewInPopup"] = false;

$tdataintereses_por_proceso[".listAjax"] = false;
//	temporary
//$tdataintereses_por_proceso[".listAjax"] = false;

	$tdataintereses_por_proceso[".audit"] = false;

	$tdataintereses_por_proceso[".locking"] = false;


$pages = $tdataintereses_por_proceso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataintereses_por_proceso[".edit"] = true;
	$tdataintereses_por_proceso[".afterEditAction"] = 1;
	$tdataintereses_por_proceso[".closePopupAfterEdit"] = 1;
	$tdataintereses_por_proceso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataintereses_por_proceso[".add"] = true;
$tdataintereses_por_proceso[".afterAddAction"] = 1;
$tdataintereses_por_proceso[".closePopupAfterAdd"] = 1;
$tdataintereses_por_proceso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataintereses_por_proceso[".list"] = true;
}



$tdataintereses_por_proceso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataintereses_por_proceso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataintereses_por_proceso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataintereses_por_proceso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataintereses_por_proceso[".printFriendly"] = true;
}



$tdataintereses_por_proceso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataintereses_por_proceso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataintereses_por_proceso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataintereses_por_proceso[".isUseAjaxSuggest"] = true;



																																																																																																

$tdataintereses_por_proceso[".ajaxCodeSnippetAdded"] = false;

$tdataintereses_por_proceso[".buttonsAdded"] = false;

$tdataintereses_por_proceso[".addPageEvents"] = false;

// use timepicker for search panel
$tdataintereses_por_proceso[".isUseTimeForSearch"] = false;


$tdataintereses_por_proceso[".badgeColor"] = "7B68EE";


$tdataintereses_por_proceso[".allSearchFields"] = array();
$tdataintereses_por_proceso[".filterFields"] = array();
$tdataintereses_por_proceso[".requiredSearchFields"] = array();

$tdataintereses_por_proceso[".googleLikeFields"] = array();
$tdataintereses_por_proceso[".googleLikeFields"][] = "Proceso";
$tdataintereses_por_proceso[".googleLikeFields"][] = "Ano";
$tdataintereses_por_proceso[".googleLikeFields"][] = "Mes";
$tdataintereses_por_proceso[".googleLikeFields"][] = "Intereses";




$tdataintereses_por_proceso[".printerPageOrientation"] = 0;
$tdataintereses_por_proceso[".nPrinterPageScale"] = 100;

$tdataintereses_por_proceso[".nPrinterSplitRecords"] = 40;

$tdataintereses_por_proceso[".geocodingEnabled"] = false;










$tdataintereses_por_proceso[".pageSize"] = 20;

$tdataintereses_por_proceso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataintereses_por_proceso[".strOrderBy"] = $tstrOrderBy;

$tdataintereses_por_proceso[".orderindexes"] = array();


$tdataintereses_por_proceso[".sqlHead"] = "";
$tdataintereses_por_proceso[".sqlFrom"] = "";
$tdataintereses_por_proceso[".sqlWhereExpr"] = "";
$tdataintereses_por_proceso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataintereses_por_proceso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataintereses_por_proceso[".arrGroupsPerPage"] = $arrGPP;

$tdataintereses_por_proceso[".highlightSearchResults"] = true;

$tableKeysintereses_por_proceso = array();
$tdataintereses_por_proceso[".Keys"] = $tableKeysintereses_por_proceso;


$tdataintereses_por_proceso[".hideMobileList"] = array();




//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso","Proceso");
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


	$tdataintereses_por_proceso["Proceso"] = $fdata;
		$tdataintereses_por_proceso[".searchableFields"][] = "Proceso";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso","Ano");
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


	$tdataintereses_por_proceso["Ano"] = $fdata;
		$tdataintereses_por_proceso[".searchableFields"][] = "Ano";
//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso","Mes");
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


	$tdataintereses_por_proceso["Mes"] = $fdata;
		$tdataintereses_por_proceso[".searchableFields"][] = "Mes";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Intereses_por_Proceso","Intereses");
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


	$tdataintereses_por_proceso["Intereses"] = $fdata;
		$tdataintereses_por_proceso[".searchableFields"][] = "Intereses";


$tables_data["Intereses por Proceso"]=&$tdataintereses_por_proceso;
$field_labels["Intereses_por_Proceso"] = &$fieldLabelsintereses_por_proceso;
$fieldToolTips["Intereses_por_Proceso"] = &$fieldToolTipsintereses_por_proceso;
$placeHolders["Intereses_por_Proceso"] = &$placeHoldersintereses_por_proceso;
$page_titles["Intereses_por_Proceso"] = &$pageTitlesintereses_por_proceso;


changeTextControlsToDate( "Intereses por Proceso" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Intereses por Proceso"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Intereses por Proceso"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/intereses_por_proceso_ops.php" ) );



	
		;

				

$tdataintereses_por_proceso[".sqlquery"] = $queryData_intereses_por_proceso;



$tdataintereses_por_proceso[".hasEvents"] = false;

?>