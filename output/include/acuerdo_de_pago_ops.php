<?php
$topsacuerdo_de_pago = array();
		$topsacuerdo_de_pago["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Base de Datos - Historico] (

)
VALUES
(

)"
	);
				$topsacuerdo_de_pago["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @UserName VARCHAR(128) = ':session.UserNameF';
DECLARE @Hasta    DATE  = ':session.mes_Acuerdo';

     SET @Hasta = EOMONTH(@Hasta);
     DECLARE @Desde DATE= DATEADD(day, 1, EOMONTH(DATEADD(MONTH, -1, @Hasta)));
     WITH a
          AS (SELECT ProcesosView1.ProcesoId, 
                     ProcesosView1.CarteraTipoId, 
                     ProcesosView1.Seccional, 
                     ProcesosView1.Acuerdo, 
                     ProcesosView1.Incumplimiento, 
                     ProcesosView1.Numero, 
                     ProcesosView1.Sancionado, 
                     ProcesosView1.SancionadoDocumento, 
                     ProcesosView1.Abono, 
                     ProcesosView1.Cuotas, 
                     ProcesosView1.VlrCuota + ProcesosView1.VlrIntereses ValorCuota, 
                     ProcesosView1.Saldo, 
                     ProcesosView1.Recaudo, 
                     ProcesosView1.Concepto, 
                     ISNULL(
              (
                  SELECT TOP 1 Pago
                  FROM Pagos1
                  WHERE ProcesoId = ProcesosView1.ProcesoId
                  ORDER BY Registro DESC
              ), 0) UltimoPago, 
              (
                  SELECT TOP 1 Fecha
                  FROM Pagos1
                  WHERE ProcesoId = ProcesosView1.ProcesoId
                  ORDER BY Fecha DESC
              ) UltimaFecha, 
              (
                  SELECT TOP (1) Correspondencias.Fecha
                  FROM Correspondencias
                       INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId
                  WHERE(Correspondencias.ProcesoId = ProcesosView1.ProcesoId)
                       AND (Oficios.Oficio LIKE '%notif%incumpl%Acuer%')
                  ORDER BY Correspondencias.Fecha DESC
              ) Notificacion
              FROM ProcesosView1
                   INNER JOIN UsuariosSeccionales ON ProcesosView1.SeccionalId = UsuariosSeccionales.SeccionalId
                   INNER JOIN UserProfile ON UsuariosSeccionales.UserId = UserProfile.UserId
                   INNER JOIN UsuariosCarteraTipos ON UserProfile.UserId = UsuariosCarteraTipos.UserId
                                                      AND ProcesosView1.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId
              WHERE(EstadoId <> 6)
                   AND (UserProfile.UserName = @UserName)
				   AND dbo.EnAcuerdo(ProcesosView1.ProcesoId) = 1)
          SELECT ProcesoId, 
                 CarteraTipoId, 
                 Seccional, 
                 Numero, 
                 Sancionado, 
                 SancionadoDocumento, 
                 Acuerdo, 
                 Abono, 
                 Cuotas, 
                 ValorCuota, 
                 Saldo, 
                 UltimoPago, 
                 UltimaFecha, 
                 Notificacion, 
                 Concepto, 
                 Recaudo, 
                 Incumplimiento,
                 CASE
                     WHEN DATEDIFF(day, ISNULL(UltimaFecha, Acuerdo), GETDATE()) - 30 < 0
                     THEN 0
                     ELSE DATEDIFF(day, ISNULL(UltimaFecha, Acuerdo), GETDATE()) - 30
                 END Dias
          FROM a
          ORDER BY CarteraTipoId, 
                   Seccional, 
                   Numero;"
	);
		$tables_data["Acuerdo de Pago"][".operations"] = &$topsacuerdo_de_pago;
?>