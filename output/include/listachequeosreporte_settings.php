<?php
$tdatalistachequeosreporte = array();
$tdatalistachequeosreporte[".searchableFields"] = array();
$tdatalistachequeosreporte[".ShortName"] = "listachequeosreporte";
$tdatalistachequeosreporte[".OwnerID"] = "";
$tdatalistachequeosreporte[".OriginalTable"] = "dbo.Chequeos";


$tdatalistachequeosreporte[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatalistachequeosreporte[".originalPagesByType"] = $tdatalistachequeosreporte[".pagesByType"];
$tdatalistachequeosreporte[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatalistachequeosreporte[".originalPages"] = $tdatalistachequeosreporte[".pages"];
$tdatalistachequeosreporte[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatalistachequeosreporte[".originalDefaultPages"] = $tdatalistachequeosreporte[".defaultPages"];

//	field labels
$fieldLabelslistachequeosreporte = array();
$fieldToolTipslistachequeosreporte = array();
$pageTitleslistachequeosreporte = array();
$placeHolderslistachequeosreporte = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslistachequeosreporte["Spanish"] = array();
	$fieldToolTipslistachequeosreporte["Spanish"] = array();
	$placeHolderslistachequeosreporte["Spanish"] = array();
	$pageTitleslistachequeosreporte["Spanish"] = array();
	$fieldLabelslistachequeosreporte["Spanish"]["ChequeoId"] = "Chequeo";
	$fieldToolTipslistachequeosreporte["Spanish"]["ChequeoId"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["ChequeoId"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipslistachequeosreporte["Spanish"]["AbogadoId"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["AbogadoId"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipslistachequeosreporte["Spanish"]["Fecha"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Fecha"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipslistachequeosreporte["Spanish"]["DespachoId"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["DespachoId"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Origen"] = "Origen";
	$fieldToolTipslistachequeosreporte["Spanish"]["Origen"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Origen"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipslistachequeosreporte["Spanish"]["SeccionalId"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["SeccionalId"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipslistachequeosreporte["Spanish"]["Observaciones"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Observaciones"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipslistachequeosreporte["Spanish"]["Obligacion"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Obligacion"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["TramiteId"] = "Tramite";
	$fieldToolTipslistachequeosreporte["Spanish"]["TramiteId"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["TramiteId"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Fisico"] = "Fisico";
	$fieldToolTipslistachequeosreporte["Spanish"]["Fisico"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Fisico"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Digital"] = "Digital";
	$fieldToolTipslistachequeosreporte["Spanish"]["Digital"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Digital"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipslistachequeosreporte["Spanish"]["Seccional"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Seccional"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Abogado"] = "Creada Por";
	$fieldToolTipslistachequeosreporte["Spanish"]["Abogado"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Abogado"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipslistachequeosreporte["Spanish"]["Despacho"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Despacho"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Numero"] = "N. Proceso";
	$fieldToolTipslistachequeosreporte["Spanish"]["Numero"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Numero"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["Persuasivo"] = "F. Persuasivo";
	$fieldToolTipslistachequeosreporte["Spanish"]["Persuasivo"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["Persuasivo"] = "";
	$fieldLabelslistachequeosreporte["Spanish"]["AbogadoId1"] = "Abogado";
	$fieldToolTipslistachequeosreporte["Spanish"]["AbogadoId1"] = "";
	$placeHolderslistachequeosreporte["Spanish"]["AbogadoId1"] = "";
	if (count($fieldToolTipslistachequeosreporte["Spanish"]))
		$tdatalistachequeosreporte[".isUseToolTips"] = true;
}


	$tdatalistachequeosreporte[".NCSearch"] = true;



$tdatalistachequeosreporte[".shortTableName"] = "listachequeosreporte";
$tdatalistachequeosreporte[".nSecOptions"] = 0;

$tdatalistachequeosreporte[".mainTableOwnerID"] = "";
$tdatalistachequeosreporte[".entityType"] = 2;
$tdatalistachequeosreporte[".connId"] = "GCC_at_S00001_CCAD01";


$tdatalistachequeosreporte[".strOriginalTableName"] = "dbo.Chequeos";

	



$tdatalistachequeosreporte[".showAddInPopup"] = false;

$tdatalistachequeosreporte[".showEditInPopup"] = false;

$tdatalistachequeosreporte[".showViewInPopup"] = false;

$tdatalistachequeosreporte[".listAjax"] = false;
//	temporary
//$tdatalistachequeosreporte[".listAjax"] = false;

	$tdatalistachequeosreporte[".audit"] = false;

	$tdatalistachequeosreporte[".locking"] = false;


$pages = $tdatalistachequeosreporte[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistachequeosreporte[".edit"] = true;
	$tdatalistachequeosreporte[".afterEditAction"] = 1;
	$tdatalistachequeosreporte[".closePopupAfterEdit"] = 1;
	$tdatalistachequeosreporte[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistachequeosreporte[".add"] = true;
$tdatalistachequeosreporte[".afterAddAction"] = 1;
$tdatalistachequeosreporte[".closePopupAfterAdd"] = 1;
$tdatalistachequeosreporte[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistachequeosreporte[".list"] = true;
}



$tdatalistachequeosreporte[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistachequeosreporte[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistachequeosreporte[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistachequeosreporte[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistachequeosreporte[".printFriendly"] = true;
}



$tdatalistachequeosreporte[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistachequeosreporte[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistachequeosreporte[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistachequeosreporte[".isUseAjaxSuggest"] = true;



											
																																																																													

$tdatalistachequeosreporte[".ajaxCodeSnippetAdded"] = false;

$tdatalistachequeosreporte[".buttonsAdded"] = true;

$tdatalistachequeosreporte[".addPageEvents"] = true;

// use timepicker for search panel
$tdatalistachequeosreporte[".isUseTimeForSearch"] = false;


$tdatalistachequeosreporte[".badgeColor"] = "7B68EE";


$tdatalistachequeosreporte[".allSearchFields"] = array();
$tdatalistachequeosreporte[".filterFields"] = array();
$tdatalistachequeosreporte[".requiredSearchFields"] = array();

$tdatalistachequeosreporte[".googleLikeFields"] = array();
$tdatalistachequeosreporte[".googleLikeFields"][] = "ChequeoId";
$tdatalistachequeosreporte[".googleLikeFields"][] = "SeccionalId";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Seccional";
$tdatalistachequeosreporte[".googleLikeFields"][] = "AbogadoId";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Abogado";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Fecha";
$tdatalistachequeosreporte[".googleLikeFields"][] = "DespachoId";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Despacho";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Origen";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Obligacion";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Numero";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Persuasivo";
$tdatalistachequeosreporte[".googleLikeFields"][] = "AbogadoId1";
$tdatalistachequeosreporte[".googleLikeFields"][] = "TramiteId";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Fisico";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Digital";
$tdatalistachequeosreporte[".googleLikeFields"][] = "Observaciones";



$tdatalistachequeosreporte[".tableType"] = "report";

$tdatalistachequeosreporte[".printerPageOrientation"] = 0;
$tdatalistachequeosreporte[".nPrinterPageScale"] = 100;

$tdatalistachequeosreporte[".nPrinterSplitRecords"] = 40;

$tdatalistachequeosreporte[".geocodingEnabled"] = false;

//report settings

$tdatalistachequeosreporte[".reportPrintGroupsPerPage"] = 3;
$tdatalistachequeosreporte[".reportPrintRecordsPerPage"] = 40;

$tdatalistachequeosreporte[".pageSizeGroups"] = 5;
$tdatalistachequeosreporte[".pageSizeRecords"] = 20;


//end of report settings






$tdatalistachequeosreporte[".noRecordsFirstPage"] = true;




$tstrOrderBy = "ORDER BY 
			Seccionales.Seccional,
			Chequeos.ChequeoId";
$tdatalistachequeosreporte[".strOrderBy"] = $tstrOrderBy;

$tdatalistachequeosreporte[".orderindexes"] = array();
	$tdatalistachequeosreporte[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dbo.Seccionales.Seccional");

	$tdatalistachequeosreporte[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "dbo.Chequeos.ChequeoId");



$tdatalistachequeosreporte[".sqlHead"] = "      		SELECT Chequeos.ChequeoId,   			Seccionales.SeccionalId,  			Seccionales.Seccional,  			Abogados.AbogadoId,  			Abogados.Abogado,  			Chequeos.Fecha,   			Despachos.DespachoId,  			Despachos.Despacho,  			Chequeos.Origen,   			Chequeos.Obligacion,   			Procesos.Numero,   			Procesos.Persuasivo,  			(SELECT TOP (1) AbogadoId FROM Reasignaciones WHERE (ProcesoId = Procesos.ProcesoId) ORDER BY Fecha DESC) AS AbogadoId1,   			Chequeos.TramiteId,   			Chequeos.Fisico,   			Chequeos.Digital,   			Chequeos.Observaciones";
$tdatalistachequeosreporte[".sqlFrom"] = "FROM              			Chequeos   			INNER JOIN Abogados ON Chequeos.AbogadoId = Abogados.AbogadoId   			INNER JOIN Seccionales ON Abogados.SeccionalId = Seccionales.SeccionalId   			LEFT OUTER jOIN Procesos ON Chequeos.ChequeoId = Procesos.ChequeoId  			INNER JOIN Despachos ON Despachos.DespachoId = Chequeos.DespachoId";
$tdatalistachequeosreporte[".sqlWhereExpr"] = "";
$tdatalistachequeosreporte[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistachequeosreporte[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistachequeosreporte[".arrGroupsPerPage"] = $arrGPP;

$tdatalistachequeosreporte[".highlightSearchResults"] = true;

$tableKeyslistachequeosreporte = array();
$tableKeyslistachequeosreporte[] = "ChequeoId";
$tdatalistachequeosreporte[".Keys"] = $tableKeyslistachequeosreporte;


$tdatalistachequeosreporte[".hideMobileList"] = array();




//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","ChequeoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.ChequeoId";

	
	
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


	$tdatalistachequeosreporte["ChequeoId"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "ChequeoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","SeccionalId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seccionales.SeccionalId";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional";

				$edata["LookupWhere"] = "SeccionalId in (:session.SeccionalesWhere)";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AbogadoId";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "DespachoId";

	
	
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


	$tdatalistachequeosreporte["SeccionalId"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "SeccionalId";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seccionales.Seccional";

	
	
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


	$tdatalistachequeosreporte["Seccional"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Seccional";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","AbogadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogados.AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

				$edata["LookupWhere"] = "Activo=1";


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "SeccionalId", "lookup" => "SeccionalId" );

	
	

	
	
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


	$tdatalistachequeosreporte["AbogadoId"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "AbogadoId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogados.Abogado";

	
	
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


	$tdatalistachequeosreporte["Abogado"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Abogado";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Fecha";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ChequeoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatalistachequeosreporte["Fecha"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Fecha";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","DespachoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Despachos.DespachoId";

	
	
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
	$edata["LookupTable"] = "dbo.Despachos1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "D.Codigo + ' -  ' +D. Despacho";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "SeccionalId", "lookup" => "SeccionalId" );

	
	

	
	
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


	$tdatalistachequeosreporte["DespachoId"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "DespachoId";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Despachos.Despacho";

	
	
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


	$tdatalistachequeosreporte["Despacho"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Despacho";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

		$fdata["sourceSingle"] = "Origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Origen";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=23";

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


	$tdatalistachequeosreporte["Origen"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Origen";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "editing" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "change" );
	$eventsData[] = array( "name" => "cantidadLetras", "type" => "blur" );
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatalistachequeosreporte["Obligacion"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Obligacion";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Numero";

	
	
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


	$tdatalistachequeosreporte["Numero"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Numero";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Persuasivo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Persuasivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Persuasivo";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatalistachequeosreporte["Persuasivo"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Persuasivo";
//	AbogadoId1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AbogadoId1";
	$fdata["GoodName"] = "AbogadoId1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","AbogadoId1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SELECT TOP (1) AbogadoId FROM Reasignaciones WHERE (ProcesoId = Procesos.ProcesoId) ORDER BY Fecha DESC)";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ChequeoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalistachequeosreporte["AbogadoId1"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "AbogadoId1";
//	TramiteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TramiteId";
	$fdata["GoodName"] = "TramiteId";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","TramiteId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TramiteId";

		$fdata["sourceSingle"] = "TramiteId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.TramiteId";

	
	
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
	$edata["LookupTable"] = "dbo.Tramites";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TramiteId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tramite";

	

	
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ChequeoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalistachequeosreporte["TramiteId"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "TramiteId";
//	Fisico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Fisico";
	$fdata["GoodName"] = "Fisico";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Fisico");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Fisico";

		$fdata["sourceSingle"] = "Fisico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Fisico";

	
	
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


	$tdatalistachequeosreporte["Fisico"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Fisico";
//	Digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Digital";
	$fdata["GoodName"] = "Digital";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Digital");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Digital";

		$fdata["sourceSingle"] = "Digital";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Digital";

	
	
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


	$tdatalistachequeosreporte["Digital"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Digital";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Chequeos";
	$fdata["Label"] = GetFieldLabel("dbo_ListaChequeosReporte","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chequeos.Observaciones";

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalistachequeosreporte["Observaciones"] = $fdata;
		$tdatalistachequeosreporte[".searchableFields"][] = "Observaciones";


$tables_data["dbo.ListaChequeosReporte"]=&$tdatalistachequeosreporte;
$field_labels["dbo_ListaChequeosReporte"] = &$fieldLabelslistachequeosreporte;
$fieldToolTips["dbo_ListaChequeosReporte"] = &$fieldToolTipslistachequeosreporte;
$placeHolders["dbo_ListaChequeosReporte"] = &$placeHolderslistachequeosreporte;
$page_titles["dbo_ListaChequeosReporte"] = &$pageTitleslistachequeosreporte;


changeTextControlsToDate( "dbo.ListaChequeosReporte" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ListaChequeosReporte"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ListaChequeosReporte"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_listachequeosreporte()
{
$proto0=array();
$proto0["m_strHead"] = "      		SELECT";
$proto0["m_strFieldList"] = "Chequeos.ChequeoId,   			Seccionales.SeccionalId,  			Seccionales.Seccional,  			Abogados.AbogadoId,  			Abogados.Abogado,  			Chequeos.Fecha,   			Despachos.DespachoId,  			Despachos.Despacho,  			Chequeos.Origen,   			Chequeos.Obligacion,   			Procesos.Numero,   			Procesos.Persuasivo,  			(SELECT TOP (1) AbogadoId FROM Reasignaciones WHERE (ProcesoId = Procesos.ProcesoId) ORDER BY Fecha DESC) AS AbogadoId1,   			Chequeos.TramiteId,   			Chequeos.Fisico,   			Chequeos.Digital,   			Chequeos.Observaciones";
$proto0["m_strFrom"] = "FROM              			Chequeos   			INNER JOIN Abogados ON Chequeos.AbogadoId = Abogados.AbogadoId   			INNER JOIN Seccionales ON Abogados.SeccionalId = Seccionales.SeccionalId   			LEFT OUTER jOIN Procesos ON Chequeos.ChequeoId = Procesos.ChequeoId  			INNER JOIN Despachos ON Despachos.DespachoId = Chequeos.DespachoId";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY   			Seccionales.Seccional,  			Chequeos.ChequeoId";
	
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
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto6["m_sql"] = "Chequeos.ChequeoId";
$proto6["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto8["m_sql"] = "Seccionales.SeccionalId";
$proto8["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto10["m_sql"] = "Seccionales.Seccional";
$proto10["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto12["m_sql"] = "Abogados.AbogadoId";
$proto12["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto14["m_sql"] = "Abogados.Abogado";
$proto14["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto16["m_sql"] = "Chequeos.Fecha";
$proto16["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto18["m_sql"] = "Despachos.DespachoId";
$proto18["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto20["m_sql"] = "Despachos.Despacho";
$proto20["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto22["m_sql"] = "Chequeos.Origen";
$proto22["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto24["m_sql"] = "Chequeos.Obligacion";
$proto24["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto26["m_sql"] = "Procesos.Numero";
$proto26["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Persuasivo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto28["m_sql"] = "Procesos.Persuasivo";
$proto28["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_strHead"] = "SELECT TOP (1)";
$proto31["m_strFieldList"] = "AbogadoId";
$proto31["m_strFrom"] = "FROM Reasignaciones";
$proto31["m_strWhere"] = "(ProcesoId = Procesos.ProcesoId)";
$proto31["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
		;
			$proto31["cipherer"] = null;
$proto33=array();
$proto33["m_sql"] = "ProcesoId = Procesos.ProcesoId";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= Procesos.ProcesoId";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_where"] = $obj;
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto31["m_having"] = $obj;
$proto31["m_fieldlist"] = array();
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto37["m_sql"] = "AbogadoId";
$proto37["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto31["m_fieldlist"][]=$obj;
$proto31["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "dbo.Reasignaciones";
$proto40["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "ReasignacionId";
$proto40["m_columns"][] = "Fecha";
$proto40["m_columns"][] = "ProcesoId";
$proto40["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "Reasignaciones";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto31["m_fromlist"][]=$obj;
$proto31["m_groupby"] = array();
$proto31["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Reasignaciones",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto31["m_orderby"][]=$obj;					
$proto31["m_srcTableName"]="dbo.ListaChequeosReporte";		
$obj = new SQLQuery($proto31);

$proto30["m_sql"] = "(SELECT TOP (1) AbogadoId FROM Reasignaciones WHERE (ProcesoId = Procesos.ProcesoId) ORDER BY Fecha DESC)";
$proto30["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "AbogadoId1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "TramiteId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto45["m_sql"] = "Chequeos.TramiteId";
$proto45["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Fisico",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto47["m_sql"] = "Chequeos.Fisico";
$proto47["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Digital",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto49["m_sql"] = "Chequeos.Digital";
$proto49["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto51["m_sql"] = "Chequeos.Observaciones";
$proto51["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto53=array();
$proto53["m_link"] = "SQLL_MAIN";
			$proto54=array();
$proto54["m_strName"] = "dbo.Chequeos";
$proto54["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "ChequeoId";
$proto54["m_columns"][] = "ConceptoId";
$proto54["m_columns"][] = "AbogadoId";
$proto54["m_columns"][] = "Fecha";
$proto54["m_columns"][] = "DespachoId";
$proto54["m_columns"][] = "Origen";
$proto54["m_columns"][] = "Providencia";
$proto54["m_columns"][] = "Ejecutoria";
$proto54["m_columns"][] = "PrimeraCopia";
$proto54["m_columns"][] = "Autentica";
$proto54["m_columns"][] = "PrestaMeritoEjecutivo";
$proto54["m_columns"][] = "Clara";
$proto54["m_columns"][] = "Expresa";
$proto54["m_columns"][] = "ActualmenteExigible";
$proto54["m_columns"][] = "CompetenciaDEAJ";
$proto54["m_columns"][] = "FaltaRequisitos";
$proto54["m_columns"][] = "FaltaCompetencia";
$proto54["m_columns"][] = "PorPrescripcion";
$proto54["m_columns"][] = "SeccionalId";
$proto54["m_columns"][] = "Folios";
$proto54["m_columns"][] = "SeccionalIdDestino";
$proto54["m_columns"][] = "Observaciones";
$proto54["m_columns"][] = "Procesado";
$proto54["m_columns"][] = "Tipo";
$proto54["m_columns"][] = "FechaSancion";
$proto54["m_columns"][] = "Cantidad";
$proto54["m_columns"][] = "Obligacion";
$proto54["m_columns"][] = "Costas";
$proto54["m_columns"][] = "Remisorio";
$proto54["m_columns"][] = "CarteraTipoId";
$proto54["m_columns"][] = "MinJusticia";
$proto54["m_columns"][] = "Aprobado";
$proto54["m_columns"][] = "AprobadoPor";
$proto54["m_columns"][] = "FechaAprobacion";
$proto54["m_columns"][] = "Plazo";
$proto54["m_columns"][] = "NaturalezaId";
$proto54["m_columns"][] = "Sigobius";
$proto54["m_columns"][] = "Monto";
$proto54["m_columns"][] = "TramiteId";
$proto54["m_columns"][] = "Fisico";
$proto54["m_columns"][] = "Digital";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "Chequeos";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "dbo.ListaChequeosReporte";
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
$proto58["m_strName"] = "dbo.Abogados";
$proto58["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "AbogadoId";
$proto58["m_columns"][] = "Abogado";
$proto58["m_columns"][] = "Documento";
$proto58["m_columns"][] = "Tarjeta";
$proto58["m_columns"][] = "Direccion";
$proto58["m_columns"][] = "Telefonos";
$proto58["m_columns"][] = "Celular";
$proto58["m_columns"][] = "Email";
$proto58["m_columns"][] = "SeccionalId";
$proto58["m_columns"][] = "Masculino";
$proto58["m_columns"][] = "Activo";
$proto58["m_columns"][] = "Despacho";
$proto58["m_columns"][] = "Codificador";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "INNER JOIN Abogados ON Chequeos.AbogadoId = Abogados.AbogadoId";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto59=array();
$proto59["m_sql"] = "dbo.Abogados.AbogadoId = dbo.Chequeos.AbogadoId";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= dbo.Chequeos.AbogadoId";
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
$proto62["m_strName"] = "dbo.Seccionales";
$proto62["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "SeccionalId";
$proto62["m_columns"][] = "Codigo";
$proto62["m_columns"][] = "Seccional";
$proto62["m_columns"][] = "NIT";
$proto62["m_columns"][] = "CiudadId";
$proto62["m_columns"][] = "PiePagina";
$proto62["m_columns"][] = "Sigobius";
$proto62["m_columns"][] = "Email";
$proto62["m_columns"][] = "Direccion";
$proto62["m_columns"][] = "Telefonos";
$proto62["m_columns"][] = "PCI";
$proto62["m_columns"][] = "Contador";
$proto62["m_columns"][] = "ContadorCargo";
$proto62["m_columns"][] = "Director";
$proto62["m_columns"][] = "DirectorCargo";
$proto62["m_columns"][] = "Abogado";
$proto62["m_columns"][] = "AbogadoCargo";
$proto62["m_columns"][] = "Formato";
$proto62["m_columns"][] = "Corporacion";
$proto62["m_columns"][] = "Unidad";
$proto62["m_columns"][] = "Oficina";
$proto62["m_columns"][] = "Serie";
$proto62["m_columns"][] = "Subserie";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "INNER JOIN Seccionales ON Abogados.SeccionalId = Seccionales.SeccionalId";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto63=array();
$proto63["m_sql"] = "dbo.Seccionales.SeccionalId = dbo.Abogados.SeccionalId";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= dbo.Abogados.SeccionalId";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
												$proto65=array();
$proto65["m_link"] = "SQLL_LEFTJOIN";
			$proto66=array();
$proto66["m_strName"] = "dbo.Procesos";
$proto66["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "ProcesoId";
$proto66["m_columns"][] = "SeccionalId";
$proto66["m_columns"][] = "AbogadoId";
$proto66["m_columns"][] = "Fecha";
$proto66["m_columns"][] = "Numero";
$proto66["m_columns"][] = "DespachoId";
$proto66["m_columns"][] = "SancionadoId";
$proto66["m_columns"][] = "Providencia";
$proto66["m_columns"][] = "Ejecutoria";
$proto66["m_columns"][] = "ConceptoId";
$proto66["m_columns"][] = "EstadoId";
$proto66["m_columns"][] = "EtapaId";
$proto66["m_columns"][] = "Folios";
$proto66["m_columns"][] = "Tipo";
$proto66["m_columns"][] = "Cantidad";
$proto66["m_columns"][] = "Obligacion";
$proto66["m_columns"][] = "Costas";
$proto66["m_columns"][] = "Liquidacion";
$proto66["m_columns"][] = "Dias";
$proto66["m_columns"][] = "Intereses";
$proto66["m_columns"][] = "Recaudo";
$proto66["m_columns"][] = "CalificacionId";
$proto66["m_columns"][] = "Terminacion";
$proto66["m_columns"][] = "MotivoId";
$proto66["m_columns"][] = "Observaciones";
$proto66["m_columns"][] = "Cuotas";
$proto66["m_columns"][] = "Abono";
$proto66["m_columns"][] = "Inicio";
$proto66["m_columns"][] = "VlrCuota";
$proto66["m_columns"][] = "VlrIntereses";
$proto66["m_columns"][] = "Garantia";
$proto66["m_columns"][] = "Radicado";
$proto66["m_columns"][] = "Remisorio";
$proto66["m_columns"][] = "Acuerdo";
$proto66["m_columns"][] = "Incumplimiento";
$proto66["m_columns"][] = "Notificacion";
$proto66["m_columns"][] = "Suspension";
$proto66["m_columns"][] = "Traslado";
$proto66["m_columns"][] = "Error";
$proto66["m_columns"][] = "CarteraTipoId";
$proto66["m_columns"][] = "ConceptoAbogado";
$proto66["m_columns"][] = "Origen";
$proto66["m_columns"][] = "Carpeta";
$proto66["m_columns"][] = "ImportacionId";
$proto66["m_columns"][] = "ActuacionId";
$proto66["m_columns"][] = "ObligacionInicial";
$proto66["m_columns"][] = "CostasInicial";
$proto66["m_columns"][] = "InteresesInicial";
$proto66["m_columns"][] = "MinJusticia";
$proto66["m_columns"][] = "Revocatoria";
$proto66["m_columns"][] = "Mayor";
$proto66["m_columns"][] = "NotificacionValidada";
$proto66["m_columns"][] = "Validado";
$proto66["m_columns"][] = "Seleccionado";
$proto66["m_columns"][] = "CompetenciaId";
$proto66["m_columns"][] = "MinjusticiaId";
$proto66["m_columns"][] = "SeleccionadoPor";
$proto66["m_columns"][] = "Subsanar";
$proto66["m_columns"][] = "NumeroMinjusticia";
$proto66["m_columns"][] = "ProcesoIdOrigen";
$proto66["m_columns"][] = "SeleccionadoFecha";
$proto66["m_columns"][] = "InteresesIniciales";
$proto66["m_columns"][] = "InteresesCalculados";
$proto66["m_columns"][] = "ProcesoIdDestino";
$proto66["m_columns"][] = "RecaudoMinjusticia";
$proto66["m_columns"][] = "RecaudoTerminado";
$proto66["m_columns"][] = "Persuasivo";
$proto66["m_columns"][] = "ObligacionCreacion";
$proto66["m_columns"][] = "InteresesCreacion";
$proto66["m_columns"][] = "CostasCreacion";
$proto66["m_columns"][] = "Plazo";
$proto66["m_columns"][] = "NaturalezaId";
$proto66["m_columns"][] = "TrasladoCartera";
$proto66["m_columns"][] = "CarteraTipoIdOrigen";
$proto66["m_columns"][] = "TrasladoConcepto";
$proto66["m_columns"][] = "ConceptoIdOrigen";
$proto66["m_columns"][] = "AutorizadoPlazo";
$proto66["m_columns"][] = "AutorizadoFecha";
$proto66["m_columns"][] = "AutorizadoPor";
$proto66["m_columns"][] = "Reliquidacion";
$proto66["m_columns"][] = "ChequeoId";
$proto66["m_columns"][] = "VlrCostas";
$proto66["m_columns"][] = "VlrInteresesPlazo";
$proto66["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "LEFT OUTER jOIN Procesos ON Chequeos.ChequeoId = Procesos.ChequeoId";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto67=array();
$proto67["m_sql"] = "dbo.Procesos.ChequeoId = dbo.Chequeos.ChequeoId";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= dbo.Chequeos.ChequeoId";
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
$proto70["m_strName"] = "dbo.Despachos";
$proto70["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "DespachoId";
$proto70["m_columns"][] = "Codigo";
$proto70["m_columns"][] = "Despacho";
$proto70["m_columns"][] = "CiudadId";
$proto70["m_columns"][] = "Especialidad";
$proto70["m_columns"][] = "Subespecialidad";
$proto70["m_columns"][] = "Activo";
$proto70["m_columns"][] = "Juez";
$proto70["m_columns"][] = "Correo";
$proto70["m_columns"][] = "Telefonos";
$proto70["m_columns"][] = "Direccion";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "INNER JOIN Despachos ON Despachos.DespachoId = Chequeos.DespachoId";
$proto69["m_alias"] = "";
$proto69["m_srcTableName"] = "dbo.ListaChequeosReporte";
$proto71=array();
$proto71["m_sql"] = "dbo.Despachos.DespachoId = dbo.Chequeos.DespachoId";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "= dbo.Chequeos.DespachoId";
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
						$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto73["m_column"]=$obj;
$proto73["m_bAsc"] = 1;
$proto73["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto73);

$proto0["m_orderby"][]=$obj;					
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Chequeos",
	"m_srcTableName" => "dbo.ListaChequeosReporte"
));

$proto75["m_column"]=$obj;
$proto75["m_bAsc"] = 1;
$proto75["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto75);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ListaChequeosReporte";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_listachequeosreporte = createSqlQuery_listachequeosreporte();


	
		;

																	

$tdatalistachequeosreporte[".sqlquery"] = $queryData_listachequeosreporte;



$tdatalistachequeosreporte[".hasEvents"] = false;

?>