<?php
$tdatadespachossigob = array();
$tdatadespachossigob[".searchableFields"] = array();
$tdatadespachossigob[".ShortName"] = "despachossigob";
$tdatadespachossigob[".OwnerID"] = "";
$tdatadespachossigob[".OriginalTable"] = "dbo.despachosSigob";


$tdatadespachossigob[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadespachossigob[".originalPagesByType"] = $tdatadespachossigob[".pagesByType"];
$tdatadespachossigob[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadespachossigob[".originalPages"] = $tdatadespachossigob[".pages"];
$tdatadespachossigob[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadespachossigob[".originalDefaultPages"] = $tdatadespachossigob[".defaultPages"];

//	field labels
$fieldLabelsdespachossigob = array();
$fieldToolTipsdespachossigob = array();
$pageTitlesdespachossigob = array();
$placeHoldersdespachossigob = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespachossigob["Spanish"] = array();
	$fieldToolTipsdespachossigob["Spanish"] = array();
	$placeHoldersdespachossigob["Spanish"] = array();
	$pageTitlesdespachossigob["Spanish"] = array();
	$fieldLabelsdespachossigob["Spanish"]["id"] = "Id";
	$fieldToolTipsdespachossigob["Spanish"]["id"] = "";
	$placeHoldersdespachossigob["Spanish"]["id"] = "";
	$fieldLabelsdespachossigob["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsdespachossigob["Spanish"]["fecha"] = "";
	$placeHoldersdespachossigob["Spanish"]["fecha"] = "";
	$fieldLabelsdespachossigob["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsdespachossigob["Spanish"]["codigo"] = "";
	$placeHoldersdespachossigob["Spanish"]["codigo"] = "";
	$fieldLabelsdespachossigob["Spanish"]["nombreCompleto"] = "Nombre Completo";
	$fieldToolTipsdespachossigob["Spanish"]["nombreCompleto"] = "";
	$placeHoldersdespachossigob["Spanish"]["nombreCompleto"] = "";
	$fieldLabelsdespachossigob["Spanish"]["documento"] = "Documento";
	$fieldToolTipsdespachossigob["Spanish"]["documento"] = "";
	$placeHoldersdespachossigob["Spanish"]["documento"] = "";
	$fieldLabelsdespachossigob["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsdespachossigob["Spanish"]["cargo"] = "";
	$placeHoldersdespachossigob["Spanish"]["cargo"] = "";
	$fieldLabelsdespachossigob["Spanish"]["area"] = "Area";
	$fieldToolTipsdespachossigob["Spanish"]["area"] = "";
	$placeHoldersdespachossigob["Spanish"]["area"] = "";
	$fieldLabelsdespachossigob["Spanish"]["institucion"] = "Institucion";
	$fieldToolTipsdespachossigob["Spanish"]["institucion"] = "";
	$placeHoldersdespachossigob["Spanish"]["institucion"] = "";
	if (count($fieldToolTipsdespachossigob["Spanish"]))
		$tdatadespachossigob[".isUseToolTips"] = true;
}


	$tdatadespachossigob[".NCSearch"] = true;



$tdatadespachossigob[".shortTableName"] = "despachossigob";
$tdatadespachossigob[".nSecOptions"] = 0;

$tdatadespachossigob[".mainTableOwnerID"] = "";
$tdatadespachossigob[".entityType"] = 0;
$tdatadespachossigob[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadespachossigob[".strOriginalTableName"] = "dbo.despachosSigob";

	



$tdatadespachossigob[".showAddInPopup"] = false;

$tdatadespachossigob[".showEditInPopup"] = false;

$tdatadespachossigob[".showViewInPopup"] = false;

$tdatadespachossigob[".listAjax"] = false;
//	temporary
//$tdatadespachossigob[".listAjax"] = false;

	$tdatadespachossigob[".audit"] = false;

	$tdatadespachossigob[".locking"] = false;


$pages = $tdatadespachossigob[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespachossigob[".edit"] = true;
	$tdatadespachossigob[".afterEditAction"] = 1;
	$tdatadespachossigob[".closePopupAfterEdit"] = 1;
	$tdatadespachossigob[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespachossigob[".add"] = true;
$tdatadespachossigob[".afterAddAction"] = 1;
$tdatadespachossigob[".closePopupAfterAdd"] = 1;
$tdatadespachossigob[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespachossigob[".list"] = true;
}



$tdatadespachossigob[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespachossigob[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespachossigob[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespachossigob[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespachossigob[".printFriendly"] = true;
}



$tdatadespachossigob[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespachossigob[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespachossigob[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespachossigob[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																

$tdatadespachossigob[".ajaxCodeSnippetAdded"] = false;

$tdatadespachossigob[".buttonsAdded"] = false;

$tdatadespachossigob[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespachossigob[".isUseTimeForSearch"] = false;


$tdatadespachossigob[".badgeColor"] = "2F4F4F";


$tdatadespachossigob[".allSearchFields"] = array();
$tdatadespachossigob[".filterFields"] = array();
$tdatadespachossigob[".requiredSearchFields"] = array();

$tdatadespachossigob[".googleLikeFields"] = array();
$tdatadespachossigob[".googleLikeFields"][] = "id";
$tdatadespachossigob[".googleLikeFields"][] = "fecha";
$tdatadespachossigob[".googleLikeFields"][] = "codigo";
$tdatadespachossigob[".googleLikeFields"][] = "nombreCompleto";
$tdatadespachossigob[".googleLikeFields"][] = "documento";
$tdatadespachossigob[".googleLikeFields"][] = "cargo";
$tdatadespachossigob[".googleLikeFields"][] = "area";
$tdatadespachossigob[".googleLikeFields"][] = "institucion";



$tdatadespachossigob[".tableType"] = "list";

$tdatadespachossigob[".printerPageOrientation"] = 0;
$tdatadespachossigob[".nPrinterPageScale"] = 100;

$tdatadespachossigob[".nPrinterSplitRecords"] = 40;

$tdatadespachossigob[".geocodingEnabled"] = false;










$tdatadespachossigob[".pageSize"] = 20;

$tdatadespachossigob[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadespachossigob[".strOrderBy"] = $tstrOrderBy;

$tdatadespachossigob[".orderindexes"] = array();


$tdatadespachossigob[".sqlHead"] = "SELECT id,  	fecha,  	codigo,  	nombreCompleto,  	documento,  	cargo,  	area,  	institucion";
$tdatadespachossigob[".sqlFrom"] = "FROM dbo.despachosSigob";
$tdatadespachossigob[".sqlWhereExpr"] = "";
$tdatadespachossigob[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespachossigob[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespachossigob[".arrGroupsPerPage"] = $arrGPP;

$tdatadespachossigob[".highlightSearchResults"] = true;

$tableKeysdespachossigob = array();
$tableKeysdespachossigob[] = "id";
$tdatadespachossigob[".Keys"] = $tableKeysdespachossigob;


$tdatadespachossigob[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatadespachossigob["id"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdatadespachossigob["fecha"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "fecha";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo";

		$fdata["sourceSingle"] = "codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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


	$tdatadespachossigob["codigo"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "codigo";
//	nombreCompleto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombreCompleto";
	$fdata["GoodName"] = "nombreCompleto";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","nombreCompleto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombreCompleto";

		$fdata["sourceSingle"] = "nombreCompleto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombreCompleto";

	
	
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


	$tdatadespachossigob["nombreCompleto"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "nombreCompleto";
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documento";

		$fdata["sourceSingle"] = "documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento";

	
	
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


	$tdatadespachossigob["documento"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "documento";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

		$fdata["sourceSingle"] = "cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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


	$tdatadespachossigob["cargo"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "cargo";
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "area";

		$fdata["sourceSingle"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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


	$tdatadespachossigob["area"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "area";
//	institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "institucion";
	$fdata["GoodName"] = "institucion";
	$fdata["ownerTable"] = "dbo.despachosSigob";
	$fdata["Label"] = GetFieldLabel("dbo_despachosSigob","institucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "institucion";

		$fdata["sourceSingle"] = "institucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institucion";

	
	
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


	$tdatadespachossigob["institucion"] = $fdata;
		$tdatadespachossigob[".searchableFields"][] = "institucion";


$tables_data["dbo.despachosSigob"]=&$tdatadespachossigob;
$field_labels["dbo_despachosSigob"] = &$fieldLabelsdespachossigob;
$fieldToolTips["dbo_despachosSigob"] = &$fieldToolTipsdespachossigob;
$placeHolders["dbo_despachosSigob"] = &$placeHoldersdespachossigob;
$page_titles["dbo_despachosSigob"] = &$pageTitlesdespachossigob;


changeTextControlsToDate( "dbo.despachosSigob" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.despachosSigob"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.despachosSigob"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despachossigob()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fecha,  	codigo,  	nombreCompleto,  	documento,  	cargo,  	area,  	institucion";
$proto0["m_strFrom"] = "FROM dbo.despachosSigob";
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
	"m_strName" => "id",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.despachosSigob";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto8["m_sql"] = "fecha";
$proto8["m_srcTableName"] = "dbo.despachosSigob";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto10["m_sql"] = "codigo";
$proto10["m_srcTableName"] = "dbo.despachosSigob";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombreCompleto",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto12["m_sql"] = "nombreCompleto";
$proto12["m_srcTableName"] = "dbo.despachosSigob";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto14["m_sql"] = "documento";
$proto14["m_srcTableName"] = "dbo.despachosSigob";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto16["m_sql"] = "cargo";
$proto16["m_srcTableName"] = "dbo.despachosSigob";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto18["m_sql"] = "area";
$proto18["m_srcTableName"] = "dbo.despachosSigob";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion",
	"m_strTable" => "dbo.despachosSigob",
	"m_srcTableName" => "dbo.despachosSigob"
));

$proto20["m_sql"] = "institucion";
$proto20["m_srcTableName"] = "dbo.despachosSigob";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dbo.despachosSigob";
$proto23["m_srcTableName"] = "dbo.despachosSigob";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "codigo";
$proto23["m_columns"][] = "nombreCompleto";
$proto23["m_columns"][] = "documento";
$proto23["m_columns"][] = "cargo";
$proto23["m_columns"][] = "area";
$proto23["m_columns"][] = "institucion";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dbo.despachosSigob";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dbo.despachosSigob";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.despachosSigob";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despachossigob = createSqlQuery_despachossigob();


	
		;

								

$tdatadespachossigob[".sqlquery"] = $queryData_despachossigob;



$tdatadespachossigob[".hasEvents"] = false;

?>