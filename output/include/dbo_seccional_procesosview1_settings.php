<?php
$tdatadbo_seccional_procesosview1 = array();
$tdatadbo_seccional_procesosview1[".searchableFields"] = array();
$tdatadbo_seccional_procesosview1[".ShortName"] = "dbo_seccional_procesosview1";
$tdatadbo_seccional_procesosview1[".OwnerID"] = "";
$tdatadbo_seccional_procesosview1[".OriginalTable"] = "dbo.ProcesosView1";


$tdatadbo_seccional_procesosview1[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatadbo_seccional_procesosview1[".originalPagesByType"] = $tdatadbo_seccional_procesosview1[".pagesByType"];
$tdatadbo_seccional_procesosview1[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatadbo_seccional_procesosview1[".originalPages"] = $tdatadbo_seccional_procesosview1[".pages"];
$tdatadbo_seccional_procesosview1[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatadbo_seccional_procesosview1[".originalDefaultPages"] = $tdatadbo_seccional_procesosview1[".defaultPages"];

//	field labels
$fieldLabelsdbo_seccional_procesosview1 = array();
$fieldToolTipsdbo_seccional_procesosview1 = array();
$pageTitlesdbo_seccional_procesosview1 = array();
$placeHoldersdbo_seccional_procesosview1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdbo_seccional_procesosview1["Spanish"] = array();
	$fieldToolTipsdbo_seccional_procesosview1["Spanish"] = array();
	$placeHoldersdbo_seccional_procesosview1["Spanish"] = array();
	$pageTitlesdbo_seccional_procesosview1["Spanish"] = array();
	$fieldLabelsdbo_seccional_procesosview1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsdbo_seccional_procesosview1["Spanish"]["Seccional"] = "";
	$placeHoldersdbo_seccional_procesosview1["Spanish"]["Seccional"] = "";
	$fieldLabelsdbo_seccional_procesosview1["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsdbo_seccional_procesosview1["Spanish"]["SeccionalId"] = "";
	$placeHoldersdbo_seccional_procesosview1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsdbo_seccional_procesosview1["Spanish"]["Seccional1"] = "Seccional1";
	$fieldToolTipsdbo_seccional_procesosview1["Spanish"]["Seccional1"] = "";
	$placeHoldersdbo_seccional_procesosview1["Spanish"]["Seccional1"] = "";
	if (count($fieldToolTipsdbo_seccional_procesosview1["Spanish"]))
		$tdatadbo_seccional_procesosview1[".isUseToolTips"] = true;
}


	$tdatadbo_seccional_procesosview1[".NCSearch"] = true;



$tdatadbo_seccional_procesosview1[".shortTableName"] = "dbo_seccional_procesosview1";
$tdatadbo_seccional_procesosview1[".nSecOptions"] = 0;

$tdatadbo_seccional_procesosview1[".mainTableOwnerID"] = "";
$tdatadbo_seccional_procesosview1[".entityType"] = 1;
$tdatadbo_seccional_procesosview1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadbo_seccional_procesosview1[".strOriginalTableName"] = "dbo.ProcesosView1";

	



$tdatadbo_seccional_procesosview1[".showAddInPopup"] = false;

$tdatadbo_seccional_procesosview1[".showEditInPopup"] = false;

$tdatadbo_seccional_procesosview1[".showViewInPopup"] = false;

$tdatadbo_seccional_procesosview1[".listAjax"] = false;
//	temporary
//$tdatadbo_seccional_procesosview1[".listAjax"] = false;

	$tdatadbo_seccional_procesosview1[".audit"] = false;

	$tdatadbo_seccional_procesosview1[".locking"] = false;


$pages = $tdatadbo_seccional_procesosview1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadbo_seccional_procesosview1[".edit"] = true;
	$tdatadbo_seccional_procesosview1[".afterEditAction"] = 1;
	$tdatadbo_seccional_procesosview1[".closePopupAfterEdit"] = 1;
	$tdatadbo_seccional_procesosview1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadbo_seccional_procesosview1[".add"] = true;
$tdatadbo_seccional_procesosview1[".afterAddAction"] = 1;
$tdatadbo_seccional_procesosview1[".closePopupAfterAdd"] = 1;
$tdatadbo_seccional_procesosview1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadbo_seccional_procesosview1[".list"] = true;
}



$tdatadbo_seccional_procesosview1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadbo_seccional_procesosview1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadbo_seccional_procesosview1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadbo_seccional_procesosview1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadbo_seccional_procesosview1[".printFriendly"] = true;
}



$tdatadbo_seccional_procesosview1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadbo_seccional_procesosview1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadbo_seccional_procesosview1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadbo_seccional_procesosview1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																						

$tdatadbo_seccional_procesosview1[".ajaxCodeSnippetAdded"] = false;

$tdatadbo_seccional_procesosview1[".buttonsAdded"] = false;

$tdatadbo_seccional_procesosview1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadbo_seccional_procesosview1[".isUseTimeForSearch"] = false;


$tdatadbo_seccional_procesosview1[".badgeColor"] = "E8926F";


$tdatadbo_seccional_procesosview1[".allSearchFields"] = array();
$tdatadbo_seccional_procesosview1[".filterFields"] = array();
$tdatadbo_seccional_procesosview1[".requiredSearchFields"] = array();

$tdatadbo_seccional_procesosview1[".googleLikeFields"] = array();
$tdatadbo_seccional_procesosview1[".googleLikeFields"][] = "Seccional";
$tdatadbo_seccional_procesosview1[".googleLikeFields"][] = "SeccionalId";
$tdatadbo_seccional_procesosview1[".googleLikeFields"][] = "Seccional1";



$tdatadbo_seccional_procesosview1[".tableType"] = "list";

$tdatadbo_seccional_procesosview1[".printerPageOrientation"] = 0;
$tdatadbo_seccional_procesosview1[".nPrinterPageScale"] = 100;

$tdatadbo_seccional_procesosview1[".nPrinterSplitRecords"] = 40;

$tdatadbo_seccional_procesosview1[".geocodingEnabled"] = false;




$tdatadbo_seccional_procesosview1[".isDisplayLoading"] = true;






$tdatadbo_seccional_procesosview1[".pageSize"] = 20;

$tdatadbo_seccional_procesosview1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadbo_seccional_procesosview1[".strOrderBy"] = $tstrOrderBy;

$tdatadbo_seccional_procesosview1[".orderindexes"] = array();


$tdatadbo_seccional_procesosview1[".sqlHead"] = "SELECT ' ' AS Seccional,      ' ' AS SeccionalId,      ' ' AS Seccional1  UNION ALL  SELECT      CASE           WHEN Seccional = 'DEAJ' THEN 'Dirección Ejecutiva de Administración Judicial'          ELSE 'Dirección Seccional de ' + Seccional      END AS Seccional1,      SeccionalId AS SeccionalId1,      Seccional AS Seccional11";
$tdatadbo_seccional_procesosview1[".sqlFrom"] = "FROM dbo.Seccionales";
$tdatadbo_seccional_procesosview1[".sqlWhereExpr"] = "";
$tdatadbo_seccional_procesosview1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatadbo_seccional_procesosview1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadbo_seccional_procesosview1[".arrGroupsPerPage"] = $arrGPP;

$tdatadbo_seccional_procesosview1[".highlightSearchResults"] = true;

$tableKeysdbo_seccional_procesosview1 = array();
$tdatadbo_seccional_procesosview1[".Keys"] = $tableKeysdbo_seccional_procesosview1;


$tdatadbo_seccional_procesosview1[".hideMobileList"] = array();




//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccional_ProcesosView1","Seccional");
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


	$tdatadbo_seccional_procesosview1["Seccional"] = $fdata;
		$tdatadbo_seccional_procesosview1[".searchableFields"][] = "Seccional";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccional_ProcesosView1","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatadbo_seccional_procesosview1["SeccionalId"] = $fdata;
		$tdatadbo_seccional_procesosview1[".searchableFields"][] = "SeccionalId";
//	Seccional1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccional1";
	$fdata["GoodName"] = "Seccional1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Seccional_ProcesosView1","Seccional1");
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


	$tdatadbo_seccional_procesosview1["Seccional1"] = $fdata;
		$tdatadbo_seccional_procesosview1[".searchableFields"][] = "Seccional1";


