<?php
$tdatacalificaciones = array();
$tdatacalificaciones[".searchableFields"] = array();
$tdatacalificaciones[".ShortName"] = "calificaciones";
$tdatacalificaciones[".OwnerID"] = "";
$tdatacalificaciones[".OriginalTable"] = "dbo.Calificaciones";


$tdatacalificaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalificaciones[".originalPagesByType"] = $tdatacalificaciones[".pagesByType"];
$tdatacalificaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalificaciones[".originalPages"] = $tdatacalificaciones[".pages"];
$tdatacalificaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalificaciones[".originalDefaultPages"] = $tdatacalificaciones[".defaultPages"];

//	field labels
$fieldLabelscalificaciones = array();
$fieldToolTipscalificaciones = array();
$pageTitlescalificaciones = array();
$placeHolderscalificaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalificaciones["Spanish"] = array();
	$fieldToolTipscalificaciones["Spanish"] = array();
	$placeHolderscalificaciones["Spanish"] = array();
	$pageTitlescalificaciones["Spanish"] = array();
	$fieldLabelscalificaciones["Spanish"]["CalificacionId"] = "Calificacion Id";
	$fieldToolTipscalificaciones["Spanish"]["CalificacionId"] = "";
	$placeHolderscalificaciones["Spanish"]["CalificacionId"] = "";
	$fieldLabelscalificaciones["Spanish"]["Calificacion"] = "Calificacion";
	$fieldToolTipscalificaciones["Spanish"]["Calificacion"] = "";
	$placeHolderscalificaciones["Spanish"]["Calificacion"] = "";
	if (count($fieldToolTipscalificaciones["Spanish"]))
		$tdatacalificaciones[".isUseToolTips"] = true;
}


	$tdatacalificaciones[".NCSearch"] = true;



$tdatacalificaciones[".shortTableName"] = "calificaciones";
$tdatacalificaciones[".nSecOptions"] = 0;

$tdatacalificaciones[".mainTableOwnerID"] = "";
$tdatacalificaciones[".entityType"] = 0;
$tdatacalificaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacalificaciones[".strOriginalTableName"] = "dbo.Calificaciones";

	



$tdatacalificaciones[".showAddInPopup"] = false;

$tdatacalificaciones[".showEditInPopup"] = false;

$tdatacalificaciones[".showViewInPopup"] = false;

$tdatacalificaciones[".listAjax"] = false;
//	temporary
//$tdatacalificaciones[".listAjax"] = false;

	$tdatacalificaciones[".audit"] = false;

	$tdatacalificaciones[".locking"] = false;


$pages = $tdatacalificaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalificaciones[".edit"] = true;
	$tdatacalificaciones[".afterEditAction"] = 1;
	$tdatacalificaciones[".closePopupAfterEdit"] = 1;
	$tdatacalificaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalificaciones[".add"] = true;
$tdatacalificaciones[".afterAddAction"] = 1;
$tdatacalificaciones[".closePopupAfterAdd"] = 1;
$tdatacalificaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalificaciones[".list"] = true;
}



$tdatacalificaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalificaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalificaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalificaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalificaciones[".printFriendly"] = true;
}



$tdatacalificaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalificaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalificaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalificaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																	

$tdatacalificaciones[".ajaxCodeSnippetAdded"] = false;

$tdatacalificaciones[".buttonsAdded"] = false;

$tdatacalificaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalificaciones[".isUseTimeForSearch"] = false;


$tdatacalificaciones[".badgeColor"] = "D2AF80";


$tdatacalificaciones[".allSearchFields"] = array();
$tdatacalificaciones[".filterFields"] = array();
$tdatacalificaciones[".requiredSearchFields"] = array();

$tdatacalificaciones[".googleLikeFields"] = array();
$tdatacalificaciones[".googleLikeFields"][] = "CalificacionId";
$tdatacalificaciones[".googleLikeFields"][] = "Calificacion";



