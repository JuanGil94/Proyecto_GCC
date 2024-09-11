<?php
$tdatatiporecaudo = array();
$tdatatiporecaudo[".searchableFields"] = array();
$tdatatiporecaudo[".ShortName"] = "tiporecaudo";
$tdatatiporecaudo[".OwnerID"] = "";
$tdatatiporecaudo[".OriginalTable"] = "dbo.tipoRecaudo";


$tdatatiporecaudo[".pagesByType"] = my_json_decode( "{}" );
$tdatatiporecaudo[".originalPagesByType"] = $tdatatiporecaudo[".pagesByType"];
$tdatatiporecaudo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatiporecaudo[".originalPages"] = $tdatatiporecaudo[".pages"];
$tdatatiporecaudo[".defaultPages"] = my_json_decode( "{}" );
$tdatatiporecaudo[".originalDefaultPages"] = $tdatatiporecaudo[".defaultPages"];

//	field labels
$fieldLabelstiporecaudo = array();
$fieldToolTipstiporecaudo = array();
$pageTitlestiporecaudo = array();
$placeHolderstiporecaudo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiporecaudo["Spanish"] = array();
	$fieldToolTipstiporecaudo["Spanish"] = array();
	$placeHolderstiporecaudo["Spanish"] = array();
	$pageTitlestiporecaudo["Spanish"] = array();
	$fieldLabelstiporecaudo["Spanish"]["TipoRecaudoId"] = "Tipo Recaudo Id";
	$fieldToolTipstiporecaudo["Spanish"]["TipoRecaudoId"] = "";
	$placeHolderstiporecaudo["Spanish"]["TipoRecaudoId"] = "";
	$fieldLabelstiporecaudo["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipstiporecaudo["Spanish"]["Tipo"] = "";
	$placeHolderstiporecaudo["Spanish"]["Tipo"] = "";
	if (count($fieldToolTipstiporecaudo["Spanish"]))
		$tdatatiporecaudo[".isUseToolTips"] = true;
}


	$tdatatiporecaudo[".NCSearch"] = true;



$tdatatiporecaudo[".shortTableName"] = "tiporecaudo";
$tdatatiporecaudo[".nSecOptions"] = 0;

$tdatatiporecaudo[".mainTableOwnerID"] = "";
$tdatatiporecaudo[".entityType"] = 0;
$tdatatiporecaudo[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatiporecaudo[".strOriginalTableName"] = "dbo.tipoRecaudo";

	



$tdatatiporecaudo[".showAddInPopup"] = false;

$tdatatiporecaudo[".showEditInPopup"] = false;

$tdatatiporecaudo[".showViewInPopup"] = false;

$tdatatiporecaudo[".listAjax"] = false;
//	temporary
//$tdatatiporecaudo[".listAjax"] = false;

	$tdatatiporecaudo[".audit"] = false;

	$tdatatiporecaudo[".locking"] = false;


$pages = $tdatatiporecaudo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiporecaudo[".edit"] = true;
	$tdatatiporecaudo[".afterEditAction"] = 1;
	$tdatatiporecaudo[".closePopupAfterEdit"] = 1;
	$tdatatiporecaudo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiporecaudo[".add"] = true;
$tdatatiporecaudo[".afterAddAction"] = 1;
$tdatatiporecaudo[".closePopupAfterAdd"] = 1;
$tdatatiporecaudo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiporecaudo[".list"] = true;
}



$tdatatiporecaudo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiporecaudo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiporecaudo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiporecaudo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiporecaudo[".printFriendly"] = true;
}



$tdatatiporecaudo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiporecaudo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiporecaudo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiporecaudo[".isUseAjaxSuggest"] = true;



																																																																																																																																																												

$tdatatiporecaudo[".ajaxCodeSnippetAdded"] = false;

$tdatatiporecaudo[".buttonsAdded"] = false;

$tdatatiporecaudo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiporecaudo[".isUseTimeForSearch"] = false;


$tdatatiporecaudo[".badgeColor"] = "DC143C";


$tdatatiporecaudo[".allSearchFields"] = array();
$tdatatiporecaudo[".filterFields"] = array();
$tdatatiporecaudo[".requiredSearchFields"] = array();

