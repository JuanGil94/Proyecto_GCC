<?php
$tdatahorarios = array();
$tdatahorarios[".searchableFields"] = array();
$tdatahorarios[".ShortName"] = "horarios";
$tdatahorarios[".OwnerID"] = "";
$tdatahorarios[".OriginalTable"] = "dbo.Horarios";


$tdatahorarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahorarios[".originalPagesByType"] = $tdatahorarios[".pagesByType"];
$tdatahorarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahorarios[".originalPages"] = $tdatahorarios[".pages"];
$tdatahorarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahorarios[".originalDefaultPages"] = $tdatahorarios[".defaultPages"];

//	field labels
$fieldLabelshorarios = array();
$fieldToolTipshorarios = array();
$pageTitleshorarios = array();
$placeHoldershorarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshorarios["Spanish"] = array();
	$fieldToolTipshorarios["Spanish"] = array();
	$placeHoldershorarios["Spanish"] = array();
	$pageTitleshorarios["Spanish"] = array();
	$fieldLabelshorarios["Spanish"]["HorarioId"] = "Horario Id";
	$fieldToolTipshorarios["Spanish"]["HorarioId"] = "";
	$placeHoldershorarios["Spanish"]["HorarioId"] = "";
	$fieldLabelshorarios["Spanish"]["Horario"] = "Horario";
	$fieldToolTipshorarios["Spanish"]["Horario"] = "";
	$placeHoldershorarios["Spanish"]["Horario"] = "";
	$fieldLabelshorarios["Spanish"]["Lun"] = "Lun";
	$fieldToolTipshorarios["Spanish"]["Lun"] = "";
	$placeHoldershorarios["Spanish"]["Lun"] = "";
	$fieldLabelshorarios["Spanish"]["Mar"] = "Mar";
	$fieldToolTipshorarios["Spanish"]["Mar"] = "";
	$placeHoldershorarios["Spanish"]["Mar"] = "";
	$fieldLabelshorarios["Spanish"]["Mie"] = "Mie";
	$fieldToolTipshorarios["Spanish"]["Mie"] = "";
	$placeHoldershorarios["Spanish"]["Mie"] = "";
	$fieldLabelshorarios["Spanish"]["Jue"] = "Jue";
	$fieldToolTipshorarios["Spanish"]["Jue"] = "";
	$placeHoldershorarios["Spanish"]["Jue"] = "";
	$fieldLabelshorarios["Spanish"]["Vie"] = "Vie";
	$fieldToolTipshorarios["Spanish"]["Vie"] = "";
	$placeHoldershorarios["Spanish"]["Vie"] = "";
	$fieldLabelshorarios["Spanish"]["Sab"] = "Sab";
	$fieldToolTipshorarios["Spanish"]["Sab"] = "";
	$placeHoldershorarios["Spanish"]["Sab"] = "";
	$fieldLabelshorarios["Spanish"]["Dom"] = "Dom";
	$fieldToolTipshorarios["Spanish"]["Dom"] = "";
	$placeHoldershorarios["Spanish"]["Dom"] = "";
	$fieldLabelshorarios["Spanish"]["Fes"] = "Fes";
	$fieldToolTipshorarios["Spanish"]["Fes"] = "";
	$placeHoldershorarios["Spanish"]["Fes"] = "";
	$fieldLabelshorarios["Spanish"]["Desde"] = "Desde";
	$fieldToolTipshorarios["Spanish"]["Desde"] = "";
	$placeHoldershorarios["Spanish"]["Desde"] = "";
	$fieldLabelshorarios["Spanish"]["Hasta"] = "Hasta";
	$fieldToolTipshorarios["Spanish"]["Hasta"] = "";
	$placeHoldershorarios["Spanish"]["Hasta"] = "";
	if (count($fieldToolTipshorarios["Spanish"]))
		$tdatahorarios[".isUseToolTips"] = true;
}


	$tdatahorarios[".NCSearch"] = true;



$tdatahorarios[".shortTableName"] = "horarios";
$tdatahorarios[".nSecOptions"] = 0;

$tdatahorarios[".mainTableOwnerID"] = "";
$tdatahorarios[".entityType"] = 0;
$tdatahorarios[".connId"] = "GCC_at_S00001_CCAD01";


$tdatahorarios[".strOriginalTableName"] = "dbo.Horarios";

	



$tdatahorarios[".showAddInPopup"] = false;

$tdatahorarios[".showEditInPopup"] = false;

$tdatahorarios[".showViewInPopup"] = false;

$tdatahorarios[".listAjax"] = false;
//	temporary
//$tdatahorarios[".listAjax"] = false;

	$tdatahorarios[".audit"] = true;

	$tdatahorarios[".locking"] = false;


