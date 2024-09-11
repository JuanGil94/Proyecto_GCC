<?php
$tdatatipocobro = array();
$tdatatipocobro[".searchableFields"] = array();
$tdatatipocobro[".ShortName"] = "tipocobro";
$tdatatipocobro[".OwnerID"] = "";
$tdatatipocobro[".OriginalTable"] = "dbo.tipoCobro";


$tdatatipocobro[".pagesByType"] = my_json_decode( "{}" );
$tdatatipocobro[".originalPagesByType"] = $tdatatipocobro[".pagesByType"];
$tdatatipocobro[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipocobro[".originalPages"] = $tdatatipocobro[".pages"];
$tdatatipocobro[".defaultPages"] = my_json_decode( "{}" );
$tdatatipocobro[".originalDefaultPages"] = $tdatatipocobro[".defaultPages"];

//	field labels
$fieldLabelstipocobro = array();
$fieldToolTipstipocobro = array();
$pageTitlestipocobro = array();
$placeHolderstipocobro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipocobro["Spanish"] = array();
	$fieldToolTipstipocobro["Spanish"] = array();
	$placeHolderstipocobro["Spanish"] = array();
	$pageTitlestipocobro["Spanish"] = array();
	$fieldLabelstipocobro["Spanish"]["TipoId"] = "Tipo Id";
	$fieldToolTipstipocobro["Spanish"]["TipoId"] = "";
	$placeHolderstipocobro["Spanish"]["TipoId"] = "";
	$fieldLabelstipocobro["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipstipocobro["Spanish"]["Tipo"] = "";
	$placeHolderstipocobro["Spanish"]["Tipo"] = "";
	if (count($fieldToolTipstipocobro["Spanish"]))
		$tdatatipocobro[".isUseToolTips"] = true;
}


	$tdatatipocobro[".NCSearch"] = true;



$tdatatipocobro[".shortTableName"] = "tipocobro";
$tdatatipocobro[".nSecOptions"] = 0;

$tdatatipocobro[".mainTableOwnerID"] = "";
$tdatatipocobro[".entityType"] = 0;
$tdatatipocobro[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatipocobro[".strOriginalTableName"] = "dbo.tipoCobro";

	



$tdatatipocobro[".showAddInPopup"] = false;

$tdatatipocobro[".showEditInPopup"] = false;

$tdatatipocobro[".showViewInPopup"] = false;

$tdatatipocobro[".listAjax"] = false;
//	temporary
//$tdatatipocobro[".listAjax"] = false;

	$tdatatipocobro[".audit"] = false;

	$tdatatipocobro[".locking"] = false;


$pages = $tdatatipocobro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipocobro[".edit"] = true;
	$tdatatipocobro[".afterEditAction"] = 1;
	$tdatatipocobro[".closePopupAfterEdit"] = 1;
	$tdatatipocobro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipocobro[".add"] = true;
$tdatatipocobro[".afterAddAction"] = 1;
$tdatatipocobro[".closePopupAfterAdd"] = 1;
$tdatatipocobro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipocobro[".list"] = true;
}



$tdatatipocobro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipocobro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipocobro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipocobro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipocobro[".printFriendly"] = true;
}



$tdatatipocobro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipocobro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipocobro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipocobro[".isUseAjaxSuggest"] = true;



																																																																																																																																																												

$tdatatipocobro[".ajaxCodeSnippetAdded"] = false;

$tdatatipocobro[".buttonsAdded"] = false;

$tdatatipocobro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipocobro[".isUseTimeForSearch"] = false;


$tdatatipocobro[".badgeColor"] = "7B68EE";


$tdatatipocobro[".allSearchFields"] = array();
$tdatatipocobro[".filterFields"] = array();
$tdatatipocobro[".requiredSearchFields"] = array();

$tdatatipocobro[".googleLikeFields"] = array();
$tdatatipocobro[".googleLikeFields"][] = "TipoId";
$tdatatipocobro[".googleLikeFields"][] = "Tipo";



$tdatatipocobro[".tableType"] = "list";

$tdatatipocobro[".printerPageOrientation"] = 0;
$tdatatipocobro[".nPrinterPageScale"] = 100;

$tdatatipocobro[".nPrinterSplitRecords"] = 40;

$tdatatipocobro[".geocodingEnabled"] = false;





$tdatatipocobro[".isResizeColumns"] = true;





$tdatatipocobro[".pageSize"] = 20;

$tdatatipocobro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipocobro[".strOrderBy"] = $tstrOrderBy;

$tdatatipocobro[".orderindexes"] = array();


$tdatatipocobro[".sqlHead"] = "SELECT TipoId,  	Tipo";
$tdatatipocobro[".sqlFrom"] = "FROM dbo.tipoCobro";
$tdatatipocobro[".sqlWhereExpr"] = "";
$tdatatipocobro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipocobro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipocobro[".arrGroupsPerPage"] = $arrGPP;

$tdatatipocobro[".highlightSearchResults"] = true;

$tableKeystipocobro = array();
$tableKeystipocobro[] = "TipoId";
$tdatatipocobro[".Keys"] = $tableKeystipocobro;


$tdatatipocobro[".hideMobileList"] = array();




//	TipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoId";
	$fdata["GoodName"] = "TipoId";
	$fdata["ownerTable"] = "dbo.tipoCobro";
	$fdata["Label"] = GetFieldLabel("dbo_tipoCobro","TipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TipoId";

		$fdata["sourceSingle"] = "TipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoId";

	
	
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


	$tdatatipocobro["TipoId"] = $fdata;
		$tdatatipocobro[".searchableFields"][] = "TipoId";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.tipoCobro";
	$fdata["Label"] = GetFieldLabel("dbo_tipoCobro","Tipo");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatatipocobro["Tipo"] = $fdata;
		$tdatatipocobro[".searchableFields"][] = "Tipo";


$tables_data["dbo.tipoCobro"]=&$tdatatipocobro;
$field_labels["dbo_tipoCobro"] = &$fieldLabelstipocobro;
$fieldToolTips["dbo_tipoCobro"] = &$fieldToolTipstipocobro;
$placeHolders["dbo_tipoCobro"] = &$placeHolderstipocobro;
$page_titles["dbo_tipoCobro"] = &$pageTitlestipocobro;


changeTextControlsToDate( "dbo.tipoCobro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.tipoCobro"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.tipoCobro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipocobro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoId,  	Tipo";
$proto0["m_strFrom"] = "FROM dbo.tipoCobro";
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
	"m_strName" => "TipoId",
	"m_strTable" => "dbo.tipoCobro",
	"m_srcTableName" => "dbo.tipoCobro"
));

$proto6["m_sql"] = "TipoId";
$proto6["m_srcTableName"] = "dbo.tipoCobro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.tipoCobro",
	"m_srcTableName" => "dbo.tipoCobro"
));

$proto8["m_sql"] = "Tipo";
$proto8["m_srcTableName"] = "dbo.tipoCobro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.tipoCobro";
$proto11["m_srcTableName"] = "dbo.tipoCobro";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TipoId";
$proto11["m_columns"][] = "Tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.tipoCobro";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.tipoCobro";
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
$proto0["m_srcTableName"]="dbo.tipoCobro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipocobro = createSqlQuery_tipocobro();


	
		;

		

$tdatatipocobro[".sqlquery"] = $queryData_tipocobro;



$tdatatipocobro[".hasEvents"] = false;

?>