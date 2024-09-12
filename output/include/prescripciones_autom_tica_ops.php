<?php
$topsprescripciones_autom_tica = array();
		$topsprescripciones_autom_tica["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Mandamientos de pago Automaticos] (

)
VALUES
(

)"
	);
				$topsprescripciones_autom_tica["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Listado_Prescritos] @UserName=':session.UserNameF',@Hasta=':session.Prescripciones_Autom_tica_Mes'"
	);
		$tables_data["Prescripciones Automática"][".operations"] = &$topsprescripciones_autom_tica;
?>