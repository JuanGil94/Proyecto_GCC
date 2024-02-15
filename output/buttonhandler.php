<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

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
	$result["total"]= DB::DBLookup("select ChequeoId from ChequeosSancionados where ChequeoId=".$params["ChequeoId"]);
$contador=0;
if ($result["total"]!=null){
	$array=array();
	$rs = DB::Query("select * from Chequeos where ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs->fetchAssoc() )
	{
		$seccionalId=$data['SeccionalId'];
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
			 echo "Error al ejecutar la consulta: " . DB::LastError();
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
		//echo "Sancionado Finissshhhhh:".$SancionadoIdFinal;
		$resultado["response"]=DB::Exec("INSERT INTO Procesos (SeccionalId,AbogadoId,Fecha,Numero,DespachoId,SancionadoId,Providencia,Ejecutoria,ConceptoId,EstadoId,EtapaId,Folios,Tipo,Cantidad,Obligacion,Costas,Liquidacion,Dias,Intereses,Recaudo,CalificacionId,Terminacion,MotivoId,Observaciones,Cuotas,Abono,Inicio,VlrCuota,VlrIntereses,Garantia,Radicado,Remisorio,Acuerdo,Incumplimiento,Notificacion,Suspension,Traslado,Error,CarteraTipoId,ConceptoAbogado,Origen,Carpeta,ImportacionId,ActuacionId,ObligacionInicial,CostasInicial,InteresesInicial,MinJusticia,Revocatoria,Mayor,NotificacionValidada,Validado,Seleccionado,CompetenciaId,MinjusticiaId,SeleccionadoPor,Subsanar,NumeroMinjusticia,ProcesoIdOrigen,SeleccionadoFecha,InteresesIniciales,InteresesCalculados,ProcesoIdDestino,RecaudoMinjusticia,RecaudoTerminado,Persuasivo,ObligacionCreacion,InteresesCreacion,CostasCreacion,Plazo,NaturalezaId,TrasladoCartera,CarteraTipoIdOrigen,TrasladoConcepto,ConceptoIdOrigen,AutorizadoPlazo,AutorizadoFecha,AutorizadoPor,Reliquidacion,ChequeoId,VlrCostas,VlrInteresesPlazo) SELECT SeccionalId,AbogadoId,Fecha,".$numProcesoFinal.",DespachoId,".$SancionadoIdFinal.",Providencia,Ejecutoria,ConceptoId,2,1,Folios,Tipo,Cantidad,Obligacion,Costas,NULL,0,0,0,1,NULL,NULL,Observaciones,0,0,NULL,0,0,NULL,Origen,Remisorio,NULL,NULL,NULL,NULL,NULL,NULL,CarteraTipoId,NULL,NULL,NULL,NULL,NULL,Obligacion,Costas,0,MinJusticia,NULL,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,NULL,0,NULL,Obligacion,0,Costas,Plazo,NaturalezaId,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,ChequeoId,0,0 FROM Chequeos WHERE ChequeoId=".$params["ChequeoId"]);
	//echo "Valor de la insercion es: " . $resultado["response"];
		if ($resultado["response"]) {
				DB::Exec("UPDATE Chequeos SET Procesado=1 WHERE ChequeoId=".$params["ChequeoId"]);
				//echo ("<script>alert('Proceso insertado correctamnete')</script>");
			//echo "Se realiza la insercion del Proceso con exito";
		} else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta: " . DB::LastError();
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
							echo "Error al ejecutar la consulta: " . DB::LastError();
								exit();
						}
			}
		}
}   ;
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
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
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
	include_once (getabspath("classes/pruebaJuan.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
$meses = $recalcular->Calcular();
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
$result["txt"] = $params["txt"]." world!";
;
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
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";
include_once (getabspath("plantillaGCC.php"));
//$objeto=new plantillas($params["ProcesoId"]);
//echo "Value ".$params["OficioId"];
$objeto=new plantillas($params["ProcesoId"],$params["OficioId"],$params["obligacionLetras"],$params["obligacionTotalLetras"]);
switch($params["OficioId"]){
	case "1097":
		$log=$objeto->persuasivo();
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
	    ///////METODO DE CONSUMO DE LA API FUNCIONNADO OK POR LA EXTENSION CURL - INICIO
    // URL del servicio web ASMX
    $url = 'https://sigobwebcsj.ramajudicial.gov.co/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDocumentoCorrespondencia';

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
	include_once (getabspath("classes/pruebaJuan.php"));
include_once (getabspath("classes/acuerdoPago.php"));
$recalcular=new reliquidacion($params["ProcesoId"]);
//global $pageObject;
//echo "Valor del Proceso: ".$params["ProcesoId"];
//$data = $pageObject->getMasterRecord(); //deberia devolver la data de de la tabla master, pero devuelve null como si no fuera tabla master y si lo es
//$data = $ajax->getCurrentRecord();
//$result["record"] = $data;
//print_r($data);
$recalcular->CalcularAcuerdo($params["fechaInicial"]);
//$recalcular->Calcular();
$obligacionInicial=$recalcular->obligacionInicial;
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
$acuerdoP=new AcuerdoPagoFinal($params["ProcesoId"]);
//echo "antes del proceso".$result["Total"]."<br>";
$result["Total"]=$acuerdoP->insertAcuerdo();
//echo "despues del Proceso".$result["Total"]."y es un tipo".var_dump($result["Total"]);
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
	/*
include_once (getabspath("classes/upload.php"));
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

print_r($archivo);
$objeto=new Files ($params["ProcesoId"]);
echo $objeto->upload();
*/;
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
else{
	//echo ("La seleccion es UVTs");
	$rs = DB::Select("Uvts", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvt"];
		}
}
$result["valor"]=$params["cantidad"]*$valorF;
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
else{
	//echo ("La seleccion es UVTs");
	$rs = DB::Select("Uvts", "Ano=".$params["valorAnno"]);
	while( $data = $rs->fetchAssoc() )
		{
			$valorF=$data["Uvt"];
		}
}
$result["valor"]=$result["upper"]*$valorF;
//echo "valor de la obligacion".$valorFinal;
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
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>