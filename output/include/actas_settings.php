<?php
$tdataactas = array();
$tdataactas[".searchableFields"] = array();
$tdataactas[".ShortName"] = "actas";
$tdataactas[".OwnerID"] = "";
$tdataactas[".OriginalTable"] = "dbo.Actas";


$tdataactas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataactas[".originalPagesByType"] = $tdataactas[".pagesByType"];
$tdataactas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataactas[".originalPages"] = $tdataactas[".pages"];
$tdataactas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataactas[".originalDefaultPages"] = $tdataactas[".defaultPages"];

//	field labels
$fieldLabelsactas = array();
$fieldToolTipsactas = array();
$pageTitlesactas = array();
$placeHoldersactas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactas["Spanish"] = array();
	$fieldToolTipsactas["Spanish"] = array();
	$placeHoldersactas["Spanish"] = array();
	$pageTitlesactas["Spanish"] = array();
	$fieldLabelsactas["Spanish"]["ActaId"] = "Acta Id";
	$fieldToolTipsactas["Spanish"]["ActaId"] = "";
	$placeHoldersactas["Spanish"]["ActaId"] = "";
	$fieldLabelsactas["Spanish"]["Acta"] = "Acta";
	$fieldToolTipsactas["Spanish"]["Acta"] = "";
	$placeHoldersactas["Spanish"]["Acta"] = "";
	$fieldLabelsactas["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsactas["Spanish"]["Fecha"] = "";
	$placeHoldersactas["Spanish"]["Fecha"] = "";
	$fieldLabelsactas["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsactas["Spanish"]["AbogadoId"] = "";
	$placeHoldersactas["Spanish"]["AbogadoId"] = "";
	$fieldLabelsactas["Spanish"]["Consolidada"] = "Consolidada";
	$fieldToolTipsactas["Spanish"]["Consolidada"] = "";
	$placeHoldersactas["Spanish"]["Consolidada"] = "";
	$fieldLabelsactas["Spanish"]["Rechazo"] = "Rechazo";
	$fieldToolTipsactas["Spanish"]["Rechazo"] = "";
	$placeHoldersactas["Spanish"]["Rechazo"] = "";
	$fieldLabelsactas["Spanish"]["Pareja"] = "Pareja";
	$fieldToolTipsactas["Spanish"]["Pareja"] = "";
	$placeHoldersactas["Spanish"]["Pareja"] = "";
	$fieldLabelsactas["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsactas["Spanish"]["Abogado"] = "";
	$placeHoldersactas["Spanish"]["Abogado"] = "";
	$fieldLabelsactas["Spanish"]["AbogadoMinjusticia"] = "Abogado Minjusticia";
	$fieldToolTipsactas["Spanish"]["AbogadoMinjusticia"] = "";
	$placeHoldersactas["Spanish"]["AbogadoMinjusticia"] = "";
	$pageTitlesactas["Spanish"]["add"] = "Actas";
	$pageTitlesactas["Spanish"]["edit"] = "Actas";
	if (count($fieldToolTipsactas["Spanish"]))
		$tdataactas[".isUseToolTips"] = true;
}


	$tdataactas[".NCSearch"] = true;



$tdataactas[".shortTableName"] = "actas";
$tdataactas[".nSecOptions"] = 0;

$tdataactas[".mainTableOwnerID"] = "";
$tdataactas[".entityType"] = 0;
$tdataactas[".connId"] = "GCC_at_S00001_CCAD01";


$tdataactas[".strOriginalTableName"] = "dbo.Actas";

	



$tdataactas[".showAddInPopup"] = false;

$tdataactas[".showEditInPopup"] = false;

$tdataactas[".showViewInPopup"] = false;

$tdataactas[".listAjax"] = false;
//	temporary
//$tdataactas[".listAjax"] = false;

	$tdataactas[".audit"] = false;

	$tdataactas[".locking"] = false;


$pages = $tdataactas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactas[".edit"] = true;
	$tdataactas[".afterEditAction"] = 1;
	$tdataactas[".closePopupAfterEdit"] = 1;
	$tdataactas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactas[".add"] = true;
$tdataactas[".afterAddAction"] = 1;
$tdataactas[".closePopupAfterAdd"] = 1;
$tdataactas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactas[".list"] = true;
}



$tdataactas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactas[".printFriendly"] = true;
}



