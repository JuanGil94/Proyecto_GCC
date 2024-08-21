<?php
$topsprocesos___mes = array();
		$topsprocesos___mes["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT = ':session.tablero_control_cartera';
DECLARE @Desde DATE = ':session.tablero_control_desdeid'; 
DECLARE @Hasta  DATE =  ':session.tablero_control_hastaid';

     SET @Desde = DATEADD(day, -DATEPART(dy, @Hasta) + 1, @Hasta);
     SELECT Desde Mes,
            SUM(ProcTota) AS ProcTota,
            SUM(ObliTota + CostTota + InteTota) / 1e6 AS ObliTota
     FROM Resumen
     WHERE(CarteraTipoId = @CarteraTipoId)
          AND (Desde <= @Hasta)
          AND (Hasta >= @Desde)
     GROUP BY Desde
     ORDER BY Mes;"
	);
		$tables_data["Procesos - Mes"][".operations"] = &$topsprocesos___mes;
?>