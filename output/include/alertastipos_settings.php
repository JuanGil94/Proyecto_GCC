<?php
$tdataalertastipos = array();
$tdataalertastipos[".searchableFields"] = array();
$tdataalertastipos[".ShortName"] = "alertastipos";
$tdataalertastipos[".OwnerID"] = "";
$tdataalertastipos[".OriginalTable"] = "dbo.AlertasTipos";


$tdataalertastipos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertastipos[".originalPagesByType"] = $tdataalertastipos[".pagesByType"];
$tdataalertastipos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertastipos[".originalPages"] = $tdataalertastipos[".pages"];
$tdataalertastipos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertastipos[".originalDefaultPages"] = $tdataalertastipos[".defaultPages"];

//	field labels
$fieldLabelsalertastipos = array();
$fieldToolTipsalertastipos = array();
$pageTitlesalertastipos = array();
$placeHoldersalertastipos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertastipos["Spanish"] = array();
	$fieldToolTipsalertastipos["Spanish"] = array();
	$placeHoldersalertastipos["Spanish"] = array();
	$pageTitlesalertastipos["Spanish"] = array();
	$fieldLabelsalertastipos["Spanish"]["AlertaTipoId"] = "Alerta Tipo Id";
	$fieldToolTipsalertastipos["Spanish"]["AlertaTipoId"] = "";
	$placeHoldersalertastipos["Spanish"]["AlertaTipoId"] = "";
	$fieldLabelsalertastipos["Spanish"]["AlertaTipo"] = "Alerta Tipo";
	$fieldToolTipsalertastipos["Spanish"]["AlertaTipo"] = "";
	$placeHoldersalertastipos["Spanish"]["AlertaTipo"] = "";
	if (count($fieldToolTipsalertastipos["Spanish"]))
		$tdataalertastipos[".isUseToolTips"] = true;
}


	$tdataalertastipos[".NCSearch"] = true;



$tdataalertastipos[".shortTableName"] = "alertastipos";
$tdataalertastipos[".nSecOptions"] = 0;

$tdataalertastipos[".mainTableOwnerID"] = "";
$tdataalertastipos[".entityType"] = 0;
$tdataalertastipos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertastipos[".strOriginalTableName"] = "dbo.AlertasTipos";

	



$tdataalertastipos[".showAddInPopup"] = false;

$tdataalertastipos[".showEditInPopup"] = false;

$tdataalertastipos[".showViewInPopup"] = false;

$tdataalertastipos[".listAjax"] = false;
//	temporary
//$tdataalertastipos[".listAjax"] = false;

	$tdataalertastipos[".audit"] = false;

	$tdataalertastipos[".locking"] = false;


$pages = $tdataalertastipos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertastipos[".edit"] = true;
	$tdataalertastipos[".afterEditAction"] = 1;
	$tdataalertastipos[".closePopupAfterEdit"] = 1;
	$tdataalertastipos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertastipos[".add"] = true;
$tdataalertastipos[".afterAddAction"] = 1;
$tdataalertastipos[".closePopupAfterAdd"] = 1;
$tdataalertastipos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertastipos[".list"] = true;
}



$tdataalertastipos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertastipos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertastipos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertastipos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertastipos[".printFriendly"] = true;
}



$tdataalertastipos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertastipos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertastipos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertastipos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataalertastipos[".ajaxCodeSnippetAdded"] = false;

$tdataalertastipos[".buttonsAdded"] = false;

$tdataalertastipos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalertastipos[".isUseTimeForSearch"] = false;


$tdataalertastipos[".badgeColor"] = "8FBC8B";


$tdataalertastipos[".allSearchFields"] = array();
$tdataalertastipos[".filterFields"] = array();
$tdataalertastipos[".requiredSearchFields"] = array();

$tdataalertastipos[".googleLikeFields"] = array();
$tdataalertastipos[".googleLikeFields"][] = "AlertaTipo";



$tdataalertastipos[".tableType"] = "list";

