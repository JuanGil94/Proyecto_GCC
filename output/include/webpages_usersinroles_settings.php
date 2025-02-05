<?php
$tdatawebpages_usersinroles = array();
$tdatawebpages_usersinroles[".searchableFields"] = array();
$tdatawebpages_usersinroles[".ShortName"] = "webpages_usersinroles";
$tdatawebpages_usersinroles[".OwnerID"] = "";
$tdatawebpages_usersinroles[".OriginalTable"] = "dbo.webpages_UsersInRoles";


$tdatawebpages_usersinroles[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebpages_usersinroles[".originalPagesByType"] = $tdatawebpages_usersinroles[".pagesByType"];
$tdatawebpages_usersinroles[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebpages_usersinroles[".originalPages"] = $tdatawebpages_usersinroles[".pages"];
$tdatawebpages_usersinroles[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebpages_usersinroles[".originalDefaultPages"] = $tdatawebpages_usersinroles[".defaultPages"];

//	field labels
$fieldLabelswebpages_usersinroles = array();
$fieldToolTipswebpages_usersinroles = array();
$pageTitleswebpages_usersinroles = array();
$placeHolderswebpages_usersinroles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelswebpages_usersinroles["Spanish"] = array();
	$fieldToolTipswebpages_usersinroles["Spanish"] = array();
	$placeHolderswebpages_usersinroles["Spanish"] = array();
	$pageTitleswebpages_usersinroles["Spanish"] = array();
	$fieldLabelswebpages_usersinroles["Spanish"]["UserRoleId"] = "User Role Id";
	$fieldToolTipswebpages_usersinroles["Spanish"]["UserRoleId"] = "";
	$placeHolderswebpages_usersinroles["Spanish"]["UserRoleId"] = "";
	$fieldLabelswebpages_usersinroles["Spanish"]["UserId"] = "User Id";
	$fieldToolTipswebpages_usersinroles["Spanish"]["UserId"] = "";
	$placeHolderswebpages_usersinroles["Spanish"]["UserId"] = "";
	$fieldLabelswebpages_usersinroles["Spanish"]["RoleId"] = "Rol";
	$fieldToolTipswebpages_usersinroles["Spanish"]["RoleId"] = "";
	$placeHolderswebpages_usersinroles["Spanish"]["RoleId"] = "";
	$pageTitleswebpages_usersinroles["Spanish"]["list"] = "Roles";
	if (count($fieldToolTipswebpages_usersinroles["Spanish"]))
		$tdatawebpages_usersinroles[".isUseToolTips"] = true;
}


	$tdatawebpages_usersinroles[".NCSearch"] = true;



$tdatawebpages_usersinroles[".shortTableName"] = "webpages_usersinroles";
$tdatawebpages_usersinroles[".nSecOptions"] = 0;

$tdatawebpages_usersinroles[".mainTableOwnerID"] = "";
$tdatawebpages_usersinroles[".entityType"] = 0;
$tdatawebpages_usersinroles[".connId"] = "GCC_at_S00001_CCAD01";


$tdatawebpages_usersinroles[".strOriginalTableName"] = "dbo.webpages_UsersInRoles";

	



$tdatawebpages_usersinroles[".showAddInPopup"] = false;

$tdatawebpages_usersinroles[".showEditInPopup"] = false;

$tdatawebpages_usersinroles[".showViewInPopup"] = false;

$tdatawebpages_usersinroles[".listAjax"] = false;
//	temporary
//$tdatawebpages_usersinroles[".listAjax"] = false;

	$tdatawebpages_usersinroles[".audit"] = false;

	$tdatawebpages_usersinroles[".locking"] = false;


$pages = $tdatawebpages_usersinroles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebpages_usersinroles[".edit"] = true;
	$tdatawebpages_usersinroles[".afterEditAction"] = 1;
	$tdatawebpages_usersinroles[".closePopupAfterEdit"] = 1;
	$tdatawebpages_usersinroles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebpages_usersinroles[".add"] = true;
$tdatawebpages_usersinroles[".afterAddAction"] = 1;
$tdatawebpages_usersinroles[".closePopupAfterAdd"] = 1;
$tdatawebpages_usersinroles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebpages_usersinroles[".list"] = true;
}



$tdatawebpages_usersinroles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebpages_usersinroles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebpages_usersinroles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebpages_usersinroles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebpages_usersinroles[".printFriendly"] = true;
}



