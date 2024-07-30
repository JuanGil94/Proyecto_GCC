<?php
$topslistado_medidas_cautelares = array();
		$topslistado_medidas_cautelares["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Medidas_Select] @SeccionalId=1030,@Sancionado='',@Identificacion=''"
	);
		$tables_data["Listado Medidas Cautelares"][".operations"] = &$topslistado_medidas_cautelares;
?>