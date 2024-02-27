<?php
$tdatapropiedades1 = array();
$tdatapropiedades1[".searchableFields"] = array();
$tdatapropiedades1[".ShortName"] = "propiedades1";
$tdatapropiedades1[".OwnerID"] = "";
$tdatapropiedades1[".OriginalTable"] = "dbo.Propiedades";


$tdatapropiedades1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapropiedades1[".originalPagesByType"] = $tdatapropiedades1[".pagesByType"];
$tdatapropiedades1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapropiedades1[".originalPages"] = $tdatapropiedades1[".pages"];
$tdatapropiedades1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapropiedades1[".originalDefaultPages"] = $tdatapropiedades1[".defaultPages"];

//	field labels
$fieldLabelspropiedades1 = array();
$fieldToolTipspropiedades1 = array();
$pageTitlespropiedades1 = array();
$placeHolderspropiedades1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspropiedades1["Spanish"] = array();
	$fieldToolTipspropiedades1["Spanish"] = array();
	$placeHolderspropiedades1["Spanish"] = array();
	$pageTitlespropiedades1["Spanish"] = array();
	$fieldLabelspropiedades1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspropiedades1["Spanish"]["Observaciones"] = "";
	$placeHolderspropiedades1["Spanish"]["Observaciones"] = "";
	$fieldLabelspropiedades1["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "Descripción del Bien Inmueble";
	$fieldToolTipspropiedades1["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$placeHolderspropiedades1["Spanish"]["Descripci_n_del_Bien_Inmueble"] = "";
	$fieldLabelspropiedades1["Spanish"]["Matr_cula_Inmobiliaria"] = "Matrícula Inmobiliaria";
	$fieldToolTipspropiedades1["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$placeHolderspropiedades1["Spanish"]["Matr_cula_Inmobiliaria"] = "";
	$fieldLabelspropiedades1["Spanish"]["Aval_o"] = "Avalúo";
	$fieldToolTipspropiedades1["Spanish"]["Aval_o"] = "";
	$placeHolderspropiedades1["Spanish"]["Aval_o"] = "";
	$fieldLabelspropiedades1["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipspropiedades1["Spanish"]["Ciudad"] = "";
	$placeHolderspropiedades1["Spanish"]["Ciudad"] = "";
	$fieldLabelspropiedades1["Spanish"]["Direcci_n"] = "Dirección";
	$fieldToolTipspropiedades1["Spanish"]["Direcci_n"] = "";
	$placeHolderspropiedades1["Spanish"]["Direcci_n"] = "";
	$fieldLabelspropiedades1["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipspropiedades1["Spanish"]["SancionadoId"] = "";
	$placeHolderspropiedades1["Spanish"]["SancionadoId"] = "";
	$pageTitlespropiedades1["Spanish"]["list"] = "Bienes Inmuebles";
	if (count($fieldToolTipspropiedades1["Spanish"]))
		$tdatapropiedades1[".isUseToolTips"] = true;
}


	$tdatapropiedades1[".NCSearch"] = true;



$tdatapropiedades1[".shortTableName"] = "propiedades1";
$tdatapropiedades1[".nSecOptions"] = 0;

$tdatapropiedades1[".mainTableOwnerID"] = "";
$tdatapropiedades1[".entityType"] = 1;
$tdatapropiedades1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapropiedades1[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdatapropiedades1[".showAddInPopup"] = false;

$tdatapropiedades1[".showEditInPopup"] = false;

$tdatapropiedades1[".showViewInPopup"] = false;

$tdatapropiedades1[".listAjax"] = false;
//	temporary
//$tdatapropiedades1[".listAjax"] = false;

	$tdatapropiedades1[".audit"] = false;

	$tdatapropiedades1[".locking"] = false;


$pages = $tdatapropiedades1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapropiedades1[".edit"] = true;
	$tdatapropiedades1[".afterEditAction"] = 1;
	$tdatapropiedades1[".closePopupAfterEdit"] = 1;
	$tdatapropiedades1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapropiedades1[".add"] = true;
$tdatapropiedades1[".afterAddAction"] = 1;
$tdatapropiedades1[".closePopupAfterAdd"] = 1;
$tdatapropiedades1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapropiedades1[".list"] = true;
}



$tdatapropiedades1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapropiedades1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapropiedades1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapropiedades1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapropiedades1[".printFriendly"] = true;
}



$tdatapropiedades1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapropiedades1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapropiedades1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapropiedades1[".isUseAjaxSuggest"] = true;



																																																			

$tdatapropiedades1[".ajaxCodeSnippetAdded"] = false;

$tdatapropiedades1[".buttonsAdded"] = false;

$tdatapropiedades1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapropiedades1[".isUseTimeForSearch"] = false;


$tdatapropiedades1[".badgeColor"] = "00C2C5";


$tdatapropiedades1[".allSearchFields"] = array();
$tdatapropiedades1[".filterFields"] = array();
$tdatapropiedades1[".requiredSearchFields"] = array();

$tdatapropiedades1[".googleLikeFields"] = array();
$tdatapropiedades1[".googleLikeFields"][] = "SancionadoId";
$tdatapropiedades1[".googleLikeFields"][] = "Descripción del Bien Inmueble";
$tdatapropiedades1[".googleLikeFields"][] = "Matrícula Inmobiliaria";
$tdatapropiedades1[".googleLikeFields"][] = "Avalúo";
$tdatapropiedades1[".googleLikeFields"][] = "Ciudad";
$tdatapropiedades1[".googleLikeFields"][] = "Dirección";
$tdatapropiedades1[".googleLikeFields"][] = "Observaciones";



$tdatapropiedades1[".tableType"] = "list";

$tdatapropiedades1[".printerPageOrientation"] = 0;
$tdatapropiedades1[".nPrinterPageScale"] = 100;

$tdatapropiedades1[".nPrinterSplitRecords"] = 40;

$tdatapropiedades1[".geocodingEnabled"] = false;





$tdatapropiedades1[".isResizeColumns"] = true;





$tdatapropiedades1[".pageSize"] = 20;

$tdatapropiedades1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapropiedades1[".strOrderBy"] = $tstrOrderBy;

$tdatapropiedades1[".orderindexes"] = array();


$tdatapropiedades1[".sqlHead"] = "select P.SancionadoId,  P.Propiedad AS [Descripción del Bien Inmueble],  P.Matricula AS [Matrícula Inmobiliaria],  P.Avaluo AS [Avalúo],  C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')' AS Ciudad,  P.Direccion AS [Dirección],  P.Observaciones AS Observaciones";
$tdatapropiedades1[".sqlFrom"] = "FROM dbo.Propiedades AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$tdatapropiedades1[".sqlWhereExpr"] = "(P.TipoPropiedad =1)";
$tdatapropiedades1[".sqlTail"] = "";

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
$tdatapropiedades1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapropiedades1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapropiedades1[".arrGroupsPerPage"] = $arrGPP;

$tdatapropiedades1[".highlightSearchResults"] = true;

$tableKeyspropiedades1 = array();
$tdatapropiedades1[".Keys"] = $tableKeyspropiedades1;


$tdatapropiedades1[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","SancionadoId");
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


	$tdatapropiedades1["SancionadoId"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "SancionadoId";
//	Descripción del Bien Inmueble
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripción del Bien Inmueble";
	$fdata["GoodName"] = "Descripci_n_del_Bien_Inmueble";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Descripci_n_del_Bien_Inmueble");
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


	$tdatapropiedades1["Descripción del Bien Inmueble"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Descripción del Bien Inmueble";
//	Matrícula Inmobiliaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Matrícula Inmobiliaria";
	$fdata["GoodName"] = "Matr_cula_Inmobiliaria";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Matr_cula_Inmobiliaria");
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


	$tdatapropiedades1["Matrícula Inmobiliaria"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Matrícula Inmobiliaria";
//	Avalúo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Avalúo";
	$fdata["GoodName"] = "Aval_o";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Aval_o");
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


	$tdatapropiedades1["Avalúo"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Avalúo";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Ciudad");
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


	$tdatapropiedades1["Ciudad"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Ciudad";
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Direcci_n");
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


	$tdatapropiedades1["Dirección"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Dirección";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades1","Observaciones");
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


	$tdatapropiedades1["Observaciones"] = $fdata;
		$tdatapropiedades1[".searchableFields"][] = "Observaciones";


$tables_data["dbo.Propiedades1"]=&$tdatapropiedades1;
$field_labels["dbo_Propiedades1"] = &$fieldLabelspropiedades1;
$fieldToolTips["dbo_Propiedades1"] = &$fieldToolTipspropiedades1;
$placeHolders["dbo_Propiedades1"] = &$placeHolderspropiedades1;
$page_titles["dbo_Propiedades1"] = &$pageTitlespropiedades1;


changeTextControlsToDate( "dbo.Propiedades1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Propiedades1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Propiedades1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_propiedades1()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "P.SancionadoId,  P.Propiedad AS [Descripción del Bien Inmueble],  P.Matricula AS [Matrícula Inmobiliaria],  P.Avaluo AS [Avalúo],  C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')' AS Ciudad,  P.Direccion AS [Dirección],  P.Observaciones AS Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Propiedades AS P  INNER JOIN dbo.Sancionados AS S ON P.SancionadoId = S.SancionadoId  INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId  INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto0["m_strWhere"] = "(P.TipoPropiedad =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "P.TipoPropiedad =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto6["m_sql"] = "P.SancionadoId";
$proto6["m_srcTableName"] = "dbo.Propiedades1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Propiedad",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto8["m_sql"] = "P.Propiedad";
$proto8["m_srcTableName"] = "dbo.Propiedades1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Descripción del Bien Inmueble";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Matricula",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto10["m_sql"] = "P.Matricula";
$proto10["m_srcTableName"] = "dbo.Propiedades1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Matrícula Inmobiliaria";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Avaluo",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto12["m_sql"] = "P.Avaluo";
$proto12["m_srcTableName"] = "dbo.Propiedades1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Avalúo";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')'"
));

$proto14["m_sql"] = "C.Codigo +D.Codigo + ' - ' + C.Ciudad+'('+D.Departamento+')'";
$proto14["m_srcTableName"] = "dbo.Propiedades1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Ciudad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto16["m_sql"] = "P.Direccion";
$proto16["m_srcTableName"] = "dbo.Propiedades1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Dirección";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Propiedades1"
));

$proto18["m_sql"] = "P.Observaciones";
$proto18["m_srcTableName"] = "dbo.Propiedades1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Observaciones";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Propiedades";
$proto21["m_srcTableName"] = "dbo.Propiedades1";
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
$proto20["m_srcTableName"] = "dbo.Propiedades1";
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
$proto25["m_srcTableName"] = "dbo.Propiedades1";
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
$proto24["m_srcTableName"] = "dbo.Propiedades1";
$proto26=array();
$proto26["m_sql"] = "S.SancionadoId = P.SancionadoId";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "S",
	"m_srcTableName" => "dbo.Propiedades1"
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
$proto29["m_srcTableName"] = "dbo.Propiedades1";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "CiudadId";
$proto29["m_columns"][] = "Codigo";
$proto29["m_columns"][] = "Ciudad";
$proto29["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN dbo.Ciudades AS C ON P.CiudadId = C.CiudadId";
$proto28["m_alias"] = "C";
$proto28["m_srcTableName"] = "dbo.Propiedades1";
$proto30=array();
$proto30["m_sql"] = "C.CiudadId = P.CiudadId";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Propiedades1"
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
$proto33["m_srcTableName"] = "dbo.Propiedades1";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "DepartamentoId";
$proto33["m_columns"][] = "Codigo";
$proto33["m_columns"][] = "Departamento";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN dbo.Departamentos AS D ON C.DepartamentoId = D.DepartamentoId";
$proto32["m_alias"] = "D";
$proto32["m_srcTableName"] = "dbo.Propiedades1";
$proto34=array();
$proto34["m_sql"] = "D.DepartamentoId = C.DepartamentoId";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Propiedades1"
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
$proto0["m_srcTableName"]="dbo.Propiedades1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_propiedades1 = createSqlQuery_propiedades1();


	
		;

							

$tdatapropiedades1[".sqlquery"] = $queryData_propiedades1;



$tdatapropiedades1[".hasEvents"] = false;

?>