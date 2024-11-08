<?php
$tdatacodificadoresdespacho = array();
$tdatacodificadoresdespacho[".searchableFields"] = array();
$tdatacodificadoresdespacho[".ShortName"] = "codificadoresdespacho";
$tdatacodificadoresdespacho[".OwnerID"] = "";
$tdatacodificadoresdespacho[".OriginalTable"] = "dbo.codificadoresDespacho";


$tdatacodificadoresdespacho[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacodificadoresdespacho[".originalPagesByType"] = $tdatacodificadoresdespacho[".pagesByType"];
$tdatacodificadoresdespacho[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacodificadoresdespacho[".originalPages"] = $tdatacodificadoresdespacho[".pages"];
$tdatacodificadoresdespacho[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacodificadoresdespacho[".originalDefaultPages"] = $tdatacodificadoresdespacho[".defaultPages"];

//	field labels
$fieldLabelscodificadoresdespacho = array();
$fieldToolTipscodificadoresdespacho = array();
$pageTitlescodificadoresdespacho = array();
$placeHolderscodificadoresdespacho = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscodificadoresdespacho["Spanish"] = array();
	$fieldToolTipscodificadoresdespacho["Spanish"] = array();
	$placeHolderscodificadoresdespacho["Spanish"] = array();
	$pageTitlescodificadoresdespacho["Spanish"] = array();
	$fieldLabelscodificadoresdespacho["Spanish"]["id"] = "Id";
	$fieldToolTipscodificadoresdespacho["Spanish"]["id"] = "";
	$placeHolderscodificadoresdespacho["Spanish"]["id"] = "";
	$fieldLabelscodificadoresdespacho["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscodificadoresdespacho["Spanish"]["nombre"] = "";
	$placeHolderscodificadoresdespacho["Spanish"]["nombre"] = "";
	$fieldLabelscodificadoresdespacho["Spanish"]["codificador"] = "Codificador";
	$fieldToolTipscodificadoresdespacho["Spanish"]["codificador"] = "";
	$placeHolderscodificadoresdespacho["Spanish"]["codificador"] = "";
	if (count($fieldToolTipscodificadoresdespacho["Spanish"]))
		$tdatacodificadoresdespacho[".isUseToolTips"] = true;
}


	$tdatacodificadoresdespacho[".NCSearch"] = true;



$tdatacodificadoresdespacho[".shortTableName"] = "codificadoresdespacho";
$tdatacodificadoresdespacho[".nSecOptions"] = 0;

$tdatacodificadoresdespacho[".mainTableOwnerID"] = "";
$tdatacodificadoresdespacho[".entityType"] = 0;
$tdatacodificadoresdespacho[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacodificadoresdespacho[".strOriginalTableName"] = "dbo.codificadoresDespacho";

	



$tdatacodificadoresdespacho[".showAddInPopup"] = false;

$tdatacodificadoresdespacho[".showEditInPopup"] = false;

$tdatacodificadoresdespacho[".showViewInPopup"] = false;

$tdatacodificadoresdespacho[".listAjax"] = false;
//	temporary
//$tdatacodificadoresdespacho[".listAjax"] = false;

	$tdatacodificadoresdespacho[".audit"] = false;

	$tdatacodificadoresdespacho[".locking"] = false;


$pages = $tdatacodificadoresdespacho[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacodificadoresdespacho[".edit"] = true;
	$tdatacodificadoresdespacho[".afterEditAction"] = 1;
	$tdatacodificadoresdespacho[".closePopupAfterEdit"] = 1;
	$tdatacodificadoresdespacho[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacodificadoresdespacho[".add"] = true;
$tdatacodificadoresdespacho[".afterAddAction"] = 1;
$tdatacodificadoresdespacho[".closePopupAfterAdd"] = 1;
$tdatacodificadoresdespacho[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacodificadoresdespacho[".list"] = true;
}



$tdatacodificadoresdespacho[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacodificadoresdespacho[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacodificadoresdespacho[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacodificadoresdespacho[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacodificadoresdespacho[".printFriendly"] = true;
}



$tdatacodificadoresdespacho[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacodificadoresdespacho[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacodificadoresdespacho[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacodificadoresdespacho[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																							

$tdatacodificadoresdespacho[".ajaxCodeSnippetAdded"] = false;

$tdatacodificadoresdespacho[".buttonsAdded"] = false;

$tdatacodificadoresdespacho[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacodificadoresdespacho[".isUseTimeForSearch"] = false;


$tdatacodificadoresdespacho[".badgeColor"] = "DC143C";


$tdatacodificadoresdespacho[".allSearchFields"] = array();
$tdatacodificadoresdespacho[".filterFields"] = array();
$tdatacodificadoresdespacho[".requiredSearchFields"] = array();

$tdatacodificadoresdespacho[".googleLikeFields"] = array();
$tdatacodificadoresdespacho[".googleLikeFields"][] = "id";
$tdatacodificadoresdespacho[".googleLikeFields"][] = "nombre";
$tdatacodificadoresdespacho[".googleLikeFields"][] = "codificador";



$tdatacodificadoresdespacho[".tableType"] = "list";

$tdatacodificadoresdespacho[".printerPageOrientation"] = 0;
$tdatacodificadoresdespacho[".nPrinterPageScale"] = 100;

$tdatacodificadoresdespacho[".nPrinterSplitRecords"] = 40;

$tdatacodificadoresdespacho[".geocodingEnabled"] = false;










$tdatacodificadoresdespacho[".pageSize"] = 20;

$tdatacodificadoresdespacho[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacodificadoresdespacho[".strOrderBy"] = $tstrOrderBy;

$tdatacodificadoresdespacho[".orderindexes"] = array();


$tdatacodificadoresdespacho[".sqlHead"] = "SELECT id,  	nombre,  	codificador";
$tdatacodificadoresdespacho[".sqlFrom"] = "FROM dbo.codificadoresDespacho";
$tdatacodificadoresdespacho[".sqlWhereExpr"] = "";
$tdatacodificadoresdespacho[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacodificadoresdespacho[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacodificadoresdespacho[".arrGroupsPerPage"] = $arrGPP;

$tdatacodificadoresdespacho[".highlightSearchResults"] = true;

$tableKeyscodificadoresdespacho = array();
$tableKeyscodificadoresdespacho[] = "id";
$tdatacodificadoresdespacho[".Keys"] = $tableKeyscodificadoresdespacho;


$tdatacodificadoresdespacho[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.codificadoresDespacho";
	$fdata["Label"] = GetFieldLabel("dbo_codificadoresDespacho","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacodificadoresdespacho["id"] = $fdata;
		$tdatacodificadoresdespacho[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "dbo.codificadoresDespacho";
	$fdata["Label"] = GetFieldLabel("dbo_codificadoresDespacho","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatacodificadoresdespacho["nombre"] = $fdata;
		$tdatacodificadoresdespacho[".searchableFields"][] = "nombre";
//	codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codificador";
	$fdata["GoodName"] = "codificador";
	$fdata["ownerTable"] = "dbo.codificadoresDespacho";
	$fdata["Label"] = GetFieldLabel("dbo_codificadoresDespacho","codificador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codificador";

		$fdata["sourceSingle"] = "codificador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codificador";

	
	
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


	$tdatacodificadoresdespacho["codificador"] = $fdata;
		$tdatacodificadoresdespacho[".searchableFields"][] = "codificador";


$tables_data["dbo.codificadoresDespacho"]=&$tdatacodificadoresdespacho;
$field_labels["dbo_codificadoresDespacho"] = &$fieldLabelscodificadoresdespacho;
$fieldToolTips["dbo_codificadoresDespacho"] = &$fieldToolTipscodificadoresdespacho;
$placeHolders["dbo_codificadoresDespacho"] = &$placeHolderscodificadoresdespacho;
$page_titles["dbo_codificadoresDespacho"] = &$pageTitlescodificadoresdespacho;


changeTextControlsToDate( "dbo.codificadoresDespacho" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.codificadoresDespacho"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.codificadoresDespacho"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_codificadoresdespacho()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	codificador";
$proto0["m_strFrom"] = "FROM dbo.codificadoresDespacho";
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
	"m_strName" => "id",
	"m_strTable" => "dbo.codificadoresDespacho",
	"m_srcTableName" => "dbo.codificadoresDespacho"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.codificadoresDespacho";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "dbo.codificadoresDespacho",
	"m_srcTableName" => "dbo.codificadoresDespacho"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "dbo.codificadoresDespacho";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codificador",
	"m_strTable" => "dbo.codificadoresDespacho",
	"m_srcTableName" => "dbo.codificadoresDespacho"
));

$proto10["m_sql"] = "codificador";
$proto10["m_srcTableName"] = "dbo.codificadoresDespacho";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.codificadoresDespacho";
$proto13["m_srcTableName"] = "dbo.codificadoresDespacho";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nombre";
$proto13["m_columns"][] = "codificador";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.codificadoresDespacho";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.codificadoresDespacho";
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
$proto0["m_srcTableName"]="dbo.codificadoresDespacho";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_codificadoresdespacho = createSqlQuery_codificadoresdespacho();


	
		;

			

$tdatacodificadoresdespacho[".sqlquery"] = $queryData_codificadoresdespacho;



$tdatacodificadoresdespacho[".hasEvents"] = false;

?>