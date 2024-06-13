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
	echo " <script>if (confirm('Se encontro un error al crear el Proceso: ".$Errmsg."')) {
            location.reload(); // Recargar la página si el usuario hace clic en Aceptar
        }</script>";
	}

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
//Verificacion para crear proceso en cartera Ejemplarizante inicio
$rs = DB::Select("Empresas", "EmpresaId=1");
		while( $data = $rs->fetchAssoc() )
		{
			$maxPesos=$data["MaximoPesos"];
			$maxUvt=$data["MaximoUvt"];
			$maxSalarios=$data["MaximoSalarios"];
			$maxUvb=$data["MaximoUvb"];
		}
if (($conceptoId==1 and $naturalezaId=1) || ($cantidad>$maxUvt and  $tipo==3 and ($conceptoId!=4&&$conceptoId!=5))||($cantidad>$maxSalarios and  $tipo==2 and ($conceptoId!=4&&$conceptoId!=5))||($cantidad>$maxUvb and  $tipo==4 and ($conceptoId!=4&&$conceptoId!=5))||($obligacion>$maxPesos and  $tipo==1 and ($conceptoId!=4&&$conceptoId!=5)) ){
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
							$abogadoId=$data["AbogadoId"];
						}
				$asignacion=	DB::Exec("INSERT INTO Reasignaciones (Fecha,ProcesoId,AbogadoId) VALUES (GETDATE(),".$procesoId.",".$abogadoId.")");
			/*
			//Validacion si hay error en el INSERT
			if ($asignacion){
				echo "El insert en reasiganciones se realizo correctamnete";
			}
			else{
			echo "Error al ejecutar la consulta: " . DB::LastError();
			}
			*/
			//echo "Valor de la asignacion: ".	$asignacion;
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
$objeto->process(1,1);
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
	include_once (getabspath("classes/pruebaJuan.php"));
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
echo "values: ".$fechaCierre.",".$fechaDesde.",".$fechaHasta;
//1.1 Se obtienen los procesos a calcular los intereses.
$consulta=DB::Query("SELECT TOP 3 Procesos.ProcesoId, '".$fechaHasta."' AS Fecha, 10000 AS Intereses, Procesos.SeccionalId, 1 AS Liquidacion
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
					(Procesos.Fecha <= '2024-04-30') AND 
					--(dbo.Intereses_GetBy_ProcesoId( Procesos.ProcesoId, @Hasta ) > 0) AND 
					(CarteraTipos.Prescrita = 0)
					AND DATEADD(day, 1, ISNULL(Plazo, Ejecutoria)) <= '".$fechaHasta."'");
        while($date=$consulta->fetchAssoc()){
//1.2 Se calculan los intereses de cada uno de los procesos
						$recalcular=new reliquidacion($date["ProcesoId"]);
						$valueIntereses=$recalcular->calInteresesCierre($anoActual,$mesActual);
           //$procesosId[$date["ProcesoId"]]=$valueIntereses;
						$fechaHasta=strval($fechaHasta);
//1.3 Se insertan los intereses calculados en la tabla Intereses.
						$consulta2=DB::Exec("INSERT INTO Intereses( ProcesoId, Fecha, Intereses, SeccionalId, Liquidacion ) values (".$date["ProcesoId"].",'".$fechaHasta."',".$valueIntereses.",".$date["SeccionalId"].",1)");
            if ($consulta2) {
                echo "La consulta se realizó correctamente.";
                    } 
             else {
								  // Hubo un error en la ejecución de la consulta
								  echo "Error al ejecutar la consultaaaaa: " . DB::LastError();
								  //exit();
                   }
        }
//1.4 Se eliminan los intereses que sean igual a 0.
$consulta=DB::Exec("DELETE FROM Intereses WHERE Fecha = '".$fechaHasta."' and Intereses = 0 and Liquidacion=1");
            if ($consulta2) {
                echo "Se eliminan los intereses que sean igual a 0 de la fecha cierre.";
                    } 
             else {
								  // Hubo un error en la ejecución de la consulta
								  echo "Error al ejecutar la consultaaaaa: " . DB::LastError();
								  //exit();
                   }
//2. Se Generan los reportes de Movimientos.
$consulta=DB::Exec("dbo.Empresas_Cerrar_Reportes '".$fechaHasta."'");
if ($consulta){
echo "El SP dbo.Empresas_Cerrar_Reportes se ejecuto correctamente";
}
else{
echo "El SP dbo.Empresas_Cerrar_Reportes no se pudo ejecutar debido a: ".DB::LastError();
}

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
                echo "La actualizacion de los intereses se realizo correctamente en todos los procesos.";
                    } 
             else {
								  // Hubo un error en la ejecución de la consulta
								  echo "Error al ejecutar la consultaaaaa: " . DB::LastError();
								  //exit();
                   }
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
     )SELECT DISTINCT TOP 3
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
                echo "Se insertan los historicos correctamente.";
                    } 
             else {
								  // Hubo un error en la ejecución de la consulta
								  echo "Error al ejecutar la consultaaaaa: " . DB::LastError();
								  //exit();
                   }
//5. Genera los indicadores
$consulta=DB::Exec("dbo.Empresas_Cerrar_Indicadores '".$fechaHasta."'");
if ($consulta){
echo "El SP dbo.Empresas_Cerrar_Indicadores se ejecuto correctamente";
}
else{
echo "El SP dbo.Empresas_Cerrar_Indicadores no se pudo ejecutar debido a: ".DB::LastError();
}
//-- 7. Cierra el mes
$consulta=DB::Exec("UPDATE Empresas
		  SET Cierre = '".$fechaHasta."'
		WHERE EmpresaId = 1");
if ($consulta){
echo "Se actualiza el cierre";
}
else{
echo "No se actualizo el cierre debido a: ".DB::LastError();
}
//--9. Empresas_Cerrar_Deterioro
$consulta=DB::Exec("dbo.Empresas_Cerrar_Deterioro");
if ($consulta){
echo "El SP dbo.Empresas_Cerrar_Deterioro se ejecuto correctamente";
}
else{
echo "El SP dbo.Empresas_Cerrar_Deterioro no se pudo ejecutar debido a: ".DB::LastError();
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
$objeto->process(1,1);
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
$rs=DB::Query("declare @p2 date
set @p2=''
exec [dbo].[Procesos_FechaPlazo_PCC_F_C] @Ejecutoria='".$fechaEje."',@Dias=".$params["value"].",@Plazo=@p2 output
select @p2 fechaPlazo");
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
$rs=DB::Query("declare @p2 date
set @p2=''
exec [dbo].[Procesos_FechaPlazo_PCC_F_C] @Ejecutoria='".$fechaEje."',@Dias=".$params["value"].",@Plazo=@p2 output
select @p2 fechaPlazo");
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
?>