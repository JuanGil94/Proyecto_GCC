<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_bienesinmuebles  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["CustomAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, $pageObject)
{

		$values["TipoPropiedad"]=2;

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$valor = $values["Avalúo"];
// Elimina los puntos
$valor_sin_puntos = str_replace('.', '', $valor);
$values["Avalúo"] = $valor_sin_puntos;


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		$valor = $values["Avalúo"];
// Elimina los puntos
$valor_sin_puntos = str_replace('.', '', $valor);
$values["Avalúo"] = $valor_sin_puntos;


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>