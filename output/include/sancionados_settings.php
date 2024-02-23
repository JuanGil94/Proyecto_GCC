<?php
$tdatasancionados = array();
$tdatasancionados[".searchableFields"] = array();
$tdatasancionados[".ShortName"] = "sancionados";
$tdatasancionados[".OwnerID"] = "";
$tdatasancionados[".OriginalTable"] = "dbo.Sancionados";


$tdatasancionados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasancionados[".originalPagesByType"] = $tdatasancionados[".pagesByType"];
$tdatasancionados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasancionados[".originalPages"] = $tdatasancionados[".pages"];
$tdatasancionados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasancionados[".originalDefaultPages"] = $tdatasancionados[".defaultPages"];

//	field labels
$fieldLabelssancionados = array();
$fieldToolTipssancionados = array();
$pageTitlessancionados = array();
$placeHolderssancionados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssancionados["Spanish"] = array();
	$fieldToolTipssancionados["Spanish"] = array();
	$placeHolderssancionados["Spanish"] = array();
	$pageTitlessancionados["Spanish"] = array();
	$fieldLabelssancionados["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipssancionados["Spanish"]["SancionadoId"] = "";
	$placeHolderssancionados["Spanish"]["SancionadoId"] = "";
	$fieldLabelssancionados["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipssancionados["Spanish"]["Sancionado"] = "";
	$placeHolderssancionados["Spanish"]["Sancionado"] = "";
	$fieldLabelssancionados["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipssancionados["Spanish"]["TipoDocumentoId"] = "";
	$placeHolderssancionados["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelssancionados["Spanish"]["Documento"] = "Documento";
	$fieldToolTipssancionados["Spanish"]["Documento"] = "";
	$placeHolderssancionados["Spanish"]["Documento"] = "";
	$fieldLabelssancionados["Spanish"]["Email"] = "Email";
	$fieldToolTipssancionados["Spanish"]["Email"] = "";
	$placeHolderssancionados["Spanish"]["Email"] = "";
	$fieldLabelssancionados["Spanish"]["Celular"] = "Celular";
	$fieldToolTipssancionados["Spanish"]["Celular"] = "";
	$placeHolderssancionados["Spanish"]["Celular"] = "";
	$fieldLabelssancionados["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipssancionados["Spanish"]["Masculino"] = "";
	$placeHolderssancionados["Spanish"]["Masculino"] = "";
	$fieldLabelssancionados["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipssancionados["Spanish"]["Observaciones"] = "";
	$placeHolderssancionados["Spanish"]["Observaciones"] = "";
	$fieldLabelssancionados["Spanish"]["Fallecimiento"] = "Fallecimiento";
	$fieldToolTipssancionados["Spanish"]["Fallecimiento"] = "";
	$placeHolderssancionados["Spanish"]["Fallecimiento"] = "";
	$fieldLabelssancionados["Spanish"]["PrivadoLibertad"] = "Privado Libertad";
	$fieldToolTipssancionados["Spanish"]["PrivadoLibertad"] = "";
	$placeHolderssancionados["Spanish"]["PrivadoLibertad"] = "";
	if (count($fieldToolTipssancionados["Spanish"]))
		$tdatasancionados[".isUseToolTips"] = true;
}


	$tdatasancionados[".NCSearch"] = true;



$tdatasancionados[".shortTableName"] = "sancionados";
$tdatasancionados[".nSecOptions"] = 0;

$tdatasancionados[".mainTableOwnerID"] = "";
$tdatasancionados[".entityType"] = 0;
$tdatasancionados[".connId"] = "GCC_at_S00001_CCAD01";


$tdatasancionados[".strOriginalTableName"] = "dbo.Sancionados";

	



$tdatasancionados[".showAddInPopup"] = false;

$tdatasancionados[".showEditInPopup"] = false;

$tdatasancionados[".showViewInPopup"] = false;

$tdatasancionados[".listAjax"] = false;
//	temporary
//$tdatasancionados[".listAjax"] = false;

	$tdatasancionados[".audit"] = false;

	$tdatasancionados[".locking"] = false;


$pages = $tdatasancionados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasancionados[".edit"] = true;
	$tdatasancionados[".afterEditAction"] = 1;
	$tdatasancionados[".closePopupAfterEdit"] = 1;
	$tdatasancionados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasancionados[".add"] = true;
$tdatasancionados[".afterAddAction"] = 1;
$tdatasancionados[".closePopupAfterAdd"] = 1;
$tdatasancionados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasancionados[".list"] = true;
}



$tdatasancionados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasancionados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasancionados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasancionados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasancionados[".printFriendly"] = true;
}



$tdatasancionados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasancionados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasancionados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasancionados[".isUseAjaxSuggest"] = true;



																																																																																																

$tdatasancionados[".ajaxCodeSnippetAdded"] = false;

$tdatasancionados[".buttonsAdded"] = false;

$tdatasancionados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasancionados[".isUseTimeForSearch"] = false;


$tdatasancionados[".badgeColor"] = "B22222";


$tdatasancionados[".allSearchFields"] = array();
$tdatasancionados[".filterFields"] = array();
$tdatasancionados[".requiredSearchFields"] = array();

$tdatasancionados[".googleLikeFields"] = array();
$tdatasancionados[".googleLikeFields"][] = "SancionadoId";
$tdatasancionados[".googleLikeFields"][] = "Sancionado";
$tdatasancionados[".googleLikeFields"][] = "TipoDocumentoId";
$tdatasancionados[".googleLikeFields"][] = "Documento";
$tdatasancionados[".googleLikeFields"][] = "Email";
$tdatasancionados[".googleLikeFields"][] = "Celular";
$tdatasancionados[".googleLikeFields"][] = "Masculino";
$tdatasancionados[".googleLikeFields"][] = "Observaciones";
$tdatasancionados[".googleLikeFields"][] = "Fallecimiento";
$tdatasancionados[".googleLikeFields"][] = "PrivadoLibertad";



$tdatasancionados[".tableType"] = "list";

$tdatasancionados[".printerPageOrientation"] = 0;
$tdatasancionados[".nPrinterPageScale"] = 100;

$tdatasancionados[".nPrinterSplitRecords"] = 40;

$tdatasancionados[".geocodingEnabled"] = false;










$tdatasancionados[".pageSize"] = 20;

$tdatasancionados[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SancionadoId DESC";
$tdatasancionados[".strOrderBy"] = $tstrOrderBy;

$tdatasancionados[".orderindexes"] = array();
	$tdatasancionados[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "SancionadoId");



$tdatasancionados[".sqlHead"] = "SELECT SancionadoId,  Sancionado,  TipoDocumentoId,  Documento,  Email,  Celular,  Masculino,  Observaciones,  Fallecimiento,  PrivadoLibertad";
$tdatasancionados[".sqlFrom"] = "FROM dbo.Sancionados";
$tdatasancionados[".sqlWhereExpr"] = "";
$tdatasancionados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasancionados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasancionados[".arrGroupsPerPage"] = $arrGPP;

$tdatasancionados[".highlightSearchResults"] = true;

$tableKeyssancionados = array();
$tableKeyssancionados[] = "SancionadoId";
$tdatasancionados[".Keys"] = $tableKeyssancionados;


$tdatasancionados[".hideMobileList"] = array();




//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","SancionadoId");
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


	$tdatasancionados["SancionadoId"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "SancionadoId";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Sancionado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sancionado";

		$fdata["sourceSingle"] = "Sancionado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sancionado";

	
	
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


	$tdatasancionados["Sancionado"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Sancionado";
//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","TipoDocumentoId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.TiposDocumentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoDocumentoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo";

	

	
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


	$tdatasancionados["TipoDocumentoId"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "TipoDocumentoId";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

		$fdata["sourceSingle"] = "Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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


	$tdatasancionados["Documento"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Documento";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatasancionados["Email"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Email";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Celular";

		$fdata["sourceSingle"] = "Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdatasancionados["Celular"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Celular";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Masculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Masculino";

		$fdata["sourceSingle"] = "Masculino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masculino";

	
	
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


	$tdatasancionados["Masculino"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Masculino";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatasancionados["Observaciones"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Observaciones";
//	Fallecimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fallecimiento";
	$fdata["GoodName"] = "Fallecimiento";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","Fallecimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fallecimiento";

		$fdata["sourceSingle"] = "Fallecimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fallecimiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatasancionados["Fallecimiento"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "Fallecimiento";
//	PrivadoLibertad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PrivadoLibertad";
	$fdata["GoodName"] = "PrivadoLibertad";
	$fdata["ownerTable"] = "dbo.Sancionados";
	$fdata["Label"] = GetFieldLabel("dbo_Sancionados","PrivadoLibertad");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "PrivadoLibertad";

		$fdata["sourceSingle"] = "PrivadoLibertad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrivadoLibertad";

	
	
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


	$tdatasancionados["PrivadoLibertad"] = $fdata;
		$tdatasancionados[".searchableFields"][] = "PrivadoLibertad";


$tables_data["dbo.Sancionados"]=&$tdatasancionados;
$field_labels["dbo_Sancionados"] = &$fieldLabelssancionados;
$fieldToolTips["dbo_Sancionados"] = &$fieldToolTipssancionados;
$placeHolders["dbo_Sancionados"] = &$placeHolderssancionados;
$page_titles["dbo_Sancionados"] = &$pageTitlessancionados;


changeTextControlsToDate( "dbo.Sancionados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Sancionados"] = array();
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


		
	$detailsTablesData["dbo.Sancionados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"][]="SancionadoId";
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


		
	$detailsTablesData["dbo.Sancionados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"][]="SancionadoId";
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


		
	$detailsTablesData["dbo.Sancionados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"][]="SancionadoId";
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


		
	$detailsTablesData["dbo.Sancionados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["masterKeys"][]="SancionadoId";

				$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Sancionados"][$dIndex]["detailKeys"][]="SancionadoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Sancionados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.TiposDocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.TiposDocumentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tiposdocumentos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Sancionados"][0] = $masterParams;
				$masterTablesData["dbo.Sancionados"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Sancionados"][0]["masterKeys"][]="TipoDocumentoId";
				$masterTablesData["dbo.Sancionados"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Sancionados"][0]["detailKeys"][]="TipoDocumentoId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sancionados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SancionadoId,  Sancionado,  TipoDocumentoId,  Documento,  Email,  Celular,  Masculino,  Observaciones,  Fallecimiento,  PrivadoLibertad";
$proto0["m_strFrom"] = "FROM dbo.Sancionados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY SancionadoId DESC";
	
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
	"m_srcTableName" => "dbo.Sancionados"
));

$proto6["m_sql"] = "SancionadoId";
$proto6["m_srcTableName"] = "dbo.Sancionados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto8["m_sql"] = "Sancionado";
$proto8["m_srcTableName"] = "dbo.Sancionados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto10["m_sql"] = "TipoDocumentoId";
$proto10["m_srcTableName"] = "dbo.Sancionados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto12["m_sql"] = "Documento";
$proto12["m_srcTableName"] = "dbo.Sancionados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto14["m_sql"] = "Email";
$proto14["m_srcTableName"] = "dbo.Sancionados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto16["m_sql"] = "Celular";
$proto16["m_srcTableName"] = "dbo.Sancionados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Masculino",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto18["m_sql"] = "Masculino";
$proto18["m_srcTableName"] = "dbo.Sancionados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto20["m_sql"] = "Observaciones";
$proto20["m_srcTableName"] = "dbo.Sancionados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fallecimiento",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto22["m_sql"] = "Fallecimiento";
$proto22["m_srcTableName"] = "dbo.Sancionados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PrivadoLibertad",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto24["m_sql"] = "PrivadoLibertad";
$proto24["m_srcTableName"] = "dbo.Sancionados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.Sancionados";
$proto27["m_srcTableName"] = "dbo.Sancionados";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "SancionadoId";
$proto27["m_columns"][] = "Sancionado";
$proto27["m_columns"][] = "TipoDocumentoId";
$proto27["m_columns"][] = "Documento";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Celular";
$proto27["m_columns"][] = "Masculino";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Fallecimiento";
$proto27["m_columns"][] = "PrivadoLibertad";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.Sancionados";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.Sancionados";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Sancionados",
	"m_srcTableName" => "dbo.Sancionados"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Sancionados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sancionados = createSqlQuery_sancionados();


	
		;

										

$tdatasancionados[".sqlquery"] = $queryData_sancionados;



$tdatasancionados[".hasEvents"] = false;

?>