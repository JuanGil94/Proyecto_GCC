<?php
$tdatatramites = array();
$tdatatramites[".searchableFields"] = array();
$tdatatramites[".ShortName"] = "tramites";
$tdatatramites[".OwnerID"] = "";
$tdatatramites[".OriginalTable"] = "dbo.Tramites";


$tdatatramites[".pagesByType"] = my_json_decode( "{}" );
$tdatatramites[".originalPagesByType"] = $tdatatramites[".pagesByType"];
$tdatatramites[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatramites[".originalPages"] = $tdatatramites[".pages"];
$tdatatramites[".defaultPages"] = my_json_decode( "{}" );
$tdatatramites[".originalDefaultPages"] = $tdatatramites[".defaultPages"];

//	field labels
$fieldLabelstramites = array();
$fieldToolTipstramites = array();
$pageTitlestramites = array();
$placeHolderstramites = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstramites["Spanish"] = array();
	$fieldToolTipstramites["Spanish"] = array();
	$placeHolderstramites["Spanish"] = array();
	$pageTitlestramites["Spanish"] = array();
	$fieldLabelstramites["Spanish"]["TramiteId"] = "Tramite Id";
	$fieldToolTipstramites["Spanish"]["TramiteId"] = "";
	$placeHolderstramites["Spanish"]["TramiteId"] = "";
	$fieldLabelstramites["Spanish"]["Tramite"] = "Tramite";
	$fieldToolTipstramites["Spanish"]["Tramite"] = "";
	$placeHolderstramites["Spanish"]["Tramite"] = "";
	if (count($fieldToolTipstramites["Spanish"]))
		$tdatatramites[".isUseToolTips"] = true;
}


	$tdatatramites[".NCSearch"] = true;



$tdatatramites[".shortTableName"] = "tramites";
$tdatatramites[".nSecOptions"] = 0;

$tdatatramites[".mainTableOwnerID"] = "";
$tdatatramites[".entityType"] = 0;
$tdatatramites[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatramites[".strOriginalTableName"] = "dbo.Tramites";

	



$tdatatramites[".showAddInPopup"] = false;

$tdatatramites[".showEditInPopup"] = false;

$tdatatramites[".showViewInPopup"] = false;

$tdatatramites[".listAjax"] = false;
//	temporary
//$tdatatramites[".listAjax"] = false;

	$tdatatramites[".audit"] = true;

	$tdatatramites[".locking"] = false;


$pages = $tdatatramites[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatramites[".edit"] = true;
	$tdatatramites[".afterEditAction"] = 1;
	$tdatatramites[".closePopupAfterEdit"] = 1;
	$tdatatramites[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatramites[".add"] = true;
$tdatatramites[".afterAddAction"] = 1;
$tdatatramites[".closePopupAfterAdd"] = 1;
$tdatatramites[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatramites[".list"] = true;
}



$tdatatramites[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatramites[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatramites[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatramites[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatramites[".printFriendly"] = true;
}



$tdatatramites[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatramites[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatramites[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatramites[".isUseAjaxSuggest"] = true;





$tdatatramites[".ajaxCodeSnippetAdded"] = false;

$tdatatramites[".buttonsAdded"] = false;

$tdatatramites[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatramites[".isUseTimeForSearch"] = false;


$tdatatramites[".badgeColor"] = "3CB371";


$tdatatramites[".allSearchFields"] = array();
$tdatatramites[".filterFields"] = array();
$tdatatramites[".requiredSearchFields"] = array();

$tdatatramites[".googleLikeFields"] = array();
$tdatatramites[".googleLikeFields"][] = "TramiteId";
$tdatatramites[".googleLikeFields"][] = "Tramite";



$tdatatramites[".tableType"] = "list";

$tdatatramites[".printerPageOrientation"] = 0;
$tdatatramites[".nPrinterPageScale"] = 100;

$tdatatramites[".nPrinterSplitRecords"] = 40;

$tdatatramites[".geocodingEnabled"] = false;










$tdatatramites[".pageSize"] = 20;

$tdatatramites[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatramites[".strOrderBy"] = $tstrOrderBy;

$tdatatramites[".orderindexes"] = array();


$tdatatramites[".sqlHead"] = "SELECT TramiteId,  	Tramite";
$tdatatramites[".sqlFrom"] = "FROM dbo.Tramites";
$tdatatramites[".sqlWhereExpr"] = "";
$tdatatramites[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatramites[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatramites[".arrGroupsPerPage"] = $arrGPP;

$tdatatramites[".highlightSearchResults"] = true;

$tableKeystramites = array();
$tableKeystramites[] = "TramiteId";
$tdatatramites[".Keys"] = $tableKeystramites;


$tdatatramites[".hideMobileList"] = array();




//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "dbo.Tramites";
	$fdata["Label"] = GetFieldLabel("dbo_Tramites","TramiteId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TramiteId";

		$fdata["sourceSingle"] = "TramiteId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TramiteId";

	
	
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


	$tdatatramites["TramiteId"] = $fdata;
		$tdatatramites[".searchableFields"][] = "TramiteId";
//	Tramite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tramite";
	$fdata["GoodName"] = "Tramite";
	$fdata["ownerTable"] = "dbo.Tramites";
	$fdata["Label"] = GetFieldLabel("dbo_Tramites","Tramite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tramite";

		$fdata["sourceSingle"] = "Tramite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tramite";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatramites["Tramite"] = $fdata;
		$tdatatramites[".searchableFields"][] = "Tramite";


$tables_data["dbo.Tramites"]=&$tdatatramites;
$field_labels["dbo_Tramites"] = &$fieldLabelstramites;
$fieldToolTips["dbo_Tramites"] = &$fieldToolTipstramites;
$placeHolders["dbo_Tramites"] = &$placeHolderstramites;
$page_titles["dbo_Tramites"] = &$pageTitlestramites;


changeTextControlsToDate( "dbo.Tramites" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Tramites"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Tramites"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tramites()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TramiteId,  	Tramite";
$proto0["m_strFrom"] = "FROM dbo.Tramites";
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
	"m_strName" => "TramiteId",
	"m_strTable" => "dbo.Tramites",
	"m_srcTableName" => "dbo.Tramites"
));

$proto6["m_sql"] = "TramiteId";
$proto6["m_srcTableName"] = "dbo.Tramites";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tramite",
	"m_strTable" => "dbo.Tramites",
	"m_srcTableName" => "dbo.Tramites"
));

$proto8["m_sql"] = "Tramite";
$proto8["m_srcTableName"] = "dbo.Tramites";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Tramites";
$proto11["m_srcTableName"] = "dbo.Tramites";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TramiteId";
$proto11["m_columns"][] = "Tramite";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Tramites";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Tramites";
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
$proto0["m_srcTableName"]="dbo.Tramites";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tramites = createSqlQuery_tramites();


	
		;

		

$tdatatramites[".sqlquery"] = $queryData_tramites;



$tdatatramites[".hasEvents"] = false;

?>