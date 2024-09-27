<?php
$tdataconceptos2 = array();
$tdataconceptos2[".searchableFields"] = array();
$tdataconceptos2[".ShortName"] = "conceptos2";
$tdataconceptos2[".OwnerID"] = "";
$tdataconceptos2[".OriginalTable"] = "dbo.Conceptos";


$tdataconceptos2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconceptos2[".originalPagesByType"] = $tdataconceptos2[".pagesByType"];
$tdataconceptos2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconceptos2[".originalPages"] = $tdataconceptos2[".pages"];
$tdataconceptos2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconceptos2[".originalDefaultPages"] = $tdataconceptos2[".defaultPages"];

//	field labels
$fieldLabelsconceptos2 = array();
$fieldToolTipsconceptos2 = array();
$pageTitlesconceptos2 = array();
$placeHoldersconceptos2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos2["Spanish"] = array();
	$fieldToolTipsconceptos2["Spanish"] = array();
	$placeHoldersconceptos2["Spanish"] = array();
	$pageTitlesconceptos2["Spanish"] = array();
	$fieldLabelsconceptos2["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsconceptos2["Spanish"]["Concepto"] = "";
	$placeHoldersconceptos2["Spanish"]["Concepto"] = "";
	$fieldLabelsconceptos2["Spanish"]["ConceptoId2"] = "Concepto Id2";
	$fieldToolTipsconceptos2["Spanish"]["ConceptoId2"] = "";
	$placeHoldersconceptos2["Spanish"]["ConceptoId2"] = "";
	$fieldLabelsconceptos2["Spanish"]["ConceptoId"] = "Concepto Id";
	$fieldToolTipsconceptos2["Spanish"]["ConceptoId"] = "";
	$placeHoldersconceptos2["Spanish"]["ConceptoId"] = "";
	if (count($fieldToolTipsconceptos2["Spanish"]))
		$tdataconceptos2[".isUseToolTips"] = true;
}


	$tdataconceptos2[".NCSearch"] = true;



$tdataconceptos2[".shortTableName"] = "conceptos2";
$tdataconceptos2[".nSecOptions"] = 0;

$tdataconceptos2[".mainTableOwnerID"] = "";
$tdataconceptos2[".entityType"] = 1;
$tdataconceptos2[".connId"] = "GCC_at_S00001_CCAD01";


$tdataconceptos2[".strOriginalTableName"] = "dbo.Conceptos";

	



$tdataconceptos2[".showAddInPopup"] = false;

$tdataconceptos2[".showEditInPopup"] = false;

$tdataconceptos2[".showViewInPopup"] = false;

$tdataconceptos2[".listAjax"] = false;
//	temporary
//$tdataconceptos2[".listAjax"] = false;

	$tdataconceptos2[".audit"] = true;

	$tdataconceptos2[".locking"] = false;


$pages = $tdataconceptos2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos2[".edit"] = true;
	$tdataconceptos2[".afterEditAction"] = 1;
	$tdataconceptos2[".closePopupAfterEdit"] = 1;
	$tdataconceptos2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos2[".add"] = true;
$tdataconceptos2[".afterAddAction"] = 1;
$tdataconceptos2[".closePopupAfterAdd"] = 1;
$tdataconceptos2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos2[".list"] = true;
}



$tdataconceptos2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos2[".printFriendly"] = true;
}



