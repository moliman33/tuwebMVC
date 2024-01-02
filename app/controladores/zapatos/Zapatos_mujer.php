<?php
defined('NUCLEO') OR exit('La pagina solicitada no existe');
class Zapatos_mujer extends Controlador
{
    public function index(){
        $zapatos = $this->modelo('Zapatos');
        $zapatos->nombre = 'zapatos de moda';
        echo $zapatos->nombre;

        $this->vista('zapatos');
    }
}