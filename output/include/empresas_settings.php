<?php
$tdataempresas = array();
$tdataempresas[".searchableFields"] = array();
$tdataempresas[".ShortName"] = "empresas";
$tdataempresas[".OwnerID"] = "";
$tdataempresas[".OriginalTable"] = "dbo.Empresas";


$tdataempresas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataempresas[".originalPagesByType"] = $tdataempresas[".pagesByType"];
$tdataempresas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataempresas[".originalPages"] = $tdataempresas[".pages"];
$tdataempresas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataempresas[".originalDefaultPages"] = $tdataempresas[".defaultPages"];

//	field labels
$fieldLabelsempresas = array();
$fieldToolTipsempresas = array();
$pageTitlesempresas = array();
$placeHoldersempresas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas["Spanish"] = array();
	$fieldToolTipsempresas["Spanish"] = array();
	$placeHoldersempresas["Spanish"] = array();
	$pageTitlesempresas["Spanish"] = array();
	$fieldLabelsempresas["Spanish"]["EmpresaId"] = "Empresa Id";
	$fieldToolTipsempresas["Spanish"]["EmpresaId"] = "";
	$placeHoldersempresas["Spanish"]["EmpresaId"] = "";
	$fieldLabelsempresas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsempresas["Spanish"]["Empresa"] = "";
	$placeHoldersempresas["Spanish"]["Empresa"] = "";
	$fieldLabelsempresas["Spanish"]["Cierre"] = "Cierre";
	$fieldToolTipsempresas["Spanish"]["Cierre"] = "";
	$placeHoldersempresas["Spanish"]["Cierre"] = "";
	$fieldLabelsempresas["Spanish"]["ValorMaximo"] = "Valor Maximo";
	$fieldToolTipsempresas["Spanish"]["ValorMaximo"] = "";
	$placeHoldersempresas["Spanish"]["ValorMaximo"] = "";
	$fieldLabelsempresas["Spanish"]["MaximoPesos"] = "Maximo Pesos";
	$fieldToolTipsempresas["Spanish"]["MaximoPesos"] = "";
	$placeHoldersempresas["Spanish"]["MaximoPesos"] = "";
	$fieldLabelsempresas["Spanish"]["MaximoSalarios"] = "Maximo Salarios";
	$fieldToolTipsempresas["Spanish"]["MaximoSalarios"] = "";
	$placeHoldersempresas["Spanish"]["MaximoSalarios"] = "";
	$fieldLabelsempresas["Spanish"]["MaximoUvt"] = "Maximo Uvt";
	$fieldToolTipsempresas["Spanish"]["MaximoUvt"] = "";
	$placeHoldersempresas["Spanish"]["MaximoUvt"] = "";
	$fieldLabelsempresas["Spanish"]["EmailAprobador"] = "Email";
	$fieldToolTipsempresas["Spanish"]["EmailAprobador"] = "";
	$placeHoldersempresas["Spanish"]["EmailAprobador"] = "";
	$fieldLabelsempresas["Spanish"]["Tope"] = "Tope";
	$fieldToolTipsempresas["Spanish"]["Tope"] = "";
	$placeHoldersempresas["Spanish"]["Tope"] = "";
	$fieldLabelsempresas["Spanish"]["DiasPersuasivo"] = "Dias Persuasivo";
	$fieldToolTipsempresas["Spanish"]["DiasPersuasivo"] = "";
	$placeHoldersempresas["Spanish"]["DiasPersuasivo"] = "";
	$fieldLabelsempresas["Spanish"]["CarteraEspecialUvt"] = "Cartera Especial Uvt";
	$fieldToolTipsempresas["Spanish"]["CarteraEspecialUvt"] = "";
	$placeHoldersempresas["Spanish"]["CarteraEspecialUvt"] = "";
	$fieldLabelsempresas["Spanish"]["TasaDTN"] = "Tasa DTN";
	$fieldToolTipsempresas["Spanish"]["TasaDTN"] = "";
	$placeHoldersempresas["Spanish"]["TasaDTN"] = "";
	$fieldLabelsempresas["Spanish"]["TasaCivil"] = "Tasa Civil";
	$fieldToolTipsempresas["Spanish"]["TasaCivil"] = "";
	$placeHoldersempresas["Spanish"]["TasaCivil"] = "";
	$fieldLabelsempresas["Spanish"]["InteresesPlazo"] = "Intereses Plazo";
	$fieldToolTipsempresas["Spanish"]["InteresesPlazo"] = "";
	$placeHoldersempresas["Spanish"]["InteresesPlazo"] = "";
	$fieldLabelsempresas["Spanish"]["MaximoUvb"] = "Maximo Uvb";
	$fieldToolTipsempresas["Spanish"]["MaximoUvb"] = "";
	$placeHoldersempresas["Spanish"]["MaximoUvb"] = "";
	if (count($fieldToolTipsempresas["Spanish"]))
		$tdataempresas[".isUseToolTips"] = true;
}


	$tdataempresas[".NCSearch"] = true;



