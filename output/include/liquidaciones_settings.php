<?php
$tdataliquidaciones = array();
$tdataliquidaciones[".searchableFields"] = array();
$tdataliquidaciones[".ShortName"] = "liquidaciones";
$tdataliquidaciones[".OwnerID"] = "";
$tdataliquidaciones[".OriginalTable"] = "dbo.Liquidaciones";


$tdataliquidaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataliquidaciones[".originalPagesByType"] = $tdataliquidaciones[".pagesByType"];
$tdataliquidaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataliquidaciones[".originalPages"] = $tdataliquidaciones[".pages"];
$tdataliquidaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataliquidaciones[".originalDefaultPages"] = $tdataliquidaciones[".defaultPages"];

//	field labels
$fieldLabelsliquidaciones = array();
$fieldToolTipsliquidaciones = array();
$pageTitlesliquidaciones = array();
$placeHoldersliquidaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsliquidaciones["Spanish"] = array();
	$fieldToolTipsliquidaciones["Spanish"] = array();
	$placeHoldersliquidaciones["Spanish"] = array();
	$pageTitlesliquidaciones["Spanish"] = array();
	$fieldLabelsliquidaciones["Spanish"]["LiquidacionId"] = "Liquidacion Id";
	$fieldToolTipsliquidaciones["Spanish"]["LiquidacionId"] = "";
	$placeHoldersliquidaciones["Spanish"]["LiquidacionId"] = "";
	$fieldLabelsliquidaciones["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsliquidaciones["Spanish"]["ProcesoId"] = "";
	$placeHoldersliquidaciones["Spanish"]["ProcesoId"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Cuota"] = "Cuota";
	$fieldToolTipsliquidaciones["Spanish"]["Cuota"] = "";
	$placeHoldersliquidaciones["Spanish"]["Cuota"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsliquidaciones["Spanish"]["Fecha"] = "";
	$placeHoldersliquidaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Capital"] = "Capital";
	$fieldToolTipsliquidaciones["Spanish"]["Capital"] = "";
	$placeHoldersliquidaciones["Spanish"]["Capital"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsliquidaciones["Spanish"]["Intereses"] = "";
	$placeHoldersliquidaciones["Spanish"]["Intereses"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Total"] = "Valor Cuota";
	$fieldToolTipsliquidaciones["Spanish"]["Total"] = "";
	$placeHoldersliquidaciones["Spanish"]["Total"] = "";
	$fieldLabelsliquidaciones["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsliquidaciones["Spanish"]["Costas"] = "";
	$placeHoldersliquidaciones["Spanish"]["Costas"] = "";
	$fieldLabelsliquidaciones["Spanish"]["InteresesPlazo"] = "Intereses de Plazo";
	$fieldToolTipsliquidaciones["Spanish"]["InteresesPlazo"] = "";
	$placeHoldersliquidaciones["Spanish"]["InteresesPlazo"] = "";
	if (count($fieldToolTipsliquidaciones["Spanish"]))
		$tdataliquidaciones[".isUseToolTips"] = true;
}


	$tdataliquidaciones[".NCSearch"] = true;



$tdataliquidaciones[".shortTableName"] = "liquidaciones";
$tdataliquidaciones[".nSecOptions"] = 0;

$tdataliquidaciones[".mainTableOwnerID"] = "";
$tdataliquidaciones[".entityType"] = 0;
$tdataliquidaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdataliquidaciones[".strOriginalTableName"] = "dbo.Liquidaciones";

	



$tdataliquidaciones[".showAddInPopup"] = false;

$tdataliquidaciones[".showEditInPopup"] = false;

$tdataliquidaciones[".showViewInPopup"] = false;

$tdataliquidaciones[".listAjax"] = false;
//	temporary
//$tdataliquidaciones[".listAjax"] = false;

	$tdataliquidaciones[".audit"] = false;

	$tdataliquidaciones[".locking"] = false;


$pages = $tdataliquidaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataliquidaciones[".edit"] = true;
	$tdataliquidaciones[".afterEditAction"] = 1;
	$tdataliquidaciones[".closePopupAfterEdit"] = 1;
	$tdataliquidaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataliquidaciones[".add"] = true;
$tdataliquidaciones[".afterAddAction"] = 1;
$tdataliquidaciones[".closePopupAfterAdd"] = 1;
$tdataliquidaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataliquidaciones[".list"] = true;
}



$tdataliquidaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataliquidaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataliquidaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataliquidaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataliquidaciones[".printFriendly"] = true;
}



$tdataliquidaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataliquidaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataliquidaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataliquidaciones[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdataliquidaciones[".ajaxCodeSnippetAdded"] = false;

$tdataliquidaciones[".buttonsAdded"] = false;

$tdataliquidaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataliquidaciones[".isUseTimeForSearch"] = false;


$tdataliquidaciones[".badgeColor"] = "5f9ea0";


$tdataliquidaciones[".allSearchFields"] = array();
$tdataliquidaciones[".filterFields"] = array();
$tdataliquidaciones[".requiredSearchFields"] = array();

$tdataliquidaciones[".googleLikeFields"] = array();
$tdataliquidaciones[".googleLikeFields"][] = "LiquidacionId";
$tdataliquidaciones[".googleLikeFields"][] = "ProcesoId";
$tdataliquidaciones[".googleLikeFields"][] = "Cuota";
$tdataliquidaciones[".googleLikeFields"][] = "Fecha";
$tdataliquidaciones[".googleLikeFields"][] = "Capital";
$tdataliquidaciones[".googleLikeFields"][] = "Intereses";
$tdataliquidaciones[".googleLikeFields"][] = "Total";
$tdataliquidaciones[".googleLikeFields"][] = "Costas";
$tdataliquidaciones[".googleLikeFields"][] = "InteresesPlazo";



$tdataliquidaciones[".tableType"] = "list";

$tdataliquidaciones[".printerPageOrientation"] = 0;
$tdataliquidaciones[".nPrinterPageScale"] = 100;

$tdataliquidaciones[".nPrinterSplitRecords"] = 40;

$tdataliquidaciones[".geocodingEnabled"] = false;





$tdataliquidaciones[".isResizeColumns"] = true;





$tdataliquidaciones[".pageSize"] = 20;

$tdataliquidaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataliquidaciones[".strOrderBy"] = $tstrOrderBy;

$tdataliquidaciones[".orderindexes"] = array();


$tdataliquidaciones[".sqlHead"] = "SELECT LiquidacionId,  	ProcesoId,  	Cuota,  	Fecha,  	Capital,  	Intereses,  	Total,  	Costas,  	InteresesPlazo";
$tdataliquidaciones[".sqlFrom"] = "FROM dbo.Liquidaciones";
$tdataliquidaciones[".sqlWhereExpr"] = "";
$tdataliquidaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataliquidaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataliquidaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataliquidaciones[".highlightSearchResults"] = true;

$tableKeysliquidaciones = array();
$tableKeysliquidaciones[] = "LiquidacionId";
$tdataliquidaciones[".Keys"] = $tableKeysliquidaciones;


$tdataliquidaciones[".hideMobileList"] = array();




//	LiquidacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LiquidacionId";
	$fdata["GoodName"] = "LiquidacionId";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","LiquidacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "LiquidacionId";

		$fdata["sourceSingle"] = "LiquidacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LiquidacionId";

	
	
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


	$tdataliquidaciones["LiquidacionId"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "LiquidacionId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Procesos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ProcesoId";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataliquidaciones["ProcesoId"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "ProcesoId";
//	Cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cuota";
	$fdata["GoodName"] = "Cuota";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Cuota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuota";

		$fdata["sourceSingle"] = "Cuota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cuota";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["Cuota"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Cuota";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataliquidaciones["Fecha"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Fecha";
//	Capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Capital";
	$fdata["GoodName"] = "Capital";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Capital");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Capital";

		$fdata["sourceSingle"] = "Capital";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Capital";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["Capital"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Capital";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["Intereses"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Intereses";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Total");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Total";

		$fdata["sourceSingle"] = "Total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["Total"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Total";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["Costas"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "Costas";
//	InteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "InteresesPlazo";
	$fdata["GoodName"] = "InteresesPlazo";
	$fdata["ownerTable"] = "dbo.Liquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Liquidaciones","InteresesPlazo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesPlazo";

		$fdata["sourceSingle"] = "InteresesPlazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesPlazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataliquidaciones["InteresesPlazo"] = $fdata;
		$tdataliquidaciones[".searchableFields"][] = "InteresesPlazo";


$tables_data["dbo.Liquidaciones"]=&$tdataliquidaciones;
$field_labels["dbo_Liquidaciones"] = &$fieldLabelsliquidaciones;
$fieldToolTips["dbo_Liquidaciones"] = &$fieldToolTipsliquidaciones;
$placeHolders["dbo_Liquidaciones"] = &$placeHoldersliquidaciones;
$page_titles["dbo_Liquidaciones"] = &$pageTitlesliquidaciones;


changeTextControlsToDate( "dbo.Liquidaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Liquidaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Liquidaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Liquidaciones"][0] = $masterParams;
				$masterTablesData["dbo.Liquidaciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Liquidaciones"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Liquidaciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Liquidaciones"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_liquidaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LiquidacionId,  	ProcesoId,  	Cuota,  	Fecha,  	Capital,  	Intereses,  	Total,  	Costas,  	InteresesPlazo";
$proto0["m_strFrom"] = "FROM dbo.Liquidaciones";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "LiquidacionId",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto6["m_sql"] = "LiquidacionId";
$proto6["m_srcTableName"] = "dbo.Liquidaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Liquidaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuota",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto10["m_sql"] = "Cuota";
$proto10["m_srcTableName"] = "dbo.Liquidaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Liquidaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Capital",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto14["m_sql"] = "Capital";
$proto14["m_srcTableName"] = "dbo.Liquidaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto16["m_sql"] = "Intereses";
$proto16["m_srcTableName"] = "dbo.Liquidaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Total",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto18["m_sql"] = "Total";
$proto18["m_srcTableName"] = "dbo.Liquidaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto20["m_sql"] = "Costas";
$proto20["m_srcTableName"] = "dbo.Liquidaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesPlazo",
	"m_strTable" => "dbo.Liquidaciones",
	"m_srcTableName" => "dbo.Liquidaciones"
));

$proto22["m_sql"] = "InteresesPlazo";
$proto22["m_srcTableName"] = "dbo.Liquidaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Liquidaciones";
$proto25["m_srcTableName"] = "dbo.Liquidaciones";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "LiquidacionId";
$proto25["m_columns"][] = "ProcesoId";
$proto25["m_columns"][] = "Cuota";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Capital";
$proto25["m_columns"][] = "Intereses";
$proto25["m_columns"][] = "Total";
$proto25["m_columns"][] = "Costas";
$proto25["m_columns"][] = "InteresesPlazo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.Liquidaciones";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Liquidaciones";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Liquidaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_liquidaciones = createSqlQuery_liquidaciones();


	
		;

									

$tdataliquidaciones[".sqlquery"] = $queryData_liquidaciones;



$tdataliquidaciones[".hasEvents"] = false;

?>