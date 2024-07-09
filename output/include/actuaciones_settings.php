<?php
$tdataactuaciones = array();
$tdataactuaciones[".searchableFields"] = array();
$tdataactuaciones[".ShortName"] = "actuaciones";
$tdataactuaciones[".OwnerID"] = "";
$tdataactuaciones[".OriginalTable"] = "dbo.Actuaciones";


$tdataactuaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataactuaciones[".originalPagesByType"] = $tdataactuaciones[".pagesByType"];
$tdataactuaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataactuaciones[".originalPages"] = $tdataactuaciones[".pages"];
$tdataactuaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataactuaciones[".originalDefaultPages"] = $tdataactuaciones[".defaultPages"];

//	field labels
$fieldLabelsactuaciones = array();
$fieldToolTipsactuaciones = array();
$pageTitlesactuaciones = array();
$placeHoldersactuaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactuaciones["Spanish"] = array();
	$fieldToolTipsactuaciones["Spanish"] = array();
	$placeHoldersactuaciones["Spanish"] = array();
	$pageTitlesactuaciones["Spanish"] = array();
	$fieldLabelsactuaciones["Spanish"]["ActuacionId"] = "Actuacion Id";
	$fieldToolTipsactuaciones["Spanish"]["ActuacionId"] = "";
	$placeHoldersactuaciones["Spanish"]["ActuacionId"] = "";
	$fieldLabelsactuaciones["Spanish"]["Actuacion"] = "Actuación";
	$fieldToolTipsactuaciones["Spanish"]["Actuacion"] = "";
	$placeHoldersactuaciones["Spanish"]["Actuacion"] = "";
	$fieldLabelsactuaciones["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsactuaciones["Spanish"]["EstadoId"] = "";
	$placeHoldersactuaciones["Spanish"]["EstadoId"] = "";
	$fieldLabelsactuaciones["Spanish"]["MotivoId"] = "Motivo Terminación";
	$fieldToolTipsactuaciones["Spanish"]["MotivoId"] = "";
	$placeHoldersactuaciones["Spanish"]["MotivoId"] = "";
	$fieldLabelsactuaciones["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsactuaciones["Spanish"]["Intereses"] = "";
	$placeHoldersactuaciones["Spanish"]["Intereses"] = "";
	$fieldLabelsactuaciones["Spanish"]["EtapaId"] = "Etapa";
	$fieldToolTipsactuaciones["Spanish"]["EtapaId"] = "";
	$placeHoldersactuaciones["Spanish"]["EtapaId"] = "";
	if (count($fieldToolTipsactuaciones["Spanish"]))
		$tdataactuaciones[".isUseToolTips"] = true;
}


	$tdataactuaciones[".NCSearch"] = true;



$tdataactuaciones[".shortTableName"] = "actuaciones";
$tdataactuaciones[".nSecOptions"] = 0;

$tdataactuaciones[".mainTableOwnerID"] = "";
$tdataactuaciones[".entityType"] = 0;
$tdataactuaciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdataactuaciones[".strOriginalTableName"] = "dbo.Actuaciones";

	



$tdataactuaciones[".showAddInPopup"] = false;

$tdataactuaciones[".showEditInPopup"] = false;

$tdataactuaciones[".showViewInPopup"] = false;

$tdataactuaciones[".listAjax"] = false;
//	temporary
//$tdataactuaciones[".listAjax"] = false;

	$tdataactuaciones[".audit"] = true;

	$tdataactuaciones[".locking"] = false;


$pages = $tdataactuaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactuaciones[".edit"] = true;
	$tdataactuaciones[".afterEditAction"] = 0;
	$tdataactuaciones[".closePopupAfterEdit"] = 1;
	$tdataactuaciones[".afterEditActionDetTable"] = "dbo.Alertas";
}

if( $pages[PAGE_ADD] ) {
$tdataactuaciones[".add"] = true;
$tdataactuaciones[".afterAddAction"] = 1;
$tdataactuaciones[".closePopupAfterAdd"] = 1;
$tdataactuaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactuaciones[".list"] = true;
}



