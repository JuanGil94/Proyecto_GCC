<?php
$topsintereses_por_proceso = array();
		$topsintereses_por_proceso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Ano INT = ':session.ano_interes'
DECLARE @Username VARCHAR(30) = ':session.UserNameF'
DECLARE @Cartera INT = ':session.cartera_id_report'
DECLARE @Seccional INT = ':session.seccional_id_report'

SELECT 
    CarteraTipoId,
    SeccionalId,
    Proceso,
    Seccional,
    ISNULL([1], 0) AS Enero,
    ISNULL([2], 0) AS Febrero,
    ISNULL([3], 0) AS Marzo,
    ISNULL([4], 0) AS Abril,
    ISNULL([5], 0) AS Mayo,
    ISNULL([6], 0) AS Junio,
    ISNULL([7], 0) AS Julio,
    ISNULL([8], 0) AS Agosto,
    ISNULL([9], 0) AS Septiembre,
    ISNULL([10], 0) AS Octubre,
    ISNULL([11], 0) AS Noviembre,
    ISNULL([12], 0) AS Diciembre,
    ISNULL([1],0) + ISNULL([2],0) + ISNULL([3],0) + ISNULL([4],0) + 
    ISNULL([5],0) + ISNULL([6],0) + ISNULL([7],0) + ISNULL([8],0) + 
    ISNULL([9],0) + ISNULL([10],0) + ISNULL([11],0) + ISNULL([12],0) AS TotalIntereses
FROM 
    (
    SELECT 
        Procesos.CarteraTipoId,
        Procesos.SeccionalId,
        Procesos.Numero AS Proceso,
        Seccionales.Seccional,
        MONTH(Intereses.Fecha) AS MesNumero,
        Intereses.Intereses
    FROM
        Intereses 
    INNER JOIN Procesos ON Intereses.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Historicos ON Procesos.ProcesoId = Historicos.ProcesoId 
        AND Procesos.SeccionalId = Historicos.SeccionalId 
        AND EOMONTH(Intereses.Fecha) = Historicos.Hasta
    WHERE 
        YEAR(Intereses.Fecha) = @Ano 
        AND Procesos.CarteraTipoId = @Cartera 
        AND Procesos.SeccionalId = @Seccional
    ) AS SourceTable
PIVOT
    (
    SUM(Intereses)
    FOR MesNumero IN ([1], [2], [3], [4], [5], [6], [7], [8], [9], [10], [11], [12])
    ) AS PivotTable
ORDER BY Proceso;
"
	);
		$tables_data["Intereses por Proceso"][".operations"] = &$topsintereses_por_proceso;
?>