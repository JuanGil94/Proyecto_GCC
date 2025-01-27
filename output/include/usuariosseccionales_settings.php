<?php
$tdatausuariosseccionales = array();
$tdatausuariosseccionales[".searchableFields"] = array();
$tdatausuariosseccionales[".ShortName"] = "usuariosseccionales";
$tdatausuariosseccionales[".OwnerID"] = "";
$tdatausuariosseccionales[".OriginalTable"] = "dbo.UsuariosSeccionales";


$tdatausuariosseccionales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuariosseccionales[".originalPagesByType"] = $tdatausuariosseccionales[".pagesByType"];
$tdatausuariosseccionales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuariosseccionales[".originalPages"] = $tdatausuariosseccionales[".pages"];
$tdatausuariosseccionales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuariosseccionales[".originalDefaultPages"] = $tdatausuariosseccionales[".defaultPages"];

//	field labels
$fieldLabelsusuariosseccionales = array();
$fieldToolTipsusuariosseccionales = array();
$pageTitlesusuariosseccionales = array();
$placeHoldersusuariosseccionales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuariosseccionales["Spanish"] = array();
	$fieldToolTipsusuariosseccionales["Spanish"] = array();
	$placeHoldersusuariosseccionales["Spanish"] = array();
	$pageTitlesusuariosseccionales["Spanish"] = array();
	$fieldLabelsusuariosseccionales["Spanish"]["UsuarioSeccionalId"] = "Usuario Seccional Id";
	$fieldToolTipsusuariosseccionales["Spanish"]["UsuarioSeccionalId"] = "";
	$placeHoldersusuariosseccionales["Spanish"]["UsuarioSeccionalId"] = "";
	$fieldLabelsusuariosseccionales["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsusuariosseccionales["Spanish"]["UserId"] = "";
	$placeHoldersusuariosseccionales["Spanish"]["UserId"] = "";
	$fieldLabelsusuariosseccionales["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsusuariosseccionales["Spanish"]["SeccionalId"] = "";
	$placeHoldersusuariosseccionales["Spanish"]["SeccionalId"] = "";
	$pageTitlesusuariosseccionales["Spanish"]["list"] = "Usuario Seccionales";
	$pageTitlesusuariosseccionales["Spanish"]["add"] = "Usuarios Seccionales";
	$pageTitlesusuariosseccionales["Spanish"]["edit"] = "Usuarios Seccionales";
	if (count($fieldToolTipsusuariosseccionales["Spanish"]))
		$tdatausuariosseccionales[".isUseToolTips"] = true;
}


	$tdatausuariosseccionales[".NCSearch"] = true;



$tdatausuariosseccionales[".shortTableName"] = "usuariosseccionales";
$tdatausuariosseccionales[".nSecOptions"] = 0;

$tdatausuariosseccionales[".mainTableOwnerID"] = "";
$tdatausuariosseccionales[".entityType"] = 0;
$tdatausuariosseccionales[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausuariosseccionales[".strOriginalTableName"] = "dbo.UsuariosSeccionales";

	



$tdatausuariosseccionales[".showAddInPopup"] = false;

$tdatausuariosseccionales[".showEditInPopup"] = false;

$tdatausuariosseccionales[".showViewInPopup"] = false;

$tdatausuariosseccionales[".listAjax"] = false;
//	temporary
//$tdatausuariosseccionales[".listAjax"] = false;

	$tdatausuariosseccionales[".audit"] = false;

	$tdatausuariosseccionales[".locking"] = false;


$pages = $tdatausuariosseccionales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuariosseccionales[".edit"] = true;
	$tdatausuariosseccionales[".afterEditAction"] = 1;
	$tdatausuariosseccionales[".closePopupAfterEdit"] = 1;
	$tdatausuariosseccionales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuariosseccionales[".add"] = true;
$tdatausuariosseccionales[".afterAddAction"] = 1;
$tdatausuariosseccionales[".closePopupAfterAdd"] = 1;
$tdatausuariosseccionales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuariosseccionales[".list"] = true;
}



$tdatausuariosseccionales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuariosseccionales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuariosseccionales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuariosseccionales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuariosseccionales[".printFriendly"] = true;
}



