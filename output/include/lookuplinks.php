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
		if( !isset( $lookupTableLinks["dbo.Estados1"] ) ) {
			$lookupTableLinks["dbo.Estados1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados1"] ) ) {
			$lookupTableLinks["dbo.Estados1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"]["add"] = array("table" => "dbo.Actuaciones", "field" => "EstadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados1"] ) ) {
			$lookupTableLinks["dbo.Estados1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados1"]["actuaciones.EstadoId"]["search"] = array("table" => "dbo.Actuaciones", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos1"] ) ) {
			$lookupTableLinks["dbo.Motivos1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "MotivoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos1"] ) ) {
			$lookupTableLinks["dbo.Motivos1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"]["add"] = array("table" => "dbo.Actuaciones", "field" => "MotivoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Motivos1"] ) ) {
			$lookupTableLinks["dbo.Motivos1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos1"]["actuaciones.MotivoId"]["search"] = array("table" => "dbo.Actuaciones", "field" => "MotivoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas1"] ) ) {
			$lookupTableLinks["dbo.Etapas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"]["edit"] = array("table" => "dbo.Actuaciones", "field" => "EtapaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas1"] ) ) {
			$lookupTableLinks["dbo.Etapas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"]["add"] = array("table" => "dbo.Actuaciones", "field" => "EtapaId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Etapas1"] ) ) {
			$lookupTableLinks["dbo.Etapas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas1"]["actuaciones.EtapaId"]["search"] = array("table" => "dbo.Actuaciones", "field" => "EtapaId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Departamentos"] ) ) {
			$lookupTableLinks["dbo.Departamentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] )) {
			$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] = array();
		}
		$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"]["edit"] = array("table" => "dbo.Ciudades", "field" => "DepartamentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Departamentos"] ) ) {
			$lookupTableLinks["dbo.Departamentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] )) {
			$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] = array();
		}
		$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"]["add"] = array("table" => "dbo.Ciudades", "field" => "DepartamentoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Departamentos"] ) ) {
			$lookupTableLinks["dbo.Departamentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] )) {
			$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"] = array();
		}
		$lookupTableLinks["dbo.Departamentos"]["ciudades.DepartamentoId"]["search"] = array("table" => "dbo.Ciudades", "field" => "DepartamentoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"]["edit"] = array("table" => "dbo.Despachos", "field" => "Codigo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"]["add"] = array("table" => "dbo.Despachos", "field" => "Codigo", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Codigo"]["search"] = array("table" => "dbo.Despachos", "field" => "Codigo", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"]["edit"] = array("table" => "dbo.Despachos", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"]["add"] = array("table" => "dbo.Despachos", "field" => "CiudadId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["despachos.CiudadId"]["search"] = array("table" => "dbo.Despachos", "field" => "CiudadId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Juez"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Juez"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Juez"]["edit"] = array("table" => "dbo.Despachos", "field" => "Juez", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Juez"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Juez"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Juez"]["add"] = array("table" => "dbo.Despachos", "field" => "Juez", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["despachos.Juez"] )) {
			$lookupTableLinks["dbo.Despachos"]["despachos.Juez"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["despachos.Juez"]["search"] = array("table" => "dbo.Despachos", "field" => "Juez", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["naturalezas.ConceptoId"]["edit"] = array("table" => "dbo.Naturalezas", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.tipoTasas"] ) ) {
			$lookupTableLinks["dbo.tipoTasas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.tipoTasas"]["naturalezas.TasaTipo"] )) {
			$lookupTableLinks["dbo.tipoTasas"]["naturalezas.TasaTipo"] = array();
		}
		$lookupTableLinks["dbo.tipoTasas"]["naturalezas.TasaTipo"]["edit"] = array("table" => "dbo.Naturalezas", "field" => "TasaTipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Niveles2"] ) ) {
			$lookupTableLinks["dbo.Niveles2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Niveles2"]["niveles.Nivel"] )) {
			$lookupTableLinks["dbo.Niveles2"]["niveles.Nivel"] = array();
		}
		$lookupTableLinks["dbo.Niveles2"]["niveles.Nivel"]["edit"] = array("table" => "dbo.Niveles", "field" => "Nivel", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Niveles1"] ) ) {
			$lookupTableLinks["dbo.Niveles1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Niveles1"]["niveles.Clasificacion"] )) {
			$lookupTableLinks["dbo.Niveles1"]["niveles.Clasificacion"] = array();
		}
		$lookupTableLinks["dbo.Niveles1"]["niveles.Clasificacion"]["edit"] = array("table" => "dbo.Niveles", "field" => "Clasificacion", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["oficios.ActuacionId"]["edit"] = array("table" => "dbo.Oficios", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos2"] ) ) {
			$lookupTableLinks["dbo.Conceptos2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos2"]["operaciones.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos2"]["operaciones.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos2"]["operaciones.ConceptoId"]["edit"] = array("table" => "dbo.Operaciones", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["operaciones.CarteraTipoId"]["edit"] = array("table" => "dbo.Operaciones", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.OperacionTipo"] ) ) {
			$lookupTableLinks["dbo.OperacionTipo"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.OperacionTipo"]["operaciones.Tipo"] )) {
			$lookupTableLinks["dbo.OperacionTipo"]["operaciones.Tipo"] = array();
		}
		$lookupTableLinks["dbo.OperacionTipo"]["operaciones.Tipo"]["edit"] = array("table" => "dbo.Operaciones", "field" => "Tipo", "page" => "edit");
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
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["reportes.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["reportes.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["reportes.OficioId"]["edit"] = array("table" => "dbo.Reportes", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["seccionales.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["seccionales.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["seccionales.CiudadId"]["edit"] = array("table" => "dbo.Seccionales", "field" => "CiudadId", "page" => "edit");
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
		if( !isset( $lookupTableLinks["dbo.tipoCobro"] ) ) {
			$lookupTableLinks["dbo.tipoCobro"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.tipoCobro"]["chequeos.Tipo"] )) {
			$lookupTableLinks["dbo.tipoCobro"]["chequeos.Tipo"] = array();
		}
		$lookupTableLinks["dbo.tipoCobro"]["chequeos.Tipo"]["edit"] = array("table" => "dbo.Chequeos", "field" => "Tipo", "page" => "edit");
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
		if( !isset( $lookupTableLinks["dbo.Genero"] ) ) {
			$lookupTableLinks["dbo.Genero"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Genero"]["chequeossancionados.Masculino"] )) {
			$lookupTableLinks["dbo.Genero"]["chequeossancionados.Masculino"] = array();
		}
		$lookupTableLinks["dbo.Genero"]["chequeossancionados.Masculino"]["edit"] = array("table" => "dbo.ChequeosSancionados", "field" => "Masculino", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"] ) ) {
			$lookupTableLinks["dbo.MotivosDevoluciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"] )) {
			$lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"] = array();
		}
		$lookupTableLinks["dbo.MotivosDevoluciones"]["devoluciones.MotivoDevolucionId"]["edit"] = array("table" => "dbo.Devoluciones", "field" => "MotivoDevolucionId", "page" => "edit");
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
		if( !isset( $lookupTableLinks["dbo.PropiedadesMedidas"] ) ) {
			$lookupTableLinks["dbo.PropiedadesMedidas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.PropiedadesMedidas"]["medidas.PropiedadId"] )) {
			$lookupTableLinks["dbo.PropiedadesMedidas"]["medidas.PropiedadId"] = array();
		}
		$lookupTableLinks["dbo.PropiedadesMedidas"]["medidas.PropiedadId"]["edit"] = array("table" => "dbo.Medidas", "field" => "PropiedadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["acuerdos.ProcesoId"]["edit"] = array("table" => "dbo.Acuerdos", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Cuentas"] ) ) {
			$lookupTableLinks["dbo.Cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"] )) {
			$lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"] = array();
		}
		$lookupTableLinks["dbo.Cuentas"]["pagos1.CuentaId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "CuentaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.tipoRecaudo"] ) ) {
			$lookupTableLinks["dbo.tipoRecaudo"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.tipoRecaudo"]["pagos1.TipoRecaudoId"] )) {
			$lookupTableLinks["dbo.tipoRecaudo"]["pagos1.TipoRecaudoId"] = array();
		}
		$lookupTableLinks["dbo.tipoRecaudo"]["pagos1.TipoRecaudoId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "TipoRecaudoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["pagos1.ProcesoId"]["edit"] = array("table" => "dbo.Pagos1", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Bancos"] ) ) {
			$lookupTableLinks["dbo.Bancos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"] )) {
			$lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"] = array();
		}
		$lookupTableLinks["dbo.Bancos"]["cuentas.BancoId"]["edit"] = array("table" => "dbo.Cuentas", "field" => "BancoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales1"] ) ) {
			$lookupTableLinks["dbo.Seccionales1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"]["edit"] = array("table" => "dbo.Cuentas", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales1"] ) ) {
			$lookupTableLinks["dbo.Seccionales1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"]["add"] = array("table" => "dbo.Cuentas", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales1"] ) ) {
			$lookupTableLinks["dbo.Seccionales1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales1"]["cuentas.SeccionalId"]["search"] = array("table" => "dbo.Cuentas", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"]["add"] = array("table" => "dbo.Cuentas", "field" => "ConceptoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["cuentas.ConceptoId"]["search"] = array("table" => "dbo.Cuentas", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"] ) ) {
			$lookupTableLinks["dbo.Naturalezas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"]["edit"] = array("table" => "dbo.Cuentas", "field" => "NaturalezaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"] ) ) {
			$lookupTableLinks["dbo.Naturalezas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"]["add"] = array("table" => "dbo.Cuentas", "field" => "NaturalezaId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"] ) ) {
			$lookupTableLinks["dbo.Naturalezas1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas1"]["cuentas.NaturalezaId"]["search"] = array("table" => "dbo.Cuentas", "field" => "NaturalezaId", "page" => "search");
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
		if( !isset( $lookupTableLinks["dbo.Ciudades3"] ) ) {
			$lookupTableLinks["dbo.Ciudades3"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades3"]["direcciones.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades3"]["direcciones.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades3"]["direcciones.CiudadId"]["edit"] = array("table" => "dbo.Direcciones", "field" => "CiudadId", "page" => "edit");
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
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["oficios_sigobius.OficioIdRequisito"] )) {
			$lookupTableLinks["dbo.Oficios"]["oficios_sigobius.OficioIdRequisito"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["oficios_sigobius.OficioIdRequisito"]["edit"] = array("table" => "dbo.Oficios Sigobius", "field" => "OficioIdRequisito", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"]["edit"] = array("table" => "dbo.Carceles", "field" => "CarcelId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"]["add"] = array("table" => "dbo.Carceles", "field" => "CarcelId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.CarcelId"]["search"] = array("table" => "dbo.Carceles", "field" => "CarcelId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"]["edit"] = array("table" => "dbo.Carceles", "field" => "Carcel", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"]["add"] = array("table" => "dbo.Carceles", "field" => "Carcel", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] )) {
			$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["carceles.Carcel"]["search"] = array("table" => "dbo.Carceles", "field" => "Carcel", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"]["edit"] = array("table" => "dbo.Carceles", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"]["add"] = array("table" => "dbo.Carceles", "field" => "CiudadId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["carceles.CiudadId"]["search"] = array("table" => "dbo.Carceles", "field" => "CiudadId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.AlertasTipos"] ) ) {
			$lookupTableLinks["dbo.AlertasTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.AlertasTipos"]["alertas.AlertaTipoId"] )) {
			$lookupTableLinks["dbo.AlertasTipos"]["alertas.AlertaTipoId"] = array();
		}
		$lookupTableLinks["dbo.AlertasTipos"]["alertas.AlertaTipoId"]["edit"] = array("table" => "dbo.Alertas", "field" => "AlertaTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["alertas.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["alertas.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["alertas.ActuacionId"]["edit"] = array("table" => "dbo.Alertas", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["oficios1.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["oficios1.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["oficios1.ActuacionId"]["edit"] = array("table" => "dbo.Oficios1", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["oficios1.OficioIdRequisito"] )) {
			$lookupTableLinks["dbo.Oficios"]["oficios1.OficioIdRequisito"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["oficios1.OficioIdRequisito"]["edit"] = array("table" => "dbo.Oficios1", "field" => "OficioIdRequisito", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.tipoCobro"] ) ) {
			$lookupTableLinks["dbo.tipoCobro"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.tipoCobro"]["autorizaciones.Tipo"] )) {
			$lookupTableLinks["dbo.tipoCobro"]["autorizaciones.Tipo"] = array();
		}
		$lookupTableLinks["dbo.tipoCobro"]["autorizaciones.Tipo"]["edit"] = array("table" => "dbo.Autorizaciones", "field" => "Tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["liquidaciones.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["liquidaciones.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["liquidaciones.ProcesoId"]["edit"] = array("table" => "dbo.Liquidaciones", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["sancionados.TipoDocumentoId"]["edit"] = array("table" => "dbo.Sancionados", "field" => "TipoDocumentoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Genero"] ) ) {
			$lookupTableLinks["dbo.Genero"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Genero"]["sancionados.Masculino"] )) {
			$lookupTableLinks["dbo.Genero"]["sancionados.Masculino"] = array();
		}
		$lookupTableLinks["dbo.Genero"]["sancionados.Masculino"]["edit"] = array("table" => "dbo.Sancionados", "field" => "Masculino", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Carceles"] ) ) {
			$lookupTableLinks["dbo.Carceles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Carceles"]["sancionados.Carcel"] )) {
			$lookupTableLinks["dbo.Carceles"]["sancionados.Carcel"] = array();
		}
		$lookupTableLinks["dbo.Carceles"]["sancionados.Carcel"]["edit"] = array("table" => "dbo.Sancionados", "field" => "Carcel", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["seguimiento_y_control_de_acuerdos.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["seguimiento_y_control_de_acuerdos.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["seguimiento_y_control_de_acuerdos.ProcesoId"]["search"] = array("table" => "dbo.Seguimiento y control de Acuerdos", "field" => "ProcesoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["seguimiento_y_control_de_acuerdos.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["seguimiento_y_control_de_acuerdos.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["seguimiento_y_control_de_acuerdos.EstadoId"]["search"] = array("table" => "dbo.Seguimiento y control de Acuerdos", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["prescritos_report.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["prescritos_report.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["prescritos_report.CarteraTipoId"]["search"] = array("table" => "dbo.Prescritos Report", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["reportemandamientos.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["reportemandamientos.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["reportemandamientos.CarteraTipoId"]["search"] = array("table" => "dbo.ReporteMandamientos", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reportemandamientos.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reportemandamientos.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reportemandamientos.ConceptoId"]["search"] = array("table" => "dbo.ReporteMandamientos", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["listachequeosreporte.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["listachequeosreporte.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["listachequeosreporte.SeccionalId"]["search"] = array("table" => "dbo.ListaChequeosReporte", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId"]["search"] = array("table" => "dbo.ListaChequeosReporte", "field" => "AbogadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Despachos1"] ) ) {
			$lookupTableLinks["dbo.Despachos1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos1"]["listachequeosreporte.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos1"]["listachequeosreporte.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos1"]["listachequeosreporte.DespachoId"]["search"] = array("table" => "dbo.ListaChequeosReporte", "field" => "DespachoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId1"] )) {
			$lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId1"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["listachequeosreporte.AbogadoId1"]["search"] = array("table" => "dbo.ListaChequeosReporte", "field" => "AbogadoId1", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Tramites"] ) ) {
			$lookupTableLinks["dbo.Tramites"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Tramites"]["listachequeosreporte.TramiteId"] )) {
			$lookupTableLinks["dbo.Tramites"]["listachequeosreporte.TramiteId"] = array();
		}
		$lookupTableLinks["dbo.Tramites"]["listachequeosreporte.TramiteId"]["search"] = array("table" => "dbo.ListaChequeosReporte", "field" => "TramiteId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["reporteclasificacioncartera.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["reporteclasificacioncartera.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["reporteclasificacioncartera.CarteraTipoId"]["search"] = array("table" => "dbo.ReporteClasificacionCartera", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["reporteclasificacioncartera.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["reporteclasificacioncartera.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["reporteclasificacioncartera.SeccionalId"]["search"] = array("table" => "dbo.ReporteClasificacionCartera", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reporteclasificacioncartera.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reporteclasificacioncartera.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reporteclasificacioncartera.ConceptoId"]["search"] = array("table" => "dbo.ReporteClasificacionCartera", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Naturalezas"] ) ) {
			$lookupTableLinks["dbo.Naturalezas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas"]["reporteclasificacioncartera.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas"]["reporteclasificacioncartera.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas"]["reporteclasificacioncartera.NaturalezaId"]["search"] = array("table" => "dbo.ReporteClasificacionCartera", "field" => "NaturalezaId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["procesossinnotificareport.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["procesossinnotificareport.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["procesossinnotificareport.CarteraTipoId"]["search"] = array("table" => "dbo.ProcesosSinNotificaReport", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["procesossinnotificareport.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["procesossinnotificareport.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["procesossinnotificareport.SeccionalId"]["search"] = array("table" => "dbo.ProcesosSinNotificaReport", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["procesossinnotificareport.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["procesossinnotificareport.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["procesossinnotificareport.ConceptoId"]["search"] = array("table" => "dbo.ProcesosSinNotificaReport", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["procesossinnotificareport.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["procesossinnotificareport.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["procesossinnotificareport.EstadoId"]["search"] = array("table" => "dbo.ProcesosSinNotificaReport", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["reportecorporaci_nespecialidad.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["reportecorporaci_nespecialidad.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["reportecorporaci_nespecialidad.CarteraTipoId"]["search"] = array("table" => "dbo.ReporteCorporaciónEspecialidad", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["reportecorporaci_nespecialidad.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["reportecorporaci_nespecialidad.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["reportecorporaci_nespecialidad.SeccionalId"]["search"] = array("table" => "dbo.ReporteCorporaciónEspecialidad", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CorporacionesView"] ) ) {
			$lookupTableLinks["dbo.CorporacionesView"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CorporacionesView"]["reportecorporaci_nespecialidad.Codigo"] )) {
			$lookupTableLinks["dbo.CorporacionesView"]["reportecorporaci_nespecialidad.Codigo"] = array();
		}
		$lookupTableLinks["dbo.CorporacionesView"]["reportecorporaci_nespecialidad.Codigo"]["search"] = array("table" => "dbo.ReporteCorporaciónEspecialidad", "field" => "Codigo", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reportecorporaci_nespecialidad.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reportecorporaci_nespecialidad.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reportecorporaci_nespecialidad.ConceptoId"]["search"] = array("table" => "dbo.ReporteCorporaciónEspecialidad", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["fechas.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["fechas.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["fechas.ProcesoId"]["edit"] = array("table" => "dbo.Fechas", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["fechas.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["fechas.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["fechas.ActuacionId"]["edit"] = array("table" => "dbo.Fechas", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["procesosreasignar.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["procesosreasignar.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["procesosreasignar.SeccionalId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["procesosreasignar.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["procesosreasignar.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["procesosreasignar.AbogadoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["procesosreasignar.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["procesosreasignar.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["procesosreasignar.DespachoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["procesosreasignar.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["procesosreasignar.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["procesosreasignar.SancionadoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["procesosreasignar.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["procesosreasignar.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["procesosreasignar.ConceptoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["procesosreasignar.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["procesosreasignar.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["procesosreasignar.EstadoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["procesosreasignar.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["procesosreasignar.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["procesosreasignar.EtapaId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "EtapaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Calificaciones"] ) ) {
			$lookupTableLinks["dbo.Calificaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Calificaciones"]["procesosreasignar.CalificacionId"] )) {
			$lookupTableLinks["dbo.Calificaciones"]["procesosreasignar.CalificacionId"] = array();
		}
		$lookupTableLinks["dbo.Calificaciones"]["procesosreasignar.CalificacionId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "CalificacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["procesosreasignar.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos"]["procesosreasignar.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["procesosreasignar.MotivoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "MotivoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["procesosreasignar.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["procesosreasignar.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["procesosreasignar.CarteraTipoId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Importaciones"] ) ) {
			$lookupTableLinks["dbo.Importaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Importaciones"]["procesosreasignar.ImportacionId"] )) {
			$lookupTableLinks["dbo.Importaciones"]["procesosreasignar.ImportacionId"] = array();
		}
		$lookupTableLinks["dbo.Importaciones"]["procesosreasignar.ImportacionId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "ImportacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["procesosreasignar.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["procesosreasignar.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["procesosreasignar.ActuacionId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Naturalezas"] ) ) {
			$lookupTableLinks["dbo.Naturalezas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas"]["procesosreasignar.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas"]["procesosreasignar.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas"]["procesosreasignar.NaturalezaId"]["edit"] = array("table" => "dbo.ProcesosReasignar", "field" => "NaturalezaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades1"] ) ) {
			$lookupTableLinks["dbo.Ciudades1"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades1"]["dbo_despachos5.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades1"]["dbo_despachos5.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades1"]["dbo_despachos5.CiudadId"]["edit"] = array("table" => "dbo.Despachos5", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Seccional", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Seccional", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Seccional"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Seccional", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Concepto", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Concepto"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Concepto", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_incumplimiento_acuerdo_de_pago_semestral1.Sancionado"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"]["edit"] = array("table" => "BDME Retiros", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"]["add"] = array("table" => "BDME Retiros", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_retiros1.Sancionado"]["search"] = array("table" => "BDME Retiros", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"]["edit"] = array("table" => "BDME Reporte Semestral", "field" => "Seccional", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"]["add"] = array("table" => "BDME Reporte Semestral", "field" => "Seccional", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral.Seccional"]["search"] = array("table" => "BDME Reporte Semestral", "field" => "Seccional", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"]["edit"] = array("table" => "BDME Reporte Semestral", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"]["add"] = array("table" => "BDME Reporte Semestral", "field" => "Concepto", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral.Concepto"]["search"] = array("table" => "BDME Reporte Semestral", "field" => "Concepto", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"]["edit"] = array("table" => "BDME Reporte Semestral", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"]["add"] = array("table" => "BDME Reporte Semestral", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_reporte_semestral.Sancionado"]["search"] = array("table" => "BDME Reporte Semestral", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"]["edit"] = array("table" => "BDME Excluidos", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"]["add"] = array("table" => "BDME Excluidos", "field" => "Concepto", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos1.Concepto"]["search"] = array("table" => "BDME Excluidos", "field" => "Concepto", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bdme_excluidos1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bdme_excluidos1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bdme_excluidos1.Sancionado"]["edit"] = array("table" => "BDME Excluidos", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"]["edit"] = array("table" => "BDME Excluidos", "field" => "Estado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"]["add"] = array("table" => "BDME Excluidos", "field" => "Estado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos1.Estado"]["search"] = array("table" => "BDME Excluidos", "field" => "Estado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"]["edit"] = array("table" => "Base de Datos - Historico", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"]["add"] = array("table" => "Base de Datos - Historico", "field" => "ConceptoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["base_de_datos___historico.ConceptoId"]["search"] = array("table" => "Base de Datos - Historico", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"]["edit"] = array("table" => "Base de Datos - Historico", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"]["add"] = array("table" => "Base de Datos - Historico", "field" => "EstadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["base_de_datos___historico.EstadoId"]["search"] = array("table" => "Base de Datos - Historico", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"]["edit"] = array("table" => "Base de Datos - Historico", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"]["add"] = array("table" => "Base de Datos - Historico", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["base_de_datos___historico.Sancionado"]["search"] = array("table" => "Base de Datos - Historico", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"]["edit"] = array("table" => "Base de Datos - Historico", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"]["add"] = array("table" => "Base de Datos - Historico", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["base_de_datos___historico.SeccionalId"]["search"] = array("table" => "Base de Datos - Historico", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"]["edit"] = array("table" => "Base de Datos - Historico", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"]["add"] = array("table" => "Base de Datos - Historico", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["base_de_datos___historico.CarteraTipoId"]["search"] = array("table" => "Base de Datos - Historico", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"]["edit"] = array("table" => "Deterioro de Cartera por Proceso", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"]["add"] = array("table" => "Deterioro de Cartera por Proceso", "field" => "Concepto", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["deterioro_de_cartera_por_proceso.Concepto"]["search"] = array("table" => "Deterioro de Cartera por Proceso", "field" => "Concepto", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"]["edit"] = array("table" => "Listado Medidas Cautelares", "field" => "CarteraTipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"]["add"] = array("table" => "Listado Medidas Cautelares", "field" => "CarteraTipo", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["listado_medidas_cautelares.CarteraTipo"]["search"] = array("table" => "Listado Medidas Cautelares", "field" => "CarteraTipo", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["listado_medidas_cautelares.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["listado_medidas_cautelares.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["listado_medidas_cautelares.Concepto"]["edit"] = array("table" => "Listado Medidas Cautelares", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"]["edit"] = array("table" => "Listado Medidas Cautelares", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"]["add"] = array("table" => "Listado Medidas Cautelares", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["listado_medidas_cautelares.Sancionado"]["search"] = array("table" => "Listado Medidas Cautelares", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Propiedades2"] ) ) {
			$lookupTableLinks["dbo.Propiedades2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] )) {
			$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] = array();
		}
		$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"]["edit"] = array("table" => "Listado Medidas Cautelares", "field" => "TipoPropiedad", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Propiedades2"] ) ) {
			$lookupTableLinks["dbo.Propiedades2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] )) {
			$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] = array();
		}
		$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"]["add"] = array("table" => "Listado Medidas Cautelares", "field" => "TipoPropiedad", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Propiedades2"] ) ) {
			$lookupTableLinks["dbo.Propiedades2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] )) {
			$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"] = array();
		}
		$lookupTableLinks["dbo.Propiedades2"]["listado_medidas_cautelares.TipoPropiedad"]["search"] = array("table" => "Listado Medidas Cautelares", "field" => "TipoPropiedad", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_actualizaci_n_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_actualizaci_n_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_actualizaci_n_datachild.SeccionalId"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_actualizaci_n_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_actualizaci_n_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_actualizaci_n_datachild.AbogadoId"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_actualizaci_n_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_actualizaci_n_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_actualizaci_n_datachild.C3"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_actualizaci_n_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_actualizaci_n_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_actualizaci_n_datachild.C4"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_actualizaci_n_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_actualizaci_n_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_actualizaci_n_datachild.C5"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_actualizaci_n_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_actualizaci_n_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_actualizaci_n_datachild.C7"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_actualizaci_n_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_actualizaci_n_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_actualizaci_n_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Actualización DataChild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.AbogadoId"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C3"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C4"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C5"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.C7"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_cancelaci_n_acuerdo_de_pago_datachild.SeccionalId"]["edit"] = array("table" => "BDME Cancelación Acuerdo de Pago DataChild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_excluidos_datachild.SeccionalId"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "AbogadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_excluidos_datachild.AbogadoId"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "AbogadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "C3", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_excluidos_datachild.C3"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "C3", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "C4", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_excluidos_datachild.C4"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "C4", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "C5", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_excluidos_datachild.C5"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "C5", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_excluidos_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_excluidos_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_excluidos_datachild.C7"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Excluidos DataChild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"]["add"] = array("table" => "BDME Excluidos DataChild", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_excluidos_datachild.CarteraTipoId"]["search"] = array("table" => "BDME Excluidos DataChild", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.SeccionalId"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.AbogadoId"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C3", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C3"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C3", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C4", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C4"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C4", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C5", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C5"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C5", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C7", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.C7"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "C7", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"]["add"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_incumplimiento_acuerdo_de_pago_semestral_datachild.CarteraTipoId"]["search"] = array("table" => "BDME Incumplimiento Acuerdo de Pago Semestral DataChild", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_reporte_semestral_datachild.SeccionalId"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "AbogadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_reporte_semestral_datachild.AbogadoId"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "AbogadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C3", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_reporte_semestral_datachild.C3"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C3", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C4", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_reporte_semestral_datachild.C4"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C4", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C5", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_reporte_semestral_datachild.C5"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C5", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C7", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_reporte_semestral_datachild.C7"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "C7", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"]["add"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_reporte_semestral_datachild.CarteraTipoId"]["search"] = array("table" => "BDME Reporte Semestral Datachild", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"]["add"] = array("table" => "BDME Retiros DataChild", "field" => "SeccionalId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["bdme_retiros_datachild.SeccionalId"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "SeccionalId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"]["add"] = array("table" => "BDME Retiros DataChild", "field" => "AbogadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.AbogadoId"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "AbogadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "C3", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"]["add"] = array("table" => "BDME Retiros DataChild", "field" => "C3", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] )) {
			$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["bdme_retiros_datachild.C3"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "C3", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "C4", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"]["add"] = array("table" => "BDME Retiros DataChild", "field" => "C4", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] )) {
			$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["bdme_retiros_datachild.C4"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "C4", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "C5", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"] )) {
			$lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["bdme_retiros_datachild.C5"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "C5", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["bdme_retiros_datachild.C7"] )) {
			$lookupTableLinks["dbo.Motivos"]["bdme_retiros_datachild.C7"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["bdme_retiros_datachild.C7"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "C7", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"]["add"] = array("table" => "BDME Retiros DataChild", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["bdme_retiros_datachild.CarteraTipoId"]["search"] = array("table" => "BDME Retiros DataChild", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.CORREO"] )) {
			$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.CORREO"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["bdme_retiros_datachild.CORREO"]["edit"] = array("table" => "BDME Retiros DataChild", "field" => "CORREO", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Busquedas"] ) ) {
			$lookupTableLinks["dbo.Busquedas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Busquedas"]["busquedaspropiedades.BusquedaId"] )) {
			$lookupTableLinks["dbo.Busquedas"]["busquedaspropiedades.BusquedaId"] = array();
		}
		$lookupTableLinks["dbo.Busquedas"]["busquedaspropiedades.BusquedaId"]["edit"] = array("table" => "dbo.BusquedasPropiedades", "field" => "BusquedaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Propiedades"] ) ) {
			$lookupTableLinks["dbo.Propiedades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Propiedades"]["busquedaspropiedades.PropiedadId"] )) {
			$lookupTableLinks["dbo.Propiedades"]["busquedaspropiedades.PropiedadId"] = array();
		}
		$lookupTableLinks["dbo.Propiedades"]["busquedaspropiedades.PropiedadId"]["edit"] = array("table" => "dbo.BusquedasPropiedades", "field" => "PropiedadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"]["edit"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"]["add"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "ConceptoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["obligaciones_de_dificil_recaudo.ConceptoId"]["search"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"]["edit"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"]["add"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["obligaciones_de_dificil_recaudo.Sancionado"]["search"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"]["edit"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"]["add"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "EstadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["obligaciones_de_dificil_recaudo.EstadoId"]["search"] = array("table" => "Obligaciones de Dificil Recaudo", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"]["edit"] = array("table" => "Privados de la Libertad", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"]["add"] = array("table" => "Privados de la Libertad", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["privados_de_la_libertad.Sancionado"]["search"] = array("table" => "Privados de la Libertad", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"]["edit"] = array("table" => "Recaudos por Años", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"]["add"] = array("table" => "Recaudos por Años", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["recaudos_por_a_os.Sancionado"]["search"] = array("table" => "Recaudos por Años", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"]["edit"] = array("table" => "Recaudos por Años", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"]["add"] = array("table" => "Recaudos por Años", "field" => "Concepto", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["recaudos_por_a_os.Concepto"]["search"] = array("table" => "Recaudos por Años", "field" => "Concepto", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"]["edit"] = array("table" => "Recaudos por Años", "field" => "CarteraTipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"]["add"] = array("table" => "Recaudos por Años", "field" => "CarteraTipo", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["recaudos_por_a_os.CarteraTipo"]["search"] = array("table" => "Recaudos por Años", "field" => "CarteraTipo", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Pagos2"] ) ) {
			$lookupTableLinks["dbo.Pagos2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] )) {
			$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] = array();
		}
		$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"]["edit"] = array("table" => "Recaudos por Años", "field" => "MesNumero", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Pagos2"] ) ) {
			$lookupTableLinks["dbo.Pagos2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] )) {
			$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] = array();
		}
		$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"]["add"] = array("table" => "Recaudos por Años", "field" => "MesNumero", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Pagos2"] ) ) {
			$lookupTableLinks["dbo.Pagos2"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] )) {
			$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"] = array();
		}
		$lookupTableLinks["dbo.Pagos2"]["recaudos_por_a_os.MesNumero"]["search"] = array("table" => "Recaudos por Años", "field" => "MesNumero", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["recaudos_por_a_os.Abogado"] )) {
			$lookupTableLinks["dbo.Abogados"]["recaudos_por_a_os.Abogado"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["recaudos_por_a_os.Abogado"]["edit"] = array("table" => "Recaudos por Años", "field" => "Abogado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["reportes1.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["reportes1.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["reportes1.SeccionalId"]["edit"] = array("table" => "Reportes", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["reportes1.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["reportes1.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["reportes1.CarteraTipoId"]["edit"] = array("table" => "Reportes", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"]["edit"] = array("table" => "Reportes", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"]["add"] = array("table" => "Reportes", "field" => "Sancionado", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["reportes1.Sancionado"]["search"] = array("table" => "Reportes", "field" => "Sancionado", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"]["edit"] = array("table" => "Reportes", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"]["add"] = array("table" => "Reportes", "field" => "ConceptoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["reportes1.ConceptoId"]["search"] = array("table" => "Reportes", "field" => "ConceptoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"]["edit"] = array("table" => "Reportes", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"]["add"] = array("table" => "Reportes", "field" => "EstadoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["reportes1.EstadoId"]["search"] = array("table" => "Reportes", "field" => "EstadoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"]["edit"] = array("table" => "Reportes", "field" => "EtapaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"]["add"] = array("table" => "Reportes", "field" => "EtapaId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Etapas"] ) ) {
			$lookupTableLinks["dbo.Etapas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] )) {
			$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"] = array();
		}
		$lookupTableLinks["dbo.Etapas"]["reportes1.EtapaId"]["search"] = array("table" => "Reportes", "field" => "EtapaId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"]["edit"] = array("table" => "Reportes", "field" => "ActuacionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"]["add"] = array("table" => "Reportes", "field" => "ActuacionId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Actuaciones"] ) ) {
			$lookupTableLinks["dbo.Actuaciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] )) {
			$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"] = array();
		}
		$lookupTableLinks["dbo.Actuaciones"]["reportes1.ActuacionId"]["search"] = array("table" => "Reportes", "field" => "ActuacionId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Motivos"] ) ) {
			$lookupTableLinks["dbo.Motivos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Motivos"]["reportes1.MotivoId"] )) {
			$lookupTableLinks["dbo.Motivos"]["reportes1.MotivoId"] = array();
		}
		$lookupTableLinks["dbo.Motivos"]["reportes1.MotivoId"]["edit"] = array("table" => "Reportes", "field" => "MotivoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"]["edit"] = array("table" => "Transacciones Usuario", "field" => "CarteraTipo", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"]["add"] = array("table" => "Transacciones Usuario", "field" => "CarteraTipo", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["transacciones_usuario.CarteraTipo"]["search"] = array("table" => "Transacciones Usuario", "field" => "CarteraTipo", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] )) {
			$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"]["edit"] = array("table" => "Transacciones Usuario", "field" => "Nombre", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] )) {
			$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"]["add"] = array("table" => "Transacciones Usuario", "field" => "Nombre", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] )) {
			$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["transacciones_usuario.Nombre"]["search"] = array("table" => "Transacciones Usuario", "field" => "Nombre", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"]["edit"] = array("table" => "Transacciones Usuario", "field" => "Seccional", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"]["add"] = array("table" => "Transacciones Usuario", "field" => "Seccional", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["transacciones_usuario.Seccional"]["search"] = array("table" => "Transacciones Usuario", "field" => "Seccional", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"]["edit"] = array("table" => "Indicadores de Gestión", "field" => "Seccional", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"]["add"] = array("table" => "Indicadores de Gestión", "field" => "Seccional", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] )) {
			$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["indicadores_de_gesti_n.Seccional"]["search"] = array("table" => "Indicadores de Gestión", "field" => "Seccional", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["dbo_procesossancionados.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["dbo_procesossancionados.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["dbo_procesossancionados.SancionadoId"]["edit"] = array("table" => "dbo.ProcesosSancionados", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bienesinmuebles.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bienesinmuebles.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bienesinmuebles.SancionadoId"]["edit"] = array("table" => "BienesInmuebles", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades3"] ) ) {
			$lookupTableLinks["dbo.Ciudades3"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades3"]["bienesinmuebles.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades3"]["bienesinmuebles.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades3"]["bienesinmuebles.CiudadId"]["edit"] = array("table" => "BienesInmuebles", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["bienesmuebles.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["bienesmuebles.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["bienesmuebles.SancionadoId"]["edit"] = array("table" => "BienesMuebles", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades3"] ) ) {
			$lookupTableLinks["dbo.Ciudades3"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades3"]["bienesmuebles.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades3"]["bienesmuebles.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades3"]["bienesmuebles.CiudadId"]["edit"] = array("table" => "BienesMuebles", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["productos_bancarios.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["productos_bancarios.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["productos_bancarios.SancionadoId"]["edit"] = array("table" => "Productos Bancarios", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades3"] ) ) {
			$lookupTableLinks["dbo.Ciudades3"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades3"]["productos_bancarios.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades3"]["productos_bancarios.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades3"]["productos_bancarios.CiudadId"]["edit"] = array("table" => "Productos Bancarios", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"]["edit"] = array("table" => "Acuerdo de Pago", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"]["add"] = array("table" => "Acuerdo de Pago", "field" => "CarteraTipoId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["acuerdo_de_pago.CarteraTipoId"]["search"] = array("table" => "Acuerdo de Pago", "field" => "CarteraTipoId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["acuerdo_de_pago.Sancionado"] )) {
			$lookupTableLinks["dbo.Sancionados"]["acuerdo_de_pago.Sancionado"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["acuerdo_de_pago.Sancionado"]["edit"] = array("table" => "Acuerdo de Pago", "field" => "Sancionado", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["acuerdo_de_pago.Concepto"] )) {
			$lookupTableLinks["dbo.Conceptos"]["acuerdo_de_pago.Concepto"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["acuerdo_de_pago.Concepto"]["edit"] = array("table" => "Acuerdo de Pago", "field" => "Concepto", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["listado_de_chequeos.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["listado_de_chequeos.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["listado_de_chequeos.SeccionalId"]["edit"] = array("table" => "Listado de Chequeos", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId"] )) {
			$lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId"]["edit"] = array("table" => "Listado de Chequeos", "field" => "AbogadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Despachos"] ) ) {
			$lookupTableLinks["dbo.Despachos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Despachos"]["listado_de_chequeos.DespachoId"] )) {
			$lookupTableLinks["dbo.Despachos"]["listado_de_chequeos.DespachoId"] = array();
		}
		$lookupTableLinks["dbo.Despachos"]["listado_de_chequeos.DespachoId"]["edit"] = array("table" => "Listado de Chequeos", "field" => "DespachoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Abogados"] ) ) {
			$lookupTableLinks["dbo.Abogados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId1"] )) {
			$lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId1"] = array();
		}
		$lookupTableLinks["dbo.Abogados"]["listado_de_chequeos.AbogadoId1"]["edit"] = array("table" => "Listado de Chequeos", "field" => "AbogadoId1", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Tramites"] ) ) {
			$lookupTableLinks["dbo.Tramites"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Tramites"]["listado_de_chequeos.TramiteId"] )) {
			$lookupTableLinks["dbo.Tramites"]["listado_de_chequeos.TramiteId"] = array();
		}
		$lookupTableLinks["dbo.Tramites"]["listado_de_chequeos.TramiteId"]["edit"] = array("table" => "Listado de Chequeos", "field" => "TramiteId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"] ) ) {
			$lookupTableLinks["dbo.TiposDocumentos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.TiposDocumentos"]["listado_de_chequeo_sancionado_datachild.TipoDocumento"] )) {
			$lookupTableLinks["dbo.TiposDocumentos"]["listado_de_chequeo_sancionado_datachild.TipoDocumento"] = array();
		}
		$lookupTableLinks["dbo.TiposDocumentos"]["listado_de_chequeo_sancionado_datachild.TipoDocumento"]["edit"] = array("table" => "Listado de Chequeo Sancionado DataChild", "field" => "TipoDocumento", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Genero"] ) ) {
			$lookupTableLinks["dbo.Genero"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Genero"]["listado_de_chequeo_sancionado_datachild.genero"] )) {
			$lookupTableLinks["dbo.Genero"]["listado_de_chequeo_sancionado_datachild.genero"] = array();
		}
		$lookupTableLinks["dbo.Genero"]["listado_de_chequeo_sancionado_datachild.genero"]["edit"] = array("table" => "Listado de Chequeo Sancionado DataChild", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["listado_de_chequeo_oficios_datachild.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["listado_de_chequeo_oficios_datachild.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["listado_de_chequeo_oficios_datachild.OficioId"]["edit"] = array("table" => "Listado de Chequeo Oficios DataChild", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"] ) ) {
			$lookupTableLinks["dbo.MotivosDevoluciones"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.MotivosDevoluciones"]["listado_de_chequeo_motivo_devolucion_datachild.MotivoDevolucionId"] )) {
			$lookupTableLinks["dbo.MotivosDevoluciones"]["listado_de_chequeo_motivo_devolucion_datachild.MotivoDevolucionId"] = array();
		}
		$lookupTableLinks["dbo.MotivosDevoluciones"]["listado_de_chequeo_motivo_devolucion_datachild.MotivoDevolucionId"]["edit"] = array("table" => "Listado de Chequeo Motivo devolucion DataChild", "field" => "MotivoDevolucionId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["clasificaciones____cartera.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["clasificaciones____cartera.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["clasificaciones____cartera.CarteraTipoId"]["edit"] = array("table" => "Clasificaciones -- Cartera", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["clasificaciones____cartera.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["clasificaciones____cartera.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["clasificaciones____cartera.ConceptoId"]["edit"] = array("table" => "Clasificaciones -- Cartera", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Naturalezas"] ) ) {
			$lookupTableLinks["dbo.Naturalezas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Naturalezas"]["clasificaciones____cartera.NaturalezaId"] )) {
			$lookupTableLinks["dbo.Naturalezas"]["clasificaciones____cartera.NaturalezaId"] = array();
		}
		$lookupTableLinks["dbo.Naturalezas"]["clasificaciones____cartera.NaturalezaId"]["edit"] = array("table" => "Clasificaciones -- Cartera", "field" => "NaturalezaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["corporaciones___especialidades.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["corporaciones___especialidades.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["corporaciones___especialidades.CarteraTipoId"]["edit"] = array("table" => "Corporaciones - Especialidades", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["mandamientos_de_pago_automaticos.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["mandamientos_de_pago_automaticos.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["mandamientos_de_pago_automaticos.CarteraTipoId"]["edit"] = array("table" => "Mandamientos de pago Automaticos", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["mandamientos_de_pago_automaticos.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["mandamientos_de_pago_automaticos.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["mandamientos_de_pago_automaticos.ConceptoId"]["edit"] = array("table" => "Mandamientos de pago Automaticos", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["prescripciones_autom_tica.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["prescripciones_autom_tica.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["prescripciones_autom_tica.CarteraTipoId"]["edit"] = array("table" => "Prescripciones Automática", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["prescripciones_autom_tica.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["prescripciones_autom_tica.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["prescripciones_autom_tica.ConceptoId"]["edit"] = array("table" => "Prescripciones Automática", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["procesos_sin_notificaci_n.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["procesos_sin_notificaci_n.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["procesos_sin_notificaci_n.CarteraTipoId"]["edit"] = array("table" => "Procesos Sin Notificación", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["procesos_sin_notificaci_n.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["procesos_sin_notificaci_n.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["procesos_sin_notificaci_n.SeccionalId"]["edit"] = array("table" => "Procesos Sin Notificación", "field" => "SeccionalId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["procesos_sin_notificaci_n.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["procesos_sin_notificaci_n.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["procesos_sin_notificaci_n.ConceptoId"]["edit"] = array("table" => "Procesos Sin Notificación", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Estados"] ) ) {
			$lookupTableLinks["dbo.Estados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Estados"]["procesos_sin_notificaci_n.EstadoId"] )) {
			$lookupTableLinks["dbo.Estados"]["procesos_sin_notificaci_n.EstadoId"] = array();
		}
		$lookupTableLinks["dbo.Estados"]["procesos_sin_notificaci_n.EstadoId"]["edit"] = array("table" => "Procesos Sin Notificación", "field" => "EstadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"] ) ) {
			$lookupTableLinks["dbo.CarteraTipos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.CarteraTipos"]["remanentes_.CarteraTipoId"] )) {
			$lookupTableLinks["dbo.CarteraTipos"]["remanentes_.CarteraTipoId"] = array();
		}
		$lookupTableLinks["dbo.CarteraTipos"]["remanentes_.CarteraTipoId"]["edit"] = array("table" => "Remanentes-", "field" => "CarteraTipoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Conceptos"] ) ) {
			$lookupTableLinks["dbo.Conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Conceptos"]["remanentes_.ConceptoId"] )) {
			$lookupTableLinks["dbo.Conceptos"]["remanentes_.ConceptoId"] = array();
		}
		$lookupTableLinks["dbo.Conceptos"]["remanentes_.ConceptoId"]["edit"] = array("table" => "Remanentes-", "field" => "ConceptoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Alertas"] ) ) {
			$lookupTableLinks["dbo.Alertas"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Alertas"]["aplazamientos.AlertaId"] )) {
			$lookupTableLinks["dbo.Alertas"]["aplazamientos.AlertaId"] = array();
		}
		$lookupTableLinks["dbo.Alertas"]["aplazamientos.AlertaId"]["edit"] = array("table" => "dbo.Aplazamientos", "field" => "AlertaId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"]["edit"] = array("table" => "dbo.Aplazamientos", "field" => "OficioId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"]["add"] = array("table" => "dbo.Aplazamientos", "field" => "OficioId", "page" => "add");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] )) {
			$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["aplazamientos.OficioId"]["search"] = array("table" => "dbo.Aplazamientos", "field" => "OficioId", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.Niveles"] ) ) {
			$lookupTableLinks["dbo.Niveles"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Niveles"]["niveles1.Clasificacion"] )) {
			$lookupTableLinks["dbo.Niveles"]["niveles1.Clasificacion"] = array();
		}
		$lookupTableLinks["dbo.Niveles"]["niveles1.Clasificacion"]["edit"] = array("table" => "dbo.Niveles1", "field" => "Clasificacion", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Sancionados"] ) ) {
			$lookupTableLinks["dbo.Sancionados"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Sancionados"]["propiedadesmedidas.SancionadoId"] )) {
			$lookupTableLinks["dbo.Sancionados"]["propiedadesmedidas.SancionadoId"] = array();
		}
		$lookupTableLinks["dbo.Sancionados"]["propiedadesmedidas.SancionadoId"]["edit"] = array("table" => "dbo.PropiedadesMedidas", "field" => "SancionadoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Ciudades"] ) ) {
			$lookupTableLinks["dbo.Ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Ciudades"]["propiedadesmedidas.CiudadId"] )) {
			$lookupTableLinks["dbo.Ciudades"]["propiedadesmedidas.CiudadId"] = array();
		}
		$lookupTableLinks["dbo.Ciudades"]["propiedadesmedidas.CiudadId"]["edit"] = array("table" => "dbo.PropiedadesMedidas", "field" => "CiudadId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["novedades.ProcesoId"] )) {
			$lookupTableLinks["dbo.Procesos"]["novedades.ProcesoId"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["novedades.ProcesoId"]["edit"] = array("table" => "dbo.Novedades", "field" => "ProcesoId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UserProfile"] ) ) {
			$lookupTableLinks["dbo.UserProfile"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UserProfile"]["novedades.UserId"] )) {
			$lookupTableLinks["dbo.UserProfile"]["novedades.UserId"] = array();
		}
		$lookupTableLinks["dbo.UserProfile"]["novedades.UserId"]["edit"] = array("table" => "dbo.Novedades", "field" => "UserId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Procesos"] ) ) {
			$lookupTableLinks["dbo.Procesos"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Procesos"]["correspondenciamasiva.proceso"] )) {
			$lookupTableLinks["dbo.Procesos"]["correspondenciamasiva.proceso"] = array();
		}
		$lookupTableLinks["dbo.Procesos"]["correspondenciamasiva.proceso"]["edit"] = array("table" => "dbo.CorrespondenciaMasiva", "field" => "proceso", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Oficios"] ) ) {
			$lookupTableLinks["dbo.Oficios"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Oficios"]["correspondenciamasiva.correspondencia"] )) {
			$lookupTableLinks["dbo.Oficios"]["correspondenciamasiva.correspondencia"] = array();
		}
		$lookupTableLinks["dbo.Oficios"]["correspondenciamasiva.correspondencia"]["edit"] = array("table" => "dbo.CorrespondenciaMasiva", "field" => "correspondencia", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UserProfile"] ) ) {
			$lookupTableLinks["dbo.UserProfile"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UserProfile"]["correspondenciamasiva.usuario"] )) {
			$lookupTableLinks["dbo.UserProfile"]["correspondenciamasiva.usuario"] = array();
		}
		$lookupTableLinks["dbo.UserProfile"]["correspondenciamasiva.usuario"]["edit"] = array("table" => "dbo.CorrespondenciaMasiva", "field" => "usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.UserProfile"] ) ) {
			$lookupTableLinks["dbo.UserProfile"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.UserProfile"]["usuariosseccionales.UserId"] )) {
			$lookupTableLinks["dbo.UserProfile"]["usuariosseccionales.UserId"] = array();
		}
		$lookupTableLinks["dbo.UserProfile"]["usuariosseccionales.UserId"]["edit"] = array("table" => "dbo.UsuariosSeccionales", "field" => "UserId", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.Seccionales"] ) ) {
			$lookupTableLinks["dbo.Seccionales"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.Seccionales"]["usuariosseccionales.SeccionalId"] )) {
			$lookupTableLinks["dbo.Seccionales"]["usuariosseccionales.SeccionalId"] = array();
		}
		$lookupTableLinks["dbo.Seccionales"]["usuariosseccionales.SeccionalId"]["edit"] = array("table" => "dbo.UsuariosSeccionales", "field" => "SeccionalId", "page" => "edit");
}

?>