<?php
$tdataconceptos1 = array();
$tdataconceptos1[".searchableFields"] = array();
$tdataconceptos1[".ShortName"] = "conceptos1";
$tdataconceptos1[".OwnerID"] = "";
$tdataconceptos1[".OriginalTable"] = "dbo.Conceptos";


$tdataconceptos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconceptos1[".originalPagesByType"] = $tdataconceptos1[".pagesByType"];
$tdataconceptos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconceptos1[".originalPages"] = $tdataconceptos1[".pages"];
$tdataconceptos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconceptos1[".originalDefaultPages"] = $tdataconceptos1[".defaultPages"];

//	field labels
$fieldLabelsconceptos1 = array();
$fieldToolTipsconceptos1 = array();
$pageTitlesconceptos1 = array();
$placeHoldersconceptos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos1["Spanish"] = array();
	$fieldToolTipsconceptos1["Spanish"] = array();
	$placeHoldersconceptos1["Spanish"] = array();
	$pageTitlesconceptos1["Spanish"] = array();
	$fieldLabelsconceptos1["Spanish"]["ConceptoId"] = "Concepto Id";
	$fieldToolTipsconceptos1["Spanish"]["ConceptoId"] = "";
	$placeHoldersconceptos1["Spanish"]["ConceptoId"] = "";
	$fieldLabelsconceptos1["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsconceptos1["Spanish"]["Concepto"] = "";
	$placeHoldersconceptos1["Spanish"]["Concepto"] = "";
	$fieldLabelsconceptos1["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsconceptos1["Spanish"]["Activo"] = "";
	$placeHoldersconceptos1["Spanish"]["Activo"] = "";
	$fieldLabelsconceptos1["Spanish"]["Cuenta"] = "Cuenta";
	$fieldToolTipsconceptos1["Spanish"]["Cuenta"] = "";
	$placeHoldersconceptos1["Spanish"]["Cuenta"] = "";
	$fieldLabelsconceptos1["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipsconceptos1["Spanish"]["Naturaleza"] = "";
	$placeHoldersconceptos1["Spanish"]["Naturaleza"] = "";
	$fieldLabelsconceptos1["Spanish"]["NaturalezaId"] = "Naturaleza Id";
	$fieldToolTipsconceptos1["Spanish"]["NaturalezaId"] = "";
	$placeHoldersconceptos1["Spanish"]["NaturalezaId"] = "";
	if (count($fieldToolTipsconceptos1["Spanish"]))
		$tdataconceptos1[".isUseToolTips"] = true;
}


	$tdataconceptos1[".NCSearch"] = true;



$tdataconceptos1[".shortTableName"] = "conceptos1";
$tdataconceptos1[".nSecOptions"] = 0;

$tdataconceptos1[".mainTableOwnerID"] = "";
$tdataconceptos1[".entityType"] = 1;
$tdataconceptos1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconceptos1[".strOriginalTableName"] = "dbo.Conceptos";

	



$tdataconceptos1[".showAddInPopup"] = false;

$tdataconceptos1[".showEditInPopup"] = false;

$tdataconceptos1[".showViewInPopup"] = false;

$tdataconceptos1[".listAjax"] = false;
//	temporary
//$tdataconceptos1[".listAjax"] = false;

	$tdataconceptos1[".audit"] = true;

	$tdataconceptos1[".locking"] = false;


$pages = $tdataconceptos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos1[".edit"] = true;
	$tdataconceptos1[".afterEditAction"] = 1;
	$tdataconceptos1[".closePopupAfterEdit"] = 1;
	$tdataconceptos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos1[".add"] = true;
$tdataconceptos1[".afterAddAction"] = 1;
$tdataconceptos1[".closePopupAfterAdd"] = 1;
$tdataconceptos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos1[".list"] = true;
}



$tdataconceptos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos1[".printFriendly"] = true;
}



$tdataconceptos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos1[".isUseAjaxSuggest"] = true;



																																																																																																																											

