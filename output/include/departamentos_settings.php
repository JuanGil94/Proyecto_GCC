<?php
$tdatadepartamentos = array();
$tdatadepartamentos[".searchableFields"] = array();
$tdatadepartamentos[".ShortName"] = "departamentos";
$tdatadepartamentos[".OwnerID"] = "";
$tdatadepartamentos[".OriginalTable"] = "dbo.Departamentos";


$tdatadepartamentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadepartamentos[".originalPagesByType"] = $tdatadepartamentos[".pagesByType"];
$tdatadepartamentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadepartamentos[".originalPages"] = $tdatadepartamentos[".pages"];
$tdatadepartamentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadepartamentos[".originalDefaultPages"] = $tdatadepartamentos[".defaultPages"];

//	field labels
$fieldLabelsdepartamentos = array();
$fieldToolTipsdepartamentos = array();
$pageTitlesdepartamentos = array();
$placeHoldersdepartamentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdepartamentos["Spanish"] = array();
	$fieldToolTipsdepartamentos["Spanish"] = array();
	$placeHoldersdepartamentos["Spanish"] = array();
	$pageTitlesdepartamentos["Spanish"] = array();
	$fieldLabelsdepartamentos["Spanish"]["DepartamentoId"] = "Departamento Id";
	$fieldToolTipsdepartamentos["Spanish"]["DepartamentoId"] = "";
	$placeHoldersdepartamentos["Spanish"]["DepartamentoId"] = "";
	$fieldLabelsdepartamentos["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdepartamentos["Spanish"]["Codigo"] = "";
	$placeHoldersdepartamentos["Spanish"]["Codigo"] = "";
	$fieldLabelsdepartamentos["Spanish"]["Departamento"] = "Departamento";
	$fieldToolTipsdepartamentos["Spanish"]["Departamento"] = "";
	$placeHoldersdepartamentos["Spanish"]["Departamento"] = "";
	$pageTitlesdepartamentos["Spanish"]["add"] = "Departamentos";
	$pageTitlesdepartamentos["Spanish"]["edit"] = "Departamentos";
	if (count($fieldToolTipsdepartamentos["Spanish"]))
		$tdatadepartamentos[".isUseToolTips"] = true;
}


	$tdatadepartamentos[".NCSearch"] = true;



$tdatadepartamentos[".shortTableName"] = "departamentos";
$tdatadepartamentos[".nSecOptions"] = 0;

$tdatadepartamentos[".mainTableOwnerID"] = "";
$tdatadepartamentos[".entityType"] = 0;
$tdatadepartamentos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadepartamentos[".strOriginalTableName"] = "dbo.Departamentos";

	



$tdatadepartamentos[".showAddInPopup"] = false;

$tdatadepartamentos[".showEditInPopup"] = false;

$tdatadepartamentos[".showViewInPopup"] = false;

$tdatadepartamentos[".listAjax"] = false;
//	temporary
//$tdatadepartamentos[".listAjax"] = false;

	$tdatadepartamentos[".audit"] = true;

	$tdatadepartamentos[".locking"] = false;


$pages = $tdatadepartamentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepartamentos[".edit"] = true;
	$tdatadepartamentos[".afterEditAction"] = 1;
	$tdatadepartamentos[".closePopupAfterEdit"] = 1;
	$tdatadepartamentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepartamentos[".add"] = true;
$tdatadepartamentos[".afterAddAction"] = 1;
$tdatadepartamentos[".closePopupAfterAdd"] = 1;
$tdatadepartamentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepartamentos[".list"] = true;
}



$tdatadepartamentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepartamentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepartamentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepartamentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepartamentos[".printFriendly"] = true;
}



$tdatadepartamentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepartamentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepartamentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepartamentos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																				
																																						

$tdatadepartamentos[".ajaxCodeSnippetAdded"] = false;

$tdatadepartamentos[".buttonsAdded"] = true;

$tdatadepartamentos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadepartamentos[".isUseTimeForSearch"] = false;


$tdatadepartamentos[".badgeColor"] = "D2AF80";


$tdatadepartamentos[".allSearchFields"] = array();
$tdatadepartamentos[".filterFields"] = array();
$tdatadepartamentos[".requiredSearchFields"] = array();

