<?php
$topsintereses_por_proceso = array();
		$topsintereses_por_proceso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Intereses_Pivot] @Ano=':session.ano_interes',@Username=':session.UserNameF'"
	);
		$tables_data["Intereses por Proceso"][".operations"] = &$topsintereses_por_proceso;
?>