<?php
$tdatadespachos = array();
$tdatadespachos[".searchableFields"] = array();
$tdatadespachos[".ShortName"] = "despachos";
$tdatadespachos[".OwnerID"] = "";
$tdatadespachos[".OriginalTable"] = "dbo.Despachos";


$tdatadespachos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadespachos[".originalPagesByType"] = $tdatadespachos[".pagesByType"];
$tdatadespachos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadespachos[".originalPages"] = $tdatadespachos[".pages"];
$tdatadespachos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadespachos[".originalDefaultPages"] = $tdatadespachos[".defaultPages"];

//	field labels
$fieldLabelsdespachos = array();
$fieldToolTipsdespachos = array();
$pageTitlesdespachos = array();
$placeHoldersdespachos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespachos["Spanish"] = array();
	$fieldToolTipsdespachos["Spanish"] = array();
	$placeHoldersdespachos["Spanish"] = array();
	$pageTitlesdespachos["Spanish"] = array();
	$fieldLabelsdespachos["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdespachos["Spanish"]["DespachoId"] = "";
	$placeHoldersdespachos["Spanish"]["DespachoId"] = "";
	$fieldLabelsdespachos["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdespachos["Spanish"]["Codigo"] = "";
	$placeHoldersdespachos["Spanish"]["Codigo"] = "";
	$fieldLabelsdespachos["Spanish"]["Despacho"] = "Despacho/Juzgado";
	$fieldToolTipsdespachos["Spanish"]["Despacho"] = "";
	$placeHoldersdespachos["Spanish"]["Despacho"] = "";
	$fieldLabelsdespachos["Spanish"]["CiudadId"] = "Ciudad/Municipio";
	$fieldToolTipsdespachos["Spanish"]["CiudadId"] = "";
	$placeHoldersdespachos["Spanish"]["CiudadId"] = "";
	$fieldLabelsdespachos["Spanish"]["Especialidad"] = "Especialidad";
	$fieldToolTipsdespachos["Spanish"]["Especialidad"] = "";
	$placeHoldersdespachos["Spanish"]["Especialidad"] = "";
	$fieldLabelsdespachos["Spanish"]["Subespecialidad"] = "Subespecialidad";
	$fieldToolTipsdespachos["Spanish"]["Subespecialidad"] = "";
	$placeHoldersdespachos["Spanish"]["Subespecialidad"] = "";
	$fieldLabelsdespachos["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsdespachos["Spanish"]["Activo"] = "";
	$placeHoldersdespachos["Spanish"]["Activo"] = "";
	$fieldLabelsdespachos["Spanish"]["Juez"] = "Juez";
	$fieldToolTipsdespachos["Spanish"]["Juez"] = "";
	$placeHoldersdespachos["Spanish"]["Juez"] = "";
	$fieldLabelsdespachos["Spanish"]["Correo"] = "Correo Electronico";
	$fieldToolTipsdespachos["Spanish"]["Correo"] = "";
	$placeHoldersdespachos["Spanish"]["Correo"] = "";
	$fieldLabelsdespachos["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsdespachos["Spanish"]["Telefonos"] = "";
	$placeHoldersdespachos["Spanish"]["Telefonos"] = "";
	$fieldLabelsdespachos["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsdespachos["Spanish"]["Direccion"] = "";
	$placeHoldersdespachos["Spanish"]["Direccion"] = "";
	if (count($fieldToolTipsdespachos["Spanish"]))
		$tdatadespachos[".isUseToolTips"] = true;
}


	$tdatadespachos[".NCSearch"] = true;



$tdatadespachos[".shortTableName"] = "despachos";
$tdatadespachos[".nSecOptions"] = 0;

$tdatadespachos[".mainTableOwnerID"] = "";
$tdatadespachos[".entityType"] = 0;
$tdatadespachos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadespachos[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadespachos[".showAddInPopup"] = false;

$tdatadespachos[".showEditInPopup"] = false;

$tdatadespachos[".showViewInPopup"] = false;

$tdatadespachos[".listAjax"] = false;
//	temporary
//$tdatadespachos[".listAjax"] = false;

	$tdatadespachos[".audit"] = true;

	$tdatadespachos[".locking"] = false;


$pages = $tdatadespachos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespachos[".edit"] = true;
	$tdatadespachos[".afterEditAction"] = 1;
	$tdatadespachos[".closePopupAfterEdit"] = 1;
	$tdatadespachos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespachos[".add"] = true;
$tdatadespachos[".afterAddAction"] = 1;
$tdatadespachos[".closePopupAfterAdd"] = 1;
$tdatadespachos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespachos[".list"] = true;
}



$tdatadespachos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespachos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespachos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespachos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespachos[".printFriendly"] = true;
}



$tdatadespachos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespachos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespachos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespachos[".isUseAjaxSuggest"] = true;



																																																

$tdatadespachos[".ajaxCodeSnippetAdded"] = false;

$tdatadespachos[".buttonsAdded"] = false;

$tdatadespachos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespachos[".isUseTimeForSearch"] = false;


$tdatadespachos[".badgeColor"] = "778899";


$tdatadespachos[".allSearchFields"] = array();
$tdatadespachos[".filterFields"] = array();
$tdatadespachos[".requiredSearchFields"] = array();

$tdatadespachos[".googleLikeFields"] = array();
$tdatadespachos[".googleLikeFields"][] = "DespachoId";
$tdatadespachos[".googleLikeFields"][] = "Codigo";
$tdatadespachos[".googleLikeFields"][] = "Despacho";
$tdatadespachos[".googleLikeFields"][] = "CiudadId";
$tdatadespachos[".googleLikeFields"][] = "Especialidad";
$tdatadespachos[".googleLikeFields"][] = "Subespecialidad";
$tdatadespachos[".googleLikeFields"][] = "Activo";
$tdatadespachos[".googleLikeFields"][] = "Juez";
$tdatadespachos[".googleLikeFields"][] = "Correo";
$tdatadespachos[".googleLikeFields"][] = "Telefonos";
$tdatadespachos[".googleLikeFields"][] = "Direccion";



$tdatadespachos[".tableType"] = "list";

$tdatadespachos[".printerPageOrientation"] = 0;
$tdatadespachos[".nPrinterPageScale"] = 100;

$tdatadespachos[".nPrinterSplitRecords"] = 40;

$tdatadespachos[".geocodingEnabled"] = false;





$tdatadespachos[".isResizeColumns"] = true;





$tdatadespachos[".pageSize"] = 20;

$tdatadespachos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadespachos[".strOrderBy"] = $tstrOrderBy;

$tdatadespachos[".orderindexes"] = array();


$tdatadespachos[".sqlHead"] = "SELECT DespachoId,  	Codigo,  	Despacho,  	CiudadId,  	Especialidad,  	Subespecialidad,  	Activo,  	Juez,  	Correo,  	Telefonos,  	Direccion";
$tdatadespachos[".sqlFrom"] = "FROM dbo.Despachos";
$tdatadespachos[".sqlWhereExpr"] = "";
$tdatadespachos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespachos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespachos[".arrGroupsPerPage"] = $arrGPP;

$tdatadespachos[".highlightSearchResults"] = true;

$tableKeysdespachos = array();
$tableKeysdespachos[] = "DespachoId";
$tdatadespachos[".Keys"] = $tableKeysdespachos;


$tdatadespachos[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","DespachoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["DespachoId"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Codigo"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Codigo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

		$fdata["sourceSingle"] = "Despacho";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Despacho"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Despacho";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","CiudadId");
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


	$tdatadespachos["CiudadId"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "CiudadId";
//	Especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Especialidad";
	$fdata["GoodName"] = "Especialidad";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Especialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Especialidad";

		$fdata["sourceSingle"] = "Especialidad";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Especialidad"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Especialidad";
//	Subespecialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Subespecialidad";
	$fdata["GoodName"] = "Subespecialidad";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Subespecialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Subespecialidad";

		$fdata["sourceSingle"] = "Subespecialidad";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Subespecialidad"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Subespecialidad";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Activo"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Activo";
//	Juez
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Juez";
	$fdata["GoodName"] = "Juez";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Juez");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Juez";

		$fdata["sourceSingle"] = "Juez";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Juez"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Juez";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Correo";

		$fdata["sourceSingle"] = "Correo";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Correo"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Correo";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Telefonos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefonos";

		$fdata["sourceSingle"] = "Telefonos";

		$fdata["isSQLExpression"] = true;
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


	$tdatadespachos["Telefonos"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Telefonos";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos","Direccion");
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


	$tdatadespachos["Direccion"] = $fdata;
		$tdatadespachos[".searchableFields"][] = "Direccion";


$tables_data["dbo.Despachos"]=&$tdatadespachos;
$field_labels["dbo_Despachos"] = &$fieldLabelsdespachos;
$fieldToolTips["dbo_Despachos"] = &$fieldToolTipsdespachos;
$placeHolders["dbo_Despachos"] = &$placeHoldersdespachos;
$page_titles["dbo_Despachos"] = &$pageTitlesdespachos;


changeTextControlsToDate( "dbo.Despachos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos"] = array();
//	dbo.Procesos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"][]="DespachoId";
//	dbo.Minjusticia
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"][]="DespachoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"][]="DespachoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos"][$dIndex]["detailKeys"][]="DespachoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despachos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DespachoId,  	Codigo,  	Despacho,  	CiudadId,  	Especialidad,  	Subespecialidad,  	Activo,  	Juez,  	Correo,  	Telefonos,  	Direccion";
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
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto6["m_sql"] = "DespachoId";
$proto6["m_srcTableName"] = "dbo.Despachos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Despachos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto10["m_sql"] = "Despacho";
$proto10["m_srcTableName"] = "dbo.Despachos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto12["m_sql"] = "CiudadId";
$proto12["m_srcTableName"] = "dbo.Despachos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Especialidad",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto14["m_sql"] = "Especialidad";
$proto14["m_srcTableName"] = "dbo.Despachos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Subespecialidad",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto16["m_sql"] = "Subespecialidad";
$proto16["m_srcTableName"] = "dbo.Despachos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto18["m_sql"] = "Activo";
$proto18["m_srcTableName"] = "dbo.Despachos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Juez",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto20["m_sql"] = "Juez";
$proto20["m_srcTableName"] = "dbo.Despachos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto22["m_sql"] = "Correo";
$proto22["m_srcTableName"] = "dbo.Despachos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto24["m_sql"] = "Telefonos";
$proto24["m_srcTableName"] = "dbo.Despachos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Despachos",
	"m_srcTableName" => "dbo.Despachos"
));

$proto26["m_sql"] = "Direccion";
$proto26["m_srcTableName"] = "dbo.Despachos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Despachos";
$proto29["m_srcTableName"] = "dbo.Despachos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "DespachoId";
$proto29["m_columns"][] = "Codigo";
$proto29["m_columns"][] = "Despacho";
$proto29["m_columns"][] = "CiudadId";
$proto29["m_columns"][] = "Especialidad";
$proto29["m_columns"][] = "Subespecialidad";
$proto29["m_columns"][] = "Activo";
$proto29["m_columns"][] = "Juez";
$proto29["m_columns"][] = "Correo";
$proto29["m_columns"][] = "Telefonos";
$proto29["m_columns"][] = "Direccion";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.Despachos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.Despachos";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Despachos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despachos = createSqlQuery_despachos();


	
		;

											

$tdatadespachos[".sqlquery"] = $queryData_despachos;



$tdatadespachos[".hasEvents"] = false;

?>