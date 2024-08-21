<?php
$topstablero_de_control_general = array();
		$topstablero_de_control_general["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Indicadores de Gestión] (

)
VALUES
(

)"
	);
				$topstablero_de_control_general["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT = ':session.tablero_control_cartera';
DECLARE @Desde DATE = ':session.tablero_control_desdeid'; 
DECLARE @Hasta DATE = ':session.tablero_control_hastaid'; 

WITH a AS (
    SELECT 
        SUM(ProcActu) AS ProcActu,
        SUM(ObliActu + CostActu + InteActu) / 1e6 AS ObliActu,
        SUM(ProcReca) AS ProcReca,
        SUM(ObliReca + CostReca + InteReca) / 1e6 AS ObliReca,
        SUM(ProcNopa) AS ProcNopa,
        SUM(ObliNopa + CostNopa + InteNopa) / 1e6 AS ObliNopa,
        1 AS RowNo,
        0 AS ProcTota,
        0 AS ObliTota
    FROM Resumen
    WHERE CarteraTipoId = @CarteraTipoId
        AND Desde <= @Hasta
        AND Hasta >= @Desde
    
    UNION ALL
    
    SELECT 
        0 AS ProcActu,
        0 AS ObliActu,
        0 AS ProcReca,
        0 AS ObliReca,
        0 AS ProcNopa,
        0 AS ObliNopa,
        ROW_NUMBER() OVER(ORDER BY Hasta DESC) AS RowNo,
        SUM(ProcTota) AS ProcTota,
        SUM(ObliTota + CostTota + InteTota) / 1e6 AS ObliTota
    FROM Resumen
    WHERE CarteraTipoId = @CarteraTipoId
    AND CONVERT(DATETIME, Desde, 120) <= @Hasta
    AND CONVERT(DATETIME, Hasta, 120) >= @Desde
    GROUP BY Hasta
)

SELECT 
    SUM(ProcActu) AS ProcActu,
    SUM(ObliActu) AS ObliActu,
    SUM(ProcReca) AS ProcReca,
    SUM(ObliReca) AS ObliReca,
    SUM(ProcTota) AS ProcTota,
    SUM(ObliTota) AS ObliTota,
    SUM(ProcNopa) AS ProcNopa,
    SUM(ObliNopa) AS ObliNopa
FROM a
WHERE RowNo = 1;
"
	);
		$tables_data["Tablero de Control General"][".operations"] = &$topstablero_de_control_general;
?>