<?php 
require_once("../include/dbcommon.php");

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
     $sancNew=$nuevo.' - '.$documentNew;
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
    $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
         while( $date = $consulta->fetchAssoc() )
         {
             $estado=$date["EstadoId"];
             $incumplimiento=$date["Incumplimiento"];
             $acuerdo=$date["Acuerdo"];
             $ejecutoriaAnt=$date["Ejecutoria"];
             $providencia=$date["Providencia"];
         }
         $fechaProvidencia= new DateTime($providencia);
         $providencia=$fechaProvidencia->format('Y-m-d');
        $fechaEjecutoria= new DateTime($ejecutoriaAnt);
        $ejecutoriaAnt=$fechaEjecutoria->format('Y-m-d');
        
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
