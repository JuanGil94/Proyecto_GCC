<?php
$tdatagesti_n_medidas_cautelares = array();
$tdatagesti_n_medidas_cautelares[".searchableFields"] = array();
$tdatagesti_n_medidas_cautelares[".ShortName"] = "gesti_n_medidas_cautelares";
$tdatagesti_n_medidas_cautelares[".OwnerID"] = "";
$tdatagesti_n_medidas_cautelares[".OriginalTable"] = "Gestión Medidas Cautelares";


$tdatagesti_n_medidas_cautelares[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagesti_n_medidas_cautelares[".originalPagesByType"] = $tdatagesti_n_medidas_cautelares[".pagesByType"];
$tdatagesti_n_medidas_cautelares[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagesti_n_medidas_cautelares[".originalPages"] = $tdatagesti_n_medidas_cautelares[".pages"];
$tdatagesti_n_medidas_cautelares[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagesti_n_medidas_cautelares[".originalDefaultPages"] = $tdatagesti_n_medidas_cautelares[".defaultPages"];

//	field labels
$fieldLabelsgesti_n_medidas_cautelares = array();
$fieldToolTipsgesti_n_medidas_cautelares = array();
$pageTitlesgesti_n_medidas_cautelares = array();
$placeHoldersgesti_n_medidas_cautelares = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"] = array();
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"] = array();
	$placeHoldersgesti_n_medidas_cautelares["Spanish"] = array();
	$pageTitlesgesti_n_medidas_cautelares["Spanish"] = array();
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["Seccional"] = "Dirección Seccional";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["Seccional"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["Seccional"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic1"] = "CARTERA CORRIENTE Procesos activos 100%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic1"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic1"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic120"] = "CARTERA CORRIENTE Procesos activos 20%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic120"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic120"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcFina1"] = "CARTERA CORRIENTE Med. Cautelares sobre productos Bancarios";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcFina1"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcFina1"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcIndi1"] = "CARTERA CORRIENTE Indicadores de gestión medidas";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcIndi1"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcIndi1"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic4"] = "CARTERA MINJUSTICIA Procesos activos 100%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic4"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic4"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic420"] = "CARTERA MINJUSTICIA Procesos activos 20%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic420"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic420"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcFina4"] = "CARTERA MINJUSTICIA Med. Cautelares sobre productos Bancarios";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcFina4"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcFina4"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcIndi4"] = "CARTERA MINJUSTICIA Indicadores de gestión medidas";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcIndi4"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcIndi4"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic5"] = "CARTERA EJEMPLARIZANTE Procesos activos 100%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic5"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic5"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInic520"] = "CARTERA EJEMPLARIZANTE Procesos activos 20%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInic520"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInic520"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcFina5"] = "CARTERA EJEMPLARIZANTE Med. Cautelares sobre productos Bancarios";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcFina5"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcFina5"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcIndi5"] = "CARTERA EJEMPLARIZANTE Indicadores de gestión medidas";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcIndi5"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcIndi5"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInicTota"] = "TOTAL Procesos activos 100%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInicTota"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInicTota"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcInicTota20"] = "TOTAL Procesos activos 20%";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcInicTota20"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcInicTota20"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcFinaTota"] = "TOTAL Med. Cautelares sobre productos Bancarios";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcFinaTota"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcFinaTota"] = "";
	$fieldLabelsgesti_n_medidas_cautelares["Spanish"]["ProcIndiTota"] = "TOTAL Indicadores de gestión medidas";
	$fieldToolTipsgesti_n_medidas_cautelares["Spanish"]["ProcIndiTota"] = "";
	$placeHoldersgesti_n_medidas_cautelares["Spanish"]["ProcIndiTota"] = "";
	if (count($fieldToolTipsgesti_n_medidas_cautelares["Spanish"]))
		$tdatagesti_n_medidas_cautelares[".isUseToolTips"] = true;
}


	$tdatagesti_n_medidas_cautelares[".NCSearch"] = true;



$tdatagesti_n_medidas_cautelares[".shortTableName"] = "gesti_n_medidas_cautelares";
$tdatagesti_n_medidas_cautelares[".nSecOptions"] = 0;

$tdatagesti_n_medidas_cautelares[".mainTableOwnerID"] = "";
$tdatagesti_n_medidas_cautelares[".entityType"] = 6;
$tdatagesti_n_medidas_cautelares[".connId"] = "GCC_at_S00001_CCAD01";


$tdatagesti_n_medidas_cautelares[".strOriginalTableName"] = "Gestión Medidas Cautelares";

	



