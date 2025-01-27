<?php
$topspersuasivosautomaticos = array();
		$topspersuasivosautomaticos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Actualización] (

)
VALUES
(

)"
	);
				$topspersuasivosautomaticos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "        SELECT DISTINCT 
               ProcesosView1.Numero, 
               Abogados.Despacho, 
               Abogados.Codificador, 
               ProcesosView1.Sancionado, 
               ProcesosView1.SancionadoDocumento, 
               ProcesosView1.Masculino, 
               isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))) Persuasivo, 
               AlertasOficios.OficioId, 
               AlertasTipos.AlertaTipo, 
               Oficios.Oficio, 
               Oficios.Sigobius
        FROM Abogados
             INNER JOIN ProcesosView1
             INNER JOIN AlertasTipos
             INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON dbo.DiasHabiles(ProcesosView1.persuasivo,GETDATE()) >= Alertas.Dias --ProcesosView1.Persuasivo <= DATEADD(DAY, Alertas.Dias, GETDATE()) 
			 ON Abogados.AbogadoId = ProcesosView1.AbogadoId
             INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId
                                          AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId
                                          AND ProcesosView1.ConceptoId = AlertasOficios.ConceptoId
             INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId
             INNER JOIN Sancionados ON ProcesosView1.SancionadoId = Sancionados.SancionadoId
                                       AND AlertasOficios.Carcel = Sancionados.PrivadoLibertad
             LEFT OUTER JOIN Correspondencias
             INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId
                                                                                               AND Alertas.AlertaId = Aplazamientos.AlertaId
        WHERE(Alertas.Activa = 1)
             AND (ProcesosView1.EstadoId = 2)
             AND (ProcesosView1.EtapaId = 1)
             AND (ProcesosView1.Prescrita = 0)
             AND (AlertasTipos.AlertaTipoId = 6)
             AND (Abogados.Activo = 1)
             AND (AlertasOficios.Activo = 1)
             AND (Oficios.Activo = 1)
			 AND (AlertasOficios.SinDireccion = 0)
			 --
			 AND (ProcesosView1.numero not in ('11001079000020160022100'))
			 AND (ProcesosView1.AbogadoId not in (2016,2023,2080,2088,2093,3157,3187,3269))
			 --
			 --AND NOT(ProcesosView1.Persuasivo IS NULL)
			 AND EXISTS (SELECT DireccionId FROM Direcciones where SancionadoId = ProcesosView1.SancionadoId and NOT Direccion IS NULL)
            AND (NOT EXISTS
        (
            SELECT Correspondencias_1.CorrespondenciaId
            FROM Correspondencias AS Correspondencias_1
                 INNER JOIN Oficios ON Correspondencias_1.OficioId = Oficios.OficioId
            WHERE(Correspondencias_1.ProcesoId = ProcesosView1.ProcesoId)
                 AND (Oficios.ActuacionId = 4) -- Persuasivo
        ))
		AND ((ProcesosView1.ConceptoId <> 2) OR (ProcesosView1.ConceptoId = 2 AND EXISTS (SELECT * FROM Correspondencias WHERE ProcesoId = ProcesosView1.ProcesoId AND OficioId  in (4623, 4477))))
        GROUP BY ProcesosView1.ProcesoId, 
                 ProcesosView1.CarteraTipoId, 
                 ProcesosView1.FechaPrescripcion,
				 ProcesosView1.Numero, 
               isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))), 
				 ProcesosView1.CarteraTipo, ProcesosView1.Seccional, ProcesosView1.Numero,  
               ProcesosView1.Etapa,
                 Abogados.Despacho, 
                 Abogados.Codificador, 
                 ProcesosView1.Sancionado, 
                 ProcesosView1.SancionadoDocumento, 
                 ProcesosView1.Masculino, 
                 AlertasOficios.OficioId, 
                 AlertasTipos.AlertaTipo, 
                 Oficios.Oficio, 
                 Oficios.Sigobius, 
                 ProcesosView1.Numero, 
                 Alertas.Dias
        HAVING(CASE
                   WHEN isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))) < MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))))))
                   THEN MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))))))
                   ELSE isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha)))
               END <= DATEADD(day, -Alertas.Dias, GETDATE()))
