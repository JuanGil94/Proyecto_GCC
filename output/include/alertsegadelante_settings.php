<?php
$tdataalertsegadelante = array();
$tdataalertsegadelante[".searchableFields"] = array();
$tdataalertsegadelante[".ShortName"] = "alertsegadelante";
$tdataalertsegadelante[".OwnerID"] = "";
$tdataalertsegadelante[".OriginalTable"] = "dbo.Procesos";


$tdataalertsegadelante[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertsegadelante[".originalPagesByType"] = $tdataalertsegadelante[".pagesByType"];
$tdataalertsegadelante[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertsegadelante[".originalPages"] = $tdataalertsegadelante[".pages"];
$tdataalertsegadelante[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertsegadelante[".originalDefaultPages"] = $tdataalertsegadelante[".defaultPages"];

//	field labels
$fieldLabelsalertsegadelante = array();
$fieldToolTipsalertsegadelante = array();
$pageTitlesalertsegadelante = array();
$placeHoldersalertsegadelante = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertsegadelante["Spanish"] = array();
	$fieldToolTipsalertsegadelante["Spanish"] = array();
	$placeHoldersalertsegadelante["Spanish"] = array();
	$pageTitlesalertsegadelante["Spanish"] = array();
	$fieldLabelsalertsegadelante["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertsegadelante["Spanish"]["Fecha"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Fecha"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertsegadelante["Spanish"]["Numero"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Numero"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertsegadelante["Spanish"]["Providencia"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Providencia"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertsegadelante["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Dias"] = "Prescripcion dias";
	$fieldToolTipsalertsegadelante["Spanish"]["Dias"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Dias"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertsegadelante["Spanish"]["Notificacion"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertsegadelante["Spanish"]["Sancionado"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertsegadelante["Spanish"]["Saldo"] = "";
	$placeHoldersalertsegadelante["Spanish"]["Saldo"] = "";
	$fieldLabelsalertsegadelante["Spanish"]["FechaEmitirResolucion"] = "Fecha Emitir Resolucion";
	$fieldToolTipsalertsegadelante["Spanish"]["FechaEmitirResolucion"] = "";
	$placeHoldersalertsegadelante["Spanish"]["FechaEmitirResolucion"] = "";
	if (count($fieldToolTipsalertsegadelante["Spanish"]))
		$tdataalertsegadelante[".isUseToolTips"] = true;
}


	$tdataalertsegadelante[".NCSearch"] = true;



$tdataalertsegadelante[".shortTableName"] = "alertsegadelante";
$tdataalertsegadelante[".nSecOptions"] = 0;

$tdataalertsegadelante[".mainTableOwnerID"] = "";
$tdataalertsegadelante[".entityType"] = 1;
$tdataalertsegadelante[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertsegadelante[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertsegadelante[".showAddInPopup"] = false;

$tdataalertsegadelante[".showEditInPopup"] = false;

$tdataalertsegadelante[".showViewInPopup"] = false;

$tdataalertsegadelante[".listAjax"] = false;
//	temporary
//$tdataalertsegadelante[".listAjax"] = false;

	$tdataalertsegadelante[".audit"] = true;

	$tdataalertsegadelante[".locking"] = false;


$pages = $tdataalertsegadelante[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertsegadelante[".edit"] = true;
	$tdataalertsegadelante[".afterEditAction"] = 1;
	$tdataalertsegadelante[".closePopupAfterEdit"] = 1;
	$tdataalertsegadelante[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertsegadelante[".add"] = true;
$tdataalertsegadelante[".afterAddAction"] = 1;
$tdataalertsegadelante[".closePopupAfterAdd"] = 1;
$tdataalertsegadelante[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertsegadelante[".list"] = true;
}



$tdataalertsegadelante[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertsegadelante[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertsegadelante[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertsegadelante[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertsegadelante[".printFriendly"] = true;
}



$tdataalertsegadelante[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertsegadelante[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertsegadelante[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertsegadelante[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																			

$tdataalertsegadelante[".ajaxCodeSnippetAdded"] = false;

$tdataalertsegadelante[".buttonsAdded"] = false;

$tdataalertsegadelante[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertsegadelante[".isUseTimeForSearch"] = false;


$tdataalertsegadelante[".badgeColor"] = "6493EA";


$tdataalertsegadelante[".allSearchFields"] = array();
$tdataalertsegadelante[".filterFields"] = array();
$tdataalertsegadelante[".requiredSearchFields"] = array();

$tdataalertsegadelante[".googleLikeFields"] = array();
$tdataalertsegadelante[".googleLikeFields"][] = "Numero";
$tdataalertsegadelante[".googleLikeFields"][] = "Fecha";
$tdataalertsegadelante[".googleLikeFields"][] = "Sancionado";
$tdataalertsegadelante[".googleLikeFields"][] = "Saldo";
$tdataalertsegadelante[".googleLikeFields"][] = "Providencia";
$tdataalertsegadelante[".googleLikeFields"][] = "Ejecutoria";
$tdataalertsegadelante[".googleLikeFields"][] = "Notificacion";
$tdataalertsegadelante[".googleLikeFields"][] = "Dias";
$tdataalertsegadelante[".googleLikeFields"][] = "FechaEmitirResolucion";



$tdataalertsegadelante[".tableType"] = "list";

$tdataalertsegadelante[".printerPageOrientation"] = 0;
$tdataalertsegadelante[".nPrinterPageScale"] = 100;

$tdataalertsegadelante[".nPrinterSplitRecords"] = 40;

$tdataalertsegadelante[".geocodingEnabled"] = false;




$tdataalertsegadelante[".isDisplayLoading"] = true;

$tdataalertsegadelante[".isResizeColumns"] = true;





$tdataalertsegadelante[".pageSize"] = 20;

$tdataalertsegadelante[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Saldo DESC";
$tdataalertsegadelante[".strOrderBy"] = $tstrOrderBy;

$tdataalertsegadelante[".orderindexes"] = array();
	$tdataalertsegadelante[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)");



$tdataalertsegadelante[".sqlHead"] = "SELECT Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.notificacion)) AS Dias,   DATEADD(day, Alertas.Dias, Procesos.notificacion) AS FechaEmitirResolucion";
$tdataalertsegadelante[".sqlFrom"] = "FROM Procesos  					  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdataalertsegadelante[".sqlWhereExpr"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 2)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 8) -- Procesos Resolucion Seguir Adelante                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL)                        AND ((DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE())                        AND NOT(Procesos.Notificacion IS NULL)                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)                   ))";
$tdataalertsegadelante[".sqlTail"] = "";

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
$tdataalertsegadelante[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataalertsegadelante[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertsegadelante[".arrGroupsPerPage"] = $arrGPP;

$tdataalertsegadelante[".highlightSearchResults"] = true;

$tableKeysalertsegadelante = array();
$tdataalertsegadelante[".Keys"] = $tableKeysalertsegadelante;


$tdataalertsegadelante[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Numero");
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


	$tdataalertsegadelante["Numero"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Fecha");
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


	$tdataalertsegadelante["Fecha"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Sancionado");
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


	$tdataalertsegadelante["Sancionado"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Saldo");
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


	$tdataalertsegadelante["Saldo"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Providencia");
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


	$tdataalertsegadelante["Providencia"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Ejecutoria");
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


	$tdataalertsegadelante["Ejecutoria"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Notificacion");
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


	$tdataalertsegadelante["Notificacion"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Notificacion";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.notificacion))";

	
	
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


	$tdataalertsegadelante["Dias"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "Dias";
//	FechaEmitirResolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaEmitirResolucion";
	$fdata["GoodName"] = "FechaEmitirResolucion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSegAdelante","FechaEmitirResolucion");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaEmitirResolucion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEADD(day, Alertas.Dias, Procesos.notificacion)";

	
	
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


	$tdataalertsegadelante["FechaEmitirResolucion"] = $fdata;
		$tdataalertsegadelante[".searchableFields"][] = "FechaEmitirResolucion";


$tables_data["AlertSegAdelante"]=&$tdataalertsegadelante;
$field_labels["AlertSegAdelante"] = &$fieldLabelsalertsegadelante;
$fieldToolTips["AlertSegAdelante"] = &$fieldToolTipsalertsegadelante;
$placeHolders["AlertSegAdelante"] = &$placeHoldersalertsegadelante;
$page_titles["AlertSegAdelante"] = &$pageTitlesalertsegadelante;


changeTextControlsToDate( "AlertSegAdelante" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertSegAdelante"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertSegAdelante"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertsegadelante()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.notificacion)) AS Dias,   DATEADD(day, Alertas.Dias, Procesos.notificacion) AS FechaEmitirResolucion";
$proto0["m_strFrom"] = "FROM Procesos  					  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 2)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 8) -- Procesos Resolucion Seguir Adelante                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL)                        AND ((DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE())                        AND NOT(Procesos.Notificacion IS NULL)                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)                   ))";
$proto0["m_strOrderBy"] = "ORDER BY Saldo DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 2)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 8) -- Procesos Resolucion Seguir Adelante                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL)                        AND ((DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE())                        AND NOT(Procesos.Notificacion IS NULL)                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)                   ))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 2)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 8) -- Procesos Resolucion Seguir Adelante                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL)                        AND ((DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE())                        AND NOT(Procesos.Notificacion IS NULL)                        AND (NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)                   ))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertSegAdelante"
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
	"m_srcTableName" => "AlertSegAdelante"
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
$proto8["m_sql"] = "Procesos.EtapaId = 2";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
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
$proto10["m_sql"] = "Procesos.CarteraTipoId = :session.CarteraTipoId";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= :session.CarteraTipoId";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "AlertasTipos.AlertaTipoId = 8";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 8";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "Procesos.AbogadoId = :session.AbogadoId";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= :session.AbogadoId";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "Procesos.ConceptoId <> 2";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "<> 2";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL";
$proto18["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Acuerdo IS NULL                             OR NOT Procesos.Incumplimiento IS NULL"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
						$proto20=array();
$proto20["m_sql"] = "Procesos.Acuerdo IS NULL";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "IS NULL";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto18["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = "NOT Procesos.Incumplimiento IS NULL";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Incumplimiento IS NULL"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "NOT";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto18["m_contained"][]=$obj;
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto2["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "(DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE()";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(DATEADD(day, Alertas.Dias, Procesos.notificacion))"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "< GETDATE()";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = true;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto2["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "NOT(Procesos.Notificacion IS NULL)";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Notificacion IS NULL)"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "NOT";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto2["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "NOT EXISTS                   (                       SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)                   )";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SELECT *                       FROM Correspondencias                       WHERE Procesos.ProcesoId = Correspondencias.ProcesoId                             AND (Correspondencias.OficioId = 1110                                  OR Correspondencias.OficioId = 4346)"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "EXISTS";
$obj = new SQLFunctionCall($proto29);

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "NOT";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = true;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto33["m_sql"] = "Procesos.Numero";
$proto33["m_srcTableName"] = "AlertSegAdelante";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto35["m_sql"] = "Procesos.Fecha";
$proto35["m_srcTableName"] = "AlertSegAdelante";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto37["m_sql"] = "Sancionados.Sancionado";
$proto37["m_srcTableName"] = "AlertSegAdelante";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto39["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto39["m_srcTableName"] = "AlertSegAdelante";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto41["m_sql"] = "Procesos.Providencia";
$proto41["m_srcTableName"] = "AlertSegAdelante";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto43["m_sql"] = "Procesos.Ejecutoria";
$proto43["m_srcTableName"] = "AlertSegAdelante";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto45["m_sql"] = "Procesos.Notificacion";
$proto45["m_srcTableName"] = "AlertSegAdelante";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, Alertas.Dias, Procesos.notificacion)"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto48);

$proto47["m_sql"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.notificacion))";
$proto47["m_srcTableName"] = "AlertSegAdelante";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "Dias";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Alertas.Dias"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.notificacion"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "DATEADD";
$obj = new SQLFunctionCall($proto53);

$proto52["m_sql"] = "DATEADD(day, Alertas.Dias, Procesos.notificacion)";
$proto52["m_srcTableName"] = "AlertSegAdelante";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "FechaEmitirResolucion";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "dbo.Procesos";
$proto58["m_srcTableName"] = "AlertSegAdelante";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "ProcesoId";
$proto58["m_columns"][] = "SeccionalId";
$proto58["m_columns"][] = "AbogadoId";
$proto58["m_columns"][] = "Fecha";
$proto58["m_columns"][] = "Numero";
$proto58["m_columns"][] = "DespachoId";
$proto58["m_columns"][] = "SancionadoId";
$proto58["m_columns"][] = "Providencia";
$proto58["m_columns"][] = "Ejecutoria";
$proto58["m_columns"][] = "ConceptoId";
$proto58["m_columns"][] = "EstadoId";
$proto58["m_columns"][] = "EtapaId";
$proto58["m_columns"][] = "Folios";
$proto58["m_columns"][] = "Tipo";
$proto58["m_columns"][] = "Cantidad";
$proto58["m_columns"][] = "Obligacion";
$proto58["m_columns"][] = "Costas";
$proto58["m_columns"][] = "Liquidacion";
$proto58["m_columns"][] = "Dias";
$proto58["m_columns"][] = "Intereses";
$proto58["m_columns"][] = "Recaudo";
$proto58["m_columns"][] = "CalificacionId";
$proto58["m_columns"][] = "Terminacion";
$proto58["m_columns"][] = "MotivoId";
$proto58["m_columns"][] = "Observaciones";
$proto58["m_columns"][] = "Cuotas";
$proto58["m_columns"][] = "Abono";
$proto58["m_columns"][] = "Inicio";
$proto58["m_columns"][] = "VlrCuota";
$proto58["m_columns"][] = "VlrIntereses";
$proto58["m_columns"][] = "Garantia";
$proto58["m_columns"][] = "Radicado";
$proto58["m_columns"][] = "Remisorio";
$proto58["m_columns"][] = "Acuerdo";
$proto58["m_columns"][] = "Incumplimiento";
$proto58["m_columns"][] = "Notificacion";
$proto58["m_columns"][] = "Suspension";
$proto58["m_columns"][] = "Traslado";
$proto58["m_columns"][] = "Error";
$proto58["m_columns"][] = "CarteraTipoId";
$proto58["m_columns"][] = "ConceptoAbogado";
$proto58["m_columns"][] = "Origen";
$proto58["m_columns"][] = "Carpeta";
$proto58["m_columns"][] = "ImportacionId";
$proto58["m_columns"][] = "ActuacionId";
$proto58["m_columns"][] = "ObligacionInicial";
$proto58["m_columns"][] = "CostasInicial";
$proto58["m_columns"][] = "InteresesInicial";
$proto58["m_columns"][] = "MinJusticia";
$proto58["m_columns"][] = "Revocatoria";
$proto58["m_columns"][] = "Mayor";
$proto58["m_columns"][] = "NotificacionValidada";
$proto58["m_columns"][] = "Validado";
$proto58["m_columns"][] = "Seleccionado";
$proto58["m_columns"][] = "CompetenciaId";
$proto58["m_columns"][] = "MinjusticiaId";
$proto58["m_columns"][] = "SeleccionadoPor";
$proto58["m_columns"][] = "Subsanar";
$proto58["m_columns"][] = "NumeroMinjusticia";
$proto58["m_columns"][] = "ProcesoIdOrigen";
$proto58["m_columns"][] = "SeleccionadoFecha";
$proto58["m_columns"][] = "InteresesIniciales";
$proto58["m_columns"][] = "InteresesCalculados";
$proto58["m_columns"][] = "ProcesoIdDestino";
$proto58["m_columns"][] = "RecaudoMinjusticia";
$proto58["m_columns"][] = "RecaudoTerminado";
$proto58["m_columns"][] = "Persuasivo";
$proto58["m_columns"][] = "ObligacionCreacion";
$proto58["m_columns"][] = "InteresesCreacion";
$proto58["m_columns"][] = "CostasCreacion";
$proto58["m_columns"][] = "Plazo";
$proto58["m_columns"][] = "NaturalezaId";
$proto58["m_columns"][] = "TrasladoCartera";
$proto58["m_columns"][] = "CarteraTipoIdOrigen";
$proto58["m_columns"][] = "TrasladoConcepto";
$proto58["m_columns"][] = "ConceptoIdOrigen";
$proto58["m_columns"][] = "AutorizadoPlazo";
$proto58["m_columns"][] = "AutorizadoFecha";
$proto58["m_columns"][] = "AutorizadoPor";
$proto58["m_columns"][] = "Reliquidacion";
$proto58["m_columns"][] = "ChequeoId";
$proto58["m_columns"][] = "VlrCostas";
$proto58["m_columns"][] = "VlrInteresesPlazo";
$proto58["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "Procesos";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "AlertSegAdelante";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_INNERJOIN";
			$proto62=array();
$proto62["m_strName"] = "dbo.Sancionados";
$proto62["m_srcTableName"] = "AlertSegAdelante";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "SancionadoId";
$proto62["m_columns"][] = "Sancionado";
$proto62["m_columns"][] = "TipoDocumentoId";
$proto62["m_columns"][] = "Documento";
$proto62["m_columns"][] = "Email";
$proto62["m_columns"][] = "Celular";
$proto62["m_columns"][] = "Masculino";
$proto62["m_columns"][] = "Observaciones";
$proto62["m_columns"][] = "Fallecimiento";
$proto62["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "AlertSegAdelante";
$proto63=array();
$proto63["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
												$proto65=array();
$proto65["m_link"] = "SQLL_CROSSJOIN";
			$proto66=array();
$proto66["m_strName"] = "dbo.AlertasTipos";
$proto66["m_srcTableName"] = "AlertSegAdelante";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "AlertaTipoId";
$proto66["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "CROSS JOIN AlertasTipos";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "AlertSegAdelante";
$proto67=array();
$proto67["m_sql"] = "";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto0["m_fromlist"][]=$obj;
												$proto69=array();
$proto69["m_link"] = "SQLL_INNERJOIN";
			$proto70=array();
$proto70["m_strName"] = "dbo.Alertas";
$proto70["m_srcTableName"] = "AlertSegAdelante";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "AlertaId";
$proto70["m_columns"][] = "AlertaTipoId";
$proto70["m_columns"][] = "Dias";
$proto70["m_columns"][] = "ActuacionId";
$proto70["m_columns"][] = "Activa";
$proto70["m_columns"][] = "Publicar";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto69["m_alias"] = "";
$proto69["m_srcTableName"] = "AlertSegAdelante";
$proto71=array();
$proto71["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertSegAdelante"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto73=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Saldo"
));

$proto73["m_column"]=$obj;
$proto73["m_bAsc"] = 0;
$proto73["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto73);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="AlertSegAdelante";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertsegadelante = createSqlQuery_alertsegadelante();


	
		;

									

$tdataalertsegadelante[".sqlquery"] = $queryData_alertsegadelante;



include_once(getabspath("include/alertsegadelante_events.php"));
$tdataalertsegadelante[".hasEvents"] = true;

?>