<?php
$tdataoficios_01 = array();
$tdataoficios_01[".searchableFields"] = array();
$tdataoficios_01[".ShortName"] = "oficios_01";
$tdataoficios_01[".OwnerID"] = "";
$tdataoficios_01[".OriginalTable"] = "dbo.Oficios";


$tdataoficios_01[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoficios_01[".originalPagesByType"] = $tdataoficios_01[".pagesByType"];
$tdataoficios_01[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoficios_01[".originalPages"] = $tdataoficios_01[".pages"];
$tdataoficios_01[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoficios_01[".originalDefaultPages"] = $tdataoficios_01[".defaultPages"];

//	field labels
$fieldLabelsoficios_01 = array();
$fieldToolTipsoficios_01 = array();
$pageTitlesoficios_01 = array();
$placeHoldersoficios_01 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoficios_01["Spanish"] = array();
	$fieldToolTipsoficios_01["Spanish"] = array();
	$placeHoldersoficios_01["Spanish"] = array();
	$pageTitlesoficios_01["Spanish"] = array();
	$fieldLabelsoficios_01["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsoficios_01["Spanish"]["OficioId"] = "";
	$placeHoldersoficios_01["Spanish"]["OficioId"] = "";
	$fieldLabelsoficios_01["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsoficios_01["Spanish"]["Oficio"] = "";
	$placeHoldersoficios_01["Spanish"]["Oficio"] = "";
	$fieldLabelsoficios_01["Spanish"]["Archivo"] = "Plantilla";
	$fieldToolTipsoficios_01["Spanish"]["Archivo"] = "";
	$placeHoldersoficios_01["Spanish"]["Archivo"] = "";
	$fieldLabelsoficios_01["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsoficios_01["Spanish"]["Activo"] = "";
	$placeHoldersoficios_01["Spanish"]["Activo"] = "";
	$fieldLabelsoficios_01["Spanish"]["ActuacionId"] = "Actuacion";
	$fieldToolTipsoficios_01["Spanish"]["ActuacionId"] = "";
	$placeHoldersoficios_01["Spanish"]["ActuacionId"] = "";
	$fieldLabelsoficios_01["Spanish"]["OficioIdRequisito"] = "Oficio Pre-requisito";
	$fieldToolTipsoficios_01["Spanish"]["OficioIdRequisito"] = "";
	$placeHoldersoficios_01["Spanish"]["OficioIdRequisito"] = "";
	$fieldLabelsoficios_01["Spanish"]["Direcciones"] = "Direccion Sancionado";
	$fieldToolTipsoficios_01["Spanish"]["Direcciones"] = "";
	$placeHoldersoficios_01["Spanish"]["Direcciones"] = "";
	$fieldLabelsoficios_01["Spanish"]["Edicion"] = "Permitir Edicion";
	$fieldToolTipsoficios_01["Spanish"]["Edicion"] = "";
	$placeHoldersoficios_01["Spanish"]["Edicion"] = "";
	$fieldLabelsoficios_01["Spanish"]["Abierto"] = "Publicar Abierto";
	$fieldToolTipsoficios_01["Spanish"]["Abierto"] = "";
	$placeHoldersoficios_01["Spanish"]["Abierto"] = "";
	$fieldLabelsoficios_01["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsoficios_01["Spanish"]["Sigobius"] = "";
	$placeHoldersoficios_01["Spanish"]["Sigobius"] = "";
	$fieldLabelsoficios_01["Spanish"]["Devolucion"] = "Devolucion";
	$fieldToolTipsoficios_01["Spanish"]["Devolucion"] = "";
	$placeHoldersoficios_01["Spanish"]["Devolucion"] = "";
	if (count($fieldToolTipsoficios_01["Spanish"]))
		$tdataoficios_01[".isUseToolTips"] = true;
}


	$tdataoficios_01[".NCSearch"] = true;



$tdataoficios_01[".shortTableName"] = "oficios_01";
$tdataoficios_01[".nSecOptions"] = 0;

$tdataoficios_01[".mainTableOwnerID"] = "";
$tdataoficios_01[".entityType"] = 1;
$tdataoficios_01[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoficios_01[".strOriginalTableName"] = "dbo.Oficios";

	



$tdataoficios_01[".showAddInPopup"] = false;

$tdataoficios_01[".showEditInPopup"] = false;

$tdataoficios_01[".showViewInPopup"] = false;

$tdataoficios_01[".listAjax"] = false;
//	temporary
//$tdataoficios_01[".listAjax"] = false;

	$tdataoficios_01[".audit"] = true;

	$tdataoficios_01[".locking"] = false;


$pages = $tdataoficios_01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoficios_01[".edit"] = true;
	$tdataoficios_01[".afterEditAction"] = 1;
	$tdataoficios_01[".closePopupAfterEdit"] = 1;
	$tdataoficios_01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoficios_01[".add"] = true;
$tdataoficios_01[".afterAddAction"] = 1;
$tdataoficios_01[".closePopupAfterAdd"] = 1;
$tdataoficios_01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoficios_01[".list"] = true;
}



$tdataoficios_01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoficios_01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoficios_01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoficios_01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoficios_01[".printFriendly"] = true;
}



$tdataoficios_01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoficios_01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoficios_01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoficios_01[".isUseAjaxSuggest"] = true;



																														

$tdataoficios_01[".ajaxCodeSnippetAdded"] = false;

$tdataoficios_01[".buttonsAdded"] = false;

$tdataoficios_01[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoficios_01[".isUseTimeForSearch"] = false;


$tdataoficios_01[".badgeColor"] = "5F9EA0";


$tdataoficios_01[".allSearchFields"] = array();
$tdataoficios_01[".filterFields"] = array();
$tdataoficios_01[".requiredSearchFields"] = array();

$tdataoficios_01[".googleLikeFields"] = array();
$tdataoficios_01[".googleLikeFields"][] = "OficioId";
$tdataoficios_01[".googleLikeFields"][] = "Oficio";
$tdataoficios_01[".googleLikeFields"][] = "Archivo";
$tdataoficios_01[".googleLikeFields"][] = "Activo";
$tdataoficios_01[".googleLikeFields"][] = "ActuacionId";
$tdataoficios_01[".googleLikeFields"][] = "OficioIdRequisito";
$tdataoficios_01[".googleLikeFields"][] = "Direcciones";
$tdataoficios_01[".googleLikeFields"][] = "Edicion";
$tdataoficios_01[".googleLikeFields"][] = "Abierto";
$tdataoficios_01[".googleLikeFields"][] = "Sigobius";
$tdataoficios_01[".googleLikeFields"][] = "Devolucion";



$tdataoficios_01[".tableType"] = "list";

$tdataoficios_01[".printerPageOrientation"] = 0;
$tdataoficios_01[".nPrinterPageScale"] = 100;

$tdataoficios_01[".nPrinterSplitRecords"] = 40;

$tdataoficios_01[".geocodingEnabled"] = false;










$tdataoficios_01[".pageSize"] = 20;

$tdataoficios_01[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoficios_01[".strOrderBy"] = $tstrOrderBy;

$tdataoficios_01[".orderindexes"] = array();


$tdataoficios_01[".sqlHead"] = "SELECT OficioId,  Oficio,  Archivo,  Activo,  ActuacionId,  OficioIdRequisito,  Direcciones,  Edicion,  Abierto,  Sigobius,  Devolucion";
$tdataoficios_01[".sqlFrom"] = "FROM dbo.Oficios";
$tdataoficios_01[".sqlWhereExpr"] = "(Sigobius = 0)";
$tdataoficios_01[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoficios_01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoficios_01[".arrGroupsPerPage"] = $arrGPP;

$tdataoficios_01[".highlightSearchResults"] = true;

$tableKeysoficios_01 = array();
$tableKeysoficios_01[] = "OficioId";
$tdataoficios_01[".Keys"] = $tableKeysoficios_01;


$tdataoficios_01[".hideMobileList"] = array();




//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","OficioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataoficios_01["OficioId"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "OficioId";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Oficio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficio";

		$fdata["sourceSingle"] = "Oficio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficio";

	
	
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


	$tdataoficios_01["Oficio"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Oficio";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Archivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Archivo";

		$fdata["sourceSingle"] = "Archivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Archivo";

	
	
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


	$tdataoficios_01["Archivo"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Archivo";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Activo");
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


	$tdataoficios_01["Activo"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Activo";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","ActuacionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ActuacionId";

		$fdata["sourceSingle"] = "ActuacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActuacionId";

	
	
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
	$edata["LookupTable"] = "dbo.Actuaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ActuacionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Actuacion";

	

	
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


	$tdataoficios_01["ActuacionId"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "ActuacionId";
//	OficioIdRequisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OficioIdRequisito";
	$fdata["GoodName"] = "OficioIdRequisito";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","OficioIdRequisito");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioIdRequisito";

		$fdata["sourceSingle"] = "OficioIdRequisito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioIdRequisito";

	
	
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


	$tdataoficios_01["OficioIdRequisito"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "OficioIdRequisito";
//	Direcciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Direcciones";
	$fdata["GoodName"] = "Direcciones";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Direcciones");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Direcciones";

		$fdata["sourceSingle"] = "Direcciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direcciones";

	
	
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


	$tdataoficios_01["Direcciones"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Direcciones";
//	Edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Edicion";
	$fdata["GoodName"] = "Edicion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Edicion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Edicion";

		$fdata["sourceSingle"] = "Edicion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Edicion";

	
	
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


	$tdataoficios_01["Edicion"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Edicion";
//	Abierto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Abierto";
	$fdata["GoodName"] = "Abierto";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Abierto");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Abierto";

		$fdata["sourceSingle"] = "Abierto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abierto";

	
	
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


	$tdataoficios_01["Abierto"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Abierto";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Sigobius");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdataoficios_01["Sigobius"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Sigobius";
//	Devolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Devolucion";
	$fdata["GoodName"] = "Devolucion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_01","Devolucion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Devolucion";

		$fdata["sourceSingle"] = "Devolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Devolucion";

	
	
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


	$tdataoficios_01["Devolucion"] = $fdata;
		$tdataoficios_01[".searchableFields"][] = "Devolucion";


$tables_data["dbo.Oficios 01"]=&$tdataoficios_01;
$field_labels["dbo_Oficios_01"] = &$fieldLabelsoficios_01;
$fieldToolTips["dbo_Oficios_01"] = &$fieldToolTipsoficios_01;
$placeHolders["dbo_Oficios_01"] = &$placeHoldersoficios_01;
$page_titles["dbo_Oficios_01"] = &$pageTitlesoficios_01;


changeTextControlsToDate( "dbo.Oficios 01" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios 01"] = array();
//	dbo.ChequeosOficios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosOficios";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosOficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeosoficios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosOficios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Oficios 01"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"][]="OficioId";
//	dbo.Correspondencias
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Correspondencias";
		$detailsParam["dOriginalTable"] = "dbo.Correspondencias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "correspondencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Correspondencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Oficios 01"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"][]="OficioId";
//	dbo.Suspensiones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Suspensiones";
		$detailsParam["dOriginalTable"] = "dbo.Suspensiones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "suspensiones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Suspensiones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Oficios 01"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios 01"][$dIndex]["detailKeys"][]="OficioId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios 01"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Oficios 01"][0] = $masterParams;
				$masterTablesData["dbo.Oficios 01"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Oficios 01"][0]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Oficios 01"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Oficios 01"][0]["detailKeys"][]="ActuacionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_oficios_01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OficioId,  Oficio,  Archivo,  Activo,  ActuacionId,  OficioIdRequisito,  Direcciones,  Edicion,  Abierto,  Sigobius,  Devolucion";
$proto0["m_strFrom"] = "FROM dbo.Oficios";
$proto0["m_strWhere"] = "(Sigobius = 0)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Sigobius = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 0";
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
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto6["m_sql"] = "OficioId";
$proto6["m_srcTableName"] = "dbo.Oficios 01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto8["m_sql"] = "Oficio";
$proto8["m_srcTableName"] = "dbo.Oficios 01";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto10["m_sql"] = "Archivo";
$proto10["m_srcTableName"] = "dbo.Oficios 01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto12["m_sql"] = "Activo";
$proto12["m_srcTableName"] = "dbo.Oficios 01";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto14["m_sql"] = "ActuacionId";
$proto14["m_srcTableName"] = "dbo.Oficios 01";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioIdRequisito",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto16["m_sql"] = "OficioIdRequisito";
$proto16["m_srcTableName"] = "dbo.Oficios 01";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direcciones",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto18["m_sql"] = "Direcciones";
$proto18["m_srcTableName"] = "dbo.Oficios 01";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Edicion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto20["m_sql"] = "Edicion";
$proto20["m_srcTableName"] = "dbo.Oficios 01";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Abierto",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto22["m_sql"] = "Abierto";
$proto22["m_srcTableName"] = "dbo.Oficios 01";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto24["m_sql"] = "Sigobius";
$proto24["m_srcTableName"] = "dbo.Oficios 01";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Devolucion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios 01"
));

$proto26["m_sql"] = "Devolucion";
$proto26["m_srcTableName"] = "dbo.Oficios 01";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Oficios";
$proto29["m_srcTableName"] = "dbo.Oficios 01";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "OficioId";
$proto29["m_columns"][] = "Oficio";
$proto29["m_columns"][] = "Archivo";
$proto29["m_columns"][] = "Activo";
$proto29["m_columns"][] = "ActuacionId";
$proto29["m_columns"][] = "OficioIdRequisito";
$proto29["m_columns"][] = "Direcciones";
$proto29["m_columns"][] = "Edicion";
$proto29["m_columns"][] = "Abierto";
$proto29["m_columns"][] = "Sigobius";
$proto29["m_columns"][] = "Devolucion";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.Oficios";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.Oficios 01";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Oficios 01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oficios_01 = createSqlQuery_oficios_01();


	
		;

											

$tdataoficios_01[".sqlquery"] = $queryData_oficios_01;



$tdataoficios_01[".hasEvents"] = false;

?>