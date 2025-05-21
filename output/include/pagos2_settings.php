<?php
$tdatapagos2 = array();
$tdatapagos2[".searchableFields"] = array();
$tdatapagos2[".ShortName"] = "pagos2";
$tdatapagos2[".OwnerID"] = "";
$tdatapagos2[".OriginalTable"] = "dbo.Pagos1";


$tdatapagos2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapagos2[".originalPagesByType"] = $tdatapagos2[".pagesByType"];
$tdatapagos2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapagos2[".originalPages"] = $tdatapagos2[".pages"];
$tdatapagos2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatapagos2[".originalDefaultPages"] = $tdatapagos2[".defaultPages"];

//	field labels
$fieldLabelspagos2 = array();
$fieldToolTipspagos2 = array();
$pageTitlespagos2 = array();
$placeHolderspagos2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspagos2["Spanish"] = array();
	$fieldToolTipspagos2["Spanish"] = array();
	$placeHolderspagos2["Spanish"] = array();
	$pageTitlespagos2["Spanish"] = array();
	$fieldLabelspagos2["Spanish"]["MesNumero"] = "Mes Numero";
	$fieldToolTipspagos2["Spanish"]["MesNumero"] = "";
	$placeHolderspagos2["Spanish"]["MesNumero"] = "";
	$fieldLabelspagos2["Spanish"]["Mes"] = "Mes";
	$fieldToolTipspagos2["Spanish"]["Mes"] = "";
	$placeHolderspagos2["Spanish"]["Mes"] = "";
	$pageTitlespagos2["Spanish"]["add"] = "Pagos2";
	if (count($fieldToolTipspagos2["Spanish"]))
		$tdatapagos2[".isUseToolTips"] = true;
}


	$tdatapagos2[".NCSearch"] = true;



$tdatapagos2[".shortTableName"] = "pagos2";
$tdatapagos2[".nSecOptions"] = 0;

$tdatapagos2[".mainTableOwnerID"] = "";
$tdatapagos2[".entityType"] = 1;
$tdatapagos2[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapagos2[".strOriginalTableName"] = "dbo.Pagos1";

	



$tdatapagos2[".showAddInPopup"] = false;

$tdatapagos2[".showEditInPopup"] = false;

$tdatapagos2[".showViewInPopup"] = false;

$tdatapagos2[".listAjax"] = false;
//	temporary
//$tdatapagos2[".listAjax"] = false;

	$tdatapagos2[".audit"] = true;

	$tdatapagos2[".locking"] = false;


$pages = $tdatapagos2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapagos2[".edit"] = true;
	$tdatapagos2[".afterEditAction"] = 1;
	$tdatapagos2[".closePopupAfterEdit"] = 1;
	$tdatapagos2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapagos2[".add"] = true;
$tdatapagos2[".afterAddAction"] = 1;
$tdatapagos2[".closePopupAfterAdd"] = 1;
$tdatapagos2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapagos2[".list"] = true;
}



$tdatapagos2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapagos2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapagos2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapagos2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapagos2[".printFriendly"] = true;
}



$tdatapagos2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapagos2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapagos2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapagos2[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatapagos2[".ajaxCodeSnippetAdded"] = false;

$tdatapagos2[".buttonsAdded"] = false;

$tdatapagos2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapagos2[".isUseTimeForSearch"] = false;


$tdatapagos2[".badgeColor"] = "00C2C5";


$tdatapagos2[".allSearchFields"] = array();
$tdatapagos2[".filterFields"] = array();
$tdatapagos2[".requiredSearchFields"] = array();

$tdatapagos2[".googleLikeFields"] = array();
$tdatapagos2[".googleLikeFields"][] = "MesNumero";
$tdatapagos2[".googleLikeFields"][] = "Mes";



$tdatapagos2[".tableType"] = "list";

$tdatapagos2[".printerPageOrientation"] = 0;
$tdatapagos2[".nPrinterPageScale"] = 100;

$tdatapagos2[".nPrinterSplitRecords"] = 40;

$tdatapagos2[".geocodingEnabled"] = false;




$tdatapagos2[".isDisplayLoading"] = true;

$tdatapagos2[".isResizeColumns"] = true;





$tdatapagos2[".pageSize"] = 20;

$tdatapagos2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY [MesNumero] asc";
$tdatapagos2[".strOrderBy"] = $tstrOrderBy;

$tdatapagos2[".orderindexes"] = array();
	$tdatapagos2[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "MesNumero");



$tdatapagos2[".sqlHead"] = "SELECT  DISTINCT [MesNumero], [Mes]";
$tdatapagos2[".sqlFrom"] = "FROM (      SELECT           MONTH(Pagos1.Registro) AS [MesNumero],           CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END AS [Mes],           *      FROM [dbo].[Pagos1]  ) AS SubQuery";
$tdatapagos2[".sqlWhereExpr"] = "";
$tdatapagos2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatapagos2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapagos2[".arrGroupsPerPage"] = $arrGPP;

$tdatapagos2[".highlightSearchResults"] = true;

$tableKeyspagos2 = array();
$tdatapagos2[".Keys"] = $tableKeyspagos2;


$tdatapagos2[".hideMobileList"] = array();




//	MesNumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MesNumero";
	$fdata["GoodName"] = "MesNumero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos2","MesNumero");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MesNumero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[MesNumero]";

	
	
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


	$tdatapagos2["MesNumero"] = $fdata;
		$tdatapagos2[".searchableFields"][] = "MesNumero";
