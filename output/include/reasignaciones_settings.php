<?php
$tdatareasignaciones = array();
$tdatareasignaciones[".searchableFields"] = array();
$tdatareasignaciones[".ShortName"] = "reasignaciones";
$tdatareasignaciones[".OwnerID"] = "";
$tdatareasignaciones[".OriginalTable"] = "dbo.Reasignaciones";


$tdatareasignaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareasignaciones[".originalPagesByType"] = $tdatareasignaciones[".pagesByType"];
$tdatareasignaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareasignaciones[".originalPages"] = $tdatareasignaciones[".pages"];
$tdatareasignaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareasignaciones[".originalDefaultPages"] = $tdatareasignaciones[".defaultPages"];

//	field labels
$fieldLabelsreasignaciones = array();
$fieldToolTipsreasignaciones = array();
$pageTitlesreasignaciones = array();
$placeHoldersreasignaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreasignaciones["Spanish"] = array();
	$fieldToolTipsreasignaciones["Spanish"] = array();
	$placeHoldersreasignaciones["Spanish"] = array();
	$pageTitlesreasignaciones["Spanish"] = array();
	$fieldLabelsreasignaciones["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsreasignaciones["Spanish"]["Fecha"] = "";
	$placeHoldersreasignaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsreasignaciones["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsreasignaciones["Spanish"]["AbogadoId"] = "";
	$placeHoldersreasignaciones["Spanish"]["AbogadoId"] = "";
	$fieldLabelsreasignaciones["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsreasignaciones["Spanish"]["ProcesoId"] = "";
	$placeHoldersreasignaciones["Spanish"]["ProcesoId"] = "";
	$pageTitlesreasignaciones["Spanish"]["list"] = "Asignaciones";
	if (count($fieldToolTipsreasignaciones["Spanish"]))
		$tdatareasignaciones[".isUseToolTips"] = true;
}


	$tdatareasignaciones[".NCSearch"] = true;



$tdatareasignaciones[".shortTableName"] = "reasignaciones";
$tdatareasignaciones[".nSecOptions"] = 0;

$tdatareasignaciones[".mainTableOwnerID"] = "";
$tdatareasignaciones[".entityType"] = 0;
$tdatareasignaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareasignaciones[".strOriginalTableName"] = "dbo.Reasignaciones";

	



$tdatareasignaciones[".showAddInPopup"] = false;

$tdatareasignaciones[".showEditInPopup"] = false;

$tdatareasignaciones[".showViewInPopup"] = false;

$tdatareasignaciones[".listAjax"] = false;
//	temporary
//$tdatareasignaciones[".listAjax"] = false;

	$tdatareasignaciones[".audit"] = true;

	$tdatareasignaciones[".locking"] = false;


$pages = $tdatareasignaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareasignaciones[".edit"] = true;
	$tdatareasignaciones[".afterEditAction"] = 1;
	$tdatareasignaciones[".closePopupAfterEdit"] = 1;
	$tdatareasignaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareasignaciones[".add"] = true;
$tdatareasignaciones[".afterAddAction"] = 1;
$tdatareasignaciones[".closePopupAfterAdd"] = 1;
$tdatareasignaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareasignaciones[".list"] = true;
}



$tdatareasignaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareasignaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareasignaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareasignaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareasignaciones[".printFriendly"] = true;
}



$tdatareasignaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareasignaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareasignaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareasignaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatareasignaciones[".ajaxCodeSnippetAdded"] = false;

$tdatareasignaciones[".buttonsAdded"] = false;

$tdatareasignaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareasignaciones[".isUseTimeForSearch"] = false;


$tdatareasignaciones[".badgeColor"] = "d2af80";


$tdatareasignaciones[".allSearchFields"] = array();
$tdatareasignaciones[".filterFields"] = array();
$tdatareasignaciones[".requiredSearchFields"] = array();

$tdatareasignaciones[".googleLikeFields"] = array();
$tdatareasignaciones[".googleLikeFields"][] = "Fecha";
$tdatareasignaciones[".googleLikeFields"][] = "AbogadoId";
$tdatareasignaciones[".googleLikeFields"][] = "ProcesoId";



