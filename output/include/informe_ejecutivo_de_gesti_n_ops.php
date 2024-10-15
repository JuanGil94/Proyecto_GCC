<?php
$topsinforme_ejecutivo_de_gesti_n = array();
		$topsinforme_ejecutivo_de_gesti_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @UserName VARCHAR(30) = ':session.UserNameF';
        DECLARE   @Desde    DATE = ':session.ejecutivo_desde';
        DECLARE   @Hasta    DATE = ':session.ejecutivo_hasta';
        DECLARE   @Millones BIT = '0';
		DECLARE @Divisor INT = CASE
                                    WHEN @Millones = 1
                                    THEN 1e6
                                    ELSE 1
                                END;
        DECLARE @UserId INT=
        (
            SELECT UserId
            FROM UserProfile
            WHERE UserName = @Username
        );
        DECLARE @CarteraTipoId INT= ':session.ejecutivo_cartera';

        SET @Hasta = EOMONTH(@Hasta);
        WITH a
             AS (
             -- 3.    La Columna “PROCESOS ACTIVOS AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los valores al periodo de corte (Fecha Final)
             SELECT Seccionales.Seccional, 
                    SUM(ProcTota) AS ProcActi, 
                    SUM(ObliTota + CostTota + InteTota) AS ValoActi, 
                    0 AS ProcPendPres, 
                    0 AS ValoPendPres, 
                    0 AS ProcPresMes, 
                    0 AS ValoPresMes
             FROM Resumen
                  INNER JOIN Seccionales ON Resumen.SeccionalId = Seccionales.SeccionalId
             WHERE(Resumen.CarteraTipoId = @CarteraTipoId)
                  AND (Resumen.Hasta = @Hasta)
             GROUP BY Seccionales.Seccional
             UNION
             -- 4.    La Columna “PROCESOS PENDIENTES POR PRECRIBIR AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los valores al periodo de corte (Fecha Final)
             SELECT Seccionales.Seccional, 
                    0 AS ProcActi, 
                    0 AS ValoActi, 
                    COUNT(*) AS ProcPendPres, 
                    SUM(Historicos.Saldo) AS ValoPendPres, 
                    0 AS ProcPresMes, 
                    0 AS ValoPresMes
             FROM Historicos
                  INNER JOIN Seccionales ON Historicos.SeccionalId = Seccionales.SeccionalId
             WHERE(Historicos.CarteraTipoId = @CarteraTipoId)
                  AND (Historicos.Prescripcion < CASE
                                                     WHEN @Hasta = '2018-12-31'
                                                     THEN-60
                                                     ELSE 0
                                                 END)
                  AND (Historicos.EstadoId = 2)
                  AND (Historicos.Hasta = @Hasta)
             GROUP BY Seccionales.Seccional
             UNION
             -- 6.    La Columna “PROCESOS PRESCRITOS EN EL PERIODO”  (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los procesos prescritos DURANTE el periodo DESDE/HASTA que el usuario ha introducido de acuerdo con descripción del numeral 1.
             SELECT Seccionales.Seccional, 
                    0 AS ProcActi, 
                    0 AS ValoActi, 
                    0 AS ProcPendPres, 
                    0 AS ValoPendPres, 
                    COUNT(*) AS ProcPresMes, 
                    SUM(Saldo) AS ValoPresMes
             FROM ProcesosView1 inner join Seccionales on Seccionales.SeccionalId = ProcesosView1.SeccionalId 
             WHERE(EstadoId = 6) -- Terminados
                  AND (MotivoId = 2) -- Prescripcion
                  AND (Terminacion BETWEEN @Desde AND @Hasta)
                  AND (CarteraTipoId = @CarteraTipoId)
             GROUP BY Seccionales.Seccional, ProcesosView1.SeccionalId )
             SELECT a_1.Seccional, 
                    SUM(a_1.ProcActi) AS ProcActi, 
                    SUM(a_1.ValoActi / @Divisor) AS ValoActi, 
                    SUM(a_1.ProcPendPres) AS ProcPendPres, 
                    SUM(a_1.ValoPendPres / @Divisor) AS ValoPendPres, 
                    SUM(a_1.ProcPresMes) AS ProcPresMes, 
                    SUM(a_1.ValoPresMes / @Divisor) AS ValoPresMes,
                    -- 5.    La Columna “ANALISIS % AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los porcentajes de participación de las columnas del numeral 4, con respecto a las del numeral 3
                    CASE
                        WHEN SUM(a_1.ProcActi) = 0
                        THEN 0
                        ELSE CONVERT(FLOAT, SUM(a_1.ProcPendPres)) / CONVERT(FLOAT, SUM(a_1.ProcActi))
                    END AS ProcAnal,
                    CASE
                        WHEN SUM(a_1.ValoActi) = 0
                        THEN 0
                        ELSE CONVERT(FLOAT, SUM(a_1.ValoPendPres)) / CONVERT(FLOAT, SUM(a_1.ValoActi))
                    END AS ValoAnal, 
                    CarteraTipos.CarteraTipo, 
                    @Desde Desde, 
                    @Hasta Hasta
             FROM a AS a_1
                  CROSS JOIN CarteraTipos
             WHERE(CarteraTipos.CarteraTipoId = @CarteraTipoId)
             GROUP BY a_1.Seccional, 
                      CarteraTipos.CarteraTipo
             --HAVING SUM(a_1.ProcActi) <> 0
             ORDER BY a_1.Seccional;"
	);
		$tables_data["Informe ejecutivo de Gestión"][".operations"] = &$topsinforme_ejecutivo_de_gesti_n;
?>