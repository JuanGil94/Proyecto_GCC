<?php
$tdataseccionales1 = array();
$tdataseccionales1[".searchableFields"] = array();
$tdataseccionales1[".ShortName"] = "seccionales1";
$tdataseccionales1[".OwnerID"] = "";
$tdataseccionales1[".OriginalTable"] = "dbo.Seccionales";


$tdataseccionales1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataseccionales1[".originalPagesByType"] = $tdataseccionales1[".pagesByType"];
$tdataseccionales1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataseccionales1[".originalPages"] = $tdataseccionales1[".pages"];
$tdataseccionales1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataseccionales1[".originalDefaultPages"] = $tdataseccionales1[".defaultPages"];

//	field labels
$fieldLabelsseccionales1 = array();
$fieldToolTipsseccionales1 = array();
$pageTitlesseccionales1 = array();
$placeHoldersseccionales1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseccionales1["Spanish"] = array();
	$fieldToolTipsseccionales1["Spanish"] = array();
	$placeHoldersseccionales1["Spanish"] = array();
	$pageTitlesseccionales1["Spanish"] = array();
	$fieldLabelsseccionales1["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsseccionales1["Spanish"]["SeccionalId"] = "";
	$placeHoldersseccionales1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsseccionales1["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsseccionales1["Spanish"]["Codigo"] = "";
	$placeHoldersseccionales1["Spanish"]["Codigo"] = "";
	$fieldLabelsseccionales1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsseccionales1["Spanish"]["Seccional"] = "";
	$placeHoldersseccionales1["Spanish"]["Seccional"] = "";
	$fieldLabelsseccionales1["Spanish"]["NIT"] = "NIT";
	$fieldToolTipsseccionales1["Spanish"]["NIT"] = "";
	$placeHoldersseccionales1["Spanish"]["NIT"] = "";
	$fieldLabelsseccionales1["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsseccionales1["Spanish"]["CiudadId"] = "";
	$placeHoldersseccionales1["Spanish"]["CiudadId"] = "";
	$fieldLabelsseccionales1["Spanish"]["PiePagina"] = "Pie Pagina";
	$fieldToolTipsseccionales1["Spanish"]["PiePagina"] = "";
	$placeHoldersseccionales1["Spanish"]["PiePagina"] = "";
	$fieldLabelsseccionales1["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsseccionales1["Spanish"]["Sigobius"] = "";
	$placeHoldersseccionales1["Spanish"]["Sigobius"] = "";
	$fieldLabelsseccionales1["Spanish"]["Email"] = "Email";
	$fieldToolTipsseccionales1["Spanish"]["Email"] = "";
	$placeHoldersseccionales1["Spanish"]["Email"] = "";
	$fieldLabelsseccionales1["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsseccionales1["Spanish"]["Direccion"] = "";
	$placeHoldersseccionales1["Spanish"]["Direccion"] = "";
	$fieldLabelsseccionales1["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsseccionales1["Spanish"]["Telefonos"] = "";
	$placeHoldersseccionales1["Spanish"]["Telefonos"] = "";
	$fieldLabelsseccionales1["Spanish"]["PCI"] = "PCI";
	$fieldToolTipsseccionales1["Spanish"]["PCI"] = "";
	$placeHoldersseccionales1["Spanish"]["PCI"] = "";
	$fieldLabelsseccionales1["Spanish"]["Contador"] = "Contador";
	$fieldToolTipsseccionales1["Spanish"]["Contador"] = "";
	$placeHoldersseccionales1["Spanish"]["Contador"] = "";
	$fieldLabelsseccionales1["Spanish"]["ContadorCargo"] = "Contador Cargo";
	$fieldToolTipsseccionales1["Spanish"]["ContadorCargo"] = "";
	$placeHoldersseccionales1["Spanish"]["ContadorCargo"] = "";
	$fieldLabelsseccionales1["Spanish"]["Director"] = "Director";
	$fieldToolTipsseccionales1["Spanish"]["Director"] = "";
	$placeHoldersseccionales1["Spanish"]["Director"] = "";
	$fieldLabelsseccionales1["Spanish"]["DirectorCargo"] = "Director Cargo";
	$fieldToolTipsseccionales1["Spanish"]["DirectorCargo"] = "";
	$placeHoldersseccionales1["Spanish"]["DirectorCargo"] = "";
	$fieldLabelsseccionales1["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsseccionales1["Spanish"]["Abogado"] = "";
	$placeHoldersseccionales1["Spanish"]["Abogado"] = "";
	$fieldLabelsseccionales1["Spanish"]["AbogadoCargo"] = "Abogado Cargo";
	$fieldToolTipsseccionales1["Spanish"]["AbogadoCargo"] = "";
	$placeHoldersseccionales1["Spanish"]["AbogadoCargo"] = "";
	$fieldLabelsseccionales1["Spanish"]["Formato"] = "Formato";
	$fieldToolTipsseccionales1["Spanish"]["Formato"] = "";
	$placeHoldersseccionales1["Spanish"]["Formato"] = "";
	$fieldLabelsseccionales1["Spanish"]["Corporacion"] = "Corporacion";
	$fieldToolTipsseccionales1["Spanish"]["Corporacion"] = "";
	$placeHoldersseccionales1["Spanish"]["Corporacion"] = "";
	$fieldLabelsseccionales1["Spanish"]["Unidad"] = "Unidad";
	$fieldToolTipsseccionales1["Spanish"]["Unidad"] = "";
	$placeHoldersseccionales1["Spanish"]["Unidad"] = "";
	$fieldLabelsseccionales1["Spanish"]["Oficina"] = "Oficina";
	$fieldToolTipsseccionales1["Spanish"]["Oficina"] = "";
	$placeHoldersseccionales1["Spanish"]["Oficina"] = "";
	$fieldLabelsseccionales1["Spanish"]["Serie"] = "Serie";
	$fieldToolTipsseccionales1["Spanish"]["Serie"] = "";
	$placeHoldersseccionales1["Spanish"]["Serie"] = "";
	$fieldLabelsseccionales1["Spanish"]["Subserie"] = "Subserie";
	$fieldToolTipsseccionales1["Spanish"]["Subserie"] = "";
	$placeHoldersseccionales1["Spanish"]["Subserie"] = "";
	if (count($fieldToolTipsseccionales1["Spanish"]))
		$tdataseccionales1[".isUseToolTips"] = true;
}


	$tdataseccionales1[".NCSearch"] = true;



$tdataseccionales1[".shortTableName"] = "seccionales1";
$tdataseccionales1[".nSecOptions"] = 0;

$tdataseccionales1[".mainTableOwnerID"] = "";
$tdataseccionales1[".entityType"] = 1;
$tdataseccionales1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataseccionales1[".strOriginalTableName"] = "dbo.Seccionales";

	



$tdataseccionales1[".showAddInPopup"] = false;

$tdataseccionales1[".showEditInPopup"] = false;

$tdataseccionales1[".showViewInPopup"] = false;

$tdataseccionales1[".listAjax"] = false;
//	temporary
//$tdataseccionales1[".listAjax"] = false;

	$tdataseccionales1[".audit"] = true;

	$tdataseccionales1[".locking"] = false;


$pages = $tdataseccionales1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseccionales1[".edit"] = true;
	$tdataseccionales1[".afterEditAction"] = 1;
	$tdataseccionales1[".closePopupAfterEdit"] = 1;
	$tdataseccionales1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseccionales1[".add"] = true;
$tdataseccionales1[".afterAddAction"] = 1;
$tdataseccionales1[".closePopupAfterAdd"] = 1;
$tdataseccionales1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseccionales1[".list"] = true;
}



$tdataseccionales1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseccionales1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseccionales1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseccionales1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseccionales1[".printFriendly"] = true;
}



$tdataseccionales1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseccionales1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseccionales1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseccionales1[".isUseAjaxSuggest"] = true;



																																													

$tdataseccionales1[".ajaxCodeSnippetAdded"] = false;

$tdataseccionales1[".buttonsAdded"] = false;

$tdataseccionales1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseccionales1[".isUseTimeForSearch"] = false;


$tdataseccionales1[".badgeColor"] = "778899";


$tdataseccionales1[".allSearchFields"] = array();
$tdataseccionales1[".filterFields"] = array();
$tdataseccionales1[".requiredSearchFields"] = array();

$tdataseccionales1[".googleLikeFields"] = array();
$tdataseccionales1[".googleLikeFields"][] = "SeccionalId";
$tdataseccionales1[".googleLikeFields"][] = "Codigo";
$tdataseccionales1[".googleLikeFields"][] = "Seccional";
$tdataseccionales1[".googleLikeFields"][] = "NIT";
$tdataseccionales1[".googleLikeFields"][] = "CiudadId";
$tdataseccionales1[".googleLikeFields"][] = "PiePagina";
$tdataseccionales1[".googleLikeFields"][] = "Sigobius";
$tdataseccionales1[".googleLikeFields"][] = "Email";
$tdataseccionales1[".googleLikeFields"][] = "Direccion";
$tdataseccionales1[".googleLikeFields"][] = "Telefonos";
$tdataseccionales1[".googleLikeFields"][] = "PCI";
$tdataseccionales1[".googleLikeFields"][] = "Contador";
$tdataseccionales1[".googleLikeFields"][] = "ContadorCargo";
$tdataseccionales1[".googleLikeFields"][] = "Director";
$tdataseccionales1[".googleLikeFields"][] = "DirectorCargo";
$tdataseccionales1[".googleLikeFields"][] = "Abogado";
$tdataseccionales1[".googleLikeFields"][] = "AbogadoCargo";
$tdataseccionales1[".googleLikeFields"][] = "Formato";
$tdataseccionales1[".googleLikeFields"][] = "Corporacion";
$tdataseccionales1[".googleLikeFields"][] = "Unidad";
$tdataseccionales1[".googleLikeFields"][] = "Oficina";
$tdataseccionales1[".googleLikeFields"][] = "Serie";
$tdataseccionales1[".googleLikeFields"][] = "Subserie";



$tdataseccionales1[".tableType"] = "list";

$tdataseccionales1[".printerPageOrientation"] = 0;
$tdataseccionales1[".nPrinterPageScale"] = 100;

$tdataseccionales1[".nPrinterSplitRecords"] = 40;

$tdataseccionales1[".geocodingEnabled"] = false;





$tdataseccionales1[".isResizeColumns"] = true;





$tdataseccionales1[".pageSize"] = 20;

$tdataseccionales1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseccionales1[".strOrderBy"] = $tstrOrderBy;

$tdataseccionales1[".orderindexes"] = array();


$tdataseccionales1[".sqlHead"] = "SELECT SeccionalId,  	Codigo,  	Seccional,  	NIT,  	CiudadId,  	PiePagina,  	Sigobius,  	Email,  	Direccion,  	Telefonos,  	PCI,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Abogado,  	AbogadoCargo,  	Formato,  	Corporacion,  	Unidad,  	Oficina,  	Serie,  	Subserie";
$tdataseccionales1[".sqlFrom"] = "FROM dbo.Seccionales";
$tdataseccionales1[".sqlWhereExpr"] = "SeccionalId=1022";
$tdataseccionales1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseccionales1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseccionales1[".arrGroupsPerPage"] = $arrGPP;

$tdataseccionales1[".highlightSearchResults"] = true;

$tableKeysseccionales1 = array();
$tableKeysseccionales1[] = "SeccionalId";
$tdataseccionales1[".Keys"] = $tableKeysseccionales1;


$tdataseccionales1[".hideMobileList"] = array();




//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","SeccionalId");
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


	$tdataseccionales1["SeccionalId"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "SeccionalId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Codigo");
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


	$tdataseccionales1["Codigo"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Codigo";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

		$fdata["sourceSingle"] = "Seccional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seccional";

	
	
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


	$tdataseccionales1["Seccional"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Seccional";
//	NIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NIT";
	$fdata["GoodName"] = "NIT";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","NIT");
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


	$tdataseccionales1["NIT"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "NIT";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","CiudadId");
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


	$tdataseccionales1["CiudadId"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "CiudadId";
//	PiePagina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PiePagina";
	$fdata["GoodName"] = "PiePagina";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","PiePagina");
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


	$tdataseccionales1["PiePagina"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "PiePagina";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Sigobius");
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


	$tdataseccionales1["Sigobius"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Sigobius";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Email");
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


	$tdataseccionales1["Email"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Email";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Direccion");
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


	$tdataseccionales1["Direccion"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Direccion";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Telefonos");
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


	$tdataseccionales1["Telefonos"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Telefonos";
//	PCI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PCI";
	$fdata["GoodName"] = "PCI";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","PCI");
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


	$tdataseccionales1["PCI"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "PCI";
//	Contador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Contador";
	$fdata["GoodName"] = "Contador";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Contador");
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


	$tdataseccionales1["Contador"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Contador";
//	ContadorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ContadorCargo";
	$fdata["GoodName"] = "ContadorCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","ContadorCargo");
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


	$tdataseccionales1["ContadorCargo"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "ContadorCargo";
//	Director
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Director";
	$fdata["GoodName"] = "Director";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Director");
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


	$tdataseccionales1["Director"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Director";
//	DirectorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DirectorCargo";
	$fdata["GoodName"] = "DirectorCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","DirectorCargo");
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


	$tdataseccionales1["DirectorCargo"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "DirectorCargo";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Abogado");
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


	$tdataseccionales1["Abogado"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Abogado";
//	AbogadoCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AbogadoCargo";
	$fdata["GoodName"] = "AbogadoCargo";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","AbogadoCargo");
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


	$tdataseccionales1["AbogadoCargo"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "AbogadoCargo";
//	Formato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Formato";
	$fdata["GoodName"] = "Formato";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Formato");
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


	$tdataseccionales1["Formato"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Formato";
//	Corporacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Corporacion";
	$fdata["GoodName"] = "Corporacion";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Corporacion");
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


	$tdataseccionales1["Corporacion"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Corporacion";
//	Unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Unidad";
	$fdata["GoodName"] = "Unidad";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Unidad");
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


	$tdataseccionales1["Unidad"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Unidad";
//	Oficina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Oficina";
	$fdata["GoodName"] = "Oficina";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Oficina");
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


	$tdataseccionales1["Oficina"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Oficina";
//	Serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Serie";
	$fdata["GoodName"] = "Serie";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Serie");
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


	$tdataseccionales1["Serie"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Serie";
//	Subserie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Subserie";
	$fdata["GoodName"] = "Subserie";
	$fdata["ownerTable"] = "dbo.Seccionales";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Subserie");
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


	$tdataseccionales1["Subserie"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Subserie";


$tables_data["dbo.Seccionales1"]=&$tdataseccionales1;
$field_labels["dbo_Seccionales1"] = &$fieldLabelsseccionales1;
$fieldToolTips["dbo_Seccionales1"] = &$fieldToolTipsseccionales1;
$placeHolders["dbo_Seccionales1"] = &$placeHoldersseccionales1;
$page_titles["dbo_Seccionales1"] = &$pageTitlesseccionales1;


changeTextControlsToDate( "dbo.Seccionales1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Seccionales1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Seccionales1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seccionales1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SeccionalId,  	Codigo,  	Seccional,  	NIT,  	CiudadId,  	PiePagina,  	Sigobius,  	Email,  	Direccion,  	Telefonos,  	PCI,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Abogado,  	AbogadoCargo,  	Formato,  	Corporacion,  	Unidad,  	Oficina,  	Serie,  	Subserie";
$proto0["m_strFrom"] = "FROM dbo.Seccionales";
$proto0["m_strWhere"] = "SeccionalId=1022";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "SeccionalId=1022";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1022";
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
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto6["m_sql"] = "SeccionalId";
$proto6["m_srcTableName"] = "dbo.Seccionales1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Seccionales1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto10["m_sql"] = "Seccional";
$proto10["m_srcTableName"] = "dbo.Seccionales1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NIT",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto12["m_sql"] = "NIT";
$proto12["m_srcTableName"] = "dbo.Seccionales1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto14["m_sql"] = "CiudadId";
$proto14["m_srcTableName"] = "dbo.Seccionales1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PiePagina",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto16["m_sql"] = "PiePagina";
$proto16["m_srcTableName"] = "dbo.Seccionales1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto18["m_sql"] = "Sigobius";
$proto18["m_srcTableName"] = "dbo.Seccionales1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "dbo.Seccionales1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto22["m_sql"] = "Direccion";
$proto22["m_srcTableName"] = "dbo.Seccionales1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto24["m_sql"] = "Telefonos";
$proto24["m_srcTableName"] = "dbo.Seccionales1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PCI",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto26["m_sql"] = "PCI";
$proto26["m_srcTableName"] = "dbo.Seccionales1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Contador",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto28["m_sql"] = "Contador";
$proto28["m_srcTableName"] = "dbo.Seccionales1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ContadorCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto30["m_sql"] = "ContadorCargo";
$proto30["m_srcTableName"] = "dbo.Seccionales1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Director",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto32["m_sql"] = "Director";
$proto32["m_srcTableName"] = "dbo.Seccionales1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DirectorCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto34["m_sql"] = "DirectorCargo";
$proto34["m_srcTableName"] = "dbo.Seccionales1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto36["m_sql"] = "Abogado";
$proto36["m_srcTableName"] = "dbo.Seccionales1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoCargo",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto38["m_sql"] = "AbogadoCargo";
$proto38["m_srcTableName"] = "dbo.Seccionales1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Formato",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto40["m_sql"] = "Formato";
$proto40["m_srcTableName"] = "dbo.Seccionales1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Corporacion",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto42["m_sql"] = "Corporacion";
$proto42["m_srcTableName"] = "dbo.Seccionales1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidad",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto44["m_sql"] = "Unidad";
$proto44["m_srcTableName"] = "dbo.Seccionales1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Oficina",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto46["m_sql"] = "Oficina";
$proto46["m_srcTableName"] = "dbo.Seccionales1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Serie",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto48["m_sql"] = "Serie";
$proto48["m_srcTableName"] = "dbo.Seccionales1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Subserie",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto50["m_sql"] = "Subserie";
$proto50["m_srcTableName"] = "dbo.Seccionales1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "dbo.Seccionales";
$proto53["m_srcTableName"] = "dbo.Seccionales1";
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
$proto52["m_srcTableName"] = "dbo.Seccionales1";
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
$proto0["m_srcTableName"]="dbo.Seccionales1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seccionales1 = createSqlQuery_seccionales1();


	
		;

																							

$tdataseccionales1[".sqlquery"] = $queryData_seccionales1;



$tdataseccionales1[".hasEvents"] = false;

?>