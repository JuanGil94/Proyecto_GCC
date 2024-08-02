<?php
$topsbdme_cancelaci_n_acuerdo_de_pago1 = array();
		$topsbdme_cancelaci_n_acuerdo_de_pago1["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Reporte Semestral] (

)
VALUES
(

)"
	);
				$topsbdme_cancelaci_n_acuerdo_de_pago1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMECancelacion] ':session.Cancelacion_desde',':session.Cancelacion_hasta' ,':session.UserNameF'"
	);
		$tables_data["BDME Cancelación Acuerdo de Pago"][".operations"] = &$topsbdme_cancelaci_n_acuerdo_de_pago1;
?>