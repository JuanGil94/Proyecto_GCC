<?php
$topscertificado_del_resumen_mensual = array();
		$topscertificado_del_resumen_mensual["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Procesos_Resumen @UserName='cthomasb',@Mes='2024-03-01',@Millones=0"
	);
		$tables_data["Certificado del Resumen Mensual"][".operations"] = &$topscertificado_del_resumen_mensual;
?>