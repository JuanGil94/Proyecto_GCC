<?php
$tdatadespachos_juzgados = array();
$tdatadespachos_juzgados[".searchableFields"] = array();
$tdatadespachos_juzgados[".ShortName"] = "despachos_juzgados";
$tdatadespachos_juzgados[".OwnerID"] = "";
$tdatadespachos_juzgados[".OriginalTable"] = "dbo.Despachos";


$tdatadespachos_juzgados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadespachos_juzgados[".originalPagesByType"] = $tdatadespachos_juzgados[".pagesByType"];
$tdatadespachos_juzgados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadespachos_juzgados[".originalPages"] = $tdatadespachos_juzgados[".pages"];
$tdatadespachos_juzgados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadespachos_juzgados[".originalDefaultPages"] = $tdatadespachos_juzgados[".defaultPages"];

//	field labels
$fieldLabelsdespachos_juzgados = array();
$fieldToolTipsdespachos_juzgados = array();
$pageTitlesdespachos_juzgados = array();
$placeHoldersdespachos_juzgados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespachos_juzgados["Spanish"] = array();
	$fieldToolTipsdespachos_juzgados["Spanish"] = array();
	$placeHoldersdespachos_juzgados["Spanish"] = array();
	$pageTitlesdespachos_juzgados["Spanish"] = array();
	$fieldLabelsdespachos_juzgados["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsdespachos_juzgados["Spanish"]["DespachoId"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["DespachoId"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Codigo"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Codigo"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Activo"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Activo"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Juez"] = "Juez";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Juez"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Juez"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Correo"] = "Correo Electronico";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Correo"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Correo"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Telefonos"] = "Telefonos";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Telefonos"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Telefonos"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Direccion"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Direccion"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Despacho_Juzgado"] = "Despacho/Juzgado";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Despacho_Juzgado"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Despacho_Juzgado"] = "";
	$fieldLabelsdespachos_juzgados["Spanish"]["Ciudad_Municipio"] = "Ciudad/Municipio";
	$fieldToolTipsdespachos_juzgados["Spanish"]["Ciudad_Municipio"] = "";
	$placeHoldersdespachos_juzgados["Spanish"]["Ciudad_Municipio"] = "";
	if (count($fieldToolTipsdespachos_juzgados["Spanish"]))
		$tdatadespachos_juzgados[".isUseToolTips"] = true;
}


	$tdatadespachos_juzgados[".NCSearch"] = true;



$tdatadespachos_juzgados[".shortTableName"] = "despachos_juzgados";
$tdatadespachos_juzgados[".nSecOptions"] = 0;

$tdatadespachos_juzgados[".mainTableOwnerID"] = "";
$tdatadespachos_juzgados[".entityType"] = 1;
$tdatadespachos_juzgados[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadespachos_juzgados[".strOriginalTableName"] = "dbo.Despachos";

	



$tdatadespachos_juzgados[".showAddInPopup"] = false;

$tdatadespachos_juzgados[".showEditInPopup"] = false;

$tdatadespachos_juzgados[".showViewInPopup"] = false;

$tdatadespachos_juzgados[".listAjax"] = false;
//	temporary
//$tdatadespachos_juzgados[".listAjax"] = false;

	$tdatadespachos_juzgados[".audit"] = true;

	$tdatadespachos_juzgados[".locking"] = false;


$pages = $tdatadespachos_juzgados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespachos_juzgados[".edit"] = true;
	$tdatadespachos_juzgados[".afterEditAction"] = 1;
	$tdatadespachos_juzgados[".closePopupAfterEdit"] = 1;
	$tdatadespachos_juzgados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespachos_juzgados[".add"] = true;
$tdatadespachos_juzgados[".afterAddAction"] = 1;
$tdatadespachos_juzgados[".closePopupAfterAdd"] = 1;
$tdatadespachos_juzgados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespachos_juzgados[".list"] = true;
}



$tdatadespachos_juzgados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespachos_juzgados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespachos_juzgados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespachos_juzgados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespachos_juzgados[".printFriendly"] = true;
}



$tdatadespachos_juzgados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespachos_juzgados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespachos_juzgados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespachos_juzgados[".isUseAjaxSuggest"] = true;



															

$tdatadespachos_juzgados[".ajaxCodeSnippetAdded"] = false;

$tdatadespachos_juzgados[".buttonsAdded"] = false;

$tdatadespachos_juzgados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespachos_juzgados[".isUseTimeForSearch"] = false;


$tdatadespachos_juzgados[".badgeColor"] = "6DA5C8";