$tdataactuaciones[".strSortControlSettingsJSON"] = "[]";




if( $pages[PAGE_VIEW] ) {
$tdataactuaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactuaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactuaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactuaciones[".printFriendly"] = true;
}



$tdataactuaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactuaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactuaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactuaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdataactuaciones[".ajaxCodeSnippetAdded"] = false;

$tdataactuaciones[".buttonsAdded"] = false;

$tdataactuaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactuaciones[".isUseTimeForSearch"] = false;


$tdataactuaciones[".badgeColor"] = "2F4F4F";


$tdataactuaciones[".allSearchFields"] = array();
$tdataactuaciones[".filterFields"] = array();
$tdataactuaciones[".requiredSearchFields"] = array();

$tdataactuaciones[".googleLikeFields"] = array();
$tdataactuaciones[".googleLikeFields"][] = "ActuacionId";
$tdataactuaciones[".googleLikeFields"][] = "Actuacion";
$tdataactuaciones[".googleLikeFields"][] = "EstadoId";
$tdataactuaciones[".googleLikeFields"][] = "MotivoId";
$tdataactuaciones[".googleLikeFields"][] = "Intereses";
$tdataactuaciones[".googleLikeFields"][] = "EtapaId";



$tdataactuaciones[".tableType"] = "list";

$tdataactuaciones[".printerPageOrientation"] = 0;
$tdataactuaciones[".nPrinterPageScale"] = 100;

$tdataactuaciones[".nPrinterSplitRecords"] = 40;

$tdataactuaciones[".geocodingEnabled"] = false;





$tdataactuaciones[".isResizeColumns"] = true;





$tdataactuaciones[".pageSize"] = 20;

$tdataactuaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactuaciones[".strOrderBy"] = $tstrOrderBy;

$tdataactuaciones[".orderindexes"] = array();


$tdataactuaciones[".sqlHead"] = "SELECT ActuacionId,  	Actuacion,  	EstadoId,  	MotivoId,  	Intereses,  	EtapaId";
$tdataactuaciones[".sqlFrom"] = "FROM dbo.Actuaciones";
$tdataactuaciones[".sqlWhereExpr"] = "";
$tdataactuaciones[".sqlTail"] = "";

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
$tdataactuaciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactuaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactuaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataactuaciones[".highlightSearchResults"] = true;

$tableKeysactuaciones = array();
$tableKeysactuaciones[] = "ActuacionId";
$tdataactuaciones[".Keys"] = $tableKeysactuaciones;


$tdataactuaciones[".hideMobileList"] = array();