$pages = $tdatahorarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahorarios[".edit"] = true;
	$tdatahorarios[".afterEditAction"] = 1;
	$tdatahorarios[".closePopupAfterEdit"] = 1;
	$tdatahorarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahorarios[".add"] = true;
$tdatahorarios[".afterAddAction"] = 1;
$tdatahorarios[".closePopupAfterAdd"] = 1;
$tdatahorarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahorarios[".list"] = true;
}



$tdatahorarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahorarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahorarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahorarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahorarios[".printFriendly"] = true;
}



$tdatahorarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahorarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahorarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahorarios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																		

$tdatahorarios[".ajaxCodeSnippetAdded"] = false;

$tdatahorarios[".buttonsAdded"] = false;

$tdatahorarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahorarios[".isUseTimeForSearch"] = false;


$tdatahorarios[".badgeColor"] = "008B8B";


$tdatahorarios[".allSearchFields"] = array();
$tdatahorarios[".filterFields"] = array();
$tdatahorarios[".requiredSearchFields"] = array();

$tdatahorarios[".googleLikeFields"] = array();
$tdatahorarios[".googleLikeFields"][] = "HorarioId";
$tdatahorarios[".googleLikeFields"][] = "Horario";
$tdatahorarios[".googleLikeFields"][] = "Lun";
$tdatahorarios[".googleLikeFields"][] = "Mar";
$tdatahorarios[".googleLikeFields"][] = "Mie";
$tdatahorarios[".googleLikeFields"][] = "Jue";
$tdatahorarios[".googleLikeFields"][] = "Vie";
$tdatahorarios[".googleLikeFields"][] = "Sab";
$tdatahorarios[".googleLikeFields"][] = "Dom";
$tdatahorarios[".googleLikeFields"][] = "Fes";
$tdatahorarios[".googleLikeFields"][] = "Desde";
$tdatahorarios[".googleLikeFields"][] = "Hasta";



$tdatahorarios[".tableType"] = "list";

$tdatahorarios[".printerPageOrientation"] = 0;
$tdatahorarios[".nPrinterPageScale"] = 100;

$tdatahorarios[".nPrinterSplitRecords"] = 40;

$tdatahorarios[".geocodingEnabled"] = false;





$tdatahorarios[".isResizeColumns"] = true;





$tdatahorarios[".pageSize"] = 20;

$tdatahorarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahorarios[".strOrderBy"] = $tstrOrderBy;

$tdatahorarios[".orderindexes"] = array();


$tdatahorarios[".sqlHead"] = "SELECT HorarioId,  	Horario,  	Lun,  	Mar,  	Mie,  	Jue,  	Vie,  	Sab,  	Dom,  	Fes,  	Desde,  	Hasta";
$tdatahorarios[".sqlFrom"] = "FROM dbo.Horarios";
$tdatahorarios[".sqlWhereExpr"] = "";
$tdatahorarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahorarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahorarios[".arrGroupsPerPage"] = $arrGPP;

$tdatahorarios[".highlightSearchResults"] = true;

$tableKeyshorarios = array();
$tableKeyshorarios[] = "HorarioId";
$tdatahorarios[".Keys"] = $tableKeyshorarios;


$tdatahorarios[".hideMobileList"] = array();




