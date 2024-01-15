<?php
$tdatausugcc_uggroups = array();
$tdatausugcc_uggroups[".searchableFields"] = array();
$tdatausugcc_uggroups[".ShortName"] = "usugcc_uggroups";
$tdatausugcc_uggroups[".OwnerID"] = "";
$tdatausugcc_uggroups[".OriginalTable"] = "dbo.UsuGCC-uggroups";


$tdatausugcc_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdatausugcc_uggroups[".originalPagesByType"] = $tdatausugcc_uggroups[".pagesByType"];
$tdatausugcc_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdatausugcc_uggroups[".originalPages"] = $tdatausugcc_uggroups[".pages"];
$tdatausugcc_uggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdatausugcc_uggroups[".originalDefaultPages"] = $tdatausugcc_uggroups[".defaultPages"];

//	field labels
$fieldLabelsusugcc_uggroups = array();
$fieldToolTipsusugcc_uggroups = array();
$pageTitlesusugcc_uggroups = array();
$placeHoldersusugcc_uggroups = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusugcc_uggroups["Spanish"] = array();
	$fieldToolTipsusugcc_uggroups["Spanish"] = array();
	$placeHoldersusugcc_uggroups["Spanish"] = array();
	$pageTitlesusugcc_uggroups["Spanish"] = array();
	$fieldLabelsusugcc_uggroups["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsusugcc_uggroups["Spanish"]["GroupID"] = "";
	$placeHoldersusugcc_uggroups["Spanish"]["GroupID"] = "";
	$fieldLabelsusugcc_uggroups["Spanish"]["Label"] = "Label";
	$fieldToolTipsusugcc_uggroups["Spanish"]["Label"] = "";
	$placeHoldersusugcc_uggroups["Spanish"]["Label"] = "";
	$fieldLabelsusugcc_uggroups["Spanish"]["Provider"] = "Provider";
	$fieldToolTipsusugcc_uggroups["Spanish"]["Provider"] = "";
	$placeHoldersusugcc_uggroups["Spanish"]["Provider"] = "";
	$fieldLabelsusugcc_uggroups["Spanish"]["Comment"] = "Comment";
	$fieldToolTipsusugcc_uggroups["Spanish"]["Comment"] = "";
	$placeHoldersusugcc_uggroups["Spanish"]["Comment"] = "";
	if (count($fieldToolTipsusugcc_uggroups["Spanish"]))
		$tdatausugcc_uggroups[".isUseToolTips"] = true;
}


	$tdatausugcc_uggroups[".NCSearch"] = true;



$tdatausugcc_uggroups[".shortTableName"] = "usugcc_uggroups";
$tdatausugcc_uggroups[".nSecOptions"] = 0;

$tdatausugcc_uggroups[".mainTableOwnerID"] = "";
$tdatausugcc_uggroups[".entityType"] = 0;
$tdatausugcc_uggroups[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausugcc_uggroups[".strOriginalTableName"] = "dbo.UsuGCC-uggroups";

	



$tdatausugcc_uggroups[".showAddInPopup"] = false;

$tdatausugcc_uggroups[".showEditInPopup"] = false;

$tdatausugcc_uggroups[".showViewInPopup"] = false;

$tdatausugcc_uggroups[".listAjax"] = false;
//	temporary
//$tdatausugcc_uggroups[".listAjax"] = false;

	$tdatausugcc_uggroups[".audit"] = true;

	$tdatausugcc_uggroups[".locking"] = false;


$pages = $tdatausugcc_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausugcc_uggroups[".edit"] = true;
	$tdatausugcc_uggroups[".afterEditAction"] = 1;
	$tdatausugcc_uggroups[".closePopupAfterEdit"] = 1;
	$tdatausugcc_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausugcc_uggroups[".add"] = true;
$tdatausugcc_uggroups[".afterAddAction"] = 1;
$tdatausugcc_uggroups[".closePopupAfterAdd"] = 1;
$tdatausugcc_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausugcc_uggroups[".list"] = true;
}



$tdatausugcc_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausugcc_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausugcc_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausugcc_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausugcc_uggroups[".printFriendly"] = true;
}



$tdatausugcc_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausugcc_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausugcc_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausugcc_uggroups[".isUseAjaxSuggest"] = true;



																																													

$tdatausugcc_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatausugcc_uggroups[".buttonsAdded"] = false;

$tdatausugcc_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausugcc_uggroups[".isUseTimeForSearch"] = false;


$tdatausugcc_uggroups[".badgeColor"] = "CD853F";


