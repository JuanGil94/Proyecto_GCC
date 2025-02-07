<?php
$tdataparejas = array();
$tdataparejas[".searchableFields"] = array();
$tdataparejas[".ShortName"] = "parejas";
$tdataparejas[".OwnerID"] = "";
$tdataparejas[".OriginalTable"] = "dbo.Parejas";


$tdataparejas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataparejas[".originalPagesByType"] = $tdataparejas[".pagesByType"];
$tdataparejas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataparejas[".originalPages"] = $tdataparejas[".pages"];
$tdataparejas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataparejas[".originalDefaultPages"] = $tdataparejas[".defaultPages"];

//	field labels
$fieldLabelsparejas = array();
$fieldToolTipsparejas = array();
$pageTitlesparejas = array();
$placeHoldersparejas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsparejas["Spanish"] = array();
	$fieldToolTipsparejas["Spanish"] = array();
	$placeHoldersparejas["Spanish"] = array();
	$pageTitlesparejas["Spanish"] = array();
	$fieldLabelsparejas["Spanish"]["AbogadoId"] = "Abogado CSJ";
	$fieldToolTipsparejas["Spanish"]["AbogadoId"] = "";
	$placeHoldersparejas["Spanish"]["AbogadoId"] = "";
	$fieldLabelsparejas["Spanish"]["Pareja"] = "Numero";
	$fieldToolTipsparejas["Spanish"]["Pareja"] = "";
	$placeHoldersparejas["Spanish"]["Pareja"] = "";
	$fieldLabelsparejas["Spanish"]["AbogadoMinjusticia"] = "Abogado Minjusticia";
	$fieldToolTipsparejas["Spanish"]["AbogadoMinjusticia"] = "";
	$placeHoldersparejas["Spanish"]["AbogadoMinjusticia"] = "";
	$pageTitlesparejas["Spanish"]["add"] = "Parejas";
	$pageTitlesparejas["Spanish"]["edit"] = "Parejas";
	if (count($fieldToolTipsparejas["Spanish"]))
		$tdataparejas[".isUseToolTips"] = true;
}


	$tdataparejas[".NCSearch"] = true;



$tdataparejas[".shortTableName"] = "parejas";
$tdataparejas[".nSecOptions"] = 0;

$tdataparejas[".mainTableOwnerID"] = "";
$tdataparejas[".entityType"] = 0;
$tdataparejas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataparejas[".strOriginalTableName"] = "dbo.Parejas";

	



$tdataparejas[".showAddInPopup"] = false;

$tdataparejas[".showEditInPopup"] = false;

$tdataparejas[".showViewInPopup"] = false;

$tdataparejas[".listAjax"] = false;
//	temporary
//$tdataparejas[".listAjax"] = false;

	$tdataparejas[".audit"] = true;

	$tdataparejas[".locking"] = false;


$pages = $tdataparejas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparejas[".edit"] = true;
	$tdataparejas[".afterEditAction"] = 1;
	$tdataparejas[".closePopupAfterEdit"] = 1;
	$tdataparejas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparejas[".add"] = true;
$tdataparejas[".afterAddAction"] = 1;
$tdataparejas[".closePopupAfterAdd"] = 1;
$tdataparejas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparejas[".list"] = true;
}



$tdataparejas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparejas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparejas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparejas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparejas[".printFriendly"] = true;
}



$tdataparejas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparejas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparejas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparejas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdataparejas[".ajaxCodeSnippetAdded"] = false;

$tdataparejas[".buttonsAdded"] = false;

$tdataparejas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparejas[".isUseTimeForSearch"] = false;


$tdataparejas[".badgeColor"] = "CFAE83";


$tdataparejas[".allSearchFields"] = array();
$tdataparejas[".filterFields"] = array();
$tdataparejas[".requiredSearchFields"] = array();

$tdataparejas[".googleLikeFields"] = array();
$tdataparejas[".googleLikeFields"][] = "AbogadoId";
$tdataparejas[".googleLikeFields"][] = "Pareja";
$tdataparejas[".googleLikeFields"][] = "AbogadoMinjusticia";



$tdataparejas[".tableType"] = "list";

$tdataparejas[".printerPageOrientation"] = 0;
$tdataparejas[".nPrinterPageScale"] = 100;

