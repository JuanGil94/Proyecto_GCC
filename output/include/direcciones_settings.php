<?php
$tdatadirecciones = array();
$tdatadirecciones[".searchableFields"] = array();
$tdatadirecciones[".ShortName"] = "direcciones";
$tdatadirecciones[".OwnerID"] = "";
$tdatadirecciones[".OriginalTable"] = "dbo.Direcciones";


$tdatadirecciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadirecciones[".originalPagesByType"] = $tdatadirecciones[".pagesByType"];
$tdatadirecciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadirecciones[".originalPages"] = $tdatadirecciones[".pages"];
$tdatadirecciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadirecciones[".originalDefaultPages"] = $tdatadirecciones[".defaultPages"];

//	field labels
$fieldLabelsdirecciones = array();
$fieldToolTipsdirecciones = array();
$pageTitlesdirecciones = array();
$placeHoldersdirecciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdirecciones["Spanish"] = array();
	$fieldToolTipsdirecciones["Spanish"] = array();
	$placeHoldersdirecciones["Spanish"] = array();
	$pageTitlesdirecciones["Spanish"] = array();
	$fieldLabelsdirecciones["Spanish"]["DireccionId"] = "Direccion Id";
	$fieldToolTipsdirecciones["Spanish"]["DireccionId"] = "";
	$placeHoldersdirecciones["Spanish"]["DireccionId"] = "";
	$fieldLabelsdirecciones["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsdirecciones["Spanish"]["SancionadoId"] = "";
	$placeHoldersdirecciones["Spanish"]["SancionadoId"] = "";
	$fieldLabelsdirecciones["Spanish"]["CarcelId"] = "Carcel Id";
	$fieldToolTipsdirecciones["Spanish"]["CarcelId"] = "";
	$placeHoldersdirecciones["Spanish"]["CarcelId"] = "";
	$fieldLabelsdirecciones["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsdirecciones["Spanish"]["CiudadId"] = "";
	$placeHoldersdirecciones["Spanish"]["CiudadId"] = "";
	$fieldLabelsdirecciones["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsdirecciones["Spanish"]["Direccion"] = "";
	$placeHoldersdirecciones["Spanish"]["Direccion"] = "";
	$fieldLabelsdirecciones["Spanish"]["Barrio"] = "Barrio";
	$fieldToolTipsdirecciones["Spanish"]["Barrio"] = "";
	$placeHoldersdirecciones["Spanish"]["Barrio"] = "";
	$fieldLabelsdirecciones["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsdirecciones["Spanish"]["Telefonos"] = "";
	$placeHoldersdirecciones["Spanish"]["Telefonos"] = "";
	$fieldLabelsdirecciones["Spanish"]["Activa"] = "Activa";
	$fieldToolTipsdirecciones["Spanish"]["Activa"] = "";
	$placeHoldersdirecciones["Spanish"]["Activa"] = "";
	if (count($fieldToolTipsdirecciones["Spanish"]))
		$tdatadirecciones[".isUseToolTips"] = true;
}


	$tdatadirecciones[".NCSearch"] = true;



$tdatadirecciones[".shortTableName"] = "direcciones";
$tdatadirecciones[".nSecOptions"] = 0;

$tdatadirecciones[".mainTableOwnerID"] = "";
$tdatadirecciones[".entityType"] = 0;
$tdatadirecciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadirecciones[".strOriginalTableName"] = "dbo.Direcciones";

	



$tdatadirecciones[".showAddInPopup"] = false;

$tdatadirecciones[".showEditInPopup"] = false;

$tdatadirecciones[".showViewInPopup"] = false;

$tdatadirecciones[".listAjax"] = false;
//	temporary
//$tdatadirecciones[".listAjax"] = false;

	$tdatadirecciones[".audit"] = false;

	$tdatadirecciones[".locking"] = false;


$pages = $tdatadirecciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadirecciones[".edit"] = true;
	$tdatadirecciones[".afterEditAction"] = 1;
	$tdatadirecciones[".closePopupAfterEdit"] = 1;
	$tdatadirecciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadirecciones[".add"] = true;
$tdatadirecciones[".afterAddAction"] = 1;
$tdatadirecciones[".closePopupAfterAdd"] = 1;
$tdatadirecciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadirecciones[".list"] = true;
}



$tdatadirecciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadirecciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadirecciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadirecciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadirecciones[".printFriendly"] = true;
}



$tdatadirecciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadirecciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadirecciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadirecciones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																				

$tdatadirecciones[".ajaxCodeSnippetAdded"] = false;

$tdatadirecciones[".buttonsAdded"] = false;

$tdatadirecciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadirecciones[".isUseTimeForSearch"] = false;


$tdatadirecciones[".badgeColor"] = "d2691e";


$tdatadirecciones[".allSearchFields"] = array();
$tdatadirecciones[".filterFields"] = array();
$tdatadirecciones[".requiredSearchFields"] = array();

$tdatadirecciones[".googleLikeFields"] = array();
$tdatadirecciones[".googleLikeFields"][] = "DireccionId";
$tdatadirecciones[".googleLikeFields"][] = "SancionadoId";
$tdatadirecciones[".googleLikeFields"][] = "CarcelId";
$tdatadirecciones[".googleLikeFields"][] = "CiudadId";
$tdatadirecciones[".googleLikeFields"][] = "Direccion";
$tdatadirecciones[".googleLikeFields"][] = "Barrio";
$tdatadirecciones[".googleLikeFields"][] = "Telefonos";
$tdatadirecciones[".googleLikeFields"][] = "Activa";



$tdatadirecciones[".tableType"] = "list";

$tdatadirecciones[".printerPageOrientation"] = 0;
$tdatadirecciones[".nPrinterPageScale"] = 100;

$tdatadirecciones[".nPrinterSplitRecords"] = 40;

$tdatadirecciones[".geocodingEnabled"] = false;





$tdatadirecciones[".isResizeColumns"] = true;





$tdatadirecciones[".pageSize"] = 20;

$tdatadirecciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadirecciones[".strOrderBy"] = $tstrOrderBy;

$tdatadirecciones[".orderindexes"] = array();


$tdatadirecciones[".sqlHead"] = "SELECT DireccionId,  	SancionadoId,  	CarcelId,  	CiudadId,  	Direccion,  	Barrio,  	Telefonos,  	Activa";
$tdatadirecciones[".sqlFrom"] = "FROM dbo.Direcciones";
$tdatadirecciones[".sqlWhereExpr"] = "";
$tdatadirecciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadirecciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadirecciones[".arrGroupsPerPage"] = $arrGPP;

$tdatadirecciones[".highlightSearchResults"] = true;

$tableKeysdirecciones = array();
$tableKeysdirecciones[] = "DireccionId";
$tdatadirecciones[".Keys"] = $tableKeysdirecciones;


$tdatadirecciones[".hideMobileList"] = array();




//	DireccionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DireccionId";
	$fdata["GoodName"] = "DireccionId";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","DireccionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DireccionId";

		$fdata["sourceSingle"] = "DireccionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DireccionId";

	
	
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


	$tdatadirecciones["DireccionId"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "DireccionId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","SancionadoId");
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


	$tdatadirecciones["SancionadoId"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "SancionadoId";
//	CarcelId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CarcelId";
	$fdata["GoodName"] = "CarcelId";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","CarcelId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Carceles";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarcelId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Carcel";

	

	
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


	$tdatadirecciones["CarcelId"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "CarcelId";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","CiudadId");
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
	$edata["LookupTable"] = "dbo.Ciudades3";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CiudadId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dbo.Departamentos.Codigo+dbo.Ciudades.Codigo+' - '+dbo.Ciudades.Ciudad+' ('+dbo.Departamentos.Departamento+')'";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatadirecciones["CiudadId"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "CiudadId";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","Direccion");
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


	$tdatadirecciones["Direccion"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "Direccion";
//	Barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Barrio";
	$fdata["GoodName"] = "Barrio";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","Barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Barrio";

		$fdata["sourceSingle"] = "Barrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Barrio";

	
	
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


	$tdatadirecciones["Barrio"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "Barrio";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","Telefonos");
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


	$tdatadirecciones["Telefonos"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "Telefonos";
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "dbo.Direcciones";
	$fdata["Label"] = GetFieldLabel("dbo_Direcciones","Activa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activa";

		$fdata["sourceSingle"] = "Activa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activa";

	
	
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


	$tdatadirecciones["Activa"] = $fdata;
		$tdatadirecciones[".searchableFields"][] = "Activa";


$tables_data["dbo.Direcciones"]=&$tdatadirecciones;
$field_labels["dbo_Direcciones"] = &$fieldLabelsdirecciones;
$fieldToolTips["dbo_Direcciones"] = &$fieldToolTipsdirecciones;
$placeHolders["dbo_Direcciones"] = &$placeHoldersdirecciones;
$page_titles["dbo_Direcciones"] = &$pageTitlesdirecciones;


changeTextControlsToDate( "dbo.Direcciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Direcciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Direcciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Ciudades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Ciudades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ciudades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Direcciones"][0] = $masterParams;
				$masterTablesData["dbo.Direcciones"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Direcciones"][0]["masterKeys"][]="CiudadId";
				$masterTablesData["dbo.Direcciones"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Direcciones"][0]["detailKeys"][]="CiudadId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Carceles";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Carceles";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "carceles";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Direcciones"][1] = $masterParams;
				$masterTablesData["dbo.Direcciones"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Direcciones"][1]["masterKeys"][]="CarcelId";
				$masterTablesData["dbo.Direcciones"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Direcciones"][1]["detailKeys"][]="CarcelId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Direcciones"][2] = $masterParams;
				$masterTablesData["dbo.Direcciones"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Direcciones"][2]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.Direcciones"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Direcciones"][2]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_direcciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DireccionId,  	SancionadoId,  	CarcelId,  	CiudadId,  	Direccion,  	Barrio,  	Telefonos,  	Activa";
$proto0["m_strFrom"] = "FROM dbo.Direcciones";
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
	"m_strName" => "DireccionId",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto6["m_sql"] = "DireccionId";
$proto6["m_srcTableName"] = "dbo.Direcciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto8["m_sql"] = "SancionadoId";
$proto8["m_srcTableName"] = "dbo.Direcciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarcelId",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto10["m_sql"] = "CarcelId";
$proto10["m_srcTableName"] = "dbo.Direcciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto12["m_sql"] = "CiudadId";
$proto12["m_srcTableName"] = "dbo.Direcciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto14["m_sql"] = "Direccion";
$proto14["m_srcTableName"] = "dbo.Direcciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Barrio",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto16["m_sql"] = "Barrio";
$proto16["m_srcTableName"] = "dbo.Direcciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto18["m_sql"] = "Telefonos";
$proto18["m_srcTableName"] = "dbo.Direcciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "dbo.Direcciones",
	"m_srcTableName" => "dbo.Direcciones"
));

$proto20["m_sql"] = "Activa";
$proto20["m_srcTableName"] = "dbo.Direcciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Direcciones";
$proto23["m_srcTableName"] = "dbo.Direcciones";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "DireccionId";
$proto23["m_columns"][] = "SancionadoId";
$proto23["m_columns"][] = "CarcelId";
$proto23["m_columns"][] = "CiudadId";
$proto23["m_columns"][] = "Direccion";
$proto23["m_columns"][] = "Barrio";
$proto23["m_columns"][] = "Telefonos";
$proto23["m_columns"][] = "Activa";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.Direcciones";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.Direcciones";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Direcciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_direcciones = createSqlQuery_direcciones();


	
		;

								

$tdatadirecciones[".sqlquery"] = $queryData_direcciones;



$tdatadirecciones[".hasEvents"] = false;

?>