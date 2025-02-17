<?php
$tdatacorrespondenciamasiva = array();
$tdatacorrespondenciamasiva[".searchableFields"] = array();
$tdatacorrespondenciamasiva[".ShortName"] = "correspondenciamasiva";
$tdatacorrespondenciamasiva[".OwnerID"] = "";
$tdatacorrespondenciamasiva[".OriginalTable"] = "dbo.CorrespondenciaMasiva";


$tdatacorrespondenciamasiva[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacorrespondenciamasiva[".originalPagesByType"] = $tdatacorrespondenciamasiva[".pagesByType"];
$tdatacorrespondenciamasiva[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacorrespondenciamasiva[".originalPages"] = $tdatacorrespondenciamasiva[".pages"];
$tdatacorrespondenciamasiva[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacorrespondenciamasiva[".originalDefaultPages"] = $tdatacorrespondenciamasiva[".defaultPages"];

//	field labels
$fieldLabelscorrespondenciamasiva = array();
$fieldToolTipscorrespondenciamasiva = array();
$pageTitlescorrespondenciamasiva = array();
$placeHolderscorrespondenciamasiva = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorrespondenciamasiva["Spanish"] = array();
	$fieldToolTipscorrespondenciamasiva["Spanish"] = array();
	$placeHolderscorrespondenciamasiva["Spanish"] = array();
	$pageTitlescorrespondenciamasiva["Spanish"] = array();
	$fieldLabelscorrespondenciamasiva["Spanish"]["id"] = "ID";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["id"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["id"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["fecha"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["fecha"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["proceso"] = "No. Proceso";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["proceso"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["proceso"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["correspondencia"] = "Correspondencia";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["correspondencia"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["correspondencia"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["usuario"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["usuario"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["enviado"] = "Enviado";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["enviado"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["enviado"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["observaciones"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["observaciones"] = "";
	$fieldLabelscorrespondenciamasiva["Spanish"]["radicado"] = "Radicado";
	$fieldToolTipscorrespondenciamasiva["Spanish"]["radicado"] = "";
	$placeHolderscorrespondenciamasiva["Spanish"]["radicado"] = "";
	$pageTitlescorrespondenciamasiva["Spanish"]["add"] = "Correspondencia Masiva";
	$pageTitlescorrespondenciamasiva["Spanish"]["edit"] = "Correspondencia Masiva";
	if (count($fieldToolTipscorrespondenciamasiva["Spanish"]))
		$tdatacorrespondenciamasiva[".isUseToolTips"] = true;
}


	$tdatacorrespondenciamasiva[".NCSearch"] = true;



$tdatacorrespondenciamasiva[".shortTableName"] = "correspondenciamasiva";
$tdatacorrespondenciamasiva[".nSecOptions"] = 0;

$tdatacorrespondenciamasiva[".mainTableOwnerID"] = "";
$tdatacorrespondenciamasiva[".entityType"] = 0;
$tdatacorrespondenciamasiva[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacorrespondenciamasiva[".strOriginalTableName"] = "dbo.CorrespondenciaMasiva";

	



$tdatacorrespondenciamasiva[".showAddInPopup"] = false;

$tdatacorrespondenciamasiva[".showEditInPopup"] = false;

$tdatacorrespondenciamasiva[".showViewInPopup"] = false;

$tdatacorrespondenciamasiva[".listAjax"] = false;
//	temporary
//$tdatacorrespondenciamasiva[".listAjax"] = false;

	$tdatacorrespondenciamasiva[".audit"] = false;

	$tdatacorrespondenciamasiva[".locking"] = false;


$pages = $tdatacorrespondenciamasiva[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorrespondenciamasiva[".edit"] = true;
	$tdatacorrespondenciamasiva[".afterEditAction"] = 1;
	$tdatacorrespondenciamasiva[".closePopupAfterEdit"] = 1;
	$tdatacorrespondenciamasiva[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorrespondenciamasiva[".add"] = true;
$tdatacorrespondenciamasiva[".afterAddAction"] = 1;
$tdatacorrespondenciamasiva[".closePopupAfterAdd"] = 1;
$tdatacorrespondenciamasiva[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorrespondenciamasiva[".list"] = true;
}



$tdatacorrespondenciamasiva[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorrespondenciamasiva[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorrespondenciamasiva[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorrespondenciamasiva[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorrespondenciamasiva[".printFriendly"] = true;
}



$tdatacorrespondenciamasiva[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorrespondenciamasiva[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorrespondenciamasiva[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorrespondenciamasiva[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdatacorrespondenciamasiva[".ajaxCodeSnippetAdded"] = false;

$tdatacorrespondenciamasiva[".buttonsAdded"] = false;

$tdatacorrespondenciamasiva[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorrespondenciamasiva[".isUseTimeForSearch"] = false;


$tdatacorrespondenciamasiva[".badgeColor"] = "5F9EA0";


$tdatacorrespondenciamasiva[".allSearchFields"] = array();
$tdatacorrespondenciamasiva[".filterFields"] = array();
$tdatacorrespondenciamasiva[".requiredSearchFields"] = array();

$tdatacorrespondenciamasiva[".googleLikeFields"] = array();
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "id";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "fecha";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "proceso";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "correspondencia";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "usuario";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "enviado";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "radicado";
$tdatacorrespondenciamasiva[".googleLikeFields"][] = "observaciones";



$tdatacorrespondenciamasiva[".tableType"] = "list";

$tdatacorrespondenciamasiva[".printerPageOrientation"] = 0;
$tdatacorrespondenciamasiva[".nPrinterPageScale"] = 100;

$tdatacorrespondenciamasiva[".nPrinterSplitRecords"] = 40;

$tdatacorrespondenciamasiva[".geocodingEnabled"] = false;




$tdatacorrespondenciamasiva[".isDisplayLoading"] = true;

$tdatacorrespondenciamasiva[".isResizeColumns"] = true;





$tdatacorrespondenciamasiva[".pageSize"] = 20;

$tdatacorrespondenciamasiva[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Id DESC";
$tdatacorrespondenciamasiva[".strOrderBy"] = $tstrOrderBy;

$tdatacorrespondenciamasiva[".orderindexes"] = array();
	$tdatacorrespondenciamasiva[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");



$tdatacorrespondenciamasiva[".sqlHead"] = "SELECT id,  	fecha,  	proceso,  	correspondencia,  	usuario,  	enviado,  	radicado,  	observaciones";
$tdatacorrespondenciamasiva[".sqlFrom"] = "FROM dbo.CorrespondenciaMasiva";
$tdatacorrespondenciamasiva[".sqlWhereExpr"] = "";
$tdatacorrespondenciamasiva[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacorrespondenciamasiva[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorrespondenciamasiva[".arrGroupsPerPage"] = $arrGPP;

$tdatacorrespondenciamasiva[".highlightSearchResults"] = true;

$tableKeyscorrespondenciamasiva = array();
$tableKeyscorrespondenciamasiva[] = "id";
$tdatacorrespondenciamasiva[".Keys"] = $tableKeyscorrespondenciamasiva;


$tdatacorrespondenciamasiva[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacorrespondenciamasiva["id"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdatacorrespondenciamasiva["fecha"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "fecha";
//	proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "proceso";
	$fdata["GoodName"] = "proceso";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","proceso");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "proceso";

		$fdata["sourceSingle"] = "proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdatacorrespondenciamasiva["proceso"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "proceso";
//	correspondencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "correspondencia";
	$fdata["GoodName"] = "correspondencia";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","correspondencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "correspondencia";

		$fdata["sourceSingle"] = "correspondencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correspondencia";

	
	
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
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Oficio";

	

	
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


	$tdatacorrespondenciamasiva["correspondencia"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "correspondencia";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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
	$edata["LookupTable"] = "dbo.UserProfile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "UserId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";

	

	
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


	$tdatacorrespondenciamasiva["usuario"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "usuario";
//	enviado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "enviado";
	$fdata["GoodName"] = "enviado";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","enviado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "enviado";

		$fdata["sourceSingle"] = "enviado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enviado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatacorrespondenciamasiva["enviado"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "enviado";
//	radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "radicado";
	$fdata["GoodName"] = "radicado";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "radicado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "radicado";

	
	
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


	$tdatacorrespondenciamasiva["radicado"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "radicado";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "dbo.CorrespondenciaMasiva";
	$fdata["Label"] = GetFieldLabel("dbo_CorrespondenciaMasiva","observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatacorrespondenciamasiva["observaciones"] = $fdata;
		$tdatacorrespondenciamasiva[".searchableFields"][] = "observaciones";


$tables_data["dbo.CorrespondenciaMasiva"]=&$tdatacorrespondenciamasiva;
$field_labels["dbo_CorrespondenciaMasiva"] = &$fieldLabelscorrespondenciamasiva;
$fieldToolTips["dbo_CorrespondenciaMasiva"] = &$fieldToolTipscorrespondenciamasiva;
$placeHolders["dbo_CorrespondenciaMasiva"] = &$placeHolderscorrespondenciamasiva;
$page_titles["dbo_CorrespondenciaMasiva"] = &$pageTitlescorrespondenciamasiva;


changeTextControlsToDate( "dbo.CorrespondenciaMasiva" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.CorrespondenciaMasiva"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CorrespondenciaMasiva"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_correspondenciamasiva()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fecha,  	proceso,  	correspondencia,  	usuario,  	enviado,  	radicado,  	observaciones";
$proto0["m_strFrom"] = "FROM dbo.CorrespondenciaMasiva";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Id DESC";
	
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
	"m_strName" => "id",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto8["m_sql"] = "fecha";
$proto8["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "proceso",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto10["m_sql"] = "proceso";
$proto10["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "correspondencia",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto12["m_sql"] = "correspondencia";
$proto12["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto14["m_sql"] = "usuario";
$proto14["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "enviado",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto16["m_sql"] = "enviado";
$proto16["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "radicado",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto18["m_sql"] = "radicado";
$proto18["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto20["m_sql"] = "observaciones";
$proto20["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.CorrespondenciaMasiva";
$proto23["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "proceso";
$proto23["m_columns"][] = "correspondencia";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "enviado";
$proto23["m_columns"][] = "observaciones";
$proto23["m_columns"][] = "radicado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.CorrespondenciaMasiva";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.CorrespondenciaMasiva";
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
	"m_strName" => "id",
	"m_strTable" => "dbo.CorrespondenciaMasiva",
	"m_srcTableName" => "dbo.CorrespondenciaMasiva"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.CorrespondenciaMasiva";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_correspondenciamasiva = createSqlQuery_correspondenciamasiva();


	
		;

								

$tdatacorrespondenciamasiva[".sqlquery"] = $queryData_correspondenciamasiva;



$tdatacorrespondenciamasiva[".hasEvents"] = false;

?>