<?php
$tdataciudades = array();
$tdataciudades[".searchableFields"] = array();
$tdataciudades[".ShortName"] = "ciudades";
$tdataciudades[".OwnerID"] = "";
$tdataciudades[".OriginalTable"] = "dbo.Ciudades";


$tdataciudades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades[".originalPagesByType"] = $tdataciudades[".pagesByType"];
$tdataciudades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades[".originalPages"] = $tdataciudades[".pages"];
$tdataciudades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades[".originalDefaultPages"] = $tdataciudades[".defaultPages"];

//	field labels
$fieldLabelsciudades = array();
$fieldToolTipsciudades = array();
$pageTitlesciudades = array();
$placeHoldersciudades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades["Spanish"] = array();
	$fieldToolTipsciudades["Spanish"] = array();
	$placeHoldersciudades["Spanish"] = array();
	$pageTitlesciudades["Spanish"] = array();
	$fieldLabelsciudades["Spanish"]["CiudadId"] = "Ciudad Id";
	$fieldToolTipsciudades["Spanish"]["CiudadId"] = "";
	$placeHoldersciudades["Spanish"]["CiudadId"] = "";
	$fieldLabelsciudades["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsciudades["Spanish"]["Codigo"] = "";
	$placeHoldersciudades["Spanish"]["Codigo"] = "";
	$fieldLabelsciudades["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipsciudades["Spanish"]["Ciudad"] = "";
	$placeHoldersciudades["Spanish"]["Ciudad"] = "";
	$fieldLabelsciudades["Spanish"]["DepartamentoId"] = "Departamento";
	$fieldToolTipsciudades["Spanish"]["DepartamentoId"] = "";
	$placeHoldersciudades["Spanish"]["DepartamentoId"] = "";
	if (count($fieldToolTipsciudades["Spanish"]))
		$tdataciudades[".isUseToolTips"] = true;
}


	$tdataciudades[".NCSearch"] = true;



$tdataciudades[".shortTableName"] = "ciudades";
$tdataciudades[".nSecOptions"] = 0;

$tdataciudades[".mainTableOwnerID"] = "";
$tdataciudades[".entityType"] = 0;
$tdataciudades[".connId"] = "GCC_at_S00001_CCAD01";


$tdataciudades[".strOriginalTableName"] = "dbo.Ciudades";

	



$tdataciudades[".showAddInPopup"] = false;

$tdataciudades[".showEditInPopup"] = false;

$tdataciudades[".showViewInPopup"] = false;

$tdataciudades[".listAjax"] = false;
//	temporary
//$tdataciudades[".listAjax"] = false;

	$tdataciudades[".audit"] = true;

	$tdataciudades[".locking"] = false;


$pages = $tdataciudades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades[".edit"] = true;
	$tdataciudades[".afterEditAction"] = 1;
	$tdataciudades[".closePopupAfterEdit"] = 1;
	$tdataciudades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades[".add"] = true;
$tdataciudades[".afterAddAction"] = 1;
$tdataciudades[".closePopupAfterAdd"] = 1;
$tdataciudades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades[".list"] = true;
}



$tdataciudades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades[".printFriendly"] = true;
}



$tdataciudades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																				

$tdataciudades[".ajaxCodeSnippetAdded"] = false;

$tdataciudades[".buttonsAdded"] = false;

$tdataciudades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades[".isUseTimeForSearch"] = false;


$tdataciudades[".badgeColor"] = "CFAE83";


$tdataciudades[".allSearchFields"] = array();
$tdataciudades[".filterFields"] = array();
$tdataciudades[".requiredSearchFields"] = array();

$tdataciudades[".googleLikeFields"] = array();
$tdataciudades[".googleLikeFields"][] = "CiudadId";
$tdataciudades[".googleLikeFields"][] = "Codigo";
$tdataciudades[".googleLikeFields"][] = "Ciudad";
$tdataciudades[".googleLikeFields"][] = "DepartamentoId";



$tdataciudades[".tableType"] = "list";

$tdataciudades[".printerPageOrientation"] = 0;
$tdataciudades[".nPrinterPageScale"] = 100;

$tdataciudades[".nPrinterSplitRecords"] = 40;

$tdataciudades[".geocodingEnabled"] = false;





$tdataciudades[".isResizeColumns"] = true;





$tdataciudades[".pageSize"] = 20;

$tdataciudades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataciudades[".strOrderBy"] = $tstrOrderBy;

$tdataciudades[".orderindexes"] = array();


