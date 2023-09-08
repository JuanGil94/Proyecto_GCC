<?php
$tdatadbo_oficios1 = array();
$tdatadbo_oficios1[".searchableFields"] = array();
$tdatadbo_oficios1[".ShortName"] = "dbo_oficios1";
$tdatadbo_oficios1[".OwnerID"] = "";
$tdatadbo_oficios1[".OriginalTable"] = "dbo.Oficios";


$tdatadbo_oficios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_oficios1[".originalPagesByType"] = $tdatadbo_oficios1[".pagesByType"];
$tdatadbo_oficios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_oficios1[".originalPages"] = $tdatadbo_oficios1[".pages"];
$tdatadbo_oficios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_oficios1[".originalDefaultPages"] = $tdatadbo_oficios1[".defaultPages"];

//	field labels
$fieldLabelsdbo_oficios1 = array();
$fieldToolTipsdbo_oficios1 = array();
$pageTitlesdbo_oficios1 = array();
$placeHoldersdbo_oficios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_oficios1["Spanish"] = array();
	$fieldToolTipsdbo_oficios1["Spanish"] = array();
	$placeHoldersdbo_oficios1["Spanish"] = array();
	$pageTitlesdbo_oficios1["Spanish"] = array();
	$fieldLabelsdbo_oficios1["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsdbo_oficios1["Spanish"]["OficioId"] = "";
	$placeHoldersdbo_oficios1["Spanish"]["OficioId"] = "";
	$fieldLabelsdbo_oficios1["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsdbo_oficios1["Spanish"]["Oficio"] = "";
	$placeHoldersdbo_oficios1["Spanish"]["Oficio"] = "";
	if (count($fieldToolTipsdbo_oficios1["Spanish"]))
		$tdatadbo_oficios1[".isUseToolTips"] = true;
}


	$tdatadbo_oficios1[".NCSearch"] = true;



$tdatadbo_oficios1[".shortTableName"] = "dbo_oficios1";
$tdatadbo_oficios1[".nSecOptions"] = 0;

$tdatadbo_oficios1[".mainTableOwnerID"] = "";
$tdatadbo_oficios1[".entityType"] = 1;
$tdatadbo_oficios1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_oficios1[".strOriginalTableName"] = "dbo.Oficios";

	



$tdatadbo_oficios1[".showAddInPopup"] = false;

$tdatadbo_oficios1[".showEditInPopup"] = false;

$tdatadbo_oficios1[".showViewInPopup"] = false;

$tdatadbo_oficios1[".listAjax"] = false;
//	temporary
//$tdatadbo_oficios1[".listAjax"] = false;

	$tdatadbo_oficios1[".audit"] = true;

	$tdatadbo_oficios1[".locking"] = false;


$pages = $tdatadbo_oficios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_oficios1[".edit"] = true;
	$tdatadbo_oficios1[".afterEditAction"] = 1;
	$tdatadbo_oficios1[".closePopupAfterEdit"] = 1;
	$tdatadbo_oficios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_oficios1[".add"] = true;
$tdatadbo_oficios1[".afterAddAction"] = 1;
$tdatadbo_oficios1[".closePopupAfterAdd"] = 1;
$tdatadbo_oficios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_oficios1[".list"] = true;
}



$tdatadbo_oficios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_oficios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_oficios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_oficios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_oficios1[".printFriendly"] = true;
}



$tdatadbo_oficios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_oficios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_oficios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_oficios1[".isUseAjaxSuggest"] = true;



															

$tdatadbo_oficios1[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_oficios1[".buttonsAdded"] = false;

$tdatadbo_oficios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_oficios1[".isUseTimeForSearch"] = false;


$tdatadbo_oficios1[".badgeColor"] = "BC8F8F";


$tdatadbo_oficios1[".allSearchFields"] = array();
$tdatadbo_oficios1[".filterFields"] = array();
$tdatadbo_oficios1[".requiredSearchFields"] = array();

$tdatadbo_oficios1[".googleLikeFields"] = array();
$tdatadbo_oficios1[".googleLikeFields"][] = "OficioId";
$tdatadbo_oficios1[".googleLikeFields"][] = "Oficio";



$tdatadbo_oficios1[".tableType"] = "list";

$tdatadbo_oficios1[".printerPageOrientation"] = 0;
$tdatadbo_oficios1[".nPrinterPageScale"] = 100;

$tdatadbo_oficios1[".nPrinterSplitRecords"] = 40;

$tdatadbo_oficios1[".geocodingEnabled"] = false;










$tdatadbo_oficios1[".pageSize"] = 20;

$tdatadbo_oficios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadbo_oficios1[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_oficios1[".orderindexes"] = array();


$tdatadbo_oficios1[".sqlHead"] = "SELECT OficioId,  Oficio";
$tdatadbo_oficios1[".sqlFrom"] = "FROM dbo.Oficios";
$tdatadbo_oficios1[".sqlWhereExpr"] = "";
$tdatadbo_oficios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_oficios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_oficios1[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_oficios1[".highlightSearchResults"] = true;

$tableKeysdbo_oficios1 = array();
$tdatadbo_oficios1[".Keys"] = $tableKeysdbo_oficios1;


$tdatadbo_oficios1[".hideMobileList"] = array();




//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","OficioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioId";

	
	
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


	$tdatadbo_oficios1["OficioId"] = $fdata;
		$tdatadbo_oficios1[".searchableFields"][] = "OficioId";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Oficio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficio";

		$fdata["sourceSingle"] = "Oficio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficio";

	
	
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


	$tdatadbo_oficios1["Oficio"] = $fdata;
		$tdatadbo_oficios1[".searchableFields"][] = "Oficio";


$tables_data["dbo.Oficios1"]=&$tdatadbo_oficios1;
$field_labels["dbo_Oficios1"] = &$fieldLabelsdbo_oficios1;
$fieldToolTips["dbo_Oficios1"] = &$fieldToolTipsdbo_oficios1;
$placeHolders["dbo_Oficios1"] = &$placeHoldersdbo_oficios1;
$page_titles["dbo_Oficios1"] = &$pageTitlesdbo_oficios1;


changeTextControlsToDate( "dbo.Oficios1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_oficios1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OficioId,  Oficio";
$proto0["m_strFrom"] = "FROM dbo.Oficios";
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
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto6["m_sql"] = "OficioId";
$proto6["m_srcTableName"] = "dbo.Oficios1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto8["m_sql"] = "Oficio";
$proto8["m_srcTableName"] = "dbo.Oficios1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Oficios";
$proto11["m_srcTableName"] = "dbo.Oficios1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OficioId";
$proto11["m_columns"][] = "Oficio";
$proto11["m_columns"][] = "Archivo";
$proto11["m_columns"][] = "Activo";
$proto11["m_columns"][] = "ActuacionId";
$proto11["m_columns"][] = "OficioIdRequisito";
$proto11["m_columns"][] = "Direcciones";
$proto11["m_columns"][] = "Edicion";
$proto11["m_columns"][] = "Abierto";
$proto11["m_columns"][] = "Sigobius";
$proto11["m_columns"][] = "Devolucion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.Oficios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Oficios1";
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
$proto0["m_srcTableName"]="dbo.Oficios1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_oficios1 = createSqlQuery_dbo_oficios1();


	
		;

		

$tdatadbo_oficios1[".sqlquery"] = $queryData_dbo_oficios1;



$tdatadbo_oficios1[".hasEvents"] = false;

?>