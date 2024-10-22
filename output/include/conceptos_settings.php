<?php
$tdataconceptos = array();
$tdataconceptos[".searchableFields"] = array();
$tdataconceptos[".ShortName"] = "conceptos";
$tdataconceptos[".OwnerID"] = "";
$tdataconceptos[".OriginalTable"] = "dbo.Conceptos";


$tdataconceptos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconceptos[".originalPagesByType"] = $tdataconceptos[".pagesByType"];
$tdataconceptos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconceptos[".originalPages"] = $tdataconceptos[".pages"];
$tdataconceptos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconceptos[".originalDefaultPages"] = $tdataconceptos[".defaultPages"];

//	field labels
$fieldLabelsconceptos = array();
$fieldToolTipsconceptos = array();
$pageTitlesconceptos = array();
$placeHoldersconceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos["Spanish"] = array();
	$fieldToolTipsconceptos["Spanish"] = array();
	$placeHoldersconceptos["Spanish"] = array();
	$pageTitlesconceptos["Spanish"] = array();
	$fieldLabelsconceptos["Spanish"]["ConceptoId"] = "Concepto Id";
	$fieldToolTipsconceptos["Spanish"]["ConceptoId"] = "";
	$placeHoldersconceptos["Spanish"]["ConceptoId"] = "";
	$fieldLabelsconceptos["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsconceptos["Spanish"]["Concepto"] = "";
	$placeHoldersconceptos["Spanish"]["Concepto"] = "";
	$fieldLabelsconceptos["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsconceptos["Spanish"]["Activo"] = "";
	$placeHoldersconceptos["Spanish"]["Activo"] = "";
	$fieldLabelsconceptos["Spanish"]["Cuenta"] = "Numero de Cuenta";
	$fieldToolTipsconceptos["Spanish"]["Cuenta"] = "";
	$placeHoldersconceptos["Spanish"]["Cuenta"] = "";
	if (count($fieldToolTipsconceptos["Spanish"]))
		$tdataconceptos[".isUseToolTips"] = true;
}


	$tdataconceptos[".NCSearch"] = true;



$tdataconceptos[".shortTableName"] = "conceptos";
$tdataconceptos[".nSecOptions"] = 0;

$tdataconceptos[".mainTableOwnerID"] = "";
$tdataconceptos[".entityType"] = 0;
$tdataconceptos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconceptos[".strOriginalTableName"] = "dbo.Conceptos";

	



$tdataconceptos[".showAddInPopup"] = false;

$tdataconceptos[".showEditInPopup"] = false;

$tdataconceptos[".showViewInPopup"] = false;

$tdataconceptos[".listAjax"] = false;
//	temporary
//$tdataconceptos[".listAjax"] = false;

	$tdataconceptos[".audit"] = true;

	$tdataconceptos[".locking"] = false;


$pages = $tdataconceptos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos[".edit"] = true;
	$tdataconceptos[".afterEditAction"] = 1;
	$tdataconceptos[".closePopupAfterEdit"] = 1;
	$tdataconceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos[".add"] = true;
$tdataconceptos[".afterAddAction"] = 1;
$tdataconceptos[".closePopupAfterAdd"] = 1;
$tdataconceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos[".list"] = true;
}



$tdataconceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos[".printFriendly"] = true;
}



$tdataconceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataconceptos[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos[".buttonsAdded"] = false;

$tdataconceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos[".isUseTimeForSearch"] = false;


$tdataconceptos[".badgeColor"] = "2F4F4F";


$tdataconceptos[".allSearchFields"] = array();
$tdataconceptos[".filterFields"] = array();
$tdataconceptos[".requiredSearchFields"] = array();

$tdataconceptos[".googleLikeFields"] = array();
$tdataconceptos[".googleLikeFields"][] = "Concepto";
$tdataconceptos[".googleLikeFields"][] = "Activo";
$tdataconceptos[".googleLikeFields"][] = "Cuenta";



$tdataconceptos[".tableType"] = "list";

$tdataconceptos[".printerPageOrientation"] = 0;
$tdataconceptos[".nPrinterPageScale"] = 100;

$tdataconceptos[".nPrinterSplitRecords"] = 40;

$tdataconceptos[".geocodingEnabled"] = false;





$tdataconceptos[".isResizeColumns"] = true;





$tdataconceptos[".pageSize"] = 20;

$tdataconceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconceptos[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos[".orderindexes"] = array();


$tdataconceptos[".sqlHead"] = "SELECT ConceptoId,  	Concepto,  	Activo,  	Cuenta";
$tdataconceptos[".sqlFrom"] = "FROM dbo.Conceptos";
$tdataconceptos[".sqlWhereExpr"] = "";
$tdataconceptos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos[".highlightSearchResults"] = true;

$tableKeysconceptos = array();
$tableKeysconceptos[] = "ConceptoId";
$tdataconceptos[".Keys"] = $tableKeysconceptos;


$tdataconceptos[".hideMobileList"] = array();




//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos","ConceptoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataconceptos["ConceptoId"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "ConceptoId";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["sourceSingle"] = "Concepto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Concepto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataconceptos["Concepto"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "Concepto";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos","Activo");
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


	$tdataconceptos["Activo"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "Activo";
//	Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cuenta";
	$fdata["GoodName"] = "Cuenta";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos","Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuenta";

		$fdata["sourceSingle"] = "Cuenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cuenta";

	
	
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


	$tdataconceptos["Cuenta"] = $fdata;
		$tdataconceptos[".searchableFields"][] = "Cuenta";


$tables_data["dbo.Conceptos"]=&$tdataconceptos;
$field_labels["dbo_Conceptos"] = &$fieldLabelsconceptos;
$fieldToolTips["dbo_Conceptos"] = &$fieldToolTipsconceptos;
$placeHolders["dbo_Conceptos"] = &$placeHoldersconceptos;
$page_titles["dbo_Conceptos"] = &$pageTitlesconceptos;


changeTextControlsToDate( "dbo.Conceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Conceptos"] = array();
//	dbo.Naturalezas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Naturalezas";
		$detailsParam["dOriginalTable"] = "dbo.Naturalezas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "naturalezas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Naturalezas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Conceptos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"][]="ConceptoId";

				$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"][]="ConceptoId";
//	dbo.Procesos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Conceptos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"][]="ConceptoId";

				$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"][]="ConceptoId";
//	dbo.Importaciones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Importaciones";
		$detailsParam["dOriginalTable"] = "dbo.Importaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "importaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Importaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Conceptos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"][]="ConceptoId";

				$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"][]="ConceptoId";
//	dbo.ProcesosReasignar
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosReasignar";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesosreasignar";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosReasignar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Conceptos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["masterKeys"][]="ConceptoId";

				$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Conceptos"][$dIndex]["detailKeys"][]="ConceptoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_conceptos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ConceptoId,  	Concepto,  	Activo,  	Cuenta";
$proto0["m_strFrom"] = "FROM dbo.Conceptos";
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
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos"
));

$proto6["m_sql"] = "ConceptoId";
$proto6["m_srcTableName"] = "dbo.Conceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos"
));

$proto8["m_sql"] = "Concepto";
$proto8["m_srcTableName"] = "dbo.Conceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos"
));

$proto10["m_sql"] = "Activo";
$proto10["m_srcTableName"] = "dbo.Conceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuenta",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos"
));

$proto12["m_sql"] = "Cuenta";
$proto12["m_srcTableName"] = "dbo.Conceptos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.Conceptos";
$proto15["m_srcTableName"] = "dbo.Conceptos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ConceptoId";
$proto15["m_columns"][] = "Concepto";
$proto15["m_columns"][] = "Activo";
$proto15["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.Conceptos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.Conceptos";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Conceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos = createSqlQuery_conceptos();


	
		;

				

$tdataconceptos[".sqlquery"] = $queryData_conceptos;



$tdataconceptos[".hasEvents"] = false;

?>