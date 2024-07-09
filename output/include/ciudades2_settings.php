<?php
$tdataciudades2 = array();
$tdataciudades2[".searchableFields"] = array();
$tdataciudades2[".ShortName"] = "ciudades2";
$tdataciudades2[".OwnerID"] = "";
$tdataciudades2[".OriginalTable"] = "dbo.Ciudades";


$tdataciudades2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades2[".originalPagesByType"] = $tdataciudades2[".pagesByType"];
$tdataciudades2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades2[".originalPages"] = $tdataciudades2[".pages"];
$tdataciudades2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades2[".originalDefaultPages"] = $tdataciudades2[".defaultPages"];

//	field labels
$fieldLabelsciudades2 = array();
$fieldToolTipsciudades2 = array();
$pageTitlesciudades2 = array();
$placeHoldersciudades2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades2["Spanish"] = array();
	$fieldToolTipsciudades2["Spanish"] = array();
	$placeHoldersciudades2["Spanish"] = array();
	$pageTitlesciudades2["Spanish"] = array();
	$fieldLabelsciudades2["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsciudades2["Spanish"]["CiudadId"] = "";
	$placeHoldersciudades2["Spanish"]["CiudadId"] = "";
	$fieldLabelsciudades2["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsciudades2["Spanish"]["Codigo"] = "";
	$placeHoldersciudades2["Spanish"]["Codigo"] = "";
	$fieldLabelsciudades2["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipsciudades2["Spanish"]["Ciudad"] = "";
	$placeHoldersciudades2["Spanish"]["Ciudad"] = "";
	$fieldLabelsciudades2["Spanish"]["DepartamentoId"] = "Departamento Id";
	$fieldToolTipsciudades2["Spanish"]["DepartamentoId"] = "";
	$placeHoldersciudades2["Spanish"]["DepartamentoId"] = "";
	if (count($fieldToolTipsciudades2["Spanish"]))
		$tdataciudades2[".isUseToolTips"] = true;
}


	$tdataciudades2[".NCSearch"] = true;



$tdataciudades2[".shortTableName"] = "ciudades2";
$tdataciudades2[".nSecOptions"] = 0;

$tdataciudades2[".mainTableOwnerID"] = "";
$tdataciudades2[".entityType"] = 1;
$tdataciudades2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataciudades2[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdataciudades2[".showAddInPopup"] = false;

$tdataciudades2[".showEditInPopup"] = false;

$tdataciudades2[".showViewInPopup"] = false;

$tdataciudades2[".listAjax"] = false;
//	temporary
//$tdataciudades2[".listAjax"] = false;

	$tdataciudades2[".audit"] = true;

	$tdataciudades2[".locking"] = false;


$pages = $tdataciudades2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades2[".edit"] = true;
	$tdataciudades2[".afterEditAction"] = 1;
	$tdataciudades2[".closePopupAfterEdit"] = 1;
	$tdataciudades2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades2[".add"] = true;
$tdataciudades2[".afterAddAction"] = 1;
$tdataciudades2[".closePopupAfterAdd"] = 1;
$tdataciudades2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades2[".list"] = true;
}



$tdataciudades2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades2[".printFriendly"] = true;
}



$tdataciudades2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades2[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataciudades2[".ajaxCodeSnippetAdded"] = false;

$tdataciudades2[".buttonsAdded"] = false;

$tdataciudades2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades2[".isUseTimeForSearch"] = false;


$tdataciudades2[".badgeColor"] = "00C2C5";


$tdataciudades2[".allSearchFields"] = array();
$tdataciudades2[".filterFields"] = array();
$tdataciudades2[".requiredSearchFields"] = array();

$tdataciudades2[".googleLikeFields"] = array();
$tdataciudades2[".googleLikeFields"][] = "CiudadId";
$tdataciudades2[".googleLikeFields"][] = "Codigo";
$tdataciudades2[".googleLikeFields"][] = "Ciudad";
$tdataciudades2[".googleLikeFields"][] = "DepartamentoId";



$tdataciudades2[".tableType"] = "list";

$tdataciudades2[".printerPageOrientation"] = 0;
$tdataciudades2[".nPrinterPageScale"] = 100;

$tdataciudades2[".nPrinterSplitRecords"] = 40;

$tdataciudades2[".geocodingEnabled"] = false;





$tdataciudades2[".isResizeColumns"] = true;





$tdataciudades2[".pageSize"] = 20;

$tdataciudades2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataciudades2[".strOrderBy"] = $tstrOrderBy;

$tdataciudades2[".orderindexes"] = array();


$tdataciudades2[".sqlHead"] = "SELECT CiudadId,  	Codigo,  	Ciudad,  	DepartamentoId";
$tdataciudades2[".sqlFrom"] = "FROM dbo.Ciudades";
$tdataciudades2[".sqlWhereExpr"] = "";
$tdataciudades2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades2[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades2[".highlightSearchResults"] = true;

$tableKeysciudades2 = array();
$tableKeysciudades2[] = "CiudadId";
$tdataciudades2[".Keys"] = $tableKeysciudades2;


$tdataciudades2[".hideMobileList"] = array();




//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades2","CiudadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CiudadId";

	
	
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


	$tdataciudades2["CiudadId"] = $fdata;
		$tdataciudades2[".searchableFields"][] = "CiudadId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades2","Codigo");
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataciudades2["Codigo"] = $fdata;
		$tdataciudades2[".searchableFields"][] = "Codigo";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades2","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

		$fdata["sourceSingle"] = "Ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ciudad";

	
	
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


	$tdataciudades2["Ciudad"] = $fdata;
		$tdataciudades2[".searchableFields"][] = "Ciudad";
//	DepartamentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoId";
	$fdata["GoodName"] = "DepartamentoId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades2","DepartamentoId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Departamentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DepartamentoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo + ' - ' + Departamento";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataciudades2["DepartamentoId"] = $fdata;
		$tdataciudades2[".searchableFields"][] = "DepartamentoId";


$tables_data["dbo.Ciudades2"]=&$tdataciudades2;
$field_labels["dbo_Ciudades2"] = &$fieldLabelsciudades2;
$fieldToolTips["dbo_Ciudades2"] = &$fieldToolTipsciudades2;
$placeHolders["dbo_Ciudades2"] = &$placeHoldersciudades2;
$page_titles["dbo_Ciudades2"] = &$pageTitlesciudades2;


changeTextControlsToDate( "dbo.Ciudades2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ciudades2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CiudadId,  	Codigo,  	Ciudad,  	DepartamentoId";
$proto0["m_strFrom"] = "FROM dbo.Ciudades";
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
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto6["m_sql"] = "CiudadId";
$proto6["m_srcTableName"] = "dbo.Ciudades2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Ciudades2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Ciudad",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto10["m_sql"] = "Ciudad";
$proto10["m_srcTableName"] = "dbo.Ciudades2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades2"
));

$proto12["m_sql"] = "DepartamentoId";
$proto12["m_srcTableName"] = "dbo.Ciudades2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.Ciudades";
$proto15["m_srcTableName"] = "dbo.Ciudades2";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CiudadId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "Ciudad";
$proto15["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.Ciudades";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.Ciudades2";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Ciudades2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades2 = createSqlQuery_ciudades2();


	
		;

				

$tdataciudades2[".sqlquery"] = $queryData_ciudades2;



$tdataciudades2[".hasEvents"] = false;

?>