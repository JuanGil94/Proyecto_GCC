<?php
$tdataestados1 = array();
$tdataestados1[".searchableFields"] = array();
$tdataestados1[".ShortName"] = "estados1";
$tdataestados1[".OwnerID"] = "";
$tdataestados1[".OriginalTable"] = "dbo.Estados";


$tdataestados1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataestados1[".originalPagesByType"] = $tdataestados1[".pagesByType"];
$tdataestados1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataestados1[".originalPages"] = $tdataestados1[".pages"];
$tdataestados1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataestados1[".originalDefaultPages"] = $tdataestados1[".defaultPages"];

//	field labels
$fieldLabelsestados1 = array();
$fieldToolTipsestados1 = array();
$pageTitlesestados1 = array();
$placeHoldersestados1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestados1["Spanish"] = array();
	$fieldToolTipsestados1["Spanish"] = array();
	$placeHoldersestados1["Spanish"] = array();
	$pageTitlesestados1["Spanish"] = array();
	$fieldLabelsestados1["Spanish"]["EstadoId"] = "Estado Id";
	$fieldToolTipsestados1["Spanish"]["EstadoId"] = "";
	$placeHoldersestados1["Spanish"]["EstadoId"] = "";
	$fieldLabelsestados1["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsestados1["Spanish"]["Estado"] = "";
	$placeHoldersestados1["Spanish"]["Estado"] = "";
	$fieldLabelsestados1["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsestados1["Spanish"]["Tipo"] = "";
	$placeHoldersestados1["Spanish"]["Tipo"] = "";
	$fieldLabelsestados1["Spanish"]["ID"] = "ID";
	$fieldToolTipsestados1["Spanish"]["ID"] = "";
	$placeHoldersestados1["Spanish"]["ID"] = "";
	$pageTitlesestados1["Spanish"]["add"] = "Estados1";
	$pageTitlesestados1["Spanish"]["edit"] = "Estados1";
	if (count($fieldToolTipsestados1["Spanish"]))
		$tdataestados1[".isUseToolTips"] = true;
}


	$tdataestados1[".NCSearch"] = true;



$tdataestados1[".shortTableName"] = "estados1";
$tdataestados1[".nSecOptions"] = 0;

$tdataestados1[".mainTableOwnerID"] = "";
$tdataestados1[".entityType"] = 1;
$tdataestados1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataestados1[".strOriginalTableName"] = "dbo.Estados";

	



$tdataestados1[".showAddInPopup"] = false;

$tdataestados1[".showEditInPopup"] = false;

$tdataestados1[".showViewInPopup"] = false;

$tdataestados1[".listAjax"] = false;
//	temporary
//$tdataestados1[".listAjax"] = false;

	$tdataestados1[".audit"] = true;

	$tdataestados1[".locking"] = false;


$pages = $tdataestados1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestados1[".edit"] = true;
	$tdataestados1[".afterEditAction"] = 1;
	$tdataestados1[".closePopupAfterEdit"] = 1;
	$tdataestados1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestados1[".add"] = true;
$tdataestados1[".afterAddAction"] = 1;
$tdataestados1[".closePopupAfterAdd"] = 1;
$tdataestados1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestados1[".list"] = true;
}



$tdataestados1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestados1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestados1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestados1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestados1[".printFriendly"] = true;
}



$tdataestados1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestados1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestados1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestados1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																											

$tdataestados1[".ajaxCodeSnippetAdded"] = false;

$tdataestados1[".buttonsAdded"] = false;

$tdataestados1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestados1[".isUseTimeForSearch"] = false;


$tdataestados1[".badgeColor"] = "8FBC8B";


$tdataestados1[".allSearchFields"] = array();
$tdataestados1[".filterFields"] = array();
$tdataestados1[".requiredSearchFields"] = array();

$tdataestados1[".googleLikeFields"] = array();
$tdataestados1[".googleLikeFields"][] = "EstadoId";
$tdataestados1[".googleLikeFields"][] = "ID";
$tdataestados1[".googleLikeFields"][] = "Estado";
$tdataestados1[".googleLikeFields"][] = "Tipo";



$tdataestados1[".tableType"] = "list";

$tdataestados1[".printerPageOrientation"] = 0;
$tdataestados1[".nPrinterPageScale"] = 100;

$tdataestados1[".nPrinterSplitRecords"] = 40;

$tdataestados1[".geocodingEnabled"] = false;




$tdataestados1[".isDisplayLoading"] = true;

$tdataestados1[".isResizeColumns"] = true;





$tdataestados1[".pageSize"] = 20;

$tdataestados1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataestados1[".strOrderBy"] = $tstrOrderBy;

$tdataestados1[".orderindexes"] = array();


$tdataestados1[".sqlHead"] = "SELECT DISTINCT CASE           WHEN A.EstadoId = 0 THEN ' '           ELSE CAST(A.EstadoId AS VARCHAR)        END AS EstadoId,      A.EstadoId AS ID,      CASE           WHEN COALESCE(E.Estado, ' ') = ' ' THEN ' '           ELSE CAST(E.Estado AS VARCHAR)        END AS Estado,       E.Tipo";
$tdataestados1[".sqlFrom"] = "FROM       Estados E   RIGHT OUTER JOIN       Actuaciones A ON E.EstadoId = A.EstadoId";
$tdataestados1[".sqlWhereExpr"] = "";
$tdataestados1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataestados1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestados1[".arrGroupsPerPage"] = $arrGPP;

