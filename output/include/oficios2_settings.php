<?php
$tdataoficios2 = array();
$tdataoficios2[".searchableFields"] = array();
$tdataoficios2[".ShortName"] = "oficios2";
$tdataoficios2[".OwnerID"] = "";
$tdataoficios2[".OriginalTable"] = "dbo.Oficios";


$tdataoficios2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoficios2[".originalPagesByType"] = $tdataoficios2[".pagesByType"];
$tdataoficios2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoficios2[".originalPages"] = $tdataoficios2[".pages"];
$tdataoficios2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoficios2[".originalDefaultPages"] = $tdataoficios2[".defaultPages"];

//	field labels
$fieldLabelsoficios2 = array();
$fieldToolTipsoficios2 = array();
$pageTitlesoficios2 = array();
$placeHoldersoficios2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoficios2["Spanish"] = array();
	$fieldToolTipsoficios2["Spanish"] = array();
	$placeHoldersoficios2["Spanish"] = array();
	$pageTitlesoficios2["Spanish"] = array();
	$fieldLabelsoficios2["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsoficios2["Spanish"]["Oficio"] = "";
	$placeHoldersoficios2["Spanish"]["Oficio"] = "";
	if (count($fieldToolTipsoficios2["Spanish"]))
		$tdataoficios2[".isUseToolTips"] = true;
}


	$tdataoficios2[".NCSearch"] = true;



$tdataoficios2[".shortTableName"] = "oficios2";
$tdataoficios2[".nSecOptions"] = 0;

$tdataoficios2[".mainTableOwnerID"] = "";
$tdataoficios2[".entityType"] = 1;
$tdataoficios2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoficios2[".strOriginalTableName"] = "dbo.Oficios";

	



$tdataoficios2[".showAddInPopup"] = false;

$tdataoficios2[".showEditInPopup"] = false;

$tdataoficios2[".showViewInPopup"] = false;

$tdataoficios2[".listAjax"] = false;
//	temporary
//$tdataoficios2[".listAjax"] = false;

	$tdataoficios2[".audit"] = true;

	$tdataoficios2[".locking"] = false;


$pages = $tdataoficios2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoficios2[".edit"] = true;
	$tdataoficios2[".afterEditAction"] = 1;
	$tdataoficios2[".closePopupAfterEdit"] = 1;
	$tdataoficios2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoficios2[".add"] = true;
$tdataoficios2[".afterAddAction"] = 1;
$tdataoficios2[".closePopupAfterAdd"] = 1;
$tdataoficios2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoficios2[".list"] = true;
}



$tdataoficios2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoficios2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoficios2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoficios2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoficios2[".printFriendly"] = true;
}



$tdataoficios2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoficios2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoficios2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoficios2[".isUseAjaxSuggest"] = true;



															

$tdataoficios2[".ajaxCodeSnippetAdded"] = false;

$tdataoficios2[".buttonsAdded"] = false;

$tdataoficios2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoficios2[".isUseTimeForSearch"] = false;


$tdataoficios2[".badgeColor"] = "6493EA";


$tdataoficios2[".allSearchFields"] = array();
$tdataoficios2[".filterFields"] = array();
$tdataoficios2[".requiredSearchFields"] = array();

$tdataoficios2[".googleLikeFields"] = array();
$tdataoficios2[".googleLikeFields"][] = "Oficio";



$tdataoficios2[".tableType"] = "list";

$tdataoficios2[".printerPageOrientation"] = 0;
$tdataoficios2[".nPrinterPageScale"] = 100;

$tdataoficios2[".nPrinterSplitRecords"] = 40;

$tdataoficios2[".geocodingEnabled"] = false;










$tdataoficios2[".pageSize"] = 20;

$tdataoficios2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoficios2[".strOrderBy"] = $tstrOrderBy;

$tdataoficios2[".orderindexes"] = array();


$tdataoficios2[".sqlHead"] = "SELECT Oficio";
$tdataoficios2[".sqlFrom"] = "FROM dbo.Oficios";
$tdataoficios2[".sqlWhereExpr"] = "";
$tdataoficios2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoficios2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoficios2[".arrGroupsPerPage"] = $arrGPP;

$tdataoficios2[".highlightSearchResults"] = true;

$tableKeysoficios2 = array();
$tdataoficios2[".Keys"] = $tableKeysoficios2;


$tdataoficios2[".hideMobileList"] = array();




//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios2","Oficio");
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


	$tdataoficios2["Oficio"] = $fdata;
		$tdataoficios2[".searchableFields"][] = "Oficio";


$tables_data["dbo.Oficios2"]=&$tdataoficios2;
$field_labels["dbo_Oficios2"] = &$fieldLabelsoficios2;
$fieldToolTips["dbo_Oficios2"] = &$fieldToolTipsoficios2;
$placeHolders["dbo_Oficios2"] = &$placeHoldersoficios2;
$page_titles["dbo_Oficios2"] = &$pageTitlesoficios2;


changeTextControlsToDate( "dbo.Oficios2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_oficios2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Oficio";
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
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios2"
));

$proto6["m_sql"] = "Oficio";
$proto6["m_srcTableName"] = "dbo.Oficios2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Oficios";
$proto9["m_srcTableName"] = "dbo.Oficios2";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "OficioId";
$proto9["m_columns"][] = "Oficio";
$proto9["m_columns"][] = "Archivo";
$proto9["m_columns"][] = "Activo";
$proto9["m_columns"][] = "ActuacionId";
$proto9["m_columns"][] = "OficioIdRequisito";
$proto9["m_columns"][] = "Direcciones";
$proto9["m_columns"][] = "Edicion";
$proto9["m_columns"][] = "Abierto";
$proto9["m_columns"][] = "Sigobius";
$proto9["m_columns"][] = "Devolucion";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Oficios";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Oficios2";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Oficios2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oficios2 = createSqlQuery_oficios2();


	
		;

	

$tdataoficios2[".sqlquery"] = $queryData_oficios2;



$tdataoficios2[".hasEvents"] = false;

?>