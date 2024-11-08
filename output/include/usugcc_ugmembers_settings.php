<?php
$tdatausugcc_ugmembers = array();
$tdatausugcc_ugmembers[".searchableFields"] = array();
$tdatausugcc_ugmembers[".ShortName"] = "usugcc_ugmembers";
$tdatausugcc_ugmembers[".OwnerID"] = "";
$tdatausugcc_ugmembers[".OriginalTable"] = "dbo.UsuGCC-ugmembers";


$tdatausugcc_ugmembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausugcc_ugmembers[".originalPagesByType"] = $tdatausugcc_ugmembers[".pagesByType"];
$tdatausugcc_ugmembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausugcc_ugmembers[".originalPages"] = $tdatausugcc_ugmembers[".pages"];
$tdatausugcc_ugmembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausugcc_ugmembers[".originalDefaultPages"] = $tdatausugcc_ugmembers[".defaultPages"];

//	field labels
$fieldLabelsusugcc_ugmembers = array();
$fieldToolTipsusugcc_ugmembers = array();
$pageTitlesusugcc_ugmembers = array();
$placeHoldersusugcc_ugmembers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusugcc_ugmembers["Spanish"] = array();
	$fieldToolTipsusugcc_ugmembers["Spanish"] = array();
	$placeHoldersusugcc_ugmembers["Spanish"] = array();
	$pageTitlesusugcc_ugmembers["Spanish"] = array();
	$fieldLabelsusugcc_ugmembers["Spanish"]["UserName"] = "User Name";
	$fieldToolTipsusugcc_ugmembers["Spanish"]["UserName"] = "";
	$placeHoldersusugcc_ugmembers["Spanish"]["UserName"] = "";
	$fieldLabelsusugcc_ugmembers["Spanish"]["GroupID"] = "Rol";
	$fieldToolTipsusugcc_ugmembers["Spanish"]["GroupID"] = "";
	$placeHoldersusugcc_ugmembers["Spanish"]["GroupID"] = "";
	$fieldLabelsusugcc_ugmembers["Spanish"]["Provider"] = "Provider";
	$fieldToolTipsusugcc_ugmembers["Spanish"]["Provider"] = "";
	$placeHoldersusugcc_ugmembers["Spanish"]["Provider"] = "";
	$pageTitlesusugcc_ugmembers["Spanish"]["list"] = "Roles del Usuario";
	if (count($fieldToolTipsusugcc_ugmembers["Spanish"]))
		$tdatausugcc_ugmembers[".isUseToolTips"] = true;
}


	$tdatausugcc_ugmembers[".NCSearch"] = true;



$tdatausugcc_ugmembers[".shortTableName"] = "usugcc_ugmembers";
$tdatausugcc_ugmembers[".nSecOptions"] = 0;

$tdatausugcc_ugmembers[".mainTableOwnerID"] = "";
$tdatausugcc_ugmembers[".entityType"] = 0;
$tdatausugcc_ugmembers[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausugcc_ugmembers[".strOriginalTableName"] = "dbo.UsuGCC-ugmembers";

	



$tdatausugcc_ugmembers[".showAddInPopup"] = false;

$tdatausugcc_ugmembers[".showEditInPopup"] = false;

$tdatausugcc_ugmembers[".showViewInPopup"] = false;

$tdatausugcc_ugmembers[".listAjax"] = false;
//	temporary
//$tdatausugcc_ugmembers[".listAjax"] = false;

	$tdatausugcc_ugmembers[".audit"] = false;

	$tdatausugcc_ugmembers[".locking"] = false;


$pages = $tdatausugcc_ugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausugcc_ugmembers[".edit"] = true;
	$tdatausugcc_ugmembers[".afterEditAction"] = 1;
	$tdatausugcc_ugmembers[".closePopupAfterEdit"] = 1;
	$tdatausugcc_ugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausugcc_ugmembers[".add"] = true;
$tdatausugcc_ugmembers[".afterAddAction"] = 1;
$tdatausugcc_ugmembers[".closePopupAfterAdd"] = 1;
$tdatausugcc_ugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausugcc_ugmembers[".list"] = true;
}



$tdatausugcc_ugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausugcc_ugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausugcc_ugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausugcc_ugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausugcc_ugmembers[".printFriendly"] = true;
}