$tdataconceptos2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos2[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																		

$tdataconceptos2[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos2[".buttonsAdded"] = false;

$tdataconceptos2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos2[".isUseTimeForSearch"] = false;


$tdataconceptos2[".badgeColor"] = "008B8B";


$tdataconceptos2[".allSearchFields"] = array();
$tdataconceptos2[".filterFields"] = array();
$tdataconceptos2[".requiredSearchFields"] = array();

$tdataconceptos2[".googleLikeFields"] = array();
$tdataconceptos2[".googleLikeFields"][] = "ConceptoId";
$tdataconceptos2[".googleLikeFields"][] = "Concepto";
$tdataconceptos2[".googleLikeFields"][] = "ConceptoId2";



$tdataconceptos2[".tableType"] = "list";

$tdataconceptos2[".printerPageOrientation"] = 0;
$tdataconceptos2[".nPrinterPageScale"] = 100;

$tdataconceptos2[".nPrinterSplitRecords"] = 40;

$tdataconceptos2[".geocodingEnabled"] = false;





$tdataconceptos2[".isResizeColumns"] = true;





$tdataconceptos2[".pageSize"] = 20;

$tdataconceptos2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconceptos2[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos2[".orderindexes"] = array();


$tdataconceptos2[".sqlHead"] = "SELECT ' ' AS [ConceptoId],  ' ' AS Concepto,  ' ' AS [ConceptoId2]  UNION ALL SELECT ConceptoId AS ConceptoId,  Concepto AS Concepto1,  ConceptoId AS ConceptoId11";
$tdataconceptos2[".sqlFrom"] = "FROM dbo.Conceptos";
$tdataconceptos2[".sqlWhereExpr"] = "";
$tdataconceptos2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos2[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos2[".highlightSearchResults"] = true;

$tableKeysconceptos2 = array();
$tdataconceptos2[".Keys"] = $tableKeysconceptos2;


$tdataconceptos2[".hideMobileList"] = array();




//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos2","ConceptoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["FullName"] = "ConceptoId";

	
	
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


	$tdataconceptos2["ConceptoId"] = $fdata;
		$tdataconceptos2[".searchableFields"][] = "ConceptoId";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos2","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["sourceSingle"] = "Concepto";

		$fdata["FullName"] = "Concepto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataconceptos2["Concepto"] = $fdata;
		$tdataconceptos2[".searchableFields"][] = "Concepto";
//	ConceptoId2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ConceptoId2";
	$fdata["GoodName"] = "ConceptoId2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Conceptos2","ConceptoId2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId2";

	
		$fdata["FullName"] = "ConceptoId2";

	
	
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


	$tdataconceptos2["ConceptoId2"] = $fdata;
		$tdataconceptos2[".searchableFields"][] = "ConceptoId2";


$tables_data["dbo.Conceptos2"]=&$tdataconceptos2;
$field_labels["dbo_Conceptos2"] = &$fieldLabelsconceptos2;
$fieldToolTips["dbo_Conceptos2"] = &$fieldToolTipsconceptos2;
$placeHolders["dbo_Conceptos2"] = &$placeHoldersconceptos2;
$page_titles["dbo_Conceptos2"] = &$pageTitlesconceptos2;


changeTextControlsToDate( "dbo.Conceptos2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Conceptos2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Conceptos2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_conceptos2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "' ' AS [ConceptoId],  ' ' AS Concepto,  ' ' AS [ConceptoId2]  UNION ALL SELECT ConceptoId AS ConceptoId,  Concepto AS Concepto1,  ConceptoId AS ConceptoId11";
$proto0["m_strFrom"] = "FROM dbo.Conceptos";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto6["m_sql"] = "' '";
$proto6["m_srcTableName"] = "dbo.Conceptos2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "ConceptoId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto8["m_sql"] = "' '";
$proto8["m_srcTableName"] = "dbo.Conceptos2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Concepto";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' AS [ConceptoId2]  UNION ALL SELECT ConceptoId"
));

$proto10["m_sql"] = "' ' AS [ConceptoId2]  UNION ALL SELECT ConceptoId";
$proto10["m_srcTableName"] = "dbo.Conceptos2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "ConceptoId";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos2"
));

$proto12["m_sql"] = "Concepto";
$proto12["m_srcTableName"] = "dbo.Conceptos2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Concepto1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Conceptos",
	"m_srcTableName" => "dbo.Conceptos2"
));

$proto14["m_sql"] = "ConceptoId";
$proto14["m_srcTableName"] = "dbo.Conceptos2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "ConceptoId11";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Conceptos";
$proto17["m_srcTableName"] = "dbo.Conceptos2";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ConceptoId";
$proto17["m_columns"][] = "Concepto";
$proto17["m_columns"][] = "Activo";
$proto17["m_columns"][] = "Cuenta";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Conceptos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Conceptos2";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Conceptos2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos2 = createSqlQuery_conceptos2();


	
		;

			

$tdataconceptos2[".sqlquery"] = $queryData_conceptos2;



$tdataconceptos2[".hasEvents"] = false;

?>