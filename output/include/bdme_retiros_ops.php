<?php
$topsbdme_retiros = array();
		$topsbdme_retiros["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Incumplimiento Acuerdo de Pago Semestral] (

)
VALUES
(

)"
	);
				$topsbdme_retiros["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMERetiros] @Desde='2023-06-14 00:00:00',@Hasta='2023-06-14 00:00:00',@UserName='lajaime'"
	);
		$tables_data["BDME Retiros"][".operations"] = &$topsbdme_retiros;
?>