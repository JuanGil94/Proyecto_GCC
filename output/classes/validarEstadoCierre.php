<?php
require_once("../include/dbcommon.php");
$consulta=DB::Query("SELECT EjecutarCierre,EstadoCierre FROM Empresas where EmpresaId=1");
$data = $consulta->fetchAssoc();
echo json_encode($data);

