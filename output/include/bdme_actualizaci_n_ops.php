<?php
$topsbdme_actualizaci_n = array();
		$topsbdme_actualizaci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEActualizacion] @Desde=':session.desde',@Hasta=':session.hasta',@Documento=':session.doc_sancionado',@Sancionado=':session.sancionado',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Actualización"][".operations"] = &$topsbdme_actualizaci_n;
?>