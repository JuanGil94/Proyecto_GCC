<?php
$topsprocesos_sin_notificaci_n = array();
		$topsprocesos_sin_notificaci_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Prescripciones Automática] (

)
VALUES
(

)"
	);
				$topsprocesos_sin_notificaci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Listado_Notificaciones] @UserName=':session.UserNameF'"
	);
		$tables_data["Procesos Sin Notificación"][".operations"] = &$topsprocesos_sin_notificaci_n;
?>