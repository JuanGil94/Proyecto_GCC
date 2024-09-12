<?php
$topslistado_de_chequeo_motivo_devolucion_datachild = array();
		$topslistado_de_chequeo_motivo_devolucion_datachild["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado de Chequeos] (

)
VALUES
(

)"
	);
				$topslistado_de_chequeo_motivo_devolucion_datachild["selectList"] = array(
		"subtype" => "sql",
		"sql" => "	SELECT 
    [Project1].[DevolucionId] AS [DevolucionId], 
    [Project1].[C1] AS [MotivoDevolucionId], 
    [Project1].[C2] AS [ChequeoId],
    [Project1].[Subsanado] AS [Subsanado], 
    [Project1].[Fecha] AS [Fecha], 
    [Project1].[Observaciones] AS [Observaciones]
    FROM ( SELECT 
        [Extent1].[DevolucionId] AS [DevolucionId], 
        [Extent1].[Fecha] AS [Fecha], 
        [Extent1].[Subsanado] AS [Subsanado], 
        [Extent1].[Observaciones] AS [Observaciones], 
        CASE WHEN ([Extent1].[MotivoDevolucionId] IS NULL) THEN 0 ELSE [Extent1].[MotivoDevolucionId] END AS [C1], 
        CASE WHEN ([Extent1].[ChequeoId] IS NULL) THEN 0 ELSE [Extent1].[ChequeoId] END AS [C2]
        FROM [dbo].[Devoluciones] AS [Extent1]
        WHERE [Extent1].[ChequeoId] = ':session.ChequeoId'
    )  AS [Project1]
    ORDER BY row_number() OVER (ORDER BY [Project1].[DevolucionId] ASC)"
	);
		$tables_data["Listado de Chequeo Motivo devolucion DataChild"][".operations"] = &$topslistado_de_chequeo_motivo_devolucion_datachild;
?>