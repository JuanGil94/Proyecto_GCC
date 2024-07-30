<?php
$topsbdme_excluidos = array();
		$topsbdme_excluidos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Cancelación Acuerdo de Pago] (

)
VALUES
(

)"
	);
				$topsbdme_excluidos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEExcluidos] @Mes='2024-06-01 00:00:00',@UserName='cthomasb',@Documento='800140949',@Sancionado=''"
	);
		$tables_data["BDME Excluidos"][".operations"] = &$topsbdme_excluidos;
?>