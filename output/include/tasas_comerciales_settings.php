<?php
$tdatatasas_comerciales = array();
$tdatatasas_comerciales[".searchableFields"] = array();
$tdatatasas_comerciales[".ShortName"] = "tasas_comerciales";
$tdatatasas_comerciales[".OwnerID"] = "";
$tdatatasas_comerciales[".OriginalTable"] = "dbo.Tasas";


$tdatatasas_comerciales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasas_comerciales[".originalPagesByType"] = $tdatatasas_comerciales[".pagesByType"];
$tdatatasas_comerciales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasas_comerciales[".originalPages"] = $tdatatasas_comerciales[".pages"];
$tdatatasas_comerciales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasas_comerciales[".originalDefaultPages"] = $tdatatasas_comerciales[".defaultPages"];

//	field labels
$fieldLabelstasas_comerciales = array();
$fieldToolTipstasas_comerciales = array();
$pageTitlestasas_comerciales = array();
$placeHolderstasas_comerciales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstasas_comerciales["Spanish"] = array();
	$fieldToolTipstasas_comerciales["Spanish"] = array();
	$placeHolderstasas_comerciales["Spanish"] = array();
	$pageTitlestasas_comerciales["Spanish"] = array();
	$fieldLabelstasas_comerciales["Spanish"]["TasaId"] = "Tasa Id";
	$fieldToolTipstasas_comerciales["Spanish"]["TasaId"] = "";
	$placeHolderstasas_comerciales["Spanish"]["TasaId"] = "";
	$fieldLabelstasas_comerciales["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipstasas_comerciales["Spanish"]["Hasta"] = "";
	$placeHolderstasas_comerciales["Spanish"]["Hasta"] = "";
	$fieldLabelstasas_comerciales["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipstasas_comerciales["Spanish"]["Tasa"] = "";
	$placeHolderstasas_comerciales["Spanish"]["Tasa"] = "";
	$fieldLabelstasas_comerciales["Spanish"]["Fecha_de_inicio"] = "Fecha de inicio";
	$fieldToolTipstasas_comerciales["Spanish"]["Fecha_de_inicio"] = "";
	$placeHolderstasas_comerciales["Spanish"]["Fecha_de_inicio"] = "";
	$fieldLabelstasas_comerciales["Spanish"]["Tipo_de_Tasas"] = "Tipo de Tasas";
	$fieldToolTipstasas_comerciales["Spanish"]["Tipo_de_Tasas"] = "";
	$placeHolderstasas_comerciales["Spanish"]["Tipo_de_Tasas"] = "";
	if (count($fieldToolTipstasas_comerciales["Spanish"]))
		$tdatatasas_comerciales[".isUseToolTips"] = true;
}


	$tdatatasas_comerciales[".NCSearch"] = true;



$tdatatasas_comerciales[".shortTableName"] = "tasas_comerciales";
$tdatatasas_comerciales[".nSecOptions"] = 0;

$tdatatasas_comerciales[".mainTableOwnerID"] = "";
$tdatatasas_comerciales[".entityType"] = 1;
$tdatatasas_comerciales[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatasas_comerciales[".strOriginalTableName"] = "dbo.Tasas";

	



$tdatatasas_comerciales[".showAddInPopup"] = false;

$tdatatasas_comerciales[".showEditInPopup"] = false;

$tdatatasas_comerciales[".showViewInPopup"] = false;

$tdatatasas_comerciales[".listAjax"] = false;
//	temporary
//$tdatatasas_comerciales[".listAjax"] = false;

	$tdatatasas_comerciales[".audit"] = false;

	$tdatatasas_comerciales[".locking"] = false;


$pages = $tdatatasas_comerciales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasas_comerciales[".edit"] = true;
	$tdatatasas_comerciales[".afterEditAction"] = 1;
	$tdatatasas_comerciales[".closePopupAfterEdit"] = 1;
	$tdatatasas_comerciales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasas_comerciales[".add"] = true;
$tdatatasas_comerciales[".afterAddAction"] = 1;
$tdatatasas_comerciales[".closePopupAfterAdd"] = 1;
$tdatatasas_comerciales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasas_comerciales[".list"] = true;
}



$tdatatasas_comerciales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasas_comerciales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasas_comerciales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasas_comerciales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasas_comerciales[".printFriendly"] = true;
}



$tdatatasas_comerciales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasas_comerciales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasas_comerciales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasas_comerciales[".isUseAjaxSuggest"] = true;



															

$tdatatasas_comerciales[".ajaxCodeSnippetAdded"] = false;

$tdatatasas_comerciales[".buttonsAdded"] = false;

$tdatatasas_comerciales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasas_comerciales[".isUseTimeForSearch"] = false;


$tdatatasas_comerciales[".badgeColor"] = "9ACD32";


$tdatatasas_comerciales[".allSearchFields"] = array();
$tdatatasas_comerciales[".filterFields"] = array();
$tdatatasas_comerciales[".requiredSearchFields"] = array();

