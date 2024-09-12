<?php
$topsremanentes_ = array();
		$topsremanentes_["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Retiros DataChild] (

)
VALUES
(

)"
	);
				$topsremanentes_["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[Listado_Remanentes] @UserName=':session.UserNameF',@Hasta=':session.Remanentes_MesId'"
	);
		$tables_data["Remanentes-"][".operations"] = &$topsremanentes_;
?>