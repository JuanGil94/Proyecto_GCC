<?php
$tdatachequeosoficios = array();
$tdatachequeosoficios[".searchableFields"] = array();
$tdatachequeosoficios[".ShortName"] = "chequeosoficios";
$tdatachequeosoficios[".OwnerID"] = "";
$tdatachequeosoficios[".OriginalTable"] = "dbo.ChequeosOficios";


$tdatachequeosoficios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatachequeosoficios[".originalPagesByType"] = $tdatachequeosoficios[".pagesByType"];
$tdatachequeosoficios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatachequeosoficios[".originalPages"] = $tdatachequeosoficios[".pages"];
$tdatachequeosoficios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatachequeosoficios[".originalDefaultPages"] = $tdatachequeosoficios[".defaultPages"];

//	field labels
$fieldLabelschequeosoficios = array();
$fieldToolTipschequeosoficios = array();
$pageTitleschequeosoficios = array();
$placeHolderschequeosoficios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelschequeosoficios["Spanish"] = array();
	$fieldToolTipschequeosoficios["Spanish"] = array();
	$placeHolderschequeosoficios["Spanish"] = array();
	$pageTitleschequeosoficios["Spanish"] = array();
	$fieldLabelschequeosoficios["Spanish"]["ChequeoOficioId"] = "Chequeo Oficio Id";
	$fieldToolTipschequeosoficios["Spanish"]["ChequeoOficioId"] = "";
	$placeHolderschequeosoficios["Spanish"]["ChequeoOficioId"] = "";
	$fieldLabelschequeosoficios["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipschequeosoficios["Spanish"]["OficioId"] = "";
	$placeHolderschequeosoficios["Spanish"]["OficioId"] = "";
	$fieldLabelschequeosoficios["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipschequeosoficios["Spanish"]["Fecha"] = "";
	$placeHolderschequeosoficios["Spanish"]["Fecha"] = "";
	$fieldLabelschequeosoficios["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipschequeosoficios["Spanish"]["Radicado"] = "";
	$placeHolderschequeosoficios["Spanish"]["Radicado"] = "";
	$fieldLabelschequeosoficios["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipschequeosoficios["Spanish"]["Codigo"] = "";
	$placeHolderschequeosoficios["Spanish"]["Codigo"] = "";
	$fieldLabelschequeosoficios["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipschequeosoficios["Spanish"]["Observaciones"] = "";
	$placeHolderschequeosoficios["Spanish"]["Observaciones"] = "";
	$fieldLabelschequeosoficios["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipschequeosoficios["Spanish"]["ChequeoId"] = "";
	$placeHolderschequeosoficios["Spanish"]["ChequeoId"] = "";
	if (count($fieldToolTipschequeosoficios["Spanish"]))
		$tdatachequeosoficios[".isUseToolTips"] = true;
}


	$tdatachequeosoficios[".NCSearch"] = true;



$tdatachequeosoficios[".shortTableName"] = "chequeosoficios";
$tdatachequeosoficios[".nSecOptions"] = 0;

$tdatachequeosoficios[".mainTableOwnerID"] = "";
$tdatachequeosoficios[".entityType"] = 0;
$tdatachequeosoficios[".connId"] = "GCC_at_S00001_CCAD01";


$tdatachequeosoficios[".strOriginalTableName"] = "dbo.ChequeosOficios";

	



$tdatachequeosoficios[".showAddInPopup"] = false;

$tdatachequeosoficios[".showEditInPopup"] = false;

$tdatachequeosoficios[".showViewInPopup"] = false;

$tdatachequeosoficios[".listAjax"] = false;
//	temporary
//$tdatachequeosoficios[".listAjax"] = false;

	$tdatachequeosoficios[".audit"] = true;

	$tdatachequeosoficios[".locking"] = false;


$pages = $tdatachequeosoficios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachequeosoficios[".edit"] = true;
	$tdatachequeosoficios[".afterEditAction"] = 1;
	$tdatachequeosoficios[".closePopupAfterEdit"] = 1;
	$tdatachequeosoficios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachequeosoficios[".add"] = true;
$tdatachequeosoficios[".afterAddAction"] = 1;
$tdatachequeosoficios[".closePopupAfterAdd"] = 1;
$tdatachequeosoficios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachequeosoficios[".list"] = true;
}



$tdatachequeosoficios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachequeosoficios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachequeosoficios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachequeosoficios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachequeosoficios[".printFriendly"] = true;
}



$tdatachequeosoficios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachequeosoficios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachequeosoficios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachequeosoficios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdatachequeosoficios[".ajaxCodeSnippetAdded"] = false;

$tdatachequeosoficios[".buttonsAdded"] = false;

$tdatachequeosoficios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachequeosoficios[".isUseTimeForSearch"] = false;


$tdatachequeosoficios[".badgeColor"] = "4169e1";


$tdatachequeosoficios[".allSearchFields"] = array();
$tdatachequeosoficios[".filterFields"] = array();
$tdatachequeosoficios[".requiredSearchFields"] = array();

$tdatachequeosoficios[".googleLikeFields"] = array();
$tdatachequeosoficios[".googleLikeFields"][] = "ChequeoOficioId";
$tdatachequeosoficios[".googleLikeFields"][] = "OficioId";
$tdatachequeosoficios[".googleLikeFields"][] = "Fecha";
$tdatachequeosoficios[".googleLikeFields"][] = "Radicado";
$tdatachequeosoficios[".googleLikeFields"][] = "Codigo";
$tdatachequeosoficios[".googleLikeFields"][] = "Observaciones";
$tdatachequeosoficios[".googleLikeFields"][] = "ChequeoId";



$tdatachequeosoficios[".tableType"] = "list";

$tdatachequeosoficios[".printerPageOrientation"] = 0;
$tdatachequeosoficios[".nPrinterPageScale"] = 100;

$tdatachequeosoficios[".nPrinterSplitRecords"] = 40;

$tdatachequeosoficios[".geocodingEnabled"] = false;





$tdatachequeosoficios[".isResizeColumns"] = true;





$tdatachequeosoficios[".pageSize"] = 20;

$tdatachequeosoficios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachequeosoficios[".strOrderBy"] = $tstrOrderBy;

$tdatachequeosoficios[".orderindexes"] = array();


$tdatachequeosoficios[".sqlHead"] = "SELECT ChequeoOficioId,  	OficioId,  	Fecha,  	Radicado,  	Codigo,  	Observaciones,  	ChequeoId";
$tdatachequeosoficios[".sqlFrom"] = "FROM dbo.ChequeosOficios";
$tdatachequeosoficios[".sqlWhereExpr"] = "";
$tdatachequeosoficios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachequeosoficios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachequeosoficios[".arrGroupsPerPage"] = $arrGPP;

$tdatachequeosoficios[".highlightSearchResults"] = true;

$tableKeyschequeosoficios = array();
$tableKeyschequeosoficios[] = "ChequeoOficioId";
$tdatachequeosoficios[".Keys"] = $tableKeyschequeosoficios;


$tdatachequeosoficios[".hideMobileList"] = array();




//	ChequeoOficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ChequeoOficioId";
	$fdata["GoodName"] = "ChequeoOficioId";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","ChequeoOficioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoOficioId";

		$fdata["sourceSingle"] = "ChequeoOficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeoOficioId";

	
	
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


	$tdatachequeosoficios["ChequeoOficioId"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "ChequeoOficioId";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

				$edata["LookupWhere"] = "Oficio like 'DEV_%' and Edicion=1";


	
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


	$tdatachequeosoficios["OficioId"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "OficioId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","Fecha");
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


	$tdatachequeosoficios["Fecha"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "Fecha";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","Radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

		$fdata["sourceSingle"] = "Radicado";

		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatachequeosoficios["Radicado"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "Radicado";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatachequeosoficios["Codigo"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "Codigo";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatachequeosoficios["Observaciones"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "Observaciones";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.ChequeosOficios";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosOficios","ChequeoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
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


	$tdatachequeosoficios["ChequeoId"] = $fdata;
		$tdatachequeosoficios[".searchableFields"][] = "ChequeoId";


$tables_data["dbo.ChequeosOficios"]=&$tdatachequeosoficios;
$field_labels["dbo_ChequeosOficios"] = &$fieldLabelschequeosoficios;
$fieldToolTips["dbo_ChequeosOficios"] = &$fieldToolTipschequeosoficios;
$placeHolders["dbo_ChequeosOficios"] = &$placeHolderschequeosoficios;
$page_titles["dbo_ChequeosOficios"] = &$pageTitleschequeosoficios;


changeTextControlsToDate( "dbo.ChequeosOficios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ChequeosOficios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ChequeosOficios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosOficios"][0] = $masterParams;
				$masterTablesData["dbo.ChequeosOficios"][0]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][0]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.ChequeosOficios"][0]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][0]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Chequeos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Chequeos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "chequeos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosOficios"][1] = $masterParams;
				$masterTablesData["dbo.ChequeosOficios"][1]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][1]["masterKeys"][]="ChequeoId";
				$masterTablesData["dbo.ChequeosOficios"][1]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][1]["detailKeys"][]="ChequeoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios Sigobius";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios_sigobius";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosOficios"][2] = $masterParams;
				$masterTablesData["dbo.ChequeosOficios"][2]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][2]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.ChequeosOficios"][2]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][2]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosOficios"][3] = $masterParams;
				$masterTablesData["dbo.ChequeosOficios"][3]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][3]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.ChequeosOficios"][3]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][3]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Chequeos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Autorizaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "autorizaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosOficios"][4] = $masterParams;
				$masterTablesData["dbo.ChequeosOficios"][4]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][4]["masterKeys"][]="ChequeoId";
				$masterTablesData["dbo.ChequeosOficios"][4]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosOficios"][4]["detailKeys"][]="ChequeoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chequeosoficios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ChequeoOficioId,  	OficioId,  	Fecha,  	Radicado,  	Codigo,  	Observaciones,  	ChequeoId";
