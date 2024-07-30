<?php
$topsbdme_actualizaci_n = array();
		$topsbdme_actualizaci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEActualizacion] @Desde='2023-09-29 00:00:00',@Hasta='2024-07-26 00:00:00',@Documento='',@Sancionado='',@UserName='cthomasb'"
	);
		$tables_data["BDME Actualización"][".operations"] = &$topsbdme_actualizaci_n;
?>