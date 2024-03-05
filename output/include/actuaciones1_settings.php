<?php
$tdataactuaciones1 = array();
$tdataactuaciones1[".searchableFields"] = array();
$tdataactuaciones1[".ShortName"] = "actuaciones1";
$tdataactuaciones1[".OwnerID"] = "";
$tdataactuaciones1[".OriginalTable"] = "dbo.Actuaciones";


$tdataactuaciones1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataactuaciones1[".originalPagesByType"] = $tdataactuaciones1[".pagesByType"];
$tdataactuaciones1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataactuaciones1[".originalPages"] = $tdataactuaciones1[".pages"];
$tdataactuaciones1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataactuaciones1[".originalDefaultPages"] = $tdataactuaciones1[".defaultPages"];

//	field labels
$fieldLabelsactuaciones1 = array();
$fieldToolTipsactuaciones1 = array();
$pageTitlesactuaciones1 = array();
$placeHoldersactuaciones1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactuaciones1["Spanish"] = array();
	$fieldToolTipsactuaciones1["Spanish"] = array();
	$placeHoldersactuaciones1["Spanish"] = array();
	$pageTitlesactuaciones1["Spanish"] = array();
	$fieldLabelsactuaciones1["Spanish"]["ActuacionId"] = "Actuacion Id";
	$fieldToolTipsactuaciones1["Spanish"]["ActuacionId"] = "";
	$placeHoldersactuaciones1["Spanish"]["ActuacionId"] = "";
	$fieldLabelsactuaciones1["Spanish"]["Actuacion"] = "Actuación";
	$fieldToolTipsactuaciones1["Spanish"]["Actuacion"] = "";
	$placeHoldersactuaciones1["Spanish"]["Actuacion"] = "";
	$fieldLabelsactuaciones1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsactuaciones1["Spanish"]["Fecha"] = "";
	$placeHoldersactuaciones1["Spanish"]["Fecha"] = "";
	$fieldLabelsactuaciones1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsactuaciones1["Spanish"]["Observaciones"] = "";
	$placeHoldersactuaciones1["Spanish"]["Observaciones"] = "";
	$fieldLabelsactuaciones1["Spanish"]["Resolucion"] = "Resolucion";
	$fieldToolTipsactuaciones1["Spanish"]["Resolucion"] = "";
	$placeHoldersactuaciones1["Spanish"]["Resolucion"] = "";
	$fieldLabelsactuaciones1["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsactuaciones1["Spanish"]["ProcesoId"] = "";
	$placeHoldersactuaciones1["Spanish"]["ProcesoId"] = "";
	$pageTitlesactuaciones1["Spanish"]["list"] = "ActuacionesP";
	if (count($fieldToolTipsactuaciones1["Spanish"]))
		$tdataactuaciones1[".isUseToolTips"] = true;
}


	$tdataactuaciones1[".NCSearch"] = true;



$tdataactuaciones1[".shortTableName"] = "actuaciones1";
$tdataactuaciones1[".nSecOptions"] = 0;

$tdataactuaciones1[".mainTableOwnerID"] = "";
$tdataactuaciones1[".entityType"] = 1;
$tdataactuaciones1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataactuaciones1[".strOriginalTableName"] = "dbo.Actuaciones";

	



$tdataactuaciones1[".showAddInPopup"] = false;

$tdataactuaciones1[".showEditInPopup"] = false;

$tdataactuaciones1[".showViewInPopup"] = false;

$tdataactuaciones1[".listAjax"] = false;
//	temporary
//$tdataactuaciones1[".listAjax"] = false;

	$tdataactuaciones1[".audit"] = true;

	$tdataactuaciones1[".locking"] = false;


$pages = $tdataactuaciones1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactuaciones1[".edit"] = true;
	$tdataactuaciones1[".afterEditAction"] = 0;
	$tdataactuaciones1[".closePopupAfterEdit"] = 1;
	$tdataactuaciones1[".afterEditActionDetTable"] = "dbo.Alertas";
}

if( $pages[PAGE_ADD] ) {
$tdataactuaciones1[".add"] = true;
$tdataactuaciones1[".afterAddAction"] = 1;
$tdataactuaciones1[".closePopupAfterAdd"] = 1;
$tdataactuaciones1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactuaciones1[".list"] = true;
}



$tdataactuaciones1[".strSortControlSettingsJSON"] = "[]";




if( $pages[PAGE_VIEW] ) {
$tdataactuaciones1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactuaciones1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactuaciones1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactuaciones1[".printFriendly"] = true;
}



