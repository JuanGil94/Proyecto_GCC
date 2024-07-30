<?php
$topsbdme_reporte_semestral = array();
		$topsbdme_reporte_semestral["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Retiros] (

)
VALUES
(

)"
	);
				$topsbdme_reporte_semestral["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMESemestral] @Mes='2024-07-01 00:00:00',@UserName='cthomasb',@Documento='1022322897',@Sancionado=''"
	);
		$tables_data["BDME Reporte Semestral"][".operations"] = &$topsbdme_reporte_semestral;
?>