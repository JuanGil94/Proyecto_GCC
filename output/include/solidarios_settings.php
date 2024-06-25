<?php
$tdatasolidarios = array();
$tdatasolidarios[".searchableFields"] = array();
$tdatasolidarios[".ShortName"] = "solidarios";
$tdatasolidarios[".OwnerID"] = "";
$tdatasolidarios[".OriginalTable"] = "dbo.Solidarios";


$tdatasolidarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasolidarios[".originalPagesByType"] = $tdatasolidarios[".pagesByType"];
$tdatasolidarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasolidarios[".originalPages"] = $tdatasolidarios[".pages"];
$tdatasolidarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasolidarios[".originalDefaultPages"] = $tdatasolidarios[".defaultPages"];

//	field labels
$fieldLabelssolidarios = array();
$fieldToolTipssolidarios = array();
$pageTitlessolidarios = array();
$placeHolderssolidarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolidarios["Spanish"] = array();
	$fieldToolTipssolidarios["Spanish"] = array();
	$placeHolderssolidarios["Spanish"] = array();
	$pageTitlessolidarios["Spanish"] = array();
	$fieldLabelssolidarios["Spanish"]["SolidarioId"] = "Solidario Id";
	$fieldToolTipssolidarios["Spanish"]["SolidarioId"] = "";
	$placeHolderssolidarios["Spanish"]["SolidarioId"] = "";
	$fieldLabelssolidarios["Spanish"]["ProcesoId"] = "No. Proceso";
	$fieldToolTipssolidarios["Spanish"]["ProcesoId"] = "";
	$placeHolderssolidarios["Spanish"]["ProcesoId"] = "";
	$fieldLabelssolidarios["Spanish"]["SancionadoId"] = "Deudor";
	$fieldToolTipssolidarios["Spanish"]["SancionadoId"] = "";
	$placeHolderssolidarios["Spanish"]["SancionadoId"] = "";
	if (count($fieldToolTipssolidarios["Spanish"]))
		$tdatasolidarios[".isUseToolTips"] = true;
}


	$tdatasolidarios[".NCSearch"] = true;



$tdatasolidarios[".shortTableName"] = "solidarios";
$tdatasolidarios[".nSecOptions"] = 0;

$tdatasolidarios[".mainTableOwnerID"] = "";
$tdatasolidarios[".entityType"] = 0;
$tdatasolidarios[".connId"] = "GCC_at_S00001_CCAD01";


$tdatasolidarios[".strOriginalTableName"] = "dbo.Solidarios";

	



$tdatasolidarios[".showAddInPopup"] = false;

$tdatasolidarios[".showEditInPopup"] = false;

$tdatasolidarios[".showViewInPopup"] = false;

$tdatasolidarios[".listAjax"] = false;
//	temporary
//$tdatasolidarios[".listAjax"] = false;

	$tdatasolidarios[".audit"] = true;

	$tdatasolidarios[".locking"] = false;


$pages = $tdatasolidarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasolidarios[".edit"] = true;
	$tdatasolidarios[".afterEditAction"] = 1;
	$tdatasolidarios[".closePopupAfterEdit"] = 1;
	$tdatasolidarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasolidarios[".add"] = true;
$tdatasolidarios[".afterAddAction"] = 1;
$tdatasolidarios[".closePopupAfterAdd"] = 1;
$tdatasolidarios[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatasolidarios[".list"] = true;
}



$tdatasolidarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasolidarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasolidarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasolidarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasolidarios[".printFriendly"] = true;
}



$tdatasolidarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasolidarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasolidarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasolidarios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																												

$tdatasolidarios[".ajaxCodeSnippetAdded"] = false;

$tdatasolidarios[".buttonsAdded"] = false;

$tdatasolidarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasolidarios[".isUseTimeForSearch"] = false;


$tdatasolidarios[".badgeColor"] = "edca00";


$tdatasolidarios[".allSearchFields"] = array();
$tdatasolidarios[".filterFields"] = array();
$tdatasolidarios[".requiredSearchFields"] = array();

$tdatasolidarios[".googleLikeFields"] = array();
$tdatasolidarios[".googleLikeFields"][] = "SolidarioId";
$tdatasolidarios[".googleLikeFields"][] = "ProcesoId";
$tdatasolidarios[".googleLikeFields"][] = "SancionadoId";



$tdatasolidarios[".tableType"] = "list";

$tdatasolidarios[".printerPageOrientation"] = 0;
$tdatasolidarios[".nPrinterPageScale"] = 100;

