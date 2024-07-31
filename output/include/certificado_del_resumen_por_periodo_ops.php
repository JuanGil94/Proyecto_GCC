<?php
$topscertificado_del_resumen_por_periodo = array();
		$topscertificado_del_resumen_por_periodo["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Certificado del Resumen Mensual] (

)
VALUES
(

)"
	);
				$topscertificado_del_resumen_por_periodo["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.Procesos_Certificado @UserName='cthomasb',@MesDesde='2024-03-01',@MesHasta='2024-04-01',@Millones=0"
	);
		$tables_data["Certificado del Resumen por Periodo"][".operations"] = &$topscertificado_del_resumen_por_periodo;
?>