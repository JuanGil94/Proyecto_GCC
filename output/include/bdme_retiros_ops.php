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
		"sql" => "exec [dbo].[BDMERetiros] @Desde=':session.retiros_desde',@Hasta=':session.retiros_hasta',@UserName=':session.UserNameF'"
	);
		$tables_data["BDME Retiros"][".operations"] = &$topsbdme_retiros;
?>