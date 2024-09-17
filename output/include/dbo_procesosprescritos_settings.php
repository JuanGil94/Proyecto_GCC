<?php
$tdatadbo_procesosprescritos = array();
$tdatadbo_procesosprescritos[".searchableFields"] = array();
$tdatadbo_procesosprescritos[".ShortName"] = "dbo_procesosprescritos";
$tdatadbo_procesosprescritos[".OwnerID"] = "";
$tdatadbo_procesosprescritos[".OriginalTable"] = "dbo.Procesos";


$tdatadbo_procesosprescritos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_procesosprescritos[".originalPagesByType"] = $tdatadbo_procesosprescritos[".pagesByType"];
$tdatadbo_procesosprescritos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_procesosprescritos[".originalPages"] = $tdatadbo_procesosprescritos[".pages"];
$tdatadbo_procesosprescritos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_procesosprescritos[".originalDefaultPages"] = $tdatadbo_procesosprescritos[".defaultPages"];

//	field labels
$fieldLabelsdbo_procesosprescritos = array();
$fieldToolTipsdbo_procesosprescritos = array();
$pageTitlesdbo_procesosprescritos = array();
$placeHoldersdbo_procesosprescritos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_procesosprescritos["Spanish"] = array();
	$fieldToolTipsdbo_procesosprescritos["Spanish"] = array();
	$placeHoldersdbo_procesosprescritos["Spanish"] = array();
	$pageTitlesdbo_procesosprescritos["Spanish"] = array();
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Numero"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Numero"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Providencia"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Providencia"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Notificacion"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Notificacion"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "Fecha Prescripcion";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["FechaPrescripcion"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Dias"] = "Prescripcion dias";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Dias"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Dias"] = "";
	$fieldLabelsdbo_procesosprescritos["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsdbo_procesosprescritos["Spanish"]["Saldo"] = "";
	$placeHoldersdbo_procesosprescritos["Spanish"]["Saldo"] = "";
	if (count($fieldToolTipsdbo_procesosprescritos["Spanish"]))
		$tdatadbo_procesosprescritos[".isUseToolTips"] = true;
}


	$tdatadbo_procesosprescritos[".NCSearch"] = true;



$tdatadbo_procesosprescritos[".shortTableName"] = "dbo_procesosprescritos";
$tdatadbo_procesosprescritos[".nSecOptions"] = 0;

$tdatadbo_procesosprescritos[".mainTableOwnerID"] = "";
$tdatadbo_procesosprescritos[".entityType"] = 1;
$tdatadbo_procesosprescritos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_procesosprescritos[".strOriginalTableName"] = "dbo.Procesos";

	



$tdatadbo_procesosprescritos[".showAddInPopup"] = false;

$tdatadbo_procesosprescritos[".showEditInPopup"] = false;

$tdatadbo_procesosprescritos[".showViewInPopup"] = false;

$tdatadbo_procesosprescritos[".listAjax"] = false;
//	temporary
//$tdatadbo_procesosprescritos[".listAjax"] = false;

	$tdatadbo_procesosprescritos[".audit"] = true;

	$tdatadbo_procesosprescritos[".locking"] = false;


$pages = $tdatadbo_procesosprescritos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_procesosprescritos[".edit"] = true;
	$tdatadbo_procesosprescritos[".afterEditAction"] = 1;
	$tdatadbo_procesosprescritos[".closePopupAfterEdit"] = 1;
	$tdatadbo_procesosprescritos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_procesosprescritos[".add"] = true;
$tdatadbo_procesosprescritos[".afterAddAction"] = 1;
$tdatadbo_procesosprescritos[".closePopupAfterAdd"] = 1;
$tdatadbo_procesosprescritos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_procesosprescritos[".list"] = true;
}



$tdatadbo_procesosprescritos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_procesosprescritos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_procesosprescritos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_procesosprescritos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_procesosprescritos[".printFriendly"] = true;
}



$tdatadbo_procesosprescritos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_procesosprescritos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_procesosprescritos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_procesosprescritos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																						