$tdatausugcc_ugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausugcc_ugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausugcc_ugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausugcc_ugmembers[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatausugcc_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdatausugcc_ugmembers[".buttonsAdded"] = false;

$tdatausugcc_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausugcc_ugmembers[".isUseTimeForSearch"] = false;


$tdatausugcc_ugmembers[".badgeColor"] = "e07878";


$tdatausugcc_ugmembers[".allSearchFields"] = array();
$tdatausugcc_ugmembers[".filterFields"] = array();
$tdatausugcc_ugmembers[".requiredSearchFields"] = array();

$tdatausugcc_ugmembers[".googleLikeFields"] = array();
$tdatausugcc_ugmembers[".googleLikeFields"][] = "UserName";
$tdatausugcc_ugmembers[".googleLikeFields"][] = "GroupID";
$tdatausugcc_ugmembers[".googleLikeFields"][] = "Provider";



$tdatausugcc_ugmembers[".tableType"] = "list";

$tdatausugcc_ugmembers[".printerPageOrientation"] = 0;
$tdatausugcc_ugmembers[".nPrinterPageScale"] = 100;

$tdatausugcc_ugmembers[".nPrinterSplitRecords"] = 40;

$tdatausugcc_ugmembers[".geocodingEnabled"] = false;










$tdatausugcc_ugmembers[".pageSize"] = 20;

$tdatausugcc_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausugcc_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdatausugcc_ugmembers[".orderindexes"] = array();


$tdatausugcc_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID,  	Provider";
$tdatausugcc_ugmembers[".sqlFrom"] = "FROM dbo.[UsuGCC-ugmembers]";
$tdatausugcc_ugmembers[".sqlWhereExpr"] = "";
$tdatausugcc_ugmembers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausugcc_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausugcc_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdatausugcc_ugmembers[".highlightSearchResults"] = true;

$tableKeysusugcc_ugmembers = array();
$tableKeysusugcc_ugmembers[] = "UserName";
$tableKeysusugcc_ugmembers[] = "GroupID";
$tableKeysusugcc_ugmembers[] = "Provider";
$tdatausugcc_ugmembers[".Keys"] = $tableKeysusugcc_ugmembers;


$tdatausugcc_ugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dbo.UsuGCC-ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_ugmembers","UserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UserName";

		$fdata["sourceSingle"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatausugcc_ugmembers["UserName"] = $fdata;
		$tdatausugcc_ugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "dbo.UsuGCC-ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_ugmembers","GroupID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.UsuGCC-uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Label";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatausugcc_ugmembers["GroupID"] = $fdata;
		$tdatausugcc_ugmembers[".searchableFields"][] = "GroupID";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "dbo.UsuGCC-ugmembers";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC_ugmembers","Provider");
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


	$tdatausugcc_ugmembers["Provider"] = $fdata;
		$tdatausugcc_ugmembers[".searchableFields"][] = "Provider";


$tables_data["dbo.UsuGCC-ugmembers"]=&$tdatausugcc_ugmembers;
$field_labels["dbo_UsuGCC_ugmembers"] = &$fieldLabelsusugcc_ugmembers;
$fieldToolTips["dbo_UsuGCC_ugmembers"] = &$fieldToolTipsusugcc_ugmembers;
$placeHolders["dbo_UsuGCC_ugmembers"] = &$placeHoldersusugcc_ugmembers;
$page_titles["dbo_UsuGCC_ugmembers"] = &$pageTitlesusugcc_ugmembers;


changeTextControlsToDate( "dbo.UsuGCC-ugmembers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UsuGCC-ugmembers"] = array();
//	dbo.UsuGCC-uggroups
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.UsuGCC-uggroups";
		$detailsParam["dOriginalTable"] = "dbo.UsuGCC-uggroups";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usugcc_uggroups";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_UsuGCC_uggroups");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.UsuGCC-ugmembers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.UsuGCC-ugmembers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.UsuGCC-ugmembers"][$dIndex]["masterKeys"][]="GroupID";

				$detailsTablesData["dbo.UsuGCC-ugmembers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.UsuGCC-ugmembers"][$dIndex]["detailKeys"][]="GroupID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UsuGCC-ugmembers"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UsuGCC-_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UsuGCC-_users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usugcc__users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.UsuGCC-ugmembers"][0] = $masterParams;
				$masterTablesData["dbo.UsuGCC-ugmembers"][0]["masterKeys"] = array();
	$masterTablesData["dbo.UsuGCC-ugmembers"][0]["masterKeys"][]="username";
				$masterTablesData["dbo.UsuGCC-ugmembers"][0]["detailKeys"] = array();
	$masterTablesData["dbo.UsuGCC-ugmembers"][0]["detailKeys"][]="UserName";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usugcc_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID,  	Provider";
$proto0["m_strFrom"] = "FROM dbo.[UsuGCC-ugmembers]";
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
	"m_strName" => "UserName",
	"m_strTable" => "dbo.UsuGCC-ugmembers",
	"m_srcTableName" => "dbo.UsuGCC-ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "dbo.UsuGCC-ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "dbo.UsuGCC-ugmembers",
	"m_srcTableName" => "dbo.UsuGCC-ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "dbo.UsuGCC-ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "dbo.UsuGCC-ugmembers",
	"m_srcTableName" => "dbo.UsuGCC-ugmembers"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "dbo.UsuGCC-ugmembers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.UsuGCC-ugmembers";
$proto13["m_srcTableName"] = "dbo.UsuGCC-ugmembers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UserName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "Provider";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.[UsuGCC-ugmembers]";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.UsuGCC-ugmembers";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.UsuGCC-ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usugcc_ugmembers = createSqlQuery_usugcc_ugmembers();


	
		;

			

$tdatausugcc_ugmembers[".sqlquery"] = $queryData_usugcc_ugmembers;



include_once(getabspath("include/usugcc_ugmembers_events.php"));
$tdatausugcc_ugmembers[".hasEvents"] = true;

?>