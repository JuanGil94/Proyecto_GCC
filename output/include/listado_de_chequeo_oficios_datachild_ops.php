<?php
$topslistado_de_chequeo_oficios_datachild = array();
		$topslistado_de_chequeo_oficios_datachild["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Listado de Chequeo Sancionado DataChild] (

)
VALUES
(

)"
	);
				$topslistado_de_chequeo_oficios_datachild["selectList"] = array(
		"subtype" => "sql",
		"sql" => " SELECT
    [Extent1].[ChequeoOficioId] AS [ChequeoOficioId], 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Radicado] AS [Radicado], 
    [Extent1].[Codigo] AS [Codigo], 
    [Extent1].[Observaciones] AS [Observaciones], 
    [Extent1].[ChequeoId] AS [ChequeoId], 
    [Extent1].[OficioId] AS [OficioId]
    FROM [dbo].[ChequeosOficios] AS [Extent1]
    WHERE [Extent1].[ChequeoId] = ':session.ChequeoId'"
	);
		$tables_data["Listado de Chequeo Oficios DataChild"][".operations"] = &$topslistado_de_chequeo_oficios_datachild;
?>