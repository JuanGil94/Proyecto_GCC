<?php 
require_once("../include/dbcommon.php");
require_once("calcIntereses.php");
//include_once (getabspath("calcIntereses.php"));
//Novedad cambio de Sancionado Tipo 1
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["sancionadoId"]) && isset($_POST["observaciones"])) {
   $procesoId=$_POST["procesoId"];
   $userName=$_POST["userName"];
   $sancionadoId=$_POST["sancionadoId"];
   $observaciones=$_POST["observaciones"];
   $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $estado=$date["EstadoId"];
            $incumplimiento=$date["Incumplimiento"];
            $acuerdo=$date["Acuerdo"];
        }
        $consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $anterior=$date["Sancionado"];
        }
        $consulta=DB::Query("SELECT * FROM SancionadosView WHERE SancionadoId=".$sancionadoId);
        while( $date = $consulta->fetchAssoc() )
		{
            $nuevo=$date["Sancionado"];
            $documentNew=$date["Documento"];
        }
    if ($estado==4 || $estado==6){
        $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
        echo $error;
        return;
    }
    if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
        $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
        echo $error;
        return;
    }
    $sancNew=$nuevo.' - '.$documentNew;
    $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",1,'".$anterior."','".$sancNew."',".$userName.",'".$observaciones."')");
		if ($rs2) {
            $resultado=DB::Exec("UPDATE Procesos set SancionadoId=".$sancionadoId." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
			 //echo "La consulta se realizó correctamente.";""
             $ok="OK";
             echo $ok;
             return;
		} 
		else {
			 // Hubo un error en la ejecución de la consulta
			 $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }
    }
//Novedad cambio de Providencia Tipo 7
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["providencia"]) && isset($_POST["observaciones"])) {
    //echo "Entrooo";
    $procesoId=$_POST["procesoId"];
    $userName=$_POST["userName"];
    $providenciaNew=$_POST["providencia"];
    $observaciones=$_POST["observaciones"];
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
             $providenciaAnt=$date["Providencia"];
             $ejecutoria=$date["Ejecutoria"];
         }
        $fechaProvidencia= new DateTime($providenciaAnt);
        $providenciaAnt=$fechaProvidencia->format('Y-m-d');
     if ($providenciaNew>$ejecutoria){
        $error='La fecha de Providencia no puede ser mayor a la Ejecutoria'.$ejecutoria;
        echo $error;
        return;
     }
     if ($estado==4 || $estado==6){
         $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
         echo $error;
         return;
     }
     if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
         $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
         echo $error;
         return;
     }
     $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",7,'".$providenciaAnt."','".$providenciaNew."',".$userName.",'".$observaciones."')");
         if ($rs2) {
             $resultado=DB::Exec("UPDATE Procesos set Providencia='".$providenciaNew."' where ProcesoId=".$procesoId);
                     //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                     if (!$resultado){
                         echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                         return;
                     }
              //echo "La consulta se realizó correctamente.";""
              $ok="OK";
              echo $ok;
              return;
         } 
         else {
              // Hubo un error en la ejecución de la consulta
              $error="Error al ejecutar la Inserción: " . DB::LastError();
              echo $error;
              return;
         }
     }
