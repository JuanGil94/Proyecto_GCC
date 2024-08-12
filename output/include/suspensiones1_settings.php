<?php
$tdatasuspensiones1 = array();
$tdatasuspensiones1[".searchableFields"] = array();
$tdatasuspensiones1[".ShortName"] = "suspensiones1";
$tdatasuspensiones1[".OwnerID"] = "";
$tdatasuspensiones1[".OriginalTable"] = "dbo.Suspensiones";


$tdatasuspensiones1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasuspensiones1[".originalPagesByType"] = $tdatasuspensiones1[".pagesByType"];
$tdatasuspensiones1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasuspensiones1[".originalPages"] = $tdatasuspensiones1[".pages"];
$tdatasuspensiones1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasuspensiones1[".originalDefaultPages"] = $tdatasuspensiones1[".defaultPages"];

//	field labels
$fieldLabelssuspensiones1 = array();
$fieldToolTipssuspensiones1 = array();
$pageTitlessuspensiones1 = array();
$placeHolderssuspensiones1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssuspensiones1["Spanish"] = array();
	$fieldToolTipssuspensiones1["Spanish"] = array();
	$placeHolderssuspensiones1["Spanish"] = array();
	$pageTitlessuspensiones1["Spanish"] = array();
	$fieldLabelssuspensiones1["Spanish"]["Inicio"] = "Inicio";
	$fieldToolTipssuspensiones1["Spanish"]["Inicio"] = "";
	$placeHolderssuspensiones1["Spanish"]["Inicio"] = "";
	$fieldLabelssuspensiones1["Spanish"]["Finalizacion"] = "Finalizacion";
	$fieldToolTipssuspensiones1["Spanish"]["Finalizacion"] = "";
	$placeHolderssuspensiones1["Spanish"]["Finalizacion"] = "";
	$fieldLabelssuspensiones1["Spanish"]["procesoid"] = "Procesoid";
	$fieldToolTipssuspensiones1["Spanish"]["procesoid"] = "";
	$placeHolderssuspensiones1["Spanish"]["procesoid"] = "";
	if (count($fieldToolTipssuspensiones1["Spanish"]))
		$tdatasuspensiones1[".isUseToolTips"] = true;
}


	$tdatasuspensiones1[".NCSearch"] = true;



$tdatasuspensiones1[".shortTableName"] = "suspensiones1";
$tdatasuspensiones1[".nSecOptions"] = 0;

$tdatasuspensiones1[".mainTableOwnerID"] = "";
$tdatasuspensiones1[".entityType"] = 1;
$tdatasuspensiones1[".connId"] = "GCC_at_S00001_CCAD01";


$tdatasuspensiones1[".strOriginalTableName"] = "dbo.Suspensiones";

	



$tdatasuspensiones1[".showAddInPopup"] = false;

$tdatasuspensiones1[".showEditInPopup"] = false;

$tdatasuspensiones1[".showViewInPopup"] = false;

$tdatasuspensiones1[".listAjax"] = false;
//	temporary
//$tdatasuspensiones1[".listAjax"] = false;

	$tdatasuspensiones1[".audit"] = true;

	$tdatasuspensiones1[".locking"] = false;


$pages = $tdatasuspensiones1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuspensiones1[".edit"] = true;
	$tdatasuspensiones1[".afterEditAction"] = 1;
	$tdatasuspensiones1[".closePopupAfterEdit"] = 1;
	$tdatasuspensiones1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuspensiones1[".add"] = true;
$tdatasuspensiones1[".afterAddAction"] = 1;
$tdatasuspensiones1[".closePopupAfterAdd"] = 1;
$tdatasuspensiones1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuspensiones1[".list"] = true;
}



$tdatasuspensiones1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuspensiones1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuspensiones1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuspensiones1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuspensiones1[".printFriendly"] = true;
}



$tdatasuspensiones1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuspensiones1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuspensiones1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuspensiones1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																														

$tdatasuspensiones1[".ajaxCodeSnippetAdded"] = false;

$tdatasuspensiones1[".buttonsAdded"] = false;

$tdatasuspensiones1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuspensiones1[".isUseTimeForSearch"] = false;


$tdatasuspensiones1[".badgeColor"] = "008b8b";


$tdatasuspensiones1[".allSearchFields"] = array();
$tdatasuspensiones1[".filterFields"] = array();
$tdatasuspensiones1[".requiredSearchFields"] = array();

$tdatasuspensiones1[".googleLikeFields"] = array();
$tdatasuspensiones1[".googleLikeFields"][] = "Inicio";
$tdatasuspensiones1[".googleLikeFields"][] = "Finalizacion";
$tdatasuspensiones1[".googleLikeFields"][] = "procesoid";



$tdatasuspensiones1[".tableType"] = "list";

$tdatasuspensiones1[".printerPageOrientation"] = 0;
$tdatasuspensiones1[".nPrinterPageScale"] = 100;

$tdatasuspensiones1[".nPrinterSplitRecords"] = 40;

