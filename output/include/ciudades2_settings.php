<?php
$tdataciudades2 = array();
$tdataciudades2[".searchableFields"] = array();
$tdataciudades2[".ShortName"] = "ciudades2";
$tdataciudades2[".OwnerID"] = "";
$tdataciudades2[".OriginalTable"] = "dbo.Ciudades";


$tdataciudades2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades2[".originalPagesByType"] = $tdataciudades2[".pagesByType"];
$tdataciudades2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades2[".originalPages"] = $tdataciudades2[".pages"];
$tdataciudades2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades2[".originalDefaultPages"] = $tdataciudades2[".defaultPages"];

//	field labels
$fieldLabelsciudades2 = array();
$fieldToolTipsciudades2 = array();
$pageTitlesciudades2 = array();
$placeHoldersciudades2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades2["Spanish"] = array();
	$fieldToolTipsciudades2["Spanish"] = array();
	$placeHoldersciudades2["Spanish"] = array();
	$pageTitlesciudades2["Spanish"] = array();
	if (count($fieldToolTipsciudades2["Spanish"]))
		$tdataciudades2[".isUseToolTips"] = true;
}


	$tdataciudades2[".NCSearch"] = true;



$tdataciudades2[".shortTableName"] = "ciudades2";
$tdataciudades2[".nSecOptions"] = 0;

$tdataciudades2[".mainTableOwnerID"] = "";
$tdataciudades2[".entityType"] = 1;
$tdataciudades2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataciudades2[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdataciudades2[".showAddInPopup"] = false;

$tdataciudades2[".showEditInPopup"] = false;

$tdataciudades2[".showViewInPopup"] = false;

$tdataciudades2[".listAjax"] = false;
//	temporary
//$tdataciudades2[".listAjax"] = false;

	$tdataciudades2[".audit"] = true;

	$tdataciudades2[".locking"] = false;


$pages = $tdataciudades2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades2[".edit"] = true;
	$tdataciudades2[".afterEditAction"] = 1;
	$tdataciudades2[".closePopupAfterEdit"] = 1;
	$tdataciudades2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades2[".add"] = true;
$tdataciudades2[".afterAddAction"] = 1;
$tdataciudades2[".closePopupAfterAdd"] = 1;
$tdataciudades2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades2[".list"] = true;
}



$tdataciudades2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades2[".printFriendly"] = true;
}



$tdataciudades2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades2[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataciudades2[".ajaxCodeSnippetAdded"] = false;

$tdataciudades2[".buttonsAdded"] = false;

$tdataciudades2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades2[".isUseTimeForSearch"] = false;


$tdataciudades2[".badgeColor"] = "00C2C5";


$tdataciudades2[".allSearchFields"] = array();
$tdataciudades2[".filterFields"] = array();
$tdataciudades2[".requiredSearchFields"] = array();




$tdataciudades2[".tableType"] = "list";

$tdataciudades2[".printerPageOrientation"] = 0;
$tdataciudades2[".nPrinterPageScale"] = 100;

$tdataciudades2[".nPrinterSplitRecords"] = 40;

$tdataciudades2[".geocodingEnabled"] = false;





$tdataciudades2[".isResizeColumns"] = true;





$tdataciudades2[".pageSize"] = 20;

$tdataciudades2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dbo.Departamentos.Departamento ASC";
$tdataciudades2[".strOrderBy"] = $tstrOrderBy;

$tdataciudades2[".orderindexes"] = array();


$tdataciudades2[".sqlHead"] = "SELECT dbo.Departamentos.Codigo+dbo.Ciudades.Codigo+' - '+dbo.Ciudades.Ciudad+' ('+dbo.Departamentos.Departamento+')'";
$tdataciudades2[".sqlFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$tdataciudades2[".sqlWhereExpr"] = "";
$tdataciudades2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades2[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades2[".highlightSearchResults"] = true;

$tableKeysciudades2 = array();
$tdataciudades2[".Keys"] = $tableKeysciudades2;


$tdataciudades2[".hideMobileList"] = array();






$tables_data["dbo.Ciudades2"]=&$tdataciudades2;
$field_labels["dbo_Ciudades2"] = &$fieldLabelsciudades2;
$fieldToolTips["dbo_Ciudades2"] = &$fieldToolTipsciudades2;
$placeHolders["dbo_Ciudades2"] = &$placeHoldersciudades2;
$page_titles["dbo_Ciudades2"] = &$pageTitlesciudades2;


changeTextControlsToDate( "dbo.Ciudades2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ciudades2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Departamentos.Codigo+dbo.Ciudades.Codigo+' - '+dbo.Ciudades.Ciudad+' ('+dbo.Departamentos.Departamento+')'";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "dbo.Departamentos.Codigo+dbo.Ciudades.Codigo+' - '+dbo.Ciudades.Ciudad+' ('+dbo.Departamentos.Departamento+')'"
));

$proto6["m_sql"] = "dbo.Departamentos.Codigo+dbo.Ciudades.Codigo+' - '+dbo.Ciudades.Ciudad+' ('+dbo.Departamentos.Departamento+')'";
$proto6["m_srcTableName"] = "dbo.Ciudades2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Ciudades";
$proto9["m_srcTableName"] = "dbo.Ciudades2";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "CiudadId";
$proto9["m_columns"][] = "Codigo";
$proto9["m_columns"][] = "Ciudad";
$proto9["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Ciudades";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Ciudades2";
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
												$proto12=array();
$proto12["m_link"] = "SQLL_INNERJOIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Departamentos";
$proto13["m_srcTableName"] = "dbo.Ciudades2";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DepartamentoId";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Departamento";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Ciudades2";
$proto14=array();
$proto14["m_sql"] = "dbo.Departamentos.DepartamentoId = dbo.Ciudades.DepartamentoId";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= dbo.Ciudades.DepartamentoId";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Ciudades2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades2 = createSqlQuery_ciudades2();


	
		;



$tdataciudades2[".sqlquery"] = $queryData_ciudades2;



$tdataciudades2[".hasEvents"] = false;

?>