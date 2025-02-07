<?php
$topsbdme_publica = array();
		$topsbdme_publica["selectList"] = array(
		"subtype" => "sql",
		"sql" => "
        DECLARE @Documento VARCHAR(15)= ':session.BDME_doc_sancionado_consulta';
        DECLARE @Hasta DATE = EOMONTH(GetDate());
        DECLARE @Desde DATE = dateadd(day,1, DATEADD(month, -6, @Hasta));

		DECLARE @Fecha DATE = case when month(GetDate()) <= 5 then convert(date, convert(varchar,year(GetDate()))+'-05-31') else convert(date, convert(varchar,year(GetDate()))+'-11-30') end;

			SELECT TOP (1) 
				@Documento Documento, 
				@Fecha Fecha, 
				ProcesosView1.Sancionado, 
				ProcesosView1.Seccional, 
				ProcesosView1.SeccionalCorreo Correo, 
				ProcesosView1.SeccionalDireccion Direccion, 
				ProcesosView1.SeccionalTelefonos Telefonos, 
				ProcesosView1.PiePagina Pie
			FROM     ProcesosView1 CROSS JOIN
				Salarios
			WHERE  (ProcesosView1.EstadoId <> 6) 
				AND ((ProcesosView1.Acuerdo IS NULL) OR 
				(NOT ProcesosView1.Incumplimiento IS NULL)) 
				AND (ProcesosView1.Ejecutoria <= @Desde) 
				AND (ProcesosView1.Documento = @Documento) 
				AND (Salarios.Ano = YEAR(GETDATE()))
			group by
				ProcesosView1.Sancionado,
				ProcesosView1.Seccional, 
				ProcesosView1.SeccionalCorreo, 
				ProcesosView1.SeccionalDireccion, 
				ProcesosView1.SeccionalTelefonos, 
				ProcesosView1.PiePagina,
				Salarios.Salario
			having
				SUM(ROUND(Saldo, 0)) > dbo.Salarios.Salario * 5.0"
	);
		$tables_data["BDME Publica"][".operations"] = &$topsbdme_publica;
?>