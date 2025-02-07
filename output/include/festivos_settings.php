<?php
$tdatafestivos = array();
$tdatafestivos[".searchableFields"] = array();
$tdatafestivos[".ShortName"] = "festivos";
$tdatafestivos[".OwnerID"] = "";
$tdatafestivos[".OriginalTable"] = "dbo.Festivos";


$tdatafestivos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatafestivos[".originalPagesByType"] = $tdatafestivos[".pagesByType"];
$tdatafestivos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatafestivos[".originalPages"] = $tdatafestivos[".pages"];
$tdatafestivos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatafestivos[".originalDefaultPages"] = $tdatafestivos[".defaultPages"];

//	field labels
$fieldLabelsfestivos = array();
$fieldToolTipsfestivos = array();
$pageTitlesfestivos = array();
$placeHoldersfestivos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfestivos["Spanish"] = array();
	$fieldToolTipsfestivos["Spanish"] = array();
	$placeHoldersfestivos["Spanish"] = array();
	$pageTitlesfestivos["Spanish"] = array();
	$fieldLabelsfestivos["Spanish"]["FestivoId"] = "Festivo Id";
	$fieldToolTipsfestivos["Spanish"]["FestivoId"] = "";
	$placeHoldersfestivos["Spanish"]["FestivoId"] = "";
	$fieldLabelsfestivos["Spanish"]["Festivo"] = "Festivo";
	$fieldToolTipsfestivos["Spanish"]["Festivo"] = "";
	$placeHoldersfestivos["Spanish"]["Festivo"] = "";
	$fieldLabelsfestivos["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsfestivos["Spanish"]["Fecha"] = "";
	$placeHoldersfestivos["Spanish"]["Fecha"] = "";
	$pageTitlesfestivos["Spanish"]["add"] = "Festivos";
	if (count($fieldToolTipsfestivos["Spanish"]))
		$tdatafestivos[".isUseToolTips"] = true;
}


	$tdatafestivos[".NCSearch"] = true;



$tdatafestivos[".shortTableName"] = "festivos";
$tdatafestivos[".nSecOptions"] = 0;

$tdatafestivos[".mainTableOwnerID"] = "";
$tdatafestivos[".entityType"] = 0;
$tdatafestivos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatafestivos[".strOriginalTableName"] = "dbo.Festivos";

	



$tdatafestivos[".showAddInPopup"] = false;

$tdatafestivos[".showEditInPopup"] = false;

$tdatafestivos[".showViewInPopup"] = false;

$tdatafestivos[".listAjax"] = false;
//	temporary
//$tdatafestivos[".listAjax"] = false;

	$tdatafestivos[".audit"] = true;

	$tdatafestivos[".locking"] = false;


$pages = $tdatafestivos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafestivos[".edit"] = true;
	$tdatafestivos[".afterEditAction"] = 1;
	$tdatafestivos[".closePopupAfterEdit"] = 1;
	$tdatafestivos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafestivos[".add"] = true;
$tdatafestivos[".afterAddAction"] = 1;
$tdatafestivos[".closePopupAfterAdd"] = 1;
$tdatafestivos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafestivos[".list"] = true;
}



$tdatafestivos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafestivos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafestivos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafestivos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafestivos[".printFriendly"] = true;
}



$tdatafestivos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafestivos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafestivos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafestivos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdatafestivos[".ajaxCodeSnippetAdded"] = false;

$tdatafestivos[".buttonsAdded"] = false;

$tdatafestivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafestivos[".isUseTimeForSearch"] = false;


$tdatafestivos[".badgeColor"] = "6DA5C8";


$tdatafestivos[".allSearchFields"] = array();
$tdatafestivos[".filterFields"] = array();
$tdatafestivos[".requiredSearchFields"] = array();

$tdatafestivos[".googleLikeFields"] = array();
$tdatafestivos[".googleLikeFields"][] = "Festivo";
$tdatafestivos[".googleLikeFields"][] = "Fecha";



$tdatafestivos[".tableType"] = "list";

