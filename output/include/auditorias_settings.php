<?php
$tdataauditorias = array();
$tdataauditorias[".searchableFields"] = array();
$tdataauditorias[".ShortName"] = "auditorias";
$tdataauditorias[".OwnerID"] = "";
$tdataauditorias[".OriginalTable"] = "dbo.Auditorias";


$tdataauditorias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataauditorias[".originalPagesByType"] = $tdataauditorias[".pagesByType"];
$tdataauditorias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataauditorias[".originalPages"] = $tdataauditorias[".pages"];
$tdataauditorias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataauditorias[".originalDefaultPages"] = $tdataauditorias[".defaultPages"];

//	field labels
$fieldLabelsauditorias = array();
$fieldToolTipsauditorias = array();
$pageTitlesauditorias = array();
$placeHoldersauditorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsauditorias["Spanish"] = array();
	$fieldToolTipsauditorias["Spanish"] = array();
	$placeHoldersauditorias["Spanish"] = array();
	$pageTitlesauditorias["Spanish"] = array();
	$fieldLabelsauditorias["Spanish"]["AuditoriaId"] = "Auditoria Id";
	$fieldToolTipsauditorias["Spanish"]["AuditoriaId"] = "";
	$placeHoldersauditorias["Spanish"]["AuditoriaId"] = "";
	$fieldLabelsauditorias["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsauditorias["Spanish"]["Tipo"] = "";
	$placeHoldersauditorias["Spanish"]["Tipo"] = "";
	$fieldLabelsauditorias["Spanish"]["Tabla"] = "Tabla";
	$fieldToolTipsauditorias["Spanish"]["Tabla"] = "";
	$placeHoldersauditorias["Spanish"]["Tabla"] = "";
	$fieldLabelsauditorias["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsauditorias["Spanish"]["Fecha"] = "";
	$placeHoldersauditorias["Spanish"]["Fecha"] = "";
	$fieldLabelsauditorias["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsauditorias["Spanish"]["UserId"] = "";
	$placeHoldersauditorias["Spanish"]["UserId"] = "";
	$fieldLabelsauditorias["Spanish"]["Ip"] = "Ip";
	$fieldToolTipsauditorias["Spanish"]["Ip"] = "";
	$placeHoldersauditorias["Spanish"]["Ip"] = "";
	$fieldLabelsauditorias["Spanish"]["PrimaryKey"] = "Primary Key";
	$fieldToolTipsauditorias["Spanish"]["PrimaryKey"] = "";
	$placeHoldersauditorias["Spanish"]["PrimaryKey"] = "";
	$pageTitlesauditorias["Spanish"]["add"] = "Auditorias";
	$pageTitlesauditorias["Spanish"]["edit"] = "Auditorias";
	if (count($fieldToolTipsauditorias["Spanish"]))
		$tdataauditorias[".isUseToolTips"] = true;
}


	$tdataauditorias[".NCSearch"] = true;



$tdataauditorias[".shortTableName"] = "auditorias";
$tdataauditorias[".nSecOptions"] = 0;

$tdataauditorias[".mainTableOwnerID"] = "";
$tdataauditorias[".entityType"] = 0;
$tdataauditorias[".connId"] = "GCC_at_S00001_CCAD01";


$tdataauditorias[".strOriginalTableName"] = "dbo.Auditorias";

	



$tdataauditorias[".showAddInPopup"] = false;

$tdataauditorias[".showEditInPopup"] = false;

$tdataauditorias[".showViewInPopup"] = false;

$tdataauditorias[".listAjax"] = false;
//	temporary
//$tdataauditorias[".listAjax"] = false;

	$tdataauditorias[".audit"] = false;

	$tdataauditorias[".locking"] = false;


$pages = $tdataauditorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataauditorias[".edit"] = true;
	$tdataauditorias[".afterEditAction"] = 1;
	$tdataauditorias[".closePopupAfterEdit"] = 1;
	$tdataauditorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataauditorias[".add"] = true;
$tdataauditorias[".afterAddAction"] = 1;
$tdataauditorias[".closePopupAfterAdd"] = 1;
$tdataauditorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataauditorias[".list"] = true;
}



$tdataauditorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataauditorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataauditorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataauditorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataauditorias[".printFriendly"] = true;
}



$tdataauditorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataauditorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataauditorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataauditorias[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						

$tdataauditorias[".ajaxCodeSnippetAdded"] = false;

$tdataauditorias[".buttonsAdded"] = false;

$tdataauditorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditorias[".isUseTimeForSearch"] = false;


$tdataauditorias[".badgeColor"] = "4169E1";


$tdataauditorias[".allSearchFields"] = array();
$tdataauditorias[".filterFields"] = array();
$tdataauditorias[".requiredSearchFields"] = array();

$tdataauditorias[".googleLikeFields"] = array();
$tdataauditorias[".googleLikeFields"][] = "AuditoriaId";
$tdataauditorias[".googleLikeFields"][] = "Tipo";
$tdataauditorias[".googleLikeFields"][] = "Tabla";
$tdataauditorias[".googleLikeFields"][] = "Fecha";
$tdataauditorias[".googleLikeFields"][] = "UserId";
$tdataauditorias[".googleLikeFields"][] = "Ip";
$tdataauditorias[".googleLikeFields"][] = "PrimaryKey";



$tdataauditorias[".tableType"] = "list";

$tdataauditorias[".printerPageOrientation"] = 0;
$tdataauditorias[".nPrinterPageScale"] = 100;

$tdataauditorias[".nPrinterSplitRecords"] = 40;

$tdataauditorias[".geocodingEnabled"] = false;




$tdataauditorias[".isDisplayLoading"] = true;

$tdataauditorias[".isResizeColumns"] = true;





$tdataauditorias[".pageSize"] = 20;

$tdataauditorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataauditorias[".strOrderBy"] = $tstrOrderBy;

$tdataauditorias[".orderindexes"] = array();


$tdataauditorias[".sqlHead"] = "SELECT AuditoriaId,  	Tipo,  	Tabla,  	Fecha,  	UserId,  	Ip,  	PrimaryKey";
$tdataauditorias[".sqlFrom"] = "FROM dbo.Auditorias";
$tdataauditorias[".sqlWhereExpr"] = "";
$tdataauditorias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataauditorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditorias[".arrGroupsPerPage"] = $arrGPP;

$tdataauditorias[".highlightSearchResults"] = true;

$tableKeysauditorias = array();
$tableKeysauditorias[] = "AuditoriaId";
$tdataauditorias[".Keys"] = $tableKeysauditorias;


$tdataauditorias[".hideMobileList"] = array();




//	AuditoriaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AuditoriaId";
	$fdata["GoodName"] = "AuditoriaId";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","AuditoriaId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AuditoriaId";

		$fdata["sourceSingle"] = "AuditoriaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AuditoriaId";

	
	
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


	$tdataauditorias["AuditoriaId"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "AuditoriaId";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","Tipo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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


	$tdataauditorias["Tipo"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "Tipo";
//	Tabla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tabla";
	$fdata["GoodName"] = "Tabla";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","Tabla");
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


	$tdataauditorias["Tabla"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "Tabla";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","Fecha");
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


	$tdataauditorias["Fecha"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "Fecha";
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","UserId");
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


	$tdataauditorias["UserId"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "UserId";
//	Ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ip";
	$fdata["GoodName"] = "Ip";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","Ip");
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


	$tdataauditorias["Ip"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "Ip";
//	PrimaryKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PrimaryKey";
	$fdata["GoodName"] = "PrimaryKey";
	$fdata["ownerTable"] = "dbo.Auditorias";
	$fdata["Label"] = GetFieldLabel("dbo_Auditorias","PrimaryKey");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PrimaryKey";

		$fdata["sourceSingle"] = "PrimaryKey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryKey";

	
	
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


	$tdataauditorias["PrimaryKey"] = $fdata;
		$tdataauditorias[".searchableFields"][] = "PrimaryKey";


$tables_data["dbo.Auditorias"]=&$tdataauditorias;
$field_labels["dbo_Auditorias"] = &$fieldLabelsauditorias;
$fieldToolTips["dbo_Auditorias"] = &$fieldToolTipsauditorias;
$placeHolders["dbo_Auditorias"] = &$placeHoldersauditorias;
$page_titles["dbo_Auditorias"] = &$pageTitlesauditorias;


changeTextControlsToDate( "dbo.Auditorias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Auditorias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Auditorias"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.UserProfile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.UserProfile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "userprofile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Auditorias"][0] = $masterParams;
				$masterTablesData["dbo.Auditorias"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Auditorias"][0]["masterKeys"][]="UserId";
				$masterTablesData["dbo.Auditorias"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Auditorias"][0]["detailKeys"][]="UserId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_auditorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AuditoriaId,  	Tipo,  	Tabla,  	Fecha,  	UserId,  	Ip,  	PrimaryKey";
$proto0["m_strFrom"] = "FROM dbo.Auditorias";
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
	"m_strName" => "AuditoriaId",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto6["m_sql"] = "AuditoriaId";
$proto6["m_srcTableName"] = "dbo.Auditorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto8["m_sql"] = "Tipo";
$proto8["m_srcTableName"] = "dbo.Auditorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tabla",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto10["m_sql"] = "Tabla";
$proto10["m_srcTableName"] = "dbo.Auditorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Auditorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto14["m_sql"] = "UserId";
$proto14["m_srcTableName"] = "dbo.Auditorias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ip",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto16["m_sql"] = "Ip";
$proto16["m_srcTableName"] = "dbo.Auditorias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryKey",
	"m_strTable" => "dbo.Auditorias",
	"m_srcTableName" => "dbo.Auditorias"
));

$proto18["m_sql"] = "PrimaryKey";
$proto18["m_srcTableName"] = "dbo.Auditorias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.Auditorias";
$proto21["m_srcTableName"] = "dbo.Auditorias";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "AuditoriaId";
$proto21["m_columns"][] = "Tipo";
$proto21["m_columns"][] = "Tabla";
$proto21["m_columns"][] = "Fecha";
$proto21["m_columns"][] = "UserId";
$proto21["m_columns"][] = "Ip";
$proto21["m_columns"][] = "PrimaryKey";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.Auditorias";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.Auditorias";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Auditorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditorias = createSqlQuery_auditorias();


	
		;

							

$tdataauditorias[".sqlquery"] = $queryData_auditorias;



$tdataauditorias[".hasEvents"] = false;

?>