<?php
$tdatacorrespondencias1 = array();
$tdatacorrespondencias1[".searchableFields"] = array();
$tdatacorrespondencias1[".ShortName"] = "correspondencias1";
$tdatacorrespondencias1[".OwnerID"] = "";
$tdatacorrespondencias1[".OriginalTable"] = "dbo.Correspondencias";


$tdatacorrespondencias1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacorrespondencias1[".originalPagesByType"] = $tdatacorrespondencias1[".pagesByType"];
$tdatacorrespondencias1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacorrespondencias1[".originalPages"] = $tdatacorrespondencias1[".pages"];
$tdatacorrespondencias1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacorrespondencias1[".originalDefaultPages"] = $tdatacorrespondencias1[".defaultPages"];

//	field labels
$fieldLabelscorrespondencias1 = array();
$fieldToolTipscorrespondencias1 = array();
$pageTitlescorrespondencias1 = array();
$placeHolderscorrespondencias1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorrespondencias1["Spanish"] = array();
	$fieldToolTipscorrespondencias1["Spanish"] = array();
	$placeHolderscorrespondencias1["Spanish"] = array();
	$pageTitlescorrespondencias1["Spanish"] = array();
	$fieldLabelscorrespondencias1["Spanish"]["N_Minjusticia"] = "N.Minjusticia";
	$fieldToolTipscorrespondencias1["Spanish"]["N_Minjusticia"] = "";
	$placeHolderscorrespondencias1["Spanish"]["N_Minjusticia"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Deudor"] = "Deudor";
	$fieldToolTipscorrespondencias1["Spanish"]["Deudor"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Deudor"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Solidario"] = "Solidario";
	$fieldToolTipscorrespondencias1["Spanish"]["Solidario"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Solidario"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["T_Documento"] = "T.Documento";
	$fieldToolTipscorrespondencias1["Spanish"]["T_Documento"] = "";
	$placeHolderscorrespondencias1["Spanish"]["T_Documento"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Documento"] = "Documento";
	$fieldToolTipscorrespondencias1["Spanish"]["Documento"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Documento"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipscorrespondencias1["Spanish"]["Concepto"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Concepto"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["N_Proceso"] = "N.Proceso";
	$fieldToolTipscorrespondencias1["Spanish"]["N_Proceso"] = "";
	$placeHolderscorrespondencias1["Spanish"]["N_Proceso"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["No_Radicado_Origen"] = "No.Radicado Origen";
	$fieldToolTipscorrespondencias1["Spanish"]["No_Radicado_Origen"] = "";
	$placeHolderscorrespondencias1["Spanish"]["No_Radicado_Origen"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Competencia"] = "Competencia";
	$fieldToolTipscorrespondencias1["Spanish"]["Competencia"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Competencia"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["F_Creaci_n"] = "F.Creación";
	$fieldToolTipscorrespondencias1["Spanish"]["F_Creaci_n"] = "";
	$placeHolderscorrespondencias1["Spanish"]["F_Creaci_n"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["F_Providencia"] = "F.Providencia";
	$fieldToolTipscorrespondencias1["Spanish"]["F_Providencia"] = "";
	$placeHolderscorrespondencias1["Spanish"]["F_Providencia"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["F_Ejecutoria"] = "F.Ejecutoria";
	$fieldToolTipscorrespondencias1["Spanish"]["F_Ejecutoria"] = "";
	$placeHolderscorrespondencias1["Spanish"]["F_Ejecutoria"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipscorrespondencias1["Spanish"]["Obligacion"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Obligacion"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Costas"] = "Costas";
	$fieldToolTipscorrespondencias1["Spanish"]["Costas"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Costas"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipscorrespondencias1["Spanish"]["Intereses"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Intereses"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["F_Acuerdo_Pago"] = "F.Acuerdo Pago";
	$fieldToolTipscorrespondencias1["Spanish"]["F_Acuerdo_Pago"] = "";
	$placeHolderscorrespondencias1["Spanish"]["F_Acuerdo_Pago"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Estado"] = "Estado";
	$fieldToolTipscorrespondencias1["Spanish"]["Estado"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Estado"] = "";
	$fieldLabelscorrespondencias1["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipscorrespondencias1["Spanish"]["Abogado"] = "";
	$placeHolderscorrespondencias1["Spanish"]["Abogado"] = "";
	if (count($fieldToolTipscorrespondencias1["Spanish"]))
		$tdatacorrespondencias1[".isUseToolTips"] = true;
}


	$tdatacorrespondencias1[".NCSearch"] = true;


	$tdatacorrespondencias1[".scrollGridBody"] = true;

$tdatacorrespondencias1[".shortTableName"] = "correspondencias1";
$tdatacorrespondencias1[".nSecOptions"] = 0;

$tdatacorrespondencias1[".mainTableOwnerID"] = "";
$tdatacorrespondencias1[".entityType"] = 1;
$tdatacorrespondencias1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacorrespondencias1[".strOriginalTableName"] = "dbo.Correspondencias";

	



$tdatacorrespondencias1[".showAddInPopup"] = false;

$tdatacorrespondencias1[".showEditInPopup"] = false;

$tdatacorrespondencias1[".showViewInPopup"] = false;

$tdatacorrespondencias1[".listAjax"] = false;
//	temporary
//$tdatacorrespondencias1[".listAjax"] = false;

	$tdatacorrespondencias1[".audit"] = true;

	$tdatacorrespondencias1[".locking"] = false;


$pages = $tdatacorrespondencias1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorrespondencias1[".edit"] = true;
	$tdatacorrespondencias1[".afterEditAction"] = 1;
	$tdatacorrespondencias1[".closePopupAfterEdit"] = 1;
	$tdatacorrespondencias1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorrespondencias1[".add"] = true;
$tdatacorrespondencias1[".afterAddAction"] = 1;
$tdatacorrespondencias1[".closePopupAfterAdd"] = 1;
$tdatacorrespondencias1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorrespondencias1[".list"] = true;
}



$tdatacorrespondencias1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorrespondencias1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorrespondencias1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorrespondencias1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorrespondencias1[".printFriendly"] = true;
}



$tdatacorrespondencias1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorrespondencias1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorrespondencias1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorrespondencias1[".isUseAjaxSuggest"] = true;



																																																																																																																																																												

$tdatacorrespondencias1[".ajaxCodeSnippetAdded"] = false;

$tdatacorrespondencias1[".buttonsAdded"] = false;

$tdatacorrespondencias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorrespondencias1[".isUseTimeForSearch"] = false;


$tdatacorrespondencias1[".badgeColor"] = "6DA5C8";


$tdatacorrespondencias1[".allSearchFields"] = array();
$tdatacorrespondencias1[".filterFields"] = array();
$tdatacorrespondencias1[".requiredSearchFields"] = array();

$tdatacorrespondencias1[".googleLikeFields"] = array();
$tdatacorrespondencias1[".googleLikeFields"][] = "N.Minjusticia";
$tdatacorrespondencias1[".googleLikeFields"][] = "Deudor";
$tdatacorrespondencias1[".googleLikeFields"][] = "Solidario";
$tdatacorrespondencias1[".googleLikeFields"][] = "T.Documento";
$tdatacorrespondencias1[".googleLikeFields"][] = "Documento";
$tdatacorrespondencias1[".googleLikeFields"][] = "Concepto";
$tdatacorrespondencias1[".googleLikeFields"][] = "N.Proceso";
$tdatacorrespondencias1[".googleLikeFields"][] = "No.Radicado Origen";
$tdatacorrespondencias1[".googleLikeFields"][] = "Competencia";
$tdatacorrespondencias1[".googleLikeFields"][] = "F.Creación";
$tdatacorrespondencias1[".googleLikeFields"][] = "F.Providencia";
$tdatacorrespondencias1[".googleLikeFields"][] = "F.Ejecutoria";
$tdatacorrespondencias1[".googleLikeFields"][] = "Obligacion";
$tdatacorrespondencias1[".googleLikeFields"][] = "Costas";
$tdatacorrespondencias1[".googleLikeFields"][] = "Intereses";
$tdatacorrespondencias1[".googleLikeFields"][] = "F.Acuerdo Pago";
$tdatacorrespondencias1[".googleLikeFields"][] = "Estado";
$tdatacorrespondencias1[".googleLikeFields"][] = "Abogado";



$tdatacorrespondencias1[".tableType"] = "list";

$tdatacorrespondencias1[".printerPageOrientation"] = 0;
$tdatacorrespondencias1[".nPrinterPageScale"] = 100;

$tdatacorrespondencias1[".nPrinterSplitRecords"] = 40;

$tdatacorrespondencias1[".geocodingEnabled"] = false;










$tdatacorrespondencias1[".pageSize"] = 20;

$tdatacorrespondencias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacorrespondencias1[".strOrderBy"] = $tstrOrderBy;

$tdatacorrespondencias1[".orderindexes"] = array();


$tdatacorrespondencias1[".sqlHead"] = "SELECT P.NumeroMinjusticia AS [N.Minjusticia],  S.Sancionado AS Deudor,  ' ' AS Solidario,  TD.TipoDocumento AS [T.Documento],  S.Documento AS Documento,  C.Concepto AS Concepto,  P.Numero AS [N.Proceso],  P.Origen AS [No.Radicado Origen],  SE.Seccional AS Competencia,  P.Fecha AS [F.Creación],  P.Providencia AS [F.Providencia],  P.Ejecutoria AS [F.Ejecutoria],  P.Obligacion AS Obligacion,  P.Costas AS Costas,  P.Intereses AS Intereses,  P.Acuerdo AS [F.Acuerdo Pago],  E.Estado AS Estado,  A.Abogado AS Abogado";
$tdatacorrespondencias1[".sqlFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId  INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$tdatacorrespondencias1[".sqlWhereExpr"] = "(P.SeccionalId = 2) AND (P.CarteraTipoId IN (1)) AND (P.EstadoId <>6)";
$tdatacorrespondencias1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorrespondencias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorrespondencias1[".arrGroupsPerPage"] = $arrGPP;

$tdatacorrespondencias1[".highlightSearchResults"] = true;

$tableKeyscorrespondencias1 = array();
$tdatacorrespondencias1[".Keys"] = $tableKeyscorrespondencias1;


$tdatacorrespondencias1[".hideMobileList"] = array();




//	N.Minjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "N.Minjusticia";
	$fdata["GoodName"] = "N_Minjusticia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","N_Minjusticia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NumeroMinjusticia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.NumeroMinjusticia";

	
	
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


	$tdatacorrespondencias1["N.Minjusticia"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "N.Minjusticia";
//	Deudor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Deudor";
	$fdata["GoodName"] = "Deudor";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Deudor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Sancionado";

	
	
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


	$tdatacorrespondencias1["Deudor"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Deudor";
//	Solidario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Solidario";
	$fdata["GoodName"] = "Solidario";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Solidario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Solidario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "' '";

	
	
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


	$tdatacorrespondencias1["Solidario"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Solidario";
//	T.Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "T.Documento";
	$fdata["GoodName"] = "T_Documento";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","T_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDocumento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TD.TipoDocumento";

	
	
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


	$tdatacorrespondencias1["T.Documento"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "T.Documento";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S.Documento";

	
	
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


	$tdatacorrespondencias1["Documento"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Documento";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Concepto");
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


	$tdatacorrespondencias1["Concepto"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Concepto";
//	N.Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "N.Proceso";
	$fdata["GoodName"] = "N_Proceso";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","N_Proceso");
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


	$tdatacorrespondencias1["N.Proceso"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "N.Proceso";
//	No.Radicado Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "No.Radicado Origen";
	$fdata["GoodName"] = "No_Radicado_Origen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","No_Radicado_Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Origen";

	
	
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


	$tdatacorrespondencias1["No.Radicado Origen"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "No.Radicado Origen";
//	Competencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Competencia";
	$fdata["GoodName"] = "Competencia";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Competencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SE.Seccional";

	
	
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


	$tdatacorrespondencias1["Competencia"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Competencia";
//	F.Creación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "F.Creación";
	$fdata["GoodName"] = "F_Creaci_n";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","F_Creaci_n");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Fecha";

	
	
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


	$tdatacorrespondencias1["F.Creación"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "F.Creación";
//	F.Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "F.Providencia";
	$fdata["GoodName"] = "F_Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","F_Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Providencia";

	
	
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


	$tdatacorrespondencias1["F.Providencia"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "F.Providencia";
//	F.Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "F.Ejecutoria";
	$fdata["GoodName"] = "F_Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","F_Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Ejecutoria";

	
	
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


	$tdatacorrespondencias1["F.Ejecutoria"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "F.Ejecutoria";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Obligacion";

	
	
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


	$tdatacorrespondencias1["Obligacion"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Costas";

	
	
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


	$tdatacorrespondencias1["Costas"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Costas";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Intereses";

	
	
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


	$tdatacorrespondencias1["Intereses"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Intereses";
//	F.Acuerdo Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "F.Acuerdo Pago";
	$fdata["GoodName"] = "F_Acuerdo_Pago";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","F_Acuerdo_Pago");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Acuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Acuerdo";

	
	
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


	$tdatacorrespondencias1["F.Acuerdo Pago"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "F.Acuerdo Pago";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.Estados";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E.Estado";

	
	
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


	$tdatacorrespondencias1["Estado"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Estado";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Correspondencias1","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.Abogado";

	
	
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


	$tdatacorrespondencias1["Abogado"] = $fdata;
		$tdatacorrespondencias1[".searchableFields"][] = "Abogado";


$tables_data["dbo.Correspondencias1"]=&$tdatacorrespondencias1;
$field_labels["dbo_Correspondencias1"] = &$fieldLabelscorrespondencias1;
$fieldToolTips["dbo_Correspondencias1"] = &$fieldToolTipscorrespondencias1;
$placeHolders["dbo_Correspondencias1"] = &$placeHolderscorrespondencias1;
$page_titles["dbo_Correspondencias1"] = &$pageTitlescorrespondencias1;


changeTextControlsToDate( "dbo.Correspondencias1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Correspondencias1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Correspondencias1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_correspondencias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "P.NumeroMinjusticia AS [N.Minjusticia],  S.Sancionado AS Deudor,  ' ' AS Solidario,  TD.TipoDocumento AS [T.Documento],  S.Documento AS Documento,  C.Concepto AS Concepto,  P.Numero AS [N.Proceso],  P.Origen AS [No.Radicado Origen],  SE.Seccional AS Competencia,  P.Fecha AS [F.Creación],  P.Providencia AS [F.Providencia],  P.Ejecutoria AS [F.Ejecutoria],  P.Obligacion AS Obligacion,  P.Costas AS Costas,  P.Intereses AS Intereses,  P.Acuerdo AS [F.Acuerdo Pago],  E.Estado AS Estado,  A.Abogado AS Abogado";
$proto0["m_strFrom"] = "FROM dbo.Procesos AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId  INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId  INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId  INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId  INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId  INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$proto0["m_strWhere"] = "(P.SeccionalId = 2) AND (P.CarteraTipoId IN (1)) AND (P.EstadoId <>6)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(P.SeccionalId = 2) AND (P.CarteraTipoId IN (1)) AND (P.EstadoId <>6)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(P.SeccionalId = 2) AND (P.CarteraTipoId IN (1)) AND (P.EstadoId <>6)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "P.SeccionalId = 2";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 2";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "P.CarteraTipoId IN (1)";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IN (1)";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "P.EstadoId <>6";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "<>6";
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
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroMinjusticia",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto12["m_sql"] = "P.NumeroMinjusticia";
$proto12["m_srcTableName"] = "dbo.Correspondencias1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "N.Minjusticia";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto14["m_sql"] = "S.Sancionado";
$proto14["m_srcTableName"] = "dbo.Correspondencias1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Deudor";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto16["m_sql"] = "' '";
$proto16["m_srcTableName"] = "dbo.Correspondencias1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Solidario";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumento",
	"m_strTable" => "TD",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto18["m_sql"] = "TD.TipoDocumento";
$proto18["m_srcTableName"] = "dbo.Correspondencias1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "T.Documento";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto20["m_sql"] = "S.Documento";
$proto20["m_srcTableName"] = "dbo.Correspondencias1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Documento";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto22["m_sql"] = "C.Concepto";
$proto22["m_srcTableName"] = "dbo.Correspondencias1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Concepto";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto24["m_sql"] = "P.Numero";
$proto24["m_srcTableName"] = "dbo.Correspondencias1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "N.Proceso";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto26["m_sql"] = "P.Origen";
$proto26["m_srcTableName"] = "dbo.Correspondencias1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "No.Radicado Origen";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "SE",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto28["m_sql"] = "SE.Seccional";
$proto28["m_srcTableName"] = "dbo.Correspondencias1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Competencia";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto30["m_sql"] = "P.Fecha";
$proto30["m_srcTableName"] = "dbo.Correspondencias1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "F.Creación";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto32["m_sql"] = "P.Providencia";
$proto32["m_srcTableName"] = "dbo.Correspondencias1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "F.Providencia";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto34["m_sql"] = "P.Ejecutoria";
$proto34["m_srcTableName"] = "dbo.Correspondencias1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "F.Ejecutoria";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto36["m_sql"] = "P.Obligacion";
$proto36["m_srcTableName"] = "dbo.Correspondencias1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "Obligacion";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto38["m_sql"] = "P.Costas";
$proto38["m_srcTableName"] = "dbo.Correspondencias1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "Costas";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto40["m_sql"] = "P.Intereses";
$proto40["m_srcTableName"] = "dbo.Correspondencias1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Intereses";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto42["m_sql"] = "P.Acuerdo";
$proto42["m_srcTableName"] = "dbo.Correspondencias1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "F.Acuerdo Pago";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "E",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto44["m_sql"] = "E.Estado";
$proto44["m_srcTableName"] = "dbo.Correspondencias1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "Estado";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto46["m_sql"] = "A.Abogado";
$proto46["m_srcTableName"] = "dbo.Correspondencias1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "Abogado";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "dbo.Procesos";
$proto49["m_srcTableName"] = "dbo.Correspondencias1";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ProcesoId";
$proto49["m_columns"][] = "SeccionalId";
$proto49["m_columns"][] = "AbogadoId";
$proto49["m_columns"][] = "Fecha";
$proto49["m_columns"][] = "Numero";
$proto49["m_columns"][] = "DespachoId";
$proto49["m_columns"][] = "SancionadoId";
$proto49["m_columns"][] = "Providencia";
$proto49["m_columns"][] = "Ejecutoria";
$proto49["m_columns"][] = "ConceptoId";
$proto49["m_columns"][] = "EstadoId";
$proto49["m_columns"][] = "EtapaId";
$proto49["m_columns"][] = "Folios";
$proto49["m_columns"][] = "Tipo";
$proto49["m_columns"][] = "Cantidad";
$proto49["m_columns"][] = "Obligacion";
$proto49["m_columns"][] = "Costas";
$proto49["m_columns"][] = "Liquidacion";
$proto49["m_columns"][] = "Dias";
$proto49["m_columns"][] = "Intereses";
$proto49["m_columns"][] = "Recaudo";
$proto49["m_columns"][] = "CalificacionId";
$proto49["m_columns"][] = "Terminacion";
$proto49["m_columns"][] = "MotivoId";
$proto49["m_columns"][] = "Observaciones";
$proto49["m_columns"][] = "Cuotas";
$proto49["m_columns"][] = "Abono";
$proto49["m_columns"][] = "Inicio";
$proto49["m_columns"][] = "VlrCuota";
$proto49["m_columns"][] = "VlrIntereses";
$proto49["m_columns"][] = "Garantia";
$proto49["m_columns"][] = "Radicado";
$proto49["m_columns"][] = "Remisorio";
$proto49["m_columns"][] = "Acuerdo";
$proto49["m_columns"][] = "Incumplimiento";
$proto49["m_columns"][] = "Notificacion";
$proto49["m_columns"][] = "Suspension";
$proto49["m_columns"][] = "Traslado";
$proto49["m_columns"][] = "Error";
$proto49["m_columns"][] = "CarteraTipoId";
$proto49["m_columns"][] = "ConceptoAbogado";
$proto49["m_columns"][] = "Origen";
$proto49["m_columns"][] = "Carpeta";
$proto49["m_columns"][] = "ImportacionId";
$proto49["m_columns"][] = "ActuacionId";
$proto49["m_columns"][] = "ObligacionInicial";
$proto49["m_columns"][] = "CostasInicial";
$proto49["m_columns"][] = "InteresesInicial";
$proto49["m_columns"][] = "MinJusticia";
$proto49["m_columns"][] = "Revocatoria";
$proto49["m_columns"][] = "Mayor";
$proto49["m_columns"][] = "NotificacionValidada";
$proto49["m_columns"][] = "Validado";
$proto49["m_columns"][] = "Seleccionado";
$proto49["m_columns"][] = "CompetenciaId";
$proto49["m_columns"][] = "MinjusticiaId";
$proto49["m_columns"][] = "SeleccionadoPor";
$proto49["m_columns"][] = "Subsanar";
$proto49["m_columns"][] = "NumeroMinjusticia";
$proto49["m_columns"][] = "ProcesoIdOrigen";
$proto49["m_columns"][] = "SeleccionadoFecha";
$proto49["m_columns"][] = "InteresesIniciales";
$proto49["m_columns"][] = "InteresesCalculados";
$proto49["m_columns"][] = "ProcesoIdDestino";
$proto49["m_columns"][] = "RecaudoMinjusticia";
$proto49["m_columns"][] = "RecaudoTerminado";
$proto49["m_columns"][] = "Persuasivo";
$proto49["m_columns"][] = "ObligacionCreacion";
$proto49["m_columns"][] = "InteresesCreacion";
$proto49["m_columns"][] = "CostasCreacion";
$proto49["m_columns"][] = "Plazo";
$proto49["m_columns"][] = "NaturalezaId";
$proto49["m_columns"][] = "TrasladoCartera";
$proto49["m_columns"][] = "CarteraTipoIdOrigen";
$proto49["m_columns"][] = "TrasladoConcepto";
$proto49["m_columns"][] = "ConceptoIdOrigen";
$proto49["m_columns"][] = "AutorizadoPlazo";
$proto49["m_columns"][] = "AutorizadoFecha";
$proto49["m_columns"][] = "AutorizadoPor";
$proto49["m_columns"][] = "Reliquidacion";
$proto49["m_columns"][] = "ChequeoId";
$proto49["m_columns"][] = "VlrCostas";
$proto49["m_columns"][] = "VlrInteresesPlazo";
$proto49["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "dbo.Procesos AS P";
$proto48["m_alias"] = "P";
$proto48["m_srcTableName"] = "dbo.Correspondencias1";
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

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Sancionados";
$proto53["m_srcTableName"] = "dbo.Correspondencias1";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "SancionadoId";
$proto53["m_columns"][] = "Sancionado";
$proto53["m_columns"][] = "TipoDocumentoId";
$proto53["m_columns"][] = "Documento";
$proto53["m_columns"][] = "Email";
$proto53["m_columns"][] = "Celular";
$proto53["m_columns"][] = "Masculino";
$proto53["m_columns"][] = "Observaciones";
$proto53["m_columns"][] = "Fallecimiento";
$proto53["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId";
$proto52["m_alias"] = "S";
$proto52["m_srcTableName"] = "dbo.Correspondencias1";
$proto54=array();
$proto54["m_sql"] = "S.SancionadoId = P.SancionadoId";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= P.SancionadoId";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "dbo.TiposDocumentos";
$proto57["m_srcTableName"] = "dbo.Correspondencias1";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "TipoDocumentoId";
$proto57["m_columns"][] = "Codigo";
$proto57["m_columns"][] = "TipoDocumento";
$proto57["m_columns"][] = "Juridica";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN dbo.TiposDocumentos AS TD ON S.TipoDocumentoId = TD.TipoDocumentoId";
$proto56["m_alias"] = "TD";
$proto56["m_srcTableName"] = "dbo.Correspondencias1";
$proto58=array();
$proto58["m_sql"] = "TD.TipoDocumentoId = S.TipoDocumentoId";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "TD",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= S.TipoDocumentoId";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "dbo.Conceptos";
$proto61["m_srcTableName"] = "dbo.Correspondencias1";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "ConceptoId";
$proto61["m_columns"][] = "Concepto";
$proto61["m_columns"][] = "Activo";
$proto61["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN dbo.Conceptos AS C ON P.ConceptoId = C.ConceptoId";
$proto60["m_alias"] = "C";
$proto60["m_srcTableName"] = "dbo.Correspondencias1";
$proto62=array();
$proto62["m_sql"] = "C.ConceptoId = P.ConceptoId";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= P.ConceptoId";
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
$proto65["m_strName"] = "dbo.Estados";
$proto65["m_srcTableName"] = "dbo.Correspondencias1";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "EstadoId";
$proto65["m_columns"][] = "Estado";
$proto65["m_columns"][] = "Tipo";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN dbo.Estados AS E ON P.EstadoId = E.EstadoId";
$proto64["m_alias"] = "E";
$proto64["m_srcTableName"] = "dbo.Correspondencias1";
$proto66=array();
$proto66["m_sql"] = "E.EstadoId = P.EstadoId";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "E",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= P.EstadoId";
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
$proto69["m_strName"] = "dbo.Abogados";
$proto69["m_srcTableName"] = "dbo.Correspondencias1";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "AbogadoId";
$proto69["m_columns"][] = "Abogado";
$proto69["m_columns"][] = "Documento";
$proto69["m_columns"][] = "Tarjeta";
$proto69["m_columns"][] = "Direccion";
$proto69["m_columns"][] = "Telefonos";
$proto69["m_columns"][] = "Celular";
$proto69["m_columns"][] = "Email";
$proto69["m_columns"][] = "SeccionalId";
$proto69["m_columns"][] = "Masculino";
$proto69["m_columns"][] = "Activo";
$proto69["m_columns"][] = "Despacho";
$proto69["m_columns"][] = "Codificador";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN dbo.Abogados AS A ON P.AbogadoId = A.AbogadoId";
$proto68["m_alias"] = "A";
$proto68["m_srcTableName"] = "dbo.Correspondencias1";
$proto70=array();
$proto70["m_sql"] = "A.AbogadoId = P.AbogadoId";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "A",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= P.AbogadoId";
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
$proto73["m_strName"] = "dbo.Seccionales";
$proto73["m_srcTableName"] = "dbo.Correspondencias1";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "SeccionalId";
$proto73["m_columns"][] = "Codigo";
$proto73["m_columns"][] = "Seccional";
$proto73["m_columns"][] = "NIT";
$proto73["m_columns"][] = "CiudadId";
$proto73["m_columns"][] = "PiePagina";
$proto73["m_columns"][] = "Sigobius";
$proto73["m_columns"][] = "Email";
$proto73["m_columns"][] = "Direccion";
$proto73["m_columns"][] = "Telefonos";
$proto73["m_columns"][] = "PCI";
$proto73["m_columns"][] = "Contador";
$proto73["m_columns"][] = "ContadorCargo";
$proto73["m_columns"][] = "Director";
$proto73["m_columns"][] = "DirectorCargo";
$proto73["m_columns"][] = "Abogado";
$proto73["m_columns"][] = "AbogadoCargo";
$proto73["m_columns"][] = "Formato";
$proto73["m_columns"][] = "Corporacion";
$proto73["m_columns"][] = "Unidad";
$proto73["m_columns"][] = "Oficina";
$proto73["m_columns"][] = "Serie";
$proto73["m_columns"][] = "Subserie";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN dbo.Seccionales AS SE ON P.SeccionalId = SE.SeccionalId";
$proto72["m_alias"] = "SE";
$proto72["m_srcTableName"] = "dbo.Correspondencias1";
$proto74=array();
$proto74["m_sql"] = "SE.SeccionalId = P.SeccionalId";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "SE",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= P.SeccionalId";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_INNERJOIN";
			$proto77=array();
$proto77["m_strName"] = "dbo.CarteraTipos";
$proto77["m_srcTableName"] = "dbo.Correspondencias1";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "CarteraTipoId";
$proto77["m_columns"][] = "CarteraTipo";
$proto77["m_columns"][] = "Color";
$proto77["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "INNER JOIN dbo.CarteraTipos AS CA ON P.CarteraTipoId = CA.CarteraTipoId";
$proto76["m_alias"] = "CA";
$proto76["m_srcTableName"] = "dbo.Correspondencias1";
$proto78=array();
$proto78["m_sql"] = "CA.CarteraTipoId = P.CarteraTipoId";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "CA",
	"m_srcTableName" => "dbo.Correspondencias1"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= P.CarteraTipoId";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Correspondencias1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_correspondencias1 = createSqlQuery_correspondencias1();


	
		;

																		

$tdatacorrespondencias1[".sqlquery"] = $queryData_correspondencias1;



$tdatacorrespondencias1[".hasEvents"] = false;

?>