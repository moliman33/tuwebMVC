<?php
class Controlador
{
    public function modelo($modelo)
    {
        require_once 'app/modelos/' . $modelo . '.php';
        return new $modelo;
    }

    public function vista($vista, $datos = '')
    {
        


        $head = 'head.php';
        $footer = 'footer.php';

        if (file_exists('app/vistas/' . $head)) require_once 'app/vistas/' . $head;
        else die('No se encontro la Cabecera');

        require_once 'app/vistas/' . $vista . '.php';

        if (file_exists('app/vistas/' . $footer)) require_once 'app/vistas/' . $footer;
        else die('No se encontro el footer');
    }
}