$tdatacalificaciones[".tableType"] = "list";

$tdatacalificaciones[".printerPageOrientation"] = 0;
$tdatacalificaciones[".nPrinterPageScale"] = 100;

$tdatacalificaciones[".nPrinterSplitRecords"] = 40;

$tdatacalificaciones[".geocodingEnabled"] = false;










$tdatacalificaciones[".pageSize"] = 20;

$tdatacalificaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalificaciones[".strOrderBy"] = $tstrOrderBy;

$tdatacalificaciones[".orderindexes"] = array();


$tdatacalificaciones[".sqlHead"] = "SELECT CalificacionId,  	Calificacion";
$tdatacalificaciones[".sqlFrom"] = "FROM dbo.Calificaciones";
$tdatacalificaciones[".sqlWhereExpr"] = "";
$tdatacalificaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalificaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalificaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatacalificaciones[".highlightSearchResults"] = true;

$tableKeyscalificaciones = array();
$tableKeyscalificaciones[] = "CalificacionId";
$tdatacalificaciones[".Keys"] = $tableKeyscalificaciones;


$tdatacalificaciones[".hideMobileList"] = array();




//	CalificacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CalificacionId";
	$fdata["GoodName"] = "CalificacionId";
	$fdata["ownerTable"] = "dbo.Calificaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Calificaciones","CalificacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CalificacionId";

		$fdata["sourceSingle"] = "CalificacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CalificacionId";

	
	
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


	$tdatacalificaciones["CalificacionId"] = $fdata;
		$tdatacalificaciones[".searchableFields"][] = "CalificacionId";
//	Calificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Calificacion";
	$fdata["GoodName"] = "Calificacion";
	$fdata["ownerTable"] = "dbo.Calificaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Calificaciones","Calificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Calificacion";

		$fdata["sourceSingle"] = "Calificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Calificacion";

	
	
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


	$tdatacalificaciones["Calificacion"] = $fdata;
		$tdatacalificaciones[".searchableFields"][] = "Calificacion";


$tables_data["dbo.Calificaciones"]=&$tdatacalificaciones;
$field_labels["dbo_Calificaciones"] = &$fieldLabelscalificaciones;
$fieldToolTips["dbo_Calificaciones"] = &$fieldToolTipscalificaciones;
$placeHolders["dbo_Calificaciones"] = &$placeHolderscalificaciones;
$page_titles["dbo_Calificaciones"] = &$pageTitlescalificaciones;


changeTextControlsToDate( "dbo.Calificaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Calificaciones"] = array();
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


		
	$detailsTablesData["dbo.Calificaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Calificaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Calificaciones"][$dIndex]["masterKeys"][]="CalificacionId";

				$detailsTablesData["dbo.Calificaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Calificaciones"][$dIndex]["detailKeys"][]="CalificacionId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Calificaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calificaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CalificacionId,  	Calificacion";
$proto0["m_strFrom"] = "FROM dbo.Calificaciones";
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
	"m_strName" => "CalificacionId",
	"m_strTable" => "dbo.Calificaciones",
	"m_srcTableName" => "dbo.Calificaciones"
));

$proto6["m_sql"] = "CalificacionId";
$proto6["m_srcTableName"] = "dbo.Calificaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Calificacion",
	"m_strTable" => "dbo.Calificaciones",
	"m_srcTableName" => "dbo.Calificaciones"
));

$proto8["m_sql"] = "Calificacion";
$proto8["m_srcTableName"] = "dbo.Calificaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Calificaciones";
$proto11["m_srcTableName"] = "dbo.Calificaciones";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CalificacionId";
$proto11["m_columns"][] = "Calificacion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Calificaciones";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Calificaciones";
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
$proto0["m_srcTableName"]="dbo.Calificaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calificaciones = createSqlQuery_calificaciones();


	
		;

		

$tdatacalificaciones[".sqlquery"] = $queryData_calificaciones;



$tdatacalificaciones[".hasEvents"] = false;

?>