//Novedad cambio de Ejecutoria Tipo 5
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newEjecutoria"]) && isset($_POST["observaciones"])) {
    //echo "Ejecutoria";
    $procesoId=$_POST["procesoId"];
    $userName=$_POST["userName"];
    $ejecutoriaNew=$_POST["newEjecutoria"];
    $observaciones=$_POST["observaciones"];
    $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) fplazo,* FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
             $ejecutoriaAnt=$date["Ejecutoria"];
             $providencia=$date["Providencia"];
             $obligacionFecha=$date["Obligacion"];
             $interesesFecha=$date["Intereses"];
             $costasFecha=$date["Costas"];
             $recaudoFecha=$date["Recaudo"];
             $fechaPlazo=$date["fplazo"];
         }
         $fechaPlazo=new DateTime($fechaPlazo);
         $fechaPlazo=$fechaPlazo->format('Y-m-d');
         if(date('Y-m-d')<$fechaPlazo){ //se pregunta ya que no se pueden calcula intereses de mora a dias superiores al actual, validar con Luis
            $fechaPlazo=date('Y-m-d');
         }
         $saldoFecha=$interesesFecha+$costasFecha+$obligacionFecha;
         $fechaProvidencia= new DateTime($providencia);
         $providencia=$fechaProvidencia->format('Y-m-d');
        $fechaEjecutoria= new DateTime($ejecutoriaAnt);
        $ejecutoriaAnt=$fechaEjecutoria->format('Y-m-d');
    $consulta=DB::Query("SELECT sum(Intereses) sumIntereses FROM Intereses WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $interesesInicialCierre=$date["sumIntereses"];
         }
     if ($providencia>$ejecutoriaNew){
        $error='La fecha Ejecutoria debe ser igual o superior a la fecha de Providencia'.$ejecutoria;
        echo $error;
        return;
     }

     if ($estado==4 || $estado==6){
         $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
         echo $error;
         return;
     }
     if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
         $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
         echo $error;
         return;
     }
     $sancNew=$nuevo.' - '.$documentNew;
     $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",5,'".$ejecutoriaAnt."','".$ejecutoriaNew."',".$userName.",'".$observaciones."')");
         if ($rs2) {
             $resultado=DB::Exec("UPDATE Procesos set Ejecutoria='".$ejecutoriaNew."' where ProcesoId=".$procesoId);
                     //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $resultado=DB::Exec("UPDATE Procesos SET Dias=ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
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
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
                    //Se recalculan los intereses y se llena la tabla de reliquidaciones
                    $recalcular=new reliquidacion($procesoId);
                    $meses = $recalcular->Calcular($fechaPlazo,0,1);
                    $result["total"]=$recalcular->getSuma();
                    //echo "La consulta se realizó correctamente.";""
                    $ok="OK";
                    echo $ok;
                    return;
         } 
         else {
              // Hubo un error en la ejecución de la consulta
              $error="Error al ejecutar la Inserción: " . DB::LastError();
              echo $error;
              return;
         }
     }
