<?php
$tdatapresunci_n_prescripci_n = array();
$tdatapresunci_n_prescripci_n[".searchableFields"] = array();
$tdatapresunci_n_prescripci_n[".ShortName"] = "presunci_n_prescripci_n";
$tdatapresunci_n_prescripci_n[".OwnerID"] = "";
$tdatapresunci_n_prescripci_n[".OriginalTable"] = "Presunción Prescripción";


$tdatapresunci_n_prescripci_n[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapresunci_n_prescripci_n[".originalPagesByType"] = $tdatapresunci_n_prescripci_n[".pagesByType"];
$tdatapresunci_n_prescripci_n[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapresunci_n_prescripci_n[".originalPages"] = $tdatapresunci_n_prescripci_n[".pages"];
$tdatapresunci_n_prescripci_n[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapresunci_n_prescripci_n[".originalDefaultPages"] = $tdatapresunci_n_prescripci_n[".defaultPages"];

//	field labels
$fieldLabelspresunci_n_prescripci_n = array();
$fieldToolTipspresunci_n_prescripci_n = array();
$pageTitlespresunci_n_prescripci_n = array();
$placeHolderspresunci_n_prescripci_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspresunci_n_prescripci_n["Spanish"] = array();
	$fieldToolTipspresunci_n_prescripci_n["Spanish"] = array();
	$placeHolderspresunci_n_prescripci_n["Spanish"] = array();
	$pageTitlespresunci_n_prescripci_n["Spanish"] = array();
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Seccional"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Seccional"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Concepto"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Concepto"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Etapa"] = "Etapa";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Etapa"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Etapa"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Abogado"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Abogado"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Numero"] = "Numero";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Numero"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Numero"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Ejecutoria"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Ejecutoria"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Notificacion"] = "Notificacion";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Notificacion"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Notificacion"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Acuerdo"] = "Acuerdo";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Acuerdo"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Acuerdo"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Obligacion"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Obligacion"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Costas"] = "Costas";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Costas"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Costas"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Intereses"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Intereses"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Recaudo"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Recaudo"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Saldo"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Saldo"] = "";
	$fieldLabelspresunci_n_prescripci_n["Spanish"]["Prescripcion"] = "Días Prescripcion";
	$fieldToolTipspresunci_n_prescripci_n["Spanish"]["Prescripcion"] = "";
	$placeHolderspresunci_n_prescripci_n["Spanish"]["Prescripcion"] = "";
	if (count($fieldToolTipspresunci_n_prescripci_n["Spanish"]))
		$tdatapresunci_n_prescripci_n[".isUseToolTips"] = true;
}


	$tdatapresunci_n_prescripci_n[".NCSearch"] = true;


	$tdatapresunci_n_prescripci_n[".scrollGridBody"] = true;

$tdatapresunci_n_prescripci_n[".shortTableName"] = "presunci_n_prescripci_n";
$tdatapresunci_n_prescripci_n[".nSecOptions"] = 0;

