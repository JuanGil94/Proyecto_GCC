<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

use Dompdf\Dompdf;

use Dompdf\Options;

use PhpOffice\PhpWord\PhpWord;

use PhpOffice\PhpWord\IOFactory;

use PhpOffice\PhpWord\Shared\Html;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require '../vendor/autoload.php'; // Requerir el autoload.php desde vendor
require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}
if($buttId=='Generar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Generar($params);
}
if($buttId=='New_Button1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button1($params);
}
if($buttId=='New_Button2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button2($params);
}
if($buttId=='New_Button3')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button3($params);
}
if($buttId=='New_Button4')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button4($params);
}
if($buttId=='Liquidar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Liquidar($params);
}
if($buttId=='Imprimir')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Imprimir($params);
}
if($buttId=='Generar_Acuerdo_de_Pago')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Generar_Acuerdo_de_Pago($params);
}
if($buttId=='New_Button5')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button5($params);
}
if($buttId=='New_Button6')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button6($params);
}
if($buttId=='New_Button7')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button7($params);
}
if($buttId=='New_Button8')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button8($params);
}
if($buttId=='New_Button9')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button9($params);
}
if($buttId=='New_Button10')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button10($params);
}
if($buttId=='ConceptoAbogado')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_ConceptoAbogado($params);
}
if($buttId=='CierreMes')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_CierreMes($params);
}
if($buttId=='ImprimirOfDev')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_ImprimirOfDev($params);
}
if($buttId=='ImprimirOfChe')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_ImprimirOfChe($params);
}
if($buttId=='diccionarioDevoluciones')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_diccionarioDevoluciones($params);
}
if($buttId=='New_Button11')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button11($params);
}
if($buttId=='New_Button12')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button12($params);
}
if($buttId=='maxTime')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_maxTime($params);
}
if($buttId=='Resumen_Mensual1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Resumen_Mensual1($params);
}
if($buttId=='fichaTecnica')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_fichaTecnica($params);
}
if($buttId=='BDME_Actualiza_Buscar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BDME_Actualiza_Buscar($params);
}
if($buttId=='Buscar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar($params);
}
if($buttId=='Buscar1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar1($params);
}
if($buttId=='Buscar2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar2($params);
}
if($buttId=='Buscar3')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar3($params);
}
if($buttId=='BuscarR')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarR($params);
}
if($buttId=='BuscarRetiros')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarRetiros($params);
}
if($buttId=='BuscarDeteMes')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarDeteMes($params);
}
if($buttId=='BuscarAno')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarAno($params);
}
if($buttId=='BuscarMedidas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarMedidas($params);
}
if($buttId=='Buscar4')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar4($params);
}
if($buttId=='New_Button13')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button13($params);
}
if($buttId=='Buscar5')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar5($params);
}
if($buttId=='Enviar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Enviar($params);
}
if($buttId=='Buscar6')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar6($params);
}
if($buttId=='Buscar7')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar7($params);
}
if($buttId=='Buscar8')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar8($params);
}
if($buttId=='Buscar9')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar9($params);
}
if($buttId=='Buscar10')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar10($params);
}
if($buttId=='Buscar11')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar11($params);
}
if($buttId=='New_Button14')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button14($params);
}
if($buttId=='Buscar12')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar12($params);
}
if($buttId=='Buscar13')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar13($params);
}
if($buttId=='Imprimir1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Imprimir1($params);
}
if($buttId=='Buscar14')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar14($params);
}
if($buttId=='Buscar15')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar15($params);
}
if($buttId=='Buscar16')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar16($params);
}
if($buttId=='Buscar17')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar17($params);
}
if($buttId=='Buscar18')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar18($params);
}
if($buttId=='Consultar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Consultar($params);
}
if($buttId=='Generar_Desprendible')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Generar_Desprendible($params);
}
if($buttId=='Descargar_Aviso')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Descargar_Aviso($params);
}
if($buttId=='Consultar1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Consultar1($params);
}
if($buttId=='Consulta_de_Avisos_Notificaci_n')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Consulta_de_Avisos_Notificaci_n($params);
}
if($buttId=='Descargar_Desprendible')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Descargar_Desprendible($params);
}
if($buttId=='Buscar19')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar19($params);
}
if($buttId=='Reiniciar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Reiniciar($params);
}
if($buttId=='New_Button15')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button15($params);
}
if($buttId=='Imprimir2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Imprimir2($params);
}
if($buttId=='Buscar20')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar20($params);
}
if($buttId=='reiniciar1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_reiniciar1($params);
}
if($buttId=='Imprimir3')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Imprimir3($params);
}
if($buttId=='New_Button16')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button16($params);
}
if($buttId=='imprimir4')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_imprimir4($params);
}
if($buttId=='Buscar21')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar21($params);
}
if($buttId=='imprimir5')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_imprimir5($params);
}
if($buttId=='Buscar22')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar22($params);
}
if($buttId=='imprimir6')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_imprimir6($params);
}
if($buttId=='Buscar23')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar23($params);
}
if($buttId=='imprimir7')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_imprimir7($params);
}
if($buttId=='Buscar24')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar24($params);
}
if($buttId=='imprimir8')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_imprimir8($params);
}
if($buttId=='Buscar25')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar25($params);
}
if($buttId=='Buscar26')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar26($params);
}
if($buttId=='Nov_Sancionado')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Sancionado($params);
}
if($buttId=='Nov_Providencia')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Providencia($params);
}
if($buttId=='Nov_Providencia1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Providencia1($params);
}
if($buttId=='Nov_Ejecutor_a')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Ejecutor_a($params);
}
if($buttId=='Nov_Notificaci_n')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Notificaci_n($params);
}
if($buttId=='Nov__Obli__Inicial')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov__Obli__Inicial($params);
}
if($buttId=='Nov_Intereses')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Intereses($params);
}
if($buttId=='Nov_Costas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Costas($params);
}
if($buttId=='Nov_Incum_Acuerdo_Pago')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Incum_Acuerdo_Pago($params);
}
if($buttId=='Nov_Obligaci_n')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Obligaci_n($params);
}
if($buttId=='Nov_Despacho')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Despacho($params);
}
if($buttId=='Nov_Plazo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Plazo($params);
}
if($buttId=='Nov_Naturaleza')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Naturaleza($params);
}
if($buttId=='Nov_Origen')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Origen($params);
}
if($buttId=='Nov_Suspensi_n')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Nov_Suspensi_n($params);
}
if($buttId=='ActualizarDespachos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_ActualizarDespachos($params);
}
if($buttId=='Actualizar_Codificadores')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Actualizar_Codificadores($params);
}
if($buttId=='Validar_Pago')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Validar_Pago($params);
}
if($buttId=='Replace_Templates')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Replace_Templates($params);
}
if($buttId=='Enviar_Correo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Enviar_Correo($params);
}
if($buttId=='Buscar_Recaudo_Seccional')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar_Recaudo_Seccional($params);
}
if($buttId=='PDF_Print')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_PDF_Print($params);
}
if($buttId=='New_Button17')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button17($params);
}
if($buttId=='New_Button18')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button18($params);
}
if($buttId=='MandaAutoma')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_MandaAutoma($params);
}
if($buttId=='BuscarManda')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_BuscarManda($params);
}
if($buttId=='Calc2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Calc2($params);
}
if($buttId=='Enviar_Oficios')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Enviar_Oficios($params);
}
if($buttId=='Edit_Pago')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Edit_Pago($params);
}
if($buttId=='Delete_Pago')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Delete_Pago($params);
}
if($buttId=='Confirmar_Cambio_Contrasena')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Confirmar_Cambio_Contrasena($params);
}
if($buttId=='Consulta_BDME')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Consulta_BDME($params);
}
if($buttId=='Calc')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Calc($params);
}
if($buttId=='Gestion_imprimir')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Gestion_imprimir($params);
}
if($buttId=='Buscar_gestion_medidas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar_gestion_medidas($params);
}
if($buttId=='Buscar_Procesos_Sin_Medidas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Buscar_Procesos_Sin_Medidas($params);
}
if($buttId=='Clean')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Clean($params);
}

