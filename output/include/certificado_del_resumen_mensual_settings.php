<?php
$tdatacertificado_del_resumen_mensual = array();
$tdatacertificado_del_resumen_mensual[".searchableFields"] = array();
$tdatacertificado_del_resumen_mensual[".ShortName"] = "certificado_del_resumen_mensual";
$tdatacertificado_del_resumen_mensual[".OwnerID"] = "";
$tdatacertificado_del_resumen_mensual[".OriginalTable"] = "Certificado del Resumen Mensual";


$tdatacertificado_del_resumen_mensual[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacertificado_del_resumen_mensual[".originalPagesByType"] = $tdatacertificado_del_resumen_mensual[".pagesByType"];
$tdatacertificado_del_resumen_mensual[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacertificado_del_resumen_mensual[".originalPages"] = $tdatacertificado_del_resumen_mensual[".pages"];
$tdatacertificado_del_resumen_mensual[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacertificado_del_resumen_mensual[".originalDefaultPages"] = $tdatacertificado_del_resumen_mensual[".defaultPages"];

//	field labels
$fieldLabelscertificado_del_resumen_mensual = array();
$fieldToolTipscertificado_del_resumen_mensual = array();
$pageTitlescertificado_del_resumen_mensual = array();
$placeHolderscertificado_del_resumen_mensual = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificado_del_resumen_mensual["Spanish"] = array();
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"] = array();
	$placeHolderscertificado_del_resumen_mensual["Spanish"] = array();
	$pageTitlescertificado_del_resumen_mensual["Spanish"] = array();
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["Concepto"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["Concepto"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcAnte"] = "Proc Ante";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcAnte"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcAnte"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliAnte"] = "Obli Ante";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliAnte"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliAnte"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcActu"] = "Proc Actu";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcActu"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcActu"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliActu"] = "Obli Actu";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliActu"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliActu"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcReca"] = "Proc Reca";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcReca"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcReca"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliReca"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliReca"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcTras"] = "Proc Tras";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcTras"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcTras"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliTras"] = "Obli Tras";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliTras"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliTras"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcNopa"] = "Proc Nopa";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcNopa"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcNopa"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliNopa"] = "Obli Nopa";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliNopa"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliNopa"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcNove"] = "Proc Nove";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcNove"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcNove"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliNove"] = "Obli Nove";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliNove"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliNove"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ProcTota"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ProcTota"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ObliTota"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ObliTota"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "COSTAS DE MULTAS - D. PROCESOS RECIBIDOS,  NUEVOS INTER. Y COSTAS - CostActu";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["Director"] = "Director";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["Director"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["Director"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["DirectorCargo"] = "Director Cargo";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["DirectorCargo"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["DirectorCargo"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["Abogado"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["Abogado"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["AbogadoCargo"] = "Abogado Cargo";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["AbogadoCargo"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["AbogadoCargo"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["Contador"] = "Contador";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["Contador"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["Contador"] = "";
	$fieldLabelscertificado_del_resumen_mensual["Spanish"]["ContadorCargo"] = "Contador Cargo";
	$fieldToolTipscertificado_del_resumen_mensual["Spanish"]["ContadorCargo"] = "";
	$placeHolderscertificado_del_resumen_mensual["Spanish"]["ContadorCargo"] = "";
	if (count($fieldToolTipscertificado_del_resumen_mensual["Spanish"]))
		$tdatacertificado_del_resumen_mensual[".isUseToolTips"] = true;
}


	$tdatacertificado_del_resumen_mensual[".NCSearch"] = true;



$tdatacertificado_del_resumen_mensual[".shortTableName"] = "certificado_del_resumen_mensual";
$tdatacertificado_del_resumen_mensual[".nSecOptions"] = 0;

