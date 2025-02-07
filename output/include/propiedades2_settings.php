<?php
$tdatapropiedades2 = array();
$tdatapropiedades2[".searchableFields"] = array();
$tdatapropiedades2[".ShortName"] = "propiedades2";
$tdatapropiedades2[".OwnerID"] = "";
$tdatapropiedades2[".OriginalTable"] = "dbo.Propiedades";


$tdatapropiedades2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapropiedades2[".originalPagesByType"] = $tdatapropiedades2[".pagesByType"];
$tdatapropiedades2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapropiedades2[".originalPages"] = $tdatapropiedades2[".pages"];
$tdatapropiedades2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapropiedades2[".originalDefaultPages"] = $tdatapropiedades2[".defaultPages"];

//	field labels
$fieldLabelspropiedades2 = array();
$fieldToolTipspropiedades2 = array();
$pageTitlespropiedades2 = array();
$placeHolderspropiedades2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspropiedades2["Spanish"] = array();
	$fieldToolTipspropiedades2["Spanish"] = array();
	$placeHolderspropiedades2["Spanish"] = array();
	$pageTitlespropiedades2["Spanish"] = array();
	$fieldLabelspropiedades2["Spanish"]["TipoPropiedadName"] = "Tipo Propiedad Name";
	$fieldToolTipspropiedades2["Spanish"]["TipoPropiedadName"] = "";
	$placeHolderspropiedades2["Spanish"]["TipoPropiedadName"] = "";
	$fieldLabelspropiedades2["Spanish"]["TipoPropiedad"] = "Tipo Propiedad";
	$fieldToolTipspropiedades2["Spanish"]["TipoPropiedad"] = "";
	$placeHolderspropiedades2["Spanish"]["TipoPropiedad"] = "";
	if (count($fieldToolTipspropiedades2["Spanish"]))
		$tdatapropiedades2[".isUseToolTips"] = true;
}


	$tdatapropiedades2[".NCSearch"] = true;



$tdatapropiedades2[".shortTableName"] = "propiedades2";
$tdatapropiedades2[".nSecOptions"] = 0;

$tdatapropiedades2[".mainTableOwnerID"] = "";
$tdatapropiedades2[".entityType"] = 1;
$tdatapropiedades2[".connId"] = "GCC_at_S00001_CCAD01";


$tdatapropiedades2[".strOriginalTableName"] = "dbo.Propiedades";

	



$tdatapropiedades2[".showAddInPopup"] = false;

$tdatapropiedades2[".showEditInPopup"] = false;

$tdatapropiedades2[".showViewInPopup"] = false;

$tdatapropiedades2[".listAjax"] = false;
//	temporary
//$tdatapropiedades2[".listAjax"] = false;

	$tdatapropiedades2[".audit"] = false;

	$tdatapropiedades2[".locking"] = false;


$pages = $tdatapropiedades2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapropiedades2[".edit"] = true;
	$tdatapropiedades2[".afterEditAction"] = 1;
	$tdatapropiedades2[".closePopupAfterEdit"] = 1;
	$tdatapropiedades2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapropiedades2[".add"] = true;
$tdatapropiedades2[".afterAddAction"] = 1;
$tdatapropiedades2[".closePopupAfterAdd"] = 1;
$tdatapropiedades2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapropiedades2[".list"] = true;
}



$tdatapropiedades2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapropiedades2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapropiedades2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapropiedades2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapropiedades2[".printFriendly"] = true;
}



