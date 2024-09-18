<?php
$tdatalistado_de_chequeo_oficios_datachild = array();
$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"] = array();
$tdatalistado_de_chequeo_oficios_datachild[".ShortName"] = "listado_de_chequeo_oficios_datachild";
$tdatalistado_de_chequeo_oficios_datachild[".OwnerID"] = "";
$tdatalistado_de_chequeo_oficios_datachild[".OriginalTable"] = "Listado de Chequeo Oficios DataChild";


$tdatalistado_de_chequeo_oficios_datachild[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalistado_de_chequeo_oficios_datachild[".originalPagesByType"] = $tdatalistado_de_chequeo_oficios_datachild[".pagesByType"];
$tdatalistado_de_chequeo_oficios_datachild[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalistado_de_chequeo_oficios_datachild[".originalPages"] = $tdatalistado_de_chequeo_oficios_datachild[".pages"];
$tdatalistado_de_chequeo_oficios_datachild[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalistado_de_chequeo_oficios_datachild[".originalDefaultPages"] = $tdatalistado_de_chequeo_oficios_datachild[".defaultPages"];

//	field labels
$fieldLabelslistado_de_chequeo_oficios_datachild = array();
$fieldToolTipslistado_de_chequeo_oficios_datachild = array();
$pageTitleslistado_de_chequeo_oficios_datachild = array();
$placeHolderslistado_de_chequeo_oficios_datachild = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"] = array();
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"] = array();
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"] = array();
	$pageTitleslistado_de_chequeo_oficios_datachild["Spanish"] = array();
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"]["Fecha"] = "Fecha Oficio";
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]["Fecha"] = "";
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"]["Fecha"] = "";
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]["Radicado"] = "";
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"]["Radicado"] = "";
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"]["OficioId"] = "Oficio";
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]["OficioId"] = "";
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"]["OficioId"] = "";
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]["Observaciones"] = "";
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"]["Observaciones"] = "";
	$fieldLabelslistado_de_chequeo_oficios_datachild["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]["ChequeoId"] = "";
	$placeHolderslistado_de_chequeo_oficios_datachild["Spanish"]["ChequeoId"] = "";
	if (count($fieldToolTipslistado_de_chequeo_oficios_datachild["Spanish"]))
		$tdatalistado_de_chequeo_oficios_datachild[".isUseToolTips"] = true;
}


	$tdatalistado_de_chequeo_oficios_datachild[".NCSearch"] = true;


	$tdatalistado_de_chequeo_oficios_datachild[".scrollGridBody"] = true;

$tdatalistado_de_chequeo_oficios_datachild[".shortTableName"] = "listado_de_chequeo_oficios_datachild";
$tdatalistado_de_chequeo_oficios_datachild[".nSecOptions"] = 0;

$tdatalistado_de_chequeo_oficios_datachild[".mainTableOwnerID"] = "";
$tdatalistado_de_chequeo_oficios_datachild[".entityType"] = 6;
$tdatalistado_de_chequeo_oficios_datachild[".connId"] = "GCC_at_S00001_CCAD01";


$tdatalistado_de_chequeo_oficios_datachild[".strOriginalTableName"] = "Listado de Chequeo Oficios DataChild";

	



$tdatalistado_de_chequeo_oficios_datachild[".showAddInPopup"] = false;

$tdatalistado_de_chequeo_oficios_datachild[".showEditInPopup"] = false;

$tdatalistado_de_chequeo_oficios_datachild[".showViewInPopup"] = false;

$tdatalistado_de_chequeo_oficios_datachild[".listAjax"] = false;
//	temporary
//$tdatalistado_de_chequeo_oficios_datachild[".listAjax"] = false;

	$tdatalistado_de_chequeo_oficios_datachild[".audit"] = false;

	$tdatalistado_de_chequeo_oficios_datachild[".locking"] = false;


