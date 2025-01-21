<?php
$tdatamenus = array();
$tdatamenus[".searchableFields"] = array();
$tdatamenus[".ShortName"] = "menus";
$tdatamenus[".OwnerID"] = "";
$tdatamenus[".OriginalTable"] = "dbo.Menus";


$tdatamenus[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamenus[".originalPagesByType"] = $tdatamenus[".pagesByType"];
$tdatamenus[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamenus[".originalPages"] = $tdatamenus[".pages"];
$tdatamenus[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamenus[".originalDefaultPages"] = $tdatamenus[".defaultPages"];

//	field labels
$fieldLabelsmenus = array();
$fieldToolTipsmenus = array();
$pageTitlesmenus = array();
$placeHoldersmenus = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmenus["Spanish"] = array();
	$fieldToolTipsmenus["Spanish"] = array();
	$placeHoldersmenus["Spanish"] = array();
	$pageTitlesmenus["Spanish"] = array();
	$fieldLabelsmenus["Spanish"]["MenuId"] = "Menu Id";
	$fieldToolTipsmenus["Spanish"]["MenuId"] = "";
	$placeHoldersmenus["Spanish"]["MenuId"] = "";
	$fieldLabelsmenus["Spanish"]["Menu"] = "Menu";
	$fieldToolTipsmenus["Spanish"]["Menu"] = "";
	$placeHoldersmenus["Spanish"]["Menu"] = "";
	$fieldLabelsmenus["Spanish"]["Url"] = "Url";
	$fieldToolTipsmenus["Spanish"]["Url"] = "";
	$placeHoldersmenus["Spanish"]["Url"] = "";
	$fieldLabelsmenus["Spanish"]["Imagen"] = "Imagen";
	$fieldToolTipsmenus["Spanish"]["Imagen"] = "";
	$placeHoldersmenus["Spanish"]["Imagen"] = "";
	$fieldLabelsmenus["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsmenus["Spanish"]["Activo"] = "";
	$placeHoldersmenus["Spanish"]["Activo"] = "";
	if (count($fieldToolTipsmenus["Spanish"]))
		$tdatamenus[".isUseToolTips"] = true;
}


	$tdatamenus[".NCSearch"] = true;



$tdatamenus[".shortTableName"] = "menus";
$tdatamenus[".nSecOptions"] = 0;

$tdatamenus[".mainTableOwnerID"] = "";
$tdatamenus[".entityType"] = 0;
$tdatamenus[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamenus[".strOriginalTableName"] = "dbo.Menus";

	



$tdatamenus[".showAddInPopup"] = false;

$tdatamenus[".showEditInPopup"] = false;

$tdatamenus[".showViewInPopup"] = false;

$tdatamenus[".listAjax"] = false;
//	temporary
//$tdatamenus[".listAjax"] = false;

	$tdatamenus[".audit"] = false;

	$tdatamenus[".locking"] = false;


$pages = $tdatamenus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamenus[".edit"] = true;
	$tdatamenus[".afterEditAction"] = 1;
	$tdatamenus[".closePopupAfterEdit"] = 1;
	$tdatamenus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamenus[".add"] = true;
$tdatamenus[".afterAddAction"] = 1;
$tdatamenus[".closePopupAfterAdd"] = 1;
$tdatamenus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamenus[".list"] = true;
}



$tdatamenus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamenus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamenus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamenus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamenus[".printFriendly"] = true;
}



$tdatamenus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamenus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamenus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamenus[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																							

$tdatamenus[".ajaxCodeSnippetAdded"] = false;

$tdatamenus[".buttonsAdded"] = false;

$tdatamenus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamenus[".isUseTimeForSearch"] = false;


$tdatamenus[".badgeColor"] = "BC8F8F";


$tdatamenus[".allSearchFields"] = array();
$tdatamenus[".filterFields"] = array();
$tdatamenus[".requiredSearchFields"] = array();

$tdatamenus[".googleLikeFields"] = array();
$tdatamenus[".googleLikeFields"][] = "MenuId";
$tdatamenus[".googleLikeFields"][] = "Menu";
$tdatamenus[".googleLikeFields"][] = "Url";
$tdatamenus[".googleLikeFields"][] = "Imagen";
$tdatamenus[".googleLikeFields"][] = "Activo";



$tdatamenus[".tableType"] = "list";

$tdatamenus[".printerPageOrientation"] = 0;
$tdatamenus[".nPrinterPageScale"] = 100;

$tdatamenus[".nPrinterSplitRecords"] = 40;

$tdatamenus[".geocodingEnabled"] = false;




$tdatamenus[".isDisplayLoading"] = true;

$tdatamenus[".isResizeColumns"] = true;





$tdatamenus[".pageSize"] = 20;

$tdatamenus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamenus[".strOrderBy"] = $tstrOrderBy;

$tdatamenus[".orderindexes"] = array();


$tdatamenus[".sqlHead"] = "SELECT MenuId,  	Menu,  	Url,  	Imagen,  	Activo";
$tdatamenus[".sqlFrom"] = "FROM dbo.Menus";
$tdatamenus[".sqlWhereExpr"] = "";
$tdatamenus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatamenus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenus[".arrGroupsPerPage"] = $arrGPP;

$tdatamenus[".highlightSearchResults"] = true;

$tableKeysmenus = array();
$tableKeysmenus[] = "MenuId";
$tdatamenus[".Keys"] = $tableKeysmenus;


$tdatamenus[".hideMobileList"] = array();




//	MenuId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MenuId";
	$fdata["GoodName"] = "MenuId";
	$fdata["ownerTable"] = "dbo.Menus";
	$fdata["Label"] = GetFieldLabel("dbo_Menus","MenuId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MenuId";

		$fdata["sourceSingle"] = "MenuId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MenuId";

	
	
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


	$tdatamenus["MenuId"] = $fdata;
		$tdatamenus[".searchableFields"][] = "MenuId";
//	Menu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Menu";
	$fdata["GoodName"] = "Menu";
	$fdata["ownerTable"] = "dbo.Menus";
	$fdata["Label"] = GetFieldLabel("dbo_Menus","Menu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Menu";

		$fdata["sourceSingle"] = "Menu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Menu";

	
	
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


	$tdatamenus["Menu"] = $fdata;
		$tdatamenus[".searchableFields"][] = "Menu";
//	Url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Url";
	$fdata["GoodName"] = "Url";
	$fdata["ownerTable"] = "dbo.Menus";
	$fdata["Label"] = GetFieldLabel("dbo_Menus","Url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Url";

		$fdata["sourceSingle"] = "Url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Url";

	
	
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


	$tdatamenus["Url"] = $fdata;
		$tdatamenus[".searchableFields"][] = "Url";
//	Imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Imagen";
	$fdata["GoodName"] = "Imagen";
	$fdata["ownerTable"] = "dbo.Menus";
	$fdata["Label"] = GetFieldLabel("dbo_Menus","Imagen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Imagen";

		$fdata["sourceSingle"] = "Imagen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Imagen";

	
	
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


	$tdatamenus["Imagen"] = $fdata;
		$tdatamenus[".searchableFields"][] = "Imagen";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Menus";
	$fdata["Label"] = GetFieldLabel("dbo_Menus","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatamenus["Activo"] = $fdata;
		$tdatamenus[".searchableFields"][] = "Activo";


$tables_data["dbo.Menus"]=&$tdatamenus;
$field_labels["dbo_Menus"] = &$fieldLabelsmenus;
$fieldToolTips["dbo_Menus"] = &$fieldToolTipsmenus;
$placeHolders["dbo_Menus"] = &$placeHoldersmenus;
$page_titles["dbo_Menus"] = &$pageTitlesmenus;


changeTextControlsToDate( "dbo.Menus" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Menus"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Menus"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_menus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MenuId,  	Menu,  	Url,  	Imagen,  	Activo";
$proto0["m_strFrom"] = "FROM dbo.Menus";
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
	"m_strName" => "MenuId",
	"m_strTable" => "dbo.Menus",
	"m_srcTableName" => "dbo.Menus"
));

$proto6["m_sql"] = "MenuId";
$proto6["m_srcTableName"] = "dbo.Menus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Menu",
	"m_strTable" => "dbo.Menus",
	"m_srcTableName" => "dbo.Menus"
));

$proto8["m_sql"] = "Menu";
$proto8["m_srcTableName"] = "dbo.Menus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Url",
	"m_strTable" => "dbo.Menus",
	"m_srcTableName" => "dbo.Menus"
));

$proto10["m_sql"] = "Url";
$proto10["m_srcTableName"] = "dbo.Menus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Imagen",
	"m_strTable" => "dbo.Menus",
	"m_srcTableName" => "dbo.Menus"
));

$proto12["m_sql"] = "Imagen";
$proto12["m_srcTableName"] = "dbo.Menus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Menus",
	"m_srcTableName" => "dbo.Menus"
));

$proto14["m_sql"] = "Activo";
$proto14["m_srcTableName"] = "dbo.Menus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Menus";
$proto17["m_srcTableName"] = "dbo.Menus";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "MenuId";
$proto17["m_columns"][] = "Menu";
$proto17["m_columns"][] = "Url";
$proto17["m_columns"][] = "Imagen";
$proto17["m_columns"][] = "Activo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Menus";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Menus";
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
$proto0["m_srcTableName"]="dbo.Menus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menus = createSqlQuery_menus();


	
		;

					

$tdatamenus[".sqlquery"] = $queryData_menus;



$tdatamenus[".hasEvents"] = false;

?>