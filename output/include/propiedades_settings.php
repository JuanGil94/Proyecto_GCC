<?php
$tdatapropiedades = array();
$tdatapropiedades[".searchableFields"] = array();
$tdatapropiedades[".ShortName"] = "propiedades";
$tdatapropiedades[".OwnerID"] = "";
$tdatapropiedades[".OriginalTable"] = "dbo.Propiedades";


$tdatapropiedades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapropiedades[".originalPagesByType"] = $tdatapropiedades[".pagesByType"];
$tdatapropiedades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapropiedades[".originalPages"] = $tdatapropiedades[".pages"];
$tdatapropiedades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$fieldLabelspropiedades["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspropiedades["Spanish"]["Observaciones"] = "";
	$placeHolderspropiedades["Spanish"]["Observaciones"] = "";
	$fieldLabelspropiedades["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "Descripción del Bien Inmueble";
	$fieldToolTipspropiedades["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$placeHolderspropiedades["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$fieldLabelspropiedades["Spanish"]["Matr_cula_Inmobiliaria"] = "Matrícula Inmobiliaria";
	$fieldToolTipspropiedades["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$placeHolderspropiedades["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$fieldLabelspropiedades["Spanish"]["Aval_o"] = "Avalúo";
	$fieldToolTipspropiedades["Spanish"]["Aval_o"] = "";
	$placeHolderspropiedades["Spanish"]["Aval_o"] = "";
	$fieldLabelspropiedades["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipspropiedades["Spanish"]["Ciudad"] = "";
	$placeHolderspropiedades["Spanish"]["Ciudad"] = "";
	$fieldLabelspropiedades["Spanish"]["Direcci_n"] = "Dirección";
	$fieldToolTipspropiedades["Spanish"]["Direcci_n"] = "";
	$placeHolderspropiedades["Spanish"]["Direcci_n"] = "";
	$fieldLabelspropiedades["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipspropiedades["Spanish"]["SancionadoId"] = "";
	$placeHolderspropiedades["Spanish"]["SancionadoId"] = "";
	$pageTitlespropiedades["Spanish"]["list"] = "Bienes Muebles";
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

	$tdatapropiedades[".audit"] = false;

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


$tdatapropiedades[".badgeColor"] = "cd853f";


$tdatapropiedades[".allSearchFields"] = array();
$tdatapropiedades[".filterFields"] = array();
$tdatapropiedades[".requiredSearchFields"] = array();

$tdatapropiedades[".googleLikeFields"] = array();
$tdatapropiedades[".googleLikeFields"][] = "SancionadoId";
$tdatapropiedades[".googleLikeFields"][] = "Descripción del Bien Inmueble";
$tdatapropiedades[".googleLikeFields"][] = "Matrícula Inmobiliaria";
$tdatapropiedades[".googleLikeFields"][] = "Avalúo";
$tdatapropiedades[".googleLikeFields"][] = "Ciudad";
$tdatapropiedades[".googleLikeFields"][] = "Dirección";
$tdatapropiedades[".googleLikeFields"][] = "Observaciones";



$tdatapropiedades[".tableType"] = "list";

$tdatapropiedades[".printerPageOrientation"] = 0;
$tdatapropiedades[".nPrinterPageScale"] = 100;

$tdatapropiedades[".nPrinterSplitRecords"] = 40;

$tdatapropiedades[".geocodingEnabled"] = false;





$tdatapropiedades[".isResizeColumns"] = true;





$tdatapropiedades[".pageSize"] = 20;

$tdatapropiedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapropiedades[".strOrderBy"] = $tstrOrderBy;

$tdatapropiedades[".orderindexes"] = array();


$tdatapropiedades[".sqlHead"] = "select P.SancionadoId,  P.Propiedad AS [Descripción del Bien Inmueble],  P.Matricula AS [Matrícula Inmobiliaria],  P.Avaluo AS [Avalúo],  C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')' AS Ciudad,  P.Direccion AS [Dirección],  P.Observaciones AS Observaciones";
$tdatapropiedades[".sqlFrom"] = "FROM dbo.Propiedades AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$tdatapropiedades[".sqlWhereExpr"] = "(P.TipoPropiedad =2)";
$tdatapropiedades[".sqlTail"] = "";

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
$tdatapropiedades[".arrGridTabs"] = $arrGridTabs;









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
$tdatapropiedades[".Keys"] = $tableKeyspropiedades;


$tdatapropiedades[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.SancionadoId";

	
	
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
//	Descripción del Bien Inmueble
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripción del Bien Inmueble";
	$fdata["GoodName"] = "Descripci_n_del_Bien_Inmueble";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Descripci_n_del_Bien_Inmueble");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Propiedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Propiedad";

	
	
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


	$tdatapropiedades["Descripción del Bien Inmueble"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Descripción del Bien Inmueble";
//	Matrícula Inmobiliaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Matrícula Inmobiliaria";
	$fdata["GoodName"] = "Matr_cula_Inmobiliaria";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Matr_cula_Inmobiliaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Matricula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Matricula";

	
	
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


	$tdatapropiedades["Matrícula Inmobiliaria"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Matrícula Inmobiliaria";
//	Avalúo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Avalúo";
	$fdata["GoodName"] = "Aval_o";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Aval_o");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Avaluo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Avaluo";

	
	
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


	$tdatapropiedades["Avalúo"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Avalúo";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')'";

	
	
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


	$tdatapropiedades["Ciudad"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Ciudad";
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Direcci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Direccion";

	
	
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


	$tdatapropiedades["Dirección"] = $fdata;
		$tdatapropiedades[".searchableFields"][] = "Dirección";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.Observaciones";

	
	
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
			$edata["EditParams"].= " maxlength=2147483647";

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



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Sancionados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Sancionados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sancionados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Propiedades"][0] = $masterParams;
				$masterTablesData["dbo.Propiedades"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Propiedades"][0]["masterKeys"][]="SancionadoId";
				$masterTablesData["dbo.Propiedades"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Propiedades"][0]["detailKeys"][]="SancionadoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_propiedades()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "P.SancionadoId,  P.Propiedad AS [Descripción del Bien Inmueble],  P.Matricula AS [Matrícula Inmobiliaria],  P.Avaluo AS [Avalúo],  C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')' AS Ciudad,  P.Direccion AS [Dirección],  P.Observaciones AS Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Propiedades AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto0["m_strWhere"] = "(P.TipoPropiedad =2)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "P.TipoPropiedad =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
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
	"m_strName" => "SancionadoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto6["m_sql"] = "P.SancionadoId";
$proto6["m_srcTableName"] = "dbo.Propiedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto8["m_sql"] = "P.Propiedad";
$proto8["m_srcTableName"] = "dbo.Propiedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Descripción del Bien Inmueble";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto10["m_sql"] = "P.Matricula";
$proto10["m_srcTableName"] = "dbo.Propiedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Matrícula Inmobiliaria";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Avaluo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto12["m_sql"] = "P.Avaluo";
$proto12["m_srcTableName"] = "dbo.Propiedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Avalúo";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')'"
));

$proto14["m_sql"] = "C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')'";
$proto14["m_srcTableName"] = "dbo.Propiedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto16["m_sql"] = "P.Direccion";
$proto16["m_srcTableName"] = "dbo.Propiedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Dirección";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto18["m_sql"] = "P.Observaciones";
$proto18["m_srcTableName"] = "dbo.Propiedades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Observaciones";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Propiedades";
$proto21["m_srcTableName"] = "dbo.Propiedades";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "PropiedadId";
$proto21["m_columns"][] = "SancionadoId";
$proto21["m_columns"][] = "TipoPropiedad";
$proto21["m_columns"][] = "Propiedad";
$proto21["m_columns"][] = "Matricula";
$proto21["m_columns"][] = "Avaluo";
$proto21["m_columns"][] = "CiudadId";
$proto21["m_columns"][] = "Direccion";
$proto21["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.Propiedades AS P";
$proto20["m_alias"] = "P";
$proto20["m_srcTableName"] = "dbo.Propiedades";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Sancionados";
$proto25["m_srcTableName"] = "dbo.Propiedades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "SancionadoId";
$proto25["m_columns"][] = "Sancionado";
$proto25["m_columns"][] = "TipoDocumentoId";
$proto25["m_columns"][] = "Documento";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "Celular";
$proto25["m_columns"][] = "Masculino";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "Fallecimiento";
$proto25["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId";
$proto24["m_alias"] = "S";
$proto24["m_srcTableName"] = "dbo.Propiedades";
$proto26=array();
$proto26["m_sql"] = "S.SancionadoId = P.SancionadoId";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= P.SancionadoId";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Ciudades";
$proto29["m_srcTableName"] = "dbo.Propiedades";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "CiudadId";
$proto29["m_columns"][] = "Codigo";
$proto29["m_columns"][] = "Ciudad";
$proto29["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId";
$proto28["m_alias"] = "C";
$proto28["m_srcTableName"] = "dbo.Propiedades";
$proto30=array();
$proto30["m_sql"] = "C.CiudadId = P.CiudadId";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= P.CiudadId";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.Departamentos";
$proto33["m_srcTableName"] = "dbo.Propiedades";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "DepartamentoId";
$proto33["m_columns"][] = "Codigo";
$proto33["m_columns"][] = "Departamento";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto32["m_alias"] = "D";
$proto32["m_srcTableName"] = "dbo.Propiedades";
$proto34=array();
$proto34["m_sql"] = "D.DepartamentoId = C.DepartamentoId";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Propiedades"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= C.DepartamentoId";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

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