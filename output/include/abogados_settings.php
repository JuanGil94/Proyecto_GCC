<?php
$tdataabogados = array();
$tdataabogados[".searchableFields"] = array();
$tdataabogados[".ShortName"] = "abogados";
$tdataabogados[".OwnerID"] = "AbogadoId";
$tdataabogados[".OriginalTable"] = "dbo.Abogados";


$tdataabogados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataabogados[".originalPagesByType"] = $tdataabogados[".pagesByType"];
$tdataabogados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataabogados[".originalPages"] = $tdataabogados[".pages"];
$tdataabogados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataabogados[".originalDefaultPages"] = $tdataabogados[".defaultPages"];

//	field labels
$fieldLabelsabogados = array();
$fieldToolTipsabogados = array();
$pageTitlesabogados = array();
$placeHoldersabogados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsabogados["Spanish"] = array();
	$fieldToolTipsabogados["Spanish"] = array();
	$placeHoldersabogados["Spanish"] = array();
	$pageTitlesabogados["Spanish"] = array();
	$fieldLabelsabogados["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsabogados["Spanish"]["AbogadoId"] = "";
	$placeHoldersabogados["Spanish"]["AbogadoId"] = "";
	$fieldLabelsabogados["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsabogados["Spanish"]["Abogado"] = "";
	$placeHoldersabogados["Spanish"]["Abogado"] = "";
	$fieldLabelsabogados["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsabogados["Spanish"]["Documento"] = "";
	$placeHoldersabogados["Spanish"]["Documento"] = "";
	$fieldLabelsabogados["Spanish"]["Tarjeta"] = "Tarjeta Profesional";
	$fieldToolTipsabogados["Spanish"]["Tarjeta"] = "";
	$placeHoldersabogados["Spanish"]["Tarjeta"] = "";
	$fieldLabelsabogados["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsabogados["Spanish"]["Direccion"] = "";
	$placeHoldersabogados["Spanish"]["Direccion"] = "";
	$fieldLabelsabogados["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsabogados["Spanish"]["Telefonos"] = "";
	$placeHoldersabogados["Spanish"]["Telefonos"] = "";
	$fieldLabelsabogados["Spanish"]["Celular"] = "Celular";
	$fieldToolTipsabogados["Spanish"]["Celular"] = "";
	$placeHoldersabogados["Spanish"]["Celular"] = "";
	$fieldLabelsabogados["Spanish"]["Email"] = "E-mail";
	$fieldToolTipsabogados["Spanish"]["Email"] = "";
	$placeHoldersabogados["Spanish"]["Email"] = "";
	$fieldLabelsabogados["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsabogados["Spanish"]["SeccionalId"] = "";
	$placeHoldersabogados["Spanish"]["SeccionalId"] = "";
	$fieldLabelsabogados["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipsabogados["Spanish"]["Masculino"] = "";
	$placeHoldersabogados["Spanish"]["Masculino"] = "";
	$fieldLabelsabogados["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsabogados["Spanish"]["Activo"] = "";
	$placeHoldersabogados["Spanish"]["Activo"] = "";
	$fieldLabelsabogados["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsabogados["Spanish"]["Despacho"] = "";
	$placeHoldersabogados["Spanish"]["Despacho"] = "";
	$fieldLabelsabogados["Spanish"]["Codificador"] = "Codificador";
	$fieldToolTipsabogados["Spanish"]["Codificador"] = "";
	$placeHoldersabogados["Spanish"]["Codificador"] = "";
	$fieldLabelsabogados["Spanish"]["Firma"] = "Firma";
	$fieldToolTipsabogados["Spanish"]["Firma"] = "";
	$placeHoldersabogados["Spanish"]["Firma"] = "";
	if (count($fieldToolTipsabogados["Spanish"]))
		$tdataabogados[".isUseToolTips"] = true;
}


	$tdataabogados[".NCSearch"] = true;



$tdataabogados[".shortTableName"] = "abogados";
$tdataabogados[".nSecOptions"] = 0;

$tdataabogados[".mainTableOwnerID"] = "AbogadoId";
$tdataabogados[".entityType"] = 0;
$tdataabogados[".connId"] = "GCC_at_S00001_CCAD01";


$tdataabogados[".strOriginalTableName"] = "dbo.Abogados";

	



$tdataabogados[".showAddInPopup"] = false;

$tdataabogados[".showEditInPopup"] = false;

$tdataabogados[".showViewInPopup"] = false;

$tdataabogados[".listAjax"] = false;
//	temporary
//$tdataabogados[".listAjax"] = false;

	$tdataabogados[".audit"] = true;

	$tdataabogados[".locking"] = false;


$pages = $tdataabogados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataabogados[".edit"] = true;
	$tdataabogados[".afterEditAction"] = 1;
	$tdataabogados[".closePopupAfterEdit"] = 1;
	$tdataabogados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataabogados[".add"] = true;
$tdataabogados[".afterAddAction"] = 1;
$tdataabogados[".closePopupAfterAdd"] = 1;
$tdataabogados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataabogados[".list"] = true;
}



$tdataabogados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataabogados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataabogados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataabogados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataabogados[".printFriendly"] = true;
}



$tdataabogados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataabogados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataabogados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataabogados[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdataabogados[".ajaxCodeSnippetAdded"] = false;

$tdataabogados[".buttonsAdded"] = false;

$tdataabogados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataabogados[".isUseTimeForSearch"] = false;


$tdataabogados[".badgeColor"] = "DAA520";


$tdataabogados[".allSearchFields"] = array();
$tdataabogados[".filterFields"] = array();
$tdataabogados[".requiredSearchFields"] = array();

$tdataabogados[".googleLikeFields"] = array();
$tdataabogados[".googleLikeFields"][] = "AbogadoId";
$tdataabogados[".googleLikeFields"][] = "Abogado";
$tdataabogados[".googleLikeFields"][] = "Documento";
$tdataabogados[".googleLikeFields"][] = "Tarjeta";
$tdataabogados[".googleLikeFields"][] = "Direccion";
$tdataabogados[".googleLikeFields"][] = "Telefonos";
$tdataabogados[".googleLikeFields"][] = "Celular";
$tdataabogados[".googleLikeFields"][] = "Email";
$tdataabogados[".googleLikeFields"][] = "SeccionalId";
$tdataabogados[".googleLikeFields"][] = "Masculino";
$tdataabogados[".googleLikeFields"][] = "Activo";
$tdataabogados[".googleLikeFields"][] = "Despacho";
$tdataabogados[".googleLikeFields"][] = "Firma";
$tdataabogados[".googleLikeFields"][] = "Codificador";



$tdataabogados[".tableType"] = "list";

$tdataabogados[".printerPageOrientation"] = 0;
$tdataabogados[".nPrinterPageScale"] = 100;

$tdataabogados[".nPrinterSplitRecords"] = 40;

$tdataabogados[".geocodingEnabled"] = false;




$tdataabogados[".isDisplayLoading"] = true;

$tdataabogados[".isResizeColumns"] = true;





$tdataabogados[".pageSize"] = 20;

$tdataabogados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataabogados[".strOrderBy"] = $tstrOrderBy;

$tdataabogados[".orderindexes"] = array();


$tdataabogados[".sqlHead"] = "SELECT AbogadoId,  	Abogado,  	Documento,  	Tarjeta,  	Direccion,  	Telefonos,  	Celular,  	Email,  	SeccionalId,  	Masculino,  	Activo,  	Despacho,  	''as Firma,  	Codificador";
$tdataabogados[".sqlFrom"] = "FROM dbo.Abogados";
$tdataabogados[".sqlWhereExpr"] = "";
$tdataabogados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataabogados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataabogados[".arrGroupsPerPage"] = $arrGPP;

$tdataabogados[".highlightSearchResults"] = true;

$tableKeysabogados = array();
$tableKeysabogados[] = "AbogadoId";
$tdataabogados[".Keys"] = $tableKeysabogados;


$tdataabogados[".hideMobileList"] = array();




//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","AbogadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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


	$tdataabogados["AbogadoId"] = $fdata;
		$tdataabogados[".searchableFields"][] = "AbogadoId";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Abogado");
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


	$tdataabogados["Abogado"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Abogado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

		$fdata["sourceSingle"] = "Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataabogados["Documento"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Documento";
//	Tarjeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tarjeta";
	$fdata["GoodName"] = "Tarjeta";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Tarjeta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tarjeta";

		$fdata["sourceSingle"] = "Tarjeta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tarjeta";

	
	
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


	$tdataabogados["Tarjeta"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Tarjeta";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Direccion");
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


	$tdataabogados["Direccion"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Direccion";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Telefonos");
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


	$tdataabogados["Telefonos"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Telefonos";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Celular";

		$fdata["sourceSingle"] = "Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdataabogados["Celular"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Celular";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Email");
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


	$tdataabogados["Email"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Email";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Seccional";

	

	
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


	$tdataabogados["SeccionalId"] = $fdata;
		$tdataabogados[".searchableFields"][] = "SeccionalId";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Masculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Masculino";

		$fdata["sourceSingle"] = "Masculino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masculino";

	
	
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


	$tdataabogados["Masculino"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Masculino";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Activo");
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


	$tdataabogados["Activo"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Activo";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Despacho");
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataabogados["Despacho"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Despacho";
//	Firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Firma";
	$fdata["GoodName"] = "Firma";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Firma");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Firma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdataabogados["Firma"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Firma";
//	Codificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Codificador";
	$fdata["GoodName"] = "Codificador";
	$fdata["ownerTable"] = "dbo.Abogados";
	$fdata["Label"] = GetFieldLabel("dbo_Abogados","Codificador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codificador";

		$fdata["sourceSingle"] = "Codificador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codificador";

	
	
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


	$tdataabogados["Codificador"] = $fdata;
		$tdataabogados[".searchableFields"][] = "Codificador";


$tables_data["dbo.Abogados"]=&$tdataabogados;
$field_labels["dbo_Abogados"] = &$fieldLabelsabogados;
$fieldToolTips["dbo_Abogados"] = &$fieldToolTipsabogados;
$placeHolders["dbo_Abogados"] = &$placeHoldersabogados;
$page_titles["dbo_Abogados"] = &$pageTitlesabogados;


changeTextControlsToDate( "dbo.Abogados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Abogados"] = array();
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


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Reasignaciones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Reasignaciones";
		$detailsParam["dOriginalTable"] = "dbo.Reasignaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reasignaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Reasignaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Minjusticia
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//	dbo.ProcesosReasignar
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ProcesosReasignar";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesosreasignar";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ProcesosReasignar");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Abogados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["masterKeys"][]="AbogadoId";

				$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Abogados"][$dIndex]["detailKeys"][]="AbogadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Abogados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Abogados"][0] = $masterParams;
				$masterTablesData["dbo.Abogados"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Abogados"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Abogados"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Abogados"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_abogados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AbogadoId,  	Abogado,  	Documento,  	Tarjeta,  	Direccion,  	Telefonos,  	Celular,  	Email,  	SeccionalId,  	Masculino,  	Activo,  	Despacho,  	''as Firma,  	Codificador";
$proto0["m_strFrom"] = "FROM dbo.Abogados";
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
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto6["m_sql"] = "AbogadoId";
$proto6["m_srcTableName"] = "dbo.Abogados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto8["m_sql"] = "Abogado";
$proto8["m_srcTableName"] = "dbo.Abogados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto10["m_sql"] = "Documento";
$proto10["m_srcTableName"] = "dbo.Abogados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarjeta",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto12["m_sql"] = "Tarjeta";
$proto12["m_srcTableName"] = "dbo.Abogados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto14["m_sql"] = "Direccion";
$proto14["m_srcTableName"] = "dbo.Abogados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto16["m_sql"] = "Telefonos";
$proto16["m_srcTableName"] = "dbo.Abogados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto18["m_sql"] = "Celular";
$proto18["m_srcTableName"] = "dbo.Abogados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "dbo.Abogados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto22["m_sql"] = "SeccionalId";
$proto22["m_srcTableName"] = "dbo.Abogados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Masculino",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto24["m_sql"] = "Masculino";
$proto24["m_srcTableName"] = "dbo.Abogados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto26["m_sql"] = "Activo";
$proto26["m_srcTableName"] = "dbo.Abogados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto28["m_sql"] = "Despacho";
$proto28["m_srcTableName"] = "dbo.Abogados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto30["m_sql"] = "''";
$proto30["m_srcTableName"] = "dbo.Abogados";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "Firma";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Codificador",
	"m_strTable" => "dbo.Abogados",
	"m_srcTableName" => "dbo.Abogados"
));

$proto32["m_sql"] = "Codificador";
$proto32["m_srcTableName"] = "dbo.Abogados";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Abogados";
$proto35["m_srcTableName"] = "dbo.Abogados";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "AbogadoId";
$proto35["m_columns"][] = "Abogado";
$proto35["m_columns"][] = "Documento";
$proto35["m_columns"][] = "Tarjeta";
$proto35["m_columns"][] = "Direccion";
$proto35["m_columns"][] = "Telefonos";
$proto35["m_columns"][] = "Celular";
$proto35["m_columns"][] = "Email";
$proto35["m_columns"][] = "SeccionalId";
$proto35["m_columns"][] = "Masculino";
$proto35["m_columns"][] = "Activo";
$proto35["m_columns"][] = "Despacho";
$proto35["m_columns"][] = "Codificador";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "dbo.Abogados";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "dbo.Abogados";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Abogados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_abogados = createSqlQuery_abogados();


	
		;

														

$tdataabogados[".sqlquery"] = $queryData_abogados;



$tdataabogados[".hasEvents"] = false;

?>