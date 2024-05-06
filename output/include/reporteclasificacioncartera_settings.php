<?php
$tdatareporteclasificacioncartera = array();
$tdatareporteclasificacioncartera[".searchableFields"] = array();
$tdatareporteclasificacioncartera[".ShortName"] = "reporteclasificacioncartera";
$tdatareporteclasificacioncartera[".OwnerID"] = "";
$tdatareporteclasificacioncartera[".OriginalTable"] = "dbo.Procesos";


$tdatareporteclasificacioncartera[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatareporteclasificacioncartera[".originalPagesByType"] = $tdatareporteclasificacioncartera[".pagesByType"];
$tdatareporteclasificacioncartera[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatareporteclasificacioncartera[".originalPages"] = $tdatareporteclasificacioncartera[".pages"];
$tdatareporteclasificacioncartera[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatareporteclasificacioncartera[".originalDefaultPages"] = $tdatareporteclasificacioncartera[".defaultPages"];

//	field labels
$fieldLabelsreporteclasificacioncartera = array();
$fieldToolTipsreporteclasificacioncartera = array();
$pageTitlesreporteclasificacioncartera = array();
$placeHoldersreporteclasificacioncartera = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreporteclasificacioncartera["Spanish"] = array();
	$fieldToolTipsreporteclasificacioncartera["Spanish"] = array();
	$placeHoldersreporteclasificacioncartera["Spanish"] = array();
	$pageTitlesreporteclasificacioncartera["Spanish"] = array();
	$fieldLabelsreporteclasificacioncartera["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["ProcesoId"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["ProcesoId"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["SeccionalId"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["SeccionalId"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Fecha"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Fecha"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Numero"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Numero"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["ConceptoId"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["ConceptoId"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Obligacion"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Obligacion"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Costas"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Costas"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Intereses"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Intereses"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Recaudo"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Recaudo"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["NaturalezaId"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Sancionado"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Sancionado"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Identificacion"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Identificacion"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Saldo"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Saldo"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Uvt"] = "Uvt";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Uvt"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Uvt"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Negativo"] = "Negativo";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Negativo"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Negativo"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Positivo"] = "Positivo";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Positivo"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Positivo"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Antiguedad"] = "Antiguedad";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Antiguedad"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Antiguedad"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Clasificacion"] = "Clasificacion";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Clasificacion"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Clasificacion"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Nivel"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Nivel"] = "";
	$fieldLabelsreporteclasificacioncartera["Spanish"]["Busquedas"] = "Busquedas";
	$fieldToolTipsreporteclasificacioncartera["Spanish"]["Busquedas"] = "";
	$placeHoldersreporteclasificacioncartera["Spanish"]["Busquedas"] = "";
	if (count($fieldToolTipsreporteclasificacioncartera["Spanish"]))
		$tdatareporteclasificacioncartera[".isUseToolTips"] = true;
}


	$tdatareporteclasificacioncartera[".NCSearch"] = true;



$tdatareporteclasificacioncartera[".shortTableName"] = "reporteclasificacioncartera";
$tdatareporteclasificacioncartera[".nSecOptions"] = 0;

