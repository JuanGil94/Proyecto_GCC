<?php
$tdatacarceles3 = array();
$tdatacarceles3[".searchableFields"] = array();
$tdatacarceles3[".ShortName"] = "carceles3";
$tdatacarceles3[".OwnerID"] = "";
$tdatacarceles3[".OriginalTable"] = "dbo.Carceles";


$tdatacarceles3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarceles3[".originalPagesByType"] = $tdatacarceles3[".pagesByType"];
$tdatacarceles3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarceles3[".originalPages"] = $tdatacarceles3[".pages"];
$tdatacarceles3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarceles3[".originalDefaultPages"] = $tdatacarceles3[".defaultPages"];

//	field labels
$fieldLabelscarceles3 = array();
$fieldToolTipscarceles3 = array();
$pageTitlescarceles3 = array();
$placeHolderscarceles3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarceles3["Spanish"] = array();
	$fieldToolTipscarceles3["Spanish"] = array();
	$placeHolderscarceles3["Spanish"] = array();
	$pageTitlescarceles3["Spanish"] = array();
	$fieldLabelscarceles3["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipscarceles3["Spanish"]["CarcelId"] = "";
	$placeHolderscarceles3["Spanish"]["CarcelId"] = "";
	$fieldLabelscarceles3["Spanish"]["Carcel"] = "Carcel";
	$fieldToolTipscarceles3["Spanish"]["Carcel"] = "";
	$placeHolderscarceles3["Spanish"]["Carcel"] = "";
	$fieldLabelscarceles3["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipscarceles3["Spanish"]["CiudadId"] = "";
	$placeHolderscarceles3["Spanish"]["CiudadId"] = "";
	$fieldLabelscarceles3["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscarceles3["Spanish"]["Direccion"] = "";
	$placeHolderscarceles3["Spanish"]["Direccion"] = "";
	$fieldLabelscarceles3["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipscarceles3["Spanish"]["Telefono"] = "";
	$placeHolderscarceles3["Spanish"]["Telefono"] = "";
	$fieldLabelscarceles3["Spanish"]["Email"] = "Email";
	$fieldToolTipscarceles3["Spanish"]["Email"] = "";
	$placeHolderscarceles3["Spanish"]["Email"] = "";
	if (count($fieldToolTipscarceles3["Spanish"]))
		$tdatacarceles3[".isUseToolTips"] = true;
}


	$tdatacarceles3[".NCSearch"] = true;



$tdatacarceles3[".shortTableName"] = "carceles3";
$tdatacarceles3[".nSecOptions"] = 0;

$tdatacarceles3[".mainTableOwnerID"] = "";
$tdatacarceles3[".entityType"] = 1;
$tdatacarceles3[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacarceles3[".strOriginalTableName"] = "dbo.Carceles";

	



$tdatacarceles3[".showAddInPopup"] = false;

$tdatacarceles3[".showEditInPopup"] = false;

$tdatacarceles3[".showViewInPopup"] = false;

$tdatacarceles3[".listAjax"] = false;
//	temporary
//$tdatacarceles3[".listAjax"] = false;

	$tdatacarceles3[".audit"] = false;

	$tdatacarceles3[".locking"] = false;


$pages = $tdatacarceles3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarceles3[".edit"] = true;
	$tdatacarceles3[".afterEditAction"] = 1;
	$tdatacarceles3[".closePopupAfterEdit"] = 1;
	$tdatacarceles3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarceles3[".add"] = true;
$tdatacarceles3[".afterAddAction"] = 1;
$tdatacarceles3[".closePopupAfterAdd"] = 1;
$tdatacarceles3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarceles3[".list"] = true;
}



$tdatacarceles3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarceles3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarceles3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarceles3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarceles3[".printFriendly"] = true;
}



$tdatacarceles3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarceles3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarceles3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarceles3[".isUseAjaxSuggest"] = true;



																														

$tdatacarceles3[".ajaxCodeSnippetAdded"] = false;

$tdatacarceles3[".buttonsAdded"] = false;

$tdatacarceles3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarceles3[".isUseTimeForSearch"] = false;


$tdatacarceles3[".badgeColor"] = "6B8E23";


$tdatacarceles3[".allSearchFields"] = array();
$tdatacarceles3[".filterFields"] = array();
$tdatacarceles3[".requiredSearchFields"] = array();

$tdatacarceles3[".googleLikeFields"] = array();
$tdatacarceles3[".googleLikeFields"][] = "CarcelId";
$tdatacarceles3[".googleLikeFields"][] = "Carcel";
$tdatacarceles3[".googleLikeFields"][] = "CiudadId";
$tdatacarceles3[".googleLikeFields"][] = "Direccion";
$tdatacarceles3[".googleLikeFields"][] = "Telefono";
$tdatacarceles3[".googleLikeFields"][] = "Email";



$tdatacarceles3[".tableType"] = "list";

$tdatacarceles3[".printerPageOrientation"] = 0;
$tdatacarceles3[".nPrinterPageScale"] = 100;

$tdatacarceles3[".nPrinterSplitRecords"] = 40;

$tdatacarceles3[".geocodingEnabled"] = false;










$tdatacarceles3[".pageSize"] = 20;

$tdatacarceles3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacarceles3[".strOrderBy"] = $tstrOrderBy;

$tdatacarceles3[".orderindexes"] = array();


$tdatacarceles3[".sqlHead"] = "SELECT CarcelId,  	Carcel,  	CiudadId,  	Direccion,  	Telefono,  	Email";
$tdatacarceles3[".sqlFrom"] = "FROM dbo.Carceles";
$tdatacarceles3[".sqlWhereExpr"] = "";
$tdatacarceles3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarceles3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarceles3[".arrGroupsPerPage"] = $arrGPP;

$tdatacarceles3[".highlightSearchResults"] = true;

$tableKeyscarceles3 = array();
$tableKeyscarceles3[] = "CarcelId";
$tdatacarceles3[".Keys"] = $tableKeyscarceles3;


$tdatacarceles3[".hideMobileList"] = array();




//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","CarcelId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CarcelId";

		$fdata["sourceSingle"] = "CarcelId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarcelId";

	
	
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


	$tdatacarceles3["CarcelId"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "CarcelId";
//	Carcel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Carcel";
	$fdata["GoodName"] = "Carcel";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","Carcel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Carcel";

		$fdata["sourceSingle"] = "Carcel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Carcel";

	
	
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


	$tdatacarceles3["Carcel"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "Carcel";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","CiudadId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CiudadId";

	
	
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


	$tdatacarceles3["CiudadId"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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


	$tdatacarceles3["Direccion"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "Direccion";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","Telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefono";

		$fdata["sourceSingle"] = "Telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";

	
	
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


	$tdatacarceles3["Telefono"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "Telefono";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles3","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatacarceles3["Email"] = $fdata;
		$tdatacarceles3[".searchableFields"][] = "Email";


$tables_data["dbo.Carceles3"]=&$tdatacarceles3;
$field_labels["dbo_Carceles3"] = &$fieldLabelscarceles3;
$fieldToolTips["dbo_Carceles3"] = &$fieldToolTipscarceles3;
$placeHolders["dbo_Carceles3"] = &$placeHolderscarceles3;
$page_titles["dbo_Carceles3"] = &$pageTitlescarceles3;


changeTextControlsToDate( "dbo.Carceles3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Carceles3"] = array();
//	dbo.ChequeosSancionados
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosSancionados";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosSancionados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeossancionados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosSancionados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Carceles3"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles3"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles3"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles3"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles3"][$dIndex]["detailKeys"][]="CarcelId";
//	dbo.Direcciones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Direcciones";
		$detailsParam["dOriginalTable"] = "dbo.Direcciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "direcciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Direcciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Carceles3"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles3"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles3"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles3"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles3"][$dIndex]["detailKeys"][]="CarcelId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Carceles3"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Carceles3"][0] = $masterParams;
				$masterTablesData["dbo.Carceles3"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Carceles3"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.Carceles3"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Carceles3"][0]["detailKeys"][]="CiudadId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carceles3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CarcelId,  	Carcel,  	CiudadId,  	Direccion,  	Telefono,  	Email";
$proto0["m_strFrom"] = "FROM dbo.Carceles";
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
	"m_strName" => "CarcelId",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto6["m_sql"] = "CarcelId";
$proto6["m_srcTableName"] = "dbo.Carceles3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Carcel",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto8["m_sql"] = "Carcel";
$proto8["m_srcTableName"] = "dbo.Carceles3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto10["m_sql"] = "CiudadId";
$proto10["m_srcTableName"] = "dbo.Carceles3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto12["m_sql"] = "Direccion";
$proto12["m_srcTableName"] = "dbo.Carceles3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "dbo.Carceles3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles3"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "dbo.Carceles3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Carceles";
$proto19["m_srcTableName"] = "dbo.Carceles3";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "CarcelId";
$proto19["m_columns"][] = "Carcel";
$proto19["m_columns"][] = "CiudadId";
$proto19["m_columns"][] = "Direccion";
$proto19["m_columns"][] = "Telefono";
$proto19["m_columns"][] = "Email";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Carceles";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Carceles3";
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
$proto0["m_srcTableName"]="dbo.Carceles3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carceles3 = createSqlQuery_carceles3();


	
		;

						

$tdatacarceles3[".sqlquery"] = $queryData_carceles3;



$tdatacarceles3[".hasEvents"] = false;

?>