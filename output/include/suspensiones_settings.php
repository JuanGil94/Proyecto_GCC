<?php
$tdatasuspensiones = array();
$tdatasuspensiones[".searchableFields"] = array();
$tdatasuspensiones[".ShortName"] = "suspensiones";
$tdatasuspensiones[".OwnerID"] = "";
$tdatasuspensiones[".OriginalTable"] = "dbo.Suspensiones";


$tdatasuspensiones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasuspensiones[".originalPagesByType"] = $tdatasuspensiones[".pagesByType"];
$tdatasuspensiones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasuspensiones[".originalPages"] = $tdatasuspensiones[".pages"];
$tdatasuspensiones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasuspensiones[".originalDefaultPages"] = $tdatasuspensiones[".defaultPages"];

//	field labels
$fieldLabelssuspensiones = array();
$fieldToolTipssuspensiones = array();
$pageTitlessuspensiones = array();
$placeHolderssuspensiones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssuspensiones["Spanish"] = array();
	$fieldToolTipssuspensiones["Spanish"] = array();
	$placeHolderssuspensiones["Spanish"] = array();
	$pageTitlessuspensiones["Spanish"] = array();
	$fieldLabelssuspensiones["Spanish"]["SuspensionId"] = "Suspension Id";
	$fieldToolTipssuspensiones["Spanish"]["SuspensionId"] = "";
	$placeHolderssuspensiones["Spanish"]["SuspensionId"] = "";
	$fieldLabelssuspensiones["Spanish"]["Suspension"] = "Suspension";
	$fieldToolTipssuspensiones["Spanish"]["Suspension"] = "";
	$placeHolderssuspensiones["Spanish"]["Suspension"] = "";
	$fieldLabelssuspensiones["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipssuspensiones["Spanish"]["OficioId"] = "";
	$placeHolderssuspensiones["Spanish"]["OficioId"] = "";
	$fieldLabelssuspensiones["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipssuspensiones["Spanish"]["Sigobius"] = "";
	$placeHolderssuspensiones["Spanish"]["Sigobius"] = "";
	$fieldLabelssuspensiones["Spanish"]["Desde"] = "Desde";
	$fieldToolTipssuspensiones["Spanish"]["Desde"] = "";
	$placeHolderssuspensiones["Spanish"]["Desde"] = "";
	$fieldLabelssuspensiones["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipssuspensiones["Spanish"]["Hasta"] = "";
	$placeHolderssuspensiones["Spanish"]["Hasta"] = "";
	if (count($fieldToolTipssuspensiones["Spanish"]))
		$tdatasuspensiones[".isUseToolTips"] = true;
}


	$tdatasuspensiones[".NCSearch"] = true;



$tdatasuspensiones[".shortTableName"] = "suspensiones";
$tdatasuspensiones[".nSecOptions"] = 0;

$tdatasuspensiones[".mainTableOwnerID"] = "";
$tdatasuspensiones[".entityType"] = 0;
$tdatasuspensiones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatasuspensiones[".strOriginalTableName"] = "dbo.Suspensiones";

	



$tdatasuspensiones[".showAddInPopup"] = false;

$tdatasuspensiones[".showEditInPopup"] = false;

$tdatasuspensiones[".showViewInPopup"] = false;

$tdatasuspensiones[".listAjax"] = false;
//	temporary
//$tdatasuspensiones[".listAjax"] = false;

	$tdatasuspensiones[".audit"] = true;

	$tdatasuspensiones[".locking"] = false;


$pages = $tdatasuspensiones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuspensiones[".edit"] = true;
	$tdatasuspensiones[".afterEditAction"] = 1;
	$tdatasuspensiones[".closePopupAfterEdit"] = 1;
	$tdatasuspensiones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuspensiones[".add"] = true;
$tdatasuspensiones[".afterAddAction"] = 1;
$tdatasuspensiones[".closePopupAfterAdd"] = 1;
$tdatasuspensiones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuspensiones[".list"] = true;
}



$tdatasuspensiones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuspensiones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuspensiones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuspensiones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuspensiones[".printFriendly"] = true;
}



$tdatasuspensiones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuspensiones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuspensiones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuspensiones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdatasuspensiones[".ajaxCodeSnippetAdded"] = false;

$tdatasuspensiones[".buttonsAdded"] = false;

$tdatasuspensiones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuspensiones[".isUseTimeForSearch"] = false;


$tdatasuspensiones[".badgeColor"] = "BC8F8F";


$tdatasuspensiones[".allSearchFields"] = array();
$tdatasuspensiones[".filterFields"] = array();
$tdatasuspensiones[".requiredSearchFields"] = array();

$tdatasuspensiones[".googleLikeFields"] = array();
$tdatasuspensiones[".googleLikeFields"][] = "SuspensionId";
$tdatasuspensiones[".googleLikeFields"][] = "Suspension";
$tdatasuspensiones[".googleLikeFields"][] = "OficioId";
$tdatasuspensiones[".googleLikeFields"][] = "Sigobius";
$tdatasuspensiones[".googleLikeFields"][] = "Desde";
$tdatasuspensiones[".googleLikeFields"][] = "Hasta";



$tdatasuspensiones[".tableType"] = "list";

