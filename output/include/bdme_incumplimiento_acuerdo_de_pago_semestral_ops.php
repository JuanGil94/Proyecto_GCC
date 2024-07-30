<?php
$topsbdme_incumplimiento_acuerdo_de_pago_semestral = array();
		$topsbdme_incumplimiento_acuerdo_de_pago_semestral["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Guía del Deudor Moroso] (

)
VALUES
(

)"
	);
				$topsbdme_incumplimiento_acuerdo_de_pago_semestral["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEIncumplimientos] @Mes='2023-07-01 00:00:00',@UserName='cthomasb'"
	);
		$tables_data["BDME Incumplimiento Acuerdo de Pago Semestral"][".operations"] = &$topsbdme_incumplimiento_acuerdo_de_pago_semestral;
?>