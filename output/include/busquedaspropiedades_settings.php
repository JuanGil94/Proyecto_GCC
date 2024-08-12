<?php
$tdatabusquedaspropiedades = array();
$tdatabusquedaspropiedades[".searchableFields"] = array();
$tdatabusquedaspropiedades[".ShortName"] = "busquedaspropiedades";
$tdatabusquedaspropiedades[".OwnerID"] = "";
$tdatabusquedaspropiedades[".OriginalTable"] = "dbo.BusquedasPropiedades";


$tdatabusquedaspropiedades[".pagesByType"] = my_json_decode( "{}" );
$tdatabusquedaspropiedades[".originalPagesByType"] = $tdatabusquedaspropiedades[".pagesByType"];
$tdatabusquedaspropiedades[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatabusquedaspropiedades[".originalPages"] = $tdatabusquedaspropiedades[".pages"];
$tdatabusquedaspropiedades[".defaultPages"] = my_json_decode( "{}" );
$tdatabusquedaspropiedades[".originalDefaultPages"] = $tdatabusquedaspropiedades[".defaultPages"];

//	field labels
$fieldLabelsbusquedaspropiedades = array();
$fieldToolTipsbusquedaspropiedades = array();
$pageTitlesbusquedaspropiedades = array();
$placeHoldersbusquedaspropiedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbusquedaspropiedades["Spanish"] = array();
	$fieldToolTipsbusquedaspropiedades["Spanish"] = array();
	$placeHoldersbusquedaspropiedades["Spanish"] = array();
	$pageTitlesbusquedaspropiedades["Spanish"] = array();
	$fieldLabelsbusquedaspropiedades["Spanish"]["BusquedaPropiedadId"] = "Busqueda Propiedad Id";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["BusquedaPropiedadId"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["BusquedaPropiedadId"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["BusquedaId"] = "Busqueda Id";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["BusquedaId"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["BusquedaId"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["PropiedadId"] = "Propiedad Id";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["PropiedadId"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["PropiedadId"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Propiedad"] = "Propiedad";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Propiedad"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Propiedad"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Matricula"] = "Matricula";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Matricula"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Matricula"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Ciudad"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Ciudad"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Direccion"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Direccion"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Observaciones"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Observaciones"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Identificacion"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Identificacion"] = "";
	$fieldLabelsbusquedaspropiedades["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsbusquedaspropiedades["Spanish"]["Sancionado"] = "";
	$placeHoldersbusquedaspropiedades["Spanish"]["Sancionado"] = "";
	if (count($fieldToolTipsbusquedaspropiedades["Spanish"]))
		$tdatabusquedaspropiedades[".isUseToolTips"] = true;
}


	$tdatabusquedaspropiedades[".NCSearch"] = true;



$tdatabusquedaspropiedades[".shortTableName"] = "busquedaspropiedades";
$tdatabusquedaspropiedades[".nSecOptions"] = 0;

$tdatabusquedaspropiedades[".mainTableOwnerID"] = "";
$tdatabusquedaspropiedades[".entityType"] = 0;
$tdatabusquedaspropiedades[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabusquedaspropiedades[".strOriginalTableName"] = "dbo.BusquedasPropiedades";

	



$tdatabusquedaspropiedades[".showAddInPopup"] = false;

$tdatabusquedaspropiedades[".showEditInPopup"] = false;

$tdatabusquedaspropiedades[".showViewInPopup"] = false;

$tdatabusquedaspropiedades[".listAjax"] = false;
//	temporary
//$tdatabusquedaspropiedades[".listAjax"] = false;

	$tdatabusquedaspropiedades[".audit"] = false;

	$tdatabusquedaspropiedades[".locking"] = false;


$pages = $tdatabusquedaspropiedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabusquedaspropiedades[".edit"] = true;
	$tdatabusquedaspropiedades[".afterEditAction"] = 1;
	$tdatabusquedaspropiedades[".closePopupAfterEdit"] = 1;
	$tdatabusquedaspropiedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabusquedaspropiedades[".add"] = true;
$tdatabusquedaspropiedades[".afterAddAction"] = 1;
$tdatabusquedaspropiedades[".closePopupAfterAdd"] = 1;
$tdatabusquedaspropiedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabusquedaspropiedades[".list"] = true;
}



$tdatabusquedaspropiedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabusquedaspropiedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabusquedaspropiedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabusquedaspropiedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabusquedaspropiedades[".printFriendly"] = true;
}



$tdatabusquedaspropiedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabusquedaspropiedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabusquedaspropiedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabusquedaspropiedades[".isUseAjaxSuggest"] = true;



																																																																																																																																							

$tdatabusquedaspropiedades[".ajaxCodeSnippetAdded"] = false;

$tdatabusquedaspropiedades[".buttonsAdded"] = false;

$tdatabusquedaspropiedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabusquedaspropiedades[".isUseTimeForSearch"] = false;


$tdatabusquedaspropiedades[".badgeColor"] = "5F9EA0";


$tdatabusquedaspropiedades[".allSearchFields"] = array();
$tdatabusquedaspropiedades[".filterFields"] = array();
$tdatabusquedaspropiedades[".requiredSearchFields"] = array();

$tdatabusquedaspropiedades[".googleLikeFields"] = array();
$tdatabusquedaspropiedades[".googleLikeFields"][] = "BusquedaPropiedadId";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "BusquedaId";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "PropiedadId";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Propiedad";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Matricula";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Ciudad";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Direccion";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Observaciones";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Identificacion";
$tdatabusquedaspropiedades[".googleLikeFields"][] = "Sancionado";



$tdatabusquedaspropiedades[".tableType"] = "list";

$tdatabusquedaspropiedades[".printerPageOrientation"] = 0;
$tdatabusquedaspropiedades[".nPrinterPageScale"] = 100;

$tdatabusquedaspropiedades[".nPrinterSplitRecords"] = 40;

$tdatabusquedaspropiedades[".geocodingEnabled"] = false;










$tdatabusquedaspropiedades[".pageSize"] = 20;

$tdatabusquedaspropiedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabusquedaspropiedades[".strOrderBy"] = $tstrOrderBy;

$tdatabusquedaspropiedades[".orderindexes"] = array();


$tdatabusquedaspropiedades[".sqlHead"] = "SELECT BusquedaPropiedadId,  	BusquedaId,  	PropiedadId,  	Propiedad,  	Matricula,  	Ciudad,  	Direccion,  	Observaciones,  	Identificacion,  	Sancionado";
$tdatabusquedaspropiedades[".sqlFrom"] = "FROM dbo.BusquedasPropiedades";
$tdatabusquedaspropiedades[".sqlWhereExpr"] = "";
$tdatabusquedaspropiedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabusquedaspropiedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabusquedaspropiedades[".arrGroupsPerPage"] = $arrGPP;

$tdatabusquedaspropiedades[".highlightSearchResults"] = true;

$tableKeysbusquedaspropiedades = array();
$tableKeysbusquedaspropiedades[] = "BusquedaPropiedadId";
$tdatabusquedaspropiedades[".Keys"] = $tableKeysbusquedaspropiedades;


$tdatabusquedaspropiedades[".hideMobileList"] = array();




//	BusquedaPropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BusquedaPropiedadId";
	$fdata["GoodName"] = "BusquedaPropiedadId";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","BusquedaPropiedadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "BusquedaPropiedadId";

		$fdata["sourceSingle"] = "BusquedaPropiedadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BusquedaPropiedadId";

	
	
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


	$tdatabusquedaspropiedades["BusquedaPropiedadId"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "BusquedaPropiedadId";
//	BusquedaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BusquedaId";
	$fdata["GoodName"] = "BusquedaId";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","BusquedaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BusquedaId";

		$fdata["sourceSingle"] = "BusquedaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BusquedaId";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "dbo.Busquedas";
	$edata["LookupConnId"] = "GCC_at_S00001_CCAD01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "BusquedaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ProcesadaCodigo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatabusquedaspropiedades["BusquedaId"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "BusquedaId";
//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","PropiedadId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Propiedades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PropiedadId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Propiedad";

	

	
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


	$tdatabusquedaspropiedades["PropiedadId"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "PropiedadId";
//	Propiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Propiedad";
	$fdata["GoodName"] = "Propiedad";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Propiedad");
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


	$tdatabusquedaspropiedades["Propiedad"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Propiedad";
//	Matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Matricula";
	$fdata["GoodName"] = "Matricula";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Matricula");
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


	$tdatabusquedaspropiedades["Matricula"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Matricula";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

		$fdata["sourceSingle"] = "Ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ciudad";

	
	
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


	$tdatabusquedaspropiedades["Ciudad"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Ciudad";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Direccion");
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


	$tdatabusquedaspropiedades["Direccion"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Direccion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Observaciones");
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


	$tdatabusquedaspropiedades["Observaciones"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Observaciones";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["sourceSingle"] = "Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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


	$tdatabusquedaspropiedades["Identificacion"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Identificacion";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.BusquedasPropiedades";
	$fdata["Label"] = GetFieldLabel("dbo_BusquedasPropiedades","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

		$fdata["sourceSingle"] = "Sancionado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sancionado";

	
	
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


	$tdatabusquedaspropiedades["Sancionado"] = $fdata;
		$tdatabusquedaspropiedades[".searchableFields"][] = "Sancionado";


$tables_data["dbo.BusquedasPropiedades"]=&$tdatabusquedaspropiedades;
$field_labels["dbo_BusquedasPropiedades"] = &$fieldLabelsbusquedaspropiedades;
$fieldToolTips["dbo_BusquedasPropiedades"] = &$fieldToolTipsbusquedaspropiedades;
$placeHolders["dbo_BusquedasPropiedades"] = &$placeHoldersbusquedaspropiedades;
$page_titles["dbo_BusquedasPropiedades"] = &$pageTitlesbusquedaspropiedades;


changeTextControlsToDate( "dbo.BusquedasPropiedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.BusquedasPropiedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.BusquedasPropiedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_busquedaspropiedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BusquedaPropiedadId,  	BusquedaId,  	PropiedadId,  	Propiedad,  	Matricula,  	Ciudad,  	Direccion,  	Observaciones,  	Identificacion,  	Sancionado";
$proto0["m_strFrom"] = "FROM dbo.BusquedasPropiedades";
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
	"m_strName" => "BusquedaPropiedadId",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto6["m_sql"] = "BusquedaPropiedadId";
$proto6["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BusquedaId",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto8["m_sql"] = "BusquedaId";
$proto8["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PropiedadId",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto10["m_sql"] = "PropiedadId";
$proto10["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto12["m_sql"] = "Propiedad";
$proto12["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto14["m_sql"] = "Matricula";
$proto14["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ciudad",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto16["m_sql"] = "Ciudad";
$proto16["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto18["m_sql"] = "Direccion";
$proto18["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto20["m_sql"] = "Observaciones";
$proto20["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto22["m_sql"] = "Identificacion";
$proto22["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.BusquedasPropiedades",
	"m_srcTableName" => "dbo.BusquedasPropiedades"
));

$proto24["m_sql"] = "Sancionado";
$proto24["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.BusquedasPropiedades";
$proto27["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "BusquedaPropiedadId";
$proto27["m_columns"][] = "BusquedaId";
$proto27["m_columns"][] = "PropiedadId";
$proto27["m_columns"][] = "Propiedad";
$proto27["m_columns"][] = "Matricula";
$proto27["m_columns"][] = "Ciudad";
$proto27["m_columns"][] = "Direccion";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Identificacion";
$proto27["m_columns"][] = "Sancionado";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.BusquedasPropiedades";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.BusquedasPropiedades";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.BusquedasPropiedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_busquedaspropiedades = createSqlQuery_busquedaspropiedades();


	
		;

										

$tdatabusquedaspropiedades[".sqlquery"] = $queryData_busquedaspropiedades;



$tdatabusquedaspropiedades[".hasEvents"] = false;

?>