<?php
$tdatanaturalezas1 = array();
$tdatanaturalezas1[".searchableFields"] = array();
$tdatanaturalezas1[".ShortName"] = "naturalezas1";
$tdatanaturalezas1[".OwnerID"] = "";
$tdatanaturalezas1[".OriginalTable"] = "dbo.Naturalezas";


$tdatanaturalezas1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanaturalezas1[".originalPagesByType"] = $tdatanaturalezas1[".pagesByType"];
$tdatanaturalezas1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanaturalezas1[".originalPages"] = $tdatanaturalezas1[".pages"];
$tdatanaturalezas1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanaturalezas1[".originalDefaultPages"] = $tdatanaturalezas1[".defaultPages"];

//	field labels
$fieldLabelsnaturalezas1 = array();
$fieldToolTipsnaturalezas1 = array();
$pageTitlesnaturalezas1 = array();
$placeHoldersnaturalezas1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnaturalezas1["Spanish"] = array();
	$fieldToolTipsnaturalezas1["Spanish"] = array();
	$placeHoldersnaturalezas1["Spanish"] = array();
	$pageTitlesnaturalezas1["Spanish"] = array();
	$fieldLabelsnaturalezas1["Spanish"]["NaturalezaId"] = "Naturaleza Id";
	$fieldToolTipsnaturalezas1["Spanish"]["NaturalezaId"] = "";
	$placeHoldersnaturalezas1["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsnaturalezas1["Spanish"]["NaturalezaId1"] = "Naturaleza Id1";
	$fieldToolTipsnaturalezas1["Spanish"]["NaturalezaId1"] = "";
	$placeHoldersnaturalezas1["Spanish"]["NaturalezaId1"] = "";
	$fieldLabelsnaturalezas1["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipsnaturalezas1["Spanish"]["Naturaleza"] = "";
	$placeHoldersnaturalezas1["Spanish"]["Naturaleza"] = "";
	if (count($fieldToolTipsnaturalezas1["Spanish"]))
		$tdatanaturalezas1[".isUseToolTips"] = true;
}


	$tdatanaturalezas1[".NCSearch"] = true;



$tdatanaturalezas1[".shortTableName"] = "naturalezas1";
$tdatanaturalezas1[".nSecOptions"] = 0;

$tdatanaturalezas1[".mainTableOwnerID"] = "";
$tdatanaturalezas1[".entityType"] = 1;
$tdatanaturalezas1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatanaturalezas1[".strOriginalTableName"] = "dbo.Naturalezas";

	



$tdatanaturalezas1[".showAddInPopup"] = false;

$tdatanaturalezas1[".showEditInPopup"] = false;

$tdatanaturalezas1[".showViewInPopup"] = false;

$tdatanaturalezas1[".listAjax"] = false;
//	temporary
//$tdatanaturalezas1[".listAjax"] = false;

	$tdatanaturalezas1[".audit"] = true;

	$tdatanaturalezas1[".locking"] = false;


$pages = $tdatanaturalezas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanaturalezas1[".edit"] = true;
	$tdatanaturalezas1[".afterEditAction"] = 1;
	$tdatanaturalezas1[".closePopupAfterEdit"] = 1;
	$tdatanaturalezas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanaturalezas1[".add"] = true;
$tdatanaturalezas1[".afterAddAction"] = 1;
$tdatanaturalezas1[".closePopupAfterAdd"] = 1;
$tdatanaturalezas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanaturalezas1[".list"] = true;
}



$tdatanaturalezas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanaturalezas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanaturalezas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanaturalezas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanaturalezas1[".printFriendly"] = true;
}



$tdatanaturalezas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanaturalezas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanaturalezas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanaturalezas1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdatanaturalezas1[".ajaxCodeSnippetAdded"] = false;

$tdatanaturalezas1[".buttonsAdded"] = false;

$tdatanaturalezas1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanaturalezas1[".isUseTimeForSearch"] = false;


$tdatanaturalezas1[".badgeColor"] = "4169E1";


$tdatanaturalezas1[".allSearchFields"] = array();
$tdatanaturalezas1[".filterFields"] = array();
$tdatanaturalezas1[".requiredSearchFields"] = array();

$tdatanaturalezas1[".googleLikeFields"] = array();
$tdatanaturalezas1[".googleLikeFields"][] = "NaturalezaId";
$tdatanaturalezas1[".googleLikeFields"][] = "Naturaleza";
$tdatanaturalezas1[".googleLikeFields"][] = "NaturalezaId1";



$tdatanaturalezas1[".tableType"] = "list";

$tdatanaturalezas1[".printerPageOrientation"] = 0;
$tdatanaturalezas1[".nPrinterPageScale"] = 100;

$tdatanaturalezas1[".nPrinterSplitRecords"] = 40;

