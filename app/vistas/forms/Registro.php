<?php defined('NUCLEO') OR exit('La pagina solicitada no existe'); ?>

<div class="c-form">
    <form class="form">
        <legend>Registrate</legend>

        <div class="msg">Mensaje desde js</div>
        <div class="form-grid">

            <div>
                <svg class="f-icon" viewBox="0 0 64 64">
                    <use xlink:href="<?php echo BASE();?>publica/img/iconos.svg#user" title="Solo se acepta letras y espacios">
                </svg>
            </div>
            <input type="text" name='name' class="input" id="nombre" placeholder="Ingresa tu nombre">

            <div>
                <svg class="f-icon" viewBox="0 0 64 64">
                    <use xlink:href="<?php echo BASE();?>publica/img/iconos.svg#mail" title="Solo se acepta letras y espacios">
                </svg>
            </div>
            <input type="text" name='email' class="input" id="correo" placeholder="Ingresa tu correo" title="Ingresa un correo valido">

            <div>
                <svg class="f-icon" viewBox="0 0 64 64">
                    <use xlink:href="<?php echo BASE();?>publica/img/iconos.svg#eye" title="Solo se acepta letras y espacios">
                </svg>
            </div>
            <input type="text" name='pass1' class="input" id="clave1" placeholder="Ingresa tu clave" title="Solo caracteres alfanumericos | no coinsiden las claves">

            <div>
                <svg class="f-icon" viewBox="0 0 64 64">
                    <use xlink:href="<?php echo BASE();?>publica/img/iconos.svg#eye" title="Solo se acepta letras y espacios">
                </svg>
            </div>
            <input type="text" name='pass1' class="input" id="clave1" placeholder="confirma tu clave" title="Las claves no coinsiden">

            <button type="submit" class=""btn-form>Registrate</button>
            <span class="btn-form"><a href="<?php echo BASE();?>Sesion">Iniciar Sesion</a></span>

            <input type="checkbox" name="tyc" class="checkbox" id="terminos" title="Debes aceptar los terminos y condiciones">
            <label for="terminos" class="terminos">Terminos y condiciones</label>

        </div>
        <div class="loader none"><img src="<?php echo BASE();?>publica/img/oval.svg" alt=""></div>
    </form>
</div>
