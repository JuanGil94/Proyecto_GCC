<?php
$tdatanaturalezas = array();
$tdatanaturalezas[".searchableFields"] = array();
$tdatanaturalezas[".ShortName"] = "naturalezas";
$tdatanaturalezas[".OwnerID"] = "";
$tdatanaturalezas[".OriginalTable"] = "dbo.Naturalezas";


$tdatanaturalezas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanaturalezas[".originalPagesByType"] = $tdatanaturalezas[".pagesByType"];
$tdatanaturalezas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanaturalezas[".originalPages"] = $tdatanaturalezas[".pages"];
$tdatanaturalezas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanaturalezas[".originalDefaultPages"] = $tdatanaturalezas[".defaultPages"];

//	field labels
$fieldLabelsnaturalezas = array();
$fieldToolTipsnaturalezas = array();
$pageTitlesnaturalezas = array();
$placeHoldersnaturalezas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnaturalezas["Spanish"] = array();
	$fieldToolTipsnaturalezas["Spanish"] = array();
	$placeHoldersnaturalezas["Spanish"] = array();
	$pageTitlesnaturalezas["Spanish"] = array();
	$fieldLabelsnaturalezas["Spanish"]["NaturalezaId"] = "Naturaleza Id";
	$fieldToolTipsnaturalezas["Spanish"]["NaturalezaId"] = "";
	$placeHoldersnaturalezas["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsnaturalezas["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipsnaturalezas["Spanish"]["Naturaleza"] = "";
	$placeHoldersnaturalezas["Spanish"]["Naturaleza"] = "";
	$fieldLabelsnaturalezas["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsnaturalezas["Spanish"]["ConceptoId"] = "";
	$placeHoldersnaturalezas["Spanish"]["ConceptoId"] = "";
	$fieldLabelsnaturalezas["Spanish"]["TasaTipo"] = "Tasa Tipo";
	$fieldToolTipsnaturalezas["Spanish"]["TasaTipo"] = "";
	$placeHoldersnaturalezas["Spanish"]["TasaTipo"] = "";
	$fieldLabelsnaturalezas["Spanish"]["Activa"] = "Activa";
	$fieldToolTipsnaturalezas["Spanish"]["Activa"] = "";
	$placeHoldersnaturalezas["Spanish"]["Activa"] = "";
	if (count($fieldToolTipsnaturalezas["Spanish"]))
		$tdatanaturalezas[".isUseToolTips"] = true;
}


	$tdatanaturalezas[".NCSearch"] = true;



$tdatanaturalezas[".shortTableName"] = "naturalezas";
$tdatanaturalezas[".nSecOptions"] = 0;

$tdatanaturalezas[".mainTableOwnerID"] = "";
$tdatanaturalezas[".entityType"] = 0;
$tdatanaturalezas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatanaturalezas[".strOriginalTableName"] = "dbo.Naturalezas";

	



$tdatanaturalezas[".showAddInPopup"] = false;

$tdatanaturalezas[".showEditInPopup"] = false;

$tdatanaturalezas[".showViewInPopup"] = false;

$tdatanaturalezas[".listAjax"] = false;
//	temporary
//$tdatanaturalezas[".listAjax"] = false;

	$tdatanaturalezas[".audit"] = true;

	$tdatanaturalezas[".locking"] = false;


$pages = $tdatanaturalezas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanaturalezas[".edit"] = true;
	$tdatanaturalezas[".afterEditAction"] = 1;
	$tdatanaturalezas[".closePopupAfterEdit"] = 1;
	$tdatanaturalezas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanaturalezas[".add"] = true;
$tdatanaturalezas[".afterAddAction"] = 1;
$tdatanaturalezas[".closePopupAfterAdd"] = 1;
$tdatanaturalezas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanaturalezas[".list"] = true;
}



$tdatanaturalezas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanaturalezas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanaturalezas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanaturalezas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanaturalezas[".printFriendly"] = true;
}



$tdatanaturalezas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanaturalezas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanaturalezas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanaturalezas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																								

$tdatanaturalezas[".ajaxCodeSnippetAdded"] = false;

$tdatanaturalezas[".buttonsAdded"] = false;

$tdatanaturalezas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanaturalezas[".isUseTimeForSearch"] = false;


$tdatanaturalezas[".badgeColor"] = "4682B4";


$tdatanaturalezas[".allSearchFields"] = array();
$tdatanaturalezas[".filterFields"] = array();
$tdatanaturalezas[".requiredSearchFields"] = array();

$tdatanaturalezas[".googleLikeFields"] = array();
$tdatanaturalezas[".googleLikeFields"][] = "NaturalezaId";
$tdatanaturalezas[".googleLikeFields"][] = "Naturaleza";
$tdatanaturalezas[".googleLikeFields"][] = "ConceptoId";
$tdatanaturalezas[".googleLikeFields"][] = "TasaTipo";
$tdatanaturalezas[".googleLikeFields"][] = "Activa";



$tdatanaturalezas[".tableType"] = "list";

$tdatanaturalezas[".printerPageOrientation"] = 0;
$tdatanaturalezas[".nPrinterPageScale"] = 100;

$tdatanaturalezas[".nPrinterSplitRecords"] = 40;

$tdatanaturalezas[".geocodingEnabled"] = false;





$tdatanaturalezas[".isResizeColumns"] = true;





