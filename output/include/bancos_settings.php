<?php
$tdatabancos = array();
$tdatabancos[".searchableFields"] = array();
$tdatabancos[".ShortName"] = "bancos";
$tdatabancos[".OwnerID"] = "";
$tdatabancos[".OriginalTable"] = "dbo.Bancos";


$tdatabancos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabancos[".originalPagesByType"] = $tdatabancos[".pagesByType"];
$tdatabancos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabancos[".originalPages"] = $tdatabancos[".pages"];
$tdatabancos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabancos[".originalDefaultPages"] = $tdatabancos[".defaultPages"];

//	field labels
$fieldLabelsbancos = array();
$fieldToolTipsbancos = array();
$pageTitlesbancos = array();
$placeHoldersbancos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbancos["Spanish"] = array();
	$fieldToolTipsbancos["Spanish"] = array();
	$placeHoldersbancos["Spanish"] = array();
	$pageTitlesbancos["Spanish"] = array();
	$fieldLabelsbancos["Spanish"]["BancoId"] = "Banco Id";
	$fieldToolTipsbancos["Spanish"]["BancoId"] = "";
	$placeHoldersbancos["Spanish"]["BancoId"] = "";
	$fieldLabelsbancos["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsbancos["Spanish"]["Codigo"] = "";
	$placeHoldersbancos["Spanish"]["Codigo"] = "";
	$fieldLabelsbancos["Spanish"]["Banco"] = "Banco";
	$fieldToolTipsbancos["Spanish"]["Banco"] = "";
	$placeHoldersbancos["Spanish"]["Banco"] = "";
	if (count($fieldToolTipsbancos["Spanish"]))
		$tdatabancos[".isUseToolTips"] = true;
}


	$tdatabancos[".NCSearch"] = true;



$tdatabancos[".shortTableName"] = "bancos";
$tdatabancos[".nSecOptions"] = 0;

$tdatabancos[".mainTableOwnerID"] = "";
$tdatabancos[".entityType"] = 0;
$tdatabancos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabancos[".strOriginalTableName"] = "dbo.Bancos";

	



$tdatabancos[".showAddInPopup"] = false;

$tdatabancos[".showEditInPopup"] = false;

$tdatabancos[".showViewInPopup"] = false;

$tdatabancos[".listAjax"] = false;
//	temporary
//$tdatabancos[".listAjax"] = false;

	$tdatabancos[".audit"] = false;

	$tdatabancos[".locking"] = false;


$pages = $tdatabancos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabancos[".edit"] = true;
	$tdatabancos[".afterEditAction"] = 1;
	$tdatabancos[".closePopupAfterEdit"] = 1;
	$tdatabancos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabancos[".add"] = true;
$tdatabancos[".afterAddAction"] = 1;
$tdatabancos[".closePopupAfterAdd"] = 1;
$tdatabancos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabancos[".list"] = true;
}



$tdatabancos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabancos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabancos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabancos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabancos[".printFriendly"] = true;
}



$tdatabancos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabancos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabancos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabancos[".isUseAjaxSuggest"] = true;



															

$tdatabancos[".ajaxCodeSnippetAdded"] = false;

$tdatabancos[".buttonsAdded"] = false;

$tdatabancos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabancos[".isUseTimeForSearch"] = false;


$tdatabancos[".badgeColor"] = "6493EA";


$tdatabancos[".allSearchFields"] = array();
$tdatabancos[".filterFields"] = array();
$tdatabancos[".requiredSearchFields"] = array();

$tdatabancos[".googleLikeFields"] = array();
$tdatabancos[".googleLikeFields"][] = "BancoId";
$tdatabancos[".googleLikeFields"][] = "Codigo";
$tdatabancos[".googleLikeFields"][] = "Banco";



$tdatabancos[".tableType"] = "list";

$tdatabancos[".printerPageOrientation"] = 0;
$tdatabancos[".nPrinterPageScale"] = 100;

