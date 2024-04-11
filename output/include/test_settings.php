<?php
$tdatatest = array();
$tdatatest[".searchableFields"] = array();
$tdatatest[".ShortName"] = "test";
$tdatatest[".OwnerID"] = "";
$tdatatest[".OriginalTable"] = "dbo.Test";


$tdatatest[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatest[".originalPagesByType"] = $tdatatest[".pagesByType"];
$tdatatest[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatest[".originalPages"] = $tdatatest[".pages"];
$tdatatest[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatest[".originalDefaultPages"] = $tdatatest[".defaultPages"];

//	field labels
$fieldLabelstest = array();
$fieldToolTipstest = array();
$pageTitlestest = array();
$placeHolderstest = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstest["Spanish"] = array();
	$fieldToolTipstest["Spanish"] = array();
	$placeHolderstest["Spanish"] = array();
	$pageTitlestest["Spanish"] = array();
	$fieldLabelstest["Spanish"]["TestId"] = "Test Id";
	$fieldToolTipstest["Spanish"]["TestId"] = "";
	$placeHolderstest["Spanish"]["TestId"] = "";
	$fieldLabelstest["Spanish"]["Test"] = "Test";
	$fieldToolTipstest["Spanish"]["Test"] = "";
	$placeHolderstest["Spanish"]["Test"] = "";
	$fieldLabelstest["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipstest["Spanish"]["Nivel"] = "";
	$placeHolderstest["Spanish"]["Nivel"] = "";
	$fieldLabelstest["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstest["Spanish"]["Descripcion"] = "";
	$placeHolderstest["Spanish"]["Descripcion"] = "";
	$fieldLabelstest["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstest["Spanish"]["Porcentaje"] = "";
	$placeHolderstest["Spanish"]["Porcentaje"] = "";
	if (count($fieldToolTipstest["Spanish"]))
		$tdatatest[".isUseToolTips"] = true;
}


	$tdatatest[".NCSearch"] = true;



$tdatatest[".shortTableName"] = "test";
$tdatatest[".nSecOptions"] = 0;

$tdatatest[".mainTableOwnerID"] = "";
$tdatatest[".entityType"] = 0;
$tdatatest[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatest[".strOriginalTableName"] = "dbo.Test";

	



$tdatatest[".showAddInPopup"] = false;

$tdatatest[".showEditInPopup"] = false;

$tdatatest[".showViewInPopup"] = false;

$tdatatest[".listAjax"] = false;
//	temporary
//$tdatatest[".listAjax"] = false;

	$tdatatest[".audit"] = true;

	$tdatatest[".locking"] = false;


$pages = $tdatatest[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatest[".edit"] = true;
	$tdatatest[".afterEditAction"] = 1;
	$tdatatest[".closePopupAfterEdit"] = 1;
	$tdatatest[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatest[".add"] = true;
$tdatatest[".afterAddAction"] = 1;
$tdatatest[".closePopupAfterAdd"] = 1;
$tdatatest[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatest[".list"] = true;
}



$tdatatest[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatest[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatest[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatest[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatest[".printFriendly"] = true;
}



$tdatatest[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatest[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatest[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatest[".isUseAjaxSuggest"] = true;



																																																												

$tdatatest[".ajaxCodeSnippetAdded"] = false;

$tdatatest[".buttonsAdded"] = false;

$tdatatest[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest[".isUseTimeForSearch"] = false;


$tdatatest[".badgeColor"] = "E67349";


$tdatatest[".allSearchFields"] = array();
$tdatatest[".filterFields"] = array();
$tdatatest[".requiredSearchFields"] = array();

$tdatatest[".googleLikeFields"] = array();
$tdatatest[".googleLikeFields"][] = "TestId";
$tdatatest[".googleLikeFields"][] = "Test";
$tdatatest[".googleLikeFields"][] = "Nivel";
$tdatatest[".googleLikeFields"][] = "Descripcion";
$tdatatest[".googleLikeFields"][] = "Porcentaje";



$tdatatest[".tableType"] = "list";

$tdatatest[".printerPageOrientation"] = 0;
$tdatatest[".nPrinterPageScale"] = 100;

$tdatatest[".nPrinterSplitRecords"] = 40;

$tdatatest[".geocodingEnabled"] = false;





$tdatatest[".isResizeColumns"] = true;





$tdatatest[".pageSize"] = 20;

$tdatatest[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatest[".strOrderBy"] = $tstrOrderBy;

$tdatatest[".orderindexes"] = array();


$tdatatest[".sqlHead"] = "SELECT TestId,  	Test,  	Nivel,  	Descripcion,  	Porcentaje";
$tdatatest[".sqlFrom"] = "FROM dbo.Test";
$tdatatest[".sqlWhereExpr"] = "";
$tdatatest[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest[".arrGroupsPerPage"] = $arrGPP;

$tdatatest[".highlightSearchResults"] = true;

$tableKeystest = array();
$tableKeystest[] = "TestId";
$tdatatest[".Keys"] = $tableKeystest;


$tdatatest[".hideMobileList"] = array();




//	TestId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestId";
	$fdata["GoodName"] = "TestId";
	$fdata["ownerTable"] = "dbo.Test";
	$fdata["Label"] = GetFieldLabel("dbo_Test","TestId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TestId";

		$fdata["sourceSingle"] = "TestId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestId";

	
	
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


	$tdatatest["TestId"] = $fdata;
		$tdatatest[".searchableFields"][] = "TestId";
//	Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Test";
	$fdata["GoodName"] = "Test";
	$fdata["ownerTable"] = "dbo.Test";
	$fdata["Label"] = GetFieldLabel("dbo_Test","Test");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Test";

		$fdata["sourceSingle"] = "Test";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Test";

	
	
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


	$tdatatest["Test"] = $fdata;
		$tdatatest[".searchableFields"][] = "Test";
//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "dbo.Test";
	$fdata["Label"] = GetFieldLabel("dbo_Test","Nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nivel";

		$fdata["sourceSingle"] = "Nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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


	$tdatatest["Nivel"] = $fdata;
		$tdatatest[".searchableFields"][] = "Nivel";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "dbo.Test";
	$fdata["Label"] = GetFieldLabel("dbo_Test","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["sourceSingle"] = "Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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


	$tdatatest["Descripcion"] = $fdata;
		$tdatatest[".searchableFields"][] = "Descripcion";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "dbo.Test";
	$fdata["Label"] = GetFieldLabel("dbo_Test","Porcentaje");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Porcentaje";

		$fdata["sourceSingle"] = "Porcentaje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Porcentaje";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatest["Porcentaje"] = $fdata;
		$tdatatest[".searchableFields"][] = "Porcentaje";


$tables_data["dbo.Test"]=&$tdatatest;
$field_labels["dbo_Test"] = &$fieldLabelstest;
$fieldToolTips["dbo_Test"] = &$fieldToolTipstest;
$placeHolders["dbo_Test"] = &$placeHolderstest;
$page_titles["dbo_Test"] = &$pageTitlestest;


changeTextControlsToDate( "dbo.Test" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Test"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Test"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_test()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestId,  	Test,  	Nivel,  	Descripcion,  	Porcentaje";
$proto0["m_strFrom"] = "FROM dbo.Test";
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
	"m_strName" => "TestId",
	"m_strTable" => "dbo.Test",
	"m_srcTableName" => "dbo.Test"
));

$proto6["m_sql"] = "TestId";
$proto6["m_srcTableName"] = "dbo.Test";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Test",
	"m_strTable" => "dbo.Test",
	"m_srcTableName" => "dbo.Test"
));

$proto8["m_sql"] = "Test";
$proto8["m_srcTableName"] = "dbo.Test";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nivel",
	"m_strTable" => "dbo.Test",
	"m_srcTableName" => "dbo.Test"
));

$proto10["m_sql"] = "Nivel";
$proto10["m_srcTableName"] = "dbo.Test";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "dbo.Test",
	"m_srcTableName" => "dbo.Test"
));

$proto12["m_sql"] = "Descripcion";
$proto12["m_srcTableName"] = "dbo.Test";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Porcentaje",
	"m_strTable" => "dbo.Test",
	"m_srcTableName" => "dbo.Test"
));

$proto14["m_sql"] = "Porcentaje";
$proto14["m_srcTableName"] = "dbo.Test";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Test";
$proto17["m_srcTableName"] = "dbo.Test";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "TestId";
$proto17["m_columns"][] = "Test";
$proto17["m_columns"][] = "Nivel";
$proto17["m_columns"][] = "Descripcion";
$proto17["m_columns"][] = "Porcentaje";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Test";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Test";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Test";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_test = createSqlQuery_test();


	
		;

					

$tdatatest[".sqlquery"] = $queryData_test;



$tdatatest[".hasEvents"] = false;

?>