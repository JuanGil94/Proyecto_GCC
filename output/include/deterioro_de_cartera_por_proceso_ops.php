<?php
$topsdeterioro_de_cartera_por_proceso = array();
		$topsdeterioro_de_cartera_por_proceso["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Base de Datos - Historico] (

)
VALUES
(

)"
	);
				$topsdeterioro_de_cartera_por_proceso["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Fecha DATE=':session.deterioro_mes';
DECLARE  @UserName VARCHAR(30)=':session.UserNameF';
DECLARE @CarteraTipoId INT=':session.cartera_id_report';
DECLARE @SeccionalId INT=':session.seccional_id_report';

     SET @Fecha = EOMONTH(@Fecha);
     SELECT Procesos.ProcesoId,
            Procesos.Numero,
            Deterioro.Rel_Monto,
            Deterioro.Rel_Antiguedad,
            Deterioro.Rel_Notificacion,
            Deterioro.Rel_Ubicacion,
            Deterioro.Rel_Libertad,
            Deterioro.Rel_Cautelares,
            Deterioro.Rel_Solidarios,
            Deterioro.Rel_Concepto,
            Deterioro.Rel_Especialidad,
            Deterioro.Rel_Porcentaje,
            Deterioro.Rel_Meses,
            Deterioro.Rel_Alicuotas,
            Deterioro.Rel_Tasa * 100 AS Rel_Tasa,
            Deterioro.Rel_Porcentaje  AS Porcentaje,
            Deterioro.Rel_Saldo AS Saldo,
            Deterioro.Rel_VPN AS VPN,
            Deterioro.Rel_Recobrable AS Recobrable,
            Deterioro.Rel_Deterioro AS Deterioro,
            Deterioro.Prescripcion,
            Conceptos.Concepto
     FROM Historicos Procesos
          INNER JOIN Deterioro ON Procesos.ProcesoId = Deterioro.ProcesoId
          INNER JOIN Conceptos ON Procesos.ConceptoId = Conceptos.ConceptoId
     WHERE(Procesos.SeccionalId = @SeccionalId)
          AND (Procesos.CarteraTipoId = @CarteraTipoId)
          AND (Deterioro.Fecha = @Fecha)
		  AND (Procesos.Hasta= @Fecha)
		  order by 2;"
	);
		$tables_data["Deterioro de Cartera por Proceso"][".operations"] = &$topsdeterioro_de_cartera_por_proceso;
?>