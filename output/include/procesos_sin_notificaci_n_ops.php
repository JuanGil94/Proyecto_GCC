<?php
$topsprocesos_sin_notificaci_n = array();
		$topsprocesos_sin_notificaci_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Prescripciones Automática] (

)
VALUES
(

)"
	);
				$topsprocesos_sin_notificaci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @UserName VARCHAR(128) = ':session.UserNameF'
DECLARE @CarteraTipoId INT = ':session.cartera_id_report_noti'
DECLARE @SeccionalId INT = ':session.seccional_id_report_noti'

SELECT ProcesosView1.ProcesoId, 
            ProcesosView1.CarteraTipoId, 
            ProcesosView1.SeccionalId, 
            ProcesosView1.Abogado, 
            ProcesosView1.ConceptoId, 
            ProcesosView1.Fecha, 
            ProcesosView1.Numero, 
            ProcesosView1.Sancionado, 
            ProcesosView1.SancionadoDocumento, 
            ProcesosView1.Obligacion, 
            ProcesosView1.Intereses, 
            ProcesosView1.Costas,
			(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc) Mandamiento,
            ProcesosView1.EstadoId 
     FROM ProcesosView1 
          INNER JOIN UsuariosSeccionales ON ProcesosView1.SeccionalId = UsuariosSeccionales.SeccionalId
          INNER JOIN UserProfile ON UsuariosSeccionales.UserId = UserProfile.UserId
          INNER JOIN UsuariosCarteraTipos ON UserProfile.UserId = UsuariosCarteraTipos.UserId
                                             AND ProcesosView1.CarteraTipoId = UsuariosCarteraTipos.CarteraTipoId
     WHERE(ProcesosView1.EstadoId <> 6)
          AND (UserProfile.UserName = @UserName)
		  AND (ProcesosView1.Notificacion IS NULL)
		  AND (ProcesosView1.CarteraTipoId = @CarteraTipoId)
		  AND (ProcesosView1.SeccionalId = @SeccionalId)
		  AND (dbo.EnAcuerdo(ProcesosView1.ProcesoId)=0)
--          AND exists(select top 1 Correspondencias.Fecha from Correspondencias where ProcesoId = ProcesosView1.ProcesoId and OficioId in (4328,1105) order by Correspondencias.Fecha desc)
     ORDER BY ProcesosView1.CarteraTipoId, 
              ProcesosView1.Seccional, 
              ProcesosView1.Abogado, 
              ProcesosView1.ConceptoId, 
              ProcesosView1.Sancionado,
              ProcesosView1.Estado; "
	);
		$tables_data["Procesos Sin Notificación"][".operations"] = &$topsprocesos_sin_notificaci_n;
?>