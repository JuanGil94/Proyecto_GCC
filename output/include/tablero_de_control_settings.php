<?php
$tdatatablero_de_control = array();
$tdatatablero_de_control[".searchableFields"] = array();
$tdatatablero_de_control[".ShortName"] = "tablero_de_control";
$tdatatablero_de_control[".OwnerID"] = "";
$tdatatablero_de_control[".OriginalTable"] = "Tablero de Control";


$tdatatablero_de_control[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatablero_de_control[".originalPagesByType"] = $tdatatablero_de_control[".pagesByType"];
$tdatatablero_de_control[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatablero_de_control[".originalPages"] = $tdatatablero_de_control[".pages"];
$tdatatablero_de_control[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatablero_de_control[".originalDefaultPages"] = $tdatatablero_de_control[".defaultPages"];

//	field labels
$fieldLabelstablero_de_control = array();
$fieldToolTipstablero_de_control = array();
$pageTitlestablero_de_control = array();
$placeHolderstablero_de_control = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstablero_de_control["Spanish"] = array();
	$fieldToolTipstablero_de_control["Spanish"] = array();
	$placeHolderstablero_de_control["Spanish"] = array();
	$pageTitlestablero_de_control["Spanish"] = array();
	$fieldLabelstablero_de_control["Spanish"]["ProcActu"] = "Total Procesos Activos";
	$fieldToolTipstablero_de_control["Spanish"]["ProcActu"] = "";
	$placeHolderstablero_de_control["Spanish"]["ProcActu"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ObliActu"] = "Nuevos en el Período";
	$fieldToolTipstablero_de_control["Spanish"]["ObliActu"] = "";
	$placeHolderstablero_de_control["Spanish"]["ObliActu"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ProcReca"] = "Nuevos en el Período";
	$fieldToolTipstablero_de_control["Spanish"]["ProcReca"] = "";
	$placeHolderstablero_de_control["Spanish"]["ProcReca"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipstablero_de_control["Spanish"]["ObliReca"] = "";
	$placeHolderstablero_de_control["Spanish"]["ObliReca"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipstablero_de_control["Spanish"]["ProcTota"] = "";
	$placeHolderstablero_de_control["Spanish"]["ProcTota"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipstablero_de_control["Spanish"]["ObliTota"] = "";
	$placeHolderstablero_de_control["Spanish"]["ObliTota"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ProcNopa"] = "Terminados Sin Pago en el Período";
	$fieldToolTipstablero_de_control["Spanish"]["ProcNopa"] = "";
	$placeHolderstablero_de_control["Spanish"]["ProcNopa"] = "";
	$fieldLabelstablero_de_control["Spanish"]["ObliNopa"] = "Obli Nopa";
	$fieldToolTipstablero_de_control["Spanish"]["ObliNopa"] = "";
	$placeHolderstablero_de_control["Spanish"]["ObliNopa"] = "";
	if (count($fieldToolTipstablero_de_control["Spanish"]))
		$tdatatablero_de_control[".isUseToolTips"] = true;
}


	$tdatatablero_de_control[".NCSearch"] = true;



$tdatatablero_de_control[".shortTableName"] = "tablero_de_control";
$tdatatablero_de_control[".nSecOptions"] = 0;

$tdatatablero_de_control[".mainTableOwnerID"] = "";
$tdatatablero_de_control[".entityType"] = 6;
$tdatatablero_de_control[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatablero_de_control[".strOriginalTableName"] = "Tablero de Control";

	



$tdatatablero_de_control[".showAddInPopup"] = false;

$tdatatablero_de_control[".showEditInPopup"] = false;

$tdatatablero_de_control[".showViewInPopup"] = false;

$tdatatablero_de_control[".listAjax"] = false;
//	temporary
//$tdatatablero_de_control[".listAjax"] = false;

	$tdatatablero_de_control[".audit"] = false;

	$tdatatablero_de_control[".locking"] = false;


$pages = $tdatatablero_de_control[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatablero_de_control[".edit"] = true;
	$tdatatablero_de_control[".afterEditAction"] = 1;
	$tdatatablero_de_control[".closePopupAfterEdit"] = 1;
	$tdatatablero_de_control[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatablero_de_control[".add"] = true;
$tdatatablero_de_control[".afterAddAction"] = 1;
$tdatatablero_de_control[".closePopupAfterAdd"] = 1;
$tdatatablero_de_control[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatablero_de_control[".list"] = true;
}



$tdatatablero_de_control[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatablero_de_control[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatablero_de_control[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatablero_de_control[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatablero_de_control[".printFriendly"] = true;
}



$tdatatablero_de_control[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatablero_de_control[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatablero_de_control[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatablero_de_control[".isUseAjaxSuggest"] = false;



																																																																																																																																																			

$tdatatablero_de_control[".ajaxCodeSnippetAdded"] = false;

$tdatatablero_de_control[".buttonsAdded"] = false;

$tdatatablero_de_control[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatablero_de_control[".isUseTimeForSearch"] = false;


$tdatatablero_de_control[".badgeColor"] = "BC8F8F";


$tdatatablero_de_control[".allSearchFields"] = array();
$tdatatablero_de_control[".filterFields"] = array();
$tdatatablero_de_control[".requiredSearchFields"] = array();

$tdatatablero_de_control[".googleLikeFields"] = array();
$tdatatablero_de_control[".googleLikeFields"][] = "ProcActu";
$tdatatablero_de_control[".googleLikeFields"][] = "ObliActu";
$tdatatablero_de_control[".googleLikeFields"][] = "ProcReca";
$tdatatablero_de_control[".googleLikeFields"][] = "ObliReca";
$tdatatablero_de_control[".googleLikeFields"][] = "ProcTota";
$tdatatablero_de_control[".googleLikeFields"][] = "ObliTota";
$tdatatablero_de_control[".googleLikeFields"][] = "ProcNopa";
$tdatatablero_de_control[".googleLikeFields"][] = "ObliNopa";




$tdatatablero_de_control[".printerPageOrientation"] = 0;
$tdatatablero_de_control[".nPrinterPageScale"] = 100;

$tdatatablero_de_control[".nPrinterSplitRecords"] = 40;

$tdatatablero_de_control[".geocodingEnabled"] = false;










$tdatatablero_de_control[".pageSize"] = 20;

$tdatatablero_de_control[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatablero_de_control[".strOrderBy"] = $tstrOrderBy;

$tdatatablero_de_control[".orderindexes"] = array();


$tdatatablero_de_control[".sqlHead"] = "";
$tdatatablero_de_control[".sqlFrom"] = "";
$tdatatablero_de_control[".sqlWhereExpr"] = "";
$tdatatablero_de_control[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatablero_de_control[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatablero_de_control[".arrGroupsPerPage"] = $arrGPP;

$tdatatablero_de_control[".highlightSearchResults"] = true;

$tableKeystablero_de_control = array();
$tdatatablero_de_control[".Keys"] = $tableKeystablero_de_control;


$tdatatablero_de_control[".hideMobileList"] = array();




//	ProcActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcActu";
	$fdata["GoodName"] = "ProcActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ProcActu");
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


	$tdatatablero_de_control["ProcActu"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ProcActu";
//	ObliActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ObliActu";
	$fdata["GoodName"] = "ObliActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ObliActu");
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


	$tdatatablero_de_control["ObliActu"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ObliActu";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ProcReca");
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


	$tdatatablero_de_control["ProcReca"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ObliReca");
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


	$tdatatablero_de_control["ObliReca"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ObliReca";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ProcTota");
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


	$tdatatablero_de_control["ProcTota"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ObliTota");
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


	$tdatatablero_de_control["ObliTota"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ObliTota";
//	ProcNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcNopa";
	$fdata["GoodName"] = "ProcNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ProcNopa");
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


	$tdatatablero_de_control["ProcNopa"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ProcNopa";
//	ObliNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ObliNopa";
	$fdata["GoodName"] = "ObliNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tablero_de_Control","ObliNopa");
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


	$tdatatablero_de_control["ObliNopa"] = $fdata;
		$tdatatablero_de_control[".searchableFields"][] = "ObliNopa";


$tables_data["Tablero de Control"]=&$tdatatablero_de_control;
$field_labels["Tablero_de_Control"] = &$fieldLabelstablero_de_control;
$fieldToolTips["Tablero_de_Control"] = &$fieldToolTipstablero_de_control;
$placeHolders["Tablero_de_Control"] = &$placeHolderstablero_de_control;
$page_titles["Tablero_de_Control"] = &$pageTitlestablero_de_control;


changeTextControlsToDate( "Tablero de Control" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tablero de Control"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tablero de Control"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tablero_de_control_ops.php" ) );



	
		;

								

$tdatatablero_de_control[".sqlquery"] = $queryData_tablero_de_control;



$tdatatablero_de_control[".hasEvents"] = false;

?>