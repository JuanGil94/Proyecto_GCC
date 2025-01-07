<?php
$tdataipsrestringidas = array();
$tdataipsrestringidas[".searchableFields"] = array();
$tdataipsrestringidas[".ShortName"] = "ipsrestringidas";
$tdataipsrestringidas[".OwnerID"] = "";
$tdataipsrestringidas[".OriginalTable"] = "dbo.IPsRestringidas";


$tdataipsrestringidas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataipsrestringidas[".originalPagesByType"] = $tdataipsrestringidas[".pagesByType"];
$tdataipsrestringidas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataipsrestringidas[".originalPages"] = $tdataipsrestringidas[".pages"];
$tdataipsrestringidas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataipsrestringidas[".originalDefaultPages"] = $tdataipsrestringidas[".defaultPages"];

//	field labels
$fieldLabelsipsrestringidas = array();
$fieldToolTipsipsrestringidas = array();
$pageTitlesipsrestringidas = array();
$placeHoldersipsrestringidas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsipsrestringidas["Spanish"] = array();
	$fieldToolTipsipsrestringidas["Spanish"] = array();
	$placeHoldersipsrestringidas["Spanish"] = array();
	$pageTitlesipsrestringidas["Spanish"] = array();
	$fieldLabelsipsrestringidas["Spanish"]["IPRestringidaId"] = "IPRestringida Id";
	$fieldToolTipsipsrestringidas["Spanish"]["IPRestringidaId"] = "";
	$placeHoldersipsrestringidas["Spanish"]["IPRestringidaId"] = "";
	$fieldLabelsipsrestringidas["Spanish"]["IPRestringida"] = "IPRestringida";
	$fieldToolTipsipsrestringidas["Spanish"]["IPRestringida"] = "";
	$placeHoldersipsrestringidas["Spanish"]["IPRestringida"] = "";
	$fieldLabelsipsrestringidas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsipsrestringidas["Spanish"]["Observaciones"] = "";
	$placeHoldersipsrestringidas["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipsipsrestringidas["Spanish"]))
		$tdataipsrestringidas[".isUseToolTips"] = true;
}


	$tdataipsrestringidas[".NCSearch"] = true;



$tdataipsrestringidas[".shortTableName"] = "ipsrestringidas";
$tdataipsrestringidas[".nSecOptions"] = 0;

$tdataipsrestringidas[".mainTableOwnerID"] = "";
$tdataipsrestringidas[".entityType"] = 0;
$tdataipsrestringidas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataipsrestringidas[".strOriginalTableName"] = "dbo.IPsRestringidas";

	



$tdataipsrestringidas[".showAddInPopup"] = false;

$tdataipsrestringidas[".showEditInPopup"] = false;

$tdataipsrestringidas[".showViewInPopup"] = false;

$tdataipsrestringidas[".listAjax"] = false;
//	temporary
//$tdataipsrestringidas[".listAjax"] = false;

	$tdataipsrestringidas[".audit"] = true;

	$tdataipsrestringidas[".locking"] = false;


$pages = $tdataipsrestringidas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataipsrestringidas[".edit"] = true;
	$tdataipsrestringidas[".afterEditAction"] = 1;
	$tdataipsrestringidas[".closePopupAfterEdit"] = 1;
	$tdataipsrestringidas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataipsrestringidas[".add"] = true;
$tdataipsrestringidas[".afterAddAction"] = 1;
$tdataipsrestringidas[".closePopupAfterAdd"] = 1;
$tdataipsrestringidas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataipsrestringidas[".list"] = true;
}



$tdataipsrestringidas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataipsrestringidas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataipsrestringidas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataipsrestringidas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataipsrestringidas[".printFriendly"] = true;
}



$tdataipsrestringidas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataipsrestringidas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataipsrestringidas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataipsrestringidas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdataipsrestringidas[".ajaxCodeSnippetAdded"] = false;

$tdataipsrestringidas[".buttonsAdded"] = false;

$tdataipsrestringidas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataipsrestringidas[".isUseTimeForSearch"] = false;


$tdataipsrestringidas[".badgeColor"] = "CD5C5C";


$tdataipsrestringidas[".allSearchFields"] = array();
$tdataipsrestringidas[".filterFields"] = array();
$tdataipsrestringidas[".requiredSearchFields"] = array();

$tdataipsrestringidas[".googleLikeFields"] = array();
$tdataipsrestringidas[".googleLikeFields"][] = "IPRestringidaId";
$tdataipsrestringidas[".googleLikeFields"][] = "IPRestringida";
$tdataipsrestringidas[".googleLikeFields"][] = "Observaciones";



$tdataipsrestringidas[".tableType"] = "list";

$tdataipsrestringidas[".printerPageOrientation"] = 0;
$tdataipsrestringidas[".nPrinterPageScale"] = 100;

