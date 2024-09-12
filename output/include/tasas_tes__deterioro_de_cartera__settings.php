<?php
$tdatatasas_tes__deterioro_de_cartera_ = array();
$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"] = array();
$tdatatasas_tes__deterioro_de_cartera_[".ShortName"] = "tasas_tes__deterioro_de_cartera_";
$tdatatasas_tes__deterioro_de_cartera_[".OwnerID"] = "";
$tdatatasas_tes__deterioro_de_cartera_[".OriginalTable"] = "dbo.Tasas";


$tdatatasas_tes__deterioro_de_cartera_[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasas_tes__deterioro_de_cartera_[".originalPagesByType"] = $tdatatasas_tes__deterioro_de_cartera_[".pagesByType"];
$tdatatasas_tes__deterioro_de_cartera_[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasas_tes__deterioro_de_cartera_[".originalPages"] = $tdatatasas_tes__deterioro_de_cartera_[".pages"];
$tdatatasas_tes__deterioro_de_cartera_[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasas_tes__deterioro_de_cartera_[".originalDefaultPages"] = $tdatatasas_tes__deterioro_de_cartera_[".defaultPages"];

//	field labels
$fieldLabelstasas_tes__deterioro_de_cartera_ = array();
$fieldToolTipstasas_tes__deterioro_de_cartera_ = array();
$pageTitlestasas_tes__deterioro_de_cartera_ = array();
$placeHolderstasas_tes__deterioro_de_cartera_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"] = array();
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"] = array();
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"] = array();
	$pageTitlestasas_tes__deterioro_de_cartera_["Spanish"] = array();
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"]["TasaId"] = "Tasa Id";
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]["TasaId"] = "";
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"]["TasaId"] = "";
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]["Hasta"] = "";
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"]["Hasta"] = "";
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]["Tasa"] = "";
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"]["Tasa"] = "";
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"]["Fecha_de_inicio"] = "Fecha de inicio";
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]["Fecha_de_inicio"] = "";
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"]["Fecha_de_inicio"] = "";
	$fieldLabelstasas_tes__deterioro_de_cartera_["Spanish"]["Tipo_de_Tasas"] = "Tipo de Tasas";
	$fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]["Tipo_de_Tasas"] = "";
	$placeHolderstasas_tes__deterioro_de_cartera_["Spanish"]["Tipo_de_Tasas"] = "";
	if (count($fieldToolTipstasas_tes__deterioro_de_cartera_["Spanish"]))
		$tdatatasas_tes__deterioro_de_cartera_[".isUseToolTips"] = true;
}


	$tdatatasas_tes__deterioro_de_cartera_[".NCSearch"] = true;



$tdatatasas_tes__deterioro_de_cartera_[".shortTableName"] = "tasas_tes__deterioro_de_cartera_";
$tdatatasas_tes__deterioro_de_cartera_[".nSecOptions"] = 0;

