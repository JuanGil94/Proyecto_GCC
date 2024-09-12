<?php
$tdatafechas = array();
$tdatafechas[".searchableFields"] = array();
$tdatafechas[".ShortName"] = "fechas";
$tdatafechas[".OwnerID"] = "";
$tdatafechas[".OriginalTable"] = "dbo.Fechas";


$tdatafechas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatafechas[".originalPagesByType"] = $tdatafechas[".pagesByType"];
$tdatafechas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatafechas[".originalPages"] = $tdatafechas[".pages"];
$tdatafechas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatafechas[".originalDefaultPages"] = $tdatafechas[".defaultPages"];

//	field labels
$fieldLabelsfechas = array();
$fieldToolTipsfechas = array();
$pageTitlesfechas = array();
$placeHoldersfechas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfechas["Spanish"] = array();
	$fieldToolTipsfechas["Spanish"] = array();
	$placeHoldersfechas["Spanish"] = array();
	$pageTitlesfechas["Spanish"] = array();
	$fieldLabelsfechas["Spanish"]["FechaId"] = "Fecha Id";
	$fieldToolTipsfechas["Spanish"]["FechaId"] = "";
	$placeHoldersfechas["Spanish"]["FechaId"] = "";
	$fieldLabelsfechas["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsfechas["Spanish"]["ProcesoId"] = "";
	$placeHoldersfechas["Spanish"]["ProcesoId"] = "";
	$fieldLabelsfechas["Spanish"]["ActuacionId"] = "Actuacion";
	$fieldToolTipsfechas["Spanish"]["ActuacionId"] = "";
	$placeHoldersfechas["Spanish"]["ActuacionId"] = "";
	$fieldLabelsfechas["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsfechas["Spanish"]["Fecha"] = "";
	$placeHoldersfechas["Spanish"]["Fecha"] = "";
	$fieldLabelsfechas["Spanish"]["Resolucion"] = "Resolución";
	$fieldToolTipsfechas["Spanish"]["Resolucion"] = "";
	$placeHoldersfechas["Spanish"]["Resolucion"] = "";
	$fieldLabelsfechas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsfechas["Spanish"]["Observaciones"] = "";
	$placeHoldersfechas["Spanish"]["Observaciones"] = "";
	$pageTitlesfechas["Spanish"]["list"] = "Actuaciones";
	if (count($fieldToolTipsfechas["Spanish"]))
		$tdatafechas[".isUseToolTips"] = true;
}


	$tdatafechas[".NCSearch"] = true;



$tdatafechas[".shortTableName"] = "fechas";
$tdatafechas[".nSecOptions"] = 0;

$tdatafechas[".mainTableOwnerID"] = "";
$tdatafechas[".entityType"] = 0;
$tdatafechas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatafechas[".strOriginalTableName"] = "dbo.Fechas";

	



$tdatafechas[".showAddInPopup"] = false;

$tdatafechas[".showEditInPopup"] = false;

$tdatafechas[".showViewInPopup"] = false;

$tdatafechas[".listAjax"] = false;
//	temporary
//$tdatafechas[".listAjax"] = false;

	$tdatafechas[".audit"] = false;

	$tdatafechas[".locking"] = false;


$pages = $tdatafechas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafechas[".edit"] = true;
	$tdatafechas[".afterEditAction"] = 1;
	$tdatafechas[".closePopupAfterEdit"] = 1;
	$tdatafechas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafechas[".add"] = true;
$tdatafechas[".afterAddAction"] = 1;
$tdatafechas[".closePopupAfterAdd"] = 1;
$tdatafechas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafechas[".list"] = true;
}



$tdatafechas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafechas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafechas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafechas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafechas[".printFriendly"] = true;
}



$tdatafechas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafechas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafechas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafechas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdatafechas[".ajaxCodeSnippetAdded"] = false;

$tdatafechas[".buttonsAdded"] = false;

$tdatafechas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafechas[".isUseTimeForSearch"] = false;


$tdatafechas[".badgeColor"] = "9ACD32";


$tdatafechas[".allSearchFields"] = array();
$tdatafechas[".filterFields"] = array();
$tdatafechas[".requiredSearchFields"] = array();

$tdatafechas[".googleLikeFields"] = array();
$tdatafechas[".googleLikeFields"][] = "FechaId";
$tdatafechas[".googleLikeFields"][] = "ProcesoId";
$tdatafechas[".googleLikeFields"][] = "ActuacionId";
$tdatafechas[".googleLikeFields"][] = "Fecha";
$tdatafechas[".googleLikeFields"][] = "Resolucion";
$tdatafechas[".googleLikeFields"][] = "Observaciones";



$tdatafechas[".tableType"] = "list";

$tdatafechas[".printerPageOrientation"] = 0;
$tdatafechas[".nPrinterPageScale"] = 100;

