<?php
$topsprueba_archivo_plano = array();
		$topsprueba_archivo_plano["selectList"] = array(
		"subtype" => "sql",
		"sql" => "
SELECT SeccionalId, Codigo, CiudadId FROM Seccionales"
	);
		$tables_data["Prueba Archivo Plano"][".operations"] = &$topsprueba_archivo_plano;
?>