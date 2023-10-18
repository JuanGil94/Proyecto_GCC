<?php
require_once __DIR__ . 'autoload.php';
class pdf {
    public function generar(){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }
}

?>