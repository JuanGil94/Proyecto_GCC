<?php
$tdatauvbs = array();
$tdatauvbs[".searchableFields"] = array();
$tdatauvbs[".ShortName"] = "uvbs";
$tdatauvbs[".OwnerID"] = "";
$tdatauvbs[".OriginalTable"] = "dbo.Uvbs";


$tdatauvbs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatauvbs[".originalPagesByType"] = $tdatauvbs[".pagesByType"];
$tdatauvbs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatauvbs[".originalPages"] = $tdatauvbs[".pages"];
$tdatauvbs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatauvbs[".originalDefaultPages"] = $tdatauvbs[".defaultPages"];

//	field labels
$fieldLabelsuvbs = array();
$fieldToolTipsuvbs = array();
$pageTitlesuvbs = array();
$placeHoldersuvbs = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsuvbs["Spanish"] = array();
	$fieldToolTipsuvbs["Spanish"] = array();
	$placeHoldersuvbs["Spanish"] = array();
	$pageTitlesuvbs["Spanish"] = array();
	$fieldLabelsuvbs["Spanish"]["UvbId"] = "Uvb Id";
	$fieldToolTipsuvbs["Spanish"]["UvbId"] = "";
	$placeHoldersuvbs["Spanish"]["UvbId"] = "";
	$fieldLabelsuvbs["Spanish"]["Ano"] = "Ano";
	$fieldToolTipsuvbs["Spanish"]["Ano"] = "";
	$placeHoldersuvbs["Spanish"]["Ano"] = "";
	$fieldLabelsuvbs["Spanish"]["Uvb"] = "Uvb";
	$fieldToolTipsuvbs["Spanish"]["Uvb"] = "";
	$placeHoldersuvbs["Spanish"]["Uvb"] = "";
	if (count($fieldToolTipsuvbs["Spanish"]))
		$tdatauvbs[".isUseToolTips"] = true;
}


	$tdatauvbs[".NCSearch"] = true;



$tdatauvbs[".shortTableName"] = "uvbs";
$tdatauvbs[".nSecOptions"] = 0;

$tdatauvbs[".mainTableOwnerID"] = "";
$tdatauvbs[".entityType"] = 0;
$tdatauvbs[".connId"] = "GCC_at_S00001_CCAD01";


$tdatauvbs[".strOriginalTableName"] = "dbo.Uvbs";

	



$tdatauvbs[".showAddInPopup"] = false;

$tdatauvbs[".showEditInPopup"] = false;

$tdatauvbs[".showViewInPopup"] = false;

$tdatauvbs[".listAjax"] = false;
//	temporary
//$tdatauvbs[".listAjax"] = false;

	$tdatauvbs[".audit"] = false;

	$tdatauvbs[".locking"] = false;


$pages = $tdatauvbs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauvbs[".edit"] = true;
	$tdatauvbs[".afterEditAction"] = 1;
	$tdatauvbs[".closePopupAfterEdit"] = 1;
	$tdatauvbs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauvbs[".add"] = true;
$tdatauvbs[".afterAddAction"] = 1;
$tdatauvbs[".closePopupAfterAdd"] = 1;
$tdatauvbs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauvbs[".list"] = true;
}



$tdatauvbs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauvbs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauvbs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauvbs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauvbs[".printFriendly"] = true;
}



