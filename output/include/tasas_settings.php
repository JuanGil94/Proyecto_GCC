<?php
$tdatatasas = array();
$tdatatasas[".searchableFields"] = array();
$tdatatasas[".ShortName"] = "tasas";
$tdatatasas[".OwnerID"] = "";
$tdatatasas[".OriginalTable"] = "dbo.Tasas";


$tdatatasas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatasas[".originalPagesByType"] = $tdatatasas[".pagesByType"];
$tdatatasas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatasas[".originalPages"] = $tdatatasas[".pages"];
$tdatatasas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatasas[".originalDefaultPages"] = $tdatatasas[".defaultPages"];

//	field labels
$fieldLabelstasas = array();
$fieldToolTipstasas = array();
$pageTitlestasas = array();
$placeHolderstasas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstasas["Spanish"] = array();
	$fieldToolTipstasas["Spanish"] = array();
	$placeHolderstasas["Spanish"] = array();
	$pageTitlestasas["Spanish"] = array();
	$fieldLabelstasas["Spanish"]["TasaId"] = "Tasa Id";
	$fieldToolTipstasas["Spanish"]["TasaId"] = "";
	$placeHolderstasas["Spanish"]["TasaId"] = "";
	$fieldLabelstasas["Spanish"]["Desde"] = "Desde";
	$fieldToolTipstasas["Spanish"]["Desde"] = "";
	$placeHolderstasas["Spanish"]["Desde"] = "";
	$fieldLabelstasas["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipstasas["Spanish"]["Hasta"] = "";
	$placeHolderstasas["Spanish"]["Hasta"] = "";
	$fieldLabelstasas["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipstasas["Spanish"]["Tasa"] = "";
	$placeHolderstasas["Spanish"]["Tasa"] = "";
	$fieldLabelstasas["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipstasas["Spanish"]["Tipo"] = "";
	$placeHolderstasas["Spanish"]["Tipo"] = "";
	if (count($fieldToolTipstasas["Spanish"]))
		$tdatatasas[".isUseToolTips"] = true;
}


	$tdatatasas[".NCSearch"] = true;



$tdatatasas[".shortTableName"] = "tasas";
$tdatatasas[".nSecOptions"] = 0;

$tdatatasas[".mainTableOwnerID"] = "";
$tdatatasas[".entityType"] = 0;
$tdatatasas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatasas[".strOriginalTableName"] = "dbo.Tasas";

	



$tdatatasas[".showAddInPopup"] = false;

$tdatatasas[".showEditInPopup"] = false;

$tdatatasas[".showViewInPopup"] = false;

$tdatatasas[".listAjax"] = false;
//	temporary
//$tdatatasas[".listAjax"] = false;

	$tdatatasas[".audit"] = true;

	$tdatatasas[".locking"] = false;


$pages = $tdatatasas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatasas[".edit"] = true;
	$tdatatasas[".afterEditAction"] = 1;
	$tdatatasas[".closePopupAfterEdit"] = 1;
	$tdatatasas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatasas[".add"] = true;
$tdatatasas[".afterAddAction"] = 1;
$tdatatasas[".closePopupAfterAdd"] = 1;
$tdatatasas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatasas[".list"] = true;
}



$tdatatasas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatasas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatasas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatasas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatasas[".printFriendly"] = true;
}



$tdatatasas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatasas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatasas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatasas[".isUseAjaxSuggest"] = true;



			

$tdatatasas[".ajaxCodeSnippetAdded"] = false;

$tdatatasas[".buttonsAdded"] = false;

$tdatatasas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatasas[".isUseTimeForSearch"] = false;


$tdatatasas[".badgeColor"] = "8FBC8B";


$tdatatasas[".allSearchFields"] = array();
$tdatatasas[".filterFields"] = array();
$tdatatasas[".requiredSearchFields"] = array();

$tdatatasas[".googleLikeFields"] = array();
$tdatatasas[".googleLikeFields"][] = "TasaId";
$tdatatasas[".googleLikeFields"][] = "Desde";
$tdatatasas[".googleLikeFields"][] = "Hasta";
$tdatatasas[".googleLikeFields"][] = "Tasa";
$tdatatasas[".googleLikeFields"][] = "Tipo";