$tdataempresas[".shortTableName"] = "empresas";
$tdataempresas[".nSecOptions"] = 0;

$tdataempresas[".mainTableOwnerID"] = "";
$tdataempresas[".entityType"] = 0;
$tdataempresas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataempresas[".strOriginalTableName"] = "dbo.Empresas";

	



$tdataempresas[".showAddInPopup"] = false;

$tdataempresas[".showEditInPopup"] = false;

$tdataempresas[".showViewInPopup"] = false;

$tdataempresas[".listAjax"] = false;
//	temporary
//$tdataempresas[".listAjax"] = false;

	$tdataempresas[".audit"] = true;

	$tdataempresas[".locking"] = false;


$pages = $tdataempresas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas[".edit"] = true;
	$tdataempresas[".afterEditAction"] = 1;
	$tdataempresas[".closePopupAfterEdit"] = 1;
	$tdataempresas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas[".add"] = true;
$tdataempresas[".afterAddAction"] = 1;
$tdataempresas[".closePopupAfterAdd"] = 1;
$tdataempresas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas[".list"] = true;
}



$tdataempresas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas[".printFriendly"] = true;
}



$tdataempresas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas[".isUseAjaxSuggest"] = true;



																																																																																																																																																						

$tdataempresas[".ajaxCodeSnippetAdded"] = false;

$tdataempresas[".buttonsAdded"] = false;

$tdataempresas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas[".isUseTimeForSearch"] = false;


$tdataempresas[".badgeColor"] = "EDCA00";


$tdataempresas[".allSearchFields"] = array();
$tdataempresas[".filterFields"] = array();
$tdataempresas[".requiredSearchFields"] = array();

$tdataempresas[".googleLikeFields"] = array();
$tdataempresas[".googleLikeFields"][] = "EmpresaId";
$tdataempresas[".googleLikeFields"][] = "Empresa";
$tdataempresas[".googleLikeFields"][] = "Cierre";
$tdataempresas[".googleLikeFields"][] = "ValorMaximo";
$tdataempresas[".googleLikeFields"][] = "MaximoPesos";
$tdataempresas[".googleLikeFields"][] = "MaximoSalarios";
$tdataempresas[".googleLikeFields"][] = "MaximoUvt";
$tdataempresas[".googleLikeFields"][] = "EmailAprobador";
$tdataempresas[".googleLikeFields"][] = "Tope";
$tdataempresas[".googleLikeFields"][] = "DiasPersuasivo";
$tdataempresas[".googleLikeFields"][] = "CarteraEspecialUvt";
$tdataempresas[".googleLikeFields"][] = "TasaDTN";
$tdataempresas[".googleLikeFields"][] = "TasaCivil";
$tdataempresas[".googleLikeFields"][] = "InteresesPlazo";
$tdataempresas[".googleLikeFields"][] = "MaximoUvb";



$tdataempresas[".tableType"] = "list";

$tdataempresas[".printerPageOrientation"] = 0;
$tdataempresas[".nPrinterPageScale"] = 100;

$tdataempresas[".nPrinterSplitRecords"] = 40;

$tdataempresas[".geocodingEnabled"] = false;





$tdataempresas[".isResizeColumns"] = true;





$tdataempresas[".pageSize"] = 20;

$tdataempresas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas[".strOrderBy"] = $tstrOrderBy;

$tdataempresas[".orderindexes"] = array();


$tdataempresas[".sqlHead"] = "SELECT EmpresaId,  	Empresa,  	Cierre,  	ValorMaximo,  	MaximoPesos,  	MaximoSalarios,  	MaximoUvt,  	EmailAprobador,  	Tope,  	DiasPersuasivo,  	CarteraEspecialUvt,  	TasaDTN,  	TasaCivil,  	InteresesPlazo,  	MaximoUvb";
$tdataempresas[".sqlFrom"] = "FROM dbo.Empresas";
$tdataempresas[".sqlWhereExpr"] = "";
$tdataempresas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas[".highlightSearchResults"] = true;

$tableKeysempresas = array();
$tableKeysempresas[] = "EmpresaId";
$tdataempresas[".Keys"] = $tableKeysempresas;


$tdataempresas[".hideMobileList"] = array();




//	EmpresaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmpresaId";
	$fdata["GoodName"] = "EmpresaId";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","EmpresaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EmpresaId";

		$fdata["sourceSingle"] = "EmpresaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmpresaId";

	
	
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


	$tdataempresas["EmpresaId"] = $fdata;
		$tdataempresas[".searchableFields"][] = "EmpresaId";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","Empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Empresa";

		$fdata["sourceSingle"] = "Empresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Empresa";

	
	
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


	$tdataempresas["Empresa"] = $fdata;
		$tdataempresas[".searchableFields"][] = "Empresa";
