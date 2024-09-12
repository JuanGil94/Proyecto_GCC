<?php
$topsmandamientos_de_pago_automaticos = array();
		$topsmandamientos_de_pago_automaticos["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Obligaciones de Dificil Recaudo] (

)
VALUES
(

)"
	);
				$topsmandamientos_de_pago_automaticos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Listado_Mandamientos] @UserName=':session.UserNameF',@Hasta=':session.Mandamientos_MesId'"
	);
		$tables_data["Mandamientos de pago Automaticos"][".operations"] = &$topsmandamientos_de_pago_automaticos;
?>