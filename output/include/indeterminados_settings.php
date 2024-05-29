<?php
$tdataindeterminados = array();
$tdataindeterminados[".searchableFields"] = array();
$tdataindeterminados[".ShortName"] = "indeterminados";
$tdataindeterminados[".OwnerID"] = "";
$tdataindeterminados[".OriginalTable"] = "dbo.Indeterminados";


$tdataindeterminados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataindeterminados[".originalPagesByType"] = $tdataindeterminados[".pagesByType"];
$tdataindeterminados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataindeterminados[".originalPages"] = $tdataindeterminados[".pages"];
$tdataindeterminados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataindeterminados[".originalDefaultPages"] = $tdataindeterminados[".defaultPages"];

//	field labels
$fieldLabelsindeterminados = array();
$fieldToolTipsindeterminados = array();
$pageTitlesindeterminados = array();
$placeHoldersindeterminados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsindeterminados["Spanish"] = array();
	$fieldToolTipsindeterminados["Spanish"] = array();
	$placeHoldersindeterminados["Spanish"] = array();
	$pageTitlesindeterminados["Spanish"] = array();
	$fieldLabelsindeterminados["Spanish"]["IndeterminadoId"] = "Indeterminado Id";
	$fieldToolTipsindeterminados["Spanish"]["IndeterminadoId"] = "";
	$placeHoldersindeterminados["Spanish"]["IndeterminadoId"] = "";
	$fieldLabelsindeterminados["Spanish"]["FechaRegistro"] = "Fecha Registro";
	$fieldToolTipsindeterminados["Spanish"]["FechaRegistro"] = "";
	$placeHoldersindeterminados["Spanish"]["FechaRegistro"] = "";
	$fieldLabelsindeterminados["Spanish"]["FechaRecaudo"] = "Fecha Recaudo";
	$fieldToolTipsindeterminados["Spanish"]["FechaRecaudo"] = "";
	$placeHoldersindeterminados["Spanish"]["FechaRecaudo"] = "";
	$fieldLabelsindeterminados["Spanish"]["NumeroConsecutivo"] = "Numero Consecutivo";
	$fieldToolTipsindeterminados["Spanish"]["NumeroConsecutivo"] = "";
	$placeHoldersindeterminados["Spanish"]["NumeroConsecutivo"] = "";
	$fieldLabelsindeterminados["Spanish"]["NumeroExpediente"] = "Numero Expediente";
	$fieldToolTipsindeterminados["Spanish"]["NumeroExpediente"] = "";
	$placeHoldersindeterminados["Spanish"]["NumeroExpediente"] = "";
	$fieldLabelsindeterminados["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsindeterminados["Spanish"]["Sancionado"] = "";
	$placeHoldersindeterminados["Spanish"]["Sancionado"] = "";
	$fieldLabelsindeterminados["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsindeterminados["Spanish"]["Documento"] = "";
	$placeHoldersindeterminados["Spanish"]["Documento"] = "";
	$fieldLabelsindeterminados["Spanish"]["Valor"] = "Valor";
	$fieldToolTipsindeterminados["Spanish"]["Valor"] = "";
	$placeHoldersindeterminados["Spanish"]["Valor"] = "";
	$fieldLabelsindeterminados["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsindeterminados["Spanish"]["UserId"] = "";
	$placeHoldersindeterminados["Spanish"]["UserId"] = "";
	$fieldLabelsindeterminados["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsindeterminados["Spanish"]["SeccionalId"] = "";
	$placeHoldersindeterminados["Spanish"]["SeccionalId"] = "";
	$fieldLabelsindeterminados["Spanish"]["Demandante"] = "Demandante";
	$fieldToolTipsindeterminados["Spanish"]["Demandante"] = "";
	$placeHoldersindeterminados["Spanish"]["Demandante"] = "";
	$fieldLabelsindeterminados["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsindeterminados["Spanish"]["Observaciones"] = "";
	$placeHoldersindeterminados["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipsindeterminados["Spanish"]))
		$tdataindeterminados[".isUseToolTips"] = true;
}


	$tdataindeterminados[".NCSearch"] = true;



$tdataindeterminados[".shortTableName"] = "indeterminados";
$tdataindeterminados[".nSecOptions"] = 0;

$tdataindeterminados[".mainTableOwnerID"] = "";
$tdataindeterminados[".entityType"] = 0;
$tdataindeterminados[".connId"] = "GCC_at_S00001_CCAD01";


$tdataindeterminados[".strOriginalTableName"] = "dbo.Indeterminados";

	



$tdataindeterminados[".showAddInPopup"] = false;

$tdataindeterminados[".showEditInPopup"] = false;

$tdataindeterminados[".showViewInPopup"] = false;

$tdataindeterminados[".listAjax"] = false;
//	temporary
//$tdataindeterminados[".listAjax"] = false;

	$tdataindeterminados[".audit"] = false;

	$tdataindeterminados[".locking"] = false;


$pages = $tdataindeterminados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindeterminados[".edit"] = true;
	$tdataindeterminados[".afterEditAction"] = 1;
	$tdataindeterminados[".closePopupAfterEdit"] = 1;
	$tdataindeterminados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindeterminados[".add"] = true;
$tdataindeterminados[".afterAddAction"] = 1;
$tdataindeterminados[".closePopupAfterAdd"] = 1;
$tdataindeterminados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindeterminados[".list"] = true;
}



$tdataindeterminados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindeterminados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindeterminados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindeterminados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindeterminados[".printFriendly"] = true;
}



$tdataindeterminados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindeterminados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindeterminados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindeterminados[".isUseAjaxSuggest"] = true;



																																																																																																																																																

$tdataindeterminados[".ajaxCodeSnippetAdded"] = false;

$tdataindeterminados[".buttonsAdded"] = false;

$tdataindeterminados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindeterminados[".isUseTimeForSearch"] = false;


$tdataindeterminados[".badgeColor"] = "4169E1";


$tdataindeterminados[".allSearchFields"] = array();
$tdataindeterminados[".filterFields"] = array();
$tdataindeterminados[".requiredSearchFields"] = array();

$tdataindeterminados[".googleLikeFields"] = array();
$tdataindeterminados[".googleLikeFields"][] = "IndeterminadoId";
$tdataindeterminados[".googleLikeFields"][] = "FechaRegistro";
$tdataindeterminados[".googleLikeFields"][] = "FechaRecaudo";
$tdataindeterminados[".googleLikeFields"][] = "NumeroConsecutivo";
$tdataindeterminados[".googleLikeFields"][] = "NumeroExpediente";
$tdataindeterminados[".googleLikeFields"][] = "Sancionado";
$tdataindeterminados[".googleLikeFields"][] = "Documento";
$tdataindeterminados[".googleLikeFields"][] = "Valor";
$tdataindeterminados[".googleLikeFields"][] = "UserId";
$tdataindeterminados[".googleLikeFields"][] = "SeccionalId";
$tdataindeterminados[".googleLikeFields"][] = "Demandante";
$tdataindeterminados[".googleLikeFields"][] = "Observaciones";



$tdataindeterminados[".tableType"] = "list";

$tdataindeterminados[".printerPageOrientation"] = 0;
$tdataindeterminados[".nPrinterPageScale"] = 100;

$tdataindeterminados[".nPrinterSplitRecords"] = 40;

$tdataindeterminados[".geocodingEnabled"] = false;





$tdataindeterminados[".isResizeColumns"] = true;





$tdataindeterminados[".pageSize"] = 20;

$tdataindeterminados[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY FechaRegistro DESC";
$tdataindeterminados[".strOrderBy"] = $tstrOrderBy;

$tdataindeterminados[".orderindexes"] = array();
	$tdataindeterminados[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "FechaRegistro");



$tdataindeterminados[".sqlHead"] = "SELECT IndeterminadoId,  FechaRegistro,  FechaRecaudo,  NumeroConsecutivo,  NumeroExpediente,  Sancionado,  Documento,  Valor,  UserId,  SeccionalId,  Demandante,  Observaciones";
$tdataindeterminados[".sqlFrom"] = "FROM dbo.Indeterminados";
$tdataindeterminados[".sqlWhereExpr"] = "";
$tdataindeterminados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindeterminados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindeterminados[".arrGroupsPerPage"] = $arrGPP;

$tdataindeterminados[".highlightSearchResults"] = true;

$tableKeysindeterminados = array();
$tableKeysindeterminados[] = "IndeterminadoId";
$tdataindeterminados[".Keys"] = $tableKeysindeterminados;


$tdataindeterminados[".hideMobileList"] = array();




//	IndeterminadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IndeterminadoId";
	$fdata["GoodName"] = "IndeterminadoId";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","IndeterminadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IndeterminadoId";

		$fdata["sourceSingle"] = "IndeterminadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndeterminadoId";

	
	
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


	$tdataindeterminados["IndeterminadoId"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "IndeterminadoId";
//	FechaRegistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FechaRegistro";
	$fdata["GoodName"] = "FechaRegistro";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","FechaRegistro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FechaRegistro";

		$fdata["sourceSingle"] = "FechaRegistro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaRegistro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataindeterminados["FechaRegistro"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "FechaRegistro";
//	FechaRecaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaRecaudo";
	$fdata["GoodName"] = "FechaRecaudo";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","FechaRecaudo");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "FechaRecaudo";

		$fdata["sourceSingle"] = "FechaRecaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaRecaudo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataindeterminados["FechaRecaudo"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "FechaRecaudo";
//	NumeroConsecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NumeroConsecutivo";
	$fdata["GoodName"] = "NumeroConsecutivo";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","NumeroConsecutivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NumeroConsecutivo";

		$fdata["sourceSingle"] = "NumeroConsecutivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumeroConsecutivo";

	
	
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


	$tdataindeterminados["NumeroConsecutivo"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "NumeroConsecutivo";
//	NumeroExpediente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NumeroExpediente";
	$fdata["GoodName"] = "NumeroExpediente";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","NumeroExpediente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NumeroExpediente";

		$fdata["sourceSingle"] = "NumeroExpediente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumeroExpediente";

	
	
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


	$tdataindeterminados["NumeroExpediente"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "NumeroExpediente";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","Sancionado");
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


	$tdataindeterminados["Sancionado"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "Sancionado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","Documento");
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


	$tdataindeterminados["Documento"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "Documento";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","Valor");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	$tdataindeterminados["Valor"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "Valor";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","UserId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserId";

		$fdata["sourceSingle"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
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
	$edata["LookupTable"] = "dbo.UserProfile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "UserId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "UserName";

	

	
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


	$tdataindeterminados["UserId"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "UserId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","SeccionalId");
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
	$edata["LinkFieldType"] = 0;
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


	$tdataindeterminados["SeccionalId"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "SeccionalId";
//	Demandante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Demandante";
	$fdata["GoodName"] = "Demandante";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","Demandante");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Demandante";

		$fdata["sourceSingle"] = "Demandante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Demandante";

	
	
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


	$tdataindeterminados["Demandante"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "Demandante";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Indeterminados";
	$fdata["Label"] = GetFieldLabel("dbo_Indeterminados","Observaciones");
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


	$tdataindeterminados["Observaciones"] = $fdata;
		$tdataindeterminados[".searchableFields"][] = "Observaciones";


$tables_data["dbo.Indeterminados"]=&$tdataindeterminados;
$field_labels["dbo_Indeterminados"] = &$fieldLabelsindeterminados;
$fieldToolTips["dbo_Indeterminados"] = &$fieldToolTipsindeterminados;
$placeHolders["dbo_Indeterminados"] = &$placeHoldersindeterminados;
$page_titles["dbo_Indeterminados"] = &$pageTitlesindeterminados;


changeTextControlsToDate( "dbo.Indeterminados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Indeterminados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Indeterminados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Indeterminados"][0] = $masterParams;
				$masterTablesData["dbo.Indeterminados"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Indeterminados"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Indeterminados"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Indeterminados"][0]["detailKeys"][]="SeccionalId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_indeterminados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IndeterminadoId,  FechaRegistro,  FechaRecaudo,  NumeroConsecutivo,  NumeroExpediente,  Sancionado,  Documento,  Valor,  UserId,  SeccionalId,  Demandante,  Observaciones";
$proto0["m_strFrom"] = "FROM dbo.Indeterminados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY FechaRegistro DESC";
	
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
	"m_strName" => "IndeterminadoId",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto6["m_sql"] = "IndeterminadoId";
$proto6["m_srcTableName"] = "dbo.Indeterminados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaRegistro",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto8["m_sql"] = "FechaRegistro";
$proto8["m_srcTableName"] = "dbo.Indeterminados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaRecaudo",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto10["m_sql"] = "FechaRecaudo";
$proto10["m_srcTableName"] = "dbo.Indeterminados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroConsecutivo",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto12["m_sql"] = "NumeroConsecutivo";
$proto12["m_srcTableName"] = "dbo.Indeterminados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroExpediente",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto14["m_sql"] = "NumeroExpediente";
$proto14["m_srcTableName"] = "dbo.Indeterminados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto16["m_sql"] = "Sancionado";
$proto16["m_srcTableName"] = "dbo.Indeterminados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto18["m_sql"] = "Documento";
$proto18["m_srcTableName"] = "dbo.Indeterminados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto20["m_sql"] = "Valor";
$proto20["m_srcTableName"] = "dbo.Indeterminados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto22["m_sql"] = "UserId";
$proto22["m_srcTableName"] = "dbo.Indeterminados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto24["m_sql"] = "SeccionalId";
$proto24["m_srcTableName"] = "dbo.Indeterminados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Demandante",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto26["m_sql"] = "Demandante";
$proto26["m_srcTableName"] = "dbo.Indeterminados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto28["m_sql"] = "Observaciones";
$proto28["m_srcTableName"] = "dbo.Indeterminados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Indeterminados";
$proto31["m_srcTableName"] = "dbo.Indeterminados";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "IndeterminadoId";
$proto31["m_columns"][] = "FechaRegistro";
$proto31["m_columns"][] = "FechaRecaudo";
$proto31["m_columns"][] = "NumeroConsecutivo";
$proto31["m_columns"][] = "NumeroExpediente";
$proto31["m_columns"][] = "Sancionado";
$proto31["m_columns"][] = "Documento";
$proto31["m_columns"][] = "Valor";
$proto31["m_columns"][] = "UserId";
$proto31["m_columns"][] = "SeccionalId";
$proto31["m_columns"][] = "Demandante";
$proto31["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.Indeterminados";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.Indeterminados";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "FechaRegistro",
	"m_strTable" => "dbo.Indeterminados",
	"m_srcTableName" => "dbo.Indeterminados"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Indeterminados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indeterminados = createSqlQuery_indeterminados();


	
		;

												

$tdataindeterminados[".sqlquery"] = $queryData_indeterminados;



$tdataindeterminados[".hasEvents"] = false;

?>