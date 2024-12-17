<?php
$tdataalertmandpago = array();
$tdataalertmandpago[".searchableFields"] = array();
$tdataalertmandpago[".ShortName"] = "alertmandpago";
$tdataalertmandpago[".OwnerID"] = "";
$tdataalertmandpago[".OriginalTable"] = "dbo.Procesos";


$tdataalertmandpago[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertmandpago[".originalPagesByType"] = $tdataalertmandpago[".pagesByType"];
$tdataalertmandpago[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertmandpago[".originalPages"] = $tdataalertmandpago[".pages"];
$tdataalertmandpago[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertmandpago[".originalDefaultPages"] = $tdataalertmandpago[".defaultPages"];

//	field labels
$fieldLabelsalertmandpago = array();
$fieldToolTipsalertmandpago = array();
$pageTitlesalertmandpago = array();
$placeHoldersalertmandpago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertmandpago["Spanish"] = array();
	$fieldToolTipsalertmandpago["Spanish"] = array();
	$placeHoldersalertmandpago["Spanish"] = array();
	$pageTitlesalertmandpago["Spanish"] = array();
	$fieldLabelsalertmandpago["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertmandpago["Spanish"]["Fecha"] = "";
	$placeHoldersalertmandpago["Spanish"]["Fecha"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertmandpago["Spanish"]["Numero"] = "";
	$placeHoldersalertmandpago["Spanish"]["Numero"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertmandpago["Spanish"]["Providencia"] = "";
	$placeHoldersalertmandpago["Spanish"]["Providencia"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertmandpago["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertmandpago["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertmandpago["Spanish"]["Notificacion"] = "";
	$placeHoldersalertmandpago["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertmandpago["Spanish"]["Sancionado"] = "";
	$placeHoldersalertmandpago["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertmandpago["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertmandpago["Spanish"]["Saldo"] = "";
	$placeHoldersalertmandpago["Spanish"]["Saldo"] = "";
	$fieldLabelsalertmandpago["Spanish"]["DiasActuacion"] = "Dias Actuacion";
	$fieldToolTipsalertmandpago["Spanish"]["DiasActuacion"] = "";
	$placeHoldersalertmandpago["Spanish"]["DiasActuacion"] = "";
	$fieldLabelsalertmandpago["Spanish"]["FechaActuacion"] = "Fecha Actuacion";
	$fieldToolTipsalertmandpago["Spanish"]["FechaActuacion"] = "";
	$placeHoldersalertmandpago["Spanish"]["FechaActuacion"] = "";
	if (count($fieldToolTipsalertmandpago["Spanish"]))
		$tdataalertmandpago[".isUseToolTips"] = true;
}


	$tdataalertmandpago[".NCSearch"] = true;



$tdataalertmandpago[".shortTableName"] = "alertmandpago";
$tdataalertmandpago[".nSecOptions"] = 0;

$tdataalertmandpago[".mainTableOwnerID"] = "";
$tdataalertmandpago[".entityType"] = 1;
$tdataalertmandpago[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertmandpago[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertmandpago[".showAddInPopup"] = false;

$tdataalertmandpago[".showEditInPopup"] = false;

$tdataalertmandpago[".showViewInPopup"] = false;

$tdataalertmandpago[".listAjax"] = false;
//	temporary
//$tdataalertmandpago[".listAjax"] = false;

	$tdataalertmandpago[".audit"] = true;

	$tdataalertmandpago[".locking"] = false;


$pages = $tdataalertmandpago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertmandpago[".edit"] = true;
	$tdataalertmandpago[".afterEditAction"] = 1;
	$tdataalertmandpago[".closePopupAfterEdit"] = 1;
	$tdataalertmandpago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertmandpago[".add"] = true;
$tdataalertmandpago[".afterAddAction"] = 1;
$tdataalertmandpago[".closePopupAfterAdd"] = 1;
$tdataalertmandpago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertmandpago[".list"] = true;
}



$tdataalertmandpago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertmandpago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertmandpago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertmandpago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertmandpago[".printFriendly"] = true;
}



$tdataalertmandpago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertmandpago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertmandpago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertmandpago[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdataalertmandpago[".ajaxCodeSnippetAdded"] = false;

$tdataalertmandpago[".buttonsAdded"] = false;

$tdataalertmandpago[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertmandpago[".isUseTimeForSearch"] = false;


$tdataalertmandpago[".badgeColor"] = "778899";


$tdataalertmandpago[".allSearchFields"] = array();
$tdataalertmandpago[".filterFields"] = array();
$tdataalertmandpago[".requiredSearchFields"] = array();

$tdataalertmandpago[".googleLikeFields"] = array();
$tdataalertmandpago[".googleLikeFields"][] = "Numero";
$tdataalertmandpago[".googleLikeFields"][] = "Fecha";
$tdataalertmandpago[".googleLikeFields"][] = "Sancionado";
$tdataalertmandpago[".googleLikeFields"][] = "Saldo";
$tdataalertmandpago[".googleLikeFields"][] = "Providencia";
$tdataalertmandpago[".googleLikeFields"][] = "Ejecutoria";
$tdataalertmandpago[".googleLikeFields"][] = "Notificacion";
$tdataalertmandpago[".googleLikeFields"][] = "DiasActuacion";
$tdataalertmandpago[".googleLikeFields"][] = "FechaActuacion";



$tdataalertmandpago[".tableType"] = "list";

$tdataalertmandpago[".printerPageOrientation"] = 0;
$tdataalertmandpago[".nPrinterPageScale"] = 100;

$tdataalertmandpago[".nPrinterSplitRecords"] = 40;

$tdataalertmandpago[".geocodingEnabled"] = false;




$tdataalertmandpago[".isDisplayLoading"] = true;

$tdataalertmandpago[".isResizeColumns"] = true;





$tdataalertmandpago[".pageSize"] = 20;

$tdataalertmandpago[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Saldo DESC";
$tdataalertmandpago[".strOrderBy"] = $tstrOrderBy;

$tdataalertmandpago[".orderindexes"] = array();
	$tdataalertmandpago[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "(P.Obligacion+P.Intereses+P.Costas)");



$tdataalertmandpago[".sqlHead"] = "SELECT P.Numero,P.Fecha,S.Sancionado,   (P.Obligacion+P.Intereses+P.Costas) as Saldo,  P.Providencia,P.Ejecutoria,P.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, ISNULL(P.Persuasivo, DATEADD(day, 10, P.Fecha)))) AS DiasActuacion,   DATEADD(day, A.Dias, P.Persuasivo) AS FechaActuacion";
$tdataalertmandpago[".sqlFrom"] = "FROM Procesos P  					  INNER JOIN Sancionados S ON S.SancionadoId=P.SancionadoId                        CROSS JOIN AlertasTipos ati                        INNER JOIN Alertas A ON ati.AlertaTipoId = A.AlertaTipoId";
$tdataalertmandpago[".sqlWhereExpr"] = "(A.Activa = 1)                        AND (P.EstadoId = 2) -- Activo                        AND (P.EtapaId = 1) -- Persuasivo                        AND (P.ConceptoId <> 2) --concepto poliza                        AND (P.Notificacion IS NULL)                        AND (P.CarteraTipoId =:session.CarteraTipoId)                        AND (ati.AlertaTipoId = 2) -- Mandamiento de Pago                        AND (P.AbogadoId = :session.AbogadoId)                        AND ((P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL))                        AND (DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha)))))) < A.Dias";
$tdataalertmandpago[".sqlTail"] = "";

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
$tdataalertmandpago[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataalertmandpago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertmandpago[".arrGroupsPerPage"] = $arrGPP;

$tdataalertmandpago[".highlightSearchResults"] = true;

$tableKeysalertmandpago = array();
$tdataalertmandpago[".Keys"] = $tableKeysalertmandpago;


$tdataalertmandpago[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Numero";

	
	
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


	$tdataalertmandpago["Numero"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Fecha";

	
	
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


	$tdataalertmandpago["Fecha"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Sancionado";

	
	
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


	$tdataalertmandpago["Sancionado"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(P.Obligacion+P.Intereses+P.Costas)";

	
	
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


	$tdataalertmandpago["Saldo"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Providencia";

	
	
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


	$tdataalertmandpago["Providencia"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Ejecutoria";

	
	
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


	$tdataalertmandpago["Ejecutoria"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Notificacion";

	
	
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


	$tdataalertmandpago["Notificacion"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "Notificacion";
//	DiasActuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DiasActuacion";
	$fdata["GoodName"] = "DiasActuacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","DiasActuacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasActuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, ISNULL(P.Persuasivo, DATEADD(day, 10, P.Fecha))))";

	
	
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


	$tdataalertmandpago["DiasActuacion"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "DiasActuacion";
//	FechaActuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaActuacion";
	$fdata["GoodName"] = "FechaActuacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_AlertMandPago","FechaActuacion");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaActuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEADD(day, A.Dias, P.Persuasivo)";

	
	
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


	$tdataalertmandpago["FechaActuacion"] = $fdata;
		$tdataalertmandpago[".searchableFields"][] = "FechaActuacion";


$tables_data["dbo.AlertMandPago"]=&$tdataalertmandpago;
$field_labels["dbo_AlertMandPago"] = &$fieldLabelsalertmandpago;
$fieldToolTips["dbo_AlertMandPago"] = &$fieldToolTipsalertmandpago;
$placeHolders["dbo_AlertMandPago"] = &$placeHoldersalertmandpago;
$page_titles["dbo_AlertMandPago"] = &$pageTitlesalertmandpago;


changeTextControlsToDate( "dbo.AlertMandPago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.AlertMandPago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.AlertMandPago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertmandpago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "P.Numero,P.Fecha,S.Sancionado,   (P.Obligacion+P.Intereses+P.Costas) as Saldo,  P.Providencia,P.Ejecutoria,P.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, ISNULL(P.Persuasivo, DATEADD(day, 10, P.Fecha)))) AS DiasActuacion,   DATEADD(day, A.Dias, P.Persuasivo) AS FechaActuacion";
$proto0["m_strFrom"] = "FROM Procesos P  					  INNER JOIN Sancionados S ON S.SancionadoId=P.SancionadoId                        CROSS JOIN AlertasTipos ati                        INNER JOIN Alertas A ON ati.AlertaTipoId = A.AlertaTipoId";
$proto0["m_strWhere"] = "(A.Activa = 1)                        AND (P.EstadoId = 2) -- Activo                        AND (P.EtapaId = 1) -- Persuasivo                        AND (P.ConceptoId <> 2) --concepto poliza                        AND (P.Notificacion IS NULL)                        AND (P.CarteraTipoId =:session.CarteraTipoId)                        AND (ati.AlertaTipoId = 2) -- Mandamiento de Pago                        AND (P.AbogadoId = :session.AbogadoId)                        AND ((P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL))                        AND (DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha)))))) < A.Dias";
$proto0["m_strOrderBy"] = "ORDER BY Saldo DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(A.Activa = 1)                        AND (P.EstadoId = 2) -- Activo                        AND (P.EtapaId = 1) -- Persuasivo                        AND (P.ConceptoId <> 2) --concepto poliza                        AND (P.Notificacion IS NULL)                        AND (P.CarteraTipoId =:session.CarteraTipoId)                        AND (ati.AlertaTipoId = 2) -- Mandamiento de Pago                        AND (P.AbogadoId = :session.AbogadoId)                        AND ((P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL))                        AND (DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha)))))) < A.Dias";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(A.Activa = 1)                        AND (P.EstadoId = 2) -- Activo                        AND (P.EtapaId = 1) -- Persuasivo                        AND (P.ConceptoId <> 2) --concepto poliza                        AND (P.Notificacion IS NULL)                        AND (P.CarteraTipoId =:session.CarteraTipoId)                        AND (ati.AlertaTipoId = 2) -- Mandamiento de Pago                        AND (P.AbogadoId = :session.AbogadoId)                        AND ((P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL))                        AND (DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha)))))) < A.Dias"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "A.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.AlertMandPago"
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
$proto6["m_sql"] = "P.EstadoId = 2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
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
$proto8["m_sql"] = "P.EtapaId = 1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 1";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "P.ConceptoId <> 2";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
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
$proto12["m_sql"] = "P.Notificacion IS NULL";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "IS NULL";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "P.CarteraTipoId =:session.CarteraTipoId";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "=:session.CarteraTipoId";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "ati.AlertaTipoId = 2";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "ati",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= 2";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "P.AbogadoId = :session.AbogadoId";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= :session.AbogadoId";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto2["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "(P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL)";
$proto20["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.Acuerdo IS NULL)                        OR (NOT P.Incumplimiento IS NULL)"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "P.Acuerdo IS NULL";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
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
$proto24["m_sql"] = "NOT P.Incumplimiento IS NULL";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "P.Incumplimiento IS NULL"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "NOT";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = true;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto20["m_contained"][]=$obj;
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = true;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto2["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "(DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha)))))) < A.Dias";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, (ISNULL(P.Persuasivo, DATEADD(day,A.Dias,P.Fecha))))))"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "< A.Dias";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto30["m_sql"] = "P.Numero";
$proto30["m_srcTableName"] = "dbo.AlertMandPago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto32["m_sql"] = "P.Fecha";
$proto32["m_srcTableName"] = "dbo.AlertMandPago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto34["m_sql"] = "S.Sancionado";
$proto34["m_srcTableName"] = "dbo.AlertMandPago";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(P.Obligacion+P.Intereses+P.Costas)"
));

$proto36["m_sql"] = "(P.Obligacion+P.Intereses+P.Costas)";
$proto36["m_srcTableName"] = "dbo.AlertMandPago";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto38["m_sql"] = "P.Providencia";
$proto38["m_srcTableName"] = "dbo.AlertMandPago";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto40["m_sql"] = "P.Ejecutoria";
$proto40["m_srcTableName"] = "dbo.AlertMandPago";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto42["m_sql"] = "P.Notificacion";
$proto42["m_srcTableName"] = "dbo.AlertMandPago";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

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
	"m_sql" => "GETDATE()"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, A.Dias, ISNULL(P.Persuasivo, DATEADD(day, 10, P.Fecha)))"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "DATEDIFF(day, GETDATE(), DATEADD(day, A.Dias, ISNULL(P.Persuasivo, DATEADD(day, 10, P.Fecha))))";
$proto44["m_srcTableName"] = "dbo.AlertMandPago";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "DiasActuacion";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$proto50=array();
$proto50["m_functiontype"] = "SQLF_CUSTOM";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "A.Dias"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "P.Persuasivo"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "DATEADD";
$obj = new SQLFunctionCall($proto50);

$proto49["m_sql"] = "DATEADD(day, A.Dias, P.Persuasivo)";
$proto49["m_srcTableName"] = "dbo.AlertMandPago";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "FechaActuacion";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "dbo.Procesos";
$proto55["m_srcTableName"] = "dbo.AlertMandPago";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "ProcesoId";
$proto55["m_columns"][] = "SeccionalId";
$proto55["m_columns"][] = "AbogadoId";
$proto55["m_columns"][] = "Fecha";
$proto55["m_columns"][] = "Numero";
$proto55["m_columns"][] = "DespachoId";
$proto55["m_columns"][] = "SancionadoId";
$proto55["m_columns"][] = "Providencia";
$proto55["m_columns"][] = "Ejecutoria";
$proto55["m_columns"][] = "ConceptoId";
$proto55["m_columns"][] = "EstadoId";
$proto55["m_columns"][] = "EtapaId";
$proto55["m_columns"][] = "Folios";
$proto55["m_columns"][] = "Tipo";
$proto55["m_columns"][] = "Cantidad";
$proto55["m_columns"][] = "Obligacion";
$proto55["m_columns"][] = "Costas";
$proto55["m_columns"][] = "Liquidacion";
$proto55["m_columns"][] = "Dias";
$proto55["m_columns"][] = "Intereses";
$proto55["m_columns"][] = "Recaudo";
$proto55["m_columns"][] = "CalificacionId";
$proto55["m_columns"][] = "Terminacion";
$proto55["m_columns"][] = "MotivoId";
$proto55["m_columns"][] = "Observaciones";
$proto55["m_columns"][] = "Cuotas";
$proto55["m_columns"][] = "Abono";
$proto55["m_columns"][] = "Inicio";
$proto55["m_columns"][] = "VlrCuota";
$proto55["m_columns"][] = "VlrIntereses";
$proto55["m_columns"][] = "Garantia";
$proto55["m_columns"][] = "Radicado";
$proto55["m_columns"][] = "Remisorio";
$proto55["m_columns"][] = "Acuerdo";
$proto55["m_columns"][] = "Incumplimiento";
$proto55["m_columns"][] = "Notificacion";
$proto55["m_columns"][] = "Suspension";
$proto55["m_columns"][] = "Traslado";
$proto55["m_columns"][] = "Error";
$proto55["m_columns"][] = "CarteraTipoId";
$proto55["m_columns"][] = "ConceptoAbogado";
$proto55["m_columns"][] = "Origen";
$proto55["m_columns"][] = "Carpeta";
$proto55["m_columns"][] = "ImportacionId";
$proto55["m_columns"][] = "ActuacionId";
$proto55["m_columns"][] = "ObligacionInicial";
$proto55["m_columns"][] = "CostasInicial";
$proto55["m_columns"][] = "InteresesInicial";
$proto55["m_columns"][] = "MinJusticia";
$proto55["m_columns"][] = "Revocatoria";
$proto55["m_columns"][] = "Mayor";
$proto55["m_columns"][] = "NotificacionValidada";
$proto55["m_columns"][] = "Validado";
$proto55["m_columns"][] = "Seleccionado";
$proto55["m_columns"][] = "CompetenciaId";
$proto55["m_columns"][] = "MinjusticiaId";
$proto55["m_columns"][] = "SeleccionadoPor";
$proto55["m_columns"][] = "Subsanar";
$proto55["m_columns"][] = "NumeroMinjusticia";
$proto55["m_columns"][] = "ProcesoIdOrigen";
$proto55["m_columns"][] = "SeleccionadoFecha";
$proto55["m_columns"][] = "InteresesIniciales";
$proto55["m_columns"][] = "InteresesCalculados";
$proto55["m_columns"][] = "ProcesoIdDestino";
$proto55["m_columns"][] = "RecaudoMinjusticia";
$proto55["m_columns"][] = "RecaudoTerminado";
$proto55["m_columns"][] = "Persuasivo";
$proto55["m_columns"][] = "ObligacionCreacion";
$proto55["m_columns"][] = "InteresesCreacion";
$proto55["m_columns"][] = "CostasCreacion";
$proto55["m_columns"][] = "Plazo";
$proto55["m_columns"][] = "NaturalezaId";
$proto55["m_columns"][] = "TrasladoCartera";
$proto55["m_columns"][] = "CarteraTipoIdOrigen";
$proto55["m_columns"][] = "TrasladoConcepto";
$proto55["m_columns"][] = "ConceptoIdOrigen";
$proto55["m_columns"][] = "AutorizadoPlazo";
$proto55["m_columns"][] = "AutorizadoFecha";
$proto55["m_columns"][] = "AutorizadoPor";
$proto55["m_columns"][] = "Reliquidacion";
$proto55["m_columns"][] = "ChequeoId";
$proto55["m_columns"][] = "VlrCostas";
$proto55["m_columns"][] = "VlrInteresesPlazo";
$proto55["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "Procesos P";
$proto54["m_alias"] = "P";
$proto54["m_srcTableName"] = "dbo.AlertMandPago";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_INNERJOIN";
			$proto59=array();
$proto59["m_strName"] = "dbo.Sancionados";
$proto59["m_srcTableName"] = "dbo.AlertMandPago";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "SancionadoId";
$proto59["m_columns"][] = "Sancionado";
$proto59["m_columns"][] = "TipoDocumentoId";
$proto59["m_columns"][] = "Documento";
$proto59["m_columns"][] = "Email";
$proto59["m_columns"][] = "Celular";
$proto59["m_columns"][] = "Masculino";
$proto59["m_columns"][] = "Observaciones";
$proto59["m_columns"][] = "Fallecimiento";
$proto59["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "INNER JOIN Sancionados S ON S.SancionadoId=P.SancionadoId";
$proto58["m_alias"] = "S";
$proto58["m_srcTableName"] = "dbo.AlertMandPago";
$proto60=array();
$proto60["m_sql"] = "S.SancionadoId = P.SancionadoId";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= P.SancionadoId";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_CROSSJOIN";
			$proto63=array();
$proto63["m_strName"] = "dbo.AlertasTipos";
$proto63["m_srcTableName"] = "dbo.AlertMandPago";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "AlertaTipoId";
$proto63["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "CROSS JOIN AlertasTipos ati";
$proto62["m_alias"] = "ati";
$proto62["m_srcTableName"] = "dbo.AlertMandPago";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_INNERJOIN";
			$proto67=array();
$proto67["m_strName"] = "dbo.Alertas";
$proto67["m_srcTableName"] = "dbo.AlertMandPago";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "AlertaId";
$proto67["m_columns"][] = "AlertaTipoId";
$proto67["m_columns"][] = "Dias";
$proto67["m_columns"][] = "ActuacionId";
$proto67["m_columns"][] = "Activa";
$proto67["m_columns"][] = "Publicar";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "INNER JOIN Alertas A ON ati.AlertaTipoId = A.AlertaTipoId";
$proto66["m_alias"] = "A";
$proto66["m_srcTableName"] = "dbo.AlertMandPago";
$proto68=array();
$proto68["m_sql"] = "A.AlertaTipoId = ati.AlertaTipoId";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.AlertMandPago"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= ati.AlertaTipoId";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto70=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Saldo"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 0;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.AlertMandPago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertmandpago = createSqlQuery_alertmandpago();


	
		;

									

$tdataalertmandpago[".sqlquery"] = $queryData_alertmandpago;



include_once(getabspath("include/alertmandpago_events.php"));
$tdataalertmandpago[".hasEvents"] = true;

?>