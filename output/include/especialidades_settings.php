<?php
$tdataespecialidades = array();
$tdataespecialidades[".searchableFields"] = array();
$tdataespecialidades[".ShortName"] = "especialidades";
$tdataespecialidades[".OwnerID"] = "";
$tdataespecialidades[".OriginalTable"] = "dbo.Especialidades";


$tdataespecialidades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataespecialidades[".originalPagesByType"] = $tdataespecialidades[".pagesByType"];
$tdataespecialidades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataespecialidades[".originalPages"] = $tdataespecialidades[".pages"];
$tdataespecialidades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataespecialidades[".originalDefaultPages"] = $tdataespecialidades[".defaultPages"];

//	field labels
$fieldLabelsespecialidades = array();
$fieldToolTipsespecialidades = array();
$pageTitlesespecialidades = array();
$placeHoldersespecialidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsespecialidades["Spanish"] = array();
	$fieldToolTipsespecialidades["Spanish"] = array();
	$placeHoldersespecialidades["Spanish"] = array();
	$pageTitlesespecialidades["Spanish"] = array();
	$fieldLabelsespecialidades["Spanish"]["EspecialidadId"] = "Especialidad Id";
	$fieldToolTipsespecialidades["Spanish"]["EspecialidadId"] = "";
	$placeHoldersespecialidades["Spanish"]["EspecialidadId"] = "";
	$fieldLabelsespecialidades["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipsespecialidades["Spanish"]["Codigo"] = "";
	$placeHoldersespecialidades["Spanish"]["Codigo"] = "";
	$fieldLabelsespecialidades["Spanish"]["Especialidad"] = "Especialidad";
	$fieldToolTipsespecialidades["Spanish"]["Especialidad"] = "";
	$placeHoldersespecialidades["Spanish"]["Especialidad"] = "";
	if (count($fieldToolTipsespecialidades["Spanish"]))
		$tdataespecialidades[".isUseToolTips"] = true;
}


	$tdataespecialidades[".NCSearch"] = true;



$tdataespecialidades[".shortTableName"] = "especialidades";
$tdataespecialidades[".nSecOptions"] = 0;

$tdataespecialidades[".mainTableOwnerID"] = "";
$tdataespecialidades[".entityType"] = 0;
$tdataespecialidades[".connId"] = "GCC_at_S00001_CCAD01";


$tdataespecialidades[".strOriginalTableName"] = "dbo.Especialidades";

	



$tdataespecialidades[".showAddInPopup"] = false;

$tdataespecialidades[".showEditInPopup"] = false;

$tdataespecialidades[".showViewInPopup"] = false;

$tdataespecialidades[".listAjax"] = false;
//	temporary
//$tdataespecialidades[".listAjax"] = false;

	$tdataespecialidades[".audit"] = true;

	$tdataespecialidades[".locking"] = false;


$pages = $tdataespecialidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataespecialidades[".edit"] = true;
	$tdataespecialidades[".afterEditAction"] = 1;
	$tdataespecialidades[".closePopupAfterEdit"] = 1;
	$tdataespecialidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataespecialidades[".add"] = true;
$tdataespecialidades[".afterAddAction"] = 1;
$tdataespecialidades[".closePopupAfterAdd"] = 1;
$tdataespecialidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataespecialidades[".list"] = true;
}



$tdataespecialidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataespecialidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataespecialidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataespecialidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataespecialidades[".printFriendly"] = true;
}



$tdataespecialidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataespecialidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataespecialidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataespecialidades[".isUseAjaxSuggest"] = true;



																																																																																																																																																						

$tdataespecialidades[".ajaxCodeSnippetAdded"] = false;

$tdataespecialidades[".buttonsAdded"] = false;

$tdataespecialidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataespecialidades[".isUseTimeForSearch"] = false;


$tdataespecialidades[".badgeColor"] = "DC143C";


$tdataespecialidades[".allSearchFields"] = array();
$tdataespecialidades[".filterFields"] = array();
$tdataespecialidades[".requiredSearchFields"] = array();

$tdataespecialidades[".googleLikeFields"] = array();
$tdataespecialidades[".googleLikeFields"][] = "EspecialidadId";
$tdataespecialidades[".googleLikeFields"][] = "Codigo";
$tdataespecialidades[".googleLikeFields"][] = "Especialidad";



