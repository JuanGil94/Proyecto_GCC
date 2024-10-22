<?php
$tdataindicadores_recaudos = array();
$tdataindicadores_recaudos[".searchableFields"] = array();
$tdataindicadores_recaudos[".ShortName"] = "indicadores_recaudos";
$tdataindicadores_recaudos[".OwnerID"] = "";
$tdataindicadores_recaudos[".OriginalTable"] = "Indicadores Recaudos";


$tdataindicadores_recaudos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataindicadores_recaudos[".originalPagesByType"] = $tdataindicadores_recaudos[".pagesByType"];
$tdataindicadores_recaudos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataindicadores_recaudos[".originalPages"] = $tdataindicadores_recaudos[".pages"];
$tdataindicadores_recaudos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataindicadores_recaudos[".originalDefaultPages"] = $tdataindicadores_recaudos[".defaultPages"];

//	field labels
$fieldLabelsindicadores_recaudos = array();
$fieldToolTipsindicadores_recaudos = array();
$pageTitlesindicadores_recaudos = array();
$placeHoldersindicadores_recaudos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsindicadores_recaudos["Spanish"] = array();
	$fieldToolTipsindicadores_recaudos["Spanish"] = array();
	$placeHoldersindicadores_recaudos["Spanish"] = array();
	$pageTitlesindicadores_recaudos["Spanish"] = array();
	$fieldLabelsindicadores_recaudos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsindicadores_recaudos["Spanish"]["Seccional"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["Seccional"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcInic1"] = "Proc Inic1";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcInic1"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcInic1"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcFina1"] = "Proc Fina1";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcFina1"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcFina1"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcIndi1"] = "Proc Indi1";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcIndi1"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcIndi1"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcInic4"] = "Proc Inic4";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcInic4"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcInic4"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcFina4"] = "Proc Fina4";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcFina4"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcFina4"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcIndi4"] = "Proc Indi4";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcIndi4"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcIndi4"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcInic5"] = "Proc Inic5";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcInic5"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcInic5"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcFina5"] = "Proc Fina5";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcFina5"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcFina5"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcIndi5"] = "Proc Indi5";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcIndi5"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcIndi5"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcInicTota"] = "Proc Inic Tota";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcInicTota"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcInicTota"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcFinaTota"] = "Proc Fina Tota";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcFinaTota"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcFinaTota"] = "";
	$fieldLabelsindicadores_recaudos["Spanish"]["ProcIndiTota"] = "Proc Indi Tota";
	$fieldToolTipsindicadores_recaudos["Spanish"]["ProcIndiTota"] = "";
	$placeHoldersindicadores_recaudos["Spanish"]["ProcIndiTota"] = "";
	if (count($fieldToolTipsindicadores_recaudos["Spanish"]))
		$tdataindicadores_recaudos[".isUseToolTips"] = true;
}


	$tdataindicadores_recaudos[".NCSearch"] = true;


	$tdataindicadores_recaudos[".scrollGridBody"] = true;

$tdataindicadores_recaudos[".shortTableName"] = "indicadores_recaudos";
$tdataindicadores_recaudos[".nSecOptions"] = 0;

$tdataindicadores_recaudos[".mainTableOwnerID"] = "";
$tdataindicadores_recaudos[".entityType"] = 6;
$tdataindicadores_recaudos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataindicadores_recaudos[".strOriginalTableName"] = "Indicadores Recaudos";

	



$tdataindicadores_recaudos[".showAddInPopup"] = false;

$tdataindicadores_recaudos[".showEditInPopup"] = false;

$tdataindicadores_recaudos[".showViewInPopup"] = false;

$tdataindicadores_recaudos[".listAjax"] = false;
//	temporary
//$tdataindicadores_recaudos[".listAjax"] = false;

	$tdataindicadores_recaudos[".audit"] = false;

	$tdataindicadores_recaudos[".locking"] = false;


$pages = $tdataindicadores_recaudos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicadores_recaudos[".edit"] = true;
	$tdataindicadores_recaudos[".afterEditAction"] = 1;
	$tdataindicadores_recaudos[".closePopupAfterEdit"] = 1;
	$tdataindicadores_recaudos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicadores_recaudos[".add"] = true;
$tdataindicadores_recaudos[".afterAddAction"] = 1;
$tdataindicadores_recaudos[".closePopupAfterAdd"] = 1;
$tdataindicadores_recaudos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicadores_recaudos[".list"] = true;
}



$tdataindicadores_recaudos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicadores_recaudos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicadores_recaudos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicadores_recaudos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicadores_recaudos[".printFriendly"] = true;
}



