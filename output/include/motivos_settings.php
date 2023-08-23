<?php
$tdatamotivos = array();
$tdatamotivos[".searchableFields"] = array();
$tdatamotivos[".ShortName"] = "motivos";
$tdatamotivos[".OwnerID"] = "";
$tdatamotivos[".OriginalTable"] = "dbo.Motivos";


$tdatamotivos[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatamotivos[".originalPagesByType"] = $tdatamotivos[".pagesByType"];
$tdatamotivos[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatamotivos[".originalPages"] = $tdatamotivos[".pages"];
$tdatamotivos[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatamotivos[".originalDefaultPages"] = $tdatamotivos[".defaultPages"];

//	field labels
$fieldLabelsmotivos = array();
$fieldToolTipsmotivos = array();
$pageTitlesmotivos = array();
$placeHoldersmotivos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmotivos["Spanish"] = array();
	$fieldToolTipsmotivos["Spanish"] = array();
	$placeHoldersmotivos["Spanish"] = array();
	$pageTitlesmotivos["Spanish"] = array();
	$fieldLabelsmotivos["Spanish"]["MotivoId"] = "Motivo Id";
	$fieldToolTipsmotivos["Spanish"]["MotivoId"] = "";
	$placeHoldersmotivos["Spanish"]["MotivoId"] = "";
	$fieldLabelsmotivos["Spanish"]["Motivo"] = "Motivo";
	$fieldToolTipsmotivos["Spanish"]["Motivo"] = "";
	$placeHoldersmotivos["Spanish"]["Motivo"] = "";
	if (count($fieldToolTipsmotivos["Spanish"]))
		$tdatamotivos[".isUseToolTips"] = true;
}


	$tdatamotivos[".NCSearch"] = true;



$tdatamotivos[".shortTableName"] = "motivos";
$tdatamotivos[".nSecOptions"] = 0;

$tdatamotivos[".mainTableOwnerID"] = "";
$tdatamotivos[".entityType"] = 0;
$tdatamotivos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamotivos[".strOriginalTableName"] = "dbo.Motivos";

	



$tdatamotivos[".showAddInPopup"] = false;

$tdatamotivos[".showEditInPopup"] = false;

$tdatamotivos[".showViewInPopup"] = false;

$tdatamotivos[".listAjax"] = false;
//	temporary
//$tdatamotivos[".listAjax"] = false;

	$tdatamotivos[".audit"] = true;

	$tdatamotivos[".locking"] = false;


$pages = $tdatamotivos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamotivos[".edit"] = true;
	$tdatamotivos[".afterEditAction"] = 1;
	$tdatamotivos[".closePopupAfterEdit"] = 1;
	$tdatamotivos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamotivos[".add"] = true;
$tdatamotivos[".afterAddAction"] = 1;
$tdatamotivos[".closePopupAfterAdd"] = 1;
$tdatamotivos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamotivos[".list"] = true;
}



$tdatamotivos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamotivos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamotivos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamotivos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamotivos[".printFriendly"] = true;
}



$tdatamotivos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamotivos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamotivos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamotivos[".isUseAjaxSuggest"] = true;



			

$tdatamotivos[".ajaxCodeSnippetAdded"] = false;

$tdatamotivos[".buttonsAdded"] = false;

$tdatamotivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamotivos[".isUseTimeForSearch"] = false;


$tdatamotivos[".badgeColor"] = "DB7093";


$tdatamotivos[".allSearchFields"] = array();
$tdatamotivos[".filterFields"] = array();
$tdatamotivos[".requiredSearchFields"] = array();

$tdatamotivos[".googleLikeFields"] = array();
$tdatamotivos[".googleLikeFields"][] = "MotivoId";
$tdatamotivos[".googleLikeFields"][] = "Motivo";



$tdatamotivos[".tableType"] = "list";

$tdatamotivos[".printerPageOrientation"] = 0;
$tdatamotivos[".nPrinterPageScale"] = 100;

$tdatamotivos[".nPrinterSplitRecords"] = 40;

$tdatamotivos[".geocodingEnabled"] = false;










$tdatamotivos[".pageSize"] = 20;

$tdatamotivos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamotivos[".strOrderBy"] = $tstrOrderBy;

$tdatamotivos[".orderindexes"] = array();


$tdatamotivos[".sqlHead"] = "SELECT MotivoId,  	Motivo";
$tdatamotivos[".sqlFrom"] = "FROM dbo.Motivos";
$tdatamotivos[".sqlWhereExpr"] = "";
$tdatamotivos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamotivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamotivos[".arrGroupsPerPage"] = $arrGPP;

$tdatamotivos[".highlightSearchResults"] = true;

$tableKeysmotivos = array();
$tableKeysmotivos[] = "MotivoId";
$tdatamotivos[".Keys"] = $tableKeysmotivos;


$tdatamotivos[".hideMobileList"] = array();




//	MotivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MotivoId";
	$fdata["GoodName"] = "MotivoId";
	$fdata["ownerTable"] = "dbo.Motivos";
	$fdata["Label"] = GetFieldLabel("dbo_Motivos","MotivoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MotivoId";

		$fdata["sourceSingle"] = "MotivoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoId";

	
	
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


	$tdatamotivos["MotivoId"] = $fdata;
		$tdatamotivos[".searchableFields"][] = "MotivoId";
//	Motivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Motivo";
	$fdata["GoodName"] = "Motivo";
	$fdata["ownerTable"] = "dbo.Motivos";
	$fdata["Label"] = GetFieldLabel("dbo_Motivos","Motivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Motivo";

		$fdata["sourceSingle"] = "Motivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Motivo";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamotivos["Motivo"] = $fdata;
		$tdatamotivos[".searchableFields"][] = "Motivo";


$tables_data["dbo.Motivos"]=&$tdatamotivos;
$field_labels["dbo_Motivos"] = &$fieldLabelsmotivos;
$fieldToolTips["dbo_Motivos"] = &$fieldToolTipsmotivos;
$placeHolders["dbo_Motivos"] = &$placeHoldersmotivos;
$page_titles["dbo_Motivos"] = &$pageTitlesmotivos;


changeTextControlsToDate( "dbo.Motivos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Motivos"] = array();
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


		
	$detailsTablesData["dbo.Motivos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Motivos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Motivos"][$dIndex]["masterKeys"][]="MotivoId";

				$detailsTablesData["dbo.Motivos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Motivos"][$dIndex]["detailKeys"][]="MotivoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Motivos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_motivos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MotivoId,  	Motivo";
$proto0["m_strFrom"] = "FROM dbo.Motivos";
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
	"m_strName" => "MotivoId",
	"m_strTable" => "dbo.Motivos",
	"m_srcTableName" => "dbo.Motivos"
));

$proto6["m_sql"] = "MotivoId";
$proto6["m_srcTableName"] = "dbo.Motivos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Motivo",
	"m_strTable" => "dbo.Motivos",
	"m_srcTableName" => "dbo.Motivos"
));

$proto8["m_sql"] = "Motivo";
$proto8["m_srcTableName"] = "dbo.Motivos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Motivos";
$proto11["m_srcTableName"] = "dbo.Motivos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MotivoId";
$proto11["m_columns"][] = "Motivo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Motivos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Motivos";
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
$proto0["m_srcTableName"]="dbo.Motivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_motivos = createSqlQuery_motivos();


	
		;

		

$tdatamotivos[".sqlquery"] = $queryData_motivos;



$tdatamotivos[".hasEvents"] = false;

?>