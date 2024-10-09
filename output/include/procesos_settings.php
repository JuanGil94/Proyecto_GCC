<?php
$tdataprocesos = array();
$tdataprocesos[".searchableFields"] = array();
$tdataprocesos[".ShortName"] = "procesos";
$tdataprocesos[".OwnerID"] = "";
$tdataprocesos[".OriginalTable"] = "dbo.Procesos";


$tdataprocesos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprocesos[".originalPagesByType"] = $tdataprocesos[".pagesByType"];
$tdataprocesos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprocesos[".originalPages"] = $tdataprocesos[".pages"];
$tdataprocesos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprocesos[".originalDefaultPages"] = $tdataprocesos[".defaultPages"];

//	field labels
$fieldLabelsprocesos = array();
$fieldToolTipsprocesos = array();
$pageTitlesprocesos = array();
$placeHoldersprocesos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesos["Spanish"] = array();
	$fieldToolTipsprocesos["Spanish"] = array();
	$placeHoldersprocesos["Spanish"] = array();
	$pageTitlesprocesos["Spanish"] = array();
	$fieldLabelsprocesos["Spanish"]["ProcesoId"] = "ProcesoId";
	$fieldToolTipsprocesos["Spanish"]["ProcesoId"] = "";
	$placeHoldersprocesos["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprocesos["Spanish"]["SeccionalId"] = "Seccional";
	$fieldToolTipsprocesos["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesos["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesos["Spanish"]["AbogadoId"] = "Abogado";
	$fieldToolTipsprocesos["Spanish"]["AbogadoId"] = "";
	$placeHoldersprocesos["Spanish"]["AbogadoId"] = "";
	$fieldLabelsprocesos["Spanish"]["Fecha"] = "F. Creación";
	$fieldToolTipsprocesos["Spanish"]["Fecha"] = "";
	$placeHoldersprocesos["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesos["Spanish"]["Numero"] = "No. Proceso";
	$fieldToolTipsprocesos["Spanish"]["Numero"] = "";
	$placeHoldersprocesos["Spanish"]["Numero"] = "";
	$fieldLabelsprocesos["Spanish"]["DespachoId"] = "Despacho/Juzgado";
	$fieldToolTipsprocesos["Spanish"]["DespachoId"] = "";
	$placeHoldersprocesos["Spanish"]["DespachoId"] = "";
	$fieldLabelsprocesos["Spanish"]["SancionadoId"] = "Deudor";
	$fieldToolTipsprocesos["Spanish"]["SancionadoId"] = "";
	$placeHoldersprocesos["Spanish"]["SancionadoId"] = "";
	$fieldLabelsprocesos["Spanish"]["Providencia"] = "F. Providencia";
	$fieldToolTipsprocesos["Spanish"]["Providencia"] = "";
	$placeHoldersprocesos["Spanish"]["Providencia"] = "";
	$fieldLabelsprocesos["Spanish"]["Ejecutoria"] = "F. Ejecutoria";
	$fieldToolTipsprocesos["Spanish"]["Ejecutoria"] = "";
	$placeHoldersprocesos["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsprocesos["Spanish"]["ConceptoId"] = "Concepto";
	$fieldToolTipsprocesos["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesos["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesos["Spanish"]["EstadoId"] = "Estado";
	$fieldToolTipsprocesos["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesos["Spanish"]["EstadoId"] = "";
	$fieldLabelsprocesos["Spanish"]["EtapaId"] = "Etapa ";
	$fieldToolTipsprocesos["Spanish"]["EtapaId"] = "";
	$placeHoldersprocesos["Spanish"]["EtapaId"] = "";
	$fieldLabelsprocesos["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsprocesos["Spanish"]["Folios"] = "";
	$placeHoldersprocesos["Spanish"]["Folios"] = "";
	$fieldLabelsprocesos["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsprocesos["Spanish"]["Tipo"] = "";
	$placeHoldersprocesos["Spanish"]["Tipo"] = "";
	$fieldLabelsprocesos["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsprocesos["Spanish"]["Cantidad"] = "";
	$placeHoldersprocesos["Spanish"]["Cantidad"] = "";
	$fieldLabelsprocesos["Spanish"]["Obligacion"] = "Obli.Saldo";
	$fieldToolTipsprocesos["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesos["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesos["Spanish"]["Costas"] = "Cost.Saldo";
	$fieldToolTipsprocesos["Spanish"]["Costas"] = "";
	$placeHoldersprocesos["Spanish"]["Costas"] = "";
	$fieldLabelsprocesos["Spanish"]["Liquidacion"] = "F.Liquidación";
	$fieldToolTipsprocesos["Spanish"]["Liquidacion"] = "";
	$placeHoldersprocesos["Spanish"]["Liquidacion"] = "";
	$fieldLabelsprocesos["Spanish"]["Dias"] = "Prescripción Días";
	$fieldToolTipsprocesos["Spanish"]["Dias"] = "";
	$placeHoldersprocesos["Spanish"]["Dias"] = "";
	$fieldLabelsprocesos["Spanish"]["Intereses"] = "Inte.Saldo";
	$fieldToolTipsprocesos["Spanish"]["Intereses"] = "";
	$placeHoldersprocesos["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesos["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsprocesos["Spanish"]["Recaudo"] = "";
	$placeHoldersprocesos["Spanish"]["Recaudo"] = "";
	$fieldLabelsprocesos["Spanish"]["CalificacionId"] = "Calificacion Id";
	$fieldToolTipsprocesos["Spanish"]["CalificacionId"] = "";
	$placeHoldersprocesos["Spanish"]["CalificacionId"] = "";
	$fieldLabelsprocesos["Spanish"]["Terminacion"] = "F. Terminación";
	$fieldToolTipsprocesos["Spanish"]["Terminacion"] = "";
	$placeHoldersprocesos["Spanish"]["Terminacion"] = "";
	$fieldLabelsprocesos["Spanish"]["MotivoId"] = "Motivo Terminación";
	$fieldToolTipsprocesos["Spanish"]["MotivoId"] = "";
	$placeHoldersprocesos["Spanish"]["MotivoId"] = "";
	$fieldLabelsprocesos["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsprocesos["Spanish"]["Observaciones"] = "";
	$placeHoldersprocesos["Spanish"]["Observaciones"] = "";
	$fieldLabelsprocesos["Spanish"]["Cuotas"] = "Cuotas";
	$fieldToolTipsprocesos["Spanish"]["Cuotas"] = "";
	$placeHoldersprocesos["Spanish"]["Cuotas"] = "";
	$fieldLabelsprocesos["Spanish"]["Abono"] = "Abono";
	$fieldToolTipsprocesos["Spanish"]["Abono"] = "";
	$placeHoldersprocesos["Spanish"]["Abono"] = "";
	$fieldLabelsprocesos["Spanish"]["Inicio"] = "Inicio";
	$fieldToolTipsprocesos["Spanish"]["Inicio"] = "";
	$placeHoldersprocesos["Spanish"]["Inicio"] = "";
	$fieldLabelsprocesos["Spanish"]["VlrCuota"] = "Vlr Cuota";
	$fieldToolTipsprocesos["Spanish"]["VlrCuota"] = "";
	$placeHoldersprocesos["Spanish"]["VlrCuota"] = "";
	$fieldLabelsprocesos["Spanish"]["VlrIntereses"] = "Vlr Intereses";
	$fieldToolTipsprocesos["Spanish"]["VlrIntereses"] = "";
	$placeHoldersprocesos["Spanish"]["VlrIntereses"] = "";
	$fieldLabelsprocesos["Spanish"]["Garantia"] = "Garantia";
	$fieldToolTipsprocesos["Spanish"]["Garantia"] = "";
	$placeHoldersprocesos["Spanish"]["Garantia"] = "";
	$fieldLabelsprocesos["Spanish"]["Radicado"] = "No. Radicado Origen";
	$fieldToolTipsprocesos["Spanish"]["Radicado"] = "";
	$placeHoldersprocesos["Spanish"]["Radicado"] = "";
	$fieldLabelsprocesos["Spanish"]["Remisorio"] = "Remisorio";
	$fieldToolTipsprocesos["Spanish"]["Remisorio"] = "";
	$placeHoldersprocesos["Spanish"]["Remisorio"] = "";
	$fieldLabelsprocesos["Spanish"]["Acuerdo"] = "F. Acuerdo Pago";
	$fieldToolTipsprocesos["Spanish"]["Acuerdo"] = "";
	$placeHoldersprocesos["Spanish"]["Acuerdo"] = "";
	$fieldLabelsprocesos["Spanish"]["Incumplimiento"] = "F.Incumplimiento";
	$fieldToolTipsprocesos["Spanish"]["Incumplimiento"] = "";
	$placeHoldersprocesos["Spanish"]["Incumplimiento"] = "";
	$fieldLabelsprocesos["Spanish"]["Notificacion"] = "F. Notificación";
	$fieldToolTipsprocesos["Spanish"]["Notificacion"] = "";
	$placeHoldersprocesos["Spanish"]["Notificacion"] = "";
	$fieldLabelsprocesos["Spanish"]["Suspension"] = "Suspension";
	$fieldToolTipsprocesos["Spanish"]["Suspension"] = "";
	$placeHoldersprocesos["Spanish"]["Suspension"] = "";
	$fieldLabelsprocesos["Spanish"]["Traslado"] = "Traslado";
	$fieldToolTipsprocesos["Spanish"]["Traslado"] = "";
	$placeHoldersprocesos["Spanish"]["Traslado"] = "";
	$fieldLabelsprocesos["Spanish"]["Error"] = "Error";
	$fieldToolTipsprocesos["Spanish"]["Error"] = "";
	$placeHoldersprocesos["Spanish"]["Error"] = "";
	$fieldLabelsprocesos["Spanish"]["CarteraTipoId"] = "Cartera";
	$fieldToolTipsprocesos["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesos["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesos["Spanish"]["ConceptoAbogado"] = "Concepto Abogado";
	$fieldToolTipsprocesos["Spanish"]["ConceptoAbogado"] = "";
	$placeHoldersprocesos["Spanish"]["ConceptoAbogado"] = "";
	$fieldLabelsprocesos["Spanish"]["Origen"] = "No. Radicado Origen";
	$fieldToolTipsprocesos["Spanish"]["Origen"] = "";
	$placeHoldersprocesos["Spanish"]["Origen"] = "";
	$fieldLabelsprocesos["Spanish"]["Carpeta"] = "Carpeta";
	$fieldToolTipsprocesos["Spanish"]["Carpeta"] = "";
	$placeHoldersprocesos["Spanish"]["Carpeta"] = "";
	$fieldLabelsprocesos["Spanish"]["ImportacionId"] = "Importacion Id";
	$fieldToolTipsprocesos["Spanish"]["ImportacionId"] = "";
	$placeHoldersprocesos["Spanish"]["ImportacionId"] = "";
	$fieldLabelsprocesos["Spanish"]["ActuacionId"] = "Ult.Actuación";
	$fieldToolTipsprocesos["Spanish"]["ActuacionId"] = "";
	$placeHoldersprocesos["Spanish"]["ActuacionId"] = "";
	$fieldLabelsprocesos["Spanish"]["ObligacionInicial"] = "Obli.Inicial";
	$fieldToolTipsprocesos["Spanish"]["ObligacionInicial"] = "";
	$placeHoldersprocesos["Spanish"]["ObligacionInicial"] = "";
	$fieldLabelsprocesos["Spanish"]["CostasInicial"] = "Cost.Inicial";
	$fieldToolTipsprocesos["Spanish"]["CostasInicial"] = "";
	$placeHoldersprocesos["Spanish"]["CostasInicial"] = "";
	$fieldLabelsprocesos["Spanish"]["InteresesInicial"] = "Inte.Inicial";
	$fieldToolTipsprocesos["Spanish"]["InteresesInicial"] = "";
	$placeHoldersprocesos["Spanish"]["InteresesInicial"] = "";
	$fieldLabelsprocesos["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipsprocesos["Spanish"]["MinJusticia"] = "";
	$placeHoldersprocesos["Spanish"]["MinJusticia"] = "";
	$fieldLabelsprocesos["Spanish"]["Revocatoria"] = "Revocatoria";
	$fieldToolTipsprocesos["Spanish"]["Revocatoria"] = "";
	$placeHoldersprocesos["Spanish"]["Revocatoria"] = "";
	$fieldLabelsprocesos["Spanish"]["Mayor"] = "Mayor";
	$fieldToolTipsprocesos["Spanish"]["Mayor"] = "";
	$placeHoldersprocesos["Spanish"]["Mayor"] = "";
	$fieldLabelsprocesos["Spanish"]["NotificacionValidada"] = "Notificacion Validada";
	$fieldToolTipsprocesos["Spanish"]["NotificacionValidada"] = "";
	$placeHoldersprocesos["Spanish"]["NotificacionValidada"] = "";
	$fieldLabelsprocesos["Spanish"]["Validado"] = "Validado";
	$fieldToolTipsprocesos["Spanish"]["Validado"] = "";
	$placeHoldersprocesos["Spanish"]["Validado"] = "";
	$fieldLabelsprocesos["Spanish"]["Seleccionado"] = "Seleccionado";
	$fieldToolTipsprocesos["Spanish"]["Seleccionado"] = "";
	$placeHoldersprocesos["Spanish"]["Seleccionado"] = "";
	$fieldLabelsprocesos["Spanish"]["CompetenciaId"] = "Competencia Id";
	$fieldToolTipsprocesos["Spanish"]["CompetenciaId"] = "";
	$placeHoldersprocesos["Spanish"]["CompetenciaId"] = "";
	$fieldLabelsprocesos["Spanish"]["MinjusticiaId"] = "#Minjusticia";
	$fieldToolTipsprocesos["Spanish"]["MinjusticiaId"] = "";
	$placeHoldersprocesos["Spanish"]["MinjusticiaId"] = "";
	$fieldLabelsprocesos["Spanish"]["SeleccionadoPor"] = "Seleccionado Por";
	$fieldToolTipsprocesos["Spanish"]["SeleccionadoPor"] = "";
	$placeHoldersprocesos["Spanish"]["SeleccionadoPor"] = "";
	$fieldLabelsprocesos["Spanish"]["Subsanar"] = "Subsanar";
	$fieldToolTipsprocesos["Spanish"]["Subsanar"] = "";
	$placeHoldersprocesos["Spanish"]["Subsanar"] = "";
	$fieldLabelsprocesos["Spanish"]["NumeroMinjusticia"] = "Numero Minjusticia";
	$fieldToolTipsprocesos["Spanish"]["NumeroMinjusticia"] = "";
	$placeHoldersprocesos["Spanish"]["NumeroMinjusticia"] = "";
	$fieldLabelsprocesos["Spanish"]["ProcesoIdOrigen"] = "Proceso Id Origen";
	$fieldToolTipsprocesos["Spanish"]["ProcesoIdOrigen"] = "";
	$placeHoldersprocesos["Spanish"]["ProcesoIdOrigen"] = "";
	$fieldLabelsprocesos["Spanish"]["SeleccionadoFecha"] = "Seleccionado Fecha";
	$fieldToolTipsprocesos["Spanish"]["SeleccionadoFecha"] = "";
	$placeHoldersprocesos["Spanish"]["SeleccionadoFecha"] = "";
	$fieldLabelsprocesos["Spanish"]["InteresesIniciales"] = "Intereses Iniciales";
	$fieldToolTipsprocesos["Spanish"]["InteresesIniciales"] = "";
	$placeHoldersprocesos["Spanish"]["InteresesIniciales"] = "";
	$fieldLabelsprocesos["Spanish"]["InteresesCalculados"] = "Inte.Saldo";
	$fieldToolTipsprocesos["Spanish"]["InteresesCalculados"] = "";
	$placeHoldersprocesos["Spanish"]["InteresesCalculados"] = "";
	$fieldLabelsprocesos["Spanish"]["ProcesoIdDestino"] = "Proceso Id Destino";
	$fieldToolTipsprocesos["Spanish"]["ProcesoIdDestino"] = "";
	$placeHoldersprocesos["Spanish"]["ProcesoIdDestino"] = "";
	$fieldLabelsprocesos["Spanish"]["RecaudoMinjusticia"] = "Recaudo Minjusticia";
	$fieldToolTipsprocesos["Spanish"]["RecaudoMinjusticia"] = "";
	$placeHoldersprocesos["Spanish"]["RecaudoMinjusticia"] = "";
	$fieldLabelsprocesos["Spanish"]["RecaudoTerminado"] = "Recaudo Terminado";
	$fieldToolTipsprocesos["Spanish"]["RecaudoTerminado"] = "";
	$placeHoldersprocesos["Spanish"]["RecaudoTerminado"] = "";
	$fieldLabelsprocesos["Spanish"]["Persuasivo"] = "Persuasivo";
	$fieldToolTipsprocesos["Spanish"]["Persuasivo"] = "";
	$placeHoldersprocesos["Spanish"]["Persuasivo"] = "";
	$fieldLabelsprocesos["Spanish"]["ObligacionCreacion"] = "Obli.Saldo";
	$fieldToolTipsprocesos["Spanish"]["ObligacionCreacion"] = "";
	$placeHoldersprocesos["Spanish"]["ObligacionCreacion"] = "";
	$fieldLabelsprocesos["Spanish"]["InteresesCreacion"] = "Intereses Creacion";
	$fieldToolTipsprocesos["Spanish"]["InteresesCreacion"] = "";
	$placeHoldersprocesos["Spanish"]["InteresesCreacion"] = "";
	$fieldLabelsprocesos["Spanish"]["CostasCreacion"] = "Costas Creacion";
	$fieldToolTipsprocesos["Spanish"]["CostasCreacion"] = "";
	$placeHoldersprocesos["Spanish"]["CostasCreacion"] = "";
	$fieldLabelsprocesos["Spanish"]["Plazo"] = "F. Plazo";
	$fieldToolTipsprocesos["Spanish"]["Plazo"] = "";
	$placeHoldersprocesos["Spanish"]["Plazo"] = "";
	$fieldLabelsprocesos["Spanish"]["NaturalezaId"] = "Naturaleza";
	$fieldToolTipsprocesos["Spanish"]["NaturalezaId"] = "";
	$placeHoldersprocesos["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsprocesos["Spanish"]["TrasladoCartera"] = "Traslado Cartera";
	$fieldToolTipsprocesos["Spanish"]["TrasladoCartera"] = "";
	$placeHoldersprocesos["Spanish"]["TrasladoCartera"] = "";
	$fieldLabelsprocesos["Spanish"]["CarteraTipoIdOrigen"] = "Cartera Tipo Id Origen";
	$fieldToolTipsprocesos["Spanish"]["CarteraTipoIdOrigen"] = "";
	$placeHoldersprocesos["Spanish"]["CarteraTipoIdOrigen"] = "";
	$fieldLabelsprocesos["Spanish"]["TrasladoConcepto"] = "Traslado Concepto";
	$fieldToolTipsprocesos["Spanish"]["TrasladoConcepto"] = "";
	$placeHoldersprocesos["Spanish"]["TrasladoConcepto"] = "";
	$fieldLabelsprocesos["Spanish"]["ConceptoIdOrigen"] = "Concepto Id Origen";
	$fieldToolTipsprocesos["Spanish"]["ConceptoIdOrigen"] = "";
	$placeHoldersprocesos["Spanish"]["ConceptoIdOrigen"] = "";
	$fieldLabelsprocesos["Spanish"]["AutorizadoPlazo"] = "Autorizado Plazo";
	$fieldToolTipsprocesos["Spanish"]["AutorizadoPlazo"] = "";
	$placeHoldersprocesos["Spanish"]["AutorizadoPlazo"] = "";
	$fieldLabelsprocesos["Spanish"]["AutorizadoFecha"] = "Autorizado Fecha";
	$fieldToolTipsprocesos["Spanish"]["AutorizadoFecha"] = "";
	$placeHoldersprocesos["Spanish"]["AutorizadoFecha"] = "";
	$fieldLabelsprocesos["Spanish"]["AutorizadoPor"] = "Autorizado Por";
	$fieldToolTipsprocesos["Spanish"]["AutorizadoPor"] = "";
	$placeHoldersprocesos["Spanish"]["AutorizadoPor"] = "";
	$fieldLabelsprocesos["Spanish"]["Reliquidacion"] = "Reliquidacion";
	$fieldToolTipsprocesos["Spanish"]["Reliquidacion"] = "";
	$placeHoldersprocesos["Spanish"]["Reliquidacion"] = "";
	$fieldLabelsprocesos["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipsprocesos["Spanish"]["ChequeoId"] = "";
	$placeHoldersprocesos["Spanish"]["ChequeoId"] = "";
	$fieldLabelsprocesos["Spanish"]["VlrCostas"] = "Vlr Costas";
	$fieldToolTipsprocesos["Spanish"]["VlrCostas"] = "";
	$placeHoldersprocesos["Spanish"]["VlrCostas"] = "";
	$fieldLabelsprocesos["Spanish"]["VlrInteresesPlazo"] = "Vlr Intereses Plazo";
	$fieldToolTipsprocesos["Spanish"]["VlrInteresesPlazo"] = "";
	$placeHoldersprocesos["Spanish"]["VlrInteresesPlazo"] = "";
	$fieldLabelsprocesos["Spanish"]["SaldoFinal"] = "Saldo Total";
	$fieldToolTipsprocesos["Spanish"]["SaldoFinal"] = "";
	$placeHoldersprocesos["Spanish"]["SaldoFinal"] = "";
	if (count($fieldToolTipsprocesos["Spanish"]))
		$tdataprocesos[".isUseToolTips"] = true;
}


	$tdataprocesos[".NCSearch"] = true;



$tdataprocesos[".shortTableName"] = "procesos";
$tdataprocesos[".nSecOptions"] = 0;

$tdataprocesos[".mainTableOwnerID"] = "";
$tdataprocesos[".entityType"] = 0;
$tdataprocesos[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesos[".strOriginalTableName"] = "dbo.Procesos";

	



$tdataprocesos[".showAddInPopup"] = false;

$tdataprocesos[".showEditInPopup"] = false;

$tdataprocesos[".showViewInPopup"] = false;

$tdataprocesos[".listAjax"] = false;
//	temporary
//$tdataprocesos[".listAjax"] = false;

	$tdataprocesos[".audit"] = true;

	$tdataprocesos[".locking"] = false;


$pages = $tdataprocesos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesos[".edit"] = true;
	$tdataprocesos[".afterEditAction"] = 1;
	$tdataprocesos[".closePopupAfterEdit"] = 1;
	$tdataprocesos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesos[".add"] = true;
$tdataprocesos[".afterAddAction"] = 1;
$tdataprocesos[".closePopupAfterAdd"] = 1;
$tdataprocesos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesos[".list"] = true;
}



$tdataprocesos[".strSortControlSettingsJSON"] = "";

$tdataprocesos[".strClickActionJSON"] = "{\"fields\":{\"AbogadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Abono\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ActuacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Acuerdo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"AutorizadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CalificacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cantidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Carpeta\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CarteraTipoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ChequeoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CompetenciaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoAbogado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ConceptoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Costas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CostasInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cuotas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DespachoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Dias\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ejecutoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Error\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EstadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EtapaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Folios\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Garantia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ImportacionId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Incumplimiento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Intereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCalculados\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"InteresesIniciales\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Mayor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinJusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MinjusticiaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MotivoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NaturalezaId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notificacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NotificacionValidada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Numero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"NumeroMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obligacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionCreacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ObligacionInicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Origen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Persuasivo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Prescripcion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}},\"ProcesoIdDestino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ProcesoIdOrigen\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Providencia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Radicado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Recaudo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoMinjusticia\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"RecaudoTerminado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Reliquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Remisorio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Revocatoria\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SancionadoId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeccionalId\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Seleccionado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoFecha\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SeleccionadoPor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Subsanar\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Suspension\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Terminacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tipo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Traslado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoCartera\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"TrasladoConcepto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Validado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCostas\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrCuota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrIntereses\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"VlrInteresesPlazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"dbo_Procesos_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.Solidarios\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.Solidarios\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataprocesos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesos[".printFriendly"] = true;
}



$tdataprocesos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									

$tdataprocesos[".ajaxCodeSnippetAdded"] = false;

$tdataprocesos[".buttonsAdded"] = false;

$tdataprocesos[".addPageEvents"] = true;

// use timepicker for search panel
$tdataprocesos[".isUseTimeForSearch"] = false;


$tdataprocesos[".badgeColor"] = "dc143c";


$tdataprocesos[".allSearchFields"] = array();
$tdataprocesos[".filterFields"] = array();
$tdataprocesos[".requiredSearchFields"] = array();

$tdataprocesos[".googleLikeFields"] = array();
$tdataprocesos[".googleLikeFields"][] = "ProcesoId";
$tdataprocesos[".googleLikeFields"][] = "SeccionalId";
$tdataprocesos[".googleLikeFields"][] = "AbogadoId";
$tdataprocesos[".googleLikeFields"][] = "Fecha";
$tdataprocesos[".googleLikeFields"][] = "Numero";
$tdataprocesos[".googleLikeFields"][] = "DespachoId";
$tdataprocesos[".googleLikeFields"][] = "SancionadoId";
$tdataprocesos[".googleLikeFields"][] = "Providencia";
$tdataprocesos[".googleLikeFields"][] = "Ejecutoria";
$tdataprocesos[".googleLikeFields"][] = "ConceptoId";
$tdataprocesos[".googleLikeFields"][] = "EstadoId";
$tdataprocesos[".googleLikeFields"][] = "EtapaId";
$tdataprocesos[".googleLikeFields"][] = "Folios";
$tdataprocesos[".googleLikeFields"][] = "Tipo";
$tdataprocesos[".googleLikeFields"][] = "Cantidad";
$tdataprocesos[".googleLikeFields"][] = "Obligacion";
$tdataprocesos[".googleLikeFields"][] = "SaldoFinal";
$tdataprocesos[".googleLikeFields"][] = "Costas";
$tdataprocesos[".googleLikeFields"][] = "Liquidacion";
$tdataprocesos[".googleLikeFields"][] = "Dias";
$tdataprocesos[".googleLikeFields"][] = "Intereses";
$tdataprocesos[".googleLikeFields"][] = "Recaudo";
$tdataprocesos[".googleLikeFields"][] = "CalificacionId";
$tdataprocesos[".googleLikeFields"][] = "Terminacion";
$tdataprocesos[".googleLikeFields"][] = "MotivoId";
$tdataprocesos[".googleLikeFields"][] = "Observaciones";
$tdataprocesos[".googleLikeFields"][] = "Cuotas";
$tdataprocesos[".googleLikeFields"][] = "Abono";
$tdataprocesos[".googleLikeFields"][] = "Inicio";
$tdataprocesos[".googleLikeFields"][] = "VlrCuota";
$tdataprocesos[".googleLikeFields"][] = "VlrIntereses";
$tdataprocesos[".googleLikeFields"][] = "Garantia";
$tdataprocesos[".googleLikeFields"][] = "Radicado";
$tdataprocesos[".googleLikeFields"][] = "Remisorio";
$tdataprocesos[".googleLikeFields"][] = "Acuerdo";
$tdataprocesos[".googleLikeFields"][] = "Incumplimiento";
$tdataprocesos[".googleLikeFields"][] = "Notificacion";
$tdataprocesos[".googleLikeFields"][] = "Suspension";
$tdataprocesos[".googleLikeFields"][] = "Traslado";
$tdataprocesos[".googleLikeFields"][] = "Error";
$tdataprocesos[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesos[".googleLikeFields"][] = "ConceptoAbogado";
$tdataprocesos[".googleLikeFields"][] = "Origen";
$tdataprocesos[".googleLikeFields"][] = "Carpeta";
$tdataprocesos[".googleLikeFields"][] = "ImportacionId";
$tdataprocesos[".googleLikeFields"][] = "ActuacionId";
$tdataprocesos[".googleLikeFields"][] = "ObligacionInicial";
$tdataprocesos[".googleLikeFields"][] = "CostasInicial";
$tdataprocesos[".googleLikeFields"][] = "InteresesInicial";
$tdataprocesos[".googleLikeFields"][] = "MinJusticia";
$tdataprocesos[".googleLikeFields"][] = "Revocatoria";
$tdataprocesos[".googleLikeFields"][] = "Mayor";
$tdataprocesos[".googleLikeFields"][] = "NotificacionValidada";
$tdataprocesos[".googleLikeFields"][] = "Validado";
$tdataprocesos[".googleLikeFields"][] = "Seleccionado";
$tdataprocesos[".googleLikeFields"][] = "CompetenciaId";
$tdataprocesos[".googleLikeFields"][] = "MinjusticiaId";
$tdataprocesos[".googleLikeFields"][] = "SeleccionadoPor";
$tdataprocesos[".googleLikeFields"][] = "Subsanar";
$tdataprocesos[".googleLikeFields"][] = "NumeroMinjusticia";
$tdataprocesos[".googleLikeFields"][] = "ProcesoIdOrigen";
$tdataprocesos[".googleLikeFields"][] = "SeleccionadoFecha";
$tdataprocesos[".googleLikeFields"][] = "InteresesIniciales";
$tdataprocesos[".googleLikeFields"][] = "InteresesCalculados";
$tdataprocesos[".googleLikeFields"][] = "ProcesoIdDestino";
$tdataprocesos[".googleLikeFields"][] = "RecaudoMinjusticia";
$tdataprocesos[".googleLikeFields"][] = "RecaudoTerminado";
$tdataprocesos[".googleLikeFields"][] = "Persuasivo";
$tdataprocesos[".googleLikeFields"][] = "ObligacionCreacion";
$tdataprocesos[".googleLikeFields"][] = "InteresesCreacion";
$tdataprocesos[".googleLikeFields"][] = "CostasCreacion";
$tdataprocesos[".googleLikeFields"][] = "Plazo";
$tdataprocesos[".googleLikeFields"][] = "NaturalezaId";
$tdataprocesos[".googleLikeFields"][] = "TrasladoCartera";
$tdataprocesos[".googleLikeFields"][] = "CarteraTipoIdOrigen";
$tdataprocesos[".googleLikeFields"][] = "TrasladoConcepto";
$tdataprocesos[".googleLikeFields"][] = "ConceptoIdOrigen";
$tdataprocesos[".googleLikeFields"][] = "AutorizadoPlazo";
$tdataprocesos[".googleLikeFields"][] = "AutorizadoFecha";
$tdataprocesos[".googleLikeFields"][] = "AutorizadoPor";
$tdataprocesos[".googleLikeFields"][] = "Reliquidacion";
$tdataprocesos[".googleLikeFields"][] = "ChequeoId";
$tdataprocesos[".googleLikeFields"][] = "VlrCostas";
$tdataprocesos[".googleLikeFields"][] = "VlrInteresesPlazo";



$tdataprocesos[".tableType"] = "list";

$tdataprocesos[".printerPageOrientation"] = 0;
$tdataprocesos[".nPrinterPageScale"] = 100;

$tdataprocesos[".nPrinterSplitRecords"] = 40;

$tdataprocesos[".geocodingEnabled"] = false;




$tdataprocesos[".isDisplayLoading"] = true;

$tdataprocesos[".isResizeColumns"] = true;





$tdataprocesos[".pageSize"] = 20;

$tdataprocesos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ProcesoId DESC";
$tdataprocesos[".strOrderBy"] = $tstrOrderBy;

$tdataprocesos[".orderindexes"] = array();
	$tdataprocesos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ProcesoId");



$tdataprocesos[".sqlHead"] = "SELECT ProcesoId AS ProcesoId,  SeccionalId,  AbogadoId,  Fecha,  Numero,  DespachoId,  SancionadoId,  Providencia,  Ejecutoria,  ConceptoId,  EstadoId,  EtapaId,  Folios,  Tipo,  Cantidad,  FORMAT(Obligacion, 'C', 'es-CO') AS Obligacion,  FORMAT(Obligacion+Costas+Intereses, 'C', 'es-CO') AS SaldoFinal,  Costas,  Liquidacion,  Dias,  Intereses,  FORMAT(Recaudo, 'C', 'es-CO') AS Recaudo,  CalificacionId,  Terminacion,  MotivoId,  Observaciones,  Cuotas,  FORMAT(Abono, 'C', 'es-CO') AS Abono,  Inicio,  VlrCuota,  VlrIntereses,  Garantia,  Radicado,  Remisorio,  Acuerdo,  Incumplimiento,  Notificacion,  Suspension,  Traslado,  Error,  CarteraTipoId,  ConceptoAbogado,  Origen,  Carpeta,  ImportacionId,  ActuacionId,  FORMAT(ObligacionInicial, 'C', 'es-CO') AS ObligacionInicial,  FORMAT(CostasInicial, 'C', 'es-CO') AS CostasInicial,  FORMAT(InteresesInicial, 'C', 'es-CO') AS InteresesInicial,  MinJusticia,  Revocatoria,  Mayor,  NotificacionValidada,  Validado,  Seleccionado,  CompetenciaId,  MinjusticiaId,  SeleccionadoPor,  Subsanar,  NumeroMinjusticia,  ProcesoIdOrigen,  SeleccionadoFecha,  InteresesIniciales,  InteresesCalculados,  ProcesoIdDestino,  RecaudoMinjusticia,  RecaudoTerminado,  Persuasivo,  FORMAT(ObligacionCreacion, 'C', 'es-CO') AS ObligacionCreacion,  InteresesCreacion,  CostasCreacion,  Plazo,  NaturalezaId,  TrasladoCartera,  CarteraTipoIdOrigen,  TrasladoConcepto,  ConceptoIdOrigen,  AutorizadoPlazo,  AutorizadoFecha,  AutorizadoPor,  Reliquidacion,  ChequeoId,  VlrCostas,  VlrInteresesPlazo";
$tdataprocesos[".sqlFrom"] = "FROM dbo.Procesos";
$tdataprocesos[".sqlWhereExpr"] = "(SeccionalId in (:session.SeccionalesWhere))";
$tdataprocesos[".sqlTail"] = "";

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
$tdataprocesos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocesos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesos[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesos[".highlightSearchResults"] = true;

$tableKeysprocesos = array();
$tableKeysprocesos[] = "ProcesoId";
$tdataprocesos[".Keys"] = $tableKeysprocesos;


$tdataprocesos[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ProcesoId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProcesoId";

		$fdata["sourceSingle"] = "ProcesoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoId";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ProcesoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ProcesoId";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","SeccionalId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SeccionalId";

		$fdata["sourceSingle"] = "SeccionalId";

		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Seccionales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SeccionalId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Seccional";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["SeccionalId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "SeccionalId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","AbogadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AbogadoId";

		$fdata["sourceSingle"] = "AbogadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Abogados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AbogadoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Abogado";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["AbogadoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "AbogadoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Fecha"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Fecha";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero";

		$fdata["sourceSingle"] = "Numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Numero"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Numero";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","DespachoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DespachoId";

		$fdata["sourceSingle"] = "DespachoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoId";

	
	
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
	$edata["LookupTable"] = "dbo.Despachos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DespachoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Codigo + ' - ' + Despacho";

	

		$edata["CustomDisplay"] = "true";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["DespachoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "DespachoId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","SancionadoId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.Sancionados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SancionadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Sancionado+ ' -  ' +Documento";

	

		$edata["CustomDisplay"] = "true";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["SancionadoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "SancionadoId";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Providencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Providencia";

		$fdata["sourceSingle"] = "Providencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Providencia";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Providencia"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Ejecutoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ejecutoria";

		$fdata["sourceSingle"] = "Ejecutoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejecutoria";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Ejecutoria"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Ejecutoria";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ConceptoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoId";

		$fdata["sourceSingle"] = "ConceptoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoId";

	
	
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
	$edata["LookupTable"] = "dbo.Conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ConceptoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Concepto";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ConceptoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ConceptoId";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","EstadoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EstadoId";

		$fdata["sourceSingle"] = "EstadoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EstadoId";

	
	
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
	$edata["LookupTable"] = "dbo.Estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EstadoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Estado";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["EstadoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "EstadoId";
//	EtapaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EtapaId";
	$fdata["GoodName"] = "EtapaId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","EtapaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EtapaId";

		$fdata["sourceSingle"] = "EtapaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EtapaId";

	
	
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
	$edata["LookupTable"] = "dbo.Etapas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EtapaId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Etapa";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["EtapaId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "EtapaId";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Folios");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Folios";

		$fdata["sourceSingle"] = "Folios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Folios";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Folios"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Folios";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Tipo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Tipo";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Cantidad");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Cantidad"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Cantidad";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Obligacion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Obligacion, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Obligacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Obligacion";
//	SaldoFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SaldoFinal";
	$fdata["GoodName"] = "SaldoFinal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","SaldoFinal");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "SaldoFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Obligacion+Costas+Intereses, 'C', 'es-CO')";

	
	
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


	$tdataprocesos["SaldoFinal"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "SaldoFinal";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Costas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Costas";

		$fdata["sourceSingle"] = "Costas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Costas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Costas"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Costas";
//	Liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Liquidacion";
	$fdata["GoodName"] = "Liquidacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Liquidacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Liquidacion";

		$fdata["sourceSingle"] = "Liquidacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Liquidacion";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Liquidacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Liquidacion";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dias";

		$fdata["sourceSingle"] = "Dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dias";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Dias"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Dias";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Intereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Intereses";

		$fdata["sourceSingle"] = "Intereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Intereses"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Intereses";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Recaudo");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Recaudo";

		$fdata["sourceSingle"] = "Recaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Recaudo, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Recaudo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Recaudo";
//	CalificacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "CalificacionId";
	$fdata["GoodName"] = "CalificacionId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CalificacionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CalificacionId";

		$fdata["sourceSingle"] = "CalificacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CalificacionId";

	
	
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
	$edata["LookupTable"] = "dbo.Calificaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CalificacionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Calificacion";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CalificacionId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CalificacionId";
//	Terminacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Terminacion";
	$fdata["GoodName"] = "Terminacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Terminacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Terminacion";

		$fdata["sourceSingle"] = "Terminacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terminacion";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Terminacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Terminacion";
//	MotivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "MotivoId";
	$fdata["GoodName"] = "MotivoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","MotivoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MotivoId";

		$fdata["sourceSingle"] = "MotivoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MotivoId";

	
	
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
	$edata["LookupTable"] = "dbo.Motivos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MotivoId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Motivo";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["MotivoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "MotivoId";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Observaciones");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Observaciones"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Observaciones";
//	Cuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Cuotas";
	$fdata["GoodName"] = "Cuotas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Cuotas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cuotas";

		$fdata["sourceSingle"] = "Cuotas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cuotas";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Cuotas"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Cuotas";
//	Abono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Abono";
	$fdata["GoodName"] = "Abono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Abono");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Abono";

		$fdata["sourceSingle"] = "Abono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(Abono, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Abono"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Abono";
//	Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Inicio";
	$fdata["GoodName"] = "Inicio";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Inicio";

		$fdata["sourceSingle"] = "Inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inicio";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Inicio"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Inicio";
//	VlrCuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "VlrCuota";
	$fdata["GoodName"] = "VlrCuota";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","VlrCuota");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "VlrCuota";

		$fdata["sourceSingle"] = "VlrCuota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VlrCuota";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["VlrCuota"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "VlrCuota";
//	VlrIntereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "VlrIntereses";
	$fdata["GoodName"] = "VlrIntereses";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","VlrIntereses");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "VlrIntereses";

		$fdata["sourceSingle"] = "VlrIntereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VlrIntereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["VlrIntereses"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "VlrIntereses";
//	Garantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Garantia";
	$fdata["GoodName"] = "Garantia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Garantia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Garantia";

		$fdata["sourceSingle"] = "Garantia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Garantia";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Garantia"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Garantia";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Radicado";

		$fdata["sourceSingle"] = "Radicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Radicado";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Radicado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Radicado";
//	Remisorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Remisorio";
	$fdata["GoodName"] = "Remisorio";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Remisorio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Remisorio";

		$fdata["sourceSingle"] = "Remisorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remisorio";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Remisorio"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Remisorio";
//	Acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Acuerdo";
	$fdata["GoodName"] = "Acuerdo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Acuerdo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Acuerdo";

		$fdata["sourceSingle"] = "Acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Acuerdo";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Acuerdo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Acuerdo";
//	Incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Incumplimiento";
	$fdata["GoodName"] = "Incumplimiento";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Incumplimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Incumplimiento";

		$fdata["sourceSingle"] = "Incumplimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Incumplimiento";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Incumplimiento"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Incumplimiento";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Notificacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Notificacion";

		$fdata["sourceSingle"] = "Notificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Notificacion";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Notificacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Notificacion";
//	Suspension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Suspension";
	$fdata["GoodName"] = "Suspension";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Suspension");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Suspension";

		$fdata["sourceSingle"] = "Suspension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suspension";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Suspension"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Suspension";
//	Traslado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Traslado";
	$fdata["GoodName"] = "Traslado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Traslado");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Traslado";

		$fdata["sourceSingle"] = "Traslado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Traslado";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Traslado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Traslado";
//	Error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Error";
	$fdata["GoodName"] = "Error";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Error");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Error";

		$fdata["sourceSingle"] = "Error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Error";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Error"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Error";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CarteraTipoId");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.CarteraTipos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CarteraTipoId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CarteraTipo";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CarteraTipoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CarteraTipoId";
//	ConceptoAbogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ConceptoAbogado";
	$fdata["GoodName"] = "ConceptoAbogado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ConceptoAbogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConceptoAbogado";

		$fdata["sourceSingle"] = "ConceptoAbogado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoAbogado";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ConceptoAbogado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ConceptoAbogado";
//	Origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Origen";
	$fdata["GoodName"] = "Origen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Origen";

		$fdata["sourceSingle"] = "Origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Origen";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Origen"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Origen";
//	Carpeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Carpeta";
	$fdata["GoodName"] = "Carpeta";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Carpeta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Carpeta";

		$fdata["sourceSingle"] = "Carpeta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Carpeta";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Carpeta"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Carpeta";
//	ImportacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ImportacionId";
	$fdata["GoodName"] = "ImportacionId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ImportacionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ImportacionId";

		$fdata["sourceSingle"] = "ImportacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ImportacionId";

	
	
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
	$edata["LookupTable"] = "dbo.Importaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ImportacionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Archivo";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ImportacionId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ImportacionId";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ActuacionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ActuacionId";

		$fdata["sourceSingle"] = "ActuacionId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActuacionId";

	
	
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
	$edata["LookupTable"] = "dbo.Actuaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ActuacionId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Actuacion";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ActuacionId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ActuacionId";
//	ObligacionInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ObligacionInicial";
	$fdata["GoodName"] = "ObligacionInicial";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ObligacionInicial");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "ObligacionInicial";

		$fdata["sourceSingle"] = "ObligacionInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(ObligacionInicial, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ObligacionInicial"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ObligacionInicial";
//	CostasInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "CostasInicial";
	$fdata["GoodName"] = "CostasInicial";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CostasInicial");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "CostasInicial";

		$fdata["sourceSingle"] = "CostasInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(CostasInicial, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CostasInicial"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CostasInicial";
//	InteresesInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "InteresesInicial";
	$fdata["GoodName"] = "InteresesInicial";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","InteresesInicial");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "InteresesInicial";

		$fdata["sourceSingle"] = "InteresesInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(InteresesInicial, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["InteresesInicial"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "InteresesInicial";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","MinJusticia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "MinJusticia";

		$fdata["sourceSingle"] = "MinJusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinJusticia";

	
	
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


	$tdataprocesos["MinJusticia"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "MinJusticia";
//	Revocatoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Revocatoria";
	$fdata["GoodName"] = "Revocatoria";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Revocatoria");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Revocatoria";

		$fdata["sourceSingle"] = "Revocatoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Revocatoria";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Revocatoria"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Revocatoria";
//	Mayor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Mayor";
	$fdata["GoodName"] = "Mayor";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Mayor");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Mayor";

		$fdata["sourceSingle"] = "Mayor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mayor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Mayor"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Mayor";
//	NotificacionValidada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "NotificacionValidada";
	$fdata["GoodName"] = "NotificacionValidada";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","NotificacionValidada");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "NotificacionValidada";

		$fdata["sourceSingle"] = "NotificacionValidada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NotificacionValidada";

	
	
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


	$tdataprocesos["NotificacionValidada"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "NotificacionValidada";
//	Validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Validado";
	$fdata["GoodName"] = "Validado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Validado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Validado";

		$fdata["sourceSingle"] = "Validado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Validado";

	
	
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


	$tdataprocesos["Validado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Validado";
//	Seleccionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Seleccionado";
	$fdata["GoodName"] = "Seleccionado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Seleccionado");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Seleccionado";

		$fdata["sourceSingle"] = "Seleccionado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seleccionado";

	
	
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


	$tdataprocesos["Seleccionado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Seleccionado";
//	CompetenciaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CompetenciaId";
	$fdata["GoodName"] = "CompetenciaId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CompetenciaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CompetenciaId";

		$fdata["sourceSingle"] = "CompetenciaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompetenciaId";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CompetenciaId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CompetenciaId";
//	MinjusticiaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "MinjusticiaId";
	$fdata["GoodName"] = "MinjusticiaId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","MinjusticiaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MinjusticiaId";

		$fdata["sourceSingle"] = "MinjusticiaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinjusticiaId";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["MinjusticiaId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "MinjusticiaId";
//	SeleccionadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "SeleccionadoPor";
	$fdata["GoodName"] = "SeleccionadoPor";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","SeleccionadoPor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SeleccionadoPor";

		$fdata["sourceSingle"] = "SeleccionadoPor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeleccionadoPor";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["SeleccionadoPor"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "SeleccionadoPor";
//	Subsanar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Subsanar";
	$fdata["GoodName"] = "Subsanar";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Subsanar");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "Subsanar";

		$fdata["sourceSingle"] = "Subsanar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subsanar";

	
	
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


	$tdataprocesos["Subsanar"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Subsanar";
//	NumeroMinjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "NumeroMinjusticia";
	$fdata["GoodName"] = "NumeroMinjusticia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","NumeroMinjusticia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NumeroMinjusticia";

		$fdata["sourceSingle"] = "NumeroMinjusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumeroMinjusticia";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["NumeroMinjusticia"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "NumeroMinjusticia";
//	ProcesoIdOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "ProcesoIdOrigen";
	$fdata["GoodName"] = "ProcesoIdOrigen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ProcesoIdOrigen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoIdOrigen";

		$fdata["sourceSingle"] = "ProcesoIdOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoIdOrigen";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ProcesoIdOrigen"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ProcesoIdOrigen";
//	SeleccionadoFecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "SeleccionadoFecha";
	$fdata["GoodName"] = "SeleccionadoFecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","SeleccionadoFecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SeleccionadoFecha";

		$fdata["sourceSingle"] = "SeleccionadoFecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeleccionadoFecha";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["SeleccionadoFecha"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "SeleccionadoFecha";
//	InteresesIniciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "InteresesIniciales";
	$fdata["GoodName"] = "InteresesIniciales";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","InteresesIniciales");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesIniciales";

		$fdata["sourceSingle"] = "InteresesIniciales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesIniciales";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["InteresesIniciales"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "InteresesIniciales";
//	InteresesCalculados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "InteresesCalculados";
	$fdata["GoodName"] = "InteresesCalculados";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","InteresesCalculados");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesCalculados";

		$fdata["sourceSingle"] = "InteresesCalculados";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesCalculados";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["InteresesCalculados"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "InteresesCalculados";
//	ProcesoIdDestino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ProcesoIdDestino";
	$fdata["GoodName"] = "ProcesoIdDestino";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ProcesoIdDestino");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProcesoIdDestino";

		$fdata["sourceSingle"] = "ProcesoIdDestino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoIdDestino";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ProcesoIdDestino"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ProcesoIdDestino";
//	RecaudoMinjusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "RecaudoMinjusticia";
	$fdata["GoodName"] = "RecaudoMinjusticia";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","RecaudoMinjusticia");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaudoMinjusticia";

		$fdata["sourceSingle"] = "RecaudoMinjusticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RecaudoMinjusticia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["RecaudoMinjusticia"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "RecaudoMinjusticia";
//	RecaudoTerminado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "RecaudoTerminado";
	$fdata["GoodName"] = "RecaudoTerminado";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","RecaudoTerminado");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "RecaudoTerminado";

		$fdata["sourceSingle"] = "RecaudoTerminado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RecaudoTerminado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["RecaudoTerminado"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "RecaudoTerminado";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Persuasivo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Persuasivo";

		$fdata["sourceSingle"] = "Persuasivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Persuasivo";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Persuasivo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Persuasivo";
//	ObligacionCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "ObligacionCreacion";
	$fdata["GoodName"] = "ObligacionCreacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ObligacionCreacion");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "ObligacionCreacion";

		$fdata["sourceSingle"] = "ObligacionCreacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FORMAT(ObligacionCreacion, 'C', 'es-CO')";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ObligacionCreacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ObligacionCreacion";
//	InteresesCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "InteresesCreacion";
	$fdata["GoodName"] = "InteresesCreacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","InteresesCreacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesCreacion";

		$fdata["sourceSingle"] = "InteresesCreacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesCreacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["InteresesCreacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "InteresesCreacion";
//	CostasCreacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "CostasCreacion";
	$fdata["GoodName"] = "CostasCreacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CostasCreacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostasCreacion";

		$fdata["sourceSingle"] = "CostasCreacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostasCreacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CostasCreacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CostasCreacion";
//	Plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Plazo";
	$fdata["GoodName"] = "Plazo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Plazo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Plazo";

		$fdata["sourceSingle"] = "Plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Plazo";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Plazo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Plazo";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","NaturalezaId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "NaturalezaId";

		$fdata["sourceSingle"] = "NaturalezaId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NaturalezaId";

	
	
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
	$edata["LookupTable"] = "dbo.Naturalezas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NaturalezaId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Naturaleza";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["NaturalezaId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "NaturalezaId";
//	TrasladoCartera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "TrasladoCartera";
	$fdata["GoodName"] = "TrasladoCartera";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","TrasladoCartera");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TrasladoCartera";

		$fdata["sourceSingle"] = "TrasladoCartera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrasladoCartera";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["TrasladoCartera"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "TrasladoCartera";
//	CarteraTipoIdOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "CarteraTipoIdOrigen";
	$fdata["GoodName"] = "CarteraTipoIdOrigen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","CarteraTipoIdOrigen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarteraTipoIdOrigen";

		$fdata["sourceSingle"] = "CarteraTipoIdOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoIdOrigen";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["CarteraTipoIdOrigen"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "CarteraTipoIdOrigen";
//	TrasladoConcepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "TrasladoConcepto";
	$fdata["GoodName"] = "TrasladoConcepto";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","TrasladoConcepto");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TrasladoConcepto";

		$fdata["sourceSingle"] = "TrasladoConcepto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrasladoConcepto";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["TrasladoConcepto"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "TrasladoConcepto";
//	ConceptoIdOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "ConceptoIdOrigen";
	$fdata["GoodName"] = "ConceptoIdOrigen";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ConceptoIdOrigen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConceptoIdOrigen";

		$fdata["sourceSingle"] = "ConceptoIdOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoIdOrigen";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ConceptoIdOrigen"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ConceptoIdOrigen";
//	AutorizadoPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "AutorizadoPlazo";
	$fdata["GoodName"] = "AutorizadoPlazo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","AutorizadoPlazo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AutorizadoPlazo";

		$fdata["sourceSingle"] = "AutorizadoPlazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutorizadoPlazo";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["AutorizadoPlazo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "AutorizadoPlazo";
//	AutorizadoFecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "AutorizadoFecha";
	$fdata["GoodName"] = "AutorizadoFecha";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","AutorizadoFecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "AutorizadoFecha";

		$fdata["sourceSingle"] = "AutorizadoFecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutorizadoFecha";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["AutorizadoFecha"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "AutorizadoFecha";
//	AutorizadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "AutorizadoPor";
	$fdata["GoodName"] = "AutorizadoPor";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","AutorizadoPor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AutorizadoPor";

		$fdata["sourceSingle"] = "AutorizadoPor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutorizadoPor";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["AutorizadoPor"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "AutorizadoPor";
//	Reliquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Reliquidacion";
	$fdata["GoodName"] = "Reliquidacion";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","Reliquidacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Reliquidacion";

		$fdata["sourceSingle"] = "Reliquidacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reliquidacion";

	
	
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
	$edata["InitialYearFactor"] = 24;
	$edata["LastYearFactor"] = 0;

	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["Reliquidacion"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "Reliquidacion";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","ChequeoId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ChequeoId";

		$fdata["sourceSingle"] = "ChequeoId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeoId";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["ChequeoId"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "ChequeoId";
//	VlrCostas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "VlrCostas";
	$fdata["GoodName"] = "VlrCostas";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","VlrCostas");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "VlrCostas";

		$fdata["sourceSingle"] = "VlrCostas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VlrCostas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["VlrCostas"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "VlrCostas";
//	VlrInteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "VlrInteresesPlazo";
	$fdata["GoodName"] = "VlrInteresesPlazo";
	$fdata["ownerTable"] = "dbo.Procesos";
	$fdata["Label"] = GetFieldLabel("dbo_Procesos","VlrInteresesPlazo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "VlrInteresesPlazo";

		$fdata["sourceSingle"] = "VlrInteresesPlazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VlrInteresesPlazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdataprocesos["VlrInteresesPlazo"] = $fdata;
		$tdataprocesos[".searchableFields"][] = "VlrInteresesPlazo";


$tables_data["dbo.Procesos"]=&$tdataprocesos;
$field_labels["dbo_Procesos"] = &$fieldLabelsprocesos;
$fieldToolTips["dbo_Procesos"] = &$fieldToolTipsprocesos;
$placeHolders["dbo_Procesos"] = &$placeHoldersprocesos;
$page_titles["dbo_Procesos"] = &$pageTitlesprocesos;


changeTextControlsToDate( "dbo.Procesos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Procesos"] = array();
//	dbo.Solidarios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Solidarios";
		$detailsParam["dOriginalTable"] = "dbo.Solidarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solidarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Solidarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Llamadas
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Llamadas";
		$detailsParam["dOriginalTable"] = "dbo.Llamadas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "llamadas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Llamadas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Medidas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Medidas";
		$detailsParam["dOriginalTable"] = "dbo.Medidas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medidas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Medidas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Acuerdos
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Acuerdos";
		$detailsParam["dOriginalTable"] = "dbo.Acuerdos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "acuerdos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Acuerdos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Intereses
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Intereses";
		$detailsParam["dOriginalTable"] = "dbo.Intereses";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "intereses";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Intereses");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Reasignaciones
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Reasignaciones";
		$detailsParam["dOriginalTable"] = "dbo.Reasignaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reasignaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Reasignaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Suspensiones1
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Suspensiones1";
		$detailsParam["dOriginalTable"] = "dbo.Suspensiones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "suspensiones1";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Suspensiones1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="procesoid";
//	dbo.Interrupciones
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Interrupciones";
		$detailsParam["dOriginalTable"] = "dbo.Interrupciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interrupciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Interrupciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Correspondencias
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Correspondencias";
		$detailsParam["dOriginalTable"] = "dbo.Correspondencias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "correspondencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Correspondencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Liquidaciones
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Liquidaciones";
		$detailsParam["dOriginalTable"] = "dbo.Liquidaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "liquidaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Liquidaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Fechas
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Fechas";
		$detailsParam["dOriginalTable"] = "dbo.Fechas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "fechas";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Fechas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.AuditoriasProcesosView
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.AuditoriasProcesosView";
		$detailsParam["dOriginalTable"] = "dbo.AuditoriasProcesosView";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "auditoriasprocesosview";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_AuditoriasProcesosView");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Reliquidaciones
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Reliquidaciones";
		$detailsParam["dOriginalTable"] = "dbo.Reliquidaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reliquidaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Reliquidaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//	dbo.Pagos1
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.Pagos1";
		$detailsParam["dOriginalTable"] = "dbo.Pagos1";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pagos1";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_Pagos1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Procesos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["masterKeys"][]="ProcesoId";

				$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Procesos"][$dIndex]["detailKeys"][]="ProcesoId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Procesos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Seccionales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Seccionales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "seccionales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][0] = $masterParams;
				$masterTablesData["dbo.Procesos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][0]["masterKeys"][]="SeccionalId";
				$masterTablesData["dbo.Procesos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][0]["detailKeys"][]="SeccionalId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Abogados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Abogados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "abogados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][1] = $masterParams;
				$masterTablesData["dbo.Procesos"][1]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][1]["masterKeys"][]="AbogadoId";
				$masterTablesData["dbo.Procesos"][1]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][1]["detailKeys"][]="AbogadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Despachos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Despachos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "despachos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][2] = $masterParams;
				$masterTablesData["dbo.Procesos"][2]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][2]["masterKeys"][]="DespachoId";
				$masterTablesData["dbo.Procesos"][2]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][2]["detailKeys"][]="DespachoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Conceptos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Conceptos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][3] = $masterParams;
				$masterTablesData["dbo.Procesos"][3]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][3]["masterKeys"][]="ConceptoId";
				$masterTablesData["dbo.Procesos"][3]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][3]["detailKeys"][]="ConceptoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Estados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Estados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][4] = $masterParams;
				$masterTablesData["dbo.Procesos"][4]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][4]["masterKeys"][]="EstadoId";
				$masterTablesData["dbo.Procesos"][4]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][4]["detailKeys"][]="EstadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Actuaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Actuaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actuaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][5] = $masterParams;
				$masterTablesData["dbo.Procesos"][5]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][5]["masterKeys"][]="ActuacionId";
				$masterTablesData["dbo.Procesos"][5]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][5]["detailKeys"][]="ActuacionId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Naturalezas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Naturalezas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "naturalezas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][6] = $masterParams;
				$masterTablesData["dbo.Procesos"][6]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][6]["masterKeys"][]="NaturalezaId";
				$masterTablesData["dbo.Procesos"][6]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][6]["detailKeys"][]="NaturalezaId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Importaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Importaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "importaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][7] = $masterParams;
				$masterTablesData["dbo.Procesos"][7]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][7]["masterKeys"][]="ImportacionId";
				$masterTablesData["dbo.Procesos"][7]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][7]["detailKeys"][]="ImportacionId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Motivos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Motivos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "motivos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][8] = $masterParams;
				$masterTablesData["dbo.Procesos"][8]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][8]["masterKeys"][]="MotivoId";
				$masterTablesData["dbo.Procesos"][8]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][8]["detailKeys"][]="MotivoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Motivos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Motivos1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "motivos1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][9] = $masterParams;
				$masterTablesData["dbo.Procesos"][9]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][9]["masterKeys"][]="MotivoId";
				$masterTablesData["dbo.Procesos"][9]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][9]["detailKeys"][]="MotivoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Estados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Estados1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estados1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][10] = $masterParams;
				$masterTablesData["dbo.Procesos"][10]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][10]["masterKeys"][]="EstadoId";
				$masterTablesData["dbo.Procesos"][10]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][10]["detailKeys"][]="EstadoId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Calificaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Calificaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "calificaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.Procesos"][11] = $masterParams;
				$masterTablesData["dbo.Procesos"][11]["masterKeys"] = array();
	$masterTablesData["dbo.Procesos"][11]["masterKeys"][]="CalificacionId";
				$masterTablesData["dbo.Procesos"][11]["detailKeys"] = array();
	$masterTablesData["dbo.Procesos"][11]["detailKeys"][]="CalificacionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProcesoId AS ProcesoId,  SeccionalId,  AbogadoId,  Fecha,  Numero,  DespachoId,  SancionadoId,  Providencia,  Ejecutoria,  ConceptoId,  EstadoId,  EtapaId,  Folios,  Tipo,  Cantidad,  FORMAT(Obligacion, 'C', 'es-CO') AS Obligacion,  FORMAT(Obligacion+Costas+Intereses, 'C', 'es-CO') AS SaldoFinal,  Costas,  Liquidacion,  Dias,  Intereses,  FORMAT(Recaudo, 'C', 'es-CO') AS Recaudo,  CalificacionId,  Terminacion,  MotivoId,  Observaciones,  Cuotas,  FORMAT(Abono, 'C', 'es-CO') AS Abono,  Inicio,  VlrCuota,  VlrIntereses,  Garantia,  Radicado,  Remisorio,  Acuerdo,  Incumplimiento,  Notificacion,  Suspension,  Traslado,  Error,  CarteraTipoId,  ConceptoAbogado,  Origen,  Carpeta,  ImportacionId,  ActuacionId,  FORMAT(ObligacionInicial, 'C', 'es-CO') AS ObligacionInicial,  FORMAT(CostasInicial, 'C', 'es-CO') AS CostasInicial,  FORMAT(InteresesInicial, 'C', 'es-CO') AS InteresesInicial,  MinJusticia,  Revocatoria,  Mayor,  NotificacionValidada,  Validado,  Seleccionado,  CompetenciaId,  MinjusticiaId,  SeleccionadoPor,  Subsanar,  NumeroMinjusticia,  ProcesoIdOrigen,  SeleccionadoFecha,  InteresesIniciales,  InteresesCalculados,  ProcesoIdDestino,  RecaudoMinjusticia,  RecaudoTerminado,  Persuasivo,  FORMAT(ObligacionCreacion, 'C', 'es-CO') AS ObligacionCreacion,  InteresesCreacion,  CostasCreacion,  Plazo,  NaturalezaId,  TrasladoCartera,  CarteraTipoIdOrigen,  TrasladoConcepto,  ConceptoIdOrigen,  AutorizadoPlazo,  AutorizadoFecha,  AutorizadoPor,  Reliquidacion,  ChequeoId,  VlrCostas,  VlrInteresesPlazo";
$proto0["m_strFrom"] = "FROM dbo.Procesos";
$proto0["m_strWhere"] = "(SeccionalId in (:session.SeccionalesWhere))";
$proto0["m_strOrderBy"] = "ORDER BY ProcesoId DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "SeccionalId in (:session.SeccionalesWhere)";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in (:session.SeccionalesWhere)";
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
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto6["m_sql"] = "ProcesoId";
$proto6["m_srcTableName"] = "dbo.Procesos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "ProcesoId";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto8["m_sql"] = "SeccionalId";
$proto8["m_srcTableName"] = "dbo.Procesos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto10["m_sql"] = "AbogadoId";
$proto10["m_srcTableName"] = "dbo.Procesos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "dbo.Procesos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto14["m_sql"] = "Numero";
$proto14["m_srcTableName"] = "dbo.Procesos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto16["m_sql"] = "DespachoId";
$proto16["m_srcTableName"] = "dbo.Procesos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto18["m_sql"] = "SancionadoId";
$proto18["m_srcTableName"] = "dbo.Procesos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto20["m_sql"] = "Providencia";
$proto20["m_srcTableName"] = "dbo.Procesos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto22["m_sql"] = "Ejecutoria";
$proto22["m_srcTableName"] = "dbo.Procesos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto24["m_sql"] = "ConceptoId";
$proto24["m_srcTableName"] = "dbo.Procesos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto26["m_sql"] = "EstadoId";
$proto26["m_srcTableName"] = "dbo.Procesos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto28["m_sql"] = "EtapaId";
$proto28["m_srcTableName"] = "dbo.Procesos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto30["m_sql"] = "Folios";
$proto30["m_srcTableName"] = "dbo.Procesos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto32["m_sql"] = "Tipo";
$proto32["m_srcTableName"] = "dbo.Procesos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto34["m_sql"] = "Cantidad";
$proto34["m_srcTableName"] = "dbo.Procesos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Obligacion"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "FORMAT(Obligacion, 'C', 'es-CO')";
$proto36["m_srcTableName"] = "dbo.Procesos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "Obligacion";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_CUSTOM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Obligacion+Costas+Intereses"
));

$proto42["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto42["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "FORMAT(Obligacion+Costas+Intereses, 'C', 'es-CO')";
$proto41["m_srcTableName"] = "dbo.Procesos";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "SaldoFinal";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto46["m_sql"] = "Costas";
$proto46["m_srcTableName"] = "dbo.Procesos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Liquidacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto48["m_sql"] = "Liquidacion";
$proto48["m_srcTableName"] = "dbo.Procesos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto50["m_sql"] = "Dias";
$proto50["m_srcTableName"] = "dbo.Procesos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto52["m_sql"] = "Intereses";
$proto52["m_srcTableName"] = "dbo.Procesos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$proto55=array();
$proto55["m_functiontype"] = "SQLF_CUSTOM";
$proto55["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Recaudo"
));

$proto55["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto55["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto55);

$proto54["m_sql"] = "FORMAT(Recaudo, 'C', 'es-CO')";
$proto54["m_srcTableName"] = "dbo.Procesos";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "Recaudo";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "CalificacionId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto59["m_sql"] = "CalificacionId";
$proto59["m_srcTableName"] = "dbo.Procesos";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "Terminacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto61["m_sql"] = "Terminacion";
$proto61["m_srcTableName"] = "dbo.Procesos";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "MotivoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto63["m_sql"] = "MotivoId";
$proto63["m_srcTableName"] = "dbo.Procesos";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto65["m_sql"] = "Observaciones";
$proto65["m_srcTableName"] = "dbo.Procesos";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuotas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto67["m_sql"] = "Cuotas";
$proto67["m_srcTableName"] = "dbo.Procesos";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$proto70=array();
$proto70["m_functiontype"] = "SQLF_CUSTOM";
$proto70["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Abono"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto70["m_arguments"][]=$obj;
$proto70["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto70);

$proto69["m_sql"] = "FORMAT(Abono, 'C', 'es-CO')";
$proto69["m_srcTableName"] = "dbo.Procesos";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "Abono";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Inicio",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto74["m_sql"] = "Inicio";
$proto74["m_srcTableName"] = "dbo.Procesos";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrCuota",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto76["m_sql"] = "VlrCuota";
$proto76["m_srcTableName"] = "dbo.Procesos";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrIntereses",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto78["m_sql"] = "VlrIntereses";
$proto78["m_srcTableName"] = "dbo.Procesos";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Garantia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto80["m_sql"] = "Garantia";
$proto80["m_srcTableName"] = "dbo.Procesos";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto82["m_sql"] = "Radicado";
$proto82["m_srcTableName"] = "dbo.Procesos";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Remisorio",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto84["m_sql"] = "Remisorio";
$proto84["m_srcTableName"] = "dbo.Procesos";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto86["m_sql"] = "Acuerdo";
$proto86["m_srcTableName"] = "dbo.Procesos";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto88["m_sql"] = "Incumplimiento";
$proto88["m_srcTableName"] = "dbo.Procesos";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto90["m_sql"] = "Notificacion";
$proto90["m_srcTableName"] = "dbo.Procesos";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Suspension",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto92["m_sql"] = "Suspension";
$proto92["m_srcTableName"] = "dbo.Procesos";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Traslado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto94["m_sql"] = "Traslado";
$proto94["m_srcTableName"] = "dbo.Procesos";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Error",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto96["m_sql"] = "Error";
$proto96["m_srcTableName"] = "dbo.Procesos";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto98["m_sql"] = "CarteraTipoId";
$proto98["m_srcTableName"] = "dbo.Procesos";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoAbogado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto100["m_sql"] = "ConceptoAbogado";
$proto100["m_srcTableName"] = "dbo.Procesos";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Origen",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto102["m_sql"] = "Origen";
$proto102["m_srcTableName"] = "dbo.Procesos";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Carpeta",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto104["m_sql"] = "Carpeta";
$proto104["m_srcTableName"] = "dbo.Procesos";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "ImportacionId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto106["m_sql"] = "ImportacionId";
$proto106["m_srcTableName"] = "dbo.Procesos";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto108["m_sql"] = "ActuacionId";
$proto108["m_srcTableName"] = "dbo.Procesos";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$proto111=array();
$proto111["m_functiontype"] = "SQLF_CUSTOM";
$proto111["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ObligacionInicial"
));

$proto111["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto111["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto111["m_arguments"][]=$obj;
$proto111["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto111);

$proto110["m_sql"] = "FORMAT(ObligacionInicial, 'C', 'es-CO')";
$proto110["m_srcTableName"] = "dbo.Procesos";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "ObligacionInicial";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$proto116=array();
$proto116["m_functiontype"] = "SQLF_CUSTOM";
$proto116["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CostasInicial"
));

$proto116["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto116["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto116["m_arguments"][]=$obj;
$proto116["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto116);

$proto115["m_sql"] = "FORMAT(CostasInicial, 'C', 'es-CO')";
$proto115["m_srcTableName"] = "dbo.Procesos";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "CostasInicial";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$proto121=array();
$proto121["m_functiontype"] = "SQLF_CUSTOM";
$proto121["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "InteresesInicial"
));

$proto121["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto121["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto121["m_arguments"][]=$obj;
$proto121["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto121);

$proto120["m_sql"] = "FORMAT(InteresesInicial, 'C', 'es-CO')";
$proto120["m_srcTableName"] = "dbo.Procesos";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "InteresesInicial";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto125["m_sql"] = "MinJusticia";
$proto125["m_srcTableName"] = "dbo.Procesos";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "Revocatoria",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto127["m_sql"] = "Revocatoria";
$proto127["m_srcTableName"] = "dbo.Procesos";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "Mayor",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto129["m_sql"] = "Mayor";
$proto129["m_srcTableName"] = "dbo.Procesos";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "NotificacionValidada",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto131["m_sql"] = "NotificacionValidada";
$proto131["m_srcTableName"] = "dbo.Procesos";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "Validado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto133["m_sql"] = "Validado";
$proto133["m_srcTableName"] = "dbo.Procesos";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "Seleccionado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto135["m_sql"] = "Seleccionado";
$proto135["m_srcTableName"] = "dbo.Procesos";
$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "CompetenciaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto137["m_sql"] = "CompetenciaId";
$proto137["m_srcTableName"] = "dbo.Procesos";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLField(array(
	"m_strName" => "MinjusticiaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto139["m_sql"] = "MinjusticiaId";
$proto139["m_srcTableName"] = "dbo.Procesos";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "";
$obj = new SQLFieldListItem($proto139);

$proto0["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "SeleccionadoPor",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto141["m_sql"] = "SeleccionadoPor";
$proto141["m_srcTableName"] = "dbo.Procesos";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto0["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLField(array(
	"m_strName" => "Subsanar",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto143["m_sql"] = "Subsanar";
$proto143["m_srcTableName"] = "dbo.Procesos";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto0["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "NumeroMinjusticia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto145["m_sql"] = "NumeroMinjusticia";
$proto145["m_srcTableName"] = "dbo.Procesos";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto0["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoIdOrigen",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto147["m_sql"] = "ProcesoIdOrigen";
$proto147["m_srcTableName"] = "dbo.Procesos";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto0["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "SeleccionadoFecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto149["m_sql"] = "SeleccionadoFecha";
$proto149["m_srcTableName"] = "dbo.Procesos";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto0["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesIniciales",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto151["m_sql"] = "InteresesIniciales";
$proto151["m_srcTableName"] = "dbo.Procesos";
$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "";
$obj = new SQLFieldListItem($proto151);

$proto0["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesCalculados",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto153["m_sql"] = "InteresesCalculados";
$proto153["m_srcTableName"] = "dbo.Procesos";
$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "";
$obj = new SQLFieldListItem($proto153);

$proto0["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoIdDestino",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto155["m_sql"] = "ProcesoIdDestino";
$proto155["m_srcTableName"] = "dbo.Procesos";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "";
$obj = new SQLFieldListItem($proto155);

$proto0["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLField(array(
	"m_strName" => "RecaudoMinjusticia",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto157["m_sql"] = "RecaudoMinjusticia";
$proto157["m_srcTableName"] = "dbo.Procesos";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto0["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLField(array(
	"m_strName" => "RecaudoTerminado",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto159["m_sql"] = "RecaudoTerminado";
$proto159["m_srcTableName"] = "dbo.Procesos";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "";
$obj = new SQLFieldListItem($proto159);

$proto0["m_fieldlist"][]=$obj;
						$proto161=array();
			$obj = new SQLField(array(
	"m_strName" => "Persuasivo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto161["m_sql"] = "Persuasivo";
$proto161["m_srcTableName"] = "dbo.Procesos";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "";
$obj = new SQLFieldListItem($proto161);

$proto0["m_fieldlist"][]=$obj;
						$proto163=array();
			$proto164=array();
$proto164["m_functiontype"] = "SQLF_CUSTOM";
$proto164["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ObligacionCreacion"
));

$proto164["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'C'"
));

$proto164["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'es-CO'"
));

$proto164["m_arguments"][]=$obj;
$proto164["m_strFunctionName"] = "FORMAT";
$obj = new SQLFunctionCall($proto164);

$proto163["m_sql"] = "FORMAT(ObligacionCreacion, 'C', 'es-CO')";
$proto163["m_srcTableName"] = "dbo.Procesos";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "ObligacionCreacion";
$obj = new SQLFieldListItem($proto163);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesCreacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto168["m_sql"] = "InteresesCreacion";
$proto168["m_srcTableName"] = "dbo.Procesos";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "CostasCreacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto170["m_sql"] = "CostasCreacion";
$proto170["m_srcTableName"] = "dbo.Procesos";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto172["m_sql"] = "Plazo";
$proto172["m_srcTableName"] = "dbo.Procesos";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto174["m_sql"] = "NaturalezaId";
$proto174["m_srcTableName"] = "dbo.Procesos";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "TrasladoCartera",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto176["m_sql"] = "TrasladoCartera";
$proto176["m_srcTableName"] = "dbo.Procesos";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoIdOrigen",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto178["m_sql"] = "CarteraTipoIdOrigen";
$proto178["m_srcTableName"] = "dbo.Procesos";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "TrasladoConcepto",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto180["m_sql"] = "TrasladoConcepto";
$proto180["m_srcTableName"] = "dbo.Procesos";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoIdOrigen",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto182["m_sql"] = "ConceptoIdOrigen";
$proto182["m_srcTableName"] = "dbo.Procesos";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "AutorizadoPlazo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto184["m_sql"] = "AutorizadoPlazo";
$proto184["m_srcTableName"] = "dbo.Procesos";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "AutorizadoFecha",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto186["m_sql"] = "AutorizadoFecha";
$proto186["m_srcTableName"] = "dbo.Procesos";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "AutorizadoPor",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto188["m_sql"] = "AutorizadoPor";
$proto188["m_srcTableName"] = "dbo.Procesos";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "Reliquidacion",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto190["m_sql"] = "Reliquidacion";
$proto190["m_srcTableName"] = "dbo.Procesos";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto192["m_sql"] = "ChequeoId";
$proto192["m_srcTableName"] = "dbo.Procesos";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrCostas",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto194["m_sql"] = "VlrCostas";
$proto194["m_srcTableName"] = "dbo.Procesos";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrInteresesPlazo",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto196["m_sql"] = "VlrInteresesPlazo";
$proto196["m_srcTableName"] = "dbo.Procesos";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto198=array();
$proto198["m_link"] = "SQLL_MAIN";
			$proto199=array();
$proto199["m_strName"] = "dbo.Procesos";
$proto199["m_srcTableName"] = "dbo.Procesos";
$proto199["m_columns"] = array();
$proto199["m_columns"][] = "ProcesoId";
$proto199["m_columns"][] = "SeccionalId";
$proto199["m_columns"][] = "AbogadoId";
$proto199["m_columns"][] = "Fecha";
$proto199["m_columns"][] = "Numero";
$proto199["m_columns"][] = "DespachoId";
$proto199["m_columns"][] = "SancionadoId";
$proto199["m_columns"][] = "Providencia";
$proto199["m_columns"][] = "Ejecutoria";
$proto199["m_columns"][] = "ConceptoId";
$proto199["m_columns"][] = "EstadoId";
$proto199["m_columns"][] = "EtapaId";
$proto199["m_columns"][] = "Folios";
$proto199["m_columns"][] = "Tipo";
$proto199["m_columns"][] = "Cantidad";
$proto199["m_columns"][] = "Obligacion";
$proto199["m_columns"][] = "Costas";
$proto199["m_columns"][] = "Liquidacion";
$proto199["m_columns"][] = "Dias";
$proto199["m_columns"][] = "Intereses";
$proto199["m_columns"][] = "Recaudo";
$proto199["m_columns"][] = "CalificacionId";
$proto199["m_columns"][] = "Terminacion";
$proto199["m_columns"][] = "MotivoId";
$proto199["m_columns"][] = "Observaciones";
$proto199["m_columns"][] = "Cuotas";
$proto199["m_columns"][] = "Abono";
$proto199["m_columns"][] = "Inicio";
$proto199["m_columns"][] = "VlrCuota";
$proto199["m_columns"][] = "VlrIntereses";
$proto199["m_columns"][] = "Garantia";
$proto199["m_columns"][] = "Radicado";
$proto199["m_columns"][] = "Remisorio";
$proto199["m_columns"][] = "Acuerdo";
$proto199["m_columns"][] = "Incumplimiento";
$proto199["m_columns"][] = "Notificacion";
$proto199["m_columns"][] = "Suspension";
$proto199["m_columns"][] = "Traslado";
$proto199["m_columns"][] = "Error";
$proto199["m_columns"][] = "CarteraTipoId";
$proto199["m_columns"][] = "ConceptoAbogado";
$proto199["m_columns"][] = "Origen";
$proto199["m_columns"][] = "Carpeta";
$proto199["m_columns"][] = "ImportacionId";
$proto199["m_columns"][] = "ActuacionId";
$proto199["m_columns"][] = "ObligacionInicial";
$proto199["m_columns"][] = "CostasInicial";
$proto199["m_columns"][] = "InteresesInicial";
$proto199["m_columns"][] = "MinJusticia";
$proto199["m_columns"][] = "Revocatoria";
$proto199["m_columns"][] = "Mayor";
$proto199["m_columns"][] = "NotificacionValidada";
$proto199["m_columns"][] = "Validado";
$proto199["m_columns"][] = "Seleccionado";
$proto199["m_columns"][] = "CompetenciaId";
$proto199["m_columns"][] = "MinjusticiaId";
$proto199["m_columns"][] = "SeleccionadoPor";
$proto199["m_columns"][] = "Subsanar";
$proto199["m_columns"][] = "NumeroMinjusticia";
$proto199["m_columns"][] = "ProcesoIdOrigen";
$proto199["m_columns"][] = "SeleccionadoFecha";
$proto199["m_columns"][] = "InteresesIniciales";
$proto199["m_columns"][] = "InteresesCalculados";
$proto199["m_columns"][] = "ProcesoIdDestino";
$proto199["m_columns"][] = "RecaudoMinjusticia";
$proto199["m_columns"][] = "RecaudoTerminado";
$proto199["m_columns"][] = "Persuasivo";
$proto199["m_columns"][] = "ObligacionCreacion";
$proto199["m_columns"][] = "InteresesCreacion";
$proto199["m_columns"][] = "CostasCreacion";
$proto199["m_columns"][] = "Plazo";
$proto199["m_columns"][] = "NaturalezaId";
$proto199["m_columns"][] = "TrasladoCartera";
$proto199["m_columns"][] = "CarteraTipoIdOrigen";
$proto199["m_columns"][] = "TrasladoConcepto";
$proto199["m_columns"][] = "ConceptoIdOrigen";
$proto199["m_columns"][] = "AutorizadoPlazo";
$proto199["m_columns"][] = "AutorizadoFecha";
$proto199["m_columns"][] = "AutorizadoPor";
$proto199["m_columns"][] = "Reliquidacion";
$proto199["m_columns"][] = "ChequeoId";
$proto199["m_columns"][] = "VlrCostas";
$proto199["m_columns"][] = "VlrInteresesPlazo";
$proto199["m_columns"][] = "SeccionalIdOrigen";
$obj = new SQLTable($proto199);

$proto198["m_table"] = $obj;
$proto198["m_sql"] = "dbo.Procesos";
$proto198["m_alias"] = "";
$proto198["m_srcTableName"] = "dbo.Procesos";
$proto200=array();
$proto200["m_sql"] = "";
$proto200["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto200["m_column"]=$obj;
$proto200["m_contained"] = array();
$proto200["m_strCase"] = "";
$proto200["m_havingmode"] = false;
$proto200["m_inBrackets"] = false;
$proto200["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto200);

$proto198["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto198);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto202=array();
						$obj = new SQLField(array(
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.Procesos",
	"m_srcTableName" => "dbo.Procesos"
));

$proto202["m_column"]=$obj;
$proto202["m_bAsc"] = 0;
$proto202["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto202);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dbo.Procesos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procesos = createSqlQuery_procesos();


	
		;

																																																																																				

$tdataprocesos[".sqlquery"] = $queryData_procesos;



include_once(getabspath("include/procesos_events.php"));
$tdataprocesos[".hasEvents"] = true;

?>