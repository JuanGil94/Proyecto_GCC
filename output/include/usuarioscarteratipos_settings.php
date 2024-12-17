<?php
$tdatausuarioscarteratipos = array();
$tdatausuarioscarteratipos[".searchableFields"] = array();
$tdatausuarioscarteratipos[".ShortName"] = "usuarioscarteratipos";
$tdatausuarioscarteratipos[".OwnerID"] = "";
$tdatausuarioscarteratipos[".OriginalTable"] = "dbo.UsuariosCarteraTipos";


$tdatausuarioscarteratipos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuarioscarteratipos[".originalPagesByType"] = $tdatausuarioscarteratipos[".pagesByType"];
$tdatausuarioscarteratipos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuarioscarteratipos[".originalPages"] = $tdatausuarioscarteratipos[".pages"];
$tdatausuarioscarteratipos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuarioscarteratipos[".originalDefaultPages"] = $tdatausuarioscarteratipos[".defaultPages"];

//	field labels
$fieldLabelsusuarioscarteratipos = array();
$fieldToolTipsusuarioscarteratipos = array();
$pageTitlesusuarioscarteratipos = array();
$placeHoldersusuarioscarteratipos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarioscarteratipos["Spanish"] = array();
	$fieldToolTipsusuarioscarteratipos["Spanish"] = array();
	$placeHoldersusuarioscarteratipos["Spanish"] = array();
	$pageTitlesusuarioscarteratipos["Spanish"] = array();
	$fieldLabelsusuarioscarteratipos["Spanish"]["UsuarioCarteraTipoId"] = "Usuario Cartera Tipo Id";
	$fieldToolTipsusuarioscarteratipos["Spanish"]["UsuarioCarteraTipoId"] = "";
	$placeHoldersusuarioscarteratipos["Spanish"]["UsuarioCarteraTipoId"] = "";
	$fieldLabelsusuarioscarteratipos["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsusuarioscarteratipos["Spanish"]["UserId"] = "";
	$placeHoldersusuarioscarteratipos["Spanish"]["UserId"] = "";
	$fieldLabelsusuarioscarteratipos["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsusuarioscarteratipos["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersusuarioscarteratipos["Spanish"]["CarteraTipoId"] = "";
	$pageTitlesusuarioscarteratipos["Spanish"]["list"] = "Usuario Carteras";
	if (count($fieldToolTipsusuarioscarteratipos["Spanish"]))
		$tdatausuarioscarteratipos[".isUseToolTips"] = true;
}


	$tdatausuarioscarteratipos[".NCSearch"] = true;



$tdatausuarioscarteratipos[".shortTableName"] = "usuarioscarteratipos";
$tdatausuarioscarteratipos[".nSecOptions"] = 0;

$tdatausuarioscarteratipos[".mainTableOwnerID"] = "";
$tdatausuarioscarteratipos[".entityType"] = 0;
$tdatausuarioscarteratipos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausuarioscarteratipos[".strOriginalTableName"] = "dbo.UsuariosCarteraTipos";

	



$tdatausuarioscarteratipos[".showAddInPopup"] = false;

$tdatausuarioscarteratipos[".showEditInPopup"] = false;

$tdatausuarioscarteratipos[".showViewInPopup"] = false;

$tdatausuarioscarteratipos[".listAjax"] = false;
//	temporary
//$tdatausuarioscarteratipos[".listAjax"] = false;

	$tdatausuarioscarteratipos[".audit"] = false;

	$tdatausuarioscarteratipos[".locking"] = false;


$pages = $tdatausuarioscarteratipos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarioscarteratipos[".edit"] = true;
	$tdatausuarioscarteratipos[".afterEditAction"] = 1;
	$tdatausuarioscarteratipos[".closePopupAfterEdit"] = 1;
	$tdatausuarioscarteratipos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarioscarteratipos[".add"] = true;
$tdatausuarioscarteratipos[".afterAddAction"] = 1;
$tdatausuarioscarteratipos[".closePopupAfterAdd"] = 1;
$tdatausuarioscarteratipos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarioscarteratipos[".list"] = true;
}



$tdatausuarioscarteratipos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarioscarteratipos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarioscarteratipos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarioscarteratipos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarioscarteratipos[".printFriendly"] = true;
}



$tdatausuarioscarteratipos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarioscarteratipos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarioscarteratipos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarioscarteratipos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatausuarioscarteratipos[".ajaxCodeSnippetAdded"] = false;

$tdatausuarioscarteratipos[".buttonsAdded"] = false;

$tdatausuarioscarteratipos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarioscarteratipos[".isUseTimeForSearch"] = false;


$tdatausuarioscarteratipos[".badgeColor"] = "cd5c5c";


$tdatausuarioscarteratipos[".allSearchFields"] = array();
$tdatausuarioscarteratipos[".filterFields"] = array();
$tdatausuarioscarteratipos[".requiredSearchFields"] = array();

$tdatausuarioscarteratipos[".googleLikeFields"] = array();
$tdatausuarioscarteratipos[".googleLikeFields"][] = "UsuarioCarteraTipoId";
$tdatausuarioscarteratipos[".googleLikeFields"][] = "UserId";
$tdatausuarioscarteratipos[".googleLikeFields"][] = "CarteraTipoId";



$tdatausuarioscarteratipos[".tableType"] = "list";

$tdatausuarioscarteratipos[".printerPageOrientation"] = 0;
$tdatausuarioscarteratipos[".nPrinterPageScale"] = 100;

$tdatausuarioscarteratipos[".nPrinterSplitRecords"] = 40;

$tdatausuarioscarteratipos[".geocodingEnabled"] = false;