$tdataciudades[".sqlHead"] = "SELECT CiudadId,  	Codigo,  	Ciudad,  	DepartamentoId";
$tdataciudades[".sqlFrom"] = "FROM dbo.Ciudades";
$tdataciudades[".sqlWhereExpr"] = "";
$tdataciudades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades[".highlightSearchResults"] = true;

$tableKeysciudades = array();
$tableKeysciudades[] = "CiudadId";
$tdataciudades[".Keys"] = $tableKeysciudades;


$tdataciudades[".hideMobileList"] = array();




//	CiudadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CiudadId";
	$fdata["GoodName"] = "CiudadId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades","CiudadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CiudadId";

		$fdata["sourceSingle"] = "CiudadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CiudadId";

	
	
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


	$tdataciudades["CiudadId"] = $fdata;
		$tdataciudades[".searchableFields"][] = "CiudadId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades","Codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataciudades["Codigo"] = $fdata;
		$tdataciudades[".searchableFields"][] = "Codigo";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

		$fdata["sourceSingle"] = "Ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ciudad";

	
	
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


	$tdataciudades["Ciudad"] = $fdata;
		$tdataciudades[".searchableFields"][] = "Ciudad";
//	DepartamentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoId";
	$fdata["GoodName"] = "DepartamentoId";
	$fdata["ownerTable"] = "dbo.Ciudades";
	$fdata["Label"] = GetFieldLabel("dbo_Ciudades","DepartamentoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DepartamentoId";

		$fdata["sourceSingle"] = "DepartamentoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartamentoId";

	
	
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
	$edata["LookupTable"] = "dbo.Departamentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DepartamentoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo + ' - ' + Departamento";

	

		$edata["CustomDisplay"] = "true";

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


	$tdataciudades["DepartamentoId"] = $fdata;
		$tdataciudades[".searchableFields"][] = "DepartamentoId";


$tables_data["dbo.Ciudades"]=&$tdataciudades;
$field_labels["dbo_Ciudades"] = &$fieldLabelsciudades;
$fieldToolTips["dbo_Ciudades"] = &$fieldToolTipsciudades;
$placeHolders["dbo_Ciudades"] = &$placeHoldersciudades;
$page_titles["dbo_Ciudades"] = &$pageTitlesciudades;


changeTextControlsToDate( "dbo.Ciudades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Ciudades"] = array();
//	dbo.ChequeosSancionados
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.ChequeosSancionados";
		$detailsParam["dOriginalTable"] = "dbo.ChequeosSancionados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chequeossancionados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_ChequeosSancionados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Ciudades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"][]="CiudadId";

				$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"][]="CiudadId";
//	dbo.Direcciones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Direcciones";
		$detailsParam["dOriginalTable"] = "dbo.Direcciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "direcciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Direcciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Ciudades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"][]="CiudadId";

				$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"][]="CiudadId";
//	dbo.Carceles
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Carceles";
		$detailsParam["dOriginalTable"] = "dbo.Carceles";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "carceles";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Carceles");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Ciudades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["masterKeys"][]="CiudadId";

				$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Ciudades"][$dIndex]["detailKeys"][]="CiudadId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Ciudades"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Departamentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Departamentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "departamentos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Ciudades"][0] = $masterParams;
				$masterTablesData["dbo.Ciudades"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Ciudades"][0]["masterKeys"][]="DepartamentoId";
				$masterTablesData["dbo.Ciudades"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Ciudades"][0]["detailKeys"][]="DepartamentoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ciudades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CiudadId,  	Codigo,  	Ciudad,  	DepartamentoId";
$proto0["m_strFrom"] = "FROM dbo.Ciudades";
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
	"m_strName" => "CiudadId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades"
));

$proto6["m_sql"] = "CiudadId";
$proto6["m_srcTableName"] = "dbo.Ciudades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Ciudades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Ciudad",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades"
));

$proto10["m_sql"] = "Ciudad";
$proto10["m_srcTableName"] = "dbo.Ciudades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoId",
	"m_strTable" => "dbo.Ciudades",
	"m_srcTableName" => "dbo.Ciudades"
));

$proto12["m_sql"] = "DepartamentoId";
$proto12["m_srcTableName"] = "dbo.Ciudades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.Ciudades";
$proto15["m_srcTableName"] = "dbo.Ciudades";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CiudadId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "Ciudad";
$proto15["m_columns"][] = "DepartamentoId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.Ciudades";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.Ciudades";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Ciudades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades = createSqlQuery_ciudades();


	
		;

				

$tdataciudades[".sqlquery"] = $queryData_ciudades;



$tdataciudades[".hasEvents"] = false;

?>