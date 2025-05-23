<?php
$tdatasalarios = array();
$tdatasalarios[".searchableFields"] = array();
$tdatasalarios[".ShortName"] = "salarios";
$tdatasalarios[".OwnerID"] = "";
$tdatasalarios[".OriginalTable"] = "dbo.Salarios";


$tdatasalarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasalarios[".originalPagesByType"] = $tdatasalarios[".pagesByType"];
$tdatasalarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasalarios[".originalPages"] = $tdatasalarios[".pages"];
$tdatasalarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$fieldLabelssalarios["Spanish"]["Ano"] = "Año";
	$fieldToolTipssalarios["Spanish"]["Ano"] = "";
	$placeHolderssalarios["Spanish"]["Ano"] = "";
	$fieldLabelssalarios["Spanish"]["Salario"] = "Salario";
	$fieldToolTipssalarios["Spanish"]["Salario"] = "";
	$placeHolderssalarios["Spanish"]["Salario"] = "";
	$pageTitlessalarios["Spanish"]["add"] = "Salarios";
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

$tdatasalarios[".buttonsAdded"] = true;

$tdatasalarios[".addPageEvents"] = true;

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




$tdatasalarios[".isDisplayLoading"] = true;

$tdatasalarios[".isResizeColumns"] = true;





$tdatasalarios[".pageSize"] = 20;

$tdatasalarios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Ano DESC";
$tdatasalarios[".strOrderBy"] = $tstrOrderBy;

$tdatasalarios[".orderindexes"] = array();
	$tdatasalarios[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "Ano");



$tdatasalarios[".sqlHead"] = "SELECT SalarioId,  Ano,  FORMAT(Salario, 'C', 'es-CO') Salario";
$tdatasalarios[".sqlFrom"] = "FROM dbo.Salarios";
$tdatasalarios[".sqlWhereExpr"] = "";
$tdatasalarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Validar_numeros_No_negativos", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Salarios","Salario");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Salario";

		$fdata["sourceSingle"] = "Salario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Salario, 'C', 'es-CO')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Validar_numeros_No_negativos", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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
$proto0["m_strFieldList"] = "SalarioId,  Ano,  FORMAT(Salario, 'C', 'es-CO') Salario";
$proto0["m_strFrom"] = "FROM dbo.Salarios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Ano DESC";
	
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
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Salario"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "FORMAT(Salario, 'C', 'es-CO')";
$proto10["m_srcTableName"] = "dbo.Salarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Salario";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "dbo.Salarios";
$proto16["m_srcTableName"] = "dbo.Salarios";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "SalarioId";
$proto16["m_columns"][] = "Ano";
$proto16["m_columns"][] = "Salario";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "dbo.Salarios";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "dbo.Salarios";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Salarios",
	"m_srcTableName" => "dbo.Salarios"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 0;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Salarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_salarios = createSqlQuery_salarios();


	
		;

			

$tdatasalarios[".sqlquery"] = $queryData_salarios;



$tdatasalarios[".hasEvents"] = false;

?>