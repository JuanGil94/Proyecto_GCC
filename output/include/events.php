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



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		//phpinfo();
$arraySeccionales=array();
$arrayCiudades=array();
$username=$_SESSION["UserData"]["username"];
//buscar el UserId
$consulta=DB::Query("SELECT * from UserProfile where UserName='".$username."'");
while( $date = $consulta->fetchAssoc() )
{
	$userId=$date["UserId"];
	$_SESSION["AbogadoId"]=$date["AbogadoId"];
	$_SESSION["CarteraTipoId"]=$date["CarteraTipoId"];
}
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
$str= "<select style='width: 450px; display: inline-block;' class='form-control'>";
//select values from the database
$strSQL = "select * from Oficios";
$rs = db_query($strSQL);
while ($data = db_fetch_array($rs)){
$str.="<option value='".$data['OficioId']."'>".$data['Oficio']."</option>";
}
$str.="</select>";
echo $str;
/*
<select name="select">
    <option value="value1">Value 1</option>
    <option value="value2" selected>Value 2</option>
    <option value="value3">Value 3</option>
  </select>


echo "<option value='".$date['OficioId']."'>".$date['Oficio']."</option>";

<select id="seccional" class="selectholder" name="seccional">
                        <?php
                        $respuesta->validarSeccionales();
                        //$objeto10->seleccionarAbogado(); //se ejecuta el objeto ya creado en Comprobar.php
                        //print_r($respuesta); 
                        ?>
                    </select>
*/
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
echo '<label for="miInput">No. Proceso: </label><input for="miInput" id="procesoId" value="'.$data["ProcesoId"].'" readonly></input>';
echo '<label for="miInput">Abono Inicial: </label>
<input type="number" id="abono" name="" style="" value=0>
<label for="miLista">Periodo: </label>
<select id="periodo" name="">
    <option value="1">MENSUAL</option>
    <option value="2">BIMESTRAL</option>
    <option value="3">TRIMESTRAL</option>
    <option value="4">SEMESTRAL</option>
</select>
<label for="miInput">No. Cuotas: </label>
<input type="number" id="noCuotas" name="" style="" value=1>
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




}
?>