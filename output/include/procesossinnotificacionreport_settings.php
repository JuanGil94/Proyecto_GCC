<?php
$tdataprocesossinnotificacionreport = array();
$tdataprocesossinnotificacionreport[".searchableFields"] = array();
$tdataprocesossinnotificacionreport[".ShortName"] = "procesossinnotificacionreport";
$tdataprocesossinnotificacionreport[".OwnerID"] = "";
$tdataprocesossinnotificacionreport[".OriginalTable"] = "dbo.Procesos";


$tdataprocesossinnotificacionreport[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataprocesossinnotificacionreport[".originalPagesByType"] = $tdataprocesossinnotificacionreport[".pagesByType"];
$tdataprocesossinnotificacionreport[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataprocesossinnotificacionreport[".originalPages"] = $tdataprocesossinnotificacionreport[".pages"];
$tdataprocesossinnotificacionreport[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataprocesossinnotificacionreport[".originalDefaultPages"] = $tdataprocesossinnotificacionreport[".defaultPages"];

//	field labels
$fieldLabelsprocesossinnotificacionreport = array();
$fieldToolTipsprocesossinnotificacionreport = array();
$pageTitlesprocesossinnotificacionreport = array();
$placeHoldersprocesossinnotificacionreport = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesossinnotificacionreport["Spanish"] = array();
	$fieldToolTipsprocesossinnotificacionreport["Spanish"] = array();
	$placeHoldersprocesossinnotificacionreport["Spanish"] = array();
	$pageTitlesprocesossinnotificacionreport["Spanish"] = array();
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["ProcesoId"] = "ProcesoId";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["ProcesoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Fecha"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Numero"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Numero"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["EstadoId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Costas"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Costas"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Intereses"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["CarteraTipoId"] = "Cartera Tipo";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Abogado"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Abogado"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Sancionado"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Sancionado"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Documento"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Documento"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["Mandamiento"] = "Mandamiento";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["Mandamiento"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["Mandamiento"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["dbo_Procesos_AbogadoId"] = "Abogado";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["dbo_Procesos_AbogadoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["dbo_Procesos_AbogadoId"] = "";
	$fieldLabelsprocesossinnotificacionreport["Spanish"]["dbo_Procesos_SancionadoId"] = "Sancionado";
	$fieldToolTipsprocesossinnotificacionreport["Spanish"]["dbo_Procesos_SancionadoId"] = "";
	$placeHoldersprocesossinnotificacionreport["Spanish"]["dbo_Procesos_SancionadoId"] = "";
	if (count($fieldToolTipsprocesossinnotificacionreport["Spanish"]))
		$tdataprocesossinnotificacionreport[".isUseToolTips"] = true;
}


	$tdataprocesossinnotificacionreport[".NCSearch"] = true;



$tdataprocesossinnotificacionreport[".shortTableName"] = "procesossinnotificacionreport";
$tdataprocesossinnotificacionreport[".nSecOptions"] = 0;

$tdataprocesossinnotificacionreport[".mainTableOwnerID"] = "";
$tdataprocesossinnotificacionreport[".entityType"] = 2;
$tdataprocesossinnotificacionreport[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesossinnotificacionreport[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprocesossinnotificacionreport[".showAddInPopup"] = false;

$tdataprocesossinnotificacionreport[".showEditInPopup"] = false;

$tdataprocesossinnotificacionreport[".showViewInPopup"] = false;

$tdataprocesossinnotificacionreport[".listAjax"] = false;
//	temporary
//$tdataprocesossinnotificacionreport[".listAjax"] = false;

	$tdataprocesossinnotificacionreport[".audit"] = false;

	$tdataprocesossinnotificacionreport[".locking"] = false;


$pages = $tdataprocesossinnotificacionreport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesossinnotificacionreport[".edit"] = true;
	$tdataprocesossinnotificacionreport[".afterEditAction"] = 1;
	$tdataprocesossinnotificacionreport[".closePopupAfterEdit"] = 1;
	$tdataprocesossinnotificacionreport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesossinnotificacionreport[".add"] = true;
$tdataprocesossinnotificacionreport[".afterAddAction"] = 1;
$tdataprocesossinnotificacionreport[".closePopupAfterAdd"] = 1;
$tdataprocesossinnotificacionreport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesossinnotificacionreport[".list"] = true;
}



$tdataprocesossinnotificacionreport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesossinnotificacionreport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesossinnotificacionreport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesossinnotificacionreport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesossinnotificacionreport[".printFriendly"] = true;
}



$tdataprocesossinnotificacionreport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesossinnotificacionreport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesossinnotificacionreport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesossinnotificacionreport[".isUseAjaxSuggest"] = true;



																																													

$tdataprocesossinnotificacionreport[".ajaxCodeSnippetAdded"] = false;

$tdataprocesossinnotificacionreport[".buttonsAdded"] = false;

$tdataprocesossinnotificacionreport[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesossinnotificacionreport[".isUseTimeForSearch"] = false;


$tdataprocesossinnotificacionreport[".badgeColor"] = "E67349";


$tdataprocesossinnotificacionreport[".allSearchFields"] = array();
$tdataprocesossinnotificacionreport[".filterFields"] = array();
$tdataprocesossinnotificacionreport[".requiredSearchFields"] = array();

$tdataprocesossinnotificacionreport[".googleLikeFields"] = array();
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "ProcesoId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "SeccionalId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Abogado";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "ConceptoId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Fecha";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Numero";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Sancionado";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Documento";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Obligacion";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Intereses";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Costas";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "Mandamiento";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "EstadoId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "dbo.Procesos.AbogadoId";
$tdataprocesossinnotificacionreport[".googleLikeFields"][] = "dbo.Procesos.SancionadoId";



$tdataprocesossinnotificacionreport[".tableType"] = "report";

$tdataprocesossinnotificacionreport[".printerPageOrientation"] = 0;
$tdataprocesossinnotificacionreport[".nPrinterPageScale"] = 100;

$tdataprocesossinnotificacionreport[".nPrinterSplitRecords"] = 40;

$tdataprocesossinnotificacionreport[".geocodingEnabled"] = false;

//report settings

$tdataprocesossinnotificacionreport[".reportPrintGroupsPerPage"] = 3;
$tdataprocesossinnotificacionreport[".reportPrintRecordsPerPage"] = 40;

$tdataprocesossinnotificacionreport[".pageSizeGroups"] = 5;
$tdataprocesossinnotificacionreport[".pageSizeRecords"] = 20;


//end of report settings






$tdataprocesossinnotificacionreport[".noRecordsFirstPage"] = true;




$tstrOrderBy = "ORDER BY dbo.Procesos.CarteraTipoId, dbo.Procesos.SeccionalId, dbo.Procesos.AbogadoId, dbo.Procesos.ConceptoId, dbo.Procesos.SancionadoId, dbo.Procesos.EstadoId";
$tdataprocesossinnotificacionreport[".strOrderBy"] = $tstrOrderBy;

$tdataprocesossinnotificacionreport[".orderindexes"] = array();
	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "dbo.Procesos.CarteraTipoId");

	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dbo.Procesos.SeccionalId");

	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "dbo.Procesos.AbogadoId");

	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "dbo.Procesos.ConceptoId");

	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "dbo.Procesos.SancionadoId");

	$tdataprocesossinnotificacionreport[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "dbo.Procesos.EstadoId");



$tdataprocesossinnotificacionreport[".sqlHead"] = "        SELECT dbo.Procesos.ProcesoId,  dbo.Procesos.CarteraTipoId,  dbo.Procesos.SeccionalId,  dbo.Abogados.Abogado,  dbo.Procesos.ConceptoId,  dbo.Procesos.Fecha,  dbo.Procesos.Numero,  dbo.Sancionados.Sancionado,  dbo.Sancionados.Documento,  dbo.Procesos.Obligacion,  dbo.Procesos.Intereses,  dbo.Procesos.Costas,  (select top 1  dbo.Correspondencias.Fecha  FROM dbo.Correspondencias  WHERE dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)  ORDER BY dbo.Correspondencias.Fecha DESC  ) AS Mandamiento,  dbo.Procesos.EstadoId,  dbo.Procesos.AbogadoId AS [dbo.Procesos.AbogadoId],  dbo.Procesos.SancionadoId AS [dbo.Procesos.SancionadoId]";
$tdataprocesossinnotificacionreport[".sqlFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.UsuariosSeccionales ON dbo.UsuariosSeccionales.SeccionalId = dbo.Procesos.SeccionalId  INNER JOIN dbo.UserProfile ON dbo.UserProfile.UserId = dbo.UsuariosSeccionales.UserId  INNER JOIN dbo.UsuariosCarteraTipos ON dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId OR dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId OR dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId OR dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId  INNER JOIN dbo.Sancionados ON dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId  INNER JOIN dbo.Abogados ON dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$tdataprocesossinnotificacionreport[".sqlWhereExpr"] = "(dbo.Procesos.EstadoId <> 6) OR (dbo.Procesos.Notificacion IS NULL) OR (dbo.Procesos.CarteraTipoId = 1) OR (dbo.Procesos.SeccionalId = 2) OR (dbo.EnAcuerdo(Procesos.ProcesoId) =0)";
$tdataprocesossinnotificacionreport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesossinnotificacionreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesossinnotificacionreport[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesossinnotificacionreport[".highlightSearchResults"] = true;

$tableKeysprocesossinnotificacionreport = array();
$tableKeysprocesossinnotificacionreport[] = "ProcesoId";
$tdataprocesossinnotificacionreport[".Keys"] = $tableKeysprocesossinnotificacionreport;


$tdataprocesossinnotificacionreport[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.ProcesoId";

	
	
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


	$tdataprocesossinnotificacionreport["ProcesoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "ProcesoId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.CarteraTipoId";

	
	
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


	$tdataprocesossinnotificacionreport["CarteraTipoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "CarteraTipoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.SeccionalId";

	
	
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


	$tdataprocesossinnotificacionreport["SeccionalId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "SeccionalId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Abogados.Abogado";

	
	
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


	$tdataprocesossinnotificacionreport["Abogado"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Abogado";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.ConceptoId";

	
	
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


	$tdataprocesossinnotificacionreport["ConceptoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "ConceptoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Fecha";

	
	
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


	$tdataprocesossinnotificacionreport["Fecha"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Fecha";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Numero";

	
	
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


	$tdataprocesossinnotificacionreport["Numero"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Sancionados.Sancionado";

	
	
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


	$tdataprocesossinnotificacionreport["Sancionado"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Sancionados.Documento";

	
	
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


	$tdataprocesossinnotificacionreport["Documento"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Documento";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Obligacion";

	
	
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


	$tdataprocesossinnotificacionreport["Obligacion"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Obligacion";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Intereses";

	
	
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


	$tdataprocesossinnotificacionreport["Intereses"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Intereses";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.Costas";

	
	
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


	$tdataprocesossinnotificacionreport["Costas"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Costas";
//	Mandamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Mandamiento";
	$fdata["GoodName"] = "Mandamiento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","Mandamiento");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Mandamiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select top 1  dbo.Correspondencias.Fecha  FROM dbo.Correspondencias  WHERE dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)  ORDER BY dbo.Correspondencias.Fecha DESC  )";

	
	
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


	$tdataprocesossinnotificacionreport["Mandamiento"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "Mandamiento";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.EstadoId";

	
	
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


	$tdataprocesossinnotificacionreport["EstadoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "EstadoId";
//	dbo.Procesos.AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dbo.Procesos.AbogadoId";
	$fdata["GoodName"] = "dbo_Procesos_AbogadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","dbo_Procesos_AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.AbogadoId";

	
	
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
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificacionreport["dbo.Procesos.AbogadoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "dbo.Procesos.AbogadoId";
//	dbo.Procesos.SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dbo.Procesos.SancionadoId";
	$fdata["GoodName"] = "dbo_Procesos_SancionadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosSinNotificacionReport","dbo_Procesos_SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Procesos.SancionadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Sancionado";

	

	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprocesossinnotificacionreport["dbo.Procesos.SancionadoId"] = $fdata;
		$tdataprocesossinnotificacionreport[".searchableFields"][] = "dbo.Procesos.SancionadoId";


$tables_data["dbo.ProcesosSinNotificacionReport"]=&$tdataprocesossinnotificacionreport;
$field_labels["dbo_ProcesosSinNotificacionReport"] = &$fieldLabelsprocesossinnotificacionreport;
$fieldToolTips["dbo_ProcesosSinNotificacionReport"] = &$fieldToolTipsprocesossinnotificacionreport;
$placeHolders["dbo_ProcesosSinNotificacionReport"] = &$placeHoldersprocesossinnotificacionreport;
$page_titles["dbo_ProcesosSinNotificacionReport"] = &$pageTitlesprocesossinnotificacionreport;


changeTextControlsToDate( "dbo.ProcesosSinNotificacionReport" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosSinNotificacionReport"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosSinNotificacionReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesossinnotificacionreport()
{
$proto0=array();
$proto0["m_strHead"] = "        SELECT";
$proto0["m_strFieldList"] = "dbo.Procesos.ProcesoId,  dbo.Procesos.CarteraTipoId,  dbo.Procesos.SeccionalId,  dbo.Abogados.Abogado,  dbo.Procesos.ConceptoId,  dbo.Procesos.Fecha,  dbo.Procesos.Numero,  dbo.Sancionados.Sancionado,  dbo.Sancionados.Documento,  dbo.Procesos.Obligacion,  dbo.Procesos.Intereses,  dbo.Procesos.Costas,  (select top 1  dbo.Correspondencias.Fecha  FROM dbo.Correspondencias  WHERE dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)  ORDER BY dbo.Correspondencias.Fecha DESC  ) AS Mandamiento,  dbo.Procesos.EstadoId,  dbo.Procesos.AbogadoId AS [dbo.Procesos.AbogadoId],  dbo.Procesos.SancionadoId AS [dbo.Procesos.SancionadoId]";
$proto0["m_strFrom"] = "FROM dbo.Procesos  INNER JOIN dbo.UsuariosSeccionales ON dbo.UsuariosSeccionales.SeccionalId = dbo.Procesos.SeccionalId  INNER JOIN dbo.UserProfile ON dbo.UserProfile.UserId = dbo.UsuariosSeccionales.UserId  INNER JOIN dbo.UsuariosCarteraTipos ON dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId OR dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId OR dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId OR dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId  INNER JOIN dbo.Sancionados ON dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId  INNER JOIN dbo.Abogados ON dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$proto0["m_strWhere"] = "(dbo.Procesos.EstadoId <> 6) OR (dbo.Procesos.Notificacion IS NULL) OR (dbo.Procesos.CarteraTipoId = 1) OR (dbo.Procesos.SeccionalId = 2) OR (dbo.EnAcuerdo(Procesos.ProcesoId) =0)";
$proto0["m_strOrderBy"] = "ORDER BY dbo.Procesos.CarteraTipoId, dbo.Procesos.SeccionalId, dbo.Procesos.AbogadoId, dbo.Procesos.ConceptoId, dbo.Procesos.SancionadoId, dbo.Procesos.EstadoId";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(dbo.Procesos.EstadoId <> 6) OR (dbo.Procesos.Notificacion IS NULL) OR (dbo.Procesos.CarteraTipoId = 1) OR (dbo.Procesos.SeccionalId = 2) OR (dbo.EnAcuerdo(Procesos.ProcesoId) =0)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(dbo.Procesos.EstadoId <> 6) OR (dbo.Procesos.Notificacion IS NULL) OR (dbo.Procesos.CarteraTipoId = 1) OR (dbo.Procesos.SeccionalId = 2) OR (dbo.EnAcuerdo(Procesos.ProcesoId) =0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "dbo.Procesos.EstadoId <> 6";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
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
$proto6["m_sql"] = "dbo.Procesos.Notificacion IS NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
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
$proto8["m_sql"] = "dbo.Procesos.CarteraTipoId = 1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
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
$proto10["m_sql"] = "dbo.Procesos.SeccionalId = 2";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 2";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "dbo.EnAcuerdo(Procesos.ProcesoId) =0";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Procesos.ProcesoId"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "dbo.EnAcuerdo";
$obj = new SQLFunctionCall($proto13);

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=0";
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
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto17["m_sql"] = "dbo.Procesos.ProcesoId";
$proto17["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto19["m_sql"] = "dbo.Procesos.CarteraTipoId";
$proto19["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto21["m_sql"] = "dbo.Procesos.SeccionalId";
$proto21["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto23["m_sql"] = "dbo.Abogados.Abogado";
$proto23["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto25["m_sql"] = "dbo.Procesos.ConceptoId";
$proto25["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto27["m_sql"] = "dbo.Procesos.Fecha";
$proto27["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto29["m_sql"] = "dbo.Procesos.Numero";
$proto29["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto31["m_sql"] = "dbo.Sancionados.Sancionado";
$proto31["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto33["m_sql"] = "dbo.Sancionados.Documento";
$proto33["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto35["m_sql"] = "dbo.Procesos.Obligacion";
$proto35["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto37["m_sql"] = "dbo.Procesos.Intereses";
$proto37["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto39["m_sql"] = "dbo.Procesos.Costas";
$proto39["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_strHead"] = "select top 1";
$proto42["m_strFieldList"] = "dbo.Correspondencias.Fecha";
$proto42["m_strFrom"] = "FROM dbo.Correspondencias";
$proto42["m_strWhere"] = "dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)";
$proto42["m_strOrderBy"] = "ORDER BY dbo.Correspondencias.Fecha DESC";
	
		;
			$proto42["cipherer"] = null;
$proto44=array();
$proto44["m_sql"] = "dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)";
$proto44["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
						$proto46=array();
$proto46["m_sql"] = "dbo.Correspondencias.ProcesoId = Procesos.ProcesoId";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= Procesos.ProcesoId";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

			$proto44["m_contained"][]=$obj;
						$proto48=array();
$proto48["m_sql"] = "dbo.Correspondencias.OficioId in (4328,1105)";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "in (4328,1105)";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto44["m_contained"][]=$obj;
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_where"] = $obj;
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto42["m_having"] = $obj;
$proto42["m_fieldlist"] = array();
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto52["m_sql"] = "dbo.Correspondencias.Fecha";
$proto52["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto42["m_fieldlist"][]=$obj;
$proto42["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "dbo.Correspondencias";
$proto55["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "CorrespondenciaId";
$proto55["m_columns"][] = "ProcesoId";
$proto55["m_columns"][] = "OficioId";
$proto55["m_columns"][] = "Fecha";
$proto55["m_columns"][] = "Sigobius";
$proto55["m_columns"][] = "Observaciones";
$proto55["m_columns"][] = "Resolucion";
$proto55["m_columns"][] = "Codigo";
$proto55["m_columns"][] = "Radicado";
$proto55["m_columns"][] = "UserId";
$proto55["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "dbo.Correspondencias";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
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

$proto42["m_fromlist"][]=$obj;
$proto42["m_groupby"] = array();
$proto42["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Correspondencias",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 0;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto42["m_orderby"][]=$obj;					
$proto42["m_srcTableName"]="dbo.ProcesosSinNotificacionReport";		
$obj = new SQLQuery($proto42);

$proto41["m_sql"] = "(select top 1  dbo.Correspondencias.Fecha  FROM dbo.Correspondencias  WHERE dbo.Correspondencias.ProcesoId = Procesos.ProcesoId OR dbo.Correspondencias.OficioId in (4328,1105)  ORDER BY dbo.Correspondencias.Fecha DESC  )";
$proto41["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Mandamiento";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto60["m_sql"] = "dbo.Procesos.EstadoId";
$proto60["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto62["m_sql"] = "dbo.Procesos.AbogadoId";
$proto62["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "dbo.Procesos.AbogadoId";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto64["m_sql"] = "dbo.Procesos.SancionadoId";
$proto64["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "dbo.Procesos.SancionadoId";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "dbo.Procesos";
$proto67["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "ProcesoId";
$proto67["m_columns"][] = "SeccionalId";
$proto67["m_columns"][] = "AbogadoId";
$proto67["m_columns"][] = "Fecha";
$proto67["m_columns"][] = "Numero";
$proto67["m_columns"][] = "DespachoId";
$proto67["m_columns"][] = "SancionadoId";
$proto67["m_columns"][] = "Providencia";
$proto67["m_columns"][] = "Ejecutoria";
$proto67["m_columns"][] = "ConceptoId";
$proto67["m_columns"][] = "EstadoId";
$proto67["m_columns"][] = "EtapaId";
$proto67["m_columns"][] = "Folios";
$proto67["m_columns"][] = "Tipo";
$proto67["m_columns"][] = "Cantidad";
$proto67["m_columns"][] = "Obligacion";
$proto67["m_columns"][] = "Costas";
$proto67["m_columns"][] = "Liquidacion";
$proto67["m_columns"][] = "Dias";
$proto67["m_columns"][] = "Intereses";
$proto67["m_columns"][] = "Recaudo";
$proto67["m_columns"][] = "CalificacionId";
$proto67["m_columns"][] = "Terminacion";
$proto67["m_columns"][] = "MotivoId";
$proto67["m_columns"][] = "Observaciones";
$proto67["m_columns"][] = "Cuotas";
$proto67["m_columns"][] = "Abono";
$proto67["m_columns"][] = "Inicio";
$proto67["m_columns"][] = "VlrCuota";
$proto67["m_columns"][] = "VlrIntereses";
$proto67["m_columns"][] = "Garantia";
$proto67["m_columns"][] = "Radicado";
$proto67["m_columns"][] = "Remisorio";
$proto67["m_columns"][] = "Acuerdo";
$proto67["m_columns"][] = "Incumplimiento";
$proto67["m_columns"][] = "Notificacion";
$proto67["m_columns"][] = "Suspension";
$proto67["m_columns"][] = "Traslado";
$proto67["m_columns"][] = "Error";
$proto67["m_columns"][] = "CarteraTipoId";
$proto67["m_columns"][] = "ConceptoAbogado";
$proto67["m_columns"][] = "Origen";
$proto67["m_columns"][] = "Carpeta";
$proto67["m_columns"][] = "ImportacionId";
$proto67["m_columns"][] = "ActuacionId";
$proto67["m_columns"][] = "ObligacionInicial";
$proto67["m_columns"][] = "CostasInicial";
$proto67["m_columns"][] = "InteresesInicial";
$proto67["m_columns"][] = "MinJusticia";
$proto67["m_columns"][] = "Revocatoria";
$proto67["m_columns"][] = "Mayor";
$proto67["m_columns"][] = "NotificacionValidada";
$proto67["m_columns"][] = "Validado";
$proto67["m_columns"][] = "Seleccionado";
$proto67["m_columns"][] = "CompetenciaId";
$proto67["m_columns"][] = "MinjusticiaId";
$proto67["m_columns"][] = "SeleccionadoPor";
$proto67["m_columns"][] = "Subsanar";
$proto67["m_columns"][] = "NumeroMinjusticia";
$proto67["m_columns"][] = "ProcesoIdOrigen";
$proto67["m_columns"][] = "SeleccionadoFecha";
$proto67["m_columns"][] = "InteresesIniciales";
$proto67["m_columns"][] = "InteresesCalculados";
$proto67["m_columns"][] = "ProcesoIdDestino";
$proto67["m_columns"][] = "RecaudoMinjusticia";
$proto67["m_columns"][] = "RecaudoTerminado";
$proto67["m_columns"][] = "Persuasivo";
$proto67["m_columns"][] = "ObligacionCreacion";
$proto67["m_columns"][] = "InteresesCreacion";
$proto67["m_columns"][] = "CostasCreacion";
$proto67["m_columns"][] = "Plazo";
$proto67["m_columns"][] = "NaturalezaId";
$proto67["m_columns"][] = "TrasladoCartera";
$proto67["m_columns"][] = "CarteraTipoIdOrigen";
$proto67["m_columns"][] = "TrasladoConcepto";
$proto67["m_columns"][] = "ConceptoIdOrigen";
$proto67["m_columns"][] = "AutorizadoPlazo";
$proto67["m_columns"][] = "AutorizadoFecha";
$proto67["m_columns"][] = "AutorizadoPor";
$proto67["m_columns"][] = "Reliquidacion";
$proto67["m_columns"][] = "ChequeoId";
$proto67["m_columns"][] = "VlrCostas";
$proto67["m_columns"][] = "VlrInteresesPlazo";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "dbo.Procesos";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
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
$proto71["m_strName"] = "dbo.UsuariosSeccionales";
$proto71["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "UsuarioSeccionalId";
$proto71["m_columns"][] = "UserId";
$proto71["m_columns"][] = "SeccionalId";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "INNER JOIN dbo.UsuariosSeccionales ON dbo.UsuariosSeccionales.SeccionalId = dbo.Procesos.SeccionalId";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto72=array();
$proto72["m_sql"] = "dbo.UsuariosSeccionales.SeccionalId = dbo.Procesos.SeccionalId";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.UsuariosSeccionales",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= dbo.Procesos.SeccionalId";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto74=array();
$proto74["m_link"] = "SQLL_INNERJOIN";
			$proto75=array();
$proto75["m_strName"] = "dbo.UserProfile";
$proto75["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "UserId";
$proto75["m_columns"][] = "UserName";
$proto75["m_columns"][] = "HorarioId";
$proto75["m_columns"][] = "SeccionalId";
$proto75["m_columns"][] = "AbogadoId";
$proto75["m_columns"][] = "Email";
$proto75["m_columns"][] = "CarteraTipoId";
$proto75["m_columns"][] = "Fecha";
$proto75["m_columns"][] = "Nombre";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "INNER JOIN dbo.UserProfile ON dbo.UserProfile.UserId = dbo.UsuariosSeccionales.UserId";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto76=array();
$proto76["m_sql"] = "dbo.UserProfile.UserId = dbo.UsuariosSeccionales.UserId";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= dbo.UsuariosSeccionales.UserId";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_INNERJOIN";
			$proto79=array();
$proto79["m_strName"] = "dbo.UsuariosCarteraTipos";
$proto79["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "UsuarioCarteraTipoId";
$proto79["m_columns"][] = "UserId";
$proto79["m_columns"][] = "CarteraTipoId";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "INNER JOIN dbo.UsuariosCarteraTipos ON dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId OR dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId OR dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId OR dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto80=array();
$proto80["m_sql"] = "dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId OR dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId OR dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId OR dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId";
$proto80["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId OR dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId OR dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId OR dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
						$proto82=array();
$proto82["m_sql"] = "dbo.UserProfile.UserId = UsuariosCarteraTipos.UserId";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= UsuariosCarteraTipos.UserId";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

			$proto80["m_contained"][]=$obj;
						$proto84=array();
$proto84["m_sql"] = "dbo.Procesos.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= UsuariosCarteraTipos.CarteraTipoId";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

			$proto80["m_contained"][]=$obj;
						$proto86=array();
$proto86["m_sql"] = "dbo.UsuariosCarteraTipos.UserId = dbo.UserProfile.UserId";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UsuariosCarteraTipos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= dbo.UserProfile.UserId";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

			$proto80["m_contained"][]=$obj;
						$proto88=array();
$proto88["m_sql"] = "dbo.UsuariosCarteraTipos.CarteraTipoId = dbo.Procesos.CarteraTipoId";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.UsuariosCarteraTipos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= dbo.Procesos.CarteraTipoId";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

			$proto80["m_contained"][]=$obj;
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_INNERJOIN";
			$proto91=array();
$proto91["m_strName"] = "dbo.Sancionados";
$proto91["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "SancionadoId";
$proto91["m_columns"][] = "Sancionado";
$proto91["m_columns"][] = "TipoDocumentoId";
$proto91["m_columns"][] = "Documento";
$proto91["m_columns"][] = "Email";
$proto91["m_columns"][] = "Celular";
$proto91["m_columns"][] = "Masculino";
$proto91["m_columns"][] = "Observaciones";
$proto91["m_columns"][] = "Fallecimiento";
$proto91["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "INNER JOIN dbo.Sancionados ON dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto92=array();
$proto92["m_sql"] = "dbo.Sancionados.SancionadoId = dbo.Procesos.SancionadoId";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= dbo.Procesos.SancionadoId";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_INNERJOIN";
			$proto95=array();
$proto95["m_strName"] = "dbo.Abogados";
$proto95["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "AbogadoId";
$proto95["m_columns"][] = "Abogado";
$proto95["m_columns"][] = "Documento";
$proto95["m_columns"][] = "Tarjeta";
$proto95["m_columns"][] = "Direccion";
$proto95["m_columns"][] = "Telefonos";
$proto95["m_columns"][] = "Celular";
$proto95["m_columns"][] = "Email";
$proto95["m_columns"][] = "SeccionalId";
$proto95["m_columns"][] = "Masculino";
$proto95["m_columns"][] = "Activo";
$proto95["m_columns"][] = "Despacho";
$proto95["m_columns"][] = "Codificador";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "INNER JOIN dbo.Abogados ON dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "dbo.ProcesosSinNotificacionReport";
$proto96=array();
$proto96["m_sql"] = "dbo.Abogados.AbogadoId = dbo.Procesos.AbogadoId";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= dbo.Procesos.AbogadoId";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto98["m_column"]=$obj;
$proto98["m_bAsc"] = 1;
$proto98["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto98);

$proto0["m_orderby"][]=$obj;					
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto100["m_column"]=$obj;
$proto100["m_bAsc"] = 1;
$proto100["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto100);

$proto0["m_orderby"][]=$obj;					
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto102["m_column"]=$obj;
$proto102["m_bAsc"] = 1;
$proto102["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto102);

$proto0["m_orderby"][]=$obj;					
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto104["m_column"]=$obj;
$proto104["m_bAsc"] = 1;
$proto104["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto104);

$proto0["m_orderby"][]=$obj;					
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto106["m_column"]=$obj;
$proto106["m_bAsc"] = 1;
$proto106["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto106);

$proto0["m_orderby"][]=$obj;					
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.ProcesosSinNotificacionReport"
));

$proto108["m_column"]=$obj;
$proto108["m_bAsc"] = 1;
$proto108["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto108);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.ProcesosSinNotificacionReport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procesossinnotificacionreport = createSqlQuery_procesossinnotificacionreport();


	
		;

																

$tdataprocesossinnotificacionreport[".sqlquery"] = $queryData_procesossinnotificacionreport;



$tdataprocesossinnotificacionreport[".hasEvents"] = false;

?>