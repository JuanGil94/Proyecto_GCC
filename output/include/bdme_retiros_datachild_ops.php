<?php
$topsbdme_retiros_datachild = array();
		$topsbdme_retiros_datachild["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
    COALESCE([Extent1].[SeccionalId], 0) AS [SeccionalId],
    [Extent1].[SancionadoId],
    [Extent1].[ProcesoId], 
    COALESCE([Extent1].[SeccionalId], 0) AS [C1], 
    [Extent1].[AbogadoId], 
    [Extent1].[AbogadoId] AS CORREO, 
    [Extent1].[Numero], 
    CAST([Extent1].[Fecha] AS datetime2) AS [C2], 
    [Extent1].[Providencia], 
    [Extent1].[Ejecutoria], 
    COALESCE([Extent1].[ConceptoId], 0) AS [C3], 
    COALESCE([Extent1].[EstadoId], 1) AS [C4], 
    COALESCE([Extent1].[EtapaId], 1) AS [C5], 
    [Extent1].[Obligacion] + [Extent1].[Costas] + [Extent1].[Intereses] AS [C6], 
    [Extent1].[Terminacion], 
    COALESCE([Extent1].[MotivoId], 0) AS [C7], 
    [Extent1].[Observaciones], 
    [Extent1].[MinJusticia], 
    [Extent1].[CarteraTipoId], 
    [Extent1].[Acuerdo], 
    [Extent1].[Radicado], 
    [Extent1].[Origen], 
    [Extent1].[Incumplimiento]
FROM (
    SELECT 
        [SancionadosPorProcesoView].[ProcesoId], 
        [SancionadosPorProcesoView].[SancionadoId], 
        [SancionadosPorProcesoView].[AbogadoId], 
        [SancionadosPorProcesoView].[AbogadoId] as Correo, 
        [SancionadosPorProcesoView].[Fecha], 
        [SancionadosPorProcesoView].[Numero], 
        [SancionadosPorProcesoView].[Providencia], 
        [SancionadosPorProcesoView].[Ejecutoria], 
        [SancionadosPorProcesoView].[ConceptoId], 
        [SancionadosPorProcesoView].[EstadoId], 
        [SancionadosPorProcesoView].[EtapaId], 
        [SancionadosPorProcesoView].[Obligacion], 
        [SancionadosPorProcesoView].[Costas], 
        [SancionadosPorProcesoView].[Intereses], 
        [SancionadosPorProcesoView].[Terminacion], 
        [SancionadosPorProcesoView].[MotivoId], 
        [SancionadosPorProcesoView].[Observaciones], 
        [SancionadosPorProcesoView].[SeccionalId], 
        [SancionadosPorProcesoView].[MinJusticia], 
        [SancionadosPorProcesoView].[CarteraTipoId], 
        [SancionadosPorProcesoView].[Acuerdo], 
        [SancionadosPorProcesoView].[Incumplimiento], 
        [SancionadosPorProcesoView].[Radicado], 
        [SancionadosPorProcesoView].[Origen], 
        [SancionadosPorProcesoView].[Despacho]
    FROM [dbo].[SancionadosPorProcesoView]
) AS [Extent1]
WHERE [Extent1].[SancionadoId] = ':session.SancionadoIdData_report_Retiro';"
	);
		$tables_data["BDME Retiros DataChild"][".operations"] = &$topsbdme_retiros_datachild;
?>