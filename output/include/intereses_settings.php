<?php
$tdataintereses = array();
$tdataintereses[".searchableFields"] = array();
$tdataintereses[".ShortName"] = "intereses";
$tdataintereses[".OwnerID"] = "";
$tdataintereses[".OriginalTable"] = "dbo.Intereses";


$tdataintereses[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataintereses[".originalPagesByType"] = $tdataintereses[".pagesByType"];
$tdataintereses[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataintereses[".originalPages"] = $tdataintereses[".pages"];
$tdataintereses[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataintereses[".originalDefaultPages"] = $tdataintereses[".defaultPages"];

//	field labels
$fieldLabelsintereses = array();
$fieldToolTipsintereses = array();
$pageTitlesintereses = array();
$placeHoldersintereses = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsintereses["Spanish"] = array();
	$fieldToolTipsintereses["Spanish"] = array();
	$placeHoldersintereses["Spanish"] = array();
	$pageTitlesintereses["Spanish"] = array();
	$fieldLabelsintereses["Spanish"]["InteresId"] = "Interes Id";
	$fieldToolTipsintereses["Spanish"]["InteresId"] = "";
	$placeHoldersintereses["Spanish"]["InteresId"] = "";
	$fieldLabelsintereses["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsintereses["Spanish"]["ProcesoId"] = "";
	$placeHoldersintereses["Spanish"]["ProcesoId"] = "";
	$fieldLabelsintereses["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsintereses["Spanish"]["Fecha"] = "";
	$placeHoldersintereses["Spanish"]["Fecha"] = "";
	$fieldLabelsintereses["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsintereses["Spanish"]["Intereses"] = "";
	$placeHoldersintereses["Spanish"]["Intereses"] = "";
	$fieldLabelsintereses["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsintereses["Spanish"]["SeccionalId"] = "";
	$placeHoldersintereses["Spanish"]["SeccionalId"] = "";
	$fieldLabelsintereses["Spanish"]["Liquidacion"] = "Liquidacion";
	$fieldToolTipsintereses["Spanish"]["Liquidacion"] = "";
	$placeHoldersintereses["Spanish"]["Liquidacion"] = "";
	$fieldLabelsintereses["Spanish"]["PagoId"] = "Pago Id";
	$fieldToolTipsintereses["Spanish"]["PagoId"] = "";
	$placeHoldersintereses["Spanish"]["PagoId"] = "";
	if (count($fieldToolTipsintereses["Spanish"]))
		$tdataintereses[".isUseToolTips"] = true;
}


	$tdataintereses[".NCSearch"] = true;



$tdataintereses[".shortTableName"] = "intereses";
$tdataintereses[".nSecOptions"] = 0;

$tdataintereses[".mainTableOwnerID"] = "";
$tdataintereses[".entityType"] = 0;
$tdataintereses[".connId"] = "GCC_at_S00001_CCAD01";


$tdataintereses[".strOriginalTableName"] = "dbo.Intereses";

	



$tdataintereses[".showAddInPopup"] = false;

$tdataintereses[".showEditInPopup"] = false;

$tdataintereses[".showViewInPopup"] = false;

$tdataintereses[".listAjax"] = false;
//	temporary
//$tdataintereses[".listAjax"] = false;

	$tdataintereses[".audit"] = true;

	$tdataintereses[".locking"] = false;


$pages = $tdataintereses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataintereses[".edit"] = true;
	$tdataintereses[".afterEditAction"] = 1;
	$tdataintereses[".closePopupAfterEdit"] = 1;
	$tdataintereses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataintereses[".add"] = true;
$tdataintereses[".afterAddAction"] = 1;
$tdataintereses[".closePopupAfterAdd"] = 1;
$tdataintereses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataintereses[".list"] = true;
}



$tdataintereses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataintereses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataintereses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataintereses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataintereses[".printFriendly"] = true;
}



$tdataintereses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataintereses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataintereses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataintereses[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdataintereses[".ajaxCodeSnippetAdded"] = false;

$tdataintereses[".buttonsAdded"] = false;

$tdataintereses[".addPageEvents"] = false;

// use timepicker for search panel
$tdataintereses[".isUseTimeForSearch"] = false;


$tdataintereses[".badgeColor"] = "cfae83";


$tdataintereses[".allSearchFields"] = array();
$tdataintereses[".filterFields"] = array();
$tdataintereses[".requiredSearchFields"] = array();

$tdataintereses[".googleLikeFields"] = array();
$tdataintereses[".googleLikeFields"][] = "InteresId";
$tdataintereses[".googleLikeFields"][] = "ProcesoId";
$tdataintereses[".googleLikeFields"][] = "Fecha";
$tdataintereses[".googleLikeFields"][] = "Intereses";
$tdataintereses[".googleLikeFields"][] = "SeccionalId";
$tdataintereses[".googleLikeFields"][] = "Liquidacion";
$tdataintereses[".googleLikeFields"][] = "PagoId";



$tdataintereses[".tableType"] = "list";

$tdataintereses[".printerPageOrientation"] = 0;
$tdataintereses[".nPrinterPageScale"] = 100;

$tdataintereses[".nPrinterSplitRecords"] = 40;

$tdataintereses[".geocodingEnabled"] = false;





$tdataintereses[".isResizeColumns"] = true;





$tdataintereses[".pageSize"] = 20;

$tdataintereses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataintereses[".strOrderBy"] = $tstrOrderBy;

$tdataintereses[".orderindexes"] = array();


$tdataintereses[".sqlHead"] = "SELECT InteresId,  	ProcesoId,  	Fecha,  	FORMAT(Intereses, 'C', 'es-CO') Intereses,  	SeccionalId,  	Liquidacion,  	PagoId";
$tdataintereses[".sqlFrom"] = "FROM dbo.Intereses";
$tdataintereses[".sqlWhereExpr"] = "";
$tdataintereses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataintereses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataintereses[".arrGroupsPerPage"] = $arrGPP;

$tdataintereses[".highlightSearchResults"] = true;

$tableKeysintereses = array();
$tableKeysintereses[] = "InteresId";
$tdataintereses[".Keys"] = $tableKeysintereses;


$tdataintereses[".hideMobileList"] = array();




//	InteresId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "InteresId";
	$fdata["GoodName"] = "InteresId";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","InteresId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "InteresId";

		$fdata["sourceSingle"] = "InteresId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresId";

	
	
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


	$tdataintereses["InteresId"] = $fdata;
		$tdataintereses[".searchableFields"][] = "InteresId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","ProcesoId");
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


	$tdataintereses["ProcesoId"] = $fdata;
		$tdataintereses[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","Fecha");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataintereses["Fecha"] = $fdata;
		$tdataintereses[".searchableFields"][] = "Fecha";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","Intereses");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Intereses, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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


	$tdataintereses["Intereses"] = $fdata;
		$tdataintereses[".searchableFields"][] = "Intereses";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","SeccionalId");
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


	$tdataintereses["SeccionalId"] = $fdata;
		$tdataintereses[".searchableFields"][] = "SeccionalId";
//	Liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Liquidacion";
	$fdata["GoodName"] = "Liquidacion";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","Liquidacion");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Liquidacion";

		$fdata["sourceSingle"] = "Liquidacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Liquidacion";

	
	
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


	$tdataintereses["Liquidacion"] = $fdata;
		$tdataintereses[".searchableFields"][] = "Liquidacion";
//	PagoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PagoId";
	$fdata["GoodName"] = "PagoId";
	$fdata["ownerTable"] = "dbo.Intereses";
	$fdata["Label"] = GetFieldLabel("dbo_Intereses","PagoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PagoId";

		$fdata["sourceSingle"] = "PagoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagoId";

	
	
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


	$tdataintereses["PagoId"] = $fdata;
		$tdataintereses[".searchableFields"][] = "PagoId";


$tables_data["dbo.Intereses"]=&$tdataintereses;
$field_labels["dbo_Intereses"] = &$fieldLabelsintereses;
$fieldToolTips["dbo_Intereses"] = &$fieldToolTipsintereses;
$placeHolders["dbo_Intereses"] = &$placeHoldersintereses;
$page_titles["dbo_Intereses"] = &$pageTitlesintereses;


changeTextControlsToDate( "dbo.Intereses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Intereses"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Intereses"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Intereses"][0] = $masterParams;
				$masterTablesData["dbo.Intereses"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Intereses"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Intereses"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Intereses"][0]["detailKeys"][]="ProcesoId";
		
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
					$masterTablesData["dbo.Intereses"][1] = $masterParams;
				$masterTablesData["dbo.Intereses"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Intereses"][1]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Intereses"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Intereses"][1]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_intereses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "InteresId,  	ProcesoId,  	Fecha,  	FORMAT(Intereses, 'C', 'es-CO') Intereses,  	SeccionalId,  	Liquidacion,  	PagoId";
$proto0["m_strFrom"] = "FROM dbo.Intereses";
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
	"m_strName" => "InteresId",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto6["m_sql"] = "InteresId";
$proto6["m_srcTableName"] = "dbo.Intereses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.Intereses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.Intereses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Intereses"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "FORMAT(Intereses, 'C', 'es-CO')";
$proto12["m_srcTableName"] = "dbo.Intereses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Intereses";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto17["m_sql"] = "SeccionalId";
$proto17["m_srcTableName"] = "dbo.Intereses";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Liquidacion",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto19["m_sql"] = "Liquidacion";
$proto19["m_srcTableName"] = "dbo.Intereses";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "PagoId",
	"m_strTable" => "dbo.Intereses",
	"m_srcTableName" => "dbo.Intereses"
));

$proto21["m_sql"] = "PagoId";
$proto21["m_srcTableName"] = "dbo.Intereses";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "dbo.Intereses";
$proto24["m_srcTableName"] = "dbo.Intereses";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "InteresId";
$proto24["m_columns"][] = "ProcesoId";
$proto24["m_columns"][] = "Fecha";
$proto24["m_columns"][] = "Intereses";
$proto24["m_columns"][] = "SeccionalId";
$proto24["m_columns"][] = "Liquidacion";
$proto24["m_columns"][] = "PagoId";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "dbo.Intereses";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "dbo.Intereses";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Intereses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_intereses = createSqlQuery_intereses();


	
		;

							

$tdataintereses[".sqlquery"] = $queryData_intereses;



$tdataintereses[".hasEvents"] = false;

?>