$tdatadespachos_juzgados[".allSearchFields"] = array();
$tdatadespachos_juzgados[".filterFields"] = array();
$tdatadespachos_juzgados[".requiredSearchFields"] = array();

$tdatadespachos_juzgados[".googleLikeFields"] = array();
$tdatadespachos_juzgados[".googleLikeFields"][] = "DespachoId";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Codigo";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Despacho/Juzgado";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Ciudad/Municipio";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Activo";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Juez";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Correo";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Telefonos";
$tdatadespachos_juzgados[".googleLikeFields"][] = "Direccion";



$tdatadespachos_juzgados[".tableType"] = "list";

$tdatadespachos_juzgados[".printerPageOrientation"] = 0;
$tdatadespachos_juzgados[".nPrinterPageScale"] = 100;

$tdatadespachos_juzgados[".nPrinterSplitRecords"] = 40;

$tdatadespachos_juzgados[".geocodingEnabled"] = false;










$tdatadespachos_juzgados[".pageSize"] = 20;

$tdatadespachos_juzgados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadespachos_juzgados[".strOrderBy"] = $tstrOrderBy;

$tdatadespachos_juzgados[".orderindexes"] = array();


$tdatadespachos_juzgados[".sqlHead"] = "SELECT D.DespachoId        ,D.Codigo  AS 'Codigo'        ,D.Despacho AS 'Despacho/Juzgado'        ,DE.Codigo+C.Codigo+ ' - ' + DE.Departamento+ ' ('+ C.Ciudad + ')' AS 'Ciudad/Municipio'        ,D.Activo        ,D.Juez        ,D.Correo        ,D.Telefonos        ,D.Direccion";
$tdatadespachos_juzgados[".sqlFrom"] = "FROM Despachos D  LEFT JOIN Ciudades C ON C.CiudadId = D.CiudadId  LEFT JOIN Departamentos DE ON DE.DepartamentoId = C.DepartamentoId";
$tdatadespachos_juzgados[".sqlWhereExpr"] = "";
$tdatadespachos_juzgados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespachos_juzgados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespachos_juzgados[".arrGroupsPerPage"] = $arrGPP;

$tdatadespachos_juzgados[".highlightSearchResults"] = true;

$tableKeysdespachos_juzgados = array();
$tableKeysdespachos_juzgados[] = "DespachoId";
$tdatadespachos_juzgados[".Keys"] = $tableKeysdespachos_juzgados;


$tdatadespachos_juzgados[".hideMobileList"] = array();




