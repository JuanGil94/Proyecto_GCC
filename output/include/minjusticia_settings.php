<?php
$tdataminjusticia = array();
$tdataminjusticia[".searchableFields"] = array();
$tdataminjusticia[".ShortName"] = "minjusticia";
$tdataminjusticia[".OwnerID"] = "";
$tdataminjusticia[".OriginalTable"] = "dbo.Minjusticia";


$tdataminjusticia[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataminjusticia[".originalPagesByType"] = $tdataminjusticia[".pagesByType"];
$tdataminjusticia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataminjusticia[".originalPages"] = $tdataminjusticia[".pages"];
$tdataminjusticia[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataminjusticia[".originalDefaultPages"] = $tdataminjusticia[".defaultPages"];

//	field labels
$fieldLabelsminjusticia = array();
$fieldToolTipsminjusticia = array();
$pageTitlesminjusticia = array();
$placeHoldersminjusticia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsminjusticia["Spanish"] = array();
	$fieldToolTipsminjusticia["Spanish"] = array();
	$placeHoldersminjusticia["Spanish"] = array();
	$pageTitlesminjusticia["Spanish"] = array();
	$fieldLabelsminjusticia["Spanish"]["MinjusticiaId"] = "Minjusticia Id";
	$fieldToolTipsminjusticia["Spanish"]["MinjusticiaId"] = "";
	$placeHoldersminjusticia["Spanish"]["MinjusticiaId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Minjusticia"] = "Minjusticia";
	$fieldToolTipsminjusticia["Spanish"]["Minjusticia"] = "";
	$placeHoldersminjusticia["Spanish"]["Minjusticia"] = "";
	$fieldLabelsminjusticia["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsminjusticia["Spanish"]["Numero"] = "";
	$placeHoldersminjusticia["Spanish"]["Numero"] = "";
	$fieldLabelsminjusticia["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsminjusticia["Spanish"]["Nombre"] = "";
	$placeHoldersminjusticia["Spanish"]["Nombre"] = "";
	$fieldLabelsminjusticia["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsminjusticia["Spanish"]["Documento"] = "";
	$placeHoldersminjusticia["Spanish"]["Documento"] = "";
	$fieldLabelsminjusticia["Spanish"]["Sentencia"] = "Sentencia";
	$fieldToolTipsminjusticia["Spanish"]["Sentencia"] = "";
	$placeHoldersminjusticia["Spanish"]["Sentencia"] = "";
	$fieldLabelsminjusticia["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipsminjusticia["Spanish"]["Ejecutoria"] = "";
	$placeHoldersminjusticia["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsminjusticia["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsminjusticia["Spanish"]["Obligacion"] = "";
	$placeHoldersminjusticia["Spanish"]["Obligacion"] = "";
	$fieldLabelsminjusticia["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsminjusticia["Spanish"]["Recaudo"] = "";
	$placeHoldersminjusticia["Spanish"]["Recaudo"] = "";
	$fieldLabelsminjusticia["Spanish"]["Recaudo_Val"] = "Recaudo Val";
	$fieldToolTipsminjusticia["Spanish"]["Recaudo_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Recaudo_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsminjusticia["Spanish"]["Saldo"] = "";
	$placeHoldersminjusticia["Spanish"]["Saldo"] = "";
	$fieldLabelsminjusticia["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsminjusticia["Spanish"]["Intereses"] = "";
	$placeHoldersminjusticia["Spanish"]["Intereses"] = "";
	$fieldLabelsminjusticia["Spanish"]["Intereses_Val"] = "Intereses Val";
	$fieldToolTipsminjusticia["Spanish"]["Intereses_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Intereses_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsminjusticia["Spanish"]["AbogadoId"] = "";
	$placeHoldersminjusticia["Spanish"]["AbogadoId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Caja"] = "Caja";
	$fieldToolTipsminjusticia["Spanish"]["Caja"] = "";
	$placeHoldersminjusticia["Spanish"]["Caja"] = "";
	$fieldLabelsminjusticia["Spanish"]["Cuadernillos"] = "Cuadernillos";
	$fieldToolTipsminjusticia["Spanish"]["Cuadernillos"] = "";
	$placeHoldersminjusticia["Spanish"]["Cuadernillos"] = "";
	$fieldLabelsminjusticia["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsminjusticia["Spanish"]["Folios"] = "";
	$placeHoldersminjusticia["Spanish"]["Folios"] = "";
	$fieldLabelsminjusticia["Spanish"]["Hechos"] = "Hechos";
	$fieldToolTipsminjusticia["Spanish"]["Hechos"] = "";
	$placeHoldersminjusticia["Spanish"]["Hechos"] = "";
	$fieldLabelsminjusticia["Spanish"]["Salarios"] = "Salarios";
	$fieldToolTipsminjusticia["Spanish"]["Salarios"] = "";
	$placeHoldersminjusticia["Spanish"]["Salarios"] = "";
	$fieldLabelsminjusticia["Spanish"]["Obligacion_Val"] = "Obligacion Val";
	$fieldToolTipsminjusticia["Spanish"]["Obligacion_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Obligacion_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsminjusticia["Spanish"]["DespachoId"] = "";
	$placeHoldersminjusticia["Spanish"]["DespachoId"] = "";
	$fieldLabelsminjusticia["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipsminjusticia["Spanish"]["TipoDocumentoId"] = "";
	$placeHoldersminjusticia["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelsminjusticia["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsminjusticia["Spanish"]["SeccionalId"] = "";
	$placeHoldersminjusticia["Spanish"]["SeccionalId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Registro"] = "Registro";
	$fieldToolTipsminjusticia["Spanish"]["Registro"] = "";
	$placeHoldersminjusticia["Spanish"]["Registro"] = "";
	$fieldLabelsminjusticia["Spanish"]["Aprobacion"] = "Aprobacion";
	$fieldToolTipsminjusticia["Spanish"]["Aprobacion"] = "";
	$placeHoldersminjusticia["Spanish"]["Aprobacion"] = "";
	$fieldLabelsminjusticia["Spanish"]["Sentencia_Val"] = "Sentencia Val";
	$fieldToolTipsminjusticia["Spanish"]["Sentencia_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Sentencia_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Ejecutoria_Val"] = "Ejecutoria Val";
	$fieldToolTipsminjusticia["Spanish"]["Ejecutoria_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Ejecutoria_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Notificacion"] = "Notificacion";
	$fieldToolTipsminjusticia["Spanish"]["Notificacion"] = "";
	$placeHoldersminjusticia["Spanish"]["Notificacion"] = "";
	$fieldLabelsminjusticia["Spanish"]["AcuerdoPago"] = "Acuerdo Pago";
	$fieldToolTipsminjusticia["Spanish"]["AcuerdoPago"] = "";
	$placeHoldersminjusticia["Spanish"]["AcuerdoPago"] = "";
	$fieldLabelsminjusticia["Spanish"]["ValorAcuerdopago"] = "Valor Acuerdopago";
	$fieldToolTipsminjusticia["Spanish"]["ValorAcuerdopago"] = "";
	$placeHoldersminjusticia["Spanish"]["ValorAcuerdopago"] = "";
	$fieldLabelsminjusticia["Spanish"]["NumeroCuotas"] = "Numero Cuotas";
	$fieldToolTipsminjusticia["Spanish"]["NumeroCuotas"] = "";
	$placeHoldersminjusticia["Spanish"]["NumeroCuotas"] = "";
	$fieldLabelsminjusticia["Spanish"]["ValorCuota"] = "Valor Cuota";
	$fieldToolTipsminjusticia["Spanish"]["ValorCuota"] = "";
	$placeHoldersminjusticia["Spanish"]["ValorCuota"] = "";
	$fieldLabelsminjusticia["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipsminjusticia["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersminjusticia["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsminjusticia["Spanish"]["Observaciones"] = "";
	$placeHoldersminjusticia["Spanish"]["Observaciones"] = "";
	$fieldLabelsminjusticia["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsminjusticia["Spanish"]["ProcesoId"] = "";
	$placeHoldersminjusticia["Spanish"]["ProcesoId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Nombre_Val"] = "Nombre Val";
	$fieldToolTipsminjusticia["Spanish"]["Nombre_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Nombre_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Documento_Val"] = "Documento Val";
	$fieldToolTipsminjusticia["Spanish"]["Documento_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Documento_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["ActaIndividual"] = "Acta Individual";
	$fieldToolTipsminjusticia["Spanish"]["ActaIndividual"] = "";
	$placeHoldersminjusticia["Spanish"]["ActaIndividual"] = "";
	$fieldLabelsminjusticia["Spanish"]["ActaConsolidada"] = "Acta Consolidada";
	$fieldToolTipsminjusticia["Spanish"]["ActaConsolidada"] = "";
	$placeHoldersminjusticia["Spanish"]["ActaConsolidada"] = "";
	$fieldLabelsminjusticia["Spanish"]["Autorizacion"] = "Autorizacion";
	$fieldToolTipsminjusticia["Spanish"]["Autorizacion"] = "";
	$placeHoldersminjusticia["Spanish"]["Autorizacion"] = "";
	$fieldLabelsminjusticia["Spanish"]["Autorizado"] = "Autorizado";
	$fieldToolTipsminjusticia["Spanish"]["Autorizado"] = "";
	$placeHoldersminjusticia["Spanish"]["Autorizado"] = "";
	$fieldLabelsminjusticia["Spanish"]["CausalId"] = "Causal Id";
	$fieldToolTipsminjusticia["Spanish"]["CausalId"] = "";
	$placeHoldersminjusticia["Spanish"]["CausalId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Numero_Val"] = "Numero Val";
	$fieldToolTipsminjusticia["Spanish"]["Numero_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Numero_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Minjusticia_Val"] = "Minjusticia Val";
	$fieldToolTipsminjusticia["Spanish"]["Minjusticia_Val"] = "";
	$placeHoldersminjusticia["Spanish"]["Minjusticia_Val"] = "";
	$fieldLabelsminjusticia["Spanish"]["Pesos"] = "Pesos";
	$fieldToolTipsminjusticia["Spanish"]["Pesos"] = "";
	$placeHoldersminjusticia["Spanish"]["Pesos"] = "";
	$fieldLabelsminjusticia["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsminjusticia["Spanish"]["UserId"] = "";
	$placeHoldersminjusticia["Spanish"]["UserId"] = "";
	$fieldLabelsminjusticia["Spanish"]["Digitalizado"] = "Digitalizado";
	$fieldToolTipsminjusticia["Spanish"]["Digitalizado"] = "";
	$placeHoldersminjusticia["Spanish"]["Digitalizado"] = "";
	$fieldLabelsminjusticia["Spanish"]["Procesado"] = "Procesado";
	$fieldToolTipsminjusticia["Spanish"]["Procesado"] = "";
	$placeHoldersminjusticia["Spanish"]["Procesado"] = "";
	$fieldLabelsminjusticia["Spanish"]["Minjusticia2"] = "Minjusticia2";
	$fieldToolTipsminjusticia["Spanish"]["Minjusticia2"] = "";
	$placeHoldersminjusticia["Spanish"]["Minjusticia2"] = "";
	if (count($fieldToolTipsminjusticia["Spanish"]))
		$tdataminjusticia[".isUseToolTips"] = true;
}


	$tdataminjusticia[".NCSearch"] = true;



$tdataminjusticia[".shortTableName"] = "minjusticia";
$tdataminjusticia[".nSecOptions"] = 0;

$tdataminjusticia[".mainTableOwnerID"] = "";
$tdataminjusticia[".entityType"] = 0;
$tdataminjusticia[".connId"] = "GCC_at_S00001_CCAD01";


$tdataminjusticia[".strOriginalTableName"] = "dbo.Minjusticia";

	



$tdataminjusticia[".showAddInPopup"] = false;

$tdataminjusticia[".showEditInPopup"] = false;

$tdataminjusticia[".showViewInPopup"] = false;

$tdataminjusticia[".listAjax"] = false;
//	temporary
//$tdataminjusticia[".listAjax"] = false;

	$tdataminjusticia[".audit"] = false;

	$tdataminjusticia[".locking"] = false;


$pages = $tdataminjusticia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataminjusticia[".edit"] = true;
	$tdataminjusticia[".afterEditAction"] = 1;
	$tdataminjusticia[".closePopupAfterEdit"] = 1;
	$tdataminjusticia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataminjusticia[".add"] = true;
$tdataminjusticia[".afterAddAction"] = 1;
$tdataminjusticia[".closePopupAfterAdd"] = 1;
$tdataminjusticia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataminjusticia[".list"] = true;
}



$tdataminjusticia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataminjusticia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataminjusticia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataminjusticia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataminjusticia[".printFriendly"] = true;
}



$tdataminjusticia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataminjusticia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataminjusticia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataminjusticia[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									

$tdataminjusticia[".ajaxCodeSnippetAdded"] = false;

$tdataminjusticia[".buttonsAdded"] = false;

$tdataminjusticia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataminjusticia[".isUseTimeForSearch"] = false;


$tdataminjusticia[".badgeColor"] = "00C2C5";


$tdataminjusticia[".allSearchFields"] = array();
$tdataminjusticia[".filterFields"] = array();
$tdataminjusticia[".requiredSearchFields"] = array();

$tdataminjusticia[".googleLikeFields"] = array();
$tdataminjusticia[".googleLikeFields"][] = "MinjusticiaId";
$tdataminjusticia[".googleLikeFields"][] = "Minjusticia";
$tdataminjusticia[".googleLikeFields"][] = "Numero";
$tdataminjusticia[".googleLikeFields"][] = "Nombre";
$tdataminjusticia[".googleLikeFields"][] = "Documento";
$tdataminjusticia[".googleLikeFields"][] = "Sentencia";
$tdataminjusticia[".googleLikeFields"][] = "Ejecutoria";
$tdataminjusticia[".googleLikeFields"][] = "Obligacion";
$tdataminjusticia[".googleLikeFields"][] = "Recaudo";
$tdataminjusticia[".googleLikeFields"][] = "Recaudo_Val";
$tdataminjusticia[".googleLikeFields"][] = "Saldo";
$tdataminjusticia[".googleLikeFields"][] = "Intereses";
$tdataminjusticia[".googleLikeFields"][] = "Intereses_Val";
$tdataminjusticia[".googleLikeFields"][] = "AbogadoId";
$tdataminjusticia[".googleLikeFields"][] = "Caja";
$tdataminjusticia[".googleLikeFields"][] = "Cuadernillos";
$tdataminjusticia[".googleLikeFields"][] = "Folios";
$tdataminjusticia[".googleLikeFields"][] = "Hechos";
$tdataminjusticia[".googleLikeFields"][] = "Salarios";
$tdataminjusticia[".googleLikeFields"][] = "Obligacion_Val";
$tdataminjusticia[".googleLikeFields"][] = "DespachoId";
$tdataminjusticia[".googleLikeFields"][] = "TipoDocumentoId";
$tdataminjusticia[".googleLikeFields"][] = "SeccionalId";
$tdataminjusticia[".googleLikeFields"][] = "Registro";
$tdataminjusticia[".googleLikeFields"][] = "Aprobacion";
$tdataminjusticia[".googleLikeFields"][] = "Sentencia_Val";
$tdataminjusticia[".googleLikeFields"][] = "Ejecutoria_Val";
$tdataminjusticia[".googleLikeFields"][] = "Notificacion";
$tdataminjusticia[".googleLikeFields"][] = "AcuerdoPago";
$tdataminjusticia[".googleLikeFields"][] = "ValorAcuerdopago";
$tdataminjusticia[".googleLikeFields"][] = "NumeroCuotas";
$tdataminjusticia[".googleLikeFields"][] = "ValorCuota";
$tdataminjusticia[".googleLikeFields"][] = "CarteraTipoId";
$tdataminjusticia[".googleLikeFields"][] = "Observaciones";
$tdataminjusticia[".googleLikeFields"][] = "ProcesoId";
$tdataminjusticia[".googleLikeFields"][] = "Nombre_Val";
$tdataminjusticia[".googleLikeFields"][] = "Documento_Val";
$tdataminjusticia[".googleLikeFields"][] = "ActaIndividual";
$tdataminjusticia[".googleLikeFields"][] = "ActaConsolidada";
$tdataminjusticia[".googleLikeFields"][] = "Autorizacion";
$tdataminjusticia[".googleLikeFields"][] = "Autorizado";
$tdataminjusticia[".googleLikeFields"][] = "CausalId";
$tdataminjusticia[".googleLikeFields"][] = "Numero_Val";
$tdataminjusticia[".googleLikeFields"][] = "Minjusticia_Val";
$tdataminjusticia[".googleLikeFields"][] = "Pesos";
$tdataminjusticia[".googleLikeFields"][] = "UserId";
$tdataminjusticia[".googleLikeFields"][] = "Digitalizado";
$tdataminjusticia[".googleLikeFields"][] = "Procesado";
$tdataminjusticia[".googleLikeFields"][] = "Minjusticia2";



$tdataminjusticia[".tableType"] = "list";

$tdataminjusticia[".printerPageOrientation"] = 0;
$tdataminjusticia[".nPrinterPageScale"] = 100;

$tdataminjusticia[".nPrinterSplitRecords"] = 40;

$tdataminjusticia[".geocodingEnabled"] = false;





$tdataminjusticia[".isResizeColumns"] = true;





$tdataminjusticia[".pageSize"] = 20;

$tdataminjusticia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataminjusticia[".strOrderBy"] = $tstrOrderBy;

$tdataminjusticia[".orderindexes"] = array();


$tdataminjusticia[".sqlHead"] = "SELECT MinjusticiaId,  	Minjusticia,  	Numero,  	Nombre,  	Documento,  	Sentencia,  	Ejecutoria,  	Obligacion,  	Recaudo,  	Recaudo_Val,  	Saldo,  	Intereses,  	Intereses_Val,  	AbogadoId,  	Caja,  	Cuadernillos,  	Folios,  	Hechos,  	Salarios,  	Obligacion_Val,  	DespachoId,  	TipoDocumentoId,  	SeccionalId,  	Registro,  	Aprobacion,  	Sentencia_Val,  	Ejecutoria_Val,  	Notificacion,  	AcuerdoPago,  	ValorAcuerdopago,  	NumeroCuotas,  	ValorCuota,  	CarteraTipoId,  	Observaciones,  	ProcesoId,  	Nombre_Val,  	Documento_Val,  	ActaIndividual,  	ActaConsolidada,  	Autorizacion,  	Autorizado,  	CausalId,  	Numero_Val,  	Minjusticia_Val,  	Pesos,  	UserId,  	Digitalizado,  	Procesado,  	Minjusticia2";
$tdataminjusticia[".sqlFrom"] = "FROM dbo.Minjusticia";
$tdataminjusticia[".sqlWhereExpr"] = "";
$tdataminjusticia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataminjusticia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataminjusticia[".arrGroupsPerPage"] = $arrGPP;

$tdataminjusticia[".highlightSearchResults"] = true;

$tableKeysminjusticia = array();
$tableKeysminjusticia[] = "MinjusticiaId";
$tdataminjusticia[".Keys"] = $tableKeysminjusticia;


$tdataminjusticia[".hideMobileList"] = array();




//	MinjusticiaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MinjusticiaId";
	$fdata["GoodName"] = "MinjusticiaId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","MinjusticiaId");
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


	$tdataminjusticia["MinjusticiaId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "MinjusticiaId";
//	Minjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Minjusticia";
	$fdata["GoodName"] = "Minjusticia";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Minjusticia");
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


	$tdataminjusticia["Minjusticia"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Minjusticia";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Numero");
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


	$tdataminjusticia["Numero"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Numero";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Nombre");
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


	$tdataminjusticia["Nombre"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Nombre";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Documento");
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


	$tdataminjusticia["Documento"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Documento";
//	Sentencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sentencia";
	$fdata["GoodName"] = "Sentencia";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Sentencia");
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


	$tdataminjusticia["Sentencia"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Sentencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Ejecutoria");
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


	$tdataminjusticia["Ejecutoria"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Ejecutoria";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Obligacion");
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


	$tdataminjusticia["Obligacion"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Obligacion";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Recaudo");
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


	$tdataminjusticia["Recaudo"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Recaudo";
//	Recaudo_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Recaudo_Val";
	$fdata["GoodName"] = "Recaudo_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Recaudo_Val");
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


	$tdataminjusticia["Recaudo_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Recaudo_Val";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Saldo");
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


	$tdataminjusticia["Saldo"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Saldo";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Intereses");
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


	$tdataminjusticia["Intereses"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Intereses";
//	Intereses_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Intereses_Val";
	$fdata["GoodName"] = "Intereses_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Intereses_Val");
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


	$tdataminjusticia["Intereses_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Intereses_Val";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","AbogadoId");
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdataminjusticia["AbogadoId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "AbogadoId";
//	Caja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Caja";
	$fdata["GoodName"] = "Caja";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Caja");
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


	$tdataminjusticia["Caja"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Caja";
//	Cuadernillos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Cuadernillos";
	$fdata["GoodName"] = "Cuadernillos";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Cuadernillos");
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


	$tdataminjusticia["Cuadernillos"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Cuadernillos";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Folios");
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


	$tdataminjusticia["Folios"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Folios";
//	Hechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Hechos";
	$fdata["GoodName"] = "Hechos";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Hechos");
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


	$tdataminjusticia["Hechos"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Hechos";
//	Salarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Salarios";
	$fdata["GoodName"] = "Salarios";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Salarios");
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


	$tdataminjusticia["Salarios"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Salarios";
//	Obligacion_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Obligacion_Val";
	$fdata["GoodName"] = "Obligacion_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Obligacion_Val");
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


	$tdataminjusticia["Obligacion_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Obligacion_Val";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","DespachoId");
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


	$tdataminjusticia["DespachoId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "DespachoId";
//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","TipoDocumentoId");
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


	$tdataminjusticia["TipoDocumentoId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "TipoDocumentoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","SeccionalId");
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


	$tdataminjusticia["SeccionalId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "SeccionalId";
//	Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Registro";
	$fdata["GoodName"] = "Registro";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Registro");
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


	$tdataminjusticia["Registro"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Registro";
//	Aprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Aprobacion";
	$fdata["GoodName"] = "Aprobacion";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Aprobacion");
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


	$tdataminjusticia["Aprobacion"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Aprobacion";
//	Sentencia_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Sentencia_Val";
	$fdata["GoodName"] = "Sentencia_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Sentencia_Val");
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


	$tdataminjusticia["Sentencia_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Sentencia_Val";
//	Ejecutoria_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Ejecutoria_Val";
	$fdata["GoodName"] = "Ejecutoria_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Ejecutoria_Val");
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


	$tdataminjusticia["Ejecutoria_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Ejecutoria_Val";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Notificacion");
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


	$tdataminjusticia["Notificacion"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Notificacion";
//	AcuerdoPago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "AcuerdoPago";
	$fdata["GoodName"] = "AcuerdoPago";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","AcuerdoPago");
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


	$tdataminjusticia["AcuerdoPago"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "AcuerdoPago";
//	ValorAcuerdopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ValorAcuerdopago";
	$fdata["GoodName"] = "ValorAcuerdopago";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","ValorAcuerdopago");
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


	$tdataminjusticia["ValorAcuerdopago"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "ValorAcuerdopago";
//	NumeroCuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "NumeroCuotas";
	$fdata["GoodName"] = "NumeroCuotas";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","NumeroCuotas");
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


	$tdataminjusticia["NumeroCuotas"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "NumeroCuotas";
//	ValorCuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ValorCuota";
	$fdata["GoodName"] = "ValorCuota";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","ValorCuota");
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


	$tdataminjusticia["ValorCuota"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "ValorCuota";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","CarteraTipoId");
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


	$tdataminjusticia["CarteraTipoId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "CarteraTipoId";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Observaciones");
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


	$tdataminjusticia["Observaciones"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Observaciones";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","ProcesoId");
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


	$tdataminjusticia["ProcesoId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "ProcesoId";
//	Nombre_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Nombre_Val";
	$fdata["GoodName"] = "Nombre_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Nombre_Val");
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


	$tdataminjusticia["Nombre_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Nombre_Val";
//	Documento_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Documento_Val";
	$fdata["GoodName"] = "Documento_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Documento_Val");
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


	$tdataminjusticia["Documento_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Documento_Val";
//	ActaIndividual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ActaIndividual";
	$fdata["GoodName"] = "ActaIndividual";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","ActaIndividual");
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


	$tdataminjusticia["ActaIndividual"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "ActaIndividual";
//	ActaConsolidada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ActaConsolidada";
	$fdata["GoodName"] = "ActaConsolidada";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","ActaConsolidada");
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


	$tdataminjusticia["ActaConsolidada"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "ActaConsolidada";
//	Autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Autorizacion";
	$fdata["GoodName"] = "Autorizacion";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Autorizacion");
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


	$tdataminjusticia["Autorizacion"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Autorizacion";
//	Autorizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Autorizado";
	$fdata["GoodName"] = "Autorizado";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Autorizado");
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


	$tdataminjusticia["Autorizado"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Autorizado";
//	CausalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "CausalId";
	$fdata["GoodName"] = "CausalId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","CausalId");
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


	$tdataminjusticia["CausalId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "CausalId";
//	Numero_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Numero_Val";
	$fdata["GoodName"] = "Numero_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Numero_Val");
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


	$tdataminjusticia["Numero_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Numero_Val";
//	Minjusticia_Val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Minjusticia_Val";
	$fdata["GoodName"] = "Minjusticia_Val";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Minjusticia_Val");
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


	$tdataminjusticia["Minjusticia_Val"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Minjusticia_Val";
//	Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Pesos";
	$fdata["GoodName"] = "Pesos";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Pesos");
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


	$tdataminjusticia["Pesos"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Pesos";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","UserId");
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


	$tdataminjusticia["UserId"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "UserId";
//	Digitalizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Digitalizado";
	$fdata["GoodName"] = "Digitalizado";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Digitalizado");
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


	$tdataminjusticia["Digitalizado"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Digitalizado";
//	Procesado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Procesado";
	$fdata["GoodName"] = "Procesado";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Procesado");
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


	$tdataminjusticia["Procesado"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Procesado";
//	Minjusticia2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Minjusticia2";
	$fdata["GoodName"] = "Minjusticia2";
	$fdata["ownerTable"] = "dbo.Minjusticia";
	$fdata["Label"] = GetFieldLabel("dbo_Minjusticia","Minjusticia2");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Minjusticia2";

		$fdata["sourceSingle"] = "Minjusticia2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minjusticia2";

	
	
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


	$tdataminjusticia["Minjusticia2"] = $fdata;
		$tdataminjusticia[".searchableFields"][] = "Minjusticia2";


$tables_data["dbo.Minjusticia"]=&$tdataminjusticia;
$field_labels["dbo_Minjusticia"] = &$fieldLabelsminjusticia;
$fieldToolTips["dbo_Minjusticia"] = &$fieldToolTipsminjusticia;
$placeHolders["dbo_Minjusticia"] = &$placeHoldersminjusticia;
$page_titles["dbo_Minjusticia"] = &$pageTitlesminjusticia;


changeTextControlsToDate( "dbo.Minjusticia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Minjusticia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Minjusticia"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Parejas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Parejas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "parejas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia"][0] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][0]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Minjusticia"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][0]["detailKeys"][]="AbogadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Abogados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Abogados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "abogados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Minjusticia"][1] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][1]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Minjusticia"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][1]["detailKeys"][]="AbogadoId";
		
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
					$masterTablesData["dbo.Minjusticia"][2] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][2]["masterKeys"][]="DespachoId";
				$masterTablesData["dbo.Minjusticia"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][2]["detailKeys"][]="DespachoId";
		
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
					$masterTablesData["dbo.Minjusticia"][3] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][3]["masterKeys"][]="TipoDocumentoId";
				$masterTablesData["dbo.Minjusticia"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][3]["detailKeys"][]="TipoDocumentoId";
		
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
					$masterTablesData["dbo.Minjusticia"][4] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][4]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][4]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Minjusticia"][4]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][4]["detailKeys"][]="SeccionalId";
		
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
					$masterTablesData["dbo.Minjusticia"][5] = $masterParams;
				$masterTablesData["dbo.Minjusticia"][5]["masterKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][5]["masterKeys"][]="CarteraTipoId";
				$masterTablesData["dbo.Minjusticia"][5]["detailKeys"] = array();
	$masterTablesData["dbo.Minjusticia"][5]["detailKeys"][]="CarteraTipoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_minjusticia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MinjusticiaId,  	Minjusticia,  	Numero,  	Nombre,  	Documento,  	Sentencia,  	Ejecutoria,  	Obligacion,  	Recaudo,  	Recaudo_Val,  	Saldo,  	Intereses,  	Intereses_Val,  	AbogadoId,  	Caja,  	Cuadernillos,  	Folios,  	Hechos,  	Salarios,  	Obligacion_Val,  	DespachoId,  	TipoDocumentoId,  	SeccionalId,  	Registro,  	Aprobacion,  	Sentencia_Val,  	Ejecutoria_Val,  	Notificacion,  	AcuerdoPago,  	ValorAcuerdopago,  	NumeroCuotas,  	ValorCuota,  	CarteraTipoId,  	Observaciones,  	ProcesoId,  	Nombre_Val,  	Documento_Val,  	ActaIndividual,  	ActaConsolidada,  	Autorizacion,  	Autorizado,  	CausalId,  	Numero_Val,  	Minjusticia_Val,  	Pesos,  	UserId,  	Digitalizado,  	Procesado,  	Minjusticia2";
$proto0["m_strFrom"] = "FROM dbo.Minjusticia";
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
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto6["m_sql"] = "MinjusticiaId";
$proto6["m_srcTableName"] = "dbo.Minjusticia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto8["m_sql"] = "Minjusticia";
$proto8["m_srcTableName"] = "dbo.Minjusticia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto10["m_sql"] = "Numero";
$proto10["m_srcTableName"] = "dbo.Minjusticia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto12["m_sql"] = "Nombre";
$proto12["m_srcTableName"] = "dbo.Minjusticia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto14["m_sql"] = "Documento";
$proto14["m_srcTableName"] = "dbo.Minjusticia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sentencia",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto16["m_sql"] = "Sentencia";
$proto16["m_srcTableName"] = "dbo.Minjusticia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto18["m_sql"] = "Ejecutoria";
$proto18["m_srcTableName"] = "dbo.Minjusticia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto20["m_sql"] = "Obligacion";
$proto20["m_srcTableName"] = "dbo.Minjusticia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto22["m_sql"] = "Recaudo";
$proto22["m_srcTableName"] = "dbo.Minjusticia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto24["m_sql"] = "Recaudo_Val";
$proto24["m_srcTableName"] = "dbo.Minjusticia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto26["m_sql"] = "Saldo";
$proto26["m_srcTableName"] = "dbo.Minjusticia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto28["m_sql"] = "Intereses";
$proto28["m_srcTableName"] = "dbo.Minjusticia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto30["m_sql"] = "Intereses_Val";
$proto30["m_srcTableName"] = "dbo.Minjusticia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto32["m_sql"] = "AbogadoId";
$proto32["m_srcTableName"] = "dbo.Minjusticia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Caja",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto34["m_sql"] = "Caja";
$proto34["m_srcTableName"] = "dbo.Minjusticia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuadernillos",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto36["m_sql"] = "Cuadernillos";
$proto36["m_srcTableName"] = "dbo.Minjusticia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto38["m_sql"] = "Folios";
$proto38["m_srcTableName"] = "dbo.Minjusticia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Hechos",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto40["m_sql"] = "Hechos";
$proto40["m_srcTableName"] = "dbo.Minjusticia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Salarios",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto42["m_sql"] = "Salarios";
$proto42["m_srcTableName"] = "dbo.Minjusticia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto44["m_sql"] = "Obligacion_Val";
$proto44["m_srcTableName"] = "dbo.Minjusticia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto46["m_sql"] = "DespachoId";
$proto46["m_srcTableName"] = "dbo.Minjusticia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto48["m_sql"] = "TipoDocumentoId";
$proto48["m_srcTableName"] = "dbo.Minjusticia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto50["m_sql"] = "SeccionalId";
$proto50["m_srcTableName"] = "dbo.Minjusticia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Registro",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto52["m_sql"] = "Registro";
$proto52["m_srcTableName"] = "dbo.Minjusticia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobacion",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto54["m_sql"] = "Aprobacion";
$proto54["m_srcTableName"] = "dbo.Minjusticia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Sentencia_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto56["m_sql"] = "Sentencia_Val";
$proto56["m_srcTableName"] = "dbo.Minjusticia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto58["m_sql"] = "Ejecutoria_Val";
$proto58["m_srcTableName"] = "dbo.Minjusticia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto60["m_sql"] = "Notificacion";
$proto60["m_srcTableName"] = "dbo.Minjusticia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "AcuerdoPago",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto62["m_sql"] = "AcuerdoPago";
$proto62["m_srcTableName"] = "dbo.Minjusticia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ValorAcuerdopago",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto64["m_sql"] = "ValorAcuerdopago";
$proto64["m_srcTableName"] = "dbo.Minjusticia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroCuotas",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto66["m_sql"] = "NumeroCuotas";
$proto66["m_srcTableName"] = "dbo.Minjusticia";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ValorCuota",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto68["m_sql"] = "ValorCuota";
$proto68["m_srcTableName"] = "dbo.Minjusticia";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto70["m_sql"] = "CarteraTipoId";
$proto70["m_srcTableName"] = "dbo.Minjusticia";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto72["m_sql"] = "Observaciones";
$proto72["m_srcTableName"] = "dbo.Minjusticia";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto74["m_sql"] = "ProcesoId";
$proto74["m_srcTableName"] = "dbo.Minjusticia";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto76["m_sql"] = "Nombre_Val";
$proto76["m_srcTableName"] = "dbo.Minjusticia";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto78["m_sql"] = "Documento_Val";
$proto78["m_srcTableName"] = "dbo.Minjusticia";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaIndividual",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto80["m_sql"] = "ActaIndividual";
$proto80["m_srcTableName"] = "dbo.Minjusticia";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ActaConsolidada",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto82["m_sql"] = "ActaConsolidada";
$proto82["m_srcTableName"] = "dbo.Minjusticia";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizacion",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto84["m_sql"] = "Autorizacion";
$proto84["m_srcTableName"] = "dbo.Minjusticia";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizado",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto86["m_sql"] = "Autorizado";
$proto86["m_srcTableName"] = "dbo.Minjusticia";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "CausalId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto88["m_sql"] = "CausalId";
$proto88["m_srcTableName"] = "dbo.Minjusticia";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto90["m_sql"] = "Numero_Val";
$proto90["m_srcTableName"] = "dbo.Minjusticia";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia_Val",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto92["m_sql"] = "Minjusticia_Val";
$proto92["m_srcTableName"] = "dbo.Minjusticia";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Pesos",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto94["m_sql"] = "Pesos";
$proto94["m_srcTableName"] = "dbo.Minjusticia";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto96["m_sql"] = "UserId";
$proto96["m_srcTableName"] = "dbo.Minjusticia";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Digitalizado",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto98["m_sql"] = "Digitalizado";
$proto98["m_srcTableName"] = "dbo.Minjusticia";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesado",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto100["m_sql"] = "Procesado";
$proto100["m_srcTableName"] = "dbo.Minjusticia";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia2",
	"m_strTable" => "dbo.Minjusticia",
	"m_srcTableName" => "dbo.Minjusticia"
));

$proto102["m_sql"] = "Minjusticia2";
$proto102["m_srcTableName"] = "dbo.Minjusticia";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "dbo.Minjusticia";
$proto105["m_srcTableName"] = "dbo.Minjusticia";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "MinjusticiaId";
$proto105["m_columns"][] = "Minjusticia";
$proto105["m_columns"][] = "Numero";
$proto105["m_columns"][] = "Nombre";
$proto105["m_columns"][] = "Documento";
$proto105["m_columns"][] = "Sentencia";
$proto105["m_columns"][] = "Ejecutoria";
$proto105["m_columns"][] = "Obligacion";
$proto105["m_columns"][] = "Recaudo";
$proto105["m_columns"][] = "Recaudo_Val";
$proto105["m_columns"][] = "Saldo";
$proto105["m_columns"][] = "Intereses";
$proto105["m_columns"][] = "Intereses_Val";
$proto105["m_columns"][] = "AbogadoId";
$proto105["m_columns"][] = "Caja";
$proto105["m_columns"][] = "Cuadernillos";
$proto105["m_columns"][] = "Folios";
$proto105["m_columns"][] = "Hechos";
$proto105["m_columns"][] = "Salarios";
$proto105["m_columns"][] = "Obligacion_Val";
$proto105["m_columns"][] = "DespachoId";
$proto105["m_columns"][] = "TipoDocumentoId";
$proto105["m_columns"][] = "SeccionalId";
$proto105["m_columns"][] = "Registro";
$proto105["m_columns"][] = "Aprobacion";
$proto105["m_columns"][] = "Sentencia_Val";
$proto105["m_columns"][] = "Ejecutoria_Val";
$proto105["m_columns"][] = "Notificacion";
$proto105["m_columns"][] = "AcuerdoPago";
$proto105["m_columns"][] = "ValorAcuerdopago";
$proto105["m_columns"][] = "NumeroCuotas";
$proto105["m_columns"][] = "ValorCuota";
$proto105["m_columns"][] = "CarteraTipoId";
$proto105["m_columns"][] = "Observaciones";
$proto105["m_columns"][] = "ProcesoId";
$proto105["m_columns"][] = "Nombre_Val";
$proto105["m_columns"][] = "Documento_Val";
$proto105["m_columns"][] = "ActaIndividual";
$proto105["m_columns"][] = "ActaConsolidada";
$proto105["m_columns"][] = "Autorizacion";
$proto105["m_columns"][] = "Autorizado";
$proto105["m_columns"][] = "CausalId";
$proto105["m_columns"][] = "Numero_Val";
$proto105["m_columns"][] = "Minjusticia_Val";
$proto105["m_columns"][] = "Pesos";
$proto105["m_columns"][] = "UserId";
$proto105["m_columns"][] = "Digitalizado";
$proto105["m_columns"][] = "Procesado";
$proto105["m_columns"][] = "Minjusticia2";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "dbo.Minjusticia";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "dbo.Minjusticia";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Minjusticia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_minjusticia = createSqlQuery_minjusticia();


	
		;

																																																	

$tdataminjusticia[".sqlquery"] = $queryData_minjusticia;



$tdataminjusticia[".hasEvents"] = false;

?>