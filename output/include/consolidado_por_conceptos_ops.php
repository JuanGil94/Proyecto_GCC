<?php
$topsconsolidado_por_conceptos = array();
		$topsconsolidado_por_conceptos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Privados de la Libertad] (

)
VALUES
(

)"
	);
				$topsconsolidado_por_conceptos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Millones INT = 0;
DECLARE @Divisor INT = CASE 
    WHEN @Millones = 1 THEN 1e6
    ELSE 1
END;
	DECLARE @UserId INT = ':session.consolidado_UserId';
	DECLARE @CarteraTipoId INT = ':session.consolidado_cartera';
	DECLARE @Desde DATE = ':session.consolidado_mes';
DECLARE @Hasta DATE = DATEADD(DAY, -1, DATEADD(MONTH, 1, @Desde));

-- Subconsulta para usar los alias
SELECT Hasta, Seccional, MultTota, InteTota, IncaTota, OtroTota,
    -- Suma los alias en la consulta externa
    (MultTota + InteTota + IncaTota + OtroTota) AS TotalCobro
FROM (
    SELECT @Hasta AS Hasta
        , Seccionales.Seccional
        , ROUND(ISNULL(SUM(CASE 
                WHEN Resumen.ConceptoId = 1
                    THEN Resumen.ObliTota
                END) / @Divisor, 0), 0) AS MultTota
        , ROUND(ISNULL(SUM(CASE 
                WHEN Resumen.ConceptoId = 1 
                    THEN Resumen.InteTota + Resumen.CostTota
                END) / @Divisor, 0), 0) AS InteTota
        , ROUND(ISNULL(SUM(CASE 
                WHEN Resumen.ConceptoId = 5
                    THEN Resumen.ObliTota + Resumen.InteTota + Resumen.CostTota
                END) / @Divisor, 0), 0) AS IncaTota
        , ROUND(ISNULL(SUM(CASE 
                WHEN Resumen.ConceptoId = 4 
                    THEN Resumen.ObliTota + Resumen.InteTota + Resumen.CostTota
                END) / @Divisor, 0), 0) AS OtroTota
        , CarteraTipos.CarteraTipo
        , SUM(Resumen.ProcTota) AS ProcTota
    FROM Resumen
    INNER JOIN Seccionales ON Resumen.SeccionalId = Seccionales.SeccionalId
    INNER JOIN CarteraTipos ON Resumen.CarteraTipoId = CarteraTipos.CarteraTipoId
    WHERE Resumen.CarteraTipoId = @CarteraTipoId
        AND Resumen.Hasta = @Hasta
    GROUP BY Seccionales.Seccional, CarteraTipos.CarteraTipo
) AS ResumenConAlias;"
	);
		$tables_data["Consolidado por Conceptos"][".operations"] = &$topsconsolidado_por_conceptos;
?>