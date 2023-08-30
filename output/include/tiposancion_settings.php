<?php
$tdatatiposancion = array();
$tdatatiposancion[".searchableFields"] = array();
$tdatatiposancion[".ShortName"] = "tiposancion";
$tdatatiposancion[".OwnerID"] = "";
$tdatatiposancion[".OriginalTable"] = "dbo.TipoSancion";


$tdatatiposancion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposancion[".originalPagesByType"] = $tdatatiposancion[".pagesByType"];
$tdatatiposancion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposancion[".originalPages"] = $tdatatiposancion[".pages"];
$tdatatiposancion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposancion[".originalDefaultPages"] = $tdatatiposancion[".defaultPages"];

//	field labels
$fieldLabelstiposancion = array();
$fieldToolTipstiposancion = array();
$pageTitlestiposancion = array();
$placeHolderstiposancion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposancion["Spanish"] = array();
	$fieldToolTipstiposancion["Spanish"] = array();
	$placeHolderstiposancion["Spanish"] = array();
	$pageTitlestiposancion["Spanish"] = array();
	$fieldLabelstiposancion["Spanish"]["IdTipo"] = "Id Tipo";
	$fieldToolTipstiposancion["Spanish"]["IdTipo"] = "";
	$placeHolderstiposancion["Spanish"]["IdTipo"] = "";
	$fieldLabelstiposancion["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipstiposancion["Spanish"]["Nombre"] = "";
	$placeHolderstiposancion["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipstiposancion["Spanish"]))
		$tdatatiposancion[".isUseToolTips"] = true;
}


	$tdatatiposancion[".NCSearch"] = true;



$tdatatiposancion[".shortTableName"] = "tiposancion";
$tdatatiposancion[".nSecOptions"] = 0;

$tdatatiposancion[".mainTableOwnerID"] = "";
$tdatatiposancion[".entityType"] = 0;
$tdatatiposancion[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatiposancion[".strOriginalTableName"] = "dbo.TipoSancion";

	



$tdatatiposancion[".showAddInPopup"] = false;

$tdatatiposancion[".showEditInPopup"] = false;

$tdatatiposancion[".showViewInPopup"] = false;

$tdatatiposancion[".listAjax"] = false;
//	temporary
//$tdatatiposancion[".listAjax"] = false;

	$tdatatiposancion[".audit"] = true;

	$tdatatiposancion[".locking"] = false;


$pages = $tdatatiposancion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposancion[".edit"] = true;
	$tdatatiposancion[".afterEditAction"] = 1;
	$tdatatiposancion[".closePopupAfterEdit"] = 1;
	$tdatatiposancion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposancion[".add"] = true;
$tdatatiposancion[".afterAddAction"] = 1;
$tdatatiposancion[".closePopupAfterAdd"] = 1;
$tdatatiposancion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposancion[".list"] = true;
}



$tdatatiposancion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposancion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposancion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposancion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposancion[".printFriendly"] = true;
}



$tdatatiposancion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposancion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposancion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposancion[".isUseAjaxSuggest"] = true;



												

$tdatatiposancion[".ajaxCodeSnippetAdded"] = false;

$tdatatiposancion[".buttonsAdded"] = false;

$tdatatiposancion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposancion[".isUseTimeForSearch"] = false;


$tdatatiposancion[".badgeColor"] = "E67349";


$tdatatiposancion[".allSearchFields"] = array();
$tdatatiposancion[".filterFields"] = array();
$tdatatiposancion[".requiredSearchFields"] = array();

$tdatatiposancion[".googleLikeFields"] = array();
$tdatatiposancion[".googleLikeFields"][] = "IdTipo";
$tdatatiposancion[".googleLikeFields"][] = "Nombre";



$tdatatiposancion[".tableType"] = "list";

$tdatatiposancion[".printerPageOrientation"] = 0;
$tdatatiposancion[".nPrinterPageScale"] = 100;

$tdatatiposancion[".nPrinterSplitRecords"] = 40;

$tdatatiposancion[".geocodingEnabled"] = false;










$tdatatiposancion[".pageSize"] = 20;

$tdatatiposancion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiposancion[".strOrderBy"] = $tstrOrderBy;

$tdatatiposancion[".orderindexes"] = array();


$tdatatiposancion[".sqlHead"] = "SELECT IdTipo,  	Nombre";
$tdatatiposancion[".sqlFrom"] = "FROM dbo.TipoSancion";
$tdatatiposancion[".sqlWhereExpr"] = "";
$tdatatiposancion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposancion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposancion[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposancion[".highlightSearchResults"] = true;

$tableKeystiposancion = array();
$tableKeystiposancion[] = "IdTipo";
$tdatatiposancion[".Keys"] = $tableKeystiposancion;


$tdatatiposancion[".hideMobileList"] = array();




//	IdTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdTipo";
	$fdata["GoodName"] = "IdTipo";
	$fdata["ownerTable"] = "dbo.TipoSancion";
	$fdata["Label"] = GetFieldLabel("dbo_TipoSancion","IdTipo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdTipo";

		$fdata["sourceSingle"] = "IdTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdTipo";

	
	
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


	$tdatatiposancion["IdTipo"] = $fdata;
		$tdatatiposancion[".searchableFields"][] = "IdTipo";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "dbo.TipoSancion";
	$fdata["Label"] = GetFieldLabel("dbo_TipoSancion","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["sourceSingle"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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


	$tdatatiposancion["Nombre"] = $fdata;
		$tdatatiposancion[".searchableFields"][] = "Nombre";


$tables_data["dbo.TipoSancion"]=&$tdatatiposancion;
$field_labels["dbo_TipoSancion"] = &$fieldLabelstiposancion;
$fieldToolTips["dbo_TipoSancion"] = &$fieldToolTipstiposancion;
$placeHolders["dbo_TipoSancion"] = &$placeHolderstiposancion;
$page_titles["dbo_TipoSancion"] = &$pageTitlestiposancion;


changeTextControlsToDate( "dbo.TipoSancion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.TipoSancion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.TipoSancion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposancion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdTipo,  	Nombre";
$proto0["m_strFrom"] = "FROM dbo.TipoSancion";
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
	"m_strName" => "IdTipo",
	"m_strTable" => "dbo.TipoSancion",
	"m_srcTableName" => "dbo.TipoSancion"
));

$proto6["m_sql"] = "IdTipo";
$proto6["m_srcTableName"] = "dbo.TipoSancion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "dbo.TipoSancion",
	"m_srcTableName" => "dbo.TipoSancion"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "dbo.TipoSancion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.TipoSancion";
$proto11["m_srcTableName"] = "dbo.TipoSancion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdTipo";
$proto11["m_columns"][] = "Nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.TipoSancion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.TipoSancion";
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
$proto0["m_srcTableName"]="dbo.TipoSancion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposancion = createSqlQuery_tiposancion();


	
		;

		

$tdatatiposancion[".sqlquery"] = $queryData_tiposancion;



$tdatatiposancion[".hasEvents"] = false;

?>