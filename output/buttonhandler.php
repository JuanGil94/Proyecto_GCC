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
	$result["total"]= DB::Exec("select * from ChequeosSancionados where ChequeoId=".$params["ChequeoId"]);
//echo $result;
if ($result["total"]){
	$rs = DB::Query("select * from Chequeos where ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs->fetchAssoc() )
	{
		$seccionalId=$data['SeccionalId'];
		
		//echo "SeccionalId: ".$seccionalId;
		//echo $data["make"];
	}
	$rs = DB::Query("select * from ChequeosSancionados where ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs->fetchAssoc() )
	{
		$documentoSancionadoC=$data['Documento'];
		//echo $documentoSancionadoC;
		//echo $data["make"];
	}
	$rs = DB::Query("SELECT * FROM Sancionados WHERE Documento='".$documentoSancionadoC."'");
	while( $data = $rs->fetchAssoc() )
	{
		$sancionadoId=$data['SancionadoId'];
		//echo $sancionadoId;
		//echo $data["make"];
	}
	if ($sancionadoId){
    //echo ("El sancionado ya se encuentra registrado");
        }
  else {
    //echo ("El sancionado no se encuentra registrado");
		DB::Exec("INSERT INTO Sancionados (Sancionado,TipoDocumentoId,Documento,Email,Celular,Masculino,Observaciones,Fallecimiento,PrivadoLibertad) SELECT Sancionado,TipoDocumentoId,Documento,Email,NULL,Masculino,Observaciones,NULL,0 FROM ChequeosSancionados WHERE ChequeoId=".$params["ChequeoId"]);
		if ($result) {
    // La consulta se ejecutó con éxito
			 //echo "La consulta se realizó correctamente.";
		} else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta: " . DB::LastError();
			 exit();
		}
		$rs = DB::Query("SELECT * FROM Sancionados WHERE Documento='".$documentoSancionadoC."'");
		while( $data = $rs->fetchAssoc() )
		{
			$sancionadoId=$data['SancionadoId'];
		//echo $data["id"];
		//echo $data["make"];
		}
				}
	$rs = DB::Query("SELECT MAX(Numero) AS Numero FROM Procesos WHERE SeccionalId=".$seccionalId." AND Fecha>'2023-01-01'");//se pone la fecha ya que hay numero de los años antiguos los caules son diferentes
	$rs1 = DB::Query("SELECT year(getdate())AS Fecha");
	$rs2 = DB::Query("SELECT S.Codigo AS Codigo FROM Seccionales S INNER JOIN Chequeos C ON C.SeccionalId=S.SeccionalId WHERE C.ChequeoId=".$params["ChequeoId"]);
	while( $data = $rs2->fetchAssoc() )
		{
			$seccionalChequeo=$data['Codigo'];
		}
	while( $data = $rs1->fetchAssoc() )
		{
			$anoFecha=$data['Fecha'];
		}
	while( $data = $rs->fetchAssoc() )
		{
			$numProceso=$data['Numero'];
		}
	//echo "Array Number antes de procesar".$arrayNum=str_split($numProceso);
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
  //echo "numero creciente: ".$valorNum=$valorNum+1;
	$valorNum=$valorNum+1;
  $numberFormat = str_pad($valorNum, 5, "0", STR_PAD_LEFT); //funcion para llenar con 0 a la izquierda si faltan digitos
  $numProcesoFinal=$seccionalChequeo.$anoFecha.$numberFormat."00";
	//$numProcesoFinal=intval($numProcesoFinal);
	//$sancionadoId=intval($sancionadoId);
	//echo "Valor de SancionadoID " . $sancionadoId;
	$resultado["response"]=DB::Exec("INSERT INTO Procesos (SeccionalId,AbogadoId,Fecha,Numero,DespachoId,SancionadoId,Providencia,Ejecutoria,ConceptoId,EstadoId,EtapaId,Folios,Tipo,Cantidad,Obligacion,Costas,Liquidacion,Dias,Intereses,Recaudo,CalificacionId,Terminacion,MotivoId,Observaciones,Cuotas,Abono,Inicio,VlrCuota,VlrIntereses,Garantia,Radicado,Remisorio,Acuerdo,Incumplimiento,Notificacion,Suspension,Traslado,Error,CarteraTipoId,ConceptoAbogado,Origen,Carpeta,ImportacionId,ActuacionId,ObligacionInicial,CostasInicial,InteresesInicial,MinJusticia,Revocatoria,Mayor,NotificacionValidada,Validado,Seleccionado,CompetenciaId,MinjusticiaId,SeleccionadoPor,Subsanar,NumeroMinjusticia,ProcesoIdOrigen,SeleccionadoFecha,InteresesIniciales,InteresesCalculados,ProcesoIdDestino,RecaudoMinjusticia,RecaudoTerminado,Persuasivo,ObligacionCreacion,InteresesCreacion,CostasCreacion,Plazo,NaturalezaId,TrasladoCartera,CarteraTipoIdOrigen,TrasladoConcepto,ConceptoIdOrigen,AutorizadoPlazo,AutorizadoFecha,AutorizadoPor,Reliquidacion,ChequeoId,VlrCostas,VlrInteresesPlazo) SELECT SeccionalId,AbogadoId,Fecha,".$numProcesoFinal.",DespachoId,".$sancionadoId.",Providencia,Ejecutoria,ConceptoId,2,1,Folios,Tipo,Cantidad,Obligacion,Costas,NULL,0,0,0,1,NULL,NULL,Observaciones,0,0,NULL,0,0,NULL,Origen,Remisorio,NULL,NULL,NULL,NULL,NULL,NULL,CarteraTipoId,NULL,NULL,NULL,NULL,NULL,Obligacion,Costas,0,MinJusticia,NULL,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,NULL,NULL,0,NULL,Obligacion,0,Costas,Plazo,NaturalezaId,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,ChequeoId,0,0 FROM Chequeos WHERE ChequeoId=".$params["ChequeoId"]);
	//echo "Valor de la insercion es: " . $resultado["response"];
	if ($resultado["response"]) {
	//$result["total"]= DB::Exec("select * from ChequeosSancionados where ChequeoId=".$params["ChequeoId"]);
	//echo $result;
		} else {
			 // Hubo un error en la ejecución de la consulta
			 echo "Error al ejecutar la consulta: " . DB::LastError();
			 exit();
		}
		DB::Exec("UPDATE Chequeos SET Procesado=1 WHERE ChequeoId=".$params["ChequeoId"]);
		//echo ("<script>alert('Proceso insertado correctamnete')</script>");
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>