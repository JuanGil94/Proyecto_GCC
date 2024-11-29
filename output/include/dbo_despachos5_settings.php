<?php
$tdatadbo_despachos5 = array();
$tdatadbo_despachos5[".searchableFields"] = array();
$tdatadbo_despachos5[".ShortName"] = "dbo_despachos5";
$tdatadbo_despachos5[".OwnerID"] = "";
$tdatadbo_despachos5[".OriginalTable"] = "dbo.Despachos";


$tdatadbo_despachos5[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadbo_despachos5[".originalPagesByType"] = $tdatadbo_despachos5[".pagesByType"];
$tdatadbo_despachos5[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadbo_despachos5[".originalPages"] = $tdatadbo_despachos5[".pages"];
$tdatadbo_despachos5[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadbo_despachos5[".originalDefaultPages"] = $tdatadbo_despachos5[".defaultPages"];

//	field labels
$fieldLabelsdbo_despachos5 = array();
$fieldToolTipsdbo_despachos5 = array();
$pageTitlesdbo_despachos5 = array();
$placeHoldersdbo_despachos5 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_despachos5["Spanish"] = array();
	$fieldToolTipsdbo_despachos5["Spanish"] = array();
	$placeHoldersdbo_despachos5["Spanish"] = array();
	$pageTitlesdbo_despachos5["Spanish"] = array();
	$fieldLabelsdbo_despachos5["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdbo_despachos5["Spanish"]["DespachoId"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["DespachoId"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdbo_despachos5["Spanish"]["Codigo"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Codigo"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsdbo_despachos5["Spanish"]["Despacho"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Despacho"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsdbo_despachos5["Spanish"]["CiudadId"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["CiudadId"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Especialidad"] = "Especialidad";
	$fieldToolTipsdbo_despachos5["Spanish"]["Especialidad"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Especialidad"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Subespecialidad"] = "Subespecialidad";
	$fieldToolTipsdbo_despachos5["Spanish"]["Subespecialidad"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Subespecialidad"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsdbo_despachos5["Spanish"]["Activo"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Activo"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Juez"] = "Juez";
	$fieldToolTipsdbo_despachos5["Spanish"]["Juez"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Juez"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Correo"] = "Correo";
	$fieldToolTipsdbo_despachos5["Spanish"]["Correo"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Correo"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsdbo_despachos5["Spanish"]["Telefonos"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Telefonos"] = "";
	$fieldLabelsdbo_despachos5["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsdbo_despachos5["Spanish"]["Direccion"] = "";
	$placeHoldersdbo_despachos5["Spanish"]["Direccion"] = "";
	if (count($fieldToolTipsdbo_despachos5["Spanish"]))
		$tdatadbo_despachos5[".isUseToolTips"] = true;
}


	$tdatadbo_despachos5[".NCSearch"] = true;



$tdatadbo_despachos5[".shortTableName"] = "dbo_despachos5";
$tdatadbo_despachos5[".nSecOptions"] = 0;

$tdatadbo_despachos5[".mainTableOwnerID"] = "";
$tdatadbo_despachos5[".entityType"] = 1;
$tdatadbo_despachos5[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_despachos5[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadbo_despachos5[".showAddInPopup"] = false;

$tdatadbo_despachos5[".showEditInPopup"] = false;

$tdatadbo_despachos5[".showViewInPopup"] = false;

$tdatadbo_despachos5[".listAjax"] = false;
//	temporary
//$tdatadbo_despachos5[".listAjax"] = false;

	$tdatadbo_despachos5[".audit"] = true;

	$tdatadbo_despachos5[".locking"] = false;


$pages = $tdatadbo_despachos5[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_despachos5[".edit"] = true;
	$tdatadbo_despachos5[".afterEditAction"] = 1;
	$tdatadbo_despachos5[".closePopupAfterEdit"] = 1;
	$tdatadbo_despachos5[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_despachos5[".add"] = true;
$tdatadbo_despachos5[".afterAddAction"] = 1;
$tdatadbo_despachos5[".closePopupAfterAdd"] = 1;
$tdatadbo_despachos5[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_despachos5[".list"] = true;
}



$tdatadbo_despachos5[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_despachos5[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_despachos5[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_despachos5[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_despachos5[".printFriendly"] = true;
}



$tdatadbo_despachos5[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_despachos5[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_despachos5[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_despachos5[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																						

$tdatadbo_despachos5[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_despachos5[".buttonsAdded"] = false;

$tdatadbo_despachos5[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_despachos5[".isUseTimeForSearch"] = false;


$tdatadbo_despachos5[".badgeColor"] = "8FBC8B";


$tdatadbo_despachos5[".allSearchFields"] = array();
$tdatadbo_despachos5[".filterFields"] = array();
$tdatadbo_despachos5[".requiredSearchFields"] = array();

$tdatadbo_despachos5[".googleLikeFields"] = array();
$tdatadbo_despachos5[".googleLikeFields"][] = "DespachoId";
$tdatadbo_despachos5[".googleLikeFields"][] = "Codigo";
$tdatadbo_despachos5[".googleLikeFields"][] = "Despacho";
$tdatadbo_despachos5[".googleLikeFields"][] = "CiudadId";
$tdatadbo_despachos5[".googleLikeFields"][] = "Especialidad";
$tdatadbo_despachos5[".googleLikeFields"][] = "Subespecialidad";
$tdatadbo_despachos5[".googleLikeFields"][] = "Activo";
$tdatadbo_despachos5[".googleLikeFields"][] = "Juez";
$tdatadbo_despachos5[".googleLikeFields"][] = "Correo";
$tdatadbo_despachos5[".googleLikeFields"][] = "Telefonos";
$tdatadbo_despachos5[".googleLikeFields"][] = "Direccion";



$tdatadbo_despachos5[".tableType"] = "list";

$tdatadbo_despachos5[".printerPageOrientation"] = 0;
$tdatadbo_despachos5[".nPrinterPageScale"] = 100;

$tdatadbo_despachos5[".nPrinterSplitRecords"] = 40;

$tdatadbo_despachos5[".geocodingEnabled"] = false;





$tdatadbo_despachos5[".isResizeColumns"] = true;





$tdatadbo_despachos5[".pageSize"] = 20;

$tdatadbo_despachos5[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadbo_despachos5[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_despachos5[".orderindexes"] = array();


$tdatadbo_despachos5[".sqlHead"] = "SELECT *";
$tdatadbo_despachos5[".sqlFrom"] = "FROM dbo.Despachos";
$tdatadbo_despachos5[".sqlWhereExpr"] = "";
$tdatadbo_despachos5[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadbo_despachos5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_despachos5[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_despachos5[".highlightSearchResults"] = true;

$tableKeysdbo_despachos5 = array();
$tableKeysdbo_despachos5[] = "DespachoId";
$tdatadbo_despachos5[".Keys"] = $tableKeysdbo_despachos5;


$tdatadbo_despachos5[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","DespachoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["FullName"] = "DespachoId";

	
	
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


	$tdatadbo_despachos5["DespachoId"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatadbo_despachos5["Codigo"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Codigo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

		$fdata["sourceSingle"] = "Despacho";

		$fdata["FullName"] = "Despacho";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadbo_despachos5["Despacho"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Despacho";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","CiudadId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Ciudades1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CiudadId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Ciudad/Municipio";

	

	
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


	$tdatadbo_despachos5["CiudadId"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "CiudadId";
//	Especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Especialidad";
	$fdata["GoodName"] = "Especialidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Especialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Especialidad";

		$fdata["sourceSingle"] = "Especialidad";

		$fdata["FullName"] = "Especialidad";

	
	
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


	$tdatadbo_despachos5["Especialidad"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Especialidad";
//	Subespecialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Subespecialidad";
	$fdata["GoodName"] = "Subespecialidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Subespecialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Subespecialidad";

		$fdata["sourceSingle"] = "Subespecialidad";

		$fdata["FullName"] = "Subespecialidad";

	
	
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


	$tdatadbo_despachos5["Subespecialidad"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Subespecialidad";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["FullName"] = "Activo";

	
	
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


	$tdatadbo_despachos5["Activo"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Activo";
//	Juez
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Juez";
	$fdata["GoodName"] = "Juez";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Juez");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Juez";

		$fdata["sourceSingle"] = "Juez";

		$fdata["FullName"] = "Juez";

	
	
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


	$tdatadbo_despachos5["Juez"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Juez";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Correo";

		$fdata["sourceSingle"] = "Correo";

		$fdata["FullName"] = "Correo";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatadbo_despachos5["Correo"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Correo";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Telefonos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefonos";

		$fdata["sourceSingle"] = "Telefonos";

		$fdata["FullName"] = "Telefonos";

	
	
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


	$tdatadbo_despachos5["Telefonos"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Telefonos";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos5","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatadbo_despachos5["Direccion"] = $fdata;
		$tdatadbo_despachos5[".searchableFields"][] = "Direccion";


$tables_data["dbo.Despachos5"]=&$tdatadbo_despachos5;
$field_labels["dbo_Despachos5"] = &$fieldLabelsdbo_despachos5;
$fieldToolTips["dbo_Despachos5"] = &$fieldToolTipsdbo_despachos5;
$placeHolders["dbo_Despachos5"] = &$placeHoldersdbo_despachos5;
$page_titles["dbo_Despachos5"] = &$pageTitlesdbo_despachos5;


changeTextControlsToDate( "dbo.Despachos5" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos5"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos5"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_despachos5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM dbo.Despachos";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_sql"] = "*";
$proto6["m_srcTableName"] = "dbo.Despachos5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Despachos";
$proto9["m_srcTableName"] = "dbo.Despachos5";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "DespachoId";
$proto9["m_columns"][] = "Codigo";
$proto9["m_columns"][] = "Despacho";
$proto9["m_columns"][] = "CiudadId";
$proto9["m_columns"][] = "Especialidad";
$proto9["m_columns"][] = "Subespecialidad";
$proto9["m_columns"][] = "Activo";
$proto9["m_columns"][] = "Juez";
$proto9["m_columns"][] = "Correo";
$proto9["m_columns"][] = "Telefonos";
$proto9["m_columns"][] = "Direccion";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "dbo.Despachos";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.Despachos5";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Despachos5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_despachos5 = createSqlQuery_dbo_despachos5();


	
		;

											

$tdatadbo_despachos5[".sqlquery"] = $queryData_dbo_despachos5;



$tdatadbo_despachos5[".hasEvents"] = false;

?>