$tdatasuspensiones[".printerPageOrientation"] = 0;
$tdatasuspensiones[".nPrinterPageScale"] = 100;

$tdatasuspensiones[".nPrinterSplitRecords"] = 40;

$tdatasuspensiones[".geocodingEnabled"] = false;





$tdatasuspensiones[".isResizeColumns"] = true;





$tdatasuspensiones[".pageSize"] = 20;

$tdatasuspensiones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasuspensiones[".strOrderBy"] = $tstrOrderBy;

$tdatasuspensiones[".orderindexes"] = array();


$tdatasuspensiones[".sqlHead"] = "SELECT SuspensionId,  	Suspension,  	OficioId,  	Sigobius,  	Desde,  	Hasta";
$tdatasuspensiones[".sqlFrom"] = "FROM dbo.Suspensiones";
$tdatasuspensiones[".sqlWhereExpr"] = "";
$tdatasuspensiones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuspensiones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuspensiones[".arrGroupsPerPage"] = $arrGPP;

$tdatasuspensiones[".highlightSearchResults"] = true;

$tableKeyssuspensiones = array();
$tableKeyssuspensiones[] = "SuspensionId";
$tdatasuspensiones[".Keys"] = $tableKeyssuspensiones;


$tdatasuspensiones[".hideMobileList"] = array();




//	SuspensionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SuspensionId";
	$fdata["GoodName"] = "SuspensionId";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","SuspensionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SuspensionId";

		$fdata["sourceSingle"] = "SuspensionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SuspensionId";

	
	
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


	$tdatasuspensiones["SuspensionId"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "SuspensionId";
//	Suspension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Suspension";
	$fdata["GoodName"] = "Suspension";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","Suspension");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Suspension";

		$fdata["sourceSingle"] = "Suspension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suspension";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatasuspensiones["Suspension"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "Suspension";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","OficioId");
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


	$tdatasuspensiones["OficioId"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "OficioId";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","Sigobius");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdatasuspensiones["Sigobius"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "Sigobius";
//	Desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Desde";
	$fdata["GoodName"] = "Desde";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","Desde");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Desde";

		$fdata["sourceSingle"] = "Desde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Desde";

	
	
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


	$tdatasuspensiones["Desde"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "Desde";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Suspensiones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones","Hasta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Hasta";

		$fdata["sourceSingle"] = "Hasta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hasta";

	
	
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


	$tdatasuspensiones["Hasta"] = $fdata;
		$tdatasuspensiones[".searchableFields"][] = "Hasta";


$tables_data["dbo.Suspensiones"]=&$tdatasuspensiones;
$field_labels["dbo_Suspensiones"] = &$fieldLabelssuspensiones;
$fieldToolTips["dbo_Suspensiones"] = &$fieldToolTipssuspensiones;
$placeHolders["dbo_Suspensiones"] = &$placeHolderssuspensiones;
$page_titles["dbo_Suspensiones"] = &$pageTitlessuspensiones;


changeTextControlsToDate( "dbo.Suspensiones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Suspensiones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Suspensiones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Suspensiones"][0] = $masterParams;
				$masterTablesData["dbo.Suspensiones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][0]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Suspensiones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][0]["detailKeys"][]="OficioId";
		
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
					$masterTablesData["dbo.Suspensiones"][1] = $masterParams;
				$masterTablesData["dbo.Suspensiones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][1]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Suspensiones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][1]["detailKeys"][]="OficioId";
		
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
					$masterTablesData["dbo.Suspensiones"][2] = $masterParams;
				$masterTablesData["dbo.Suspensiones"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][2]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Suspensiones"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Suspensiones"][2]["detailKeys"][]="OficioId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_suspensiones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SuspensionId,  	Suspension,  	OficioId,  	Sigobius,  	Desde,  	Hasta";
$proto0["m_strFrom"] = "FROM dbo.Suspensiones";
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
	"m_strName" => "SuspensionId",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto6["m_sql"] = "SuspensionId";
$proto6["m_srcTableName"] = "dbo.Suspensiones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Suspension",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto8["m_sql"] = "Suspension";
$proto8["m_srcTableName"] = "dbo.Suspensiones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto10["m_sql"] = "OficioId";
$proto10["m_srcTableName"] = "dbo.Suspensiones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto12["m_sql"] = "Sigobius";
$proto12["m_srcTableName"] = "dbo.Suspensiones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto14["m_sql"] = "Desde";
$proto14["m_srcTableName"] = "dbo.Suspensiones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Suspensiones",
	"m_srcTableName" => "dbo.Suspensiones"
));

$proto16["m_sql"] = "Hasta";
$proto16["m_srcTableName"] = "dbo.Suspensiones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Suspensiones";
$proto19["m_srcTableName"] = "dbo.Suspensiones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "SuspensionId";
$proto19["m_columns"][] = "Suspension";
$proto19["m_columns"][] = "OficioId";
$proto19["m_columns"][] = "Sigobius";
$proto19["m_columns"][] = "Desde";
$proto19["m_columns"][] = "Hasta";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Suspensiones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Suspensiones";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Suspensiones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_suspensiones = createSqlQuery_suspensiones();


	
		;

						

$tdatasuspensiones[".sqlquery"] = $queryData_suspensiones;



$tdatasuspensiones[".hasEvents"] = false;

?>