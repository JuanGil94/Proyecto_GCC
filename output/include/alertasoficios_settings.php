<?php
$tdataalertasoficios = array();
$tdataalertasoficios[".searchableFields"] = array();
$tdataalertasoficios[".ShortName"] = "alertasoficios";
$tdataalertasoficios[".OwnerID"] = "";
$tdataalertasoficios[".OriginalTable"] = "dbo.AlertasOficios";


$tdataalertasoficios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalertasoficios[".originalPagesByType"] = $tdataalertasoficios[".pagesByType"];
$tdataalertasoficios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalertasoficios[".originalPages"] = $tdataalertasoficios[".pages"];
$tdataalertasoficios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalertasoficios[".originalDefaultPages"] = $tdataalertasoficios[".defaultPages"];

//	field labels
$fieldLabelsalertasoficios = array();
$fieldToolTipsalertasoficios = array();
$pageTitlesalertasoficios = array();
$placeHoldersalertasoficios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertasoficios["Spanish"] = array();
	$fieldToolTipsalertasoficios["Spanish"] = array();
	$placeHoldersalertasoficios["Spanish"] = array();
	$pageTitlesalertasoficios["Spanish"] = array();
	$fieldLabelsalertasoficios["Spanish"]["AlertaOficioId"] = "Alerta Oficio Id";
	$fieldToolTipsalertasoficios["Spanish"]["AlertaOficioId"] = "";
	$placeHoldersalertasoficios["Spanish"]["AlertaOficioId"] = "";
	$fieldLabelsalertasoficios["Spanish"]["AlertaId"] = "Alerta Id";
	$fieldToolTipsalertasoficios["Spanish"]["AlertaId"] = "";
	$placeHoldersalertasoficios["Spanish"]["AlertaId"] = "";
	$fieldLabelsalertasoficios["Spanish"]["CarteraTipoId"] = "Tipo de Cartera";
	$fieldToolTipsalertasoficios["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersalertasoficios["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsalertasoficios["Spanish"]["OficioId"] = "Oficio";
	$fieldToolTipsalertasoficios["Spanish"]["OficioId"] = "";
	$placeHoldersalertasoficios["Spanish"]["OficioId"] = "";
	$fieldLabelsalertasoficios["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsalertasoficios["Spanish"]["Activo"] = "";
	$placeHoldersalertasoficios["Spanish"]["Activo"] = "";
	$fieldLabelsalertasoficios["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsalertasoficios["Spanish"]["ConceptoId"] = "";
	$placeHoldersalertasoficios["Spanish"]["ConceptoId"] = "";
	$fieldLabelsalertasoficios["Spanish"]["Carcel"] = "Privado Libertad";
	$fieldToolTipsalertasoficios["Spanish"]["Carcel"] = "";
	$placeHoldersalertasoficios["Spanish"]["Carcel"] = "";
	$fieldLabelsalertasoficios["Spanish"]["SinDireccion"] = "Sin Direccion";
	$fieldToolTipsalertasoficios["Spanish"]["SinDireccion"] = "";
	$placeHoldersalertasoficios["Spanish"]["SinDireccion"] = "";
	$pageTitlesalertasoficios["Spanish"]["add"] = "Alertas Oficios";
	if (count($fieldToolTipsalertasoficios["Spanish"]))
		$tdataalertasoficios[".isUseToolTips"] = true;
}


	$tdataalertasoficios[".NCSearch"] = true;



$tdataalertasoficios[".shortTableName"] = "alertasoficios";
$tdataalertasoficios[".nSecOptions"] = 0;

$tdataalertasoficios[".mainTableOwnerID"] = "";
$tdataalertasoficios[".entityType"] = 0;
$tdataalertasoficios[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertasoficios[".strOriginalTableName"] = "dbo.AlertasOficios";

	



$tdataalertasoficios[".showAddInPopup"] = false;

$tdataalertasoficios[".showEditInPopup"] = false;

$tdataalertasoficios[".showViewInPopup"] = false;

$tdataalertasoficios[".listAjax"] = false;
//	temporary
//$tdataalertasoficios[".listAjax"] = false;

	$tdataalertasoficios[".audit"] = false;

	$tdataalertasoficios[".locking"] = false;


$pages = $tdataalertasoficios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertasoficios[".edit"] = true;
	$tdataalertasoficios[".afterEditAction"] = 1;
	$tdataalertasoficios[".closePopupAfterEdit"] = 1;
	$tdataalertasoficios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertasoficios[".add"] = true;
$tdataalertasoficios[".afterAddAction"] = 1;
$tdataalertasoficios[".closePopupAfterAdd"] = 1;
$tdataalertasoficios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertasoficios[".list"] = true;
}



$tdataalertasoficios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertasoficios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertasoficios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertasoficios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertasoficios[".printFriendly"] = true;
}



$tdataalertasoficios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertasoficios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertasoficios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertasoficios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdataalertasoficios[".ajaxCodeSnippetAdded"] = false;

$tdataalertasoficios[".buttonsAdded"] = false;

$tdataalertasoficios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalertasoficios[".isUseTimeForSearch"] = false;


$tdataalertasoficios[".badgeColor"] = "9ACD32";


$tdataalertasoficios[".allSearchFields"] = array();
$tdataalertasoficios[".filterFields"] = array();
$tdataalertasoficios[".requiredSearchFields"] = array();

$tdataalertasoficios[".googleLikeFields"] = array();
$tdataalertasoficios[".googleLikeFields"][] = "AlertaOficioId";
$tdataalertasoficios[".googleLikeFields"][] = "AlertaId";
$tdataalertasoficios[".googleLikeFields"][] = "CarteraTipoId";
$tdataalertasoficios[".googleLikeFields"][] = "OficioId";
$tdataalertasoficios[".googleLikeFields"][] = "Activo";
$tdataalertasoficios[".googleLikeFields"][] = "ConceptoId";
$tdataalertasoficios[".googleLikeFields"][] = "Carcel";
$tdataalertasoficios[".googleLikeFields"][] = "SinDireccion";



$tdataalertasoficios[".tableType"] = "list";

$tdataalertasoficios[".printerPageOrientation"] = 0;
$tdataalertasoficios[".nPrinterPageScale"] = 100;

$tdataalertasoficios[".nPrinterSplitRecords"] = 40;

$tdataalertasoficios[".geocodingEnabled"] = false;










$tdataalertasoficios[".pageSize"] = 20;

$tdataalertasoficios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertasoficios[".strOrderBy"] = $tstrOrderBy;

$tdataalertasoficios[".orderindexes"] = array();


$tdataalertasoficios[".sqlHead"] = "SELECT AlertaOficioId,  	AlertaId,  	CarteraTipoId,  	OficioId,  	Activo,  	ConceptoId,  	Carcel,  	SinDireccion";
$tdataalertasoficios[".sqlFrom"] = "FROM dbo.AlertasOficios";
$tdataalertasoficios[".sqlWhereExpr"] = "";
$tdataalertasoficios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalertasoficios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertasoficios[".arrGroupsPerPage"] = $arrGPP;

$tdataalertasoficios[".highlightSearchResults"] = true;

$tableKeysalertasoficios = array();
$tableKeysalertasoficios[] = "AlertaOficioId";
$tdataalertasoficios[".Keys"] = $tableKeysalertasoficios;


$tdataalertasoficios[".hideMobileList"] = array();




//	AlertaOficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AlertaOficioId";
	$fdata["GoodName"] = "AlertaOficioId";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","AlertaOficioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AlertaOficioId";

		$fdata["sourceSingle"] = "AlertaOficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaOficioId";

	
	
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


	$tdataalertasoficios["AlertaOficioId"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "AlertaOficioId";
//	AlertaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AlertaId";
	$fdata["GoodName"] = "AlertaId";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","AlertaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AlertaId";

		$fdata["sourceSingle"] = "AlertaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaId";

	
	
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
	$edata["LookupTable"] = "dbo.Alertas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AlertaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "AlertaId";

	

	
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


	$tdataalertasoficios["AlertaId"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "AlertaId";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","CarteraTipoId");
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


	$tdataalertasoficios["CarteraTipoId"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "CarteraTipoId";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioId";

	
	
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
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
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


	$tdataalertasoficios["OficioId"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "OficioId";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activo";

	
	
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


	$tdataalertasoficios["Activo"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "Activo";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoId";

	
	
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
	$edata["LookupTable"] = "dbo.Conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 3;
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


	$tdataalertasoficios["ConceptoId"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "ConceptoId";
//	Carcel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Carcel";
	$fdata["GoodName"] = "Carcel";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","Carcel");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Carcel";

		$fdata["sourceSingle"] = "Carcel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Carcel";

	
	
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


	$tdataalertasoficios["Carcel"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "Carcel";
//	SinDireccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SinDireccion";
	$fdata["GoodName"] = "SinDireccion";
	$fdata["ownerTable"] = "dbo.AlertasOficios";
	$fdata["Label"] = GetFieldLabel("dbo_AlertasOficios","SinDireccion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "SinDireccion";

		$fdata["sourceSingle"] = "SinDireccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SinDireccion";

	
	
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


	$tdataalertasoficios["SinDireccion"] = $fdata;
		$tdataalertasoficios[".searchableFields"][] = "SinDireccion";


$tables_data["dbo.AlertasOficios"]=&$tdataalertasoficios;
$field_labels["dbo_AlertasOficios"] = &$fieldLabelsalertasoficios;
$fieldToolTips["dbo_AlertasOficios"] = &$fieldToolTipsalertasoficios;
$placeHolders["dbo_AlertasOficios"] = &$placeHoldersalertasoficios;
$page_titles["dbo_AlertasOficios"] = &$pageTitlesalertasoficios;


changeTextControlsToDate( "dbo.AlertasOficios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.AlertasOficios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.AlertasOficios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Alertas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Alertas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alertas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.AlertasOficios"][0] = $masterParams;
				$masterTablesData["dbo.AlertasOficios"][0]["masterKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][0]["masterKeys"][]="AlertaId";
				$masterTablesData["dbo.AlertasOficios"][0]["detailKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][0]["detailKeys"][]="AlertaId";
		
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
					$masterTablesData["dbo.AlertasOficios"][1] = $masterParams;
				$masterTablesData["dbo.AlertasOficios"][1]["masterKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][1]["masterKeys"][]="CarteraTipoId";
				$masterTablesData["dbo.AlertasOficios"][1]["detailKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][1]["detailKeys"][]="CarteraTipoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Conceptos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Conceptos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.AlertasOficios"][2] = $masterParams;
				$masterTablesData["dbo.AlertasOficios"][2]["masterKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][2]["masterKeys"][]="ConceptoId";
				$masterTablesData["dbo.AlertasOficios"][2]["detailKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][2]["detailKeys"][]="ConceptoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.AlertasOficios"][3] = $masterParams;
				$masterTablesData["dbo.AlertasOficios"][3]["masterKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][3]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.AlertasOficios"][3]["detailKeys"] = array();
	$masterTablesData["dbo.AlertasOficios"][3]["detailKeys"][]="OficioId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertasoficios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AlertaOficioId,  	AlertaId,  	CarteraTipoId,  	OficioId,  	Activo,  	ConceptoId,  	Carcel,  	SinDireccion";
$proto0["m_strFrom"] = "FROM dbo.AlertasOficios";
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
	"m_strName" => "AlertaOficioId",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto6["m_sql"] = "AlertaOficioId";
$proto6["m_srcTableName"] = "dbo.AlertasOficios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AlertaId",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto8["m_sql"] = "AlertaId";
$proto8["m_srcTableName"] = "dbo.AlertasOficios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto10["m_sql"] = "CarteraTipoId";
$proto10["m_srcTableName"] = "dbo.AlertasOficios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto12["m_sql"] = "OficioId";
$proto12["m_srcTableName"] = "dbo.AlertasOficios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto14["m_sql"] = "Activo";
$proto14["m_srcTableName"] = "dbo.AlertasOficios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto16["m_sql"] = "ConceptoId";
$proto16["m_srcTableName"] = "dbo.AlertasOficios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Carcel",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto18["m_sql"] = "Carcel";
$proto18["m_srcTableName"] = "dbo.AlertasOficios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SinDireccion",
	"m_strTable" => "dbo.AlertasOficios",
	"m_srcTableName" => "dbo.AlertasOficios"
));

$proto20["m_sql"] = "SinDireccion";
$proto20["m_srcTableName"] = "dbo.AlertasOficios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.AlertasOficios";
$proto23["m_srcTableName"] = "dbo.AlertasOficios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "AlertaOficioId";
$proto23["m_columns"][] = "AlertaId";
$proto23["m_columns"][] = "CarteraTipoId";
$proto23["m_columns"][] = "OficioId";
$proto23["m_columns"][] = "Activo";
$proto23["m_columns"][] = "ConceptoId";
$proto23["m_columns"][] = "Carcel";
$proto23["m_columns"][] = "SinDireccion";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.AlertasOficios";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.AlertasOficios";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.AlertasOficios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertasoficios = createSqlQuery_alertasoficios();


	
		;

								

$tdataalertasoficios[".sqlquery"] = $queryData_alertasoficios;



$tdataalertasoficios[".hasEvents"] = false;

?>