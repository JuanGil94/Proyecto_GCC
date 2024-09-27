<?php
$tdatapresupuestos1 = array();
$tdatapresupuestos1[".searchableFields"] = array();
$tdatapresupuestos1[".ShortName"] = "presupuestos1";
$tdatapresupuestos1[".OwnerID"] = "";
$tdatapresupuestos1[".OriginalTable"] = "dbo.Presupuestos";


$tdatapresupuestos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapresupuestos1[".originalPagesByType"] = $tdatapresupuestos1[".pagesByType"];
$tdatapresupuestos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapresupuestos1[".originalPages"] = $tdatapresupuestos1[".pages"];
$tdatapresupuestos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapresupuestos1[".originalDefaultPages"] = $tdatapresupuestos1[".defaultPages"];

//	field labels
$fieldLabelspresupuestos1 = array();
$fieldToolTipspresupuestos1 = array();
$pageTitlespresupuestos1 = array();
$placeHolderspresupuestos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspresupuestos1["Spanish"] = array();
	$fieldToolTipspresupuestos1["Spanish"] = array();
	$placeHolderspresupuestos1["Spanish"] = array();
	$pageTitlespresupuestos1["Spanish"] = array();
	$fieldLabelspresupuestos1["Spanish"]["Ano"] = "Ano";
	$fieldToolTipspresupuestos1["Spanish"]["Ano"] = "";
	$placeHolderspresupuestos1["Spanish"]["Ano"] = "";
	if (count($fieldToolTipspresupuestos1["Spanish"]))
		$tdatapresupuestos1[".isUseToolTips"] = true;
}


	$tdatapresupuestos1[".NCSearch"] = true;



$tdatapresupuestos1[".shortTableName"] = "presupuestos1";
$tdatapresupuestos1[".nSecOptions"] = 0;

$tdatapresupuestos1[".mainTableOwnerID"] = "";
$tdatapresupuestos1[".entityType"] = 1;
$tdatapresupuestos1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapresupuestos1[".strOriginalTableName"] = "dbo.Presupuestos";

	



$tdatapresupuestos1[".showAddInPopup"] = false;

$tdatapresupuestos1[".showEditInPopup"] = false;

$tdatapresupuestos1[".showViewInPopup"] = false;

$tdatapresupuestos1[".listAjax"] = false;
//	temporary
//$tdatapresupuestos1[".listAjax"] = false;

	$tdatapresupuestos1[".audit"] = true;

	$tdatapresupuestos1[".locking"] = false;


$pages = $tdatapresupuestos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapresupuestos1[".edit"] = true;
	$tdatapresupuestos1[".afterEditAction"] = 1;
	$tdatapresupuestos1[".closePopupAfterEdit"] = 1;
	$tdatapresupuestos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapresupuestos1[".add"] = true;
$tdatapresupuestos1[".afterAddAction"] = 1;
$tdatapresupuestos1[".closePopupAfterAdd"] = 1;
$tdatapresupuestos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapresupuestos1[".list"] = true;
}



$tdatapresupuestos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapresupuestos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapresupuestos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapresupuestos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapresupuestos1[".printFriendly"] = true;
}



$tdatapresupuestos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapresupuestos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapresupuestos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapresupuestos1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																		

$tdatapresupuestos1[".ajaxCodeSnippetAdded"] = false;

$tdatapresupuestos1[".buttonsAdded"] = false;

$tdatapresupuestos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapresupuestos1[".isUseTimeForSearch"] = false;


$tdatapresupuestos1[".badgeColor"] = "DAA520";


$tdatapresupuestos1[".allSearchFields"] = array();
$tdatapresupuestos1[".filterFields"] = array();
$tdatapresupuestos1[".requiredSearchFields"] = array();

$tdatapresupuestos1[".googleLikeFields"] = array();
$tdatapresupuestos1[".googleLikeFields"][] = "Ano";



$tdatapresupuestos1[".tableType"] = "list";

$tdatapresupuestos1[".printerPageOrientation"] = 0;
$tdatapresupuestos1[".nPrinterPageScale"] = 100;

$tdatapresupuestos1[".nPrinterSplitRecords"] = 40;

$tdatapresupuestos1[".geocodingEnabled"] = false;





$tdatapresupuestos1[".isResizeColumns"] = true;





$tdatapresupuestos1[".pageSize"] = 20;

$tdatapresupuestos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapresupuestos1[".strOrderBy"] = $tstrOrderBy;

$tdatapresupuestos1[".orderindexes"] = array();


$tdatapresupuestos1[".sqlHead"] = "SELECT YEAR(GETDATE())AS [Ano]  union all  select   DISTINCT Ano";
$tdatapresupuestos1[".sqlFrom"] = "FROM dbo.Presupuestos";
$tdatapresupuestos1[".sqlWhereExpr"] = "";
$tdatapresupuestos1[".sqlTail"] = "";

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
$tdatapresupuestos1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapresupuestos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapresupuestos1[".arrGroupsPerPage"] = $arrGPP;

$tdatapresupuestos1[".highlightSearchResults"] = true;

$tableKeyspresupuestos1 = array();
$tdatapresupuestos1[".Keys"] = $tableKeyspresupuestos1;


$tdatapresupuestos1[".hideMobileList"] = array();




//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos1","Ano");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Ano";

		$fdata["sourceSingle"] = "Ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "YEAR(GETDATE())AS [Ano]  union all  select   DISTINCT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "PresupuestoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapresupuestos1["Ano"] = $fdata;
		$tdatapresupuestos1[".searchableFields"][] = "Ano";


$tables_data["dbo.Presupuestos1"]=&$tdatapresupuestos1;
$field_labels["dbo_Presupuestos1"] = &$fieldLabelspresupuestos1;
$fieldToolTips["dbo_Presupuestos1"] = &$fieldToolTipspresupuestos1;
$placeHolders["dbo_Presupuestos1"] = &$placeHolderspresupuestos1;
$page_titles["dbo_Presupuestos1"] = &$pageTitlespresupuestos1;


changeTextControlsToDate( "dbo.Presupuestos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Presupuestos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Presupuestos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_presupuestos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "YEAR(GETDATE())AS [Ano]  union all  select   DISTINCT Ano";
$proto0["m_strFrom"] = "FROM dbo.Presupuestos";
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
	"m_sql" => "YEAR(GETDATE())AS [Ano]  union all  select   DISTINCT"
));

$proto6["m_sql"] = "YEAR(GETDATE())AS [Ano]  union all  select   DISTINCT";
$proto6["m_srcTableName"] = "dbo.Presupuestos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Ano";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Presupuestos";
$proto9["m_srcTableName"] = "dbo.Presupuestos1";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "PresupuestoId";
$proto9["m_columns"][] = "Ano";
$proto9["m_columns"][] = "SeccionalId";
$proto9["m_columns"][] = "Meta";
$proto9["m_columns"][] = "Procesos";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Presupuestos";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Presupuestos1";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Presupuestos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_presupuestos1 = createSqlQuery_presupuestos1();


	
		;

	

$tdatapresupuestos1[".sqlquery"] = $queryData_presupuestos1;



$tdatapresupuestos1[".hasEvents"] = false;

?>