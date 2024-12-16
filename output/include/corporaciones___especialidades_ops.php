<?php
$topscorporaciones___especialidades = array();
		$topscorporaciones___especialidades["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Clasificaciones -- Cartera] (

)
VALUES
(

)"
	);
				$topscorporaciones___especialidades["selectList"] = array(
		"subtype" => "sql",
		"sql" => "    DECLARE @Hasta DATE = ':session.corporacion_mes';
	 SET @Hasta = EOMONTH(@Hasta)
	 SELECT Procesos.CarteraTipoId, 
            Procesos.SeccionalId, 
            CorporacionesView.Corporacion, 
            SUBSTRING(Despachos.Codigo, 6, 4) + ' - ' + ISNULL(Especialidades.Especialidad, '') Especialidad, 
            Procesos.ConceptoId, 
            COUNT(*) AS Procesos, 
            SUM(Procesos.Obligacion + Procesos.Costas + Procesos.Intereses) AS Saldo
     FROM Procesos
          INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
          LEFT OUTER JOIN Especialidades ON SUBSTRING(Despachos.Codigo, 6, 4) = Especialidades.Codigo
          LEFT OUTER JOIN CorporacionesView ON SUBSTRING(Despachos.Codigo, 6, 2) = CorporacionesView.Codigo
     WHERE(Procesos.EstadoId <> 6)
          AND (Procesos.Fecha <= @Hasta)
     GROUP BY Procesos.CarteraTipoId, 
              Procesos.SeccionalId, 
              Procesos.ConceptoId, 
              CorporacionesView.Corporacion, 
              Especialidades.Especialidad, 
              SUBSTRING(Despachos.Codigo, 6, 4)
     ORDER BY Procesos.CarteraTipoId, 
              Procesos.SeccionalId, 
              CorporacionesView.Corporacion, 
              SUBSTRING(Despachos.Codigo, 6, 4); 
"
	);
		$tables_data["Corporaciones - Especialidades"][".operations"] = &$topscorporaciones___especialidades;
?>