$tdatareporteclasificacioncartera[".mainTableOwnerID"] = "";
$tdatareporteclasificacioncartera[".entityType"] = 2;
$tdatareporteclasificacioncartera[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareporteclasificacioncartera[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatareporteclasificacioncartera[".showAddInPopup"] = false;

$tdatareporteclasificacioncartera[".showEditInPopup"] = false;

$tdatareporteclasificacioncartera[".showViewInPopup"] = false;

$tdatareporteclasificacioncartera[".listAjax"] = false;
//	temporary
//$tdatareporteclasificacioncartera[".listAjax"] = false;

	$tdatareporteclasificacioncartera[".audit"] = false;

	$tdatareporteclasificacioncartera[".locking"] = false;


$pages = $tdatareporteclasificacioncartera[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareporteclasificacioncartera[".edit"] = true;
	$tdatareporteclasificacioncartera[".afterEditAction"] = 1;
	$tdatareporteclasificacioncartera[".closePopupAfterEdit"] = 1;
	$tdatareporteclasificacioncartera[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareporteclasificacioncartera[".add"] = true;
$tdatareporteclasificacioncartera[".afterAddAction"] = 1;
$tdatareporteclasificacioncartera[".closePopupAfterAdd"] = 1;
$tdatareporteclasificacioncartera[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareporteclasificacioncartera[".list"] = true;
}



$tdatareporteclasificacioncartera[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareporteclasificacioncartera[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareporteclasificacioncartera[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareporteclasificacioncartera[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareporteclasificacioncartera[".printFriendly"] = true;
}



$tdatareporteclasificacioncartera[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareporteclasificacioncartera[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareporteclasificacioncartera[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareporteclasificacioncartera[".isUseAjaxSuggest"] = true;



																																																																					

$tdatareporteclasificacioncartera[".ajaxCodeSnippetAdded"] = false;

$tdatareporteclasificacioncartera[".buttonsAdded"] = false;

$tdatareporteclasificacioncartera[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareporteclasificacioncartera[".isUseTimeForSearch"] = false;


$tdatareporteclasificacioncartera[".badgeColor"] = "CD5C5C";


$tdatareporteclasificacioncartera[".allSearchFields"] = array();
$tdatareporteclasificacioncartera[".filterFields"] = array();
$tdatareporteclasificacioncartera[".requiredSearchFields"] = array();

$tdatareporteclasificacioncartera[".googleLikeFields"] = array();
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "ProcesoId";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "CarteraTipoId";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "SeccionalId";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Fecha";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "ConceptoId";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "NaturalezaId";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Numero";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Sancionado";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Identificacion";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Obligacion";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Intereses";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Costas";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Recaudo";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Saldo";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Uvt";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Negativo";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Positivo";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Antiguedad";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Clasificacion";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Nivel";
$tdatareporteclasificacioncartera[".googleLikeFields"][] = "Busquedas";



$tdatareporteclasificacioncartera[".tableType"] = "report";

$tdatareporteclasificacioncartera[".printerPageOrientation"] = 0;
$tdatareporteclasificacioncartera[".nPrinterPageScale"] = 100;

$tdatareporteclasificacioncartera[".nPrinterSplitRecords"] = 40;

$tdatareporteclasificacioncartera[".geocodingEnabled"] = false;

//report settings

$tdatareporteclasificacioncartera[".reportPrintGroupsPerPage"] = 3;
$tdatareporteclasificacioncartera[".reportPrintRecordsPerPage"] = 40;

$tdatareporteclasificacioncartera[".pageSizeGroups"] = 5;
$tdatareporteclasificacioncartera[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatareporteclasificacioncartera[".strOrderBy"] = $tstrOrderBy;

$tdatareporteclasificacioncartera[".orderindexes"] = array();


$tdatareporteclasificacioncartera[".sqlHead"] = "  SELECT dbo.Procesos.ProcesoId,  dbo.Procesos.CarteraTipoId,  dbo.Procesos.SeccionalId,  ISNULL(Procesos.Plazo, Procesos.Ejecutoria) AS Fecha,  dbo.Procesos.ConceptoId,  dbo.Procesos.NaturalezaId,  dbo.Procesos.Numero,  CONCAT(Sancionados.Sancionado, ' - ', Sancionados.Documento) AS Sancionado,  dbo.Sancionados.Documento AS Identificacion,  dbo.Procesos.ObligacionInicial AS Obligacion,  dbo.Procesos.InteresesInicial AS Intereses,  dbo.Procesos.CostasInicial AS Costas,  dbo.Procesos.Recaudo,  Procesos.Obligacion +Procesos.Costas + Procesos.Intereses AS Saldo,  CONVERT(INT, (Procesos.Obligacion +Procesos.Costas + Procesos.Intereses)/MAX(Uvt)) AS Uvt,  CONVERT(BIT, 1) AS Negativo,  CONVERT(BIT, 1) AS Positivo,  60 - CONVERT(INT, Procesos.Dias / 30) AS Antiguedad,  dbo.Get_Clasificacion(Procesos.ProcesoId, GETDATE()) AS Clasificacion,  dbo.Get_Nivel(Procesos.ProcesoId) AS Nivel,  dbo.Get_Busquedas(Procesos.ProcesoId, GETDATE()) AS Busquedas";
$tdatareporteclasificacioncartera[".sqlFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId  INNER JOIN dbo.Correspondencias ON dbo.Procesos.ProcesoId = dbo.Correspondencias.ProcesoId  , dbo.Uvts";
$tdatareporteclasificacioncartera[".sqlWhereExpr"] = "";
$tdatareporteclasificacioncartera[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareporteclasificacioncartera[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareporteclasificacioncartera[".arrGroupsPerPage"] = $arrGPP;

$tdatareporteclasificacioncartera[".highlightSearchResults"] = true;

$tableKeysreporteclasificacioncartera = array();
$tableKeysreporteclasificacioncartera[] = "ProcesoId";
$tdatareporteclasificacioncartera[".Keys"] = $tableKeysreporteclasificacioncartera;


$tdatareporteclasificacioncartera[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.ProcesoId";

	
	
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


	$tdatareporteclasificacioncartera["ProcesoId"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "ProcesoId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.CarteraTipoId";

	
	
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


	$tdatareporteclasificacioncartera["CarteraTipoId"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "CarteraTipoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.SeccionalId";

	
	
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
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
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


	$tdatareporteclasificacioncartera["SeccionalId"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "SeccionalId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ISNULL(Procesos.Plazo, Procesos.Ejecutoria)";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatareporteclasificacioncartera["Fecha"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Fecha";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.ConceptoId";

	
	
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


	$tdatareporteclasificacioncartera["ConceptoId"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "ConceptoId";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","NaturalezaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.NaturalezaId";

	
	
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
	$edata["LookupTable"] = "dbo.Naturalezas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Naturaleza";

	

	
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


	$tdatareporteclasificacioncartera["NaturalezaId"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "NaturalezaId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Numero");
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatareporteclasificacioncartera["Numero"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(Sancionados.Sancionado, ' - ', Sancionados.Documento)";

	
	
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


	$tdatareporteclasificacioncartera["Sancionado"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Sancionado";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Sancionados.Documento";

	
	
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


	$tdatareporteclasificacioncartera["Identificacion"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Identificacion";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObligacionInicial";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.ObligacionInicial";

	
	
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


	$tdatareporteclasificacioncartera["Obligacion"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesInicial";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.InteresesInicial";

	
	
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


	$tdatareporteclasificacioncartera["Intereses"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostasInicial";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.CostasInicial";

	
	
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


	$tdatareporteclasificacioncartera["Costas"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Costas";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

		$fdata["sourceSingle"] = "Recaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Recaudo";

	
	
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


	$tdatareporteclasificacioncartera["Recaudo"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Recaudo";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Obligacion +Procesos.Costas + Procesos.Intereses";

	
	
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


	$tdatareporteclasificacioncartera["Saldo"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Saldo";
//	Uvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Uvt";
	$fdata["GoodName"] = "Uvt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Uvt");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Uvt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONVERT(INT, (Procesos.Obligacion +Procesos.Costas + Procesos.Intereses)/MAX(Uvt))";

	
	
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


	$tdatareporteclasificacioncartera["Uvt"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Uvt";
//	Negativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Negativo";
	$fdata["GoodName"] = "Negativo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Negativo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Negativo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONVERT(BIT, 1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatareporteclasificacioncartera["Negativo"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Negativo";
//	Positivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Positivo";
	$fdata["GoodName"] = "Positivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Positivo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Positivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONVERT(BIT, 1)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatareporteclasificacioncartera["Positivo"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Positivo";
//	Antiguedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Antiguedad";
	$fdata["GoodName"] = "Antiguedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Antiguedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Antiguedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "60 - CONVERT(INT, Procesos.Dias / 30)";

	
	
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


	$tdatareporteclasificacioncartera["Antiguedad"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Antiguedad";
//	Clasificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Clasificacion";
	$fdata["GoodName"] = "Clasificacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Clasificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clasificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Get_Clasificacion(Procesos.ProcesoId, GETDATE())";

	
	
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


	$tdatareporteclasificacioncartera["Clasificacion"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Clasificacion";
//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Get_Nivel(Procesos.ProcesoId)";

	
	
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


	$tdatareporteclasificacioncartera["Nivel"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Nivel";
//	Busquedas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Busquedas";
	$fdata["GoodName"] = "Busquedas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ReporteClasificacionCartera","Busquedas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Busquedas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Get_Busquedas(Procesos.ProcesoId, GETDATE())";

	
	
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


	$tdatareporteclasificacioncartera["Busquedas"] = $fdata;
		$tdatareporteclasificacioncartera[".searchableFields"][] = "Busquedas";


$tables_data["dbo.ReporteClasificacionCartera"]=&$tdatareporteclasificacioncartera;
$field_labels["dbo_ReporteClasificacionCartera"] = &$fieldLabelsreporteclasificacioncartera;
$fieldToolTips["dbo_ReporteClasificacionCartera"] = &$fieldToolTipsreporteclasificacioncartera;
$placeHolders["dbo_ReporteClasificacionCartera"] = &$placeHoldersreporteclasificacioncartera;
$page_titles["dbo_ReporteClasificacionCartera"] = &$pageTitlesreporteclasificacioncartera;


changeTextControlsToDate( "dbo.ReporteClasificacionCartera" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ReporteClasificacionCartera"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ReporteClasificacionCartera"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reporteclasificacioncartera()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "dbo.Procesos.ProcesoId,  dbo.Procesos.CarteraTipoId,  dbo.Procesos.SeccionalId,  ISNULL(Procesos.Plazo, Procesos.Ejecutoria) AS Fecha,  dbo.Procesos.ConceptoId,  dbo.Procesos.NaturalezaId,  dbo.Procesos.Numero,  CONCAT(Sancionados.Sancionado, ' - ', Sancionados.Documento) AS Sancionado,  dbo.Sancionados.Documento AS Identificacion,  dbo.Procesos.ObligacionInicial AS Obligacion,  dbo.Procesos.InteresesInicial AS Intereses,  dbo.Procesos.CostasInicial AS Costas,  dbo.Procesos.Recaudo,  Procesos.Obligacion +Procesos.Costas + Procesos.Intereses AS Saldo,  CONVERT(INT, (Procesos.Obligacion +Procesos.Costas + Procesos.Intereses)/MAX(Uvt)) AS Uvt,  CONVERT(BIT, 1) AS Negativo,  CONVERT(BIT, 1) AS Positivo,  60 - CONVERT(INT, Procesos.Dias / 30) AS Antiguedad,  dbo.Get_Clasificacion(Procesos.ProcesoId, GETDATE()) AS Clasificacion,  dbo.Get_Nivel(Procesos.ProcesoId) AS Nivel,  dbo.Get_Busquedas(Procesos.ProcesoId, GETDATE()) AS Busquedas";
$proto0["m_strFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId  INNER JOIN dbo.Correspondencias ON dbo.Procesos.ProcesoId = dbo.Correspondencias.ProcesoId  , dbo.Uvts";
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
$proto4["m_sql"] = "Procesos.EstadoId <>6";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<>6";
$proto4["m_havingmode"] = true;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto6["m_sql"] = "dbo.Procesos.ProcesoId";
$proto6["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto8["m_sql"] = "dbo.Procesos.CarteraTipoId";
$proto8["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto10["m_sql"] = "dbo.Procesos.SeccionalId";
$proto10["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Plazo"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Ejecutoria"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "ISNULL";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "ISNULL(Procesos.Plazo, Procesos.Ejecutoria)";
$proto12["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Fecha";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto16["m_sql"] = "dbo.Procesos.ConceptoId";
$proto16["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto18["m_sql"] = "dbo.Procesos.NaturalezaId";
$proto18["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto20["m_sql"] = "dbo.Procesos.Numero";
$proto20["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Sancionados.Sancionado"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Sancionados.Documento"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "CONCAT(Sancionados.Sancionado, ' - ', Sancionados.Documento)";
$proto22["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Sancionado";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto27["m_sql"] = "dbo.Sancionados.Documento";
$proto27["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Identificacion";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ObligacionInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto29["m_sql"] = "dbo.Procesos.ObligacionInicial";
$proto29["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Obligacion";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto31["m_sql"] = "dbo.Procesos.InteresesInicial";
$proto31["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Intereses";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CostasInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto33["m_sql"] = "dbo.Procesos.CostasInicial";
$proto33["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Costas";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto35["m_sql"] = "dbo.Procesos.Recaudo";
$proto35["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Obligacion +Procesos.Costas + Procesos.Intereses"
));

$proto37["m_sql"] = "Procesos.Obligacion +Procesos.Costas + Procesos.Intereses";
$proto37["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "INT"
));

$proto40["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion +Procesos.Costas + Procesos.Intereses)/MAX(Uvt)"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "CONVERT";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "CONVERT(INT, (Procesos.Obligacion +Procesos.Costas + Procesos.Intereses)/MAX(Uvt))";
$proto39["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Uvt";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "BIT"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "CONVERT";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "CONVERT(BIT, 1)";
$proto43["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Negativo";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "BIT"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "CONVERT";
$obj = new SQLFunctionCall($proto48);

$proto47["m_sql"] = "CONVERT(BIT, 1)";
$proto47["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "Positivo";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "60 - CONVERT(INT, Procesos.Dias / 30)"
));

$proto51["m_sql"] = "60 - CONVERT(INT, Procesos.Dias / 30)";
$proto51["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "Antiguedad";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$proto54=array();
$proto54["m_functiontype"] = "SQLF_CUSTOM";
$proto54["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.ProcesoId"
));

$proto54["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto54["m_arguments"][]=$obj;
$proto54["m_strFunctionName"] = "dbo.Get_Clasificacion";
$obj = new SQLFunctionCall($proto54);

$proto53["m_sql"] = "dbo.Get_Clasificacion(Procesos.ProcesoId, GETDATE())";
$proto53["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "Clasificacion";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.ProcesoId"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "dbo.Get_Nivel";
$obj = new SQLFunctionCall($proto58);

$proto57["m_sql"] = "dbo.Get_Nivel(Procesos.ProcesoId)";
$proto57["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "Nivel";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$proto61=array();
$proto61["m_functiontype"] = "SQLF_CUSTOM";
$proto61["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.ProcesoId"
));

$proto61["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto61["m_arguments"][]=$obj;
$proto61["m_strFunctionName"] = "dbo.Get_Busquedas";
$obj = new SQLFunctionCall($proto61);

$proto60["m_sql"] = "dbo.Get_Busquedas(Procesos.ProcesoId, GETDATE())";
$proto60["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "Busquedas";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "dbo.Procesos";
$proto65["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "ProcesoId";
$proto65["m_columns"][] = "SeccionalId";
$proto65["m_columns"][] = "AbogadoId";
$proto65["m_columns"][] = "Fecha";
$proto65["m_columns"][] = "Numero";
$proto65["m_columns"][] = "DespachoId";
$proto65["m_columns"][] = "SancionadoId";
$proto65["m_columns"][] = "Providencia";
$proto65["m_columns"][] = "Ejecutoria";
$proto65["m_columns"][] = "ConceptoId";
$proto65["m_columns"][] = "EstadoId";
$proto65["m_columns"][] = "EtapaId";
$proto65["m_columns"][] = "Folios";
$proto65["m_columns"][] = "Tipo";
$proto65["m_columns"][] = "Cantidad";
$proto65["m_columns"][] = "Obligacion";
$proto65["m_columns"][] = "Costas";
$proto65["m_columns"][] = "Liquidacion";
$proto65["m_columns"][] = "Dias";
$proto65["m_columns"][] = "Intereses";
$proto65["m_columns"][] = "Recaudo";
$proto65["m_columns"][] = "CalificacionId";
$proto65["m_columns"][] = "Terminacion";
$proto65["m_columns"][] = "MotivoId";
$proto65["m_columns"][] = "Observaciones";
$proto65["m_columns"][] = "Cuotas";
$proto65["m_columns"][] = "Abono";
$proto65["m_columns"][] = "Inicio";
$proto65["m_columns"][] = "VlrCuota";
$proto65["m_columns"][] = "VlrIntereses";
$proto65["m_columns"][] = "Garantia";
$proto65["m_columns"][] = "Radicado";
$proto65["m_columns"][] = "Remisorio";
$proto65["m_columns"][] = "Acuerdo";
$proto65["m_columns"][] = "Incumplimiento";
$proto65["m_columns"][] = "Notificacion";
$proto65["m_columns"][] = "Suspension";
$proto65["m_columns"][] = "Traslado";
$proto65["m_columns"][] = "Error";
$proto65["m_columns"][] = "CarteraTipoId";
$proto65["m_columns"][] = "ConceptoAbogado";
$proto65["m_columns"][] = "Origen";
$proto65["m_columns"][] = "Carpeta";
$proto65["m_columns"][] = "ImportacionId";
$proto65["m_columns"][] = "ActuacionId";
$proto65["m_columns"][] = "ObligacionInicial";
$proto65["m_columns"][] = "CostasInicial";
$proto65["m_columns"][] = "InteresesInicial";
$proto65["m_columns"][] = "MinJusticia";
$proto65["m_columns"][] = "Revocatoria";
$proto65["m_columns"][] = "Mayor";
$proto65["m_columns"][] = "NotificacionValidada";
$proto65["m_columns"][] = "Validado";
$proto65["m_columns"][] = "Seleccionado";
$proto65["m_columns"][] = "CompetenciaId";
$proto65["m_columns"][] = "MinjusticiaId";
$proto65["m_columns"][] = "SeleccionadoPor";
$proto65["m_columns"][] = "Subsanar";
$proto65["m_columns"][] = "NumeroMinjusticia";
$proto65["m_columns"][] = "ProcesoIdOrigen";
$proto65["m_columns"][] = "SeleccionadoFecha";
$proto65["m_columns"][] = "InteresesIniciales";
$proto65["m_columns"][] = "InteresesCalculados";
$proto65["m_columns"][] = "ProcesoIdDestino";
$proto65["m_columns"][] = "RecaudoMinjusticia";
$proto65["m_columns"][] = "RecaudoTerminado";
$proto65["m_columns"][] = "Persuasivo";
$proto65["m_columns"][] = "ObligacionCreacion";
$proto65["m_columns"][] = "InteresesCreacion";
$proto65["m_columns"][] = "CostasCreacion";
$proto65["m_columns"][] = "Plazo";
$proto65["m_columns"][] = "NaturalezaId";
$proto65["m_columns"][] = "TrasladoCartera";
$proto65["m_columns"][] = "CarteraTipoIdOrigen";
$proto65["m_columns"][] = "TrasladoConcepto";
$proto65["m_columns"][] = "ConceptoIdOrigen";
$proto65["m_columns"][] = "AutorizadoPlazo";
$proto65["m_columns"][] = "AutorizadoFecha";
$proto65["m_columns"][] = "AutorizadoPor";
$proto65["m_columns"][] = "Reliquidacion";
$proto65["m_columns"][] = "ChequeoId";
$proto65["m_columns"][] = "VlrCostas";
$proto65["m_columns"][] = "VlrInteresesPlazo";
$proto65["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "dbo.Procesos";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_INNERJOIN";
			$proto69=array();
$proto69["m_strName"] = "dbo.Sancionados";
$proto69["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "SancionadoId";
$proto69["m_columns"][] = "Sancionado";
$proto69["m_columns"][] = "TipoDocumentoId";
$proto69["m_columns"][] = "Documento";
$proto69["m_columns"][] = "Email";
$proto69["m_columns"][] = "Celular";
$proto69["m_columns"][] = "Masculino";
$proto69["m_columns"][] = "Observaciones";
$proto69["m_columns"][] = "Fallecimiento";
$proto69["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto70=array();
$proto70["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_INNERJOIN";
			$proto73=array();
$proto73["m_strName"] = "dbo.Correspondencias";
$proto73["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "CorrespondenciaId";
$proto73["m_columns"][] = "ProcesoId";
$proto73["m_columns"][] = "OficioId";
$proto73["m_columns"][] = "Fecha";
$proto73["m_columns"][] = "Sigobius";
$proto73["m_columns"][] = "Observaciones";
$proto73["m_columns"][] = "Resolucion";
$proto73["m_columns"][] = "Codigo";
$proto73["m_columns"][] = "Radicado";
$proto73["m_columns"][] = "UserId";
$proto73["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN dbo.Correspondencias ON dbo.Procesos.ProcesoId = dbo.Correspondencias.ProcesoId";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto74=array();
$proto74["m_sql"] = "dbo.Correspondencias.ProcesoId = dbo.Procesos.ProcesoId";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= dbo.Procesos.ProcesoId";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_CROSSJOIN";
			$proto77=array();
$proto77["m_strName"] = "dbo.Uvts";
$proto77["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "UvtId";
$proto77["m_columns"][] = "Ano";
$proto77["m_columns"][] = "Uvt";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = ", dbo.Uvts";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "dbo.ReporteClasificacionCartera";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "ObligacionInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "InteresesInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "CostasInicial",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto118["m_column"]=$obj;
$obj = new SQLGroupByItem($proto118);

$proto0["m_groupby"][]=$obj;
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ReporteClasificacionCartera"
));

$proto120["m_column"]=$obj;
$obj = new SQLGroupByItem($proto120);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ReporteClasificacionCartera";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reporteclasificacioncartera = createSqlQuery_reporteclasificacioncartera();


	
		;

																					

$tdatareporteclasificacioncartera[".sqlquery"] = $queryData_reporteclasificacioncartera;



$tdatareporteclasificacioncartera[".hasEvents"] = false;

?>