<?php
$tdatarecaudos_por_a_os = array();
$tdatarecaudos_por_a_os[".searchableFields"] = array();
$tdatarecaudos_por_a_os[".ShortName"] = "recaudos_por_a_os";
$tdatarecaudos_por_a_os[".OwnerID"] = "";
$tdatarecaudos_por_a_os[".OriginalTable"] = "Recaudos por Años";


$tdatarecaudos_por_a_os[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatarecaudos_por_a_os[".originalPagesByType"] = $tdatarecaudos_por_a_os[".pagesByType"];
$tdatarecaudos_por_a_os[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatarecaudos_por_a_os[".originalPages"] = $tdatarecaudos_por_a_os[".pages"];
$tdatarecaudos_por_a_os[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatarecaudos_por_a_os[".originalDefaultPages"] = $tdatarecaudos_por_a_os[".defaultPages"];

//	field labels
$fieldLabelsrecaudos_por_a_os = array();
$fieldToolTipsrecaudos_por_a_os = array();
$pageTitlesrecaudos_por_a_os = array();
$placeHoldersrecaudos_por_a_os = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecaudos_por_a_os["Spanish"] = array();
	$fieldToolTipsrecaudos_por_a_os["Spanish"] = array();
	$placeHoldersrecaudos_por_a_os["Spanish"] = array();
	$pageTitlesrecaudos_por_a_os["Spanish"] = array();
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoId"] = "Pago Id";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoId"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoId"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["TipoRecaudo"] = "Tipo Recaudo";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["TipoRecaudo"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["TipoRecaudo"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Numero"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Numero"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Sancionado"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Sancionado"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Seccional"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Seccional"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Concepto"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Concepto"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Cuenta"] = "Cuenta";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Cuenta"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Cuenta"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Banco"] = "Banco";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Banco"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Banco"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Fecha"] = "Fecha Consignación";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Fecha"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Fecha"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Registro"] = "Fecha Registro";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Registro"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Registro"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoObli"] = "Pago Obli";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoObli"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoObli"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoCost"] = "Pago Cost";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoCost"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoCost"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoInte"] = "Pago Inte";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoInte"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoInte"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoMayo"] = "Mayor Vr. Recaudado";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoMayo"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoMayo"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["PagoTerm"] = "Recaudo Terminado";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["PagoTerm"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["PagoTerm"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Pago"] = "Total Recaudo";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Pago"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Pago"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["CarteraTipo"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["CarteraTipo"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["MesNumero"] = "Mes Numero";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["MesNumero"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["MesNumero"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["Abogado"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["Abogado"] = "";
	$fieldLabelsrecaudos_por_a_os["Spanish"]["NumeroConsignacion"] = "Numero Consignacion";
	$fieldToolTipsrecaudos_por_a_os["Spanish"]["NumeroConsignacion"] = "";
	$placeHoldersrecaudos_por_a_os["Spanish"]["NumeroConsignacion"] = "";
	if (count($fieldToolTipsrecaudos_por_a_os["Spanish"]))
		$tdatarecaudos_por_a_os[".isUseToolTips"] = true;
}


	$tdatarecaudos_por_a_os[".NCSearch"] = true;


	$tdatarecaudos_por_a_os[".scrollGridBody"] = true;

$tdatarecaudos_por_a_os[".shortTableName"] = "recaudos_por_a_os";
$tdatarecaudos_por_a_os[".nSecOptions"] = 0;

$tdatarecaudos_por_a_os[".mainTableOwnerID"] = "";
$tdatarecaudos_por_a_os[".entityType"] = 6;
$tdatarecaudos_por_a_os[".connId"] = "GCC_at_S00001_CCAD01";


$tdatarecaudos_por_a_os[".strOriginalTableName"] = "Recaudos por Años";

	



$tdatarecaudos_por_a_os[".showAddInPopup"] = false;

$tdatarecaudos_por_a_os[".showEditInPopup"] = false;

$tdatarecaudos_por_a_os[".showViewInPopup"] = false;

$tdatarecaudos_por_a_os[".listAjax"] = false;
//	temporary
//$tdatarecaudos_por_a_os[".listAjax"] = false;

	$tdatarecaudos_por_a_os[".audit"] = false;

	$tdatarecaudos_por_a_os[".locking"] = false;


$pages = $tdatarecaudos_por_a_os[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecaudos_por_a_os[".edit"] = true;
	$tdatarecaudos_por_a_os[".afterEditAction"] = 1;
	$tdatarecaudos_por_a_os[".closePopupAfterEdit"] = 1;
	$tdatarecaudos_por_a_os[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecaudos_por_a_os[".add"] = true;
$tdatarecaudos_por_a_os[".afterAddAction"] = 1;
$tdatarecaudos_por_a_os[".closePopupAfterAdd"] = 1;
$tdatarecaudos_por_a_os[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecaudos_por_a_os[".list"] = true;
}



$tdatarecaudos_por_a_os[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecaudos_por_a_os[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecaudos_por_a_os[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecaudos_por_a_os[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecaudos_por_a_os[".printFriendly"] = true;
}



$tdatarecaudos_por_a_os[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecaudos_por_a_os[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecaudos_por_a_os[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecaudos_por_a_os[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																									

$tdatarecaudos_por_a_os[".ajaxCodeSnippetAdded"] = false;

$tdatarecaudos_por_a_os[".buttonsAdded"] = false;

$tdatarecaudos_por_a_os[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecaudos_por_a_os[".isUseTimeForSearch"] = false;


$tdatarecaudos_por_a_os[".badgeColor"] = "DB7093";


$tdatarecaudos_por_a_os[".allSearchFields"] = array();
$tdatarecaudos_por_a_os[".filterFields"] = array();
$tdatarecaudos_por_a_os[".requiredSearchFields"] = array();

$tdatarecaudos_por_a_os[".googleLikeFields"] = array();
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoId";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "TipoRecaudo";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Numero";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Sancionado";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "SancionadoDocumento";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Seccional";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Concepto";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Cuenta";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Banco";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Fecha";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Registro";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoObli";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoCost";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoInte";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoMayo";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "PagoTerm";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Pago";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "CarteraTipo";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "MesNumero";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "Abogado";
$tdatarecaudos_por_a_os[".googleLikeFields"][] = "NumeroConsignacion";




$tdatarecaudos_por_a_os[".printerPageOrientation"] = 0;
$tdatarecaudos_por_a_os[".nPrinterPageScale"] = 100;

$tdatarecaudos_por_a_os[".nPrinterSplitRecords"] = 40;

$tdatarecaudos_por_a_os[".geocodingEnabled"] = false;




$tdatarecaudos_por_a_os[".isDisplayLoading"] = true;






$tdatarecaudos_por_a_os[".pageSize"] = 20;

$tdatarecaudos_por_a_os[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarecaudos_por_a_os[".strOrderBy"] = $tstrOrderBy;

$tdatarecaudos_por_a_os[".orderindexes"] = array();


$tdatarecaudos_por_a_os[".sqlHead"] = "";
$tdatarecaudos_por_a_os[".sqlFrom"] = "";
$tdatarecaudos_por_a_os[".sqlWhereExpr"] = "";
$tdatarecaudos_por_a_os[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecaudos_por_a_os[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecaudos_por_a_os[".arrGroupsPerPage"] = $arrGPP;

$tdatarecaudos_por_a_os[".highlightSearchResults"] = true;

$tableKeysrecaudos_por_a_os = array();
$tdatarecaudos_por_a_os[".Keys"] = $tableKeysrecaudos_por_a_os;


$tdatarecaudos_por_a_os[".hideMobileList"] = array();




//	PagoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PagoId";
	$fdata["GoodName"] = "PagoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PagoId";

	
		$fdata["FullName"] = "PagoId";

	
	
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


	$tdatarecaudos_por_a_os["PagoId"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoId";
//	TipoRecaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoRecaudo";
	$fdata["GoodName"] = "TipoRecaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","TipoRecaudo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoRecaudo";

	
		$fdata["FullName"] = "TipoRecaudo";

	
	
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


	$tdatarecaudos_por_a_os["TipoRecaudo"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "TipoRecaudo";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
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


	$tdatarecaudos_por_a_os["Numero"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["FullName"] = "Sancionado";

	
	
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


	$tdatarecaudos_por_a_os["Sancionado"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","SancionadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoDocumento";

	
		$fdata["FullName"] = "SancionadoDocumento";

	
	
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


	$tdatarecaudos_por_a_os["SancionadoDocumento"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "SancionadoDocumento";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["FullName"] = "Seccional";

	
	
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


	$tdatarecaudos_por_a_os["Seccional"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["FullName"] = "Concepto";

	
	
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


	$tdatarecaudos_por_a_os["Concepto"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Concepto";
//	Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cuenta";
	$fdata["GoodName"] = "Cuenta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuenta";

	
		$fdata["FullName"] = "Cuenta";

	
	
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


	$tdatarecaudos_por_a_os["Cuenta"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Cuenta";
//	Banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Banco";
	$fdata["GoodName"] = "Banco";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Banco";

	
		$fdata["FullName"] = "Banco";

	
	
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


	$tdatarecaudos_por_a_os["Banco"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Banco";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Fecha");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Fecha";

	
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


	$tdatarecaudos_por_a_os["Fecha"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Fecha";
//	Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Registro";
	$fdata["GoodName"] = "Registro";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Registro";

	
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


	$tdatarecaudos_por_a_os["Registro"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Registro";
//	PagoObli
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PagoObli";
	$fdata["GoodName"] = "PagoObli";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoObli");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "PagoObli";

	
		$fdata["FullName"] = "PagoObli";

	
	
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


	$tdatarecaudos_por_a_os["PagoObli"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoObli";
//	PagoCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PagoCost";
	$fdata["GoodName"] = "PagoCost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoCost");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "PagoCost";

	
		$fdata["FullName"] = "PagoCost";

	
	
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


	$tdatarecaudos_por_a_os["PagoCost"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoCost";
//	PagoInte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PagoInte";
	$fdata["GoodName"] = "PagoInte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoInte");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "PagoInte";

	
		$fdata["FullName"] = "PagoInte";

	
	
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


	$tdatarecaudos_por_a_os["PagoInte"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoInte";
//	PagoMayo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PagoMayo";
	$fdata["GoodName"] = "PagoMayo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoMayo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "PagoMayo";

	
		$fdata["FullName"] = "PagoMayo";

	
	
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


	$tdatarecaudos_por_a_os["PagoMayo"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoMayo";
//	PagoTerm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PagoTerm";
	$fdata["GoodName"] = "PagoTerm";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","PagoTerm");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "PagoTerm";

	
		$fdata["FullName"] = "PagoTerm";

	
	
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


	$tdatarecaudos_por_a_os["PagoTerm"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "PagoTerm";
//	Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Pago";
	$fdata["GoodName"] = "Pago";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Pago");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Pago";

	
		$fdata["FullName"] = "Pago";

	
	
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


	$tdatarecaudos_por_a_os["Pago"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Pago";
//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

	
		$fdata["FullName"] = "CarteraTipo";

	
	
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


	$tdatarecaudos_por_a_os["CarteraTipo"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "CarteraTipo";
//	MesNumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "MesNumero";
	$fdata["GoodName"] = "MesNumero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","MesNumero");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MesNumero";

	
		$fdata["FullName"] = "MesNumero";

	
	
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


	$tdatarecaudos_por_a_os["MesNumero"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "MesNumero";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["FullName"] = "Abogado";

	
	
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


	$tdatarecaudos_por_a_os["Abogado"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "Abogado";
//	NumeroConsignacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "NumeroConsignacion";
	$fdata["GoodName"] = "NumeroConsignacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Recaudos_por_A_os","NumeroConsignacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NumeroConsignacion";

	
		$fdata["FullName"] = "NumeroConsignacion";

	
	
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


	$tdatarecaudos_por_a_os["NumeroConsignacion"] = $fdata;
		$tdatarecaudos_por_a_os[".searchableFields"][] = "NumeroConsignacion";


$tables_data["Recaudos por Años"]=&$tdatarecaudos_por_a_os;
$field_labels["Recaudos_por_A_os"] = &$fieldLabelsrecaudos_por_a_os;
$fieldToolTips["Recaudos_por_A_os"] = &$fieldToolTipsrecaudos_por_a_os;
$placeHolders["Recaudos_por_A_os"] = &$placeHoldersrecaudos_por_a_os;
$page_titles["Recaudos_por_A_os"] = &$pageTitlesrecaudos_por_a_os;


changeTextControlsToDate( "Recaudos por Años" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Recaudos por Años"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Recaudos por Años"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/recaudos_por_a_os_ops.php" ) );



	
		;

																					

$tdatarecaudos_por_a_os[".sqlquery"] = $queryData_recaudos_por_a_os;



include_once(getabspath("include/recaudos_por_a_os_events.php"));
$tdatarecaudos_por_a_os[".hasEvents"] = true;

?>