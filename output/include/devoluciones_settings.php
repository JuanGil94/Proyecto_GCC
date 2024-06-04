<?php
$tdatadevoluciones = array();
$tdatadevoluciones[".searchableFields"] = array();
$tdatadevoluciones[".ShortName"] = "devoluciones";
$tdatadevoluciones[".OwnerID"] = "";
$tdatadevoluciones[".OriginalTable"] = "dbo.Devoluciones";


$tdatadevoluciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadevoluciones[".originalPagesByType"] = $tdatadevoluciones[".pagesByType"];
$tdatadevoluciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadevoluciones[".originalPages"] = $tdatadevoluciones[".pages"];
$tdatadevoluciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadevoluciones[".originalDefaultPages"] = $tdatadevoluciones[".defaultPages"];

//	field labels
$fieldLabelsdevoluciones = array();
$fieldToolTipsdevoluciones = array();
$pageTitlesdevoluciones = array();
$placeHoldersdevoluciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdevoluciones["Spanish"] = array();
	$fieldToolTipsdevoluciones["Spanish"] = array();
	$placeHoldersdevoluciones["Spanish"] = array();
	$pageTitlesdevoluciones["Spanish"] = array();
	$fieldLabelsdevoluciones["Spanish"]["DevolucionId"] = "Devolucion Id";
	$fieldToolTipsdevoluciones["Spanish"]["DevolucionId"] = "";
	$placeHoldersdevoluciones["Spanish"]["DevolucionId"] = "";
	$fieldLabelsdevoluciones["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipsdevoluciones["Spanish"]["ChequeoId"] = "";
	$placeHoldersdevoluciones["Spanish"]["ChequeoId"] = "";
	$fieldLabelsdevoluciones["Spanish"]["MotivoDevolucionId"] = "Motivo Devolucion Id";
	$fieldToolTipsdevoluciones["Spanish"]["MotivoDevolucionId"] = "";
	$placeHoldersdevoluciones["Spanish"]["MotivoDevolucionId"] = "";
	$fieldLabelsdevoluciones["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsdevoluciones["Spanish"]["Fecha"] = "";
	$placeHoldersdevoluciones["Spanish"]["Fecha"] = "";
	$fieldLabelsdevoluciones["Spanish"]["Subsanado"] = "Subsanado";
	$fieldToolTipsdevoluciones["Spanish"]["Subsanado"] = "";
	$placeHoldersdevoluciones["Spanish"]["Subsanado"] = "";
	$fieldLabelsdevoluciones["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsdevoluciones["Spanish"]["Observaciones"] = "";
	$placeHoldersdevoluciones["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipsdevoluciones["Spanish"]))
		$tdatadevoluciones[".isUseToolTips"] = true;
}


	$tdatadevoluciones[".NCSearch"] = true;



$tdatadevoluciones[".shortTableName"] = "devoluciones";
$tdatadevoluciones[".nSecOptions"] = 0;

$tdatadevoluciones[".mainTableOwnerID"] = "";
$tdatadevoluciones[".entityType"] = 0;
$tdatadevoluciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadevoluciones[".strOriginalTableName"] = "dbo.Devoluciones";

	



$tdatadevoluciones[".showAddInPopup"] = false;

$tdatadevoluciones[".showEditInPopup"] = false;

$tdatadevoluciones[".showViewInPopup"] = false;

$tdatadevoluciones[".listAjax"] = false;
//	temporary
//$tdatadevoluciones[".listAjax"] = false;

	$tdatadevoluciones[".audit"] = true;

	$tdatadevoluciones[".locking"] = false;


$pages = $tdatadevoluciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadevoluciones[".edit"] = true;
	$tdatadevoluciones[".afterEditAction"] = 1;
	$tdatadevoluciones[".closePopupAfterEdit"] = 1;
	$tdatadevoluciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadevoluciones[".add"] = true;
$tdatadevoluciones[".afterAddAction"] = 1;
$tdatadevoluciones[".closePopupAfterAdd"] = 1;
$tdatadevoluciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadevoluciones[".list"] = true;
}



$tdatadevoluciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadevoluciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadevoluciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadevoluciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadevoluciones[".printFriendly"] = true;
}



$tdatadevoluciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadevoluciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadevoluciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadevoluciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																												

$tdatadevoluciones[".ajaxCodeSnippetAdded"] = false;

$tdatadevoluciones[".buttonsAdded"] = false;

$tdatadevoluciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadevoluciones[".isUseTimeForSearch"] = false;


$tdatadevoluciones[".badgeColor"] = "d2af80";


$tdatadevoluciones[".allSearchFields"] = array();
$tdatadevoluciones[".filterFields"] = array();
$tdatadevoluciones[".requiredSearchFields"] = array();

$tdatadevoluciones[".googleLikeFields"] = array();
$tdatadevoluciones[".googleLikeFields"][] = "DevolucionId";
$tdatadevoluciones[".googleLikeFields"][] = "ChequeoId";
$tdatadevoluciones[".googleLikeFields"][] = "MotivoDevolucionId";
$tdatadevoluciones[".googleLikeFields"][] = "Fecha";
$tdatadevoluciones[".googleLikeFields"][] = "Subsanado";
$tdatadevoluciones[".googleLikeFields"][] = "Observaciones";



$tdatadevoluciones[".tableType"] = "list";

$tdatadevoluciones[".printerPageOrientation"] = 0;
$tdatadevoluciones[".nPrinterPageScale"] = 100;

$tdatadevoluciones[".nPrinterSplitRecords"] = 40;

$tdatadevoluciones[".geocodingEnabled"] = false;





$tdatadevoluciones[".isResizeColumns"] = true;





$tdatadevoluciones[".pageSize"] = 20;

$tdatadevoluciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadevoluciones[".strOrderBy"] = $tstrOrderBy;

$tdatadevoluciones[".orderindexes"] = array();


$tdatadevoluciones[".sqlHead"] = "SELECT DevolucionId,  	ChequeoId,  	MotivoDevolucionId,  	Fecha,  	Subsanado,  	Observaciones";
$tdatadevoluciones[".sqlFrom"] = "FROM dbo.Devoluciones";
$tdatadevoluciones[".sqlWhereExpr"] = "";
$tdatadevoluciones[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatadevoluciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadevoluciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadevoluciones[".arrGroupsPerPage"] = $arrGPP;

$tdatadevoluciones[".highlightSearchResults"] = true;

$tableKeysdevoluciones = array();
$tableKeysdevoluciones[] = "DevolucionId";
$tdatadevoluciones[".Keys"] = $tableKeysdevoluciones;


$tdatadevoluciones[".hideMobileList"] = array();




//	DevolucionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DevolucionId";
	$fdata["GoodName"] = "DevolucionId";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","DevolucionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DevolucionId";

		$fdata["sourceSingle"] = "DevolucionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DevolucionId";

	
	
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


	$tdatadevoluciones["DevolucionId"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "DevolucionId";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","ChequeoId");
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


	$tdatadevoluciones["ChequeoId"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "ChequeoId";
//	MotivoDevolucionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MotivoDevolucionId";
	$fdata["GoodName"] = "MotivoDevolucionId";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","MotivoDevolucionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MotivoDevolucionId";

		$fdata["sourceSingle"] = "MotivoDevolucionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoDevolucionId";

	
	
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
	$edata["LookupTable"] = "dbo.MotivosDevoluciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MotivoDevolucionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "MotivoDevolucion";

	

	
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


	$tdatadevoluciones["MotivoDevolucionId"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "MotivoDevolucionId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","Fecha");
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


	$tdatadevoluciones["Fecha"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "Fecha";
//	Subsanado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Subsanado";
	$fdata["GoodName"] = "Subsanado";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","Subsanado");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Subsanado";

		$fdata["sourceSingle"] = "Subsanado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subsanado";

	
	
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


	$tdatadevoluciones["Subsanado"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "Subsanado";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Devoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_Devoluciones","Observaciones");
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


	$tdatadevoluciones["Observaciones"] = $fdata;
		$tdatadevoluciones[".searchableFields"][] = "Observaciones";


$tables_data["dbo.Devoluciones"]=&$tdatadevoluciones;
$field_labels["dbo_Devoluciones"] = &$fieldLabelsdevoluciones;
$fieldToolTips["dbo_Devoluciones"] = &$fieldToolTipsdevoluciones;
$placeHolders["dbo_Devoluciones"] = &$placeHoldersdevoluciones;
$page_titles["dbo_Devoluciones"] = &$pageTitlesdevoluciones;


changeTextControlsToDate( "dbo.Devoluciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Devoluciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Devoluciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.MotivosDevoluciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.MotivosDevoluciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "motivosdevoluciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Devoluciones"][0] = $masterParams;
				$masterTablesData["dbo.Devoluciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][0]["masterKeys"][]="MotivoDevolucionId";
				$masterTablesData["dbo.Devoluciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][0]["detailKeys"][]="MotivoDevolucionId";
		
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
					$masterTablesData["dbo.Devoluciones"][1] = $masterParams;
				$masterTablesData["dbo.Devoluciones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][1]["masterKeys"][]="ChequeoId";
				$masterTablesData["dbo.Devoluciones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][1]["detailKeys"][]="ChequeoId";
		
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
					$masterTablesData["dbo.Devoluciones"][2] = $masterParams;
				$masterTablesData["dbo.Devoluciones"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][2]["masterKeys"][]="ChequeoId";
				$masterTablesData["dbo.Devoluciones"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Devoluciones"][2]["detailKeys"][]="ChequeoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_devoluciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DevolucionId,  	ChequeoId,  	MotivoDevolucionId,  	Fecha,  	Subsanado,  	Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Devoluciones";
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
	"m_strName" => "DevolucionId",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto6["m_sql"] = "DevolucionId";
$proto6["m_srcTableName"] = "dbo.Devoluciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto8["m_sql"] = "ChequeoId";
$proto8["m_srcTableName"] = "dbo.Devoluciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MotivoDevolucionId",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto10["m_sql"] = "MotivoDevolucionId";
$proto10["m_srcTableName"] = "dbo.Devoluciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Devoluciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Subsanado",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto14["m_sql"] = "Subsanado";
$proto14["m_srcTableName"] = "dbo.Devoluciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Devoluciones",
	"m_srcTableName" => "dbo.Devoluciones"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "dbo.Devoluciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Devoluciones";
$proto19["m_srcTableName"] = "dbo.Devoluciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "DevolucionId";
$proto19["m_columns"][] = "ChequeoId";
$proto19["m_columns"][] = "MotivoDevolucionId";
$proto19["m_columns"][] = "Fecha";
$proto19["m_columns"][] = "Subsanado";
$proto19["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Devoluciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Devoluciones";
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
$proto0["m_srcTableName"]="dbo.Devoluciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_devoluciones = createSqlQuery_devoluciones();


	
		;

						

$tdatadevoluciones[".sqlquery"] = $queryData_devoluciones;



include_once(getabspath("include/devoluciones_events.php"));
$tdatadevoluciones[".hasEvents"] = true;

?>