$tdatapropiedades2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapropiedades2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapropiedades2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapropiedades2[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdatapropiedades2[".ajaxCodeSnippetAdded"] = false;

$tdatapropiedades2[".buttonsAdded"] = false;

$tdatapropiedades2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapropiedades2[".isUseTimeForSearch"] = false;


$tdatapropiedades2[".badgeColor"] = "E8926F";


$tdatapropiedades2[".allSearchFields"] = array();
$tdatapropiedades2[".filterFields"] = array();
$tdatapropiedades2[".requiredSearchFields"] = array();

$tdatapropiedades2[".googleLikeFields"] = array();
$tdatapropiedades2[".googleLikeFields"][] = "TipoPropiedadName";
$tdatapropiedades2[".googleLikeFields"][] = "TipoPropiedad";



$tdatapropiedades2[".tableType"] = "list";

$tdatapropiedades2[".printerPageOrientation"] = 0;
$tdatapropiedades2[".nPrinterPageScale"] = 100;

$tdatapropiedades2[".nPrinterSplitRecords"] = 40;

$tdatapropiedades2[".geocodingEnabled"] = false;




$tdatapropiedades2[".isDisplayLoading"] = true;

$tdatapropiedades2[".isResizeColumns"] = true;





$tdatapropiedades2[".pageSize"] = 20;

$tdatapropiedades2[".warnLeavingPages"] = true;



$tstrOrderBy = "order by TipoPropiedad asc";
$tdatapropiedades2[".strOrderBy"] = $tstrOrderBy;

$tdatapropiedades2[".orderindexes"] = array();
	$tdatapropiedades2[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "TipoPropiedad");



$tdatapropiedades2[".sqlHead"] = "SELECT DISTINCT CASE           WHEN TipoPropiedad = 1 THEN 'BIEN MUEBLE'           WHEN TipoPropiedad = 2 THEN 'BIEN INMUEBLE'           WHEN TipoPropiedad = 3 THEN 'EFECTIVO'   		ELSE 'OTRO'      END AS [TipoPropiedadName],  		TipoPropiedad";
$tdatapropiedades2[".sqlFrom"] = "FROM [dbo].[Propiedades]";
$tdatapropiedades2[".sqlWhereExpr"] = "";
$tdatapropiedades2[".sqlTail"] = "";

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
$tdatapropiedades2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatapropiedades2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapropiedades2[".arrGroupsPerPage"] = $arrGPP;

$tdatapropiedades2[".highlightSearchResults"] = true;

$tableKeyspropiedades2 = array();
$tdatapropiedades2[".Keys"] = $tableKeyspropiedades2;


$tdatapropiedades2[".hideMobileList"] = array();




//	TipoPropiedadName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoPropiedadName";
	$fdata["GoodName"] = "TipoPropiedadName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades2","TipoPropiedadName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoPropiedadName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN TipoPropiedad = 1 THEN 'BIEN MUEBLE'           WHEN TipoPropiedad = 2 THEN 'BIEN INMUEBLE'           WHEN TipoPropiedad = 3 THEN 'EFECTIVO'   		ELSE 'OTRO'      END";

	
	
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


	$tdatapropiedades2["TipoPropiedadName"] = $fdata;
		$tdatapropiedades2[".searchableFields"][] = "TipoPropiedadName";
//	TipoPropiedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoPropiedad";
	$fdata["GoodName"] = "TipoPropiedad";
	$fdata["ownerTable"] = "dbo.Propiedades";
	$fdata["Label"] = GetFieldLabel("dbo_Propiedades2","TipoPropiedad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TipoPropiedad";

		$fdata["sourceSingle"] = "TipoPropiedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoPropiedad";

	
	
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


	$tdatapropiedades2["TipoPropiedad"] = $fdata;
		$tdatapropiedades2[".searchableFields"][] = "TipoPropiedad";


$tables_data["dbo.Propiedades2"]=&$tdatapropiedades2;
$field_labels["dbo_Propiedades2"] = &$fieldLabelspropiedades2;
$fieldToolTips["dbo_Propiedades2"] = &$fieldToolTipspropiedades2;
$placeHolders["dbo_Propiedades2"] = &$placeHolderspropiedades2;
$page_titles["dbo_Propiedades2"] = &$pageTitlespropiedades2;


changeTextControlsToDate( "dbo.Propiedades2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Propiedades2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Propiedades2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_propiedades2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "CASE           WHEN TipoPropiedad = 1 THEN 'BIEN MUEBLE'           WHEN TipoPropiedad = 2 THEN 'BIEN INMUEBLE'           WHEN TipoPropiedad = 3 THEN 'EFECTIVO'   		ELSE 'OTRO'      END AS [TipoPropiedadName],  		TipoPropiedad";
$proto0["m_strFrom"] = "FROM [dbo].[Propiedades]";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by TipoPropiedad asc";
	
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
	"m_sql" => "CASE           WHEN TipoPropiedad = 1 THEN 'BIEN MUEBLE'           WHEN TipoPropiedad = 2 THEN 'BIEN INMUEBLE'           WHEN TipoPropiedad = 3 THEN 'EFECTIVO'   		ELSE 'OTRO'      END"
));

$proto6["m_sql"] = "CASE           WHEN TipoPropiedad = 1 THEN 'BIEN MUEBLE'           WHEN TipoPropiedad = 2 THEN 'BIEN INMUEBLE'           WHEN TipoPropiedad = 3 THEN 'EFECTIVO'   		ELSE 'OTRO'      END";
$proto6["m_srcTableName"] = "dbo.Propiedades2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "TipoPropiedadName";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades2"
));

$proto8["m_sql"] = "TipoPropiedad";
$proto8["m_srcTableName"] = "dbo.Propiedades2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dbo.Propiedades";
$proto11["m_srcTableName"] = "dbo.Propiedades2";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "PropiedadId";
$proto11["m_columns"][] = "SancionadoId";
$proto11["m_columns"][] = "TipoPropiedad";
$proto11["m_columns"][] = "Propiedad";
$proto11["m_columns"][] = "Matricula";
$proto11["m_columns"][] = "Avaluo";
$proto11["m_columns"][] = "CiudadId";
$proto11["m_columns"][] = "Direccion";
$proto11["m_columns"][] = "Observaciones";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "[dbo].[Propiedades]";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dbo.Propiedades2";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoPropiedad",
	"m_strTable" => "dbo.Propiedades",
	"m_srcTableName" => "dbo.Propiedades2"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Propiedades2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_propiedades2 = createSqlQuery_propiedades2();


	
		;

		

$tdatapropiedades2[".sqlquery"] = $queryData_propiedades2;



$tdatapropiedades2[".hasEvents"] = false;

?>