//	HorarioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HorarioId";
	$fdata["GoodName"] = "HorarioId";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","HorarioId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "HorarioId";

		$fdata["sourceSingle"] = "HorarioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HorarioId";

	
	
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


	$tdatahorarios["HorarioId"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "HorarioId";
//	Horario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Horario";
	$fdata["GoodName"] = "Horario";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Horario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Horario";

		$fdata["sourceSingle"] = "Horario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Horario";

	
	
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


	$tdatahorarios["Horario"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Horario";
//	Lun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Lun";
	$fdata["GoodName"] = "Lun";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Lun");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Lun";

		$fdata["sourceSingle"] = "Lun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lun";

	
	
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


	$tdatahorarios["Lun"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Lun";
//	Mar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Mar";
	$fdata["GoodName"] = "Mar";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Mar");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Mar";

		$fdata["sourceSingle"] = "Mar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mar";

	
	
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


	$tdatahorarios["Mar"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Mar";
//	Mie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Mie";
	$fdata["GoodName"] = "Mie";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Mie");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Mie";

		$fdata["sourceSingle"] = "Mie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mie";

	
	
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


	$tdatahorarios["Mie"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Mie";
//	Jue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Jue";
	$fdata["GoodName"] = "Jue";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Jue");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Jue";

		$fdata["sourceSingle"] = "Jue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jue";

	
	
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


	$tdatahorarios["Jue"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Jue";
//	Vie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Vie";
	$fdata["GoodName"] = "Vie";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Vie");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Vie";

		$fdata["sourceSingle"] = "Vie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vie";

	
	
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


	$tdatahorarios["Vie"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Vie";
//	Sab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Sab";
	$fdata["GoodName"] = "Sab";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Sab");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Sab";

		$fdata["sourceSingle"] = "Sab";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sab";

	
	
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


	$tdatahorarios["Sab"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Sab";
//	Dom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Dom";
	$fdata["GoodName"] = "Dom";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Dom");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Dom";

		$fdata["sourceSingle"] = "Dom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dom";

	
	
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


	$tdatahorarios["Dom"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Dom";
//	Fes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fes";
	$fdata["GoodName"] = "Fes";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Fes");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Fes";

		$fdata["sourceSingle"] = "Fes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fes";

	
	
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


	$tdatahorarios["Fes"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Fes";
//	Desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Desde";
	$fdata["GoodName"] = "Desde";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Desde");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Desde";

		$fdata["sourceSingle"] = "Desde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Desde";

	
	
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


	$tdatahorarios["Desde"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Desde";
//	Hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Hasta";
	$fdata["GoodName"] = "Hasta";
	$fdata["ownerTable"] = "dbo.Horarios";
	$fdata["Label"] = GetFieldLabel("dbo_Horarios","Hasta");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Hasta";

		$fdata["sourceSingle"] = "Hasta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hasta";

	
	
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


	$tdatahorarios["Hasta"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "Hasta";


$tables_data["dbo.Horarios"]=&$tdatahorarios;
$field_labels["dbo_Horarios"] = &$fieldLabelshorarios;
$fieldToolTips["dbo_Horarios"] = &$fieldToolTipshorarios;
$placeHolders["dbo_Horarios"] = &$placeHoldershorarios;
$page_titles["dbo_Horarios"] = &$pageTitleshorarios;


changeTextControlsToDate( "dbo.Horarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Horarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Horarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_horarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HorarioId,  	Horario,  	Lun,  	Mar,  	Mie,  	Jue,  	Vie,  	Sab,  	Dom,  	Fes,  	Desde,  	Hasta";
$proto0["m_strFrom"] = "FROM dbo.Horarios";
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
	"m_strName" => "HorarioId",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto6["m_sql"] = "HorarioId";
$proto6["m_srcTableName"] = "dbo.Horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Horario",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto8["m_sql"] = "Horario";
$proto8["m_srcTableName"] = "dbo.Horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Lun",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto10["m_sql"] = "Lun";
$proto10["m_srcTableName"] = "dbo.Horarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Mar",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto12["m_sql"] = "Mar";
$proto12["m_srcTableName"] = "dbo.Horarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Mie",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto14["m_sql"] = "Mie";
$proto14["m_srcTableName"] = "dbo.Horarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Jue",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto16["m_sql"] = "Jue";
$proto16["m_srcTableName"] = "dbo.Horarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Vie",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto18["m_sql"] = "Vie";
$proto18["m_srcTableName"] = "dbo.Horarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Sab",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto20["m_sql"] = "Sab";
$proto20["m_srcTableName"] = "dbo.Horarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Dom",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto22["m_sql"] = "Dom";
$proto22["m_srcTableName"] = "dbo.Horarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fes",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto24["m_sql"] = "Fes";
$proto24["m_srcTableName"] = "dbo.Horarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Desde",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto26["m_sql"] = "Desde";
$proto26["m_srcTableName"] = "dbo.Horarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Hasta",
	"m_strTable" => "dbo.Horarios",
	"m_srcTableName" => "dbo.Horarios"
));

$proto28["m_sql"] = "Hasta";
$proto28["m_srcTableName"] = "dbo.Horarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.Horarios";
$proto31["m_srcTableName"] = "dbo.Horarios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "HorarioId";
$proto31["m_columns"][] = "Horario";
$proto31["m_columns"][] = "Lun";
$proto31["m_columns"][] = "Mar";
$proto31["m_columns"][] = "Mie";
$proto31["m_columns"][] = "Jue";
$proto31["m_columns"][] = "Vie";
$proto31["m_columns"][] = "Sab";
$proto31["m_columns"][] = "Dom";
$proto31["m_columns"][] = "Fes";
$proto31["m_columns"][] = "Desde";
$proto31["m_columns"][] = "Hasta";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.Horarios";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.Horarios";
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
$proto0["m_srcTableName"]="dbo.Horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_horarios = createSqlQuery_horarios();


	
		;

												

$tdatahorarios[".sqlquery"] = $queryData_horarios;



$tdatahorarios[".hasEvents"] = false;

?>