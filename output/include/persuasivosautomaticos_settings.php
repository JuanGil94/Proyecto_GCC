<?php
$tdatapersuasivosautomaticos = array();
$tdatapersuasivosautomaticos[".searchableFields"] = array();
$tdatapersuasivosautomaticos[".ShortName"] = "persuasivosautomaticos";
$tdatapersuasivosautomaticos[".OwnerID"] = "";
$tdatapersuasivosautomaticos[".OriginalTable"] = "PersuasivosAutomaticos";


$tdatapersuasivosautomaticos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapersuasivosautomaticos[".originalPagesByType"] = $tdatapersuasivosautomaticos[".pagesByType"];
$tdatapersuasivosautomaticos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapersuasivosautomaticos[".originalPages"] = $tdatapersuasivosautomaticos[".pages"];
$tdatapersuasivosautomaticos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapersuasivosautomaticos[".originalDefaultPages"] = $tdatapersuasivosautomaticos[".defaultPages"];

//	field labels
$fieldLabelspersuasivosautomaticos = array();
$fieldToolTipspersuasivosautomaticos = array();
$pageTitlespersuasivosautomaticos = array();
$placeHolderspersuasivosautomaticos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersuasivosautomaticos["Spanish"] = array();
	$fieldToolTipspersuasivosautomaticos["Spanish"] = array();
	$placeHolderspersuasivosautomaticos["Spanish"] = array();
	$pageTitlespersuasivosautomaticos["Spanish"] = array();
	$fieldLabelspersuasivosautomaticos["Spanish"]["Numero"] = "No. Numero";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Numero"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Numero"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Despacho"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Despacho"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Codificador"] = "Codificador";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Codificador"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Codificador"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Sancionado"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Sancionado"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["SancionadoDocumento"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Masculino"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Masculino"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Persuasivo"] = "Persuasivo";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Persuasivo"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Persuasivo"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["OficioId"] = "Oficio Id";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["OficioId"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["OficioId"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["AlertaTipo"] = "Alerta Tipo";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["AlertaTipo"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["AlertaTipo"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Oficio"] = "Oficio";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Oficio"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Oficio"] = "";
	$fieldLabelspersuasivosautomaticos["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipspersuasivosautomaticos["Spanish"]["Sigobius"] = "";
	$placeHolderspersuasivosautomaticos["Spanish"]["Sigobius"] = "";
	if (count($fieldToolTipspersuasivosautomaticos["Spanish"]))
		$tdatapersuasivosautomaticos[".isUseToolTips"] = true;
}


	$tdatapersuasivosautomaticos[".NCSearch"] = true;



$tdatapersuasivosautomaticos[".shortTableName"] = "persuasivosautomaticos";
$tdatapersuasivosautomaticos[".nSecOptions"] = 0;

$tdatapersuasivosautomaticos[".mainTableOwnerID"] = "";
$tdatapersuasivosautomaticos[".entityType"] = 6;
$tdatapersuasivosautomaticos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapersuasivosautomaticos[".strOriginalTableName"] = "PersuasivosAutomaticos";

	



$tdatapersuasivosautomaticos[".showAddInPopup"] = false;

$tdatapersuasivosautomaticos[".showEditInPopup"] = false;

$tdatapersuasivosautomaticos[".showViewInPopup"] = false;

$tdatapersuasivosautomaticos[".listAjax"] = false;
//	temporary
//$tdatapersuasivosautomaticos[".listAjax"] = false;

	$tdatapersuasivosautomaticos[".audit"] = false;

	$tdatapersuasivosautomaticos[".locking"] = false;


$pages = $tdatapersuasivosautomaticos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersuasivosautomaticos[".edit"] = true;
	$tdatapersuasivosautomaticos[".afterEditAction"] = 1;
	$tdatapersuasivosautomaticos[".closePopupAfterEdit"] = 1;
	$tdatapersuasivosautomaticos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersuasivosautomaticos[".add"] = true;
$tdatapersuasivosautomaticos[".afterAddAction"] = 1;
$tdatapersuasivosautomaticos[".closePopupAfterAdd"] = 1;
$tdatapersuasivosautomaticos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersuasivosautomaticos[".list"] = true;
}



$tdatapersuasivosautomaticos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersuasivosautomaticos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersuasivosautomaticos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersuasivosautomaticos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersuasivosautomaticos[".printFriendly"] = true;
}



$tdatapersuasivosautomaticos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersuasivosautomaticos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersuasivosautomaticos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersuasivosautomaticos[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatapersuasivosautomaticos[".ajaxCodeSnippetAdded"] = false;

$tdatapersuasivosautomaticos[".buttonsAdded"] = false;

$tdatapersuasivosautomaticos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersuasivosautomaticos[".isUseTimeForSearch"] = false;


$tdatapersuasivosautomaticos[".badgeColor"] = "DAA520";


$tdatapersuasivosautomaticos[".allSearchFields"] = array();
$tdatapersuasivosautomaticos[".filterFields"] = array();
$tdatapersuasivosautomaticos[".requiredSearchFields"] = array();

$tdatapersuasivosautomaticos[".googleLikeFields"] = array();
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Numero";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Despacho";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Codificador";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Sancionado";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "SancionadoDocumento";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Masculino";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Persuasivo";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "OficioId";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "AlertaTipo";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Oficio";
$tdatapersuasivosautomaticos[".googleLikeFields"][] = "Sigobius";




$tdatapersuasivosautomaticos[".printerPageOrientation"] = 0;
$tdatapersuasivosautomaticos[".nPrinterPageScale"] = 100;

$tdatapersuasivosautomaticos[".nPrinterSplitRecords"] = 40;

$tdatapersuasivosautomaticos[".geocodingEnabled"] = false;










$tdatapersuasivosautomaticos[".pageSize"] = 20;

$tdatapersuasivosautomaticos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersuasivosautomaticos[".strOrderBy"] = $tstrOrderBy;

$tdatapersuasivosautomaticos[".orderindexes"] = array();


$tdatapersuasivosautomaticos[".sqlHead"] = "";
$tdatapersuasivosautomaticos[".sqlFrom"] = "";
$tdatapersuasivosautomaticos[".sqlWhereExpr"] = "";
$tdatapersuasivosautomaticos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersuasivosautomaticos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersuasivosautomaticos[".arrGroupsPerPage"] = $arrGPP;

$tdatapersuasivosautomaticos[".highlightSearchResults"] = true;

$tableKeyspersuasivosautomaticos = array();
$tableKeyspersuasivosautomaticos[] = "Numero";
$tableKeyspersuasivosautomaticos[] = "OficioId";
$tdatapersuasivosautomaticos[".Keys"] = $tableKeyspersuasivosautomaticos;


$tdatapersuasivosautomaticos[".hideMobileList"] = array();




//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

	
		$fdata["FullName"] = "Numero";

	
	
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


	$tdatapersuasivosautomaticos["Numero"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Numero";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["FullName"] = "Despacho";

	
	
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


	$tdatapersuasivosautomaticos["Despacho"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Despacho";
//	Codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Codificador";
	$fdata["GoodName"] = "Codificador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Codificador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codificador";

	
		$fdata["FullName"] = "Codificador";

	
	
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


	$tdatapersuasivosautomaticos["Codificador"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Codificador";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Sancionado");
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


	$tdatapersuasivosautomaticos["Sancionado"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","SancionadoDocumento");
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


	$tdatapersuasivosautomaticos["SancionadoDocumento"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "SancionadoDocumento";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Masculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Masculino";

	
		$fdata["FullName"] = "Masculino";

	
	
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


	$tdatapersuasivosautomaticos["Masculino"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Masculino";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Persuasivo");
	$fdata["FieldType"] = 133;


	
	
			

		$fdata["strField"] = "Persuasivo";

	
		$fdata["FullName"] = "Persuasivo";

	
	
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


	$tdatapersuasivosautomaticos["Persuasivo"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Persuasivo";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

	
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


	$tdatapersuasivosautomaticos["OficioId"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "OficioId";
//	AlertaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AlertaTipo";
	$fdata["GoodName"] = "AlertaTipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","AlertaTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AlertaTipo";

	
		$fdata["FullName"] = "AlertaTipo";

	
	
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


	$tdatapersuasivosautomaticos["AlertaTipo"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "AlertaTipo";
//	Oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Oficio";
	$fdata["GoodName"] = "Oficio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Oficio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficio";

	
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


	$tdatapersuasivosautomaticos["Oficio"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Oficio";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PersuasivosAutomaticos","Sigobius");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Sigobius";

	
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


	$tdatapersuasivosautomaticos["Sigobius"] = $fdata;
		$tdatapersuasivosautomaticos[".searchableFields"][] = "Sigobius";


$tables_data["PersuasivosAutomaticos"]=&$tdatapersuasivosautomaticos;
$field_labels["PersuasivosAutomaticos"] = &$fieldLabelspersuasivosautomaticos;
$fieldToolTips["PersuasivosAutomaticos"] = &$fieldToolTipspersuasivosautomaticos;
$placeHolders["PersuasivosAutomaticos"] = &$placeHolderspersuasivosautomaticos;
$page_titles["PersuasivosAutomaticos"] = &$pageTitlespersuasivosautomaticos;


changeTextControlsToDate( "PersuasivosAutomaticos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["PersuasivosAutomaticos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["PersuasivosAutomaticos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/persuasivosautomaticos_ops.php" ) );



	
		;

											

$tdatapersuasivosautomaticos[".sqlquery"] = $queryData_persuasivosautomaticos;



include_once(getabspath("include/persuasivosautomaticos_events.php"));
$tdatapersuasivosautomaticos[".hasEvents"] = true;

?>