<?php
$tdataseguimiento_y_control_de_acuerdos = array();
$tdataseguimiento_y_control_de_acuerdos[".searchableFields"] = array();
$tdataseguimiento_y_control_de_acuerdos[".ShortName"] = "seguimiento_y_control_de_acuerdos";
$tdataseguimiento_y_control_de_acuerdos[".OwnerID"] = "";
$tdataseguimiento_y_control_de_acuerdos[".OriginalTable"] = "dbo.Acuerdos";


$tdataseguimiento_y_control_de_acuerdos[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataseguimiento_y_control_de_acuerdos[".originalPagesByType"] = $tdataseguimiento_y_control_de_acuerdos[".pagesByType"];
$tdataseguimiento_y_control_de_acuerdos[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataseguimiento_y_control_de_acuerdos[".originalPages"] = $tdataseguimiento_y_control_de_acuerdos[".pages"];
$tdataseguimiento_y_control_de_acuerdos[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataseguimiento_y_control_de_acuerdos[".originalDefaultPages"] = $tdataseguimiento_y_control_de_acuerdos[".defaultPages"];

//	field labels
$fieldLabelsseguimiento_y_control_de_acuerdos = array();
$fieldToolTipsseguimiento_y_control_de_acuerdos = array();
$pageTitlesseguimiento_y_control_de_acuerdos = array();
$placeHoldersseguimiento_y_control_de_acuerdos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"] = array();
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"] = array();
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"] = array();
	$pageTitlesseguimiento_y_control_de_acuerdos["Spanish"] = array();
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["ProcesoId"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["ProcesoId"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["CarteraTipo"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["CarteraTipo"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Seccional"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Seccional"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Numero"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Numero"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Sancionado"] = "Deudor";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Sancionado"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Sancionado"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Concepto"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Concepto"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Documento"] = "Identificacion";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Documento"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Documento"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["saldo"] = "Saldo";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["saldo"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["saldo"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Recaudo"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Recaudo"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Acuerdo"] = "Acuerdo";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Acuerdo"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Acuerdo"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Vcuota"] = "Valor Cuota";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Vcuota"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Vcuota"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Cuotas"] = "Cuotas";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Cuotas"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Cuotas"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["UltPago"] = "Ult. Pago";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["UltPago"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["UltPago"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["FechUltPago"] = "Fecha Ult. Pago";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["FechUltPago"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["FechUltPago"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Abono"] = "Abono Inicial";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Abono"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Abono"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["Incumplimiento"] = "Fecha Incumplimiento";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["Incumplimiento"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["Incumplimiento"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["EstadoId"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["EstadoId"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["fechNotific"] = "Fecha Notificion";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["fechNotific"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["fechNotific"] = "";
	$fieldLabelsseguimiento_y_control_de_acuerdos["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]["OficioId"] = "";
	$placeHoldersseguimiento_y_control_de_acuerdos["Spanish"]["OficioId"] = "";
	if (count($fieldToolTipsseguimiento_y_control_de_acuerdos["Spanish"]))
		$tdataseguimiento_y_control_de_acuerdos[".isUseToolTips"] = true;
}


	$tdataseguimiento_y_control_de_acuerdos[".NCSearch"] = true;



$tdataseguimiento_y_control_de_acuerdos[".shortTableName"] = "seguimiento_y_control_de_acuerdos";
$tdataseguimiento_y_control_de_acuerdos[".nSecOptions"] = 0;

$tdataseguimiento_y_control_de_acuerdos[".mainTableOwnerID"] = "";
$tdataseguimiento_y_control_de_acuerdos[".entityType"] = 2;
$tdataseguimiento_y_control_de_acuerdos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataseguimiento_y_control_de_acuerdos[".strOriginalTableName"] = "dbo.Acuerdos";

	



$tdataseguimiento_y_control_de_acuerdos[".showAddInPopup"] = false;

$tdataseguimiento_y_control_de_acuerdos[".showEditInPopup"] = false;

$tdataseguimiento_y_control_de_acuerdos[".showViewInPopup"] = false;

$tdataseguimiento_y_control_de_acuerdos[".listAjax"] = false;
//	temporary
//$tdataseguimiento_y_control_de_acuerdos[".listAjax"] = false;

	$tdataseguimiento_y_control_de_acuerdos[".audit"] = false;

	$tdataseguimiento_y_control_de_acuerdos[".locking"] = false;


$pages = $tdataseguimiento_y_control_de_acuerdos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseguimiento_y_control_de_acuerdos[".edit"] = true;
	$tdataseguimiento_y_control_de_acuerdos[".afterEditAction"] = 1;
	$tdataseguimiento_y_control_de_acuerdos[".closePopupAfterEdit"] = 1;
	$tdataseguimiento_y_control_de_acuerdos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseguimiento_y_control_de_acuerdos[".add"] = true;
$tdataseguimiento_y_control_de_acuerdos[".afterAddAction"] = 1;
$tdataseguimiento_y_control_de_acuerdos[".closePopupAfterAdd"] = 1;
$tdataseguimiento_y_control_de_acuerdos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseguimiento_y_control_de_acuerdos[".list"] = true;
}



$tdataseguimiento_y_control_de_acuerdos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseguimiento_y_control_de_acuerdos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseguimiento_y_control_de_acuerdos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseguimiento_y_control_de_acuerdos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseguimiento_y_control_de_acuerdos[".printFriendly"] = true;
}



$tdataseguimiento_y_control_de_acuerdos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseguimiento_y_control_de_acuerdos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseguimiento_y_control_de_acuerdos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseguimiento_y_control_de_acuerdos[".isUseAjaxSuggest"] = true;



																																																																																																												

$tdataseguimiento_y_control_de_acuerdos[".ajaxCodeSnippetAdded"] = false;

$tdataseguimiento_y_control_de_acuerdos[".buttonsAdded"] = false;

$tdataseguimiento_y_control_de_acuerdos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseguimiento_y_control_de_acuerdos[".isUseTimeForSearch"] = false;


$tdataseguimiento_y_control_de_acuerdos[".badgeColor"] = "8FBC8B";


$tdataseguimiento_y_control_de_acuerdos[".allSearchFields"] = array();
$tdataseguimiento_y_control_de_acuerdos[".filterFields"] = array();
$tdataseguimiento_y_control_de_acuerdos[".requiredSearchFields"] = array();

$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"] = array();
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "ProcesoId";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "CarteraTipo";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Seccional";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Numero";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Sancionado";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Concepto";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Documento";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "saldo";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Recaudo";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Acuerdo";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Vcuota";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Cuotas";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "UltPago";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "FechUltPago";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Abono";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "Incumplimiento";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "EstadoId";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "fechNotific";
$tdataseguimiento_y_control_de_acuerdos[".googleLikeFields"][] = "OficioId";



$tdataseguimiento_y_control_de_acuerdos[".tableType"] = "report";

$tdataseguimiento_y_control_de_acuerdos[".printerPageOrientation"] = 0;
$tdataseguimiento_y_control_de_acuerdos[".nPrinterPageScale"] = 100;

$tdataseguimiento_y_control_de_acuerdos[".nPrinterSplitRecords"] = 40;

$tdataseguimiento_y_control_de_acuerdos[".geocodingEnabled"] = false;

//report settings

$tdataseguimiento_y_control_de_acuerdos[".reportPrintGroupsPerPage"] = 3;
$tdataseguimiento_y_control_de_acuerdos[".reportPrintRecordsPerPage"] = 40;

$tdataseguimiento_y_control_de_acuerdos[".pageSizeGroups"] = 5;
$tdataseguimiento_y_control_de_acuerdos[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdataseguimiento_y_control_de_acuerdos[".strOrderBy"] = $tstrOrderBy;

$tdataseguimiento_y_control_de_acuerdos[".orderindexes"] = array();


$tdataseguimiento_y_control_de_acuerdos[".sqlHead"] = "select P.ProcesoId,  CT.CarteraTipo,   S.Seccional,  P.Numero,  SA.Sancionado,  C.Concepto,  SA.Documento,  (P.Obligacion + P.Costas + p.Intereses)'saldo',  P.Recaudo,  max(P.Acuerdo) 'Acuerdo',  MAX(A.Total) 'Vcuota',  P.Cuotas,  MAX(PA.Pago) 'UltPago',  MAX(PA.Fecha) 'FechUltPago',  P.Abono,  P.Incumplimiento,  P.EstadoId,  MAX(CO.Fecha) 'fechNotific',  CO.OficioId";
$tdataseguimiento_y_control_de_acuerdos[".sqlFrom"] = "from Procesos P   INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId  INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId  INNER JOIN Sancionados SA ON SA.SancionadoId = P.SancionadoId  INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId  LEFT JOIN Pagos1 PA ON PA.ProcesoId = P.ProcesoId  LEFT JOIN Acuerdos A ON A.ProcesoId = P.ProcesoId  LEFT JOIN Correspondencias CO ON CO.ProcesoId = P.ProcesoId and CO.OficioId  = 4517";
$tdataseguimiento_y_control_de_acuerdos[".sqlWhereExpr"] = "";
$tdataseguimiento_y_control_de_acuerdos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseguimiento_y_control_de_acuerdos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseguimiento_y_control_de_acuerdos[".arrGroupsPerPage"] = $arrGPP;

$tdataseguimiento_y_control_de_acuerdos[".highlightSearchResults"] = true;

$tableKeysseguimiento_y_control_de_acuerdos = array();
$tdataseguimiento_y_control_de_acuerdos[".Keys"] = $tableKeysseguimiento_y_control_de_acuerdos;


$tdataseguimiento_y_control_de_acuerdos[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.ProcesoId";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["ProcesoId"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "ProcesoId";
//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT.CarteraTipo";

	
	
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
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataseguimiento_y_control_de_acuerdos["CarteraTipo"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "CarteraTipo";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Seccional";

	
	
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
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataseguimiento_y_control_de_acuerdos["Seccional"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Seccional";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Numero";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Numero"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA.Sancionado";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Sancionado"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Sancionado";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Concepto";

	
	
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
		$fdata["filterTotalFields"] = "ProcesoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataseguimiento_y_control_de_acuerdos["Concepto"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Concepto";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA.Documento";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Documento"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Documento";
//	saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "saldo";
	$fdata["GoodName"] = "saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(P.Obligacion + P.Costas + p.Intereses)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataseguimiento_y_control_de_acuerdos["saldo"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "saldo";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Recaudo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Recaudo"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Recaudo";
//	Acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Acuerdo";
	$fdata["GoodName"] = "Acuerdo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Acuerdo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Acuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "max(P.Acuerdo)";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Acuerdo"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Acuerdo";
//	Vcuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Vcuota";
	$fdata["GoodName"] = "Vcuota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Vcuota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Vcuota";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(A.Total)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Vcuota"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Vcuota";
//	Cuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Cuotas";
	$fdata["GoodName"] = "Cuotas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Cuotas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuotas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Cuotas";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Cuotas"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Cuotas";
//	UltPago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UltPago";
	$fdata["GoodName"] = "UltPago";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","UltPago");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "UltPago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(PA.Pago)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataseguimiento_y_control_de_acuerdos["UltPago"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "UltPago";
//	FechUltPago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FechUltPago";
	$fdata["GoodName"] = "FechUltPago";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","FechUltPago");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "FechUltPago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(PA.Fecha)";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["FechUltPago"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "FechUltPago";
//	Abono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Abono";
	$fdata["GoodName"] = "Abono";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Abono");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Abono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Abono";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Abono"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Abono";
//	Incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Incumplimiento";
	$fdata["GoodName"] = "Incumplimiento";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","Incumplimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Incumplimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Incumplimiento";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["Incumplimiento"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "Incumplimiento";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.EstadoId";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Estado";

	

	
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
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataseguimiento_y_control_de_acuerdos["EstadoId"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "EstadoId";
//	fechNotific
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fechNotific";
	$fdata["GoodName"] = "fechNotific";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","fechNotific");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "fechNotific";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(CO.Fecha)";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["fechNotific"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "fechNotific";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Correspondencias";
	$fdata["Label"] = GetFieldLabel("dbo_Seguimiento_y_control_de_Acuerdos","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CO.OficioId";

	
	
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


	$tdataseguimiento_y_control_de_acuerdos["OficioId"] = $fdata;
		$tdataseguimiento_y_control_de_acuerdos[".searchableFields"][] = "OficioId";


$tables_data["dbo.Seguimiento y control de Acuerdos"]=&$tdataseguimiento_y_control_de_acuerdos;
$field_labels["dbo_Seguimiento_y_control_de_Acuerdos"] = &$fieldLabelsseguimiento_y_control_de_acuerdos;
$fieldToolTips["dbo_Seguimiento_y_control_de_Acuerdos"] = &$fieldToolTipsseguimiento_y_control_de_acuerdos;
$placeHolders["dbo_Seguimiento_y_control_de_Acuerdos"] = &$placeHoldersseguimiento_y_control_de_acuerdos;
$page_titles["dbo_Seguimiento_y_control_de_Acuerdos"] = &$pageTitlesseguimiento_y_control_de_acuerdos;


changeTextControlsToDate( "dbo.Seguimiento y control de Acuerdos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Seguimiento y control de Acuerdos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Seguimiento y control de Acuerdos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seguimiento_y_control_de_acuerdos()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "P.ProcesoId,  CT.CarteraTipo,   S.Seccional,  P.Numero,  SA.Sancionado,  C.Concepto,  SA.Documento,  (P.Obligacion + P.Costas + p.Intereses)'saldo',  P.Recaudo,  max(P.Acuerdo) 'Acuerdo',  MAX(A.Total) 'Vcuota',  P.Cuotas,  MAX(PA.Pago) 'UltPago',  MAX(PA.Fecha) 'FechUltPago',  P.Abono,  P.Incumplimiento,  P.EstadoId,  MAX(CO.Fecha) 'fechNotific',  CO.OficioId";
$proto0["m_strFrom"] = "from Procesos P   INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId  INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId  INNER JOIN Sancionados SA ON SA.SancionadoId = P.SancionadoId  INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId  LEFT JOIN Pagos1 PA ON PA.ProcesoId = P.ProcesoId  LEFT JOIN Acuerdos A ON A.ProcesoId = P.ProcesoId  LEFT JOIN Correspondencias CO ON CO.ProcesoId = P.ProcesoId and CO.OficioId  = 4517";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
$proto4["m_sql"] = "P.Acuerdo is not null and P.Incumplimiento is null and P.EstadoId in (2,3)";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "P.Acuerdo is not null and P.Incumplimiento is null and P.EstadoId in (2,3)"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "P.Acuerdo is not null";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "is not null";
$proto6["m_havingmode"] = true;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "P.Incumplimiento is null";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "is null";
$proto8["m_havingmode"] = true;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "P.EstadoId in (2,3)";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "in (2,3)";
$proto10["m_havingmode"] = true;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = true;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto12["m_sql"] = "P.ProcesoId";
$proto12["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipo",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto14["m_sql"] = "CT.CarteraTipo";
$proto14["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto16["m_sql"] = "S.Seccional";
$proto16["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto18["m_sql"] = "P.Numero";
$proto18["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto20["m_sql"] = "SA.Sancionado";
$proto20["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto22["m_sql"] = "C.Concepto";
$proto22["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto24["m_sql"] = "SA.Documento";
$proto24["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(P.Obligacion + P.Costas + p.Intereses)"
));

$proto26["m_sql"] = "(P.Obligacion + P.Costas + p.Intereses)";
$proto26["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "saldo";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto28["m_sql"] = "P.Recaudo";
$proto28["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_MAX";
$proto31["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "max";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "max(P.Acuerdo)";
$proto30["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "Acuerdo";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_MAX";
$proto34["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Total",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "MAX(A.Total)";
$proto33["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Vcuota";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuotas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto36["m_sql"] = "P.Cuotas";
$proto36["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_MAX";
$proto39["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Pago",
	"m_strTable" => "PA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "MAX(PA.Pago)";
$proto38["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "UltPago";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_MAX";
$proto42["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "PA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "MAX(PA.Fecha)";
$proto41["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "FechUltPago";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Abono",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto44["m_sql"] = "P.Abono";
$proto44["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto46["m_sql"] = "P.Incumplimiento";
$proto46["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto48["m_sql"] = "P.EstadoId";
$proto48["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$proto51=array();
$proto51["m_functiontype"] = "SQLF_MAX";
$proto51["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "CO",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto51["m_arguments"][]=$obj;
$proto51["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto51);

$proto50["m_sql"] = "MAX(CO.Fecha)";
$proto50["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "fechNotific";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "CO",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto53["m_sql"] = "CO.OficioId";
$proto53["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto55=array();
$proto55["m_link"] = "SQLL_MAIN";
			$proto56=array();
$proto56["m_strName"] = "dbo.Procesos";
$proto56["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "ProcesoId";
$proto56["m_columns"][] = "SeccionalId";
$proto56["m_columns"][] = "AbogadoId";
$proto56["m_columns"][] = "Fecha";
$proto56["m_columns"][] = "Numero";
$proto56["m_columns"][] = "DespachoId";
$proto56["m_columns"][] = "SancionadoId";
$proto56["m_columns"][] = "Providencia";
$proto56["m_columns"][] = "Ejecutoria";
$proto56["m_columns"][] = "ConceptoId";
$proto56["m_columns"][] = "EstadoId";
$proto56["m_columns"][] = "EtapaId";
$proto56["m_columns"][] = "Folios";
$proto56["m_columns"][] = "Tipo";
$proto56["m_columns"][] = "Cantidad";
$proto56["m_columns"][] = "Obligacion";
$proto56["m_columns"][] = "Costas";
$proto56["m_columns"][] = "Liquidacion";
$proto56["m_columns"][] = "Dias";
$proto56["m_columns"][] = "Intereses";
$proto56["m_columns"][] = "Recaudo";
$proto56["m_columns"][] = "CalificacionId";
$proto56["m_columns"][] = "Terminacion";
$proto56["m_columns"][] = "MotivoId";
$proto56["m_columns"][] = "Observaciones";
$proto56["m_columns"][] = "Cuotas";
$proto56["m_columns"][] = "Abono";
$proto56["m_columns"][] = "Inicio";
$proto56["m_columns"][] = "VlrCuota";
$proto56["m_columns"][] = "VlrIntereses";
$proto56["m_columns"][] = "Garantia";
$proto56["m_columns"][] = "Radicado";
$proto56["m_columns"][] = "Remisorio";
$proto56["m_columns"][] = "Acuerdo";
$proto56["m_columns"][] = "Incumplimiento";
$proto56["m_columns"][] = "Notificacion";
$proto56["m_columns"][] = "Suspension";
$proto56["m_columns"][] = "Traslado";
$proto56["m_columns"][] = "Error";
$proto56["m_columns"][] = "CarteraTipoId";
$proto56["m_columns"][] = "ConceptoAbogado";
$proto56["m_columns"][] = "Origen";
$proto56["m_columns"][] = "Carpeta";
$proto56["m_columns"][] = "ImportacionId";
$proto56["m_columns"][] = "ActuacionId";
$proto56["m_columns"][] = "ObligacionInicial";
$proto56["m_columns"][] = "CostasInicial";
$proto56["m_columns"][] = "InteresesInicial";
$proto56["m_columns"][] = "MinJusticia";
$proto56["m_columns"][] = "Revocatoria";
$proto56["m_columns"][] = "Mayor";
$proto56["m_columns"][] = "NotificacionValidada";
$proto56["m_columns"][] = "Validado";
$proto56["m_columns"][] = "Seleccionado";
$proto56["m_columns"][] = "CompetenciaId";
$proto56["m_columns"][] = "MinjusticiaId";
$proto56["m_columns"][] = "SeleccionadoPor";
$proto56["m_columns"][] = "Subsanar";
$proto56["m_columns"][] = "NumeroMinjusticia";
$proto56["m_columns"][] = "ProcesoIdOrigen";
$proto56["m_columns"][] = "SeleccionadoFecha";
$proto56["m_columns"][] = "InteresesIniciales";
$proto56["m_columns"][] = "InteresesCalculados";
$proto56["m_columns"][] = "ProcesoIdDestino";
$proto56["m_columns"][] = "RecaudoMinjusticia";
$proto56["m_columns"][] = "RecaudoTerminado";
$proto56["m_columns"][] = "Persuasivo";
$proto56["m_columns"][] = "ObligacionCreacion";
$proto56["m_columns"][] = "InteresesCreacion";
$proto56["m_columns"][] = "CostasCreacion";
$proto56["m_columns"][] = "Plazo";
$proto56["m_columns"][] = "NaturalezaId";
$proto56["m_columns"][] = "TrasladoCartera";
$proto56["m_columns"][] = "CarteraTipoIdOrigen";
$proto56["m_columns"][] = "TrasladoConcepto";
$proto56["m_columns"][] = "ConceptoIdOrigen";
$proto56["m_columns"][] = "AutorizadoPlazo";
$proto56["m_columns"][] = "AutorizadoFecha";
$proto56["m_columns"][] = "AutorizadoPor";
$proto56["m_columns"][] = "Reliquidacion";
$proto56["m_columns"][] = "ChequeoId";
$proto56["m_columns"][] = "VlrCostas";
$proto56["m_columns"][] = "VlrInteresesPlazo";
$proto56["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "Procesos P";
$proto55["m_alias"] = "P";
$proto55["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_INNERJOIN";
			$proto60=array();
$proto60["m_strName"] = "dbo.CarteraTipos";
$proto60["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "CarteraTipoId";
$proto60["m_columns"][] = "CarteraTipo";
$proto60["m_columns"][] = "Color";
$proto60["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "INNER JOIN CarteraTipos CT ON CT.CarteraTipoId = P.CarteraTipoId";
$proto59["m_alias"] = "CT";
$proto59["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto61=array();
$proto61["m_sql"] = "CT.CarteraTipoId = P.CarteraTipoId";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= P.CarteraTipoId";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_INNERJOIN";
			$proto64=array();
$proto64["m_strName"] = "dbo.Seccionales";
$proto64["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "SeccionalId";
$proto64["m_columns"][] = "Codigo";
$proto64["m_columns"][] = "Seccional";
$proto64["m_columns"][] = "NIT";
$proto64["m_columns"][] = "CiudadId";
$proto64["m_columns"][] = "PiePagina";
$proto64["m_columns"][] = "Sigobius";
$proto64["m_columns"][] = "Email";
$proto64["m_columns"][] = "Direccion";
$proto64["m_columns"][] = "Telefonos";
$proto64["m_columns"][] = "PCI";
$proto64["m_columns"][] = "Contador";
$proto64["m_columns"][] = "ContadorCargo";
$proto64["m_columns"][] = "Director";
$proto64["m_columns"][] = "DirectorCargo";
$proto64["m_columns"][] = "Abogado";
$proto64["m_columns"][] = "AbogadoCargo";
$proto64["m_columns"][] = "Formato";
$proto64["m_columns"][] = "Corporacion";
$proto64["m_columns"][] = "Unidad";
$proto64["m_columns"][] = "Oficina";
$proto64["m_columns"][] = "Serie";
$proto64["m_columns"][] = "Subserie";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "INNER JOIN Seccionales S ON S.SeccionalId = P.SeccionalId";
$proto63["m_alias"] = "S";
$proto63["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto65=array();
$proto65["m_sql"] = "S.SeccionalId = P.SeccionalId";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= P.SeccionalId";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
												$proto67=array();
$proto67["m_link"] = "SQLL_INNERJOIN";
			$proto68=array();
$proto68["m_strName"] = "dbo.Sancionados";
$proto68["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "SancionadoId";
$proto68["m_columns"][] = "Sancionado";
$proto68["m_columns"][] = "TipoDocumentoId";
$proto68["m_columns"][] = "Documento";
$proto68["m_columns"][] = "Email";
$proto68["m_columns"][] = "Celular";
$proto68["m_columns"][] = "Masculino";
$proto68["m_columns"][] = "Observaciones";
$proto68["m_columns"][] = "Fallecimiento";
$proto68["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "INNER JOIN Sancionados SA ON SA.SancionadoId = P.SancionadoId";
$proto67["m_alias"] = "SA";
$proto67["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto69=array();
$proto69["m_sql"] = "SA.SancionadoId = P.SancionadoId";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= P.SancionadoId";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_INNERJOIN";
			$proto72=array();
$proto72["m_strName"] = "dbo.Conceptos";
$proto72["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "ConceptoId";
$proto72["m_columns"][] = "Concepto";
$proto72["m_columns"][] = "Activo";
$proto72["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "INNER JOIN Conceptos C ON C.ConceptoId = P.ConceptoId";
$proto71["m_alias"] = "C";
$proto71["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto73=array();
$proto73["m_sql"] = "C.ConceptoId = P.ConceptoId";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "= P.ConceptoId";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
												$proto75=array();
$proto75["m_link"] = "SQLL_LEFTJOIN";
			$proto76=array();
$proto76["m_strName"] = "dbo.Pagos1";
$proto76["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto76["m_columns"] = array();
$proto76["m_columns"][] = "PagoId";
$proto76["m_columns"][] = "ProcesoId";
$proto76["m_columns"][] = "CuentaId";
$proto76["m_columns"][] = "Fecha";
$proto76["m_columns"][] = "Numero";
$proto76["m_columns"][] = "Pago";
$proto76["m_columns"][] = "Observaciones";
$proto76["m_columns"][] = "Registro";
$proto76["m_columns"][] = "PagoObli";
$proto76["m_columns"][] = "PagoCost";
$proto76["m_columns"][] = "PagoInte";
$proto76["m_columns"][] = "PagoMayo";
$proto76["m_columns"][] = "PagoTerm";
$proto76["m_columns"][] = "PagoIdOrig";
$proto76["m_columns"][] = "TipoRecaudoId";
$obj = new SQLTable($proto76);

$proto75["m_table"] = $obj;
$proto75["m_sql"] = "LEFT JOIN Pagos1 PA ON PA.ProcesoId = P.ProcesoId";
$proto75["m_alias"] = "PA";
$proto75["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto77=array();
$proto77["m_sql"] = "PA.ProcesoId = P.ProcesoId";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "PA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "= P.ProcesoId";
$proto77["m_havingmode"] = false;
$proto77["m_inBrackets"] = false;
$proto77["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto77);

$proto75["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto75);

$proto0["m_fromlist"][]=$obj;
												$proto79=array();
$proto79["m_link"] = "SQLL_LEFTJOIN";
			$proto80=array();
$proto80["m_strName"] = "dbo.Acuerdos";
$proto80["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto80["m_columns"] = array();
$proto80["m_columns"][] = "AcuerdoId";
$proto80["m_columns"][] = "ProcesoId";
$proto80["m_columns"][] = "Fecha";
$proto80["m_columns"][] = "Total";
$proto80["m_columns"][] = "Capital";
$proto80["m_columns"][] = "Intereses";
$proto80["m_columns"][] = "Cuota";
$proto80["m_columns"][] = "Costas";
$proto80["m_columns"][] = "InteresesPlazo";
$obj = new SQLTable($proto80);

$proto79["m_table"] = $obj;
$proto79["m_sql"] = "LEFT JOIN Acuerdos A ON A.ProcesoId = P.ProcesoId";
$proto79["m_alias"] = "A";
$proto79["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto81=array();
$proto81["m_sql"] = "A.ProcesoId = P.ProcesoId";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "= P.ProcesoId";
$proto81["m_havingmode"] = false;
$proto81["m_inBrackets"] = false;
$proto81["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto81);

$proto79["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto79);

$proto0["m_fromlist"][]=$obj;
												$proto83=array();
$proto83["m_link"] = "SQLL_LEFTJOIN";
			$proto84=array();
$proto84["m_strName"] = "dbo.Correspondencias";
$proto84["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "CorrespondenciaId";
$proto84["m_columns"][] = "ProcesoId";
$proto84["m_columns"][] = "OficioId";
$proto84["m_columns"][] = "Fecha";
$proto84["m_columns"][] = "Sigobius";
$proto84["m_columns"][] = "Observaciones";
$proto84["m_columns"][] = "Resolucion";
$proto84["m_columns"][] = "Codigo";
$proto84["m_columns"][] = "Radicado";
$proto84["m_columns"][] = "UserId";
$proto84["m_columns"][] = "AbogadoId";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_sql"] = "LEFT JOIN Correspondencias CO ON CO.ProcesoId = P.ProcesoId and CO.OficioId  = 4517";
$proto83["m_alias"] = "CO";
$proto83["m_srcTableName"] = "dbo.Seguimiento y control de Acuerdos";
$proto85=array();
$proto85["m_sql"] = "CO.ProcesoId = P.ProcesoId and CO.OficioId  = 4517";
$proto85["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "CO.ProcesoId = P.ProcesoId and CO.OficioId  = 4517"
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
						$proto87=array();
$proto87["m_sql"] = "CO.ProcesoId = P.ProcesoId";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "CO",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "= P.ProcesoId";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

			$proto85["m_contained"][]=$obj;
						$proto89=array();
$proto89["m_sql"] = "CO.OficioId  = 4517";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "CO",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "= 4517";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

			$proto85["m_contained"][]=$obj;
$proto85["m_strCase"] = "";
$proto85["m_havingmode"] = false;
$proto85["m_inBrackets"] = false;
$proto85["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto85);

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto91=array();
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto91["m_column"]=$obj;
$obj = new SQLGroupByItem($proto91);

$proto0["m_groupby"][]=$obj;
												$proto93=array();
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipo",
	"m_strTable" => "CT",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto93["m_column"]=$obj;
$obj = new SQLGroupByItem($proto93);

$proto0["m_groupby"][]=$obj;
												$proto95=array();
						$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto95["m_column"]=$obj;
$obj = new SQLGroupByItem($proto95);

$proto0["m_groupby"][]=$obj;
												$proto97=array();
						$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto97["m_column"]=$obj;
$obj = new SQLGroupByItem($proto97);

$proto0["m_groupby"][]=$obj;
												$proto99=array();
						$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto99["m_column"]=$obj;
$obj = new SQLGroupByItem($proto99);

$proto0["m_groupby"][]=$obj;
												$proto101=array();
						$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto101["m_column"]=$obj;
$obj = new SQLGroupByItem($proto101);

$proto0["m_groupby"][]=$obj;
												$proto103=array();
						$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "SA",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto103["m_column"]=$obj;
$obj = new SQLGroupByItem($proto103);

$proto0["m_groupby"][]=$obj;
												$proto105=array();
						$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto105["m_column"]=$obj;
$obj = new SQLGroupByItem($proto105);

$proto0["m_groupby"][]=$obj;
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto107["m_column"]=$obj;
$obj = new SQLGroupByItem($proto107);

$proto0["m_groupby"][]=$obj;
												$proto109=array();
						$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto109["m_column"]=$obj;
$obj = new SQLGroupByItem($proto109);

$proto0["m_groupby"][]=$obj;
												$proto111=array();
						$obj = new SQLField(array(
	"m_strName" => "Cuotas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto111["m_column"]=$obj;
$obj = new SQLGroupByItem($proto111);

$proto0["m_groupby"][]=$obj;
												$proto113=array();
						$obj = new SQLField(array(
	"m_strName" => "VlrCuota",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto113["m_column"]=$obj;
$obj = new SQLGroupByItem($proto113);

$proto0["m_groupby"][]=$obj;
												$proto115=array();
						$obj = new SQLField(array(
	"m_strName" => "Abono",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto115["m_column"]=$obj;
$obj = new SQLGroupByItem($proto115);

$proto0["m_groupby"][]=$obj;
												$proto117=array();
						$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto117["m_column"]=$obj;
$obj = new SQLGroupByItem($proto117);

$proto0["m_groupby"][]=$obj;
												$proto119=array();
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto119["m_column"]=$obj;
$obj = new SQLGroupByItem($proto119);

$proto0["m_groupby"][]=$obj;
												$proto121=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(P.Obligacion + P.Costas + p.Intereses)"
));

$proto121["m_column"]=$obj;
$obj = new SQLGroupByItem($proto121);

$proto0["m_groupby"][]=$obj;
												$proto123=array();
						$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "CO",
	"m_srcTableName" => "dbo.Seguimiento y control de Acuerdos"
));

$proto123["m_column"]=$obj;
$obj = new SQLGroupByItem($proto123);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Seguimiento y control de Acuerdos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seguimiento_y_control_de_acuerdos = createSqlQuery_seguimiento_y_control_de_acuerdos();


	
		;

																			

$tdataseguimiento_y_control_de_acuerdos[".sqlquery"] = $queryData_seguimiento_y_control_de_acuerdos;



$tdataseguimiento_y_control_de_acuerdos[".hasEvents"] = false;

?>