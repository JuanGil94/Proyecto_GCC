<?php
$tdatacarteratipos = array();
$tdatacarteratipos[".searchableFields"] = array();
$tdatacarteratipos[".ShortName"] = "carteratipos";
$tdatacarteratipos[".OwnerID"] = "";
$tdatacarteratipos[".OriginalTable"] = "dbo.CarteraTipos";


$tdatacarteratipos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarteratipos[".originalPagesByType"] = $tdatacarteratipos[".pagesByType"];
$tdatacarteratipos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarteratipos[".originalPages"] = $tdatacarteratipos[".pages"];
$tdatacarteratipos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarteratipos[".originalDefaultPages"] = $tdatacarteratipos[".defaultPages"];

//	field labels
$fieldLabelscarteratipos = array();
$fieldToolTipscarteratipos = array();
$pageTitlescarteratipos = array();
$placeHolderscarteratipos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarteratipos["Spanish"] = array();
	$fieldToolTipscarteratipos["Spanish"] = array();
	$placeHolderscarteratipos["Spanish"] = array();
	$pageTitlescarteratipos["Spanish"] = array();
	$fieldLabelscarteratipos["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipscarteratipos["Spanish"]["CarteraTipoId"] = "";
	$placeHolderscarteratipos["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelscarteratipos["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipscarteratipos["Spanish"]["CarteraTipo"] = "";
	$placeHolderscarteratipos["Spanish"]["CarteraTipo"] = "";
	$fieldLabelscarteratipos["Spanish"]["Color"] = "Color";
	$fieldToolTipscarteratipos["Spanish"]["Color"] = "";
	$placeHolderscarteratipos["Spanish"]["Color"] = "";
	$fieldLabelscarteratipos["Spanish"]["Prescrita"] = "Prescrita";
	$fieldToolTipscarteratipos["Spanish"]["Prescrita"] = "";
	$placeHolderscarteratipos["Spanish"]["Prescrita"] = "";
	if (count($fieldToolTipscarteratipos["Spanish"]))
		$tdatacarteratipos[".isUseToolTips"] = true;
}


	$tdatacarteratipos[".NCSearch"] = true;



$tdatacarteratipos[".shortTableName"] = "carteratipos";
$tdatacarteratipos[".nSecOptions"] = 0;

$tdatacarteratipos[".mainTableOwnerID"] = "";
$tdatacarteratipos[".entityType"] = 0;
$tdatacarteratipos[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacarteratipos[".strOriginalTableName"] = "dbo.CarteraTipos";

	



$tdatacarteratipos[".showAddInPopup"] = false;

$tdatacarteratipos[".showEditInPopup"] = false;

$tdatacarteratipos[".showViewInPopup"] = false;

$tdatacarteratipos[".listAjax"] = false;
//	temporary
//$tdatacarteratipos[".listAjax"] = false;

	$tdatacarteratipos[".audit"] = true;

	$tdatacarteratipos[".locking"] = false;


$pages = $tdatacarteratipos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarteratipos[".edit"] = true;
	$tdatacarteratipos[".afterEditAction"] = 1;
	$tdatacarteratipos[".closePopupAfterEdit"] = 1;
	$tdatacarteratipos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarteratipos[".add"] = true;
$tdatacarteratipos[".afterAddAction"] = 1;
$tdatacarteratipos[".closePopupAfterAdd"] = 1;
$tdatacarteratipos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarteratipos[".list"] = true;
}



$tdatacarteratipos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarteratipos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarteratipos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarteratipos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarteratipos[".printFriendly"] = true;
}



$tdatacarteratipos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarteratipos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarteratipos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarteratipos[".isUseAjaxSuggest"] = true;



			

$tdatacarteratipos[".ajaxCodeSnippetAdded"] = false;

$tdatacarteratipos[".buttonsAdded"] = false;

$tdatacarteratipos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarteratipos[".isUseTimeForSearch"] = false;


$tdatacarteratipos[".badgeColor"] = "4169E1";


$tdatacarteratipos[".allSearchFields"] = array();
$tdatacarteratipos[".filterFields"] = array();
$tdatacarteratipos[".requiredSearchFields"] = array();

$tdatacarteratipos[".googleLikeFields"] = array();
$tdatacarteratipos[".googleLikeFields"][] = "CarteraTipoId";
$tdatacarteratipos[".googleLikeFields"][] = "CarteraTipo";
$tdatacarteratipos[".googleLikeFields"][] = "Color";
$tdatacarteratipos[".googleLikeFields"][] = "Prescrita";



$tdatacarteratipos[".tableType"] = "list";

$tdatacarteratipos[".printerPageOrientation"] = 0;
$tdatacarteratipos[".nPrinterPageScale"] = 100;

$tdatacarteratipos[".nPrinterSplitRecords"] = 40;

$tdatacarteratipos[".geocodingEnabled"] = false;










$tdatacarteratipos[".pageSize"] = 20;

$tdatacarteratipos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacarteratipos[".strOrderBy"] = $tstrOrderBy;

$tdatacarteratipos[".orderindexes"] = array();


