<?php
$topsautorizaciones1 = array();
		$topsautorizaciones1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "	SELECT C.ChequeoId,S.Seccional,co.Concepto,t.Tipo,C.Cantidad,C.Obligacion,C.Costas,C.Fecha,d.Codigo + ' -  ' +d.Despacho as Competencia
	FROM Chequeos C
	INNER JOIN Seccionales S ON C.SeccionalId=S.SeccionalId
	INNER JOIN Conceptos co ON co.ConceptoId=C.ConceptoId
	INNER JOIN tipoCobro t ON t.TipoId=C.Tipo
	INNER JOIN Despachos d ON d.DespachoId=C.DespachoId
	WHERE C.CarteraTipoId=1 and C.Procesado<>1 and C.Aprobado<>1 and C.SeccionalId=:sesion.SeccionalUser and TramiteId=2"
	);
		$tables_data["Autorizaciones"][".operations"] = &$topsautorizaciones1;
?>