$tdatatasas[".tableType"] = "list";

$tdatatasas[".printerPageOrientation"] = 0;
$tdatatasas[".nPrinterPageScale"] = 100;

$tdatatasas[".nPrinterSplitRecords"] = 40;

$tdatatasas[".geocodingEnabled"] = false;










$tdatatasas[".pageSize"] = 20;

$tdatatasas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatasas[".strOrderBy"] = $tstrOrderBy;

$tdatatasas[".orderindexes"] = array();


$tdatatasas[".sqlHead"] = "SELECT TasaId,  	Desde,  	Hasta,  	Tasa,  	Tipo";
$tdatatasas[".sqlFrom"] = "FROM dbo.Tasas";
$tdatatasas[".sqlWhereExpr"] = "";
$tdatatasas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatasas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatasas[".arrGroupsPerPage"] = $arrGPP;

$tdatatasas[".highlightSearchResults"] = true;

$tableKeystasas = array();
$tableKeystasas[] = "TasaId";
$tdatatasas[".Keys"] = $tableKeystasas;


$tdatatasas[".hideMobileList"] = array();




//	TasaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TasaId";
	$fdata["GoodName"] = "TasaId";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas","TasaId");
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


	$tdatatasas["TasaId"] = $fdata;
		$tdatatasas[".searchableFields"][] = "TasaId";
//	Desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Desde";
	$fdata["GoodName"] = "Desde";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas","Desde");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Desde";

		$fdata["sourceSingle"] = "Desde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Desde";

	
	
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


	$tdatatasas["Desde"] = $fdata;
		$tdatatasas[".searchableFields"][] = "Desde";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas","Hasta");
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


	$tdatatasas["Hasta"] = $fdata;
		$tdatatasas[".searchableFields"][] = "Hasta";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas","Tasa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Tasa";

		$fdata["sourceSingle"] = "Tasa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tasa";

	
	
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


	$tdatatasas["Tasa"] = $fdata;
		$tdatatasas[".searchableFields"][] = "Tasa";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Tasas";
	$fdata["Label"] = GetFieldLabel("dbo_Tasas","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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


	$tdatatasas["Tipo"] = $fdata;
		$tdatatasas[".searchableFields"][] = "Tipo";


$tables_data["dbo.Tasas"]=&$tdatatasas;
$field_labels["dbo_Tasas"] = &$fieldLabelstasas;
$fieldToolTips["dbo_Tasas"] = &$fieldToolTipstasas;
$placeHolders["dbo_Tasas"] = &$placeHolderstasas;
$page_titles["dbo_Tasas"] = &$pageTitlestasas;


changeTextControlsToDate( "dbo.Tasas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Tasas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Tasas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tasas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TasaId,  	Desde,  	Hasta,  	Tasa,  	Tipo";
$proto0["m_strFrom"] = "FROM dbo.Tasas";
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
	"m_strName" => "TasaId",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas"
));

$proto6["m_sql"] = "TasaId";
$proto6["m_srcTableName"] = "dbo.Tasas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas"
));

$proto8["m_sql"] = "Desde";
$proto8["m_srcTableName"] = "dbo.Tasas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas"
));

$proto10["m_sql"] = "Hasta";
$proto10["m_srcTableName"] = "dbo.Tasas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas"
));

$proto12["m_sql"] = "Tasa";
$proto12["m_srcTableName"] = "dbo.Tasas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Tasas",
	"m_srcTableName" => "dbo.Tasas"
));

$proto14["m_sql"] = "Tipo";
$proto14["m_srcTableName"] = "dbo.Tasas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Tasas";
$proto17["m_srcTableName"] = "dbo.Tasas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "TasaId";
$proto17["m_columns"][] = "Desde";
$proto17["m_columns"][] = "Hasta";
$proto17["m_columns"][] = "Tasa";
$proto17["m_columns"][] = "Tipo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Tasas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Tasas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Tasas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tasas = createSqlQuery_tasas();


	
		;

					

$tdatatasas[".sqlquery"] = $queryData_tasas;



$tdatatasas[".hasEvents"] = false;

?>