$tdataparejas[".nPrinterSplitRecords"] = 40;

$tdataparejas[".geocodingEnabled"] = false;




$tdataparejas[".isDisplayLoading"] = true;

$tdataparejas[".isResizeColumns"] = true;





$tdataparejas[".pageSize"] = 20;

$tdataparejas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataparejas[".strOrderBy"] = $tstrOrderBy;

$tdataparejas[".orderindexes"] = array();


$tdataparejas[".sqlHead"] = "SELECT AbogadoId,  	Pareja,  	AbogadoMinjusticia";
$tdataparejas[".sqlFrom"] = "FROM dbo.Parejas";
$tdataparejas[".sqlWhereExpr"] = "";
$tdataparejas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataparejas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparejas[".arrGroupsPerPage"] = $arrGPP;

$tdataparejas[".highlightSearchResults"] = true;

$tableKeysparejas = array();
$tableKeysparejas[] = "AbogadoId";
$tdataparejas[".Keys"] = $tableKeysparejas;


$tdataparejas[".hideMobileList"] = array();




//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Parejas";
	$fdata["Label"] = GetFieldLabel("dbo_Parejas","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdataparejas["AbogadoId"] = $fdata;
		$tdataparejas[".searchableFields"][] = "AbogadoId";
//	Pareja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Pareja";
	$fdata["GoodName"] = "Pareja";
	$fdata["ownerTable"] = "dbo.Parejas";
	$fdata["Label"] = GetFieldLabel("dbo_Parejas","Pareja");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pareja";

		$fdata["sourceSingle"] = "Pareja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pareja";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataparejas["Pareja"] = $fdata;
		$tdataparejas[".searchableFields"][] = "Pareja";
//	AbogadoMinjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AbogadoMinjusticia";
	$fdata["GoodName"] = "AbogadoMinjusticia";
	$fdata["ownerTable"] = "dbo.Parejas";
	$fdata["Label"] = GetFieldLabel("dbo_Parejas","AbogadoMinjusticia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AbogadoMinjusticia";

		$fdata["sourceSingle"] = "AbogadoMinjusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoMinjusticia";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataparejas["AbogadoMinjusticia"] = $fdata;
		$tdataparejas[".searchableFields"][] = "AbogadoMinjusticia";


$tables_data["dbo.Parejas"]=&$tdataparejas;
$field_labels["dbo_Parejas"] = &$fieldLabelsparejas;
$fieldToolTips["dbo_Parejas"] = &$fieldToolTipsparejas;
$placeHolders["dbo_Parejas"] = &$placeHoldersparejas;
$page_titles["dbo_Parejas"] = &$pageTitlesparejas;


changeTextControlsToDate( "dbo.Parejas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Parejas"] = array();
//	dbo.Minjusticia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Parejas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Parejas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Parejas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Parejas"][$dIndex]["detailKeys"][]="AbogadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Parejas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_parejas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AbogadoId,  	Pareja,  	AbogadoMinjusticia";
$proto0["m_strFrom"] = "FROM dbo.Parejas";
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
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Parejas",
	"m_srcTableName" => "dbo.Parejas"
));

$proto6["m_sql"] = "AbogadoId";
$proto6["m_srcTableName"] = "dbo.Parejas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Pareja",
	"m_strTable" => "dbo.Parejas",
	"m_srcTableName" => "dbo.Parejas"
));

$proto8["m_sql"] = "Pareja";
$proto8["m_srcTableName"] = "dbo.Parejas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoMinjusticia",
	"m_strTable" => "dbo.Parejas",
	"m_srcTableName" => "dbo.Parejas"
));

$proto10["m_sql"] = "AbogadoMinjusticia";
$proto10["m_srcTableName"] = "dbo.Parejas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Parejas";
$proto13["m_srcTableName"] = "dbo.Parejas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "AbogadoId";
$proto13["m_columns"][] = "Pareja";
$proto13["m_columns"][] = "AbogadoMinjusticia";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Parejas";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Parejas";
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
$proto0["m_srcTableName"]="dbo.Parejas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_parejas = createSqlQuery_parejas();


	
		;

			

$tdataparejas[".sqlquery"] = $queryData_parejas;



$tdataparejas[".hasEvents"] = false;

?>