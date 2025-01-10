<?php
$tdataayudas = array();
$tdataayudas[".searchableFields"] = array();
$tdataayudas[".ShortName"] = "ayudas";
$tdataayudas[".OwnerID"] = "";
$tdataayudas[".OriginalTable"] = "dbo.Ayudas";


$tdataayudas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataayudas[".originalPagesByType"] = $tdataayudas[".pagesByType"];
$tdataayudas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataayudas[".originalPages"] = $tdataayudas[".pages"];
$tdataayudas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataayudas[".originalDefaultPages"] = $tdataayudas[".defaultPages"];

//	field labels
$fieldLabelsayudas = array();
$fieldToolTipsayudas = array();
$pageTitlesayudas = array();
$placeHoldersayudas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsayudas["Spanish"] = array();
	$fieldToolTipsayudas["Spanish"] = array();
	$placeHoldersayudas["Spanish"] = array();
	$pageTitlesayudas["Spanish"] = array();
	$fieldLabelsayudas["Spanish"]["AyudaId"] = "Ayuda Id";
	$fieldToolTipsayudas["Spanish"]["AyudaId"] = "";
	$placeHoldersayudas["Spanish"]["AyudaId"] = "";
	$fieldLabelsayudas["Spanish"]["Ayuda"] = "Ayuda";
	$fieldToolTipsayudas["Spanish"]["Ayuda"] = "";
	$placeHoldersayudas["Spanish"]["Ayuda"] = "";
	$fieldLabelsayudas["Spanish"]["TemaId"] = "Tema";
	$fieldToolTipsayudas["Spanish"]["TemaId"] = "";
	$placeHoldersayudas["Spanish"]["TemaId"] = "";
	$fieldLabelsayudas["Spanish"]["Respuesta"] = "Respuesta";
	$fieldToolTipsayudas["Spanish"]["Respuesta"] = "";
	$placeHoldersayudas["Spanish"]["Respuesta"] = "";
	$fieldLabelsayudas["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsayudas["Spanish"]["Fecha"] = "";
	$placeHoldersayudas["Spanish"]["Fecha"] = "";
	$fieldLabelsayudas["Spanish"]["Visitas"] = "Visitas";
	$fieldToolTipsayudas["Spanish"]["Visitas"] = "";
	$placeHoldersayudas["Spanish"]["Visitas"] = "";
	$pageTitlesayudas["Spanish"]["add"] = "Ayudas";
	$pageTitlesayudas["Spanish"]["edit"] = "Ayudas";
	if (count($fieldToolTipsayudas["Spanish"]))
		$tdataayudas[".isUseToolTips"] = true;
}


	$tdataayudas[".NCSearch"] = true;



$tdataayudas[".shortTableName"] = "ayudas";
$tdataayudas[".nSecOptions"] = 0;

$tdataayudas[".mainTableOwnerID"] = "";
$tdataayudas[".entityType"] = 0;
$tdataayudas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataayudas[".strOriginalTableName"] = "dbo.Ayudas";

	



$tdataayudas[".showAddInPopup"] = false;

$tdataayudas[".showEditInPopup"] = false;

$tdataayudas[".showViewInPopup"] = false;

$tdataayudas[".listAjax"] = false;
//	temporary
//$tdataayudas[".listAjax"] = false;

	$tdataayudas[".audit"] = true;

	$tdataayudas[".locking"] = false;


$pages = $tdataayudas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataayudas[".edit"] = true;
	$tdataayudas[".afterEditAction"] = 1;
	$tdataayudas[".closePopupAfterEdit"] = 1;
	$tdataayudas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataayudas[".add"] = true;
$tdataayudas[".afterAddAction"] = 1;
$tdataayudas[".closePopupAfterAdd"] = 1;
$tdataayudas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataayudas[".list"] = true;
}



$tdataayudas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataayudas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataayudas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataayudas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataayudas[".printFriendly"] = true;
}



$tdataayudas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataayudas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataayudas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataayudas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdataayudas[".ajaxCodeSnippetAdded"] = false;

$tdataayudas[".buttonsAdded"] = false;

$tdataayudas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataayudas[".isUseTimeForSearch"] = false;


$tdataayudas[".badgeColor"] = "CFAE83";


$tdataayudas[".allSearchFields"] = array();
$tdataayudas[".filterFields"] = array();
$tdataayudas[".requiredSearchFields"] = array();

$tdataayudas[".googleLikeFields"] = array();
$tdataayudas[".googleLikeFields"][] = "AyudaId";
$tdataayudas[".googleLikeFields"][] = "Ayuda";
$tdataayudas[".googleLikeFields"][] = "TemaId";
$tdataayudas[".googleLikeFields"][] = "Respuesta";
$tdataayudas[".googleLikeFields"][] = "Fecha";
$tdataayudas[".googleLikeFields"][] = "Visitas";



$tdataayudas[".tableType"] = "list";

$tdataayudas[".printerPageOrientation"] = 0;
$tdataayudas[".nPrinterPageScale"] = 100;

$tdataayudas[".nPrinterSplitRecords"] = 40;

$tdataayudas[".geocodingEnabled"] = false;




