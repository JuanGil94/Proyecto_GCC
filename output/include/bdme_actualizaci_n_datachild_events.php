<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_bdme_actualizaci_n_datachild  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeShowList"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		   
set_time_limit(0); // Elimina la restricción de timeout/ Place event code here.
 // Verifica si hay un registro maestro disponible
    $data = $pageObject->getMasterRecord();
    
    if ($data) {
        // Obtiene el ID del sancionado
        $sancionadoId = $data["SancionadoId"];
        
        // Almacena el ID en la sesión
        $_SESSION['SancionadoIdData'] = $sancionadoId;
    }

	
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		    // Obtén el registro maestro
    $data = $pageObject->getMasterRecord();
   // if ($data) {
        $sancionadoId = $data["SancionadoId"];
        $_SESSION['SancionadoIdData'] = $sancionadoId;
        
        // Imprime el contenido del registro maestro para depuración
       // echo "<pre>";
      //  echo "Registro maestro encontrado:\n";
       // print_r($data);
       // echo "Valor de SancionadoId: $sancionadoId\n";
       // echo "</pre>";
    //} else {
      //  echo "<pre>";
      //  echo "No se encontró el registro maestro.";
       // echo "</pre>";
    //}
    
    // Depuración
    //echo "BeforeDisplay ejecutado<br>";

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>