$tdatapresunci_n_prescripci_n[".mainTableOwnerID"] = "";
$tdatapresunci_n_prescripci_n[".entityType"] = 6;
$tdatapresunci_n_prescripci_n[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapresunci_n_prescripci_n[".strOriginalTableName"] = "Presunción Prescripción";

	



$tdatapresunci_n_prescripci_n[".showAddInPopup"] = false;

$tdatapresunci_n_prescripci_n[".showEditInPopup"] = false;

$tdatapresunci_n_prescripci_n[".showViewInPopup"] = false;

$tdatapresunci_n_prescripci_n[".listAjax"] = false;
//	temporary
//$tdatapresunci_n_prescripci_n[".listAjax"] = false;

	$tdatapresunci_n_prescripci_n[".audit"] = false;

	$tdatapresunci_n_prescripci_n[".locking"] = false;


$pages = $tdatapresunci_n_prescripci_n[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapresunci_n_prescripci_n[".edit"] = true;
	$tdatapresunci_n_prescripci_n[".afterEditAction"] = 1;
	$tdatapresunci_n_prescripci_n[".closePopupAfterEdit"] = 1;
	$tdatapresunci_n_prescripci_n[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapresunci_n_prescripci_n[".add"] = true;
$tdatapresunci_n_prescripci_n[".afterAddAction"] = 1;
$tdatapresunci_n_prescripci_n[".closePopupAfterAdd"] = 1;
$tdatapresunci_n_prescripci_n[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapresunci_n_prescripci_n[".list"] = true;
}



$tdatapresunci_n_prescripci_n[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapresunci_n_prescripci_n[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapresunci_n_prescripci_n[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapresunci_n_prescripci_n[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapresunci_n_prescripci_n[".printFriendly"] = true;
}



$tdatapresunci_n_prescripci_n[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapresunci_n_prescripci_n[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapresunci_n_prescripci_n[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapresunci_n_prescripci_n[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																							

$tdatapresunci_n_prescripci_n[".ajaxCodeSnippetAdded"] = false;

$tdatapresunci_n_prescripci_n[".buttonsAdded"] = false;

$tdatapresunci_n_prescripci_n[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapresunci_n_prescripci_n[".isUseTimeForSearch"] = false;


$tdatapresunci_n_prescripci_n[".badgeColor"] = "D2691E";


$tdatapresunci_n_prescripci_n[".allSearchFields"] = array();
$tdatapresunci_n_prescripci_n[".filterFields"] = array();
$tdatapresunci_n_prescripci_n[".requiredSearchFields"] = array();

$tdatapresunci_n_prescripci_n[".googleLikeFields"] = array();
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Seccional";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Concepto";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Etapa";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Abogado";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Numero";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Ejecutoria";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Notificacion";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Acuerdo";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Obligacion";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Costas";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Intereses";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Recaudo";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Saldo";
$tdatapresunci_n_prescripci_n[".googleLikeFields"][] = "Prescripcion";




$tdatapresunci_n_prescripci_n[".printerPageOrientation"] = 0;
$tdatapresunci_n_prescripci_n[".nPrinterPageScale"] = 100;

$tdatapresunci_n_prescripci_n[".nPrinterSplitRecords"] = 40;

$tdatapresunci_n_prescripci_n[".geocodingEnabled"] = false;




$tdatapresunci_n_prescripci_n[".isDisplayLoading"] = true;






$tdatapresunci_n_prescripci_n[".pageSize"] = 20;

$tdatapresunci_n_prescripci_n[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapresunci_n_prescripci_n[".strOrderBy"] = $tstrOrderBy;

$tdatapresunci_n_prescripci_n[".orderindexes"] = array();


$tdatapresunci_n_prescripci_n[".sqlHead"] = "";
$tdatapresunci_n_prescripci_n[".sqlFrom"] = "";
$tdatapresunci_n_prescripci_n[".sqlWhereExpr"] = "";
$tdatapresunci_n_prescripci_n[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapresunci_n_prescripci_n[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapresunci_n_prescripci_n[".arrGroupsPerPage"] = $arrGPP;

$tdatapresunci_n_prescripci_n[".highlightSearchResults"] = true;

$tableKeyspresunci_n_prescripci_n = array();
$tdatapresunci_n_prescripci_n[".Keys"] = $tableKeyspresunci_n_prescripci_n;


$tdatapresunci_n_prescripci_n[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Seccional");
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


	$tdatapresunci_n_prescripci_n["Seccional"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Concepto");
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


	$tdatapresunci_n_prescripci_n["Concepto"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Concepto";
//	Etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Etapa";
	$fdata["GoodName"] = "Etapa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Etapa";

	
		$fdata["FullName"] = "Etapa";

	
	
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


	$tdatapresunci_n_prescripci_n["Etapa"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Etapa";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["FullName"] = "Abogado";

	
	
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


	$tdatapresunci_n_prescripci_n["Abogado"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Abogado";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Numero");
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


	$tdatapresunci_n_prescripci_n["Numero"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Numero";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Ejecutoria");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Ejecutoria";

	
		$fdata["FullName"] = "Ejecutoria";

	
	
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


	$tdatapresunci_n_prescripci_n["Ejecutoria"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Notificacion");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Notificacion";

	
		$fdata["FullName"] = "Notificacion";

	
	
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


	$tdatapresunci_n_prescripci_n["Notificacion"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Notificacion";
//	Acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Acuerdo";
	$fdata["GoodName"] = "Acuerdo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Acuerdo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Acuerdo";

	
		$fdata["FullName"] = "Acuerdo";

	
	
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


	$tdatapresunci_n_prescripci_n["Acuerdo"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Acuerdo";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Obligacion");
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


	$tdatapresunci_n_prescripci_n["Obligacion"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

	
		$fdata["FullName"] = "Costas";

	
	
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


	$tdatapresunci_n_prescripci_n["Costas"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Costas";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

	
		$fdata["FullName"] = "Intereses";

	
	
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


	$tdatapresunci_n_prescripci_n["Intereses"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Intereses";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

	
		$fdata["FullName"] = "Recaudo";

	
	
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


	$tdatapresunci_n_prescripci_n["Recaudo"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Recaudo";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["FullName"] = "Saldo";

	
	
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


	$tdatapresunci_n_prescripci_n["Saldo"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Saldo";
//	Prescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Prescripcion";
	$fdata["GoodName"] = "Prescripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Presunci_n_Prescripci_n","Prescripcion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Prescripcion";

	
		$fdata["FullName"] = "Prescripcion";

	
	
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


	$tdatapresunci_n_prescripci_n["Prescripcion"] = $fdata;
		$tdatapresunci_n_prescripci_n[".searchableFields"][] = "Prescripcion";


$tables_data["Presunción Prescripción"]=&$tdatapresunci_n_prescripci_n;
$field_labels["Presunci_n_Prescripci_n"] = &$fieldLabelspresunci_n_prescripci_n;
$fieldToolTips["Presunci_n_Prescripci_n"] = &$fieldToolTipspresunci_n_prescripci_n;
$placeHolders["Presunci_n_Prescripci_n"] = &$placeHolderspresunci_n_prescripci_n;
$page_titles["Presunci_n_Prescripci_n"] = &$pageTitlespresunci_n_prescripci_n;


changeTextControlsToDate( "Presunción Prescripción" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Presunción Prescripción"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Presunción Prescripción"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/presunci_n_prescripci_n_ops.php" ) );



	
		;

														

$tdatapresunci_n_prescripci_n[".sqlquery"] = $queryData_presunci_n_prescripci_n;



$tdatapresunci_n_prescripci_n[".hasEvents"] = false;

?>