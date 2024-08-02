<?php
$topsbdme_gu_a_del_deudor_moroso1 = array();
		$topsbdme_gu_a_del_deudor_moroso1["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Guía del Deudor Moroso] (

)
VALUES
(

)"
	);
				$topsbdme_gu_a_del_deudor_moroso1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEGuia] @Mes=':session.mesDeudor',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Guía del Deudor Moroso"][".operations"] = &$topsbdme_gu_a_del_deudor_moroso1;
?>