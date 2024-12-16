<?php
$topsrecaudo_por_seccional = array();
		$topsrecaudo_por_seccional["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Clasificaciones -- Cartera] (

)
VALUES
(

)"
	);
				$topsrecaudo_por_seccional["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Indicador_Recaudos_Total @Desde=':session.recaudo_seccional_busqueda_mes'"
	);
		$tables_data["Recaudo Por Seccional"][".operations"] = &$topsrecaudo_por_seccional;
?>