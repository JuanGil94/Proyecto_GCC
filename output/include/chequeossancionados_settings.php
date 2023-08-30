<?php
$tdatachequeossancionados = array();
$tdatachequeossancionados[".searchableFields"] = array();
$tdatachequeossancionados[".ShortName"] = "chequeossancionados";
$tdatachequeossancionados[".OwnerID"] = "";
$tdatachequeossancionados[".OriginalTable"] = "dbo.ChequeosSancionados";


$tdatachequeossancionados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatachequeossancionados[".originalPagesByType"] = $tdatachequeossancionados[".pagesByType"];
$tdatachequeossancionados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatachequeossancionados[".originalPages"] = $tdatachequeossancionados[".pages"];
$tdatachequeossancionados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatachequeossancionados[".originalDefaultPages"] = $tdatachequeossancionados[".defaultPages"];

//	field labels
$fieldLabelschequeossancionados = array();
$fieldToolTipschequeossancionados = array();
$pageTitleschequeossancionados = array();
$placeHolderschequeossancionados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelschequeossancionados["Spanish"] = array();
	$fieldToolTipschequeossancionados["Spanish"] = array();
	$placeHolderschequeossancionados["Spanish"] = array();
	$pageTitleschequeossancionados["Spanish"] = array();
	$fieldLabelschequeossancionados["Spanish"]["ChequeoSancionadoId"] = "Chequeo Sancionado Id";
	$fieldToolTipschequeossancionados["Spanish"]["ChequeoSancionadoId"] = "";
	$placeHolderschequeossancionados["Spanish"]["ChequeoSancionadoId"] = "";
	$fieldLabelschequeossancionados["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipschequeossancionados["Spanish"]["ChequeoId"] = "";
	$placeHolderschequeossancionados["Spanish"]["ChequeoId"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipschequeossancionados["Spanish"]["Sancionado"] = "";
	$placeHolderschequeossancionados["Spanish"]["Sancionado"] = "";
	$fieldLabelschequeossancionados["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipschequeossancionados["Spanish"]["TipoDocumentoId"] = "";
	$placeHolderschequeossancionados["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Documento"] = "Documento";
	$fieldToolTipschequeossancionados["Spanish"]["Documento"] = "";
	$placeHolderschequeossancionados["Spanish"]["Documento"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipschequeossancionados["Spanish"]["Direccion"] = "";
	$placeHolderschequeossancionados["Spanish"]["Direccion"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipschequeossancionados["Spanish"]["Telefono"] = "";
	$placeHolderschequeossancionados["Spanish"]["Telefono"] = "";
	$fieldLabelschequeossancionados["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipschequeossancionados["Spanish"]["CiudadId"] = "";
	$placeHolderschequeossancionados["Spanish"]["CiudadId"] = "";
	$fieldLabelschequeossancionados["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipschequeossancionados["Spanish"]["CarcelId"] = "";
	$placeHolderschequeossancionados["Spanish"]["CarcelId"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Email"] = "Email";
	$fieldToolTipschequeossancionados["Spanish"]["Email"] = "";
	$placeHolderschequeossancionados["Spanish"]["Email"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipschequeossancionados["Spanish"]["Masculino"] = "";
	$placeHolderschequeossancionados["Spanish"]["Masculino"] = "";
	$fieldLabelschequeossancionados["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipschequeossancionados["Spanish"]["Observaciones"] = "";
	$placeHolderschequeossancionados["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipschequeossancionados["Spanish"]))
		$tdatachequeossancionados[".isUseToolTips"] = true;
}


	$tdatachequeossancionados[".NCSearch"] = true;



$tdatachequeossancionados[".shortTableName"] = "chequeossancionados";
$tdatachequeossancionados[".nSecOptions"] = 0;

$tdatachequeossancionados[".mainTableOwnerID"] = "";
$tdatachequeossancionados[".entityType"] = 0;
$tdatachequeossancionados[".connId"] = "GCC_at_S00001_CCAD01";


$tdatachequeossancionados[".strOriginalTableName"] = "dbo.ChequeosSancionados";

	



$tdatachequeossancionados[".showAddInPopup"] = false;

$tdatachequeossancionados[".showEditInPopup"] = false;

$tdatachequeossancionados[".showViewInPopup"] = false;

$tdatachequeossancionados[".listAjax"] = false;
//	temporary
//$tdatachequeossancionados[".listAjax"] = false;

	$tdatachequeossancionados[".audit"] = true;

	$tdatachequeossancionados[".locking"] = false;


$pages = $tdatachequeossancionados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachequeossancionados[".edit"] = true;
	$tdatachequeossancionados[".afterEditAction"] = 1;
	$tdatachequeossancionados[".closePopupAfterEdit"] = 1;
	$tdatachequeossancionados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachequeossancionados[".add"] = true;
$tdatachequeossancionados[".afterAddAction"] = 1;
$tdatachequeossancionados[".closePopupAfterAdd"] = 1;
$tdatachequeossancionados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachequeossancionados[".list"] = true;
}



$tdatachequeossancionados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachequeossancionados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachequeossancionados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachequeossancionados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachequeossancionados[".printFriendly"] = true;
}



$tdatachequeossancionados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachequeossancionados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachequeossancionados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachequeossancionados[".isUseAjaxSuggest"] = true;



																																				

$tdatachequeossancionados[".ajaxCodeSnippetAdded"] = false;

$tdatachequeossancionados[".buttonsAdded"] = false;

$tdatachequeossancionados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachequeossancionados[".isUseTimeForSearch"] = false;


$tdatachequeossancionados[".badgeColor"] = "7b68ee";


$tdatachequeossancionados[".allSearchFields"] = array();
$tdatachequeossancionados[".filterFields"] = array();
$tdatachequeossancionados[".requiredSearchFields"] = array();

$tdatachequeossancionados[".googleLikeFields"] = array();
$tdatachequeossancionados[".googleLikeFields"][] = "ChequeoSancionadoId";
$tdatachequeossancionados[".googleLikeFields"][] = "ChequeoId";
$tdatachequeossancionados[".googleLikeFields"][] = "Sancionado";
$tdatachequeossancionados[".googleLikeFields"][] = "TipoDocumentoId";
$tdatachequeossancionados[".googleLikeFields"][] = "Documento";
$tdatachequeossancionados[".googleLikeFields"][] = "Direccion";
$tdatachequeossancionados[".googleLikeFields"][] = "Telefono";
$tdatachequeossancionados[".googleLikeFields"][] = "CiudadId";
$tdatachequeossancionados[".googleLikeFields"][] = "CarcelId";
$tdatachequeossancionados[".googleLikeFields"][] = "Email";
$tdatachequeossancionados[".googleLikeFields"][] = "Masculino";
$tdatachequeossancionados[".googleLikeFields"][] = "Observaciones";



$tdatachequeossancionados[".tableType"] = "list";

$tdatachequeossancionados[".printerPageOrientation"] = 0;
$tdatachequeossancionados[".nPrinterPageScale"] = 100;

$tdatachequeossancionados[".nPrinterSplitRecords"] = 40;

$tdatachequeossancionados[".geocodingEnabled"] = false;










$tdatachequeossancionados[".pageSize"] = 20;

$tdatachequeossancionados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachequeossancionados[".strOrderBy"] = $tstrOrderBy;

$tdatachequeossancionados[".orderindexes"] = array();


$tdatachequeossancionados[".sqlHead"] = "SELECT ChequeoSancionadoId,  	ChequeoId,  	Sancionado,  	TipoDocumentoId,  	Documento,  	Direccion,  	Telefono,  	CiudadId,  	CarcelId,  	Email,  	Masculino,  	Observaciones";
$tdatachequeossancionados[".sqlFrom"] = "FROM dbo.ChequeosSancionados";
$tdatachequeossancionados[".sqlWhereExpr"] = "";
$tdatachequeossancionados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachequeossancionados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachequeossancionados[".arrGroupsPerPage"] = $arrGPP;

$tdatachequeossancionados[".highlightSearchResults"] = true;

$tableKeyschequeossancionados = array();
$tableKeyschequeossancionados[] = "ChequeoSancionadoId";
$tdatachequeossancionados[".Keys"] = $tableKeyschequeossancionados;


$tdatachequeossancionados[".hideMobileList"] = array();




//	ChequeoSancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ChequeoSancionadoId";
	$fdata["GoodName"] = "ChequeoSancionadoId";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","ChequeoSancionadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ChequeoSancionadoId";

		$fdata["sourceSingle"] = "ChequeoSancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeoSancionadoId";

	
	
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


	$tdatachequeossancionados["ChequeoSancionadoId"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "ChequeoSancionadoId";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","ChequeoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeoId";

	
	
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


	$tdatachequeossancionados["ChequeoId"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "ChequeoId";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

		$fdata["sourceSingle"] = "Sancionado";

		$fdata["isSQLExpression"] = true;
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


	$tdatachequeossancionados["Sancionado"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Sancionado";
//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","TipoDocumentoId");
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
	$edata["DisplayField"] = "TipoDocumento";

	

	
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


	$tdatachequeossancionados["TipoDocumentoId"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "TipoDocumentoId";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Documento");
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatachequeossancionados["Documento"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Documento";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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


	$tdatachequeossancionados["Direccion"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Direccion";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefono";

		$fdata["sourceSingle"] = "Telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";

	
	
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


	$tdatachequeossancionados["Telefono"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Telefono";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","CiudadId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CiudadId";

	
	
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
	$edata["LookupTable"] = "dbo.Ciudades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CiudadId";
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


	$tdatachequeossancionados["CiudadId"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "CiudadId";
//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","CarcelId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarcelId";

		$fdata["sourceSingle"] = "CarcelId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarcelId";

	
	
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
	$edata["LookupTable"] = "dbo.Carceles";
	$edata["LookupConnId"] = "GCC_at_S00001_CCAD01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarcelId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Carcel";

	

	
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


	$tdatachequeossancionados["CarcelId"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "CarcelId";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatachequeossancionados["Email"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Email";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Masculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Masculino";

		$fdata["sourceSingle"] = "Masculino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masculino";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "FEMENINO";
	$edata["LookupValues"][] = "MASCULINO";

	
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
		
		$edata["autoUpdatable"] = true;

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
		$fdata["filterTotalFields"] = "ChequeoSancionadoId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatachequeossancionados["Masculino"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Masculino";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.ChequeosSancionados";
	$fdata["Label"] = GetFieldLabel("dbo_ChequeosSancionados","Observaciones");
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


	$tdatachequeossancionados["Observaciones"] = $fdata;
		$tdatachequeossancionados[".searchableFields"][] = "Observaciones";


$tables_data["dbo.ChequeosSancionados"]=&$tdatachequeossancionados;
$field_labels["dbo_ChequeosSancionados"] = &$fieldLabelschequeossancionados;
$fieldToolTips["dbo_ChequeosSancionados"] = &$fieldToolTipschequeossancionados;
$placeHolders["dbo_ChequeosSancionados"] = &$placeHolderschequeossancionados;
$page_titles["dbo_ChequeosSancionados"] = &$pageTitleschequeossancionados;


changeTextControlsToDate( "dbo.ChequeosSancionados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ChequeosSancionados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ChequeosSancionados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosSancionados"][0] = $masterParams;
				$masterTablesData["dbo.ChequeosSancionados"][0]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosSancionados"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.ChequeosSancionados"][0]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosSancionados"][0]["detailKeys"][]="CiudadId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Chequeos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Chequeos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "chequeos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.ChequeosSancionados"][1] = $masterParams;
				$masterTablesData["dbo.ChequeosSancionados"][1]["masterKeys"] = array();
	$masterTablesData["dbo.ChequeosSancionados"][1]["masterKeys"][]="ChequeoId";
				$masterTablesData["dbo.ChequeosSancionados"][1]["detailKeys"] = array();
	$masterTablesData["dbo.ChequeosSancionados"][1]["detailKeys"][]="ChequeoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chequeossancionados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ChequeoSancionadoId,  	ChequeoId,  	Sancionado,  	TipoDocumentoId,  	Documento,  	Direccion,  	Telefono,  	CiudadId,  	CarcelId,  	Email,  	Masculino,  	Observaciones";
$proto0["m_strFrom"] = "FROM dbo.ChequeosSancionados";
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
	"m_strName" => "ChequeoSancionadoId",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto6["m_sql"] = "ChequeoSancionadoId";
$proto6["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto8["m_sql"] = "ChequeoId";
$proto8["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto10["m_sql"] = "Sancionado";
$proto10["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto12["m_sql"] = "TipoDocumentoId";
$proto12["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto14["m_sql"] = "Documento";
$proto14["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto16["m_sql"] = "Direccion";
$proto16["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto18["m_sql"] = "Telefono";
$proto18["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto20["m_sql"] = "CiudadId";
$proto20["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CarcelId",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto22["m_sql"] = "CarcelId";
$proto22["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto24["m_sql"] = "Email";
$proto24["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Masculino",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto26["m_sql"] = "Masculino";
$proto26["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.ChequeosSancionados",
	"m_srcTableName" => "dbo.ChequeosSancionados"
));

$proto28["m_sql"] = "Observaciones";
$proto28["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.ChequeosSancionados";
$proto31["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ChequeoSancionadoId";
$proto31["m_columns"][] = "ChequeoId";
$proto31["m_columns"][] = "Sancionado";
$proto31["m_columns"][] = "TipoDocumentoId";
$proto31["m_columns"][] = "Documento";
$proto31["m_columns"][] = "Direccion";
$proto31["m_columns"][] = "Telefono";
$proto31["m_columns"][] = "CiudadId";
$proto31["m_columns"][] = "CarcelId";
$proto31["m_columns"][] = "Email";
$proto31["m_columns"][] = "Masculino";
$proto31["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.ChequeosSancionados";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.ChequeosSancionados";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ChequeosSancionados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chequeossancionados = createSqlQuery_chequeossancionados();


	
		;

												

$tdatachequeossancionados[".sqlquery"] = $queryData_chequeossancionados;



$tdatachequeossancionados[".hasEvents"] = false;

?>