<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblGCC_at_S00001_CCAD01_dbo_Abogados;
	var $tblGCC_at_S00001_CCAD01_dbo_Actas;
	var $tblGCC_at_S00001_CCAD01_dbo_Actuaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Acuerdos;
	var $tblGCC_at_S00001_CCAD01_dbo_Alertas;
	var $tblGCC_at_S00001_CCAD01_dbo_AlertasTipos;
	var $tblGCC_at_S00001_CCAD01_dbo_Auditorias;
	var $tblGCC_at_S00001_CCAD01_dbo_Ayudas;
	var $tblGCC_at_S00001_CCAD01_dbo_Bancos;
	var $tblGCC_at_S00001_CCAD01_dbo_Calificaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Carceles;
	var $tblGCC_at_S00001_CCAD01_dbo_CarteraTipos;
	var $tblGCC_at_S00001_CCAD01_dbo_Causales;
	var $tblGCC_at_S00001_CCAD01_dbo_Chequeos;
	var $tblGCC_at_S00001_CCAD01_dbo_ChequeosOficios;
	var $tblGCC_at_S00001_CCAD01_dbo_ChequeosSancionados;
	var $tblGCC_at_S00001_CCAD01_dbo_Ciudades;
	var $tblGCC_at_S00001_CCAD01_dbo_Conceptos;
	var $tblGCC_at_S00001_CCAD01_dbo_Correspondencias;
	var $tblGCC_at_S00001_CCAD01_dbo_Cuentas;
	var $tblGCC_at_S00001_CCAD01_dbo_Departamentos;
	var $tblGCC_at_S00001_CCAD01_dbo_Despachos;
	var $tblGCC_at_S00001_CCAD01_dbo_Devoluciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Direcciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Empresas;
	var $tblGCC_at_S00001_CCAD01_dbo_Entidades;
	var $tblGCC_at_S00001_CCAD01_dbo_Especialidades;
	var $tblGCC_at_S00001_CCAD01_dbo_Estados;
	var $tblGCC_at_S00001_CCAD01_dbo_Etapas;
	var $tblGCC_at_S00001_CCAD01_dbo_Festivos;
	var $tblGCC_at_S00001_CCAD01_dbo_Horarios;
	var $tblGCC_at_S00001_CCAD01_dbo_Importaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Indeterminados;
	var $tblGCC_at_S00001_CCAD01_dbo_Intereses;
	var $tblGCC_at_S00001_CCAD01_dbo_Interrupciones;
	var $tblGCC_at_S00001_CCAD01_dbo_IPsRestringidas;
	var $tblGCC_at_S00001_CCAD01_dbo_Llamadas;
	var $tblGCC_at_S00001_CCAD01_dbo_Medidas;
	var $tblGCC_at_S00001_CCAD01_dbo_Menus;
	var $tblGCC_at_S00001_CCAD01_dbo_Minjusticia;
	var $tblGCC_at_S00001_CCAD01_dbo_Minjusticia2;
	var $tblGCC_at_S00001_CCAD01_dbo_Minjusticia3;
	var $tblGCC_at_S00001_CCAD01_dbo_Motivos;
	var $tblGCC_at_S00001_CCAD01_dbo_MotivosDevoluciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Naturalezas;
	var $tblGCC_at_S00001_CCAD01_dbo_Niveles;
	var $tblGCC_at_S00001_CCAD01_dbo_Oficios;
	var $tblGCC_at_S00001_CCAD01_dbo_Operaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_OperacionTipo;
	var $tblGCC_at_S00001_CCAD01_dbo_Pagos1;
	var $tblGCC_at_S00001_CCAD01_dbo_Parejas;
	var $tblGCC_at_S00001_CCAD01_dbo_Presupuestos;
	var $tblGCC_at_S00001_CCAD01_dbo_Procesos;
	var $tblGCC_at_S00001_CCAD01_dbo_Propiedades;
	var $tblGCC_at_S00001_CCAD01_dbo_Reasignaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Reliquidaciones;
	var $tblGCC_at_S00001_CCAD01_dbo_Reportes;
	var $tblGCC_at_S00001_CCAD01_dbo_Salarios;
	var $tblGCC_at_S00001_CCAD01_dbo_Sancionados;
	var $tblGCC_at_S00001_CCAD01_dbo_Seccionales;
	var $tblGCC_at_S00001_CCAD01_dbo_Solidarios;
	var $tblGCC_at_S00001_CCAD01_dbo_Suspensiones;
	var $tblGCC_at_S00001_CCAD01_dbo_Tasas;
	var $tblGCC_at_S00001_CCAD01_dbo_Temas;
	var $tblGCC_at_S00001_CCAD01_dbo_Test;
	var $tblGCC_at_S00001_CCAD01_dbo_tipoCobro;
	var $tblGCC_at_S00001_CCAD01_dbo_TiposDocumentos;
	var $tblGCC_at_S00001_CCAD01_dbo_Tramites;
	var $tblGCC_at_S00001_CCAD01_dbo_UserProfile;
	var $tblGCC_at_S00001_CCAD01_dbo_usugcc__audit;
	var $tblGCC_at_S00001_CCAD01_dbo_UsuGCC__users;
	var $tblGCC_at_S00001_CCAD01_dbo_UsuGCC_uggroups;
	var $tblGCC_at_S00001_CCAD01_dbo_UsuGCC_ugmembers;
	var $tblGCC_at_S00001_CCAD01_dbo_UsuGCC_ugrights;
	var $tblGCC_at_S00001_CCAD01_dbo_UsuGCC__settings;
	var $tblGCC_at_S00001_CCAD01_dbo_Uvts;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "Abogados", "varname" => "GCC_at_S00001_CCAD01_dbo_Abogados", "altvarname" => "Abogados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Actas", "varname" => "GCC_at_S00001_CCAD01_dbo_Actas", "altvarname" => "Actas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Actuaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Actuaciones", "altvarname" => "Actuaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Acuerdos", "varname" => "GCC_at_S00001_CCAD01_dbo_Acuerdos", "altvarname" => "Acuerdos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Alertas", "varname" => "GCC_at_S00001_CCAD01_dbo_Alertas", "altvarname" => "Alertas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "AlertasTipos", "varname" => "GCC_at_S00001_CCAD01_dbo_AlertasTipos", "altvarname" => "AlertasTipos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Auditorias", "varname" => "GCC_at_S00001_CCAD01_dbo_Auditorias", "altvarname" => "Auditorias", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Ayudas", "varname" => "GCC_at_S00001_CCAD01_dbo_Ayudas", "altvarname" => "Ayudas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Bancos", "varname" => "GCC_at_S00001_CCAD01_dbo_Bancos", "altvarname" => "Bancos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Calificaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Calificaciones", "altvarname" => "Calificaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Carceles", "varname" => "GCC_at_S00001_CCAD01_dbo_Carceles", "altvarname" => "Carceles", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "CarteraTipos", "varname" => "GCC_at_S00001_CCAD01_dbo_CarteraTipos", "altvarname" => "CarteraTipos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Causales", "varname" => "GCC_at_S00001_CCAD01_dbo_Causales", "altvarname" => "Causales", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Chequeos", "varname" => "GCC_at_S00001_CCAD01_dbo_Chequeos", "altvarname" => "Chequeos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "ChequeosOficios", "varname" => "GCC_at_S00001_CCAD01_dbo_ChequeosOficios", "altvarname" => "ChequeosOficios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "ChequeosSancionados", "varname" => "GCC_at_S00001_CCAD01_dbo_ChequeosSancionados", "altvarname" => "ChequeosSancionados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Ciudades", "varname" => "GCC_at_S00001_CCAD01_dbo_Ciudades", "altvarname" => "Ciudades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Conceptos", "varname" => "GCC_at_S00001_CCAD01_dbo_Conceptos", "altvarname" => "Conceptos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Correspondencias", "varname" => "GCC_at_S00001_CCAD01_dbo_Correspondencias", "altvarname" => "Correspondencias", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Cuentas", "varname" => "GCC_at_S00001_CCAD01_dbo_Cuentas", "altvarname" => "Cuentas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Departamentos", "varname" => "GCC_at_S00001_CCAD01_dbo_Departamentos", "altvarname" => "Departamentos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Despachos", "varname" => "GCC_at_S00001_CCAD01_dbo_Despachos", "altvarname" => "Despachos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Devoluciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Devoluciones", "altvarname" => "Devoluciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Direcciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Direcciones", "altvarname" => "Direcciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Empresas", "varname" => "GCC_at_S00001_CCAD01_dbo_Empresas", "altvarname" => "Empresas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Entidades", "varname" => "GCC_at_S00001_CCAD01_dbo_Entidades", "altvarname" => "Entidades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Especialidades", "varname" => "GCC_at_S00001_CCAD01_dbo_Especialidades", "altvarname" => "Especialidades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Estados", "varname" => "GCC_at_S00001_CCAD01_dbo_Estados", "altvarname" => "Estados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Etapas", "varname" => "GCC_at_S00001_CCAD01_dbo_Etapas", "altvarname" => "Etapas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Festivos", "varname" => "GCC_at_S00001_CCAD01_dbo_Festivos", "altvarname" => "Festivos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Horarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Horarios", "altvarname" => "Horarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Importaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Importaciones", "altvarname" => "Importaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Indeterminados", "varname" => "GCC_at_S00001_CCAD01_dbo_Indeterminados", "altvarname" => "Indeterminados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Intereses", "varname" => "GCC_at_S00001_CCAD01_dbo_Intereses", "altvarname" => "Intereses", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Interrupciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Interrupciones", "altvarname" => "Interrupciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "IPsRestringidas", "varname" => "GCC_at_S00001_CCAD01_dbo_IPsRestringidas", "altvarname" => "IPsRestringidas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Llamadas", "varname" => "GCC_at_S00001_CCAD01_dbo_Llamadas", "altvarname" => "Llamadas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Medidas", "varname" => "GCC_at_S00001_CCAD01_dbo_Medidas", "altvarname" => "Medidas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Menus", "varname" => "GCC_at_S00001_CCAD01_dbo_Menus", "altvarname" => "Menus", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Minjusticia", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia", "altvarname" => "Minjusticia", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Minjusticia2", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia2", "altvarname" => "Minjusticia2", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Minjusticia3", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia3", "altvarname" => "Minjusticia3", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Motivos", "varname" => "GCC_at_S00001_CCAD01_dbo_Motivos", "altvarname" => "Motivos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "MotivosDevoluciones", "varname" => "GCC_at_S00001_CCAD01_dbo_MotivosDevoluciones", "altvarname" => "MotivosDevoluciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Naturalezas", "varname" => "GCC_at_S00001_CCAD01_dbo_Naturalezas", "altvarname" => "Naturalezas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Niveles", "varname" => "GCC_at_S00001_CCAD01_dbo_Niveles", "altvarname" => "Niveles", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Oficios", "varname" => "GCC_at_S00001_CCAD01_dbo_Oficios", "altvarname" => "Oficios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Operaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Operaciones", "altvarname" => "Operaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "OperacionTipo", "varname" => "GCC_at_S00001_CCAD01_dbo_OperacionTipo", "altvarname" => "OperacionTipo", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Pagos1", "varname" => "GCC_at_S00001_CCAD01_dbo_Pagos1", "altvarname" => "Pagos1", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Parejas", "varname" => "GCC_at_S00001_CCAD01_dbo_Parejas", "altvarname" => "Parejas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Presupuestos", "varname" => "GCC_at_S00001_CCAD01_dbo_Presupuestos", "altvarname" => "Presupuestos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Procesos", "varname" => "GCC_at_S00001_CCAD01_dbo_Procesos", "altvarname" => "Procesos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Propiedades", "varname" => "GCC_at_S00001_CCAD01_dbo_Propiedades", "altvarname" => "Propiedades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Reasignaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Reasignaciones", "altvarname" => "Reasignaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Reliquidaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Reliquidaciones", "altvarname" => "Reliquidaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Reportes", "varname" => "GCC_at_S00001_CCAD01_dbo_Reportes", "altvarname" => "Reportes", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Salarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Salarios", "altvarname" => "Salarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Sancionados", "varname" => "GCC_at_S00001_CCAD01_dbo_Sancionados", "altvarname" => "Sancionados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Seccionales", "varname" => "GCC_at_S00001_CCAD01_dbo_Seccionales", "altvarname" => "Seccionales", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Solidarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Solidarios", "altvarname" => "Solidarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Suspensiones", "varname" => "GCC_at_S00001_CCAD01_dbo_Suspensiones", "altvarname" => "Suspensiones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Tasas", "varname" => "GCC_at_S00001_CCAD01_dbo_Tasas", "altvarname" => "Tasas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Temas", "varname" => "GCC_at_S00001_CCAD01_dbo_Temas", "altvarname" => "Temas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Test", "varname" => "GCC_at_S00001_CCAD01_dbo_Test", "altvarname" => "Test", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "tipoCobro", "varname" => "GCC_at_S00001_CCAD01_dbo_tipoCobro", "altvarname" => "tipoCobro", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "TiposDocumentos", "varname" => "GCC_at_S00001_CCAD01_dbo_TiposDocumentos", "altvarname" => "TiposDocumentos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Tramites", "varname" => "GCC_at_S00001_CCAD01_dbo_Tramites", "altvarname" => "Tramites", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UserProfile", "varname" => "GCC_at_S00001_CCAD01_dbo_UserProfile", "altvarname" => "UserProfile", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "usugcc-_audit", "varname" => "GCC_at_S00001_CCAD01_dbo_usugcc__audit", "altvarname" => "usugcc__audit", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UsuGCC-_users", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC__users", "altvarname" => "UsuGCC__users", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UsuGCC-uggroups", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_uggroups", "altvarname" => "UsuGCC_uggroups", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UsuGCC-ugmembers", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_ugmembers", "altvarname" => "UsuGCC_ugmembers", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UsuGCC-ugrights", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_ugrights", "altvarname" => "UsuGCC_ugrights", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "UsuGCC__settings", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC__settings", "altvarname" => "UsuGCC__settings", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		$this->lstTables[] = array("name" => "Uvts", "varname" => "GCC_at_S00001_CCAD01_dbo_Uvts", "altvarname" => "Uvts", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>