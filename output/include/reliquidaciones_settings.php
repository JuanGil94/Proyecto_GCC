<?php
$tdatareliquidaciones = array();
$tdatareliquidaciones[".searchableFields"] = array();
$tdatareliquidaciones[".ShortName"] = "reliquidaciones";
$tdatareliquidaciones[".OwnerID"] = "";
$tdatareliquidaciones[".OriginalTable"] = "dbo.Reliquidaciones";


$tdatareliquidaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareliquidaciones[".originalPagesByType"] = $tdatareliquidaciones[".pagesByType"];
$tdatareliquidaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareliquidaciones[".originalPages"] = $tdatareliquidaciones[".pages"];
$tdatareliquidaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareliquidaciones[".originalDefaultPages"] = $tdatareliquidaciones[".defaultPages"];

//	field labels
$fieldLabelsreliquidaciones = array();
$fieldToolTipsreliquidaciones = array();
$pageTitlesreliquidaciones = array();
$placeHoldersreliquidaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreliquidaciones["Spanish"] = array();
	$fieldToolTipsreliquidaciones["Spanish"] = array();
	$placeHoldersreliquidaciones["Spanish"] = array();
	$pageTitlesreliquidaciones["Spanish"] = array();
	$fieldLabelsreliquidaciones["Spanish"]["ReliquidacionId"] = "Reliquidacion Id";
	$fieldToolTipsreliquidaciones["Spanish"]["ReliquidacionId"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ReliquidacionId"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsreliquidaciones["Spanish"]["ProcesoId"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ProcesoId"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsreliquidaciones["Spanish"]["Fecha"] = "";
	$placeHoldersreliquidaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["Dias"] = "Dias";
	$fieldToolTipsreliquidaciones["Spanish"]["Dias"] = "";
	$placeHoldersreliquidaciones["Spanish"]["Dias"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["Tasa"] = "Tasa";
	$fieldToolTipsreliquidaciones["Spanish"]["Tasa"] = "";
	$placeHoldersreliquidaciones["Spanish"]["Tasa"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsreliquidaciones["Spanish"]["Intereses"] = "";
	$placeHoldersreliquidaciones["Spanish"]["Intereses"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipsreliquidaciones["Spanish"]["ObliReca"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ObliReca"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ObliNove"] = "Obli Nove";
	$fieldToolTipsreliquidaciones["Spanish"]["ObliNove"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ObliNove"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ObliSald"] = "Obli Sald";
	$fieldToolTipsreliquidaciones["Spanish"]["ObliSald"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ObliSald"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["InteReca"] = "Inte Reca";
	$fieldToolTipsreliquidaciones["Spanish"]["InteReca"] = "";
	$placeHoldersreliquidaciones["Spanish"]["InteReca"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["InteNove"] = "Inte Nove";
	$fieldToolTipsreliquidaciones["Spanish"]["InteNove"] = "";
	$placeHoldersreliquidaciones["Spanish"]["InteNove"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["InteSald"] = "Inte Sald";
	$fieldToolTipsreliquidaciones["Spanish"]["InteSald"] = "";
	$placeHoldersreliquidaciones["Spanish"]["InteSald"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["CostReca"] = "Cost Reca";
	$fieldToolTipsreliquidaciones["Spanish"]["CostReca"] = "";
	$placeHoldersreliquidaciones["Spanish"]["CostReca"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["CostNove"] = "Cost Nove";
	$fieldToolTipsreliquidaciones["Spanish"]["CostNove"] = "";
	$placeHoldersreliquidaciones["Spanish"]["CostNove"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["CostSald"] = "Cost Sald";
	$fieldToolTipsreliquidaciones["Spanish"]["CostSald"] = "";
	$placeHoldersreliquidaciones["Spanish"]["CostSald"] = "";
	if (count($fieldToolTipsreliquidaciones["Spanish"]))
		$tdatareliquidaciones[".isUseToolTips"] = true;
}


	$tdatareliquidaciones[".NCSearch"] = true;



$tdatareliquidaciones[".shortTableName"] = "reliquidaciones";
$tdatareliquidaciones[".nSecOptions"] = 0;

$tdatareliquidaciones[".mainTableOwnerID"] = "";
$tdatareliquidaciones[".entityType"] = 0;
$tdatareliquidaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareliquidaciones[".strOriginalTableName"] = "dbo.Reliquidaciones";

	



$tdatareliquidaciones[".showAddInPopup"] = false;

$tdatareliquidaciones[".showEditInPopup"] = false;

$tdatareliquidaciones[".showViewInPopup"] = false;

$tdatareliquidaciones[".listAjax"] = false;
//	temporary
//$tdatareliquidaciones[".listAjax"] = false;

	$tdatareliquidaciones[".audit"] = true;

	$tdatareliquidaciones[".locking"] = false;


$pages = $tdatareliquidaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareliquidaciones[".edit"] = true;
	$tdatareliquidaciones[".afterEditAction"] = 1;
	$tdatareliquidaciones[".closePopupAfterEdit"] = 1;
	$tdatareliquidaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareliquidaciones[".add"] = true;
$tdatareliquidaciones[".afterAddAction"] = 1;
$tdatareliquidaciones[".closePopupAfterAdd"] = 1;
$tdatareliquidaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareliquidaciones[".list"] = true;
}



$tdatareliquidaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareliquidaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareliquidaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareliquidaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareliquidaciones[".printFriendly"] = true;
}



$tdatareliquidaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareliquidaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareliquidaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareliquidaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																										

$tdatareliquidaciones[".ajaxCodeSnippetAdded"] = false;

$tdatareliquidaciones[".buttonsAdded"] = false;

$tdatareliquidaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareliquidaciones[".isUseTimeForSearch"] = false;


$tdatareliquidaciones[".badgeColor"] = "9acd32";


$tdatareliquidaciones[".allSearchFields"] = array();
$tdatareliquidaciones[".filterFields"] = array();
$tdatareliquidaciones[".requiredSearchFields"] = array();

$tdatareliquidaciones[".googleLikeFields"] = array();
$tdatareliquidaciones[".googleLikeFields"][] = "ReliquidacionId";
$tdatareliquidaciones[".googleLikeFields"][] = "ProcesoId";
$tdatareliquidaciones[".googleLikeFields"][] = "Fecha";
$tdatareliquidaciones[".googleLikeFields"][] = "Dias";
$tdatareliquidaciones[".googleLikeFields"][] = "Tasa";
$tdatareliquidaciones[".googleLikeFields"][] = "Intereses";
$tdatareliquidaciones[".googleLikeFields"][] = "ObliReca";
$tdatareliquidaciones[".googleLikeFields"][] = "ObliNove";
$tdatareliquidaciones[".googleLikeFields"][] = "ObliSald";
$tdatareliquidaciones[".googleLikeFields"][] = "InteReca";
$tdatareliquidaciones[".googleLikeFields"][] = "InteNove";
$tdatareliquidaciones[".googleLikeFields"][] = "InteSald";
$tdatareliquidaciones[".googleLikeFields"][] = "CostReca";
$tdatareliquidaciones[".googleLikeFields"][] = "CostNove";
$tdatareliquidaciones[".googleLikeFields"][] = "CostSald";



$tdatareliquidaciones[".tableType"] = "list";

$tdatareliquidaciones[".printerPageOrientation"] = 0;
$tdatareliquidaciones[".nPrinterPageScale"] = 100;

$tdatareliquidaciones[".nPrinterSplitRecords"] = 40;

$tdatareliquidaciones[".geocodingEnabled"] = false;





$tdatareliquidaciones[".isResizeColumns"] = true;





$tdatareliquidaciones[".pageSize"] = 20;

$tdatareliquidaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareliquidaciones[".strOrderBy"] = $tstrOrderBy;

$tdatareliquidaciones[".orderindexes"] = array();


$tdatareliquidaciones[".sqlHead"] = "SELECT ReliquidacionId,  	ProcesoId,  	Fecha,  	Dias,  	Tasa,  	Intereses,  	ObliReca,  	ObliNove,  	ObliSald,  	InteReca,  	InteNove,  	InteSald,  	CostReca,  	CostNove,  	CostSald";
$tdatareliquidaciones[".sqlFrom"] = "FROM dbo.Reliquidaciones";
$tdatareliquidaciones[".sqlWhereExpr"] = "";
$tdatareliquidaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareliquidaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareliquidaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatareliquidaciones[".highlightSearchResults"] = true;

$tableKeysreliquidaciones = array();
$tableKeysreliquidaciones[] = "ReliquidacionId";
$tdatareliquidaciones[".Keys"] = $tableKeysreliquidaciones;


$tdatareliquidaciones[".hideMobileList"] = array();




//	ReliquidacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ReliquidacionId";
	$fdata["GoodName"] = "ReliquidacionId";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","ReliquidacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ReliquidacionId";

		$fdata["sourceSingle"] = "ReliquidacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReliquidacionId";

	
	
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


	$tdatareliquidaciones["ReliquidacionId"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "ReliquidacionId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","ProcesoId");
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


	$tdatareliquidaciones["ProcesoId"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Fecha");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatareliquidaciones["Fecha"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "Fecha";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dias";

	
	
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


	$tdatareliquidaciones["Dias"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "Dias";
//	Tasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tasa";
	$fdata["GoodName"] = "Tasa";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Tasa");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Tasa";

		$fdata["sourceSingle"] = "Tasa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tasa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatareliquidaciones["Tasa"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "Tasa";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Intereses");
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


	$tdatareliquidaciones["Intereses"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "Intereses";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","ObliReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliReca";

		$fdata["sourceSingle"] = "ObliReca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ObliReca";

	
	
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


	$tdatareliquidaciones["ObliReca"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "ObliReca";
//	ObliNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ObliNove";
	$fdata["GoodName"] = "ObliNove";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","ObliNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliNove";

		$fdata["sourceSingle"] = "ObliNove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ObliNove";

	
	
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


	$tdatareliquidaciones["ObliNove"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "ObliNove";
//	ObliSald
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ObliSald";
	$fdata["GoodName"] = "ObliSald";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","ObliSald");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliSald";

		$fdata["sourceSingle"] = "ObliSald";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ObliSald";

	
	
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


	$tdatareliquidaciones["ObliSald"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "ObliSald";
//	InteReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InteReca";
	$fdata["GoodName"] = "InteReca";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","InteReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteReca";

		$fdata["sourceSingle"] = "InteReca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteReca";

	
	
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


	$tdatareliquidaciones["InteReca"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "InteReca";
//	InteNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "InteNove";
	$fdata["GoodName"] = "InteNove";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","InteNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteNove";

		$fdata["sourceSingle"] = "InteNove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteNove";

	
	
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


	$tdatareliquidaciones["InteNove"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "InteNove";
//	InteSald
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "InteSald";
	$fdata["GoodName"] = "InteSald";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","InteSald");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteSald";

		$fdata["sourceSingle"] = "InteSald";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteSald";

	
	
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


	$tdatareliquidaciones["InteSald"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "InteSald";
//	CostReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CostReca";
	$fdata["GoodName"] = "CostReca";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","CostReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostReca";

		$fdata["sourceSingle"] = "CostReca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostReca";

	
	
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


	$tdatareliquidaciones["CostReca"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "CostReca";
//	CostNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CostNove";
	$fdata["GoodName"] = "CostNove";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","CostNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostNove";

		$fdata["sourceSingle"] = "CostNove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostNove";

	
	
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


	$tdatareliquidaciones["CostNove"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "CostNove";
//	CostSald
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CostSald";
	$fdata["GoodName"] = "CostSald";
	$fdata["ownerTable"] = "dbo.Reliquidaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","CostSald");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostSald";

		$fdata["sourceSingle"] = "CostSald";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostSald";

	
	
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


	$tdatareliquidaciones["CostSald"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "CostSald";


$tables_data["dbo.Reliquidaciones"]=&$tdatareliquidaciones;
$field_labels["dbo_Reliquidaciones"] = &$fieldLabelsreliquidaciones;
$fieldToolTips["dbo_Reliquidaciones"] = &$fieldToolTipsreliquidaciones;
$placeHolders["dbo_Reliquidaciones"] = &$placeHoldersreliquidaciones;
$page_titles["dbo_Reliquidaciones"] = &$pageTitlesreliquidaciones;


changeTextControlsToDate( "dbo.Reliquidaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Reliquidaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Reliquidaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Reliquidaciones"][0] = $masterParams;
				$masterTablesData["dbo.Reliquidaciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Reliquidaciones"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Reliquidaciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Reliquidaciones"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reliquidaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ReliquidacionId,  	ProcesoId,  	Fecha,  	Dias,  	Tasa,  	Intereses,  	ObliReca,  	ObliNove,  	ObliSald,  	InteReca,  	InteNove,  	InteSald,  	CostReca,  	CostNove,  	CostSald";
$proto0["m_strFrom"] = "FROM dbo.Reliquidaciones";
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
	"m_strName" => "ReliquidacionId",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto6["m_sql"] = "ReliquidacionId";
$proto6["m_srcTableName"] = "dbo.Reliquidaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Reliquidaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.Reliquidaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto12["m_sql"] = "Dias";
$proto12["m_srcTableName"] = "dbo.Reliquidaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tasa",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto14["m_sql"] = "Tasa";
$proto14["m_srcTableName"] = "dbo.Reliquidaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto16["m_sql"] = "Intereses";
$proto16["m_srcTableName"] = "dbo.Reliquidaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ObliReca",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto18["m_sql"] = "ObliReca";
$proto18["m_srcTableName"] = "dbo.Reliquidaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ObliNove",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto20["m_sql"] = "ObliNove";
$proto20["m_srcTableName"] = "dbo.Reliquidaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ObliSald",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto22["m_sql"] = "ObliSald";
$proto22["m_srcTableName"] = "dbo.Reliquidaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "InteReca",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto24["m_sql"] = "InteReca";
$proto24["m_srcTableName"] = "dbo.Reliquidaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "InteNove",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto26["m_sql"] = "InteNove";
$proto26["m_srcTableName"] = "dbo.Reliquidaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "InteSald",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto28["m_sql"] = "InteSald";
$proto28["m_srcTableName"] = "dbo.Reliquidaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CostReca",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto30["m_sql"] = "CostReca";
$proto30["m_srcTableName"] = "dbo.Reliquidaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CostNove",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto32["m_sql"] = "CostNove";
$proto32["m_srcTableName"] = "dbo.Reliquidaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CostSald",
	"m_strTable" => "dbo.Reliquidaciones",
	"m_srcTableName" => "dbo.Reliquidaciones"
));

$proto34["m_sql"] = "CostSald";
$proto34["m_srcTableName"] = "dbo.Reliquidaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "dbo.Reliquidaciones";
$proto37["m_srcTableName"] = "dbo.Reliquidaciones";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ReliquidacionId";
$proto37["m_columns"][] = "ProcesoId";
$proto37["m_columns"][] = "Fecha";
$proto37["m_columns"][] = "Dias";
$proto37["m_columns"][] = "Tasa";
$proto37["m_columns"][] = "Intereses";
$proto37["m_columns"][] = "ObliReca";
$proto37["m_columns"][] = "ObliNove";
$proto37["m_columns"][] = "ObliSald";
$proto37["m_columns"][] = "InteReca";
$proto37["m_columns"][] = "InteNove";
$proto37["m_columns"][] = "InteSald";
$proto37["m_columns"][] = "CostReca";
$proto37["m_columns"][] = "CostNove";
$proto37["m_columns"][] = "CostSald";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "dbo.Reliquidaciones";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "dbo.Reliquidaciones";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Reliquidaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reliquidaciones = createSqlQuery_reliquidaciones();


	
		;

															

$tdatareliquidaciones[".sqlquery"] = $queryData_reliquidaciones;



$tdatareliquidaciones[".hasEvents"] = false;

?>