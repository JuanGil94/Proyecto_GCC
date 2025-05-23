<?php
$tdatacuentas = array();
$tdatacuentas[".searchableFields"] = array();
$tdatacuentas[".ShortName"] = "cuentas";
$tdatacuentas[".OwnerID"] = "";
$tdatacuentas[".OriginalTable"] = "dbo.Cuentas";


$tdatacuentas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacuentas[".originalPagesByType"] = $tdatacuentas[".pagesByType"];
$tdatacuentas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacuentas[".originalPages"] = $tdatacuentas[".pages"];
$tdatacuentas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list1\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacuentas[".originalDefaultPages"] = $tdatacuentas[".defaultPages"];

//	field labels
$fieldLabelscuentas = array();
$fieldToolTipscuentas = array();
$pageTitlescuentas = array();
$placeHolderscuentas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscuentas["Spanish"] = array();
	$fieldToolTipscuentas["Spanish"] = array();
	$placeHolderscuentas["Spanish"] = array();
	$pageTitlescuentas["Spanish"] = array();
	$fieldLabelscuentas["Spanish"]["CuentaId"] = "Cuenta Id";
	$fieldToolTipscuentas["Spanish"]["CuentaId"] = "";
	$placeHolderscuentas["Spanish"]["CuentaId"] = "";
	$fieldLabelscuentas["Spanish"]["Cuenta"] = " Nombre de la Cuenta";
	$fieldToolTipscuentas["Spanish"]["Cuenta"] = "";
	$placeHolderscuentas["Spanish"]["Cuenta"] = "";
	$fieldLabelscuentas["Spanish"]["BancoId"] = "Banco Id";
	$fieldToolTipscuentas["Spanish"]["BancoId"] = "";
	$placeHolderscuentas["Spanish"]["BancoId"] = "";
	$fieldLabelscuentas["Spanish"]["Numero"] = "Número de Cuenta";
	$fieldToolTipscuentas["Spanish"]["Numero"] = "";
	$placeHolderscuentas["Spanish"]["Numero"] = "";
	$fieldLabelscuentas["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipscuentas["Spanish"]["SeccionalId"] = "";
	$placeHolderscuentas["Spanish"]["SeccionalId"] = "";
	$fieldLabelscuentas["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipscuentas["Spanish"]["ConceptoId"] = "";
	$placeHolderscuentas["Spanish"]["ConceptoId"] = "";
	$fieldLabelscuentas["Spanish"]["Activa"] = "Activa";
	$fieldToolTipscuentas["Spanish"]["Activa"] = "";
	$placeHolderscuentas["Spanish"]["Activa"] = "";
	$fieldLabelscuentas["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipscuentas["Spanish"]["NaturalezaId"] = "";
	$placeHolderscuentas["Spanish"]["NaturalezaId"] = "";
	$pageTitlescuentas["Spanish"]["add"] = "Cuentas";
	$pageTitlescuentas["Spanish"]["edit"] = "Cuentas";
	if (count($fieldToolTipscuentas["Spanish"]))
		$tdatacuentas[".isUseToolTips"] = true;
}


	$tdatacuentas[".NCSearch"] = true;



$tdatacuentas[".shortTableName"] = "cuentas";
$tdatacuentas[".nSecOptions"] = 0;

$tdatacuentas[".mainTableOwnerID"] = "";
$tdatacuentas[".entityType"] = 0;
$tdatacuentas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacuentas[".strOriginalTableName"] = "dbo.Cuentas";

	



$tdatacuentas[".showAddInPopup"] = false;

$tdatacuentas[".showEditInPopup"] = false;

$tdatacuentas[".showViewInPopup"] = false;

$tdatacuentas[".listAjax"] = false;
//	temporary
//$tdatacuentas[".listAjax"] = false;

	$tdatacuentas[".audit"] = true;

	$tdatacuentas[".locking"] = false;


$pages = $tdatacuentas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacuentas[".edit"] = true;
	$tdatacuentas[".afterEditAction"] = 1;
	$tdatacuentas[".closePopupAfterEdit"] = 1;
	$tdatacuentas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacuentas[".add"] = true;
$tdatacuentas[".afterAddAction"] = 1;
$tdatacuentas[".closePopupAfterAdd"] = 1;
$tdatacuentas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacuentas[".list"] = true;
}



$tdatacuentas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacuentas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacuentas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacuentas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacuentas[".printFriendly"] = true;
}



$tdatacuentas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacuentas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacuentas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacuentas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatacuentas[".ajaxCodeSnippetAdded"] = false;

$tdatacuentas[".buttonsAdded"] = false;

$tdatacuentas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacuentas[".isUseTimeForSearch"] = false;


$tdatacuentas[".badgeColor"] = "bc8f8f";


$tdatacuentas[".allSearchFields"] = array();
$tdatacuentas[".filterFields"] = array();
$tdatacuentas[".requiredSearchFields"] = array();

$tdatacuentas[".googleLikeFields"] = array();
$tdatacuentas[".googleLikeFields"][] = "Cuenta";
$tdatacuentas[".googleLikeFields"][] = "Numero";
$tdatacuentas[".googleLikeFields"][] = "SeccionalId";
$tdatacuentas[".googleLikeFields"][] = "ConceptoId";
$tdatacuentas[".googleLikeFields"][] = "Activa";
$tdatacuentas[".googleLikeFields"][] = "NaturalezaId";



$tdatacuentas[".tableType"] = "list";

$tdatacuentas[".printerPageOrientation"] = 0;
$tdatacuentas[".nPrinterPageScale"] = 100;

$tdatacuentas[".nPrinterSplitRecords"] = 40;

