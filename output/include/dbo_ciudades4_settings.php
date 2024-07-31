<?php
$tdatadbo_ciudades4 = array();
$tdatadbo_ciudades4[".searchableFields"] = array();
$tdatadbo_ciudades4[".ShortName"] = "dbo_ciudades4";
$tdatadbo_ciudades4[".OwnerID"] = "";
$tdatadbo_ciudades4[".OriginalTable"] = "dbo.Ciudades";


$tdatadbo_ciudades4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_ciudades4[".originalPagesByType"] = $tdatadbo_ciudades4[".pagesByType"];
$tdatadbo_ciudades4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_ciudades4[".originalPages"] = $tdatadbo_ciudades4[".pages"];
$tdatadbo_ciudades4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_ciudades4[".originalDefaultPages"] = $tdatadbo_ciudades4[".defaultPages"];

//	field labels
$fieldLabelsdbo_ciudades4 = array();
$fieldToolTipsdbo_ciudades4 = array();
$pageTitlesdbo_ciudades4 = array();
$placeHoldersdbo_ciudades4 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_ciudades4["Spanish"] = array();
	$fieldToolTipsdbo_ciudades4["Spanish"] = array();
	$placeHoldersdbo_ciudades4["Spanish"] = array();
	$pageTitlesdbo_ciudades4["Spanish"] = array();
	$fieldLabelsdbo_ciudades4["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsdbo_ciudades4["Spanish"]["CiudadId"] = "";
	$placeHoldersdbo_ciudades4["Spanish"]["CiudadId"] = "";
	if (count($fieldToolTipsdbo_ciudades4["Spanish"]))
		$tdatadbo_ciudades4[".isUseToolTips"] = true;
}


	$tdatadbo_ciudades4[".NCSearch"] = true;



$tdatadbo_ciudades4[".shortTableName"] = "dbo_ciudades4";
$tdatadbo_ciudades4[".nSecOptions"] = 0;

$tdatadbo_ciudades4[".mainTableOwnerID"] = "";
$tdatadbo_ciudades4[".entityType"] = 1;
$tdatadbo_ciudades4[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_ciudades4[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdatadbo_ciudades4[".showAddInPopup"] = false;

$tdatadbo_ciudades4[".showEditInPopup"] = false;

$tdatadbo_ciudades4[".showViewInPopup"] = false;

$tdatadbo_ciudades4[".listAjax"] = false;
//	temporary
//$tdatadbo_ciudades4[".listAjax"] = false;

	$tdatadbo_ciudades4[".audit"] = true;

	$tdatadbo_ciudades4[".locking"] = false;


$pages = $tdatadbo_ciudades4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_ciudades4[".edit"] = true;
	$tdatadbo_ciudades4[".afterEditAction"] = 1;
	$tdatadbo_ciudades4[".closePopupAfterEdit"] = 1;
	$tdatadbo_ciudades4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_ciudades4[".add"] = true;
$tdatadbo_ciudades4[".afterAddAction"] = 1;
$tdatadbo_ciudades4[".closePopupAfterAdd"] = 1;
$tdatadbo_ciudades4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_ciudades4[".list"] = true;
}



$tdatadbo_ciudades4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_ciudades4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_ciudades4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_ciudades4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_ciudades4[".printFriendly"] = true;
}



$tdatadbo_ciudades4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_ciudades4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_ciudades4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_ciudades4[".isUseAjaxSuggest"] = true;



																																																																																																

$tdatadbo_ciudades4[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_ciudades4[".buttonsAdded"] = false;

$tdatadbo_ciudades4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_ciudades4[".isUseTimeForSearch"] = false;


$tdatadbo_ciudades4[".badgeColor"] = "778899";


$tdatadbo_ciudades4[".allSearchFields"] = array();
$tdatadbo_ciudades4[".filterFields"] = array();
$tdatadbo_ciudades4[".requiredSearchFields"] = array();

$tdatadbo_ciudades4[".googleLikeFields"] = array();
$tdatadbo_ciudades4[".googleLikeFields"][] = "CiudadId";



$tdatadbo_ciudades4[".tableType"] = "list";

$tdatadbo_ciudades4[".printerPageOrientation"] = 0;
$tdatadbo_ciudades4[".nPrinterPageScale"] = 100;

$tdatadbo_ciudades4[".nPrinterSplitRecords"] = 40;

$tdatadbo_ciudades4[".geocodingEnabled"] = false;





$tdatadbo_ciudades4[".isResizeColumns"] = true;





$tdatadbo_ciudades4[".pageSize"] = 20;

$tdatadbo_ciudades4[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dbo.Departamentos.Departamento";
$tdatadbo_ciudades4[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_ciudades4[".orderindexes"] = array();


$tdatadbo_ciudades4[".sqlHead"] = "SELECT dbo.Ciudades.CiudadId";
$tdatadbo_ciudades4[".sqlFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId = dbo.Departamentos.DepartamentoId";
$tdatadbo_ciudades4[".sqlWhereExpr"] = "";
$tdatadbo_ciudades4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_ciudades4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_ciudades4[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_ciudades4[".highlightSearchResults"] = true;

$tableKeysdbo_ciudades4 = array();
$tableKeysdbo_ciudades4[] = "CiudadId";
$tdatadbo_ciudades4[".Keys"] = $tableKeysdbo_ciudades4;


$tdatadbo_ciudades4[".hideMobileList"] = array();




//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades4","CiudadId");
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


	$tdatadbo_ciudades4["CiudadId"] = $fdata;
		$tdatadbo_ciudades4[".searchableFields"][] = "CiudadId";


$tables_data["dbo.Ciudades4"]=&$tdatadbo_ciudades4;
$field_labels["dbo_Ciudades4"] = &$fieldLabelsdbo_ciudades4;
$fieldToolTips["dbo_Ciudades4"] = &$fieldToolTipsdbo_ciudades4;
$placeHolders["dbo_Ciudades4"] = &$placeHoldersdbo_ciudades4;
$page_titles["dbo_Ciudades4"] = &$pageTitlesdbo_ciudades4;


changeTextControlsToDate( "dbo.Ciudades4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_ciudades4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Ciudades.CiudadId";
$proto0["m_strFrom"] = "FROM dbo.Ciudades  INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId = dbo.Departamentos.DepartamentoId";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dbo.Departamentos.Departamento";
	
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
	"m_srcTableName" => "dbo.Ciudades4"
));

$proto6["m_sql"] = "dbo.Ciudades.CiudadId";
$proto6["m_srcTableName"] = "dbo.Ciudades4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Ciudades";
$proto9["m_srcTableName"] = "dbo.Ciudades4";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "CiudadId";
$proto9["m_columns"][] = "Codigo";
$proto9["m_columns"][] = "Ciudad";
$proto9["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Ciudades";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Ciudades4";
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
$proto13["m_srcTableName"] = "dbo.Ciudades4";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DepartamentoId";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Departamento";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "INNER JOIN dbo.Departamentos ON dbo.Ciudades.DepartamentoId = dbo.Departamentos.DepartamentoId";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Ciudades4";
$proto14=array();
$proto14["m_sql"] = "dbo.Departamentos.DepartamentoId = dbo.Ciudades.DepartamentoId";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Ciudades4"
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
	"m_srcTableName" => "dbo.Ciudades4"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Ciudades4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_ciudades4 = createSqlQuery_dbo_ciudades4();


	
		;

	

$tdatadbo_ciudades4[".sqlquery"] = $queryData_dbo_ciudades4;



$tdatadbo_ciudades4[".hasEvents"] = false;

?>