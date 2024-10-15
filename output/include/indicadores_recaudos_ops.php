<?php
$topsindicadores_recaudos = array();
		$topsindicadores_recaudos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Indicadores de búsqueda] (

)
VALUES
(

)"
	);
				$topsindicadores_recaudos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Indicador_Recaudos @Desde=':session.indicadores_recaudo_desde',@Hasta=':session.indicadores_recaudo_hasta'"
	);
		$tables_data["Indicadores Recaudos"][".operations"] = &$topsindicadores_recaudos;
?>