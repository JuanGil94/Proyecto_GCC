<?php
$topslistado_de_chequeo_sancionado_datachild = array();
		$topslistado_de_chequeo_sancionado_datachild["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado de Chequeos] (

)
VALUES
(

)"
	);
				$topslistado_de_chequeo_sancionado_datachild["selectList"] = array(
		"subtype" => "sql",
		"sql" => "	SELECT 
    [Project1].[ChequeoSancionadoId] AS [ChequeoSancionadoId], 
    [Project1].[ChequeoId] AS [ChequeoId], 
	[Project1].[TipoDocumento] AS [TipoDocumento], 
    [Project1].[Documento] AS [Documento], 
    [Project1].[C1] AS [C1], 
	Genero.GeneroId as genero,
    [Project1].[Masculino] AS [Masculino], 
    [Project1].[Observaciones] AS [Observaciones], 
    [Project1].[Sancionado] AS [Sancionado]
    FROM ( SELECT 
        [Extent1].[ChequeoSancionadoId] AS [ChequeoSancionadoId], 
        [Extent1].[ChequeoId] AS [ChequeoId], 
        [Extent1].[Sancionado] AS [Sancionado], 
		[Extent1].[TipoDocumentoId] AS [TipoDocumento], 
        [Extent1].[Documento] AS [Documento], 
        [Extent1].[Masculino] AS [Masculino], 
        [Extent1].[Observaciones] AS [Observaciones], 
        CASE WHEN ([Extent1].[TipoDocumentoId] IS NULL) THEN 0 ELSE [Extent1].[TipoDocumentoId] END AS [C1]
        FROM [dbo].[ChequeosSancionados] AS [Extent1]
        WHERE [Extent1].[ChequeoId] = ':session.ChequeoId'
    )  AS [Project1] inner join Genero on Genero.GeneroId = Project1.Masculino
    ORDER BY row_number() OVER (ORDER BY [Project1].[ChequeoSancionadoId] ASC)"
	);
		$tables_data["Listado de Chequeo Sancionado DataChild"][".operations"] = &$topslistado_de_chequeo_sancionado_datachild;
?>