$tdatatasas_comerciales[".googleLikeFields"] = array();
$tdatatasas_comerciales[".googleLikeFields"][] = "TasaId";
$tdatatasas_comerciales[".googleLikeFields"][] = "Fecha de inicio";
$tdatatasas_comerciales[".googleLikeFields"][] = "Hasta";
$tdatatasas_comerciales[".googleLikeFields"][] = "Tasa";
$tdatatasas_comerciales[".googleLikeFields"][] = "Tipo de Tasas";



$tdatatasas_comerciales[".tableType"] = "list";

$tdatatasas_comerciales[".printerPageOrientation"] = 0;
$tdatatasas_comerciales[".nPrinterPageScale"] = 100;

$tdatatasas_comerciales[".nPrinterSplitRecords"] = 40;

$tdatatasas_comerciales[".geocodingEnabled"] = false;










$tdatatasas_comerciales[".pageSize"] = 20;

$tdatatasas_comerciales[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TasaId desc";
$tdatatasas_comerciales[".strOrderBy"] = $tstrOrderBy;

$tdatatasas_comerciales[".orderindexes"] = array();
	$tdatatasas_comerciales[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "TasaId");



$tdatatasas_comerciales[".sqlHead"] = "SELECT TasaId,  	Desde AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$tdatatasas_comerciales[".sqlFrom"] = "FROM dbo.Tasas";
$tdatatasas_comerciales[".sqlWhereExpr"] = "Tasas.Tipo =3";
$tdatatasas_comerciales[".sqlTail"] = "";

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
$tdatatasas_comerciales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasas_comerciales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasas_comerciales[".arrGroupsPerPage"] = $arrGPP;

$tdatatasas_comerciales[".highlightSearchResults"] = true;

$tableKeystasas_comerciales = array();
$tableKeystasas_comerciales[] = "TasaId";
$tdatatasas_comerciales[".Keys"] = $tableKeystasas_comerciales;


$tdatatasas_comerciales[".hideMobileList"] = array();




//	TasaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TasaId";
	$fdata["GoodName"] = "TasaId";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Comerciales","TasaId");
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


	$tdatatasas_comerciales["TasaId"] = $fdata;
		$tdatatasas_comerciales[".searchableFields"][] = "TasaId";
//	Fecha de inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de inicio";
	$fdata["GoodName"] = "Fecha_de_inicio";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Comerciales","Fecha_de_inicio");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatasas_comerciales["Fecha de inicio"] = $fdata;
		$tdatatasas_comerciales[".searchableFields"][] = "Fecha de inicio";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Comerciales","Hasta");
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


	$tdatatasas_comerciales["Hasta"] = $fdata;
		$tdatatasas_comerciales[".searchableFields"][] = "Hasta";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Comerciales","Tasa");
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
	$fdata["filterTotals"] = 3;
			$fdata["filterTotalFields"] = "TasaId";
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatatasas_comerciales["Tasa"] = $fdata;
		$tdatatasas_comerciales[".searchableFields"][] = "Tasa";
//	Tipo de Tasas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo de Tasas";
	$fdata["GoodName"] = "Tipo_de_Tasas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tasas_Comerciales","Tipo_de_Tasas");
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


	$tdatatasas_comerciales["Tipo de Tasas"] = $fdata;
		$tdatatasas_comerciales[".searchableFields"][] = "Tipo de Tasas";


$tables_data["Tasas Comerciales"]=&$tdatatasas_comerciales;
$field_labels["Tasas_Comerciales"] = &$fieldLabelstasas_comerciales;
$fieldToolTips["Tasas_Comerciales"] = &$fieldToolTipstasas_comerciales;
$placeHolders["Tasas_Comerciales"] = &$placeHolderstasas_comerciales;
$page_titles["Tasas_Comerciales"] = &$pageTitlestasas_comerciales;


changeTextControlsToDate( "Tasas Comerciales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tasas Comerciales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tasas Comerciales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasas_comerciales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TasaId,  	Desde AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$proto0["m_strFrom"] = "FROM dbo.Tasas";
$proto0["m_strWhere"] = "Tasas.Tipo =3";
$proto0["m_strOrderBy"] = "ORDER BY TasaId desc";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Tasas.Tipo =3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Comerciales"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=3";
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
	"m_srcTableName" => "Tasas Comerciales"
));

$proto6["m_sql"] = "TasaId";
$proto6["m_srcTableName"] = "Tasas Comerciales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Comerciales"
));

$proto8["m_sql"] = "Desde";
$proto8["m_srcTableName"] = "Tasas Comerciales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Fecha de inicio";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Comerciales"
));

$proto10["m_sql"] = "Hasta";
$proto10["m_srcTableName"] = "Tasas Comerciales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Comerciales"
));

$proto12["m_sql"] = "Tasa";
$proto12["m_srcTableName"] = "Tasas Comerciales";
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
$proto14["m_srcTableName"] = "Tasas Comerciales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Tipo de Tasas";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "dbo.Tasas";
$proto20["m_srcTableName"] = "Tasas Comerciales";
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
$proto19["m_srcTableName"] = "Tasas Comerciales";
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
	"m_srcTableName" => "Tasas Comerciales"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 0;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Tasas Comerciales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasas_comerciales = createSqlQuery_tasas_comerciales();


	
		;

					

$tdatatasas_comerciales[".sqlquery"] = $queryData_tasas_comerciales;



$tdatatasas_comerciales[".hasEvents"] = false;

?>