<?php 
defined('NUCLEO') OR exit('La pagina solicitada no existe');

class Registro extends Controlador{
    private $datos = array();

    public function index(){
        $this->datos = array("registro" => "forms/registro.js");
        $this->vista("forms/Registro", $this->datos);
      
    }
}