$tdatacuentas[".geocodingEnabled"] = false;




$tdatacuentas[".isDisplayLoading"] = true;

$tdatacuentas[".isResizeColumns"] = true;





$tdatacuentas[".pageSize"] = 5;

$tdatacuentas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacuentas[".strOrderBy"] = $tstrOrderBy;

$tdatacuentas[".orderindexes"] = array();


$tdatacuentas[".sqlHead"] = "SELECT CuentaId,  	Cuenta,  	BancoId,  	Numero,  	SeccionalId,  	ConceptoId,  	Activa,  	NaturalezaId";
$tdatacuentas[".sqlFrom"] = "FROM dbo.Cuentas";
$tdatacuentas[".sqlWhereExpr"] = "";
$tdatacuentas[".sqlTail"] = "";

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
$tdatacuentas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacuentas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacuentas[".arrGroupsPerPage"] = $arrGPP;

$tdatacuentas[".highlightSearchResults"] = true;

$tableKeyscuentas = array();
$tableKeyscuentas[] = "CuentaId";
$tdatacuentas[".Keys"] = $tableKeyscuentas;


$tdatacuentas[".hideMobileList"] = array();




//	CuentaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CuentaId";
	$fdata["GoodName"] = "CuentaId";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","CuentaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacuentas["CuentaId"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "CuentaId";
//	Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cuenta";
	$fdata["GoodName"] = "Cuenta";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","Cuenta");
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


	$tdatacuentas["Cuenta"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "Cuenta";
//	BancoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BancoId";
	$fdata["GoodName"] = "BancoId";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","BancoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BancoId";

		$fdata["sourceSingle"] = "BancoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BancoId";

	
	
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
	$edata["LookupTable"] = "dbo.Bancos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "BancoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdatacuentas["BancoId"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "BancoId";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero";

	
	
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


	$tdatacuentas["Numero"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "Numero";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","SeccionalId");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales1";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional1";

	

	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales1";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional1";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales1";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional1";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatacuentas["SeccionalId"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "SeccionalId";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","ConceptoId");
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
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["LinkFieldType"] = 0;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatacuentas["ConceptoId"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "ConceptoId";
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","Activa");
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


	$tdatacuentas["Activa"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "Activa";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Cuentas";
	$fdata["Label"] = GetFieldLabel("dbo_Cuentas","NaturalezaId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Naturalezas1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Naturaleza";

	

	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Naturalezas1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Naturaleza";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Naturalezas1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Naturaleza";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatacuentas["NaturalezaId"] = $fdata;
		$tdatacuentas[".searchableFields"][] = "NaturalezaId";


$tables_data["dbo.Cuentas"]=&$tdatacuentas;
$field_labels["dbo_Cuentas"] = &$fieldLabelscuentas;
$fieldToolTips["dbo_Cuentas"] = &$fieldToolTipscuentas;
$placeHolders["dbo_Cuentas"] = &$placeHolderscuentas;
$page_titles["dbo_Cuentas"] = &$pageTitlescuentas;


changeTextControlsToDate( "dbo.Cuentas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Cuentas"] = array();
//	dbo.Seccionales
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Seccionales";
		$detailsParam["dOriginalTable"] = "dbo.Seccionales";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "seccionales";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Seccionales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Cuentas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Cuentas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Cuentas"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Cuentas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Cuentas"][$dIndex]["detailKeys"][]="SeccionalId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Cuentas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Bancos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Bancos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "bancos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Cuentas"][0] = $masterParams;
				$masterTablesData["dbo.Cuentas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Cuentas"][0]["masterKeys"][]="BancoId";
				$masterTablesData["dbo.Cuentas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Cuentas"][0]["detailKeys"][]="BancoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cuentas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CuentaId,  	Cuenta,  	BancoId,  	Numero,  	SeccionalId,  	ConceptoId,  	Activa,  	NaturalezaId";
$proto0["m_strFrom"] = "FROM dbo.Cuentas";
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
	"m_strName" => "CuentaId",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto6["m_sql"] = "CuentaId";
$proto6["m_srcTableName"] = "dbo.Cuentas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuenta",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto8["m_sql"] = "Cuenta";
$proto8["m_srcTableName"] = "dbo.Cuentas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BancoId",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto10["m_sql"] = "BancoId";
$proto10["m_srcTableName"] = "dbo.Cuentas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto12["m_sql"] = "Numero";
$proto12["m_srcTableName"] = "dbo.Cuentas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto14["m_sql"] = "SeccionalId";
$proto14["m_srcTableName"] = "dbo.Cuentas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto16["m_sql"] = "ConceptoId";
$proto16["m_srcTableName"] = "dbo.Cuentas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto18["m_sql"] = "Activa";
$proto18["m_srcTableName"] = "dbo.Cuentas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Cuentas",
	"m_srcTableName" => "dbo.Cuentas"
));

$proto20["m_sql"] = "NaturalezaId";
$proto20["m_srcTableName"] = "dbo.Cuentas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Cuentas";
$proto23["m_srcTableName"] = "dbo.Cuentas";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "CuentaId";
$proto23["m_columns"][] = "Cuenta";
$proto23["m_columns"][] = "BancoId";
$proto23["m_columns"][] = "Numero";
$proto23["m_columns"][] = "SeccionalId";
$proto23["m_columns"][] = "ConceptoId";
$proto23["m_columns"][] = "Activa";
$proto23["m_columns"][] = "NaturalezaId";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.Cuentas";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.Cuentas";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Cuentas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cuentas = createSqlQuery_cuentas();


	
		;

								

$tdatacuentas[".sqlquery"] = $queryData_cuentas;



$tdatacuentas[".hasEvents"] = false;

?>