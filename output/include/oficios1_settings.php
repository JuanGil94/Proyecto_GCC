<?php
$tdataoficios1 = array();
$tdataoficios1[".searchableFields"] = array();
$tdataoficios1[".ShortName"] = "oficios1";
$tdataoficios1[".OwnerID"] = "";
$tdataoficios1[".OriginalTable"] = "dbo.Oficios";


$tdataoficios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoficios1[".originalPagesByType"] = $tdataoficios1[".pagesByType"];
$tdataoficios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoficios1[".originalPages"] = $tdataoficios1[".pages"];
$tdataoficios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoficios1[".originalDefaultPages"] = $tdataoficios1[".defaultPages"];

//	field labels
$fieldLabelsoficios1 = array();
$fieldToolTipsoficios1 = array();
$pageTitlesoficios1 = array();
$placeHoldersoficios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoficios1["Spanish"] = array();
	$fieldToolTipsoficios1["Spanish"] = array();
	$placeHoldersoficios1["Spanish"] = array();
	$pageTitlesoficios1["Spanish"] = array();
	$fieldLabelsoficios1["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipsoficios1["Spanish"]["OficioId"] = "";
	$placeHoldersoficios1["Spanish"]["OficioId"] = "";
	$fieldLabelsoficios1["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipsoficios1["Spanish"]["Oficio"] = "";
	$placeHoldersoficios1["Spanish"]["Oficio"] = "";
	$fieldLabelsoficios1["Spanish"]["Archivo"] = "Plantilla";
	$fieldToolTipsoficios1["Spanish"]["Archivo"] = "";
	$placeHoldersoficios1["Spanish"]["Archivo"] = "";
	$fieldLabelsoficios1["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsoficios1["Spanish"]["Activo"] = "";
	$placeHoldersoficios1["Spanish"]["Activo"] = "";
	$fieldLabelsoficios1["Spanish"]["ActuacionId"] = "Actuacion";
	$fieldToolTipsoficios1["Spanish"]["ActuacionId"] = "";
	$placeHoldersoficios1["Spanish"]["ActuacionId"] = "";
	$fieldLabelsoficios1["Spanish"]["OficioIdRequisito"] = "Oficio Pre-requisito";
	$fieldToolTipsoficios1["Spanish"]["OficioIdRequisito"] = "";
	$placeHoldersoficios1["Spanish"]["OficioIdRequisito"] = "";
	$fieldLabelsoficios1["Spanish"]["Direcciones"] = "Direccion Sancionado";
	$fieldToolTipsoficios1["Spanish"]["Direcciones"] = "";
	$placeHoldersoficios1["Spanish"]["Direcciones"] = "";
	$fieldLabelsoficios1["Spanish"]["Edicion"] = "Edicion";
	$fieldToolTipsoficios1["Spanish"]["Edicion"] = "";
	$placeHoldersoficios1["Spanish"]["Edicion"] = "";
	$fieldLabelsoficios1["Spanish"]["Abierto"] = "Abierto";
	$fieldToolTipsoficios1["Spanish"]["Abierto"] = "";
	$placeHoldersoficios1["Spanish"]["Abierto"] = "";
	$fieldLabelsoficios1["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsoficios1["Spanish"]["Sigobius"] = "";
	$placeHoldersoficios1["Spanish"]["Sigobius"] = "";
	$fieldLabelsoficios1["Spanish"]["Devolucion"] = "Devolucion";
	$fieldToolTipsoficios1["Spanish"]["Devolucion"] = "";
	$placeHoldersoficios1["Spanish"]["Devolucion"] = "";
	if (count($fieldToolTipsoficios1["Spanish"]))
		$tdataoficios1[".isUseToolTips"] = true;
}


	$tdataoficios1[".NCSearch"] = true;



$tdataoficios1[".shortTableName"] = "oficios1";
$tdataoficios1[".nSecOptions"] = 0;

$tdataoficios1[".mainTableOwnerID"] = "";
$tdataoficios1[".entityType"] = 1;
$tdataoficios1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoficios1[".strOriginalTableName"] = "dbo.Oficios";

	



$tdataoficios1[".showAddInPopup"] = false;

$tdataoficios1[".showEditInPopup"] = false;

$tdataoficios1[".showViewInPopup"] = false;

$tdataoficios1[".listAjax"] = false;
//	temporary
//$tdataoficios1[".listAjax"] = false;

	$tdataoficios1[".audit"] = true;

	$tdataoficios1[".locking"] = false;


$pages = $tdataoficios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoficios1[".edit"] = true;
	$tdataoficios1[".afterEditAction"] = 1;
	$tdataoficios1[".closePopupAfterEdit"] = 1;
	$tdataoficios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoficios1[".add"] = true;
$tdataoficios1[".afterAddAction"] = 1;
$tdataoficios1[".closePopupAfterAdd"] = 1;
$tdataoficios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoficios1[".list"] = true;
}



$tdataoficios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoficios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoficios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoficios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoficios1[".printFriendly"] = true;
}



$tdataoficios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoficios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoficios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoficios1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataoficios1[".ajaxCodeSnippetAdded"] = false;

$tdataoficios1[".buttonsAdded"] = false;

$tdataoficios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoficios1[".isUseTimeForSearch"] = false;


$tdataoficios1[".badgeColor"] = "8FBC8B";


$tdataoficios1[".allSearchFields"] = array();
$tdataoficios1[".filterFields"] = array();
$tdataoficios1[".requiredSearchFields"] = array();

$tdataoficios1[".googleLikeFields"] = array();
$tdataoficios1[".googleLikeFields"][] = "OficioId";
$tdataoficios1[".googleLikeFields"][] = "Oficio";
$tdataoficios1[".googleLikeFields"][] = "Archivo";
$tdataoficios1[".googleLikeFields"][] = "Activo";
$tdataoficios1[".googleLikeFields"][] = "ActuacionId";
$tdataoficios1[".googleLikeFields"][] = "OficioIdRequisito";
$tdataoficios1[".googleLikeFields"][] = "Direcciones";
$tdataoficios1[".googleLikeFields"][] = "Edicion";
$tdataoficios1[".googleLikeFields"][] = "Abierto";
$tdataoficios1[".googleLikeFields"][] = "Sigobius";
$tdataoficios1[".googleLikeFields"][] = "Devolucion";



$tdataoficios1[".tableType"] = "list";

$tdataoficios1[".printerPageOrientation"] = 0;
$tdataoficios1[".nPrinterPageScale"] = 100;

$tdataoficios1[".nPrinterSplitRecords"] = 40;

$tdataoficios1[".geocodingEnabled"] = false;





$tdataoficios1[".isResizeColumns"] = true;





$tdataoficios1[".pageSize"] = 20;

$tdataoficios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoficios1[".strOrderBy"] = $tstrOrderBy;

$tdataoficios1[".orderindexes"] = array();


$tdataoficios1[".sqlHead"] = "SELECT OficioId,  Oficio,  Archivo,  Activo,  ActuacionId,  OficioIdRequisito,  Direcciones,  Edicion,  Abierto,  Sigobius,  Devolucion";
$tdataoficios1[".sqlFrom"] = "FROM dbo.Oficios";
$tdataoficios1[".sqlWhereExpr"] = "(Sigobius = 0)";
$tdataoficios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoficios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoficios1[".arrGroupsPerPage"] = $arrGPP;

$tdataoficios1[".highlightSearchResults"] = true;

$tableKeysoficios1 = array();
$tableKeysoficios1[] = "OficioId";
$tdataoficios1[".Keys"] = $tableKeysoficios1;


$tdataoficios1[".hideMobileList"] = array();




//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","OficioId");
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


	$tdataoficios1["OficioId"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "OficioId";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Oficio");
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


	$tdataoficios1["Oficio"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Oficio";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Archivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Archivo";

		$fdata["sourceSingle"] = "Archivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Archivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 1000;
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


	$tdataoficios1["Archivo"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Archivo";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Activo");
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


	$tdataoficios1["Activo"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Activo";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","ActuacionId");
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


	$tdataoficios1["ActuacionId"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "ActuacionId";
//	OficioIdRequisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OficioIdRequisito";
	$fdata["GoodName"] = "OficioIdRequisito";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","OficioIdRequisito");
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


	$tdataoficios1["OficioIdRequisito"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "OficioIdRequisito";
//	Direcciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Direcciones";
	$fdata["GoodName"] = "Direcciones";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Direcciones");
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


	$tdataoficios1["Direcciones"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Direcciones";
//	Edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Edicion";
	$fdata["GoodName"] = "Edicion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Edicion");
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


	$tdataoficios1["Edicion"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Edicion";
//	Abierto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Abierto";
	$fdata["GoodName"] = "Abierto";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Abierto");
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


	$tdataoficios1["Abierto"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Abierto";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Sigobius");
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


	$tdataoficios1["Sigobius"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Sigobius";
//	Devolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Devolucion";
	$fdata["GoodName"] = "Devolucion";
	$fdata["ownerTable"] = "dbo.Oficios";
	$fdata["Label"] = GetFieldLabel("dbo_Oficios1","Devolucion");
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


	$tdataoficios1["Devolucion"] = $fdata;
		$tdataoficios1[".searchableFields"][] = "Devolucion";


$tables_data["dbo.Oficios1"]=&$tdataoficios1;
$field_labels["dbo_Oficios1"] = &$fieldLabelsoficios1;
$fieldToolTips["dbo_Oficios1"] = &$fieldToolTipsoficios1;
$placeHolders["dbo_Oficios1"] = &$placeHoldersoficios1;
$page_titles["dbo_Oficios1"] = &$pageTitlesoficios1;


changeTextControlsToDate( "dbo.Oficios1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Oficios1"] = array();
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


		
	$detailsTablesData["dbo.Oficios1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"][]="OficioId";
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


		
	$detailsTablesData["dbo.Oficios1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"][]="OficioId";
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


		
	$detailsTablesData["dbo.Oficios1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["masterKeys"][]="OficioId";

				$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Oficios1"][$dIndex]["detailKeys"][]="OficioId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Oficios1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Oficios1"][0] = $masterParams;
				$masterTablesData["dbo.Oficios1"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Oficios1"][0]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Oficios1"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Oficios1"][0]["detailKeys"][]="ActuacionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_oficios1()
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
	"m_srcTableName" => "dbo.Oficios1"
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
	"m_srcTableName" => "dbo.Oficios1"
));

$proto6["m_sql"] = "OficioId";
$proto6["m_srcTableName"] = "dbo.Oficios1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficio",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto8["m_sql"] = "Oficio";
$proto8["m_srcTableName"] = "dbo.Oficios1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto10["m_sql"] = "Archivo";
$proto10["m_srcTableName"] = "dbo.Oficios1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto12["m_sql"] = "Activo";
$proto12["m_srcTableName"] = "dbo.Oficios1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto14["m_sql"] = "ActuacionId";
$proto14["m_srcTableName"] = "dbo.Oficios1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioIdRequisito",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto16["m_sql"] = "OficioIdRequisito";
$proto16["m_srcTableName"] = "dbo.Oficios1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direcciones",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto18["m_sql"] = "Direcciones";
$proto18["m_srcTableName"] = "dbo.Oficios1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Edicion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto20["m_sql"] = "Edicion";
$proto20["m_srcTableName"] = "dbo.Oficios1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Abierto",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto22["m_sql"] = "Abierto";
$proto22["m_srcTableName"] = "dbo.Oficios1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto24["m_sql"] = "Sigobius";
$proto24["m_srcTableName"] = "dbo.Oficios1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Devolucion",
	"m_strTable" => "dbo.Oficios",
	"m_srcTableName" => "dbo.Oficios1"
));

$proto26["m_sql"] = "Devolucion";
$proto26["m_srcTableName"] = "dbo.Oficios1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Oficios";
$proto29["m_srcTableName"] = "dbo.Oficios1";
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
$proto28["m_srcTableName"] = "dbo.Oficios1";
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
$proto0["m_srcTableName"]="dbo.Oficios1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oficios1 = createSqlQuery_oficios1();


	
		;

											

$tdataoficios1[".sqlquery"] = $queryData_oficios1;



$tdataoficios1[".hasEvents"] = false;

?>