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



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		//echo($data);
// Place event code here.
// Use "Add Action" button to add code snippets.
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
echo '<label for="miInput">Abono Inicial: </label>
<input type="number" id="" name="" style="">
<label for="miLista">Periodo: </label>
<select id="" name="">
    <option value="1">MENSUAL</option>
    <option value="2">BIMESTRAL</option>
    <option value="3">TRIMESTRAL</option>
    <option value="4">MENSUAL</option>
</select>
<label for="miInput">No. Cuotas: </label>
<input type="number" id="" name="" style="">
<label for="fechaSeleccionada">Fecha Inicial:</label>
<input type="date" id="fechaSeleccionada" name="fecha">';
	;
}




}
?>