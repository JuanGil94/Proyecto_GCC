<?php
$tdataconsulta_p_blica = array();
$tdataconsulta_p_blica[".searchableFields"] = array();
$tdataconsulta_p_blica[".ShortName"] = "consulta_p_blica";
$tdataconsulta_p_blica[".OwnerID"] = "";
$tdataconsulta_p_blica[".OriginalTable"] = "Consulta Pública";


$tdataconsulta_p_blica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_p_blica[".originalPagesByType"] = $tdataconsulta_p_blica[".pagesByType"];
$tdataconsulta_p_blica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_p_blica[".originalPages"] = $tdataconsulta_p_blica[".pages"];
$tdataconsulta_p_blica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_p_blica[".originalDefaultPages"] = $tdataconsulta_p_blica[".defaultPages"];

//	field labels
$fieldLabelsconsulta_p_blica = array();
$fieldToolTipsconsulta_p_blica = array();
$pageTitlesconsulta_p_blica = array();
$placeHoldersconsulta_p_blica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_p_blica["Spanish"] = array();
	$fieldToolTipsconsulta_p_blica["Spanish"] = array();
	$placeHoldersconsulta_p_blica["Spanish"] = array();
	$pageTitlesconsulta_p_blica["Spanish"] = array();
	$fieldLabelsconsulta_p_blica["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsconsulta_p_blica["Spanish"]["SancionadoId"] = "";
	$placeHoldersconsulta_p_blica["Spanish"]["SancionadoId"] = "";
	$fieldLabelsconsulta_p_blica["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsconsulta_p_blica["Spanish"]["Documento"] = "";
	$placeHoldersconsulta_p_blica["Spanish"]["Documento"] = "";
	$fieldLabelsconsulta_p_blica["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsconsulta_p_blica["Spanish"]["Sancionado"] = "";
	$placeHoldersconsulta_p_blica["Spanish"]["Sancionado"] = "";
	if (count($fieldToolTipsconsulta_p_blica["Spanish"]))
		$tdataconsulta_p_blica[".isUseToolTips"] = true;
}


	$tdataconsulta_p_blica[".NCSearch"] = true;


	$tdataconsulta_p_blica[".scrollGridBody"] = true;

$tdataconsulta_p_blica[".shortTableName"] = "consulta_p_blica";
$tdataconsulta_p_blica[".nSecOptions"] = 0;

$tdataconsulta_p_blica[".mainTableOwnerID"] = "";
$tdataconsulta_p_blica[".entityType"] = 6;
$tdataconsulta_p_blica[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconsulta_p_blica[".strOriginalTableName"] = "Consulta Pública";

	



$tdataconsulta_p_blica[".showAddInPopup"] = false;

$tdataconsulta_p_blica[".showEditInPopup"] = false;

$tdataconsulta_p_blica[".showViewInPopup"] = false;

$tdataconsulta_p_blica[".listAjax"] = false;
//	temporary
//$tdataconsulta_p_blica[".listAjax"] = false;

	$tdataconsulta_p_blica[".audit"] = false;

	$tdataconsulta_p_blica[".locking"] = false;


$pages = $tdataconsulta_p_blica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_p_blica[".edit"] = true;
	$tdataconsulta_p_blica[".afterEditAction"] = 1;
	$tdataconsulta_p_blica[".closePopupAfterEdit"] = 1;
	$tdataconsulta_p_blica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_p_blica[".add"] = true;
$tdataconsulta_p_blica[".afterAddAction"] = 1;
$tdataconsulta_p_blica[".closePopupAfterAdd"] = 1;
$tdataconsulta_p_blica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_p_blica[".list"] = true;
}



$tdataconsulta_p_blica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_p_blica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_p_blica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_p_blica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_p_blica[".printFriendly"] = true;
}



$tdataconsulta_p_blica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_p_blica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_p_blica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_p_blica[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																														

$tdataconsulta_p_blica[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_p_blica[".buttonsAdded"] = false;

$tdataconsulta_p_blica[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_p_blica[".isUseTimeForSearch"] = false;


$tdataconsulta_p_blica[".badgeColor"] = "D2AF80";


$tdataconsulta_p_blica[".allSearchFields"] = array();
$tdataconsulta_p_blica[".filterFields"] = array();
$tdataconsulta_p_blica[".requiredSearchFields"] = array();

$tdataconsulta_p_blica[".googleLikeFields"] = array();
$tdataconsulta_p_blica[".googleLikeFields"][] = "Documento";
$tdataconsulta_p_blica[".googleLikeFields"][] = "Sancionado";




$tdataconsulta_p_blica[".printerPageOrientation"] = 0;
$tdataconsulta_p_blica[".nPrinterPageScale"] = 100;

$tdataconsulta_p_blica[".nPrinterSplitRecords"] = 40;

$tdataconsulta_p_blica[".geocodingEnabled"] = false;




$tdataconsulta_p_blica[".isDisplayLoading"] = true;






$tdataconsulta_p_blica[".pageSize"] = 20;

$tdataconsulta_p_blica[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulta_p_blica[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_p_blica[".orderindexes"] = array();


$tdataconsulta_p_blica[".sqlHead"] = "";
$tdataconsulta_p_blica[".sqlFrom"] = "";
$tdataconsulta_p_blica[".sqlWhereExpr"] = "";
$tdataconsulta_p_blica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_p_blica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_p_blica[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_p_blica[".highlightSearchResults"] = true;

$tableKeysconsulta_p_blica = array();
$tableKeysconsulta_p_blica[] = "SancionadoId";
$tdataconsulta_p_blica[".Keys"] = $tableKeysconsulta_p_blica;


$tdataconsulta_p_blica[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_P_blica","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

	
		$fdata["FullName"] = "SancionadoId";

	
	
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


	$tdataconsulta_p_blica["SancionadoId"] = $fdata;
		$tdataconsulta_p_blica[".searchableFields"][] = "SancionadoId";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_P_blica","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["FullName"] = "Documento";

	
	
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


	$tdataconsulta_p_blica["Documento"] = $fdata;
		$tdataconsulta_p_blica[".searchableFields"][] = "Documento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_P_blica","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["FullName"] = "Sancionado";

	
	
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


	$tdataconsulta_p_blica["Sancionado"] = $fdata;
		$tdataconsulta_p_blica[".searchableFields"][] = "Sancionado";


$tables_data["Consulta Pública"]=&$tdataconsulta_p_blica;
$field_labels["Consulta_P_blica"] = &$fieldLabelsconsulta_p_blica;
$fieldToolTips["Consulta_P_blica"] = &$fieldToolTipsconsulta_p_blica;
$placeHolders["Consulta_P_blica"] = &$placeHoldersconsulta_p_blica;
$page_titles["Consulta_P_blica"] = &$pageTitlesconsulta_p_blica;


changeTextControlsToDate( "Consulta Pública" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consulta Pública"] = array();
//	Consulta Pública Notificación Detalle
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Consulta Pública Notificación Detalle";
		$detailsParam["dOriginalTable"] = "Consulta Pública Notificación Detalle";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consulta_p_blica_notificaci_n_detalle";
	$detailsParam["dCaptionTable"] = GetTableCaption("Consulta_P_blica_Notificaci_n_Detalle");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Consulta Pública"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Consulta Pública"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Consulta Pública"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["Consulta Pública"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Consulta Pública"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consulta Pública"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/consulta_p_blica_ops.php" ) );



	
		;

			

$tdataconsulta_p_blica[".sqlquery"] = $queryData_consulta_p_blica;



include_once(getabspath("include/consulta_p_blica_events.php"));
$tdataconsulta_p_blica[".hasEvents"] = true;

?>