$tdatasuspensiones1[".geocodingEnabled"] = false;





$tdatasuspensiones1[".isResizeColumns"] = true;





$tdatasuspensiones1[".pageSize"] = 20;

$tdatasuspensiones1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasuspensiones1[".strOrderBy"] = $tstrOrderBy;

$tdatasuspensiones1[".orderindexes"] = array();


$tdatasuspensiones1[".sqlHead"] = "SELECT I.Inicio AS Inicio,  I.Finalizacion AS Finalizacion,  P.ProcesoId AS procesoid";
$tdatasuspensiones1[".sqlFrom"] = "FROM dbo.Interrupciones AS I  INNER JOIN dbo.Procesos AS P ON I.ProcesoId = P.ProcesoId";
$tdatasuspensiones1[".sqlWhereExpr"] = "";
$tdatasuspensiones1[".sqlTail"] = "";

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
$tdatasuspensiones1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuspensiones1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuspensiones1[".arrGroupsPerPage"] = $arrGPP;

$tdatasuspensiones1[".highlightSearchResults"] = true;

$tableKeyssuspensiones1 = array();
$tdatasuspensiones1[".Keys"] = $tableKeyssuspensiones1;


$tdatasuspensiones1[".hideMobileList"] = array();




//	Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Inicio";
	$fdata["GoodName"] = "Inicio";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones1","Inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "I.Inicio";

	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasuspensiones1["Inicio"] = $fdata;
		$tdatasuspensiones1[".searchableFields"][] = "Inicio";
//	Finalizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Finalizacion";
	$fdata["GoodName"] = "Finalizacion";
	$fdata["ownerTable"] = "dbo.Interrupciones";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones1","Finalizacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Finalizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "I.Finalizacion";

	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasuspensiones1["Finalizacion"] = $fdata;
		$tdatasuspensiones1[".searchableFields"][] = "Finalizacion";
//	procesoid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "procesoid";
	$fdata["GoodName"] = "procesoid";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Suspensiones1","procesoid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.ProcesoId";

	
	
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


	$tdatasuspensiones1["procesoid"] = $fdata;
		$tdatasuspensiones1[".searchableFields"][] = "procesoid";


$tables_data["dbo.Suspensiones1"]=&$tdatasuspensiones1;
$field_labels["dbo_Suspensiones1"] = &$fieldLabelssuspensiones1;
$fieldToolTips["dbo_Suspensiones1"] = &$fieldToolTipssuspensiones1;
$placeHolders["dbo_Suspensiones1"] = &$placeHolderssuspensiones1;
$page_titles["dbo_Suspensiones1"] = &$pageTitlessuspensiones1;


changeTextControlsToDate( "dbo.Suspensiones1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Suspensiones1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Suspensiones1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Procesos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Procesos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procesos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Suspensiones1"][0] = $masterParams;
				$masterTablesData["dbo.Suspensiones1"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Suspensiones1"][0]["masterKeys"][]="ProcesoId";
				$masterTablesData["dbo.Suspensiones1"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Suspensiones1"][0]["detailKeys"][]="procesoid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_suspensiones1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "I.Inicio AS Inicio,  I.Finalizacion AS Finalizacion,  P.ProcesoId AS procesoid";
$proto0["m_strFrom"] = "FROM dbo.Interrupciones AS I  INNER JOIN dbo.Procesos AS P ON I.ProcesoId = P.ProcesoId";
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
	"m_strName" => "Inicio",
	"m_strTable" => "I",
	"m_srcTableName" => "dbo.Suspensiones1"
));

$proto6["m_sql"] = "I.Inicio";
$proto6["m_srcTableName"] = "dbo.Suspensiones1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Inicio";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Finalizacion",
	"m_strTable" => "I",
	"m_srcTableName" => "dbo.Suspensiones1"
));

$proto8["m_sql"] = "I.Finalizacion";
$proto8["m_srcTableName"] = "dbo.Suspensiones1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Finalizacion";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Suspensiones1"
));

