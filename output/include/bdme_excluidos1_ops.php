<?php
$topsbdme_excluidos1 = array();
		$topsbdme_excluidos1["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [BDME Excluidos] (

)
VALUES
(

)"
	);
				$topsbdme_excluidos1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec [dbo].[BDMEExcluidos] @Mes=':session.mesExcluidos',@UserName=':session.UserNameF',@Documento=':session.documentoExcluidos',@Sancionado=':session.sancionadoExcluidos'"
	);
		$tables_data["BDME Excluidos"][".operations"] = &$topsbdme_excluidos1;
?>