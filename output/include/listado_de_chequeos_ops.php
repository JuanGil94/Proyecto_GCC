<?php
$topslistado_de_chequeos = array();
		$topslistado_de_chequeos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Indicadores de Gestión] (

)
VALUES
(

)"
	);
				$topslistado_de_chequeos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "               DECLARE @UserName VARCHAR(50) = ':session.UserNameF';
               DECLARE @Mes DATE = ':session.Chequeos_MesId';

		DECLARE @Hasta DATE = EOMONTH(@Mes);
		DECLARE @Desde DATE = DATEADD(MONTH, -1, DATEADD(DAY, 1, @Hasta));
		SELECT        
			Chequeos.ChequeoId, 
			Abogados.SeccionalId, 
			Chequeos.AbogadoId, 
			Chequeos.Fecha, 
			CAST(SUBSTRING(Chequeos.Origen, 1, 12) AS VARCHAR(12)) AS ID,
                        Chequeos.DespachoId,
			Chequeos.Origen, 
			Chequeos.Obligacion, 
			Procesos.Numero, 
			Procesos.Persuasivo,
			(SELECT TOP (1) AbogadoId FROM Reasignaciones WHERE (ProcesoId = Procesos.ProcesoId) ORDER BY Fecha DESC) AS AbogadoId1, 
			Chequeos.TramiteId, 
			Chequeos.Fisico, 
			Chequeos.Digital, 
			Chequeos.Observaciones
		FROM            
			Chequeos INNER JOIN
            Abogados ON Chequeos.AbogadoId = Abogados.AbogadoId INNER JOIN
            Seccionales ON Abogados.SeccionalId = Seccionales.SeccionalId LEFT OUTER JOIN
            Procesos ON Chequeos.ChequeoId = Procesos.ChequeoId
		WHERE        
			(Chequeos.Fecha BETWEEN @Desde AND @Hasta)
		ORDER BY 
			Seccionales.Seccional,
			Chequeos.ChequeoId
"
	);
		$tables_data["Listado de Chequeos"][".operations"] = &$topslistado_de_chequeos;
?>