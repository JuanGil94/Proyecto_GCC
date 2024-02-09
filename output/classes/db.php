<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}	
			else
				$orderClause = array( "column" => $userOrder );
			
			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "GCC_at_S00001_CCAD01" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "Abogados", "varname" => "GCC_at_S00001_CCAD01_dbo_Abogados", "altvarname" => "Abogados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Actas", "varname" => "GCC_at_S00001_CCAD01_dbo_Actas", "altvarname" => "Actas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Actuaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Actuaciones", "altvarname" => "Actuaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Acuerdos", "varname" => "GCC_at_S00001_CCAD01_dbo_Acuerdos", "altvarname" => "Acuerdos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Alertas", "varname" => "GCC_at_S00001_CCAD01_dbo_Alertas", "altvarname" => "Alertas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "AlertasTipos", "varname" => "GCC_at_S00001_CCAD01_dbo_AlertasTipos", "altvarname" => "AlertasTipos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Auditorias", "varname" => "GCC_at_S00001_CCAD01_dbo_Auditorias", "altvarname" => "Auditorias", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Ayudas", "varname" => "GCC_at_S00001_CCAD01_dbo_Ayudas", "altvarname" => "Ayudas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Bancos", "varname" => "GCC_at_S00001_CCAD01_dbo_Bancos", "altvarname" => "Bancos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Calificaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Calificaciones", "altvarname" => "Calificaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Carceles", "varname" => "GCC_at_S00001_CCAD01_dbo_Carceles", "altvarname" => "Carceles", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "CarteraTipos", "varname" => "GCC_at_S00001_CCAD01_dbo_CarteraTipos", "altvarname" => "CarteraTipos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Causales", "varname" => "GCC_at_S00001_CCAD01_dbo_Causales", "altvarname" => "Causales", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Chequeos", "varname" => "GCC_at_S00001_CCAD01_dbo_Chequeos", "altvarname" => "Chequeos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "ChequeosOficios", "varname" => "GCC_at_S00001_CCAD01_dbo_ChequeosOficios", "altvarname" => "ChequeosOficios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "ChequeosSancionados", "varname" => "GCC_at_S00001_CCAD01_dbo_ChequeosSancionados", "altvarname" => "ChequeosSancionados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Ciudades", "varname" => "GCC_at_S00001_CCAD01_dbo_Ciudades", "altvarname" => "Ciudades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Conceptos", "varname" => "GCC_at_S00001_CCAD01_dbo_Conceptos", "altvarname" => "Conceptos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Correspondencias", "varname" => "GCC_at_S00001_CCAD01_dbo_Correspondencias", "altvarname" => "Correspondencias", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Cuentas", "varname" => "GCC_at_S00001_CCAD01_dbo_Cuentas", "altvarname" => "Cuentas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Departamentos", "varname" => "GCC_at_S00001_CCAD01_dbo_Departamentos", "altvarname" => "Departamentos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Despachos", "varname" => "GCC_at_S00001_CCAD01_dbo_Despachos", "altvarname" => "Despachos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Devoluciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Devoluciones", "altvarname" => "Devoluciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Direcciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Direcciones", "altvarname" => "Direcciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Empresas", "varname" => "GCC_at_S00001_CCAD01_dbo_Empresas", "altvarname" => "Empresas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Entidades", "varname" => "GCC_at_S00001_CCAD01_dbo_Entidades", "altvarname" => "Entidades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Especialidades", "varname" => "GCC_at_S00001_CCAD01_dbo_Especialidades", "altvarname" => "Especialidades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Estados", "varname" => "GCC_at_S00001_CCAD01_dbo_Estados", "altvarname" => "Estados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Etapas", "varname" => "GCC_at_S00001_CCAD01_dbo_Etapas", "altvarname" => "Etapas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Festivos", "varname" => "GCC_at_S00001_CCAD01_dbo_Festivos", "altvarname" => "Festivos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Horarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Horarios", "altvarname" => "Horarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Importaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Importaciones", "altvarname" => "Importaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Indeterminados", "varname" => "GCC_at_S00001_CCAD01_dbo_Indeterminados", "altvarname" => "Indeterminados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Intereses", "varname" => "GCC_at_S00001_CCAD01_dbo_Intereses", "altvarname" => "Intereses", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Interrupciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Interrupciones", "altvarname" => "Interrupciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "InterrupcionesMaxView", "varname" => "GCC_at_S00001_CCAD01_dbo_InterrupcionesMaxView", "altvarname" => "InterrupcionesMaxView", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "IPsRestringidas", "varname" => "GCC_at_S00001_CCAD01_dbo_IPsRestringidas", "altvarname" => "IPsRestringidas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Liquidaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Liquidaciones", "altvarname" => "Liquidaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Llamadas", "varname" => "GCC_at_S00001_CCAD01_dbo_Llamadas", "altvarname" => "Llamadas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Medidas", "varname" => "GCC_at_S00001_CCAD01_dbo_Medidas", "altvarname" => "Medidas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Menus", "varname" => "GCC_at_S00001_CCAD01_dbo_Menus", "altvarname" => "Menus", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Minjusticia", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia", "altvarname" => "Minjusticia", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Minjusticia2", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia2", "altvarname" => "Minjusticia2", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Minjusticia3", "varname" => "GCC_at_S00001_CCAD01_dbo_Minjusticia3", "altvarname" => "Minjusticia3", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Motivos", "varname" => "GCC_at_S00001_CCAD01_dbo_Motivos", "altvarname" => "Motivos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "MotivosDevoluciones", "varname" => "GCC_at_S00001_CCAD01_dbo_MotivosDevoluciones", "altvarname" => "MotivosDevoluciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Naturalezas", "varname" => "GCC_at_S00001_CCAD01_dbo_Naturalezas", "altvarname" => "Naturalezas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Niveles", "varname" => "GCC_at_S00001_CCAD01_dbo_Niveles", "altvarname" => "Niveles", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Oficios", "varname" => "GCC_at_S00001_CCAD01_dbo_Oficios", "altvarname" => "Oficios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Operaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Operaciones", "altvarname" => "Operaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "OperacionTipo", "varname" => "GCC_at_S00001_CCAD01_dbo_OperacionTipo", "altvarname" => "OperacionTipo", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Pagos1", "varname" => "GCC_at_S00001_CCAD01_dbo_Pagos1", "altvarname" => "Pagos1", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Parejas", "varname" => "GCC_at_S00001_CCAD01_dbo_Parejas", "altvarname" => "Parejas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Prescritos", "varname" => "GCC_at_S00001_CCAD01_dbo_Prescritos", "altvarname" => "Prescritos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Presupuestos", "varname" => "GCC_at_S00001_CCAD01_dbo_Presupuestos", "altvarname" => "Presupuestos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Procesos", "varname" => "GCC_at_S00001_CCAD01_dbo_Procesos", "altvarname" => "Procesos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Propiedades", "varname" => "GCC_at_S00001_CCAD01_dbo_Propiedades", "altvarname" => "Propiedades", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Reasignaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Reasignaciones", "altvarname" => "Reasignaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Reliquidaciones", "varname" => "GCC_at_S00001_CCAD01_dbo_Reliquidaciones", "altvarname" => "Reliquidaciones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Remanentes", "varname" => "GCC_at_S00001_CCAD01_dbo_Remanentes", "altvarname" => "Remanentes", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Reportes", "varname" => "GCC_at_S00001_CCAD01_dbo_Reportes", "altvarname" => "Reportes", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Salarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Salarios", "altvarname" => "Salarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Sancionados", "varname" => "GCC_at_S00001_CCAD01_dbo_Sancionados", "altvarname" => "Sancionados", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Seccionales", "varname" => "GCC_at_S00001_CCAD01_dbo_Seccionales", "altvarname" => "Seccionales", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Solidarios", "varname" => "GCC_at_S00001_CCAD01_dbo_Solidarios", "altvarname" => "Solidarios", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Suspensiones", "varname" => "GCC_at_S00001_CCAD01_dbo_Suspensiones", "altvarname" => "Suspensiones", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Tasas", "varname" => "GCC_at_S00001_CCAD01_dbo_Tasas", "altvarname" => "Tasas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Temas", "varname" => "GCC_at_S00001_CCAD01_dbo_Temas", "altvarname" => "Temas", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Test", "varname" => "GCC_at_S00001_CCAD01_dbo_Test", "altvarname" => "Test", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "tipoCobro", "varname" => "GCC_at_S00001_CCAD01_dbo_tipoCobro", "altvarname" => "tipoCobro", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "TiposDocumentos", "varname" => "GCC_at_S00001_CCAD01_dbo_TiposDocumentos", "altvarname" => "TiposDocumentos", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Tramites", "varname" => "GCC_at_S00001_CCAD01_dbo_Tramites", "altvarname" => "Tramites", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UserProfile", "varname" => "GCC_at_S00001_CCAD01_dbo_UserProfile", "altvarname" => "UserProfile", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "usugcc-_audit", "varname" => "GCC_at_S00001_CCAD01_dbo_usugcc__audit", "altvarname" => "usugcc__audit", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UsuGCC-_users", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC__users", "altvarname" => "UsuGCC__users", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UsuGCC-uggroups", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_uggroups", "altvarname" => "UsuGCC_uggroups", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UsuGCC-ugmembers", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_ugmembers", "altvarname" => "UsuGCC_ugmembers", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UsuGCC-ugrights", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC_ugrights", "altvarname" => "UsuGCC_ugrights", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "usugcc__noti", "varname" => "GCC_at_S00001_CCAD01_dbo_usugcc__noti", "altvarname" => "usugcc__noti", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "UsuGCC__settings", "varname" => "GCC_at_S00001_CCAD01_dbo_UsuGCC__settings", "altvarname" => "UsuGCC__settings", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "Uvts", "varname" => "GCC_at_S00001_CCAD01_dbo_Uvts", "altvarname" => "Uvts", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "webreport_admin", "varname" => "GCC_at_S00001_CCAD01_dbo_webreport_admin", "altvarname" => "webreport_admin", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "webreport_style", "varname" => "GCC_at_S00001_CCAD01_dbo_webreport_style", "altvarname" => "webreport_style", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
			$dalTables[$conn->connId][] = array("name" => "webreports", "varname" => "GCC_at_S00001_CCAD01_dbo_webreports", "altvarname" => "webreports", "connId" => "GCC_at_S00001_CCAD01", "schema" => "dbo", "connName" => "GCC at 192.168.209.48");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql, 
		$arg1 = null,
		$arg2 = null, 
		$arg3 = null, 
		$arg4 = null, 
		$arg5 = null, 
		$arg6 = null, 
		$arg7 = null, 
		$arg8 = null, 
		$arg9 = null, 
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);
			
			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}
			
			
			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}
			
			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>