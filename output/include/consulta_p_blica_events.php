<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_consulta_p_blica  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		
		set_time_limit(0); // Elimina la restricción de timeout

 	    // Obtener la URL completa de la página actual
    $currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    // Analizar la URL y obtener el path
    $parsedUrl = parse_url($currentUrl);
    $path = $parsedUrl['path'];
		 
    // Mostrar el path actual
    //echo "El path actual es: " . $path;

		/*if ($_SESSION['ventanaWebpath'] != $path) {
    $_SESSION['ventanaWebpath'] = $path;
		 unset($_SESSION['doc_sancionado_consulta']);
     unset($_SESSION['SancionadoIdConsulta']);
		}*/

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>