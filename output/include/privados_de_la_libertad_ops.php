<?php
$topsprivados_de_la_libertad = array();
		$topsprivados_de_la_libertad["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Actualización DataChild] (

)
VALUES
(

)"
	);
				$topsprivados_de_la_libertad["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT        Sancionados.SancionadoId, TiposDocumentos.TipoDocumento, Sancionados.Documento, Sancionados.Sancionado, Procesos.Seccional, Procesos.Numero AS Proceso, Genero.Genero, Sancionados.Celular, 
                         Sancionados.Email, Sancionados.Observaciones, Sancionados.PrivadoLibertad, Procesos.Estado, Procesos.Prescripcion, Procesos.EstadoId
FROM            Sancionados INNER JOIN
                         TiposDocumentos ON Sancionados.TipoDocumentoId = TiposDocumentos.TipoDocumentoId INNER JOIN
                         ProcesosView1 AS Procesos ON Sancionados.SancionadoId = Procesos.SancionadoId INNER JOIN Genero ON Genero.GeneroId = Sancionados.Masculino
WHERE        (Sancionados.PrivadoLibertad = 1) AND (Sancionados.Documento LIKE '%:session.privado_lib_doc_sancionadoid') AND (Sancionados.Sancionado LIKE '%:session.privado_lib_sancionadoid');
"
	);
		$tables_data["Privados de la Libertad"][".operations"] = &$topsprivados_de_la_libertad;
?>