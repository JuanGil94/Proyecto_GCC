<?php
$tdataconsulta_publica_generacion_desprendible = array();
$tdataconsulta_publica_generacion_desprendible[".searchableFields"] = array();
$tdataconsulta_publica_generacion_desprendible[".ShortName"] = "consulta_publica_generacion_desprendible";
$tdataconsulta_publica_generacion_desprendible[".OwnerID"] = "";
$tdataconsulta_publica_generacion_desprendible[".OriginalTable"] = "Consulta Publica Generacion Desprendible";


$tdataconsulta_publica_generacion_desprendible[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_publica_generacion_desprendible[".originalPagesByType"] = $tdataconsulta_publica_generacion_desprendible[".pagesByType"];
$tdataconsulta_publica_generacion_desprendible[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_publica_generacion_desprendible[".originalPages"] = $tdataconsulta_publica_generacion_desprendible[".pages"];
$tdataconsulta_publica_generacion_desprendible[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_publica_generacion_desprendible[".originalDefaultPages"] = $tdataconsulta_publica_generacion_desprendible[".defaultPages"];

//	field labels
$fieldLabelsconsulta_publica_generacion_desprendible = array();
$fieldToolTipsconsulta_publica_generacion_desprendible = array();
$pageTitlesconsulta_publica_generacion_desprendible = array();
$placeHoldersconsulta_publica_generacion_desprendible = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_publica_generacion_desprendible["Spanish"] = array();
	$fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"] = array();
	$placeHoldersconsulta_publica_generacion_desprendible["Spanish"] = array();
	$pageTitlesconsulta_publica_generacion_desprendible["Spanish"] = array();
	$fieldLabelsconsulta_publica_generacion_desprendible["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"]["ProcesoId"] = "";
	$placeHoldersconsulta_publica_generacion_desprendible["Spanish"]["ProcesoId"] = "";
	$fieldLabelsconsulta_publica_generacion_desprendible["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"]["Proceso"] = "";
	$placeHoldersconsulta_publica_generacion_desprendible["Spanish"]["Proceso"] = "";
	$fieldLabelsconsulta_publica_generacion_desprendible["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"]["Concepto"] = "";
	$placeHoldersconsulta_publica_generacion_desprendible["Spanish"]["Concepto"] = "";
	$fieldLabelsconsulta_publica_generacion_desprendible["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"]["Sancionado"] = "";
	$placeHoldersconsulta_publica_generacion_desprendible["Spanish"]["Sancionado"] = "";
	if (count($fieldToolTipsconsulta_publica_generacion_desprendible["Spanish"]))
		$tdataconsulta_publica_generacion_desprendible[".isUseToolTips"] = true;
}


	$tdataconsulta_publica_generacion_desprendible[".NCSearch"] = true;


	$tdataconsulta_publica_generacion_desprendible[".scrollGridBody"] = true;

$tdataconsulta_publica_generacion_desprendible[".shortTableName"] = "consulta_publica_generacion_desprendible";
$tdataconsulta_publica_generacion_desprendible[".nSecOptions"] = 0;

$tdataconsulta_publica_generacion_desprendible[".mainTableOwnerID"] = "";
$tdataconsulta_publica_generacion_desprendible[".entityType"] = 6;
$tdataconsulta_publica_generacion_desprendible[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconsulta_publica_generacion_desprendible[".strOriginalTableName"] = "Consulta Publica Generacion Desprendible";

	



$tdataconsulta_publica_generacion_desprendible[".showAddInPopup"] = false;

$tdataconsulta_publica_generacion_desprendible[".showEditInPopup"] = false;

$tdataconsulta_publica_generacion_desprendible[".showViewInPopup"] = false;

$tdataconsulta_publica_generacion_desprendible[".listAjax"] = false;
//	temporary
//$tdataconsulta_publica_generacion_desprendible[".listAjax"] = false;

	$tdataconsulta_publica_generacion_desprendible[".audit"] = false;

	$tdataconsulta_publica_generacion_desprendible[".locking"] = false;


$pages = $tdataconsulta_publica_generacion_desprendible[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_publica_generacion_desprendible[".edit"] = true;
	$tdataconsulta_publica_generacion_desprendible[".afterEditAction"] = 1;
	$tdataconsulta_publica_generacion_desprendible[".closePopupAfterEdit"] = 1;
	$tdataconsulta_publica_generacion_desprendible[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_publica_generacion_desprendible[".add"] = true;
$tdataconsulta_publica_generacion_desprendible[".afterAddAction"] = 1;
$tdataconsulta_publica_generacion_desprendible[".closePopupAfterAdd"] = 1;
$tdataconsulta_publica_generacion_desprendible[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_publica_generacion_desprendible[".list"] = true;
}



$tdataconsulta_publica_generacion_desprendible[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_publica_generacion_desprendible[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_publica_generacion_desprendible[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_publica_generacion_desprendible[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_publica_generacion_desprendible[".printFriendly"] = true;
}



$tdataconsulta_publica_generacion_desprendible[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_publica_generacion_desprendible[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_publica_generacion_desprendible[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_publica_generacion_desprendible[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																			

$tdataconsulta_publica_generacion_desprendible[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_publica_generacion_desprendible[".buttonsAdded"] = false;

$tdataconsulta_publica_generacion_desprendible[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_publica_generacion_desprendible[".isUseTimeForSearch"] = false;


$tdataconsulta_publica_generacion_desprendible[".badgeColor"] = "D2AF80";


$tdataconsulta_publica_generacion_desprendible[".allSearchFields"] = array();
$tdataconsulta_publica_generacion_desprendible[".filterFields"] = array();
$tdataconsulta_publica_generacion_desprendible[".requiredSearchFields"] = array();

$tdataconsulta_publica_generacion_desprendible[".googleLikeFields"] = array();
$tdataconsulta_publica_generacion_desprendible[".googleLikeFields"][] = "Proceso";
$tdataconsulta_publica_generacion_desprendible[".googleLikeFields"][] = "Concepto";
$tdataconsulta_publica_generacion_desprendible[".googleLikeFields"][] = "Sancionado";




$tdataconsulta_publica_generacion_desprendible[".printerPageOrientation"] = 0;
$tdataconsulta_publica_generacion_desprendible[".nPrinterPageScale"] = 100;

$tdataconsulta_publica_generacion_desprendible[".nPrinterSplitRecords"] = 40;

$tdataconsulta_publica_generacion_desprendible[".geocodingEnabled"] = false;




$tdataconsulta_publica_generacion_desprendible[".isDisplayLoading"] = true;






$tdataconsulta_publica_generacion_desprendible[".pageSize"] = 20;

$tdataconsulta_publica_generacion_desprendible[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulta_publica_generacion_desprendible[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_publica_generacion_desprendible[".orderindexes"] = array();


$tdataconsulta_publica_generacion_desprendible[".sqlHead"] = "";
$tdataconsulta_publica_generacion_desprendible[".sqlFrom"] = "";
$tdataconsulta_publica_generacion_desprendible[".sqlWhereExpr"] = "";
$tdataconsulta_publica_generacion_desprendible[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_publica_generacion_desprendible[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_publica_generacion_desprendible[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_publica_generacion_desprendible[".highlightSearchResults"] = true;

$tableKeysconsulta_publica_generacion_desprendible = array();
$tdataconsulta_publica_generacion_desprendible[".Keys"] = $tableKeysconsulta_publica_generacion_desprendible;


$tdataconsulta_publica_generacion_desprendible[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica_Generacion_Desprendible","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

	
		$fdata["FullName"] = "ProcesoId";

	
	
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


	$tdataconsulta_publica_generacion_desprendible["ProcesoId"] = $fdata;
		$tdataconsulta_publica_generacion_desprendible[".searchableFields"][] = "ProcesoId";
//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica_Generacion_Desprendible","Proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Proceso";

	
		$fdata["FullName"] = "Proceso";

	
	
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


	$tdataconsulta_publica_generacion_desprendible["Proceso"] = $fdata;
		$tdataconsulta_publica_generacion_desprendible[".searchableFields"][] = "Proceso";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica_Generacion_Desprendible","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["FullName"] = "Concepto";

	
	
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


	$tdataconsulta_publica_generacion_desprendible["Concepto"] = $fdata;
		$tdataconsulta_publica_generacion_desprendible[".searchableFields"][] = "Concepto";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Consulta_Publica_Generacion_Desprendible","Sancionado");
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


	$tdataconsulta_publica_generacion_desprendible["Sancionado"] = $fdata;
		$tdataconsulta_publica_generacion_desprendible[".searchableFields"][] = "Sancionado";


$tables_data["Consulta Publica Generacion Desprendible"]=&$tdataconsulta_publica_generacion_desprendible;
$field_labels["Consulta_Publica_Generacion_Desprendible"] = &$fieldLabelsconsulta_publica_generacion_desprendible;
$fieldToolTips["Consulta_Publica_Generacion_Desprendible"] = &$fieldToolTipsconsulta_publica_generacion_desprendible;
$placeHolders["Consulta_Publica_Generacion_Desprendible"] = &$placeHoldersconsulta_publica_generacion_desprendible;
$page_titles["Consulta_Publica_Generacion_Desprendible"] = &$pageTitlesconsulta_publica_generacion_desprendible;


changeTextControlsToDate( "Consulta Publica Generacion Desprendible" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consulta Publica Generacion Desprendible"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consulta Publica Generacion Desprendible"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/consulta_publica_generacion_desprendible_ops.php" ) );



	
		;

				

$tdataconsulta_publica_generacion_desprendible[".sqlquery"] = $queryData_consulta_publica_generacion_desprendible;



$tdataconsulta_publica_generacion_desprendible[".hasEvents"] = false;

?>