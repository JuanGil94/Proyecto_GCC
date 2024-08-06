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
		"sql" => "exec [dbo].[BDMESemestral] @Mes=':session.mes_report_Semestral',@UserName=':session.UserNameF',@Documento=':session.doc_sancionado_report_semestral',@Sancionado=':session.sancionado_report_Semestral'"
	);
		$tables_data["BDME Reporte Semestral"][".operations"] = &$topsbdme_reporte_semestral;
?>