$tdataespecialidades[".tableType"] = "list";

$tdataespecialidades[".printerPageOrientation"] = 0;
$tdataespecialidades[".nPrinterPageScale"] = 100;

$tdataespecialidades[".nPrinterSplitRecords"] = 40;

$tdataespecialidades[".geocodingEnabled"] = false;





$tdataespecialidades[".isResizeColumns"] = true;





$tdataespecialidades[".pageSize"] = 20;

$tdataespecialidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataespecialidades[".strOrderBy"] = $tstrOrderBy;

$tdataespecialidades[".orderindexes"] = array();


$tdataespecialidades[".sqlHead"] = "SELECT EspecialidadId,  	Codigo,  	Especialidad";
$tdataespecialidades[".sqlFrom"] = "FROM dbo.Especialidades";
$tdataespecialidades[".sqlWhereExpr"] = "";
$tdataespecialidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataespecialidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataespecialidades[".arrGroupsPerPage"] = $arrGPP;

$tdataespecialidades[".highlightSearchResults"] = true;

$tableKeysespecialidades = array();
$tableKeysespecialidades[] = "EspecialidadId";
$tdataespecialidades[".Keys"] = $tableKeysespecialidades;


$tdataespecialidades[".hideMobileList"] = array();




//	EspecialidadId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EspecialidadId";
	$fdata["GoodName"] = "EspecialidadId";
	$fdata["ownerTable"] = "dbo.Especialidades";
	$fdata["Label"] = GetFieldLabel("dbo_Especialidades","EspecialidadId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EspecialidadId";

		$fdata["sourceSingle"] = "EspecialidadId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EspecialidadId";

	
	
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


	$tdataespecialidades["EspecialidadId"] = $fdata;
		$tdataespecialidades[".searchableFields"][] = "EspecialidadId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.Especialidades";
	$fdata["Label"] = GetFieldLabel("dbo_Especialidades","Codigo");
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdataespecialidades["Codigo"] = $fdata;
		$tdataespecialidades[".searchableFields"][] = "Codigo";
//	Especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Especialidad";
	$fdata["GoodName"] = "Especialidad";
	$fdata["ownerTable"] = "dbo.Especialidades";
	$fdata["Label"] = GetFieldLabel("dbo_Especialidades","Especialidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Especialidad";

		$fdata["sourceSingle"] = "Especialidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Especialidad";

	
	
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


	$tdataespecialidades["Especialidad"] = $fdata;
		$tdataespecialidades[".searchableFields"][] = "Especialidad";


$tables_data["dbo.Especialidades"]=&$tdataespecialidades;
$field_labels["dbo_Especialidades"] = &$fieldLabelsespecialidades;
$fieldToolTips["dbo_Especialidades"] = &$fieldToolTipsespecialidades;
$placeHolders["dbo_Especialidades"] = &$placeHoldersespecialidades;
$page_titles["dbo_Especialidades"] = &$pageTitlesespecialidades;


changeTextControlsToDate( "dbo.Especialidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Especialidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Especialidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_especialidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EspecialidadId,  	Codigo,  	Especialidad";
$proto0["m_strFrom"] = "FROM dbo.Especialidades";
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
	"m_strName" => "EspecialidadId",
	"m_strTable" => "dbo.Especialidades",
	"m_srcTableName" => "dbo.Especialidades"
));

$proto6["m_sql"] = "EspecialidadId";
$proto6["m_srcTableName"] = "dbo.Especialidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.Especialidades",
	"m_srcTableName" => "dbo.Especialidades"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.Especialidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Especialidad",
	"m_strTable" => "dbo.Especialidades",
	"m_srcTableName" => "dbo.Especialidades"
));

$proto10["m_sql"] = "Especialidad";
$proto10["m_srcTableName"] = "dbo.Especialidades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Especialidades";
$proto13["m_srcTableName"] = "dbo.Especialidades";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EspecialidadId";
$proto13["m_columns"][] = "Codigo";
$proto13["m_columns"][] = "Especialidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Especialidades";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.Especialidades";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Especialidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_especialidades = createSqlQuery_especialidades();


	
		;

			

$tdataespecialidades[".sqlquery"] = $queryData_especialidades;



$tdataespecialidades[".hasEvents"] = false;

?>