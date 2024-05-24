<?php
include_once (getabspath("pruebaJuan.php"));
include_once (getabspath("../include/dbcommon.php"));
//require_once("../include/dbcommon.php");
class coreOficios {
    public $actuacionId,$procesoId,$intereses,$fechaLiqui,$fechaAct,$fecha,
    $resolucion,$radicado,$observaciones,$oficioId,$etapaId,$estadoId,$motivoId,$interesesDiferencial;
    public function __construct($actuacionId,$procesoId,$fecha,$resolucion,$radicado,
    $observaciones,$userId,$etapaId,$estadoId,$motivoId){
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
    }
    public function process(){
        switch ($this->actuacionId) {
                case "4":
                    $recalcular=new reliquidacion($this->procesoId);
                    $meses = $recalcular->Calcular();
                    $this->intereses=$recalcular->getInteresesSuma();
                    //$result["total"]=$recalcular->getSuma();
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Observaciones='".$this->observaciones."',Intereses=".$this->intereses.",InteresesInicial=".$this->intereses.",Liquidacion='".$this->fechaLiqui."',SeleccionadoFecha=".$this->fechaLiqui.", Persuasivo='".$this->fechaLiqui."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$this->procesoId.",'".$this->fecha."',".$this->intereses.",NULL,0,NULL)");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }

                    return true;
                break;
                case "5":
                    //echo "Actuacion Nunmero 5";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EtapaId=".$this->etapaId.",ActuacionId=".$this->actuacionId.",Observaciones='".$this->observaciones."' where ProcesoId=".$this->procesoId);
                        if (!$resultado["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        }
                    $resultado3["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                        if (!$resultado3["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        }
                        return true;
                break;
                case "15":
                    //echo "Actuacion Nunmero 15";
                    $recalcular=new reliquidacion($this->procesoId);
                    $meses = $recalcular->Calcular();
                    $this->intereses=$recalcular->getInteresesSuma();
                    $response=DB::Query("SELECT * FROM procesos WHERE ProcesoId=".$this->procesoId);
		            //print_r($actuacionId);
		            while( $date = $response->fetchAssoc() )
				        {
					    $interesesP=$date["Intereses"];
				     }
                    $this->interesesDiferencial=$this->intereses-$interesesP;
                    //$result["total"]=$recalcular->getSuma();
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',Intereses=".$this->intereses.",InteresesInicial=".$this->intereses.",Liquidacion='".$this->fechaLiqui."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$this->procesoId.",'".$this->fecha."',".$this->interesesDiferencial.",NULL,0,NULL)");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado3["response"]){
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
                case "25":
                    //echo "Actuacion Nunmero 25";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                case "27":
                    //echo "Actuacion Nunmero 27";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Notificacion='".$this->fechaLiqui."',Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "29":
                    //echo "Actuacion Nunmero 29";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,1,".$this->procesoId.")");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
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
                        $resultado3["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                        if (!$resultado3["response"]){
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
                case "1033":
                    //echo "Actuacion Nunmero 1033";
                    $resultado["response"]=DB::Exec("UPDATE Procesos set Revocatoria='".$this->fechaLiqui."',MotivoId=NULL, Terminacion=NULL,EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado3["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado4["response"]=DB::Exec("INSERT INTO Terminados(ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,MotivoId,Fecha,
                    Revocatoria,CarteraTipoId,Mayor)SELECT ProcesoId,SeccionalId,SancionadoId,ConceptoId,Obligacion,Costas,Intereses,
                    null,GETDATE(),1,CarteraTipoId,Mayor FROM Procesos WHERE ProcesoId =".$this->procesoId."");
                    if (!$resultado4["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                case "1039":
                    //echo "Actuacion Nunmero 1039";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EtapaId=".$this->etapaId.", MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,0,".$this->procesoId.")");
                    if (!$resultado3["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,1,".$this->procesoId.")");
                    if (!$resultado3["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    return true;
                break;
                case "1043":
                    //echo "Actuacion Nunmero 1043";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,1,".$this->procesoId.")");
                    if (!$resultado3["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,1,".$this->procesoId.")");
                    if (!$resultado3["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                        $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                        if (!$resultado2["response"]){
                            echo "Ocurrio un error debido a: ".DB::LastError(); 
                            return false;
                        }
                        $resultado["response"]=DB::Exec("UPDATE Interrupciones SET Finalizacion = '".$this->fechaLiqui."' WHERE ProcesoId=".$this->procesoId);
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    }
                    $resultado3["response"]=DB::Exec(" INSERT INTO Interrupciones (Inicio,Finalizacion,Suspension,ProcesoId) VALUES ('".$this->fecha."',NULL,0,".$this->procesoId.")");
                    if (!$resultado3["response"]){
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
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
                case "1059":
                    //echo "Actuacion Nunmero 1059";
                    
                    $resultado["response"]=DB::Exec("UPDATE Procesos set MotivoId=".$this->motivoId.", Terminacion='".$this->fechaLiqui."',EstadoId =".$this->estadoId.",Observaciones='".$this->observaciones."',ActuacionId=".$this->actuacionId." where ProcesoId=".$this->procesoId);
                    if (!$resultado["response"]){
                        echo "Ocurrio un error debido a: ".DB::LastError(); 
                        return false;
                    } 
                    $resultado2["response"]=DB::Exec("INSERT INTO Fechas (ActuacionId,Fecha,Resolucion,Observaciones,ProcesoId) values (".$this->actuacionId.",'".$this->fecha."',".$this->resolucion.",'".$this->observaciones."',".$this->procesoId.")");
                    if (!$resultado2["response"]){
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
}

?>