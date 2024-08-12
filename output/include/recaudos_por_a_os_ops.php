<?php
$topsrecaudos_por_a_os = array();
		$topsrecaudos_por_a_os["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Obligaciones de Dificil Recaudo] (

)
VALUES
(

)"
	);
				$topsrecaudos_por_a_os["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Pivot_Recaudos] @Ano=':session.recaudo_ano'"
	);
		$tables_data["Recaudos por Años"][".operations"] = &$topsrecaudos_por_a_os;
?>