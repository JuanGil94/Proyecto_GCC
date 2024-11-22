<?php
class CalendarioAnual {
    private $anio;
    private $meses;
    public function __construct($anio) {
        $this->anio = $anio;
        $this->meses = array(
            "01" => 31,
            "02" => $this->esBisiesto() ? 29 : 28,
            "03" => 31,
            "04" => 30,
            "05" => 31,
            "06" => 30,
            "07" => 31,
            "08" => 31,
            "09" => 30,
            "10" => 31,
            "11" => 30,
            "12" => 31
        );
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getMeses() {
        return $this->meses;
    }

    private function esBisiesto() {
        return (($this->anio % 4 == 0 && $this->anio % 100 != 0) || $this->anio % 400 == 0);
    }
}
class reliquidacion extends CalendarioAnual{
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
    public function tasa($nat,$conc,$a,$m){
        ///echo "Mes ingresado: $m";
        /*
        tasa de USURA es igual a (Tipo 1)/diasaño/100 
        tasa DIAN es igual a tasaUsura-2%
        tasa DTN se obtiene de Empresas =12%
        tasa CORRIENTE se obtiene de tasaInterbancaria(Tipo 3)/diasaño/100
        */
        if (($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0){
            //echo "es biciesto";
            $diasTotales=366;
        }
        else{
            //echo "no es biciesto";
            $diasTotales=365;
        }
            $consulta = DB::Query("SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1");
        //$consulta="SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=1";
            while($date=$consulta->fetchAssoc()){
            //echo $date."<br>";
            $tasaUsura=round($date["Tasa"],4);
            //echo "La tasa de Usura es: ".$tasaUsura."<br>";
            $tasaUsuraDiaria=round(($tasaUsura/$diasTotales/100),20);
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        }
        $tasaDian=$tasaUsura-0.02;
        //echo "La tasa DIAN es: ".$tasaDian."<br>";
        $tasaDianDiaria=round(($tasaDian/$diasTotales/100),11);
        //echo "La tasa DIAN diaria es: ".$tasaDianDiaria."<br>";
            $consulta=DB::Query("SELECT * from Empresas where EmpresaId=1");
            while($date=$consulta->fetchAssoc()){
            //echo $date."<br>";
            $tasaDTN=round($date["TasaDTN"],4);
            //echo "La tasa DTN es: ".$tasaDTN."<br>";
            $tasaDtnDiaria=round(($tasaDTN/$diasTotales/100),11);
            //echo "La tasa DTN diaria es: ".$tasaDtnDiaria."<br>";
        }
            $consulta=DB::Query("SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=3");
            while($date=$consulta->fetchAssoc()){
            //echo $date."<br>";
            $tasaCorriente=round($date["Tasa"],4);
            //echo "La tasa CORRIENTE es: ".$tasaCorriente."<br>";
            $tasaCorrienteDiaria=round(($tasaCorriente/$diasTotales/100),11);
            //echo "La tasa CORRIENTE diaria es: ".$tasaCorrienteDiaria."<br>";
        }
        //echo "Opcion seleccionada: ".$conc;
        switch ($conc) {
            case "1":
                if ($nat==11 or $nat==28 or $nat==6 or $nat==34 or $nat==29 or $nat==17 or $nat==8 or $nat==3 or $nat==2 or $nat==5 or $nat==4 or $nat==7 or $nat==1 or $nat==13 or $nat==10 or $nat==9){
                    //echo "<br>tasa de USURA<br>";
                    return $tasaUsuraDiaria;
                }
                elseif ($nat==12){
                    //echo "<br>tasa Corriente<br>";
                    return $tasaCorrienteDiaria;
                }
                elseif ($nat==14 or $nat==15){
                    //echo "<br>tasa DIAN<br>";
                    return $tasaDianDiaria;
                }
                elseif ($nat==30 or $nat==16){
                    //echo "<br>tasa DTN<br>";
                    return $tasaDtnDiaria;
                }
                else{
                    echo "<br>No aplica para la TASA<br>";
                }
                break;
            case "2":
                if($nat==31 or $nat==26){
                    //echo "<br>tasa de USURA<br>";
                    return $tasaUsuraDiaria;
                }
                else{
                    echo "<br>No aplica para la TASA<br>";
                }
                break;
            case "3":
                if($nat==27){
                    //echo "<br>tasa DIAN<br>";
                    return $tasaDianDiaria;
                }
                else{
                    echo "<br>No aplica para la TASA<br>";
                }
                break;
            case "4":
                if($nat==32 OR $nat==25 OR $nat==24 OR $nat==35 OR $nat==33){
                    //echo"<br>tasa DTN<br>";
                    return $tasaDtnDiaria;
                }
                else{
                    echo "<br>No aplica para la TASA<br>";
                }
                break;
            case "5":
                if($nat==23){
                    //echo "<br>tasa DIAN<br>";
                    return $tasaDianDiaria;
                }
                else{
                    echo "<br>No aplica para la TASA<br>";
                }
                break;
            default:
                echo "Opción no reconocida.";
                break;
        }
    }
    public function recaudo($procesoId){
        //echo "Valourrrrrr: ".var_dump ($procesoId);
        $fechasR=array();
        $consultaR=DB::Query("SELECT * FROM Pagos1 WHERE ProcesoId=".$procesoId);
            //echo "la consulta da como resultado: ".$consultaR;
        while($date=$consultaR->fetchAssoc() ){
            $fechasR []= array(
                "Fecha"=> date("Y-m-d", strtotime($date['Fecha'])),
                "Pago" => $date['Pago'],
                "PagoId" => $date['PagoId'],
                "PagoObli" => $date['PagoObli'],
                "PagoCost" => $date['PagoCost'],
                "PagoInt" => $date['PagoInt'],
            );
        };
            //print_r($fechasR);
            $sumaPorFecha = array();
            foreach($fechasR as $dato){
                $fecha = $dato['Fecha'];
                $valor = $dato['Pago'];
                $PagoObli = $dato['PagoObli'];
                $PagoCost = $dato['PagoCost'];
                $PagoInt = $dato['PagoInt'];
                $pagoId = $dato['PagoId'];
            if (array_key_exists($fecha,$sumaPorFecha)){
                $sumaPorFecha[$fecha]['Pago']+=$valor;
                $sumaPorFecha[$fecha]['PagoObli']+=$PagoObli;
                $sumaPorFecha[$fecha]['PagoCost']+=$PagoCost;
                $sumaPorFecha[$fecha]['PagoInt']+=$PagoInt;
                $sumaPorFecha[$fecha]['PagoId']=$pagoId; //reemplazo el PagoId por el ultimo registro del mismo dia
            }
            else{
                $sumaPorFecha[$fecha]=array('Fecha'=>$fecha,'Pago'=>$valor,'PagoId'=>$pagoId,'PagoObli'=>$pagoId,'PagoCost'=>$pagoId,'PagoInt'=>$pagoId);
            }
            }
            //print_r($sumaPorFecha);
            return $sumaPorFecha;
            //$fechasR
            //print_r($fechasR);
            //print_r($sumaPorFecha);
    }
    public function insertRe($procesoId,$fecha,$dias,$tasa,$intereses,$obliReca,$obliNove,$obliSald,$inteReca,$inteNove,$inteSald,$costReca,$costNove,$costSald){
        try{
            $tasa=floatval($tasa*100);
            /*
            $datetime = new DateTime($fecha);
            var_dump($fecha);
            // Obtener el día
            $day = $datetime->format('d');

            // Comparar el día con '01'
            echo "DIA: ".$day;
            if ($day === '00') {
                echo "El día es 00.";
            } else {
                echo "El día no es 00.";
            }
                */
                    //var_dump($procesoId);var_dump($fecha);var_dump($dias);var_dump($tasa);var_dump($intereses);var_dump($obliReca);var_dump($obliNove);var_dump($obliSald);var_dump($inteReca);var_dump($inteNove);var_dump($inteSald);var_dump($costReca);var_dump($costNove);var_dump($costSald);
            //echo "Valores: ".$procesoId."-".$fecha."-".$dias."-".$tasa."-".$intereses."-".$obliReca."-".$obliNove."-".$obliSald."-".$inteReca."-".$inteNove."-".$inteSald."-".$costReca."-".$costNove."-".$costSald;
            $consulta2=DB::Exec("INSERT INTO Reliquidaciones (ProcesoId,Fecha,Dias,Tasa,Intereses,ObliReca,ObliNove,ObliSald,InteReca,InteNove,InteSald,CostReca,CostNove,CostSald) VALUES (".$procesoId.",'".$fecha."',".$dias.",".$tasa.",".$intereses.",".$obliReca.",".$obliNove.",".$obliSald.",".$inteReca.",".$inteNove.",".$inteSald.",".$costReca.",".$costNove.",".$costSald.")");
                    if ($consulta2) {
                //echo "La consulta se realizó correctamente.";
                    } 
                    else {
                        //var_dump($fecha);
                // Hubo un error en la ejecución de la consulta
                            //echo "Error al ejecutar la consultaaaaalll: " . DB::LastError();
                            //exit();
                            }
        }
        catch (PDOException $e) {
            echo "Error de PDO: " . $e->getMessage();
        }

    }
    public function deleteRe($procesoId){
        //echo "Ingreso<br>";
        $consulta=DB::Exec("DELETE FROM Reliquidaciones WHERE ProcesoId=".$procesoId);
        /*
            if ($consulta) {
                //echo "La consulta se realizó correctamente.";
                    } 
                    else {
                // Hubo un error en la ejecución de la consulta
                            echo "Error al ejecutar la consulta de borrar: " . DB::LastError();
                            exit();
                            }
                            */
    }
    public function getSuma(){
            //echo "Valor de la suma de intereses: ".$this->suma;
            return $this->suma;
    }
    public function getCostas(){
        //echo "Valor de la suma de intereses: ".$this->suma;
        return $this->costas;
    }
    public function getInteresesSuma(){
        //echo "Value: ".$this->sumaTotalDiaria;
        return $this->sumaTotalDiaria;
    }
    public function getInterSumCost(){
        //$costF=round($this->costas,2);
        $sumaF=round($this->sumaTotalDiaria,2);
        //$sumaCosInt=$costF+$sumaF;
        //$sumaCosInt;
        //$this->sumaTotalDiaria;
        return $sumaF;
    }
    
    public function Calcularrrrrrrr($fechaInicio){
        //echo "Value: ".$fechaInicio;
        //exit();
        $numero=$this->procesoId;
        $this->deleteRe($numero);
        $numero=intval($numero);
        $infoProceso=$this->infoProceso($numero); //se obtiene la info del proceso
        foreach($infoProceso as $date){
            //$params["Numero"]=$date["Numero"];
            $naturaleza=$date["Naturaleza"];
            $costas=$date["Costa"];
            $concepto=$date["Concepto"];
            $obligacion=$date["Obligacion"];
            $fechaP=$date["Plazo"];
        }
        $recaudos=$this->recaudo($numero);
        //print_r($recaudos);
        $this->fechaEjecutoria=$fechaP;
        //$this->fechaActual=date('Y-m-d');
        $this->fechaActual=$fechaInicio;
        $fecha_objeto2=  new DateTime($this->fechaActual);
        $annoAct = $fecha_objeto2->format('Y');  // Año Fecha Actual
        $mesAct = $fecha_objeto2->format('m');   // Mes Fecha Actual
        $diaAct = $fecha_objeto2->format('d'); // Dia Fecha Actual 
        $fecha_objeto = new DateTime($fechaP);
        $annoEje = $fecha_objeto->format('Y');  // Año Fecha Plazo
        $mesEje = $fecha_objeto->format('m');   // Mes Fecha Plazo
        $diaEje = $fecha_objeto->format('d');   // Dia Fecha Plazo
        $consulta=DB::Query("SELECT * FROM Suspensiones where SuspensionId=1");
        while($date=$consulta->fetchAssoc()){
                $inSuspen=$date["Desde"];
                $finSuspen=$date["Hasta"];
            //echo $date["Ejecutoria"]."<br>";
            //echo "Fecha Suspension Desde: ".$inSuspen=$date["Desde"]."<br>";
            //echo "Fecha Suspension Hasta: ".$finSuspen=$date["Hasta"]."<br>";
        }
        //echo $inSuspen;
        //echo $finSuspen;
        $fecha_objeto2 = new DateTime($inSuspen);
        $annoDesde = $fecha_objeto2->format('Y');  // Año Inicio Suspension Id=1
        $mesDesde = $fecha_objeto2->format('m');   // Mes Inicio Suspension Id=1
        $diaDesde = $fecha_objeto2->format('d');    // Dia Inici Suspension Id=1

        $fecha_objeto3 = new DateTime($finSuspen);
        //echo "Valores HAsta: ";
        $annoHasta = $fecha_objeto3->format('Y');  // Año Hasta Suspension Id=1
        $mesHasta = $fecha_objeto3->format('m');   // Mes Hasta Suspension Id=1
        $diaHasta = $fecha_objeto3->format('d');    // Dia Hasta Suspension Id=1
        $annobase=$annoEje;
        $sumaTotal=0;$obliReca=0;$obliNove=0;$inteReca=0;$inteNove=0;$costReca=0;$costNove=0;$costSald=0;
        //$obliReca,$obliNove,$obliSald,$inteReca,$inteNove,$inteSald,$costReca,$costNove,$costSald
        $sumaTotalDiaria=0;
        ///echo "<br>Los datos ingresados son:<br>Año: ".$annoEje."<br>Mes: ".$mesEje."<br>dia: ".$diaEje."<br>";
        $numAnnos=date("Y")-$annoEje; //No. de Años a recorrer
        //$tasaDiaraT=tasa($naturaleza,$concepto,$annoEje,$mesEje);
        //echo "Tasa diaria a multiplicar es:".$tasaDiaraT."<br>";
        //$valorDias=round(($tasaDiaraT*$obligacion*2*100),2);
        //echo "El valor de la multiplicacion con respecto a la obligacion es : ".$valorDias;
        for ($i=0;$i<=$numAnnos;$i++){
            ///echo "<br><br>El año es:".$annoEje."<br><br>";
            $calendario=new CalendarioAnual($annoEje);
            $meses = $calendario->getMeses();
            foreach ($meses as $mes => $dias) {
                $fechaBase=$annoEje."-".$mes."-".$dias;
                        ///echo "Fechaaaa Base: ".$fechaBase;
                $obliPor=0;
                $intePor=0;
                $diaCorte=0;
                $costPor=0;
                
                $obliReca=0;
                $inteReca=0;
                $costReca=0;
                if ($annoEje==$annoHasta && ($mesDesde<$mes&&$mes<$mesHasta)){
                    $elementos=range(1,$dias);
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorCorte=0;
                    $diasS=0;
                    foreach($elementos as $dia){ 
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        //echo "<br>".$fechaCom;
                        foreach ($recaudos as $fecha) {
                            if($fecha["Fecha"]==$fechaCom) {
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                ///echo "<br>Obligacion Porcentual ".$obliPor;
                                ///echo "<br>Interes Porcentual ".$intePor;
                                $diaCorte=$dia-1;
                                $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                //$obligacion=$obligacion-$obliPor;
                                //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                $fechaIns=$annoEje."-".$mes."-".$diaCorte;
                                ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                //$saldoInteresCorte=$sumaTotalDiaria;
                                $this->insertRe($numero,$fechaIns,$diasS,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $pagoId=$this->getpagoId();
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */
                                //$costas=$costas-$costPor;
                                //$obligacion=$obligacion-$obliPor;
                                //$sumaTotalDiaria=$sumaTotalDiaria-$intePor;
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }
                    }
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $obligacion=$obligacion-$obliReca;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    $sumaTotalDiaria=$sumaTotalDiaria-$inteReca;
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=$tasaDiaraT*$diasS;
                    //echo "Valor Desde: ".$sumaTotal;
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dias." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    $this->insertRe($numero,$fechaBase,$diasS,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);  
                }
                else if ($annoEje==$annoHasta && $mes==$mesHasta){
                    //echo "Valor S:".$sumaTotal;
                    $numDiasMesAct=$dias-$diaHasta;
                    $numDiasMesAct=0; // se quema el valor 0
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    //$valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),2);
                    //$sumaTotal+=$valorDias;
                    $elementos=range(1,$numDiasMesAct);
                    //$this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    
                    //print_r($elementos);
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    $obligacion=$obligacion-$obliPor;
                    //$sumaTotalDiaria=$sumaTotalDiaria-$intePor;
                    $valorDias=$tasaDiaraT*$numDiasMesAct;
                    $this->insertRe($numero,$fechaBase,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);  
                }
                else if ($annoEje==$annoDesde && $mes==$mesDesde){
                    $numDiasMesAct=$diaDesde-1;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    //$valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),2);
                    //$sumaTotalDiaria+=$valorDias;
                    //echo "Valor : $sumaTotalDiaria";
                    $elementos=range(1,$numDiasMesAct);
                    foreach($elementos as $dia){
                        //echo "Ing<br>";
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        foreach ($recaudos as $fecha) {
                            if($fecha["Fecha"]==$fechaCom) {
                                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                $diaCorte=$dia-1;
                                $valorCorte=$valorDiario*$diaCorte;
                                $diaCorte=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                //$obligacion=$obligacion-$obliPor;
                                //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                $fechaIns=$annoEje."-".$mes."-".$diaCorte;
                                ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                //$saldoInteresCorte=$sumaTotalDiaria;
                                $this->insertRe($numero,$fechaIns,$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $obligacion=$obligacion-$obliPor;
                                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                $pagoId=$this->getpagoId();
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }   
                    }
                    $dia=$dia-$diaCorte;
                        if ($dia==0){
                            $dia=1;
                        }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    $sumaTotalDiaria=$sumaTotalDiaria-$inteReca;
                    $obligacion=$obligacion-$obliPor;
                    $valorDias=round(($tasaDiaraT*$obligacion*$dia*100),4);
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald); 
                }
                else if($mesEje==$mes && $annobase==$annoEje){
                    //echo "Holaaaa";
                    $numDiasMesAct=$dias-$diaEje;
                    if ($annoAct==$annoEje && $mesAct==$mes){
                        $numDiasMesAct=$diaAct-$diaEje;
                    }
                    //echo $numDiasMesAct;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mesEje);
                    $fechaIns=$annoEje."-".$mes."-".$dias;
                    $this->deleteRe($numero);
                    //insertRe($numero,$fechaIns,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    //$procesoId,$fecha,$dias,$tasa,$intereses,$obliReca,$obliNove,$obliSald,$inteReca,$inteNove,$inteSald,$costReca,$costNove,$costSald
                    for($dia=1;$dia<=$numDiasMesAct;$dia++){ 
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),20);
                        $sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        //$dia=$dia+1;
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        //echo "<br>FECHAAAAAAAA".$fechaCom;
                        foreach ($recaudos as $fecha) {
                            if($fecha["Fecha"]==$fechaCom) {
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"]);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"]);
                                $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                //$obliPor=($$obligacion/($$obligacion+$costas+$inteAcu));
                                //$intePor=($inteAcu/($obliInicial+$costas+$inteAcu));
                                //echo "La fecha es igual al recaudo 3";
                                $diaCorte=$dia-1;
                                $valorCorte=$valorDiario*$diaCorte;
                                $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                $fechaCom=$annoEje."-".$mes."-".$diaCorte;
                                                            //echo "Fechaloooooo: ".$fechaCom;
                                                            //var_dump($fechaCom);
                                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                //$obligacion=$obligacion-$obliPor;
                                $this->insertRe($numero,$fechaCom,$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $obligacion=$obligacion-$obliPor;
                                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                $pagoId=$this->getpagoId();
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */  
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }
                    }
                    $numDiasMesAct=$numDiasMesAct-$diaCorte;
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    $obligacion=$obligacion-$obliPor;
                    $sumaTotal=$sumaTotalDiaria-$inteReca;
                    //$sumaTotal=$sumaTotalDiaria+$valorDias-$inteReca;
                    //$obligacion=$obligacion-$obliPor;
                    $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),4);
                    ///echo "<br><strong> El año esll: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    if ($numDiasMesAct>0){
                        $this->insertRe($numero,$fechaBase,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    }
                }
                else if ($mesEje>$mes && $annobase==$annoEje){
                    //echo "Este mes: $mes con dias $dias no aplica<br>";
                }
                else if ($annoEje==date("Y") && $mes==date("m")){
                    $numDiasMesAct1=date("d");
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct1*100),2);
                    $sumaTotal+=$valorDias;
                    $elementos=range(1,$numDiasMesAct1);
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct1." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."<br></strong>";
                    $fechaIns=$annoEje."-".$mes."-".$dias;
                    //insertRe($numero,$fechaIns,$numDiasMesAct1,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    foreach($elementos as $dia){   
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        //echo "<br>".$fechaCom;
                        foreach ($recaudos as $fecha) {
                            if($fecha["Fecha"]==$fechaCom) {
                                //echo "La fecha es igual al recaudo 4";
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"]);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"]);
                                $diaCorte=$dia-1;
                                $valorCorte=$valorDiario*$diaCorte;
                                $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                //$obligacion=$obligacion-$obliPor;
                                //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$fechaIns=$annoEje."-".$mes."-".$dia;
                                $fechaIns=$annoEje."-".$mes."-".$diaCorte;
                                //echo $fechaIns;
                                //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                $this->insertRe($numero,$fechaIns,$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $obligacion=$obligacion-$obliPor;
                                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                $pagoId=$this->getpagoId();
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }
                    }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    $obligacion=$obligacion-$obliPor;
                    $sumaTotal=$sumaTotalDiaria-$inteReca;
                    $dia=$dia-$diaCorte;
                    //$sumaTotal=$sumaTotalDiaria+$valorDias-$inteReca;
                    //$obligacion=$obligacion-$obliPor;
                    $valorDias=round(($tasaDiaraT*$obligacion*$dia*100),4);
                    if ($mes==12){
                        //echo "Ingreso";
                        $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
                        $this->suma=$result["total"];
                        $this->sumaTotalDiaria=$sumaTotalDiaria; 
                    }
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dia." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald); 
                }
                else if($annoEje=='2023' && $mes=='09'){
                    $diaSuspe=7;
                    $numDiasMesAct=$dias-$diaSuspe;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),2);
                    $sumaTotal+=$valorDias;
                    $elementos=range(1,$numDiasMesAct);
                    foreach($elementos as $dia){
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        ///echo "<br>".$fechaCom;
                        foreach ($recaudos as $fecha) {
                            if($fecha["Fecha"]==$fechaCom) {
                                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                echo "La fecha es igual al recaudo 5";
                                ///echo "<br>Obligacion ".$obligacion;
                                ///echo "<br> SumaIntereses: ".$sumaTotalDiaria;
                                ///echo "<br>COSTAoriginal: ".$costas;
                                ///echo "<br>Recaudo: ".$fecha["Pago"];
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                ///echo "<br>Obligacion Porcentual ".$obliPor;
                                ///echo "<br>Interes Porcentual ".$intePor;
                                $diaCorte=$dia-1;
                                $valorCorte=$valorDiario*$diaCorte;
                                $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                //$obligacion=$obligacion-$obliPor;
                                //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                $fechaIns=$annoEje."-".$mes."-".$diaCorte;
                                ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                //$saldoInteresCorte=$sumaTotalDiaria;
                                $this->insertRe($numero,$fechaIns,$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $obligacion=$obligacion-$obliPor;
                                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                $pagoId=$this->getpagoId();
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }
                    }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    //$obligacion=$obligacion-$obliPor;
                    $sumaTotal=$sumaTotalDiaria-$inteReca;
                    //$sumaTotal=$sumaTotalDiaria+$valorDias-$inteReca;
                    //$obligacion=$obligacion-$obliPor;
                    $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),4);
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotalDiaria."</strong>";
                    $this->insertRe($numero,$fechaBase,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald); 
                }
                else if($annoEje==date("Y")&&$mes>date("m")){
                    //echo "Este mes: $mes con dias $dias no aplica<br>";
                                //echo "La suma total es:".$sumaTotalDiaria;
                                //echo "<script>alert('Holaaaa'+$sumaTotalDiaria);</script>";
                                $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
                                $this->suma=$result["total"];
                                $this->sumaTotalDiaria=$sumaTotalDiaria;
                                //echo "<script language='javascript'>alert('El valor Saldo total al dia es de:'+$sumaTotalDiaria);location.reload(); </script>";
                    //exit();
                }
                else{
                                //echo "Valor de la Tasa para Octubre $tasaDiariaT";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=round(($tasaDiaraT*$obligacion*$dias*100),2);
                    $sumaTotal+=$valorDias;
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dias." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>"; 
                    $fechaIns=$annoEje."-".$mes."-".$dias;
                    //insertRe($numero,$fechaIns,$dias,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    $elementos=range(1,$dias);
                    foreach($elementos as $dia){ 
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        //echo "<br>".$fechaCom;
                        foreach ($recaudos as $fecha) {
                            //echo "fecha del recaudo".$fecha["Fecha"];
                            if($fecha["Fecha"]==$fechaCom) {
                                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                //echo "La fecha es igual al recaudo 6";
                                $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                //echo "<br>Obligacion Porcentual ".$obliPor;
                                //echo "<br>Interes Porcentual ".$intePor;
                                //echo "<br>Costas Porcentual ".$costPor;
                                $dia=$dia-1;
                                $diaCorte=$dia;
                                $valorCorte=$valorDiario*$dia;
                                $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                //$obligacion=$obligacion-$obliPor;
                                //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                $fechaIns=$annoEje."-".$mes."-".$dia;
                                //var_dump($fechaIns);
                                //$fechaObjeto = DateTime::createFromFormat('Y-m-d', $fechaIns);
                                $this->insertRe($numero,$fechaIns,$dia,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                $obligacion=$obligacion-$obliPor;
                                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//se suma el interes del dia del recaudo bsado en la nueva obligacion;
                                //$pagoId=$this->getpagoId();
                                //echo "Valor del PagoId: ".$fecha["PagoId"];
                                //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                /*
                                if ($pagoId==$fecha["PagoId"]){
                                    $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                }
                                */
                            }
                            //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                        }
                    }
                    $dia=$dia-$diaCorte;
                        if ($dia==0){
                            $dia=1;
                        }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costas=$costas-$costReca;
                    $costSald=$costas;
                    //echo "Valor Costas: ".$costReca;
                    //$sumaTotal=$sumaTotalDiaria+$valorDias-$inteReca;
                    //$obligacion=$obligacion-$obliPor;
                    $valorDias=round(($tasaDiaraT*$obligacion*$dia*100),4);
                    $sumaTotalDiaria=$sumaTotalDiaria-$inteReca;
                    ///echo "<br>valor de la suma de Intereses:".$sumaTotalDiaria;
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dia." y su valor a liquidar es: ".$valorDias." dando la suma de: ".$sumaTotalDiaria."</strong>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                }
                //echo "<br>$mes tiene " . $dias . " días.";
            }
            $annoEje++; 
        }
    }
    public function calInteresesCierre($anoActual,$mesActual){
        //$count=0;
        $infoProceso=$this->infoProceso($this->procesoId);
        foreach($infoProceso as $date){
            //$params["Numero"]=$date["Numero"];
            $naturaleza=$date["Naturaleza"];
            //$costas=$date["Costa"];
            $concepto=$date["Concepto"];
            $obligacion=$date["Obligacion"];
            //$fechaP=$date["Plazo"];
        }
        $tasaDiaraT=$this->tasa($naturaleza,$concepto,$anoActual,$mesActual);
        $calendario=new CalendarioAnual($$anoActual);
        $meses = $calendario->getMeses();
        foreach ($meses as $mes => $dias) {
            if ($mes==$mesActual){
                $numDiasMesAct1=date("d");
                //$valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct1*100),2);
                $elementos=range(1,$numDiasMesAct1);
                //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct1." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."<br></strong>";
                //$fechaIns=$anoActual."-".$mes."-".$dias;
                //insertRe($numero,$fechaIns,$numDiasMesAct1,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                foreach($elementos as $dia){
                    //echo $count++."<br>";   
                    $sumaTotalDiaria+=$valorDiario;
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                    $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                    //$fechaCom=$anoActual."-".$mes."-".$dia;
                    //echo "<br>".$fechaCom;
                }
                return $sumaTotalDiaria;
                //echo "El valor de los intereses es: ".$sumaTotalDiaria." para el calculo de ".$dia." del mes ".$mes."<br>";
                /*
                if ($mes==12){
                    //echo "Ingreso";
                    $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
                    $this->suma=$result["total"];
                    $this->sumaTotalDiaria=$sumaTotalDiaria; 
                }
                ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dia." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald); 
            */
            //echo "ingreso en el mes".$mes." con dias ".$dias."<br>";
            }}
        }
    public function pagoId($pagoId){
        //echo "El valor essss antes de : ".$pagoId;
        $this->pagoId=$pagoId;
    }
    public function getpagoId(){
        return $this->pagoId;
    }
    public function updatePagoId($PagoCost,$PagoObli,$PagoInte,$pagoId){
        //echo "Ingreso a relizar el update con valores: ".$PagoCost.",".$PagoObli.",".$PagoInte.",".$pagoId;
        $resultado["response"]=DB::Exec("UPDATE Pagos1 set PagoCost=".$PagoCost.",PagoObli=".$PagoObli.",PagoInte=".$PagoInte." where PagoId=".$pagoId);
        //$this->resultUpdate=$resultado["response"];
        $consulta = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$this->procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $intereses=$date["Intereses"];
                $obligacion=$date["Obligacion"];
                $costas=$date["Costas"];
            }
            $intereses=$intereses-$PagoInte;
            $obligacion=$obligacion-$PagoObli;
            $costas=$costas-$PagoCost;
        $updatePro=DB::Exec("UPDATE Procesos set Obligacion=".$obligacion.",Intereses=".$intereses.",Costas=".$costas." where ProcesoId=".$this->procesoId);
            //$this->resultUpdate=$resultado["response"];
        if ($updatePro){

        }
        else{
            echo "Error en el update, relacionado con el pago en procesos".DB::LastError();
            exit();
        }

        if ($resultado["response"]) {
            //echo '<script>alert("Se realiza la actualizacion del pagoId")</script>';
            $consulta = DB::Query("SELECT * FROM Pagos1 WHERE PagoId=".$pagoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $pago=$date["Pago"];
                $procesoIdR=$date["ProcesoId"];
            }
            $consulta2 = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoIdR);
            while( $date = $consulta2->fetchAssoc() )
            {
                $recaudo=$date["Recaudo"];
            }
            $recaudo=intval($recaudo);
            $recaudo=$pago+$recaudo;
            DB::Exec("UPDATE Procesos set Recaudo=".$recaudo." where ProcesoId=".$procesoIdR);
        }
        else {
            // Hubo un error en la ejecución de la consulta
            echo "<script>alert('Se realiza la actualizacion del pagoId')</script>Error al ejecutar la consulta: " . DB::LastError();
            exit();
        }
    }
    public function getFechas(){
        $fechaEjecutoria=$this->fechaEjecutoria;
        $fechaActual=$this->fechaActual;
        //echo "valores de las fechas".$fechaEjecutoria;
        //echo "valores de las fechas".$fechaActual;
        $resultado = array(
            "fechaEjecutoria" => $fechaEjecutoria,
            "fechaActual" => $fechaActual
        );
        return ($resultado);
    }
}