$tdatafechas[".nPrinterSplitRecords"] = 40;

$tdatafechas[".geocodingEnabled"] = false;





$tdatafechas[".isResizeColumns"] = true;





$tdatafechas[".pageSize"] = 20;

$tdatafechas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafechas[".strOrderBy"] = $tstrOrderBy;

$tdatafechas[".orderindexes"] = array();


$tdatafechas[".sqlHead"] = "SELECT FechaId,  	ProcesoId,  	ActuacionId,  	Fecha,  	Resolucion,  	Observaciones";
$tdatafechas[".sqlFrom"] = "FROM dbo.Fechas";
$tdatafechas[".sqlWhereExpr"] = "";
$tdatafechas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafechas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafechas[".arrGroupsPerPage"] = $arrGPP;

$tdatafechas[".highlightSearchResults"] = true;

$tableKeysfechas = array();
$tableKeysfechas[] = "FechaId";
$tdatafechas[".Keys"] = $tableKeysfechas;


$tdatafechas[".hideMobileList"] = array();




//	FechaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FechaId";
	$fdata["GoodName"] = "FechaId";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","FechaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "FechaId";

		$fdata["sourceSingle"] = "FechaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaId";

	
	
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


	$tdatafechas["FechaId"] = $fdata;
		$tdatafechas[".searchableFields"][] = "FechaId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","ProcesoId");
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


	$tdatafechas["ProcesoId"] = $fdata;
		$tdatafechas[".searchableFields"][] = "ProcesoId";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","ActuacionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ActuacionId";

		$fdata["sourceSingle"] = "ActuacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActuacionId";

	
	
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
	$edata["LookupTable"] = "dbo.Actuaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ActuacionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Actuacion";

	

	
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


	$tdatafechas["ActuacionId"] = $fdata;
		$tdatafechas[".searchableFields"][] = "ActuacionId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","Fecha");
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


	$tdatafechas["Fecha"] = $fdata;
		$tdatafechas[".searchableFields"][] = "Fecha";
//	Resolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Resolucion";
	$fdata["GoodName"] = "Resolucion";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","Resolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Resolucion";

		$fdata["sourceSingle"] = "Resolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Resolucion";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatafechas["Resolucion"] = $fdata;
		$tdatafechas[".searchableFields"][] = "Resolucion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Fechas";
	$fdata["Label"] = GetFieldLabel("dbo_Fechas","Observaciones");
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


	$tdatafechas["Observaciones"] = $fdata;
		$tdatafechas[".searchableFields"][] = "Observaciones";


$tables_data["dbo.Fechas"]=&$tdatafechas;
$field_labels["dbo_Fechas"] = &$fieldLabelsfechas;
$fieldToolTips["dbo_Fechas"] = &$fieldToolTipsfechas;
$placeHolders["dbo_Fechas"] = &$placeHoldersfechas;
$page_titles["dbo_Fechas"] = &$pageTitlesfechas;


changeTextControlsToDate( "dbo.Fechas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Fechas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Fechas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Fechas"][0] = $masterParams;
				$masterTablesData["dbo.Fechas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Fechas"][0]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Fechas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Fechas"][0]["detailKeys"][]="ActuacionId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Fechas"][1] = $masterParams;
				$masterTablesData["dbo.Fechas"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Fechas"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Fechas"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Fechas"][1]["detailKeys"][]="ProcesoId";
		
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
					$masterTablesData["dbo.Fechas"][2] = $masterParams;
				$masterTablesData["dbo.Fechas"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Fechas"][2]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Fechas"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Fechas"][2]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fechas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FechaId,  	ProcesoId,  	ActuacionId,  	Fecha,  	Resolucion,  	Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Fechas";
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
	"m_strName" => "FechaId",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto6["m_sql"] = "FechaId";
$proto6["m_srcTableName"] = "dbo.Fechas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Fechas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto10["m_sql"] = "ActuacionId";
$proto10["m_srcTableName"] = "dbo.Fechas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Fechas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Resolucion",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto14["m_sql"] = "Resolucion";
$proto14["m_srcTableName"] = "dbo.Fechas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Fechas",
	"m_srcTableName" => "dbo.Fechas"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "dbo.Fechas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Fechas";
$proto19["m_srcTableName"] = "dbo.Fechas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "FechaId";
$proto19["m_columns"][] = "ProcesoId";
$proto19["m_columns"][] = "ActuacionId";
$proto19["m_columns"][] = "Fecha";
$proto19["m_columns"][] = "Resolucion";
$proto19["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Fechas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Fechas";
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
$proto0["m_srcTableName"]="dbo.Fechas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fechas = createSqlQuery_fechas();


	
		;

						

$tdatafechas[".sqlquery"] = $queryData_fechas;



$tdatafechas[".hasEvents"] = false;

?>