$tdatawebpages_usersinroles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebpages_usersinroles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebpages_usersinroles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebpages_usersinroles[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdatawebpages_usersinroles[".ajaxCodeSnippetAdded"] = false;

$tdatawebpages_usersinroles[".buttonsAdded"] = false;

$tdatawebpages_usersinroles[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebpages_usersinroles[".isUseTimeForSearch"] = false;


$tdatawebpages_usersinroles[".badgeColor"] = "DC143C";


$tdatawebpages_usersinroles[".allSearchFields"] = array();
$tdatawebpages_usersinroles[".filterFields"] = array();
$tdatawebpages_usersinroles[".requiredSearchFields"] = array();

$tdatawebpages_usersinroles[".googleLikeFields"] = array();
$tdatawebpages_usersinroles[".googleLikeFields"][] = "UserRoleId";
$tdatawebpages_usersinroles[".googleLikeFields"][] = "UserId";
$tdatawebpages_usersinroles[".googleLikeFields"][] = "RoleId";



$tdatawebpages_usersinroles[".tableType"] = "list";

$tdatawebpages_usersinroles[".printerPageOrientation"] = 0;
$tdatawebpages_usersinroles[".nPrinterPageScale"] = 100;

$tdatawebpages_usersinroles[".nPrinterSplitRecords"] = 40;

$tdatawebpages_usersinroles[".geocodingEnabled"] = false;




$tdatawebpages_usersinroles[".isDisplayLoading"] = true;






$tdatawebpages_usersinroles[".pageSize"] = 20;

$tdatawebpages_usersinroles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebpages_usersinroles[".strOrderBy"] = $tstrOrderBy;

$tdatawebpages_usersinroles[".orderindexes"] = array();


$tdatawebpages_usersinroles[".sqlHead"] = "SELECT UserRoleId,  	UserId,  	RoleId";
$tdatawebpages_usersinroles[".sqlFrom"] = "FROM dbo.webpages_UsersInRoles";
$tdatawebpages_usersinroles[".sqlWhereExpr"] = "";
$tdatawebpages_usersinroles[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatawebpages_usersinroles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebpages_usersinroles[".arrGroupsPerPage"] = $arrGPP;

$tdatawebpages_usersinroles[".highlightSearchResults"] = true;

$tableKeyswebpages_usersinroles = array();
$tableKeyswebpages_usersinroles[] = "UserRoleId";
$tdatawebpages_usersinroles[".Keys"] = $tableKeyswebpages_usersinroles;


$tdatawebpages_usersinroles[".hideMobileList"] = array();




//	UserRoleId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserRoleId";
	$fdata["GoodName"] = "UserRoleId";
	$fdata["ownerTable"] = "dbo.webpages_UsersInRoles";
	$fdata["Label"] = GetFieldLabel("dbo_webpages_UsersInRoles","UserRoleId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "UserRoleId";

		$fdata["sourceSingle"] = "UserRoleId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserRoleId";

	
	
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


	$tdatawebpages_usersinroles["UserRoleId"] = $fdata;
		$tdatawebpages_usersinroles[".searchableFields"][] = "UserRoleId";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.webpages_UsersInRoles";
	$fdata["Label"] = GetFieldLabel("dbo_webpages_UsersInRoles","UserId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserId";

		$fdata["sourceSingle"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
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
	$edata["LookupTable"] = "dbo.UserProfile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "UserId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "UserName";

	

	
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


	$tdatawebpages_usersinroles["UserId"] = $fdata;
		$tdatawebpages_usersinroles[".searchableFields"][] = "UserId";
//	RoleId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RoleId";
	$fdata["GoodName"] = "RoleId";
	$fdata["ownerTable"] = "dbo.webpages_UsersInRoles";
	$fdata["Label"] = GetFieldLabel("dbo_webpages_UsersInRoles","RoleId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RoleId";

		$fdata["sourceSingle"] = "RoleId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RoleId";

	
	
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
	$edata["LookupTable"] = "dbo.webpages_Roles";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RoleId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "RoleName";

	

	
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


	$tdatawebpages_usersinroles["RoleId"] = $fdata;
		$tdatawebpages_usersinroles[".searchableFields"][] = "RoleId";


$tables_data["dbo.webpages_UsersInRoles"]=&$tdatawebpages_usersinroles;
$field_labels["dbo_webpages_UsersInRoles"] = &$fieldLabelswebpages_usersinroles;
$fieldToolTips["dbo_webpages_UsersInRoles"] = &$fieldToolTipswebpages_usersinroles;
$placeHolders["dbo_webpages_UsersInRoles"] = &$placeHolderswebpages_usersinroles;
$page_titles["dbo_webpages_UsersInRoles"] = &$pageTitleswebpages_usersinroles;


changeTextControlsToDate( "dbo.webpages_UsersInRoles" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.webpages_UsersInRoles"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.webpages_UsersInRoles"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UserProfile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UserProfile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "userprofile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.webpages_UsersInRoles"][0] = $masterParams;
				$masterTablesData["dbo.webpages_UsersInRoles"][0]["masterKeys"] = array();
	$masterTablesData["dbo.webpages_UsersInRoles"][0]["masterKeys"][]="UserId";
				$masterTablesData["dbo.webpages_UsersInRoles"][0]["detailKeys"] = array();
	$masterTablesData["dbo.webpages_UsersInRoles"][0]["detailKeys"][]="UserId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.webpages_Roles";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.webpages_Roles";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "webpages_roles";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.webpages_UsersInRoles"][1] = $masterParams;
				$masterTablesData["dbo.webpages_UsersInRoles"][1]["masterKeys"] = array();
	$masterTablesData["dbo.webpages_UsersInRoles"][1]["masterKeys"][]="RoleId";
				$masterTablesData["dbo.webpages_UsersInRoles"][1]["detailKeys"] = array();
	$masterTablesData["dbo.webpages_UsersInRoles"][1]["detailKeys"][]="RoleId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webpages_usersinroles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserRoleId,  	UserId,  	RoleId";
$proto0["m_strFrom"] = "FROM dbo.webpages_UsersInRoles";
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
	"m_strName" => "UserRoleId",
	"m_strTable" => "dbo.webpages_UsersInRoles",
	"m_srcTableName" => "dbo.webpages_UsersInRoles"
));

$proto6["m_sql"] = "UserRoleId";
$proto6["m_srcTableName"] = "dbo.webpages_UsersInRoles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.webpages_UsersInRoles",
	"m_srcTableName" => "dbo.webpages_UsersInRoles"
));

$proto8["m_sql"] = "UserId";
$proto8["m_srcTableName"] = "dbo.webpages_UsersInRoles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RoleId",
	"m_strTable" => "dbo.webpages_UsersInRoles",
	"m_srcTableName" => "dbo.webpages_UsersInRoles"
));

$proto10["m_sql"] = "RoleId";
$proto10["m_srcTableName"] = "dbo.webpages_UsersInRoles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.webpages_UsersInRoles";
$proto13["m_srcTableName"] = "dbo.webpages_UsersInRoles";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UserRoleId";
$proto13["m_columns"][] = "UserId";
$proto13["m_columns"][] = "RoleId";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.webpages_UsersInRoles";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.webpages_UsersInRoles";
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
$proto0["m_srcTableName"]="dbo.webpages_UsersInRoles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webpages_usersinroles = createSqlQuery_webpages_usersinroles();


	
		;

			

$tdatawebpages_usersinroles[".sqlquery"] = $queryData_webpages_usersinroles;



$tdatawebpages_usersinroles[".hasEvents"] = false;

?>