$tdataconceptos1[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos1[".buttonsAdded"] = false;

$tdataconceptos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos1[".isUseTimeForSearch"] = false;


$tdataconceptos1[".badgeColor"] = "9ACD32";


$tdataconceptos1[".allSearchFields"] = array();
$tdataconceptos1[".filterFields"] = array();
$tdataconceptos1[".requiredSearchFields"] = array();

$tdataconceptos1[".googleLikeFields"] = array();
$tdataconceptos1[".googleLikeFields"][] = "ConceptoId";
$tdataconceptos1[".googleLikeFields"][] = "Concepto";
$tdataconceptos1[".googleLikeFields"][] = "Activo";
$tdataconceptos1[".googleLikeFields"][] = "Cuenta";
$tdataconceptos1[".googleLikeFields"][] = "Naturaleza";
$tdataconceptos1[".googleLikeFields"][] = "NaturalezaId";



$tdataconceptos1[".tableType"] = "list";

$tdataconceptos1[".printerPageOrientation"] = 0;
$tdataconceptos1[".nPrinterPageScale"] = 100;

$tdataconceptos1[".nPrinterSplitRecords"] = 40;

$tdataconceptos1[".geocodingEnabled"] = false;





$tdataconceptos1[".isResizeColumns"] = true;





$tdataconceptos1[".pageSize"] = 20;

$tdataconceptos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconceptos1[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos1[".orderindexes"] = array();


$tdataconceptos1[".sqlHead"] = "SELECT C.ConceptoId,  C.Concepto,  C.Activo,  C.Cuenta,  N.Naturaleza,  N.NaturalezaId";
$tdataconceptos1[".sqlFrom"] = "FROM dbo.Conceptos AS C  INNER JOIN dbo.Naturalezas AS N ON C.ConceptoId = N.ConceptoId";
$tdataconceptos1[".sqlWhereExpr"] = "";
$tdataconceptos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos1[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos1[".highlightSearchResults"] = true;

$tableKeysconceptos1 = array();
$tableKeysconceptos1[] = "ConceptoId";
$tdataconceptos1[".Keys"] = $tableKeysconceptos1;


$tdataconceptos1[".hideMobileList"] = array();




//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","ConceptoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.ConceptoId";

	
	
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


	$tdataconceptos1["ConceptoId"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "ConceptoId";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["sourceSingle"] = "Concepto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Concepto";

	
	
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


	$tdataconceptos1["Concepto"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "Concepto";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Activo";

	
	
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


	$tdataconceptos1["Activo"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "Activo";
//	Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cuenta";
	$fdata["GoodName"] = "Cuenta";
	$fdata["ownerTable"] = "dbo.Conceptos";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuenta";

		$fdata["sourceSingle"] = "Cuenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Cuenta";

	
	
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


	$tdataconceptos1["Cuenta"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "Cuenta";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","Naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Naturaleza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "N.Naturaleza";

	
	
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


	$tdataconceptos1["Naturaleza"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "Naturaleza";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Naturalezas";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos1","NaturalezaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NaturalezaId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "N.NaturalezaId";

	
	
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


	$tdataconceptos1["NaturalezaId"] = $fdata;
		$tdataconceptos1[".searchableFields"][] = "NaturalezaId";


$tables_data["dbo.Conceptos1"]=&$tdataconceptos1;
$field_labels["dbo_Conceptos1"] = &$fieldLabelsconceptos1;
$fieldToolTips["dbo_Conceptos1"] = &$fieldToolTipsconceptos1;
$placeHolders["dbo_Conceptos1"] = &$placeHoldersconceptos1;
$page_titles["dbo_Conceptos1"] = &$pageTitlesconceptos1;


changeTextControlsToDate( "dbo.Conceptos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Conceptos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Conceptos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_conceptos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "C.ConceptoId,  C.Concepto,  C.Activo,  C.Cuenta,  N.Naturaleza,  N.NaturalezaId";
$proto0["m_strFrom"] = "FROM dbo.Conceptos AS C  INNER JOIN dbo.Naturalezas AS N ON C.ConceptoId = N.ConceptoId";
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
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto6["m_sql"] = "C.ConceptoId";
$proto6["m_srcTableName"] = "dbo.Conceptos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto8["m_sql"] = "C.Concepto";
$proto8["m_srcTableName"] = "dbo.Conceptos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto10["m_sql"] = "C.Activo";
$proto10["m_srcTableName"] = "dbo.Conceptos1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuenta",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto12["m_sql"] = "C.Cuenta";
$proto12["m_srcTableName"] = "dbo.Conceptos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "N",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto14["m_sql"] = "N.Naturaleza";
$proto14["m_srcTableName"] = "dbo.Conceptos1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "N",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto16["m_sql"] = "N.NaturalezaId";
$proto16["m_srcTableName"] = "dbo.Conceptos1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Conceptos";
$proto19["m_srcTableName"] = "dbo.Conceptos1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ConceptoId";
$proto19["m_columns"][] = "Concepto";
$proto19["m_columns"][] = "Activo";
$proto19["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Conceptos AS C";
$proto18["m_alias"] = "C";
$proto18["m_srcTableName"] = "dbo.Conceptos1";
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
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Naturalezas";
$proto23["m_srcTableName"] = "dbo.Conceptos1";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "NaturalezaId";
$proto23["m_columns"][] = "Naturaleza";
$proto23["m_columns"][] = "ConceptoId";
$proto23["m_columns"][] = "TasaTipo";
$proto23["m_columns"][] = "Activa";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN dbo.Naturalezas AS N ON C.ConceptoId = N.ConceptoId";
$proto22["m_alias"] = "N";
$proto22["m_srcTableName"] = "dbo.Conceptos1";
$proto24=array();
$proto24["m_sql"] = "N.ConceptoId = C.ConceptoId";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "N",
	"m_srcTableName" => "dbo.Conceptos1"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= C.ConceptoId";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Conceptos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos1 = createSqlQuery_conceptos1();


	
		;

						

$tdataconceptos1[".sqlquery"] = $queryData_conceptos1;



$tdataconceptos1[".hasEvents"] = false;

?>