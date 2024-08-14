<?php
$topstotal_recaudado = array();
		$topstotal_recaudado["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Tablero de Control Total Procesos] (

)
VALUES
(

)"
	);
				$topstotal_recaudado["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT      = 1;
DECLARE @Desde DATE = ':session.tablero_control_desdeid';
DECLARE @Hasta  DATE = ':session.tablero_control_hastaid';

     DECLARE @Total FLOAT=
(
    SELECT SUM(ObliReca) / 1e6
    FROM Resumen
    WHERE(CarteraTipoId = @CarteraTipoId)
         AND (Desde <= @Hasta)
         AND (Hasta >= @Desde)
);
     WITH a
          AS (
          SELECT SeccionalId,
                 ROW_NUMBER() OVER(ORDER BY Hasta DESC) AS RowNo,
                 SUM(ProcReca) AS ProcReca,
                 SUM(ObliReca) / 1e6 AS ObliReca
          FROM Resumen
          WHERE(CarteraTipoId = @CarteraTipoId)
               AND (Desde <= @Hasta)
               AND (Hasta >= @Desde)
          GROUP BY SeccionalId,
                   Hasta)
          SELECT Seccional,
                 SUM(a.ObliReca / @Total) Porcentaje,
                 SUM(a.ProcReca) ProcReca,
                 SUM(a.ObliReca) ObliReca
          FROM a
               INNER JOIN Seccionales ON Seccionales.SeccionalId = a.SeccionalId
          WHERE a.ObliReca / @Total > 0
          GROUP BY Seccional;"
	);
		$tables_data["Total Recaudado"][".operations"] = &$topstotal_recaudado;
?>