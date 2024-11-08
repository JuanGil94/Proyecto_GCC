<?php
include_once (getabspath("calcIntereses.php"));
include_once (getabspath("../include/dbcommon.php"));
//require_once("../include/dbcommon.php");
class coreOficios {
    public $actuacionId,$procesoId,$intereses,$fechaLiqui,$fechaAct,$fecha,
    $resolucion,$radicado,$observaciones,$oficioId,$etapaId,$estadoId,$motivoId,$interesesDiferencial,$formattedDate;
    public function __construct($actuacionId,$procesoId,$fecha,$resolucion,$radicado,$observaciones,$userId,$etapaId,$estadoId,$motivoId){
        $this->actuacionId=$actuacionId;
        $this->procesoId=$procesoId;
        $this->fechaLiqui=date("d-m-Y");
        $this->fechaAct=date('Y-m-d H-i-s');
        $this->fecha=$fecha;
        $this->resolucion=$resolucion;
        $this->radicado=$radicado;
        $this->observaciones=$observaciones;
        $this->userId=$userId;
        $this->etapaId=$etapaId;
        $this->estadoId=$estadoId;
        $this->motivoId=$motivoId;
        /*
        $date = new DateTime($this->fecha);
        // Convertir al formato deseado
        $formattedDate = $date->format('Y/m/d');
        $this->formattedDate=$formattedDate;
        */
    }
    public function process(){
        //SIEMPRE HAY QUE HACER EL INSERT INTO EN FECHAS Y EL UPDATE DEL PROCESO EN EL CAMPO ACTUACION 
        $infoP=$this->infoProceso();
        if ($this->actuacionId!=0){
            $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."','".$this->resolucion."','".$this->observaciones."',".$this->procesoId.")");
            if (!$resultado2["response"]){
                echo "Ocurrio un error debido al insertar en la tabla Fechas: ".DB::LastError(); 
                return false;
            } 
        }
        switch ($this->actuacionId) {
                case "0":
                    return true;
                break;
                case "4":
                    $recalcular=new reliquidacion($this->procesoId);
                    $meses = $recalcular->Calcular(date('Y-m-d'));
                    $this->intereses=$recalcular->getInteresesSuma();
                    $consulta=DB::Query("SELECT ISNULL(Intereses,0) AS Intereses, ISNULL(InteresesInicial,0) AS InteresesInicial FROM Procesos WHERE ProcesoId=".$this->procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $interesesAnt=$date["Intereses"];
                        $InteresesInicial=$date["InteresesInicial"];
                    }
                    $interesesDif=$this->intereses-$interesesAnt;
                    //$result["total"]=$recalcular->getSuma();
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Observaciones='".$this->observaciones."',Intereses='".($interesesDif+$interesesAnt)."',InteresesInicial='".($InteresesInicial+$interesesDif)."',Liquidacion='".$this->fechaLiqui."',SeleccionadoFecha='".$this->fechaLiqui."', Persuasivo='".$this->fechaLiqui."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    //$resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."' where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error en el Update Procesos debido a: ".DB::LastError(); 
                        return false;
                    }
                    if ($interesesDif!=0){ 
                        $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$this->procesoId.",'".$this->fecha."',".$interesesDif.",NULL,0,NULL)");
                        if (!$resultado2["response"]){
                            echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                            return false;
                        }
                    }
                    return true;
                break;
                case "5":
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EtapaId=".$this->etapaId.",ActuacionId=".$this->actuacionId.",Observaciones='".$this->observaciones."' where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error en el Update debido a: ".DB::LastError(); 
                            return false;
                        }
                        return true;
                break;
                case "14"://PREGUNTAR SI SE USA
                    if ($this->motivoId==11){ //TRASLADO DE PROCESOS (Termina el proceso por traslado y lo crea en la nueva sucursal (competencia))
                        if (!is_null($infoP["CompetenciaId"])){

                        }
                    }
                        return true;
                break;
                case "15":
                    //echo "Actuacion Nunmero 15";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado4["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado4["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "20": //Acuerdo de Pago
                    $consulta=DB::Query("SELECT MAX(Cuota) noCuota,MAX(Total) maxCuota FROM Acuerdos where ProcesoId=".$this->procesoId);
                    while( $date = $consulta->fetchAssoc() ){
                        $noCuotas=$date["Intereses"];
                        $maxCuota=$date["InteresesInicial"];
                    }
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Cuotas=".$noCuotas.",VlrCuota='".$maxCuota."'Acuerdo='".$this->fecha."', Incumplimiento=NULL,EstadoId =3,ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido aL UPDATE en Procesos: ".DB::LastError(); 
                        return false;
                    } 
                    /*
                    $resultado4["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado4["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    */
                    return true;
                break;
                case "21": //Incumplimiento Acuerdo de pago
                    if ($infoP["EstadoIdP"]==3){
                        $recalcular=new reliquidacion($this->procesoId);
                        $meses = $recalcular->Calcular(date('Y-m-d'));
                        $this->intereses=$recalcular->getInteresesSuma();
                        $consulta=DB::Query("SELECT ISNULL(Intereses,0) AS Intereses, ISNULL(InteresesInicial,0) AS InteresesInicial FROM Procesos WHERE ProcesoId=".$this->procesoId);
                        while( $date = $consulta->fetchAssoc() ){
                            $interesesAnt=$date["Intereses"];
                            $InteresesInicial=$date["InteresesInicial"];
                        }
                        $interesesDif=$this->intereses-$interesesAnt;
                        if ($interesesDif!=0){ 
                            $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$this->procesoId.",'".$this->fecha."',".$interesesDif.",NULL,0,NULL)");
                            if (!$resultado2["response"]){
                                echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                                return false;
                            }
                        } 
                        $resultado["response"]=DB::Exec("UPDATE Procesos set Intereses='".($interesesDif+$interesesAnt)."',InteresesInicial='".($InteresesInicial+$interesesDif)."',Liquidacion='".$this->fechaLiqui."', Incumplimiento='".$this->fechaLiqui."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error en el Update debido a: ".DB::LastError(); 
                            return false;
                        }
                    }
                   return true;
                break;
                case "25":
                    //echo "Actuacion Nunmero 25";  
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "26":
                    //echo "Actuacion Nunmero 26";   
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Error=".$this->fechaLiqui." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    /*
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    */
                    return true;
                break;
                case "27":
                    //echo "Actuacion Nunmero 27";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "28":
                    //echo "Actuacion Nunmero 28 ";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Notificacion='".$this->fechaLiqui."',Acuerdo=NULL,Incumplimiento=NULL,ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado["response"]=DB::Exec("UPDATE Procesos SET Dias=ISNULL(dbo.InterrupcionesSumaView.Dias, 0) + dbo.Suspensiones_GetBy_Periodo(CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END, 
                         GETDATE(), Procesos.SeccionalId) + DATEDIFF(day, GETDATE(), DATEADD(year, CASE WHEN Procesos.ConceptoId = 5 THEN 3 ELSE 5 END, CASE WHEN Procesos.Incumplimiento IS NULL OR
                         Procesos.Incumplimiento < Procesos.Acuerdo OR
                         Procesos.Incumplimiento < Procesos.Notificacion THEN CASE WHEN Procesos.Acuerdo IS NULL OR
                         Procesos.Acuerdo < Procesos.Notificacion THEN CASE WHEN Procesos.Notificacion IS NULL THEN Procesos.Ejecutoria ELSE Procesos.Notificacion END ELSE Procesos.Acuerdo END ELSE Procesos.Incumplimiento END))
						 FROM Procesos
						 LEFT JOIN dbo.InterrupcionesSumaView ON dbo.Procesos.ProcesoId = dbo.InterrupcionesSumaView.ProcesoId
						 WHERE Procesos.ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error en calcular los dias de Prescripción debido a: ".DB::LastError(); 
                        return false;
                    } 
                    return true;
                break;
                case "29":
                    //echo "Actuacion Nunmero 29";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Suspension='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a esto : ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1031":
                    //echo "Actuacion Nunmero 1031";
                    $response=DB::Query("SELECT * FROM procesos WHERE ProcesoId=".$this->procesoId);
		            //print_r($actuacionId);
		            while( $date = $response->fetchAssoc() ){
					    $estadoP=$date["EstadoId"];
				     }
                    if($estadoP == 4){ 
                        $resultado["response"]=DB::Exec("UPDATE Procesos set  EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        }
                        return true;
                    }
                    else{
                        echo '<script>alert("El proceso debe estar en estado suspendido")</script>';
                        return false;
                    }
                   
                break;
                case "1033": //REVOCATORIA DE TERMINACIÓN DE PROCESO (NO REVERSA LOS INTERESES GENERADOS)
                    if ($infoP["Terminacion"]!='NULL'){
                        $resultado["response"]=DB::Exec("UPDATE Procesos set Revocatoria='".$this->fechaLiqui."',MotivoId=NULL, Terminacion=NULL,EstadoId =".$this->estadoId.",ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        }
                        $resultado4["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                        Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                        MotivoId,".$this->fechaLiqui.",1,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                        if (!$resultado4["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        } 
                    }
                    return true;
                break;
                case "1034":
                    //echo "Actuacion Nunmero 1034";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1035":
                //echo "Actuacion Nunmero 1035";
                $response=DB::Query("SELECT * FROM procesos WHERE ProcesoId=".$this->procesoId);
                //print_r($actuacionId);
                while( $date = $response->fetchAssoc() ){
                    $estadoP=$date["EstadoId"];
                 }
                if($estadoP != 4){ 
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    return true;
                }
                else{
                    echo '<script>alert("El proceso debe estar en estado suspendido")</script>';
                    return false;
                }
                break;
                case "1036":
                    //echo "Actuacion Nunmero 1036";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1038": //PREGUNTAR SI SE USA
                    return true;
                break;
                case "1039":
                    //echo "Actuacion Nunmero 1039";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EtapaId=".$this->etapaId.", MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1040":
                    //echo "Actuacion Nunmero 1040";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    return true;
                break;
                case "1041":
                    //echo "Actuacion Nunmero 1041";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1042":
                    //echo "Actuacion Nunmero 1042";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1043":
                    //echo "Actuacion Nunmero 1043";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Suspension=".$this->fechaLiqui." EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1048":
                    //echo "Actuacion Nunmero 1048";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1049": //ANULACION DE INCUMPLIMIENTO DE ACUERDO DE PAGO
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId = 3,Incumplimiento=NULL,ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    return true;
                break;
                case "1050":
                    //echo "Actuacion Nunmero 1050";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1051":
                    //echo "Actuacion Nunmero 1031";
                    $response=DB::Query("SELECT * FROM procesos WHERE ProcesoId=".$this->procesoId);
		            //print_r($actuacionId);
		            while( $date = $response->fetchAssoc() ){
					    $estadoP=$date["EstadoId"];
				     }
                    if($estadoP == 4 ){ 
                        $resultado["response"]=DB::Exec("UPDATE Procesos set  EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        } 
                        return true;
                    }
                    else{
                        echo '<script>alert("El proceso debe estar en estado suspendido")</script>';
                        return false;
                    }
                   
                break;
                case "1052":
                    //echo "Actuacion Nunmero 1052";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1054":
                    //echo "Actuacion Nunmero 1054";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case ($this->actuacionId==1056 || $this->actuacionId==1057): //ANULACION (REVERSION) DE ACUERDO DE PAGO
                    $delete=DB::Exec("DELETE FROM Acuerdos WHERE ProcesoId=".$this->procesoId.")");
                    if (!$delete){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Acuerdo=NULL, Incumplimiento=NULL,EstadoId =".$this->estadoId.",ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                return true;
                break;
                case "1059":
                    //echo "Actuacion Nunmero 1059";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    MotivoId,GETDATE(),0,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                
        }
        if ($this->estadoId==4){ //Suspensión
                $resultado2["response"]=DB::Exec("INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) values ('".$this->fecha."',NULL,'1',".$this->procesoId.")");
                if (!$resultado2["response"]){
                    echo "Ocurrio un error debido al insertar en la tabla Fechas: ".DB::LastError(); 
                    return false;
                } 
        }
        if ($this->estadoId==2 && $infoP["EstadoIdP"]==4){//Sale de la Suspensión
            $resultado["response"]=DB::Exec("UPDATE Interrupciones SET Finalizacion = '".$this->fecha."' WHERE Suspension=1 AND Finalizacion IS NULL AND ProcesoId=".$this->procesoId);
            if (!$resultado["response"]){
                echo "Ocurrio un error debido a: ".DB::LastError(); 
                return false;
            }
        }
        if ($this->estadoId==5){//Interrupción
            $resultado2["response"]=DB::Exec("INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) values ('".$this->fecha."',NULL,'0',".$this->procesoId.")");
            if (!$resultado2["response"]){
                echo "Ocurrio un error debido al insertar en la tabla Fechas: ".DB::LastError(); 
                return false;
            } 
        }
        if ($this->estadoId==2 && $infoP["EstadoIdP"]==5){//Sale de la Interrupción
            $resultado["response"]=DB::Exec("UPDATE Interrupciones SET Finalizacion = '".$this->fecha."' WHERE Suspension=0 AND Finalizacion IS NULL AND ProcesoId=".$this->procesoId);
            if (!$resultado["response"]){
                echo "Ocurrio un error debido a: ".DB::LastError(); 
                return false;
            }
        }
    }
    public function validations($oficioId){
        $consulta=DB::Query("SELECT ISNULL(OficioIdRequisito, 0) OficioIdRequisito
        FROM Oficios
        WHERE OficioId =".$oficioId);
        while( $date = $consulta->fetchAssoc() )
		{
            $OficioIdRequisito=$date["$OficioIdRequisito"];
        }
        if ($OficioIdRequisito<>0){
            $consulta=DB::Query("SELECT OficioId,ProcesoId
            FROM Correspondencias
            WHERE OficioId = ".$OficioIdRequisito." AND ProcesoId =".$this->procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $correspondenciaId=$date["CorrespondenciaId"];
            }

        }
    }
    public function infoProceso(){
        $consulta=DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$this->procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
            $infoP=array(
                "Seccional"=>$date["Seccional"],
                "Corporacion"=>$date["Corporacion"],
                "Unidad"=>$date["Unidad"],
                "Oficina"=>$date["Oficina"],
                "Serie"=>$date["Serie"],
                "CompetenciaId"=>$date["CompetenciaId"],
                "EstadoIdP"=>$date["EstadoId"],
                "Terminacion"=>$date["Terminacion"],
                "CompetenciaId"=>$date["CompetenciaId"],
            );
        }
        return $infoP;
    }
}

?>