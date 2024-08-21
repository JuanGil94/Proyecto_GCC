<?php
$topstablero_de_control_gesti_n = array();
		$topstablero_de_control_gesti_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Tablero de Control General] (

)
VALUES
(

)"
	);
				$topstablero_de_control_gesti_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @CarteraTipoId INT = ':session.tablero_control_cartera';
DECLARE @Desde DATE = ':session.tablero_control_desdeid'; 
DECLARE @Hasta DATE = ':session.tablero_control_hastaid'; 
DECLARE  @SeccionalId INT      = ':session.tablero_control_seccionalid';

WITH A AS (
     SELECT SUM(BusquedaDatos + Comunicaciones + Llamadas + AcuerdosPago + TerminadosPago) AS TotalPersuasivo,
            0 TotalCoactivo,
            0 TotalCoactivoEjecucion,
            0 TotalCoactivoTerminacion
     FROM Indicadores
     WHERE(Hasta BETWEEN @Desde AND @Hasta)
          AND (CarteraTipoId = @CarteraTipoId)
          AND (SeccionalId = @SeccionalId)
		  AND EtapaId = 1
union all
     SELECT 0 AS TotalPersuasivo,
            SUM(BusquedaDatos + Citaciones + NotificacionCorreo + NotificacionEdictos + DespachosComisorios + RevocatoriaMandamientosPago + AcuerdosPago ) TotalCoactivo,
            SUM(IncumplimientoAcuerdosPago + Suspension + Interrupcion + LevantamientosSI + ResuelveExcepciones + EjecucionLiquidacion + RegistroMedidaCautelar + Embargos + ComunicacionEmbargo + SolicitudMedidaCautelar + NombramientosSecuestres + NotificacionSecuestres + Avaluos + AvisosRemates + DiligenciaRemates + ApruebanRemates + LevantamientoMedidaCautelar) TotalCoactivoEjecucion,
            SUM(Remisibilidad + PresuncionPrescripcion + TerminadosSinPago + Prescritos + TerminadosPago) TotalCoactivoTerminacion
     FROM Indicadores
     WHERE(Hasta BETWEEN @Desde AND @Hasta)
          AND (CarteraTipoId = @CarteraTipoId)
          AND (SeccionalId = @SeccionalId)
		  		  AND EtapaId = 2
) SELECT SUM(A.TotalPersuasivo) TotalPersuasivo, SUM(A.TotalCoactivo) TotalCoactivo, SUM(A.TotalCoactivoEjecucion) TotalCoactivoEjecucion, SUM(A.TotalCoactivoTerminacion) TotalCoactivoTerminacion  FROM A"
	);
		$tables_data["Tablero de Control Gestión"][".operations"] = &$topstablero_de_control_gesti_n;
?>