$tables_data["dbo.Seccional_ProcesosView1"]=&$tdatadbo_seccional_procesosview1;
$field_labels["dbo_Seccional_ProcesosView1"] = &$fieldLabelsdbo_seccional_procesosview1;
$fieldToolTips["dbo_Seccional_ProcesosView1"] = &$fieldToolTipsdbo_seccional_procesosview1;
$placeHolders["dbo_Seccional_ProcesosView1"] = &$placeHoldersdbo_seccional_procesosview1;
$page_titles["dbo_Seccional_ProcesosView1"] = &$pageTitlesdbo_seccional_procesosview1;


changeTextControlsToDate( "dbo.Seccional_ProcesosView1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Seccional_ProcesosView1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Seccional_ProcesosView1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dbo_seccional_procesosview1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "' ' AS Seccional,      ' ' AS SeccionalId,      ' ' AS Seccional1  UNION ALL  SELECT      CASE           WHEN Seccional = 'DEAJ' THEN 'Dirección Ejecutiva de Administración Judicial'          ELSE 'Dirección Seccional de ' + Seccional      END AS Seccional1,      SeccionalId AS SeccionalId1,      Seccional AS Seccional11";
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
$proto6["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Seccional";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto8["m_sql"] = "' '";
$proto8["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "SeccionalId";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "' ' AS Seccional1  UNION ALL  SELECT      CASE           WHEN Seccional = 'DEAJ' THEN 'Dirección Ejecutiva de Administración Judicial'          ELSE 'Dirección Seccional de ' + Seccional      END"
));

$proto10["m_sql"] = "' ' AS Seccional1  UNION ALL  SELECT      CASE           WHEN Seccional = 'DEAJ' THEN 'Dirección Ejecutiva de Administración Judicial'          ELSE 'Dirección Seccional de ' + Seccional      END";
$proto10["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Seccional1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccional_ProcesosView1"
));

$proto12["m_sql"] = "SeccionalId";
$proto12["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "SeccionalId1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.Seccionales",
	"m_srcTableName" => "dbo.Seccional_ProcesosView1"
));

$proto14["m_sql"] = "Seccional";
$proto14["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Seccional11";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Seccionales";
$proto17["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
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
$proto16["m_srcTableName"] = "dbo.Seccional_ProcesosView1";
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
$proto0["m_srcTableName"]="dbo.Seccional_ProcesosView1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dbo_seccional_procesosview1 = createSqlQuery_dbo_seccional_procesosview1();


	
		;

			

$tdatadbo_seccional_procesosview1[".sqlquery"] = $queryData_dbo_seccional_procesosview1;



$tdatadbo_seccional_procesosview1[".hasEvents"] = false;

?>