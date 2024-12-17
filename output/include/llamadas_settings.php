<?php
$tdatallamadas = array();
$tdatallamadas[".searchableFields"] = array();
$tdatallamadas[".ShortName"] = "llamadas";
$tdatallamadas[".OwnerID"] = "";
$tdatallamadas[".OriginalTable"] = "dbo.Llamadas";


$tdatallamadas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatallamadas[".originalPagesByType"] = $tdatallamadas[".pagesByType"];
$tdatallamadas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatallamadas[".originalPages"] = $tdatallamadas[".pages"];
$tdatallamadas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatallamadas[".originalDefaultPages"] = $tdatallamadas[".defaultPages"];

//	field labels
$fieldLabelsllamadas = array();
$fieldToolTipsllamadas = array();
$pageTitlesllamadas = array();
$placeHoldersllamadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsllamadas["Spanish"] = array();
	$fieldToolTipsllamadas["Spanish"] = array();
	$placeHoldersllamadas["Spanish"] = array();
	$pageTitlesllamadas["Spanish"] = array();
	$fieldLabelsllamadas["Spanish"]["LlamadaId"] = "Llamada Id";
	$fieldToolTipsllamadas["Spanish"]["LlamadaId"] = "";
	$placeHoldersllamadas["Spanish"]["LlamadaId"] = "";
	$fieldLabelsllamadas["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsllamadas["Spanish"]["ProcesoId"] = "";
	$placeHoldersllamadas["Spanish"]["ProcesoId"] = "";
	$fieldLabelsllamadas["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsllamadas["Spanish"]["Fecha"] = "";
	$placeHoldersllamadas["Spanish"]["Fecha"] = "";
	$fieldLabelsllamadas["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipsllamadas["Spanish"]["Telefono"] = "";
	$placeHoldersllamadas["Spanish"]["Telefono"] = "";
	$fieldLabelsllamadas["Spanish"]["Contesto"] = "Contesto";
	$fieldToolTipsllamadas["Spanish"]["Contesto"] = "";
	$placeHoldersllamadas["Spanish"]["Contesto"] = "";
	$fieldLabelsllamadas["Spanish"]["Mensaje"] = "Mensaje";
	$fieldToolTipsllamadas["Spanish"]["Mensaje"] = "";
	$placeHoldersllamadas["Spanish"]["Mensaje"] = "";
	if (count($fieldToolTipsllamadas["Spanish"]))
		$tdatallamadas[".isUseToolTips"] = true;
}


	$tdatallamadas[".NCSearch"] = true;



$tdatallamadas[".shortTableName"] = "llamadas";
$tdatallamadas[".nSecOptions"] = 0;

$tdatallamadas[".mainTableOwnerID"] = "";
$tdatallamadas[".entityType"] = 0;
$tdatallamadas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatallamadas[".strOriginalTableName"] = "dbo.Llamadas";

	



$tdatallamadas[".showAddInPopup"] = false;

$tdatallamadas[".showEditInPopup"] = false;

$tdatallamadas[".showViewInPopup"] = false;

$tdatallamadas[".listAjax"] = false;
//	temporary
//$tdatallamadas[".listAjax"] = false;

	$tdatallamadas[".audit"] = true;

	$tdatallamadas[".locking"] = false;


$pages = $tdatallamadas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatallamadas[".edit"] = true;
	$tdatallamadas[".afterEditAction"] = 1;
	$tdatallamadas[".closePopupAfterEdit"] = 1;
	$tdatallamadas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatallamadas[".add"] = true;
$tdatallamadas[".afterAddAction"] = 1;
$tdatallamadas[".closePopupAfterAdd"] = 1;
$tdatallamadas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatallamadas[".list"] = true;
}



$tdatallamadas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatallamadas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatallamadas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatallamadas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatallamadas[".printFriendly"] = true;
}



$tdatallamadas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatallamadas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatallamadas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatallamadas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatallamadas[".ajaxCodeSnippetAdded"] = false;

$tdatallamadas[".buttonsAdded"] = false;

$tdatallamadas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatallamadas[".isUseTimeForSearch"] = false;


$tdatallamadas[".badgeColor"] = "dc143c";


$tdatallamadas[".allSearchFields"] = array();
$tdatallamadas[".filterFields"] = array();
$tdatallamadas[".requiredSearchFields"] = array();

$tdatallamadas[".googleLikeFields"] = array();
$tdatallamadas[".googleLikeFields"][] = "LlamadaId";
$tdatallamadas[".googleLikeFields"][] = "ProcesoId";
$tdatallamadas[".googleLikeFields"][] = "Fecha";
$tdatallamadas[".googleLikeFields"][] = "Telefono";
$tdatallamadas[".googleLikeFields"][] = "Contesto";
$tdatallamadas[".googleLikeFields"][] = "Mensaje";



$tdatallamadas[".tableType"] = "list";

$tdatallamadas[".printerPageOrientation"] = 0;
$tdatallamadas[".nPrinterPageScale"] = 100;

$tdatallamadas[".nPrinterSplitRecords"] = 40;

$tdatallamadas[".geocodingEnabled"] = false;




$tdatallamadas[".isDisplayLoading"] = true;

$tdatallamadas[".isResizeColumns"] = true;





$tdatallamadas[".pageSize"] = 20;

$tdatallamadas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatallamadas[".strOrderBy"] = $tstrOrderBy;

$tdatallamadas[".orderindexes"] = array();


