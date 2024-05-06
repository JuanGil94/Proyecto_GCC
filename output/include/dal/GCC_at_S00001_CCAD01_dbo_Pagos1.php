<?php
$dalTablePagos1 = array();
$dalTablePagos1["PagoId"] = array("type"=>3,"varname"=>"PagoId", "name" => "PagoId", "autoInc" => "1");
$dalTablePagos1["ProcesoId"] = array("type"=>3,"varname"=>"ProcesoId", "name" => "ProcesoId", "autoInc" => "0");
$dalTablePagos1["CuentaId"] = array("type"=>3,"varname"=>"CuentaId", "name" => "CuentaId", "autoInc" => "0");
$dalTablePagos1["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTablePagos1["Numero"] = array("type"=>200,"varname"=>"Numero", "name" => "Numero", "autoInc" => "0");
$dalTablePagos1["Pago"] = array("type"=>6,"varname"=>"Pago", "name" => "Pago", "autoInc" => "0");
$dalTablePagos1["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTablePagos1["Registro"] = array("type"=>135,"varname"=>"Registro", "name" => "Registro", "autoInc" => "0");
$dalTablePagos1["PagoObli"] = array("type"=>6,"varname"=>"PagoObli", "name" => "PagoObli", "autoInc" => "0");
$dalTablePagos1["PagoCost"] = array("type"=>6,"varname"=>"PagoCost", "name" => "PagoCost", "autoInc" => "0");
$dalTablePagos1["PagoInte"] = array("type"=>6,"varname"=>"PagoInte", "name" => "PagoInte", "autoInc" => "0");
$dalTablePagos1["PagoMayo"] = array("type"=>6,"varname"=>"PagoMayo", "name" => "PagoMayo", "autoInc" => "0");
$dalTablePagos1["PagoTerm"] = array("type"=>6,"varname"=>"PagoTerm", "name" => "PagoTerm", "autoInc" => "0");
$dalTablePagos1["PagoIdOrig"] = array("type"=>3,"varname"=>"PagoIdOrig", "name" => "PagoIdOrig", "autoInc" => "0");
$dalTablePagos1["TipoRecaudoId"] = array("type"=>3,"varname"=>"TipoRecaudoId", "name" => "TipoRecaudoId", "autoInc" => "0");
$dalTablePagos1["PagoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Pagos1"] = &$dalTablePagos1;
?>