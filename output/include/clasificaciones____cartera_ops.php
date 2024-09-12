<?php
$topsclasificaciones____cartera = array();
		$topsclasificaciones____cartera["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Acuerdo de Pago] (

)
VALUES
(

)"
	);
				$topsclasificaciones____cartera["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Listado_Clasificaciones] @UserName=':session.sancionado',@Hasta=':session.Clasificaciones_MesId'"
	);
		$tables_data["Clasificaciones -- Cartera"][".operations"] = &$topsclasificaciones____cartera;
?>