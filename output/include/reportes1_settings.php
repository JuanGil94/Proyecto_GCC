<?php
$tdatareportes1 = array();
$tdatareportes1[".searchableFields"] = array();
$tdatareportes1[".ShortName"] = "reportes1";
$tdatareportes1[".OwnerID"] = "";
$tdatareportes1[".OriginalTable"] = "dbo.Reportes";


$tdatareportes1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareportes1[".originalPagesByType"] = $tdatareportes1[".pagesByType"];
$tdatareportes1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareportes1[".originalPages"] = $tdatareportes1[".pages"];
$tdatareportes1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareportes1[".originalDefaultPages"] = $tdatareportes1[".defaultPages"];

//	field labels
$fieldLabelsreportes1 = array();
$fieldToolTipsreportes1 = array();
$pageTitlesreportes1 = array();
$placeHoldersreportes1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreportes1["Spanish"] = array();
	$fieldToolTipsreportes1["Spanish"] = array();
	$placeHoldersreportes1["Spanish"] = array();
	$pageTitlesreportes1["Spanish"] = array();
	$fieldLabelsreportes1["Spanish"]["ReporteId"] = "Reporte Id";
	$fieldToolTipsreportes1["Spanish"]["ReporteId"] = "";
	$placeHoldersreportes1["Spanish"]["ReporteId"] = "";
	$fieldLabelsreportes1["Spanish"]["Reporte"] = "Reporte";
	$fieldToolTipsreportes1["Spanish"]["Reporte"] = "";
	$placeHoldersreportes1["Spanish"]["Reporte"] = "";
	$fieldLabelsreportes1["Spanish"]["OficioId"] = "Oficio";
	$fieldToolTipsreportes1["Spanish"]["OficioId"] = "";
	$placeHoldersreportes1["Spanish"]["OficioId"] = "";
	$fieldLabelsreportes1["Spanish"]["Dias"] = "No.Dias";
	$fieldToolTipsreportes1["Spanish"]["Dias"] = "";
	$placeHoldersreportes1["Spanish"]["Dias"] = "";
	$fieldLabelsreportes1["Spanish"]["Minimo"] = "Cuantía Mínima";
	$fieldToolTipsreportes1["Spanish"]["Minimo"] = "";
	$placeHoldersreportes1["Spanish"]["Minimo"] = "";
	if (count($fieldToolTipsreportes1["Spanish"]))
		$tdatareportes1[".isUseToolTips"] = true;
}


	$tdatareportes1[".NCSearch"] = true;



$tdatareportes1[".shortTableName"] = "reportes1";
$tdatareportes1[".nSecOptions"] = 0;

$tdatareportes1[".mainTableOwnerID"] = "";
$tdatareportes1[".entityType"] = 1;
$tdatareportes1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareportes1[".strOriginalTableName"] = "dbo.Reportes";

	



$tdatareportes1[".showAddInPopup"] = false;

$tdatareportes1[".showEditInPopup"] = false;

$tdatareportes1[".showViewInPopup"] = false;

$tdatareportes1[".listAjax"] = false;
//	temporary
//$tdatareportes1[".listAjax"] = false;

	$tdatareportes1[".audit"] = false;

	$tdatareportes1[".locking"] = false;


$pages = $tdatareportes1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportes1[".edit"] = true;
	$tdatareportes1[".afterEditAction"] = 1;
	$tdatareportes1[".closePopupAfterEdit"] = 1;
	$tdatareportes1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportes1[".add"] = true;
$tdatareportes1[".afterAddAction"] = 1;
$tdatareportes1[".closePopupAfterAdd"] = 1;
$tdatareportes1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportes1[".list"] = true;
}



$tdatareportes1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportes1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportes1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportes1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportes1[".printFriendly"] = true;
}



$tdatareportes1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportes1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportes1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportes1[".isUseAjaxSuggest"] = true;



															

$tdatareportes1[".ajaxCodeSnippetAdded"] = false;

$tdatareportes1[".buttonsAdded"] = false;

$tdatareportes1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportes1[".isUseTimeForSearch"] = false;


$tdatareportes1[".badgeColor"] = "2F4F4F";


$tdatareportes1[".allSearchFields"] = array();
$tdatareportes1[".filterFields"] = array();
$tdatareportes1[".requiredSearchFields"] = array();

$tdatareportes1[".googleLikeFields"] = array();
$tdatareportes1[".googleLikeFields"][] = "ReporteId";
$tdatareportes1[".googleLikeFields"][] = "Reporte";
$tdatareportes1[".googleLikeFields"][] = "OficioId";
$tdatareportes1[".googleLikeFields"][] = "Dias";
$tdatareportes1[".googleLikeFields"][] = "Minimo";



