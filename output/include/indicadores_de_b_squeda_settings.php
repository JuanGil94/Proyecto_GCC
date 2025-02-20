<?php
$tdataindicadores_de_b_squeda = array();
$tdataindicadores_de_b_squeda[".searchableFields"] = array();
$tdataindicadores_de_b_squeda[".ShortName"] = "indicadores_de_b_squeda";
$tdataindicadores_de_b_squeda[".OwnerID"] = "";
$tdataindicadores_de_b_squeda[".OriginalTable"] = "Indicadores de búsqueda";


$tdataindicadores_de_b_squeda[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" );
$tdataindicadores_de_b_squeda[".originalPagesByType"] = $tdataindicadores_de_b_squeda[".pagesByType"];
$tdataindicadores_de_b_squeda[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdataindicadores_de_b_squeda[".originalPages"] = $tdataindicadores_de_b_squeda[".pages"];
$tdataindicadores_de_b_squeda[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\"}" );
$tdataindicadores_de_b_squeda[".originalDefaultPages"] = $tdataindicadores_de_b_squeda[".defaultPages"];

//	field labels
$fieldLabelsindicadores_de_b_squeda = array();
$fieldToolTipsindicadores_de_b_squeda = array();
$pageTitlesindicadores_de_b_squeda = array();
$placeHoldersindicadores_de_b_squeda = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsindicadores_de_b_squeda["Spanish"] = array();
	$fieldToolTipsindicadores_de_b_squeda["Spanish"] = array();
	$placeHoldersindicadores_de_b_squeda["Spanish"] = array();
	$pageTitlesindicadores_de_b_squeda["Spanish"] = array();
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["Seccional"] = "DIRECCION SECCIONAL";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["Seccional"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["Seccional"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcInic1"] = "CARTERA CORRIENTE Procesos activos";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcInic1"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcInic1"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcFina1"] = "CARTERA CORRIENTE Procesos sin búsqueda de bienes";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcFina1"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcFina1"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcIndi1"] = "CARTERA CORRIENTE Indicadores de gestión búsquedas";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcIndi1"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcIndi1"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcInic4"] = "CARTERA MINJUSTICIA Procesos activos	";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcInic4"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcInic4"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcFina4"] = "CARTERA MINJUSTICIA Procesos sin búsqueda de bienes";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcFina4"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcFina4"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcIndi4"] = "CARTERA MINJUSTICIA Indicadores de gestión búsquedas";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcIndi4"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcIndi4"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcInic5"] = "CARTERA EJEMPLARIZANTE Procesos activos";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcInic5"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcInic5"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcFina5"] = "CARTERA EJEMPLARIZANTE Procesos sin búsqueda de bienes";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcFina5"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcFina5"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcIndi5"] = "CARTERA EJEMPLARIZANTE Indicadores de gestión búsquedas";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcIndi5"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcIndi5"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcInicTota"] = "TOTAL Procesos activos";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcInicTota"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcInicTota"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcFinaTota"] = "TOTAL  Procesos sin búsqueda de bienes";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcFinaTota"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcFinaTota"] = "";
	$fieldLabelsindicadores_de_b_squeda["Spanish"]["ProcIndiTota"] = "TOTAL  Indicadores de gestión búsquedas";
	$fieldToolTipsindicadores_de_b_squeda["Spanish"]["ProcIndiTota"] = "";
	$placeHoldersindicadores_de_b_squeda["Spanish"]["ProcIndiTota"] = "";
	if (count($fieldToolTipsindicadores_de_b_squeda["Spanish"]))
		$tdataindicadores_de_b_squeda[".isUseToolTips"] = true;
}


	$tdataindicadores_de_b_squeda[".NCSearch"] = true;


	$tdataindicadores_de_b_squeda[".scrollGridBody"] = true;

$tdataindicadores_de_b_squeda[".shortTableName"] = "indicadores_de_b_squeda";
$tdataindicadores_de_b_squeda[".nSecOptions"] = 0;