$proto0["m_strFrom"] = "FROM dbo.ChequeosOficios";
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
	"m_strName" => "ChequeoOficioId",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto6["m_sql"] = "ChequeoOficioId";
$proto6["m_srcTableName"] = "dbo.ChequeosOficios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto8["m_sql"] = "OficioId";
$proto8["m_srcTableName"] = "dbo.ChequeosOficios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.ChequeosOficios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto12["m_sql"] = "Radicado";
$proto12["m_srcTableName"] = "dbo.ChequeosOficios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto14["m_sql"] = "Codigo";
$proto14["m_srcTableName"] = "dbo.ChequeosOficios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "dbo.ChequeosOficios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.ChequeosOficios",
	"m_srcTableName" => "dbo.ChequeosOficios"
));

$proto18["m_sql"] = "ChequeoId";
$proto18["m_srcTableName"] = "dbo.ChequeosOficios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.ChequeosOficios";
$proto21["m_srcTableName"] = "dbo.ChequeosOficios";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ChequeoOficioId";
$proto21["m_columns"][] = "OficioId";
$proto21["m_columns"][] = "Fecha";
$proto21["m_columns"][] = "Radicado";
$proto21["m_columns"][] = "Codigo";
$proto21["m_columns"][] = "Observaciones";
$proto21["m_columns"][] = "ChequeoId";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.ChequeosOficios";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.ChequeosOficios";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ChequeosOficios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chequeosoficios = createSqlQuery_chequeosoficios();


	
		;

							

$tdatachequeosoficios[".sqlquery"] = $queryData_chequeosoficios;



include_once(getabspath("include/chequeosoficios_events.php"));
$tdatachequeosoficios[".hasEvents"] = true;

?>