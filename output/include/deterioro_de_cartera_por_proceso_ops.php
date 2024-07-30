<?php
$topsdeterioro_de_cartera_por_proceso = array();
		$topsdeterioro_de_cartera_por_proceso["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Base de Datos - Historico] (

)
VALUES
(

)"
	);
				$topsdeterioro_de_cartera_por_proceso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Deterioro_Pivot] @Fecha='2021-02-01 00:00:00',@UserName='cthomasb'"
	);
		$tables_data["Deterioro de Cartera por Proceso"][".operations"] = &$topsdeterioro_de_cartera_por_proceso;
?>