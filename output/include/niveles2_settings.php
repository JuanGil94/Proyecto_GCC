<?php
$tdataniveles2 = array();
$tdataniveles2[".searchableFields"] = array();
$tdataniveles2[".ShortName"] = "niveles2";
$tdataniveles2[".OwnerID"] = "";
$tdataniveles2[".OriginalTable"] = "dbo.Niveles";


$tdataniveles2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataniveles2[".originalPagesByType"] = $tdataniveles2[".pagesByType"];
$tdataniveles2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataniveles2[".originalPages"] = $tdataniveles2[".pages"];
$tdataniveles2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataniveles2[".originalDefaultPages"] = $tdataniveles2[".defaultPages"];

//	field labels
$fieldLabelsniveles2 = array();
$fieldToolTipsniveles2 = array();
$pageTitlesniveles2 = array();
$placeHoldersniveles2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsniveles2["Spanish"] = array();
	$fieldToolTipsniveles2["Spanish"] = array();
	$placeHoldersniveles2["Spanish"] = array();
	$pageTitlesniveles2["Spanish"] = array();
	$fieldLabelsniveles2["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipsniveles2["Spanish"]["Nivel"] = "";
	$placeHoldersniveles2["Spanish"]["Nivel"] = "";
	if (count($fieldToolTipsniveles2["Spanish"]))
		$tdataniveles2[".isUseToolTips"] = true;
}


	$tdataniveles2[".NCSearch"] = true;



$tdataniveles2[".shortTableName"] = "niveles2";
$tdataniveles2[".nSecOptions"] = 0;

$tdataniveles2[".mainTableOwnerID"] = "";
$tdataniveles2[".entityType"] = 1;
$tdataniveles2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataniveles2[".strOriginalTableName"] = "dbo.Niveles";

	



$tdataniveles2[".showAddInPopup"] = false;

$tdataniveles2[".showEditInPopup"] = false;

$tdataniveles2[".showViewInPopup"] = false;

$tdataniveles2[".listAjax"] = false;
//	temporary
//$tdataniveles2[".listAjax"] = false;

	$tdataniveles2[".audit"] = true;

	$tdataniveles2[".locking"] = false;


$pages = $tdataniveles2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataniveles2[".edit"] = true;
	$tdataniveles2[".afterEditAction"] = 1;
	$tdataniveles2[".closePopupAfterEdit"] = 1;
	$tdataniveles2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataniveles2[".add"] = true;
$tdataniveles2[".afterAddAction"] = 1;
$tdataniveles2[".closePopupAfterAdd"] = 1;
$tdataniveles2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataniveles2[".list"] = true;
}



$tdataniveles2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataniveles2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataniveles2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataniveles2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataniveles2[".printFriendly"] = true;
}



$tdataniveles2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataniveles2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataniveles2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataniveles2[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdataniveles2[".ajaxCodeSnippetAdded"] = false;

$tdataniveles2[".buttonsAdded"] = false;

$tdataniveles2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataniveles2[".isUseTimeForSearch"] = false;


$tdataniveles2[".badgeColor"] = "3CB371";


$tdataniveles2[".allSearchFields"] = array();
$tdataniveles2[".filterFields"] = array();
$tdataniveles2[".requiredSearchFields"] = array();

$tdataniveles2[".googleLikeFields"] = array();
$tdataniveles2[".googleLikeFields"][] = "Nivel";



$tdataniveles2[".tableType"] = "list";

$tdataniveles2[".printerPageOrientation"] = 0;
$tdataniveles2[".nPrinterPageScale"] = 100;

$tdataniveles2[".nPrinterSplitRecords"] = 40;

$tdataniveles2[".geocodingEnabled"] = false;




$tdataniveles2[".isDisplayLoading"] = true;

$tdataniveles2[".isResizeColumns"] = true;





$tdataniveles2[".pageSize"] = 20;

$tdataniveles2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataniveles2[".strOrderBy"] = $tstrOrderBy;

$tdataniveles2[".orderindexes"] = array();


$tdataniveles2[".sqlHead"] = "SELECT  DISTINCT Nivel";
$tdataniveles2[".sqlFrom"] = "FROM dbo.Niveles";
$tdataniveles2[".sqlWhereExpr"] = "";
$tdataniveles2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataniveles2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataniveles2[".arrGroupsPerPage"] = $arrGPP;

$tdataniveles2[".highlightSearchResults"] = true;

$tableKeysniveles2 = array();
$tdataniveles2[".Keys"] = $tableKeysniveles2;


$tdataniveles2[".hideMobileList"] = array();




//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles2","Nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nivel";

		$fdata["sourceSingle"] = "Nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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


	$tdataniveles2["Nivel"] = $fdata;
		$tdataniveles2[".searchableFields"][] = "Nivel";


$tables_data["dbo.Niveles2"]=&$tdataniveles2;
$field_labels["dbo_Niveles2"] = &$fieldLabelsniveles2;
$fieldToolTips["dbo_Niveles2"] = &$fieldToolTipsniveles2;
$placeHolders["dbo_Niveles2"] = &$placeHoldersniveles2;
$page_titles["dbo_Niveles2"] = &$pageTitlesniveles2;


changeTextControlsToDate( "dbo.Niveles2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Niveles2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Niveles2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_niveles2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "Nivel";
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
	"m_strName" => "Nivel",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles2"
));

$proto6["m_sql"] = "Nivel";
$proto6["m_srcTableName"] = "dbo.Niveles2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Niveles";
$proto9["m_srcTableName"] = "dbo.Niveles2";
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
$proto8["m_srcTableName"] = "dbo.Niveles2";
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
$proto0["m_srcTableName"]="dbo.Niveles2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_niveles2 = createSqlQuery_niveles2();


	
		;

	

$tdataniveles2[".sqlquery"] = $queryData_niveles2;



$tdataniveles2[".hasEvents"] = false;

?>