$tdataindicadores_de_b_squeda[".mainTableOwnerID"] = "";
$tdataindicadores_de_b_squeda[".entityType"] = 6;
$tdataindicadores_de_b_squeda[".connId"] = "GCC_at_S00001_CCAD01";


$tdataindicadores_de_b_squeda[".strOriginalTableName"] = "Indicadores de búsqueda";

	



$tdataindicadores_de_b_squeda[".showAddInPopup"] = false;

$tdataindicadores_de_b_squeda[".showEditInPopup"] = false;

$tdataindicadores_de_b_squeda[".showViewInPopup"] = false;

$tdataindicadores_de_b_squeda[".listAjax"] = false;
//	temporary
//$tdataindicadores_de_b_squeda[".listAjax"] = false;

	$tdataindicadores_de_b_squeda[".audit"] = false;

	$tdataindicadores_de_b_squeda[".locking"] = false;


$pages = $tdataindicadores_de_b_squeda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicadores_de_b_squeda[".edit"] = true;
	$tdataindicadores_de_b_squeda[".afterEditAction"] = 1;
	$tdataindicadores_de_b_squeda[".closePopupAfterEdit"] = 1;
	$tdataindicadores_de_b_squeda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicadores_de_b_squeda[".add"] = true;
$tdataindicadores_de_b_squeda[".afterAddAction"] = 1;
$tdataindicadores_de_b_squeda[".closePopupAfterAdd"] = 1;
$tdataindicadores_de_b_squeda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicadores_de_b_squeda[".list"] = true;
}



$tdataindicadores_de_b_squeda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicadores_de_b_squeda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicadores_de_b_squeda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicadores_de_b_squeda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicadores_de_b_squeda[".printFriendly"] = true;
}



