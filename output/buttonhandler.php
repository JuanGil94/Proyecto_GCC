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

if( $eventId == 'Tipo_event' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Tipo_event( $params );
}
if( $eventId == 'Tipo_event1' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
	fieldEventHandler_Tipo_event1( $params );
}
if( $eventId == 'cantidadLetras' && "dbo.Chequeos" == $table )
{
	require_once("include/chequeos_variables.php");
	$cipherer = new RunnerCipherer("dbo.Chequeos");
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