<?php
$tdataalertnotmandpago = array();
$tdataalertnotmandpago[".searchableFields"] = array();
$tdataalertnotmandpago[".ShortName"] = "alertnotmandpago";
$tdataalertnotmandpago[".OwnerID"] = "";
$tdataalertnotmandpago[".OriginalTable"] = "dbo.Procesos";


$tdataalertnotmandpago[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertnotmandpago[".originalPagesByType"] = $tdataalertnotmandpago[".pagesByType"];
$tdataalertnotmandpago[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertnotmandpago[".originalPages"] = $tdataalertnotmandpago[".pages"];
$tdataalertnotmandpago[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertnotmandpago[".originalDefaultPages"] = $tdataalertnotmandpago[".defaultPages"];

//	field labels
$fieldLabelsalertnotmandpago = array();
$fieldToolTipsalertnotmandpago = array();
$pageTitlesalertnotmandpago = array();
$placeHoldersalertnotmandpago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertnotmandpago["Spanish"] = array();
	$fieldToolTipsalertnotmandpago["Spanish"] = array();
	$placeHoldersalertnotmandpago["Spanish"] = array();
	$pageTitlesalertnotmandpago["Spanish"] = array();
	$fieldLabelsalertnotmandpago["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertnotmandpago["Spanish"]["Fecha"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Fecha"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertnotmandpago["Spanish"]["Numero"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Numero"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertnotmandpago["Spanish"]["Providencia"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Providencia"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertnotmandpago["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertnotmandpago["Spanish"]["Notificacion"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertnotmandpago["Spanish"]["Sancionado"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertnotmandpago["Spanish"]["Saldo"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["Saldo"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["DiasValidarNotificaion"] = "Dias Validar Notificaion";
	$fieldToolTipsalertnotmandpago["Spanish"]["DiasValidarNotificaion"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["DiasValidarNotificaion"] = "";
	$fieldLabelsalertnotmandpago["Spanish"]["FechaGenerarNotificacion"] = "Fecha Generar Notificacion";
	$fieldToolTipsalertnotmandpago["Spanish"]["FechaGenerarNotificacion"] = "";
	$placeHoldersalertnotmandpago["Spanish"]["FechaGenerarNotificacion"] = "";
	if (count($fieldToolTipsalertnotmandpago["Spanish"]))
		$tdataalertnotmandpago[".isUseToolTips"] = true;
}


	$tdataalertnotmandpago[".NCSearch"] = true;



$tdataalertnotmandpago[".shortTableName"] = "alertnotmandpago";
$tdataalertnotmandpago[".nSecOptions"] = 0;

$tdataalertnotmandpago[".mainTableOwnerID"] = "";
$tdataalertnotmandpago[".entityType"] = 1;
$tdataalertnotmandpago[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertnotmandpago[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertnotmandpago[".showAddInPopup"] = false;

$tdataalertnotmandpago[".showEditInPopup"] = false;

$tdataalertnotmandpago[".showViewInPopup"] = false;

$tdataalertnotmandpago[".listAjax"] = false;
//	temporary
//$tdataalertnotmandpago[".listAjax"] = false;

	$tdataalertnotmandpago[".audit"] = true;

	$tdataalertnotmandpago[".locking"] = false;


$pages = $tdataalertnotmandpago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertnotmandpago[".edit"] = true;
	$tdataalertnotmandpago[".afterEditAction"] = 1;
	$tdataalertnotmandpago[".closePopupAfterEdit"] = 1;
	$tdataalertnotmandpago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertnotmandpago[".add"] = true;
$tdataalertnotmandpago[".afterAddAction"] = 1;
$tdataalertnotmandpago[".closePopupAfterAdd"] = 1;
$tdataalertnotmandpago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertnotmandpago[".list"] = true;
}



$tdataalertnotmandpago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertnotmandpago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertnotmandpago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertnotmandpago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertnotmandpago[".printFriendly"] = true;
}



$tdataalertnotmandpago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertnotmandpago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertnotmandpago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertnotmandpago[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																									

$tdataalertnotmandpago[".ajaxCodeSnippetAdded"] = false;

$tdataalertnotmandpago[".buttonsAdded"] = false;

$tdataalertnotmandpago[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertnotmandpago[".isUseTimeForSearch"] = false;


$tdataalertnotmandpago[".badgeColor"] = "4682B4";


$tdataalertnotmandpago[".allSearchFields"] = array();
$tdataalertnotmandpago[".filterFields"] = array();
$tdataalertnotmandpago[".requiredSearchFields"] = array();

$tdataalertnotmandpago[".googleLikeFields"] = array();
$tdataalertnotmandpago[".googleLikeFields"][] = "Numero";
$tdataalertnotmandpago[".googleLikeFields"][] = "Fecha";
$tdataalertnotmandpago[".googleLikeFields"][] = "Sancionado";
$tdataalertnotmandpago[".googleLikeFields"][] = "Saldo";
$tdataalertnotmandpago[".googleLikeFields"][] = "Providencia";
$tdataalertnotmandpago[".googleLikeFields"][] = "Ejecutoria";
$tdataalertnotmandpago[".googleLikeFields"][] = "Notificacion";
$tdataalertnotmandpago[".googleLikeFields"][] = "DiasValidarNotificaion";
$tdataalertnotmandpago[".googleLikeFields"][] = "FechaGenerarNotificacion";



$tdataalertnotmandpago[".tableType"] = "list";

$tdataalertnotmandpago[".printerPageOrientation"] = 0;
$tdataalertnotmandpago[".nPrinterPageScale"] = 100;

$tdataalertnotmandpago[".nPrinterSplitRecords"] = 40;

$tdataalertnotmandpago[".geocodingEnabled"] = false;




$tdataalertnotmandpago[".isDisplayLoading"] = true;

$tdataalertnotmandpago[".isResizeColumns"] = true;





$tdataalertnotmandpago[".pageSize"] = 20;

$tdataalertnotmandpago[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) DESC";
$tdataalertnotmandpago[".strOrderBy"] = $tstrOrderBy;

$tdataalertnotmandpago[".orderindexes"] = array();
	$tdataalertnotmandpago[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)");



$tdataalertnotmandpago[".sqlHead"] = "SELECT dbo.Procesos.Numero,  dbo.Procesos.Fecha,  dbo.Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) AS Saldo,  dbo.Procesos.Providencia,  dbo.Procesos.Ejecutoria,  dbo.Procesos.Notificacion,  0 AS DiasValidarNotificaion,  FORMAT(GETDATE(), 'yyyy/mm/dd') AS FechaGenerarNotificacion";
$tdataalertnotmandpago[".sqlFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId  , dbo.AlertasTipos  INNER JOIN dbo.Alertas ON dbo.AlertasTipos.AlertaTipoId = dbo.Alertas.AlertaTipoId";
$tdataalertnotmandpago[".sqlWhereExpr"] = "(dbo.Alertas.Activa = 1) AND (dbo.Procesos.EstadoId = 2) AND (dbo.Procesos.EtapaId = 2) AND (dbo.Procesos.ConceptoId <> 2)   AND (dbo.Procesos.CarteraTipoId = :session.CarteraTipoId) AND (dbo.AlertasTipos.AlertaTipoId = 4) AND (dbo.Procesos.AbogadoId = :session.AbogadoId) AND (dbo.Procesos.Notificacion IS NULL) AND ((dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL))";
$tdataalertnotmandpago[".sqlTail"] = "";

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
$tdataalertnotmandpago[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataalertnotmandpago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertnotmandpago[".arrGroupsPerPage"] = $arrGPP;

$tdataalertnotmandpago[".highlightSearchResults"] = true;

$tableKeysalertnotmandpago = array();
$tdataalertnotmandpago[".Keys"] = $tableKeysalertnotmandpago;


$tdataalertnotmandpago[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Numero";

	
	
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


	$tdataalertnotmandpago["Numero"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Fecha";

	
	
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


	$tdataalertnotmandpago["Fecha"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Sancionados.Sancionado";

	
	
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


	$tdataalertnotmandpago["Sancionado"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Saldo");
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


	$tdataalertnotmandpago["Saldo"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Providencia";

	
	
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


	$tdataalertnotmandpago["Providencia"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Ejecutoria";

	
	
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


	$tdataalertnotmandpago["Ejecutoria"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Notificacion";

	
	
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


	$tdataalertnotmandpago["Notificacion"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "Notificacion";
//	DiasValidarNotificaion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DiasValidarNotificaion";
	$fdata["GoodName"] = "DiasValidarNotificaion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","DiasValidarNotificaion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasValidarNotificaion";

	
		$fdata["FullName"] = "DiasValidarNotificaion";

	
	
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


	$tdataalertnotmandpago["DiasValidarNotificaion"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "DiasValidarNotificaion";
//	FechaGenerarNotificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaGenerarNotificacion";
	$fdata["GoodName"] = "FechaGenerarNotificacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertNotMandPago","FechaGenerarNotificacion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "FechaGenerarNotificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(GETDATE(), 'yyyy/mm/dd')";

	
	
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


	$tdataalertnotmandpago["FechaGenerarNotificacion"] = $fdata;
		$tdataalertnotmandpago[".searchableFields"][] = "FechaGenerarNotificacion";


$tables_data["AlertNotMandPago"]=&$tdataalertnotmandpago;
$field_labels["AlertNotMandPago"] = &$fieldLabelsalertnotmandpago;
$fieldToolTips["AlertNotMandPago"] = &$fieldToolTipsalertnotmandpago;
$placeHolders["AlertNotMandPago"] = &$placeHoldersalertnotmandpago;
$page_titles["AlertNotMandPago"] = &$pageTitlesalertnotmandpago;


changeTextControlsToDate( "AlertNotMandPago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertNotMandPago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertNotMandPago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertnotmandpago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dbo.Procesos.Numero,  dbo.Procesos.Fecha,  dbo.Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) AS Saldo,  dbo.Procesos.Providencia,  dbo.Procesos.Ejecutoria,  dbo.Procesos.Notificacion,  0 AS DiasValidarNotificaion,  FORMAT(GETDATE(), 'yyyy/mm/dd') AS FechaGenerarNotificacion";
$proto0["m_strFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId  , dbo.AlertasTipos  INNER JOIN dbo.Alertas ON dbo.AlertasTipos.AlertaTipoId = dbo.Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(dbo.Alertas.Activa = 1) AND (dbo.Procesos.EstadoId = 2) AND (dbo.Procesos.EtapaId = 2) AND (dbo.Procesos.ConceptoId <> 2)   AND (dbo.Procesos.CarteraTipoId = :session.CarteraTipoId) AND (dbo.AlertasTipos.AlertaTipoId = 4) AND (dbo.Procesos.AbogadoId = :session.AbogadoId) AND (dbo.Procesos.Notificacion IS NULL) AND ((dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL))";
$proto0["m_strOrderBy"] = "ORDER BY (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(dbo.Alertas.Activa = 1) AND (dbo.Procesos.EstadoId = 2) AND (dbo.Procesos.EtapaId = 2) AND (dbo.Procesos.ConceptoId <> 2)   AND (dbo.Procesos.CarteraTipoId = :session.CarteraTipoId) AND (dbo.AlertasTipos.AlertaTipoId = 4) AND (dbo.Procesos.AbogadoId = :session.AbogadoId) AND (dbo.Procesos.Notificacion IS NULL) AND ((dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(dbo.Alertas.Activa = 1) AND (dbo.Procesos.EstadoId = 2) AND (dbo.Procesos.EtapaId = 2) AND (dbo.Procesos.ConceptoId <> 2)   AND (dbo.Procesos.CarteraTipoId = :session.CarteraTipoId) AND (dbo.AlertasTipos.AlertaTipoId = 4) AND (dbo.Procesos.AbogadoId = :session.AbogadoId) AND (dbo.Procesos.Notificacion IS NULL) AND ((dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "dbo.Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertNotMandPago"
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
$proto6["m_sql"] = "dbo.Procesos.EstadoId = 2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
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
$proto8["m_sql"] = "dbo.Procesos.EtapaId = 2";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 2";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "dbo.Procesos.ConceptoId <> 2";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "<> 2";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "dbo.Procesos.CarteraTipoId = :session.CarteraTipoId";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= :session.CarteraTipoId";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "dbo.AlertasTipos.AlertaTipoId = 4";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= 4";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "dbo.Procesos.AbogadoId = :session.AbogadoId";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= :session.AbogadoId";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "dbo.Procesos.Notificacion IS NULL";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "IS NULL";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto2["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "(dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL)";
$proto20["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(dbo.Procesos.Acuerdo IS NULL) OR NOT (Procesos.Incumplimiento IS NULL)"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "dbo.Procesos.Acuerdo IS NULL";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "IS NULL";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = true;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto20["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "NOT (Procesos.Incumplimiento IS NULL)";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Incumplimiento IS NULL)"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "NOT";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto20["m_contained"][]=$obj;
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = true;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto28["m_sql"] = "dbo.Procesos.Numero";
$proto28["m_srcTableName"] = "AlertNotMandPago";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto30["m_sql"] = "dbo.Procesos.Fecha";
$proto30["m_srcTableName"] = "AlertNotMandPago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto32["m_sql"] = "dbo.Sancionados.Sancionado";
$proto32["m_srcTableName"] = "AlertNotMandPago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto34["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto34["m_srcTableName"] = "AlertNotMandPago";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto36["m_sql"] = "dbo.Procesos.Providencia";
$proto36["m_srcTableName"] = "AlertNotMandPago";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto38["m_sql"] = "dbo.Procesos.Ejecutoria";
$proto38["m_srcTableName"] = "AlertNotMandPago";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto40["m_sql"] = "dbo.Procesos.Notificacion";
$proto40["m_srcTableName"] = "AlertNotMandPago";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto42["m_sql"] = "0";
$proto42["m_srcTableName"] = "AlertNotMandPago";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "DiasValidarNotificaion";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'yyyy/mm/dd'"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "FORMAT(GETDATE(), 'yyyy/mm/dd')";
$proto44["m_srcTableName"] = "AlertNotMandPago";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "FechaGenerarNotificacion";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "dbo.Procesos";
$proto49["m_srcTableName"] = "AlertNotMandPago";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ProcesoId";
$proto49["m_columns"][] = "SeccionalId";
$proto49["m_columns"][] = "AbogadoId";
$proto49["m_columns"][] = "Fecha";
$proto49["m_columns"][] = "Numero";
$proto49["m_columns"][] = "DespachoId";
$proto49["m_columns"][] = "SancionadoId";
$proto49["m_columns"][] = "Providencia";
$proto49["m_columns"][] = "Ejecutoria";
$proto49["m_columns"][] = "ConceptoId";
$proto49["m_columns"][] = "EstadoId";
$proto49["m_columns"][] = "EtapaId";
$proto49["m_columns"][] = "Folios";
$proto49["m_columns"][] = "Tipo";
$proto49["m_columns"][] = "Cantidad";
$proto49["m_columns"][] = "Obligacion";
$proto49["m_columns"][] = "Costas";
$proto49["m_columns"][] = "Liquidacion";
$proto49["m_columns"][] = "Dias";
$proto49["m_columns"][] = "Intereses";
$proto49["m_columns"][] = "Recaudo";
$proto49["m_columns"][] = "CalificacionId";
$proto49["m_columns"][] = "Terminacion";
$proto49["m_columns"][] = "MotivoId";
$proto49["m_columns"][] = "Observaciones";
$proto49["m_columns"][] = "Cuotas";
$proto49["m_columns"][] = "Abono";
$proto49["m_columns"][] = "Inicio";
$proto49["m_columns"][] = "VlrCuota";
$proto49["m_columns"][] = "VlrIntereses";
$proto49["m_columns"][] = "Garantia";
$proto49["m_columns"][] = "Radicado";
$proto49["m_columns"][] = "Remisorio";
$proto49["m_columns"][] = "Acuerdo";
$proto49["m_columns"][] = "Incumplimiento";
$proto49["m_columns"][] = "Notificacion";
$proto49["m_columns"][] = "Suspension";
$proto49["m_columns"][] = "Traslado";
$proto49["m_columns"][] = "Error";
$proto49["m_columns"][] = "CarteraTipoId";
$proto49["m_columns"][] = "ConceptoAbogado";
$proto49["m_columns"][] = "Origen";
$proto49["m_columns"][] = "Carpeta";
$proto49["m_columns"][] = "ImportacionId";
$proto49["m_columns"][] = "ActuacionId";
$proto49["m_columns"][] = "ObligacionInicial";
$proto49["m_columns"][] = "CostasInicial";
$proto49["m_columns"][] = "InteresesInicial";
$proto49["m_columns"][] = "MinJusticia";
$proto49["m_columns"][] = "Revocatoria";
$proto49["m_columns"][] = "Mayor";
$proto49["m_columns"][] = "NotificacionValidada";
$proto49["m_columns"][] = "Validado";
$proto49["m_columns"][] = "Seleccionado";
$proto49["m_columns"][] = "CompetenciaId";
$proto49["m_columns"][] = "MinjusticiaId";
$proto49["m_columns"][] = "SeleccionadoPor";
$proto49["m_columns"][] = "Subsanar";
$proto49["m_columns"][] = "NumeroMinjusticia";
$proto49["m_columns"][] = "ProcesoIdOrigen";
$proto49["m_columns"][] = "SeleccionadoFecha";
$proto49["m_columns"][] = "InteresesIniciales";
$proto49["m_columns"][] = "InteresesCalculados";
$proto49["m_columns"][] = "ProcesoIdDestino";
$proto49["m_columns"][] = "RecaudoMinjusticia";
$proto49["m_columns"][] = "RecaudoTerminado";
$proto49["m_columns"][] = "Persuasivo";
$proto49["m_columns"][] = "ObligacionCreacion";
$proto49["m_columns"][] = "InteresesCreacion";
$proto49["m_columns"][] = "CostasCreacion";
$proto49["m_columns"][] = "Plazo";
$proto49["m_columns"][] = "NaturalezaId";
$proto49["m_columns"][] = "TrasladoCartera";
$proto49["m_columns"][] = "CarteraTipoIdOrigen";
$proto49["m_columns"][] = "TrasladoConcepto";
$proto49["m_columns"][] = "ConceptoIdOrigen";
$proto49["m_columns"][] = "AutorizadoPlazo";
$proto49["m_columns"][] = "AutorizadoFecha";
$proto49["m_columns"][] = "AutorizadoPor";
$proto49["m_columns"][] = "Reliquidacion";
$proto49["m_columns"][] = "ChequeoId";
$proto49["m_columns"][] = "VlrCostas";
$proto49["m_columns"][] = "VlrInteresesPlazo";
$proto49["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "dbo.Procesos";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "AlertNotMandPago";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Sancionados";
$proto53["m_srcTableName"] = "AlertNotMandPago";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "SancionadoId";
$proto53["m_columns"][] = "Sancionado";
$proto53["m_columns"][] = "TipoDocumentoId";
$proto53["m_columns"][] = "Documento";
$proto53["m_columns"][] = "Email";
$proto53["m_columns"][] = "Celular";
$proto53["m_columns"][] = "Masculino";
$proto53["m_columns"][] = "Observaciones";
$proto53["m_columns"][] = "Fallecimiento";
$proto53["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN dbo.Sancionados ON dbo.Procesos.SancionadoId = dbo.Sancionados.SancionadoId";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "AlertNotMandPago";
$proto54=array();
$proto54["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_CROSSJOIN";
			$proto57=array();
$proto57["m_strName"] = "dbo.AlertasTipos";
$proto57["m_srcTableName"] = "AlertNotMandPago";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "AlertaTipoId";
$proto57["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = ", dbo.AlertasTipos";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "AlertNotMandPago";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "dbo.Alertas";
$proto61["m_srcTableName"] = "AlertNotMandPago";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "AlertaId";
$proto61["m_columns"][] = "AlertaTipoId";
$proto61["m_columns"][] = "Dias";
$proto61["m_columns"][] = "ActuacionId";
$proto61["m_columns"][] = "Activa";
$proto61["m_columns"][] = "Publicar";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN dbo.Alertas ON dbo.AlertasTipos.AlertaTipoId = dbo.Alertas.AlertaTipoId";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "AlertNotMandPago";
$proto62=array();
$proto62["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertNotMandPago"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto64=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 0;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="AlertNotMandPago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertnotmandpago = createSqlQuery_alertnotmandpago();


	
		;

									

$tdataalertnotmandpago[".sqlquery"] = $queryData_alertnotmandpago;



include_once(getabspath("include/alertnotmandpago_events.php"));
$tdataalertnotmandpago[".hasEvents"] = true;

?>