<?php
$tdatatasas_de_procesos = array();
$tdatatasas_de_procesos[".searchableFields"] = array();
$tdatatasas_de_procesos[".ShortName"] = "tasas_de_procesos";
$tdatatasas_de_procesos[".OwnerID"] = "";
$tdatatasas_de_procesos[".OriginalTable"] = "dbo.Tasas";


$tdatatasas_de_procesos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatasas_de_procesos[".originalPagesByType"] = $tdatatasas_de_procesos[".pagesByType"];
$tdatatasas_de_procesos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatasas_de_procesos[".originalPages"] = $tdatatasas_de_procesos[".pages"];
$tdatatasas_de_procesos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatasas_de_procesos[".originalDefaultPages"] = $tdatatasas_de_procesos[".defaultPages"];

//	field labels
$fieldLabelstasas_de_procesos = array();
$fieldToolTipstasas_de_procesos = array();
$pageTitlestasas_de_procesos = array();
$placeHolderstasas_de_procesos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstasas_de_procesos["Spanish"] = array();
	$fieldToolTipstasas_de_procesos["Spanish"] = array();
	$placeHolderstasas_de_procesos["Spanish"] = array();
	$pageTitlestasas_de_procesos["Spanish"] = array();
	$fieldLabelstasas_de_procesos["Spanish"]["TasaId"] = "Tasa Id";
	$fieldToolTipstasas_de_procesos["Spanish"]["TasaId"] = "";
	$placeHolderstasas_de_procesos["Spanish"]["TasaId"] = "";
	$fieldLabelstasas_de_procesos["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipstasas_de_procesos["Spanish"]["Hasta"] = "";
	$placeHolderstasas_de_procesos["Spanish"]["Hasta"] = "";
	$fieldLabelstasas_de_procesos["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipstasas_de_procesos["Spanish"]["Tasa"] = "";
	$placeHolderstasas_de_procesos["Spanish"]["Tasa"] = "";
	$fieldLabelstasas_de_procesos["Spanish"]["Fecha_de_inicio"] = "Fecha de inicio";
	$fieldToolTipstasas_de_procesos["Spanish"]["Fecha_de_inicio"] = "";
	$placeHolderstasas_de_procesos["Spanish"]["Fecha_de_inicio"] = "";
	$fieldLabelstasas_de_procesos["Spanish"]["Tipo_de_Tasas"] = "Tipo de Tasas";
	$fieldToolTipstasas_de_procesos["Spanish"]["Tipo_de_Tasas"] = "";
	$placeHolderstasas_de_procesos["Spanish"]["Tipo_de_Tasas"] = "";
	if (count($fieldToolTipstasas_de_procesos["Spanish"]))
		$tdatatasas_de_procesos[".isUseToolTips"] = true;
}


	$tdatatasas_de_procesos[".NCSearch"] = true;



$tdatatasas_de_procesos[".shortTableName"] = "tasas_de_procesos";
$tdatatasas_de_procesos[".nSecOptions"] = 0;

$tdatatasas_de_procesos[".mainTableOwnerID"] = "";
$tdatatasas_de_procesos[".entityType"] = 1;
$tdatatasas_de_procesos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatasas_de_procesos[".strOriginalTableName"] = "dbo.Tasas";

	



$tdatatasas_de_procesos[".showAddInPopup"] = false;

$tdatatasas_de_procesos[".showEditInPopup"] = false;

$tdatatasas_de_procesos[".showViewInPopup"] = false;

$tdatatasas_de_procesos[".listAjax"] = false;
//	temporary
//$tdatatasas_de_procesos[".listAjax"] = false;

	$tdatatasas_de_procesos[".audit"] = true;

	$tdatatasas_de_procesos[".locking"] = false;


$pages = $tdatatasas_de_procesos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasas_de_procesos[".edit"] = true;
	$tdatatasas_de_procesos[".afterEditAction"] = 1;
	$tdatatasas_de_procesos[".closePopupAfterEdit"] = 1;
	$tdatatasas_de_procesos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasas_de_procesos[".add"] = true;
$tdatatasas_de_procesos[".afterAddAction"] = 1;
$tdatatasas_de_procesos[".closePopupAfterAdd"] = 1;
$tdatatasas_de_procesos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasas_de_procesos[".list"] = true;
}



$tdatatasas_de_procesos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasas_de_procesos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasas_de_procesos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasas_de_procesos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasas_de_procesos[".printFriendly"] = true;
}



$tdatatasas_de_procesos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasas_de_procesos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasas_de_procesos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasas_de_procesos[".isUseAjaxSuggest"] = true;



																														

$tdatatasas_de_procesos[".ajaxCodeSnippetAdded"] = false;

$tdatatasas_de_procesos[".buttonsAdded"] = false;

$tdatatasas_de_procesos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasas_de_procesos[".isUseTimeForSearch"] = false;


$tdatatasas_de_procesos[".badgeColor"] = "d2691e";


$tdatatasas_de_procesos[".allSearchFields"] = array();
$tdatatasas_de_procesos[".filterFields"] = array();
$tdatatasas_de_procesos[".requiredSearchFields"] = array();

$tdatatasas_de_procesos[".googleLikeFields"] = array();
$tdatatasas_de_procesos[".googleLikeFields"][] = "TasaId";
$tdatatasas_de_procesos[".googleLikeFields"][] = "Fecha de inicio";
$tdatatasas_de_procesos[".googleLikeFields"][] = "Hasta";
$tdatatasas_de_procesos[".googleLikeFields"][] = "Tasa";
$tdatatasas_de_procesos[".googleLikeFields"][] = "Tipo de Tasas";



