<?php
$tdatanomenclaturas = array();
$tdatanomenclaturas[".searchableFields"] = array();
$tdatanomenclaturas[".ShortName"] = "nomenclaturas";
$tdatanomenclaturas[".OwnerID"] = "";
$tdatanomenclaturas[".OriginalTable"] = "dbo.Nomenclaturas";


$tdatanomenclaturas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanomenclaturas[".originalPagesByType"] = $tdatanomenclaturas[".pagesByType"];
$tdatanomenclaturas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanomenclaturas[".originalPages"] = $tdatanomenclaturas[".pages"];
$tdatanomenclaturas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanomenclaturas[".originalDefaultPages"] = $tdatanomenclaturas[".defaultPages"];

//	field labels
$fieldLabelsnomenclaturas = array();
$fieldToolTipsnomenclaturas = array();
$pageTitlesnomenclaturas = array();
$placeHoldersnomenclaturas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnomenclaturas["Spanish"] = array();
	$fieldToolTipsnomenclaturas["Spanish"] = array();
	$placeHoldersnomenclaturas["Spanish"] = array();
	$pageTitlesnomenclaturas["Spanish"] = array();
	$fieldLabelsnomenclaturas["Spanish"]["IdNomenclatura"] = "Id Nomenclatura";
	$fieldToolTipsnomenclaturas["Spanish"]["IdNomenclatura"] = "";
	$placeHoldersnomenclaturas["Spanish"]["IdNomenclatura"] = "";
	$fieldLabelsnomenclaturas["Spanish"]["Codigo"] = "Código";
	$fieldToolTipsnomenclaturas["Spanish"]["Codigo"] = "";
	$placeHoldersnomenclaturas["Spanish"]["Codigo"] = "";
	$fieldLabelsnomenclaturas["Spanish"]["Nomenclatura"] = "Nomenclatura";
	$fieldToolTipsnomenclaturas["Spanish"]["Nomenclatura"] = "";
	$placeHoldersnomenclaturas["Spanish"]["Nomenclatura"] = "";
	$pageTitlesnomenclaturas["Spanish"]["add"] = "Añadir";
	$pageTitlesnomenclaturas["Spanish"]["edit"] = "Editar";
	if (count($fieldToolTipsnomenclaturas["Spanish"]))
		$tdatanomenclaturas[".isUseToolTips"] = true;
}


	$tdatanomenclaturas[".NCSearch"] = true;



$tdatanomenclaturas[".shortTableName"] = "nomenclaturas";
$tdatanomenclaturas[".nSecOptions"] = 0;

$tdatanomenclaturas[".mainTableOwnerID"] = "";
$tdatanomenclaturas[".entityType"] = 0;
$tdatanomenclaturas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatanomenclaturas[".strOriginalTableName"] = "dbo.Nomenclaturas";

	



$tdatanomenclaturas[".showAddInPopup"] = false;

$tdatanomenclaturas[".showEditInPopup"] = false;

$tdatanomenclaturas[".showViewInPopup"] = false;

$tdatanomenclaturas[".listAjax"] = false;
//	temporary
//$tdatanomenclaturas[".listAjax"] = false;

	$tdatanomenclaturas[".audit"] = false;

	$tdatanomenclaturas[".locking"] = false;


$pages = $tdatanomenclaturas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanomenclaturas[".edit"] = true;
	$tdatanomenclaturas[".afterEditAction"] = 1;
	$tdatanomenclaturas[".closePopupAfterEdit"] = 1;
	$tdatanomenclaturas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanomenclaturas[".add"] = true;
$tdatanomenclaturas[".afterAddAction"] = 1;
$tdatanomenclaturas[".closePopupAfterAdd"] = 1;
$tdatanomenclaturas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanomenclaturas[".list"] = true;
}



$tdatanomenclaturas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanomenclaturas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanomenclaturas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanomenclaturas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanomenclaturas[".printFriendly"] = true;
}



$tdatanomenclaturas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanomenclaturas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanomenclaturas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanomenclaturas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatanomenclaturas[".ajaxCodeSnippetAdded"] = false;

$tdatanomenclaturas[".buttonsAdded"] = false;

$tdatanomenclaturas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanomenclaturas[".isUseTimeForSearch"] = false;


$tdatanomenclaturas[".badgeColor"] = "1E90FF";


$tdatanomenclaturas[".allSearchFields"] = array();
$tdatanomenclaturas[".filterFields"] = array();
$tdatanomenclaturas[".requiredSearchFields"] = array();

$tdatanomenclaturas[".googleLikeFields"] = array();
$tdatanomenclaturas[".googleLikeFields"][] = "IdNomenclatura";
$tdatanomenclaturas[".googleLikeFields"][] = "Codigo";
$tdatanomenclaturas[".googleLikeFields"][] = "Nomenclatura";



