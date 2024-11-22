<?php
$tdataseccionales1 = array();
$tdataseccionales1[".searchableFields"] = array();
$tdataseccionales1[".ShortName"] = "seccionales1";
$tdataseccionales1[".OwnerID"] = "";
$tdataseccionales1[".OriginalTable"] = "dbo.Seccionales";


$tdataseccionales1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataseccionales1[".originalPagesByType"] = $tdataseccionales1[".pagesByType"];
$tdataseccionales1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataseccionales1[".originalPages"] = $tdataseccionales1[".pages"];
$tdataseccionales1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataseccionales1[".originalDefaultPages"] = $tdataseccionales1[".defaultPages"];

//	field labels
$fieldLabelsseccionales1 = array();
$fieldToolTipsseccionales1 = array();
$pageTitlesseccionales1 = array();
$placeHoldersseccionales1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsseccionales1["Spanish"] = array();
	$fieldToolTipsseccionales1["Spanish"] = array();
	$placeHoldersseccionales1["Spanish"] = array();
	$pageTitlesseccionales1["Spanish"] = array();
	$fieldLabelsseccionales1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsseccionales1["Spanish"]["Seccional"] = "";
	$placeHoldersseccionales1["Spanish"]["Seccional"] = "";
	$fieldLabelsseccionales1["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsseccionales1["Spanish"]["SeccionalId"] = "";
	$placeHoldersseccionales1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsseccionales1["Spanish"]["Seccional1"] = "Seccional1";
	$fieldToolTipsseccionales1["Spanish"]["Seccional1"] = "";
	$placeHoldersseccionales1["Spanish"]["Seccional1"] = "";
	if (count($fieldToolTipsseccionales1["Spanish"]))
		$tdataseccionales1[".isUseToolTips"] = true;
}


	$tdataseccionales1[".NCSearch"] = true;



$tdataseccionales1[".shortTableName"] = "seccionales1";
$tdataseccionales1[".nSecOptions"] = 0;

$tdataseccionales1[".mainTableOwnerID"] = "";
$tdataseccionales1[".entityType"] = 1;
$tdataseccionales1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataseccionales1[".strOriginalTableName"] = "dbo.Seccionales";

	



$tdataseccionales1[".showAddInPopup"] = false;

$tdataseccionales1[".showEditInPopup"] = false;

$tdataseccionales1[".showViewInPopup"] = false;

$tdataseccionales1[".listAjax"] = false;
//	temporary
//$tdataseccionales1[".listAjax"] = false;

	$tdataseccionales1[".audit"] = true;

	$tdataseccionales1[".locking"] = false;


$pages = $tdataseccionales1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseccionales1[".edit"] = true;
	$tdataseccionales1[".afterEditAction"] = 1;
	$tdataseccionales1[".closePopupAfterEdit"] = 1;
	$tdataseccionales1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseccionales1[".add"] = true;
$tdataseccionales1[".afterAddAction"] = 1;
$tdataseccionales1[".closePopupAfterAdd"] = 1;
$tdataseccionales1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseccionales1[".list"] = true;
}



$tdataseccionales1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseccionales1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseccionales1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseccionales1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseccionales1[".printFriendly"] = true;
}



$tdataseccionales1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseccionales1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseccionales1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseccionales1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																

$tdataseccionales1[".ajaxCodeSnippetAdded"] = false;

$tdataseccionales1[".buttonsAdded"] = false;

$tdataseccionales1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseccionales1[".isUseTimeForSearch"] = false;


$tdataseccionales1[".badgeColor"] = "778899";


$tdataseccionales1[".allSearchFields"] = array();
$tdataseccionales1[".filterFields"] = array();
$tdataseccionales1[".requiredSearchFields"] = array();

$tdataseccionales1[".googleLikeFields"] = array();
$tdataseccionales1[".googleLikeFields"][] = "Seccional";
$tdataseccionales1[".googleLikeFields"][] = "SeccionalId";
$tdataseccionales1[".googleLikeFields"][] = "Seccional1";



$tdataseccionales1[".tableType"] = "list";

$tdataseccionales1[".printerPageOrientation"] = 0;
$tdataseccionales1[".nPrinterPageScale"] = 100;

$tdataseccionales1[".nPrinterSplitRecords"] = 40;

$tdataseccionales1[".geocodingEnabled"] = false;





$tdataseccionales1[".isResizeColumns"] = true;





$tdataseccionales1[".pageSize"] = 20;

$tdataseccionales1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseccionales1[".strOrderBy"] = $tstrOrderBy;

$tdataseccionales1[".orderindexes"] = array();


