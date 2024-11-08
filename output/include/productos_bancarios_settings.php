<?php
$tdataproductos_bancarios = array();
$tdataproductos_bancarios[".searchableFields"] = array();
$tdataproductos_bancarios[".ShortName"] = "productos_bancarios";
$tdataproductos_bancarios[".OwnerID"] = "";
$tdataproductos_bancarios[".OriginalTable"] = "dbo.Propiedades";


$tdataproductos_bancarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproductos_bancarios[".originalPagesByType"] = $tdataproductos_bancarios[".pagesByType"];
$tdataproductos_bancarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproductos_bancarios[".originalPages"] = $tdataproductos_bancarios[".pages"];
$tdataproductos_bancarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproductos_bancarios[".originalDefaultPages"] = $tdataproductos_bancarios[".defaultPages"];

//	field labels
$fieldLabelsproductos_bancarios = array();
$fieldToolTipsproductos_bancarios = array();
$pageTitlesproductos_bancarios = array();
$placeHoldersproductos_bancarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproductos_bancarios["Spanish"] = array();
	$fieldToolTipsproductos_bancarios["Spanish"] = array();
	$placeHoldersproductos_bancarios["Spanish"] = array();
	$pageTitlesproductos_bancarios["Spanish"] = array();
	$fieldLabelsproductos_bancarios["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsproductos_bancarios["Spanish"]["Observaciones"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["Observaciones"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "Descripción del Efectivo";
	$fieldToolTipsproductos_bancarios["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["Matr_cula_Inmobiliaria"] = "No. Cuenta";
	$fieldToolTipsproductos_bancarios["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["Aval_o"] = "Valor/Saldo";
	$fieldToolTipsproductos_bancarios["Spanish"]["Aval_o"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["Aval_o"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["Direcci_n"] = "Banco";
	$fieldToolTipsproductos_bancarios["Spanish"]["Direcci_n"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["Direcci_n"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsproductos_bancarios["Spanish"]["SancionadoId"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["SancionadoId"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["CiudadId"] = "Ciudad";
	$fieldToolTipsproductos_bancarios["Spanish"]["CiudadId"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["CiudadId"] = "";
	$fieldLabelsproductos_bancarios["Spanish"]["PropiedadId"] = "Propiedad Id";
	$fieldToolTipsproductos_bancarios["Spanish"]["PropiedadId"] = "";
	$placeHoldersproductos_bancarios["Spanish"]["PropiedadId"] = "";
	if (count($fieldToolTipsproductos_bancarios["Spanish"]))
		$tdataproductos_bancarios[".isUseToolTips"] = true;
}


	$tdataproductos_bancarios[".NCSearch"] = true;



$tdataproductos_bancarios[".shortTableName"] = "productos_bancarios";
$tdataproductos_bancarios[".nSecOptions"] = 0;

$tdataproductos_bancarios[".mainTableOwnerID"] = "";
$tdataproductos_bancarios[".entityType"] = 1;
$tdataproductos_bancarios[".connId"] = "GCC_at_S00001_CCAD01";


$tdataproductos_bancarios[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdataproductos_bancarios[".showAddInPopup"] = false;

$tdataproductos_bancarios[".showEditInPopup"] = false;

$tdataproductos_bancarios[".showViewInPopup"] = false;

$tdataproductos_bancarios[".listAjax"] = false;
//	temporary
//$tdataproductos_bancarios[".listAjax"] = false;

	$tdataproductos_bancarios[".audit"] = false;

	$tdataproductos_bancarios[".locking"] = false;


$pages = $tdataproductos_bancarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproductos_bancarios[".edit"] = true;
	$tdataproductos_bancarios[".afterEditAction"] = 1;
	$tdataproductos_bancarios[".closePopupAfterEdit"] = 1;
	$tdataproductos_bancarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproductos_bancarios[".add"] = true;
$tdataproductos_bancarios[".afterAddAction"] = 1;
$tdataproductos_bancarios[".closePopupAfterAdd"] = 1;
$tdataproductos_bancarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproductos_bancarios[".list"] = true;
}



$tdataproductos_bancarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproductos_bancarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproductos_bancarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproductos_bancarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproductos_bancarios[".printFriendly"] = true;
}



$tdataproductos_bancarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproductos_bancarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproductos_bancarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproductos_bancarios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataproductos_bancarios[".ajaxCodeSnippetAdded"] = false;

$tdataproductos_bancarios[".buttonsAdded"] = false;

$tdataproductos_bancarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproductos_bancarios[".isUseTimeForSearch"] = false;


$tdataproductos_bancarios[".badgeColor"] = "8FBC8B";


$tdataproductos_bancarios[".allSearchFields"] = array();
$tdataproductos_bancarios[".filterFields"] = array();
$tdataproductos_bancarios[".requiredSearchFields"] = array();

$tdataproductos_bancarios[".googleLikeFields"] = array();
$tdataproductos_bancarios[".googleLikeFields"][] = "PropiedadId";
$tdataproductos_bancarios[".googleLikeFields"][] = "SancionadoId";
$tdataproductos_bancarios[".googleLikeFields"][] = "Descripción del Bien Inmueble";
$tdataproductos_bancarios[".googleLikeFields"][] = "Matrícula Inmobiliaria";
$tdataproductos_bancarios[".googleLikeFields"][] = "Avalúo";
$tdataproductos_bancarios[".googleLikeFields"][] = "CiudadId";
$tdataproductos_bancarios[".googleLikeFields"][] = "Dirección";
$tdataproductos_bancarios[".googleLikeFields"][] = "Observaciones";



$tdataproductos_bancarios[".tableType"] = "list";

$tdataproductos_bancarios[".printerPageOrientation"] = 0;
$tdataproductos_bancarios[".nPrinterPageScale"] = 100;

$tdataproductos_bancarios[".nPrinterSplitRecords"] = 40;

$tdataproductos_bancarios[".geocodingEnabled"] = false;





$tdataproductos_bancarios[".isResizeColumns"] = true;





$tdataproductos_bancarios[".pageSize"] = 20;

$tdataproductos_bancarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproductos_bancarios[".strOrderBy"] = $tstrOrderBy;

$tdataproductos_bancarios[".orderindexes"] = array();


$tdataproductos_bancarios[".sqlHead"] = "select dbo.Propiedades.PropiedadId,  Propiedades.SancionadoId,  Propiedades.Propiedad AS [Descripción del Bien Inmueble],  Propiedades.Matricula AS [Matrícula Inmobiliaria],  Propiedades.Avaluo AS [Avalúo],  C.CiudadId,  Propiedades.Direccion AS [Dirección],  Propiedades.Observaciones AS Observaciones";
$tdataproductos_bancarios[".sqlFrom"] = "FROM dbo.Propiedades  INNER JOIN dbo.Sancionados AS S ON Propiedades.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON Propiedades.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$tdataproductos_bancarios[".sqlWhereExpr"] = "(Propiedades.TipoPropiedad =3)";
$tdataproductos_bancarios[".sqlTail"] = "";

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
$tdataproductos_bancarios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproductos_bancarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproductos_bancarios[".arrGroupsPerPage"] = $arrGPP;

$tdataproductos_bancarios[".highlightSearchResults"] = true;

$tableKeysproductos_bancarios = array();
$tableKeysproductos_bancarios[] = "PropiedadId";
$tdataproductos_bancarios[".Keys"] = $tableKeysproductos_bancarios;


$tdataproductos_bancarios[".hideMobileList"] = array();




//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","PropiedadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PropiedadId";

		$fdata["sourceSingle"] = "PropiedadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.PropiedadId";

	
	
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


	$tdataproductos_bancarios["PropiedadId"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "PropiedadId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.SancionadoId";

	
	
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


	$tdataproductos_bancarios["SancionadoId"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "SancionadoId";
//	Descripción del Bien Inmueble
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripción del Bien Inmueble";
	$fdata["GoodName"] = "Descripci_n_del_Bien_Inmueble";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","Descripci_n_del_Bien_Inmueble");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.Propiedad";

	
	
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


	$tdataproductos_bancarios["Descripción del Bien Inmueble"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "Descripción del Bien Inmueble";
//	Matrícula Inmobiliaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Matrícula Inmobiliaria";
	$fdata["GoodName"] = "Matr_cula_Inmobiliaria";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","Matr_cula_Inmobiliaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matricula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.Matricula";

	
	
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


	$tdataproductos_bancarios["Matrícula Inmobiliaria"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "Matrícula Inmobiliaria";
//	Avalúo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Avalúo";
	$fdata["GoodName"] = "Aval_o";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","Aval_o");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Avaluo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.Avaluo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataproductos_bancarios["Avalúo"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "Avalúo";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","CiudadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.CiudadId";

	
	
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataproductos_bancarios["CiudadId"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "CiudadId";
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","Direcci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.Direccion";

	
	
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


	$tdataproductos_bancarios["Dirección"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "Dirección";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("Productos_Bancarios","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propiedades.Observaciones";

	
	
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


	$tdataproductos_bancarios["Observaciones"] = $fdata;
		$tdataproductos_bancarios[".searchableFields"][] = "Observaciones";


$tables_data["Productos Bancarios"]=&$tdataproductos_bancarios;
$field_labels["Productos_Bancarios"] = &$fieldLabelsproductos_bancarios;
$fieldToolTips["Productos_Bancarios"] = &$fieldToolTipsproductos_bancarios;
$placeHolders["Productos_Bancarios"] = &$placeHoldersproductos_bancarios;
$page_titles["Productos_Bancarios"] = &$pageTitlesproductos_bancarios;


changeTextControlsToDate( "Productos Bancarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Productos Bancarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Productos Bancarios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Productos Bancarios"][0] = $masterParams;
				$masterTablesData["Productos Bancarios"][0]["masterKeys"] = array();
	$masterTablesData["Productos Bancarios"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["Productos Bancarios"][0]["detailKeys"] = array();
	$masterTablesData["Productos Bancarios"][0]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_productos_bancarios()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "dbo.Propiedades.PropiedadId,  Propiedades.SancionadoId,  Propiedades.Propiedad AS [Descripción del Bien Inmueble],  Propiedades.Matricula AS [Matrícula Inmobiliaria],  Propiedades.Avaluo AS [Avalúo],  C.CiudadId,  Propiedades.Direccion AS [Dirección],  Propiedades.Observaciones AS Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Propiedades  INNER JOIN dbo.Sancionados AS S ON Propiedades.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON Propiedades.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto0["m_strWhere"] = "(Propiedades.TipoPropiedad =3)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Propiedades.TipoPropiedad =3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=3";
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
	"m_srcTableName" => "Productos Bancarios"
));

$proto6["m_sql"] = "dbo.Propiedades.PropiedadId";
$proto6["m_srcTableName"] = "Productos Bancarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto8["m_sql"] = "Propiedades.SancionadoId";
$proto8["m_srcTableName"] = "Productos Bancarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto10["m_sql"] = "Propiedades.Propiedad";
$proto10["m_srcTableName"] = "Productos Bancarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Descripción del Bien Inmueble";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto12["m_sql"] = "Propiedades.Matricula";
$proto12["m_srcTableName"] = "Productos Bancarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Matrícula Inmobiliaria";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Avaluo",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto14["m_sql"] = "Propiedades.Avaluo";
$proto14["m_srcTableName"] = "Productos Bancarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Avalúo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "Productos Bancarios"
));

$proto16["m_sql"] = "C.CiudadId";
$proto16["m_srcTableName"] = "Productos Bancarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto18["m_sql"] = "Propiedades.Direccion";
$proto18["m_srcTableName"] = "Productos Bancarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Dirección";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "Productos Bancarios"
));

$proto20["m_sql"] = "Propiedades.Observaciones";
$proto20["m_srcTableName"] = "Productos Bancarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Observaciones";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.Propiedades";
$proto23["m_srcTableName"] = "Productos Bancarios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "PropiedadId";
$proto23["m_columns"][] = "SancionadoId";
$proto23["m_columns"][] = "TipoPropiedad";
$proto23["m_columns"][] = "Propiedad";
$proto23["m_columns"][] = "Matricula";
$proto23["m_columns"][] = "Avaluo";
$proto23["m_columns"][] = "CiudadId";
$proto23["m_columns"][] = "Direccion";
$proto23["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.Propiedades";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Productos Bancarios";
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
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.Sancionados";
$proto27["m_srcTableName"] = "Productos Bancarios";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "SancionadoId";
$proto27["m_columns"][] = "Sancionado";
$proto27["m_columns"][] = "TipoDocumentoId";
$proto27["m_columns"][] = "Documento";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Celular";
$proto27["m_columns"][] = "Masculino";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Fallecimiento";
$proto27["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN dbo.Sancionados AS S ON Propiedades.SancionadoId = S.SancionadoId";
$proto26["m_alias"] = "S";
$proto26["m_srcTableName"] = "Productos Bancarios";
$proto28=array();
$proto28["m_sql"] = "S.SancionadoId = dbo.Propiedades.SancionadoId";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "Productos Bancarios"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= dbo.Propiedades.SancionadoId";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Ciudades";
$proto31["m_srcTableName"] = "Productos Bancarios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "CiudadId";
$proto31["m_columns"][] = "Codigo";
$proto31["m_columns"][] = "Ciudad";
$proto31["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN dbo.Ciudades AS C ON Propiedades.CiudadId = C.CiudadId";
$proto30["m_alias"] = "C";
$proto30["m_srcTableName"] = "Productos Bancarios";
$proto32=array();
$proto32["m_sql"] = "C.CiudadId = dbo.Propiedades.CiudadId";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "Productos Bancarios"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= dbo.Propiedades.CiudadId";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "dbo.Departamentos";
$proto35["m_srcTableName"] = "Productos Bancarios";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "DepartamentoId";
$proto35["m_columns"][] = "Codigo";
$proto35["m_columns"][] = "Departamento";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto34["m_alias"] = "D";
$proto34["m_srcTableName"] = "Productos Bancarios";
$proto36=array();
$proto36["m_sql"] = "D.DepartamentoId = C.DepartamentoId";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "D",
	"m_srcTableName" => "Productos Bancarios"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= C.DepartamentoId";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Productos Bancarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_productos_bancarios = createSqlQuery_productos_bancarios();


	
		;

								

$tdataproductos_bancarios[".sqlquery"] = $queryData_productos_bancarios;



include_once(getabspath("include/productos_bancarios_events.php"));
$tdataproductos_bancarios[".hasEvents"] = true;

?>