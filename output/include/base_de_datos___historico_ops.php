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
		"sql" => "DECLARE @Cartera INT = ':session.cateraid';
DECLARE @Seccional INT =':session.seccionalid';
DECLARE  @Hasta DATE =':session.mesHistorico';
-- Convertir el parámetro al formato YYYY-MM-DD con el último día del mes
DECLARE @fechaFinal DATE = EOMONTH(CONVERT(DATE, @Hasta));

SELECT 
    [SeccionalId], 
    [CarteraTipoId],
    [ConceptoId], 
    [Numero], 
    [Fecha], 
    [Ejecutoria], 
    [Notificacion], 
    [Sancionado], 
    [SancionadoTipoDocumento], 
    [SancionadoDocumento], 
    [Obligacion], 
    [Costas], 
    [Intereses], 
    [EstadoId], 
    [Minjusticia_Def], 
    [Saldo]
FROM (
    SELECT 
        [SeccionalId],
        [CarteraTipoId], 
        [ConceptoId], 
        [Obligacion], 
        [Costas], 
        [Intereses], 
        [Minjusticia_Def], 
        [EstadoId], 
        [Numero], 
        [Fecha], 
        [Ejecutoria], 
        [Notificacion], 
        [Sancionado], 
        [SancionadoTipoDocumento], 
        [SancionadoDocumento], 
        [Saldo]
    FROM (
        SELECT 
            [Hasta], 
            [SeccionalId], 
            [CarteraTipoId], 
            [ConceptoId], 
            [Obligacion], 
            [Costas], 
            [Intereses], 
            [Minjusticia_Def], 
            [ProcesoId], 
            [EstadoId], 
            [Numero], 
            [Fecha], 
            [Ejecutoria], 
            [Notificacion], 
            [Sancionado], 
            [SancionadoTipoDocumento], 
            [SancionadoDocumento], 
            [Recaudo], 
            [Saldo], 
            [Acuerdo], 
            [Incumplimiento], 
            [Prescripcion]
        FROM 
            [dbo].[HistoricosView1]
        WHERE 
            [CarteraTipoId] = @Cartera 
            AND [SeccionalId] = @Seccional
            AND [Hasta] = @fechaFinal
    ) AS [Extent1]
) AS [Project1]
ORDER BY [SeccionalId] ASC, [Numero] ASC;"
	);
		$tables_data["Base de Datos - Historico"][".operations"] = &$topsbase_de_datos___historico;
?>