$tdatanaturalezas[".pageSize"] = 20;

$tdatanaturalezas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanaturalezas[".strOrderBy"] = $tstrOrderBy;

$tdatanaturalezas[".orderindexes"] = array();


$tdatanaturalezas[".sqlHead"] = "SELECT NaturalezaId,  	Naturaleza,  	ConceptoId,  	TasaTipo,  	Activa";
$tdatanaturalezas[".sqlFrom"] = "FROM dbo.Naturalezas";
$tdatanaturalezas[".sqlWhereExpr"] = "";
$tdatanaturalezas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanaturalezas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanaturalezas[".arrGroupsPerPage"] = $arrGPP;

$tdatanaturalezas[".highlightSearchResults"] = true;

$tableKeysnaturalezas = array();
$tableKeysnaturalezas[] = "NaturalezaId";
$tdatanaturalezas[".Keys"] = $tableKeysnaturalezas;


$tdatanaturalezas[".hideMobileList"] = array();




//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas","NaturalezaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NaturalezaId";

	
	
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


	$tdatanaturalezas["NaturalezaId"] = $fdata;
		$tdatanaturalezas[".searchableFields"][] = "NaturalezaId";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas","Naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Naturaleza";

		$fdata["sourceSingle"] = "Naturaleza";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Naturaleza";

	
	
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


	$tdatanaturalezas["Naturaleza"] = $fdata;
		$tdatanaturalezas[".searchableFields"][] = "Naturaleza";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas","ConceptoId");
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


	$tdatanaturalezas["ConceptoId"] = $fdata;
		$tdatanaturalezas[".searchableFields"][] = "ConceptoId";
//	TasaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TasaTipo";
	$fdata["GoodName"] = "TasaTipo";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas","TasaTipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TasaTipo";

		$fdata["sourceSingle"] = "TasaTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TasaTipo";

	
	
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
	$edata["LookupTable"] = "dbo.tipoTasas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TipoTasas";

	

	
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


	$tdatanaturalezas["TasaTipo"] = $fdata;
		$tdatanaturalezas[".searchableFields"][] = "TasaTipo";
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Naturalezas","Activa");
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


	$tdatanaturalezas["Activa"] = $fdata;
		$tdatanaturalezas[".searchableFields"][] = "Activa";


$tables_data["dbo.Naturalezas"]=&$tdatanaturalezas;
$field_labels["dbo_Naturalezas"] = &$fieldLabelsnaturalezas;
$fieldToolTips["dbo_Naturalezas"] = &$fieldToolTipsnaturalezas;
$placeHolders["dbo_Naturalezas"] = &$placeHoldersnaturalezas;
$page_titles["dbo_Naturalezas"] = &$pageTitlesnaturalezas;


changeTextControlsToDate( "dbo.Naturalezas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Naturalezas"] = array();
//	dbo.Procesos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Naturalezas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Naturalezas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Naturalezas"][$dIndex]["masterKeys"][]="NaturalezaId";

				$detailsTablesData["dbo.Naturalezas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Naturalezas"][$dIndex]["detailKeys"][]="NaturalezaId";
//	dbo.ProcesosReasignar
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosReasignar";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesosreasignar";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosReasignar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Naturalezas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Naturalezas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Naturalezas"][$dIndex]["masterKeys"][]="NaturalezaId";

				$detailsTablesData["dbo.Naturalezas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Naturalezas"][$dIndex]["detailKeys"][]="NaturalezaId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Naturalezas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Conceptos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Conceptos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Naturalezas"][0] = $masterParams;
				$masterTablesData["dbo.Naturalezas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Naturalezas"][0]["masterKeys"][]="ConceptoId";
				$masterTablesData["dbo.Naturalezas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Naturalezas"][0]["detailKeys"][]="ConceptoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_naturalezas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NaturalezaId,  	Naturaleza,  	ConceptoId,  	TasaTipo,  	Activa";
$proto0["m_strFrom"] = "FROM dbo.Naturalezas";
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
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas"
));

$proto6["m_sql"] = "NaturalezaId";
$proto6["m_srcTableName"] = "dbo.Naturalezas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas"
));

$proto8["m_sql"] = "Naturaleza";
$proto8["m_srcTableName"] = "dbo.Naturalezas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas"
));

$proto10["m_sql"] = "ConceptoId";
$proto10["m_srcTableName"] = "dbo.Naturalezas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TasaTipo",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas"
));

$proto12["m_sql"] = "TasaTipo";
$proto12["m_srcTableName"] = "dbo.Naturalezas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Naturalezas",
	"m_srcTableName" => "dbo.Naturalezas"
));

$proto14["m_sql"] = "Activa";
$proto14["m_srcTableName"] = "dbo.Naturalezas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Naturalezas";
$proto17["m_srcTableName"] = "dbo.Naturalezas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "NaturalezaId";
$proto17["m_columns"][] = "Naturaleza";
$proto17["m_columns"][] = "ConceptoId";
$proto17["m_columns"][] = "TasaTipo";
$proto17["m_columns"][] = "Activa";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Naturalezas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Naturalezas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Naturalezas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_naturalezas = createSqlQuery_naturalezas();


	
		;

					

$tdatanaturalezas[".sqlquery"] = $queryData_naturalezas;



$tdatanaturalezas[".hasEvents"] = false;

?>