union all
        SELECT DISTINCT 
               ProcesosView1.Numero, 
               Abogados.Despacho, 
               Abogados.Codificador, 
               ProcesosView1.Sancionado, 
               ProcesosView1.SancionadoDocumento, 
               ProcesosView1.Masculino, 
               isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))) Persuasivo, 
               AlertasOficios.OficioId, 
               AlertasTipos.AlertaTipo, 
               Oficios.Oficio, 
               Oficios.Sigobius
        FROM Abogados
             INNER JOIN ProcesosView1
             INNER JOIN AlertasTipos
             INNER JOIN Alertas ON AlertasTipos.AlertaTipoId = Alertas.AlertaTipoId ON ProcesosView1.Persuasivo <= DATEADD(DAY, Alertas.Dias, GETDATE()) ON Abogados.AbogadoId = ProcesosView1.AbogadoId
             INNER JOIN AlertasOficios ON Alertas.AlertaId = AlertasOficios.AlertaId
                                          AND ProcesosView1.CarteraTipoId = AlertasOficios.CarteraTipoId
                                          AND ProcesosView1.ConceptoId = AlertasOficios.ConceptoId
             INNER JOIN Oficios ON AlertasOficios.OficioId = Oficios.OficioId
             INNER JOIN Sancionados ON ProcesosView1.SancionadoId = Sancionados.SancionadoId
                                       AND AlertasOficios.Carcel = Sancionados.PrivadoLibertad
             LEFT OUTER JOIN Correspondencias
             INNER JOIN Aplazamientos ON Correspondencias.OficioId = Aplazamientos.OficioId ON ProcesosView1.ProcesoId = Correspondencias.ProcesoId
                                                                                               AND Alertas.AlertaId = Aplazamientos.AlertaId
        WHERE(Alertas.Activa = 1)
             AND (ProcesosView1.EstadoId = 2)
             AND (ProcesosView1.EtapaId = 1)
             AND (ProcesosView1.Prescrita = 0)
             AND (AlertasTipos.AlertaTipoId = 6)
             AND (Abogados.Activo = 1)
             AND (AlertasOficios.Activo = 1)
             AND (Oficios.Activo = 1)
			 AND (AlertasOficios.SinDireccion = 1)
			 --
			 AND (ProcesosView1.numero not in ('11001079000020160022100'))
			 AND (ProcesosView1.AbogadoId not in (2016,2023,2080,2088,2093,3157,3187,3269))
			 --
			 
			 AND NOT EXISTS (SELECT DireccionId FROM Direcciones where SancionadoId = ProcesosView1.SancionadoId and NOT Direccion IS NULL)
            AND (NOT EXISTS
        (
            SELECT Correspondencias_1.CorrespondenciaId
            FROM Correspondencias AS Correspondencias_1
                 INNER JOIN Oficios ON Correspondencias_1.OficioId = Oficios.OficioId
            WHERE(Correspondencias_1.ProcesoId = ProcesosView1.ProcesoId)
                 AND (Oficios.ActuacionId = 4) -- Persuasivo
        ))
		AND ((ProcesosView1.ConceptoId <> 2) OR (ProcesosView1.ConceptoId = 2 AND EXISTS (SELECT * FROM Correspondencias WHERE ProcesoId = ProcesosView1.ProcesoId AND OficioId  in (4623, 4477)))) -- OficioId 4623 RECLAMACION ASEGURADOR POLIZA CONTRACTUAL SIGOBius
        GROUP BY ProcesosView1.ProcesoId,
				 ProcesosView1.Numero,
                 ProcesosView1.CarteraTipoId, 
                 ProcesosView1.FechaPrescripcion, 
               isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))), 
                 ProcesosView1.Numero, 
				 ProcesosView1.CarteraTipo, ProcesosView1.Seccional, ProcesosView1.Numero,  
               ProcesosView1.Etapa,
                 Abogados.Despacho, 
                 Abogados.Codificador, 
                 ProcesosView1.Sancionado, 
                 ProcesosView1.SancionadoDocumento, 
                 ProcesosView1.Masculino, 
                 AlertasOficios.OficioId, 
                 AlertasTipos.AlertaTipo, 
                 Oficios.Oficio, 
                 Oficios.Sigobius, 
                 Alertas.Dias
        HAVING(CASE
                   WHEN isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))) < MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))))))
                   THEN MAX(DATEADD(day, ISNULL(Aplazamientos.Dias, 0), ISNULL(Correspondencias.Fecha, isnull(ProcesosView1.Persuasivo, dateadd(day, 10, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha))))))
                   ELSE isnull(ProcesosView1.Persuasivo, dateadd(day, case when ProcesosView1.ConceptoId = 2 then 35 else 10 end, isnull(ProcesosView1.Plazo, ProcesosView1.Fecha)))
               END <= DATEADD(day, -Alertas.Dias, GETDATE()))"
	);
		$tables_data["PersuasivosAutomaticos"][".operations"] = &$topspersuasivosautomaticos;
?>