$tdatadbo_procesosprescritos[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_procesosprescritos[".buttonsAdded"] = false;

$tdatadbo_procesosprescritos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadbo_procesosprescritos[".isUseTimeForSearch"] = false;


$tdatadbo_procesosprescritos[".badgeColor"] = "DC143C";


$tdatadbo_procesosprescritos[".allSearchFields"] = array();
$tdatadbo_procesosprescritos[".filterFields"] = array();
$tdatadbo_procesosprescritos[".requiredSearchFields"] = array();

$tdatadbo_procesosprescritos[".googleLikeFields"] = array();
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Numero";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Providencia";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Ejecutoria";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Notificacion";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Dias";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "FechaPrescripcion";
$tdatadbo_procesosprescritos[".googleLikeFields"][] = "Saldo";



$tdatadbo_procesosprescritos[".tableType"] = "list";

$tdatadbo_procesosprescritos[".printerPageOrientation"] = 0;
$tdatadbo_procesosprescritos[".nPrinterPageScale"] = 100;

$tdatadbo_procesosprescritos[".nPrinterSplitRecords"] = 40;

$tdatadbo_procesosprescritos[".geocodingEnabled"] = false;




$tdatadbo_procesosprescritos[".isDisplayLoading"] = true;

$tdatadbo_procesosprescritos[".isResizeColumns"] = true;





$tdatadbo_procesosprescritos[".pageSize"] = 20;

$tdatadbo_procesosprescritos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Saldo DESC";
$tdatadbo_procesosprescritos[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_procesosprescritos[".orderindexes"] = array();
	$tdatadbo_procesosprescritos[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)");



$tdatadbo_procesosprescritos[".sqlHead"] = "SELECT Procesos.Numero,Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,Procesos.Dias,FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd') as FechaPrescripcion, (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo";
$tdatadbo_procesosprescritos[".sqlFrom"] = "FROM Procesos                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$tdatadbo_procesosprescritos[".sqlWhereExpr"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activos                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 1) -- Prescripción                        AND (AbogadoId = :session.AbogadoId)                        AND (FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')) <= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))";
$tdatadbo_procesosprescritos[".sqlTail"] = "";

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
$tdatadbo_procesosprescritos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_procesosprescritos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_procesosprescritos[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_procesosprescritos[".highlightSearchResults"] = true;

$tableKeysdbo_procesosprescritos = array();
$tdatadbo_procesosprescritos[".Keys"] = $tableKeysdbo_procesosprescritos;


$tdatadbo_procesosprescritos[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Numero");
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


	$tdatadbo_procesosprescritos["Numero"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Numero";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Providencia");
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


	$tdatadbo_procesosprescritos["Providencia"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Ejecutoria");
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


	$tdatadbo_procesosprescritos["Ejecutoria"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Ejecutoria";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Notificacion");
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


	$tdatadbo_procesosprescritos["Notificacion"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Notificacion";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Dias";

	
	
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


	$tdatadbo_procesosprescritos["Dias"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Dias";
//	FechaPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FechaPrescripcion";
	$fdata["GoodName"] = "FechaPrescripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","FechaPrescripcion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "FechaPrescripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')";

	
	
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


	$tdatadbo_procesosprescritos["FechaPrescripcion"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "FechaPrescripcion";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosPrescritos","Saldo");
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


	$tdatadbo_procesosprescritos["Saldo"] = $fdata;
		$tdatadbo_procesosprescritos[".searchableFields"][] = "Saldo";


$tables_data["dbo.ProcesosPrescritos"]=&$tdatadbo_procesosprescritos;
$field_labels["dbo_ProcesosPrescritos"] = &$fieldLabelsdbo_procesosprescritos;
$fieldToolTips["dbo_ProcesosPrescritos"] = &$fieldToolTipsdbo_procesosprescritos;
$placeHolders["dbo_ProcesosPrescritos"] = &$placeHoldersdbo_procesosprescritos;
$page_titles["dbo_ProcesosPrescritos"] = &$pageTitlesdbo_procesosprescritos;


changeTextControlsToDate( "dbo.ProcesosPrescritos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosPrescritos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosPrescritos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_procesosprescritos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Procesos.Numero,Procesos.Providencia,Procesos.Ejecutoria,Procesos.Notificacion,Procesos.Dias,FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd') as FechaPrescripcion, (Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) as Saldo";
$proto0["m_strFrom"] = "FROM Procesos                        CROSS JOIN AlertasTipos                        INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto0["m_strWhere"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activos                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 1) -- Prescripción                        AND (AbogadoId = :session.AbogadoId)                        AND (FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')) <= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))";
$proto0["m_strOrderBy"] = "ORDER BY Saldo DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activos                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 1) -- Prescripción                        AND (AbogadoId = :session.AbogadoId)                        AND (FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')) <= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Alertas.Activa = 1)                        AND (Procesos.EstadoId = 2) -- Activos                        AND (Procesos.CarteraTipoId = :session.CarteraTipoId)                        AND (AlertasTipos.AlertaTipoId = 1) -- Prescripción                        AND (AbogadoId = :session.AbogadoId)                        AND (FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')) <= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Alertas.Activa = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
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
	"m_srcTableName" => "dbo.ProcesosPrescritos"
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
	"m_srcTableName" => "dbo.ProcesosPrescritos"
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
$proto10["m_sql"] = "AlertasTipos.AlertaTipoId = 1";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.AlertasTipos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 1";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "AbogadoId = :session.AbogadoId";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
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
$proto14["m_sql"] = "(FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')) <= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd'))"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "<= (FORMAT(DATEADD(DAY,Alertas.Dias,GETDATE()),'yyyy/MM/dd'))";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto18["m_sql"] = "Procesos.Numero";
$proto18["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto20["m_sql"] = "Procesos.Providencia";
$proto20["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto22["m_sql"] = "Procesos.Ejecutoria";
$proto22["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto24["m_sql"] = "Procesos.Notificacion";
$proto24["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto26["m_sql"] = "Procesos.Dias";
$proto26["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATEADD(DAY,dbo.Procesos.Dias,GETDATE())"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'yyyy/MM/dd'"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')";
$proto28["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "FechaPrescripcion";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)"
));

$proto32["m_sql"] = "(Procesos.Obligacion+Procesos.Intereses+Procesos.Costas)";
$proto32["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "Saldo";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Procesos";
$proto35["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ProcesoId";
$proto35["m_columns"][] = "SeccionalId";
$proto35["m_columns"][] = "AbogadoId";
$proto35["m_columns"][] = "Fecha";
$proto35["m_columns"][] = "Numero";
$proto35["m_columns"][] = "DespachoId";
$proto35["m_columns"][] = "SancionadoId";
$proto35["m_columns"][] = "Providencia";
$proto35["m_columns"][] = "Ejecutoria";
$proto35["m_columns"][] = "ConceptoId";
$proto35["m_columns"][] = "EstadoId";
$proto35["m_columns"][] = "EtapaId";
$proto35["m_columns"][] = "Folios";
$proto35["m_columns"][] = "Tipo";
$proto35["m_columns"][] = "Cantidad";
$proto35["m_columns"][] = "Obligacion";
$proto35["m_columns"][] = "Costas";
$proto35["m_columns"][] = "Liquidacion";
$proto35["m_columns"][] = "Dias";
$proto35["m_columns"][] = "Intereses";
$proto35["m_columns"][] = "Recaudo";
$proto35["m_columns"][] = "CalificacionId";
$proto35["m_columns"][] = "Terminacion";
$proto35["m_columns"][] = "MotivoId";
$proto35["m_columns"][] = "Observaciones";
$proto35["m_columns"][] = "Cuotas";
$proto35["m_columns"][] = "Abono";
$proto35["m_columns"][] = "Inicio";
$proto35["m_columns"][] = "VlrCuota";
$proto35["m_columns"][] = "VlrIntereses";
$proto35["m_columns"][] = "Garantia";
$proto35["m_columns"][] = "Radicado";
$proto35["m_columns"][] = "Remisorio";
$proto35["m_columns"][] = "Acuerdo";
$proto35["m_columns"][] = "Incumplimiento";
$proto35["m_columns"][] = "Notificacion";
$proto35["m_columns"][] = "Suspension";
$proto35["m_columns"][] = "Traslado";
$proto35["m_columns"][] = "Error";
$proto35["m_columns"][] = "CarteraTipoId";
$proto35["m_columns"][] = "ConceptoAbogado";
$proto35["m_columns"][] = "Origen";
$proto35["m_columns"][] = "Carpeta";
$proto35["m_columns"][] = "ImportacionId";
$proto35["m_columns"][] = "ActuacionId";
$proto35["m_columns"][] = "ObligacionInicial";
$proto35["m_columns"][] = "CostasInicial";
$proto35["m_columns"][] = "InteresesInicial";
$proto35["m_columns"][] = "MinJusticia";
$proto35["m_columns"][] = "Revocatoria";
$proto35["m_columns"][] = "Mayor";
$proto35["m_columns"][] = "NotificacionValidada";
$proto35["m_columns"][] = "Validado";
$proto35["m_columns"][] = "Seleccionado";
$proto35["m_columns"][] = "CompetenciaId";
$proto35["m_columns"][] = "MinjusticiaId";
$proto35["m_columns"][] = "SeleccionadoPor";
$proto35["m_columns"][] = "Subsanar";
$proto35["m_columns"][] = "NumeroMinjusticia";
$proto35["m_columns"][] = "ProcesoIdOrigen";
$proto35["m_columns"][] = "SeleccionadoFecha";
$proto35["m_columns"][] = "InteresesIniciales";
$proto35["m_columns"][] = "InteresesCalculados";
$proto35["m_columns"][] = "ProcesoIdDestino";
$proto35["m_columns"][] = "RecaudoMinjusticia";
$proto35["m_columns"][] = "RecaudoTerminado";
$proto35["m_columns"][] = "Persuasivo";
$proto35["m_columns"][] = "ObligacionCreacion";
$proto35["m_columns"][] = "InteresesCreacion";
$proto35["m_columns"][] = "CostasCreacion";
$proto35["m_columns"][] = "Plazo";
$proto35["m_columns"][] = "NaturalezaId";
$proto35["m_columns"][] = "TrasladoCartera";
$proto35["m_columns"][] = "CarteraTipoIdOrigen";
$proto35["m_columns"][] = "TrasladoConcepto";
$proto35["m_columns"][] = "ConceptoIdOrigen";
$proto35["m_columns"][] = "AutorizadoPlazo";
$proto35["m_columns"][] = "AutorizadoFecha";
$proto35["m_columns"][] = "AutorizadoPor";
$proto35["m_columns"][] = "Reliquidacion";
$proto35["m_columns"][] = "ChequeoId";
$proto35["m_columns"][] = "VlrCostas";
$proto35["m_columns"][] = "VlrInteresesPlazo";
$proto35["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "Procesos";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_CROSSJOIN";
			$proto39=array();
$proto39["m_strName"] = "dbo.AlertasTipos";
$proto39["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "AlertaTipoId";
$proto39["m_columns"][] = "AlertaTipo";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "CROSS JOIN AlertasTipos";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
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
$proto43["m_strName"] = "dbo.Alertas";
$proto43["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "AlertaId";
$proto43["m_columns"][] = "AlertaTipoId";
$proto43["m_columns"][] = "Dias";
$proto43["m_columns"][] = "ActuacionId";
$proto43["m_columns"][] = "Activa";
$proto43["m_columns"][] = "Publicar";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "dbo.ProcesosPrescritos";
$proto44=array();
$proto44["m_sql"] = "dbo.Alertas.AlertaTipoId = dbo.AlertasTipos.AlertaTipoId";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.ProcesosPrescritos"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= dbo.AlertasTipos.AlertaTipoId";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Saldo"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ProcesosPrescritos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_procesosprescritos = createSqlQuery_dbo_procesosprescritos();


	
		;

							

$tdatadbo_procesosprescritos[".sqlquery"] = $queryData_dbo_procesosprescritos;



include_once(getabspath("include/dbo_procesosprescritos_events.php"));
$tdatadbo_procesosprescritos[".hasEvents"] = true;

?>