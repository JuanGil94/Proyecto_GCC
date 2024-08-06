<?php
$topsbdme_retiros1 = array();
		$topsbdme_retiros1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMERetiros] @Desde=':session.retiros_desde',@Hasta=':session.retiros_hasta',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Retiros"][".operations"] = &$topsbdme_retiros1;
?>