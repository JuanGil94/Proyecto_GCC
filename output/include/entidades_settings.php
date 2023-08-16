<?php
$tdataentidades = array();
$tdataentidades[".searchableFields"] = array();
$tdataentidades[".ShortName"] = "entidades";
$tdataentidades[".OwnerID"] = "";
$tdataentidades[".OriginalTable"] = "dbo.Entidades";


$tdataentidades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataentidades[".originalPagesByType"] = $tdataentidades[".pagesByType"];
$tdataentidades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataentidades[".originalPages"] = $tdataentidades[".pages"];
$tdataentidades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataentidades[".originalDefaultPages"] = $tdataentidades[".defaultPages"];

//	field labels
$fieldLabelsentidades = array();
$fieldToolTipsentidades = array();
$pageTitlesentidades = array();
$placeHoldersentidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsentidades["Spanish"] = array();
	$fieldToolTipsentidades["Spanish"] = array();
	$placeHoldersentidades["Spanish"] = array();
	$pageTitlesentidades["Spanish"] = array();
	$fieldLabelsentidades["Spanish"]["EntidadId"] = "Entidad Id";
	$fieldToolTipsentidades["Spanish"]["EntidadId"] = "";
	$placeHoldersentidades["Spanish"]["EntidadId"] = "";
	$fieldLabelsentidades["Spanish"]["Entidad"] = "Entidad";
	$fieldToolTipsentidades["Spanish"]["Entidad"] = "";
	$placeHoldersentidades["Spanish"]["Entidad"] = "";
	if (count($fieldToolTipsentidades["Spanish"]))
		$tdataentidades[".isUseToolTips"] = true;
}


	$tdataentidades[".NCSearch"] = true;



$tdataentidades[".shortTableName"] = "entidades";
$tdataentidades[".nSecOptions"] = 0;

$tdataentidades[".mainTableOwnerID"] = "";
$tdataentidades[".entityType"] = 0;
$tdataentidades[".connId"] = "GCC_at_S00001_CCAD01";


$tdataentidades[".strOriginalTableName"] = "dbo.Entidades";

	



$tdataentidades[".showAddInPopup"] = false;

$tdataentidades[".showEditInPopup"] = false;

$tdataentidades[".showViewInPopup"] = false;

$tdataentidades[".listAjax"] = false;
//	temporary
//$tdataentidades[".listAjax"] = false;

	$tdataentidades[".audit"] = true;

	$tdataentidades[".locking"] = false;


$pages = $tdataentidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataentidades[".edit"] = true;
	$tdataentidades[".afterEditAction"] = 1;
	$tdataentidades[".closePopupAfterEdit"] = 1;
	$tdataentidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataentidades[".add"] = true;
$tdataentidades[".afterAddAction"] = 1;
$tdataentidades[".closePopupAfterAdd"] = 1;
$tdataentidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataentidades[".list"] = true;
}



$tdataentidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataentidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataentidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataentidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataentidades[".printFriendly"] = true;
}



$tdataentidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataentidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataentidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataentidades[".isUseAjaxSuggest"] = true;





$tdataentidades[".ajaxCodeSnippetAdded"] = false;

$tdataentidades[".buttonsAdded"] = false;

$tdataentidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataentidades[".isUseTimeForSearch"] = false;


$tdataentidades[".badgeColor"] = "4169E1";


$tdataentidades[".allSearchFields"] = array();
$tdataentidades[".filterFields"] = array();
$tdataentidades[".requiredSearchFields"] = array();

$tdataentidades[".googleLikeFields"] = array();
$tdataentidades[".googleLikeFields"][] = "EntidadId";
$tdataentidades[".googleLikeFields"][] = "Entidad";



$tdataentidades[".tableType"] = "list";

$tdataentidades[".printerPageOrientation"] = 0;
$tdataentidades[".nPrinterPageScale"] = 100;

$tdataentidades[".nPrinterSplitRecords"] = 40;

$tdataentidades[".geocodingEnabled"] = false;










$tdataentidades[".pageSize"] = 20;

$tdataentidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataentidades[".strOrderBy"] = $tstrOrderBy;

$tdataentidades[".orderindexes"] = array();


$tdataentidades[".sqlHead"] = "SELECT EntidadId,  	Entidad";
$tdataentidades[".sqlFrom"] = "FROM dbo.Entidades";
$tdataentidades[".sqlWhereExpr"] = "";
$tdataentidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataentidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataentidades[".arrGroupsPerPage"] = $arrGPP;

$tdataentidades[".highlightSearchResults"] = true;

$tableKeysentidades = array();
$tableKeysentidades[] = "EntidadId";
$tdataentidades[".Keys"] = $tableKeysentidades;


$tdataentidades[".hideMobileList"] = array();




//	EntidadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EntidadId";
	$fdata["GoodName"] = "EntidadId";
	$fdata["ownerTable"] = "dbo.Entidades";
	$fdata["Label"] = GetFieldLabel("dbo_Entidades","EntidadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EntidadId";

		$fdata["sourceSingle"] = "EntidadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EntidadId";

	
	
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


	$tdataentidades["EntidadId"] = $fdata;
		$tdataentidades[".searchableFields"][] = "EntidadId";
//	Entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Entidad";
	$fdata["GoodName"] = "Entidad";
	$fdata["ownerTable"] = "dbo.Entidades";
	$fdata["Label"] = GetFieldLabel("dbo_Entidades","Entidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entidad";

		$fdata["sourceSingle"] = "Entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Entidad";

	
	
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


	$tdataentidades["Entidad"] = $fdata;
		$tdataentidades[".searchableFields"][] = "Entidad";


$tables_data["dbo.Entidades"]=&$tdataentidades;
$field_labels["dbo_Entidades"] = &$fieldLabelsentidades;
$fieldToolTips["dbo_Entidades"] = &$fieldToolTipsentidades;
$placeHolders["dbo_Entidades"] = &$placeHoldersentidades;
$page_titles["dbo_Entidades"] = &$pageTitlesentidades;


changeTextControlsToDate( "dbo.Entidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Entidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Entidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_entidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EntidadId,  	Entidad";
$proto0["m_strFrom"] = "FROM dbo.Entidades";
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
	"m_strName" => "EntidadId",
	"m_strTable" => "dbo.Entidades",
	"m_srcTableName" => "dbo.Entidades"
));

$proto6["m_sql"] = "EntidadId";
$proto6["m_srcTableName"] = "dbo.Entidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad",
	"m_strTable" => "dbo.Entidades",
	"m_srcTableName" => "dbo.Entidades"
));

$proto8["m_sql"] = "Entidad";
$proto8["m_srcTableName"] = "dbo.Entidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Entidades";
$proto11["m_srcTableName"] = "dbo.Entidades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EntidadId";
$proto11["m_columns"][] = "Entidad";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Entidades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Entidades";
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
$proto0["m_srcTableName"]="dbo.Entidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_entidades = createSqlQuery_entidades();


	
		;

		

$tdataentidades[".sqlquery"] = $queryData_entidades;



$tdataentidades[".hasEvents"] = false;

?>