$pages = $tdatalistado_de_chequeo_oficios_datachild[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistado_de_chequeo_oficios_datachild[".edit"] = true;
	$tdatalistado_de_chequeo_oficios_datachild[".afterEditAction"] = 1;
	$tdatalistado_de_chequeo_oficios_datachild[".closePopupAfterEdit"] = 1;
	$tdatalistado_de_chequeo_oficios_datachild[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistado_de_chequeo_oficios_datachild[".add"] = true;
$tdatalistado_de_chequeo_oficios_datachild[".afterAddAction"] = 1;
$tdatalistado_de_chequeo_oficios_datachild[".closePopupAfterAdd"] = 1;
$tdatalistado_de_chequeo_oficios_datachild[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistado_de_chequeo_oficios_datachild[".list"] = true;
}



$tdatalistado_de_chequeo_oficios_datachild[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistado_de_chequeo_oficios_datachild[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistado_de_chequeo_oficios_datachild[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistado_de_chequeo_oficios_datachild[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistado_de_chequeo_oficios_datachild[".printFriendly"] = true;
}



$tdatalistado_de_chequeo_oficios_datachild[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistado_de_chequeo_oficios_datachild[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistado_de_chequeo_oficios_datachild[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistado_de_chequeo_oficios_datachild[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdatalistado_de_chequeo_oficios_datachild[".ajaxCodeSnippetAdded"] = false;

$tdatalistado_de_chequeo_oficios_datachild[".buttonsAdded"] = false;

$tdatalistado_de_chequeo_oficios_datachild[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistado_de_chequeo_oficios_datachild[".isUseTimeForSearch"] = false;


$tdatalistado_de_chequeo_oficios_datachild[".badgeColor"] = "dc143c";


$tdatalistado_de_chequeo_oficios_datachild[".allSearchFields"] = array();
$tdatalistado_de_chequeo_oficios_datachild[".filterFields"] = array();
$tdatalistado_de_chequeo_oficios_datachild[".requiredSearchFields"] = array();

$tdatalistado_de_chequeo_oficios_datachild[".googleLikeFields"] = array();
$tdatalistado_de_chequeo_oficios_datachild[".googleLikeFields"][] = "Fecha";
$tdatalistado_de_chequeo_oficios_datachild[".googleLikeFields"][] = "Radicado";
$tdatalistado_de_chequeo_oficios_datachild[".googleLikeFields"][] = "OficioId";
$tdatalistado_de_chequeo_oficios_datachild[".googleLikeFields"][] = "Observaciones";




$tdatalistado_de_chequeo_oficios_datachild[".printerPageOrientation"] = 0;
$tdatalistado_de_chequeo_oficios_datachild[".nPrinterPageScale"] = 100;

$tdatalistado_de_chequeo_oficios_datachild[".nPrinterSplitRecords"] = 40;

$tdatalistado_de_chequeo_oficios_datachild[".geocodingEnabled"] = false;










$tdatalistado_de_chequeo_oficios_datachild[".pageSize"] = 20;

$tdatalistado_de_chequeo_oficios_datachild[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalistado_de_chequeo_oficios_datachild[".strOrderBy"] = $tstrOrderBy;

$tdatalistado_de_chequeo_oficios_datachild[".orderindexes"] = array();


$tdatalistado_de_chequeo_oficios_datachild[".sqlHead"] = "";
$tdatalistado_de_chequeo_oficios_datachild[".sqlFrom"] = "";
$tdatalistado_de_chequeo_oficios_datachild[".sqlWhereExpr"] = "";
$tdatalistado_de_chequeo_oficios_datachild[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistado_de_chequeo_oficios_datachild[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistado_de_chequeo_oficios_datachild[".arrGroupsPerPage"] = $arrGPP;

$tdatalistado_de_chequeo_oficios_datachild[".highlightSearchResults"] = true;

$tableKeyslistado_de_chequeo_oficios_datachild = array();
$tdatalistado_de_chequeo_oficios_datachild[".Keys"] = $tableKeyslistado_de_chequeo_oficios_datachild;


$tdatalistado_de_chequeo_oficios_datachild[".hideMobileList"] = array();




//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeo_Oficios_DataChild","Fecha");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["FullName"] = "Fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatalistado_de_chequeo_oficios_datachild["Fecha"] = $fdata;
		$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"][] = "Fecha";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeo_Oficios_DataChild","Radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

	
		$fdata["FullName"] = "Radicado";

	
	
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


	$tdatalistado_de_chequeo_oficios_datachild["Radicado"] = $fdata;
		$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"][] = "Radicado";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeo_Oficios_DataChild","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

	
		$fdata["FullName"] = "OficioId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Oficio";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatalistado_de_chequeo_oficios_datachild["OficioId"] = $fdata;
		$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"][] = "OficioId";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeo_Oficios_DataChild","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["FullName"] = "Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatalistado_de_chequeo_oficios_datachild["Observaciones"] = $fdata;
		$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"][] = "Observaciones";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeo_Oficios_DataChild","ChequeoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ChequeoId";

	
		$fdata["FullName"] = "ChequeoId";

	
	
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


	$tdatalistado_de_chequeo_oficios_datachild["ChequeoId"] = $fdata;
		$tdatalistado_de_chequeo_oficios_datachild[".searchableFields"][] = "ChequeoId";


$tables_data["Listado de Chequeo Oficios DataChild"]=&$tdatalistado_de_chequeo_oficios_datachild;
$field_labels["Listado_de_Chequeo_Oficios_DataChild"] = &$fieldLabelslistado_de_chequeo_oficios_datachild;
$fieldToolTips["Listado_de_Chequeo_Oficios_DataChild"] = &$fieldToolTipslistado_de_chequeo_oficios_datachild;
$placeHolders["Listado_de_Chequeo_Oficios_DataChild"] = &$placeHolderslistado_de_chequeo_oficios_datachild;
$page_titles["Listado_de_Chequeo_Oficios_DataChild"] = &$pageTitleslistado_de_chequeo_oficios_datachild;


changeTextControlsToDate( "Listado de Chequeo Oficios DataChild" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Listado de Chequeo Oficios DataChild"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Listado de Chequeo Oficios DataChild"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Listado de Chequeos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Listado de Chequeos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "listado_de_chequeos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Listado de Chequeo Oficios DataChild"][0] = $masterParams;
				$masterTablesData["Listado de Chequeo Oficios DataChild"][0]["masterKeys"] = array();
	$masterTablesData["Listado de Chequeo Oficios DataChild"][0]["masterKeys"][]="ChequeoId";
				$masterTablesData["Listado de Chequeo Oficios DataChild"][0]["detailKeys"] = array();
	$masterTablesData["Listado de Chequeo Oficios DataChild"][0]["detailKeys"][]="ChequeoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/listado_de_chequeo_oficios_datachild_ops.php" ) );



	
		;

					

$tdatalistado_de_chequeo_oficios_datachild[".sqlquery"] = $queryData_listado_de_chequeo_oficios_datachild;



include_once(getabspath("include/listado_de_chequeo_oficios_datachild_events.php"));
$tdatalistado_de_chequeo_oficios_datachild[".hasEvents"] = true;

?>