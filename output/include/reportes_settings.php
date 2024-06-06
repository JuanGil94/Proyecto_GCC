<?php
$tdatareportes = array();
$tdatareportes[".searchableFields"] = array();
$tdatareportes[".ShortName"] = "reportes";
$tdatareportes[".OwnerID"] = "";
$tdatareportes[".OriginalTable"] = "dbo.Reportes";


$tdatareportes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareportes[".originalPagesByType"] = $tdatareportes[".pagesByType"];
$tdatareportes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareportes[".originalPages"] = $tdatareportes[".pages"];
$tdatareportes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatareportes[".originalDefaultPages"] = $tdatareportes[".defaultPages"];

//	field labels
$fieldLabelsreportes = array();
$fieldToolTipsreportes = array();
$pageTitlesreportes = array();
$placeHoldersreportes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreportes["Spanish"] = array();
	$fieldToolTipsreportes["Spanish"] = array();
	$placeHoldersreportes["Spanish"] = array();
	$pageTitlesreportes["Spanish"] = array();
	$fieldLabelsreportes["Spanish"]["ReporteId"] = "Reporte Id";
	$fieldToolTipsreportes["Spanish"]["ReporteId"] = "";
	$placeHoldersreportes["Spanish"]["ReporteId"] = "";
	$fieldLabelsreportes["Spanish"]["Reporte"] = "Reporte";
	$fieldToolTipsreportes["Spanish"]["Reporte"] = "";
	$placeHoldersreportes["Spanish"]["Reporte"] = "";
	$fieldLabelsreportes["Spanish"]["OficioId"] = "Oficio";
	$fieldToolTipsreportes["Spanish"]["OficioId"] = "";
	$placeHoldersreportes["Spanish"]["OficioId"] = "";
	$fieldLabelsreportes["Spanish"]["Dias"] = "No. Dias";
	$fieldToolTipsreportes["Spanish"]["Dias"] = "";
	$placeHoldersreportes["Spanish"]["Dias"] = "";
	$fieldLabelsreportes["Spanish"]["Minimo"] = "Cuantia Minima";
	$fieldToolTipsreportes["Spanish"]["Minimo"] = "";
	$placeHoldersreportes["Spanish"]["Minimo"] = "";
	if (count($fieldToolTipsreportes["Spanish"]))
		$tdatareportes[".isUseToolTips"] = true;
}


	$tdatareportes[".NCSearch"] = true;



$tdatareportes[".shortTableName"] = "reportes";
$tdatareportes[".nSecOptions"] = 0;

$tdatareportes[".mainTableOwnerID"] = "";
$tdatareportes[".entityType"] = 0;
$tdatareportes[".connId"] = "GCC_at_S00001_CCAD01";


$tdatareportes[".strOriginalTableName"] = "dbo.Reportes";

	



$tdatareportes[".showAddInPopup"] = false;

$tdatareportes[".showEditInPopup"] = false;

$tdatareportes[".showViewInPopup"] = false;

$tdatareportes[".listAjax"] = false;
//	temporary
//$tdatareportes[".listAjax"] = false;

	$tdatareportes[".audit"] = true;

	$tdatareportes[".locking"] = false;


$pages = $tdatareportes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareportes[".edit"] = true;
	$tdatareportes[".afterEditAction"] = 1;
	$tdatareportes[".closePopupAfterEdit"] = 1;
	$tdatareportes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareportes[".add"] = true;
$tdatareportes[".afterAddAction"] = 1;
$tdatareportes[".closePopupAfterAdd"] = 1;
$tdatareportes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareportes[".list"] = true;
}



$tdatareportes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareportes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareportes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareportes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareportes[".printFriendly"] = true;
}



$tdatareportes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareportes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareportes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareportes[".isUseAjaxSuggest"] = true;



																																																																														

$tdatareportes[".ajaxCodeSnippetAdded"] = false;

$tdatareportes[".buttonsAdded"] = false;

$tdatareportes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareportes[".isUseTimeForSearch"] = false;


$tdatareportes[".badgeColor"] = "9ACD32";


$tdatareportes[".allSearchFields"] = array();
$tdatareportes[".filterFields"] = array();
$tdatareportes[".requiredSearchFields"] = array();

