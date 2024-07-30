<?php
$tdatacertificado_del_resumen_por_periodo = array();
$tdatacertificado_del_resumen_por_periodo[".searchableFields"] = array();
$tdatacertificado_del_resumen_por_periodo[".ShortName"] = "certificado_del_resumen_por_periodo";
$tdatacertificado_del_resumen_por_periodo[".OwnerID"] = "";
$tdatacertificado_del_resumen_por_periodo[".OriginalTable"] = "Certificado del Resumen por Periodo";


$tdatacertificado_del_resumen_por_periodo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacertificado_del_resumen_por_periodo[".originalPagesByType"] = $tdatacertificado_del_resumen_por_periodo[".pagesByType"];
$tdatacertificado_del_resumen_por_periodo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacertificado_del_resumen_por_periodo[".originalPages"] = $tdatacertificado_del_resumen_por_periodo[".pages"];
$tdatacertificado_del_resumen_por_periodo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacertificado_del_resumen_por_periodo[".originalDefaultPages"] = $tdatacertificado_del_resumen_por_periodo[".defaultPages"];

//	field labels
$fieldLabelscertificado_del_resumen_por_periodo = array();
$fieldToolTipscertificado_del_resumen_por_periodo = array();
$pageTitlescertificado_del_resumen_por_periodo = array();
$placeHolderscertificado_del_resumen_por_periodo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"] = array();
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"] = array();
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"] = array();
	$pageTitlescertificado_del_resumen_por_periodo["Spanish"] = array();
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["Concepto"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["Concepto"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcAnte"] = "Proc Ante";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcAnte"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcAnte"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliAnte"] = "Obli Ante";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliAnte"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliAnte"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcActu"] = "Proc Actu";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcActu"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcActu"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliActu"] = "Obli Actu";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliActu"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliActu"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcReca"] = "Proc Reca";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcReca"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcReca"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliReca"] = "Obli Reca";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliReca"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliReca"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcTras"] = "Proc Tras";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcTras"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcTras"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliTras"] = "Obli Tras";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliTras"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliTras"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcNopa"] = "Proc Nopa";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcNopa"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcNopa"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliNopa"] = "Obli Nopa";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliNopa"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliNopa"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcNove"] = "Proc Nove";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcNove"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcNove"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliNove"] = "Obli Nove";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliNove"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliNove"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ProcTota"] = "Proc Tota";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ProcTota"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ProcTota"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ObliTota"] = "Obli Tota";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ObliTota"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ObliTota"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___E__RECAUDO__InteReca"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS____F_TRASLADOS___InteTras"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___H__NOVEDADES___InteNove"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "COSTAS DE MULTAS - D. PROCESOS RECIBIDOS,  NUEVOS INTER. Y COSTAS - CostActu";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___E__RECAUDO___CostReca"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___F_TRASLADOS___CostTras"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___H__NOVEDADES___CostNove"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["Director"] = "Director";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["Director"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["Director"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["DirectorCargo"] = "Director Cargo";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["DirectorCargo"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["DirectorCargo"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["Abogado"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["Abogado"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["AbogadoCargo"] = "Abogado Cargo";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["AbogadoCargo"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["AbogadoCargo"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["Contador"] = "Contador";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["Contador"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["Contador"] = "";
	$fieldLabelscertificado_del_resumen_por_periodo["Spanish"]["ContadorCargo"] = "Contador Cargo";
	$fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]["ContadorCargo"] = "";
	$placeHolderscertificado_del_resumen_por_periodo["Spanish"]["ContadorCargo"] = "";
	if (count($fieldToolTipscertificado_del_resumen_por_periodo["Spanish"]))
		$tdatacertificado_del_resumen_por_periodo[".isUseToolTips"] = true;
}


	$tdatacertificado_del_resumen_por_periodo[".NCSearch"] = true;



$tdatacertificado_del_resumen_por_periodo[".shortTableName"] = "certificado_del_resumen_por_periodo";
$tdatacertificado_del_resumen_por_periodo[".nSecOptions"] = 0;

$tdatacertificado_del_resumen_por_periodo[".mainTableOwnerID"] = "";
$tdatacertificado_del_resumen_por_periodo[".entityType"] = 6;
$tdatacertificado_del_resumen_por_periodo[".connId"] = "GCC_at_S00001_CCAD01";


$tdatacertificado_del_resumen_por_periodo[".strOriginalTableName"] = "Certificado del Resumen por Periodo";

	



$tdatacertificado_del_resumen_por_periodo[".showAddInPopup"] = false;

$tdatacertificado_del_resumen_por_periodo[".showEditInPopup"] = false;

$tdatacertificado_del_resumen_por_periodo[".showViewInPopup"] = false;

$tdatacertificado_del_resumen_por_periodo[".listAjax"] = false;
//	temporary
//$tdatacertificado_del_resumen_por_periodo[".listAjax"] = false;

	$tdatacertificado_del_resumen_por_periodo[".audit"] = false;

	$tdatacertificado_del_resumen_por_periodo[".locking"] = false;


$pages = $tdatacertificado_del_resumen_por_periodo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificado_del_resumen_por_periodo[".edit"] = true;
	$tdatacertificado_del_resumen_por_periodo[".afterEditAction"] = 1;
	$tdatacertificado_del_resumen_por_periodo[".closePopupAfterEdit"] = 1;
	$tdatacertificado_del_resumen_por_periodo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificado_del_resumen_por_periodo[".add"] = true;
$tdatacertificado_del_resumen_por_periodo[".afterAddAction"] = 1;
$tdatacertificado_del_resumen_por_periodo[".closePopupAfterAdd"] = 1;
$tdatacertificado_del_resumen_por_periodo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificado_del_resumen_por_periodo[".list"] = true;
}



$tdatacertificado_del_resumen_por_periodo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificado_del_resumen_por_periodo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificado_del_resumen_por_periodo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificado_del_resumen_por_periodo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificado_del_resumen_por_periodo[".printFriendly"] = true;
}



$tdatacertificado_del_resumen_por_periodo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificado_del_resumen_por_periodo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificado_del_resumen_por_periodo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificado_del_resumen_por_periodo[".isUseAjaxSuggest"] = false;



																																																																																													

$tdatacertificado_del_resumen_por_periodo[".ajaxCodeSnippetAdded"] = false;

$tdatacertificado_del_resumen_por_periodo[".buttonsAdded"] = false;

$tdatacertificado_del_resumen_por_periodo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificado_del_resumen_por_periodo[".isUseTimeForSearch"] = false;


$tdatacertificado_del_resumen_por_periodo[".badgeColor"] = "008B8B";


$tdatacertificado_del_resumen_por_periodo[".allSearchFields"] = array();
$tdatacertificado_del_resumen_por_periodo[".filterFields"] = array();
$tdatacertificado_del_resumen_por_periodo[".requiredSearchFields"] = array();

$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"] = array();
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "Concepto";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcAnte";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliAnte";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcActu";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliActu";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcReca";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliReca";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcTras";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliTras";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcNopa";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliNopa";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcNove";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliNove";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ProcTota";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ObliTota";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "Director";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "DirectorCargo";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "Abogado";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "AbogadoCargo";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "Contador";
$tdatacertificado_del_resumen_por_periodo[".googleLikeFields"][] = "ContadorCargo";




$tdatacertificado_del_resumen_por_periodo[".printerPageOrientation"] = 0;
$tdatacertificado_del_resumen_por_periodo[".nPrinterPageScale"] = 100;

$tdatacertificado_del_resumen_por_periodo[".nPrinterSplitRecords"] = 40;

$tdatacertificado_del_resumen_por_periodo[".geocodingEnabled"] = false;










$tdatacertificado_del_resumen_por_periodo[".pageSize"] = 20;

$tdatacertificado_del_resumen_por_periodo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificado_del_resumen_por_periodo[".strOrderBy"] = $tstrOrderBy;

$tdatacertificado_del_resumen_por_periodo[".orderindexes"] = array();


$tdatacertificado_del_resumen_por_periodo[".sqlHead"] = "";
$tdatacertificado_del_resumen_por_periodo[".sqlFrom"] = "";
$tdatacertificado_del_resumen_por_periodo[".sqlWhereExpr"] = "";
$tdatacertificado_del_resumen_por_periodo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificado_del_resumen_por_periodo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificado_del_resumen_por_periodo[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificado_del_resumen_por_periodo[".highlightSearchResults"] = true;

$tableKeyscertificado_del_resumen_por_periodo = array();
$tdatacertificado_del_resumen_por_periodo[".Keys"] = $tableKeyscertificado_del_resumen_por_periodo;


$tdatacertificado_del_resumen_por_periodo[".hideMobileList"] = array();




//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","Concepto");
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


	$tdatacertificado_del_resumen_por_periodo["Concepto"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "Concepto";
//	ProcAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProcAnte";
	$fdata["GoodName"] = "ProcAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcAnte");
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


	$tdatacertificado_del_resumen_por_periodo["ProcAnte"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcAnte";
//	ObliAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ObliAnte";
	$fdata["GoodName"] = "ObliAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliAnte");
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


	$tdatacertificado_del_resumen_por_periodo["ObliAnte"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliAnte";
//	ProcActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProcActu";
	$fdata["GoodName"] = "ProcActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcActu");
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


	$tdatacertificado_del_resumen_por_periodo["ProcActu"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcActu";
//	ObliActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ObliActu";
	$fdata["GoodName"] = "ObliActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliActu");
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


	$tdatacertificado_del_resumen_por_periodo["ObliActu"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliActu";
//	ProcReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProcReca";
	$fdata["GoodName"] = "ProcReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcReca");
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


	$tdatacertificado_del_resumen_por_periodo["ProcReca"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcReca";
//	ObliReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ObliReca";
	$fdata["GoodName"] = "ObliReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliReca");
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


	$tdatacertificado_del_resumen_por_periodo["ObliReca"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliReca";
//	ProcTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProcTras";
	$fdata["GoodName"] = "ProcTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcTras");
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


	$tdatacertificado_del_resumen_por_periodo["ProcTras"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcTras";
//	ObliTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ObliTras";
	$fdata["GoodName"] = "ObliTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliTras");
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


	$tdatacertificado_del_resumen_por_periodo["ObliTras"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliTras";
//	ProcNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ProcNopa";
	$fdata["GoodName"] = "ProcNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcNopa");
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


	$tdatacertificado_del_resumen_por_periodo["ProcNopa"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcNopa";
//	ObliNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ObliNopa";
	$fdata["GoodName"] = "ObliNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliNopa");
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


	$tdatacertificado_del_resumen_por_periodo["ObliNopa"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliNopa";
//	ProcNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProcNove";
	$fdata["GoodName"] = "ProcNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcNove");
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


	$tdatacertificado_del_resumen_por_periodo["ProcNove"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcNove";
//	ObliNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ObliNove";
	$fdata["GoodName"] = "ObliNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliNove");
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


	$tdatacertificado_del_resumen_por_periodo["ObliNove"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliNove";
//	ProcTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ProcTota";
	$fdata["GoodName"] = "ProcTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ProcTota");
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


	$tdatacertificado_del_resumen_por_periodo["ProcTota"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ProcTota";
//	ObliTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ObliTota";
	$fdata["GoodName"] = "ObliTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ObliTota");
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


	$tdatacertificado_del_resumen_por_periodo["ObliTota"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ObliTota";
//	INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___InteAnte");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS - C. SALDO FINAL MES ANTERIOR - InteAnte";
//	INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS____D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS_InteActu");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS -  D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS InteActu";
//	INTERESES DE MULTAS - E. RECAUDO -InteReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___E__RECAUDO__InteReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS___E__RECAUDO__InteReca");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS - E. RECAUDO -InteReca"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS - E. RECAUDO -InteReca";
//	INTERESES DE MULTAS  - F.TRASLADOS - InteTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS____F_TRASLADOS___InteTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS____F_TRASLADOS___InteTras");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS  - F.TRASLADOS - InteTras"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS  - F.TRASLADOS - InteTras";
//	INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO___InteNopa");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO - InteNopa";
//	INTERESES DE MULTAS - H. NOVEDADES - InteNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___H__NOVEDADES___InteNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS___H__NOVEDADES___InteNove");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS - H. NOVEDADES - InteNove"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS - H. NOVEDADES - InteNove";
//	INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
	$fdata["GoodName"] = "INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","INTERESES_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H____InteTota");
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


	$tdatacertificado_del_resumen_por_periodo["INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "INTERESES DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) - InteTota";
//	 COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
	$fdata["GoodName"] = "_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","_COSTAS_DE_MULTAS___C__SALDO_FINAL_MES_ANTERIOR___CostAnte");
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


	$tdatacertificado_del_resumen_por_periodo[" COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = " COSTAS DE MULTAS - C. SALDO FINAL MES ANTERIOR - CostAnte";
//	 COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
	$fdata["GoodName"] = "_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","_COSTAS_DE_MULTAS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___CostActu");
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


	$tdatacertificado_del_resumen_por_periodo[" COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = " COSTAS DE MULTAS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - CostActu";
//	COSTAS DE MULTAS - E. RECAUDO - CostReca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___E__RECAUDO___CostReca";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","COSTAS_DE_MULTAS___E__RECAUDO___CostReca");
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


	$tdatacertificado_del_resumen_por_periodo["COSTAS DE MULTAS - E. RECAUDO - CostReca"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "COSTAS DE MULTAS - E. RECAUDO - CostReca";
//	COSTAS DE MULTAS - F.TRASLADOS - CostTras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___F_TRASLADOS___CostTras";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","COSTAS_DE_MULTAS___F_TRASLADOS___CostTras");
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


	$tdatacertificado_del_resumen_por_periodo["COSTAS DE MULTAS - F.TRASLADOS - CostTras"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "COSTAS DE MULTAS - F.TRASLADOS - CostTras";
//	COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","COSTAS_DE_MULTAS___G__PROCESOS_TERMINADOS_SIN_PAGO__CostNopa");
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


	$tdatacertificado_del_resumen_por_periodo["COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "COSTAS DE MULTAS - G. PROCESOS TERMINADOS SIN PAGO -CostNopa";
//	COSTAS DE MULTAS - H. NOVEDADES - CostNove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___H__NOVEDADES___CostNove";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","COSTAS_DE_MULTAS___H__NOVEDADES___CostNove");
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


	$tdatacertificado_del_resumen_por_periodo["COSTAS DE MULTAS - H. NOVEDADES - CostNove"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "COSTAS DE MULTAS - H. NOVEDADES - CostNove";
//	COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
	$fdata["GoodName"] = "COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","COSTAS_DE_MULTAS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___CostTota");
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


	$tdatacertificado_del_resumen_por_periodo["COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "COSTAS DE MULTAS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H - CostTota";
//	 DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
	$fdata["GoodName"] = "_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","_DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___C__SALDO_FINAL_MES_ANTERIOR___DeteAnte");
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


	$tdatacertificado_del_resumen_por_periodo[" DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = " DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - C. SALDO FINAL MES ANTERIOR - DeteAnte";
//	DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
	$fdata["GoodName"] = "DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___D__PROCESOS_RECIBIDOS__NUEVOS_INTER__Y_COSTAS___DeteActu");
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


	$tdatacertificado_del_resumen_por_periodo["DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - D. PROCESOS RECIBIDOS, NUEVOS INTER. Y COSTAS - DeteActu";
//	DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
	$fdata["GoodName"] = "DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","DETERIORO_DE_CARTERA_INGRESOS_NO_TRIBUTARIOS___I__SALDO_FINAL_COBRO_COACTIVO_PERIODO_ACTUAL_C_D_E_F_G_H___DeteTota");
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


	$tdatacertificado_del_resumen_por_periodo["DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "DETERIORO DE CARTERA INGRESOS NO TRIBUTARIOS - I. SALDO FINAL COBRO COACTIVO PERIODO ACTUAL(C+D-E+F-G+H) -DeteTota";
//	Director
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Director";
	$fdata["GoodName"] = "Director";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","Director");
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


	$tdatacertificado_del_resumen_por_periodo["Director"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "Director";
//	DirectorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "DirectorCargo";
	$fdata["GoodName"] = "DirectorCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","DirectorCargo");
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


	$tdatacertificado_del_resumen_por_periodo["DirectorCargo"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "DirectorCargo";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","Abogado");
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


	$tdatacertificado_del_resumen_por_periodo["Abogado"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "Abogado";
//	AbogadoCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AbogadoCargo";
	$fdata["GoodName"] = "AbogadoCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","AbogadoCargo");
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


	$tdatacertificado_del_resumen_por_periodo["AbogadoCargo"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "AbogadoCargo";
//	Contador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Contador";
	$fdata["GoodName"] = "Contador";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","Contador");
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


	$tdatacertificado_del_resumen_por_periodo["Contador"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "Contador";
//	ContadorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ContadorCargo";
	$fdata["GoodName"] = "ContadorCargo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Certificado_del_Resumen_por_Periodo","ContadorCargo");
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


	$tdatacertificado_del_resumen_por_periodo["ContadorCargo"] = $fdata;
		$tdatacertificado_del_resumen_por_periodo[".searchableFields"][] = "ContadorCargo";


$tables_data["Certificado del Resumen por Periodo"]=&$tdatacertificado_del_resumen_por_periodo;
$field_labels["Certificado_del_Resumen_por_Periodo"] = &$fieldLabelscertificado_del_resumen_por_periodo;
$fieldToolTips["Certificado_del_Resumen_por_Periodo"] = &$fieldToolTipscertificado_del_resumen_por_periodo;
$placeHolders["Certificado_del_Resumen_por_Periodo"] = &$placeHolderscertificado_del_resumen_por_periodo;
$page_titles["Certificado_del_Resumen_por_Periodo"] = &$pageTitlescertificado_del_resumen_por_periodo;


changeTextControlsToDate( "Certificado del Resumen por Periodo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Certificado del Resumen por Periodo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Certificado del Resumen por Periodo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/certificado_del_resumen_por_periodo_ops.php" ) );



	
		;

																																						

$tdatacertificado_del_resumen_por_periodo[".sqlquery"] = $queryData_certificado_del_resumen_por_periodo;



$tdatacertificado_del_resumen_por_periodo[".hasEvents"] = false;

?>