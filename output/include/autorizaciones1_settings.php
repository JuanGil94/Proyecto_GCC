<?php
$tdataautorizaciones1 = array();
$tdataautorizaciones1[".searchableFields"] = array();
$tdataautorizaciones1[".ShortName"] = "autorizaciones1";
$tdataautorizaciones1[".OwnerID"] = "";
$tdataautorizaciones1[".OriginalTable"] = "Autorizaciones";


$tdataautorizaciones1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataautorizaciones1[".originalPagesByType"] = $tdataautorizaciones1[".pagesByType"];
$tdataautorizaciones1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataautorizaciones1[".originalPages"] = $tdataautorizaciones1[".pages"];
$tdataautorizaciones1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataautorizaciones1[".originalDefaultPages"] = $tdataautorizaciones1[".defaultPages"];

//	field labels
$fieldLabelsautorizaciones1 = array();
$fieldToolTipsautorizaciones1 = array();
$pageTitlesautorizaciones1 = array();
$placeHoldersautorizaciones1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsautorizaciones1["Spanish"] = array();
	$fieldToolTipsautorizaciones1["Spanish"] = array();
	$placeHoldersautorizaciones1["Spanish"] = array();
	$pageTitlesautorizaciones1["Spanish"] = array();
	$fieldLabelsautorizaciones1["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipsautorizaciones1["Spanish"]["ChequeoId"] = "";
	$placeHoldersautorizaciones1["Spanish"]["ChequeoId"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsautorizaciones1["Spanish"]["Seccional"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Seccional"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsautorizaciones1["Spanish"]["Concepto"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Concepto"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsautorizaciones1["Spanish"]["Tipo"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Tipo"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsautorizaciones1["Spanish"]["Cantidad"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Cantidad"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsautorizaciones1["Spanish"]["Obligacion"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Obligacion"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsautorizaciones1["Spanish"]["Costas"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Costas"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsautorizaciones1["Spanish"]["Fecha"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Fecha"] = "";
	$fieldLabelsautorizaciones1["Spanish"]["Competencia"] = "Competencia";
	$fieldToolTipsautorizaciones1["Spanish"]["Competencia"] = "";
	$placeHoldersautorizaciones1["Spanish"]["Competencia"] = "";
	if (count($fieldToolTipsautorizaciones1["Spanish"]))
		$tdataautorizaciones1[".isUseToolTips"] = true;
}


	$tdataautorizaciones1[".NCSearch"] = true;



$tdataautorizaciones1[".shortTableName"] = "autorizaciones1";
$tdataautorizaciones1[".nSecOptions"] = 0;

$tdataautorizaciones1[".mainTableOwnerID"] = "";
$tdataautorizaciones1[".entityType"] = 6;
$tdataautorizaciones1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataautorizaciones1[".strOriginalTableName"] = "Autorizaciones";

	



$tdataautorizaciones1[".showAddInPopup"] = false;

$tdataautorizaciones1[".showEditInPopup"] = false;

$tdataautorizaciones1[".showViewInPopup"] = false;

$tdataautorizaciones1[".listAjax"] = false;
//	temporary
//$tdataautorizaciones1[".listAjax"] = false;

	$tdataautorizaciones1[".audit"] = false;

	$tdataautorizaciones1[".locking"] = false;


$pages = $tdataautorizaciones1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataautorizaciones1[".edit"] = true;
	$tdataautorizaciones1[".afterEditAction"] = 1;
	$tdataautorizaciones1[".closePopupAfterEdit"] = 1;
	$tdataautorizaciones1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataautorizaciones1[".add"] = true;
$tdataautorizaciones1[".afterAddAction"] = 1;
$tdataautorizaciones1[".closePopupAfterAdd"] = 1;
$tdataautorizaciones1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataautorizaciones1[".list"] = true;
}



$tdataautorizaciones1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataautorizaciones1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataautorizaciones1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataautorizaciones1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataautorizaciones1[".printFriendly"] = true;
}



$tdataautorizaciones1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataautorizaciones1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataautorizaciones1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataautorizaciones1[".isUseAjaxSuggest"] = false;



																																																																																													

$tdataautorizaciones1[".ajaxCodeSnippetAdded"] = false;

$tdataautorizaciones1[".buttonsAdded"] = false;

$tdataautorizaciones1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataautorizaciones1[".isUseTimeForSearch"] = false;


$tdataautorizaciones1[".badgeColor"] = "D2AF80";


$tdataautorizaciones1[".allSearchFields"] = array();
$tdataautorizaciones1[".filterFields"] = array();
$tdataautorizaciones1[".requiredSearchFields"] = array();

$tdataautorizaciones1[".googleLikeFields"] = array();
$tdataautorizaciones1[".googleLikeFields"][] = "ChequeoId";
$tdataautorizaciones1[".googleLikeFields"][] = "Seccional";
$tdataautorizaciones1[".googleLikeFields"][] = "Concepto";
$tdataautorizaciones1[".googleLikeFields"][] = "Tipo";
$tdataautorizaciones1[".googleLikeFields"][] = "Cantidad";
$tdataautorizaciones1[".googleLikeFields"][] = "Obligacion";
$tdataautorizaciones1[".googleLikeFields"][] = "Costas";
$tdataautorizaciones1[".googleLikeFields"][] = "Fecha";
$tdataautorizaciones1[".googleLikeFields"][] = "Competencia";




$tdataautorizaciones1[".printerPageOrientation"] = 0;
$tdataautorizaciones1[".nPrinterPageScale"] = 100;

$tdataautorizaciones1[".nPrinterSplitRecords"] = 40;

$tdataautorizaciones1[".geocodingEnabled"] = false;










$tdataautorizaciones1[".pageSize"] = 20;

$tdataautorizaciones1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataautorizaciones1[".strOrderBy"] = $tstrOrderBy;

$tdataautorizaciones1[".orderindexes"] = array();


$tdataautorizaciones1[".sqlHead"] = "";
$tdataautorizaciones1[".sqlFrom"] = "";
$tdataautorizaciones1[".sqlWhereExpr"] = "";
$tdataautorizaciones1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataautorizaciones1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataautorizaciones1[".arrGroupsPerPage"] = $arrGPP;

$tdataautorizaciones1[".highlightSearchResults"] = true;

$tableKeysautorizaciones1 = array();
$tdataautorizaciones1[".Keys"] = $tableKeysautorizaciones1;


$tdataautorizaciones1[".hideMobileList"] = array();




//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","ChequeoId");
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


	$tdataautorizaciones1["ChequeoId"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "ChequeoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Seccional");
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


	$tdataautorizaciones1["Seccional"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Concepto");
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


	$tdataautorizaciones1["Concepto"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Concepto";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo";

	
		$fdata["FullName"] = "Tipo";

	
	
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


	$tdataautorizaciones1["Tipo"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Tipo";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Cantidad");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "Cantidad";

	
		$fdata["FullName"] = "Cantidad";

	
	
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


	$tdataautorizaciones1["Cantidad"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Obligacion");
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


	$tdataautorizaciones1["Obligacion"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Costas");
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


	$tdataautorizaciones1["Costas"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Costas";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Fecha");
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


	$tdataautorizaciones1["Fecha"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Fecha";
//	Competencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Competencia";
	$fdata["GoodName"] = "Competencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Autorizaciones","Competencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Competencia";

	
		$fdata["FullName"] = "Competencia";

	
	
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


	$tdataautorizaciones1["Competencia"] = $fdata;
		$tdataautorizaciones1[".searchableFields"][] = "Competencia";


$tables_data["Autorizaciones"]=&$tdataautorizaciones1;
$field_labels["Autorizaciones"] = &$fieldLabelsautorizaciones1;
$fieldToolTips["Autorizaciones"] = &$fieldToolTipsautorizaciones1;
$placeHolders["Autorizaciones"] = &$placeHoldersautorizaciones1;
$page_titles["Autorizaciones"] = &$pageTitlesautorizaciones1;


changeTextControlsToDate( "Autorizaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Autorizaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Autorizaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/autorizaciones1_ops.php" ) );



	
		;

									

$tdataautorizaciones1[".sqlquery"] = $queryData_autorizaciones1;



$tdataautorizaciones1[".hasEvents"] = false;

?>