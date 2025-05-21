<?php
$tdataalertas = array();
$tdataalertas[".searchableFields"] = array();
$tdataalertas[".ShortName"] = "alertas";
$tdataalertas[".OwnerID"] = "";
$tdataalertas[".OriginalTable"] = "dbo.Alertas";


$tdataalertas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataalertas[".originalPagesByType"] = $tdataalertas[".pagesByType"];
$tdataalertas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataalertas[".originalPages"] = $tdataalertas[".pages"];
$tdataalertas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataalertas[".originalDefaultPages"] = $tdataalertas[".defaultPages"];

//	field labels
$fieldLabelsalertas = array();
$fieldToolTipsalertas = array();
$pageTitlesalertas = array();
$placeHoldersalertas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalertas["Spanish"] = array();
	$fieldToolTipsalertas["Spanish"] = array();
	$placeHoldersalertas["Spanish"] = array();
	$pageTitlesalertas["Spanish"] = array();
	$fieldLabelsalertas["Spanish"]["AlertaId"] = "Alerta Id";
	$fieldToolTipsalertas["Spanish"]["AlertaId"] = "";
	$placeHoldersalertas["Spanish"]["AlertaId"] = "";
	$fieldLabelsalertas["Spanish"]["AlertaTipoId"] = "Tipo de Alerta";
	$fieldToolTipsalertas["Spanish"]["AlertaTipoId"] = "";
	$placeHoldersalertas["Spanish"]["AlertaTipoId"] = "";
	$fieldLabelsalertas["Spanish"]["Dias"] = "Dias Vencimiento";
	$fieldToolTipsalertas["Spanish"]["Dias"] = "";
	$placeHoldersalertas["Spanish"]["Dias"] = "";
	$fieldLabelsalertas["Spanish"]["ActuacionId"] = "Actuacion a Generar";
	$fieldToolTipsalertas["Spanish"]["ActuacionId"] = "";
	$placeHoldersalertas["Spanish"]["ActuacionId"] = "";
	$fieldLabelsalertas["Spanish"]["Activa"] = "Activa";
	$fieldToolTipsalertas["Spanish"]["Activa"] = "";
	$placeHoldersalertas["Spanish"]["Activa"] = "";
	$fieldLabelsalertas["Spanish"]["Publicar"] = "Publicar";
	$fieldToolTipsalertas["Spanish"]["Publicar"] = "";
	$placeHoldersalertas["Spanish"]["Publicar"] = "";
	$pageTitlesalertas["Spanish"]["edit"] = "Alertas";
	$pageTitlesalertas["Spanish"]["add"] = "Alertas";
	if (count($fieldToolTipsalertas["Spanish"]))
		$tdataalertas[".isUseToolTips"] = true;
}


	$tdataalertas[".NCSearch"] = true;



$tdataalertas[".shortTableName"] = "alertas";
$tdataalertas[".nSecOptions"] = 0;

$tdataalertas[".mainTableOwnerID"] = "";
$tdataalertas[".entityType"] = 0;
$tdataalertas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataalertas[".strOriginalTableName"] = "dbo.Alertas";

	



$tdataalertas[".showAddInPopup"] = false;

$tdataalertas[".showEditInPopup"] = false;

$tdataalertas[".showViewInPopup"] = false;

$tdataalertas[".listAjax"] = false;
//	temporary
//$tdataalertas[".listAjax"] = false;

	$tdataalertas[".audit"] = false;

	$tdataalertas[".locking"] = false;


$pages = $tdataalertas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalertas[".edit"] = true;
	$tdataalertas[".afterEditAction"] = 1;
	$tdataalertas[".closePopupAfterEdit"] = 1;
	$tdataalertas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalertas[".add"] = true;
$tdataalertas[".afterAddAction"] = 1;
$tdataalertas[".closePopupAfterAdd"] = 1;
$tdataalertas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalertas[".list"] = true;
}



$tdataalertas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalertas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalertas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalertas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalertas[".printFriendly"] = true;
}



$tdataalertas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalertas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalertas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalertas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
																																																																																																																																																																																			

$tdataalertas[".ajaxCodeSnippetAdded"] = false;

$tdataalertas[".buttonsAdded"] = true;

$tdataalertas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalertas[".isUseTimeForSearch"] = false;


$tdataalertas[".badgeColor"] = "CD5C5C";


$tdataalertas[".allSearchFields"] = array();
$tdataalertas[".filterFields"] = array();
$tdataalertas[".requiredSearchFields"] = array();

$tdataalertas[".googleLikeFields"] = array();
$tdataalertas[".googleLikeFields"][] = "AlertaTipoId";
$tdataalertas[".googleLikeFields"][] = "Dias";
$tdataalertas[".googleLikeFields"][] = "ActuacionId";
$tdataalertas[".googleLikeFields"][] = "Activa";
$tdataalertas[".googleLikeFields"][] = "Publicar";



$tdataalertas[".tableType"] = "list";

$tdataalertas[".printerPageOrientation"] = 0;
$tdataalertas[".nPrinterPageScale"] = 100;

$tdataalertas[".nPrinterSplitRecords"] = 40;

$tdataalertas[".geocodingEnabled"] = false;




$tdataalertas[".isDisplayLoading"] = true;

$tdataalertas[".isResizeColumns"] = true;





$tdataalertas[".pageSize"] = 20;

$tdataalertas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalertas[".strOrderBy"] = $tstrOrderBy;

$tdataalertas[".orderindexes"] = array();


