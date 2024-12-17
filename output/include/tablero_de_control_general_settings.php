<?php
$tdatatablero_de_control_general = array();
$tdatatablero_de_control_general[".searchableFields"] = array();
$tdatatablero_de_control_general[".ShortName"] = "tablero_de_control_general";
$tdatatablero_de_control_general[".OwnerID"] = "";
$tdatatablero_de_control_general[".OriginalTable"] = "Tablero de Control General";


$tdatatablero_de_control_general[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatablero_de_control_general[".originalPagesByType"] = $tdatatablero_de_control_general[".pagesByType"];
$tdatatablero_de_control_general[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatablero_de_control_general[".originalPages"] = $tdatatablero_de_control_general[".pages"];
$tdatatablero_de_control_general[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatablero_de_control_general[".originalDefaultPages"] = $tdatatablero_de_control_general[".defaultPages"];

//	field labels
$fieldLabelstablero_de_control_general = array();
$fieldToolTipstablero_de_control_general = array();
$pageTitlestablero_de_control_general = array();
$placeHolderstablero_de_control_general = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstablero_de_control_general["Spanish"] = array();
	$fieldToolTipstablero_de_control_general["Spanish"] = array();
	$placeHolderstablero_de_control_general["Spanish"] = array();
	$pageTitlestablero_de_control_general["Spanish"] = array();
	$fieldLabelstablero_de_control_general["Spanish"]["ProcActu"] = "Total Procesos Activos";
	$fieldToolTipstablero_de_control_general["Spanish"]["ProcActu"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ProcActu"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ObliActu"] = "Nuevos en el Período";
	$fieldToolTipstablero_de_control_general["Spanish"]["ObliActu"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ObliActu"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ProcReca"] = "Nuevos en el Período";
	$fieldToolTipstablero_de_control_general["Spanish"]["ProcReca"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ProcReca"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipstablero_de_control_general["Spanish"]["ObliReca"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ObliReca"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipstablero_de_control_general["Spanish"]["ProcTota"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ProcTota"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipstablero_de_control_general["Spanish"]["ObliTota"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ObliTota"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ProcNopa"] = "Terminados Sin Pago en el Período";
	$fieldToolTipstablero_de_control_general["Spanish"]["ProcNopa"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ProcNopa"] = "";
	$fieldLabelstablero_de_control_general["Spanish"]["ObliNopa"] = "Obli Nopa";
	$fieldToolTipstablero_de_control_general["Spanish"]["ObliNopa"] = "";
	$placeHolderstablero_de_control_general["Spanish"]["ObliNopa"] = "";
	if (count($fieldToolTipstablero_de_control_general["Spanish"]))
		$tdatatablero_de_control_general[".isUseToolTips"] = true;
}


	$tdatatablero_de_control_general[".NCSearch"] = true;



$tdatatablero_de_control_general[".shortTableName"] = "tablero_de_control_general";
$tdatatablero_de_control_general[".nSecOptions"] = 0;

$tdatatablero_de_control_general[".mainTableOwnerID"] = "";
$tdatatablero_de_control_general[".entityType"] = 6;
$tdatatablero_de_control_general[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatablero_de_control_general[".strOriginalTableName"] = "Tablero de Control General";

	



$tdatatablero_de_control_general[".showAddInPopup"] = false;

$tdatatablero_de_control_general[".showEditInPopup"] = false;

$tdatatablero_de_control_general[".showViewInPopup"] = false;

$tdatatablero_de_control_general[".listAjax"] = false;
//	temporary
//$tdatatablero_de_control_general[".listAjax"] = false;

	$tdatatablero_de_control_general[".audit"] = false;

	$tdatatablero_de_control_general[".locking"] = false;


$pages = $tdatatablero_de_control_general[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatablero_de_control_general[".edit"] = true;
	$tdatatablero_de_control_general[".afterEditAction"] = 1;
	$tdatatablero_de_control_general[".closePopupAfterEdit"] = 1;
	$tdatatablero_de_control_general[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatablero_de_control_general[".add"] = true;
$tdatatablero_de_control_general[".afterAddAction"] = 1;
$tdatatablero_de_control_general[".closePopupAfterAdd"] = 1;
$tdatatablero_de_control_general[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatablero_de_control_general[".list"] = true;
}



$tdatatablero_de_control_general[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatablero_de_control_general[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatablero_de_control_general[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatablero_de_control_general[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatablero_de_control_general[".printFriendly"] = true;
}



$tdatatablero_de_control_general[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatablero_de_control_general[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatablero_de_control_general[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatablero_de_control_general[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdatatablero_de_control_general[".ajaxCodeSnippetAdded"] = false;

$tdatatablero_de_control_general[".buttonsAdded"] = false;

$tdatatablero_de_control_general[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatablero_de_control_general[".isUseTimeForSearch"] = false;


$tdatatablero_de_control_general[".badgeColor"] = "BC8F8F";


$tdatatablero_de_control_general[".allSearchFields"] = array();
$tdatatablero_de_control_general[".filterFields"] = array();
$tdatatablero_de_control_general[".requiredSearchFields"] = array();

$tdatatablero_de_control_general[".googleLikeFields"] = array();
$tdatatablero_de_control_general[".googleLikeFields"][] = "ProcActu";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ObliActu";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ProcReca";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ObliReca";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ProcTota";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ObliTota";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ProcNopa";
$tdatatablero_de_control_general[".googleLikeFields"][] = "ObliNopa";




$tdatatablero_de_control_general[".printerPageOrientation"] = 0;
$tdatatablero_de_control_general[".nPrinterPageScale"] = 100;

$tdatatablero_de_control_general[".nPrinterSplitRecords"] = 40;

$tdatatablero_de_control_general[".geocodingEnabled"] = false;




$tdatatablero_de_control_general[".isDisplayLoading"] = true;






$tdatatablero_de_control_general[".pageSize"] = 20;

$tdatatablero_de_control_general[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatablero_de_control_general[".strOrderBy"] = $tstrOrderBy;

$tdatatablero_de_control_general[".orderindexes"] = array();


$tdatatablero_de_control_general[".sqlHead"] = "";
$tdatatablero_de_control_general[".sqlFrom"] = "";
$tdatatablero_de_control_general[".sqlWhereExpr"] = "";
$tdatatablero_de_control_general[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatablero_de_control_general[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatablero_de_control_general[".arrGroupsPerPage"] = $arrGPP;

$tdatatablero_de_control_general[".highlightSearchResults"] = true;

$tableKeystablero_de_control_general = array();
$tdatatablero_de_control_general[".Keys"] = $tableKeystablero_de_control_general;


$tdatatablero_de_control_general[".hideMobileList"] = array();




//	ProcActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcActu";
	$fdata["GoodName"] = "ProcActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ProcActu");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcActu";

	
		$fdata["FullName"] = "ProcActu";

	
	
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


	$tdatatablero_de_control_general["ProcActu"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ProcActu";
//	ObliActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ObliActu";
	$fdata["GoodName"] = "ObliActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ObliActu");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliActu";

	
		$fdata["FullName"] = "ObliActu";

	
	
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


	$tdatatablero_de_control_general["ObliActu"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ObliActu";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ProcReca");
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


	$tdatatablero_de_control_general["ProcReca"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ObliReca");
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


	$tdatatablero_de_control_general["ObliReca"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ObliReca";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ProcTota");
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


	$tdatatablero_de_control_general["ProcTota"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ObliTota");
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


	$tdatatablero_de_control_general["ObliTota"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ObliTota";
//	ProcNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcNopa";
	$fdata["GoodName"] = "ProcNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ProcNopa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcNopa";

	
		$fdata["FullName"] = "ProcNopa";

	
	
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


	$tdatatablero_de_control_general["ProcNopa"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ProcNopa";
//	ObliNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ObliNopa";
	$fdata["GoodName"] = "ObliNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control_General","ObliNopa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliNopa";

	
		$fdata["FullName"] = "ObliNopa";

	
	
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


	$tdatatablero_de_control_general["ObliNopa"] = $fdata;
		$tdatatablero_de_control_general[".searchableFields"][] = "ObliNopa";


$tables_data["Tablero de Control General"]=&$tdatatablero_de_control_general;
$field_labels["Tablero_de_Control_General"] = &$fieldLabelstablero_de_control_general;
$fieldToolTips["Tablero_de_Control_General"] = &$fieldToolTipstablero_de_control_general;
$placeHolders["Tablero_de_Control_General"] = &$placeHolderstablero_de_control_general;
$page_titles["Tablero_de_Control_General"] = &$pageTitlestablero_de_control_general;


changeTextControlsToDate( "Tablero de Control General" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tablero de Control General"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tablero de Control General"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tablero_de_control_general_ops.php" ) );



	
		;

								

$tdatatablero_de_control_general[".sqlquery"] = $queryData_tablero_de_control_general;



include_once(getabspath("include/tablero_de_control_general_events.php"));
$tdatatablero_de_control_general[".hasEvents"] = true;

?>