$proto10["m_sql"] = "P.ProcesoId";
$proto10["m_srcTableName"] = "dbo.Suspensiones1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "procesoid";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dbo.Interrupciones";
$proto13["m_srcTableName"] = "dbo.Suspensiones1";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "InterrupcionId";
$proto13["m_columns"][] = "ProcesoId";
$proto13["m_columns"][] = "Inicio";
$proto13["m_columns"][] = "Finalizacion";
$proto13["m_columns"][] = "Suspension";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dbo.Interrupciones AS I";
$proto12["m_alias"] = "I";
$proto12["m_srcTableName"] = "dbo.Suspensiones1";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "dbo.Procesos";
$proto17["m_srcTableName"] = "dbo.Suspensiones1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ProcesoId";
$proto17["m_columns"][] = "SeccionalId";
$proto17["m_columns"][] = "AbogadoId";
$proto17["m_columns"][] = "Fecha";
$proto17["m_columns"][] = "Numero";
$proto17["m_columns"][] = "DespachoId";
$proto17["m_columns"][] = "SancionadoId";
$proto17["m_columns"][] = "Providencia";
$proto17["m_columns"][] = "Ejecutoria";
$proto17["m_columns"][] = "ConceptoId";
$proto17["m_columns"][] = "EstadoId";
$proto17["m_columns"][] = "EtapaId";
$proto17["m_columns"][] = "Folios";
$proto17["m_columns"][] = "Tipo";
$proto17["m_columns"][] = "Cantidad";
$proto17["m_columns"][] = "Obligacion";
$proto17["m_columns"][] = "Costas";
$proto17["m_columns"][] = "Liquidacion";
$proto17["m_columns"][] = "Dias";
$proto17["m_columns"][] = "Intereses";
$proto17["m_columns"][] = "Recaudo";
$proto17["m_columns"][] = "CalificacionId";
$proto17["m_columns"][] = "Terminacion";
$proto17["m_columns"][] = "MotivoId";
$proto17["m_columns"][] = "Observaciones";
$proto17["m_columns"][] = "Cuotas";
$proto17["m_columns"][] = "Abono";
$proto17["m_columns"][] = "Inicio";
$proto17["m_columns"][] = "VlrCuota";
$proto17["m_columns"][] = "VlrIntereses";
$proto17["m_columns"][] = "Garantia";
$proto17["m_columns"][] = "Radicado";
$proto17["m_columns"][] = "Remisorio";
$proto17["m_columns"][] = "Acuerdo";
$proto17["m_columns"][] = "Incumplimiento";
$proto17["m_columns"][] = "Notificacion";
$proto17["m_columns"][] = "Suspension";
$proto17["m_columns"][] = "Traslado";
$proto17["m_columns"][] = "Error";
$proto17["m_columns"][] = "CarteraTipoId";
$proto17["m_columns"][] = "ConceptoAbogado";
$proto17["m_columns"][] = "Origen";
$proto17["m_columns"][] = "Carpeta";
$proto17["m_columns"][] = "ImportacionId";
$proto17["m_columns"][] = "ActuacionId";
$proto17["m_columns"][] = "ObligacionInicial";
$proto17["m_columns"][] = "CostasInicial";
$proto17["m_columns"][] = "InteresesInicial";
$proto17["m_columns"][] = "MinJusticia";
$proto17["m_columns"][] = "Revocatoria";
$proto17["m_columns"][] = "Mayor";
$proto17["m_columns"][] = "NotificacionValidada";
$proto17["m_columns"][] = "Validado";
$proto17["m_columns"][] = "Seleccionado";
$proto17["m_columns"][] = "CompetenciaId";
$proto17["m_columns"][] = "MinjusticiaId";
$proto17["m_columns"][] = "SeleccionadoPor";
$proto17["m_columns"][] = "Subsanar";
$proto17["m_columns"][] = "NumeroMinjusticia";
$proto17["m_columns"][] = "ProcesoIdOrigen";
$proto17["m_columns"][] = "SeleccionadoFecha";
$proto17["m_columns"][] = "InteresesIniciales";
$proto17["m_columns"][] = "InteresesCalculados";
$proto17["m_columns"][] = "ProcesoIdDestino";
$proto17["m_columns"][] = "RecaudoMinjusticia";
$proto17["m_columns"][] = "RecaudoTerminado";
$proto17["m_columns"][] = "Persuasivo";
$proto17["m_columns"][] = "ObligacionCreacion";
$proto17["m_columns"][] = "InteresesCreacion";
$proto17["m_columns"][] = "CostasCreacion";
$proto17["m_columns"][] = "Plazo";
$proto17["m_columns"][] = "NaturalezaId";
$proto17["m_columns"][] = "TrasladoCartera";
$proto17["m_columns"][] = "CarteraTipoIdOrigen";
$proto17["m_columns"][] = "TrasladoConcepto";
$proto17["m_columns"][] = "ConceptoIdOrigen";
$proto17["m_columns"][] = "AutorizadoPlazo";
$proto17["m_columns"][] = "AutorizadoFecha";
$proto17["m_columns"][] = "AutorizadoPor";
$proto17["m_columns"][] = "Reliquidacion";
$proto17["m_columns"][] = "ChequeoId";
$proto17["m_columns"][] = "VlrCostas";
$proto17["m_columns"][] = "VlrInteresesPlazo";
$proto17["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN dbo.Procesos AS P ON I.ProcesoId = P.ProcesoId";
$proto16["m_alias"] = "P";
$proto16["m_srcTableName"] = "dbo.Suspensiones1";
$proto18=array();
$proto18["m_sql"] = "P.ProcesoId = I.ProcesoId";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "P",
	"m_srcTableName" => "dbo.Suspensiones1"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= I.ProcesoId";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Suspensiones1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_suspensiones1 = createSqlQuery_suspensiones1();


	
		;

			

$tdatasuspensiones1[".sqlquery"] = $queryData_suspensiones1;



$tdatasuspensiones1[".hasEvents"] = false;

?>