<?php
$topsbdme_gu_a_del_deudor_moroso = array();
		$topsbdme_gu_a_del_deudor_moroso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEGuia] @Mes=':session.mesDeudor',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Guía del Deudor Moroso"][".operations"] = &$topsbdme_gu_a_del_deudor_moroso;
?>