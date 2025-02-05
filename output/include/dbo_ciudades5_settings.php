<?php
$tdatadbo_ciudades5 = array();
$tdatadbo_ciudades5[".searchableFields"] = array();
$tdatadbo_ciudades5[".ShortName"] = "dbo_ciudades5";
$tdatadbo_ciudades5[".OwnerID"] = "";
$tdatadbo_ciudades5[".OriginalTable"] = "dbo.Ciudades";


$tdatadbo_ciudades5[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_ciudades5[".originalPagesByType"] = $tdatadbo_ciudades5[".pagesByType"];
$tdatadbo_ciudades5[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_ciudades5[".originalPages"] = $tdatadbo_ciudades5[".pages"];
$tdatadbo_ciudades5[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_ciudades5[".originalDefaultPages"] = $tdatadbo_ciudades5[".defaultPages"];

//	field labels
$fieldLabelsdbo_ciudades5 = array();
$fieldToolTipsdbo_ciudades5 = array();
$pageTitlesdbo_ciudades5 = array();
$placeHoldersdbo_ciudades5 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_ciudades5["Spanish"] = array();
	$fieldToolTipsdbo_ciudades5["Spanish"] = array();
	$placeHoldersdbo_ciudades5["Spanish"] = array();
	$pageTitlesdbo_ciudades5["Spanish"] = array();
	$fieldLabelsdbo_ciudades5["Spanish"]["Departamento"] = "Departamento";
	$fieldToolTipsdbo_ciudades5["Spanish"]["Departamento"] = "";
	$placeHoldersdbo_ciudades5["Spanish"]["Departamento"] = "";
	$fieldLabelsdbo_ciudades5["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsdbo_ciudades5["Spanish"]["CiudadId"] = "";
	$placeHoldersdbo_ciudades5["Spanish"]["CiudadId"] = "";
	if (count($fieldToolTipsdbo_ciudades5["Spanish"]))
		$tdatadbo_ciudades5[".isUseToolTips"] = true;
}


	$tdatadbo_ciudades5[".NCSearch"] = true;



$tdatadbo_ciudades5[".shortTableName"] = "dbo_ciudades5";
$tdatadbo_ciudades5[".nSecOptions"] = 0;

$tdatadbo_ciudades5[".mainTableOwnerID"] = "";
$tdatadbo_ciudades5[".entityType"] = 1;
$tdatadbo_ciudades5[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_ciudades5[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdatadbo_ciudades5[".showAddInPopup"] = false;

$tdatadbo_ciudades5[".showEditInPopup"] = false;

$tdatadbo_ciudades5[".showViewInPopup"] = false;

$tdatadbo_ciudades5[".listAjax"] = false;
//	temporary
//$tdatadbo_ciudades5[".listAjax"] = false;

	$tdatadbo_ciudades5[".audit"] = true;

	$tdatadbo_ciudades5[".locking"] = false;


$pages = $tdatadbo_ciudades5[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_ciudades5[".edit"] = true;
	$tdatadbo_ciudades5[".afterEditAction"] = 1;
	$tdatadbo_ciudades5[".closePopupAfterEdit"] = 1;
	$tdatadbo_ciudades5[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_ciudades5[".add"] = true;
$tdatadbo_ciudades5[".afterAddAction"] = 1;
$tdatadbo_ciudades5[".closePopupAfterAdd"] = 1;
$tdatadbo_ciudades5[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_ciudades5[".list"] = true;
}



$tdatadbo_ciudades5[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_ciudades5[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_ciudades5[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_ciudades5[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_ciudades5[".printFriendly"] = true;
}



$tdatadbo_ciudades5[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_ciudades5[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_ciudades5[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_ciudades5[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																

$tdatadbo_ciudades5[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_ciudades5[".buttonsAdded"] = false;

$tdatadbo_ciudades5[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_ciudades5[".isUseTimeForSearch"] = false;


$tdatadbo_ciudades5[".badgeColor"] = "BC8F8F";


$tdatadbo_ciudades5[".allSearchFields"] = array();
$tdatadbo_ciudades5[".filterFields"] = array();
$tdatadbo_ciudades5[".requiredSearchFields"] = array();

$tdatadbo_ciudades5[".googleLikeFields"] = array();
$tdatadbo_ciudades5[".googleLikeFields"][] = "Departamento";
$tdatadbo_ciudades5[".googleLikeFields"][] = "CiudadId";



$tdatadbo_ciudades5[".tableType"] = "list";

$tdatadbo_ciudades5[".printerPageOrientation"] = 0;
$tdatadbo_ciudades5[".nPrinterPageScale"] = 100;

$tdatadbo_ciudades5[".nPrinterSplitRecords"] = 40;

$tdatadbo_ciudades5[".geocodingEnabled"] = false;




$tdatadbo_ciudades5[".isDisplayLoading"] = true;

$tdatadbo_ciudades5[".isResizeColumns"] = true;





$tdatadbo_ciudades5[".pageSize"] = 20;

$tdatadbo_ciudades5[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dbo.Departamentos.Departamento ASC";
$tdatadbo_ciudades5[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_ciudades5[".orderindexes"] = array();
	$tdatadbo_ciudades5[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "dbo.Departamentos.Departamento");



$tdatadbo_ciudades5[".sqlHead"] = "SELECT dbo.Departamentos.Departamento,dbo.Ciudades.CiudadId";
$tdatadbo_ciudades5[".sqlFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$tdatadbo_ciudades5[".sqlWhereExpr"] = "";
$tdatadbo_ciudades5[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatadbo_ciudades5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_ciudades5[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_ciudades5[".highlightSearchResults"] = true;

$tableKeysdbo_ciudades5 = array();
$tableKeysdbo_ciudades5[] = "CiudadId";
$tdatadbo_ciudades5[".Keys"] = $tableKeysdbo_ciudades5;


$tdatadbo_ciudades5[".hideMobileList"] = array();




//	Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Departamento";
	$fdata["GoodName"] = "Departamento";
	$fdata["ownerTable"] = "dbo.Departamentos";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades5","Departamento");
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


	$tdatadbo_ciudades5["Departamento"] = $fdata;
		$tdatadbo_ciudades5[".searchableFields"][] = "Departamento";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades5","CiudadId");
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


	$tdatadbo_ciudades5["CiudadId"] = $fdata;
		$tdatadbo_ciudades5[".searchableFields"][] = "CiudadId";


$tables_data["dbo.Ciudades5"]=&$tdatadbo_ciudades5;
$field_labels["dbo_Ciudades5"] = &$fieldLabelsdbo_ciudades5;
$fieldToolTips["dbo_Ciudades5"] = &$fieldToolTipsdbo_ciudades5;
$placeHolders["dbo_Ciudades5"] = &$placeHoldersdbo_ciudades5;
$page_titles["dbo_Ciudades5"] = &$pageTitlesdbo_ciudades5;


changeTextControlsToDate( "dbo.Ciudades5" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades5"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades5"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_ciudades5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Departamentos.Departamento,dbo.Ciudades.CiudadId";
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
	"m_strName" => "Departamento",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades5"
));

$proto6["m_sql"] = "dbo.Departamentos.Departamento";
$proto6["m_srcTableName"] = "dbo.Ciudades5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades5"
));

$proto8["m_sql"] = "dbo.Ciudades.CiudadId";
$proto8["m_srcTableName"] = "dbo.Ciudades5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Ciudades";
$proto11["m_srcTableName"] = "dbo.Ciudades5";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CiudadId";
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Ciudad";
$proto11["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Ciudades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Ciudades5";
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
$proto15["m_srcTableName"] = "dbo.Ciudades5";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DepartamentoId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "Departamento";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId=dbo.Departamentos.DepartamentoId";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.Ciudades5";
$proto16=array();
$proto16["m_sql"] = "dbo.Departamentos.DepartamentoId = dbo.Ciudades.DepartamentoId";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades5"
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
	"m_srcTableName" => "dbo.Ciudades5"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Ciudades5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_ciudades5 = createSqlQuery_dbo_ciudades5();


	
		;

		

$tdatadbo_ciudades5[".sqlquery"] = $queryData_dbo_ciudades5;



$tdatadbo_ciudades5[".hasEvents"] = false;

?>