<?php
require_once("include/dbcommon.php");
//require_once("include/commonfunctions.php"); //Para traer functions
if (isset($_GET["w1"])) {
        $procesoId = $_GET["w1"];
    $procesoId=intval($procesoId);
    $consulta=DB::Query("SELECT * FROM Procesos where ProcesoId =".$procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
           echo $obligacion=$date["Obligacion"];
        }
    }
    elseif (isset($_GET["w2"])) {
        $procesoId = $_GET["w2"];
        $procesoId=intval($procesoId);
        $consulta=DB::Query("SELECT  ObligacionInicial + CostasInicial + InteresesInicial AS 'ObligacionTotal' from Procesos where ProcesoId =".$procesoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
           echo $obligacion=$date["ObligacionTotal"];
        }
    }
    elseif (isset($_GET["w3"])) {
        echo "<script>Runner.displayPopup( {
            html: '<form action='classes/upload.php' method='POST' enctype='multipart/form-data'><label for='numero'>No. Proceso: &nbsp; </label><input id='numero' name='numero' type='text' value='' readonly>&nbsp;&nbsp;&nbsp;<label for='procesoId'>ProcesoId:&nbsp</label><input id='procesoId' name='procesoId' type='text' value='5' readonly><br><br><br><input type='file' name='archivo[]' id='archivo' accept='.pdf' multiple /><input type='submit' value='Subir'></input></form><br/><button id='openModalBtn'>Ver Archivos</button><br><div id='lista-archivos'></div>',
            header: 'Subir Archivos',
            width: 800,
            height: 500
       });</script>";

    }
    elseif (isset($_GET["w4"])){
        $chequeoId = $_GET["w1"];
        $procesoId=intval($chequeoId);
        $consulta=DB::Query("SELECT * FROM ChequeosOficios where ChequeoId =".$chequeoId);
        //print_r($info);
        while( $date = $consulta->fetchAssoc() )
		{
           echo $obligacion=$date["Obligacion"];
        }
    }
    elseif(isset($_POST["w5"])){
        $noPago=$_POST["w5"];
        //echo $noPago;
        //return;
        $conuslta = DB::Query("SELECT TOP 1 * FROM Pagos1 WHERE Numero='".$noPago."'");
        while( $dataSource = $conuslta->fetchAssoc() )
            {
                $procesoId=$dataSource["ProcesoId"];
            }
        if (empty($procesoId)){
            //$result["Ok"]=0;
            echo "El Consecutivo del Banco a ingresar no existe";
            return;
        }
        else{
            //echo $procesoId;
            $conuslta = DB::Query("SELECT top 1 * FROM ProcesosView1 WHERE ProcesoId=".$procesoId);
            
            while( $dataSource = $conuslta->fetchAssoc() )
                {   //print_r($dataSource);
                    $numero=$dataSource["Numero"];
                    $seccional=$dataSource["Seccional"];
                    $estado=$dataSource["Estado"];
                }
            $mensaje="El Consecutivo del Banco a ingresar ya existe en la seccional ".$seccional." con el número ".$numero." y su estado es: ".$estado;
            echo $mensaje;
            return;
        }
    }