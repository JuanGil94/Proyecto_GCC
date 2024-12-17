<?php
$tdatabienesinmuebles = array();
$tdatabienesinmuebles[".searchableFields"] = array();
$tdatabienesinmuebles[".ShortName"] = "bienesinmuebles";
$tdatabienesinmuebles[".OwnerID"] = "";
$tdatabienesinmuebles[".OriginalTable"] = "dbo.Propiedades";


$tdatabienesinmuebles[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabienesinmuebles[".originalPagesByType"] = $tdatabienesinmuebles[".pagesByType"];
$tdatabienesinmuebles[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabienesinmuebles[".originalPages"] = $tdatabienesinmuebles[".pages"];
$tdatabienesinmuebles[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabienesinmuebles[".originalDefaultPages"] = $tdatabienesinmuebles[".defaultPages"];

//	field labels
$fieldLabelsbienesinmuebles = array();
$fieldToolTipsbienesinmuebles = array();
$pageTitlesbienesinmuebles = array();
$placeHoldersbienesinmuebles = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbienesinmuebles["Spanish"] = array();
	$fieldToolTipsbienesinmuebles["Spanish"] = array();
	$placeHoldersbienesinmuebles["Spanish"] = array();
	$pageTitlesbienesinmuebles["Spanish"] = array();
	$fieldLabelsbienesinmuebles["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsbienesinmuebles["Spanish"]["Observaciones"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["Observaciones"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "Descripción del Bien Inmueble";
	$fieldToolTipsbienesinmuebles["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["Matr_cula_Inmobiliaria"] = "Matrícula Inmobiliaria";
	$fieldToolTipsbienesinmuebles["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["Aval_o"] = "Avalúo";
	$fieldToolTipsbienesinmuebles["Spanish"]["Aval_o"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["Aval_o"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["Direcci_n"] = "Dirección";
	$fieldToolTipsbienesinmuebles["Spanish"]["Direcci_n"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["Direcci_n"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsbienesinmuebles["Spanish"]["SancionadoId"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["SancionadoId"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["CiudadId"] = "Ciudad";
	$fieldToolTipsbienesinmuebles["Spanish"]["CiudadId"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["CiudadId"] = "";
	$fieldLabelsbienesinmuebles["Spanish"]["PropiedadId"] = "Propiedad Id";
	$fieldToolTipsbienesinmuebles["Spanish"]["PropiedadId"] = "";
	$placeHoldersbienesinmuebles["Spanish"]["PropiedadId"] = "";
	if (count($fieldToolTipsbienesinmuebles["Spanish"]))
		$tdatabienesinmuebles[".isUseToolTips"] = true;
}


	$tdatabienesinmuebles[".NCSearch"] = true;



$tdatabienesinmuebles[".shortTableName"] = "bienesinmuebles";
$tdatabienesinmuebles[".nSecOptions"] = 0;

$tdatabienesinmuebles[".mainTableOwnerID"] = "";
$tdatabienesinmuebles[".entityType"] = 1;
$tdatabienesinmuebles[".connId"] = "GCC_at_S00001_CCAD01";


$tdatabienesinmuebles[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdatabienesinmuebles[".showAddInPopup"] = false;

$tdatabienesinmuebles[".showEditInPopup"] = false;

$tdatabienesinmuebles[".showViewInPopup"] = false;

$tdatabienesinmuebles[".listAjax"] = false;
//	temporary
//$tdatabienesinmuebles[".listAjax"] = false;

	$tdatabienesinmuebles[".audit"] = false;

	$tdatabienesinmuebles[".locking"] = false;


$pages = $tdatabienesinmuebles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabienesinmuebles[".edit"] = true;
	$tdatabienesinmuebles[".afterEditAction"] = 1;
	$tdatabienesinmuebles[".closePopupAfterEdit"] = 1;
	$tdatabienesinmuebles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabienesinmuebles[".add"] = true;
$tdatabienesinmuebles[".afterAddAction"] = 1;
$tdatabienesinmuebles[".closePopupAfterAdd"] = 1;
$tdatabienesinmuebles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabienesinmuebles[".list"] = true;
}



$tdatabienesinmuebles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabienesinmuebles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabienesinmuebles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabienesinmuebles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabienesinmuebles[".printFriendly"] = true;
}



$tdatabienesinmuebles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabienesinmuebles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabienesinmuebles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabienesinmuebles[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									
		
																																																																															

$tdatabienesinmuebles[".ajaxCodeSnippetAdded"] = false;

$tdatabienesinmuebles[".buttonsAdded"] = true;

$tdatabienesinmuebles[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabienesinmuebles[".isUseTimeForSearch"] = false;


$tdatabienesinmuebles[".badgeColor"] = "1e90ff";


$tdatabienesinmuebles[".allSearchFields"] = array();
$tdatabienesinmuebles[".filterFields"] = array();
$tdatabienesinmuebles[".requiredSearchFields"] = array();

$tdatabienesinmuebles[".googleLikeFields"] = array();
$tdatabienesinmuebles[".googleLikeFields"][] = "PropiedadId";
$tdatabienesinmuebles[".googleLikeFields"][] = "SancionadoId";
$tdatabienesinmuebles[".googleLikeFields"][] = "Descripción del Bien Inmueble";
$tdatabienesinmuebles[".googleLikeFields"][] = "Matrícula Inmobiliaria";
$tdatabienesinmuebles[".googleLikeFields"][] = "Avalúo";
$tdatabienesinmuebles[".googleLikeFields"][] = "CiudadId";
$tdatabienesinmuebles[".googleLikeFields"][] = "Dirección";
$tdatabienesinmuebles[".googleLikeFields"][] = "Observaciones";



$tdatabienesinmuebles[".tableType"] = "list";

$tdatabienesinmuebles[".printerPageOrientation"] = 0;
$tdatabienesinmuebles[".nPrinterPageScale"] = 100;

$tdatabienesinmuebles[".nPrinterSplitRecords"] = 40;

$tdatabienesinmuebles[".geocodingEnabled"] = false;




$tdatabienesinmuebles[".isDisplayLoading"] = true;

$tdatabienesinmuebles[".isResizeColumns"] = true;





$tdatabienesinmuebles[".pageSize"] = 20;

$tdatabienesinmuebles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabienesinmuebles[".strOrderBy"] = $tstrOrderBy;

$tdatabienesinmuebles[".orderindexes"] = array();


$tdatabienesinmuebles[".sqlHead"] = "select dbo.Propiedades.PropiedadId,  dbo.Propiedades.SancionadoId,  dbo.Propiedades.Propiedad AS [Descripción del Bien Inmueble],  dbo.Propiedades.Matricula AS [Matrícula Inmobiliaria],  FORMAT(dbo.Propiedades.Avaluo, 'C2', 'es-CO')  AS [Avalúo],  C.CiudadId,  dbo.Propiedades.Direccion AS [Dirección],  dbo.Propiedades.Observaciones AS Observaciones";
$tdatabienesinmuebles[".sqlFrom"] = "FROM dbo.Propiedades  INNER JOIN dbo.Sancionados AS S ON dbo.Propiedades.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON dbo.Propiedades.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$tdatabienesinmuebles[".sqlWhereExpr"] = "(dbo.Propiedades.TipoPropiedad =2)";
$tdatabienesinmuebles[".sqlTail"] = "";

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
$tdatabienesinmuebles[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatabienesinmuebles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabienesinmuebles[".arrGroupsPerPage"] = $arrGPP;

$tdatabienesinmuebles[".highlightSearchResults"] = true;

$tableKeysbienesinmuebles = array();
$tableKeysbienesinmuebles[] = "PropiedadId";
$tdatabienesinmuebles[".Keys"] = $tableKeysbienesinmuebles;


$tdatabienesinmuebles[".hideMobileList"] = array();




//	PropiedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PropiedadId";
	$fdata["GoodName"] = "PropiedadId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","PropiedadId");
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


	$tdatabienesinmuebles["PropiedadId"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "PropiedadId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.SancionadoId";

	
	
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


	$tdatabienesinmuebles["SancionadoId"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "SancionadoId";
//	Descripción del Bien Inmueble
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripción del Bien Inmueble";
	$fdata["GoodName"] = "Descripci_n_del_Bien_Inmueble";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","Descripci_n_del_Bien_Inmueble");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.Propiedad";

	
	
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


	$tdatabienesinmuebles["Descripción del Bien Inmueble"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "Descripción del Bien Inmueble";
//	Matrícula Inmobiliaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Matrícula Inmobiliaria";
	$fdata["GoodName"] = "Matr_cula_Inmobiliaria";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","Matr_cula_Inmobiliaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matricula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.Matricula";

	
	
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


	$tdatabienesinmuebles["Matrícula Inmobiliaria"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "Matrícula Inmobiliaria";
//	Avalúo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Avalúo";
	$fdata["GoodName"] = "Aval_o";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","Aval_o");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Avaluo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(dbo.Propiedades.Avaluo, 'C2', 'es-CO')";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		$eventsData = array();
	$eventsData[] = array( "name" => "Avaluo_Mascara", "type" => "click" );
	$vdata["fieldViewEvents"] = $eventsData;

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
	$eventsData[] = array( "name" => "Avaluo_Mascara", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




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


	$tdatabienesinmuebles["Avalúo"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "Avalúo";
//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","CiudadId");
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


	$tdatabienesinmuebles["CiudadId"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "CiudadId";
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","Direcci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.Direccion";

	
	
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


	$tdatabienesinmuebles["Dirección"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "Dirección";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("BienesInmuebles","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dbo.Propiedades.Observaciones";

	
	
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


	$tdatabienesinmuebles["Observaciones"] = $fdata;
		$tdatabienesinmuebles[".searchableFields"][] = "Observaciones";


$tables_data["BienesInmuebles"]=&$tdatabienesinmuebles;
$field_labels["BienesInmuebles"] = &$fieldLabelsbienesinmuebles;
$fieldToolTips["BienesInmuebles"] = &$fieldToolTipsbienesinmuebles;
$placeHolders["BienesInmuebles"] = &$placeHoldersbienesinmuebles;
$page_titles["BienesInmuebles"] = &$pageTitlesbienesinmuebles;


changeTextControlsToDate( "BienesInmuebles" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BienesInmuebles"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BienesInmuebles"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BienesInmuebles"][0] = $masterParams;
				$masterTablesData["BienesInmuebles"][0]["masterKeys"] = array();
	$masterTablesData["BienesInmuebles"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["BienesInmuebles"][0]["detailKeys"] = array();
	$masterTablesData["BienesInmuebles"][0]["detailKeys"][]="SancionadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Solidarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Solidarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "solidarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BienesInmuebles"][1] = $masterParams;
				$masterTablesData["BienesInmuebles"][1]["masterKeys"] = array();
	$masterTablesData["BienesInmuebles"][1]["masterKeys"][]="SancionadoId";
				$masterTablesData["BienesInmuebles"][1]["detailKeys"] = array();
	$masterTablesData["BienesInmuebles"][1]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bienesinmuebles()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "dbo.Propiedades.PropiedadId,  dbo.Propiedades.SancionadoId,  dbo.Propiedades.Propiedad AS [Descripción del Bien Inmueble],  dbo.Propiedades.Matricula AS [Matrícula Inmobiliaria],  FORMAT(dbo.Propiedades.Avaluo, 'C2', 'es-CO')  AS [Avalúo],  C.CiudadId,  dbo.Propiedades.Direccion AS [Dirección],  dbo.Propiedades.Observaciones AS Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Propiedades  INNER JOIN dbo.Sancionados AS S ON dbo.Propiedades.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON dbo.Propiedades.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto0["m_strWhere"] = "(dbo.Propiedades.TipoPropiedad =2)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "dbo.Propiedades.TipoPropiedad =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2";
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
	"m_srcTableName" => "BienesInmuebles"
));

$proto6["m_sql"] = "dbo.Propiedades.PropiedadId";
$proto6["m_srcTableName"] = "BienesInmuebles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto8["m_sql"] = "dbo.Propiedades.SancionadoId";
$proto8["m_srcTableName"] = "BienesInmuebles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto10["m_sql"] = "dbo.Propiedades.Propiedad";
$proto10["m_srcTableName"] = "BienesInmuebles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Descripción del Bien Inmueble";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto12["m_sql"] = "dbo.Propiedades.Matricula";
$proto12["m_srcTableName"] = "BienesInmuebles";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Matrícula Inmobiliaria";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "dbo.Propiedades.Avaluo"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C2'"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "FORMAT(dbo.Propiedades.Avaluo, 'C2', 'es-CO')";
$proto14["m_srcTableName"] = "BienesInmuebles";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Avalúo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "BienesInmuebles"
));

$proto19["m_sql"] = "C.CiudadId";
$proto19["m_srcTableName"] = "BienesInmuebles";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto21["m_sql"] = "dbo.Propiedades.Direccion";
$proto21["m_srcTableName"] = "BienesInmuebles";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Dirección";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "BienesInmuebles"
));

$proto23["m_sql"] = "dbo.Propiedades.Observaciones";
$proto23["m_srcTableName"] = "BienesInmuebles";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Observaciones";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "dbo.Propiedades";
$proto26["m_srcTableName"] = "BienesInmuebles";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "PropiedadId";
$proto26["m_columns"][] = "SancionadoId";
$proto26["m_columns"][] = "TipoPropiedad";
$proto26["m_columns"][] = "Propiedad";
$proto26["m_columns"][] = "Matricula";
$proto26["m_columns"][] = "Avaluo";
$proto26["m_columns"][] = "CiudadId";
$proto26["m_columns"][] = "Direccion";
$proto26["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "dbo.Propiedades";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "BienesInmuebles";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_INNERJOIN";
			$proto30=array();
$proto30["m_strName"] = "dbo.Sancionados";
$proto30["m_srcTableName"] = "BienesInmuebles";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "SancionadoId";
$proto30["m_columns"][] = "Sancionado";
$proto30["m_columns"][] = "TipoDocumentoId";
$proto30["m_columns"][] = "Documento";
$proto30["m_columns"][] = "Email";
$proto30["m_columns"][] = "Celular";
$proto30["m_columns"][] = "Masculino";
$proto30["m_columns"][] = "Observaciones";
$proto30["m_columns"][] = "Fallecimiento";
$proto30["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "INNER JOIN dbo.Sancionados AS S ON dbo.Propiedades.SancionadoId = S.SancionadoId";
$proto29["m_alias"] = "S";
$proto29["m_srcTableName"] = "BienesInmuebles";
$proto31=array();
$proto31["m_sql"] = "S.SancionadoId = dbo.Propiedades.SancionadoId";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "BienesInmuebles"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= dbo.Propiedades.SancionadoId";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "dbo.Ciudades";
$proto34["m_srcTableName"] = "BienesInmuebles";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "CiudadId";
$proto34["m_columns"][] = "Codigo";
$proto34["m_columns"][] = "Ciudad";
$proto34["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "INNER JOIN dbo.Ciudades AS C ON dbo.Propiedades.CiudadId = C.CiudadId";
$proto33["m_alias"] = "C";
$proto33["m_srcTableName"] = "BienesInmuebles";
$proto35=array();
$proto35["m_sql"] = "C.CiudadId = dbo.Propiedades.CiudadId";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "BienesInmuebles"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= dbo.Propiedades.CiudadId";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "dbo.Departamentos";
$proto38["m_srcTableName"] = "BienesInmuebles";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "DepartamentoId";
$proto38["m_columns"][] = "Codigo";
$proto38["m_columns"][] = "Departamento";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto37["m_alias"] = "D";
$proto37["m_srcTableName"] = "BienesInmuebles";
$proto39=array();
$proto39["m_sql"] = "D.DepartamentoId = C.DepartamentoId";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "D",
	"m_srcTableName" => "BienesInmuebles"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= C.DepartamentoId";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BienesInmuebles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bienesinmuebles = createSqlQuery_bienesinmuebles();


	
		;

								

$tdatabienesinmuebles[".sqlquery"] = $queryData_bienesinmuebles;



include_once(getabspath("include/bienesinmuebles_events.php"));
$tdatabienesinmuebles[".hasEvents"] = true;

?>