$tdatatasas_de_procesos[".tableType"] = "list";

$tdatatasas_de_procesos[".printerPageOrientation"] = 0;
$tdatatasas_de_procesos[".nPrinterPageScale"] = 100;

$tdatatasas_de_procesos[".nPrinterSplitRecords"] = 40;

$tdatatasas_de_procesos[".geocodingEnabled"] = false;










$tdatatasas_de_procesos[".pageSize"] = 20;

$tdatatasas_de_procesos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TasaId desc";
$tdatatasas_de_procesos[".strOrderBy"] = $tstrOrderBy;

$tdatatasas_de_procesos[".orderindexes"] = array();
	$tdatatasas_de_procesos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "TasaId");



$tdatatasas_de_procesos[".sqlHead"] = "SELECT TasaId,  	Desde AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$tdatatasas_de_procesos[".sqlFrom"] = "FROM dbo.Tasas";
$tdatatasas_de_procesos[".sqlWhereExpr"] = "";
$tdatatasas_de_procesos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasas_de_procesos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasas_de_procesos[".arrGroupsPerPage"] = $arrGPP;

$tdatatasas_de_procesos[".highlightSearchResults"] = true;

$tableKeystasas_de_procesos = array();
$tableKeystasas_de_procesos[] = "TasaId";
$tdatatasas_de_procesos[".Keys"] = $tableKeystasas_de_procesos;


$tdatatasas_de_procesos[".hideMobileList"] = array();




//	TasaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TasaId";
	$fdata["GoodName"] = "TasaId";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas_de_Procesos","TasaId");
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


	$tdatatasas_de_procesos["TasaId"] = $fdata;
		$tdatatasas_de_procesos[".searchableFields"][] = "TasaId";
//	Fecha de inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de inicio";
	$fdata["GoodName"] = "Fecha_de_inicio";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas_de_Procesos","Fecha_de_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Desde";

	
	
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


	$tdatatasas_de_procesos["Fecha de inicio"] = $fdata;
		$tdatatasas_de_procesos[".searchableFields"][] = "Fecha de inicio";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas_de_Procesos","Hasta");
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


	$tdatatasas_de_procesos["Hasta"] = $fdata;
		$tdatatasas_de_procesos[".searchableFields"][] = "Hasta";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas_de_Procesos","Tasa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Tasa";

		$fdata["sourceSingle"] = "Tasa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tasa";

	
	
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


	$tdatatasas_de_procesos["Tasa"] = $fdata;
		$tdatatasas_de_procesos[".searchableFields"][] = "Tasa";
//	Tipo de Tasas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo de Tasas";
	$fdata["GoodName"] = "Tipo_de_Tasas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas_de_Procesos","Tipo_de_Tasas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo de Tasas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL)))";

	
	
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
	$edata["LookupTable"] = "dbo.Tasas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Tipo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tipo de Tasas";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "Tipo";

	
	
	
	

	
	
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


	$tdatatasas_de_procesos["Tipo de Tasas"] = $fdata;
		$tdatatasas_de_procesos[".searchableFields"][] = "Tipo de Tasas";


$tables_data["dbo.Tasas de Procesos"]=&$tdatatasas_de_procesos;
$field_labels["dbo_Tasas_de_Procesos"] = &$fieldLabelstasas_de_procesos;
$fieldToolTips["dbo_Tasas_de_Procesos"] = &$fieldToolTipstasas_de_procesos;
$placeHolders["dbo_Tasas_de_Procesos"] = &$placeHolderstasas_de_procesos;
$page_titles["dbo_Tasas_de_Procesos"] = &$pageTitlestasas_de_procesos;


changeTextControlsToDate( "dbo.Tasas de Procesos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Tasas de Procesos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Tasas de Procesos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Tasas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Tasas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tasas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Tasas de Procesos"][0] = $masterParams;
				$masterTablesData["dbo.Tasas de Procesos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Tasas de Procesos"][0]["masterKeys"][]="Tipo";
				$masterTablesData["dbo.Tasas de Procesos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Tasas de Procesos"][0]["detailKeys"][]="Tipo de Tasas";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasas_de_procesos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TasaId,  	Desde AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$proto0["m_strFrom"] = "FROM dbo.Tasas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY TasaId desc";
	
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
	"m_strName" => "TasaId",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas de Procesos"
));

$proto6["m_sql"] = "TasaId";
$proto6["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas de Procesos"
));

$proto8["m_sql"] = "Desde";
$proto8["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Fecha de inicio";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas de Procesos"
));

$proto10["m_sql"] = "Hasta";
$proto10["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas de Procesos"
));

$proto12["m_sql"] = "Tasa";
$proto12["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Tasas.Tipo=1"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Tasas Tributarias'"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "IIF";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL)))";
$proto14["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Tipo de Tasas";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "dbo.Tasas";
$proto20["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "TasaId";
$proto20["m_columns"][] = "Desde";
$proto20["m_columns"][] = "Hasta";
$proto20["m_columns"][] = "Tasa";
$proto20["m_columns"][] = "Tipo";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "dbo.Tasas";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "dbo.Tasas de Procesos";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "TasaId",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas de Procesos"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 0;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Tasas de Procesos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasas_de_procesos = createSqlQuery_tasas_de_procesos();


	
		;

					

$tdatatasas_de_procesos[".sqlquery"] = $queryData_tasas_de_procesos;



$tdatatasas_de_procesos[".hasEvents"] = false;

?>