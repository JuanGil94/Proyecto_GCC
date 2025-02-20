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
		"sql" => "DECLARE @Cartera INT = ':session.cartera1';
DECLARE @Cartera2 INT = ':session.cartera2';
DECLARE @Cartera3 INT = ':session.cartera3';
DECLARE @Cartera4 INT = ':session.cartera4';
DECLARE @Cartera5 INT = ':session.cartera5';
DECLARE @Seccional INT =':session.seccional1';
DECLARE @Seccional2 INT =':session.seccional2';
DECLARE @Seccional3 INT =':session.seccional3';
DECLARE @Seccional4 INT =':session.seccional4';
DECLARE @Seccional5 INT =':session.seccional5';
DECLARE @Seccional6 INT =':session.seccional6';
DECLARE @Seccional7 INT =':session.seccional7';
DECLARE @Seccional8 INT =':session.seccional8';
DECLARE @Seccional9 INT =':session.seccional9';
DECLARE @Seccional10 INT =':session.seccional10';
DECLARE @Seccional11 INT =':session.seccional11';
DECLARE @Seccional12 INT =':session.seccional12';
DECLARE @Seccional13 INT =':session.seccional13';
DECLARE @Seccional14 INT =':session.seccional14';
DECLARE @Seccional15 INT =':session.seccional15';
DECLARE @Seccional16 INT =':session.seccional16';
DECLARE @Seccional17 INT =':session.seccional17';
DECLARE @Seccional18 INT =':session.seccional18';
DECLARE @Seccional19 INT =':session.seccional19';
DECLARE @Seccional20 INT =':session.seccional20';
DECLARE @Seccional21 INT =':session.seccional21';
DECLARE @Seccional22 INT =':session.seccional22';
DECLARE @Seccional23 INT =':session.seccional23';
DECLARE @Seccional24 INT =':session.seccional24';
DECLARE @Seccional25 INT =':session.seccional25';
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
            [CarteraTipoId] IN (@Cartera, @Cartera2, @Cartera3,@Cartera4,@Cartera5)
            AND [SeccionalId]  IN (@Seccional,@Seccional2,@Seccional3,@Seccional4,@Seccional5,@Seccional6,@Seccional7,@Seccional8,@Seccional9,@Seccional10,@Seccional11,@Seccional12,@Seccional13,@Seccional,@Seccional14,@Seccional15,@Seccional16,@Seccional17,@Seccional18,@Seccional19,@Seccional20,@Seccional21,@Seccional22,@Seccional23,@Seccional24,@Seccional25)
            AND [Hasta] = @fechaFinal
    ) AS [Extent1]
) AS [Project1]
ORDER BY [SeccionalId] ASC, [Numero] ASC;"
	);
		$tables_data["Base de Datos - Historico"][".operations"] = &$topsbase_de_datos___historico;
?>