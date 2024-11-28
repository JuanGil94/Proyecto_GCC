<?php // Habilitar errores para depuración
require_once('include/dbcommon.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Asegúrate de que se reciba el parámetro 'consulta' vía POST
if (isset($_POST['consulta'])) {
    $consulta = $_POST['consulta'];
 
    // Conexión a la base de datos ya establecida en PHPRunner
    // La función DB::Query() se usa aquí para realizar la consulta
    $rs = DB::Query("SELECT TOP(100) DespachoId, Despacho, Codigo FROM Despachos WHERE CONCAT(Despacho, ' - ', Codigo) LIKE '%$consulta%'");
 
    $sugerencias = array();
 
    // Recuperar los resultados
    while ($data = $rs->fetchAssoc()) {
        // Crear un array con el ID y el texto para mostrar
        $sugerencias[] = array(
            'id' => $data["DespachoId"],
            'text' => htmlspecialchars($data["Despacho"] . ' - ' . $data["Codigo"])
        );
    }
 
    // Enviar sugerencias como JSON
    header('Content-Type: application/json'); // Establecer el tipo de contenido a JSON
    echo json_encode($sugerencias);
}
 
 
?>