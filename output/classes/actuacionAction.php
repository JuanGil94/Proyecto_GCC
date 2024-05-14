<?php
include_once (getabspath("pruebaJuan.php"));
include_once (getabspath("../include/dbcommon.php"));
//require_once("../include/dbcommon.php");
class coreOficios {
    public $actuacionId,$procesoId,$intereses,$fechaLiqui,$fechaAct,$fecha,$resolucion,$radicado,$observaciones,$oficioId,$etapaId;
    public function __construct($actuacionId,$procesoId,$fecha,$resolucion,$radicado,$observaciones,$userId,$etapaId){
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