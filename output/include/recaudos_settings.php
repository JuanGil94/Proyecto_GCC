<?php
$tdatarecaudos = array();
$tdatarecaudos[".searchableFields"] = array();
$tdatarecaudos[".ShortName"] = "recaudos";
$tdatarecaudos[".OwnerID"] = "";
$tdatarecaudos[".OriginalTable"] = "dbo.Recaudos";


$tdatarecaudos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarecaudos[".originalPagesByType"] = $tdatarecaudos[".pagesByType"];
$tdatarecaudos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarecaudos[".originalPages"] = $tdatarecaudos[".pages"];
$tdatarecaudos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarecaudos[".originalDefaultPages"] = $tdatarecaudos[".defaultPages"];

//	field labels
$fieldLabelsrecaudos = array();
$fieldToolTipsrecaudos = array();
$pageTitlesrecaudos = array();
$placeHoldersrecaudos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecaudos["Spanish"] = array();
	$fieldToolTipsrecaudos["Spanish"] = array();
	$placeHoldersrecaudos["Spanish"] = array();
	$pageTitlesrecaudos["Spanish"] = array();
	$fieldLabelsrecaudos["Spanish"]["RecaudoId"] = "Recaudo Id";
	$fieldToolTipsrecaudos["Spanish"]["RecaudoId"] = "";
	$placeHoldersrecaudos["Spanish"]["RecaudoId"] = "";
	$fieldLabelsrecaudos["Spanish"]["CuentaId"] = "Cuenta Id";
	$fieldToolTipsrecaudos["Spanish"]["CuentaId"] = "";
	$placeHoldersrecaudos["Spanish"]["CuentaId"] = "";
	$fieldLabelsrecaudos["Spanish"]["Archivo"] = "Archivo";
	$fieldToolTipsrecaudos["Spanish"]["Archivo"] = "";
	$placeHoldersrecaudos["Spanish"]["Archivo"] = "";
	$fieldLabelsrecaudos["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsrecaudos["Spanish"]["Fecha"] = "";
	$placeHoldersrecaudos["Spanish"]["Fecha"] = "";
	$fieldLabelsrecaudos["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsrecaudos["Spanish"]["Identificacion"] = "";
	$placeHoldersrecaudos["Spanish"]["Identificacion"] = "";
	$fieldLabelsrecaudos["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipsrecaudos["Spanish"]["Proceso"] = "";
	$placeHoldersrecaudos["Spanish"]["Proceso"] = "";
	$fieldLabelsrecaudos["Spanish"]["Deposito"] = "Deposito";
	$fieldToolTipsrecaudos["Spanish"]["Deposito"] = "";
	$placeHoldersrecaudos["Spanish"]["Deposito"] = "";
	$fieldLabelsrecaudos["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsrecaudos["Spanish"]["Recaudo"] = "";
	$placeHoldersrecaudos["Spanish"]["Recaudo"] = "";
	$fieldLabelsrecaudos["Spanish"]["Registro"] = "Registro";
	$fieldToolTipsrecaudos["Spanish"]["Registro"] = "";
	$placeHoldersrecaudos["Spanish"]["Registro"] = "";
	$fieldLabelsrecaudos["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsrecaudos["Spanish"]["UserId"] = "";
	$placeHoldersrecaudos["Spanish"]["UserId"] = "";
	$fieldLabelsrecaudos["Spanish"]["Aprobada"] = "Aprobada";
	$fieldToolTipsrecaudos["Spanish"]["Aprobada"] = "";
	$placeHoldersrecaudos["Spanish"]["Aprobada"] = "";
	if (count($fieldToolTipsrecaudos["Spanish"]))
		$tdatarecaudos[".isUseToolTips"] = true;
}


	$tdatarecaudos[".NCSearch"] = true;



$tdatarecaudos[".shortTableName"] = "recaudos";
$tdatarecaudos[".nSecOptions"] = 0;

$tdatarecaudos[".mainTableOwnerID"] = "";
$tdatarecaudos[".entityType"] = 0;
$tdatarecaudos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatarecaudos[".strOriginalTableName"] = "dbo.Recaudos";

	



$tdatarecaudos[".showAddInPopup"] = false;

$tdatarecaudos[".showEditInPopup"] = false;

$tdatarecaudos[".showViewInPopup"] = false;

$tdatarecaudos[".listAjax"] = false;
//	temporary
//$tdatarecaudos[".listAjax"] = false;

	$tdatarecaudos[".audit"] = false;

	$tdatarecaudos[".locking"] = false;


$pages = $tdatarecaudos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecaudos[".edit"] = true;
	$tdatarecaudos[".afterEditAction"] = 1;
	$tdatarecaudos[".closePopupAfterEdit"] = 1;
	$tdatarecaudos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecaudos[".add"] = true;
$tdatarecaudos[".afterAddAction"] = 1;
$tdatarecaudos[".closePopupAfterAdd"] = 1;
$tdatarecaudos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecaudos[".list"] = true;
}



$tdatarecaudos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecaudos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecaudos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecaudos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecaudos[".printFriendly"] = true;
}



$tdatarecaudos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecaudos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecaudos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecaudos[".isUseAjaxSuggest"] = true;





$tdatarecaudos[".ajaxCodeSnippetAdded"] = false;

$tdatarecaudos[".buttonsAdded"] = false;

$tdatarecaudos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecaudos[".isUseTimeForSearch"] = false;


$tdatarecaudos[".badgeColor"] = "CD5C5C";


$tdatarecaudos[".allSearchFields"] = array();
$tdatarecaudos[".filterFields"] = array();
$tdatarecaudos[".requiredSearchFields"] = array();

$tdatarecaudos[".googleLikeFields"] = array();
$tdatarecaudos[".googleLikeFields"][] = "RecaudoId";
$tdatarecaudos[".googleLikeFields"][] = "CuentaId";
$tdatarecaudos[".googleLikeFields"][] = "Archivo";
$tdatarecaudos[".googleLikeFields"][] = "Fecha";
$tdatarecaudos[".googleLikeFields"][] = "Identificacion";
$tdatarecaudos[".googleLikeFields"][] = "Proceso";
$tdatarecaudos[".googleLikeFields"][] = "Deposito";
$tdatarecaudos[".googleLikeFields"][] = "Recaudo";
$tdatarecaudos[".googleLikeFields"][] = "Registro";
$tdatarecaudos[".googleLikeFields"][] = "UserId";
$tdatarecaudos[".googleLikeFields"][] = "Aprobada";



$tdatarecaudos[".tableType"] = "list";

$tdatarecaudos[".printerPageOrientation"] = 0;
$tdatarecaudos[".nPrinterPageScale"] = 100;

$tdatarecaudos[".nPrinterSplitRecords"] = 40;

$tdatarecaudos[".geocodingEnabled"] = false;










$tdatarecaudos[".pageSize"] = 20;

$tdatarecaudos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarecaudos[".strOrderBy"] = $tstrOrderBy;

$tdatarecaudos[".orderindexes"] = array();


$tdatarecaudos[".sqlHead"] = "SELECT RecaudoId,  	CuentaId,  	Archivo,  	Fecha,  	Identificacion,  	Proceso,  	Deposito,  	Recaudo,  	Registro,  	UserId,  	Aprobada";
$tdatarecaudos[".sqlFrom"] = "FROM dbo.Recaudos";
$tdatarecaudos[".sqlWhereExpr"] = "";
$tdatarecaudos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecaudos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecaudos[".arrGroupsPerPage"] = $arrGPP;

$tdatarecaudos[".highlightSearchResults"] = true;

$tableKeysrecaudos = array();
$tableKeysrecaudos[] = "RecaudoId";
$tdatarecaudos[".Keys"] = $tableKeysrecaudos;


$tdatarecaudos[".hideMobileList"] = array();




//	RecaudoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RecaudoId";
	$fdata["GoodName"] = "RecaudoId";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","RecaudoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "RecaudoId";

		$fdata["sourceSingle"] = "RecaudoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RecaudoId";

	
	
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


	$tdatarecaudos["RecaudoId"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "RecaudoId";
//	CuentaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CuentaId";
	$fdata["GoodName"] = "CuentaId";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","CuentaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CuentaId";

		$fdata["sourceSingle"] = "CuentaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CuentaId";

	
	
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
	$edata["LookupTable"] = "dbo.Cuentas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CuentaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Cuenta";

	

	
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


	$tdatarecaudos["CuentaId"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "CuentaId";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Archivo");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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


	$tdatarecaudos["Archivo"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Archivo";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Fecha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarecaudos["Fecha"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Fecha";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["sourceSingle"] = "Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarecaudos["Identificacion"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Identificacion";
//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Proceso";

		$fdata["sourceSingle"] = "Proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Proceso";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarecaudos["Proceso"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Proceso";
//	Deposito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Deposito";
	$fdata["GoodName"] = "Deposito";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Deposito");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Deposito";

		$fdata["sourceSingle"] = "Deposito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deposito";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarecaudos["Deposito"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Deposito";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Recaudo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Recaudo";

		$fdata["sourceSingle"] = "Recaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recaudo";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarecaudos["Recaudo"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Recaudo";
//	Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Registro";
	$fdata["GoodName"] = "Registro";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Registro";

		$fdata["sourceSingle"] = "Registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Registro";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatarecaudos["Registro"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Registro";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","UserId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserId";

		$fdata["sourceSingle"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
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


	$tdatarecaudos["UserId"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "UserId";
//	Aprobada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Aprobada";
	$fdata["GoodName"] = "Aprobada";
	$fdata["ownerTable"] = "dbo.Recaudos";
	$fdata["Label"] = GetFieldLabel("dbo_Recaudos","Aprobada");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Aprobada";

		$fdata["sourceSingle"] = "Aprobada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Aprobada";

	
	
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


	$tdatarecaudos["Aprobada"] = $fdata;
		$tdatarecaudos[".searchableFields"][] = "Aprobada";


$tables_data["dbo.Recaudos"]=&$tdatarecaudos;
$field_labels["dbo_Recaudos"] = &$fieldLabelsrecaudos;
$fieldToolTips["dbo_Recaudos"] = &$fieldToolTipsrecaudos;
$placeHolders["dbo_Recaudos"] = &$placeHoldersrecaudos;
$page_titles["dbo_Recaudos"] = &$pageTitlesrecaudos;


changeTextControlsToDate( "dbo.Recaudos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Recaudos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Recaudos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Cuentas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Cuentas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cuentas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Recaudos"][0] = $masterParams;
				$masterTablesData["dbo.Recaudos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Recaudos"][0]["masterKeys"][]="CuentaId";
				$masterTablesData["dbo.Recaudos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Recaudos"][0]["detailKeys"][]="CuentaId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_recaudos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RecaudoId,  	CuentaId,  	Archivo,  	Fecha,  	Identificacion,  	Proceso,  	Deposito,  	Recaudo,  	Registro,  	UserId,  	Aprobada";
$proto0["m_strFrom"] = "FROM dbo.Recaudos";
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
	"m_strName" => "RecaudoId",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto6["m_sql"] = "RecaudoId";
$proto6["m_srcTableName"] = "dbo.Recaudos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CuentaId",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto8["m_sql"] = "CuentaId";
$proto8["m_srcTableName"] = "dbo.Recaudos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto10["m_sql"] = "Archivo";
$proto10["m_srcTableName"] = "dbo.Recaudos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Recaudos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto14["m_sql"] = "Identificacion";
$proto14["m_srcTableName"] = "dbo.Recaudos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Proceso",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto16["m_sql"] = "Proceso";
$proto16["m_srcTableName"] = "dbo.Recaudos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Deposito",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto18["m_sql"] = "Deposito";
$proto18["m_srcTableName"] = "dbo.Recaudos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto20["m_sql"] = "Recaudo";
$proto20["m_srcTableName"] = "dbo.Recaudos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Registro",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto22["m_sql"] = "Registro";
$proto22["m_srcTableName"] = "dbo.Recaudos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto24["m_sql"] = "UserId";
$proto24["m_srcTableName"] = "dbo.Recaudos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Aprobada",
	"m_strTable" => "dbo.Recaudos",
	"m_srcTableName" => "dbo.Recaudos"
));

$proto26["m_sql"] = "Aprobada";
$proto26["m_srcTableName"] = "dbo.Recaudos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Recaudos";
$proto29["m_srcTableName"] = "dbo.Recaudos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "RecaudoId";
$proto29["m_columns"][] = "CuentaId";
$proto29["m_columns"][] = "Archivo";
$proto29["m_columns"][] = "Fecha";
$proto29["m_columns"][] = "Identificacion";
$proto29["m_columns"][] = "Proceso";
$proto29["m_columns"][] = "Deposito";
$proto29["m_columns"][] = "Recaudo";
$proto29["m_columns"][] = "Registro";
$proto29["m_columns"][] = "UserId";
$proto29["m_columns"][] = "Aprobada";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.Recaudos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.Recaudos";
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
$proto0["m_srcTableName"]="dbo.Recaudos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recaudos = createSqlQuery_recaudos();


	
		;

											

$tdatarecaudos[".sqlquery"] = $queryData_recaudos;



$tdatarecaudos[".hasEvents"] = false;

?>