<?php
//session_start();
//print_r($_SESSION);
if (isset($_GET["w1"])) {
    $phpVar1 = $_GET["w1"];
    //echo  "Valor del Proceso: ".$phpVar1;
    // Ruta de la carpeta que deseas listar
    $rutaCarpeta = $phpVar1;
    //echo "Holaaaaa";
    // Obtener la lista de archivos en la carpeta
    $archivos = scandir($rutaCarpeta);

    // Filtrar los archivos para excluir . y ..
    $archivos = array_diff($archivos, array('.', '..'));

    // Imprimir los nombres de los archivos en formato de lista HTML
    echo "<ul>";
    foreach ($archivos as $archivo) {
        //$ruta_completa = "classes/".$rutaCarpeta."/".$archivo; //Ruta para trabajar localmente
        $ruta_completa = "http://192.168.209.48:8090/archivosSubidos/".$rutaCarpeta."/".$archivo;
        //$ruta_completa = $_SESSION['BeforePath']."/archivosSubidos/".$rutaCarpeta."/".$archivo;
        //echo "<li>$archivo</li>";
        //echo "Value: ".$ruta_completa;
        echo '<li>';
                //echo $archivo;
                // Agregar enlace de descarga
                echo ' <a href="' . $ruta_completa . '" download>' . $archivo . '</a>'; 
                echo '</li>';
    }
    echo "</ul>";
}
else if(isset($_GET["w2"])){
    $phpVar1 = $_GET["w2"];
    //echo  "Valor del Proceso: ".$phpVar1;
    // Ruta de la carpeta que deseas listar
    $rutaCarpeta = $phpVar1;
    if (is_dir($rutaCarpeta)){
            //echo "Holaaaaa";
    // Obtener la lista de archivos en la carpeta
    $archivos = scandir($rutaCarpeta);

    // Filtrar los archivos para excluir . y ..
    $archivos = array_diff($archivos, array('.', '..'));

    // Imprimir los nombres de los archivos en formato de lista HTML
    echo "<ul>";
    foreach ($archivos as $archivo) {
        //$ruta_completa = "classes/".$rutaCarpeta."/".$archivo; //Ruta para trabajar localmente
        //$ruta_completa = "http://192.168.209.48:8090/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
        //echo "<li>$archivo</li>";
        //echo "Value: ".$ruta_completa;
        //$url_pdf='http://localhost:8086/classes/'.$rutaCarpeta.'/'.$archivo.''; //se usa cuando se hacen pruebas locales
        $url_pdf="http://192.168.209.48:8090/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
        //$url_pdf=$_SESSION['BeforePath']."/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
        echo '<li>';
                //echo $archivo;
                // Agregar enlace de descarga
                //echo ' <a id="verArchivo" href="' . $ruta_completa . '" >' . $archivo . '</a>'; 
                echo ' <a id="verArchivo" class="open-pdf" data-url="'.$url_pdf.'">' . $archivo . '</a>&nbsp&nbsp<button class="borrar" >x</button>'; 
                echo '</li>';
    }
    echo "</ul>";
    echo '<script>
                 $("a.open-pdf").on("click", function(e){
                e.preventDefault();
                var url = $(this).data("url");
                var opciones = "width=800,height=600,resizable=yes,scrollbars=yes";
                window.open(url, "VentanaPDF", opciones);
            });
            $("button.borrar").on("click", function(e){
                //alert ("Hola");
                var texto=$(this).closest("li").find("a").text();
                console.log ("valor de texto"+texto);
                $.ajax({
                    url: "classes/listar_archivos.php",
                    method: "GET", // Método de solicitud (GET o POST)
                    data: { 
                        chequeoId:'.$phpVar1.' , // Primer parámetro
                        ruta: texto      // Segundo parámetro
                    },
                    dataType: "html", // Tipo de datos esperados en la respuesta
                    success: function(response) {
                        // Éxito: Llenar el div con la respuesta del servidor
                        $("#lista-archivos").html(response);
                    },
                    error: function(error) {
                        // Manejar errores
                        console.error("Error en la solicitud AJAX", error);
                    }

                    });
                
            });
            </script>';
    }
    else {
        echo "<ul>";
        echo '<li>';
        echo "<label>No se encuentra archivos</label>";
        echo '</li>';  
        echo "</ul>";
    }

}
else if (isset($_GET["chequeoId"]) && isset($_GET["ruta"])){
    //echo "value chequeoId=".$_GET["chequeoId"].'</br>';
    //echo "value ruta=".$_GET["ruta"];
    //$archivo = 'classes/'.$_GET["chequeoId"].'/'.$_GET["ruta"];
    $archivo = $_GET["chequeoId"].'/'.$_GET["ruta"];
    //echo "Ruta: ".$archivo;
    if (file_exists($archivo)) {
        if (unlink($archivo)) {
            //$string='echo "El archivo'.$archivo.' se elimino correctamente"';
            $phpVar1=$_GET["chequeoId"];
            $rutaCarpeta = $phpVar1;
        if (is_dir($rutaCarpeta)){
                //echo "Holaaaaa";
        // Obtener la lista de archivos en la carpeta
        $archivos = scandir($rutaCarpeta);

        // Filtrar los archivos para excluir . y ..
        $archivos = array_diff($archivos, array('.', '..'));

        // Imprimir los nombres de los archivos en formato de lista HTML
        echo "<ul>";
        foreach ($archivos as $archivo) {
            //$ruta_completa = "classes/".$rutaCarpeta."/".$archivo; //Ruta para trabajar localmente
            //$ruta_completa = "http://192.168.209.48:8090/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
            //echo "<li>$archivo</li>";
            //echo "Value: ".$ruta_completa;
            //$url_pdf='http://localhost:8086/classes/'.$rutaCarpeta.'/'.$archivo.''; //se usa cuando se hacen pruebas locales
            $url_pdf="http://192.168.209.48:8090/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
            //$url_pdf=$_SESSION['BeforePath']."/archivosSubidos/".$rutaCarpeta."/".$archivo; //se usa para cuando se publica con una IP
            echo '<li>';
                    //echo $archivo;
                    // Agregar enlace de descarga
                    //echo ' <a id="verArchivo" href="' . $ruta_completa . '" >' . $archivo . '</a>'; 
                    echo ' <a id="verArchivo" class="open-pdf" data-url="'.$url_pdf.'">' . $archivo . '</a><button class="borrar" >x</button>'; 
                    echo '</li>';
        }
        echo "</ul>";
        echo '<script>
                     $("a.open-pdf").on("click", function(e){
                    e.preventDefault();
                    var url = $(this).data("url");
                    var opciones = "width=800,height=600,resizable=yes,scrollbars=yes";
                    window.open(url, "VentanaPDF", opciones);
                });
                $("button.borrar").on("click", function(e){
                    //alert ("Hola");
                    var texto=$(this).closest("li").find("a").text();
                    //console.log ("valor de texto"+texto);
                    $.ajax({
                        url: "classes/listar_archivos.php",
                        method: "GET", // Método de solicitud (GET o POST)
                        data: { 
                            chequeoId:'.$phpVar1.' , // Primer parámetro
                            ruta: texto      // Segundo parámetro
                        },
                        dataType: "html", // Tipo de datos esperados en la respuesta
                        success: function(response) {
                            // Éxito: Llenar el div con la respuesta del servidor
                            $("#lista-archivos").html(response);
                            //$("#estado").html("<p>Nuevo contenido con <strong>HTML</strong></p>");
                        },
                        error: function(error) {
                            // Manejar errores                            console.error("Error en la solicitud AJAX", error);
                        }
    
                        });
                    
                });
                </script>';

            //echo "El archivo ha sido eliminado correctamente.";
        }
     }
      else {
            echo "Error al intentar eliminar el archivo.";
        }
    } else {
        echo "El archivo no existe.";
    }
}
?>