<?php
$tdatausugcc__users = array();
$tdatausugcc__users[".searchableFields"] = array();
$tdatausugcc__users[".ShortName"] = "usugcc__users";
$tdatausugcc__users[".OwnerID"] = "ID";
$tdatausugcc__users[".OriginalTable"] = "dbo.UsuGCC-_users";


$tdatausugcc__users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatausugcc__users[".originalPagesByType"] = $tdatausugcc__users[".pagesByType"];
$tdatausugcc__users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatausugcc__users[".originalPages"] = $tdatausugcc__users[".pages"];
$tdatausugcc__users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatausugcc__users[".originalDefaultPages"] = $tdatausugcc__users[".defaultPages"];

//	field labels
$fieldLabelsusugcc__users = array();
$fieldToolTipsusugcc__users = array();
$pageTitlesusugcc__users = array();
$placeHoldersusugcc__users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusugcc__users["Spanish"] = array();
	$fieldToolTipsusugcc__users["Spanish"] = array();
	$placeHoldersusugcc__users["Spanish"] = array();
	$pageTitlesusugcc__users["Spanish"] = array();
	$fieldLabelsusugcc__users["Spanish"]["ID"] = "ID";
	$fieldToolTipsusugcc__users["Spanish"]["ID"] = "";
	$placeHoldersusugcc__users["Spanish"]["ID"] = "";
	$fieldLabelsusugcc__users["Spanish"]["username"] = "Username";
	$fieldToolTipsusugcc__users["Spanish"]["username"] = "";
	$placeHoldersusugcc__users["Spanish"]["username"] = "";
	$fieldLabelsusugcc__users["Spanish"]["password"] = "Password";
	$fieldToolTipsusugcc__users["Spanish"]["password"] = "";
	$placeHoldersusugcc__users["Spanish"]["password"] = "";
	$fieldLabelsusugcc__users["Spanish"]["email"] = "Email";
	$fieldToolTipsusugcc__users["Spanish"]["email"] = "";
	$placeHoldersusugcc__users["Spanish"]["email"] = "";
	$fieldLabelsusugcc__users["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipsusugcc__users["Spanish"]["fullname"] = "";
	$placeHoldersusugcc__users["Spanish"]["fullname"] = "";
	$fieldLabelsusugcc__users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsusugcc__users["Spanish"]["groupid"] = "";
	$placeHoldersusugcc__users["Spanish"]["groupid"] = "";
	$fieldLabelsusugcc__users["Spanish"]["active"] = "Active";
	$fieldToolTipsusugcc__users["Spanish"]["active"] = "";
	$placeHoldersusugcc__users["Spanish"]["active"] = "";
	$fieldLabelsusugcc__users["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsusugcc__users["Spanish"]["ext_security_id"] = "";
	$placeHoldersusugcc__users["Spanish"]["ext_security_id"] = "";
	$fieldLabelsusugcc__users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsusugcc__users["Spanish"]["reset_token"] = "";
	$placeHoldersusugcc__users["Spanish"]["reset_token"] = "";
	$fieldLabelsusugcc__users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsusugcc__users["Spanish"]["reset_date"] = "";
	$placeHoldersusugcc__users["Spanish"]["reset_date"] = "";
	$fieldLabelsusugcc__users["Spanish"]["apikey"] = "Apikey";
	$fieldToolTipsusugcc__users["Spanish"]["apikey"] = "";
	$placeHoldersusugcc__users["Spanish"]["apikey"] = "";
	if (count($fieldToolTipsusugcc__users["Spanish"]))
		$tdatausugcc__users[".isUseToolTips"] = true;
}


	$tdatausugcc__users[".NCSearch"] = true;



$tdatausugcc__users[".shortTableName"] = "usugcc__users";
$tdatausugcc__users[".nSecOptions"] = 0;

$tdatausugcc__users[".mainTableOwnerID"] = "ID";
$tdatausugcc__users[".entityType"] = 0;
$tdatausugcc__users[".connId"] = "GCC_at_S00001_CCAD01";


$tdatausugcc__users[".strOriginalTableName"] = "dbo.UsuGCC-_users";

	



$tdatausugcc__users[".showAddInPopup"] = false;

$tdatausugcc__users[".showEditInPopup"] = false;

$tdatausugcc__users[".showViewInPopup"] = false;

$tdatausugcc__users[".listAjax"] = false;
//	temporary
//$tdatausugcc__users[".listAjax"] = false;

	$tdatausugcc__users[".audit"] = true;

	$tdatausugcc__users[".locking"] = false;


$pages = $tdatausugcc__users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausugcc__users[".edit"] = true;
	$tdatausugcc__users[".afterEditAction"] = 1;
	$tdatausugcc__users[".closePopupAfterEdit"] = 1;
	$tdatausugcc__users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausugcc__users[".add"] = true;
$tdatausugcc__users[".afterAddAction"] = 1;
$tdatausugcc__users[".closePopupAfterAdd"] = 1;
$tdatausugcc__users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausugcc__users[".list"] = true;
}



$tdatausugcc__users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausugcc__users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausugcc__users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausugcc__users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausugcc__users[".printFriendly"] = true;
}



$tdatausugcc__users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausugcc__users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausugcc__users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausugcc__users[".isUseAjaxSuggest"] = true;



																																																																																																																																																						

$tdatausugcc__users[".ajaxCodeSnippetAdded"] = false;

