<?php
$tdatatiposdocumentos = array();
$tdatatiposdocumentos[".searchableFields"] = array();
$tdatatiposdocumentos[".ShortName"] = "tiposdocumentos";
$tdatatiposdocumentos[".OwnerID"] = "";
$tdatatiposdocumentos[".OriginalTable"] = "dbo.TiposDocumentos";


$tdatatiposdocumentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"]}" );
$tdatatiposdocumentos[".originalPagesByType"] = $tdatatiposdocumentos[".pagesByType"];
$tdatatiposdocumentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"]}" ) );
$tdatatiposdocumentos[".originalPages"] = $tdatatiposdocumentos[".pages"];
$tdatatiposdocumentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\"}" );
$tdatatiposdocumentos[".originalDefaultPages"] = $tdatatiposdocumentos[".defaultPages"];

//	field labels
$fieldLabelstiposdocumentos = array();
$fieldToolTipstiposdocumentos = array();
$pageTitlestiposdocumentos = array();
$placeHolderstiposdocumentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposdocumentos["Spanish"] = array();
	$fieldToolTipstiposdocumentos["Spanish"] = array();
	$placeHolderstiposdocumentos["Spanish"] = array();
	$pageTitlestiposdocumentos["Spanish"] = array();
	$fieldLabelstiposdocumentos["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipstiposdocumentos["Spanish"]["TipoDocumentoId"] = "";
	$placeHolderstiposdocumentos["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelstiposdocumentos["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipstiposdocumentos["Spanish"]["Codigo"] = "";
	$placeHolderstiposdocumentos["Spanish"]["Codigo"] = "";
	$fieldLabelstiposdocumentos["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipstiposdocumentos["Spanish"]["TipoDocumento"] = "";
	$placeHolderstiposdocumentos["Spanish"]["TipoDocumento"] = "";
	$fieldLabelstiposdocumentos["Spanish"]["Juridica"] = "Juridica";
	$fieldToolTipstiposdocumentos["Spanish"]["Juridica"] = "";
	$placeHolderstiposdocumentos["Spanish"]["Juridica"] = "";
	if (count($fieldToolTipstiposdocumentos["Spanish"]))
		$tdatatiposdocumentos[".isUseToolTips"] = true;
}


	$tdatatiposdocumentos[".NCSearch"] = true;



$tdatatiposdocumentos[".shortTableName"] = "tiposdocumentos";
$tdatatiposdocumentos[".nSecOptions"] = 0;

$tdatatiposdocumentos[".mainTableOwnerID"] = "";
$tdatatiposdocumentos[".entityType"] = 0;
$tdatatiposdocumentos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatatiposdocumentos[".strOriginalTableName"] = "dbo.TiposDocumentos";

	



$tdatatiposdocumentos[".showAddInPopup"] = false;

$tdatatiposdocumentos[".showEditInPopup"] = false;

$tdatatiposdocumentos[".showViewInPopup"] = false;

$tdatatiposdocumentos[".listAjax"] = false;
//	temporary
//$tdatatiposdocumentos[".listAjax"] = false;

	$tdatatiposdocumentos[".audit"] = true;

	$tdatatiposdocumentos[".locking"] = false;


$pages = $tdatatiposdocumentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposdocumentos[".edit"] = true;
	$tdatatiposdocumentos[".afterEditAction"] = 1;
	$tdatatiposdocumentos[".closePopupAfterEdit"] = 1;
	$tdatatiposdocumentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposdocumentos[".add"] = true;
$tdatatiposdocumentos[".afterAddAction"] = 1;
$tdatatiposdocumentos[".closePopupAfterAdd"] = 1;
$tdatatiposdocumentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposdocumentos[".list"] = true;
}



$tdatatiposdocumentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposdocumentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposdocumentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposdocumentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposdocumentos[".printFriendly"] = true;
}



$tdatatiposdocumentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposdocumentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposdocumentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposdocumentos[".isUseAjaxSuggest"] = true;



																																																																																																																											

$tdatatiposdocumentos[".ajaxCodeSnippetAdded"] = false;

$tdatatiposdocumentos[".buttonsAdded"] = false;

$tdatatiposdocumentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposdocumentos[".isUseTimeForSearch"] = false;


$tdatatiposdocumentos[".badgeColor"] = "00C2C5";


$tdatatiposdocumentos[".allSearchFields"] = array();
$tdatatiposdocumentos[".filterFields"] = array();
$tdatatiposdocumentos[".requiredSearchFields"] = array();

$tdatatiposdocumentos[".googleLikeFields"] = array();
$tdatatiposdocumentos[".googleLikeFields"][] = "TipoDocumentoId";
$tdatatiposdocumentos[".googleLikeFields"][] = "Codigo";
$tdatatiposdocumentos[".googleLikeFields"][] = "TipoDocumento";
$tdatatiposdocumentos[".googleLikeFields"][] = "Juridica";



$tdatatiposdocumentos[".tableType"] = "list";

$tdatatiposdocumentos[".printerPageOrientation"] = 0;
$tdatatiposdocumentos[".nPrinterPageScale"] = 100;

$tdatatiposdocumentos[".nPrinterSplitRecords"] = 40;

$tdatatiposdocumentos[".geocodingEnabled"] = false;





