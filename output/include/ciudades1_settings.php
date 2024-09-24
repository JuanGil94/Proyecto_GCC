<?php
$tdataciudades1 = array();
$tdataciudades1[".searchableFields"] = array();
$tdataciudades1[".ShortName"] = "ciudades1";
$tdataciudades1[".OwnerID"] = "";
$tdataciudades1[".OriginalTable"] = "dbo.Ciudades";


$tdataciudades1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades1[".originalPagesByType"] = $tdataciudades1[".pagesByType"];
$tdataciudades1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades1[".originalPages"] = $tdataciudades1[".pages"];
$tdataciudades1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades1[".originalDefaultPages"] = $tdataciudades1[".defaultPages"];

//	field labels
$fieldLabelsciudades1 = array();
$fieldToolTipsciudades1 = array();
$pageTitlesciudades1 = array();
$placeHoldersciudades1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades1["Spanish"] = array();
	$fieldToolTipsciudades1["Spanish"] = array();
	$placeHoldersciudades1["Spanish"] = array();
	$pageTitlesciudades1["Spanish"] = array();
	$fieldLabelsciudades1["Spanish"]["Ciudad_Municipio"] = "Ciudad/Municipio";
	$fieldToolTipsciudades1["Spanish"]["Ciudad_Municipio"] = "";
	$placeHoldersciudades1["Spanish"]["Ciudad_Municipio"] = "";
	$fieldLabelsciudades1["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsciudades1["Spanish"]["CiudadId"] = "";
	$placeHoldersciudades1["Spanish"]["CiudadId"] = "";
	if (count($fieldToolTipsciudades1["Spanish"]))
		$tdataciudades1[".isUseToolTips"] = true;
}


	$tdataciudades1[".NCSearch"] = true;



$tdataciudades1[".shortTableName"] = "ciudades1";
$tdataciudades1[".nSecOptions"] = 0;

$tdataciudades1[".mainTableOwnerID"] = "";
$tdataciudades1[".entityType"] = 1;
$tdataciudades1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataciudades1[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdataciudades1[".showAddInPopup"] = false;

$tdataciudades1[".showEditInPopup"] = false;

$tdataciudades1[".showViewInPopup"] = false;

$tdataciudades1[".listAjax"] = false;
//	temporary
//$tdataciudades1[".listAjax"] = false;

	$tdataciudades1[".audit"] = true;

	$tdataciudades1[".locking"] = false;


$pages = $tdataciudades1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades1[".edit"] = true;
	$tdataciudades1[".afterEditAction"] = 1;
	$tdataciudades1[".closePopupAfterEdit"] = 1;
	$tdataciudades1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades1[".add"] = true;
$tdataciudades1[".afterAddAction"] = 1;
$tdataciudades1[".closePopupAfterAdd"] = 1;
$tdataciudades1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades1[".list"] = true;
}



$tdataciudades1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades1[".printFriendly"] = true;
}



$tdataciudades1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																															

$tdataciudades1[".ajaxCodeSnippetAdded"] = false;

$tdataciudades1[".buttonsAdded"] = false;

$tdataciudades1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades1[".isUseTimeForSearch"] = false;


$tdataciudades1[".badgeColor"] = "DB7093";


$tdataciudades1[".allSearchFields"] = array();
$tdataciudades1[".filterFields"] = array();
$tdataciudades1[".requiredSearchFields"] = array();

$tdataciudades1[".googleLikeFields"] = array();
$tdataciudades1[".googleLikeFields"][] = "CiudadId";
$tdataciudades1[".googleLikeFields"][] = "Ciudad/Municipio";



$tdataciudades1[".tableType"] = "list";

$tdataciudades1[".printerPageOrientation"] = 0;
$tdataciudades1[".nPrinterPageScale"] = 100;

$tdataciudades1[".nPrinterSplitRecords"] = 40;

$tdataciudades1[".geocodingEnabled"] = false;





