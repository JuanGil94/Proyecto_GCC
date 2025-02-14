<?php
$tdatatotal_recaudado = array();
$tdatatotal_recaudado[".searchableFields"] = array();
$tdatatotal_recaudado[".ShortName"] = "total_recaudado";
$tdatatotal_recaudado[".OwnerID"] = "";
$tdatatotal_recaudado[".OriginalTable"] = "Tableros_RecaudoSeccional";


$tdatatotal_recaudado[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatotal_recaudado[".originalPagesByType"] = $tdatatotal_recaudado[".pagesByType"];
$tdatatotal_recaudado[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatotal_recaudado[".originalPages"] = $tdatatotal_recaudado[".pages"];
$tdatatotal_recaudado[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatotal_recaudado[".originalDefaultPages"] = $tdatatotal_recaudado[".defaultPages"];

//	field labels
$fieldLabelstotal_recaudado = array();
$fieldToolTipstotal_recaudado = array();
$pageTitlestotal_recaudado = array();
$placeHolderstotal_recaudado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstotal_recaudado["Spanish"] = array();
	$fieldToolTipstotal_recaudado["Spanish"] = array();
	$placeHolderstotal_recaudado["Spanish"] = array();
	$pageTitlestotal_recaudado["Spanish"] = array();
	$fieldLabelstotal_recaudado["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipstotal_recaudado["Spanish"]["Seccional"] = "";
	$placeHolderstotal_recaudado["Spanish"]["Seccional"] = "";
	$fieldLabelstotal_recaudado["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipstotal_recaudado["Spanish"]["Porcentaje"] = "";
	$placeHolderstotal_recaudado["Spanish"]["Porcentaje"] = "";
	$fieldLabelstotal_recaudado["Spanish"]["ProcReca"] = "Proc Reca";
	$fieldToolTipstotal_recaudado["Spanish"]["ProcReca"] = "";
	$placeHolderstotal_recaudado["Spanish"]["ProcReca"] = "";
	$fieldLabelstotal_recaudado["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipstotal_recaudado["Spanish"]["ObliReca"] = "";
	$placeHolderstotal_recaudado["Spanish"]["ObliReca"] = "";
	if (count($fieldToolTipstotal_recaudado["Spanish"]))
		$tdatatotal_recaudado[".isUseToolTips"] = true;
}


	$tdatatotal_recaudado[".NCSearch"] = true;

	$tdatatotal_recaudado[".ChartRefreshTime"] = 0;


$tdatatotal_recaudado[".shortTableName"] = "total_recaudado";
$tdatatotal_recaudado[".nSecOptions"] = 0;

$tdatatotal_recaudado[".mainTableOwnerID"] = "";
$tdatatotal_recaudado[".entityType"] = 9;
$tdatatotal_recaudado[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatotal_recaudado[".strOriginalTableName"] = "Tableros_RecaudoSeccional";

	



$tdatatotal_recaudado[".showAddInPopup"] = false;

$tdatatotal_recaudado[".showEditInPopup"] = false;

$tdatatotal_recaudado[".showViewInPopup"] = false;

$tdatatotal_recaudado[".listAjax"] = false;
//	temporary
//$tdatatotal_recaudado[".listAjax"] = false;

	$tdatatotal_recaudado[".audit"] = false;

	$tdatatotal_recaudado[".locking"] = false;


$pages = $tdatatotal_recaudado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatotal_recaudado[".edit"] = true;
	$tdatatotal_recaudado[".afterEditAction"] = 1;
	$tdatatotal_recaudado[".closePopupAfterEdit"] = 1;
	$tdatatotal_recaudado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatotal_recaudado[".add"] = true;
$tdatatotal_recaudado[".afterAddAction"] = 1;
$tdatatotal_recaudado[".closePopupAfterAdd"] = 1;
$tdatatotal_recaudado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatotal_recaudado[".list"] = true;
}



$tdatatotal_recaudado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatotal_recaudado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatotal_recaudado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatotal_recaudado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatotal_recaudado[".printFriendly"] = true;
}



$tdatatotal_recaudado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatotal_recaudado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatotal_recaudado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatotal_recaudado[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																									

$tdatatotal_recaudado[".ajaxCodeSnippetAdded"] = false;

$tdatatotal_recaudado[".buttonsAdded"] = false;

$tdatatotal_recaudado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatotal_recaudado[".isUseTimeForSearch"] = false;


$tdatatotal_recaudado[".badgeColor"] = "4169E1";


$tdatatotal_recaudado[".allSearchFields"] = array();
$tdatatotal_recaudado[".filterFields"] = array();
$tdatatotal_recaudado[".requiredSearchFields"] = array();

$tdatatotal_recaudado[".googleLikeFields"] = array();
$tdatatotal_recaudado[".googleLikeFields"][] = "Seccional";
$tdatatotal_recaudado[".googleLikeFields"][] = "Porcentaje";
$tdatatotal_recaudado[".googleLikeFields"][] = "ProcReca";
$tdatatotal_recaudado[".googleLikeFields"][] = "ObliReca";



$tdatatotal_recaudado[".tableType"] = "chart";

$tdatatotal_recaudado[".printerPageOrientation"] = 0;
$tdatatotal_recaudado[".nPrinterPageScale"] = 100;

$tdatatotal_recaudado[".nPrinterSplitRecords"] = 40;

$tdatatotal_recaudado[".geocodingEnabled"] = false;



// chart settings
$tdatatotal_recaudado[".chartType"] = "2DDoughnut";
// end of chart settings

$tdatatotal_recaudado[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatatotal_recaudado[".strOrderBy"] = $tstrOrderBy;

$tdatatotal_recaudado[".orderindexes"] = array();


$tdatatotal_recaudado[".sqlHead"] = "";
$tdatatotal_recaudado[".sqlFrom"] = "";
$tdatatotal_recaudado[".sqlWhereExpr"] = "";
$tdatatotal_recaudado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatatotal_recaudado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatotal_recaudado[".arrGroupsPerPage"] = $arrGPP;

$tdatatotal_recaudado[".highlightSearchResults"] = true;

$tableKeystotal_recaudado = array();
$tdatatotal_recaudado[".Keys"] = $tableKeystotal_recaudado;


$tdatatotal_recaudado[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Recaudado","Seccional");
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


	$tdatatotal_recaudado["Seccional"] = $fdata;
		$tdatatotal_recaudado[".searchableFields"][] = "Seccional";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Recaudado","Porcentaje");
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


	$tdatatotal_recaudado["Porcentaje"] = $fdata;
		$tdatatotal_recaudado[".searchableFields"][] = "Porcentaje";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Recaudado","ProcReca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcReca";

	
		$fdata["FullName"] = "ProcReca";

	
	
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


	$tdatatotal_recaudado["ProcReca"] = $fdata;
		$tdatatotal_recaudado[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Total_Recaudado","ObliReca");
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


	$tdatatotal_recaudado["ObliReca"] = $fdata;
		$tdatatotal_recaudado[".searchableFields"][] = "ObliReca";

$tdatatotal_recaudado[".chartLabelField"] = "Seccional";
$tdatatotal_recaudado[".chartSeries"] = array();
$tdatatotal_recaudado[".chartSeries"][] = array(
	"field" => "Porcentaje",
	"total" => ""
);
	$tdatatotal_recaudado[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Total Recaudado</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="0">
			<attr value="name">Porcentaje</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="1">
		<attr value="name">Seccional</attr>
	</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatotal_recaudado[".chartXml"] .= '<attr value="head">'.xmlencode("Total Recaudado").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("Porcentaje").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatatotal_recaudado[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="0">
		<attr value="name">Seccional</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Recaudado","Seccional")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="1">
		<attr value="name">Porcentaje</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Recaudado","Porcentaje")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="2">
		<attr value="name">ProcReca</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Recaudado","ProcReca")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatotal_recaudado[".chartXml"] .= '<attr value="3">
		<attr value="name">ObliReca</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Total_Recaudado","ObliReca")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatotal_recaudado[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Total Recaudado</attr>
<attr value="short_table_name">total_recaudado</attr>
</attr>

</chart>';

$tables_data["Total Recaudado"]=&$tdatatotal_recaudado;
$field_labels["Total_Recaudado"] = &$fieldLabelstotal_recaudado;
$fieldToolTips["Total_Recaudado"] = &$fieldToolTipstotal_recaudado;
$placeHolders["Total_Recaudado"] = &$placeHolderstotal_recaudado;
$page_titles["Total_Recaudado"] = &$pageTitlestotal_recaudado;


changeTextControlsToDate( "Total Recaudado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Total Recaudado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Total Recaudado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/total_recaudado_ops.php" ) );



	
		;

				

$tdatatotal_recaudado[".sqlquery"] = $queryData_total_recaudado;



$tdatatotal_recaudado[".hasEvents"] = false;

?>