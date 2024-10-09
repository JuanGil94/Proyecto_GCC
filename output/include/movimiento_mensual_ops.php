<?php
$topsmovimiento_mensual = array();
		$topsmovimiento_mensual["selectList"] = array(
		"subtype" => "sql",
		"sql" => "        DECLARE @UserName VARCHAR(30) = ':session.UserNameF';
        DECLARE @Mes      DATE = ':session.movimiento_mes';
		SET NOCOUNT ON;
        DECLARE @UserId INT=
        (
            SELECT UserId
            FROM UserProfile
            WHERE UserName = @UserName
        );
        DECLARE @FechaCierre DATE=
        (
            SELECT Cierre
            FROM Empresas
            WHERE EmpresaId = 1
        );
        DECLARE @CarteraTipoId INT=':session.cartera_id_movimiento';

         DECLARE @Seccional VARCHAR(30)=
        (
            SELECT UPPER(LEFT(Seccional, 1)) + LOWER(SUBSTRING(Seccional, 2, LEN(Seccional)))
             FROM Seccionales
             WHERE SeccionalId = ':session.seccional_id_movimiento'
        );

        SET @Mes = EOMONTH(@Mes);
        DECLARE @Desde DATE= DATEADD(day, 1, @FechaCierre);
        DECLARE @Hasta DATE= DATEADD(day, -1, DATEADD(month, 1, @Desde));
        IF @Desde < CONVERT(DATE, '01/01/2015', 103)
            BEGIN
                SET @Desde = CONVERT(DATE, '01/01/1930', 103);
        END;
        IF @Mes BETWEEN @Desde AND @Hasta
            BEGIN
                BEGIN TRY
                    BEGIN TRANSACTION;

                    -- Eliminamos los datos del periodo abierto
                    DELETE FROM Movimiento
                    WHERE Hasta = @Hasta
                          AND CarteraTipoId = @CarteraTipoId;

                    -- Calculamos los datos del periodo abierto y los insertamos en la tabla Movimiento
                                        WITH A
                                             AS (SELECT 1 AS Tipo, -- Nuevos 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.ObligacionCreacion AS Obligacion, 
                                                        Procesos.CostasCreacion AS Costas, 
                                                        Procesos.InteresesCreacion AS Intereses, 
                                                        Procesos.Mayor AS Mayor, 
                                                        Procesos.Observaciones
                                                 FROM Procesos
                                                 WHERE((Procesos.Fecha BETWEEN @desde AND @Hasta))
                                                      AND (Procesos.Traslado IS NULL)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                 UNION ALL
                                                 SELECT 2 AS Tipo, -- Recaudos 
                                                        Procesos.SeccionalId, 
                                                        Pagos1.Registro AS Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Pagos1.PagoObli AS Obligacion, 
                                                        Pagos1.PagoCost AS Costas, 
                                                        Pagos1.PagoInte AS Intereses, 
                                                        Pagos1.PagoMayo AS Mayor, 
                                                        Cuentas.Numero AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN Pagos1 ON Procesos.ProcesoId = Pagos1.ProcesoId
                                                      INNER JOIN Cuentas ON Pagos1.CuentaId = Cuentas.CuentaId
                                                 WHERE(CONVERT(DATE, Pagos1.Registro) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Pagos1.PagoTerm = 0)
                                                 UNION ALL
                                                 SELECT 3 AS Tipo, 
                                                        Terminados.SeccionalId, 
                                                        Terminados.Fecha, 
                                                        Terminados.ConceptoId, 
                                                        Terminados.ProcesoId, 
                                                        Terminados.SancionadoId, 
                                                        Terminados.Obligacion, 
                                                        Terminados.Costas, 
                                                        Terminados.Intereses, 
                                                        Terminados.Mayor, 
                                                        Motivos.Motivo AS Observaciones
                                                 FROM Terminados
                                                      INNER JOIN Motivos ON Terminados.MotivoId = Motivos.MotivoId
                                                 WHERE(CONVERT(DATE, Terminados.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (Terminados.MotivoId = 1)
                                                      AND (Terminados.CarteraTipoId = @CarteraTipoId)
                                                      AND (Terminados.Revocatoria = 0)
                                                 UNION ALL
                                                 SELECT 4 AS Tipo, -- Terminados sin pago 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor, 
                                                        Motivos.Motivo AS Observaciones
                                                 FROM Terminados AS Procesos
                                                      INNER JOIN Motivos ON Procesos.MotivoId = Motivos.MotivoId
                                                 WHERE(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (Procesos.MotivoId <> 1) -- TERMINADO POR PAGO
                                                      AND (Procesos.MotivoId <> 11) -- TERMINADO POR TRASLADO A OTRA SECCIONAL
                                                      AND (Procesos.MotivoId <> 13) -- TERMINADO POR TRASLADO A OTRA ENTIDAD
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Revocatoria = 0)
                                                 UNION ALL
                                                 SELECT 5 AS Tipo, -- Trasladados (Terminados por traslado a otra entidad) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion AS Obligacion, 
                                                        Procesos.Costas AS Costas, 
                                                        Procesos.Intereses AS Intereses, 
                                                        Procesos.Mayor AS Mayor, 
                                                        Motivos.Motivo AS Observaciones
                                                 FROM Terminados AS Procesos
                                                      INNER JOIN Motivos ON Procesos.MotivoId = Motivos.MotivoId
                                                 WHERE(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (Procesos.MotivoId = 13) -- Terminados por traslado a otra entidad
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Revocatoria = 0)
                                                 UNION ALL
                                                 SELECT 51 AS Tipo, -- Trasladados (Terminados por traslado a otra seccional) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        -1 * Procesos.Obligacion AS Obligacion, 
                                                        -1 * Procesos.Costas AS Costas, 
                                                        -1 * Procesos.Intereses AS Intereses, 
                                                        -1 * Procesos.Mayor AS Mayor, 
                                                        Motivos.Motivo AS Observaciones
                                                 FROM Terminados AS Procesos
                                                      INNER JOIN Motivos ON Procesos.MotivoId = Motivos.MotivoId
                                                 WHERE(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (Procesos.MotivoId = 11) -- Terminados por traslado a otra seccional
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Revocatoria = 0)
                                                 UNION ALL
                                                 SELECT 52 AS Tipo, -- Trasladados (Recibidos por traslado de otra seccional) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha AS Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor, 
                                                        'Trasladado de otra Seccional' AS Observaciones
                                                 FROM Procesos
                                                 WHERE(Procesos.Traslado BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Procesos.Fecha <= @Hasta)
                                                 UNION ALL

                                                 -- Novedades -- CAMBIO DE CONCEPTO
                                                 SELECT 6 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        NovedadesConceptosView.Fecha, 
                                                        NovedadesConceptosView.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        NovedadesConceptosView.Obligacion, 
                                                        NovedadesConceptosView.Costas, 
                                                        NovedadesConceptosView.Intereses, 
                                                        Procesos.Mayor, 
                                                        'CAMBIO DE CONCEPTO' AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesConceptosView ON Procesos.ProcesoId = NovedadesConceptosView.ProcesoId
                                                 WHERE(CONVERT(DATE, NovedadesConceptosView.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (NOT Procesos.Fecha BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Procesos.Fecha <= @Hasta)
                                                 UNION ALL

                                                 -- Novedades -- CAMBIO DE OBLIGACION
                                                 SELECT 61 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Obligaciones.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Obligaciones.Diferencia AS Obligacion, 
                                                        0 AS Costas, 
                                                        0 AS Intereses, 
                                                        0 AS Mayor, 
                                                        Obligaciones.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Obligaciones ON Procesos.ProcesoId = Obligaciones.ProcesoId
                                                 WHERE Obligaciones.Tipo IN(2, 11)
                                                      AND (CONVERT(DATE, Obligaciones.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Procesos.Fecha <= @Hasta)
                                                      AND (Obligaciones.Diferencia < 0)
                                                 UNION ALL
                                                 SELECT 62 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Obligaciones.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Obligaciones.Diferencia AS Obligacion, 
                                                        0 AS Costas, 
                                                        0 AS Intereses, 
                                                        0 AS Mayor, 
                                                        Obligaciones.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Obligaciones ON Procesos.ProcesoId = Obligaciones.ProcesoId
                                                 WHERE Obligaciones.Tipo IN(2, 11)
                                                      AND (CONVERT(DATE, Obligaciones.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Procesos.Fecha <= @Hasta)
                                                      AND (Obligaciones.Diferencia > 0)
                                                 UNION ALL

                                                 -- Novedades -- CAMBIO DE COSTAS
                                                 SELECT 63 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Costas.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        0 AS Obligacion, 
                                                        Costas.Diferencia AS Costas, 
                                                        0 AS Intereses, 
                                                        0 AS Mayor, 
                                                        Costas.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Costas ON Procesos.ProcesoId = Costas.ProcesoId
                                                 WHERE Costas.Tipo = 3
                                                       AND (CONVERT(DATE, Costas.Fecha) BETWEEN @desde AND @Hasta)
                                                       AND (CarteraTipoId = @CarteraTipoId)
                                                       AND (Procesos.Fecha <= @Hasta)
                                                       AND (Costas.Diferencia < 0)
                                                 UNION ALL
                                                 SELECT 64 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Costas.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        0 AS Obligacion, 
                                                        Costas.Diferencia AS Costas, 
                                                        0 AS Intereses, 
                                                        0 AS Mayor, 
                                                        Costas.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Costas ON Procesos.ProcesoId = Costas.ProcesoId
                                                 WHERE Costas.Tipo = 3
                                                       AND (CONVERT(DATE, Costas.Fecha) BETWEEN @desde AND @Hasta)
                                                       AND (CarteraTipoId = @CarteraTipoId)
                                                       AND (Procesos.Fecha <= @Hasta)
                                                       AND (Costas.Diferencia > 0)
                                                 UNION ALL
                                                 -- Novedades -- CAMBIO DE INTERESES
                                                 SELECT 65 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Intereses.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        0 AS Obligacion, 
                                                        0 AS Costas, 
                                                        Intereses.Diferencia AS Intereses, 
                                                        0 AS Mayor, 
                                                        Intereses.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Intereses ON Procesos.ProcesoId = Intereses.ProcesoId
                                                 WHERE Intereses.Tipo = 4
                                                       AND (CarteraTipoId = @CarteraTipoId)
                                                       AND (CONVERT(DATE, Intereses.Fecha) BETWEEN @desde AND @Hasta)
                                                       AND (Procesos.Fecha <= @Hasta)
                                                       AND (Intereses.Diferencia < 0)
                                                 UNION ALL
                                                 SELECT 66 AS Tipo, 
                                                        Procesos.SeccionalId, 
                                                        Intereses.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        0 AS Obligacion, 
                                                        0 AS Costas, 
                                                        Intereses.Diferencia AS Intereses, 
                                                        0 AS Mayor, 
                                                        Intereses.Observaciones AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN NovedadesView AS Intereses ON Procesos.ProcesoId = Intereses.ProcesoId
                                                 WHERE Intereses.Tipo = 4
                                                       AND (CarteraTipoId = @CarteraTipoId)
                                                       AND (CONVERT(DATE, Intereses.Fecha) BETWEEN @desde AND @Hasta)
                                                       AND (Procesos.Fecha <= @Hasta)
                                                       AND (Intereses.Diferencia > 0)
                                                 UNION ALL
                                                 SELECT 7 AS Tipo, 
													Procesos.SeccionalId, 
													Procesos.Fecha, 
													Procesos.ConceptoId, 
													Procesos.ProcesoId, 
													Procesos.SancionadoId, 
													- Procesos.Obligacion + case when Procesos.ProcesoId=976420 then Procesos_1.Mayor else 0 end AS Obligacion, 
													- Procesos.Costas AS Costas, 
													- Procesos.Intereses AS Intereses, 
                                                    - Procesos.Mayor AS Mayor, 
													'' AS Observaciones
													FROM     
														Terminados AS Procesos INNER JOIN
														Motivos ON Procesos.MotivoId = Motivos.MotivoId INNER JOIN
														Procesos AS Procesos_1 ON Procesos.ProcesoId = Procesos_1.ProcesoId
													WHERE  
													(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta) 
													AND (Procesos.MotivoId = 1) 
													AND (Procesos.CarteraTipoId = @CarteraTipoId) 
													AND (Procesos.Obligacion + Procesos.Costas + Procesos.Intereses <= 0)
                                                 UNION ALL
                                                 SELECT 8 AS Tipo, -- Menor valor pagado en los Terminados por Pago 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor AS Mayor, 
                                                        Motivos.Motivo AS Observaciones
                                                 FROM Terminados Procesos
                                                      INNER JOIN Motivos ON Procesos.MotivoId = Motivos.MotivoId
                                                 WHERE(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (Procesos.MotivoId = 1) -- TERMINADO POR PAGO
                                                      AND (Procesos.Obligacion + Procesos.Costas + Procesos.Intereses) > 0
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                 UNION ALL
                                                 SELECT 9 AS Tipo, -- Recaudos Procesos Terminados 
                                                        Procesos.SeccionalId, 
                                                        Pagos1.Registro AS Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Pagos1.PagoTerm AS Obligacion, 
                                                        0 AS Costas, 
                                                        0 AS Intereses, 
                                                        0 AS Mayor, 
                                                        Cuentas.Numero AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN Pagos1 ON Procesos.ProcesoId = Pagos1.ProcesoId
                                                      INNER JOIN Cuentas ON Pagos1.CuentaId = Cuentas.CuentaId
                                                 WHERE(CONVERT(DATE, Pagos1.Registro) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Pagos1.PagoTerm > 0)
                                                 UNION ALL
                                                 SELECT 10 AS Tipo, -- Intereses Generados 
                                                        Procesos.SeccionalId, 
                                                        Intereses.Fecha,
                                                        CASE
                                                            WHEN Conceptos.ConceptoId >= 4
                                                            THEN Conceptos.ConceptoId
                                                            ELSE 1
                                                        END AS ConceptoId, 
                                                        0 AS ProcesoId, 
                                                        0 AS SancionadoId, 
                                                        0 AS Obligacion, 
                                                        0 AS Costas, 
                                                        SUM(Intereses.Intereses) AS Intereses, 
                                                        0 AS Mayor, 
                                                        '' AS Observaciones
                                                 FROM Procesos
                                                      INNER JOIN Intereses ON Procesos.ProcesoId = Intereses.ProcesoId
                                                      INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
                                                 WHERE(Procesos.CarteraTipoId = @CarteraTipoId)
                                                      AND (CONVERT(DATE, Intereses.Fecha) BETWEEN @Desde AND @Hasta)
                                                 GROUP BY Procesos.SeccionalId, 
                                                          Intereses.Fecha,
                                                          CASE
                                                              WHEN Conceptos.ConceptoId >= 4
                                                              THEN Conceptos.ConceptoId
                                                              ELSE 1
                                                          END, 
                                                          Conceptos.Concepto
                                                 --HAVING SUM(Intereses.Intereses) > 0
                                                 UNION ALL
                                                 SELECT 11 AS Tipo, -- Revocatoria de Terminación 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor, 
                                                        '' AS Observaciones
                                                 FROM Terminados AS Procesos
                                                 WHERE(CONVERT(DATE, Procesos.Fecha) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Revocatoria = 1)

                                                 UNION ALL
                                                 SELECT 53 AS Tipo, -- Trasladados (Terminados por traslado a otra cartera) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.TrasladoCartera Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        -1 * (Procesos.Obligacion 
														+isnull((select sum(PagoObli) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0)) Obligacion, 
                                                        -1 * (Procesos.Costas 
														+isnull((select sum(PagoCost) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0)) Costas, 
														-1 * (Procesos.Intereses  
														-isnull((select sum(intereses) from intereses where procesoId = Procesos.ProcesoId and intereses.Fecha BETWEEN @desde AND Procesos.TrasladoCartera), 0)  
														-isnull((select sum(intereses)-525774.5525 from intereses where procesoId = Procesos.ProcesoId and intereses.Fecha = @Hasta and Intereses.Intereses > 2e7), 0)  
														+isnull((select sum(PagoInte) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0)) Intereses, 
                                                        -1 * Procesos.Mayor AS Mayor, 
                                                        'TRASLADADO A ' + isnull(Procesos.CarteraTipo,'') AS Observaciones
                                                 FROM ProcesosView1 Procesos
                                                 WHERE(CONVERT(DATE, Procesos.TrasladoCartera) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoIdOrigen = @CarteraTipoId)
													  AND (Procesos.EstadoId <> 6) -- No Terminados

                                                 UNION ALL
                                                 SELECT 54 AS Tipo, -- Trasladados (Recibidos por traslado de otra cartera) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.TrasladoCartera Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion 
														+isnull((select sum(PagoObli) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0) Obligacion, 
                                                        Procesos.Costas 
														+isnull((select sum(PagoCost) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0) Costas, 
														Procesos.Intereses
														-isnull((select sum(intereses) from intereses where procesoId = Procesos.ProcesoId and intereses.Fecha BETWEEN @desde AND Procesos.TrasladoCartera), 0)  
														-isnull((select sum(intereses) from intereses where procesoId = Procesos.ProcesoId and intereses.Fecha = @Hasta and Intereses.Intereses > 2e7), 0)  
														+isnull((select sum(PagoInte) from Pagos1 where procesoId = Procesos.ProcesoId and Pagos1.Registro BETWEEN @desde AND @Hasta), 0) Intereses, 
                                                        Procesos.Mayor, 
                                                        'TRASLADADO DESDE ' + isnull(Procesos.CarteraTipoOrigen,'') AS Observaciones
                                                 FROM ProcesosView1 Procesos
                                                 WHERE(Procesos.TrasladoCartera BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
													  AND (Procesos.EstadoId <> 6) -- No Terminados

                                                 UNION ALL
                                                 SELECT 55 AS Tipo, -- Trasladados (Terminados por traslado a otro concepto) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.TrasladoConcepto Fecha, 
                                                        Procesos.ConceptoIdOrigen ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        -1 * Procesos.Obligacion AS Obligacion, 
                                                        -1 * Procesos.Costas AS Costas, 
                                                        -1 * Procesos.Intereses AS Intereses, 
                                                        -1 * Procesos.Mayor AS Mayor, 
                                                        'TRASLADADO HASTA CONCEPTO ' + isnull(Procesos.Concepto,'') AS Observaciones
                                                 FROM ProcesosView1 Procesos
                                                 WHERE(CONVERT(DATE, Procesos.TrasladoConcepto) BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
													  AND (Procesos.EstadoId <> 6) -- No Terminados
                                                 UNION ALL
                                                 SELECT 56 AS Tipo, -- Trasladados (Recibidos por traslado de otro concepto) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.TrasladoConcepto Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor AS Mayor, 
                                                        'TRASLADADO DESDE CONCEPTO ' + isnull(Procesos.ConceptoOrigen,'') AS Observaciones
                                                 FROM ProcesosView1 Procesos
                                                 WHERE(Procesos.TrasladoConcepto BETWEEN @desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
													  AND (Procesos.EstadoId <> 6) -- No Terminados

                                                 UNION ALL
												SELECT        
													57 AS Tipo, 
													Procesos.SeccionalIdOrigen AS SeccionalId, 
													Procesos.Fecha, 
													Procesos.ConceptoId, 
													Procesos.ProcesoId, 
													Procesos.SancionadoId, 
													- (1 * Procesos.Obligacion) AS Obligacion, 
													- (1 * Procesos.Costas) AS Costas, 
													- (1 * Procesos.Intereses) AS Intereses, 
													Procesos.Mayor, 
													'Trasladado a ' + Seccional AS Observaciones
												FROM            
													Procesos INNER JOIN
													Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
												WHERE        
													(Procesos.Traslado BETWEEN @Desde AND @Hasta) AND (Procesos.CarteraTipoId = @CarteraTipoId) AND (NOT (Procesos.SeccionalIdOrigen IS NULL))

                                                 UNION ALL
                                                 SELECT 58 AS Tipo, -- Trasladados (Recibidos por traslado de otra seccional sin terminación) 
                                                        Procesos.SeccionalId, 
                                                        Procesos.Fecha AS Fecha, 
                                                        Procesos.ConceptoId, 
                                                        Procesos.ProcesoId, 
                                                        Procesos.SancionadoId, 
                                                        Procesos.Obligacion, 
                                                        Procesos.Costas, 
                                                        Procesos.Intereses, 
                                                        Procesos.Mayor AS Mayor, 
                                                        'Trasladado desde ' + Seccional AS Observaciones
                                                 FROM Procesos INNER JOIN
													Seccionales ON Procesos.SeccionalIdOrigen = Seccionales.SeccionalId
                                                 WHERE(Procesos.Traslado BETWEEN @Desde AND @Hasta)
                                                      AND (CarteraTipoId = @CarteraTipoId)
                                                      AND (Procesos.Fecha <= @Hasta)
													  AND (not Procesos.SeccionalIdOrigen is null)

													  )
                                             INSERT INTO Movimiento
                                             (Desde, 
                                              Hasta, 
                                              Tipo, 
                                              SeccionalId, 
                                              Fecha, 
                                              ConceptoId, 
                                              ProcesoId, 
                                              SancionadoId, 
                                              Obligacion, 
                                              Costas, 
                                              Intereses, 
											  Mayor,
                                              Observaciones, 
                                              CarteraTipoId
                                             )
                                                    SELECT @Desde AS Desde, 
                                                           @Hasta AS Hasta, 
                                                           Tipo, 
                                                           SeccionalId, 
                                                           Fecha, 
                                                           ConceptoId, 
                                                           ProcesoId, 
                                                           SancionadoId, 
                                                           (Obligacion) AS Obligacion, 
                                                           (Costas) AS Costas, 
                                                           (Intereses) AS Intereses,
														   Mayor as Mayor,
                                                           (Observaciones) AS Observaciones, 
                                                           @CarteraTipoId
                                                    FROM A;
                    --GROUP BY Tipo, 
                    --         SeccionalId, 
                    --         Fecha, 
                    --         ConceptoId, 
                    --         ProcesoId, 
                    --         SancionadoId;
                    COMMIT TRANSACTION;
        END TRY
                BEGIN CATCH
                    ROLLBACK TRANSACTION;
        END CATCH;
        END;

        -- Seleccionamos los datos 
        SELECT CASE
                   WHEN Movimiento.Tipo = 1
                   THEN 'NUEVOS'
                   WHEN Movimiento.Tipo = 2
                   THEN 'RECAUDOS'
                   WHEN Movimiento.Tipo = 3
                   THEN 'TERMINADOS POR PAGO'
                   WHEN Movimiento.Tipo IN(4, 5)
                   THEN 'TERMINADOS RESOLUCION CAUSAS DIFERENTES A PAGO'
               --WHEN Movimiento.Tipo = 5
               --THEN 'TERMINADOS TRASLADO A OTRA ENTIDAD'
                   WHEN Movimiento.Tipo = 51
                   THEN 'TERMINADOS POR TRASLADO A OTRA SECCIONAL'
                   WHEN Movimiento.Tipo = 52
                   THEN 'RECIBIDOS POR TRASLADO DESDE OTRA SECCIONAL'
                   WHEN Movimiento.Tipo IN(61, 63, 65)
                   THEN 'NOVEDADES MENOR VALOR'
                   WHEN Movimiento.Tipo IN(62, 64, 66)
                   THEN 'NOVEDADES MAYOR VALOR'
                   WHEN Movimiento.Tipo = 7
                   THEN 'TERMINADOS MAYOR VALOR RECAUDADO'
                   WHEN Movimiento.Tipo = 8
                   THEN 'TERMINADOS MENOR VALOR RECAUDADO'
                   WHEN Movimiento.Tipo = 9
                   THEN 'RECAUDO DE PROCESOS EN ESTADO TERMINADO'
                   WHEN Movimiento.Tipo = 10
                   THEN 'INTERESES GENERADOS'
                   WHEN Movimiento.Tipo = 11
                   THEN 'REVOCATORIA DE TERMINACIÓN'
                   WHEN Movimiento.Tipo IN(12, 13)
                   THEN 'VARIACIÓN DETERIORO CARTERA'
                   WHEN Movimiento.Tipo = 14
                   THEN 'DETERIORO CARTERA DE REVOCATORIA DE TERMINACIÓN'
                   --WHEN Movimiento.Tipo = 15
                   --THEN 'MAYOR VALOR RECAUDADO'
                   WHEN Movimiento.Tipo IN(53)
                   THEN 'TRASLADOS A OTRA CARTERA'
                   WHEN Movimiento.Tipo IN(54)
                   THEN 'TRASLADADOS DESDE OTRA CARTERA'
                   WHEN Movimiento.Tipo IN(55)
                   THEN 'TRASLADOS A OTRO CONCEPTO'
                   WHEN Movimiento.Tipo IN(56)
                   THEN 'TRASLADADOS DESDE OTRO CONCEPTO'
                   WHEN Movimiento.Tipo IN(57)
                   THEN 'TRASLADOS A OTRA SECCIONAL'
                   WHEN Movimiento.Tipo IN(58)
                   THEN 'RECIBIDOS POR TRASLADADO DESDE OTRA SECCIONAL'
               END AS Tipo, 
               Movimiento.Tipo AS TipoId, 
               Movimiento.Desde as Desde, 
               Movimiento.Hasta,
               CASE
                   WHEN Movimiento.ConceptoId >= 4
                   THEN Movimiento.ConceptoId
                   ELSE 1
               END AS ConceptoId, 
               dbo.ProperCase(Seccionales_2.Seccional) AS Seccional, 
               Movimiento.Fecha, 
               Procesos.Numero AS Numero1,
               CASE
                   WHEN Procesos.Numero IS NULL
                   THEN ''
                   ELSE SUBSTRING(Procesos.Numero, 13, 4) + '-' + SUBSTRING(Procesos.Numero, 17, 5) + '-' + SUBSTRING(Procesos.Numero, 22, 2)
               END AS Numero, 
               SancionadosView.CodigoTipoDocumento, 
               SancionadosView.Documento, 
               SancionadosView.Sancionado, 
               Movimiento.Obligacion, 
               Movimiento.Costas, 
               Movimiento.Intereses,
               Movimiento.Mayor,
               CASE
                   WHEN Movimiento.ConceptoId >= 4
                   THEN Concepto
                   ELSE 'MULTA'
               END AS Concepto, 
               Movimiento.Observaciones, 
               Movimiento.SeccionalId, 
               CarteraTipos.CarteraTipo, 
               Seccionales.SeccionalId AS SeccionalIdOrigen, 
               Seccionales_1.SeccionalId AS SeccionalIdDestino, 
               Seccionales.Seccional AS SeccionalOrigen, 
               Seccionales_1.Seccional AS SeccionalDestino
        FROM SancionadosView
             RIGHT OUTER JOIN UsuariosSeccionales
             INNER JOIN Conceptos
             INNER JOIN Movimiento ON Conceptos.ConceptoId = Movimiento.ConceptoId
             INNER JOIN CarteraTipos ON Movimiento.CarteraTipoId = CarteraTipos.CarteraTipoId
             INNER JOIN Seccionales AS Seccionales_2 ON Movimiento.SeccionalId = Seccionales_2.SeccionalId ON UsuariosSeccionales.SeccionalId = Seccionales_2.SeccionalId ON SancionadosView.SancionadoId = Movimiento.SancionadoId
             LEFT OUTER JOIN Procesos
             LEFT OUTER JOIN Seccionales AS Seccionales_1
             RIGHT OUTER JOIN Procesos AS Procesos_1 ON Seccionales_1.SeccionalId = Procesos_1.SeccionalId ON Procesos.ProcesoIdDestino = Procesos_1.ProcesoId
             LEFT OUTER JOIN Procesos AS Procesos_2
             INNER JOIN Seccionales ON Procesos_2.SeccionalId = Seccionales.SeccionalId ON Procesos.ProcesoIdOrigen = Procesos_2.ProcesoId ON Movimiento.ProcesoId = Procesos.ProcesoId
        WHERE(MONTH(Desde) = MONTH(@Mes))
             AND (YEAR(Desde) = YEAR(@Mes))
             AND (UsuariosSeccionales.UserId = @UserId)
             AND (Movimiento.CarteraTipoId = @CarteraTipoId) 
			 --AND(Movimiento.Tipo = 10)
			 AND (dbo.ProperCase(Seccionales_2.Seccional) = @Seccional)order by Seccional ASC
"
	);
		$tables_data["Movimiento Mensual"][".operations"] = &$topsmovimiento_mensual;
?>