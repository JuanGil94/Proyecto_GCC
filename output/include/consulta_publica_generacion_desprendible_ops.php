<?php
$topsconsulta_publica_generacion_desprendible = array();
		$topsconsulta_publica_generacion_desprendible["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Consulta Pública] (

)
VALUES
(

)"
	);
				$topsconsulta_publica_generacion_desprendible["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Desprendibles_Select] @Documento=':session.doc_sancionado_desprendible'"
	);
		$tables_data["Consulta Publica Generacion Desprendible"][".operations"] = &$topsconsulta_publica_generacion_desprendible;
?>