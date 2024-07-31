<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "GCC_at_S00001_CCAD01" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "GCC_at_S00001_CCAD01";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "GCC_at_S00001_CCAD01" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "GCC_at_S00001_CCAD01" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "GCC_at_S00001_CCAD01";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "GCC_at_S00001_CCAD01";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "GCC_at_S00001_CCAD01";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["admin_rights"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["admin_members"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.UsuGCC-_users"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["admin_users"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Abogados"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Actuaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Conceptos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Departamentos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Despachos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Empresas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Entidades"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Especialidades"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Estados"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Etapas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Festivos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.MotivosDevoluciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Naturalezas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Niveles"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Oficios"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Operaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Parejas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Presupuestos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Reportes"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Salarios"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Seccionales"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Test"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Uvts"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.CarteraTipos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Chequeos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ChequeosOficios"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ChequeosSancionados"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Devoluciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Horarios"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.UsuGCC-uggroups"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.IPsRestringidas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.TiposDocumentos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Tramites"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Conceptos1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Procesos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Solidarios"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Llamadas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Medidas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Acuerdos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Pagos1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Cuentas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Intereses"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Reasignaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Suspensiones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Suspensiones1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Interrupciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Reliquidaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ayudas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Temas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Correspondencias"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.usugcc-_audit"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Importaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Indeterminados"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.UserProfile"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Auditorias"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Menus"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Minjusticia"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Minjusticia2"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Minjusticia3"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Actas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.AlertasTipos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Direcciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Propiedades"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Propiedades1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Propiedades3"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Correspondencias1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Bancos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Motivos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Oficios Sigobius"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Tasas Tributarias"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Tasas Comerciales"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Tasas TES (Deterioro de Cartera)"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Carceles"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Alertas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.tipoCobro"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Oficios1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.OperacionTipo"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Autorizaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Liquidaciones"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.usugcc__noti"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Sancionados"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Seguimiento y control de Acuerdos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Despachos4"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Despachos1"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Remanentes Report"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ProcesosPrescritos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Prescritos Report"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.AlertMandPago"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertNotMandPago"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertIncAcuPago"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertSinPersuasivo"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertBusqBienes"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertSegAdelante"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["AlertIntSusp"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ReporteMandamientos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ListaChequeosReporte"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ReporteClasificacionCartera"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ProcesosSinNotificaReport"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ReporteCorporaciónEspecialidad"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.CorporacionesView"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Fechas"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.AuditoriasProcesosView"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.ProcesosReasignar"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Genero"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["admin_admembers"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades2"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades4"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades5"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Ciudades3"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Uvbs"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Resumen_Mensual"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.tipoRecaudo"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Despachos2"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["dbo.Despachos5"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Actualización"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Guía del Deudor Moroso"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Incumplimiento Acuerdo de Pago Semestral"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Retiros"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Reporte Semestral"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Cancelación Acuerdo de Pago"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["BDME Excluidos"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Base de Datos - Historico"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Deterioro de Cartera por Proceso"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Intereses por Proceso"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Listado Medidas Cautelares"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Presunción Prescripción"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Intereses por Proceso Report"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Certificado del Resumen Mensual"] = "GCC_at_S00001_CCAD01";
		$connectionsIds["Certificado del Resumen por Periodo"] = "GCC_at_S00001_CCAD01";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>