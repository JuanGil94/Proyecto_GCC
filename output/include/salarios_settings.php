<?php
$tdatasalarios = array();
$tdatasalarios[".searchableFields"] = array();
$tdatasalarios[".ShortName"] = "salarios";
$tdatasalarios[".OwnerID"] = "";
$tdatasalarios[".OriginalTable"] = "dbo.Salarios";


$tdatasalarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasalarios[".originalPagesByType"] = $tdatasalarios[".pagesByType"];
$tdatasalarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasalarios[".originalPages"] = $tdatasalarios[".pages"];
$tdatasalarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasalarios[".originalDefaultPages"] = $tdatasalarios[".defaultPages"];

//	field labels
$fieldLabelssalarios = array();
$fieldToolTipssalarios = array();
$pageTitlessalarios = array();
$placeHolderssalarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssalarios["Spanish"] = array();
	$fieldToolTipssalarios["Spanish"] = array();
	$placeHolderssalarios["Spanish"] = array();
	$pageTitlessalarios["Spanish"] = array();
	$fieldLabelssalarios["Spanish"]["SalarioId"] = "Salario Id";
	$fieldToolTipssalarios["Spanish"]["SalarioId"] = "";
	$placeHolderssalarios["Spanish"]["SalarioId"] = "";
	$fieldLabelssalarios["Spanish"]["Ano"] = "Ano";
	$fieldToolTipssalarios["Spanish"]["Ano"] = "";
	$placeHolderssalarios["Spanish"]["Ano"] = "";
	$fieldLabelssalarios["Spanish"]["Salario"] = "Salario";
	$fieldToolTipssalarios["Spanish"]["Salario"] = "";
	$placeHolderssalarios["Spanish"]["Salario"] = "";
	if (count($fieldToolTipssalarios["Spanish"]))
		$tdatasalarios[".isUseToolTips"] = true;
}


	$tdatasalarios[".NCSearch"] = true;



$tdatasalarios[".shortTableName"] = "salarios";
$tdatasalarios[".nSecOptions"] = 0;

$tdatasalarios[".mainTableOwnerID"] = "";
$tdatasalarios[".entityType"] = 0;
$tdatasalarios[".connId"] = "GCC_at_S00001_CCAD01";


$tdatasalarios[".strOriginalTableName"] = "dbo.Salarios";

	



$tdatasalarios[".showAddInPopup"] = false;

$tdatasalarios[".showEditInPopup"] = false;

$tdatasalarios[".showViewInPopup"] = false;

$tdatasalarios[".listAjax"] = false;
//	temporary
//$tdatasalarios[".listAjax"] = false;

	$tdatasalarios[".audit"] = true;

	$tdatasalarios[".locking"] = false;


$pages = $tdatasalarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasalarios[".edit"] = true;
	$tdatasalarios[".afterEditAction"] = 1;
	$tdatasalarios[".closePopupAfterEdit"] = 1;
	$tdatasalarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasalarios[".add"] = true;
$tdatasalarios[".afterAddAction"] = 1;
$tdatasalarios[".closePopupAfterAdd"] = 1;
$tdatasalarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasalarios[".list"] = true;
}



$tdatasalarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasalarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasalarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasalarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasalarios[".printFriendly"] = true;
}



$tdatasalarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasalarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasalarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasalarios[".isUseAjaxSuggest"] = true;



			

$tdatasalarios[".ajaxCodeSnippetAdded"] = false;

$tdatasalarios[".buttonsAdded"] = false;

$tdatasalarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasalarios[".isUseTimeForSearch"] = false;


$tdatasalarios[".badgeColor"] = "778899";


$tdatasalarios[".allSearchFields"] = array();
$tdatasalarios[".filterFields"] = array();
$tdatasalarios[".requiredSearchFields"] = array();

$tdatasalarios[".googleLikeFields"] = array();
$tdatasalarios[".googleLikeFields"][] = "SalarioId";
$tdatasalarios[".googleLikeFields"][] = "Ano";
$tdatasalarios[".googleLikeFields"][] = "Salario";



