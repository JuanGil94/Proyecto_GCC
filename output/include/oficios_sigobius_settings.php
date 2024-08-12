<?php
$tdataoficios_sigobius = array();
$tdataoficios_sigobius[".searchableFields"] = array();
$tdataoficios_sigobius[".ShortName"] = "oficios_sigobius";
$tdataoficios_sigobius[".OwnerID"] = "";
$tdataoficios_sigobius[".OriginalTable"] = "dbo.Oficios";


$tdataoficios_sigobius[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoficios_sigobius[".originalPagesByType"] = $tdataoficios_sigobius[".pagesByType"];
$tdataoficios_sigobius[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoficios_sigobius[".originalPages"] = $tdataoficios_sigobius[".pages"];
$tdataoficios_sigobius[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoficios_sigobius[".originalDefaultPages"] = $tdataoficios_sigobius[".defaultPages"];

//	field labels
$fieldLabelsoficios_sigobius = array();
$fieldToolTipsoficios_sigobius = array();
$pageTitlesoficios_sigobius = array();
$placeHoldersoficios_sigobius = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoficios_sigobius["Spanish"] = array();
	$fieldToolTipsoficios_sigobius["Spanish"] = array();
	$placeHoldersoficios_sigobius["Spanish"] = array();
	$pageTitlesoficios_sigobius["Spanish"] = array();
	$fieldLabelsoficios_sigobius["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsoficios_sigobius["Spanish"]["OficioId"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["OficioId"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsoficios_sigobius["Spanish"]["Oficio"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Oficio"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Archivo"] = "Plantilla";
	$fieldToolTipsoficios_sigobius["Spanish"]["Archivo"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Archivo"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsoficios_sigobius["Spanish"]["Activo"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Activo"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["ActuacionId"] = "Actuacion";
	$fieldToolTipsoficios_sigobius["Spanish"]["ActuacionId"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["ActuacionId"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["OficioIdRequisito"] = "Oficio Pre-requisito";
	$fieldToolTipsoficios_sigobius["Spanish"]["OficioIdRequisito"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["OficioIdRequisito"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Direcciones"] = "Direccion Sancionado";
	$fieldToolTipsoficios_sigobius["Spanish"]["Direcciones"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Direcciones"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Edicion"] = "Permitir Edicion";
	$fieldToolTipsoficios_sigobius["Spanish"]["Edicion"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Edicion"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Abierto"] = "Publicar Abierto";
	$fieldToolTipsoficios_sigobius["Spanish"]["Abierto"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Abierto"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsoficios_sigobius["Spanish"]["Sigobius"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Sigobius"] = "";
	$fieldLabelsoficios_sigobius["Spanish"]["Devolucion"] = "Devolucion";
	$fieldToolTipsoficios_sigobius["Spanish"]["Devolucion"] = "";
	$placeHoldersoficios_sigobius["Spanish"]["Devolucion"] = "";
	if (count($fieldToolTipsoficios_sigobius["Spanish"]))
		$tdataoficios_sigobius[".isUseToolTips"] = true;
}


	$tdataoficios_sigobius[".NCSearch"] = true;



$tdataoficios_sigobius[".shortTableName"] = "oficios_sigobius";
$tdataoficios_sigobius[".nSecOptions"] = 0;

$tdataoficios_sigobius[".mainTableOwnerID"] = "";
$tdataoficios_sigobius[".entityType"] = 1;
$tdataoficios_sigobius[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoficios_sigobius[".strOriginalTableName"] = "dbo.Oficios";

	



$tdataoficios_sigobius[".showAddInPopup"] = false;

$tdataoficios_sigobius[".showEditInPopup"] = false;

$tdataoficios_sigobius[".showViewInPopup"] = false;

$tdataoficios_sigobius[".listAjax"] = false;
//	temporary
//$tdataoficios_sigobius[".listAjax"] = false;

	$tdataoficios_sigobius[".audit"] = true;

	$tdataoficios_sigobius[".locking"] = false;


$pages = $tdataoficios_sigobius[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoficios_sigobius[".edit"] = true;
	$tdataoficios_sigobius[".afterEditAction"] = 1;
	$tdataoficios_sigobius[".closePopupAfterEdit"] = 1;
	$tdataoficios_sigobius[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoficios_sigobius[".add"] = true;
$tdataoficios_sigobius[".afterAddAction"] = 1;
$tdataoficios_sigobius[".closePopupAfterAdd"] = 1;
$tdataoficios_sigobius[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoficios_sigobius[".list"] = true;
}



$tdataoficios_sigobius[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoficios_sigobius[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoficios_sigobius[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoficios_sigobius[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoficios_sigobius[".printFriendly"] = true;
}



$tdataoficios_sigobius[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoficios_sigobius[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoficios_sigobius[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoficios_sigobius[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																														

$tdataoficios_sigobius[".ajaxCodeSnippetAdded"] = false;

$tdataoficios_sigobius[".buttonsAdded"] = false;

$tdataoficios_sigobius[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoficios_sigobius[".isUseTimeForSearch"] = false;


$tdataoficios_sigobius[".badgeColor"] = "DAA520";


$tdataoficios_sigobius[".allSearchFields"] = array();
$tdataoficios_sigobius[".filterFields"] = array();
$tdataoficios_sigobius[".requiredSearchFields"] = array();

$tdataoficios_sigobius[".googleLikeFields"] = array();
$tdataoficios_sigobius[".googleLikeFields"][] = "OficioId";
$tdataoficios_sigobius[".googleLikeFields"][] = "Oficio";
$tdataoficios_sigobius[".googleLikeFields"][] = "Archivo";
$tdataoficios_sigobius[".googleLikeFields"][] = "Activo";
$tdataoficios_sigobius[".googleLikeFields"][] = "ActuacionId";
$tdataoficios_sigobius[".googleLikeFields"][] = "OficioIdRequisito";
$tdataoficios_sigobius[".googleLikeFields"][] = "Direcciones";
$tdataoficios_sigobius[".googleLikeFields"][] = "Edicion";
$tdataoficios_sigobius[".googleLikeFields"][] = "Abierto";
$tdataoficios_sigobius[".googleLikeFields"][] = "Sigobius";
$tdataoficios_sigobius[".googleLikeFields"][] = "Devolucion";



$tdataoficios_sigobius[".tableType"] = "list";

$tdataoficios_sigobius[".printerPageOrientation"] = 0;
$tdataoficios_sigobius[".nPrinterPageScale"] = 100;

$tdataoficios_sigobius[".nPrinterSplitRecords"] = 40;

$tdataoficios_sigobius[".geocodingEnabled"] = false;





$tdataoficios_sigobius[".isResizeColumns"] = true;





$tdataoficios_sigobius[".pageSize"] = 20;

$tdataoficios_sigobius[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoficios_sigobius[".strOrderBy"] = $tstrOrderBy;

$tdataoficios_sigobius[".orderindexes"] = array();


$tdataoficios_sigobius[".sqlHead"] = "SELECT OficioId,  Oficio,  Archivo,  Activo,  ActuacionId,  OficioIdRequisito,  Direcciones,  Edicion,  Abierto,  Sigobius,  Devolucion";
$tdataoficios_sigobius[".sqlFrom"] = "FROM dbo.Oficios";
$tdataoficios_sigobius[".sqlWhereExpr"] = "(Sigobius = 1)";
$tdataoficios_sigobius[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoficios_sigobius[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoficios_sigobius[".arrGroupsPerPage"] = $arrGPP;

$tdataoficios_sigobius[".highlightSearchResults"] = true;

$tableKeysoficios_sigobius = array();
$tableKeysoficios_sigobius[] = "OficioId";
$tdataoficios_sigobius[".Keys"] = $tableKeysoficios_sigobius;


$tdataoficios_sigobius[".hideMobileList"] = array();




//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","OficioId");
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


	$tdataoficios_sigobius["OficioId"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "OficioId";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Oficio");
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


	$tdataoficios_sigobius["Oficio"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Oficio";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Archivo");
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


	$tdataoficios_sigobius["Archivo"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Archivo";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Activo");
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


	$tdataoficios_sigobius["Activo"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Activo";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","ActuacionId");
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


	$tdataoficios_sigobius["ActuacionId"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "ActuacionId";
//	OficioIdRequisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OficioIdRequisito";
	$fdata["GoodName"] = "OficioIdRequisito";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","OficioIdRequisito");
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
	$edata["LinkFieldType"] = 0;
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


	$tdataoficios_sigobius["OficioIdRequisito"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "OficioIdRequisito";
//	Direcciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Direcciones";
	$fdata["GoodName"] = "Direcciones";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Direcciones");
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


	$tdataoficios_sigobius["Direcciones"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Direcciones";
//	Edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Edicion";
	$fdata["GoodName"] = "Edicion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Edicion");
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


	$tdataoficios_sigobius["Edicion"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Edicion";
//	Abierto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Abierto";
	$fdata["GoodName"] = "Abierto";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Abierto");
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


	$tdataoficios_sigobius["Abierto"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Abierto";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Sigobius");
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


	$tdataoficios_sigobius["Sigobius"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Sigobius";
//	Devolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Devolucion";
	$fdata["GoodName"] = "Devolucion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios_Sigobius","Devolucion");
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


	$tdataoficios_sigobius["Devolucion"] = $fdata;
		$tdataoficios_sigobius[".searchableFields"][] = "Devolucion";


$tables_data["dbo.Oficios Sigobius"]=&$tdataoficios_sigobius;
$field_labels["dbo_Oficios_Sigobius"] = &$fieldLabelsoficios_sigobius;
$fieldToolTips["dbo_Oficios_Sigobius"] = &$fieldToolTipsoficios_sigobius;
$placeHolders["dbo_Oficios_Sigobius"] = &$placeHoldersoficios_sigobius;
$page_titles["dbo_Oficios_Sigobius"] = &$pageTitlesoficios_sigobius;


changeTextControlsToDate( "dbo.Oficios Sigobius" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios Sigobius"] = array();
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


		
	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"][]="OficioId";
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


		
	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"][]="OficioId";
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


		
	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios Sigobius"][$dIndex]["detailKeys"][]="OficioId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios Sigobius"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Oficios Sigobius"][0] = $masterParams;
				$masterTablesData["dbo.Oficios Sigobius"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Oficios Sigobius"][0]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Oficios Sigobius"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Oficios Sigobius"][0]["detailKeys"][]="ActuacionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_oficios_sigobius()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OficioId,  Oficio,  Archivo,  Activo,  ActuacionId,  OficioIdRequisito,  Direcciones,  Edicion,  Abierto,  Sigobius,  Devolucion";
$proto0["m_strFrom"] = "FROM dbo.Oficios";
$proto0["m_strWhere"] = "(Sigobius = 1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Sigobius = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto6["m_sql"] = "OficioId";
$proto6["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto8["m_sql"] = "Oficio";
$proto8["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto10["m_sql"] = "Archivo";
$proto10["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto12["m_sql"] = "Activo";
$proto12["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto14["m_sql"] = "ActuacionId";
$proto14["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioIdRequisito",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto16["m_sql"] = "OficioIdRequisito";
$proto16["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direcciones",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto18["m_sql"] = "Direcciones";
$proto18["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Edicion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto20["m_sql"] = "Edicion";
$proto20["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Abierto",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto22["m_sql"] = "Abierto";
$proto22["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto24["m_sql"] = "Sigobius";
$proto24["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Devolucion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios Sigobius"
));

$proto26["m_sql"] = "Devolucion";
$proto26["m_srcTableName"] = "dbo.Oficios Sigobius";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Oficios";
$proto29["m_srcTableName"] = "dbo.Oficios Sigobius";
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
$proto28["m_srcTableName"] = "dbo.Oficios Sigobius";
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
$proto0["m_srcTableName"]="dbo.Oficios Sigobius";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oficios_sigobius = createSqlQuery_oficios_sigobius();


	
		;

											

$tdataoficios_sigobius[".sqlquery"] = $queryData_oficios_sigobius;



$tdataoficios_sigobius[".hasEvents"] = false;

?>