<?php
$tdatanovedades = array();
$tdatanovedades[".searchableFields"] = array();
$tdatanovedades[".ShortName"] = "novedades";
$tdatanovedades[".OwnerID"] = "";
$tdatanovedades[".OriginalTable"] = "dbo.Novedades";


$tdatanovedades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanovedades[".originalPagesByType"] = $tdatanovedades[".pagesByType"];
$tdatanovedades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanovedades[".originalPages"] = $tdatanovedades[".pages"];
$tdatanovedades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanovedades[".originalDefaultPages"] = $tdatanovedades[".defaultPages"];

//	field labels
$fieldLabelsnovedades = array();
$fieldToolTipsnovedades = array();
$pageTitlesnovedades = array();
$placeHoldersnovedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnovedades["Spanish"] = array();
	$fieldToolTipsnovedades["Spanish"] = array();
	$placeHoldersnovedades["Spanish"] = array();
	$pageTitlesnovedades["Spanish"] = array();
	$fieldLabelsnovedades["Spanish"]["NovedadId"] = "Novedad Id";
	$fieldToolTipsnovedades["Spanish"]["NovedadId"] = "";
	$placeHoldersnovedades["Spanish"]["NovedadId"] = "";
	$fieldLabelsnovedades["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsnovedades["Spanish"]["Fecha"] = "";
	$placeHoldersnovedades["Spanish"]["Fecha"] = "";
	$fieldLabelsnovedades["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsnovedades["Spanish"]["ProcesoId"] = "";
	$placeHoldersnovedades["Spanish"]["ProcesoId"] = "";
	$fieldLabelsnovedades["Spanish"]["Tipo"] = "Tipo Novedad";
	$fieldToolTipsnovedades["Spanish"]["Tipo"] = "";
	$placeHoldersnovedades["Spanish"]["Tipo"] = "";
	$fieldLabelsnovedades["Spanish"]["Anterior"] = "Valor Anterior";
	$fieldToolTipsnovedades["Spanish"]["Anterior"] = "";
	$placeHoldersnovedades["Spanish"]["Anterior"] = "";
	$fieldLabelsnovedades["Spanish"]["Nuevo"] = "Valor Nuevo";
	$fieldToolTipsnovedades["Spanish"]["Nuevo"] = "";
	$placeHoldersnovedades["Spanish"]["Nuevo"] = "";
	$fieldLabelsnovedades["Spanish"]["UserId"] = "Modificado Por";
	$fieldToolTipsnovedades["Spanish"]["UserId"] = "";
	$placeHoldersnovedades["Spanish"]["UserId"] = "";
	$fieldLabelsnovedades["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsnovedades["Spanish"]["Observaciones"] = "";
	$placeHoldersnovedades["Spanish"]["Observaciones"] = "";
	$fieldLabelsnovedades["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipsnovedades["Spanish"]["MinJusticia"] = "";
	$placeHoldersnovedades["Spanish"]["MinJusticia"] = "";
	$pageTitlesnovedades["Spanish"]["add"] = "Novedades";
	if (count($fieldToolTipsnovedades["Spanish"]))
		$tdatanovedades[".isUseToolTips"] = true;
}


	$tdatanovedades[".NCSearch"] = true;



$tdatanovedades[".shortTableName"] = "novedades";
$tdatanovedades[".nSecOptions"] = 0;

$tdatanovedades[".mainTableOwnerID"] = "";
$tdatanovedades[".entityType"] = 0;
$tdatanovedades[".connId"] = "GCC_at_S00001_CCAD01";


$tdatanovedades[".strOriginalTableName"] = "dbo.Novedades";

	



$tdatanovedades[".showAddInPopup"] = false;

$tdatanovedades[".showEditInPopup"] = false;

$tdatanovedades[".showViewInPopup"] = false;

$tdatanovedades[".listAjax"] = false;
//	temporary
//$tdatanovedades[".listAjax"] = false;

	$tdatanovedades[".audit"] = false;

	$tdatanovedades[".locking"] = false;


$pages = $tdatanovedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanovedades[".edit"] = true;
	$tdatanovedades[".afterEditAction"] = 1;
	$tdatanovedades[".closePopupAfterEdit"] = 1;
	$tdatanovedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanovedades[".add"] = true;
$tdatanovedades[".afterAddAction"] = 1;
$tdatanovedades[".closePopupAfterAdd"] = 1;
$tdatanovedades[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatanovedades[".list"] = true;
}



$tdatanovedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanovedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanovedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanovedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanovedades[".printFriendly"] = true;
}



$tdatanovedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanovedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanovedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanovedades[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdatanovedades[".ajaxCodeSnippetAdded"] = false;

$tdatanovedades[".buttonsAdded"] = false;

$tdatanovedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanovedades[".isUseTimeForSearch"] = false;


$tdatanovedades[".badgeColor"] = "778899";


$tdatanovedades[".allSearchFields"] = array();
$tdatanovedades[".filterFields"] = array();
$tdatanovedades[".requiredSearchFields"] = array();

$tdatanovedades[".googleLikeFields"] = array();
$tdatanovedades[".googleLikeFields"][] = "NovedadId";
$tdatanovedades[".googleLikeFields"][] = "Fecha";
$tdatanovedades[".googleLikeFields"][] = "ProcesoId";
$tdatanovedades[".googleLikeFields"][] = "Tipo";
$tdatanovedades[".googleLikeFields"][] = "Anterior";
$tdatanovedades[".googleLikeFields"][] = "Nuevo";
$tdatanovedades[".googleLikeFields"][] = "UserId";
$tdatanovedades[".googleLikeFields"][] = "Observaciones";
$tdatanovedades[".googleLikeFields"][] = "MinJusticia";



$tdatanovedades[".tableType"] = "list";

$tdatanovedades[".printerPageOrientation"] = 0;
$tdatanovedades[".nPrinterPageScale"] = 100;

$tdatanovedades[".nPrinterSplitRecords"] = 40;

$tdatanovedades[".geocodingEnabled"] = false;




$tdatanovedades[".isDisplayLoading"] = true;

$tdatanovedades[".isResizeColumns"] = true;





$tdatanovedades[".pageSize"] = 20;

$tdatanovedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanovedades[".strOrderBy"] = $tstrOrderBy;

$tdatanovedades[".orderindexes"] = array();


$tdatanovedades[".sqlHead"] = "SELECT NovedadId,  	Fecha,  	ProcesoId,  	Tipo,  	Anterior,  	Nuevo,  	UserId,  	Observaciones,  	MinJusticia";
$tdatanovedades[".sqlFrom"] = "FROM dbo.Novedades";
$tdatanovedades[".sqlWhereExpr"] = "";
$tdatanovedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatanovedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanovedades[".arrGroupsPerPage"] = $arrGPP;

$tdatanovedades[".highlightSearchResults"] = true;

$tableKeysnovedades = array();
$tableKeysnovedades[] = "NovedadId";
$tdatanovedades[".Keys"] = $tableKeysnovedades;


$tdatanovedades[".hideMobileList"] = array();




//	NovedadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NovedadId";
	$fdata["GoodName"] = "NovedadId";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","NovedadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NovedadId";

		$fdata["sourceSingle"] = "NovedadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NovedadId";

	
	
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


	$tdatanovedades["NovedadId"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "NovedadId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","Fecha");
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


	$tdatanovedades["Fecha"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "Fecha";
//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","ProcesoId");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Procesos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProcesoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Numero";

	

	
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


	$tdatanovedades["ProcesoId"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "ProcesoId";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
	$edata["LookupTable"] = "dbo.tiposNovedades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NombreNovedad";

	

	
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


	$tdatanovedades["Tipo"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "Tipo";
//	Anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Anterior";
	$fdata["GoodName"] = "Anterior";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","Anterior");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Anterior";

		$fdata["sourceSingle"] = "Anterior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Anterior";

	
	
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


	$tdatanovedades["Anterior"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "Anterior";
//	Nuevo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Nuevo";
	$fdata["GoodName"] = "Nuevo";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","Nuevo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nuevo";

		$fdata["sourceSingle"] = "Nuevo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nuevo";

	
	
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


	$tdatanovedades["Nuevo"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "Nuevo";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","UserId");
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


	$tdatanovedades["UserId"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "UserId";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","Observaciones");
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


	$tdatanovedades["Observaciones"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "Observaciones";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.Novedades";
	$fdata["Label"] = GetFieldLabel("dbo_Novedades","MinJusticia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "MinJusticia";

		$fdata["sourceSingle"] = "MinJusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinJusticia";

	
	
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


	$tdatanovedades["MinJusticia"] = $fdata;
		$tdatanovedades[".searchableFields"][] = "MinJusticia";


$tables_data["dbo.Novedades"]=&$tdatanovedades;
$field_labels["dbo_Novedades"] = &$fieldLabelsnovedades;
$fieldToolTips["dbo_Novedades"] = &$fieldToolTipsnovedades;
$placeHolders["dbo_Novedades"] = &$placeHoldersnovedades;
$page_titles["dbo_Novedades"] = &$pageTitlesnovedades;


changeTextControlsToDate( "dbo.Novedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Novedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Novedades"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Novedades"][0] = $masterParams;
				$masterTablesData["dbo.Novedades"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Novedades"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Novedades"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Novedades"][0]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UserProfile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UserProfile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "userprofile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Novedades"][1] = $masterParams;
				$masterTablesData["dbo.Novedades"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Novedades"][1]["masterKeys"][]="UserId";
				$masterTablesData["dbo.Novedades"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Novedades"][1]["detailKeys"][]="UserId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PrescripcionAutomatica";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "prescripcionautomatica";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Novedades"][2] = $masterParams;
				$masterTablesData["dbo.Novedades"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Novedades"][2]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Novedades"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Novedades"][2]["detailKeys"][]="ProcesoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MandamientoAutomatico";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mandamientoautomatico";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Novedades"][3] = $masterParams;
				$masterTablesData["dbo.Novedades"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Novedades"][3]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Novedades"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Novedades"][3]["detailKeys"][]="ProcesoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_novedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NovedadId,  	Fecha,  	ProcesoId,  	Tipo,  	Anterior,  	Nuevo,  	UserId,  	Observaciones,  	MinJusticia";
$proto0["m_strFrom"] = "FROM dbo.Novedades";
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
	"m_strName" => "NovedadId",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto6["m_sql"] = "NovedadId";
$proto6["m_srcTableName"] = "dbo.Novedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "dbo.Novedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto10["m_sql"] = "ProcesoId";
$proto10["m_srcTableName"] = "dbo.Novedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto12["m_sql"] = "Tipo";
$proto12["m_srcTableName"] = "dbo.Novedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Anterior",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto14["m_sql"] = "Anterior";
$proto14["m_srcTableName"] = "dbo.Novedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Nuevo",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto16["m_sql"] = "Nuevo";
$proto16["m_srcTableName"] = "dbo.Novedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto18["m_sql"] = "UserId";
$proto18["m_srcTableName"] = "dbo.Novedades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto20["m_sql"] = "Observaciones";
$proto20["m_srcTableName"] = "dbo.Novedades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "dbo.Novedades",
	"m_srcTableName" => "dbo.Novedades"
));

$proto22["m_sql"] = "MinJusticia";
$proto22["m_srcTableName"] = "dbo.Novedades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.Novedades";
$proto25["m_srcTableName"] = "dbo.Novedades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "NovedadId";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "ProcesoId";
$proto25["m_columns"][] = "Tipo";
$proto25["m_columns"][] = "Anterior";
$proto25["m_columns"][] = "Nuevo";
$proto25["m_columns"][] = "UserId";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "MinJusticia";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.Novedades";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.Novedades";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Novedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_novedades = createSqlQuery_novedades();


	
		;

									

$tdatanovedades[".sqlquery"] = $queryData_novedades;



$tdatanovedades[".hasEvents"] = false;

?>