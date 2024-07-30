<?php
$topsbdme_gu_a_del_deudor_moroso = array();
		$topsbdme_gu_a_del_deudor_moroso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEGuia] @Mes='2024-06-01 00:00:00',@UserName='cthomasb'"
	);
		$tables_data["BDME Guía del Deudor Moroso"][".operations"] = &$topsbdme_gu_a_del_deudor_moroso;
?>