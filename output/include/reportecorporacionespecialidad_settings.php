<?php
$tdatareportecorporacionespecialidad = array();
$tdatareportecorporacionespecialidad[".searchableFields"] = array();
$tdatareportecorporacionespecialidad[".ShortName"] = "reportecorporacionespecialidad";
$tdatareportecorporacionespecialidad[".OwnerID"] = "";
$tdatareportecorporacionespecialidad[".OriginalTable"] = "dbo.Procesos";


$tdatareportecorporacionespecialidad[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatareportecorporacionespecialidad[".originalPagesByType"] = $tdatareportecorporacionespecialidad[".pagesByType"];
$tdatareportecorporacionespecialidad[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatareportecorporacionespecialidad[".originalPages"] = $tdatareportecorporacionespecialidad[".pages"];
$tdatareportecorporacionespecialidad[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatareportecorporacionespecialidad[".originalDefaultPages"] = $tdatareportecorporacionespecialidad[".defaultPages"];

//	field labels
$fieldLabelsreportecorporacionespecialidad = array();
$fieldToolTipsreportecorporacionespecialidad = array();
$pageTitlesreportecorporacionespecialidad = array();
$placeHoldersreportecorporacionespecialidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreportecorporacionespecialidad["Spanish"] = array();
	$fieldToolTipsreportecorporacionespecialidad["Spanish"] = array();
	$placeHoldersreportecorporacionespecialidad["Spanish"] = array();
	$pageTitlesreportecorporacionespecialidad["Spanish"] = array();
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Seccional"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Seccional"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Corporacion"] = "Corporacion";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Corporacion"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Corporacion"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Especialidad"] = "Especialidad";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Especialidad"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Especialidad"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Concepto"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Concepto"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Procesos"] = "Procesos";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Procesos"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Procesos"] = "";
	$fieldLabelsreportecorporacionespecialidad["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsreportecorporacionespecialidad["Spanish"]["Saldo"] = "";
	$placeHoldersreportecorporacionespecialidad["Spanish"]["Saldo"] = "";
	if (count($fieldToolTipsreportecorporacionespecialidad["Spanish"]))
		$tdatareportecorporacionespecialidad[".isUseToolTips"] = true;
}


	$tdatareportecorporacionespecialidad[".NCSearch"] = true;



$tdatareportecorporacionespecialidad[".shortTableName"] = "reportecorporacionespecialidad";
$tdatareportecorporacionespecialidad[".nSecOptions"] = 0;

$tdatareportecorporacionespecialidad[".mainTableOwnerID"] = "";
$tdatareportecorporacionespecialidad[".entityType"] = 2;
$tdatareportecorporacionespecialidad[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareportecorporacionespecialidad[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatareportecorporacionespecialidad[".showAddInPopup"] = false;

$tdatareportecorporacionespecialidad[".showEditInPopup"] = false;

$tdatareportecorporacionespecialidad[".showViewInPopup"] = false;

$tdatareportecorporacionespecialidad[".listAjax"] = false;
//	temporary
//$tdatareportecorporacionespecialidad[".listAjax"] = false;

	$tdatareportecorporacionespecialidad[".audit"] = false;

	$tdatareportecorporacionespecialidad[".locking"] = false;


$pages = $tdatareportecorporacionespecialidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportecorporacionespecialidad[".edit"] = true;
	$tdatareportecorporacionespecialidad[".afterEditAction"] = 1;
	$tdatareportecorporacionespecialidad[".closePopupAfterEdit"] = 1;
	$tdatareportecorporacionespecialidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportecorporacionespecialidad[".add"] = true;
$tdatareportecorporacionespecialidad[".afterAddAction"] = 1;
$tdatareportecorporacionespecialidad[".closePopupAfterAdd"] = 1;
$tdatareportecorporacionespecialidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportecorporacionespecialidad[".list"] = true;
}



$tdatareportecorporacionespecialidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportecorporacionespecialidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportecorporacionespecialidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportecorporacionespecialidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportecorporacionespecialidad[".printFriendly"] = true;
}



$tdatareportecorporacionespecialidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportecorporacionespecialidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportecorporacionespecialidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportecorporacionespecialidad[".isUseAjaxSuggest"] = true;



																																													

$tdatareportecorporacionespecialidad[".ajaxCodeSnippetAdded"] = false;

$tdatareportecorporacionespecialidad[".buttonsAdded"] = false;

$tdatareportecorporacionespecialidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportecorporacionespecialidad[".isUseTimeForSearch"] = false;


$tdatareportecorporacionespecialidad[".badgeColor"] = "B22222";


$tdatareportecorporacionespecialidad[".allSearchFields"] = array();
$tdatareportecorporacionespecialidad[".filterFields"] = array();
$tdatareportecorporacionespecialidad[".requiredSearchFields"] = array();

$tdatareportecorporacionespecialidad[".googleLikeFields"] = array();
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "CarteraTipoId";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Seccional";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Corporacion";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Especialidad";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Concepto";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Procesos";
$tdatareportecorporacionespecialidad[".googleLikeFields"][] = "Saldo";



$tdatareportecorporacionespecialidad[".tableType"] = "report";

$tdatareportecorporacionespecialidad[".printerPageOrientation"] = 0;
$tdatareportecorporacionespecialidad[".nPrinterPageScale"] = 100;

$tdatareportecorporacionespecialidad[".nPrinterSplitRecords"] = 40;

$tdatareportecorporacionespecialidad[".geocodingEnabled"] = false;

//report settings

$tdatareportecorporacionespecialidad[".reportPrintGroupsPerPage"] = 3;
$tdatareportecorporacionespecialidad[".reportPrintRecordsPerPage"] = 40;

$tdatareportecorporacionespecialidad[".pageSizeGroups"] = 5;
$tdatareportecorporacionespecialidad[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "ORDER BY ProcesosView1.CarteraTipoId, 
              ProcesosView1.Seccional, 
              CorporacionesView.Corporacion, 
              SUBSTRING(Despachos.Codigo, 6, 4)";
$tdatareportecorporacionespecialidad[".strOrderBy"] = $tstrOrderBy;

$tdatareportecorporacionespecialidad[".orderindexes"] = array();
	$tdatareportecorporacionespecialidad[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "dbo.ProcesosView1.CarteraTipoId");

	$tdatareportecorporacionespecialidad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "dbo.ProcesosView1.Seccional");

	$tdatareportecorporacionespecialidad[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dbo.CorporacionesView.Corporacion");

	$tdatareportecorporacionespecialidad[".orderindexes"][] = array(0, (""), "SUBSTRING(Despachos.Codigo, 6, 4)");



$tdatareportecorporacionespecialidad[".sqlHead"] = "       SELECT ProcesosView1.CarteraTipoId,               ProcesosView1.Seccional,               CorporacionesView.Corporacion,               SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '') Especialidad,               ProcesosView1.Concepto,               COUNT(*) AS Procesos,               SUM(ProcesosView1.Saldo) AS Saldo";
$tdatareportecorporacionespecialidad[".sqlFrom"] = "FROM ProcesosView1            INNER JOIN Despachos ON ProcesosView1.DespachoId = Despachos.DespachoId            LEFT OUTER JOIN Especialidades ON SUBSTRING(Despachos.Codigo, 6, 4) = Especialidades.Codigo            LEFT OUTER JOIN CorporacionesView ON SUBSTRING(Despachos.Codigo, 6, 2) = CorporacionesView.Codigo";
$tdatareportecorporacionespecialidad[".sqlWhereExpr"] = "(ProcesosView1.EstadoId <> 6)            AND (ProcesosView1.Fecha <= '2024-2-21')";
$tdatareportecorporacionespecialidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportecorporacionespecialidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportecorporacionespecialidad[".arrGroupsPerPage"] = $arrGPP;

$tdatareportecorporacionespecialidad[".highlightSearchResults"] = true;

$tableKeysreportecorporacionespecialidad = array();
$tdatareportecorporacionespecialidad[".Keys"] = $tableKeysreportecorporacionespecialidad;


$tdatareportecorporacionespecialidad[".hideMobileList"] = array();




//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.CarteraTipoId";

	
	
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


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatareportecorporacionespecialidad["CarteraTipoId"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "CarteraTipoId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.Seccional";

	
	
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


	$tdatareportecorporacionespecialidad["Seccional"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Seccional";
//	Corporacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Corporacion";
	$fdata["GoodName"] = "Corporacion";
	$fdata["ownerTable"] = "dbo.CorporacionesView";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Corporacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Corporacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CorporacionesView.Corporacion";

	
	
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


	$tdatareportecorporacionespecialidad["Corporacion"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Corporacion";
//	Especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Especialidad";
	$fdata["GoodName"] = "Especialidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Especialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Especialidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '')";

	
	
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


	$tdatareportecorporacionespecialidad["Especialidad"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Especialidad";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesosView1.Concepto";

	
	
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


	$tdatareportecorporacionespecialidad["Concepto"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Concepto";
//	Procesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Procesos";
	$fdata["GoodName"] = "Procesos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Procesos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Procesos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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


	$tdatareportecorporacionespecialidad["Procesos"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Procesos";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteCorporacionEspecialidad","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(ProcesosView1.Saldo)";

	
	
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


	$tdatareportecorporacionespecialidad["Saldo"] = $fdata;
		$tdatareportecorporacionespecialidad[".searchableFields"][] = "Saldo";


$tables_data["dbo.ReporteCorporacionEspecialidad"]=&$tdatareportecorporacionespecialidad;
$field_labels["dbo_ReporteCorporacionEspecialidad"] = &$fieldLabelsreportecorporacionespecialidad;
$fieldToolTips["dbo_ReporteCorporacionEspecialidad"] = &$fieldToolTipsreportecorporacionespecialidad;
$placeHolders["dbo_ReporteCorporacionEspecialidad"] = &$placeHoldersreportecorporacionespecialidad;
$page_titles["dbo_ReporteCorporacionEspecialidad"] = &$pageTitlesreportecorporacionespecialidad;


changeTextControlsToDate( "dbo.ReporteCorporacionEspecialidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ReporteCorporacionEspecialidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ReporteCorporacionEspecialidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportecorporacionespecialidad()
{
$proto0=array();
$proto0["m_strHead"] = "       SELECT";
$proto0["m_strFieldList"] = "ProcesosView1.CarteraTipoId,               ProcesosView1.Seccional,               CorporacionesView.Corporacion,               SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '') Especialidad,               ProcesosView1.Concepto,               COUNT(*) AS Procesos,               SUM(ProcesosView1.Saldo) AS Saldo";
$proto0["m_strFrom"] = "FROM ProcesosView1            INNER JOIN Despachos ON ProcesosView1.DespachoId = Despachos.DespachoId            LEFT OUTER JOIN Especialidades ON SUBSTRING(Despachos.Codigo, 6, 4) = Especialidades.Codigo            LEFT OUTER JOIN CorporacionesView ON SUBSTRING(Despachos.Codigo, 6, 2) = CorporacionesView.Codigo";
$proto0["m_strWhere"] = "(ProcesosView1.EstadoId <> 6)            AND (ProcesosView1.Fecha <= '2024-2-21')";
$proto0["m_strOrderBy"] = "ORDER BY ProcesosView1.CarteraTipoId,                 ProcesosView1.Seccional,                 CorporacionesView.Corporacion,                 SUBSTRING(Despachos.Codigo, 6, 4)";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ProcesosView1.EstadoId <> 6)            AND (ProcesosView1.Fecha <= '2024-2-21')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ProcesosView1.EstadoId <> 6)            AND (ProcesosView1.Fecha <= '2024-2-21')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ProcesosView1.EstadoId <> 6";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<> 6";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "ProcesosView1.Fecha <= '2024-2-21'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "<= '2024-2-21'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto10["m_sql"] = "ProcesosView1.CarteraTipoId";
$proto10["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto12["m_sql"] = "ProcesosView1.Seccional";
$proto12["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.CorporacionesView",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto14["m_sql"] = "CorporacionesView.Corporacion";
$proto14["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '')"
));

$proto16["m_sql"] = "SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '')";
$proto16["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Especialidad";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto18["m_sql"] = "ProcesosView1.Concepto";
$proto18["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(*)";
$proto20["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Procesos";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_SUM";
$proto24["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "SUM(ProcesosView1.Saldo)";
$proto23["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.ProcesosView1";
$proto27["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ProcesoId";
$proto27["m_columns"][] = "Fecha";
$proto27["m_columns"][] = "Numero";
$proto27["m_columns"][] = "Obligacion";
$proto27["m_columns"][] = "Costas";
$proto27["m_columns"][] = "Intereses";
$proto27["m_columns"][] = "Folios";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Seccional";
$proto27["m_columns"][] = "Ciudad";
$proto27["m_columns"][] = "Abogado";
$proto27["m_columns"][] = "Masculino";
$proto27["m_columns"][] = "Despacho";
$proto27["m_columns"][] = "Concepto";
$proto27["m_columns"][] = "Motivo";
$proto27["m_columns"][] = "Estado";
$proto27["m_columns"][] = "Calificacion";
$proto27["m_columns"][] = "PiePagina";
$proto27["m_columns"][] = "CiudadDepartamento";
$proto27["m_columns"][] = "Sigobius";
$proto27["m_columns"][] = "Cuotas";
$proto27["m_columns"][] = "Abono";
$proto27["m_columns"][] = "Inicio";
$proto27["m_columns"][] = "VlrCuota";
$proto27["m_columns"][] = "VlrIntereses";
$proto27["m_columns"][] = "Garantia";
$proto27["m_columns"][] = "Recaudo";
$proto27["m_columns"][] = "Sancionado";
$proto27["m_columns"][] = "SancionadoDocumento";
$proto27["m_columns"][] = "SancionadoTipoDocumento";
$proto27["m_columns"][] = "SancionadoCiudad";
$proto27["m_columns"][] = "DespachoCiudad";
$proto27["m_columns"][] = "Providencia";
$proto27["m_columns"][] = "Ejecutoria";
$proto27["m_columns"][] = "Radicado";
$proto27["m_columns"][] = "Terminacion";
$proto27["m_columns"][] = "Liquidacion";
$proto27["m_columns"][] = "Dias";
$proto27["m_columns"][] = "Tipo";
$proto27["m_columns"][] = "Cantidad";
$proto27["m_columns"][] = "SancionadoMasculino";
$proto27["m_columns"][] = "SeccionalCorreo";
$proto27["m_columns"][] = "SeccionalDireccion";
$proto27["m_columns"][] = "SeccionalTelefonos";
$proto27["m_columns"][] = "Fallecimiento";
$proto27["m_columns"][] = "Notificacion";
$proto27["m_columns"][] = "SeccionalNit";
$proto27["m_columns"][] = "SeccionalId";
$proto27["m_columns"][] = "AbogadoId";
$proto27["m_columns"][] = "DespachoId";
$proto27["m_columns"][] = "SancionadoId";
$proto27["m_columns"][] = "ConceptoId";
$proto27["m_columns"][] = "NaturalezaId";
$proto27["m_columns"][] = "EstadoId";
$proto27["m_columns"][] = "EtapaId";
$proto27["m_columns"][] = "CalificacionId";
$proto27["m_columns"][] = "MotivoId";
$proto27["m_columns"][] = "ProcesoObservaciones";
$proto27["m_columns"][] = "Remisorio";
$proto27["m_columns"][] = "Acuerdo";
$proto27["m_columns"][] = "Incumplimiento";
$proto27["m_columns"][] = "Suspension";
$proto27["m_columns"][] = "Traslado";
$proto27["m_columns"][] = "Error";
$proto27["m_columns"][] = "Actuacion";
$proto27["m_columns"][] = "TipoDocumentoId";
$proto27["m_columns"][] = "Juridica";
$proto27["m_columns"][] = "SancionadoEmail";
$proto27["m_columns"][] = "SancionadoCelular";
$proto27["m_columns"][] = "CarteraTipoId";
$proto27["m_columns"][] = "ConceptoAbogado";
$proto27["m_columns"][] = "LiquidaIntereses";
$proto27["m_columns"][] = "Saldo";
$proto27["m_columns"][] = "Prescripcion";
$proto27["m_columns"][] = "FechaPrescripcion";
$proto27["m_columns"][] = "ObligacionInicial";
$proto27["m_columns"][] = "CostasInicial";
$proto27["m_columns"][] = "InteresesInicial";
$proto27["m_columns"][] = "Minjusticia_Def";
$proto27["m_columns"][] = "MinJusticia";
$proto27["m_columns"][] = "ActuacionId";
$proto27["m_columns"][] = "NotificacionValidada";
$proto27["m_columns"][] = "Validado";
$proto27["m_columns"][] = "Documento";
$proto27["m_columns"][] = "Seleccionado";
$proto27["m_columns"][] = "CompetenciaId";
$proto27["m_columns"][] = "SeleccionadoPor";
$proto27["m_columns"][] = "RadicadoNumero";
$proto27["m_columns"][] = "MinjusticiaId";
$proto27["m_columns"][] = "Contador";
$proto27["m_columns"][] = "ContadorCargo";
$proto27["m_columns"][] = "Director";
$proto27["m_columns"][] = "DirectorCargo";
$proto27["m_columns"][] = "Etapa";
$proto27["m_columns"][] = "Persuasivo";
$proto27["m_columns"][] = "Plazo";
$proto27["m_columns"][] = "Mayor";
$proto27["m_columns"][] = "Revocatoria";
$proto27["m_columns"][] = "RecaudoTerminado";
$proto27["m_columns"][] = "Naturaleza";
$proto27["m_columns"][] = "TasaTipo";
$proto27["m_columns"][] = "CarteraTipo";
$proto27["m_columns"][] = "Prescrita";
$proto27["m_columns"][] = "TrasladoCartera";
$proto27["m_columns"][] = "CarteraTipoIdOrigen";
$proto27["m_columns"][] = "TrasladoConcepto";
$proto27["m_columns"][] = "ConceptoIdOrigen";
$proto27["m_columns"][] = "CarteraTipoOrigen";
$proto27["m_columns"][] = "ConceptoOrigen";
$proto27["m_columns"][] = "ChequeoId";
$proto27["m_columns"][] = "VlrCostas";
$proto27["m_columns"][] = "VlrInteresesPlazo";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "ProcesosView1";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
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
$proto31["m_strName"] = "dbo.Despachos";
$proto31["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "DespachoId";
$proto31["m_columns"][] = "Codigo";
$proto31["m_columns"][] = "Despacho";
$proto31["m_columns"][] = "CiudadId";
$proto31["m_columns"][] = "Especialidad";
$proto31["m_columns"][] = "Subespecialidad";
$proto31["m_columns"][] = "Activo";
$proto31["m_columns"][] = "Juez";
$proto31["m_columns"][] = "Correo";
$proto31["m_columns"][] = "Telefonos";
$proto31["m_columns"][] = "Direccion";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN Despachos ON ProcesosView1.DespachoId = Despachos.DespachoId";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto32=array();
$proto32["m_sql"] = "dbo.Despachos.DespachoId = dbo.ProcesosView1.DespachoId";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= dbo.ProcesosView1.DespachoId";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Especialidades";
$proto35["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "EspecialidadId";
$proto35["m_columns"][] = "Codigo";
$proto35["m_columns"][] = "Especialidad";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN Especialidades ON SUBSTRING(Despachos.Codigo, 6, 4) = Especialidades.Codigo";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto36=array();
$proto36["m_sql"] = "SUBSTRING(Despachos.Codigo, 6, 4) = Especialidades.Codigo";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Despachos.Codigo"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "6"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "4"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SUBSTRING";
$obj = new SQLFunctionCall($proto37);

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= Especialidades.Codigo";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "dbo.CorporacionesView";
$proto42["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "Codigo";
$proto42["m_columns"][] = "Corporacion";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN CorporacionesView ON SUBSTRING(Despachos.Codigo, 6, 2) = CorporacionesView.Codigo";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "dbo.ReporteCorporacionEspecialidad";
$proto43=array();
$proto43["m_sql"] = "SUBSTRING(Despachos.Codigo, 6, 2) = CorporacionesView.Codigo";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Despachos.Codigo"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "6"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "2"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "SUBSTRING";
$obj = new SQLFunctionCall($proto44);

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= CorporacionesView.Codigo";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.CorporacionesView",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Especialidad",
	"m_strTable" => "dbo.Especialidades",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$proto59=array();
$proto59["m_functiontype"] = "SQLF_CUSTOM";
$proto59["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Despachos.Codigo"
));

$proto59["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "6"
));

$proto59["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "4"
));

$proto59["m_arguments"][]=$obj;
$proto59["m_strFunctionName"] = "SUBSTRING";
$obj = new SQLFunctionCall($proto59);

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 1;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto65["m_column"]=$obj;
$proto65["m_bAsc"] = 1;
$proto65["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto65);

$proto0["m_orderby"][]=$obj;					
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.CorporacionesView",
	"m_srcTableName" => "dbo.ReporteCorporacionEspecialidad"
));

$proto67["m_column"]=$obj;
$proto67["m_bAsc"] = 1;
$proto67["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto67);

$proto0["m_orderby"][]=$obj;					
												$proto69=array();
						$proto70=array();
$proto70["m_functiontype"] = "SQLF_CUSTOM";
$proto70["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Despachos.Codigo"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "6"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "4"
));

$proto70["m_arguments"][]=$obj;
$proto70["m_strFunctionName"] = "SUBSTRING";
$obj = new SQLFunctionCall($proto70);

$proto69["m_column"]=$obj;
$proto69["m_bAsc"] = 1;
$proto69["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto69);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ReporteCorporacionEspecialidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportecorporacionespecialidad = createSqlQuery_reportecorporacionespecialidad();


	
		;

							

$tdatareportecorporacionespecialidad[".sqlquery"] = $queryData_reportecorporacionespecialidad;



$tdatareportecorporacionespecialidad[".hasEvents"] = false;

?>