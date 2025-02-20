<?php
$tdataoperaciones = array();
$tdataoperaciones[".searchableFields"] = array();
$tdataoperaciones[".ShortName"] = "operaciones";
$tdataoperaciones[".OwnerID"] = "";
$tdataoperaciones[".OriginalTable"] = "dbo.Operaciones";


$tdataoperaciones[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoperaciones[".originalPagesByType"] = $tdataoperaciones[".pagesByType"];
$tdataoperaciones[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoperaciones[".originalPages"] = $tdataoperaciones[".pages"];
$tdataoperaciones[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoperaciones[".originalDefaultPages"] = $tdataoperaciones[".defaultPages"];

//	field labels
$fieldLabelsoperaciones = array();
$fieldToolTipsoperaciones = array();
$pageTitlesoperaciones = array();
$placeHoldersoperaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoperaciones["Spanish"] = array();
	$fieldToolTipsoperaciones["Spanish"] = array();
	$placeHoldersoperaciones["Spanish"] = array();
	$pageTitlesoperaciones["Spanish"] = array();
	$fieldLabelsoperaciones["Spanish"]["OperacionId"] = "Operacion Id";
	$fieldToolTipsoperaciones["Spanish"]["OperacionId"] = "";
	$placeHoldersoperaciones["Spanish"]["OperacionId"] = "";
	$fieldLabelsoperaciones["Spanish"]["Columna"] = "Columna";
	$fieldToolTipsoperaciones["Spanish"]["Columna"] = "";
	$placeHoldersoperaciones["Spanish"]["Columna"] = "";
	$fieldLabelsoperaciones["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsoperaciones["Spanish"]["ConceptoId"] = "";
	$placeHoldersoperaciones["Spanish"]["ConceptoId"] = "";
	$fieldLabelsoperaciones["Spanish"]["ConcCodi"] = "Código Concepto";
	$fieldToolTipsoperaciones["Spanish"]["ConcCodi"] = "";
	$placeHoldersoperaciones["Spanish"]["ConcCodi"] = "";
	$fieldLabelsoperaciones["Spanish"]["Operacion"] = "Operacion";
	$fieldToolTipsoperaciones["Spanish"]["Operacion"] = "";
	$placeHoldersoperaciones["Spanish"]["Operacion"] = "";
	$fieldLabelsoperaciones["Spanish"]["DebiCodi"] = "Debito";
	$fieldToolTipsoperaciones["Spanish"]["DebiCodi"] = "";
	$placeHoldersoperaciones["Spanish"]["DebiCodi"] = "";
	$fieldLabelsoperaciones["Spanish"]["DebiAux1"] = "Debito Aux1";
	$fieldToolTipsoperaciones["Spanish"]["DebiAux1"] = "";
	$placeHoldersoperaciones["Spanish"]["DebiAux1"] = "";
	$fieldLabelsoperaciones["Spanish"]["DebiAux2"] = "Debito Aux2";
	$fieldToolTipsoperaciones["Spanish"]["DebiAux2"] = "";
	$placeHoldersoperaciones["Spanish"]["DebiAux2"] = "";
	$fieldLabelsoperaciones["Spanish"]["DebiAux3"] = "Debito Aux3";
	$fieldToolTipsoperaciones["Spanish"]["DebiAux3"] = "";
	$placeHoldersoperaciones["Spanish"]["DebiAux3"] = "";
	$fieldLabelsoperaciones["Spanish"]["AcreCodi"] = "Crédito";
	$fieldToolTipsoperaciones["Spanish"]["AcreCodi"] = "";
	$placeHoldersoperaciones["Spanish"]["AcreCodi"] = "";
	$fieldLabelsoperaciones["Spanish"]["AcreAux1"] = "Crédito Aux1";
	$fieldToolTipsoperaciones["Spanish"]["AcreAux1"] = "";
	$placeHoldersoperaciones["Spanish"]["AcreAux1"] = "";
	$fieldLabelsoperaciones["Spanish"]["AcreAux2"] = "Crédito Aux2";
	$fieldToolTipsoperaciones["Spanish"]["AcreAux2"] = "";
	$placeHoldersoperaciones["Spanish"]["AcreAux2"] = "";
	$fieldLabelsoperaciones["Spanish"]["AcreAux3"] = "Crédito Aux3";
	$fieldToolTipsoperaciones["Spanish"]["AcreAux3"] = "";
	$placeHoldersoperaciones["Spanish"]["AcreAux3"] = "";
	$fieldLabelsoperaciones["Spanish"]["CarteraTipoId"] = "Tipo Cartera";
	$fieldToolTipsoperaciones["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersoperaciones["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsoperaciones["Spanish"]["Tipo"] = "Tipo Operacion";
	$fieldToolTipsoperaciones["Spanish"]["Tipo"] = "";
	$placeHoldersoperaciones["Spanish"]["Tipo"] = "";
	$pageTitlesoperaciones["Spanish"]["edit"] = "Operaciones";
	if (count($fieldToolTipsoperaciones["Spanish"]))
		$tdataoperaciones[".isUseToolTips"] = true;
}


	$tdataoperaciones[".NCSearch"] = true;



$tdataoperaciones[".shortTableName"] = "operaciones";
$tdataoperaciones[".nSecOptions"] = 0;

$tdataoperaciones[".mainTableOwnerID"] = "";
$tdataoperaciones[".entityType"] = 0;
$tdataoperaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdataoperaciones[".strOriginalTableName"] = "dbo.Operaciones";

	



$tdataoperaciones[".showAddInPopup"] = false;

$tdataoperaciones[".showEditInPopup"] = false;

$tdataoperaciones[".showViewInPopup"] = false;

$tdataoperaciones[".listAjax"] = false;
//	temporary
//$tdataoperaciones[".listAjax"] = false;

	$tdataoperaciones[".audit"] = true;

	$tdataoperaciones[".locking"] = false;


$pages = $tdataoperaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoperaciones[".edit"] = true;
	$tdataoperaciones[".afterEditAction"] = 1;
	$tdataoperaciones[".closePopupAfterEdit"] = 1;
	$tdataoperaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoperaciones[".add"] = true;
$tdataoperaciones[".afterAddAction"] = 1;
$tdataoperaciones[".closePopupAfterAdd"] = 1;
$tdataoperaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoperaciones[".list"] = true;
}



$tdataoperaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoperaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoperaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoperaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoperaciones[".printFriendly"] = true;
}



$tdataoperaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoperaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoperaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoperaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																											

$tdataoperaciones[".ajaxCodeSnippetAdded"] = false;

$tdataoperaciones[".buttonsAdded"] = false;

$tdataoperaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoperaciones[".isUseTimeForSearch"] = false;


$tdataoperaciones[".badgeColor"] = "DB7093";


$tdataoperaciones[".allSearchFields"] = array();
$tdataoperaciones[".filterFields"] = array();
$tdataoperaciones[".requiredSearchFields"] = array();

$tdataoperaciones[".googleLikeFields"] = array();
$tdataoperaciones[".googleLikeFields"][] = "ConceptoId";
$tdataoperaciones[".googleLikeFields"][] = "ConcCodi";
$tdataoperaciones[".googleLikeFields"][] = "Operacion";
$tdataoperaciones[".googleLikeFields"][] = "DebiCodi";
$tdataoperaciones[".googleLikeFields"][] = "DebiAux1";
$tdataoperaciones[".googleLikeFields"][] = "DebiAux2";
$tdataoperaciones[".googleLikeFields"][] = "DebiAux3";
$tdataoperaciones[".googleLikeFields"][] = "AcreCodi";
$tdataoperaciones[".googleLikeFields"][] = "AcreAux1";
$tdataoperaciones[".googleLikeFields"][] = "AcreAux2";
$tdataoperaciones[".googleLikeFields"][] = "AcreAux3";
$tdataoperaciones[".googleLikeFields"][] = "CarteraTipoId";
$tdataoperaciones[".googleLikeFields"][] = "Tipo";



$tdataoperaciones[".tableType"] = "list";

$tdataoperaciones[".printerPageOrientation"] = 0;
$tdataoperaciones[".nPrinterPageScale"] = 100;

$tdataoperaciones[".nPrinterSplitRecords"] = 40;

$tdataoperaciones[".geocodingEnabled"] = false;




$tdataoperaciones[".isDisplayLoading"] = true;

$tdataoperaciones[".isResizeColumns"] = true;





$tdataoperaciones[".pageSize"] = 20;

$tdataoperaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoperaciones[".strOrderBy"] = $tstrOrderBy;

$tdataoperaciones[".orderindexes"] = array();


$tdataoperaciones[".sqlHead"] = "SELECT OperacionId,  	Columna,  	ConceptoId,  	ConcCodi,  	Operacion,  	DebiCodi,  	DebiAux1,  	DebiAux2,  	DebiAux3,  	AcreCodi,  	AcreAux1,  	AcreAux2,  	AcreAux3,  	CarteraTipoId,  	Tipo";
$tdataoperaciones[".sqlFrom"] = "FROM dbo.Operaciones";
$tdataoperaciones[".sqlWhereExpr"] = "";
$tdataoperaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataoperaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoperaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataoperaciones[".highlightSearchResults"] = true;

$tableKeysoperaciones = array();
$tableKeysoperaciones[] = "OperacionId";
$tdataoperaciones[".Keys"] = $tableKeysoperaciones;


$tdataoperaciones[".hideMobileList"] = array();




//	OperacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OperacionId";
	$fdata["GoodName"] = "OperacionId";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","OperacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OperacionId";

		$fdata["sourceSingle"] = "OperacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OperacionId";

	
	
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


	$tdataoperaciones["OperacionId"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "OperacionId";
//	Columna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Columna";
	$fdata["GoodName"] = "Columna";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","Columna");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Columna";

		$fdata["sourceSingle"] = "Columna";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Columna";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataoperaciones["Columna"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "Columna";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","ConceptoId");
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
	$edata["LookupTable"] = "dbo.Conceptos2";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Concepto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataoperaciones["ConceptoId"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "ConceptoId";
//	ConcCodi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ConcCodi";
	$fdata["GoodName"] = "ConcCodi";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","ConcCodi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConcCodi";

		$fdata["sourceSingle"] = "ConcCodi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConcCodi";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["ConcCodi"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "ConcCodi";
//	Operacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Operacion";
	$fdata["GoodName"] = "Operacion";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","Operacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Operacion";

		$fdata["sourceSingle"] = "Operacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Operacion";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdataoperaciones["Operacion"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "Operacion";
//	DebiCodi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DebiCodi";
	$fdata["GoodName"] = "DebiCodi";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","DebiCodi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DebiCodi";

		$fdata["sourceSingle"] = "DebiCodi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebiCodi";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["DebiCodi"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "DebiCodi";
//	DebiAux1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DebiAux1";
	$fdata["GoodName"] = "DebiAux1";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","DebiAux1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DebiAux1";

		$fdata["sourceSingle"] = "DebiAux1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebiAux1";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["DebiAux1"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "DebiAux1";
//	DebiAux2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DebiAux2";
	$fdata["GoodName"] = "DebiAux2";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","DebiAux2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DebiAux2";

		$fdata["sourceSingle"] = "DebiAux2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebiAux2";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["DebiAux2"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "DebiAux2";
//	DebiAux3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DebiAux3";
	$fdata["GoodName"] = "DebiAux3";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","DebiAux3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DebiAux3";

		$fdata["sourceSingle"] = "DebiAux3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebiAux3";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["DebiAux3"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "DebiAux3";
//	AcreCodi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AcreCodi";
	$fdata["GoodName"] = "AcreCodi";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","AcreCodi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AcreCodi";

		$fdata["sourceSingle"] = "AcreCodi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcreCodi";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["AcreCodi"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "AcreCodi";
//	AcreAux1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AcreAux1";
	$fdata["GoodName"] = "AcreAux1";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","AcreAux1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AcreAux1";

		$fdata["sourceSingle"] = "AcreAux1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcreAux1";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["AcreAux1"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "AcreAux1";
//	AcreAux2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AcreAux2";
	$fdata["GoodName"] = "AcreAux2";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","AcreAux2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AcreAux2";

		$fdata["sourceSingle"] = "AcreAux2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcreAux2";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["AcreAux2"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "AcreAux2";
//	AcreAux3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AcreAux3";
	$fdata["GoodName"] = "AcreAux3";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","AcreAux3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AcreAux3";

		$fdata["sourceSingle"] = "AcreAux3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AcreAux3";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataoperaciones["AcreAux3"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "AcreAux3";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","CarteraTipoId");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CarteraTipo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataoperaciones["CarteraTipoId"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "CarteraTipoId";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Operaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Operaciones","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OperacionTipoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "OperacionTipo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataoperaciones["Tipo"] = $fdata;
		$tdataoperaciones[".searchableFields"][] = "Tipo";


$tables_data["dbo.Operaciones"]=&$tdataoperaciones;
$field_labels["dbo_Operaciones"] = &$fieldLabelsoperaciones;
$fieldToolTips["dbo_Operaciones"] = &$fieldToolTipsoperaciones;
$placeHolders["dbo_Operaciones"] = &$placeHoldersoperaciones;
$page_titles["dbo_Operaciones"] = &$pageTitlesoperaciones;


changeTextControlsToDate( "dbo.Operaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Operaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Operaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_operaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OperacionId,  	Columna,  	ConceptoId,  	ConcCodi,  	Operacion,  	DebiCodi,  	DebiAux1,  	DebiAux2,  	DebiAux3,  	AcreCodi,  	AcreAux1,  	AcreAux2,  	AcreAux3,  	CarteraTipoId,  	Tipo";
$proto0["m_strFrom"] = "FROM dbo.Operaciones";
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
	"m_strName" => "OperacionId",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto6["m_sql"] = "OperacionId";
$proto6["m_srcTableName"] = "dbo.Operaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Columna",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto8["m_sql"] = "Columna";
$proto8["m_srcTableName"] = "dbo.Operaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto10["m_sql"] = "ConceptoId";
$proto10["m_srcTableName"] = "dbo.Operaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ConcCodi",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto12["m_sql"] = "ConcCodi";
$proto12["m_srcTableName"] = "dbo.Operaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Operacion",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto14["m_sql"] = "Operacion";
$proto14["m_srcTableName"] = "dbo.Operaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DebiCodi",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto16["m_sql"] = "DebiCodi";
$proto16["m_srcTableName"] = "dbo.Operaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DebiAux1",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto18["m_sql"] = "DebiAux1";
$proto18["m_srcTableName"] = "dbo.Operaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DebiAux2",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto20["m_sql"] = "DebiAux2";
$proto20["m_srcTableName"] = "dbo.Operaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DebiAux3",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto22["m_sql"] = "DebiAux3";
$proto22["m_srcTableName"] = "dbo.Operaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AcreCodi",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto24["m_sql"] = "AcreCodi";
$proto24["m_srcTableName"] = "dbo.Operaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AcreAux1",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto26["m_sql"] = "AcreAux1";
$proto26["m_srcTableName"] = "dbo.Operaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AcreAux2",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto28["m_sql"] = "AcreAux2";
$proto28["m_srcTableName"] = "dbo.Operaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AcreAux3",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto30["m_sql"] = "AcreAux3";
$proto30["m_srcTableName"] = "dbo.Operaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto32["m_sql"] = "CarteraTipoId";
$proto32["m_srcTableName"] = "dbo.Operaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Operaciones",
	"m_srcTableName" => "dbo.Operaciones"
));

$proto34["m_sql"] = "Tipo";
$proto34["m_srcTableName"] = "dbo.Operaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "dbo.Operaciones";
$proto37["m_srcTableName"] = "dbo.Operaciones";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "OperacionId";
$proto37["m_columns"][] = "Columna";
$proto37["m_columns"][] = "ConceptoId";
$proto37["m_columns"][] = "ConcCodi";
$proto37["m_columns"][] = "Operacion";
$proto37["m_columns"][] = "DebiCodi";
$proto37["m_columns"][] = "DebiAux1";
$proto37["m_columns"][] = "DebiAux2";
$proto37["m_columns"][] = "DebiAux3";
$proto37["m_columns"][] = "AcreCodi";
$proto37["m_columns"][] = "AcreAux1";
$proto37["m_columns"][] = "AcreAux2";
$proto37["m_columns"][] = "AcreAux3";
$proto37["m_columns"][] = "CarteraTipoId";
$proto37["m_columns"][] = "Tipo";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "dbo.Operaciones";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "dbo.Operaciones";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Operaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_operaciones = createSqlQuery_operaciones();


	
		;

															

$tdataoperaciones[".sqlquery"] = $queryData_operaciones;



$tdataoperaciones[".hasEvents"] = false;

?>