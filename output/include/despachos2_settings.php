<?php
$tdatadespachos2 = array();
$tdatadespachos2[".searchableFields"] = array();
$tdatadespachos2[".ShortName"] = "despachos2";
$tdatadespachos2[".OwnerID"] = "";
$tdatadespachos2[".OriginalTable"] = "dbo.Despachos";


$tdatadespachos2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadespachos2[".originalPagesByType"] = $tdatadespachos2[".pagesByType"];
$tdatadespachos2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadespachos2[".originalPages"] = $tdatadespachos2[".pages"];
$tdatadespachos2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadespachos2[".originalDefaultPages"] = $tdatadespachos2[".defaultPages"];

//	field labels
$fieldLabelsdespachos2 = array();
$fieldToolTipsdespachos2 = array();
$pageTitlesdespachos2 = array();
$placeHoldersdespachos2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespachos2["Spanish"] = array();
	$fieldToolTipsdespachos2["Spanish"] = array();
	$placeHoldersdespachos2["Spanish"] = array();
	$pageTitlesdespachos2["Spanish"] = array();
	$fieldLabelsdespachos2["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdespachos2["Spanish"]["DespachoId"] = "";
	$placeHoldersdespachos2["Spanish"]["DespachoId"] = "";
	$fieldLabelsdespachos2["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdespachos2["Spanish"]["Codigo"] = "";
	$placeHoldersdespachos2["Spanish"]["Codigo"] = "";
	$fieldLabelsdespachos2["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsdespachos2["Spanish"]["Despacho"] = "";
	$placeHoldersdespachos2["Spanish"]["Despacho"] = "";
	$fieldLabelsdespachos2["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsdespachos2["Spanish"]["SeccionalId"] = "";
	$placeHoldersdespachos2["Spanish"]["SeccionalId"] = "";
	$fieldLabelsdespachos2["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsdespachos2["Spanish"]["Seccional"] = "";
	$placeHoldersdespachos2["Spanish"]["Seccional"] = "";
	if (count($fieldToolTipsdespachos2["Spanish"]))
		$tdatadespachos2[".isUseToolTips"] = true;
}


	$tdatadespachos2[".NCSearch"] = true;



$tdatadespachos2[".shortTableName"] = "despachos2";
$tdatadespachos2[".nSecOptions"] = 0;

$tdatadespachos2[".mainTableOwnerID"] = "";
$tdatadespachos2[".entityType"] = 1;
$tdatadespachos2[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadespachos2[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadespachos2[".showAddInPopup"] = false;

$tdatadespachos2[".showEditInPopup"] = false;

$tdatadespachos2[".showViewInPopup"] = false;

$tdatadespachos2[".listAjax"] = false;
//	temporary
//$tdatadespachos2[".listAjax"] = false;

	$tdatadespachos2[".audit"] = true;

	$tdatadespachos2[".locking"] = false;


$pages = $tdatadespachos2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespachos2[".edit"] = true;
	$tdatadespachos2[".afterEditAction"] = 1;
	$tdatadespachos2[".closePopupAfterEdit"] = 1;
	$tdatadespachos2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespachos2[".add"] = true;
$tdatadespachos2[".afterAddAction"] = 1;
$tdatadespachos2[".closePopupAfterAdd"] = 1;
$tdatadespachos2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespachos2[".list"] = true;
}



$tdatadespachos2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespachos2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespachos2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespachos2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespachos2[".printFriendly"] = true;
}



$tdatadespachos2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespachos2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespachos2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespachos2[".isUseAjaxSuggest"] = true;



																																																																																																

$tdatadespachos2[".ajaxCodeSnippetAdded"] = false;

$tdatadespachos2[".buttonsAdded"] = false;

$tdatadespachos2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespachos2[".isUseTimeForSearch"] = false;


$tdatadespachos2[".badgeColor"] = "D2691E";


$tdatadespachos2[".allSearchFields"] = array();
$tdatadespachos2[".filterFields"] = array();
$tdatadespachos2[".requiredSearchFields"] = array();

$tdatadespachos2[".googleLikeFields"] = array();
$tdatadespachos2[".googleLikeFields"][] = "DespachoId";
$tdatadespachos2[".googleLikeFields"][] = "Codigo";
$tdatadespachos2[".googleLikeFields"][] = "Despacho";
$tdatadespachos2[".googleLikeFields"][] = "SeccionalId";
$tdatadespachos2[".googleLikeFields"][] = "Seccional";



$tdatadespachos2[".tableType"] = "list";

$tdatadespachos2[".printerPageOrientation"] = 0;
$tdatadespachos2[".nPrinterPageScale"] = 100;

$tdatadespachos2[".nPrinterSplitRecords"] = 40;

$tdatadespachos2[".geocodingEnabled"] = false;





$tdatadespachos2[".isResizeColumns"] = true;





$tdatadespachos2[".pageSize"] = 20;

$tdatadespachos2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadespachos2[".strOrderBy"] = $tstrOrderBy;

$tdatadespachos2[".orderindexes"] = array();


$tdatadespachos2[".sqlHead"] = "SELECT D.DespachoId,D.Codigo,D.Despacho,S.SeccionalId,S.Seccional";
$tdatadespachos2[".sqlFrom"] = "FROM dbo.Despachos AS D  INNER JOIN dbo.Seccionales S ON S.CiudadId=D.CiudadId";
$tdatadespachos2[".sqlWhereExpr"] = "";
$tdatadespachos2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespachos2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespachos2[".arrGroupsPerPage"] = $arrGPP;

$tdatadespachos2[".highlightSearchResults"] = true;

$tableKeysdespachos2 = array();
$tableKeysdespachos2[] = "DespachoId";
$tdatadespachos2[".Keys"] = $tableKeysdespachos2;


$tdatadespachos2[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos2","DespachoId");
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


	$tdatadespachos2["DespachoId"] = $fdata;
		$tdatadespachos2[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos2","Codigo");
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


	$tdatadespachos2["Codigo"] = $fdata;
		$tdatadespachos2[".searchableFields"][] = "Codigo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos2","Despacho");
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


	$tdatadespachos2["Despacho"] = $fdata;
		$tdatadespachos2[".searchableFields"][] = "Despacho";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos2","SeccionalId");
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


	$tdatadespachos2["SeccionalId"] = $fdata;
		$tdatadespachos2[".searchableFields"][] = "SeccionalId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos2","Seccional");
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


	$tdatadespachos2["Seccional"] = $fdata;
		$tdatadespachos2[".searchableFields"][] = "Seccional";


$tables_data["dbo.Despachos2"]=&$tdatadespachos2;
$field_labels["dbo_Despachos2"] = &$fieldLabelsdespachos2;
$fieldToolTips["dbo_Despachos2"] = &$fieldToolTipsdespachos2;
$placeHolders["dbo_Despachos2"] = &$placeHoldersdespachos2;
$page_titles["dbo_Despachos2"] = &$pageTitlesdespachos2;


changeTextControlsToDate( "dbo.Despachos2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despachos2()
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
	"m_srcTableName" => "dbo.Despachos2"
));

$proto6["m_sql"] = "D.DespachoId";
$proto6["m_srcTableName"] = "dbo.Despachos2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos2"
));

$proto8["m_sql"] = "D.Codigo";
$proto8["m_srcTableName"] = "dbo.Despachos2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos2"
));

$proto10["m_sql"] = "D.Despacho";
$proto10["m_srcTableName"] = "dbo.Despachos2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos2"
));

$proto12["m_sql"] = "S.SeccionalId";
$proto12["m_srcTableName"] = "dbo.Despachos2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos2"
));

$proto14["m_sql"] = "S.Seccional";
$proto14["m_srcTableName"] = "dbo.Despachos2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Despachos";
$proto17["m_srcTableName"] = "dbo.Despachos2";
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
$proto16["m_srcTableName"] = "dbo.Despachos2";
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
$proto21["m_srcTableName"] = "dbo.Despachos2";
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
$proto20["m_srcTableName"] = "dbo.Despachos2";
$proto22=array();
$proto22["m_sql"] = "S.CiudadId = D.CiudadId";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos2"
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
$proto0["m_srcTableName"]="dbo.Despachos2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despachos2 = createSqlQuery_despachos2();


	
		;

					

$tdatadespachos2[".sqlquery"] = $queryData_despachos2;



$tdatadespachos2[".hasEvents"] = false;

?>