//	Cierre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cierre";
	$fdata["GoodName"] = "Cierre";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","Cierre");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Cierre";

		$fdata["sourceSingle"] = "Cierre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cierre";

	
	
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


	$tdataempresas["Cierre"] = $fdata;
		$tdataempresas[".searchableFields"][] = "Cierre";
//	ValorMaximo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ValorMaximo";
	$fdata["GoodName"] = "ValorMaximo";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","ValorMaximo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ValorMaximo";

		$fdata["sourceSingle"] = "ValorMaximo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValorMaximo";

	
	
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


	$tdataempresas["ValorMaximo"] = $fdata;
		$tdataempresas[".searchableFields"][] = "ValorMaximo";
//	MaximoPesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MaximoPesos";
	$fdata["GoodName"] = "MaximoPesos";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","MaximoPesos");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "MaximoPesos";

		$fdata["sourceSingle"] = "MaximoPesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaximoPesos";

	
	
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


	$tdataempresas["MaximoPesos"] = $fdata;
		$tdataempresas[".searchableFields"][] = "MaximoPesos";
//	MaximoSalarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MaximoSalarios";
	$fdata["GoodName"] = "MaximoSalarios";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","MaximoSalarios");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "MaximoSalarios";

		$fdata["sourceSingle"] = "MaximoSalarios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaximoSalarios";

	
	
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


	$tdataempresas["MaximoSalarios"] = $fdata;
		$tdataempresas[".searchableFields"][] = "MaximoSalarios";
//	MaximoUvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MaximoUvt";
	$fdata["GoodName"] = "MaximoUvt";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","MaximoUvt");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "MaximoUvt";

		$fdata["sourceSingle"] = "MaximoUvt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaximoUvt";

	
	
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


	$tdataempresas["MaximoUvt"] = $fdata;
		$tdataempresas[".searchableFields"][] = "MaximoUvt";
//	EmailAprobador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmailAprobador";
	$fdata["GoodName"] = "EmailAprobador";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","EmailAprobador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmailAprobador";

		$fdata["sourceSingle"] = "EmailAprobador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAprobador";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataempresas["EmailAprobador"] = $fdata;
		$tdataempresas[".searchableFields"][] = "EmailAprobador";
//	Tope
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tope";
	$fdata["GoodName"] = "Tope";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","Tope");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Tope";

		$fdata["sourceSingle"] = "Tope";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tope";

	
	
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


	$tdataempresas["Tope"] = $fdata;
		$tdataempresas[".searchableFields"][] = "Tope";
//	DiasPersuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DiasPersuasivo";
	$fdata["GoodName"] = "DiasPersuasivo";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","DiasPersuasivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DiasPersuasivo";

		$fdata["sourceSingle"] = "DiasPersuasivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DiasPersuasivo";

	
	
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


	$tdataempresas["DiasPersuasivo"] = $fdata;
		$tdataempresas[".searchableFields"][] = "DiasPersuasivo";
//	CarteraEspecialUvt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CarteraEspecialUvt";
	$fdata["GoodName"] = "CarteraEspecialUvt";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","CarteraEspecialUvt");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CarteraEspecialUvt";

		$fdata["sourceSingle"] = "CarteraEspecialUvt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraEspecialUvt";

	
	
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


	$tdataempresas["CarteraEspecialUvt"] = $fdata;
		$tdataempresas[".searchableFields"][] = "CarteraEspecialUvt";
//	TasaDTN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TasaDTN";
	$fdata["GoodName"] = "TasaDTN";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","TasaDTN");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "TasaDTN";

		$fdata["sourceSingle"] = "TasaDTN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TasaDTN";

	
	
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


	$tdataempresas["TasaDTN"] = $fdata;
		$tdataempresas[".searchableFields"][] = "TasaDTN";
//	TasaCivil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TasaCivil";
	$fdata["GoodName"] = "TasaCivil";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","TasaCivil");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "TasaCivil";

		$fdata["sourceSingle"] = "TasaCivil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TasaCivil";

	
	
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


	$tdataempresas["TasaCivil"] = $fdata;
		$tdataempresas[".searchableFields"][] = "TasaCivil";
//	InteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "InteresesPlazo";
	$fdata["GoodName"] = "InteresesPlazo";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","InteresesPlazo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "InteresesPlazo";

		$fdata["sourceSingle"] = "InteresesPlazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesPlazo";

	
	
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


	$tdataempresas["InteresesPlazo"] = $fdata;
		$tdataempresas[".searchableFields"][] = "InteresesPlazo";
