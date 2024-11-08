<?php
$topsconsulta_publica = array();
		$topsconsulta_publica["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Clasificaciones -- Cartera] (

)
VALUES
(

)"
	);
				$topsconsulta_publica["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Notificaciones_Select] @Documento=':session.doc_sancionado_consulta'"
	);
		$tables_data["Consulta Publica"][".operations"] = &$topsconsulta_publica;
?>