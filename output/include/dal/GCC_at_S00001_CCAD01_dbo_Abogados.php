<?php
$dalTableAbogados = array();
$dalTableAbogados["AbogadoId"] = array("type"=>3,"varname"=>"AbogadoId", "name" => "AbogadoId", "autoInc" => "1");
$dalTableAbogados["Abogado"] = array("type"=>200,"varname"=>"Abogado", "name" => "Abogado", "autoInc" => "0");
$dalTableAbogados["Documento"] = array("type"=>200,"varname"=>"Documento", "name" => "Documento", "autoInc" => "0");
$dalTableAbogados["Tarjeta"] = array("type"=>200,"varname"=>"Tarjeta", "name" => "Tarjeta", "autoInc" => "0");
$dalTableAbogados["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTableAbogados["Telefonos"] = array("type"=>200,"varname"=>"Telefonos", "name" => "Telefonos", "autoInc" => "0");
$dalTableAbogados["Celular"] = array("type"=>200,"varname"=>"Celular", "name" => "Celular", "autoInc" => "0");
$dalTableAbogados["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableAbogados["SeccionalId"] = array("type"=>3,"varname"=>"SeccionalId", "name" => "SeccionalId", "autoInc" => "0");
$dalTableAbogados["Masculino"] = array("type"=>11,"varname"=>"Masculino", "name" => "Masculino", "autoInc" => "0");
$dalTableAbogados["Activo"] = array("type"=>11,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTableAbogados["Despacho"] = array("type"=>200,"varname"=>"Despacho", "name" => "Despacho", "autoInc" => "0");
$dalTableAbogados["Codificador"] = array("type"=>3,"varname"=>"Codificador", "name" => "Codificador", "autoInc" => "0");
$dalTableAbogados["AbogadoId"]["key"]=true;

$dal_info["GCC_at_S00001_CCAD01_dbo_Abogados"] = &$dalTableAbogados;
?>