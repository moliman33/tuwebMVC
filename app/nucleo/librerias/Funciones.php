<?php
defined('NUCLEO') OR exit('La pagina solicitada no existe');
function is_https(){
    if(!empty($_SERVER['HTTPS']) && strtolower($_SERVER('HTTPS')) !== 'off')
    {
        return TRUE;
    }

    elseif(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
    {
        return TRUE;
    }

    elseif(!empty($_SERVER['HTTP_FORNT_END_HTTPS']) && strtolower($_SERVER['HTTP_FORNT_END_HTTPS']) !== 'off')
    {
        return TRUE;
    }

    return FALSE;
}