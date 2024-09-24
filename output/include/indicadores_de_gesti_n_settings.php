<?php
$tdataindicadores_de_gesti_n = array();
$tdataindicadores_de_gesti_n[".searchableFields"] = array();
$tdataindicadores_de_gesti_n[".ShortName"] = "indicadores_de_gesti_n";
$tdataindicadores_de_gesti_n[".OwnerID"] = "";
$tdataindicadores_de_gesti_n[".OriginalTable"] = "Indicadores de Gestión";


$tdataindicadores_de_gesti_n[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataindicadores_de_gesti_n[".originalPagesByType"] = $tdataindicadores_de_gesti_n[".pagesByType"];
$tdataindicadores_de_gesti_n[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataindicadores_de_gesti_n[".originalPages"] = $tdataindicadores_de_gesti_n[".pages"];
$tdataindicadores_de_gesti_n[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataindicadores_de_gesti_n[".originalDefaultPages"] = $tdataindicadores_de_gesti_n[".defaultPages"];

//	field labels
$fieldLabelsindicadores_de_gesti_n = array();
$fieldToolTipsindicadores_de_gesti_n = array();
$pageTitlesindicadores_de_gesti_n = array();
$placeHoldersindicadores_de_gesti_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsindicadores_de_gesti_n["Spanish"] = array();
	$fieldToolTipsindicadores_de_gesti_n["Spanish"] = array();
	$placeHoldersindicadores_de_gesti_n["Spanish"] = array();
	$pageTitlesindicadores_de_gesti_n["Spanish"] = array();
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Seccional"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Seccional"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Juzgados"] = "Juzgados";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Juzgados"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Juzgados"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Mes"] = "Mes";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Mes"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Mes"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Procesos"] = "Procesos";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Procesos"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Procesos"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Valor"] = "Valor";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Valor"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Valor"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Recaudo"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Recaudo"] = "";
	$fieldLabelsindicadores_de_gesti_n["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsindicadores_de_gesti_n["Spanish"]["Saldo"] = "";
	$placeHoldersindicadores_de_gesti_n["Spanish"]["Saldo"] = "";
	if (count($fieldToolTipsindicadores_de_gesti_n["Spanish"]))
		$tdataindicadores_de_gesti_n[".isUseToolTips"] = true;
}


	$tdataindicadores_de_gesti_n[".NCSearch"] = true;


	$tdataindicadores_de_gesti_n[".scrollGridBody"] = true;

$tdataindicadores_de_gesti_n[".shortTableName"] = "indicadores_de_gesti_n";
$tdataindicadores_de_gesti_n[".nSecOptions"] = 0;

$tdataindicadores_de_gesti_n[".mainTableOwnerID"] = "";
$tdataindicadores_de_gesti_n[".entityType"] = 6;
$tdataindicadores_de_gesti_n[".connId"] = "GCC_at_S00001_CCAD01";


$tdataindicadores_de_gesti_n[".strOriginalTableName"] = "Indicadores de Gestión";

	



$tdataindicadores_de_gesti_n[".showAddInPopup"] = false;

$tdataindicadores_de_gesti_n[".showEditInPopup"] = false;

$tdataindicadores_de_gesti_n[".showViewInPopup"] = false;

$tdataindicadores_de_gesti_n[".listAjax"] = false;
//	temporary
//$tdataindicadores_de_gesti_n[".listAjax"] = false;

	$tdataindicadores_de_gesti_n[".audit"] = false;

	$tdataindicadores_de_gesti_n[".locking"] = false;