$tdatallamadas[".sqlHead"] = "SELECT LlamadaId,  	ProcesoId,  	FORMAT(Fecha, 'yyyy-MM-dd HH:mm:ss') Fecha,  	Telefono,  	Contesto,  	Mensaje";
$tdatallamadas[".sqlFrom"] = "FROM dbo.Llamadas";
$tdatallamadas[".sqlWhereExpr"] = "";
$tdatallamadas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatallamadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatallamadas[".arrGroupsPerPage"] = $arrGPP;

$tdatallamadas[".highlightSearchResults"] = true;

$tableKeysllamadas = array();
$tableKeysllamadas[] = "LlamadaId";
$tdatallamadas[".Keys"] = $tableKeysllamadas;


$tdatallamadas[".hideMobileList"] = array();




//	LlamadaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LlamadaId";
	$fdata["GoodName"] = "LlamadaId";
	$fdata["ownerTable"] = "dbo.Llamadas";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","LlamadaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "LlamadaId";

		$fdata["sourceSingle"] = "LlamadaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LlamadaId";

	
	
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


	$tdatallamadas["LlamadaId"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "LlamadaId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Llamadas";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","ProcesoId");
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


	$tdatallamadas["ProcesoId"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Fecha, 'yyyy-MM-dd HH:mm:ss')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatallamadas["Fecha"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "Fecha";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.Llamadas";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","Telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefono";

		$fdata["sourceSingle"] = "Telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";

	
	
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


	$tdatallamadas["Telefono"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "Telefono";
//	Contesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Contesto";
	$fdata["GoodName"] = "Contesto";
	$fdata["ownerTable"] = "dbo.Llamadas";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","Contesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Contesto";

		$fdata["sourceSingle"] = "Contesto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Contesto";

	
	
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


	$tdatallamadas["Contesto"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "Contesto";
//	Mensaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mensaje";
	$fdata["GoodName"] = "Mensaje";
	$fdata["ownerTable"] = "dbo.Llamadas";
	$fdata["Label"] = GetFieldLabel("dbo_Llamadas","Mensaje");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Mensaje";

		$fdata["sourceSingle"] = "Mensaje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mensaje";

	
	
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


	$tdatallamadas["Mensaje"] = $fdata;
		$tdatallamadas[".searchableFields"][] = "Mensaje";


$tables_data["dbo.Llamadas"]=&$tdatallamadas;
$field_labels["dbo_Llamadas"] = &$fieldLabelsllamadas;
$fieldToolTips["dbo_Llamadas"] = &$fieldToolTipsllamadas;
$placeHolders["dbo_Llamadas"] = &$placeHoldersllamadas;
$page_titles["dbo_Llamadas"] = &$pageTitlesllamadas;


changeTextControlsToDate( "dbo.Llamadas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Llamadas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Llamadas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Llamadas"][0] = $masterParams;
				$masterTablesData["dbo.Llamadas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Llamadas"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Llamadas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Llamadas"][0]["detailKeys"][]="ProcesoId";
		
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
					$masterTablesData["dbo.Llamadas"][1] = $masterParams;
				$masterTablesData["dbo.Llamadas"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Llamadas"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Llamadas"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Llamadas"][1]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_llamadas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LlamadaId,  	ProcesoId,  	FORMAT(Fecha, 'yyyy-MM-dd HH:mm:ss') Fecha,  	Telefono,  	Contesto,  	Mensaje";
$proto0["m_strFrom"] = "FROM dbo.Llamadas";
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
	"m_strName" => "LlamadaId",
	"m_strTable" => "dbo.Llamadas",
	"m_srcTableName" => "dbo.Llamadas"
));

$proto6["m_sql"] = "LlamadaId";
$proto6["m_srcTableName"] = "dbo.Llamadas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Llamadas",
	"m_srcTableName" => "dbo.Llamadas"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Llamadas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Fecha"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'yyyy-MM-dd HH:mm:ss'"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "FORMAT(Fecha, 'yyyy-MM-dd HH:mm:ss')";
$proto10["m_srcTableName"] = "dbo.Llamadas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Fecha";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.Llamadas",
	"m_srcTableName" => "dbo.Llamadas"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "dbo.Llamadas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Contesto",
	"m_strTable" => "dbo.Llamadas",
	"m_srcTableName" => "dbo.Llamadas"
));

$proto16["m_sql"] = "Contesto";
$proto16["m_srcTableName"] = "dbo.Llamadas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Mensaje",
	"m_strTable" => "dbo.Llamadas",
	"m_srcTableName" => "dbo.Llamadas"
));

$proto18["m_sql"] = "Mensaje";
$proto18["m_srcTableName"] = "dbo.Llamadas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Llamadas";
$proto21["m_srcTableName"] = "dbo.Llamadas";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "LlamadaId";
$proto21["m_columns"][] = "ProcesoId";
$proto21["m_columns"][] = "Fecha";
$proto21["m_columns"][] = "Telefono";
$proto21["m_columns"][] = "Contesto";
$proto21["m_columns"][] = "Mensaje";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.Llamadas";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.Llamadas";
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
$proto0["m_srcTableName"]="dbo.Llamadas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_llamadas = createSqlQuery_llamadas();


	
		;

						

$tdatallamadas[".sqlquery"] = $queryData_llamadas;



include_once(getabspath("include/llamadas_events.php"));
$tdatallamadas[".hasEvents"] = true;

?>