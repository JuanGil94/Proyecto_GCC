<?php
$topsconsulta_p_blica = array();
		$topsconsulta_p_blica["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Clasificaciones -- Cartera] (

)
VALUES
(

)"
	);
				$topsconsulta_p_blica["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Notificaciones_Select] @Documento=':session.doc_sancionado_consulta'"
	);
		$tables_data["Consulta Pública"][".operations"] = &$topsconsulta_p_blica;
?>