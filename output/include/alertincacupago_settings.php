<?php
$tdataalertincacupago = array();
$tdataalertincacupago[".searchableFields"] = array();
$tdataalertincacupago[".ShortName"] = "alertincacupago";
$tdataalertincacupago[".OwnerID"] = "";
$tdataalertincacupago[".OriginalTable"] = "dbo.Procesos";


$tdataalertincacupago[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertincacupago[".originalPagesByType"] = $tdataalertincacupago[".pagesByType"];
$tdataalertincacupago[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertincacupago[".originalPages"] = $tdataalertincacupago[".pages"];
$tdataalertincacupago[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertincacupago[".originalDefaultPages"] = $tdataalertincacupago[".defaultPages"];

//	field labels
$fieldLabelsalertincacupago = array();
$fieldToolTipsalertincacupago = array();
$pageTitlesalertincacupago = array();
$placeHoldersalertincacupago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertincacupago["Spanish"] = array();
	$fieldToolTipsalertincacupago["Spanish"] = array();
	$placeHoldersalertincacupago["Spanish"] = array();
	$pageTitlesalertincacupago["Spanish"] = array();
	$fieldLabelsalertincacupago["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertincacupago["Spanish"]["Numero"] = "";
	$placeHoldersalertincacupago["Spanish"]["Numero"] = "";
	$fieldLabelsalertincacupago["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertincacupago["Spanish"]["Providencia"] = "";
	$placeHoldersalertincacupago["Spanish"]["Providencia"] = "";
	$fieldLabelsalertincacupago["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertincacupago["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertincacupago["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertincacupago["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertincacupago["Spanish"]["Notificacion"] = "";
	$placeHoldersalertincacupago["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertincacupago["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertincacupago["Spanish"]["Sancionado"] = "";
	$placeHoldersalertincacupago["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertincacupago["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertincacupago["Spanish"]["Saldo"] = "";
	$placeHoldersalertincacupago["Spanish"]["Saldo"] = "";
	$fieldLabelsalertincacupago["Spanish"]["DiasRetraso"] = "Dias Retraso";
	$fieldToolTipsalertincacupago["Spanish"]["DiasRetraso"] = "";
	$placeHoldersalertincacupago["Spanish"]["DiasRetraso"] = "";
	$fieldLabelsalertincacupago["Spanish"]["FechaActuacion"] = "Fecha Actuacion";
	$fieldToolTipsalertincacupago["Spanish"]["FechaActuacion"] = "";
	$placeHoldersalertincacupago["Spanish"]["FechaActuacion"] = "";
	$fieldLabelsalertincacupago["Spanish"]["FechaLimiteRecaudo"] = "Fecha Limite Recaudo";
	$fieldToolTipsalertincacupago["Spanish"]["FechaLimiteRecaudo"] = "";
	$placeHoldersalertincacupago["Spanish"]["FechaLimiteRecaudo"] = "";
	if (count($fieldToolTipsalertincacupago["Spanish"]))
		$tdataalertincacupago[".isUseToolTips"] = true;
}


	$tdataalertincacupago[".NCSearch"] = true;



$tdataalertincacupago[".shortTableName"] = "alertincacupago";
$tdataalertincacupago[".nSecOptions"] = 0;

$tdataalertincacupago[".mainTableOwnerID"] = "";
$tdataalertincacupago[".entityType"] = 1;
$tdataalertincacupago[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertincacupago[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertincacupago[".showAddInPopup"] = false;

$tdataalertincacupago[".showEditInPopup"] = false;

$tdataalertincacupago[".showViewInPopup"] = false;

$tdataalertincacupago[".listAjax"] = false;
//	temporary
//$tdataalertincacupago[".listAjax"] = false;

	$tdataalertincacupago[".audit"] = true;

	$tdataalertincacupago[".locking"] = false;


$pages = $tdataalertincacupago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertincacupago[".edit"] = true;
	$tdataalertincacupago[".afterEditAction"] = 1;
	$tdataalertincacupago[".closePopupAfterEdit"] = 1;
	$tdataalertincacupago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertincacupago[".add"] = true;
$tdataalertincacupago[".afterAddAction"] = 1;
$tdataalertincacupago[".closePopupAfterAdd"] = 1;
$tdataalertincacupago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertincacupago[".list"] = true;
}



$tdataalertincacupago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertincacupago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertincacupago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertincacupago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertincacupago[".printFriendly"] = true;
}



$tdataalertincacupago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertincacupago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertincacupago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertincacupago[".isUseAjaxSuggest"] = true;



																																																																																																

$tdataalertincacupago[".ajaxCodeSnippetAdded"] = false;

$tdataalertincacupago[".buttonsAdded"] = false;

$tdataalertincacupago[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertincacupago[".isUseTimeForSearch"] = false;


$tdataalertincacupago[".badgeColor"] = "008B8B";


$tdataalertincacupago[".allSearchFields"] = array();
$tdataalertincacupago[".filterFields"] = array();
$tdataalertincacupago[".requiredSearchFields"] = array();

$tdataalertincacupago[".googleLikeFields"] = array();
$tdataalertincacupago[".googleLikeFields"][] = "Numero";
$tdataalertincacupago[".googleLikeFields"][] = "Sancionado";
$tdataalertincacupago[".googleLikeFields"][] = "Saldo";
$tdataalertincacupago[".googleLikeFields"][] = "Providencia";
$tdataalertincacupago[".googleLikeFields"][] = "Ejecutoria";
$tdataalertincacupago[".googleLikeFields"][] = "Notificacion";
$tdataalertincacupago[".googleLikeFields"][] = "DiasRetraso";
$tdataalertincacupago[".googleLikeFields"][] = "FechaActuacion";
$tdataalertincacupago[".googleLikeFields"][] = "FechaLimiteRecaudo";



$tdataalertincacupago[".tableType"] = "list";

$tdataalertincacupago[".printerPageOrientation"] = 0;
$tdataalertincacupago[".nPrinterPageScale"] = 100;

$tdataalertincacupago[".nPrinterSplitRecords"] = 40;

$tdataalertincacupago[".geocodingEnabled"] = false;




$tdataalertincacupago[".isDisplayLoading"] = true;

$tdataalertincacupago[".isResizeColumns"] = true;





$tdataalertincacupago[".pageSize"] = 20;

$tdataalertincacupago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertincacupago[".strOrderBy"] = $tstrOrderBy;

$tdataalertincacupago[".orderindexes"] = array();


$tdataalertincacupago[".sqlHead"] = "SELECT Procesos.Numero,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha))) AS DiasRetraso,  MAX(Pagos1.Fecha) AS FechaActuacion,  DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha)) AS FechaLimiteRecaudo";
$tdataalertincacupago[".sqlFrom"] = "FROM Procesos  					  INNER JOIN Pagos1 ON Pagos1.ProcesoId = Procesos.ProcesoId  					  INNER JOIN Sancionados ON Sancionados.SancionadoId =Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdataalertincacupago[".sqlWhereExpr"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 5) -- Incumplimiento de Acuerdo de Pago                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND ((Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL))                        AND ((Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0)";
$tdataalertincacupago[".sqlTail"] = "";

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
$tdataalertincacupago[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalertincacupago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertincacupago[".arrGroupsPerPage"] = $arrGPP;

$tdataalertincacupago[".highlightSearchResults"] = true;

$tableKeysalertincacupago = array();
$tdataalertincacupago[".Keys"] = $tableKeysalertincacupago;


$tdataalertincacupago[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Numero";

	
	
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


	$tdataalertincacupago["Numero"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Sancionado");
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


	$tdataalertincacupago["Sancionado"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Saldo");
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


	$tdataalertincacupago["Saldo"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Providencia");
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


	$tdataalertincacupago["Providencia"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Ejecutoria");
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


	$tdataalertincacupago["Ejecutoria"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","Notificacion");
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


	$tdataalertincacupago["Notificacion"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "Notificacion";
//	DiasRetraso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DiasRetraso";
	$fdata["GoodName"] = "DiasRetraso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","DiasRetraso");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasRetraso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha)))";

	
	
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


	$tdataalertincacupago["DiasRetraso"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "DiasRetraso";
//	FechaActuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FechaActuacion";
	$fdata["GoodName"] = "FechaActuacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","FechaActuacion");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaActuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(Pagos1.Fecha)";

	
	
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


	$tdataalertincacupago["FechaActuacion"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "FechaActuacion";
//	FechaLimiteRecaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaLimiteRecaudo";
	$fdata["GoodName"] = "FechaLimiteRecaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIncAcuPago","FechaLimiteRecaudo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaLimiteRecaudo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha))";

	
	
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


	$tdataalertincacupago["FechaLimiteRecaudo"] = $fdata;
		$tdataalertincacupago[".searchableFields"][] = "FechaLimiteRecaudo";


$tables_data["AlertIncAcuPago"]=&$tdataalertincacupago;
$field_labels["AlertIncAcuPago"] = &$fieldLabelsalertincacupago;
$fieldToolTips["AlertIncAcuPago"] = &$fieldToolTipsalertincacupago;
$placeHolders["AlertIncAcuPago"] = &$placeHoldersalertincacupago;
$page_titles["AlertIncAcuPago"] = &$pageTitlesalertincacupago;


changeTextControlsToDate( "AlertIncAcuPago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertIncAcuPago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertIncAcuPago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertincacupago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha))) AS DiasRetraso,  MAX(Pagos1.Fecha) AS FechaActuacion,  DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha)) AS FechaLimiteRecaudo";
$proto0["m_strFrom"] = "FROM Procesos  					  INNER JOIN Pagos1 ON Pagos1.ProcesoId = Procesos.ProcesoId  					  INNER JOIN Sancionados ON Sancionados.SancionadoId =Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 5) -- Incumplimiento de Acuerdo de Pago                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND ((Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL))                        AND ((Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 5) -- Incumplimiento de Acuerdo de Pago                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND ((Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL))                        AND ((Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 5) -- Incumplimiento de Acuerdo de Pago                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND ((Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL))                        AND ((Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertIncAcuPago"
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
	"m_srcTableName" => "AlertIncAcuPago"
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
	"m_srcTableName" => "AlertIncAcuPago"
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
$proto10["m_sql"] = "AlertasTipos.AlertaTipoId = 5";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 5";
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
	"m_srcTableName" => "AlertIncAcuPago"
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
$proto14["m_sql"] = "(Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL)";
$proto14["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Incumplimiento IS NULL)AND NOT(Procesos.Acuerdo IS NULL)"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
						$proto16=array();
$proto16["m_sql"] = "Procesos.Incumplimiento IS NULL";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "IS NULL";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto14["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "NOT(Procesos.Acuerdo IS NULL)";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Acuerdo IS NULL)"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "NOT";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto14["m_contained"][]=$obj;
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "> 0";
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
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto24["m_sql"] = "Procesos.Numero";
$proto24["m_srcTableName"] = "AlertIncAcuPago";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto26["m_sql"] = "Sancionados.Sancionado";
$proto26["m_srcTableName"] = "AlertIncAcuPago";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto28["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto28["m_srcTableName"] = "AlertIncAcuPago";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto30["m_sql"] = "Procesos.Providencia";
$proto30["m_srcTableName"] = "AlertIncAcuPago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto32["m_sql"] = "Procesos.Ejecutoria";
$proto32["m_srcTableName"] = "AlertIncAcuPago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto34["m_sql"] = "Procesos.Notificacion";
$proto34["m_srcTableName"] = "AlertIncAcuPago";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha))"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha)))";
$proto36["m_srcTableName"] = "AlertIncAcuPago";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "DiasRetraso";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_MAX";
$proto42["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "MAX(Pagos1.Fecha)";
$proto41["m_srcTableName"] = "AlertIncAcuPago";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "FechaActuacion";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Alertas.Dias"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "MAX(Pagos1.Fecha)"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "DATEADD";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "DATEADD(day, Alertas.Dias, MAX(Pagos1.Fecha))";
$proto44["m_srcTableName"] = "AlertIncAcuPago";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "FechaLimiteRecaudo";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "dbo.Procesos";
$proto50["m_srcTableName"] = "AlertIncAcuPago";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "ProcesoId";
$proto50["m_columns"][] = "SeccionalId";
$proto50["m_columns"][] = "AbogadoId";
$proto50["m_columns"][] = "Fecha";
$proto50["m_columns"][] = "Numero";
$proto50["m_columns"][] = "DespachoId";
$proto50["m_columns"][] = "SancionadoId";
$proto50["m_columns"][] = "Providencia";
$proto50["m_columns"][] = "Ejecutoria";
$proto50["m_columns"][] = "ConceptoId";
$proto50["m_columns"][] = "EstadoId";
$proto50["m_columns"][] = "EtapaId";
$proto50["m_columns"][] = "Folios";
$proto50["m_columns"][] = "Tipo";
$proto50["m_columns"][] = "Cantidad";
$proto50["m_columns"][] = "Obligacion";
$proto50["m_columns"][] = "Costas";
$proto50["m_columns"][] = "Liquidacion";
$proto50["m_columns"][] = "Dias";
$proto50["m_columns"][] = "Intereses";
$proto50["m_columns"][] = "Recaudo";
$proto50["m_columns"][] = "CalificacionId";
$proto50["m_columns"][] = "Terminacion";
$proto50["m_columns"][] = "MotivoId";
$proto50["m_columns"][] = "Observaciones";
$proto50["m_columns"][] = "Cuotas";
$proto50["m_columns"][] = "Abono";
$proto50["m_columns"][] = "Inicio";
$proto50["m_columns"][] = "VlrCuota";
$proto50["m_columns"][] = "VlrIntereses";
$proto50["m_columns"][] = "Garantia";
$proto50["m_columns"][] = "Radicado";
$proto50["m_columns"][] = "Remisorio";
$proto50["m_columns"][] = "Acuerdo";
$proto50["m_columns"][] = "Incumplimiento";
$proto50["m_columns"][] = "Notificacion";
$proto50["m_columns"][] = "Suspension";
$proto50["m_columns"][] = "Traslado";
$proto50["m_columns"][] = "Error";
$proto50["m_columns"][] = "CarteraTipoId";
$proto50["m_columns"][] = "ConceptoAbogado";
$proto50["m_columns"][] = "Origen";
$proto50["m_columns"][] = "Carpeta";
$proto50["m_columns"][] = "ImportacionId";
$proto50["m_columns"][] = "ActuacionId";
$proto50["m_columns"][] = "ObligacionInicial";
$proto50["m_columns"][] = "CostasInicial";
$proto50["m_columns"][] = "InteresesInicial";
$proto50["m_columns"][] = "MinJusticia";
$proto50["m_columns"][] = "Revocatoria";
$proto50["m_columns"][] = "Mayor";
$proto50["m_columns"][] = "NotificacionValidada";
$proto50["m_columns"][] = "Validado";
$proto50["m_columns"][] = "Seleccionado";
$proto50["m_columns"][] = "CompetenciaId";
$proto50["m_columns"][] = "MinjusticiaId";
$proto50["m_columns"][] = "SeleccionadoPor";
$proto50["m_columns"][] = "Subsanar";
$proto50["m_columns"][] = "NumeroMinjusticia";
$proto50["m_columns"][] = "ProcesoIdOrigen";
$proto50["m_columns"][] = "SeleccionadoFecha";
$proto50["m_columns"][] = "InteresesIniciales";
$proto50["m_columns"][] = "InteresesCalculados";
$proto50["m_columns"][] = "ProcesoIdDestino";
$proto50["m_columns"][] = "RecaudoMinjusticia";
$proto50["m_columns"][] = "RecaudoTerminado";
$proto50["m_columns"][] = "Persuasivo";
$proto50["m_columns"][] = "ObligacionCreacion";
$proto50["m_columns"][] = "InteresesCreacion";
$proto50["m_columns"][] = "CostasCreacion";
$proto50["m_columns"][] = "Plazo";
$proto50["m_columns"][] = "NaturalezaId";
$proto50["m_columns"][] = "TrasladoCartera";
$proto50["m_columns"][] = "CarteraTipoIdOrigen";
$proto50["m_columns"][] = "TrasladoConcepto";
$proto50["m_columns"][] = "ConceptoIdOrigen";
$proto50["m_columns"][] = "AutorizadoPlazo";
$proto50["m_columns"][] = "AutorizadoFecha";
$proto50["m_columns"][] = "AutorizadoPor";
$proto50["m_columns"][] = "Reliquidacion";
$proto50["m_columns"][] = "ChequeoId";
$proto50["m_columns"][] = "VlrCostas";
$proto50["m_columns"][] = "VlrInteresesPlazo";
$proto50["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "Procesos";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "AlertIncAcuPago";
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
$proto54["m_strName"] = "dbo.Pagos1";
$proto54["m_srcTableName"] = "AlertIncAcuPago";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "PagoId";
$proto54["m_columns"][] = "ProcesoId";
$proto54["m_columns"][] = "CuentaId";
$proto54["m_columns"][] = "Fecha";
$proto54["m_columns"][] = "Numero";
$proto54["m_columns"][] = "Pago";
$proto54["m_columns"][] = "Observaciones";
$proto54["m_columns"][] = "Registro";
$proto54["m_columns"][] = "PagoObli";
$proto54["m_columns"][] = "PagoCost";
$proto54["m_columns"][] = "PagoInte";
$proto54["m_columns"][] = "PagoMayo";
$proto54["m_columns"][] = "PagoTerm";
$proto54["m_columns"][] = "PagoIdOrig";
$proto54["m_columns"][] = "TipoRecaudoId";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "INNER JOIN Pagos1 ON Pagos1.ProcesoId = Procesos.ProcesoId";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "AlertIncAcuPago";
$proto55=array();
$proto55["m_sql"] = "dbo.Pagos1.ProcesoId = dbo.Procesos.ProcesoId";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= dbo.Procesos.ProcesoId";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_INNERJOIN";
			$proto58=array();
$proto58["m_strName"] = "dbo.Sancionados";
$proto58["m_srcTableName"] = "AlertIncAcuPago";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "SancionadoId";
$proto58["m_columns"][] = "Sancionado";
$proto58["m_columns"][] = "TipoDocumentoId";
$proto58["m_columns"][] = "Documento";
$proto58["m_columns"][] = "Email";
$proto58["m_columns"][] = "Celular";
$proto58["m_columns"][] = "Masculino";
$proto58["m_columns"][] = "Observaciones";
$proto58["m_columns"][] = "Fallecimiento";
$proto58["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId =Procesos.SancionadoId";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "AlertIncAcuPago";
$proto59=array();
$proto59["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_CROSSJOIN";
			$proto62=array();
$proto62["m_strName"] = "dbo.AlertasTipos";
$proto62["m_srcTableName"] = "AlertIncAcuPago";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "AlertaTipoId";
$proto62["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "CROSS JOIN AlertasTipos";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "AlertIncAcuPago";
$proto63=array();
$proto63["m_sql"] = "";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
												$proto65=array();
$proto65["m_link"] = "SQLL_INNERJOIN";
			$proto66=array();
$proto66["m_strName"] = "dbo.Alertas";
$proto66["m_srcTableName"] = "AlertIncAcuPago";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "AlertaId";
$proto66["m_columns"][] = "AlertaTipoId";
$proto66["m_columns"][] = "Dias";
$proto66["m_columns"][] = "ActuacionId";
$proto66["m_columns"][] = "Activa";
$proto66["m_columns"][] = "Publicar";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "AlertIncAcuPago";
$proto67=array();
$proto67["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
												$proto81=array();
						$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto81["m_column"]=$obj;
$obj = new SQLGroupByItem($proto81);

$proto0["m_groupby"][]=$obj;
												$proto83=array();
						$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto83["m_column"]=$obj;
$obj = new SQLGroupByItem($proto83);

$proto0["m_groupby"][]=$obj;
												$proto85=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto85["m_column"]=$obj;
$obj = new SQLGroupByItem($proto85);

$proto0["m_groupby"][]=$obj;
												$proto87=array();
						$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertIncAcuPago"
));

$proto87["m_column"]=$obj;
$obj = new SQLGroupByItem($proto87);

$proto0["m_groupby"][]=$obj;
												$proto89=array();
						$proto90=array();
$proto90["m_functiontype"] = "SQLF_CUSTOM";
$proto90["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto90["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto90["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, Alertas.Dias, Procesos.Fecha)"
));

$proto90["m_arguments"][]=$obj;
$proto90["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto90);

$proto89["m_column"]=$obj;
$obj = new SQLGroupByItem($proto89);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AlertIncAcuPago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertincacupago = createSqlQuery_alertincacupago();


	
		;

									

$tdataalertincacupago[".sqlquery"] = $queryData_alertincacupago;



include_once(getabspath("include/alertincacupago_events.php"));
$tdataalertincacupago[".hasEvents"] = true;

?>