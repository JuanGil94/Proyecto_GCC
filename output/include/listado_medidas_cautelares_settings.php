<?php
$tdatalistado_medidas_cautelares = array();
$tdatalistado_medidas_cautelares[".searchableFields"] = array();
$tdatalistado_medidas_cautelares[".ShortName"] = "listado_medidas_cautelares";
$tdatalistado_medidas_cautelares[".OwnerID"] = "";
$tdatalistado_medidas_cautelares[".OriginalTable"] = "Listado Medidas Cautelares";


$tdatalistado_medidas_cautelares[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalistado_medidas_cautelares[".originalPagesByType"] = $tdatalistado_medidas_cautelares[".pagesByType"];
$tdatalistado_medidas_cautelares[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalistado_medidas_cautelares[".originalPages"] = $tdatalistado_medidas_cautelares[".pages"];
$tdatalistado_medidas_cautelares[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalistado_medidas_cautelares[".originalDefaultPages"] = $tdatalistado_medidas_cautelares[".defaultPages"];

//	field labels
$fieldLabelslistado_medidas_cautelares = array();
$fieldToolTipslistado_medidas_cautelares = array();
$pageTitleslistado_medidas_cautelares = array();
$placeHolderslistado_medidas_cautelares = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslistado_medidas_cautelares["Spanish"] = array();
	$fieldToolTipslistado_medidas_cautelares["Spanish"] = array();
	$placeHolderslistado_medidas_cautelares["Spanish"] = array();
	$pageTitleslistado_medidas_cautelares["Spanish"] = array();
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Seccional"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Seccional"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Concepto"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Concepto"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Numero"] = "Numero";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Numero"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Numero"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Sancionado"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Sancionado"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["No__Documento"] = "No. Documento";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["No__Documento"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["No__Documento"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["TipoPropiedad"] = "Tipo Propiedad";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["TipoPropiedad"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["TipoPropiedad"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Propiedad"] = "Propiedad";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Propiedad"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Propiedad"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Ciudad"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Ciudad"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Matr_cula_Placa_Registro"] = "Matrícula/Placa/Registro";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Matr_cula_Placa_Registro"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Matr_cula_Placa_Registro"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Aval_o"] = "Avalúo";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Aval_o"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Aval_o"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["F__Embargo"] = "F. Embargo";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["F__Embargo"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["F__Embargo"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Secuestrado"] = "Secuestrado";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Secuestrado"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Secuestrado"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["F__Secuestro"] = "F. Secuestro";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["F__Secuestro"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["F__Secuestro"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Secuestre"] = "Secuestre";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Secuestre"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Secuestre"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Doc__Secuestre"] = "Doc. Secuestre";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Doc__Secuestre"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Doc__Secuestre"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Dir__Secuestre"] = "Dir. Secuestre";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Dir__Secuestre"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Dir__Secuestre"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Tel__Secuestre"] = "Tel. Secuestre";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Tel__Secuestre"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Tel__Secuestre"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Comisi_n"] = "Comisión";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Comisi_n"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Comisi_n"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Aviso_Remate"] = "Aviso Remate";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Aviso_Remate"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Aviso_Remate"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Aprobaci_n"] = "Aprobación";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Aprobaci_n"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Aprobaci_n"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Valor_Rematado"] = "Valor Rematado";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Valor_Rematado"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Valor_Rematado"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Dilig__Entrega"] = "Dilig. Entrega";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Dilig__Entrega"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Dilig__Entrega"] = "";
	$fieldLabelslistado_medidas_cautelares["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipslistado_medidas_cautelares["Spanish"]["Observaciones"] = "";
	$placeHolderslistado_medidas_cautelares["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipslistado_medidas_cautelares["Spanish"]))
		$tdatalistado_medidas_cautelares[".isUseToolTips"] = true;
}


	$tdatalistado_medidas_cautelares[".NCSearch"] = true;



$tdatalistado_medidas_cautelares[".shortTableName"] = "listado_medidas_cautelares";
$tdatalistado_medidas_cautelares[".nSecOptions"] = 0;

$tdatalistado_medidas_cautelares[".mainTableOwnerID"] = "";
$tdatalistado_medidas_cautelares[".entityType"] = 6;
$tdatalistado_medidas_cautelares[".connId"] = "GCC_at_S00001_CCAD01";


$tdatalistado_medidas_cautelares[".strOriginalTableName"] = "Listado Medidas Cautelares";

	



$tdatalistado_medidas_cautelares[".showAddInPopup"] = false;

$tdatalistado_medidas_cautelares[".showEditInPopup"] = false;

$tdatalistado_medidas_cautelares[".showViewInPopup"] = false;

$tdatalistado_medidas_cautelares[".listAjax"] = false;
//	temporary
//$tdatalistado_medidas_cautelares[".listAjax"] = false;

	$tdatalistado_medidas_cautelares[".audit"] = false;

	$tdatalistado_medidas_cautelares[".locking"] = false;


$pages = $tdatalistado_medidas_cautelares[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistado_medidas_cautelares[".edit"] = true;
	$tdatalistado_medidas_cautelares[".afterEditAction"] = 1;
	$tdatalistado_medidas_cautelares[".closePopupAfterEdit"] = 1;
	$tdatalistado_medidas_cautelares[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistado_medidas_cautelares[".add"] = true;
$tdatalistado_medidas_cautelares[".afterAddAction"] = 1;
$tdatalistado_medidas_cautelares[".closePopupAfterAdd"] = 1;
$tdatalistado_medidas_cautelares[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistado_medidas_cautelares[".list"] = true;
}



$tdatalistado_medidas_cautelares[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistado_medidas_cautelares[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistado_medidas_cautelares[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistado_medidas_cautelares[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistado_medidas_cautelares[".printFriendly"] = true;
}



$tdatalistado_medidas_cautelares[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistado_medidas_cautelares[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistado_medidas_cautelares[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistado_medidas_cautelares[".isUseAjaxSuggest"] = false;



																																																																																																												

$tdatalistado_medidas_cautelares[".ajaxCodeSnippetAdded"] = false;

$tdatalistado_medidas_cautelares[".buttonsAdded"] = false;

$tdatalistado_medidas_cautelares[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistado_medidas_cautelares[".isUseTimeForSearch"] = false;


$tdatalistado_medidas_cautelares[".badgeColor"] = "BC8F8F";


$tdatalistado_medidas_cautelares[".allSearchFields"] = array();
$tdatalistado_medidas_cautelares[".filterFields"] = array();
$tdatalistado_medidas_cautelares[".requiredSearchFields"] = array();

$tdatalistado_medidas_cautelares[".googleLikeFields"] = array();
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Seccional";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Concepto";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Numero";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Sancionado";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "No. Documento";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "TipoPropiedad";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Propiedad";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Ciudad";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Matrícula/Placa/Registro";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Avalúo";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "F. Embargo";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Secuestrado";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "F. Secuestro";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Secuestre";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Doc. Secuestre";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Dir. Secuestre";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Tel. Secuestre";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Comisión";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Aviso Remate";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Aprobación";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Valor Rematado";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Dilig. Entrega";
$tdatalistado_medidas_cautelares[".googleLikeFields"][] = "Observaciones";




$tdatalistado_medidas_cautelares[".printerPageOrientation"] = 0;
$tdatalistado_medidas_cautelares[".nPrinterPageScale"] = 100;

$tdatalistado_medidas_cautelares[".nPrinterSplitRecords"] = 40;

$tdatalistado_medidas_cautelares[".geocodingEnabled"] = false;










$tdatalistado_medidas_cautelares[".pageSize"] = 20;

$tdatalistado_medidas_cautelares[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalistado_medidas_cautelares[".strOrderBy"] = $tstrOrderBy;

$tdatalistado_medidas_cautelares[".orderindexes"] = array();


$tdatalistado_medidas_cautelares[".sqlHead"] = "";
$tdatalistado_medidas_cautelares[".sqlFrom"] = "";
$tdatalistado_medidas_cautelares[".sqlWhereExpr"] = "";
$tdatalistado_medidas_cautelares[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistado_medidas_cautelares[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistado_medidas_cautelares[".arrGroupsPerPage"] = $arrGPP;

$tdatalistado_medidas_cautelares[".highlightSearchResults"] = true;

$tableKeyslistado_medidas_cautelares = array();
$tdatalistado_medidas_cautelares[".Keys"] = $tableKeyslistado_medidas_cautelares;


$tdatalistado_medidas_cautelares[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Seccional");
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


	$tdatalistado_medidas_cautelares["Seccional"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Seccional";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Concepto");
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


	$tdatalistado_medidas_cautelares["Concepto"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Concepto";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Numero");
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


	$tdatalistado_medidas_cautelares["Numero"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Numero";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Sancionado");
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


	$tdatalistado_medidas_cautelares["Sancionado"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Sancionado";
//	No. Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "No. Documento";
	$fdata["GoodName"] = "No__Documento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","No__Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "No. Documento";

	
		$fdata["FullName"] = "No. Documento";

	
	
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


	$tdatalistado_medidas_cautelares["No. Documento"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "No. Documento";
//	TipoPropiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoPropiedad";
	$fdata["GoodName"] = "TipoPropiedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","TipoPropiedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoPropiedad";

	
		$fdata["FullName"] = "TipoPropiedad";

	
	
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


	$tdatalistado_medidas_cautelares["TipoPropiedad"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "TipoPropiedad";
//	Propiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Propiedad";
	$fdata["GoodName"] = "Propiedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Propiedad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

	
		$fdata["FullName"] = "Propiedad";

	
	
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


	$tdatalistado_medidas_cautelares["Propiedad"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Propiedad";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

	
		$fdata["FullName"] = "Ciudad";

	
	
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


	$tdatalistado_medidas_cautelares["Ciudad"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Ciudad";
//	Matrícula/Placa/Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Matrícula/Placa/Registro";
	$fdata["GoodName"] = "Matr_cula_Placa_Registro";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Matr_cula_Placa_Registro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matrícula/Placa/Registro";

	
		$fdata["FullName"] = "Matrícula/Placa/Registro";

	
	
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


	$tdatalistado_medidas_cautelares["Matrícula/Placa/Registro"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Matrícula/Placa/Registro";
//	Avalúo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Avalúo";
	$fdata["GoodName"] = "Aval_o";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Aval_o");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Avalúo";

	
		$fdata["FullName"] = "Avalúo";

	
	
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


	$tdatalistado_medidas_cautelares["Avalúo"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Avalúo";
//	F. Embargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "F. Embargo";
	$fdata["GoodName"] = "F__Embargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","F__Embargo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "F. Embargo";

	
		$fdata["FullName"] = "F. Embargo";

	
	
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


	$tdatalistado_medidas_cautelares["F. Embargo"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "F. Embargo";
//	Secuestrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Secuestrado";
	$fdata["GoodName"] = "Secuestrado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Secuestrado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Secuestrado";

	
		$fdata["FullName"] = "Secuestrado";

	
	
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


	$tdatalistado_medidas_cautelares["Secuestrado"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Secuestrado";
//	F. Secuestro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "F. Secuestro";
	$fdata["GoodName"] = "F__Secuestro";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","F__Secuestro");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "F. Secuestro";

	
		$fdata["FullName"] = "F. Secuestro";

	
	
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


	$tdatalistado_medidas_cautelares["F. Secuestro"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "F. Secuestro";
//	Secuestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Secuestre";
	$fdata["GoodName"] = "Secuestre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Secuestre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Secuestre";

	
		$fdata["FullName"] = "Secuestre";

	
	
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


	$tdatalistado_medidas_cautelares["Secuestre"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Secuestre";
//	Doc. Secuestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Doc. Secuestre";
	$fdata["GoodName"] = "Doc__Secuestre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Doc__Secuestre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Doc. Secuestre";

	
		$fdata["FullName"] = "Doc. Secuestre";

	
	
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


	$tdatalistado_medidas_cautelares["Doc. Secuestre"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Doc. Secuestre";
//	Dir. Secuestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Dir. Secuestre";
	$fdata["GoodName"] = "Dir__Secuestre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Dir__Secuestre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dir. Secuestre";

	
		$fdata["FullName"] = "Dir. Secuestre";

	
	
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


	$tdatalistado_medidas_cautelares["Dir. Secuestre"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Dir. Secuestre";
//	Tel. Secuestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Tel. Secuestre";
	$fdata["GoodName"] = "Tel__Secuestre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Tel__Secuestre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tel. Secuestre";

	
		$fdata["FullName"] = "Tel. Secuestre";

	
	
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


	$tdatalistado_medidas_cautelares["Tel. Secuestre"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Tel. Secuestre";
//	Comisión
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Comisión";
	$fdata["GoodName"] = "Comisi_n";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Comisi_n");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Comisión";

	
		$fdata["FullName"] = "Comisión";

	
	
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


	$tdatalistado_medidas_cautelares["Comisión"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Comisión";
//	Aviso Remate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Aviso Remate";
	$fdata["GoodName"] = "Aviso_Remate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Aviso_Remate");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aviso Remate";

	
		$fdata["FullName"] = "Aviso Remate";

	
	
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


	$tdatalistado_medidas_cautelares["Aviso Remate"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Aviso Remate";
//	Aprobación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Aprobación";
	$fdata["GoodName"] = "Aprobaci_n";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Aprobaci_n");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aprobación";

	
		$fdata["FullName"] = "Aprobación";

	
	
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


	$tdatalistado_medidas_cautelares["Aprobación"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Aprobación";
//	Valor Rematado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Valor Rematado";
	$fdata["GoodName"] = "Valor_Rematado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Valor_Rematado");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Valor Rematado";

	
		$fdata["FullName"] = "Valor Rematado";

	
	
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


	$tdatalistado_medidas_cautelares["Valor Rematado"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Valor Rematado";
//	Dilig. Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Dilig. Entrega";
	$fdata["GoodName"] = "Dilig__Entrega";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Dilig__Entrega");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Dilig. Entrega";

	
		$fdata["FullName"] = "Dilig. Entrega";

	
	
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


	$tdatalistado_medidas_cautelares["Dilig. Entrega"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Dilig. Entrega";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Listado_Medidas_Cautelares","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatalistado_medidas_cautelares["Observaciones"] = $fdata;
		$tdatalistado_medidas_cautelares[".searchableFields"][] = "Observaciones";


$tables_data["Listado Medidas Cautelares"]=&$tdatalistado_medidas_cautelares;
$field_labels["Listado_Medidas_Cautelares"] = &$fieldLabelslistado_medidas_cautelares;
$fieldToolTips["Listado_Medidas_Cautelares"] = &$fieldToolTipslistado_medidas_cautelares;
$placeHolders["Listado_Medidas_Cautelares"] = &$placeHolderslistado_medidas_cautelares;
$page_titles["Listado_Medidas_Cautelares"] = &$pageTitleslistado_medidas_cautelares;


changeTextControlsToDate( "Listado Medidas Cautelares" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Listado Medidas Cautelares"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Listado Medidas Cautelares"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/listado_medidas_cautelares_ops.php" ) );



	
		;

																							

$tdatalistado_medidas_cautelares[".sqlquery"] = $queryData_listado_medidas_cautelares;



$tdatalistado_medidas_cautelares[".hasEvents"] = false;

?>