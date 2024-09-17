<?php
$tdatatransacciones_usuario = array();
$tdatatransacciones_usuario[".searchableFields"] = array();
$tdatatransacciones_usuario[".ShortName"] = "transacciones_usuario";
$tdatatransacciones_usuario[".OwnerID"] = "";
$tdatatransacciones_usuario[".OriginalTable"] = "Transacciones Usuario";


$tdatatransacciones_usuario[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatransacciones_usuario[".originalPagesByType"] = $tdatatransacciones_usuario[".pagesByType"];
$tdatatransacciones_usuario[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatransacciones_usuario[".originalPages"] = $tdatatransacciones_usuario[".pages"];
$tdatatransacciones_usuario[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatransacciones_usuario[".originalDefaultPages"] = $tdatatransacciones_usuario[".defaultPages"];

//	field labels
$fieldLabelstransacciones_usuario = array();
$fieldToolTipstransacciones_usuario = array();
$pageTitlestransacciones_usuario = array();
$placeHolderstransacciones_usuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstransacciones_usuario["Spanish"] = array();
	$fieldToolTipstransacciones_usuario["Spanish"] = array();
	$placeHolderstransacciones_usuario["Spanish"] = array();
	$pageTitlestransacciones_usuario["Spanish"] = array();
	$fieldLabelstransacciones_usuario["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipstransacciones_usuario["Spanish"]["CarteraTipo"] = "";
	$placeHolderstransacciones_usuario["Spanish"]["CarteraTipo"] = "";
	$fieldLabelstransacciones_usuario["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipstransacciones_usuario["Spanish"]["Oficio"] = "";
	$placeHolderstransacciones_usuario["Spanish"]["Oficio"] = "";
	$fieldLabelstransacciones_usuario["Spanish"]["OficioCount"] = "Oficio Count";
	$fieldToolTipstransacciones_usuario["Spanish"]["OficioCount"] = "";
	$placeHolderstransacciones_usuario["Spanish"]["OficioCount"] = "";
	$fieldLabelstransacciones_usuario["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipstransacciones_usuario["Spanish"]["Nombre"] = "";
	$placeHolderstransacciones_usuario["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipstransacciones_usuario["Spanish"]))
		$tdatatransacciones_usuario[".isUseToolTips"] = true;
}


	$tdatatransacciones_usuario[".NCSearch"] = true;


	$tdatatransacciones_usuario[".scrollGridBody"] = true;

$tdatatransacciones_usuario[".shortTableName"] = "transacciones_usuario";
$tdatatransacciones_usuario[".nSecOptions"] = 0;

$tdatatransacciones_usuario[".mainTableOwnerID"] = "";
$tdatatransacciones_usuario[".entityType"] = 6;
$tdatatransacciones_usuario[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatransacciones_usuario[".strOriginalTableName"] = "Transacciones Usuario";

	



$tdatatransacciones_usuario[".showAddInPopup"] = false;

$tdatatransacciones_usuario[".showEditInPopup"] = false;

$tdatatransacciones_usuario[".showViewInPopup"] = false;

$tdatatransacciones_usuario[".listAjax"] = false;
//	temporary
//$tdatatransacciones_usuario[".listAjax"] = false;

	$tdatatransacciones_usuario[".audit"] = false;

	$tdatatransacciones_usuario[".locking"] = false;


$pages = $tdatatransacciones_usuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransacciones_usuario[".edit"] = true;
	$tdatatransacciones_usuario[".afterEditAction"] = 1;
	$tdatatransacciones_usuario[".closePopupAfterEdit"] = 1;
	$tdatatransacciones_usuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransacciones_usuario[".add"] = true;
$tdatatransacciones_usuario[".afterAddAction"] = 1;
$tdatatransacciones_usuario[".closePopupAfterAdd"] = 1;
$tdatatransacciones_usuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransacciones_usuario[".list"] = true;
}



$tdatatransacciones_usuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransacciones_usuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransacciones_usuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransacciones_usuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransacciones_usuario[".printFriendly"] = true;
}



$tdatatransacciones_usuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransacciones_usuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransacciones_usuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransacciones_usuario[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																						

$tdatatransacciones_usuario[".ajaxCodeSnippetAdded"] = false;

$tdatatransacciones_usuario[".buttonsAdded"] = false;

$tdatatransacciones_usuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransacciones_usuario[".isUseTimeForSearch"] = false;


$tdatatransacciones_usuario[".badgeColor"] = "EDCA00";


$tdatatransacciones_usuario[".allSearchFields"] = array();
$tdatatransacciones_usuario[".filterFields"] = array();
$tdatatransacciones_usuario[".requiredSearchFields"] = array();

$tdatatransacciones_usuario[".googleLikeFields"] = array();
$tdatatransacciones_usuario[".googleLikeFields"][] = "CarteraTipo";
$tdatatransacciones_usuario[".googleLikeFields"][] = "Oficio";
$tdatatransacciones_usuario[".googleLikeFields"][] = "OficioCount";
$tdatatransacciones_usuario[".googleLikeFields"][] = "Nombre";




$tdatatransacciones_usuario[".printerPageOrientation"] = 0;
$tdatatransacciones_usuario[".nPrinterPageScale"] = 100;

$tdatatransacciones_usuario[".nPrinterSplitRecords"] = 40;

$tdatatransacciones_usuario[".geocodingEnabled"] = false;




$tdatatransacciones_usuario[".isDisplayLoading"] = true;






$tdatatransacciones_usuario[".pageSize"] = 50;

$tdatatransacciones_usuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransacciones_usuario[".strOrderBy"] = $tstrOrderBy;

$tdatatransacciones_usuario[".orderindexes"] = array();


$tdatatransacciones_usuario[".sqlHead"] = "";
$tdatatransacciones_usuario[".sqlFrom"] = "";
$tdatatransacciones_usuario[".sqlWhereExpr"] = "";
$tdatatransacciones_usuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransacciones_usuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransacciones_usuario[".arrGroupsPerPage"] = $arrGPP;

$tdatatransacciones_usuario[".highlightSearchResults"] = true;

$tableKeystransacciones_usuario = array();
$tdatatransacciones_usuario[".Keys"] = $tableKeystransacciones_usuario;


$tdatatransacciones_usuario[".hideMobileList"] = array();




//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Transacciones_Usuario","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

	
		$fdata["FullName"] = "CarteraTipo";

	
	
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


	$tdatatransacciones_usuario["CarteraTipo"] = $fdata;
		$tdatatransacciones_usuario[".searchableFields"][] = "CarteraTipo";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Transacciones_Usuario","Oficio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficio";

	
		$fdata["FullName"] = "Oficio";

	
	
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


	$tdatatransacciones_usuario["Oficio"] = $fdata;
		$tdatatransacciones_usuario[".searchableFields"][] = "Oficio";
//	OficioCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioCount";
	$fdata["GoodName"] = "OficioCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Transacciones_Usuario","OficioCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioCount";

	
		$fdata["FullName"] = "OficioCount";

	
	
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


	$tdatatransacciones_usuario["OficioCount"] = $fdata;
		$tdatatransacciones_usuario[".searchableFields"][] = "OficioCount";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Transacciones_Usuario","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["FullName"] = "Nombre";

	
	
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


	$tdatatransacciones_usuario["Nombre"] = $fdata;
		$tdatatransacciones_usuario[".searchableFields"][] = "Nombre";


$tables_data["Transacciones Usuario"]=&$tdatatransacciones_usuario;
$field_labels["Transacciones_Usuario"] = &$fieldLabelstransacciones_usuario;
$fieldToolTips["Transacciones_Usuario"] = &$fieldToolTipstransacciones_usuario;
$placeHolders["Transacciones_Usuario"] = &$placeHolderstransacciones_usuario;
$page_titles["Transacciones_Usuario"] = &$pageTitlestransacciones_usuario;


changeTextControlsToDate( "Transacciones Usuario" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Transacciones Usuario"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Transacciones Usuario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/transacciones_usuario_ops.php" ) );



	
		;

				

$tdatatransacciones_usuario[".sqlquery"] = $queryData_transacciones_usuario;



$tdatatransacciones_usuario[".hasEvents"] = false;

?>