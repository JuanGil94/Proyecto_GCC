<?php
$tdataciudades3 = array();
$tdataciudades3[".searchableFields"] = array();
$tdataciudades3[".ShortName"] = "ciudades3";
$tdataciudades3[".OwnerID"] = "";
$tdataciudades3[".OriginalTable"] = "dbo.Ciudades";


$tdataciudades3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades3[".originalPagesByType"] = $tdataciudades3[".pagesByType"];
$tdataciudades3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades3[".originalPages"] = $tdataciudades3[".pages"];
$tdataciudades3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades3[".originalDefaultPages"] = $tdataciudades3[".defaultPages"];

//	field labels
$fieldLabelsciudades3 = array();
$fieldToolTipsciudades3 = array();
$pageTitlesciudades3 = array();
$placeHoldersciudades3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades3["Spanish"] = array();
	$fieldToolTipsciudades3["Spanish"] = array();
	$placeHoldersciudades3["Spanish"] = array();
	$pageTitlesciudades3["Spanish"] = array();
	$fieldLabelsciudades3["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsciudades3["Spanish"]["CiudadId"] = "";
	$placeHoldersciudades3["Spanish"]["CiudadId"] = "";
	$fieldLabelsciudades3["Spanish"]["Departamento"] = "Departamento";
	$fieldToolTipsciudades3["Spanish"]["Departamento"] = "";
	$placeHoldersciudades3["Spanish"]["Departamento"] = "";
	if (count($fieldToolTipsciudades3["Spanish"]))
		$tdataciudades3[".isUseToolTips"] = true;
}


	$tdataciudades3[".NCSearch"] = true;



$tdataciudades3[".shortTableName"] = "ciudades3";
$tdataciudades3[".nSecOptions"] = 0;

$tdataciudades3[".mainTableOwnerID"] = "";
$tdataciudades3[".entityType"] = 1;
$tdataciudades3[".connId"] = "GCC_at_S00001_CCAD01";


$tdataciudades3[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdataciudades3[".showAddInPopup"] = false;

$tdataciudades3[".showEditInPopup"] = false;

$tdataciudades3[".showViewInPopup"] = false;

$tdataciudades3[".listAjax"] = false;
//	temporary
//$tdataciudades3[".listAjax"] = false;

	$tdataciudades3[".audit"] = true;

	$tdataciudades3[".locking"] = false;


$pages = $tdataciudades3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades3[".edit"] = true;
	$tdataciudades3[".afterEditAction"] = 1;
	$tdataciudades3[".closePopupAfterEdit"] = 1;
	$tdataciudades3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades3[".add"] = true;
$tdataciudades3[".afterAddAction"] = 1;
$tdataciudades3[".closePopupAfterAdd"] = 1;
$tdataciudades3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades3[".list"] = true;
}



$tdataciudades3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades3[".printFriendly"] = true;
}



$tdataciudades3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades3[".isUseAjaxSuggest"] = true;



																																																																																																																																																			

$tdataciudades3[".ajaxCodeSnippetAdded"] = false;

$tdataciudades3[".buttonsAdded"] = false;

$tdataciudades3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades3[".isUseTimeForSearch"] = false;


$tdataciudades3[".badgeColor"] = "4682B4";


$tdataciudades3[".allSearchFields"] = array();
$tdataciudades3[".filterFields"] = array();
$tdataciudades3[".requiredSearchFields"] = array();

$tdataciudades3[".googleLikeFields"] = array();
$tdataciudades3[".googleLikeFields"][] = "CiudadId";
$tdataciudades3[".googleLikeFields"][] = "Departamento";



$tdataciudades3[".tableType"] = "list";

$tdataciudades3[".printerPageOrientation"] = 0;
$tdataciudades3[".nPrinterPageScale"] = 100;

$tdataciudades3[".nPrinterSplitRecords"] = 40;

$tdataciudades3[".geocodingEnabled"] = false;





$tdataciudades3[".isResizeColumns"] = true;





$tdataciudades3[".pageSize"] = 20;

$tdataciudades3[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dbo.Departamentos.Departamento ASC";
$tdataciudades3[".strOrderBy"] = $tstrOrderBy;

$tdataciudades3[".orderindexes"] = array();
	$tdataciudades3[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "dbo.Departamentos.Departamento");



$tdataciudades3[".sqlHead"] = "SELECT dbo.Ciudades.CiudadId,dbo.Departamentos.Departamento";
$tdataciudades3[".sqlFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$tdataciudades3[".sqlWhereExpr"] = "";
$tdataciudades3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades3[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades3[".highlightSearchResults"] = true;

$tableKeysciudades3 = array();
$tableKeysciudades3[] = "CiudadId";
$tdataciudades3[".Keys"] = $tableKeysciudades3;


$tdataciudades3[".hideMobileList"] = array();




//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades3","CiudadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Ciudades.CiudadId";

	
	
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


	$tdataciudades3["CiudadId"] = $fdata;
		$tdataciudades3[".searchableFields"][] = "CiudadId";
//	Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Departamento";
	$fdata["GoodName"] = "Departamento";
	$fdata["ownerTable"] = "dbo.Departamentos";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades3","Departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Departamentos.Departamento";

	
	
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


	$tdataciudades3["Departamento"] = $fdata;
		$tdataciudades3[".searchableFields"][] = "Departamento";


$tables_data["dbo.Ciudades3"]=&$tdataciudades3;
$field_labels["dbo_Ciudades3"] = &$fieldLabelsciudades3;
$fieldToolTips["dbo_Ciudades3"] = &$fieldToolTipsciudades3;
$placeHolders["dbo_Ciudades3"] = &$placeHoldersciudades3;
$page_titles["dbo_Ciudades3"] = &$pageTitlesciudades3;


changeTextControlsToDate( "dbo.Ciudades3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ciudades3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Ciudades.CiudadId,dbo.Departamentos.Departamento";
$proto0["m_strFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dbo.Departamentos.Departamento ASC";
	
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
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades3"
));

$proto6["m_sql"] = "dbo.Ciudades.CiudadId";
$proto6["m_srcTableName"] = "dbo.Ciudades3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades3"
));

$proto8["m_sql"] = "dbo.Departamentos.Departamento";
$proto8["m_srcTableName"] = "dbo.Ciudades3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Ciudades";
$proto11["m_srcTableName"] = "dbo.Ciudades3";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CiudadId";
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Ciudad";
$proto11["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Ciudades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Ciudades3";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.Departamentos";
$proto15["m_srcTableName"] = "dbo.Ciudades3";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DepartamentoId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "Departamento";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.Ciudades3";
$proto16=array();
$proto16["m_sql"] = "dbo.Departamentos.DepartamentoId = dbo.Ciudades.DepartamentoId";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades3"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= dbo.Ciudades.DepartamentoId";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades3"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Ciudades3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades3 = createSqlQuery_ciudades3();


	
		;

		

$tdataciudades3[".sqlquery"] = $queryData_ciudades3;



$tdataciudades3[".hasEvents"] = false;

?>