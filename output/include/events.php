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

//	onscreen events
		$this->events["dbo_Chequeos_snippet"] = true;
		$this->events["dbo_Correspondencias_snippet"] = true;



		}

//	handlers

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




}
?>