<?php
$topsbdme_cancelaci_n_acuerdo_de_pago = array();
		$topsbdme_cancelaci_n_acuerdo_de_pago["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Reporte Semestral] (

)
VALUES
(

)"
	);
				$topsbdme_cancelaci_n_acuerdo_de_pago["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMECancelacion] '2023-01-03 00:00:00','2024-01-30 00:00:00' ,'cthomasb'"
	);
		$tables_data["BDME Cancelación Acuerdo de Pago"][".operations"] = &$topsbdme_cancelaci_n_acuerdo_de_pago;
?>