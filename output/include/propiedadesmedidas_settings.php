<?php
$tdatapropiedadesmedidas = array();
$tdatapropiedadesmedidas[".searchableFields"] = array();
$tdatapropiedadesmedidas[".ShortName"] = "propiedadesmedidas";
$tdatapropiedadesmedidas[".OwnerID"] = "";
$tdatapropiedadesmedidas[".OriginalTable"] = "dbo.Propiedades";


$tdatapropiedadesmedidas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapropiedadesmedidas[".originalPagesByType"] = $tdatapropiedadesmedidas[".pagesByType"];
$tdatapropiedadesmedidas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapropiedadesmedidas[".originalPages"] = $tdatapropiedadesmedidas[".pages"];
$tdatapropiedadesmedidas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapropiedadesmedidas[".originalDefaultPages"] = $tdatapropiedadesmedidas[".defaultPages"];

//	field labels
$fieldLabelspropiedadesmedidas = array();
$fieldToolTipspropiedadesmedidas = array();
$pageTitlespropiedadesmedidas = array();
$placeHolderspropiedadesmedidas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspropiedadesmedidas["Spanish"] = array();
	$fieldToolTipspropiedadesmedidas["Spanish"] = array();
	$placeHolderspropiedadesmedidas["Spanish"] = array();
	$pageTitlespropiedadesmedidas["Spanish"] = array();
	$fieldLabelspropiedadesmedidas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspropiedadesmedidas["Spanish"]["Observaciones"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["Observaciones"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipspropiedadesmedidas["Spanish"]["SancionadoId"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["SancionadoId"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["PropiedadId"] = "Propiedad Id";
	$fieldToolTipspropiedadesmedidas["Spanish"]["PropiedadId"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["PropiedadId"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["TipoPropiedad"] = "Tipo Propiedad";
	$fieldToolTipspropiedadesmedidas["Spanish"]["TipoPropiedad"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["TipoPropiedad"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["Propiedad"] = "Propiedad";
	$fieldToolTipspropiedadesmedidas["Spanish"]["Propiedad"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["Propiedad"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["Matricula"] = "Matricula";
	$fieldToolTipspropiedadesmedidas["Spanish"]["Matricula"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["Matricula"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["Avaluo"] = "Avaluo";
	$fieldToolTipspropiedadesmedidas["Spanish"]["Avaluo"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["Avaluo"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipspropiedadesmedidas["Spanish"]["CiudadId"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["CiudadId"] = "";
	$fieldLabelspropiedadesmedidas["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipspropiedadesmedidas["Spanish"]["Direccion"] = "";
	$placeHolderspropiedadesmedidas["Spanish"]["Direccion"] = "";
	if (count($fieldToolTipspropiedadesmedidas["Spanish"]))
		$tdatapropiedadesmedidas[".isUseToolTips"] = true;
}


	$tdatapropiedadesmedidas[".NCSearch"] = true;



$tdatapropiedadesmedidas[".shortTableName"] = "propiedadesmedidas";
$tdatapropiedadesmedidas[".nSecOptions"] = 0;

$tdatapropiedadesmedidas[".mainTableOwnerID"] = "";
$tdatapropiedadesmedidas[".entityType"] = 1;
$tdatapropiedadesmedidas[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapropiedadesmedidas[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdatapropiedadesmedidas[".showAddInPopup"] = false;

$tdatapropiedadesmedidas[".showEditInPopup"] = false;

$tdatapropiedadesmedidas[".showViewInPopup"] = false;

$tdatapropiedadesmedidas[".listAjax"] = false;
//	temporary
//$tdatapropiedadesmedidas[".listAjax"] = false;

	$tdatapropiedadesmedidas[".audit"] = false;

	$tdatapropiedadesmedidas[".locking"] = false;


$pages = $tdatapropiedadesmedidas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapropiedadesmedidas[".edit"] = true;
	$tdatapropiedadesmedidas[".afterEditAction"] = 1;
	$tdatapropiedadesmedidas[".closePopupAfterEdit"] = 1;
	$tdatapropiedadesmedidas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapropiedadesmedidas[".add"] = true;
$tdatapropiedadesmedidas[".afterAddAction"] = 1;
$tdatapropiedadesmedidas[".closePopupAfterAdd"] = 1;
$tdatapropiedadesmedidas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapropiedadesmedidas[".list"] = true;
}



$tdatapropiedadesmedidas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapropiedadesmedidas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapropiedadesmedidas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapropiedadesmedidas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapropiedadesmedidas[".printFriendly"] = true;
}



$tdatapropiedadesmedidas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapropiedadesmedidas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapropiedadesmedidas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapropiedadesmedidas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												
																																																																																																																	

$tdatapropiedadesmedidas[".ajaxCodeSnippetAdded"] = false;

$tdatapropiedadesmedidas[".buttonsAdded"] = true;

$tdatapropiedadesmedidas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapropiedadesmedidas[".isUseTimeForSearch"] = false;


$tdatapropiedadesmedidas[".badgeColor"] = "E67349";


$tdatapropiedadesmedidas[".allSearchFields"] = array();
$tdatapropiedadesmedidas[".filterFields"] = array();
$tdatapropiedadesmedidas[".requiredSearchFields"] = array();

$tdatapropiedadesmedidas[".googleLikeFields"] = array();
$tdatapropiedadesmedidas[".googleLikeFields"][] = "PropiedadId";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "SancionadoId";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "TipoPropiedad";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "Propiedad";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "Matricula";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "Avaluo";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "CiudadId";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "Direccion";
$tdatapropiedadesmedidas[".googleLikeFields"][] = "Observaciones";



$tdatapropiedadesmedidas[".tableType"] = "list";

$tdatapropiedadesmedidas[".printerPageOrientation"] = 0;
$tdatapropiedadesmedidas[".nPrinterPageScale"] = 100;

$tdatapropiedadesmedidas[".nPrinterSplitRecords"] = 40;

$tdatapropiedadesmedidas[".geocodingEnabled"] = false;




$tdatapropiedadesmedidas[".isDisplayLoading"] = true;

$tdatapropiedadesmedidas[".isResizeColumns"] = true;





$tdatapropiedadesmedidas[".pageSize"] = 20;

$tdatapropiedadesmedidas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapropiedadesmedidas[".strOrderBy"] = $tstrOrderBy;

$tdatapropiedadesmedidas[".orderindexes"] = array();


$tdatapropiedadesmedidas[".sqlHead"] = "select *";
$tdatapropiedadesmedidas[".sqlFrom"] = "FROM Propiedades";
$tdatapropiedadesmedidas[".sqlWhereExpr"] = "";
$tdatapropiedadesmedidas[".sqlTail"] = "";

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
$tdatapropiedadesmedidas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatapropiedadesmedidas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapropiedadesmedidas[".arrGroupsPerPage"] = $arrGPP;

$tdatapropiedadesmedidas[".highlightSearchResults"] = true;

$tableKeyspropiedadesmedidas = array();
$tdatapropiedadesmedidas[".Keys"] = $tableKeyspropiedadesmedidas;


$tdatapropiedadesmedidas[".hideMobileList"] = array();




//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","PropiedadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PropiedadId";

		$fdata["sourceSingle"] = "PropiedadId";

		$fdata["FullName"] = "PropiedadId";

	
	
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


	$tdatapropiedadesmedidas["PropiedadId"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "PropiedadId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["FullName"] = "SancionadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Sancionado";

	

	
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


	$tdatapropiedadesmedidas["SancionadoId"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "SancionadoId";
//	TipoPropiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoPropiedad";
	$fdata["GoodName"] = "TipoPropiedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","TipoPropiedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoPropiedad";

		$fdata["sourceSingle"] = "TipoPropiedad";

		$fdata["FullName"] = "TipoPropiedad";

	
	
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


	$tdatapropiedadesmedidas["TipoPropiedad"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "TipoPropiedad";
//	Propiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Propiedad";
	$fdata["GoodName"] = "Propiedad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","Propiedad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

		$fdata["sourceSingle"] = "Propiedad";

		$fdata["FullName"] = "Propiedad";

	
	
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


	$tdatapropiedadesmedidas["Propiedad"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "Propiedad";
//	Matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Matricula";
	$fdata["GoodName"] = "Matricula";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","Matricula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matricula";

		$fdata["sourceSingle"] = "Matricula";

		$fdata["FullName"] = "Matricula";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapropiedadesmedidas["Matricula"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "Matricula";
//	Avaluo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Avaluo";
	$fdata["GoodName"] = "Avaluo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","Avaluo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Avaluo";

		$fdata["sourceSingle"] = "Avaluo";

		$fdata["FullName"] = "Avaluo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Avaluo_Mascara", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatapropiedadesmedidas["Avaluo"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "Avaluo";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","CiudadId");
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
	$edata["LookupTable"] = "dbo.Ciudades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CiudadId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdatapropiedadesmedidas["CiudadId"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","Direccion");
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


	$tdatapropiedadesmedidas["Direccion"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "Direccion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_PropiedadesMedidas","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["FullName"] = "Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapropiedadesmedidas["Observaciones"] = $fdata;
		$tdatapropiedadesmedidas[".searchableFields"][] = "Observaciones";


$tables_data["dbo.PropiedadesMedidas"]=&$tdatapropiedadesmedidas;
$field_labels["dbo_PropiedadesMedidas"] = &$fieldLabelspropiedadesmedidas;
$fieldToolTips["dbo_PropiedadesMedidas"] = &$fieldToolTipspropiedadesmedidas;
$placeHolders["dbo_PropiedadesMedidas"] = &$placeHolderspropiedadesmedidas;
$page_titles["dbo_PropiedadesMedidas"] = &$pageTitlespropiedadesmedidas;


changeTextControlsToDate( "dbo.PropiedadesMedidas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.PropiedadesMedidas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.PropiedadesMedidas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.PropiedadesMedidas"][0] = $masterParams;
				$masterTablesData["dbo.PropiedadesMedidas"][0]["masterKeys"] = array();
	$masterTablesData["dbo.PropiedadesMedidas"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.PropiedadesMedidas"][0]["detailKeys"] = array();
	$masterTablesData["dbo.PropiedadesMedidas"][0]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_propiedadesmedidas()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM Propiedades";
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
$proto6["m_srcTableName"] = "dbo.PropiedadesMedidas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "dbo.Propiedades";
$proto9["m_srcTableName"] = "dbo.PropiedadesMedidas";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "PropiedadId";
$proto9["m_columns"][] = "SancionadoId";
$proto9["m_columns"][] = "TipoPropiedad";
$proto9["m_columns"][] = "Propiedad";
$proto9["m_columns"][] = "Matricula";
$proto9["m_columns"][] = "Avaluo";
$proto9["m_columns"][] = "CiudadId";
$proto9["m_columns"][] = "Direccion";
$proto9["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "Propiedades";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "dbo.PropiedadesMedidas";
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
$proto0["m_srcTableName"]="dbo.PropiedadesMedidas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_propiedadesmedidas = createSqlQuery_propiedadesmedidas();


	
		;

									

$tdatapropiedadesmedidas[".sqlquery"] = $queryData_propiedadesmedidas;



include_once(getabspath("include/propiedadesmedidas_events.php"));
$tdatapropiedadesmedidas[".hasEvents"] = true;

?>