$tdataciudades1[".isResizeColumns"] = true;





$tdataciudades1[".pageSize"] = 20;

$tdataciudades1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataciudades1[".strOrderBy"] = $tstrOrderBy;

$tdataciudades1[".orderindexes"] = array();


$tdataciudades1[".sqlHead"] = "select C.CiudadId,( D.Codigo+C.Codigo+ ' - '+ C.Ciudad+' ('+D.Departamento+')') as 'Ciudad/Municipio'";
$tdataciudades1[".sqlFrom"] = "from Ciudades C  INNER JOIN Departamentos D ON C.DepartamentoId = D.DepartamentoId";
$tdataciudades1[".sqlWhereExpr"] = "";
$tdataciudades1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades1[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades1[".highlightSearchResults"] = true;

$tableKeysciudades1 = array();
$tdataciudades1[".Keys"] = $tableKeysciudades1;


$tdataciudades1[".hideMobileList"] = array();




//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades1","CiudadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.CiudadId";

	
	
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


	$tdataciudades1["CiudadId"] = $fdata;
		$tdataciudades1[".searchableFields"][] = "CiudadId";
//	Ciudad/Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ciudad/Municipio";
	$fdata["GoodName"] = "Ciudad_Municipio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades1","Ciudad_Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad/Municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "( D.Codigo+C.Codigo+ ' - '+ C.Ciudad+' ('+D.Departamento+')')";

	
	
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


	$tdataciudades1["Ciudad/Municipio"] = $fdata;
		$tdataciudades1[".searchableFields"][] = "Ciudad/Municipio";


$tables_data["dbo.Ciudades1"]=&$tdataciudades1;
$field_labels["dbo_Ciudades1"] = &$fieldLabelsciudades1;
$fieldToolTips["dbo_Ciudades1"] = &$fieldToolTipsciudades1;
$placeHolders["dbo_Ciudades1"] = &$placeHoldersciudades1;
$page_titles["dbo_Ciudades1"] = &$pageTitlesciudades1;


changeTextControlsToDate( "dbo.Ciudades1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ciudades1()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "C.CiudadId,( D.Codigo+C.Codigo+ ' - '+ C.Ciudad+' ('+D.Departamento+')') as 'Ciudad/Municipio'";
$proto0["m_strFrom"] = "from Ciudades C  INNER JOIN Departamentos D ON C.DepartamentoId = D.DepartamentoId";
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
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Ciudades1"
));

$proto6["m_sql"] = "C.CiudadId";
$proto6["m_srcTableName"] = "dbo.Ciudades1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "( D.Codigo+C.Codigo+ ' - '+ C.Ciudad+' ('+D.Departamento+')')"
));

$proto8["m_sql"] = "( D.Codigo+C.Codigo+ ' - '+ C.Ciudad+' ('+D.Departamento+')')";
$proto8["m_srcTableName"] = "dbo.Ciudades1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Ciudad/Municipio";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Ciudades";
$proto11["m_srcTableName"] = "dbo.Ciudades1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CiudadId";
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Ciudad";
$proto11["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Ciudades C";
$proto10["m_alias"] = "C";
$proto10["m_srcTableName"] = "dbo.Ciudades1";
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
$proto15["m_srcTableName"] = "dbo.Ciudades1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DepartamentoId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "Departamento";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN Departamentos D ON C.DepartamentoId = D.DepartamentoId";
$proto14["m_alias"] = "D";
$proto14["m_srcTableName"] = "dbo.Ciudades1";
$proto16=array();
$proto16["m_sql"] = "D.DepartamentoId = C.DepartamentoId";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Ciudades1"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= C.DepartamentoId";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Ciudades1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades1 = createSqlQuery_ciudades1();


	
		;

		

$tdataciudades1[".sqlquery"] = $queryData_ciudades1;



$tdataciudades1[".hasEvents"] = false;

?>