$tdatadepartamentos[".googleLikeFields"] = array();
$tdatadepartamentos[".googleLikeFields"][] = "Codigo";
$tdatadepartamentos[".googleLikeFields"][] = "Departamento";



$tdatadepartamentos[".tableType"] = "list";

$tdatadepartamentos[".printerPageOrientation"] = 0;
$tdatadepartamentos[".nPrinterPageScale"] = 100;

$tdatadepartamentos[".nPrinterSplitRecords"] = 40;

$tdatadepartamentos[".geocodingEnabled"] = false;




$tdatadepartamentos[".isDisplayLoading"] = true;

$tdatadepartamentos[".isResizeColumns"] = true;





$tdatadepartamentos[".pageSize"] = 20;

$tdatadepartamentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadepartamentos[".strOrderBy"] = $tstrOrderBy;

$tdatadepartamentos[".orderindexes"] = array();


$tdatadepartamentos[".sqlHead"] = "SELECT DepartamentoId,  	Codigo,  	Departamento";
$tdatadepartamentos[".sqlFrom"] = "FROM dbo.Departamentos";
$tdatadepartamentos[".sqlWhereExpr"] = "";
$tdatadepartamentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatadepartamentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartamentos[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartamentos[".highlightSearchResults"] = true;

$tableKeysdepartamentos = array();
$tableKeysdepartamentos[] = "DepartamentoId";
$tdatadepartamentos[".Keys"] = $tableKeysdepartamentos;


$tdatadepartamentos[".hideMobileList"] = array();




//	DepartamentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DepartamentoId";
	$fdata["GoodName"] = "DepartamentoId";
	$fdata["ownerTable"] = "dbo.Departamentos";
	$fdata["Label"] = GetFieldLabel("dbo_Departamentos","DepartamentoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DepartamentoId";

		$fdata["sourceSingle"] = "DepartamentoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartamentoId";

	
	
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


	$tdatadepartamentos["DepartamentoId"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "DepartamentoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Departamentos";
	$fdata["Label"] = GetFieldLabel("dbo_Departamentos","Codigo");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Validar_numeros_No_negativos", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdatadepartamentos["Codigo"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "Codigo";
//	Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Departamento";
	$fdata["GoodName"] = "Departamento";
	$fdata["ownerTable"] = "dbo.Departamentos";
	$fdata["Label"] = GetFieldLabel("dbo_Departamentos","Departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento";

		$fdata["sourceSingle"] = "Departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento";

	
	
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


	$tdatadepartamentos["Departamento"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "Departamento";


$tables_data["dbo.Departamentos"]=&$tdatadepartamentos;
$field_labels["dbo_Departamentos"] = &$fieldLabelsdepartamentos;
$fieldToolTips["dbo_Departamentos"] = &$fieldToolTipsdepartamentos;
$placeHolders["dbo_Departamentos"] = &$placeHoldersdepartamentos;
$page_titles["dbo_Departamentos"] = &$pageTitlesdepartamentos;


changeTextControlsToDate( "dbo.Departamentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Departamentos"] = array();
//	dbo.Ciudades
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Ciudades";
		$detailsParam["dOriginalTable"] = "dbo.Ciudades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ciudades";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Ciudades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Departamentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Departamentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Departamentos"][$dIndex]["masterKeys"][]="DepartamentoId";

				$detailsTablesData["dbo.Departamentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Departamentos"][$dIndex]["detailKeys"][]="DepartamentoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Departamentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_departamentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DepartamentoId,  	Codigo,  	Departamento";
$proto0["m_strFrom"] = "FROM dbo.Departamentos";
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
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Departamentos"
));

$proto6["m_sql"] = "DepartamentoId";
$proto6["m_srcTableName"] = "dbo.Departamentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Departamentos"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Departamentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "dbo.Departamentos",
	"m_srcTableName" => "dbo.Departamentos"
));

$proto10["m_sql"] = "Departamento";
$proto10["m_srcTableName"] = "dbo.Departamentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Departamentos";
$proto13["m_srcTableName"] = "dbo.Departamentos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DepartamentoId";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Departamento";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Departamentos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Departamentos";
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
$proto0["m_srcTableName"]="dbo.Departamentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_departamentos = createSqlQuery_departamentos();


	
		;

			

$tdatadepartamentos[".sqlquery"] = $queryData_departamentos;



$tdatadepartamentos[".hasEvents"] = false;

?>