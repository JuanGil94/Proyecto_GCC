<?php
$tdataaplazamientos = array();
$tdataaplazamientos[".searchableFields"] = array();
$tdataaplazamientos[".ShortName"] = "aplazamientos";
$tdataaplazamientos[".OwnerID"] = "";
$tdataaplazamientos[".OriginalTable"] = "dbo.Aplazamientos";


$tdataaplazamientos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaplazamientos[".originalPagesByType"] = $tdataaplazamientos[".pagesByType"];
$tdataaplazamientos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaplazamientos[".originalPages"] = $tdataaplazamientos[".pages"];
$tdataaplazamientos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaplazamientos[".originalDefaultPages"] = $tdataaplazamientos[".defaultPages"];

//	field labels
$fieldLabelsaplazamientos = array();
$fieldToolTipsaplazamientos = array();
$pageTitlesaplazamientos = array();
$placeHoldersaplazamientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaplazamientos["Spanish"] = array();
	$fieldToolTipsaplazamientos["Spanish"] = array();
	$placeHoldersaplazamientos["Spanish"] = array();
	$pageTitlesaplazamientos["Spanish"] = array();
	$fieldLabelsaplazamientos["Spanish"]["AplazamientoId"] = "Aplazamiento";
	$fieldToolTipsaplazamientos["Spanish"]["AplazamientoId"] = "";
	$placeHoldersaplazamientos["Spanish"]["AplazamientoId"] = "";
	$fieldLabelsaplazamientos["Spanish"]["AlertaId"] = "Alerta";
	$fieldToolTipsaplazamientos["Spanish"]["AlertaId"] = "";
	$placeHoldersaplazamientos["Spanish"]["AlertaId"] = "";
	$fieldLabelsaplazamientos["Spanish"]["Aplazamiento"] = "Aplazamiento";
	$fieldToolTipsaplazamientos["Spanish"]["Aplazamiento"] = "";
	$placeHoldersaplazamientos["Spanish"]["Aplazamiento"] = "";
	$fieldLabelsaplazamientos["Spanish"]["Dias"] = "Dias";
	$fieldToolTipsaplazamientos["Spanish"]["Dias"] = "";
	$placeHoldersaplazamientos["Spanish"]["Dias"] = "";
	$fieldLabelsaplazamientos["Spanish"]["OficioId"] = "Oficio";
	$fieldToolTipsaplazamientos["Spanish"]["OficioId"] = "";
	$placeHoldersaplazamientos["Spanish"]["OficioId"] = "";
	if (count($fieldToolTipsaplazamientos["Spanish"]))
		$tdataaplazamientos[".isUseToolTips"] = true;
}


	$tdataaplazamientos[".NCSearch"] = true;



$tdataaplazamientos[".shortTableName"] = "aplazamientos";
$tdataaplazamientos[".nSecOptions"] = 0;

$tdataaplazamientos[".mainTableOwnerID"] = "";
$tdataaplazamientos[".entityType"] = 0;
$tdataaplazamientos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataaplazamientos[".strOriginalTableName"] = "dbo.Aplazamientos";

	



$tdataaplazamientos[".showAddInPopup"] = false;

$tdataaplazamientos[".showEditInPopup"] = false;

$tdataaplazamientos[".showViewInPopup"] = false;

$tdataaplazamientos[".listAjax"] = false;
//	temporary
//$tdataaplazamientos[".listAjax"] = false;

	$tdataaplazamientos[".audit"] = false;

	$tdataaplazamientos[".locking"] = false;


$pages = $tdataaplazamientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaplazamientos[".edit"] = true;
	$tdataaplazamientos[".afterEditAction"] = 1;
	$tdataaplazamientos[".closePopupAfterEdit"] = 1;
	$tdataaplazamientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaplazamientos[".add"] = true;
$tdataaplazamientos[".afterAddAction"] = 1;
$tdataaplazamientos[".closePopupAfterAdd"] = 1;
$tdataaplazamientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaplazamientos[".list"] = true;
}



$tdataaplazamientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaplazamientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaplazamientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaplazamientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaplazamientos[".printFriendly"] = true;
}



$tdataaplazamientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaplazamientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaplazamientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaplazamientos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdataaplazamientos[".ajaxCodeSnippetAdded"] = false;

$tdataaplazamientos[".buttonsAdded"] = false;

$tdataaplazamientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaplazamientos[".isUseTimeForSearch"] = false;


$tdataaplazamientos[".badgeColor"] = "9acd32";


$tdataaplazamientos[".allSearchFields"] = array();
$tdataaplazamientos[".filterFields"] = array();
$tdataaplazamientos[".requiredSearchFields"] = array();

$tdataaplazamientos[".googleLikeFields"] = array();
$tdataaplazamientos[".googleLikeFields"][] = "Aplazamiento";
$tdataaplazamientos[".googleLikeFields"][] = "Dias";
$tdataaplazamientos[".googleLikeFields"][] = "OficioId";



$tdataaplazamientos[".tableType"] = "list";

$tdataaplazamientos[".printerPageOrientation"] = 0;
$tdataaplazamientos[".nPrinterPageScale"] = 100;

$tdataaplazamientos[".nPrinterSplitRecords"] = 40;

$tdataaplazamientos[".geocodingEnabled"] = false;










$tdataaplazamientos[".pageSize"] = 20;

$tdataaplazamientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaplazamientos[".strOrderBy"] = $tstrOrderBy;

$tdataaplazamientos[".orderindexes"] = array();


$tdataaplazamientos[".sqlHead"] = "SELECT AplazamientoId,  	AlertaId,  	Aplazamiento,  	Dias,  	OficioId";
$tdataaplazamientos[".sqlFrom"] = "FROM dbo.Aplazamientos";
$tdataaplazamientos[".sqlWhereExpr"] = "";
$tdataaplazamientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaplazamientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaplazamientos[".arrGroupsPerPage"] = $arrGPP;

$tdataaplazamientos[".highlightSearchResults"] = true;

$tableKeysaplazamientos = array();
$tableKeysaplazamientos[] = "AplazamientoId";
$tdataaplazamientos[".Keys"] = $tableKeysaplazamientos;


$tdataaplazamientos[".hideMobileList"] = array();




