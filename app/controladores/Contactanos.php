<?php
defined('NUCLEO') OR exit('La pagina solicitada no existe');
class Contactanos extends Controlador{
    public function index($nombre = '', $apellido = '')
    {
        echo 'Contactanos '.$nombre. ' ' . $apellido;
    }
}