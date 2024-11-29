<?php
$tdatatasas_tributarias = array();
$tdatatasas_tributarias[".searchableFields"] = array();
$tdatatasas_tributarias[".ShortName"] = "tasas_tributarias";
$tdatatasas_tributarias[".OwnerID"] = "";
$tdatatasas_tributarias[".OriginalTable"] = "dbo.Tasas";


$tdatatasas_tributarias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatasas_tributarias[".originalPagesByType"] = $tdatatasas_tributarias[".pagesByType"];
$tdatatasas_tributarias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatasas_tributarias[".originalPages"] = $tdatatasas_tributarias[".pages"];
$tdatatasas_tributarias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatasas_tributarias[".originalDefaultPages"] = $tdatatasas_tributarias[".defaultPages"];

//	field labels
$fieldLabelstasas_tributarias = array();
$fieldToolTipstasas_tributarias = array();
$pageTitlestasas_tributarias = array();
$placeHolderstasas_tributarias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstasas_tributarias["Spanish"] = array();
	$fieldToolTipstasas_tributarias["Spanish"] = array();
	$placeHolderstasas_tributarias["Spanish"] = array();
	$pageTitlestasas_tributarias["Spanish"] = array();
	$fieldLabelstasas_tributarias["Spanish"]["TasaId"] = "Tasa Id";
	$fieldToolTipstasas_tributarias["Spanish"]["TasaId"] = "";
	$placeHolderstasas_tributarias["Spanish"]["TasaId"] = "";
	$fieldLabelstasas_tributarias["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipstasas_tributarias["Spanish"]["Hasta"] = "";
	$placeHolderstasas_tributarias["Spanish"]["Hasta"] = "";
	$fieldLabelstasas_tributarias["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipstasas_tributarias["Spanish"]["Tasa"] = "";
	$placeHolderstasas_tributarias["Spanish"]["Tasa"] = "";
	$fieldLabelstasas_tributarias["Spanish"]["Fecha_de_inicio"] = "Fecha de inicio";
	$fieldToolTipstasas_tributarias["Spanish"]["Fecha_de_inicio"] = "";
	$placeHolderstasas_tributarias["Spanish"]["Fecha_de_inicio"] = "";
	$fieldLabelstasas_tributarias["Spanish"]["Tipo_de_Tasas"] = "Tipo de Tasas";
	$fieldToolTipstasas_tributarias["Spanish"]["Tipo_de_Tasas"] = "";
	$placeHolderstasas_tributarias["Spanish"]["Tipo_de_Tasas"] = "";
	if (count($fieldToolTipstasas_tributarias["Spanish"]))
		$tdatatasas_tributarias[".isUseToolTips"] = true;
}


	$tdatatasas_tributarias[".NCSearch"] = true;



$tdatatasas_tributarias[".shortTableName"] = "tasas_tributarias";
$tdatatasas_tributarias[".nSecOptions"] = 0;

$tdatatasas_tributarias[".mainTableOwnerID"] = "";
$tdatatasas_tributarias[".entityType"] = 1;
$tdatatasas_tributarias[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatasas_tributarias[".strOriginalTableName"] = "dbo.Tasas";

	



$tdatatasas_tributarias[".showAddInPopup"] = false;

$tdatatasas_tributarias[".showEditInPopup"] = false;

$tdatatasas_tributarias[".showViewInPopup"] = false;

$tdatatasas_tributarias[".listAjax"] = false;
//	temporary
//$tdatatasas_tributarias[".listAjax"] = false;

	$tdatatasas_tributarias[".audit"] = false;

	$tdatatasas_tributarias[".locking"] = false;


$pages = $tdatatasas_tributarias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasas_tributarias[".edit"] = true;
	$tdatatasas_tributarias[".afterEditAction"] = 1;
	$tdatatasas_tributarias[".closePopupAfterEdit"] = 1;
	$tdatatasas_tributarias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasas_tributarias[".add"] = true;
$tdatatasas_tributarias[".afterAddAction"] = 1;
$tdatatasas_tributarias[".closePopupAfterAdd"] = 1;
$tdatatasas_tributarias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasas_tributarias[".list"] = true;
}



$tdatatasas_tributarias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasas_tributarias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasas_tributarias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasas_tributarias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasas_tributarias[".printFriendly"] = true;
}



