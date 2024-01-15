<?php
if (isset($_GET["w1"])) {
    $phpVar1 = $_GET["w1"];
}
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
    $ruta_completa = "classes/".$rutaCarpeta."/".$archivo;
    //echo "<li>$archivo</li>";
    //echo "Value: ".$ruta_completa;
    echo '<li>';
            //echo $archivo;
            // Agregar enlace de descarga
            echo ' <a href="' . $ruta_completa . '" download>' . $archivo . '</a>'; 
            echo '</li>';
}
echo "</ul>";
?>