//Novedad cambio de Notificación Tipo 9
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newNotificacion"]) && isset($_POST["observaciones"])){
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $notificacionNew=$_POST["newNotificacion"];
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $incumplimiento=$date["Incumplimiento"];
                $acuerdo=$date["Acuerdo"];
                $providenciaAnt=$date["Providencia"];
                $ejecutoria=$date["Ejecutoria"];
                $notificacionAnt=$date["Notificacion"];
            }
           $fechaNotificacion= new DateTime($notificacionAnt);
           $notificacionAnt=$fechaNotificacion->format('Y-m-d');
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
            $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",9,'".$notificacionAnt."','".$notificacionNew."',".$userName.",'".$observaciones."')");
        if ($rs2) {
            $resultado=DB::Exec("UPDATE Procesos set Notificacion='".$notificacionNew."' where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $resultado=DB::Exec("UPDATE Procesos SET Dias=ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
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
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
             //echo "La consulta se realizó correctamente.";""
             $ok="OK";
             echo $ok;
             return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Obligación Incial Tipo 2
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newobligacionInicial"]) && isset($_POST["observaciones"])){
    //echo "Ingreso";
       //echo "Entrooo";
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $newobligacionInicial=$_POST["newobligacionInicial"];
       $newobligacionInicial = str_replace('.', '', $newobligacionInicial);
       $newobligacionInicial=intval($newobligacionInicial);
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) as fechaPlazo ,* FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $incumplimiento=$date["Incumplimiento"];
                $acuerdo=$date["Acuerdo"];
                $ejecutoria=$date["Ejecutoria"];
                $obligacionAnt=$date["Obligacion"];
                $obligacionInicialAnt=$date["ObligacionIncial"];
                $interesesAnt=$date["Intereses"];
                $costas=$date["Costas"];
                $fechaPlazo=$date["fechaPlazo"];
            }
            $fechaActual=date('Y-m-d');
           //echo $fechaPlazo;
           //exit();
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
            $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",2,'".$obligacionAnt."','".$newobligacionInicial."',".$userName.",'".$observaciones."')");
        if ($rs2) {
                    $resultado=DB::Exec("UPDATE Procesos set ObligacionInicial=".$newobligacionInicial." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $recalcular=new reliquidacion($procesoId);
                    $meses = $recalcular->Calcular($fechaActual,0,1);
                    $result["total"]=$recalcular->getSuma();
                    $interesesNov=$recalcular->getInteresesSuma();
                    $costasSaldo=$recalcular->getCostas();
                    $consulta=DB::Query("SELECT Sum(Intereses) sumIntereses FROM Reliquidaciones where ProcesoId=".$procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $interesesNew=$date["sumIntereses"];
                    }
                    $consulta=DB::Query("SELECT Sum(Intereses) sumInteresesI FROM Intereses where ProcesoId=".$procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $interesesAnt=$date["sumInteresesI"];
                    }
                    $interesesDif=$interesesNew-$interesesAnt;
                    if ($interesesDif!=0){ 
                        $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$procesoId.",GETDATE(),".$interesesDif.",0,0,0)");
                        if (!$resultado2["response"]){
                            echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                            return false;
                        }
                    }
                    $consulta=DB::Query("SELECT top 1 * FROM Reliquidaciones where procesoId=".$procesoId." order by ReliquidacionId desc");
                    while( $date = $consulta->fetchAssoc() ){
                        $obligacionSaldo=$date["ObliSald"];
                        $costasSaldo=$date["CostSald"];
                    }
                    //echo "Valor InteresesNew: $interesesNew Valor InteresesSaldo= $interesesNov Valor Obligacion: $obligacionSaldo Valor Costas: $costasSaldo <br>";
                    $resultado=DB::Exec("UPDATE Procesos set ObligacionInicial=".$newobligacionInicial.",InteresesInicial=".$interesesNew.",Intereses=".$interesesNov.",Obligacion=".$obligacionSaldo.",Costas=".$costasSaldo." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    /*
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
                    */
                    //echo "La consulta se realizó correctamente.";""
                    $ok="OK";
                    echo $ok;
                    return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Intereses Tipo 4
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["interesesNew"]) && isset($_POST["observaciones"])){
        //echo "Valor al ingresar: ".$_POST["interesesNew"];
        //exit();
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $interesesNew=$_POST["interesesNew"];
       $interesesNew = str_replace('.', '', $interesesNew);
       $interesesNew = intval($interesesNew);
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) as fechaPlazo ,* FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $interesesAnt=$date["Intereses"];
            }
            $fechaActual=date('Y-m-d');
           //echo $fechaPlazo;
           //exit();
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",4,'".$interesesAnt."','".$interesesNew."',".$userName.",'".$observaciones."')");
        if ($rs2) {
                    $resultado=DB::Exec("UPDATE Procesos set Intereses=".$interesesNew." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    /*
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
                    */
                    //echo "La consulta se realizó correctamente.";""
                    $ok="OK";
                    echo $ok;
                    return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Incumplimiento de Acuerdo de Pago Tipo 9
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newIncumplimiento"]) && isset($_POST["observaciones"])){
    //echo "Ingreso";
       //echo "Entrooo";
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $newIncumplimiento=$_POST["newIncumplimiento"];
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $incumplimiento=$date["Incumplimiento"];
                $acuerdo=$date["Acuerdo"];
                $providenciaAnt=$date["Providencia"];
                $ejecutoria=$date["Ejecutoria"];
                $notificacionAnt=$date["Notificacion"];
            }
           $incumplimiento= new DateTime($incumplimiento);
           $incumplimiento=$incumplimiento->format('Y-m-d');
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
            $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",9,'".$incumplimiento."','".$newIncumplimiento."',".$userName.",'".$observaciones."')");
        if ($rs2) {
            $resultado=DB::Exec("UPDATE Procesos set Incumplimiento='".$newIncumplimiento."' where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $resultado=DB::Exec("UPDATE Procesos SET Dias=ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
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
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
             //echo "La consulta se realizó correctamente.";""
             $ok="OK";
             echo $ok;
             return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Obligación Tipo 11
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["obligacionNew"]) && isset($_POST["observaciones"])){
    //echo "Valor al ingresar: ".$_POST["interesesNew"];
    //exit();
   $procesoId=$_POST["procesoId"];
   $userName=$_POST["userName"];
   $obligacionNew=$_POST["obligacionNew"];
   $obligacionNew = str_replace('.', '', $obligacionNew);
   $obligacionNew = intval($obligacionNew);
   $observaciones=$_POST["observaciones"];
   $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) as fechaPlazo ,* FROM Procesos WHERE ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
        {
            $estado=$date["EstadoId"];
            $obligacionAnt=$date["Obligacion"];
        }
        $fechaActual=date('Y-m-d');
       //echo $fechaPlazo;
       //exit();
    if ($estado==4 || $estado==5){
        $error='No se puede realizar la novedad porque el proceso esta terminado o interrumpido';
        echo $error;
        return;
    }
    if ($estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado';
            echo $error;
            return;
    }
    $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",11,'".$obligacionAnt."','".$obligacionNew."',".$userName.",'".$observaciones."')");
    if ($rs2) {
                $resultado=DB::Exec("UPDATE Procesos set Obligacion=".$obligacionNew." where ProcesoId=".$procesoId);
                //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                if (!$resultado){
                    echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                    return;
                }
                $ok="OK";
                echo $ok;
                return;
    } 
    else {
         // Hubo un error en la ejecución de la consulta
         $error="Error al ejecutar la Inserción: " . DB::LastError();
         echo $error;
         return;
    }

}
//Novedad cambio de Despacho Tipo 13
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["despachoNew"]) && isset($_POST["observaciones"])) {
    $procesoId=$_POST["procesoId"];
    $userName=$_POST["userName"];
    $despachoNew=$_POST["despachoNew"];
    $observaciones=$_POST["observaciones"];
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
         }
         $consulta=DB::Query("SELECT * FROM ProcesosView1 WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $anterior=$date["Despacho"];
         }
         $consulta=DB::Query("SELECT * FROM Despachos WHERE DespachoId=".$despachoNew);
         while( $date = $consulta->fetchAssoc() )
         {
             $nuevo=$date["Despacho"];
             $codigoNew=$date["Codigo"];
         }
     if ($estado==4 || $estado==6){
         $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
         echo $error;
         return;
     }
     $despachocNew=$nuevo.' - '.$codigoNew;
     $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",13,'".$anterior."','".$despachocNew."',".$userName.",'".$observaciones."')");
         if ($rs2) {
             $resultado=DB::Exec("UPDATE Procesos set DespachoId=".$despachoNew." where ProcesoId=".$procesoId);
                     //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                     if (!$resultado){
                         echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                         return;
                     }
              //echo "La consulta se realizó correctamente.";""
              $ok="OK";
              echo $ok;
              return;
         } 
         else {
              // Hubo un error en la ejecución de la consulta
              $error="Error al ejecutar la Inserción: " . DB::LastError();
              echo $error;
              return;
         }
}
//Novedad cambio de Radicado Origen Tipo 40
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["radicadoNew"]) && isset($_POST["observaciones"])){
        //echo "Valor al ingresar: ".$_POST["interesesNew"];
        //exit();
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $radicadoNew=$_POST["radicadoNew"];
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) as fechaPlazo ,* FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $radicadoAnt=$date["Radicado"];
            }
            $fechaActual=date('Y-m-d');
           //echo $fechaPlazo;
           //exit();
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",40,'".$radicadoAnt."','".$radicadoNew."',".$userName.",'".$observaciones."')");
        if ($rs2) {
                    $resultado=DB::Exec("UPDATE Procesos set Radicado=".$radicadoNew." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $ok="OK";
                    echo $ok;
                    return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Costas Tipo 3
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["costasNew"]) && isset($_POST["observaciones"])){
    //echo "Valor al ingresar: ".$_POST["interesesNew"];
    //exit();
   $procesoId=$_POST["procesoId"];
   $userName=$_POST["userName"];
   $costasNew=$_POST["costasNew"];
   $costasNew = str_replace('.', '', $costasNew);
   $costasNew = intval($costasNew);
   $observaciones=$_POST["observaciones"];
   $consulta=DB::Query("SELECT ISNULL(Plazo, Ejecutoria) as fechaPlazo ,* FROM Procesos WHERE ProcesoId=".$procesoId);
        while( $date = $consulta->fetchAssoc() )
        {
            $estado=$date["EstadoId"];
            $costasAnt=$date["Costas"];
        }
        $fechaActual=date('Y-m-d');
       //echo $fechaPlazo;
       //exit();
    if ($estado==4 || $estado==6){
        $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
        echo $error;
        return;
    }
    $costasAnt = number_format($costasAnt, 2, '.', ',');
    $costasUpdate=$costasNew;
    $costasNew = number_format($costasNew, 2, '.', ',');
    $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",3,'".$costasAnt."','".$costasNew."',".$userName.",'".$observaciones."')");
    if ($rs2) {
                $resultado=DB::Exec("UPDATE Procesos set Costas=".$costasUpdate." where ProcesoId=".$procesoId);
                //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                if (!$resultado){
                    echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                    return;
                }
                $recalcular=new reliquidacion($procesoId);
                $meses = $recalcular->Calcular(date('Y-m-d'),0,1);
                //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                /*
                if (!$resultado){
                    echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                    return;
                }
                */
                //echo "La consulta se realizó correctamente.";""
                $ok="OK";
                echo $ok;
                return;
    } 
    else {
         // Hubo un error en la ejecución de la consulta
         $error="Error al ejecutar la Inserción: " . DB::LastError();
         echo $error;
         return;
    }

}
//Novedad cambio de Fecha Plazo Tipo 12
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newPlazo"]) && isset($_POST["observaciones"])) {
       $procesoId=$_POST["procesoId"];
       $userName=$_POST["userName"];
       $newPlazo=$_POST["newPlazo"];
       $observaciones=$_POST["observaciones"];
       $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $estado=$date["EstadoId"];
                $antPlazo=$date["Plazo"];
                $incumplimiento=$date["Incumplimiento"];
                $acuerdo=$date["Acuerdo"];
                $ejecutoria=$date["Ejecutoria"];
                $obligacionAnt=$date["Obligacion"];
                $obligacionInicialAnt=$date["ObligacionIncial"];
                $interesesAnt=$date["Intereses"];
                $costas=$date["Costas"];
            }
            $fechaActual=date('Y-m-d');
            $antPlazo= new DateTime($antPlazo);
            $antPlazo=$antPlazo->format('Y-m-d');
           //echo $fechaPlazo;
           //exit();
        if ($estado==4 || $estado==6){
            $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
            echo $error;
            return;
        }
        if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
            $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
            echo $error;
            return;
        }
        $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",12,'".$antPlazo."','".$newPlazo."',".$userName.",'".$observaciones."')");
        if ($rs2) {
                    $resultado=DB::Exec("UPDATE Procesos set Plazo='".$newPlazo."' where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    $recalcular=new reliquidacion($procesoId);
                    $meses = $recalcular->Calcular($fechaActual,0,1);
                    $result["total"]=$recalcular->getSuma();
                    $interesesNov=$recalcular->getInteresesSuma();
                    $costasSaldo=$recalcular->getCostas();
                    $consulta=DB::Query("SELECT Sum(Intereses) sumIntereses FROM Reliquidaciones where ProcesoId=".$procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $interesesNew=$date["sumIntereses"];
                    }
                    $consulta=DB::Query("SELECT Sum(Intereses) sumInteresesI FROM Intereses where ProcesoId=".$procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $interesesAnt=$date["sumInteresesI"];
                    }
                    $interesesDif=$interesesNew-$interesesAnt;
                    if ($interesesDif!=0){ 
                        $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$procesoId.",GETDATE(),".$interesesDif.",0,0,0)");
                        if (!$resultado2["response"]){
                            echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                            return false;
                        }
                    }
                    $consulta=DB::Query("SELECT top 1 * FROM Reliquidaciones where procesoId=".$procesoId." order by ReliquidacionId desc");
                    while( $date = $consulta->fetchAssoc() ){
                        $obligacionSaldo=$date["ObliSald"];
                    }
                    $resultado=DB::Exec("UPDATE Procesos set InteresesInicial=".$interesesNew.",Intereses=".$interesesNov.",Obligacion=".$obligacionSaldo.",Costas=".$costasSaldo." where ProcesoId=".$procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return;
                    }
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    /*
                    if (!$resultado){
                        echo "Ocurrio un error en el Update Procesos Dias debido a: ".DB::LastError(); 
                        return;
                    }
                    */
                    //echo "La consulta se realizó correctamente.";""
                    $ok="OK";
                    echo $ok;
                    return;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             $error="Error al ejecutar la Inserción: " . DB::LastError();
             echo $error;
             return;
        }

}
//Novedad cambio de Naturaleza Tipo 20
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newNaturalezaId"]) && isset($_POST["observaciones"])) {
    //echo "Ingreso";
    $procesoId=$_POST["procesoId"];
    $userName=$_POST["userName"];
    $newNaturalezaId=$_POST["newNaturalezaId"];
    $newNaturalezaId=intval($newNaturalezaId);
    $observaciones=$_POST["observaciones"];
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $antNaturalezaId=$date["NaturalezaId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
         }
         $consulta=DB::Query("SELECT * FROM Naturalezas WHERE NaturalezaId=".$antNaturalezaId);
         while( $date = $consulta->fetchAssoc() )
         {
             $anteriorNat=$date["Naturaleza"];
         }
         $consulta=DB::Query("SELECT * FROM Naturalezas WHERE NaturalezaId=".$newNaturalezaId);
         while( $date = $consulta->fetchAssoc() )
         {
             $nuevaNat=$date["Naturaleza"];
         }
     if ($estado==4 || $estado==6){
         $error='No se puede realizar la novedad porque el proceso esta terminado o suspendido';
         echo $error;
         return;
     }
     if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
         $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
         echo $error;
         return;
     }
     $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",20,'".$anteriorNat."','".$nuevaNat."',".$userName.",'".$observaciones."')");
         if ($rs2) {
             $resultado=DB::Exec("UPDATE Procesos set NaturalezaId=".$newNaturalezaId." where ProcesoId=".$procesoId);
                     //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                     if (!$resultado){
                         echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                         return;
                     }
                $fechaActual=date('Y-m-d');
                $recalcular=new reliquidacion($procesoId);
                $meses = $recalcular->Calcular($fechaActual,0,1);
                $result["total"]=$recalcular->getSuma();
                $interesesNov=$recalcular->getInteresesSuma();
                $costasSaldo=$recalcular->getCostas();
                $consulta=DB::Query("SELECT Sum(Intereses) sumIntereses FROM Reliquidaciones where ProcesoId=".$procesoId);
                while( $date = $consulta->fetchAssoc() ){
                    $interesesNew=$date["sumIntereses"];
                }
                $consulta=DB::Query("SELECT Sum(Intereses) sumInteresesI FROM Intereses where ProcesoId=".$procesoId);
                while( $date = $consulta->fetchAssoc() ){
                    $interesesAnt=$date["sumInteresesI"];
                }
                $interesesDif=$interesesNew-$interesesAnt;
                if ($interesesDif!=0){ 
                    $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$procesoId.",GETDATE(),".$interesesDif.",0,0,0)");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                        return false;
                    }
                }
                $consulta=DB::Query("SELECT top 1 * FROM Reliquidaciones where procesoId=".$procesoId." order by ReliquidacionId desc");
                while( $date = $consulta->fetchAssoc() ){
                    $obligacionSaldo=$date["ObliSald"];
                }
                //echo "Valor Interesesnew:".$interesesNew." Valor Intereses Nov:".$interesesNov." Valor ObligacionSaldo:".$obligacionSaldo." Valor costasSaldo:".$costasSaldo;
                $resultado=DB::Exec("UPDATE Procesos set InteresesInicial=".$interesesNew.",Intereses=".$interesesNov.",Obligacion=".$obligacionSaldo.",Costas=".$costasSaldo." where ProcesoId=".$procesoId);
                //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                if (!$resultado){
                    echo "Ocurrio un error en el Update Procesos debido aaaaaa: ".DB::LastError(); 
                    return;
                }
              $ok="OK";
              echo $ok;
              return;
         } 
         else {
              // Hubo un error en la ejecución de la consulta
              $error="Error al ejecutar la Inserción: " . DB::LastError();
              echo $error;
              return;
         }
}
//Novedad cambio de Fecha de Suspension Tipo 14
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["newSuspension"]) && isset($_POST["observaciones"])) {
    //echo "Entrooo";
    $procesoId=$_POST["procesoId"];
    $userName=$_POST["userName"];
    $newSuspension=$_POST["newSuspension"];
    $observaciones=$_POST["observaciones"];
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
             $providenciaAnt=$date["Providencia"];
             $ejecutoria=$date["Ejecutoria"];
         }
    $consulta=DB::Query("SELECT CONVERT(VARCHAR, Suspension, 103) suspension FROM ProcesosView1 WHERE ProcesoId=".$procesoId);
    while( $date = $consulta->fetchAssoc() )
    {
        $antSuspension=$date["suspension"];
    }
    $consulta=DB::Query("SELECT top 1 InterrupcionId
				FROM     Interrupciones where ProcesoId =".$procesoId."order by InterrupcionId desc");
    while( $date = $consulta->fetchAssoc() )
    {
        $InterrupcionId=$date["InterrupcionId"];
    }
        $ejecutoria= new DateTime($ejecutoria);
        $ejecutoria=$ejecutoria->format('Y-m-d');
     if($ejecutoria>$newSuspension){
        $error='No se puede realizar la novedad porque la fecha de suspensión es anterior a la fecha de la Ejecutoria';
        echo $error;
        return;
     }
     if ($estado==2 || $estado==7){
         $error='No se puede realizar la novedad porque el proceso no esta SUSPENDIDO';
         echo $error;
         return;
     }
     if ($estado==2 && $acuerdo !='NULL' && $incumplimiento=='NULL'){
         $error='No se puede realizar la novedad porque el proceso está en ACUERDO DE PAGO';
         echo $error;
         return;
     }
     $rs2=DB::Exec("INSERT INTO Novedades (Fecha,ProcesoId,Tipo,Anterior,Nuevo,UserId,Observaciones) VALUES (GETDATE(),".$procesoId.",14,'".$antSuspension."','".$newSuspension."',".$userName.",'".$observaciones."')");
         if ($rs2) {
             $resultado=DB::Exec("UPDATE Interrupciones set Inicio='".$newSuspension."' where ProcesoId=".$procesoId);
                     //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                     if (!$resultado){
                         echo "Ocurrio un error en el Update Interrupciones Procesos debido a: ".DB::LastError(); 
                         return;
                     }
              //echo "La consulta se realizó correctamente.";""
              $ok="OK";
              echo $ok;
              return;
         } 
         else {
              // Hubo un error en la ejecución de la consulta
              $error="Error al ejecutar la Inserción: " . DB::LastError();
              echo $error;
              return;
         }
}
//Novedad cambio de Recaudo
if (isset($_POST["procesoId"]) && isset($_POST["userName"]) && isset($_POST["recaudoNew"]) && isset($_POST["observaciones"]) && isset($_POST["pagoId"])){
    $pagoNew=$_POST["recaudoNew"];
    $pagoId=$_POST["pagoId"];
    $procesoId=$_POST["procesoId"];
    $consulta=DB::Query("SELECT * FROM Pagos1 WHERE PagoId=".$pagoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $pago=$date["Pago"];
             $cuentaId=$date["CuentaId"];
             $tipoRecaudoId=$date["TipoRecaudoId"];
             $fecha=$date["Fecha"];
         }
    $pagoDif=$pago-$pagoNew;
    $resultado2["response"]=DB::Exec("INSERT INTO Pagos1 (ProcesoId,CuentaId,Fecha,Pago,Registro,PagoIdOrig,TipoRecaudoId) values (".$procesoId.",".$cuentaId.",'".$fecha."',".$pagoNew.",GETDATE(),".$pagoId.",".$tipoRecaudoId.")");
    if (!$resultado2["response"]){
        echo "Ocurrio un error en el Insert Pagos debido a: ".DB::LastError(); 
        return false;
    }
    DB::Delete("Pagos1", "PagoId=".$pagoId."" );
    $consulta=DB::Query("SELECT * FROM Pagos1 WHERE PagoId=".$pagoId." ORDER BY PagoId DESC");
    while( $date = $consulta->fetchAssoc() )
    {
        $pagoIdNew=$date["PagoId"];
    }
    $recalcular=new reliquidacion($procesoId);
    $recalcular->pagoId($pagoIdNew);
    //echo "El valor del PagoId es:".$values["PagoId"]; 
    $recalcular->Calcular(date('Y-m-d'),1,1);
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
    while( $date = $consulta->fetchAssoc() )
    {
        $recaudoAnt=$date["Recaudo"];
    }
    $recaudoNew=$recaudoAnt-$pagoDif-$pagoNew;

    $resultado=DB::Exec("UPDATE Procesos set Recaudo=".$recaudoNew." where ProcesoId=".$procesoId);
    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
    if (!$resultado){
        echo "Ocurrio un error en el Update Procesos debido aaaaaa: ".DB::LastError(); 
        return;
    }
    $ok="OK";
    echo $ok;
    return;
}
echo "No ingreso a ninguna novedad";
return;

