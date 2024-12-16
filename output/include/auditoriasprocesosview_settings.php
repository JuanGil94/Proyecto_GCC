<?php
$tdataauditoriasprocesosview = array();
$tdataauditoriasprocesosview[".searchableFields"] = array();
$tdataauditoriasprocesosview[".ShortName"] = "auditoriasprocesosview";
$tdataauditoriasprocesosview[".OwnerID"] = "";
$tdataauditoriasprocesosview[".OriginalTable"] = "dbo.AuditoriasProcesosView";


$tdataauditoriasprocesosview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataauditoriasprocesosview[".originalPagesByType"] = $tdataauditoriasprocesosview[".pagesByType"];
$tdataauditoriasprocesosview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataauditoriasprocesosview[".originalPages"] = $tdataauditoriasprocesosview[".pages"];
$tdataauditoriasprocesosview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataauditoriasprocesosview[".originalDefaultPages"] = $tdataauditoriasprocesosview[".defaultPages"];

//	field labels
$fieldLabelsauditoriasprocesosview = array();
$fieldToolTipsauditoriasprocesosview = array();
$pageTitlesauditoriasprocesosview = array();
$placeHoldersauditoriasprocesosview = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsauditoriasprocesosview["Spanish"] = array();
	$fieldToolTipsauditoriasprocesosview["Spanish"] = array();
	$placeHoldersauditoriasprocesosview["Spanish"] = array();
	$pageTitlesauditoriasprocesosview["Spanish"] = array();
	$fieldLabelsauditoriasprocesosview["Spanish"]["AuditoriasId"] = "Auditorias Id";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["AuditoriasId"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["AuditoriasId"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["ProcesoId"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["ProcesoId"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Fecha"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Fecha"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Usuario"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Usuario"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Ip"] = "Ip";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Ip"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Ip"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Operaci_n"] = "Operación";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Operaci_n"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Operaci_n"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Tabla"] = "Tabla";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Tabla"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Tabla"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Llave_Primaria"] = "Llave Primaria";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Llave_Primaria"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Llave_Primaria"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Campo"] = "Campo";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Campo"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Campo"] = "";
	$fieldLabelsauditoriasprocesosview["Spanish"]["Datos"] = "Datos";
	$fieldToolTipsauditoriasprocesosview["Spanish"]["Datos"] = "";
	$placeHoldersauditoriasprocesosview["Spanish"]["Datos"] = "";
	$pageTitlesauditoriasprocesosview["Spanish"]["list"] = "Auditorias Old";
	if (count($fieldToolTipsauditoriasprocesosview["Spanish"]))
		$tdataauditoriasprocesosview[".isUseToolTips"] = true;
}


	$tdataauditoriasprocesosview[".NCSearch"] = true;



$tdataauditoriasprocesosview[".shortTableName"] = "auditoriasprocesosview";
$tdataauditoriasprocesosview[".nSecOptions"] = 0;

$tdataauditoriasprocesosview[".mainTableOwnerID"] = "";
$tdataauditoriasprocesosview[".entityType"] = 0;
$tdataauditoriasprocesosview[".connId"] = "GCC_at_S00001_CCAD01";


$tdataauditoriasprocesosview[".strOriginalTableName"] = "dbo.AuditoriasProcesosView";

	



$tdataauditoriasprocesosview[".showAddInPopup"] = false;

$tdataauditoriasprocesosview[".showEditInPopup"] = false;

$tdataauditoriasprocesosview[".showViewInPopup"] = false;

$tdataauditoriasprocesosview[".listAjax"] = false;
//	temporary
//$tdataauditoriasprocesosview[".listAjax"] = false;

	$tdataauditoriasprocesosview[".audit"] = false;

	$tdataauditoriasprocesosview[".locking"] = false;


$pages = $tdataauditoriasprocesosview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataauditoriasprocesosview[".edit"] = true;
	$tdataauditoriasprocesosview[".afterEditAction"] = 1;
	$tdataauditoriasprocesosview[".closePopupAfterEdit"] = 1;
	$tdataauditoriasprocesosview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataauditoriasprocesosview[".add"] = true;
$tdataauditoriasprocesosview[".afterAddAction"] = 1;
$tdataauditoriasprocesosview[".closePopupAfterAdd"] = 1;
$tdataauditoriasprocesosview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataauditoriasprocesosview[".list"] = true;
}