$tdatacarteratipos[".sqlHead"] = "SELECT CarteraTipoId,  	CarteraTipo,  	Color,  	Prescrita";
$tdatacarteratipos[".sqlFrom"] = "FROM dbo.CarteraTipos";
$tdatacarteratipos[".sqlWhereExpr"] = "";
$tdatacarteratipos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarteratipos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarteratipos[".arrGroupsPerPage"] = $arrGPP;

$tdatacarteratipos[".highlightSearchResults"] = true;

$tableKeyscarteratipos = array();
$tableKeyscarteratipos[] = "CarteraTipoId";
$tdatacarteratipos[".Keys"] = $tableKeyscarteratipos;


$tdatacarteratipos[".hideMobileList"] = array();




//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_CarteraTipos","CarteraTipoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CarteraTipoId";

		$fdata["sourceSingle"] = "CarteraTipoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoId";

	
	
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


	$tdatacarteratipos["CarteraTipoId"] = $fdata;
		$tdatacarteratipos[".searchableFields"][] = "CarteraTipoId";
//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_CarteraTipos","CarteraTipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipo";

		$fdata["sourceSingle"] = "CarteraTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipo";

	
	
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


	$tdatacarteratipos["CarteraTipo"] = $fdata;
		$tdatacarteratipos[".searchableFields"][] = "CarteraTipo";
//	Color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Color";
	$fdata["GoodName"] = "Color";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_CarteraTipos","Color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Color";

		$fdata["sourceSingle"] = "Color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Color";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatacarteratipos["Color"] = $fdata;
		$tdatacarteratipos[".searchableFields"][] = "Color";
//	Prescrita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Prescrita";
	$fdata["GoodName"] = "Prescrita";
	$fdata["ownerTable"] = "dbo.CarteraTipos";
	$fdata["Label"] = GetFieldLabel("dbo_CarteraTipos","Prescrita");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Prescrita";

		$fdata["sourceSingle"] = "Prescrita";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prescrita";

	
	
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


	$tdatacarteratipos["Prescrita"] = $fdata;
		$tdatacarteratipos[".searchableFields"][] = "Prescrita";


$tables_data["dbo.CarteraTipos"]=&$tdatacarteratipos;
$field_labels["dbo_CarteraTipos"] = &$fieldLabelscarteratipos;
$fieldToolTips["dbo_CarteraTipos"] = &$fieldToolTipscarteratipos;
$placeHolders["dbo_CarteraTipos"] = &$placeHolderscarteratipos;
$page_titles["dbo_CarteraTipos"] = &$pageTitlescarteratipos;


changeTextControlsToDate( "dbo.CarteraTipos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.CarteraTipos"] = array();
//	dbo.Importaciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Importaciones";
		$detailsParam["dOriginalTable"] = "dbo.Importaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "importaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Importaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CarteraTipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"][]="CarteraTipoId";

				$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"][]="CarteraTipoId";
//	dbo.Minjusticia
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CarteraTipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"][]="CarteraTipoId";

				$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"][]="CarteraTipoId";
//	dbo.Minjusticia2
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia2";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia2";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia2";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CarteraTipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"][]="CarteraTipoId";

				$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"][]="CarteraTipoId";
//	dbo.Minjusticia3
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Minjusticia3";
		$detailsParam["dOriginalTable"] = "dbo.Minjusticia3";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minjusticia3";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Minjusticia3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.CarteraTipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["masterKeys"][]="CarteraTipoId";

				$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.CarteraTipos"][$dIndex]["detailKeys"][]="CarteraTipoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.CarteraTipos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carteratipos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CarteraTipoId,  	CarteraTipo,  	Color,  	Prescrita";
$proto0["m_strFrom"] = "FROM dbo.CarteraTipos";
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
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.CarteraTipos",
	"m_srcTableName" => "dbo.CarteraTipos"
));

$proto6["m_sql"] = "CarteraTipoId";
$proto6["m_srcTableName"] = "dbo.CarteraTipos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipo",
	"m_strTable" => "dbo.CarteraTipos",
	"m_srcTableName" => "dbo.CarteraTipos"
));

$proto8["m_sql"] = "CarteraTipo";
$proto8["m_srcTableName"] = "dbo.CarteraTipos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Color",
	"m_strTable" => "dbo.CarteraTipos",
	"m_srcTableName" => "dbo.CarteraTipos"
));

$proto10["m_sql"] = "Color";
$proto10["m_srcTableName"] = "dbo.CarteraTipos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Prescrita",
	"m_strTable" => "dbo.CarteraTipos",
	"m_srcTableName" => "dbo.CarteraTipos"
));

$proto12["m_sql"] = "Prescrita";
$proto12["m_srcTableName"] = "dbo.CarteraTipos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dbo.CarteraTipos";
$proto15["m_srcTableName"] = "dbo.CarteraTipos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CarteraTipoId";
$proto15["m_columns"][] = "CarteraTipo";
$proto15["m_columns"][] = "Color";
$proto15["m_columns"][] = "Prescrita";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dbo.CarteraTipos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dbo.CarteraTipos";
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
$proto0["m_srcTableName"]="dbo.CarteraTipos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carteratipos = createSqlQuery_carteratipos();


	
		;

				

$tdatacarteratipos[".sqlquery"] = $queryData_carteratipos;



$tdatacarteratipos[".hasEvents"] = false;

?>