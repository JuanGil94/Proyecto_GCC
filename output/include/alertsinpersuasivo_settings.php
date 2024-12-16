<?php
$tdataalertsinpersuasivo = array();
$tdataalertsinpersuasivo[".searchableFields"] = array();
$tdataalertsinpersuasivo[".ShortName"] = "alertsinpersuasivo";
$tdataalertsinpersuasivo[".OwnerID"] = "";
$tdataalertsinpersuasivo[".OriginalTable"] = "dbo.Procesos";


$tdataalertsinpersuasivo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertsinpersuasivo[".originalPagesByType"] = $tdataalertsinpersuasivo[".pagesByType"];
$tdataalertsinpersuasivo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertsinpersuasivo[".originalPages"] = $tdataalertsinpersuasivo[".pages"];
$tdataalertsinpersuasivo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertsinpersuasivo[".originalDefaultPages"] = $tdataalertsinpersuasivo[".defaultPages"];

//	field labels
$fieldLabelsalertsinpersuasivo = array();
$fieldToolTipsalertsinpersuasivo = array();
$pageTitlesalertsinpersuasivo = array();
$placeHoldersalertsinpersuasivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertsinpersuasivo["Spanish"] = array();
	$fieldToolTipsalertsinpersuasivo["Spanish"] = array();
	$placeHoldersalertsinpersuasivo["Spanish"] = array();
	$pageTitlesalertsinpersuasivo["Spanish"] = array();
	$fieldLabelsalertsinpersuasivo["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Fecha"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Fecha"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Numero"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Numero"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Providencia"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Providencia"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Notificacion"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Notificacion"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Sancionado"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["Saldo"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["Saldo"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["DiasSinOficPersuasivo"] = "Dias Sin Ofic Persuasivo";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["DiasSinOficPersuasivo"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["DiasSinOficPersuasivo"] = "";
	$fieldLabelsalertsinpersuasivo["Spanish"]["FechaEmitirPersuasivo"] = "Fecha Emitir Persuasivo";
	$fieldToolTipsalertsinpersuasivo["Spanish"]["FechaEmitirPersuasivo"] = "";
	$placeHoldersalertsinpersuasivo["Spanish"]["FechaEmitirPersuasivo"] = "";
	if (count($fieldToolTipsalertsinpersuasivo["Spanish"]))
		$tdataalertsinpersuasivo[".isUseToolTips"] = true;
}


	$tdataalertsinpersuasivo[".NCSearch"] = true;



$tdataalertsinpersuasivo[".shortTableName"] = "alertsinpersuasivo";
$tdataalertsinpersuasivo[".nSecOptions"] = 0;

$tdataalertsinpersuasivo[".mainTableOwnerID"] = "";
$tdataalertsinpersuasivo[".entityType"] = 1;
$tdataalertsinpersuasivo[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertsinpersuasivo[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertsinpersuasivo[".showAddInPopup"] = false;

$tdataalertsinpersuasivo[".showEditInPopup"] = false;

$tdataalertsinpersuasivo[".showViewInPopup"] = false;

$tdataalertsinpersuasivo[".listAjax"] = false;
//	temporary
//$tdataalertsinpersuasivo[".listAjax"] = false;

	$tdataalertsinpersuasivo[".audit"] = true;

	$tdataalertsinpersuasivo[".locking"] = false;


$pages = $tdataalertsinpersuasivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertsinpersuasivo[".edit"] = true;
	$tdataalertsinpersuasivo[".afterEditAction"] = 1;
	$tdataalertsinpersuasivo[".closePopupAfterEdit"] = 1;
	$tdataalertsinpersuasivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertsinpersuasivo[".add"] = true;
$tdataalertsinpersuasivo[".afterAddAction"] = 1;
$tdataalertsinpersuasivo[".closePopupAfterAdd"] = 1;
$tdataalertsinpersuasivo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertsinpersuasivo[".list"] = true;
}



$tdataalertsinpersuasivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertsinpersuasivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertsinpersuasivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertsinpersuasivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertsinpersuasivo[".printFriendly"] = true;
}



$tdataalertsinpersuasivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertsinpersuasivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertsinpersuasivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertsinpersuasivo[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																												

$tdataalertsinpersuasivo[".ajaxCodeSnippetAdded"] = false;

$tdataalertsinpersuasivo[".buttonsAdded"] = false;

$tdataalertsinpersuasivo[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertsinpersuasivo[".isUseTimeForSearch"] = false;


$tdataalertsinpersuasivo[".badgeColor"] = "EDCA00";


$tdataalertsinpersuasivo[".allSearchFields"] = array();
$tdataalertsinpersuasivo[".filterFields"] = array();
$tdataalertsinpersuasivo[".requiredSearchFields"] = array();

$tdataalertsinpersuasivo[".googleLikeFields"] = array();
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Numero";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Fecha";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Sancionado";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Saldo";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Providencia";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Ejecutoria";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "Notificacion";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "DiasSinOficPersuasivo";
$tdataalertsinpersuasivo[".googleLikeFields"][] = "FechaEmitirPersuasivo";



$tdataalertsinpersuasivo[".tableType"] = "list";

$tdataalertsinpersuasivo[".printerPageOrientation"] = 0;
$tdataalertsinpersuasivo[".nPrinterPageScale"] = 100;

$tdataalertsinpersuasivo[".nPrinterSplitRecords"] = 40;

$tdataalertsinpersuasivo[".geocodingEnabled"] = false;




$tdataalertsinpersuasivo[".isDisplayLoading"] = true;

$tdataalertsinpersuasivo[".isResizeColumns"] = true;





$tdataalertsinpersuasivo[".pageSize"] = 20;

$tdataalertsinpersuasivo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertsinpersuasivo[".strOrderBy"] = $tstrOrderBy;

$tdataalertsinpersuasivo[".orderindexes"] = array();


$tdataalertsinpersuasivo[".sqlHead"] = "SELECT Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.Fecha)) AS DiasSinOficPersuasivo,   DATEADD(day, Alertas.Dias, Procesos.Fecha) AS FechaEmitirPersuasivo";
$tdataalertsinpersuasivo[".sqlFrom"] = "FROM Procesos  					  INNER JOIN Sancionados on Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdataalertsinpersuasivo[".sqlWhereExpr"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 1)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 6) -- Procesos sin Oficio Persuasivo                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.Persuasivo IS NULL)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL)";
$tdataalertsinpersuasivo[".sqlTail"] = "";

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
$tdataalertsinpersuasivo[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataalertsinpersuasivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertsinpersuasivo[".arrGroupsPerPage"] = $arrGPP;

$tdataalertsinpersuasivo[".highlightSearchResults"] = true;

$tableKeysalertsinpersuasivo = array();
$tdataalertsinpersuasivo[".Keys"] = $tableKeysalertsinpersuasivo;


$tdataalertsinpersuasivo[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Numero");
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


	$tdataalertsinpersuasivo["Numero"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Fecha");
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


	$tdataalertsinpersuasivo["Fecha"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Sancionado");
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


	$tdataalertsinpersuasivo["Sancionado"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Saldo");
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


	$tdataalertsinpersuasivo["Saldo"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Providencia");
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


	$tdataalertsinpersuasivo["Providencia"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Ejecutoria");
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


	$tdataalertsinpersuasivo["Ejecutoria"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","Notificacion");
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


	$tdataalertsinpersuasivo["Notificacion"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "Notificacion";
//	DiasSinOficPersuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DiasSinOficPersuasivo";
	$fdata["GoodName"] = "DiasSinOficPersuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","DiasSinOficPersuasivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasSinOficPersuasivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.Fecha))";

	
	
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


	$tdataalertsinpersuasivo["DiasSinOficPersuasivo"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "DiasSinOficPersuasivo";
//	FechaEmitirPersuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaEmitirPersuasivo";
	$fdata["GoodName"] = "FechaEmitirPersuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertSinPersuasivo","FechaEmitirPersuasivo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechaEmitirPersuasivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEADD(day, Alertas.Dias, Procesos.Fecha)";

	
	
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


	$tdataalertsinpersuasivo["FechaEmitirPersuasivo"] = $fdata;
		$tdataalertsinpersuasivo[".searchableFields"][] = "FechaEmitirPersuasivo";


$tables_data["AlertSinPersuasivo"]=&$tdataalertsinpersuasivo;
$field_labels["AlertSinPersuasivo"] = &$fieldLabelsalertsinpersuasivo;
$fieldToolTips["AlertSinPersuasivo"] = &$fieldToolTipsalertsinpersuasivo;
$placeHolders["AlertSinPersuasivo"] = &$placeHoldersalertsinpersuasivo;
$page_titles["AlertSinPersuasivo"] = &$pageTitlesalertsinpersuasivo;


changeTextControlsToDate( "AlertSinPersuasivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertSinPersuasivo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertSinPersuasivo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertsinpersuasivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.Fecha)) AS DiasSinOficPersuasivo,   DATEADD(day, Alertas.Dias, Procesos.Fecha) AS FechaEmitirPersuasivo";
$proto0["m_strFrom"] = "FROM Procesos  					  INNER JOIN Sancionados on Sancionados.SancionadoId=Procesos.SancionadoId                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 1)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 6) -- Procesos sin Oficio Persuasivo                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.Persuasivo IS NULL)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 1)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 6) -- Procesos sin Oficio Persuasivo                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.Persuasivo IS NULL)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activo                        AND (Procesos.EtapaId = 1)                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 6) -- Procesos sin Oficio Persuasivo                        AND (Procesos.AbogadoId = :session.AbogadoId)                        AND (Procesos.Persuasivo IS NULL)                        AND (Procesos.ConceptoId <> 2) --concepto poliza                        AND (Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertSinPersuasivo"
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
	"m_srcTableName" => "AlertSinPersuasivo"
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
$proto8["m_sql"] = "Procesos.EtapaId = 1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
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
$proto10["m_sql"] = "Procesos.CarteraTipoId = :session.CarteraTipoId";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
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
$proto12["m_sql"] = "AlertasTipos.AlertaTipoId = 6";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 6";
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
	"m_srcTableName" => "AlertSinPersuasivo"
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
$proto16["m_sql"] = "Procesos.Persuasivo IS NULL";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Persuasivo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "IS NULL";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "Procesos.ConceptoId <> 2";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "<> 2";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto2["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL";
$proto20["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "Procesos.Acuerdo IS NULL";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "IS NULL";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto20["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "NOT Procesos.Incumplimiento IS NULL";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Incumplimiento IS NULL"
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
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto28["m_sql"] = "Procesos.Numero";
$proto28["m_srcTableName"] = "AlertSinPersuasivo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto30["m_sql"] = "Procesos.Fecha";
$proto30["m_srcTableName"] = "AlertSinPersuasivo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto32["m_sql"] = "Sancionados.Sancionado";
$proto32["m_srcTableName"] = "AlertSinPersuasivo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto34["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto34["m_srcTableName"] = "AlertSinPersuasivo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto36["m_sql"] = "Procesos.Providencia";
$proto36["m_srcTableName"] = "AlertSinPersuasivo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto38["m_sql"] = "Procesos.Ejecutoria";
$proto38["m_srcTableName"] = "AlertSinPersuasivo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto40["m_sql"] = "Procesos.Notificacion";
$proto40["m_srcTableName"] = "AlertSinPersuasivo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, Alertas.Dias, Procesos.Fecha)"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, Procesos.Fecha))";
$proto42["m_srcTableName"] = "AlertSinPersuasivo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "DiasSinOficPersuasivo";
$obj = new SQLFieldListItem($proto42);

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
	"m_sql" => "Alertas.Dias"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.Fecha"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "DATEADD";
$obj = new SQLFunctionCall($proto48);

$proto47["m_sql"] = "DATEADD(day, Alertas.Dias, Procesos.Fecha)";
$proto47["m_srcTableName"] = "AlertSinPersuasivo";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "FechaEmitirPersuasivo";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Procesos";
$proto53["m_srcTableName"] = "AlertSinPersuasivo";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ProcesoId";
$proto53["m_columns"][] = "SeccionalId";
$proto53["m_columns"][] = "AbogadoId";
$proto53["m_columns"][] = "Fecha";
$proto53["m_columns"][] = "Numero";
$proto53["m_columns"][] = "DespachoId";
$proto53["m_columns"][] = "SancionadoId";
$proto53["m_columns"][] = "Providencia";
$proto53["m_columns"][] = "Ejecutoria";
$proto53["m_columns"][] = "ConceptoId";
$proto53["m_columns"][] = "EstadoId";
$proto53["m_columns"][] = "EtapaId";
$proto53["m_columns"][] = "Folios";
$proto53["m_columns"][] = "Tipo";
$proto53["m_columns"][] = "Cantidad";
$proto53["m_columns"][] = "Obligacion";
$proto53["m_columns"][] = "Costas";
$proto53["m_columns"][] = "Liquidacion";
$proto53["m_columns"][] = "Dias";
$proto53["m_columns"][] = "Intereses";
$proto53["m_columns"][] = "Recaudo";
$proto53["m_columns"][] = "CalificacionId";
$proto53["m_columns"][] = "Terminacion";
$proto53["m_columns"][] = "MotivoId";
$proto53["m_columns"][] = "Observaciones";
$proto53["m_columns"][] = "Cuotas";
$proto53["m_columns"][] = "Abono";
$proto53["m_columns"][] = "Inicio";
$proto53["m_columns"][] = "VlrCuota";
$proto53["m_columns"][] = "VlrIntereses";
$proto53["m_columns"][] = "Garantia";
$proto53["m_columns"][] = "Radicado";
$proto53["m_columns"][] = "Remisorio";
$proto53["m_columns"][] = "Acuerdo";
$proto53["m_columns"][] = "Incumplimiento";
$proto53["m_columns"][] = "Notificacion";
$proto53["m_columns"][] = "Suspension";
$proto53["m_columns"][] = "Traslado";
$proto53["m_columns"][] = "Error";
$proto53["m_columns"][] = "CarteraTipoId";
$proto53["m_columns"][] = "ConceptoAbogado";
$proto53["m_columns"][] = "Origen";
$proto53["m_columns"][] = "Carpeta";
$proto53["m_columns"][] = "ImportacionId";
$proto53["m_columns"][] = "ActuacionId";
$proto53["m_columns"][] = "ObligacionInicial";
$proto53["m_columns"][] = "CostasInicial";
$proto53["m_columns"][] = "InteresesInicial";
$proto53["m_columns"][] = "MinJusticia";
$proto53["m_columns"][] = "Revocatoria";
$proto53["m_columns"][] = "Mayor";
$proto53["m_columns"][] = "NotificacionValidada";
$proto53["m_columns"][] = "Validado";
$proto53["m_columns"][] = "Seleccionado";
$proto53["m_columns"][] = "CompetenciaId";
$proto53["m_columns"][] = "MinjusticiaId";
$proto53["m_columns"][] = "SeleccionadoPor";
$proto53["m_columns"][] = "Subsanar";
$proto53["m_columns"][] = "NumeroMinjusticia";
$proto53["m_columns"][] = "ProcesoIdOrigen";
$proto53["m_columns"][] = "SeleccionadoFecha";
$proto53["m_columns"][] = "InteresesIniciales";
$proto53["m_columns"][] = "InteresesCalculados";
$proto53["m_columns"][] = "ProcesoIdDestino";
$proto53["m_columns"][] = "RecaudoMinjusticia";
$proto53["m_columns"][] = "RecaudoTerminado";
$proto53["m_columns"][] = "Persuasivo";
$proto53["m_columns"][] = "ObligacionCreacion";
$proto53["m_columns"][] = "InteresesCreacion";
$proto53["m_columns"][] = "CostasCreacion";
$proto53["m_columns"][] = "Plazo";
$proto53["m_columns"][] = "NaturalezaId";
$proto53["m_columns"][] = "TrasladoCartera";
$proto53["m_columns"][] = "CarteraTipoIdOrigen";
$proto53["m_columns"][] = "TrasladoConcepto";
$proto53["m_columns"][] = "ConceptoIdOrigen";
$proto53["m_columns"][] = "AutorizadoPlazo";
$proto53["m_columns"][] = "AutorizadoFecha";
$proto53["m_columns"][] = "AutorizadoPor";
$proto53["m_columns"][] = "Reliquidacion";
$proto53["m_columns"][] = "ChequeoId";
$proto53["m_columns"][] = "VlrCostas";
$proto53["m_columns"][] = "VlrInteresesPlazo";
$proto53["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "Procesos";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "AlertSinPersuasivo";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "dbo.Sancionados";
$proto57["m_srcTableName"] = "AlertSinPersuasivo";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "SancionadoId";
$proto57["m_columns"][] = "Sancionado";
$proto57["m_columns"][] = "TipoDocumentoId";
$proto57["m_columns"][] = "Documento";
$proto57["m_columns"][] = "Email";
$proto57["m_columns"][] = "Celular";
$proto57["m_columns"][] = "Masculino";
$proto57["m_columns"][] = "Observaciones";
$proto57["m_columns"][] = "Fallecimiento";
$proto57["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN Sancionados on Sancionados.SancionadoId=Procesos.SancionadoId";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "AlertSinPersuasivo";
$proto58=array();
$proto58["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_CROSSJOIN";
			$proto61=array();
$proto61["m_strName"] = "dbo.AlertasTipos";
$proto61["m_srcTableName"] = "AlertSinPersuasivo";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "AlertaTipoId";
$proto61["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "CROSS JOIN AlertasTipos";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "AlertSinPersuasivo";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_INNERJOIN";
			$proto65=array();
$proto65["m_strName"] = "dbo.Alertas";
$proto65["m_srcTableName"] = "AlertSinPersuasivo";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "AlertaId";
$proto65["m_columns"][] = "AlertaTipoId";
$proto65["m_columns"][] = "Dias";
$proto65["m_columns"][] = "ActuacionId";
$proto65["m_columns"][] = "Activa";
$proto65["m_columns"][] = "Publicar";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "AlertSinPersuasivo";
$proto66=array();
$proto66["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertSinPersuasivo"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AlertSinPersuasivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertsinpersuasivo = createSqlQuery_alertsinpersuasivo();


	
		;

									

$tdataalertsinpersuasivo[".sqlquery"] = $queryData_alertsinpersuasivo;



include_once(getabspath("include/alertsinpersuasivo_events.php"));
$tdataalertsinpersuasivo[".hasEvents"] = true;

?>