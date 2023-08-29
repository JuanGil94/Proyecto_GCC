<?php
$tdatamotivosdevoluciones = array();
$tdatamotivosdevoluciones[".searchableFields"] = array();
$tdatamotivosdevoluciones[".ShortName"] = "motivosdevoluciones";
$tdatamotivosdevoluciones[".OwnerID"] = "";
$tdatamotivosdevoluciones[".OriginalTable"] = "dbo.MotivosDevoluciones";


$tdatamotivosdevoluciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamotivosdevoluciones[".originalPagesByType"] = $tdatamotivosdevoluciones[".pagesByType"];
$tdatamotivosdevoluciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamotivosdevoluciones[".originalPages"] = $tdatamotivosdevoluciones[".pages"];
$tdatamotivosdevoluciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamotivosdevoluciones[".originalDefaultPages"] = $tdatamotivosdevoluciones[".defaultPages"];

//	field labels
$fieldLabelsmotivosdevoluciones = array();
$fieldToolTipsmotivosdevoluciones = array();
$pageTitlesmotivosdevoluciones = array();
$placeHoldersmotivosdevoluciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmotivosdevoluciones["Spanish"] = array();
	$fieldToolTipsmotivosdevoluciones["Spanish"] = array();
	$placeHoldersmotivosdevoluciones["Spanish"] = array();
	$pageTitlesmotivosdevoluciones["Spanish"] = array();
	$fieldLabelsmotivosdevoluciones["Spanish"]["MotivoDevolucionId"] = "Motivo Devolucion Id";
	$fieldToolTipsmotivosdevoluciones["Spanish"]["MotivoDevolucionId"] = "";
	$placeHoldersmotivosdevoluciones["Spanish"]["MotivoDevolucionId"] = "";
	$fieldLabelsmotivosdevoluciones["Spanish"]["MotivoDevolucion"] = "Motivo Devolucion";
	$fieldToolTipsmotivosdevoluciones["Spanish"]["MotivoDevolucion"] = "";
	$placeHoldersmotivosdevoluciones["Spanish"]["MotivoDevolucion"] = "";
	$fieldLabelsmotivosdevoluciones["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsmotivosdevoluciones["Spanish"]["Activo"] = "";
	$placeHoldersmotivosdevoluciones["Spanish"]["Activo"] = "";
	if (count($fieldToolTipsmotivosdevoluciones["Spanish"]))
		$tdatamotivosdevoluciones[".isUseToolTips"] = true;
}


	$tdatamotivosdevoluciones[".NCSearch"] = true;



$tdatamotivosdevoluciones[".shortTableName"] = "motivosdevoluciones";
$tdatamotivosdevoluciones[".nSecOptions"] = 0;

$tdatamotivosdevoluciones[".mainTableOwnerID"] = "";
$tdatamotivosdevoluciones[".entityType"] = 0;
$tdatamotivosdevoluciones[".connId"] = "GCC_at_S00001_CCAD01";


$tdatamotivosdevoluciones[".strOriginalTableName"] = "dbo.MotivosDevoluciones";

	



$tdatamotivosdevoluciones[".showAddInPopup"] = false;

$tdatamotivosdevoluciones[".showEditInPopup"] = false;

$tdatamotivosdevoluciones[".showViewInPopup"] = false;

$tdatamotivosdevoluciones[".listAjax"] = false;
//	temporary
//$tdatamotivosdevoluciones[".listAjax"] = false;

	$tdatamotivosdevoluciones[".audit"] = true;

	$tdatamotivosdevoluciones[".locking"] = false;


$pages = $tdatamotivosdevoluciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamotivosdevoluciones[".edit"] = true;
	$tdatamotivosdevoluciones[".afterEditAction"] = 1;
	$tdatamotivosdevoluciones[".closePopupAfterEdit"] = 1;
	$tdatamotivosdevoluciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamotivosdevoluciones[".add"] = true;
$tdatamotivosdevoluciones[".afterAddAction"] = 1;
$tdatamotivosdevoluciones[".closePopupAfterAdd"] = 1;
$tdatamotivosdevoluciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamotivosdevoluciones[".list"] = true;
}



$tdatamotivosdevoluciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamotivosdevoluciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamotivosdevoluciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamotivosdevoluciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamotivosdevoluciones[".printFriendly"] = true;
}



$tdatamotivosdevoluciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamotivosdevoluciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamotivosdevoluciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamotivosdevoluciones[".isUseAjaxSuggest"] = true;



						

$tdatamotivosdevoluciones[".ajaxCodeSnippetAdded"] = false;

$tdatamotivosdevoluciones[".buttonsAdded"] = false;

$tdatamotivosdevoluciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamotivosdevoluciones[".isUseTimeForSearch"] = false;


$tdatamotivosdevoluciones[".badgeColor"] = "BC8F8F";


$tdatamotivosdevoluciones[".allSearchFields"] = array();
$tdatamotivosdevoluciones[".filterFields"] = array();
$tdatamotivosdevoluciones[".requiredSearchFields"] = array();

$tdatamotivosdevoluciones[".googleLikeFields"] = array();
$tdatamotivosdevoluciones[".googleLikeFields"][] = "MotivoDevolucionId";
$tdatamotivosdevoluciones[".googleLikeFields"][] = "MotivoDevolucion";
$tdatamotivosdevoluciones[".googleLikeFields"][] = "Activo";



$tdatamotivosdevoluciones[".tableType"] = "list";

$tdatamotivosdevoluciones[".printerPageOrientation"] = 0;
$tdatamotivosdevoluciones[".nPrinterPageScale"] = 100;

