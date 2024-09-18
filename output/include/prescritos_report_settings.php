<?php
$tdataprescritos_report = array();
$tdataprescritos_report[".searchableFields"] = array();
$tdataprescritos_report[".ShortName"] = "prescritos_report";
$tdataprescritos_report[".OwnerID"] = "";
$tdataprescritos_report[".OriginalTable"] = "dbo.Prescritos";


$tdataprescritos_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataprescritos_report[".originalPagesByType"] = $tdataprescritos_report[".pagesByType"];
$tdataprescritos_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataprescritos_report[".originalPages"] = $tdataprescritos_report[".pages"];
$tdataprescritos_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataprescritos_report[".originalDefaultPages"] = $tdataprescritos_report[".defaultPages"];

//	field labels
$fieldLabelsprescritos_report = array();
$fieldToolTipsprescritos_report = array();
$pageTitlesprescritos_report = array();
$placeHoldersprescritos_report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprescritos_report["Spanish"] = array();
	$fieldToolTipsprescritos_report["Spanish"] = array();
	$placeHoldersprescritos_report["Spanish"] = array();
	$pageTitlesprescritos_report["Spanish"] = array();
	$fieldLabelsprescritos_report["Spanish"]["PrescritoId"] = "Prescrito Id";
	$fieldToolTipsprescritos_report["Spanish"]["PrescritoId"] = "";
	$placeHoldersprescritos_report["Spanish"]["PrescritoId"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Fecha"] = "Fecha Prescripcion";
	$fieldToolTipsprescritos_report["Spanish"]["Fecha"] = "";
	$placeHoldersprescritos_report["Spanish"]["Fecha"] = "";
	$fieldLabelsprescritos_report["Spanish"]["CarteraTipoId"] = "Tipo de Cartera";
	$fieldToolTipsprescritos_report["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprescritos_report["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsprescritos_report["Spanish"]["Seccional"] = "";
	$placeHoldersprescritos_report["Spanish"]["Seccional"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprescritos_report["Spanish"]["Abogado"] = "";
	$placeHoldersprescritos_report["Spanish"]["Abogado"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsprescritos_report["Spanish"]["Concepto"] = "";
	$placeHoldersprescritos_report["Spanish"]["Concepto"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsprescritos_report["Spanish"]["Numero"] = "";
	$placeHoldersprescritos_report["Spanish"]["Numero"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprescritos_report["Spanish"]["Sancionado"] = "";
	$placeHoldersprescritos_report["Spanish"]["Sancionado"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Documento"] = "Identificación";
	$fieldToolTipsprescritos_report["Spanish"]["Documento"] = "";
	$placeHoldersprescritos_report["Spanish"]["Documento"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprescritos_report["Spanish"]["Obligacion"] = "";
	$placeHoldersprescritos_report["Spanish"]["Obligacion"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprescritos_report["Spanish"]["Intereses"] = "";
	$placeHoldersprescritos_report["Spanish"]["Intereses"] = "";
	$fieldLabelsprescritos_report["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprescritos_report["Spanish"]["Costas"] = "";
	$placeHoldersprescritos_report["Spanish"]["Costas"] = "";
	if (count($fieldToolTipsprescritos_report["Spanish"]))
		$tdataprescritos_report[".isUseToolTips"] = true;
}


	$tdataprescritos_report[".NCSearch"] = true;



$tdataprescritos_report[".shortTableName"] = "prescritos_report";
$tdataprescritos_report[".nSecOptions"] = 0;

$tdataprescritos_report[".mainTableOwnerID"] = "";
$tdataprescritos_report[".entityType"] = 2;
$tdataprescritos_report[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprescritos_report[".strOriginalTableName"] = "dbo.Prescritos";

	



$tdataprescritos_report[".showAddInPopup"] = false;

$tdataprescritos_report[".showEditInPopup"] = false;

$tdataprescritos_report[".showViewInPopup"] = false;

$tdataprescritos_report[".listAjax"] = false;
//	temporary
//$tdataprescritos_report[".listAjax"] = false;

	$tdataprescritos_report[".audit"] = false;

	$tdataprescritos_report[".locking"] = false;


$pages = $tdataprescritos_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprescritos_report[".edit"] = true;
	$tdataprescritos_report[".afterEditAction"] = 1;
	$tdataprescritos_report[".closePopupAfterEdit"] = 1;
	$tdataprescritos_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprescritos_report[".add"] = true;
$tdataprescritos_report[".afterAddAction"] = 1;
$tdataprescritos_report[".closePopupAfterAdd"] = 1;
$tdataprescritos_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprescritos_report[".list"] = true;
}



$tdataprescritos_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprescritos_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprescritos_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprescritos_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprescritos_report[".printFriendly"] = true;
}



$tdataprescritos_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprescritos_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprescritos_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprescritos_report[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																									

$tdataprescritos_report[".ajaxCodeSnippetAdded"] = false;

$tdataprescritos_report[".buttonsAdded"] = false;

$tdataprescritos_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprescritos_report[".isUseTimeForSearch"] = false;


$tdataprescritos_report[".badgeColor"] = "E07878";


$tdataprescritos_report[".allSearchFields"] = array();
$tdataprescritos_report[".filterFields"] = array();
$tdataprescritos_report[".requiredSearchFields"] = array();

$tdataprescritos_report[".googleLikeFields"] = array();
$tdataprescritos_report[".googleLikeFields"][] = "PrescritoId";
$tdataprescritos_report[".googleLikeFields"][] = "CarteraTipoId";
$tdataprescritos_report[".googleLikeFields"][] = "Seccional";
$tdataprescritos_report[".googleLikeFields"][] = "Fecha";
$tdataprescritos_report[".googleLikeFields"][] = "Concepto";
$tdataprescritos_report[".googleLikeFields"][] = "Numero";
$tdataprescritos_report[".googleLikeFields"][] = "Sancionado";
$tdataprescritos_report[".googleLikeFields"][] = "Documento";
$tdataprescritos_report[".googleLikeFields"][] = "Obligacion";
$tdataprescritos_report[".googleLikeFields"][] = "Intereses";
$tdataprescritos_report[".googleLikeFields"][] = "Costas";



$tdataprescritos_report[".tableType"] = "report";

$tdataprescritos_report[".printerPageOrientation"] = 0;
$tdataprescritos_report[".nPrinterPageScale"] = 100;

$tdataprescritos_report[".nPrinterSplitRecords"] = 40;

$tdataprescritos_report[".geocodingEnabled"] = false;

//report settings

$tdataprescritos_report[".reportPrintGroupsPerPage"] = 3;
$tdataprescritos_report[".reportPrintRecordsPerPage"] = 40;

$tdataprescritos_report[".pageSizeGroups"] = 5;
$tdataprescritos_report[".pageSizeRecords"] = 20;


//end of report settings






$tdataprescritos_report[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
$tdataprescritos_report[".strOrderBy"] = $tstrOrderBy;

$tdataprescritos_report[".orderindexes"] = array();


$tdataprescritos_report[".sqlHead"] = "SELECT Pre.PrescritoId,  CT.CarteraTipoId,  S.Seccional,  A.Abogado,  Pre.Fecha,  C.Concepto,  P.Numero,  SA.Sancionado,  SA.Documento,  P.Obligacion,  P.Intereses,  P.Costas";
$tdataprescritos_report[".sqlFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Prescritos AS Pre ON P.ProcesoId = Pre.ProcesoId  INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId  INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId";
$tdataprescritos_report[".sqlWhereExpr"] = "";
$tdataprescritos_report[".sqlTail"] = "";

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
$tdataprescritos_report[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprescritos_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprescritos_report[".arrGroupsPerPage"] = $arrGPP;

$tdataprescritos_report[".highlightSearchResults"] = true;

$tableKeysprescritos_report = array();
$tableKeysprescritos_report[] = "PrescritoId";
$tdataprescritos_report[".Keys"] = $tableKeysprescritos_report;


$tdataprescritos_report[".hideMobileList"] = array();




//	PrescritoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PrescritoId";
	$fdata["GoodName"] = "PrescritoId";
	$fdata["ownerTable"] = "dbo.Prescritos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","PrescritoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PrescritoId";

		$fdata["sourceSingle"] = "PrescritoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pre.PrescritoId";

	
	
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


	$tdataprescritos_report["PrescritoId"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "PrescritoId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","CarteraTipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CarteraTipoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT.CarteraTipoId";

	
	
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
		$fdata["filterTotalFields"] = "PrescritoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescritos_report["CarteraTipoId"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "CarteraTipoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Seccional");
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
		$fdata["filterTotalFields"] = "PrescritoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescritos_report["Seccional"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Seccional";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Abogado");
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


	$tdataprescritos_report["Abogado"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Prescritos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pre.Fecha";

	
	
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
		$fdata["filterTotalFields"] = "PrescritoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdataprescritos_report["Fecha"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Fecha";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Concepto";

	
	
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
		$fdata["filterTotalFields"] = "PrescritoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescritos_report["Concepto"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Numero");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprescritos_report["Numero"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Sancionado");
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


	$tdataprescritos_report["Sancionado"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Documento");
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


	$tdataprescritos_report["Documento"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Documento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Obligacion");
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


	$tdataprescritos_report["Obligacion"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Intereses");
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


	$tdataprescritos_report["Intereses"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Prescritos_Report","Costas");
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


	$tdataprescritos_report["Costas"] = $fdata;
		$tdataprescritos_report[".searchableFields"][] = "Costas";


$tables_data["dbo.Prescritos Report"]=&$tdataprescritos_report;
$field_labels["dbo_Prescritos_Report"] = &$fieldLabelsprescritos_report;
$fieldToolTips["dbo_Prescritos_Report"] = &$fieldToolTipsprescritos_report;
$placeHolders["dbo_Prescritos_Report"] = &$placeHoldersprescritos_report;
$page_titles["dbo_Prescritos_Report"] = &$pageTitlesprescritos_report;


changeTextControlsToDate( "dbo.Prescritos Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Prescritos Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Prescritos Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_prescritos_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Pre.PrescritoId,  CT.CarteraTipoId,  S.Seccional,  A.Abogado,  Pre.Fecha,  C.Concepto,  P.Numero,  SA.Sancionado,  SA.Documento,  P.Obligacion,  P.Intereses,  P.Costas";
$proto0["m_strFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Prescritos AS Pre ON P.ProcesoId = Pre.ProcesoId  INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId  INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId";
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
	"m_strName" => "PrescritoId",
	"m_strTable" => "Pre",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto6["m_sql"] = "Pre.PrescritoId";
$proto6["m_srcTableName"] = "dbo.Prescritos Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto8["m_sql"] = "CT.CarteraTipoId";
$proto8["m_srcTableName"] = "dbo.Prescritos Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto10["m_sql"] = "S.Seccional";
$proto10["m_srcTableName"] = "dbo.Prescritos Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto12["m_sql"] = "A.Abogado";
$proto12["m_srcTableName"] = "dbo.Prescritos Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "Pre",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto14["m_sql"] = "Pre.Fecha";
$proto14["m_srcTableName"] = "dbo.Prescritos Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto16["m_sql"] = "C.Concepto";
$proto16["m_srcTableName"] = "dbo.Prescritos Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto18["m_sql"] = "P.Numero";
$proto18["m_srcTableName"] = "dbo.Prescritos Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto20["m_sql"] = "SA.Sancionado";
$proto20["m_srcTableName"] = "dbo.Prescritos Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto22["m_sql"] = "SA.Documento";
$proto22["m_srcTableName"] = "dbo.Prescritos Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto24["m_sql"] = "P.Obligacion";
$proto24["m_srcTableName"] = "dbo.Prescritos Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto26["m_sql"] = "P.Intereses";
$proto26["m_srcTableName"] = "dbo.Prescritos Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto28["m_sql"] = "P.Costas";
$proto28["m_srcTableName"] = "dbo.Prescritos Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Procesos";
$proto31["m_srcTableName"] = "dbo.Prescritos Report";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ProcesoId";
$proto31["m_columns"][] = "SeccionalId";
$proto31["m_columns"][] = "AbogadoId";
$proto31["m_columns"][] = "Fecha";
$proto31["m_columns"][] = "Numero";
$proto31["m_columns"][] = "DespachoId";
$proto31["m_columns"][] = "SancionadoId";
$proto31["m_columns"][] = "Providencia";
$proto31["m_columns"][] = "Ejecutoria";
$proto31["m_columns"][] = "ConceptoId";
$proto31["m_columns"][] = "EstadoId";
$proto31["m_columns"][] = "EtapaId";
$proto31["m_columns"][] = "Folios";
$proto31["m_columns"][] = "Tipo";
$proto31["m_columns"][] = "Cantidad";
$proto31["m_columns"][] = "Obligacion";
$proto31["m_columns"][] = "Costas";
$proto31["m_columns"][] = "Liquidacion";
$proto31["m_columns"][] = "Dias";
$proto31["m_columns"][] = "Intereses";
$proto31["m_columns"][] = "Recaudo";
$proto31["m_columns"][] = "CalificacionId";
$proto31["m_columns"][] = "Terminacion";
$proto31["m_columns"][] = "MotivoId";
$proto31["m_columns"][] = "Observaciones";
$proto31["m_columns"][] = "Cuotas";
$proto31["m_columns"][] = "Abono";
$proto31["m_columns"][] = "Inicio";
$proto31["m_columns"][] = "VlrCuota";
$proto31["m_columns"][] = "VlrIntereses";
$proto31["m_columns"][] = "Garantia";
$proto31["m_columns"][] = "Radicado";
$proto31["m_columns"][] = "Remisorio";
$proto31["m_columns"][] = "Acuerdo";
$proto31["m_columns"][] = "Incumplimiento";
$proto31["m_columns"][] = "Notificacion";
$proto31["m_columns"][] = "Suspension";
$proto31["m_columns"][] = "Traslado";
$proto31["m_columns"][] = "Error";
$proto31["m_columns"][] = "CarteraTipoId";
$proto31["m_columns"][] = "ConceptoAbogado";
$proto31["m_columns"][] = "Origen";
$proto31["m_columns"][] = "Carpeta";
$proto31["m_columns"][] = "ImportacionId";
$proto31["m_columns"][] = "ActuacionId";
$proto31["m_columns"][] = "ObligacionInicial";
$proto31["m_columns"][] = "CostasInicial";
$proto31["m_columns"][] = "InteresesInicial";
$proto31["m_columns"][] = "MinJusticia";
$proto31["m_columns"][] = "Revocatoria";
$proto31["m_columns"][] = "Mayor";
$proto31["m_columns"][] = "NotificacionValidada";
$proto31["m_columns"][] = "Validado";
$proto31["m_columns"][] = "Seleccionado";
$proto31["m_columns"][] = "CompetenciaId";
$proto31["m_columns"][] = "MinjusticiaId";
$proto31["m_columns"][] = "SeleccionadoPor";
$proto31["m_columns"][] = "Subsanar";
$proto31["m_columns"][] = "NumeroMinjusticia";
$proto31["m_columns"][] = "ProcesoIdOrigen";
$proto31["m_columns"][] = "SeleccionadoFecha";
$proto31["m_columns"][] = "InteresesIniciales";
$proto31["m_columns"][] = "InteresesCalculados";
$proto31["m_columns"][] = "ProcesoIdDestino";
$proto31["m_columns"][] = "RecaudoMinjusticia";
$proto31["m_columns"][] = "RecaudoTerminado";
$proto31["m_columns"][] = "Persuasivo";
$proto31["m_columns"][] = "ObligacionCreacion";
$proto31["m_columns"][] = "InteresesCreacion";
$proto31["m_columns"][] = "CostasCreacion";
$proto31["m_columns"][] = "Plazo";
$proto31["m_columns"][] = "NaturalezaId";
$proto31["m_columns"][] = "TrasladoCartera";
$proto31["m_columns"][] = "CarteraTipoIdOrigen";
$proto31["m_columns"][] = "TrasladoConcepto";
$proto31["m_columns"][] = "ConceptoIdOrigen";
$proto31["m_columns"][] = "AutorizadoPlazo";
$proto31["m_columns"][] = "AutorizadoFecha";
$proto31["m_columns"][] = "AutorizadoPor";
$proto31["m_columns"][] = "Reliquidacion";
$proto31["m_columns"][] = "ChequeoId";
$proto31["m_columns"][] = "VlrCostas";
$proto31["m_columns"][] = "VlrInteresesPlazo";
$proto31["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.Procesos AS P";
$proto30["m_alias"] = "P";
$proto30["m_srcTableName"] = "dbo.Prescritos Report";
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
$proto35["m_strName"] = "dbo.Prescritos";
$proto35["m_srcTableName"] = "dbo.Prescritos Report";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "PrescritoId";
$proto35["m_columns"][] = "ProcesoId";
$proto35["m_columns"][] = "Fecha";
$proto35["m_columns"][] = "Seleccionado";
$proto35["m_columns"][] = "SeleccionadoFecha";
$proto35["m_columns"][] = "SeleccionadoPor";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN dbo.Prescritos AS Pre ON P.ProcesoId = Pre.ProcesoId";
$proto34["m_alias"] = "Pre";
$proto34["m_srcTableName"] = "dbo.Prescritos Report";
$proto36=array();
$proto36["m_sql"] = "Pre.ProcesoId = P.ProcesoId";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "Pre",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= P.ProcesoId";
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
$proto39["m_strName"] = "dbo.CarteraTipos";
$proto39["m_srcTableName"] = "dbo.Prescritos Report";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "CarteraTipoId";
$proto39["m_columns"][] = "CarteraTipo";
$proto39["m_columns"][] = "Color";
$proto39["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN dbo.CarteraTipos AS CT ON P.CarteraTipoId = CT.CarteraTipoId";
$proto38["m_alias"] = "CT";
$proto38["m_srcTableName"] = "dbo.Prescritos Report";
$proto40=array();
$proto40["m_sql"] = "CT.CarteraTipoId = P.CarteraTipoId";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= P.CarteraTipoId";
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
$proto43["m_strName"] = "dbo.Seccionales";
$proto43["m_srcTableName"] = "dbo.Prescritos Report";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "SeccionalId";
$proto43["m_columns"][] = "Codigo";
$proto43["m_columns"][] = "Seccional";
$proto43["m_columns"][] = "NIT";
$proto43["m_columns"][] = "CiudadId";
$proto43["m_columns"][] = "PiePagina";
$proto43["m_columns"][] = "Sigobius";
$proto43["m_columns"][] = "Email";
$proto43["m_columns"][] = "Direccion";
$proto43["m_columns"][] = "Telefonos";
$proto43["m_columns"][] = "PCI";
$proto43["m_columns"][] = "Contador";
$proto43["m_columns"][] = "ContadorCargo";
$proto43["m_columns"][] = "Director";
$proto43["m_columns"][] = "DirectorCargo";
$proto43["m_columns"][] = "Abogado";
$proto43["m_columns"][] = "AbogadoCargo";
$proto43["m_columns"][] = "Formato";
$proto43["m_columns"][] = "Corporacion";
$proto43["m_columns"][] = "Unidad";
$proto43["m_columns"][] = "Oficina";
$proto43["m_columns"][] = "Serie";
$proto43["m_columns"][] = "Subserie";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN dbo.Seccionales AS S ON P.SeccionalId = S.SeccionalId";
$proto42["m_alias"] = "S";
$proto42["m_srcTableName"] = "dbo.Prescritos Report";
$proto44=array();
$proto44["m_sql"] = "S.SeccionalId = P.SeccionalId";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= P.SeccionalId";
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
$proto47["m_strName"] = "dbo.Abogados";
$proto47["m_srcTableName"] = "dbo.Prescritos Report";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "AbogadoId";
$proto47["m_columns"][] = "Abogado";
$proto47["m_columns"][] = "Documento";
$proto47["m_columns"][] = "Tarjeta";
$proto47["m_columns"][] = "Direccion";
$proto47["m_columns"][] = "Telefonos";
$proto47["m_columns"][] = "Celular";
$proto47["m_columns"][] = "Email";
$proto47["m_columns"][] = "SeccionalId";
$proto47["m_columns"][] = "Masculino";
$proto47["m_columns"][] = "Activo";
$proto47["m_columns"][] = "Despacho";
$proto47["m_columns"][] = "Codificador";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$proto46["m_alias"] = "A";
$proto46["m_srcTableName"] = "dbo.Prescritos Report";
$proto48=array();
$proto48["m_sql"] = "A.AbogadoId = P.AbogadoId";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= P.AbogadoId";
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
$proto51["m_strName"] = "dbo.Conceptos";
$proto51["m_srcTableName"] = "dbo.Prescritos Report";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "ConceptoId";
$proto51["m_columns"][] = "Concepto";
$proto51["m_columns"][] = "Activo";
$proto51["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId";
$proto50["m_alias"] = "C";
$proto50["m_srcTableName"] = "dbo.Prescritos Report";
$proto52=array();
$proto52["m_sql"] = "C.ConceptoId = P.ConceptoId";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= P.ConceptoId";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_INNERJOIN";
			$proto55=array();
$proto55["m_strName"] = "dbo.Sancionados";
$proto55["m_srcTableName"] = "dbo.Prescritos Report";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "SancionadoId";
$proto55["m_columns"][] = "Sancionado";
$proto55["m_columns"][] = "TipoDocumentoId";
$proto55["m_columns"][] = "Documento";
$proto55["m_columns"][] = "Email";
$proto55["m_columns"][] = "Celular";
$proto55["m_columns"][] = "Masculino";
$proto55["m_columns"][] = "Observaciones";
$proto55["m_columns"][] = "Fallecimiento";
$proto55["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "INNER JOIN dbo.Sancionados AS SA ON P.SancionadoId = SA.SancionadoId";
$proto54["m_alias"] = "SA";
$proto54["m_srcTableName"] = "dbo.Prescritos Report";
$proto56=array();
$proto56["m_sql"] = "SA.SancionadoId = P.SancionadoId";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Prescritos Report"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= P.SancionadoId";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Prescritos Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_prescritos_report = createSqlQuery_prescritos_report();


	
		;

												

$tdataprescritos_report[".sqlquery"] = $queryData_prescritos_report;



$tdataprescritos_report[".hasEvents"] = false;

?>