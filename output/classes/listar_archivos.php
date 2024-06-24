<?php
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
        echo '<li>';
                //echo $archivo;
                // Agregar enlace de descarga
                //echo ' <a id="verArchivo" href="' . $ruta_completa . '" >' . $archivo . '</a>'; 
                echo ' <a id="verArchivo" class="open-pdf" data-url="'.$url_pdf.'">' . $archivo . '</a>'; 
                echo '</li>';
                echo '<script>
                 $("a.open-pdf").on("click", function(e){
                e.preventDefault();
                var url = $(this).data("url");
                var opciones = "width=800,height=600,resizable=yes,scrollbars=yes";
                window.open(url, "VentanaPDF", opciones);
            });
            </script>';
    }
    echo "</ul>";
} 

?>