$tdatausugcc__users[".buttonsAdded"] = false;

$tdatausugcc__users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausugcc__users[".isUseTimeForSearch"] = false;


$tdatausugcc__users[".badgeColor"] = "E07878";


$tdatausugcc__users[".allSearchFields"] = array();
$tdatausugcc__users[".filterFields"] = array();
$tdatausugcc__users[".requiredSearchFields"] = array();

$tdatausugcc__users[".googleLikeFields"] = array();
$tdatausugcc__users[".googleLikeFields"][] = "ID";
$tdatausugcc__users[".googleLikeFields"][] = "username";
$tdatausugcc__users[".googleLikeFields"][] = "password";
$tdatausugcc__users[".googleLikeFields"][] = "email";
$tdatausugcc__users[".googleLikeFields"][] = "fullname";
$tdatausugcc__users[".googleLikeFields"][] = "groupid";
$tdatausugcc__users[".googleLikeFields"][] = "active";
$tdatausugcc__users[".googleLikeFields"][] = "ext_security_id";
$tdatausugcc__users[".googleLikeFields"][] = "apikey";



$tdatausugcc__users[".tableType"] = "list";

$tdatausugcc__users[".printerPageOrientation"] = 0;
$tdatausugcc__users[".nPrinterPageScale"] = 100;

$tdatausugcc__users[".nPrinterSplitRecords"] = 40;

$tdatausugcc__users[".geocodingEnabled"] = false;





$tdatausugcc__users[".isResizeColumns"] = true;





$tdatausugcc__users[".pageSize"] = 20;

$tdatausugcc__users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausugcc__users[".strOrderBy"] = $tstrOrderBy;

$tdatausugcc__users[".orderindexes"] = array();


$tdatausugcc__users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	reset_token,  	reset_date,  	apikey";
$tdatausugcc__users[".sqlFrom"] = "FROM dbo.[UsuGCC-_users]";
$tdatausugcc__users[".sqlWhereExpr"] = "";
$tdatausugcc__users[".sqlTail"] = "";

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
$tdatausugcc__users[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausugcc__users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausugcc__users[".arrGroupsPerPage"] = $arrGPP;

$tdatausugcc__users[".highlightSearchResults"] = true;

$tableKeysusugcc__users = array();
$tableKeysusugcc__users[] = "ID";
$tdatausugcc__users[".Keys"] = $tableKeysusugcc__users;


$tdatausugcc__users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatausugcc__users["ID"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatausugcc__users["username"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatausugcc__users["password"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatausugcc__users["email"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatausugcc__users["fullname"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
	$edata["LookupTable"] = "dbo.UsuGCC-uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";

	

	
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


	$tdatausugcc__users["groupid"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatausugcc__users["active"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatausugcc__users["ext_security_id"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "ext_security_id";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","reset_token");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatausugcc__users["reset_token"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatausugcc__users["reset_date"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "reset_date";
//	apikey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "apikey";
	$fdata["GoodName"] = "apikey";
	$fdata["ownerTable"] = "dbo.UsuGCC-_users";
	$fdata["Label"] = GetFieldLabel("dbo_UsuGCC__users","apikey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apikey";

		$fdata["sourceSingle"] = "apikey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apikey";

	
	
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


	$tdatausugcc__users["apikey"] = $fdata;
		$tdatausugcc__users[".searchableFields"][] = "apikey";


$tables_data["dbo.UsuGCC-_users"]=&$tdatausugcc__users;
$field_labels["dbo_UsuGCC__users"] = &$fieldLabelsusugcc__users;
$fieldToolTips["dbo_UsuGCC__users"] = &$fieldToolTipsusugcc__users;
$placeHolders["dbo_UsuGCC__users"] = &$placeHoldersusugcc__users;
$page_titles["dbo_UsuGCC__users"] = &$pageTitlesusugcc__users;


changeTextControlsToDate( "dbo.UsuGCC-_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UsuGCC-_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UsuGCC-_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usugcc__users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	reset_token,  	reset_date,  	apikey";
$proto0["m_strFrom"] = "FROM dbo.[UsuGCC-_users]";
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
	"m_strName" => "ID",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto22["m_sql"] = "reset_token";
$proto22["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto24["m_sql"] = "reset_date";
$proto24["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "apikey",
	"m_strTable" => "dbo.UsuGCC-_users",
	"m_srcTableName" => "dbo.UsuGCC-_users"
));

$proto26["m_sql"] = "apikey";
$proto26["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "dbo.UsuGCC-_users";
$proto29["m_srcTableName"] = "dbo.UsuGCC-_users";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "username";
$proto29["m_columns"][] = "password";
$proto29["m_columns"][] = "email";
$proto29["m_columns"][] = "fullname";
$proto29["m_columns"][] = "groupid";
$proto29["m_columns"][] = "active";
$proto29["m_columns"][] = "ext_security_id";
$proto29["m_columns"][] = "reset_token";
$proto29["m_columns"][] = "reset_date";
$proto29["m_columns"][] = "apikey";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "dbo.[UsuGCC-_users]";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "dbo.UsuGCC-_users";
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
$proto0["m_srcTableName"]="dbo.UsuGCC-_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usugcc__users = createSqlQuery_usugcc__users();


	
		;

											

$tdatausugcc__users[".sqlquery"] = $queryData_usugcc__users;



$tdatausugcc__users[".hasEvents"] = false;

?>