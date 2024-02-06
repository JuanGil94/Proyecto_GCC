<?php
$tdatadbo_procesosprescritos = array();
$tdatadbo_procesosprescritos[".searchableFields"] = array();
$tdatadbo_procesosprescritos[".ShortName"] = "dbo_procesosprescritos";
$tdatadbo_procesosprescritos[".OwnerID"] = "";
$tdatadbo_procesosprescritos[".OriginalTable"] = "dbo.Procesos";


$tdatadbo_procesosprescritos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_procesosprescritos[".originalPagesByType"] = $tdatadbo_procesosprescritos[".pagesByType"];
$tdatadbo_procesosprescritos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_procesosprescritos[".originalPages"] = $tdatadbo_procesosprescritos[".pages"];
$tdatadbo_procesosprescritos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_procesosprescritos[".originalDefaultPages"] = $tdatadbo_procesosprescritos[".defaultPages"];

//	field labels
$fieldLabelsdbo_procesosprescritos = array();
$fieldToolTipsdbo_procesosprescritos = array();
$pageTitlesdbo_procesosprescritos = array();
$placeHoldersdbo_procesosprescritos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_procesosprescritos["Spanish"] = array();
	$fieldToolTipsdbo_procesosprescritos["Spanish"] = array();
	$placeHoldersdbo_procesosprescritos["Spanish"] = array();
	$pageTitlesdbo_procesosprescritos["Spanish"] = array();
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Numero"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Numero"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["SancionadoId"] = "Deudor";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["SancionadoId"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["SancionadoId"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Providencia"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Providencia"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Notificacion"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Notificacion"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Prescripcion"] = "Prescripcion";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Prescripcion"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Prescripcion"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "Fecha Prescripcion";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "";
	if (count($fieldToolTipsdbo_procesosprescritos["Spanish"]))
		$tdatadbo_procesosprescritos[".isUseToolTips"] = true;
}


	$tdatadbo_procesosprescritos[".NCSearch"] = true;



$tdatadbo_procesosprescritos[".shortTableName"] = "dbo_procesosprescritos";
$tdatadbo_procesosprescritos[".nSecOptions"] = 0;

$tdatadbo_procesosprescritos[".mainTableOwnerID"] = "";
$tdatadbo_procesosprescritos[".entityType"] = 1;
$tdatadbo_procesosprescritos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_procesosprescritos[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatadbo_procesosprescritos[".showAddInPopup"] = false;

$tdatadbo_procesosprescritos[".showEditInPopup"] = false;

$tdatadbo_procesosprescritos[".showViewInPopup"] = false;

$tdatadbo_procesosprescritos[".listAjax"] = false;
//	temporary
//$tdatadbo_procesosprescritos[".listAjax"] = false;

	$tdatadbo_procesosprescritos[".audit"] = true;

	$tdatadbo_procesosprescritos[".locking"] = false;


$pages = $tdatadbo_procesosprescritos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_procesosprescritos[".edit"] = true;
	$tdatadbo_procesosprescritos[".afterEditAction"] = 1;
	$tdatadbo_procesosprescritos[".closePopupAfterEdit"] = 1;
	$tdatadbo_procesosprescritos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_procesosprescritos[".add"] = true;
$tdatadbo_procesosprescritos[".afterAddAction"] = 1;
$tdatadbo_procesosprescritos[".closePopupAfterAdd"] = 1;
$tdatadbo_procesosprescritos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_procesosprescritos[".list"] = true;
}



$tdatadbo_procesosprescritos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_procesosprescritos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_procesosprescritos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_procesosprescritos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_procesosprescritos[".printFriendly"] = true;
}



