<?php
$tdatainterrupciones = array();
$tdatainterrupciones[".searchableFields"] = array();
$tdatainterrupciones[".ShortName"] = "interrupciones";
$tdatainterrupciones[".OwnerID"] = "";
$tdatainterrupciones[".OriginalTable"] = "dbo.Interrupciones";


$tdatainterrupciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainterrupciones[".originalPagesByType"] = $tdatainterrupciones[".pagesByType"];
$tdatainterrupciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainterrupciones[".originalPages"] = $tdatainterrupciones[".pages"];
$tdatainterrupciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainterrupciones[".originalDefaultPages"] = $tdatainterrupciones[".defaultPages"];

//	field labels
$fieldLabelsinterrupciones = array();
$fieldToolTipsinterrupciones = array();
$pageTitlesinterrupciones = array();
$placeHoldersinterrupciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinterrupciones["Spanish"] = array();
	$fieldToolTipsinterrupciones["Spanish"] = array();
	$placeHoldersinterrupciones["Spanish"] = array();
	$pageTitlesinterrupciones["Spanish"] = array();
	$fieldLabelsinterrupciones["Spanish"]["InterrupcionId"] = "Interrupcion Id";
	$fieldToolTipsinterrupciones["Spanish"]["InterrupcionId"] = "";
	$placeHoldersinterrupciones["Spanish"]["InterrupcionId"] = "";
	$fieldLabelsinterrupciones["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsinterrupciones["Spanish"]["ProcesoId"] = "";
	$placeHoldersinterrupciones["Spanish"]["ProcesoId"] = "";
	$fieldLabelsinterrupciones["Spanish"]["Inicio"] = "Inicio";
	$fieldToolTipsinterrupciones["Spanish"]["Inicio"] = "";
	$placeHoldersinterrupciones["Spanish"]["Inicio"] = "";
	$fieldLabelsinterrupciones["Spanish"]["Finalizacion"] = "Finalizacion";
	$fieldToolTipsinterrupciones["Spanish"]["Finalizacion"] = "";
	$placeHoldersinterrupciones["Spanish"]["Finalizacion"] = "";
	$fieldLabelsinterrupciones["Spanish"]["Suspension"] = "Suspension";
	$fieldToolTipsinterrupciones["Spanish"]["Suspension"] = "";
	$placeHoldersinterrupciones["Spanish"]["Suspension"] = "";
	if (count($fieldToolTipsinterrupciones["Spanish"]))
		$tdatainterrupciones[".isUseToolTips"] = true;
}


	$tdatainterrupciones[".NCSearch"] = true;



$tdatainterrupciones[".shortTableName"] = "interrupciones";
$tdatainterrupciones[".nSecOptions"] = 0;

$tdatainterrupciones[".mainTableOwnerID"] = "";
$tdatainterrupciones[".entityType"] = 0;
$tdatainterrupciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatainterrupciones[".strOriginalTableName"] = "dbo.Interrupciones";

	



$tdatainterrupciones[".showAddInPopup"] = false;

$tdatainterrupciones[".showEditInPopup"] = false;

$tdatainterrupciones[".showViewInPopup"] = false;

$tdatainterrupciones[".listAjax"] = false;
//	temporary
//$tdatainterrupciones[".listAjax"] = false;

	$tdatainterrupciones[".audit"] = true;

	$tdatainterrupciones[".locking"] = false;


$pages = $tdatainterrupciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainterrupciones[".edit"] = true;
	$tdatainterrupciones[".afterEditAction"] = 1;
	$tdatainterrupciones[".closePopupAfterEdit"] = 1;
	$tdatainterrupciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainterrupciones[".add"] = true;
$tdatainterrupciones[".afterAddAction"] = 1;
$tdatainterrupciones[".closePopupAfterAdd"] = 1;
$tdatainterrupciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainterrupciones[".list"] = true;
}



$tdatainterrupciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainterrupciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainterrupciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainterrupciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainterrupciones[".printFriendly"] = true;
}



$tdatainterrupciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainterrupciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainterrupciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainterrupciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdatainterrupciones[".ajaxCodeSnippetAdded"] = false;

$tdatainterrupciones[".buttonsAdded"] = false;

$tdatainterrupciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainterrupciones[".isUseTimeForSearch"] = false;


$tdatainterrupciones[".badgeColor"] = "7b68ee";


$tdatainterrupciones[".allSearchFields"] = array();
$tdatainterrupciones[".filterFields"] = array();
$tdatainterrupciones[".requiredSearchFields"] = array();

$tdatainterrupciones[".googleLikeFields"] = array();
$tdatainterrupciones[".googleLikeFields"][] = "InterrupcionId";
$tdatainterrupciones[".googleLikeFields"][] = "ProcesoId";
$tdatainterrupciones[".googleLikeFields"][] = "Inicio";
$tdatainterrupciones[".googleLikeFields"][] = "Finalizacion";
$tdatainterrupciones[".googleLikeFields"][] = "Suspension";



$tdatainterrupciones[".tableType"] = "list";

$tdatainterrupciones[".printerPageOrientation"] = 0;
$tdatainterrupciones[".nPrinterPageScale"] = 100;

$tdatainterrupciones[".nPrinterSplitRecords"] = 40;

$tdatainterrupciones[".geocodingEnabled"] = false;





$tdatainterrupciones[".isResizeColumns"] = true;





$tdatainterrupciones[".pageSize"] = 20;

$tdatainterrupciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainterrupciones[".strOrderBy"] = $tstrOrderBy;

$tdatainterrupciones[".orderindexes"] = array();


$tdatainterrupciones[".sqlHead"] = "SELECT InterrupcionId,  	ProcesoId,  	Inicio,  	Finalizacion,  	Suspension";
$tdatainterrupciones[".sqlFrom"] = "FROM dbo.Interrupciones";
$tdatainterrupciones[".sqlWhereExpr"] = "";
$tdatainterrupciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainterrupciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainterrupciones[".arrGroupsPerPage"] = $arrGPP;

$tdatainterrupciones[".highlightSearchResults"] = true;

$tableKeysinterrupciones = array();
$tableKeysinterrupciones[] = "InterrupcionId";
$tdatainterrupciones[".Keys"] = $tableKeysinterrupciones;


$tdatainterrupciones[".hideMobileList"] = array();




//	InterrupcionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "InterrupcionId";
	$fdata["GoodName"] = "InterrupcionId";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Interrupciones","InterrupcionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "InterrupcionId";

		$fdata["sourceSingle"] = "InterrupcionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterrupcionId";

	
	
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


	$tdatainterrupciones["InterrupcionId"] = $fdata;
		$tdatainterrupciones[".searchableFields"][] = "InterrupcionId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Interrupciones","ProcesoId");
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


	$tdatainterrupciones["ProcesoId"] = $fdata;
		$tdatainterrupciones[".searchableFields"][] = "ProcesoId";
//	Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Inicio";
	$fdata["GoodName"] = "Inicio";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Interrupciones","Inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Inicio";

		$fdata["sourceSingle"] = "Inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inicio";

	
	
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


	$tdatainterrupciones["Inicio"] = $fdata;
		$tdatainterrupciones[".searchableFields"][] = "Inicio";
//	Finalizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Finalizacion";
	$fdata["GoodName"] = "Finalizacion";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Interrupciones","Finalizacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Finalizacion";

		$fdata["sourceSingle"] = "Finalizacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Finalizacion";

	
	
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


	$tdatainterrupciones["Finalizacion"] = $fdata;
		$tdatainterrupciones[".searchableFields"][] = "Finalizacion";
//	Suspension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Suspension";
	$fdata["GoodName"] = "Suspension";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Interrupciones","Suspension");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Suspension";

		$fdata["sourceSingle"] = "Suspension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suspension";

	
	
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


	$tdatainterrupciones["Suspension"] = $fdata;
		$tdatainterrupciones[".searchableFields"][] = "Suspension";


$tables_data["dbo.Interrupciones"]=&$tdatainterrupciones;
$field_labels["dbo_Interrupciones"] = &$fieldLabelsinterrupciones;
$fieldToolTips["dbo_Interrupciones"] = &$fieldToolTipsinterrupciones;
$placeHolders["dbo_Interrupciones"] = &$placeHoldersinterrupciones;
$page_titles["dbo_Interrupciones"] = &$pageTitlesinterrupciones;


changeTextControlsToDate( "dbo.Interrupciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Interrupciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Interrupciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Interrupciones"][0] = $masterParams;
				$masterTablesData["dbo.Interrupciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Interrupciones"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Interrupciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Interrupciones"][0]["detailKeys"][]="ProcesoId";
		
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
					$masterTablesData["dbo.Interrupciones"][1] = $masterParams;
				$masterTablesData["dbo.Interrupciones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Interrupciones"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Interrupciones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Interrupciones"][1]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_interrupciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "InterrupcionId,  	ProcesoId,  	Inicio,  	Finalizacion,  	Suspension";
$proto0["m_strFrom"] = "FROM dbo.Interrupciones";
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
	"m_strName" => "InterrupcionId",
	"m_strTable" => "dbo.Interrupciones",
	"m_srcTableName" => "dbo.Interrupciones"
));

$proto6["m_sql"] = "InterrupcionId";
$proto6["m_srcTableName"] = "dbo.Interrupciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Interrupciones",
	"m_srcTableName" => "dbo.Interrupciones"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Interrupciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Inicio",
	"m_strTable" => "dbo.Interrupciones",
	"m_srcTableName" => "dbo.Interrupciones"
));

$proto10["m_sql"] = "Inicio";
$proto10["m_srcTableName"] = "dbo.Interrupciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Finalizacion",
	"m_strTable" => "dbo.Interrupciones",
	"m_srcTableName" => "dbo.Interrupciones"
));

$proto12["m_sql"] = "Finalizacion";
$proto12["m_srcTableName"] = "dbo.Interrupciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Suspension",
	"m_strTable" => "dbo.Interrupciones",
	"m_srcTableName" => "dbo.Interrupciones"
));

$proto14["m_sql"] = "Suspension";
$proto14["m_srcTableName"] = "dbo.Interrupciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Interrupciones";
$proto17["m_srcTableName"] = "dbo.Interrupciones";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "InterrupcionId";
$proto17["m_columns"][] = "ProcesoId";
$proto17["m_columns"][] = "Inicio";
$proto17["m_columns"][] = "Finalizacion";
$proto17["m_columns"][] = "Suspension";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Interrupciones";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Interrupciones";
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
$proto0["m_srcTableName"]="dbo.Interrupciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_interrupciones = createSqlQuery_interrupciones();


	
		;

					

$tdatainterrupciones[".sqlquery"] = $queryData_interrupciones;



$tdatainterrupciones[".hasEvents"] = false;

?>