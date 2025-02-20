<?php
$topsgesti_n_medidas_cautelares = array();
		$topsgesti_n_medidas_cautelares["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado Medidas Cautelares] (

)
VALUES
(

)"
	);
				$topsgesti_n_medidas_cautelares["selectList"] = array(
		"subtype" => "sql",
		"sql" => "     DECLARE @Hasta DATE = ':session.Gestion_medidas'
	 DECLARE @Desde DATE;
	 SET @Hasta = EOMONTH(@Hasta);
	 SET @Desde = DATEADD(MONTH, -2, DATEADD(MONTH, DATEDIFF(MONTH, 0, @Hasta), 0));
     WITH a
          AS (
          -- 1 Inicial
          SELECT SeccionalId, 
                 COUNT(*) AS ProcInic1, 
                 0 ProcInic4, 
                 0 ProcInic5, 
                 0 ProcFina1, 
                 0 ProcFina4, 
                 0 ProcFina5
          FROM Historicos
          WHERE
                Hasta = @Hasta
               AND CarteraTipoId = 1
          GROUP BY SeccionalId

          UNION ALL -- 4 Inicial

          SELECT SeccionalId, 
                 0 ProcInic1, 
                 COUNT(*) AS ProcInic4, 
                 0 ProcInic5, 
                 0 ProcFina1, 
                 0 ProcFina4, 
                 0 ProcFina5
          FROM Historicos
          WHERE
               Hasta = @Hasta
               AND CarteraTipoId = 4
          GROUP BY SeccionalId

          UNION ALL -- 5 Inicial

          SELECT SeccionalId, 
                 0 ProcInic1, 
                 0 ProcInic4, 
                 COUNT(*) AS ProcInic5, 
                 0 ProcFina1, 
                 0 ProcFina4, 
                 0 ProcFina5
          FROM Historicos
          WHERE
               Hasta = @Hasta
               AND CarteraTipoId = 5
          GROUP BY SeccionalId

          UNION ALL -- 1 Final

          SELECT SeccionalId, 
                 0 ProcInic1, 
                 0 ProcInic4, 
                 0 ProcInic5, 
                 COUNT(*) AS ProcFina1, 
                 0 ProcFina4, 
                 0 ProcFina5
          FROM Historicos
          WHERE(Hasta = @Hasta)
               AND (CarteraTipoId = 1)
			   --AND (EstadoId = 2)
                   AND EXISTS
              (
				SELECT        ProcesoId
				FROM            Correspondencias
				WHERE        (ProcesoId = Historicos.ProcesoId and OficioId in (1121,1131,4347,4359,4437,4548,4638) and Fecha between @Desde and @Hasta)
              )
          GROUP BY SeccionalId

          UNION ALL -- 4

          SELECT SeccionalId, 
                 0 ProcInic1, 
                 0 ProcInic4, 
                 0 ProcInic5, 
                 0 ProcFina1, 
                 COUNT(*) AS ProcFina4, 
                 0 ProcFina5
          FROM Historicos
          WHERE(Hasta = @Hasta)
               AND (CarteraTipoId = 4)
			   --AND (EstadoId = 2)
                   AND EXISTS
              (
				SELECT        ProcesoId
				FROM            Correspondencias
				WHERE        (ProcesoId = Historicos.ProcesoId and OficioId in (1121,1131,4347,4359,4437,4548,4638) and Fecha between @Desde and @Hasta)
              )
          GROUP BY SeccionalId

          UNION ALL -- 5 Final

          SELECT SeccionalId, 
                 0 ProcInic1, 
                 0 ProcInic4, 
                 0 ProcInic5, 
                 0 ProcFina1, 
                 0 ProcFina4, 
                 COUNT(*) AS ProcFina5
          FROM Historicos
          WHERE(Hasta = @Hasta)
               AND (CarteraTipoId = 5)
			   --AND (EstadoId = 2)
                   AND EXISTS
              (
				SELECT        ProcesoId
				FROM            Correspondencias
				WHERE        (ProcesoId = Historicos.ProcesoId and OficioId in (1121,1131,4347,4359,4437,4548, 4638) and Fecha between @Desde and @Hasta)
              )
          GROUP BY SeccionalId
		  )
          SELECT Seccional, 
                 SUM(a.ProcInic1) ProcInic1, 
				 SUM(a.ProcInic1*0.2) ProcInic120, 
                 SUM(a.ProcInic4) ProcInic4, 
				 SUM(a.ProcInic4*0.2) ProcInic420, 
                 SUM(a.ProcInic5) ProcInic5, 
				 SUM(a.ProcInic5*0.2) ProcInic520,
                 SUM(a.ProcInic1) + SUM(a.ProcInic4) + SUM(a.ProcInic5) ProcInicTota, 
				 (SUM(a.ProcInic1) + SUM(a.ProcInic4) + SUM(a.ProcInic5))*0.2 ProcInicTota20, 
                 SUM(a.ProcFina1) ProcFina1, 
                 SUM(a.ProcFina4) ProcFina4, 
                 SUM(a.ProcFina5) ProcFina5, 
                 SUM(a.ProcFina1) + SUM(a.ProcFina4) + SUM(a.ProcFina5) ProcFinaTota,
                 CASE
                     WHEN CONVERT(DECIMAL, (SUM(a.ProcInic1*0.2))) = 0
                     THEN 0
                     ELSE CONVERT(DECIMAL, (SUM(a.ProcFina1))) / CONVERT(DECIMAL, (SUM(a.ProcInic1*0.2)))
                 END ProcIndi1,
                 CASE
                     WHEN CONVERT(DECIMAL, (SUM(a.ProcInic4*0.2))) = 0
                     THEN 0
                     ELSE CONVERT(DECIMAL, (SUM(a.ProcFina4))) / CONVERT(DECIMAL, (SUM(a.ProcInic4*0.2)))
                 END ProcIndi4,
                 CASE
                     WHEN CONVERT(DECIMAL, (SUM(a.ProcInic5*0.2))) = 0
                     THEN 0
                     ELSE CONVERT(DECIMAL, (SUM(a.ProcFina5))) / CONVERT(DECIMAL, (SUM(a.ProcInic5*0.2)))
                 END ProcIndi5, 
				 case when CONVERT(DECIMAL, (SUM(a.ProcInic1*0.2) + SUM(a.ProcInic4*0.2) + SUM(a.ProcInic5*0.2))) = 0 then
				 0
				 else
                 CONVERT(DECIMAL, (SUM(a.ProcFina1) + SUM(a.ProcFina4) + SUM(a.ProcFina5))) / CONVERT(DECIMAL, (SUM(a.ProcInic1*0.2) + SUM(a.ProcInic4*0.2) + SUM(a.ProcInic5*0.2))) end ProcIndiTota
          FROM a
               INNER JOIN Seccionales ON Seccionales.SeccionalId = a.SeccionalId
          GROUP BY Seccional
          ORDER BY 1;"
	);
		$tables_data["Gestión Medidas Cautelares"][".operations"] = &$topsgesti_n_medidas_cautelares;
?>