$tdataipsrestringidas[".nPrinterSplitRecords"] = 40;

$tdataipsrestringidas[".geocodingEnabled"] = false;




$tdataipsrestringidas[".isDisplayLoading"] = true;

$tdataipsrestringidas[".isResizeColumns"] = true;





$tdataipsrestringidas[".pageSize"] = 20;

$tdataipsrestringidas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataipsrestringidas[".strOrderBy"] = $tstrOrderBy;

$tdataipsrestringidas[".orderindexes"] = array();


$tdataipsrestringidas[".sqlHead"] = "SELECT IPRestringidaId,  	IPRestringida,  	Observaciones";
$tdataipsrestringidas[".sqlFrom"] = "FROM dbo.IPsRestringidas";
$tdataipsrestringidas[".sqlWhereExpr"] = "";
$tdataipsrestringidas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataipsrestringidas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataipsrestringidas[".arrGroupsPerPage"] = $arrGPP;

$tdataipsrestringidas[".highlightSearchResults"] = true;

$tableKeysipsrestringidas = array();
$tableKeysipsrestringidas[] = "IPRestringidaId";
$tdataipsrestringidas[".Keys"] = $tableKeysipsrestringidas;


$tdataipsrestringidas[".hideMobileList"] = array();




//	IPRestringidaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IPRestringidaId";
	$fdata["GoodName"] = "IPRestringidaId";
	$fdata["ownerTable"] = "dbo.IPsRestringidas";
	$fdata["Label"] = GetFieldLabel("dbo_IPsRestringidas","IPRestringidaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IPRestringidaId";

		$fdata["sourceSingle"] = "IPRestringidaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IPRestringidaId";

	
	
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


	$tdataipsrestringidas["IPRestringidaId"] = $fdata;
		$tdataipsrestringidas[".searchableFields"][] = "IPRestringidaId";
//	IPRestringida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IPRestringida";
	$fdata["GoodName"] = "IPRestringida";
	$fdata["ownerTable"] = "dbo.IPsRestringidas";
	$fdata["Label"] = GetFieldLabel("dbo_IPsRestringidas","IPRestringida");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IPRestringida";

		$fdata["sourceSingle"] = "IPRestringida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IPRestringida";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataipsrestringidas["IPRestringida"] = $fdata;
		$tdataipsrestringidas[".searchableFields"][] = "IPRestringida";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.IPsRestringidas";
	$fdata["Label"] = GetFieldLabel("dbo_IPsRestringidas","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataipsrestringidas["Observaciones"] = $fdata;
		$tdataipsrestringidas[".searchableFields"][] = "Observaciones";


$tables_data["dbo.IPsRestringidas"]=&$tdataipsrestringidas;
$field_labels["dbo_IPsRestringidas"] = &$fieldLabelsipsrestringidas;
$fieldToolTips["dbo_IPsRestringidas"] = &$fieldToolTipsipsrestringidas;
$placeHolders["dbo_IPsRestringidas"] = &$placeHoldersipsrestringidas;
$page_titles["dbo_IPsRestringidas"] = &$pageTitlesipsrestringidas;


changeTextControlsToDate( "dbo.IPsRestringidas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.IPsRestringidas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.IPsRestringidas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ipsrestringidas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IPRestringidaId,  	IPRestringida,  	Observaciones";
$proto0["m_strFrom"] = "FROM dbo.IPsRestringidas";
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
	"m_strName" => "IPRestringidaId",
	"m_strTable" => "dbo.IPsRestringidas",
	"m_srcTableName" => "dbo.IPsRestringidas"
));

$proto6["m_sql"] = "IPRestringidaId";
$proto6["m_srcTableName"] = "dbo.IPsRestringidas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IPRestringida",
	"m_strTable" => "dbo.IPsRestringidas",
	"m_srcTableName" => "dbo.IPsRestringidas"
));

$proto8["m_sql"] = "IPRestringida";
$proto8["m_srcTableName"] = "dbo.IPsRestringidas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.IPsRestringidas",
	"m_srcTableName" => "dbo.IPsRestringidas"
));

$proto10["m_sql"] = "Observaciones";
$proto10["m_srcTableName"] = "dbo.IPsRestringidas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.IPsRestringidas";
$proto13["m_srcTableName"] = "dbo.IPsRestringidas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IPRestringidaId";
$proto13["m_columns"][] = "IPRestringida";
$proto13["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.IPsRestringidas";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.IPsRestringidas";
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
$proto0["m_srcTableName"]="dbo.IPsRestringidas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ipsrestringidas = createSqlQuery_ipsrestringidas();


	
		;

			

$tdataipsrestringidas[".sqlquery"] = $queryData_ipsrestringidas;



$tdataipsrestringidas[".hasEvents"] = false;

?>