<?php
$tdatatipotasas = array();
$tdatatipotasas[".searchableFields"] = array();
$tdatatipotasas[".ShortName"] = "tipotasas";
$tdatatipotasas[".OwnerID"] = "";
$tdatatipotasas[".OriginalTable"] = "dbo.tipoTasas";


$tdatatipotasas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipotasas[".originalPagesByType"] = $tdatatipotasas[".pagesByType"];
$tdatatipotasas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipotasas[".originalPages"] = $tdatatipotasas[".pages"];
$tdatatipotasas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipotasas[".originalDefaultPages"] = $tdatatipotasas[".defaultPages"];

//	field labels
$fieldLabelstipotasas = array();
$fieldToolTipstipotasas = array();
$pageTitlestipotasas = array();
$placeHolderstipotasas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipotasas["Spanish"] = array();
	$fieldToolTipstipotasas["Spanish"] = array();
	$placeHolderstipotasas["Spanish"] = array();
	$pageTitlestipotasas["Spanish"] = array();
	$fieldLabelstipotasas["Spanish"]["TipoId"] = "Tipo Id";
	$fieldToolTipstipotasas["Spanish"]["TipoId"] = "";
	$placeHolderstipotasas["Spanish"]["TipoId"] = "";
	$fieldLabelstipotasas["Spanish"]["TipoTasas"] = "Tipo Tasas";
	$fieldToolTipstipotasas["Spanish"]["TipoTasas"] = "";
	$placeHolderstipotasas["Spanish"]["TipoTasas"] = "";
	$pageTitlestipotasas["Spanish"]["add"] = "Tipo Tasas";
	$pageTitlestipotasas["Spanish"]["edit"] = "Tipo Tasas";
	if (count($fieldToolTipstipotasas["Spanish"]))
		$tdatatipotasas[".isUseToolTips"] = true;
}


	$tdatatipotasas[".NCSearch"] = true;



$tdatatipotasas[".shortTableName"] = "tipotasas";
$tdatatipotasas[".nSecOptions"] = 0;

$tdatatipotasas[".mainTableOwnerID"] = "";
$tdatatipotasas[".entityType"] = 0;
$tdatatipotasas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatipotasas[".strOriginalTableName"] = "dbo.tipoTasas";

	



$tdatatipotasas[".showAddInPopup"] = false;

$tdatatipotasas[".showEditInPopup"] = false;

$tdatatipotasas[".showViewInPopup"] = false;

$tdatatipotasas[".listAjax"] = false;
//	temporary
//$tdatatipotasas[".listAjax"] = false;

	$tdatatipotasas[".audit"] = false;

	$tdatatipotasas[".locking"] = false;


$pages = $tdatatipotasas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipotasas[".edit"] = true;
	$tdatatipotasas[".afterEditAction"] = 1;
	$tdatatipotasas[".closePopupAfterEdit"] = 1;
	$tdatatipotasas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipotasas[".add"] = true;
$tdatatipotasas[".afterAddAction"] = 1;
$tdatatipotasas[".closePopupAfterAdd"] = 1;
$tdatatipotasas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipotasas[".list"] = true;
}



$tdatatipotasas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipotasas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipotasas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipotasas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipotasas[".printFriendly"] = true;
}



$tdatatipotasas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipotasas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipotasas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipotasas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdatatipotasas[".ajaxCodeSnippetAdded"] = false;

$tdatatipotasas[".buttonsAdded"] = false;

$tdatatipotasas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipotasas[".isUseTimeForSearch"] = false;


$tdatatipotasas[".badgeColor"] = "5F9EA0";


$tdatatipotasas[".allSearchFields"] = array();
$tdatatipotasas[".filterFields"] = array();
$tdatatipotasas[".requiredSearchFields"] = array();

$tdatatipotasas[".googleLikeFields"] = array();
$tdatatipotasas[".googleLikeFields"][] = "TipoId";
$tdatatipotasas[".googleLikeFields"][] = "TipoTasas";



