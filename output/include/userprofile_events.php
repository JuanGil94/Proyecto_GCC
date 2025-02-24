<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_userprofile  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["CopyOnLoad"]=true;



		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeDelete"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		

    $username = $values['UserName'];
		$password = "NuevaClave"; // Contraseña original
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Puedes reemplazar PASSWORD_BCRYPT por otro algoritmo si lo deseas

		$valorPersonalizado = $values['miCampoOculto'];
		$email = $values['Email'];
		$fullname = $values['Nombre'];
		$fechaReset = date('d.m.Y',strtotime("-1 days"));
		
		

		$sqlInsert = "INSERT INTO [UsuGCC-_users] (username,email,fullname,active,password,reset_date) VALUES ('$username','$email','$fullname',1,'$hashedPassword','$fechaReset')";

 // Enviar un mensaje personalizado al cliente
    
    try {
        CustomQuery($sqlInsert);
        LogInfo("Inserción exitosa: " . $sqlInsert);
    } catch (Exception $e) {
        LogInfo("Error en la inserción: " . $e->getMessage());
    }
// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd($pageObject)
{

			


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
				// Copy page: OnLoad
function CopyOnLoad(&$values, &$where, $pageObject)
{

		


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function CopyOnLoad

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList($pageObject)
{

		
 

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, $pageObject)
{

		
		$username = $deleted_values['UserName'];

		$sqlInsert = "DELETE FROM [UsuGCC-_users] where username = '$username'";

		$sql = "select UserId from UserProfile  where UserName = '$username'";
		
		// Ejecutar la consulta
		$result = DB::Query($sql);

		// Obtener el resultado
		$row = $result->fetchAssoc();
		$id = $row['UserId'];
		
		//Query para borrar usuarios-id de tablas  [UsuGCC-ugmembers] ,UsuariosCarteraTipos y UsuariosSeccionales
		$sqlDeleteugmembers = "DELETE FROM [UsuGCC-ugmembers] where UserName = '$username'";
		$sqlDeleteUsuariosCarteraTipos = "DELETE FROM UsuariosCarteraTipos where UserId = '$id'";
		$sqlDeleteUsuariosSeccionales = "DELETE FROM UsuariosSeccionales where UserId = '$id'";

 // Enviar un mensaje personalizado al cliente
    
    try {
        
					CustomQuery($sqlDeleteugmembers);
					CustomQuery($sqlDeleteUsuariosCarteraTipos);
					CustomQuery($sqlDeleteUsuariosSeccionales);
					CustomQuery($sqlInsert);
        LogInfo("Inserción exitosa: " . $sqlInsert);
    } catch (Exception $e) {
        LogInfo("Error en la inserción: " . $e->getMessage());
    }
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

			$username = $values['UserName'];
	$Nombre = $values['Nombre'];

		$sql = "UPDATE [UsuGCC-_users] set fullname = '$Nombre' WHERE username = '$username'";
		
		// Enviar un mensaje personalizado al cliente
    
    try {
        CustomQuery($sql);
        LogInfo("Actualización exitosa: " . $sql);
				    // Devuelve un script para recargar la página
					 if (!$inline) {
						  $pageObject->setProxyValue("customJS", "window.location.reload();");
					 }
						return true;
    } catch (Exception $e) {
        LogInfo("Error en la Actualización: " . $e->getMessage());
    }


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>