<?php
$tdatacarceles1 = array();
$tdatacarceles1[".searchableFields"] = array();
$tdatacarceles1[".ShortName"] = "carceles1";
$tdatacarceles1[".OwnerID"] = "";
$tdatacarceles1[".OriginalTable"] = "dbo.Carceles";


$tdatacarceles1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarceles1[".originalPagesByType"] = $tdatacarceles1[".pagesByType"];
$tdatacarceles1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarceles1[".originalPages"] = $tdatacarceles1[".pages"];
$tdatacarceles1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarceles1[".originalDefaultPages"] = $tdatacarceles1[".defaultPages"];

//	field labels
$fieldLabelscarceles1 = array();
$fieldToolTipscarceles1 = array();
$pageTitlescarceles1 = array();
$placeHolderscarceles1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarceles1["Spanish"] = array();
	$fieldToolTipscarceles1["Spanish"] = array();
	$placeHolderscarceles1["Spanish"] = array();
	$pageTitlescarceles1["Spanish"] = array();
	$fieldLabelscarceles1["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipscarceles1["Spanish"]["CarcelId"] = "";
	$placeHolderscarceles1["Spanish"]["CarcelId"] = "";
	$fieldLabelscarceles1["Spanish"]["Carcel"] = "Carcel";
	$fieldToolTipscarceles1["Spanish"]["Carcel"] = "";
	$placeHolderscarceles1["Spanish"]["Carcel"] = "";
	$fieldLabelscarceles1["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipscarceles1["Spanish"]["CiudadId"] = "";
	$placeHolderscarceles1["Spanish"]["CiudadId"] = "";
	$fieldLabelscarceles1["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscarceles1["Spanish"]["Direccion"] = "";
	$placeHolderscarceles1["Spanish"]["Direccion"] = "";
	$fieldLabelscarceles1["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipscarceles1["Spanish"]["Telefono"] = "";
	$placeHolderscarceles1["Spanish"]["Telefono"] = "";
	$fieldLabelscarceles1["Spanish"]["Email"] = "Email";
	$fieldToolTipscarceles1["Spanish"]["Email"] = "";
	$placeHolderscarceles1["Spanish"]["Email"] = "";
	if (count($fieldToolTipscarceles1["Spanish"]))
		$tdatacarceles1[".isUseToolTips"] = true;
}


	$tdatacarceles1[".NCSearch"] = true;



$tdatacarceles1[".shortTableName"] = "carceles1";
$tdatacarceles1[".nSecOptions"] = 0;

$tdatacarceles1[".mainTableOwnerID"] = "";
$tdatacarceles1[".entityType"] = 1;
$tdatacarceles1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacarceles1[".strOriginalTableName"] = "dbo.Carceles";

	



$tdatacarceles1[".showAddInPopup"] = false;

$tdatacarceles1[".showEditInPopup"] = false;

$tdatacarceles1[".showViewInPopup"] = false;

$tdatacarceles1[".listAjax"] = false;
//	temporary
//$tdatacarceles1[".listAjax"] = false;

	$tdatacarceles1[".audit"] = false;

	$tdatacarceles1[".locking"] = false;


$pages = $tdatacarceles1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarceles1[".edit"] = true;
	$tdatacarceles1[".afterEditAction"] = 1;
	$tdatacarceles1[".closePopupAfterEdit"] = 1;
	$tdatacarceles1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarceles1[".add"] = true;
$tdatacarceles1[".afterAddAction"] = 1;
$tdatacarceles1[".closePopupAfterAdd"] = 1;
$tdatacarceles1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarceles1[".list"] = true;
}



$tdatacarceles1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarceles1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarceles1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarceles1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarceles1[".printFriendly"] = true;
}



$tdatacarceles1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarceles1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarceles1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarceles1[".isUseAjaxSuggest"] = true;



																														

$tdatacarceles1[".ajaxCodeSnippetAdded"] = false;

$tdatacarceles1[".buttonsAdded"] = false;

$tdatacarceles1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarceles1[".isUseTimeForSearch"] = false;


$tdatacarceles1[".badgeColor"] = "00C2C5";


$tdatacarceles1[".allSearchFields"] = array();
$tdatacarceles1[".filterFields"] = array();
$tdatacarceles1[".requiredSearchFields"] = array();

$tdatacarceles1[".googleLikeFields"] = array();
$tdatacarceles1[".googleLikeFields"][] = "CarcelId";
$tdatacarceles1[".googleLikeFields"][] = "Carcel";
$tdatacarceles1[".googleLikeFields"][] = "CiudadId";
$tdatacarceles1[".googleLikeFields"][] = "Direccion";
$tdatacarceles1[".googleLikeFields"][] = "Telefono";
$tdatacarceles1[".googleLikeFields"][] = "Email";



$tdatacarceles1[".tableType"] = "list";

$tdatacarceles1[".printerPageOrientation"] = 0;
$tdatacarceles1[".nPrinterPageScale"] = 100;

$tdatacarceles1[".nPrinterSplitRecords"] = 40;

$tdatacarceles1[".geocodingEnabled"] = false;





$tdatacarceles1[".isResizeColumns"] = true;





$tdatacarceles1[".pageSize"] = 20;

$tdatacarceles1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacarceles1[".strOrderBy"] = $tstrOrderBy;

$tdatacarceles1[".orderindexes"] = array();


$tdatacarceles1[".sqlHead"] = "SELECT CarcelId,  	Carcel,  	CiudadId,  	Direccion,  	Telefono,  	Email";
$tdatacarceles1[".sqlFrom"] = "FROM dbo.Carceles";
$tdatacarceles1[".sqlWhereExpr"] = "";
$tdatacarceles1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarceles1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarceles1[".arrGroupsPerPage"] = $arrGPP;

$tdatacarceles1[".highlightSearchResults"] = true;

$tableKeyscarceles1 = array();
$tableKeyscarceles1[] = "CarcelId";
$tdatacarceles1[".Keys"] = $tableKeyscarceles1;


$tdatacarceles1[".hideMobileList"] = array();




//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","CarcelId");
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


	$tdatacarceles1["CarcelId"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "CarcelId";
//	Carcel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Carcel";
	$fdata["GoodName"] = "Carcel";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","Carcel");
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


	$tdatacarceles1["Carcel"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "Carcel";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","CiudadId");
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


	$tdatacarceles1["CiudadId"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","Direccion");
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


	$tdatacarceles1["Direccion"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "Direccion";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","Telefono");
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


	$tdatacarceles1["Telefono"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "Telefono";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles1","Email");
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


	$tdatacarceles1["Email"] = $fdata;
		$tdatacarceles1[".searchableFields"][] = "Email";


$tables_data["dbo.Carceles1"]=&$tdatacarceles1;
$field_labels["dbo_Carceles1"] = &$fieldLabelscarceles1;
$fieldToolTips["dbo_Carceles1"] = &$fieldToolTipscarceles1;
$placeHolders["dbo_Carceles1"] = &$placeHolderscarceles1;
$page_titles["dbo_Carceles1"] = &$pageTitlescarceles1;


changeTextControlsToDate( "dbo.Carceles1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Carceles1"] = array();
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


		
	$detailsTablesData["dbo.Carceles1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles1"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles1"][$dIndex]["detailKeys"][]="CarcelId";
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


		
	$detailsTablesData["dbo.Carceles1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles1"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles1"][$dIndex]["detailKeys"][]="CarcelId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Carceles1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Carceles1"][0] = $masterParams;
				$masterTablesData["dbo.Carceles1"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Carceles1"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.Carceles1"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Carceles1"][0]["detailKeys"][]="CiudadId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carceles1()
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
	"m_srcTableName" => "dbo.Carceles1"
));

$proto6["m_sql"] = "CarcelId";
$proto6["m_srcTableName"] = "dbo.Carceles1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Carcel",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles1"
));

$proto8["m_sql"] = "Carcel";
$proto8["m_srcTableName"] = "dbo.Carceles1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles1"
));

$proto10["m_sql"] = "CiudadId";
$proto10["m_srcTableName"] = "dbo.Carceles1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles1"
));

$proto12["m_sql"] = "Direccion";
$proto12["m_srcTableName"] = "dbo.Carceles1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles1"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "dbo.Carceles1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles1"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "dbo.Carceles1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Carceles";
$proto19["m_srcTableName"] = "dbo.Carceles1";
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
$proto18["m_srcTableName"] = "dbo.Carceles1";
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
$proto0["m_srcTableName"]="dbo.Carceles1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carceles1 = createSqlQuery_carceles1();


	
		;

						

$tdatacarceles1[".sqlquery"] = $queryData_carceles1;



$tdatacarceles1[".hasEvents"] = false;

?>