//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","DespachoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.DespachoId";

	
	
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


	$tdatadespachos_juzgados["DespachoId"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "DespachoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatadespachos_juzgados["Codigo"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Codigo";
//	Despacho/Juzgado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Despacho/Juzgado";
	$fdata["GoodName"] = "Despacho_Juzgado";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Despacho_Juzgado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Despacho";

	
	
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


	$tdatadespachos_juzgados["Despacho/Juzgado"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Despacho/Juzgado";
//	Ciudad/Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ciudad/Municipio";
	$fdata["GoodName"] = "Ciudad_Municipio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Ciudad_Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad/Municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DE.Codigo+C.Codigo+ ' - ' + DE.Departamento+ ' ('+ C.Ciudad + ')'";

	
	
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


	$tdatadespachos_juzgados["Ciudad/Municipio"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Ciudad/Municipio";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Activo";

	
	
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


	$tdatadespachos_juzgados["Activo"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Activo";
//	Juez
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Juez";
	$fdata["GoodName"] = "Juez";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Juez");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Juez";

		$fdata["sourceSingle"] = "Juez";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Juez";

	
	
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


	$tdatadespachos_juzgados["Juez"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Juez";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Correo";

		$fdata["sourceSingle"] = "Correo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Correo";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatadespachos_juzgados["Correo"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Correo";
//	Telefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Telefonos";
	$fdata["GoodName"] = "Telefonos";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Telefonos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefonos";

		$fdata["sourceSingle"] = "Telefonos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Telefonos";

	
	
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


	$tdatadespachos_juzgados["Telefonos"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Telefonos";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "dbo.Despachos";
	$fdata["Label"] = GetFieldLabel("dbo_Despachos_Juzgados","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D.Direccion";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatadespachos_juzgados["Direccion"] = $fdata;
		$tdatadespachos_juzgados[".searchableFields"][] = "Direccion";


$tables_data["dbo.Despachos/Juzgados"]=&$tdatadespachos_juzgados;
$field_labels["dbo_Despachos_Juzgados"] = &$fieldLabelsdespachos_juzgados;
$fieldToolTips["dbo_Despachos_Juzgados"] = &$fieldToolTipsdespachos_juzgados;
$placeHolders["dbo_Despachos_Juzgados"] = &$placeHoldersdespachos_juzgados;
$page_titles["dbo_Despachos_Juzgados"] = &$pageTitlesdespachos_juzgados;


changeTextControlsToDate( "dbo.Despachos/Juzgados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Despachos/Juzgados"] = array();
//	dbo.Minjusticia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"][]="DespachoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"][]="DespachoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"][]="DespachoId";
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


		
	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["masterKeys"][]="DespachoId";

				$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Despachos/Juzgados"][$dIndex]["detailKeys"][]="DespachoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Despachos/Juzgados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despachos_juzgados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "D.DespachoId        ,D.Codigo  AS 'Codigo'        ,D.Despacho AS 'Despacho/Juzgado'        ,DE.Codigo+C.Codigo+ ' - ' + DE.Departamento+ ' ('+ C.Ciudad + ')' AS 'Ciudad/Municipio'        ,D.Activo        ,D.Juez        ,D.Correo        ,D.Telefonos        ,D.Direccion";
$proto0["m_strFrom"] = "FROM Despachos D  LEFT JOIN Ciudades C ON C.CiudadId = D.CiudadId  LEFT JOIN Departamentos DE ON DE.DepartamentoId = C.DepartamentoId";
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
	"m_strName" => "DespachoId",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto6["m_sql"] = "D.DespachoId";
$proto6["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto8["m_sql"] = "D.Codigo";
$proto8["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Codigo";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto10["m_sql"] = "D.Despacho";
$proto10["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Despacho/Juzgado";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "DE.Codigo+C.Codigo+ ' - ' + DE.Departamento+ ' ('+ C.Ciudad + ')'"
));

$proto12["m_sql"] = "DE.Codigo+C.Codigo+ ' - ' + DE.Departamento+ ' ('+ C.Ciudad + ')'";
$proto12["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Ciudad/Municipio";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto14["m_sql"] = "D.Activo";
$proto14["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Juez",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto16["m_sql"] = "D.Juez";
$proto16["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto18["m_sql"] = "D.Correo";
$proto18["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefonos",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto20["m_sql"] = "D.Telefonos";
$proto20["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "D",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto22["m_sql"] = "D.Direccion";
$proto22["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Despachos";
$proto25["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "DespachoId";
$proto25["m_columns"][] = "Codigo";
$proto25["m_columns"][] = "Despacho";
$proto25["m_columns"][] = "CiudadId";
$proto25["m_columns"][] = "Especialidad";
$proto25["m_columns"][] = "Subespecialidad";
$proto25["m_columns"][] = "Activo";
$proto25["m_columns"][] = "Juez";
$proto25["m_columns"][] = "Correo";
$proto25["m_columns"][] = "Telefonos";
$proto25["m_columns"][] = "Direccion";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "Despachos D";
$proto24["m_alias"] = "D";
$proto24["m_srcTableName"] = "dbo.Despachos/Juzgados";
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
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.Ciudades";
$proto29["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "CiudadId";
$proto29["m_columns"][] = "Codigo";
$proto29["m_columns"][] = "Ciudad";
$proto29["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT JOIN Ciudades C ON C.CiudadId = D.CiudadId";
$proto28["m_alias"] = "C";
$proto28["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto30=array();
$proto30["m_sql"] = "C.CiudadId = D.CiudadId";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CiudadId",
	"m_strTable" => "C",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= D.CiudadId";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.Departamentos";
$proto33["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "DepartamentoId";
$proto33["m_columns"][] = "Codigo";
$proto33["m_columns"][] = "Departamento";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT JOIN Departamentos DE ON DE.DepartamentoId = C.DepartamentoId";
$proto32["m_alias"] = "DE";
$proto32["m_srcTableName"] = "dbo.Despachos/Juzgados";
$proto34=array();
$proto34["m_sql"] = "DE.DepartamentoId = C.DepartamentoId";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "DE",
	"m_srcTableName" => "dbo.Despachos/Juzgados"
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
$proto0["m_srcTableName"]="dbo.Despachos/Juzgados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despachos_juzgados = createSqlQuery_despachos_juzgados();


	
		;

									

$tdatadespachos_juzgados[".sqlquery"] = $queryData_despachos_juzgados;



$tdatadespachos_juzgados[".hasEvents"] = false;

?>