//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos2","Mes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Mes]";

	
	
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


	$tdatapagos2["Mes"] = $fdata;
		$tdatapagos2[".searchableFields"][] = "Mes";


$tables_data["dbo.Pagos2"]=&$tdatapagos2;
$field_labels["dbo_Pagos2"] = &$fieldLabelspagos2;
$fieldToolTips["dbo_Pagos2"] = &$fieldToolTipspagos2;
$placeHolders["dbo_Pagos2"] = &$placeHolderspagos2;
$page_titles["dbo_Pagos2"] = &$pageTitlespagos2;


changeTextControlsToDate( "dbo.Pagos2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Pagos2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Pagos2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pagos2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "[MesNumero], [Mes]";
$proto0["m_strFrom"] = "FROM (      SELECT           MONTH(Pagos1.Registro) AS [MesNumero],           CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END AS [Mes],           *      FROM [dbo].[Pagos1]  ) AS SubQuery";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY [MesNumero] asc";
	
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
	"m_strName" => "MesNumero",
	"m_strTable" => "SubQuery",
	"m_srcTableName" => "dbo.Pagos2"
));

$proto6["m_sql"] = "[MesNumero]";
$proto6["m_srcTableName"] = "dbo.Pagos2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Mes",
	"m_strTable" => "SubQuery",
	"m_srcTableName" => "dbo.Pagos2"
));

$proto8["m_sql"] = "[Mes]";
$proto8["m_srcTableName"] = "dbo.Pagos2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strHead"] = "      SELECT";
$proto11["m_strFieldList"] = "MONTH(Pagos1.Registro) AS [MesNumero],           CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END AS [Mes],           *";
$proto11["m_strFrom"] = "FROM [dbo].[Pagos1]";
$proto11["m_strWhere"] = "";
$proto11["m_strOrderBy"] = "";
	
		;
			$proto11["cipherer"] = null;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_where"] = $obj;
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto11["m_having"] = $obj;
$proto11["m_fieldlist"] = array();
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Pagos1.Registro"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "MONTH(Pagos1.Registro)";
$proto17["m_srcTableName"] = "dbo.Pagos2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "MesNumero";
$obj = new SQLFieldListItem($proto17);

$proto11["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END"
));

$proto20["m_sql"] = "CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END";
$proto20["m_srcTableName"] = "dbo.Pagos2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Mes";
$obj = new SQLFieldListItem($proto20);

$proto11["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto22["m_sql"] = "*";
$proto22["m_srcTableName"] = "dbo.Pagos2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto11["m_fieldlist"][]=$obj;
$proto11["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Pagos1";
$proto25["m_srcTableName"] = "dbo.Pagos2";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "PagoId";
$proto25["m_columns"][] = "ProcesoId";
$proto25["m_columns"][] = "CuentaId";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Numero";
$proto25["m_columns"][] = "Pago";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "Registro";
$proto25["m_columns"][] = "PagoObli";
$proto25["m_columns"][] = "PagoCost";
$proto25["m_columns"][] = "PagoInte";
$proto25["m_columns"][] = "PagoMayo";
$proto25["m_columns"][] = "PagoTerm";
$proto25["m_columns"][] = "PagoIdOrig";
$proto25["m_columns"][] = "TipoRecaudoId";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "[dbo].[Pagos1]";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Pagos2";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto11["m_fromlist"][]=$obj;
$proto11["m_groupby"] = array();
$proto11["m_orderby"] = array();
$proto11["m_srcTableName"]="dbo.Pagos2";		
$obj = new SQLQuery($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "(      SELECT           MONTH(Pagos1.Registro) AS [MesNumero],           CASE               WHEN MONTH(Pagos1.Registro) = 1 THEN 'Enero'               WHEN MONTH(Pagos1.Registro) = 2 THEN 'Febrero'               WHEN MONTH(Pagos1.Registro) = 3 THEN 'Marzo'               WHEN MONTH(Pagos1.Registro) = 4 THEN 'Abril'               WHEN MONTH(Pagos1.Registro) = 5 THEN 'Mayo'               WHEN MONTH(Pagos1.Registro) = 6 THEN 'Junio'               WHEN MONTH(Pagos1.Registro) = 7 THEN 'Julio'               WHEN MONTH(Pagos1.Registro) = 8 THEN 'Agosto'               WHEN MONTH(Pagos1.Registro) = 9 THEN 'Septiembre'               WHEN MONTH(Pagos1.Registro) = 10 THEN 'Octubre'               WHEN MONTH(Pagos1.Registro) = 11 THEN 'Noviembre'               WHEN MONTH(Pagos1.Registro) = 12 THEN 'Diciembre'               ELSE 'OTRO'           END AS [Mes],           *      FROM [dbo].[Pagos1]  ) AS SubQuery";
$proto10["m_alias"] = "SubQuery";
$proto10["m_srcTableName"] = "dbo.Pagos2";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "MesNumero",
	"m_strTable" => "SubQuery",
	"m_srcTableName" => "dbo.Pagos2"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Pagos2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pagos2 = createSqlQuery_pagos2();


	
		;

		

$tdatapagos2[".sqlquery"] = $queryData_pagos2;



include_once(getabspath("include/pagos2_events.php"));
$tdatapagos2[".hasEvents"] = true;

?>