if( $eventId == 'Tipo_event' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Tipo_event( $params );
}
if( $eventId == 'Tipo_event' && "dbo.Autorizaciones" == $table )
{
	require_once("include/autorizaciones_variables.php");
	$cipherer = new RunnerCipherer("dbo.Autorizaciones");
	fieldEventHandler_Tipo_event( $params );
}
if( $eventId == 'Tipo_event1' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Tipo_event1( $params );
}
if( $eventId == 'Tipo_event1' && "dbo.Autorizaciones" == $table )
{
	require_once("include/autorizaciones_variables.php");
	$cipherer = new RunnerCipherer("dbo.Autorizaciones");
	fieldEventHandler_Tipo_event1( $params );
}
if( $eventId == 'cantidadLetras' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_cantidadLetras( $params );
}
if( $eventId == 'cantidadLetras' && "dbo.Autorizaciones" == $table )
{
	require_once("include/autorizaciones_variables.php");
	$cipherer = new RunnerCipherer("dbo.Autorizaciones");
	fieldEventHandler_cantidadLetras( $params );
}
if( $eventId == 'cantidadLetras' && "dbo.ListaChequeosReporte" == $table )
{
	require_once("include/listachequeosreporte_variables.php");
	$cipherer = new RunnerCipherer("dbo.ListaChequeosReporte");
	fieldEventHandler_cantidadLetras( $params );
}
if( $eventId == 'Remisorio_event_uperrcase' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Remisorio_event_uperrcase( $params );
}
if( $eventId == 'calcular_diasPlazo' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_calcular_diasPlazo( $params );
}
if( $eventId == 'Ejecutoria_event' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Ejecutoria_event( $params );
}
if( $eventId == 'TramiteId_event' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_TramiteId_event( $params );
}
if( $eventId == 'ConceptoId_event' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_ConceptoId_event( $params );
}
if( $eventId == 'PrivadoLibertad_event_click' && "dbo.Sancionados" == $table )
{
	require_once("include/sancionados_variables.php");
	$cipherer = new RunnerCipherer("dbo.Sancionados");
	fieldEventHandler_PrivadoLibertad_event_click( $params );
}
if( $eventId == 'DespachoCodificadores' && "dbo.Abogados" == $table )
{
	require_once("include/abogados_variables.php");
	$cipherer = new RunnerCipherer("dbo.Abogados");
	fieldEventHandler_DespachoCodificadores( $params );
}
if( $eventId == 'Mascara_Recaudos' && "dbo.Pagos1" == $table )
{
	require_once("include/pagos1_variables.php");
	$cipherer = new RunnerCipherer("dbo.Pagos1");
	fieldEventHandler_Mascara_Recaudos( $params );
}
if( $eventId == 'Avaluo_Mascara' && "dbo.Propiedades" == $table )
{
	require_once("include/propiedades_variables.php");
	$cipherer = new RunnerCipherer("dbo.Propiedades");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'Avaluo_Mascara' && "dbo.Propiedades3" == $table )
{
	require_once("include/propiedades3_variables.php");
	$cipherer = new RunnerCipherer("dbo.Propiedades3");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'Avaluo_Mascara' && "BienesInmuebles" == $table )
{
	require_once("include/bienesinmuebles_variables.php");
	$cipherer = new RunnerCipherer("BienesInmuebles");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'Avaluo_Mascara' && "BienesMuebles" == $table )
{
	require_once("include/bienesmuebles_variables.php");
	$cipherer = new RunnerCipherer("BienesMuebles");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'Avaluo_Mascara' && "Productos Bancarios" == $table )
{
	require_once("include/productos_bancarios_variables.php");
	$cipherer = new RunnerCipherer("Productos Bancarios");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'Avaluo_Mascara' && "dbo.PropiedadesMedidas" == $table )
{
	require_once("include/propiedadesmedidas_variables.php");
	$cipherer = new RunnerCipherer("dbo.PropiedadesMedidas");
	fieldEventHandler_Avaluo_Mascara( $params );
}
if( $eventId == 'SancionadoId_event' && "dbo.Solidarios" == $table )
{
	require_once("include/solidarios_variables.php");
	$cipherer = new RunnerCipherer("dbo.Solidarios");
	fieldEventHandler_SancionadoId_event( $params );
}
if( $eventId == 'SeccionalId_event' && "dbo.ProcesosReasignar" == $table )
{
	require_once("include/procesosreasignar_variables.php");
	$cipherer = new RunnerCipherer("dbo.ProcesosReasignar");
	fieldEventHandler_SeccionalId_event( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Abogados" == $table )
{
	require_once("include/abogados_variables.php");
	$cipherer = new RunnerCipherer("dbo.Abogados");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Ciudades" == $table )
{
	require_once("include/ciudades_variables.php");
	$cipherer = new RunnerCipherer("dbo.Ciudades");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Departamentos" == $table )
{
	require_once("include/departamentos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Departamentos");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Empresas" == $table )
{
	require_once("include/empresas_variables.php");
	$cipherer = new RunnerCipherer("dbo.Empresas");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Niveles" == $table )
{
	require_once("include/niveles_variables.php");
	$cipherer = new RunnerCipherer("dbo.Niveles");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Presupuestos" == $table )
{
	require_once("include/presupuestos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Presupuestos");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Salarios" == $table )
{
	require_once("include/salarios_variables.php");
	$cipherer = new RunnerCipherer("dbo.Salarios");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Uvts" == $table )
{
	require_once("include/uvts_variables.php");
	$cipherer = new RunnerCipherer("dbo.Uvts");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Bancos" == $table )
{
	require_once("include/bancos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Bancos");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Alertas" == $table )
{
	require_once("include/alertas_variables.php");
	$cipherer = new RunnerCipherer("dbo.Alertas");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'Validar_numeros_No_negativos' && "dbo.Uvbs" == $table )
{
	require_once("include/uvbs_variables.php");
	$cipherer = new RunnerCipherer("dbo.Uvbs");
	fieldEventHandler_Validar_numeros_No_negativos( $params );
}
if( $eventId == 'MaximoPesos_decimales_con_coma' && "dbo.Empresas" == $table )
{
	require_once("include/empresas_variables.php");
	$cipherer = new RunnerCipherer("dbo.Empresas");
	fieldEventHandler_MaximoPesos_decimales_con_coma( $params );
}




// create table and non table handlers
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$params["ChequeoId"]=$data["ChequeoId"];
$abogadoId=$data["AbogadoId"];
	$rs = DB::Query("select * from Chequeos where ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs->fetchAssoc() )
	{
		$obligacion=$data['Obligacion'];
		$tramiteId=$data["TramiteId"];
	}
if ($obligacion>0){
if ($data["Plazo"]<now()){
if ($tramiteId== 2){
$carteraTipoId=1;
$rs=DB::Query("declare @p2 int
set @p2=0
declare @p3 nvarchar(max)
set @p3=N''
exec [dbo].[Chequeos_Validar] @ChequeoId=".$params["ChequeoId"].",@Err_num=@p2 output,@Err_msg=@p3 output
select @p2 Errnum, @p3 Errmsg
");
//print_r($consulta);
while( $data = $rs->fetchAssoc() )
	{
		$Errmsg=$data['Errmsg'];
		//echo "Valor del error: ".$Errmsg;
		//echo "Valor del Numero error: ".$Errnum;
	}
if ($Errmsg){
/*
	echo " <script>if (confirm('Se encontro un error al crear el Proceso: ".$Errmsg."')) {
            location.reload(); // Recargar la página si el usuario hace clic en Aceptar
        }</script>";
*/
	$result["Errr"]=1;
	$result["mensaje"]=$Errmsg;
	//return true;
	}
else{
$result["ChequeoId"]=$data["ChequeoId"];
//Si no se detecta error, se ejecuta la creacion del proceso
$result["total"]= DB::DBLookup("select ChequeoId from ChequeosSancionados where ChequeoId=".$params["ChequeoId"]);
$contador=0;
if ($result["total"]!=null){
	$array=array();
	$rs = DB::Query("select * from Chequeos where ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs->fetchAssoc() )
	{
		$seccionalId=$data['SeccionalId'];
		$tipo=$data['Tipo'];
		$cantidad=$data['Cantidad'];
		$obligacion=$data['Obligacion'];
		$naturalezaId=$data['NaturalezaId'];	
		$conceptoId=$data['ConceptoId'];	
	}
	$rs = DB::Select("ChequeosSancionados", "ChequeoId=".$params["ChequeoId"] );
	while( $data = $rs->fetchAssoc() )
	{
		//echo "Ingresa correctamente";
		$sancionadoId=0;
		$array[].=$data['ChequeoSancionadoId']; // se llena arreglo si son mas de un sancionado
		$documento=$data['Documento'];
		$rs1 = DB::Query("SELECT * FROM Sancionados WHERE Documento='".$documento."'");
		while( $data = $rs1->fetchAssoc() )
		{
			$sancionadoId=$data['SancionadoId'];
		}
		
		if ($sancionadoId)
		{
    //echo ("El sancionado ya se encuentra registrado".$sancionadoId);
			$sancionadoId=$sancionadoId;
    }
		else {
		//echo ("El sancionado no se encuentra registrado");
		
		$rs2=DB::Exec("INSERT INTO Sancionados (Sancionado,TipoDocumentoId,Documento,Email,Celular,Masculino,Observaciones,Fallecimiento,PrivadoLibertad) SELECT Sancionado,TipoDocumentoId,Documento,Email,NULL,Masculino,Observaciones,NULL,0 FROM ChequeosSancionados WHERE Documento='".$documento."'");
		if ($rs2) {
			 //echo "La consulta se realizó correctamente.";
		} 
		else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta 1: " . DB::LastError();
			 exit();
		}
		}
	}
	//print_r ($array);
	//echo "SancionadoID para insertar:".$sancionadoId;
	$rs3 = DB::Query("SELECT MAX(Numero) AS Numero FROM Procesos WHERE SeccionalId=".$seccionalId." AND Fecha>'2023-01-01'");//se pone la fecha ya que hay numero de los años antiguos los caules son diferentes
	$rs4 = DB::Query("SELECT year(getdate())AS Fecha");
	$rs5 = DB::Query("SELECT S.Codigo AS Codigo FROM Seccionales S INNER JOIN Chequeos C ON C.SeccionalId=S.SeccionalId WHERE C.ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs5->fetchAssoc() )
		{
			$seccionalChequeo=$data['Codigo'];
		}
	while( $data = $rs4->fetchAssoc() )
		{
			$anoFecha=$data['Fecha'];
		}
	while( $data = $rs3->fetchAssoc() )
		{
			$numProceso=$data['Numero'];
		}
	$arrayNum=str_split($numProceso);
	for ($i=0;$i<strlen($numProceso);$i++){
            //echo("El valor".$i." es \n".$arrayNum[$i]); 
            if ($i==16){
                $valorNum=$arrayNum[$i];
            }
            if ($i==17){
                $valorNum=$valorNum.$arrayNum[$i];
            }
            if ($i==18){
                $valorNum=$valorNum.$arrayNum[$i];
            }
            if ($i==19){
                $valorNum=$valorNum.$arrayNum[$i];
            }
            if ($i==20){
                $valorNum=$valorNum.$arrayNum[$i];
            }
        }
		$valorNum=$valorNum+1;
		$numberFormat = str_pad($valorNum, 5, "0", STR_PAD_LEFT); //funcion para llenar con 0 a la izquierda si faltan digitos
		$numProcesoFinal=$seccionalChequeo.$anoFecha.$numberFormat."00";
		$rs6 = DB::Select("ChequeosSancionados", "ChequeoSancionadoId=".min($array));
		while( $data = $rs6->fetchAssoc() )
		{
			$documentoFinal=$data["Documento"];
		}
		$rs7 = DB::Select("Sancionados", "Documento='".$documentoFinal."'");
		while( $data = $rs7->fetchAssoc() )
		{
			$SancionadoIdFinal=$data["SancionadoId"];
		}
//Verificacion para crear proceso en cartera Ejemplarizante inicio
$rs = DB::Select("Empresas", "EmpresaId=1");
		while( $data = $rs->fetchAssoc() )
		{
			$maxPesos=$data["MaximoPesos"]."<br>";
			$maxUvt=$data["MaximoUvt"]."<br>";
			$maxSalarios=$data["MaximoSalarios"]."<br>";
			$maxUvb=$data["MaximoUvb"]."<br>";
		}
		
if (($conceptoId==1 and $naturalezaId==1) || ($cantidad>$maxUvt and  $tipo==3 and ($conceptoId!=4&&$conceptoId!=5))||($cantidad>$maxSalarios and  $tipo==2 and ($conceptoId!=4&&$conceptoId!=5))||($cantidad>$maxUvb and  $tipo==4 and ($conceptoId!=4&&$conceptoId!=5))||($obligacion>$maxPesos and  $tipo==1 and ($conceptoId!=4&&$conceptoId!=5)) ){
	//echo "Valor de la CarteraTipoId antes: ".$carteraTipoId;
	$carteraTipoId=5;
	//echo "<br>Valor de la CarteraTipoId despues: ".$carteraTipoId;
	//echo "<br>Valor del concepto: ".$conceptoId;
	//return false;
}

//echo "<br>Crea el proceso sin problema";
//return false;
//Verificacion para crear proceso en cartera Ejemplarizante fin
		//echo "Sancionado Finissshhhhh:".$SancionadoIdFinal;
		$resultado["response"]=DB::Exec("INSERT INTO Procesos (SeccionalId,AbogadoId,Fecha,Numero,DespachoId,SancionadoId,Providencia,Ejecutoria,ConceptoId,EstadoId,EtapaId,Folios,Tipo,Cantidad,Obligacion,Costas,Liquidacion,Dias,Intereses,Recaudo,CalificacionId,Terminacion,MotivoId,Observaciones,Cuotas,Abono,Inicio,VlrCuota,VlrIntereses,Garantia,Radicado,Remisorio,Acuerdo,Incumplimiento,Notificacion,Suspension,Traslado,Error,CarteraTipoId,ConceptoAbogado,Origen,Carpeta,ImportacionId,ActuacionId,ObligacionInicial,CostasInicial,InteresesInicial,MinJusticia,Revocatoria,Mayor,NotificacionValidada,Validado,Seleccionado,CompetenciaId,MinjusticiaId,SeleccionadoPor,Subsanar,NumeroMinjusticia,ProcesoIdOrigen,SeleccionadoFecha,InteresesIniciales,InteresesCalculados,ProcesoIdDestino,RecaudoMinjusticia,RecaudoTerminado,Persuasivo,ObligacionCreacion,InteresesCreacion,CostasCreacion,Plazo,NaturalezaId,TrasladoCartera,CarteraTipoIdOrigen,TrasladoConcepto,ConceptoIdOrigen,AutorizadoPlazo,AutorizadoFecha,AutorizadoPor,Reliquidacion,ChequeoId,VlrCostas,VlrInteresesPlazo) SELECT SeccionalId,AbogadoId,Fecha,".$numProcesoFinal.",DespachoId,".$SancionadoIdFinal.",Providencia,Ejecutoria,ConceptoId,2,1,Folios,Tipo,Cantidad,Obligacion,Costas,NULL,0,0,0,1,NULL,NULL,Observaciones,0,0,NULL,0,0,NULL,Origen,Remisorio,NULL,NULL,NULL,NULL,NULL,NULL,".$carteraTipoId.",NULL,NULL,NULL,NULL,NULL,Obligacion,Costas,0,MinJusticia,NULL,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,NULL,0,NULL,Obligacion,0,Costas,Plazo,NaturalezaId,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,ChequeoId,0,0 FROM Chequeos WHERE ChequeoId=".$params["ChequeoId"]);
//echo "Valor de la insercion es: " . $resultado["response"];
		if ($resultado["response"]) {
				DB::Exec("UPDATE Chequeos SET Procesado=1 WHERE ChequeoId=".$params["ChequeoId"]);
				$rs = DB::Select("Procesos", "ChequeoId='".$params["ChequeoId"]."'");
						while( $data = $rs->fetchAssoc() )
						{
							$procesoId=$data["ProcesoId"];
							//$abogadoId=$data["AbogadoId"];
						}
				DB::Exec("UPDATE Procesos SET Dias=ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END, 
                         GETDATE(), Procesos.SeccionalId) + DATEDIFF(day, GETDATE(), DATEADD(year, CASE WHEN Procesos.ConceptoId = 5 THEN 3 ELSE 5 END, CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END))
						 FROM Procesos
						 LEFT JOIN dbo.InterrupcionesSumaView ON dbo.Procesos.ProcesoId = dbo.InterrupcionesSumaView.ProcesoId
						 WHERE dbo.Procesos.ProcesoId=".$procesoId);
				$asignacion=	DB::Exec("INSERT INTO Reasignaciones (Fecha,ProcesoId,AbogadoId) VALUES (GETDATE(),".$procesoId.",".$abogadoId.")");
				//Validacion si hay error en el INSERT
				if ($asignacion){
					//echo "El insert en reasiganciones se realizo correctamnete";
				}
				else{
				echo "Error al ejecutar la consulta2: " . DB::LastError();
				$result["reas"]=1;
				exit();
				}
				$path="classes/".$procesoId;
				$path1="classes/".$params["ChequeoId"];
				if (is_dir($path1)){
					$archivos = scandir($path1);
					$archivos = array_diff($archivos, array('.', '..'));
					mkdir($path,0777);
					foreach ($archivos as $archivo) {
						//echo "Nombre del archivo: ".$archivo;
						if (copy($path1."/".$archivo,$path."/".$archivo)) {
							 //echo "El archivo ha sido movido correctamente.";
						} else {
							 $error = error_get_last();
							 echo "Hubo un error al intentar mover el archivo.".$error['message'];
							 return false;
						}
				}
				}
			//echo "Valor de la asignacion: ".	$asignacion;
			//echo ("<script>alert('Proceso insertado correctamnete')</script>");
			//echo "Se realiza la insercion del Proceso con exito";
		} else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta3: " . DB::LastError();
			 exit();
		}
		$rs8 = DB::Select("Procesos", "ChequeoId=".$params["ChequeoId"]);
		while( $data = $rs8->fetchAssoc() )
		{
			$procesoId=$data["ProcesoId"];
		}
		foreach($array as $chequeoF){
			$rs9 = DB::Select("ChequeosSancionados", "ChequeoSancionadoId=".$chequeoF);
			while( $data = $rs9->fetchAssoc() )
			{
				$documentoVal=$data["Documento"];
			}
			$rs10=DB::Select("Sancionados", "Documento='".$documentoVal."'");
			while( $data = $rs10->fetchAssoc() )
			{
				$SancionadoSol=$data["SancionadoId"];
			}
			if ($SancionadoSol!=$SancionadoIdFinal){
					$insertSol=DB::Exec("INSERT INTO Solidarios values(".$procesoId.",".$SancionadoSol.")");
					if ($insertSol) {
				//DB::Exec("UPDATE Chequeos SET Procesado=1 WHERE ChequeoId=".$params["ChequeoId"]);
				//echo ("<script>alert('Proceso insertado correctamnete')</script>");
			//echo "Se realiza la insercion del Proceso con exito";
					} else {
							// Hubo un error en la ejecución de la consulta
							echo "Error al ejecutar la consulta4: " . DB::LastError();
								exit();
						}
			}
		}
}   
}
}
else{
	$result["Dev"]=1;
}
}
else{
	$result["Plazo"]=1;
}
}
else{
	$result["ObliCero"]=1;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Generar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
global $dal;
include_once (getabspath("classes/actuacionAction.php"));
include_once (getabspath("classes/calcIntereses.php"));
include_once (getabspath("plantillaGCC.php"));

//print_r($params["keys"]);
//exit();
function mergeDocx($docxFiles, $output) {
    $outputZip = new ZipArchive;
    if ($outputZip->open($output, ZipArchive::CREATE) !== TRUE) {
        exit("No se puede abrir el archivo de salida <$output>\n");
    }

    // Copiar archivos del primer DOCX al archivo de salida
    $zip1 = new ZipArchive;
    if ($zip1->open($docxFiles[0]) === TRUE) {
        for ($i = 0; $i < $zip1->numFiles; $i++) {
            $file = $zip1->getNameIndex($i);
            $outputZip->addFromString($file, $zip1->getFromName($file));
        }

        // Fusionar document.xml del primer archivo
        $doc1 = new DOMDocument;
        $doc1->loadXML($zip1->getFromName('word/document.xml'));
        $zip1->close();
    } else {
        exit("No se puede abrir el archivo DOCX: " . $docxFiles[0] . "\n");
    }

    // Procesar los archivos restantes
    for ($j = 1; $j < count($docxFiles); $j++) {
        $zip = new ZipArchive;
        if ($zip->open($docxFiles[$j]) === TRUE) {
            // Crear un salto de página antes de agregar el nuevo documento
            $paragraph = $doc1->createElement('w:p');
            $run = $doc1->createElement('w:r');
            $br = $doc1->createElement('w:br');
            $br->setAttribute('w:type', 'page');
            $run->appendChild($br);
            $paragraph->appendChild($run);
            $body1 = $doc1->getElementsByTagName('body')->item(0);
            $body1->appendChild($paragraph);

            // Fusionar document.xml del archivo actual
            $doc2 = new DOMDocument;
            $doc2->loadXML($zip->getFromName('word/document.xml'));
            $body2 = $doc2->getElementsByTagName('body')->item(0);

            foreach ($body2->childNodes as $child) {
                $node = $doc1->importNode($child, true);
                $body1->appendChild($node);
            }

            // Copiar todos los archivos del DOCX al archivo de salida, excepto document.xml
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $file = $zip->getNameIndex($i);
                if ($file !== 'word/document.xml') {
                    $outputZip->addFromString($file, $zip->getFromName($file));
                }
            }

            $zip->close();
        } else {
            exit("No se puede abrir el archivo DOCX: " . $docxFiles[$j] . "\n");
        }
    }

    // Guardar el document.xml fusionado en el archivo de salida
    $outputZip->addFromString('word/document.xml', $doc1->saveXML());
    $outputZip->close();
    //echo "Documentos unificados en $output\n";
}

$abogadoActual=$_SESSION["AbogadoId"];
$userId=$_SESSION["UserId"];
$contSigob=0;
$oficioId=$params['oficioId'];
$resolucion=$params['resolucion'];
$radicado=$params['radicado'];
$observaciones=$params['observaciones'];
$contData=0;
$contData1=0;
$arrayProcesos = [];
while ($contData1<count($params["keys"])){
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$numProceso=$params["keys"][$contData1]["Numero"];
//echo "Numero de Proceso al ingresar en el while: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE Numero='".$numProceso."'");
		while( $date = $response->fetchAssoc() )
				{
					$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
				//echo "Numero del ProcesoId=".$procesoId;
$response=DB::Query("SELECT * FROM Oficios WHERE OficioId='".$oficioId."'");
		while( $date = $response->fetchAssoc() )
				{
					$nameCorrespondencia=$date["Oficio"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
					$idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
				//echo "Value Proceso: ".$numProceso."valor del Id:".$idCorres;
if (!empty($idCorres)) {
	//echo "Ingreso";
				 $result["Err"]=1;
				 $result["numProceso"]=$numProceso;
				 $result["nameCorrespondencia"]=$nameCorrespondencia;
				 $arrayProcesos[]=$numProceso;
        //echo "Saltando el número 3\n";
				 //echo "<script>alert('El proceso".$numProceso." ya registro el Oficio: ".$nameCorrespondencia."el dia de hoy')</script>";
        //$contData1++; // Incrementar manualmente para evitar bucle infinito
        //continue;
				//echo "Entro porque ya se envio:".$contData1;
				$contData1++;
				continue;
}
//echo "Value Fecha:".$fechaAc." Value Response2:".$idCorres."<br>";
//echo "Entro porque no se realizo el envio:".$contData1;
$rs2=DB::Exec("INSERT INTO CorrespondenciaMasiva(fecha,proceso,correspondencia,usuario,enviado,observaciones,radicado) VALUES (GETDATE(),".$procesoId.",".$oficioId.",'".$userId."',0,'".$observaciones."','')");
				if ($rs2) {
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insert into a correspondenciasMasivas " . DB::LastError();
					 exit();
				}
$contData1++;
}
//print_r($result["arrayProcesos"]);
$result["arrayProcesos"]=$arrayProcesos;
//echo "Numero de Registros:".count($params["keys"]);
//while ( $data = $button->getNextSelectedRecord() ) {
while ($contData<count($params["keys"])){//SE OBTIENEN LA VARIABLES PARA CONUSMIR LOS METODOS DE LA API SIGOBIUS Y VARIABLES PARA TRAMITAR LAS VALIDACIONES, INSERT Y UPDATE
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$numProceso=$params["keys"][$contData]["Numero"];
//echo "Numero de Procesos: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE Numero='".$numProceso."'");
		while( $date = $response->fetchAssoc() )
				{
					$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
				 $idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
if (!empty($idCorres)) {
				 //$result["Err"]=1;
				 //$result["numProceso"]=$numProceso;
				 //$result["nameCorrespondencia"]=$nameCorrespondencia;
        //echo "Saltando el número 3\n";
        $contData++; // Incrementar manualmente para evitar bucle infinito
        continue;
}
//echo "El AbogadoId del proceso es: ".$data["AbogadoId"];
$response=DB::Query("SELECT ISNULL(ActuacionId,0) AS ActuacionId FROM Oficios WHERE OficioId=".$oficioId);
		while( $date = $response->fetchAssoc() )
				{
					$actuacionId=$date["ActuacionId"];
				}
$response=DB::Query("SELECT * FROM Empresas WHERE EmpresaId=1");
		while( $date = $response->fetchAssoc() )
				{
					$fechaCierre=$date["Cierre"];
				}
$fechaCierreDT=new DateTime($fechaCierre);
$desde = clone $fechaCierreDT; // Clonamos el objeto para no modificar la original
$desde->modify('+1 day'); // Añadir 1 día
$hasta = clone $desde; // Clonamos nuevamente para modificar la fecha
$hasta->modify('+1 month'); // Añadir 1 mes
$hasta->modify('-1 day');   // Restar 1 día
$desde=$desde->format('Y-m-d'); //SE calcula fecha desde
$hasta=$hasta->format('Y-m-d'); //SE calcula fecha Hasta
$fecha=now();
$response=DB::Query("SELECT Salario FROM Salarios WHERE (Ano=YEAR('".$hasta."'))");
		while( $date = $response->fetchAssoc() )
				{
					$minimoMnesual=$date["Salario"];
				}

$response=DB::Query("SELECT Intereses,ISNULL(EtapaId,0) as EtapaId, ISNULL(EstadoId,0) as EstadoId, ISNULL(MotivoId,0) as MotivoId,(CASE
                               WHEN EstadoId = 6
                                    AND MotivoId = 1
                               THEN 1
                               ELSE 0
                           END) as TermPago FROM Actuaciones WHERE ActuacionId=".$actuacionId);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$etapaId=$date["EtapaId"];
					$estadoId=$date["EstadoId"];
					$motivoId=$date["MotivoId"];
					$terminacionPago=$date["TermPago"];
					$flagIntereses=$date["Intereses"];
				}
$consulta = DB::Query("SELECT Despacho,Codificador FROM Abogados where AbogadoId=".$abogadoId);
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            $despacho=$date["Despacho"];
            $codificador=$date["Codificador"];
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        };
$consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Procesos C ON C.DespachoId = D.DespachoId
        WHERE ProcesoId =".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $despachoJuez=$date["DespachoJuez"];
        }
$consulta=DB::Query("SELECT ISNULL(OficioIdRequisito, 0) as OficioIdRequisito,* FROM Oficios WHERE OficioId=".$oficioId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$asunto=$date["Oficio"];
						$flagSigob=$date["Sigobius"];
						$oficReq=$date["OficioIdRequisito"];
        }
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["ObligacionInicial"]+$date["CostasInicial"]+$date["InteresesInicial"];
						 $sancionadoId=$date["SancionadoId"];
						 $competenciaId=$date["CompetenciaId"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
						 $prescripcion=$date["Dias"];
						 $terminacion=$date["Terminacion"];
						 $traslado=$date["Traslado"];
						 $error=$date["Error"];
						 $carteraTipoId=$date["CarteraTipoId"];
        }
$consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $saldo=$date["Saldo"];
						 $obligacionPv1=$date["Obligacion"];
						 $interesesPv1=$date["Intereses"];
						 $costasPv1=$date["Costas"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
        }
$consulta=DB::Query("SELECT SuspensionId
            FROM suspensiones
            WHERE CONVERT(DATE, GETDATE()) BETWEEN Desde AND Hasta");
        while( $date = $consulta->fetchAssoc() )
				{
						$suspensionId=$date["SuspensionId"];
        }
if ($suspensionId==''){
	$suspensionTerm=0;
}
else{
	$suspensionTerm=1;
}
$consulta=DB::Query("SELECT * FROM Sancionados WHERE SancionadoId=".$sancionadoId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$sancionado=$date["Sancionado"];
        }
$consulta=DB::Query("SELECT dbo.Money2Text(".$obligacion.") Obligacion, dbo.Money2Text(".$obligacionTotal.") obligacionTotal");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["obligacionTotal"];
        }
if ($oficReq!=0){
	$consulta=DB::Query("SELECT * FROM Correspondencias WHERE OficioId=".$oficReq." AND ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioIdR=$date["OficioId"];
        }
	if ($oficioIdR==''){
		$consulta=DB::Query("SELECT * FROM Oficios WHERE OficioId=".$oficReq);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioR=$date["Oficio"];
        }
			echo "<script>alert('Para generar este oficio es necesario haber generado el oficio ".$oficioR." con anterioridad.')</script>";
			return false;
	}
}
		$consulta=DB::Query("SELECT TOP 1 Correspondencias.Fecha as Fecha,* 
		FROM Correspondencias
		INNER JOIN Oficios ON Oficios.OficioId=Correspondencias.OficioId
		where Oficios.Oficio like '_PERSUASIVO%' and ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $fechaPersu=$date["Fecha"];
        }
//SE REALIZAN VALIDACIONES BASADOS EN LAS VARIABLES OBTENIDAS
if ($oficioId==1105 || $oficioId==4328){
	$fechaPersu=new DateTime($fechaPersu);
	$fechaActual=new DateTime(now());
	// Agregar 15 días
	$fechaPersu->modify('+15 days');
	//echo "Valor fecha format: ".$fechaPersu->format('Y-m-d')." y el valor de la fecha actual=".$fechaActual->format('Y-m-d');
	if ($fechaActual<=$fechaPersu){
		echo "<script>alert('Recordar que el Oficio Resolución Mandamiento de Pago debe ser asociado despues de 15 días del Oficio Persuasivo')</script>";
		//return false;
	}
}
if ($estadoAct==6 && $suspensionTerm==1){ // No puede genera Terminación del Proceso porque estamos en Suspensión de Términos
	echo "<script>alert('Este proceso no se puede TERMINAR porque aún estamos en SUSPENSIÓN DE TÉRMINOS.')</script>";
	return false;	
}
if ($incumplimiento=='NULL' && $actuacionId==1049){ //Anulación de Incumplimiento de Acuerdo de Pago
	echo "<script>alert('No se puede ANULAR EL INCUMPLIMIENTO DE ACUERDO DE PAGO porque el proceso no tiene INCUMPLIMIENTO DE ACUERDO DE PAGO..')</script>";
	return false;	
}
if ($acuerdo=='NULL' && ($actuacionId==1056 || $actuacionId==1057)){ //Reversión de Acuerdo de Pago
	echo "<script>alert('No se puede REVERSAR EL ACUERDO DE PAGO porque el proceso NO TIENE ACUERDO DE PAGO.')</script>";
	return false;	
}
if ($terminacionPago==1 && ($obligacionPv1+$interesesPv1+$costasPv1)-$minimoMnesual >0 ){ 
	echo "<script>alert('Este proceso no se puede TERMINAR POR PAGO porque aún tiene saldo pendiente.')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($estadoAct==6 && $actuacionId!=1033){ // TERMINADO Y NO SE ESTA REVOCANDO LA TERMINACION
	$consulta=DB::Query("SELECT Estados.Estado
                            FROM Estados
                                 INNER JOIN Procesos ON Estados.EstadoId = Procesos.EstadoId
                            WHERE Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$estado=$date["Estado"];
        }
	echo "<script>alert('No se puede cambiar el estado porque el proceso esta ".$estado."')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($actuacionId==14 && $motivoId==11 && $competenciaId=='NULL'){ //TRASLADO DE PROCESOS (Termina el proceso por traslado y lo crea en la nueva sucursal (competencia))
		echo "<script>alert('El proceso no se puede trasladar porque no se le ha asignado la COMPETENCIA.')</script>";
		return false;
}
if ($actuacionId==1038 && $motivoId==14){ //TRASLADO DE CARTERA PRESCRITA A CARTERA ACTIVA (Termina el proceso DE CARTERA PRESCRITA y lo crea en la CARTERA ACTIVA)
		$consulta=DB::Query("SELECT CarteraTipos.Prescrita
                    FROM Procesos
                         INNER JOIN CarteraTipos ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
                    WHERE(Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$carteraPres=$date["Prescrita"];
        }
		if($carteraPres==0){
			echo "<script>alert('El proceso no se puede trasladar de cartera PRESCRITA porque esta en una cartera ACTIVA.')</script>";
			return false;
		}
}
/*
if ($actuacionId==20){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		echo "<script>alert('El ACUERDO DE PAGO solamente se puede hacer por el PROCEDIMIENTO DE ACUERDO DE PAGO.')</script>";
		return false;
}
*/
if ($estadoAct==5){
	$actuacionIds = [1035, 1037, 1031, 1044, 1045, 1051];
	$oficioIds = [4453, 4454, 4480, 4490, 3270, 4436, 4438, 4557];
	if (!in_array($actuacionId, $actuacionIds) && !in_array($oficioId, $oficioIds)){
		echo "<script>alert('A un proceso INTERRUMPIDO solo se le pueden hacer actuaciones/oficios de MEDIDAS CAUTELARES o BÚSQUEDA DE BIENES.')</script>";
		return false;
	}
}
if ($estadoId==4 || $estadoId==5){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==6){
		echo "<script>alert('El proceso no se puede SUSPENDER ó INTERRUMPIR porque está TERMINADO.')</script>";
		return false;
	}
}
$actuacionIds = [1031, 1044, 1051];
if ($estadoId==2 && in_array($actuacionId, $actuacionIds)){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==4 || $estadoAct==5){
		echo "<script>alert('No se puede revocar la SUSPENSIÓN/INTERRUPCIÓN porque el proceso no está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
if (($estadoAct==5 || $estadoAct==4) && $sancionadoId!=292340){
	if ($estadoId==4 || $estadoId==5){
		echo "<script>alert('El proceso no se puede SUSPENDER/INTERRUMPIR porque está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
//echo "Valor de flag: ".$flagSigob;
//return false;
if ($flagSigob==0){
	$_SESSION["Radicado"]='';
	$_SESSION["token"]='';
	$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					$rs2=DB::Exec("INSERT INTO Correspondencias(ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicado."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
				if ($rs2) {
						$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicado."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//echo '<script>alert("Response Oficio->Process true")</script>';
					//return true;
				}
				else{
					//echo '<script>alert("Response Oficio->Process false")</script>';
					//return false;
				}
}
else{
//echo "Abogado Actual: ".$abogadoActual.", Abogado de Proceso:".$abogadoId;
if ($abogadoActual!=$abogadoId){
echo "<script>if (confirm('En el proceso ".$numProceso." no se puede enviar la correspondencia Sigobius al no pertenecer al mismo abogado que ejecuta el proceso de envio')) {
            location.reload(); // Recargar la página si el usuario hace clic en Aceptar
        }</script>";
	//echo '<script>alert("En el proceso'.$numProceso.' no se puede enviar la correspondencia Sigobius al no pertenecer al mismo abogado que ejecuat el proceso de envio");</script>';
	return false;
}
else{
	//exit();
	//CONSUMINOS EL METODO DE NuevaCorrespondencia de la API SOAP
	//la url de la conexion a Sigob
	$url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
	//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
	//Parametro a enviar para consumir el metodo
	$data = array(
		'Despacho' => $despacho,
		'Codificador' => $codificador,
		'SoloEditorExterno' => '1',
		'Contrasena' => '448B8890'
		// ... Agrega más parámetros según sea necesario
	);

	// Convertir los datos a formato de cadena
	$postData = http_build_query($data);

	// Configurar opciones de cURL
	$options = array(
		CURLOPT_URL            => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST           => true,
		CURLOPT_POSTFIELDS     => $postData,
	);

	// Inicializar cURL y configurar opciones
	$curl = curl_init();
	curl_setopt_array($curl, $options);

	//NO VALIDAR SI REQUIERE SSL
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

	// Realizar la solicitud cURL y obtener la respuesta
	$response2 = curl_exec($curl);
	// Verificar errores
	if (curl_errno($curl)) {
		echo 'Error al realizar la solicitud: ' . curl_error($curl);
			return false;
	}
	else{

	// Imprimir la respuesta del servicio web
	//echo "<br>Valor del metodo NuevaCorrespondencia: ".$response2."<br>";
	$xml = new SimpleXMLElement($response2);
	$radicadoF=strval($xml[0]);
	$_SESSION["Radicado"]=$radicadoF;
	////////
	//CONSUMINOS EL METODO DE ActualizarCorrespondencia de la API SOAP
	$curl = curl_init();
	//SE LLAMA LA FUNCION LA CUAL TOMA LA PLANTILLA Y REEMPLAZA SUS VARIABLES, CREANDO UN NUEVO .DOCX
	$objeto=new plantillas($procesoId,$oficioId,$obligacion,$obligacionTotal,$radicadoF);
	$objeto->funcGlobal();
	//$rutaArchivo = 'Plantilla_1097.docx';
	$noDirecciones=$objeto->getNoDirecciones();
	if ($noDirecciones>1){
	//echo "Numero de direcciones: ".$noDirecciones.var_dump($noDirecciones);
	$noDirecciones=$noDirecciones-1;//porque las plantillas son XXX_0
	//$docxFiles = array();
	$docxFiles=[];
	for ($i=0;$i<=$noDirecciones;$i++){
		$docxFiles []='templates_GCC/Archivo_'.$procesoId.'_'.$oficioId.'_'.strval($i).'.docx';
		//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_'.strval($i).'.docx';
	}
	//print_r($docxFiles);
	//$docxFiles = array('templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx','templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx');
	$salida = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
	mergeDocx($docxFiles, $salida);
	}
	else{
	$rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx'; 
	}
	$rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
	$bytesDocumento = file_get_contents($rutaArchivo);
	$base64 = base64_encode($bytesDocumento);
	//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx';
	//$rutaArchivo2 = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx';
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
		//CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
	<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
	<soap12:Body>
		<ActualizarCorrespondencia xmlns="http://tempuri.org/">
		<CodigoRegistro>'.$radicadoF.'</CodigoRegistro>
		<Asunto>'.$asunto.'</Asunto>
		<Tipo>2</Tipo>
		<GradoReserva>0</GradoReserva>
		<Prioridad>0</Prioridad>
		<MedioEnvio>0</MedioEnvio>
		<EsperaRespuesta>N</EsperaRespuesta>
		<FechaEstimadaRespuesta>'.now().'</FechaEstimadaRespuesta>
		<ResultadoGestion>-1</ResultadoGestion>
		<Objetivos>11</Objetivos>
		<FormatoDocumento>1</FormatoDocumento>
		<Documento>'.$base64.'</Documento>
		<NombreDocumento>Prueba wsAPICorrespondencia.docx</NombreDocumento>
		<DocumentoTexto>Texto sin formato del documento</DocumentoTexto>
		<Firmante>'.$despacho.'</Firmante>
		<Estado>0</Estado>
		<DespachoDestino></DespachoDestino>
		<Vocativo>-1</Vocativo>
		<Apellido>'.$sancionado.'</Apellido>
		<Nombre>'.$despachoJuez.'</Nombre>
		<NumeroDocumento>12345</NumeroDocumento>
		<Sexo>0</Sexo>
		<FechaNacimiento>1977/01/01</FechaNacimiento>
		<Institucion>-1</Institucion>
		<Cargo>-1</Cargo>
		<Departamento>-1</Departamento>
		<Telefono>09811111231</Telefono>
		<CorreoElectronico>alelamonaca@gmail.com</CorreoElectronico>
		<Calle>Mi calle</Calle>
		<Ciudad>Asunción</Ciudad>
		<ProvinciaDepartamento>Central</ProvinciaDepartamento>
		<Pais>Paraguay</Pais>
		<TipoDireccion>1</TipoDireccion>
		<CodigoRegistroPrecedente></CodigoRegistroPrecedente>
		<EsRespuesta>0</EsRespuesta>
		<Contrasena>448B8890</Contrasena>
		</ActualizarCorrespondencia>
	</soap12:Body>
	</soap12:Envelope>',
	CURLOPT_HTTPHEADER => array(
		'Content-Type: text/xml',
		'Cookie: ASP.NET_SessionId=4uvpkyerhy21mcwghvyqfuw0'
	),
	));

	//NO VERIFICAR CERTICADO SSL
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

	$response = curl_exec($curl);
	if ($response == false) {
		echo 'Error en la solicitud cURL: ' . curl_error($curl);
			return false;
	} else {
	//echo '<br>Respuesta de la API Metodo Actualizar Correspondencia: ' . $response;
	$xml = new SimpleXMLElement($response);
		// Definir el namespace
		$namespaces = $xml->getNamespaces(true);
		$soapNamespace = $namespaces['soap'];

		// Acceder al cuerpo del SOAP
		$body = $xml->children($soapNamespace)->Body;

		// Acceder al namespace específico del cuerpo
		$responseNamespace = $namespaces[''];
		$token = $body->children($responseNamespace)->ActualizarCorrespondenciaResponse->ActualizarCorrespondenciaResult;
			$token=strval($token);
			$_SESSION["token"]=$token;
		// Mostrar el resultado
		//echo "Resultado: " .$token;
			//var_dump($token);
			//echo "Result: ".$token ;
			$ultimosCaracteres = substr($token, -2);
		//echo "<script>alert('El codigo obtenido es el: ".$radicadoF." y el valor del metodo ActualizarCorrespondencia es: ".$token."')</script>";
		// Comparar con "=="
		if ($ultimosCaracteres === "==") {
					curl_close($curl);
					$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
					$response=$oficio->process();
					if ($response==true){
						//echo '<script>alert("Response Oficio->Process true")</script>';
						$rs2=DB::Exec("INSERT INTO Correspondencias (ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicadoF."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
					if ($rs2) {
									$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicadoF."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
							if ($rs2) {
								//echo "La consulta se realizó correctamente.";
							} 
							else {
								// Hubo un error en la ejecución de la consulta
								echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
								exit();
							}
						//echo "La consulta se realizó correctamente.".$rs2;
					} 
					else {
						// Hubo un error en la ejecución de la consulta
						echo "Error al ejecutar la consulta 1: " . DB::LastError();
						exit();
					}
						//return true;
					}
					else{
						echo '<script>alert("El proceso Numero: '.$numProceso.' presento un problema con el envio de Correspondencias: "'.$response.')</script>';
						return false;
					}
		} elseif($ultimosCaracteres=='') {
						echo "<script>alert('Error con el Proceso Numero: ".$numProceso.". El codigo obtenido es el: ".$radicadoF." pero no se logro conectividad, intentelo de nuevo')</script>";
						return false;
					}
					else{
					echo "<script>alert('Error con el Proceso Numero: ".$numProceso.".El codigo obtenido es el: ".$radicadoF." y se presento un error: ".$token.", solucionarlo o de no ser solucionable, intentelo mas tarde')</script>";
			return false;
		}
	}
	}
	/*
	else{
		echo "<script>alert('El Despacho resgistrador no esta autorizado a indicar como firmante al despacho firmante')</script>";
		return false;
	}	
	*/
	}
}
$contSigob++;
//echo "Valor contador Antes:".$contData."Contador Sigob".$contSigob;
$contData++;
//echo "Valor contador i:".$contData;
}
$result["response"]="OK";;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/calcIntereses.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular(date('Y-m-d'),0,0);
//exit();
$result["total"]=$recalcular->getSuma();;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
if ($params["txt"]==1){
	$consulta2=DB::Exec("UPDATE Chequeos
              SET 
                  Aprobado = 1, 
                  AprobadoPor = '".$_SESSION["UserNameF"]."', 
                  FechaAprobacion = GETDATE()
            WHERE(ChequeoId = ".$data["ChequeoId"].")");
            if ($consulta2) {
						$result["txt"]=1;
                    } 
             else {
								  // Hubo un error en la ejecución de la consulta
								  echo "Error al ejecutar la consultaaaaa: " . DB::LastError();
								  //exit();
                   }
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $pageObject->getMasterRecord();
print_r($data);



// Put your code here.
//$result["txt"] = $params["txt"]." world!";
include_once (getabspath("plantillaGCC.php"));
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new plantillas($params["ProcesoId"],$params["OficioId"],$params["obligacionLetras"],$params["obligacionTotalLetras"]);
$objeto->funcGlobal();
/*
switch($params["OficioId"]){
	case "1097":
		$log=$objeto->funcGlobal();
	break;
	case "4328":
		$log=$objeto->resMandPago();
	break;
	case "4329":
		$log=$objeto->citMandPago();
	break;
	case "4600":
		$log=$objeto->susTerm();
	break;
	case "4450":
		$log=$objeto->resSusTerm();
	break;
	case "4498":
		$log=$objeto->notMandPago();
	break;
	case "4502":
		$log=$objeto->constNotAvi();
	break;
	case "4337":
		$log=$objeto->resTermOrden();
	break;
	case "4361":
		$log=$objeto->notCorMandPago();
	break;
	case "4346":
		$log=$objeto->resSegAdelEjec();
	break;
	case "2137":
		$log=$objeto->epsSigob();
	break;
	case "4509":
		$log=$objeto->notAviPres();
	break;
	case "4367":
		$log=$objeto->comTermProCorp();
	break;
	case "4339":
		$log=$objeto->resDeTermPorPagTot();
	break;
	case "4372":
		$log=$objeto->solEmbDinProdBanc();
	break;
	case "1090":
		$log=$objeto->comTerProcSanc();
	break;
	case "4416":
		$log=$objeto->resAvoPresTerMjdCer();
	break;
	case "4547":
		$log=$objeto->persCostJudSig();
	break;
	case "4438":
		$log=$objeto->modParOtrTipOfiSig();
	break;
	case "4365":
		$log=$objeto->desComiSig();
	break;
	case "4347":
		$log=$objeto->resEmbSumDin();
	break;
	case "4464":
		$log=$objeto->NotPorAviResSegAde();
	break;
	case "4465":
		$log=$objeto->notPorCorrResSegAde();
	break;
	case "4354":
		$log=$objeto->citSegAdel();
	break;
	case "4484":
		$log=$objeto->notPorAviOtrRes();
	break;
	case "4500":
		$log=$objeto->inforCoacVari();
	break;
	case "1098":
		$log=$objeto->conInfoDian();
	break;
	case "4338":
		$log=$objeto->resTermAnul();
	break;
	case "4566":
		$log=$objeto->acuPagoSig();
	break;
	default:
		echo "Opcion no homologada o no reconocida";
	break;
	case "4365":
		$log=$objeto->desComiSig();
	break;
	case "4347":
		$log=$objeto->resEmbSumDin();
	break;
	case "4464":
		$log=$objeto->NotPorAviResSegAde();
	break;
	case "4465":
		$log=$objeto->notPorCorrResSegAde();
	break;
	case "4354":
		$log=$objeto->citSegAdel();
	break;
	case "4484":
		$log=$objeto->notPorAviOtrRes();
	break;
	case "4500":
		$log=$objeto->inforCoacVari();
	break;
	case "1098":
		$log=$objeto->conInfoDian();
	break;
	case "4338":
		$log=$objeto->resTermAnul();
	break;
	case "4366":
		$log=$objeto->ofiEnvDespCom();
	break;
	case "4514":
		$log=$objeto->respOfiPetVari();
	break;
	case "4479":
		$log=$objeto->resTermMulFall();
	break;
	case "4358":
		$log=$objeto->liqCredCost();
	break;
	case "4319":
		$log=$objeto->solInsEmbInmu();
	break;
	case "4527":
		$log=$objeto->consDesfNotiOtrRes();
	break;
	case "4420":
		$log=$objeto->resSuspProc();
	break;
	case "4427":
		$log=$objeto->notCorrCertOtrRes();
	break;
	case "4331":
		$log=$objeto->resEmbInmu();
	break;
	case "4344":
		$log=$objeto->oficRespDerPeti();
	break;
	case "3140":
		$log=$objeto->solInsEmba();
	break;
}
*/
//$log=$objeto->persuasivo();;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
//Traemos lo valores de la fila:
$data = $button->getCurrentRecord();
$params["ChequeoId"]=$data["ChequeoId"];
$params["radicado"] = $data["Radicado"];
$params["oficioId"] = $data["OficioId"];
$params["procesoId"] = $data["ProcesoId"];



$IdValue = $params["oficioId"]; 
// Sanitizar el valor para evitar inyecciones SQL
$IdValue = addslashes($IdValue);
$consulta=DB::Query("SELECT * FROM Oficios where OficioId=".$IdValue);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
				{
					$archivo=$date["Archivo"];
        }
if (strpos($archivo, '<') === 0) {
	if (isset($params["radicado"]) && !empty($params["radicado"])) {
    // La variable está llena
		    ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - INICIO
    // URL del servicio web ASMX
    $url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';
		//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';
    // Datos que deseas enviar en la solicitud POST
    $data = array(
        'Codigo' => $params["radicado"],
        'ConvertirAPDF' => 'TRUE',
        //'Despacho' => 'DE640',
        //'Codificador' => '4883',
        'Contrasena' => '448B8890'
        // ... Agrega más parámetros según sea necesario
    );

    // Convertir los datos a formato de cadena
    $postData = http_build_query($data);

    // Configurar opciones de cURL
    $options = array(
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $postData,
    );

    // Inicializar cURL y configurar opciones
    $curl = curl_init();
    curl_setopt_array($curl, $options);


    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    // Realizar la solicitud cURL y obtener la respuesta
    $response = curl_exec($curl);
    // Verificar errores
    if (curl_errno($curl)) {
        echo 'Error al realizar la solicitud: ' . curl_error($curl);
    }
		$result["total"]=$response;
    // Cerrar la sesión cURL
    curl_close($curl);
}
else{
    $objeto= new plantillas($params["procesoId"],$params["oficioId"],'','','');
		$archivoFinal=$objeto->html($archivo);
	  $result["resultado"]=$archivoFinal;
}
}
else{
    ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - INICIO
    // URL del servicio web ASMX
    $url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';
		//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';
    // Datos que deseas enviar en la solicitud POST
    $data = array(
        'Codigo' => $params["radicado"],
        'ConvertirAPDF' => 'TRUE',
        //'Despacho' => 'DE640',
        //'Codificador' => '4883',
        'Contrasena' => '448B8890'
        // ... Agrega más parámetros según sea necesario
    );

    // Convertir los datos a formato de cadena
    $postData = http_build_query($data);

    // Configurar opciones de cURL
    $options = array(
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $postData,
    );

    // Inicializar cURL y configurar opciones
    $curl = curl_init();
    curl_setopt_array($curl, $options);


    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    // Realizar la solicitud cURL y obtener la respuesta
    $response = curl_exec($curl);
    // Verificar errores
    if (curl_errno($curl)) {
        echo 'Error al realizar la solicitud: ' . curl_error($curl);
    }
		$result["total"]=$response;
    // Cerrar la sesión cURL
    curl_close($curl);
}
		//$params["URL"]=$response;
		//echo $response;
		//var_dump($response);
    // Imprimir la respuesta del servicio web
    //echo $response;
    ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - FIN// Put your code here.
//$result["txt"] = $params["txt"]." world!";
/*
include_once (getabspath("libs/mPDF/example.php"));
$objeto2=new pdf();
$objeto2->generar();
*/

//echo '<iframe src="https://sigobwebcsj.ramajudicial.gov.co/cache/APICorrespondencia/43e8f2b9-2e09-48e5-a524-8ef998ce5469-f.pdf" style="width:600px; height:500px;" frameborder="0"></iframe>'

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Liquidar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/calcIntereses.php"));
include_once (getabspath("classes/acuerdoPago.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
//global $pageObject;
//echo "Valor del Proceso: ".$params["ProcesoId"];
//$data = $pageObject->getMasterRecord(); //deberia devolver la data de de la tabla master, pero devuelve null como si no fuera tabla master y si lo es
//$data = $ajax->getCurrentRecord();
//$result["record"] = $data;
//print_r($data);
//$recalcular->CalcularAcuerdo($params["fechaInicial"]);
$recalcular->Calcular($params["fechaInicial"],0,0);
//$recalcular->Calcular();
//$obligacionInicial=$recalcular->obligacionInicial;
$obligacionInicial=$recalcular->obligacionSaldo;
$costas=$recalcular->costas;
$costSumInt=$recalcular->getInterSumCost();
$result["total"]=$costSumInt;
$acuerdoPago = new AcuerdoPago($params["ProcesoId"],$params["noCuotas"],$params["fechaInicial"],$params["abono"],$params["periodo"],$obligacionInicial,$costSumInt,$costas);
$acuerdoPago->calcularAcuerdo();
//echo "Valor InteresesObligacion fuera de la clase: ".$result["total"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Imprimir($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Generar_Acuerdo_de_Pago($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/acuerdoPago.php"));
include_once (getabspath("classes/actuacionAction.php"));
$response=DB::Query("SELECT count(*) countLiqui FROM Liquidaciones where ProcesoId=".$params["ProcesoId"]);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$countLiqui=$date["countLiqui"];
				}
//echo "Value".$countLiqui;
if($countLiqui>0){
	$response=DB::Query("SELECT top 1 * FROM [LiquidacionesHistorico] where ProcesoId=".$params["ProcesoId"]." order by LiquidacionHistoricoId desc");
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$fechaCuota1=$date["FechaLiquidacion"];
				}
$fecha_objeto=new DateTime(now());
$fecha_objeto2=new DateTime($fechaCuota1);
$fCommp=$fecha_objeto->modify('first day of this month');
$fCommp2=$fecha_objeto2->modify('first day of this month');
//echo $fCommp2 ."-".$fCommp;
//exit();
if ($fCommp->format('Y-m-d')==$fCommp2->format('Y-m-d')){
	$response=DB::Query("SELECT count(*) countAcuerdo FROM Acuerdos where ProcesoId=".$params["ProcesoId"]);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$countAcuerdo=$date["countAcuerdo"];
				}
if ($countAcuerdo>0){
	//echo "<script>alert('Actualmente ya se tiene un acuerdo de Pago')</script>";
	//return false;
	$result["Err"]=2;
	//$result["Acuerdo"]=true;
}
else{
	$acuerdoP=new AcuerdoPagoFinal($params["ProcesoId"]);
	$result["Total"]=$acuerdoP->insertAcuerdo();
	//echo "antes del proceso".$result["Total"]."<br>";
	$actuacionId=20;
		$rs2=DB::Exec("INSERT INTO Correspondencias VALUES (".$params["ProcesoId"].",4567,'".now()."',0,NULL,NULL,NULL,NULL,NULL,NULL)");
		if (!$rs2) {
			 echo "Error al ejecutar la consulta de Insert Correspondencia: " . DB::LastError();
			 return false;
		} 
	$response=DB::Query("SELECT ISNULL(EtapaId,0) as EtapaId, ISNULL(EstadoId,0) as EstadoId, ISNULL(MotivoId,0) as MotivoId,(CASE
                               WHEN EstadoId = 6
                                    AND MotivoId = 1
                               THEN 1
                               ELSE 0
                           END) as TermPago FROM Actuaciones WHERE ActuacionId=".$actuacionId);
		//print_r($actuacionId);
	while( $date = $response->fetchAssoc() )
				{
					$etapaId=$date["EtapaId"];
					$estadoId=$date["EstadoId"];
					$motivoId=$date["MotivoId"];
				}
	$oficio=new coreOficios($actuacionId,$params["ProcesoId"],now(),'','','','',$etapaId,$estadoId,$motivoId,0);
				$result["Total"]=$oficio->process();
				//echo "despues del CoreOficios".$result["Total"]."<br>";
				if ($result["Total"]){
					//echo '<script>alert("Response True")</script>';
				}
				else{
					echo '<script>alert("Response false, no se ejecuto CoreOficios")</script>';
					return false;
				}
}
}
else{
		$result["Err"]=1;
}
}
else{
	$result["Err"]=3;
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button5($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$result["ChequeoId"]=$data["ChequeoId"];
/////////////new//////////////////
// Put your code here.

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button6($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
echo '
<button id="btnAbrirModal">Abrir Modal</button>
<div id="miModal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" id="btnCerrarModal">&times;</span>
            <p>Contenido del modal...</p>
        </div>
    </div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var btnAbrirModal = document.getElementById("btnAbrirModal");
    var miModal = document.getElementById("miModal");
    var btnCerrarModal = document.getElementById("btnCerrarModal");

    // Abrir modal al hacer clic en el botón
    btnAbrirModal.addEventListener("click", function() {
        miModal.style.display = "block";
    });

    // Cerrar modal al hacer clic en la "x"
    btnCerrarModal.addEventListener("click", function() {
        miModal.style.display = "none";
    });

    // Cerrar modal al hacer clic fuera del contenido
    window.addEventListener("click", function(event) {
        if (event.target == miModal) {
            miModal.style.display = "none";
        }
    });
});</script>
'
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button7($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$result["ProcesoId"]=$data["ProcesoId"];
/////////////new//////////////////
// Put your code here.;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button8($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
$result["BeforePath"]=$_SESSION["BeforePath"];
//$result["procesoId"]=$params["ProcesoId"];
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new plantillaCaratulas();
$log=$objeto->caratulaProceso($params["ProcesoId"],4561);

//$rutaArchivoWord = 'C:\Projects\Proyecto_GCC\output\templates_GCC\carProceso1027977.docx';

// Ruta de salida para el archivo PDF
//$rutaArchivoPDF = 'C:\Projects\Proyecto_GCC\output\templates_GCC\carProceso1027977.docx';

//"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf carProceso1027977.docx

// Comando unoconv para la conversión
$comando = '"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf --outdir "templates_GCC\caratulas" "templates_GCC\carProceso'.$params["ProcesoId"].'.docx"';
//chdir("C:\Projects\Proyecto_GCC\output\templates_GCC") ;
//$directorioActual = getcwd();//mostrar directorio donde se ejecuta el comando
//echo "Directorio Actual".$directorioActual;
// Ejecutar el comando
$resultado = shell_exec($comando);
/*
if ($resultado === null) {
    echo "La conversión fue exitosa. PDF creado en: $rutaArchivoPDF";
} else {
    echo "Error en la conversión: $resultado";
}
*/;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button9($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
//print_r($data);
$params["ChequeoId"]=$data["ChequeoId"];
$result["ChequeoId"]=$data["ChequeoId"];
$result["BeforePath"]=$_SESSION['BeforePath'];
//echo $params["ChequeoId"];
include_once (getabspath("plantillaGCC.php"));
//$result["procesoId"]=$params["ProcesoId"];
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new plantillaCaratulas();
$log=$objeto->caratulaChequeo($params["ChequeoId"]);

//$rutaArchivoWord = 'C:\Projects\Proyecto_GCC\output\templates_GCC\carProceso1027977.docx';

// Ruta de salida para el archivo PDF
//$rutaArchivoPDF = 'C:\Projects\Proyecto_GCC\output\templates_GCC\carProceso1027977.docx';

//"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf carProceso1027977.docx

// Comando unoconv para la conversión
$comando = '"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf --outdir "templates_GCC\caratulas" "templates_GCC\carChequeo'.$params["ChequeoId"].'.docx"';
//chdir("C:\Projects\Proyecto_GCC\output\templates_GCC") ;
//$directorioActual = getcwd();//mostrar directorio donde se ejecuta el comando
//echo "Directorio Actual".$directorioActual;
// Ejecutar el comando
$resultado = shell_exec($comando);
/*
if ($resultado === null) {
    echo "La conversión fue exitosa. PDF creado en: $rutaArchivoPDF";
} else {
    echo "Error en la conversión: $resultado";
}
*/;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button10($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new diccionario;
$objeto->process(1,1,1,1,1);
$dic=$objeto->getVariables();
//print_r($dic);
foreach($dic as $param=>$date){
$result["txt"][]=$param;
//echo $param."<br>";
}
/*
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular();
$result["total"]=$recalcular->getSuma();
*/
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_ConceptoAbogado($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//echo "Valor del proceso: ".$params["ProcesoId"]."<br>";
$procesoId=intval($params["ProcesoId"]);
//var_dump($procesoId);
$consulta=DB::Query("SELECT * FROM Procesos where ProcesoId=".$procesoId);
while( $date = $consulta->fetchAssoc() )
		{
            $result["conceptoAbogado"]=$date["ConceptoAbogado"];
    }
//echo $result["conceptoAbogado"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_CierreMes($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//print_r($params);
//exit();
include_once (getabspath("classes/calcIntereses.php"));
ini_set('max_execution_time', 0); //quitar el timeout de ejecucion de script
$consulta=DB::Query("SELECT Cierre FROM Empresas WHERE EmpresaId = 1");
while($date=$consulta->fetchAssoc()){
    $fechaCierre=$date["Cierre"];
}
// Convertimos la cadena de fecha a un objeto DateTime
$fechaObj= new DateTime($fechaCierre);
$fechaCierre=$fechaObj->format('Y-m-d');
// Para reemplazar DATEADD(day, 1, fecha)
//1. Se Obtienen las fechas a trabajar.
$fechaObj->modify('+1 day');
$fechaDesde=$fechaObj->format('Y-m-d');
$fechaHasta=$fechaObj->format('Y-m-t');
$anoActual=$fechaObj->format('Y');
$mesActual=$fechaObj->format('m');
//echo "values: ".$fechaCierre.",".$fechaDesde.",".$fechaHasta;
//exit();
//echo "Fecha Hasta".$fechaHasta;
//exit();
//1.1 Se obtienen los procesos a calcular los intereses.
DB::Exec("BEGIN TRANSACTION;");
$consulta=DB::Query("SELECT TOP 100 Procesos.ProcesoId, '".$fechaHasta."' AS Fecha, 10000 AS Intereses, Procesos.SeccionalId, 1 AS Liquidacion
FROM Procesos
INNER JOIN
CarteraTipos
ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
WHERE( Procesos.Acuerdo IS NULL OR 
NOT Procesos.Incumplimiento IS NULL
) AND 
((Procesos.EstadoId <> 6)) AND 
((Procesos.EstadoId <> 7)) AND 
--(Procesos.EtapaId = 2) AND 
(Procesos.Fecha <= '".$fechaHasta."') AND 
--(dbo.Intereses_GetBy_ProcesoId( Procesos.ProcesoId, @Hasta ) > 0) AND 
(CarteraTipos.Prescrita = 0)
AND DATEADD(day, 1, ISNULL(Plazo, Ejecutoria)) <= '".$fechaHasta."'");
while($date=$consulta->fetchAssoc()){
    //1.2 Se calculan los intereses de cada uno de los procesos
    $recalcular=new reliquidacion($date["ProcesoId"]);
    $valueIntereses=$recalcular->calInteresesCierre($anoActual,$mesActual,$fechaDesde,$fechaHasta);
    //$procesosId[$date["ProcesoId"]]=$valueIntereses;
    $fechaHasta=strval($fechaHasta);
    //1.3 Se insertan los intereses calculados en la tabla Intereses.
    $consulta2=DB::Exec("INSERT INTO Intereses( ProcesoId, Fecha, Intereses, SeccionalId, Liquidacion ) values (".$date["ProcesoId"].",'".$fechaHasta."',".$valueIntereses.",".$date["SeccionalId"].",1)");
if ($consulta2) {
    //echo "La insercion de Intereses se realizó correctamente.";
}
else {
    DB::exec("ROLLBACK TRANSACTION;");
    $error="Error en la insercion de Intereses: " . DB::LastError();
		$result["Error"]=$error;
    }
} 
    //1.4 Se eliminan los intereses que sean igual a 0.
    $consulta=DB::Exec("DELETE FROM Intereses WHERE Fecha = '".$fechaHasta."' and Intereses = 0 and Liquidacion=1");
    if ($consulta2) {
        //echo "Se eliminan los intereses que sean igual a 0 de la fecha cierre.";
        //2. Se Generan los reportes de Movimientos.
        $consulta=DB::Exec("dbo.Empresas_Cerrar_Reportes '".$fechaHasta."'");
        if ($consulta){
            //echo "El SP dbo.Empresas_Cerrar_Reportes se ejecuto correctamente";
            //3 Se realiza el update de los intereses a cada Proceso en la tabla Proceso.
            $consulta2=DB::Exec("UPDATE Procesos
            SET Liquidacion = Intereses.Fecha, Intereses = Procesos.Intereses + Intereses.Intereses, InteresesInicial = Procesos.InteresesInicial + Intereses.Intereses
            FROM Procesos
            INNER JOIN
            Intereses
            ON Procesos.ProcesoId = Intereses.ProcesoId
            WHERE(Intereses.Fecha = '".$fechaHasta."') AND 
            (Intereses.Liquidacion = 1) AND 
            (Intereses.Intereses > 0)");
            if ($consulta2) {
                //echo "La actualizacion de los intereses se realizo correctamente en todos los procesos.";
                //4. Genera los Historicos 
                $consulta=DB::Exec("INSERT INTO Historicos
                (Hasta, 
                ProcesoId, 
                ConceptoId, 
                Numero, 
                Fecha, 
                Ejecutoria, 
                Notificacion, 
                Sancionado, 
                SancionadoTipoDocumento, 
                SancionadoDocumento, 
                Obligacion, 
                Costas, 
                Intereses, 
                Saldo, 
                CarteraTipoId, 
                SeccionalId, 
                Recaudo, 
                EstadoId, 
                Prescripcion, 
                Acuerdo, 
                Incumplimiento, 
                Persuasivo, AbogadoId
                )SELECT DISTINCT TOP 100
                '".$fechaHasta."' AS Hasta, 
                ProcesoId, 
                ConceptoId, 
                Numero, 
                Fecha, 
                Ejecutoria, 
                Notificacion, 
                Sancionados.Sancionado, 
                TiposDocumentos.TipoDocumento, 
                Sancionados.Documento, 
                Obligacion, 
                Costas, 
                Intereses, 
                (Obligacion+Costas+Intereses) as Saldo, 
                CarteraTipoId, 
                SeccionalId, 
                Recaudo,
                CASE
                WHEN EstadoId = 6
                THEN 2
                ELSE EstadoId
                END, 
                isnull(Dias,0), 
                Acuerdo, 
                Incumplimiento, 
                Persuasivo, AbogadoId
                FROM Procesos
                INNER JOIN Sancionados ON Procesos.SancionadoId=Sancionados.SancionadoId
                INNER JOIN TiposDocumentos ON TiposDocumentos.TipoDocumentoId=Sancionados.TipoDocumentoId
                WHERE(Fecha <= '".$fechaHasta."')
                AND ((EstadoId <> 6)
                OR (EstadoId = 6
                AND Terminacion > '".$fechaHasta."'));");
                if ($consulta) {
                    //echo "Se insertan los historicos correctamente.";
                    //5. Genera los indicadores
                $consulta=DB::Exec("dbo.Empresas_Cerrar_Indicadores '".$fechaHasta."'");
                if ($consulta){
                    //echo "El SP dbo.Empresas_Cerrar_Indicadores se ejecuto correctamente";
                    //-- 7. Cierra el mes
                    $consulta=DB::Exec("UPDATE Empresas
                    SET Cierre = '".$fechaHasta."'
                    WHERE EmpresaId = 1");
                    if ($consulta){
                        //echo "Se actualiza el cierre";
                        //--9. Empresas_Cerrar_Deterioro
                        $consulta=DB::Exec("dbo.Empresas_Cerrar_Deterioro");
                        if ($consulta){
                            //echo "El SP dbo.Empresas_Cerrar_Deterioro se ejecuto correctamente";
															DB::Exec("COMMIT TRANSACTION;");
															$result["OK"]=1;
                        }
                        else{
															DB::exec("ROLLBACK TRANSACTION;");
                            $error="El SP dbo.Empresas_Cerrar_Deterioro no se pudo ejecutar debido a: ".DB::LastError();
															$result["Error"]=$error;
                        }
                    }
                    else{
													DB::exec("ROLLBACK TRANSACTION;");
                        $error="No se actualizo el cierre debido a: ".DB::LastError();
													$result["Error"]=$error;
                    }
                }
                else{
                    DB::exec("ROLLBACK TRANSACTION;");
                    $error= "El SP dbo.Empresas_Cerrar_Indicadores no se pudo ejecutar debido a: ".DB::LastError();
										 $result["Error"]=$error;
                }
                } 
                else {
                    DB::exec("ROLLBACK TRANSACTION;");
                    $error= "Error al ejecutar al hacer el insert en Historicos: " . DB::LastError();
										 $result["Error"]=$error;
                }
            } 
            else {
                DB::exec("ROLLBACK TRANSACTION;");
                $error= "Error al hacer el update en procesos: " . DB::LastError();
								 $result["Error"]=$error;
            }
        }
        else{
            DB::exec("ROLLBACK TRANSACTION;");
            $error="El SP dbo.Empresas_Cerrar_Reportes no se pudo ejecutar debido a: ".DB::LastError();
						 $result["Error"]=$error;
        }
    } 
    else {
        DB::exec("ROLLBACK TRANSACTION;");
        $error="Error al borrar los Intereses: " . DB::LastError();
				$result["Error"]=$error;
    };
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_ImprimirOfDev($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_ImprimirOfChe($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	 include_once (getabspath("plantillaGCC.php"));
//SE OBTIENEN LA VARIABLES PARA CONUSMIR LOS METODOS DE LA API SIGOBIUS
$consulta = DB::Query("SELECT Despacho,Codificador FROM Abogados where AbogadoId=(SELECT AbogadoId from Chequeos where ChequeoId=".$params["ChequeoId"].")");
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            $despacho=$date["Despacho"];
            $codificador=$date["Codificador"];
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        };
$consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Chequeos C ON C.DespachoId = D.DespachoId
        WHERE ChequeoId =".$params["ChequeoId"]."");
        while( $date = $consulta->fetchAssoc() )
				{
            $despachoJuez=$date["DespachoJuez"];
        }
$consulta=DB::Query("SELECT * FROM Oficios WHERE OficioId=".$params["OficioId"]."");
        while( $date = $consulta->fetchAssoc() )
				{
            $asunto=$date["Oficio"];
        }
//CONSUMINOS EL METODO DE NuevaCorrespondencia de la API SOAP
//la url de la conexion a Sigob
$url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//Parametro a enviar para consumir el metodo
$data = array(
    'Despacho' => 'DE637',
    'Codificador' => '6188',
    'SoloEditorExterno' => '1',
    'Contrasena' => '448B8890'
    // ... Agrega más parámetros según sea necesario
);

// Convertir los datos a formato de cadena
$postData = http_build_query($data);

// Configurar opciones de cURL
$options = array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $postData,
);

// Inicializar cURL y configurar opciones
$curl = curl_init();
curl_setopt_array($curl, $options);

//NO VALIDAR SI REQUIERE SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Realizar la solicitud cURL y obtener la respuesta
$response2 = curl_exec($curl);
// Verificar errores
if (curl_errno($curl)) {
    echo 'Error al realizar la solicitud: ' . curl_error($curl);
}else{
// Imprimir la respuesta del servicio web
//echo "<br>Valor del metodo NuevaCorrespondencia: ".$response2."<br>";
$xml = new SimpleXMLElement($response2);
$radicadoF=strval($xml[0]);

$resultado["response"]=DB::Exec("UPDATE ChequeosOficios set Radicado='".$radicadoF."' where ChequeoOficioId=".$params['ChequeoOficioId']."");
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
$result["total"]=$response2;
////////
//CONSUMINOS EL METODO DE ActualizarCorrespondencia de la API SOAP
$curl = curl_init();
//SE LLAMA LA FUNCION LA CUAL TOMA LA PLANTILLA Y REEMPLAZA SUS VARIABLES, CREANDO UN NUEVO .DOCX
 $objeto=new plantillaDev($params["ChequeoId"],$params["OficioId"],$params["obligacionLetras"],$params["obligacionTotalLetras"]);
 $objeto->funcGlobal();
//$rutaArchivo = 'Plantilla_1097.docx';
$rutaArchivo = 'templates_GCC/Archivo_'.$params["ChequeoId"].'_'.$params["OficioId"].'.docx';
// Leer el contenido del archivo como un arreglo de bytes
$bytesDocumento = file_get_contents($rutaArchivo);
$base64 = base64_encode($bytesDocumento);
//echo $base64;
//$radicado='DEAJGCC23-12554';
//echo "<br>valor del string quemando ekl radicado DEAJ-XXXX: ".var_dump($radicado);
//echo $bytesDocumento;
//$bytesDocumento =  unpack("C*", $bytesDocumento);
//$radicado='DEAJGCC23-12547';
//print_r($bytesDocumento);

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <ActualizarCorrespondencia xmlns="http://tempuri.org/">
      <CodigoRegistro>'.$radicadoF.'</CodigoRegistro>
      <Asunto>'.$asunto.'</Asunto>
      <Tipo>2</Tipo>
      <GradoReserva>0</GradoReserva>
      <Prioridad>0</Prioridad>
      <MedioEnvio>0</MedioEnvio>
      <EsperaRespuesta>N</EsperaRespuesta>
      <FechaEstimadaRespuesta>'.now().'</FechaEstimadaRespuesta>
      <ResultadoGestion>-1</ResultadoGestion>
      <Objetivos>11</Objetivos>
      <FormatoDocumento>1</FormatoDocumento>
      <Documento>'.$base64.'</Documento>
      <NombreDocumento>Prueba wsAPICorrespondencia.docx</NombreDocumento>
      <DocumentoTexto>Texto sin formato del documento</DocumentoTexto>
      <Firmante>'.$despacho.'</Firmante>
      <Estado>0</Estado>
      <DespachoDestino></DespachoDestino>
      <Vocativo>-1</Vocativo>
      <Apellido>'.$despachoJuez.'</Apellido>
      <Nombre>'.$despachoJuez.'</Nombre>
      <NumeroDocumento>12345</NumeroDocumento>
      <Sexo>0</Sexo>
      <FechaNacimiento>1977/01/01</FechaNacimiento>
      <Institucion>-1</Institucion>
      <Cargo>-1</Cargo>
      <Departamento>-1</Departamento>
      <Telefono>09811111231</Telefono>
      <CorreoElectronico>alelamonaca@gmail.com</CorreoElectronico>
      <Calle>Mi calle</Calle>
      <Ciudad>Asunción</Ciudad>
      <ProvinciaDepartamento>Central</ProvinciaDepartamento>
      <Pais>Paraguay</Pais>
      <TipoDireccion>1</TipoDireccion>
      <CodigoRegistroPrecedente></CodigoRegistroPrecedente>
      <EsRespuesta>0</EsRespuesta>
      <Contrasena>448B8890</Contrasena>
    </ActualizarCorrespondencia>
  </soap12:Body>
</soap12:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml',
    'Cookie: ASP.NET_SessionId=4uvpkyerhy21mcwghvyqfuw0'
  ),
));

//NO VERIFICAR CERTICADO SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($curl);
$result["response"]=$response;
if ($response === false) {
    echo 'Error en la solicitud cURL: ' . curl_error($curl);
} else {
    echo 'Respuesta de la API Metodo Actualizar Correspondencia: ' . $response;
}
//echo $response;
 //$objeto=new plantillas($params["ProcesoId"]);
 //echo "Value ".$params["OficioId"];
 //$objeto=new plantillaDev($params["ChequeoId"],$params["OficioId"],$params["obligacionLetras"],$params["obligacionTotalLetras"]);
 //$objeto->funcGlobal();
}
curl_close($curl);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_diccionarioDevoluciones($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new diccionarioChequeo;
$objeto->process(1,1,1,1,1);
$dic=$objeto->getVariables();
//print_r($dic);
foreach($dic as $param=>$date){
$result["txt"][]=$param;
//echo $param."<br>";
}
/*
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular();
$result["total"]=$recalcular->getSuma();
*/;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button11($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button12($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";

//exec [dbo].[Procesos_Reasignar] @UserName=N'cthomasb',@AbogadoId=3237,@SeccionalId=1030,@CarteraTipoId=1

global $dal;
while ( $data = $button->getNextSelectedRecord() ) {
  // set ReportsTo field to 'Bob Smith'
		$result["response"]=DB::Exec("UPDATE Procesos set AbogadoId=".$params["abogaId"]."where ProcesoId =".$data["ProcesoId"]);
		//echo "valor del response:".$result["response"].var_dump($result["response"]);

		if ($result["response"]) {
		$result["response"]=DB::Exec("INSERT INTO Reasignaciones select GETDATE(),ProcesoId,AbogadoId from Procesos where ProcesoId =".$data["ProcesoId"]);
			if($result["response"])
			{
				//return true;
			}
			else{
				 echo "Error al ejecutar la consulta insert: " . DB::LastError();
			 return false;
			}
	  }
    else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta update: " . DB::LastError();
			 return false;

			}
		
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_maxTime($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";

if ($params["txt"]){
	$rs=DB::Query("declare @p3 int
									set @p3=0
									declare @p4 nvarchar(max)
									set @p4=N''
									exec [dbo].[Procesos_Autorizar] @ProcesoId=".$params["ProcesoId"].",@AutorizadoPor='".$_SESSION["UserData"]["username"]."',@Err_num=@p3 output,@Err_msg=@p4 output
									select @p3, @p4 Errmsg");
	while( $data = $rs->fetchAssoc() )
	{
		$Errmsg=$data['Errmsg'];
		//echo "Valor del error: ".$Errmsg;
		//echo "Valor del Numero error: ".$Errnum;
	}
	if ($Errmsg){
	echo " <script>if (confirm('Se encontro un error al crear el Proceso: ".$Errmsg."')) {
            location.reload(); // Recargar la página si el usuario hace clic en Aceptar
        }</script>";
	//$result["rs"]=false;
	}
	else{
	//echo "Entroooooo";
	$result["rs"]=true;
	}
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Resumen_Mensual1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
$reportDate=$params["reportDate"].'-01';
$objeto=new certificadoMensual($reportDate,$_SESSION["UserNameF"]);
$objeto->reporteMensual();
$comando = '"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf --outdir "templates_GCC\caratulas" "templates_GCC\Resumen_Mensual_Final.docx"';
//chdir("C:\Projects\Proyecto_GCC\output\templates_GCC") ;
//$directorioActual = getcwd();//mostrar directorio donde se ejecuta el comando
//echo "Directorio Actual".$directorioActual;
// Ejecutar el comando
$resultado = shell_exec($comando);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_fichaTecnica($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("plantillaGCC.php"));
$data = $button->getCurrentRecord();
$result["ProcesoId"]=$data["ProcesoId"];
$objeto=new fichaTecnica($data["ProcesoId"]);
$objeto->planFichaTecnica();
$comando = '"C:\Program Files\LibreOffice\program\soffice.bin" --convert-to pdf --outdir "templates_GCC\caratulas" "templates_GCC\FichaTecnica_'.$result["ProcesoId"].'.docx"';
//chdir("C:\Projects\Proyecto_GCC\output\templates_GCC") ;
//$directorioActual = getcwd();//mostrar directorio donde se ejecuta el comando
//echo "Directorio Actual".$directorioActual;
// Ejecutar el comando
$resultado = shell_exec($comando);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BDME_Actualiza_Buscar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			// Calcular el primer y último día del mes anterior
$primerDiaDelMesAnterior = date('Y-m-d', strtotime('first day of last month'));
$ultimoDiaDelMesAnterior = date('Y-m-t', strtotime('first day of last month'));

// Obtener los valores de los parámetros
$desde = isset($params["desde"]) ? $params["desde"] : '';
$hasta = isset($params["hasta"]) ? $params["hasta"] : '';

// Si 'desde' está vacío, usar el primer día del mes anterior
if (empty($desde)) {
    $desde = $primerDiaDelMesAnterior;
}

// Si 'hasta' está vacío, usar el último día del mes anterior
if (empty($hasta)) {
    $hasta = $ultimoDiaDelMesAnterior;
}


		// Guardar los valores recibidos en variables de sesión
    $_SESSION['desde'] = $params["desde"];
    $_SESSION['hasta'] = $params["hasta"];
    $_SESSION['sancionado'] = $params["sancionado"];
    $_SESSION['doc_sancionado'] = $params["doc_sancionado"];

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			// Calcular el primer y último día del mes anterior
$primerDiaDelMesAnterior = date('Y-m-01', strtotime('first day of last month'));
$ultimoDiaDelMesAnterior = date('Y-m-t', strtotime('first day of last month'));

// Obtener los valores de los parámetros
$desde = isset($params["Cancelacion_desde"]) ? $params["Cancelacion_desde"] : '';
$hasta = isset($params["Cancelacion_hasta"]) ? $params["Cancelacion_hasta"] : '';

// Si 'desde' está vacío, usar el primer día del mes anterior
if (empty($desde)) {
    $desde = $primerDiaDelMesAnterior;
}

// Si 'hasta' está vacío, usar el último día del mes anterior
if (empty($hasta)) {
    $hasta = $ultimoDiaDelMesAnterior;
}


		// Guardar los valores recibidos en variables de sesión
    $_SESSION['Cancelacion_desde'] = $params["Cancelacion_desde"];
    $_SESSION['Cancelacion_hasta'] = $params["Cancelacion_hasta"];


;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			
		// Guardar los valores recibidos en variables de sesión
    $_SESSION['mesExcluidos'] = $params["mesExcluidos"];
    $_SESSION['sancionadoExcluidos'] = $params["sancionadoExcluidos"];
    $_SESSION['documentoExcluidos'] = $params["documentoExcluidos"];


;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['mesDeudor'] = $params["mesDeudor"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['mesIncumplimiento'] = $params["mesIncumplimiento"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarR($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
		// Guardar los valores recibidos en variables de sesión
    $_SESSION['mes_report_Semestral'] = $params['mes_report_Semestral'];
    $_SESSION['sancionado_report_Semestral'] = $params['sancionado_report_Semestral'];
    $_SESSION['doc_sancionado_report_semestral'] = $params['doc_sancionado_report_semestral'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarRetiros($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		
	$_SESSION['retiros_desde'] = $params['retiros_desde'];
	$_SESSION['retiros_hasta'] = $params['retiros_hasta'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarDeteMes($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		
 	
	$_SESSION['deterioro_mes'] = $params['deterioro_mes'].'-01';

	$username = $_SESSION["UserNameF"];


//DECLARE @Cartera INT = ':session.cateraid';
//DECLARE @Seccional INT =':session.seccionalid';   

		if (isset($params['cartera_id_report']) && $params['cartera_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['cartera_id_report']  = $params['cartera_id_report'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_report']) && $params['seccional_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['seccional_id_report']  = $params['seccional_id_report'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['cartera_id_report'] = $cartera;
$_SESSION['seccional_id_report'] = $seccional;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarAno($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			
	$_SESSION['ano_interes'] = $params['ano_interes'];


$username = $_SESSION["UserNameF"];

		if (isset($params['cartera_id_report']) && $params['cartera_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['cartera_id_report']  = $params['cartera_id_report'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_report']) && $params['seccional_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['seccional_id_report']  = $params['seccional_id_report'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['cartera_id_report'] = $cartera;
$_SESSION['seccional_id_report'] = $seccional;
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarMedidas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
 $_SESSION['medidas_sancionado'] = $params['medidas_sancionado'];
 $_SESSION['medidas_documento'] = $params['medidas_documento'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		//$mes_actual = date('Y-m'); // Obtiene el mes actual en formato 'YYYY-MM'
	$date = new DateTime($params['difire_mes'].'-01'); // Crea un objeto DateTime para el primer día del mes
	$date->modify('last day of this month'); // Modifica la fecha al último día del mes
	$ultimo_dia = $date->format('Y-m-d'); // Formatea la fecha al formato 'YYYY-MM-DD'

	$_SESSION['difire_mes'] = $ultimo_dia;
	$_SESSION['cartera_obligacion'] = $params['cartera_id_report'];
	$_SESSION['seccional_obligacion'] = $params['seccional_id_report'];
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button13($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		
	$_SESSION['privado_lib_sancionadoid']= $params['privado_lib_sancionadoid'];
	$_SESSION['privado_lib_doc_sancionadoid']= $params['privado_lib_doc_sancionadoid'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar5($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		 	 

	// Obtener el año actual
$currentYear = date("Y");


//$_SESSION['recaudo_ano'] = $params['recaudo_ano'];

// Verificar si 'recaudo_ano' está presente en $params
if (isset($params['recaudo_ano'])) {
    $recaudoAno = $params['recaudo_ano'];

    // Validar que el valor sea un número de 4 dígitos y que esté dentro del rango permitido
    if (is_numeric($recaudoAno) && strlen($recaudoAno) == 4 && $recaudoAno >= 2000 && $recaudoAno <= $currentYear) {
        // El valor es un año válido, continúa con el procesamiento
				 $_SESSION['recaudo_ano'] = $params['recaudo_ano'];
        // Aquí puedes colocar el resto de tu lógica
    } else {
        // El valor no es válido, detén el procesamiento
        // Puedes lanzar un error, redirigir o mostrar un mensaje de advertencia
        echo("El valor del año es inválido o ha sido alterado.");
    }
} else {
    // Si no está presente 'recaudo_ano', manejar el error
    //echo("El parámetro 'recaudo_ano' es requerido.");
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Enviar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['select_reportid'] = $params['select_reportid'];
$username = $_SESSION["UserNameF"];


// Definir una función anónima
/*$setSessionValues = function() {
	  // Lógica de la función interna
  $sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['reporte_cateraid'] = $cartera;
$_SESSION['reporte_seccionalid'] = $seccional;
};*/

		if (isset($params['cartera_id_report']) && $params['cartera_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['reporte_cateraid']  = $params['cartera_id_report'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_report']) && $params['seccional_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['reporte_seccionalid']  = $params['seccional_id_report'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['reporte_cateraid'] = $cartera;
$_SESSION['reporte_seccionalid'] = $seccional;
}


;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar6($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		
		
	$_SESSION['transacciones_ano_mes'] = $params['transacciones_ano_mes'].'-01';
	$username = $_SESSION["UserNameF"];

	$sql = "select UserId from UserProfile where UserName = '$username'";
	
	$resultado = CustomQuery($sql);

			// Obtener el valor de reset_date
			if ($data = db_fetch_array($resultado)) {
				 $UserId = $data["UserId"];
			} else {
				 $UserId = null; // Asegurarse de que tenga un valor nulo en caso de error
			}

	$_SESSION['UserId'] = $UserId;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar7($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$_SESSION['presucion_pres_mes'] = $params['presucion_pres_mes'].'-01';

		if (isset($params['presuncion_id_cartera']) && $params['presuncion_id_cartera'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['presuncion_id_cartera']  = $params['presuncion_id_cartera'];
		} else{
			
			//$setSessionValues();
		$sql = "SELECT TOP (1) 
			 [Extent1].[UserId] AS [UserId], 
			 [Extent1].[UserName] AS [UserName], 
			 [Extent1].[HorarioId] AS [HorarioId], 
			 [Extent1].[SeccionalId] AS SeccionalId, 
			 [Extent1].[AbogadoId] AS [AbogadoId], 
			 [Extent1].[Email] AS [Email], 
			 [Extent1].[CarteraTipoId] AS CarteraTipoId, 
			 [Extent1].[Fecha] AS [Fecha], 
			 [Extent1].[Nombre] AS [Nombre]
			 FROM [dbo].[UserProfile] AS [Extent1]
			 WHERE [Extent1].[UserName] = '$username'";

		// Ejecutar la consulta
		$result = DB::Query($sql);

		// Obtener el resultado
		$row = $result->fetchAssoc();
		$cartera = $row['CarteraTipoId'];
		$_SESSION['presuncion_id_cartera'] = $cartera;
		};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar8($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['indicadores_ano'] = $params['indicadores_ano'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar9($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['tablero_control_cartera'] = $params['tablero_control_cartera'];

    // Si el parámetro 'tablero_control_desde' está vacío, calcula el mes anterior
    if (empty($params['tablero_control_desde'])) {
        $currentDate = new DateTime();
        $currentDate->modify('-1 month'); // Resta un mes a la fecha actual
        $defaultValue = $currentDate->format('Y-m'); // Formato YYYY-MM
				 $_SESSION['tablero_control_desdeid'] = $defaultValue.'-01';
    }else{
				$_SESSION['tablero_control_desdeid'] = $params['tablero_control_desde'].'-01';
		 }
		    // Calcula el valor predeterminado para 'tablero_control_hasta'
    if (empty($params['tablero_control_hasta'])) {
        $currentDate = new DateTime();
        //$currentDate->modify('last day of this month'); // Último día del mes actual
        $defaultHasta = $currentDate->format('Y-m-d'); // Formato YYYY-MM-DD
				 $_SESSION['tablero_control_hastaid'] = $defaultHasta;
    }else{
				$date = $params['tablero_gestion_hasta'].'-01';
				// Crear un objeto DateTime a partir de la fecha
				$dateTime = new DateTime($date);

				// Modificar la fecha para que sea el último día del mes
				$dateTime->modify('last day of this month');

				// Convertir el objeto DateTime a formato Y-m-d
				$lastDayOfMonth = $dateTime->format('Y-m-d');

				// Obtener el último día del mes
				$params['tablero_gestion_hasta'] = $lastDayOfMonth;
				$_SESSION['tablero_control_hastaid'] = $params['tablero_gestion_hasta'];
		 }

		


    ;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar10($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['select_reportid'] = $params['select_reportid'];
$username = $_SESSION["UserNameF"];

    //$_SESSION['tablero_control_desdeid'] = $params['tablero_gestion_desde'].'-01';
    //_SESSION['tablero_control_hastaid'] = $params['tablero_gestion_hasta'].'-01';

    // Si el parámetro 'tablero_control_desde' está vacío, calcula el mes anterior
    if (empty($params['tablero_gestion_desde'])) {
        $currentDate = new DateTime();
        $currentDate->modify('-1 month'); // Resta un mes a la fecha actual
        $defaultValue = $currentDate->format('Y-m'); // Formato YYYY-MM
				 $_SESSION['tablero_control_desdeid'] = $defaultValue.'-01';
    } else {

				 $_SESSION['tablero_control_desdeid'] = $params['tablero_gestion_desde'].'-01';
    }

		    // Calcula el valor predeterminado para 'tablero_control_hasta'
    if (empty($params['tablero_gestion_hasta'])) {
        $currentDate = new DateTime();
        //$currentDate->modify('last day of this month'); // Último día del mes actual
        $defaultHasta = $currentDate->format('Y-m-d'); // Formato YYYY-MM-DD
				 $_SESSION['tablero_control_hastaid'] = $defaultHasta;
    } else {
				
				$date = $params['tablero_gestion_hasta'].'-01';
				// Crear un objeto DateTime a partir de la fecha
				$dateTime = new DateTime($date);

				// Modificar la fecha para que sea el último día del mes
				$dateTime->modify('last day of this month');

				// Convertir el objeto DateTime a formato Y-m-d
				$lastDayOfMonth = $dateTime->format('Y-m-d');

				// Obtener el último día del mes
				$params['tablero_gestion_hasta'] = $lastDayOfMonth;
				$_SESSION['tablero_control_hastaid'] = $params['tablero_gestion_hasta'];
    }
		


		if (isset($params['cartera_id_report']) && $params['cartera_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['tablero_control_cartera']  = $params['cartera_id_report'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_report']) && $params['seccional_id_report'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['tablero_control_seccionalid']  = $params['seccional_id_report'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['tablero_control_cartera'] = $cartera;
$_SESSION['tablero_control_seccionalid'] = $seccional;
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar11($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Suponiendo que $params['mesHistorico'] está en formato 'YYYY-MM-DD'
$fecha = $params['mesHistorico'].'-01';

// Crear un objeto DateTime a partir de la fecha
$date = new DateTime($fecha);

// Modificar la fecha para que sea el último día del mes
$date->modify('last day of this month');

// Asignar el resultado en formato 'YYYY-MM-DD' a la variable de sesión
$_SESSION['mesHistorico'] = $date->format('Y-m-d');


$username = $_SESSION["UserNameF"];

$carterasSeleccionadas = $params["selectedCarteras"];

if (!empty($carterasSeleccionadas)) {
    foreach ($carterasSeleccionadas as $index => $carteraId) {
        if ($index < 5) { // Limitar a las primeras 5 carteras
            $_SESSION["cartera" . ($index + 1)] = $carteraId; // Almacenar en variables de sesión
            echo "Cartera seleccionada: " . htmlspecialchars($carteraId) . "<br>";
        }
    }
} else {
    echo "No se seleccionó ninguna cartera.";
}

$seccionalesSeleccionados = $params["selectedSeccionales"];

if (!empty($seccionalesSeleccionados)) {
    foreach ($seccionalesSeleccionados as $index2 => $seccionalId) {
        if ($index2 < 25) { // Limitar a las primeras 5 carteras
            $_SESSION["seccional" . ($index2 + 1)] = $seccionalId; // Almacenar en variables de sesión
            echo "Seccional seleccionado: " . htmlspecialchars($seccionalId) . "<br>";
        }
    }
} else {
    echo "No se seleccionó ninguna Seccional.";
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button14($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar12($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$_SESSION['mes_Acuerdo'] = $params['mes_Acuerdo'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar13($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			// Guardar los valores recibidos en variables de sesión
    $_SESSION['Chequeos_MesId'] = $params["Chequeos_MesId"].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Imprimir1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	     ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - INICIO
    // URL del servicio web ASMX
    $url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';

    // Datos que deseas enviar en la solicitud POST
    $data = array(
        'Codigo' => $params["radicado"],
        'ConvertirAPDF' => 'TRUE',
        //'Despacho' => 'DE640',
        //'Codificador' => '4883',
        'Contrasena' => '448B8890'
        // ... Agrega más parámetros según sea necesario
    );

    // Convertir los datos a formato de cadena
    $postData = http_build_query($data);

    // Configurar opciones de cURL
    $options = array(
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $postData,
    );

    // Inicializar cURL y configurar opciones
    $curl = curl_init();
    curl_setopt_array($curl, $options);


    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    // Realizar la solicitud cURL y obtener la respuesta
    $response = curl_exec($curl);
    // Verificar errores
    if (curl_errno($curl)) {
        echo 'Error al realizar la solicitud: ' . curl_error($curl);
    }
		$result["total"]=$response;
    // Cerrar la sesión cURL
    curl_close($curl);
		//$params["URL"]=$response;
		//echo $response;
		//var_dump($response);
    // Imprimir la respuesta del servicio web
    //echo $response;
    ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - FIN// Put your code here.
//$result["txt"] = $params["txt"]." world!";
/*
include_once (getabspath("libs/mPDF/example.php"));
$objeto2=new pdf();
$objeto2->generar();
*/

//echo '<iframe src="https://sigobwebcsj.ramajudicial.gov.co/cache/APICorrespondencia/43e8f2b9-2e09-48e5-a524-8ef998ce5469-f.pdf" style="width:600px; height:500px;" frameborder="0"></iframe>'



;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar14($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			// Guardar los valores recibidos en variables de sesión
    $_SESSION['Clasificaciones_MesId'] = $params["Clasificaciones_MesId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar15($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.

	 $_SESSION['corporacion_mes'] = $params['corporacion_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar16($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

		// Guardar los valores recibidos en variables de sesión
    $_SESSION['Mandamientos_MesId'] = $params["Mandamientos_MesId"].'-01';
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar17($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
    $_SESSION['Prescripciones_Autom_tica_Mes'] = $params["Prescripciones_Autom_tica_Mes"].'-01';
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar18($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
		// Guardar los valores recibidos en variables de sesión
    $_SESSION['Remanentes_MesId'] = $params["Remanentes_MesId"].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Consultar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
	$_SESSION['doc_sancionado_consulta'] = $params['doc_sancionado_consulta'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Generar_Desprendible($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$beforePath = $_SESSION['BeforePath'];

// Generar el hipervínculo en HTML
$value = $beforePath.'/consulta_p_blica_generaci_n_desprendible_list.php';
$params["txt"] = $value;
$result["txt"] = $params["txt"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Descargar_Aviso($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Consultar1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$_SESSION['doc_sancionado_desprendible'] = $params['doc_sancionado_desprendible'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Consulta_de_Avisos_Notificaci_n($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$beforePath = $_SESSION['BeforePath'];

// Generar el hipervínculo en HTML
$value = $beforePath.'/consulta_p_blica_list.php';
$params["txt"] = $value;
$result["txt"] = $params["txt"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Descargar_Desprendible($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar19($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

	$username = $_SESSION["UserNameF"];


//DECLARE @Cartera INT = ':session.cateraid';
//DECLARE @Seccional INT =':session.seccionalid';   

		if (isset($params['cartera_id_report_noti']) && $params['cartera_id_report_noti'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['cartera_id_report_noti']  = $params['cartera_id_report_noti'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_report_noti']) && $params['seccional_id_report_noti'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['seccional_id_report_noti']  = $params['seccional_id_report_noti'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['cartera_id_report_noti'] = $cartera;
$_SESSION['seccional_id_report_noti'] = $seccional;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Reiniciar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";

			unset($_SESSION['cartera1']);
			unset($_SESSION['cartera2']);
			unset($_SESSION['cartera3']); 
			unset($_SESSION['cartera4']);
			unset($_SESSION['cartera5']);
			
			unset($_SESSION['seccional1']);
			unset($_SESSION['seccional2']);
			unset($_SESSION['seccional3']); 
			unset($_SESSION['seccional4']);
			unset($_SESSION['seccional5']);
			unset($_SESSION['seccional6']);
			unset($_SESSION['seccional7']);
			unset($_SESSION['seccional8']); 
			unset($_SESSION['seccional9']);
			unset($_SESSION['seccional10']);
			unset($_SESSION['seccional11']);
			unset($_SESSION['seccional12']);
			unset($_SESSION['seccional13']); 
			unset($_SESSION['seccional14']);
			unset($_SESSION['seccional15']);
			unset($_SESSION['seccional16']);
			unset($_SESSION['seccional17']);
			unset($_SESSION['seccional18']); 
			unset($_SESSION['seccional19']);
			unset($_SESSION['seccional20']);
			unset($_SESSION['seccional21']);
			unset($_SESSION['seccional22']);
			unset($_SESSION['seccional23']); 
			unset($_SESSION['seccional24']);
			unset($_SESSION['seccional25']);
			
			;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button15($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$U_user = $_SESSION["UserNameF"];

// Sanitizar el valor para evitar inyecciones SQL
$IdValue = addslashes($U_user);

// Crear y ejecutar la consulta SQL
$sql = "select UserId from UserProfile where UserName = $IdValue";

// Ejecutar la consulta
$rs = DB::Query($sql);

// Verificar que $result es un objeto de tipo QueryResult
if ($rs instanceof QueryResult) {
    // Obtener el resultado como un array asociativo
    $row = $rs->fetchAssoc(); // Usa fetchAssoc para obtener el primer resultado

    // Verificar si se obtuvo un resultado
    if ($row) {
        $totalProcesos = $row['UserId']; // Acceder al valor
				 $_SESSION['consolidado_UserId'] = $totalProcesos;
		}
}
// Put your code here.
 $_SESSION['consolidado_cartera'] = $params['consolidado_cartera'];
 $_SESSION['consolidado_mes'] = $params['consolidado_mes'].'-01';

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Imprimir2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar20($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$_SESSION['movimiento_mes'] = $params['movimiento_mes'].'-01';
	$_SESSION['movimiento_tipo_id'] = $params['movimiento_tipo_id'];
	
	$username = $_SESSION["UserNameF"];


//DECLARE @Cartera INT = ':session.cateraid';
//DECLARE @Seccional INT =':session.seccionalid';   

		if (isset($params['cartera_id_movimiento']) && $params['cartera_id_movimiento'] != '0') {
    // Guardar el valor en una variable de sesión
			$_SESSION['cartera_id_movimiento']  = $params['cartera_id_movimiento'];
		}

// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0
if (isset($params['seccional_id_movimiento']) && $params['seccional_id_movimiento'] != '0') {
    // Guardar el valor en una variable de sesión
    $_SESSION['seccional_id_movimiento']  = $params['seccional_id_movimiento'];
		// Verificar si el parámetro 'seccional_id_report' está definido y si su valor es diferente de 0

} else{
	
	//$setSessionValues();
$sql = "SELECT TOP (1) 
    [Extent1].[UserId] AS [UserId], 
    [Extent1].[UserName] AS [UserName], 
    [Extent1].[HorarioId] AS [HorarioId], 
    [Extent1].[SeccionalId] AS SeccionalId, 
    [Extent1].[AbogadoId] AS [AbogadoId], 
    [Extent1].[Email] AS [Email], 
    [Extent1].[CarteraTipoId] AS CarteraTipoId, 
    [Extent1].[Fecha] AS [Fecha], 
    [Extent1].[Nombre] AS [Nombre]
    FROM [dbo].[UserProfile] AS [Extent1]
    WHERE [Extent1].[UserName] = '$username'";

// Ejecutar la consulta
$result = DB::Query($sql);

// Obtener el resultado
$row = $result->fetchAssoc();
$cartera = $row['CarteraTipoId'];
$seccional = $row['SeccionalId'];
$_SESSION['cartera_id_movimiento'] = $cartera;
$_SESSION['seccional_id_movimiento'] = $seccional;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_reiniciar1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";

unset($_SESSION['movimiento_mes']);

unset($_SESSION['movimiento_tipo_id']);

unset($_SESSION['cartera_id_movimiento']);

unset($_SESSION['seccional_id_movimiento']);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Imprimir3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button16($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
	
	$_SESSION['ejecutivo_cartera'] = $params['ejecutivo_cartera'];
	$_SESSION['ejecutivo_desde'] = $params['ejecutivo_desde'].'-01';
	$_SESSION['ejecutivo_hasta'] = $params['ejecutivo_hasta'].'-01';
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_imprimir4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar21($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$_SESSION['cumplimiento_mes'] = $params['cumplimiento_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_imprimir5($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar22($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['indicadores_busqueda_mes'] = $params['indicadores_busqueda_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_imprimir6($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar23($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

$fechaactual = date("Y-m-d");
$fecha = $params['indicadores_recaudo_desde'].'-01';

$fechaactualComoEntero = strtotime($fechaactual);
$fechaComoEntero = strtotime($fecha);

$fechaactualmes = date("m", $fechaactualComoEntero);
$fechames = date("m", $fechaComoEntero);

if($fechames < $fechaactualmes){

  $_SESSION['indicadores_recaudo_desde'] = $params['indicadores_recaudo_desde'].'-01';

}
else{
	
	echo 'alert("El mes no puede ser mayor o igual al actual");';
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_imprimir7($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar24($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['indicadores_sin_actuacion_mes'] = $params['indicadores_sin_actuacion_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_imprimir8($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar25($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$_SESSION['test_deterioro_mes'] = $params['test_deterioro_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar26($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Sancionado($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$sancionadoId=$date["SancionadoId"];
						$numero=$date["Numero"];
        }
$result["Numero"]=$numero;
$consulta=DB::Query("SELECT * FROM Sancionados WHERE SancionadoId=".$sancionadoId);
        while( $date = $consulta->fetchAssoc() ){
						$sancionado=$date["Sancionado"];
						$documento=$date["Documento"];
        }
$result["SancDoc"]=$sancionado.' - '.$documento;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
$result["sancionadoId"]=$sancionadoId;
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Providencia($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$providencia=$date["Providencia"];
						$ejecutoria=$date["Ejecutoria"];
        }
$fechaProvidencia= new DateTime($providencia);
$providencia=$fechaProvidencia->format('Y-m-d');
$fechaEjecutoria= new DateTime($ejecutoria);
$ejecutoria=$fechaEjecutoria->format('Y-m-d');

$result["Numero"]=$numero;
$result["Providencia"]=$providencia;
$result["Ejecutoria"]=$ejecutoria;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Providencia1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Ejecutor_a($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	    //$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$providencia=$date["Providencia"];
						$ejecutoria=$date["Ejecutoria"];
        }
$fechaProvidencia= new DateTime($providencia);
$providencia=$fechaProvidencia->format('Y-m-d');
$fechaEjecutoria= new DateTime($ejecutoria);
$ejecutoria=$fechaEjecutoria->format('Y-m-d');

$result["Numero"]=$numero;
$result["Providencia"]=$providencia;
$result["Ejecutoria"]=$ejecutoria;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Notificaci_n($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$notificacion=$date["Notificacion"];
						$ejecutoria=$date["Ejecutoria"];
        }
if (empty($notificacion)){
	$notificacion=1;
}
else{
	$fechaNotificacion= new DateTime($notificacion);
	$notificacion=$fechaNotificacion->format('Y-m-d');
}

$fechaEjecutoria= new DateTime($ejecutoria);
$ejecutoria=$fechaEjecutoria->format('Y-m-d');
$dateActual=date('Y-m-d');

$result["fechaActual"]=$dateActual;
$result["Numero"]=$numero;
$result["Notificacion"]=$notificacion;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
$result["Ejecutoria"]=$ejecutoria;
$result["Actual"]=$dateActual;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov__Obli__Inicial($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$obligacionInicial=$date["ObligacionInicial"];
        }
$obligacionInicial=number_format($obligacionInicial, 0, ',', '.');
$result["Numero"]=$numero;
$result["obligacionInicial"]=$obligacionInicial;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Intereses($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$intereses=$date["Intereses"];
        }
$intereses=number_format($intereses,0, ',', '.');
$result["Numero"]=$numero;
$result["Intereses"]=$intereses;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Costas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$costas=$date["Costas"];
        }
$costas=number_format($costas,0, ',', '.');
//echo "Value Costas".$costas;
$result["Numero"]=$numero;
$result["Costas"]=$costas;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Incum_Acuerdo_Pago($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$incumplimiento=$date["Incumplimiento"];
						$ejecutoria=$date["Ejecutoria"];
        }
if (empty($incumplimiento)){
	$incumplimiento=1;
}
else{
	$incumplimiento= new DateTime($Incumplimiento);
	$incumplimiento=$incumplimiento->format('Y-m-d');
}

$fechaEjecutoria= new DateTime($ejecutoria);
$ejecutoria=$fechaEjecutoria->format('Y-m-d');
$dateActual=date('Y-m-d');

$result["fechaActual"]=$dateActual;
$result["Numero"]=$numero;
$result["Incumplimiento"]=$incumplimiento;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
$result["Ejecutoria"]=$ejecutoria;
$result["Actual"]=$dateActual;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Obligaci_n($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$obligacion=$date["Obligacion"];
        }
$obligacion=number_format($obligacion,0, ',', '.');
$result["Numero"]=$numero;
$result["Obligacion"]=$obligacion;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Despacho($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$despachoId=$date["DespachoId"];
						$numero=$date["Numero"];
        }
$result["Numero"]=$numero;
$consulta=DB::Query("SELECT * FROM Despachos WHERE DespachoId=".$despachoId);
        while( $date = $consulta->fetchAssoc() ){
						$despacho=$date["Despacho"];
						$codigo=$date["Codigo"];
        }
$result["SancDoc"]=$despacho.' - '.$codigo;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
//$result["sancionadoId"]=$sancionadoId;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Plazo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	    //$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$plazo=$date["Plazo"];
						$ejecutoria=$date["Ejecutoria"];
						$providencia=$date["Providencia"];
        }
$fechaProvidencia= new DateTime($providencia);
$providencia=$fechaProvidencia->format('Y-m-d');
$fechaPlazo= new DateTime($plazo);
$plazo=$fechaPlazo->format('Y-m-d');
$fechaEjecutoria= new DateTime($ejecutoria);
$ejecutoria=$fechaEjecutoria->format('Y-m-d');

$result["Numero"]=$numero;
$result["Plazo"]=$plazo;
$result["Ejecutoria"]=$ejecutoria;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Naturaleza($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$naturalezaId=$date["NaturalezaId"];
						$numero=$date["Numero"];
						$conceptoId=$date["ConceptoId"];
        }
$consulta=DB::Query("SELECT * FROM Naturalezas WHERE NaturalezaId=".$naturalezaId);
        while( $date = $consulta->fetchAssoc() ){
						$naturaleza=$date["Naturaleza"];
}
$result["Naturaleza"]=$naturaleza;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
$result["Numero"]=$numero;


$str= "<select id='naturalezaId'; style='width: 450px; display: inline-block;' class='form-control'>";
    //select values from the database
    $strSQL = "select * from Naturalezas WHERE ConceptoId=".$conceptoId;
    $rs = db_query($strSQL);
    while ($data = db_fetch_array($rs)){
    $str.="<option value='".$data['NaturalezaId']."'>".$data['Naturaleza']."</option>";
    }
    $str.="</select>";
$result["str"]=$str;

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Origen($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
						$radicado=$date["Radicado"];
        }
$intereses=number_format($intereses,0, ',', '.');
$result["Numero"]=$numero;
$result["Radicado"]=$radicado;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Nov_Suspensi_n($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$params["ProcesoId"]);
        while( $date = $consulta->fetchAssoc() ){
						$numero=$date["Numero"];
        }
$result["Numero"]=$numero;
$result["procesoId"]=$params["ProcesoId"];
$result["userName"]=$_SESSION["UserId"];
$result["Actual"]=date('Y-m-d');;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_ActualizarDespachos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/abogados_API.php"));
$abogadoApi=new abogadosApi;
$despachosActivos=$abogadoApi->despachosActivos(); //llenar la tabla despachosSibog
//$despachosActivos=$abogadoApi->codificadoresDespacho();
if ($despachosActivos){
	$result["flag"]=1;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Actualizar_Codificadores($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/abogados_API.php"));
$abogadoApi=new abogadosApi;
$despacho='CG032';
$codificadoresDespacho=$abogadoApi->codificadoresDespacho(); //llenar la tabla despachosSibog
//$despachosActivos=$abogadoApi->codificadoresDespacho();
if ($codificadoresDespacho){
	$result["flag"]=1;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Validar_Pago($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Replace_Templates($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$result["OficioId"]=$data["OficioId"];
$result["Oficio"]=$data["Oficio"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Enviar_Correo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;
while ( $data = $button->getNextSelectedRecord() ) {
		 $rs = DB::Query("SELECT * FROM Chequeos WHERE ChequeoId=".$data["ChequeoId"]);
        while( $info = $rs->fetchAssoc() ){
						$abogadoId=$info["AbogadoId"];
				}
			$rs = DB::Query("SELECT * FROM Abogados WHERE AbogadoId=".$abogadoId);
        while( $info = $rs->fetchAssoc() ){
						$nombreAbogado=$info["Abogado"];
						$seccionalAbogado=$info["SeccionalId"];
				}
			$rs = DB::Query("SELECT * FROM Seccionales WHERE SeccionalId=".$seccionalAbogado);
        while( $info = $rs->fetchAssoc() ){
						$seccional=$info["Seccional"];
				}
$email="juansgil@deaj.ramajudicial.gov.co";
$subject="Solicitud Autorización";
$body="El abogador ".$nombreAbogado." de la seccional ".$seccional." solicita la autorización de la Etapa Preliminar No.".$data["ChequeoId"]." para la creación de un proceso por valor de $".$data['Obligacion'];
}
$arr = runner_mail(array('to' => $email, 'subject' => $subject,
'body' => $body));
// if error happened print a message on the web page
if (!$arr["mailed"])
{
echo "Error happened: <br>";
echo $arr["message"];
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar_Recaudo_Seccional($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$_SESSION['recaudo_seccional_busqueda_mes'] = $params['recaudo_seccional_busqueda_mes'].'-01';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_PDF_Print($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button17($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;
include_once (getabspath("classes/actuacionAction.php"));
include_once (getabspath("classes/calcIntereses.php"));
include_once (getabspath("plantillaGCC.php"));

//print_r($params["keys"]);
//exit();
function mergeDocx($docxFiles, $output) {
    $outputZip = new ZipArchive;
    if ($outputZip->open($output, ZipArchive::CREATE) !== TRUE) {
        exit("No se puede abrir el archivo de salida <$output>\n");
    }

    // Copiar archivos del primer DOCX al archivo de salida
    $zip1 = new ZipArchive;
    if ($zip1->open($docxFiles[0]) === TRUE) {
        for ($i = 0; $i < $zip1->numFiles; $i++) {
            $file = $zip1->getNameIndex($i);
            $outputZip->addFromString($file, $zip1->getFromName($file));
        }

        // Fusionar document.xml del primer archivo
        $doc1 = new DOMDocument;
        $doc1->loadXML($zip1->getFromName('word/document.xml'));
        $zip1->close();
    } else {
        exit("No se puede abrir el archivo DOCX: " . $docxFiles[0] . "\n");
    }

    // Procesar los archivos restantes
    for ($j = 1; $j < count($docxFiles); $j++) {
        $zip = new ZipArchive;
        if ($zip->open($docxFiles[$j]) === TRUE) {
            // Crear un salto de página antes de agregar el nuevo documento
            $paragraph = $doc1->createElement('w:p');
            $run = $doc1->createElement('w:r');
            $br = $doc1->createElement('w:br');
            $br->setAttribute('w:type', 'page');
            $run->appendChild($br);
            $paragraph->appendChild($run);
            $body1 = $doc1->getElementsByTagName('body')->item(0);
            $body1->appendChild($paragraph);

            // Fusionar document.xml del archivo actual
            $doc2 = new DOMDocument;
            $doc2->loadXML($zip->getFromName('word/document.xml'));
            $body2 = $doc2->getElementsByTagName('body')->item(0);

            foreach ($body2->childNodes as $child) {
                $node = $doc1->importNode($child, true);
                $body1->appendChild($node);
            }

            // Copiar todos los archivos del DOCX al archivo de salida, excepto document.xml
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $file = $zip->getNameIndex($i);
                if ($file !== 'word/document.xml') {
                    $outputZip->addFromString($file, $zip->getFromName($file));
                }
            }

            $zip->close();
        } else {
            exit("No se puede abrir el archivo DOCX: " . $docxFiles[$j] . "\n");
        }
    }

    // Guardar el document.xml fusionado en el archivo de salida
    $outputZip->addFromString('word/document.xml', $doc1->saveXML());
    $outputZip->close();
    //echo "Documentos unificados en $output\n";
}

$abogadoActual=$_SESSION["AbogadoId"];
$userId=$_SESSION["UserId"];
$contSigob=0;
$oficioId=$params['oficioId'];
$resolucion=$params['resolucion'];
$radicado=$params['radicado'];
$observaciones=$params['observaciones'];
$contData=0;
$contData1=0;
$arrayProcesos = [];
while ($contData1<count($params["keys"])){
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$procesoId=$params["keys"][$contData1]["ProcesoId"];
//echo "Numero de Proceso al ingresar en el while: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE ProcesoId='".$procesoId."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
				//echo "Numero del ProcesoId=".$procesoId;
$response=DB::Query("SELECT * FROM Oficios WHERE OficioId='".$oficioId."'");
		while( $date = $response->fetchAssoc() )
				{
					$nameCorrespondencia=$date["Oficio"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
					$idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
				//echo "Value Proceso: ".$numProceso."valor del Id:".$idCorres;
if (!empty($idCorres)) {
	//echo "Ingreso";
				 $result["Err"]=1;
				 $result["numProceso"]=$numProceso;
				 $result["nameCorrespondencia"]=$nameCorrespondencia;
				 $arrayProcesos[]=$numProceso;
        //echo "Saltando el número 3\n";
				 //echo "<script>alert('El proceso".$numProceso." ya registro el Oficio: ".$nameCorrespondencia."el dia de hoy')</script>";
        //$contData1++; // Incrementar manualmente para evitar bucle infinito
        //continue;
				//echo "Entro porque ya se envio:".$contData1;
				$contData1++;
				continue;
}
//echo "Value Fecha:".$fechaAc." Value Response2:".$idCorres."<br>";
//echo "Entro porque no se realizo el envio:".$contData1;
$rs2=DB::Exec("INSERT INTO CorrespondenciaMasiva(fecha,proceso,correspondencia,usuario,enviado,observaciones,radicado) VALUES (GETDATE(),".$procesoId.",".$oficioId.",'".$userId."',0,'".$observaciones."','')");
				if ($rs2) {
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insert into a correspondenciasMasivas " . DB::LastError();
					 exit();
				}
$contData1++;
}
//print_r($result["arrayProcesos"]);
$result["arrayProcesos"]=$arrayProcesos;
//echo "Numero de Registros:".count($params["keys"]);
//while ( $data = $button->getNextSelectedRecord() ) {
while ($contData<count($params["keys"])){//SE OBTIENEN LA VARIABLES PARA CONUSMIR LOS METODOS DE LA API SIGOBIUS Y VARIABLES PARA TRAMITAR LAS VALIDACIONES, INSERT Y UPDATE
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$procesoId=$params["keys"][$contData]["ProcesoId"];
//echo "Numero de Procesos: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE ProcesoId='".$procesoId."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
				 $idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
if (!empty($idCorres)) {
				 //$result["Err"]=1;
				 //$result["numProceso"]=$numProceso;
				 //$result["nameCorrespondencia"]=$nameCorrespondencia;
        //echo "Saltando el número 3\n";
        $contData++; // Incrementar manualmente para evitar bucle infinito
        continue;
}
//echo "El AbogadoId del proceso es: ".$data["AbogadoId"];
$response=DB::Query("SELECT ISNULL(ActuacionId,0) AS ActuacionId FROM Oficios WHERE OficioId=".$oficioId);
		while( $date = $response->fetchAssoc() )
				{
					$actuacionId=$date["ActuacionId"];
				}
$response=DB::Query("SELECT * FROM Empresas WHERE EmpresaId=1");
		while( $date = $response->fetchAssoc() )
				{
					$fechaCierre=$date["Cierre"];
				}
$fechaCierreDT=new DateTime($fechaCierre);
$desde = clone $fechaCierreDT; // Clonamos el objeto para no modificar la original
$desde->modify('+1 day'); // Añadir 1 día
$hasta = clone $desde; // Clonamos nuevamente para modificar la fecha
$hasta->modify('+1 month'); // Añadir 1 mes
$hasta->modify('-1 day');   // Restar 1 día
$desde=$desde->format('Y-m-d'); //SE calcula fecha desde
$hasta=$hasta->format('Y-m-d'); //SE calcula fecha Hasta
$fecha=now();
$response=DB::Query("SELECT Salario FROM Salarios WHERE (Ano=YEAR('".$hasta."'))");
		while( $date = $response->fetchAssoc() )
				{
					$minimoMnesual=$date["Salario"];
				}

$response=DB::Query("SELECT Intereses,ISNULL(EtapaId,0) as EtapaId, ISNULL(EstadoId,0) as EstadoId, ISNULL(MotivoId,0) as MotivoId,(CASE
                               WHEN EstadoId = 6
                                    AND MotivoId = 1
                               THEN 1
                               ELSE 0
                           END) as TermPago FROM Actuaciones WHERE ActuacionId=".$actuacionId);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$etapaId=$date["EtapaId"];
					$estadoId=$date["EstadoId"];
					$motivoId=$date["MotivoId"];
					$terminacionPago=$date["TermPago"];
					$flagIntereses=$date["Intereses"];
				}
$consulta = DB::Query("SELECT Despacho,Codificador FROM Abogados where AbogadoId=".$abogadoId);
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            $despacho=$date["Despacho"];
            $codificador=$date["Codificador"];
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        };
$consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Procesos C ON C.DespachoId = D.DespachoId
        WHERE ProcesoId =".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $despachoJuez=$date["DespachoJuez"];
        }
$consulta=DB::Query("SELECT ISNULL(OficioIdRequisito, 0) as OficioIdRequisito,* FROM Oficios WHERE OficioId=".$oficioId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$asunto=$date["Oficio"];
						$flagSigob=$date["Sigobius"];
						$oficReq=$date["OficioIdRequisito"];
        }
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["ObligacionInicial"]+$date["CostasInicial"]+$date["InteresesInicial"];
						 $sancionadoId=$date["SancionadoId"];
						 $competenciaId=$date["CompetenciaId"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
						 $prescripcion=$date["Dias"];
						 $terminacion=$date["Terminacion"];
						 $traslado=$date["Traslado"];
						 $error=$date["Error"];
						 $carteraTipoId=$date["CarteraTipoId"];
        }
$consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $saldo=$date["Saldo"];
						 $obligacionPv1=$date["Obligacion"];
						 $interesesPv1=$date["Intereses"];
						 $costasPv1=$date["Costas"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
        }
$consulta=DB::Query("SELECT SuspensionId
            FROM suspensiones
            WHERE CONVERT(DATE, GETDATE()) BETWEEN Desde AND Hasta");
        while( $date = $consulta->fetchAssoc() )
				{
						$suspensionId=$date["SuspensionId"];
        }
if ($suspensionId==''){
	$suspensionTerm=0;
}
else{
	$suspensionTerm=1;
}
$consulta=DB::Query("SELECT * FROM Sancionados WHERE SancionadoId=".$sancionadoId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$sancionado=$date["Sancionado"];
        }
$consulta=DB::Query("SELECT dbo.Money2Text(".$obligacion.") Obligacion, dbo.Money2Text(".$obligacionTotal.") obligacionTotal");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["obligacionTotal"];
        }
if ($oficReq!=0){
	$consulta=DB::Query("SELECT * FROM Correspondencias WHERE OficioId=".$oficReq." AND ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioIdR=$date["OficioId"];
        }
	if ($oficioIdR==''){
		$consulta=DB::Query("SELECT * FROM Oficios WHERE OficioId=".$oficReq);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioR=$date["Oficio"];
        }
			echo "<script>alert('Para generar este oficio es necesario haber generado el oficio ".$oficioR." con anterioridad.')</script>";
			return false;
	}
}
		$consulta=DB::Query("SELECT TOP 1 Correspondencias.Fecha as Fecha,* 
		FROM Correspondencias
		INNER JOIN Oficios ON Oficios.OficioId=Correspondencias.OficioId
		where Oficios.Oficio like '_PERSUASIVO%' and ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $fechaPersu=$date["Fecha"];
        }
//SE REALIZAN VALIDACIONES BASADOS EN LAS VARIABLES OBTENIDAS
if ($oficioId==1105 || $oficioId==4328){
	$fechaPersu=new DateTime($fechaPersu);
	$fechaActual=new DateTime(now());
	// Agregar 15 días
	$fechaPersu->modify('+15 days');
	//echo "Valor fecha format: ".$fechaPersu->format('Y-m-d')." y el valor de la fecha actual=".$fechaActual->format('Y-m-d');
	if ($fechaActual<=$fechaPersu){
		echo "<script>alert('Recordar que el Oficio Resolución Mandamiento de Pago debe ser asociado despues de 15 días del Oficio Persuasivo')</script>";
		//return false;
	}
}
if ($estadoAct==6 && $suspensionTerm==1){ // No puede genera Terminación del Proceso porque estamos en Suspensión de Términos
	echo "<script>alert('Este proceso no se puede TERMINAR porque aún estamos en SUSPENSIÓN DE TÉRMINOS.')</script>";
	return false;	
}
if ($incumplimiento=='NULL' && $actuacionId==1049){ //Anulación de Incumplimiento de Acuerdo de Pago
	echo "<script>alert('No se puede ANULAR EL INCUMPLIMIENTO DE ACUERDO DE PAGO porque el proceso no tiene INCUMPLIMIENTO DE ACUERDO DE PAGO..')</script>";
	return false;	
}
if ($acuerdo=='NULL' && ($actuacionId==1056 || $actuacionId==1057)){ //Reversión de Acuerdo de Pago
	echo "<script>alert('No se puede REVERSAR EL ACUERDO DE PAGO porque el proceso NO TIENE ACUERDO DE PAGO.')</script>";
	return false;	
}
if ($terminacionPago==1 && ($obligacionPv1+$interesesPv1+$costasPv1)-$minimoMnesual >0 ){ 
	echo "<script>alert('Este proceso no se puede TERMINAR POR PAGO porque aún tiene saldo pendiente.')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($estadoAct==6 && $actuacionId!=1033){ // TERMINADO Y NO SE ESTA REVOCANDO LA TERMINACION
	$consulta=DB::Query("SELECT Estados.Estado
                            FROM Estados
                                 INNER JOIN Procesos ON Estados.EstadoId = Procesos.EstadoId
                            WHERE Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$estado=$date["Estado"];
        }
	echo "<script>alert('No se puede cambiar el estado porque el proceso esta ".$estado."')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($actuacionId==14 && $motivoId==11 && $competenciaId=='NULL'){ //TRASLADO DE PROCESOS (Termina el proceso por traslado y lo crea en la nueva sucursal (competencia))
		echo "<script>alert('El proceso no se puede trasladar porque no se le ha asignado la COMPETENCIA.')</script>";
		return false;
}
if ($actuacionId==1038 && $motivoId==14){ //TRASLADO DE CARTERA PRESCRITA A CARTERA ACTIVA (Termina el proceso DE CARTERA PRESCRITA y lo crea en la CARTERA ACTIVA)
		$consulta=DB::Query("SELECT CarteraTipos.Prescrita
                    FROM Procesos
                         INNER JOIN CarteraTipos ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
                    WHERE(Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$carteraPres=$date["Prescrita"];
        }
		if($carteraPres==0){
			echo "<script>alert('El proceso no se puede trasladar de cartera PRESCRITA porque esta en una cartera ACTIVA.')</script>";
			return false;
		}
}
/*
if ($actuacionId==20){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		echo "<script>alert('El ACUERDO DE PAGO solamente se puede hacer por el PROCEDIMIENTO DE ACUERDO DE PAGO.')</script>";
		return false;
}
*/
if ($estadoAct==5){
	$actuacionIds = [1035, 1037, 1031, 1044, 1045, 1051];
	$oficioIds = [4453, 4454, 4480, 4490, 3270, 4436, 4438, 4557];
	if (!in_array($actuacionId, $actuacionIds) && !in_array($oficioId, $oficioIds)){
		echo "<script>alert('A un proceso INTERRUMPIDO solo se le pueden hacer actuaciones/oficios de MEDIDAS CAUTELARES o BÚSQUEDA DE BIENES.')</script>";
		return false;
	}
}
if ($estadoId==4 || $estadoId==5){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==6){
		echo "<script>alert('El proceso no se puede SUSPENDER ó INTERRUMPIR porque está TERMINADO.')</script>";
		return false;
	}
}
$actuacionIds = [1031, 1044, 1051];
if ($estadoId==2 && in_array($actuacionId, $actuacionIds)){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==4 || $estadoAct==5){
		echo "<script>alert('No se puede revocar la SUSPENSIÓN/INTERRUPCIÓN porque el proceso no está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
if (($estadoAct==5 || $estadoAct==4) && $sancionadoId!=292340){
	if ($estadoId==4 || $estadoId==5){
		echo "<script>alert('El proceso no se puede SUSPENDER/INTERRUMPIR porque está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
//echo "Valor de flag: ".$flagSigob;
//return false;
if ($flagSigob==0){
	$_SESSION["Radicado"]='';
	$_SESSION["token"]='';
	$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					$rs2=DB::Exec("INSERT INTO Correspondencias(ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicado."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
				if ($rs2) {
						$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicado."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//echo '<script>alert("Response Oficio->Process true")</script>';
					//return true;
				}
				else{
					//echo '<script>alert("Response Oficio->Process false")</script>';
					//return false;
				}
}
else{
//echo "Abogado Actual: ".$abogadoActual.", Abogado de Proceso:".$abogadoId;
//exit();
  //CONSUMINOS EL METODO DE NuevaCorrespondencia de la API SOAP
//la url de la conexion a Sigob
$url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//Parametro a enviar para consumir el metodo
$data = array(
    'Despacho' => $despacho,
    'Codificador' => $codificador,
    'SoloEditorExterno' => '1',
    'Contrasena' => '448B8890'
    // ... Agrega más parámetros según sea necesario
);

// Convertir los datos a formato de cadena
$postData = http_build_query($data);

// Configurar opciones de cURL
$options = array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $postData,
);

// Inicializar cURL y configurar opciones
$curl = curl_init();
curl_setopt_array($curl, $options);

//NO VALIDAR SI REQUIERE SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Realizar la solicitud cURL y obtener la respuesta
$response2 = curl_exec($curl);
// Verificar errores
if (curl_errno($curl)) {
    echo 'Error al realizar la solicitud: ' . curl_error($curl);
		return false;
}
else{

// Imprimir la respuesta del servicio web
//echo "<br>Valor del metodo NuevaCorrespondencia: ".$response2."<br>";
$xml = new SimpleXMLElement($response2);
$radicadoF=strval($xml[0]);
$_SESSION["Radicado"]=$radicadoF;
////////
//CONSUMINOS EL METODO DE ActualizarCorrespondencia de la API SOAP
$curl = curl_init();
//SE LLAMA LA FUNCION LA CUAL TOMA LA PLANTILLA Y REEMPLAZA SUS VARIABLES, CREANDO UN NUEVO .DOCX
 $objeto=new plantillas($procesoId,$oficioId,$obligacion,$obligacionTotal,$radicadoF);
 $objeto->funcGlobal();
//$rutaArchivo = 'Plantilla_1097.docx';
$noDirecciones=$objeto->getNoDirecciones();
if ($noDirecciones>1){
  //echo "Numero de direcciones: ".$noDirecciones.var_dump($noDirecciones);
$noDirecciones=$noDirecciones-1;//porque las plantillas son XXX_0
//$docxFiles = array();
$docxFiles=[];
for ($i=0;$i<=$noDirecciones;$i++){
	$docxFiles []='templates_GCC/Archivo_'.$procesoId.'_'.$oficioId.'_'.strval($i).'.docx';
	//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_'.strval($i).'.docx';
}
//print_r($docxFiles);
//$docxFiles = array('templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx','templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx');
$salida = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
mergeDocx($docxFiles, $salida);
}
else{
  $rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx'; 
}
$rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
$bytesDocumento = file_get_contents($rutaArchivo);
$base64 = base64_encode($bytesDocumento);
//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx';
//$rutaArchivo2 = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
	//CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <ActualizarCorrespondencia xmlns="http://tempuri.org/">
      <CodigoRegistro>'.$radicadoF.'</CodigoRegistro>
      <Asunto>'.$asunto.'</Asunto>
      <Tipo>2</Tipo>
      <GradoReserva>0</GradoReserva>
      <Prioridad>0</Prioridad>
      <MedioEnvio>0</MedioEnvio>
      <EsperaRespuesta>N</EsperaRespuesta>
      <FechaEstimadaRespuesta>'.now().'</FechaEstimadaRespuesta>
      <ResultadoGestion>-1</ResultadoGestion>
      <Objetivos>11</Objetivos>
      <FormatoDocumento>1</FormatoDocumento>
      <Documento>'.$base64.'</Documento>
      <NombreDocumento>Prueba wsAPICorrespondencia.docx</NombreDocumento>
      <DocumentoTexto>Texto sin formato del documento</DocumentoTexto>
      <Firmante>'.$despacho.'</Firmante>
      <Estado>0</Estado>
      <DespachoDestino></DespachoDestino>
      <Vocativo>-1</Vocativo>
      <Apellido>'.$sancionado.'</Apellido>
      <Nombre>'.$despachoJuez.'</Nombre>
      <NumeroDocumento>12345</NumeroDocumento>
      <Sexo>0</Sexo>
      <FechaNacimiento>1977/01/01</FechaNacimiento>
      <Institucion>-1</Institucion>
      <Cargo>-1</Cargo>
      <Departamento>-1</Departamento>
      <Telefono>09811111231</Telefono>
      <CorreoElectronico>alelamonaca@gmail.com</CorreoElectronico>
      <Calle>Mi calle</Calle>
      <Ciudad>Asunción</Ciudad>
      <ProvinciaDepartamento>Central</ProvinciaDepartamento>
      <Pais>Paraguay</Pais>
      <TipoDireccion>1</TipoDireccion>
      <CodigoRegistroPrecedente></CodigoRegistroPrecedente>
      <EsRespuesta>0</EsRespuesta>
      <Contrasena>448B8890</Contrasena>
    </ActualizarCorrespondencia>
  </soap12:Body>
</soap12:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml',
    'Cookie: ASP.NET_SessionId=4uvpkyerhy21mcwghvyqfuw0'
  ),
));

//NO VERIFICAR CERTICADO SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($curl);
if ($response == false) {
    echo 'Error en la solicitud cURL: ' . curl_error($curl);
		return false;
} else {
//echo '<br>Respuesta de la API Metodo Actualizar Correspondencia: ' . $response;
$xml = new SimpleXMLElement($response);
    // Definir el namespace
    $namespaces = $xml->getNamespaces(true);
    $soapNamespace = $namespaces['soap'];

    // Acceder al cuerpo del SOAP
    $body = $xml->children($soapNamespace)->Body;

    // Acceder al namespace específico del cuerpo
    $responseNamespace = $namespaces[''];
    $token = $body->children($responseNamespace)->ActualizarCorrespondenciaResponse->ActualizarCorrespondenciaResult;
		$token=strval($token);
		$_SESSION["token"]=$token;
    // Mostrar el resultado
    //echo "Resultado: " .$token;
		//var_dump($token);
		//echo "Result: ".$token ;
		$ultimosCaracteres = substr($token, -2);
    //echo "<script>alert('El codigo obtenido es el: ".$radicadoF." y el valor del metodo ActualizarCorrespondencia es: ".$token."')</script>";
    // Comparar con "=="
    if ($ultimosCaracteres === "==") {
				curl_close($curl);
				$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					//echo '<script>alert("Response Oficio->Process true")</script>';
					$rs2=DB::Exec("INSERT INTO Correspondencias (ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicadoF."','".$_SESSION["UserId"]."','".$abogadoId."')");
				if ($rs2) {
								$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicadoF."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.".$rs2;
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//return true;
				}
				else{
					echo '<script>alert("El proceso Numero: '.$numProceso.' presento un problema con el envio de Correspondencias: "'.$response.')</script>';
					return false;
				}
    } elseif($ultimosCaracteres=='') {
					echo "<script>alert('Error con el Proceso Numero: ".$numProceso.". El codigo obtenido es el: ".$radicadoF." pero no se logro conectividad, intentelo de nuevo')</script>";
					return false;
				}
				else{
				 echo "<script>alert('Error con el Proceso Numero: ".$numProceso.".El codigo obtenido es el: ".$radicadoF." y se presento un error: ".$token.", solucionarlo o de no ser solucionable, intentelo mas tarde')</script>";
        return false;
    }
}
}
/*
else{
	echo "<script>alert('El Despacho resgistrador no esta autorizado a indicar como firmante al despacho firmante')</script>";
	return false;
}	
*/
}
$contSigob++;
//echo "Valor contador Antes:".$contData."Contador Sigob".$contSigob;
$contData++;
//echo "Valor contador i:".$contData;
}
$result["response"]="OK";

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button18($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_MandaAutoma($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;
include_once (getabspath("classes/actuacionAction.php"));
include_once (getabspath("classes/calcIntereses.php"));
include_once (getabspath("plantillaGCC.php"));

//print_r($params["keys"]);
//exit();
function mergeDocx($docxFiles, $output) {
    $outputZip = new ZipArchive;
    if ($outputZip->open($output, ZipArchive::CREATE) !== TRUE) {
        exit("No se puede abrir el archivo de salida <$output>\n");
    }

    // Copiar archivos del primer DOCX al archivo de salida
    $zip1 = new ZipArchive;
    if ($zip1->open($docxFiles[0]) === TRUE) {
        for ($i = 0; $i < $zip1->numFiles; $i++) {
            $file = $zip1->getNameIndex($i);
            $outputZip->addFromString($file, $zip1->getFromName($file));
        }

        // Fusionar document.xml del primer archivo
        $doc1 = new DOMDocument;
        $doc1->loadXML($zip1->getFromName('word/document.xml'));
        $zip1->close();
    } else {
        exit("No se puede abrir el archivo DOCX: " . $docxFiles[0] . "\n");
    }

    // Procesar los archivos restantes
    for ($j = 1; $j < count($docxFiles); $j++) {
        $zip = new ZipArchive;
        if ($zip->open($docxFiles[$j]) === TRUE) {
            // Crear un salto de página antes de agregar el nuevo documento
            $paragraph = $doc1->createElement('w:p');
            $run = $doc1->createElement('w:r');
            $br = $doc1->createElement('w:br');
            $br->setAttribute('w:type', 'page');
            $run->appendChild($br);
            $paragraph->appendChild($run);
            $body1 = $doc1->getElementsByTagName('body')->item(0);
            $body1->appendChild($paragraph);

            // Fusionar document.xml del archivo actual
            $doc2 = new DOMDocument;
            $doc2->loadXML($zip->getFromName('word/document.xml'));
            $body2 = $doc2->getElementsByTagName('body')->item(0);

            foreach ($body2->childNodes as $child) {
                $node = $doc1->importNode($child, true);
                $body1->appendChild($node);
            }

            // Copiar todos los archivos del DOCX al archivo de salida, excepto document.xml
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $file = $zip->getNameIndex($i);
                if ($file !== 'word/document.xml') {
                    $outputZip->addFromString($file, $zip->getFromName($file));
                }
            }

            $zip->close();
        } else {
            exit("No se puede abrir el archivo DOCX: " . $docxFiles[$j] . "\n");
        }
    }

    // Guardar el document.xml fusionado en el archivo de salida
    $outputZip->addFromString('word/document.xml', $doc1->saveXML());
    $outputZip->close();
    //echo "Documentos unificados en $output\n";
}

$abogadoActual=$_SESSION["AbogadoId"];
$userId=$_SESSION["UserId"];
$contSigob=0;
$oficioId=$params['oficioId'];
$resolucion=$params['resolucion'];
$radicado=$params['radicado'];
$observaciones=$params['observaciones'];
$contData=0;
$contData1=0;
$arrayProcesos = [];
while ($contData1<count($params["keys"])){
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$procesoId=$params["keys"][$contData1]["ProcesoId"];
//echo "Numero de Proceso al ingresar en el while: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE ProcesoId='".$procesoId."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
				//echo "Numero del ProcesoId=".$procesoId;
$response=DB::Query("SELECT * FROM Oficios WHERE OficioId='".$oficioId."'");
		while( $date = $response->fetchAssoc() )
				{
					$nameCorrespondencia=$date["Oficio"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
					$idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
				//echo "Value Proceso: ".$numProceso."valor del Id:".$idCorres;
if (!empty($idCorres)) {
	//echo "Ingreso";
				 $result["Err"]=1;
				 $result["numProceso"]=$numProceso;
				 $result["nameCorrespondencia"]=$nameCorrespondencia;
				 $arrayProcesos[]=$numProceso;
        //echo "Saltando el número 3\n";
				 //echo "<script>alert('El proceso".$numProceso." ya registro el Oficio: ".$nameCorrespondencia."el dia de hoy')</script>";
        //$contData1++; // Incrementar manualmente para evitar bucle infinito
        //continue;
				//echo "Entro porque ya se envio:".$contData1;
				$contData1++;
				continue;
}
//echo "Value Fecha:".$fechaAc." Value Response2:".$idCorres."<br>";
//echo "Entro porque no se realizo el envio:".$contData1;
$rs2=DB::Exec("INSERT INTO CorrespondenciaMasiva(fecha,proceso,correspondencia,usuario,enviado,observaciones,radicado) VALUES (GETDATE(),".$procesoId.",".$oficioId.",'".$userId."',0,'".$observaciones."','')");
				if ($rs2) {
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insert into a correspondenciasMasivas " . DB::LastError();
					 exit();
				}
$contData1++;
}
//print_r($result["arrayProcesos"]);
$result["arrayProcesos"]=$arrayProcesos;
//echo "Numero de Registros:".count($params["keys"]);
//while ( $data = $button->getNextSelectedRecord() ) {
while ($contData<count($params["keys"])){//SE OBTIENEN LA VARIABLES PARA CONUSMIR LOS METODOS DE LA API SIGOBIUS Y VARIABLES PARA TRAMITAR LAS VALIDACIONES, INSERT Y UPDATE
global $pageObject;
$idCorres=0;
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$procesoId=$params["keys"][$contData]["ProcesoId"];
//echo "Numero de Procesos: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE ProcesoId='".$procesoId."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
$fechaAc=date('Y-m-d');
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
				 $idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
if (!empty($idCorres)) {
				 //$result["Err"]=1;
				 //$result["numProceso"]=$numProceso;
				 //$result["nameCorrespondencia"]=$nameCorrespondencia;
        //echo "Saltando el número 3\n";
        $contData++; // Incrementar manualmente para evitar bucle infinito
        continue;
}
//echo "El AbogadoId del proceso es: ".$data["AbogadoId"];
$response=DB::Query("SELECT ISNULL(ActuacionId,0) AS ActuacionId FROM Oficios WHERE OficioId=".$oficioId);
		while( $date = $response->fetchAssoc() )
				{
					$actuacionId=$date["ActuacionId"];
				}
$response=DB::Query("SELECT * FROM Empresas WHERE EmpresaId=1");
		while( $date = $response->fetchAssoc() )
				{
					$fechaCierre=$date["Cierre"];
				}
$fechaCierreDT=new DateTime($fechaCierre);
$desde = clone $fechaCierreDT; // Clonamos el objeto para no modificar la original
$desde->modify('+1 day'); // Añadir 1 día
$hasta = clone $desde; // Clonamos nuevamente para modificar la fecha
$hasta->modify('+1 month'); // Añadir 1 mes
$hasta->modify('-1 day');   // Restar 1 día
$desde=$desde->format('Y-m-d'); //SE calcula fecha desde
$hasta=$hasta->format('Y-m-d'); //SE calcula fecha Hasta
$fecha=now();
$response=DB::Query("SELECT Salario FROM Salarios WHERE (Ano=YEAR('".$hasta."'))");
		while( $date = $response->fetchAssoc() )
				{
					$minimoMnesual=$date["Salario"];
				}

$response=DB::Query("SELECT Intereses,ISNULL(EtapaId,0) as EtapaId, ISNULL(EstadoId,0) as EstadoId, ISNULL(MotivoId,0) as MotivoId,(CASE
                               WHEN EstadoId = 6
                                    AND MotivoId = 1
                               THEN 1
                               ELSE 0
                           END) as TermPago FROM Actuaciones WHERE ActuacionId=".$actuacionId);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$etapaId=$date["EtapaId"];
					$estadoId=$date["EstadoId"];
					$motivoId=$date["MotivoId"];
					$terminacionPago=$date["TermPago"];
					$flagIntereses=$date["Intereses"];
				}
$consulta = DB::Query("SELECT Despacho,Codificador FROM Abogados where AbogadoId=".$abogadoActual);
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            $despacho=$date["Despacho"];
            $codificador=$date["Codificador"];
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        };
$consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Procesos C ON C.DespachoId = D.DespachoId
        WHERE ProcesoId =".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $despachoJuez=$date["DespachoJuez"];
        }
$consulta=DB::Query("SELECT ISNULL(OficioIdRequisito, 0) as OficioIdRequisito,* FROM Oficios WHERE OficioId=".$oficioId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$asunto=$date["Oficio"];
						$flagSigob=$date["Sigobius"];
						$oficReq=$date["OficioIdRequisito"];
        }
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["ObligacionInicial"]+$date["CostasInicial"]+$date["InteresesInicial"];
						 $sancionadoId=$date["SancionadoId"];
						 $competenciaId=$date["CompetenciaId"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
						 $prescripcion=$date["Dias"];
						 $terminacion=$date["Terminacion"];
						 $traslado=$date["Traslado"];
						 $error=$date["Error"];
						 $carteraTipoId=$date["CarteraTipoId"];
        }
$consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $saldo=$date["Saldo"];
						 $obligacionPv1=$date["Obligacion"];
						 $interesesPv1=$date["Intereses"];
						 $costasPv1=$date["Costas"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
        }
$consulta=DB::Query("SELECT SuspensionId
            FROM suspensiones
            WHERE CONVERT(DATE, GETDATE()) BETWEEN Desde AND Hasta");
        while( $date = $consulta->fetchAssoc() )
				{
						$suspensionId=$date["SuspensionId"];
        }
if ($suspensionId==''){
	$suspensionTerm=0;
}
else{
	$suspensionTerm=1;
}
$consulta=DB::Query("SELECT * FROM Sancionados WHERE SancionadoId=".$sancionadoId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$sancionado=$date["Sancionado"];
        }
$consulta=DB::Query("SELECT dbo.Money2Text(".$obligacion.") Obligacion, dbo.Money2Text(".$obligacionTotal.") obligacionTotal");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["obligacionTotal"];
        }
if ($oficReq!=0){
	$consulta=DB::Query("SELECT * FROM Correspondencias WHERE OficioId=".$oficReq." AND ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioIdR=$date["OficioId"];
        }
	if ($oficioIdR==''){
		$consulta=DB::Query("SELECT * FROM Oficios WHERE OficioId=".$oficReq);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioR=$date["Oficio"];
        }
			echo "<script>alert('Para generar este oficio es necesario haber generado el oficio ".$oficioR." con anterioridad.')</script>";
			return false;
	}
}
		$consulta=DB::Query("SELECT TOP 1 Correspondencias.Fecha as Fecha,* 
		FROM Correspondencias
		INNER JOIN Oficios ON Oficios.OficioId=Correspondencias.OficioId
		where Oficios.Oficio like '_PERSUASIVO%' and ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $fechaPersu=$date["Fecha"];
        }
//SE REALIZAN VALIDACIONES BASADOS EN LAS VARIABLES OBTENIDAS
if ($oficioId==1105 || $oficioId==4328){
	$fechaPersu=new DateTime($fechaPersu);
	$fechaActual=new DateTime(now());
	// Agregar 15 días
	$fechaPersu->modify('+15 days');
	//echo "Valor fecha format: ".$fechaPersu->format('Y-m-d')." y el valor de la fecha actual=".$fechaActual->format('Y-m-d');
	if ($fechaActual<=$fechaPersu){
		echo "<script>alert('Recordar que el Oficio Resolución Mandamiento de Pago debe ser asociado despues de 15 días del Oficio Persuasivo')</script>";
		//return false;
	}
}
if ($estadoAct==6 && $suspensionTerm==1){ // No puede genera Terminación del Proceso porque estamos en Suspensión de Términos
	echo "<script>alert('Este proceso no se puede TERMINAR porque aún estamos en SUSPENSIÓN DE TÉRMINOS.')</script>";
	return false;	
}
if ($incumplimiento=='NULL' && $actuacionId==1049){ //Anulación de Incumplimiento de Acuerdo de Pago
	echo "<script>alert('No se puede ANULAR EL INCUMPLIMIENTO DE ACUERDO DE PAGO porque el proceso no tiene INCUMPLIMIENTO DE ACUERDO DE PAGO..')</script>";
	return false;	
}
if ($acuerdo=='NULL' && ($actuacionId==1056 || $actuacionId==1057)){ //Reversión de Acuerdo de Pago
	echo "<script>alert('No se puede REVERSAR EL ACUERDO DE PAGO porque el proceso NO TIENE ACUERDO DE PAGO.')</script>";
	return false;	
}
if ($terminacionPago==1 && ($obligacionPv1+$interesesPv1+$costasPv1)-$minimoMnesual >0 ){ 
	echo "<script>alert('Este proceso no se puede TERMINAR POR PAGO porque aún tiene saldo pendiente.')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($estadoAct==6 && $actuacionId!=1033){ // TERMINADO Y NO SE ESTA REVOCANDO LA TERMINACION
	$consulta=DB::Query("SELECT Estados.Estado
                            FROM Estados
                                 INNER JOIN Procesos ON Estados.EstadoId = Procesos.EstadoId
                            WHERE Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$estado=$date["Estado"];
        }
	echo "<script>alert('No se puede cambiar el estado porque el proceso esta ".$estado."')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($actuacionId==14 && $motivoId==11 && $competenciaId=='NULL'){ //TRASLADO DE PROCESOS (Termina el proceso por traslado y lo crea en la nueva sucursal (competencia))
		echo "<script>alert('El proceso no se puede trasladar porque no se le ha asignado la COMPETENCIA.')</script>";
		return false;
}
if ($actuacionId==1038 && $motivoId==14){ //TRASLADO DE CARTERA PRESCRITA A CARTERA ACTIVA (Termina el proceso DE CARTERA PRESCRITA y lo crea en la CARTERA ACTIVA)
		$consulta=DB::Query("SELECT CarteraTipos.Prescrita
                    FROM Procesos
                         INNER JOIN CarteraTipos ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
                    WHERE(Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$carteraPres=$date["Prescrita"];
        }
		if($carteraPres==0){
			echo "<script>alert('El proceso no se puede trasladar de cartera PRESCRITA porque esta en una cartera ACTIVA.')</script>";
			return false;
		}
}
/*
if ($actuacionId==20){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		echo "<script>alert('El ACUERDO DE PAGO solamente se puede hacer por el PROCEDIMIENTO DE ACUERDO DE PAGO.')</script>";
		return false;
}
*/
if ($estadoAct==5){
	$actuacionIds = [1035, 1037, 1031, 1044, 1045, 1051];
	$oficioIds = [4453, 4454, 4480, 4490, 3270, 4436, 4438, 4557];
	if (!in_array($actuacionId, $actuacionIds) && !in_array($oficioId, $oficioIds)){
		echo "<script>alert('A un proceso INTERRUMPIDO solo se le pueden hacer actuaciones/oficios de MEDIDAS CAUTELARES o BÚSQUEDA DE BIENES.')</script>";
		return false;
	}
}
if ($estadoId==4 || $estadoId==5){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==6){
		echo "<script>alert('El proceso no se puede SUSPENDER ó INTERRUMPIR porque está TERMINADO.')</script>";
		return false;
	}
}
$actuacionIds = [1031, 1044, 1051];
if ($estadoId==2 && in_array($actuacionId, $actuacionIds)){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==4 || $estadoAct==5){
		echo "<script>alert('No se puede revocar la SUSPENSIÓN/INTERRUPCIÓN porque el proceso no está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
if (($estadoAct==5 || $estadoAct==4) && $sancionadoId!=292340){
	if ($estadoId==4 || $estadoId==5){
		echo "<script>alert('El proceso no se puede SUSPENDER/INTERRUMPIR porque está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
//echo "Valor de flag: ".$flagSigob;
//return false;
if ($flagSigob==0){
	$_SESSION["Radicado"]='';
	$_SESSION["token"]='';
	$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					$rs2=DB::Exec("INSERT INTO Correspondencias(ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicado."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
				if ($rs2) {
						$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicado."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//echo '<script>alert("Response Oficio->Process true")</script>';
					//return true;
				}
				else{
					//echo '<script>alert("Response Oficio->Process false")</script>';
					//return false;
				}
}
else{
//echo "Abogado Actual: ".$abogadoActual.", Abogado de Proceso:".$abogadoId;
//exit();
  //CONSUMINOS EL METODO DE NuevaCorrespondencia de la API SOAP
//la url de la conexion a Sigob
$url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//Parametro a enviar para consumir el metodo
$data = array(
    'Despacho' => $despacho,
    'Codificador' => $codificador,
    'SoloEditorExterno' => '1',
    'Contrasena' => '448B8890'
    // ... Agrega más parámetros según sea necesario
);

// Convertir los datos a formato de cadena
$postData = http_build_query($data);

// Configurar opciones de cURL
$options = array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $postData,
);

// Inicializar cURL y configurar opciones
$curl = curl_init();
curl_setopt_array($curl, $options);

//NO VALIDAR SI REQUIERE SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Realizar la solicitud cURL y obtener la respuesta
$response2 = curl_exec($curl);
// Verificar errores
if (curl_errno($curl)) {
    echo 'Error al realizar la solicitud: ' . curl_error($curl);
		return false;
}
else{

// Imprimir la respuesta del servicio web
//echo "<br>Valor del metodo NuevaCorrespondencia: ".$response2."<br>";
$xml = new SimpleXMLElement($response2);
$radicadoF=strval($xml[0]);
$_SESSION["Radicado"]=$radicadoF;
////////
//CONSUMINOS EL METODO DE ActualizarCorrespondencia de la API SOAP
$curl = curl_init();
//SE LLAMA LA FUNCION LA CUAL TOMA LA PLANTILLA Y REEMPLAZA SUS VARIABLES, CREANDO UN NUEVO .DOCX
 $objeto=new plantillas($procesoId,$oficioId,$obligacion,$obligacionTotal,$radicadoF);
 $objeto->funcGlobal();
//$rutaArchivo = 'Plantilla_1097.docx';
$noDirecciones=$objeto->getNoDirecciones();
if ($noDirecciones>1){
  //echo "Numero de direcciones: ".$noDirecciones.var_dump($noDirecciones);
$noDirecciones=$noDirecciones-1;//porque las plantillas son XXX_0
//$docxFiles = array();
$docxFiles=[];
for ($i=0;$i<=$noDirecciones;$i++){
	$docxFiles []='templates_GCC/Archivo_'.$procesoId.'_'.$oficioId.'_'.strval($i).'.docx';
	//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_'.strval($i).'.docx';
}
//print_r($docxFiles);
//$docxFiles = array('templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx','templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx');
$salida = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
mergeDocx($docxFiles, $salida);
}
else{
  $rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx'; 
}
$rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
$bytesDocumento = file_get_contents($rutaArchivo);
$base64 = base64_encode($bytesDocumento);
//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx';
//$rutaArchivo2 = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
	//CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <ActualizarCorrespondencia xmlns="http://tempuri.org/">
      <CodigoRegistro>'.$radicadoF.'</CodigoRegistro>
      <Asunto>'.$asunto.'</Asunto>
      <Tipo>2</Tipo>
      <GradoReserva>0</GradoReserva>
      <Prioridad>0</Prioridad>
      <MedioEnvio>0</MedioEnvio>
      <EsperaRespuesta>N</EsperaRespuesta>
      <FechaEstimadaRespuesta>'.now().'</FechaEstimadaRespuesta>
      <ResultadoGestion>-1</ResultadoGestion>
      <Objetivos>11</Objetivos>
      <FormatoDocumento>1</FormatoDocumento>
      <Documento>'.$base64.'</Documento>
      <NombreDocumento>Prueba wsAPICorrespondencia.docx</NombreDocumento>
      <DocumentoTexto>Texto sin formato del documento</DocumentoTexto>
      <Firmante>'.$despacho.'</Firmante>
      <Estado>0</Estado>
      <DespachoDestino></DespachoDestino>
      <Vocativo>-1</Vocativo>
      <Apellido>'.$sancionado.'</Apellido>
      <Nombre>'.$despachoJuez.'</Nombre>
      <NumeroDocumento>12345</NumeroDocumento>
      <Sexo>0</Sexo>
      <FechaNacimiento>1977/01/01</FechaNacimiento>
      <Institucion>-1</Institucion>
      <Cargo>-1</Cargo>
      <Departamento>-1</Departamento>
      <Telefono>09811111231</Telefono>
      <CorreoElectronico>alelamonaca@gmail.com</CorreoElectronico>
      <Calle>Mi calle</Calle>
      <Ciudad>Asunción</Ciudad>
      <ProvinciaDepartamento>Central</ProvinciaDepartamento>
      <Pais>Paraguay</Pais>
      <TipoDireccion>1</TipoDireccion>
      <CodigoRegistroPrecedente></CodigoRegistroPrecedente>
      <EsRespuesta>0</EsRespuesta>
      <Contrasena>448B8890</Contrasena>
    </ActualizarCorrespondencia>
  </soap12:Body>
</soap12:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml',
    'Cookie: ASP.NET_SessionId=4uvpkyerhy21mcwghvyqfuw0'
  ),
));

//NO VERIFICAR CERTICADO SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($curl);
if ($response == false) {
    echo 'Error en la solicitud cURL: ' . curl_error($curl);
		return false;
} else {
//echo '<br>Respuesta de la API Metodo Actualizar Correspondencia: ' . $response;
$xml = new SimpleXMLElement($response);
    // Definir el namespace
    $namespaces = $xml->getNamespaces(true);
    $soapNamespace = $namespaces['soap'];

    // Acceder al cuerpo del SOAP
    $body = $xml->children($soapNamespace)->Body;

    // Acceder al namespace específico del cuerpo
    $responseNamespace = $namespaces[''];
    $token = $body->children($responseNamespace)->ActualizarCorrespondenciaResponse->ActualizarCorrespondenciaResult;
		$token=strval($token);
		$_SESSION["token"]=$token;
    // Mostrar el resultado
    //echo "Resultado: " .$token;
		//var_dump($token);
		//echo "Result: ".$token ;
		$ultimosCaracteres = substr($token, -2);
    //echo "<script>alert('El codigo obtenido es el: ".$radicadoF." y el valor del metodo ActualizarCorrespondencia es: ".$token."')</script>";
    // Comparar con "=="
    if ($ultimosCaracteres === "==") {
				curl_close($curl);
				$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					//echo '<script>alert("Response Oficio->Process true")</script>';
					$rs2=DB::Exec("INSERT INTO Correspondencias (ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicadoF."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
				if ($rs2) {
								$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicadoF."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.".$rs2;
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//return true;
				}
				else{
					echo '<script>alert("El proceso Numero: '.$numProceso.' presento un problema con el envio de Correspondencias: "'.$response.')</script>';
					return false;
				}
    } elseif($ultimosCaracteres=='') {
					echo "<script>alert('Error con el Proceso Numero: ".$numProceso.". El codigo obtenido es el: ".$radicadoF." pero no se logro conectividad, intentelo de nuevo')</script>";
					return false;
				}
				else{
				 echo "<script>alert('Error con el Proceso Numero: ".$numProceso.".El codigo obtenido es el: ".$radicadoF." y se presento un error: ".$token.", solucionarlo o de no ser solucionable, intentelo mas tarde')</script>";
        return false;
    }
}
}
/*
else{
	echo "<script>alert('El Despacho resgistrador no esta autorizado a indicar como firmante al despacho firmante')</script>";
	return false;
}	
*/
}
$contSigob++;
//echo "Valor contador Antes:".$contData."Contador Sigob".$contSigob;
$contData++;
//echo "Valor contador i:".$contData;
}
$result["response"]="OK";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_BuscarManda($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$_SESSION["fechaMandamientoA"]=$params["fechaMandamiento"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Calc2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/calcIntereses.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular2(date('Y-m-d'),0);
//exit();
$result["total"]=$recalcular->getSuma();;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Enviar_Oficios($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $pageObject;
global $dal;
include_once (getabspath("classes/actuacionAction.php"));
include_once (getabspath("classes/calcIntereses.php"));
include_once (getabspath("plantillaGCC.php"));

//print_r($params["keys"]);
//exit();
function mergeDocx($docxFiles, $output) {
    $outputZip = new ZipArchive;
    if ($outputZip->open($output, ZipArchive::CREATE) !== TRUE) {
        exit("No se puede abrir el archivo de salida <$output>\n");
    }

    // Copiar archivos del primer DOCX al archivo de salida
    $zip1 = new ZipArchive;
    if ($zip1->open($docxFiles[0]) === TRUE) {
        for ($i = 0; $i < $zip1->numFiles; $i++) {
            $file = $zip1->getNameIndex($i);
            $outputZip->addFromString($file, $zip1->getFromName($file));
        }

        // Fusionar document.xml del primer archivo
        $doc1 = new DOMDocument;
        $doc1->loadXML($zip1->getFromName('word/document.xml'));
        $zip1->close();
    } else {
        exit("No se puede abrir el archivo DOCX: " . $docxFiles[0] . "\n");
    }

    // Procesar los archivos restantes
    for ($j = 1; $j < count($docxFiles); $j++) {
        $zip = new ZipArchive;
        if ($zip->open($docxFiles[$j]) === TRUE) {
            // Crear un salto de página antes de agregar el nuevo documento
            $paragraph = $doc1->createElement('w:p');
            $run = $doc1->createElement('w:r');
            $br = $doc1->createElement('w:br');
            $br->setAttribute('w:type', 'page');
            $run->appendChild($br);
            $paragraph->appendChild($run);
            $body1 = $doc1->getElementsByTagName('body')->item(0);
            $body1->appendChild($paragraph);

            // Fusionar document.xml del archivo actual
            $doc2 = new DOMDocument;
            $doc2->loadXML($zip->getFromName('word/document.xml'));
            $body2 = $doc2->getElementsByTagName('body')->item(0);

            foreach ($body2->childNodes as $child) {
                $node = $doc1->importNode($child, true);
                $body1->appendChild($node);
            }

            // Copiar todos los archivos del DOCX al archivo de salida, excepto document.xml
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $file = $zip->getNameIndex($i);
                if ($file !== 'word/document.xml') {
                    $outputZip->addFromString($file, $zip->getFromName($file));
                }
            }

            $zip->close();
        } else {
            exit("No se puede abrir el archivo DOCX: " . $docxFiles[$j] . "\n");
        }
    }

    // Guardar el document.xml fusionado en el archivo de salida
    $outputZip->addFromString('word/document.xml', $doc1->saveXML());
    $outputZip->close();
    //echo "Documentos unificados en $output\n";
}
$contData=0;
$contData1=0;
$contSigob=0;
//print_r($params["keys"]);
//se recorren los procesos seleccionados para registrar los procesos en Correspondencia Masiva
while ($contData1<count($params["keys"])){
$numeroP=$params["keys"][$contData1]["Numero"];
$oficioId=$params["keys"][$contData1]["OficioId"];
$fechaAc=date('Y-m-d');
$observaciones='CORRESPONDENCIA MASIVA - Persuasivo';
$userId=$_SESSION["UserId"];
//echo "Numero de Procesos: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE Numero='".$numeroP."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
//echo "proceso:".$procesoId." Correspondencia:".$oficioId." usuario:".$userId." Observaciones:".$observaciones;
//print_r($params["keys"]);
$rs2=DB::Exec("INSERT INTO CorrespondenciaMasiva(fecha,proceso,correspondencia,usuario,enviado,observaciones,radicado) VALUES (GETDATE(),".$procesoId.",".$oficioId.",'".$userId."',0,'".$observaciones."','')");
				if ($rs2) {
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insert into a correspondenciasMasivas " . DB::LastError();
					 exit();
				}
$contData1++;
}
//Se recorren los procesos seleccionados para enviar correspondencia
while ($contData<count($params["keys"])){//SE OBTIENEN LA VARIABLES PARA CONUSMIR LOS METODOS DE LA API SIGOBIUS Y VARIABLES PARA TRAMITAR LAS VALIDACIONES, INSERT Y UPDATE
$idCorres=0;

$numeroP=$params["keys"][$contData]["Numero"];
$oficio=$params["keys"][$contData]["Oficio"];
$fechaAc=date('Y-m-d');
$observaciones='CORRESPONDENCIA MASIVA - Persuasivo';
$userId=$_SESSION["UserId"];
//echo "Numero de Procesos: ".$numProceso;
$response=DB::Query("SELECT * FROM Procesos WHERE Numero='".$numeroP."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$procesoId=$date["ProcesoId"];
					$abogadoId=$date["AbogadoId"];
				}
$response=DB::Query("SELECT * FROM Oficios WHERE Oficio='".$oficio."'");
		while( $date = $response->fetchAssoc() )
				{
					//$procesoId=$date["ProcesoId"];
					$oficioId=$date["OficioId"];
				}
//echo "Valor de i al ingresar".$contData;
//$data = $pageObject->getMasterRecord();
$response2=DB::Query("SELECT * FROM CorrespondenciaMasiva WHERE proceso=".$procesoId." AND enviado=1 AND correspondencia=".$oficioId." AND CAST(fecha AS DATE) ='".$fechaAc."'");
		while( $date = $response2->fetchAssoc() )
				{
				 $idCorres=$date["id"];
					//$abogadoId=$date["AbogadoId"];
				}
if (!empty($idCorres)) {
				 //$result["Err"]=1;
				 //$result["numProceso"]=$numProceso;
				 //$result["nameCorrespondencia"]=$nameCorrespondencia;
        //echo "Saltando el número 3\n";
        $contData++; // Incrementar manualmente para evitar bucle infinito
        continue;
}
//echo "El AbogadoId del proceso es: ".$data["AbogadoId"];
$response=DB::Query("SELECT ISNULL(ActuacionId,0) AS ActuacionId FROM Oficios WHERE OficioId=".$oficioId);
		while( $date = $response->fetchAssoc() )
				{
					$actuacionId=$date["ActuacionId"];
				}
$response=DB::Query("SELECT * FROM Empresas WHERE EmpresaId=1");
		while( $date = $response->fetchAssoc() )
				{
					$fechaCierre=$date["Cierre"];
				}
$fechaCierreDT=new DateTime($fechaCierre);
$desde = clone $fechaCierreDT; // Clonamos el objeto para no modificar la original
$desde->modify('+1 day'); // Añadir 1 día
$hasta = clone $desde; // Clonamos nuevamente para modificar la fecha
$hasta->modify('+1 month'); // Añadir 1 mes
$hasta->modify('-1 day');   // Restar 1 día
$desde=$desde->format('Y-m-d'); //SE calcula fecha desde
$hasta=$hasta->format('Y-m-d'); //SE calcula fecha Hasta
$fecha=now();
$response=DB::Query("SELECT Salario FROM Salarios WHERE (Ano=YEAR('".$hasta."'))");
		while( $date = $response->fetchAssoc() )
				{
					$minimoMnesual=$date["Salario"];
				}

$response=DB::Query("SELECT Intereses,ISNULL(EtapaId,0) as EtapaId, ISNULL(EstadoId,0) as EstadoId, ISNULL(MotivoId,0) as MotivoId,(CASE
                               WHEN EstadoId = 6
                                    AND MotivoId = 1
                               THEN 1
                               ELSE 0
                           END) as TermPago FROM Actuaciones WHERE ActuacionId=".$actuacionId);
		//print_r($actuacionId);
		while( $date = $response->fetchAssoc() )
				{
					$etapaId=$date["EtapaId"];
					$estadoId=$date["EstadoId"];
					$motivoId=$date["MotivoId"];
					$terminacionPago=$date["TermPago"];
					$flagIntereses=$date["Intereses"];
				}
$consulta = DB::Query("SELECT Despacho,Codificador FROM Abogados where AbogadoId=".$abogadoId);
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            $despacho=$date["Despacho"];
            $codificador=$date["Codificador"];
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        };
$consulta=DB::Query("SELECT  D.Despacho AS 'Despacho', 
        Juez AS 'DespachoJuez',
        Direccion AS 'DespachoDireccion',
        Correo AS 'DespachoCorreo',
        IIF (D.juez=null,'Doctor','Doctora') AS 'Doctor'
        FROM Despachos D
        INNER JOIN Procesos C ON C.DespachoId = D.DespachoId
        WHERE ProcesoId =".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $despachoJuez=$date["DespachoJuez"];
        }
$consulta=DB::Query("SELECT ISNULL(OficioIdRequisito, 0) as OficioIdRequisito,* FROM Oficios WHERE OficioId=".$oficioId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$asunto=$date["Oficio"];
						$flagSigob=$date["Sigobius"];
						$oficReq=$date["OficioIdRequisito"];
        }
$consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["ObligacionInicial"]+$date["CostasInicial"]+$date["InteresesInicial"];
						 $sancionadoId=$date["SancionadoId"];
						 $competenciaId=$date["CompetenciaId"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
						 $prescripcion=$date["Dias"];
						 $terminacion=$date["Terminacion"];
						 $traslado=$date["Traslado"];
						 $error=$date["Error"];
						 $carteraTipoId=$date["CarteraTipoId"];
        }
$consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId."");
        while( $date = $consulta->fetchAssoc() )
				{
            $saldo=$date["Saldo"];
						 $obligacionPv1=$date["Obligacion"];
						 $interesesPv1=$date["Intereses"];
						 $costasPv1=$date["Costas"];
						 $estadoAct=$date["EstadoId"];
						 $incumplimiento=$date["Incumplimiento"];
						 $acuerdo=$date["Acuerdo"];
        }
$consulta=DB::Query("SELECT SuspensionId
            FROM suspensiones
            WHERE CONVERT(DATE, GETDATE()) BETWEEN Desde AND Hasta");
        while( $date = $consulta->fetchAssoc() )
				{
						$suspensionId=$date["SuspensionId"];
        }
if ($suspensionId==''){
	$suspensionTerm=0;
}
else{
	$suspensionTerm=1;
}
$consulta=DB::Query("SELECT * FROM Sancionados WHERE SancionadoId=".$sancionadoId."");
        while( $date = $consulta->fetchAssoc() )
				{
						$sancionado=$date["Sancionado"];
        }
$consulta=DB::Query("SELECT dbo.Money2Text(".$obligacion.") Obligacion, dbo.Money2Text(".$obligacionTotal.") obligacionTotal");
        while( $date = $consulta->fetchAssoc() )
				{
            $obligacion=$date["Obligacion"];
						 $obligacionTotal=$date["obligacionTotal"];
        }
if ($oficReq!=0){
	$consulta=DB::Query("SELECT * FROM Correspondencias WHERE OficioId=".$oficReq." AND ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioIdR=$date["OficioId"];
        }
	if ($oficioIdR==''){
		$consulta=DB::Query("SELECT * FROM Oficios WHERE OficioId=".$oficReq);
        while( $date = $consulta->fetchAssoc() )
				{
           $oficioR=$date["Oficio"];
        }
			echo "<script>alert('Para generar este oficio es necesario haber generado el oficio ".$oficioR." con anterioridad.')</script>";
			return false;
	}
}
		$consulta=DB::Query("SELECT TOP 1 Correspondencias.Fecha as Fecha,* 
		FROM Correspondencias
		INNER JOIN Oficios ON Oficios.OficioId=Correspondencias.OficioId
		where Oficios.Oficio like '_PERSUASIVO%' and ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
           $fechaPersu=$date["Fecha"];
        }
//SE REALIZAN VALIDACIONES BASADOS EN LAS VARIABLES OBTENIDAS
if ($oficioId==1105 || $oficioId==4328){
	$fechaPersu=new DateTime($fechaPersu);
	$fechaActual=new DateTime(now());
	// Agregar 15 días
	$fechaPersu->modify('+15 days');
	//echo "Valor fecha format: ".$fechaPersu->format('Y-m-d')." y el valor de la fecha actual=".$fechaActual->format('Y-m-d');
	if ($fechaActual<=$fechaPersu){
		echo "<script>alert('Recordar que el Oficio Resolución Mandamiento de Pago debe ser asociado despues de 15 días del Oficio Persuasivo')</script>";
		//return false;
	}
}
if ($estadoAct==6 && $suspensionTerm==1){ // No puede genera Terminación del Proceso porque estamos en Suspensión de Términos
	echo "<script>alert('Este proceso no se puede TERMINAR porque aún estamos en SUSPENSIÓN DE TÉRMINOS.')</script>";
	return false;	
}
if ($incumplimiento=='NULL' && $actuacionId==1049){ //Anulación de Incumplimiento de Acuerdo de Pago
	echo "<script>alert('No se puede ANULAR EL INCUMPLIMIENTO DE ACUERDO DE PAGO porque el proceso no tiene INCUMPLIMIENTO DE ACUERDO DE PAGO..')</script>";
	return false;	
}
if ($acuerdo=='NULL' && ($actuacionId==1056 || $actuacionId==1057)){ //Reversión de Acuerdo de Pago
	echo "<script>alert('No se puede REVERSAR EL ACUERDO DE PAGO porque el proceso NO TIENE ACUERDO DE PAGO.')</script>";
	return false;	
}
if ($terminacionPago==1 && ($obligacionPv1+$interesesPv1+$costasPv1)-$minimoMnesual >0 ){ 
	echo "<script>alert('Este proceso no se puede TERMINAR POR PAGO porque aún tiene saldo pendiente.')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($estadoAct==6 && $actuacionId!=1033){ // TERMINADO Y NO SE ESTA REVOCANDO LA TERMINACION
	$consulta=DB::Query("SELECT Estados.Estado
                            FROM Estados
                                 INNER JOIN Procesos ON Estados.EstadoId = Procesos.EstadoId
                            WHERE Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$estado=$date["Estado"];
        }
	echo "<script>alert('No se puede cambiar el estado porque el proceso esta ".$estado."')</script>";
	return false;	
}
if ($actuacionId==25 && $prescripcion>0){ //Aún no termina por prescripción
	echo "<script>alert('Este proceso no se puede TERMINAR POR PRESCRIPCIÓN porque aún no se cumple el período.')</script>";
	return false;	
}
if ($actuacionId==14 && $motivoId==11 && $competenciaId=='NULL'){ //TRASLADO DE PROCESOS (Termina el proceso por traslado y lo crea en la nueva sucursal (competencia))
		echo "<script>alert('El proceso no se puede trasladar porque no se le ha asignado la COMPETENCIA.')</script>";
		return false;
}
if ($actuacionId==1038 && $motivoId==14){ //TRASLADO DE CARTERA PRESCRITA A CARTERA ACTIVA (Termina el proceso DE CARTERA PRESCRITA y lo crea en la CARTERA ACTIVA)
		$consulta=DB::Query("SELECT CarteraTipos.Prescrita
                    FROM Procesos
                         INNER JOIN CarteraTipos ON Procesos.CarteraTipoId = CarteraTipos.CarteraTipoId
                    WHERE(Procesos.ProcesoId =".$procesoId);
        while( $date = $consulta->fetchAssoc() )
				{
						$carteraPres=$date["Prescrita"];
        }
		if($carteraPres==0){
			echo "<script>alert('El proceso no se puede trasladar de cartera PRESCRITA porque esta en una cartera ACTIVA.')</script>";
			return false;
		}
}
/*
if ($actuacionId==20){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		echo "<script>alert('El ACUERDO DE PAGO solamente se puede hacer por el PROCEDIMIENTO DE ACUERDO DE PAGO.')</script>";
		return false;
}
*/
if ($estadoAct==5){
	$actuacionIds = [1035, 1037, 1031, 1044, 1045, 1051];
	$oficioIds = [4453, 4454, 4480, 4490, 3270, 4436, 4438, 4557];
	if (!in_array($actuacionId, $actuacionIds) && !in_array($oficioId, $oficioIds)){
		echo "<script>alert('A un proceso INTERRUMPIDO solo se le pueden hacer actuaciones/oficios de MEDIDAS CAUTELARES o BÚSQUEDA DE BIENES.')</script>";
		return false;
	}
}
if ($estadoId==4 || $estadoId==5){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==6){
		echo "<script>alert('El proceso no se puede SUSPENDER ó INTERRUMPIR porque está TERMINADO.')</script>";
		return false;
	}
}
$actuacionIds = [1031, 1044, 1051];
if ($estadoId==2 && in_array($actuacionId, $actuacionIds)){ //SE HABILITA PROVISIONALMENTE POR SOLICITUD DE DON LUIS ALBERTO 25-04-2020 -- Se deshabilitó el 05 ene 2023 para el NUEVO PROCESO DE ACUERDOS DE PAGO
		if ($estadoAct==4 || $estadoAct==5){
		echo "<script>alert('No se puede revocar la SUSPENSIÓN/INTERRUPCIÓN porque el proceso no está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
if (($estadoAct==5 || $estadoAct==4) && $sancionadoId!=292340){
	if ($estadoId==4 || $estadoId==5){
		echo "<script>alert('El proceso no se puede SUSPENDER/INTERRUMPIR porque está SUSPENDIDO/INTERRUMPIDO.')</script>";
		return false;
	}
}
//echo "Valor de flag: ".$flagSigob;
//return false;
if ($flagSigob==0){
	$_SESSION["Radicado"]='';
	$_SESSION["token"]='';
	$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					//echo ""
					$rs2=DB::Exec("INSERT INTO Correspondencias(ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicado."','".$_SESSION["UserId"]."','".$_SESSION["AbogadoId"]."')");
				if ($rs2) {
						$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicado."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.";
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//echo '<script>alert("Response Oficio->Process true")</script>';
					//return true;
				}
				else{
					//echo '<script>alert("Response Oficio->Process false")</script>';
					//return false;
				}
}
else{
//echo "Abogado Actual: ".$abogadoActual.", Abogado de Proceso:".$abogadoId;
//exit();
  //CONSUMINOS EL METODO DE NuevaCorrespondencia de la API SOAP
//la url de la conexion a Sigob
$url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//$url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/NuevaCorrespondencia';
//Parametro a enviar para consumir el metodo
$data = array(
    'Despacho' => $despacho,
    'Codificador' => $codificador,
    'SoloEditorExterno' => '1',
    'Contrasena' => '448B8890'
    // ... Agrega más parámetros según sea necesario
);

// Convertir los datos a formato de cadena
$postData = http_build_query($data);

// Configurar opciones de cURL
$options = array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $postData,
);

// Inicializar cURL y configurar opciones
$curl = curl_init();
curl_setopt_array($curl, $options);

//NO VALIDAR SI REQUIERE SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Realizar la solicitud cURL y obtener la respuesta
$response2 = curl_exec($curl);
// Verificar errores
if (curl_errno($curl)) {
    echo 'Error al realizar la solicitud: ' . curl_error($curl);
		return false;
}
else{

// Imprimir la respuesta del servicio web
//echo "<br>Valor del metodo NuevaCorrespondencia: ".$response2."<br>";
$xml = new SimpleXMLElement($response2);
$radicadoF=strval($xml[0]);
$_SESSION["Radicado"]=$radicadoF;
////////
//CONSUMINOS EL METODO DE ActualizarCorrespondencia de la API SOAP
$curl = curl_init();
//SE LLAMA LA FUNCION LA CUAL TOMA LA PLANTILLA Y REEMPLAZA SUS VARIABLES, CREANDO UN NUEVO .DOCX
 $objeto=new plantillas($procesoId,$oficioId,$obligacion,$obligacionTotal,$radicadoF);
 $objeto->funcGlobal();
//$rutaArchivo = 'Plantilla_1097.docx';
$noDirecciones=$objeto->getNoDirecciones();
if ($noDirecciones>1){
  //echo "Numero de direcciones: ".$noDirecciones.var_dump($noDirecciones);
$noDirecciones=$noDirecciones-1;//porque las plantillas son XXX_0
//$docxFiles = array();
$docxFiles=[];
for ($i=0;$i<=$noDirecciones;$i++){
	$docxFiles []='templates_GCC/Archivo_'.$procesoId.'_'.$oficioId.'_'.strval($i).'.docx';
	//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_'.strval($i).'.docx';
}
//print_r($docxFiles);
//$docxFiles = array('templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx','templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx');
$salida = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
mergeDocx($docxFiles, $salida);
}
else{
  $rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx'; 
}
$rutaArchivo = 'templates_GCC/ArchivoF_'.$procesoId.'_'.$oficioId.'.docx';
$bytesDocumento = file_get_contents($rutaArchivo);
$base64 = base64_encode($bytesDocumento);
//$rutaArchivo = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_0.docx';
//$rutaArchivo2 = 'templates_GCC/Archivo_'.$values["ProcesoId"].'_'.$values["OficioId"].'_1.docx';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
	//CURLOPT_URL => 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <ActualizarCorrespondencia xmlns="http://tempuri.org/">
      <CodigoRegistro>'.$radicadoF.'</CodigoRegistro>
      <Asunto>'.$asunto.'</Asunto>
      <Tipo>2</Tipo>
      <GradoReserva>0</GradoReserva>
      <Prioridad>0</Prioridad>
      <MedioEnvio>0</MedioEnvio>
      <EsperaRespuesta>N</EsperaRespuesta>
      <FechaEstimadaRespuesta>'.now().'</FechaEstimadaRespuesta>
      <ResultadoGestion>-1</ResultadoGestion>
      <Objetivos>11</Objetivos>
      <FormatoDocumento>1</FormatoDocumento>
      <Documento>'.$base64.'</Documento>
      <NombreDocumento>Prueba wsAPICorrespondencia.docx</NombreDocumento>
      <DocumentoTexto>Texto sin formato del documento</DocumentoTexto>
      <Firmante>'.$despacho.'</Firmante>
      <Estado>0</Estado>
      <DespachoDestino></DespachoDestino>
      <Vocativo>-1</Vocativo>
      <Apellido>'.$sancionado.'</Apellido>
      <Nombre>'.$despachoJuez.'</Nombre>
      <NumeroDocumento>12345</NumeroDocumento>
      <Sexo>0</Sexo>
      <FechaNacimiento>1977/01/01</FechaNacimiento>
      <Institucion>-1</Institucion>
      <Cargo>-1</Cargo>
      <Departamento>-1</Departamento>
      <Telefono>09811111231</Telefono>
      <CorreoElectronico>alelamonaca@gmail.com</CorreoElectronico>
      <Calle>Mi calle</Calle>
      <Ciudad>Asunción</Ciudad>
      <ProvinciaDepartamento>Central</ProvinciaDepartamento>
      <Pais>Paraguay</Pais>
      <TipoDireccion>1</TipoDireccion>
      <CodigoRegistroPrecedente></CodigoRegistroPrecedente>
      <EsRespuesta>0</EsRespuesta>
      <Contrasena>448B8890</Contrasena>
    </ActualizarCorrespondencia>
  </soap12:Body>
</soap12:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml',
    'Cookie: ASP.NET_SessionId=4uvpkyerhy21mcwghvyqfuw0'
  ),
));

//NO VERIFICAR CERTICADO SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($curl);
if ($response == false) {
    echo 'Error en la solicitud cURL: ' . curl_error($curl);
		return false;
} else {
//echo '<br>Respuesta de la API Metodo Actualizar Correspondencia: ' . $response;
$xml = new SimpleXMLElement($response);
    // Definir el namespace
    $namespaces = $xml->getNamespaces(true);
    $soapNamespace = $namespaces['soap'];

    // Acceder al cuerpo del SOAP
    $body = $xml->children($soapNamespace)->Body;

    // Acceder al namespace específico del cuerpo
    $responseNamespace = $namespaces[''];
    $token = $body->children($responseNamespace)->ActualizarCorrespondenciaResponse->ActualizarCorrespondenciaResult;
		$token=strval($token);
		$_SESSION["token"]=$token;
    // Mostrar el resultado
    //echo "Resultado: " .$token;
		//var_dump($token);
		//echo "Result: ".$token ;
		$ultimosCaracteres = substr($token, -2);
    //echo "<script>alert('El codigo obtenido es el: ".$radicadoF." y el valor del metodo ActualizarCorrespondencia es: ".$token."')</script>";
    // Comparar con "=="
    if ($ultimosCaracteres === "==") {
				curl_close($curl);
				$oficio=new coreOficios($actuacionId,$procesoId,now(),$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId,$flagIntereses);
				$response=$oficio->process();
				if ($response==true){
					//echo '<script>alert("Response Oficio->Process true")</script>';
					$rs2=DB::Exec("INSERT INTO Correspondencias (ProcesoId,OficioId,Fecha,Sigobius,Observaciones,Resolucion,Codigo,Radicado,UserId,AbogadoId) VALUES (".$procesoId.",".$oficioId.",GETDATE(),".$contSigob.",'".$observaciones."','".$resolucion."','".$token."','".$radicadoF."','".$_SESSION["UserId"]."','".$abogadoId."')");
				if ($rs2) {
								$rs2=DB::Exec("UPDATE CorrespondenciaMasiva SET enviado=1,radicado='".$radicadoF."' WHERE proceso=".$procesoId." and correspondencia=".$oficioId." and enviado=0 and usuario='".$userId."' and CAST(fecha AS DATE) = CAST(GETDATE() AS DATE)");
						if ($rs2) {
							 //echo "La consulta se realizó correctamente.";
						} 
						else {
							 // Hubo un error en la ejecución de la consulta
							 echo "Error al ejecutar el Update en enviado Oficio Sigobius: " . DB::LastError();
							 exit();
						}
					 //echo "La consulta se realizó correctamente.".$rs2;
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar la consulta 1: " . DB::LastError();
					 exit();
				}
					//return true;
				}
				else{
					echo '<script>alert("El proceso Numero: '.$numProceso.' presento un problema con el envio de Correspondencias: "'.$response.')</script>';
					return false;
				}
    } elseif($ultimosCaracteres=='') {
					echo "<script>alert('Error con el Proceso Numero: ".$numProceso.". El codigo obtenido es el: ".$radicadoF." pero no se logro conectividad, intentelo de nuevo')</script>";
					return false;
				}
				else{
				 echo "<script>alert('Error con el Proceso Numero: ".$numProceso.".El codigo obtenido es el: ".$radicadoF." y se presento un error: ".$token.", solucionarlo o de no ser solucionable, intentelo mas tarde')</script>";
        return false;
    }
}
}
/*
else{
	echo "<script>alert('El Despacho resgistrador no esta autorizado a indicar como firmante al despacho firmante')</script>";
	return false;
}	
*/
}
$contSigob++;
//echo "Valor contador Antes:".$contData."Contador Sigob".$contSigob;
$contData++;
//echo "Valor contador i:".$contData;
}
$result["response"]="OK";;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Edit_Pago($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
//print_r($data);
$params["PagoId"]=$data["PagoId"];
$pagoId=$data["PagoId"];

//$masterData["ProcesoId"];
$consulta=DB::Query("SELECT * FROM Pagos1 WHERE PagoId=".$pagoId);
        while( $date = $consulta->fetchAssoc() ){
						$pago=$date["Pago"];
						$procesoId=$date["ProcesoId"];
        }
$pago=number_format($pago, 0, ',', '.');
$result["pago"]=$pago;
$result["procesoId"]=$procesoId;
$result["userName"]=$_SESSION["UserId"];
$result["pagoId"]=$pagoId;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Delete_Pago($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/calcIntereses.php"));

$data = $button->getCurrentRecord();
//print_r($data);
$params["PagoId"]=$data["PagoId"];
$pagoId=$data["PagoId"];
$procesoId=$data["ProcesoId"];
$rs5 = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
while( $date = $rs5->fetchAssoc() )
{
	$obligacionAnt=$date["Obligacion"];
	$interesesAnt=$date["Intereses"];
	$costasAnt=$date["Costas"];
	$recaudoAnt=$date["Recaudo"];
}
$rs5 = DB::Query("SELECT * FROM Pagos1 WHERE PagoId=".$pagoId);
while( $date = $rs5->fetchAssoc() )
{
	$pagoObli=$date["PagoObli"];
	$pagoInte=$date["PagoInte"];
	$pagoCost=$date["PagoCost"];
	$pago=$date["Pago"];
}
$recaudoNew=$recaudoAnt-$pago;
$obliNew=$obligacionAnt+$pagoObli;
$inteNew=$interesesAnt+$pagoInte;
$costasNew=$costas+$pagoCost;

//echo "Value: ".$recaudoNew." --- ".$obliNew." --- ".$inteNew."------".$costasNew
DB::Delete("Pagos1", "PagoId=".$pagoId."" );

$recalcular=new reliquidacion($procesoId);
$recalcular->Calcular(date('Y-m-d'),0,1);

$updatePro=DB::Exec("UPDATE Procesos set Recaudo=".$recaudoNew." where ProcesoId=".$procesoId);
	//$this->resultUpdate=$resultado["response"];
if ($updatePro){

}
else{
	echo "Error en el update, relacionado con el pago en procesos".DB::LastError();
	exit();
}
$result["total"]=$updatePro;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Confirmar_Cambio_Contrasena($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
				 // Capturar el valor enviado desde el formulario (si es un campo personalizado)

			$tokenpasword = $_SESSION["resettoken"];
			 if($tokenpasword == ''){
				$password = $params["password"];
			 }else{
				$password = $tokenpasword;
			 }
			 
			 $newpassword =  $params["newpassword"];
			 $confirmnewpass = $params["confirmnewpass"];

			 // Obtener el nombre de usuario desde la sesión actual
			 $username = $_SESSION["UserNameF"];

			 // Consultar la contraseña almacenada en la base de datos
			 $sql = "SELECT password FROM [UsuGCC-_users] WHERE username = '$username'";
			 $rs = CustomQuery($sql);

			 if ($data = db_fetch_array($rs)) {
				  $hashFromDB = $data['password']; // Hash almacenado en la base de datos
				
				  // Verifica si la contraseña proporcionada coincide con el hash almacenado
				  if (password_verify($password, $hashFromDB) || $password == $tokenpasword) {
							
						// Contraseña válida, asigna a $oldpassword
						//$oldpassword = $password;
						//echo "Contraseña actual verificada correctamente.";
						//return true; // Permite el cambio de contraseña
						if($newpassword == $confirmnewpass){
							$result["txt"] = 'vedadero';
							$result["diferente"] = 'falso';
							
							$hashedPassword = password_hash($newpassword, PASSWORD_BCRYPT); // Puedes reemplazar PASSWORD_BCRYPT
							//$sqlInsert = "INSERT INTO [UsuGCC-_users] (username,email,fullname,active,password) VALUES ('$username','$email','$fullname',1,'$hashedPassword')";
							$table = "[UsuGCC-_users]"; // Nombre de la tabla
							$data = array("password" => $hashedPassword); // Datos a actualizar
							$where = "username = '".$username."'"; // Condición

							DB::Update($table, $data, $where);
							
							$result["cambioExitoso"] = 'hecho';
							$fechactual = date('Y-m-d');
							/*$fechactual->modify("+7 day");
							$fechactual->format("Y-m-d");*/
							//$fechactual = "2024-02-03"; // Ejemplo de fecha en formato string
							$fechactual = new DateTime($fechactual);
							$fechactual->modify("+60 days");
							$fecha_modificada = $fechactual->format("Y-m-d"); 
							//echo $fechactual->format("Y-m-d");

							
							$data2 = array();
							$data2["reset_date"] = $fecha_modificada; // Formato correcto para la BD
							$where2 = "username = '".$username."'";

							// Ejecutar la actualización y capturar el resultado
							$success = DB::Update("[UsuGCC-_users]", $data2, $where2);

							unset($_SESSION["resettoken"]);
							unset($_SESSION["UserNameF"]);
							session_destroy(); // Destruye la sesión actual

							if (!$success) {
								 echo "Error al actualizar reset_date. El valor enviado es: " . json_encode($data2);
							} else {
								 //echo "Fecha de reinicio actualizada correctamente. La fecha es: ".$fecha_modificada;
							}

							$data3 = array();
							$data3["reset_token"] = ''; // Formato correcto para la BD
							$where3 = "username = '".$username."'";
							
							// Ejecutar la actualización y capturar el resultado
							$success3 = DB::Update("[UsuGCC-_users]", $data3, $where3);

							if (!$success3) {
								 echo "Error al actualizar token. El valor enviado es: " . json_encode($data3);
							} else {
								 //echo "TOKEN actualizada correctamente.";
							}

							//echo "Se realiza cambio satisfactoriamente";
							
			
						}else{
							$result["txt"] = 'vedadero';
							$result["diferente"] = 'verdadero';
							//echo "Contraseña Nueva es diferente a Confirmar Contraseña valor nueva".$newpassword."valor confirmar  ".$confirmnewpass;
						}

				  } else{
						// Contraseña no válida
						//echo "La contraseña ingresada no coincide con la almacenada.";
						$result["txt"] = 'falso';
						
						//return false; // Bloquea el cambio de contraseña
				  }
			 } else {
				  // Usuario no encontrado en la base de datos
				  echo "Usuario no encontrado.";
				  //return false;
			 };
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Consulta_BDME($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['BDME_doc_sancionado_consulta'] = $params['BDME_doc_sancionado_consulta'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Calc($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	include_once (getabspath("classes/calcIntereses.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular3(date('Y-m-d'),0);
//exit();;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Gestion_imprimir($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar_gestion_medidas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$_SESSION['Gestion_medidas'] = $params['Gestion_medidas'].'-01';// Put your code here.
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Buscar_Procesos_Sin_Medidas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$username = $_SESSION["UserNameF"];

$carterasSeleccionadas = $params["selectedCarteras"];

if (!empty($carterasSeleccionadas)) {
    foreach ($carterasSeleccionadas as $index => $carteraId) {
        if ($index < 5) { // Limitar a las primeras 5 carteras
            $_SESSION["cartera" . ($index + 1)] = $carteraId; // Almacenar en variables de sesión
            echo "Cartera seleccionada: " . htmlspecialchars($carteraId) . "<br>";
        }
    }
} else {
    //echo "No se seleccionó ninguna cartera.";
}

$seccionalesSeleccionados = $params["selectedSeccionales"];

if (!empty($seccionalesSeleccionados)) {
    foreach ($seccionalesSeleccionados as $index2 => $seccionalId) {
        if ($index2 < 25) { // Limitar a las primeras 5 carteras
            $_SESSION["seccional" . ($index2 + 1)] = $seccionalId; // Almacenar en variables de sesión
            echo "Seccional seleccionado: " . htmlspecialchars($seccionalId) . "<br>";
        }
    }
} else {
    //echo "No se seleccionó ninguna Seccional.";
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Clean($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
				unset($_SESSION['cartera_id_report']);
				unset($_SESSION['seccional_id_report']);
				unset($_SESSION['cartera1']);
			unset($_SESSION['cartera2']);
			unset($_SESSION['cartera3']); 
			unset($_SESSION['cartera4']);
			unset($_SESSION['cartera5']);
			unset($_SESSION['seccional1']);
			unset($_SESSION['seccional2']);
			unset($_SESSION['seccional3']); 
			unset($_SESSION['seccional4']);
			unset($_SESSION['seccional5']);
			unset($_SESSION['seccional6']);
			unset($_SESSION['seccional7']);
			unset($_SESSION['seccional8']); 
			unset($_SESSION['seccional9']);
			unset($_SESSION['seccional10']);
			unset($_SESSION['seccional11']);
			unset($_SESSION['seccional12']);
			unset($_SESSION['seccional13']); 
			unset($_SESSION['seccional14']);
			unset($_SESSION['seccional15']);
			unset($_SESSION['seccional16']);
			unset($_SESSION['seccional17']);
			unset($_SESSION['seccional18']); 
			unset($_SESSION['seccional19']);
			unset($_SESSION['seccional20']);
			unset($_SESSION['seccional21']);
			unset($_SESSION['seccional22']);
			unset($_SESSION['seccional23']); 
			unset($_SESSION['seccional24']);
			unset($_SESSION['seccional25']);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
function fieldEventHandler_Tipo_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
$result["upper"] = strtoupper( $params["value"] );
$result["cantidad"] = $params["cantidad"];
if ($result["upper"]==1){
	$valorF=1;
	//echo ("La seleccion es pesos");
}
elseif($result["upper"]==2){
	//echo ("La seleccion es Salaraios");
	//echo "El valor del año es: ".$params["valorAnno"];
	$rs = DB::Select("Salarios", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Salario"];
		}
	//echo "valor del salario: ".$valorFinal;
	//$record->setValue("CampoA", $nuevoValor);
}
elseif($result["upper"]==3){
	//echo ("La seleccion es UVTs");
	$rs = DB::Select("Uvts", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvt"];
		}
//echo "valor de la obligacion".$valorFinal
}
else{
	//echo ("La seleccion es Uvbs");
	$rs = DB::Select("Uvbs", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvb"];
		}
}
$result["valor"]=$params["cantidad"]*$valorF;
$_SESSION["Obligacion"]=$result["valor"];
//echo "valor de la obligacion".$valorFinal;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Tipo_event1( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$result["Value"]=$params["cantidad"];
$result["upper"] = strtoupper( $params["cantidad"] );
$result["tipo"] = $params["tipo"];
if ($params["tipo"]==1){
	$valorF=1;
	//echo ("La seleccion es pesos");
}
elseif($params["tipo"]==2){
	//echo ("La seleccion es Salaraios");
	//echo "El valor del año es: ".$params["valorAnno"];
	$rs = DB::Select("Salarios", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Salario"];
		}
	//echo "valor del salario: ".$valorFinal;
	//$record->setValue("CampoA", $nuevoValor);
}
elseif ($params["tipo"]==3){
	//echo ("La seleccion es UVTs");
	$rs = DB::Select("Uvts", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvt"];
		}
}
elseif ($params["tipo"]==4){
	//echo ("La seleccion es Uvbs");
	$rs = DB::Select("Uvbs", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvb"];
		}
}
$result["valor"]=$result["upper"]*$valorF;
$_SESSION["Obligacion"]=$result["valor"];
//echo $_SESSION["Obligacion"]=$result["valor"];
//echo "valor de la obligacion".$_SESSION["Obligacion"];;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_cantidadLetras( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:
$result["valor"]=$params["value"];

$formato_cop = '$' . number_format($params["value"], 0, ',', '.');

$result["upper"] =$formato_cop ;
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Remisorio_event_uperrcase( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:
//$result["upper"] = strtoupper( $params["value"] );
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_calcular_diasPlazo( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$fechaEje=$params["valAnnoEj"]."-".$params["valMesEj"]."-".$params["valDiaEj"];
//echo "Fecha Ejecutoria: ".$fechaEje;
$rs=DB::Query("SET DATEFIRST 1;SELECT dbo.CalCDiasHabilesF ('".$fechaEje."', ".$params["value"].") AS fechaPlazo;");
/*
$rs=DB::Query("declare @p2 date
set @p2=''
exec [dbo].[Procesos_FechaPlazo_PCC_F_C] @Ejecutoria='".$fechaEje."',@Dias=".$params["value"].",@Plazo=@p2 output
select @p2 fechaPlazo");
*/
//print_r($consulta);
if ($rs){
while( $data = $rs->fetchAssoc() )
	{
		$fechaPlazo=$data['fechaPlazo'];
	}
//echo "Valor de la Fecha Plazo: ".$fechaPlazo;

// Divide la cadena en fecha y hora
$dateTimeParts = explode(' ', $fechaPlazo);
$datePart = $dateTimeParts[0];

// Divide la parte de la fecha en año, mes y día
$dateComponents = explode('-', $datePart);
$year = $dateComponents[0];
$month = $dateComponents[1];
$day = $dateComponents[2];
$result["anno"]=$year ;
$result["mes"]=intval($month);
$result["dia"]=intval($day);
}
//echo "Año:". $result['anno'];
//echo "Mes:".$result['mes'];
//echo "Día:".$result['dia'];

//echo "<script>alert ('Problema: ".$Errmsg."')";;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Ejecutoria_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$fechaEje=$params["valAnnoEj"]."-".$params["valMesEj"]."-".$params["valDiaEj"];
//echo "Fecha Ejecutoria: ".$fechaEje;
$rs=DB::Query("SET DATEFIRST 1;SELECT dbo.CalCDiasHabilesF ('".$fechaEje."', ".$params["value"].") AS fechaPlazo;");
/*
$rs=DB::Query("declare @p2 date
set @p2=''
exec [dbo].[Procesos_FechaPlazo_PCC_F_C] @Ejecutoria='".$fechaEje."',@Dias=".$params["value"].",@Plazo=@p2 output
select @p2 fechaPlazo");
*/
//print_r($consulta);
if ($rs){
while( $data = $rs->fetchAssoc() )
	{
		$fechaPlazo=$data['fechaPlazo'];
	}
//echo "Valor de la Fecha Plazo: ".$fechaPlazo;

// Divide la cadena en fecha y hora
$dateTimeParts = explode(' ', $fechaPlazo);
$datePart = $dateTimeParts[0];

// Divide la parte de la fecha en año, mes y día
$dateComponents = explode('-', $datePart);
$year = $dateComponents[0];
$month = $dateComponents[1];
$day = $dateComponents[2];
$result["anno"]=$year ;
$result["mes"]=intval($month);
$result["dia"]=intval($day);
}

;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_TramiteId_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	if ($params['value']==3 || $params['value']==4 || $params['value']==5){
	$result["flag"]=1;
}
if($params['value']==1 || $params['value']==5 ){
	$result["flag2"]=1;
}
if($params['value']==2){
	$result["flag3"]=1;
};
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_ConceptoId_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	if ($params['value']==5){
	$result["flag"]=1;
}

;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_PrivadoLibertad_event_click( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	if ($params['value']=='on'){
	$result["flag"]=1;
};
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_DespachoCodificadores( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	include_once (getabspath("classes/abogados_API.php"));
//echo "Valor. ".$params["value"];
//exit();
$abogadoApi=new abogadosApi;
//$despachosActivos=$abogadoApi->despachosActivos(); //llenar la tabla despachosSibog
$despachosActivos=$abogadoApi->codificadoresDespachoProcess($params["value"]);
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Mascara_Recaudos( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$result["upper"] = $params["value"];;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Avaluo_Mascara( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$result["upper"] = $params["value"];;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_SancionadoId_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$sancionadoId = $params["value"];

//echo $sancionadoId;
// Verifica si el ID no está vacío
if (is_numeric($sancionadoId)) {
    // Construir la consulta SQL
    $sql = "SELECT * FROM Sancionados WHERE SancionadoId = '$sancionadoId'";

    // Ejecutar la consulta
    $result1 = DB::Query($sql);

    // Verificar si se obtuvieron resultados
    if (!empty($result1)) {
        // Recorrer los resultados y mostrarlos
        while ($row = $result1->fetchAssoc()) {
            //print_r($row);
						 // Sample:
						 $result["upper"] = strtoupper( $params["value"] );
        }
    } else {

			//return false;

    }
} else {
    //echo "El ID proporcionado está vacío.";
			//return false;
}

;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_SeccionalId_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:
//$result["upper"] = strtoupper( $params["value"] );
$_SESSION["PruebaSeccional"]=$params["value"];
$result["Value"]=$_SESSION["PruebaSeccional"];
echo $result["Value"];
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_Validar_numeros_No_negativos( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:
$result["upper"] = strtoupper( $params["value"] );
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_MaximoPesos_decimales_con_coma( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:
$result["upper"] = strtoupper( $params["value"] );
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>