$tdataestados1[".highlightSearchResults"] = true;

$tableKeysestados1 = array();
$tableKeysestados1[] = "EstadoId";
$tdataestados1[".Keys"] = $tableKeysestados1;


$tdataestados1[".hideMobileList"] = array();




//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Estados1","EstadoId");
	$fdata["FieldType"] = 200;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN A.EstadoId = 0 THEN ' '           ELSE CAST(A.EstadoId AS VARCHAR)        END";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataestados1["EstadoId"] = $fdata;
		$tdataestados1[".searchableFields"][] = "EstadoId";
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Estados1","ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.EstadoId";

	
	
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


	$tdataestados1["ID"] = $fdata;
		$tdataestados1[".searchableFields"][] = "ID";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Estados1","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN COALESCE(E.Estado, ' ') = ' ' THEN ' '           ELSE CAST(E.Estado AS VARCHAR)        END";

	
	
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


	$tdataestados1["Estado"] = $fdata;
		$tdataestados1[".searchableFields"][] = "Estado";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_Estados1","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E.Tipo";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataestados1["Tipo"] = $fdata;
		$tdataestados1[".searchableFields"][] = "Tipo";


$tables_data["dbo.Estados1"]=&$tdataestados1;
$field_labels["dbo_Estados1"] = &$fieldLabelsestados1;
$fieldToolTips["dbo_Estados1"] = &$fieldToolTipsestados1;
$placeHolders["dbo_Estados1"] = &$placeHoldersestados1;
$page_titles["dbo_Estados1"] = &$pageTitlesestados1;


changeTextControlsToDate( "dbo.Estados1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Estados1"] = array();
//	dbo.Procesos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Estados1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Estados1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Estados1"][$dIndex]["masterKeys"][]="EstadoId";

				$detailsTablesData["dbo.Estados1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Estados1"][$dIndex]["detailKeys"][]="EstadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Estados1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estados1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "CASE           WHEN A.EstadoId = 0 THEN ' '           ELSE CAST(A.EstadoId AS VARCHAR)        END AS EstadoId,      A.EstadoId AS ID,      CASE           WHEN COALESCE(E.Estado, ' ') = ' ' THEN ' '           ELSE CAST(E.Estado AS VARCHAR)        END AS Estado,       E.Tipo";
$proto0["m_strFrom"] = "FROM       Estados E   RIGHT OUTER JOIN       Actuaciones A ON E.EstadoId = A.EstadoId";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN A.EstadoId = 0 THEN ' '           ELSE CAST(A.EstadoId AS VARCHAR)        END"
));

$proto6["m_sql"] = "CASE           WHEN A.EstadoId = 0 THEN ' '           ELSE CAST(A.EstadoId AS VARCHAR)        END";
$proto6["m_srcTableName"] = "dbo.Estados1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "EstadoId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Estados1"
));

$proto8["m_sql"] = "A.EstadoId";
$proto8["m_srcTableName"] = "dbo.Estados1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "ID";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN COALESCE(E.Estado, ' ') = ' ' THEN ' '           ELSE CAST(E.Estado AS VARCHAR)        END"
));

$proto10["m_sql"] = "CASE           WHEN COALESCE(E.Estado, ' ') = ' ' THEN ' '           ELSE CAST(E.Estado AS VARCHAR)        END";
$proto10["m_srcTableName"] = "dbo.Estados1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Estado";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "E",
	"m_srcTableName" => "dbo.Estados1"
));

$proto12["m_sql"] = "E.Tipo";
$proto12["m_srcTableName"] = "dbo.Estados1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.Estados";
$proto15["m_srcTableName"] = "dbo.Estados1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "EstadoId";
$proto15["m_columns"][] = "Estado";
$proto15["m_columns"][] = "Tipo";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Estados E";
$proto14["m_alias"] = "E";
$proto14["m_srcTableName"] = "dbo.Estados1";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_RIGHTJOIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Actuaciones";
$proto19["m_srcTableName"] = "dbo.Estados1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ActuacionId";
$proto19["m_columns"][] = "Actuacion";
$proto19["m_columns"][] = "EstadoId";
$proto19["m_columns"][] = "MotivoId";
$proto19["m_columns"][] = "Intereses";
$proto19["m_columns"][] = "EtapaId";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "RIGHT OUTER JOIN       Actuaciones A ON E.EstadoId = A.EstadoId";
$proto18["m_alias"] = "A";
$proto18["m_srcTableName"] = "dbo.Estados1";
$proto20=array();
$proto20["m_sql"] = "A.EstadoId = E.EstadoId";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Estados1"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= E.EstadoId";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Estados1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estados1 = createSqlQuery_estados1();


	
		;

				

$tdataestados1[".sqlquery"] = $queryData_estados1;



$tdataestados1[".hasEvents"] = false;

?>