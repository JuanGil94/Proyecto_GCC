<?php
class abogadosApi {
    function xmlToArray($xml, $isRoute = false)
	{
		// Leer el archivo XML
		$xmlString = ($isRoute ? file_get_contents($xml) : $xml);
		// Creamos un analizador de XML
		$xmlParser = xml_parser_create();

		// Convertimos el XML en una estructura de array
		xml_parse_into_struct($xmlParser, $xmlString, $xmlArray, $index);

		// Liberamos los recursos del analizador
		xml_parser_free($xmlParser);

		// Creamos un array para almacenar el resultado final
		$resultArray = array();

		// Creamos un array llamado "stack" que se utilizará para rastrear el nivel actual del nodo en el árbol XML
		$stack = array();

		// Recorremos cada elemento de la estructura XML convertida en array
		foreach ($xmlArray as $xmlElement) {
			// Obtenemos el nivel del nodo en el árbol XML
			$level = $xmlElement['level'];

			// Obtenemos el tipo de nodo (puede ser 'open', 'complete' o 'close')
			$type = $xmlElement['type'];

			// Obtenemos el nombre de la etiqueta del nodo
			$tag = $xmlElement['tag'];

			// Obtenemos el valor del nodo
			$value = $xmlElement['value'];

			// Verificamos si el valor es un XML anidado y extraemos el contenido
			if (preg_match('/<\?xml/', $value)) {
				$value = $this->xmlToArray($value, false);
			} else if (preg_match('/<Invoice xmlns/', $value)) {
				$value = $this->xmlToArray($value, false);
			}

			// Si el tipo de nodo es 'open' (inicio de elemento)
			if ($type == 'open') {
				// Obtenemos el nodo padre (nodo en el nivel anterior)
				$parent = &$stack[$level - 1];

				// Creamos un nuevo nodo con tres claves: 'tag' (etiqueta), 'attributes' (atributos) y 'value' (valor)
				$node = array('tag' => $tag, 'attributes' => $xmlElement['attributes'], 'value' => $value);

				// Verificamos si el nodo ya existe en el nodo padre
				if (isset($parent[$tag])) {
					// Si el nodo ya existe y no es un array, lo convertimos en un array para poder agregar varios nodos con la misma etiqueta
					if (!is_array($parent[$tag]) || !isset($parent[$tag][0])) {
						$parent[$tag] = array($parent[$tag]);
					}
					// Agregamos el nuevo nodo al array de nodos con la misma etiqueta
					$parent[$tag][] = $node;
				} else {
					// Si el nodo no existe en el nodo padre, lo agregamos directamente
					$parent[$tag] = $node;
				}

				// Actualizamos el array "stack" para apuntar al nuevo nodo creado
				$stack[$level] = &$parent[$tag];
			}
			// Si el tipo de nodo es 'complete' (nodo que contiene solo un valor sin elementos hijos)
			elseif ($type == 'complete') {
				// Obtenemos el nodo padre (nodo en el nivel anterior)
				$parent = &$stack[$level - 1];

				// Creamos un nuevo nodo con tres claves: 'tag' (etiqueta), 'attributes' (atributos) y 'value' (valor)
				$node = array('tag' => $tag, 'attributes' => $xmlElement['attributes'], 'value' => $value);

				// Verificamos si el nodo ya existe en el nodo padre
				if (isset($parent[$tag])) {
					// Si el nodo ya existe y no es un array, lo convertimos en un array para poder agregar varios nodos con la misma etiqueta
					if (!is_array($parent[$tag])) {
						$parent[$tag] = array($parent[$tag]);
					}
					// Agregamos el nuevo nodo al array de nodos con la misma etiqueta
					$parent[$tag][] = $node;
				} else {
					// Si el nodo no existe en el nodo padre, lo agregamos directamente
					$parent[$tag] = $node;
				}
			}
		}

		// El resultado final se encuentra en el primer elemento del array "stack"
		return $resultArray = $stack[0];
	}
    function __construct(){
    }
    function despachosActivos(){      
        $rs2=DB::Exec("DELETE FROM despachosSigob");
        if ($rs2) {
            //return true;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             echo "Error al borrar la tabla despachosSigob" . DB::LastError();
             exit();
        }  
        $url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerDespachosActivos';
        $data = array(
            'Contrasena' => '448B8890',
                    'Area' => ''
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
        else{
        //echo $response;
        // Cargar el XML en un objeto SimpleXMLElement
        $xml = simplexml_load_string($response);

        // Verificar si la carga fue exitosa
        if ($xml === false) {
            echo "Error al cargar el XML\n";
        } else {   

            //echo "ingreso". $response;
        $xml=$this->xmlToArray($response);
        //print_r($response);
        //print_r(json_encode($xml));
        $codigo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["CODIGO_DESPA"]["value"];
        $fullName=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["NOMBRE_COMPLETO"]["value"];
        $cargo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["CARGO"]["value"];
        $area=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["AREA"]["value"];
        $institucion=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["INSTITUCION"]["value"];
        $documento=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["NRO_DOCUMENTO"]["value"];
        $insert=$this->insertDespachos($codigo,$fullName,$documento,$cargo,$area,$institucion);
        /*
        if ($insert){
                echo "Valor ingresado correctamente";
        }
        */
        $codigo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_DESPA"]["value"];
        $fullName=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["NOMBRE_COMPLETO"]["value"];
        $cargo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CARGO"]["value"];
        $area=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["AREA"]["value"];
        $institucion=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["INSTITUCION"]["value"];
        $documento=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["NRO_DOCUMENTO"]["value"];
        $insert=$this->insertDespachos($codigo,$fullName,$documento,$cargo,$area,$institucion);
        /*
        if ($insert){
                echo "Valor ingresado correctamente";
        }
        */
        for($i=0;$i<=max(array_keys($xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_DESPA"]));$i++){
            $codigo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_DESPA"][$i]["value"];
            $fullName=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["NOMBRE_COMPLETO"][$i]["value"];
            $cargo=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CARGO"][$i]["value"];
            $area=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["AREA"][$i]["value"];
            $institucion=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["INSTITUCION"][$i]["value"];
            $documento=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["NRO_DOCUMENTO"][$i]["value"];
            $insert=$this->insertDespachos($codigo,$fullName,$documento,$cargo,$area,$institucion);
            /*
            if ($insert){
                    echo "Valor ingresado correctamente";
            }
            */
        }
        return true;
        }
        }
    }
    function insertDespachos($codigo,$fullName,$documento,$cargo,$area,$institucion){
        $rs2=DB::Exec("INSERT INTO despachosSigob (fecha,codigo,nombreCompleto,documento,cargo,area,institucion) VALUES (GETDATE(),'".$codigo."','".$fullName."','".$documento."','".$cargo."','".$area."','".$institucion."')");
				if ($rs2) {
					return true;
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insertoi into a correspondenciasMasivas: " . DB::LastError();
					 exit();
				}
    }
    function codificadoresDespacho(){
        $rs2=DB::Exec("DELETE FROM codificadoresDespacho");
        if ($rs2) {
            //return true;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             echo "Error al borrar la tabla despachosSigob" . DB::LastError();
             exit();
        }
        $rs2=DB::Exec("DBCC CHECKIDENT ('codificadoresDespacho', RESEED, 0)");  
        $consulta=DB::Query("SELECT Codigo FROM despachosSigob");
                    while( $date = $consulta->fetchAssoc() ){
                        $codigo[]=$date["Codigo"];
                    }
        
                    //print_r($codigo);
                    //exit();
        foreach ($codigo as $value){
            $this->codificadoresDespachoProcess($value);
            //echo $value."<br>";
        }
        return true;
    }
    function codificadoresDespachoProcess($despacho){
        $rs2=DB::Exec("DELETE FROM codificadoresDespacho");
        if ($rs2) {
            //return true;
        } 
        else {
             // Hubo un error en la ejecución de la consulta
             echo "Error al borrar la tabla despachosSigob" . DB::LastError();
             exit();
        }
        $rs2=DB::Exec("DBCC CHECKIDENT ('codificadoresDespacho', RESEED, 0)");  
        $url = 'https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/ObtenerCodificadoresPorDespacho';
        $data = array(
            'Contrasena' => '448B8890',
            'despachoRegistrador' => $despacho,
            'origen' => '1'
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
        else{
            //echo "Valor response: ".$response;
            $xml=$this->xmlToArray($response);
            $codificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["CODIGO_CODIF"]["value"];
            $nameCodificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"][0]["DESC_CODIF"]["value"];
            $this->insertCodificadores($nameCodificador,$codificador,$despacho);
            $codificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_CODIF"]["value"];
            $nameCodificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["DESC_CODIF"]["value"];
            $this->insertCodificadores($nameCodificador,$codificador,$despacho);

            //ECHO max(array_keys($xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_CODIF"]));

            
            for($i=0;$i<=max(array_keys($xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_CODIF"]));$i++){
                $codificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_CODIF"][$i]["value"];
                $nameCodificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["DESC_CODIF"][$i]["value"];
                $this->insertCodificadores($nameCodificador,$codificador,$despacho);
            }
            return true;
            /*
            $codificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["CODIGO_CODIF"][0]["value"];
            $nameCodificador=$xml["DATASET"]["DIFFGR:DIFFGRAM"]["NEWDATASET"]["TABLE"]["DESC_CODIF"][0]["value"];
            $this->insertCodificadores($nameCodificador,$codificador);
            $json=json_encode($xml);
            print_r($json);
            //print_r($xml);
            */
        }
    }
    function insertCodificadores($nameCodificador,$codificador,$despacho){
        //echo "Despacho: ".$despacho." Nombre del Codificador: ".$nameCodificador." Despacho:".$despacho;
        if (empty($nameCodificador)) {
            //echo "Entro vacio";
            return;
        }
        else{
            //echo "Entro al Insert";
            $rs2=DB::Exec("INSERT INTO codificadoresDespacho (nombre,codificador,despacho) VALUES ('".$nameCodificador."','".$codificador."','".$despacho."')");
				if ($rs2) {
					return true;
				} 
				else {
					 // Hubo un error en la ejecución de la consulta
					 echo "Error al ejecutar el insert into a codificadoresDespacho: " . DB::LastError();
					 exit();
				}
        }
        //exit();
        
    }
}