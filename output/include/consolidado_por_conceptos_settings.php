<?php
$tdataconsolidado_por_conceptos = array();
$tdataconsolidado_por_conceptos[".searchableFields"] = array();
$tdataconsolidado_por_conceptos[".ShortName"] = "consolidado_por_conceptos";
$tdataconsolidado_por_conceptos[".OwnerID"] = "";
$tdataconsolidado_por_conceptos[".OriginalTable"] = "Consolidado por Conceptos";


$tdataconsolidado_por_conceptos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" );
$tdataconsolidado_por_conceptos[".originalPagesByType"] = $tdataconsolidado_por_conceptos[".pagesByType"];
$tdataconsolidado_por_conceptos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdataconsolidado_por_conceptos[".originalPages"] = $tdataconsolidado_por_conceptos[".pages"];
$tdataconsolidado_por_conceptos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\"}" );
$tdataconsolidado_por_conceptos[".originalDefaultPages"] = $tdataconsolidado_por_conceptos[".defaultPages"];

//	field labels
$fieldLabelsconsolidado_por_conceptos = array();
$fieldToolTipsconsolidado_por_conceptos = array();
$pageTitlesconsolidado_por_conceptos = array();
$placeHoldersconsolidado_por_conceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsolidado_por_conceptos["Spanish"] = array();
	$fieldToolTipsconsolidado_por_conceptos["Spanish"] = array();
	$placeHoldersconsolidado_por_conceptos["Spanish"] = array();
	$pageTitlesconsolidado_por_conceptos["Spanish"] = array();
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["Hasta"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["Hasta"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["Seccional"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["Seccional"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["MultTota"] = "Mult Tota";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["MultTota"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["MultTota"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["InteTota"] = "Inte Tota";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["InteTota"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["InteTota"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["IncaTota"] = "Inca Tota";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["IncaTota"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["IncaTota"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["OtroTota"] = "Otro Tota";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["OtroTota"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["OtroTota"] = "";
	$fieldLabelsconsolidado_por_conceptos["Spanish"]["TotalCobro"] = "Total Cobro";
	$fieldToolTipsconsolidado_por_conceptos["Spanish"]["TotalCobro"] = "";
	$placeHoldersconsolidado_por_conceptos["Spanish"]["TotalCobro"] = "";
	if (count($fieldToolTipsconsolidado_por_conceptos["Spanish"]))
		$tdataconsolidado_por_conceptos[".isUseToolTips"] = true;
}


	$tdataconsolidado_por_conceptos[".NCSearch"] = true;


	$tdataconsolidado_por_conceptos[".scrollGridBody"] = true;

$tdataconsolidado_por_conceptos[".shortTableName"] = "consolidado_por_conceptos";
$tdataconsolidado_por_conceptos[".nSecOptions"] = 0;

$tdataconsolidado_por_conceptos[".mainTableOwnerID"] = "";
$tdataconsolidado_por_conceptos[".entityType"] = 6;
$tdataconsolidado_por_conceptos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconsolidado_por_conceptos[".strOriginalTableName"] = "Consolidado por Conceptos";

	



$tdataconsolidado_por_conceptos[".showAddInPopup"] = false;

$tdataconsolidado_por_conceptos[".showEditInPopup"] = false;

$tdataconsolidado_por_conceptos[".showViewInPopup"] = false;

$tdataconsolidado_por_conceptos[".listAjax"] = false;
//	temporary
//$tdataconsolidado_por_conceptos[".listAjax"] = false;

	$tdataconsolidado_por_conceptos[".audit"] = false;

	$tdataconsolidado_por_conceptos[".locking"] = false;


$pages = $tdataconsolidado_por_conceptos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsolidado_por_conceptos[".edit"] = true;
	$tdataconsolidado_por_conceptos[".afterEditAction"] = 1;
	$tdataconsolidado_por_conceptos[".closePopupAfterEdit"] = 1;
	$tdataconsolidado_por_conceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsolidado_por_conceptos[".add"] = true;
$tdataconsolidado_por_conceptos[".afterAddAction"] = 1;
$tdataconsolidado_por_conceptos[".closePopupAfterAdd"] = 1;
$tdataconsolidado_por_conceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsolidado_por_conceptos[".list"] = true;
}



$tdataconsolidado_por_conceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsolidado_por_conceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsolidado_por_conceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsolidado_por_conceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsolidado_por_conceptos[".printFriendly"] = true;
}



$tdataconsolidado_por_conceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsolidado_por_conceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsolidado_por_conceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsolidado_por_conceptos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdataconsolidado_por_conceptos[".ajaxCodeSnippetAdded"] = false;

$tdataconsolidado_por_conceptos[".buttonsAdded"] = false;

$tdataconsolidado_por_conceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsolidado_por_conceptos[".isUseTimeForSearch"] = false;


$tdataconsolidado_por_conceptos[".badgeColor"] = "9ACD32";


$tdataconsolidado_por_conceptos[".allSearchFields"] = array();
$tdataconsolidado_por_conceptos[".filterFields"] = array();
$tdataconsolidado_por_conceptos[".requiredSearchFields"] = array();

$tdataconsolidado_por_conceptos[".googleLikeFields"] = array();
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "Hasta";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "Seccional";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "MultTota";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "InteTota";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "IncaTota";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "OtroTota";
$tdataconsolidado_por_conceptos[".googleLikeFields"][] = "TotalCobro";




$tdataconsolidado_por_conceptos[".printerPageOrientation"] = 0;
$tdataconsolidado_por_conceptos[".nPrinterPageScale"] = 100;

$tdataconsolidado_por_conceptos[".nPrinterSplitRecords"] = 40;

$tdataconsolidado_por_conceptos[".geocodingEnabled"] = false;




$tdataconsolidado_por_conceptos[".isDisplayLoading"] = true;






$tdataconsolidado_por_conceptos[".pageSize"] = 1;

$tdataconsolidado_por_conceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsolidado_por_conceptos[".strOrderBy"] = $tstrOrderBy;

$tdataconsolidado_por_conceptos[".orderindexes"] = array();


$tdataconsolidado_por_conceptos[".sqlHead"] = "";
$tdataconsolidado_por_conceptos[".sqlFrom"] = "";
$tdataconsolidado_por_conceptos[".sqlWhereExpr"] = "";
$tdataconsolidado_por_conceptos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataconsolidado_por_conceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsolidado_por_conceptos[".arrGroupsPerPage"] = $arrGPP;

$tdataconsolidado_por_conceptos[".highlightSearchResults"] = true;

$tableKeysconsolidado_por_conceptos = array();
$tdataconsolidado_por_conceptos[".Keys"] = $tableKeysconsolidado_por_conceptos;


$tdataconsolidado_por_conceptos[".hideMobileList"] = array();




//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","Hasta");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Hasta";

	
		$fdata["FullName"] = "Hasta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataconsolidado_por_conceptos["Hasta"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "Hasta";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","Seccional");
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


	$tdataconsolidado_por_conceptos["Seccional"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "Seccional";
//	MultTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MultTota";
	$fdata["GoodName"] = "MultTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","MultTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "MultTota";

	
		$fdata["FullName"] = "MultTota";

	
	
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


	$tdataconsolidado_por_conceptos["MultTota"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "MultTota";
//	InteTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "InteTota";
	$fdata["GoodName"] = "InteTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","InteTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteTota";

	
		$fdata["FullName"] = "InteTota";

	
	
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


	$tdataconsolidado_por_conceptos["InteTota"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "InteTota";
//	IncaTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IncaTota";
	$fdata["GoodName"] = "IncaTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","IncaTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "IncaTota";

	
		$fdata["FullName"] = "IncaTota";

	
	
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


	$tdataconsolidado_por_conceptos["IncaTota"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "IncaTota";
//	OtroTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OtroTota";
	$fdata["GoodName"] = "OtroTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","OtroTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "OtroTota";

	
		$fdata["FullName"] = "OtroTota";

	
	
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


	$tdataconsolidado_por_conceptos["OtroTota"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "OtroTota";
//	TotalCobro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TotalCobro";
	$fdata["GoodName"] = "TotalCobro";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consolidado_por_Conceptos","TotalCobro");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "TotalCobro";

	
		$fdata["FullName"] = "TotalCobro";

	
	
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


	$tdataconsolidado_por_conceptos["TotalCobro"] = $fdata;
		$tdataconsolidado_por_conceptos[".searchableFields"][] = "TotalCobro";


$tables_data["Consolidado por Conceptos"]=&$tdataconsolidado_por_conceptos;
$field_labels["Consolidado_por_Conceptos"] = &$fieldLabelsconsolidado_por_conceptos;
$fieldToolTips["Consolidado_por_Conceptos"] = &$fieldToolTipsconsolidado_por_conceptos;
$placeHolders["Consolidado_por_Conceptos"] = &$placeHoldersconsolidado_por_conceptos;
$page_titles["Consolidado_por_Conceptos"] = &$pageTitlesconsolidado_por_conceptos;


changeTextControlsToDate( "Consolidado por Conceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consolidado por Conceptos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consolidado por Conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/consolidado_por_conceptos_ops.php" ) );



	
		;

							

$tdataconsolidado_por_conceptos[".sqlquery"] = $queryData_consolidado_por_conceptos;



include_once(getabspath("include/consolidado_por_conceptos_events.php"));
$tdataconsolidado_por_conceptos[".hasEvents"] = true;

?>