$tdatabancos[".nPrinterSplitRecords"] = 40;

$tdatabancos[".geocodingEnabled"] = false;










$tdatabancos[".pageSize"] = 20;

$tdatabancos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabancos[".strOrderBy"] = $tstrOrderBy;

$tdatabancos[".orderindexes"] = array();


$tdatabancos[".sqlHead"] = "SELECT BancoId,  	Codigo,  	Banco";
$tdatabancos[".sqlFrom"] = "FROM dbo.Bancos";
$tdatabancos[".sqlWhereExpr"] = "";
$tdatabancos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabancos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabancos[".arrGroupsPerPage"] = $arrGPP;

$tdatabancos[".highlightSearchResults"] = true;

$tableKeysbancos = array();
$tableKeysbancos[] = "BancoId";
$tdatabancos[".Keys"] = $tableKeysbancos;


$tdatabancos[".hideMobileList"] = array();




//	BancoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BancoId";
	$fdata["GoodName"] = "BancoId";
	$fdata["ownerTable"] = "dbo.Bancos";
	$fdata["Label"] = GetFieldLabel("dbo_Bancos","BancoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "BancoId";

		$fdata["sourceSingle"] = "BancoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BancoId";

	
	
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


	$tdatabancos["BancoId"] = $fdata;
		$tdatabancos[".searchableFields"][] = "BancoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Bancos";
	$fdata["Label"] = GetFieldLabel("dbo_Bancos","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatabancos["Codigo"] = $fdata;
		$tdatabancos[".searchableFields"][] = "Codigo";
//	Banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Banco";
	$fdata["GoodName"] = "Banco";
	$fdata["ownerTable"] = "dbo.Bancos";
	$fdata["Label"] = GetFieldLabel("dbo_Bancos","Banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Banco";

		$fdata["sourceSingle"] = "Banco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Banco";

	
	
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


	$tdatabancos["Banco"] = $fdata;
		$tdatabancos[".searchableFields"][] = "Banco";


$tables_data["dbo.Bancos"]=&$tdatabancos;
$field_labels["dbo_Bancos"] = &$fieldLabelsbancos;
$fieldToolTips["dbo_Bancos"] = &$fieldToolTipsbancos;
$placeHolders["dbo_Bancos"] = &$placeHoldersbancos;
$page_titles["dbo_Bancos"] = &$pageTitlesbancos;


changeTextControlsToDate( "dbo.Bancos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Bancos"] = array();
//	dbo.Cuentas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Cuentas";
		$detailsParam["dOriginalTable"] = "dbo.Cuentas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cuentas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Cuentas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Bancos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Bancos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Bancos"][$dIndex]["masterKeys"][]="BancoId";

				$detailsTablesData["dbo.Bancos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Bancos"][$dIndex]["detailKeys"][]="BancoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Bancos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bancos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BancoId,  	Codigo,  	Banco";
$proto0["m_strFrom"] = "FROM dbo.Bancos";
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
	"m_strName" => "BancoId",
	"m_strTable" => "dbo.Bancos",
	"m_srcTableName" => "dbo.Bancos"
));

$proto6["m_sql"] = "BancoId";
$proto6["m_srcTableName"] = "dbo.Bancos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Bancos",
	"m_srcTableName" => "dbo.Bancos"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Bancos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Banco",
	"m_strTable" => "dbo.Bancos",
	"m_srcTableName" => "dbo.Bancos"
));

$proto10["m_sql"] = "Banco";
$proto10["m_srcTableName"] = "dbo.Bancos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Bancos";
$proto13["m_srcTableName"] = "dbo.Bancos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "BancoId";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Banco";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Bancos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Bancos";
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
$proto0["m_srcTableName"]="dbo.Bancos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bancos = createSqlQuery_bancos();


	
		;

			

$tdatabancos[".sqlquery"] = $queryData_bancos;



$tdatabancos[".hasEvents"] = false;

?>