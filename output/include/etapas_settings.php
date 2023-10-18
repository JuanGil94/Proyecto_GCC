<?php
$tdataetapas = array();
$tdataetapas[".searchableFields"] = array();
$tdataetapas[".ShortName"] = "etapas";
$tdataetapas[".OwnerID"] = "";
$tdataetapas[".OriginalTable"] = "dbo.Etapas";


$tdataetapas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataetapas[".originalPagesByType"] = $tdataetapas[".pagesByType"];
$tdataetapas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataetapas[".originalPages"] = $tdataetapas[".pages"];
$tdataetapas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataetapas[".originalDefaultPages"] = $tdataetapas[".defaultPages"];

//	field labels
$fieldLabelsetapas = array();
$fieldToolTipsetapas = array();
$pageTitlesetapas = array();
$placeHoldersetapas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsetapas["Spanish"] = array();
	$fieldToolTipsetapas["Spanish"] = array();
	$placeHoldersetapas["Spanish"] = array();
	$pageTitlesetapas["Spanish"] = array();
	$fieldLabelsetapas["Spanish"]["EtapaId"] = "Etapa Id";
	$fieldToolTipsetapas["Spanish"]["EtapaId"] = "";
	$placeHoldersetapas["Spanish"]["EtapaId"] = "";
	$fieldLabelsetapas["Spanish"]["Etapa"] = "Etapa";
	$fieldToolTipsetapas["Spanish"]["Etapa"] = "";
	$placeHoldersetapas["Spanish"]["Etapa"] = "";
	if (count($fieldToolTipsetapas["Spanish"]))
		$tdataetapas[".isUseToolTips"] = true;
}


	$tdataetapas[".NCSearch"] = true;



$tdataetapas[".shortTableName"] = "etapas";
$tdataetapas[".nSecOptions"] = 0;

$tdataetapas[".mainTableOwnerID"] = "";
$tdataetapas[".entityType"] = 0;
$tdataetapas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataetapas[".strOriginalTableName"] = "dbo.Etapas";

	



$tdataetapas[".showAddInPopup"] = false;

$tdataetapas[".showEditInPopup"] = false;

$tdataetapas[".showViewInPopup"] = false;

$tdataetapas[".listAjax"] = false;
//	temporary
//$tdataetapas[".listAjax"] = false;

	$tdataetapas[".audit"] = true;

	$tdataetapas[".locking"] = false;


$pages = $tdataetapas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataetapas[".edit"] = true;
	$tdataetapas[".afterEditAction"] = 1;
	$tdataetapas[".closePopupAfterEdit"] = 1;
	$tdataetapas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataetapas[".add"] = true;
$tdataetapas[".afterAddAction"] = 1;
$tdataetapas[".closePopupAfterAdd"] = 1;
$tdataetapas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataetapas[".list"] = true;
}



$tdataetapas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataetapas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataetapas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataetapas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataetapas[".printFriendly"] = true;
}



$tdataetapas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataetapas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataetapas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataetapas[".isUseAjaxSuggest"] = true;



																								

$tdataetapas[".ajaxCodeSnippetAdded"] = false;

$tdataetapas[".buttonsAdded"] = false;

$tdataetapas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataetapas[".isUseTimeForSearch"] = false;


$tdataetapas[".badgeColor"] = "DC143C";


$tdataetapas[".allSearchFields"] = array();
$tdataetapas[".filterFields"] = array();
$tdataetapas[".requiredSearchFields"] = array();

$tdataetapas[".googleLikeFields"] = array();
$tdataetapas[".googleLikeFields"][] = "EtapaId";
$tdataetapas[".googleLikeFields"][] = "Etapa";



$tdataetapas[".tableType"] = "list";

$tdataetapas[".printerPageOrientation"] = 0;
$tdataetapas[".nPrinterPageScale"] = 100;

$tdataetapas[".nPrinterSplitRecords"] = 40;

$tdataetapas[".geocodingEnabled"] = false;





$tdataetapas[".isResizeColumns"] = true;





$tdataetapas[".pageSize"] = 20;

$tdataetapas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataetapas[".strOrderBy"] = $tstrOrderBy;

$tdataetapas[".orderindexes"] = array();


$tdataetapas[".sqlHead"] = "SELECT EtapaId,  	Etapa";
$tdataetapas[".sqlFrom"] = "FROM dbo.Etapas";
$tdataetapas[".sqlWhereExpr"] = "";
$tdataetapas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataetapas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataetapas[".arrGroupsPerPage"] = $arrGPP;

$tdataetapas[".highlightSearchResults"] = true;

$tableKeysetapas = array();
$tableKeysetapas[] = "EtapaId";
$tdataetapas[".Keys"] = $tableKeysetapas;


$tdataetapas[".hideMobileList"] = array();




//	EtapaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EtapaId";
	$fdata["GoodName"] = "EtapaId";
	$fdata["ownerTable"] = "dbo.Etapas";
	$fdata["Label"] = GetFieldLabel("dbo_Etapas","EtapaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EtapaId";

		$fdata["sourceSingle"] = "EtapaId";

		$fdata["isSQLExpression"] = true;
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


	$tdataetapas["EtapaId"] = $fdata;
		$tdataetapas[".searchableFields"][] = "EtapaId";
//	Etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Etapa";
	$fdata["GoodName"] = "Etapa";
	$fdata["ownerTable"] = "dbo.Etapas";
	$fdata["Label"] = GetFieldLabel("dbo_Etapas","Etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Etapa";

		$fdata["sourceSingle"] = "Etapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Etapa";

	
	
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


	$tdataetapas["Etapa"] = $fdata;
		$tdataetapas[".searchableFields"][] = "Etapa";


$tables_data["dbo.Etapas"]=&$tdataetapas;
$field_labels["dbo_Etapas"] = &$fieldLabelsetapas;
$fieldToolTips["dbo_Etapas"] = &$fieldToolTipsetapas;
$placeHolders["dbo_Etapas"] = &$placeHoldersetapas;
$page_titles["dbo_Etapas"] = &$pageTitlesetapas;


changeTextControlsToDate( "dbo.Etapas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Etapas"] = array();
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


		
	$detailsTablesData["dbo.Etapas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Etapas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Etapas"][$dIndex]["masterKeys"][]="EtapaId";

				$detailsTablesData["dbo.Etapas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Etapas"][$dIndex]["detailKeys"][]="EtapaId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Etapas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_etapas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EtapaId,  	Etapa";
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
			$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Etapas",
	"m_srcTableName" => "dbo.Etapas"
));

$proto6["m_sql"] = "EtapaId";
$proto6["m_srcTableName"] = "dbo.Etapas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Etapa",
	"m_strTable" => "dbo.Etapas",
	"m_srcTableName" => "dbo.Etapas"
));

$proto8["m_sql"] = "Etapa";
$proto8["m_srcTableName"] = "dbo.Etapas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Etapas";
$proto11["m_srcTableName"] = "dbo.Etapas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EtapaId";
$proto11["m_columns"][] = "Etapa";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Etapas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Etapas";
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
$proto0["m_srcTableName"]="dbo.Etapas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_etapas = createSqlQuery_etapas();


	
		;

		

$tdataetapas[".sqlquery"] = $queryData_etapas;



$tdataetapas[".hasEvents"] = false;

?>