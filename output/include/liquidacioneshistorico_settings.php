<?php
$tdataliquidacioneshistorico = array();
$tdataliquidacioneshistorico[".searchableFields"] = array();
$tdataliquidacioneshistorico[".ShortName"] = "liquidacioneshistorico";
$tdataliquidacioneshistorico[".OwnerID"] = "";
$tdataliquidacioneshistorico[".OriginalTable"] = "dbo.LiquidacionesHistorico";


$tdataliquidacioneshistorico[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataliquidacioneshistorico[".originalPagesByType"] = $tdataliquidacioneshistorico[".pagesByType"];
$tdataliquidacioneshistorico[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataliquidacioneshistorico[".originalPages"] = $tdataliquidacioneshistorico[".pages"];
$tdataliquidacioneshistorico[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataliquidacioneshistorico[".originalDefaultPages"] = $tdataliquidacioneshistorico[".defaultPages"];

//	field labels
$fieldLabelsliquidacioneshistorico = array();
$fieldToolTipsliquidacioneshistorico = array();
$pageTitlesliquidacioneshistorico = array();
$placeHoldersliquidacioneshistorico = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsliquidacioneshistorico["Spanish"] = array();
	$fieldToolTipsliquidacioneshistorico["Spanish"] = array();
	$placeHoldersliquidacioneshistorico["Spanish"] = array();
	$pageTitlesliquidacioneshistorico["Spanish"] = array();
	$fieldLabelsliquidacioneshistorico["Spanish"]["LiquidacionHistoricoId"] = "Liquidacion Historico Id";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["LiquidacionHistoricoId"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["LiquidacionHistoricoId"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["FechaLiquidacion"] = "Fecha Liquidacion";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["FechaLiquidacion"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["FechaLiquidacion"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["ProcesoId"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["ProcesoId"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Cuota"] = "Cuota";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Cuota"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Cuota"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Fecha"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Fecha"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Capital"] = "Capital";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Capital"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Capital"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Intereses"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Intereses"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Total"] = "Total";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Total"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Total"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["Costas"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["Costas"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["InteresesPlazo"] = "Intereses Plazo";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["InteresesPlazo"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["InteresesPlazo"] = "";
	$fieldLabelsliquidacioneshistorico["Spanish"]["No_Liqui"] = "No. Liqui";
	$fieldToolTipsliquidacioneshistorico["Spanish"]["No_Liqui"] = "";
	$placeHoldersliquidacioneshistorico["Spanish"]["No_Liqui"] = "";
	if (count($fieldToolTipsliquidacioneshistorico["Spanish"]))
		$tdataliquidacioneshistorico[".isUseToolTips"] = true;
}


	$tdataliquidacioneshistorico[".NCSearch"] = true;



$tdataliquidacioneshistorico[".shortTableName"] = "liquidacioneshistorico";
$tdataliquidacioneshistorico[".nSecOptions"] = 0;

$tdataliquidacioneshistorico[".mainTableOwnerID"] = "";
$tdataliquidacioneshistorico[".entityType"] = 0;
$tdataliquidacioneshistorico[".connId"] = "GCC_at_S00001_CCAD01";


$tdataliquidacioneshistorico[".strOriginalTableName"] = "dbo.LiquidacionesHistorico";

	



$tdataliquidacioneshistorico[".showAddInPopup"] = false;

$tdataliquidacioneshistorico[".showEditInPopup"] = false;

$tdataliquidacioneshistorico[".showViewInPopup"] = false;

$tdataliquidacioneshistorico[".listAjax"] = false;
//	temporary
//$tdataliquidacioneshistorico[".listAjax"] = false;

	$tdataliquidacioneshistorico[".audit"] = false;

	$tdataliquidacioneshistorico[".locking"] = false;


$pages = $tdataliquidacioneshistorico[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataliquidacioneshistorico[".edit"] = true;
	$tdataliquidacioneshistorico[".afterEditAction"] = 1;
	$tdataliquidacioneshistorico[".closePopupAfterEdit"] = 1;
	$tdataliquidacioneshistorico[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataliquidacioneshistorico[".add"] = true;
$tdataliquidacioneshistorico[".afterAddAction"] = 1;
$tdataliquidacioneshistorico[".closePopupAfterAdd"] = 1;
$tdataliquidacioneshistorico[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataliquidacioneshistorico[".list"] = true;
}



$tdataliquidacioneshistorico[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataliquidacioneshistorico[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataliquidacioneshistorico[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataliquidacioneshistorico[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataliquidacioneshistorico[".printFriendly"] = true;
}



$tdataliquidacioneshistorico[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataliquidacioneshistorico[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataliquidacioneshistorico[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataliquidacioneshistorico[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						

$tdataliquidacioneshistorico[".ajaxCodeSnippetAdded"] = false;

$tdataliquidacioneshistorico[".buttonsAdded"] = false;

$tdataliquidacioneshistorico[".addPageEvents"] = false;

// use timepicker for search panel
$tdataliquidacioneshistorico[".isUseTimeForSearch"] = false;


$tdataliquidacioneshistorico[".badgeColor"] = "6b8e23";


$tdataliquidacioneshistorico[".allSearchFields"] = array();
$tdataliquidacioneshistorico[".filterFields"] = array();
$tdataliquidacioneshistorico[".requiredSearchFields"] = array();

$tdataliquidacioneshistorico[".googleLikeFields"] = array();
$tdataliquidacioneshistorico[".googleLikeFields"][] = "LiquidacionHistoricoId";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "FechaLiquidacion";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "ProcesoId";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Cuota";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Fecha";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Capital";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Intereses";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Total";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "Costas";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "InteresesPlazo";
$tdataliquidacioneshistorico[".googleLikeFields"][] = "No_Liqui";



$tdataliquidacioneshistorico[".tableType"] = "list";

$tdataliquidacioneshistorico[".printerPageOrientation"] = 0;
$tdataliquidacioneshistorico[".nPrinterPageScale"] = 100;

$tdataliquidacioneshistorico[".nPrinterSplitRecords"] = 40;

$tdataliquidacioneshistorico[".geocodingEnabled"] = false;





$tdataliquidacioneshistorico[".isResizeColumns"] = true;





$tdataliquidacioneshistorico[".pageSize"] = 20;

$tdataliquidacioneshistorico[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LiquidacionHistoricoId DESC";
$tdataliquidacioneshistorico[".strOrderBy"] = $tstrOrderBy;

$tdataliquidacioneshistorico[".orderindexes"] = array();


$tdataliquidacioneshistorico[".sqlHead"] = "SELECT *";
$tdataliquidacioneshistorico[".sqlFrom"] = "FROM dbo.LiquidacionesHistorico";
$tdataliquidacioneshistorico[".sqlWhereExpr"] = "";
$tdataliquidacioneshistorico[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataliquidacioneshistorico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataliquidacioneshistorico[".arrGroupsPerPage"] = $arrGPP;

$tdataliquidacioneshistorico[".highlightSearchResults"] = true;

$tableKeysliquidacioneshistorico = array();
$tableKeysliquidacioneshistorico[] = "LiquidacionHistoricoId";
$tdataliquidacioneshistorico[".Keys"] = $tableKeysliquidacioneshistorico;


$tdataliquidacioneshistorico[".hideMobileList"] = array();




//	LiquidacionHistoricoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LiquidacionHistoricoId";
	$fdata["GoodName"] = "LiquidacionHistoricoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","LiquidacionHistoricoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "LiquidacionHistoricoId";

		$fdata["sourceSingle"] = "LiquidacionHistoricoId";

		$fdata["FullName"] = "LiquidacionHistoricoId";

	
	
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


	$tdataliquidacioneshistorico["LiquidacionHistoricoId"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "LiquidacionHistoricoId";
//	FechaLiquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FechaLiquidacion";
	$fdata["GoodName"] = "FechaLiquidacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","FechaLiquidacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FechaLiquidacion";

		$fdata["sourceSingle"] = "FechaLiquidacion";

		$fdata["FullName"] = "FechaLiquidacion";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdataliquidacioneshistorico["FechaLiquidacion"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "FechaLiquidacion";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

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


	$tdataliquidacioneshistorico["ProcesoId"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "ProcesoId";
//	Cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cuota";
	$fdata["GoodName"] = "Cuota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Cuota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuota";

		$fdata["sourceSingle"] = "Cuota";

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


	$tdataliquidacioneshistorico["Cuota"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Cuota";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdataliquidacioneshistorico["Fecha"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Fecha";
//	Capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Capital";
	$fdata["GoodName"] = "Capital";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Capital");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Capital";

		$fdata["sourceSingle"] = "Capital";

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


	$tdataliquidacioneshistorico["Capital"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Capital";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

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


	$tdataliquidacioneshistorico["Intereses"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Intereses";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Total");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Total";

		$fdata["sourceSingle"] = "Total";

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


	$tdataliquidacioneshistorico["Total"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Total";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

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


	$tdataliquidacioneshistorico["Costas"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "Costas";
//	InteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InteresesPlazo";
	$fdata["GoodName"] = "InteresesPlazo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","InteresesPlazo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesPlazo";

		$fdata["sourceSingle"] = "InteresesPlazo";

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


	$tdataliquidacioneshistorico["InteresesPlazo"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "InteresesPlazo";
//	No_Liqui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "No_Liqui";
	$fdata["GoodName"] = "No_Liqui";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_LiquidacionesHistorico","No_Liqui");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "No_Liqui";

		$fdata["sourceSingle"] = "No_Liqui";

		$fdata["FullName"] = "No_Liqui";

	
	
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


	$tdataliquidacioneshistorico["No_Liqui"] = $fdata;
		$tdataliquidacioneshistorico[".searchableFields"][] = "No_Liqui";


$tables_data["dbo.LiquidacionesHistorico"]=&$tdataliquidacioneshistorico;
$field_labels["dbo_LiquidacionesHistorico"] = &$fieldLabelsliquidacioneshistorico;
$fieldToolTips["dbo_LiquidacionesHistorico"] = &$fieldToolTipsliquidacioneshistorico;
$placeHolders["dbo_LiquidacionesHistorico"] = &$placeHoldersliquidacioneshistorico;
$page_titles["dbo_LiquidacionesHistorico"] = &$pageTitlesliquidacioneshistorico;


changeTextControlsToDate( "dbo.LiquidacionesHistorico" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.LiquidacionesHistorico"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.LiquidacionesHistorico"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.LiquidacionesHistorico"][0] = $masterParams;
				$masterTablesData["dbo.LiquidacionesHistorico"][0]["masterKeys"] = array();
	$masterTablesData["dbo.LiquidacionesHistorico"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.LiquidacionesHistorico"][0]["detailKeys"] = array();
	$masterTablesData["dbo.LiquidacionesHistorico"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_liquidacioneshistorico()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM dbo.LiquidacionesHistorico";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY LiquidacionHistoricoId DESC";
	
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_sql"] = "*";
$proto6["m_srcTableName"] = "dbo.LiquidacionesHistorico";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.LiquidacionesHistorico";
$proto9["m_srcTableName"] = "dbo.LiquidacionesHistorico";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "LiquidacionHistoricoId";
$proto9["m_columns"][] = "FechaLiquidacion";
$proto9["m_columns"][] = "ProcesoId";
$proto9["m_columns"][] = "Cuota";
$proto9["m_columns"][] = "Fecha";
$proto9["m_columns"][] = "Capital";
$proto9["m_columns"][] = "Intereses";
$proto9["m_columns"][] = "Total";
$proto9["m_columns"][] = "Costas";
$proto9["m_columns"][] = "InteresesPlazo";
$proto9["m_columns"][] = "No_Liqui";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.LiquidacionesHistorico";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.LiquidacionesHistorico";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto12=array();
						$obj = new SQLField(array(
	"m_strName" => "LiquidacionHistoricoId",
	"m_strTable" => "dbo.LiquidacionesHistorico",
	"m_srcTableName" => "dbo.LiquidacionesHistorico"
));

$proto12["m_column"]=$obj;
$proto12["m_bAsc"] = 0;
$proto12["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto12);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.LiquidacionesHistorico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_liquidacioneshistorico = createSqlQuery_liquidacioneshistorico();


	
		;

											

$tdataliquidacioneshistorico[".sqlquery"] = $queryData_liquidacioneshistorico;



$tdataliquidacioneshistorico[".hasEvents"] = false;

?>