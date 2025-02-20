<?php
$topsprocesos_sin_medidas_cautelares = array();
		$topsprocesos_sin_medidas_cautelares["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Gestión Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topsprocesos_sin_medidas_cautelares["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Username varchar(128) =  ':session.UserNameF';

DECLARE @Cartera INT = ':session.cartera1';
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
DECLARE @Seccional15 INT =':session.seccional15';;
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
		  AND (ProcesosView1.[CarteraTipoId] IN (@Cartera, @Cartera2, @Cartera3,@Cartera4,@Cartera5))
		  AND (ProcesosView1.[SeccionalId]  IN (@Seccional,@Seccional2,@Seccional3,@Seccional4,@Seccional5,@Seccional6,@Seccional7,@Seccional8,@Seccional9,@Seccional10,@Seccional11,@Seccional12,@Seccional13,@Seccional,@Seccional14,@Seccional15,@Seccional16,@Seccional17,@Seccional18,@Seccional19,@Seccional20,@Seccional21,@Seccional22,@Seccional23,@Seccional24,@Seccional25))
		  AND (dbo.EnAcuerdo(ProcesosView1.ProcesoId)=0)
		  AND NOT EXISTS
              (
				SELECT        ProcesoId
				FROM            Correspondencias
				WHERE        (ProcesoId = ProcesosView1.ProcesoId and OficioId in (1121,1131,4347,4359,4437,4548,4638)) 
              )     
		ORDER BY ProcesosView1.CarteraTipoId, 
		ProcesosView1.Seccional, 
		ProcesosView1.Abogado, 
		ProcesosView1.ConceptoId, 
		ProcesosView1.Sancionado,
		ProcesosView1.Estado; 
"
	);
		$tables_data["Procesos Sin Medidas Cautelares"][".operations"] = &$topsprocesos_sin_medidas_cautelares;
?>