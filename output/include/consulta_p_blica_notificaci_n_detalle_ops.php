<?php
$topsconsulta_p_blica_notificaci_n_detalle = array();
		$topsconsulta_p_blica_notificaci_n_detalle["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Consulta Pública] (

)
VALUES
(

)"
	);
				$topsconsulta_p_blica_notificaci_n_detalle["selectList"] = array(
		"subtype" => "sql",
		"sql" => "  SELECT DISTINCT 
			   Sancionados.SancionadoId as SancionadoId,
               Correspondencias.CorrespondenciaId, 
               Oficios.Oficio, 
               Correspondencias.Fecha, 
               Conceptos.Concepto, 
               dbo.FormatNumber(Procesos.Numero) AS Proceso, 
               Despachos.Despacho, 
               Correspondencias.Sigobius, 
               Correspondencias.Resolucion, 
               Correspondencias.Observaciones, 
               SUBSTRING(Seccionales.Seccional, 1, 12) AS Seccional
        FROM Correspondencias
             INNER JOIN Procesos ON Correspondencias.ProcesoId = Procesos.ProcesoId
             INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
             INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
             INNER JOIN Sancionados ON Procesos.SancionadoId = Sancionados.SancionadoId
             INNER JOIN Oficios ON Correspondencias.OficioId = Oficios.OficioId
             INNER JOIN AlertasOficios ON Oficios.OficioId = AlertasOficios.OficioId
             INNER JOIN Alertas ON AlertasOficios.AlertaId = Alertas.AlertaId
             LEFT OUTER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
        WHERE(Sancionados.SancionadoId = ':session.SancionadoIdConsulta')
             AND (Alertas.Activa = 1)
             AND (Alertas.Publicar = 1)
             AND (AlertasOficios.Activo = 1)"
	);
		$tables_data["Consulta Pública Notificación Detalle"][".operations"] = &$topsconsulta_p_blica_notificaci_n_detalle;
?>