<?php
$tdataprocesossinnotificareport = array();
$tdataprocesossinnotificareport[".searchableFields"] = array();
$tdataprocesossinnotificareport[".ShortName"] = "procesossinnotificareport";
$tdataprocesossinnotificareport[".OwnerID"] = "";
$tdataprocesossinnotificareport[".OriginalTable"] = "dbo.Procesos";


$tdataprocesossinnotificareport[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataprocesossinnotificareport[".originalPagesByType"] = $tdataprocesossinnotificareport[".pagesByType"];
$tdataprocesossinnotificareport[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataprocesossinnotificareport[".originalPages"] = $tdataprocesossinnotificareport[".pages"];
$tdataprocesossinnotificareport[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataprocesossinnotificareport[".originalDefaultPages"] = $tdataprocesossinnotificareport[".defaultPages"];

//	field labels
$fieldLabelsprocesossinnotificareport = array();
$fieldToolTipsprocesossinnotificareport = array();
$pageTitlesprocesossinnotificareport = array();
$placeHoldersprocesossinnotificareport = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesossinnotificareport["Spanish"] = array();
	$fieldToolTipsprocesossinnotificareport["Spanish"] = array();
	$placeHoldersprocesossinnotificareport["Spanish"] = array();
	$pageTitlesprocesossinnotificareport["Spanish"] = array();
	$fieldLabelsprocesossinnotificareport["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["ProcesoId"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Fecha"] = "Fecha de Creacion";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Fecha"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Numero"] = "Numero de Proceso";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Numero"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Numero"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["EstadoId"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Costas"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Costas"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Intereses"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["CarteraTipoId"] = "Tipo de Cartera";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Abogado"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Abogado"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Sancionado"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Sancionado"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Documento"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Documento"] = "";
	$fieldLabelsprocesossinnotificareport["Spanish"]["Mandamiento"] = "Fecha de Mandamiento";
	$fieldToolTipsprocesossinnotificareport["Spanish"]["Mandamiento"] = "";
	$placeHoldersprocesossinnotificareport["Spanish"]["Mandamiento"] = "";
	if (count($fieldToolTipsprocesossinnotificareport["Spanish"]))
		$tdataprocesossinnotificareport[".isUseToolTips"] = true;
}





$tdataprocesossinnotificareport[".shortTableName"] = "procesossinnotificareport";
$tdataprocesossinnotificareport[".nSecOptions"] = 0;

$tdataprocesossinnotificareport[".mainTableOwnerID"] = "";
$tdataprocesossinnotificareport[".entityType"] = 2;
$tdataprocesossinnotificareport[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesossinnotificareport[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprocesossinnotificareport[".showAddInPopup"] = false;

$tdataprocesossinnotificareport[".showEditInPopup"] = false;

$tdataprocesossinnotificareport[".showViewInPopup"] = false;

$tdataprocesossinnotificareport[".listAjax"] = false;
//	temporary
//$tdataprocesossinnotificareport[".listAjax"] = false;

	$tdataprocesossinnotificareport[".audit"] = false;

	$tdataprocesossinnotificareport[".locking"] = false;


$pages = $tdataprocesossinnotificareport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesossinnotificareport[".edit"] = true;
	$tdataprocesossinnotificareport[".afterEditAction"] = 1;
	$tdataprocesossinnotificareport[".closePopupAfterEdit"] = 1;
	$tdataprocesossinnotificareport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesossinnotificareport[".add"] = true;
$tdataprocesossinnotificareport[".afterAddAction"] = 1;
$tdataprocesossinnotificareport[".closePopupAfterAdd"] = 1;
$tdataprocesossinnotificareport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesossinnotificareport[".list"] = true;
}



$tdataprocesossinnotificareport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesossinnotificareport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesossinnotificareport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesossinnotificareport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesossinnotificareport[".printFriendly"] = true;
}



$tdataprocesossinnotificareport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesossinnotificareport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesossinnotificareport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesossinnotificareport[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdataprocesossinnotificareport[".ajaxCodeSnippetAdded"] = false;

$tdataprocesossinnotificareport[".buttonsAdded"] = false;

$tdataprocesossinnotificareport[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesossinnotificareport[".isUseTimeForSearch"] = false;


$tdataprocesossinnotificareport[".badgeColor"] = "008B8B";


$tdataprocesossinnotificareport[".allSearchFields"] = array();
$tdataprocesossinnotificareport[".filterFields"] = array();
$tdataprocesossinnotificareport[".requiredSearchFields"] = array();

$tdataprocesossinnotificareport[".googleLikeFields"] = array();
$tdataprocesossinnotificareport[".googleLikeFields"][] = "ProcesoId";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "SeccionalId";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Abogado";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "ConceptoId";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Fecha";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Numero";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Sancionado";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Documento";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Obligacion";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Intereses";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Costas";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "Mandamiento";
$tdataprocesossinnotificareport[".googleLikeFields"][] = "EstadoId";



$tdataprocesossinnotificareport[".tableType"] = "report";

$tdataprocesossinnotificareport[".printerPageOrientation"] = 0;
$tdataprocesossinnotificareport[".nPrinterPageScale"] = 100;

$tdataprocesossinnotificareport[".nPrinterSplitRecords"] = 40;

$tdataprocesossinnotificareport[".geocodingEnabled"] = false;

//report settings

$tdataprocesossinnotificareport[".reportPrintGroupsPerPage"] = 3;
$tdataprocesossinnotificareport[".reportPrintRecordsPerPage"] = 40;

$tdataprocesossinnotificareport[".pageSizeGroups"] = 5;
$tdataprocesossinnotificareport[".pageSizeRecords"] = 20;


//end of report settings






$tdataprocesossinnotificareport[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
$tdataprocesossinnotificareport[".strOrderBy"] = $tstrOrderBy;

$tdataprocesossinnotificareport[".orderindexes"] = array();


$tdataprocesossinnotificareport[".sqlHead"] = "            SELECT Procesos.ProcesoId,               Procesos.CarteraTipoId,               Procesos.SeccionalId,               Abogados.Abogado,               Procesos.ConceptoId,               Procesos.Fecha,               Procesos.Numero,               Sancionados.Sancionado,               Sancionados.Documento,               Procesos.Obligacion,               Procesos.Intereses,               Procesos.Costas,  			(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc) Mandamiento,              Procesos.EstadoId";
$tdataprocesossinnotificareport[".sqlFrom"] = "FROM Procesos  		  INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId  		  INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId  		  INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$tdataprocesossinnotificareport[".sqlWhereExpr"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)";
$tdataprocesossinnotificareport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesossinnotificareport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesossinnotificareport[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesossinnotificareport[".highlightSearchResults"] = true;

$tableKeysprocesossinnotificareport = array();
$tableKeysprocesossinnotificareport[] = "ProcesoId";
$tdataprocesossinnotificareport[".Keys"] = $tableKeysprocesossinnotificareport;


$tdataprocesossinnotificareport[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.ProcesoId";

	
	
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


	$tdataprocesossinnotificareport["ProcesoId"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "ProcesoId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.CarteraTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CarteraTipo";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "SeccionalId", "lookup" => "CarteraTipoId" );

	
	

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificareport["CarteraTipoId"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "CarteraTipoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.SeccionalId";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CarteraTipoId";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificareport["SeccionalId"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "SeccionalId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Abogado");
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


	$tdataprocesossinnotificareport["Abogado"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Abogado";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.ConceptoId";

	
	
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
	$edata["LookupTable"] = "dbo.Conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Concepto";

	

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificareport["ConceptoId"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "ConceptoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Fecha");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataprocesossinnotificareport["Fecha"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Fecha";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Numero");
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataprocesossinnotificareport["Numero"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Sancionado");
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


	$tdataprocesossinnotificareport["Sancionado"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sancionados.Documento";

	
	
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


	$tdataprocesossinnotificareport["Documento"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Documento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Obligacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataprocesossinnotificareport["Obligacion"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataprocesossinnotificareport["Intereses"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataprocesossinnotificareport["Costas"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Costas";
//	Mandamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Mandamiento";
	$fdata["GoodName"] = "Mandamiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","Mandamiento");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Mandamiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc)";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataprocesossinnotificareport["Mandamiento"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "Mandamiento";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificaReport","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos.EstadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EstadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Estado";

	

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificareport["EstadoId"] = $fdata;
		$tdataprocesossinnotificareport[".searchableFields"][] = "EstadoId";


$tables_data["dbo.ProcesosSinNotificaReport"]=&$tdataprocesossinnotificareport;
$field_labels["dbo_ProcesosSinNotificaReport"] = &$fieldLabelsprocesossinnotificareport;
$fieldToolTips["dbo_ProcesosSinNotificaReport"] = &$fieldToolTipsprocesossinnotificareport;
$placeHolders["dbo_ProcesosSinNotificaReport"] = &$placeHoldersprocesossinnotificareport;
$page_titles["dbo_ProcesosSinNotificaReport"] = &$pageTitlesprocesossinnotificareport;


changeTextControlsToDate( "dbo.ProcesosSinNotificaReport" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosSinNotificaReport"] = array();
//	dbo.Acuerdos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Acuerdos";
		$detailsParam["dOriginalTable"] = "dbo.Acuerdos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "acuerdos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Acuerdos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Correspondencias
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Correspondencias";
		$detailsParam["dOriginalTable"] = "dbo.Correspondencias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "correspondencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Correspondencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Intereses
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Intereses";
		$detailsParam["dOriginalTable"] = "dbo.Intereses";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "intereses";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Intereses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Interrupciones
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Interrupciones";
		$detailsParam["dOriginalTable"] = "dbo.Interrupciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interrupciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Interrupciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Liquidaciones
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Liquidaciones";
		$detailsParam["dOriginalTable"] = "dbo.Liquidaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "liquidaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Liquidaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Llamadas
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Llamadas";
		$detailsParam["dOriginalTable"] = "dbo.Llamadas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "llamadas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Llamadas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Medidas
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Medidas";
		$detailsParam["dOriginalTable"] = "dbo.Medidas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medidas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Medidas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Pagos1
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Pagos1";
		$detailsParam["dOriginalTable"] = "dbo.Pagos1";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pagos1";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Pagos1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Reasignaciones
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Reasignaciones";
		$detailsParam["dOriginalTable"] = "dbo.Reasignaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reasignaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Reasignaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Solidarios
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Solidarios";
		$detailsParam["dOriginalTable"] = "dbo.Solidarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solidarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Solidarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.ProcesosSinNotificaReport"][$dIndex]["detailKeys"][]="ProcesoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosSinNotificaReport"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Conceptos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Conceptos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ProcesosSinNotificaReport"][0] = $masterParams;
				$masterTablesData["dbo.ProcesosSinNotificaReport"][0]["masterKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][0]["masterKeys"][]="ConceptoId";
				$masterTablesData["dbo.ProcesosSinNotificaReport"][0]["detailKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][0]["detailKeys"][]="ConceptoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Estados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Estados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ProcesosSinNotificaReport"][1] = $masterParams;
				$masterTablesData["dbo.ProcesosSinNotificaReport"][1]["masterKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][1]["masterKeys"][]="EstadoId";
				$masterTablesData["dbo.ProcesosSinNotificaReport"][1]["detailKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][1]["detailKeys"][]="EstadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ProcesosSinNotificaReport"][2] = $masterParams;
				$masterTablesData["dbo.ProcesosSinNotificaReport"][2]["masterKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][2]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.ProcesosSinNotificaReport"][2]["detailKeys"] = array();
	$masterTablesData["dbo.ProcesosSinNotificaReport"][2]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesossinnotificareport()
{
$proto0=array();
$proto0["m_strHead"] = "            SELECT";
$proto0["m_strFieldList"] = "Procesos.ProcesoId,               Procesos.CarteraTipoId,               Procesos.SeccionalId,               Abogados.Abogado,               Procesos.ConceptoId,               Procesos.Fecha,               Procesos.Numero,               Sancionados.Sancionado,               Sancionados.Documento,               Procesos.Obligacion,               Procesos.Intereses,               Procesos.Costas,  			(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc) Mandamiento,              Procesos.EstadoId";
$proto0["m_strFrom"] = "FROM Procesos  		  INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId  		  INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId  		  INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$proto0["m_strWhere"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Procesos.EstadoId <> 6";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<> 6";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Procesos.Notificacion IS NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "dbo.EnAcuerdo(Procesos.ProcesoId)=0";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.ProcesoId"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "dbo.EnAcuerdo";
$obj = new SQLFunctionCall($proto9);

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=0";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto13["m_sql"] = "Procesos.ProcesoId";
$proto13["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto15["m_sql"] = "Procesos.CarteraTipoId";
$proto15["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto17["m_sql"] = "Procesos.SeccionalId";
$proto17["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto19["m_sql"] = "Abogados.Abogado";
$proto19["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto21["m_sql"] = "Procesos.ConceptoId";
$proto21["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto23["m_sql"] = "Procesos.Fecha";
$proto23["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto25["m_sql"] = "Procesos.Numero";
$proto25["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto27["m_sql"] = "Sancionados.Sancionado";
$proto27["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto29["m_sql"] = "Sancionados.Documento";
$proto29["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto31["m_sql"] = "Procesos.Obligacion";
$proto31["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto33["m_sql"] = "Procesos.Intereses";
$proto33["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto35["m_sql"] = "Procesos.Costas";
$proto35["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_strHead"] = "select top 1";
$proto38["m_strFieldList"] = "Correspondencias.Fecha";
$proto38["m_strFrom"] = "from Correspondencias";
$proto38["m_strWhere"] = "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)";
$proto38["m_strOrderBy"] = "order by Correspondencias.Fecha desc";
	
		;
			$proto38["cipherer"] = null;
$proto40=array();
$proto40["m_sql"] = "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)";
$proto40["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
						$proto42=array();
$proto42["m_sql"] = "ProcesoId = Procesos.ProcesoId";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= Procesos.ProcesoId";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto40["m_contained"][]=$obj;
						$proto44=array();
$proto44["m_sql"] = "OficioId in (4328,1105)";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "in (4328,1105)";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto40["m_contained"][]=$obj;
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_where"] = $obj;
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto38["m_having"] = $obj;
$proto38["m_fieldlist"] = array();
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto48["m_sql"] = "Correspondencias.Fecha";
$proto48["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto38["m_fieldlist"][]=$obj;
$proto38["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "dbo.Correspondencias";
$proto51["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "CorrespondenciaId";
$proto51["m_columns"][] = "ProcesoId";
$proto51["m_columns"][] = "OficioId";
$proto51["m_columns"][] = "Fecha";
$proto51["m_columns"][] = "Sigobius";
$proto51["m_columns"][] = "Observaciones";
$proto51["m_columns"][] = "Resolucion";
$proto51["m_columns"][] = "Codigo";
$proto51["m_columns"][] = "Radicado";
$proto51["m_columns"][] = "UserId";
$proto51["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "Correspondencias";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto38["m_fromlist"][]=$obj;
$proto38["m_groupby"] = array();
$proto38["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto38["m_orderby"][]=$obj;					
$proto38["m_srcTableName"]="dbo.ProcesosSinNotificaReport";		
$obj = new SQLQuery($proto38);

$proto37["m_sql"] = "(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc)";
$proto37["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Mandamiento";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto56["m_sql"] = "Procesos.EstadoId";
$proto56["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "dbo.Procesos";
$proto59["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "ProcesoId";
$proto59["m_columns"][] = "SeccionalId";
$proto59["m_columns"][] = "AbogadoId";
$proto59["m_columns"][] = "Fecha";
$proto59["m_columns"][] = "Numero";
$proto59["m_columns"][] = "DespachoId";
$proto59["m_columns"][] = "SancionadoId";
$proto59["m_columns"][] = "Providencia";
$proto59["m_columns"][] = "Ejecutoria";
$proto59["m_columns"][] = "ConceptoId";
$proto59["m_columns"][] = "EstadoId";
$proto59["m_columns"][] = "EtapaId";
$proto59["m_columns"][] = "Folios";
$proto59["m_columns"][] = "Tipo";
$proto59["m_columns"][] = "Cantidad";
$proto59["m_columns"][] = "Obligacion";
$proto59["m_columns"][] = "Costas";
$proto59["m_columns"][] = "Liquidacion";
$proto59["m_columns"][] = "Dias";
$proto59["m_columns"][] = "Intereses";
$proto59["m_columns"][] = "Recaudo";
$proto59["m_columns"][] = "CalificacionId";
$proto59["m_columns"][] = "Terminacion";
$proto59["m_columns"][] = "MotivoId";
$proto59["m_columns"][] = "Observaciones";
$proto59["m_columns"][] = "Cuotas";
$proto59["m_columns"][] = "Abono";
$proto59["m_columns"][] = "Inicio";
$proto59["m_columns"][] = "VlrCuota";
$proto59["m_columns"][] = "VlrIntereses";
$proto59["m_columns"][] = "Garantia";
$proto59["m_columns"][] = "Radicado";
$proto59["m_columns"][] = "Remisorio";
$proto59["m_columns"][] = "Acuerdo";
$proto59["m_columns"][] = "Incumplimiento";
$proto59["m_columns"][] = "Notificacion";
$proto59["m_columns"][] = "Suspension";
$proto59["m_columns"][] = "Traslado";
$proto59["m_columns"][] = "Error";
$proto59["m_columns"][] = "CarteraTipoId";
$proto59["m_columns"][] = "ConceptoAbogado";
$proto59["m_columns"][] = "Origen";
$proto59["m_columns"][] = "Carpeta";
$proto59["m_columns"][] = "ImportacionId";
$proto59["m_columns"][] = "ActuacionId";
$proto59["m_columns"][] = "ObligacionInicial";
$proto59["m_columns"][] = "CostasInicial";
$proto59["m_columns"][] = "InteresesInicial";
$proto59["m_columns"][] = "MinJusticia";
$proto59["m_columns"][] = "Revocatoria";
$proto59["m_columns"][] = "Mayor";
$proto59["m_columns"][] = "NotificacionValidada";
$proto59["m_columns"][] = "Validado";
$proto59["m_columns"][] = "Seleccionado";
$proto59["m_columns"][] = "CompetenciaId";
$proto59["m_columns"][] = "MinjusticiaId";
$proto59["m_columns"][] = "SeleccionadoPor";
$proto59["m_columns"][] = "Subsanar";
$proto59["m_columns"][] = "NumeroMinjusticia";
$proto59["m_columns"][] = "ProcesoIdOrigen";
$proto59["m_columns"][] = "SeleccionadoFecha";
$proto59["m_columns"][] = "InteresesIniciales";
$proto59["m_columns"][] = "InteresesCalculados";
$proto59["m_columns"][] = "ProcesoIdDestino";
$proto59["m_columns"][] = "RecaudoMinjusticia";
$proto59["m_columns"][] = "RecaudoTerminado";
$proto59["m_columns"][] = "Persuasivo";
$proto59["m_columns"][] = "ObligacionCreacion";
$proto59["m_columns"][] = "InteresesCreacion";
$proto59["m_columns"][] = "CostasCreacion";
$proto59["m_columns"][] = "Plazo";
$proto59["m_columns"][] = "NaturalezaId";
$proto59["m_columns"][] = "TrasladoCartera";
$proto59["m_columns"][] = "CarteraTipoIdOrigen";
$proto59["m_columns"][] = "TrasladoConcepto";
$proto59["m_columns"][] = "ConceptoIdOrigen";
$proto59["m_columns"][] = "AutorizadoPlazo";
$proto59["m_columns"][] = "AutorizadoFecha";
$proto59["m_columns"][] = "AutorizadoPor";
$proto59["m_columns"][] = "Reliquidacion";
$proto59["m_columns"][] = "ChequeoId";
$proto59["m_columns"][] = "VlrCostas";
$proto59["m_columns"][] = "VlrInteresesPlazo";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "Procesos";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "dbo.Sancionados";
$proto63["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "SancionadoId";
$proto63["m_columns"][] = "Sancionado";
$proto63["m_columns"][] = "TipoDocumentoId";
$proto63["m_columns"][] = "Documento";
$proto63["m_columns"][] = "Email";
$proto63["m_columns"][] = "Celular";
$proto63["m_columns"][] = "Masculino";
$proto63["m_columns"][] = "Observaciones";
$proto63["m_columns"][] = "Fallecimiento";
$proto63["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto64=array();
$proto64["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= dbo.Procesos.SancionadoId";
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
$proto67["m_strName"] = "dbo.Seccionales";
$proto67["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "SeccionalId";
$proto67["m_columns"][] = "Codigo";
$proto67["m_columns"][] = "Seccional";
$proto67["m_columns"][] = "NIT";
$proto67["m_columns"][] = "CiudadId";
$proto67["m_columns"][] = "PiePagina";
$proto67["m_columns"][] = "Sigobius";
$proto67["m_columns"][] = "Email";
$proto67["m_columns"][] = "Direccion";
$proto67["m_columns"][] = "Telefonos";
$proto67["m_columns"][] = "PCI";
$proto67["m_columns"][] = "Contador";
$proto67["m_columns"][] = "ContadorCargo";
$proto67["m_columns"][] = "Director";
$proto67["m_columns"][] = "DirectorCargo";
$proto67["m_columns"][] = "Abogado";
$proto67["m_columns"][] = "AbogadoCargo";
$proto67["m_columns"][] = "Formato";
$proto67["m_columns"][] = "Corporacion";
$proto67["m_columns"][] = "Unidad";
$proto67["m_columns"][] = "Oficina";
$proto67["m_columns"][] = "Serie";
$proto67["m_columns"][] = "Subserie";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto68=array();
$proto68["m_sql"] = "dbo.Seccionales.SeccionalId = dbo.Procesos.SeccionalId";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= dbo.Procesos.SeccionalId";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_INNERJOIN";
			$proto71=array();
$proto71["m_strName"] = "dbo.Abogados";
$proto71["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "AbogadoId";
$proto71["m_columns"][] = "Abogado";
$proto71["m_columns"][] = "Documento";
$proto71["m_columns"][] = "Tarjeta";
$proto71["m_columns"][] = "Direccion";
$proto71["m_columns"][] = "Telefonos";
$proto71["m_columns"][] = "Celular";
$proto71["m_columns"][] = "Email";
$proto71["m_columns"][] = "SeccionalId";
$proto71["m_columns"][] = "Masculino";
$proto71["m_columns"][] = "Activo";
$proto71["m_columns"][] = "Despacho";
$proto71["m_columns"][] = "Codificador";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto72=array();
$proto72["m_sql"] = "dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= dbo.Procesos.AbogadoId";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ProcesosSinNotificaReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procesossinnotificareport = createSqlQuery_procesossinnotificareport();


	
		;

														

$tdataprocesossinnotificareport[".sqlquery"] = $queryData_procesossinnotificareport;



$tdataprocesossinnotificareport[".hasEvents"] = false;

?>