$tdatareasignaciones[".tableType"] = "list";

$tdatareasignaciones[".printerPageOrientation"] = 0;
$tdatareasignaciones[".nPrinterPageScale"] = 100;

$tdatareasignaciones[".nPrinterSplitRecords"] = 40;

$tdatareasignaciones[".geocodingEnabled"] = false;





$tdatareasignaciones[".isResizeColumns"] = true;





$tdatareasignaciones[".pageSize"] = 20;

$tdatareasignaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareasignaciones[".strOrderBy"] = $tstrOrderBy;

$tdatareasignaciones[".orderindexes"] = array();


$tdatareasignaciones[".sqlHead"] = "SELECT Fecha,  AbogadoId,  ProcesoId";
$tdatareasignaciones[".sqlFrom"] = "FROM dbo.Reasignaciones";
$tdatareasignaciones[".sqlWhereExpr"] = "";
$tdatareasignaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareasignaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareasignaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatareasignaciones[".highlightSearchResults"] = true;

$tableKeysreasignaciones = array();
$tdatareasignaciones[".Keys"] = $tableKeysreasignaciones;


$tdatareasignaciones[".hideMobileList"] = array();




//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Reasignaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reasignaciones","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatareasignaciones["Fecha"] = $fdata;
		$tdatareasignaciones[".searchableFields"][] = "Fecha";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Reasignaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reasignaciones","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Abogado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatareasignaciones["AbogadoId"] = $fdata;
		$tdatareasignaciones[".searchableFields"][] = "AbogadoId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Reasignaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reasignaciones","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Procesos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Numero";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatareasignaciones["ProcesoId"] = $fdata;
		$tdatareasignaciones[".searchableFields"][] = "ProcesoId";


$tables_data["dbo.Reasignaciones"]=&$tdatareasignaciones;
$field_labels["dbo_Reasignaciones"] = &$fieldLabelsreasignaciones;
$fieldToolTips["dbo_Reasignaciones"] = &$fieldToolTipsreasignaciones;
$placeHolders["dbo_Reasignaciones"] = &$placeHoldersreasignaciones;
$page_titles["dbo_Reasignaciones"] = &$pageTitlesreasignaciones;


changeTextControlsToDate( "dbo.Reasignaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Reasignaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Reasignaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Abogados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Abogados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "abogados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Reasignaciones"][0] = $masterParams;
				$masterTablesData["dbo.Reasignaciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][0]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Reasignaciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][0]["detailKeys"][]="AbogadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Reasignaciones"][1] = $masterParams;
				$masterTablesData["dbo.Reasignaciones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Reasignaciones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][1]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.ProcesosReasignar";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesosreasignar";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Reasignaciones"][2] = $masterParams;
				$masterTablesData["dbo.Reasignaciones"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][2]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Reasignaciones"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Reasignaciones"][2]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reasignaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Fecha,  AbogadoId,  ProcesoId";
$proto0["m_strFrom"] = "FROM dbo.Reasignaciones";
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
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.Reasignaciones"
));

$proto6["m_sql"] = "Fecha";
$proto6["m_srcTableName"] = "dbo.Reasignaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.Reasignaciones"
));

$proto8["m_sql"] = "AbogadoId";
$proto8["m_srcTableName"] = "dbo.Reasignaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.Reasignaciones"
));

$proto10["m_sql"] = "ProcesoId";
$proto10["m_srcTableName"] = "dbo.Reasignaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Reasignaciones";
$proto13["m_srcTableName"] = "dbo.Reasignaciones";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ReasignacionId";
$proto13["m_columns"][] = "Fecha";
$proto13["m_columns"][] = "ProcesoId";
$proto13["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Reasignaciones";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Reasignaciones";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Reasignaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reasignaciones = createSqlQuery_reasignaciones();


	
		;

			

$tdatareasignaciones[".sqlquery"] = $queryData_reasignaciones;



$tdatareasignaciones[".hasEvents"] = false;

?>