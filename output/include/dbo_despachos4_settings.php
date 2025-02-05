<?php
$tdatadbo_despachos4 = array();
$tdatadbo_despachos4[".searchableFields"] = array();
$tdatadbo_despachos4[".ShortName"] = "dbo_despachos4";
$tdatadbo_despachos4[".OwnerID"] = "";
$tdatadbo_despachos4[".OriginalTable"] = "dbo.Despachos";


$tdatadbo_despachos4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_despachos4[".originalPagesByType"] = $tdatadbo_despachos4[".pagesByType"];
$tdatadbo_despachos4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_despachos4[".originalPages"] = $tdatadbo_despachos4[".pages"];
$tdatadbo_despachos4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_despachos4[".originalDefaultPages"] = $tdatadbo_despachos4[".defaultPages"];

//	field labels
$fieldLabelsdbo_despachos4 = array();
$fieldToolTipsdbo_despachos4 = array();
$pageTitlesdbo_despachos4 = array();
$placeHoldersdbo_despachos4 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_despachos4["Spanish"] = array();
	$fieldToolTipsdbo_despachos4["Spanish"] = array();
	$placeHoldersdbo_despachos4["Spanish"] = array();
	$pageTitlesdbo_despachos4["Spanish"] = array();
	$fieldLabelsdbo_despachos4["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdbo_despachos4["Spanish"]["DespachoId"] = "";
	$placeHoldersdbo_despachos4["Spanish"]["DespachoId"] = "";
	$fieldLabelsdbo_despachos4["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdbo_despachos4["Spanish"]["Codigo"] = "";
	$placeHoldersdbo_despachos4["Spanish"]["Codigo"] = "";
	$fieldLabelsdbo_despachos4["Spanish"]["Despacho"] = "Despacho/Juzgado";
	$fieldToolTipsdbo_despachos4["Spanish"]["Despacho"] = "";
	$placeHoldersdbo_despachos4["Spanish"]["Despacho"] = "";
	$fieldLabelsdbo_despachos4["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsdbo_despachos4["Spanish"]["SeccionalId"] = "";
	$placeHoldersdbo_despachos4["Spanish"]["SeccionalId"] = "";
	$fieldLabelsdbo_despachos4["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsdbo_despachos4["Spanish"]["Seccional"] = "";
	$placeHoldersdbo_despachos4["Spanish"]["Seccional"] = "";
	if (count($fieldToolTipsdbo_despachos4["Spanish"]))
		$tdatadbo_despachos4[".isUseToolTips"] = true;
}


	$tdatadbo_despachos4[".NCSearch"] = true;



$tdatadbo_despachos4[".shortTableName"] = "dbo_despachos4";
$tdatadbo_despachos4[".nSecOptions"] = 0;

$tdatadbo_despachos4[".mainTableOwnerID"] = "";
$tdatadbo_despachos4[".entityType"] = 1;
$tdatadbo_despachos4[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_despachos4[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadbo_despachos4[".showAddInPopup"] = false;

$tdatadbo_despachos4[".showEditInPopup"] = false;

$tdatadbo_despachos4[".showViewInPopup"] = false;

$tdatadbo_despachos4[".listAjax"] = false;
//	temporary
//$tdatadbo_despachos4[".listAjax"] = false;

	$tdatadbo_despachos4[".audit"] = true;

	$tdatadbo_despachos4[".locking"] = false;


$pages = $tdatadbo_despachos4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_despachos4[".edit"] = true;
	$tdatadbo_despachos4[".afterEditAction"] = 1;
	$tdatadbo_despachos4[".closePopupAfterEdit"] = 1;
	$tdatadbo_despachos4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_despachos4[".add"] = true;
$tdatadbo_despachos4[".afterAddAction"] = 1;
$tdatadbo_despachos4[".closePopupAfterAdd"] = 1;
$tdatadbo_despachos4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_despachos4[".list"] = true;
}



$tdatadbo_despachos4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_despachos4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_despachos4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_despachos4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_despachos4[".printFriendly"] = true;
}



$tdatadbo_despachos4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_despachos4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_despachos4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_despachos4[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																

$tdatadbo_despachos4[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_despachos4[".buttonsAdded"] = false;

$tdatadbo_despachos4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_despachos4[".isUseTimeForSearch"] = false;


$tdatadbo_despachos4[".badgeColor"] = "008B8B";


$tdatadbo_despachos4[".allSearchFields"] = array();
$tdatadbo_despachos4[".filterFields"] = array();
$tdatadbo_despachos4[".requiredSearchFields"] = array();

$tdatadbo_despachos4[".googleLikeFields"] = array();
$tdatadbo_despachos4[".googleLikeFields"][] = "DespachoId";
$tdatadbo_despachos4[".googleLikeFields"][] = "Codigo";
$tdatadbo_despachos4[".googleLikeFields"][] = "Despacho";
$tdatadbo_despachos4[".googleLikeFields"][] = "SeccionalId";
$tdatadbo_despachos4[".googleLikeFields"][] = "Seccional";



$tdatadbo_despachos4[".tableType"] = "list";

$tdatadbo_despachos4[".printerPageOrientation"] = 0;
$tdatadbo_despachos4[".nPrinterPageScale"] = 100;

$tdatadbo_despachos4[".nPrinterSplitRecords"] = 40;

$tdatadbo_despachos4[".geocodingEnabled"] = false;




$tdatadbo_despachos4[".isDisplayLoading"] = true;

$tdatadbo_despachos4[".isResizeColumns"] = true;





$tdatadbo_despachos4[".pageSize"] = 20;

$tdatadbo_despachos4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadbo_despachos4[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_despachos4[".orderindexes"] = array();


$tdatadbo_despachos4[".sqlHead"] = "SELECT D.DespachoId,D.Codigo,D.Despacho,S.SeccionalId,S.Seccional";
$tdatadbo_despachos4[".sqlFrom"] = "FROM dbo.Despachos AS D  INNER JOIN dbo.Seccionales S ON S.CiudadId=D.CiudadId";
$tdatadbo_despachos4[".sqlWhereExpr"] = "";
$tdatadbo_despachos4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatadbo_despachos4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_despachos4[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_despachos4[".highlightSearchResults"] = true;

$tableKeysdbo_despachos4 = array();
$tableKeysdbo_despachos4[] = "DespachoId";
$tdatadbo_despachos4[".Keys"] = $tableKeysdbo_despachos4;


$tdatadbo_despachos4[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos4","DespachoId");
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


	$tdatadbo_despachos4["DespachoId"] = $fdata;
		$tdatadbo_despachos4[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos4","Codigo");
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


	$tdatadbo_despachos4["Codigo"] = $fdata;
		$tdatadbo_despachos4[".searchableFields"][] = "Codigo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos4","Despacho");
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


	$tdatadbo_despachos4["Despacho"] = $fdata;
		$tdatadbo_despachos4[".searchableFields"][] = "Despacho";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos4","SeccionalId");
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


	$tdatadbo_despachos4["SeccionalId"] = $fdata;
		$tdatadbo_despachos4[".searchableFields"][] = "SeccionalId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos4","Seccional");
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


	$tdatadbo_despachos4["Seccional"] = $fdata;
		$tdatadbo_despachos4[".searchableFields"][] = "Seccional";


$tables_data["dbo.Despachos4"]=&$tdatadbo_despachos4;
$field_labels["dbo_Despachos4"] = &$fieldLabelsdbo_despachos4;
$fieldToolTips["dbo_Despachos4"] = &$fieldToolTipsdbo_despachos4;
$placeHolders["dbo_Despachos4"] = &$placeHoldersdbo_despachos4;
$page_titles["dbo_Despachos4"] = &$pageTitlesdbo_despachos4;


changeTextControlsToDate( "dbo.Despachos4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_despachos4()
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
	"m_srcTableName" => "dbo.Despachos4"
));

$proto6["m_sql"] = "D.DespachoId";
$proto6["m_srcTableName"] = "dbo.Despachos4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos4"
));

$proto8["m_sql"] = "D.Codigo";
$proto8["m_srcTableName"] = "dbo.Despachos4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos4"
));

$proto10["m_sql"] = "D.Despacho";
$proto10["m_srcTableName"] = "dbo.Despachos4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos4"
));

$proto12["m_sql"] = "S.SeccionalId";
$proto12["m_srcTableName"] = "dbo.Despachos4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos4"
));

$proto14["m_sql"] = "S.Seccional";
$proto14["m_srcTableName"] = "dbo.Despachos4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Despachos";
$proto17["m_srcTableName"] = "dbo.Despachos4";
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
$proto16["m_srcTableName"] = "dbo.Despachos4";
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
$proto21["m_srcTableName"] = "dbo.Despachos4";
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
$proto20["m_srcTableName"] = "dbo.Despachos4";
$proto22=array();
$proto22["m_sql"] = "S.CiudadId = D.CiudadId";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Despachos4"
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
$proto0["m_srcTableName"]="dbo.Despachos4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_despachos4 = createSqlQuery_dbo_despachos4();


	
		;

					

$tdatadbo_despachos4[".sqlquery"] = $queryData_dbo_despachos4;



$tdatadbo_despachos4[".hasEvents"] = false;

?>