$tdataauditoriasprocesosview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataauditoriasprocesosview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataauditoriasprocesosview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataauditoriasprocesosview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataauditoriasprocesosview[".printFriendly"] = true;
}



$tdataauditoriasprocesosview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataauditoriasprocesosview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataauditoriasprocesosview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataauditoriasprocesosview[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdataauditoriasprocesosview[".ajaxCodeSnippetAdded"] = false;

$tdataauditoriasprocesosview[".buttonsAdded"] = false;

$tdataauditoriasprocesosview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditoriasprocesosview[".isUseTimeForSearch"] = false;


$tdataauditoriasprocesosview[".badgeColor"] = "2f4f4f";


$tdataauditoriasprocesosview[".allSearchFields"] = array();
$tdataauditoriasprocesosview[".filterFields"] = array();
$tdataauditoriasprocesosview[".requiredSearchFields"] = array();

$tdataauditoriasprocesosview[".googleLikeFields"] = array();
$tdataauditoriasprocesosview[".googleLikeFields"][] = "AuditoriasId";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "ProcesoId";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Fecha";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Usuario";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Ip";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Operación";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Tabla";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Llave Primaria";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Campo";
$tdataauditoriasprocesosview[".googleLikeFields"][] = "Datos";



$tdataauditoriasprocesosview[".tableType"] = "list";

$tdataauditoriasprocesosview[".printerPageOrientation"] = 0;
$tdataauditoriasprocesosview[".nPrinterPageScale"] = 100;

$tdataauditoriasprocesosview[".nPrinterSplitRecords"] = 40;

$tdataauditoriasprocesosview[".geocodingEnabled"] = false;





$tdataauditoriasprocesosview[".isResizeColumns"] = true;





$tdataauditoriasprocesosview[".pageSize"] = 20;

$tdataauditoriasprocesosview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataauditoriasprocesosview[".strOrderBy"] = $tstrOrderBy;

$tdataauditoriasprocesosview[".orderindexes"] = array();


$tdataauditoriasprocesosview[".sqlHead"] = "SELECT AuditoriasId,  	ProcesoId,  	Fecha,  	Usuario,  	Ip,  	[Operación],  	Tabla,  	[Llave Primaria],  	Campo,  	Datos";
$tdataauditoriasprocesosview[".sqlFrom"] = "FROM dbo.AuditoriasProcesosView";
$tdataauditoriasprocesosview[".sqlWhereExpr"] = "";
$tdataauditoriasprocesosview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditoriasprocesosview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditoriasprocesosview[".arrGroupsPerPage"] = $arrGPP;

$tdataauditoriasprocesosview[".highlightSearchResults"] = true;

$tableKeysauditoriasprocesosview = array();
$tdataauditoriasprocesosview[".Keys"] = $tableKeysauditoriasprocesosview;


$tdataauditoriasprocesosview[".hideMobileList"] = array();




//	AuditoriasId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AuditoriasId";
	$fdata["GoodName"] = "AuditoriasId";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","AuditoriasId");
	$fdata["FieldType"] = 72;


	
	
			

		$fdata["strField"] = "AuditoriasId";

		$fdata["sourceSingle"] = "AuditoriasId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AuditoriasId";

	
	
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


	$tdataauditoriasprocesosview["AuditoriasId"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "AuditoriasId";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoId";

	
	
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


	$tdataauditoriasprocesosview["ProcesoId"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdataauditoriasprocesosview["Fecha"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Fecha";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Usuario");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Usuario";

		$fdata["sourceSingle"] = "Usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";

	
	
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
			$edata["EditParams"].= " maxlength=56";

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


	$tdataauditoriasprocesosview["Usuario"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Usuario";
//	Ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ip";
	$fdata["GoodName"] = "Ip";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ip";

		$fdata["sourceSingle"] = "Ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ip";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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


	$tdataauditoriasprocesosview["Ip"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Ip";
//	Operación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Operación";
	$fdata["GoodName"] = "Operaci_n";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Operaci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Operación";

		$fdata["sourceSingle"] = "Operación";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Operación]";

	
	
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
			$edata["EditParams"].= " maxlength=9";

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


	$tdataauditoriasprocesosview["Operación"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Operación";
//	Tabla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tabla";
	$fdata["GoodName"] = "Tabla";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Tabla");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tabla";

		$fdata["sourceSingle"] = "Tabla";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tabla";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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


	$tdataauditoriasprocesosview["Tabla"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Tabla";
//	Llave Primaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Llave Primaria";
	$fdata["GoodName"] = "Llave_Primaria";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Llave_Primaria");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Llave Primaria";

		$fdata["sourceSingle"] = "Llave Primaria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Llave Primaria]";

	
	
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


	$tdataauditoriasprocesosview["Llave Primaria"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Llave Primaria";
//	Campo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Campo";
	$fdata["GoodName"] = "Campo";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Campo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Campo";

		$fdata["sourceSingle"] = "Campo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Campo";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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


	$tdataauditoriasprocesosview["Campo"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Campo";
//	Datos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Datos";
	$fdata["GoodName"] = "Datos";
	$fdata["ownerTable"] = "dbo.AuditoriasProcesosView";
	$fdata["Label"] = GetFieldLabel("dbo_AuditoriasProcesosView","Datos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Datos";

		$fdata["sourceSingle"] = "Datos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Datos";

	
	
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
			$edata["EditParams"].= " maxlength=2000";

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


	$tdataauditoriasprocesosview["Datos"] = $fdata;
		$tdataauditoriasprocesosview[".searchableFields"][] = "Datos";


$tables_data["dbo.AuditoriasProcesosView"]=&$tdataauditoriasprocesosview;
$field_labels["dbo_AuditoriasProcesosView"] = &$fieldLabelsauditoriasprocesosview;
$fieldToolTips["dbo_AuditoriasProcesosView"] = &$fieldToolTipsauditoriasprocesosview;
$placeHolders["dbo_AuditoriasProcesosView"] = &$placeHoldersauditoriasprocesosview;
$page_titles["dbo_AuditoriasProcesosView"] = &$pageTitlesauditoriasprocesosview;


changeTextControlsToDate( "dbo.AuditoriasProcesosView" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.AuditoriasProcesosView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.AuditoriasProcesosView"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.AuditoriasProcesosView"][0] = $masterParams;
				$masterTablesData["dbo.AuditoriasProcesosView"][0]["masterKeys"] = array();
	$masterTablesData["dbo.AuditoriasProcesosView"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.AuditoriasProcesosView"][0]["detailKeys"] = array();
	$masterTablesData["dbo.AuditoriasProcesosView"][0]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_auditoriasprocesosview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AuditoriasId,  	ProcesoId,  	Fecha,  	Usuario,  	Ip,  	[Operación],  	Tabla,  	[Llave Primaria],  	Campo,  	Datos";
$proto0["m_strFrom"] = "FROM dbo.AuditoriasProcesosView";
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
	"m_strName" => "AuditoriasId",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto6["m_sql"] = "AuditoriasId";
$proto6["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto8["m_sql"] = "ProcesoId";
$proto8["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto10["m_sql"] = "Fecha";
$proto10["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto12["m_sql"] = "Usuario";
$proto12["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ip",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto14["m_sql"] = "Ip";
$proto14["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Operación",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto16["m_sql"] = "[Operación]";
$proto16["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tabla",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto18["m_sql"] = "Tabla";
$proto18["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Llave Primaria",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto20["m_sql"] = "[Llave Primaria]";
$proto20["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Campo",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto22["m_sql"] = "Campo";
$proto22["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Datos",
	"m_strTable" => "dbo.AuditoriasProcesosView",
	"m_srcTableName" => "dbo.AuditoriasProcesosView"
));

$proto24["m_sql"] = "Datos";
$proto24["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.AuditoriasProcesosView";
$proto27["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "AuditoriasId";
$proto27["m_columns"][] = "ProcesoId";
$proto27["m_columns"][] = "Fecha";
$proto27["m_columns"][] = "Usuario";
$proto27["m_columns"][] = "Ip";
$proto27["m_columns"][] = "Operación";
$proto27["m_columns"][] = "Tabla";
$proto27["m_columns"][] = "Llave Primaria";
$proto27["m_columns"][] = "Campo";
$proto27["m_columns"][] = "Datos";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.AuditoriasProcesosView";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.AuditoriasProcesosView";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.AuditoriasProcesosView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditoriasprocesosview = createSqlQuery_auditoriasprocesosview();


	
		;

										

$tdataauditoriasprocesosview[".sqlquery"] = $queryData_auditoriasprocesosview;



$tdataauditoriasprocesosview[".hasEvents"] = false;

?>