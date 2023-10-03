<?php
$tdatapresupuestos = array();
$tdatapresupuestos[".searchableFields"] = array();
$tdatapresupuestos[".ShortName"] = "presupuestos";
$tdatapresupuestos[".OwnerID"] = "";
$tdatapresupuestos[".OriginalTable"] = "dbo.Presupuestos";


$tdatapresupuestos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapresupuestos[".originalPagesByType"] = $tdatapresupuestos[".pagesByType"];
$tdatapresupuestos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapresupuestos[".originalPages"] = $tdatapresupuestos[".pages"];
$tdatapresupuestos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapresupuestos[".originalDefaultPages"] = $tdatapresupuestos[".defaultPages"];

//	field labels
$fieldLabelspresupuestos = array();
$fieldToolTipspresupuestos = array();
$pageTitlespresupuestos = array();
$placeHolderspresupuestos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspresupuestos["Spanish"] = array();
	$fieldToolTipspresupuestos["Spanish"] = array();
	$placeHolderspresupuestos["Spanish"] = array();
	$pageTitlespresupuestos["Spanish"] = array();
	$fieldLabelspresupuestos["Spanish"]["PresupuestoId"] = "Presupuesto Id";
	$fieldToolTipspresupuestos["Spanish"]["PresupuestoId"] = "";
	$placeHolderspresupuestos["Spanish"]["PresupuestoId"] = "";
	$fieldLabelspresupuestos["Spanish"]["Ano"] = "Año";
	$fieldToolTipspresupuestos["Spanish"]["Ano"] = "";
	$placeHolderspresupuestos["Spanish"]["Ano"] = "";
	$fieldLabelspresupuestos["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipspresupuestos["Spanish"]["SeccionalId"] = "";
	$placeHolderspresupuestos["Spanish"]["SeccionalId"] = "";
	$fieldLabelspresupuestos["Spanish"]["Meta"] = "Meta";
	$fieldToolTipspresupuestos["Spanish"]["Meta"] = "";
	$placeHolderspresupuestos["Spanish"]["Meta"] = "";
	$fieldLabelspresupuestos["Spanish"]["Procesos"] = "Can. Procesos";
	$fieldToolTipspresupuestos["Spanish"]["Procesos"] = "";
	$placeHolderspresupuestos["Spanish"]["Procesos"] = "";
	if (count($fieldToolTipspresupuestos["Spanish"]))
		$tdatapresupuestos[".isUseToolTips"] = true;
}


	$tdatapresupuestos[".NCSearch"] = true;



$tdatapresupuestos[".shortTableName"] = "presupuestos";
$tdatapresupuestos[".nSecOptions"] = 0;

$tdatapresupuestos[".mainTableOwnerID"] = "";
$tdatapresupuestos[".entityType"] = 0;
$tdatapresupuestos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapresupuestos[".strOriginalTableName"] = "dbo.Presupuestos";

	



$tdatapresupuestos[".showAddInPopup"] = false;

$tdatapresupuestos[".showEditInPopup"] = false;

$tdatapresupuestos[".showViewInPopup"] = false;

$tdatapresupuestos[".listAjax"] = false;
//	temporary
//$tdatapresupuestos[".listAjax"] = false;

	$tdatapresupuestos[".audit"] = true;

	$tdatapresupuestos[".locking"] = false;


$pages = $tdatapresupuestos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapresupuestos[".edit"] = true;
	$tdatapresupuestos[".afterEditAction"] = 1;
	$tdatapresupuestos[".closePopupAfterEdit"] = 1;
	$tdatapresupuestos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapresupuestos[".add"] = true;
$tdatapresupuestos[".afterAddAction"] = 1;
$tdatapresupuestos[".closePopupAfterAdd"] = 1;
$tdatapresupuestos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapresupuestos[".list"] = true;
}



$tdatapresupuestos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapresupuestos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapresupuestos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapresupuestos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapresupuestos[".printFriendly"] = true;
}



$tdatapresupuestos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapresupuestos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapresupuestos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapresupuestos[".isUseAjaxSuggest"] = true;



																														

$tdatapresupuestos[".ajaxCodeSnippetAdded"] = false;

$tdatapresupuestos[".buttonsAdded"] = false;

$tdatapresupuestos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapresupuestos[".isUseTimeForSearch"] = false;


$tdatapresupuestos[".badgeColor"] = "D2691E";


$tdatapresupuestos[".allSearchFields"] = array();
$tdatapresupuestos[".filterFields"] = array();
$tdatapresupuestos[".requiredSearchFields"] = array();

$tdatapresupuestos[".googleLikeFields"] = array();
$tdatapresupuestos[".googleLikeFields"][] = "PresupuestoId";
$tdatapresupuestos[".googleLikeFields"][] = "Ano";
$tdatapresupuestos[".googleLikeFields"][] = "SeccionalId";
$tdatapresupuestos[".googleLikeFields"][] = "Meta";
$tdatapresupuestos[".googleLikeFields"][] = "Procesos";



$tdatapresupuestos[".tableType"] = "list";

$tdatapresupuestos[".printerPageOrientation"] = 0;
$tdatapresupuestos[".nPrinterPageScale"] = 100;

$tdatapresupuestos[".nPrinterSplitRecords"] = 40;

$tdatapresupuestos[".geocodingEnabled"] = false;





$tdatapresupuestos[".isResizeColumns"] = true;





$tdatapresupuestos[".pageSize"] = 20;

