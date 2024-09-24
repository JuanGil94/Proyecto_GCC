<?php
$tdataactuaciones_por_mes = array();
$tdataactuaciones_por_mes[".searchableFields"] = array();
$tdataactuaciones_por_mes[".ShortName"] = "actuaciones_por_mes";
$tdataactuaciones_por_mes[".OwnerID"] = "";
$tdataactuaciones_por_mes[".OriginalTable"] = "Actuaciones Por Mes";


$tdataactuaciones_por_mes[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataactuaciones_por_mes[".originalPagesByType"] = $tdataactuaciones_por_mes[".pagesByType"];
$tdataactuaciones_por_mes[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataactuaciones_por_mes[".originalPages"] = $tdataactuaciones_por_mes[".pages"];
$tdataactuaciones_por_mes[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataactuaciones_por_mes[".originalDefaultPages"] = $tdataactuaciones_por_mes[".defaultPages"];

//	field labels
$fieldLabelsactuaciones_por_mes = array();
$fieldToolTipsactuaciones_por_mes = array();
$pageTitlesactuaciones_por_mes = array();
$placeHoldersactuaciones_por_mes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactuaciones_por_mes["Spanish"] = array();
	$fieldToolTipsactuaciones_por_mes["Spanish"] = array();
	$placeHoldersactuaciones_por_mes["Spanish"] = array();
	$pageTitlesactuaciones_por_mes["Spanish"] = array();
	$fieldLabelsactuaciones_por_mes["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsactuaciones_por_mes["Spanish"]["Mes"] = "";
	$placeHoldersactuaciones_por_mes["Spanish"]["Mes"] = "";
	$fieldLabelsactuaciones_por_mes["Spanish"]["Actuaciones"] = "Actuaciones";
	$fieldToolTipsactuaciones_por_mes["Spanish"]["Actuaciones"] = "";
	$placeHoldersactuaciones_por_mes["Spanish"]["Actuaciones"] = "";
	if (count($fieldToolTipsactuaciones_por_mes["Spanish"]))
		$tdataactuaciones_por_mes[".isUseToolTips"] = true;
}


	$tdataactuaciones_por_mes[".NCSearch"] = true;

	$tdataactuaciones_por_mes[".ChartRefreshTime"] = 0;


$tdataactuaciones_por_mes[".shortTableName"] = "actuaciones_por_mes";
$tdataactuaciones_por_mes[".nSecOptions"] = 0;

$tdataactuaciones_por_mes[".mainTableOwnerID"] = "";
$tdataactuaciones_por_mes[".entityType"] = 9;
$tdataactuaciones_por_mes[".connId"] = "GCC_at_S00001_CCAD01";


$tdataactuaciones_por_mes[".strOriginalTableName"] = "Actuaciones Por Mes";

	



$tdataactuaciones_por_mes[".showAddInPopup"] = false;

$tdataactuaciones_por_mes[".showEditInPopup"] = false;

$tdataactuaciones_por_mes[".showViewInPopup"] = false;

$tdataactuaciones_por_mes[".listAjax"] = false;
//	temporary
//$tdataactuaciones_por_mes[".listAjax"] = false;

	$tdataactuaciones_por_mes[".audit"] = false;

	$tdataactuaciones_por_mes[".locking"] = false;


$pages = $tdataactuaciones_por_mes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactuaciones_por_mes[".edit"] = true;
	$tdataactuaciones_por_mes[".afterEditAction"] = 1;
	$tdataactuaciones_por_mes[".closePopupAfterEdit"] = 1;
	$tdataactuaciones_por_mes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactuaciones_por_mes[".add"] = true;
$tdataactuaciones_por_mes[".afterAddAction"] = 1;
$tdataactuaciones_por_mes[".closePopupAfterAdd"] = 1;
$tdataactuaciones_por_mes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactuaciones_por_mes[".list"] = true;
}



$tdataactuaciones_por_mes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactuaciones_por_mes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactuaciones_por_mes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactuaciones_por_mes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactuaciones_por_mes[".printFriendly"] = true;
}



$tdataactuaciones_por_mes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactuaciones_por_mes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactuaciones_por_mes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactuaciones_por_mes[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																															

$tdataactuaciones_por_mes[".ajaxCodeSnippetAdded"] = false;

$tdataactuaciones_por_mes[".buttonsAdded"] = false;

$tdataactuaciones_por_mes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactuaciones_por_mes[".isUseTimeForSearch"] = false;


$tdataactuaciones_por_mes[".badgeColor"] = "6DA5C8";


$tdataactuaciones_por_mes[".allSearchFields"] = array();
$tdataactuaciones_por_mes[".filterFields"] = array();
$tdataactuaciones_por_mes[".requiredSearchFields"] = array();

$tdataactuaciones_por_mes[".googleLikeFields"] = array();
$tdataactuaciones_por_mes[".googleLikeFields"][] = "Mes";
$tdataactuaciones_por_mes[".googleLikeFields"][] = "Actuaciones";



$tdataactuaciones_por_mes[".tableType"] = "chart";

$tdataactuaciones_por_mes[".printerPageOrientation"] = 0;
$tdataactuaciones_por_mes[".nPrinterPageScale"] = 100;

$tdataactuaciones_por_mes[".nPrinterSplitRecords"] = 40;

$tdataactuaciones_por_mes[".geocodingEnabled"] = false;



// chart settings
$tdataactuaciones_por_mes[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdataactuaciones_por_mes[".strOrderBy"] = $tstrOrderBy;

$tdataactuaciones_por_mes[".orderindexes"] = array();


$tdataactuaciones_por_mes[".sqlHead"] = "";
$tdataactuaciones_por_mes[".sqlFrom"] = "";
$tdataactuaciones_por_mes[".sqlWhereExpr"] = "";
$tdataactuaciones_por_mes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactuaciones_por_mes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactuaciones_por_mes[".arrGroupsPerPage"] = $arrGPP;

$tdataactuaciones_por_mes[".highlightSearchResults"] = true;

$tableKeysactuaciones_por_mes = array();
$tdataactuaciones_por_mes[".Keys"] = $tableKeysactuaciones_por_mes;


$tdataactuaciones_por_mes[".hideMobileList"] = array();




//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Actuaciones_Por_Mes","Mes");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["FullName"] = "Mes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataactuaciones_por_mes["Mes"] = $fdata;
		$tdataactuaciones_por_mes[".searchableFields"][] = "Mes";
//	Actuaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Actuaciones";
	$fdata["GoodName"] = "Actuaciones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Actuaciones_Por_Mes","Actuaciones");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Actuaciones";

	
		$fdata["FullName"] = "Actuaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataactuaciones_por_mes["Actuaciones"] = $fdata;
		$tdataactuaciones_por_mes[".searchableFields"][] = "Actuaciones";

$tdataactuaciones_por_mes[".chartLabelField"] = "Mes";
$tdataactuaciones_por_mes[".chartSeries"] = array();
$tdataactuaciones_por_mes[".chartSeries"][] = array(
	"field" => "Actuaciones",
	"total" => ""
);
	$tdataactuaciones_por_mes[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Actuaciones Por Mes</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataactuaciones_por_mes[".chartXml"] .= '<attr value="0">
			<attr value="name">Actuaciones</attr>';
	$tdataactuaciones_por_mes[".chartXml"] .= '</attr>';
	$tdataactuaciones_por_mes[".chartXml"] .= '<attr value="1">
		<attr value="name">Mes</attr>
	</attr>';
	$tdataactuaciones_por_mes[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataactuaciones_por_mes[".chartXml"] .= '<attr value="head">'.xmlencode("Actuaciones Por Mes").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataactuaciones_por_mes[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataactuaciones_por_mes[".chartXml"] .= '<attr value="0">
		<attr value="name">Mes</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Actuaciones_Por_Mes","Mes")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataactuaciones_por_mes[".chartXml"] .= '<attr value="1">
		<attr value="name">Actuaciones</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Actuaciones_Por_Mes","Actuaciones")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataactuaciones_por_mes[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Actuaciones Por Mes</attr>
<attr value="short_table_name">actuaciones_por_mes</attr>
</attr>

</chart>';

$tables_data["Actuaciones Por Mes"]=&$tdataactuaciones_por_mes;
$field_labels["Actuaciones_Por_Mes"] = &$fieldLabelsactuaciones_por_mes;
$fieldToolTips["Actuaciones_Por_Mes"] = &$fieldToolTipsactuaciones_por_mes;
$placeHolders["Actuaciones_Por_Mes"] = &$placeHoldersactuaciones_por_mes;
$page_titles["Actuaciones_Por_Mes"] = &$pageTitlesactuaciones_por_mes;


changeTextControlsToDate( "Actuaciones Por Mes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Actuaciones Por Mes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Actuaciones Por Mes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/actuaciones_por_mes_ops.php" ) );



	
		;

		

$tdataactuaciones_por_mes[".sqlquery"] = $queryData_actuaciones_por_mes;



$tdataactuaciones_por_mes[".hasEvents"] = false;

?>