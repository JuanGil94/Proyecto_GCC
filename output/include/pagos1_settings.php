<?php
$tdatapagos1 = array();
$tdatapagos1[".searchableFields"] = array();
$tdatapagos1[".ShortName"] = "pagos1";
$tdatapagos1[".OwnerID"] = "";
$tdatapagos1[".OriginalTable"] = "dbo.Pagos1";


$tdatapagos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapagos1[".originalPagesByType"] = $tdatapagos1[".pagesByType"];
$tdatapagos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapagos1[".originalPages"] = $tdatapagos1[".pages"];
$tdatapagos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatapagos1[".originalDefaultPages"] = $tdatapagos1[".defaultPages"];

//	field labels
$fieldLabelspagos1 = array();
$fieldToolTipspagos1 = array();
$pageTitlespagos1 = array();
$placeHolderspagos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspagos1["Spanish"] = array();
	$fieldToolTipspagos1["Spanish"] = array();
	$placeHolderspagos1["Spanish"] = array();
	$pageTitlespagos1["Spanish"] = array();
	$fieldLabelspagos1["Spanish"]["CuentaId"] = "No.Cuenta";
	$fieldToolTipspagos1["Spanish"]["CuentaId"] = "";
	$placeHolderspagos1["Spanish"]["CuentaId"] = "";
	$fieldLabelspagos1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipspagos1["Spanish"]["Fecha"] = "";
	$placeHolderspagos1["Spanish"]["Fecha"] = "";
	$fieldLabelspagos1["Spanish"]["Numero"] = "Numero";
	$fieldToolTipspagos1["Spanish"]["Numero"] = "";
	$placeHolderspagos1["Spanish"]["Numero"] = "";
	$fieldLabelspagos1["Spanish"]["Pago"] = "Recaudo";
	$fieldToolTipspagos1["Spanish"]["Pago"] = "";
	$placeHolderspagos1["Spanish"]["Pago"] = "";
	$fieldLabelspagos1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspagos1["Spanish"]["Observaciones"] = "";
	$placeHolderspagos1["Spanish"]["Observaciones"] = "";
	$fieldLabelspagos1["Spanish"]["TipoRecaudoId"] = "Tipo Recaudo Id";
	$fieldToolTipspagos1["Spanish"]["TipoRecaudoId"] = "";
	$placeHolderspagos1["Spanish"]["TipoRecaudoId"] = "";
	$fieldLabelspagos1["Spanish"]["ProcesoId"] = "No.Proceso";
	$fieldToolTipspagos1["Spanish"]["ProcesoId"] = "";
	$placeHolderspagos1["Spanish"]["ProcesoId"] = "";
	$pageTitlespagos1["Spanish"]["list"] = "Recaudos";
	if (count($fieldToolTipspagos1["Spanish"]))
		$tdatapagos1[".isUseToolTips"] = true;
}


	$tdatapagos1[".NCSearch"] = true;



$tdatapagos1[".shortTableName"] = "pagos1";
$tdatapagos1[".nSecOptions"] = 0;

$tdatapagos1[".mainTableOwnerID"] = "";
$tdatapagos1[".entityType"] = 0;
$tdatapagos1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapagos1[".strOriginalTableName"] = "dbo.Pagos1";

	



$tdatapagos1[".showAddInPopup"] = false;

$tdatapagos1[".showEditInPopup"] = false;

$tdatapagos1[".showViewInPopup"] = false;

$tdatapagos1[".listAjax"] = false;
//	temporary
//$tdatapagos1[".listAjax"] = false;

	$tdatapagos1[".audit"] = true;

	$tdatapagos1[".locking"] = false;


$pages = $tdatapagos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapagos1[".edit"] = true;
	$tdatapagos1[".afterEditAction"] = 1;
	$tdatapagos1[".closePopupAfterEdit"] = 1;
	$tdatapagos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapagos1[".add"] = true;
$tdatapagos1[".afterAddAction"] = 1;
$tdatapagos1[".closePopupAfterAdd"] = 1;
$tdatapagos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapagos1[".list"] = true;
}



$tdatapagos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapagos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapagos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapagos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapagos1[".printFriendly"] = true;
}



$tdatapagos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapagos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapagos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapagos1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																												
																																																																																																																							

$tdatapagos1[".ajaxCodeSnippetAdded"] = false;

$tdatapagos1[".buttonsAdded"] = true;

$tdatapagos1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapagos1[".isUseTimeForSearch"] = false;


$tdatapagos1[".badgeColor"] = "cd5c5c";


$tdatapagos1[".allSearchFields"] = array();
$tdatapagos1[".filterFields"] = array();
$tdatapagos1[".requiredSearchFields"] = array();

$tdatapagos1[".googleLikeFields"] = array();
$tdatapagos1[".googleLikeFields"][] = "CuentaId";
$tdatapagos1[".googleLikeFields"][] = "Fecha";
$tdatapagos1[".googleLikeFields"][] = "Numero";
$tdatapagos1[".googleLikeFields"][] = "Pago";
$tdatapagos1[".googleLikeFields"][] = "Observaciones";
$tdatapagos1[".googleLikeFields"][] = "TipoRecaudoId";
$tdatapagos1[".googleLikeFields"][] = "ProcesoId";



$tdatapagos1[".tableType"] = "list";

$tdatapagos1[".printerPageOrientation"] = 0;
$tdatapagos1[".nPrinterPageScale"] = 100;

$tdatapagos1[".nPrinterSplitRecords"] = 40;