//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","ActuacionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ActuacionId";

		$fdata["sourceSingle"] = "ActuacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActuacionId";

	
	
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


	$tdataactuaciones["ActuacionId"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "ActuacionId";
//	Actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Actuacion";
	$fdata["GoodName"] = "Actuacion";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","Actuacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Actuacion";

		$fdata["sourceSingle"] = "Actuacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Actuacion";

	
	
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


	$tdataactuaciones["Actuacion"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "Actuacion";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EstadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EstadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Estado";

	

	
	$edata["LookupOrderBy"] = "EstadoId";

	
	
	
	

	
	
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


	$tdataactuaciones["EstadoId"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "EstadoId";
//	MotivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MotivoId";
	$fdata["GoodName"] = "MotivoId";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","MotivoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MotivoId";

		$fdata["sourceSingle"] = "MotivoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoId";

	
	
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
	$edata["LookupTable"] = "dbo.Motivos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MotivoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Motivo";

	

	
	$edata["LookupOrderBy"] = "MotivoId";

	
	
	
	

	
	
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


	$tdataactuaciones["MotivoId"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "MotivoId";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","Intereses");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses";

	
	
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


	$tdataactuaciones["Intereses"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "Intereses";
//	EtapaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EtapaId";
	$fdata["GoodName"] = "EtapaId";
	$fdata["ownerTable"] = "dbo.Actuaciones";
	$fdata["Label"] = GetFieldLabel("dbo_Actuaciones","EtapaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EtapaId";

		$fdata["sourceSingle"] = "EtapaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EtapaId";

	
	
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
	$edata["LookupTable"] = "dbo.Etapas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EtapaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Etapa";

	

	
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


	$tdataactuaciones["EtapaId"] = $fdata;
		$tdataactuaciones[".searchableFields"][] = "EtapaId";


$tables_data["dbo.Actuaciones"]=&$tdataactuaciones;
$field_labels["dbo_Actuaciones"] = &$fieldLabelsactuaciones;
$fieldToolTips["dbo_Actuaciones"] = &$fieldToolTipsactuaciones;
$placeHolders["dbo_Actuaciones"] = &$placeHoldersactuaciones;
$page_titles["dbo_Actuaciones"] = &$pageTitlesactuaciones;


changeTextControlsToDate( "dbo.Actuaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Actuaciones"] = array();
//	dbo.Oficios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Oficios";
		$detailsParam["dOriginalTable"] = "dbo.Oficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "oficios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Oficios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.Procesos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.Oficios Sigobius
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Oficios Sigobius";
		$detailsParam["dOriginalTable"] = "dbo.Oficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "oficios_sigobius";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Oficios_Sigobius");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.Alertas
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Alertas";
		$detailsParam["dOriginalTable"] = "dbo.Alertas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alertas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Alertas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.Oficios1
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Oficios1";
		$detailsParam["dOriginalTable"] = "dbo.Oficios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "oficios1";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Oficios1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.Fechas
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Fechas";
		$detailsParam["dOriginalTable"] = "dbo.Fechas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "fechas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Fechas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//	dbo.ProcesosReasignar
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosReasignar";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesosreasignar";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosReasignar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Actuaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["masterKeys"][]="ActuacionId";

				$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Actuaciones"][$dIndex]["detailKeys"][]="ActuacionId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Actuaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Etapas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Etapas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "etapas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Actuaciones"][0] = $masterParams;
				$masterTablesData["dbo.Actuaciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Actuaciones"][0]["masterKeys"][]="EtapaId";
				$masterTablesData["dbo.Actuaciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Actuaciones"][0]["detailKeys"][]="EtapaId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actuaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ActuacionId,  	Actuacion,  	EstadoId,  	MotivoId,  	Intereses,  	EtapaId";
$proto0["m_strFrom"] = "FROM dbo.Actuaciones";
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
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto6["m_sql"] = "ActuacionId";
$proto6["m_srcTableName"] = "dbo.Actuaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Actuacion",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto8["m_sql"] = "Actuacion";
$proto8["m_srcTableName"] = "dbo.Actuaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto10["m_sql"] = "EstadoId";
$proto10["m_srcTableName"] = "dbo.Actuaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MotivoId",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto12["m_sql"] = "MotivoId";
$proto12["m_srcTableName"] = "dbo.Actuaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto14["m_sql"] = "Intereses";
$proto14["m_srcTableName"] = "dbo.Actuaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Actuaciones",
	"m_srcTableName" => "dbo.Actuaciones"
));

$proto16["m_sql"] = "EtapaId";
$proto16["m_srcTableName"] = "dbo.Actuaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Actuaciones";
$proto19["m_srcTableName"] = "dbo.Actuaciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ActuacionId";
$proto19["m_columns"][] = "Actuacion";
$proto19["m_columns"][] = "EstadoId";
$proto19["m_columns"][] = "MotivoId";
$proto19["m_columns"][] = "Intereses";
$proto19["m_columns"][] = "EtapaId";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Actuaciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Actuaciones";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Actuaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actuaciones = createSqlQuery_actuaciones();


	
		;

						

$tdataactuaciones[".sqlquery"] = $queryData_actuaciones;



$tdataactuaciones[".hasEvents"] = false;

?>