$tdatamotivosdevoluciones[".nPrinterSplitRecords"] = 40;

$tdatamotivosdevoluciones[".geocodingEnabled"] = false;










$tdatamotivosdevoluciones[".pageSize"] = 20;

$tdatamotivosdevoluciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamotivosdevoluciones[".strOrderBy"] = $tstrOrderBy;

$tdatamotivosdevoluciones[".orderindexes"] = array();


$tdatamotivosdevoluciones[".sqlHead"] = "SELECT MotivoDevolucionId,  	MotivoDevolucion,  	Activo";
$tdatamotivosdevoluciones[".sqlFrom"] = "FROM dbo.MotivosDevoluciones";
$tdatamotivosdevoluciones[".sqlWhereExpr"] = "";
$tdatamotivosdevoluciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamotivosdevoluciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamotivosdevoluciones[".arrGroupsPerPage"] = $arrGPP;

$tdatamotivosdevoluciones[".highlightSearchResults"] = true;

$tableKeysmotivosdevoluciones = array();
$tableKeysmotivosdevoluciones[] = "MotivoDevolucionId";
$tdatamotivosdevoluciones[".Keys"] = $tableKeysmotivosdevoluciones;


$tdatamotivosdevoluciones[".hideMobileList"] = array();




//	MotivoDevolucionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MotivoDevolucionId";
	$fdata["GoodName"] = "MotivoDevolucionId";
	$fdata["ownerTable"] = "dbo.MotivosDevoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_MotivosDevoluciones","MotivoDevolucionId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MotivoDevolucionId";

		$fdata["sourceSingle"] = "MotivoDevolucionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoDevolucionId";

	
	
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


	$tdatamotivosdevoluciones["MotivoDevolucionId"] = $fdata;
		$tdatamotivosdevoluciones[".searchableFields"][] = "MotivoDevolucionId";
//	MotivoDevolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MotivoDevolucion";
	$fdata["GoodName"] = "MotivoDevolucion";
	$fdata["ownerTable"] = "dbo.MotivosDevoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_MotivosDevoluciones","MotivoDevolucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MotivoDevolucion";

		$fdata["sourceSingle"] = "MotivoDevolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoDevolucion";

	
	
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


	$tdatamotivosdevoluciones["MotivoDevolucion"] = $fdata;
		$tdatamotivosdevoluciones[".searchableFields"][] = "MotivoDevolucion";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "dbo.MotivosDevoluciones";
	$fdata["Label"] = GetFieldLabel("dbo_MotivosDevoluciones","Activo");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatamotivosdevoluciones["Activo"] = $fdata;
		$tdatamotivosdevoluciones[".searchableFields"][] = "Activo";


$tables_data["dbo.MotivosDevoluciones"]=&$tdatamotivosdevoluciones;
$field_labels["dbo_MotivosDevoluciones"] = &$fieldLabelsmotivosdevoluciones;
$fieldToolTips["dbo_MotivosDevoluciones"] = &$fieldToolTipsmotivosdevoluciones;
$placeHolders["dbo_MotivosDevoluciones"] = &$placeHoldersmotivosdevoluciones;
$page_titles["dbo_MotivosDevoluciones"] = &$pageTitlesmotivosdevoluciones;


changeTextControlsToDate( "dbo.MotivosDevoluciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.MotivosDevoluciones"] = array();
//	dbo.Devoluciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Devoluciones";
		$detailsParam["dOriginalTable"] = "dbo.Devoluciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "devoluciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Devoluciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.MotivosDevoluciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.MotivosDevoluciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.MotivosDevoluciones"][$dIndex]["masterKeys"][]="MotivoDevolucionId";

				$detailsTablesData["dbo.MotivosDevoluciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.MotivosDevoluciones"][$dIndex]["detailKeys"][]="MotivoDevolucionId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.MotivosDevoluciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_motivosdevoluciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MotivoDevolucionId,  	MotivoDevolucion,  	Activo";
$proto0["m_strFrom"] = "FROM dbo.MotivosDevoluciones";
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
	"m_strName" => "MotivoDevolucionId",
	"m_strTable" => "dbo.MotivosDevoluciones",
	"m_srcTableName" => "dbo.MotivosDevoluciones"
));

$proto6["m_sql"] = "MotivoDevolucionId";
$proto6["m_srcTableName"] = "dbo.MotivosDevoluciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MotivoDevolucion",
	"m_strTable" => "dbo.MotivosDevoluciones",
	"m_srcTableName" => "dbo.MotivosDevoluciones"
));

$proto8["m_sql"] = "MotivoDevolucion";
$proto8["m_srcTableName"] = "dbo.MotivosDevoluciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "dbo.MotivosDevoluciones",
	"m_srcTableName" => "dbo.MotivosDevoluciones"
));

$proto10["m_sql"] = "Activo";
$proto10["m_srcTableName"] = "dbo.MotivosDevoluciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.MotivosDevoluciones";
$proto13["m_srcTableName"] = "dbo.MotivosDevoluciones";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "MotivoDevolucionId";
$proto13["m_columns"][] = "MotivoDevolucion";
$proto13["m_columns"][] = "Activo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.MotivosDevoluciones";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dbo.MotivosDevoluciones";
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
$proto0["m_srcTableName"]="dbo.MotivosDevoluciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_motivosdevoluciones = createSqlQuery_motivosdevoluciones();


	
		;

			

$tdatamotivosdevoluciones[".sqlquery"] = $queryData_motivosdevoluciones;



$tdatamotivosdevoluciones[".hasEvents"] = false;

?>