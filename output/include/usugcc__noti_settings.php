<?php
$tdatausugcc__noti = array();
$tdatausugcc__noti[".searchableFields"] = array();
$tdatausugcc__noti[".ShortName"] = "usugcc__noti";
$tdatausugcc__noti[".OwnerID"] = "";
$tdatausugcc__noti[".OriginalTable"] = "dbo.usugcc__noti";


$tdatausugcc__noti[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausugcc__noti[".originalPagesByType"] = $tdatausugcc__noti[".pagesByType"];
$tdatausugcc__noti[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausugcc__noti[".originalPages"] = $tdatausugcc__noti[".pages"];
$tdatausugcc__noti[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausugcc__noti[".originalDefaultPages"] = $tdatausugcc__noti[".defaultPages"];

//	field labels
$fieldLabelsusugcc__noti = array();
$fieldToolTipsusugcc__noti = array();
$pageTitlesusugcc__noti = array();
$placeHoldersusugcc__noti = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusugcc__noti["Spanish"] = array();
	$fieldToolTipsusugcc__noti["Spanish"] = array();
	$placeHoldersusugcc__noti["Spanish"] = array();
	$pageTitlesusugcc__noti["Spanish"] = array();
	$fieldLabelsusugcc__noti["Spanish"]["id"] = "Id";
	$fieldToolTipsusugcc__noti["Spanish"]["id"] = "";
	$placeHoldersusugcc__noti["Spanish"]["id"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["message"] = "Message";
	$fieldToolTipsusugcc__noti["Spanish"]["message"] = "";
	$placeHoldersusugcc__noti["Spanish"]["message"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["user"] = "User";
	$fieldToolTipsusugcc__noti["Spanish"]["user"] = "";
	$placeHoldersusugcc__noti["Spanish"]["user"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["provider"] = "Provider";
	$fieldToolTipsusugcc__noti["Spanish"]["provider"] = "";
	$placeHoldersusugcc__noti["Spanish"]["provider"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["title"] = "Title";
	$fieldToolTipsusugcc__noti["Spanish"]["title"] = "";
	$placeHoldersusugcc__noti["Spanish"]["title"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["url"] = "Url";
	$fieldToolTipsusugcc__noti["Spanish"]["url"] = "";
	$placeHoldersusugcc__noti["Spanish"]["url"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["icon"] = "Icon";
	$fieldToolTipsusugcc__noti["Spanish"]["icon"] = "";
	$placeHoldersusugcc__noti["Spanish"]["icon"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["created"] = "Created";
	$fieldToolTipsusugcc__noti["Spanish"]["created"] = "";
	$placeHoldersusugcc__noti["Spanish"]["created"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["expire"] = "Expire";
	$fieldToolTipsusugcc__noti["Spanish"]["expire"] = "";
	$placeHoldersusugcc__noti["Spanish"]["expire"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["type"] = "Type";
	$fieldToolTipsusugcc__noti["Spanish"]["type"] = "";
	$placeHoldersusugcc__noti["Spanish"]["type"] = "";
	$fieldLabelsusugcc__noti["Spanish"]["group"] = "Group";
	$fieldToolTipsusugcc__noti["Spanish"]["group"] = "";
	$placeHoldersusugcc__noti["Spanish"]["group"] = "";
	if (count($fieldToolTipsusugcc__noti["Spanish"]))
		$tdatausugcc__noti[".isUseToolTips"] = true;
}


	$tdatausugcc__noti[".NCSearch"] = true;



$tdatausugcc__noti[".shortTableName"] = "usugcc__noti";
$tdatausugcc__noti[".nSecOptions"] = 0;

$tdatausugcc__noti[".mainTableOwnerID"] = "";
$tdatausugcc__noti[".entityType"] = 0;
$tdatausugcc__noti[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausugcc__noti[".strOriginalTableName"] = "dbo.usugcc__noti";

	



$tdatausugcc__noti[".showAddInPopup"] = false;

$tdatausugcc__noti[".showEditInPopup"] = false;

$tdatausugcc__noti[".showViewInPopup"] = false;

$tdatausugcc__noti[".listAjax"] = false;
//	temporary
//$tdatausugcc__noti[".listAjax"] = false;

	$tdatausugcc__noti[".audit"] = false;

	$tdatausugcc__noti[".locking"] = false;


$pages = $tdatausugcc__noti[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausugcc__noti[".edit"] = true;
	$tdatausugcc__noti[".afterEditAction"] = 1;
	$tdatausugcc__noti[".closePopupAfterEdit"] = 1;
	$tdatausugcc__noti[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausugcc__noti[".add"] = true;
$tdatausugcc__noti[".afterAddAction"] = 1;
$tdatausugcc__noti[".closePopupAfterAdd"] = 1;
$tdatausugcc__noti[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausugcc__noti[".list"] = true;
}



$tdatausugcc__noti[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausugcc__noti[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausugcc__noti[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausugcc__noti[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausugcc__noti[".printFriendly"] = true;
}



$tdatausugcc__noti[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausugcc__noti[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausugcc__noti[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausugcc__noti[".isUseAjaxSuggest"] = true;



																																																																											

$tdatausugcc__noti[".ajaxCodeSnippetAdded"] = false;

$tdatausugcc__noti[".buttonsAdded"] = false;

$tdatausugcc__noti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausugcc__noti[".isUseTimeForSearch"] = false;


$tdatausugcc__noti[".badgeColor"] = "6493EA";


$tdatausugcc__noti[".allSearchFields"] = array();
$tdatausugcc__noti[".filterFields"] = array();
$tdatausugcc__noti[".requiredSearchFields"] = array();

$tdatausugcc__noti[".googleLikeFields"] = array();
$tdatausugcc__noti[".googleLikeFields"][] = "id";
$tdatausugcc__noti[".googleLikeFields"][] = "message";
$tdatausugcc__noti[".googleLikeFields"][] = "user";
$tdatausugcc__noti[".googleLikeFields"][] = "provider";
$tdatausugcc__noti[".googleLikeFields"][] = "title";
$tdatausugcc__noti[".googleLikeFields"][] = "url";
$tdatausugcc__noti[".googleLikeFields"][] = "icon";
$tdatausugcc__noti[".googleLikeFields"][] = "created";
$tdatausugcc__noti[".googleLikeFields"][] = "expire";
$tdatausugcc__noti[".googleLikeFields"][] = "type";
$tdatausugcc__noti[".googleLikeFields"][] = "group";



$tdatausugcc__noti[".tableType"] = "list";

$tdatausugcc__noti[".printerPageOrientation"] = 0;
$tdatausugcc__noti[".nPrinterPageScale"] = 100;

$tdatausugcc__noti[".nPrinterSplitRecords"] = 40;

$tdatausugcc__noti[".geocodingEnabled"] = false;










$tdatausugcc__noti[".pageSize"] = 20;

$tdatausugcc__noti[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausugcc__noti[".strOrderBy"] = $tstrOrderBy;

$tdatausugcc__noti[".orderindexes"] = array();


$tdatausugcc__noti[".sqlHead"] = "SELECT id,  	message,  	[user],  	provider,  	title,  	url,  	icon,  	created,  	expire,  	[type],  	[group]";
$tdatausugcc__noti[".sqlFrom"] = "FROM dbo.usugcc__noti";
$tdatausugcc__noti[".sqlWhereExpr"] = "";
$tdatausugcc__noti[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausugcc__noti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausugcc__noti[".arrGroupsPerPage"] = $arrGPP;

$tdatausugcc__noti[".highlightSearchResults"] = true;

$tableKeysusugcc__noti = array();
$tableKeysusugcc__noti[] = "id";
$tdatausugcc__noti[".Keys"] = $tableKeysusugcc__noti;


$tdatausugcc__noti[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","id");
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


	$tdatausugcc__noti["id"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "id";
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "message";

		$fdata["sourceSingle"] = "message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message";

	
	
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


	$tdatausugcc__noti["message"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "message";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","user");
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


	$tdatausugcc__noti["user"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "user";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

		$fdata["sourceSingle"] = "provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provider";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatausugcc__noti["provider"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "provider";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	$tdatausugcc__noti["title"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "title";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","url");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "url";

		$fdata["sourceSingle"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
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


	$tdatausugcc__noti["url"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "url";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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


	$tdatausugcc__noti["icon"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "icon";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatausugcc__noti["created"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "created";
//	expire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expire";
	$fdata["GoodName"] = "expire";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","expire");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "expire";

		$fdata["sourceSingle"] = "expire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expire";

	
	
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


	$tdatausugcc__noti["expire"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "expire";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[type]";

	
	
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


	$tdatausugcc__noti["type"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "type";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "dbo.usugcc__noti";
	$fdata["Label"] = GetFieldLabel("dbo_usugcc__noti","group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group";

		$fdata["sourceSingle"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[group]";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatausugcc__noti["group"] = $fdata;
		$tdatausugcc__noti[".searchableFields"][] = "group";


$tables_data["dbo.usugcc__noti"]=&$tdatausugcc__noti;
$field_labels["dbo_usugcc__noti"] = &$fieldLabelsusugcc__noti;
$fieldToolTips["dbo_usugcc__noti"] = &$fieldToolTipsusugcc__noti;
$placeHolders["dbo_usugcc__noti"] = &$placeHoldersusugcc__noti;
$page_titles["dbo_usugcc__noti"] = &$pageTitlesusugcc__noti;


changeTextControlsToDate( "dbo.usugcc__noti" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.usugcc__noti"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.usugcc__noti"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usugcc__noti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	message,  	[user],  	provider,  	title,  	url,  	icon,  	created,  	expire,  	[type],  	[group]";
$proto0["m_strFrom"] = "FROM dbo.usugcc__noti";
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
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.usugcc__noti";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto8["m_sql"] = "message";
$proto8["m_srcTableName"] = "dbo.usugcc__noti";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto10["m_sql"] = "[user]";
$proto10["m_srcTableName"] = "dbo.usugcc__noti";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "provider",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto12["m_sql"] = "provider";
$proto12["m_srcTableName"] = "dbo.usugcc__noti";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto14["m_sql"] = "title";
$proto14["m_srcTableName"] = "dbo.usugcc__noti";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto16["m_sql"] = "url";
$proto16["m_srcTableName"] = "dbo.usugcc__noti";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto18["m_sql"] = "icon";
$proto18["m_srcTableName"] = "dbo.usugcc__noti";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto20["m_sql"] = "created";
$proto20["m_srcTableName"] = "dbo.usugcc__noti";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "expire",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto22["m_sql"] = "expire";
$proto22["m_srcTableName"] = "dbo.usugcc__noti";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto24["m_sql"] = "[type]";
$proto24["m_srcTableName"] = "dbo.usugcc__noti";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "dbo.usugcc__noti",
	"m_srcTableName" => "dbo.usugcc__noti"
));

$proto26["m_sql"] = "[group]";
$proto26["m_srcTableName"] = "dbo.usugcc__noti";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.usugcc__noti";
$proto29["m_srcTableName"] = "dbo.usugcc__noti";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "message";
$proto29["m_columns"][] = "user";
$proto29["m_columns"][] = "provider";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "url";
$proto29["m_columns"][] = "icon";
$proto29["m_columns"][] = "created";
$proto29["m_columns"][] = "expire";
$proto29["m_columns"][] = "type";
$proto29["m_columns"][] = "group";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.usugcc__noti";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.usugcc__noti";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.usugcc__noti";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usugcc__noti = createSqlQuery_usugcc__noti();


	
		;

											

$tdatausugcc__noti[".sqlquery"] = $queryData_usugcc__noti;



$tdatausugcc__noti[".hasEvents"] = false;

?>