$tdatapresupuestos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapresupuestos[".strOrderBy"] = $tstrOrderBy;

$tdatapresupuestos[".orderindexes"] = array();


$tdatapresupuestos[".sqlHead"] = "SELECT PresupuestoId,  	Ano,  	SeccionalId,  	Meta,  	Procesos";
$tdatapresupuestos[".sqlFrom"] = "FROM dbo.Presupuestos";
$tdatapresupuestos[".sqlWhereExpr"] = "";
$tdatapresupuestos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapresupuestos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapresupuestos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapresupuestos[".arrGroupsPerPage"] = $arrGPP;

$tdatapresupuestos[".highlightSearchResults"] = true;

$tableKeyspresupuestos = array();
$tableKeyspresupuestos[] = "PresupuestoId";
$tdatapresupuestos[".Keys"] = $tableKeyspresupuestos;


$tdatapresupuestos[".hideMobileList"] = array();




//	PresupuestoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PresupuestoId";
	$fdata["GoodName"] = "PresupuestoId";
	$fdata["ownerTable"] = "dbo.Presupuestos";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos","PresupuestoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PresupuestoId";

		$fdata["sourceSingle"] = "PresupuestoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PresupuestoId";

	
	
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


	$tdatapresupuestos["PresupuestoId"] = $fdata;
		$tdatapresupuestos[".searchableFields"][] = "PresupuestoId";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "dbo.Presupuestos";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos","Ano");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Ano";

		$fdata["sourceSingle"] = "Ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ano";

	
	
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


	$tdatapresupuestos["Ano"] = $fdata;
		$tdatapresupuestos[".searchableFields"][] = "Ano";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Presupuestos";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalId";

	
	
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
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional";

	

	
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


	$tdatapresupuestos["SeccionalId"] = $fdata;
		$tdatapresupuestos[".searchableFields"][] = "SeccionalId";
//	Meta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Meta";
	$fdata["GoodName"] = "Meta";
	$fdata["ownerTable"] = "dbo.Presupuestos";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos","Meta");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Meta";

		$fdata["sourceSingle"] = "Meta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Meta";

	
	
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


	$tdatapresupuestos["Meta"] = $fdata;
		$tdatapresupuestos[".searchableFields"][] = "Meta";
//	Procesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Procesos";
	$fdata["GoodName"] = "Procesos";
	$fdata["ownerTable"] = "dbo.Presupuestos";
	$fdata["Label"] = GetFieldLabel("dbo_Presupuestos","Procesos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Procesos";

		$fdata["sourceSingle"] = "Procesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procesos";

	
	
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


	$tdatapresupuestos["Procesos"] = $fdata;
		$tdatapresupuestos[".searchableFields"][] = "Procesos";


$tables_data["dbo.Presupuestos"]=&$tdatapresupuestos;
$field_labels["dbo_Presupuestos"] = &$fieldLabelspresupuestos;
$fieldToolTips["dbo_Presupuestos"] = &$fieldToolTipspresupuestos;
$placeHolders["dbo_Presupuestos"] = &$placeHolderspresupuestos;
$page_titles["dbo_Presupuestos"] = &$pageTitlespresupuestos;


changeTextControlsToDate( "dbo.Presupuestos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Presupuestos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Presupuestos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Presupuestos"][0] = $masterParams;
				$masterTablesData["dbo.Presupuestos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Presupuestos"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Presupuestos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Presupuestos"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_presupuestos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PresupuestoId,  	Ano,  	SeccionalId,  	Meta,  	Procesos";
$proto0["m_strFrom"] = "FROM dbo.Presupuestos";
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
	"m_strName" => "PresupuestoId",
	"m_strTable" => "dbo.Presupuestos",
	"m_srcTableName" => "dbo.Presupuestos"
));

$proto6["m_sql"] = "PresupuestoId";
$proto6["m_srcTableName"] = "dbo.Presupuestos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "dbo.Presupuestos",
	"m_srcTableName" => "dbo.Presupuestos"
));

$proto8["m_sql"] = "Ano";
$proto8["m_srcTableName"] = "dbo.Presupuestos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Presupuestos",
	"m_srcTableName" => "dbo.Presupuestos"
));

$proto10["m_sql"] = "SeccionalId";
$proto10["m_srcTableName"] = "dbo.Presupuestos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Meta",
	"m_strTable" => "dbo.Presupuestos",
	"m_srcTableName" => "dbo.Presupuestos"
));

$proto12["m_sql"] = "Meta";
$proto12["m_srcTableName"] = "dbo.Presupuestos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Procesos",
	"m_strTable" => "dbo.Presupuestos",
	"m_srcTableName" => "dbo.Presupuestos"
));

$proto14["m_sql"] = "Procesos";
$proto14["m_srcTableName"] = "dbo.Presupuestos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Presupuestos";
$proto17["m_srcTableName"] = "dbo.Presupuestos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "PresupuestoId";
$proto17["m_columns"][] = "Ano";
$proto17["m_columns"][] = "SeccionalId";
$proto17["m_columns"][] = "Meta";
$proto17["m_columns"][] = "Procesos";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Presupuestos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Presupuestos";
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
$proto0["m_srcTableName"]="dbo.Presupuestos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_presupuestos = createSqlQuery_presupuestos();


	
		;

					

$tdatapresupuestos[".sqlquery"] = $queryData_presupuestos;



$tdatapresupuestos[".hasEvents"] = false;

?>