$tdatafestivos[".printerPageOrientation"] = 0;
$tdatafestivos[".nPrinterPageScale"] = 100;

$tdatafestivos[".nPrinterSplitRecords"] = 40;

$tdatafestivos[".geocodingEnabled"] = false;




$tdatafestivos[".isDisplayLoading"] = true;

$tdatafestivos[".isResizeColumns"] = true;





$tdatafestivos[".pageSize"] = 20;

$tdatafestivos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafestivos[".strOrderBy"] = $tstrOrderBy;

$tdatafestivos[".orderindexes"] = array();


$tdatafestivos[".sqlHead"] = "SELECT FestivoId,  	Festivo,  	Fecha";
$tdatafestivos[".sqlFrom"] = "FROM dbo.Festivos";
$tdatafestivos[".sqlWhereExpr"] = "";
$tdatafestivos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatafestivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafestivos[".arrGroupsPerPage"] = $arrGPP;

$tdatafestivos[".highlightSearchResults"] = true;

$tableKeysfestivos = array();
$tableKeysfestivos[] = "FestivoId";
$tdatafestivos[".Keys"] = $tableKeysfestivos;


$tdatafestivos[".hideMobileList"] = array();




//	FestivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FestivoId";
	$fdata["GoodName"] = "FestivoId";
	$fdata["ownerTable"] = "dbo.Festivos";
	$fdata["Label"] = GetFieldLabel("dbo_Festivos","FestivoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "FestivoId";

		$fdata["sourceSingle"] = "FestivoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FestivoId";

	
	
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


	$tdatafestivos["FestivoId"] = $fdata;
		$tdatafestivos[".searchableFields"][] = "FestivoId";
//	Festivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Festivo";
	$fdata["GoodName"] = "Festivo";
	$fdata["ownerTable"] = "dbo.Festivos";
	$fdata["Label"] = GetFieldLabel("dbo_Festivos","Festivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Festivo";

		$fdata["sourceSingle"] = "Festivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Festivo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatafestivos["Festivo"] = $fdata;
		$tdatafestivos[".searchableFields"][] = "Festivo";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Festivos";
	$fdata["Label"] = GetFieldLabel("dbo_Festivos","Fecha");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatafestivos["Fecha"] = $fdata;
		$tdatafestivos[".searchableFields"][] = "Fecha";


$tables_data["dbo.Festivos"]=&$tdatafestivos;
$field_labels["dbo_Festivos"] = &$fieldLabelsfestivos;
$fieldToolTips["dbo_Festivos"] = &$fieldToolTipsfestivos;
$placeHolders["dbo_Festivos"] = &$placeHoldersfestivos;
$page_titles["dbo_Festivos"] = &$pageTitlesfestivos;


changeTextControlsToDate( "dbo.Festivos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Festivos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Festivos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_festivos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FestivoId,  	Festivo,  	Fecha";
$proto0["m_strFrom"] = "FROM dbo.Festivos";
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
	"m_strName" => "FestivoId",
	"m_strTable" => "dbo.Festivos",
	"m_srcTableName" => "dbo.Festivos"
));

$proto6["m_sql"] = "FestivoId";
$proto6["m_srcTableName"] = "dbo.Festivos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Festivo",
	"m_strTable" => "dbo.Festivos",
	"m_srcTableName" => "dbo.Festivos"
));

$proto8["m_sql"] = "Festivo";
$proto8["m_srcTableName"] = "dbo.Festivos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Festivos",
	"m_srcTableName" => "dbo.Festivos"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.Festivos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Festivos";
$proto13["m_srcTableName"] = "dbo.Festivos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "FestivoId";
$proto13["m_columns"][] = "Festivo";
$proto13["m_columns"][] = "Fecha";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Festivos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Festivos";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Festivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_festivos = createSqlQuery_festivos();


	
		;

			

$tdatafestivos[".sqlquery"] = $queryData_festivos;



$tdatafestivos[".hasEvents"] = false;

?>