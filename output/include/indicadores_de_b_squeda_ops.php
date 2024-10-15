<?php
$topsindicadores_de_b_squeda = array();
		$topsindicadores_de_b_squeda["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Indicadores de Gestión] (

)
VALUES
(

)"
	);
				$topsindicadores_de_b_squeda["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Indicador_Busquedas @Desde=':session.indicadores_busqueda_mes',@Hasta=':session.indicadores_busqueda_mes'"
	);
		$tables_data["Indicadores de búsqueda"][".operations"] = &$topsindicadores_de_b_squeda;
?>