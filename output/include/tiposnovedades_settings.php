<?php
$tdatatiposnovedades = array();
$tdatatiposnovedades[".searchableFields"] = array();
$tdatatiposnovedades[".ShortName"] = "tiposnovedades";
$tdatatiposnovedades[".OwnerID"] = "";
$tdatatiposnovedades[".OriginalTable"] = "dbo.tiposNovedades";


$tdatatiposnovedades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposnovedades[".originalPagesByType"] = $tdatatiposnovedades[".pagesByType"];
$tdatatiposnovedades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposnovedades[".originalPages"] = $tdatatiposnovedades[".pages"];
$tdatatiposnovedades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposnovedades[".originalDefaultPages"] = $tdatatiposnovedades[".defaultPages"];

//	field labels
$fieldLabelstiposnovedades = array();
$fieldToolTipstiposnovedades = array();
$pageTitlestiposnovedades = array();
$placeHolderstiposnovedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposnovedades["Spanish"] = array();
	$fieldToolTipstiposnovedades["Spanish"] = array();
	$placeHolderstiposnovedades["Spanish"] = array();
	$pageTitlestiposnovedades["Spanish"] = array();
	$fieldLabelstiposnovedades["Spanish"]["TipoId"] = "Tipo Id";
	$fieldToolTipstiposnovedades["Spanish"]["TipoId"] = "";
	$placeHolderstiposnovedades["Spanish"]["TipoId"] = "";
	$fieldLabelstiposnovedades["Spanish"]["NombreNovedad"] = "Nombre Novedad";
	$fieldToolTipstiposnovedades["Spanish"]["NombreNovedad"] = "";
	$placeHolderstiposnovedades["Spanish"]["NombreNovedad"] = "";
	$pageTitlestiposnovedades["Spanish"]["add"] = "Tipos Novedades";
	$pageTitlestiposnovedades["Spanish"]["edit"] = "Tipos Novedades";
	if (count($fieldToolTipstiposnovedades["Spanish"]))
		$tdatatiposnovedades[".isUseToolTips"] = true;
}


	$tdatatiposnovedades[".NCSearch"] = true;



$tdatatiposnovedades[".shortTableName"] = "tiposnovedades";
$tdatatiposnovedades[".nSecOptions"] = 0;

$tdatatiposnovedades[".mainTableOwnerID"] = "";
$tdatatiposnovedades[".entityType"] = 0;
$tdatatiposnovedades[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatiposnovedades[".strOriginalTableName"] = "dbo.tiposNovedades";

	



$tdatatiposnovedades[".showAddInPopup"] = false;

$tdatatiposnovedades[".showEditInPopup"] = false;

$tdatatiposnovedades[".showViewInPopup"] = false;

$tdatatiposnovedades[".listAjax"] = false;
//	temporary
//$tdatatiposnovedades[".listAjax"] = false;

	$tdatatiposnovedades[".audit"] = false;

	$tdatatiposnovedades[".locking"] = false;


$pages = $tdatatiposnovedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposnovedades[".edit"] = true;
	$tdatatiposnovedades[".afterEditAction"] = 1;
	$tdatatiposnovedades[".closePopupAfterEdit"] = 1;
	$tdatatiposnovedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposnovedades[".add"] = true;
$tdatatiposnovedades[".afterAddAction"] = 1;
$tdatatiposnovedades[".closePopupAfterAdd"] = 1;
$tdatatiposnovedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposnovedades[".list"] = true;
}



$tdatatiposnovedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposnovedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposnovedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposnovedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposnovedades[".printFriendly"] = true;
}



$tdatatiposnovedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposnovedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposnovedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposnovedades[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdatatiposnovedades[".ajaxCodeSnippetAdded"] = false;

$tdatatiposnovedades[".buttonsAdded"] = false;

$tdatatiposnovedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposnovedades[".isUseTimeForSearch"] = false;


$tdatatiposnovedades[".badgeColor"] = "4169E1";


$tdatatiposnovedades[".allSearchFields"] = array();
$tdatatiposnovedades[".filterFields"] = array();
$tdatatiposnovedades[".requiredSearchFields"] = array();

$tdatatiposnovedades[".googleLikeFields"] = array();
$tdatatiposnovedades[".googleLikeFields"][] = "TipoId";
$tdatatiposnovedades[".googleLikeFields"][] = "NombreNovedad";



$tdatatiposnovedades[".tableType"] = "list";

$tdatatiposnovedades[".printerPageOrientation"] = 0;
$tdatatiposnovedades[".nPrinterPageScale"] = 100;

$tdatatiposnovedades[".nPrinterSplitRecords"] = 40;

$tdatatiposnovedades[".geocodingEnabled"] = false;




$tdatatiposnovedades[".isDisplayLoading"] = true;






$tdatatiposnovedades[".pageSize"] = 20;

$tdatatiposnovedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiposnovedades[".strOrderBy"] = $tstrOrderBy;

$tdatatiposnovedades[".orderindexes"] = array();


$tdatatiposnovedades[".sqlHead"] = "SELECT TipoId,  	NombreNovedad";
$tdatatiposnovedades[".sqlFrom"] = "FROM dbo.tiposNovedades";
$tdatatiposnovedades[".sqlWhereExpr"] = "";
$tdatatiposnovedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatiposnovedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposnovedades[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposnovedades[".highlightSearchResults"] = true;

$tableKeystiposnovedades = array();
$tableKeystiposnovedades[] = "TipoId";
$tdatatiposnovedades[".Keys"] = $tableKeystiposnovedades;


$tdatatiposnovedades[".hideMobileList"] = array();




//	TipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoId";
	$fdata["GoodName"] = "TipoId";
	$fdata["ownerTable"] = "dbo.tiposNovedades";
	$fdata["Label"] = GetFieldLabel("dbo_tiposNovedades","TipoId");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatatiposnovedades["TipoId"] = $fdata;
		$tdatatiposnovedades[".searchableFields"][] = "TipoId";
//	NombreNovedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NombreNovedad";
	$fdata["GoodName"] = "NombreNovedad";
	$fdata["ownerTable"] = "dbo.tiposNovedades";
	$fdata["Label"] = GetFieldLabel("dbo_tiposNovedades","NombreNovedad");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "NombreNovedad";

		$fdata["sourceSingle"] = "NombreNovedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NombreNovedad";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatatiposnovedades["NombreNovedad"] = $fdata;
		$tdatatiposnovedades[".searchableFields"][] = "NombreNovedad";


$tables_data["dbo.tiposNovedades"]=&$tdatatiposnovedades;
$field_labels["dbo_tiposNovedades"] = &$fieldLabelstiposnovedades;
$fieldToolTips["dbo_tiposNovedades"] = &$fieldToolTipstiposnovedades;
$placeHolders["dbo_tiposNovedades"] = &$placeHolderstiposnovedades;
$page_titles["dbo_tiposNovedades"] = &$pageTitlestiposnovedades;


changeTextControlsToDate( "dbo.tiposNovedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.tiposNovedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.tiposNovedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposnovedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoId,  	NombreNovedad";
$proto0["m_strFrom"] = "FROM dbo.tiposNovedades";
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
	"m_strTable" => "dbo.tiposNovedades",
	"m_srcTableName" => "dbo.tiposNovedades"
));

$proto6["m_sql"] = "TipoId";
$proto6["m_srcTableName"] = "dbo.tiposNovedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreNovedad",
	"m_strTable" => "dbo.tiposNovedades",
	"m_srcTableName" => "dbo.tiposNovedades"
));

$proto8["m_sql"] = "NombreNovedad";
$proto8["m_srcTableName"] = "dbo.tiposNovedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.tiposNovedades";
$proto11["m_srcTableName"] = "dbo.tiposNovedades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TipoId";
$proto11["m_columns"][] = "NombreNovedad";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.tiposNovedades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.tiposNovedades";
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
$proto0["m_srcTableName"]="dbo.tiposNovedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposnovedades = createSqlQuery_tiposnovedades();


	
		;

		

$tdatatiposnovedades[".sqlquery"] = $queryData_tiposnovedades;



$tdatatiposnovedades[".hasEvents"] = false;

?>