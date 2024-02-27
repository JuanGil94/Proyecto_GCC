<?php
$tdatadespachos1 = array();
$tdatadespachos1[".searchableFields"] = array();
$tdatadespachos1[".ShortName"] = "despachos1";
$tdatadespachos1[".OwnerID"] = "";
$tdatadespachos1[".OriginalTable"] = "dbo.Despachos";


$tdatadespachos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadespachos1[".originalPagesByType"] = $tdatadespachos1[".pagesByType"];
$tdatadespachos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadespachos1[".originalPages"] = $tdatadespachos1[".pages"];
$tdatadespachos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadespachos1[".originalDefaultPages"] = $tdatadespachos1[".defaultPages"];

//	field labels
$fieldLabelsdespachos1 = array();
$fieldToolTipsdespachos1 = array();
$pageTitlesdespachos1 = array();
$placeHoldersdespachos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespachos1["Spanish"] = array();
	$fieldToolTipsdespachos1["Spanish"] = array();
	$placeHoldersdespachos1["Spanish"] = array();
	$pageTitlesdespachos1["Spanish"] = array();
	$fieldLabelsdespachos1["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdespachos1["Spanish"]["DespachoId"] = "";
	$placeHoldersdespachos1["Spanish"]["DespachoId"] = "";
	$fieldLabelsdespachos1["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdespachos1["Spanish"]["Codigo"] = "";
	$placeHoldersdespachos1["Spanish"]["Codigo"] = "";
	$fieldLabelsdespachos1["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsdespachos1["Spanish"]["Despacho"] = "";
	$placeHoldersdespachos1["Spanish"]["Despacho"] = "";
	$fieldLabelsdespachos1["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsdespachos1["Spanish"]["SeccionalId"] = "";
	$placeHoldersdespachos1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsdespachos1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsdespachos1["Spanish"]["Seccional"] = "";
	$placeHoldersdespachos1["Spanish"]["Seccional"] = "";
	if (count($fieldToolTipsdespachos1["Spanish"]))
		$tdatadespachos1[".isUseToolTips"] = true;
}


	$tdatadespachos1[".NCSearch"] = true;



$tdatadespachos1[".shortTableName"] = "despachos1";
$tdatadespachos1[".nSecOptions"] = 0;

$tdatadespachos1[".mainTableOwnerID"] = "";
$tdatadespachos1[".entityType"] = 1;
$tdatadespachos1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadespachos1[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadespachos1[".showAddInPopup"] = false;

$tdatadespachos1[".showEditInPopup"] = false;

$tdatadespachos1[".showViewInPopup"] = false;

$tdatadespachos1[".listAjax"] = false;
//	temporary
//$tdatadespachos1[".listAjax"] = false;

	$tdatadespachos1[".audit"] = true;

	$tdatadespachos1[".locking"] = false;


$pages = $tdatadespachos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespachos1[".edit"] = true;
	$tdatadespachos1[".afterEditAction"] = 1;
	$tdatadespachos1[".closePopupAfterEdit"] = 1;
	$tdatadespachos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespachos1[".add"] = true;
$tdatadespachos1[".afterAddAction"] = 1;
$tdatadespachos1[".closePopupAfterAdd"] = 1;
$tdatadespachos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespachos1[".list"] = true;
}



$tdatadespachos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespachos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespachos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespachos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespachos1[".printFriendly"] = true;
}



$tdatadespachos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespachos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespachos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespachos1[".isUseAjaxSuggest"] = true;



																																																			

$tdatadespachos1[".ajaxCodeSnippetAdded"] = false;

$tdatadespachos1[".buttonsAdded"] = false;

$tdatadespachos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespachos1[".isUseTimeForSearch"] = false;


$tdatadespachos1[".badgeColor"] = "6DA5C8";


$tdatadespachos1[".allSearchFields"] = array();
$tdatadespachos1[".filterFields"] = array();
$tdatadespachos1[".requiredSearchFields"] = array();

$tdatadespachos1[".googleLikeFields"] = array();
$tdatadespachos1[".googleLikeFields"][] = "DespachoId";
$tdatadespachos1[".googleLikeFields"][] = "Codigo";
$tdatadespachos1[".googleLikeFields"][] = "Despacho";
$tdatadespachos1[".googleLikeFields"][] = "SeccionalId";
$tdatadespachos1[".googleLikeFields"][] = "Seccional";



$tdatadespachos1[".tableType"] = "list";

$tdatadespachos1[".printerPageOrientation"] = 0;
$tdatadespachos1[".nPrinterPageScale"] = 100;

$tdatadespachos1[".nPrinterSplitRecords"] = 40;

$tdatadespachos1[".geocodingEnabled"] = false;





$tdatadespachos1[".isResizeColumns"] = true;





$tdatadespachos1[".pageSize"] = 20;

$tdatadespachos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadespachos1[".strOrderBy"] = $tstrOrderBy;

$tdatadespachos1[".orderindexes"] = array();


$tdatadespachos1[".sqlHead"] = "SELECT D.DespachoId,D.Codigo,D.Despacho,S.SeccionalId,S.Seccional";
$tdatadespachos1[".sqlFrom"] = "FROM dbo.Despachos AS D  INNER JOIN dbo.Seccionales S ON S.CiudadId=D.CiudadId";
$tdatadespachos1[".sqlWhereExpr"] = "";
$tdatadespachos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespachos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespachos1[".arrGroupsPerPage"] = $arrGPP;

$tdatadespachos1[".highlightSearchResults"] = true;

$tableKeysdespachos1 = array();
$tableKeysdespachos1[] = "DespachoId";
$tdatadespachos1[".Keys"] = $tableKeysdespachos1;


$tdatadespachos1[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos1","DespachoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.DespachoId";

	
	
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


	$tdatadespachos1["DespachoId"] = $fdata;
		$tdatadespachos1[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos1","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatadespachos1["Codigo"] = $fdata;
		$tdatadespachos1[".searchableFields"][] = "Codigo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos1","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

		$fdata["sourceSingle"] = "Despacho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Despacho";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadespachos1["Despacho"] = $fdata;
		$tdatadespachos1[".searchableFields"][] = "Despacho";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos1","SeccionalId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SeccionalId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.SeccionalId";

	
	
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


	$tdatadespachos1["SeccionalId"] = $fdata;
		$tdatadespachos1[".searchableFields"][] = "SeccionalId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos1","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Seccional";

	
	
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


	$tdatadespachos1["Seccional"] = $fdata;
		$tdatadespachos1[".searchableFields"][] = "Seccional";


$tables_data["dbo.Despachos1"]=&$tdatadespachos1;
$field_labels["dbo_Despachos1"] = &$fieldLabelsdespachos1;
$fieldToolTips["dbo_Despachos1"] = &$fieldToolTipsdespachos1;
$placeHolders["dbo_Despachos1"] = &$placeHoldersdespachos1;
$page_titles["dbo_Despachos1"] = &$pageTitlesdespachos1;


changeTextControlsToDate( "dbo.Despachos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despachos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "D.DespachoId,D.Codigo,D.Despacho,S.SeccionalId,S.Seccional";
$proto0["m_strFrom"] = "FROM dbo.Despachos AS D  INNER JOIN dbo.Seccionales S ON S.CiudadId=D.CiudadId";
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
	"m_strName" => "DespachoId",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto6["m_sql"] = "D.DespachoId";
$proto6["m_srcTableName"] = "dbo.Despachos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto8["m_sql"] = "D.Codigo";
$proto8["m_srcTableName"] = "dbo.Despachos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto10["m_sql"] = "D.Despacho";
$proto10["m_srcTableName"] = "dbo.Despachos1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto12["m_sql"] = "S.SeccionalId";
$proto12["m_srcTableName"] = "dbo.Despachos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto14["m_sql"] = "S.Seccional";
$proto14["m_srcTableName"] = "dbo.Despachos1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Despachos";
$proto17["m_srcTableName"] = "dbo.Despachos1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "DespachoId";
$proto17["m_columns"][] = "Codigo";
$proto17["m_columns"][] = "Despacho";
$proto17["m_columns"][] = "CiudadId";
$proto17["m_columns"][] = "Especialidad";
$proto17["m_columns"][] = "Subespecialidad";
$proto17["m_columns"][] = "Activo";
$proto17["m_columns"][] = "Juez";
$proto17["m_columns"][] = "Correo";
$proto17["m_columns"][] = "Telefonos";
$proto17["m_columns"][] = "Direccion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Despachos AS D";
$proto16["m_alias"] = "D";
$proto16["m_srcTableName"] = "dbo.Despachos1";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Seccionales";
$proto21["m_srcTableName"] = "dbo.Despachos1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "SeccionalId";
$proto21["m_columns"][] = "Codigo";
$proto21["m_columns"][] = "Seccional";
$proto21["m_columns"][] = "NIT";
$proto21["m_columns"][] = "CiudadId";
$proto21["m_columns"][] = "PiePagina";
$proto21["m_columns"][] = "Sigobius";
$proto21["m_columns"][] = "Email";
$proto21["m_columns"][] = "Direccion";
$proto21["m_columns"][] = "Telefonos";
$proto21["m_columns"][] = "PCI";
$proto21["m_columns"][] = "Contador";
$proto21["m_columns"][] = "ContadorCargo";
$proto21["m_columns"][] = "Director";
$proto21["m_columns"][] = "DirectorCargo";
$proto21["m_columns"][] = "Abogado";
$proto21["m_columns"][] = "AbogadoCargo";
$proto21["m_columns"][] = "Formato";
$proto21["m_columns"][] = "Corporacion";
$proto21["m_columns"][] = "Unidad";
$proto21["m_columns"][] = "Oficina";
$proto21["m_columns"][] = "Serie";
$proto21["m_columns"][] = "Subserie";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN dbo.Seccionales S ON S.CiudadId=D.CiudadId";
$proto20["m_alias"] = "S";
$proto20["m_srcTableName"] = "dbo.Despachos1";
$proto22=array();
$proto22["m_sql"] = "S.CiudadId = D.CiudadId";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos1"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= D.CiudadId";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Despachos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despachos1 = createSqlQuery_despachos1();


	
		;

					

$tdatadespachos1[".sqlquery"] = $queryData_despachos1;



$tdatadespachos1[".hasEvents"] = false;

?>