$tdatausuariosseccionales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuariosseccionales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuariosseccionales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuariosseccionales[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatausuariosseccionales[".ajaxCodeSnippetAdded"] = false;

$tdatausuariosseccionales[".buttonsAdded"] = false;

$tdatausuariosseccionales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuariosseccionales[".isUseTimeForSearch"] = false;


$tdatausuariosseccionales[".badgeColor"] = "6b8e23";


$tdatausuariosseccionales[".allSearchFields"] = array();
$tdatausuariosseccionales[".filterFields"] = array();
$tdatausuariosseccionales[".requiredSearchFields"] = array();

$tdatausuariosseccionales[".googleLikeFields"] = array();
$tdatausuariosseccionales[".googleLikeFields"][] = "UsuarioSeccionalId";
$tdatausuariosseccionales[".googleLikeFields"][] = "UserId";
$tdatausuariosseccionales[".googleLikeFields"][] = "SeccionalId";



$tdatausuariosseccionales[".tableType"] = "list";

$tdatausuariosseccionales[".printerPageOrientation"] = 0;
$tdatausuariosseccionales[".nPrinterPageScale"] = 100;

$tdatausuariosseccionales[".nPrinterSplitRecords"] = 40;

$tdatausuariosseccionales[".geocodingEnabled"] = false;




$tdatausuariosseccionales[".isDisplayLoading"] = true;






$tdatausuariosseccionales[".pageSize"] = 20;

$tdatausuariosseccionales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuariosseccionales[".strOrderBy"] = $tstrOrderBy;

$tdatausuariosseccionales[".orderindexes"] = array();


$tdatausuariosseccionales[".sqlHead"] = "SELECT UsuarioSeccionalId,  	UserId,  	SeccionalId";
$tdatausuariosseccionales[".sqlFrom"] = "FROM dbo.UsuariosSeccionales";
$tdatausuariosseccionales[".sqlWhereExpr"] = "";
$tdatausuariosseccionales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatausuariosseccionales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuariosseccionales[".arrGroupsPerPage"] = $arrGPP;

$tdatausuariosseccionales[".highlightSearchResults"] = true;

$tableKeysusuariosseccionales = array();
$tableKeysusuariosseccionales[] = "UsuarioSeccionalId";
$tdatausuariosseccionales[".Keys"] = $tableKeysusuariosseccionales;


$tdatausuariosseccionales[".hideMobileList"] = array();




//	UsuarioSeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UsuarioSeccionalId";
	$fdata["GoodName"] = "UsuarioSeccionalId";
	$fdata["ownerTable"] = "dbo.UsuariosSeccionales";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosSeccionales","UsuarioSeccionalId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "UsuarioSeccionalId";

		$fdata["sourceSingle"] = "UsuarioSeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioSeccionalId";

	
	
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


	$tdatausuariosseccionales["UsuarioSeccionalId"] = $fdata;
		$tdatausuariosseccionales[".searchableFields"][] = "UsuarioSeccionalId";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.UsuariosSeccionales";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosSeccionales","UserId");
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


	$tdatausuariosseccionales["UserId"] = $fdata;
		$tdatausuariosseccionales[".searchableFields"][] = "UserId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.UsuariosSeccionales";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosSeccionales","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalId";

	
	
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
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuariosseccionales["SeccionalId"] = $fdata;
		$tdatausuariosseccionales[".searchableFields"][] = "SeccionalId";


$tables_data["dbo.UsuariosSeccionales"]=&$tdatausuariosseccionales;
$field_labels["dbo_UsuariosSeccionales"] = &$fieldLabelsusuariosseccionales;
$fieldToolTips["dbo_UsuariosSeccionales"] = &$fieldToolTipsusuariosseccionales;
$placeHolders["dbo_UsuariosSeccionales"] = &$placeHoldersusuariosseccionales;
$page_titles["dbo_UsuariosSeccionales"] = &$pageTitlesusuariosseccionales;


changeTextControlsToDate( "dbo.UsuariosSeccionales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UsuariosSeccionales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UsuariosSeccionales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.UsuariosSeccionales"][0] = $masterParams;
				$masterTablesData["dbo.UsuariosSeccionales"][0]["masterKeys"] = array();
	$masterTablesData["dbo.UsuariosSeccionales"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.UsuariosSeccionales"][0]["detailKeys"] = array();
	$masterTablesData["dbo.UsuariosSeccionales"][0]["detailKeys"][]="SeccionalId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UserProfile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UserProfile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "userprofile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.UsuariosSeccionales"][1] = $masterParams;
				$masterTablesData["dbo.UsuariosSeccionales"][1]["masterKeys"] = array();
	$masterTablesData["dbo.UsuariosSeccionales"][1]["masterKeys"][]="UserId";
				$masterTablesData["dbo.UsuariosSeccionales"][1]["detailKeys"] = array();
	$masterTablesData["dbo.UsuariosSeccionales"][1]["detailKeys"][]="UserId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuariosseccionales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UsuarioSeccionalId,  	UserId,  	SeccionalId";
$proto0["m_strFrom"] = "FROM dbo.UsuariosSeccionales";
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
	"m_strName" => "UsuarioSeccionalId",
	"m_strTable" => "dbo.UsuariosSeccionales",
	"m_srcTableName" => "dbo.UsuariosSeccionales"
));

$proto6["m_sql"] = "UsuarioSeccionalId";
$proto6["m_srcTableName"] = "dbo.UsuariosSeccionales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UsuariosSeccionales",
	"m_srcTableName" => "dbo.UsuariosSeccionales"
));

$proto8["m_sql"] = "UserId";
$proto8["m_srcTableName"] = "dbo.UsuariosSeccionales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.UsuariosSeccionales",
	"m_srcTableName" => "dbo.UsuariosSeccionales"
));

$proto10["m_sql"] = "SeccionalId";
$proto10["m_srcTableName"] = "dbo.UsuariosSeccionales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.UsuariosSeccionales";
$proto13["m_srcTableName"] = "dbo.UsuariosSeccionales";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UsuarioSeccionalId";
$proto13["m_columns"][] = "UserId";
$proto13["m_columns"][] = "SeccionalId";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.UsuariosSeccionales";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.UsuariosSeccionales";
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
$proto0["m_srcTableName"]="dbo.UsuariosSeccionales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuariosseccionales = createSqlQuery_usuariosseccionales();


	
		;

			

$tdatausuariosseccionales[".sqlquery"] = $queryData_usuariosseccionales;



$tdatausuariosseccionales[".hasEvents"] = false;

?>