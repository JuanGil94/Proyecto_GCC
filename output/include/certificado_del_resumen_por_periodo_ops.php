<?php
$topscertificado_del_resumen_por_periodo = array();
		$topscertificado_del_resumen_por_periodo["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Procesos_Resumen @UserName='cthomasb',@Mes='2024-03-01',@Millones=0"
	);
		$tables_data["Certificado del Resumen por Periodo"][".operations"] = &$topscertificado_del_resumen_por_periodo;
?>