$tdataalertas[".sqlHead"] = "SELECT AlertaId,  	AlertaTipoId,  	Dias,  	ActuacionId,  	Activa,  	Publicar";
$tdataalertas[".sqlFrom"] = "FROM dbo.Alertas";
$tdataalertas[".sqlWhereExpr"] = "";
$tdataalertas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataalertas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalertas[".arrGroupsPerPage"] = $arrGPP;

$tdataalertas[".highlightSearchResults"] = true;

$tableKeysalertas = array();
$tableKeysalertas[] = "AlertaId";
$tdataalertas[".Keys"] = $tableKeysalertas;


$tdataalertas[".hideMobileList"] = array();




//	AlertaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AlertaId";
	$fdata["GoodName"] = "AlertaId";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","AlertaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataalertas["AlertaId"] = $fdata;
		$tdataalertas[".searchableFields"][] = "AlertaId";
//	AlertaTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AlertaTipoId";
	$fdata["GoodName"] = "AlertaTipoId";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","AlertaTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AlertaTipoId";

		$fdata["sourceSingle"] = "AlertaTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaTipoId";

	
	
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
	$edata["LookupTable"] = "dbo.AlertasTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AlertaTipoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "AlertaTipo";

	

	
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


	$tdataalertas["AlertaTipoId"] = $fdata;
		$tdataalertas[".searchableFields"][] = "AlertaTipoId";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dias";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Validar_numeros_No_negativos", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataalertas["Dias"] = $fdata;
		$tdataalertas[".searchableFields"][] = "Dias";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","ActuacionId");
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


	$tdataalertas["ActuacionId"] = $fdata;
		$tdataalertas[".searchableFields"][] = "ActuacionId";
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","Activa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activa";

		$fdata["sourceSingle"] = "Activa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activa";

	
	
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


	$tdataalertas["Activa"] = $fdata;
		$tdataalertas[".searchableFields"][] = "Activa";
//	Publicar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Publicar";
	$fdata["GoodName"] = "Publicar";
	$fdata["ownerTable"] = "dbo.Alertas";
	$fdata["Label"] = GetFieldLabel("dbo_Alertas","Publicar");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Publicar";

		$fdata["sourceSingle"] = "Publicar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Publicar";

	
	
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


	$tdataalertas["Publicar"] = $fdata;
		$tdataalertas[".searchableFields"][] = "Publicar";


$tables_data["dbo.Alertas"]=&$tdataalertas;
$field_labels["dbo_Alertas"] = &$fieldLabelsalertas;
$fieldToolTips["dbo_Alertas"] = &$fieldToolTipsalertas;
$placeHolders["dbo_Alertas"] = &$placeHoldersalertas;
$page_titles["dbo_Alertas"] = &$pageTitlesalertas;


changeTextControlsToDate( "dbo.Alertas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Alertas"] = array();
//	dbo.Aplazamientos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Aplazamientos";
		$detailsParam["dOriginalTable"] = "dbo.Aplazamientos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "aplazamientos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Aplazamientos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Alertas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Alertas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Alertas"][$dIndex]["masterKeys"][]="AlertaId";

				$detailsTablesData["dbo.Alertas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Alertas"][$dIndex]["detailKeys"][]="AlertaId";
//	dbo.AlertasOficios
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.AlertasOficios";
		$detailsParam["dOriginalTable"] = "dbo.AlertasOficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alertasoficios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_AlertasOficios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Alertas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Alertas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Alertas"][$dIndex]["masterKeys"][]="AlertaId";

				$detailsTablesData["dbo.Alertas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Alertas"][$dIndex]["detailKeys"][]="AlertaId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Alertas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.AlertasTipos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.AlertasTipos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alertastipos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Alertas"][0] = $masterParams;
				$masterTablesData["dbo.Alertas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Alertas"][0]["masterKeys"][]="AlertaTipoId";
				$masterTablesData["dbo.Alertas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Alertas"][0]["detailKeys"][]="AlertaTipoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Alertas"][1] = $masterParams;
				$masterTablesData["dbo.Alertas"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Alertas"][1]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Alertas"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Alertas"][1]["detailKeys"][]="ActuacionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alertas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AlertaId,  	AlertaTipoId,  	Dias,  	ActuacionId,  	Activa,  	Publicar";
$proto0["m_strFrom"] = "FROM dbo.Alertas";
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
	"m_strName" => "AlertaId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto6["m_sql"] = "AlertaId";
$proto6["m_srcTableName"] = "dbo.Alertas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AlertaTipoId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto8["m_sql"] = "AlertaTipoId";
$proto8["m_srcTableName"] = "dbo.Alertas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto10["m_sql"] = "Dias";
$proto10["m_srcTableName"] = "dbo.Alertas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto12["m_sql"] = "ActuacionId";
$proto12["m_srcTableName"] = "dbo.Alertas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto14["m_sql"] = "Activa";
$proto14["m_srcTableName"] = "dbo.Alertas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Publicar",
	"m_strTable" => "dbo.Alertas",
	"m_srcTableName" => "dbo.Alertas"
));

$proto16["m_sql"] = "Publicar";
$proto16["m_srcTableName"] = "dbo.Alertas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Alertas";
$proto19["m_srcTableName"] = "dbo.Alertas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "AlertaId";
$proto19["m_columns"][] = "AlertaTipoId";
$proto19["m_columns"][] = "Dias";
$proto19["m_columns"][] = "ActuacionId";
$proto19["m_columns"][] = "Activa";
$proto19["m_columns"][] = "Publicar";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Alertas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Alertas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Alertas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alertas = createSqlQuery_alertas();


	
		;

						

$tdataalertas[".sqlquery"] = $queryData_alertas;



$tdataalertas[".hasEvents"] = false;

?>