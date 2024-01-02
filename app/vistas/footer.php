<?php defined('NUCLEO') OR exit('La pagina solicitada no existe'); ?>

</section>
    </main>
    <aside class="aside">
        <section class="box-aside">
            <div class="margen">
                <h2>aside</h2>
            </div>

        </section>


    </aside>
    <footer class="footer">
        <div class="box-footer">
            <div class="col b-left">
                <p class="p-footer">
                    Acerca de
                </p>
            </div>

            <div class="col b-left">
                <p class="p footer">
                    Servicio al Cliente
                </p>
                <p>
                    <a href="">Preguntas frecuentes</a>
                    <a href="">Contactanos</a>
                    <a href="">Nuestra tienda</a>
                </p>
            </div>

            <div class="col">
                <p class="p-footer">
                    Politicas
                </p>
                <p>
                    <a href="">Politicas de privacidad</a>
                    <a href="">Aviso Legal</a>
                    <a href="">Politica de cookie</a>
                </p>
            </div>

        </div>

        <div class="copy">
            <small>Manuel Molina 2023</small>
            <small>www.mitiendaonline.com</small>
        </div>



    </footer>
    <div class="-polics-cookies">
        <div class="mostrar">Politicas de cookies</div>
        <p class="-padd-1">
            En esta web utilizamos cookies propias y de terceros para
            ofrecer nuestros servicios, recoger informacion estadistica e incluir publicidad.
            Si continuas navegando acepta su instalacion y usu. Puedes cambiar
            la configuracion en nuestras <a href="<?php echo BASE();?>Politicas-de-cookies" target="_blank">Politicas de Cookies</a>

        </p>
        <button type="button" class="ocultar">Aceptar</button>

    </div>
    <script src="<?php echo BASE(). 'publica/js/dom.js' ?>" type="module"></script>
    <?php if(isset($datos["slider"])) : ?>
        <script src="<?php echo BASE(). 'publica/js/'. $datos['slider'] ?>"></script>
    <?php endif; ?>

    <?php if(isset($datos["registro"])) : ?>
        <script src="<?php echo BASE(). 'publica/js/'. $datos['registro'] ?>"></script>
    <?php endif; ?>

</body>







</html>