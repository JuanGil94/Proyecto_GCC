<?php
$tdataminjusticia2 = array();
$tdataminjusticia2[".searchableFields"] = array();
$tdataminjusticia2[".ShortName"] = "minjusticia2";
$tdataminjusticia2[".OwnerID"] = "";
$tdataminjusticia2[".OriginalTable"] = "dbo.Minjusticia2";


$tdataminjusticia2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataminjusticia2[".originalPagesByType"] = $tdataminjusticia2[".pagesByType"];
$tdataminjusticia2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataminjusticia2[".originalPages"] = $tdataminjusticia2[".pages"];
$tdataminjusticia2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataminjusticia2[".originalDefaultPages"] = $tdataminjusticia2[".defaultPages"];

//	field labels
$fieldLabelsminjusticia2 = array();
$fieldToolTipsminjusticia2 = array();
$pageTitlesminjusticia2 = array();
$placeHoldersminjusticia2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsminjusticia2["Spanish"] = array();
	$fieldToolTipsminjusticia2["Spanish"] = array();
	$placeHoldersminjusticia2["Spanish"] = array();
	$pageTitlesminjusticia2["Spanish"] = array();
	$fieldLabelsminjusticia2["Spanish"]["MinjusticiaId"] = "Minjusticia Id";
	$fieldToolTipsminjusticia2["Spanish"]["MinjusticiaId"] = "";
	$placeHoldersminjusticia2["Spanish"]["MinjusticiaId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Minjusticia"] = "Minjusticia";
	$fieldToolTipsminjusticia2["Spanish"]["Minjusticia"] = "";
	$placeHoldersminjusticia2["Spanish"]["Minjusticia"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsminjusticia2["Spanish"]["Numero"] = "";
	$placeHoldersminjusticia2["Spanish"]["Numero"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsminjusticia2["Spanish"]["Nombre"] = "";
	$placeHoldersminjusticia2["Spanish"]["Nombre"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsminjusticia2["Spanish"]["Documento"] = "";
	$placeHoldersminjusticia2["Spanish"]["Documento"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Sentencia"] = "Sentencia";
	$fieldToolTipsminjusticia2["Spanish"]["Sentencia"] = "";
	$placeHoldersminjusticia2["Spanish"]["Sentencia"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipsminjusticia2["Spanish"]["Ejecutoria"] = "";
	$placeHoldersminjusticia2["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsminjusticia2["Spanish"]["Obligacion"] = "";
	$placeHoldersminjusticia2["Spanish"]["Obligacion"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsminjusticia2["Spanish"]["Recaudo"] = "";
	$placeHoldersminjusticia2["Spanish"]["Recaudo"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Recaudo_Val"] = "Recaudo Val";
	$fieldToolTipsminjusticia2["Spanish"]["Recaudo_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Recaudo_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsminjusticia2["Spanish"]["Saldo"] = "";
	$placeHoldersminjusticia2["Spanish"]["Saldo"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsminjusticia2["Spanish"]["Intereses"] = "";
	$placeHoldersminjusticia2["Spanish"]["Intereses"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Intereses_Val"] = "Intereses Val";
	$fieldToolTipsminjusticia2["Spanish"]["Intereses_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Intereses_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsminjusticia2["Spanish"]["AbogadoId"] = "";
	$placeHoldersminjusticia2["Spanish"]["AbogadoId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Caja"] = "Caja";
	$fieldToolTipsminjusticia2["Spanish"]["Caja"] = "";
	$placeHoldersminjusticia2["Spanish"]["Caja"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Cuadernillos"] = "Cuadernillos";
	$fieldToolTipsminjusticia2["Spanish"]["Cuadernillos"] = "";
	$placeHoldersminjusticia2["Spanish"]["Cuadernillos"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsminjusticia2["Spanish"]["Folios"] = "";
	$placeHoldersminjusticia2["Spanish"]["Folios"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Hechos"] = "Hechos";
	$fieldToolTipsminjusticia2["Spanish"]["Hechos"] = "";
	$placeHoldersminjusticia2["Spanish"]["Hechos"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Salarios"] = "Salarios";
	$fieldToolTipsminjusticia2["Spanish"]["Salarios"] = "";
	$placeHoldersminjusticia2["Spanish"]["Salarios"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Obligacion_Val"] = "Obligacion Val";
	$fieldToolTipsminjusticia2["Spanish"]["Obligacion_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Obligacion_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsminjusticia2["Spanish"]["DespachoId"] = "";
	$placeHoldersminjusticia2["Spanish"]["DespachoId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipsminjusticia2["Spanish"]["TipoDocumentoId"] = "";
	$placeHoldersminjusticia2["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsminjusticia2["Spanish"]["SeccionalId"] = "";
	$placeHoldersminjusticia2["Spanish"]["SeccionalId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Registro"] = "Registro";
	$fieldToolTipsminjusticia2["Spanish"]["Registro"] = "";
	$placeHoldersminjusticia2["Spanish"]["Registro"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Aprobacion"] = "Aprobacion";
	$fieldToolTipsminjusticia2["Spanish"]["Aprobacion"] = "";
	$placeHoldersminjusticia2["Spanish"]["Aprobacion"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Sentencia_Val"] = "Sentencia Val";
	$fieldToolTipsminjusticia2["Spanish"]["Sentencia_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Sentencia_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Ejecutoria_Val"] = "Ejecutoria Val";
	$fieldToolTipsminjusticia2["Spanish"]["Ejecutoria_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Ejecutoria_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Notificacion"] = "Notificacion";
	$fieldToolTipsminjusticia2["Spanish"]["Notificacion"] = "";
	$placeHoldersminjusticia2["Spanish"]["Notificacion"] = "";
	$fieldLabelsminjusticia2["Spanish"]["AcuerdoPago"] = "Acuerdo Pago";
	$fieldToolTipsminjusticia2["Spanish"]["AcuerdoPago"] = "";
	$placeHoldersminjusticia2["Spanish"]["AcuerdoPago"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ValorAcuerdopago"] = "Valor Acuerdopago";
	$fieldToolTipsminjusticia2["Spanish"]["ValorAcuerdopago"] = "";
	$placeHoldersminjusticia2["Spanish"]["ValorAcuerdopago"] = "";
	$fieldLabelsminjusticia2["Spanish"]["NumeroCuotas"] = "Numero Cuotas";
	$fieldToolTipsminjusticia2["Spanish"]["NumeroCuotas"] = "";
	$placeHoldersminjusticia2["Spanish"]["NumeroCuotas"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ValorCuota"] = "Valor Cuota";
	$fieldToolTipsminjusticia2["Spanish"]["ValorCuota"] = "";
	$placeHoldersminjusticia2["Spanish"]["ValorCuota"] = "";
	$fieldLabelsminjusticia2["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipsminjusticia2["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersminjusticia2["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsminjusticia2["Spanish"]["Observaciones"] = "";
	$placeHoldersminjusticia2["Spanish"]["Observaciones"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsminjusticia2["Spanish"]["ProcesoId"] = "";
	$placeHoldersminjusticia2["Spanish"]["ProcesoId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Nombre_Val"] = "Nombre Val";
	$fieldToolTipsminjusticia2["Spanish"]["Nombre_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Nombre_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Documento_Val"] = "Documento Val";
	$fieldToolTipsminjusticia2["Spanish"]["Documento_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Documento_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ActaIndividual"] = "Acta Individual";
	$fieldToolTipsminjusticia2["Spanish"]["ActaIndividual"] = "";
	$placeHoldersminjusticia2["Spanish"]["ActaIndividual"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ActaConsolidada"] = "Acta Consolidada";
	$fieldToolTipsminjusticia2["Spanish"]["ActaConsolidada"] = "";
	$placeHoldersminjusticia2["Spanish"]["ActaConsolidada"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Autorizacion"] = "Autorizacion";
	$fieldToolTipsminjusticia2["Spanish"]["Autorizacion"] = "";
	$placeHoldersminjusticia2["Spanish"]["Autorizacion"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Autorizado"] = "Autorizado";
	$fieldToolTipsminjusticia2["Spanish"]["Autorizado"] = "";
	$placeHoldersminjusticia2["Spanish"]["Autorizado"] = "";
	$fieldLabelsminjusticia2["Spanish"]["CausalId"] = "Causal Id";
	$fieldToolTipsminjusticia2["Spanish"]["CausalId"] = "";
	$placeHoldersminjusticia2["Spanish"]["CausalId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Numero_Val"] = "Numero Val";
	$fieldToolTipsminjusticia2["Spanish"]["Numero_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Numero_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Minjusticia_Val"] = "Minjusticia Val";
	$fieldToolTipsminjusticia2["Spanish"]["Minjusticia_Val"] = "";
	$placeHoldersminjusticia2["Spanish"]["Minjusticia_Val"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Pesos"] = "Pesos";
	$fieldToolTipsminjusticia2["Spanish"]["Pesos"] = "";
	$placeHoldersminjusticia2["Spanish"]["Pesos"] = "";
	$fieldLabelsminjusticia2["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsminjusticia2["Spanish"]["UserId"] = "";
	$placeHoldersminjusticia2["Spanish"]["UserId"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Digitalizado"] = "Digitalizado";
	$fieldToolTipsminjusticia2["Spanish"]["Digitalizado"] = "";
	$placeHoldersminjusticia2["Spanish"]["Digitalizado"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Procesado"] = "Procesado";
	$fieldToolTipsminjusticia2["Spanish"]["Procesado"] = "";
	$placeHoldersminjusticia2["Spanish"]["Procesado"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ActaAnterior"] = "Acta Anterior";
	$fieldToolTipsminjusticia2["Spanish"]["ActaAnterior"] = "";
	$placeHoldersminjusticia2["Spanish"]["ActaAnterior"] = "";
	$fieldLabelsminjusticia2["Spanish"]["ActaActual"] = "Acta Actual";
	$fieldToolTipsminjusticia2["Spanish"]["ActaActual"] = "";
	$placeHoldersminjusticia2["Spanish"]["ActaActual"] = "";
	$fieldLabelsminjusticia2["Spanish"]["Subsanar"] = "Subsanar";
	$fieldToolTipsminjusticia2["Spanish"]["Subsanar"] = "";
	$placeHoldersminjusticia2["Spanish"]["Subsanar"] = "";
	if (count($fieldToolTipsminjusticia2["Spanish"]))
		$tdataminjusticia2[".isUseToolTips"] = true;
}


	$tdataminjusticia2[".NCSearch"] = true;



$tdataminjusticia2[".shortTableName"] = "minjusticia2";
$tdataminjusticia2[".nSecOptions"] = 0;

$tdataminjusticia2[".mainTableOwnerID"] = "";
$tdataminjusticia2[".entityType"] = 0;
$tdataminjusticia2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataminjusticia2[".strOriginalTableName"] = "dbo.Minjusticia2";

	



$tdataminjusticia2[".showAddInPopup"] = false;

$tdataminjusticia2[".showEditInPopup"] = false;

$tdataminjusticia2[".showViewInPopup"] = false;

$tdataminjusticia2[".listAjax"] = false;
//	temporary
//$tdataminjusticia2[".listAjax"] = false;

	$tdataminjusticia2[".audit"] = false;

	$tdataminjusticia2[".locking"] = false;


$pages = $tdataminjusticia2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataminjusticia2[".edit"] = true;
	$tdataminjusticia2[".afterEditAction"] = 1;
	$tdataminjusticia2[".closePopupAfterEdit"] = 1;
	$tdataminjusticia2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataminjusticia2[".add"] = true;
$tdataminjusticia2[".afterAddAction"] = 1;
$tdataminjusticia2[".closePopupAfterAdd"] = 1;
$tdataminjusticia2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataminjusticia2[".list"] = true;
}



$tdataminjusticia2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataminjusticia2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataminjusticia2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataminjusticia2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataminjusticia2[".printFriendly"] = true;
}



$tdataminjusticia2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataminjusticia2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataminjusticia2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataminjusticia2[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																													

$tdataminjusticia2[".ajaxCodeSnippetAdded"] = false;

$tdataminjusticia2[".buttonsAdded"] = false;

$tdataminjusticia2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataminjusticia2[".isUseTimeForSearch"] = false;


$tdataminjusticia2[".badgeColor"] = "CD5C5C";


$tdataminjusticia2[".allSearchFields"] = array();
$tdataminjusticia2[".filterFields"] = array();
$tdataminjusticia2[".requiredSearchFields"] = array();

$tdataminjusticia2[".googleLikeFields"] = array();
$tdataminjusticia2[".googleLikeFields"][] = "MinjusticiaId";
$tdataminjusticia2[".googleLikeFields"][] = "Minjusticia";
$tdataminjusticia2[".googleLikeFields"][] = "Numero";
$tdataminjusticia2[".googleLikeFields"][] = "Nombre";
$tdataminjusticia2[".googleLikeFields"][] = "Documento";
$tdataminjusticia2[".googleLikeFields"][] = "Sentencia";
$tdataminjusticia2[".googleLikeFields"][] = "Ejecutoria";
$tdataminjusticia2[".googleLikeFields"][] = "Obligacion";
$tdataminjusticia2[".googleLikeFields"][] = "Recaudo";
$tdataminjusticia2[".googleLikeFields"][] = "Recaudo_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Saldo";
$tdataminjusticia2[".googleLikeFields"][] = "Intereses";
$tdataminjusticia2[".googleLikeFields"][] = "Intereses_Val";
$tdataminjusticia2[".googleLikeFields"][] = "AbogadoId";
$tdataminjusticia2[".googleLikeFields"][] = "Caja";
$tdataminjusticia2[".googleLikeFields"][] = "Cuadernillos";
$tdataminjusticia2[".googleLikeFields"][] = "Folios";
$tdataminjusticia2[".googleLikeFields"][] = "Hechos";
$tdataminjusticia2[".googleLikeFields"][] = "Salarios";
$tdataminjusticia2[".googleLikeFields"][] = "Obligacion_Val";
$tdataminjusticia2[".googleLikeFields"][] = "DespachoId";
$tdataminjusticia2[".googleLikeFields"][] = "TipoDocumentoId";
$tdataminjusticia2[".googleLikeFields"][] = "SeccionalId";
$tdataminjusticia2[".googleLikeFields"][] = "Registro";
$tdataminjusticia2[".googleLikeFields"][] = "Aprobacion";
$tdataminjusticia2[".googleLikeFields"][] = "Sentencia_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Ejecutoria_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Notificacion";
$tdataminjusticia2[".googleLikeFields"][] = "AcuerdoPago";
$tdataminjusticia2[".googleLikeFields"][] = "ValorAcuerdopago";
$tdataminjusticia2[".googleLikeFields"][] = "NumeroCuotas";
$tdataminjusticia2[".googleLikeFields"][] = "ValorCuota";
$tdataminjusticia2[".googleLikeFields"][] = "CarteraTipoId";
$tdataminjusticia2[".googleLikeFields"][] = "Observaciones";
$tdataminjusticia2[".googleLikeFields"][] = "ProcesoId";
$tdataminjusticia2[".googleLikeFields"][] = "Nombre_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Documento_Val";
$tdataminjusticia2[".googleLikeFields"][] = "ActaIndividual";
$tdataminjusticia2[".googleLikeFields"][] = "ActaConsolidada";
$tdataminjusticia2[".googleLikeFields"][] = "Autorizacion";
$tdataminjusticia2[".googleLikeFields"][] = "Autorizado";
$tdataminjusticia2[".googleLikeFields"][] = "CausalId";
$tdataminjusticia2[".googleLikeFields"][] = "Numero_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Minjusticia_Val";
$tdataminjusticia2[".googleLikeFields"][] = "Pesos";
$tdataminjusticia2[".googleLikeFields"][] = "UserId";
$tdataminjusticia2[".googleLikeFields"][] = "Digitalizado";
$tdataminjusticia2[".googleLikeFields"][] = "Procesado";
$tdataminjusticia2[".googleLikeFields"][] = "ActaAnterior";
$tdataminjusticia2[".googleLikeFields"][] = "ActaActual";
$tdataminjusticia2[".googleLikeFields"][] = "Subsanar";



$tdataminjusticia2[".tableType"] = "list";

$tdataminjusticia2[".printerPageOrientation"] = 0;
$tdataminjusticia2[".nPrinterPageScale"] = 100;

$tdataminjusticia2[".nPrinterSplitRecords"] = 40;

$tdataminjusticia2[".geocodingEnabled"] = false;





$tdataminjusticia2[".isResizeColumns"] = true;





$tdataminjusticia2[".pageSize"] = 20;

$tdataminjusticia2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataminjusticia2[".strOrderBy"] = $tstrOrderBy;

$tdataminjusticia2[".orderindexes"] = array();


$tdataminjusticia2[".sqlHead"] = "SELECT MinjusticiaId,  	Minjusticia,  	Numero,  	Nombre,  	Documento,  	Sentencia,  	Ejecutoria,  	Obligacion,  	Recaudo,  	Recaudo_Val,  	Saldo,  	Intereses,  	Intereses_Val,  	AbogadoId,  	Caja,  	Cuadernillos,  	Folios,  	Hechos,  	Salarios,  	Obligacion_Val,  	DespachoId,  	TipoDocumentoId,  	SeccionalId,  	Registro,  	Aprobacion,  	Sentencia_Val,  	Ejecutoria_Val,  	Notificacion,  	AcuerdoPago,  	ValorAcuerdopago,  	NumeroCuotas,  	ValorCuota,  	CarteraTipoId,  	Observaciones,  	ProcesoId,  	Nombre_Val,  	Documento_Val,  	ActaIndividual,  	ActaConsolidada,  	Autorizacion,  	Autorizado,  	CausalId,  	Numero_Val,  	Minjusticia_Val,  	Pesos,  	UserId,  	Digitalizado,  	Procesado,  	ActaAnterior,  	ActaActual,  	Subsanar";
$tdataminjusticia2[".sqlFrom"] = "FROM dbo.Minjusticia2";
$tdataminjusticia2[".sqlWhereExpr"] = "";
$tdataminjusticia2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataminjusticia2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataminjusticia2[".arrGroupsPerPage"] = $arrGPP;

$tdataminjusticia2[".highlightSearchResults"] = true;

$tableKeysminjusticia2 = array();
$tableKeysminjusticia2[] = "MinjusticiaId";
$tdataminjusticia2[".Keys"] = $tableKeysminjusticia2;


$tdataminjusticia2[".hideMobileList"] = array();




//	MinjusticiaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MinjusticiaId";
	$fdata["GoodName"] = "MinjusticiaId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","MinjusticiaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MinjusticiaId";

		$fdata["sourceSingle"] = "MinjusticiaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinjusticiaId";

	
	
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


	$tdataminjusticia2["MinjusticiaId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "MinjusticiaId";
//	Minjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Minjusticia";
	$fdata["GoodName"] = "Minjusticia";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Minjusticia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Minjusticia";

		$fdata["sourceSingle"] = "Minjusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minjusticia";

	
	
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


	$tdataminjusticia2["Minjusticia"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Minjusticia";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Numero");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataminjusticia2["Numero"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Numero";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["sourceSingle"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataminjusticia2["Nombre"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Nombre";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

		$fdata["sourceSingle"] = "Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataminjusticia2["Documento"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Documento";
//	Sentencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sentencia";
	$fdata["GoodName"] = "Sentencia";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Sentencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Sentencia";

		$fdata["sourceSingle"] = "Sentencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sentencia";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Sentencia"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Sentencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejecutoria";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Ejecutoria"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Ejecutoria";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligacion";

	
	
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


	$tdataminjusticia2["Obligacion"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Obligacion";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

		$fdata["sourceSingle"] = "Recaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recaudo";

	
	
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


	$tdataminjusticia2["Recaudo"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Recaudo";
//	Recaudo_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recaudo_Val";
	$fdata["GoodName"] = "Recaudo_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Recaudo_Val");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo_Val";

		$fdata["sourceSingle"] = "Recaudo_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recaudo_Val";

	
	
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


	$tdataminjusticia2["Recaudo_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Recaudo_Val";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

		$fdata["sourceSingle"] = "Saldo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Saldo";

	
	
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


	$tdataminjusticia2["Saldo"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Saldo";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses";

	
	
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


	$tdataminjusticia2["Intereses"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Intereses";
//	Intereses_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Intereses_Val";
	$fdata["GoodName"] = "Intereses_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Intereses_Val");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses_Val";

		$fdata["sourceSingle"] = "Intereses_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses_Val";

	
	
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


	$tdataminjusticia2["Intereses_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Intereses_Val";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Parejas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Pareja";

	

	
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


	$tdataminjusticia2["AbogadoId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "AbogadoId";
//	Caja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Caja";
	$fdata["GoodName"] = "Caja";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Caja");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Caja";

		$fdata["sourceSingle"] = "Caja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Caja";

	
	
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


	$tdataminjusticia2["Caja"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Caja";
//	Cuadernillos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Cuadernillos";
	$fdata["GoodName"] = "Cuadernillos";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Cuadernillos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuadernillos";

		$fdata["sourceSingle"] = "Cuadernillos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cuadernillos";

	
	
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


	$tdataminjusticia2["Cuadernillos"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Cuadernillos";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Folios");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Folios";

		$fdata["sourceSingle"] = "Folios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Folios";

	
	
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


	$tdataminjusticia2["Folios"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Folios";
//	Hechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Hechos";
	$fdata["GoodName"] = "Hechos";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Hechos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Hechos";

		$fdata["sourceSingle"] = "Hechos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hechos";

	
	
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


	$tdataminjusticia2["Hechos"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Hechos";
//	Salarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Salarios";
	$fdata["GoodName"] = "Salarios";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Salarios");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Salarios";

		$fdata["sourceSingle"] = "Salarios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Salarios";

	
	
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


	$tdataminjusticia2["Salarios"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Salarios";
//	Obligacion_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Obligacion_Val";
	$fdata["GoodName"] = "Obligacion_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Obligacion_Val");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion_Val";

		$fdata["sourceSingle"] = "Obligacion_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligacion_Val";

	
	
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


	$tdataminjusticia2["Obligacion_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Obligacion_Val";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","DespachoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoId";

	
	
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
	$edata["LookupTable"] = "dbo.Despachos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdataminjusticia2["DespachoId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "DespachoId";
//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","TipoDocumentoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoDocumentoId";

		$fdata["sourceSingle"] = "TipoDocumentoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDocumentoId";

	
	
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
	$edata["LookupTable"] = "dbo.TiposDocumentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoDocumentoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdataminjusticia2["TipoDocumentoId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "TipoDocumentoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalId";

	
	
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
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdataminjusticia2["SeccionalId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "SeccionalId";
//	Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Registro";
	$fdata["GoodName"] = "Registro";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Registro";

		$fdata["sourceSingle"] = "Registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Registro";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Registro"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Registro";
//	Aprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Aprobacion";
	$fdata["GoodName"] = "Aprobacion";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Aprobacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Aprobacion";

		$fdata["sourceSingle"] = "Aprobacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Aprobacion";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Aprobacion"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Aprobacion";
//	Sentencia_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Sentencia_Val";
	$fdata["GoodName"] = "Sentencia_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Sentencia_Val");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Sentencia_Val";

		$fdata["sourceSingle"] = "Sentencia_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sentencia_Val";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Sentencia_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Sentencia_Val";
//	Ejecutoria_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Ejecutoria_Val";
	$fdata["GoodName"] = "Ejecutoria_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Ejecutoria_Val");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria_Val";

		$fdata["sourceSingle"] = "Ejecutoria_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejecutoria_Val";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Ejecutoria_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Ejecutoria_Val";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Notificacion";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Notificacion"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Notificacion";
//	AcuerdoPago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "AcuerdoPago";
	$fdata["GoodName"] = "AcuerdoPago";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","AcuerdoPago");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "AcuerdoPago";

		$fdata["sourceSingle"] = "AcuerdoPago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcuerdoPago";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["AcuerdoPago"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "AcuerdoPago";
//	ValorAcuerdopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ValorAcuerdopago";
	$fdata["GoodName"] = "ValorAcuerdopago";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ValorAcuerdopago");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ValorAcuerdopago";

		$fdata["sourceSingle"] = "ValorAcuerdopago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValorAcuerdopago";

	
	
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


	$tdataminjusticia2["ValorAcuerdopago"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ValorAcuerdopago";
//	NumeroCuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "NumeroCuotas";
	$fdata["GoodName"] = "NumeroCuotas";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","NumeroCuotas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NumeroCuotas";

		$fdata["sourceSingle"] = "NumeroCuotas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumeroCuotas";

	
	
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


	$tdataminjusticia2["NumeroCuotas"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "NumeroCuotas";
//	ValorCuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ValorCuota";
	$fdata["GoodName"] = "ValorCuota";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ValorCuota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ValorCuota";

		$fdata["sourceSingle"] = "ValorCuota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValorCuota";

	
	
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


	$tdataminjusticia2["ValorCuota"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ValorCuota";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 3;
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


	$tdataminjusticia2["CarteraTipoId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "CarteraTipoId";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Observaciones");
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


	$tdataminjusticia2["Observaciones"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Observaciones";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ProcesoId");
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


	$tdataminjusticia2["ProcesoId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ProcesoId";
//	Nombre_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Nombre_Val";
	$fdata["GoodName"] = "Nombre_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Nombre_Val");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Val";

		$fdata["sourceSingle"] = "Nombre_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Val";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataminjusticia2["Nombre_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Nombre_Val";
//	Documento_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Documento_Val";
	$fdata["GoodName"] = "Documento_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Documento_Val");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento_Val";

		$fdata["sourceSingle"] = "Documento_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento_Val";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataminjusticia2["Documento_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Documento_Val";
//	ActaIndividual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ActaIndividual";
	$fdata["GoodName"] = "ActaIndividual";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ActaIndividual");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ActaIndividual";

		$fdata["sourceSingle"] = "ActaIndividual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActaIndividual";

	
	
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


	$tdataminjusticia2["ActaIndividual"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ActaIndividual";
//	ActaConsolidada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ActaConsolidada";
	$fdata["GoodName"] = "ActaConsolidada";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ActaConsolidada");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ActaConsolidada";

		$fdata["sourceSingle"] = "ActaConsolidada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActaConsolidada";

	
	
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


	$tdataminjusticia2["ActaConsolidada"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ActaConsolidada";
//	Autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Autorizacion";
	$fdata["GoodName"] = "Autorizacion";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Autorizacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Autorizacion";

		$fdata["sourceSingle"] = "Autorizacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Autorizacion";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataminjusticia2["Autorizacion"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Autorizacion";
//	Autorizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Autorizado";
	$fdata["GoodName"] = "Autorizado";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Autorizado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Autorizado";

		$fdata["sourceSingle"] = "Autorizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Autorizado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataminjusticia2["Autorizado"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Autorizado";
//	CausalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "CausalId";
	$fdata["GoodName"] = "CausalId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","CausalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CausalId";

		$fdata["sourceSingle"] = "CausalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CausalId";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "dbo.Causales";
	$edata["LookupConnId"] = "GCC_at_S00001_CCAD01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CausalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Causal";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataminjusticia2["CausalId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "CausalId";
//	Numero_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Numero_Val";
	$fdata["GoodName"] = "Numero_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Numero_Val");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero_Val";

		$fdata["sourceSingle"] = "Numero_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero_Val";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataminjusticia2["Numero_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Numero_Val";
//	Minjusticia_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Minjusticia_Val";
	$fdata["GoodName"] = "Minjusticia_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Minjusticia_Val");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Minjusticia_Val";

		$fdata["sourceSingle"] = "Minjusticia_Val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minjusticia_Val";

	
	
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


	$tdataminjusticia2["Minjusticia_Val"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Minjusticia_Val";
//	Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Pesos";
	$fdata["GoodName"] = "Pesos";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Pesos");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Pesos";

		$fdata["sourceSingle"] = "Pesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pesos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataminjusticia2["Pesos"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Pesos";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","UserId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserId";

		$fdata["sourceSingle"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
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


	$tdataminjusticia2["UserId"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "UserId";
//	Digitalizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Digitalizado";
	$fdata["GoodName"] = "Digitalizado";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Digitalizado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Digitalizado";

		$fdata["sourceSingle"] = "Digitalizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Digitalizado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataminjusticia2["Digitalizado"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Digitalizado";
//	Procesado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Procesado";
	$fdata["GoodName"] = "Procesado";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Procesado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Procesado";

		$fdata["sourceSingle"] = "Procesado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataminjusticia2["Procesado"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Procesado";
//	ActaAnterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "ActaAnterior";
	$fdata["GoodName"] = "ActaAnterior";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ActaAnterior");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ActaAnterior";

		$fdata["sourceSingle"] = "ActaAnterior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActaAnterior";

	
	
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


	$tdataminjusticia2["ActaAnterior"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ActaAnterior";
//	ActaActual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "ActaActual";
	$fdata["GoodName"] = "ActaActual";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","ActaActual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ActaActual";

		$fdata["sourceSingle"] = "ActaActual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActaActual";

	
	
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


	$tdataminjusticia2["ActaActual"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "ActaActual";
//	Subsanar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Subsanar";
	$fdata["GoodName"] = "Subsanar";
	$fdata["ownerTable"] = "dbo.Minjusticia2";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia2","Subsanar");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Subsanar";

		$fdata["sourceSingle"] = "Subsanar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subsanar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataminjusticia2["Subsanar"] = $fdata;
		$tdataminjusticia2[".searchableFields"][] = "Subsanar";


$tables_data["dbo.Minjusticia2"]=&$tdataminjusticia2;
$field_labels["dbo_Minjusticia2"] = &$fieldLabelsminjusticia2;
$fieldToolTips["dbo_Minjusticia2"] = &$fieldToolTipsminjusticia2;
$placeHolders["dbo_Minjusticia2"] = &$placeHoldersminjusticia2;
$page_titles["dbo_Minjusticia2"] = &$pageTitlesminjusticia2;


changeTextControlsToDate( "dbo.Minjusticia2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Minjusticia2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Minjusticia2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Abogados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Abogados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "abogados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia2"][0] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][0]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Minjusticia2"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][0]["detailKeys"][]="AbogadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Parejas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Parejas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "parejas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia2"][1] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][1]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Minjusticia2"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][1]["detailKeys"][]="AbogadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Despachos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Despachos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "despachos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia2"][2] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][2]["masterKeys"][]="DespachoId";
				$masterTablesData["dbo.Minjusticia2"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][2]["detailKeys"][]="DespachoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.TiposDocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.TiposDocumentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tiposdocumentos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia2"][3] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][3]["masterKeys"][]="TipoDocumentoId";
				$masterTablesData["dbo.Minjusticia2"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][3]["detailKeys"][]="TipoDocumentoId";
		
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
					$masterTablesData["dbo.Minjusticia2"][4] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][4]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][4]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Minjusticia2"][4]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][4]["detailKeys"][]="SeccionalId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.CarteraTipos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.CarteraTipos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "carteratipos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia2"][5] = $masterParams;
				$masterTablesData["dbo.Minjusticia2"][5]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][5]["masterKeys"][]="CarteraTipoId";
				$masterTablesData["dbo.Minjusticia2"][5]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia2"][5]["detailKeys"][]="CarteraTipoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_minjusticia2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MinjusticiaId,  	Minjusticia,  	Numero,  	Nombre,  	Documento,  	Sentencia,  	Ejecutoria,  	Obligacion,  	Recaudo,  	Recaudo_Val,  	Saldo,  	Intereses,  	Intereses_Val,  	AbogadoId,  	Caja,  	Cuadernillos,  	Folios,  	Hechos,  	Salarios,  	Obligacion_Val,  	DespachoId,  	TipoDocumentoId,  	SeccionalId,  	Registro,  	Aprobacion,  	Sentencia_Val,  	Ejecutoria_Val,  	Notificacion,  	AcuerdoPago,  	ValorAcuerdopago,  	NumeroCuotas,  	ValorCuota,  	CarteraTipoId,  	Observaciones,  	ProcesoId,  	Nombre_Val,  	Documento_Val,  	ActaIndividual,  	ActaConsolidada,  	Autorizacion,  	Autorizado,  	CausalId,  	Numero_Val,  	Minjusticia_Val,  	Pesos,  	UserId,  	Digitalizado,  	Procesado,  	ActaAnterior,  	ActaActual,  	Subsanar";
$proto0["m_strFrom"] = "FROM dbo.Minjusticia2";
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
	"m_strName" => "MinjusticiaId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto6["m_sql"] = "MinjusticiaId";
$proto6["m_srcTableName"] = "dbo.Minjusticia2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto8["m_sql"] = "Minjusticia";
$proto8["m_srcTableName"] = "dbo.Minjusticia2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto10["m_sql"] = "Numero";
$proto10["m_srcTableName"] = "dbo.Minjusticia2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto12["m_sql"] = "Nombre";
$proto12["m_srcTableName"] = "dbo.Minjusticia2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto14["m_sql"] = "Documento";
$proto14["m_srcTableName"] = "dbo.Minjusticia2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sentencia",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto16["m_sql"] = "Sentencia";
$proto16["m_srcTableName"] = "dbo.Minjusticia2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto18["m_sql"] = "Ejecutoria";
$proto18["m_srcTableName"] = "dbo.Minjusticia2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto20["m_sql"] = "Obligacion";
$proto20["m_srcTableName"] = "dbo.Minjusticia2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto22["m_sql"] = "Recaudo";
$proto22["m_srcTableName"] = "dbo.Minjusticia2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto24["m_sql"] = "Recaudo_Val";
$proto24["m_srcTableName"] = "dbo.Minjusticia2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto26["m_sql"] = "Saldo";
$proto26["m_srcTableName"] = "dbo.Minjusticia2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto28["m_sql"] = "Intereses";
$proto28["m_srcTableName"] = "dbo.Minjusticia2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto30["m_sql"] = "Intereses_Val";
$proto30["m_srcTableName"] = "dbo.Minjusticia2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto32["m_sql"] = "AbogadoId";
$proto32["m_srcTableName"] = "dbo.Minjusticia2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Caja",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto34["m_sql"] = "Caja";
$proto34["m_srcTableName"] = "dbo.Minjusticia2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuadernillos",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto36["m_sql"] = "Cuadernillos";
$proto36["m_srcTableName"] = "dbo.Minjusticia2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto38["m_sql"] = "Folios";
$proto38["m_srcTableName"] = "dbo.Minjusticia2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Hechos",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto40["m_sql"] = "Hechos";
$proto40["m_srcTableName"] = "dbo.Minjusticia2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Salarios",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto42["m_sql"] = "Salarios";
$proto42["m_srcTableName"] = "dbo.Minjusticia2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto44["m_sql"] = "Obligacion_Val";
$proto44["m_srcTableName"] = "dbo.Minjusticia2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto46["m_sql"] = "DespachoId";
$proto46["m_srcTableName"] = "dbo.Minjusticia2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto48["m_sql"] = "TipoDocumentoId";
$proto48["m_srcTableName"] = "dbo.Minjusticia2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto50["m_sql"] = "SeccionalId";
$proto50["m_srcTableName"] = "dbo.Minjusticia2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Registro",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto52["m_sql"] = "Registro";
$proto52["m_srcTableName"] = "dbo.Minjusticia2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobacion",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto54["m_sql"] = "Aprobacion";
$proto54["m_srcTableName"] = "dbo.Minjusticia2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Sentencia_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto56["m_sql"] = "Sentencia_Val";
$proto56["m_srcTableName"] = "dbo.Minjusticia2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto58["m_sql"] = "Ejecutoria_Val";
$proto58["m_srcTableName"] = "dbo.Minjusticia2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto60["m_sql"] = "Notificacion";
$proto60["m_srcTableName"] = "dbo.Minjusticia2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "AcuerdoPago",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto62["m_sql"] = "AcuerdoPago";
$proto62["m_srcTableName"] = "dbo.Minjusticia2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ValorAcuerdopago",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto64["m_sql"] = "ValorAcuerdopago";
$proto64["m_srcTableName"] = "dbo.Minjusticia2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroCuotas",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto66["m_sql"] = "NumeroCuotas";
$proto66["m_srcTableName"] = "dbo.Minjusticia2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ValorCuota",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto68["m_sql"] = "ValorCuota";
$proto68["m_srcTableName"] = "dbo.Minjusticia2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto70["m_sql"] = "CarteraTipoId";
$proto70["m_srcTableName"] = "dbo.Minjusticia2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto72["m_sql"] = "Observaciones";
$proto72["m_srcTableName"] = "dbo.Minjusticia2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto74["m_sql"] = "ProcesoId";
$proto74["m_srcTableName"] = "dbo.Minjusticia2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto76["m_sql"] = "Nombre_Val";
$proto76["m_srcTableName"] = "dbo.Minjusticia2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto78["m_sql"] = "Documento_Val";
$proto78["m_srcTableName"] = "dbo.Minjusticia2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaIndividual",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto80["m_sql"] = "ActaIndividual";
$proto80["m_srcTableName"] = "dbo.Minjusticia2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaConsolidada",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto82["m_sql"] = "ActaConsolidada";
$proto82["m_srcTableName"] = "dbo.Minjusticia2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizacion",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto84["m_sql"] = "Autorizacion";
$proto84["m_srcTableName"] = "dbo.Minjusticia2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizado",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto86["m_sql"] = "Autorizado";
$proto86["m_srcTableName"] = "dbo.Minjusticia2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "CausalId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto88["m_sql"] = "CausalId";
$proto88["m_srcTableName"] = "dbo.Minjusticia2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto90["m_sql"] = "Numero_Val";
$proto90["m_srcTableName"] = "dbo.Minjusticia2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia_Val",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto92["m_sql"] = "Minjusticia_Val";
$proto92["m_srcTableName"] = "dbo.Minjusticia2";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Pesos",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto94["m_sql"] = "Pesos";
$proto94["m_srcTableName"] = "dbo.Minjusticia2";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto96["m_sql"] = "UserId";
$proto96["m_srcTableName"] = "dbo.Minjusticia2";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Digitalizado",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto98["m_sql"] = "Digitalizado";
$proto98["m_srcTableName"] = "dbo.Minjusticia2";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto100["m_sql"] = "Procesado";
$proto100["m_srcTableName"] = "dbo.Minjusticia2";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaAnterior",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto102["m_sql"] = "ActaAnterior";
$proto102["m_srcTableName"] = "dbo.Minjusticia2";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaActual",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto104["m_sql"] = "ActaActual";
$proto104["m_srcTableName"] = "dbo.Minjusticia2";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Subsanar",
	"m_strTable" => "dbo.Minjusticia2",
	"m_srcTableName" => "dbo.Minjusticia2"
));

$proto106["m_sql"] = "Subsanar";
$proto106["m_srcTableName"] = "dbo.Minjusticia2";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "dbo.Minjusticia2";
$proto109["m_srcTableName"] = "dbo.Minjusticia2";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "MinjusticiaId";
$proto109["m_columns"][] = "Minjusticia";
$proto109["m_columns"][] = "Numero";
$proto109["m_columns"][] = "Nombre";
$proto109["m_columns"][] = "Documento";
$proto109["m_columns"][] = "Sentencia";
$proto109["m_columns"][] = "Ejecutoria";
$proto109["m_columns"][] = "Obligacion";
$proto109["m_columns"][] = "Recaudo";
$proto109["m_columns"][] = "Recaudo_Val";
$proto109["m_columns"][] = "Saldo";
$proto109["m_columns"][] = "Intereses";
$proto109["m_columns"][] = "Intereses_Val";
$proto109["m_columns"][] = "AbogadoId";
$proto109["m_columns"][] = "Caja";
$proto109["m_columns"][] = "Cuadernillos";
$proto109["m_columns"][] = "Folios";
$proto109["m_columns"][] = "Hechos";
$proto109["m_columns"][] = "Salarios";
$proto109["m_columns"][] = "Obligacion_Val";
$proto109["m_columns"][] = "DespachoId";
$proto109["m_columns"][] = "TipoDocumentoId";
$proto109["m_columns"][] = "SeccionalId";
$proto109["m_columns"][] = "Registro";
$proto109["m_columns"][] = "Aprobacion";
$proto109["m_columns"][] = "Sentencia_Val";
$proto109["m_columns"][] = "Ejecutoria_Val";
$proto109["m_columns"][] = "Notificacion";
$proto109["m_columns"][] = "AcuerdoPago";
$proto109["m_columns"][] = "ValorAcuerdopago";
$proto109["m_columns"][] = "NumeroCuotas";
$proto109["m_columns"][] = "ValorCuota";
$proto109["m_columns"][] = "CarteraTipoId";
$proto109["m_columns"][] = "Observaciones";
$proto109["m_columns"][] = "ProcesoId";
$proto109["m_columns"][] = "Nombre_Val";
$proto109["m_columns"][] = "Documento_Val";
$proto109["m_columns"][] = "ActaIndividual";
$proto109["m_columns"][] = "ActaConsolidada";
$proto109["m_columns"][] = "Autorizacion";
$proto109["m_columns"][] = "Autorizado";
$proto109["m_columns"][] = "CausalId";
$proto109["m_columns"][] = "Numero_Val";
$proto109["m_columns"][] = "Minjusticia_Val";
$proto109["m_columns"][] = "Pesos";
$proto109["m_columns"][] = "UserId";
$proto109["m_columns"][] = "Digitalizado";
$proto109["m_columns"][] = "Procesado";
$proto109["m_columns"][] = "ActaAnterior";
$proto109["m_columns"][] = "ActaActual";
$proto109["m_columns"][] = "Subsanar";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "dbo.Minjusticia2";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "dbo.Minjusticia2";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Minjusticia2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_minjusticia2 = createSqlQuery_minjusticia2();


	
		;

																																																			

$tdataminjusticia2[".sqlquery"] = $queryData_minjusticia2;



$tdataminjusticia2[".hasEvents"] = false;

?>