$tdatasalarios[".tableType"] = "list";

$tdatasalarios[".printerPageOrientation"] = 0;
$tdatasalarios[".nPrinterPageScale"] = 100;

$tdatasalarios[".nPrinterSplitRecords"] = 40;

$tdatasalarios[".geocodingEnabled"] = false;










$tdatasalarios[".pageSize"] = 20;

$tdatasalarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasalarios[".strOrderBy"] = $tstrOrderBy;

$tdatasalarios[".orderindexes"] = array();


$tdatasalarios[".sqlHead"] = "SELECT SalarioId,  	Ano,  	Salario";
$tdatasalarios[".sqlFrom"] = "FROM dbo.Salarios";
$tdatasalarios[".sqlWhereExpr"] = "";
$tdatasalarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasalarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasalarios[".arrGroupsPerPage"] = $arrGPP;

$tdatasalarios[".highlightSearchResults"] = true;

$tableKeyssalarios = array();
$tableKeyssalarios[] = "SalarioId";
$tdatasalarios[".Keys"] = $tableKeyssalarios;


$tdatasalarios[".hideMobileList"] = array();




//	SalarioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SalarioId";
	$fdata["GoodName"] = "SalarioId";
	$fdata["ownerTable"] = "dbo.Salarios";
	$fdata["Label"] = GetFieldLabel("dbo_Salarios","SalarioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SalarioId";

		$fdata["sourceSingle"] = "SalarioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalarioId";

	
	
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


	$tdatasalarios["SalarioId"] = $fdata;
		$tdatasalarios[".searchableFields"][] = "SalarioId";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "dbo.Salarios";
	$fdata["Label"] = GetFieldLabel("dbo_Salarios","Ano");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Ano";

		$fdata["sourceSingle"] = "Ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ano";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatasalarios["Ano"] = $fdata;
		$tdatasalarios[".searchableFields"][] = "Ano";
//	Salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Salario";
	$fdata["GoodName"] = "Salario";
	$fdata["ownerTable"] = "dbo.Salarios";
	$fdata["Label"] = GetFieldLabel("dbo_Salarios","Salario");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Salario";

		$fdata["sourceSingle"] = "Salario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Salario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatasalarios["Salario"] = $fdata;
		$tdatasalarios[".searchableFields"][] = "Salario";


$tables_data["dbo.Salarios"]=&$tdatasalarios;
$field_labels["dbo_Salarios"] = &$fieldLabelssalarios;
$fieldToolTips["dbo_Salarios"] = &$fieldToolTipssalarios;
$placeHolders["dbo_Salarios"] = &$placeHolderssalarios;
$page_titles["dbo_Salarios"] = &$pageTitlessalarios;


changeTextControlsToDate( "dbo.Salarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Salarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Salarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_salarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SalarioId,  	Ano,  	Salario";
$proto0["m_strFrom"] = "FROM dbo.Salarios";
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
	"m_strName" => "SalarioId",
	"m_strTable" => "dbo.Salarios",
	"m_srcTableName" => "dbo.Salarios"
));

$proto6["m_sql"] = "SalarioId";
$proto6["m_srcTableName"] = "dbo.Salarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Salarios",
	"m_srcTableName" => "dbo.Salarios"
));

$proto8["m_sql"] = "Ano";
$proto8["m_srcTableName"] = "dbo.Salarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Salario",
	"m_strTable" => "dbo.Salarios",
	"m_srcTableName" => "dbo.Salarios"
));

$proto10["m_sql"] = "Salario";
$proto10["m_srcTableName"] = "dbo.Salarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Salarios";
$proto13["m_srcTableName"] = "dbo.Salarios";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "SalarioId";
$proto13["m_columns"][] = "Ano";
$proto13["m_columns"][] = "Salario";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Salarios";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Salarios";
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
$proto0["m_srcTableName"]="dbo.Salarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_salarios = createSqlQuery_salarios();


	
		;

			

$tdatasalarios[".sqlquery"] = $queryData_salarios;



$tdatasalarios[".hasEvents"] = false;

?>