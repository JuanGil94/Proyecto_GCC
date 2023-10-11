<?php
$tdatadeudores = array();
$tdatadeudores[".searchableFields"] = array();
$tdatadeudores[".ShortName"] = "deudores";
$tdatadeudores[".OwnerID"] = "";
$tdatadeudores[".OriginalTable"] = "dbo.Sancionados";


$tdatadeudores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadeudores[".originalPagesByType"] = $tdatadeudores[".pagesByType"];
$tdatadeudores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadeudores[".originalPages"] = $tdatadeudores[".pages"];
$tdatadeudores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadeudores[".originalDefaultPages"] = $tdatadeudores[".defaultPages"];

//	field labels
$fieldLabelsdeudores = array();
$fieldToolTipsdeudores = array();
$pageTitlesdeudores = array();
$placeHoldersdeudores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdeudores["Spanish"] = array();
	$fieldToolTipsdeudores["Spanish"] = array();
	$placeHoldersdeudores["Spanish"] = array();
	$pageTitlesdeudores["Spanish"] = array();
	$fieldLabelsdeudores["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsdeudores["Spanish"]["SancionadoId"] = "";
	$placeHoldersdeudores["Spanish"]["SancionadoId"] = "";
	$fieldLabelsdeudores["Spanish"]["Genero"] = "Genero";
	$fieldToolTipsdeudores["Spanish"]["Genero"] = "";
	$placeHoldersdeudores["Spanish"]["Genero"] = "";
	if (count($fieldToolTipsdeudores["Spanish"]))
		$tdatadeudores[".isUseToolTips"] = true;
}


	$tdatadeudores[".NCSearch"] = true;



$tdatadeudores[".shortTableName"] = "deudores";
$tdatadeudores[".nSecOptions"] = 0;

$tdatadeudores[".mainTableOwnerID"] = "";
$tdatadeudores[".entityType"] = 1;
$tdatadeudores[".connId"] = "GCC_at_S00001_CCAD01";


$tdatadeudores[".strOriginalTableName"] = "dbo.Sancionados";

	



$tdatadeudores[".showAddInPopup"] = false;

$tdatadeudores[".showEditInPopup"] = false;

$tdatadeudores[".showViewInPopup"] = false;

$tdatadeudores[".listAjax"] = false;
//	temporary
//$tdatadeudores[".listAjax"] = false;

	$tdatadeudores[".audit"] = true;

	$tdatadeudores[".locking"] = false;


$pages = $tdatadeudores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadeudores[".edit"] = true;
	$tdatadeudores[".afterEditAction"] = 1;
	$tdatadeudores[".closePopupAfterEdit"] = 1;
	$tdatadeudores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadeudores[".add"] = true;
$tdatadeudores[".afterAddAction"] = 1;
$tdatadeudores[".closePopupAfterAdd"] = 1;
$tdatadeudores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadeudores[".list"] = true;
}



$tdatadeudores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadeudores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadeudores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadeudores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadeudores[".printFriendly"] = true;
}



$tdatadeudores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadeudores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadeudores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadeudores[".isUseAjaxSuggest"] = true;



																					

$tdatadeudores[".ajaxCodeSnippetAdded"] = false;

$tdatadeudores[".buttonsAdded"] = false;

$tdatadeudores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadeudores[".isUseTimeForSearch"] = false;


$tdatadeudores[".badgeColor"] = "3CB371";


$tdatadeudores[".allSearchFields"] = array();
$tdatadeudores[".filterFields"] = array();
$tdatadeudores[".requiredSearchFields"] = array();

$tdatadeudores[".googleLikeFields"] = array();
$tdatadeudores[".googleLikeFields"][] = "SancionadoId";
$tdatadeudores[".googleLikeFields"][] = "Genero";



$tdatadeudores[".tableType"] = "list";

$tdatadeudores[".printerPageOrientation"] = 0;
$tdatadeudores[".nPrinterPageScale"] = 100;

$tdatadeudores[".nPrinterSplitRecords"] = 40;

$tdatadeudores[".geocodingEnabled"] = false;





$tdatadeudores[".isResizeColumns"] = true;





$tdatadeudores[".pageSize"] = 20;

$tdatadeudores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadeudores[".strOrderBy"] = $tstrOrderBy;

