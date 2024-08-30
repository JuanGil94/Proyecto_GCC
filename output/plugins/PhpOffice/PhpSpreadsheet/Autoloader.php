<?php

namespace PhpOffice\PhpSpreadsheet;


//PHPExcel_Shared_ZipStreamWrapper::register();
// check mbstring.func_overload
if (ini_get('mbstring.func_overload') & 2) {
	throw new Exception('Multibyte function overloading in PHP must be disabled for string functions (2).');
}

define('PLUGINS_ROOT', getabspath('plugins'));

Autoloader::Register();
class Autoloader
{
	public static function Register() {
		spl_autoload_register(function($name) {
            Autoloader::Load($name);
        });
	}	


	public static function Load( $pObjectName ) {
		
		$pObjectFilePath =	PLUGINS_ROOT . "/"  . str_replace( '\\', '/', $pObjectName ) . '.php';

		if ((file_exists($pObjectFilePath) === false) || (is_readable($pObjectFilePath) === false)) {
			return false;
		}

		require($pObjectFilePath);
	}

}