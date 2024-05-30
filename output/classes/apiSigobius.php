<?php
class apiSigobius{
    public $contrasena;
    public function __construct(){
        $this->url='https://sigobwebcsj.ramajudicial.gov.co/TEST/wsAPICorrespondencia/srvAPICorrespondencia.asmx/';
        $this->contrasena='448B8890';
    }
    public function ObtenerDocumentoCorrespondencia ($codigo){
        $data = array(
            //'Codigo' => 'DESAJNEGCC24-1802', //NO DEBE MOSTRAR CON AZURE
            'Codigo' => $codigo, //DEBE MOSTRAR CON AZURE
            'ConvertirAPDF' => 'TRUE',
            //'Despacho' => 'DE640',
            //'Codificador' => '4883',
            'Contrasena' => $this->contrasena
            // ... Agrega más parámetros según sea necesario
        ); 
    }
    public function NuevaCorrespondencia (){

    }
    public function ActualizarCorrespondencia (){

    

}
}
?>