$tdatausugcc_uggroups[".allSearchFields"] = array();
$tdatausugcc_uggroups[".filterFields"] = array();
$tdatausugcc_uggroups[".requiredSearchFields"] = array();

$tdatausugcc_uggroups[".googleLikeFields"] = array();
$tdatausugcc_uggroups[".googleLikeFields"][] = "GroupID";
$tdatausugcc_uggroups[".googleLikeFields"][] = "Label";
$tdatausugcc_uggroups[".googleLikeFields"][] = "Provider";
$tdatausugcc_uggroups[".googleLikeFields"][] = "Comment";



$tdatausugcc_uggroups[".tableType"] = "list";

$tdatausugcc_uggroups[".printerPageOrientation"] = 0;
$tdatausugcc_uggroups[".nPrinterPageScale"] = 100;

$tdatausugcc_uggroups[".nPrinterSplitRecords"] = 40;

$tdatausugcc_uggroups[".geocodingEnabled"] = false;





$tdatausugcc_uggroups[".isResizeColumns"] = true;





$tdatausugcc_uggroups[".pageSize"] = 20;

$tdatausugcc_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausugcc_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatausugcc_uggroups[".orderindexes"] = array();


$tdatausugcc_uggroups[".sqlHead"] = "SELECT GroupID,  	[Label],  	Provider,  	[Comment]";
$tdatausugcc_uggroups[".sqlFrom"] = "FROM dbo.[UsuGCC-uggroups]";
$tdatausugcc_uggroups[".sqlWhereExpr"] = "";
$tdatausugcc_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausugcc_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausugcc_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatausugcc_uggroups[".highlightSearchResults"] = true;

$tableKeysusugcc_uggroups = array();
$tableKeysusugcc_uggroups[] = "GroupID";
$tdatausugcc_uggroups[".Keys"] = $tableKeysusugcc_uggroups;


$tdatausugcc_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_uggroups","GroupID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "GroupID";

		$fdata["sourceSingle"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdatausugcc_uggroups["GroupID"] = $fdata;
		$tdatausugcc_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_uggroups","Label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Label";

		$fdata["sourceSingle"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Label]";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatausugcc_uggroups["Label"] = $fdata;
		$tdatausugcc_uggroups[".searchableFields"][] = "Label";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_uggroups","Provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Provider";

		$fdata["sourceSingle"] = "Provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Provider";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatausugcc_uggroups["Provider"] = $fdata;
		$tdatausugcc_uggroups[".searchableFields"][] = "Provider";
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_uggroups","Comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Comment";

		$fdata["sourceSingle"] = "Comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Comment]";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatausugcc_uggroups["Comment"] = $fdata;
		$tdatausugcc_uggroups[".searchableFields"][] = "Comment";


$tables_data["dbo.UsuGCC-uggroups"]=&$tdatausugcc_uggroups;
$field_labels["dbo_UsuGCC_uggroups"] = &$fieldLabelsusugcc_uggroups;
$fieldToolTips["dbo_UsuGCC_uggroups"] = &$fieldToolTipsusugcc_uggroups;
$placeHolders["dbo_UsuGCC_uggroups"] = &$placeHoldersusugcc_uggroups;
$page_titles["dbo_UsuGCC_uggroups"] = &$pageTitlesusugcc_uggroups;


changeTextControlsToDate( "dbo.UsuGCC-uggroups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UsuGCC-uggroups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UsuGCC-uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usugcc_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	[Label],  	Provider,  	[Comment]";
$proto0["m_strFrom"] = "FROM dbo.[UsuGCC-uggroups]";
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
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "dbo.UsuGCC-uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "dbo.UsuGCC-uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "dbo.UsuGCC-uggroups"
));

$proto8["m_sql"] = "[Label]";
$proto8["m_srcTableName"] = "dbo.UsuGCC-uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "dbo.UsuGCC-uggroups"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "dbo.UsuGCC-uggroups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "dbo.UsuGCC-uggroups"
));

$proto12["m_sql"] = "[Comment]";
$proto12["m_srcTableName"] = "dbo.UsuGCC-uggroups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.UsuGCC-uggroups";
$proto15["m_srcTableName"] = "dbo.UsuGCC-uggroups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "Label";
$proto15["m_columns"][] = "Provider";
$proto15["m_columns"][] = "Comment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.[UsuGCC-uggroups]";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.UsuGCC-uggroups";
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
$proto0["m_srcTableName"]="dbo.UsuGCC-uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usugcc_uggroups = createSqlQuery_usugcc_uggroups();


	
		;

				

$tdatausugcc_uggroups[".sqlquery"] = $queryData_usugcc_uggroups;



$tdatausugcc_uggroups[".hasEvents"] = false;

?>