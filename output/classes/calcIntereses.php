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
    public function limpiarNumero($numero) {
    // Detectar si el número tiene formato europeo (punto como separador de miles y coma como decimal)
        if (strpos($numero, '.') !== false && strpos($numero, ',') !== false) {
            // Eliminar puntos (separadores de miles)
            $numero = str_replace('.', '', $numero);
            // Reemplazar la coma por un punto (separador decimal estándar)
            $numero = str_replace(',', '.', $numero);
        }
        // Convertir a número flotante o entero según se necesite
        return (float)$numero; // Usar (int)$numero si deseas solo la parte entera
    }
    public function infoProceso($procesoId){
        $rs5 = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$procesoId);
        while( $date = $rs5->fetchAssoc() )
		{
            //$this->obligacionInicial=$date["Obligacion"];
            $this->obligacionInicial=$date["ObligacionInicial"];
            $this->obligacionSaldo=$date["Obligacion"];
            //$this->costas=$date["Costas"];
            //echo "valorrrr".
            if (!$date["Plazo"]){
                $date["Plazo"]=$date["Ejecutoria"]; 
            }
            $info[]=array(
                "Naturaleza"=>$date["NaturalezaId"],
                "Concepto"=>$date["ConceptoId"],
                "Costa"=>$date["CostasInicial"],
                //"Obligacion"=>$date["Obligacion"],
                "Obligacion"=>$date["ObligacionInicial"],
                "Plazo"=>$date["Plazo"],
                "ObligacionSaldo"=>$date["Obligacion"]
            );
            //echo "Valor de la costaaaa".$info["Costa"];
            return $info;
		}
    }
    public function tasa($nat,$conc,$a,$m){
        //echo "Conce:".$conc." Natura:".$nat;
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
            $tasaUsura=round($date["Tasa"],12); //4
            //echo "La tasa de Usura es: ".$tasaUsura."<br>";
            $tasaUsuraDiaria=round(($tasaUsura/$diasTotales/100),12); //20
            //echo "La tasa de Usura diaria es: ".$tasaUsuraDiaria."<br>";
        }
        $tasaDian=$tasaUsura-0.02;
        //echo "La tasa DIAN es: ".$tasaDian."<br>";
        $tasaDianDiaria=round(($tasaDian/$diasTotales/100),12);
        //echo "La tasa DIAN diaria es: ".$tasaDianDiaria."<br>";
            $consulta=DB::Query("SELECT * from Empresas where EmpresaId=1");
            while($date=$consulta->fetchAssoc()){
            //echo $date."<br>";
            $tasaDTN=round($date["TasaDTN"],12);
            //echo "La tasa DTN es: ".$tasaDTN."<br>";
            $tasaDtnDiaria=round(($tasaDTN/$diasTotales/100),12);
            //echo "La tasa DTN diaria es: ".$tasaDtnDiaria."<br>";
        }
            $consulta=DB::Query("SELECT * from Tasas where Desde like '%".$a."-".$m."%' and Tipo=3");
            while($date=$consulta->fetchAssoc()){
            //echo $date."<br>";
            $tasaCorriente=round($date["Tasa"],12);
            //echo "La tasa CORRIENTE es: ".$tasaCorriente."<br>";
           $tasaCorrienteDiaria=round(($tasaCorriente/$diasTotales/100),12);
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
                "PagoInte" => $date['PagoInte'],
                "Registro" => $date ['Registro']
            );
        };
            //print_r($fechasR);
            $sumaPorFecha = array();
            foreach($fechasR as $dato){
                $fecha = $dato['Fecha'];
                $valor = $dato['Pago'];
                $PagoObli = $dato['PagoObli'];
                $PagoCost = $dato['PagoCost'];
                $PagoInte = $dato['PagoInte'];
                $pagoId = $dato['PagoId'];
                $Registro = $dato['Registro'];
            if (array_key_exists($fecha,$sumaPorFecha)){
                $sumaPorFecha[$fecha]['Pago']+=$valor;
                $sumaPorFecha[$fecha]['PagoObli']+=$PagoObli;
                $sumaPorFecha[$fecha]['PagoCost']+=$PagoCost;
                $sumaPorFecha[$fecha]['PagoInte']+=$PagoInte;
                $sumaPorFecha[$fecha]['PagoId']=$pagoId; //reemplazo el PagoId por el ultimo registro del mismo dia
            }
            else{
                $sumaPorFecha[$fecha]=array('Fecha'=>$fecha,'Pago'=>$valor,'PagoId'=>$pagoId,'PagoObli'=>$PagoObli,'PagoCost'=>$PagoCost,'PagoInte'=>$PagoInte,'Registro'=>$Registro);
            }
            }
            //print_r($sumaPorFecha);
            return $sumaPorFecha;
            //$fechasR
            //print_r($fechasR);
            //print_r($sumaPorFecha);
    }
    public function recaudoInsert($procesoId){
                //echo "Valourrrrrr: ".var_dump ($procesoId);
                $fechasR=array();
                $consultaR=DB::Query("SELECT TOP 1 * FROM Pagos1 WHERE ProcesoId=".$procesoId." ORDER BY PagoId DESC");
                    //echo "la consulta da como resultado: ".$consultaR;
                while($date=$consultaR->fetchAssoc() ){
                    $fechasR []= array(
                        "Fecha"=> date("Y-m-d", strtotime($date['Fecha'])),
                        "Pago" => $date['Pago'],
                        "PagoId" => $date['PagoId'],
                        "PagoObli" => $date['PagoObli'],
                        "PagoCost" => $date['PagoCost'],
                        "PagoInte" => $date['PagoInte'],
                        "Registro" => $date ['Registro']
                    );
                };
                    //print_r($fechasR);
                    $sumaPorFecha = array();
                    foreach($fechasR as $dato){
                        $fecha = $dato['Fecha'];
                        $valor = $dato['Pago'];
                        $PagoObli = $dato['PagoObli'];
                        $PagoCost = $dato['PagoCost'];
                        $PagoInte = $dato['PagoInte'];
                        $pagoId = $dato['PagoId'];
                        $Registro = $dato['Registro'];
                    if (array_key_exists($fecha,$sumaPorFecha)){
                        $sumaPorFecha[$fecha]['Pago']+=$valor;
                        $sumaPorFecha[$fecha]['PagoObli']+=$PagoObli;
                        $sumaPorFecha[$fecha]['PagoCost']+=$PagoCost;
                        $sumaPorFecha[$fecha]['PagoInte']+=$PagoInte;
                        $sumaPorFecha[$fecha]['PagoId']=$pagoId; //reemplazo el PagoId por el ultimo registro del mismo dia
                    }
                    else{
                        $sumaPorFecha[$fecha]=array('Fecha'=>$fecha,'Pago'=>$valor,'PagoId'=>$pagoId,'PagoObli'=>$PagoObli,'PagoCost'=>$PagoCost,'PagoInte'=>$PagoInte,'Registro'=>$Registro);
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
            // Dividir en partes: año, mes y día
            //echo $fecha;
            
            list($anio, $mes, $dia) = explode('-', $fecha);
            if ($dia==00){
                $dia=01;
                $fecha=$anio.'-'.$mes.'-'.$dia;
                $date = new DateTime($fecha);
                // Restar un día
                $date->modify('-1 day');
                // Mostrar el resultado
                $date->format('Y-m-d');
                $fecha=$date->format('Y-m-d');
                $intereses=0;$obliReca=0;$obliNove=0;$inteReca=0;$inteNove=0;$costReca=0;$costNove=0;
            } 
            
            $tasa=floatval($tasa*100);
            //echo "Value ingresando:".$obliReca."<br>";
            //var_dump($fecha);
                    //var_dump($procesoId);var_dump($fecha);var_dump($dias);var_dump($tasa);var_dump($intereses);var_dump($obliReca);var_dump($obliNove);var_dump($obliSald);var_dump($inteReca);var_dump($inteNove);var_dump($inteSald);var_dump($costReca);var_dump($costNove);var_dump($costSald);
            //echo "Valores: ProcesoId:".$procesoId."_ Fecha: ".$fecha."_Dias: ".$dias."_Tasa: ".$tasa."_Intereses: ".$intereses."_ObliReca: ".$obliReca."_ObliNove".$obliNove."_ObliSal: ".$obliSald."_InteReca: ".$inteReca."_InteNove: ".$inteNove."_InteSal: ".$inteSald."_CostReca: ".$costReca."_CostNove: ".$costNove."_CostSald: ".$costSald."<br>";
            $consulta2=DB::Exec("INSERT INTO Reliquidaciones (ProcesoId,Fecha,Dias,Tasa,Intereses,ObliReca,ObliNove,ObliSald,InteReca,InteNove,InteSald,CostReca,CostNove,CostSald) VALUES (".$procesoId.",'".$fecha."',".$dias.",".$tasa.",".$intereses.",".$obliReca.",".$obliNove.",".$obliSald.",".$inteReca.",".$inteNove.",".$inteSald.",".$costReca.",".$costNove.",".$costSald.")");
                    if ($consulta2) {
                //echo "La consulta se realizó correctamente.";
                    } 
                    else {
                        //var_dump($fecha);
                // Hubo un error en la ejecución de la consulta
                            echo "Error al ejecutar la realizar el insert en Reliquidaciones: " . DB::LastError();
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
    public function getObligacion(){
        //echo "Value: ".$this->sumaTotalDiaria;
        return $this->obligacion;
    }
    public function getInterSumCost(){
        //$costF=round($this->costas,2);
        $sumaF=round($this->sumaTotalDiaria,2);
        //$sumaCosInt=$costF+$sumaF;
        //$sumaCosInt;
        //$this->sumaTotalDiaria;
        return $sumaF;
    }
    
    public function Calcular2($fechaFin,$flagInsertPago){
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
        //Se verifica si hay Suspensiones, Recaudos y Novedad Costas
        $suspensiones=$this->suspensiones();
        $novCostas=$this->novedadCostas($numero);
        $recaudos=$this->recaudo($numero);
        //print_r($recaudos);
        //exit();
        $fechaInicio= new DateTime($fechaP);
        $fechaFin = new DateTime($fechaFin);
        // Incluir la fecha final en el rango
        $fechaFin->modify('+1 day');
        // Incluir la fecha final en el rango
        $fechaInicio->modify('+1 day');
        // Variables para rastrear cambios de mes y año
        $mesAnterior = $fechaInicio->format('m');
        $anioAnterior = $fechaInicio->format('Y');
        $diaCorte=0;
        //Porcentajes en 0 al no haber recaudos.
        $obliReca=0;
        $inteReca=0;
        $costReca=0;
        //Porcentajes en 0 al no haber Novedades.
        $obliNove=0;
        $inteNove=0;
        $costNove=0;
        //Costa en 0 al no haber novedad de Costas:
        $costSald=0;
        //Pofcentajes Calculados en 0 inicia:
        $obliPor=0;
        $intePor=0;
        $costPor=0;
        //Se deja diaCorte2 en 0
        $diaCorte2=0;
        // Iterar sobre el rango de fechas
        while ($fechaInicio < $fechaFin) {
            $tasaDiaraT=$this->tasa($naturaleza,$concepto,$fechaInicio->format('Y'),$fechaInicio->format('m'));
            $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
            $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;
            //Verificar si hay Novedad Costa
            foreach($novCostas as $novedad){
                if($novedad["Fecha"]==$fechaInicio) {
                    $costas=$novedad["Nuevo"];
                    // Eliminar la coma como separador de miles
                    $sinComas = str_replace(',', '', $costas);

                    // Convertir a número entero
                    $costas = (int)$sinComas;
                    $this->costas=$costas;
                    //echo "Value Costas=".$costas;
                }
            }
            //Verificar si el dia esta en al fecha de suspension para no sumar Intereses y bajar Diacorte
            foreach($suspensiones as $suspension){
                //echo "Fecha Sus:".$suspension['Desde'];
                $fechaDesde=new DateTime($suspension['Desde']);
                $fechaHasta=new DateTime($suspension['Hasta']);
                // Incluir la fecha final en el rango
                //$fechaDesde->modify('+1 day');
                // Incluir la fecha final en el rango
                $fechaHasta->modify('+1 day');
                //print_r($fechaDesde);
                while ($fechaDesde < $fechaHasta){
                    if($fechaDesde->format('Y-m-d')==$fechaInicio->format('Y-m-d')){
                        $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                        $diaCorte=$diaCorte-1;
                    }
                    //echo "Fecha NO INT:".$fechaDesde->format('Y-m-d')."<br>";
                    $fechaDesde->modify('+1 day');
                }
            }       
            foreach ($recaudos as $recaudo) {
                //echo "Valor de la fecha recaudo:".$recaudo['Fecha']." Valor fecha a Comparar: ".$fechaInicio->format('Y-m-d')."<br>";
                if($recaudo["Fecha"]==$fechaInicio->format('Y-m-d')) {
                    //echo "Entro al Recaudo".$recaudo["Fecha"] ."---".$fechaInicio->format('Y-m-d')."<br>";
                    $obliPor=$recaudo["PagoObli"];
                    $intePor=$recaudo["PagoInte"];
                    $costPor=$recaudo["PagoCost"];
                    ///echo "<br>Obligacion Porcentual ".$obliPor;
                    ///echo "<br>Interes Porcentual ".$intePor;
                    $diaCorte2=$diaCorte;
                    $$diaCorte=str_pad($diaCorte2, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                    $fechaInicio->modify('-1 day');
                    $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                    $valorCorte=$valorDiario*$diaCorte;
                    $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                    //$obligacion=$obligacion-$obliPor;
                    //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                    //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                    //$fechaIns=$annoEje."-".$mes."-".$diaCorte;
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                    //$saldoInteresCorte=$sumaTotalDiaria;
                    $this->insertRe($numero,$fechaInicio->format('Y-m-d'),$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                    //restar pocentajes:
                    $sumaTotalDiaria=$sumaTotalDiaria-$intePor;
                    $obligacion=$obligacion-$obliPor;
                    $costas=$costas-$costPor;
                    //$pagoId=$this->getpagoId();
                    //$this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                    //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                    /*
                    if ($pagoId==$fecha["PagoId"]){
                        $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                    }
                    */
                    //$costas=$costas-$costPor;
                    //$obligacion=$obligacion-$obliPor;
                    //$sumaTotalDiaria=$sumaTotalDiaria-$intePor;
                    $fechaInicio->modify('+1 day'); // Sumar un día
                    unset($recaudos[$recaudo["Fecha"]]); //borra el recaudo ya hallado, para que no se compare con las demas fechas
                }
        
                //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
            }
            //echo $fechaInicio->format('Y-m-d') . "<br>";
            // Comprobar si el mes cambio
            if (($fechaInicio->format('m') != $mesAnterior)|| ($fechaInicio==$fechaFin)) {
                $diaCorte=$diaCorte-$diaCorte2;
                $obliReca=$obliPor;
                $inteReca=$intePor;
                $costReca=$costPor;
                $costas=$costas-$costReca;
                $costSald=$costas;
                $fechaInicio->modify('-1 day');
                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                $valorCorte=$valorDiario*$diaCorte;
                $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                $this->insertRe($numero,$fechaInicio->format('Y-m-d'),$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                $fechaInicio->modify('+1 day');
                //$tasaDiaraT=$this->tasa($naturaleza,$concepto,$fechaInicio->format('Y'),$fechaInicio->format('m'));
                $mesAnterior = $fechaInicio->format('m');
                $diaCorte=0; // Se reinicia el Dia a Corte
                //Porcentajes en 0 al no haber recaudos.
                $obliReca=0;
                $inteReca=0;
                $costReca=0;
            }
            //$nuevoTimestamp = strtotime('+1 day', $fechaInicio->getTimestamp());
            //$fechaInicio->setTimestamp($nuevoTimestamp);      
            //$fechaInicio->add(new DateInterval('P1D'));
            $fechaInicio->modify('+1 day'); // Sumar un día
            $diaCorte=$diaCorte+1;
            /*
            // Comprobar si el año cambió
            if ($fechaInicio->format('Y') != $anioAnterior) {
                $tasaDiaraT=$this->tasa($naturaleza,$concepto,$fechaInicio->format('Y'),$fechaInicio->format('m')); // Se reinica la Tasa al cambiar año 
                echo "==== Cambio de año: " . $fechaInicio->format('Y') . " ====\n";
                $anioAnterior = $fechaInicio->format('Y');
            }
            */
        }
        $this->suma=$sumaTotalDiaria+$obligacion+$costSald;
    }
    public function Calcular($fechaInicio,$flagInsertPago,$alterProceso){
        //echo "Entro a calcular Value: $flagInsertPago<br>";
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
        //Se cambia la fecha plazo al se Poliza Concepto=2
        if ($concepto==2){
            // Crear un objeto DateTime con la fecha actual
            $fechaP = new DateTime($fechaP);

            // Sumar 35 días calendario
            $fechaP->modify('+34 days');

            // Mostrar el resultado en formato 'Y-m-d'
            $fechaP=$fechaP->format('Y-m-d');
        }
        if ($flagInsertPago==1){
            $recaudosInsert=$this->recaudoInsert($numero);
            foreach ($recaudosInsert as $recaudosIn) {
                $recaudoFecha=$recaudosIn["Fecha"];
            }
        }
        $recaudos=$this->recaudo($numero);
        //$recaudos=$this->recaudo($numero);
        $suspensiones=$this->suspensiones();
        //print_r($recaudos);
        //print_r($suspensiones);
        $novCostas=$this->novedadCostas($numero);
        //print_r($recaudos);
        $this->fechaEjecutoria=$fechaP;
        //$this->fechaActual=date('Y-m-d');
        //echo "Fecha Plazo $fechaP <br>";
        $this->fechaActual=$fechaInicio;
        $fecha_objeto = new DateTime($fechaP);
        $annoEje = $fecha_objeto->format('Y');  // Año Fecha Plazo
        $mesEje = $fecha_objeto->format('m');   // Mes Fecha Plazo
        $diaEje = $fecha_objeto->format('d');   // Dia Fecha Plazo
        $fecha_objeto2=  new DateTime($this->fechaActual);
        $annoAct = $fecha_objeto2->format('Y');  // Año Fecha Actual
        $mesAct = $fecha_objeto2->format('m');   // Mes Fecha Actual
        $diaAct = $fecha_objeto2->format('d'); // Dia Fecha Actual 
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
        //print_r($recaudos);
        $diaAcumulado=0;
        for ($i=0;$i<=$numAnnos;$i++){
            ///echo "<br><br>El año es:".$annoEje."<br><br>";
            $calendario=new CalendarioAnual($annoEje);
            $meses = $calendario->getMeses();
            
            foreach ($meses as $mes => $dias) {
                $fechaBase=$annoEje."-".$mes."-".$dias;
                //echo "Fechaaaa Base: $fechaBase y valor de la sumaTotalDiaria: $sumaTotalDiaria<br>";
                $obliPor=0;
                $intePor=0;
                $diaCorte=0;
                $costPor=0;
                
                $obliReca=0;
                $inteReca=0;
                $costReca=0;

                $diaAcum=0;

                $pagoId='NULL';

                if (($annoEje==$annoHasta && ($mesDesde<$mes&&$mes<$mesHasta))||$annoEje==$annoHasta && $mes==$mesHasta){//Cuando los dias estan entre los meses 04-05 del 2020
                    $elementos=range(1,$dias);
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorCorte=0;
                    $diasS=0;
                    foreach($elementos as $dia){ 
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaCom) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                            }
                        }
                        //echo "<br>".$fechaCom;
                            foreach ($recaudos as $fecha) {
                                if($fecha["Fecha"]==$fechaCom) {
                                    $pagoId=$fecha["PagoId"];
                                    $fechaRegistro=new DateTime ($fecha["Registro"]);
                                    $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                    $fechaActualR=new DateTime (now());
                                    $fechaActualR=$fechaActualR->format('Y-m-d');
                                    //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                    //echo "Valor FEcha Registro: $fechaRegistro Valor Fecha Actual: $fechaActualR <br>";
                                    if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaCom==$recaudoFecha){
                                        //echo "Entro <br>";
                                        $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        //$this->Calcular(date('Y-m-d'),0);
                                        $fecha["PagoObli"]=$obliPor;
                                        $fecha["PagoInte"]=$intePor;
                                        $fecha["PagoCost"]=$costPor;
                                    }
                                    $obliPor=$fecha["PagoObli"];
                                    $intePor=$fecha["PagoInte"];
                                    $costReca=$fecha["PagoCost"];
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
                                    //$pagoId=$this->getpagoId();
                                    //$this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
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
                else if ($annoEje==$annoDesde && $mes==$mesDesde && $fecha_objeto2>$fecha_objeto){ //Cuando los dias estan entre 2020-03-01 - 2020-03-31 (Suspension desde 2020-03-24) y se compara las fecha de plazo contra la suspension para que fecha plazo sea meno a fecha suspension dsde
                    //echo "value mes $mes y value mesDesde $mesDesde y el valor es $sumaTotalDiaria<br>";
                    $numDiasMesAct=$diaDesde-1;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    //$valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),2);
                    //$sumaTotalDiaria+=$valorDias;
                    //echo "Valor : $sumaTotalDiaria";
                    $elementos=range(1,$dias);
                    foreach($elementos as $dia){
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaCom) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                            }
                        }
                        //echo "Ing<br>";
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        //echo "Valor suma diaria $sumaTotalDiaria antes de entrar <br>";
                        if ($dia<=$numDiasMesAct){ //se verifica ya que en este mes solo debe liquidar 23 dias y no los 31 dias del mes
                            $sum+=$valorDiario;
                            //echo "Valor de la suma del mes:".$sum;
                            $sumaTotalDiaria+=$valorDiario;
                            //echo "Valor suma diaria $sumaTotalDiaria <br>";
                        }
                        //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                            foreach ($recaudos as $fecha) {
                                //echo "FechaRecaudo: ".$fecha["Fecha"]."<br>Fecha comparativa:".$fechaCom;
                                if($fecha["Fecha"]==$fechaCom) {
                                    $pagoId=$fecha["PagoId"];
                                    $fechaRegistro=new DateTime ($fecha["Registro"]);
                                    $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                    $fechaActualR=new DateTime (now());
                                    $fechaActualR=$fechaActualR->format('Y-m-d');
                                    //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                    //echo "Valor FEcha Registro: $fechaRegistro Valor Fecha Actual: $fechaActualR <br>";
                                    if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaCom==$recaudoFecha){
                                        //echo "Entro <br>";
                                        $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        //$this->Calcular(date('Y-m-d'),0);
                                        $fecha["PagoObli"]=$obliPor;
                                        $fecha["PagoInte"]=$intePor;
                                        $fecha["PagoCost"]=$costPor;
                                    }
                                    //echo "Entrooooooo".$fecha["Fecha"];
                                    //$sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                    $obliPor=$fecha["PagoObli"];
                                    $intePor=$fecha["PagoInte"];
                                    $costReca=$fecha["PagoCost"];
                                    if ($dia<=$numDiasMesAct){ // se pregunta por si el dia del recaudo es menor al dia 23, si debe restar el valor del dia
                                        $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                    }
                                    //$sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                    $diaCorte=$dia-1;
                                    //echo "Dia Corte Antes:".$diaCorte;
                                    $valorCorte=$valorDiario*$numDiasMesAct;
                                    $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                    //$obligacion=$obligacion-$obliPor;
                                    //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                    //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                    //echo "Dia Corte:".$diaCorte;
                                    $fechaIns=$annoEje."-".$mes."-".$diaCorte;
                                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                    //$saldoInteresCorte=$sumaTotalDiaria;
                                    //echo "Fecha: ".$fechaIns."Valor ObliReca:".$obliReca."Valor corte".$valorCorte."<br>";
                                    $this->insertRe($numero,$fechaIns,$numDiasMesAct,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                    $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                    if ($dia<=$numDiasMesAct){
                                        $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                    }
                                    $sumaTotalDiaria=$sumaTotalDiaria-$intePor; //se resta el Porcentaje de intereses
                                    $obligacion=$obligacion-$obliPor; //se resta el porcentahje de Obligación
                                    $costas=$costas-$costReca; //se resta el procentaje de Costas 
                                }
                                //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                            }
                    }
                    $dia=$numDiasMesAct-$diaCorte;
                    if ($dia==0){
                        $dia=1;
                    }
                    if ($dia<0){
                        $dia=0; //se iguala a 0 si se detecta un recaduo un dai mayor al 23-03-2020
                    }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costSald=$costas;
                    $valorDias=round(($tasaDiaraT*$obligacion*$dia*100),4);
                    //echo "<br><strong>La fecha es: ".$fechaBase." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald); 
                }
                else if($mesEje==$mes && $annobase==$annoEje){
                    //echo "Holaaaa";
                    //exit();
                    //echo "El valor de la sumaTotalDiaria= $sumaTotalDiaria";
                    //exit();
                        $numDiasMesAct=$dias-$diaEje;
                        if ($annoAct==$annoEje && $mesAct==$mes){
                            $numDiasMesAct=$diaAct-$diaEje;
                        }
                    //echo $numDiasMesAct;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mesEje);
                    $fechaIns=$annoEje."-".$mes."-".$dias;
                    $this->deleteRe($numero);
                    $diaPla=$diaEje;
                    $diaPla=$diaPla+1; // Se suma un dia mas para comparar fecha de recaudos un dia despues de la fecha plazo
                    $diaPla=str_pad($diaPla, 2, '0', STR_PAD_LEFT);
                    //insertRe($numero,$fechaIns,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    //$procesoId,$fecha,$dias,$tasa,$intereses,$obliReca,$obliNove,$obliSald,$inteReca,$inteNove,$inteSald,$costReca,$costNove,$costSald
                    for($dia=1;$dia<=$numDiasMesAct;$dia++){ 
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),20);
                        $sumaTotalDiaria+=$valorDiario;
                        //ECHO "Valor Suma. $sumaTotalDiaria <br>";
                        //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        //$dia=$dia+1;
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        //SE CAMBIA LA FECHA POR LA REAL (SOLO APLICA PARA EL MES DE LA FECHA PLAZO)
                        $fechaComP=$annoEje."-".$mes."-".$diaPla;
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaComP) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                            }
                        }
                        //echo "<br>FECHAAAAAAAA".$fechaCom;
                        //print_r($recaudos);
                            foreach ($recaudos as $fecha) {
                                //echo "Ingresa";
                                //echo $fecha["Fecha"]." - ".$fechaComP."- ".$fechaCom."<br>";
                                if($fecha["Fecha"]==$fechaComP) {
                                    $pagoId=$fecha["PagoId"];
                                    $fechaRegistro=new DateTime ($fecha["Registro"]);
                                    $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                    $fechaActualR=new DateTime (now());
                                    $fechaActualR=$fechaActualR->format('Y-m-d');
                                    //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                    //echo "Valor FEcha Registro: $fechaRegistro Valor Fecha Actual: $fechaActualR <br>";
                                    //echo "Valor fechaComP: $fechaComP Valor recaudoFecha: $recaudoFecha <br>";
                                    if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaComP==$recaudoFecha){
                                        echo "Entro <br>";
                                        $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        //$this->Calcular(date('Y-m-d'),0);
                                        $fecha["PagoObli"]=$obliPor;
                                        $fecha["PagoInte"]=$intePor;
                                        $fecha["PagoCost"]=$costPor;
                                    }
                                    //echo "Detecta Recaudo";
                                    //echo $fecha["Fecha"]." - ".$fechaComP."<br>";
                                    $obliPor=$fecha["PagoObli"];
                                    $intePor=$fecha["PagoInte"];
                                    $costReca=$fecha["PagoCost"];
                                    //$obliPor=($$obligacion/($$obligacion+$costas+$inteAcu));
                                    //$intePor=($inteAcu/($obliInicial+$costas+$inteAcu));
                                    //echo "La fecha es gual al recaudo 3";
                                    $diaInsertRe=$diaPla-$diaEje-1;
                                    //echo "Valor dia corte: $diaCorte";
                                    $diaCorte=$diaPla-1; // se resta al dos al haber sumado uno arriba y el dai antes del recaudo para calcular los valores a fecha.
                                    //$valorCorte=$valorDiario*$diaCorte;
                                    $valorCorte=$valorDiario*$diaInsertRe;
                                    $costPorR=0;
                                    $obliPorR=0;
                                    $intePorR=0;
                                    $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                    $diaInsertRe=str_pad($diaInsertRe, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                    $fechaCom=$annoEje."-".$mes."-".$diaCorte;
                                                                //echo "Fechaloooooo: ".$fechaCom;
                                                                //var_dump($fechaCom);
                                    $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                    //$obligacion=$obligacion-$obliPor;
                                    $this->insertRe($numero,$fechaCom,$diaInsertRe,$tasaDiaraT,$valorCorte,$obliPorR,$obliNove,$obligacion,$intePorR,$inteNove,$sumaTotalDiaria,$costPorR,$costNove,$costSald);
                                    $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                    $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                    $costas=$costas-$costReca;
                                    $obligacion=$obligacion-$obliPor;
                                    $sumaTotalDiaria=$sumaTotalDiaria-$intePor;
                                    //$pagoId=$this->getpagoId();
                                    //$this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                    //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                    /*
                                    if ($pagoId==$fecha["PagoId"]){
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                    }
                                    */  
                                }
                                //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                            }
                        $diaPla=$diaPla+1;
                        $diaPla=str_pad($diaPla, 2, '0', STR_PAD_LEFT);
                        //echo "Valor Sumando ".$diaPla=$diaPla+1;
                    }
                    $fecha_objeto2=  new DateTime(now());
                    $fCommp=$fecha_objeto->modify('first day of this month');
                    $fCommp2=$fecha_objeto2->modify('first day of this month');
                    //echo $fCommp->format('Y-m-d')."------".$fCommp2->format('Y-m-d');
                    if ($fCommp->format('Y-m-d')==$fCommp2->format('Y-m-d')){ //Se compara fechas a ver si la fecha plazo es del mismo mes de la fecha actual
                        //echo "Entoruuu";
                        $fechaBase=new DateTime();
                        $fechaBase=$fechaBase->format('Y-m-d');
                    }
                        $numDiasMesAct=$numDiasMesAct-$diaInsertRe;
                        $obliReca=$obliPor;
                        $inteReca=$intePor;
                        $costReca=$costPor;
                        $costSald=$costas;
                        //$obligacion=$obligacion-$obliPor;
                        $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),4);
                        //$sumaTotal=$sumaTotalDiaria+$valorDias;
                        //echo "<br><strong> El año es ell: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotalDiaria."Valor Costa:".$costSald."</strong>";
                        if ($numDiasMesAct>0){
                            $this->insertRe($numero,$fechaBase,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                        }
                }
                else if ($mesEje>$mes && $annobase==$annoEje){
                    //echo "Este mes: $mes con dias $dias no aplica<br>";
                    //return 1;
                }
                else if ($annoEje==date("Y") && $mes==date("m")){
                    //echo "Entro";
                    $diaPres=str_pad(date("d"), 2, '0', STR_PAD_LEFT);
                    $diaAct=str_pad($diaAct, 2, '0', STR_PAD_LEFT);
                    $mesAct=str_pad($mesAct, 2, '0', STR_PAD_LEFT);
                    if ($mes<$mesAct){
                        $numDiasMesAct1=$dias;
                        $fechaBase=$annoEje."-".$mes."-".$dias;
                    }
                    elseif ($diaPres<$diaAct){
                        $numDiasMesAct1=$diaAct;
                        $fechaBase=$annoEje."-".$mes."-".$diaAct;
                    }
                    else{
                        $numDiasMesAct1=date("d");
                        $fechaBase=new DateTime(now());
                        $fechaBase=$fechaBase->format('Y-m-d');
                    }

                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct1*100),2);
                    $sumaTotal+=$valorDias;
                    $elementos=range(1,$numDiasMesAct1);
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct1." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."<br></strong>";
                    //$fechaIns=$annoEje."-".$mes."-".$dias;
                    //insertRe($numero,$fechaIns,$numDiasMesAct1,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    foreach($elementos as $dia){   
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaCom) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                            }
                        }
                        //echo "<br>".$fechaCom;
                        //print_r($recaudos);
                            foreach ($recaudos as $fecha) {
                                if($fecha["Fecha"]==$fechaCom) {
                                    $pagoId=$fecha["PagoId"];
                                    $fechaRegistro=new DateTime ($fecha["Registro"]);
                                    $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                    $fechaActualR=new DateTime (now());
                                    $fechaActualR=$fechaActualR->format('Y-m-d');
                                    //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                    //echo "Valor FEcha Registro: $fechaRegistro Valor Fecha Actual: $fechaActualR <br>";
                                    if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaCom==$recaudoFecha){
                                        //echo "Entro <br>";
                                        $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        //$this->Calcular(date('Y-m-d'),0);
                                        $fecha["PagoObli"]=$obliPor;
                                        $fecha["PagoInte"]=$intePor;
                                        $fecha["PagoCost"]=$costPor;
                                    }
                                    //echo "La fecha es igual al recaudo 4";
                                    $obliPor=$fecha["PagoObli"];
                                    $intePor=$fecha["PagoInte"];
                                    $costReca=$fecha["PagoCost"];
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
                                    //echo "Obligacion".$obligacion;
                                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                    $this->insertRe($numero,$fechaIns,$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                    $obligacion=$obligacion-$obliPor;
                                    $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                    $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                    //$pagoId=$this->getpagoId();
                                    //$this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
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
                    $sumaTotalDiaria=$sumaTotalDiaria-$inteReca;
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
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald); 
                }
                else if($annoEje=='2023' && $mes=='09'){ // se calcula para el mes de suspension 09-2023
                    $diaRecaudo=0;
                    $diaSuspeIni=14; //dia inicio de la suspension
                    $diaSuspeFin=20; //dia fin de la suspension
                    $diaSuspe=7; //total dia de suspension
                    $numDiasMesAct=$dias-$diaSuspe;
                    //echo "valor de los dias restantes es: ".$numDiasMesAct."<br>";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    //$valorDias=round(($tasaDiaraT*$obligacion*$numDiasMesAct*100),2);
                    //$sumaTotal+=$valorDias;
                    $elementos=range(1,$dias);
                    foreach($elementos as $dia){
                        //$valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        //$sumaTotalDiaria+=$valorDiario;
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaCom) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                            }
                        }
                        ///echo "<br>".$fechaCom;
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        if ($dia >= $diaSuspeIni && $dia <= $diaSuspeFin){ //se verifica si esta en los dias de suspension, no suma nada
                        }
                        else{
                            //echo "Valor Diario:".$valorDiario." para el dia: ".$dia."<br>";
                            $sumaTotalDiaria+=$valorDiario;
                            //echo "Value:".$sumaTotalDiaria."<br>";
                        }
                            foreach ($recaudos as $fecha) {
                                if($fecha["Fecha"]==$fechaCom) {
                                    $pagoId=$fecha["PagoId"];
                                    $fechaRegistro=new DateTime ($fecha["Registro"]);
                                    $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                    $fechaActualR=new DateTime (now());
                                    $fechaActualR=$fechaActualR->format('Y-m-d');
                                    //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                    //echo "Valor FEcha Registro: $fechaRegistro Valor Fecha Actual: $fechaActualR <br>";
                                    if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaCom==$recaudoFecha){
                                        //echo "Entro <br>";
                                        $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                        $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                        $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        //$this->Calcular(date('Y-m-d'),0);
                                        $fecha["PagoObli"]=$obliPor;
                                        $fecha["PagoInte"]=$intePor;
                                        $fecha["PagoCost"]=$costPor;
                                    }
                                    $fechaIns=new DateTime($fecha["Fecha"]);
                                    $fechaIns->modify('-1 day');
                                    $diaFecha=$dia-1;
                                    $obliPor=$fecha["PagoObli"];
                                    $intePor=$fecha["PagoInte"];
                                    $costReca=$fecha["PagoCost"];
                                    if ($dia<$diaSuspeIni){
                                        $diaCorte=($dia-1);
                                    }
                                    else if($dia >= $diaSuspeIni && $dia <= $diaSuspeFin) {
                                        $diaCorte=13;
                                    }
                                    else if ($dia >$diaSuspeFin) {
                                        $diaCorte=13+($diaFecha-20);
                                    }
                                    //echo "Dia:".$dia;
                                    if ($dia < $diaSuspeIni || $dia > $diaSuspeFin){ // se pregunta por si el dia del recaudo es menor al dia 23, si debe restar el valor del dia
                                        $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                        //echo "Valor If:".$sumaTotalDiaria;
                                    }
                                    $diaCorte=$diaCorte-$diaAcum;
                                    $diaAcum=$diaAcum+$diaCorte;
                                    ///echo "<br>Obligacion Porcentual ".$obliPor;
                                    ///echo "<br>Interes Porcentual ".$intePor;
                                    $valorCorte=$valorDiario*$diaCorte;
                                    $diaCorte=str_pad($diaCorte, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                    //$obligacion=$obligacion-$obliPor;
                                    //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                    //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                    //$fechaIns=$annoEje."-".$mes."-".$diaFecha;
                                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria." y la obligacionporcentual es: ".$obliPor." y su intesre porcentual es de:".$intePor."</strong>";
                                    //$saldoInteresCorte=$sumaTotalDiaria;
                                    $this->insertRe($numero,$fechaIns->format('Y-m-d'),$diaCorte,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                    $diaCorte=$diaAcum;
                                    //$valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                    /*
                                    if ($dia<=$numDiasMesAct){
                                        $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//$dia=$dia+2;
                                    }
                                    */
                                    $obliReca=$obliPor;
                                    $inteReca=$intePor;
                                    $costReca=$costPor;

                                    $sumaTotalDiaria=$sumaTotalDiaria-$intePor; //se resta el Porcentaje de intereses
                                    $obligacion=$obligacion-$obliPor; //se resta el porcentahje de Obligación
                                    $costas=$costas-$costReca; //se resta el procentaje de Costas 
                                }
                                //echo "La Fecha del recaudo fue: ".$fecha["Fecha"]." y el valor fue de: ".$fecha["Pago"]."<br>";
                            }
                    }
                    $dia=23-$diaCorte;
                    if ($dia==0){
                        $dia=1;
                    }
                    if ($dia<0){
                        $dia=0; //se iguala a 0 si se detecta un recaduo un dai mayor al 23-03-2020
                    }
                    $obliReca=$obliPor;
                    $inteReca=$intePor;
                    $costReca=$costPor;
                    $costSald=$costas;
                    //echo "Valor antes antes  del Isert:".$sumaTotalDiaria;
                    //$numDiasMesAct=$numDiasMesAct-$diaRecaudo+1; //se restan los dias si se realizo recuado para calcular los ineterese del cierre de mes
                    $valorDias=round(($tasaDiaraT*$obligacion*$dia*100),4);
                    //$sumaTotalDiaria=$sumaTotalDiaria+$valorDias; //no es necesario sumarlo, ya que se suma automaticamnete por dia
                    //echo "Valor antes del Isert:".$sumaTotalDiaria;
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$numDiasMesAct." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotalDiaria."</strong>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald); 
                }
                else if($annoEje==date("Y")&&$mes>date("m")){
                    $mesAct=str_pad($mesAct,2,'0',STR_PAD_LEFT);
                    $diaAct=str_pad($diaAct,2,'0',STR_PAD_LEFT);
                    //echo "Este mes: $mes año $annoEje con dias $dias no aplica<br>";
                    //defino la tasa delk mes anterior para calcular los intereses a futuro
                    //$mesT=str_pad(($mes-1),2,'0',STR_PAD_LEFT);
                    //$tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                        if ($mesAct==$mes){
                            $obliPor=0;
                            $intePor=0;
                            $diaCorte=0;
                            $costPor=0;
                            
                            $obliReca=0;
                            $inteReca=0;
                            $costReca=0;
                            $numDiasMesAct=$diaAct;
                            $sumaTotalDiaria=$sumaTotalDiaria+($tasaDiaraT*$obligacion*$numDiasMesAct*100);
                            $valorDias=($tasaDiaraT*$obligacion*$numDiasMesAct*100);
                            $fechaBase=$annoEje."-".$mes."-".$numDiasMesAct;
                            $this->insertRe($numero,$fechaBase,$numDiasMesAct,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                        }

                                //echo "La suma total es:".$sumaTotalDiaria;
                                //echo "<script>alert('Holaaaa'+$sumaTotalDiaria);</script>";
                                /*
                                $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
                                $this->suma=$result["total"];
                                $this->sumaTotalDiaria=$sumaTotalDiaria;
                                $this->obligacion=$obligacion;
                                $this->costas=$costSald;
                                $interesesNew=$this->sumaTotalDiaria;
                                $obligacionNew=$this->obligacion=$obligacion;
                                $costasNew=$this->costas;
                                $consulta=DB::Query("SELECT ISNULL(Intereses,0) AS Intereses, ISNULL(InteresesInicial,0) AS InteresesInicial FROM Procesos WHERE ProcesoId=".$this->procesoId);
                                while( $date = $consulta->fetchAssoc() ){
                                    $interesesAnt=$date["Intereses"];
                                    $InteresesInicial=$date["InteresesInicial"];
                                }
                                $interesesDif=$interesesNew-$interesesAnt;
                                //echo "Valor de interesesNew: $interesesDif <br>";
                                if ($interesesDif!=0){ 
                                    $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$numero.",GETDATE(),".$interesesDif.",NULL,0,".$pagoId.")");
                                    if (!$resultado2["response"]){
                                        echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                                        return false;
                                    }
                                }
                                //echo "Value: $interesesNew <br>";
                                $updatePro["response"]=DB::Exec("UPDATE Procesos set Intereses=".$interesesNew.",InteresesInicial=".$interesesNew.",Obligacion=".$obligacionNew.",Costas=".$costasNew." where ProcesoId=".$this->procesoId);
                                if ($updatePro){

                                }
                                else{
                                    echo "Error en el update, relacionado con el pago en procesos".DB::LastError();
                                    exit();
                                }
                                return;
                                */
                    //exit();
                }
                else{ //cuando se calcula para toso los dias en curso
                                //echo "Valor de la Tasa para Octubre $tasaDiariaT";
                    $tasaDiaraT=$this->tasa($naturaleza,$concepto,$annoEje,$mes);
                    $valorDias=round(($tasaDiaraT*$obligacion*$dias*100),2);
                    $sumaTotal+=$valorDias;
                    //echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dias." y su valor a liquidar es: ".$valorDias." dando la suma de:".$sumaTotal."</strong>"; 
                    $fechaIns=$annoEje."-".$mes."-".$dias;
                    //insertRe($numero,$fechaIns,$dias,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotal,$costReca,$costNove,$costSald);
                    $elementos=range(1,$dias);
                    foreach($elementos as $dia){ 
                        //echo "Valor Fecha Comprarar: $fechaCom Valor Fecha Recaudo: $recaudoFecha <br>";
                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                        $sumaTotalDiaria+=$valorDiario;
                        //echo "Valor sumatotal:$valorDiario del dia: $dia del mes: $mes <br>";
                        //echo "el valor de la obligacion es: ".$obligacion." en la fecha".$fechaCom."<br>";
                        ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." el dia es ".$dia." su valor de interes es ".$valorDiario."y la suma de intereses es: ".$sumaTotalDiaria."</strong>";
                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                        $fechaCom=$annoEje."-".$mes."-".$dia;
                        foreach($novCostas as $novedad){
                            if($novedad["Fecha"]==$fechaCom) {
                                //echo "Value CostAnt:".$novedad["Nuevo"];
                                $costNov=$this->limpiarNumero($novedad["Nuevo"]);
                                //echo "Value CostaNov:".$costNov;
                                $costas=$costas+$costNov;
                                $this->costas=$costas;
                                //echo "Value Costas=".$costas;
                            }
                        }
                        //echo "<br>".$fechaCom;
                            foreach ($recaudos as $fecha) {
                                if($fecha["Fecha"]==$fechaCom) {
                                    $pagoId=$fecha["PagoId"];
                                    //$sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                    //echo "Valor de la fecha del recaudo: ".$fecha["Fecha"]."Valor de Conteto".$contRecaudo 
                                        //echo "Existe Recaudo";
                                        $fechaRegistro=new DateTime ($fecha["Registro"]);
                                        $fechaRegistro=$fechaRegistro->format('Y-m-d');
                                        $fechaActualR=new DateTime (now());
                                        $fechaActualR=$fechaActualR->format('Y-m-d');
                                        //SI SE DETECTA QUE E SUNA INSERCIÓN DE RECAUDO
                                        //echo "Valor Fecha Comprarar: $fechaCom Valor Fecha Recaudo: $recaudoFecha <br>";
                                        if ($fechaRegistro==$fechaActualR && $flagInsertPago==1 && $fechaCom==$recaudoFecha){
                                            //echo "Entro <br>";
                                            $obliPor=round(($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                            $intePor=round(($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],2);
                                            $costPor=round(($costas/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"],4);
                                            $this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                            //$this->Calcular(date('Y-m-d'),0);
                                            $fecha["PagoObli"]=$obliPor;
                                            $fecha["PagoInte"]=$intePor;
                                            $fecha["PagoCost"]=$costPor;
                                        }
                                        $obliPor=$fecha["PagoObli"];
                                        $intePor=$fecha["PagoInte"];
                                        $costPor=$fecha["PagoCost"];
                                        $sumaTotalDiaria=$sumaTotalDiaria-$valorDiario;
                                        //echo "<br>Obligacion Porcentual ".$obliPor;
                                        //echo "<br>Interes Porcentual ".$intePor;
                                        //echo "<br>Costas Porcentual ".$costPor;
                                        $fechaIns=new DateTime($fecha["Fecha"]);
                                        $fechaIns->modify('-1 day');
                                        $dia=$dia-1-$diaAcum;
                                        $valorCorte=$valorDiario*$dia;
                                        $dia=str_pad($dia, 2, '0', STR_PAD_LEFT); //pasar de 1 a 01
                                        //$obligacion=$obligacion-$obliPor;
                                        //$obliPor=($obligacion/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                        //$intePor=($sumaTotalDiaria/($obligacion+$costas+$sumaTotalDiaria))*$fecha["Pago"];
                                        //$fechaIns=$annoEje."-".$mes."-".$dia;
                                        $diaAcum=$diaAcum+$dia;
                                        $diaCorte=$dia;
                                        /*
                                        if ($mesAcumulado==$mes){ //por si hay mas de un recaudo en el dia
                                            $dia=$dia-$diaAcumulado;
                                            $diaAcumulado=$dia;
                                        }
                                        */
                                        //var_dump($fechaIns);
                                        //$fechaObjeto = DateTime::createFromFormat('Y-m-d', $fechaIns);
                                        //echo "Fecha: ".$fechaIns."Valor ObliReca:".$obliReca."<br>";
                                        $this->insertRe($numero,$fechaIns->format('Y-m-d'),$dia,$tasaDiaraT,$valorCorte,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                                        $obligacion=$obligacion-$obliPor;
                                        $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                                        $sumaTotalDiaria=$sumaTotalDiaria-$intePor; // se le resta la proporcionalidad hallada para El interes
                                        $sumaTotalDiaria=$sumaTotalDiaria+$valorDiario;//se suma el interes del dia del recaudo bsado en la nueva obligacion;
                                        $obliReca=$obliPor;
                                        $inteReca=$intePor;
                                        $costReca=$costPor;
                                        /*
                                        $diaAcumulado=$dia;
                                        $mesAcumulado=$mes;
                                        *¨/
                                        //$pagoId=$this->getpagoId();
                                        //echo "Valor del PagoId: ".$fecha["PagoId"];
                                        //echo 'valor de FechaPago: '.$fecha["PagoId"]." y el valor pagoId: ".$pagoId;
                                        //$this->updatePagoId($costPor,$obliPor,$intePor,$fecha["PagoId"]);
                                        /*
                                        if ($pagoId==$fecha["PagoId"]){
                                            $this->updatePagoId($costPor,$obliPor,$intePor,$pagoId);
                                        }
                                        */
                                }
                            }
                    }
                    //echo "Dia Corte:".$diaCorte;
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
                    //$sumaTotalDiaria=$sumaTotalDiaria-$inteReca; //se comentarea, ya que la resta ya se realiza con anterioridad


                    //echo "Value Obligacion: ".$obligacion." y Valor de Intereses:".$sumaTotalDiaria;
                    ///echo "<br>valor de la suma de Intereses:".$sumaTotalDiaria;
                    ///echo "<br><strong> El año es: ".$annoEje.". El mes es el ".$mes." y los dias a liquidar son ".$dia." y su valor a liquidar es: ".$valorDias." dando la suma de: ".$sumaTotalDiaria."</strong>";
                    //echo "Hacer Inster cuando sale del recaudo";
                    //echo "FechaBase: ".$fechaBase."Valor ObliReca:".$obliReca."<br>";
                    $this->insertRe($numero,$fechaBase,$dia,$tasaDiaraT,$valorDias,$obliReca,$obliNove,$obligacion,$inteReca,$inteNove,$sumaTotalDiaria,$costReca,$costNove,$costSald);
                }
                //echo "<br>$mes tiene " . $dias . " días.";
            }
            $annoEje++; 
        }
        if ($alterProceso==1){
            $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
            $this->suma=$result["total"];
            $this->sumaTotalDiaria=$sumaTotalDiaria;
            $this->obligacion=$obligacion;
            $this->costas=$costSald;
            $interesesNew=$this->sumaTotalDiaria;
            $obligacionNew=$this->obligacion=$obligacion;
            $costasNew=$this->costas;
            $consulta=DB::Query("SELECT ISNULL(Intereses,0) AS Intereses, ISNULL(InteresesInicial,0) AS InteresesInicial FROM Procesos WHERE ProcesoId=".$this->procesoId);
            while( $date = $consulta->fetchAssoc() ){
                $interesesAnt=$date["Intereses"];
                $InteresesInicial=$date["InteresesInicial"];
            }
            $interesesDif=$interesesNew-$interesesAnt;
            //echo "Valor de interesesNew: $interesesDif <br>";
            if ($interesesDif!=0){ 
                $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$numero.",GETDATE(),".$interesesDif.",NULL,0,".$pagoId.")");
                if (!$resultado2["response"]){
                    echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                    return false;
                }
            }
            //echo "Value: $interesesNew <br>";
            $updatePro["response"]=DB::Exec("UPDATE Procesos set Intereses=".$interesesNew.",InteresesInicial=".$interesesNew.",Obligacion=".$obligacionNew.",Costas=".$costasNew." where ProcesoId=".$this->procesoId);
            if ($updatePro){

            }
            else{
                echo "Error en el update, relacionado con el pago en procesos".DB::LastError();
                exit();
            }
        }
        else{
            $result["total"]=round($sumaTotalDiaria+$obligacion+$costSald,2);
            $this->suma=$result["total"];
            $this->sumaTotalDiaria=$sumaTotalDiaria;
            $this->obligacion=$obligacion;
            $this->costas=$costSald;
            $interesesNew=$this->sumaTotalDiaria;
            $obligacionNew=$this->obligacion=$obligacion;
            $costasNew=$this->costas;
        }
    }
    public function calInteresesCierre($anoActual,$mesActual,$fechaDesde,$fechaHasta){
        //$count=0;
        //echo $this->procesoId;
        $sumaTotalDiaria=0;
        $diaCalc=0;
        $fechaMayor='';
        $rs5 = DB::Query("SELECT * FROM Intereses WHERE ProcesoId=".$this->procesoId);
        while( $date = $rs5->fetchAssoc() )
		{
            if ($date["Fecha"]>=$fechaDesde && $date["Fecha"]<=$fechaHasta){
                if ($fechaMayor<$date["Fecha"]){
                    $fechaMayor=$date["Fecha"];
                }
            }
        }
        if ($fechaMayor!=''){
            $objeto=new DateTime($fechaMayor);
            $diaCalc=$objeto->format('d');
        }
        else{
            $diaCalc=0;
        }
        //print_r($fechasR);
        //exit();
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
                $diaCalcF=$dias-$diaCalc;
                $valorDiario=round(($tasaDiaraT*$obligacion*100),2);
                $sumaTotalDiaria=$valorDiario*$diaCalcF;
                return $sumaTotalDiaria;
            }}
        }
    public function pagoId($pagoId){
        //echo "El valor essss antes de : ".$pagoId;
        $this->pagoId=$pagoId;
    }
    public function updatePagoId($PagoCost,$PagoObli,$PagoInte,$pagoId){
        //echo "Ingreso $PagoCost,$PagoObli,$PagoInte,$pagoId";
        //echo "Ingreso a update $pagoId)<br>";
        //echo "Ingreso a relizar el update con valores: ".$PagoCost.",".$PagoObli.",".$PagoInte.",".$pagoId;
        $resultado["response"]=DB::Exec("UPDATE Pagos1 set PagoCost=".$PagoCost.",PagoObli=".$PagoObli.",PagoInte=".$PagoInte." where PagoId=".$pagoId);
        //$this->resultUpdate=$resultado["response"];
        /*
        $this->Calcular(date('Y-m-d'),0);
        $interesesNew=$this->getInteresesSuma();
        $obligacionNew=$this->getObligacion();
        //echo "Valor de interesesNew: $interesesNew <br>";
        
        $consulta=DB::Query("SELECT ISNULL(Intereses,0) AS Intereses, ISNULL(InteresesInicial,0) AS InteresesInicial FROM Procesos WHERE ProcesoId=".$this->procesoId);
        while( $date = $consulta->fetchAssoc() ){
            $interesesAnt=$date["Intereses"];
            $InteresesInicial=$date["InteresesInicial"];
        }
        $interesesDif=$interesesNew-$interesesAnt;
        //echo "Valor de interesesNew: $interesesDif <br>";
        if ($interesesDif!=0){ 
            $resultado2["response"]=DB::Exec("INSERT INTO Intereses (ProcesoId,Fecha,Intereses,SeccionalId,Liquidacion,PagoId) values (".$this->procesoId.",GETDATE(),".$interesesDif.",NULL,0,".$pagoId.")");
            if (!$resultado2["response"]){
                echo "Ocurrio un error en el Insert Intereses debido a: ".DB::LastError(); 
                return false;
            }
        }
        $resultado["response"]=DB::Exec("UPDATE Procesos set Intereses=".$interesesNew.",InteresesInicial=".$interesesNew." where ProcesoId=".$this->procesoId);
        $consulta = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$this->procesoId);
            while( $date = $consulta->fetchAssoc() )
            {
                $intereses=$date["Intereses"];
                $obligacion=$date["Obligacion"];
                $costas=$date["Costas"];
            }
            //$intereses=$intereses-$PagoInte;
            //$obligacion=$obligacion-$PagoObli;
            $costas=$costas-$PagoCost;
        $updatePro=DB::Exec("UPDATE Procesos set Obligacion=".$obligacionNew.",Costas=".$costas." where ProcesoId=".$this->procesoId);
            //$this->resultUpdate=$resultado["response"];
        if ($updatePro){

        }
        else{
            echo "Error en el update, relacionado con el pago en procesos".DB::LastError();
            exit();
        }
        */
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
            echo "<script>alert('No e realiza la actualizacion del pagoId')</script>Error al ejecutar la consulta: " . DB::LastError();
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
    public function novedadCostas ($procesoId){
        $consultaR=DB::Query("SELECT * FROM Novedades WHERE Tipo=3 and ProcesoId=".$procesoId);
            //echo "la consulta da como resultado: ".$consultaR;
        while($date=$consultaR->fetchAssoc() ){
            $fechasR []= array(
                "Fecha"=> date("Y-m-d", strtotime($date['Fecha'])),
                "Nuevo" => $date['Nuevo'],
            );
        };
        /*
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
            */
            //print_r($sumaPorFecha);
            return $fechasR;
    }
    public function suspensiones(){
                //echo "Valourrrrrr: ".var_dump ($procesoId);
                $fechasR=array();
                $consultaR=DB::Query("SELECT * FROM Suspensiones");
                    //echo "la consulta da como resultado: ".$consultaR;
                while($date=$consultaR->fetchAssoc() ){
                    $suspensiones [$date["SuspensionId"]]= array(
                        "SuspensionId"=> $date["SuspensionId"],
                        "Suspension" => $date['Suspension'],
                        "OficioId" => $date['OficioId'],
                        "Sigobius" => $date['Sigobius'],
                        "Desde" => $date['Desde'],
                        "Hasta" => $date['Hasta']
                    );
                };
                    //print_r($sumaPorFecha);
                    return $suspensiones; 
    }
    function recaudoAcuerdo($valor){
        $rs5 = DB::Query("SELECT top 1 * FROM Acuerdos WHERE ProcesoId=".$this->procesoId."ORDER BY AcuerdoId DESC");
        while( $date = $rs5->fetchAssoc() )
		{
            $valorCuota=$date["Total"];
            $interesPlazo=$date["InteresPlazo"];
            $interesMora=$date["Intereses"];
            $costas=$date["Costas"];
            $obligacion=$date["Capital"];
        }
        $valorPago=$valor;
        $rs5 = DB::Query("SELECT * FROM Procesos WHERE ProcesoId=".$this->procesoId);
        while( $date = $rs5->fetchAssoc() )
        {
            $obligacionAct=$date["Obligacion"];
            $interesesAct=$date["Intereses"];
            $costasAct=$date["Costas"];
            $recaudo=$date["Recaudo"];
        }
        //Obtengo los porcentajes a los que equivale cada variable en la cuaot (Obligacion, Interses y costas)
        $sumIntereses=$interesPlazo+$interesMora;
        $porcentajeIntereses=$sumIntereses*100/$valorCuota;
        $porcentajeObligacion=$obligacion*100/$valorCuota;
        $porcentajeCostas=$costas*100/$valorCuota;

        $pagoObli=($porcentajeObligacion*$valorPago/100);
        $pagoInte=($porcentajeIntereses*$valorPago/100);
        $pagoCost=($porcentajeCostas*$valorPago/100);
        $resultado["response"]=DB::Exec("UPDATE Pagos1 set PagoObli=".$pagoObli.",PagoInte=".$pagoInte.",PagoCost=".$pagoCost." where PagoId=".$this->pagoId);
        if ($resultado["response"]){
        }
        else {
            // Hubo un error en la ejecución de la consulta
            echo "<script>alert('No se pudo realizar el update a Pagos1 en recaudo Acuerdo de Pago ')</script>Error al ejecutar la consulta: " . DB::LastError();
            exit();
        }

        if ($valorCuota==$valorPago){
            $recaudoDif=$recaudo+$valorPago;
            $obligacionDif=$obligacionAct-$obligacion;
            $interesesDif=$interesesAct-($interesPlazo+$interesMora);
            $costasDif=$costasAct-$costas;
            $resultado["response"]=DB::Exec("UPDATE Procesos set Obligacion=".$obligacionDif.",Intereses=".$interesesDif.",Costas=".$costasDif.",Recaudo=".$recaudoDif." where ProcesoId=".$this->procesoId);
            if ($resultado["response"]){
            }
            else {
                // Hubo un error en la ejecución de la consulta
                echo "<script>alert('No se pudo realizar el update a Procesos en recaudo Acuerdo de Pago ')</script>Error al ejecutar la consulta: " . DB::LastError();
                exit();
            }

        }
        else{
            //obtengo los valores a descontar al proceso en Obligacion, Intereses y Costas
            $obligacionDif=$obligacionAct-($porcentajeObligacion*$valorPago/100);
            $interesesDif=$interesesAct-($porcentajeIntereses*$valorPago/100);
            $costasDif=$costasAct-($porcentajeCostas*$valorPago/100);
            $recaudoDif=$recaudo+$valorPago;
            $resultado["response"]=DB::Exec("UPDATE Procesos set Obligacion=".$obligacionDif.",Intereses=".$interesesDif.",Costas=".$costasDif.",Recaudo=".$recaudoDif." where ProcesoId=".$this->procesoId);
            if ($resultado["response"]){
            }
            else {
                // Hubo un error en la ejecución de la consulta
                echo "<script>alert('No se pudo realizar el update a Procesos en recaudo Acuerdo de Pago cuota Mayor o Menor')</script>Error al ejecutar la consulta: " . DB::LastError();
                exit();
            }
        }


    }
}