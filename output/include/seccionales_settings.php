<?php
$tdataseccionales = array();
$tdataseccionales[".searchableFields"] = array();
$tdataseccionales[".ShortName"] = "seccionales";
$tdataseccionales[".OwnerID"] = "";
$tdataseccionales[".OriginalTable"] = "dbo.Seccionales";


$tdataseccionales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataseccionales[".originalPagesByType"] = $tdataseccionales[".pagesByType"];
$tdataseccionales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataseccionales[".originalPages"] = $tdataseccionales[".pages"];
$tdataseccionales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataseccionales[".originalDefaultPages"] = $tdataseccionales[".defaultPages"];

//	field labels
$fieldLabelsseccionales = array();
$fieldToolTipsseccionales = array();
$pageTitlesseccionales = array();
$placeHoldersseccionales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseccionales["Spanish"] = array();
	$fieldToolTipsseccionales["Spanish"] = array();
	$placeHoldersseccionales["Spanish"] = array();
	$pageTitlesseccionales["Spanish"] = array();
	$fieldLabelsseccionales["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsseccionales["Spanish"]["SeccionalId"] = "";
	$placeHoldersseccionales["Spanish"]["SeccionalId"] = "";
	$fieldLabelsseccionales["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsseccionales["Spanish"]["Codigo"] = "";
	$placeHoldersseccionales["Spanish"]["Codigo"] = "";
	$fieldLabelsseccionales["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsseccionales["Spanish"]["Seccional"] = "";
	$placeHoldersseccionales["Spanish"]["Seccional"] = "";
	$fieldLabelsseccionales["Spanish"]["NIT"] = "NIT";
	$fieldToolTipsseccionales["Spanish"]["NIT"] = "";
	$placeHoldersseccionales["Spanish"]["NIT"] = "";
	$fieldLabelsseccionales["Spanish"]["CiudadId"] = "Ciudad";
	$fieldToolTipsseccionales["Spanish"]["CiudadId"] = "";
	$placeHoldersseccionales["Spanish"]["CiudadId"] = "";
	$fieldLabelsseccionales["Spanish"]["PiePagina"] = "Pie Pagina";
	$fieldToolTipsseccionales["Spanish"]["PiePagina"] = "";
	$placeHoldersseccionales["Spanish"]["PiePagina"] = "";
	$fieldLabelsseccionales["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsseccionales["Spanish"]["Sigobius"] = "";
	$placeHoldersseccionales["Spanish"]["Sigobius"] = "";
	$fieldLabelsseccionales["Spanish"]["Email"] = "Email";
	$fieldToolTipsseccionales["Spanish"]["Email"] = "";
	$placeHoldersseccionales["Spanish"]["Email"] = "";
	$fieldLabelsseccionales["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsseccionales["Spanish"]["Direccion"] = "";
	$placeHoldersseccionales["Spanish"]["Direccion"] = "";
	$fieldLabelsseccionales["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsseccionales["Spanish"]["Telefonos"] = "";
	$placeHoldersseccionales["Spanish"]["Telefonos"] = "";
	$fieldLabelsseccionales["Spanish"]["PCI"] = "PCI";
	$fieldToolTipsseccionales["Spanish"]["PCI"] = "";
	$placeHoldersseccionales["Spanish"]["PCI"] = "";
	$fieldLabelsseccionales["Spanish"]["Contador"] = "Contador";
	$fieldToolTipsseccionales["Spanish"]["Contador"] = "";
	$placeHoldersseccionales["Spanish"]["Contador"] = "";
	$fieldLabelsseccionales["Spanish"]["ContadorCargo"] = "Cargo Contador";
	$fieldToolTipsseccionales["Spanish"]["ContadorCargo"] = "";
	$placeHoldersseccionales["Spanish"]["ContadorCargo"] = "";
	$fieldLabelsseccionales["Spanish"]["Director"] = "Director";
	$fieldToolTipsseccionales["Spanish"]["Director"] = "";
	$placeHoldersseccionales["Spanish"]["Director"] = "";
	$fieldLabelsseccionales["Spanish"]["DirectorCargo"] = "Cargo Director";
	$fieldToolTipsseccionales["Spanish"]["DirectorCargo"] = "";
	$placeHoldersseccionales["Spanish"]["DirectorCargo"] = "";
	$fieldLabelsseccionales["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsseccionales["Spanish"]["Abogado"] = "";
	$placeHoldersseccionales["Spanish"]["Abogado"] = "";
	$fieldLabelsseccionales["Spanish"]["AbogadoCargo"] = "Cargo Abogado";
	$fieldToolTipsseccionales["Spanish"]["AbogadoCargo"] = "";
	$placeHoldersseccionales["Spanish"]["AbogadoCargo"] = "";
	$fieldLabelsseccionales["Spanish"]["Formato"] = "Imprimir Formato";
	$fieldToolTipsseccionales["Spanish"]["Formato"] = "";
	$placeHoldersseccionales["Spanish"]["Formato"] = "";
	$fieldLabelsseccionales["Spanish"]["Corporacion"] = "Corporacion";
	$fieldToolTipsseccionales["Spanish"]["Corporacion"] = "";
	$placeHoldersseccionales["Spanish"]["Corporacion"] = "";
	$fieldLabelsseccionales["Spanish"]["Unidad"] = "Unidad Administrativa";
	$fieldToolTipsseccionales["Spanish"]["Unidad"] = "";
	$placeHoldersseccionales["Spanish"]["Unidad"] = "";
	$fieldLabelsseccionales["Spanish"]["Oficina"] = "Oficina";
	$fieldToolTipsseccionales["Spanish"]["Oficina"] = "";
	$placeHoldersseccionales["Spanish"]["Oficina"] = "";
	$fieldLabelsseccionales["Spanish"]["Serie"] = "Serie";
	$fieldToolTipsseccionales["Spanish"]["Serie"] = "";
	$placeHoldersseccionales["Spanish"]["Serie"] = "";
	$fieldLabelsseccionales["Spanish"]["Subserie"] = "Subserie";
	$fieldToolTipsseccionales["Spanish"]["Subserie"] = "";
	$placeHoldersseccionales["Spanish"]["Subserie"] = "";
	if (count($fieldToolTipsseccionales["Spanish"]))
		$tdataseccionales[".isUseToolTips"] = true;
}


	$tdataseccionales[".NCSearch"] = true;



$tdataseccionales[".shortTableName"] = "seccionales";
$tdataseccionales[".nSecOptions"] = 0;

$tdataseccionales[".mainTableOwnerID"] = "";
$tdataseccionales[".entityType"] = 0;
$tdataseccionales[".connId"] = "GCC_at_S00001_CCAD01";


$tdataseccionales[".strOriginalTableName"] = "dbo.Seccionales";

	



$tdataseccionales[".showAddInPopup"] = false;

$tdataseccionales[".showEditInPopup"] = false;

$tdataseccionales[".showViewInPopup"] = false;

$tdataseccionales[".listAjax"] = false;
//	temporary
//$tdataseccionales[".listAjax"] = false;

	$tdataseccionales[".audit"] = true;

	$tdataseccionales[".locking"] = false;


$pages = $tdataseccionales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseccionales[".edit"] = true;
	$tdataseccionales[".afterEditAction"] = 1;
	$tdataseccionales[".closePopupAfterEdit"] = 1;
	$tdataseccionales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseccionales[".add"] = true;
$tdataseccionales[".afterAddAction"] = 1;
$tdataseccionales[".closePopupAfterAdd"] = 1;
$tdataseccionales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseccionales[".list"] = true;
}



$tdataseccionales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseccionales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseccionales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseccionales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseccionales[".printFriendly"] = true;
}



$tdataseccionales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseccionales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseccionales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseccionales[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																								

$tdataseccionales[".ajaxCodeSnippetAdded"] = false;

$tdataseccionales[".buttonsAdded"] = false;

$tdataseccionales[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseccionales[".isUseTimeForSearch"] = false;


$tdataseccionales[".badgeColor"] = "6da5c8";


$tdataseccionales[".allSearchFields"] = array();
$tdataseccionales[".filterFields"] = array();
$tdataseccionales[".requiredSearchFields"] = array();

$tdataseccionales[".googleLikeFields"] = array();
$tdataseccionales[".googleLikeFields"][] = "SeccionalId";
$tdataseccionales[".googleLikeFields"][] = "Codigo";
$tdataseccionales[".googleLikeFields"][] = "Seccional";
$tdataseccionales[".googleLikeFields"][] = "NIT";
$tdataseccionales[".googleLikeFields"][] = "CiudadId";
$tdataseccionales[".googleLikeFields"][] = "PiePagina";
$tdataseccionales[".googleLikeFields"][] = "Sigobius";
$tdataseccionales[".googleLikeFields"][] = "Email";
$tdataseccionales[".googleLikeFields"][] = "Direccion";
$tdataseccionales[".googleLikeFields"][] = "Telefonos";
$tdataseccionales[".googleLikeFields"][] = "PCI";
$tdataseccionales[".googleLikeFields"][] = "Contador";
$tdataseccionales[".googleLikeFields"][] = "ContadorCargo";
$tdataseccionales[".googleLikeFields"][] = "Director";
$tdataseccionales[".googleLikeFields"][] = "DirectorCargo";
$tdataseccionales[".googleLikeFields"][] = "Abogado";
$tdataseccionales[".googleLikeFields"][] = "AbogadoCargo";
$tdataseccionales[".googleLikeFields"][] = "Formato";
$tdataseccionales[".googleLikeFields"][] = "Corporacion";
$tdataseccionales[".googleLikeFields"][] = "Unidad";
$tdataseccionales[".googleLikeFields"][] = "Oficina";
$tdataseccionales[".googleLikeFields"][] = "Serie";
$tdataseccionales[".googleLikeFields"][] = "Subserie";



$tdataseccionales[".tableType"] = "list";

$tdataseccionales[".printerPageOrientation"] = 0;
$tdataseccionales[".nPrinterPageScale"] = 100;

$tdataseccionales[".nPrinterSplitRecords"] = 40;

$tdataseccionales[".geocodingEnabled"] = false;





$tdataseccionales[".isResizeColumns"] = true;





$tdataseccionales[".pageSize"] = 20;

$tdataseccionales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseccionales[".strOrderBy"] = $tstrOrderBy;

$tdataseccionales[".orderindexes"] = array();


$tdataseccionales[".sqlHead"] = "SELECT SeccionalId,  	Codigo,  	case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end  	as Seccional,  	NIT,  	CiudadId,  	PiePagina,  	Sigobius,  	Email,  	Direccion,  	Telefonos,  	PCI,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Abogado,  	AbogadoCargo,  	Formato,  	Corporacion,  	Unidad,  	Oficina,  	Serie,  	Subserie";
$tdataseccionales[".sqlFrom"] = "FROM dbo.Seccionales";
$tdataseccionales[".sqlWhereExpr"] = "";
$tdataseccionales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseccionales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseccionales[".arrGroupsPerPage"] = $arrGPP;

$tdataseccionales[".highlightSearchResults"] = true;

$tableKeysseccionales = array();
$tableKeysseccionales[] = "SeccionalId";
$tdataseccionales[".Keys"] = $tableKeysseccionales;


$tdataseccionales[".hideMobileList"] = array();




//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","SeccionalId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalId";

	
	
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


	$tdataseccionales["SeccionalId"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "SeccionalId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Codigo");
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
			$edata["EditParams"].= " maxlength=23";

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


	$tdataseccionales["Codigo"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Codigo";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

		$fdata["sourceSingle"] = "Seccional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end";

	
	
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


	$tdataseccionales["Seccional"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Seccional";
//	NIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NIT";
	$fdata["GoodName"] = "NIT";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","NIT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NIT";

		$fdata["sourceSingle"] = "NIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIT";

	
	
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


	$tdataseccionales["NIT"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "NIT";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","CiudadId");
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


	$tdataseccionales["CiudadId"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "CiudadId";
//	PiePagina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PiePagina";
	$fdata["GoodName"] = "PiePagina";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","PiePagina");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PiePagina";

		$fdata["sourceSingle"] = "PiePagina";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PiePagina";

	
	
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


	$tdataseccionales["PiePagina"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "PiePagina";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Sigobius");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdataseccionales["Sigobius"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Sigobius";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Email");
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


	$tdataseccionales["Email"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Email";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Direccion");
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


	$tdataseccionales["Direccion"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Direccion";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Telefonos");
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


	$tdataseccionales["Telefonos"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Telefonos";
//	PCI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PCI";
	$fdata["GoodName"] = "PCI";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","PCI");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PCI";

		$fdata["sourceSingle"] = "PCI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCI";

	
	
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


	$tdataseccionales["PCI"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "PCI";
//	Contador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Contador";
	$fdata["GoodName"] = "Contador";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Contador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Contador";

		$fdata["sourceSingle"] = "Contador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Contador";

	
	
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


	$tdataseccionales["Contador"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Contador";
//	ContadorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ContadorCargo";
	$fdata["GoodName"] = "ContadorCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","ContadorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContadorCargo";

		$fdata["sourceSingle"] = "ContadorCargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContadorCargo";

	
	
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


	$tdataseccionales["ContadorCargo"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "ContadorCargo";
//	Director
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Director";
	$fdata["GoodName"] = "Director";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Director");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Director";

		$fdata["sourceSingle"] = "Director";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Director";

	
	
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


	$tdataseccionales["Director"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Director";
//	DirectorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DirectorCargo";
	$fdata["GoodName"] = "DirectorCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","DirectorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DirectorCargo";

		$fdata["sourceSingle"] = "DirectorCargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DirectorCargo";

	
	
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


	$tdataseccionales["DirectorCargo"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "DirectorCargo";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

		$fdata["sourceSingle"] = "Abogado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abogado";

	
	
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


	$tdataseccionales["Abogado"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Abogado";
//	AbogadoCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AbogadoCargo";
	$fdata["GoodName"] = "AbogadoCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","AbogadoCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AbogadoCargo";

		$fdata["sourceSingle"] = "AbogadoCargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoCargo";

	
	
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


	$tdataseccionales["AbogadoCargo"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "AbogadoCargo";
//	Formato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Formato";
	$fdata["GoodName"] = "Formato";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Formato");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Formato";

		$fdata["sourceSingle"] = "Formato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Formato";

	
	
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


	$tdataseccionales["Formato"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Formato";
//	Corporacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Corporacion";
	$fdata["GoodName"] = "Corporacion";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Corporacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Corporacion";

		$fdata["sourceSingle"] = "Corporacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Corporacion";

	
	
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


	$tdataseccionales["Corporacion"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Corporacion";
//	Unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Unidad";
	$fdata["GoodName"] = "Unidad";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Unidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Unidad";

		$fdata["sourceSingle"] = "Unidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Unidad";

	
	
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


	$tdataseccionales["Unidad"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Unidad";
//	Oficina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Oficina";
	$fdata["GoodName"] = "Oficina";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Oficina");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Oficina";

		$fdata["sourceSingle"] = "Oficina";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Oficina";

	
	
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


	$tdataseccionales["Oficina"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Oficina";
//	Serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Serie";
	$fdata["GoodName"] = "Serie";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serie";

		$fdata["sourceSingle"] = "Serie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Serie";

	
	
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


	$tdataseccionales["Serie"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Serie";
//	Subserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Subserie";
	$fdata["GoodName"] = "Subserie";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales","Subserie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Subserie";

		$fdata["sourceSingle"] = "Subserie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subserie";

	
	
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


	$tdataseccionales["Subserie"] = $fdata;
		$tdataseccionales[".searchableFields"][] = "Subserie";


$tables_data["dbo.Seccionales"]=&$tdataseccionales;
$field_labels["dbo_Seccionales"] = &$fieldLabelsseccionales;
$fieldToolTips["dbo_Seccionales"] = &$fieldToolTipsseccionales;
$placeHolders["dbo_Seccionales"] = &$placeHoldersseccionales;
$page_titles["dbo_Seccionales"] = &$pageTitlesseccionales;


changeTextControlsToDate( "dbo.Seccionales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Seccionales"] = array();
//	dbo.Abogados
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Abogados";
		$detailsParam["dOriginalTable"] = "dbo.Abogados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "abogados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Abogados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Presupuestos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Presupuestos";
		$detailsParam["dOriginalTable"] = "dbo.Presupuestos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "presupuestos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Presupuestos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Chequeos
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Chequeos";
		$detailsParam["dOriginalTable"] = "dbo.Chequeos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Chequeos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Procesos
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Importaciones
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Importaciones";
		$detailsParam["dOriginalTable"] = "dbo.Importaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "importaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Importaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Indeterminados
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Indeterminados";
		$detailsParam["dOriginalTable"] = "dbo.Indeterminados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indeterminados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Indeterminados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Minjusticia
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Minjusticia2
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.Minjusticia3
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//	dbo.ProcesosReasignar
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosReasignar";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesosreasignar";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosReasignar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Seccionales"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["masterKeys"][]="SeccionalId";

				$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Seccionales"][$dIndex]["detailKeys"][]="SeccionalId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Seccionales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Cuentas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Cuentas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cuentas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Seccionales"][0] = $masterParams;
				$masterTablesData["dbo.Seccionales"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Seccionales"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Seccionales"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Seccionales"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seccionales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SeccionalId,  	Codigo,  	case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end  	as Seccional,  	NIT,  	CiudadId,  	PiePagina,  	Sigobius,  	Email,  	Direccion,  	Telefonos,  	PCI,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Abogado,  	AbogadoCargo,  	Formato,  	Corporacion,  	Unidad,  	Oficina,  	Serie,  	Subserie";
$proto0["m_strFrom"] = "FROM dbo.Seccionales";
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
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto6["m_sql"] = "SeccionalId";
$proto6["m_srcTableName"] = "dbo.Seccionales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Seccionales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end"
));

$proto10["m_sql"] = "case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end";
$proto10["m_srcTableName"] = "dbo.Seccionales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Seccional";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NIT",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto12["m_sql"] = "NIT";
$proto12["m_srcTableName"] = "dbo.Seccionales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto14["m_sql"] = "CiudadId";
$proto14["m_srcTableName"] = "dbo.Seccionales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PiePagina",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto16["m_sql"] = "PiePagina";
$proto16["m_srcTableName"] = "dbo.Seccionales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto18["m_sql"] = "Sigobius";
$proto18["m_srcTableName"] = "dbo.Seccionales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "dbo.Seccionales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto22["m_sql"] = "Direccion";
$proto22["m_srcTableName"] = "dbo.Seccionales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto24["m_sql"] = "Telefonos";
$proto24["m_srcTableName"] = "dbo.Seccionales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PCI",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto26["m_sql"] = "PCI";
$proto26["m_srcTableName"] = "dbo.Seccionales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Contador",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto28["m_sql"] = "Contador";
$proto28["m_srcTableName"] = "dbo.Seccionales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ContadorCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto30["m_sql"] = "ContadorCargo";
$proto30["m_srcTableName"] = "dbo.Seccionales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Director",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto32["m_sql"] = "Director";
$proto32["m_srcTableName"] = "dbo.Seccionales";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DirectorCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto34["m_sql"] = "DirectorCargo";
$proto34["m_srcTableName"] = "dbo.Seccionales";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto36["m_sql"] = "Abogado";
$proto36["m_srcTableName"] = "dbo.Seccionales";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto38["m_sql"] = "AbogadoCargo";
$proto38["m_srcTableName"] = "dbo.Seccionales";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Formato",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto40["m_sql"] = "Formato";
$proto40["m_srcTableName"] = "dbo.Seccionales";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto42["m_sql"] = "Corporacion";
$proto42["m_srcTableName"] = "dbo.Seccionales";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidad",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto44["m_sql"] = "Unidad";
$proto44["m_srcTableName"] = "dbo.Seccionales";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficina",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto46["m_sql"] = "Oficina";
$proto46["m_srcTableName"] = "dbo.Seccionales";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Serie",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto48["m_sql"] = "Serie";
$proto48["m_srcTableName"] = "dbo.Seccionales";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Subserie",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales"
));

$proto50["m_sql"] = "Subserie";
$proto50["m_srcTableName"] = "dbo.Seccionales";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Seccionales";
$proto53["m_srcTableName"] = "dbo.Seccionales";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "SeccionalId";
$proto53["m_columns"][] = "Codigo";
$proto53["m_columns"][] = "Seccional";
$proto53["m_columns"][] = "NIT";
$proto53["m_columns"][] = "CiudadId";
$proto53["m_columns"][] = "PiePagina";
$proto53["m_columns"][] = "Sigobius";
$proto53["m_columns"][] = "Email";
$proto53["m_columns"][] = "Direccion";
$proto53["m_columns"][] = "Telefonos";
$proto53["m_columns"][] = "PCI";
$proto53["m_columns"][] = "Contador";
$proto53["m_columns"][] = "ContadorCargo";
$proto53["m_columns"][] = "Director";
$proto53["m_columns"][] = "DirectorCargo";
$proto53["m_columns"][] = "Abogado";
$proto53["m_columns"][] = "AbogadoCargo";
$proto53["m_columns"][] = "Formato";
$proto53["m_columns"][] = "Corporacion";
$proto53["m_columns"][] = "Unidad";
$proto53["m_columns"][] = "Oficina";
$proto53["m_columns"][] = "Serie";
$proto53["m_columns"][] = "Subserie";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "dbo.Seccionales";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "dbo.Seccionales";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Seccionales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seccionales = createSqlQuery_seccionales();


	
		;

																							

$tdataseccionales[".sqlquery"] = $queryData_seccionales;



$tdataseccionales[".hasEvents"] = false;

?>