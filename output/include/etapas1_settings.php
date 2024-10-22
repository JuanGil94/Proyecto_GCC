<?php
$tdataetapas1 = array();
$tdataetapas1[".searchableFields"] = array();
$tdataetapas1[".ShortName"] = "etapas1";
$tdataetapas1[".OwnerID"] = "";
$tdataetapas1[".OriginalTable"] = "dbo.Etapas";


$tdataetapas1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataetapas1[".originalPagesByType"] = $tdataetapas1[".pagesByType"];
$tdataetapas1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataetapas1[".originalPages"] = $tdataetapas1[".pages"];
$tdataetapas1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataetapas1[".originalDefaultPages"] = $tdataetapas1[".defaultPages"];

//	field labels
$fieldLabelsetapas1 = array();
$fieldToolTipsetapas1 = array();
$pageTitlesetapas1 = array();
$placeHoldersetapas1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsetapas1["Spanish"] = array();
	$fieldToolTipsetapas1["Spanish"] = array();
	$placeHoldersetapas1["Spanish"] = array();
	$pageTitlesetapas1["Spanish"] = array();
	$fieldLabelsetapas1["Spanish"]["EtapaId"] = "Etapa Id";
	$fieldToolTipsetapas1["Spanish"]["EtapaId"] = "";
	$placeHoldersetapas1["Spanish"]["EtapaId"] = "";
	$fieldLabelsetapas1["Spanish"]["Etapa"] = "Etapa";
	$fieldToolTipsetapas1["Spanish"]["Etapa"] = "";
	$placeHoldersetapas1["Spanish"]["Etapa"] = "";
	if (count($fieldToolTipsetapas1["Spanish"]))
		$tdataetapas1[".isUseToolTips"] = true;
}


	$tdataetapas1[".NCSearch"] = true;



$tdataetapas1[".shortTableName"] = "etapas1";
$tdataetapas1[".nSecOptions"] = 0;

$tdataetapas1[".mainTableOwnerID"] = "";
$tdataetapas1[".entityType"] = 1;
$tdataetapas1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataetapas1[".strOriginalTableName"] = "dbo.Etapas";

	



$tdataetapas1[".showAddInPopup"] = false;

$tdataetapas1[".showEditInPopup"] = false;

$tdataetapas1[".showViewInPopup"] = false;

$tdataetapas1[".listAjax"] = false;
//	temporary
//$tdataetapas1[".listAjax"] = false;

	$tdataetapas1[".audit"] = true;

	$tdataetapas1[".locking"] = false;


$pages = $tdataetapas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataetapas1[".edit"] = true;
	$tdataetapas1[".afterEditAction"] = 1;
	$tdataetapas1[".closePopupAfterEdit"] = 1;
	$tdataetapas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataetapas1[".add"] = true;
$tdataetapas1[".afterAddAction"] = 1;
$tdataetapas1[".closePopupAfterAdd"] = 1;
$tdataetapas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataetapas1[".list"] = true;
}



$tdataetapas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataetapas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataetapas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataetapas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataetapas1[".printFriendly"] = true;
}



$tdataetapas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataetapas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataetapas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataetapas1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataetapas1[".ajaxCodeSnippetAdded"] = false;

$tdataetapas1[".buttonsAdded"] = false;

$tdataetapas1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataetapas1[".isUseTimeForSearch"] = false;


$tdataetapas1[".badgeColor"] = "8FBC8B";


$tdataetapas1[".allSearchFields"] = array();
$tdataetapas1[".filterFields"] = array();
$tdataetapas1[".requiredSearchFields"] = array();

$tdataetapas1[".googleLikeFields"] = array();
$tdataetapas1[".googleLikeFields"][] = "EtapaId";
$tdataetapas1[".googleLikeFields"][] = "Etapa";



$tdataetapas1[".tableType"] = "list";

$tdataetapas1[".printerPageOrientation"] = 0;
$tdataetapas1[".nPrinterPageScale"] = 100;

$tdataetapas1[".nPrinterSplitRecords"] = 40;

$tdataetapas1[".geocodingEnabled"] = false;





$tdataetapas1[".isResizeColumns"] = true;





$tdataetapas1[".pageSize"] = 20;

$tdataetapas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataetapas1[".strOrderBy"] = $tstrOrderBy;

$tdataetapas1[".orderindexes"] = array();


$tdataetapas1[".sqlHead"] = "SELECT 0 AS [EtapaId],       ' ' AS [Etapa]  UNION ALL   SELECT   *";
$tdataetapas1[".sqlFrom"] = "FROM dbo.Etapas";
$tdataetapas1[".sqlWhereExpr"] = "";
$tdataetapas1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataetapas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataetapas1[".arrGroupsPerPage"] = $arrGPP;

$tdataetapas1[".highlightSearchResults"] = true;

$tableKeysetapas1 = array();
$tableKeysetapas1[] = "EtapaId";
$tdataetapas1[".Keys"] = $tableKeysetapas1;


$tdataetapas1[".hideMobileList"] = array();




//	EtapaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EtapaId";
	$fdata["GoodName"] = "EtapaId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Etapas1","EtapaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EtapaId";

		$fdata["sourceSingle"] = "EtapaId";

		$fdata["FullName"] = "EtapaId";

	
	
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


	$tdataetapas1["EtapaId"] = $fdata;
		$tdataetapas1[".searchableFields"][] = "EtapaId";
//	Etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Etapa";
	$fdata["GoodName"] = "Etapa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Etapas1","Etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Etapa";

		$fdata["sourceSingle"] = "Etapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "' ' AS [Etapa]  UNION ALL   SELECT   *";

	
	
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


	$tdataetapas1["Etapa"] = $fdata;
		$tdataetapas1[".searchableFields"][] = "Etapa";


$tables_data["dbo.Etapas1"]=&$tdataetapas1;
$field_labels["dbo_Etapas1"] = &$fieldLabelsetapas1;
$fieldToolTips["dbo_Etapas1"] = &$fieldToolTipsetapas1;
$placeHolders["dbo_Etapas1"] = &$placeHoldersetapas1;
$page_titles["dbo_Etapas1"] = &$pageTitlesetapas1;


changeTextControlsToDate( "dbo.Etapas1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Etapas1"] = array();
//	dbo.Actuaciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Actuaciones";
		$detailsParam["dOriginalTable"] = "dbo.Actuaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "actuaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Actuaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Etapas1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Etapas1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Etapas1"][$dIndex]["masterKeys"][]="EtapaId";

				$detailsTablesData["dbo.Etapas1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Etapas1"][$dIndex]["detailKeys"][]="EtapaId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Etapas1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_etapas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "0 AS [EtapaId],       ' ' AS [Etapa]  UNION ALL   SELECT   *";
$proto0["m_strFrom"] = "FROM dbo.Etapas";
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
$proto6["m_srcTableName"] = "dbo.Etapas1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "EtapaId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' AS [Etapa]  UNION ALL   SELECT   *"
));

$proto8["m_sql"] = "' ' AS [Etapa]  UNION ALL   SELECT   *";
$proto8["m_srcTableName"] = "dbo.Etapas1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Etapas";
$proto11["m_srcTableName"] = "dbo.Etapas1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EtapaId";
$proto11["m_columns"][] = "Etapa";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Etapas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Etapas1";
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
$proto0["m_srcTableName"]="dbo.Etapas1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_etapas1 = createSqlQuery_etapas1();


	
		;

		

$tdataetapas1[".sqlquery"] = $queryData_etapas1;



$tdataetapas1[".hasEvents"] = false;

?>