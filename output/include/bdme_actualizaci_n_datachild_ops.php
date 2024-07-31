<?php
$topsbdme_actualizaci_n_datachild = array();
		$topsbdme_actualizaci_n_datachild["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
[Extent1].[SeccionalId] AS [SeccionalId],
	[Extent1].[SancionadoId] AS [SancionadoId],
    [Extent1].[ProcesoId] AS [ProcesoId], 
    CASE WHEN ([Extent1].[SeccionalId] IS NULL) THEN 0 ELSE [Extent1].[SeccionalId] END AS [C1], 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Numero] AS [Numero], 
     CAST( [Extent1].[Fecha] AS datetime2) AS [C2], 
    [Extent1].[Providencia] AS [Providencia], 
    [Extent1].[Ejecutoria] AS [Ejecutoria], 
    CASE WHEN ([Extent1].[ConceptoId] IS NULL) THEN 0 ELSE [Extent1].[ConceptoId] END AS [C3], 
    CASE WHEN ([Extent1].[EstadoId] IS NULL) THEN 1 ELSE [Extent1].[EstadoId] END AS [C4], 
    CASE WHEN ([Extent1].[EtapaId] IS NULL) THEN 1 ELSE [Extent1].[EtapaId] END AS [C5], 
    [Extent1].[Obligacion] + [Extent1].[Costas] + [Extent1].[Intereses] AS [C6], 
    [Extent1].[Terminacion] AS [Terminacion], 
    CASE WHEN ([Extent1].[MotivoId] IS NULL) THEN 0 ELSE [Extent1].[MotivoId] END AS [C7], 
    [Extent1].[Observaciones] AS [Observaciones], 
    [Extent1].[MinJusticia] AS [MinJusticia], 
    [Extent1].[CarteraTipoId] AS [CarteraTipoId], 
    [Extent1].[Acuerdo] AS [Acuerdo], 
    [Extent1].[Radicado] AS [Radicado], 
    [Extent1].[Origen] AS [Origen], 
    [Extent1].[Incumplimiento] AS [Incumplimiento]
    FROM (SELECT 
    [SancionadosPorProcesoView].[ProcesoId] AS [ProcesoId], 
    [SancionadosPorProcesoView].[SancionadoId] AS [SancionadoId], 
    [SancionadosPorProcesoView].[AbogadoId] AS [AbogadoId], 
    [SancionadosPorProcesoView].[Fecha] AS [Fecha], 
    [SancionadosPorProcesoView].[Numero] AS [Numero], 
    [SancionadosPorProcesoView].[Providencia] AS [Providencia], 
    [SancionadosPorProcesoView].[Ejecutoria] AS [Ejecutoria], 
    [SancionadosPorProcesoView].[ConceptoId] AS [ConceptoId], 
    [SancionadosPorProcesoView].[EstadoId] AS [EstadoId], 
    [SancionadosPorProcesoView].[EtapaId] AS [EtapaId], 
    [SancionadosPorProcesoView].[Obligacion] AS [Obligacion], 
    [SancionadosPorProcesoView].[Costas] AS [Costas], 
    [SancionadosPorProcesoView].[Intereses] AS [Intereses], 
    [SancionadosPorProcesoView].[Terminacion] AS [Terminacion], 
    [SancionadosPorProcesoView].[MotivoId] AS [MotivoId], 
    [SancionadosPorProcesoView].[Observaciones] AS [Observaciones], 
    [SancionadosPorProcesoView].[SeccionalId] AS [SeccionalId], 
    [SancionadosPorProcesoView].[MinJusticia] AS [MinJusticia], 
    [SancionadosPorProcesoView].[CarteraTipoId] AS [CarteraTipoId], 
    [SancionadosPorProcesoView].[Acuerdo] AS [Acuerdo], 
    [SancionadosPorProcesoView].[Incumplimiento] AS [Incumplimiento], 
    [SancionadosPorProcesoView].[Radicado] AS [Radicado], 
    [SancionadosPorProcesoView].[Origen] AS [Origen], 
    [SancionadosPorProcesoView].[Despacho] AS [Despacho]
    FROM [dbo].[SancionadosPorProcesoView] AS [SancionadosPorProcesoView]) AS [Extent1]
WHERE ([Extent1].[SancionadoId] = ':session.SancionadoIdData')"
	);
		$tables_data["BDME Actualización DataChild"][".operations"] = &$topsbdme_actualizaci_n_datachild;
?>