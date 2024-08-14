<?php
$tdatamedidas = array();
$tdatamedidas[".searchableFields"] = array();
$tdatamedidas[".ShortName"] = "medidas";
$tdatamedidas[".OwnerID"] = "";
$tdatamedidas[".OriginalTable"] = "dbo.Medidas";


$tdatamedidas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamedidas[".originalPagesByType"] = $tdatamedidas[".pagesByType"];
$tdatamedidas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamedidas[".originalPages"] = $tdatamedidas[".pages"];
$tdatamedidas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamedidas[".originalDefaultPages"] = $tdatamedidas[".defaultPages"];

//	field labels
$fieldLabelsmedidas = array();
$fieldToolTipsmedidas = array();
$pageTitlesmedidas = array();
$placeHoldersmedidas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmedidas["Spanish"] = array();
	$fieldToolTipsmedidas["Spanish"] = array();
	$placeHoldersmedidas["Spanish"] = array();
	$pageTitlesmedidas["Spanish"] = array();
	$fieldLabelsmedidas["Spanish"]["MedidaId"] = "Medida Id";
	$fieldToolTipsmedidas["Spanish"]["MedidaId"] = "";
	$placeHoldersmedidas["Spanish"]["MedidaId"] = "";
	$fieldLabelsmedidas["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsmedidas["Spanish"]["ProcesoId"] = "";
	$placeHoldersmedidas["Spanish"]["ProcesoId"] = "";
	$fieldLabelsmedidas["Spanish"]["PropiedadId"] = "Propiedad";
	$fieldToolTipsmedidas["Spanish"]["PropiedadId"] = "";
	$placeHoldersmedidas["Spanish"]["PropiedadId"] = "";
	$fieldLabelsmedidas["Spanish"]["EmbargoFecha"] = "F, Embargo";
	$fieldToolTipsmedidas["Spanish"]["EmbargoFecha"] = "";
	$placeHoldersmedidas["Spanish"]["EmbargoFecha"] = "";
	$fieldLabelsmedidas["Spanish"]["EmbargoResolucion"] = "Res. Embargo";
	$fieldToolTipsmedidas["Spanish"]["EmbargoResolucion"] = "";
	$placeHoldersmedidas["Spanish"]["EmbargoResolucion"] = "";
	$fieldLabelsmedidas["Spanish"]["Secuestre"] = "Secuestre";
	$fieldToolTipsmedidas["Spanish"]["Secuestre"] = "";
	$placeHoldersmedidas["Spanish"]["Secuestre"] = "";
	$fieldLabelsmedidas["Spanish"]["SecuestreDocumento"] = "No. Documento";
	$fieldToolTipsmedidas["Spanish"]["SecuestreDocumento"] = "";
	$placeHoldersmedidas["Spanish"]["SecuestreDocumento"] = "";
	$fieldLabelsmedidas["Spanish"]["SecuestreDireccion"] = "Dir. Secuestre ";
	$fieldToolTipsmedidas["Spanish"]["SecuestreDireccion"] = "";
	$placeHoldersmedidas["Spanish"]["SecuestreDireccion"] = "";
	$fieldLabelsmedidas["Spanish"]["SecuestreTelefono"] = "Tel. Secuestre ";
	$fieldToolTipsmedidas["Spanish"]["SecuestreTelefono"] = "";
	$placeHoldersmedidas["Spanish"]["SecuestreTelefono"] = "";
	$fieldLabelsmedidas["Spanish"]["RemateFecha"] = "F. Remate ";
	$fieldToolTipsmedidas["Spanish"]["RemateFecha"] = "";
	$placeHoldersmedidas["Spanish"]["RemateFecha"] = "";
	$fieldLabelsmedidas["Spanish"]["RemateResolucion"] = "Res. Remate";
	$fieldToolTipsmedidas["Spanish"]["RemateResolucion"] = "";
	$placeHoldersmedidas["Spanish"]["RemateResolucion"] = "";
	$fieldLabelsmedidas["Spanish"]["Valor"] = "Valor";
	$fieldToolTipsmedidas["Spanish"]["Valor"] = "";
	$placeHoldersmedidas["Spanish"]["Valor"] = "";
	$fieldLabelsmedidas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsmedidas["Spanish"]["Observaciones"] = "";
	$placeHoldersmedidas["Spanish"]["Observaciones"] = "";
	$fieldLabelsmedidas["Spanish"]["Secuestrado"] = "Secuestrado";
	$fieldToolTipsmedidas["Spanish"]["Secuestrado"] = "";
	$placeHoldersmedidas["Spanish"]["Secuestrado"] = "";
	$fieldLabelsmedidas["Spanish"]["SecuestroFecha"] = "F. Secuestro";
	$fieldToolTipsmedidas["Spanish"]["SecuestroFecha"] = "";
	$placeHoldersmedidas["Spanish"]["SecuestroFecha"] = "";
	$fieldLabelsmedidas["Spanish"]["Comision"] = "Comision";
	$fieldToolTipsmedidas["Spanish"]["Comision"] = "";
	$placeHoldersmedidas["Spanish"]["Comision"] = "";
	$fieldLabelsmedidas["Spanish"]["RemateAviso"] = "Aviso Remate ";
	$fieldToolTipsmedidas["Spanish"]["RemateAviso"] = "";
	$placeHoldersmedidas["Spanish"]["RemateAviso"] = "";
	$fieldLabelsmedidas["Spanish"]["Aprobacion"] = "Aprobacion";
	$fieldToolTipsmedidas["Spanish"]["Aprobacion"] = "";
	$placeHoldersmedidas["Spanish"]["Aprobacion"] = "";
	$fieldLabelsmedidas["Spanish"]["Entrega"] = "Dilig. Entrega";
	$fieldToolTipsmedidas["Spanish"]["Entrega"] = "";
	$placeHoldersmedidas["Spanish"]["Entrega"] = "";
	$pageTitlesmedidas["Spanish"]["list"] = "Medidas Cautelares";
	if (count($fieldToolTipsmedidas["Spanish"]))
		$tdatamedidas[".isUseToolTips"] = true;
}


	$tdatamedidas[".NCSearch"] = true;