$tdatacertificado_del_resumen_mensual[".mainTableOwnerID"] = "";
$tdatacertificado_del_resumen_mensual[".entityType"] = 6;
$tdatacertificado_del_resumen_mensual[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacertificado_del_resumen_mensual[".strOriginalTableName"] = "Certificado del Resumen Mensual";

	



$tdatacertificado_del_resumen_mensual[".showAddInPopup"] = false;

$tdatacertificado_del_resumen_mensual[".showEditInPopup"] = false;

$tdatacertificado_del_resumen_mensual[".showViewInPopup"] = false;

$tdatacertificado_del_resumen_mensual[".listAjax"] = false;
//	temporary
//$tdatacertificado_del_resumen_mensual[".listAjax"] = false;

	$tdatacertificado_del_resumen_mensual[".audit"] = false;

	$tdatacertificado_del_resumen_mensual[".locking"] = false;


$pages = $tdatacertificado_del_resumen_mensual[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificado_del_resumen_mensual[".edit"] = true;
	$tdatacertificado_del_resumen_mensual[".afterEditAction"] = 1;
	$tdatacertificado_del_resumen_mensual[".closePopupAfterEdit"] = 1;
	$tdatacertificado_del_resumen_mensual[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificado_del_resumen_mensual[".add"] = true;
$tdatacertificado_del_resumen_mensual[".afterAddAction"] = 1;
$tdatacertificado_del_resumen_mensual[".closePopupAfterAdd"] = 1;
$tdatacertificado_del_resumen_mensual[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificado_del_resumen_mensual[".list"] = true;
}



$tdatacertificado_del_resumen_mensual[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificado_del_resumen_mensual[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificado_del_resumen_mensual[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificado_del_resumen_mensual[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificado_del_resumen_mensual[".printFriendly"] = true;
}



$tdatacertificado_del_resumen_mensual[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificado_del_resumen_mensual[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificado_del_resumen_mensual[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificado_del_resumen_mensual[".isUseAjaxSuggest"] = false;



																																																																																																																																																																																																									

$tdatacertificado_del_resumen_mensual[".ajaxCodeSnippetAdded"] = false;

$tdatacertificado_del_resumen_mensual[".buttonsAdded"] = false;

$tdatacertificado_del_resumen_mensual[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificado_del_resumen_mensual[".isUseTimeForSearch"] = false;


$tdatacertificado_del_resumen_mensual[".badgeColor"] = "008B8B";


$tdatacertificado_del_resumen_mensual[".allSearchFields"] = array();
$tdatacertificado_del_resumen_mensual[".filterFields"] = array();
$tdatacertificado_del_resumen_mensual[".requiredSearchFields"] = array();

$tdatacertificado_del_resumen_mensual[".googleLikeFields"] = array();
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "Concepto";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcAnte";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliAnte";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcActu";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliActu";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcReca";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliReca";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcTras";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliTras";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcNopa";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliNopa";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcNove";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliNove";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ProcTota";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ObliTota";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "Director";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "DirectorCargo";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "Abogado";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "AbogadoCargo";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "Contador";
$tdatacertificado_del_resumen_mensual[".googleLikeFields"][] = "ContadorCargo";




$tdatacertificado_del_resumen_mensual[".printerPageOrientation"] = 0;
$tdatacertificado_del_resumen_mensual[".nPrinterPageScale"] = 100;

$tdatacertificado_del_resumen_mensual[".nPrinterSplitRecords"] = 40;

$tdatacertificado_del_resumen_mensual[".geocodingEnabled"] = false;










$tdatacertificado_del_resumen_mensual[".pageSize"] = 20;

$tdatacertificado_del_resumen_mensual[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificado_del_resumen_mensual[".strOrderBy"] = $tstrOrderBy;

$tdatacertificado_del_resumen_mensual[".orderindexes"] = array();


$tdatacertificado_del_resumen_mensual[".sqlHead"] = "";
$tdatacertificado_del_resumen_mensual[".sqlFrom"] = "";
$tdatacertificado_del_resumen_mensual[".sqlWhereExpr"] = "";
$tdatacertificado_del_resumen_mensual[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificado_del_resumen_mensual[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificado_del_resumen_mensual[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificado_del_resumen_mensual[".highlightSearchResults"] = true;

$tableKeyscertificado_del_resumen_mensual = array();
$tdatacertificado_del_resumen_mensual[".Keys"] = $tableKeyscertificado_del_resumen_mensual;


$tdatacertificado_del_resumen_mensual[".hideMobileList"] = array();




//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
		$fdata["FullName"] = "Concepto";

	
	
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


	$tdatacertificado_del_resumen_mensual["Concepto"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "Concepto";
//	ProcAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcAnte";
	$fdata["GoodName"] = "ProcAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcAnte");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcAnte";

	
		$fdata["FullName"] = "ProcAnte";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcAnte"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcAnte";
//	ObliAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ObliAnte";
	$fdata["GoodName"] = "ObliAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliAnte");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliAnte";

	
		$fdata["FullName"] = "ObliAnte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliAnte"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliAnte";
//	ProcActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProcActu";
	$fdata["GoodName"] = "ProcActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcActu");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcActu";

	
		$fdata["FullName"] = "ProcActu";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcActu"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcActu";
//	ObliActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ObliActu";
	$fdata["GoodName"] = "ObliActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliActu");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliActu";

	
		$fdata["FullName"] = "ObliActu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliActu"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliActu";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcReca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcReca";

	
		$fdata["FullName"] = "ProcReca";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcReca"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliReca";

	
		$fdata["FullName"] = "ObliReca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliReca"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliReca";
//	ProcTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProcTras";
	$fdata["GoodName"] = "ProcTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcTras");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcTras";

	
		$fdata["FullName"] = "ProcTras";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcTras"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcTras";
//	ObliTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ObliTras";
	$fdata["GoodName"] = "ObliTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliTras");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliTras";

	
		$fdata["FullName"] = "ObliTras";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliTras"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliTras";
//	ProcNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ProcNopa";
	$fdata["GoodName"] = "ProcNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcNopa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcNopa";

	
		$fdata["FullName"] = "ProcNopa";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcNopa"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcNopa";
//	ObliNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ObliNopa";
	$fdata["GoodName"] = "ObliNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliNopa");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliNopa";

	
		$fdata["FullName"] = "ObliNopa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliNopa"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliNopa";
//	ProcNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProcNove";
	$fdata["GoodName"] = "ProcNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcNove");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcNove";

	
		$fdata["FullName"] = "ProcNove";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcNove"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcNove";
//	ObliNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ObliNove";
	$fdata["GoodName"] = "ObliNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliNove";

	
		$fdata["FullName"] = "ObliNove";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliNove"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliNove";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ProcTota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcTota";

	
		$fdata["FullName"] = "ProcTota";

	
	
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


	$tdatacertificado_del_resumen_mensual["ProcTota"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ObliTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObliTota";

	
		$fdata["FullName"] = "ObliTota";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["ObliTota"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ObliTota";
//	INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteAnte";

	
		$fdata["FullName"] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
//	INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteActu";

	
		$fdata["FullName"] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
//	INTERESES DE MULTAS - E. RECAUDO -InteReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___E__RECAUDO__InteReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS___E__RECAUDO__InteReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteReca";

	
		$fdata["FullName"] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS - E. RECAUDO -InteReca"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
//	INTERESES DE MULTAS  - F.TRASLADOS - InteTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS____F_TRASLADOS___InteTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS____F_TRASLADOS___InteTras");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteTras";

	
		$fdata["FullName"] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS  - F.TRASLADOS - InteTras"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
//	INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteNopa";

	
		$fdata["FullName"] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
//	INTERESES DE MULTAS - H. NOVEDADES - InteNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___H__NOVEDADES___InteNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS___H__NOVEDADES___InteNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteNove";

	
		$fdata["FullName"] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS - H. NOVEDADES - InteNove"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
//	INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteTota";

	
		$fdata["FullName"] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
//	 COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
	$fdata["GoodName"] = "_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostAnte";

	
		$fdata["FullName"] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual[" COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
//	 COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
	$fdata["GoodName"] = "_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostActu";

	
		$fdata["FullName"] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual[" COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
//	COSTAS DE MULTAS - E. RECAUDO - CostReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___E__RECAUDO___CostReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","COSTAS_DE_MULTAS___E__RECAUDO___CostReca");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostReca";

	
		$fdata["FullName"] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["COSTAS DE MULTAS - E. RECAUDO - CostReca"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
//	COSTAS DE MULTAS - F.TRASLADOS - CostTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___F_TRASLADOS___CostTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","COSTAS_DE_MULTAS___F_TRASLADOS___CostTras");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostTras";

	
		$fdata["FullName"] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["COSTAS DE MULTAS - F.TRASLADOS - CostTras"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
//	COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostNopa";

	
		$fdata["FullName"] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
//	COSTAS DE MULTAS - H. NOVEDADES - CostNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___H__NOVEDADES___CostNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","COSTAS_DE_MULTAS___H__NOVEDADES___CostNove");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostNove";

	
		$fdata["FullName"] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["COSTAS DE MULTAS - H. NOVEDADES - CostNove"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
//	COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostTota";

	
		$fdata["FullName"] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
//	 DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
	$fdata["GoodName"] = "_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "DeteAnte";

	
		$fdata["FullName"] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual[" DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
//	DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
	$fdata["GoodName"] = "DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "DeteActu";

	
		$fdata["FullName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
//	DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
	$fdata["GoodName"] = "DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "DeteTota";

	
		$fdata["FullName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacertificado_del_resumen_mensual["DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
//	Director
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Director";
	$fdata["GoodName"] = "Director";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","Director");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Director";

	
		$fdata["FullName"] = "Director";

	
	
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


	$tdatacertificado_del_resumen_mensual["Director"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "Director";
//	DirectorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "DirectorCargo";
	$fdata["GoodName"] = "DirectorCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","DirectorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DirectorCargo";

	
		$fdata["FullName"] = "DirectorCargo";

	
	
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


	$tdatacertificado_del_resumen_mensual["DirectorCargo"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "DirectorCargo";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

	
		$fdata["FullName"] = "Abogado";

	
	
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


	$tdatacertificado_del_resumen_mensual["Abogado"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "Abogado";
//	AbogadoCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AbogadoCargo";
	$fdata["GoodName"] = "AbogadoCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","AbogadoCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AbogadoCargo";

	
		$fdata["FullName"] = "AbogadoCargo";

	
	
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


	$tdatacertificado_del_resumen_mensual["AbogadoCargo"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "AbogadoCargo";
//	Contador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Contador";
	$fdata["GoodName"] = "Contador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","Contador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Contador";

	
		$fdata["FullName"] = "Contador";

	
	
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


	$tdatacertificado_del_resumen_mensual["Contador"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "Contador";
//	ContadorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ContadorCargo";
	$fdata["GoodName"] = "ContadorCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_Mensual","ContadorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContadorCargo";

	
		$fdata["FullName"] = "ContadorCargo";

	
	
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


	$tdatacertificado_del_resumen_mensual["ContadorCargo"] = $fdata;
		$tdatacertificado_del_resumen_mensual[".searchableFields"][] = "ContadorCargo";


$tables_data["Certificado del Resumen Mensual"]=&$tdatacertificado_del_resumen_mensual;
$field_labels["Certificado_del_Resumen_Mensual"] = &$fieldLabelscertificado_del_resumen_mensual;
$fieldToolTips["Certificado_del_Resumen_Mensual"] = &$fieldToolTipscertificado_del_resumen_mensual;
$placeHolders["Certificado_del_Resumen_Mensual"] = &$placeHolderscertificado_del_resumen_mensual;
$page_titles["Certificado_del_Resumen_Mensual"] = &$pageTitlescertificado_del_resumen_mensual;


changeTextControlsToDate( "Certificado del Resumen Mensual" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Certificado del Resumen Mensual"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Certificado del Resumen Mensual"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/certificado_del_resumen_mensual_ops.php" ) );



	
		;

																																						

$tdatacertificado_del_resumen_mensual[".sqlquery"] = $queryData_certificado_del_resumen_mensual;



$tdatacertificado_del_resumen_mensual[".hasEvents"] = false;

?>