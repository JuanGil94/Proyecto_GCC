<?php
$tdatareportemandamientos = array();
$tdatareportemandamientos[".searchableFields"] = array();
$tdatareportemandamientos[".ShortName"] = "reportemandamientos";
$tdatareportemandamientos[".OwnerID"] = "";
$tdatareportemandamientos[".OriginalTable"] = "dbo.Mandamientos";


$tdatareportemandamientos[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatareportemandamientos[".originalPagesByType"] = $tdatareportemandamientos[".pagesByType"];
$tdatareportemandamientos[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatareportemandamientos[".originalPages"] = $tdatareportemandamientos[".pages"];
$tdatareportemandamientos[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatareportemandamientos[".originalDefaultPages"] = $tdatareportemandamientos[".defaultPages"];

//	field labels
$fieldLabelsreportemandamientos = array();
$fieldToolTipsreportemandamientos = array();
$pageTitlesreportemandamientos = array();
$placeHoldersreportemandamientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreportemandamientos["Spanish"] = array();
	$fieldToolTipsreportemandamientos["Spanish"] = array();
	$placeHoldersreportemandamientos["Spanish"] = array();
	$pageTitlesreportemandamientos["Spanish"] = array();
	$fieldLabelsreportemandamientos["Spanish"]["MandamientoId"] = "Mandamiento Id";
	$fieldToolTipsreportemandamientos["Spanish"]["MandamientoId"] = "";
	$placeHoldersreportemandamientos["Spanish"]["MandamientoId"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Fecha"] = "F.MandamintoPago ";
	$fieldToolTipsreportemandamientos["Spanish"]["Fecha"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Fecha"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["CarteraTipoId"] = "Tipo de Cartera";
	$fieldToolTipsreportemandamientos["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersreportemandamientos["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsreportemandamientos["Spanish"]["Seccional"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Seccional"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsreportemandamientos["Spanish"]["Abogado"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Abogado"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsreportemandamientos["Spanish"]["ConceptoId"] = "";
	$placeHoldersreportemandamientos["Spanish"]["ConceptoId"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Numero"] = "N.Proceso";
	$fieldToolTipsreportemandamientos["Spanish"]["Numero"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Numero"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Sancionado"] = "Deudor";
	$fieldToolTipsreportemandamientos["Spanish"]["Sancionado"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Sancionado"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Documento"] = "Identificacion";
	$fieldToolTipsreportemandamientos["Spanish"]["Documento"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Documento"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsreportemandamientos["Spanish"]["Obligacion"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Obligacion"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsreportemandamientos["Spanish"]["Intereses"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Intereses"] = "";
	$fieldLabelsreportemandamientos["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsreportemandamientos["Spanish"]["Costas"] = "";
	$placeHoldersreportemandamientos["Spanish"]["Costas"] = "";
	if (count($fieldToolTipsreportemandamientos["Spanish"]))
		$tdatareportemandamientos[".isUseToolTips"] = true;
}


	$tdatareportemandamientos[".NCSearch"] = true;



$tdatareportemandamientos[".shortTableName"] = "reportemandamientos";
$tdatareportemandamientos[".nSecOptions"] = 0;

$tdatareportemandamientos[".mainTableOwnerID"] = "";
$tdatareportemandamientos[".entityType"] = 2;
$tdatareportemandamientos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareportemandamientos[".strOriginalTableName"] = "dbo.Mandamientos";

	



$tdatareportemandamientos[".showAddInPopup"] = false;

$tdatareportemandamientos[".showEditInPopup"] = false;

$tdatareportemandamientos[".showViewInPopup"] = false;

$tdatareportemandamientos[".listAjax"] = false;
//	temporary
//$tdatareportemandamientos[".listAjax"] = false;

	$tdatareportemandamientos[".audit"] = false;

	$tdatareportemandamientos[".locking"] = false;


$pages = $tdatareportemandamientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportemandamientos[".edit"] = true;
	$tdatareportemandamientos[".afterEditAction"] = 1;
	$tdatareportemandamientos[".closePopupAfterEdit"] = 1;
	$tdatareportemandamientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportemandamientos[".add"] = true;
$tdatareportemandamientos[".afterAddAction"] = 1;
$tdatareportemandamientos[".closePopupAfterAdd"] = 1;
$tdatareportemandamientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportemandamientos[".list"] = true;
}



$tdatareportemandamientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportemandamientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportemandamientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportemandamientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportemandamientos[".printFriendly"] = true;
}



$tdatareportemandamientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportemandamientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportemandamientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportemandamientos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																			

$tdatareportemandamientos[".ajaxCodeSnippetAdded"] = false;

$tdatareportemandamientos[".buttonsAdded"] = false;

$tdatareportemandamientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportemandamientos[".isUseTimeForSearch"] = false;


$tdatareportemandamientos[".badgeColor"] = "E8926F";


$tdatareportemandamientos[".allSearchFields"] = array();
$tdatareportemandamientos[".filterFields"] = array();
$tdatareportemandamientos[".requiredSearchFields"] = array();

$tdatareportemandamientos[".googleLikeFields"] = array();
$tdatareportemandamientos[".googleLikeFields"][] = "MandamientoId";
$tdatareportemandamientos[".googleLikeFields"][] = "CarteraTipoId";
$tdatareportemandamientos[".googleLikeFields"][] = "Seccional";
$tdatareportemandamientos[".googleLikeFields"][] = "Abogado";
$tdatareportemandamientos[".googleLikeFields"][] = "Fecha";
$tdatareportemandamientos[".googleLikeFields"][] = "ConceptoId";
$tdatareportemandamientos[".googleLikeFields"][] = "Numero";
$tdatareportemandamientos[".googleLikeFields"][] = "Sancionado";
$tdatareportemandamientos[".googleLikeFields"][] = "Documento";
$tdatareportemandamientos[".googleLikeFields"][] = "Obligacion";
$tdatareportemandamientos[".googleLikeFields"][] = "Intereses";
$tdatareportemandamientos[".googleLikeFields"][] = "Costas";



$tdatareportemandamientos[".tableType"] = "report";

$tdatareportemandamientos[".printerPageOrientation"] = 0;
$tdatareportemandamientos[".nPrinterPageScale"] = 100;

$tdatareportemandamientos[".nPrinterSplitRecords"] = 40;

$tdatareportemandamientos[".geocodingEnabled"] = false;

//report settings

$tdatareportemandamientos[".reportPrintGroupsPerPage"] = 3;
$tdatareportemandamientos[".reportPrintRecordsPerPage"] = 40;

$tdatareportemandamientos[".pageSizeGroups"] = 5;
$tdatareportemandamientos[".pageSizeRecords"] = 20;


//end of report settings



$tdatareportemandamientos[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY P.CarteraTipoId, S.Seccional, A.Abogado, P.ConceptoId, M.Fecha, SA.Sancionado";
$tdatareportemandamientos[".strOrderBy"] = $tstrOrderBy;

$tdatareportemandamientos[".orderindexes"] = array();
	$tdatareportemandamientos[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "P.CarteraTipoId");

	$tdatareportemandamientos[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "S.Seccional");

	$tdatareportemandamientos[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "A.Abogado");

	$tdatareportemandamientos[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "P.ConceptoId");

	$tdatareportemandamientos[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "M.Fecha");

	$tdatareportemandamientos[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "SA.Sancionado");



$tdatareportemandamientos[".sqlHead"] = "        SELECT M.MandamientoId,  P.CarteraTipoId,  S.Seccional,  A.Abogado,  M.Fecha,  P.ConceptoId,  P.Numero,  SA.Sancionado,  SA.Documento,  P.Obligacion,  P.Intereses,  P.Costas";
$tdatareportemandamientos[".sqlFrom"] = "FROM dbo.Mandamientos AS M  INNER JOIN dbo.Procesos AS P ON M.ProcesoId = P.ProcesoId  INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId  INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId  INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$tdatareportemandamientos[".sqlWhereExpr"] = "";
$tdatareportemandamientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatareportemandamientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportemandamientos[".arrGroupsPerPage"] = $arrGPP;

$tdatareportemandamientos[".highlightSearchResults"] = true;

$tableKeysreportemandamientos = array();
$tableKeysreportemandamientos[] = "MandamientoId";
$tdatareportemandamientos[".Keys"] = $tableKeysreportemandamientos;


$tdatareportemandamientos[".hideMobileList"] = array();




//	MandamientoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MandamientoId";
	$fdata["GoodName"] = "MandamientoId";
	$fdata["ownerTable"] = "dbo.Mandamientos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","MandamientoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MandamientoId";

		$fdata["sourceSingle"] = "MandamientoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M.MandamientoId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["MandamientoId"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "MandamientoId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.CarteraTipoId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["CarteraTipoId"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "CarteraTipoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Seccional");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Seccional"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Seccional";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.Abogado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Abogado"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Mandamientos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M.Fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "MandamientoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatareportemandamientos["Fecha"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Fecha";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.ConceptoId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["ConceptoId"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "ConceptoId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Numero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "MandamientoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareportemandamientos["Numero"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA.Sancionado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Sancionado"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA.Documento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Documento"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Documento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Obligacion"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Intereses"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteMandamientos","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareportemandamientos["Costas"] = $fdata;
		$tdatareportemandamientos[".searchableFields"][] = "Costas";


$tables_data["dbo.ReporteMandamientos"]=&$tdatareportemandamientos;
$field_labels["dbo_ReporteMandamientos"] = &$fieldLabelsreportemandamientos;
$fieldToolTips["dbo_ReporteMandamientos"] = &$fieldToolTipsreportemandamientos;
$placeHolders["dbo_ReporteMandamientos"] = &$placeHoldersreportemandamientos;
$page_titles["dbo_ReporteMandamientos"] = &$pageTitlesreportemandamientos;


changeTextControlsToDate( "dbo.ReporteMandamientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ReporteMandamientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ReporteMandamientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportemandamientos()
{
$proto0=array();
$proto0["m_strHead"] = "        SELECT";
$proto0["m_strFieldList"] = "M.MandamientoId,  P.CarteraTipoId,  S.Seccional,  A.Abogado,  M.Fecha,  P.ConceptoId,  P.Numero,  SA.Sancionado,  SA.Documento,  P.Obligacion,  P.Intereses,  P.Costas";
$proto0["m_strFrom"] = "FROM dbo.Mandamientos AS M  INNER JOIN dbo.Procesos AS P ON M.ProcesoId = P.ProcesoId  INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId  INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId  INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY P.CarteraTipoId, S.Seccional, A.Abogado, P.ConceptoId, M.Fecha, SA.Sancionado";
	
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
	"m_strName" => "MandamientoId",
	"m_strTable" => "M",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto6["m_sql"] = "M.MandamientoId";
$proto6["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto8["m_sql"] = "P.CarteraTipoId";
$proto8["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto10["m_sql"] = "S.Seccional";
$proto10["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto12["m_sql"] = "A.Abogado";
$proto12["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "M",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto14["m_sql"] = "M.Fecha";
$proto14["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto16["m_sql"] = "P.ConceptoId";
$proto16["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto18["m_sql"] = "P.Numero";
$proto18["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto20["m_sql"] = "SA.Sancionado";
$proto20["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto22["m_sql"] = "SA.Documento";
$proto22["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto24["m_sql"] = "P.Obligacion";
$proto24["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto26["m_sql"] = "P.Intereses";
$proto26["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto28["m_sql"] = "P.Costas";
$proto28["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Mandamientos";
$proto31["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "MandamientoId";
$proto31["m_columns"][] = "ProcesoId";
$proto31["m_columns"][] = "Fecha";
$proto31["m_columns"][] = "Seleccionado";
$proto31["m_columns"][] = "SeleccionadoFecha";
$proto31["m_columns"][] = "SeleccionadoPor";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.Mandamientos AS M";
$proto30["m_alias"] = "M";
$proto30["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Procesos";
$proto35["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ProcesoId";
$proto35["m_columns"][] = "SeccionalId";
$proto35["m_columns"][] = "AbogadoId";
$proto35["m_columns"][] = "Fecha";
$proto35["m_columns"][] = "Numero";
$proto35["m_columns"][] = "DespachoId";
$proto35["m_columns"][] = "SancionadoId";
$proto35["m_columns"][] = "Providencia";
$proto35["m_columns"][] = "Ejecutoria";
$proto35["m_columns"][] = "ConceptoId";
$proto35["m_columns"][] = "EstadoId";
$proto35["m_columns"][] = "EtapaId";
$proto35["m_columns"][] = "Folios";
$proto35["m_columns"][] = "Tipo";
$proto35["m_columns"][] = "Cantidad";
$proto35["m_columns"][] = "Obligacion";
$proto35["m_columns"][] = "Costas";
$proto35["m_columns"][] = "Liquidacion";
$proto35["m_columns"][] = "Dias";
$proto35["m_columns"][] = "Intereses";
$proto35["m_columns"][] = "Recaudo";
$proto35["m_columns"][] = "CalificacionId";
$proto35["m_columns"][] = "Terminacion";
$proto35["m_columns"][] = "MotivoId";
$proto35["m_columns"][] = "Observaciones";
$proto35["m_columns"][] = "Cuotas";
$proto35["m_columns"][] = "Abono";
$proto35["m_columns"][] = "Inicio";
$proto35["m_columns"][] = "VlrCuota";
$proto35["m_columns"][] = "VlrIntereses";
$proto35["m_columns"][] = "Garantia";
$proto35["m_columns"][] = "Radicado";
$proto35["m_columns"][] = "Remisorio";
$proto35["m_columns"][] = "Acuerdo";
$proto35["m_columns"][] = "Incumplimiento";
$proto35["m_columns"][] = "Notificacion";
$proto35["m_columns"][] = "Suspension";
$proto35["m_columns"][] = "Traslado";
$proto35["m_columns"][] = "Error";
$proto35["m_columns"][] = "CarteraTipoId";
$proto35["m_columns"][] = "ConceptoAbogado";
$proto35["m_columns"][] = "Origen";
$proto35["m_columns"][] = "Carpeta";
$proto35["m_columns"][] = "ImportacionId";
$proto35["m_columns"][] = "ActuacionId";
$proto35["m_columns"][] = "ObligacionInicial";
$proto35["m_columns"][] = "CostasInicial";
$proto35["m_columns"][] = "InteresesInicial";
$proto35["m_columns"][] = "MinJusticia";
$proto35["m_columns"][] = "Revocatoria";
$proto35["m_columns"][] = "Mayor";
$proto35["m_columns"][] = "NotificacionValidada";
$proto35["m_columns"][] = "Validado";
$proto35["m_columns"][] = "Seleccionado";
$proto35["m_columns"][] = "CompetenciaId";
$proto35["m_columns"][] = "MinjusticiaId";
$proto35["m_columns"][] = "SeleccionadoPor";
$proto35["m_columns"][] = "Subsanar";
$proto35["m_columns"][] = "NumeroMinjusticia";
$proto35["m_columns"][] = "ProcesoIdOrigen";
$proto35["m_columns"][] = "SeleccionadoFecha";
$proto35["m_columns"][] = "InteresesIniciales";
$proto35["m_columns"][] = "InteresesCalculados";
$proto35["m_columns"][] = "ProcesoIdDestino";
$proto35["m_columns"][] = "RecaudoMinjusticia";
$proto35["m_columns"][] = "RecaudoTerminado";
$proto35["m_columns"][] = "Persuasivo";
$proto35["m_columns"][] = "ObligacionCreacion";
$proto35["m_columns"][] = "InteresesCreacion";
$proto35["m_columns"][] = "CostasCreacion";
$proto35["m_columns"][] = "Plazo";
$proto35["m_columns"][] = "NaturalezaId";
$proto35["m_columns"][] = "TrasladoCartera";
$proto35["m_columns"][] = "CarteraTipoIdOrigen";
$proto35["m_columns"][] = "TrasladoConcepto";
$proto35["m_columns"][] = "ConceptoIdOrigen";
$proto35["m_columns"][] = "AutorizadoPlazo";
$proto35["m_columns"][] = "AutorizadoFecha";
$proto35["m_columns"][] = "AutorizadoPor";
$proto35["m_columns"][] = "Reliquidacion";
$proto35["m_columns"][] = "ChequeoId";
$proto35["m_columns"][] = "VlrCostas";
$proto35["m_columns"][] = "VlrInteresesPlazo";
$proto35["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN dbo.Procesos AS P ON M.ProcesoId = P.ProcesoId";
$proto34["m_alias"] = "P";
$proto34["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto36=array();
$proto36["m_sql"] = "P.ProcesoId = M.ProcesoId";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= M.ProcesoId";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "dbo.Seccionales";
$proto39["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "SeccionalId";
$proto39["m_columns"][] = "Codigo";
$proto39["m_columns"][] = "Seccional";
$proto39["m_columns"][] = "NIT";
$proto39["m_columns"][] = "CiudadId";
$proto39["m_columns"][] = "PiePagina";
$proto39["m_columns"][] = "Sigobius";
$proto39["m_columns"][] = "Email";
$proto39["m_columns"][] = "Direccion";
$proto39["m_columns"][] = "Telefonos";
$proto39["m_columns"][] = "PCI";
$proto39["m_columns"][] = "Contador";
$proto39["m_columns"][] = "ContadorCargo";
$proto39["m_columns"][] = "Director";
$proto39["m_columns"][] = "DirectorCargo";
$proto39["m_columns"][] = "Abogado";
$proto39["m_columns"][] = "AbogadoCargo";
$proto39["m_columns"][] = "Formato";
$proto39["m_columns"][] = "Corporacion";
$proto39["m_columns"][] = "Unidad";
$proto39["m_columns"][] = "Oficina";
$proto39["m_columns"][] = "Serie";
$proto39["m_columns"][] = "Subserie";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId";
$proto38["m_alias"] = "S";
$proto38["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto40=array();
$proto40["m_sql"] = "S.SeccionalId = P.SeccionalId";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= P.SeccionalId";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "dbo.CarteraTipos";
$proto43["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "CarteraTipoId";
$proto43["m_columns"][] = "CarteraTipo";
$proto43["m_columns"][] = "Color";
$proto43["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId";
$proto42["m_alias"] = "CT";
$proto42["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto44=array();
$proto44["m_sql"] = "CT.CarteraTipoId = P.CarteraTipoId";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= P.CarteraTipoId";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "dbo.Sancionados";
$proto47["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "SancionadoId";
$proto47["m_columns"][] = "Sancionado";
$proto47["m_columns"][] = "TipoDocumentoId";
$proto47["m_columns"][] = "Documento";
$proto47["m_columns"][] = "Email";
$proto47["m_columns"][] = "Celular";
$proto47["m_columns"][] = "Masculino";
$proto47["m_columns"][] = "Observaciones";
$proto47["m_columns"][] = "Fallecimiento";
$proto47["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId";
$proto46["m_alias"] = "SA";
$proto46["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto48=array();
$proto48["m_sql"] = "SA.SancionadoId = P.SancionadoId";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= P.SancionadoId";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "dbo.Abogados";
$proto51["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "AbogadoId";
$proto51["m_columns"][] = "Abogado";
$proto51["m_columns"][] = "Documento";
$proto51["m_columns"][] = "Tarjeta";
$proto51["m_columns"][] = "Direccion";
$proto51["m_columns"][] = "Telefonos";
$proto51["m_columns"][] = "Celular";
$proto51["m_columns"][] = "Email";
$proto51["m_columns"][] = "SeccionalId";
$proto51["m_columns"][] = "Masculino";
$proto51["m_columns"][] = "Activo";
$proto51["m_columns"][] = "Despacho";
$proto51["m_columns"][] = "Codificador";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$proto50["m_alias"] = "A";
$proto50["m_srcTableName"] = "dbo.ReporteMandamientos";
$proto52=array();
$proto52["m_sql"] = "A.AbogadoId = P.AbogadoId";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= P.AbogadoId";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 1;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 1;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto0["m_orderby"][]=$obj;					
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 1;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 1;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "M",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 1;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.ReporteMandamientos"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ReporteMandamientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportemandamientos = createSqlQuery_reportemandamientos();


	
		;

												

$tdatareportemandamientos[".sqlquery"] = $queryData_reportemandamientos;



$tdatareportemandamientos[".hasEvents"] = false;

?>