$tdatatasas_tes__deterioro_de_cartera_[".mainTableOwnerID"] = "";
$tdatatasas_tes__deterioro_de_cartera_[".entityType"] = 1;
$tdatatasas_tes__deterioro_de_cartera_[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatasas_tes__deterioro_de_cartera_[".strOriginalTableName"] = "dbo.Tasas";

	



$tdatatasas_tes__deterioro_de_cartera_[".showAddInPopup"] = false;

$tdatatasas_tes__deterioro_de_cartera_[".showEditInPopup"] = false;

$tdatatasas_tes__deterioro_de_cartera_[".showViewInPopup"] = false;

$tdatatasas_tes__deterioro_de_cartera_[".listAjax"] = false;
//	temporary
//$tdatatasas_tes__deterioro_de_cartera_[".listAjax"] = false;

	$tdatatasas_tes__deterioro_de_cartera_[".audit"] = false;

	$tdatatasas_tes__deterioro_de_cartera_[".locking"] = false;


$pages = $tdatatasas_tes__deterioro_de_cartera_[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasas_tes__deterioro_de_cartera_[".edit"] = true;
	$tdatatasas_tes__deterioro_de_cartera_[".afterEditAction"] = 1;
	$tdatatasas_tes__deterioro_de_cartera_[".closePopupAfterEdit"] = 1;
	$tdatatasas_tes__deterioro_de_cartera_[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasas_tes__deterioro_de_cartera_[".add"] = true;
$tdatatasas_tes__deterioro_de_cartera_[".afterAddAction"] = 1;
$tdatatasas_tes__deterioro_de_cartera_[".closePopupAfterAdd"] = 1;
$tdatatasas_tes__deterioro_de_cartera_[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasas_tes__deterioro_de_cartera_[".list"] = true;
}



$tdatatasas_tes__deterioro_de_cartera_[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasas_tes__deterioro_de_cartera_[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasas_tes__deterioro_de_cartera_[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasas_tes__deterioro_de_cartera_[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasas_tes__deterioro_de_cartera_[".printFriendly"] = true;
}



$tdatatasas_tes__deterioro_de_cartera_[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasas_tes__deterioro_de_cartera_[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasas_tes__deterioro_de_cartera_[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasas_tes__deterioro_de_cartera_[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdatatasas_tes__deterioro_de_cartera_[".ajaxCodeSnippetAdded"] = false;

$tdatatasas_tes__deterioro_de_cartera_[".buttonsAdded"] = false;

$tdatatasas_tes__deterioro_de_cartera_[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasas_tes__deterioro_de_cartera_[".isUseTimeForSearch"] = false;


$tdatatasas_tes__deterioro_de_cartera_[".badgeColor"] = "DAA520";


$tdatatasas_tes__deterioro_de_cartera_[".allSearchFields"] = array();
$tdatatasas_tes__deterioro_de_cartera_[".filterFields"] = array();
$tdatatasas_tes__deterioro_de_cartera_[".requiredSearchFields"] = array();

$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"] = array();
$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"][] = "TasaId";
$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"][] = "Fecha de inicio";
$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"][] = "Hasta";
$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"][] = "Tasa";
$tdatatasas_tes__deterioro_de_cartera_[".googleLikeFields"][] = "Tipo de Tasas";



$tdatatasas_tes__deterioro_de_cartera_[".tableType"] = "list";

$tdatatasas_tes__deterioro_de_cartera_[".printerPageOrientation"] = 0;
$tdatatasas_tes__deterioro_de_cartera_[".nPrinterPageScale"] = 100;

$tdatatasas_tes__deterioro_de_cartera_[".nPrinterSplitRecords"] = 40;

$tdatatasas_tes__deterioro_de_cartera_[".geocodingEnabled"] = false;





$tdatatasas_tes__deterioro_de_cartera_[".isResizeColumns"] = true;





$tdatatasas_tes__deterioro_de_cartera_[".pageSize"] = 20;

$tdatatasas_tes__deterioro_de_cartera_[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Desde DESC";
$tdatatasas_tes__deterioro_de_cartera_[".strOrderBy"] = $tstrOrderBy;

$tdatatasas_tes__deterioro_de_cartera_[".orderindexes"] = array();


$tdatatasas_tes__deterioro_de_cartera_[".sqlHead"] = "SELECT TasaId,  FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy') AS [Fecha de inicio],  Hasta,  Tasa,  IIF(Tasas.Tipo=1, 'Tasas Tributarias', IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS [Tipo de Tasas]";
$tdatatasas_tes__deterioro_de_cartera_[".sqlFrom"] = "FROM dbo.Tasas";
$tdatatasas_tes__deterioro_de_cartera_[".sqlWhereExpr"] = "(Tipo =2)";
$tdatatasas_tes__deterioro_de_cartera_[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatasas_tes__deterioro_de_cartera_[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasas_tes__deterioro_de_cartera_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasas_tes__deterioro_de_cartera_[".arrGroupsPerPage"] = $arrGPP;

$tdatatasas_tes__deterioro_de_cartera_[".highlightSearchResults"] = true;

$tableKeystasas_tes__deterioro_de_cartera_ = array();
$tableKeystasas_tes__deterioro_de_cartera_[] = "TasaId";
$tdatatasas_tes__deterioro_de_cartera_[".Keys"] = $tableKeystasas_tes__deterioro_de_cartera_;


$tdatatasas_tes__deterioro_de_cartera_[".hideMobileList"] = array();




//	TasaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TasaId";
	$fdata["GoodName"] = "TasaId";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_TES__Deterioro_de_Cartera_","TasaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TasaId";

		$fdata["sourceSingle"] = "TasaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TasaId";

	
	
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


	$tdatatasas_tes__deterioro_de_cartera_["TasaId"] = $fdata;
		$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"][] = "TasaId";
//	Fecha de inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de inicio";
	$fdata["GoodName"] = "Fecha_de_inicio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tasas_TES__Deterioro_de_Cartera_","Fecha_de_inicio");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy')";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatasas_tes__deterioro_de_cartera_["Fecha de inicio"] = $fdata;
		$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"][] = "Fecha de inicio";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_TES__Deterioro_de_Cartera_","Hasta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Hasta";

		$fdata["sourceSingle"] = "Hasta";

		$fdata["isSQLExpression"] = true;
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


	$tdatatasas_tes__deterioro_de_cartera_["Hasta"] = $fdata;
		$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"][] = "Hasta";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_TES__Deterioro_de_Cartera_","Tasa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Tasa";

		$fdata["sourceSingle"] = "Tasa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tasa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 14;

	
	
	
	
	
	
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


	$tdatatasas_tes__deterioro_de_cartera_["Tasa"] = $fdata;
		$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"][] = "Tasa";
//	Tipo de Tasas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo de Tasas";
	$fdata["GoodName"] = "Tipo_de_Tasas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tasas_TES__Deterioro_de_Cartera_","Tipo_de_Tasas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo de Tasas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IIF(Tasas.Tipo=1, 'Tasas Tributarias', IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL)))";

	
	
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


	$tdatatasas_tes__deterioro_de_cartera_["Tipo de Tasas"] = $fdata;
		$tdatatasas_tes__deterioro_de_cartera_[".searchableFields"][] = "Tipo de Tasas";


$tables_data["Tasas TES (Deterioro de Cartera)"]=&$tdatatasas_tes__deterioro_de_cartera_;
$field_labels["Tasas_TES__Deterioro_de_Cartera_"] = &$fieldLabelstasas_tes__deterioro_de_cartera_;
$fieldToolTips["Tasas_TES__Deterioro_de_Cartera_"] = &$fieldToolTipstasas_tes__deterioro_de_cartera_;
$placeHolders["Tasas_TES__Deterioro_de_Cartera_"] = &$placeHolderstasas_tes__deterioro_de_cartera_;
$page_titles["Tasas_TES__Deterioro_de_Cartera_"] = &$pageTitlestasas_tes__deterioro_de_cartera_;


changeTextControlsToDate( "Tasas TES (Deterioro de Cartera)" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tasas TES (Deterioro de Cartera)"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tasas TES (Deterioro de Cartera)"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasas_tes__deterioro_de_cartera_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TasaId,  FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy') AS [Fecha de inicio],  Hasta,  Tasa,  IIF(Tasas.Tipo=1, 'Tasas Tributarias', IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS [Tipo de Tasas]";
$proto0["m_strFrom"] = "FROM dbo.Tasas";
$proto0["m_strWhere"] = "(Tipo =2)";
$proto0["m_strOrderBy"] = "ORDER BY Desde DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Tipo =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas TES (Deterioro de Cartera)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2";
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
	"m_strName" => "TasaId",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas TES (Deterioro de Cartera)"
));

$proto6["m_sql"] = "TasaId";
$proto6["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CONVERT(DATE, Desde)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'dd/MM/yyyy'"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy')";
$proto8["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Fecha de inicio";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas TES (Deterioro de Cartera)"
));

$proto12["m_sql"] = "Hasta";
$proto12["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas TES (Deterioro de Cartera)"
));

$proto14["m_sql"] = "Tasa";
$proto14["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Tasas.Tipo=1"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Tasas Tributarias'"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "IIF";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "IIF(Tasas.Tipo=1, 'Tasas Tributarias', IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL)))";
$proto16["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Tipo de Tasas";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "dbo.Tasas";
$proto22["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "TasaId";
$proto22["m_columns"][] = "Desde";
$proto22["m_columns"][] = "Hasta";
$proto22["m_columns"][] = "Tasa";
$proto22["m_columns"][] = "Tipo";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "dbo.Tasas";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Tasas TES (Deterioro de Cartera)";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas TES (Deterioro de Cartera)"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Tasas TES (Deterioro de Cartera)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasas_tes__deterioro_de_cartera_ = createSqlQuery_tasas_tes__deterioro_de_cartera_();


	
		;

					

$tdatatasas_tes__deterioro_de_cartera_[".sqlquery"] = $queryData_tasas_tes__deterioro_de_cartera_;



include_once(getabspath("include/tasas_tes__deterioro_de_cartera__events.php"));
$tdatatasas_tes__deterioro_de_cartera_[".hasEvents"] = true;

?>