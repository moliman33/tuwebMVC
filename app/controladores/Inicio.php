<?php
defined('NUCLEO') OR exit('La pagina solicitada no existe');
Class Inicio extends Controlador
{
    private $datos = array();
    public function index()
    {
        $zapatos = $this->modelo('Zapatos');
        $zapatos->nombre = 'zapatos de moda';
        //echo $zapatos->nombre;
        $this->datos = array("slider" => "slider.js");
        $this->vista('inicio/inicio', $this->datos);
    }

}