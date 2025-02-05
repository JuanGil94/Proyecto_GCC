<?php
$tdataniveles1 = array();
$tdataniveles1[".searchableFields"] = array();
$tdataniveles1[".ShortName"] = "niveles1";
$tdataniveles1[".OwnerID"] = "";
$tdataniveles1[".OriginalTable"] = "dbo.Niveles";


$tdataniveles1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataniveles1[".originalPagesByType"] = $tdataniveles1[".pagesByType"];
$tdataniveles1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataniveles1[".originalPages"] = $tdataniveles1[".pages"];
$tdataniveles1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataniveles1[".originalDefaultPages"] = $tdataniveles1[".defaultPages"];

//	field labels
$fieldLabelsniveles1 = array();
$fieldToolTipsniveles1 = array();
$pageTitlesniveles1 = array();
$placeHoldersniveles1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsniveles1["Spanish"] = array();
	$fieldToolTipsniveles1["Spanish"] = array();
	$placeHoldersniveles1["Spanish"] = array();
	$pageTitlesniveles1["Spanish"] = array();
	$fieldLabelsniveles1["Spanish"]["Clasificacion"] = "Clasificacion";
	$fieldToolTipsniveles1["Spanish"]["Clasificacion"] = "";
	$placeHoldersniveles1["Spanish"]["Clasificacion"] = "";
	if (count($fieldToolTipsniveles1["Spanish"]))
		$tdataniveles1[".isUseToolTips"] = true;
}


	$tdataniveles1[".NCSearch"] = true;



$tdataniveles1[".shortTableName"] = "niveles1";
$tdataniveles1[".nSecOptions"] = 0;

$tdataniveles1[".mainTableOwnerID"] = "";
$tdataniveles1[".entityType"] = 1;
$tdataniveles1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataniveles1[".strOriginalTableName"] = "dbo.Niveles";

	



$tdataniveles1[".showAddInPopup"] = false;

$tdataniveles1[".showEditInPopup"] = false;

$tdataniveles1[".showViewInPopup"] = false;

$tdataniveles1[".listAjax"] = false;
//	temporary
//$tdataniveles1[".listAjax"] = false;

	$tdataniveles1[".audit"] = true;

	$tdataniveles1[".locking"] = false;


$pages = $tdataniveles1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataniveles1[".edit"] = true;
	$tdataniveles1[".afterEditAction"] = 1;
	$tdataniveles1[".closePopupAfterEdit"] = 1;
	$tdataniveles1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataniveles1[".add"] = true;
$tdataniveles1[".afterAddAction"] = 1;
$tdataniveles1[".closePopupAfterAdd"] = 1;
$tdataniveles1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataniveles1[".list"] = true;
}



$tdataniveles1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataniveles1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataniveles1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataniveles1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataniveles1[".printFriendly"] = true;
}



$tdataniveles1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataniveles1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataniveles1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataniveles1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																			

$tdataniveles1[".ajaxCodeSnippetAdded"] = false;

$tdataniveles1[".buttonsAdded"] = false;

$tdataniveles1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataniveles1[".isUseTimeForSearch"] = false;


$tdataniveles1[".badgeColor"] = "CD5C5C";


$tdataniveles1[".allSearchFields"] = array();
$tdataniveles1[".filterFields"] = array();
$tdataniveles1[".requiredSearchFields"] = array();

$tdataniveles1[".googleLikeFields"] = array();
$tdataniveles1[".googleLikeFields"][] = "Clasificacion";



$tdataniveles1[".tableType"] = "list";

$tdataniveles1[".printerPageOrientation"] = 0;
$tdataniveles1[".nPrinterPageScale"] = 100;

$tdataniveles1[".nPrinterSplitRecords"] = 40;

$tdataniveles1[".geocodingEnabled"] = false;




$tdataniveles1[".isDisplayLoading"] = true;

$tdataniveles1[".isResizeColumns"] = true;





$tdataniveles1[".pageSize"] = 20;

$tdataniveles1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataniveles1[".strOrderBy"] = $tstrOrderBy;

$tdataniveles1[".orderindexes"] = array();


$tdataniveles1[".sqlHead"] = "SELECT  	DISTINCT Clasificacion";
$tdataniveles1[".sqlFrom"] = "FROM dbo.Niveles";
$tdataniveles1[".sqlWhereExpr"] = "";
$tdataniveles1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataniveles1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataniveles1[".arrGroupsPerPage"] = $arrGPP;

$tdataniveles1[".highlightSearchResults"] = true;

$tableKeysniveles1 = array();
$tdataniveles1[".Keys"] = $tableKeysniveles1;


$tdataniveles1[".hideMobileList"] = array();




//	Clasificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clasificacion";
	$fdata["GoodName"] = "Clasificacion";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles1","Clasificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clasificacion";

		$fdata["sourceSingle"] = "Clasificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clasificacion";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Niveles";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Clasificacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Clasificacion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataniveles1["Clasificacion"] = $fdata;
		$tdataniveles1[".searchableFields"][] = "Clasificacion";


$tables_data["dbo.Niveles1"]=&$tdataniveles1;
$field_labels["dbo_Niveles1"] = &$fieldLabelsniveles1;
$fieldToolTips["dbo_Niveles1"] = &$fieldToolTipsniveles1;
$placeHolders["dbo_Niveles1"] = &$placeHoldersniveles1;
$page_titles["dbo_Niveles1"] = &$pageTitlesniveles1;


changeTextControlsToDate( "dbo.Niveles1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Niveles1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Niveles1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_niveles1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  	DISTINCT";
$proto0["m_strFieldList"] = "Clasificacion";
$proto0["m_strFrom"] = "FROM dbo.Niveles";
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
	"m_strName" => "Clasificacion",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles1"
));

$proto6["m_sql"] = "Clasificacion";
$proto6["m_srcTableName"] = "dbo.Niveles1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Niveles";
$proto9["m_srcTableName"] = "dbo.Niveles1";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "NivelId";
$proto9["m_columns"][] = "Nivel";
$proto9["m_columns"][] = "Desde";
$proto9["m_columns"][] = "Hasta";
$proto9["m_columns"][] = "Busqueda";
$proto9["m_columns"][] = "Antiguedad";
$proto9["m_columns"][] = "Clasificacion";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Niveles";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Niveles1";
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
$proto0["m_srcTableName"]="dbo.Niveles1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_niveles1 = createSqlQuery_niveles1();


	
		;

	

$tdataniveles1[".sqlquery"] = $queryData_niveles1;



$tdataniveles1[".hasEvents"] = false;

?>