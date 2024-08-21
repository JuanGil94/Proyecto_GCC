<?php
$topsactuaciones_por_mes = array();
		$topsactuaciones_por_mes["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT = ':session.tablero_control_cartera';
DECLARE @SeccionalId int= ':session.tablero_control_seccionalid';
DECLARE @Hasta DATE = ':session.tablero_control_hastaid'; 
DECLARE @Desde date= DATEADD(day, -DATEPART(dy, @Hasta) + 1, @Hasta);

	WITH a
		 AS (
		 SELECT Hasta, DATENAME(MONTH, Hasta) AS Mes, SUM(Indicadores.Nuevos+Indicadores.BusquedaDatos + Indicadores.Comunicaciones + Indicadores.Llamadas + Indicadores.AcuerdosPago + Indicadores.TerminadosPago) AS Actuaciones
		 FROM Indicadores
			  INNER JOIN
			  Abogados
			  ON Indicadores.AbogadoId = Abogados.AbogadoId
		 WHERE Indicadores.Hasta BETWEEN @Desde AND @Hasta AND 
			   Indicadores.SeccionalId = @SeccionalId AND 
			   Indicadores.CarteraTipoId = @CarteraTipoId AND 
			   EtapaId = 1
		 GROUP BY Hasta
		 UNION
		 SELECT Hasta, DATENAME(MONTH, Hasta) AS Mes, SUM(Indicadores.MandamientosPago+Indicadores.BusquedaDatos + Indicadores.Citaciones + Indicadores.NotificacionCorreo + Indicadores.NotificacionEdictos 
		 + Indicadores.DespachosComisorios + Indicadores.RevocatoriaMandamientosPago + Indicadores.AcuerdosPago 
		 + Indicadores.IncumplimientoAcuerdosPago + Indicadores.Suspension + Indicadores.Interrupcion + Indicadores.LevantamientosSI + Indicadores.ResuelveExcepciones 
		 + Indicadores.EjecucionLiquidacion + Indicadores.RegistroMedidaCautelar + Indicadores.Embargos + Indicadores.ComunicacionEmbargo + Indicadores.SolicitudMedidaCautelar 
		 + Indicadores.NombramientosSecuestres + Indicadores.NotificacionSecuestres + Indicadores.Avaluos + Indicadores.AvisosRemates + Indicadores.DiligenciaRemates 
		 + Indicadores.ApruebanRemates + Indicadores.LevantamientoMedidaCautelar 
		 + Indicadores.Remisibilidad + Indicadores.PresuncionPrescripcion + Indicadores.TerminadosSinPago + Indicadores.Prescritos + Indicadores.TerminadosPago) AS Actuaciones
		 FROM Indicadores
			  INNER JOIN
			  Abogados
			  ON Indicadores.AbogadoId = Abogados.AbogadoId
		 WHERE Indicadores.Hasta BETWEEN @Desde AND @Hasta AND 
			   Indicadores.SeccionalId = @SeccionalId AND 
			   Indicadores.CarteraTipoId = @CarteraTipoId AND 
			   EtapaId = 2
		 GROUP BY Hasta)
		 SELECT a.Mes, SUM(a.Actuaciones) AS Actuaciones
		 FROM a
		 GROUP BY Hasta, a.Mes
		 ORDER BY Hasta,a.Mes;"
	);
		$tables_data["Actuaciones Por Mes"][".operations"] = &$topsactuaciones_por_mes;
?>