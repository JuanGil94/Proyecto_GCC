<?php
$topspresunci_n_prescripci_n = array();
		$topspresunci_n_prescripci_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topspresunci_n_prescripci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Procesos_Prescripcion] @UserName='cthomasb',@Mes='2024-05-01 00:00:00'"
	);
		$tables_data["Presunción Prescripción"][".operations"] = &$topspresunci_n_prescripci_n;
?>