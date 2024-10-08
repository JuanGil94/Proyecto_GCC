<?php
$tdatausugcc__audit = array();
$tdatausugcc__audit[".searchableFields"] = array();
$tdatausugcc__audit[".ShortName"] = "usugcc__audit";
$tdatausugcc__audit[".OwnerID"] = "";
$tdatausugcc__audit[".OriginalTable"] = "dbo.usugcc-_audit";


$tdatausugcc__audit[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"view\":[\"view\"]}" );
$tdatausugcc__audit[".originalPagesByType"] = $tdatausugcc__audit[".pagesByType"];
$tdatausugcc__audit[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"view\":[\"view\"]}" ) );
$tdatausugcc__audit[".originalPages"] = $tdatausugcc__audit[".pages"];
$tdatausugcc__audit[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"view\":\"view\"}" );
$tdatausugcc__audit[".originalDefaultPages"] = $tdatausugcc__audit[".defaultPages"];

//	field labels
$fieldLabelsusugcc__audit = array();
$fieldToolTipsusugcc__audit = array();
$pageTitlesusugcc__audit = array();
$placeHoldersusugcc__audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusugcc__audit["Spanish"] = array();
	$fieldToolTipsusugcc__audit["Spanish"] = array();
	$placeHoldersusugcc__audit["Spanish"] = array();
	$pageTitlesusugcc__audit["Spanish"] = array();
	$fieldLabelsusugcc__audit["Spanish"]["id"] = "Id";
	$fieldToolTipsusugcc__audit["Spanish"]["id"] = "";
	$placeHoldersusugcc__audit["Spanish"]["id"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["datetime"] = "Datetime";
	$fieldToolTipsusugcc__audit["Spanish"]["datetime"] = "";
	$placeHoldersusugcc__audit["Spanish"]["datetime"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["ip"] = "Ip";
	$fieldToolTipsusugcc__audit["Spanish"]["ip"] = "";
	$placeHoldersusugcc__audit["Spanish"]["ip"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["user"] = "User";
	$fieldToolTipsusugcc__audit["Spanish"]["user"] = "";
	$placeHoldersusugcc__audit["Spanish"]["user"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["table"] = "Table";
	$fieldToolTipsusugcc__audit["Spanish"]["table"] = "";
	$placeHoldersusugcc__audit["Spanish"]["table"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["action"] = "Action";
	$fieldToolTipsusugcc__audit["Spanish"]["action"] = "";
	$placeHoldersusugcc__audit["Spanish"]["action"] = "";
	$fieldLabelsusugcc__audit["Spanish"]["description"] = "Description";
	$fieldToolTipsusugcc__audit["Spanish"]["description"] = "";
	$placeHoldersusugcc__audit["Spanish"]["description"] = "";
	if (count($fieldToolTipsusugcc__audit["Spanish"]))
		$tdatausugcc__audit[".isUseToolTips"] = true;
}


	$tdatausugcc__audit[".NCSearch"] = true;



$tdatausugcc__audit[".shortTableName"] = "usugcc__audit";
$tdatausugcc__audit[".nSecOptions"] = 0;

$tdatausugcc__audit[".mainTableOwnerID"] = "";
$tdatausugcc__audit[".entityType"] = 0;
$tdatausugcc__audit[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausugcc__audit[".strOriginalTableName"] = "dbo.usugcc-_audit";

	



$tdatausugcc__audit[".showAddInPopup"] = false;

$tdatausugcc__audit[".showEditInPopup"] = false;

$tdatausugcc__audit[".showViewInPopup"] = false;

$tdatausugcc__audit[".listAjax"] = false;
//	temporary
//$tdatausugcc__audit[".listAjax"] = false;

	$tdatausugcc__audit[".audit"] = true;

	$tdatausugcc__audit[".locking"] = false;


$pages = $tdatausugcc__audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausugcc__audit[".edit"] = true;
	$tdatausugcc__audit[".afterEditAction"] = 1;
	$tdatausugcc__audit[".closePopupAfterEdit"] = 1;
	$tdatausugcc__audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausugcc__audit[".add"] = true;
$tdatausugcc__audit[".afterAddAction"] = 1;
$tdatausugcc__audit[".closePopupAfterAdd"] = 1;
$tdatausugcc__audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausugcc__audit[".list"] = true;
}



$tdatausugcc__audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausugcc__audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausugcc__audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausugcc__audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausugcc__audit[".printFriendly"] = true;
}



$tdatausugcc__audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausugcc__audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausugcc__audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausugcc__audit[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																														

$tdatausugcc__audit[".ajaxCodeSnippetAdded"] = false;

$tdatausugcc__audit[".buttonsAdded"] = false;

$tdatausugcc__audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausugcc__audit[".isUseTimeForSearch"] = false;


$tdatausugcc__audit[".badgeColor"] = "DB7093";


$tdatausugcc__audit[".allSearchFields"] = array();
$tdatausugcc__audit[".filterFields"] = array();
$tdatausugcc__audit[".requiredSearchFields"] = array();

$tdatausugcc__audit[".googleLikeFields"] = array();
$tdatausugcc__audit[".googleLikeFields"][] = "id";
$tdatausugcc__audit[".googleLikeFields"][] = "datetime";
$tdatausugcc__audit[".googleLikeFields"][] = "ip";
$tdatausugcc__audit[".googleLikeFields"][] = "user";
$tdatausugcc__audit[".googleLikeFields"][] = "table";
$tdatausugcc__audit[".googleLikeFields"][] = "action";
$tdatausugcc__audit[".googleLikeFields"][] = "description";



$tdatausugcc__audit[".tableType"] = "list";

$tdatausugcc__audit[".printerPageOrientation"] = 0;
$tdatausugcc__audit[".nPrinterPageScale"] = 100;

$tdatausugcc__audit[".nPrinterSplitRecords"] = 40;

$tdatausugcc__audit[".geocodingEnabled"] = false;





$tdatausugcc__audit[".isResizeColumns"] = true;





$tdatausugcc__audit[".pageSize"] = 20;

$tdatausugcc__audit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
$tdatausugcc__audit[".strOrderBy"] = $tstrOrderBy;

$tdatausugcc__audit[".orderindexes"] = array();
	$tdatausugcc__audit[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");



$tdatausugcc__audit[".sqlHead"] = "SELECT id,  [datetime],  ip,  [user],  [table],  [action],  description";
$tdatausugcc__audit[".sqlFrom"] = "FROM dbo.[usugcc-_audit]";
$tdatausugcc__audit[".sqlWhereExpr"] = "";
$tdatausugcc__audit[".sqlTail"] = "";

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
$tdatausugcc__audit[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausugcc__audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausugcc__audit[".arrGroupsPerPage"] = $arrGPP;

$tdatausugcc__audit[".highlightSearchResults"] = true;

$tableKeysusugcc__audit = array();
$tableKeysusugcc__audit[] = "id";
$tdatausugcc__audit[".Keys"] = $tableKeysusugcc__audit;


$tdatausugcc__audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","id");
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


	$tdatausugcc__audit["id"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

		$fdata["sourceSingle"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[datetime]";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatausugcc__audit["datetime"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatausugcc__audit["ip"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[user]";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatausugcc__audit["user"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

		$fdata["sourceSingle"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[table]";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatausugcc__audit["table"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

		$fdata["sourceSingle"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[action]";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatausugcc__audit["action"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.usugcc-_audit";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatausugcc__audit["description"] = $fdata;
		$tdatausugcc__audit[".searchableFields"][] = "description";


$tables_data["dbo.usugcc-_audit"]=&$tdatausugcc__audit;
$field_labels["dbo_usugcc__audit"] = &$fieldLabelsusugcc__audit;
$fieldToolTips["dbo_usugcc__audit"] = &$fieldToolTipsusugcc__audit;
$placeHolders["dbo_usugcc__audit"] = &$placeHoldersusugcc__audit;
$page_titles["dbo_usugcc__audit"] = &$pageTitlesusugcc__audit;


changeTextControlsToDate( "dbo.usugcc-_audit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.usugcc-_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.usugcc-_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usugcc__audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  [datetime],  ip,  [user],  [table],  [action],  description";
$proto0["m_strFrom"] = "FROM dbo.[usugcc-_audit]";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
	
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
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.usugcc-_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto8["m_sql"] = "[datetime]";
$proto8["m_srcTableName"] = "dbo.usugcc-_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "dbo.usugcc-_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto12["m_sql"] = "[user]";
$proto12["m_srcTableName"] = "dbo.usugcc-_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto14["m_sql"] = "[table]";
$proto14["m_srcTableName"] = "dbo.usugcc-_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto16["m_sql"] = "[action]";
$proto16["m_srcTableName"] = "dbo.usugcc-_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "dbo.usugcc-_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.usugcc-_audit";
$proto21["m_srcTableName"] = "dbo.usugcc-_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.[usugcc-_audit]";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.usugcc-_audit";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dbo.usugcc-_audit",
	"m_srcTableName" => "dbo.usugcc-_audit"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.usugcc-_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usugcc__audit = createSqlQuery_usugcc__audit();


	
		;

							

$tdatausugcc__audit[".sqlquery"] = $queryData_usugcc__audit;



$tdatausugcc__audit[".hasEvents"] = false;

?>