$tdataactuaciones1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactuaciones1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactuaciones1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactuaciones1[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdataactuaciones1[".ajaxCodeSnippetAdded"] = false;

$tdataactuaciones1[".buttonsAdded"] = false;

$tdataactuaciones1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactuaciones1[".isUseTimeForSearch"] = false;


$tdataactuaciones1[".badgeColor"] = "d2af80";


$tdataactuaciones1[".allSearchFields"] = array();
$tdataactuaciones1[".filterFields"] = array();
$tdataactuaciones1[".requiredSearchFields"] = array();

$tdataactuaciones1[".googleLikeFields"] = array();
$tdataactuaciones1[".googleLikeFields"][] = "ActuacionId";
$tdataactuaciones1[".googleLikeFields"][] = "Actuacion";
$tdataactuaciones1[".googleLikeFields"][] = "Fecha";
$tdataactuaciones1[".googleLikeFields"][] = "Resolucion";
$tdataactuaciones1[".googleLikeFields"][] = "Observaciones";
$tdataactuaciones1[".googleLikeFields"][] = "ProcesoId";



$tdataactuaciones1[".tableType"] = "list";

$tdataactuaciones1[".printerPageOrientation"] = 0;
$tdataactuaciones1[".nPrinterPageScale"] = 100;

$tdataactuaciones1[".nPrinterSplitRecords"] = 40;

$tdataactuaciones1[".geocodingEnabled"] = false;





$tdataactuaciones1[".isResizeColumns"] = true;





$tdataactuaciones1[".pageSize"] = 20;

$tdataactuaciones1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactuaciones1[".strOrderBy"] = $tstrOrderBy;

$tdataactuaciones1[".orderindexes"] = array();


$tdataactuaciones1[".sqlHead"] = "SELECT AC.ActuacionId,  AC.Actuacion AS Actuacion,  C.Fecha AS Fecha,  C.Resolucion AS Resolucion,  C.Observaciones AS Observaciones,  P.ProcesoId";
$tdataactuaciones1[".sqlFrom"] = "FROM dbo.Correspondencias AS C  INNER JOIN dbo.Procesos AS P ON C.ProcesoId = P.ProcesoId  INNER JOIN dbo.Oficios AS O ON C.OficioId = O.OficioId  INNER JOIN dbo.Actuaciones AS AC ON O.ActuacionId = AC.ActuacionId";
$tdataactuaciones1[".sqlWhereExpr"] = "";
$tdataactuaciones1[".sqlTail"] = "";

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
$tdataactuaciones1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactuaciones1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactuaciones1[".arrGroupsPerPage"] = $arrGPP;

$tdataactuaciones1[".highlightSearchResults"] = true;

$tableKeysactuaciones1 = array();
$tableKeysactuaciones1[] = "ActuacionId";
$tdataactuaciones1[".Keys"] = $tableKeysactuaciones1;


$tdataactuaciones1[".hideMobileList"] = array();




//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","ActuacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ActuacionId";

		$fdata["sourceSingle"] = "ActuacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AC.ActuacionId";

	
	
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


	$tdataactuaciones1["ActuacionId"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "ActuacionId";
//	Actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Actuacion";
	$fdata["GoodName"] = "Actuacion";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","Actuacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Actuacion";

		$fdata["sourceSingle"] = "Actuacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AC.Actuacion";

	
	
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


	$tdataactuaciones1["Actuacion"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "Actuacion";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Fecha";

	
	
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


	$tdataactuaciones1["Fecha"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "Fecha";
//	Resolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Resolucion";
	$fdata["GoodName"] = "Resolucion";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","Resolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Resolucion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Resolucion";

	
	
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


	$tdataactuaciones1["Resolucion"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "Resolucion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Observaciones";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataactuaciones1["Observaciones"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "Observaciones";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones1","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.ProcesoId";

	
	
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


	$tdataactuaciones1["ProcesoId"] = $fdata;
		$tdataactuaciones1[".searchableFields"][] = "ProcesoId";


$tables_data["dbo.Actuaciones1"]=&$tdataactuaciones1;
$field_labels["dbo_Actuaciones1"] = &$fieldLabelsactuaciones1;
$fieldToolTips["dbo_Actuaciones1"] = &$fieldToolTipsactuaciones1;
$placeHolders["dbo_Actuaciones1"] = &$placeHoldersactuaciones1;
$page_titles["dbo_Actuaciones1"] = &$pageTitlesactuaciones1;


changeTextControlsToDate( "dbo.Actuaciones1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Actuaciones1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Actuaciones1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Actuaciones1"][0] = $masterParams;
				$masterTablesData["dbo.Actuaciones1"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Actuaciones1"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Actuaciones1"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Actuaciones1"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actuaciones1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AC.ActuacionId,  AC.Actuacion AS Actuacion,  C.Fecha AS Fecha,  C.Resolucion AS Resolucion,  C.Observaciones AS Observaciones,  P.ProcesoId";
$proto0["m_strFrom"] = "FROM dbo.Correspondencias AS C  INNER JOIN dbo.Procesos AS P ON C.ProcesoId = P.ProcesoId  INNER JOIN dbo.Oficios AS O ON C.OficioId = O.OficioId  INNER JOIN dbo.Actuaciones AS AC ON O.ActuacionId = AC.ActuacionId";
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
	"m_strName" => "ActuacionId",
	"m_strTable" => "AC",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto6["m_sql"] = "AC.ActuacionId";
$proto6["m_srcTableName"] = "dbo.Actuaciones1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Actuacion",
	"m_strTable" => "AC",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto8["m_sql"] = "AC.Actuacion";
$proto8["m_srcTableName"] = "dbo.Actuaciones1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Actuacion";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto10["m_sql"] = "C.Fecha";
$proto10["m_srcTableName"] = "dbo.Actuaciones1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Fecha";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Resolucion",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto12["m_sql"] = "C.Resolucion";
$proto12["m_srcTableName"] = "dbo.Actuaciones1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Resolucion";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto14["m_sql"] = "C.Observaciones";
$proto14["m_srcTableName"] = "dbo.Actuaciones1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Observaciones";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto16["m_sql"] = "P.ProcesoId";
$proto16["m_srcTableName"] = "dbo.Actuaciones1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Correspondencias";
$proto19["m_srcTableName"] = "dbo.Actuaciones1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "CorrespondenciaId";
$proto19["m_columns"][] = "ProcesoId";
$proto19["m_columns"][] = "OficioId";
$proto19["m_columns"][] = "Fecha";
$proto19["m_columns"][] = "Sigobius";
$proto19["m_columns"][] = "Observaciones";
$proto19["m_columns"][] = "Resolucion";
$proto19["m_columns"][] = "Codigo";
$proto19["m_columns"][] = "Radicado";
$proto19["m_columns"][] = "UserId";
$proto19["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Correspondencias AS C";
$proto18["m_alias"] = "C";
$proto18["m_srcTableName"] = "dbo.Actuaciones1";
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
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Procesos";
$proto23["m_srcTableName"] = "dbo.Actuaciones1";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ProcesoId";
$proto23["m_columns"][] = "SeccionalId";
$proto23["m_columns"][] = "AbogadoId";
$proto23["m_columns"][] = "Fecha";
$proto23["m_columns"][] = "Numero";
$proto23["m_columns"][] = "DespachoId";
$proto23["m_columns"][] = "SancionadoId";
$proto23["m_columns"][] = "Providencia";
$proto23["m_columns"][] = "Ejecutoria";
$proto23["m_columns"][] = "ConceptoId";
$proto23["m_columns"][] = "EstadoId";
$proto23["m_columns"][] = "EtapaId";
$proto23["m_columns"][] = "Folios";
$proto23["m_columns"][] = "Tipo";
$proto23["m_columns"][] = "Cantidad";
$proto23["m_columns"][] = "Obligacion";
$proto23["m_columns"][] = "Costas";
$proto23["m_columns"][] = "Liquidacion";
$proto23["m_columns"][] = "Dias";
$proto23["m_columns"][] = "Intereses";
$proto23["m_columns"][] = "Recaudo";
$proto23["m_columns"][] = "CalificacionId";
$proto23["m_columns"][] = "Terminacion";
$proto23["m_columns"][] = "MotivoId";
$proto23["m_columns"][] = "Observaciones";
$proto23["m_columns"][] = "Cuotas";
$proto23["m_columns"][] = "Abono";
$proto23["m_columns"][] = "Inicio";
$proto23["m_columns"][] = "VlrCuota";
$proto23["m_columns"][] = "VlrIntereses";
$proto23["m_columns"][] = "Garantia";
$proto23["m_columns"][] = "Radicado";
$proto23["m_columns"][] = "Remisorio";
$proto23["m_columns"][] = "Acuerdo";
$proto23["m_columns"][] = "Incumplimiento";
$proto23["m_columns"][] = "Notificacion";
$proto23["m_columns"][] = "Suspension";
$proto23["m_columns"][] = "Traslado";
$proto23["m_columns"][] = "Error";
$proto23["m_columns"][] = "CarteraTipoId";
$proto23["m_columns"][] = "ConceptoAbogado";
$proto23["m_columns"][] = "Origen";
$proto23["m_columns"][] = "Carpeta";
$proto23["m_columns"][] = "ImportacionId";
$proto23["m_columns"][] = "ActuacionId";
$proto23["m_columns"][] = "ObligacionInicial";
$proto23["m_columns"][] = "CostasInicial";
$proto23["m_columns"][] = "InteresesInicial";
$proto23["m_columns"][] = "MinJusticia";
$proto23["m_columns"][] = "Revocatoria";
$proto23["m_columns"][] = "Mayor";
$proto23["m_columns"][] = "NotificacionValidada";
$proto23["m_columns"][] = "Validado";
$proto23["m_columns"][] = "Seleccionado";
$proto23["m_columns"][] = "CompetenciaId";
$proto23["m_columns"][] = "MinjusticiaId";
$proto23["m_columns"][] = "SeleccionadoPor";
$proto23["m_columns"][] = "Subsanar";
$proto23["m_columns"][] = "NumeroMinjusticia";
$proto23["m_columns"][] = "ProcesoIdOrigen";
$proto23["m_columns"][] = "SeleccionadoFecha";
$proto23["m_columns"][] = "InteresesIniciales";
$proto23["m_columns"][] = "InteresesCalculados";
$proto23["m_columns"][] = "ProcesoIdDestino";
$proto23["m_columns"][] = "RecaudoMinjusticia";
$proto23["m_columns"][] = "RecaudoTerminado";
$proto23["m_columns"][] = "Persuasivo";
$proto23["m_columns"][] = "ObligacionCreacion";
$proto23["m_columns"][] = "InteresesCreacion";
$proto23["m_columns"][] = "CostasCreacion";
$proto23["m_columns"][] = "Plazo";
$proto23["m_columns"][] = "NaturalezaId";
$proto23["m_columns"][] = "TrasladoCartera";
$proto23["m_columns"][] = "CarteraTipoIdOrigen";
$proto23["m_columns"][] = "TrasladoConcepto";
$proto23["m_columns"][] = "ConceptoIdOrigen";
$proto23["m_columns"][] = "AutorizadoPlazo";
$proto23["m_columns"][] = "AutorizadoFecha";
$proto23["m_columns"][] = "AutorizadoPor";
$proto23["m_columns"][] = "Reliquidacion";
$proto23["m_columns"][] = "ChequeoId";
$proto23["m_columns"][] = "VlrCostas";
$proto23["m_columns"][] = "VlrInteresesPlazo";
$proto23["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN dbo.Procesos AS P ON C.ProcesoId = P.ProcesoId";
$proto22["m_alias"] = "P";
$proto22["m_srcTableName"] = "dbo.Actuaciones1";
$proto24=array();
$proto24["m_sql"] = "P.ProcesoId = C.ProcesoId";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= C.ProcesoId";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.Oficios";
$proto27["m_srcTableName"] = "dbo.Actuaciones1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "OficioId";
$proto27["m_columns"][] = "Oficio";
$proto27["m_columns"][] = "Archivo";
$proto27["m_columns"][] = "Activo";
$proto27["m_columns"][] = "ActuacionId";
$proto27["m_columns"][] = "OficioIdRequisito";
$proto27["m_columns"][] = "Direcciones";
$proto27["m_columns"][] = "Edicion";
$proto27["m_columns"][] = "Abierto";
$proto27["m_columns"][] = "Sigobius";
$proto27["m_columns"][] = "Devolucion";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN dbo.Oficios AS O ON C.OficioId = O.OficioId";
$proto26["m_alias"] = "O";
$proto26["m_srcTableName"] = "dbo.Actuaciones1";
$proto28=array();
$proto28["m_sql"] = "O.OficioId = C.OficioId";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "O",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= C.OficioId";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Actuaciones";
$proto31["m_srcTableName"] = "dbo.Actuaciones1";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ActuacionId";
$proto31["m_columns"][] = "Actuacion";
$proto31["m_columns"][] = "EstadoId";
$proto31["m_columns"][] = "MotivoId";
$proto31["m_columns"][] = "Intereses";
$proto31["m_columns"][] = "EtapaId";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN dbo.Actuaciones AS AC ON O.ActuacionId = AC.ActuacionId";
$proto30["m_alias"] = "AC";
$proto30["m_srcTableName"] = "dbo.Actuaciones1";
$proto32=array();
$proto32["m_sql"] = "AC.ActuacionId = O.ActuacionId";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "AC",
	"m_srcTableName" => "dbo.Actuaciones1"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= O.ActuacionId";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Actuaciones1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actuaciones1 = createSqlQuery_actuaciones1();


	
		;

						

$tdataactuaciones1[".sqlquery"] = $queryData_actuaciones1;



$tdataactuaciones1[".hasEvents"] = false;

?>