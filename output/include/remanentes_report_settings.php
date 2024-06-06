<?php
$tdataremanentes_report = array();
$tdataremanentes_report[".searchableFields"] = array();
$tdataremanentes_report[".ShortName"] = "remanentes_report";
$tdataremanentes_report[".OwnerID"] = "";
$tdataremanentes_report[".OriginalTable"] = "dbo.Remanentes";


$tdataremanentes_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataremanentes_report[".originalPagesByType"] = $tdataremanentes_report[".pagesByType"];
$tdataremanentes_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataremanentes_report[".originalPages"] = $tdataremanentes_report[".pages"];
$tdataremanentes_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataremanentes_report[".originalDefaultPages"] = $tdataremanentes_report[".defaultPages"];

//	field labels
$fieldLabelsremanentes_report = array();
$fieldToolTipsremanentes_report = array();
$pageTitlesremanentes_report = array();
$placeHoldersremanentes_report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsremanentes_report["Spanish"] = array();
	$fieldToolTipsremanentes_report["Spanish"] = array();
	$placeHoldersremanentes_report["Spanish"] = array();
	$pageTitlesremanentes_report["Spanish"] = array();
	$fieldLabelsremanentes_report["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsremanentes_report["Spanish"]["Fecha"] = "";
	$placeHoldersremanentes_report["Spanish"]["Fecha"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Remanente"] = "Remanente";
	$fieldToolTipsremanentes_report["Spanish"]["Remanente"] = "";
	$placeHoldersremanentes_report["Spanish"]["Remanente"] = "";
	$fieldLabelsremanentes_report["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipsremanentes_report["Spanish"]["CarteraTipo"] = "";
	$placeHoldersremanentes_report["Spanish"]["CarteraTipo"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsremanentes_report["Spanish"]["Seccional"] = "";
	$placeHoldersremanentes_report["Spanish"]["Seccional"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsremanentes_report["Spanish"]["Abogado"] = "";
	$placeHoldersremanentes_report["Spanish"]["Abogado"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsremanentes_report["Spanish"]["Concepto"] = "";
	$placeHoldersremanentes_report["Spanish"]["Concepto"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsremanentes_report["Spanish"]["Numero"] = "";
	$placeHoldersremanentes_report["Spanish"]["Numero"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsremanentes_report["Spanish"]["Sancionado"] = "";
	$placeHoldersremanentes_report["Spanish"]["Sancionado"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsremanentes_report["Spanish"]["Documento"] = "";
	$placeHoldersremanentes_report["Spanish"]["Documento"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsremanentes_report["Spanish"]["Obligacion"] = "";
	$placeHoldersremanentes_report["Spanish"]["Obligacion"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsremanentes_report["Spanish"]["Intereses"] = "";
	$placeHoldersremanentes_report["Spanish"]["Intereses"] = "";
	$fieldLabelsremanentes_report["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsremanentes_report["Spanish"]["Costas"] = "";
	$placeHoldersremanentes_report["Spanish"]["Costas"] = "";
	if (count($fieldToolTipsremanentes_report["Spanish"]))
		$tdataremanentes_report[".isUseToolTips"] = true;
}


	$tdataremanentes_report[".NCSearch"] = true;



$tdataremanentes_report[".shortTableName"] = "remanentes_report";
$tdataremanentes_report[".nSecOptions"] = 0;

$tdataremanentes_report[".mainTableOwnerID"] = "";
$tdataremanentes_report[".entityType"] = 2;
$tdataremanentes_report[".connId"] = "GCC_at_S00001_CCAD01";


$tdataremanentes_report[".strOriginalTableName"] = "dbo.Remanentes";

	



$tdataremanentes_report[".showAddInPopup"] = false;

$tdataremanentes_report[".showEditInPopup"] = false;

$tdataremanentes_report[".showViewInPopup"] = false;

$tdataremanentes_report[".listAjax"] = false;
//	temporary
//$tdataremanentes_report[".listAjax"] = false;

	$tdataremanentes_report[".audit"] = false;

	$tdataremanentes_report[".locking"] = false;


$pages = $tdataremanentes_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataremanentes_report[".edit"] = true;
	$tdataremanentes_report[".afterEditAction"] = 1;
	$tdataremanentes_report[".closePopupAfterEdit"] = 1;
	$tdataremanentes_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataremanentes_report[".add"] = true;
$tdataremanentes_report[".afterAddAction"] = 1;
$tdataremanentes_report[".closePopupAfterAdd"] = 1;
$tdataremanentes_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataremanentes_report[".list"] = true;
}



$tdataremanentes_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataremanentes_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataremanentes_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataremanentes_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataremanentes_report[".printFriendly"] = true;
}



$tdataremanentes_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataremanentes_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataremanentes_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataremanentes_report[".isUseAjaxSuggest"] = true;



																																																																														

$tdataremanentes_report[".ajaxCodeSnippetAdded"] = false;

$tdataremanentes_report[".buttonsAdded"] = false;

$tdataremanentes_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataremanentes_report[".isUseTimeForSearch"] = false;


$tdataremanentes_report[".badgeColor"] = "3CB371";


$tdataremanentes_report[".allSearchFields"] = array();
$tdataremanentes_report[".filterFields"] = array();
$tdataremanentes_report[".requiredSearchFields"] = array();

$tdataremanentes_report[".googleLikeFields"] = array();
$tdataremanentes_report[".googleLikeFields"][] = "CarteraTipo";
$tdataremanentes_report[".googleLikeFields"][] = "Seccional";
$tdataremanentes_report[".googleLikeFields"][] = "Abogado";
$tdataremanentes_report[".googleLikeFields"][] = "Fecha";
$tdataremanentes_report[".googleLikeFields"][] = "Concepto";
$tdataremanentes_report[".googleLikeFields"][] = "Numero";
$tdataremanentes_report[".googleLikeFields"][] = "Sancionado";
$tdataremanentes_report[".googleLikeFields"][] = "Obligacion";
$tdataremanentes_report[".googleLikeFields"][] = "Intereses";
$tdataremanentes_report[".googleLikeFields"][] = "Costas";
$tdataremanentes_report[".googleLikeFields"][] = "Remanente";



$tdataremanentes_report[".tableType"] = "report";

$tdataremanentes_report[".printerPageOrientation"] = 0;
$tdataremanentes_report[".nPrinterPageScale"] = 100;

$tdataremanentes_report[".nPrinterSplitRecords"] = 40;

$tdataremanentes_report[".geocodingEnabled"] = false;

//report settings

$tdataremanentes_report[".reportPrintGroupsPerPage"] = 3;
$tdataremanentes_report[".reportPrintRecordsPerPage"] = 40;

$tdataremanentes_report[".pageSizeGroups"] = 5;
$tdataremanentes_report[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdataremanentes_report[".strOrderBy"] = $tstrOrderBy;

$tdataremanentes_report[".orderindexes"] = array();


$tdataremanentes_report[".sqlHead"] = "SELECT CT.CarteraTipo,S.Seccional,A.Abogado,R.Fecha,C.Concepto,P.Numero,SA.Sancionado,  SA.Documento,P.Obligacion,P.Intereses,P.Costas,R.Remanente";
$tdataremanentes_report[".sqlFrom"] = "FROM Procesos P  INNER JOIN Remanentes R ON R.ProcesoId = P.ProcesoId  INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId  INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId  INNER JOIN Sancionados SA ON SA.SancionadoId =P.SancionadoId  INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId  INNER JOIN Abogados A ON A.AbogadoId = P.AbogadoId";
$tdataremanentes_report[".sqlWhereExpr"] = "";
$tdataremanentes_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataremanentes_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataremanentes_report[".arrGroupsPerPage"] = $arrGPP;

$tdataremanentes_report[".highlightSearchResults"] = true;

$tableKeysremanentes_report = array();
$tdataremanentes_report[".Keys"] = $tableKeysremanentes_report;


$tdataremanentes_report[".hideMobileList"] = array();




//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT.CarteraTipo";

	
	
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


	$tdataremanentes_report["CarteraTipo"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "CarteraTipo";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Seccional");
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


	$tdataremanentes_report["Seccional"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Seccional";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Abogado");
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataremanentes_report["Abogado"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Remanentes";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R.Fecha";

	
	
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

	
	
		$edata["DateEditType"] = 2;
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
		$fdata["filterTotalFields"] = "Obligacion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdataremanentes_report["Fecha"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Fecha";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Concepto");
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
		$fdata["filterTotalFields"] = "Obligacion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataremanentes_report["Concepto"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Numero");
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


	$tdataremanentes_report["Numero"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Sancionado");
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


	$tdataremanentes_report["Sancionado"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Documento");
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
		$fdata["filterTotalFields"] = "Obligacion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataremanentes_report["Documento"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Documento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Obligacion");
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


	$tdataremanentes_report["Obligacion"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Intereses");
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


	$tdataremanentes_report["Intereses"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Costas");
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


	$tdataremanentes_report["Costas"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Costas";
//	Remanente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Remanente";
	$fdata["GoodName"] = "Remanente";
	$fdata["ownerTable"] = "dbo.Remanentes";
	$fdata["Label"] = GetFieldLabel("dbo_Remanentes_Report","Remanente");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Remanente";

		$fdata["sourceSingle"] = "Remanente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R.Remanente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataremanentes_report["Remanente"] = $fdata;
		$tdataremanentes_report[".searchableFields"][] = "Remanente";


$tables_data["dbo.Remanentes Report"]=&$tdataremanentes_report;
$field_labels["dbo_Remanentes_Report"] = &$fieldLabelsremanentes_report;
$fieldToolTips["dbo_Remanentes_Report"] = &$fieldToolTipsremanentes_report;
$placeHolders["dbo_Remanentes_Report"] = &$placeHoldersremanentes_report;
$page_titles["dbo_Remanentes_Report"] = &$pageTitlesremanentes_report;


changeTextControlsToDate( "dbo.Remanentes Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Remanentes Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Remanentes Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_remanentes_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CT.CarteraTipo,S.Seccional,A.Abogado,R.Fecha,C.Concepto,P.Numero,SA.Sancionado,  SA.Documento,P.Obligacion,P.Intereses,P.Costas,R.Remanente";
$proto0["m_strFrom"] = "FROM Procesos P  INNER JOIN Remanentes R ON R.ProcesoId = P.ProcesoId  INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId  INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId  INNER JOIN Sancionados SA ON SA.SancionadoId =P.SancionadoId  INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId  INNER JOIN Abogados A ON A.AbogadoId = P.AbogadoId";
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
	"m_strName" => "CarteraTipo",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto6["m_sql"] = "CT.CarteraTipo";
$proto6["m_srcTableName"] = "dbo.Remanentes Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto8["m_sql"] = "S.Seccional";
$proto8["m_srcTableName"] = "dbo.Remanentes Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto10["m_sql"] = "A.Abogado";
$proto10["m_srcTableName"] = "dbo.Remanentes Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "R",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto12["m_sql"] = "R.Fecha";
$proto12["m_srcTableName"] = "dbo.Remanentes Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto14["m_sql"] = "C.Concepto";
$proto14["m_srcTableName"] = "dbo.Remanentes Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto16["m_sql"] = "P.Numero";
$proto16["m_srcTableName"] = "dbo.Remanentes Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto18["m_sql"] = "SA.Sancionado";
$proto18["m_srcTableName"] = "dbo.Remanentes Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto20["m_sql"] = "SA.Documento";
$proto20["m_srcTableName"] = "dbo.Remanentes Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto22["m_sql"] = "P.Obligacion";
$proto22["m_srcTableName"] = "dbo.Remanentes Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto24["m_sql"] = "P.Intereses";
$proto24["m_srcTableName"] = "dbo.Remanentes Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto26["m_sql"] = "P.Costas";
$proto26["m_srcTableName"] = "dbo.Remanentes Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Remanente",
	"m_strTable" => "R",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto28["m_sql"] = "R.Remanente";
$proto28["m_srcTableName"] = "dbo.Remanentes Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Procesos";
$proto31["m_srcTableName"] = "dbo.Remanentes Report";
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
$proto30["m_sql"] = "Procesos P";
$proto30["m_alias"] = "P";
$proto30["m_srcTableName"] = "dbo.Remanentes Report";
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
$proto35["m_strName"] = "dbo.Remanentes";
$proto35["m_srcTableName"] = "dbo.Remanentes Report";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "RemanenteId";
$proto35["m_columns"][] = "ProcesoId";
$proto35["m_columns"][] = "Fecha";
$proto35["m_columns"][] = "Seleccionado";
$proto35["m_columns"][] = "SeleccionadoFecha";
$proto35["m_columns"][] = "SeleccionadoPor";
$proto35["m_columns"][] = "Remanente";
$proto35["m_columns"][] = "PagoId";
$proto35["m_columns"][] = "PagoIdOrigen";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN Remanentes R ON R.ProcesoId = P.ProcesoId";
$proto34["m_alias"] = "R";
$proto34["m_srcTableName"] = "dbo.Remanentes Report";
$proto36=array();
$proto36["m_sql"] = "R.ProcesoId = P.ProcesoId";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "R",
	"m_srcTableName" => "dbo.Remanentes Report"
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
$proto39["m_strName"] = "dbo.Seccionales";
$proto39["m_srcTableName"] = "dbo.Remanentes Report";
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
$proto38["m_sql"] = "INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId";
$proto38["m_alias"] = "S";
$proto38["m_srcTableName"] = "dbo.Remanentes Report";
$proto40=array();
$proto40["m_sql"] = "S.SeccionalId = P.SeccionalId";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Remanentes Report"
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
$proto43["m_srcTableName"] = "dbo.Remanentes Report";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "CarteraTipoId";
$proto43["m_columns"][] = "CarteraTipo";
$proto43["m_columns"][] = "Color";
$proto43["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId";
$proto42["m_alias"] = "CT";
$proto42["m_srcTableName"] = "dbo.Remanentes Report";
$proto44=array();
$proto44["m_sql"] = "CT.CarteraTipoId = P.CarteraTipoId";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Remanentes Report"
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
$proto47["m_srcTableName"] = "dbo.Remanentes Report";
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
$proto46["m_sql"] = "INNER JOIN Sancionados SA ON SA.SancionadoId =P.SancionadoId";
$proto46["m_alias"] = "SA";
$proto46["m_srcTableName"] = "dbo.Remanentes Report";
$proto48=array();
$proto48["m_sql"] = "SA.SancionadoId = P.SancionadoId";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Remanentes Report"
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
$proto51["m_strName"] = "dbo.Conceptos";
$proto51["m_srcTableName"] = "dbo.Remanentes Report";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "ConceptoId";
$proto51["m_columns"][] = "Concepto";
$proto51["m_columns"][] = "Activo";
$proto51["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId";
$proto50["m_alias"] = "C";
$proto50["m_srcTableName"] = "dbo.Remanentes Report";
$proto52=array();
$proto52["m_sql"] = "C.ConceptoId = P.ConceptoId";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Remanentes Report"
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
$proto55["m_strName"] = "dbo.Abogados";
$proto55["m_srcTableName"] = "dbo.Remanentes Report";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "AbogadoId";
$proto55["m_columns"][] = "Abogado";
$proto55["m_columns"][] = "Documento";
$proto55["m_columns"][] = "Tarjeta";
$proto55["m_columns"][] = "Direccion";
$proto55["m_columns"][] = "Telefonos";
$proto55["m_columns"][] = "Celular";
$proto55["m_columns"][] = "Email";
$proto55["m_columns"][] = "SeccionalId";
$proto55["m_columns"][] = "Masculino";
$proto55["m_columns"][] = "Activo";
$proto55["m_columns"][] = "Despacho";
$proto55["m_columns"][] = "Codificador";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "INNER JOIN Abogados A ON A.AbogadoId = P.AbogadoId";
$proto54["m_alias"] = "A";
$proto54["m_srcTableName"] = "dbo.Remanentes Report";
$proto56=array();
$proto56["m_sql"] = "A.AbogadoId = P.AbogadoId";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Remanentes Report"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= P.AbogadoId";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Remanentes Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_remanentes_report = createSqlQuery_remanentes_report();


	
		;

												

$tdataremanentes_report[".sqlquery"] = $queryData_remanentes_report;



$tdataremanentes_report[".hasEvents"] = false;

?>