$tdatapagos1[".geocodingEnabled"] = false;





$tdatapagos1[".isResizeColumns"] = true;





$tdatapagos1[".pageSize"] = 20;

$tdatapagos1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Fecha DESC";
$tdatapagos1[".strOrderBy"] = $tstrOrderBy;

$tdatapagos1[".orderindexes"] = array();
	$tdatapagos1[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "Fecha");



$tdatapagos1[".sqlHead"] = "SELECT CuentaId,Fecha,Numero,FORMAT(Pago, 'C', 'es-CO') AS Pago,Observaciones,TipoRecaudoId,ProcesoId";
$tdatapagos1[".sqlFrom"] = "FROM dbo.Pagos1";
$tdatapagos1[".sqlWhereExpr"] = "";
$tdatapagos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapagos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapagos1[".arrGroupsPerPage"] = $arrGPP;

$tdatapagos1[".highlightSearchResults"] = true;

$tableKeyspagos1 = array();
$tdatapagos1[".Keys"] = $tableKeyspagos1;


$tdatapagos1[".hideMobileList"] = array();




//	CuentaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CuentaId";
	$fdata["GoodName"] = "CuentaId";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","CuentaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CuentaId";

		$fdata["sourceSingle"] = "CuentaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CuentaId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Cuentas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CuentaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Cuenta+' - '+Numero";

				$edata["LookupWhere"] = "Activa=1 AND ConceptoId=:session.ConceptoId AND NaturalezaId=:session.NaturalezaId";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "Cuenta";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapagos1["CuentaId"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "CuentaId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	$tdatapagos1["Fecha"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "Fecha";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapagos1["Numero"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "Numero";
//	Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pago";
	$fdata["GoodName"] = "Pago";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","Pago");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Pago";

		$fdata["sourceSingle"] = "Pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Pago, 'C', 'es-CO')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Pago_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdatapagos1["Pago"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "Pago";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapagos1["Observaciones"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "Observaciones";
//	TipoRecaudoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoRecaudoId";
	$fdata["GoodName"] = "TipoRecaudoId";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","TipoRecaudoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoRecaudoId";

		$fdata["sourceSingle"] = "TipoRecaudoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoRecaudoId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.tipoRecaudo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoRecaudoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tipo";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapagos1["TipoRecaudoId"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "TipoRecaudoId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Pagos1";
	$fdata["Label"] = GetFieldLabel("dbo_Pagos1","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoId";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Procesos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Numero";

	

	
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


	$tdatapagos1["ProcesoId"] = $fdata;
		$tdatapagos1[".searchableFields"][] = "ProcesoId";


$tables_data["dbo.Pagos1"]=&$tdatapagos1;
$field_labels["dbo_Pagos1"] = &$fieldLabelspagos1;
$fieldToolTips["dbo_Pagos1"] = &$fieldToolTipspagos1;
$placeHolders["dbo_Pagos1"] = &$placeHolderspagos1;
$page_titles["dbo_Pagos1"] = &$pageTitlespagos1;


changeTextControlsToDate( "dbo.Pagos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Pagos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Pagos1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Pagos1"][0] = $masterParams;
				$masterTablesData["dbo.Pagos1"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Pagos1"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Pagos1"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Pagos1"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pagos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CuentaId,Fecha,Numero,FORMAT(Pago, 'C', 'es-CO') AS Pago,Observaciones,TipoRecaudoId,ProcesoId";
$proto0["m_strFrom"] = "FROM dbo.Pagos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
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
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "CuentaId",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto6["m_sql"] = "CuentaId";
$proto6["m_srcTableName"] = "dbo.Pagos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "dbo.Pagos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto10["m_sql"] = "Numero";
$proto10["m_srcTableName"] = "dbo.Pagos1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Pago"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "FORMAT(Pago, 'C', 'es-CO')";
$proto12["m_srcTableName"] = "dbo.Pagos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Pago";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto17["m_sql"] = "Observaciones";
$proto17["m_srcTableName"] = "dbo.Pagos1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoRecaudoId",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto19["m_sql"] = "TipoRecaudoId";
$proto19["m_srcTableName"] = "dbo.Pagos1";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto21["m_sql"] = "ProcesoId";
$proto21["m_srcTableName"] = "dbo.Pagos1";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "dbo.Pagos1";
$proto24["m_srcTableName"] = "dbo.Pagos1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "PagoId";
$proto24["m_columns"][] = "ProcesoId";
$proto24["m_columns"][] = "CuentaId";
$proto24["m_columns"][] = "Fecha";
$proto24["m_columns"][] = "Numero";
$proto24["m_columns"][] = "Pago";
$proto24["m_columns"][] = "Observaciones";
$proto24["m_columns"][] = "Registro";
$proto24["m_columns"][] = "PagoObli";
$proto24["m_columns"][] = "PagoCost";
$proto24["m_columns"][] = "PagoInte";
$proto24["m_columns"][] = "PagoMayo";
$proto24["m_columns"][] = "PagoTerm";
$proto24["m_columns"][] = "PagoIdOrig";
$proto24["m_columns"][] = "TipoRecaudoId";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "dbo.Pagos1";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "dbo.Pagos1";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Pagos1",
	"m_srcTableName" => "dbo.Pagos1"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Pagos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pagos1 = createSqlQuery_pagos1();


	
		;

							

$tdatapagos1[".sqlquery"] = $queryData_pagos1;



include_once(getabspath("include/pagos1_events.php"));
$tdatapagos1[".hasEvents"] = true;

?>