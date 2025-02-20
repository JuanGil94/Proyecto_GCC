<?php
$topstransacciones_usuario = array();
		$topstransacciones_usuario["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Fecha DATE = ':session.transacciones_ano_mes'
DECLARE @Ano INT = YEAR(@Fecha)
DECLARE @Mes INT = MONTH(@Fecha)
 
 
SELECT CarteraTipo,Oficio,COUNT(*) AS OficioCount,Nombre,Seccional,SeccionalId
FROM (
    SELECT CarteraTipos.CarteraTipo, 
           Seccionales.Seccional, 
		   UsuariosSeccionales.SeccionalId,
           UserProfile.Nombre, 
           YEAR(CONVERT(DATE, Auditorias.Fecha)) AS Ano, 
           MONTH(CONVERT(DATE, Auditorias.Fecha)) AS Mes, 
           CONVERT(DATE, Auditorias.Fecha) AS Fecha, 
           AuditoriasDetalle.Valores AS Oficio
    FROM Auditorias
         INNER JOIN AuditoriasDetalle ON Auditorias.AuditoriaId = AuditoriasDetalle.AuditoriaId
         INNER JOIN Correspondencias ON Auditorias.PrimaryKey = Correspondencias.CorrespondenciaId
         INNER JOIN Procesos ON Correspondencias.ProcesoId = Procesos.ProcesoId
         INNER JOIN CarteraTipos ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
         INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
		 INNER JOIN UsuariosSeccionales on Seccionales.SeccionalId = UsuariosSeccionales.SeccionalId
         INNER JOIN UserProfile ON Auditorias.UserId = UserProfile.UserId
    WHERE Auditorias.Tabla IN ('Correspondencias')
          AND AuditoriasDetalle.Campo = 'Oficio'
          AND YEAR(CONVERT(DATE, Auditorias.Fecha)) = @Ano
          AND MONTH(CONVERT(DATE, Auditorias.Fecha)) = @Mes
          AND UsuariosSeccionales.UserId =  ':session.UserId'
 
    UNION ALL
 
    SELECT CarteraTipos.CarteraTipo, 
           Seccionales.Seccional, 
		   UsuariosSeccionales.SeccionalId,
           UserProfile.Nombre, 
           YEAR(CONVERT(DATE, Auditorias.Fecha)) AS Ano, 
           MONTH(CONVERT(DATE, Auditorias.Fecha)) AS Mes, 
           CONVERT(DATE, Auditorias.Fecha) AS Fecha, 
           AuditoriasDetalle.Valores AS Oficio
    FROM CarteraTipos
         INNER JOIN Chequeos ON CarteraTipos.CarteraTipoId = Chequeos.CarteraTipoId
         INNER JOIN Seccionales ON Chequeos.SeccionalId = Seccionales.SeccionalId
		 INNER JOIN UsuariosSeccionales on Seccionales.SeccionalId = UsuariosSeccionales.SeccionalId
         INNER JOIN UserProfile 
         INNER JOIN Auditorias ON UserProfile.UserId = Auditorias.UserId
         INNER JOIN AuditoriasDetalle ON Auditorias.AuditoriaId = AuditoriasDetalle.AuditoriaId
         ON Chequeos.ChequeoId = Auditorias.PrimaryKey
    WHERE Auditorias.Tabla IN ('ChequeosOficios')
          AND AuditoriasDetalle.Campo = 'Oficio'
          AND YEAR(CONVERT(DATE, Auditorias.Fecha)) = @Ano
          AND MONTH(CONVERT(DATE, Auditorias.Fecha)) = @Mes
		  AND UsuariosSeccionales.UserId =  ':session.UserId'
) AS SubQuery
GROUP BY Nombre,Oficio,CarteraTipo,Seccional,SeccionalId;"
	);
		$tables_data["Transacciones Usuario"][".operations"] = &$topstransacciones_usuario;
?>