//	MaximoUvb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "MaximoUvb";
	$fdata["GoodName"] = "MaximoUvb";
	$fdata["ownerTable"] = "dbo.Empresas";
	$fdata["Label"] = GetFieldLabel("dbo_Empresas","MaximoUvb");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "MaximoUvb";

		$fdata["sourceSingle"] = "MaximoUvb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaximoUvb";

	
	
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


	$tdataempresas["MaximoUvb"] = $fdata;
		$tdataempresas[".searchableFields"][] = "MaximoUvb";


$tables_data["dbo.Empresas"]=&$tdataempresas;
$field_labels["dbo_Empresas"] = &$fieldLabelsempresas;
$fieldToolTips["dbo_Empresas"] = &$fieldToolTipsempresas;
$placeHolders["dbo_Empresas"] = &$placeHoldersempresas;
$page_titles["dbo_Empresas"] = &$pageTitlesempresas;


changeTextControlsToDate( "dbo.Empresas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Empresas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Empresas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmpresaId,  	Empresa,  	Cierre,  	ValorMaximo,  	MaximoPesos,  	MaximoSalarios,  	MaximoUvt,  	EmailAprobador,  	Tope,  	DiasPersuasivo,  	CarteraEspecialUvt,  	TasaDTN,  	TasaCivil,  	InteresesPlazo,  	MaximoUvb";
$proto0["m_strFrom"] = "FROM dbo.Empresas";
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
	"m_strName" => "EmpresaId",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto6["m_sql"] = "EmpresaId";
$proto6["m_srcTableName"] = "dbo.Empresas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto8["m_sql"] = "Empresa";
$proto8["m_srcTableName"] = "dbo.Empresas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cierre",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto10["m_sql"] = "Cierre";
$proto10["m_srcTableName"] = "dbo.Empresas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ValorMaximo",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto12["m_sql"] = "ValorMaximo";
$proto12["m_srcTableName"] = "dbo.Empresas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MaximoPesos",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto14["m_sql"] = "MaximoPesos";
$proto14["m_srcTableName"] = "dbo.Empresas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MaximoSalarios",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto16["m_sql"] = "MaximoSalarios";
$proto16["m_srcTableName"] = "dbo.Empresas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MaximoUvt",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto18["m_sql"] = "MaximoUvt";
$proto18["m_srcTableName"] = "dbo.Empresas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAprobador",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto20["m_sql"] = "EmailAprobador";
$proto20["m_srcTableName"] = "dbo.Empresas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Tope",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto22["m_sql"] = "Tope";
$proto22["m_srcTableName"] = "dbo.Empresas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DiasPersuasivo",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto24["m_sql"] = "DiasPersuasivo";
$proto24["m_srcTableName"] = "dbo.Empresas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraEspecialUvt",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto26["m_sql"] = "CarteraEspecialUvt";
$proto26["m_srcTableName"] = "dbo.Empresas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TasaDTN",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto28["m_sql"] = "TasaDTN";
$proto28["m_srcTableName"] = "dbo.Empresas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TasaCivil",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto30["m_sql"] = "TasaCivil";
$proto30["m_srcTableName"] = "dbo.Empresas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesPlazo",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto32["m_sql"] = "InteresesPlazo";
$proto32["m_srcTableName"] = "dbo.Empresas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "MaximoUvb",
	"m_strTable" => "dbo.Empresas",
	"m_srcTableName" => "dbo.Empresas"
));

$proto34["m_sql"] = "MaximoUvb";
$proto34["m_srcTableName"] = "dbo.Empresas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "dbo.Empresas";
$proto37["m_srcTableName"] = "dbo.Empresas";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "EmpresaId";
$proto37["m_columns"][] = "Empresa";
$proto37["m_columns"][] = "Cierre";
$proto37["m_columns"][] = "ValorMaximo";
$proto37["m_columns"][] = "MaximoPesos";
$proto37["m_columns"][] = "MaximoSalarios";
$proto37["m_columns"][] = "MaximoUvt";
$proto37["m_columns"][] = "EmailAprobador";
$proto37["m_columns"][] = "Tope";
$proto37["m_columns"][] = "DiasPersuasivo";
$proto37["m_columns"][] = "CarteraEspecialUvt";
$proto37["m_columns"][] = "TasaDTN";
$proto37["m_columns"][] = "TasaCivil";
$proto37["m_columns"][] = "InteresesPlazo";
$proto37["m_columns"][] = "MaximoUvb";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "dbo.Empresas";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "dbo.Empresas";
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
$proto0["m_srcTableName"]="dbo.Empresas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas = createSqlQuery_empresas();


	
		;

															

$tdataempresas[".sqlquery"] = $queryData_empresas;



$tdataempresas[".hasEvents"] = false;

?>