$tdataactas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataactas[".ajaxCodeSnippetAdded"] = false;

$tdataactas[".buttonsAdded"] = false;

$tdataactas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactas[".isUseTimeForSearch"] = false;


$tdataactas[".badgeColor"] = "E67349";


$tdataactas[".allSearchFields"] = array();
$tdataactas[".filterFields"] = array();
$tdataactas[".requiredSearchFields"] = array();

$tdataactas[".googleLikeFields"] = array();
$tdataactas[".googleLikeFields"][] = "ActaId";
$tdataactas[".googleLikeFields"][] = "Acta";
$tdataactas[".googleLikeFields"][] = "Fecha";
$tdataactas[".googleLikeFields"][] = "AbogadoId";
$tdataactas[".googleLikeFields"][] = "Consolidada";
$tdataactas[".googleLikeFields"][] = "Rechazo";
$tdataactas[".googleLikeFields"][] = "Pareja";
$tdataactas[".googleLikeFields"][] = "Abogado";
$tdataactas[".googleLikeFields"][] = "AbogadoMinjusticia";



$tdataactas[".tableType"] = "list";

$tdataactas[".printerPageOrientation"] = 0;
$tdataactas[".nPrinterPageScale"] = 100;

$tdataactas[".nPrinterSplitRecords"] = 40;

$tdataactas[".geocodingEnabled"] = false;




$tdataactas[".isDisplayLoading"] = true;

$tdataactas[".isResizeColumns"] = true;





$tdataactas[".pageSize"] = 20;

$tdataactas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactas[".strOrderBy"] = $tstrOrderBy;

$tdataactas[".orderindexes"] = array();


$tdataactas[".sqlHead"] = "SELECT ActaId,  	Acta,  	Fecha,  	AbogadoId,  	Consolidada,  	Rechazo,  	Pareja,  	Abogado,  	AbogadoMinjusticia";
$tdataactas[".sqlFrom"] = "FROM dbo.Actas";
$tdataactas[".sqlWhereExpr"] = "";
$tdataactas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataactas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactas[".arrGroupsPerPage"] = $arrGPP;

$tdataactas[".highlightSearchResults"] = true;

$tableKeysactas = array();
$tableKeysactas[] = "ActaId";
$tdataactas[".Keys"] = $tableKeysactas;


$tdataactas[".hideMobileList"] = array();




//	ActaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ActaId";
	$fdata["GoodName"] = "ActaId";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","ActaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ActaId";

		$fdata["sourceSingle"] = "ActaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActaId";

	
	
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


	$tdataactas["ActaId"] = $fdata;
		$tdataactas[".searchableFields"][] = "ActaId";
//	Acta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Acta";
	$fdata["GoodName"] = "Acta";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Acta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Acta";

		$fdata["sourceSingle"] = "Acta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Acta";

	
	
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


	$tdataactas["Acta"] = $fdata;
		$tdataactas[".searchableFields"][] = "Acta";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	$tdataactas["Fecha"] = $fdata;
		$tdataactas[".searchableFields"][] = "Fecha";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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


	$tdataactas["AbogadoId"] = $fdata;
		$tdataactas[".searchableFields"][] = "AbogadoId";
//	Consolidada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Consolidada";
	$fdata["GoodName"] = "Consolidada";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Consolidada");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Consolidada";

		$fdata["sourceSingle"] = "Consolidada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Consolidada";

	
	
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


	$tdataactas["Consolidada"] = $fdata;
		$tdataactas[".searchableFields"][] = "Consolidada";
