<?php
$tdatalistado_de_chequeos = array();
$tdatalistado_de_chequeos[".searchableFields"] = array();
$tdatalistado_de_chequeos[".ShortName"] = "listado_de_chequeos";
$tdatalistado_de_chequeos[".OwnerID"] = "";
$tdatalistado_de_chequeos[".OriginalTable"] = "Listado de Chequeos";


$tdatalistado_de_chequeos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalistado_de_chequeos[".originalPagesByType"] = $tdatalistado_de_chequeos[".pagesByType"];
$tdatalistado_de_chequeos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalistado_de_chequeos[".originalPages"] = $tdatalistado_de_chequeos[".pages"];
$tdatalistado_de_chequeos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalistado_de_chequeos[".originalDefaultPages"] = $tdatalistado_de_chequeos[".defaultPages"];

//	field labels
$fieldLabelslistado_de_chequeos = array();
$fieldToolTipslistado_de_chequeos = array();
$pageTitleslistado_de_chequeos = array();
$placeHolderslistado_de_chequeos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslistado_de_chequeos["Spanish"] = array();
	$fieldToolTipslistado_de_chequeos["Spanish"] = array();
	$placeHolderslistado_de_chequeos["Spanish"] = array();
	$pageTitleslistado_de_chequeos["Spanish"] = array();
	$fieldLabelslistado_de_chequeos["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipslistado_de_chequeos["Spanish"]["SeccionalId"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["SeccionalId"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Fecha"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Fecha"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["ChequeoId"] = "#Chequeo";
	$fieldToolTipslistado_de_chequeos["Spanish"]["ChequeoId"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["ChequeoId"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["AbogadoId"] = "Creado Por";
	$fieldToolTipslistado_de_chequeos["Spanish"]["AbogadoId"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["AbogadoId"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["ID"] = "ID";
	$fieldToolTipslistado_de_chequeos["Spanish"]["ID"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["ID"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["DespachoId"] = "Despacho";
	$fieldToolTipslistado_de_chequeos["Spanish"]["DespachoId"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["DespachoId"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Origen"] = "Origen";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Origen"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Origen"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Obligacion"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Obligacion"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Numero"] = "Numero";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Numero"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Numero"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Persuasivo"] = "Persuasivo";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Persuasivo"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Persuasivo"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["AbogadoId1"] = "Abogado";
	$fieldToolTipslistado_de_chequeos["Spanish"]["AbogadoId1"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["AbogadoId1"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["TramiteId"] = "Tramite";
	$fieldToolTipslistado_de_chequeos["Spanish"]["TramiteId"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["TramiteId"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Fisico"] = "Fisico";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Fisico"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Fisico"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Digital"] = "Digital";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Digital"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Digital"] = "";
	$fieldLabelslistado_de_chequeos["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipslistado_de_chequeos["Spanish"]["Observaciones"] = "";
	$placeHolderslistado_de_chequeos["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipslistado_de_chequeos["Spanish"]))
		$tdatalistado_de_chequeos[".isUseToolTips"] = true;
}


	$tdatalistado_de_chequeos[".NCSearch"] = true;


	$tdatalistado_de_chequeos[".scrollGridBody"] = true;

$tdatalistado_de_chequeos[".shortTableName"] = "listado_de_chequeos";
$tdatalistado_de_chequeos[".nSecOptions"] = 0;

$tdatalistado_de_chequeos[".mainTableOwnerID"] = "";
$tdatalistado_de_chequeos[".entityType"] = 6;
$tdatalistado_de_chequeos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatalistado_de_chequeos[".strOriginalTableName"] = "Listado de Chequeos";

	



$tdatalistado_de_chequeos[".showAddInPopup"] = false;

$tdatalistado_de_chequeos[".showEditInPopup"] = false;

$tdatalistado_de_chequeos[".showViewInPopup"] = false;

$tdatalistado_de_chequeos[".listAjax"] = false;
//	temporary
//$tdatalistado_de_chequeos[".listAjax"] = false;

	$tdatalistado_de_chequeos[".audit"] = false;

	$tdatalistado_de_chequeos[".locking"] = false;


$pages = $tdatalistado_de_chequeos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistado_de_chequeos[".edit"] = true;
	$tdatalistado_de_chequeos[".afterEditAction"] = 1;
	$tdatalistado_de_chequeos[".closePopupAfterEdit"] = 1;
	$tdatalistado_de_chequeos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistado_de_chequeos[".add"] = true;
$tdatalistado_de_chequeos[".afterAddAction"] = 1;
$tdatalistado_de_chequeos[".closePopupAfterAdd"] = 1;
$tdatalistado_de_chequeos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistado_de_chequeos[".list"] = true;
}



$tdatalistado_de_chequeos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistado_de_chequeos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistado_de_chequeos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistado_de_chequeos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistado_de_chequeos[".printFriendly"] = true;
}



$tdatalistado_de_chequeos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistado_de_chequeos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistado_de_chequeos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistado_de_chequeos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdatalistado_de_chequeos[".ajaxCodeSnippetAdded"] = false;

$tdatalistado_de_chequeos[".buttonsAdded"] = false;

$tdatalistado_de_chequeos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistado_de_chequeos[".isUseTimeForSearch"] = false;


$tdatalistado_de_chequeos[".badgeColor"] = "4682B4";


$tdatalistado_de_chequeos[".allSearchFields"] = array();
$tdatalistado_de_chequeos[".filterFields"] = array();
$tdatalistado_de_chequeos[".requiredSearchFields"] = array();

$tdatalistado_de_chequeos[".googleLikeFields"] = array();
$tdatalistado_de_chequeos[".googleLikeFields"][] = "SeccionalId";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Fecha";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "ChequeoId";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "AbogadoId";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "ID";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "DespachoId";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Origen";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Obligacion";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Numero";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Persuasivo";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "AbogadoId1";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "TramiteId";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Fisico";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Digital";
$tdatalistado_de_chequeos[".googleLikeFields"][] = "Observaciones";




$tdatalistado_de_chequeos[".printerPageOrientation"] = 0;
$tdatalistado_de_chequeos[".nPrinterPageScale"] = 100;

$tdatalistado_de_chequeos[".nPrinterSplitRecords"] = 40;

$tdatalistado_de_chequeos[".geocodingEnabled"] = false;




$tdatalistado_de_chequeos[".isDisplayLoading"] = true;






$tdatalistado_de_chequeos[".pageSize"] = 20;

$tdatalistado_de_chequeos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalistado_de_chequeos[".strOrderBy"] = $tstrOrderBy;

$tdatalistado_de_chequeos[".orderindexes"] = array();


$tdatalistado_de_chequeos[".sqlHead"] = "";
$tdatalistado_de_chequeos[".sqlFrom"] = "";
$tdatalistado_de_chequeos[".sqlWhereExpr"] = "";
$tdatalistado_de_chequeos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatalistado_de_chequeos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistado_de_chequeos[".arrGroupsPerPage"] = $arrGPP;

$tdatalistado_de_chequeos[".highlightSearchResults"] = true;

$tableKeyslistado_de_chequeos = array();
$tdatalistado_de_chequeos[".Keys"] = $tableKeyslistado_de_chequeos;


$tdatalistado_de_chequeos[".hideMobileList"] = array();




//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","SeccionalId");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
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


	$tdatalistado_de_chequeos["SeccionalId"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "SeccionalId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Fecha");
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


	$tdatalistado_de_chequeos["Fecha"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Fecha";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","ChequeoId");
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


	$tdatalistado_de_chequeos["ChequeoId"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "ChequeoId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

	
		$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdatalistado_de_chequeos["AbogadoId"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "AbogadoId";
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","ID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ID";

	
		$fdata["FullName"] = "ID";

	
	
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


	$tdatalistado_de_chequeos["ID"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "ID";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","DespachoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DespachoId";

	
		$fdata["FullName"] = "DespachoId";

	
	
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
	$edata["LookupTable"] = "dbo.Despachos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Despacho";

	

	
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


	$tdatalistado_de_chequeos["DespachoId"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "DespachoId";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

	
		$fdata["FullName"] = "Origen";

	
	
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


	$tdatalistado_de_chequeos["Origen"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Origen";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

	
		$fdata["FullName"] = "Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatalistado_de_chequeos["Obligacion"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Obligacion";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["FullName"] = "Numero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




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


	$tdatalistado_de_chequeos["Numero"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Numero";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Persuasivo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Persuasivo";

	
		$fdata["FullName"] = "Persuasivo";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatalistado_de_chequeos["Persuasivo"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Persuasivo";
//	AbogadoId1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AbogadoId1";
	$fdata["GoodName"] = "AbogadoId1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","AbogadoId1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId1";

	
		$fdata["FullName"] = "AbogadoId1";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdatalistado_de_chequeos["AbogadoId1"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "AbogadoId1";
//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","TramiteId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TramiteId";

	
		$fdata["FullName"] = "TramiteId";

	
	
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
	$edata["LookupTable"] = "dbo.Tramites";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TramiteId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tramite";

	

	
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


	$tdatalistado_de_chequeos["TramiteId"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "TramiteId";
//	Fisico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Fisico";
	$fdata["GoodName"] = "Fisico";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Fisico");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Fisico";

	
		$fdata["FullName"] = "Fisico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalistado_de_chequeos["Fisico"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Fisico";
//	Digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Digital";
	$fdata["GoodName"] = "Digital";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Digital");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Digital";

	
		$fdata["FullName"] = "Digital";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatalistado_de_chequeos["Digital"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Digital";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_de_Chequeos","Observaciones");
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


	$tdatalistado_de_chequeos["Observaciones"] = $fdata;
		$tdatalistado_de_chequeos[".searchableFields"][] = "Observaciones";


$tables_data["Listado de Chequeos"]=&$tdatalistado_de_chequeos;
$field_labels["Listado_de_Chequeos"] = &$fieldLabelslistado_de_chequeos;
$fieldToolTips["Listado_de_Chequeos"] = &$fieldToolTipslistado_de_chequeos;
$placeHolders["Listado_de_Chequeos"] = &$placeHolderslistado_de_chequeos;
$page_titles["Listado_de_Chequeos"] = &$pageTitleslistado_de_chequeos;


changeTextControlsToDate( "Listado de Chequeos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Listado de Chequeos"] = array();
//	Listado de Chequeo Sancionado DataChild
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Listado de Chequeo Sancionado DataChild";
		$detailsParam["dOriginalTable"] = "Listado de Chequeo Sancionado DataChild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "listado_de_chequeo_sancionado_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("Listado_de_Chequeo_Sancionado_DataChild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Listado de Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//	Listado de Chequeo Oficios DataChild
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Listado de Chequeo Oficios DataChild";
		$detailsParam["dOriginalTable"] = "Listado de Chequeo Oficios DataChild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "listado_de_chequeo_oficios_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("Listado_de_Chequeo_Oficios_DataChild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Listado de Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//	Listado de Chequeo Motivo devolucion DataChild
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Listado de Chequeo Motivo devolucion DataChild";
		$detailsParam["dOriginalTable"] = "Listado de Chequeo Motivo devolucion DataChild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "listado_de_chequeo_motivo_devolucion_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("Listado_de_Chequeo_Motivo_devolucion_DataChild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Listado de Chequeos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Listado de Chequeos"][$dIndex]["detailKeys"][]="ChequeoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Listado de Chequeos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/listado_de_chequeos_ops.php" ) );



	
		;

															

$tdatalistado_de_chequeos[".sqlquery"] = $queryData_listado_de_chequeos;



include_once(getabspath("include/listado_de_chequeos_events.php"));
$tdatalistado_de_chequeos[".hasEvents"] = true;

?>