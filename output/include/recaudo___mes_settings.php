<?php
$tdatarecaudo___mes = array();
$tdatarecaudo___mes[".searchableFields"] = array();
$tdatarecaudo___mes[".ShortName"] = "recaudo___mes";
$tdatarecaudo___mes[".OwnerID"] = "";
$tdatarecaudo___mes[".OriginalTable"] = "Recaudo - Mes";


$tdatarecaudo___mes[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatarecaudo___mes[".originalPagesByType"] = $tdatarecaudo___mes[".pagesByType"];
$tdatarecaudo___mes[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatarecaudo___mes[".originalPages"] = $tdatarecaudo___mes[".pages"];
$tdatarecaudo___mes[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatarecaudo___mes[".originalDefaultPages"] = $tdatarecaudo___mes[".defaultPages"];

//	field labels
$fieldLabelsrecaudo___mes = array();
$fieldToolTipsrecaudo___mes = array();
$pageTitlesrecaudo___mes = array();
$placeHoldersrecaudo___mes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecaudo___mes["Spanish"] = array();
	$fieldToolTipsrecaudo___mes["Spanish"] = array();
	$placeHoldersrecaudo___mes["Spanish"] = array();
	$pageTitlesrecaudo___mes["Spanish"] = array();
	$fieldLabelsrecaudo___mes["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsrecaudo___mes["Spanish"]["Mes"] = "";
	$placeHoldersrecaudo___mes["Spanish"]["Mes"] = "";
	$fieldLabelsrecaudo___mes["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipsrecaudo___mes["Spanish"]["ObliReca"] = "";
	$placeHoldersrecaudo___mes["Spanish"]["ObliReca"] = "";
	if (count($fieldToolTipsrecaudo___mes["Spanish"]))
		$tdatarecaudo___mes[".isUseToolTips"] = true;
}


	$tdatarecaudo___mes[".NCSearch"] = true;

	$tdatarecaudo___mes[".ChartRefreshTime"] = 0;


$tdatarecaudo___mes[".shortTableName"] = "recaudo___mes";
$tdatarecaudo___mes[".nSecOptions"] = 0;

$tdatarecaudo___mes[".mainTableOwnerID"] = "";
$tdatarecaudo___mes[".entityType"] = 9;
$tdatarecaudo___mes[".connId"] = "GCC_at_S00001_CCAD01";


$tdatarecaudo___mes[".strOriginalTableName"] = "Recaudo - Mes";

	



$tdatarecaudo___mes[".showAddInPopup"] = false;

$tdatarecaudo___mes[".showEditInPopup"] = false;

$tdatarecaudo___mes[".showViewInPopup"] = false;

$tdatarecaudo___mes[".listAjax"] = false;
//	temporary
//$tdatarecaudo___mes[".listAjax"] = false;

	$tdatarecaudo___mes[".audit"] = false;

	$tdatarecaudo___mes[".locking"] = false;


$pages = $tdatarecaudo___mes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecaudo___mes[".edit"] = true;
	$tdatarecaudo___mes[".afterEditAction"] = 1;
	$tdatarecaudo___mes[".closePopupAfterEdit"] = 1;
	$tdatarecaudo___mes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecaudo___mes[".add"] = true;
$tdatarecaudo___mes[".afterAddAction"] = 1;
$tdatarecaudo___mes[".closePopupAfterAdd"] = 1;
$tdatarecaudo___mes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecaudo___mes[".list"] = true;
}



$tdatarecaudo___mes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecaudo___mes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecaudo___mes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecaudo___mes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecaudo___mes[".printFriendly"] = true;
}



$tdatarecaudo___mes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecaudo___mes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecaudo___mes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecaudo___mes[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																						

$tdatarecaudo___mes[".ajaxCodeSnippetAdded"] = false;

$tdatarecaudo___mes[".buttonsAdded"] = false;

$tdatarecaudo___mes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecaudo___mes[".isUseTimeForSearch"] = false;


$tdatarecaudo___mes[".badgeColor"] = "1E90FF";


$tdatarecaudo___mes[".allSearchFields"] = array();
$tdatarecaudo___mes[".filterFields"] = array();
$tdatarecaudo___mes[".requiredSearchFields"] = array();

$tdatarecaudo___mes[".googleLikeFields"] = array();
$tdatarecaudo___mes[".googleLikeFields"][] = "Mes";
$tdatarecaudo___mes[".googleLikeFields"][] = "ObliReca";



$tdatarecaudo___mes[".tableType"] = "chart";

$tdatarecaudo___mes[".printerPageOrientation"] = 0;
$tdatarecaudo___mes[".nPrinterPageScale"] = 100;

$tdatarecaudo___mes[".nPrinterSplitRecords"] = 40;

$tdatarecaudo___mes[".geocodingEnabled"] = false;



// chart settings
$tdatarecaudo___mes[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdatarecaudo___mes[".strOrderBy"] = $tstrOrderBy;

$tdatarecaudo___mes[".orderindexes"] = array();


$tdatarecaudo___mes[".sqlHead"] = "";
$tdatarecaudo___mes[".sqlFrom"] = "";
$tdatarecaudo___mes[".sqlWhereExpr"] = "";
$tdatarecaudo___mes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecaudo___mes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecaudo___mes[".arrGroupsPerPage"] = $arrGPP;

$tdatarecaudo___mes[".highlightSearchResults"] = true;

$tableKeysrecaudo___mes = array();
$tdatarecaudo___mes[".Keys"] = $tableKeysrecaudo___mes;


$tdatarecaudo___mes[".hideMobileList"] = array();




//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo___Mes","Mes");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["FullName"] = "Mes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatarecaudo___mes["Mes"] = $fdata;
		$tdatarecaudo___mes[".searchableFields"][] = "Mes";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudo___Mes","ObliReca");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliReca";

	
		$fdata["FullName"] = "ObliReca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatarecaudo___mes["ObliReca"] = $fdata;
		$tdatarecaudo___mes[".searchableFields"][] = "ObliReca";

$tdatarecaudo___mes[".chartLabelField"] = "Mes";
$tdatarecaudo___mes[".chartSeries"] = array();
$tdatarecaudo___mes[".chartSeries"][] = array(
	"field" => "ObliReca",
	"total" => ""
);
	$tdatarecaudo___mes[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Recaudo - Mes</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatarecaudo___mes[".chartXml"] .= '<attr value="0">
			<attr value="name">ObliReca</attr>';
	$tdatarecaudo___mes[".chartXml"] .= '</attr>';
	$tdatarecaudo___mes[".chartXml"] .= '<attr value="1">
		<attr value="name">Mes</attr>
	</attr>';
	$tdatarecaudo___mes[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatarecaudo___mes[".chartXml"] .= '<attr value="head">'.xmlencode("Recaudo - Mes").'</attr>
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
<attr value="linestyle">1</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatarecaudo___mes[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatarecaudo___mes[".chartXml"] .= '<attr value="0">
		<attr value="name">Mes</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Recaudo___Mes","Mes")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarecaudo___mes[".chartXml"] .= '<attr value="1">
		<attr value="name">ObliReca</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Recaudo___Mes","ObliReca")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatarecaudo___mes[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Recaudo - Mes</attr>
<attr value="short_table_name">recaudo___mes</attr>
</attr>

</chart>';

$tables_data["Recaudo - Mes"]=&$tdatarecaudo___mes;
$field_labels["Recaudo___Mes"] = &$fieldLabelsrecaudo___mes;
$fieldToolTips["Recaudo___Mes"] = &$fieldToolTipsrecaudo___mes;
$placeHolders["Recaudo___Mes"] = &$placeHoldersrecaudo___mes;
$page_titles["Recaudo___Mes"] = &$pageTitlesrecaudo___mes;


changeTextControlsToDate( "Recaudo - Mes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Recaudo - Mes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Recaudo - Mes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/recaudo___mes_ops.php" ) );



	
		;

		

$tdatarecaudo___mes[".sqlquery"] = $queryData_recaudo___mes;



$tdatarecaudo___mes[".hasEvents"] = false;

?>