<?php
$tdataestados = array();
$tdataestados[".searchableFields"] = array();
$tdataestados[".ShortName"] = "estados";
$tdataestados[".OwnerID"] = "";
$tdataestados[".OriginalTable"] = "dbo.Estados";


$tdataestados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataestados[".originalPagesByType"] = $tdataestados[".pagesByType"];
$tdataestados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataestados[".originalPages"] = $tdataestados[".pages"];
$tdataestados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataestados[".originalDefaultPages"] = $tdataestados[".defaultPages"];

//	field labels
$fieldLabelsestados = array();
$fieldToolTipsestados = array();
$pageTitlesestados = array();
$placeHoldersestados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestados["Spanish"] = array();
	$fieldToolTipsestados["Spanish"] = array();
	$placeHoldersestados["Spanish"] = array();
	$pageTitlesestados["Spanish"] = array();
	$fieldLabelsestados["Spanish"]["EstadoId"] = "Estado Id";
	$fieldToolTipsestados["Spanish"]["EstadoId"] = "";
	$placeHoldersestados["Spanish"]["EstadoId"] = "";
	$fieldLabelsestados["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsestados["Spanish"]["Estado"] = "";
	$placeHoldersestados["Spanish"]["Estado"] = "";
	$fieldLabelsestados["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsestados["Spanish"]["Tipo"] = "";
	$placeHoldersestados["Spanish"]["Tipo"] = "";
	if (count($fieldToolTipsestados["Spanish"]))
		$tdataestados[".isUseToolTips"] = true;
}


	$tdataestados[".NCSearch"] = true;



$tdataestados[".shortTableName"] = "estados";
$tdataestados[".nSecOptions"] = 0;

$tdataestados[".mainTableOwnerID"] = "";
$tdataestados[".entityType"] = 0;
$tdataestados[".connId"] = "GCC_at_S00001_CCAD01";


$tdataestados[".strOriginalTableName"] = "dbo.Estados";

	



$tdataestados[".showAddInPopup"] = false;

$tdataestados[".showEditInPopup"] = false;

$tdataestados[".showViewInPopup"] = false;

$tdataestados[".listAjax"] = false;
//	temporary
//$tdataestados[".listAjax"] = false;

	$tdataestados[".audit"] = true;

	$tdataestados[".locking"] = false;


$pages = $tdataestados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestados[".edit"] = true;
	$tdataestados[".afterEditAction"] = 1;
	$tdataestados[".closePopupAfterEdit"] = 1;
	$tdataestados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestados[".add"] = true;
$tdataestados[".afterAddAction"] = 1;
$tdataestados[".closePopupAfterAdd"] = 1;
$tdataestados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestados[".list"] = true;
}



$tdataestados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestados[".printFriendly"] = true;
}



$tdataestados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestados[".isUseAjaxSuggest"] = true;



																																													

$tdataestados[".ajaxCodeSnippetAdded"] = false;

$tdataestados[".buttonsAdded"] = false;

$tdataestados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestados[".isUseTimeForSearch"] = false;


$tdataestados[".badgeColor"] = "EDCA00";


$tdataestados[".allSearchFields"] = array();
$tdataestados[".filterFields"] = array();
$tdataestados[".requiredSearchFields"] = array();

$tdataestados[".googleLikeFields"] = array();
$tdataestados[".googleLikeFields"][] = "EstadoId";
$tdataestados[".googleLikeFields"][] = "Estado";
$tdataestados[".googleLikeFields"][] = "Tipo";



$tdataestados[".tableType"] = "list";

$tdataestados[".printerPageOrientation"] = 0;
$tdataestados[".nPrinterPageScale"] = 100;

$tdataestados[".nPrinterSplitRecords"] = 40;

$tdataestados[".geocodingEnabled"] = false;





$tdataestados[".isResizeColumns"] = true;





$tdataestados[".pageSize"] = 20;

$tdataestados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataestados[".strOrderBy"] = $tstrOrderBy;

$tdataestados[".orderindexes"] = array();


$tdataestados[".sqlHead"] = "SELECT EstadoId,  	Estado,  	Tipo";
$tdataestados[".sqlFrom"] = "FROM dbo.Estados";
$tdataestados[".sqlWhereExpr"] = "";
$tdataestados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestados[".arrGroupsPerPage"] = $arrGPP;

$tdataestados[".highlightSearchResults"] = true;

$tableKeysestados = array();
$tableKeysestados[] = "EstadoId";
$tdataestados[".Keys"] = $tableKeysestados;


$tdataestados[".hideMobileList"] = array();




//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_Estados","EstadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EstadoId";

	
	
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


	$tdataestados["EstadoId"] = $fdata;
		$tdataestados[".searchableFields"][] = "EstadoId";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_Estados","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdataestados["Estado"] = $fdata;
		$tdataestados[".searchableFields"][] = "Estado";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_Estados","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataestados["Tipo"] = $fdata;
		$tdataestados[".searchableFields"][] = "Tipo";


$tables_data["dbo.Estados"]=&$tdataestados;
$field_labels["dbo_Estados"] = &$fieldLabelsestados;
$fieldToolTips["dbo_Estados"] = &$fieldToolTipsestados;
$placeHolders["dbo_Estados"] = &$placeHoldersestados;
$page_titles["dbo_Estados"] = &$pageTitlesestados;


changeTextControlsToDate( "dbo.Estados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Estados"] = array();
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


		
	$detailsTablesData["dbo.Estados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Estados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Estados"][$dIndex]["masterKeys"][]="EstadoId";

				$detailsTablesData["dbo.Estados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Estados"][$dIndex]["detailKeys"][]="EstadoId";
//	dbo.ProcesosSinNotificaReport
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosSinNotificaReport";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		$detailsParam["dType"]=PAGE_REPORT;
	
		$detailsParam["dShortTable"] = "procesossinnotificareport";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosSinNotificaReport");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Estados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Estados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Estados"][$dIndex]["masterKeys"][]="EstadoId";

				$detailsTablesData["dbo.Estados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Estados"][$dIndex]["detailKeys"][]="EstadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Estados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EstadoId,  	Estado,  	Tipo";
$proto0["m_strFrom"] = "FROM dbo.Estados";
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
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Estados",
	"m_srcTableName" => "dbo.Estados"
));

$proto6["m_sql"] = "EstadoId";
$proto6["m_srcTableName"] = "dbo.Estados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "dbo.Estados",
	"m_srcTableName" => "dbo.Estados"
));

$proto8["m_sql"] = "Estado";
$proto8["m_srcTableName"] = "dbo.Estados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Estados",
	"m_srcTableName" => "dbo.Estados"
));

$proto10["m_sql"] = "Tipo";
$proto10["m_srcTableName"] = "dbo.Estados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Estados";
$proto13["m_srcTableName"] = "dbo.Estados";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EstadoId";
$proto13["m_columns"][] = "Estado";
$proto13["m_columns"][] = "Tipo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Estados";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Estados";
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
$proto0["m_srcTableName"]="dbo.Estados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estados = createSqlQuery_estados();


	
		;

			

$tdataestados[".sqlquery"] = $queryData_estados;



$tdataestados[".hasEvents"] = false;

?>