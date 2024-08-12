<?php
$topsobligaciones_de_dificil_recaudo = array();
		$topsobligaciones_de_dificil_recaudo["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topsobligaciones_de_dificil_recaudo["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
    [Project1].[SeccionalId] AS [SeccionalId], 
    [Project1].[ConceptoId] AS [ConceptoId], 
    [Project1].[Numero] AS [Numero], 
    [Project1].[Fecha] AS [Fecha], 
    [Project1].[Ejecutoria] AS [Ejecutoria], 
    [Project1].[Notificacion] AS [Notificacion], 
    [Project1].[Sancionado] AS [Sancionado], 
    [Project1].[SancionadoTipoDocumento] AS [SancionadoTipoDocumento], 
    [Project1].[SancionadoDocumento] AS [SancionadoDocumento], 
    [Project1].[Obligacion] AS [Obligacion], 
    [Project1].[Costas] AS [Costas], 
    [Project1].[Intereses] AS [Intereses], 
    [Project1].[EstadoId] AS [EstadoId], 
    [Project1].[Saldo] AS [Saldo], 
    [Project1].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[ConceptoId] AS [ConceptoId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[EstadoId] AS [EstadoId], 
        [Extent1].[Numero] AS [Numero], 
        [Extent1].[Fecha] AS [Fecha], 
        [Extent1].[Ejecutoria] AS [Ejecutoria], 
        [Extent1].[Notificacion] AS [Notificacion], 
        [Extent1].[Sancionado] AS [Sancionado], 
        [Extent1].[SancionadoTipoDocumento] AS [SancionadoTipoDocumento], 
        [Extent1].[SancionadoDocumento] AS [SancionadoDocumento], 
        [Extent1].[Saldo] AS [Saldo], 
        [Extent1].[Rel_Deterioro] AS [Rel_Deterioro]
        FROM (SELECT 
    [HistoricosView2].[Hasta] AS [Hasta], 
    [HistoricosView2].[SeccionalId] AS [SeccionalId], 
    [HistoricosView2].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView2].[ConceptoId] AS [ConceptoId], 
    [HistoricosView2].[Obligacion] AS [Obligacion], 
    [HistoricosView2].[Costas] AS [Costas], 
    [HistoricosView2].[Intereses] AS [Intereses], 
    [HistoricosView2].[ProcesoId] AS [ProcesoId], 
    [HistoricosView2].[EstadoId] AS [EstadoId], 
    [HistoricosView2].[Numero] AS [Numero], 
    [HistoricosView2].[Fecha] AS [Fecha], 
    [HistoricosView2].[Ejecutoria] AS [Ejecutoria], 
    [HistoricosView2].[Notificacion] AS [Notificacion], 
    [HistoricosView2].[Sancionado] AS [Sancionado], 
    [HistoricosView2].[SancionadoTipoDocumento] AS [SancionadoTipoDocumento], 
    [HistoricosView2].[SancionadoDocumento] AS [SancionadoDocumento], 
    [HistoricosView2].[Recaudo] AS [Recaudo], 
    [HistoricosView2].[Saldo] AS [Saldo], 
    [HistoricosView2].[Acuerdo] AS [Acuerdo], 
    [HistoricosView2].[Incumplimiento] AS [Incumplimiento], 
    [HistoricosView2].[Prescripcion] AS [Prescripcion], 
    [HistoricosView2].[Rel_Deterioro] AS [Rel_Deterioro]
    FROM [dbo].[HistoricosView2] AS [HistoricosView2]) AS [Extent1]
    WHERE ([Extent1].[CarteraTipoId] = ':session.cateraid') AND ([Extent1].[SeccionalId] = ':session.seccionalid') AND ([Extent1].[Hasta] = ':session.difire_mes')
    )  AS [Project1]
	ORDER BY [Project1].[SeccionalId] ASC, [Project1].[Numero]"
	);
		$tables_data["Obligaciones de Dificil Recaudo"][".operations"] = &$topsobligaciones_de_dificil_recaudo;
?>