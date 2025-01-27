<?php
$tdataprueba_archivo_plano = array();
$tdataprueba_archivo_plano[".searchableFields"] = array();
$tdataprueba_archivo_plano[".ShortName"] = "prueba_archivo_plano";
$tdataprueba_archivo_plano[".OwnerID"] = "";
$tdataprueba_archivo_plano[".OriginalTable"] = "Prueba Archivo Plano";


$tdataprueba_archivo_plano[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprueba_archivo_plano[".originalPagesByType"] = $tdataprueba_archivo_plano[".pagesByType"];
$tdataprueba_archivo_plano[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprueba_archivo_plano[".originalPages"] = $tdataprueba_archivo_plano[".pages"];
$tdataprueba_archivo_plano[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprueba_archivo_plano[".originalDefaultPages"] = $tdataprueba_archivo_plano[".defaultPages"];

//	field labels
$fieldLabelsprueba_archivo_plano = array();
$fieldToolTipsprueba_archivo_plano = array();
$pageTitlesprueba_archivo_plano = array();
$placeHoldersprueba_archivo_plano = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprueba_archivo_plano["Spanish"] = array();
	$fieldToolTipsprueba_archivo_plano["Spanish"] = array();
	$placeHoldersprueba_archivo_plano["Spanish"] = array();
	$pageTitlesprueba_archivo_plano["Spanish"] = array();
	$fieldLabelsprueba_archivo_plano["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsprueba_archivo_plano["Spanish"]["SeccionalId"] = "";
	$placeHoldersprueba_archivo_plano["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprueba_archivo_plano["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsprueba_archivo_plano["Spanish"]["Codigo"] = "";
	$placeHoldersprueba_archivo_plano["Spanish"]["Codigo"] = "";
	$fieldLabelsprueba_archivo_plano["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsprueba_archivo_plano["Spanish"]["CiudadId"] = "";
	$placeHoldersprueba_archivo_plano["Spanish"]["CiudadId"] = "";
	if (count($fieldToolTipsprueba_archivo_plano["Spanish"]))
		$tdataprueba_archivo_plano[".isUseToolTips"] = true;
}


	$tdataprueba_archivo_plano[".NCSearch"] = true;



$tdataprueba_archivo_plano[".shortTableName"] = "prueba_archivo_plano";
$tdataprueba_archivo_plano[".nSecOptions"] = 0;

$tdataprueba_archivo_plano[".mainTableOwnerID"] = "";
$tdataprueba_archivo_plano[".entityType"] = 6;
$tdataprueba_archivo_plano[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprueba_archivo_plano[".strOriginalTableName"] = "Prueba Archivo Plano";

	



$tdataprueba_archivo_plano[".showAddInPopup"] = false;

$tdataprueba_archivo_plano[".showEditInPopup"] = false;

$tdataprueba_archivo_plano[".showViewInPopup"] = false;

$tdataprueba_archivo_plano[".listAjax"] = false;
//	temporary
//$tdataprueba_archivo_plano[".listAjax"] = false;

	$tdataprueba_archivo_plano[".audit"] = false;

	$tdataprueba_archivo_plano[".locking"] = false;


$pages = $tdataprueba_archivo_plano[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprueba_archivo_plano[".edit"] = true;
	$tdataprueba_archivo_plano[".afterEditAction"] = 1;
	$tdataprueba_archivo_plano[".closePopupAfterEdit"] = 1;
	$tdataprueba_archivo_plano[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprueba_archivo_plano[".add"] = true;
$tdataprueba_archivo_plano[".afterAddAction"] = 1;
$tdataprueba_archivo_plano[".closePopupAfterAdd"] = 1;
$tdataprueba_archivo_plano[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprueba_archivo_plano[".list"] = true;
}



$tdataprueba_archivo_plano[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprueba_archivo_plano[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprueba_archivo_plano[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprueba_archivo_plano[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprueba_archivo_plano[".printFriendly"] = true;
}



$tdataprueba_archivo_plano[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprueba_archivo_plano[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprueba_archivo_plano[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprueba_archivo_plano[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																										

$tdataprueba_archivo_plano[".ajaxCodeSnippetAdded"] = false;

$tdataprueba_archivo_plano[".buttonsAdded"] = false;

$tdataprueba_archivo_plano[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprueba_archivo_plano[".isUseTimeForSearch"] = false;


$tdataprueba_archivo_plano[".badgeColor"] = "6DA5C8";


$tdataprueba_archivo_plano[".allSearchFields"] = array();
$tdataprueba_archivo_plano[".filterFields"] = array();
$tdataprueba_archivo_plano[".requiredSearchFields"] = array();

$tdataprueba_archivo_plano[".googleLikeFields"] = array();
$tdataprueba_archivo_plano[".googleLikeFields"][] = "SeccionalId";
$tdataprueba_archivo_plano[".googleLikeFields"][] = "Codigo";
$tdataprueba_archivo_plano[".googleLikeFields"][] = "CiudadId";




$tdataprueba_archivo_plano[".printerPageOrientation"] = 0;
$tdataprueba_archivo_plano[".nPrinterPageScale"] = 100;

$tdataprueba_archivo_plano[".nPrinterSplitRecords"] = 40;

$tdataprueba_archivo_plano[".geocodingEnabled"] = false;




$tdataprueba_archivo_plano[".isDisplayLoading"] = true;






$tdataprueba_archivo_plano[".pageSize"] = 20;

$tdataprueba_archivo_plano[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprueba_archivo_plano[".strOrderBy"] = $tstrOrderBy;

$tdataprueba_archivo_plano[".orderindexes"] = array();


$tdataprueba_archivo_plano[".sqlHead"] = "";
$tdataprueba_archivo_plano[".sqlFrom"] = "";
$tdataprueba_archivo_plano[".sqlWhereExpr"] = "";
$tdataprueba_archivo_plano[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataprueba_archivo_plano[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprueba_archivo_plano[".arrGroupsPerPage"] = $arrGPP;

$tdataprueba_archivo_plano[".highlightSearchResults"] = true;

$tableKeysprueba_archivo_plano = array();
$tdataprueba_archivo_plano[".Keys"] = $tableKeysprueba_archivo_plano;


$tdataprueba_archivo_plano[".hideMobileList"] = array();




//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prueba_Archivo_Plano","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

	
		$fdata["FullName"] = "SeccionalId";

	
	
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


	$tdataprueba_archivo_plano["SeccionalId"] = $fdata;
		$tdataprueba_archivo_plano[".searchableFields"][] = "SeccionalId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prueba_Archivo_Plano","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

	
		$fdata["FullName"] = "Codigo";

	
	
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


	$tdataprueba_archivo_plano["Codigo"] = $fdata;
		$tdataprueba_archivo_plano[".searchableFields"][] = "Codigo";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Prueba_Archivo_Plano","CiudadId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CiudadId";

	
		$fdata["FullName"] = "CiudadId";

	
	
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


	$tdataprueba_archivo_plano["CiudadId"] = $fdata;
		$tdataprueba_archivo_plano[".searchableFields"][] = "CiudadId";


$tables_data["Prueba Archivo Plano"]=&$tdataprueba_archivo_plano;
$field_labels["Prueba_Archivo_Plano"] = &$fieldLabelsprueba_archivo_plano;
$fieldToolTips["Prueba_Archivo_Plano"] = &$fieldToolTipsprueba_archivo_plano;
$placeHolders["Prueba_Archivo_Plano"] = &$placeHoldersprueba_archivo_plano;
$page_titles["Prueba_Archivo_Plano"] = &$pageTitlesprueba_archivo_plano;


changeTextControlsToDate( "Prueba Archivo Plano" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Prueba Archivo Plano"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Prueba Archivo Plano"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/prueba_archivo_plano_ops.php" ) );



	
		;

			

$tdataprueba_archivo_plano[".sqlquery"] = $queryData_prueba_archivo_plano;



include_once(getabspath("include/prueba_archivo_plano_events.php"));
$tdataprueba_archivo_plano[".hasEvents"] = true;

?>