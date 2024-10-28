<?php
$tdatacorrespondencias1 = array();
$tdatacorrespondencias1[".searchableFields"] = array();
$tdatacorrespondencias1[".ShortName"] = "correspondencias1";
$tdatacorrespondencias1[".OwnerID"] = "";
$tdatacorrespondencias1[".OriginalTable"] = "dbo.Correspondencias";


$tdatacorrespondencias1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacorrespondencias1[".originalPagesByType"] = $tdatacorrespondencias1[".pagesByType"];
$tdatacorrespondencias1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacorrespondencias1[".originalPages"] = $tdatacorrespondencias1[".pages"];
$tdatacorrespondencias1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacorrespondencias1[".originalDefaultPages"] = $tdatacorrespondencias1[".defaultPages"];

//	field labels
$fieldLabelscorrespondencias1 = array();
$fieldToolTipscorrespondencias1 = array();
$pageTitlescorrespondencias1 = array();
$placeHolderscorrespondencias1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorrespondencias1["Spanish"] = array();
	$fieldToolTipscorrespondencias1["Spanish"] = array();
	$placeHolderscorrespondencias1["Spanish"] = array();
	$pageTitlescorrespondencias1["Spanish"] = array();
	$fieldLabelscorrespondencias1["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipscorrespondencias1["Spanish"]["ProcesoId"] = "";
	$placeHolderscorrespondencias1["Spanish"]["ProcesoId"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["CorrespondenciaId"] = "Correspondencia Id";
	$fieldToolTipscorrespondencias1["Spanish"]["CorrespondenciaId"] = "";
	$placeHolderscorrespondencias1["Spanish"]["CorrespondenciaId"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipscorrespondencias1["Spanish"]["OficioId"] = "";
	$placeHolderscorrespondencias1["Spanish"]["OficioId"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipscorrespondencias1["Spanish"]["Fecha"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Fecha"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipscorrespondencias1["Spanish"]["Sigobius"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Sigobius"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipscorrespondencias1["Spanish"]["Observaciones"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Observaciones"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Resolucion"] = "Resolucion";
	$fieldToolTipscorrespondencias1["Spanish"]["Resolucion"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Resolucion"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipscorrespondencias1["Spanish"]["Codigo"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Codigo"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipscorrespondencias1["Spanish"]["Radicado"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Radicado"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["UserId"] = "User Id";
	$fieldToolTipscorrespondencias1["Spanish"]["UserId"] = "";
	$placeHolderscorrespondencias1["Spanish"]["UserId"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipscorrespondencias1["Spanish"]["AbogadoId"] = "";
	$placeHolderscorrespondencias1["Spanish"]["AbogadoId"] = "";
	if (count($fieldToolTipscorrespondencias1["Spanish"]))
		$tdatacorrespondencias1[".isUseToolTips"] = true;
}


	$tdatacorrespondencias1[".NCSearch"] = true;


	$tdatacorrespondencias1[".scrollGridBody"] = true;

$tdatacorrespondencias1[".shortTableName"] = "correspondencias1";
$tdatacorrespondencias1[".nSecOptions"] = 0;

$tdatacorrespondencias1[".mainTableOwnerID"] = "";
$tdatacorrespondencias1[".entityType"] = 1;
$tdatacorrespondencias1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacorrespondencias1[".strOriginalTableName"] = "dbo.Correspondencias";

	



$tdatacorrespondencias1[".showAddInPopup"] = false;

$tdatacorrespondencias1[".showEditInPopup"] = false;

$tdatacorrespondencias1[".showViewInPopup"] = false;

$tdatacorrespondencias1[".listAjax"] = false;
//	temporary
//$tdatacorrespondencias1[".listAjax"] = false;

	$tdatacorrespondencias1[".audit"] = true;

	$tdatacorrespondencias1[".locking"] = false;


$pages = $tdatacorrespondencias1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorrespondencias1[".edit"] = true;
	$tdatacorrespondencias1[".afterEditAction"] = 1;
	$tdatacorrespondencias1[".closePopupAfterEdit"] = 1;
	$tdatacorrespondencias1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorrespondencias1[".add"] = true;
$tdatacorrespondencias1[".afterAddAction"] = 1;
$tdatacorrespondencias1[".closePopupAfterAdd"] = 1;
$tdatacorrespondencias1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorrespondencias1[".list"] = true;
}



$tdatacorrespondencias1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorrespondencias1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorrespondencias1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorrespondencias1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorrespondencias1[".printFriendly"] = true;
}



$tdatacorrespondencias1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorrespondencias1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorrespondencias1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorrespondencias1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatacorrespondencias1[".ajaxCodeSnippetAdded"] = false;

$tdatacorrespondencias1[".buttonsAdded"] = false;

$tdatacorrespondencias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorrespondencias1[".isUseTimeForSearch"] = false;


$tdatacorrespondencias1[".badgeColor"] = "6DA5C8";


$tdatacorrespondencias1[".allSearchFields"] = array();
$tdatacorrespondencias1[".filterFields"] = array();
$tdatacorrespondencias1[".requiredSearchFields"] = array();

$tdatacorrespondencias1[".googleLikeFields"] = array();
$tdatacorrespondencias1[".googleLikeFields"][] = "CorrespondenciaId";
$tdatacorrespondencias1[".googleLikeFields"][] = "ProcesoId";
$tdatacorrespondencias1[".googleLikeFields"][] = "OficioId";
$tdatacorrespondencias1[".googleLikeFields"][] = "Fecha";
$tdatacorrespondencias1[".googleLikeFields"][] = "Sigobius";
$tdatacorrespondencias1[".googleLikeFields"][] = "Observaciones";
$tdatacorrespondencias1[".googleLikeFields"][] = "Resolucion";
$tdatacorrespondencias1[".googleLikeFields"][] = "Codigo";
$tdatacorrespondencias1[".googleLikeFields"][] = "Radicado";
$tdatacorrespondencias1[".googleLikeFields"][] = "UserId";
$tdatacorrespondencias1[".googleLikeFields"][] = "AbogadoId";



$tdatacorrespondencias1[".tableType"] = "list";

$tdatacorrespondencias1[".printerPageOrientation"] = 0;
$tdatacorrespondencias1[".nPrinterPageScale"] = 100;

$tdatacorrespondencias1[".nPrinterSplitRecords"] = 40;

$tdatacorrespondencias1[".geocodingEnabled"] = false;










$tdatacorrespondencias1[".pageSize"] = 20;

$tdatacorrespondencias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacorrespondencias1[".strOrderBy"] = $tstrOrderBy;

$tdatacorrespondencias1[".orderindexes"] = array();


$tdatacorrespondencias1[".sqlHead"] = "SELECT CorrespondenciaId,  	ProcesoId,  	OficioId,  	Fecha,  	Sigobius,  	Observaciones,  	Resolucion,  	Codigo,  	Radicado,  	UserId,  	AbogadoId";
$tdatacorrespondencias1[".sqlFrom"] = "FROM dbo.Correspondencias";
$tdatacorrespondencias1[".sqlWhereExpr"] = "";
$tdatacorrespondencias1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorrespondencias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorrespondencias1[".arrGroupsPerPage"] = $arrGPP;

$tdatacorrespondencias1[".highlightSearchResults"] = true;

$tableKeyscorrespondencias1 = array();
$tableKeyscorrespondencias1[] = "ProcesoId";
$tdatacorrespondencias1[".Keys"] = $tableKeyscorrespondencias1;


$tdatacorrespondencias1[".hideMobileList"] = array();




//	CorrespondenciaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CorrespondenciaId";
	$fdata["GoodName"] = "CorrespondenciaId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","CorrespondenciaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CorrespondenciaId";

		$fdata["sourceSingle"] = "CorrespondenciaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CorrespondenciaId";

	
	
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


	$tdatacorrespondencias1["CorrespondenciaId"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "CorrespondenciaId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","ProcesoId");
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

	
			$edata["LookupUnique"] = true;

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


	$tdatacorrespondencias1["ProcesoId"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "ProcesoId";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioId";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdatacorrespondencias1["OficioId"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "OficioId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Fecha");
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


	$tdatacorrespondencias1["Fecha"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Fecha";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Sigobius");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdatacorrespondencias1["Sigobius"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Sigobius";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Observaciones");
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


	$tdatacorrespondencias1["Observaciones"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Observaciones";
//	Resolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Resolucion";
	$fdata["GoodName"] = "Resolucion";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Resolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Resolucion";

		$fdata["sourceSingle"] = "Resolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Resolucion";

	
	
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


	$tdatacorrespondencias1["Resolucion"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Resolucion";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatacorrespondencias1["Codigo"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Codigo";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

		$fdata["sourceSingle"] = "Radicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Radicado";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatacorrespondencias1["Radicado"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Radicado";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","UserId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserId";

		$fdata["sourceSingle"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
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
	$edata["LookupTable"] = "dbo.UsuGCC-_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
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


	$tdatacorrespondencias1["UserId"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "UserId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdatacorrespondencias1["AbogadoId"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "AbogadoId";


$tables_data["dbo.Correspondencias1"]=&$tdatacorrespondencias1;
$field_labels["dbo_Correspondencias1"] = &$fieldLabelscorrespondencias1;
$fieldToolTips["dbo_Correspondencias1"] = &$fieldToolTipscorrespondencias1;
$placeHolders["dbo_Correspondencias1"] = &$placeHolderscorrespondencias1;
$page_titles["dbo_Correspondencias1"] = &$pageTitlescorrespondencias1;


changeTextControlsToDate( "dbo.Correspondencias1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Correspondencias1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Correspondencias1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_correspondencias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CorrespondenciaId,  	ProcesoId,  	OficioId,  	Fecha,  	Sigobius,  	Observaciones,  	Resolucion,  	Codigo,  	Radicado,  	UserId,  	AbogadoId";
$proto0["m_strFrom"] = "FROM dbo.Correspondencias";
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
	"m_strName" => "CorrespondenciaId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto6["m_sql"] = "CorrespondenciaId";
$proto6["m_srcTableName"] = "dbo.Correspondencias1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Correspondencias1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto10["m_sql"] = "OficioId";
$proto10["m_srcTableName"] = "dbo.Correspondencias1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Correspondencias1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto14["m_sql"] = "Sigobius";
$proto14["m_srcTableName"] = "dbo.Correspondencias1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "dbo.Correspondencias1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Resolucion",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto18["m_sql"] = "Resolucion";
$proto18["m_srcTableName"] = "dbo.Correspondencias1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto20["m_sql"] = "Codigo";
$proto20["m_srcTableName"] = "dbo.Correspondencias1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto22["m_sql"] = "Radicado";
$proto22["m_srcTableName"] = "dbo.Correspondencias1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto24["m_sql"] = "UserId";
$proto24["m_srcTableName"] = "dbo.Correspondencias1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto26["m_sql"] = "AbogadoId";
$proto26["m_srcTableName"] = "dbo.Correspondencias1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Correspondencias";
$proto29["m_srcTableName"] = "dbo.Correspondencias1";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "CorrespondenciaId";
$proto29["m_columns"][] = "ProcesoId";
$proto29["m_columns"][] = "OficioId";
$proto29["m_columns"][] = "Fecha";
$proto29["m_columns"][] = "Sigobius";
$proto29["m_columns"][] = "Observaciones";
$proto29["m_columns"][] = "Resolucion";
$proto29["m_columns"][] = "Codigo";
$proto29["m_columns"][] = "Radicado";
$proto29["m_columns"][] = "UserId";
$proto29["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.Correspondencias";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.Correspondencias1";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Correspondencias1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_correspondencias1 = createSqlQuery_correspondencias1();


	
		;

											

$tdatacorrespondencias1[".sqlquery"] = $queryData_correspondencias1;



$tdatacorrespondencias1[".hasEvents"] = false;

?>