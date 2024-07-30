<?php
$tdatabdme_excluidos = array();
$tdatabdme_excluidos[".searchableFields"] = array();
$tdatabdme_excluidos[".ShortName"] = "bdme_excluidos";
$tdatabdme_excluidos[".OwnerID"] = "";
$tdatabdme_excluidos[".OriginalTable"] = "BDME Excluidos";


$tdatabdme_excluidos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabdme_excluidos[".originalPagesByType"] = $tdatabdme_excluidos[".pagesByType"];
$tdatabdme_excluidos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabdme_excluidos[".originalPages"] = $tdatabdme_excluidos[".pages"];
$tdatabdme_excluidos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabdme_excluidos[".originalDefaultPages"] = $tdatabdme_excluidos[".defaultPages"];

//	field labels
$fieldLabelsbdme_excluidos = array();
$fieldToolTipsbdme_excluidos = array();
$pageTitlesbdme_excluidos = array();
$placeHoldersbdme_excluidos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbdme_excluidos["Spanish"] = array();
	$fieldToolTipsbdme_excluidos["Spanish"] = array();
	$placeHoldersbdme_excluidos["Spanish"] = array();
	$pageTitlesbdme_excluidos["Spanish"] = array();
	$fieldLabelsbdme_excluidos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsbdme_excluidos["Spanish"]["Seccional"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Seccional"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsbdme_excluidos["Spanish"]["Concepto"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Concepto"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsbdme_excluidos["Spanish"]["Numero"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Numero"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsbdme_excluidos["Spanish"]["Documento"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Documento"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["SancionadoTipoDocumento"] = "Sancionado Tipo Documento";
	$fieldToolTipsbdme_excluidos["Spanish"]["SancionadoTipoDocumento"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["SancionadoTipoDocumento"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbdme_excluidos["Spanish"]["Sancionado"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Sancionado"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Deuda"] = "Deuda";
	$fieldToolTipsbdme_excluidos["Spanish"]["Deuda"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Deuda"] = "";
	$fieldLabelsbdme_excluidos["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsbdme_excluidos["Spanish"]["Estado"] = "";
	$placeHoldersbdme_excluidos["Spanish"]["Estado"] = "";
	if (count($fieldToolTipsbdme_excluidos["Spanish"]))
		$tdatabdme_excluidos[".isUseToolTips"] = true;
}


	$tdatabdme_excluidos[".NCSearch"] = true;



$tdatabdme_excluidos[".shortTableName"] = "bdme_excluidos";
$tdatabdme_excluidos[".nSecOptions"] = 0;

$tdatabdme_excluidos[".mainTableOwnerID"] = "";
$tdatabdme_excluidos[".entityType"] = 6;
$tdatabdme_excluidos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabdme_excluidos[".strOriginalTableName"] = "BDME Excluidos";

	



$tdatabdme_excluidos[".showAddInPopup"] = false;

$tdatabdme_excluidos[".showEditInPopup"] = false;

$tdatabdme_excluidos[".showViewInPopup"] = false;

$tdatabdme_excluidos[".listAjax"] = false;
//	temporary
//$tdatabdme_excluidos[".listAjax"] = false;

	$tdatabdme_excluidos[".audit"] = false;

	$tdatabdme_excluidos[".locking"] = false;


$pages = $tdatabdme_excluidos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabdme_excluidos[".edit"] = true;
	$tdatabdme_excluidos[".afterEditAction"] = 1;
	$tdatabdme_excluidos[".closePopupAfterEdit"] = 1;
	$tdatabdme_excluidos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabdme_excluidos[".add"] = true;
$tdatabdme_excluidos[".afterAddAction"] = 1;
$tdatabdme_excluidos[".closePopupAfterAdd"] = 1;
$tdatabdme_excluidos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabdme_excluidos[".list"] = true;
}



$tdatabdme_excluidos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabdme_excluidos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabdme_excluidos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabdme_excluidos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabdme_excluidos[".printFriendly"] = true;
}



$tdatabdme_excluidos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabdme_excluidos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabdme_excluidos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabdme_excluidos[".isUseAjaxSuggest"] = false;



																																																																																													

$tdatabdme_excluidos[".ajaxCodeSnippetAdded"] = false;

$tdatabdme_excluidos[".buttonsAdded"] = false;

$tdatabdme_excluidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabdme_excluidos[".isUseTimeForSearch"] = false;


$tdatabdme_excluidos[".badgeColor"] = "DAA520";


$tdatabdme_excluidos[".allSearchFields"] = array();
$tdatabdme_excluidos[".filterFields"] = array();
$tdatabdme_excluidos[".requiredSearchFields"] = array();

$tdatabdme_excluidos[".googleLikeFields"] = array();
$tdatabdme_excluidos[".googleLikeFields"][] = "Seccional";
$tdatabdme_excluidos[".googleLikeFields"][] = "Concepto";
$tdatabdme_excluidos[".googleLikeFields"][] = "Numero";
$tdatabdme_excluidos[".googleLikeFields"][] = "Documento";
$tdatabdme_excluidos[".googleLikeFields"][] = "SancionadoTipoDocumento";
$tdatabdme_excluidos[".googleLikeFields"][] = "Sancionado";
$tdatabdme_excluidos[".googleLikeFields"][] = "Deuda";
$tdatabdme_excluidos[".googleLikeFields"][] = "Estado";




$tdatabdme_excluidos[".printerPageOrientation"] = 0;
$tdatabdme_excluidos[".nPrinterPageScale"] = 100;

$tdatabdme_excluidos[".nPrinterSplitRecords"] = 40;

$tdatabdme_excluidos[".geocodingEnabled"] = false;










$tdatabdme_excluidos[".pageSize"] = 20;

$tdatabdme_excluidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabdme_excluidos[".strOrderBy"] = $tstrOrderBy;

$tdatabdme_excluidos[".orderindexes"] = array();


$tdatabdme_excluidos[".sqlHead"] = "";
$tdatabdme_excluidos[".sqlFrom"] = "";
$tdatabdme_excluidos[".sqlWhereExpr"] = "";
$tdatabdme_excluidos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabdme_excluidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabdme_excluidos[".arrGroupsPerPage"] = $arrGPP;

$tdatabdme_excluidos[".highlightSearchResults"] = true;

$tableKeysbdme_excluidos = array();
$tdatabdme_excluidos[".Keys"] = $tableKeysbdme_excluidos;


$tdatabdme_excluidos[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Seccional");
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


	$tdatabdme_excluidos["Seccional"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Concepto");
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


	$tdatabdme_excluidos["Concepto"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Numero");
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


	$tdatabdme_excluidos["Numero"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Numero";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Documento");
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


	$tdatabdme_excluidos["Documento"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Documento";
//	SancionadoTipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SancionadoTipoDocumento";
	$fdata["GoodName"] = "SancionadoTipoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","SancionadoTipoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoTipoDocumento";

	
		$fdata["FullName"] = "SancionadoTipoDocumento";

	
	
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


	$tdatabdme_excluidos["SancionadoTipoDocumento"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "SancionadoTipoDocumento";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Sancionado");
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


	$tdatabdme_excluidos["Sancionado"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Sancionado";
//	Deuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Deuda";
	$fdata["GoodName"] = "Deuda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Deuda");
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


	$tdatabdme_excluidos["Deuda"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Deuda";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BDME_Excluidos","Estado");
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


	$tdatabdme_excluidos["Estado"] = $fdata;
		$tdatabdme_excluidos[".searchableFields"][] = "Estado";


$tables_data["BDME Excluidos"]=&$tdatabdme_excluidos;
$field_labels["BDME_Excluidos"] = &$fieldLabelsbdme_excluidos;
$fieldToolTips["BDME_Excluidos"] = &$fieldToolTipsbdme_excluidos;
$placeHolders["BDME_Excluidos"] = &$placeHoldersbdme_excluidos;
$page_titles["BDME_Excluidos"] = &$pageTitlesbdme_excluidos;


changeTextControlsToDate( "BDME Excluidos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BDME Excluidos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BDME Excluidos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/bdme_excluidos_ops.php" ) );



	
		;

								

$tdatabdme_excluidos[".sqlquery"] = $queryData_bdme_excluidos;



$tdatabdme_excluidos[".hasEvents"] = false;

?>