$tdataseccionales1[".sqlHead"] = "SELECT ' ' AS Seccional,  ' ' AS SeccionalId,  ' ' as [Seccional1]  UNION ALL   SELECT  case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end AS Seccional1,  SeccionalId AS SeccionalId1,  Seccional AS Seccional11";
$tdataseccionales1[".sqlFrom"] = "FROM dbo.Seccionales";
$tdataseccionales1[".sqlWhereExpr"] = "";
$tdataseccionales1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseccionales1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseccionales1[".arrGroupsPerPage"] = $arrGPP;

$tdataseccionales1[".highlightSearchResults"] = true;

$tableKeysseccionales1 = array();
$tableKeysseccionales1[] = "SeccionalId";
$tdataseccionales1[".Keys"] = $tableKeysseccionales1;


$tdataseccionales1[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

		$fdata["sourceSingle"] = "Seccional";

		$fdata["FullName"] = "Seccional";

	
	
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


	$tdataseccionales1["Seccional"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Seccional";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","SeccionalId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

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


	$tdataseccionales1["SeccionalId"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "SeccionalId";
//	Seccional1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional1";
	$fdata["GoodName"] = "Seccional1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccionales1","Seccional1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional1";

	
		$fdata["FullName"] = "Seccional1";

	
	
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


	$tdataseccionales1["Seccional1"] = $fdata;
		$tdataseccionales1[".searchableFields"][] = "Seccional1";


$tables_data["dbo.Seccionales1"]=&$tdataseccionales1;
$field_labels["dbo_Seccionales1"] = &$fieldLabelsseccionales1;
$fieldToolTips["dbo_Seccionales1"] = &$fieldToolTipsseccionales1;
$placeHolders["dbo_Seccionales1"] = &$placeHoldersseccionales1;
$page_titles["dbo_Seccionales1"] = &$pageTitlesseccionales1;


changeTextControlsToDate( "dbo.Seccionales1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Seccionales1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Seccionales1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seccionales1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "' ' AS Seccional,  ' ' AS SeccionalId,  ' ' as [Seccional1]  UNION ALL   SELECT  case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end AS Seccional1,  SeccionalId AS SeccionalId1,  Seccional AS Seccional11";
$proto0["m_strFrom"] = "FROM dbo.Seccionales";
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
$proto6["m_srcTableName"] = "dbo.Seccionales1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Seccional";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto8["m_sql"] = "' '";
$proto8["m_srcTableName"] = "dbo.Seccionales1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "SeccionalId";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' as [Seccional1]  UNION ALL   SELECT  case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end"
));

$proto10["m_sql"] = "' ' as [Seccional1]  UNION ALL   SELECT  case Seccional  	when 'DEAJ' THEN 'DIRECCIÓN EJECUTIVA DE ADMINISTRACION JUDICIAL'  	else Seccional  	end";
$proto10["m_srcTableName"] = "dbo.Seccionales1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Seccional1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto12["m_sql"] = "SeccionalId";
$proto12["m_srcTableName"] = "dbo.Seccionales1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "SeccionalId1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccionales1"
));

$proto14["m_sql"] = "Seccional";
$proto14["m_srcTableName"] = "dbo.Seccionales1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Seccional11";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Seccionales";
$proto17["m_srcTableName"] = "dbo.Seccionales1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "SeccionalId";
$proto17["m_columns"][] = "Codigo";
$proto17["m_columns"][] = "Seccional";
$proto17["m_columns"][] = "NIT";
$proto17["m_columns"][] = "CiudadId";
$proto17["m_columns"][] = "PiePagina";
$proto17["m_columns"][] = "Sigobius";
$proto17["m_columns"][] = "Email";
$proto17["m_columns"][] = "Direccion";
$proto17["m_columns"][] = "Telefonos";
$proto17["m_columns"][] = "PCI";
$proto17["m_columns"][] = "Contador";
$proto17["m_columns"][] = "ContadorCargo";
$proto17["m_columns"][] = "Director";
$proto17["m_columns"][] = "DirectorCargo";
$proto17["m_columns"][] = "Abogado";
$proto17["m_columns"][] = "AbogadoCargo";
$proto17["m_columns"][] = "Formato";
$proto17["m_columns"][] = "Corporacion";
$proto17["m_columns"][] = "Unidad";
$proto17["m_columns"][] = "Oficina";
$proto17["m_columns"][] = "Serie";
$proto17["m_columns"][] = "Subserie";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dbo.Seccionales";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dbo.Seccionales1";
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
$proto0["m_srcTableName"]="dbo.Seccionales1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seccionales1 = createSqlQuery_seccionales1();


	
		;

			

$tdataseccionales1[".sqlquery"] = $queryData_seccionales1;



$tdataseccionales1[".hasEvents"] = false;

?>