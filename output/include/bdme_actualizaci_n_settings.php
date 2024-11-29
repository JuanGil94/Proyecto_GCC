<?php
$tdatabdme_actualizaci_n = array();
$tdatabdme_actualizaci_n[".searchableFields"] = array();
$tdatabdme_actualizaci_n[".ShortName"] = "bdme_actualizaci_n";
$tdatabdme_actualizaci_n[".OwnerID"] = "";
$tdatabdme_actualizaci_n[".OriginalTable"] = "BDME Actualización";


$tdatabdme_actualizaci_n[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_actualizaci_n[".originalPagesByType"] = $tdatabdme_actualizaci_n[".pagesByType"];
$tdatabdme_actualizaci_n[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_actualizaci_n[".originalPages"] = $tdatabdme_actualizaci_n[".pages"];
$tdatabdme_actualizaci_n[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_actualizaci_n[".originalDefaultPages"] = $tdatabdme_actualizaci_n[".defaultPages"];

//	field labels
$fieldLabelsbdme_actualizaci_n = array();
$fieldToolTipsbdme_actualizaci_n = array();
$pageTitlesbdme_actualizaci_n = array();
$placeHoldersbdme_actualizaci_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_actualizaci_n["Spanish"] = array();
	$fieldToolTipsbdme_actualizaci_n["Spanish"] = array();
	$placeHoldersbdme_actualizaci_n["Spanish"] = array();
	$pageTitlesbdme_actualizaci_n["Spanish"] = array();
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Seccional"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Seccional"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Concepto"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Concepto"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["TipoDeudor"] = "Tipo Deudor";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["TipoDeudor"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["TipoDeudor"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Numero"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Numero"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Documento"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Documento"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["TipoDocumento"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["TipoDocumento"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Deuda"] = "Deuda";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Deuda"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Deuda"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Actualizacion"] = "Actualizacion";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Actualizacion"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Actualizacion"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["Estado"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["Estado"] = "";
	$fieldLabelsbdme_actualizaci_n["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsbdme_actualizaci_n["Spanish"]["SancionadoId"] = "";
	$placeHoldersbdme_actualizaci_n["Spanish"]["SancionadoId"] = "";
	if (count($fieldToolTipsbdme_actualizaci_n["Spanish"]))
		$tdatabdme_actualizaci_n[".isUseToolTips"] = true;
}


	$tdatabdme_actualizaci_n[".NCSearch"] = true;


	$tdatabdme_actualizaci_n[".scrollGridBody"] = true;

$tdatabdme_actualizaci_n[".shortTableName"] = "bdme_actualizaci_n";
$tdatabdme_actualizaci_n[".nSecOptions"] = 0;

$tdatabdme_actualizaci_n[".mainTableOwnerID"] = "";
$tdatabdme_actualizaci_n[".entityType"] = 6;
$tdatabdme_actualizaci_n[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_actualizaci_n[".strOriginalTableName"] = "BDME Actualización";

	



$tdatabdme_actualizaci_n[".showAddInPopup"] = false;

$tdatabdme_actualizaci_n[".showEditInPopup"] = false;

$tdatabdme_actualizaci_n[".showViewInPopup"] = false;

$tdatabdme_actualizaci_n[".listAjax"] = false;
//	temporary
//$tdatabdme_actualizaci_n[".listAjax"] = false;

	$tdatabdme_actualizaci_n[".audit"] = false;

	$tdatabdme_actualizaci_n[".locking"] = false;


$pages = $tdatabdme_actualizaci_n[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_actualizaci_n[".edit"] = true;
	$tdatabdme_actualizaci_n[".afterEditAction"] = 1;
	$tdatabdme_actualizaci_n[".closePopupAfterEdit"] = 1;
	$tdatabdme_actualizaci_n[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_actualizaci_n[".add"] = true;
$tdatabdme_actualizaci_n[".afterAddAction"] = 1;
$tdatabdme_actualizaci_n[".closePopupAfterAdd"] = 1;
$tdatabdme_actualizaci_n[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_actualizaci_n[".list"] = true;
}



$tdatabdme_actualizaci_n[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_actualizaci_n[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_actualizaci_n[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_actualizaci_n[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_actualizaci_n[".printFriendly"] = true;
}



$tdatabdme_actualizaci_n[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_actualizaci_n[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_actualizaci_n[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_actualizaci_n[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																						

$tdatabdme_actualizaci_n[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_actualizaci_n[".buttonsAdded"] = false;

$tdatabdme_actualizaci_n[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_actualizaci_n[".isUseTimeForSearch"] = false;


$tdatabdme_actualizaci_n[".badgeColor"] = "E07878";


$tdatabdme_actualizaci_n[".allSearchFields"] = array();
$tdatabdme_actualizaci_n[".filterFields"] = array();
$tdatabdme_actualizaci_n[".requiredSearchFields"] = array();

$tdatabdme_actualizaci_n[".googleLikeFields"] = array();
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Seccional";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Concepto";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "TipoDeudor";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Numero";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Documento";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "TipoDocumento";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Sancionado";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Deuda";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Actualizacion";
$tdatabdme_actualizaci_n[".googleLikeFields"][] = "Estado";




$tdatabdme_actualizaci_n[".printerPageOrientation"] = 0;
$tdatabdme_actualizaci_n[".nPrinterPageScale"] = 100;

$tdatabdme_actualizaci_n[".nPrinterSplitRecords"] = 40;

$tdatabdme_actualizaci_n[".geocodingEnabled"] = false;




$tdatabdme_actualizaci_n[".isDisplayLoading"] = true;






$tdatabdme_actualizaci_n[".pageSize"] = 20;

$tdatabdme_actualizaci_n[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_actualizaci_n[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_actualizaci_n[".orderindexes"] = array();


$tdatabdme_actualizaci_n[".sqlHead"] = "";
$tdatabdme_actualizaci_n[".sqlFrom"] = "";
$tdatabdme_actualizaci_n[".sqlWhereExpr"] = "";
$tdatabdme_actualizaci_n[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_actualizaci_n[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_actualizaci_n[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_actualizaci_n[".highlightSearchResults"] = true;

$tableKeysbdme_actualizaci_n = array();
$tdatabdme_actualizaci_n[".Keys"] = $tableKeysbdme_actualizaci_n;


$tdatabdme_actualizaci_n[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Seccional");
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


	$tdatabdme_actualizaci_n["Seccional"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Concepto");
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


	$tdatabdme_actualizaci_n["Concepto"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Concepto";
//	TipoDeudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDeudor";
	$fdata["GoodName"] = "TipoDeudor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","TipoDeudor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDeudor";

	
		$fdata["FullName"] = "TipoDeudor";

	
	
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


	$tdatabdme_actualizaci_n["TipoDeudor"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "TipoDeudor";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["FullName"] = "Numero";

	
	
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


	$tdatabdme_actualizaci_n["Numero"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Numero";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Documento");
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


	$tdatabdme_actualizaci_n["Documento"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","TipoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDocumento";

	
		$fdata["FullName"] = "TipoDocumento";

	
	
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


	$tdatabdme_actualizaci_n["TipoDocumento"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "TipoDocumento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Sancionado");
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


	$tdatabdme_actualizaci_n["Sancionado"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Sancionado";
//	Deuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Deuda";
	$fdata["GoodName"] = "Deuda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Deuda");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Deuda";

	
		$fdata["FullName"] = "Deuda";

	
	
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


	$tdatabdme_actualizaci_n["Deuda"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Deuda";
//	Actualizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Actualizacion";
	$fdata["GoodName"] = "Actualizacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Actualizacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Actualizacion";

	
		$fdata["FullName"] = "Actualizacion";

	
	
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


	$tdatabdme_actualizaci_n["Actualizacion"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Actualizacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["FullName"] = "Estado";

	
	
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


	$tdatabdme_actualizaci_n["Estado"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "Estado";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Actualizaci_n","SancionadoId");
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


	$tdatabdme_actualizaci_n["SancionadoId"] = $fdata;
		$tdatabdme_actualizaci_n[".searchableFields"][] = "SancionadoId";


$tables_data["BDME Actualización"]=&$tdatabdme_actualizaci_n;
$field_labels["BDME_Actualizaci_n"] = &$fieldLabelsbdme_actualizaci_n;
$fieldToolTips["BDME_Actualizaci_n"] = &$fieldToolTipsbdme_actualizaci_n;
$placeHolders["BDME_Actualizaci_n"] = &$placeHoldersbdme_actualizaci_n;
$page_titles["BDME_Actualizaci_n"] = &$pageTitlesbdme_actualizaci_n;


changeTextControlsToDate( "BDME Actualización" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Actualización"] = array();
//	BDME Actualización DataChild
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BDME Actualización DataChild";
		$detailsParam["dOriginalTable"] = "BDME Actualización DataChild";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "bdme_actualizaci_n_datachild";
	$detailsParam["dCaptionTable"] = GetTableCaption("BDME_Actualizaci_n_DataChild");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["BDME Actualización"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BDME Actualización"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BDME Actualización"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["BDME Actualización"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BDME Actualización"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Actualización"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_actualizaci_n_ops.php" ) );



	
		;

											

$tdatabdme_actualizaci_n[".sqlquery"] = $queryData_bdme_actualizaci_n;



include_once(getabspath("include/bdme_actualizaci_n_events.php"));
$tdatabdme_actualizaci_n[".hasEvents"] = true;

?>