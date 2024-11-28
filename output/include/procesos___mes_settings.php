<?php
$tdataprocesos___mes = array();
$tdataprocesos___mes[".searchableFields"] = array();
$tdataprocesos___mes[".ShortName"] = "procesos___mes";
$tdataprocesos___mes[".OwnerID"] = "";
$tdataprocesos___mes[".OriginalTable"] = "Procesos - Mes";


$tdataprocesos___mes[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataprocesos___mes[".originalPagesByType"] = $tdataprocesos___mes[".pagesByType"];
$tdataprocesos___mes[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataprocesos___mes[".originalPages"] = $tdataprocesos___mes[".pages"];
$tdataprocesos___mes[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataprocesos___mes[".originalDefaultPages"] = $tdataprocesos___mes[".defaultPages"];

//	field labels
$fieldLabelsprocesos___mes = array();
$fieldToolTipsprocesos___mes = array();
$pageTitlesprocesos___mes = array();
$placeHoldersprocesos___mes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesos___mes["Spanish"] = array();
	$fieldToolTipsprocesos___mes["Spanish"] = array();
	$placeHoldersprocesos___mes["Spanish"] = array();
	$pageTitlesprocesos___mes["Spanish"] = array();
	$fieldLabelsprocesos___mes["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsprocesos___mes["Spanish"]["Mes"] = "";
	$placeHoldersprocesos___mes["Spanish"]["Mes"] = "";
	$fieldLabelsprocesos___mes["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipsprocesos___mes["Spanish"]["ProcTota"] = "";
	$placeHoldersprocesos___mes["Spanish"]["ProcTota"] = "";
	$fieldLabelsprocesos___mes["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipsprocesos___mes["Spanish"]["ObliTota"] = "";
	$placeHoldersprocesos___mes["Spanish"]["ObliTota"] = "";
	if (count($fieldToolTipsprocesos___mes["Spanish"]))
		$tdataprocesos___mes[".isUseToolTips"] = true;
}


	$tdataprocesos___mes[".NCSearch"] = true;

	$tdataprocesos___mes[".ChartRefreshTime"] = 0;


$tdataprocesos___mes[".shortTableName"] = "procesos___mes";
$tdataprocesos___mes[".nSecOptions"] = 0;

$tdataprocesos___mes[".mainTableOwnerID"] = "";
$tdataprocesos___mes[".entityType"] = 9;
$tdataprocesos___mes[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesos___mes[".strOriginalTableName"] = "Procesos - Mes";

	



$tdataprocesos___mes[".showAddInPopup"] = false;

$tdataprocesos___mes[".showEditInPopup"] = false;

$tdataprocesos___mes[".showViewInPopup"] = false;

$tdataprocesos___mes[".listAjax"] = false;
//	temporary
//$tdataprocesos___mes[".listAjax"] = false;

	$tdataprocesos___mes[".audit"] = false;

	$tdataprocesos___mes[".locking"] = false;


$pages = $tdataprocesos___mes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesos___mes[".edit"] = true;
	$tdataprocesos___mes[".afterEditAction"] = 1;
	$tdataprocesos___mes[".closePopupAfterEdit"] = 1;
	$tdataprocesos___mes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesos___mes[".add"] = true;
$tdataprocesos___mes[".afterAddAction"] = 1;
$tdataprocesos___mes[".closePopupAfterAdd"] = 1;
$tdataprocesos___mes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesos___mes[".list"] = true;
}



$tdataprocesos___mes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesos___mes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesos___mes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesos___mes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesos___mes[".printFriendly"] = true;
}



$tdataprocesos___mes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesos___mes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesos___mes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesos___mes[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																			

$tdataprocesos___mes[".ajaxCodeSnippetAdded"] = false;

$tdataprocesos___mes[".buttonsAdded"] = false;

$tdataprocesos___mes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesos___mes[".isUseTimeForSearch"] = false;


$tdataprocesos___mes[".badgeColor"] = "BC8F8F";


$tdataprocesos___mes[".allSearchFields"] = array();
$tdataprocesos___mes[".filterFields"] = array();
$tdataprocesos___mes[".requiredSearchFields"] = array();

$tdataprocesos___mes[".googleLikeFields"] = array();
$tdataprocesos___mes[".googleLikeFields"][] = "Mes";
$tdataprocesos___mes[".googleLikeFields"][] = "ProcTota";
$tdataprocesos___mes[".googleLikeFields"][] = "ObliTota";



$tdataprocesos___mes[".tableType"] = "chart";

$tdataprocesos___mes[".printerPageOrientation"] = 0;
$tdataprocesos___mes[".nPrinterPageScale"] = 100;

$tdataprocesos___mes[".nPrinterSplitRecords"] = 40;

$tdataprocesos___mes[".geocodingEnabled"] = false;



// chart settings
$tdataprocesos___mes[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdataprocesos___mes[".strOrderBy"] = $tstrOrderBy;

$tdataprocesos___mes[".orderindexes"] = array();


$tdataprocesos___mes[".sqlHead"] = "";
$tdataprocesos___mes[".sqlFrom"] = "";
$tdataprocesos___mes[".sqlWhereExpr"] = "";
$tdataprocesos___mes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesos___mes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesos___mes[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesos___mes[".highlightSearchResults"] = true;

$tableKeysprocesos___mes = array();
$tdataprocesos___mes[".Keys"] = $tableKeysprocesos___mes;


$tdataprocesos___mes[".hideMobileList"] = array();




//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos___Mes","Mes");
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


	$tdataprocesos___mes["Mes"] = $fdata;
		$tdataprocesos___mes[".searchableFields"][] = "Mes";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos___Mes","ProcTota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcTota";

	
		$fdata["FullName"] = "ProcTota";

	
	
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


	$tdataprocesos___mes["ProcTota"] = $fdata;
		$tdataprocesos___mes[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos___Mes","ObliTota");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ObliTota";

	
		$fdata["FullName"] = "ObliTota";

	
	
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


	$tdataprocesos___mes["ObliTota"] = $fdata;
		$tdataprocesos___mes[".searchableFields"][] = "ObliTota";

$tdataprocesos___mes[".chartLabelField"] = "Mes";
$tdataprocesos___mes[".chartSeries"] = array();
$tdataprocesos___mes[".chartSeries"][] = array(
	"field" => "ProcTota",
	"total" => ""
);
	$tdataprocesos___mes[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Procesos - Mes</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdataprocesos___mes[".chartXml"] .= '<attr value="0">
			<attr value="name">ProcTota</attr>';
	$tdataprocesos___mes[".chartXml"] .= '</attr>';
	$tdataprocesos___mes[".chartXml"] .= '<attr value="1">
		<attr value="name">Mes</attr>
	</attr>';
	$tdataprocesos___mes[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataprocesos___mes[".chartXml"] .= '<attr value="head">'.xmlencode("Procesos - Mes").'</attr>
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
$tdataprocesos___mes[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataprocesos___mes[".chartXml"] .= '<attr value="0">
		<attr value="name">Mes</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Procesos___Mes","Mes")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataprocesos___mes[".chartXml"] .= '<attr value="1">
		<attr value="name">ProcTota</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Procesos___Mes","ProcTota")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataprocesos___mes[".chartXml"] .= '<attr value="2">
		<attr value="name">ObliTota</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Procesos___Mes","ObliTota")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataprocesos___mes[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Procesos - Mes</attr>
<attr value="short_table_name">procesos___mes</attr>
</attr>

</chart>';

$tables_data["Procesos - Mes"]=&$tdataprocesos___mes;
$field_labels["Procesos___Mes"] = &$fieldLabelsprocesos___mes;
$fieldToolTips["Procesos___Mes"] = &$fieldToolTipsprocesos___mes;
$placeHolders["Procesos___Mes"] = &$placeHoldersprocesos___mes;
$page_titles["Procesos___Mes"] = &$pageTitlesprocesos___mes;


changeTextControlsToDate( "Procesos - Mes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Procesos - Mes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Procesos - Mes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/procesos___mes_ops.php" ) );



	
		;

			

$tdataprocesos___mes[".sqlquery"] = $queryData_procesos___mes;



$tdataprocesos___mes[".hasEvents"] = false;

?>