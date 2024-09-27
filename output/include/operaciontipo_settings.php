<?php
$tdataoperaciontipo = array();
$tdataoperaciontipo[".searchableFields"] = array();
$tdataoperaciontipo[".ShortName"] = "operaciontipo";
$tdataoperaciontipo[".OwnerID"] = "";
$tdataoperaciontipo[".OriginalTable"] = "dbo.OperacionTipo";


$tdataoperaciontipo[".pagesByType"] = my_json_decode( "{}" );
$tdataoperaciontipo[".originalPagesByType"] = $tdataoperaciontipo[".pagesByType"];
$tdataoperaciontipo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataoperaciontipo[".originalPages"] = $tdataoperaciontipo[".pages"];
$tdataoperaciontipo[".defaultPages"] = my_json_decode( "{}" );
$tdataoperaciontipo[".originalDefaultPages"] = $tdataoperaciontipo[".defaultPages"];

//	field labels
$fieldLabelsoperaciontipo = array();
$fieldToolTipsoperaciontipo = array();
$pageTitlesoperaciontipo = array();
$placeHoldersoperaciontipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoperaciontipo["Spanish"] = array();
	$fieldToolTipsoperaciontipo["Spanish"] = array();
	$placeHoldersoperaciontipo["Spanish"] = array();
	$pageTitlesoperaciontipo["Spanish"] = array();
	$fieldLabelsoperaciontipo["Spanish"]["OperacionTipoId"] = "Operacion Tipo Id";
	$fieldToolTipsoperaciontipo["Spanish"]["OperacionTipoId"] = "";
	$placeHoldersoperaciontipo["Spanish"]["OperacionTipoId"] = "";
	$fieldLabelsoperaciontipo["Spanish"]["OperacionTipo"] = "Operacion Tipo";
	$fieldToolTipsoperaciontipo["Spanish"]["OperacionTipo"] = "";
	$placeHoldersoperaciontipo["Spanish"]["OperacionTipo"] = "";
	if (count($fieldToolTipsoperaciontipo["Spanish"]))
		$tdataoperaciontipo[".isUseToolTips"] = true;
}


	$tdataoperaciontipo[".NCSearch"] = true;



$tdataoperaciontipo[".shortTableName"] = "operaciontipo";
$tdataoperaciontipo[".nSecOptions"] = 0;

$tdataoperaciontipo[".mainTableOwnerID"] = "";
$tdataoperaciontipo[".entityType"] = 0;
$tdataoperaciontipo[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoperaciontipo[".strOriginalTableName"] = "dbo.OperacionTipo";

	



$tdataoperaciontipo[".showAddInPopup"] = false;

$tdataoperaciontipo[".showEditInPopup"] = false;

$tdataoperaciontipo[".showViewInPopup"] = false;

$tdataoperaciontipo[".listAjax"] = false;
//	temporary
//$tdataoperaciontipo[".listAjax"] = false;

	$tdataoperaciontipo[".audit"] = false;

	$tdataoperaciontipo[".locking"] = false;


$pages = $tdataoperaciontipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoperaciontipo[".edit"] = true;
	$tdataoperaciontipo[".afterEditAction"] = 1;
	$tdataoperaciontipo[".closePopupAfterEdit"] = 1;
	$tdataoperaciontipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoperaciontipo[".add"] = true;
$tdataoperaciontipo[".afterAddAction"] = 1;
$tdataoperaciontipo[".closePopupAfterAdd"] = 1;
$tdataoperaciontipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoperaciontipo[".list"] = true;
}



$tdataoperaciontipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoperaciontipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoperaciontipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoperaciontipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoperaciontipo[".printFriendly"] = true;
}



$tdataoperaciontipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoperaciontipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoperaciontipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoperaciontipo[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																								

$tdataoperaciontipo[".ajaxCodeSnippetAdded"] = false;

$tdataoperaciontipo[".buttonsAdded"] = false;

$tdataoperaciontipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoperaciontipo[".isUseTimeForSearch"] = false;


$tdataoperaciontipo[".badgeColor"] = "7B68EE";


$tdataoperaciontipo[".allSearchFields"] = array();
$tdataoperaciontipo[".filterFields"] = array();
$tdataoperaciontipo[".requiredSearchFields"] = array();

$tdataoperaciontipo[".googleLikeFields"] = array();
$tdataoperaciontipo[".googleLikeFields"][] = "OperacionTipoId";
$tdataoperaciontipo[".googleLikeFields"][] = "OperacionTipo";



$tdataoperaciontipo[".tableType"] = "list";

$tdataoperaciontipo[".printerPageOrientation"] = 0;
$tdataoperaciontipo[".nPrinterPageScale"] = 100;

$tdataoperaciontipo[".nPrinterSplitRecords"] = 40;

$tdataoperaciontipo[".geocodingEnabled"] = false;





$tdataoperaciontipo[".isResizeColumns"] = true;





$tdataoperaciontipo[".pageSize"] = 20;

$tdataoperaciontipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoperaciontipo[".strOrderBy"] = $tstrOrderBy;

$tdataoperaciontipo[".orderindexes"] = array();


$tdataoperaciontipo[".sqlHead"] = "SELECT OperacionTipoId,  	OperacionTipo";
$tdataoperaciontipo[".sqlFrom"] = "FROM dbo.OperacionTipo";
$tdataoperaciontipo[".sqlWhereExpr"] = "";
$tdataoperaciontipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoperaciontipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoperaciontipo[".arrGroupsPerPage"] = $arrGPP;

$tdataoperaciontipo[".highlightSearchResults"] = true;

$tableKeysoperaciontipo = array();
$tableKeysoperaciontipo[] = "OperacionTipoId";
$tdataoperaciontipo[".Keys"] = $tableKeysoperaciontipo;


$tdataoperaciontipo[".hideMobileList"] = array();




//	OperacionTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OperacionTipoId";
	$fdata["GoodName"] = "OperacionTipoId";
	$fdata["ownerTable"] = "dbo.OperacionTipo";
	$fdata["Label"] = GetFieldLabel("dbo_OperacionTipo","OperacionTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OperacionTipoId";

		$fdata["sourceSingle"] = "OperacionTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OperacionTipoId";

	
	
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


	$tdataoperaciontipo["OperacionTipoId"] = $fdata;
		$tdataoperaciontipo[".searchableFields"][] = "OperacionTipoId";
//	OperacionTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OperacionTipo";
	$fdata["GoodName"] = "OperacionTipo";
	$fdata["ownerTable"] = "dbo.OperacionTipo";
	$fdata["Label"] = GetFieldLabel("dbo_OperacionTipo","OperacionTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OperacionTipo";

		$fdata["sourceSingle"] = "OperacionTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OperacionTipo";

	
	
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


	$tdataoperaciontipo["OperacionTipo"] = $fdata;
		$tdataoperaciontipo[".searchableFields"][] = "OperacionTipo";


$tables_data["dbo.OperacionTipo"]=&$tdataoperaciontipo;
$field_labels["dbo_OperacionTipo"] = &$fieldLabelsoperaciontipo;
$fieldToolTips["dbo_OperacionTipo"] = &$fieldToolTipsoperaciontipo;
$placeHolders["dbo_OperacionTipo"] = &$placeHoldersoperaciontipo;
$page_titles["dbo_OperacionTipo"] = &$pageTitlesoperaciontipo;


changeTextControlsToDate( "dbo.OperacionTipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.OperacionTipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.OperacionTipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_operaciontipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OperacionTipoId,  	OperacionTipo";
$proto0["m_strFrom"] = "FROM dbo.OperacionTipo";
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
	"m_strName" => "OperacionTipoId",
	"m_strTable" => "dbo.OperacionTipo",
	"m_srcTableName" => "dbo.OperacionTipo"
));

$proto6["m_sql"] = "OperacionTipoId";
$proto6["m_srcTableName"] = "dbo.OperacionTipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OperacionTipo",
	"m_strTable" => "dbo.OperacionTipo",
	"m_srcTableName" => "dbo.OperacionTipo"
));

$proto8["m_sql"] = "OperacionTipo";
$proto8["m_srcTableName"] = "dbo.OperacionTipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.OperacionTipo";
$proto11["m_srcTableName"] = "dbo.OperacionTipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OperacionTipoId";
$proto11["m_columns"][] = "OperacionTipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.OperacionTipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.OperacionTipo";
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
$proto0["m_srcTableName"]="dbo.OperacionTipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_operaciontipo = createSqlQuery_operaciontipo();


	
		;

		

$tdataoperaciontipo[".sqlquery"] = $queryData_operaciontipo;



$tdataoperaciontipo[".hasEvents"] = false;

?>