$tdataindicadores_de_b_squeda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicadores_de_b_squeda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicadores_de_b_squeda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicadores_de_b_squeda[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																											

$tdataindicadores_de_b_squeda[".ajaxCodeSnippetAdded"] = false;

$tdataindicadores_de_b_squeda[".buttonsAdded"] = false;

$tdataindicadores_de_b_squeda[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicadores_de_b_squeda[".isUseTimeForSearch"] = false;


$tdataindicadores_de_b_squeda[".badgeColor"] = "1E90FF";


$tdataindicadores_de_b_squeda[".allSearchFields"] = array();
$tdataindicadores_de_b_squeda[".filterFields"] = array();
$tdataindicadores_de_b_squeda[".requiredSearchFields"] = array();

$tdataindicadores_de_b_squeda[".googleLikeFields"] = array();
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "Seccional";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcInic1";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcFina1";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcIndi1";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcInic4";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcFina4";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcIndi4";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcInic5";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcFina5";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcIndi5";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcInicTota";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcFinaTota";
$tdataindicadores_de_b_squeda[".googleLikeFields"][] = "ProcIndiTota";




$tdataindicadores_de_b_squeda[".printerPageOrientation"] = 0;
$tdataindicadores_de_b_squeda[".nPrinterPageScale"] = 100;

$tdataindicadores_de_b_squeda[".nPrinterSplitRecords"] = 40;

$tdataindicadores_de_b_squeda[".geocodingEnabled"] = false;




$tdataindicadores_de_b_squeda[".isDisplayLoading"] = true;






$tdataindicadores_de_b_squeda[".pageSize"] = 1;

$tdataindicadores_de_b_squeda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicadores_de_b_squeda[".strOrderBy"] = $tstrOrderBy;

$tdataindicadores_de_b_squeda[".orderindexes"] = array();


$tdataindicadores_de_b_squeda[".sqlHead"] = "";
$tdataindicadores_de_b_squeda[".sqlFrom"] = "";
$tdataindicadores_de_b_squeda[".sqlWhereExpr"] = "";
$tdataindicadores_de_b_squeda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataindicadores_de_b_squeda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicadores_de_b_squeda[".arrGroupsPerPage"] = $arrGPP;

$tdataindicadores_de_b_squeda[".highlightSearchResults"] = true;

$tableKeysindicadores_de_b_squeda = array();
$tdataindicadores_de_b_squeda[".Keys"] = $tableKeysindicadores_de_b_squeda;


$tdataindicadores_de_b_squeda[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","Seccional");
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


	$tdataindicadores_de_b_squeda["Seccional"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "Seccional";
//	ProcInic1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcInic1";
	$fdata["GoodName"] = "ProcInic1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcInic1");
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


	$tdataindicadores_de_b_squeda["ProcInic1"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcInic1";
//	ProcFina1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcFina1";
	$fdata["GoodName"] = "ProcFina1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcFina1");
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


	$tdataindicadores_de_b_squeda["ProcFina1"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcFina1";
//	ProcIndi1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProcIndi1";
	$fdata["GoodName"] = "ProcIndi1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcIndi1");
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


	$tdataindicadores_de_b_squeda["ProcIndi1"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcIndi1";
//	ProcInic4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProcInic4";
	$fdata["GoodName"] = "ProcInic4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcInic4");
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


	$tdataindicadores_de_b_squeda["ProcInic4"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcInic4";
//	ProcFina4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcFina4";
	$fdata["GoodName"] = "ProcFina4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcFina4");
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


	$tdataindicadores_de_b_squeda["ProcFina4"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcFina4";
//	ProcIndi4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcIndi4";
	$fdata["GoodName"] = "ProcIndi4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcIndi4");
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


	$tdataindicadores_de_b_squeda["ProcIndi4"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcIndi4";
//	ProcInic5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProcInic5";
	$fdata["GoodName"] = "ProcInic5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcInic5");
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


	$tdataindicadores_de_b_squeda["ProcInic5"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcInic5";
//	ProcFina5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ProcFina5";
	$fdata["GoodName"] = "ProcFina5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcFina5");
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


	$tdataindicadores_de_b_squeda["ProcFina5"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcFina5";
//	ProcIndi5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ProcIndi5";
	$fdata["GoodName"] = "ProcIndi5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcIndi5");
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


	$tdataindicadores_de_b_squeda["ProcIndi5"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcIndi5";
//	ProcInicTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProcInicTota";
	$fdata["GoodName"] = "ProcInicTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcInicTota");
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


	$tdataindicadores_de_b_squeda["ProcInicTota"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcInicTota";
//	ProcFinaTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProcFinaTota";
	$fdata["GoodName"] = "ProcFinaTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcFinaTota");
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


	$tdataindicadores_de_b_squeda["ProcFinaTota"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcFinaTota";
//	ProcIndiTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ProcIndiTota";
	$fdata["GoodName"] = "ProcIndiTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_b_squeda","ProcIndiTota");
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


	$tdataindicadores_de_b_squeda["ProcIndiTota"] = $fdata;
		$tdataindicadores_de_b_squeda[".searchableFields"][] = "ProcIndiTota";


$tables_data["Indicadores de búsqueda"]=&$tdataindicadores_de_b_squeda;
$field_labels["Indicadores_de_b_squeda"] = &$fieldLabelsindicadores_de_b_squeda;
$fieldToolTips["Indicadores_de_b_squeda"] = &$fieldToolTipsindicadores_de_b_squeda;
$placeHolders["Indicadores_de_b_squeda"] = &$placeHoldersindicadores_de_b_squeda;
$page_titles["Indicadores_de_b_squeda"] = &$pageTitlesindicadores_de_b_squeda;


changeTextControlsToDate( "Indicadores de búsqueda" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Indicadores de búsqueda"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Indicadores de búsqueda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/indicadores_de_b_squeda_ops.php" ) );



	
		;

													

$tdataindicadores_de_b_squeda[".sqlquery"] = $queryData_indicadores_de_b_squeda;



include_once(getabspath("include/indicadores_de_b_squeda_events.php"));
$tdataindicadores_de_b_squeda[".hasEvents"] = true;

?>