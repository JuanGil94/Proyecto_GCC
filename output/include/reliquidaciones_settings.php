<?php
$tdatareliquidaciones = array();
$tdatareliquidaciones[".searchableFields"] = array();
$tdatareliquidaciones[".ShortName"] = "reliquidaciones";
$tdatareliquidaciones[".OwnerID"] = "";
$tdatareliquidaciones[".OriginalTable"] = "dbo.Reliquidaciones";


$tdatareliquidaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareliquidaciones[".originalPagesByType"] = $tdatareliquidaciones[".pagesByType"];
$tdatareliquidaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareliquidaciones[".originalPages"] = $tdatareliquidaciones[".pages"];
$tdatareliquidaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
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
	$fieldLabelsreliquidaciones["Spanish"]["O__Recaudada"] = "O. Recaudada";
	$fieldToolTipsreliquidaciones["Spanish"]["O__Recaudada"] = "";
	$placeHoldersreliquidaciones["Spanish"]["O__Recaudada"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["O__Novedad"] = "O. Novedad";
	$fieldToolTipsreliquidaciones["Spanish"]["O__Novedad"] = "";
	$placeHoldersreliquidaciones["Spanish"]["O__Novedad"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["O__Saldo"] = "O. Saldo";
	$fieldToolTipsreliquidaciones["Spanish"]["O__Saldo"] = "";
	$placeHoldersreliquidaciones["Spanish"]["O__Saldo"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["I__Recaudados"] = "I. Recaudados";
	$fieldToolTipsreliquidaciones["Spanish"]["I__Recaudados"] = "";
	$placeHoldersreliquidaciones["Spanish"]["I__Recaudados"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["I__Novedades"] = "I. Novedades";
	$fieldToolTipsreliquidaciones["Spanish"]["I__Novedades"] = "";
	$placeHoldersreliquidaciones["Spanish"]["I__Novedades"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["I__Saldo"] = "I. Saldo";
	$fieldToolTipsreliquidaciones["Spanish"]["I__Saldo"] = "";
	$placeHoldersreliquidaciones["Spanish"]["I__Saldo"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["C__Recaudados"] = "C. Recaudados";
	$fieldToolTipsreliquidaciones["Spanish"]["C__Recaudados"] = "";
	$placeHoldersreliquidaciones["Spanish"]["C__Recaudados"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["C__Novedad"] = "C. Novedad";
	$fieldToolTipsreliquidaciones["Spanish"]["C__Novedad"] = "";
	$placeHoldersreliquidaciones["Spanish"]["C__Novedad"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["C__Saldo"] = "C. Saldo";
	$fieldToolTipsreliquidaciones["Spanish"]["C__Saldo"] = "";
	$placeHoldersreliquidaciones["Spanish"]["C__Saldo"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["Saldo_Total"] = "Saldo Total";
	$fieldToolTipsreliquidaciones["Spanish"]["Saldo_Total"] = "";
	$placeHoldersreliquidaciones["Spanish"]["Saldo_Total"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsreliquidaciones["Spanish"]["ProcesoId"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ProcesoId"] = "";
	$fieldLabelsreliquidaciones["Spanish"]["ReliquidacionId"] = "Reliquidacion Id";
	$fieldToolTipsreliquidaciones["Spanish"]["ReliquidacionId"] = "";
	$placeHoldersreliquidaciones["Spanish"]["ReliquidacionId"] = "";
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
$tdatareliquidaciones[".googleLikeFields"][] = "O. Recaudada";
$tdatareliquidaciones[".googleLikeFields"][] = "O. Novedad";
$tdatareliquidaciones[".googleLikeFields"][] = "O. Saldo";
$tdatareliquidaciones[".googleLikeFields"][] = "I. Recaudados";
$tdatareliquidaciones[".googleLikeFields"][] = "I. Novedades";
$tdatareliquidaciones[".googleLikeFields"][] = "I. Saldo";
$tdatareliquidaciones[".googleLikeFields"][] = "C. Recaudados";
$tdatareliquidaciones[".googleLikeFields"][] = "C. Novedad";
$tdatareliquidaciones[".googleLikeFields"][] = "C. Saldo";
$tdatareliquidaciones[".googleLikeFields"][] = "Saldo Total";



$tdatareliquidaciones[".tableType"] = "list";

$tdatareliquidaciones[".printerPageOrientation"] = 0;
$tdatareliquidaciones[".nPrinterPageScale"] = 100;

$tdatareliquidaciones[".nPrinterSplitRecords"] = 40;

$tdatareliquidaciones[".geocodingEnabled"] = false;




$tdatareliquidaciones[".isDisplayLoading"] = true;

$tdatareliquidaciones[".isResizeColumns"] = true;





$tdatareliquidaciones[".pageSize"] = 20;

$tdatareliquidaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareliquidaciones[".strOrderBy"] = $tstrOrderBy;

$tdatareliquidaciones[".orderindexes"] = array();


$tdatareliquidaciones[".sqlHead"] = "SELECT ReliquidacionId,  	ProcesoId,  	Fecha,  	Dias,  	Tasa,  	FORMAT(Intereses, 'C', 'es-CO') AS Intereses,  	FORMAT(ObliReca, 'C', 'es-CO') AS 'O. Recaudada',   	FORMAT(ObliNove, 'C', 'es-CO') AS 'O. Novedad',  	FORMAT(ObliSald, 'C', 'es-CO') AS 'O. Saldo',  	FORMAT(InteReca,'C', 'es-CO') AS 'I. Recaudados',  	FORMAT(InteNove,'C', 'es-CO') AS 'I. Novedades',  	FORMAT(InteSald,'C', 'es-CO') AS 'I. Saldo',  	FORMAT(CostReca,'C', 'es-CO') AS 'C. Recaudados',  	FORMAT(CostNove,'C','es-CO') AS 'C. Novedad',  	FORMAT(CostSald,'C','es-CO') AS 'C. Saldo',  	FORMAT((CostSald+InteSald+ObliSald),'C','es-CO') AS 'Saldo Total'";
$tdatareliquidaciones[".sqlFrom"] = "FROM dbo.Reliquidaciones";
$tdatareliquidaciones[".sqlWhereExpr"] = "";
$tdatareliquidaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
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
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Intereses");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Intereses, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
//	O. Recaudada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "O. Recaudada";
	$fdata["GoodName"] = "O__Recaudada";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","O__Recaudada");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "O. Recaudada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(ObliReca, 'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["O. Recaudada"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "O. Recaudada";
//	O. Novedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "O. Novedad";
	$fdata["GoodName"] = "O__Novedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","O__Novedad");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "O. Novedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(ObliNove, 'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["O. Novedad"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "O. Novedad";
//	O. Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "O. Saldo";
	$fdata["GoodName"] = "O__Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","O__Saldo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "O. Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(ObliSald, 'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["O. Saldo"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "O. Saldo";
//	I. Recaudados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I. Recaudados";
	$fdata["GoodName"] = "I__Recaudados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","I__Recaudados");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "I. Recaudados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(InteReca,'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["I. Recaudados"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "I. Recaudados";
//	I. Novedades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "I. Novedades";
	$fdata["GoodName"] = "I__Novedades";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","I__Novedades");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "I. Novedades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(InteNove,'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["I. Novedades"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "I. Novedades";
//	I. Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "I. Saldo";
	$fdata["GoodName"] = "I__Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","I__Saldo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "I. Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(InteSald,'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["I. Saldo"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "I. Saldo";
//	C. Recaudados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "C. Recaudados";
	$fdata["GoodName"] = "C__Recaudados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","C__Recaudados");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "C. Recaudados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(CostReca,'C', 'es-CO')";

	
	
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


	$tdatareliquidaciones["C. Recaudados"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "C. Recaudados";
//	C. Novedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "C. Novedad";
	$fdata["GoodName"] = "C__Novedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","C__Novedad");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "C. Novedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(CostNove,'C','es-CO')";

	
	
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


	$tdatareliquidaciones["C. Novedad"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "C. Novedad";
//	C. Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "C. Saldo";
	$fdata["GoodName"] = "C__Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","C__Saldo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "C. Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(CostSald,'C','es-CO')";

	
	
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


	$tdatareliquidaciones["C. Saldo"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "C. Saldo";
//	Saldo Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Saldo Total";
	$fdata["GoodName"] = "Saldo_Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Reliquidaciones","Saldo_Total");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Saldo Total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT((CostSald+InteSald+ObliSald),'C','es-CO')";

	
	
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


	$tdatareliquidaciones["Saldo Total"] = $fdata;
		$tdatareliquidaciones[".searchableFields"][] = "Saldo Total";


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
$proto0["m_strFieldList"] = "ReliquidacionId,  	ProcesoId,  	Fecha,  	Dias,  	Tasa,  	FORMAT(Intereses, 'C', 'es-CO') AS Intereses,  	FORMAT(ObliReca, 'C', 'es-CO') AS 'O. Recaudada',   	FORMAT(ObliNove, 'C', 'es-CO') AS 'O. Novedad',  	FORMAT(ObliSald, 'C', 'es-CO') AS 'O. Saldo',  	FORMAT(InteReca,'C', 'es-CO') AS 'I. Recaudados',  	FORMAT(InteNove,'C', 'es-CO') AS 'I. Novedades',  	FORMAT(InteSald,'C', 'es-CO') AS 'I. Saldo',  	FORMAT(CostReca,'C', 'es-CO') AS 'C. Recaudados',  	FORMAT(CostNove,'C','es-CO') AS 'C. Novedad',  	FORMAT(CostSald,'C','es-CO') AS 'C. Saldo',  	FORMAT((CostSald+InteSald+ObliSald),'C','es-CO') AS 'Saldo Total'";
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
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Intereses"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "FORMAT(Intereses, 'C', 'es-CO')";
$proto16["m_srcTableName"] = "dbo.Reliquidaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Intereses";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ObliReca"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "FORMAT(ObliReca, 'C', 'es-CO')";
$proto21["m_srcTableName"] = "dbo.Reliquidaciones";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "O. Recaudada";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ObliNove"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "FORMAT(ObliNove, 'C', 'es-CO')";
$proto26["m_srcTableName"] = "dbo.Reliquidaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "O. Novedad";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ObliSald"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "FORMAT(ObliSald, 'C', 'es-CO')";
$proto31["m_srcTableName"] = "dbo.Reliquidaciones";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "O. Saldo";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "InteReca"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "FORMAT(InteReca,'C', 'es-CO')";
$proto36["m_srcTableName"] = "dbo.Reliquidaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "I. Recaudados";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_CUSTOM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "InteNove"
));

$proto42["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto42["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "FORMAT(InteNove,'C', 'es-CO')";
$proto41["m_srcTableName"] = "dbo.Reliquidaciones";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "I. Novedades";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_CUSTOM";
$proto47["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "InteSald"
));

$proto47["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto47["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto47["m_arguments"][]=$obj;
$proto47["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto47);

$proto46["m_sql"] = "FORMAT(InteSald,'C', 'es-CO')";
$proto46["m_srcTableName"] = "dbo.Reliquidaciones";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "I. Saldo";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$proto52=array();
$proto52["m_functiontype"] = "SQLF_CUSTOM";
$proto52["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CostReca"
));

$proto52["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto52["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto52["m_arguments"][]=$obj;
$proto52["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto52);

$proto51["m_sql"] = "FORMAT(CostReca,'C', 'es-CO')";
$proto51["m_srcTableName"] = "dbo.Reliquidaciones";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "C. Recaudados";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_functiontype"] = "SQLF_CUSTOM";
$proto57["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CostNove"
));

$proto57["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto57["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto57["m_arguments"][]=$obj;
$proto57["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto57);

$proto56["m_sql"] = "FORMAT(CostNove,'C','es-CO')";
$proto56["m_srcTableName"] = "dbo.Reliquidaciones";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "C. Novedad";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_CUSTOM";
$proto62["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CostSald"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "FORMAT(CostSald,'C','es-CO')";
$proto61["m_srcTableName"] = "dbo.Reliquidaciones";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "C. Saldo";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$proto67=array();
$proto67["m_functiontype"] = "SQLF_CUSTOM";
$proto67["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(CostSald+InteSald+ObliSald)"
));

$proto67["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto67["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto67["m_arguments"][]=$obj;
$proto67["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto67);

$proto66["m_sql"] = "FORMAT((CostSald+InteSald+ObliSald),'C','es-CO')";
$proto66["m_srcTableName"] = "dbo.Reliquidaciones";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "Saldo Total";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto71=array();
$proto71["m_link"] = "SQLL_MAIN";
			$proto72=array();
$proto72["m_strName"] = "dbo.Reliquidaciones";
$proto72["m_srcTableName"] = "dbo.Reliquidaciones";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "ReliquidacionId";
$proto72["m_columns"][] = "ProcesoId";
$proto72["m_columns"][] = "Fecha";
$proto72["m_columns"][] = "Dias";
$proto72["m_columns"][] = "Tasa";
$proto72["m_columns"][] = "Intereses";
$proto72["m_columns"][] = "ObliReca";
$proto72["m_columns"][] = "ObliNove";
$proto72["m_columns"][] = "ObliSald";
$proto72["m_columns"][] = "InteReca";
$proto72["m_columns"][] = "InteNove";
$proto72["m_columns"][] = "InteSald";
$proto72["m_columns"][] = "CostReca";
$proto72["m_columns"][] = "CostNove";
$proto72["m_columns"][] = "CostSald";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "dbo.Reliquidaciones";
$proto71["m_alias"] = "";
$proto71["m_srcTableName"] = "dbo.Reliquidaciones";
$proto73=array();
$proto73["m_sql"] = "";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

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