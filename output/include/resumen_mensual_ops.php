<?php
$topsresumen_mensual = array();
		$topsresumen_mensual["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Procesos_Resumen ':session.UserNameF',':session.fechaIn',0"
	);
		$tables_data["Resumen_Mensual"][".operations"] = &$topsresumen_mensual;
?>