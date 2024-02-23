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










$tstrOrderBy = "";
$tdataprocesossinnotificareport[".strOrderBy"] = $tstrOrderBy;

$tdataprocesossinnotificareport[".orderindexes"] = array();


$tdataprocesossinnotificareport[".sqlHead"] = "            SELECT Procesos.ProcesoId,               Procesos.CarteraTipoId,               Procesos.SeccionalId,               Abogados.Abogado,               Procesos.ConceptoId,               Procesos.Fecha,               Procesos.Numero,               Sancionados.Sancionado,               Sancionados.Documento,               Procesos.Obligacion,               Procesos.Intereses,               Procesos.Costas,  			(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc) Mandamiento,              Procesos.EstadoId";
$tdataprocesossinnotificareport[".sqlFrom"] = "FROM Procesos  		  INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId  		  INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId  		  INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$tdataprocesossinnotificareport[".sqlWhereExpr"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)  			AND Seccionales.SeccionalId in (:session.SeccionalesWhere)";
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
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosSinNotificaReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesossinnotificareport()
{
$proto0=array();
$proto0["m_strHead"] = "            SELECT";
$proto0["m_strFieldList"] = "Procesos.ProcesoId,               Procesos.CarteraTipoId,               Procesos.SeccionalId,               Abogados.Abogado,               Procesos.ConceptoId,               Procesos.Fecha,               Procesos.Numero,               Sancionados.Sancionado,               Sancionados.Documento,               Procesos.Obligacion,               Procesos.Intereses,               Procesos.Costas,  			(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc) Mandamiento,              Procesos.EstadoId";
$proto0["m_strFrom"] = "FROM Procesos  		  INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId  		  INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId  		  INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$proto0["m_strWhere"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)  			AND Seccionales.SeccionalId in (:session.SeccionalesWhere)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)  			AND Seccionales.SeccionalId in (:session.SeccionalesWhere)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Procesos.EstadoId <> 6)  		  AND (Procesos.Notificacion IS NULL)  		  AND (dbo.EnAcuerdo(Procesos.ProcesoId)=0)  			AND Seccionales.SeccionalId in (:session.SeccionalesWhere)"
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
						$proto11=array();
$proto11["m_sql"] = "Seccionales.SeccionalId in (:session.SeccionalesWhere)";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "in (:session.SeccionalesWhere)";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto15["m_sql"] = "Procesos.ProcesoId";
$proto15["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto17["m_sql"] = "Procesos.CarteraTipoId";
$proto17["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto19["m_sql"] = "Procesos.SeccionalId";
$proto19["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto21["m_sql"] = "Abogados.Abogado";
$proto21["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto23["m_sql"] = "Procesos.ConceptoId";
$proto23["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto25["m_sql"] = "Procesos.Fecha";
$proto25["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto27["m_sql"] = "Procesos.Numero";
$proto27["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto29["m_sql"] = "Sancionados.Sancionado";
$proto29["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto31["m_sql"] = "Sancionados.Documento";
$proto31["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto33["m_sql"] = "Procesos.Obligacion";
$proto33["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto35["m_sql"] = "Procesos.Intereses";
$proto35["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto37["m_sql"] = "Procesos.Costas";
$proto37["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_strHead"] = "select top 1";
$proto40["m_strFieldList"] = "Correspondencias.Fecha";
$proto40["m_strFrom"] = "from Correspondencias";
$proto40["m_strWhere"] = "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)";
$proto40["m_strOrderBy"] = "order by Correspondencias.Fecha desc";
	
		;
			$proto40["cipherer"] = null;
$proto42=array();
$proto42["m_sql"] = "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)";
$proto42["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105)"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
						$proto44=array();
$proto44["m_sql"] = "ProcesoId = Procesos.ProcesoId";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= Procesos.ProcesoId";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto42["m_contained"][]=$obj;
						$proto46=array();
$proto46["m_sql"] = "OficioId in (4328,1105)";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "in (4328,1105)";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

			$proto42["m_contained"][]=$obj;
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_where"] = $obj;
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto40["m_having"] = $obj;
$proto40["m_fieldlist"] = array();
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto50["m_sql"] = "Correspondencias.Fecha";
$proto50["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto40["m_fieldlist"][]=$obj;
$proto40["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Correspondencias";
$proto53["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "CorrespondenciaId";
$proto53["m_columns"][] = "ProcesoId";
$proto53["m_columns"][] = "OficioId";
$proto53["m_columns"][] = "Fecha";
$proto53["m_columns"][] = "Sigobius";
$proto53["m_columns"][] = "Observaciones";
$proto53["m_columns"][] = "Resolucion";
$proto53["m_columns"][] = "Codigo";
$proto53["m_columns"][] = "Radicado";
$proto53["m_columns"][] = "UserId";
$proto53["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "Correspondencias";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
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

$proto40["m_fromlist"][]=$obj;
$proto40["m_groupby"] = array();
$proto40["m_orderby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 0;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto40["m_orderby"][]=$obj;					
$proto40["m_srcTableName"]="dbo.ProcesosSinNotificaReport";		
$obj = new SQLQuery($proto40);

$proto39["m_sql"] = "(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = Procesos.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc)";
$proto39["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Mandamiento";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto58["m_sql"] = "Procesos.EstadoId";
$proto58["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "dbo.Procesos";
$proto61["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "ProcesoId";
$proto61["m_columns"][] = "SeccionalId";
$proto61["m_columns"][] = "AbogadoId";
$proto61["m_columns"][] = "Fecha";
$proto61["m_columns"][] = "Numero";
$proto61["m_columns"][] = "DespachoId";
$proto61["m_columns"][] = "SancionadoId";
$proto61["m_columns"][] = "Providencia";
$proto61["m_columns"][] = "Ejecutoria";
$proto61["m_columns"][] = "ConceptoId";
$proto61["m_columns"][] = "EstadoId";
$proto61["m_columns"][] = "EtapaId";
$proto61["m_columns"][] = "Folios";
$proto61["m_columns"][] = "Tipo";
$proto61["m_columns"][] = "Cantidad";
$proto61["m_columns"][] = "Obligacion";
$proto61["m_columns"][] = "Costas";
$proto61["m_columns"][] = "Liquidacion";
$proto61["m_columns"][] = "Dias";
$proto61["m_columns"][] = "Intereses";
$proto61["m_columns"][] = "Recaudo";
$proto61["m_columns"][] = "CalificacionId";
$proto61["m_columns"][] = "Terminacion";
$proto61["m_columns"][] = "MotivoId";
$proto61["m_columns"][] = "Observaciones";
$proto61["m_columns"][] = "Cuotas";
$proto61["m_columns"][] = "Abono";
$proto61["m_columns"][] = "Inicio";
$proto61["m_columns"][] = "VlrCuota";
$proto61["m_columns"][] = "VlrIntereses";
$proto61["m_columns"][] = "Garantia";
$proto61["m_columns"][] = "Radicado";
$proto61["m_columns"][] = "Remisorio";
$proto61["m_columns"][] = "Acuerdo";
$proto61["m_columns"][] = "Incumplimiento";
$proto61["m_columns"][] = "Notificacion";
$proto61["m_columns"][] = "Suspension";
$proto61["m_columns"][] = "Traslado";
$proto61["m_columns"][] = "Error";
$proto61["m_columns"][] = "CarteraTipoId";
$proto61["m_columns"][] = "ConceptoAbogado";
$proto61["m_columns"][] = "Origen";
$proto61["m_columns"][] = "Carpeta";
$proto61["m_columns"][] = "ImportacionId";
$proto61["m_columns"][] = "ActuacionId";
$proto61["m_columns"][] = "ObligacionInicial";
$proto61["m_columns"][] = "CostasInicial";
$proto61["m_columns"][] = "InteresesInicial";
$proto61["m_columns"][] = "MinJusticia";
$proto61["m_columns"][] = "Revocatoria";
$proto61["m_columns"][] = "Mayor";
$proto61["m_columns"][] = "NotificacionValidada";
$proto61["m_columns"][] = "Validado";
$proto61["m_columns"][] = "Seleccionado";
$proto61["m_columns"][] = "CompetenciaId";
$proto61["m_columns"][] = "MinjusticiaId";
$proto61["m_columns"][] = "SeleccionadoPor";
$proto61["m_columns"][] = "Subsanar";
$proto61["m_columns"][] = "NumeroMinjusticia";
$proto61["m_columns"][] = "ProcesoIdOrigen";
$proto61["m_columns"][] = "SeleccionadoFecha";
$proto61["m_columns"][] = "InteresesIniciales";
$proto61["m_columns"][] = "InteresesCalculados";
$proto61["m_columns"][] = "ProcesoIdDestino";
$proto61["m_columns"][] = "RecaudoMinjusticia";
$proto61["m_columns"][] = "RecaudoTerminado";
$proto61["m_columns"][] = "Persuasivo";
$proto61["m_columns"][] = "ObligacionCreacion";
$proto61["m_columns"][] = "InteresesCreacion";
$proto61["m_columns"][] = "CostasCreacion";
$proto61["m_columns"][] = "Plazo";
$proto61["m_columns"][] = "NaturalezaId";
$proto61["m_columns"][] = "TrasladoCartera";
$proto61["m_columns"][] = "CarteraTipoIdOrigen";
$proto61["m_columns"][] = "TrasladoConcepto";
$proto61["m_columns"][] = "ConceptoIdOrigen";
$proto61["m_columns"][] = "AutorizadoPlazo";
$proto61["m_columns"][] = "AutorizadoFecha";
$proto61["m_columns"][] = "AutorizadoPor";
$proto61["m_columns"][] = "Reliquidacion";
$proto61["m_columns"][] = "ChequeoId";
$proto61["m_columns"][] = "VlrCostas";
$proto61["m_columns"][] = "VlrInteresesPlazo";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "Procesos";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
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
$proto65["m_strName"] = "dbo.Sancionados";
$proto65["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "SancionadoId";
$proto65["m_columns"][] = "Sancionado";
$proto65["m_columns"][] = "TipoDocumentoId";
$proto65["m_columns"][] = "Documento";
$proto65["m_columns"][] = "Email";
$proto65["m_columns"][] = "Celular";
$proto65["m_columns"][] = "Masculino";
$proto65["m_columns"][] = "Observaciones";
$proto65["m_columns"][] = "Fallecimiento";
$proto65["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN Sancionados ON Sancionados.SancionadoId = Procesos.SancionadoId";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto66=array();
$proto66["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_INNERJOIN";
			$proto69=array();
$proto69["m_strName"] = "dbo.Seccionales";
$proto69["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "SeccionalId";
$proto69["m_columns"][] = "Codigo";
$proto69["m_columns"][] = "Seccional";
$proto69["m_columns"][] = "NIT";
$proto69["m_columns"][] = "CiudadId";
$proto69["m_columns"][] = "PiePagina";
$proto69["m_columns"][] = "Sigobius";
$proto69["m_columns"][] = "Email";
$proto69["m_columns"][] = "Direccion";
$proto69["m_columns"][] = "Telefonos";
$proto69["m_columns"][] = "PCI";
$proto69["m_columns"][] = "Contador";
$proto69["m_columns"][] = "ContadorCargo";
$proto69["m_columns"][] = "Director";
$proto69["m_columns"][] = "DirectorCargo";
$proto69["m_columns"][] = "Abogado";
$proto69["m_columns"][] = "AbogadoCargo";
$proto69["m_columns"][] = "Formato";
$proto69["m_columns"][] = "Corporacion";
$proto69["m_columns"][] = "Unidad";
$proto69["m_columns"][] = "Oficina";
$proto69["m_columns"][] = "Serie";
$proto69["m_columns"][] = "Subserie";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN Seccionales on Seccionales.SeccionalId = Procesos.SeccionalId";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto70=array();
$proto70["m_sql"] = "dbo.Seccionales.SeccionalId = dbo.Procesos.SeccionalId";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= dbo.Procesos.SeccionalId";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_INNERJOIN";
			$proto73=array();
$proto73["m_strName"] = "dbo.Abogados";
$proto73["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "AbogadoId";
$proto73["m_columns"][] = "Abogado";
$proto73["m_columns"][] = "Documento";
$proto73["m_columns"][] = "Tarjeta";
$proto73["m_columns"][] = "Direccion";
$proto73["m_columns"][] = "Telefonos";
$proto73["m_columns"][] = "Celular";
$proto73["m_columns"][] = "Email";
$proto73["m_columns"][] = "SeccionalId";
$proto73["m_columns"][] = "Masculino";
$proto73["m_columns"][] = "Activo";
$proto73["m_columns"][] = "Despacho";
$proto73["m_columns"][] = "Codificador";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN Abogados on Abogados.AbogadoId = Procesos.AbogadoId";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "dbo.ProcesosSinNotificaReport";
$proto74=array();
$proto74["m_sql"] = "dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificaReport"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= dbo.Procesos.AbogadoId";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

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