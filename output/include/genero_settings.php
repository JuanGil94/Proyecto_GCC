<?php
$tdatagenero = array();
$tdatagenero[".searchableFields"] = array();
$tdatagenero[".ShortName"] = "genero";
$tdatagenero[".OwnerID"] = "";
$tdatagenero[".OriginalTable"] = "dbo.Genero";


$tdatagenero[".pagesByType"] = my_json_decode( "{}" );
$tdatagenero[".originalPagesByType"] = $tdatagenero[".pagesByType"];
$tdatagenero[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatagenero[".originalPages"] = $tdatagenero[".pages"];
$tdatagenero[".defaultPages"] = my_json_decode( "{}" );
$tdatagenero[".originalDefaultPages"] = $tdatagenero[".defaultPages"];

//	field labels
$fieldLabelsgenero = array();
$fieldToolTipsgenero = array();
$pageTitlesgenero = array();
$placeHoldersgenero = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgenero["Spanish"] = array();
	$fieldToolTipsgenero["Spanish"] = array();
	$placeHoldersgenero["Spanish"] = array();
	$pageTitlesgenero["Spanish"] = array();
	$fieldLabelsgenero["Spanish"]["GeneroId"] = "Genero Id";
	$fieldToolTipsgenero["Spanish"]["GeneroId"] = "";
	$placeHoldersgenero["Spanish"]["GeneroId"] = "";
	$fieldLabelsgenero["Spanish"]["Genero"] = "Genero";
	$fieldToolTipsgenero["Spanish"]["Genero"] = "";
	$placeHoldersgenero["Spanish"]["Genero"] = "";
	if (count($fieldToolTipsgenero["Spanish"]))
		$tdatagenero[".isUseToolTips"] = true;
}


	$tdatagenero[".NCSearch"] = true;



$tdatagenero[".shortTableName"] = "genero";
$tdatagenero[".nSecOptions"] = 0;

$tdatagenero[".mainTableOwnerID"] = "";
$tdatagenero[".entityType"] = 0;
$tdatagenero[".connId"] = "GCC_at_S00001_CCAD01";


$tdatagenero[".strOriginalTableName"] = "dbo.Genero";

	



$tdatagenero[".showAddInPopup"] = false;

$tdatagenero[".showEditInPopup"] = false;

$tdatagenero[".showViewInPopup"] = false;

$tdatagenero[".listAjax"] = false;
//	temporary
//$tdatagenero[".listAjax"] = false;

	$tdatagenero[".audit"] = false;

	$tdatagenero[".locking"] = false;


$pages = $tdatagenero[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagenero[".edit"] = true;
	$tdatagenero[".afterEditAction"] = 1;
	$tdatagenero[".closePopupAfterEdit"] = 1;
	$tdatagenero[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagenero[".add"] = true;
$tdatagenero[".afterAddAction"] = 1;
$tdatagenero[".closePopupAfterAdd"] = 1;
$tdatagenero[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagenero[".list"] = true;
}



$tdatagenero[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagenero[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagenero[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagenero[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagenero[".printFriendly"] = true;
}



$tdatagenero[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagenero[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagenero[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagenero[".isUseAjaxSuggest"] = true;



																																																																																													

$tdatagenero[".ajaxCodeSnippetAdded"] = false;

$tdatagenero[".buttonsAdded"] = false;

$tdatagenero[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagenero[".isUseTimeForSearch"] = false;


$tdatagenero[".badgeColor"] = "8FBC8B";


$tdatagenero[".allSearchFields"] = array();
$tdatagenero[".filterFields"] = array();
$tdatagenero[".requiredSearchFields"] = array();

$tdatagenero[".googleLikeFields"] = array();
$tdatagenero[".googleLikeFields"][] = "GeneroId";
$tdatagenero[".googleLikeFields"][] = "Genero";



$tdatagenero[".tableType"] = "list";

$tdatagenero[".printerPageOrientation"] = 0;
$tdatagenero[".nPrinterPageScale"] = 100;

$tdatagenero[".nPrinterSplitRecords"] = 40;

$tdatagenero[".geocodingEnabled"] = false;










$tdatagenero[".pageSize"] = 20;

$tdatagenero[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagenero[".strOrderBy"] = $tstrOrderBy;

$tdatagenero[".orderindexes"] = array();


$tdatagenero[".sqlHead"] = "SELECT GeneroId,  	Genero";
$tdatagenero[".sqlFrom"] = "FROM dbo.Genero";
$tdatagenero[".sqlWhereExpr"] = "";
$tdatagenero[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagenero[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagenero[".arrGroupsPerPage"] = $arrGPP;

$tdatagenero[".highlightSearchResults"] = true;

$tableKeysgenero = array();
$tableKeysgenero[] = "GeneroId";
$tdatagenero[".Keys"] = $tableKeysgenero;


$tdatagenero[".hideMobileList"] = array();




//	GeneroId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GeneroId";
	$fdata["GoodName"] = "GeneroId";
	$fdata["ownerTable"] = "dbo.Genero";
	$fdata["Label"] = GetFieldLabel("dbo_Genero","GeneroId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "GeneroId";

		$fdata["sourceSingle"] = "GeneroId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GeneroId";

	
	
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


	$tdatagenero["GeneroId"] = $fdata;
		$tdatagenero[".searchableFields"][] = "GeneroId";
//	Genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Genero";
	$fdata["GoodName"] = "Genero";
	$fdata["ownerTable"] = "dbo.Genero";
	$fdata["Label"] = GetFieldLabel("dbo_Genero","Genero");
	$fdata["FieldType"] = 130;


	
	
			

		$fdata["strField"] = "Genero";

		$fdata["sourceSingle"] = "Genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Genero";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatagenero["Genero"] = $fdata;
		$tdatagenero[".searchableFields"][] = "Genero";


$tables_data["dbo.Genero"]=&$tdatagenero;
$field_labels["dbo_Genero"] = &$fieldLabelsgenero;
$fieldToolTips["dbo_Genero"] = &$fieldToolTipsgenero;
$placeHolders["dbo_Genero"] = &$placeHoldersgenero;
$page_titles["dbo_Genero"] = &$pageTitlesgenero;


changeTextControlsToDate( "dbo.Genero" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Genero"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Genero"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_genero()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GeneroId,  	Genero";
$proto0["m_strFrom"] = "FROM dbo.Genero";
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
	"m_strName" => "GeneroId",
	"m_strTable" => "dbo.Genero",
	"m_srcTableName" => "dbo.Genero"
));

$proto6["m_sql"] = "GeneroId";
$proto6["m_srcTableName"] = "dbo.Genero";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Genero",
	"m_strTable" => "dbo.Genero",
	"m_srcTableName" => "dbo.Genero"
));

$proto8["m_sql"] = "Genero";
$proto8["m_srcTableName"] = "dbo.Genero";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Genero";
$proto11["m_srcTableName"] = "dbo.Genero";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GeneroId";
$proto11["m_columns"][] = "Genero";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Genero";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Genero";
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
$proto0["m_srcTableName"]="dbo.Genero";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_genero = createSqlQuery_genero();


	
		;

		

$tdatagenero[".sqlquery"] = $queryData_genero;



$tdatagenero[".hasEvents"] = false;

?>