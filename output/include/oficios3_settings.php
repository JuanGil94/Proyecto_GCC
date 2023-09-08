<?php
$tdataoficios3 = array();
$tdataoficios3[".searchableFields"] = array();
$tdataoficios3[".ShortName"] = "oficios3";
$tdataoficios3[".OwnerID"] = "";
$tdataoficios3[".OriginalTable"] = "dbo.Oficios";


$tdataoficios3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoficios3[".originalPagesByType"] = $tdataoficios3[".pagesByType"];
$tdataoficios3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoficios3[".originalPages"] = $tdataoficios3[".pages"];
$tdataoficios3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoficios3[".originalDefaultPages"] = $tdataoficios3[".defaultPages"];

//	field labels
$fieldLabelsoficios3 = array();
$fieldToolTipsoficios3 = array();
$pageTitlesoficios3 = array();
$placeHoldersoficios3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoficios3["Spanish"] = array();
	$fieldToolTipsoficios3["Spanish"] = array();
	$placeHoldersoficios3["Spanish"] = array();
	$pageTitlesoficios3["Spanish"] = array();
	$fieldLabelsoficios3["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsoficios3["Spanish"]["OficioId"] = "";
	$placeHoldersoficios3["Spanish"]["OficioId"] = "";
	$fieldLabelsoficios3["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsoficios3["Spanish"]["Oficio"] = "";
	$placeHoldersoficios3["Spanish"]["Oficio"] = "";
	if (count($fieldToolTipsoficios3["Spanish"]))
		$tdataoficios3[".isUseToolTips"] = true;
}


	$tdataoficios3[".NCSearch"] = true;



$tdataoficios3[".shortTableName"] = "oficios3";
$tdataoficios3[".nSecOptions"] = 0;

$tdataoficios3[".mainTableOwnerID"] = "";
$tdataoficios3[".entityType"] = 1;
$tdataoficios3[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoficios3[".strOriginalTableName"] = "dbo.Oficios";

	



$tdataoficios3[".showAddInPopup"] = false;

$tdataoficios3[".showEditInPopup"] = false;

$tdataoficios3[".showViewInPopup"] = false;

$tdataoficios3[".listAjax"] = false;
//	temporary
//$tdataoficios3[".listAjax"] = false;

	$tdataoficios3[".audit"] = true;

	$tdataoficios3[".locking"] = false;


$pages = $tdataoficios3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoficios3[".edit"] = true;
	$tdataoficios3[".afterEditAction"] = 1;
	$tdataoficios3[".closePopupAfterEdit"] = 1;
	$tdataoficios3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoficios3[".add"] = true;
$tdataoficios3[".afterAddAction"] = 1;
$tdataoficios3[".closePopupAfterAdd"] = 1;
$tdataoficios3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoficios3[".list"] = true;
}



$tdataoficios3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoficios3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoficios3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoficios3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoficios3[".printFriendly"] = true;
}



$tdataoficios3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoficios3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoficios3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoficios3[".isUseAjaxSuggest"] = true;



															

$tdataoficios3[".ajaxCodeSnippetAdded"] = false;

$tdataoficios3[".buttonsAdded"] = false;

$tdataoficios3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoficios3[".isUseTimeForSearch"] = false;


$tdataoficios3[".badgeColor"] = "BC8F8F";


$tdataoficios3[".allSearchFields"] = array();
$tdataoficios3[".filterFields"] = array();
$tdataoficios3[".requiredSearchFields"] = array();

$tdataoficios3[".googleLikeFields"] = array();
$tdataoficios3[".googleLikeFields"][] = "OficioId";
$tdataoficios3[".googleLikeFields"][] = "Oficio";



$tdataoficios3[".tableType"] = "list";

$tdataoficios3[".printerPageOrientation"] = 0;
$tdataoficios3[".nPrinterPageScale"] = 100;

$tdataoficios3[".nPrinterSplitRecords"] = 40;

$tdataoficios3[".geocodingEnabled"] = false;










$tdataoficios3[".pageSize"] = 20;

$tdataoficios3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoficios3[".strOrderBy"] = $tstrOrderBy;

$tdataoficios3[".orderindexes"] = array();


$tdataoficios3[".sqlHead"] = "SELECT OficioId,  Oficio";
$tdataoficios3[".sqlFrom"] = "FROM dbo.Oficios";
$tdataoficios3[".sqlWhereExpr"] = "";
$tdataoficios3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoficios3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoficios3[".arrGroupsPerPage"] = $arrGPP;

$tdataoficios3[".highlightSearchResults"] = true;

$tableKeysoficios3 = array();
$tdataoficios3[".Keys"] = $tableKeysoficios3;


$tdataoficios3[".hideMobileList"] = array();




//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios3","OficioId");
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


	$tdataoficios3["OficioId"] = $fdata;
		$tdataoficios3[".searchableFields"][] = "OficioId";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios3","Oficio");
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


	$tdataoficios3["Oficio"] = $fdata;
		$tdataoficios3[".searchableFields"][] = "Oficio";


$tables_data["dbo.Oficios3"]=&$tdataoficios3;
$field_labels["dbo_Oficios3"] = &$fieldLabelsoficios3;
$fieldToolTips["dbo_Oficios3"] = &$fieldToolTipsoficios3;
$placeHolders["dbo_Oficios3"] = &$placeHoldersoficios3;
$page_titles["dbo_Oficios3"] = &$pageTitlesoficios3;


changeTextControlsToDate( "dbo.Oficios3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_oficios3()
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
	"m_srcTableName" => "dbo.Oficios3"
));

$proto6["m_sql"] = "OficioId";
$proto6["m_srcTableName"] = "dbo.Oficios3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios3"
));

$proto8["m_sql"] = "Oficio";
$proto8["m_srcTableName"] = "dbo.Oficios3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Oficios";
$proto11["m_srcTableName"] = "dbo.Oficios3";
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
$proto10["m_srcTableName"] = "dbo.Oficios3";
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
$proto0["m_srcTableName"]="dbo.Oficios3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oficios3 = createSqlQuery_oficios3();


	
		;

		

$tdataoficios3[".sqlquery"] = $queryData_oficios3;



$tdataoficios3[".hasEvents"] = false;

?>