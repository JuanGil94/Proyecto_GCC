<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "dbo.UsuGCC-_users";
$nonAdminTablesArr[] = "dbo.Abogados";
$nonAdminTablesArr[] = "dbo.Actuaciones";
$nonAdminTablesArr[] = "dbo.Ciudades";
$nonAdminTablesArr[] = "dbo.Conceptos";
$nonAdminTablesArr[] = "dbo.Departamentos";
$nonAdminTablesArr[] = "dbo.Despachos";
$nonAdminTablesArr[] = "dbo.Empresas";
$nonAdminTablesArr[] = "dbo.Entidades";
$nonAdminTablesArr[] = "dbo.Especialidades";
$nonAdminTablesArr[] = "dbo.Estados";
$nonAdminTablesArr[] = "dbo.Etapas";
$nonAdminTablesArr[] = "dbo.Festivos";
$nonAdminTablesArr[] = "dbo.MotivosDevoluciones";
$nonAdminTablesArr[] = "dbo.Naturalezas";
$nonAdminTablesArr[] = "dbo.Niveles";
$nonAdminTablesArr[] = "dbo.Oficios";
$nonAdminTablesArr[] = "dbo.Operaciones";
$nonAdminTablesArr[] = "dbo.Parejas";
$nonAdminTablesArr[] = "dbo.Presupuestos";
$nonAdminTablesArr[] = "dbo.Reportes";
$nonAdminTablesArr[] = "dbo.Salarios";
$nonAdminTablesArr[] = "dbo.Seccionales";
$nonAdminTablesArr[] = "dbo.Test";
$nonAdminTablesArr[] = "dbo.Uvts";
$nonAdminTablesArr[] = "dbo.CarteraTipos";
$nonAdminTablesArr[] = "dbo.Chequeos";
$nonAdminTablesArr[] = "dbo.ChequeosOficios";
$nonAdminTablesArr[] = "dbo.ChequeosSancionados";
$nonAdminTablesArr[] = "dbo.Devoluciones";
$nonAdminTablesArr[] = "dbo.Horarios";
$nonAdminTablesArr[] = "dbo.UsuGCC-uggroups";
$nonAdminTablesArr[] = "dbo.IPsRestringidas";
$nonAdminTablesArr[] = "dbo.TiposDocumentos";
$nonAdminTablesArr[] = "dbo.Tramites";
$nonAdminTablesArr[] = "dbo.Conceptos1";
$nonAdminTablesArr[] = "dbo.Procesos";
$nonAdminTablesArr[] = "dbo.Solidarios";
$nonAdminTablesArr[] = "dbo.Llamadas";
$nonAdminTablesArr[] = "dbo.Medidas";
$nonAdminTablesArr[] = "dbo.Acuerdos";
$nonAdminTablesArr[] = "dbo.Pagos1";
$nonAdminTablesArr[] = "dbo.Cuentas";
$nonAdminTablesArr[] = "dbo.Intereses";
$nonAdminTablesArr[] = "dbo.Reasignaciones";
$nonAdminTablesArr[] = "dbo.Suspensiones";
$nonAdminTablesArr[] = "dbo.Suspensiones1";
$nonAdminTablesArr[] = "dbo.Interrupciones";
$nonAdminTablesArr[] = "dbo.Reliquidaciones";
$nonAdminTablesArr[] = "dbo.Ayudas";
$nonAdminTablesArr[] = "dbo.Temas";
$nonAdminTablesArr[] = "dbo.Correspondencias";
$nonAdminTablesArr[] = "dbo.usugcc-_audit";
$nonAdminTablesArr[] = "dbo.Importaciones";
$nonAdminTablesArr[] = "dbo.Indeterminados";
$nonAdminTablesArr[] = "dbo.UserProfile";
$nonAdminTablesArr[] = "dbo.Auditorias";
$nonAdminTablesArr[] = "dbo.Menus";
$nonAdminTablesArr[] = "dbo.Minjusticia";
$nonAdminTablesArr[] = "dbo.Minjusticia2";
$nonAdminTablesArr[] = "dbo.Minjusticia3";
$nonAdminTablesArr[] = "dbo.Actas";
$nonAdminTablesArr[] = "dbo.AlertasTipos";
$nonAdminTablesArr[] = "dbo.Direcciones";
$nonAdminTablesArr[] = "dbo.Propiedades";
$nonAdminTablesArr[] = "dbo.Propiedades1";
$nonAdminTablesArr[] = "dbo.Propiedades3";
$nonAdminTablesArr[] = "dbo.Bancos";
$nonAdminTablesArr[] = "dbo.Motivos";
$nonAdminTablesArr[] = "dbo.Oficios Sigobius";
$nonAdminTablesArr[] = "Tasas Tributarias";
$nonAdminTablesArr[] = "Tasas Comerciales";
$nonAdminTablesArr[] = "Tasas TES (Deterioro de Cartera)";
$nonAdminTablesArr[] = "dbo.Carceles";
$nonAdminTablesArr[] = "dbo.Alertas";
$nonAdminTablesArr[] = "dbo.tipoCobro";
$nonAdminTablesArr[] = "dbo.Oficios1";
$nonAdminTablesArr[] = "dbo.OperacionTipo";
$nonAdminTablesArr[] = "dbo.Ciudades1";
$nonAdminTablesArr[] = "dbo.Autorizaciones";
$nonAdminTablesArr[] = "dbo.Liquidaciones";
$nonAdminTablesArr[] = "dbo.usugcc__noti";
$nonAdminTablesArr[] = "dbo.Sancionados";
$nonAdminTablesArr[] = "dbo.Seguimiento y control de Acuerdos";
$nonAdminTablesArr[] = "dbo.Despachos4";
$nonAdminTablesArr[] = "dbo.Despachos1";
$nonAdminTablesArr[] = "dbo.Remanentes Report";
$nonAdminTablesArr[] = "dbo.ProcesosPrescritos";
$nonAdminTablesArr[] = "dbo.Prescritos Report";
$nonAdminTablesArr[] = "dbo.AlertMandPago";
$nonAdminTablesArr[] = "AlertNotMandPago";
$nonAdminTablesArr[] = "AlertIncAcuPago";
$nonAdminTablesArr[] = "AlertSinPersuasivo";
$nonAdminTablesArr[] = "AlertBusqBienes";
$nonAdminTablesArr[] = "AlertSegAdelante";
$nonAdminTablesArr[] = "AlertIntSusp";
$nonAdminTablesArr[] = "dbo.ReporteMandamientos";
$nonAdminTablesArr[] = "dbo.ListaChequeosReporte";
$nonAdminTablesArr[] = "dbo.ReporteClasificacionCartera";
$nonAdminTablesArr[] = "dbo.ProcesosSinNotificaReport";
$nonAdminTablesArr[] = "dbo.ReporteCorporaciónEspecialidad";
$nonAdminTablesArr[] = "dbo.CorporacionesView";
$nonAdminTablesArr[] = "dbo.Fechas";
$nonAdminTablesArr[] = "dbo.AuditoriasProcesosView";
$nonAdminTablesArr[] = "dbo.ProcesosReasignar";
$nonAdminTablesArr[] = "dbo.Genero";
$nonAdminTablesArr[] = "dbo.Ciudades2";
$nonAdminTablesArr[] = "dbo.Ciudades4";
$nonAdminTablesArr[] = "dbo.Ciudades5";
$nonAdminTablesArr[] = "dbo.Ciudades3";
$nonAdminTablesArr[] = "dbo.Uvbs";
$nonAdminTablesArr[] = "Resumen_Mensual";
$nonAdminTablesArr[] = "dbo.tipoRecaudo";
$nonAdminTablesArr[] = "dbo.Despachos2";
$nonAdminTablesArr[] = "dbo.Despachos5";
$nonAdminTablesArr[] = "BDME Actualización";
$nonAdminTablesArr[] = "BDME Guía del Deudor Moroso";
$nonAdminTablesArr[] = "BDME Incumplimiento Acuerdo de Pago Semestral";
$nonAdminTablesArr[] = "BDME Retiros";
$nonAdminTablesArr[] = "BDME Reporte Semestral";
$nonAdminTablesArr[] = "BDME Cancelación Acuerdo de Pago";
$nonAdminTablesArr[] = "BDME Excluidos";
$nonAdminTablesArr[] = "Base de Datos - Historico";
$nonAdminTablesArr[] = "Deterioro de Cartera por Proceso";
$nonAdminTablesArr[] = "Intereses por Proceso";
$nonAdminTablesArr[] = "Listado Medidas Cautelares";
$nonAdminTablesArr[] = "Presunción Prescripción";
$nonAdminTablesArr[] = "Certificado del Resumen Mensual";
$nonAdminTablesArr[] = "Certificado del Resumen por Periodo";
$nonAdminTablesArr[] = "BDME Actualización DataChild";
$nonAdminTablesArr[] = "BDME Cancelación Acuerdo de Pago DataChild";
$nonAdminTablesArr[] = "BDME Excluidos DataChild";
$nonAdminTablesArr[] = "BDME Incumplimiento Acuerdo de Pago Semestral DataChild";
$nonAdminTablesArr[] = "BDME Reporte Semestral Datachild";
$nonAdminTablesArr[] = "BDME Retiros DataChild";
$nonAdminTablesArr[] = "dbo.BusquedasPropiedades";
$nonAdminTablesArr[] = "dbo.ProcesosView1";
$nonAdminTablesArr[] = "Obligaciones de Dificil Recaudo";
$nonAdminTablesArr[] = "Privados de la Libertad";
$nonAdminTablesArr[] = "Recaudos por Años";
$nonAdminTablesArr[] = "Reportes";
$nonAdminTablesArr[] = "Reportes DataChild prescritos con resolución expedida_Solidarios";
$nonAdminTablesArr[] = "Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes";
$nonAdminTablesArr[] = "Transacciones Usuario";
$nonAdminTablesArr[] = "Indicadores de Gestión";
$nonAdminTablesArr[] = "Tablero de Control General";
$nonAdminTablesArr[] = "Tablero de Control Total Procesos";
$nonAdminTablesArr[] = "Tableros_RecaudoSeccional";
$nonAdminTablesArr[] = "Total Procesos";
$nonAdminTablesArr[] = "Total Recaudado";
$nonAdminTablesArr[] = "Procesos - Mes";
$nonAdminTablesArr[] = "Recaudo - Mes";
$nonAdminTablesArr[] = "Tablero de Control Gestión";
$nonAdminTablesArr[] = "Actuaciones Por Mes";
$nonAdminTablesArr[] = "dbo.ProcesosSancionados";
$nonAdminTablesArr[] = "BienesInmuebles";
$nonAdminTablesArr[] = "BienesMuebles";
$nonAdminTablesArr[] = "Productos Bancarios";
$nonAdminTablesArr[] = "dbo.tipoTasas";
$nonAdminTablesArr[] = "Acuerdo de Pago";
$nonAdminTablesArr[] = "Listado de Chequeos";
$nonAdminTablesArr[] = "Listado de Chequeo Sancionado DataChild";
$nonAdminTablesArr[] = "Listado de Chequeo Oficios DataChild";
$nonAdminTablesArr[] = "Listado de Chequeo Motivo devolucion DataChild";
$nonAdminTablesArr[] = "Clasificaciones -- Cartera";
$nonAdminTablesArr[] = "Corporaciones - Especialidades";
$nonAdminTablesArr[] = "Mandamientos de pago Automaticos";
$nonAdminTablesArr[] = "Prescripciones Automática";
$nonAdminTablesArr[] = "Procesos Sin Notificación";
$nonAdminTablesArr[] = "Remanentes-";
$nonAdminTablesArr[] = "Prueba Archivo Plano";
$nonAdminTablesArr[] = "Consulta Pública";
$nonAdminTablesArr[] = "Consulta Pública Notificación Detalle";
$nonAdminTablesArr[] = "Consulta Pública Generación Desprendible";
$nonAdminTablesArr[] = "dbo.Pagos2";
$nonAdminTablesArr[] = "dbo.Propiedades2";
$nonAdminTablesArr[] = "dbo.Motivos1";
$nonAdminTablesArr[] = "dbo.Etapas1";
$nonAdminTablesArr[] = "dbo.Estados1";
$nonAdminTablesArr[] = "dbo.Aplazamientos";
$nonAdminTablesArr[] = "dbo.Seccionales1";
$nonAdminTablesArr[] = "dbo.Naturalezas1";
$nonAdminTablesArr[] = "dbo.Calificaciones";
$nonAdminTablesArr[] = "dbo.Niveles1";
$nonAdminTablesArr[] = "dbo.Niveles2";
$nonAdminTablesArr[] = "dbo.Conceptos2";
$nonAdminTablesArr[] = "dbo.PropiedadesMedidas";
$nonAdminTablesArr[] = "Consolidado por Conceptos";
$nonAdminTablesArr[] = "Movimiento Mensual";
$nonAdminTablesArr[] = "Informe ejecutivo de Gestión";
$nonAdminTablesArr[] = "Cumplimiento de metas de Recaudo";
$nonAdminTablesArr[] = "Indicadores de búsqueda";
$nonAdminTablesArr[] = "Indicadores Recaudos";
$nonAdminTablesArr[] = "Indicadores Sin Actuaciones";
$nonAdminTablesArr[] = "Test de Deterioro (Resumen)";
$nonAdminTablesArr[] = "dbo.Novedades";
$nonAdminTablesArr[] = "dbo.ProcesosCorrespondencias";
$nonAdminTablesArr[] = "dbo.CorrespondenciaMasiva";
$nonAdminTablesArr[] = "dbo.UsuariosSeccionales";
$nonAdminTablesArr[] = "dbo.UsuariosCarteraTipos";
$nonAdminTablesArr[] = "dbo.webpages_Roles";
$nonAdminTablesArr[] = "dbo.webpages_UsersInRoles";
$nonAdminTablesArr[] = "dbo.UsuGCC-ugmembers";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "dbo.UsuGCC-uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "dbo.UsuGCC-ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "dbo.UsuGCC-ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}