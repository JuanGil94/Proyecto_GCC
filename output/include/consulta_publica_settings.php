<?php
$tdataconsulta_publica = array();
$tdataconsulta_publica[".searchableFields"] = array();
$tdataconsulta_publica[".ShortName"] = "consulta_publica";
$tdataconsulta_publica[".OwnerID"] = "SancionadoId";
$tdataconsulta_publica[".OriginalTable"] = "Consulta Publica";


$tdataconsulta_publica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_publica[".originalPagesByType"] = $tdataconsulta_publica[".pagesByType"];
$tdataconsulta_publica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_publica[".originalPages"] = $tdataconsulta_publica[".pages"];
$tdataconsulta_publica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_publica[".originalDefaultPages"] = $tdataconsulta_publica[".defaultPages"];

//	field labels
$fieldLabelsconsulta_publica = array();
$fieldToolTipsconsulta_publica = array();
$pageTitlesconsulta_publica = array();
$placeHoldersconsulta_publica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_publica["Spanish"] = array();
	$fieldToolTipsconsulta_publica["Spanish"] = array();
	$placeHoldersconsulta_publica["Spanish"] = array();
	$pageTitlesconsulta_publica["Spanish"] = array();
	$fieldLabelsconsulta_publica["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsconsulta_publica["Spanish"]["SancionadoId"] = "";
	$placeHoldersconsulta_publica["Spanish"]["SancionadoId"] = "";
	$fieldLabelsconsulta_publica["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsconsulta_publica["Spanish"]["Documento"] = "";
	$placeHoldersconsulta_publica["Spanish"]["Documento"] = "";
	$fieldLabelsconsulta_publica["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsconsulta_publica["Spanish"]["Sancionado"] = "";
	$placeHoldersconsulta_publica["Spanish"]["Sancionado"] = "";
	if (count($fieldToolTipsconsulta_publica["Spanish"]))
		$tdataconsulta_publica[".isUseToolTips"] = true;
}


	$tdataconsulta_publica[".NCSearch"] = true;


	$tdataconsulta_publica[".scrollGridBody"] = true;

$tdataconsulta_publica[".shortTableName"] = "consulta_publica";
$tdataconsulta_publica[".nSecOptions"] = 0;

$tdataconsulta_publica[".mainTableOwnerID"] = "SancionadoId";
$tdataconsulta_publica[".entityType"] = 6;
$tdataconsulta_publica[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconsulta_publica[".strOriginalTableName"] = "Consulta Publica";

	



$tdataconsulta_publica[".showAddInPopup"] = false;

$tdataconsulta_publica[".showEditInPopup"] = false;

$tdataconsulta_publica[".showViewInPopup"] = false;

$tdataconsulta_publica[".listAjax"] = false;
//	temporary
//$tdataconsulta_publica[".listAjax"] = false;

	$tdataconsulta_publica[".audit"] = false;

	$tdataconsulta_publica[".locking"] = false;


$pages = $tdataconsulta_publica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_publica[".edit"] = true;
	$tdataconsulta_publica[".afterEditAction"] = 1;
	$tdataconsulta_publica[".closePopupAfterEdit"] = 1;
	$tdataconsulta_publica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_publica[".add"] = true;
$tdataconsulta_publica[".afterAddAction"] = 1;
$tdataconsulta_publica[".closePopupAfterAdd"] = 1;
$tdataconsulta_publica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_publica[".list"] = true;
}



$tdataconsulta_publica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_publica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_publica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_publica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_publica[".printFriendly"] = true;
}



$tdataconsulta_publica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_publica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_publica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_publica[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdataconsulta_publica[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_publica[".buttonsAdded"] = false;

$tdataconsulta_publica[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_publica[".isUseTimeForSearch"] = false;


$tdataconsulta_publica[".badgeColor"] = "D2AF80";


$tdataconsulta_publica[".allSearchFields"] = array();
$tdataconsulta_publica[".filterFields"] = array();
$tdataconsulta_publica[".requiredSearchFields"] = array();

$tdataconsulta_publica[".googleLikeFields"] = array();
$tdataconsulta_publica[".googleLikeFields"][] = "Documento";
$tdataconsulta_publica[".googleLikeFields"][] = "Sancionado";




$tdataconsulta_publica[".printerPageOrientation"] = 0;
$tdataconsulta_publica[".nPrinterPageScale"] = 100;

$tdataconsulta_publica[".nPrinterSplitRecords"] = 40;

$tdataconsulta_publica[".geocodingEnabled"] = false;




$tdataconsulta_publica[".isDisplayLoading"] = true;






$tdataconsulta_publica[".pageSize"] = 20;

$tdataconsulta_publica[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulta_publica[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_publica[".orderindexes"] = array();


$tdataconsulta_publica[".sqlHead"] = "";
$tdataconsulta_publica[".sqlFrom"] = "";
$tdataconsulta_publica[".sqlWhereExpr"] = "";
$tdataconsulta_publica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataconsulta_publica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_publica[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_publica[".highlightSearchResults"] = true;

$tableKeysconsulta_publica = array();
$tableKeysconsulta_publica[] = "SancionadoId";
$tdataconsulta_publica[".Keys"] = $tableKeysconsulta_publica;


$tdataconsulta_publica[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica","SancionadoId");
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


	$tdataconsulta_publica["SancionadoId"] = $fdata;
		$tdataconsulta_publica[".searchableFields"][] = "SancionadoId";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica","Documento");
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


	$tdataconsulta_publica["Documento"] = $fdata;
		$tdataconsulta_publica[".searchableFields"][] = "Documento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica","Sancionado");
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


	$tdataconsulta_publica["Sancionado"] = $fdata;
		$tdataconsulta_publica[".searchableFields"][] = "Sancionado";


$tables_data["Consulta Publica"]=&$tdataconsulta_publica;
$field_labels["Consulta_Publica"] = &$fieldLabelsconsulta_publica;
$fieldToolTips["Consulta_Publica"] = &$fieldToolTipsconsulta_publica;
$placeHolders["Consulta_Publica"] = &$placeHoldersconsulta_publica;
$page_titles["Consulta_Publica"] = &$pageTitlesconsulta_publica;


changeTextControlsToDate( "Consulta Publica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consulta Publica"] = array();
//	Consulta Publica Notificacion Detalle
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Consulta Publica Notificacion Detalle";
		$detailsParam["dOriginalTable"] = "Consulta Publica Notificacion Detalle";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consulta_publica_notificacion_detalle";
	$detailsParam["dCaptionTable"] = GetTableCaption("Consulta_Publica_Notificacion_Detalle");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Consulta Publica"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Consulta Publica"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Consulta Publica"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["Consulta Publica"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Consulta Publica"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consulta Publica"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/consulta_publica_ops.php" ) );



	
		;

			

$tdataconsulta_publica[".sqlquery"] = $queryData_consulta_publica;



include_once(getabspath("include/consulta_publica_events.php"));
$tdataconsulta_publica[".hasEvents"] = true;

?>