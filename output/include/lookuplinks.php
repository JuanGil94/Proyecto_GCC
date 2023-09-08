<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["dbo.UsuGCC-uggroups"] ) ) {
			$lookupTableLinks["dbo.UsuGCC-uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UsuGCC-uggroups"]["usugcc__users.groupid"] )) {
			$lookupTableLinks["dbo.UsuGCC-uggroups"]["usugcc__users.groupid"] = array();
		}
		$lookupTableLinks["dbo.UsuGCC-uggroups"]["usugcc__users.groupid"]["edit"] = array("table" => "dbo.UsuGCC-_users", "field" => "groupid", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["abogados.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["abogados.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["abogados.SeccionalId"]["edit"] = array("table" => "dbo.Abogados", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["actuaciones.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["actuaciones.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["actuaciones.EstadoId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["actuaciones.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos"]["actuaciones.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["actuaciones.MotivoId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "MotivoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["actuaciones.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["actuaciones.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["actuaciones.EtapaId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "EtapaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Departamentos"] ) ) {
			$lookupTableLinks["dbo.Departamentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] )) {
			$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] = array();
		}
		$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"]["edit"] = array("table" => "dbo.Ciudades", "field" => "DepartamentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades"] ) ) {
			$lookupTableLinks["dbo.Ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades"]["despachos.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades"]["despachos.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades"]["despachos.CiudadId"]["edit"] = array("table" => "dbo.Despachos", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"]["edit"] = array("table" => "dbo.Naturalezas", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"]["edit"] = array("table" => "dbo.Oficios", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["operaciones.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["operaciones.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["operaciones.ConceptoId"]["edit"] = array("table" => "dbo.Operaciones", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"]["edit"] = array("table" => "dbo.Operaciones", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["parejas.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["parejas.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["parejas.AbogadoId"]["edit"] = array("table" => "dbo.Parejas", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["presupuestos.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["presupuestos.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["presupuestos.SeccionalId"]["edit"] = array("table" => "dbo.Presupuestos", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades"] ) ) {
			$lookupTableLinks["dbo.Ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades"]["seccionales.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades"]["seccionales.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades"]["seccionales.CiudadId"]["edit"] = array("table" => "dbo.Seccionales", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["chequeos.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["chequeos.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["chequeos.ConceptoId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["chequeos.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["chequeos.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["chequeos.AbogadoId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["chequeos.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["chequeos.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["chequeos.DespachoId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalIdDestino"] )) {
			$lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalIdDestino"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["chequeos.SeccionalIdDestino"]["edit"] = array("table" => "dbo.Chequeos", "field" => "SeccionalIdDestino", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TipoSancion"] ) ) {
			$lookupTableLinks["dbo.TipoSancion"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TipoSancion"]["chequeos.Tipo"] )) {
			$lookupTableLinks["dbo.TipoSancion"]["chequeos.Tipo"] = array();
		}
		$lookupTableLinks["dbo.TipoSancion"]["chequeos.Tipo"]["edit"] = array("table" => "dbo.Chequeos", "field" => "Tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["chequeos.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["chequeos.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["chequeos.CarteraTipoId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Naturalezas"] ) ) {
			$lookupTableLinks["dbo.Naturalezas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas"]["chequeos.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas"]["chequeos.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas"]["chequeos.NaturalezaId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "NaturalezaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Tramites"] ) ) {
			$lookupTableLinks["dbo.Tramites"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Tramites"]["chequeos.TramiteId"] )) {
			$lookupTableLinks["dbo.Tramites"]["chequeos.TramiteId"] = array();
		}
		$lookupTableLinks["dbo.Tramites"]["chequeos.TramiteId"]["edit"] = array("table" => "dbo.Chequeos", "field" => "TramiteId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["chequeosoficios.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["chequeosoficios.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["chequeosoficios.OficioId"]["edit"] = array("table" => "dbo.ChequeosOficios", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["chequeossancionados.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["chequeossancionados.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["chequeossancionados.TipoDocumentoId"]["edit"] = array("table" => "dbo.ChequeosSancionados", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades"] ) ) {
			$lookupTableLinks["dbo.Ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades"]["chequeossancionados.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades"]["chequeossancionados.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades"]["chequeossancionados.CiudadId"]["edit"] = array("table" => "dbo.ChequeosSancionados", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["chequeossancionados.CarcelId"] )) {
			$lookupTableLinks["dbo.Carceles"]["chequeossancionados.CarcelId"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["chequeossancionados.CarcelId"]["edit"] = array("table" => "dbo.ChequeosSancionados", "field" => "CarcelId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"] ) ) {
			$lookupTableLinks["dbo.MotivosDevoluciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"] )) {
			$lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"] = array();
		}
		$lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"]["edit"] = array("table" => "dbo.Devoluciones", "field" => "MotivoDevolucionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"]["edit"] = array("table" => "dbo.Sancionados", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["procesos.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["procesos.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["procesos.SeccionalId"]["edit"] = array("table" => "dbo.Procesos", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["procesos.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["procesos.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["procesos.AbogadoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["procesos.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["procesos.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["procesos.DespachoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["procesos.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["procesos.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["procesos.SancionadoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["procesos.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["procesos.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["procesos.ConceptoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["procesos.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["procesos.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["procesos.EstadoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["procesos.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["procesos.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["procesos.EtapaId"]["edit"] = array("table" => "dbo.Procesos", "field" => "EtapaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Calificaciones"] ) ) {
			$lookupTableLinks["dbo.Calificaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Calificaciones"]["procesos.CalificacionId"] )) {
			$lookupTableLinks["dbo.Calificaciones"]["procesos.CalificacionId"] = array();
		}
		$lookupTableLinks["dbo.Calificaciones"]["procesos.CalificacionId"]["edit"] = array("table" => "dbo.Procesos", "field" => "CalificacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["procesos.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos"]["procesos.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["procesos.MotivoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "MotivoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["procesos.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["procesos.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["procesos.CarteraTipoId"]["edit"] = array("table" => "dbo.Procesos", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Importaciones"] ) ) {
			$lookupTableLinks["dbo.Importaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Importaciones"]["procesos.ImportacionId"] )) {
			$lookupTableLinks["dbo.Importaciones"]["procesos.ImportacionId"] = array();
		}
		$lookupTableLinks["dbo.Importaciones"]["procesos.ImportacionId"]["edit"] = array("table" => "dbo.Procesos", "field" => "ImportacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["procesos.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["procesos.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["procesos.ActuacionId"]["edit"] = array("table" => "dbo.Procesos", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Naturalezas"] ) ) {
			$lookupTableLinks["dbo.Naturalezas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas"]["procesos.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas"]["procesos.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas"]["procesos.NaturalezaId"]["edit"] = array("table" => "dbo.Procesos", "field" => "NaturalezaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["solidarios.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["solidarios.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["solidarios.ProcesoId"]["edit"] = array("table" => "dbo.Solidarios", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["solidarios.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["solidarios.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["solidarios.SancionadoId"]["edit"] = array("table" => "dbo.Solidarios", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["llamadas.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["llamadas.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["llamadas.ProcesoId"]["edit"] = array("table" => "dbo.Llamadas", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["medidas.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["medidas.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["medidas.ProcesoId"]["edit"] = array("table" => "dbo.Medidas", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"]["edit"] = array("table" => "dbo.Acuerdos", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Cuentas"] ) ) {
			$lookupTableLinks["dbo.Cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"] )) {
			$lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"] = array();
		}
		$lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "CuentaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Pagos1"] ) ) {
			$lookupTableLinks["dbo.Pagos1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Pagos1"]["pagos1.PagoId"] )) {
			$lookupTableLinks["dbo.Pagos1"]["pagos1.PagoId"] = array();
		}
		$lookupTableLinks["dbo.Pagos1"]["pagos1.PagoId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "PagoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Bancos"] ) ) {
			$lookupTableLinks["dbo.Bancos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"] )) {
			$lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"] = array();
		}
		$lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"]["edit"] = array("table" => "dbo.Cuentas", "field" => "BancoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["cuentas.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["cuentas.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["cuentas.SeccionalId"]["edit"] = array("table" => "dbo.Cuentas", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["intereses.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["intereses.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["intereses.ProcesoId"]["edit"] = array("table" => "dbo.Intereses", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["reasignaciones.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["reasignaciones.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["reasignaciones.AbogadoId"]["edit"] = array("table" => "dbo.Reasignaciones", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["reasignaciones.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["reasignaciones.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["reasignaciones.ProcesoId"]["edit"] = array("table" => "dbo.Reasignaciones", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["suspensiones.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["suspensiones.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["suspensiones.OficioId"]["edit"] = array("table" => "dbo.Suspensiones", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["interrupciones.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["interrupciones.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["interrupciones.ProcesoId"]["edit"] = array("table" => "dbo.Interrupciones", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Temas"] ) ) {
			$lookupTableLinks["dbo.Temas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Temas"]["ayudas.TemaId"] )) {
			$lookupTableLinks["dbo.Temas"]["ayudas.TemaId"] = array();
		}
		$lookupTableLinks["dbo.Temas"]["ayudas.TemaId"]["edit"] = array("table" => "dbo.Ayudas", "field" => "TemaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["correspondencias.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["correspondencias.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["correspondencias.ProcesoId"]["edit"] = array("table" => "dbo.Correspondencias", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["correspondencias.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["correspondencias.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["correspondencias.OficioId"]["edit"] = array("table" => "dbo.Correspondencias", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UsuGCC-_users"] ) ) {
			$lookupTableLinks["dbo.UsuGCC-_users"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UsuGCC-_users"]["correspondencias.UserId"] )) {
			$lookupTableLinks["dbo.UsuGCC-_users"]["correspondencias.UserId"] = array();
		}
		$lookupTableLinks["dbo.UsuGCC-_users"]["correspondencias.UserId"]["edit"] = array("table" => "dbo.Correspondencias", "field" => "UserId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["correspondencias.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["correspondencias.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["correspondencias.AbogadoId"]["edit"] = array("table" => "dbo.Correspondencias", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["importaciones.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["importaciones.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["importaciones.CarteraTipoId"]["edit"] = array("table" => "dbo.Importaciones", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["importaciones.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["importaciones.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["importaciones.SeccionalId"]["edit"] = array("table" => "dbo.Importaciones", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["importaciones.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["importaciones.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["importaciones.ConceptoId"]["edit"] = array("table" => "dbo.Importaciones", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UserProfile"] ) ) {
			$lookupTableLinks["dbo.UserProfile"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UserProfile"]["indeterminados.UserId"] )) {
			$lookupTableLinks["dbo.UserProfile"]["indeterminados.UserId"] = array();
		}
		$lookupTableLinks["dbo.UserProfile"]["indeterminados.UserId"]["edit"] = array("table" => "dbo.Indeterminados", "field" => "UserId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["indeterminados.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["indeterminados.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["indeterminados.SeccionalId"]["edit"] = array("table" => "dbo.Indeterminados", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Horarios"] ) ) {
			$lookupTableLinks["dbo.Horarios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Horarios"]["userprofile.HorarioId"] )) {
			$lookupTableLinks["dbo.Horarios"]["userprofile.HorarioId"] = array();
		}
		$lookupTableLinks["dbo.Horarios"]["userprofile.HorarioId"]["edit"] = array("table" => "dbo.UserProfile", "field" => "HorarioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["userprofile.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["userprofile.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["userprofile.SeccionalId"]["edit"] = array("table" => "dbo.UserProfile", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["userprofile.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["userprofile.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["userprofile.AbogadoId"]["edit"] = array("table" => "dbo.UserProfile", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UserProfile"] ) ) {
			$lookupTableLinks["dbo.UserProfile"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UserProfile"]["auditorias.UserId"] )) {
			$lookupTableLinks["dbo.UserProfile"]["auditorias.UserId"] = array();
		}
		$lookupTableLinks["dbo.UserProfile"]["auditorias.UserId"]["edit"] = array("table" => "dbo.Auditorias", "field" => "UserId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["minjusticia.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["minjusticia.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["minjusticia.AbogadoId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["minjusticia.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["minjusticia.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["minjusticia.DespachoId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["minjusticia.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia.TipoDocumentoId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["minjusticia.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["minjusticia.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["minjusticia.SeccionalId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["minjusticia.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["minjusticia.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["minjusticia.CarteraTipoId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Causales"] ) ) {
			$lookupTableLinks["dbo.Causales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Causales"]["minjusticia.CausalId"] )) {
			$lookupTableLinks["dbo.Causales"]["minjusticia.CausalId"] = array();
		}
		$lookupTableLinks["dbo.Causales"]["minjusticia.CausalId"]["edit"] = array("table" => "dbo.Minjusticia", "field" => "CausalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Parejas"] ) ) {
			$lookupTableLinks["dbo.Parejas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Parejas"]["minjusticia2.AbogadoId"] )) {
			$lookupTableLinks["dbo.Parejas"]["minjusticia2.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Parejas"]["minjusticia2.AbogadoId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["minjusticia2.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["minjusticia2.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["minjusticia2.DespachoId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["minjusticia2.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia2.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia2.TipoDocumentoId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["minjusticia2.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["minjusticia2.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["minjusticia2.SeccionalId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["minjusticia2.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["minjusticia2.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["minjusticia2.CarteraTipoId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Causales"] ) ) {
			$lookupTableLinks["dbo.Causales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Causales"]["minjusticia2.CausalId"] )) {
			$lookupTableLinks["dbo.Causales"]["minjusticia2.CausalId"] = array();
		}
		$lookupTableLinks["dbo.Causales"]["minjusticia2.CausalId"]["edit"] = array("table" => "dbo.Minjusticia2", "field" => "CausalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Parejas"] ) ) {
			$lookupTableLinks["dbo.Parejas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Parejas"]["minjusticia3.AbogadoId"] )) {
			$lookupTableLinks["dbo.Parejas"]["minjusticia3.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Parejas"]["minjusticia3.AbogadoId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["minjusticia3.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["minjusticia3.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["minjusticia3.DespachoId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["minjusticia3.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia3.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["minjusticia3.TipoDocumentoId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["minjusticia3.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["minjusticia3.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["minjusticia3.SeccionalId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["minjusticia3.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["minjusticia3.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["minjusticia3.CarteraTipoId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Causales"] ) ) {
			$lookupTableLinks["dbo.Causales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Causales"]["minjusticia3.CausalId"] )) {
			$lookupTableLinks["dbo.Causales"]["minjusticia3.CausalId"] = array();
		}
		$lookupTableLinks["dbo.Causales"]["minjusticia3.CausalId"]["edit"] = array("table" => "dbo.Minjusticia3", "field" => "CausalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["direcciones.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["direcciones.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["direcciones.SancionadoId"]["edit"] = array("table" => "dbo.Direcciones", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["direcciones.CarcelId"] )) {
			$lookupTableLinks["dbo.Carceles"]["direcciones.CarcelId"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["direcciones.CarcelId"]["edit"] = array("table" => "dbo.Direcciones", "field" => "CarcelId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades"] ) ) {
			$lookupTableLinks["dbo.Ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades"]["direcciones.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades"]["direcciones.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades"]["direcciones.CiudadId"]["edit"] = array("table" => "dbo.Direcciones", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["propiedades.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["propiedades.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["propiedades.SancionadoId"]["edit"] = array("table" => "dbo.Propiedades", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["propiedades1.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["propiedades1.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["propiedades1.SancionadoId"]["edit"] = array("table" => "dbo.Propiedades1", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["propiedades3.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["propiedades3.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["propiedades3.SancionadoId"]["edit"] = array("table" => "dbo.Propiedades3", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["oficios_sigobius.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["oficios_sigobius.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["oficios_sigobius.ActuacionId"]["edit"] = array("table" => "dbo.Oficios Sigobius", "field" => "ActuacionId", "page" => "edit");
}

?>