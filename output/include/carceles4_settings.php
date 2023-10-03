<?php
$tdatacarceles4 = array();
$tdatacarceles4[".searchableFields"] = array();
$tdatacarceles4[".ShortName"] = "carceles4";
$tdatacarceles4[".OwnerID"] = "";
$tdatacarceles4[".OriginalTable"] = "dbo.Carceles";


$tdatacarceles4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarceles4[".originalPagesByType"] = $tdatacarceles4[".pagesByType"];
$tdatacarceles4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarceles4[".originalPages"] = $tdatacarceles4[".pages"];
$tdatacarceles4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarceles4[".originalDefaultPages"] = $tdatacarceles4[".defaultPages"];

//	field labels
$fieldLabelscarceles4 = array();
$fieldToolTipscarceles4 = array();
$pageTitlescarceles4 = array();
$placeHolderscarceles4 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarceles4["Spanish"] = array();
	$fieldToolTipscarceles4["Spanish"] = array();
	$placeHolderscarceles4["Spanish"] = array();
	$pageTitlescarceles4["Spanish"] = array();
	$fieldLabelscarceles4["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipscarceles4["Spanish"]["CarcelId"] = "";
	$placeHolderscarceles4["Spanish"]["CarcelId"] = "";
	$fieldLabelscarceles4["Spanish"]["Carcel"] = "Carcel";
	$fieldToolTipscarceles4["Spanish"]["Carcel"] = "";
	$placeHolderscarceles4["Spanish"]["Carcel"] = "";
	$fieldLabelscarceles4["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipscarceles4["Spanish"]["CiudadId"] = "";
	$placeHolderscarceles4["Spanish"]["CiudadId"] = "";
	$fieldLabelscarceles4["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscarceles4["Spanish"]["Direccion"] = "";
	$placeHolderscarceles4["Spanish"]["Direccion"] = "";
	$fieldLabelscarceles4["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipscarceles4["Spanish"]["Telefono"] = "";
	$placeHolderscarceles4["Spanish"]["Telefono"] = "";
	$fieldLabelscarceles4["Spanish"]["Email"] = "Email";
	$fieldToolTipscarceles4["Spanish"]["Email"] = "";
	$placeHolderscarceles4["Spanish"]["Email"] = "";
	if (count($fieldToolTipscarceles4["Spanish"]))
		$tdatacarceles4[".isUseToolTips"] = true;
}


	$tdatacarceles4[".NCSearch"] = true;



$tdatacarceles4[".shortTableName"] = "carceles4";
$tdatacarceles4[".nSecOptions"] = 0;

$tdatacarceles4[".mainTableOwnerID"] = "";
$tdatacarceles4[".entityType"] = 1;
$tdatacarceles4[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacarceles4[".strOriginalTableName"] = "dbo.Carceles";

	



$tdatacarceles4[".showAddInPopup"] = false;

$tdatacarceles4[".showEditInPopup"] = false;

$tdatacarceles4[".showViewInPopup"] = false;

$tdatacarceles4[".listAjax"] = false;
//	temporary
//$tdatacarceles4[".listAjax"] = false;

	$tdatacarceles4[".audit"] = false;

	$tdatacarceles4[".locking"] = false;


$pages = $tdatacarceles4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarceles4[".edit"] = true;
	$tdatacarceles4[".afterEditAction"] = 1;
	$tdatacarceles4[".closePopupAfterEdit"] = 1;
	$tdatacarceles4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarceles4[".add"] = true;
$tdatacarceles4[".afterAddAction"] = 1;
$tdatacarceles4[".closePopupAfterAdd"] = 1;
$tdatacarceles4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarceles4[".list"] = true;
}



$tdatacarceles4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarceles4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarceles4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarceles4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarceles4[".printFriendly"] = true;
}



$tdatacarceles4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarceles4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarceles4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarceles4[".isUseAjaxSuggest"] = true;



																														

$tdatacarceles4[".ajaxCodeSnippetAdded"] = false;

$tdatacarceles4[".buttonsAdded"] = false;

$tdatacarceles4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarceles4[".isUseTimeForSearch"] = false;


$tdatacarceles4[".badgeColor"] = "6B8E23";


$tdatacarceles4[".allSearchFields"] = array();
$tdatacarceles4[".filterFields"] = array();
$tdatacarceles4[".requiredSearchFields"] = array();

$tdatacarceles4[".googleLikeFields"] = array();
$tdatacarceles4[".googleLikeFields"][] = "CarcelId";
$tdatacarceles4[".googleLikeFields"][] = "Carcel";
$tdatacarceles4[".googleLikeFields"][] = "CiudadId";
$tdatacarceles4[".googleLikeFields"][] = "Direccion";
$tdatacarceles4[".googleLikeFields"][] = "Telefono";
$tdatacarceles4[".googleLikeFields"][] = "Email";



$tdatacarceles4[".tableType"] = "list";

$tdatacarceles4[".printerPageOrientation"] = 0;
$tdatacarceles4[".nPrinterPageScale"] = 100;

$tdatacarceles4[".nPrinterSplitRecords"] = 40;

$tdatacarceles4[".geocodingEnabled"] = false;





$tdatacarceles4[".isResizeColumns"] = true;





$tdatacarceles4[".pageSize"] = 20;

$tdatacarceles4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacarceles4[".strOrderBy"] = $tstrOrderBy;

$tdatacarceles4[".orderindexes"] = array();


$tdatacarceles4[".sqlHead"] = "SELECT CarcelId,  	Carcel,  	CiudadId,  	Direccion,  	Telefono,  	Email";
$tdatacarceles4[".sqlFrom"] = "FROM dbo.Carceles";
$tdatacarceles4[".sqlWhereExpr"] = "";
$tdatacarceles4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarceles4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarceles4[".arrGroupsPerPage"] = $arrGPP;

$tdatacarceles4[".highlightSearchResults"] = true;

$tableKeyscarceles4 = array();
$tableKeyscarceles4[] = "CarcelId";
$tdatacarceles4[".Keys"] = $tableKeyscarceles4;


$tdatacarceles4[".hideMobileList"] = array();




//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","CarcelId");
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


	$tdatacarceles4["CarcelId"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "CarcelId";
//	Carcel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Carcel";
	$fdata["GoodName"] = "Carcel";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","Carcel");
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


	$tdatacarceles4["Carcel"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "Carcel";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","CiudadId");
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


	$tdatacarceles4["CiudadId"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","Direccion");
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


	$tdatacarceles4["Direccion"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "Direccion";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","Telefono");
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


	$tdatacarceles4["Telefono"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "Telefono";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles4","Email");
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


	$tdatacarceles4["Email"] = $fdata;
		$tdatacarceles4[".searchableFields"][] = "Email";


$tables_data["dbo.Carceles4"]=&$tdatacarceles4;
$field_labels["dbo_Carceles4"] = &$fieldLabelscarceles4;
$fieldToolTips["dbo_Carceles4"] = &$fieldToolTipscarceles4;
$placeHolders["dbo_Carceles4"] = &$placeHolderscarceles4;
$page_titles["dbo_Carceles4"] = &$pageTitlescarceles4;


changeTextControlsToDate( "dbo.Carceles4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Carceles4"] = array();
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


		
	$detailsTablesData["dbo.Carceles4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles4"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles4"][$dIndex]["detailKeys"][]="CarcelId";
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


		
	$detailsTablesData["dbo.Carceles4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles4"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles4"][$dIndex]["detailKeys"][]="CarcelId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Carceles4"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Carceles4"][0] = $masterParams;
				$masterTablesData["dbo.Carceles4"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Carceles4"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.Carceles4"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Carceles4"][0]["detailKeys"][]="CiudadId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carceles4()
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
	"m_srcTableName" => "dbo.Carceles4"
));

$proto6["m_sql"] = "CarcelId";
$proto6["m_srcTableName"] = "dbo.Carceles4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Carcel",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles4"
));

$proto8["m_sql"] = "Carcel";
$proto8["m_srcTableName"] = "dbo.Carceles4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles4"
));

$proto10["m_sql"] = "CiudadId";
$proto10["m_srcTableName"] = "dbo.Carceles4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles4"
));

$proto12["m_sql"] = "Direccion";
$proto12["m_srcTableName"] = "dbo.Carceles4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles4"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "dbo.Carceles4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles4"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "dbo.Carceles4";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Carceles";
$proto19["m_srcTableName"] = "dbo.Carceles4";
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
$proto18["m_srcTableName"] = "dbo.Carceles4";
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
$proto0["m_srcTableName"]="dbo.Carceles4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carceles4 = createSqlQuery_carceles4();


	
		;

						

$tdatacarceles4[".sqlquery"] = $queryData_carceles4;



$tdatacarceles4[".hasEvents"] = false;

?>