$tdatadeudores[".orderindexes"] = array();


$tdatadeudores[".sqlHead"] = "SELECT SancionadoId,  	  	IIF(Masculino=1, 'Masculino',IIF(Masculino=0,'Femenino','Solo se acepta genero masculino o femenino ')) AS Genero";
$tdatadeudores[".sqlFrom"] = "FROM dbo.Sancionados";
$tdatadeudores[".sqlWhereExpr"] = "";
$tdatadeudores[".sqlTail"] = "";

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
$tdatadeudores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadeudores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadeudores[".arrGroupsPerPage"] = $arrGPP;

$tdatadeudores[".highlightSearchResults"] = true;

$tableKeysdeudores = array();
$tableKeysdeudores[] = "SancionadoId";
$tdatadeudores[".Keys"] = $tableKeysdeudores;


$tdatadeudores[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Deudores","SancionadoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SancionadoId";

		$fdata["sourceSingle"] = "SancionadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoId";

	
	
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


	$tdatadeudores["SancionadoId"] = $fdata;
		$tdatadeudores[".searchableFields"][] = "SancionadoId";
//	Genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Genero";
	$fdata["GoodName"] = "Genero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Deudores","Genero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Genero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IIF(Masculino=1, 'Masculino',IIF(Masculino=0,'Femenino','Solo se acepta genero masculino o femenino '))";

	
	
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


	$tdatadeudores["Genero"] = $fdata;
		$tdatadeudores[".searchableFields"][] = "Genero";


$tables_data["dbo.Deudores"]=&$tdatadeudores;
$field_labels["dbo_Deudores"] = &$fieldLabelsdeudores;
$fieldToolTips["dbo_Deudores"] = &$fieldToolTipsdeudores;
$placeHolders["dbo_Deudores"] = &$placeHoldersdeudores;
$page_titles["dbo_Deudores"] = &$pageTitlesdeudores;


changeTextControlsToDate( "dbo.Deudores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Deudores"] = array();
//	dbo.Direcciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Direcciones";
		$detailsParam["dOriginalTable"] = "dbo.Direcciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "direcciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Direcciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Deudores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"][]="SancionadoId";
//	dbo.Procesos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Procesos";
		$detailsParam["dOriginalTable"] = "dbo.Procesos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "procesos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Procesos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Deudores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"][]="SancionadoId";
//	dbo.Propiedades
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Propiedades";
		$detailsParam["dOriginalTable"] = "dbo.Propiedades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "propiedades";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Propiedades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Deudores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"][]="SancionadoId";
//	dbo.Solidarios
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Solidarios";
		$detailsParam["dOriginalTable"] = "dbo.Solidarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solidarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Solidarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Deudores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Deudores"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Deudores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_deudores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SancionadoId,  	  	IIF(Masculino=1, 'Masculino',IIF(Masculino=0,'Femenino','Solo se acepta genero masculino o femenino ')) AS Genero";
$proto0["m_strFrom"] = "FROM dbo.Sancionados";
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
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Deudores"
));

$proto6["m_sql"] = "SancionadoId";
$proto6["m_srcTableName"] = "dbo.Deudores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Masculino=1"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Masculino'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IIF(Masculino=0,'Femenino','Solo se acepta genero masculino o femenino ')"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "IIF";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "IIF(Masculino=1, 'Masculino',IIF(Masculino=0,'Femenino','Solo se acepta genero masculino o femenino '))";
$proto8["m_srcTableName"] = "dbo.Deudores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Genero";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "dbo.Sancionados";
$proto14["m_srcTableName"] = "dbo.Deudores";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "SancionadoId";
$proto14["m_columns"][] = "Sancionado";
$proto14["m_columns"][] = "TipoDocumentoId";
$proto14["m_columns"][] = "Documento";
$proto14["m_columns"][] = "Email";
$proto14["m_columns"][] = "Celular";
$proto14["m_columns"][] = "Masculino";
$proto14["m_columns"][] = "Observaciones";
$proto14["m_columns"][] = "Fallecimiento";
$proto14["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "dbo.Sancionados";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "dbo.Deudores";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Deudores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_deudores = createSqlQuery_deudores();


	
		;

		

$tdatadeudores[".sqlquery"] = $queryData_deudores;



$tdatadeudores[".hasEvents"] = false;

?>