<?php
$topsconsulta_p_blica_generaci_n_desprendible = array();
		$topsconsulta_p_blica_generaci_n_desprendible["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Consulta Pública] (

)
VALUES
(

)"
	);
				$topsconsulta_p_blica_generaci_n_desprendible["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Desprendibles_Select] @Documento=':session.doc_sancionado_desprendible'"
	);
		$tables_data["Consulta Pública Generación Desprendible"][".operations"] = &$topsconsulta_p_blica_generaci_n_desprendible;
?>