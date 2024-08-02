<?php
$topsbdme_incumplimiento_acuerdo_de_pago_semestral1 = array();
		$topsbdme_incumplimiento_acuerdo_de_pago_semestral1["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Guía del Deudor Moroso] (

)
VALUES
(

)"
	);
				$topsbdme_incumplimiento_acuerdo_de_pago_semestral1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEIncumplimientos] @Mes=':session.mesIncumplimiento',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Incumplimiento Acuerdo de Pago Semestral"][".operations"] = &$topsbdme_incumplimiento_acuerdo_de_pago_semestral1;
?>