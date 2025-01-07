<?php
$tdatatotal_procesos = array();
$tdatatotal_procesos[".searchableFields"] = array();
$tdatatotal_procesos[".ShortName"] = "total_procesos";
$tdatatotal_procesos[".OwnerID"] = "";
$tdatatotal_procesos[".OriginalTable"] = "Tablero de Control Total Procesos";


$tdatatotal_procesos[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatotal_procesos[".originalPagesByType"] = $tdatatotal_procesos[".pagesByType"];
$tdatatotal_procesos[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatotal_procesos[".originalPages"] = $tdatatotal_procesos[".pages"];
$tdatatotal_procesos[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatotal_procesos[".originalDefaultPages"] = $tdatatotal_procesos[".defaultPages"];

//	field labels
$fieldLabelstotal_procesos = array();
$fieldToolTipstotal_procesos = array();
$pageTitlestotal_procesos = array();
$placeHolderstotal_procesos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstotal_procesos["Spanish"] = array();
	$fieldToolTipstotal_procesos["Spanish"] = array();
	$placeHolderstotal_procesos["Spanish"] = array();
	$pageTitlestotal_procesos["Spanish"] = array();
	$fieldLabelstotal_procesos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipstotal_procesos["Spanish"]["Seccional"] = "";
	$placeHolderstotal_procesos["Spanish"]["Seccional"] = "";
	$fieldLabelstotal_procesos["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstotal_procesos["Spanish"]["Porcentaje"] = "";
	$placeHolderstotal_procesos["Spanish"]["Porcentaje"] = "";
	$fieldLabelstotal_procesos["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipstotal_procesos["Spanish"]["ProcTota"] = "";
	$placeHolderstotal_procesos["Spanish"]["ProcTota"] = "";
	$fieldLabelstotal_procesos["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipstotal_procesos["Spanish"]["ObliTota"] = "";
	$placeHolderstotal_procesos["Spanish"]["ObliTota"] = "";
	if (count($fieldToolTipstotal_procesos["Spanish"]))
		$tdatatotal_procesos[".isUseToolTips"] = true;
}


	$tdatatotal_procesos[".NCSearch"] = true;

	$tdatatotal_procesos[".ChartRefreshTime"] = 0;


$tdatatotal_procesos[".shortTableName"] = "total_procesos";
$tdatatotal_procesos[".nSecOptions"] = 0;

$tdatatotal_procesos[".mainTableOwnerID"] = "";
$tdatatotal_procesos[".entityType"] = 9;
$tdatatotal_procesos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatotal_procesos[".strOriginalTableName"] = "Tablero de Control Total Procesos";

	



$tdatatotal_procesos[".showAddInPopup"] = false;

$tdatatotal_procesos[".showEditInPopup"] = false;

$tdatatotal_procesos[".showViewInPopup"] = false;

$tdatatotal_procesos[".listAjax"] = false;
//	temporary
//$tdatatotal_procesos[".listAjax"] = false;

	$tdatatotal_procesos[".audit"] = false;

	$tdatatotal_procesos[".locking"] = false;


$pages = $tdatatotal_procesos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatotal_procesos[".edit"] = true;
	$tdatatotal_procesos[".afterEditAction"] = 1;
	$tdatatotal_procesos[".closePopupAfterEdit"] = 1;
	$tdatatotal_procesos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatotal_procesos[".add"] = true;
$tdatatotal_procesos[".afterAddAction"] = 1;
$tdatatotal_procesos[".closePopupAfterAdd"] = 1;
$tdatatotal_procesos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatotal_procesos[".list"] = true;
}



$tdatatotal_procesos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatotal_procesos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatotal_procesos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatotal_procesos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatotal_procesos[".printFriendly"] = true;
}



$tdatatotal_procesos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatotal_procesos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatotal_procesos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatotal_procesos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdatatotal_procesos[".ajaxCodeSnippetAdded"] = false;

$tdatatotal_procesos[".buttonsAdded"] = false;

$tdatatotal_procesos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatotal_procesos[".isUseTimeForSearch"] = false;


$tdatatotal_procesos[".badgeColor"] = "D2691E";


$tdatatotal_procesos[".allSearchFields"] = array();
$tdatatotal_procesos[".filterFields"] = array();
$tdatatotal_procesos[".requiredSearchFields"] = array();

$tdatatotal_procesos[".googleLikeFields"] = array();
$tdatatotal_procesos[".googleLikeFields"][] = "Seccional";
$tdatatotal_procesos[".googleLikeFields"][] = "Porcentaje";
$tdatatotal_procesos[".googleLikeFields"][] = "ProcTota";
$tdatatotal_procesos[".googleLikeFields"][] = "ObliTota";



$tdatatotal_procesos[".tableType"] = "chart";

$tdatatotal_procesos[".printerPageOrientation"] = 0;
$tdatatotal_procesos[".nPrinterPageScale"] = 100;

$tdatatotal_procesos[".nPrinterSplitRecords"] = 40;

$tdatatotal_procesos[".geocodingEnabled"] = false;



// chart settings
$tdatatotal_procesos[".chartType"] = "2DDoughnut";
// end of chart settings

$tdatatotal_procesos[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatatotal_procesos[".strOrderBy"] = $tstrOrderBy;

$tdatatotal_procesos[".orderindexes"] = array();


$tdatatotal_procesos[".sqlHead"] = "";
$tdatatotal_procesos[".sqlFrom"] = "";
$tdatatotal_procesos[".sqlWhereExpr"] = "";
$tdatatotal_procesos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatotal_procesos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatotal_procesos[".arrGroupsPerPage"] = $arrGPP;

$tdatatotal_procesos[".highlightSearchResults"] = true;

$tableKeystotal_procesos = array();
$tdatatotal_procesos[".Keys"] = $tableKeystotal_procesos;


$tdatatotal_procesos[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Procesos","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["FullName"] = "Seccional";

	
	
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


	$tdatatotal_procesos["Seccional"] = $fdata;
		$tdatatotal_procesos[".searchableFields"][] = "Seccional";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Procesos","Porcentaje");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Porcentaje";

	
		$fdata["FullName"] = "Porcentaje";

	
	
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


	$tdatatotal_procesos["Porcentaje"] = $fdata;
		$tdatatotal_procesos[".searchableFields"][] = "Porcentaje";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Procesos","ProcTota");
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


	$tdatatotal_procesos["ProcTota"] = $fdata;
		$tdatatotal_procesos[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Procesos","ObliTota");
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


	$tdatatotal_procesos["ObliTota"] = $fdata;
		$tdatatotal_procesos[".searchableFields"][] = "ObliTota";

$tdatatotal_procesos[".chartLabelField"] = "Seccional";
$tdatatotal_procesos[".chartSeries"] = array();
$tdatatotal_procesos[".chartSeries"][] = array(
	"field" => "ProcTota",
	"total" => ""
);
$tdatatotal_procesos[".chartSeries"][] = array(
	"field" => "ObliTota",
	"total" => ""
);
	$tdatatotal_procesos[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Total Procesos</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="0">
			<attr value="name">ProcTota</attr>';
	$tdatatotal_procesos[".chartXml"] .= '</attr>';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="1">
			<attr value="name">ObliTota</attr>';
	$tdatatotal_procesos[".chartXml"] .= '</attr>';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="2">
		<attr value="name">Seccional</attr>
	</attr>';
	$tdatatotal_procesos[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatotal_procesos[".chartXml"] .= '<attr value="head">'.xmlencode("Total Procesos").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("Porcentaje").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
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
$tdatatotal_procesos[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="0">
		<attr value="name">Seccional</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Procesos","Seccional")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="1">
		<attr value="name">Porcentaje</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Procesos","Porcentaje")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="2">
		<attr value="name">ProcTota</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Procesos","ProcTota")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_procesos[".chartXml"] .= '<attr value="3">
		<attr value="name">ObliTota</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Procesos","ObliTota")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatotal_procesos[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Total Procesos</attr>
<attr value="short_table_name">total_procesos</attr>
</attr>

</chart>';

$tables_data["Total Procesos"]=&$tdatatotal_procesos;
$field_labels["Total_Procesos"] = &$fieldLabelstotal_procesos;
$fieldToolTips["Total_Procesos"] = &$fieldToolTipstotal_procesos;
$placeHolders["Total_Procesos"] = &$placeHolderstotal_procesos;
$page_titles["Total_Procesos"] = &$pageTitlestotal_procesos;


changeTextControlsToDate( "Total Procesos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Total Procesos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Total Procesos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/total_procesos_ops.php" ) );



	
		;

				

$tdatatotal_procesos[".sqlquery"] = $queryData_total_procesos;



$tdatatotal_procesos[".hasEvents"] = false;

?>