$tdatareportes[".googleLikeFields"] = array();
$tdatareportes[".googleLikeFields"][] = "ReporteId";
$tdatareportes[".googleLikeFields"][] = "Reporte";
$tdatareportes[".googleLikeFields"][] = "OficioId";
$tdatareportes[".googleLikeFields"][] = "Dias";
$tdatareportes[".googleLikeFields"][] = "Minimo";



$tdatareportes[".tableType"] = "list";

$tdatareportes[".printerPageOrientation"] = 0;
$tdatareportes[".nPrinterPageScale"] = 100;

$tdatareportes[".nPrinterSplitRecords"] = 40;

$tdatareportes[".geocodingEnabled"] = false;





$tdatareportes[".isResizeColumns"] = true;





$tdatareportes[".pageSize"] = 20;

$tdatareportes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareportes[".strOrderBy"] = $tstrOrderBy;

$tdatareportes[".orderindexes"] = array();


$tdatareportes[".sqlHead"] = "SELECT ReporteId,  	Reporte,  	OficioId,  	Dias,  	Minimo";
$tdatareportes[".sqlFrom"] = "FROM dbo.Reportes";
$tdatareportes[".sqlWhereExpr"] = "";
$tdatareportes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareportes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareportes[".arrGroupsPerPage"] = $arrGPP;

$tdatareportes[".highlightSearchResults"] = true;

$tableKeysreportes = array();
$tableKeysreportes[] = "ReporteId";
$tdatareportes[".Keys"] = $tableKeysreportes;


$tdatareportes[".hideMobileList"] = array();




//	ReporteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ReporteId";
	$fdata["GoodName"] = "ReporteId";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes","ReporteId");
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


	$tdatareportes["ReporteId"] = $fdata;
		$tdatareportes[".searchableFields"][] = "ReporteId";
//	Reporte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Reporte";
	$fdata["GoodName"] = "Reporte";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes","Reporte");
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


	$tdatareportes["Reporte"] = $fdata;
		$tdatareportes[".searchableFields"][] = "Reporte";
//	OficioId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OficioId";
	$fdata["GoodName"] = "OficioId";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes","OficioId");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Oficios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OficioId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Oficio";

	

	
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


	$tdatareportes["OficioId"] = $fdata;
		$tdatareportes[".searchableFields"][] = "OficioId";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes","Dias");
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


	$tdatareportes["Dias"] = $fdata;
		$tdatareportes[".searchableFields"][] = "Dias";
//	Minimo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Minimo";
	$fdata["GoodName"] = "Minimo";
	$fdata["ownerTable"] = "dbo.Reportes";
	$fdata["Label"] = GetFieldLabel("dbo_Reportes","Minimo");
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


	$tdatareportes["Minimo"] = $fdata;
		$tdatareportes[".searchableFields"][] = "Minimo";


$tables_data["dbo.Reportes"]=&$tdatareportes;
$field_labels["dbo_Reportes"] = &$fieldLabelsreportes;
$fieldToolTips["dbo_Reportes"] = &$fieldToolTipsreportes;
$placeHolders["dbo_Reportes"] = &$placeHoldersreportes;
$page_titles["dbo_Reportes"] = &$pageTitlesreportes;


changeTextControlsToDate( "dbo.Reportes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Reportes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Reportes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reportes()
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
	"m_srcTableName" => "dbo.Reportes"
));

$proto6["m_sql"] = "ReporteId";
$proto6["m_srcTableName"] = "dbo.Reportes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Reporte",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes"
));

$proto8["m_sql"] = "Reporte";
$proto8["m_srcTableName"] = "dbo.Reportes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OficioId",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes"
));

$proto10["m_sql"] = "OficioId";
$proto10["m_srcTableName"] = "dbo.Reportes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes"
));

$proto12["m_sql"] = "Dias";
$proto12["m_srcTableName"] = "dbo.Reportes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Minimo",
	"m_strTable" => "dbo.Reportes",
	"m_srcTableName" => "dbo.Reportes"
));

$proto14["m_sql"] = "Minimo";
$proto14["m_srcTableName"] = "dbo.Reportes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Reportes";
$proto17["m_srcTableName"] = "dbo.Reportes";
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
$proto16["m_srcTableName"] = "dbo.Reportes";
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
$proto0["m_srcTableName"]="dbo.Reportes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reportes = createSqlQuery_reportes();


	
		;

					

$tdatareportes[".sqlquery"] = $queryData_reportes;



$tdatareportes[".hasEvents"] = false;

?>