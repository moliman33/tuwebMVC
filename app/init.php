<?php 

define('NUCLEO', 'nucleo');
require_once 'nucleo/App.php';
require_once 'nucleo/Controlador.php';
require_once 'nucleo/librerias/Constantes.php';
require_once 'nucleo/librerias/Funciones.php';

function BASE()
{
    if(isset($_SERVER['SERVER_NAME']))
{
    $server_name = $_SERVER['SERVER_NAME'];
    $url_base = (is_https() ? 'https':'http').'://'.$server_name.'/';
}

return $url_base;
}
