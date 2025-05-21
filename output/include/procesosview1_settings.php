<?php
$tdataprocesosview1 = array();
$tdataprocesosview1[".searchableFields"] = array();
$tdataprocesosview1[".ShortName"] = "procesosview1";
$tdataprocesosview1[".OwnerID"] = "";
$tdataprocesosview1[".OriginalTable"] = "dbo.ProcesosView1";


$tdataprocesosview1[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataprocesosview1[".originalPagesByType"] = $tdataprocesosview1[".pagesByType"];
$tdataprocesosview1[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataprocesosview1[".originalPages"] = $tdataprocesosview1[".pages"];
$tdataprocesosview1[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataprocesosview1[".originalDefaultPages"] = $tdataprocesosview1[".defaultPages"];

//	field labels
$fieldLabelsprocesosview1 = array();
$fieldToolTipsprocesosview1 = array();
$pageTitlesprocesosview1 = array();
$placeHoldersprocesosview1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprocesosview1["Spanish"] = array();
	$fieldToolTipsprocesosview1["Spanish"] = array();
	$placeHoldersprocesosview1["Spanish"] = array();
	$pageTitlesprocesosview1["Spanish"] = array();
	$fieldLabelsprocesosview1["Spanish"]["ProcesoId"] = "Proceso Id";
	$fieldToolTipsprocesosview1["Spanish"]["ProcesoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["ProcesoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsprocesosview1["Spanish"]["Fecha"] = "";
	$placeHoldersprocesosview1["Spanish"]["Fecha"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Numero"] = "Numero";
	$fieldToolTipsprocesosview1["Spanish"]["Numero"] = "";
	$placeHoldersprocesosview1["Spanish"]["Numero"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Obligacion"] = "Obligacion";
	$fieldToolTipsprocesosview1["Spanish"]["Obligacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Obligacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Costas"] = "Costas";
	$fieldToolTipsprocesosview1["Spanish"]["Costas"] = "";
	$placeHoldersprocesosview1["Spanish"]["Costas"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Intereses"] = "Intereses";
	$fieldToolTipsprocesosview1["Spanish"]["Intereses"] = "";
	$placeHoldersprocesosview1["Spanish"]["Intereses"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Folios"] = "Folios";
	$fieldToolTipsprocesosview1["Spanish"]["Folios"] = "";
	$placeHoldersprocesosview1["Spanish"]["Folios"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsprocesosview1["Spanish"]["Observaciones"] = "";
	$placeHoldersprocesosview1["Spanish"]["Observaciones"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Seccional"] = "Seccional";
	$fieldToolTipsprocesosview1["Spanish"]["Seccional"] = "";
	$placeHoldersprocesosview1["Spanish"]["Seccional"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Ciudad"] = "Ciudad";
	$fieldToolTipsprocesosview1["Spanish"]["Ciudad"] = "";
	$placeHoldersprocesosview1["Spanish"]["Ciudad"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Abogado"] = "Abogado";
	$fieldToolTipsprocesosview1["Spanish"]["Abogado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Abogado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Masculino"] = "Masculino";
	$fieldToolTipsprocesosview1["Spanish"]["Masculino"] = "";
	$placeHoldersprocesosview1["Spanish"]["Masculino"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsprocesosview1["Spanish"]["Despacho"] = "";
	$placeHoldersprocesosview1["Spanish"]["Despacho"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsprocesosview1["Spanish"]["Concepto"] = "";
	$placeHoldersprocesosview1["Spanish"]["Concepto"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Motivo"] = "Motivo";
	$fieldToolTipsprocesosview1["Spanish"]["Motivo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Motivo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsprocesosview1["Spanish"]["Estado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Estado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Calificacion"] = "Calificacion";
	$fieldToolTipsprocesosview1["Spanish"]["Calificacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Calificacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["PiePagina"] = "Pie Pagina";
	$fieldToolTipsprocesosview1["Spanish"]["PiePagina"] = "";
	$placeHoldersprocesosview1["Spanish"]["PiePagina"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CiudadDepartamento"] = "Ciudad Departamento";
	$fieldToolTipsprocesosview1["Spanish"]["CiudadDepartamento"] = "";
	$placeHoldersprocesosview1["Spanish"]["CiudadDepartamento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Sigobius"] = "Sigobius";
	$fieldToolTipsprocesosview1["Spanish"]["Sigobius"] = "";
	$placeHoldersprocesosview1["Spanish"]["Sigobius"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Cuotas"] = "Cuotas";
	$fieldToolTipsprocesosview1["Spanish"]["Cuotas"] = "";
	$placeHoldersprocesosview1["Spanish"]["Cuotas"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Abono"] = "Abono";
	$fieldToolTipsprocesosview1["Spanish"]["Abono"] = "";
	$placeHoldersprocesosview1["Spanish"]["Abono"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Inicio"] = "Inicio";
	$fieldToolTipsprocesosview1["Spanish"]["Inicio"] = "";
	$placeHoldersprocesosview1["Spanish"]["Inicio"] = "";
	$fieldLabelsprocesosview1["Spanish"]["VlrCuota"] = "Vlr Cuota";
	$fieldToolTipsprocesosview1["Spanish"]["VlrCuota"] = "";
	$placeHoldersprocesosview1["Spanish"]["VlrCuota"] = "";
	$fieldLabelsprocesosview1["Spanish"]["VlrIntereses"] = "Vlr Intereses";
	$fieldToolTipsprocesosview1["Spanish"]["VlrIntereses"] = "";
	$placeHoldersprocesosview1["Spanish"]["VlrIntereses"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Garantia"] = "Garantia";
	$fieldToolTipsprocesosview1["Spanish"]["Garantia"] = "";
	$placeHoldersprocesosview1["Spanish"]["Garantia"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Recaudo"] = "Recaudo";
	$fieldToolTipsprocesosview1["Spanish"]["Recaudo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Recaudo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Sancionado"] = "Sancionado";
	$fieldToolTipsprocesosview1["Spanish"]["Sancionado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Sancionado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoDocumento"] = "Sancionado Documento";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoDocumento"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoDocumento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoTipoDocumento"] = "Sancionado Tipo Documento";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoTipoDocumento"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoTipoDocumento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoCiudad"] = "Sancionado Ciudad";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoCiudad"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoCiudad"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoCiudad"] = "Despacho Ciudad";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoCiudad"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoCiudad"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Providencia"] = "Providencia";
	$fieldToolTipsprocesosview1["Spanish"]["Providencia"] = "";
	$placeHoldersprocesosview1["Spanish"]["Providencia"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Ejecutoria"] = "Ejecutoria";
	$fieldToolTipsprocesosview1["Spanish"]["Ejecutoria"] = "";
	$placeHoldersprocesosview1["Spanish"]["Ejecutoria"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Radicado"] = "Radicado";
	$fieldToolTipsprocesosview1["Spanish"]["Radicado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Radicado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Terminacion"] = "Terminacion";
	$fieldToolTipsprocesosview1["Spanish"]["Terminacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Terminacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Liquidacion"] = "Liquidacion";
	$fieldToolTipsprocesosview1["Spanish"]["Liquidacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Liquidacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Dias"] = "Dias";
	$fieldToolTipsprocesosview1["Spanish"]["Dias"] = "";
	$placeHoldersprocesosview1["Spanish"]["Dias"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsprocesosview1["Spanish"]["Tipo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Tipo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsprocesosview1["Spanish"]["Cantidad"] = "";
	$placeHoldersprocesosview1["Spanish"]["Cantidad"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoMasculino"] = "Sancionado Masculino";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoMasculino"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoMasculino"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeccionalCorreo"] = "Seccional Correo";
	$fieldToolTipsprocesosview1["Spanish"]["SeccionalCorreo"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeccionalCorreo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeccionalDireccion"] = "Seccional Direccion";
	$fieldToolTipsprocesosview1["Spanish"]["SeccionalDireccion"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeccionalDireccion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeccionalTelefonos"] = "Seccional Telefonos";
	$fieldToolTipsprocesosview1["Spanish"]["SeccionalTelefonos"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeccionalTelefonos"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Fallecimiento"] = "Fallecimiento";
	$fieldToolTipsprocesosview1["Spanish"]["Fallecimiento"] = "";
	$placeHoldersprocesosview1["Spanish"]["Fallecimiento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Notificacion"] = "Notificacion";
	$fieldToolTipsprocesosview1["Spanish"]["Notificacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Notificacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeccionalNit"] = "Seccional Nit";
	$fieldToolTipsprocesosview1["Spanish"]["SeccionalNit"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeccionalNit"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeccionalId"] = "Seccional Id";
	$fieldToolTipsprocesosview1["Spanish"]["SeccionalId"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeccionalId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["AbogadoId"] = "Abogado Id";
	$fieldToolTipsprocesosview1["Spanish"]["AbogadoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["AbogadoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoId"] = "Despacho Id";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoId"] = "Sancionado Id";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ConceptoId"] = "Concepto Id";
	$fieldToolTipsprocesosview1["Spanish"]["ConceptoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["ConceptoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["NaturalezaId"] = "Naturaleza Id";
	$fieldToolTipsprocesosview1["Spanish"]["NaturalezaId"] = "";
	$placeHoldersprocesosview1["Spanish"]["NaturalezaId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["EstadoId"] = "Estado Id";
	$fieldToolTipsprocesosview1["Spanish"]["EstadoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["EstadoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["EtapaId"] = "Etapa Id";
	$fieldToolTipsprocesosview1["Spanish"]["EtapaId"] = "";
	$placeHoldersprocesosview1["Spanish"]["EtapaId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CalificacionId"] = "Calificacion Id";
	$fieldToolTipsprocesosview1["Spanish"]["CalificacionId"] = "";
	$placeHoldersprocesosview1["Spanish"]["CalificacionId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["MotivoId"] = "Motivo Id";
	$fieldToolTipsprocesosview1["Spanish"]["MotivoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["MotivoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ProcesoObservaciones"] = "Proceso Observaciones";
	$fieldToolTipsprocesosview1["Spanish"]["ProcesoObservaciones"] = "";
	$placeHoldersprocesosview1["Spanish"]["ProcesoObservaciones"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Remisorio"] = "Remisorio";
	$fieldToolTipsprocesosview1["Spanish"]["Remisorio"] = "";
	$placeHoldersprocesosview1["Spanish"]["Remisorio"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Acuerdo"] = "Acuerdo";
	$fieldToolTipsprocesosview1["Spanish"]["Acuerdo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Acuerdo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Incumplimiento"] = "Incumplimiento";
	$fieldToolTipsprocesosview1["Spanish"]["Incumplimiento"] = "";
	$placeHoldersprocesosview1["Spanish"]["Incumplimiento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Suspension"] = "Suspension";
	$fieldToolTipsprocesosview1["Spanish"]["Suspension"] = "";
	$placeHoldersprocesosview1["Spanish"]["Suspension"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Traslado"] = "Traslado";
	$fieldToolTipsprocesosview1["Spanish"]["Traslado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Traslado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Error"] = "Error";
	$fieldToolTipsprocesosview1["Spanish"]["Error"] = "";
	$placeHoldersprocesosview1["Spanish"]["Error"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Actuacion"] = "Actuacion";
	$fieldToolTipsprocesosview1["Spanish"]["Actuacion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Actuacion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["TipoDocumentoId"] = "Tipo Documento Id";
	$fieldToolTipsprocesosview1["Spanish"]["TipoDocumentoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["TipoDocumentoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Juridica"] = "Juridica";
	$fieldToolTipsprocesosview1["Spanish"]["Juridica"] = "";
	$placeHoldersprocesosview1["Spanish"]["Juridica"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoEmail"] = "Sancionado Email";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoEmail"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoEmail"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SancionadoCelular"] = "Sancionado Celular";
	$fieldToolTipsprocesosview1["Spanish"]["SancionadoCelular"] = "";
	$placeHoldersprocesosview1["Spanish"]["SancionadoCelular"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CarteraTipoId"] = "Cartera Tipo Id";
	$fieldToolTipsprocesosview1["Spanish"]["CarteraTipoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["CarteraTipoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ConceptoAbogado"] = "Concepto Abogado";
	$fieldToolTipsprocesosview1["Spanish"]["ConceptoAbogado"] = "";
	$placeHoldersprocesosview1["Spanish"]["ConceptoAbogado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["LiquidaIntereses"] = "Liquida Intereses";
	$fieldToolTipsprocesosview1["Spanish"]["LiquidaIntereses"] = "";
	$placeHoldersprocesosview1["Spanish"]["LiquidaIntereses"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Saldo"] = "Saldo";
	$fieldToolTipsprocesosview1["Spanish"]["Saldo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Saldo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Prescripcion"] = "Prescripcion";
	$fieldToolTipsprocesosview1["Spanish"]["Prescripcion"] = "";
	$placeHoldersprocesosview1["Spanish"]["Prescripcion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["FechaPrescripcion"] = "Fecha Prescripcion";
	$fieldToolTipsprocesosview1["Spanish"]["FechaPrescripcion"] = "";
	$placeHoldersprocesosview1["Spanish"]["FechaPrescripcion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ObligacionInicial"] = "Obligacion Inicial";
	$fieldToolTipsprocesosview1["Spanish"]["ObligacionInicial"] = "";
	$placeHoldersprocesosview1["Spanish"]["ObligacionInicial"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CostasInicial"] = "Costas Inicial";
	$fieldToolTipsprocesosview1["Spanish"]["CostasInicial"] = "";
	$placeHoldersprocesosview1["Spanish"]["CostasInicial"] = "";
	$fieldLabelsprocesosview1["Spanish"]["InteresesInicial"] = "Intereses Inicial";
	$fieldToolTipsprocesosview1["Spanish"]["InteresesInicial"] = "";
	$placeHoldersprocesosview1["Spanish"]["InteresesInicial"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Minjusticia_Def"] = "Minjusticia Def";
	$fieldToolTipsprocesosview1["Spanish"]["Minjusticia_Def"] = "";
	$placeHoldersprocesosview1["Spanish"]["Minjusticia_Def"] = "";
	$fieldLabelsprocesosview1["Spanish"]["MinJusticia"] = "Min Justicia";
	$fieldToolTipsprocesosview1["Spanish"]["MinJusticia"] = "";
	$placeHoldersprocesosview1["Spanish"]["MinJusticia"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ActuacionId"] = "Actuacion Id";
	$fieldToolTipsprocesosview1["Spanish"]["ActuacionId"] = "";
	$placeHoldersprocesosview1["Spanish"]["ActuacionId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["NotificacionValidada"] = "Notificacion Validada";
	$fieldToolTipsprocesosview1["Spanish"]["NotificacionValidada"] = "";
	$placeHoldersprocesosview1["Spanish"]["NotificacionValidada"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Validado"] = "Validado";
	$fieldToolTipsprocesosview1["Spanish"]["Validado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Validado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsprocesosview1["Spanish"]["Documento"] = "";
	$placeHoldersprocesosview1["Spanish"]["Documento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Seleccionado"] = "Seleccionado";
	$fieldToolTipsprocesosview1["Spanish"]["Seleccionado"] = "";
	$placeHoldersprocesosview1["Spanish"]["Seleccionado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CompetenciaId"] = "Competencia Id";
	$fieldToolTipsprocesosview1["Spanish"]["CompetenciaId"] = "";
	$placeHoldersprocesosview1["Spanish"]["CompetenciaId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["SeleccionadoPor"] = "Seleccionado Por";
	$fieldToolTipsprocesosview1["Spanish"]["SeleccionadoPor"] = "";
	$placeHoldersprocesosview1["Spanish"]["SeleccionadoPor"] = "";
	$fieldLabelsprocesosview1["Spanish"]["RadicadoNumero"] = "Radicado Numero";
	$fieldToolTipsprocesosview1["Spanish"]["RadicadoNumero"] = "";
	$placeHoldersprocesosview1["Spanish"]["RadicadoNumero"] = "";
	$fieldLabelsprocesosview1["Spanish"]["MinjusticiaId"] = "Minjusticia Id";
	$fieldToolTipsprocesosview1["Spanish"]["MinjusticiaId"] = "";
	$placeHoldersprocesosview1["Spanish"]["MinjusticiaId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Contador"] = "Contador";
	$fieldToolTipsprocesosview1["Spanish"]["Contador"] = "";
	$placeHoldersprocesosview1["Spanish"]["Contador"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ContadorCargo"] = "Contador Cargo";
	$fieldToolTipsprocesosview1["Spanish"]["ContadorCargo"] = "";
	$placeHoldersprocesosview1["Spanish"]["ContadorCargo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Director"] = "Director";
	$fieldToolTipsprocesosview1["Spanish"]["Director"] = "";
	$placeHoldersprocesosview1["Spanish"]["Director"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DirectorCargo"] = "Director Cargo";
	$fieldToolTipsprocesosview1["Spanish"]["DirectorCargo"] = "";
	$placeHoldersprocesosview1["Spanish"]["DirectorCargo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Etapa"] = "Etapa";
	$fieldToolTipsprocesosview1["Spanish"]["Etapa"] = "";
	$placeHoldersprocesosview1["Spanish"]["Etapa"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Persuasivo"] = "Persuasivo";
	$fieldToolTipsprocesosview1["Spanish"]["Persuasivo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Persuasivo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Plazo"] = "Plazo";
	$fieldToolTipsprocesosview1["Spanish"]["Plazo"] = "";
	$placeHoldersprocesosview1["Spanish"]["Plazo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Mayor"] = "Mayor";
	$fieldToolTipsprocesosview1["Spanish"]["Mayor"] = "";
	$placeHoldersprocesosview1["Spanish"]["Mayor"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Revocatoria"] = "Revocatoria";
	$fieldToolTipsprocesosview1["Spanish"]["Revocatoria"] = "";
	$placeHoldersprocesosview1["Spanish"]["Revocatoria"] = "";
	$fieldLabelsprocesosview1["Spanish"]["RecaudoTerminado"] = "Recaudo Terminado";
	$fieldToolTipsprocesosview1["Spanish"]["RecaudoTerminado"] = "";
	$placeHoldersprocesosview1["Spanish"]["RecaudoTerminado"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Naturaleza"] = "Naturaleza";
	$fieldToolTipsprocesosview1["Spanish"]["Naturaleza"] = "";
	$placeHoldersprocesosview1["Spanish"]["Naturaleza"] = "";
	$fieldLabelsprocesosview1["Spanish"]["TasaTipo"] = "Tasa Tipo";
	$fieldToolTipsprocesosview1["Spanish"]["TasaTipo"] = "";
	$placeHoldersprocesosview1["Spanish"]["TasaTipo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CarteraTipo"] = "Cartera Tipo";
	$fieldToolTipsprocesosview1["Spanish"]["CarteraTipo"] = "";
	$placeHoldersprocesosview1["Spanish"]["CarteraTipo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["Prescrita"] = "Prescrita";
	$fieldToolTipsprocesosview1["Spanish"]["Prescrita"] = "";
	$placeHoldersprocesosview1["Spanish"]["Prescrita"] = "";
	$fieldLabelsprocesosview1["Spanish"]["TrasladoCartera"] = "Traslado Cartera";
	$fieldToolTipsprocesosview1["Spanish"]["TrasladoCartera"] = "";
	$placeHoldersprocesosview1["Spanish"]["TrasladoCartera"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CarteraTipoIdOrigen"] = "Cartera Tipo Id Origen";
	$fieldToolTipsprocesosview1["Spanish"]["CarteraTipoIdOrigen"] = "";
	$placeHoldersprocesosview1["Spanish"]["CarteraTipoIdOrigen"] = "";
	$fieldLabelsprocesosview1["Spanish"]["TrasladoConcepto"] = "Traslado Concepto";
	$fieldToolTipsprocesosview1["Spanish"]["TrasladoConcepto"] = "";
	$placeHoldersprocesosview1["Spanish"]["TrasladoConcepto"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ConceptoIdOrigen"] = "Concepto Id Origen";
	$fieldToolTipsprocesosview1["Spanish"]["ConceptoIdOrigen"] = "";
	$placeHoldersprocesosview1["Spanish"]["ConceptoIdOrigen"] = "";
	$fieldLabelsprocesosview1["Spanish"]["CarteraTipoOrigen"] = "Cartera Tipo Origen";
	$fieldToolTipsprocesosview1["Spanish"]["CarteraTipoOrigen"] = "";
	$placeHoldersprocesosview1["Spanish"]["CarteraTipoOrigen"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ConceptoOrigen"] = "Concepto Origen";
	$fieldToolTipsprocesosview1["Spanish"]["ConceptoOrigen"] = "";
	$placeHoldersprocesosview1["Spanish"]["ConceptoOrigen"] = "";
	$fieldLabelsprocesosview1["Spanish"]["ChequeoId"] = "Chequeo Id";
	$fieldToolTipsprocesosview1["Spanish"]["ChequeoId"] = "";
	$placeHoldersprocesosview1["Spanish"]["ChequeoId"] = "";
	$fieldLabelsprocesosview1["Spanish"]["VlrCostas"] = "Vlr Costas";
	$fieldToolTipsprocesosview1["Spanish"]["VlrCostas"] = "";
	$placeHoldersprocesosview1["Spanish"]["VlrCostas"] = "";
	$fieldLabelsprocesosview1["Spanish"]["VlrInteresesPlazo"] = "Vlr Intereses Plazo";
	$fieldToolTipsprocesosview1["Spanish"]["VlrInteresesPlazo"] = "";
	$placeHoldersprocesosview1["Spanish"]["VlrInteresesPlazo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["AbogadoDocumento"] = "Abogado Documento";
	$fieldToolTipsprocesosview1["Spanish"]["AbogadoDocumento"] = "";
	$placeHoldersprocesosview1["Spanish"]["AbogadoDocumento"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoCorreo"] = "Despacho Correo";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoCorreo"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoCorreo"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoDireccion"] = "Despacho Direccion";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoDireccion"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoDireccion"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoJuez"] = "Despacho Juez";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoJuez"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoJuez"] = "";
	$fieldLabelsprocesosview1["Spanish"]["DespachoTelefonos"] = "Despacho Telefonos";
	$fieldToolTipsprocesosview1["Spanish"]["DespachoTelefonos"] = "";
	$placeHoldersprocesosview1["Spanish"]["DespachoTelefonos"] = "";
	if (count($fieldToolTipsprocesosview1["Spanish"]))
		$tdataprocesosview1[".isUseToolTips"] = true;
}


	$tdataprocesosview1[".NCSearch"] = true;



$tdataprocesosview1[".shortTableName"] = "procesosview1";
$tdataprocesosview1[".nSecOptions"] = 0;

$tdataprocesosview1[".mainTableOwnerID"] = "";
$tdataprocesosview1[".entityType"] = 0;
$tdataprocesosview1[".connId"] = "GCC_at_S00001_CCAD01";


$tdataprocesosview1[".strOriginalTableName"] = "dbo.ProcesosView1";

	



$tdataprocesosview1[".showAddInPopup"] = false;

$tdataprocesosview1[".showEditInPopup"] = false;

$tdataprocesosview1[".showViewInPopup"] = false;

$tdataprocesosview1[".listAjax"] = false;
//	temporary
//$tdataprocesosview1[".listAjax"] = false;

	$tdataprocesosview1[".audit"] = false;

	$tdataprocesosview1[".locking"] = false;


$pages = $tdataprocesosview1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprocesosview1[".edit"] = true;
	$tdataprocesosview1[".afterEditAction"] = 1;
	$tdataprocesosview1[".closePopupAfterEdit"] = 1;
	$tdataprocesosview1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprocesosview1[".add"] = true;
$tdataprocesosview1[".afterAddAction"] = 1;
$tdataprocesosview1[".closePopupAfterAdd"] = 1;
$tdataprocesosview1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprocesosview1[".list"] = true;
}



$tdataprocesosview1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprocesosview1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprocesosview1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprocesosview1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprocesosview1[".printFriendly"] = true;
}



$tdataprocesosview1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprocesosview1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprocesosview1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprocesosview1[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataprocesosview1[".ajaxCodeSnippetAdded"] = false;

$tdataprocesosview1[".buttonsAdded"] = false;

$tdataprocesosview1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocesosview1[".isUseTimeForSearch"] = false;


$tdataprocesosview1[".badgeColor"] = "008B8B";


$tdataprocesosview1[".allSearchFields"] = array();
$tdataprocesosview1[".filterFields"] = array();
$tdataprocesosview1[".requiredSearchFields"] = array();

$tdataprocesosview1[".googleLikeFields"] = array();
$tdataprocesosview1[".googleLikeFields"][] = "ProcesoId";
$tdataprocesosview1[".googleLikeFields"][] = "Fecha";
$tdataprocesosview1[".googleLikeFields"][] = "Numero";
$tdataprocesosview1[".googleLikeFields"][] = "Obligacion";
$tdataprocesosview1[".googleLikeFields"][] = "Costas";
$tdataprocesosview1[".googleLikeFields"][] = "Intereses";
$tdataprocesosview1[".googleLikeFields"][] = "Folios";
$tdataprocesosview1[".googleLikeFields"][] = "Observaciones";
$tdataprocesosview1[".googleLikeFields"][] = "Seccional";
$tdataprocesosview1[".googleLikeFields"][] = "Ciudad";
$tdataprocesosview1[".googleLikeFields"][] = "Abogado";
$tdataprocesosview1[".googleLikeFields"][] = "Masculino";
$tdataprocesosview1[".googleLikeFields"][] = "Despacho";
$tdataprocesosview1[".googleLikeFields"][] = "Concepto";
$tdataprocesosview1[".googleLikeFields"][] = "Motivo";
$tdataprocesosview1[".googleLikeFields"][] = "Estado";
$tdataprocesosview1[".googleLikeFields"][] = "Calificacion";
$tdataprocesosview1[".googleLikeFields"][] = "PiePagina";
$tdataprocesosview1[".googleLikeFields"][] = "CiudadDepartamento";
$tdataprocesosview1[".googleLikeFields"][] = "Sigobius";
$tdataprocesosview1[".googleLikeFields"][] = "Cuotas";
$tdataprocesosview1[".googleLikeFields"][] = "Abono";
$tdataprocesosview1[".googleLikeFields"][] = "Inicio";
$tdataprocesosview1[".googleLikeFields"][] = "VlrCuota";
$tdataprocesosview1[".googleLikeFields"][] = "VlrIntereses";
$tdataprocesosview1[".googleLikeFields"][] = "Garantia";
$tdataprocesosview1[".googleLikeFields"][] = "Recaudo";
$tdataprocesosview1[".googleLikeFields"][] = "Sancionado";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoDocumento";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoTipoDocumento";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoCiudad";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoCiudad";
$tdataprocesosview1[".googleLikeFields"][] = "Providencia";
$tdataprocesosview1[".googleLikeFields"][] = "Ejecutoria";
$tdataprocesosview1[".googleLikeFields"][] = "Radicado";
$tdataprocesosview1[".googleLikeFields"][] = "Terminacion";
$tdataprocesosview1[".googleLikeFields"][] = "Liquidacion";
$tdataprocesosview1[".googleLikeFields"][] = "Dias";
$tdataprocesosview1[".googleLikeFields"][] = "Tipo";
$tdataprocesosview1[".googleLikeFields"][] = "Cantidad";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoMasculino";
$tdataprocesosview1[".googleLikeFields"][] = "SeccionalCorreo";
$tdataprocesosview1[".googleLikeFields"][] = "SeccionalDireccion";
$tdataprocesosview1[".googleLikeFields"][] = "SeccionalTelefonos";
$tdataprocesosview1[".googleLikeFields"][] = "Fallecimiento";
$tdataprocesosview1[".googleLikeFields"][] = "Notificacion";
$tdataprocesosview1[".googleLikeFields"][] = "SeccionalNit";
$tdataprocesosview1[".googleLikeFields"][] = "SeccionalId";
$tdataprocesosview1[".googleLikeFields"][] = "AbogadoId";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoId";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoId";
$tdataprocesosview1[".googleLikeFields"][] = "ConceptoId";
$tdataprocesosview1[".googleLikeFields"][] = "NaturalezaId";
$tdataprocesosview1[".googleLikeFields"][] = "EstadoId";
$tdataprocesosview1[".googleLikeFields"][] = "EtapaId";
$tdataprocesosview1[".googleLikeFields"][] = "CalificacionId";
$tdataprocesosview1[".googleLikeFields"][] = "MotivoId";
$tdataprocesosview1[".googleLikeFields"][] = "ProcesoObservaciones";
$tdataprocesosview1[".googleLikeFields"][] = "Remisorio";
$tdataprocesosview1[".googleLikeFields"][] = "Acuerdo";
$tdataprocesosview1[".googleLikeFields"][] = "Incumplimiento";
$tdataprocesosview1[".googleLikeFields"][] = "Suspension";
$tdataprocesosview1[".googleLikeFields"][] = "Traslado";
$tdataprocesosview1[".googleLikeFields"][] = "Error";
$tdataprocesosview1[".googleLikeFields"][] = "Actuacion";
$tdataprocesosview1[".googleLikeFields"][] = "TipoDocumentoId";
$tdataprocesosview1[".googleLikeFields"][] = "Juridica";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoEmail";
$tdataprocesosview1[".googleLikeFields"][] = "SancionadoCelular";
$tdataprocesosview1[".googleLikeFields"][] = "CarteraTipoId";
$tdataprocesosview1[".googleLikeFields"][] = "ConceptoAbogado";
$tdataprocesosview1[".googleLikeFields"][] = "LiquidaIntereses";
$tdataprocesosview1[".googleLikeFields"][] = "Saldo";
$tdataprocesosview1[".googleLikeFields"][] = "Prescripcion";
$tdataprocesosview1[".googleLikeFields"][] = "FechaPrescripcion";
$tdataprocesosview1[".googleLikeFields"][] = "ObligacionInicial";
$tdataprocesosview1[".googleLikeFields"][] = "CostasInicial";
$tdataprocesosview1[".googleLikeFields"][] = "InteresesInicial";
$tdataprocesosview1[".googleLikeFields"][] = "Minjusticia_Def";
$tdataprocesosview1[".googleLikeFields"][] = "MinJusticia";
$tdataprocesosview1[".googleLikeFields"][] = "ActuacionId";
$tdataprocesosview1[".googleLikeFields"][] = "NotificacionValidada";
$tdataprocesosview1[".googleLikeFields"][] = "Validado";
$tdataprocesosview1[".googleLikeFields"][] = "Documento";
$tdataprocesosview1[".googleLikeFields"][] = "Seleccionado";
$tdataprocesosview1[".googleLikeFields"][] = "CompetenciaId";
$tdataprocesosview1[".googleLikeFields"][] = "SeleccionadoPor";
$tdataprocesosview1[".googleLikeFields"][] = "RadicadoNumero";
$tdataprocesosview1[".googleLikeFields"][] = "MinjusticiaId";
$tdataprocesosview1[".googleLikeFields"][] = "Contador";
$tdataprocesosview1[".googleLikeFields"][] = "ContadorCargo";
$tdataprocesosview1[".googleLikeFields"][] = "Director";
$tdataprocesosview1[".googleLikeFields"][] = "DirectorCargo";
$tdataprocesosview1[".googleLikeFields"][] = "Etapa";
$tdataprocesosview1[".googleLikeFields"][] = "Persuasivo";
$tdataprocesosview1[".googleLikeFields"][] = "Plazo";
$tdataprocesosview1[".googleLikeFields"][] = "Mayor";
$tdataprocesosview1[".googleLikeFields"][] = "Revocatoria";
$tdataprocesosview1[".googleLikeFields"][] = "RecaudoTerminado";
$tdataprocesosview1[".googleLikeFields"][] = "Naturaleza";
$tdataprocesosview1[".googleLikeFields"][] = "TasaTipo";
$tdataprocesosview1[".googleLikeFields"][] = "CarteraTipo";
$tdataprocesosview1[".googleLikeFields"][] = "Prescrita";
$tdataprocesosview1[".googleLikeFields"][] = "TrasladoCartera";
$tdataprocesosview1[".googleLikeFields"][] = "CarteraTipoIdOrigen";
$tdataprocesosview1[".googleLikeFields"][] = "TrasladoConcepto";
$tdataprocesosview1[".googleLikeFields"][] = "ConceptoIdOrigen";
$tdataprocesosview1[".googleLikeFields"][] = "CarteraTipoOrigen";
$tdataprocesosview1[".googleLikeFields"][] = "ConceptoOrigen";
$tdataprocesosview1[".googleLikeFields"][] = "ChequeoId";
$tdataprocesosview1[".googleLikeFields"][] = "VlrCostas";
$tdataprocesosview1[".googleLikeFields"][] = "VlrInteresesPlazo";
$tdataprocesosview1[".googleLikeFields"][] = "AbogadoDocumento";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoCorreo";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoDireccion";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoJuez";
$tdataprocesosview1[".googleLikeFields"][] = "DespachoTelefonos";



$tdataprocesosview1[".tableType"] = "list";

$tdataprocesosview1[".printerPageOrientation"] = 0;
$tdataprocesosview1[".nPrinterPageScale"] = 100;

$tdataprocesosview1[".nPrinterSplitRecords"] = 40;

$tdataprocesosview1[".geocodingEnabled"] = false;




$tdataprocesosview1[".isDisplayLoading"] = true;






$tdataprocesosview1[".pageSize"] = 20;

$tdataprocesosview1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprocesosview1[".strOrderBy"] = $tstrOrderBy;

$tdataprocesosview1[".orderindexes"] = array();


$tdataprocesosview1[".sqlHead"] = "SELECT ProcesoId,  	Fecha,  	Numero,  	Obligacion,  	Costas,  	Intereses,  	Folios,  	Observaciones,  	Seccional,  	Ciudad,  	Abogado,  	Masculino,  	Despacho,  	Concepto,  	Motivo,  	Estado,  	Calificacion,  	PiePagina,  	CiudadDepartamento,  	Sigobius,  	Cuotas,  	Abono,  	Inicio,  	VlrCuota,  	VlrIntereses,  	Garantia,  	Recaudo,  	Sancionado,  	SancionadoDocumento,  	SancionadoTipoDocumento,  	SancionadoCiudad,  	DespachoCiudad,  	Providencia,  	Ejecutoria,  	Radicado,  	Terminacion,  	Liquidacion,  	Dias,  	Tipo,  	Cantidad,  	SancionadoMasculino,  	SeccionalCorreo,  	SeccionalDireccion,  	SeccionalTelefonos,  	Fallecimiento,  	Notificacion,  	SeccionalNit,  	SeccionalId,  	AbogadoId,  	DespachoId,  	SancionadoId,  	ConceptoId,  	NaturalezaId,  	EstadoId,  	EtapaId,  	CalificacionId,  	MotivoId,  	ProcesoObservaciones,  	Remisorio,  	Acuerdo,  	Incumplimiento,  	Suspension,  	Traslado,  	Error,  	Actuacion,  	TipoDocumentoId,  	Juridica,  	SancionadoEmail,  	SancionadoCelular,  	CarteraTipoId,  	ConceptoAbogado,  	LiquidaIntereses,  	Saldo,  	Prescripcion,  	FechaPrescripcion,  	ObligacionInicial,  	CostasInicial,  	InteresesInicial,  	Minjusticia_Def,  	MinJusticia,  	ActuacionId,  	NotificacionValidada,  	Validado,  	Documento,  	Seleccionado,  	CompetenciaId,  	SeleccionadoPor,  	RadicadoNumero,  	MinjusticiaId,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Etapa,  	Persuasivo,  	Plazo,  	Mayor,  	Revocatoria,  	RecaudoTerminado,  	Naturaleza,  	TasaTipo,  	CarteraTipo,  	Prescrita,  	TrasladoCartera,  	CarteraTipoIdOrigen,  	TrasladoConcepto,  	ConceptoIdOrigen,  	CarteraTipoOrigen,  	ConceptoOrigen,  	ChequeoId,  	VlrCostas,  	VlrInteresesPlazo,  	AbogadoDocumento,  	DespachoCorreo,  	DespachoDireccion,  	DespachoJuez,  	DespachoTelefonos";
$tdataprocesosview1[".sqlFrom"] = "FROM dbo.ProcesosView1";
$tdataprocesosview1[".sqlWhereExpr"] = "";
$tdataprocesosview1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdataprocesosview1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocesosview1[".arrGroupsPerPage"] = $arrGPP;

$tdataprocesosview1[".highlightSearchResults"] = true;

$tableKeysprocesosview1 = array();
$tdataprocesosview1[".Keys"] = $tableKeysprocesosview1;


$tdataprocesosview1[".hideMobileList"] = array();




//	ProcesoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProcesoId";
	$fdata["GoodName"] = "ProcesoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ProcesoId");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataprocesosview1["ProcesoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ProcesoId";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Fecha");
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


	$tdataprocesosview1["Fecha"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Fecha";
//	Numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numero";
	$fdata["GoodName"] = "Numero";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Numero");
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


	$tdataprocesosview1["Numero"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Numero";
//	Obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Obligacion";
	$fdata["GoodName"] = "Obligacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Obligacion");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Obligacion";

		$fdata["sourceSingle"] = "Obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligacion";

	
	
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


	$tdataprocesosview1["Obligacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Obligacion";
//	Costas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Costas";
	$fdata["GoodName"] = "Costas";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Costas");
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


	$tdataprocesosview1["Costas"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Costas";
//	Intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Intereses";
	$fdata["GoodName"] = "Intereses";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Intereses");
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


	$tdataprocesosview1["Intereses"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Intereses";
//	Folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Folios";
	$fdata["GoodName"] = "Folios";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Folios");
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


	$tdataprocesosview1["Folios"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Folios";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Observaciones");
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


	$tdataprocesosview1["Observaciones"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Observaciones";
//	Seccional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Seccional";
	$fdata["GoodName"] = "Seccional";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Seccional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Seccional";

		$fdata["sourceSingle"] = "Seccional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seccional";

	
	
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


	$tdataprocesosview1["Seccional"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Seccional";
//	Ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Ciudad";
	$fdata["GoodName"] = "Ciudad";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ciudad";

		$fdata["sourceSingle"] = "Ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ciudad";

	
	
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


	$tdataprocesosview1["Ciudad"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Ciudad";
//	Abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Abogado";
	$fdata["GoodName"] = "Abogado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Abogado";

		$fdata["sourceSingle"] = "Abogado";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["Abogado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Abogado";
//	Masculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Masculino";
	$fdata["GoodName"] = "Masculino";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Masculino");
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


	$tdataprocesosview1["Masculino"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Masculino";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Despacho");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Despacho";

		$fdata["sourceSingle"] = "Despacho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Despacho";

	
	
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


	$tdataprocesosview1["Despacho"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Despacho";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["sourceSingle"] = "Concepto";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["Concepto"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Concepto";
//	Motivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Motivo";
	$fdata["GoodName"] = "Motivo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Motivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Motivo";

		$fdata["sourceSingle"] = "Motivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Motivo";

	
	
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


	$tdataprocesosview1["Motivo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Motivo";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdataprocesosview1["Estado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Estado";
//	Calificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Calificacion";
	$fdata["GoodName"] = "Calificacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Calificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Calificacion";

		$fdata["sourceSingle"] = "Calificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Calificacion";

	
	
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


	$tdataprocesosview1["Calificacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Calificacion";
//	PiePagina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PiePagina";
	$fdata["GoodName"] = "PiePagina";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","PiePagina");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PiePagina";

		$fdata["sourceSingle"] = "PiePagina";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PiePagina";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataprocesosview1["PiePagina"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "PiePagina";
//	CiudadDepartamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CiudadDepartamento";
	$fdata["GoodName"] = "CiudadDepartamento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CiudadDepartamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CiudadDepartamento";

		$fdata["sourceSingle"] = "CiudadDepartamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CiudadDepartamento";

	
	
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
			$edata["EditParams"].= " maxlength=513";

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


	$tdataprocesosview1["CiudadDepartamento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CiudadDepartamento";
//	Sigobius
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Sigobius";
	$fdata["GoodName"] = "Sigobius";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Sigobius");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sigobius";

		$fdata["sourceSingle"] = "Sigobius";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sigobius";

	
	
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


	$tdataprocesosview1["Sigobius"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Sigobius";
//	Cuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Cuotas";
	$fdata["GoodName"] = "Cuotas";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Cuotas");
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


	$tdataprocesosview1["Cuotas"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Cuotas";
//	Abono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Abono";
	$fdata["GoodName"] = "Abono";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Abono");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Abono";

		$fdata["sourceSingle"] = "Abono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abono";

	
	
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


	$tdataprocesosview1["Abono"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Abono";
//	Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Inicio";
	$fdata["GoodName"] = "Inicio";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Inicio");
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


	$tdataprocesosview1["Inicio"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Inicio";
//	VlrCuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "VlrCuota";
	$fdata["GoodName"] = "VlrCuota";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","VlrCuota");
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


	$tdataprocesosview1["VlrCuota"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "VlrCuota";
//	VlrIntereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "VlrIntereses";
	$fdata["GoodName"] = "VlrIntereses";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","VlrIntereses");
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


	$tdataprocesosview1["VlrIntereses"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "VlrIntereses";
//	Garantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Garantia";
	$fdata["GoodName"] = "Garantia";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Garantia");
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


	$tdataprocesosview1["Garantia"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Garantia";
//	Recaudo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Recaudo";
	$fdata["GoodName"] = "Recaudo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Recaudo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Recaudo";

		$fdata["sourceSingle"] = "Recaudo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recaudo";

	
	
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


	$tdataprocesosview1["Recaudo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Recaudo";
//	Sancionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Sancionado";
	$fdata["GoodName"] = "Sancionado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Sancionado");
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
			$edata["EditParams"].= " maxlength=308";

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


	$tdataprocesosview1["Sancionado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Sancionado";
//	SancionadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SancionadoDocumento";
	$fdata["GoodName"] = "SancionadoDocumento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoDocumento";

		$fdata["sourceSingle"] = "SancionadoDocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoDocumento";

	
	
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


	$tdataprocesosview1["SancionadoDocumento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoDocumento";
//	SancionadoTipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "SancionadoTipoDocumento";
	$fdata["GoodName"] = "SancionadoTipoDocumento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoTipoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoTipoDocumento";

		$fdata["sourceSingle"] = "SancionadoTipoDocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoTipoDocumento";

	
	
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


	$tdataprocesosview1["SancionadoTipoDocumento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoTipoDocumento";
//	SancionadoCiudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "SancionadoCiudad";
	$fdata["GoodName"] = "SancionadoCiudad";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoCiudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoCiudad";

		$fdata["sourceSingle"] = "SancionadoCiudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoCiudad";

	
	
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
			$edata["EditParams"].= " maxlength=103";

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


	$tdataprocesosview1["SancionadoCiudad"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoCiudad";
//	DespachoCiudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "DespachoCiudad";
	$fdata["GoodName"] = "DespachoCiudad";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoCiudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DespachoCiudad";

		$fdata["sourceSingle"] = "DespachoCiudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoCiudad";

	
	
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
			$edata["EditParams"].= " maxlength=103";

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


	$tdataprocesosview1["DespachoCiudad"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoCiudad";
//	Providencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Providencia";
	$fdata["GoodName"] = "Providencia";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Providencia");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprocesosview1["Providencia"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Providencia";
//	Ejecutoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Ejecutoria";
	$fdata["GoodName"] = "Ejecutoria";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Ejecutoria");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprocesosview1["Ejecutoria"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Ejecutoria";
//	Radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Radicado";
	$fdata["GoodName"] = "Radicado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Radicado");
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


	$tdataprocesosview1["Radicado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Radicado";
//	Terminacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Terminacion";
	$fdata["GoodName"] = "Terminacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Terminacion");
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


	$tdataprocesosview1["Terminacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Terminacion";
//	Liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Liquidacion";
	$fdata["GoodName"] = "Liquidacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Liquidacion");
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


	$tdataprocesosview1["Liquidacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Liquidacion";
//	Dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Dias";
	$fdata["GoodName"] = "Dias";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Dias");
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


	$tdataprocesosview1["Dias"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Dias";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Tipo");
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


	$tdataprocesosview1["Tipo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Tipo";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Cantidad");
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


	$tdataprocesosview1["Cantidad"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Cantidad";
//	SancionadoMasculino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "SancionadoMasculino";
	$fdata["GoodName"] = "SancionadoMasculino";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoMasculino");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "SancionadoMasculino";

		$fdata["sourceSingle"] = "SancionadoMasculino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoMasculino";

	
	
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


	$tdataprocesosview1["SancionadoMasculino"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoMasculino";
//	SeccionalCorreo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "SeccionalCorreo";
	$fdata["GoodName"] = "SeccionalCorreo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeccionalCorreo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SeccionalCorreo";

		$fdata["sourceSingle"] = "SeccionalCorreo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalCorreo";

	
	
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


	$tdataprocesosview1["SeccionalCorreo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeccionalCorreo";
//	SeccionalDireccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "SeccionalDireccion";
	$fdata["GoodName"] = "SeccionalDireccion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeccionalDireccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SeccionalDireccion";

		$fdata["sourceSingle"] = "SeccionalDireccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalDireccion";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataprocesosview1["SeccionalDireccion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeccionalDireccion";
//	SeccionalTelefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "SeccionalTelefonos";
	$fdata["GoodName"] = "SeccionalTelefonos";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeccionalTelefonos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SeccionalTelefonos";

		$fdata["sourceSingle"] = "SeccionalTelefonos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalTelefonos";

	
	
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


	$tdataprocesosview1["SeccionalTelefonos"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeccionalTelefonos";
//	Fallecimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Fallecimiento";
	$fdata["GoodName"] = "Fallecimiento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Fallecimiento");
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


	$tdataprocesosview1["Fallecimiento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Fallecimiento";
//	Notificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Notificacion";
	$fdata["GoodName"] = "Notificacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Notificacion");
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


	$tdataprocesosview1["Notificacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Notificacion";
//	SeccionalNit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "SeccionalNit";
	$fdata["GoodName"] = "SeccionalNit";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeccionalNit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SeccionalNit";

		$fdata["sourceSingle"] = "SeccionalNit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SeccionalNit";

	
	
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


	$tdataprocesosview1["SeccionalNit"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeccionalNit";
//	SeccionalId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "SeccionalId";
	$fdata["GoodName"] = "SeccionalId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeccionalId");
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


	$tdataprocesosview1["SeccionalId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeccionalId";
//	AbogadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "AbogadoId";
	$fdata["GoodName"] = "AbogadoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","AbogadoId");
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


	$tdataprocesosview1["AbogadoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "AbogadoId";
//	DespachoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DespachoId";
	$fdata["GoodName"] = "DespachoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoId");
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


	$tdataprocesosview1["DespachoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoId";
//	SancionadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "SancionadoId";
	$fdata["GoodName"] = "SancionadoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoId");
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


	$tdataprocesosview1["SancionadoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoId";
//	ConceptoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ConceptoId";
	$fdata["GoodName"] = "ConceptoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ConceptoId");
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


	$tdataprocesosview1["ConceptoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ConceptoId";
//	NaturalezaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "NaturalezaId";
	$fdata["GoodName"] = "NaturalezaId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","NaturalezaId");
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


	$tdataprocesosview1["NaturalezaId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "NaturalezaId";
//	EstadoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "EstadoId";
	$fdata["GoodName"] = "EstadoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","EstadoId");
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


	$tdataprocesosview1["EstadoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "EstadoId";
//	EtapaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "EtapaId";
	$fdata["GoodName"] = "EtapaId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","EtapaId");
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


	$tdataprocesosview1["EtapaId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "EtapaId";
//	CalificacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CalificacionId";
	$fdata["GoodName"] = "CalificacionId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CalificacionId");
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


	$tdataprocesosview1["CalificacionId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CalificacionId";
//	MotivoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "MotivoId";
	$fdata["GoodName"] = "MotivoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","MotivoId");
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


	$tdataprocesosview1["MotivoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "MotivoId";
//	ProcesoObservaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "ProcesoObservaciones";
	$fdata["GoodName"] = "ProcesoObservaciones";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ProcesoObservaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ProcesoObservaciones";

		$fdata["sourceSingle"] = "ProcesoObservaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoObservaciones";

	
	
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


	$tdataprocesosview1["ProcesoObservaciones"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ProcesoObservaciones";
//	Remisorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Remisorio";
	$fdata["GoodName"] = "Remisorio";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Remisorio");
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


	$tdataprocesosview1["Remisorio"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Remisorio";
//	Acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Acuerdo";
	$fdata["GoodName"] = "Acuerdo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Acuerdo");
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


	$tdataprocesosview1["Acuerdo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Acuerdo";
//	Incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Incumplimiento";
	$fdata["GoodName"] = "Incumplimiento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Incumplimiento");
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


	$tdataprocesosview1["Incumplimiento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Incumplimiento";
//	Suspension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Suspension";
	$fdata["GoodName"] = "Suspension";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Suspension");
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


	$tdataprocesosview1["Suspension"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Suspension";
//	Traslado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Traslado";
	$fdata["GoodName"] = "Traslado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Traslado");
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


	$tdataprocesosview1["Traslado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Traslado";
//	Error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Error";
	$fdata["GoodName"] = "Error";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Error");
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


	$tdataprocesosview1["Error"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Error";
//	Actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Actuacion";
	$fdata["GoodName"] = "Actuacion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Actuacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Actuacion";

		$fdata["sourceSingle"] = "Actuacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Actuacion";

	
	
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


	$tdataprocesosview1["Actuacion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Actuacion";
//	TipoDocumentoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "TipoDocumentoId";
	$fdata["GoodName"] = "TipoDocumentoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","TipoDocumentoId");
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


	$tdataprocesosview1["TipoDocumentoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "TipoDocumentoId";
//	Juridica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Juridica";
	$fdata["GoodName"] = "Juridica";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Juridica");
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


	$tdataprocesosview1["Juridica"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Juridica";
//	SancionadoEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "SancionadoEmail";
	$fdata["GoodName"] = "SancionadoEmail";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoEmail";

		$fdata["sourceSingle"] = "SancionadoEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoEmail";

	
	
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


	$tdataprocesosview1["SancionadoEmail"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoEmail";
//	SancionadoCelular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "SancionadoCelular";
	$fdata["GoodName"] = "SancionadoCelular";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SancionadoCelular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SancionadoCelular";

		$fdata["sourceSingle"] = "SancionadoCelular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SancionadoCelular";

	
	
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


	$tdataprocesosview1["SancionadoCelular"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SancionadoCelular";
//	CarteraTipoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "CarteraTipoId";
	$fdata["GoodName"] = "CarteraTipoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CarteraTipoId");
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


	$tdataprocesosview1["CarteraTipoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CarteraTipoId";
//	ConceptoAbogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "ConceptoAbogado";
	$fdata["GoodName"] = "ConceptoAbogado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ConceptoAbogado");
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


	$tdataprocesosview1["ConceptoAbogado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ConceptoAbogado";
//	LiquidaIntereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "LiquidaIntereses";
	$fdata["GoodName"] = "LiquidaIntereses";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","LiquidaIntereses");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "LiquidaIntereses";

		$fdata["sourceSingle"] = "LiquidaIntereses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LiquidaIntereses";

	
	
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


	$tdataprocesosview1["LiquidaIntereses"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "LiquidaIntereses";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Saldo");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "Saldo";

		$fdata["sourceSingle"] = "Saldo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Saldo";

	
	
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


	$tdataprocesosview1["Saldo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Saldo";
//	Prescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Prescripcion";
	$fdata["GoodName"] = "Prescripcion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Prescripcion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Prescripcion";

		$fdata["sourceSingle"] = "Prescripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prescripcion";

	
	
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


	$tdataprocesosview1["Prescripcion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Prescripcion";
//	FechaPrescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "FechaPrescripcion";
	$fdata["GoodName"] = "FechaPrescripcion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","FechaPrescripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FechaPrescripcion";

		$fdata["sourceSingle"] = "FechaPrescripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaPrescripcion";

	
	
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


	$tdataprocesosview1["FechaPrescripcion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "FechaPrescripcion";
//	ObligacionInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "ObligacionInicial";
	$fdata["GoodName"] = "ObligacionInicial";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ObligacionInicial");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "ObligacionInicial";

		$fdata["sourceSingle"] = "ObligacionInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ObligacionInicial";

	
	
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


	$tdataprocesosview1["ObligacionInicial"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ObligacionInicial";
//	CostasInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "CostasInicial";
	$fdata["GoodName"] = "CostasInicial";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CostasInicial");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "CostasInicial";

		$fdata["sourceSingle"] = "CostasInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CostasInicial";

	
	
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


	$tdataprocesosview1["CostasInicial"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CostasInicial";
//	InteresesInicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "InteresesInicial";
	$fdata["GoodName"] = "InteresesInicial";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","InteresesInicial");
	$fdata["FieldType"] = 6;


	
	
			

		$fdata["strField"] = "InteresesInicial";

		$fdata["sourceSingle"] = "InteresesInicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InteresesInicial";

	
	
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


	$tdataprocesosview1["InteresesInicial"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "InteresesInicial";
//	Minjusticia_Def
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Minjusticia_Def";
	$fdata["GoodName"] = "Minjusticia_Def";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Minjusticia_Def");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Minjusticia_Def";

		$fdata["sourceSingle"] = "Minjusticia_Def";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minjusticia_Def";

	
	
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


	$tdataprocesosview1["Minjusticia_Def"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Minjusticia_Def";
//	MinJusticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "MinJusticia";
	$fdata["GoodName"] = "MinJusticia";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","MinJusticia");
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


	$tdataprocesosview1["MinJusticia"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "MinJusticia";
//	ActuacionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "ActuacionId";
	$fdata["GoodName"] = "ActuacionId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ActuacionId");
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


	$tdataprocesosview1["ActuacionId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ActuacionId";
//	NotificacionValidada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "NotificacionValidada";
	$fdata["GoodName"] = "NotificacionValidada";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","NotificacionValidada");
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


	$tdataprocesosview1["NotificacionValidada"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "NotificacionValidada";
//	Validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "Validado";
	$fdata["GoodName"] = "Validado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Validado");
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


	$tdataprocesosview1["Validado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Validado";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Documento");
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


	$tdataprocesosview1["Documento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Documento";
//	Seleccionado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Seleccionado";
	$fdata["GoodName"] = "Seleccionado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Seleccionado");
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


	$tdataprocesosview1["Seleccionado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Seleccionado";
//	CompetenciaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "CompetenciaId";
	$fdata["GoodName"] = "CompetenciaId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CompetenciaId");
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


	$tdataprocesosview1["CompetenciaId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CompetenciaId";
//	SeleccionadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "SeleccionadoPor";
	$fdata["GoodName"] = "SeleccionadoPor";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","SeleccionadoPor");
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


	$tdataprocesosview1["SeleccionadoPor"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "SeleccionadoPor";
//	RadicadoNumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "RadicadoNumero";
	$fdata["GoodName"] = "RadicadoNumero";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","RadicadoNumero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RadicadoNumero";

		$fdata["sourceSingle"] = "RadicadoNumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RadicadoNumero";

	
	
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


	$tdataprocesosview1["RadicadoNumero"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "RadicadoNumero";
//	MinjusticiaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "MinjusticiaId";
	$fdata["GoodName"] = "MinjusticiaId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","MinjusticiaId");
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


	$tdataprocesosview1["MinjusticiaId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "MinjusticiaId";
//	Contador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "Contador";
	$fdata["GoodName"] = "Contador";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Contador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Contador";

		$fdata["sourceSingle"] = "Contador";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["Contador"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Contador";
//	ContadorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "ContadorCargo";
	$fdata["GoodName"] = "ContadorCargo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ContadorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContadorCargo";

		$fdata["sourceSingle"] = "ContadorCargo";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["ContadorCargo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ContadorCargo";
//	Director
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Director";
	$fdata["GoodName"] = "Director";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Director");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Director";

		$fdata["sourceSingle"] = "Director";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["Director"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Director";
//	DirectorCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "DirectorCargo";
	$fdata["GoodName"] = "DirectorCargo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DirectorCargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DirectorCargo";

		$fdata["sourceSingle"] = "DirectorCargo";

		$fdata["isSQLExpression"] = true;
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


	$tdataprocesosview1["DirectorCargo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DirectorCargo";
//	Etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "Etapa";
	$fdata["GoodName"] = "Etapa";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Etapa";

		$fdata["sourceSingle"] = "Etapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Etapa";

	
	
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


	$tdataprocesosview1["Etapa"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Etapa";
//	Persuasivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Persuasivo";
	$fdata["GoodName"] = "Persuasivo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Persuasivo");
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


	$tdataprocesosview1["Persuasivo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Persuasivo";
//	Plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Plazo";
	$fdata["GoodName"] = "Plazo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Plazo");
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


	$tdataprocesosview1["Plazo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Plazo";
//	Mayor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Mayor";
	$fdata["GoodName"] = "Mayor";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Mayor");
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


	$tdataprocesosview1["Mayor"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Mayor";
//	Revocatoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Revocatoria";
	$fdata["GoodName"] = "Revocatoria";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Revocatoria");
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


	$tdataprocesosview1["Revocatoria"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Revocatoria";
//	RecaudoTerminado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "RecaudoTerminado";
	$fdata["GoodName"] = "RecaudoTerminado";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","RecaudoTerminado");
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


	$tdataprocesosview1["RecaudoTerminado"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "RecaudoTerminado";
//	Naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Naturaleza";
	$fdata["GoodName"] = "Naturaleza";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Naturaleza";

		$fdata["sourceSingle"] = "Naturaleza";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Naturaleza";

	
	
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


	$tdataprocesosview1["Naturaleza"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Naturaleza";
//	TasaTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "TasaTipo";
	$fdata["GoodName"] = "TasaTipo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","TasaTipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TasaTipo";

		$fdata["sourceSingle"] = "TasaTipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TasaTipo";

	
	
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


	$tdataprocesosview1["TasaTipo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "TasaTipo";
//	CarteraTipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "CarteraTipo";
	$fdata["GoodName"] = "CarteraTipo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CarteraTipo");
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


	$tdataprocesosview1["CarteraTipo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CarteraTipo";
//	Prescrita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Prescrita";
	$fdata["GoodName"] = "Prescrita";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","Prescrita");
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


	$tdataprocesosview1["Prescrita"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "Prescrita";
//	TrasladoCartera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "TrasladoCartera";
	$fdata["GoodName"] = "TrasladoCartera";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","TrasladoCartera");
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


	$tdataprocesosview1["TrasladoCartera"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "TrasladoCartera";
//	CarteraTipoIdOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "CarteraTipoIdOrigen";
	$fdata["GoodName"] = "CarteraTipoIdOrigen";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CarteraTipoIdOrigen");
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


	$tdataprocesosview1["CarteraTipoIdOrigen"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CarteraTipoIdOrigen";
//	TrasladoConcepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "TrasladoConcepto";
	$fdata["GoodName"] = "TrasladoConcepto";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","TrasladoConcepto");
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


	$tdataprocesosview1["TrasladoConcepto"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "TrasladoConcepto";
//	ConceptoIdOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "ConceptoIdOrigen";
	$fdata["GoodName"] = "ConceptoIdOrigen";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ConceptoIdOrigen");
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


	$tdataprocesosview1["ConceptoIdOrigen"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ConceptoIdOrigen";
//	CarteraTipoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "CarteraTipoOrigen";
	$fdata["GoodName"] = "CarteraTipoOrigen";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","CarteraTipoOrigen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarteraTipoOrigen";

		$fdata["sourceSingle"] = "CarteraTipoOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarteraTipoOrigen";

	
	
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


	$tdataprocesosview1["CarteraTipoOrigen"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "CarteraTipoOrigen";
//	ConceptoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "ConceptoOrigen";
	$fdata["GoodName"] = "ConceptoOrigen";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ConceptoOrigen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConceptoOrigen";

		$fdata["sourceSingle"] = "ConceptoOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConceptoOrigen";

	
	
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


	$tdataprocesosview1["ConceptoOrigen"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ConceptoOrigen";
//	ChequeoId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "ChequeoId";
	$fdata["GoodName"] = "ChequeoId";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","ChequeoId");
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


	$tdataprocesosview1["ChequeoId"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "ChequeoId";
//	VlrCostas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "VlrCostas";
	$fdata["GoodName"] = "VlrCostas";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","VlrCostas");
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


	$tdataprocesosview1["VlrCostas"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "VlrCostas";
//	VlrInteresesPlazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "VlrInteresesPlazo";
	$fdata["GoodName"] = "VlrInteresesPlazo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","VlrInteresesPlazo");
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


	$tdataprocesosview1["VlrInteresesPlazo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "VlrInteresesPlazo";
//	AbogadoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "AbogadoDocumento";
	$fdata["GoodName"] = "AbogadoDocumento";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","AbogadoDocumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AbogadoDocumento";

		$fdata["sourceSingle"] = "AbogadoDocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbogadoDocumento";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataprocesosview1["AbogadoDocumento"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "AbogadoDocumento";
//	DespachoCorreo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "DespachoCorreo";
	$fdata["GoodName"] = "DespachoCorreo";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoCorreo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DespachoCorreo";

		$fdata["sourceSingle"] = "DespachoCorreo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoCorreo";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdataprocesosview1["DespachoCorreo"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoCorreo";
//	DespachoDireccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "DespachoDireccion";
	$fdata["GoodName"] = "DespachoDireccion";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoDireccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DespachoDireccion";

		$fdata["sourceSingle"] = "DespachoDireccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoDireccion";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataprocesosview1["DespachoDireccion"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoDireccion";
//	DespachoJuez
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "DespachoJuez";
	$fdata["GoodName"] = "DespachoJuez";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoJuez");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DespachoJuez";

		$fdata["sourceSingle"] = "DespachoJuez";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoJuez";

	
	
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


	$tdataprocesosview1["DespachoJuez"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoJuez";
//	DespachoTelefonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "DespachoTelefonos";
	$fdata["GoodName"] = "DespachoTelefonos";
	$fdata["ownerTable"] = "dbo.ProcesosView1";
	$fdata["Label"] = GetFieldLabel("dbo_ProcesosView1","DespachoTelefonos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DespachoTelefonos";

		$fdata["sourceSingle"] = "DespachoTelefonos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DespachoTelefonos";

	
	
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


	$tdataprocesosview1["DespachoTelefonos"] = $fdata;
		$tdataprocesosview1[".searchableFields"][] = "DespachoTelefonos";


$tables_data["dbo.ProcesosView1"]=&$tdataprocesosview1;
$field_labels["dbo_ProcesosView1"] = &$fieldLabelsprocesosview1;
$fieldToolTips["dbo_ProcesosView1"] = &$fieldToolTipsprocesosview1;
$placeHolders["dbo_ProcesosView1"] = &$placeHoldersprocesosview1;
$page_titles["dbo_ProcesosView1"] = &$pageTitlesprocesosview1;


changeTextControlsToDate( "dbo.ProcesosView1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.ProcesosView1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.ProcesosView1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_procesosview1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProcesoId,  	Fecha,  	Numero,  	Obligacion,  	Costas,  	Intereses,  	Folios,  	Observaciones,  	Seccional,  	Ciudad,  	Abogado,  	Masculino,  	Despacho,  	Concepto,  	Motivo,  	Estado,  	Calificacion,  	PiePagina,  	CiudadDepartamento,  	Sigobius,  	Cuotas,  	Abono,  	Inicio,  	VlrCuota,  	VlrIntereses,  	Garantia,  	Recaudo,  	Sancionado,  	SancionadoDocumento,  	SancionadoTipoDocumento,  	SancionadoCiudad,  	DespachoCiudad,  	Providencia,  	Ejecutoria,  	Radicado,  	Terminacion,  	Liquidacion,  	Dias,  	Tipo,  	Cantidad,  	SancionadoMasculino,  	SeccionalCorreo,  	SeccionalDireccion,  	SeccionalTelefonos,  	Fallecimiento,  	Notificacion,  	SeccionalNit,  	SeccionalId,  	AbogadoId,  	DespachoId,  	SancionadoId,  	ConceptoId,  	NaturalezaId,  	EstadoId,  	EtapaId,  	CalificacionId,  	MotivoId,  	ProcesoObservaciones,  	Remisorio,  	Acuerdo,  	Incumplimiento,  	Suspension,  	Traslado,  	Error,  	Actuacion,  	TipoDocumentoId,  	Juridica,  	SancionadoEmail,  	SancionadoCelular,  	CarteraTipoId,  	ConceptoAbogado,  	LiquidaIntereses,  	Saldo,  	Prescripcion,  	FechaPrescripcion,  	ObligacionInicial,  	CostasInicial,  	InteresesInicial,  	Minjusticia_Def,  	MinJusticia,  	ActuacionId,  	NotificacionValidada,  	Validado,  	Documento,  	Seleccionado,  	CompetenciaId,  	SeleccionadoPor,  	RadicadoNumero,  	MinjusticiaId,  	Contador,  	ContadorCargo,  	Director,  	DirectorCargo,  	Etapa,  	Persuasivo,  	Plazo,  	Mayor,  	Revocatoria,  	RecaudoTerminado,  	Naturaleza,  	TasaTipo,  	CarteraTipo,  	Prescrita,  	TrasladoCartera,  	CarteraTipoIdOrigen,  	TrasladoConcepto,  	ConceptoIdOrigen,  	CarteraTipoOrigen,  	ConceptoOrigen,  	ChequeoId,  	VlrCostas,  	VlrInteresesPlazo,  	AbogadoDocumento,  	DespachoCorreo,  	DespachoDireccion,  	DespachoJuez,  	DespachoTelefonos";
$proto0["m_strFrom"] = "FROM dbo.ProcesosView1";
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
	"m_strName" => "ProcesoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto6["m_sql"] = "ProcesoId";
$proto6["m_srcTableName"] = "dbo.ProcesosView1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "dbo.ProcesosView1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto10["m_sql"] = "Numero";
$proto10["m_srcTableName"] = "dbo.ProcesosView1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto12["m_sql"] = "Obligacion";
$proto12["m_srcTableName"] = "dbo.ProcesosView1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Costas",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto14["m_sql"] = "Costas";
$proto14["m_srcTableName"] = "dbo.ProcesosView1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Intereses",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto16["m_sql"] = "Intereses";
$proto16["m_srcTableName"] = "dbo.ProcesosView1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Folios",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto18["m_sql"] = "Folios";
$proto18["m_srcTableName"] = "dbo.ProcesosView1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto20["m_sql"] = "Observaciones";
$proto20["m_srcTableName"] = "dbo.ProcesosView1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccional",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto22["m_sql"] = "Seccional";
$proto22["m_srcTableName"] = "dbo.ProcesosView1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Ciudad",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto24["m_sql"] = "Ciudad";
$proto24["m_srcTableName"] = "dbo.ProcesosView1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Abogado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto26["m_sql"] = "Abogado";
$proto26["m_srcTableName"] = "dbo.ProcesosView1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Masculino",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto28["m_sql"] = "Masculino";
$proto28["m_srcTableName"] = "dbo.ProcesosView1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto30["m_sql"] = "Despacho";
$proto30["m_srcTableName"] = "dbo.ProcesosView1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto32["m_sql"] = "Concepto";
$proto32["m_srcTableName"] = "dbo.ProcesosView1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Motivo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto34["m_sql"] = "Motivo";
$proto34["m_srcTableName"] = "dbo.ProcesosView1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto36["m_sql"] = "Estado";
$proto36["m_srcTableName"] = "dbo.ProcesosView1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Calificacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto38["m_sql"] = "Calificacion";
$proto38["m_srcTableName"] = "dbo.ProcesosView1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PiePagina",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto40["m_sql"] = "PiePagina";
$proto40["m_srcTableName"] = "dbo.ProcesosView1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CiudadDepartamento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto42["m_sql"] = "CiudadDepartamento";
$proto42["m_srcTableName"] = "dbo.ProcesosView1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Sigobius",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto44["m_sql"] = "Sigobius";
$proto44["m_srcTableName"] = "dbo.ProcesosView1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuotas",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto46["m_sql"] = "Cuotas";
$proto46["m_srcTableName"] = "dbo.ProcesosView1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Abono",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto48["m_sql"] = "Abono";
$proto48["m_srcTableName"] = "dbo.ProcesosView1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Inicio",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto50["m_sql"] = "Inicio";
$proto50["m_srcTableName"] = "dbo.ProcesosView1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrCuota",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto52["m_sql"] = "VlrCuota";
$proto52["m_srcTableName"] = "dbo.ProcesosView1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrIntereses",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto54["m_sql"] = "VlrIntereses";
$proto54["m_srcTableName"] = "dbo.ProcesosView1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Garantia",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto56["m_sql"] = "Garantia";
$proto56["m_srcTableName"] = "dbo.ProcesosView1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Recaudo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto58["m_sql"] = "Recaudo";
$proto58["m_srcTableName"] = "dbo.ProcesosView1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Sancionado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto60["m_sql"] = "Sancionado";
$proto60["m_srcTableName"] = "dbo.ProcesosView1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoDocumento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto62["m_sql"] = "SancionadoDocumento";
$proto62["m_srcTableName"] = "dbo.ProcesosView1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoTipoDocumento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto64["m_sql"] = "SancionadoTipoDocumento";
$proto64["m_srcTableName"] = "dbo.ProcesosView1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoCiudad",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto66["m_sql"] = "SancionadoCiudad";
$proto66["m_srcTableName"] = "dbo.ProcesosView1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoCiudad",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto68["m_sql"] = "DespachoCiudad";
$proto68["m_srcTableName"] = "dbo.ProcesosView1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Providencia",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto70["m_sql"] = "Providencia";
$proto70["m_srcTableName"] = "dbo.ProcesosView1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecutoria",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto72["m_sql"] = "Ejecutoria";
$proto72["m_srcTableName"] = "dbo.ProcesosView1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Radicado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto74["m_sql"] = "Radicado";
$proto74["m_srcTableName"] = "dbo.ProcesosView1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Terminacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto76["m_sql"] = "Terminacion";
$proto76["m_srcTableName"] = "dbo.ProcesosView1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Liquidacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto78["m_sql"] = "Liquidacion";
$proto78["m_srcTableName"] = "dbo.ProcesosView1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Dias",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto80["m_sql"] = "Dias";
$proto80["m_srcTableName"] = "dbo.ProcesosView1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto82["m_sql"] = "Tipo";
$proto82["m_srcTableName"] = "dbo.ProcesosView1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto84["m_sql"] = "Cantidad";
$proto84["m_srcTableName"] = "dbo.ProcesosView1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoMasculino",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto86["m_sql"] = "SancionadoMasculino";
$proto86["m_srcTableName"] = "dbo.ProcesosView1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalCorreo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto88["m_sql"] = "SeccionalCorreo";
$proto88["m_srcTableName"] = "dbo.ProcesosView1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalDireccion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto90["m_sql"] = "SeccionalDireccion";
$proto90["m_srcTableName"] = "dbo.ProcesosView1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalTelefonos",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto92["m_sql"] = "SeccionalTelefonos";
$proto92["m_srcTableName"] = "dbo.ProcesosView1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Fallecimiento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto94["m_sql"] = "Fallecimiento";
$proto94["m_srcTableName"] = "dbo.ProcesosView1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Notificacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto96["m_sql"] = "Notificacion";
$proto96["m_srcTableName"] = "dbo.ProcesosView1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalNit",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto98["m_sql"] = "SeccionalNit";
$proto98["m_srcTableName"] = "dbo.ProcesosView1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "SeccionalId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto100["m_sql"] = "SeccionalId";
$proto100["m_srcTableName"] = "dbo.ProcesosView1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto102["m_sql"] = "AbogadoId";
$proto102["m_srcTableName"] = "dbo.ProcesosView1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto104["m_sql"] = "DespachoId";
$proto104["m_srcTableName"] = "dbo.ProcesosView1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto106["m_sql"] = "SancionadoId";
$proto106["m_srcTableName"] = "dbo.ProcesosView1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto108["m_sql"] = "ConceptoId";
$proto108["m_srcTableName"] = "dbo.ProcesosView1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "NaturalezaId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto110["m_sql"] = "NaturalezaId";
$proto110["m_srcTableName"] = "dbo.ProcesosView1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto112["m_sql"] = "EstadoId";
$proto112["m_srcTableName"] = "dbo.ProcesosView1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "EtapaId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto114["m_sql"] = "EtapaId";
$proto114["m_srcTableName"] = "dbo.ProcesosView1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "CalificacionId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto116["m_sql"] = "CalificacionId";
$proto116["m_srcTableName"] = "dbo.ProcesosView1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "MotivoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto118["m_sql"] = "MotivoId";
$proto118["m_srcTableName"] = "dbo.ProcesosView1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoObservaciones",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto120["m_sql"] = "ProcesoObservaciones";
$proto120["m_srcTableName"] = "dbo.ProcesosView1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Remisorio",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto122["m_sql"] = "Remisorio";
$proto122["m_srcTableName"] = "dbo.ProcesosView1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Acuerdo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto124["m_sql"] = "Acuerdo";
$proto124["m_srcTableName"] = "dbo.ProcesosView1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Incumplimiento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto126["m_sql"] = "Incumplimiento";
$proto126["m_srcTableName"] = "dbo.ProcesosView1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Suspension",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto128["m_sql"] = "Suspension";
$proto128["m_srcTableName"] = "dbo.ProcesosView1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Traslado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto130["m_sql"] = "Traslado";
$proto130["m_srcTableName"] = "dbo.ProcesosView1";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Error",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto132["m_sql"] = "Error";
$proto132["m_srcTableName"] = "dbo.ProcesosView1";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Actuacion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto134["m_sql"] = "Actuacion";
$proto134["m_srcTableName"] = "dbo.ProcesosView1";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumentoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto136["m_sql"] = "TipoDocumentoId";
$proto136["m_srcTableName"] = "dbo.ProcesosView1";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Juridica",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto138["m_sql"] = "Juridica";
$proto138["m_srcTableName"] = "dbo.ProcesosView1";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoEmail",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto140["m_sql"] = "SancionadoEmail";
$proto140["m_srcTableName"] = "dbo.ProcesosView1";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "SancionadoCelular",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto142["m_sql"] = "SancionadoCelular";
$proto142["m_srcTableName"] = "dbo.ProcesosView1";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto144["m_sql"] = "CarteraTipoId";
$proto144["m_srcTableName"] = "dbo.ProcesosView1";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoAbogado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto146["m_sql"] = "ConceptoAbogado";
$proto146["m_srcTableName"] = "dbo.ProcesosView1";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "LiquidaIntereses",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto148["m_sql"] = "LiquidaIntereses";
$proto148["m_srcTableName"] = "dbo.ProcesosView1";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto150["m_sql"] = "Saldo";
$proto150["m_srcTableName"] = "dbo.ProcesosView1";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Prescripcion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto152["m_sql"] = "Prescripcion";
$proto152["m_srcTableName"] = "dbo.ProcesosView1";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaPrescripcion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto154["m_sql"] = "FechaPrescripcion";
$proto154["m_srcTableName"] = "dbo.ProcesosView1";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "ObligacionInicial",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto156["m_sql"] = "ObligacionInicial";
$proto156["m_srcTableName"] = "dbo.ProcesosView1";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "CostasInicial",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto158["m_sql"] = "CostasInicial";
$proto158["m_srcTableName"] = "dbo.ProcesosView1";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "InteresesInicial",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto160["m_sql"] = "InteresesInicial";
$proto160["m_srcTableName"] = "dbo.ProcesosView1";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Minjusticia_Def",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto162["m_sql"] = "Minjusticia_Def";
$proto162["m_srcTableName"] = "dbo.ProcesosView1";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "MinJusticia",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto164["m_sql"] = "MinJusticia";
$proto164["m_srcTableName"] = "dbo.ProcesosView1";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "ActuacionId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto166["m_sql"] = "ActuacionId";
$proto166["m_srcTableName"] = "dbo.ProcesosView1";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "NotificacionValidada",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto168["m_sql"] = "NotificacionValidada";
$proto168["m_srcTableName"] = "dbo.ProcesosView1";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "Validado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto170["m_sql"] = "Validado";
$proto170["m_srcTableName"] = "dbo.ProcesosView1";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto172["m_sql"] = "Documento";
$proto172["m_srcTableName"] = "dbo.ProcesosView1";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Seleccionado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto174["m_sql"] = "Seleccionado";
$proto174["m_srcTableName"] = "dbo.ProcesosView1";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "CompetenciaId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto176["m_sql"] = "CompetenciaId";
$proto176["m_srcTableName"] = "dbo.ProcesosView1";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "SeleccionadoPor",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto178["m_sql"] = "SeleccionadoPor";
$proto178["m_srcTableName"] = "dbo.ProcesosView1";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "RadicadoNumero",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto180["m_sql"] = "RadicadoNumero";
$proto180["m_srcTableName"] = "dbo.ProcesosView1";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "MinjusticiaId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto182["m_sql"] = "MinjusticiaId";
$proto182["m_srcTableName"] = "dbo.ProcesosView1";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "Contador",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto184["m_sql"] = "Contador";
$proto184["m_srcTableName"] = "dbo.ProcesosView1";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "ContadorCargo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto186["m_sql"] = "ContadorCargo";
$proto186["m_srcTableName"] = "dbo.ProcesosView1";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Director",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto188["m_sql"] = "Director";
$proto188["m_srcTableName"] = "dbo.ProcesosView1";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "DirectorCargo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto190["m_sql"] = "DirectorCargo";
$proto190["m_srcTableName"] = "dbo.ProcesosView1";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "Etapa",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto192["m_sql"] = "Etapa";
$proto192["m_srcTableName"] = "dbo.ProcesosView1";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Persuasivo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto194["m_sql"] = "Persuasivo";
$proto194["m_srcTableName"] = "dbo.ProcesosView1";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Plazo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto196["m_sql"] = "Plazo";
$proto196["m_srcTableName"] = "dbo.ProcesosView1";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "Mayor",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto198["m_sql"] = "Mayor";
$proto198["m_srcTableName"] = "dbo.ProcesosView1";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Revocatoria",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto200["m_sql"] = "Revocatoria";
$proto200["m_srcTableName"] = "dbo.ProcesosView1";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "RecaudoTerminado",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto202["m_sql"] = "RecaudoTerminado";
$proto202["m_srcTableName"] = "dbo.ProcesosView1";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Naturaleza",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto204["m_sql"] = "Naturaleza";
$proto204["m_srcTableName"] = "dbo.ProcesosView1";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "TasaTipo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto206["m_sql"] = "TasaTipo";
$proto206["m_srcTableName"] = "dbo.ProcesosView1";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto208["m_sql"] = "CarteraTipo";
$proto208["m_srcTableName"] = "dbo.ProcesosView1";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Prescrita",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto210["m_sql"] = "Prescrita";
$proto210["m_srcTableName"] = "dbo.ProcesosView1";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "TrasladoCartera",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto212["m_sql"] = "TrasladoCartera";
$proto212["m_srcTableName"] = "dbo.ProcesosView1";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoIdOrigen",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto214["m_sql"] = "CarteraTipoIdOrigen";
$proto214["m_srcTableName"] = "dbo.ProcesosView1";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "TrasladoConcepto",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto216["m_sql"] = "TrasladoConcepto";
$proto216["m_srcTableName"] = "dbo.ProcesosView1";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoIdOrigen",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto218["m_sql"] = "ConceptoIdOrigen";
$proto218["m_srcTableName"] = "dbo.ProcesosView1";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "CarteraTipoOrigen",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto220["m_sql"] = "CarteraTipoOrigen";
$proto220["m_srcTableName"] = "dbo.ProcesosView1";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "ConceptoOrigen",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto222["m_sql"] = "ConceptoOrigen";
$proto222["m_srcTableName"] = "dbo.ProcesosView1";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeoId",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto224["m_sql"] = "ChequeoId";
$proto224["m_srcTableName"] = "dbo.ProcesosView1";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrCostas",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto226["m_sql"] = "VlrCostas";
$proto226["m_srcTableName"] = "dbo.ProcesosView1";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "VlrInteresesPlazo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto228["m_sql"] = "VlrInteresesPlazo";
$proto228["m_srcTableName"] = "dbo.ProcesosView1";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "AbogadoDocumento",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto230["m_sql"] = "AbogadoDocumento";
$proto230["m_srcTableName"] = "dbo.ProcesosView1";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoCorreo",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto232["m_sql"] = "DespachoCorreo";
$proto232["m_srcTableName"] = "dbo.ProcesosView1";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoDireccion",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto234["m_sql"] = "DespachoDireccion";
$proto234["m_srcTableName"] = "dbo.ProcesosView1";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoJuez",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto236["m_sql"] = "DespachoJuez";
$proto236["m_srcTableName"] = "dbo.ProcesosView1";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "DespachoTelefonos",
	"m_strTable" => "dbo.ProcesosView1",
	"m_srcTableName" => "dbo.ProcesosView1"
));

$proto238["m_sql"] = "DespachoTelefonos";
$proto238["m_srcTableName"] = "dbo.ProcesosView1";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto240=array();
$proto240["m_link"] = "SQLL_MAIN";
			$proto241=array();
$proto241["m_strName"] = "dbo.ProcesosView1";
$proto241["m_srcTableName"] = "dbo.ProcesosView1";
$proto241["m_columns"] = array();
$proto241["m_columns"][] = "ProcesoId";
$proto241["m_columns"][] = "Fecha";
$proto241["m_columns"][] = "Numero";
$proto241["m_columns"][] = "Obligacion";
$proto241["m_columns"][] = "Costas";
$proto241["m_columns"][] = "Intereses";
$proto241["m_columns"][] = "Folios";
$proto241["m_columns"][] = "Observaciones";
$proto241["m_columns"][] = "Seccional";
$proto241["m_columns"][] = "Ciudad";
$proto241["m_columns"][] = "Abogado";
$proto241["m_columns"][] = "Masculino";
$proto241["m_columns"][] = "Despacho";
$proto241["m_columns"][] = "Concepto";
$proto241["m_columns"][] = "Motivo";
$proto241["m_columns"][] = "Estado";
$proto241["m_columns"][] = "Calificacion";
$proto241["m_columns"][] = "PiePagina";
$proto241["m_columns"][] = "CiudadDepartamento";
$proto241["m_columns"][] = "Sigobius";
$proto241["m_columns"][] = "Cuotas";
$proto241["m_columns"][] = "Abono";
$proto241["m_columns"][] = "Inicio";
$proto241["m_columns"][] = "VlrCuota";
$proto241["m_columns"][] = "VlrIntereses";
$proto241["m_columns"][] = "Garantia";
$proto241["m_columns"][] = "Recaudo";
$proto241["m_columns"][] = "Sancionado";
$proto241["m_columns"][] = "SancionadoDocumento";
$proto241["m_columns"][] = "SancionadoTipoDocumento";
$proto241["m_columns"][] = "SancionadoCiudad";
$proto241["m_columns"][] = "DespachoCiudad";
$proto241["m_columns"][] = "Providencia";
$proto241["m_columns"][] = "Ejecutoria";
$proto241["m_columns"][] = "Radicado";
$proto241["m_columns"][] = "Terminacion";
$proto241["m_columns"][] = "Liquidacion";
$proto241["m_columns"][] = "Dias";
$proto241["m_columns"][] = "Tipo";
$proto241["m_columns"][] = "Cantidad";
$proto241["m_columns"][] = "SancionadoMasculino";
$proto241["m_columns"][] = "SeccionalCorreo";
$proto241["m_columns"][] = "SeccionalDireccion";
$proto241["m_columns"][] = "SeccionalTelefonos";
$proto241["m_columns"][] = "Fallecimiento";
$proto241["m_columns"][] = "Notificacion";
$proto241["m_columns"][] = "SeccionalNit";
$proto241["m_columns"][] = "SeccionalId";
$proto241["m_columns"][] = "AbogadoId";
$proto241["m_columns"][] = "DespachoId";
$proto241["m_columns"][] = "SancionadoId";
$proto241["m_columns"][] = "ConceptoId";
$proto241["m_columns"][] = "NaturalezaId";
$proto241["m_columns"][] = "EstadoId";
$proto241["m_columns"][] = "EtapaId";
$proto241["m_columns"][] = "CalificacionId";
$proto241["m_columns"][] = "MotivoId";
$proto241["m_columns"][] = "ProcesoObservaciones";
$proto241["m_columns"][] = "Remisorio";
$proto241["m_columns"][] = "Acuerdo";
$proto241["m_columns"][] = "Incumplimiento";
$proto241["m_columns"][] = "Suspension";
$proto241["m_columns"][] = "Traslado";
$proto241["m_columns"][] = "Error";
$proto241["m_columns"][] = "Actuacion";
$proto241["m_columns"][] = "TipoDocumentoId";
$proto241["m_columns"][] = "Juridica";
$proto241["m_columns"][] = "SancionadoEmail";
$proto241["m_columns"][] = "SancionadoCelular";
$proto241["m_columns"][] = "CarteraTipoId";
$proto241["m_columns"][] = "ConceptoAbogado";
$proto241["m_columns"][] = "LiquidaIntereses";
$proto241["m_columns"][] = "Saldo";
$proto241["m_columns"][] = "Prescripcion";
$proto241["m_columns"][] = "FechaPrescripcion";
$proto241["m_columns"][] = "ObligacionInicial";
$proto241["m_columns"][] = "CostasInicial";
$proto241["m_columns"][] = "InteresesInicial";
$proto241["m_columns"][] = "Minjusticia_Def";
$proto241["m_columns"][] = "MinJusticia";
$proto241["m_columns"][] = "ActuacionId";
$proto241["m_columns"][] = "NotificacionValidada";
$proto241["m_columns"][] = "Validado";
$proto241["m_columns"][] = "Documento";
$proto241["m_columns"][] = "Seleccionado";
$proto241["m_columns"][] = "CompetenciaId";
$proto241["m_columns"][] = "SeleccionadoPor";
$proto241["m_columns"][] = "RadicadoNumero";
$proto241["m_columns"][] = "MinjusticiaId";
$proto241["m_columns"][] = "Contador";
$proto241["m_columns"][] = "ContadorCargo";
$proto241["m_columns"][] = "Director";
$proto241["m_columns"][] = "DirectorCargo";
$proto241["m_columns"][] = "Etapa";
$proto241["m_columns"][] = "Persuasivo";
$proto241["m_columns"][] = "Plazo";
$proto241["m_columns"][] = "Mayor";
$proto241["m_columns"][] = "Revocatoria";
$proto241["m_columns"][] = "RecaudoTerminado";
$proto241["m_columns"][] = "Naturaleza";
$proto241["m_columns"][] = "TasaTipo";
$proto241["m_columns"][] = "CarteraTipo";
$proto241["m_columns"][] = "Prescrita";
$proto241["m_columns"][] = "TrasladoCartera";
$proto241["m_columns"][] = "CarteraTipoIdOrigen";
$proto241["m_columns"][] = "TrasladoConcepto";
$proto241["m_columns"][] = "ConceptoIdOrigen";
$proto241["m_columns"][] = "CarteraTipoOrigen";
$proto241["m_columns"][] = "ConceptoOrigen";
$proto241["m_columns"][] = "ChequeoId";
$proto241["m_columns"][] = "VlrCostas";
$proto241["m_columns"][] = "VlrInteresesPlazo";
$proto241["m_columns"][] = "AbogadoDocumento";
$proto241["m_columns"][] = "DespachoCorreo";
$proto241["m_columns"][] = "DespachoDireccion";
$proto241["m_columns"][] = "DespachoJuez";
$proto241["m_columns"][] = "DespachoTelefonos";
$obj = new SQLTable($proto241);

$proto240["m_table"] = $obj;
$proto240["m_sql"] = "dbo.ProcesosView1";
$proto240["m_alias"] = "";
$proto240["m_srcTableName"] = "dbo.ProcesosView1";
$proto242=array();
$proto242["m_sql"] = "";
$proto242["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto242["m_column"]=$obj;
$proto242["m_contained"] = array();
$proto242["m_strCase"] = "";
$proto242["m_havingmode"] = false;
$proto242["m_inBrackets"] = false;
$proto242["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto242);

$proto240["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto240);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.ProcesosView1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procesosview1 = createSqlQuery_procesosview1();


	
		;

																																																																																																																					

$tdataprocesosview1[".sqlquery"] = $queryData_procesosview1;



$tdataprocesosview1[".hasEvents"] = false;

?>