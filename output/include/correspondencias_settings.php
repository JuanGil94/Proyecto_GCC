<?php
$tdatacorrespondencias = array();
$tdatacorrespondencias[".searchableFields"] = array();
$tdatacorrespondencias[".ShortName"] = "correspondencias";
$tdatacorrespondencias[".OwnerID"] = "";
$tdatacorrespondencias[".OriginalTable"] = "dbo.Correspondencias";


$tdatacorrespondencias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacorrespondencias[".originalPagesByType"] = $tdatacorrespondencias[".pagesByType"];
$tdatacorrespondencias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacorrespondencias[".originalPages"] = $tdatacorrespondencias[".pages"];
$tdatacorrespondencias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacorrespondencias[".originalDefaultPages"] = $tdatacorrespondencias[".defaultPages"];

//	field labels
$fieldLabelscorrespondencias = array();
$fieldToolTipscorrespondencias = array();
$pageTitlescorrespondencias = array();
$placeHolderscorrespondencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorrespondencias["Spanish"] = array();
	$fieldToolTipscorrespondencias["Spanish"] = array();
	$placeHolderscorrespondencias["Spanish"] = array();
	$pageTitlescorrespondencias["Spanish"] = array();
	$fieldLabelscorrespondencias["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipscorrespondencias["Spanish"]["ProcesoId"] = "";
	$placeHolderscorrespondencias["Spanish"]["ProcesoId"] = "";
	$fieldLabelscorrespondencias["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipscorrespondencias["Spanish"]["OficioId"] = "";
	$placeHolderscorrespondencias["Spanish"]["OficioId"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipscorrespondencias["Spanish"]["Fecha"] = "";
	$placeHolderscorrespondencias["Spanish"]["Fecha"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipscorrespondencias["Spanish"]["Sigobius"] = "";
	$placeHolderscorrespondencias["Spanish"]["Sigobius"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipscorrespondencias["Spanish"]["Observaciones"] = "";
	$placeHolderscorrespondencias["Spanish"]["Observaciones"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Resolucion"] = "Resolucion";
	$fieldToolTipscorrespondencias["Spanish"]["Resolucion"] = "";
	$placeHolderscorrespondencias["Spanish"]["Resolucion"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipscorrespondencias["Spanish"]["Codigo"] = "";
	$placeHolderscorrespondencias["Spanish"]["Codigo"] = "";
	$fieldLabelscorrespondencias["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipscorrespondencias["Spanish"]["Radicado"] = "";
	$placeHolderscorrespondencias["Spanish"]["Radicado"] = "";
	$fieldLabelscorrespondencias["Spanish"]["UserId"] = "User Id";
	$fieldToolTipscorrespondencias["Spanish"]["UserId"] = "";
	$placeHolderscorrespondencias["Spanish"]["UserId"] = "";
	$fieldLabelscorrespondencias["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipscorrespondencias["Spanish"]["AbogadoId"] = "";
	$placeHolderscorrespondencias["Spanish"]["AbogadoId"] = "";
	$fieldLabelscorrespondencias["Spanish"]["CorrespondenciaId"] = "Correspondencia Id";
	$fieldToolTipscorrespondencias["Spanish"]["CorrespondenciaId"] = "";
	$placeHolderscorrespondencias["Spanish"]["CorrespondenciaId"] = "";
	if (count($fieldToolTipscorrespondencias["Spanish"]))
		$tdatacorrespondencias[".isUseToolTips"] = true;
}


	$tdatacorrespondencias[".NCSearch"] = true;



$tdatacorrespondencias[".shortTableName"] = "correspondencias";
$tdatacorrespondencias[".nSecOptions"] = 0;

$tdatacorrespondencias[".mainTableOwnerID"] = "";
$tdatacorrespondencias[".entityType"] = 0;
$tdatacorrespondencias[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacorrespondencias[".strOriginalTableName"] = "dbo.Correspondencias";

	



$tdatacorrespondencias[".showAddInPopup"] = false;

$tdatacorrespondencias[".showEditInPopup"] = false;

$tdatacorrespondencias[".showViewInPopup"] = false;

$tdatacorrespondencias[".listAjax"] = false;
//	temporary
//$tdatacorrespondencias[".listAjax"] = false;

	$tdatacorrespondencias[".audit"] = true;

	$tdatacorrespondencias[".locking"] = false;


$pages = $tdatacorrespondencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorrespondencias[".edit"] = true;
	$tdatacorrespondencias[".afterEditAction"] = 1;
	$tdatacorrespondencias[".closePopupAfterEdit"] = 1;
	$tdatacorrespondencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorrespondencias[".add"] = true;
$tdatacorrespondencias[".afterAddAction"] = 1;
$tdatacorrespondencias[".closePopupAfterAdd"] = 1;
$tdatacorrespondencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorrespondencias[".list"] = true;
}



$tdatacorrespondencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorrespondencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorrespondencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorrespondencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorrespondencias[".printFriendly"] = true;
}



$tdatacorrespondencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorrespondencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorrespondencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorrespondencias[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdatacorrespondencias[".ajaxCodeSnippetAdded"] = false;

$tdatacorrespondencias[".buttonsAdded"] = false;

$tdatacorrespondencias[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacorrespondencias[".isUseTimeForSearch"] = false;


$tdatacorrespondencias[".badgeColor"] = "E8926F";


$tdatacorrespondencias[".allSearchFields"] = array();
$tdatacorrespondencias[".filterFields"] = array();
$tdatacorrespondencias[".requiredSearchFields"] = array();

$tdatacorrespondencias[".googleLikeFields"] = array();
$tdatacorrespondencias[".googleLikeFields"][] = "CorrespondenciaId";
$tdatacorrespondencias[".googleLikeFields"][] = "ProcesoId";
$tdatacorrespondencias[".googleLikeFields"][] = "OficioId";
$tdatacorrespondencias[".googleLikeFields"][] = "Fecha";
$tdatacorrespondencias[".googleLikeFields"][] = "Sigobius";
$tdatacorrespondencias[".googleLikeFields"][] = "Observaciones";
$tdatacorrespondencias[".googleLikeFields"][] = "Resolucion";
$tdatacorrespondencias[".googleLikeFields"][] = "Codigo";
$tdatacorrespondencias[".googleLikeFields"][] = "Radicado";
$tdatacorrespondencias[".googleLikeFields"][] = "UserId";
$tdatacorrespondencias[".googleLikeFields"][] = "AbogadoId";



$tdatacorrespondencias[".tableType"] = "list";

$tdatacorrespondencias[".printerPageOrientation"] = 0;
$tdatacorrespondencias[".nPrinterPageScale"] = 100;

$tdatacorrespondencias[".nPrinterSplitRecords"] = 40;

$tdatacorrespondencias[".geocodingEnabled"] = false;





$tdatacorrespondencias[".isResizeColumns"] = true;





$tdatacorrespondencias[".pageSize"] = 20;

$tdatacorrespondencias[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Fecha DESC";
$tdatacorrespondencias[".strOrderBy"] = $tstrOrderBy;

$tdatacorrespondencias[".orderindexes"] = array();
	$tdatacorrespondencias[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "Fecha");



$tdatacorrespondencias[".sqlHead"] = "SELECT CorrespondenciaId,  ProcesoId,  OficioId,  Fecha,  Sigobius,  Observaciones,  Resolucion,  Codigo,  Radicado,  UserId,  AbogadoId";
$tdatacorrespondencias[".sqlFrom"] = "FROM dbo.Correspondencias";
$tdatacorrespondencias[".sqlWhereExpr"] = "";
$tdatacorrespondencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorrespondencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorrespondencias[".arrGroupsPerPage"] = $arrGPP;

$tdatacorrespondencias[".highlightSearchResults"] = true;

$tableKeyscorrespondencias = array();
$tableKeyscorrespondencias[] = "CorrespondenciaId";
$tdatacorrespondencias[".Keys"] = $tableKeyscorrespondencias;


$tdatacorrespondencias[".hideMobileList"] = array();




//	CorrespondenciaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CorrespondenciaId";
	$fdata["GoodName"] = "CorrespondenciaId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","CorrespondenciaId");
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


	$tdatacorrespondencias["CorrespondenciaId"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "CorrespondenciaId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","ProcesoId");
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

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ProcesoId";

	

	
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


	$tdatacorrespondencias["ProcesoId"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "ProcesoId";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","OficioId");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterTotalFields"] = "CorrespondenciaId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacorrespondencias["OficioId"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "OficioId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Fecha");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacorrespondencias["Fecha"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Fecha";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Sigobius");
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


	$tdatacorrespondencias["Sigobius"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Sigobius";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
		$edata["insertNull"] = true;

	
	
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


	$tdatacorrespondencias["Observaciones"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Observaciones";
//	Resolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Resolucion";
	$fdata["GoodName"] = "Resolucion";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Resolucion");
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


	
	



	
		$edata["insertNull"] = true;

	
	
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


	$tdatacorrespondencias["Resolucion"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Resolucion";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Codigo");
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


	$tdatacorrespondencias["Codigo"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Codigo";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","Radicado");
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


	
	



	
		$edata["insertNull"] = true;

	
	
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


	$tdatacorrespondencias["Radicado"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "Radicado";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","UserId");
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


	$tdatacorrespondencias["UserId"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "UserId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias","AbogadoId");
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


	$tdatacorrespondencias["AbogadoId"] = $fdata;
		$tdatacorrespondencias[".searchableFields"][] = "AbogadoId";


$tables_data["dbo.Correspondencias"]=&$tdatacorrespondencias;
$field_labels["dbo_Correspondencias"] = &$fieldLabelscorrespondencias;
$fieldToolTips["dbo_Correspondencias"] = &$fieldToolTipscorrespondencias;
$placeHolders["dbo_Correspondencias"] = &$placeHolderscorrespondencias;
$page_titles["dbo_Correspondencias"] = &$pageTitlescorrespondencias;


changeTextControlsToDate( "dbo.Correspondencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Correspondencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Correspondencias"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Correspondencias"][0] = $masterParams;
				$masterTablesData["dbo.Correspondencias"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Correspondencias"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][0]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Correspondencias"][1] = $masterParams;
				$masterTablesData["dbo.Correspondencias"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][1]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Correspondencias"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][1]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios Sigobius";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios_sigobius";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Correspondencias"][2] = $masterParams;
				$masterTablesData["dbo.Correspondencias"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][2]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Correspondencias"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][2]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Correspondencias"][3] = $masterParams;
				$masterTablesData["dbo.Correspondencias"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][3]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Correspondencias"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][3]["detailKeys"][]="OficioId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.ProcesosReasignar";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesosreasignar";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Correspondencias"][4] = $masterParams;
				$masterTablesData["dbo.Correspondencias"][4]["masterKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][4]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Correspondencias"][4]["detailKeys"] = array();
	$masterTablesData["dbo.Correspondencias"][4]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_correspondencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CorrespondenciaId,  ProcesoId,  OficioId,  Fecha,  Sigobius,  Observaciones,  Resolucion,  Codigo,  Radicado,  UserId,  AbogadoId";
$proto0["m_strFrom"] = "FROM dbo.Correspondencias";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
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
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto6["m_sql"] = "CorrespondenciaId";
$proto6["m_srcTableName"] = "dbo.Correspondencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Correspondencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto10["m_sql"] = "OficioId";
$proto10["m_srcTableName"] = "dbo.Correspondencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Correspondencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto14["m_sql"] = "Sigobius";
$proto14["m_srcTableName"] = "dbo.Correspondencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "dbo.Correspondencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Resolucion",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto18["m_sql"] = "Resolucion";
$proto18["m_srcTableName"] = "dbo.Correspondencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto20["m_sql"] = "Codigo";
$proto20["m_srcTableName"] = "dbo.Correspondencias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto22["m_sql"] = "Radicado";
$proto22["m_srcTableName"] = "dbo.Correspondencias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto24["m_sql"] = "UserId";
$proto24["m_srcTableName"] = "dbo.Correspondencias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto26["m_sql"] = "AbogadoId";
$proto26["m_srcTableName"] = "dbo.Correspondencias";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Correspondencias";
$proto29["m_srcTableName"] = "dbo.Correspondencias";
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
$proto28["m_srcTableName"] = "dbo.Correspondencias";
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
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.Correspondencias"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Correspondencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_correspondencias = createSqlQuery_correspondencias();


	
		;

											

$tdatacorrespondencias[".sqlquery"] = $queryData_correspondencias;



include_once(getabspath("include/correspondencias_events.php"));
$tdatacorrespondencias[".hasEvents"] = true;

?>