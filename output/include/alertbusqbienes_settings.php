<?php
$tdataalertbusqbienes = array();
$tdataalertbusqbienes[".searchableFields"] = array();
$tdataalertbusqbienes[".ShortName"] = "alertbusqbienes";
$tdataalertbusqbienes[".OwnerID"] = "";
$tdataalertbusqbienes[".OriginalTable"] = "dbo.Procesos";


$tdataalertbusqbienes[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertbusqbienes[".originalPagesByType"] = $tdataalertbusqbienes[".pagesByType"];
$tdataalertbusqbienes[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertbusqbienes[".originalPages"] = $tdataalertbusqbienes[".pages"];
$tdataalertbusqbienes[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertbusqbienes[".originalDefaultPages"] = $tdataalertbusqbienes[".defaultPages"];

//	field labels
$fieldLabelsalertbusqbienes = array();
$fieldToolTipsalertbusqbienes = array();
$pageTitlesalertbusqbienes = array();
$placeHoldersalertbusqbienes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertbusqbienes["Spanish"] = array();
	$fieldToolTipsalertbusqbienes["Spanish"] = array();
	$placeHoldersalertbusqbienes["Spanish"] = array();
	$pageTitlesalertbusqbienes["Spanish"] = array();
	$fieldLabelsalertbusqbienes["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertbusqbienes["Spanish"]["Fecha"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Fecha"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertbusqbienes["Spanish"]["Numero"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Numero"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertbusqbienes["Spanish"]["Providencia"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Providencia"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertbusqbienes["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertbusqbienes["Spanish"]["Notificacion"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertbusqbienes["Spanish"]["Sancionado"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertbusqbienes["Spanish"]["Saldo"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["Saldo"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["DiasBusquedas"] = "Dias Busquedas";
	$fieldToolTipsalertbusqbienes["Spanish"]["DiasBusquedas"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["DiasBusquedas"] = "";
	$fieldLabelsalertbusqbienes["Spanish"]["FechaEmitirBusquedas"] = "Fecha Emitir Busquedas";
	$fieldToolTipsalertbusqbienes["Spanish"]["FechaEmitirBusquedas"] = "";
	$placeHoldersalertbusqbienes["Spanish"]["FechaEmitirBusquedas"] = "";
	if (count($fieldToolTipsalertbusqbienes["Spanish"]))
		$tdataalertbusqbienes[".isUseToolTips"] = true;
}


	$tdataalertbusqbienes[".NCSearch"] = true;



$tdataalertbusqbienes[".shortTableName"] = "alertbusqbienes";
$tdataalertbusqbienes[".nSecOptions"] = 0;

$tdataalertbusqbienes[".mainTableOwnerID"] = "";
$tdataalertbusqbienes[".entityType"] = 1;
$tdataalertbusqbienes[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertbusqbienes[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertbusqbienes[".showAddInPopup"] = false;

$tdataalertbusqbienes[".showEditInPopup"] = false;

$tdataalertbusqbienes[".showViewInPopup"] = false;

$tdataalertbusqbienes[".listAjax"] = false;
//	temporary
//$tdataalertbusqbienes[".listAjax"] = false;

	$tdataalertbusqbienes[".audit"] = true;

	$tdataalertbusqbienes[".locking"] = false;


$pages = $tdataalertbusqbienes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertbusqbienes[".edit"] = true;
	$tdataalertbusqbienes[".afterEditAction"] = 1;
	$tdataalertbusqbienes[".closePopupAfterEdit"] = 1;
	$tdataalertbusqbienes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertbusqbienes[".add"] = true;
$tdataalertbusqbienes[".afterAddAction"] = 1;
$tdataalertbusqbienes[".closePopupAfterAdd"] = 1;
$tdataalertbusqbienes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertbusqbienes[".list"] = true;
}



$tdataalertbusqbienes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertbusqbienes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertbusqbienes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertbusqbienes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertbusqbienes[".printFriendly"] = true;
}



$tdataalertbusqbienes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertbusqbienes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertbusqbienes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertbusqbienes[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																	

$tdataalertbusqbienes[".ajaxCodeSnippetAdded"] = false;

$tdataalertbusqbienes[".buttonsAdded"] = false;

$tdataalertbusqbienes[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertbusqbienes[".isUseTimeForSearch"] = false;


$tdataalertbusqbienes[".badgeColor"] = "8FBC8B";


$tdataalertbusqbienes[".allSearchFields"] = array();
$tdataalertbusqbienes[".filterFields"] = array();
$tdataalertbusqbienes[".requiredSearchFields"] = array();

$tdataalertbusqbienes[".googleLikeFields"] = array();
$tdataalertbusqbienes[".googleLikeFields"][] = "Numero";
$tdataalertbusqbienes[".googleLikeFields"][] = "Fecha";
$tdataalertbusqbienes[".googleLikeFields"][] = "Sancionado";
$tdataalertbusqbienes[".googleLikeFields"][] = "Saldo";
$tdataalertbusqbienes[".googleLikeFields"][] = "Providencia";
$tdataalertbusqbienes[".googleLikeFields"][] = "Ejecutoria";
$tdataalertbusqbienes[".googleLikeFields"][] = "Notificacion";
$tdataalertbusqbienes[".googleLikeFields"][] = "DiasBusquedas";
$tdataalertbusqbienes[".googleLikeFields"][] = "FechaEmitirBusquedas";



$tdataalertbusqbienes[".tableType"] = "list";

$tdataalertbusqbienes[".printerPageOrientation"] = 0;
$tdataalertbusqbienes[".nPrinterPageScale"] = 100;

$tdataalertbusqbienes[".nPrinterSplitRecords"] = 40;

$tdataalertbusqbienes[".geocodingEnabled"] = false;




$tdataalertbusqbienes[".isDisplayLoading"] = true;

$tdataalertbusqbienes[".isResizeColumns"] = true;





$tdataalertbusqbienes[".pageSize"] = 20;

$tdataalertbusqbienes[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Saldo DESC";
$tdataalertbusqbienes[".strOrderBy"] = $tstrOrderBy;

$tdataalertbusqbienes[".orderindexes"] = array();
	$tdataalertbusqbienes[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)");



$tdataalertbusqbienes[".sqlHead"] = "SELECT Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,0 as DiasBusquedas,FORMAT(GETDATE(),'yyyy-mm-dd') as FechaEmitirBusquedas";
$tdataalertbusqbienes[".sqlFrom"] = "FROM Procesos  					  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdataalertbusqbienes[".sqlWhereExpr"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 7) -- Busqueda                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)                   ))";
$tdataalertbusqbienes[".sqlTail"] = "";

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
$tdataalertbusqbienes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalertbusqbienes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertbusqbienes[".arrGroupsPerPage"] = $arrGPP;

$tdataalertbusqbienes[".highlightSearchResults"] = true;

$tableKeysalertbusqbienes = array();
$tdataalertbusqbienes[".Keys"] = $tableKeysalertbusqbienes;


$tdataalertbusqbienes[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Numero";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataalertbusqbienes["Numero"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Fecha";

	
	
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


	$tdataalertbusqbienes["Fecha"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sancionados.Sancionado";

	
	
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


	$tdataalertbusqbienes["Sancionado"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";

	
	
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


	$tdataalertbusqbienes["Saldo"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Providencia";

	
	
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


	$tdataalertbusqbienes["Providencia"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Ejecutoria";

	
	
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


	$tdataalertbusqbienes["Ejecutoria"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Notificacion";

	
	
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


	$tdataalertbusqbienes["Notificacion"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "Notificacion";
//	DiasBusquedas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DiasBusquedas";
	$fdata["GoodName"] = "DiasBusquedas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","DiasBusquedas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasBusquedas";

	
		$fdata["FullName"] = "DiasBusquedas";

	
	
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


	$tdataalertbusqbienes["DiasBusquedas"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "DiasBusquedas";
//	FechaEmitirBusquedas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaEmitirBusquedas";
	$fdata["GoodName"] = "FechaEmitirBusquedas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertBusqBienes","FechaEmitirBusquedas");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "FechaEmitirBusquedas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(GETDATE(),'yyyy-mm-dd')";

	
	
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


	$tdataalertbusqbienes["FechaEmitirBusquedas"] = $fdata;
		$tdataalertbusqbienes[".searchableFields"][] = "FechaEmitirBusquedas";


$tables_data["AlertBusqBienes"]=&$tdataalertbusqbienes;
$field_labels["AlertBusqBienes"] = &$fieldLabelsalertbusqbienes;
$fieldToolTips["AlertBusqBienes"] = &$fieldToolTipsalertbusqbienes;
$placeHolders["AlertBusqBienes"] = &$placeHoldersalertbusqbienes;
$page_titles["AlertBusqBienes"] = &$pageTitlesalertbusqbienes;


changeTextControlsToDate( "AlertBusqBienes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertBusqBienes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertBusqBienes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertbusqbienes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,0 as DiasBusquedas,FORMAT(GETDATE(),'yyyy-mm-dd') as FechaEmitirBusquedas";
$proto0["m_strFrom"] = "FROM Procesos  					  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 7) -- Busqueda                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)                   ))";
$proto0["m_strOrderBy"] = "ORDER BY Saldo DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 7) -- Busqueda                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)                   ))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 7) -- Busqueda                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)                   ))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Procesos.EstadoId = 2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 2";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "Procesos.CarteraTipoId = :session.CarteraTipoId";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= :session.CarteraTipoId";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "AlertasTipos.AlertaTipoId = 7";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 7";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "Procesos.AbogadoId = :session.AbogadoId";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= :session.AbogadoId";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "Procesos.ConceptoId <> 2";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "<> 2";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)                   )";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SELECT *                       FROM Correspondencias                            INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Oficios.ActuacionId = 1035)"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "EXISTS";
$obj = new SQLFunctionCall($proto17);

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "NOT";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto21["m_sql"] = "Procesos.Numero";
$proto21["m_srcTableName"] = "AlertBusqBienes";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto23["m_sql"] = "Procesos.Fecha";
$proto23["m_srcTableName"] = "AlertBusqBienes";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto25["m_sql"] = "Sancionados.Sancionado";
$proto25["m_srcTableName"] = "AlertBusqBienes";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto27["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto27["m_srcTableName"] = "AlertBusqBienes";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto29["m_sql"] = "Procesos.Providencia";
$proto29["m_srcTableName"] = "AlertBusqBienes";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto31["m_sql"] = "Procesos.Ejecutoria";
$proto31["m_srcTableName"] = "AlertBusqBienes";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto33["m_sql"] = "Procesos.Notificacion";
$proto33["m_srcTableName"] = "AlertBusqBienes";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto35["m_sql"] = "0";
$proto35["m_srcTableName"] = "AlertBusqBienes";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "DiasBusquedas";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'yyyy-mm-dd'"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "FORMAT(GETDATE(),'yyyy-mm-dd')";
$proto37["m_srcTableName"] = "AlertBusqBienes";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "FechaEmitirBusquedas";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "dbo.Procesos";
$proto42["m_srcTableName"] = "AlertBusqBienes";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "ProcesoId";
$proto42["m_columns"][] = "SeccionalId";
$proto42["m_columns"][] = "AbogadoId";
$proto42["m_columns"][] = "Fecha";
$proto42["m_columns"][] = "Numero";
$proto42["m_columns"][] = "DespachoId";
$proto42["m_columns"][] = "SancionadoId";
$proto42["m_columns"][] = "Providencia";
$proto42["m_columns"][] = "Ejecutoria";
$proto42["m_columns"][] = "ConceptoId";
$proto42["m_columns"][] = "EstadoId";
$proto42["m_columns"][] = "EtapaId";
$proto42["m_columns"][] = "Folios";
$proto42["m_columns"][] = "Tipo";
$proto42["m_columns"][] = "Cantidad";
$proto42["m_columns"][] = "Obligacion";
$proto42["m_columns"][] = "Costas";
$proto42["m_columns"][] = "Liquidacion";
$proto42["m_columns"][] = "Dias";
$proto42["m_columns"][] = "Intereses";
$proto42["m_columns"][] = "Recaudo";
$proto42["m_columns"][] = "CalificacionId";
$proto42["m_columns"][] = "Terminacion";
$proto42["m_columns"][] = "MotivoId";
$proto42["m_columns"][] = "Observaciones";
$proto42["m_columns"][] = "Cuotas";
$proto42["m_columns"][] = "Abono";
$proto42["m_columns"][] = "Inicio";
$proto42["m_columns"][] = "VlrCuota";
$proto42["m_columns"][] = "VlrIntereses";
$proto42["m_columns"][] = "Garantia";
$proto42["m_columns"][] = "Radicado";
$proto42["m_columns"][] = "Remisorio";
$proto42["m_columns"][] = "Acuerdo";
$proto42["m_columns"][] = "Incumplimiento";
$proto42["m_columns"][] = "Notificacion";
$proto42["m_columns"][] = "Suspension";
$proto42["m_columns"][] = "Traslado";
$proto42["m_columns"][] = "Error";
$proto42["m_columns"][] = "CarteraTipoId";
$proto42["m_columns"][] = "ConceptoAbogado";
$proto42["m_columns"][] = "Origen";
$proto42["m_columns"][] = "Carpeta";
$proto42["m_columns"][] = "ImportacionId";
$proto42["m_columns"][] = "ActuacionId";
$proto42["m_columns"][] = "ObligacionInicial";
$proto42["m_columns"][] = "CostasInicial";
$proto42["m_columns"][] = "InteresesInicial";
$proto42["m_columns"][] = "MinJusticia";
$proto42["m_columns"][] = "Revocatoria";
$proto42["m_columns"][] = "Mayor";
$proto42["m_columns"][] = "NotificacionValidada";
$proto42["m_columns"][] = "Validado";
$proto42["m_columns"][] = "Seleccionado";
$proto42["m_columns"][] = "CompetenciaId";
$proto42["m_columns"][] = "MinjusticiaId";
$proto42["m_columns"][] = "SeleccionadoPor";
$proto42["m_columns"][] = "Subsanar";
$proto42["m_columns"][] = "NumeroMinjusticia";
$proto42["m_columns"][] = "ProcesoIdOrigen";
$proto42["m_columns"][] = "SeleccionadoFecha";
$proto42["m_columns"][] = "InteresesIniciales";
$proto42["m_columns"][] = "InteresesCalculados";
$proto42["m_columns"][] = "ProcesoIdDestino";
$proto42["m_columns"][] = "RecaudoMinjusticia";
$proto42["m_columns"][] = "RecaudoTerminado";
$proto42["m_columns"][] = "Persuasivo";
$proto42["m_columns"][] = "ObligacionCreacion";
$proto42["m_columns"][] = "InteresesCreacion";
$proto42["m_columns"][] = "CostasCreacion";
$proto42["m_columns"][] = "Plazo";
$proto42["m_columns"][] = "NaturalezaId";
$proto42["m_columns"][] = "TrasladoCartera";
$proto42["m_columns"][] = "CarteraTipoIdOrigen";
$proto42["m_columns"][] = "TrasladoConcepto";
$proto42["m_columns"][] = "ConceptoIdOrigen";
$proto42["m_columns"][] = "AutorizadoPlazo";
$proto42["m_columns"][] = "AutorizadoFecha";
$proto42["m_columns"][] = "AutorizadoPor";
$proto42["m_columns"][] = "Reliquidacion";
$proto42["m_columns"][] = "ChequeoId";
$proto42["m_columns"][] = "VlrCostas";
$proto42["m_columns"][] = "VlrInteresesPlazo";
$proto42["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "Procesos";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "AlertBusqBienes";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "dbo.Sancionados";
$proto46["m_srcTableName"] = "AlertBusqBienes";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "SancionadoId";
$proto46["m_columns"][] = "Sancionado";
$proto46["m_columns"][] = "TipoDocumentoId";
$proto46["m_columns"][] = "Documento";
$proto46["m_columns"][] = "Email";
$proto46["m_columns"][] = "Celular";
$proto46["m_columns"][] = "Masculino";
$proto46["m_columns"][] = "Observaciones";
$proto46["m_columns"][] = "Fallecimiento";
$proto46["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "AlertBusqBienes";
$proto47=array();
$proto47["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_CROSSJOIN";
			$proto50=array();
$proto50["m_strName"] = "dbo.AlertasTipos";
$proto50["m_srcTableName"] = "AlertBusqBienes";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "AlertaTipoId";
$proto50["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "CROSS JOIN AlertasTipos";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "AlertBusqBienes";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_INNERJOIN";
			$proto54=array();
$proto54["m_strName"] = "dbo.Alertas";
$proto54["m_srcTableName"] = "AlertBusqBienes";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "AlertaId";
$proto54["m_columns"][] = "AlertaTipoId";
$proto54["m_columns"][] = "Dias";
$proto54["m_columns"][] = "ActuacionId";
$proto54["m_columns"][] = "Activa";
$proto54["m_columns"][] = "Publicar";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "AlertBusqBienes";
$proto55=array();
$proto55["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertBusqBienes"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto57=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Saldo"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="AlertBusqBienes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertbusqbienes = createSqlQuery_alertbusqbienes();


	
		;

									

$tdataalertbusqbienes[".sqlquery"] = $queryData_alertbusqbienes;



include_once(getabspath("include/alertbusqbienes_events.php"));
$tdataalertbusqbienes[".hasEvents"] = true;

?>