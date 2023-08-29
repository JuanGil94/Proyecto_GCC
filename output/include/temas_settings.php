<?php
$tdatatemas = array();
$tdatatemas[".searchableFields"] = array();
$tdatatemas[".ShortName"] = "temas";
$tdatatemas[".OwnerID"] = "";
$tdatatemas[".OriginalTable"] = "dbo.Temas";


$tdatatemas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdatatemas[".originalPagesByType"] = $tdatatemas[".pagesByType"];
$tdatatemas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdatatemas[".originalPages"] = $tdatatemas[".pages"];
$tdatatemas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdatatemas[".originalDefaultPages"] = $tdatatemas[".defaultPages"];

//	field labels
$fieldLabelstemas = array();
$fieldToolTipstemas = array();
$pageTitlestemas = array();
$placeHolderstemas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstemas["Spanish"] = array();
	$fieldToolTipstemas["Spanish"] = array();
	$placeHolderstemas["Spanish"] = array();
	$pageTitlestemas["Spanish"] = array();
	$fieldLabelstemas["Spanish"]["TemaId"] = "Tema Id";
	$fieldToolTipstemas["Spanish"]["TemaId"] = "";
	$placeHolderstemas["Spanish"]["TemaId"] = "";
	$fieldLabelstemas["Spanish"]["Tema"] = "Tema";
	$fieldToolTipstemas["Spanish"]["Tema"] = "";
	$placeHolderstemas["Spanish"]["Tema"] = "";
	if (count($fieldToolTipstemas["Spanish"]))
		$tdatatemas[".isUseToolTips"] = true;
}


	$tdatatemas[".NCSearch"] = true;



$tdatatemas[".shortTableName"] = "temas";
$tdatatemas[".nSecOptions"] = 0;

$tdatatemas[".mainTableOwnerID"] = "";
$tdatatemas[".entityType"] = 0;
$tdatatemas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatemas[".strOriginalTableName"] = "dbo.Temas";

	



$tdatatemas[".showAddInPopup"] = false;

$tdatatemas[".showEditInPopup"] = false;

$tdatatemas[".showViewInPopup"] = false;

$tdatatemas[".listAjax"] = false;
//	temporary
//$tdatatemas[".listAjax"] = false;

	$tdatatemas[".audit"] = true;

	$tdatatemas[".locking"] = false;


$pages = $tdatatemas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatemas[".edit"] = true;
	$tdatatemas[".afterEditAction"] = 1;
	$tdatatemas[".closePopupAfterEdit"] = 1;
	$tdatatemas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatemas[".add"] = true;
$tdatatemas[".afterAddAction"] = 1;
$tdatatemas[".closePopupAfterAdd"] = 1;
$tdatatemas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatemas[".list"] = true;
}



$tdatatemas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatemas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatemas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatemas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatemas[".printFriendly"] = true;
}



$tdatatemas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatemas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatemas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatemas[".isUseAjaxSuggest"] = true;



						

$tdatatemas[".ajaxCodeSnippetAdded"] = false;

$tdatatemas[".buttonsAdded"] = false;

$tdatatemas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatemas[".isUseTimeForSearch"] = false;


$tdatatemas[".badgeColor"] = "CD853F";


$tdatatemas[".allSearchFields"] = array();
$tdatatemas[".filterFields"] = array();
$tdatatemas[".requiredSearchFields"] = array();

$tdatatemas[".googleLikeFields"] = array();
$tdatatemas[".googleLikeFields"][] = "TemaId";
$tdatatemas[".googleLikeFields"][] = "Tema";



$tdatatemas[".tableType"] = "list";

$tdatatemas[".printerPageOrientation"] = 0;
$tdatatemas[".nPrinterPageScale"] = 100;

$tdatatemas[".nPrinterSplitRecords"] = 40;

$tdatatemas[".geocodingEnabled"] = false;










$tdatatemas[".pageSize"] = 20;

$tdatatemas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatemas[".strOrderBy"] = $tstrOrderBy;

$tdatatemas[".orderindexes"] = array();


$tdatatemas[".sqlHead"] = "SELECT TemaId,  	Tema";
$tdatatemas[".sqlFrom"] = "FROM dbo.Temas";
$tdatatemas[".sqlWhereExpr"] = "";
$tdatatemas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatemas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatemas[".arrGroupsPerPage"] = $arrGPP;

$tdatatemas[".highlightSearchResults"] = true;

$tableKeystemas = array();
$tableKeystemas[] = "TemaId";
$tdatatemas[".Keys"] = $tableKeystemas;


$tdatatemas[".hideMobileList"] = array();




//	TemaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TemaId";
	$fdata["GoodName"] = "TemaId";
	$fdata["ownerTable"] = "dbo.Temas";
	$fdata["Label"] = GetFieldLabel("dbo_Temas","TemaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TemaId";

		$fdata["sourceSingle"] = "TemaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TemaId";

	
	
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


	$tdatatemas["TemaId"] = $fdata;
		$tdatatemas[".searchableFields"][] = "TemaId";
//	Tema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tema";
	$fdata["GoodName"] = "Tema";
	$fdata["ownerTable"] = "dbo.Temas";
	$fdata["Label"] = GetFieldLabel("dbo_Temas","Tema");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tema";

		$fdata["sourceSingle"] = "Tema";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tema";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatemas["Tema"] = $fdata;
		$tdatatemas[".searchableFields"][] = "Tema";


$tables_data["dbo.Temas"]=&$tdatatemas;
$field_labels["dbo_Temas"] = &$fieldLabelstemas;
$fieldToolTips["dbo_Temas"] = &$fieldToolTipstemas;
$placeHolders["dbo_Temas"] = &$placeHolderstemas;
$page_titles["dbo_Temas"] = &$pageTitlestemas;


changeTextControlsToDate( "dbo.Temas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Temas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Temas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_temas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TemaId,  	Tema";
$proto0["m_strFrom"] = "FROM dbo.Temas";
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
	"m_strName" => "TemaId",
	"m_strTable" => "dbo.Temas",
	"m_srcTableName" => "dbo.Temas"
));

$proto6["m_sql"] = "TemaId";
$proto6["m_srcTableName"] = "dbo.Temas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tema",
	"m_strTable" => "dbo.Temas",
	"m_srcTableName" => "dbo.Temas"
));

$proto8["m_sql"] = "Tema";
$proto8["m_srcTableName"] = "dbo.Temas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Temas";
$proto11["m_srcTableName"] = "dbo.Temas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TemaId";
$proto11["m_columns"][] = "Tema";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Temas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Temas";
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
$proto0["m_srcTableName"]="dbo.Temas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_temas = createSqlQuery_temas();


	
		;

		

$tdatatemas[".sqlquery"] = $queryData_temas;



$tdatatemas[".hasEvents"] = false;

?>