$tdataindicadores_recaudos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicadores_recaudos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicadores_recaudos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicadores_recaudos[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																														

$tdataindicadores_recaudos[".ajaxCodeSnippetAdded"] = false;

$tdataindicadores_recaudos[".buttonsAdded"] = false;

$tdataindicadores_recaudos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicadores_recaudos[".isUseTimeForSearch"] = false;


$tdataindicadores_recaudos[".badgeColor"] = "E67349";


$tdataindicadores_recaudos[".allSearchFields"] = array();
$tdataindicadores_recaudos[".filterFields"] = array();
$tdataindicadores_recaudos[".requiredSearchFields"] = array();

$tdataindicadores_recaudos[".googleLikeFields"] = array();
$tdataindicadores_recaudos[".googleLikeFields"][] = "Seccional";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcInic1";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcFina1";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcIndi1";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcInic4";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcFina4";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcIndi4";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcInic5";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcFina5";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcIndi5";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcInicTota";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcFinaTota";
$tdataindicadores_recaudos[".googleLikeFields"][] = "ProcIndiTota";




$tdataindicadores_recaudos[".printerPageOrientation"] = 0;
$tdataindicadores_recaudos[".nPrinterPageScale"] = 100;

$tdataindicadores_recaudos[".nPrinterSplitRecords"] = 40;

$tdataindicadores_recaudos[".geocodingEnabled"] = false;




$tdataindicadores_recaudos[".isDisplayLoading"] = true;






$tdataindicadores_recaudos[".pageSize"] = 1;

$tdataindicadores_recaudos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicadores_recaudos[".strOrderBy"] = $tstrOrderBy;

$tdataindicadores_recaudos[".orderindexes"] = array();


$tdataindicadores_recaudos[".sqlHead"] = "";
$tdataindicadores_recaudos[".sqlFrom"] = "";
$tdataindicadores_recaudos[".sqlWhereExpr"] = "";
$tdataindicadores_recaudos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 1;
$tdataindicadores_recaudos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicadores_recaudos[".arrGroupsPerPage"] = $arrGPP;

$tdataindicadores_recaudos[".highlightSearchResults"] = true;

$tableKeysindicadores_recaudos = array();
$tdataindicadores_recaudos[".Keys"] = $tableKeysindicadores_recaudos;


$tdataindicadores_recaudos[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","Seccional");
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


	$tdataindicadores_recaudos["Seccional"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "Seccional";
//	ProcInic1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcInic1";
	$fdata["GoodName"] = "ProcInic1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcInic1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcInic1";

	
		$fdata["FullName"] = "ProcInic1";

	
	
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


	$tdataindicadores_recaudos["ProcInic1"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcInic1";
//	ProcFina1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcFina1";
	$fdata["GoodName"] = "ProcFina1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcFina1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcFina1";

	
		$fdata["FullName"] = "ProcFina1";

	
	
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


	$tdataindicadores_recaudos["ProcFina1"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcFina1";
//	ProcIndi1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProcIndi1";
	$fdata["GoodName"] = "ProcIndi1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcIndi1");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi1";

	
		$fdata["FullName"] = "ProcIndi1";

	
	
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


	$tdataindicadores_recaudos["ProcIndi1"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcIndi1";
//	ProcInic4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProcInic4";
	$fdata["GoodName"] = "ProcInic4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcInic4");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcInic4";

	
		$fdata["FullName"] = "ProcInic4";

	
	
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


	$tdataindicadores_recaudos["ProcInic4"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcInic4";
//	ProcFina4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcFina4";
	$fdata["GoodName"] = "ProcFina4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcFina4");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcFina4";

	
		$fdata["FullName"] = "ProcFina4";

	
	
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


	$tdataindicadores_recaudos["ProcFina4"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcFina4";
//	ProcIndi4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcIndi4";
	$fdata["GoodName"] = "ProcIndi4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcIndi4");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi4";

	
		$fdata["FullName"] = "ProcIndi4";

	
	
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


	$tdataindicadores_recaudos["ProcIndi4"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcIndi4";
//	ProcInic5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProcInic5";
	$fdata["GoodName"] = "ProcInic5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcInic5");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcInic5";

	
		$fdata["FullName"] = "ProcInic5";

	
	
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


	$tdataindicadores_recaudos["ProcInic5"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcInic5";
//	ProcFina5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ProcFina5";
	$fdata["GoodName"] = "ProcFina5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcFina5");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcFina5";

	
		$fdata["FullName"] = "ProcFina5";

	
	
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


	$tdataindicadores_recaudos["ProcFina5"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcFina5";
//	ProcIndi5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ProcIndi5";
	$fdata["GoodName"] = "ProcIndi5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcIndi5");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi5";

	
		$fdata["FullName"] = "ProcIndi5";

	
	
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


	$tdataindicadores_recaudos["ProcIndi5"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcIndi5";
//	ProcInicTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProcInicTota";
	$fdata["GoodName"] = "ProcInicTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcInicTota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcInicTota";

	
		$fdata["FullName"] = "ProcInicTota";

	
	
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


	$tdataindicadores_recaudos["ProcInicTota"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcInicTota";
//	ProcFinaTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProcFinaTota";
	$fdata["GoodName"] = "ProcFinaTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcFinaTota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcFinaTota";

	
		$fdata["FullName"] = "ProcFinaTota";

	
	
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


	$tdataindicadores_recaudos["ProcFinaTota"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcFinaTota";
//	ProcIndiTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ProcIndiTota";
	$fdata["GoodName"] = "ProcIndiTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_Recaudos","ProcIndiTota");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndiTota";

	
		$fdata["FullName"] = "ProcIndiTota";

	
	
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


	$tdataindicadores_recaudos["ProcIndiTota"] = $fdata;
		$tdataindicadores_recaudos[".searchableFields"][] = "ProcIndiTota";


$tables_data["Indicadores Recaudos"]=&$tdataindicadores_recaudos;
$field_labels["Indicadores_Recaudos"] = &$fieldLabelsindicadores_recaudos;
$fieldToolTips["Indicadores_Recaudos"] = &$fieldToolTipsindicadores_recaudos;
$placeHolders["Indicadores_Recaudos"] = &$placeHoldersindicadores_recaudos;
$page_titles["Indicadores_Recaudos"] = &$pageTitlesindicadores_recaudos;


changeTextControlsToDate( "Indicadores Recaudos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Indicadores Recaudos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Indicadores Recaudos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/indicadores_recaudos_ops.php" ) );



	
		;

													

$tdataindicadores_recaudos[".sqlquery"] = $queryData_indicadores_recaudos;



include_once(getabspath("include/indicadores_recaudos_events.php"));
$tdataindicadores_recaudos[".hasEvents"] = true;

?>