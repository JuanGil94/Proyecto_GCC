<?php
$topslistado_medidas_cautelares = array();
		$topslistado_medidas_cautelares["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Medidas_Select] @SeccionalId='',@Sancionado=':session.medidas_sancionado',@Identificacion=':session.medidas_documento'"
	);
		$tables_data["Listado Medidas Cautelares"][".operations"] = &$topslistado_medidas_cautelares;
?>