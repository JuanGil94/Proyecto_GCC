<?php
$tdatawebpages_roles = array();
$tdatawebpages_roles[".searchableFields"] = array();
$tdatawebpages_roles[".ShortName"] = "webpages_roles";
$tdatawebpages_roles[".OwnerID"] = "";
$tdatawebpages_roles[".OriginalTable"] = "dbo.webpages_Roles";


$tdatawebpages_roles[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebpages_roles[".originalPagesByType"] = $tdatawebpages_roles[".pagesByType"];
$tdatawebpages_roles[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebpages_roles[".originalPages"] = $tdatawebpages_roles[".pages"];
$tdatawebpages_roles[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebpages_roles[".originalDefaultPages"] = $tdatawebpages_roles[".defaultPages"];

//	field labels
$fieldLabelswebpages_roles = array();
$fieldToolTipswebpages_roles = array();
$pageTitleswebpages_roles = array();
$placeHolderswebpages_roles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelswebpages_roles["Spanish"] = array();
	$fieldToolTipswebpages_roles["Spanish"] = array();
	$placeHolderswebpages_roles["Spanish"] = array();
	$pageTitleswebpages_roles["Spanish"] = array();
	$fieldLabelswebpages_roles["Spanish"]["RoleId"] = "Role Id";
	$fieldToolTipswebpages_roles["Spanish"]["RoleId"] = "";
	$placeHolderswebpages_roles["Spanish"]["RoleId"] = "";
	$fieldLabelswebpages_roles["Spanish"]["RoleName"] = "Rol";
	$fieldToolTipswebpages_roles["Spanish"]["RoleName"] = "";
	$placeHolderswebpages_roles["Spanish"]["RoleName"] = "";
	$pageTitleswebpages_roles["Spanish"]["add"] = "Añadir Rol";
	$pageTitleswebpages_roles["Spanish"]["edit"] = "Editar Rol";
	if (count($fieldToolTipswebpages_roles["Spanish"]))
		$tdatawebpages_roles[".isUseToolTips"] = true;
}


	$tdatawebpages_roles[".NCSearch"] = true;



$tdatawebpages_roles[".shortTableName"] = "webpages_roles";
$tdatawebpages_roles[".nSecOptions"] = 0;

$tdatawebpages_roles[".mainTableOwnerID"] = "";
$tdatawebpages_roles[".entityType"] = 0;
$tdatawebpages_roles[".connId"] = "GCC_at_S00001_CCAD01";


$tdatawebpages_roles[".strOriginalTableName"] = "dbo.webpages_Roles";

	



$tdatawebpages_roles[".showAddInPopup"] = false;

$tdatawebpages_roles[".showEditInPopup"] = false;

$tdatawebpages_roles[".showViewInPopup"] = false;

$tdatawebpages_roles[".listAjax"] = false;
//	temporary
//$tdatawebpages_roles[".listAjax"] = false;

	$tdatawebpages_roles[".audit"] = false;

	$tdatawebpages_roles[".locking"] = false;


$pages = $tdatawebpages_roles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebpages_roles[".edit"] = true;
	$tdatawebpages_roles[".afterEditAction"] = 1;
	$tdatawebpages_roles[".closePopupAfterEdit"] = 1;
	$tdatawebpages_roles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebpages_roles[".add"] = true;
$tdatawebpages_roles[".afterAddAction"] = 1;
$tdatawebpages_roles[".closePopupAfterAdd"] = 1;
$tdatawebpages_roles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebpages_roles[".list"] = true;
}



$tdatawebpages_roles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebpages_roles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebpages_roles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebpages_roles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebpages_roles[".printFriendly"] = true;
}



