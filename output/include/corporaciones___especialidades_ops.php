<?php
$topscorporaciones___especialidades = array();
		$topscorporaciones___especialidades["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Clasificaciones -- Cartera] (

)
VALUES
(

)"
	);
				$topscorporaciones___especialidades["selectList"] = array(
		"subtype" => "sql",
		"sql" => " exec [dbo].[Listado_Especialidades] @Hasta=':session.corporacion_mes'"
	);
		$tables_data["Corporaciones - Especialidades"][".operations"] = &$topscorporaciones___especialidades;
?>