<?php
$tdataniveles = array();
$tdataniveles[".searchableFields"] = array();
$tdataniveles[".ShortName"] = "niveles";
$tdataniveles[".OwnerID"] = "";
$tdataniveles[".OriginalTable"] = "dbo.Niveles";


$tdataniveles[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataniveles[".originalPagesByType"] = $tdataniveles[".pagesByType"];
$tdataniveles[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataniveles[".originalPages"] = $tdataniveles[".pages"];
$tdataniveles[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataniveles[".originalDefaultPages"] = $tdataniveles[".defaultPages"];

//	field labels
$fieldLabelsniveles = array();
$fieldToolTipsniveles = array();
$pageTitlesniveles = array();
$placeHoldersniveles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsniveles["Spanish"] = array();
	$fieldToolTipsniveles["Spanish"] = array();
	$placeHoldersniveles["Spanish"] = array();
	$pageTitlesniveles["Spanish"] = array();
	$fieldLabelsniveles["Spanish"]["NivelId"] = "Nivel Id";
	$fieldToolTipsniveles["Spanish"]["NivelId"] = "";
	$placeHoldersniveles["Spanish"]["NivelId"] = "";
	$fieldLabelsniveles["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipsniveles["Spanish"]["Nivel"] = "";
	$placeHoldersniveles["Spanish"]["Nivel"] = "";
	$fieldLabelsniveles["Spanish"]["Desde"] = "Desde";
	$fieldToolTipsniveles["Spanish"]["Desde"] = "";
	$placeHoldersniveles["Spanish"]["Desde"] = "";
	$fieldLabelsniveles["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipsniveles["Spanish"]["Hasta"] = "";
	$placeHoldersniveles["Spanish"]["Hasta"] = "";
	$fieldLabelsniveles["Spanish"]["Busqueda"] = "Busqueda";
	$fieldToolTipsniveles["Spanish"]["Busqueda"] = "";
	$placeHoldersniveles["Spanish"]["Busqueda"] = "";
	$fieldLabelsniveles["Spanish"]["Antiguedad"] = "Antiguedad";
	$fieldToolTipsniveles["Spanish"]["Antiguedad"] = "";
	$placeHoldersniveles["Spanish"]["Antiguedad"] = "";
	$fieldLabelsniveles["Spanish"]["Clasificacion"] = "Clasificacion";
	$fieldToolTipsniveles["Spanish"]["Clasificacion"] = "";
	$placeHoldersniveles["Spanish"]["Clasificacion"] = "";
	if (count($fieldToolTipsniveles["Spanish"]))
		$tdataniveles[".isUseToolTips"] = true;
}


	$tdataniveles[".NCSearch"] = true;



$tdataniveles[".shortTableName"] = "niveles";
$tdataniveles[".nSecOptions"] = 0;

$tdataniveles[".mainTableOwnerID"] = "";
$tdataniveles[".entityType"] = 0;
$tdataniveles[".connId"] = "GCC_at_S00001_CCAD01";


$tdataniveles[".strOriginalTableName"] = "dbo.Niveles";

	



$tdataniveles[".showAddInPopup"] = false;

$tdataniveles[".showEditInPopup"] = false;

$tdataniveles[".showViewInPopup"] = false;

$tdataniveles[".listAjax"] = false;
//	temporary
//$tdataniveles[".listAjax"] = false;

	$tdataniveles[".audit"] = true;

	$tdataniveles[".locking"] = false;


$pages = $tdataniveles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataniveles[".edit"] = true;
	$tdataniveles[".afterEditAction"] = 1;
	$tdataniveles[".closePopupAfterEdit"] = 1;
	$tdataniveles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataniveles[".add"] = true;
$tdataniveles[".afterAddAction"] = 1;
$tdataniveles[".closePopupAfterAdd"] = 1;
$tdataniveles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataniveles[".list"] = true;
}



$tdataniveles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataniveles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataniveles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataniveles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataniveles[".printFriendly"] = true;
}



$tdataniveles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataniveles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataniveles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataniveles[".isUseAjaxSuggest"] = true;



																																																																																										

$tdataniveles[".ajaxCodeSnippetAdded"] = false;

$tdataniveles[".buttonsAdded"] = false;

$tdataniveles[".addPageEvents"] = false;

// use timepicker for search panel
$tdataniveles[".isUseTimeForSearch"] = false;


$tdataniveles[".badgeColor"] = "E67349";


$tdataniveles[".allSearchFields"] = array();
$tdataniveles[".filterFields"] = array();
$tdataniveles[".requiredSearchFields"] = array();

$tdataniveles[".googleLikeFields"] = array();
$tdataniveles[".googleLikeFields"][] = "NivelId";
$tdataniveles[".googleLikeFields"][] = "Nivel";
$tdataniveles[".googleLikeFields"][] = "Desde";
$tdataniveles[".googleLikeFields"][] = "Hasta";
$tdataniveles[".googleLikeFields"][] = "Busqueda";
$tdataniveles[".googleLikeFields"][] = "Antiguedad";
$tdataniveles[".googleLikeFields"][] = "Clasificacion";



$tdataniveles[".tableType"] = "list";

$tdataniveles[".printerPageOrientation"] = 0;
$tdataniveles[".nPrinterPageScale"] = 100;

$tdataniveles[".nPrinterSplitRecords"] = 40;

$tdataniveles[".geocodingEnabled"] = false;





$tdataniveles[".isResizeColumns"] = true;





$tdataniveles[".pageSize"] = 20;

$tdataniveles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataniveles[".strOrderBy"] = $tstrOrderBy;

$tdataniveles[".orderindexes"] = array();


$tdataniveles[".sqlHead"] = "SELECT NivelId,  	Nivel,  	Desde,  	Hasta,  	Busqueda,  	Antiguedad,  	Clasificacion";
$tdataniveles[".sqlFrom"] = "FROM dbo.Niveles";
$tdataniveles[".sqlWhereExpr"] = "";
$tdataniveles[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataniveles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataniveles[".arrGroupsPerPage"] = $arrGPP;

$tdataniveles[".highlightSearchResults"] = true;

$tableKeysniveles = array();
$tableKeysniveles[] = "NivelId";
$tdataniveles[".Keys"] = $tableKeysniveles;


$tdataniveles[".hideMobileList"] = array();




//	NivelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NivelId";
	$fdata["GoodName"] = "NivelId";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","NivelId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NivelId";

		$fdata["sourceSingle"] = "NivelId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NivelId";

	
	
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


	$tdataniveles["NivelId"] = $fdata;
		$tdataniveles[".searchableFields"][] = "NivelId";
//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nivel";

		$fdata["sourceSingle"] = "Nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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


	$tdataniveles["Nivel"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Nivel";
//	Desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Desde";
	$fdata["GoodName"] = "Desde";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Desde");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Desde";

		$fdata["sourceSingle"] = "Desde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Desde";

	
	
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


	$tdataniveles["Desde"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Desde";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Hasta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Hasta";

		$fdata["sourceSingle"] = "Hasta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hasta";

	
	
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


	$tdataniveles["Hasta"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Hasta";
//	Busqueda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Busqueda";
	$fdata["GoodName"] = "Busqueda";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Busqueda");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Busqueda";

		$fdata["sourceSingle"] = "Busqueda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Busqueda";

	
	
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


	$tdataniveles["Busqueda"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Busqueda";
//	Antiguedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Antiguedad";
	$fdata["GoodName"] = "Antiguedad";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Antiguedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Antiguedad";

		$fdata["sourceSingle"] = "Antiguedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Antiguedad";

	
	
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


	$tdataniveles["Antiguedad"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Antiguedad";
//	Clasificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Clasificacion";
	$fdata["GoodName"] = "Clasificacion";
	$fdata["ownerTable"] = "dbo.Niveles";
	$fdata["Label"] = GetFieldLabel("dbo_Niveles","Clasificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clasificacion";

		$fdata["sourceSingle"] = "Clasificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clasificacion";

	
	
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


	$tdataniveles["Clasificacion"] = $fdata;
		$tdataniveles[".searchableFields"][] = "Clasificacion";


$tables_data["dbo.Niveles"]=&$tdataniveles;
$field_labels["dbo_Niveles"] = &$fieldLabelsniveles;
$fieldToolTips["dbo_Niveles"] = &$fieldToolTipsniveles;
$placeHolders["dbo_Niveles"] = &$placeHoldersniveles;
$page_titles["dbo_Niveles"] = &$pageTitlesniveles;


changeTextControlsToDate( "dbo.Niveles" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Niveles"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Niveles"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_niveles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NivelId,  	Nivel,  	Desde,  	Hasta,  	Busqueda,  	Antiguedad,  	Clasificacion";
$proto0["m_strFrom"] = "FROM dbo.Niveles";
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
	"m_strName" => "NivelId",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto6["m_sql"] = "NivelId";
$proto6["m_srcTableName"] = "dbo.Niveles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nivel",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto8["m_sql"] = "Nivel";
$proto8["m_srcTableName"] = "dbo.Niveles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto10["m_sql"] = "Desde";
$proto10["m_srcTableName"] = "dbo.Niveles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto12["m_sql"] = "Hasta";
$proto12["m_srcTableName"] = "dbo.Niveles";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Busqueda",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto14["m_sql"] = "Busqueda";
$proto14["m_srcTableName"] = "dbo.Niveles";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Antiguedad",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto16["m_sql"] = "Antiguedad";
$proto16["m_srcTableName"] = "dbo.Niveles";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Clasificacion",
	"m_strTable" => "dbo.Niveles",
	"m_srcTableName" => "dbo.Niveles"
));

$proto18["m_sql"] = "Clasificacion";
$proto18["m_srcTableName"] = "dbo.Niveles";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Niveles";
$proto21["m_srcTableName"] = "dbo.Niveles";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "NivelId";
$proto21["m_columns"][] = "Nivel";
$proto21["m_columns"][] = "Desde";
$proto21["m_columns"][] = "Hasta";
$proto21["m_columns"][] = "Busqueda";
$proto21["m_columns"][] = "Antiguedad";
$proto21["m_columns"][] = "Clasificacion";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.Niveles";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.Niveles";
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
$proto0["m_srcTableName"]="dbo.Niveles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_niveles = createSqlQuery_niveles();


	
		;

							

$tdataniveles[".sqlquery"] = $queryData_niveles;



$tdataniveles[".hasEvents"] = false;

?>