$tdatawebpages_roles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebpages_roles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebpages_roles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebpages_roles[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdatawebpages_roles[".ajaxCodeSnippetAdded"] = false;

$tdatawebpages_roles[".buttonsAdded"] = false;

$tdatawebpages_roles[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebpages_roles[".isUseTimeForSearch"] = false;


$tdatawebpages_roles[".badgeColor"] = "008B8B";


$tdatawebpages_roles[".allSearchFields"] = array();
$tdatawebpages_roles[".filterFields"] = array();
$tdatawebpages_roles[".requiredSearchFields"] = array();

$tdatawebpages_roles[".googleLikeFields"] = array();
$tdatawebpages_roles[".googleLikeFields"][] = "RoleId";
$tdatawebpages_roles[".googleLikeFields"][] = "RoleName";



$tdatawebpages_roles[".tableType"] = "list";

$tdatawebpages_roles[".printerPageOrientation"] = 0;
$tdatawebpages_roles[".nPrinterPageScale"] = 100;

$tdatawebpages_roles[".nPrinterSplitRecords"] = 40;

$tdatawebpages_roles[".geocodingEnabled"] = false;




$tdatawebpages_roles[".isDisplayLoading"] = true;






$tdatawebpages_roles[".pageSize"] = 20;

$tdatawebpages_roles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebpages_roles[".strOrderBy"] = $tstrOrderBy;

$tdatawebpages_roles[".orderindexes"] = array();


$tdatawebpages_roles[".sqlHead"] = "SELECT RoleId,  	RoleName";
$tdatawebpages_roles[".sqlFrom"] = "FROM dbo.webpages_Roles";
$tdatawebpages_roles[".sqlWhereExpr"] = "";
$tdatawebpages_roles[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatawebpages_roles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebpages_roles[".arrGroupsPerPage"] = $arrGPP;

$tdatawebpages_roles[".highlightSearchResults"] = true;

$tableKeyswebpages_roles = array();
$tableKeyswebpages_roles[] = "RoleId";
$tdatawebpages_roles[".Keys"] = $tableKeyswebpages_roles;


$tdatawebpages_roles[".hideMobileList"] = array();




//	RoleId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RoleId";
	$fdata["GoodName"] = "RoleId";
	$fdata["ownerTable"] = "dbo.webpages_Roles";
	$fdata["Label"] = GetFieldLabel("dbo_webpages_Roles","RoleId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatawebpages_roles["RoleId"] = $fdata;
		$tdatawebpages_roles[".searchableFields"][] = "RoleId";
//	RoleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RoleName";
	$fdata["GoodName"] = "RoleName";
	$fdata["ownerTable"] = "dbo.webpages_Roles";
	$fdata["Label"] = GetFieldLabel("dbo_webpages_Roles","RoleName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "RoleName";

		$fdata["sourceSingle"] = "RoleName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RoleName";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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


	$tdatawebpages_roles["RoleName"] = $fdata;
		$tdatawebpages_roles[".searchableFields"][] = "RoleName";


$tables_data["dbo.webpages_Roles"]=&$tdatawebpages_roles;
$field_labels["dbo_webpages_Roles"] = &$fieldLabelswebpages_roles;
$fieldToolTips["dbo_webpages_Roles"] = &$fieldToolTipswebpages_roles;
$placeHolders["dbo_webpages_Roles"] = &$placeHolderswebpages_roles;
$page_titles["dbo_webpages_Roles"] = &$pageTitleswebpages_roles;


changeTextControlsToDate( "dbo.webpages_Roles" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.webpages_Roles"] = array();
//	dbo.webpages_UsersInRoles
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.webpages_UsersInRoles";
		$detailsParam["dOriginalTable"] = "dbo.webpages_UsersInRoles";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "webpages_usersinroles";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_webpages_UsersInRoles");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.webpages_Roles"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.webpages_Roles"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.webpages_Roles"][$dIndex]["masterKeys"][]="RoleId";

				$detailsTablesData["dbo.webpages_Roles"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.webpages_Roles"][$dIndex]["detailKeys"][]="RoleId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.webpages_Roles"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webpages_roles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RoleId,  	RoleName";
$proto0["m_strFrom"] = "FROM dbo.webpages_Roles";
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
	"m_strName" => "RoleId",
	"m_strTable" => "dbo.webpages_Roles",
	"m_srcTableName" => "dbo.webpages_Roles"
));

$proto6["m_sql"] = "RoleId";
$proto6["m_srcTableName"] = "dbo.webpages_Roles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RoleName",
	"m_strTable" => "dbo.webpages_Roles",
	"m_srcTableName" => "dbo.webpages_Roles"
));

$proto8["m_sql"] = "RoleName";
$proto8["m_srcTableName"] = "dbo.webpages_Roles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.webpages_Roles";
$proto11["m_srcTableName"] = "dbo.webpages_Roles";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "RoleId";
$proto11["m_columns"][] = "RoleName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dbo.webpages_Roles";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.webpages_Roles";
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
$proto0["m_srcTableName"]="dbo.webpages_Roles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webpages_roles = createSqlQuery_webpages_roles();


	
		;

		

$tdatawebpages_roles[".sqlquery"] = $queryData_webpages_roles;



$tdatawebpages_roles[".hasEvents"] = false;

?>