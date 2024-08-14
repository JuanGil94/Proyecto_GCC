<?php
$topstotal_procesos = array();
		$topstotal_procesos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Tablero de Control] (

)
VALUES
(

)"
	);
				$topstotal_procesos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT      = 1;
DECLARE @Desde  DATE = ':session.tablero_control_desdeid';
DECLARE @Hasta   DATE = ':session.tablero_control_hastaid';


     DECLARE @Total FLOAT=
(
    SELECT SUM(ProcTota)
    FROM Resumen
    WHERE(CarteraTipoId = @CarteraTipoId)
         AND (Desde <= @Hasta)
         AND (Hasta >= @Desde)
);
     WITH a
          AS (
          SELECT SeccionalId,
                 ROW_NUMBER() OVER(ORDER BY Hasta DESC) AS RowNo,
                 SUM(ProcTota) AS ProcTota,
                 SUM(ObliTota + CostTota + InteTota) / 1e6 AS ObliTota
          FROM Resumen
          WHERE(CarteraTipoId = @CarteraTipoId)
               AND (Desde <= @Hasta)
               AND (Hasta >= @Desde)
          GROUP BY SeccionalId,
                   Hasta)
          SELECT Seccional,
                 SUM(a.ProcTota / @Total) Porcentaje,
                 SUM(a.ProcTota) ProcTota,
                 SUM(a.ObliTota) ObliTota
          FROM a
               INNER JOIN Seccionales ON Seccionales.SeccionalId = a.SeccionalId
          GROUP BY Seccional;"
	);
		$tables_data["Total Procesos"][".operations"] = &$topstotal_procesos;
?>