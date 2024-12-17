<?php
$topsclasificaciones____cartera = array();
		$topsclasificaciones____cartera["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Acuerdo de Pago] (

)
VALUES
(

)"
	);
				$topsclasificaciones____cartera["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Hasta DATE = ':session.Clasificaciones_MesId';
SET @Hasta = EOMONTH(@Hasta);
DECLARE @Desde DATE = DATEADD(DAY, 1, EOMONTH(DATEADD(MONTH, -1, @Hasta)));
DECLARE @Uvt MONEY = (
    SELECT TOP (1) Uvt
    FROM Uvts
    WHERE Ano = YEAR(GETDATE()) -- Asegúrate de filtrar correctamente
    ORDER BY Ano DESC
);

SELECT 
    P.ProcesoId, 
    P.CarteraTipoId, 
    P.SeccionalId, 
    ISNULL(P.Plazo, P.Ejecutoria) AS Fecha, 
    P.ConceptoId, 
    P.NaturalezaId, 
    P.Numero, 
    P.SancionadoId, 
    P.SancionadoId AS Documento, 
    P.ObligacionInicial AS Obligacion, 
    P.InteresesInicial AS Intereses, 
    P.CostasInicial AS Costas, 
    P.Recaudo, 
    SUM(P.Obligacion + P.Costas + P.Intereses) AS Saldo, 
    CONVERT(INT, SUM(P.Obligacion + P.Costas + P.Intereses) / @Uvt) AS Uvts, 
    dbo.Get_Nivel(P.ProcesoId) AS Nivel, 
    dbo.Get_Busquedas(P.ProcesoId, @Hasta) AS Busquedas, 
    CONVERT(BIT, 1) AS Negativo, 
    CONVERT(BIT, 1) AS Positivo, 
	60-(ISNULL(V.Dias, 0) + (dbo.Suspensiones_GetBy_Periodo(CASE WHEN P.Incumplimiento IS NULL OR
                         P.Incumplimiento < P.Acuerdo OR
                         P.Incumplimiento < P.Notificacion THEN CASE WHEN P.Acuerdo IS NULL OR
                         P.Acuerdo < P.Notificacion THEN CASE WHEN P.Notificacion IS NULL THEN P.Ejecutoria ELSE P.Notificacion END ELSE P.Acuerdo END ELSE P.Incumplimiento END, 
                         GETDATE(), P.SeccionalId) + DATEDIFF(day, GETDATE(), DATEADD(year, CASE WHEN P.ConceptoId = 5 THEN 3 ELSE 5 END, CASE WHEN P.Incumplimiento IS NULL OR
                         P.Incumplimiento < P.Acuerdo OR
                         P.Incumplimiento < P.Notificacion THEN CASE WHEN P.Acuerdo IS NULL OR
                         P.Acuerdo < P.Notificacion THEN CASE WHEN P.Notificacion IS NULL THEN P.Ejecutoria ELSE P.Notificacion END ELSE P.Acuerdo END ELSE P.Incumplimiento END)) 
                         ))/30 AS Prescripcion,
            --60 - CONVERT(INT, Prescripcion / 30) AS Antiguedad, 
    dbo.Get_Clasificacion(P.ProcesoId, @Hasta) AS Clasificacion
	FROM 
		Procesos P LEFT OUTER JOIN InterrupcionesSumaView V ON P.ProcesoId = V.ProcesoId
	WHERE 
		P.Fecha <= @Hasta
		AND P.EstadoId <> 6
	GROUP BY 
		P.ProcesoId, 
		P.CarteraTipoId, 
		P.SeccionalId,
		P.Plazo,
		P.Ejecutoria,
		P.ConceptoId, 
		P.NaturalezaId, 
		P.Numero, 
		P.SancionadoId, 
		P.ObligacionInicial, 
		P.InteresesInicial, 
		P.CostasInicial,
		P.Recaudo, 
		P.Obligacion,
		P.Costas,
		P.Intereses,
		P.Incumplimiento,
		P.Acuerdo,
		P.Notificacion,
		V.Dias
"
	);
		$tables_data["Clasificaciones -- Cartera"][".operations"] = &$topsclasificaciones____cartera;
?>