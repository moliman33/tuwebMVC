<?php defined('NUCLEO') OR exit('La pagina solicitada no existe'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descripcion de mi pagina web">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="<?php echo BASE(). 'publica/css/estilos.css' ?>">
    
    

    <title>Mi pagina web</title>
</head>

<body class="grid-contenedor">
    <header class="header">
        <h1>Este es mi logo</h1>
    </header>
    <nav class="nav-bar">
        <div class="box-nav">
            <input type="checkbox" id="menu">
            <label for="menu">
                <span class="burger1"></span>
                <span class="burger2"></span>
                <span class="burger3"></span>
            </label>



            <ul>
                <li>
                    <a href="/">

                        <svg class="icon-home" viewBox="0 0 64 64">
                            <use xlink:href="publica/img/iconos.svg#home">
                        </svg>
                    </a>
                </li>

                <li><a href="">Contactanos</a></li>
                <li class="-usuario"><a href="#">Iniciar Sesion</a></li>
                <li><a href="Registro">Registrarse </a></li>

            </ul>
        </div>



    </nav>

    

    <main class="main">
        <section class="box-ppal">