$tdatadbo_procesosprescritos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_procesosprescritos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_procesosprescritos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_procesosprescritos[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatadbo_procesosprescritos[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_procesosprescritos[".buttonsAdded"] = false;

$tdatadbo_procesosprescritos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_procesosprescritos[".isUseTimeForSearch"] = false;


$tdatadbo_procesosprescritos[".badgeColor"] = "DC143C";


$tdatadbo_procesosprescritos[".allSearchFields"] = array();
$tdatadbo_procesosprescritos[".filterFields"] = array();
$tdatadbo_procesosprescritos[".requiredSearchFields"] = array();

$tdatadbo_procesosprescritos[".googleLikeFields"] = array();
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Numero";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "SancionadoId";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Providencia";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Ejecutoria";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Notificacion";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Prescripcion";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "FechaPrescripcion";



$tdatadbo_procesosprescritos[".tableType"] = "list";

$tdatadbo_procesosprescritos[".printerPageOrientation"] = 0;
$tdatadbo_procesosprescritos[".nPrinterPageScale"] = 100;

$tdatadbo_procesosprescritos[".nPrinterSplitRecords"] = 40;

$tdatadbo_procesosprescritos[".geocodingEnabled"] = false;




$tdatadbo_procesosprescritos[".isDisplayLoading"] = true;

$tdatadbo_procesosprescritos[".isResizeColumns"] = true;





$tdatadbo_procesosprescritos[".pageSize"] = 20;

$tdatadbo_procesosprescritos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dbo.Procesos.Fecha DESC";
$tdatadbo_procesosprescritos[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_procesosprescritos[".orderindexes"] = array();


$tdatadbo_procesosprescritos[".sqlHead"] = "SELECT dbo.Procesos.Numero,  dbo.Procesos.SancionadoId,  dbo.Procesos.Providencia,  dbo.Procesos.Ejecutoria,  dbo.Procesos.Notificacion,  dbo.Procesos.Dias AS Prescripcion,  FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd') FechaPrescripcion";
$tdatadbo_procesosprescritos[".sqlFrom"] = "FROM dbo.Procesos";
$tdatadbo_procesosprescritos[".sqlWhereExpr"] = "";
$tdatadbo_procesosprescritos[".sqlTail"] = "";

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
$tdatadbo_procesosprescritos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_procesosprescritos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_procesosprescritos[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_procesosprescritos[".highlightSearchResults"] = true;

$tableKeysdbo_procesosprescritos = array();
$tdatadbo_procesosprescritos[".Keys"] = $tableKeysdbo_procesosprescritos;


$tdatadbo_procesosprescritos[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Numero";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatadbo_procesosprescritos["Numero"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Numero";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.SancionadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Sancionado";

	

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatadbo_procesosprescritos["SancionadoId"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "SancionadoId";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Providencia";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatadbo_procesosprescritos["Providencia"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Ejecutoria";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatadbo_procesosprescritos["Ejecutoria"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Notificacion";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatadbo_procesosprescritos["Notificacion"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Notificacion";
//	Prescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Prescripcion";
	$fdata["GoodName"] = "Prescripcion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Prescripcion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Dias";

	
	
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


	$tdatadbo_procesosprescritos["Prescripcion"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Prescripcion";
//	FechaPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaPrescripcion";
	$fdata["GoodName"] = "FechaPrescripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","FechaPrescripcion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "FechaPrescripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')";

	
	
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


	$tdatadbo_procesosprescritos["FechaPrescripcion"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "FechaPrescripcion";


$tables_data["dbo.ProcesosPrescritos"]=&$tdatadbo_procesosprescritos;
$field_labels["dbo_ProcesosPrescritos"] = &$fieldLabelsdbo_procesosprescritos;
$fieldToolTips["dbo_ProcesosPrescritos"] = &$fieldToolTipsdbo_procesosprescritos;
$placeHolders["dbo_ProcesosPrescritos"] = &$placeHoldersdbo_procesosprescritos;
$page_titles["dbo_ProcesosPrescritos"] = &$pageTitlesdbo_procesosprescritos;


changeTextControlsToDate( "dbo.ProcesosPrescritos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosPrescritos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosPrescritos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ProcesosPrescritos"][0] = $masterParams;
				$masterTablesData["dbo.ProcesosPrescritos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.ProcesosPrescritos"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.ProcesosPrescritos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.ProcesosPrescritos"][0]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_procesosprescritos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Procesos.Numero,  dbo.Procesos.SancionadoId,  dbo.Procesos.Providencia,  dbo.Procesos.Ejecutoria,  dbo.Procesos.Notificacion,  dbo.Procesos.Dias AS Prescripcion,  FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd') FechaPrescripcion";
$proto0["m_strFrom"] = "FROM dbo.Procesos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dbo.Procesos.Fecha DESC";
	
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
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto6["m_sql"] = "dbo.Procesos.Numero";
$proto6["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto8["m_sql"] = "dbo.Procesos.SancionadoId";
$proto8["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto10["m_sql"] = "dbo.Procesos.Providencia";
$proto10["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto12["m_sql"] = "dbo.Procesos.Ejecutoria";
$proto12["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto14["m_sql"] = "dbo.Procesos.Notificacion";
$proto14["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto16["m_sql"] = "dbo.Procesos.Dias";
$proto16["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Prescripcion";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(DAY,dbo.Procesos.Dias,GETDATE())"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'yyyy/MM/dd'"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')";
$proto18["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "FechaPrescripcion";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Procesos";
$proto23["m_srcTableName"] = "dbo.ProcesosPrescritos";
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
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.Procesos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ProcesosPrescritos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_procesosprescritos = createSqlQuery_dbo_procesosprescritos();


	
		;

							

$tdatadbo_procesosprescritos[".sqlquery"] = $queryData_dbo_procesosprescritos;



include_once(getabspath("include/dbo_procesosprescritos_events.php"));
$tdatadbo_procesosprescritos[".hasEvents"] = true;

?>