<?php
$tdatauserprofile = array();
$tdatauserprofile[".searchableFields"] = array();
$tdatauserprofile[".ShortName"] = "userprofile";
$tdatauserprofile[".OwnerID"] = "";
$tdatauserprofile[".OriginalTable"] = "dbo.UserProfile";


$tdatauserprofile[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatauserprofile[".originalPagesByType"] = $tdatauserprofile[".pagesByType"];
$tdatauserprofile[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatauserprofile[".originalPages"] = $tdatauserprofile[".pages"];
$tdatauserprofile[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatauserprofile[".originalDefaultPages"] = $tdatauserprofile[".defaultPages"];

//	field labels
$fieldLabelsuserprofile = array();
$fieldToolTipsuserprofile = array();
$pageTitlesuserprofile = array();
$placeHoldersuserprofile = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsuserprofile["Spanish"] = array();
	$fieldToolTipsuserprofile["Spanish"] = array();
	$placeHoldersuserprofile["Spanish"] = array();
	$pageTitlesuserprofile["Spanish"] = array();
	$fieldLabelsuserprofile["Spanish"]["UserId"] = "User Id";
	$fieldToolTipsuserprofile["Spanish"]["UserId"] = "";
	$placeHoldersuserprofile["Spanish"]["UserId"] = "";
	$fieldLabelsuserprofile["Spanish"]["UserName"] = "User Name";
	$fieldToolTipsuserprofile["Spanish"]["UserName"] = "";
	$placeHoldersuserprofile["Spanish"]["UserName"] = "";
	$fieldLabelsuserprofile["Spanish"]["HorarioId"] = "Horario Id";
	$fieldToolTipsuserprofile["Spanish"]["HorarioId"] = "";
	$placeHoldersuserprofile["Spanish"]["HorarioId"] = "";
	$fieldLabelsuserprofile["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsuserprofile["Spanish"]["SeccionalId"] = "";
	$placeHoldersuserprofile["Spanish"]["SeccionalId"] = "";
	$fieldLabelsuserprofile["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsuserprofile["Spanish"]["AbogadoId"] = "";
	$placeHoldersuserprofile["Spanish"]["AbogadoId"] = "";
	$fieldLabelsuserprofile["Spanish"]["Email"] = "Email";
	$fieldToolTipsuserprofile["Spanish"]["Email"] = "";
	$placeHoldersuserprofile["Spanish"]["Email"] = "";
	$fieldLabelsuserprofile["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipsuserprofile["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersuserprofile["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsuserprofile["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsuserprofile["Spanish"]["Fecha"] = "";
	$placeHoldersuserprofile["Spanish"]["Fecha"] = "";
	$fieldLabelsuserprofile["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsuserprofile["Spanish"]["Nombre"] = "";
	$placeHoldersuserprofile["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipsuserprofile["Spanish"]))
		$tdatauserprofile[".isUseToolTips"] = true;
}


	$tdatauserprofile[".NCSearch"] = true;



$tdatauserprofile[".shortTableName"] = "userprofile";
$tdatauserprofile[".nSecOptions"] = 0;

$tdatauserprofile[".mainTableOwnerID"] = "";
$tdatauserprofile[".entityType"] = 0;
$tdatauserprofile[".connId"] = "GCC_at_S00001_CCAD01";


$tdatauserprofile[".strOriginalTableName"] = "dbo.UserProfile";

	



$tdatauserprofile[".showAddInPopup"] = false;

$tdatauserprofile[".showEditInPopup"] = false;

$tdatauserprofile[".showViewInPopup"] = false;

$tdatauserprofile[".listAjax"] = false;
//	temporary
//$tdatauserprofile[".listAjax"] = false;

	$tdatauserprofile[".audit"] = false;

	$tdatauserprofile[".locking"] = false;


$pages = $tdatauserprofile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauserprofile[".edit"] = true;
	$tdatauserprofile[".afterEditAction"] = 1;
	$tdatauserprofile[".closePopupAfterEdit"] = 1;
	$tdatauserprofile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauserprofile[".add"] = true;
$tdatauserprofile[".afterAddAction"] = 1;
$tdatauserprofile[".closePopupAfterAdd"] = 1;
$tdatauserprofile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauserprofile[".list"] = true;
}



$tdatauserprofile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauserprofile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauserprofile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauserprofile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauserprofile[".printFriendly"] = true;
}



$tdatauserprofile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauserprofile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauserprofile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauserprofile[".isUseAjaxSuggest"] = true;



																																																																																																																																																						

$tdatauserprofile[".ajaxCodeSnippetAdded"] = false;

$tdatauserprofile[".buttonsAdded"] = false;

$tdatauserprofile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauserprofile[".isUseTimeForSearch"] = false;


$tdatauserprofile[".badgeColor"] = "D2691E";


$tdatauserprofile[".allSearchFields"] = array();
$tdatauserprofile[".filterFields"] = array();
$tdatauserprofile[".requiredSearchFields"] = array();

$tdatauserprofile[".googleLikeFields"] = array();
$tdatauserprofile[".googleLikeFields"][] = "UserId";
$tdatauserprofile[".googleLikeFields"][] = "UserName";
$tdatauserprofile[".googleLikeFields"][] = "HorarioId";
$tdatauserprofile[".googleLikeFields"][] = "SeccionalId";
$tdatauserprofile[".googleLikeFields"][] = "AbogadoId";
$tdatauserprofile[".googleLikeFields"][] = "Email";
$tdatauserprofile[".googleLikeFields"][] = "CarteraTipoId";
$tdatauserprofile[".googleLikeFields"][] = "Fecha";
$tdatauserprofile[".googleLikeFields"][] = "Nombre";



$tdatauserprofile[".tableType"] = "list";

$tdatauserprofile[".printerPageOrientation"] = 0;
$tdatauserprofile[".nPrinterPageScale"] = 100;

$tdatauserprofile[".nPrinterSplitRecords"] = 40;

$tdatauserprofile[".geocodingEnabled"] = false;





$tdatauserprofile[".isResizeColumns"] = true;





$tdatauserprofile[".pageSize"] = 20;

$tdatauserprofile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatauserprofile[".strOrderBy"] = $tstrOrderBy;

$tdatauserprofile[".orderindexes"] = array();


$tdatauserprofile[".sqlHead"] = "SELECT UserId,  	UserName,  	HorarioId,  	SeccionalId,  	AbogadoId,  	Email,  	CarteraTipoId,  	Fecha,  	Nombre";
$tdatauserprofile[".sqlFrom"] = "FROM dbo.UserProfile";
$tdatauserprofile[".sqlWhereExpr"] = "";
$tdatauserprofile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauserprofile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauserprofile[".arrGroupsPerPage"] = $arrGPP;

$tdatauserprofile[".highlightSearchResults"] = true;

$tableKeysuserprofile = array();
$tableKeysuserprofile[] = "UserId";
$tdatauserprofile[".Keys"] = $tableKeysuserprofile;


$tdatauserprofile[".hideMobileList"] = array();




//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","UserId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatauserprofile["UserId"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "UserId";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","UserName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "UserName";

		$fdata["sourceSingle"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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


	$tdatauserprofile["UserName"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "UserName";
//	HorarioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HorarioId";
	$fdata["GoodName"] = "HorarioId";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","HorarioId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Horarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "HorarioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Horario";

	

	
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


	$tdatauserprofile["HorarioId"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "HorarioId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","SeccionalId");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdatauserprofile["SeccionalId"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "SeccionalId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Abogado";

	

	
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


	$tdatauserprofile["AbogadoId"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "AbogadoId";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatauserprofile["Email"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "Email";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoId";

	
	
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


	$tdatauserprofile["CarteraTipoId"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "CarteraTipoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

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


	$tdatauserprofile["Fecha"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "Fecha";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "dbo.UserProfile";
	$fdata["Label"] = GetFieldLabel("dbo_UserProfile","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["sourceSingle"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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


	$tdatauserprofile["Nombre"] = $fdata;
		$tdatauserprofile[".searchableFields"][] = "Nombre";


$tables_data["dbo.UserProfile"]=&$tdatauserprofile;
$field_labels["dbo_UserProfile"] = &$fieldLabelsuserprofile;
$fieldToolTips["dbo_UserProfile"] = &$fieldToolTipsuserprofile;
$placeHolders["dbo_UserProfile"] = &$placeHoldersuserprofile;
$page_titles["dbo_UserProfile"] = &$pageTitlesuserprofile;


changeTextControlsToDate( "dbo.UserProfile" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.UserProfile"] = array();
//	dbo.Auditorias
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Auditorias";
		$detailsParam["dOriginalTable"] = "dbo.Auditorias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "auditorias";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Auditorias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.UserProfile"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.UserProfile"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.UserProfile"][$dIndex]["masterKeys"][]="UserId";

				$detailsTablesData["dbo.UserProfile"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.UserProfile"][$dIndex]["detailKeys"][]="UserId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.UserProfile"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_userprofile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserId,  	UserName,  	HorarioId,  	SeccionalId,  	AbogadoId,  	Email,  	CarteraTipoId,  	Fecha,  	Nombre";
$proto0["m_strFrom"] = "FROM dbo.UserProfile";
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
	"m_strName" => "UserId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto6["m_sql"] = "UserId";
$proto6["m_srcTableName"] = "dbo.UserProfile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "dbo.UserProfile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "HorarioId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto10["m_sql"] = "HorarioId";
$proto10["m_srcTableName"] = "dbo.UserProfile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto12["m_sql"] = "SeccionalId";
$proto12["m_srcTableName"] = "dbo.UserProfile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto14["m_sql"] = "AbogadoId";
$proto14["m_srcTableName"] = "dbo.UserProfile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "dbo.UserProfile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto18["m_sql"] = "CarteraTipoId";
$proto18["m_srcTableName"] = "dbo.UserProfile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto20["m_sql"] = "Fecha";
$proto20["m_srcTableName"] = "dbo.UserProfile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "dbo.UserProfile",
	"m_srcTableName" => "dbo.UserProfile"
));

$proto22["m_sql"] = "Nombre";
$proto22["m_srcTableName"] = "dbo.UserProfile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "dbo.UserProfile";
$proto25["m_srcTableName"] = "dbo.UserProfile";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "UserId";
$proto25["m_columns"][] = "UserName";
$proto25["m_columns"][] = "HorarioId";
$proto25["m_columns"][] = "SeccionalId";
$proto25["m_columns"][] = "AbogadoId";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "CarteraTipoId";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Nombre";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "dbo.UserProfile";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "dbo.UserProfile";
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
$proto0["m_srcTableName"]="dbo.UserProfile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_userprofile = createSqlQuery_userprofile();


	
		;

									

$tdatauserprofile[".sqlquery"] = $queryData_userprofile;



$tdatauserprofile[".hasEvents"] = false;

?>