$tdatamedidas[".shortTableName"] = "medidas";
$tdatamedidas[".nSecOptions"] = 0;

$tdatamedidas[".mainTableOwnerID"] = "";
$tdatamedidas[".entityType"] = 0;
$tdatamedidas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamedidas[".strOriginalTableName"] = "dbo.Medidas";

	



$tdatamedidas[".showAddInPopup"] = false;

$tdatamedidas[".showEditInPopup"] = false;

$tdatamedidas[".showViewInPopup"] = false;

$tdatamedidas[".listAjax"] = false;
//	temporary
//$tdatamedidas[".listAjax"] = false;

	$tdatamedidas[".audit"] = true;

	$tdatamedidas[".locking"] = false;


$pages = $tdatamedidas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamedidas[".edit"] = true;
	$tdatamedidas[".afterEditAction"] = 1;
	$tdatamedidas[".closePopupAfterEdit"] = 1;
	$tdatamedidas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamedidas[".add"] = true;
$tdatamedidas[".afterAddAction"] = 1;
$tdatamedidas[".closePopupAfterAdd"] = 1;
$tdatamedidas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamedidas[".list"] = true;
}



$tdatamedidas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamedidas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamedidas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamedidas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamedidas[".printFriendly"] = true;
}



$tdatamedidas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamedidas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamedidas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamedidas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																									

$tdatamedidas[".ajaxCodeSnippetAdded"] = false;

$tdatamedidas[".buttonsAdded"] = false;

$tdatamedidas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedidas[".isUseTimeForSearch"] = false;


$tdatamedidas[".badgeColor"] = "e07878";


$tdatamedidas[".allSearchFields"] = array();
$tdatamedidas[".filterFields"] = array();
$tdatamedidas[".requiredSearchFields"] = array();