$tdatagesti_n_medidas_cautelares[".showAddInPopup"] = false;

$tdatagesti_n_medidas_cautelares[".showEditInPopup"] = false;

$tdatagesti_n_medidas_cautelares[".showViewInPopup"] = false;

$tdatagesti_n_medidas_cautelares[".listAjax"] = false;
//	temporary
//$tdatagesti_n_medidas_cautelares[".listAjax"] = false;

	$tdatagesti_n_medidas_cautelares[".audit"] = false;

	$tdatagesti_n_medidas_cautelares[".locking"] = false;


$pages = $tdatagesti_n_medidas_cautelares[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagesti_n_medidas_cautelares[".edit"] = true;
	$tdatagesti_n_medidas_cautelares[".afterEditAction"] = 1;
	$tdatagesti_n_medidas_cautelares[".closePopupAfterEdit"] = 1;
	$tdatagesti_n_medidas_cautelares[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagesti_n_medidas_cautelares[".add"] = true;
$tdatagesti_n_medidas_cautelares[".afterAddAction"] = 1;
$tdatagesti_n_medidas_cautelares[".closePopupAfterAdd"] = 1;
$tdatagesti_n_medidas_cautelares[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagesti_n_medidas_cautelares[".list"] = true;
}



$tdatagesti_n_medidas_cautelares[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagesti_n_medidas_cautelares[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagesti_n_medidas_cautelares[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagesti_n_medidas_cautelares[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagesti_n_medidas_cautelares[".printFriendly"] = true;
}



$tdatagesti_n_medidas_cautelares[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagesti_n_medidas_cautelares[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagesti_n_medidas_cautelares[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagesti_n_medidas_cautelares[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatagesti_n_medidas_cautelares[".ajaxCodeSnippetAdded"] = false;

$tdatagesti_n_medidas_cautelares[".buttonsAdded"] = false;

$tdatagesti_n_medidas_cautelares[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagesti_n_medidas_cautelares[".isUseTimeForSearch"] = false;


$tdatagesti_n_medidas_cautelares[".badgeColor"] = "B22222";


$tdatagesti_n_medidas_cautelares[".allSearchFields"] = array();
$tdatagesti_n_medidas_cautelares[".filterFields"] = array();
$tdatagesti_n_medidas_cautelares[".requiredSearchFields"] = array();

$tdatagesti_n_medidas_cautelares[".googleLikeFields"] = array();
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "Seccional";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic1";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic120";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcFina1";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcIndi1";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic4";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic420";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcFina4";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcIndi4";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic5";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInic520";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcFina5";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcIndi5";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInicTota";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcInicTota20";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcFinaTota";
$tdatagesti_n_medidas_cautelares[".googleLikeFields"][] = "ProcIndiTota";




$tdatagesti_n_medidas_cautelares[".printerPageOrientation"] = 0;
$tdatagesti_n_medidas_cautelares[".nPrinterPageScale"] = 100;

$tdatagesti_n_medidas_cautelares[".nPrinterSplitRecords"] = 40;

$tdatagesti_n_medidas_cautelares[".geocodingEnabled"] = false;










$tdatagesti_n_medidas_cautelares[".pageSize"] = 1;

$tdatagesti_n_medidas_cautelares[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagesti_n_medidas_cautelares[".strOrderBy"] = $tstrOrderBy;

$tdatagesti_n_medidas_cautelares[".orderindexes"] = array();


$tdatagesti_n_medidas_cautelares[".sqlHead"] = "";
$tdatagesti_n_medidas_cautelares[".sqlFrom"] = "";
$tdatagesti_n_medidas_cautelares[".sqlWhereExpr"] = "";
$tdatagesti_n_medidas_cautelares[".sqlTail"] = "";











//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagesti_n_medidas_cautelares[".arrGroupsPerPage"] = $arrGPP;

$tdatagesti_n_medidas_cautelares[".highlightSearchResults"] = true;

$tableKeysgesti_n_medidas_cautelares = array();
$tdatagesti_n_medidas_cautelares[".Keys"] = $tableKeysgesti_n_medidas_cautelares;


$tdatagesti_n_medidas_cautelares[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","Seccional");
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


	$tdatagesti_n_medidas_cautelares["Seccional"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "Seccional";
//	ProcInic1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcInic1";
	$fdata["GoodName"] = "ProcInic1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic1");
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


	$tdatagesti_n_medidas_cautelares["ProcInic1"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic1";
//	ProcInic120
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcInic120";
	$fdata["GoodName"] = "ProcInic120";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic120");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcInic120";

	
		$fdata["FullName"] = "ProcInic120";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcInic120"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic120";
//	ProcFina1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProcFina1";
	$fdata["GoodName"] = "ProcFina1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcFina1");
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


	$tdatagesti_n_medidas_cautelares["ProcFina1"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcFina1";
//	ProcIndi1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProcIndi1";
	$fdata["GoodName"] = "ProcIndi1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcIndi1");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi1";

	
		$fdata["FullName"] = "ProcIndi1";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcIndi1"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcIndi1";
//	ProcInic4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcInic4";
	$fdata["GoodName"] = "ProcInic4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic4");
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


	$tdatagesti_n_medidas_cautelares["ProcInic4"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic4";
//	ProcInic420
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcInic420";
	$fdata["GoodName"] = "ProcInic420";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic420");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcInic420";

	
		$fdata["FullName"] = "ProcInic420";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcInic420"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic420";
//	ProcFina4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProcFina4";
	$fdata["GoodName"] = "ProcFina4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcFina4");
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


	$tdatagesti_n_medidas_cautelares["ProcFina4"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcFina4";
//	ProcIndi4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ProcIndi4";
	$fdata["GoodName"] = "ProcIndi4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcIndi4");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi4";

	
		$fdata["FullName"] = "ProcIndi4";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcIndi4"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcIndi4";
//	ProcInic5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ProcInic5";
	$fdata["GoodName"] = "ProcInic5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic5");
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


	$tdatagesti_n_medidas_cautelares["ProcInic5"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic5";
//	ProcInic520
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProcInic520";
	$fdata["GoodName"] = "ProcInic520";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInic520");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcInic520";

	
		$fdata["FullName"] = "ProcInic520";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcInic520"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInic520";
//	ProcFina5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProcFina5";
	$fdata["GoodName"] = "ProcFina5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcFina5");
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


	$tdatagesti_n_medidas_cautelares["ProcFina5"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcFina5";
//	ProcIndi5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ProcIndi5";
	$fdata["GoodName"] = "ProcIndi5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcIndi5");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndi5";

	
		$fdata["FullName"] = "ProcIndi5";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcIndi5"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcIndi5";
//	ProcInicTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ProcInicTota";
	$fdata["GoodName"] = "ProcInicTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInicTota");
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


	$tdatagesti_n_medidas_cautelares["ProcInicTota"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInicTota";
//	ProcInicTota20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ProcInicTota20";
	$fdata["GoodName"] = "ProcInicTota20";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcInicTota20");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcInicTota20";

	
		$fdata["FullName"] = "ProcInicTota20";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcInicTota20"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcInicTota20";
//	ProcFinaTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ProcFinaTota";
	$fdata["GoodName"] = "ProcFinaTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcFinaTota");
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


	$tdatagesti_n_medidas_cautelares["ProcFinaTota"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcFinaTota";
//	ProcIndiTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ProcIndiTota";
	$fdata["GoodName"] = "ProcIndiTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gesti_n_Medidas_Cautelares","ProcIndiTota");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "ProcIndiTota";

	
		$fdata["FullName"] = "ProcIndiTota";

	
	
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


	$tdatagesti_n_medidas_cautelares["ProcIndiTota"] = $fdata;
		$tdatagesti_n_medidas_cautelares[".searchableFields"][] = "ProcIndiTota";


$tables_data["Gestión Medidas Cautelares"]=&$tdatagesti_n_medidas_cautelares;
$field_labels["Gesti_n_Medidas_Cautelares"] = &$fieldLabelsgesti_n_medidas_cautelares;
$fieldToolTips["Gesti_n_Medidas_Cautelares"] = &$fieldToolTipsgesti_n_medidas_cautelares;
$placeHolders["Gesti_n_Medidas_Cautelares"] = &$placeHoldersgesti_n_medidas_cautelares;
$page_titles["Gesti_n_Medidas_Cautelares"] = &$pageTitlesgesti_n_medidas_cautelares;


changeTextControlsToDate( "Gestión Medidas Cautelares" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Gestión Medidas Cautelares"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Gestión Medidas Cautelares"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/gesti_n_medidas_cautelares_ops.php" ) );



	
		;

																	

$tdatagesti_n_medidas_cautelares[".sqlquery"] = $queryData_gesti_n_medidas_cautelares;



include_once(getabspath("include/gesti_n_medidas_cautelares_events.php"));
$tdatagesti_n_medidas_cautelares[".hasEvents"] = true;

?>