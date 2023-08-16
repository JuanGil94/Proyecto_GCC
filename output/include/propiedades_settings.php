<?php
$tdatapropiedades = array();
$tdatapropiedades[".searchableFields"] = array();
$tdatapropiedades[".ShortName"] = "propiedades";
$tdatapropiedades[".OwnerID"] = "";
$tdatapropiedades[".OriginalTable"] = "dbo.Propiedades";


$tdatapropiedades[".pagesByType"] = my_json_decode( "{}" );
$tdatapropiedades[".originalPagesByType"] = $tdatapropiedades[".pagesByType"];
$tdatapropiedades[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatapropiedades[".originalPages"] = $tdatapropiedades[".pages"];
$tdatapropiedades[".defaultPages"] = my_json_decode( "{}" );
$tdatapropiedades[".originalDefaultPages"] = $tdatapropiedades[".defaultPages"];

//	field labels
$fieldLabelspropiedades = array();
$fieldToolTipspropiedades = array();
$pageTitlespropiedades = array();
$placeHolderspropiedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspropiedades["Spanish"] = array();
	$fieldToolTipspropiedades["Spanish"] = array();
	$placeHolderspropiedades["Spanish"] = array();
	$pageTitlespropiedades["Spanish"] = array();
	$fieldLabelspropiedades["Spanish"]["PropiedadId"] = "Propiedad Id";
	$fieldToolTipspropiedades["Spanish"]["PropiedadId"] = "";
	$placeHolderspropiedades["Spanish"]["PropiedadId"] = "";
	$fieldLabelspropiedades["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipspropiedades["Spanish"]["SancionadoId"] = "";
	$placeHolderspropiedades["Spanish"]["SancionadoId"] = "";
	$fieldLabelspropiedades["Spanish"]["TipoPropiedad"] = "Tipo Propiedad";
	$fieldToolTipspropiedades["Spanish"]["TipoPropiedad"] = "";
	$placeHolderspropiedades["Spanish"]["TipoPropiedad"] = "";
	$fieldLabelspropiedades["Spanish"]["Propiedad"] = "Propiedad";
	$fieldToolTipspropiedades["Spanish"]["Propiedad"] = "";
	$placeHolderspropiedades["Spanish"]["Propiedad"] = "";
	$fieldLabelspropiedades["Spanish"]["Matricula"] = "Matricula";
	$fieldToolTipspropiedades["Spanish"]["Matricula"] = "";
	$placeHolderspropiedades["Spanish"]["Matricula"] = "";
	$fieldLabelspropiedades["Spanish"]["Avaluo"] = "Avaluo";
	$fieldToolTipspropiedades["Spanish"]["Avaluo"] = "";
	$placeHolderspropiedades["Spanish"]["Avaluo"] = "";
	$fieldLabelspropiedades["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipspropiedades["Spanish"]["CiudadId"] = "";
	$placeHolderspropiedades["Spanish"]["CiudadId"] = "";
	$fieldLabelspropiedades["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipspropiedades["Spanish"]["Direccion"] = "";
	$placeHolderspropiedades["Spanish"]["Direccion"] = "";
	$fieldLabelspropiedades["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspropiedades["Spanish"]["Observaciones"] = "";
	$placeHolderspropiedades["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipspropiedades["Spanish"]))
		$tdatapropiedades[".isUseToolTips"] = true;
}


	$tdatapropiedades[".NCSearch"] = true;



$tdatapropiedades[".shortTableName"] = "propiedades";
$tdatapropiedades[".nSecOptions"] = 0;

$tdatapropiedades[".mainTableOwnerID"] = "";
$tdatapropiedades[".entityType"] = 0;
$tdatapropiedades[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapropiedades[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdatapropiedades[".showAddInPopup"] = false;

$tdatapropiedades[".showEditInPopup"] = false;

$tdatapropiedades[".showViewInPopup"] = false;

$tdatapropiedades[".listAjax"] = false;
//	temporary
//$tdatapropiedades[".listAjax"] = false;

	$tdatapropiedades[".audit"] = true;

	$tdatapropiedades[".locking"] = false;


$pages = $tdatapropiedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapropiedades[".edit"] = true;
	$tdatapropiedades[".afterEditAction"] = 1;
	$tdatapropiedades[".closePopupAfterEdit"] = 1;
	$tdatapropiedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapropiedades[".add"] = true;
$tdatapropiedades[".afterAddAction"] = 1;
$tdatapropiedades[".closePopupAfterAdd"] = 1;
$tdatapropiedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapropiedades[".list"] = true;
}



$tdatapropiedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapropiedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapropiedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapropiedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapropiedades[".printFriendly"] = true;
}



$tdatapropiedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapropiedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapropiedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapropiedades[".isUseAjaxSuggest"] = true;





$tdatapropiedades[".ajaxCodeSnippetAdded"] = false;

$tdatapropiedades[".buttonsAdded"] = false;

$tdatapropiedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapropiedades[".isUseTimeForSearch"] = false;


$tdatapropiedades[".badgeColor"] = "BC8F8F";


$tdatapropiedades[".allSearchFields"] = array();
$tdatapropiedades[".filterFields"] = array();
$tdatapropiedades[".requiredSearchFields"] = array();

$tdatapropiedades[".googleLikeFields"] = array();
$tdatapropiedades[".googleLikeFields"][] = "PropiedadId";
$tdatapropiedades[".googleLikeFields"][] = "SancionadoId";
$tdatapropiedades[".googleLikeFields"][] = "TipoPropiedad";
$tdatapropiedades[".googleLikeFields"][] = "Propiedad";
$tdatapropiedades[".googleLikeFields"][] = "Matricula";
$tdatapropiedades[".googleLikeFields"][] = "Avaluo";
$tdatapropiedades[".googleLikeFields"][] = "CiudadId";
$tdatapropiedades[".googleLikeFields"][] = "Direccion";
$tdatapropiedades[".googleLikeFields"][] = "Observaciones";



$tdatapropiedades[".tableType"] = "list";

$tdatapropiedades[".printerPageOrientation"] = 0;
$tdatapropiedades[".nPrinterPageScale"] = 100;

$tdatapropiedades[".nPrinterSplitRecords"] = 40;

$tdatapropiedades[".geocodingEnabled"] = false;










$tdatapropiedades[".pageSize"] = 20;

$tdatapropiedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapropiedades[".strOrderBy"] = $tstrOrderBy;

$tdatapropiedades[".orderindexes"] = array();


$tdatapropiedades[".sqlHead"] = "SELECT PropiedadId,  	SancionadoId,  	TipoPropiedad,  	Propiedad,  	Matricula,  	Avaluo,  	CiudadId,  	Direccion,  	Observaciones";
$tdatapropiedades[".sqlFrom"] = "FROM dbo.Propiedades";
$tdatapropiedades[".sqlWhereExpr"] = "";
$tdatapropiedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapropiedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapropiedades[".arrGroupsPerPage"] = $arrGPP;

$tdatapropiedades[".highlightSearchResults"] = true;

$tableKeyspropiedades = array();
$tableKeyspropiedades[] = "PropiedadId";
$tdatapropiedades[".Keys"] = $tableKeyspropiedades;


$tdatapropiedades[".hideMobileList"] = array();




//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","PropiedadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PropiedadId";

		$fdata["sourceSingle"] = "PropiedadId";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["PropiedadId"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "PropiedadId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["SancionadoId"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "SancionadoId";
//	TipoPropiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoPropiedad";
	$fdata["GoodName"] = "TipoPropiedad";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","TipoPropiedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoPropiedad";

		$fdata["sourceSingle"] = "TipoPropiedad";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["TipoPropiedad"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "TipoPropiedad";
//	Propiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Propiedad";
	$fdata["GoodName"] = "Propiedad";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Propiedad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

		$fdata["sourceSingle"] = "Propiedad";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["Propiedad"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Propiedad";
//	Matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Matricula";
	$fdata["GoodName"] = "Matricula";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Matricula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matricula";

		$fdata["sourceSingle"] = "Matricula";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["Matricula"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Matricula";
//	Avaluo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Avaluo";
	$fdata["GoodName"] = "Avaluo";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Avaluo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Avaluo";

		$fdata["sourceSingle"] = "Avaluo";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["Avaluo"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Avaluo";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","CiudadId");
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


	$tdatapropiedades["CiudadId"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Direccion");
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


	$tdatapropiedades["Direccion"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Direccion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
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


	$tdatapropiedades["Observaciones"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Observaciones";


$tables_data["dbo.Propiedades"]=&$tdatapropiedades;
$field_labels["dbo_Propiedades"] = &$fieldLabelspropiedades;
$fieldToolTips["dbo_Propiedades"] = &$fieldToolTipspropiedades;
$placeHolders["dbo_Propiedades"] = &$placeHolderspropiedades;
$page_titles["dbo_Propiedades"] = &$pageTitlespropiedades;


changeTextControlsToDate( "dbo.Propiedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Propiedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Propiedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_propiedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PropiedadId,  	SancionadoId,  	TipoPropiedad,  	Propiedad,  	Matricula,  	Avaluo,  	CiudadId,  	Direccion,  	Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Propiedades";
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
	"m_strName" => "PropiedadId",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto6["m_sql"] = "PropiedadId";
$proto6["m_srcTableName"] = "dbo.Propiedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto8["m_sql"] = "SancionadoId";
$proto8["m_srcTableName"] = "dbo.Propiedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto10["m_sql"] = "TipoPropiedad";
$proto10["m_srcTableName"] = "dbo.Propiedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto12["m_sql"] = "Propiedad";
$proto12["m_srcTableName"] = "dbo.Propiedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto14["m_sql"] = "Matricula";
$proto14["m_srcTableName"] = "dbo.Propiedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Avaluo",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto16["m_sql"] = "Avaluo";
$proto16["m_srcTableName"] = "dbo.Propiedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto18["m_sql"] = "CiudadId";
$proto18["m_srcTableName"] = "dbo.Propiedades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto20["m_sql"] = "Direccion";
$proto20["m_srcTableName"] = "dbo.Propiedades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto22["m_sql"] = "Observaciones";
$proto22["m_srcTableName"] = "dbo.Propiedades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Propiedades";
$proto25["m_srcTableName"] = "dbo.Propiedades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "PropiedadId";
$proto25["m_columns"][] = "SancionadoId";
$proto25["m_columns"][] = "TipoPropiedad";
$proto25["m_columns"][] = "Propiedad";
$proto25["m_columns"][] = "Matricula";
$proto25["m_columns"][] = "Avaluo";
$proto25["m_columns"][] = "CiudadId";
$proto25["m_columns"][] = "Direccion";
$proto25["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.Propiedades";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Propiedades";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Propiedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_propiedades = createSqlQuery_propiedades();


	
		;

									

$tdatapropiedades[".sqlquery"] = $queryData_propiedades;



$tdatapropiedades[".hasEvents"] = false;

?>