$tdatatasas_tributarias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasas_tributarias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasas_tributarias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasas_tributarias[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																						

$tdatatasas_tributarias[".ajaxCodeSnippetAdded"] = false;

$tdatatasas_tributarias[".buttonsAdded"] = false;

$tdatatasas_tributarias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasas_tributarias[".isUseTimeForSearch"] = false;


$tdatatasas_tributarias[".badgeColor"] = "E67349";


$tdatatasas_tributarias[".allSearchFields"] = array();
$tdatatasas_tributarias[".filterFields"] = array();
$tdatatasas_tributarias[".requiredSearchFields"] = array();

$tdatatasas_tributarias[".googleLikeFields"] = array();
$tdatatasas_tributarias[".googleLikeFields"][] = "TasaId";
$tdatatasas_tributarias[".googleLikeFields"][] = "Fecha de inicio";
$tdatatasas_tributarias[".googleLikeFields"][] = "Hasta";
$tdatatasas_tributarias[".googleLikeFields"][] = "Tasa";
$tdatatasas_tributarias[".googleLikeFields"][] = "Tipo de Tasas";



$tdatatasas_tributarias[".tableType"] = "list";

$tdatatasas_tributarias[".printerPageOrientation"] = 0;
$tdatatasas_tributarias[".nPrinterPageScale"] = 100;

$tdatatasas_tributarias[".nPrinterSplitRecords"] = 40;

$tdatatasas_tributarias[".geocodingEnabled"] = false;





$tdatatasas_tributarias[".isResizeColumns"] = true;





$tdatatasas_tributarias[".pageSize"] = 20;

$tdatatasas_tributarias[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Desde DESC";
$tdatatasas_tributarias[".strOrderBy"] = $tstrOrderBy;

$tdatatasas_tributarias[".orderindexes"] = array();


$tdatatasas_tributarias[".sqlHead"] = "SELECT TasaId,  	FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy') AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$tdatatasas_tributarias[".sqlFrom"] = "FROM dbo.Tasas";
$tdatatasas_tributarias[".sqlWhereExpr"] = "Tasas.Tipo =1";
$tdatatasas_tributarias[".sqlTail"] = "";

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
$tdatatasas_tributarias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasas_tributarias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasas_tributarias[".arrGroupsPerPage"] = $arrGPP;

$tdatatasas_tributarias[".highlightSearchResults"] = true;

$tableKeystasas_tributarias = array();
$tableKeystasas_tributarias[] = "TasaId";
$tdatatasas_tributarias[".Keys"] = $tableKeystasas_tributarias;


$tdatatasas_tributarias[".hideMobileList"] = array();




//	TasaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TasaId";
	$fdata["GoodName"] = "TasaId";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Tributarias","TasaId");
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


	$tdatatasas_tributarias["TasaId"] = $fdata;
		$tdatatasas_tributarias[".searchableFields"][] = "TasaId";
//	Fecha de inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de inicio";
	$fdata["GoodName"] = "Fecha_de_inicio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tasas_Tributarias","Fecha_de_inicio");
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


	$tdatatasas_tributarias["Fecha de inicio"] = $fdata;
		$tdatatasas_tributarias[".searchableFields"][] = "Fecha de inicio";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Tributarias","Hasta");
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


	$tdatatasas_tributarias["Hasta"] = $fdata;
		$tdatatasas_tributarias[".searchableFields"][] = "Hasta";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("Tasas_Tributarias","Tasa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Tasa";

		$fdata["sourceSingle"] = "Tasa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tasa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatatasas_tributarias["Tasa"] = $fdata;
		$tdatatasas_tributarias[".searchableFields"][] = "Tasa";
//	Tipo de Tasas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo de Tasas";
	$fdata["GoodName"] = "Tipo_de_Tasas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tasas_Tributarias","Tipo_de_Tasas");
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


	$tdatatasas_tributarias["Tipo de Tasas"] = $fdata;
		$tdatatasas_tributarias[".searchableFields"][] = "Tipo de Tasas";


$tables_data["Tasas Tributarias"]=&$tdatatasas_tributarias;
$field_labels["Tasas_Tributarias"] = &$fieldLabelstasas_tributarias;
$fieldToolTips["Tasas_Tributarias"] = &$fieldToolTipstasas_tributarias;
$placeHolders["Tasas_Tributarias"] = &$placeHolderstasas_tributarias;
$page_titles["Tasas_Tributarias"] = &$pageTitlestasas_tributarias;


changeTextControlsToDate( "Tasas Tributarias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tasas Tributarias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tasas Tributarias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasas_tributarias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TasaId,  	FORMAT(CONVERT(DATE, Desde), 'dd/MM/yyyy') AS 'Fecha de inicio',  	Hasta,  	Tasa,  	IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL))) AS 'Tipo de Tasas'";
$proto0["m_strFrom"] = "FROM dbo.Tasas";
$proto0["m_strWhere"] = "Tasas.Tipo =1";
$proto0["m_strOrderBy"] = "ORDER BY Desde DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Tasas.Tipo =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Tributarias"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_srcTableName" => "Tasas Tributarias"
));

$proto6["m_sql"] = "TasaId";
$proto6["m_srcTableName"] = "Tasas Tributarias";
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
$proto8["m_srcTableName"] = "Tasas Tributarias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Fecha de inicio";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Tributarias"
));

$proto12["m_sql"] = "Hasta";
$proto12["m_srcTableName"] = "Tasas Tributarias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "Tasas Tributarias"
));

$proto14["m_sql"] = "Tasa";
$proto14["m_srcTableName"] = "Tasas Tributarias";
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

$proto16["m_sql"] = "IIF(Tasas.Tipo=1,'Tasas Tributarias',IIF(Tasas.Tipo=2,'Tasas TES (Deterioro de Cartera)',  	IIF (Tasas.Tipo=3,'Tasas Comerciales',NULL)))";
$proto16["m_srcTableName"] = "Tasas Tributarias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Tipo de Tasas";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "dbo.Tasas";
$proto22["m_srcTableName"] = "Tasas Tributarias";
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
$proto21["m_srcTableName"] = "Tasas Tributarias";
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
	"m_srcTableName" => "Tasas Tributarias"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Tasas Tributarias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasas_tributarias = createSqlQuery_tasas_tributarias();


	
		;

					

$tdatatasas_tributarias[".sqlquery"] = $queryData_tasas_tributarias;



include_once(getabspath("include/tasas_tributarias_events.php"));
$tdatatasas_tributarias[".hasEvents"] = true;

?>