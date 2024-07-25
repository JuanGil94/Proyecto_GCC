<?php
$tdatauvts = array();
$tdatauvts[".searchableFields"] = array();
$tdatauvts[".ShortName"] = "uvts";
$tdatauvts[".OwnerID"] = "";
$tdatauvts[".OriginalTable"] = "dbo.Uvts";


$tdatauvts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatauvts[".originalPagesByType"] = $tdatauvts[".pagesByType"];
$tdatauvts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatauvts[".originalPages"] = $tdatauvts[".pages"];
$tdatauvts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatauvts[".originalDefaultPages"] = $tdatauvts[".defaultPages"];

//	field labels
$fieldLabelsuvts = array();
$fieldToolTipsuvts = array();
$pageTitlesuvts = array();
$placeHoldersuvts = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsuvts["Spanish"] = array();
	$fieldToolTipsuvts["Spanish"] = array();
	$placeHoldersuvts["Spanish"] = array();
	$pageTitlesuvts["Spanish"] = array();
	$fieldLabelsuvts["Spanish"]["UvtId"] = "Uvt Id";
	$fieldToolTipsuvts["Spanish"]["UvtId"] = "";
	$placeHoldersuvts["Spanish"]["UvtId"] = "";
	$fieldLabelsuvts["Spanish"]["Ano"] = "Año";
	$fieldToolTipsuvts["Spanish"]["Ano"] = "";
	$placeHoldersuvts["Spanish"]["Ano"] = "";
	$fieldLabelsuvts["Spanish"]["Uvt"] = "Uvt";
	$fieldToolTipsuvts["Spanish"]["Uvt"] = "";
	$placeHoldersuvts["Spanish"]["Uvt"] = "";
	if (count($fieldToolTipsuvts["Spanish"]))
		$tdatauvts[".isUseToolTips"] = true;
}


	$tdatauvts[".NCSearch"] = true;



$tdatauvts[".shortTableName"] = "uvts";
$tdatauvts[".nSecOptions"] = 0;

$tdatauvts[".mainTableOwnerID"] = "";
$tdatauvts[".entityType"] = 0;
$tdatauvts[".connId"] = "GCC_at_S00001_CCAD01";


$tdatauvts[".strOriginalTableName"] = "dbo.Uvts";

	



$tdatauvts[".showAddInPopup"] = false;

$tdatauvts[".showEditInPopup"] = false;

$tdatauvts[".showViewInPopup"] = false;

$tdatauvts[".listAjax"] = false;
//	temporary
//$tdatauvts[".listAjax"] = false;

	$tdatauvts[".audit"] = true;

	$tdatauvts[".locking"] = false;


$pages = $tdatauvts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauvts[".edit"] = true;
	$tdatauvts[".afterEditAction"] = 1;
	$tdatauvts[".closePopupAfterEdit"] = 1;
	$tdatauvts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauvts[".add"] = true;
$tdatauvts[".afterAddAction"] = 1;
$tdatauvts[".closePopupAfterAdd"] = 1;
$tdatauvts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauvts[".list"] = true;
}



$tdatauvts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauvts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauvts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauvts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauvts[".printFriendly"] = true;
}



$tdatauvts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauvts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauvts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauvts[".isUseAjaxSuggest"] = true;



																																																																																													

$tdatauvts[".ajaxCodeSnippetAdded"] = false;

$tdatauvts[".buttonsAdded"] = false;

$tdatauvts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauvts[".isUseTimeForSearch"] = false;


$tdatauvts[".badgeColor"] = "778899";


$tdatauvts[".allSearchFields"] = array();
$tdatauvts[".filterFields"] = array();
$tdatauvts[".requiredSearchFields"] = array();

$tdatauvts[".googleLikeFields"] = array();
$tdatauvts[".googleLikeFields"][] = "UvtId";
$tdatauvts[".googleLikeFields"][] = "Ano";
$tdatauvts[".googleLikeFields"][] = "Uvt";



$tdatauvts[".tableType"] = "list";