$tdatatipotasas[".tableType"] = "list";

$tdatatipotasas[".printerPageOrientation"] = 0;
$tdatatipotasas[".nPrinterPageScale"] = 100;

$tdatatipotasas[".nPrinterSplitRecords"] = 40;

$tdatatipotasas[".geocodingEnabled"] = false;




$tdatatipotasas[".isDisplayLoading"] = true;






$tdatatipotasas[".pageSize"] = 20;

$tdatatipotasas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipotasas[".strOrderBy"] = $tstrOrderBy;

$tdatatipotasas[".orderindexes"] = array();


$tdatatipotasas[".sqlHead"] = "SELECT TipoId,  	TipoTasas";
$tdatatipotasas[".sqlFrom"] = "FROM dbo.tipoTasas";
$tdatatipotasas[".sqlWhereExpr"] = "";
$tdatatipotasas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatipotasas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipotasas[".arrGroupsPerPage"] = $arrGPP;

$tdatatipotasas[".highlightSearchResults"] = true;

$tableKeystipotasas = array();
$tableKeystipotasas[] = "TipoId";
$tdatatipotasas[".Keys"] = $tableKeystipotasas;


$tdatatipotasas[".hideMobileList"] = array();




//	TipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoId";
	$fdata["GoodName"] = "TipoId";
	$fdata["ownerTable"] = "dbo.tipoTasas";
	$fdata["Label"] = GetFieldLabel("dbo_tipoTasas","TipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TipoId";

		$fdata["sourceSingle"] = "TipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoId";

	
	
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


	$tdatatipotasas["TipoId"] = $fdata;
		$tdatatipotasas[".searchableFields"][] = "TipoId";
//	TipoTasas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoTasas";
	$fdata["GoodName"] = "TipoTasas";
	$fdata["ownerTable"] = "dbo.tipoTasas";
	$fdata["Label"] = GetFieldLabel("dbo_tipoTasas","TipoTasas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoTasas";

		$fdata["sourceSingle"] = "TipoTasas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoTasas";

	
	
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


	$tdatatipotasas["TipoTasas"] = $fdata;
		$tdatatipotasas[".searchableFields"][] = "TipoTasas";


$tables_data["dbo.tipoTasas"]=&$tdatatipotasas;
$field_labels["dbo_tipoTasas"] = &$fieldLabelstipotasas;
$fieldToolTips["dbo_tipoTasas"] = &$fieldToolTipstipotasas;
$placeHolders["dbo_tipoTasas"] = &$placeHolderstipotasas;
$page_titles["dbo_tipoTasas"] = &$pageTitlestipotasas;


changeTextControlsToDate( "dbo.tipoTasas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.tipoTasas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.tipoTasas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipotasas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoId,  	TipoTasas";
$proto0["m_strFrom"] = "FROM dbo.tipoTasas";
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
	"m_strName" => "TipoId",
	"m_strTable" => "dbo.tipoTasas",
	"m_srcTableName" => "dbo.tipoTasas"
));

$proto6["m_sql"] = "TipoId";
$proto6["m_srcTableName"] = "dbo.tipoTasas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTasas",
	"m_strTable" => "dbo.tipoTasas",
	"m_srcTableName" => "dbo.tipoTasas"
));

$proto8["m_sql"] = "TipoTasas";
$proto8["m_srcTableName"] = "dbo.tipoTasas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.tipoTasas";
$proto11["m_srcTableName"] = "dbo.tipoTasas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TipoId";
$proto11["m_columns"][] = "TipoTasas";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.tipoTasas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.tipoTasas";
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
$proto0["m_srcTableName"]="dbo.tipoTasas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipotasas = createSqlQuery_tipotasas();


	
		;

		

$tdatatipotasas[".sqlquery"] = $queryData_tipotasas;



$tdatatipotasas[".hasEvents"] = false;

?>