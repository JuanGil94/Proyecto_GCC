<?php
class AcuerdoPago{
    public $procesoId,$obligacion,$costas,$noCuotas,$periodo,$fechaInicial,$abono;
    public function __construct($procesoId,$noCuotas,$fechaInicial,$abono,$periodo,$obligacion,$sumaInteres,$costas){
        /*
        echo "<br>valor no. cuotas:".$this->noCuotas=$noCuotas."<br>";
        echo "valor ProcesoId:".$this->procesoId=$procesoId."<br>";
        echo "valor Fecha Inicial:".$this->fechaInicial=$fechaInicial."<br>";
        echo "valor Abono:".$this->abono=$abono."<br>";
        echo "valor Obligacion:".$this->obligacion=$obligacion."<br>";
        echo "valor intereses:".$this->sumaInteres=$sumaInteres."<br>";
        echo "valor Peridod:".$this->periodo=$periodo."<br>";
        */
        
        $this->noCuotas=$noCuotas;
        $this->procesoId=$procesoId; 
        $this->fechaInicial=$fechaInicial;
        $this->abono=$abono;
        $this->obligacion=$obligacion;
        $this->sumaInteres=$sumaInteres;
        //echo "Values: ".$this->sumaInteres=$sumaInteres."<br>";
        $this->periodo=$periodo;
        $this->costas=$costas;    
    }
    public function calcularAcuerdo(){
        function calcularPagoMensual($tasa, $nper, $va) {
            // Convertir la tasa de interés anual a la tasa de interés por período
            $tasa_periodo = $tasa / 12 / 100; // Dividir por 12 para obtener la tasa mensual
        
            // Calcular el pago mensual utilizando la fórmula de amortización de préstamos
            $pago = ($tasa_periodo * $va) / (1 - pow(1 + $tasa_periodo, -$nper));
        
            return $pago;
        }
        function calcularCuotaBimestral($tasaAnual, $principal, $numPagosAnual) {
            // Convertir la tasa de interés anual a bimestral
            $tasaBimestral = $tasaAnual / 6 / 100;
            
            // Calcular el número total de pagos bimestrales
            //$numPagosBimestral = $numPagosAnual * 6 * $numAnios;
            $numPagosBimestral=$numPagosAnual;
            // Calcular la cuota bimestral utilizando la fórmula de amortización
            $cuota = ($tasaBimestral * $principal) / (1 - pow(1 + $tasaBimestral, -$numPagosBimestral));
            
            return $cuota;
        }
        function calcularCuotaTrimestral($tasaAnual, $principal, $numPagosAnual) {
            // Convertir la tasa de interés anual a bimestral
            $tasaBimestral = $tasaAnual / 4 / 100;
            
            // Calcular el número total de pagos bimestrales
            //$numPagosBimestral = $numPagosAnual * 6 * $numAnios;
            $numPagosBimestral=$numPagosAnual;
            // Calcular la cuota bimestral utilizando la fórmula de amortización
            $cuota = ($tasaBimestral * $principal) / (1 - pow(1 + $tasaBimestral, -$numPagosBimestral));
            
            return $cuota;
        }
        function calcularCuotaSemestral($tasaAnual, $principal, $numPagosAnual) {
            // Convertir la tasa de interés anual a bimestral
            $tasaBimestral = $tasaAnual / 2 / 100;
            
            // Calcular el número total de pagos bimestrales
            //$numPagosBimestral = $numPagosAnual * 6 * $numAnios;
            $numPagosBimestral=$numPagosAnual;
            // Calcular la cuota bimestral utilizando la fórmula de amortización
            $cuota = ($tasaBimestral * $principal) / (1 - pow(1 + $tasaBimestral, -$numPagosBimestral));
            
            return $cuota;
        }
  
        $periodo=intval($this->periodo);
        $noCuotas=intval($this->noCuotas);
        $obligacion=round($this->obligacion,2);
        $costas=intval($this->costas);
        //$sumIntCost=round($this->sumaInteres,2); // se debe habilitar cuando no se quiere quemar el valor
        $obligacion=5800000.00;
        $sumIntCost=217495.53;
        $tasaInteresAnual = 12; // Tasa de interés anual
        $this->deleteRe($this->procesoId);
        /*
        if (!empty($this->abono))
        {
            echo "ingreso abono".$this->abono;
        }
        else{
            echo "No Ingreso".$this->abono;
        }
        */
        switch ($periodo) { 
            case 1:
                if ($noCuotas<=60){
                    if(!empty($this->abono)){
                        $fecha= new DateTime ($this->fechaInicial);
                        $abono=intval($this->abono);
                        $cuota=0;
                        $obliFA=$abono*0.9639;
                        $intCostFA=$abono*0.0361;
                        $intPlazoA=0;
                        $valorCuotaA=$abono;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliFA,$intCostFA,$costas,$intPlazoA,$valorCuotaA);
                        $fecha->modify('+1 month');
                        /////////
                        $obligacion=$obligacion-$obliFA;
                        $sumIntCost=$sumIntCost-$intCostFA;

                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        $pagoMensual = calcularPagoMensual($tasaInteresAnual, $noCuotas, $obligacion);
                        $varPlazo = round($pagoMensual, 2);
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <$noCuotas+1;$i++){
                            $fecha->modify('+1 month');
                            //echo $i." - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }

                    }
                    else{
                        $fecha= new DateTime ($this->fechaInicial);
                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        $pagoMensual = calcularPagoMensual($tasaInteresAnual, $noCuotas, $obligacion);
                        $varPlazo = round($pagoMensual, 2);
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <$noCuotas+1;$i++){
                            $fecha->modify('+1 month');
                            //echo $i." - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        } 
                    }
                }
                else{
                    echo "<script>alert('El numero de Cuotas ".$noCuotas." no puede ser mayor a 60 al ser periodo Mensual')</script>";
                }
                break;
            case 2:
                if ($noCuotas<30){
                    if(!empty($this->abono)){
                        $fecha= new DateTime ($this->fechaInicial);
                        $abono=intval($this->abono);
                        $cuota=0;
                        $obliFA=$abono*0.9639;
                        $intCostFA=$abono*0.0361;
                        $intPlazoA=0;
                        $valorCuotaA=$abono;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliFA,$intCostFA,$costas,$intPlazoA,$valorCuotaA);
                        $fecha->modify('+2 month');
                        /////////
                        $obligacion=$obligacion-$obliFA;
                        $sumIntCost=$sumIntCost-$intCostFA;

                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaBimestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+2 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }
                    }
                    else{
                        $fecha= new DateTime ($this->fechaInicial);
                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaBimestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+2 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }
                }
                }
                else{
                    echo "<script>alert('El numero de Cuotas ".$noCuotas." no puede ser mayor a 30 al ser periodo Bimestral')</script>";
                }
                break;
            case 3:
                if ($noCuotas<20){
                    if(!empty($this->abono)){
                        $fecha= new DateTime ($this->fechaInicial);
                        $abono=intval($this->abono);
                        $cuota=0;
                        $obliFA=$abono*0.9639;
                        $intCostFA=$abono*0.0361;
                        $intPlazoA=0;
                        $valorCuotaA=$abono;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliFA,$intCostFA,$costas,$intPlazoA,$valorCuotaA);
                        $fecha->modify('+3 month');
                        /////////
                        $obligacion=$obligacion-$obliFA;
                        $sumIntCost=$sumIntCost-$intCostFA;

                        //echo $fecha->format('Y-m-d')."<br>";
                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaTrimestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+3 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }

                    }
                    else{
                        $fecha= new DateTime ($this->fechaInicial);
                        //echo $fecha->format('Y-m-d')."<br>";
                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaTrimestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+3 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }
                }
                }
                else{
                    echo "<script>alert('El numero de Cuotas ".$noCuotas." no puede ser mayor a 20 al ser periodo Trimestral')</script>";
                }
                break;
            case 4:
                if ($noCuotas<10){
                    if(!empty($this->abono)){
                        $fecha= new DateTime ($this->fechaInicial);
                        $abono=intval($this->abono);
                        $cuota=0;
                        $obliFA=$abono*0.9639;
                        $intCostFA=$abono*0.0361;
                        $intPlazoA=0;
                        $valorCuotaA=$abono;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliFA,$intCostFA,$costas,$intPlazoA,$valorCuotaA);
                        $fecha->modify('+3 month');
                        /////////
                        $obligacion=$obligacion-$obliFA;
                        $sumIntCost=$sumIntCost-$intCostFA;

                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaSemestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+6 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }

                    }
                    else{
                        $fecha= new DateTime ($this->fechaInicial);
                        //echo $fecha->format('Y-m-d')."<br>";
                        $obliF=$obligacion/$noCuotas;
                        $intCostF=$sumIntCost/$noCuotas;
                        $costas=$costas/$noCuotas;
                        
                        $cuotaBimestral = calcularCuotaSemestral($tasaInteresAnual, $obligacion, $noCuotas);
                        
                        $varPlazo = round($cuotaBimestral, 2);  
                        $valorCuota=$intCostF+$varPlazo;
                        $intPlazo=round($valorCuota-($obliF+$intCostF),2);
                        if ($noCuotas==1){
                            $intPlazo=0;
                            $valorCuota=$obliF+$intCostF;
                        }
                        $cuota=1;
                        $this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        //echo "1 - ".$fecha->format('d-m-Y')." - ".$obliF." - ".$intCostF." - ".$costas." - ".$intPlazo." - ".$valorCuota."<br>";
                        for ($i = 2; $i <= $noCuotas;$i++){
                            $fecha->modify('+6 month');
                            //echo $fecha->format('Y-m-d')."<br>";
                            $this->insertLiqui($i,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
                        }
                }
                }
                else{
                    echo "<script>alert('El numero de Cuotas ".$noCuotas." no puede ser mayor a 10 al ser periodo Semestral')</script>";
                }
                break;
            default:
                echo "Opcion no homologada o no reconocida";
            break;
        }

    }
    public function insertLiqui($cuota,$fecha,$obliF,$intCostF,$costas,$intPlazo,$valorCuota){
        try{
            //$tasa=floatval($tasa*100);
                    //var_dump($procesoId);var_dump($fecha);var_dump($dias);var_dump($tasa);var_dump($intereses);var_dump($obliReca);var_dump($obliNove);var_dump($obliSald);var_dump($inteReca);var_dump($inteNove);var_dump($inteSald);var_dump($costReca);var_dump($costNove);var_dump($costSald);
            //echo "Valores: ".$procesoId."-".$fecha."-".$dias."-".$tasa."-".$intereses."-".$obliReca."-".$obliNove."-".$obliSald."-".$inteReca."-".$inteNove."-".$inteSald."-".$costReca."-".$costNove."-".$costSald;
            //$this->insertLiqui($cuota,$fecha->format('d-m-Y'),$obliF,$intCostF,$costas,$intPlazo,$valorCuota);
            $consulta2=DB::Exec("INSERT INTO Liquidaciones (ProcesoId,Cuota,Fecha,Capital,Intereses,Total,Costas,InteresesPlazo) VALUES (".$this->procesoId.",".$cuota.",'".$fecha."',".$obliF.",".$intCostF.",".$valorCuota.",".$costas.",".$intPlazo.")");
                    if ($consulta2) {
                //echo "La consulta se realizó correctamente.";
                    } 
                    else {
                // Hubo un error en la ejecución de la consulta
                            echo "Error al ejecutar la consulta: " . DB::LastError();
                            exit();
                            }
        }
        catch (PDOException $e) {
            echo "Error de PDO: " . $e->getMessage();
        }
    }
    public function deleteRe($procesoId){
        $consulta=DB::Exec("DELETE FROM Liquidaciones WHERE ProcesoId=".$procesoId);
            if ($consulta) {
                //echo "La consulta se realizó correctamente.";
                    } 
                    else {
                // Hubo un error en la ejecución de la consulta
                            echo "Error al ejecutar la consulta de borrar: " . DB::LastError();
                            exit();
                            }
    }
}