$tdatasolidarios[".nPrinterSplitRecords"] = 40;

$tdatasolidarios[".geocodingEnabled"] = false;





$tdatasolidarios[".isResizeColumns"] = true;





$tdatasolidarios[".pageSize"] = 20;

$tdatasolidarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasolidarios[".strOrderBy"] = $tstrOrderBy;

$tdatasolidarios[".orderindexes"] = array();


$tdatasolidarios[".sqlHead"] = "SELECT SolidarioId,  	ProcesoId,  	SancionadoId";
$tdatasolidarios[".sqlFrom"] = "FROM dbo.Solidarios";
$tdatasolidarios[".sqlWhereExpr"] = "";
$tdatasolidarios[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatasolidarios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolidarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolidarios[".arrGroupsPerPage"] = $arrGPP;

$tdatasolidarios[".highlightSearchResults"] = true;

$tableKeyssolidarios = array();
$tableKeyssolidarios[] = "SolidarioId";
$tdatasolidarios[".Keys"] = $tableKeyssolidarios;


$tdatasolidarios[".hideMobileList"] = array();




//	SolidarioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SolidarioId";
	$fdata["GoodName"] = "SolidarioId";
	$fdata["ownerTable"] = "dbo.Solidarios";
	$fdata["Label"] = GetFieldLabel("dbo_Solidarios","SolidarioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SolidarioId";

		$fdata["sourceSingle"] = "SolidarioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SolidarioId";

	
	
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


	$tdatasolidarios["SolidarioId"] = $fdata;
		$tdatasolidarios[".searchableFields"][] = "SolidarioId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Solidarios";
	$fdata["Label"] = GetFieldLabel("dbo_Solidarios","ProcesoId");
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatasolidarios["ProcesoId"] = $fdata;
		$tdatasolidarios[".searchableFields"][] = "ProcesoId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Solidarios";
	$fdata["Label"] = GetFieldLabel("dbo_Solidarios","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Sancionado + ' - ' + Documento";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatasolidarios["SancionadoId"] = $fdata;
		$tdatasolidarios[".searchableFields"][] = "SancionadoId";


$tables_data["dbo.Solidarios"]=&$tdatasolidarios;
$field_labels["dbo_Solidarios"] = &$fieldLabelssolidarios;
$fieldToolTips["dbo_Solidarios"] = &$fieldToolTipssolidarios;
$placeHolders["dbo_Solidarios"] = &$placeHolderssolidarios;
$page_titles["dbo_Solidarios"] = &$pageTitlessolidarios;


changeTextControlsToDate( "dbo.Solidarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Solidarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Solidarios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Solidarios"][0] = $masterParams;
				$masterTablesData["dbo.Solidarios"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Solidarios"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Solidarios"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Solidarios"][0]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Solidarios"][1] = $masterParams;
				$masterTablesData["dbo.Solidarios"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Solidarios"][1]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.Solidarios"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Solidarios"][1]["detailKeys"][]="SancionadoId";
		
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
					$masterTablesData["dbo.Solidarios"][2] = $masterParams;
				$masterTablesData["dbo.Solidarios"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Solidarios"][2]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Solidarios"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Solidarios"][2]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_solidarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SolidarioId,  	ProcesoId,  	SancionadoId";
$proto0["m_strFrom"] = "FROM dbo.Solidarios";
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
	"m_strName" => "SolidarioId",
	"m_strTable" => "dbo.Solidarios",
	"m_srcTableName" => "dbo.Solidarios"
));

$proto6["m_sql"] = "SolidarioId";
$proto6["m_srcTableName"] = "dbo.Solidarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Solidarios",
	"m_srcTableName" => "dbo.Solidarios"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Solidarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Solidarios",
	"m_srcTableName" => "dbo.Solidarios"
));

$proto10["m_sql"] = "SancionadoId";
$proto10["m_srcTableName"] = "dbo.Solidarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Solidarios";
$proto13["m_srcTableName"] = "dbo.Solidarios";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "SolidarioId";
$proto13["m_columns"][] = "ProcesoId";
$proto13["m_columns"][] = "SancionadoId";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Solidarios";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Solidarios";
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
$proto0["m_srcTableName"]="dbo.Solidarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solidarios = createSqlQuery_solidarios();


	
		;

			

$tdatasolidarios[".sqlquery"] = $queryData_solidarios;



$tdatasolidarios[".hasEvents"] = false;

?>