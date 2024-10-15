<?php
$topstest_de_deterioro__resumen_ = array();
		$topstest_de_deterioro__resumen_["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Indicadores Sin Actuaciones] (

)
VALUES
(

)"
	);
				$topstest_de_deterioro__resumen_["selectList"] = array(
		"subtype" => "sql",
		"sql" => "exec dbo.DeterioroResumen_Pivot @Fecha=':session.test_deterioro_mes',@UserName=':session.UserNameF'"
	);
		$tables_data["Test de Deterioro (Resumen)"][".operations"] = &$topstest_de_deterioro__resumen_;
?>