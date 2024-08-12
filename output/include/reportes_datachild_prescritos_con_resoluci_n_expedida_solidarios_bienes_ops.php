<?php
$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios_bienes = array();
		$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios_bienes["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Reportes DataChild prescritos con resolución expedida_Solidarios] (

)
VALUES
(

)"
	);
				$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios_bienes["selectList"] = array(
		"subtype" => "sql",
		"sql" => "
		SELECT 
    [Project1].[PropiedadId] AS [PropiedadId], 
    [Project1].[SancionadoId] AS [SancionadoId], 
    [Project1].[Propiedad] AS [Propiedad], 
    [Project1].[Matricula] AS [Matricula], 
    [Project1].[Observaciones] AS [Observaciones], 
    [Project1].[Avaluo] AS [Avaluo], 
    [Project1].[CiudadId] AS [CiudadId], 
    [Project1].[Direccion] AS [Direccion]
    FROM ( SELECT 
        [Extent1].[PropiedadId] AS [PropiedadId], 
        [Extent1].[SancionadoId] AS [SancionadoId], 
        [Extent1].[Propiedad] AS [Propiedad], 
        [Extent1].[Matricula] AS [Matricula], 
        [Extent1].[Avaluo] AS [Avaluo], 
        [Extent1].[CiudadId] AS [CiudadId], 
        [Extent1].[Direccion] AS [Direccion], 
        [Extent1].[Observaciones] AS [Observaciones]
        FROM [dbo].[Propiedades] AS [Extent1]
        WHERE ([Extent1].[SancionadoId] like ':session.ProcesoIdDataReportesSancionadoId') AND ([Extent1].[TipoPropiedad] like '%')
    )  AS [Project1]"
	);
		$tables_data["Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes"][".operations"] = &$topsreportes_datachild_prescritos_con_resoluci_n_expedida_solidarios_bienes;
?>