$tdatatiposdocumentos[".isResizeColumns"] = true;





$tdatatiposdocumentos[".pageSize"] = 20;

$tdatatiposdocumentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiposdocumentos[".strOrderBy"] = $tstrOrderBy;

$tdatatiposdocumentos[".orderindexes"] = array();


$tdatatiposdocumentos[".sqlHead"] = "SELECT TipoDocumentoId,  	Codigo,  	TipoDocumento,  	Juridica";
$tdatatiposdocumentos[".sqlFrom"] = "FROM dbo.TiposDocumentos";
$tdatatiposdocumentos[".sqlWhereExpr"] = "";
$tdatatiposdocumentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposdocumentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposdocumentos[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposdocumentos[".highlightSearchResults"] = true;

$tableKeystiposdocumentos = array();
$tableKeystiposdocumentos[] = "TipoDocumentoId";
$tdatatiposdocumentos[".Keys"] = $tableKeystiposdocumentos;


$tdatatiposdocumentos[".hideMobileList"] = array();




//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_TiposDocumentos","TipoDocumentoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TipoDocumentoId";

		$fdata["sourceSingle"] = "TipoDocumentoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDocumentoId";

	
	
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


	$tdatatiposdocumentos["TipoDocumentoId"] = $fdata;
		$tdatatiposdocumentos[".searchableFields"][] = "TipoDocumentoId";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_TiposDocumentos","Codigo");
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatiposdocumentos["Codigo"] = $fdata;
		$tdatatiposdocumentos[".searchableFields"][] = "Codigo";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_TiposDocumentos","TipoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TipoDocumento";

		$fdata["sourceSingle"] = "TipoDocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDocumento";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatiposdocumentos["TipoDocumento"] = $fdata;
		$tdatatiposdocumentos[".searchableFields"][] = "TipoDocumento";
//	Juridica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Juridica";
	$fdata["GoodName"] = "Juridica";
	$fdata["ownerTable"] = "dbo.TiposDocumentos";
	$fdata["Label"] = GetFieldLabel("dbo_TiposDocumentos","Juridica");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Juridica";

		$fdata["sourceSingle"] = "Juridica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Juridica";

	
	
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


	$tdatatiposdocumentos["Juridica"] = $fdata;
		$tdatatiposdocumentos[".searchableFields"][] = "Juridica";


$tables_data["dbo.TiposDocumentos"]=&$tdatatiposdocumentos;
$field_labels["dbo_TiposDocumentos"] = &$fieldLabelstiposdocumentos;
$fieldToolTips["dbo_TiposDocumentos"] = &$fieldToolTipstiposdocumentos;
$placeHolders["dbo_TiposDocumentos"] = &$placeHolderstiposdocumentos;
$page_titles["dbo_TiposDocumentos"] = &$pageTitlestiposdocumentos;


changeTextControlsToDate( "dbo.TiposDocumentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.TiposDocumentos"] = array();
//	dbo.Minjusticia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.TiposDocumentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"][]="TipoDocumentoId";

				$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"][]="TipoDocumentoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.TiposDocumentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"][]="TipoDocumentoId";

				$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"][]="TipoDocumentoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.TiposDocumentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"][]="TipoDocumentoId";

				$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"][]="TipoDocumentoId";
//	dbo.Sancionados
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Sancionados";
		$detailsParam["dOriginalTable"] = "dbo.Sancionados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sancionados";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Sancionados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.TiposDocumentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["masterKeys"][]="TipoDocumentoId";

				$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.TiposDocumentos"][$dIndex]["detailKeys"][]="TipoDocumentoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.TiposDocumentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposdocumentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoDocumentoId,  	Codigo,  	TipoDocumento,  	Juridica";
$proto0["m_strFrom"] = "FROM dbo.TiposDocumentos";
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
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.TiposDocumentos",
	"m_srcTableName" => "dbo.TiposDocumentos"
));

$proto6["m_sql"] = "TipoDocumentoId";
$proto6["m_srcTableName"] = "dbo.TiposDocumentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "dbo.TiposDocumentos",
	"m_srcTableName" => "dbo.TiposDocumentos"
));

$proto8["m_sql"] = "Codigo";
$proto8["m_srcTableName"] = "dbo.TiposDocumentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumento",
	"m_strTable" => "dbo.TiposDocumentos",
	"m_srcTableName" => "dbo.TiposDocumentos"
));

$proto10["m_sql"] = "TipoDocumento";
$proto10["m_srcTableName"] = "dbo.TiposDocumentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Juridica",
	"m_strTable" => "dbo.TiposDocumentos",
	"m_srcTableName" => "dbo.TiposDocumentos"
));

$proto12["m_sql"] = "Juridica";
$proto12["m_srcTableName"] = "dbo.TiposDocumentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.TiposDocumentos";
$proto15["m_srcTableName"] = "dbo.TiposDocumentos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TipoDocumentoId";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "TipoDocumento";
$proto15["m_columns"][] = "Juridica";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.TiposDocumentos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.TiposDocumentos";
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
$proto0["m_srcTableName"]="dbo.TiposDocumentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposdocumentos = createSqlQuery_tiposdocumentos();


	
		;

				

$tdatatiposdocumentos[".sqlquery"] = $queryData_tiposdocumentos;



$tdatatiposdocumentos[".hasEvents"] = false;

?>