$tdataayudas[".isDisplayLoading"] = true;

$tdataayudas[".isResizeColumns"] = true;





$tdataayudas[".pageSize"] = 20;

$tdataayudas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataayudas[".strOrderBy"] = $tstrOrderBy;

$tdataayudas[".orderindexes"] = array();


$tdataayudas[".sqlHead"] = "SELECT AyudaId,  	Ayuda,  	TemaId,  	Respuesta,  	Fecha,  	Visitas";
$tdataayudas[".sqlFrom"] = "FROM dbo.Ayudas";
$tdataayudas[".sqlWhereExpr"] = "";
$tdataayudas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataayudas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataayudas[".arrGroupsPerPage"] = $arrGPP;

$tdataayudas[".highlightSearchResults"] = true;

$tableKeysayudas = array();
$tableKeysayudas[] = "AyudaId";
$tdataayudas[".Keys"] = $tableKeysayudas;


$tdataayudas[".hideMobileList"] = array();




//	AyudaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AyudaId";
	$fdata["GoodName"] = "AyudaId";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","AyudaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AyudaId";

		$fdata["sourceSingle"] = "AyudaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AyudaId";

	
	
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


	$tdataayudas["AyudaId"] = $fdata;
		$tdataayudas[".searchableFields"][] = "AyudaId";
//	Ayuda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ayuda";
	$fdata["GoodName"] = "Ayuda";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","Ayuda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ayuda";

		$fdata["sourceSingle"] = "Ayuda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ayuda";

	
	
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


	$tdataayudas["Ayuda"] = $fdata;
		$tdataayudas[".searchableFields"][] = "Ayuda";
//	TemaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TemaId";
	$fdata["GoodName"] = "TemaId";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","TemaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TemaId";

		$fdata["sourceSingle"] = "TemaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TemaId";

	
	
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
	$edata["LookupTable"] = "dbo.Temas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TemaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tema";

	

	
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


	$tdataayudas["TemaId"] = $fdata;
		$tdataayudas[".searchableFields"][] = "TemaId";
//	Respuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Respuesta";
	$fdata["GoodName"] = "Respuesta";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","Respuesta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Respuesta";

		$fdata["sourceSingle"] = "Respuesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Respuesta";

	
	
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


	$tdataayudas["Respuesta"] = $fdata;
		$tdataayudas[".searchableFields"][] = "Respuesta";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdataayudas["Fecha"] = $fdata;
		$tdataayudas[".searchableFields"][] = "Fecha";
//	Visitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Visitas";
	$fdata["GoodName"] = "Visitas";
	$fdata["ownerTable"] = "dbo.Ayudas";
	$fdata["Label"] = GetFieldLabel("dbo_Ayudas","Visitas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Visitas";

		$fdata["sourceSingle"] = "Visitas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Visitas";

	
	
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


	$tdataayudas["Visitas"] = $fdata;
		$tdataayudas[".searchableFields"][] = "Visitas";


$tables_data["dbo.Ayudas"]=&$tdataayudas;
$field_labels["dbo_Ayudas"] = &$fieldLabelsayudas;
$fieldToolTips["dbo_Ayudas"] = &$fieldToolTipsayudas;
$placeHolders["dbo_Ayudas"] = &$placeHoldersayudas;
$page_titles["dbo_Ayudas"] = &$pageTitlesayudas;


changeTextControlsToDate( "dbo.Ayudas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ayudas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ayudas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ayudas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AyudaId,  	Ayuda,  	TemaId,  	Respuesta,  	Fecha,  	Visitas";
$proto0["m_strFrom"] = "FROM dbo.Ayudas";
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
	"m_strName" => "AyudaId",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto6["m_sql"] = "AyudaId";
$proto6["m_srcTableName"] = "dbo.Ayudas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ayuda",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto8["m_sql"] = "Ayuda";
$proto8["m_srcTableName"] = "dbo.Ayudas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TemaId",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto10["m_sql"] = "TemaId";
$proto10["m_srcTableName"] = "dbo.Ayudas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Respuesta",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto12["m_sql"] = "Respuesta";
$proto12["m_srcTableName"] = "dbo.Ayudas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto14["m_sql"] = "Fecha";
$proto14["m_srcTableName"] = "dbo.Ayudas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Visitas",
	"m_strTable" => "dbo.Ayudas",
	"m_srcTableName" => "dbo.Ayudas"
));

$proto16["m_sql"] = "Visitas";
$proto16["m_srcTableName"] = "dbo.Ayudas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Ayudas";
$proto19["m_srcTableName"] = "dbo.Ayudas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "AyudaId";
$proto19["m_columns"][] = "Ayuda";
$proto19["m_columns"][] = "TemaId";
$proto19["m_columns"][] = "Respuesta";
$proto19["m_columns"][] = "Fecha";
$proto19["m_columns"][] = "Visitas";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Ayudas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Ayudas";
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
$proto0["m_srcTableName"]="dbo.Ayudas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ayudas = createSqlQuery_ayudas();


	
		;

						

$tdataayudas[".sqlquery"] = $queryData_ayudas;



$tdataayudas[".hasEvents"] = false;

?>