$tdatamedidas[".googleLikeFields"] = array();
$tdatamedidas[".googleLikeFields"][] = "MedidaId";
$tdatamedidas[".googleLikeFields"][] = "ProcesoId";
$tdatamedidas[".googleLikeFields"][] = "PropiedadId";
$tdatamedidas[".googleLikeFields"][] = "EmbargoFecha";
$tdatamedidas[".googleLikeFields"][] = "EmbargoResolucion";
$tdatamedidas[".googleLikeFields"][] = "Secuestre";
$tdatamedidas[".googleLikeFields"][] = "SecuestreDocumento";
$tdatamedidas[".googleLikeFields"][] = "SecuestreDireccion";
$tdatamedidas[".googleLikeFields"][] = "SecuestreTelefono";
$tdatamedidas[".googleLikeFields"][] = "RemateFecha";
$tdatamedidas[".googleLikeFields"][] = "RemateResolucion";
$tdatamedidas[".googleLikeFields"][] = "Valor";
$tdatamedidas[".googleLikeFields"][] = "Observaciones";
$tdatamedidas[".googleLikeFields"][] = "Secuestrado";
$tdatamedidas[".googleLikeFields"][] = "SecuestroFecha";
$tdatamedidas[".googleLikeFields"][] = "Comision";
$tdatamedidas[".googleLikeFields"][] = "RemateAviso";
$tdatamedidas[".googleLikeFields"][] = "Aprobacion";
$tdatamedidas[".googleLikeFields"][] = "Entrega";



$tdatamedidas[".tableType"] = "list";

$tdatamedidas[".printerPageOrientation"] = 0;
$tdatamedidas[".nPrinterPageScale"] = 100;

$tdatamedidas[".nPrinterSplitRecords"] = 40;

$tdatamedidas[".geocodingEnabled"] = false;





$tdatamedidas[".isResizeColumns"] = true;





$tdatamedidas[".pageSize"] = 20;

$tdatamedidas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamedidas[".strOrderBy"] = $tstrOrderBy;

$tdatamedidas[".orderindexes"] = array();


$tdatamedidas[".sqlHead"] = "SELECT MedidaId,  	ProcesoId,  	PropiedadId,  	EmbargoFecha,  	EmbargoResolucion,  	Secuestre,  	SecuestreDocumento,  	SecuestreDireccion,  	SecuestreTelefono,  	RemateFecha,  	RemateResolucion,  	Valor,  	Observaciones,  	Secuestrado,  	SecuestroFecha,  	Comision,  	RemateAviso,  	Aprobacion,  	Entrega";
$tdatamedidas[".sqlFrom"] = "FROM dbo.Medidas";
$tdatamedidas[".sqlWhereExpr"] = "";
$tdatamedidas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedidas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedidas[".arrGroupsPerPage"] = $arrGPP;

$tdatamedidas[".highlightSearchResults"] = true;

$tableKeysmedidas = array();
$tableKeysmedidas[] = "MedidaId";
$tdatamedidas[".Keys"] = $tableKeysmedidas;


$tdatamedidas[".hideMobileList"] = array();




