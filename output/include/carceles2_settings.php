<?php
$tdatacarceles2 = array();
$tdatacarceles2[".searchableFields"] = array();
$tdatacarceles2[".ShortName"] = "carceles2";
$tdatacarceles2[".OwnerID"] = "";
$tdatacarceles2[".OriginalTable"] = "dbo.Carceles";


$tdatacarceles2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarceles2[".originalPagesByType"] = $tdatacarceles2[".pagesByType"];
$tdatacarceles2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarceles2[".originalPages"] = $tdatacarceles2[".pages"];
$tdatacarceles2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarceles2[".originalDefaultPages"] = $tdatacarceles2[".defaultPages"];

//	field labels
$fieldLabelscarceles2 = array();
$fieldToolTipscarceles2 = array();
$pageTitlescarceles2 = array();
$placeHolderscarceles2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarceles2["Spanish"] = array();
	$fieldToolTipscarceles2["Spanish"] = array();
	$placeHolderscarceles2["Spanish"] = array();
	$pageTitlescarceles2["Spanish"] = array();
	$fieldLabelscarceles2["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipscarceles2["Spanish"]["CarcelId"] = "";
	$placeHolderscarceles2["Spanish"]["CarcelId"] = "";
	$fieldLabelscarceles2["Spanish"]["Carcel"] = "Carcel";
	$fieldToolTipscarceles2["Spanish"]["Carcel"] = "";
	$placeHolderscarceles2["Spanish"]["Carcel"] = "";
	$fieldLabelscarceles2["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipscarceles2["Spanish"]["CiudadId"] = "";
	$placeHolderscarceles2["Spanish"]["CiudadId"] = "";
	$fieldLabelscarceles2["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscarceles2["Spanish"]["Direccion"] = "";
	$placeHolderscarceles2["Spanish"]["Direccion"] = "";
	$fieldLabelscarceles2["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipscarceles2["Spanish"]["Telefono"] = "";
	$placeHolderscarceles2["Spanish"]["Telefono"] = "";
	$fieldLabelscarceles2["Spanish"]["Email"] = "Email";
	$fieldToolTipscarceles2["Spanish"]["Email"] = "";
	$placeHolderscarceles2["Spanish"]["Email"] = "";
	if (count($fieldToolTipscarceles2["Spanish"]))
		$tdatacarceles2[".isUseToolTips"] = true;
}


	$tdatacarceles2[".NCSearch"] = true;



$tdatacarceles2[".shortTableName"] = "carceles2";
$tdatacarceles2[".nSecOptions"] = 0;

$tdatacarceles2[".mainTableOwnerID"] = "";
$tdatacarceles2[".entityType"] = 1;
$tdatacarceles2[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacarceles2[".strOriginalTableName"] = "dbo.Carceles";

	



$tdatacarceles2[".showAddInPopup"] = false;

$tdatacarceles2[".showEditInPopup"] = false;

$tdatacarceles2[".showViewInPopup"] = false;

$tdatacarceles2[".listAjax"] = false;
//	temporary
//$tdatacarceles2[".listAjax"] = false;

	$tdatacarceles2[".audit"] = false;

	$tdatacarceles2[".locking"] = false;


$pages = $tdatacarceles2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarceles2[".edit"] = true;
	$tdatacarceles2[".afterEditAction"] = 1;
	$tdatacarceles2[".closePopupAfterEdit"] = 1;
	$tdatacarceles2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarceles2[".add"] = true;
$tdatacarceles2[".afterAddAction"] = 1;
$tdatacarceles2[".closePopupAfterAdd"] = 1;
$tdatacarceles2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarceles2[".list"] = true;
}



$tdatacarceles2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarceles2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarceles2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarceles2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarceles2[".printFriendly"] = true;
}



$tdatacarceles2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarceles2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarceles2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarceles2[".isUseAjaxSuggest"] = true;



																														

$tdatacarceles2[".ajaxCodeSnippetAdded"] = false;

$tdatacarceles2[".buttonsAdded"] = false;

$tdatacarceles2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarceles2[".isUseTimeForSearch"] = false;


$tdatacarceles2[".badgeColor"] = "3CB371";


$tdatacarceles2[".allSearchFields"] = array();
$tdatacarceles2[".filterFields"] = array();
$tdatacarceles2[".requiredSearchFields"] = array();

$tdatacarceles2[".googleLikeFields"] = array();
$tdatacarceles2[".googleLikeFields"][] = "CarcelId";
$tdatacarceles2[".googleLikeFields"][] = "Carcel";
$tdatacarceles2[".googleLikeFields"][] = "CiudadId";
$tdatacarceles2[".googleLikeFields"][] = "Direccion";
$tdatacarceles2[".googleLikeFields"][] = "Telefono";
$tdatacarceles2[".googleLikeFields"][] = "Email";



$tdatacarceles2[".tableType"] = "list";

$tdatacarceles2[".printerPageOrientation"] = 0;
$tdatacarceles2[".nPrinterPageScale"] = 100;

$tdatacarceles2[".nPrinterSplitRecords"] = 40;

$tdatacarceles2[".geocodingEnabled"] = false;





$tdatacarceles2[".isResizeColumns"] = true;





$tdatacarceles2[".pageSize"] = 20;

$tdatacarceles2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacarceles2[".strOrderBy"] = $tstrOrderBy;

$tdatacarceles2[".orderindexes"] = array();


$tdatacarceles2[".sqlHead"] = "SELECT CarcelId,  	Carcel,  	CiudadId,  	Direccion,  	Telefono,  	Email";
$tdatacarceles2[".sqlFrom"] = "FROM dbo.Carceles";
$tdatacarceles2[".sqlWhereExpr"] = "";
$tdatacarceles2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarceles2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarceles2[".arrGroupsPerPage"] = $arrGPP;

$tdatacarceles2[".highlightSearchResults"] = true;

$tableKeyscarceles2 = array();
$tableKeyscarceles2[] = "CarcelId";
$tdatacarceles2[".Keys"] = $tableKeyscarceles2;


$tdatacarceles2[".hideMobileList"] = array();




//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","CarcelId");
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


	$tdatacarceles2["CarcelId"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "CarcelId";
//	Carcel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Carcel";
	$fdata["GoodName"] = "Carcel";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","Carcel");
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


	$tdatacarceles2["Carcel"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "Carcel";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","CiudadId");
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


	$tdatacarceles2["CiudadId"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","Direccion");
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


	$tdatacarceles2["Direccion"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "Direccion";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","Telefono");
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


	$tdatacarceles2["Telefono"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "Telefono";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Carceles";
	$fdata["Label"] = GetFieldLabel("dbo_Carceles2","Email");
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


	$tdatacarceles2["Email"] = $fdata;
		$tdatacarceles2[".searchableFields"][] = "Email";


$tables_data["dbo.Carceles2"]=&$tdatacarceles2;
$field_labels["dbo_Carceles2"] = &$fieldLabelscarceles2;
$fieldToolTips["dbo_Carceles2"] = &$fieldToolTipscarceles2;
$placeHolders["dbo_Carceles2"] = &$placeHolderscarceles2;
$page_titles["dbo_Carceles2"] = &$pageTitlescarceles2;


changeTextControlsToDate( "dbo.Carceles2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Carceles2"] = array();
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


		
	$detailsTablesData["dbo.Carceles2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles2"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles2"][$dIndex]["detailKeys"][]="CarcelId";
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


		
	$detailsTablesData["dbo.Carceles2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Carceles2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Carceles2"][$dIndex]["masterKeys"][]="CarcelId";

				$detailsTablesData["dbo.Carceles2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Carceles2"][$dIndex]["detailKeys"][]="CarcelId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Carceles2"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Carceles2"][0] = $masterParams;
				$masterTablesData["dbo.Carceles2"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Carceles2"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.Carceles2"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Carceles2"][0]["detailKeys"][]="CiudadId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carceles2()
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
	"m_srcTableName" => "dbo.Carceles2"
));

$proto6["m_sql"] = "CarcelId";
$proto6["m_srcTableName"] = "dbo.Carceles2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Carcel",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles2"
));

$proto8["m_sql"] = "Carcel";
$proto8["m_srcTableName"] = "dbo.Carceles2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles2"
));

$proto10["m_sql"] = "CiudadId";
$proto10["m_srcTableName"] = "dbo.Carceles2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles2"
));

$proto12["m_sql"] = "Direccion";
$proto12["m_srcTableName"] = "dbo.Carceles2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles2"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "dbo.Carceles2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Carceles",
	"m_srcTableName" => "dbo.Carceles2"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "dbo.Carceles2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Carceles";
$proto19["m_srcTableName"] = "dbo.Carceles2";
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
$proto18["m_srcTableName"] = "dbo.Carceles2";
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
$proto0["m_srcTableName"]="dbo.Carceles2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carceles2 = createSqlQuery_carceles2();


	
		;

						

$tdatacarceles2[".sqlquery"] = $queryData_carceles2;



$tdatacarceles2[".hasEvents"] = false;

?>