$tdatatiporecaudo[".googleLikeFields"] = array();
$tdatatiporecaudo[".googleLikeFields"][] = "TipoRecaudoId";
$tdatatiporecaudo[".googleLikeFields"][] = "Tipo";



$tdatatiporecaudo[".tableType"] = "list";

$tdatatiporecaudo[".printerPageOrientation"] = 0;
$tdatatiporecaudo[".nPrinterPageScale"] = 100;

$tdatatiporecaudo[".nPrinterSplitRecords"] = 40;

$tdatatiporecaudo[".geocodingEnabled"] = false;










$tdatatiporecaudo[".pageSize"] = 20;

$tdatatiporecaudo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiporecaudo[".strOrderBy"] = $tstrOrderBy;

$tdatatiporecaudo[".orderindexes"] = array();


$tdatatiporecaudo[".sqlHead"] = "SELECT TipoRecaudoId,  	Tipo";
$tdatatiporecaudo[".sqlFrom"] = "FROM dbo.tipoRecaudo";
$tdatatiporecaudo[".sqlWhereExpr"] = "";
$tdatatiporecaudo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiporecaudo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiporecaudo[".arrGroupsPerPage"] = $arrGPP;

$tdatatiporecaudo[".highlightSearchResults"] = true;

$tableKeystiporecaudo = array();
$tableKeystiporecaudo[] = "TipoRecaudoId";
$tdatatiporecaudo[".Keys"] = $tableKeystiporecaudo;


$tdatatiporecaudo[".hideMobileList"] = array();




//	TipoRecaudoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoRecaudoId";
	$fdata["GoodName"] = "TipoRecaudoId";
	$fdata["ownerTable"] = "dbo.tipoRecaudo";
	$fdata["Label"] = GetFieldLabel("dbo_tipoRecaudo","TipoRecaudoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TipoRecaudoId";

		$fdata["sourceSingle"] = "TipoRecaudoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoRecaudoId";

	
	
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


	$tdatatiporecaudo["TipoRecaudoId"] = $fdata;
		$tdatatiporecaudo[".searchableFields"][] = "TipoRecaudoId";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.tipoRecaudo";
	$fdata["Label"] = GetFieldLabel("dbo_tipoRecaudo","Tipo");
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


	$tdatatiporecaudo["Tipo"] = $fdata;
		$tdatatiporecaudo[".searchableFields"][] = "Tipo";


$tables_data["dbo.tipoRecaudo"]=&$tdatatiporecaudo;
$field_labels["dbo_tipoRecaudo"] = &$fieldLabelstiporecaudo;
$fieldToolTips["dbo_tipoRecaudo"] = &$fieldToolTipstiporecaudo;
$placeHolders["dbo_tipoRecaudo"] = &$placeHolderstiporecaudo;
$page_titles["dbo_tipoRecaudo"] = &$pageTitlestiporecaudo;


changeTextControlsToDate( "dbo.tipoRecaudo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.tipoRecaudo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.tipoRecaudo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiporecaudo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoRecaudoId,  	Tipo";
$proto0["m_strFrom"] = "FROM dbo.tipoRecaudo";
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
	"m_strName" => "TipoRecaudoId",
	"m_strTable" => "dbo.tipoRecaudo",
	"m_srcTableName" => "dbo.tipoRecaudo"
));

$proto6["m_sql"] = "TipoRecaudoId";
$proto6["m_srcTableName"] = "dbo.tipoRecaudo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.tipoRecaudo",
	"m_srcTableName" => "dbo.tipoRecaudo"
));

$proto8["m_sql"] = "Tipo";
$proto8["m_srcTableName"] = "dbo.tipoRecaudo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.tipoRecaudo";
$proto11["m_srcTableName"] = "dbo.tipoRecaudo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TipoRecaudoId";
$proto11["m_columns"][] = "Tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.tipoRecaudo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.tipoRecaudo";
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
$proto0["m_srcTableName"]="dbo.tipoRecaudo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiporecaudo = createSqlQuery_tiporecaudo();


	
		;

		

$tdatatiporecaudo[".sqlquery"] = $queryData_tiporecaudo;



$tdatatiporecaudo[".hasEvents"] = false;

?>