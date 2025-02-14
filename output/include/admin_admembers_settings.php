<?php
$tdataadmin_admembers = array();
$tdataadmin_admembers[".searchableFields"] = array();
$tdataadmin_admembers[".ShortName"] = "admin_admembers";
$tdataadmin_admembers[".OwnerID"] = "";
$tdataadmin_admembers[".OriginalTable"] = "dbo.UsuGCC-uggroups";


$tdataadmin_admembers[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataadmin_admembers[".originalPagesByType"] = $tdataadmin_admembers[".pagesByType"];
$tdataadmin_admembers[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataadmin_admembers[".originalPages"] = $tdataadmin_admembers[".pages"];
$tdataadmin_admembers[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataadmin_admembers[".originalDefaultPages"] = $tdataadmin_admembers[".defaultPages"];

//	field labels
$fieldLabelsadmin_admembers = array();
$fieldToolTipsadmin_admembers = array();
$pageTitlesadmin_admembers = array();
$placeHoldersadmin_admembers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_admembers["Spanish"] = array();
	$fieldToolTipsadmin_admembers["Spanish"] = array();
	$placeHoldersadmin_admembers["Spanish"] = array();
	$pageTitlesadmin_admembers["Spanish"] = array();
	$fieldLabelsadmin_admembers["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_admembers["Spanish"]["GroupID"] = "";
	$placeHoldersadmin_admembers["Spanish"]["GroupID"] = "";
	$fieldLabelsadmin_admembers["Spanish"]["Label"] = "Label";
	$fieldToolTipsadmin_admembers["Spanish"]["Label"] = "";
	$placeHoldersadmin_admembers["Spanish"]["Label"] = "";
	$fieldLabelsadmin_admembers["Spanish"]["Provider"] = "Provider";
	$fieldToolTipsadmin_admembers["Spanish"]["Provider"] = "";
	$placeHoldersadmin_admembers["Spanish"]["Provider"] = "";
	$fieldLabelsadmin_admembers["Spanish"]["Comment"] = "Comment";
	$fieldToolTipsadmin_admembers["Spanish"]["Comment"] = "";
	$placeHoldersadmin_admembers["Spanish"]["Comment"] = "";
	if (count($fieldToolTipsadmin_admembers["Spanish"]))
		$tdataadmin_admembers[".isUseToolTips"] = true;
}


	$tdataadmin_admembers[".NCSearch"] = true;



$tdataadmin_admembers[".shortTableName"] = "admin_admembers";
$tdataadmin_admembers[".nSecOptions"] = 0;

$tdataadmin_admembers[".mainTableOwnerID"] = "";
$tdataadmin_admembers[".entityType"] = 1;
$tdataadmin_admembers[".connId"] = "GCC_at_S00001_CCAD01";


$tdataadmin_admembers[".strOriginalTableName"] = "dbo.UsuGCC-uggroups";

	



$tdataadmin_admembers[".showAddInPopup"] = false;

$tdataadmin_admembers[".showEditInPopup"] = false;

$tdataadmin_admembers[".showViewInPopup"] = false;

$tdataadmin_admembers[".listAjax"] = false;
//	temporary
//$tdataadmin_admembers[".listAjax"] = false;

	$tdataadmin_admembers[".audit"] = false;

	$tdataadmin_admembers[".locking"] = false;


$pages = $tdataadmin_admembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_admembers[".edit"] = true;
	$tdataadmin_admembers[".afterEditAction"] = 1;
	$tdataadmin_admembers[".closePopupAfterEdit"] = 1;
	$tdataadmin_admembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_admembers[".add"] = true;
$tdataadmin_admembers[".afterAddAction"] = 1;
$tdataadmin_admembers[".closePopupAfterAdd"] = 1;
$tdataadmin_admembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_admembers[".list"] = true;
}



$tdataadmin_admembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_admembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_admembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_admembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_admembers[".printFriendly"] = true;
}



$tdataadmin_admembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_admembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_admembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_admembers[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																									

$tdataadmin_admembers[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_admembers[".buttonsAdded"] = false;

$tdataadmin_admembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_admembers[".isUseTimeForSearch"] = false;


$tdataadmin_admembers[".badgeColor"] = "EDCA00";


$tdataadmin_admembers[".allSearchFields"] = array();
$tdataadmin_admembers[".filterFields"] = array();
$tdataadmin_admembers[".requiredSearchFields"] = array();

$tdataadmin_admembers[".googleLikeFields"] = array();
$tdataadmin_admembers[".googleLikeFields"][] = "GroupID";
$tdataadmin_admembers[".googleLikeFields"][] = "Label";
$tdataadmin_admembers[".googleLikeFields"][] = "Provider";
$tdataadmin_admembers[".googleLikeFields"][] = "Comment";



$tdataadmin_admembers[".tableType"] = "list";

$tdataadmin_admembers[".printerPageOrientation"] = 0;
$tdataadmin_admembers[".nPrinterPageScale"] = 100;

$tdataadmin_admembers[".nPrinterSplitRecords"] = 40;

$tdataadmin_admembers[".geocodingEnabled"] = false;




$tdataadmin_admembers[".isDisplayLoading"] = true;






$tdataadmin_admembers[".pageSize"] = 20;

$tdataadmin_admembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadmin_admembers[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_admembers[".orderindexes"] = array();


$tdataadmin_admembers[".sqlHead"] = "SELECT GroupID,  	[Label],  	Provider,  	[Comment]";
$tdataadmin_admembers[".sqlFrom"] = "FROM dbo.[UsuGCC-uggroups]";
$tdataadmin_admembers[".sqlWhereExpr"] = "";
$tdataadmin_admembers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataadmin_admembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_admembers[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_admembers[".highlightSearchResults"] = true;

$tableKeysadmin_admembers = array();
$tableKeysadmin_admembers[] = "GroupID";
$tdataadmin_admembers[".Keys"] = $tableKeysadmin_admembers;


$tdataadmin_admembers[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","GroupID");
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


	$tdataadmin_admembers["GroupID"] = $fdata;
		$tdataadmin_admembers[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","Label");
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


	$tdataadmin_admembers["Label"] = $fdata;
		$tdataadmin_admembers[".searchableFields"][] = "Label";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","Provider");
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


	$tdataadmin_admembers["Provider"] = $fdata;
		$tdataadmin_admembers[".searchableFields"][] = "Provider";
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "dbo.UsuGCC-uggroups";
	$fdata["Label"] = GetFieldLabel("admin_admembers","Comment");
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


	$tdataadmin_admembers["Comment"] = $fdata;
		$tdataadmin_admembers[".searchableFields"][] = "Comment";


$tables_data["admin_admembers"]=&$tdataadmin_admembers;
$field_labels["admin_admembers"] = &$fieldLabelsadmin_admembers;
$fieldToolTips["admin_admembers"] = &$fieldToolTipsadmin_admembers;
$placeHolders["admin_admembers"] = &$placeHoldersadmin_admembers;
$page_titles["admin_admembers"] = &$pageTitlesadmin_admembers;


changeTextControlsToDate( "admin_admembers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["admin_admembers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["admin_admembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_admembers()
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
	"m_srcTableName" => "admin_admembers"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "admin_admembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "admin_admembers"
));

$proto8["m_sql"] = "[Label]";
$proto8["m_srcTableName"] = "admin_admembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "admin_admembers"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "admin_admembers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "dbo.UsuGCC-uggroups",
	"m_srcTableName" => "admin_admembers"
));

$proto12["m_sql"] = "[Comment]";
$proto12["m_srcTableName"] = "admin_admembers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.UsuGCC-uggroups";
$proto15["m_srcTableName"] = "admin_admembers";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "Label";
$proto15["m_columns"][] = "Provider";
$proto15["m_columns"][] = "Comment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.[UsuGCC-uggroups]";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "admin_admembers";
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
$proto0["m_srcTableName"]="admin_admembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_admembers = createSqlQuery_admin_admembers();


	
		;

				

$tdataadmin_admembers[".sqlquery"] = $queryData_admin_admembers;



$tdataadmin_admembers[".hasEvents"] = false;

?>