$tdatanomenclaturas[".tableType"] = "list";

$tdatanomenclaturas[".printerPageOrientation"] = 0;
$tdatanomenclaturas[".nPrinterPageScale"] = 100;

$tdatanomenclaturas[".nPrinterSplitRecords"] = 40;

$tdatanomenclaturas[".geocodingEnabled"] = false;










$tdatanomenclaturas[".pageSize"] = 20;

$tdatanomenclaturas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanomenclaturas[".strOrderBy"] = $tstrOrderBy;

$tdatanomenclaturas[".orderindexes"] = array();


$tdatanomenclaturas[".sqlHead"] = "SELECT IdNomenclatura,  	Codigo,  	Nomenclatura";
$tdatanomenclaturas[".sqlFrom"] = "FROM dbo.Nomenclaturas";
$tdatanomenclaturas[".sqlWhereExpr"] = "";
$tdatanomenclaturas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanomenclaturas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanomenclaturas[".arrGroupsPerPage"] = $arrGPP;

$tdatanomenclaturas[".highlightSearchResults"] = true;

$tableKeysnomenclaturas = array();
$tableKeysnomenclaturas[] = "IdNomenclatura";
$tdatanomenclaturas[".Keys"] = $tableKeysnomenclaturas;


$tdatanomenclaturas[".hideMobileList"] = array();




//	IdNomenclatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdNomenclatura";
	$fdata["GoodName"] = "IdNomenclatura";
	$fdata["ownerTable"] = "dbo.Nomenclaturas";
	$fdata["Label"] = GetFieldLabel("dbo_Nomenclaturas","IdNomenclatura");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdNomenclatura";

		$fdata["sourceSingle"] = "IdNomenclatura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdNomenclatura";

	
	
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


	$tdatanomenclaturas["IdNomenclatura"] = $fdata;
		$tdatanomenclaturas[".searchableFields"][] = "IdNomenclatura";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Nomenclaturas";
	$fdata["Label"] = GetFieldLabel("dbo_Nomenclaturas","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El código ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatanomenclaturas["Codigo"] = $fdata;
		$tdatanomenclaturas[".searchableFields"][] = "Codigo";
//	Nomenclatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nomenclatura";
	$fdata["GoodName"] = "Nomenclatura";
	$fdata["ownerTable"] = "dbo.Nomenclaturas";
	$fdata["Label"] = GetFieldLabel("dbo_Nomenclaturas","Nomenclatura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nomenclatura";

		$fdata["sourceSingle"] = "Nomenclatura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nomenclatura";

	
	
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
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "La nomenclatura ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatanomenclaturas["Nomenclatura"] = $fdata;
		$tdatanomenclaturas[".searchableFields"][] = "Nomenclatura";


$tables_data["dbo.Nomenclaturas"]=&$tdatanomenclaturas;
$field_labels["dbo_Nomenclaturas"] = &$fieldLabelsnomenclaturas;
$fieldToolTips["dbo_Nomenclaturas"] = &$fieldToolTipsnomenclaturas;
$placeHolders["dbo_Nomenclaturas"] = &$placeHoldersnomenclaturas;
$page_titles["dbo_Nomenclaturas"] = &$pageTitlesnomenclaturas;


changeTextControlsToDate( "dbo.Nomenclaturas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Nomenclaturas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Nomenclaturas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nomenclaturas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdNomenclatura,  	Codigo,  	Nomenclatura";
$proto0["m_strFrom"] = "FROM dbo.Nomenclaturas";
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
	"m_strName" => "IdNomenclatura",
	"m_strTable" => "dbo.Nomenclaturas",
	"m_srcTableName" => "dbo.Nomenclaturas"
));

$proto6["m_sql"] = "IdNomenclatura";
$proto6["m_srcTableName"] = "dbo.Nomenclaturas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Nomenclaturas",
	"m_srcTableName" => "dbo.Nomenclaturas"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Nomenclaturas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomenclatura",
	"m_strTable" => "dbo.Nomenclaturas",
	"m_srcTableName" => "dbo.Nomenclaturas"
));

$proto10["m_sql"] = "Nomenclatura";
$proto10["m_srcTableName"] = "dbo.Nomenclaturas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Nomenclaturas";
$proto13["m_srcTableName"] = "dbo.Nomenclaturas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IdNomenclatura";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Nomenclatura";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Nomenclaturas";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Nomenclaturas";
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
$proto0["m_srcTableName"]="dbo.Nomenclaturas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nomenclaturas = createSqlQuery_nomenclaturas();


	
		;

			

$tdatanomenclaturas[".sqlquery"] = $queryData_nomenclaturas;



$tdatanomenclaturas[".hasEvents"] = false;

?>