$tdatauvts[".printerPageOrientation"] = 0;
$tdatauvts[".nPrinterPageScale"] = 100;

$tdatauvts[".nPrinterSplitRecords"] = 40;

$tdatauvts[".geocodingEnabled"] = false;





$tdatauvts[".isResizeColumns"] = true;





$tdatauvts[".pageSize"] = 20;

$tdatauvts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatauvts[".strOrderBy"] = $tstrOrderBy;

$tdatauvts[".orderindexes"] = array();


$tdatauvts[".sqlHead"] = "SELECT UvtId,  	Ano,  	Uvt";
$tdatauvts[".sqlFrom"] = "FROM dbo.Uvts";
$tdatauvts[".sqlWhereExpr"] = "";
$tdatauvts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauvts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauvts[".arrGroupsPerPage"] = $arrGPP;

$tdatauvts[".highlightSearchResults"] = true;

$tableKeysuvts = array();
$tableKeysuvts[] = "UvtId";
$tdatauvts[".Keys"] = $tableKeysuvts;


$tdatauvts[".hideMobileList"] = array();




//	UvtId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UvtId";
	$fdata["GoodName"] = "UvtId";
	$fdata["ownerTable"] = "dbo.Uvts";
	$fdata["Label"] = GetFieldLabel("dbo_Uvts","UvtId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "UvtId";

		$fdata["sourceSingle"] = "UvtId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UvtId";

	
	
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


	$tdatauvts["UvtId"] = $fdata;
		$tdatauvts[".searchableFields"][] = "UvtId";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "dbo.Uvts";
	$fdata["Label"] = GetFieldLabel("dbo_Uvts","Ano");
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


	$tdatauvts["Ano"] = $fdata;
		$tdatauvts[".searchableFields"][] = "Ano";
//	Uvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Uvt";
	$fdata["GoodName"] = "Uvt";
	$fdata["ownerTable"] = "dbo.Uvts";
	$fdata["Label"] = GetFieldLabel("dbo_Uvts","Uvt");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Uvt";

		$fdata["sourceSingle"] = "Uvt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Uvt";

	
	
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


	$tdatauvts["Uvt"] = $fdata;
		$tdatauvts[".searchableFields"][] = "Uvt";


$tables_data["dbo.Uvts"]=&$tdatauvts;
$field_labels["dbo_Uvts"] = &$fieldLabelsuvts;
$fieldToolTips["dbo_Uvts"] = &$fieldToolTipsuvts;
$placeHolders["dbo_Uvts"] = &$placeHoldersuvts;
$page_titles["dbo_Uvts"] = &$pageTitlesuvts;


changeTextControlsToDate( "dbo.Uvts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Uvts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Uvts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_uvts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UvtId,  	Ano,  	Uvt";
$proto0["m_strFrom"] = "FROM dbo.Uvts";
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
	"m_strName" => "UvtId",
	"m_strTable" => "dbo.Uvts",
	"m_srcTableName" => "dbo.Uvts"
));

$proto6["m_sql"] = "UvtId";
$proto6["m_srcTableName"] = "dbo.Uvts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Uvts",
	"m_srcTableName" => "dbo.Uvts"
));

$proto8["m_sql"] = "Ano";
$proto8["m_srcTableName"] = "dbo.Uvts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Uvt",
	"m_strTable" => "dbo.Uvts",
	"m_srcTableName" => "dbo.Uvts"
));

$proto10["m_sql"] = "Uvt";
$proto10["m_srcTableName"] = "dbo.Uvts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Uvts";
$proto13["m_srcTableName"] = "dbo.Uvts";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UvtId";
$proto13["m_columns"][] = "Ano";
$proto13["m_columns"][] = "Uvt";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Uvts";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Uvts";
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
$proto0["m_srcTableName"]="dbo.Uvts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_uvts = createSqlQuery_uvts();


	
		;

			

$tdatauvts[".sqlquery"] = $queryData_uvts;



$tdatauvts[".hasEvents"] = false;

?>