$tdatausuarioscarteratipos[".isDisplayLoading"] = true;






$tdatausuarioscarteratipos[".pageSize"] = 20;

$tdatausuarioscarteratipos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarioscarteratipos[".strOrderBy"] = $tstrOrderBy;

$tdatausuarioscarteratipos[".orderindexes"] = array();


$tdatausuarioscarteratipos[".sqlHead"] = "SELECT UsuarioCarteraTipoId,  	UserId,  	CarteraTipoId";
$tdatausuarioscarteratipos[".sqlFrom"] = "FROM dbo.UsuariosCarteraTipos";
$tdatausuarioscarteratipos[".sqlWhereExpr"] = "";
$tdatausuarioscarteratipos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatausuarioscarteratipos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarioscarteratipos[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarioscarteratipos[".highlightSearchResults"] = true;

$tableKeysusuarioscarteratipos = array();
$tableKeysusuarioscarteratipos[] = "UsuarioCarteraTipoId";
$tdatausuarioscarteratipos[".Keys"] = $tableKeysusuarioscarteratipos;


$tdatausuarioscarteratipos[".hideMobileList"] = array();




//	UsuarioCarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UsuarioCarteraTipoId";
	$fdata["GoodName"] = "UsuarioCarteraTipoId";
	$fdata["ownerTable"] = "dbo.UsuariosCarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosCarteraTipos","UsuarioCarteraTipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "UsuarioCarteraTipoId";

		$fdata["sourceSingle"] = "UsuarioCarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioCarteraTipoId";

	
	
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


	$tdatausuarioscarteratipos["UsuarioCarteraTipoId"] = $fdata;
		$tdatausuarioscarteratipos[".searchableFields"][] = "UsuarioCarteraTipoId";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.UsuariosCarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosCarteraTipos","UserId");
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


	$tdatausuarioscarteratipos["UserId"] = $fdata;
		$tdatausuarioscarteratipos[".searchableFields"][] = "UserId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.UsuariosCarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_UsuariosCarteraTipos","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CarteraTipo";

	

	
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


	$tdatausuarioscarteratipos["CarteraTipoId"] = $fdata;
		$tdatausuarioscarteratipos[".searchableFields"][] = "CarteraTipoId";


$tables_data["dbo.UsuariosCarteraTipos"]=&$tdatausuarioscarteratipos;
$field_labels["dbo_UsuariosCarteraTipos"] = &$fieldLabelsusuarioscarteratipos;
$fieldToolTips["dbo_UsuariosCarteraTipos"] = &$fieldToolTipsusuarioscarteratipos;
$placeHolders["dbo_UsuariosCarteraTipos"] = &$placeHoldersusuarioscarteratipos;
$page_titles["dbo_UsuariosCarteraTipos"] = &$pageTitlesusuarioscarteratipos;


changeTextControlsToDate( "dbo.UsuariosCarteraTipos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UsuariosCarteraTipos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UsuariosCarteraTipos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UserProfile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UserProfile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "userprofile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.UsuariosCarteraTipos"][0] = $masterParams;
				$masterTablesData["dbo.UsuariosCarteraTipos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.UsuariosCarteraTipos"][0]["masterKeys"][]="UserId";
				$masterTablesData["dbo.UsuariosCarteraTipos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.UsuariosCarteraTipos"][0]["detailKeys"][]="UserId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.CarteraTipos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.CarteraTipos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "carteratipos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.UsuariosCarteraTipos"][1] = $masterParams;
				$masterTablesData["dbo.UsuariosCarteraTipos"][1]["masterKeys"] = array();
	$masterTablesData["dbo.UsuariosCarteraTipos"][1]["masterKeys"][]="CarteraTipoId";
				$masterTablesData["dbo.UsuariosCarteraTipos"][1]["detailKeys"] = array();
	$masterTablesData["dbo.UsuariosCarteraTipos"][1]["detailKeys"][]="CarteraTipoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarioscarteratipos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UsuarioCarteraTipoId,  	UserId,  	CarteraTipoId";
$proto0["m_strFrom"] = "FROM dbo.UsuariosCarteraTipos";
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
	"m_strName" => "UsuarioCarteraTipoId",
	"m_strTable" => "dbo.UsuariosCarteraTipos",
	"m_srcTableName" => "dbo.UsuariosCarteraTipos"
));

$proto6["m_sql"] = "UsuarioCarteraTipoId";
$proto6["m_srcTableName"] = "dbo.UsuariosCarteraTipos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UsuariosCarteraTipos",
	"m_srcTableName" => "dbo.UsuariosCarteraTipos"
));

$proto8["m_sql"] = "UserId";
$proto8["m_srcTableName"] = "dbo.UsuariosCarteraTipos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.UsuariosCarteraTipos",
	"m_srcTableName" => "dbo.UsuariosCarteraTipos"
));

$proto10["m_sql"] = "CarteraTipoId";
$proto10["m_srcTableName"] = "dbo.UsuariosCarteraTipos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.UsuariosCarteraTipos";
$proto13["m_srcTableName"] = "dbo.UsuariosCarteraTipos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UsuarioCarteraTipoId";
$proto13["m_columns"][] = "UserId";
$proto13["m_columns"][] = "CarteraTipoId";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.UsuariosCarteraTipos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.UsuariosCarteraTipos";
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
$proto0["m_srcTableName"]="dbo.UsuariosCarteraTipos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarioscarteratipos = createSqlQuery_usuarioscarteratipos();


	
		;

			

$tdatausuarioscarteratipos[".sqlquery"] = $queryData_usuarioscarteratipos;



$tdatausuarioscarteratipos[".hasEvents"] = false;

?>