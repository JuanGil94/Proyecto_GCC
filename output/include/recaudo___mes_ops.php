<?php
$topsrecaudo___mes = array();
		$topsrecaudo___mes["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT      = ':session.tablero_control_cartera';
DECLARE @Desde DATE = ':session.tablero_control_desdeid'; 
DECLARE @Hasta DATE = ':session.tablero_control_hastaid';

     SET @Desde = DATEADD(day, -DATEPART(dy, @Hasta) + 1, @Hasta);
     SELECT Desde Mes,
            SUM(ObliReca) / 1e6 AS ObliReca
     FROM Resumen
     WHERE(CarteraTipoId = @CarteraTipoId)
          AND (Desde <= @Hasta)
          AND (Hasta >= @Desde)
     GROUP BY Desde
     ORDER BY Mes;"
	);
		$tables_data["Recaudo - Mes"][".operations"] = &$topsrecaudo___mes;
?>