//echo "NO ENTRO A NACAS";

//DEBO CAMBIAR LA ALERTA CUABNDO ES MENOR A 23 DIGITOS
     /*
class coreNovedades{
    public $fechaActual,$costas,$sumaTotalDiaria,$obligacionInicial,$procesoId;

    public function __construct($procesoId){
        $this->procesoId=$procesoId;
    }
    public function infoProceso($procesoId){
        $rs5 = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
        while( $date = $rs5->fetchAssoc() )
		{
            //$this->obligacionInicial=$date["Obligacion"];
            $this->obligacionInicial=$date["ObligacionInicial"];
            $this->obligacionSaldo=$date["Obligacion"];
            $this->costas=$date["Costas"];
            //echo "valorrrr".
            if (!$date["Plazo"]){
                $date["Plazo"]=$date["Ejecutoria"]; 
            }
            $info[]=array(
                "Naturaleza"=>$date["NaturalezaId"],
                "Concepto"=>$date["ConceptoId"],
                "Costa"=>$date["Costas"],
                //"Obligacion"=>$date["Obligacion"],
                "Obligacion"=>$date["ObligacionInicial"],
                "Plazo"=>$date["Plazo"],
                "ObligacionSaldo"=>$date["Obligacion"]
            );
            return $info;
		}
    }
}
    */
