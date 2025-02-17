<?php
$tdatatest_de_deterioro__resumen_ = array();
$tdatatest_de_deterioro__resumen_[".searchableFields"] = array();
$tdatatest_de_deterioro__resumen_[".ShortName"] = "test_de_deterioro__resumen_";
$tdatatest_de_deterioro__resumen_[".OwnerID"] = "";
$tdatatest_de_deterioro__resumen_[".OriginalTable"] = "Test de Deterioro (Resumen)";


$tdatatest_de_deterioro__resumen_[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" );
$tdatatest_de_deterioro__resumen_[".originalPagesByType"] = $tdatatest_de_deterioro__resumen_[".pagesByType"];
$tdatatest_de_deterioro__resumen_[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdatatest_de_deterioro__resumen_[".originalPages"] = $tdatatest_de_deterioro__resumen_[".pages"];
$tdatatest_de_deterioro__resumen_[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\"}" );
$tdatatest_de_deterioro__resumen_[".originalDefaultPages"] = $tdatatest_de_deterioro__resumen_[".defaultPages"];

//	field labels
$fieldLabelstest_de_deterioro__resumen_ = array();
$fieldToolTipstest_de_deterioro__resumen_ = array();
$pageTitlestest_de_deterioro__resumen_ = array();
$placeHolderstest_de_deterioro__resumen_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstest_de_deterioro__resumen_["Spanish"] = array();
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"] = array();
	$placeHolderstest_de_deterioro__resumen_["Spanish"] = array();
	$pageTitlestest_de_deterioro__resumen_["Spanish"] = array();
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["Seccional"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["Seccional"] = "";
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["Saldo"] = "Saldo de Cartera";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["Saldo"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["Saldo"] = "";
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["VPN"] = "VPN de Flujos Esperados";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["VPN"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["VPN"] = "";
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["Deterioro"] = "Deterioro Multas";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["Deterioro"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["Deterioro"] = "";
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["DeterioroOtros"] = "Deterioro Otros";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["DeterioroOtros"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["DeterioroOtros"] = "";
	$fieldLabelstest_de_deterioro__resumen_["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstest_de_deterioro__resumen_["Spanish"]["Porcentaje"] = "";
	$placeHolderstest_de_deterioro__resumen_["Spanish"]["Porcentaje"] = "";
	if (count($fieldToolTipstest_de_deterioro__resumen_["Spanish"]))
		$tdatatest_de_deterioro__resumen_[".isUseToolTips"] = true;
}


	$tdatatest_de_deterioro__resumen_[".NCSearch"] = true;


	$tdatatest_de_deterioro__resumen_[".scrollGridBody"] = true;

$tdatatest_de_deterioro__resumen_[".shortTableName"] = "test_de_deterioro__resumen_";
$tdatatest_de_deterioro__resumen_[".nSecOptions"] = 0;

$tdatatest_de_deterioro__resumen_[".mainTableOwnerID"] = "";
$tdatatest_de_deterioro__resumen_[".entityType"] = 6;
$tdatatest_de_deterioro__resumen_[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatest_de_deterioro__resumen_[".strOriginalTableName"] = "Test de Deterioro (Resumen)";

	



$tdatatest_de_deterioro__resumen_[".showAddInPopup"] = false;

$tdatatest_de_deterioro__resumen_[".showEditInPopup"] = false;

$tdatatest_de_deterioro__resumen_[".showViewInPopup"] = false;

$tdatatest_de_deterioro__resumen_[".listAjax"] = false;
//	temporary
//$tdatatest_de_deterioro__resumen_[".listAjax"] = false;

	$tdatatest_de_deterioro__resumen_[".audit"] = false;

	$tdatatest_de_deterioro__resumen_[".locking"] = false;


$pages = $tdatatest_de_deterioro__resumen_[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatest_de_deterioro__resumen_[".edit"] = true;
	$tdatatest_de_deterioro__resumen_[".afterEditAction"] = 1;
	$tdatatest_de_deterioro__resumen_[".closePopupAfterEdit"] = 1;
	$tdatatest_de_deterioro__resumen_[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatest_de_deterioro__resumen_[".add"] = true;
$tdatatest_de_deterioro__resumen_[".afterAddAction"] = 1;
$tdatatest_de_deterioro__resumen_[".closePopupAfterAdd"] = 1;
$tdatatest_de_deterioro__resumen_[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatest_de_deterioro__resumen_[".list"] = true;
}



$tdatatest_de_deterioro__resumen_[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatest_de_deterioro__resumen_[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatest_de_deterioro__resumen_[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatest_de_deterioro__resumen_[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatest_de_deterioro__resumen_[".printFriendly"] = true;
}



$tdatatest_de_deterioro__resumen_[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatest_de_deterioro__resumen_[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatest_de_deterioro__resumen_[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatest_de_deterioro__resumen_[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdatatest_de_deterioro__resumen_[".ajaxCodeSnippetAdded"] = false;

$tdatatest_de_deterioro__resumen_[".buttonsAdded"] = false;

$tdatatest_de_deterioro__resumen_[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest_de_deterioro__resumen_[".isUseTimeForSearch"] = false;


$tdatatest_de_deterioro__resumen_[".badgeColor"] = "CD853F";


$tdatatest_de_deterioro__resumen_[".allSearchFields"] = array();
$tdatatest_de_deterioro__resumen_[".filterFields"] = array();
$tdatatest_de_deterioro__resumen_[".requiredSearchFields"] = array();

$tdatatest_de_deterioro__resumen_[".googleLikeFields"] = array();
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "Seccional";
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "Saldo";
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "VPN";
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "Deterioro";
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "DeterioroOtros";
$tdatatest_de_deterioro__resumen_[".googleLikeFields"][] = "Porcentaje";




$tdatatest_de_deterioro__resumen_[".printerPageOrientation"] = 0;
$tdatatest_de_deterioro__resumen_[".nPrinterPageScale"] = 100;

$tdatatest_de_deterioro__resumen_[".nPrinterSplitRecords"] = 40;

$tdatatest_de_deterioro__resumen_[".geocodingEnabled"] = false;




$tdatatest_de_deterioro__resumen_[".isDisplayLoading"] = true;






$tdatatest_de_deterioro__resumen_[".pageSize"] = 1;

$tdatatest_de_deterioro__resumen_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatest_de_deterioro__resumen_[".strOrderBy"] = $tstrOrderBy;

$tdatatest_de_deterioro__resumen_[".orderindexes"] = array();


$tdatatest_de_deterioro__resumen_[".sqlHead"] = "";
$tdatatest_de_deterioro__resumen_[".sqlFrom"] = "";
$tdatatest_de_deterioro__resumen_[".sqlWhereExpr"] = "";
$tdatatest_de_deterioro__resumen_[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatest_de_deterioro__resumen_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest_de_deterioro__resumen_[".arrGroupsPerPage"] = $arrGPP;

$tdatatest_de_deterioro__resumen_[".highlightSearchResults"] = true;

$tableKeystest_de_deterioro__resumen_ = array();
$tdatatest_de_deterioro__resumen_[".Keys"] = $tableKeystest_de_deterioro__resumen_;


$tdatatest_de_deterioro__resumen_[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["FullName"] = "Seccional";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdatatest_de_deterioro__resumen_["Seccional"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "Seccional";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","Saldo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["FullName"] = "Saldo";

	
	
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


	$tdatatest_de_deterioro__resumen_["Saldo"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "Saldo";
//	VPN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VPN";
	$fdata["GoodName"] = "VPN";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","VPN");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VPN";

	
		$fdata["FullName"] = "VPN";

	
	
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


	$tdatatest_de_deterioro__resumen_["VPN"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "VPN";
//	Deterioro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Deterioro";
	$fdata["GoodName"] = "Deterioro";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","Deterioro");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Deterioro";

	
		$fdata["FullName"] = "Deterioro";

	
	
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


	$tdatatest_de_deterioro__resumen_["Deterioro"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "Deterioro";
//	DeterioroOtros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DeterioroOtros";
	$fdata["GoodName"] = "DeterioroOtros";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","DeterioroOtros");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DeterioroOtros";

	
		$fdata["FullName"] = "DeterioroOtros";

	
	
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


	$tdatatest_de_deterioro__resumen_["DeterioroOtros"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "DeterioroOtros";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Test_de_Deterioro__Resumen_","Porcentaje");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Porcentaje";

	
		$fdata["FullName"] = "Porcentaje";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatest_de_deterioro__resumen_["Porcentaje"] = $fdata;
		$tdatatest_de_deterioro__resumen_[".searchableFields"][] = "Porcentaje";


$tables_data["Test de Deterioro (Resumen)"]=&$tdatatest_de_deterioro__resumen_;
$field_labels["Test_de_Deterioro__Resumen_"] = &$fieldLabelstest_de_deterioro__resumen_;
$fieldToolTips["Test_de_Deterioro__Resumen_"] = &$fieldToolTipstest_de_deterioro__resumen_;
$placeHolders["Test_de_Deterioro__Resumen_"] = &$placeHolderstest_de_deterioro__resumen_;
$page_titles["Test_de_Deterioro__Resumen_"] = &$pageTitlestest_de_deterioro__resumen_;


changeTextControlsToDate( "Test de Deterioro (Resumen)" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Test de Deterioro (Resumen)"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Test de Deterioro (Resumen)"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/test_de_deterioro__resumen__ops.php" ) );



	
		;

						

$tdatatest_de_deterioro__resumen_[".sqlquery"] = $queryData_test_de_deterioro__resumen_;



include_once(getabspath("include/test_de_deterioro__resumen__events.php"));
$tdatatest_de_deterioro__resumen_[".hasEvents"] = true;

?>