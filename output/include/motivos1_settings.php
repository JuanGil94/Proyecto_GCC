<?php
$tdatamotivos1 = array();
$tdatamotivos1[".searchableFields"] = array();
$tdatamotivos1[".ShortName"] = "motivos1";
$tdatamotivos1[".OwnerID"] = "";
$tdatamotivos1[".OriginalTable"] = "dbo.Motivos";


$tdatamotivos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamotivos1[".originalPagesByType"] = $tdatamotivos1[".pagesByType"];
$tdatamotivos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamotivos1[".originalPages"] = $tdatamotivos1[".pages"];
$tdatamotivos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamotivos1[".originalDefaultPages"] = $tdatamotivos1[".defaultPages"];

//	field labels
$fieldLabelsmotivos1 = array();
$fieldToolTipsmotivos1 = array();
$pageTitlesmotivos1 = array();
$placeHoldersmotivos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmotivos1["Spanish"] = array();
	$fieldToolTipsmotivos1["Spanish"] = array();
	$placeHoldersmotivos1["Spanish"] = array();
	$pageTitlesmotivos1["Spanish"] = array();
	$fieldLabelsmotivos1["Spanish"]["MotivoId"] = "Motivo Id";
	$fieldToolTipsmotivos1["Spanish"]["MotivoId"] = "";
	$placeHoldersmotivos1["Spanish"]["MotivoId"] = "";
	$fieldLabelsmotivos1["Spanish"]["Motivo"] = "Motivo";
	$fieldToolTipsmotivos1["Spanish"]["Motivo"] = "";
	$placeHoldersmotivos1["Spanish"]["Motivo"] = "";
	$pageTitlesmotivos1["Spanish"]["add"] = "Motivos1";
	$pageTitlesmotivos1["Spanish"]["edit"] = "Motivos1";
	if (count($fieldToolTipsmotivos1["Spanish"]))
		$tdatamotivos1[".isUseToolTips"] = true;
}


	$tdatamotivos1[".NCSearch"] = true;



$tdatamotivos1[".shortTableName"] = "motivos1";
$tdatamotivos1[".nSecOptions"] = 0;

$tdatamotivos1[".mainTableOwnerID"] = "";
$tdatamotivos1[".entityType"] = 1;
$tdatamotivos1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamotivos1[".strOriginalTableName"] = "dbo.Motivos";

	



$tdatamotivos1[".showAddInPopup"] = false;

$tdatamotivos1[".showEditInPopup"] = false;

$tdatamotivos1[".showViewInPopup"] = false;

$tdatamotivos1[".listAjax"] = false;
//	temporary
//$tdatamotivos1[".listAjax"] = false;

	$tdatamotivos1[".audit"] = false;

	$tdatamotivos1[".locking"] = false;


$pages = $tdatamotivos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamotivos1[".edit"] = true;
	$tdatamotivos1[".afterEditAction"] = 1;
	$tdatamotivos1[".closePopupAfterEdit"] = 1;
	$tdatamotivos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamotivos1[".add"] = true;
$tdatamotivos1[".afterAddAction"] = 1;
$tdatamotivos1[".closePopupAfterAdd"] = 1;
$tdatamotivos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamotivos1[".list"] = true;
}



$tdatamotivos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamotivos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamotivos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamotivos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamotivos1[".printFriendly"] = true;
}



$tdatamotivos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamotivos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamotivos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamotivos1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																									

$tdatamotivos1[".ajaxCodeSnippetAdded"] = false;

$tdatamotivos1[".buttonsAdded"] = false;

$tdatamotivos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamotivos1[".isUseTimeForSearch"] = false;


$tdatamotivos1[".badgeColor"] = "5F9EA0";


$tdatamotivos1[".allSearchFields"] = array();
$tdatamotivos1[".filterFields"] = array();
$tdatamotivos1[".requiredSearchFields"] = array();

$tdatamotivos1[".googleLikeFields"] = array();
$tdatamotivos1[".googleLikeFields"][] = "MotivoId";
$tdatamotivos1[".googleLikeFields"][] = "Motivo";



