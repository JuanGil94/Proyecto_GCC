<?php
class AuditTrailTable
{
	var $logTableName="dbo.usugcc-_audit";
	var $params;

	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $strUserinfo="change userinfo";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength;

	/**
	 * @type Connection
	 */
	protected $connection;

	function __construct()
	{
		global $cman;
		global $auditMaxFieldLength;

		$this->connection = $cman->getForAudit();
		$userid="";
		if( Security::getUserName())
			$userid = Security::getUserName();

		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"], Security::getUserName() );
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogin, "");
		}
		return $retval;
    }

    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strFailLogin, "");
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }

    function LogLogout()
    {
	global $globalEvents;
	if( Security::getUserName() !="" )
	{
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogout, "");
		}
		return $retval;
	}
    }

    function LogChPassword( $username )
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		$this->params[ 1 ] = $username;
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strChPass, "");
		}
		return $retval;
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
	}
	
	/**
	* not used yet 
	* format audit values as a string
	 * @param Array $newValues
	 * @param Array $oldValues
	 * @param Array include - list of fields to include into return value
	 * @return String
	 */
	function formatChangedValues( $pSet, $newValues, $oldValues, $include = null ) {
		
		$strings = array();
		foreach($newValues as $kefieldy => $value )
		{
			if( $include ) {
				//	ASP
				if( !isset( $include[ $field ] ) ) {
					continue;
				}
			}

			$type = $pSet->getFieldType( $field );
			if( IsBinaryType($type) )
				continue;
			
			if( IsDateFieldType($type) ) {
				$newValue = format_datetime_custom(db2time( $newValues[$field] ),"yyyy-MM-dd HH:mm:ss");
				$oldValue = format_datetime_custom(db2time( $oldValues[$field] ),"yyyy-MM-dd HH:mm:ss");
			} else {
				$newValue = $newValues[$field];
				$oldValue = $oldValues[$field];
			}
			
			if( $newValue == $oldValue ) {
				continue;
			}
			
			$strOld = $field . " [old]: " . $this->formatValue( $type, $oldValue );
			$strNew = $field . " [new]: " . $this->formatValue( $type, $newValue );
			$string[] = $strOld . "\r\n" . $strNew;

		}
		return implode( "\r\n", $strings );
	}

	function formatValue( $type, $value ) {
		if(IsBinaryType($type)) {
			return "<binary value>"; 
		} else {
			$value = str_replace(array("\r\n","\n","\t")," ", $value );
			return $this->getMaxLengthSubstr( $value );
		}
	}

    function LogEdit($str_table,$newvalues,$oldvalues, $keys )
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";

						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }

    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }

    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;

			$this->connection->exec( $sql );
		}

    }

    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }

	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;

			$qResult = $this->connection->query( $sql );

			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}

			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}

	function logValueEnable($table)
	{
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="dbo.UsuGCC-_users")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="dbo.Abogados")
		{
			return true;
		}
		if($table=="dbo.Actuaciones")
		{
			return true;
		}
		if($table=="dbo.Ciudades")
		{
			return true;
		}
		if($table=="dbo.Conceptos")
		{
			return true;
		}
		if($table=="dbo.Departamentos")
		{
			return true;
		}
		if($table=="dbo.Despachos")
		{
			return true;
		}
		if($table=="dbo.Empresas")
		{
			return true;
		}
		if($table=="dbo.Entidades")
		{
			return true;
		}
		if($table=="dbo.Especialidades")
		{
			return true;
		}
		if($table=="dbo.Estados")
		{
			return true;
		}
		if($table=="dbo.Etapas")
		{
			return true;
		}
		if($table=="dbo.Festivos")
		{
			return true;
		}
		if($table=="dbo.MotivosDevoluciones")
		{
			return true;
		}
		if($table=="dbo.Naturalezas")
		{
			return true;
		}
		if($table=="dbo.Niveles")
		{
			return true;
		}
		if($table=="dbo.Oficios")
		{
			return true;
		}
		if($table=="dbo.Operaciones")
		{
			return true;
		}
		if($table=="dbo.Parejas")
		{
			return true;
		}
		if($table=="dbo.Presupuestos")
		{
			return true;
		}
		if($table=="dbo.Reportes")
		{
			return true;
		}
		if($table=="dbo.Salarios")
		{
			return true;
		}
		if($table=="dbo.Seccionales")
		{
			return true;
		}
		if($table=="dbo.Test")
		{
			return true;
		}
		if($table=="dbo.Uvts")
		{
			return true;
		}
		if($table=="dbo.CarteraTipos")
		{
			return true;
		}
		if($table=="dbo.Chequeos")
		{
			return true;
		}
		if($table=="dbo.ChequeosOficios")
		{
			return true;
		}
		if($table=="dbo.ChequeosSancionados")
		{
			return true;
		}
		if($table=="dbo.Devoluciones")
		{
			return true;
		}
		if($table=="dbo.Horarios")
		{
			return true;
		}
		if($table=="dbo.UsuGCC-uggroups")
		{
			return true;
		}
		if($table=="dbo.IPsRestringidas")
		{
			return true;
		}
		if($table=="dbo.TiposDocumentos")
		{
			return true;
		}
		if($table=="dbo.Tramites")
		{
			return true;
		}
		if($table=="dbo.Conceptos1")
		{
			return true;
		}
		if($table=="dbo.Procesos")
		{
			return true;
		}
		if($table=="dbo.Solidarios")
		{
			return true;
		}
		if($table=="dbo.Llamadas")
		{
			return true;
		}
		if($table=="dbo.Medidas")
		{
			return true;
		}
		if($table=="dbo.Acuerdos")
		{
			return true;
		}
		if($table=="dbo.Pagos1")
		{
			return true;
		}
		if($table=="dbo.Cuentas")
		{
			return true;
		}
		if($table=="dbo.Intereses")
		{
			return true;
		}
		if($table=="dbo.Reasignaciones")
		{
			return false;
		}
		if($table=="dbo.Suspensiones")
		{
			return false;
		}
		if($table=="dbo.Suspensiones1")
		{
			return false;
		}
		if($table=="dbo.Interrupciones")
		{
			return false;
		}
		if($table=="dbo.Reliquidaciones")
		{
			return false;
		}
		if($table=="dbo.Ayudas")
		{
			return false;
		}
		if($table=="dbo.Temas")
		{
			return false;
		}
		if($table=="dbo.Correspondencias")
		{
			return false;
		}
		if($table=="dbo.usugcc-_audit")
		{
			return false;
		}
		if($table=="dbo.Importaciones")
		{
			return false;
		}
		if($table=="dbo.Indeterminados")
		{
			return false;
		}
		if($table=="dbo.UserProfile")
		{
			return false;
		}
		if($table=="dbo.Auditorias")
		{
			return false;
		}
		if($table=="dbo.Menus")
		{
			return false;
		}
		if($table=="dbo.Minjusticia")
		{
			return false;
		}
		if($table=="dbo.Minjusticia2")
		{
			return false;
		}
		if($table=="dbo.Minjusticia3")
		{
			return false;
		}
		if($table=="dbo.Actas")
		{
			return false;
		}
		if($table=="dbo.AlertasTipos")
		{
			return false;
		}
		if($table=="dbo.Direcciones")
		{
			return false;
		}
		if($table=="dbo.Propiedades")
		{
			return false;
		}
		if($table=="dbo.Propiedades1")
		{
			return false;
		}
		if($table=="dbo.Propiedades3")
		{
			return false;
		}
		if($table=="dbo.Correspondencias1")
		{
			return false;
		}
		if($table=="dbo.Bancos")
		{
			return false;
		}
		if($table=="dbo.Motivos")
		{
			return false;
		}
		if($table=="dbo.Oficios Sigobius")
		{
			return true;
		}
		if($table=="Tasas Tributarias")
		{
			return false;
		}
		if($table=="Tasas Comerciales")
		{
			return false;
		}
		if($table=="Tasas TES (Deterioro de Cartera)")
		{
			return false;
		}
		if($table=="dbo.Carceles")
		{
			return false;
		}
		if($table=="dbo.Alertas")
		{
			return false;
		}
		if($table=="dbo.tipoCobro")
		{
			return false;
		}
		if($table=="dbo.Oficios1")
		{
			return true;
		}
		if($table=="dbo.OperacionTipo")
		{
			return false;
		}
		if($table=="dbo.Ciudades1")
		{
			return true;
		}
		if($table=="dbo.Autorizaciones")
		{
			return true;
		}
		if($table=="dbo.Liquidaciones")
		{
			return false;
		}
		if($table=="dbo.usugcc__noti")
		{
			return false;
		}
		if($table=="dbo.Sancionados")
		{
			return false;
		}
		if($table=="dbo.Seguimiento y control de Acuerdos")
		{
			return false;
		}
		if($table=="dbo.Despachos4")
		{
			return true;
		}
		if($table=="dbo.Despachos1")
		{
			return true;
		}
		if($table=="dbo.Remanentes Report")
		{
			return false;
		}
		if($table=="dbo.ProcesosPrescritos")
		{
			return true;
		}
		if($table=="dbo.Prescritos Report")
		{
			return false;
		}
		if($table=="dbo.AlertMandPago")
		{
			return true;
		}
		if($table=="AlertNotMandPago")
		{
			return true;
		}
		if($table=="AlertIncAcuPago")
		{
			return true;
		}
		if($table=="AlertSinPersuasivo")
		{
			return true;
		}
		if($table=="AlertBusqBienes")
		{
			return true;
		}
		if($table=="AlertSegAdelante")
		{
			return true;
		}
		if($table=="AlertIntSusp")
		{
			return true;
		}
		if($table=="dbo.ReporteMandamientos")
		{
			return false;
		}
		if($table=="dbo.ListaChequeosReporte")
		{
			return false;
		}
		if($table=="dbo.ReporteClasificacionCartera")
		{
			return false;
		}
		if($table=="dbo.ProcesosSinNotificaReport")
		{
			return false;
		}
		if($table=="dbo.ReporteCorporaciónEspecialidad")
		{
			return false;
		}
		if($table=="dbo.CorporacionesView")
		{
			return false;
		}
		if($table=="dbo.Fechas")
		{
			return false;
		}
		if($table=="dbo.AuditoriasProcesosView")
		{
			return false;
		}
		if($table=="dbo.ProcesosReasignar")
		{
			return true;
		}
		if($table=="dbo.Genero")
		{
			return false;
		}
		if($table=="admin_admembers")
		{
			return false;
		}
		if($table=="dbo.Ciudades2")
		{
			return true;
		}
		if($table=="dbo.Ciudades4")
		{
			return true;
		}
		if($table=="dbo.Ciudades5")
		{
			return true;
		}
		if($table=="dbo.Ciudades3")
		{
			return true;
		}
		if($table=="dbo.Uvbs")
		{
			return false;
		}
		if($table=="Resumen_Mensual")
		{
			return false;
		}
		if($table=="dbo.tipoRecaudo")
		{
			return false;
		}
		if($table=="dbo.Despachos2")
		{
			return true;
		}
		if($table=="dbo.Despachos5")
		{
			return true;
		}
		if($table=="BDME Actualización")
		{
			return false;
		}
		if($table=="BDME Guía del Deudor Moroso")
		{
			return false;
		}
		if($table=="BDME Incumplimiento Acuerdo de Pago Semestral")
		{
			return false;
		}
		if($table=="BDME Retiros")
		{
			return false;
		}
		if($table=="BDME Reporte Semestral")
		{
			return false;
		}
		if($table=="BDME Cancelación Acuerdo de Pago")
		{
			return false;
		}
		if($table=="BDME Excluidos")
		{
			return false;
		}
		if($table=="Base de Datos - Historico")
		{
			return false;
		}
		if($table=="Deterioro de Cartera por Proceso")
		{
			return false;
		}
		if($table=="Intereses por Proceso")
		{
			return false;
		}
		if($table=="Listado Medidas Cautelares")
		{
			return false;
		}
		if($table=="Presunción Prescripción")
		{
			return false;
		}
		if($table=="Certificado del Resumen Mensual")
		{
			return false;
		}
		if($table=="Certificado del Resumen por Periodo")
		{
			return false;
		}
		if($table=="BDME Actualización DataChild")
		{
			return false;
		}
		if($table=="BDME Cancelación Acuerdo de Pago DataChild")
		{
			return false;
		}
		if($table=="BDME Excluidos DataChild")
		{
			return false;
		}
		if($table=="BDME Incumplimiento Acuerdo de Pago Semestral DataChild")
		{
			return false;
		}
		if($table=="BDME Reporte Semestral Datachild")
		{
			return false;
		}
		if($table=="BDME Retiros DataChild")
		{
			return false;
		}
		if($table=="dbo.BusquedasPropiedades")
		{
			return false;
		}
		if($table=="dbo.ProcesosView1")
		{
			return false;
		}
	}

	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table").
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip).
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action).
			"," .$this->connection->prepareString($description).
			")";

		return $this->connection->exec( $sql );
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength;

	function __construct()
	{
		global $auditMaxFieldLength;

		$userid = "";
		if(@Security::getUserName())
			$userid = Security::getUserName();

		$this->params = array($_SERVER["REMOTE_ADDR"], $userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogLogout()
    {
		global $globalEvents;
		if(Security::getUserName() != "" )
		{
			$retval=true;
			$table=Security::loginTable();
			$arr=array();
			if($globalEvents->exists("OnAuditLog"))
				$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
			if($retval)
			{
				$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
				$this->writeToLogFile( $str );
			}
			return $retval;
		}
    }

    function LogChPassword( $username )
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		$this->params[ 1 ] = $username;
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1 = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}

						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2 = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v2 = $this->getMaxLengthSubstr( $v2 );
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v = str_replace(array("\r\n","\n","\t")," ",$val);
						$v = $this->getMaxLengthSubstr( $v );
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;

		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );

	}

	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LoginAccess()
	{
		return false;
	}

	function LoginSuccessful()
    {
		return true;
    }

    function LoginUnsuccessful($pUsername)
    {
		return true;
	}

	function logValueEnable($table)
	{
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="dbo.UsuGCC-_users")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="dbo.Abogados")
		{
			return true;
		}
		if($table=="dbo.Actuaciones")
		{
			return true;
		}
		if($table=="dbo.Ciudades")
		{
			return true;
		}
		if($table=="dbo.Conceptos")
		{
			return true;
		}
		if($table=="dbo.Departamentos")
		{
			return true;
		}
		if($table=="dbo.Despachos")
		{
			return true;
		}
		if($table=="dbo.Empresas")
		{
			return true;
		}
		if($table=="dbo.Entidades")
		{
			return true;
		}
		if($table=="dbo.Especialidades")
		{
			return true;
		}
		if($table=="dbo.Estados")
		{
			return true;
		}
		if($table=="dbo.Etapas")
		{
			return true;
		}
		if($table=="dbo.Festivos")
		{
			return true;
		}
		if($table=="dbo.MotivosDevoluciones")
		{
			return true;
		}
		if($table=="dbo.Naturalezas")
		{
			return true;
		}
		if($table=="dbo.Niveles")
		{
			return true;
		}
		if($table=="dbo.Oficios")
		{
			return true;
		}
		if($table=="dbo.Operaciones")
		{
			return true;
		}
		if($table=="dbo.Parejas")
		{
			return true;
		}
		if($table=="dbo.Presupuestos")
		{
			return true;
		}
		if($table=="dbo.Reportes")
		{
			return true;
		}
		if($table=="dbo.Salarios")
		{
			return true;
		}
		if($table=="dbo.Seccionales")
		{
			return true;
		}
		if($table=="dbo.Test")
		{
			return true;
		}
		if($table=="dbo.Uvts")
		{
			return true;
		}
		if($table=="dbo.CarteraTipos")
		{
			return true;
		}
		if($table=="dbo.Chequeos")
		{
			return true;
		}
		if($table=="dbo.ChequeosOficios")
		{
			return true;
		}
		if($table=="dbo.ChequeosSancionados")
		{
			return true;
		}
		if($table=="dbo.Devoluciones")
		{
			return true;
		}
		if($table=="dbo.Horarios")
		{
			return true;
		}
		if($table=="dbo.UsuGCC-uggroups")
		{
			return true;
		}
		if($table=="dbo.IPsRestringidas")
		{
			return true;
		}
		if($table=="dbo.TiposDocumentos")
		{
			return true;
		}
		if($table=="dbo.Tramites")
		{
			return true;
		}
		if($table=="dbo.Conceptos1")
		{
			return true;
		}
		if($table=="dbo.Procesos")
		{
			return true;
		}
		if($table=="dbo.Solidarios")
		{
			return true;
		}
		if($table=="dbo.Llamadas")
		{
			return true;
		}
		if($table=="dbo.Medidas")
		{
			return true;
		}
		if($table=="dbo.Acuerdos")
		{
			return true;
		}
		if($table=="dbo.Pagos1")
		{
			return true;
		}
		if($table=="dbo.Cuentas")
		{
			return true;
		}
		if($table=="dbo.Intereses")
		{
			return true;
		}
		if($table=="dbo.Reasignaciones")
		{
			return false;
		}
		if($table=="dbo.Suspensiones")
		{
			return false;
		}
		if($table=="dbo.Suspensiones1")
		{
			return false;
		}
		if($table=="dbo.Interrupciones")
		{
			return false;
		}
		if($table=="dbo.Reliquidaciones")
		{
			return false;
		}
		if($table=="dbo.Ayudas")
		{
			return false;
		}
		if($table=="dbo.Temas")
		{
			return false;
		}
		if($table=="dbo.Correspondencias")
		{
			return false;
		}
		if($table=="dbo.usugcc-_audit")
		{
			return false;
		}
		if($table=="dbo.Importaciones")
		{
			return false;
		}
		if($table=="dbo.Indeterminados")
		{
			return false;
		}
		if($table=="dbo.UserProfile")
		{
			return false;
		}
		if($table=="dbo.Auditorias")
		{
			return false;
		}
		if($table=="dbo.Menus")
		{
			return false;
		}
		if($table=="dbo.Minjusticia")
		{
			return false;
		}
		if($table=="dbo.Minjusticia2")
		{
			return false;
		}
		if($table=="dbo.Minjusticia3")
		{
			return false;
		}
		if($table=="dbo.Actas")
		{
			return false;
		}
		if($table=="dbo.AlertasTipos")
		{
			return false;
		}
		if($table=="dbo.Direcciones")
		{
			return false;
		}
		if($table=="dbo.Propiedades")
		{
			return false;
		}
		if($table=="dbo.Propiedades1")
		{
			return false;
		}
		if($table=="dbo.Propiedades3")
		{
			return false;
		}
		if($table=="dbo.Correspondencias1")
		{
			return false;
		}
		if($table=="dbo.Bancos")
		{
			return false;
		}
		if($table=="dbo.Motivos")
		{
			return false;
		}
		if($table=="dbo.Oficios Sigobius")
		{
			return true;
		}
		if($table=="Tasas Tributarias")
		{
			return false;
		}
		if($table=="Tasas Comerciales")
		{
			return false;
		}
		if($table=="Tasas TES (Deterioro de Cartera)")
		{
			return false;
		}
		if($table=="dbo.Carceles")
		{
			return false;
		}
		if($table=="dbo.Alertas")
		{
			return false;
		}
		if($table=="dbo.tipoCobro")
		{
			return false;
		}
		if($table=="dbo.Oficios1")
		{
			return true;
		}
		if($table=="dbo.OperacionTipo")
		{
			return false;
		}
		if($table=="dbo.Ciudades1")
		{
			return true;
		}
		if($table=="dbo.Autorizaciones")
		{
			return true;
		}
		if($table=="dbo.Liquidaciones")
		{
			return false;
		}
		if($table=="dbo.usugcc__noti")
		{
			return false;
		}
		if($table=="dbo.Sancionados")
		{
			return false;
		}
		if($table=="dbo.Seguimiento y control de Acuerdos")
		{
			return false;
		}
		if($table=="dbo.Despachos4")
		{
			return true;
		}
		if($table=="dbo.Despachos1")
		{
			return true;
		}
		if($table=="dbo.Remanentes Report")
		{
			return false;
		}
		if($table=="dbo.ProcesosPrescritos")
		{
			return true;
		}
		if($table=="dbo.Prescritos Report")
		{
			return false;
		}
		if($table=="dbo.AlertMandPago")
		{
			return true;
		}
		if($table=="AlertNotMandPago")
		{
			return true;
		}
		if($table=="AlertIncAcuPago")
		{
			return true;
		}
		if($table=="AlertSinPersuasivo")
		{
			return true;
		}
		if($table=="AlertBusqBienes")
		{
			return true;
		}
		if($table=="AlertSegAdelante")
		{
			return true;
		}
		if($table=="AlertIntSusp")
		{
			return true;
		}
		if($table=="dbo.ReporteMandamientos")
		{
			return false;
		}
		if($table=="dbo.ListaChequeosReporte")
		{
			return false;
		}
		if($table=="dbo.ReporteClasificacionCartera")
		{
			return false;
		}
		if($table=="dbo.ProcesosSinNotificaReport")
		{
			return false;
		}
		if($table=="dbo.ReporteCorporaciónEspecialidad")
		{
			return false;
		}
		if($table=="dbo.CorporacionesView")
		{
			return false;
		}
		if($table=="dbo.Fechas")
		{
			return false;
		}
		if($table=="dbo.AuditoriasProcesosView")
		{
			return false;
		}
		if($table=="dbo.ProcesosReasignar")
		{
			return true;
		}
		if($table=="dbo.Genero")
		{
			return false;
		}
		if($table=="admin_admembers")
		{
			return false;
		}
		if($table=="dbo.Ciudades2")
		{
			return true;
		}
		if($table=="dbo.Ciudades4")
		{
			return true;
		}
		if($table=="dbo.Ciudades5")
		{
			return true;
		}
		if($table=="dbo.Ciudades3")
		{
			return true;
		}
		if($table=="dbo.Uvbs")
		{
			return false;
		}
		if($table=="Resumen_Mensual")
		{
			return false;
		}
		if($table=="dbo.tipoRecaudo")
		{
			return false;
		}
		if($table=="dbo.Despachos2")
		{
			return true;
		}
		if($table=="dbo.Despachos5")
		{
			return true;
		}
		if($table=="BDME Actualización")
		{
			return false;
		}
		if($table=="BDME Guía del Deudor Moroso")
		{
			return false;
		}
		if($table=="BDME Incumplimiento Acuerdo de Pago Semestral")
		{
			return false;
		}
		if($table=="BDME Retiros")
		{
			return false;
		}
		if($table=="BDME Reporte Semestral")
		{
			return false;
		}
		if($table=="BDME Cancelación Acuerdo de Pago")
		{
			return false;
		}
		if($table=="BDME Excluidos")
		{
			return false;
		}
		if($table=="Base de Datos - Historico")
		{
			return false;
		}
		if($table=="Deterioro de Cartera por Proceso")
		{
			return false;
		}
		if($table=="Intereses por Proceso")
		{
			return false;
		}
		if($table=="Listado Medidas Cautelares")
		{
			return false;
		}
		if($table=="Presunción Prescripción")
		{
			return false;
		}
		if($table=="Certificado del Resumen Mensual")
		{
			return false;
		}
		if($table=="Certificado del Resumen por Periodo")
		{
			return false;
		}
		if($table=="BDME Actualización DataChild")
		{
			return false;
		}
		if($table=="BDME Cancelación Acuerdo de Pago DataChild")
		{
			return false;
		}
		if($table=="BDME Excluidos DataChild")
		{
			return false;
		}
		if($table=="BDME Incumplimiento Acuerdo de Pago Semestral DataChild")
		{
			return false;
		}
		if($table=="BDME Reporte Semestral Datachild")
		{
			return false;
		}
		if($table=="BDME Retiros DataChild")
		{
			return false;
		}
		if($table=="dbo.BusquedasPropiedades")
		{
			return false;
		}
		if($table=="dbo.ProcesosView1")
		{
			return false;
		}
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}
?>