<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


		$this->events["AfterUnsuccessfulLogin"]=true;


//	onscreen events
		$this->events["dbo_Chequeos_snippet"] = true;
		$this->events["dbo_Correspondencias_snippet"] = true;
		$this->events["dbo_Chequeos_snippet1"] = true;
		$this->events["dbo_Liquidaciones_snippet"] = true;
		$this->events["dbo_Procesos_snippet"] = true;
		$this->events["dbo_Procesos_snippet1"] = true;
		$this->events["dbo_Liquidaciones_snippet1"] = true;
		$this->events["SumCostas"] = true;
		$this->events["SumIntereses"] = true;
		$this->events["SumIntPlazo"] = true;
		$this->events["SumCuota"] = true;
		$this->events["SumIntereses1"] = true;
		$this->events["SumaInteresesTable"] = true;
		$this->events["Dias"] = true;
		$this->events["dbo_Chequeos_snippet2"] = true;
		$this->events["Resumen_Mensual"] = true;
		$this->events["BDME_Actualizaci_n_Desde"] = true;
		$this->events["BDME_Actualizaci_n_Hasta"] = true;
		$this->events["BDME_Actualizaci_n_Sansionado"] = true;
		$this->events["BDME_Actualizaci_n_Document_San"] = true;
		$this->events["BDME_Cancelaci_n_Acuerdo_de_Pago_Desde"] = true;
		$this->events["BDME_Cancelaci_n_Acuerdo_de_Pago_Hasta"] = true;
		$this->events["BDME_Excluidos_Mes"] = true;
		$this->events["BDME_Excluidos_Sancionado"] = true;
		$this->events["BDME_Excluidos_Documento"] = true;
		$this->events["BDME_Excluidos_DataChild_Total"] = true;
		$this->events["BDME_Excluidos_DataChild_snippet"] = true;
		$this->events["BDME_Gu_a_del_Deudor_Moroso_Mes"] = true;
		$this->events["BDME_Incumplimiento_Acuerdo_de_Pago_Semestral_Mes"] = true;
		$this->events["BDME_Reporte_Semestral_Mes"] = true;
		$this->events["BDME_Reporte_Semestral_Sancionado"] = true;
		$this->events["BDME_Reporte_Semestral_Documento"] = true;
		$this->events["BDME_Reporte_Semestral_Datachild_Contar"] = true;
		$this->events["BDME_Reporte_Semestral_Datachild_Total"] = true;
		$this->events["BDME_Retiros_Desde"] = true;
		$this->events["BDME_Retiros_Hasta"] = true;
		$this->events["BDME_Retiros_DataChild_Contar"] = true;
		$this->events["BDME_Retiros_DataChild_Total"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_Contar"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_Saldo"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_Recobrable"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_VPN"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_Deterioro"] = true;
		$this->events["Deterioro_de_Cartera_por_Proceso_Mes"] = true;
		$this->events["Intereses_por_Proceso_Ano"] = true;
		$this->events["Listado_Medidas_Cautelares_Sancionado"] = true;
		$this->events["Listado_Medidas_Cautelares_Documento"] = true;
		$this->events["Listado_Medidas_Cautelares_Total"] = true;
		$this->events["Listado_Medidas_Cautelares_Total_Rematado"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Mes"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Total_Procesos"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Obligacion_Total"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Total_Costas"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Total_Intereses"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Total_Saldo"] = true;
		$this->events["Obligaciones_de_Dificil_Recaudo_Total_Deterioro"] = true;
		$this->events["Privados_de_la_Libertad_Sancionado"] = true;
		$this->events["Privados_de_la_Libertad_Documento_Sancionado"] = true;
		$this->events["Recaudos_por_A_os_Obligacion"] = true;
		$this->events["Recaudos_por_A_os_Costas"] = true;
		$this->events["Recaudos_por_A_os_Inte"] = true;
		$this->events["global__pageObject_"] = true;
		$this->events["Recaudos_por_A_os_Recaudo_Terminado"] = true;
		$this->events["Recaudos_por_A_os_Total_Recaudo"] = true;
		$this->events["Recaudos_por_A_os_Ano"] = true;
		$this->events["Reportes_snippet_checklist"] = true;
		$this->events["Reportes_seccional_Cartera"] = true;
		$this->events["Intereses_por_Proceso_Cartera_Seccional"] = true;
		$this->events["Intereses_por_Proceso_Total_Enero"] = true;
		$this->events["Intereses_por_Proceso_Total_Febreo"] = true;
		$this->events["Intereses_por_Proceso_Total_Marzo"] = true;
		$this->events["Intereses_por_Proceso_Total_Abril"] = true;
		$this->events["Intereses_por_Proceso_Total_Mayo"] = true;
		$this->events["Intereses_por_Proceso_Total_Junio"] = true;
		$this->events["Intereses_por_Proceso_Total_Junio1"] = true;
		$this->events["Intereses_por_Proceso_Total_Agosto"] = true;
		$this->events["Intereses_por_Proceso_Total_Septiembre"] = true;
		$this->events["Intereses_por_Proceso_Total_Octubre"] = true;
		$this->events["Intereses_por_Proceso_Total_Noviembre"] = true;
		$this->events["Intereses_por_Proceso_Total_Diciembre"] = true;
		$this->events["Intereses_por_Proceso_Total_Intereses_Total"] = true;
		$this->events["Transacciones_Usuario_Ano"] = true;
		$this->events["Presunci_n_Prescripci_n_Mes"] = true;
		$this->events["Indicadores_de_Gesti_n_Ano"] = true;
		$this->events["Indicadores_de_Gesti_n_Total_Procesos"] = true;
		$this->events["Indicadores_de_Gesti_n_Valor"] = true;
		$this->events["Indicadores_de_Gesti_n_Recaudo"] = true;
		$this->events["Indicadores_de_Gesti_n_Saldo"] = true;
		$this->events["Tablero_de_Control_Desde"] = true;
		$this->events["Tablero_de_Control_Hasta"] = true;
		$this->events["Tablero_de_Control_Cartera"] = true;
		$this->events["Tablero_de_Control_GESTION_CARTERA_SECCIONAL"] = true;
		$this->events["Tablero_de_Control_GESTION_DESDE"] = true;
		$this->events["Tablero_de_Control_GESTION_HASTA"] = true;
		$this->events["Base_de_Datos___Historico_snippet"] = true;
		$this->events["Base_de_Datos___Historico_Seccional_Cartera"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		//echo "<script>alert('HOLAAAAAA, HOLAASAAAAA');</script>";
//phpinfo();
$arraySeccionales=array();
$arrayCiudades=array();
$username=$_SESSION["UserData"]["username"];
//variables para informes:
$_SESSION["UserNameF"]=$username;
$_SESSION["fechaIn"]='2024-04-01';
//buscar el UserId
$consulta=DB::Query("SELECT * from UserProfile where UserName='".$username."'");
while( $date = $consulta->fetchAssoc() )
{
	$userId=$date["UserId"];
	$_SESSION["AbogadoId"]=$date["AbogadoId"];
	$_SESSION["CarteraTipoId"]=$date["CarteraTipoId"];
	$_SESSION["SeccionalUser"]=$date["SeccionalId"];
}
echo "<script>alert('HOLAAAAAA, HOLAASAAAAA');</script>";
$_SESSION["UserId"]=$userId;
//createNotification( array( "message" => "New category added: ", "title" => "New category", "icon" => "fa-envelope") );  
//buscar las seccionales pertenecientes al UserId
$userId=intval($userId);
$consulta=DB::Query("SELECT * from UsuariosSeccionales where UserId=".$userId);
while( $date = $consulta->fetchAssoc() )
{
	$arraySeccionales[]=intval($date["SeccionalId"]);
}
//Se asignan las seccionales en array para agregar al where
$_SESSION["SeccionalesWhere"]=$arraySeccionales;
$arraySeccionales=implode(",",$arraySeccionales);

//Se asignan las Seccionales d elos usuarios logueados a la variable Global
$_SESSION["Seccionales"]=$arraySeccionales;

$consulta=DB::Query("SELECT * from Seccionales where SeccionalId in (".$arraySeccionales.")");
while( $date = $consulta->fetchAssoc() )
{
	$arrayCiudades[]=intval($date["CiudadId"]);
}
$_SESSION["Ciudades"]=$arrayCiudades;


DB::Delete("usugcc__noti", "[user]='$username'" ); //borrar las notificacione sexistenten para insertar las nuevas
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=1
$consulta=DB::Query("SELECT COUNT(Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activos
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 1) -- Prescripción
                      AND (AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND ((FORMAT(DATEADD(DAY,dbo.Procesos.Dias,GETDATE()),'yyyy/MM/dd')))  <= ((FORMAT(DATEADD(DAY,dbo.Alertas.Dias,GETDATE()),'yyyy/MM/dd')))");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-Prescripcion", "ALERTA PRESCRIPCION", "glyphicon-tag", "http://localhost:8086/dbo_procesosprescritos_list.php",null, $username,"" );
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=2
$consulta=DB::Query("SELECT COUNT(Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activo
                      AND (Procesos.EtapaId = 1) -- Persuasivo
                      AND (Procesos.ConceptoId <> 2) --concepto poliza
                      AND (Procesos.Notificacion IS NULL)
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 2) -- Mandamiento de Pago
                      AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND ((Procesos.Acuerdo IS NULL)
                      OR (NOT Procesos.Incumplimiento IS NULL))
                      AND (DATEDIFF(day, GETDATE(), DATEADD(day, Alertas.Dias, ISNULL(dbo.Procesos.Persuasivo, DATEADD(day, Alertas.Dias,Procesos.Fecha))))) < Alertas.Dias");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-MandamientoDePago", "ALERTA MANDAMIENTO DE PAGO", "glyphicon-tag", "http://localhost:8086/alertmandpago_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=4
$consulta=DB::Query("SELECT COUNT(ProcesosView1.ProcesoId) Cantidad
                 FROM ProcesosView1
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (ProcesosView1.EstadoId = 2) -- Activo
                      AND (ProcesosView1.EtapaId = 2) -- Coactivo
                      AND (ProcesosView1.ConceptoId <> 2) --concepto poliza
                      AND (ProcesosView1.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 4)--Notificación Mandamientos de Pago
                      AND (ProcesosView1.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND (ProcesosView1.Notificacion IS NULL) --sin notificacion
                      AND ((ProcesosView1.Acuerdo IS NULL)
                           OR NOT(ProcesosView1.Incumplimiento IS NULL))");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-NotificacionMandamientoDePago", "ALERTA NOTIFICACION MANDAMIENTO DE PAGO", "glyphicon-tag", "http://localhost:8086/alertnotmandpago_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=5
$consulta=DB::Query("SELECT COUNT(DISTINCT Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                      INNER JOIN Pagos1 ON Pagos1.ProcesoId = Procesos.ProcesoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activo
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 5) -- Incumplimiento de Acuerdo de Pago
                      AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND ((Procesos.Incumplimiento IS NULL)
                           AND NOT(Procesos.Acuerdo IS NULL))
                      AND ((Procesos.Obligacion+Procesos.Intereses+Procesos.Costas) > 0)");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-IncumplimientoAcuerdoDePago", "ALERTA NOTIFICACION INCUMPLIMIENTO DE ACUERDO DE PAGO", "glyphicon-tag", "http://localhost:8086/alertincacupago_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=6
$consulta=DB::Query("SELECT COUNT(Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activo
                      AND (Procesos.EtapaId = 1)
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 6) -- Procesos sin Oficio Persuasivo
                      AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND (Procesos.Persuasivo IS NULL)
                      AND (Procesos.ConceptoId <> 2) --concepto poliza
                      AND (Procesos.Acuerdo IS NULL OR NOT Procesos.Incumplimiento IS NULL)");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-Sin Oficio Persuasivo", "ALERTA NOTIFICACION SIN OFICIO PERSUASIVO", "glyphicon-tag", "http://localhost:8086/alertsinpersuasivo_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=7
$consulta=DB::Query("SELECT COUNT(Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activo
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 7) -- Busqueda
                      AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND (Procesos.ConceptoId <> 2) --concepto poliza
                      AND (NOT EXISTS
                 (
                     SELECT *
                     FROM Correspondencias
                          INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId
                     WHERE Procesos.ProcesoId = Correspondencias.ProcesoId
                           AND (Oficios.ActuacionId = 1035)
                 ))");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-Sin Busquedad de Bienes", "ALERTA NOTIFICACION SIN BUSQUEDAD DE BIENES", "glyphicon-tag", "http://localhost:8086/alertbusqbienes_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=8
$consulta=DB::Query("SELECT COUNT(Procesos.ProcesoId) Cantidad
                 FROM Procesos
                      CROSS JOIN AlertasTipos
                      INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
                 WHERE(Alertas.Activa = 1)
                      AND (Procesos.EstadoId = 2) -- Activo
                      AND (Procesos.EtapaId = 2)
                      AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
                      AND (AlertasTipos.AlertaTipoId = 8) -- Procesos Resolucion Seguir Adelante
                      AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")
                      AND (Procesos.ConceptoId <> 2) --concepto poliza
                      AND (Procesos.Acuerdo IS NULL
                           OR NOT Procesos.Incumplimiento IS NULL)
                      AND ((DATEADD(day, Alertas.Dias, Procesos.notificacion)) < GETDATE())
                      AND NOT(Procesos.Notificacion IS NULL)
                      AND (NOT EXISTS
                 (
                     SELECT *
                     FROM Correspondencias
                     WHERE Procesos.ProcesoId = Correspondencias.ProcesoId
                           AND (Correspondencias.OficioId = 1110
                                OR Correspondencias.OficioId = 4346)
                 ))");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-Sin Resolucion Seguir Adelante", "ALERTA SIN RESOLUCION SEGUIR ADELANTE", "glyphicon-tag", "http://localhost:8086/alertsegadelante_list.php",null,$username,"");
}
//
//Se crea la alerta si se encuentra procesos a notificar segun AlertaTipoId=9
$consulta=DB::Query("SELECT COUNT(*) Cantidad 
FROM Procesos 
CROSS JOIN AlertasTipos
INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId
WHERE
(Alertas.Activa = 1)
        AND (Procesos.EstadoId IN(4, 5))
    AND (AlertasTipos.AlertaTipoId = 9)--Interrumpidos/Suspendidos
    AND (Procesos.CarteraTipoId = ".$_SESSION["CarteraTipoId"].")
    AND (Procesos.AbogadoId = ".$_SESSION["AbogadoId"].")");
while( $date = $consulta->fetchAssoc() )
{
	$conteo=$date["Cantidad"];
}
if ($conteo>0){
	//$message, $title = null, $icon = null, $url = null, $expire = null, $user = null, $provider = null 
	addNotification( "Tiene ".$conteo." Procesos notificados por Alerta-Interrumpidos/Suspendidos", "ALERTA INTERRUMPIDOS/SUSPENDIDOS", "glyphicon-tag", "http://localhost:8086/alertintsusp_list.php",null,$username,"");
}


;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				// After unsuccessful login
function AfterUnsuccessfulLogin($username, $password, &$message, $pageObject, $userdata)
{

		$rs=DB::Query("SELECT username,* FROM [GCC].[dbo].[UsuGCC-_users] WHERE Username='".$username."'");
while( $date = $rs->fetchAssoc() ){
	$usernameDB=$date["username"];
	$passwordDB=$date["password"];
}
//echo "<script>alert('Valorrr: ".$usernameDB."')</script>";
if ($usernameDB==""){
$message="El usuario no existe en el sistema";
}
else{
	if ($passwordDB!=$password){
$message="Contraseña incorrecta";
		}
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterUnsuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_dbo_Chequeos_snippet(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event_dbo_Correspondencias_snippet(&$params)
	{
	// Put your code here.
$str= "<select id='abogaId'; style='width: 450px; display: inline-block;' class='form-control'>";
//select values from the database
$strSQL = "select * from Abogados WHERE SeccionalId=".$_SESSION["SeccionalUser"]."  ORDER BY Abogado ASC";
$rs = db_query($strSQL);
while ($data = db_fetch_array($rs)){
$str.="<option value='".$data['AbogadoId']."'>".$data['Abogado']."</option>";
}
$str.="</select>";
echo $str;



	;
}
	function event_dbo_Chequeos_snippet1(&$params)
	{
	$str='<div class="r-integrated-field form-group clearfix   r-vertical-field" data-signal-error-for="conceptoNaturaleza46" data-itemtype="integrated_edit_field" data-itemid="integrated_edit_field21" data-pageid="46" data-field="conceptoNaturaleza" data-fieldname="conceptoNaturaleza">
';
$str.="<label class='r-edit-label control-label' for='value_SeccionalId_46'>
		Concepto-Naturaleza
	</label>";
$str.= '<div class="r-edit-field">';
$str.= "<select id='value_conceptoNaturaleza' sisze=1 class='form-control' style='width: 350.5px;'>";
//select values from the database
//$strSQL = "select * from Oficios";
$strSQL1="SELECT C.ConceptoId AS ConceptoId ,N.NaturalezaId AS NaturalezaId ,C.Concepto + ' - ' + N.Naturaleza AS 'Concepto-Naturaleza' FROM Naturalezas N
        LEFT OUTER JOIN Conceptos C ON C.ConceptoId = N.ConceptoId
        ORDER BY 'Concepto-Naturaleza' ASC";
$rs = db_query($strSQL1);
while ($date = db_fetch_array($rs)){
$str.="<option value='".$date['NaturalezaId'].",".$date['ConceptoId']."'>".$date['Concepto-Naturaleza']."</option>";
}
$str.="</select>
    </div>";
$str.="</div>";
echo $str;
	;
}
	function event_dbo_Liquidaciones_snippet(&$params)
	{
	// Put your code here.
global $pageObject;
//echo "Master Info<br>";
/*
if ($data = $pageObject->getMasterRecord())
 {
  echo "Field1: ".$data["ProcesoId"]."<br>";
  echo "Field2: ".$data["Obligacion"]."<br>";
 }
*/
$data = $pageObject->getMasterRecord();
//$data["ProcesoId"];
echo '<input for="miInput" id="procesoId" value="'.$data["ProcesoId"].'" style="display: none;" readonly></input>';
echo '<label for="miInput">Abono Inicial: </label>
<input type="number" id="abono" name="" style="width: 100px;" value=0>
<label for="miLista">Periodo: </label>
<select id="periodo" name="">
    <option value="1">MENSUAL</option>
    <option value="2">BIMESTRAL</option>
    <option value="3">TRIMESTRAL</option>
    <option value="4">SEMESTRAL</option>
</select>
<label for="miInput">No. Cuotas: </label>
<input type="number" id="noCuotas" name="" style="width: 60px;" value=1>
<label for="fechaSeleccionada">Fecha Inicial:</label>
<input type="date" id="fechaInicial" name="fecha">
<script>
        // Obtener la fecha actual en el formato YYYY-MM-DD
        function obtenerFechaActual() {
            const hoy = new Date();
            const año = hoy.getFullYear();
            let mes = hoy.getMonth() + 1;
            let dia = hoy.getDate();

            // Agregar un cero delante si el mes o día son menores a 10
            mes = mes < 10 ? "0" + mes : mes;
            dia = dia < 10 ? "0" + dia : dia;

            return `${año}-${mes}-${dia}`;
        }

        // Asignar la fecha actual al input date
        document.getElementById("fechaInicial").value = obtenerFechaActual();
    </script>';
	;
}
	function event_dbo_Procesos_snippet(&$params)
	{
	// Put your code here.
echo '<button id="btnAbrirModal" class="glyphicon glyphicon-upload btn btn-upload">
			</button>
<div id="miModal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" id="btnCerrarModal">&times;</span>
            <p>Contenido del modal...</p>
        </div>
    </div>
<style>
/* Estilos para el modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

.modal-contenido {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fefefe;
    padding: 20px;
    border-radius: 5px;
}

.cerrar {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.cerrar:hover {
    color: black;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var btnAbrirModal = document.getElementById("btnAbrirModal");
    var miModal = document.getElementById("miModal");
    var btnCerrarModal = document.getElementById("btnCerrarModal");

    // Abrir modal al hacer clic en el botón
    btnAbrirModal.addEventListener("click", function() {
        miModal.style.display = "block";
    });

    // Cerrar modal al hacer clic en la "x"
    btnCerrarModal.addEventListener("click", function() {
        miModal.style.display = "none";
    });

    // Cerrar modal al hacer clic fuera del contenido
    window.addEventListener("click", function(event) {
        if (event.target == miModal) {
            miModal.style.display = "none";
        }
    });
});</script>'
	;
}
	function event_dbo_Procesos_snippet1(&$params)
	{
	global $pageObject;
//echo "Master Info<br>";
/*
if ($data = $pageObject->getMasterRecord())
 {
  echo "Field1: ".$data["ProcesoId"]."<br>";
  echo "Field2: ".$data["Obligacion"]."<br>";
 }
*/
$data = $pageObject->getMasterRecord();
echo "Valor P: ".$data["ProcesoId"];
/*
$_SESSION["currentRecord"] = $values;
var_dump($values);
echo "<br>";
echo $_SESSION["currentRecord"]["ProcesoId"];
*/
//echo "Valor del ProcesoId:".$data["ProcesoId"];
//$srchObj = SearchClause::getSearchObject("Procesos");
//echo "Value Proceso".$srchObj->getFieldValue("ProcesoId");
// Put your code here.
$consulta=DB::Query("SELECT TOP 1 ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END, 
                         GETDATE()) + DATEDIFF(day, GETDATE(), DATEADD(year, CASE WHEN Procesos.ConceptoId = 5 THEN 3 ELSE 5 END, CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END)) 
                         AS Prescripcion FROM Procesos
						 LEFT OUTER JOIN
                         dbo.InterrupcionesSumaView ON dbo.Procesos.ProcesoId = dbo.InterrupcionesSumaView.ProcesoId");
//print_r($consulta);
//print_r($pageObject);
echo "<br>";
//echo "Value RecordId=".$recordId;
while( $date = $consulta->fetchAssoc() )
		{
			echo "value: ".$date["Prescripcion"];
        }
//echo "Your message".$consulta;
	;
}
	function event_dbo_Liquidaciones_snippet1(&$params)
	{
	global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
// Put your code here.

$consulta=DB::Query("SELECT FORMAT(SUM(Capital), 'C', 'es-CO') sumCapital FROM Liquidaciones where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumCapital=$date["sumCapital"];
        }
echo "<strong>".$sumCapital."</strong>";

	;
}
	function event_SumCostas(&$params)
	{
	// Put your code here.
global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
$consulta=DB::Query("SELECT FORMAT(SUM(Costas), 'C', 'es-CO') sumCostas FROM Liquidaciones where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumCostas=$date["sumCostas"];
        }
echo "<strong>".$sumCostas."</strong>";
	;
}
	function event_SumIntereses(&$params)
	{
	global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
// Put your code here.

$consulta=DB::Query("SELECT FORMAT(SUM(Intereses), 'C', 'es-CO') sumIntereses FROM Liquidaciones where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumIntereses=$date["sumIntereses"];
        }
echo "<strong>".$sumIntereses."</strong>";// Put your code here.

	;
}
	function event_SumIntPlazo(&$params)
	{
	// Put your code here.
global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
$consulta=DB::Query("SELECT FORMAT(SUM(InteresesPlazo), 'C', 'es-CO') sumInteresesPlazo FROM Liquidaciones where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumInteresesPlazo=$date["sumInteresesPlazo"];
        }
echo "<strong>".$sumInteresesPlazo."</strong>";
	;
}
	function event_SumCuota(&$params)
	{
	// Put your code here.
global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
$consulta=DB::Query("SELECT FORMAT(SUM(Total), 'C', 'es-CO') sumTotal FROM Liquidaciones where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumTotal=$date["sumTotal"];
        }
echo "<strong>".$sumTotal."</strong>";
	;
}
	function event_SumIntereses1(&$params)
	{
	global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
echo $procesoId;
// Put your code here.

$consulta=DB::Query("SELECT FORMAT(SUM(Intereses), 'C', 'es-CO') sumaIntereses FROM Intereses where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumaIntereses=$date["sumaIntereses"];
        }
echo "<strong>Holaaaaa: ".$sumaIntereses."</strong>";
	;
}
	function event_SumaInteresesTable(&$params)
	{
	global $pageObject;
$data = $pageObject->getMasterRecord();
$procesoId=$data["ProcesoId"];
// Put your code here.

$consulta=DB::Query("SELECT FORMAT(SUM(Intereses), 'C', 'es-CO') sumIntereses FROM Intereses where ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
		{
            $sumIntereses=$date["sumIntereses"];
        }
echo "<strong>".$sumIntereses."</strong>";
	;
}
	function event_Dias(&$params)
	{
	// Put your code here.
echo "<input type='number' class='form-control' id='dias' name='dias'></input>";
	;
}
	function event_dbo_Chequeos_snippet2(&$params)
	{
	// Put your code here.
echo "<label class='r-edit-label control-label'>Tipo de Expediente</label>";
	;
}
	function event_Resumen_Mensual(&$params)
	{
	// Put your code here.
echo "<label value='".$_SESSION["fechaIn"]."' style='margin-right: 20px;'>Seleccione Fecha: </label><br><input type='month' id='fechaIn'></input>"
	;
}
	function event_BDME_Actualizaci_n_Desde(&$params)
	{
	// Obtener el último día del mes anterior
$ultimo_dia_mes_anterior = date('Y-m-t', strtotime('last day of previous month'));

// Mostrar el input con el valor calculado
echo "<input type='date' id='BDME_Actualiza_desdeId' name='desde' value='" . date('Y-m-d', strtotime($ultimo_dia_mes_anterior)) . "' required><br>";

   // Agregar el script de validación
    echo "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            var monthField = document.getElementById('BDME_Actualiza_desdeId');
            if (!monthField.value) {
                alert('El campo \"Desde\" es obligatorio.');
                monthField.focus();
                event.preventDefault();
            }
        });
    });
    </script>";
	;
}
	function event_BDME_Actualizaci_n_Hasta(&$params)
	{
	
echo "<label for='BDME_Actualiza_hastaId' style='margin-right: 20px;'>Hasta: </label><br>";
echo "<input type='date' id='BDME_Actualiza_hastaId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";
	;
}
	function event_BDME_Actualizaci_n_Sansionado(&$params)
	{
	//echo "<label value='".$_SESSION["BDME_Actualiza_Sancionado"]."' style='margin-right: 20px;'>Sancionado: </label><br><input type='text' id='BDME_Actualiza_SancionadoId'></input>"

echo "<label for='BDME_Actualiza_SancionadoId' style='margin-right: 20px;'>Sancionado: </label><br>";
echo "<input type='text' id='BDME_Actualiza_SancionadoId' value=''>";

	;
}
	function event_BDME_Actualizaci_n_Document_San(&$params)
	{
	echo "<label value='' style='margin-right: 20px;'>Documento: </label><br><input type='number' id='BDME_Actualiza_Doc_SancionadoId'></input>"
	;
}
	function event_BDME_Cancelaci_n_Acuerdo_de_Pago_Desde(&$params)
	{
	// Obtener el último día del mes anterior
$ultimo_dia_mes_anterior = date('Y-m-t', strtotime('last day of previous month'));

// Mostrar el input con el valor calculado
echo "<input type='date' id='BDME_Cancelacion_desdeId' name='desde' value='" . date('Y-m-d', strtotime($ultimo_dia_mes_anterior)) . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";

  
	;
}
	function event_BDME_Cancelaci_n_Acuerdo_de_Pago_Hasta(&$params)
	{
	echo "<label for='BDME_Cancelacion_hastaId' style='margin-right: 20px;'>Hasta: </label><br>";
echo "<input type='date' id='BDME_Cancelacion_hastaId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";

	;
}
	function event_BDME_Excluidos_Mes(&$params)
	{
	echo "<label for='BDME_Excluidos_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='date' id='BDME_Excluidos_MesId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";
	;
}
	function event_BDME_Excluidos_Sancionado(&$params)
	{
	echo "<label for='BDME_Excluidos_SancionadoId' style='margin-right: 20px;'>Sancionado: </label><br>";
echo "<input type='text' id='BDME_Excluidos_SancionadoId' value=''>";
	;
}
	function event_BDME_Excluidos_Documento(&$params)
	{
	echo "<label value='' style='margin-right: 20px;'>Documento: </label><br><input type='number' id='BDME_Excluidos_Doc_SancionadoId'></input>"
	;
}
	function event_BDME_Excluidos_DataChild_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
    SELECT 
        SUM([Extent1].[Obligacion] + [Extent1].[Costas] + [Extent1].[Intereses]) AS [TotalC6]
    FROM (
        SELECT 
            [SancionadosPorProcesoView].[ProcesoId] AS [ProcesoId], 
            [SancionadosPorProcesoView].[SancionadoId] AS [SancionadoId], 
            [SancionadosPorProcesoView].[AbogadoId] AS [AbogadoId], 
            [SancionadosPorProcesoView].[Fecha] AS [Fecha], 
            [SancionadosPorProcesoView].[Numero] AS [Numero], 
            [SancionadosPorProcesoView].[Providencia] AS [Providencia], 
            [SancionadosPorProcesoView].[Ejecutoria] AS [Ejecutoria], 
            [SancionadosPorProcesoView].[ConceptoId] AS [ConceptoId], 
            [SancionadosPorProcesoView].[EstadoId] AS [EstadoId], 
            [SancionadosPorProcesoView].[EtapaId] AS [EtapaId], 
            [SancionadosPorProcesoView].[Obligacion] AS [Obligacion], 
            [SancionadosPorProcesoView].[Costas] AS [Costas], 
            [SancionadosPorProcesoView].[Intereses] AS [Intereses], 
            [SancionadosPorProcesoView].[Terminacion] AS [Terminacion], 
            [SancionadosPorProcesoView].[MotivoId] AS [MotivoId], 
            [SancionadosPorProcesoView].[Observaciones] AS [Observaciones], 
            [SancionadosPorProcesoView].[SeccionalId] AS [SeccionalId], 
            [SancionadosPorProcesoView].[MinJusticia] AS [MinJusticia], 
            [SancionadosPorProcesoView].[CarteraTipoId] AS [CarteraTipoId], 
            [SancionadosPorProcesoView].[Acuerdo] AS [Acuerdo], 
            [SancionadosPorProcesoView].[Incumplimiento] AS [Incumplimiento], 
            [SancionadosPorProcesoView].[Radicado] AS [Radicado], 
            [SancionadosPorProcesoView].[Origen] AS [Origen], 
            [SancionadosPorProcesoView].[Despacho] AS [Despacho]
        FROM [dbo].[SancionadosPorProcesoView] AS [SancionadosPorProcesoView]
    ) AS [Extent1]
    WHERE ([Extent1].[SancionadoId] = $sancionadoId);
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalC6'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";




	;
}
	function event_BDME_Excluidos_DataChild_snippet(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
    SELECT 
        COUNT([Extent1].[ProcesoId]) AS [TotalProcesos]
    FROM (
        SELECT 
            [SancionadosPorProcesoView].[ProcesoId] AS [ProcesoId], 
            [SancionadosPorProcesoView].[SancionadoId] AS [SancionadoId], 
            [SancionadosPorProcesoView].[AbogadoId] AS [AbogadoId], 
            [SancionadosPorProcesoView].[Fecha] AS [Fecha], 
            [SancionadosPorProcesoView].[Numero] AS [Numero], 
            [SancionadosPorProcesoView].[Providencia] AS [Providencia], 
            [SancionadosPorProcesoView].[Ejecutoria] AS [Ejecutoria], 
            [SancionadosPorProcesoView].[ConceptoId] AS [ConceptoId], 
            [SancionadosPorProcesoView].[EstadoId] AS [EstadoId], 
            [SancionadosPorProcesoView].[EtapaId] AS [EtapaId], 
            [SancionadosPorProcesoView].[Obligacion] AS [Obligacion], 
            [SancionadosPorProcesoView].[Costas] AS [Costas], 
            [SancionadosPorProcesoView].[Intereses] AS [Intereses], 
            [SancionadosPorProcesoView].[Terminacion] AS [Terminacion], 
            [SancionadosPorProcesoView].[MotivoId] AS [MotivoId], 
            [SancionadosPorProcesoView].[Observaciones] AS [Observaciones], 
            [SancionadosPorProcesoView].[SeccionalId] AS [SeccionalId], 
            [SancionadosPorProcesoView].[MinJusticia] AS [MinJusticia], 
            [SancionadosPorProcesoView].[CarteraTipoId] AS [CarteraTipoId], 
            [SancionadosPorProcesoView].[Acuerdo] AS [Acuerdo], 
            [SancionadosPorProcesoView].[Incumplimiento] AS [Incumplimiento], 
            [SancionadosPorProcesoView].[Radicado] AS [Radicado], 
            [SancionadosPorProcesoView].[Origen] AS [Origen], 
            [SancionadosPorProcesoView].[Despacho] AS [Despacho]
        FROM [dbo].[SancionadosPorProcesoView] AS [SancionadosPorProcesoView]
    ) AS [Extent1]
    WHERE ([Extent1].[SancionadoId] = $sancionadoId);
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalProcesos = $row['TotalProcesos'];

// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalProcesos . "</strong>";

	;
}
	function event_BDME_Gu_a_del_Deudor_Moroso_Mes(&$params)
	{
	echo "<label for='BDME_Guia_Deudor_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='date' id='BDME_Guia_Deudor_MesId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";
	;
}
	function event_BDME_Incumplimiento_Acuerdo_de_Pago_Semestral_Mes(&$params)
	{
	echo "<label for='BDME_Incumplimiento_pago_semestral_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='date' id='BDME_Incumplimiento_pago_semestral_MesId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}'  required><br>";
	;
}
	function event_BDME_Reporte_Semestral_Mes(&$params)
	{
	echo "<label for='BDME_Reporte_Semestral_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='date' id='BDME_Reporte_Semestral_MesId' name='mes' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}' required><br>";
	;
}
	function event_BDME_Reporte_Semestral_Sancionado(&$params)
	{
	echo "<label for='BDME_Reporte_Semestral_SancionadoId' style='margin-right: 20px;'>Sancionado: </label><br>";
echo "<input type='text' id='BDME_Reporte_Semestral_SancionadoId' value=''>";
	;
}
	function event_BDME_Reporte_Semestral_Documento(&$params)
	{
	echo "<label value='' style='margin-right: 20px;'>Documento: </label><br><input type='number' id='BDME_Reporte_Semestral_Doc_SancionadoId'></input>"
	;
}
	function event_BDME_Reporte_Semestral_Datachild_Contar(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
SELECT COUNT(ProcesoId) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalC6'];


// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalC6 . "</strong>";

	;
}
	function event_BDME_Reporte_Semestral_Datachild_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
SELECT SUM(Obligacion + Costas + Intereses) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalC6'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";





	;
}
	function event_BDME_Retiros_Desde(&$params)
	{
	// Obtener el último día del mes anterior
$ultimo_dia_mes_anterior = date('Y-m-t', strtotime('last day of previous month'));
echo "<label for='BDME_Retiros_desdeId' style='margin-right: 20px;'>Desde: </label><br>";
// Mostrar el input con el valor calculado
echo "<input type='date' id='BDME_Retiros_desdeId' name='desde' value='" . date('Y-m-d', strtotime($ultimo_dia_mes_anterior)) . "' pattern='\\d{4}-\\d{2}-\\d{2}' required><br>";


	;
}
	function event_BDME_Retiros_Hasta(&$params)
	{
	
echo "<label for='BDME_Retiros_hastaId' style='margin-right: 20px;'>Hasta: </label><br>";
echo "<input type='date' id='BDME_Retiros_hastaId' name='hasta' value='" . date('Y-m-d') . "' pattern='\\d{4}-\\d{2}-\\d{2}' required><br>";
	;
}
	function event_BDME_Retiros_DataChild_Contar(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
SELECT COUNT(ProcesoId) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalC6'];


// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalC6 . "</strong>";

	;
}
	function event_BDME_Retiros_DataChild_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de SancionadoId
$data = $pageObject->getMasterRecord();
$sancionadoId = $data["SancionadoId"];

// Ejecutar la consulta SQL
$sql = "
SELECT SUM(Obligacion + Costas + Intereses) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalC6'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Deterioro_de_Cartera_por_Proceso_Contar(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];

$sql = "
DECLARE @CarteraTipoId INT;
DECLARE @SeccionalId INT;
DECLARE @Fecha    DATE;
-- Obtener los valores de las variables
SELECT @CarteraTipoId = CarteraTipoId, @SeccionalId = SeccionalId
FROM UserProfile
WHERE UserProfile.UserName = '$user_id';
SET @Fecha = EOMONTH('$mes_deterioro');
-- Consultar los datos
SELECT COUNT(Saldo) AS Procesos,
       SUM(Subquery.Saldo) AS TotalSaldo, 
       SUM(Subquery.Recobrable) AS TotalRecobrable,
       SUM(Subquery.VPN) AS VPN, 
       SUM(Subquery.Deterioro) AS Deterioro
FROM (
    SELECT 
        Deterioro.Rel_Saldo AS Saldo,
        Deterioro.Rel_Recobrable AS Recobrable,
        Deterioro.Rel_VPN AS VPN,
        Deterioro.Rel_Deterioro AS Deterioro
    FROM Historicos Procesos
    INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
    INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
    WHERE 
        Procesos.SeccionalId = @SeccionalId
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND Deterioro.Fecha = @Fecha  
        AND Procesos.Hasta = @Fecha  
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Procesos'];


// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalC6 ."</strong>";

	;
}
	function event_Deterioro_de_Cartera_por_Proceso_Saldo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];

$sql = "
DECLARE @CarteraTipoId INT;
DECLARE @SeccionalId INT;
DECLARE @Fecha    DATE;
-- Obtener los valores de las variables
SELECT @CarteraTipoId = CarteraTipoId, @SeccionalId = SeccionalId
FROM UserProfile
WHERE UserProfile.UserName = '$user_id';
SET @Fecha = EOMONTH('$mes_deterioro');
-- Consultar los datos
SELECT COUNT(Saldo) AS Procesos,
       SUM(Subquery.Saldo) AS TotalSaldo, 
       SUM(Subquery.Recobrable) AS TotalRecobrable,
       SUM(Subquery.VPN) AS VPN, 
       SUM(Subquery.Deterioro) AS Deterioro
FROM (
    SELECT 
        Deterioro.Rel_Saldo AS Saldo,
        Deterioro.Rel_Recobrable AS Recobrable,
        Deterioro.Rel_VPN AS VPN,
        Deterioro.Rel_Deterioro AS Deterioro
    FROM Historicos Procesos
    INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
    INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
    WHERE 
        Procesos.SeccionalId = @SeccionalId
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND Deterioro.Fecha = @Fecha  
        AND Procesos.Hasta = @Fecha  
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalSaldo'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";


	;
}
	function event_Deterioro_de_Cartera_por_Proceso_Recobrable(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];

$sql = "
DECLARE @CarteraTipoId INT;
DECLARE @SeccionalId INT;
DECLARE @Fecha    DATE;
-- Obtener los valores de las variables
SELECT @CarteraTipoId = CarteraTipoId, @SeccionalId = SeccionalId
FROM UserProfile
WHERE UserProfile.UserName = '$user_id';
SET @Fecha = EOMONTH('$mes_deterioro');
-- Consultar los datos
SELECT COUNT(Saldo) AS Procesos,
       SUM(Subquery.Saldo) AS TotalSaldo, 
       SUM(Subquery.Recobrable) AS TotalRecobrable,
       SUM(Subquery.VPN) AS VPN, 
       SUM(Subquery.Deterioro) AS Deterioro
FROM (
    SELECT 
        Deterioro.Rel_Saldo AS Saldo,
        Deterioro.Rel_Recobrable AS Recobrable,
        Deterioro.Rel_VPN AS VPN,
        Deterioro.Rel_Deterioro AS Deterioro
    FROM Historicos Procesos
    INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
    INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
    WHERE 
        Procesos.SeccionalId = @SeccionalId
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND Deterioro.Fecha = @Fecha  
        AND Procesos.Hasta = @Fecha  
) AS Subquery;
";
// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalRecobrable'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Deterioro_de_Cartera_por_Proceso_VPN(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];

// Obtener el valor del campo 'mes'
$deterioro_mes = isset($_POST['mes']) ? $_POST['mes'] : '';
// Ejecutar la consulta SQL
/*$sql = "
SELECT COUNT(ProcesoId) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";*/

$sql = "
DECLARE @CarteraTipoId INT;
DECLARE @SeccionalId INT;
DECLARE @Fecha    DATE;
-- Obtener los valores de las variables
SELECT @CarteraTipoId = CarteraTipoId, @SeccionalId = SeccionalId
FROM UserProfile
WHERE UserProfile.UserName = '$user_id';
SET @Fecha = EOMONTH('$mes_deterioro');
-- Consultar los datos
SELECT COUNT(Saldo) AS Procesos,
       SUM(Subquery.Saldo) AS TotalSaldo, 
       SUM(Subquery.Recobrable) AS TotalRecobrable,
       SUM(Subquery.VPN) AS VPN, 
       SUM(Subquery.Deterioro) AS Deterioro
FROM (
    SELECT 
        Deterioro.Rel_Saldo AS Saldo,
        Deterioro.Rel_Recobrable AS Recobrable,
        Deterioro.Rel_VPN AS VPN,
        Deterioro.Rel_Deterioro AS Deterioro
    FROM Historicos Procesos
    INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
    INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
    WHERE 
        Procesos.SeccionalId = @SeccionalId
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND Deterioro.Fecha = @Fecha  
        AND Procesos.Hasta = @Fecha  
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['VPN'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Deterioro_de_Cartera_por_Proceso_Deterioro(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];

// Obtener el valor del campo 'mes'
$deterioro_mes = isset($_POST['mes']) ? $_POST['mes'] : '';
// Ejecutar la consulta SQL
/*$sql = "
SELECT COUNT(ProcesoId) as TotalC6 FROM SancionadosPorProcesoView WHERE SancionadoId = $sancionadoId;
";*/

$sql = "
DECLARE @CarteraTipoId INT;
DECLARE @SeccionalId INT;
DECLARE @Fecha    DATE;
-- Obtener los valores de las variables
SELECT @CarteraTipoId = CarteraTipoId, @SeccionalId = SeccionalId
FROM UserProfile
WHERE UserProfile.UserName = '$user_id';
SET @Fecha = EOMONTH('$mes_deterioro');
-- Consultar los datos
SELECT COUNT(Saldo) AS Procesos,
       SUM(Subquery.Saldo) AS TotalSaldo, 
       SUM(Subquery.Recobrable) AS TotalRecobrable,
       SUM(Subquery.VPN) AS VPN, 
       SUM(Subquery.Deterioro) AS Deterioro
FROM (
    SELECT 
        Deterioro.Rel_Saldo AS Saldo,
        Deterioro.Rel_Recobrable AS Recobrable,
        Deterioro.Rel_VPN AS VPN,
        Deterioro.Rel_Deterioro AS Deterioro
    FROM Historicos Procesos
    INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
    INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
    WHERE 
        Procesos.SeccionalId = @SeccionalId
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND Deterioro.Fecha = @Fecha  
        AND Procesos.Hasta = @Fecha  
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Deterioro'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Deterioro_de_Cartera_por_Proceso_Mes(&$params)
	{
	echo "<label for='BDME_Reporte_Deterioro_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='month' id='BDME_Reporte_Deterioro_MesId' name='mes' value='" . date('Y-m') . "' required><br>";
	;
}
	function event_Intereses_por_Proceso_Ano(&$params)
	{
	    echo "<label for='BDME_Reporte_Intereses_AnoId' style='margin-right: 20px;'>Año: </label><br>";
    echo "<input type='month' id='BDME_Reporte_Intereses_AnoId' name='ano' value='" . date('Y-m') . "' required><br>";

    // Agrega el script de JavaScript para manejar la extracción del año
    echo "
    <script>
        document.getElementById('BDME_Reporte_Intereses_AnoId').addEventListener('change', function() {
            var ano_interes = this.value;
            var ano = ano_interes.split('-')[0];
            var ano_interes_int = parseInt(ano, 10);
            console.log('El año de interés como entero es:', ano_interes_int);
            // Aquí puedes hacer algo con el año extraído, por ejemplo, asignarlo a un campo oculto
            document.getElementById('ano_oculto').value = ano_interes_int;
        });
    </script>
    ";

    // Si necesitas un campo oculto para almacenar el año
    echo "<input type='hidden' id='ano_oculto' name='ano_oculto' value=''>";
	;
}
	function event_Listado_Medidas_Cautelares_Sancionado(&$params)
	{
	echo "<label for='Medidas_SancionadoId' style='margin-right: 20px;'>Sancionado: </label><br>";
echo "<input type='text' id='Medidas_SancionadoId' value=''>";
	;
}
	function event_Listado_Medidas_Cautelares_Documento(&$params)
	{
	echo "<label value='' style='margin-right: 20px;'>Documento: </label><br><input type='number' id='Medidas_Doc_SancionadoId'></input>"
	;
}
	function event_Listado_Medidas_Cautelares_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$medidas_sancionado_total = $_SESSION['medidas_sancionado'];
$medidas_sancionado_doc_total = $_SESSION['medidas_documento']; 

$sql = "
SELECT SUM(Avalúo) AS TotalAvaluo, SUM(Subquery.[Valor Rematado]) AS TotalValorRematado
FROM (
    SELECT 
        Propiedades.Avaluo AS Avalúo,
        Medidas.Valor AS [Valor Rematado]
    FROM 
        ProcesosView1 
    INNER JOIN
        Medidas ON ProcesosView1.ProcesoId = Medidas.ProcesoId 
    INNER JOIN
        Propiedades ON Medidas.PropiedadId = Propiedades.PropiedadId 
    LEFT OUTER JOIN
        Ciudades ON Propiedades.CiudadId = Ciudades.CiudadId
    WHERE 
        ProcesosView1.Sancionado LIKE '%$medidas_sancionado_total%' 
        AND ProcesosView1.SancionadoDocumento LIKE '%$medidas_sancionado_doc_total%' 
        AND ProcesosView1.EstadoId <> 6
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalAvaluo'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Listado_Medidas_Cautelares_Total_Rematado(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$medidas_sancionado_total = $_SESSION['medidas_sancionado'];
$medidas_sancionado_doc_total = $_SESSION['medidas_documento']; 

$sql = "
SELECT SUM(Avalúo) AS TotalAvaluo, SUM(Subquery.[Valor Rematado]) AS TotalValorRematado
FROM (
    SELECT 
        Propiedades.Avaluo AS Avalúo,
        Medidas.Valor AS [Valor Rematado]
    FROM 
        ProcesosView1 
    INNER JOIN
        Medidas ON ProcesosView1.ProcesoId = Medidas.ProcesoId 
    INNER JOIN
        Propiedades ON Medidas.PropiedadId = Propiedades.PropiedadId 
    LEFT OUTER JOIN
        Ciudades ON Propiedades.CiudadId = Ciudades.CiudadId
    WHERE 
        ProcesosView1.Sancionado LIKE '%$medidas_sancionado_total%' 
        AND ProcesosView1.SancionadoDocumento LIKE '%$medidas_sancionado_doc_total%' 
        AND ProcesosView1.EstadoId <> 6
) AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalValorRematado'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Mes(&$params)
	{
	// Obtener el mes actual y calcular el último día del mes
$mes_actual = date('Y-m'); // O la forma en que determines $mes_actual
$date = new DateTime($mes_actual . '-01');
$date->modify('last day of this month');
$ultimo_dia = $date->format('Y-m-d');

// Mostrar los campos
echo "<label for='Reporte_Difi_Recaudo_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='month' id='Reporte_Difi_Recaudo_MesId' name='mes' value='" . $ultimo_dia . "' required><br>";
/*echo "<label for='ultimo_dia'>Último día del mes: </label>";
echo "<input type='text' id='ultimo_dia' name='ultimo_dia' value='" . $ultimo_dia . "' readonly><br>";*/

	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Total_Procesos(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalProcesos'];


// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalC6 ."</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Obligacion_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TObligacion'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Total_Costas(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TCostas'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Total_Intereses(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TIntereses'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Total_Saldo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TSaldo'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Obligaciones_de_Dificil_Recaudo_Total_Deterioro(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$mes_deterioro = $_SESSION['deterioro_mes'];
$carteraid = $_SESSION['cateraid'];
$seccionalid = $_SESSION['seccionalid'];
$ultimo_dia = $_SESSION['difire_mes'];


$sql = "
SELECT COUNT(CSeccionalId) AS TotalProcesos,
	   SUM(TObligacion) AS TObligacion,
       SUM(Subquery.TCostas) AS TCostas, 
       SUM(Subquery.TIntereses) AS TIntereses,
       SUM(Subquery.TSaldo) AS TSaldo, 
       SUM(Subquery.TRel_Deterioro) AS TRel_Deterioro
FROM (
SELECT 
    [Project1].[SeccionalId] AS CSeccionalId, 
    [Project1].[Obligacion] AS TObligacion, 
    [Project1].[Costas] AS TCostas, 
    [Project1].[Intereses] AS TIntereses, 
    [Project1].[Saldo] AS TSaldo, 
    [Project1].[Rel_Deterioro] AS TRel_Deterioro
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = '$carteraid') AND ([Extent1].[SeccionalId] = '$seccionalid') AND ([Extent1].[Hasta] = '$ultimo_dia')
    )  AS [Project1]) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TRel_Deterioro'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Privados_de_la_Libertad_Sancionado(&$params)
	{
	echo "<label for='Privado_libertad_SancionadoId' style='margin-right: 20px;'>Sancionado: </label><br>";
echo "<input type='text' id='Privado_libertad_SancionadoId' value=''>";
	;
}
	function event_Privados_de_la_Libertad_Documento_Sancionado(&$params)
	{
	echo "<label value='' style='margin-right: 20px;'>Documento: </label><br><input type='number' id='Privado_libertad_Doc_SancionadoId'></input>";
	;
}
	function event_Recaudos_por_A_os_Obligacion(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['PagoObli'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Recaudos_por_A_os_Costas(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['PagoCost'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Recaudos_por_A_os_Inte(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['PagoInte'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_global__pageObject_(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['PagoMayo'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Recaudos_por_A_os_Recaudo_Terminado(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['PagoTerm'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Recaudos_por_A_os_Total_Recaudo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_recaudo = $_SESSION['recaudo_ano'];


$sql = "
SELECT COUNT(Procesos) AS Procesos,
	   SUM(PagoObli) AS PagoObli,
       SUM(Subquery.PagoCost) AS PagoCost, 
       SUM(Subquery.PagoInte) AS PagoInte,
       SUM(Subquery.PagoMayo) AS PagoMayo, 
       SUM(Subquery.PagoTerm) AS PagoTerm,
	   SUM(Subquery.Pago) AS Pago
FROM (

        SELECT Pagos1.PagoId, 
			   case when Pagos1.TipoRecaudoId=1 then 'Consignación voluntaria' else case when Pagos1.TipoRecaudoId=2 then 'Depósito Judicial' else 'Remate' end end TipoRecaudo,
               ProcesosView1.Numero AS Procesos, 
							  Pagos1.PagoObli AS PagoObli, 
               Pagos1.PagoCost AS PagoCost, 
               Pagos1.PagoInte AS PagoInte, 
               Pagos1.PagoMayo AS PagoMayo, 
               Pagos1.PagoTerm AS PagoTerm, 
               Pagos1.PagoObli + Pagos1.PagoCost + Pagos1.PagoInte + Pagos1.PagoMayo + Pagos1.PagoTerm AS Pago, 
               CarteraTipos.CarteraTipo, 
               MONTH(Pagos1.Registro) MesNumero,
               ProcesosView1.Abogado,
			   Pagos1.Numero NumeroConsignacion 
        FROM Cuentas
             INNER JOIN Pagos1 ON Cuentas.CuentaId = Pagos1.CuentaId
             INNER JOIN ProcesosView1 ON Pagos1.ProcesoId = ProcesosView1.ProcesoId
             INNER JOIN Bancos ON Cuentas.BancoId = Bancos.BancoId
             INNER JOIN CarteraTipos ON CASE
                                            WHEN '$ano_recaudo' <= 2019
                                                 AND ProcesosView1.CarteraTipoId = 5
                                            THEN 1
                                            ELSE ProcesosView1.CarteraTipoId
                                        END = CarteraTipos.CarteraTipoId
        WHERE(YEAR(Pagos1.Registro) = '$ano_recaudo')) 
	AS Subquery;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Pago'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Recaudos_por_A_os_Ano(&$params)
	{
	echo "<label for='Recaudo_Ano_Id' style='margin-right: 20px;'>Año: </label><br>";

$years = range(2014, strftime("%Y", time()));
echo "<select id='yearSelect'>";
echo"<option>Select Year</option>";
foreach($years as $year) :
echo "<option value='$year'>$year</option>";
endforeach;
echo "</select>";
echo "<input type='text' id='Recaudo_Ano_Id' name='Ano' value ='' style='display:none;' required><br>";

echo "<script>
    document.getElementById('yearSelect').addEventListener('change', function() {
        var selectedYear = this.value;
        document.getElementById('Recaudo_Ano_Id').value = selectedYear;
    });
</script>";
	;
}
	function event_Reportes_snippet_checklist(&$params)
	{
	// Put your code here.
    echo '

      <label for="lang">Reporte</label>
      <select name="Reporte: " id="Reporte_selecionid">
        <option value="">Seleccione el reporte a consultar</option>
        <option value="1">3.1 PRESCRITOS CON RESOLUCIÓN EXPEDIDA</option>
        <option value="2">3.2 PRESCRITOS SIN RESOLUCION EXPEDIDA</option>
        <option value="3">3.3 PERSUASIVO SIN MANDAMIENTO PAGO</option>
        <option value="4">3.4 MEDIDAS CAUTELARES SIN ACUERDO PAGO</option>
        <option value="5">3.5 MEDIDAS CAUTELARES CON ACUERDO DE PAGO</option>
        <option value="6">3.6 SIN ACTUACION JURIDICA ALGUNA</option>
        <option value="7">3.7 SIN BÚSQUEDA DE BIENES</option>
      </select>
		';
	;
}
	function event_Reportes_seccional_Cartera(&$params)
	{
	// Put your code here.
$U_user = $_SESSION["UserNameF"];

// Ejecutar la consulta


if($U_user == cthomasb){

  

echo '<label for="cartera">Seleccione Cartera</label>';
echo '<select name="Reporte_Cartera" id="Reporte_Carteraid">';
echo '<option value="0">Seleccione cartera</option>';

$sql1 = "select CarteraTipoId, CarteraTipo from CarteraTipos";
$result1 = DB::Query($sql1);
// Verificar si el resultado es válido
if ($result1) {
    // Fetch each row as an associative array
    while ($row1 = $result1->fetchAssoc()) {
        $carteraId = $row1['CarteraTipoId'];
        $cartera = $row1['CarteraTipo'];
        echo "<option value='$carteraId'>$cartera</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}


echo '</select>';
	

echo '<label for="seccional">Seleccione Seccional</label>';
echo '<select name="Reporte_Seccional" id="Reporte_Seccionalid">';
echo '<option value="0">Seleccione Seccional</option>';

$sql = "SELECT SeccionalId, Seccional FROM Seccionales";
$result = DB::Query($sql);
// Verificar si el resultado es válido
if ($result) {
    // Fetch each row as an associative array
    while ($row = $result->fetchAssoc()) {
        $seccionalId = $row['SeccionalId'];
        $seccional = $row['Seccional'];
        echo "<option value='$seccionalId'>$seccional</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}

echo '</select>';



}
	;
}
	function event_Intereses_por_Proceso_Cartera_Seccional(&$params)
	{
	// Put your code here.
$U_user = $_SESSION["UserNameF"];

// Ejecutar la consulta


if($U_user == cthomasb){

  

echo '<label for="cartera">Seleccione Cartera</label>';
echo '<select name="Reporte_Cartera" id="Reporte_Carteraid_interes">';
echo '<option value="0">Seleccione cartera</option>';

$sql1 = "select CarteraTipoId, CarteraTipo from CarteraTipos";
$result1 = DB::Query($sql1);
// Verificar si el resultado es válido
if ($result1) {
    // Fetch each row as an associative array
    while ($row1 = $result1->fetchAssoc()) {
        $carteraId = $row1['CarteraTipoId'];
        $cartera = $row1['CarteraTipo'];
        echo "<option value='$carteraId'>$cartera</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}


echo '</select>';
	

echo '<label for="seccional">Seleccione Seccional</label>';
echo '<select name="Reporte_Seccional" id="Reporte_Seccionalid_interes">';
echo '<option value="0">Seleccione Seccional</option>';

$sql = "SELECT SeccionalId, Seccional FROM Seccionales";
$result = DB::Query($sql);
// Verificar si el resultado es válido
if ($result) {
    // Fetch each row as an associative array
    while ($row = $result->fetchAssoc()) {
        $seccionalId = $row['SeccionalId'];
        $seccional = $row['Seccional'];
        echo "<option value='$seccionalId'>$seccional</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}

echo '</select>';



}
	;
}
	function event_Intereses_por_Proceso_Total_Enero(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [1] AS Enero,

    SUM(ISNULL([1], 0)) OVER() AS TotalEnero -- Suma total de la columna Enero
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([1])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalEnero'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Febreo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [2] AS Febrero,

    SUM(ISNULL([2], 0)) OVER() AS TotalFebrero -- Suma total de la columna Febrero
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([2])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalFebrero'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Marzo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [3] AS Marzo,

    SUM(ISNULL([3], 0)) OVER() AS TotalMarzo -- Suma total de la columna Marzo
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([3])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalMarzo'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Abril(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [4] AS Abril,

    SUM(ISNULL([4], 0)) OVER() AS TotalAbril -- Suma total de la columna Abril
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([4])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalAbril'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Mayo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [5] AS Mayo,

    SUM(ISNULL([5], 0)) OVER() AS TotalMayo -- Suma total de la columna Mayo
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([5])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalMayo'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Junio(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [6] AS Junio,

    SUM(ISNULL([6], 0)) OVER() AS TotalJunio -- Suma total de la columna Junio
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([6])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalJunio'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Junio1(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [7] AS Julio,

    SUM(ISNULL([7], 0)) OVER() AS TotalJulio -- Suma total de la columna Julio
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([7])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalJulio'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Agosto(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [8] AS Agosto,

    SUM(ISNULL([8], 0)) OVER() AS TotalAgosto -- Suma total de la columna Agosto
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([8])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalAgosto'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Septiembre(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [9] AS Septiembre,

    SUM(ISNULL([9], 0)) OVER() AS TotalSeptiembre -- Suma total de la columna Septiembre
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([9])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalSeptiembre'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Octubre(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [10] AS Octubre,

    SUM(ISNULL([10], 0)) OVER() AS TotalOctubre -- Suma total de la columna Octubre
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([10])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalOctubre'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Noviembre(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [11] AS Noviembre,

    SUM(ISNULL([11], 0)) OVER() AS TotalNoviembre -- Suma total de la columna Noviembre
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([11])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalNoviembre'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Diciembre(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [12] AS Diciembre,

    SUM(ISNULL([12], 0)) OVER() AS TotalDiciembre -- Suma total de la columna Noviembre
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([12])
    ) AS PivotTable;
";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalDiciembre'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Intereses_por_Proceso_Total_Intereses_Total(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$ano_interes = $_SESSION['ano_interes'];
$username = $_SESSION["UserNameF"];
/*
  $sql1 = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result1 = DB::Query($sql1);

// Obtener el resultado
$row1 = $result1->fetchAssoc();
$cartera = $row1['CarteraTipoId'];
$seccional = $row1['SeccionalId'];*/

$cartera = $_SESSION['reporte_cateraid'];
$seccional = $_SESSION['reporte_seccionalid'];

$sql = "

DECLARE @Ano INT = '$ano_interes'
DECLARE @Username VARCHAR(30) = '$username'
DECLARE @Cartera INT = '$cartera'
DECLARE @Seccional INT = '$seccional'

	SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    [1] AS Enero,
    [2] AS Febrero,
    [3] AS Marzo,
    [4] AS Abril,
    [5] AS Mayo,
    [6] AS Junio,
    [7] AS Julio,
    [8] AS Agosto,
    [9] AS Septiembre,
    [10] AS Octubre,
    [11] AS Noviembre,
    [12] AS Diciembre,
    ISNULL([1], 0) + ISNULL([2], 0) + ISNULL([3], 0) + ISNULL([4], 0) + 
    ISNULL([5], 0) + ISNULL([6], 0) + ISNULL([7], 0) + ISNULL([8], 0) + 
    ISNULL([9], 0) + ISNULL([10], 0) + ISNULL([11], 0) + ISNULL([12], 0) AS TotalIntereses,
    SUM(ISNULL([1], 0) + ISNULL([2], 0) + ISNULL([3], 0) + ISNULL([4], 0) + 
        ISNULL([5], 0) + ISNULL([6], 0) + ISNULL([7], 0) + ISNULL([8], 0) + 
        ISNULL([9], 0) + ISNULL([10], 0) + ISNULL([11], 0) + ISNULL([12], 0)) 
        OVER () AS TotalTotal -- Suma total de la columna TotalIntereses para todas las filas
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
                          AND Procesos.SeccionalId = Historicos.SeccionalId 
                          AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([1], [2], [3], [4], [5], [6], [7], [8], [9], [10], [11], [12])
    ) AS PivotTable;

";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['TotalTotal'];


// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Transacciones_Usuario_Ano(&$params)
	{
	echo "<label for='Transacciones_Usuario_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='month' id='Transacciones_Usuario_MesId' name='mes' value='" . date('Y-m') . "' required><br>";
	;
}
	function event_Presunci_n_Prescripci_n_Mes(&$params)
	{
	echo "<label for='Presuncion_pres_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='month' id='Presuncion_pres_MesId' name='hasta' value='" . date('Y-m') . "' required><br>";
	;
}
	function event_Indicadores_de_Gesti_n_Ano(&$params)
	{
	echo "<label for='Recaudo_Ano_Id' style='margin-right: 20px;'>Año: </label><br>";

$years = range(1990, strftime("%Y", time()));
echo "<select id='yearSelect'>";
echo"<option>Select Year</option>";
foreach($years as $year) :
echo "<option value='$year'>$year</option>";
endforeach;
echo "</select>";
echo "<input type='text' id='Indicadores_Ano_Id' name='Ano' value ='' style='display:none;' required><br>";

echo "<script>
    document.getElementById('yearSelect').addEventListener('change', function() {
        var selectedYear = this.value;
        document.getElementById('Indicadores_Ano_Id').value = selectedYear;
    });
</script>";
	;
}
	function event_Indicadores_de_Gesti_n_Total_Procesos(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$ano_gestion = $_SESSION['indicadores_ano'];

$sql = "
DECLARE @Ano INT = '$ano_gestion';
DECLARE @Username VARCHAR(30) =  '$user_id';

DECLARE @CarteraTipoId INT = (
    SELECT CarteraTipoId
    FROM UserProfile
    WHERE UserProfile.UserName = @Username
);

WITH ProcesosData AS (
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha) AS Ano,
        MONTH(Procesos.Fecha) AS MesNumero,
        DATENAME(MONTH, Procesos.Fecha) AS Mes,
        COUNT(*) AS Procesos,
        SUM(Procesos.Obligacion) AS Valor,
        0 AS Recaudo
    FROM Procesos
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE YEAR(Procesos.Fecha) = @Ano
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha),
        MONTH(Procesos.Fecha),
        DATENAME(MONTH, Procesos.Fecha)
    
    UNION ALL
    
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro) AS Ano,
        MONTH(Pagos.Registro) AS MesNumero,
        DATENAME(MONTH, Pagos.Registro) AS Mes,
        0 AS Procesos,
        0 AS Valor,
        SUM(Pagos.Pago) AS Recaudo
    FROM Pagos1 Pagos
    INNER JOIN Procesos ON Pagos.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Cuentas ON Pagos.CuentaId = Cuentas.CuentaId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE Cuentas.Activa = 1
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND YEAR(Pagos.Registro) = @Ano
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro),
        MONTH(Pagos.Registro),
        DATENAME(MONTH, Pagos.Registro)
)

-- Totalización
SELECT 
    'TOTAL' AS Seccional,
    'TOTAL' AS Juzgados,
    NULL AS Mes,
    SUM(Procesos) AS Procesos,
    SUM(Valor) AS Valor,
    SUM(Recaudo) AS Recaudo,
    SUM(Valor) - SUM(Recaudo) AS Saldo
FROM (
    SELECT 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END AS Juzgados,
        A.Mes,
        SUM(A.Procesos) AS Procesos,
        SUM(A.Valor) AS Valor,
        SUM(A.Recaudo) AS Recaudo,
        SUM(A.Valor) - SUM(A.Recaudo) AS Saldo
    FROM ProcesosData A
    WHERE A.Despacho LIKE '%PENAL%'
    GROUP BY 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END,
        A.MesNumero,
        A.Mes
) AS Totales;

";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Procesos'];


// Imprimir el valor formateado
echo "<strong>" ."Procesos: ". $totalC6 ."</strong>";

	;
}
	function event_Indicadores_de_Gesti_n_Valor(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$ano_gestion = $_SESSION['indicadores_ano'];

$sql = "
DECLARE @Ano INT = '$ano_gestion';
DECLARE @Username VARCHAR(30) =  '$user_id';

DECLARE @CarteraTipoId INT = (
    SELECT CarteraTipoId
    FROM UserProfile
    WHERE UserProfile.UserName = @Username
);

WITH ProcesosData AS (
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha) AS Ano,
        MONTH(Procesos.Fecha) AS MesNumero,
        DATENAME(MONTH, Procesos.Fecha) AS Mes,
        COUNT(*) AS Procesos,
        SUM(Procesos.Obligacion) AS Valor,
        0 AS Recaudo
    FROM Procesos
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE YEAR(Procesos.Fecha) = @Ano
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha),
        MONTH(Procesos.Fecha),
        DATENAME(MONTH, Procesos.Fecha)
    
    UNION ALL
    
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro) AS Ano,
        MONTH(Pagos.Registro) AS MesNumero,
        DATENAME(MONTH, Pagos.Registro) AS Mes,
        0 AS Procesos,
        0 AS Valor,
        SUM(Pagos.Pago) AS Recaudo
    FROM Pagos1 Pagos
    INNER JOIN Procesos ON Pagos.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Cuentas ON Pagos.CuentaId = Cuentas.CuentaId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE Cuentas.Activa = 1
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND YEAR(Pagos.Registro) = @Ano
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro),
        MONTH(Pagos.Registro),
        DATENAME(MONTH, Pagos.Registro)
)

-- Totalización
SELECT 
    'TOTAL' AS Seccional,
    'TOTAL' AS Juzgados,
    NULL AS Mes,
    SUM(Procesos) AS Procesos,
    SUM(Valor) AS Valor,
    SUM(Recaudo) AS Recaudo,
    SUM(Valor) - SUM(Recaudo) AS Saldo
FROM (
    SELECT 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END AS Juzgados,
        A.Mes,
        SUM(A.Procesos) AS Procesos,
        SUM(A.Valor) AS Valor,
        SUM(A.Recaudo) AS Recaudo,
        SUM(A.Valor) - SUM(A.Recaudo) AS Saldo
    FROM ProcesosData A
    WHERE A.Despacho LIKE '%PENAL%'
    GROUP BY 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END,
        A.MesNumero,
        A.Mes
) AS Totales;

";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Valor'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";

	;
}
	function event_Indicadores_de_Gesti_n_Recaudo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$ano_gestion = $_SESSION['indicadores_ano'];

$sql = "
DECLARE @Ano INT = '$ano_gestion';
DECLARE @Username VARCHAR(30) =  '$user_id';

DECLARE @CarteraTipoId INT = (
    SELECT CarteraTipoId
    FROM UserProfile
    WHERE UserProfile.UserName = @Username
);

WITH ProcesosData AS (
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha) AS Ano,
        MONTH(Procesos.Fecha) AS MesNumero,
        DATENAME(MONTH, Procesos.Fecha) AS Mes,
        COUNT(*) AS Procesos,
        SUM(Procesos.Obligacion) AS Valor,
        0 AS Recaudo
    FROM Procesos
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE YEAR(Procesos.Fecha) = @Ano
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha),
        MONTH(Procesos.Fecha),
        DATENAME(MONTH, Procesos.Fecha)
    
    UNION ALL
    
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro) AS Ano,
        MONTH(Pagos.Registro) AS MesNumero,
        DATENAME(MONTH, Pagos.Registro) AS Mes,
        0 AS Procesos,
        0 AS Valor,
        SUM(Pagos.Pago) AS Recaudo
    FROM Pagos1 Pagos
    INNER JOIN Procesos ON Pagos.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Cuentas ON Pagos.CuentaId = Cuentas.CuentaId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE Cuentas.Activa = 1
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND YEAR(Pagos.Registro) = @Ano
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro),
        MONTH(Pagos.Registro),
        DATENAME(MONTH, Pagos.Registro)
)

-- Totalización
SELECT 
    'TOTAL' AS Seccional,
    'TOTAL' AS Juzgados,
    NULL AS Mes,
    SUM(Procesos) AS Procesos,
    SUM(Valor) AS Valor,
    SUM(Recaudo) AS Recaudo,
    SUM(Valor) - SUM(Recaudo) AS Saldo
FROM (
    SELECT 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END AS Juzgados,
        A.Mes,
        SUM(A.Procesos) AS Procesos,
        SUM(A.Valor) AS Valor,
        SUM(A.Recaudo) AS Recaudo,
        SUM(A.Valor) - SUM(A.Recaudo) AS Saldo
    FROM ProcesosData A
    WHERE A.Despacho LIKE '%PENAL%'
    GROUP BY 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END,
        A.MesNumero,
        A.Mes
) AS Totales;

";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Recaudo'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Indicadores_de_Gesti_n_Saldo(&$params)
	{
	global $pageObject;

// Obtener el valor de user
// Acceder a la variable de sesión
$user_id = $_SESSION['UserNameF'];
$ano_gestion = $_SESSION['indicadores_ano'];

$sql = "DECLARE @Ano INT = '$ano_gestion';
DECLARE @Username VARCHAR(30) =  '$user_id';

DECLARE @CarteraTipoId INT = (
    SELECT CarteraTipoId
    FROM UserProfile
    WHERE UserProfile.UserName = @Username
);

WITH ProcesosData AS (
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha) AS Ano,
        MONTH(Procesos.Fecha) AS MesNumero,
        DATENAME(MONTH, Procesos.Fecha) AS Mes,
        COUNT(*) AS Procesos,
        SUM(Procesos.Obligacion) AS Valor,
        0 AS Recaudo
    FROM Procesos
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE YEAR(Procesos.Fecha) = @Ano
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha),
        MONTH(Procesos.Fecha),
        DATENAME(MONTH, Procesos.Fecha)
    
    UNION ALL
    
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro) AS Ano,
        MONTH(Pagos.Registro) AS MesNumero,
        DATENAME(MONTH, Pagos.Registro) AS Mes,
        0 AS Procesos,
        0 AS Valor,
        SUM(Pagos.Pago) AS Recaudo
    FROM Pagos1 Pagos
    INNER JOIN Procesos ON Pagos.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Cuentas ON Pagos.CuentaId = Cuentas.CuentaId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE Cuentas.Activa = 1
        AND Procesos.CarteraTipoId = @CarteraTipoId
        AND YEAR(Pagos.Registro) = @Ano
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro),
        MONTH(Pagos.Registro),
        DATENAME(MONTH, Pagos.Registro)
)

-- Totalización
SELECT 
    'TOTAL' AS Seccional,
    'TOTAL' AS Juzgados,
    NULL AS Mes,
    SUM(Procesos) AS Procesos,
    SUM(Valor) AS Valor,
    SUM(Recaudo) AS Recaudo,
    SUM(Valor) - SUM(Recaudo) AS Saldo
FROM (
    SELECT 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END AS Juzgados,
        A.Mes,
        SUM(A.Procesos) AS Procesos,
        SUM(A.Valor) AS Valor,
        SUM(A.Recaudo) AS Recaudo,
        SUM(A.Valor) - SUM(A.Recaudo) AS Saldo
    FROM ProcesosData A
    WHERE A.Despacho LIKE '%PENAL%'
    GROUP BY 
        A.Seccional,
        CASE 
            WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
            WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
            WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
            WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
            WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
            WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
            WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
            WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
            ELSE A.Despacho
        END,
        A.MesNumero,
        A.Mes
) AS Totales;

";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$totalC6 = $row['Saldo'];

// Formatear el número con puntos como separadores de miles
$formattedValue = number_format($totalC6, 0, '', '.');

// Agregar el signo de pesos
$formattedValueWithCurrency = "$" . $formattedValue;

// Imprimir el valor formateado
echo "<strong>" ."Total: ". $formattedValueWithCurrency . "</strong>";
	;
}
	function event_Tablero_de_Control_Desde(&$params)
	{
	echo "<label for='Tablero_de_control_desdeId' style='margin-right: 20px;'>Desde: </label><br>";
echo "<input type='month' id='Tablero_de_control_desdeId' name='tablero_control_desde' value='' required><br>";
	;
}
	function event_Tablero_de_Control_Hasta(&$params)
	{
	echo "<label for='Tablero_de_control_hastaId' style='margin-right: 20px;'>Hasta: </label><br>";
echo "<input type='month' id='Tablero_de_control_hastaId' name='tablero_control_hasta' value='' required><br>";
	;
}
	function event_Tablero_de_Control_Cartera(&$params)
	{
	echo '<label for="cartera">Seleccione Cartera: </label>';
echo '<select name="Tablero_Reporte_Cartera" id="Tablero_Reporte_Carteraid">';
echo '<option value="0">Seleccione cartera</option>';

$sql1 = "select CarteraTipoId, CarteraTipo from CarteraTipos";
$result1 = DB::Query($sql1);
// Verificar si el resultado es válido
if ($result1) {
    // Fetch each row as an associative array
    while ($row1 = $result1->fetchAssoc()) {
        $carteraId = $row1['CarteraTipoId'];
        $cartera = $row1['CarteraTipo'];
        echo "<option value='$carteraId'>$cartera</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}


echo '</select>';
	;
}
	function event_Tablero_de_Control_GESTION_CARTERA_SECCIONAL(&$params)
	{
	echo '<label for="cartera">Seleccione Cartera</label>';
echo '<select name="Tablero_Cartera_gestion" id="Tablero_Cartera_gestion">';
echo '<option value="0">Seleccione cartera</option>';

$sql1 = "select CarteraTipoId, CarteraTipo from CarteraTipos";
$result1 = DB::Query($sql1);
// Verificar si el resultado es válido
if ($result1) {
    // Fetch each row as an associative array
    while ($row1 = $result1->fetchAssoc()) {
        $carteraId = $row1['CarteraTipoId'];
        $cartera = $row1['CarteraTipo'];
        echo "<option value='$carteraId'>$cartera</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}


echo '</select>';
	

echo '<label for="seccional">Seleccione Seccional</label>';
echo '<select name="Tablero_Seccional_gestion" id="Tablero_Seccional_gestion">';
echo '<option value="0">Seleccione Seccional</option>';

$sql = "SELECT SeccionalId, Seccional FROM Seccionales";
$result = DB::Query($sql);
// Verificar si el resultado es válido
if ($result) {
    // Fetch each row as an associative array
    while ($row = $result->fetchAssoc()) {
        $seccionalId = $row['SeccionalId'];
        $seccional = $row['Seccional'];
        echo "<option value='$seccionalId'>$seccional</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}

echo '</select>';

	;
}
	function event_Tablero_de_Control_GESTION_DESDE(&$params)
	{
	echo "<label for='Tablero_de_control_gestion_desdeId' style='margin-right: 20px;'>Desde: </label><br>";
echo "<input type='month' id='Tablero_de_control_gestion_desdeId' name='Tablero_de_control_gestion_desdeId' value='' required><br>";



	;
}
	function event_Tablero_de_Control_GESTION_HASTA(&$params)
	{
	echo "<label for='Tablero_de_control_gestion_hastaId' style='margin-right: 20px;'>Hasta: </label><br>";
echo "<input type='month' id='Tablero_de_control_gestion_hastaId' name='Tablero_de_control_gestion_hastaId' value='' required><br>";
	;
}
	function event_Base_de_Datos___Historico_snippet(&$params)
	{
	echo "<label for='BD_Historico_MesId' style='margin-right: 20px;'>Mes: </label><br>";
echo "<input type='date' id='BD_Historico_MesId' name='mes' value='" . date('Y-m-d') . "' required><br>";
	;
}
	function event_Base_de_Datos___Historico_Seccional_Cartera(&$params)
	{
	// Put your code here.
$U_user = $_SESSION["UserNameF"];

// Ejecutar la consulta


//if($U_user == cthomasb){

  
echo'<br>';
echo '<label for="cartera">Seleccione Cartera</label>';
echo '<select name="Reporte_Cartera" id="Reporte_Carteraid">';
echo '<option value="0">Seleccione cartera</option>';

$sql1 = "select CarteraTipoId, CarteraTipo from CarteraTipos";
$result1 = DB::Query($sql1);
// Verificar si el resultado es válido
if ($result1) {
    // Fetch each row as an associative array
    while ($row1 = $result1->fetchAssoc()) {
        $carteraId = $row1['CarteraTipoId'];
        $cartera = $row1['CarteraTipo'];
        echo "<option value='$carteraId'>$cartera</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}


echo '</select>';
echo'</br>';	

echo '<label for="seccional">Seleccione Seccional</label>';
echo '<select name="Reporte_Seccional" id="Reporte_Seccionalid">';
echo '<option value="0">Seleccione Seccional</option>';

$sql = "SELECT SeccionalId, Seccional FROM Seccionales";
$result = DB::Query($sql);
// Verificar si el resultado es válido
if ($result) {
    // Fetch each row as an associative array
    while ($row = $result->fetchAssoc()) {
        $seccionalId = $row['SeccionalId'];
        $seccional = $row['Seccional'];
        echo "<option value='$seccionalId'>$seccional</option>";
    }
} else {
    echo "<option value=''>Error en la consulta</option>";
}

echo '</select>';

echo'</br>';

//}
	;
}




}
?>