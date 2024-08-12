<?php
$tdatacorporacionesview = array();
$tdatacorporacionesview[".searchableFields"] = array();
$tdatacorporacionesview[".ShortName"] = "corporacionesview";
$tdatacorporacionesview[".OwnerID"] = "";
$tdatacorporacionesview[".OriginalTable"] = "dbo.CorporacionesView";


$tdatacorporacionesview[".pagesByType"] = my_json_decode( "{}" );
$tdatacorporacionesview[".originalPagesByType"] = $tdatacorporacionesview[".pagesByType"];
$tdatacorporacionesview[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacorporacionesview[".originalPages"] = $tdatacorporacionesview[".pages"];
$tdatacorporacionesview[".defaultPages"] = my_json_decode( "{}" );
$tdatacorporacionesview[".originalDefaultPages"] = $tdatacorporacionesview[".defaultPages"];

//	field labels
$fieldLabelscorporacionesview = array();
$fieldToolTipscorporacionesview = array();
$pageTitlescorporacionesview = array();
$placeHolderscorporacionesview = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorporacionesview["Spanish"] = array();
	$fieldToolTipscorporacionesview["Spanish"] = array();
	$placeHolderscorporacionesview["Spanish"] = array();
	$pageTitlescorporacionesview["Spanish"] = array();
	$fieldLabelscorporacionesview["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipscorporacionesview["Spanish"]["Codigo"] = "";
	$placeHolderscorporacionesview["Spanish"]["Codigo"] = "";
	$fieldLabelscorporacionesview["Spanish"]["Corporacion"] = "Corporacion";
	$fieldToolTipscorporacionesview["Spanish"]["Corporacion"] = "";
	$placeHolderscorporacionesview["Spanish"]["Corporacion"] = "";
	if (count($fieldToolTipscorporacionesview["Spanish"]))
		$tdatacorporacionesview[".isUseToolTips"] = true;
}


	$tdatacorporacionesview[".NCSearch"] = true;



$tdatacorporacionesview[".shortTableName"] = "corporacionesview";
$tdatacorporacionesview[".nSecOptions"] = 0;

$tdatacorporacionesview[".mainTableOwnerID"] = "";
$tdatacorporacionesview[".entityType"] = 0;
$tdatacorporacionesview[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacorporacionesview[".strOriginalTableName"] = "dbo.CorporacionesView";

	



$tdatacorporacionesview[".showAddInPopup"] = false;

$tdatacorporacionesview[".showEditInPopup"] = false;

$tdatacorporacionesview[".showViewInPopup"] = false;

$tdatacorporacionesview[".listAjax"] = false;
//	temporary
//$tdatacorporacionesview[".listAjax"] = false;

	$tdatacorporacionesview[".audit"] = false;

	$tdatacorporacionesview[".locking"] = false;


$pages = $tdatacorporacionesview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorporacionesview[".edit"] = true;
	$tdatacorporacionesview[".afterEditAction"] = 1;
	$tdatacorporacionesview[".closePopupAfterEdit"] = 1;
	$tdatacorporacionesview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorporacionesview[".add"] = true;
$tdatacorporacionesview[".afterAddAction"] = 1;
$tdatacorporacionesview[".closePopupAfterAdd"] = 1;
$tdatacorporacionesview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorporacionesview[".list"] = true;
}



$tdatacorporacionesview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorporacionesview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorporacionesview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorporacionesview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorporacionesview[".printFriendly"] = true;
}



$tdatacorporacionesview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorporacionesview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorporacionesview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorporacionesview[".isUseAjaxSuggest"] = true;



																																																																																																																																							

$tdatacorporacionesview[".ajaxCodeSnippetAdded"] = false;

$tdatacorporacionesview[".buttonsAdded"] = false;

$tdatacorporacionesview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorporacionesview[".isUseTimeForSearch"] = false;


$tdatacorporacionesview[".badgeColor"] = "7B68EE";


$tdatacorporacionesview[".allSearchFields"] = array();
$tdatacorporacionesview[".filterFields"] = array();
$tdatacorporacionesview[".requiredSearchFields"] = array();

$tdatacorporacionesview[".googleLikeFields"] = array();
$tdatacorporacionesview[".googleLikeFields"][] = "Codigo";
$tdatacorporacionesview[".googleLikeFields"][] = "Corporacion";



$tdatacorporacionesview[".tableType"] = "list";

$tdatacorporacionesview[".printerPageOrientation"] = 0;
$tdatacorporacionesview[".nPrinterPageScale"] = 100;

$tdatacorporacionesview[".nPrinterSplitRecords"] = 40;

$tdatacorporacionesview[".geocodingEnabled"] = false;










$tdatacorporacionesview[".pageSize"] = 20;

$tdatacorporacionesview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacorporacionesview[".strOrderBy"] = $tstrOrderBy;

$tdatacorporacionesview[".orderindexes"] = array();


$tdatacorporacionesview[".sqlHead"] = "SELECT Codigo,  	Corporacion";
$tdatacorporacionesview[".sqlFrom"] = "FROM dbo.CorporacionesView";
$tdatacorporacionesview[".sqlWhereExpr"] = "";
$tdatacorporacionesview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorporacionesview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorporacionesview[".arrGroupsPerPage"] = $arrGPP;

$tdatacorporacionesview[".highlightSearchResults"] = true;

$tableKeyscorporacionesview = array();
$tdatacorporacionesview[".Keys"] = $tableKeyscorporacionesview;


$tdatacorporacionesview[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.CorporacionesView";
	$fdata["Label"] = GetFieldLabel("dbo_CorporacionesView","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacorporacionesview["Codigo"] = $fdata;
		$tdatacorporacionesview[".searchableFields"][] = "Codigo";
//	Corporacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Corporacion";
	$fdata["GoodName"] = "Corporacion";
	$fdata["ownerTable"] = "dbo.CorporacionesView";
	$fdata["Label"] = GetFieldLabel("dbo_CorporacionesView","Corporacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Corporacion";

		$fdata["sourceSingle"] = "Corporacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Corporacion";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacorporacionesview["Corporacion"] = $fdata;
		$tdatacorporacionesview[".searchableFields"][] = "Corporacion";


$tables_data["dbo.CorporacionesView"]=&$tdatacorporacionesview;
$field_labels["dbo_CorporacionesView"] = &$fieldLabelscorporacionesview;
$fieldToolTips["dbo_CorporacionesView"] = &$fieldToolTipscorporacionesview;
$placeHolders["dbo_CorporacionesView"] = &$placeHolderscorporacionesview;
$page_titles["dbo_CorporacionesView"] = &$pageTitlescorporacionesview;


changeTextControlsToDate( "dbo.CorporacionesView" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.CorporacionesView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CorporacionesView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_corporacionesview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Corporacion";
$proto0["m_strFrom"] = "FROM dbo.CorporacionesView";
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
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.CorporacionesView",
	"m_srcTableName" => "dbo.CorporacionesView"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "dbo.CorporacionesView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.CorporacionesView",
	"m_srcTableName" => "dbo.CorporacionesView"
));

$proto8["m_sql"] = "Corporacion";
$proto8["m_srcTableName"] = "dbo.CorporacionesView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.CorporacionesView";
$proto11["m_srcTableName"] = "dbo.CorporacionesView";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Corporacion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.CorporacionesView";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.CorporacionesView";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.CorporacionesView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_corporacionesview = createSqlQuery_corporacionesview();


	
		;

		

$tdatacorporacionesview[".sqlquery"] = $queryData_corporacionesview;



$tdatacorporacionesview[".hasEvents"] = false;

?>