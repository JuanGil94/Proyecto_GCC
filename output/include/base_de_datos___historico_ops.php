<?php
$topsbase_de_datos___historico = array();
		$topsbase_de_datos___historico["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Excluidos] (

)
VALUES
(

)"
	);
				$topsbase_de_datos___historico["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec sp_executesql N'SELECT 
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
    [Project1].[Minjusticia_Def] AS [Minjusticia_Def], 
    [Project1].[Saldo] AS [Saldo]
    FROM ( SELECT 
        [Extent1].[SeccionalId] AS [SeccionalId], 
        [Extent1].[ConceptoId] AS [ConceptoId], 
        [Extent1].[Obligacion] AS [Obligacion], 
        [Extent1].[Costas] AS [Costas], 
        [Extent1].[Intereses] AS [Intereses], 
        [Extent1].[Minjusticia_Def] AS [Minjusticia_Def], 
        [Extent1].[EstadoId] AS [EstadoId], 
        [Extent1].[Numero] AS [Numero], 
        [Extent1].[Fecha] AS [Fecha], 
        [Extent1].[Ejecutoria] AS [Ejecutoria], 
        [Extent1].[Notificacion] AS [Notificacion], 
        [Extent1].[Sancionado] AS [Sancionado], 
        [Extent1].[SancionadoTipoDocumento] AS [SancionadoTipoDocumento], 
        [Extent1].[SancionadoDocumento] AS [SancionadoDocumento], 
        [Extent1].[Saldo] AS [Saldo]
        FROM (SELECT 
    [HistoricosView1].[Hasta] AS [Hasta], 
    [HistoricosView1].[SeccionalId] AS [SeccionalId], 
    [HistoricosView1].[CarteraTipoId] AS [CarteraTipoId], 
    [HistoricosView1].[ConceptoId] AS [ConceptoId], 
    [HistoricosView1].[Obligacion] AS [Obligacion], 
    [HistoricosView1].[Costas] AS [Costas], 
    [HistoricosView1].[Intereses] AS [Intereses], 
    [HistoricosView1].[Minjusticia_Def] AS [Minjusticia_Def], 
    [HistoricosView1].[ProcesoId] AS [ProcesoId], 
    [HistoricosView1].[EstadoId] AS [EstadoId], 
    [HistoricosView1].[Numero] AS [Numero], 
    [HistoricosView1].[Fecha] AS [Fecha], 
    [HistoricosView1].[Ejecutoria] AS [Ejecutoria], 
    [HistoricosView1].[Notificacion] AS [Notificacion], 
    [HistoricosView1].[Sancionado] AS [Sancionado], 
    [HistoricosView1].[SancionadoTipoDocumento] AS [SancionadoTipoDocumento], 
    [HistoricosView1].[SancionadoDocumento] AS [SancionadoDocumento], 
    [HistoricosView1].[Recaudo] AS [Recaudo], 
    [HistoricosView1].[Saldo] AS [Saldo], 
    [HistoricosView1].[Acuerdo] AS [Acuerdo], 
    [HistoricosView1].[Incumplimiento] AS [Incumplimiento], 
    [HistoricosView1].[Prescripcion] AS [Prescripcion]
    FROM [dbo].[HistoricosView1] AS [HistoricosView1]) AS [Extent1]
        WHERE ([Extent1].[CarteraTipoId] = @p__linq__0) AND ([Extent1].[SeccionalId] = @p__linq__1) AND ([Extent1].[Hasta] = @p__linq__2)
    )  AS [Project1]
    ORDER BY [Project1].[SeccionalId] ASC, [Project1].[Numero] ASC',N'@p__linq__0 int,@p__linq__1 int,@p__linq__2 datetime2(7)',@p__linq__0=1,@p__linq__1=1030,@p__linq__2='2024-03-31 00:00:00'"
	);
		$tables_data["Base de Datos - Historico"][".operations"] = &$topsbase_de_datos___historico;
?>