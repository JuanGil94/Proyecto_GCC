<?php
$topsintereses_por_proceso_report = array();
		$topsintereses_por_proceso_report["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Intereses_Pivot] @Ano=NULL,@Username='cthomasb'"
	);
		$tables_data["Intereses por Proceso Report"][".operations"] = &$topsintereses_por_proceso_report;
?>