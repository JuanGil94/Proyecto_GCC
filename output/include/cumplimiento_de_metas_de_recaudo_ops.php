<?php
$topscumplimiento_de_metas_de_recaudo = array();
		$topscumplimiento_de_metas_de_recaudo["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Informe ejecutivo de Gestión] (

)
VALUES
(

)"
	);
				$topscumplimiento_de_metas_de_recaudo["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Listado_Presupuesto @Hasta=':session.cumplimiento_mes'"
	);
		$tables_data["Cumplimiento de metas de Recaudo"][".operations"] = &$topscumplimiento_de_metas_de_recaudo;
?>