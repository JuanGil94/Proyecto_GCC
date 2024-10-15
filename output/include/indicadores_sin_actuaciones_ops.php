<?php
$topsindicadores_sin_actuaciones = array();
		$topsindicadores_sin_actuaciones["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Cumplimiento de metas de Recaudo] (

)
VALUES
(

)"
	);
				$topsindicadores_sin_actuaciones["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Indicador_SinActuacion @Desde=':session.indicadores_sin_actuacion_mes' ,@Hasta=':session.indicadores_sin_actuacion_mes'"
	);
		$tables_data["Indicadores Sin Actuaciones"][".operations"] = &$topsindicadores_sin_actuaciones;
?>