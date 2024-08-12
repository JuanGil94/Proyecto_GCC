<?php
$topsreportes1 = array();
		$topsreportes1["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topsreportes1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @ReporteId INT = ':session.select_reportid';
DECLARE @SeccionalId INT = ':session.reporte_seccionalid';
DECLARE @CarteraTipoId INT = ':session.reporte_cateraid';

DECLARE @Dias INT = (
			SELECT dias
			FROM Reportes
			WHERE ReporteId = @ReporteId
			)
	DECLARE @Minimo INT = (
			SELECT Minimo
			FROM Reportes
			WHERE ReporteId = @ReporteId
			)

	IF (@ReporteId = 1) -- Prescritos 
	BEGIN
		SELECT DISTINCT ProcesosView.ProcesoId
			,ProcesosView.SeccionalId
			,ProcesosView.CarteraTipoId
			,ProcesosView.AbogadoId
			,ProcesosView.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,ProcesosView.Fecha
			,ProcesosView.Numero
			,ProcesosView.DespachoId
			,ProcesosView.ConceptoId
			,ProcesosView.EstadoId
			,ProcesosView.EtapaId
			,ProcesosView.ActuacionId
			,ProcesosView.Obligacion
			,ProcesosView.Costas
			,ProcesosView.Intereses
			,ProcesosView.Recaudo
			,ProcesosView.Saldo
			,ProcesosView.Folios
			,ProcesosView.Radicado
			,ProcesosView.Providencia
			,ProcesosView.Ejecutoria
			,ProcesosView.Notificacion
			,ProcesosView.Acuerdo
			,ProcesosView.Incumplimiento
			,ProcesosView.Terminacion
			,ProcesosView.CalificacionId
			,ProcesosView.MotivoId
			,ProcesosView.Observaciones
			,ProcesosView.Prescripcion
		FROM ProcesosView
		INNER JOIN Sancionados ON ProcesosView.SancionadoId = Sancionados.SancionadoId
		WHERE (ProcesosView.SeccionalId = @SeccionalId)
			AND (ProcesosView.CarteraTipoId = @CarteraTipoId)
			AND (ProcesosView.EstadoId = 6)
			AND (ProcesosView.ActuacionId = 25)
			AND (ProcesosView.Terminacion > '2014-12-31')
		ORDER BY ProcesosView.Saldo DESC
	END
	ELSE IF (@ReporteId = 2) -- Prescritos sin resolución expedida
	BEGIN
		SELECT DISTINCT ProcesosView.ProcesoId
			,ProcesosView.SeccionalId
			,ProcesosView.AbogadoId
			,ProcesosView.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,ProcesosView.Fecha
			,ProcesosView.Numero
			,ProcesosView.DespachoId
			,ProcesosView.ConceptoId
			,ProcesosView.EstadoId
			,ProcesosView.EtapaId
			,ProcesosView.ActuacionId
			,ProcesosView.Obligacion
			,ProcesosView.Costas
			,ProcesosView.Intereses
			,ProcesosView.Recaudo
			,ProcesosView.Saldo
			,ProcesosView.Folios
			,ProcesosView.Radicado
			,ProcesosView.Providencia
			,ProcesosView.Ejecutoria
			,ProcesosView.Notificacion
			,ProcesosView.Acuerdo
			,ProcesosView.Incumplimiento
			,ProcesosView.Terminacion
			,ProcesosView.CalificacionId
			,ProcesosView.MotivoId
			,ProcesosView.Observaciones
			,ProcesosView.Prescripcion
		FROM ProcesosView1 ProcesosView
		INNER JOIN Sancionados ON ProcesosView.SancionadoId = Sancionados.SancionadoId
		WHERE (ProcesosView.SeccionalId = @SeccionalId)
			AND (ProcesosView.EstadoId = 2)
			AND (ProcesosView.CarteraTipoId = @CarteraTipoId)
			AND (ProcesosView.Prescripcion <= @Dias)
			AND (ProcesosView.Saldo >= @Minimo)
		ORDER BY ProcesosView.Recaudo DESC
	END
	ELSE IF (@ReporteId = 3) -- Persuasivo sin Mandamiento de Pago
	BEGIN
		SELECT DISTINCT ProcesosView.ProcesoId
			,ProcesosView.SeccionalId
			,ProcesosView.AbogadoId
			,ProcesosView.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,ProcesosView.Fecha
			,ProcesosView.Numero
			,ProcesosView.DespachoId
			,ProcesosView.ConceptoId
			,ProcesosView.EstadoId
			,ProcesosView.EtapaId
			,ProcesosView.ActuacionId
			,ProcesosView.Obligacion
			,ProcesosView.Costas
			,ProcesosView.Intereses
			,ProcesosView.Recaudo
			,ProcesosView.Saldo
			,ProcesosView.Folios
			,ProcesosView.Radicado
			,ProcesosView.Providencia
			,ProcesosView.Ejecutoria
			,ProcesosView.Notificacion
			,ProcesosView.Acuerdo
			,ProcesosView.Incumplimiento
			,ProcesosView.Terminacion
			,ProcesosView.CalificacionId
			,ProcesosView.MotivoId
			,ProcesosView.Observaciones
			,ProcesosView.Prescripcion
		FROM ProcesosView1 ProcesosView
		INNER JOIN Sancionados ON ProcesosView.SancionadoId = Sancionados.SancionadoId
		WHERE (ProcesosView.SeccionalId = @SeccionalId)
			AND (ProcesosView.EstadoId = 2)
			AND (ProcesosView.CarteraTipoId = @CarteraTipoId)
			AND (DATEADD(day, 90, ProcesosView.Fecha) < GETDATE())
			AND (ProcesosView.ActuacionId = 4)
			AND (ProcesosView.Saldo >= @Minimo)
		ORDER BY ProcesosView.Saldo DESC
	END
	ELSE IF (@ReporteId = 4) -- Medidas Cautelares sin Acuerdo de Pago
	BEGIN
		SELECT Procesos.ProcesoId
			,Procesos.SeccionalId
			,Procesos.AbogadoId
			,Procesos.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,Procesos.Fecha
			,Procesos.Numero
			,Procesos.DespachoId
			,Procesos.ConceptoId
			,Procesos.EstadoId
			,Procesos.EtapaId
			,Procesos.ActuacionId
			,Procesos.Obligacion
			,Procesos.Costas
			,Procesos.Intereses
			,Procesos.Recaudo
			,Procesos.Obligacion + Procesos.Costas + Procesos.Intereses - Procesos.Recaudo AS Saldo
			,Procesos.Folios
			,Procesos.Radicado
			,Procesos.Providencia
			,Procesos.Ejecutoria
			,Procesos.Notificacion
			,Procesos.Acuerdo
			,Procesos.Incumplimiento
			,Procesos.Terminacion
			,Procesos.CalificacionId
			,Procesos.MotivoId
			,Procesos.Observaciones
			,Procesos.Prescripcion
		FROM ProcesosView1 Procesos
		INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
		WHERE (Procesos.SeccionalId = @SeccionalId)
			AND (Procesos.EstadoId = 2) -- Activos
			AND (Procesos.CarteraTipoId = @CarteraTipoId)
			AND (Procesos.Saldo >= @Minimo)
			AND (Procesos.Prescripcion > 0)
			AND (Procesos.ActuacionId <> 20) -- Acuerdo de Pago
			AND (
				DATEDIFF(day, CASE 
						WHEN Procesos.Incumplimiento IS NULL
							THEN CASE 
									WHEN Procesos.Acuerdo IS NULL
										THEN CASE 
												WHEN Procesos.Notificacion IS NULL
													THEN Procesos.Ejecutoria
												ELSE Procesos.Notificacion
												END
									ELSE Procesos.Acuerdo
									END
						ELSE Procesos.Incumplimiento
						END, GETDATE()) >= @Dias
				)
			AND EXISTS (
				SELECT MedidaId
				FROM Medidas
				WHERE Medidas.ProcesoId = Procesos.ProcesoId
				)
		ORDER BY Procesos.Saldo DESC
	END
	ELSE IF (@ReporteId = 5) -- Medidas Cautelares con Acuerdo de Pago
	BEGIN
		SELECT DISTINCT Procesos.ProcesoId
			,Procesos.SeccionalId
			,Procesos.AbogadoId
			,Procesos.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,Procesos.Fecha
			,Procesos.Numero
			,Procesos.DespachoId
			,Procesos.ConceptoId
			,Procesos.EstadoId
			,Procesos.EtapaId
			,Procesos.ActuacionId
			,Procesos.Obligacion
			,Procesos.Costas
			,Procesos.Intereses
			,Procesos.Recaudo
			,Procesos.Saldo
			,Procesos.Folios
			,Procesos.Radicado
			,Procesos.Providencia
			,Procesos.Ejecutoria
			,Procesos.Notificacion
			,Procesos.Acuerdo
			,Procesos.Incumplimiento
			,Procesos.Terminacion
			,Procesos.CalificacionId
			,Procesos.MotivoId
			,Procesos.Observaciones
			,Procesos.Prescripcion
		FROM ProcesosView1 Procesos
		INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
		WHERE (Procesos.SeccionalId = @SeccionalId)
			AND (Procesos.EstadoId = 2) -- Activos
			AND (Procesos.CarteraTipoId = @CarteraTipoId)
			AND (Procesos.Obligacion + Procesos.Costas + Procesos.Intereses - Procesos.Recaudo >= @Minimo)
			AND (Procesos.ActuacionId = 20) -- Acuerdo de Pago
			AND (Procesos.Prescripcion >= @Dias)
			AND EXISTS (
				SELECT MedidaId
				FROM Medidas
				WHERE Medidas.ProcesoId = Procesos.ProcesoId
				)
		ORDER BY Procesos.Saldo DESC
	END
	ELSE IF (@ReporteId = 6) -- Sin actuación jurídica alguna
	BEGIN
		SELECT Procesos.ProcesoId
			,Procesos.SeccionalId
			,Procesos.AbogadoId
			,Procesos.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,Procesos.Fecha
			,Procesos.Numero
			,Procesos.DespachoId
			,Procesos.ConceptoId
			,Procesos.EstadoId
			,Procesos.EtapaId
			,Procesos.ActuacionId
			,Procesos.Obligacion
			,Procesos.Costas
			,Procesos.Intereses
			,Procesos.Recaudo
			,Procesos.Saldo
			,Procesos.Folios
			,Procesos.Radicado
			,Procesos.Providencia
			,Procesos.Ejecutoria
			,Procesos.Notificacion
			,Procesos.Acuerdo
			,Procesos.Incumplimiento
			,Procesos.Terminacion
			,Procesos.CalificacionId
			,Procesos.MotivoId
			,Procesos.Observaciones
			,Procesos.Prescripcion
		FROM ProcesosView1 Procesos
		INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
		WHERE (Procesos.SeccionalId = @SeccionalId)
			AND (Procesos.EstadoId = 2) -- Activos
			--AND (Procesos.ActuacionId is null) -- Sin Actuación
			AND (Procesos.CarteraTipoId = @CarteraTipoId)
			--AND (Procesos.Saldo >= @Minimo)
			--AND (Procesos.Prescripcion >= @Dias)
			AND NOT EXISTS (
				SELECT CorrespondenciaId
				FROM Correspondencias
				WHERE ProcesoId = Procesos.ProcesoId
				)
		ORDER BY Procesos.Saldo DESC
	END
	ELSE IF (@ReporteId = 7) -- Sin búsqueda de bienes
	BEGIN
		SELECT Procesos.ProcesoId
			,Procesos.SeccionalId
			,Procesos.AbogadoId
			,Procesos.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,Procesos.Fecha
			,Procesos.Numero
			,Procesos.DespachoId
			,Procesos.ConceptoId
			,Procesos.EstadoId
			,Procesos.EtapaId
			,Procesos.ActuacionId
			,Procesos.Obligacion
			,Procesos.Costas
			,Procesos.Intereses
			,Procesos.Recaudo
			,Procesos.Saldo
			,Procesos.Folios
			,Procesos.Radicado
			,Procesos.Providencia
			,Procesos.Ejecutoria
			,Procesos.Notificacion
			,Procesos.Acuerdo
			,Procesos.Incumplimiento
			,Procesos.Terminacion
			,Procesos.CalificacionId
			,Procesos.MotivoId
			,Procesos.Observaciones
			,Procesos.Prescripcion
		FROM ProcesosView1 Procesos
		INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
		WHERE (Procesos.SeccionalId = @SeccionalId)
			AND (Procesos.EstadoId = 2) -- Activos
			AND (Procesos.CarteraTipoId = @CarteraTipoId)
			AND NOT EXISTS (
				SELECT        Correspondencias.CorrespondenciaId
FROM            Correspondencias INNER JOIN
                         Oficios ON Correspondencias.OficioId = Oficios.OficioId
WHERE        (Correspondencias.ProcesoId = Procesos.ProcesoId) AND (Oficios.ActuacionId = 1035)
				)
		ORDER BY Procesos.Saldo DESC
	END
	ELSE
	BEGIN
		SELECT DISTINCT Procesos.ProcesoId
			,Procesos.SeccionalId
			,Procesos.AbogadoId
			,Procesos.SancionadoId
			,Sancionados.Sancionado + ' - ' + Sancionados.Documento AS Sancionado
			,Procesos.Fecha
			,Procesos.Numero
			,Procesos.DespachoId
			,Procesos.ConceptoId
			,Procesos.EstadoId
			,Procesos.EtapaId
			,Procesos.ActuacionId
			,Procesos.Obligacion
			,Procesos.Costas
			,Procesos.Intereses
			,Procesos.Recaudo
			,Procesos.Saldo
			,Procesos.Folios
			,Procesos.Radicado
			,Procesos.Providencia
			,Procesos.Ejecutoria
			,Procesos.Notificacion
			,Procesos.Acuerdo
			,Procesos.Incumplimiento
			,Procesos.Terminacion
			,Procesos.CalificacionId
			,Procesos.MotivoId
			,Procesos.Observaciones
			,0 Prescripcion
		FROM ProcesosView1 Procesos
		INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
		WHERE (Procesos.ProcesoId = 0)
			AND (Procesos.CarteraTipoId = @CarteraTipoId)
	END

"
	);
		$tables_data["Reportes"][".operations"] = &$topsreportes1;
?>