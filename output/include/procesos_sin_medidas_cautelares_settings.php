<?php
$tdataprocesos_sin_medidas_cautelares = array();
$tdataprocesos_sin_medidas_cautelares[".searchableFields"] = array();
$tdataprocesos_sin_medidas_cautelares[".ShortName"] = "procesos_sin_medidas_cautelares";
$tdataprocesos_sin_medidas_cautelares[".OwnerID"] = "";
$tdataprocesos_sin_medidas_cautelares[".OriginalTable"] = "Procesos Sin Medidas Cautelares";


$tdataprocesos_sin_medidas_cautelares[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataprocesos_sin_medidas_cautelares[".originalPagesByType"] = $tdataprocesos_sin_medidas_cautelares[".pagesByType"];
$tdataprocesos_sin_medidas_cautelares[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataprocesos_sin_medidas_cautelares[".originalPages"] = $tdataprocesos_sin_medidas_cautelares[".pages"];
$tdataprocesos_sin_medidas_cautelares[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataprocesos_sin_medidas_cautelares[".originalDefaultPages"] = $tdataprocesos_sin_medidas_cautelares[".defaultPages"];

//	field labels
$fieldLabelsprocesos_sin_medidas_cautelares = array();
$fieldToolTipsprocesos_sin_medidas_cautelares = array();
$pageTitlesprocesos_sin_medidas_cautelares = array();
$placeHoldersprocesos_sin_medidas_cautelares = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"] = array();
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"] = array();
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"] = array();
	$pageTitlesprocesos_sin_medidas_cautelares["Spanish"] = array();
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Abogado"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Abogado"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Fecha"] = "Fecha Creación";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Fecha"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Numero"] = "Numero Proceso";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Numero"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Numero"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Sancionado"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Sancionado"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["SancionadoDocumento"] = "Identificación";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Intereses"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Costas"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Costas"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["Mandamiento"] = "Fecha Mandamiento";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["Mandamiento"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["Mandamiento"] = "";
	$fieldLabelsprocesos_sin_medidas_cautelares["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesos_sin_medidas_cautelares["Spanish"]["EstadoId"] = "";
	if (count($fieldToolTipsprocesos_sin_medidas_cautelares["Spanish"]))
		$tdataprocesos_sin_medidas_cautelares[".isUseToolTips"] = true;
}


	$tdataprocesos_sin_medidas_cautelares[".NCSearch"] = true;


	$tdataprocesos_sin_medidas_cautelares[".scrollGridBody"] = true;

$tdataprocesos_sin_medidas_cautelares[".shortTableName"] = "procesos_sin_medidas_cautelares";
$tdataprocesos_sin_medidas_cautelares[".nSecOptions"] = 0;

$tdataprocesos_sin_medidas_cautelares[".mainTableOwnerID"] = "";
$tdataprocesos_sin_medidas_cautelares[".entityType"] = 6;
$tdataprocesos_sin_medidas_cautelares[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesos_sin_medidas_cautelares[".strOriginalTableName"] = "Procesos Sin Medidas Cautelares";

	



$tdataprocesos_sin_medidas_cautelares[".showAddInPopup"] = false;

$tdataprocesos_sin_medidas_cautelares[".showEditInPopup"] = false;

$tdataprocesos_sin_medidas_cautelares[".showViewInPopup"] = false;

$tdataprocesos_sin_medidas_cautelares[".listAjax"] = false;
//	temporary
//$tdataprocesos_sin_medidas_cautelares[".listAjax"] = false;

	$tdataprocesos_sin_medidas_cautelares[".audit"] = false;

	$tdataprocesos_sin_medidas_cautelares[".locking"] = false;


$pages = $tdataprocesos_sin_medidas_cautelares[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesos_sin_medidas_cautelares[".edit"] = true;
	$tdataprocesos_sin_medidas_cautelares[".afterEditAction"] = 1;
	$tdataprocesos_sin_medidas_cautelares[".closePopupAfterEdit"] = 1;
	$tdataprocesos_sin_medidas_cautelares[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesos_sin_medidas_cautelares[".add"] = true;
$tdataprocesos_sin_medidas_cautelares[".afterAddAction"] = 1;
$tdataprocesos_sin_medidas_cautelares[".closePopupAfterAdd"] = 1;
$tdataprocesos_sin_medidas_cautelares[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesos_sin_medidas_cautelares[".list"] = true;
}



$tdataprocesos_sin_medidas_cautelares[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesos_sin_medidas_cautelares[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesos_sin_medidas_cautelares[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesos_sin_medidas_cautelares[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesos_sin_medidas_cautelares[".printFriendly"] = true;
}



$tdataprocesos_sin_medidas_cautelares[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesos_sin_medidas_cautelares[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesos_sin_medidas_cautelares[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesos_sin_medidas_cautelares[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																																											

$tdataprocesos_sin_medidas_cautelares[".ajaxCodeSnippetAdded"] = false;

$tdataprocesos_sin_medidas_cautelares[".buttonsAdded"] = false;

$tdataprocesos_sin_medidas_cautelares[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesos_sin_medidas_cautelares[".isUseTimeForSearch"] = false;


$tdataprocesos_sin_medidas_cautelares[".badgeColor"] = "CD853F";


$tdataprocesos_sin_medidas_cautelares[".allSearchFields"] = array();
$tdataprocesos_sin_medidas_cautelares[".filterFields"] = array();
$tdataprocesos_sin_medidas_cautelares[".requiredSearchFields"] = array();

$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"] = array();
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "SeccionalId";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Abogado";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Fecha";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "ConceptoId";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Numero";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Sancionado";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "SancionadoDocumento";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Obligacion";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Intereses";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Costas";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "Mandamiento";
$tdataprocesos_sin_medidas_cautelares[".googleLikeFields"][] = "EstadoId";




$tdataprocesos_sin_medidas_cautelares[".printerPageOrientation"] = 0;
$tdataprocesos_sin_medidas_cautelares[".nPrinterPageScale"] = 100;

$tdataprocesos_sin_medidas_cautelares[".nPrinterSplitRecords"] = 40;

$tdataprocesos_sin_medidas_cautelares[".geocodingEnabled"] = false;




$tdataprocesos_sin_medidas_cautelares[".isDisplayLoading"] = true;






$tdataprocesos_sin_medidas_cautelares[".pageSize"] = 500;

$tdataprocesos_sin_medidas_cautelares[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprocesos_sin_medidas_cautelares[".strOrderBy"] = $tstrOrderBy;

$tdataprocesos_sin_medidas_cautelares[".orderindexes"] = array();


$tdataprocesos_sin_medidas_cautelares[".sqlHead"] = "";
$tdataprocesos_sin_medidas_cautelares[".sqlFrom"] = "";
$tdataprocesos_sin_medidas_cautelares[".sqlWhereExpr"] = "";
$tdataprocesos_sin_medidas_cautelares[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesos_sin_medidas_cautelares[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesos_sin_medidas_cautelares[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesos_sin_medidas_cautelares[".highlightSearchResults"] = true;

$tableKeysprocesos_sin_medidas_cautelares = array();
$tdataprocesos_sin_medidas_cautelares[".Keys"] = $tableKeysprocesos_sin_medidas_cautelares;


$tdataprocesos_sin_medidas_cautelares[".hideMobileList"] = array();




//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

	
		$fdata["FullName"] = "CarteraTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CarteraTipo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesos_sin_medidas_cautelares["CarteraTipoId"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "CarteraTipoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

	
		$fdata["FullName"] = "SeccionalId";

	
	
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
	$edata["LookupTable"] = "dbo.Seccionales2";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesos_sin_medidas_cautelares["SeccionalId"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "SeccionalId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["FullName"] = "Abogado";

	
	
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


	$tdataprocesos_sin_medidas_cautelares["Abogado"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Fecha");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Fecha";

	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprocesos_sin_medidas_cautelares["Fecha"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Fecha";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

	
		$fdata["FullName"] = "ConceptoId";

	
	
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
	$edata["LookupTable"] = "dbo.Conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Concepto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesos_sin_medidas_cautelares["ConceptoId"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "ConceptoId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["FullName"] = "Numero";

	
	
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


	$tdataprocesos_sin_medidas_cautelares["Numero"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["FullName"] = "Sancionado";

	
	
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


	$tdataprocesos_sin_medidas_cautelares["Sancionado"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","SancionadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoDocumento";

	
		$fdata["FullName"] = "SancionadoDocumento";

	
	
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


	$tdataprocesos_sin_medidas_cautelares["SancionadoDocumento"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "SancionadoDocumento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

	
		$fdata["FullName"] = "Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataprocesos_sin_medidas_cautelares["Obligacion"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

	
		$fdata["FullName"] = "Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataprocesos_sin_medidas_cautelares["Intereses"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

	
		$fdata["FullName"] = "Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataprocesos_sin_medidas_cautelares["Costas"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Costas";
//	Mandamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Mandamiento";
	$fdata["GoodName"] = "Mandamiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","Mandamiento");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Mandamiento";

	
		$fdata["FullName"] = "Mandamiento";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprocesos_sin_medidas_cautelares["Mandamiento"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "Mandamiento";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Procesos_Sin_Medidas_Cautelares","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

	
		$fdata["FullName"] = "EstadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EstadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesos_sin_medidas_cautelares["EstadoId"] = $fdata;
		$tdataprocesos_sin_medidas_cautelares[".searchableFields"][] = "EstadoId";


$tables_data["Procesos Sin Medidas Cautelares"]=&$tdataprocesos_sin_medidas_cautelares;
$field_labels["Procesos_Sin_Medidas_Cautelares"] = &$fieldLabelsprocesos_sin_medidas_cautelares;
$fieldToolTips["Procesos_Sin_Medidas_Cautelares"] = &$fieldToolTipsprocesos_sin_medidas_cautelares;
$placeHolders["Procesos_Sin_Medidas_Cautelares"] = &$placeHoldersprocesos_sin_medidas_cautelares;
$page_titles["Procesos_Sin_Medidas_Cautelares"] = &$pageTitlesprocesos_sin_medidas_cautelares;


changeTextControlsToDate( "Procesos Sin Medidas Cautelares" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Procesos Sin Medidas Cautelares"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Procesos Sin Medidas Cautelares"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/procesos_sin_medidas_cautelares_ops.php" ) );



	
		;

													

$tdataprocesos_sin_medidas_cautelares[".sqlquery"] = $queryData_procesos_sin_medidas_cautelares;



include_once(getabspath("include/procesos_sin_medidas_cautelares_events.php"));
$tdataprocesos_sin_medidas_cautelares[".hasEvents"] = true;

?>