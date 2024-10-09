<?php
$topspresunci_n_prescripci_n = array();
		$topspresunci_n_prescripci_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topspresunci_n_prescripci_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @UserName VARCHAR(30) = ':session.UserNameF';
		DECLARE @Mes      DATE = ':session.presucion_pres_mes';
		SET NOCOUNT ON; 
        DECLARE @Cierre DATE=
        (
            SELECT Cierre
            FROM Empresas
            WHERE EmpresaId = 1
        );
        DECLARE @Desde DATE= DATEADD(day, 1, @Cierre);
        DECLARE @Hasta DATE= EOMONTH(@Desde);
        DECLARE @CarteraTipoId INT=':session.presuncion_id_cartera';
        DECLARE @UserId INT=
        (
            SELECT UserId
            FROM UserProfile
            WHERE UserName = @Username
        );


        -- Seleccionamos los datos 
        IF(NOT @Mes BETWEEN @Desde AND @Hasta)
            BEGIN
                SELECT DISTINCT 
                       SUBSTRING(Seccionales.Seccional, 1, 15) AS Seccional, 
                       Conceptos.Concepto, 
                       Etapas.Etapa, 
                       Historicos.Numero, 
                       Historicos.Ejecutoria, 
                       Historicos.Notificacion, 
                       Historicos.Acuerdo, 
                       Historicos.Obligacion, 
                       Historicos.Costas, 
                       Historicos.Intereses, 
                       Historicos.Recaudo, 
                       Historicos.Obligacion + Historicos.Costas + Historicos.Intereses AS Saldo, 
                       Historicos.Prescripcion,
					   (SELECT top 1 Abogados.Abogado
						FROM     Abogados INNER JOIN
										  Reasignaciones ON Abogados.AbogadoId = Reasignaciones.AbogadoId where Reasignaciones.ProcesoId = Historicos.ProcesoId order by Fecha Desc) Abogado
										FROM Historicos
											 INNER JOIN Seccionales ON Historicos.SeccionalId = Seccionales.SeccionalId
											 INNER JOIN Conceptos ON Historicos.ConceptoId = Conceptos.ConceptoId
											 INNER JOIN UsuariosSeccionales ON Seccionales.SeccionalId = UsuariosSeccionales.SeccionalId
											 INNER JOIN Etapas ON Historicos.EtapaId = Etapas.EtapaId
										WHERE(Historicos.EstadoId = 2)
											 AND (Historicos.CarteraTipoId = @CarteraTipoId)
											 AND (UsuariosSeccionales.UserId = @UserId)
											 AND (Historicos.Prescripcion <= 30)
											 AND (MONTH(Historicos.Hasta) = MONTH(@Mes))
											 AND (YEAR(Historicos.Hasta) = YEAR(@Mes))
										ORDER BY Seccional, 
												 Saldo DESC;
								END;
									ELSE
									BEGIN
										SELECT DISTINCT 
											   SUBSTRING(Seccionales.Seccional, 1, 15) AS Seccional, 
											   Conceptos.Concepto, 
											   Etapas.Etapa, 
											   Actuaciones.Actuacion, 
											   ProcesosView.Numero AS Numero, 
											   ProcesosView.Ejecutoria, 
											   ProcesosView.Notificacion, 
											   ProcesosView.Acuerdo, 
											   ProcesosView.Obligacion, 
											   ProcesosView.Costas, 
											   ProcesosView.Intereses, 
											   ProcesosView.Recaudo, 
											   ProcesosView.Obligacion + ProcesosView.Costas + ProcesosView.Intereses AS Saldo, 
											   ProcesosView.Prescripcion,
											   (SELECT top 1 Abogados.Abogado
						FROM     Abogados INNER JOIN
										  Reasignaciones ON Abogados.AbogadoId = Reasignaciones.AbogadoId where Reasignaciones.ProcesoId = ProcesosView.ProcesoId order by Fecha Desc) Abogado
										FROM ProcesosView
											 INNER JOIN Seccionales ON ProcesosView.SeccionalId = Seccionales.SeccionalId
											 INNER JOIN Conceptos ON ProcesosView.ConceptoId = Conceptos.ConceptoId
											 INNER JOIN UsuariosSeccionales ON Seccionales.SeccionalId = UsuariosSeccionales.SeccionalId
											 INNER JOIN Etapas ON ProcesosView.EtapaId = Etapas.EtapaId
											 LEFT JOIN Actuaciones ON ProcesosView.ActuacionId = Actuaciones.ActuacionId
										WHERE(ProcesosView.EstadoId = 2)
											 AND (ProcesosView.CarteraTipoId = @CarteraTipoId)
											 AND (UsuariosSeccionales.UserId = @UserId)
											 AND (ProcesosView.Prescripcion <= 30)
										ORDER BY Seccional, 
												 Saldo DESC;
        END;
"
	);
		$tables_data["Presunción Prescripción"][".operations"] = &$topspresunci_n_prescripci_n;
?>