$tdatanaturalezas1[".geocodingEnabled"] = false;




$tdatanaturalezas1[".isDisplayLoading"] = true;

$tdatanaturalezas1[".isResizeColumns"] = true;





$tdatanaturalezas1[".pageSize"] = 20;

$tdatanaturalezas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanaturalezas1[".strOrderBy"] = $tstrOrderBy;

$tdatanaturalezas1[".orderindexes"] = array();


$tdatanaturalezas1[".sqlHead"] = "SELECT ' ' AS NaturalezaId,  ' ' AS Naturaleza,  ' ' AS [NaturalezaId1]  UNION ALL  SELECT  NaturalezaId AS NaturalezaId1,  Naturaleza AS Naturaleza1,  NaturalezaId AS NaturalezaId2";
$tdatanaturalezas1[".sqlFrom"] = "FROM dbo.Naturalezas";
$tdatanaturalezas1[".sqlWhereExpr"] = "";
$tdatanaturalezas1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatanaturalezas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanaturalezas1[".arrGroupsPerPage"] = $arrGPP;

$tdatanaturalezas1[".highlightSearchResults"] = true;

$tableKeysnaturalezas1 = array();
$tdatanaturalezas1[".Keys"] = $tableKeysnaturalezas1;


$tdatanaturalezas1[".hideMobileList"] = array();




//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas1","NaturalezaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["FullName"] = "NaturalezaId";

	
	
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


	$tdatanaturalezas1["NaturalezaId"] = $fdata;
		$tdatanaturalezas1[".searchableFields"][] = "NaturalezaId";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas1","Naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Naturaleza";

		$fdata["sourceSingle"] = "Naturaleza";

		$fdata["FullName"] = "Naturaleza";

	
	
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


	$tdatanaturalezas1["Naturaleza"] = $fdata;
		$tdatanaturalezas1[".searchableFields"][] = "Naturaleza";
//	NaturalezaId1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NaturalezaId1";
	$fdata["GoodName"] = "NaturalezaId1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas1","NaturalezaId1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NaturalezaId1";

	
		$fdata["FullName"] = "NaturalezaId1";

	
	
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


	$tdatanaturalezas1["NaturalezaId1"] = $fdata;
		$tdatanaturalezas1[".searchableFields"][] = "NaturalezaId1";


$tables_data["dbo.Naturalezas1"]=&$tdatanaturalezas1;
$field_labels["dbo_Naturalezas1"] = &$fieldLabelsnaturalezas1;
$fieldToolTips["dbo_Naturalezas1"] = &$fieldToolTipsnaturalezas1;
$placeHolders["dbo_Naturalezas1"] = &$placeHoldersnaturalezas1;
$page_titles["dbo_Naturalezas1"] = &$pageTitlesnaturalezas1;


changeTextControlsToDate( "dbo.Naturalezas1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Naturalezas1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Naturalezas1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_naturalezas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "' ' AS NaturalezaId,  ' ' AS Naturaleza,  ' ' AS [NaturalezaId1]  UNION ALL  SELECT  NaturalezaId AS NaturalezaId1,  Naturaleza AS Naturaleza1,  NaturalezaId AS NaturalezaId2";
$proto0["m_strFrom"] = "FROM dbo.Naturalezas";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto6["m_sql"] = "' '";
$proto6["m_srcTableName"] = "dbo.Naturalezas1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "NaturalezaId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto8["m_sql"] = "' '";
$proto8["m_srcTableName"] = "dbo.Naturalezas1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Naturaleza";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' AS [NaturalezaId1]  UNION ALL  SELECT  NaturalezaId"
));

$proto10["m_sql"] = "' ' AS [NaturalezaId1]  UNION ALL  SELECT  NaturalezaId";
$proto10["m_srcTableName"] = "dbo.Naturalezas1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "NaturalezaId1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas1"
));

$proto12["m_sql"] = "Naturaleza";
$proto12["m_srcTableName"] = "dbo.Naturalezas1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Naturaleza1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas1"
));

$proto14["m_sql"] = "NaturalezaId";
$proto14["m_srcTableName"] = "dbo.Naturalezas1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "NaturalezaId2";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Naturalezas";
$proto17["m_srcTableName"] = "dbo.Naturalezas1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "NaturalezaId";
$proto17["m_columns"][] = "Naturaleza";
$proto17["m_columns"][] = "ConceptoId";
$proto17["m_columns"][] = "TasaTipo";
$proto17["m_columns"][] = "Activa";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Naturalezas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Naturalezas1";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Naturalezas1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_naturalezas1 = createSqlQuery_naturalezas1();


	
		;

			

$tdatanaturalezas1[".sqlquery"] = $queryData_naturalezas1;



$tdatanaturalezas1[".hasEvents"] = false;

?>