//	AplazamientoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AplazamientoId";
	$fdata["GoodName"] = "AplazamientoId";
	$fdata["ownerTable"] = "dbo.Aplazamientos";
	$fdata["Label"] = GetFieldLabel("dbo_Aplazamientos","AplazamientoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AplazamientoId";

		$fdata["sourceSingle"] = "AplazamientoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AplazamientoId";

	
	
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


	$tdataaplazamientos["AplazamientoId"] = $fdata;
		$tdataaplazamientos[".searchableFields"][] = "AplazamientoId";
//	AlertaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AlertaId";
	$fdata["GoodName"] = "AlertaId";
	$fdata["ownerTable"] = "dbo.Aplazamientos";
	$fdata["Label"] = GetFieldLabel("dbo_Aplazamientos","AlertaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AlertaId";

		$fdata["sourceSingle"] = "AlertaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AlertaId";

	
	
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
	$edata["LookupTable"] = "dbo.Alertas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AlertaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "AlertaId";

	

	
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


	$tdataaplazamientos["AlertaId"] = $fdata;
		$tdataaplazamientos[".searchableFields"][] = "AlertaId";
//	Aplazamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Aplazamiento";
	$fdata["GoodName"] = "Aplazamiento";
	$fdata["ownerTable"] = "dbo.Aplazamientos";
	$fdata["Label"] = GetFieldLabel("dbo_Aplazamientos","Aplazamiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Aplazamiento";

		$fdata["sourceSingle"] = "Aplazamiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Aplazamiento";

	
	
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


	$tdataaplazamientos["Aplazamiento"] = $fdata;
		$tdataaplazamientos[".searchableFields"][] = "Aplazamiento";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Aplazamientos";
	$fdata["Label"] = GetFieldLabel("dbo_Aplazamientos","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dias";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdataaplazamientos["Dias"] = $fdata;
		$tdataaplazamientos[".searchableFields"][] = "Dias";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Aplazamientos";
	$fdata["Label"] = GetFieldLabel("dbo_Aplazamientos","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioId";

	
	
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
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
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
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
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
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


	$tdataaplazamientos["OficioId"] = $fdata;
		$tdataaplazamientos[".searchableFields"][] = "OficioId";


$tables_data["dbo.Aplazamientos"]=&$tdataaplazamientos;
$field_labels["dbo_Aplazamientos"] = &$fieldLabelsaplazamientos;
$fieldToolTips["dbo_Aplazamientos"] = &$fieldToolTipsaplazamientos;
$placeHolders["dbo_Aplazamientos"] = &$placeHoldersaplazamientos;
$page_titles["dbo_Aplazamientos"] = &$pageTitlesaplazamientos;


changeTextControlsToDate( "dbo.Aplazamientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Aplazamientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Aplazamientos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Alertas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Alertas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alertas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Aplazamientos"][0] = $masterParams;
				$masterTablesData["dbo.Aplazamientos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Aplazamientos"][0]["masterKeys"][]="AlertaId";
				$masterTablesData["dbo.Aplazamientos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Aplazamientos"][0]["detailKeys"][]="AlertaId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Oficios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Oficios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "oficios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Aplazamientos"][1] = $masterParams;
				$masterTablesData["dbo.Aplazamientos"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Aplazamientos"][1]["masterKeys"][]="OficioId";
				$masterTablesData["dbo.Aplazamientos"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Aplazamientos"][1]["detailKeys"][]="OficioId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aplazamientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AplazamientoId,  	AlertaId,  	Aplazamiento,  	Dias,  	OficioId";
$proto0["m_strFrom"] = "FROM dbo.Aplazamientos";
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
	"m_strName" => "AplazamientoId",
	"m_strTable" => "dbo.Aplazamientos",
	"m_srcTableName" => "dbo.Aplazamientos"
));

$proto6["m_sql"] = "AplazamientoId";
$proto6["m_srcTableName"] = "dbo.Aplazamientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AlertaId",
	"m_strTable" => "dbo.Aplazamientos",
	"m_srcTableName" => "dbo.Aplazamientos"
));

$proto8["m_sql"] = "AlertaId";
$proto8["m_srcTableName"] = "dbo.Aplazamientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Aplazamiento",
	"m_strTable" => "dbo.Aplazamientos",
	"m_srcTableName" => "dbo.Aplazamientos"
));

$proto10["m_sql"] = "Aplazamiento";
$proto10["m_srcTableName"] = "dbo.Aplazamientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Aplazamientos",
	"m_srcTableName" => "dbo.Aplazamientos"
));

$proto12["m_sql"] = "Dias";
$proto12["m_srcTableName"] = "dbo.Aplazamientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Aplazamientos",
	"m_srcTableName" => "dbo.Aplazamientos"
));

$proto14["m_sql"] = "OficioId";
$proto14["m_srcTableName"] = "dbo.Aplazamientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Aplazamientos";
$proto17["m_srcTableName"] = "dbo.Aplazamientos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "AplazamientoId";
$proto17["m_columns"][] = "AlertaId";
$proto17["m_columns"][] = "Aplazamiento";
$proto17["m_columns"][] = "Dias";
$proto17["m_columns"][] = "OficioId";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Aplazamientos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Aplazamientos";
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
$proto0["m_srcTableName"]="dbo.Aplazamientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aplazamientos = createSqlQuery_aplazamientos();


	
		;

					

$tdataaplazamientos[".sqlquery"] = $queryData_aplazamientos;



$tdataaplazamientos[".hasEvents"] = false;

?>