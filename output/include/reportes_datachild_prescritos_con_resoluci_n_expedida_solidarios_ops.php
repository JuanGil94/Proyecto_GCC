<?php
$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios = array();
		$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios["delete"] = array(
		"subtype" => "sql",
		"sql" => "DELETE FROM [Reportes]
WHERE
[ReporteId] = :{keys.ReporteId}
"
	);
				$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Reportes] (
	[Reporte],
	[OficioId],
	[Dias],
	[Minimo]
)
VALUES
(
	':{new.Reporte}',
	:{new.OficioId},
	:{new.Dias},
	:{new.Minimo}
)"
	);
				$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
    [Project1].[SolidarioId] AS [SolidarioId], 
    [Project1].[ProcesoId] AS [ProcesoId], 
    [Project1].[C1] AS [C1], 
    [Project1].[SancionadoId] AS [SancionadoId]
FROM 
    ( 
        SELECT 
            [Extent1].[SolidarioId] AS [SolidarioId], 
            [Extent1].[ProcesoId] AS [ProcesoId], 
            [Extent1].[SancionadoId] AS [SancionadoId], 
            CASE 
                WHEN ([Extent2].[Sancionado] IS NULL) THEN N'' 
                ELSE [Extent2].[Sancionado] 
            END 
            + N' - ' + 
            CASE 
                WHEN ([Extent2].[Documento] IS NULL) THEN N'' 
                ELSE [Extent2].[Documento] 
            END AS [C1]
        FROM  
            [dbo].[Solidarios] AS [Extent1]
        LEFT OUTER JOIN 
            [dbo].[Sancionados] AS [Extent2] 
        ON 
            [Extent1].[SancionadoId] = [Extent2].[SancionadoId]
        WHERE 
            [Extent1].[ProcesoId] = ':session.ProcesoIdDataReportes'
    ) AS [Project1]"
	);
				$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios["selectOne"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
 	[ReporteId],
	[Reporte],
	[OficioId],
	[Dias],
	[Minimo]
FROM [Reportes]
WHERE
[ReporteId] = :{keys.ReporteId}
"
	);
				$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios["update"] = array(
		"subtype" => "sql",
		"sql" => "UPDATE [Reportes] SET
	[Reporte] = ':{new.Reporte}',
	[OficioId] = :{new.OficioId},
	[Dias] = :{new.Dias},
	[Minimo] = :{new.Minimo}
WHERE
[ReporteId] = :{keys.ReporteId}
"
	);
		$tables_data["Reportes DataChild prescritos con resolución expedida_Solidarios"][".operations"] = &$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios;
?>