$tdatamotivos1[".tableType"] = "list";

$tdatamotivos1[".printerPageOrientation"] = 0;
$tdatamotivos1[".nPrinterPageScale"] = 100;

$tdatamotivos1[".nPrinterSplitRecords"] = 40;

$tdatamotivos1[".geocodingEnabled"] = false;




$tdatamotivos1[".isDisplayLoading"] = true;

$tdatamotivos1[".isResizeColumns"] = true;





$tdatamotivos1[".pageSize"] = 20;

$tdatamotivos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamotivos1[".strOrderBy"] = $tstrOrderBy;

$tdatamotivos1[".orderindexes"] = array();


$tdatamotivos1[".sqlHead"] = "SELECT 0 AS [MotivoId],       ' ' AS [Motivo]  UNION ALL   SELECT   *";
$tdatamotivos1[".sqlFrom"] = "FROM dbo.Motivos";
$tdatamotivos1[".sqlWhereExpr"] = "";
$tdatamotivos1[".sqlTail"] = "";

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
$tdatamotivos1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatamotivos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamotivos1[".arrGroupsPerPage"] = $arrGPP;

$tdatamotivos1[".highlightSearchResults"] = true;

$tableKeysmotivos1 = array();
$tableKeysmotivos1[] = "MotivoId";
$tdatamotivos1[".Keys"] = $tableKeysmotivos1;


$tdatamotivos1[".hideMobileList"] = array();




//	MotivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MotivoId";
	$fdata["GoodName"] = "MotivoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Motivos1","MotivoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MotivoId";

		$fdata["sourceSingle"] = "MotivoId";

		$fdata["FullName"] = "MotivoId";

	
	
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


	$tdatamotivos1["MotivoId"] = $fdata;
		$tdatamotivos1[".searchableFields"][] = "MotivoId";
//	Motivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Motivo";
	$fdata["GoodName"] = "Motivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Motivos1","Motivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Motivo";

		$fdata["sourceSingle"] = "Motivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "' ' AS [Motivo]  UNION ALL   SELECT   *";

	
	
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


	$tdatamotivos1["Motivo"] = $fdata;
		$tdatamotivos1[".searchableFields"][] = "Motivo";


$tables_data["dbo.Motivos1"]=&$tdatamotivos1;
$field_labels["dbo_Motivos1"] = &$fieldLabelsmotivos1;
$fieldToolTips["dbo_Motivos1"] = &$fieldToolTipsmotivos1;
$placeHolders["dbo_Motivos1"] = &$placeHoldersmotivos1;
$page_titles["dbo_Motivos1"] = &$pageTitlesmotivos1;


changeTextControlsToDate( "dbo.Motivos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Motivos1"] = array();
//	dbo.Procesos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Motivos1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Motivos1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Motivos1"][$dIndex]["masterKeys"][]="MotivoId";

				$detailsTablesData["dbo.Motivos1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Motivos1"][$dIndex]["detailKeys"][]="MotivoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Motivos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_motivos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "0 AS [MotivoId],       ' ' AS [Motivo]  UNION ALL   SELECT   *";
$proto0["m_strFrom"] = "FROM dbo.Motivos";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto6["m_sql"] = "0";
$proto6["m_srcTableName"] = "dbo.Motivos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "MotivoId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' AS [Motivo]  UNION ALL   SELECT   *"
));

$proto8["m_sql"] = "' ' AS [Motivo]  UNION ALL   SELECT   *";
$proto8["m_srcTableName"] = "dbo.Motivos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Motivos";
$proto11["m_srcTableName"] = "dbo.Motivos1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MotivoId";
$proto11["m_columns"][] = "Motivo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Motivos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Motivos1";
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
$proto0["m_srcTableName"]="dbo.Motivos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_motivos1 = createSqlQuery_motivos1();


	
		;

		

$tdatamotivos1[".sqlquery"] = $queryData_motivos1;



$tdatamotivos1[".hasEvents"] = false;

?>