$tdatareportes1[".tableType"] = "list";

$tdatareportes1[".printerPageOrientation"] = 0;
$tdatareportes1[".nPrinterPageScale"] = 100;

$tdatareportes1[".nPrinterSplitRecords"] = 40;

$tdatareportes1[".geocodingEnabled"] = false;










$tdatareportes1[".pageSize"] = 20;

$tdatareportes1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportes1[".strOrderBy"] = $tstrOrderBy;

$tdatareportes1[".orderindexes"] = array();


$tdatareportes1[".sqlHead"] = "SELECT ReporteId,  	Reporte,  	OficioId,  	Dias,  	Minimo";
$tdatareportes1[".sqlFrom"] = "FROM dbo.Reportes";
$tdatareportes1[".sqlWhereExpr"] = "";
$tdatareportes1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportes1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportes1[".arrGroupsPerPage"] = $arrGPP;

$tdatareportes1[".highlightSearchResults"] = true;

$tableKeysreportes1 = array();
$tableKeysreportes1[] = "ReporteId";
$tdatareportes1[".Keys"] = $tableKeysreportes1;


$tdatareportes1[".hideMobileList"] = array();




//	ReporteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ReporteId";
	$fdata["GoodName"] = "ReporteId";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes1","ReporteId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ReporteId";

		$fdata["sourceSingle"] = "ReporteId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReporteId";

	
	
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


	$tdatareportes1["ReporteId"] = $fdata;
		$tdatareportes1[".searchableFields"][] = "ReporteId";
//	Reporte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Reporte";
	$fdata["GoodName"] = "Reporte";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes1","Reporte");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Reporte";

		$fdata["sourceSingle"] = "Reporte";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reporte";

	
	
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


	$tdatareportes1["Reporte"] = $fdata;
		$tdatareportes1[".searchableFields"][] = "Reporte";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes1","OficioId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OficioId";

		$fdata["sourceSingle"] = "OficioId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OficioId";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "dbo.Oficios";
	$edata["LookupConnId"] = "GCC_at_S00001_CCAD01";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Oficio";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatareportes1["OficioId"] = $fdata;
		$tdatareportes1[".searchableFields"][] = "OficioId";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes1","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dias";

	
	
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


	$tdatareportes1["Dias"] = $fdata;
		$tdatareportes1[".searchableFields"][] = "Dias";
//	Minimo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Minimo";
	$fdata["GoodName"] = "Minimo";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes1","Minimo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Minimo";

		$fdata["sourceSingle"] = "Minimo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minimo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	$tdatareportes1["Minimo"] = $fdata;
		$tdatareportes1[".searchableFields"][] = "Minimo";


$tables_data["dbo.Reportes1"]=&$tdatareportes1;
$field_labels["dbo_Reportes1"] = &$fieldLabelsreportes1;
$fieldToolTips["dbo_Reportes1"] = &$fieldToolTipsreportes1;
$placeHolders["dbo_Reportes1"] = &$placeHoldersreportes1;
$page_titles["dbo_Reportes1"] = &$pageTitlesreportes1;


changeTextControlsToDate( "dbo.Reportes1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Reportes1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Reportes1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportes1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ReporteId,  	Reporte,  	OficioId,  	Dias,  	Minimo";
$proto0["m_strFrom"] = "FROM dbo.Reportes";
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
	"m_strName" => "ReporteId",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes1"
));

$proto6["m_sql"] = "ReporteId";
$proto6["m_srcTableName"] = "dbo.Reportes1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Reporte",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes1"
));

$proto8["m_sql"] = "Reporte";
$proto8["m_srcTableName"] = "dbo.Reportes1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes1"
));

$proto10["m_sql"] = "OficioId";
$proto10["m_srcTableName"] = "dbo.Reportes1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes1"
));

$proto12["m_sql"] = "Dias";
$proto12["m_srcTableName"] = "dbo.Reportes1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Minimo",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes1"
));

$proto14["m_sql"] = "Minimo";
$proto14["m_srcTableName"] = "dbo.Reportes1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Reportes";
$proto17["m_srcTableName"] = "dbo.Reportes1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ReporteId";
$proto17["m_columns"][] = "Reporte";
$proto17["m_columns"][] = "OficioId";
$proto17["m_columns"][] = "Dias";
$proto17["m_columns"][] = "Minimo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Reportes";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Reportes1";
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
$proto0["m_srcTableName"]="dbo.Reportes1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportes1 = createSqlQuery_reportes1();


	
		;

					

$tdatareportes1[".sqlquery"] = $queryData_reportes1;



$tdatareportes1[".hasEvents"] = false;

?>