$pages = $tdataindicadores_de_gesti_n[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicadores_de_gesti_n[".edit"] = true;
	$tdataindicadores_de_gesti_n[".afterEditAction"] = 1;
	$tdataindicadores_de_gesti_n[".closePopupAfterEdit"] = 1;
	$tdataindicadores_de_gesti_n[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicadores_de_gesti_n[".add"] = true;
$tdataindicadores_de_gesti_n[".afterAddAction"] = 1;
$tdataindicadores_de_gesti_n[".closePopupAfterAdd"] = 1;
$tdataindicadores_de_gesti_n[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicadores_de_gesti_n[".list"] = true;
}



$tdataindicadores_de_gesti_n[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicadores_de_gesti_n[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicadores_de_gesti_n[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicadores_de_gesti_n[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicadores_de_gesti_n[".printFriendly"] = true;
}



$tdataindicadores_de_gesti_n[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicadores_de_gesti_n[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicadores_de_gesti_n[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicadores_de_gesti_n[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																															

$tdataindicadores_de_gesti_n[".ajaxCodeSnippetAdded"] = false;

$tdataindicadores_de_gesti_n[".buttonsAdded"] = false;

$tdataindicadores_de_gesti_n[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicadores_de_gesti_n[".isUseTimeForSearch"] = false;


$tdataindicadores_de_gesti_n[".badgeColor"] = "2F4F4F";


$tdataindicadores_de_gesti_n[".allSearchFields"] = array();
$tdataindicadores_de_gesti_n[".filterFields"] = array();
$tdataindicadores_de_gesti_n[".requiredSearchFields"] = array();

$tdataindicadores_de_gesti_n[".googleLikeFields"] = array();
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Seccional";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Juzgados";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Mes";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Procesos";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Valor";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Recaudo";
$tdataindicadores_de_gesti_n[".googleLikeFields"][] = "Saldo";




$tdataindicadores_de_gesti_n[".printerPageOrientation"] = 0;
$tdataindicadores_de_gesti_n[".nPrinterPageScale"] = 100;

$tdataindicadores_de_gesti_n[".nPrinterSplitRecords"] = 40;

$tdataindicadores_de_gesti_n[".geocodingEnabled"] = false;




$tdataindicadores_de_gesti_n[".isDisplayLoading"] = true;






$tdataindicadores_de_gesti_n[".pageSize"] = 20;

$tdataindicadores_de_gesti_n[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicadores_de_gesti_n[".strOrderBy"] = $tstrOrderBy;

$tdataindicadores_de_gesti_n[".orderindexes"] = array();


$tdataindicadores_de_gesti_n[".sqlHead"] = "";
$tdataindicadores_de_gesti_n[".sqlFrom"] = "";
$tdataindicadores_de_gesti_n[".sqlWhereExpr"] = "";
$tdataindicadores_de_gesti_n[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindicadores_de_gesti_n[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicadores_de_gesti_n[".arrGroupsPerPage"] = $arrGPP;

$tdataindicadores_de_gesti_n[".highlightSearchResults"] = true;

$tableKeysindicadores_de_gesti_n = array();
$tdataindicadores_de_gesti_n[".Keys"] = $tableKeysindicadores_de_gesti_n;


$tdataindicadores_de_gesti_n[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Seccional");
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


	$tdataindicadores_de_gesti_n["Seccional"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Seccional";
//	Juzgados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Juzgados";
	$fdata["GoodName"] = "Juzgados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Juzgados");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Juzgados";

	
		$fdata["FullName"] = "Juzgados";

	
	
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


	$tdataindicadores_de_gesti_n["Juzgados"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Juzgados";
//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Mes");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["FullName"] = "Mes";

	
	
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


	$tdataindicadores_de_gesti_n["Mes"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Mes";
//	Procesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Procesos";
	$fdata["GoodName"] = "Procesos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Procesos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Procesos";

	
		$fdata["FullName"] = "Procesos";

	
	
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


	$tdataindicadores_de_gesti_n["Procesos"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Procesos";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Valor");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["FullName"] = "Valor";

	
	
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


	$tdataindicadores_de_gesti_n["Valor"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Valor";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Recaudo");
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


	$tdataindicadores_de_gesti_n["Recaudo"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Recaudo";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicadores_de_Gesti_n","Saldo");
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


	$tdataindicadores_de_gesti_n["Saldo"] = $fdata;
		$tdataindicadores_de_gesti_n[".searchableFields"][] = "Saldo";


$tables_data["Indicadores de Gestión"]=&$tdataindicadores_de_gesti_n;
$field_labels["Indicadores_de_Gesti_n"] = &$fieldLabelsindicadores_de_gesti_n;
$fieldToolTips["Indicadores_de_Gesti_n"] = &$fieldToolTipsindicadores_de_gesti_n;
$placeHolders["Indicadores_de_Gesti_n"] = &$placeHoldersindicadores_de_gesti_n;
$page_titles["Indicadores_de_Gesti_n"] = &$pageTitlesindicadores_de_gesti_n;


changeTextControlsToDate( "Indicadores de Gestión" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Indicadores de Gestión"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Indicadores de Gestión"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/indicadores_de_gesti_n_ops.php" ) );



	
		;

							

$tdataindicadores_de_gesti_n[".sqlquery"] = $queryData_indicadores_de_gesti_n;



$tdataindicadores_de_gesti_n[".hasEvents"] = false;

?>