//	Rechazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Rechazo";
	$fdata["GoodName"] = "Rechazo";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Rechazo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Rechazo";

		$fdata["sourceSingle"] = "Rechazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rechazo";

	
	
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


	$tdataactas["Rechazo"] = $fdata;
		$tdataactas[".searchableFields"][] = "Rechazo";
//	Pareja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Pareja";
	$fdata["GoodName"] = "Pareja";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Pareja");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pareja";

		$fdata["sourceSingle"] = "Pareja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pareja";

	
	
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


	$tdataactas["Pareja"] = $fdata;
		$tdataactas[".searchableFields"][] = "Pareja";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

		$fdata["sourceSingle"] = "Abogado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogado";

	
	
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


	$tdataactas["Abogado"] = $fdata;
		$tdataactas[".searchableFields"][] = "Abogado";
//	AbogadoMinjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AbogadoMinjusticia";
	$fdata["GoodName"] = "AbogadoMinjusticia";
	$fdata["ownerTable"] = "dbo.Actas";
	$fdata["Label"] = GetFieldLabel("dbo_Actas","AbogadoMinjusticia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AbogadoMinjusticia";

		$fdata["sourceSingle"] = "AbogadoMinjusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoMinjusticia";

	
	
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


	$tdataactas["AbogadoMinjusticia"] = $fdata;
		$tdataactas[".searchableFields"][] = "AbogadoMinjusticia";


$tables_data["dbo.Actas"]=&$tdataactas;
$field_labels["dbo_Actas"] = &$fieldLabelsactas;
$fieldToolTips["dbo_Actas"] = &$fieldToolTipsactas;
$placeHolders["dbo_Actas"] = &$placeHoldersactas;
$page_titles["dbo_Actas"] = &$pageTitlesactas;


changeTextControlsToDate( "dbo.Actas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Actas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Actas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ActaId,  	Acta,  	Fecha,  	AbogadoId,  	Consolidada,  	Rechazo,  	Pareja,  	Abogado,  	AbogadoMinjusticia";
$proto0["m_strFrom"] = "FROM dbo.Actas";
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
	"m_strName" => "ActaId",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto6["m_sql"] = "ActaId";
$proto6["m_srcTableName"] = "dbo.Actas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Acta",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto8["m_sql"] = "Acta";
$proto8["m_srcTableName"] = "dbo.Actas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.Actas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto12["m_sql"] = "AbogadoId";
$proto12["m_srcTableName"] = "dbo.Actas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Consolidada",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto14["m_sql"] = "Consolidada";
$proto14["m_srcTableName"] = "dbo.Actas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Rechazo",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto16["m_sql"] = "Rechazo";
$proto16["m_srcTableName"] = "dbo.Actas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Pareja",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto18["m_sql"] = "Pareja";
$proto18["m_srcTableName"] = "dbo.Actas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto20["m_sql"] = "Abogado";
$proto20["m_srcTableName"] = "dbo.Actas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoMinjusticia",
	"m_strTable" => "dbo.Actas",
	"m_srcTableName" => "dbo.Actas"
));

$proto22["m_sql"] = "AbogadoMinjusticia";
$proto22["m_srcTableName"] = "dbo.Actas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Actas";
$proto25["m_srcTableName"] = "dbo.Actas";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ActaId";
$proto25["m_columns"][] = "Acta";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "AbogadoId";
$proto25["m_columns"][] = "Consolidada";
$proto25["m_columns"][] = "Rechazo";
$proto25["m_columns"][] = "Pareja";
$proto25["m_columns"][] = "Abogado";
$proto25["m_columns"][] = "AbogadoMinjusticia";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.Actas";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Actas";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Actas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actas = createSqlQuery_actas();


	
		;

									

$tdataactas[".sqlquery"] = $queryData_actas;



$tdataactas[".hasEvents"] = false;

?>