$tdataalertastipos[".printerPageOrientation"] = 0;
$tdataalertastipos[".nPrinterPageScale"] = 100;

$tdataalertastipos[".nPrinterSplitRecords"] = 40;

$tdataalertastipos[".geocodingEnabled"] = false;





$tdataalertastipos[".isResizeColumns"] = true;





$tdataalertastipos[".pageSize"] = 20;

$tdataalertastipos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertastipos[".strOrderBy"] = $tstrOrderBy;

$tdataalertastipos[".orderindexes"] = array();


$tdataalertastipos[".sqlHead"] = "SELECT AlertaTipoId,  	AlertaTipo";
$tdataalertastipos[".sqlFrom"] = "FROM dbo.AlertasTipos";
$tdataalertastipos[".sqlWhereExpr"] = "";
$tdataalertastipos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalertastipos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertastipos[".arrGroupsPerPage"] = $arrGPP;

$tdataalertastipos[".highlightSearchResults"] = true;

$tableKeysalertastipos = array();
$tableKeysalertastipos[] = "AlertaTipoId";
$tdataalertastipos[".Keys"] = $tableKeysalertastipos;


$tdataalertastipos[".hideMobileList"] = array();




//	AlertaTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AlertaTipoId";
	$fdata["GoodName"] = "AlertaTipoId";
	$fdata["ownerTable"] = "dbo.AlertasTipos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasTipos","AlertaTipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AlertaTipoId";

		$fdata["sourceSingle"] = "AlertaTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaTipoId";

	
	
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


	$tdataalertastipos["AlertaTipoId"] = $fdata;
		$tdataalertastipos[".searchableFields"][] = "AlertaTipoId";
//	AlertaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AlertaTipo";
	$fdata["GoodName"] = "AlertaTipo";
	$fdata["ownerTable"] = "dbo.AlertasTipos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasTipos","AlertaTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AlertaTipo";

		$fdata["sourceSingle"] = "AlertaTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaTipo";

	
	
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


	$tdataalertastipos["AlertaTipo"] = $fdata;
		$tdataalertastipos[".searchableFields"][] = "AlertaTipo";


$tables_data["dbo.AlertasTipos"]=&$tdataalertastipos;
$field_labels["dbo_AlertasTipos"] = &$fieldLabelsalertastipos;
$fieldToolTips["dbo_AlertasTipos"] = &$fieldToolTipsalertastipos;
$placeHolders["dbo_AlertasTipos"] = &$placeHoldersalertastipos;
$page_titles["dbo_AlertasTipos"] = &$pageTitlesalertastipos;


changeTextControlsToDate( "dbo.AlertasTipos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.AlertasTipos"] = array();
//	dbo.Alertas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Alertas";
		$detailsParam["dOriginalTable"] = "dbo.Alertas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alertas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Alertas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.AlertasTipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.AlertasTipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.AlertasTipos"][$dIndex]["masterKeys"][]="AlertaTipoId";

				$detailsTablesData["dbo.AlertasTipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.AlertasTipos"][$dIndex]["detailKeys"][]="AlertaTipoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.AlertasTipos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertastipos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AlertaTipoId,  	AlertaTipo";
$proto0["m_strFrom"] = "FROM dbo.AlertasTipos";
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
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "dbo.AlertasTipos"
));

$proto6["m_sql"] = "AlertaTipoId";
$proto6["m_srcTableName"] = "dbo.AlertasTipos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AlertaTipo",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "dbo.AlertasTipos"
));

$proto8["m_sql"] = "AlertaTipo";
$proto8["m_srcTableName"] = "dbo.AlertasTipos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.AlertasTipos";
$proto11["m_srcTableName"] = "dbo.AlertasTipos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "AlertaTipoId";
$proto11["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.AlertasTipos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.AlertasTipos";
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
$proto0["m_srcTableName"]="dbo.AlertasTipos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertastipos = createSqlQuery_alertastipos();


	
		;

		

$tdataalertastipos[".sqlquery"] = $queryData_alertastipos;



$tdataalertastipos[".hasEvents"] = false;

?>