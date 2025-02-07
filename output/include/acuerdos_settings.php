<?php
$tdataacuerdos = array();
$tdataacuerdos[".searchableFields"] = array();
$tdataacuerdos[".ShortName"] = "acuerdos";
$tdataacuerdos[".OwnerID"] = "";
$tdataacuerdos[".OriginalTable"] = "dbo.Acuerdos";


$tdataacuerdos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataacuerdos[".originalPagesByType"] = $tdataacuerdos[".pagesByType"];
$tdataacuerdos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataacuerdos[".originalPages"] = $tdataacuerdos[".pages"];
$tdataacuerdos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataacuerdos[".originalDefaultPages"] = $tdataacuerdos[".defaultPages"];

//	field labels
$fieldLabelsacuerdos = array();
$fieldToolTipsacuerdos = array();
$pageTitlesacuerdos = array();
$placeHoldersacuerdos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsacuerdos["Spanish"] = array();
	$fieldToolTipsacuerdos["Spanish"] = array();
	$placeHoldersacuerdos["Spanish"] = array();
	$pageTitlesacuerdos["Spanish"] = array();
	$fieldLabelsacuerdos["Spanish"]["AcuerdoId"] = "Acuerdo Id";
	$fieldToolTipsacuerdos["Spanish"]["AcuerdoId"] = "";
	$placeHoldersacuerdos["Spanish"]["AcuerdoId"] = "";
	$fieldLabelsacuerdos["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsacuerdos["Spanish"]["ProcesoId"] = "";
	$placeHoldersacuerdos["Spanish"]["ProcesoId"] = "";
	$fieldLabelsacuerdos["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsacuerdos["Spanish"]["Fecha"] = "";
	$placeHoldersacuerdos["Spanish"]["Fecha"] = "";
	$fieldLabelsacuerdos["Spanish"]["Total"] = "Valor Cuota";
	$fieldToolTipsacuerdos["Spanish"]["Total"] = "";
	$placeHoldersacuerdos["Spanish"]["Total"] = "";
	$fieldLabelsacuerdos["Spanish"]["Capital"] = "Capital";
	$fieldToolTipsacuerdos["Spanish"]["Capital"] = "";
	$placeHoldersacuerdos["Spanish"]["Capital"] = "";
	$fieldLabelsacuerdos["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsacuerdos["Spanish"]["Intereses"] = "";
	$placeHoldersacuerdos["Spanish"]["Intereses"] = "";
	$fieldLabelsacuerdos["Spanish"]["Cuota"] = "Cuota";
	$fieldToolTipsacuerdos["Spanish"]["Cuota"] = "";
	$placeHoldersacuerdos["Spanish"]["Cuota"] = "";
	$fieldLabelsacuerdos["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsacuerdos["Spanish"]["Costas"] = "";
	$placeHoldersacuerdos["Spanish"]["Costas"] = "";
	$fieldLabelsacuerdos["Spanish"]["InteresesPlazo"] = "Intereses de Plazo";
	$fieldToolTipsacuerdos["Spanish"]["InteresesPlazo"] = "";
	$placeHoldersacuerdos["Spanish"]["InteresesPlazo"] = "";
	$pageTitlesacuerdos["Spanish"]["list"] = "Acuerdos de Pago";
	if (count($fieldToolTipsacuerdos["Spanish"]))
		$tdataacuerdos[".isUseToolTips"] = true;
}


	$tdataacuerdos[".NCSearch"] = true;



$tdataacuerdos[".shortTableName"] = "acuerdos";
$tdataacuerdos[".nSecOptions"] = 0;

$tdataacuerdos[".mainTableOwnerID"] = "";
$tdataacuerdos[".entityType"] = 0;
$tdataacuerdos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataacuerdos[".strOriginalTableName"] = "dbo.Acuerdos";

	



$tdataacuerdos[".showAddInPopup"] = false;

$tdataacuerdos[".showEditInPopup"] = false;

$tdataacuerdos[".showViewInPopup"] = false;

$tdataacuerdos[".listAjax"] = false;
//	temporary
//$tdataacuerdos[".listAjax"] = false;

	$tdataacuerdos[".audit"] = true;

	$tdataacuerdos[".locking"] = false;


$pages = $tdataacuerdos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataacuerdos[".edit"] = true;
	$tdataacuerdos[".afterEditAction"] = 1;
	$tdataacuerdos[".closePopupAfterEdit"] = 1;
	$tdataacuerdos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataacuerdos[".add"] = true;
$tdataacuerdos[".afterAddAction"] = 1;
$tdataacuerdos[".closePopupAfterAdd"] = 1;
$tdataacuerdos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataacuerdos[".list"] = true;
}



$tdataacuerdos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataacuerdos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataacuerdos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataacuerdos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataacuerdos[".printFriendly"] = true;
}



$tdataacuerdos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataacuerdos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataacuerdos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataacuerdos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataacuerdos[".ajaxCodeSnippetAdded"] = false;

$tdataacuerdos[".buttonsAdded"] = false;

$tdataacuerdos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataacuerdos[".isUseTimeForSearch"] = false;


$tdataacuerdos[".badgeColor"] = "00c2c5";


$tdataacuerdos[".allSearchFields"] = array();
$tdataacuerdos[".filterFields"] = array();
$tdataacuerdos[".requiredSearchFields"] = array();

$tdataacuerdos[".googleLikeFields"] = array();
$tdataacuerdos[".googleLikeFields"][] = "AcuerdoId";
$tdataacuerdos[".googleLikeFields"][] = "ProcesoId";
$tdataacuerdos[".googleLikeFields"][] = "Fecha";
$tdataacuerdos[".googleLikeFields"][] = "Total";
$tdataacuerdos[".googleLikeFields"][] = "Capital";
$tdataacuerdos[".googleLikeFields"][] = "Intereses";
$tdataacuerdos[".googleLikeFields"][] = "Cuota";
$tdataacuerdos[".googleLikeFields"][] = "Costas";
$tdataacuerdos[".googleLikeFields"][] = "InteresesPlazo";



$tdataacuerdos[".tableType"] = "list";

$tdataacuerdos[".printerPageOrientation"] = 0;
$tdataacuerdos[".nPrinterPageScale"] = 100;

$tdataacuerdos[".nPrinterSplitRecords"] = 40;

$tdataacuerdos[".geocodingEnabled"] = false;




$tdataacuerdos[".isDisplayLoading"] = true;

$tdataacuerdos[".isResizeColumns"] = true;





$tdataacuerdos[".pageSize"] = 20;

$tdataacuerdos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataacuerdos[".strOrderBy"] = $tstrOrderBy;

$tdataacuerdos[".orderindexes"] = array();


$tdataacuerdos[".sqlHead"] = "SELECT AcuerdoId,  	ProcesoId,  	Fecha,  	Total,  	Capital,  	Intereses,  	Cuota,  	Costas,  	InteresesPlazo";
$tdataacuerdos[".sqlFrom"] = "FROM dbo.Acuerdos";
$tdataacuerdos[".sqlWhereExpr"] = "";
$tdataacuerdos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataacuerdos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataacuerdos[".arrGroupsPerPage"] = $arrGPP;

$tdataacuerdos[".highlightSearchResults"] = true;

$tableKeysacuerdos = array();
$tableKeysacuerdos[] = "AcuerdoId";
$tdataacuerdos[".Keys"] = $tableKeysacuerdos;


$tdataacuerdos[".hideMobileList"] = array();




//	AcuerdoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AcuerdoId";
	$fdata["GoodName"] = "AcuerdoId";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","AcuerdoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AcuerdoId";

		$fdata["sourceSingle"] = "AcuerdoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcuerdoId";

	
	
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


	$tdataacuerdos["AcuerdoId"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "AcuerdoId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Procesos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Numero";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataacuerdos["ProcesoId"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
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


	$tdataacuerdos["Fecha"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Fecha";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Total");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Total";

		$fdata["sourceSingle"] = "Total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["Total"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Total";
//	Capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Capital";
	$fdata["GoodName"] = "Capital";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Capital");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Capital";

		$fdata["sourceSingle"] = "Capital";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Capital";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["Capital"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Capital";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["Intereses"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Intereses";
//	Cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cuota";
	$fdata["GoodName"] = "Cuota";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Cuota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuota";

		$fdata["sourceSingle"] = "Cuota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cuota";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["Cuota"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Cuota";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["Costas"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "Costas";
//	InteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "InteresesPlazo";
	$fdata["GoodName"] = "InteresesPlazo";
	$fdata["ownerTable"] = "dbo.Acuerdos";
	$fdata["Label"] = GetFieldLabel("dbo_Acuerdos","InteresesPlazo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesPlazo";

		$fdata["sourceSingle"] = "InteresesPlazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesPlazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataacuerdos["InteresesPlazo"] = $fdata;
		$tdataacuerdos[".searchableFields"][] = "InteresesPlazo";


$tables_data["dbo.Acuerdos"]=&$tdataacuerdos;
$field_labels["dbo_Acuerdos"] = &$fieldLabelsacuerdos;
$fieldToolTips["dbo_Acuerdos"] = &$fieldToolTipsacuerdos;
$placeHolders["dbo_Acuerdos"] = &$placeHoldersacuerdos;
$page_titles["dbo_Acuerdos"] = &$pageTitlesacuerdos;


changeTextControlsToDate( "dbo.Acuerdos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Acuerdos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Acuerdos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Acuerdos"][0] = $masterParams;
				$masterTablesData["dbo.Acuerdos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Acuerdos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][0]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.ProcesosReasignar";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesosreasignar";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Acuerdos"][1] = $masterParams;
				$masterTablesData["dbo.Acuerdos"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Acuerdos"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][1]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PrescripcionAutomatica";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "prescripcionautomatica";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Acuerdos"][2] = $masterParams;
				$masterTablesData["dbo.Acuerdos"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][2]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Acuerdos"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][2]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MandamientoAutomatico";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mandamientoautomatico";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Acuerdos"][3] = $masterParams;
				$masterTablesData["dbo.Acuerdos"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][3]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Acuerdos"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Acuerdos"][3]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_acuerdos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AcuerdoId,  	ProcesoId,  	Fecha,  	Total,  	Capital,  	Intereses,  	Cuota,  	Costas,  	InteresesPlazo";
$proto0["m_strFrom"] = "FROM dbo.Acuerdos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "AcuerdoId",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto6["m_sql"] = "AcuerdoId";
$proto6["m_srcTableName"] = "dbo.Acuerdos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Acuerdos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.Acuerdos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Total",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto12["m_sql"] = "Total";
$proto12["m_srcTableName"] = "dbo.Acuerdos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Capital",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto14["m_sql"] = "Capital";
$proto14["m_srcTableName"] = "dbo.Acuerdos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto16["m_sql"] = "Intereses";
$proto16["m_srcTableName"] = "dbo.Acuerdos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuota",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto18["m_sql"] = "Cuota";
$proto18["m_srcTableName"] = "dbo.Acuerdos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto20["m_sql"] = "Costas";
$proto20["m_srcTableName"] = "dbo.Acuerdos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesPlazo",
	"m_strTable" => "dbo.Acuerdos",
	"m_srcTableName" => "dbo.Acuerdos"
));

$proto22["m_sql"] = "InteresesPlazo";
$proto22["m_srcTableName"] = "dbo.Acuerdos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Acuerdos";
$proto25["m_srcTableName"] = "dbo.Acuerdos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "AcuerdoId";
$proto25["m_columns"][] = "ProcesoId";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Total";
$proto25["m_columns"][] = "Capital";
$proto25["m_columns"][] = "Intereses";
$proto25["m_columns"][] = "Cuota";
$proto25["m_columns"][] = "Costas";
$proto25["m_columns"][] = "InteresesPlazo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.Acuerdos";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Acuerdos";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Acuerdos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_acuerdos = createSqlQuery_acuerdos();


	
		;

									

$tdataacuerdos[".sqlquery"] = $queryData_acuerdos;



$tdataacuerdos[".hasEvents"] = false;

?>