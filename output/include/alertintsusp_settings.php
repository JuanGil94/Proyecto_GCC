<?php
$tdataalertintsusp = array();
$tdataalertintsusp[".searchableFields"] = array();
$tdataalertintsusp[".ShortName"] = "alertintsusp";
$tdataalertintsusp[".OwnerID"] = "";
$tdataalertintsusp[".OriginalTable"] = "dbo.Procesos";


$tdataalertintsusp[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertintsusp[".originalPagesByType"] = $tdataalertintsusp[".pagesByType"];
$tdataalertintsusp[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertintsusp[".originalPages"] = $tdataalertintsusp[".pages"];
$tdataalertintsusp[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertintsusp[".originalDefaultPages"] = $tdataalertintsusp[".defaultPages"];

//	field labels
$fieldLabelsalertintsusp = array();
$fieldToolTipsalertintsusp = array();
$pageTitlesalertintsusp = array();
$placeHoldersalertintsusp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertintsusp["Spanish"] = array();
	$fieldToolTipsalertintsusp["Spanish"] = array();
	$placeHoldersalertintsusp["Spanish"] = array();
	$pageTitlesalertintsusp["Spanish"] = array();
	$fieldLabelsalertintsusp["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsalertintsusp["Spanish"]["Fecha"] = "";
	$placeHoldersalertintsusp["Spanish"]["Fecha"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsalertintsusp["Spanish"]["Numero"] = "";
	$placeHoldersalertintsusp["Spanish"]["Numero"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsalertintsusp["Spanish"]["Providencia"] = "";
	$placeHoldersalertintsusp["Spanish"]["Providencia"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsalertintsusp["Spanish"]["Ejecutoria"] = "";
	$placeHoldersalertintsusp["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsalertintsusp["Spanish"]["Sancionado"] = "";
	$placeHoldersalertintsusp["Spanish"]["Sancionado"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsalertintsusp["Spanish"]["Saldo"] = "";
	$placeHoldersalertintsusp["Spanish"]["Saldo"] = "";
	$fieldLabelsalertintsusp["Spanish"]["DiasActuacion"] = "Dias Actuacion";
	$fieldToolTipsalertintsusp["Spanish"]["DiasActuacion"] = "";
	$placeHoldersalertintsusp["Spanish"]["DiasActuacion"] = "";
	$fieldLabelsalertintsusp["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsalertintsusp["Spanish"]["Estado"] = "";
	$placeHoldersalertintsusp["Spanish"]["Estado"] = "";
	$fieldLabelsalertintsusp["Spanish"]["FechaInterrupcion"] = "Fecha Interrupcion";
	$fieldToolTipsalertintsusp["Spanish"]["FechaInterrupcion"] = "";
	$placeHoldersalertintsusp["Spanish"]["FechaInterrupcion"] = "";
	if (count($fieldToolTipsalertintsusp["Spanish"]))
		$tdataalertintsusp[".isUseToolTips"] = true;
}


	$tdataalertintsusp[".NCSearch"] = true;



$tdataalertintsusp[".shortTableName"] = "alertintsusp";
$tdataalertintsusp[".nSecOptions"] = 0;

$tdataalertintsusp[".mainTableOwnerID"] = "";
$tdataalertintsusp[".entityType"] = 1;
$tdataalertintsusp[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertintsusp[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataalertintsusp[".showAddInPopup"] = false;

$tdataalertintsusp[".showEditInPopup"] = false;

$tdataalertintsusp[".showViewInPopup"] = false;

$tdataalertintsusp[".listAjax"] = false;
//	temporary
//$tdataalertintsusp[".listAjax"] = false;

	$tdataalertintsusp[".audit"] = true;

	$tdataalertintsusp[".locking"] = false;


$pages = $tdataalertintsusp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertintsusp[".edit"] = true;
	$tdataalertintsusp[".afterEditAction"] = 1;
	$tdataalertintsusp[".closePopupAfterEdit"] = 1;
	$tdataalertintsusp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertintsusp[".add"] = true;
$tdataalertintsusp[".afterAddAction"] = 1;
$tdataalertintsusp[".closePopupAfterAdd"] = 1;
$tdataalertintsusp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertintsusp[".list"] = true;
}



$tdataalertintsusp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertintsusp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertintsusp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertintsusp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertintsusp[".printFriendly"] = true;
}



$tdataalertintsusp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertintsusp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertintsusp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertintsusp[".isUseAjaxSuggest"] = true;



																																																																																																

$tdataalertintsusp[".ajaxCodeSnippetAdded"] = false;

$tdataalertintsusp[".buttonsAdded"] = false;

$tdataalertintsusp[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertintsusp[".isUseTimeForSearch"] = false;


$tdataalertintsusp[".badgeColor"] = "2F4F4F";


$tdataalertintsusp[".allSearchFields"] = array();
$tdataalertintsusp[".filterFields"] = array();
$tdataalertintsusp[".requiredSearchFields"] = array();

$tdataalertintsusp[".googleLikeFields"] = array();
$tdataalertintsusp[".googleLikeFields"][] = "Numero";
$tdataalertintsusp[".googleLikeFields"][] = "Fecha";
$tdataalertintsusp[".googleLikeFields"][] = "Sancionado";
$tdataalertintsusp[".googleLikeFields"][] = "Saldo";
$tdataalertintsusp[".googleLikeFields"][] = "Providencia";
$tdataalertintsusp[".googleLikeFields"][] = "Ejecutoria";
$tdataalertintsusp[".googleLikeFields"][] = "FechaInterrupcion";
$tdataalertintsusp[".googleLikeFields"][] = "DiasActuacion";
$tdataalertintsusp[".googleLikeFields"][] = "Estado";



$tdataalertintsusp[".tableType"] = "list";

$tdataalertintsusp[".printerPageOrientation"] = 0;
$tdataalertintsusp[".nPrinterPageScale"] = 100;

$tdataalertintsusp[".nPrinterSplitRecords"] = 40;

$tdataalertintsusp[".geocodingEnabled"] = false;




$tdataalertintsusp[".isDisplayLoading"] = true;

$tdataalertintsusp[".isResizeColumns"] = true;





$tdataalertintsusp[".pageSize"] = 20;

$tdataalertintsusp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertintsusp[".strOrderBy"] = $tstrOrderBy;

$tdataalertintsusp[".orderindexes"] = array();


$tdataalertintsusp[".sqlHead"] = "SELECT Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,  InterrupcionesMaxView.Inicio as FechaInterrupcion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, InterrupcionesMaxView.Inicio)) AS DiasActuacion,  Estados.Estado";
$tdataalertintsusp[".sqlFrom"] = "FROM Procesos  INNER JOIN Estados ON Estados.EstadoId=Procesos.EstadoId  INNER JOIN InterrupcionesMaxView ON InterrupcionesMaxView.ProcesoId=Procesos.ProcesoId  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId  CROSS JOIN AlertasTipos  INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdataalertintsusp[".sqlWhereExpr"] = "(Alertas.Activa = 1)          AND (Procesos.EstadoId IN(4, 5))      AND (AlertasTipos.AlertaTipoId = 9)      AND (Procesos.CarteraTipoId = :session.CarteraTipoId)      AND (Procesos.AbogadoId = :session.AbogadoId)";
$tdataalertintsusp[".sqlTail"] = "";

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
$tdataalertintsusp[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalertintsusp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertintsusp[".arrGroupsPerPage"] = $arrGPP;

$tdataalertintsusp[".highlightSearchResults"] = true;

$tableKeysalertintsusp = array();
$tdataalertintsusp[".Keys"] = $tableKeysalertintsusp;


$tdataalertintsusp[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Numero");
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


	$tdataalertintsusp["Numero"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Numero";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Fecha");
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


	$tdataalertintsusp["Fecha"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Fecha";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Sancionado");
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


	$tdataalertintsusp["Sancionado"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Sancionado";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Saldo");
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


	$tdataalertintsusp["Saldo"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Saldo";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Providencia");
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


	$tdataalertintsusp["Providencia"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Ejecutoria");
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


	$tdataalertintsusp["Ejecutoria"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Ejecutoria";
//	FechaInterrupcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaInterrupcion";
	$fdata["GoodName"] = "FechaInterrupcion";
	$fdata["ownerTable"] = "dbo.InterrupcionesMaxView";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","FechaInterrupcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterrupcionesMaxView.Inicio";

	
	
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


	$tdataalertintsusp["FechaInterrupcion"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "FechaInterrupcion";
//	DiasActuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DiasActuacion";
	$fdata["GoodName"] = "DiasActuacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","DiasActuacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasActuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, InterrupcionesMaxView.Inicio))";

	
	
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


	$tdataalertintsusp["DiasActuacion"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "DiasActuacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("AlertIntSusp","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estados.Estado";

	
	
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


	$tdataalertintsusp["Estado"] = $fdata;
		$tdataalertintsusp[".searchableFields"][] = "Estado";


$tables_data["AlertIntSusp"]=&$tdataalertintsusp;
$field_labels["AlertIntSusp"] = &$fieldLabelsalertintsusp;
$fieldToolTips["AlertIntSusp"] = &$fieldToolTipsalertintsusp;
$placeHolders["AlertIntSusp"] = &$placeHoldersalertintsusp;
$page_titles["AlertIntSusp"] = &$pageTitlesalertintsusp;


changeTextControlsToDate( "AlertIntSusp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AlertIntSusp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AlertIntSusp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertintsusp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Procesos.Fecha,Sancionados.Sancionado,  (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo,  Procesos.Providencia,Procesos.Ejecutoria,  InterrupcionesMaxView.Inicio as FechaInterrupcion,  DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, InterrupcionesMaxView.Inicio)) AS DiasActuacion,  Estados.Estado";
$proto0["m_strFrom"] = "FROM Procesos  INNER JOIN Estados ON Estados.EstadoId=Procesos.EstadoId  INNER JOIN InterrupcionesMaxView ON InterrupcionesMaxView.ProcesoId=Procesos.ProcesoId  INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId  CROSS JOIN AlertasTipos  INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)          AND (Procesos.EstadoId IN(4, 5))      AND (AlertasTipos.AlertaTipoId = 9)      AND (Procesos.CarteraTipoId = :session.CarteraTipoId)      AND (Procesos.AbogadoId = :session.AbogadoId)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)          AND (Procesos.EstadoId IN(4, 5))      AND (AlertasTipos.AlertaTipoId = 9)      AND (Procesos.CarteraTipoId = :session.CarteraTipoId)      AND (Procesos.AbogadoId = :session.AbogadoId)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)          AND (Procesos.EstadoId IN(4, 5))      AND (AlertasTipos.AlertaTipoId = 9)      AND (Procesos.CarteraTipoId = :session.CarteraTipoId)      AND (Procesos.AbogadoId = :session.AbogadoId)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertIntSusp"
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
$proto6["m_sql"] = "Procesos.EstadoId IN(4, 5)";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IN(4, 5)";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "AlertasTipos.AlertaTipoId = 9";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 9";
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
	"m_srcTableName" => "AlertIntSusp"
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
$proto12["m_sql"] = "Procesos.AbogadoId = :session.AbogadoId";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= :session.AbogadoId";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto16["m_sql"] = "Procesos.Numero";
$proto16["m_srcTableName"] = "AlertIntSusp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto18["m_sql"] = "Procesos.Fecha";
$proto18["m_srcTableName"] = "AlertIntSusp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertIntSusp"
));

$proto20["m_sql"] = "Sancionados.Sancionado";
$proto20["m_srcTableName"] = "AlertIntSusp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto22["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto22["m_srcTableName"] = "AlertIntSusp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto24["m_sql"] = "Procesos.Providencia";
$proto24["m_srcTableName"] = "AlertIntSusp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "AlertIntSusp"
));

$proto26["m_sql"] = "Procesos.Ejecutoria";
$proto26["m_srcTableName"] = "AlertIntSusp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Inicio",
	"m_strTable" => "dbo.InterrupcionesMaxView",
	"m_srcTableName" => "AlertIntSusp"
));

$proto28["m_sql"] = "InterrupcionesMaxView.Inicio";
$proto28["m_srcTableName"] = "AlertIntSusp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "FechaInterrupcion";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "day"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "GETDATE()"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(day, Alertas.Dias, InterrupcionesMaxView.Inicio)"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, InterrupcionesMaxView.Inicio))";
$proto30["m_srcTableName"] = "AlertIntSusp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "DiasActuacion";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "dbo.Estados",
	"m_srcTableName" => "AlertIntSusp"
));

$proto35["m_sql"] = "Estados.Estado";
$proto35["m_srcTableName"] = "AlertIntSusp";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "dbo.Procesos";
$proto38["m_srcTableName"] = "AlertIntSusp";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "ProcesoId";
$proto38["m_columns"][] = "SeccionalId";
$proto38["m_columns"][] = "AbogadoId";
$proto38["m_columns"][] = "Fecha";
$proto38["m_columns"][] = "Numero";
$proto38["m_columns"][] = "DespachoId";
$proto38["m_columns"][] = "SancionadoId";
$proto38["m_columns"][] = "Providencia";
$proto38["m_columns"][] = "Ejecutoria";
$proto38["m_columns"][] = "ConceptoId";
$proto38["m_columns"][] = "EstadoId";
$proto38["m_columns"][] = "EtapaId";
$proto38["m_columns"][] = "Folios";
$proto38["m_columns"][] = "Tipo";
$proto38["m_columns"][] = "Cantidad";
$proto38["m_columns"][] = "Obligacion";
$proto38["m_columns"][] = "Costas";
$proto38["m_columns"][] = "Liquidacion";
$proto38["m_columns"][] = "Dias";
$proto38["m_columns"][] = "Intereses";
$proto38["m_columns"][] = "Recaudo";
$proto38["m_columns"][] = "CalificacionId";
$proto38["m_columns"][] = "Terminacion";
$proto38["m_columns"][] = "MotivoId";
$proto38["m_columns"][] = "Observaciones";
$proto38["m_columns"][] = "Cuotas";
$proto38["m_columns"][] = "Abono";
$proto38["m_columns"][] = "Inicio";
$proto38["m_columns"][] = "VlrCuota";
$proto38["m_columns"][] = "VlrIntereses";
$proto38["m_columns"][] = "Garantia";
$proto38["m_columns"][] = "Radicado";
$proto38["m_columns"][] = "Remisorio";
$proto38["m_columns"][] = "Acuerdo";
$proto38["m_columns"][] = "Incumplimiento";
$proto38["m_columns"][] = "Notificacion";
$proto38["m_columns"][] = "Suspension";
$proto38["m_columns"][] = "Traslado";
$proto38["m_columns"][] = "Error";
$proto38["m_columns"][] = "CarteraTipoId";
$proto38["m_columns"][] = "ConceptoAbogado";
$proto38["m_columns"][] = "Origen";
$proto38["m_columns"][] = "Carpeta";
$proto38["m_columns"][] = "ImportacionId";
$proto38["m_columns"][] = "ActuacionId";
$proto38["m_columns"][] = "ObligacionInicial";
$proto38["m_columns"][] = "CostasInicial";
$proto38["m_columns"][] = "InteresesInicial";
$proto38["m_columns"][] = "MinJusticia";
$proto38["m_columns"][] = "Revocatoria";
$proto38["m_columns"][] = "Mayor";
$proto38["m_columns"][] = "NotificacionValidada";
$proto38["m_columns"][] = "Validado";
$proto38["m_columns"][] = "Seleccionado";
$proto38["m_columns"][] = "CompetenciaId";
$proto38["m_columns"][] = "MinjusticiaId";
$proto38["m_columns"][] = "SeleccionadoPor";
$proto38["m_columns"][] = "Subsanar";
$proto38["m_columns"][] = "NumeroMinjusticia";
$proto38["m_columns"][] = "ProcesoIdOrigen";
$proto38["m_columns"][] = "SeleccionadoFecha";
$proto38["m_columns"][] = "InteresesIniciales";
$proto38["m_columns"][] = "InteresesCalculados";
$proto38["m_columns"][] = "ProcesoIdDestino";
$proto38["m_columns"][] = "RecaudoMinjusticia";
$proto38["m_columns"][] = "RecaudoTerminado";
$proto38["m_columns"][] = "Persuasivo";
$proto38["m_columns"][] = "ObligacionCreacion";
$proto38["m_columns"][] = "InteresesCreacion";
$proto38["m_columns"][] = "CostasCreacion";
$proto38["m_columns"][] = "Plazo";
$proto38["m_columns"][] = "NaturalezaId";
$proto38["m_columns"][] = "TrasladoCartera";
$proto38["m_columns"][] = "CarteraTipoIdOrigen";
$proto38["m_columns"][] = "TrasladoConcepto";
$proto38["m_columns"][] = "ConceptoIdOrigen";
$proto38["m_columns"][] = "AutorizadoPlazo";
$proto38["m_columns"][] = "AutorizadoFecha";
$proto38["m_columns"][] = "AutorizadoPor";
$proto38["m_columns"][] = "Reliquidacion";
$proto38["m_columns"][] = "ChequeoId";
$proto38["m_columns"][] = "VlrCostas";
$proto38["m_columns"][] = "VlrInteresesPlazo";
$proto38["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "Procesos";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "AlertIntSusp";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "dbo.Estados";
$proto42["m_srcTableName"] = "AlertIntSusp";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "EstadoId";
$proto42["m_columns"][] = "Estado";
$proto42["m_columns"][] = "Tipo";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN Estados ON Estados.EstadoId=Procesos.EstadoId";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "AlertIntSusp";
$proto43=array();
$proto43["m_sql"] = "dbo.Estados.EstadoId = dbo.Procesos.EstadoId";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Estados",
	"m_srcTableName" => "AlertIntSusp"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= dbo.Procesos.EstadoId";
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
$proto46["m_strName"] = "dbo.InterrupcionesMaxView";
$proto46["m_srcTableName"] = "AlertIntSusp";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "ProcesoId";
$proto46["m_columns"][] = "Inicio";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN InterrupcionesMaxView ON InterrupcionesMaxView.ProcesoId=Procesos.ProcesoId";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "AlertIntSusp";
$proto47=array();
$proto47["m_sql"] = "dbo.InterrupcionesMaxView.ProcesoId = dbo.Procesos.ProcesoId";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.InterrupcionesMaxView",
	"m_srcTableName" => "AlertIntSusp"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= dbo.Procesos.ProcesoId";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "dbo.Sancionados";
$proto50["m_srcTableName"] = "AlertIntSusp";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "SancionadoId";
$proto50["m_columns"][] = "Sancionado";
$proto50["m_columns"][] = "TipoDocumentoId";
$proto50["m_columns"][] = "Documento";
$proto50["m_columns"][] = "Email";
$proto50["m_columns"][] = "Celular";
$proto50["m_columns"][] = "Masculino";
$proto50["m_columns"][] = "Observaciones";
$proto50["m_columns"][] = "Fallecimiento";
$proto50["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId=Procesos.SancionadoId";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "AlertIntSusp";
$proto51=array();
$proto51["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "AlertIntSusp"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_CROSSJOIN";
			$proto54=array();
$proto54["m_strName"] = "dbo.AlertasTipos";
$proto54["m_srcTableName"] = "AlertIntSusp";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "AlertaTipoId";
$proto54["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "CROSS JOIN AlertasTipos";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "AlertIntSusp";
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
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
$proto58["m_strName"] = "dbo.Alertas";
$proto58["m_srcTableName"] = "AlertIntSusp";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "AlertaId";
$proto58["m_columns"][] = "AlertaTipoId";
$proto58["m_columns"][] = "Dias";
$proto58["m_columns"][] = "ActuacionId";
$proto58["m_columns"][] = "Activa";
$proto58["m_columns"][] = "Publicar";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "AlertIntSusp";
$proto59=array();
$proto59["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "AlertIntSusp"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AlertIntSusp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertintsusp = createSqlQuery_alertintsusp();


	
		;

									

$tdataalertintsusp[".sqlquery"] = $queryData_alertintsusp;



include_once(getabspath("include/alertintsusp_events.php"));
$tdataalertintsusp[".hasEvents"] = true;

?>