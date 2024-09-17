<?php
$tdataautorizaciones = array();
$tdataautorizaciones[".searchableFields"] = array();
$tdataautorizaciones[".ShortName"] = "autorizaciones";
$tdataautorizaciones[".OwnerID"] = "";
$tdataautorizaciones[".OriginalTable"] = "dbo.Chequeos";


$tdataautorizaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataautorizaciones[".originalPagesByType"] = $tdataautorizaciones[".pagesByType"];
$tdataautorizaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataautorizaciones[".originalPages"] = $tdataautorizaciones[".pages"];
$tdataautorizaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataautorizaciones[".originalDefaultPages"] = $tdataautorizaciones[".defaultPages"];

//	field labels
$fieldLabelsautorizaciones = array();
$fieldToolTipsautorizaciones = array();
$pageTitlesautorizaciones = array();
$placeHoldersautorizaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsautorizaciones["Spanish"] = array();
	$fieldToolTipsautorizaciones["Spanish"] = array();
	$placeHoldersautorizaciones["Spanish"] = array();
	$pageTitlesautorizaciones["Spanish"] = array();
	$fieldLabelsautorizaciones["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsautorizaciones["Spanish"]["Tipo"] = "";
	$placeHoldersautorizaciones["Spanish"]["Tipo"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsautorizaciones["Spanish"]["Cantidad"] = "";
	$placeHoldersautorizaciones["Spanish"]["Cantidad"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsautorizaciones["Spanish"]["Obligacion"] = "";
	$placeHoldersautorizaciones["Spanish"]["Obligacion"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsautorizaciones["Spanish"]["Costas"] = "";
	$placeHoldersautorizaciones["Spanish"]["Costas"] = "";
	$fieldLabelsautorizaciones["Spanish"]["ChequeoId"] = "# Chequeo";
	$fieldToolTipsautorizaciones["Spanish"]["ChequeoId"] = "";
	$placeHoldersautorizaciones["Spanish"]["ChequeoId"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsautorizaciones["Spanish"]["Seccional"] = "";
	$placeHoldersautorizaciones["Spanish"]["Seccional"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsautorizaciones["Spanish"]["Concepto"] = "";
	$placeHoldersautorizaciones["Spanish"]["Concepto"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsautorizaciones["Spanish"]["Fecha"] = "";
	$placeHoldersautorizaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsautorizaciones["Spanish"]["Competencia"] = "Competencia";
	$fieldToolTipsautorizaciones["Spanish"]["Competencia"] = "";
	$placeHoldersautorizaciones["Spanish"]["Competencia"] = "";
	if (count($fieldToolTipsautorizaciones["Spanish"]))
		$tdataautorizaciones[".isUseToolTips"] = true;
}


	$tdataautorizaciones[".NCSearch"] = true;



$tdataautorizaciones[".shortTableName"] = "autorizaciones";
$tdataautorizaciones[".nSecOptions"] = 0;

$tdataautorizaciones[".mainTableOwnerID"] = "";
$tdataautorizaciones[".entityType"] = 1;
$tdataautorizaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdataautorizaciones[".strOriginalTableName"] = "dbo.Chequeos";

	



$tdataautorizaciones[".showAddInPopup"] = false;

$tdataautorizaciones[".showEditInPopup"] = false;

$tdataautorizaciones[".showViewInPopup"] = false;

$tdataautorizaciones[".listAjax"] = false;
//	temporary
//$tdataautorizaciones[".listAjax"] = false;

	$tdataautorizaciones[".audit"] = true;

	$tdataautorizaciones[".locking"] = false;


$pages = $tdataautorizaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataautorizaciones[".edit"] = true;
	$tdataautorizaciones[".afterEditAction"] = 1;
	$tdataautorizaciones[".closePopupAfterEdit"] = 1;
	$tdataautorizaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataautorizaciones[".add"] = true;
$tdataautorizaciones[".afterAddAction"] = 1;
$tdataautorizaciones[".closePopupAfterAdd"] = 1;
$tdataautorizaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataautorizaciones[".list"] = true;
}



$tdataautorizaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataautorizaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataautorizaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataautorizaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataautorizaciones[".printFriendly"] = true;
}



$tdataautorizaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataautorizaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataautorizaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataautorizaciones[".isUseAjaxSuggest"] = true;



					
				
				
																																																																																																																																																																																												

$tdataautorizaciones[".ajaxCodeSnippetAdded"] = false;

$tdataautorizaciones[".buttonsAdded"] = true;

$tdataautorizaciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdataautorizaciones[".isUseTimeForSearch"] = false;


$tdataautorizaciones[".badgeColor"] = "6DA5C8";


$tdataautorizaciones[".allSearchFields"] = array();
$tdataautorizaciones[".filterFields"] = array();
$tdataautorizaciones[".requiredSearchFields"] = array();

$tdataautorizaciones[".googleLikeFields"] = array();
$tdataautorizaciones[".googleLikeFields"][] = "ChequeoId";
$tdataautorizaciones[".googleLikeFields"][] = "Seccional";
$tdataautorizaciones[".googleLikeFields"][] = "Concepto";
$tdataautorizaciones[".googleLikeFields"][] = "Tipo";
$tdataautorizaciones[".googleLikeFields"][] = "Cantidad";
$tdataautorizaciones[".googleLikeFields"][] = "Obligacion";
$tdataautorizaciones[".googleLikeFields"][] = "Costas";
$tdataautorizaciones[".googleLikeFields"][] = "Fecha";
$tdataautorizaciones[".googleLikeFields"][] = "Competencia";



$tdataautorizaciones[".tableType"] = "list";

$tdataautorizaciones[".printerPageOrientation"] = 0;
$tdataautorizaciones[".nPrinterPageScale"] = 100;

$tdataautorizaciones[".nPrinterSplitRecords"] = 40;

$tdataautorizaciones[".geocodingEnabled"] = false;





$tdataautorizaciones[".isResizeColumns"] = true;





$tdataautorizaciones[".pageSize"] = 20;

$tdataautorizaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataautorizaciones[".strOrderBy"] = $tstrOrderBy;

$tdataautorizaciones[".orderindexes"] = array();


$tdataautorizaciones[".sqlHead"] = "  	SELECT C.ChequeoId,  S.Seccional,  co.Concepto,  t.Tipo,  C.Cantidad,  FORMAT(C.Obligacion, 'C', 'es-CO') AS Obligacion,  FORMAT(C.Costas, 'C', 'es-CO') AS Costas,  C.Fecha,  d.Codigo + ' -  ' +d.Despacho AS Competencia";
$tdataautorizaciones[".sqlFrom"] = "FROM dbo.Chequeos AS C  INNER JOIN dbo.Seccionales AS S ON C.SeccionalId = S.SeccionalId  INNER JOIN dbo.Conceptos AS co ON C.ConceptoId = co.ConceptoId  INNER JOIN dbo.tipoCobro AS t ON C.Tipo = t.TipoId  INNER JOIN dbo.Despachos AS d ON C.DespachoId = d.DespachoId";
$tdataautorizaciones[".sqlWhereExpr"] = "(C.CarteraTipoId =1) AND (C.Procesado <>1) AND (C.Aprobado <>1) AND (C.TramiteId =2) AND (C.SeccionalId=:session.SeccionalUser)";
$tdataautorizaciones[".sqlTail"] = "";

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
$tdataautorizaciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataautorizaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataautorizaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataautorizaciones[".highlightSearchResults"] = true;

$tableKeysautorizaciones = array();
$tableKeysautorizaciones[] = "ChequeoId";
$tdataautorizaciones[".Keys"] = $tableKeysautorizaciones;


$tdataautorizaciones[".hideMobileList"] = array();




//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","ChequeoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.ChequeoId";

	
	
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


	$tdataautorizaciones["ChequeoId"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "ChequeoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Seccional";

	
	
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


	$tdataautorizaciones["Seccional"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "co.Concepto";

	
	
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


	$tdataautorizaciones["Concepto"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Concepto";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.tipoCobro";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Tipo";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Tipo_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.tipoCobro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tipo";

	

	
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


	$tdataautorizaciones["Tipo"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Tipo";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Cantidad");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Tipo_event1", "type" => "editing" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataautorizaciones["Cantidad"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Obligacion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(C.Obligacion, 'C', 'es-CO')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "editing" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "change" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "blur" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataautorizaciones["Obligacion"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Costas");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(C.Costas, 'C', 'es-CO')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataautorizaciones["Costas"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Costas";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Fecha";

	
	
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


	$tdataautorizaciones["Fecha"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Fecha";
//	Competencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Competencia";
	$fdata["GoodName"] = "Competencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Autorizaciones","Competencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Competencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.Codigo + ' -  ' +d.Despacho";

	
	
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


	$tdataautorizaciones["Competencia"] = $fdata;
		$tdataautorizaciones[".searchableFields"][] = "Competencia";


$tables_data["dbo.Autorizaciones"]=&$tdataautorizaciones;
$field_labels["dbo_Autorizaciones"] = &$fieldLabelsautorizaciones;
$fieldToolTips["dbo_Autorizaciones"] = &$fieldToolTipsautorizaciones;
$placeHolders["dbo_Autorizaciones"] = &$placeHoldersautorizaciones;
$page_titles["dbo_Autorizaciones"] = &$pageTitlesautorizaciones;


changeTextControlsToDate( "dbo.Autorizaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Autorizaciones"] = array();
//	dbo.ChequeosOficios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosOficios";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosOficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeosoficios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosOficios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
//	dbo.ChequeosSancionados
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosSancionados";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosSancionados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeossancionados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosSancionados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
//	dbo.Devoluciones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Devoluciones";
		$detailsParam["dOriginalTable"] = "dbo.Devoluciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "devoluciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Devoluciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Autorizaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["masterKeys"][]="ChequeoId";

				$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Autorizaciones"][$dIndex]["detailKeys"][]="ChequeoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Autorizaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_autorizaciones()
{
$proto0=array();
$proto0["m_strHead"] = "  	SELECT";
$proto0["m_strFieldList"] = "C.ChequeoId,  S.Seccional,  co.Concepto,  t.Tipo,  C.Cantidad,  FORMAT(C.Obligacion, 'C', 'es-CO') AS Obligacion,  FORMAT(C.Costas, 'C', 'es-CO') AS Costas,  C.Fecha,  d.Codigo + ' -  ' +d.Despacho AS Competencia";
$proto0["m_strFrom"] = "FROM dbo.Chequeos AS C  INNER JOIN dbo.Seccionales AS S ON C.SeccionalId = S.SeccionalId  INNER JOIN dbo.Conceptos AS co ON C.ConceptoId = co.ConceptoId  INNER JOIN dbo.tipoCobro AS t ON C.Tipo = t.TipoId  INNER JOIN dbo.Despachos AS d ON C.DespachoId = d.DespachoId";
$proto0["m_strWhere"] = "(C.CarteraTipoId =1) AND (C.Procesado <>1) AND (C.Aprobado <>1) AND (C.TramiteId =2) AND (C.SeccionalId=:session.SeccionalUser)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(C.CarteraTipoId =1) AND (C.Procesado <>1) AND (C.Aprobado <>1) AND (C.TramiteId =2) AND (C.SeccionalId=:session.SeccionalUser)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(C.CarteraTipoId =1) AND (C.Procesado <>1) AND (C.Aprobado <>1) AND (C.TramiteId =2) AND (C.SeccionalId=:session.SeccionalUser)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "C.CarteraTipoId =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "C.Procesado <>1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "<>1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "C.Aprobado <>1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Aprobado",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "<>1";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "C.TramiteId =2";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TramiteId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=2";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "C.SeccionalId=:session.SeccionalUser";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=:session.SeccionalUser";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto16["m_sql"] = "C.ChequeoId";
$proto16["m_srcTableName"] = "dbo.Autorizaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto18["m_sql"] = "S.Seccional";
$proto18["m_srcTableName"] = "dbo.Autorizaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "co",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto20["m_sql"] = "co.Concepto";
$proto20["m_srcTableName"] = "dbo.Autorizaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "t",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto22["m_sql"] = "t.Tipo";
$proto22["m_srcTableName"] = "dbo.Autorizaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto24["m_sql"] = "C.Cantidad";
$proto24["m_srcTableName"] = "dbo.Autorizaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "C.Obligacion"
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

$proto26["m_sql"] = "FORMAT(C.Obligacion, 'C', 'es-CO')";
$proto26["m_srcTableName"] = "dbo.Autorizaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Obligacion";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "C.Costas"
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

$proto31["m_sql"] = "FORMAT(C.Costas, 'C', 'es-CO')";
$proto31["m_srcTableName"] = "dbo.Autorizaciones";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Costas";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto36["m_sql"] = "C.Fecha";
$proto36["m_srcTableName"] = "dbo.Autorizaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "d.Codigo + ' -  ' +d.Despacho"
));

$proto38["m_sql"] = "d.Codigo + ' -  ' +d.Despacho";
$proto38["m_srcTableName"] = "dbo.Autorizaciones";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "Competencia";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "dbo.Chequeos";
$proto41["m_srcTableName"] = "dbo.Autorizaciones";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ChequeoId";
$proto41["m_columns"][] = "ConceptoId";
$proto41["m_columns"][] = "AbogadoId";
$proto41["m_columns"][] = "Fecha";
$proto41["m_columns"][] = "DespachoId";
$proto41["m_columns"][] = "Origen";
$proto41["m_columns"][] = "Providencia";
$proto41["m_columns"][] = "Ejecutoria";
$proto41["m_columns"][] = "PrimeraCopia";
$proto41["m_columns"][] = "Autentica";
$proto41["m_columns"][] = "PrestaMeritoEjecutivo";
$proto41["m_columns"][] = "Clara";
$proto41["m_columns"][] = "Expresa";
$proto41["m_columns"][] = "ActualmenteExigible";
$proto41["m_columns"][] = "CompetenciaDEAJ";
$proto41["m_columns"][] = "FaltaRequisitos";
$proto41["m_columns"][] = "FaltaCompetencia";
$proto41["m_columns"][] = "PorPrescripcion";
$proto41["m_columns"][] = "SeccionalId";
$proto41["m_columns"][] = "Folios";
$proto41["m_columns"][] = "SeccionalIdDestino";
$proto41["m_columns"][] = "Observaciones";
$proto41["m_columns"][] = "Procesado";
$proto41["m_columns"][] = "Tipo";
$proto41["m_columns"][] = "FechaSancion";
$proto41["m_columns"][] = "Cantidad";
$proto41["m_columns"][] = "Obligacion";
$proto41["m_columns"][] = "Costas";
$proto41["m_columns"][] = "Remisorio";
$proto41["m_columns"][] = "CarteraTipoId";
$proto41["m_columns"][] = "MinJusticia";
$proto41["m_columns"][] = "Aprobado";
$proto41["m_columns"][] = "AprobadoPor";
$proto41["m_columns"][] = "FechaAprobacion";
$proto41["m_columns"][] = "Plazo";
$proto41["m_columns"][] = "NaturalezaId";
$proto41["m_columns"][] = "Sigobius";
$proto41["m_columns"][] = "Monto";
$proto41["m_columns"][] = "TramiteId";
$proto41["m_columns"][] = "Fisico";
$proto41["m_columns"][] = "Digital";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "dbo.Chequeos AS C";
$proto40["m_alias"] = "C";
$proto40["m_srcTableName"] = "dbo.Autorizaciones";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.Seccionales";
$proto45["m_srcTableName"] = "dbo.Autorizaciones";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "SeccionalId";
$proto45["m_columns"][] = "Codigo";
$proto45["m_columns"][] = "Seccional";
$proto45["m_columns"][] = "NIT";
$proto45["m_columns"][] = "CiudadId";
$proto45["m_columns"][] = "PiePagina";
$proto45["m_columns"][] = "Sigobius";
$proto45["m_columns"][] = "Email";
$proto45["m_columns"][] = "Direccion";
$proto45["m_columns"][] = "Telefonos";
$proto45["m_columns"][] = "PCI";
$proto45["m_columns"][] = "Contador";
$proto45["m_columns"][] = "ContadorCargo";
$proto45["m_columns"][] = "Director";
$proto45["m_columns"][] = "DirectorCargo";
$proto45["m_columns"][] = "Abogado";
$proto45["m_columns"][] = "AbogadoCargo";
$proto45["m_columns"][] = "Formato";
$proto45["m_columns"][] = "Corporacion";
$proto45["m_columns"][] = "Unidad";
$proto45["m_columns"][] = "Oficina";
$proto45["m_columns"][] = "Serie";
$proto45["m_columns"][] = "Subserie";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN dbo.Seccionales AS S ON C.SeccionalId = S.SeccionalId";
$proto44["m_alias"] = "S";
$proto44["m_srcTableName"] = "dbo.Autorizaciones";
$proto46=array();
$proto46["m_sql"] = "S.SeccionalId = C.SeccionalId";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= C.SeccionalId";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "dbo.Conceptos";
$proto49["m_srcTableName"] = "dbo.Autorizaciones";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ConceptoId";
$proto49["m_columns"][] = "Concepto";
$proto49["m_columns"][] = "Activo";
$proto49["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN dbo.Conceptos AS co ON C.ConceptoId = co.ConceptoId";
$proto48["m_alias"] = "co";
$proto48["m_srcTableName"] = "dbo.Autorizaciones";
$proto50=array();
$proto50["m_sql"] = "co.ConceptoId = C.ConceptoId";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "co",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= C.ConceptoId";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.tipoCobro";
$proto53["m_srcTableName"] = "dbo.Autorizaciones";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "TipoId";
$proto53["m_columns"][] = "Tipo";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN dbo.tipoCobro AS t ON C.Tipo = t.TipoId";
$proto52["m_alias"] = "t";
$proto52["m_srcTableName"] = "dbo.Autorizaciones";
$proto54=array();
$proto54["m_sql"] = "t.TipoId = C.Tipo";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoId",
	"m_strTable" => "t",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= C.Tipo";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "dbo.Despachos";
$proto57["m_srcTableName"] = "dbo.Autorizaciones";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "DespachoId";
$proto57["m_columns"][] = "Codigo";
$proto57["m_columns"][] = "Despacho";
$proto57["m_columns"][] = "CiudadId";
$proto57["m_columns"][] = "Especialidad";
$proto57["m_columns"][] = "Subespecialidad";
$proto57["m_columns"][] = "Activo";
$proto57["m_columns"][] = "Juez";
$proto57["m_columns"][] = "Correo";
$proto57["m_columns"][] = "Telefonos";
$proto57["m_columns"][] = "Direccion";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN dbo.Despachos AS d ON C.DespachoId = d.DespachoId";
$proto56["m_alias"] = "d";
$proto56["m_srcTableName"] = "dbo.Autorizaciones";
$proto58=array();
$proto58["m_sql"] = "d.DespachoId = C.DespachoId";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "d",
	"m_srcTableName" => "dbo.Autorizaciones"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= C.DespachoId";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Autorizaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_autorizaciones = createSqlQuery_autorizaciones();


	
		;

									

$tdataautorizaciones[".sqlquery"] = $queryData_autorizaciones;



include_once(getabspath("include/autorizaciones_events.php"));
$tdataautorizaciones[".hasEvents"] = true;

?>