$tdatauvbs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauvbs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauvbs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauvbs[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																						

$tdatauvbs[".ajaxCodeSnippetAdded"] = false;

$tdatauvbs[".buttonsAdded"] = false;

$tdatauvbs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauvbs[".isUseTimeForSearch"] = false;


$tdatauvbs[".badgeColor"] = "778899";


$tdatauvbs[".allSearchFields"] = array();
$tdatauvbs[".filterFields"] = array();
$tdatauvbs[".requiredSearchFields"] = array();

$tdatauvbs[".googleLikeFields"] = array();
$tdatauvbs[".googleLikeFields"][] = "UvbId";
$tdatauvbs[".googleLikeFields"][] = "Ano";
$tdatauvbs[".googleLikeFields"][] = "Uvb";



$tdatauvbs[".tableType"] = "list";

$tdatauvbs[".printerPageOrientation"] = 0;
$tdatauvbs[".nPrinterPageScale"] = 100;

$tdatauvbs[".nPrinterSplitRecords"] = 40;

$tdatauvbs[".geocodingEnabled"] = false;





$tdatauvbs[".isResizeColumns"] = true;





$tdatauvbs[".pageSize"] = 20;

$tdatauvbs[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Ano DESC";
$tdatauvbs[".strOrderBy"] = $tstrOrderBy;

$tdatauvbs[".orderindexes"] = array();
	$tdatauvbs[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "Ano");



$tdatauvbs[".sqlHead"] = "SELECT UvbId,  	Ano,  	Uvb";
$tdatauvbs[".sqlFrom"] = "FROM dbo.Uvbs";
$tdatauvbs[".sqlWhereExpr"] = "";
$tdatauvbs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauvbs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauvbs[".arrGroupsPerPage"] = $arrGPP;

$tdatauvbs[".highlightSearchResults"] = true;

$tableKeysuvbs = array();
$tableKeysuvbs[] = "UvbId";
$tdatauvbs[".Keys"] = $tableKeysuvbs;


$tdatauvbs[".hideMobileList"] = array();




//	UvbId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UvbId";
	$fdata["GoodName"] = "UvbId";
	$fdata["ownerTable"] = "dbo.Uvbs";
	$fdata["Label"] = GetFieldLabel("dbo_Uvbs","UvbId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "UvbId";

		$fdata["sourceSingle"] = "UvbId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UvbId";

	
	
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


	$tdatauvbs["UvbId"] = $fdata;
		$tdatauvbs[".searchableFields"][] = "UvbId";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "dbo.Uvbs";
	$fdata["Label"] = GetFieldLabel("dbo_Uvbs","Ano");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Ano";

		$fdata["sourceSingle"] = "Ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ano";

	
	
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


	$tdatauvbs["Ano"] = $fdata;
		$tdatauvbs[".searchableFields"][] = "Ano";
//	Uvb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Uvb";
	$fdata["GoodName"] = "Uvb";
	$fdata["ownerTable"] = "dbo.Uvbs";
	$fdata["Label"] = GetFieldLabel("dbo_Uvbs","Uvb");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Uvb";

		$fdata["sourceSingle"] = "Uvb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Uvb";

	
	
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


	$tdatauvbs["Uvb"] = $fdata;
		$tdatauvbs[".searchableFields"][] = "Uvb";


$tables_data["dbo.Uvbs"]=&$tdatauvbs;
$field_labels["dbo_Uvbs"] = &$fieldLabelsuvbs;
$fieldToolTips["dbo_Uvbs"] = &$fieldToolTipsuvbs;
$placeHolders["dbo_Uvbs"] = &$placeHoldersuvbs;
$page_titles["dbo_Uvbs"] = &$pageTitlesuvbs;


changeTextControlsToDate( "dbo.Uvbs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Uvbs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Uvbs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_uvbs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UvbId,  	Ano,  	Uvb";
$proto0["m_strFrom"] = "FROM dbo.Uvbs";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Ano DESC";
	
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
	"m_strName" => "UvbId",
	"m_strTable" => "dbo.Uvbs",
	"m_srcTableName" => "dbo.Uvbs"
));

$proto6["m_sql"] = "UvbId";
$proto6["m_srcTableName"] = "dbo.Uvbs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Uvbs",
	"m_srcTableName" => "dbo.Uvbs"
));

$proto8["m_sql"] = "Ano";
$proto8["m_srcTableName"] = "dbo.Uvbs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Uvb",
	"m_strTable" => "dbo.Uvbs",
	"m_srcTableName" => "dbo.Uvbs"
));

$proto10["m_sql"] = "Uvb";
$proto10["m_srcTableName"] = "dbo.Uvbs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Uvbs";
$proto13["m_srcTableName"] = "dbo.Uvbs";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UvbId";
$proto13["m_columns"][] = "Ano";
$proto13["m_columns"][] = "Uvb";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Uvbs";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Uvbs";
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
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Uvbs",
	"m_srcTableName" => "dbo.Uvbs"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 0;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Uvbs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_uvbs = createSqlQuery_uvbs();


	
		;

			

$tdatauvbs[".sqlquery"] = $queryData_uvbs;



$tdatauvbs[".hasEvents"] = false;

?>