//	MedidaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MedidaId";
	$fdata["GoodName"] = "MedidaId";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","MedidaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MedidaId";

		$fdata["sourceSingle"] = "MedidaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MedidaId";

	
	
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


	$tdatamedidas["MedidaId"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "MedidaId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","ProcesoId");
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


	$tdatamedidas["ProcesoId"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "ProcesoId";
//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","PropiedadId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PropiedadId";

		$fdata["sourceSingle"] = "PropiedadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PropiedadId";

	
	
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


	$tdatamedidas["PropiedadId"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "PropiedadId";
//	EmbargoFecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EmbargoFecha";
	$fdata["GoodName"] = "EmbargoFecha";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","EmbargoFecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "EmbargoFecha";

		$fdata["sourceSingle"] = "EmbargoFecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmbargoFecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatamedidas["EmbargoFecha"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "EmbargoFecha";
//	EmbargoResolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmbargoResolucion";
	$fdata["GoodName"] = "EmbargoResolucion";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","EmbargoResolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmbargoResolucion";

		$fdata["sourceSingle"] = "EmbargoResolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmbargoResolucion";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatamedidas["EmbargoResolucion"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "EmbargoResolucion";
//	Secuestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Secuestre";
	$fdata["GoodName"] = "Secuestre";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Secuestre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Secuestre";

		$fdata["sourceSingle"] = "Secuestre";

		$fdata["isSQLExpression"] = true;
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


	$tdatamedidas["Secuestre"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Secuestre";
//	SecuestreDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SecuestreDocumento";
	$fdata["GoodName"] = "SecuestreDocumento";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","SecuestreDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SecuestreDocumento";

		$fdata["sourceSingle"] = "SecuestreDocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecuestreDocumento";

	
	
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


	$tdatamedidas["SecuestreDocumento"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "SecuestreDocumento";
//	SecuestreDireccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SecuestreDireccion";
	$fdata["GoodName"] = "SecuestreDireccion";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","SecuestreDireccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SecuestreDireccion";

		$fdata["sourceSingle"] = "SecuestreDireccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecuestreDireccion";

	
	
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


	$tdatamedidas["SecuestreDireccion"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "SecuestreDireccion";
//	SecuestreTelefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SecuestreTelefono";
	$fdata["GoodName"] = "SecuestreTelefono";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","SecuestreTelefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SecuestreTelefono";

		$fdata["sourceSingle"] = "SecuestreTelefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecuestreTelefono";

	
	
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


	$tdatamedidas["SecuestreTelefono"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "SecuestreTelefono";
//	RemateFecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RemateFecha";
	$fdata["GoodName"] = "RemateFecha";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","RemateFecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "RemateFecha";

		$fdata["sourceSingle"] = "RemateFecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemateFecha";

	
	
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


	$tdatamedidas["RemateFecha"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "RemateFecha";
//	RemateResolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RemateResolucion";
	$fdata["GoodName"] = "RemateResolucion";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","RemateResolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RemateResolucion";

		$fdata["sourceSingle"] = "RemateResolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemateResolucion";

	
	
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


	$tdatamedidas["RemateResolucion"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "RemateResolucion";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Valor");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
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


	$tdatamedidas["Valor"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Valor";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Observaciones");
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


	$tdatamedidas["Observaciones"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Observaciones";
//	Secuestrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Secuestrado";
	$fdata["GoodName"] = "Secuestrado";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Secuestrado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Secuestrado";

		$fdata["sourceSingle"] = "Secuestrado";

		$fdata["isSQLExpression"] = true;
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


	$tdatamedidas["Secuestrado"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Secuestrado";
//	SecuestroFecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SecuestroFecha";
	$fdata["GoodName"] = "SecuestroFecha";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","SecuestroFecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "SecuestroFecha";

		$fdata["sourceSingle"] = "SecuestroFecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecuestroFecha";

	
	
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


	$tdatamedidas["SecuestroFecha"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "SecuestroFecha";
//	Comision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Comision";
	$fdata["GoodName"] = "Comision";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Comision");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Comision";

		$fdata["sourceSingle"] = "Comision";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Comision";

	
	
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


	$tdatamedidas["Comision"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Comision";
//	RemateAviso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RemateAviso";
	$fdata["GoodName"] = "RemateAviso";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","RemateAviso");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "RemateAviso";

		$fdata["sourceSingle"] = "RemateAviso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemateAviso";

	
	
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


	$tdatamedidas["RemateAviso"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "RemateAviso";
//	Aprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Aprobacion";
	$fdata["GoodName"] = "Aprobacion";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Aprobacion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aprobacion";

		$fdata["sourceSingle"] = "Aprobacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Aprobacion";

	
	
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


	$tdatamedidas["Aprobacion"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Aprobacion";
//	Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Entrega";
	$fdata["GoodName"] = "Entrega";
	$fdata["ownerTable"] = "dbo.Medidas";
	$fdata["Label"] = GetFieldLabel("dbo_Medidas","Entrega");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Entrega";

		$fdata["sourceSingle"] = "Entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Entrega";

	
	
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


	$tdatamedidas["Entrega"] = $fdata;
		$tdatamedidas[".searchableFields"][] = "Entrega";


$tables_data["dbo.Medidas"]=&$tdatamedidas;
$field_labels["dbo_Medidas"] = &$fieldLabelsmedidas;
$fieldToolTips["dbo_Medidas"] = &$fieldToolTipsmedidas;
$placeHolders["dbo_Medidas"] = &$placeHoldersmedidas;
$page_titles["dbo_Medidas"] = &$pageTitlesmedidas;


changeTextControlsToDate( "dbo.Medidas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Medidas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Medidas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Medidas"][0] = $masterParams;
				$masterTablesData["dbo.Medidas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Medidas"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Medidas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Medidas"][0]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.ProcesosReasignar";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesosreasignar";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Medidas"][1] = $masterParams;
				$masterTablesData["dbo.Medidas"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Medidas"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Medidas"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Medidas"][1]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_medidas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MedidaId,  	ProcesoId,  	PropiedadId,  	EmbargoFecha,  	EmbargoResolucion,  	Secuestre,  	SecuestreDocumento,  	SecuestreDireccion,  	SecuestreTelefono,  	RemateFecha,  	RemateResolucion,  	Valor,  	Observaciones,  	Secuestrado,  	SecuestroFecha,  	Comision,  	RemateAviso,  	Aprobacion,  	Entrega";
$proto0["m_strFrom"] = "FROM dbo.Medidas";
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
	"m_strName" => "MedidaId",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto6["m_sql"] = "MedidaId";
$proto6["m_srcTableName"] = "dbo.Medidas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Medidas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PropiedadId",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto10["m_sql"] = "PropiedadId";
$proto10["m_srcTableName"] = "dbo.Medidas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EmbargoFecha",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto12["m_sql"] = "EmbargoFecha";
$proto12["m_srcTableName"] = "dbo.Medidas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmbargoResolucion",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto14["m_sql"] = "EmbargoResolucion";
$proto14["m_srcTableName"] = "dbo.Medidas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Secuestre",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto16["m_sql"] = "Secuestre";
$proto16["m_srcTableName"] = "dbo.Medidas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SecuestreDocumento",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto18["m_sql"] = "SecuestreDocumento";
$proto18["m_srcTableName"] = "dbo.Medidas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SecuestreDireccion",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto20["m_sql"] = "SecuestreDireccion";
$proto20["m_srcTableName"] = "dbo.Medidas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SecuestreTelefono",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto22["m_sql"] = "SecuestreTelefono";
$proto22["m_srcTableName"] = "dbo.Medidas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "RemateFecha",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto24["m_sql"] = "RemateFecha";
$proto24["m_srcTableName"] = "dbo.Medidas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RemateResolucion",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto26["m_sql"] = "RemateResolucion";
$proto26["m_srcTableName"] = "dbo.Medidas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto28["m_sql"] = "Valor";
$proto28["m_srcTableName"] = "dbo.Medidas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto30["m_sql"] = "Observaciones";
$proto30["m_srcTableName"] = "dbo.Medidas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Secuestrado",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto32["m_sql"] = "Secuestrado";
$proto32["m_srcTableName"] = "dbo.Medidas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SecuestroFecha",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto34["m_sql"] = "SecuestroFecha";
$proto34["m_srcTableName"] = "dbo.Medidas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Comision",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto36["m_sql"] = "Comision";
$proto36["m_srcTableName"] = "dbo.Medidas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RemateAviso",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto38["m_sql"] = "RemateAviso";
$proto38["m_srcTableName"] = "dbo.Medidas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobacion",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto40["m_sql"] = "Aprobacion";
$proto40["m_srcTableName"] = "dbo.Medidas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Entrega",
	"m_strTable" => "dbo.Medidas",
	"m_srcTableName" => "dbo.Medidas"
));

$proto42["m_sql"] = "Entrega";
$proto42["m_srcTableName"] = "dbo.Medidas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "dbo.Medidas";
$proto45["m_srcTableName"] = "dbo.Medidas";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "MedidaId";
$proto45["m_columns"][] = "ProcesoId";
$proto45["m_columns"][] = "PropiedadId";
$proto45["m_columns"][] = "EmbargoFecha";
$proto45["m_columns"][] = "EmbargoResolucion";
$proto45["m_columns"][] = "Secuestre";
$proto45["m_columns"][] = "SecuestreDocumento";
$proto45["m_columns"][] = "SecuestreDireccion";
$proto45["m_columns"][] = "SecuestreTelefono";
$proto45["m_columns"][] = "RemateFecha";
$proto45["m_columns"][] = "RemateResolucion";
$proto45["m_columns"][] = "Valor";
$proto45["m_columns"][] = "Observaciones";
$proto45["m_columns"][] = "Secuestrado";
$proto45["m_columns"][] = "SecuestroFecha";
$proto45["m_columns"][] = "Comision";
$proto45["m_columns"][] = "RemateAviso";
$proto45["m_columns"][] = "Aprobacion";
$proto45["m_columns"][] = "Entrega";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "dbo.Medidas";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "dbo.Medidas";
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

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Medidas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medidas = createSqlQuery_medidas();


	
		;

																			

$tdatamedidas[".sqlquery"] = $queryData_medidas;



$tdatamedidas[".hasEvents"] = false;

?>