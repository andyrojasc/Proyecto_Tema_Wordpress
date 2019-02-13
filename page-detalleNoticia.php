<?php get_header(); ?>
    <div class="container">
        <!-- Section header, imagen, tirulo y categoria -->
        <section class="row topMargen justify-content-center">
            <div class="col-12 text-center">
                <p class="cajaCategoria">Skate</p>
            </div>

            <div class="col-12">
            <h2 class="h_fonts tituloNoticia">Jeaustin Perez, alías SpiderJus hace historia en el mundo del skateboard</h2>
            </div>

            <div class="col-lg-10 col-md-11 col-sm-12">
                <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/skate_cam.jpg" alt="DetalleNoticia" class="img-fluid imgDetalleNoticia">
            </div>
        </section>

        <!-- Section Texto y publicidad -->
        <section class="row justify-content-md-center px-lg-4 mt-3">
            <div class="col-lg-9 col-md-12 col-sm-12 text-justify">
                <p class="tipoNoticiaLetra"><i class="far fa-calendar-alt fa-2x mr-2"></i> <span>20 de marzo del 2019</span></p>
                <p class="tipoNoticiaLetra mt-4"> 

El centrocampista del Real Madrid Isco, ausente el sábado en el partido contra el Atlético de Madrid (3-1), sufre dolores dorsales y cervicales, confirmó este domingo el club merengue, que podría verse privado del talentoso internacional español en el duelo de ida octavos de 'Champions' contra el Ajax de Ámsterdam.<br><br>

"Se le ha diagnosticado una dorsalgia-cervicalgia aguda", escribió el Real Madrid en un comunicado, sin precisar la duración del periodo de baja del jugador.<br><br>

Según la página de internet del periódico deportivo Marca, Isco sería ya baja segura para el desplazamiento a Holanda el miércoles. El Real Madrid, vigente triple campeón de la Liga de Campeones, recibirá al Girona el próximo domingo en el campeonato español.<br><br>

Isco se vio obligado a acortar la sesión de entrenamiento del viernes debido a los dolores, y no participó en la vitoria del sábado ante el Atlético en el derbi madrileño (3-1).<br><br>

Este problema físico supone un nuevo contratiempo para el menudo volante ofensivo (26 años), que no goza de la confianza del técnico argentino Santiago Solari. Isco lamentó recientemente su "falta de oportunidades" de juego esta temporada.
</p>
            </div>
            <div class="col-lg-3 d-none d-lg-block mt-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/detalleNoticias/Capture.PNG" id="imgPublicidad" class="img-fluid" alt="">
            </div>
        </section>

        <!-- Noticias interesantes -->
        <section class="row px-lg-3 mt-3 justify-content-center">
            <div class="col-12">
                <div class="verMas">
                    <h2>
                        <span>También puedes ver</span>
                    </h2>
                </div>
            </div>
            <!-- Cards de otras noticias -->
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                <a href=""><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/tencio.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text">Noticia 01</p>
                        <a class="btnSlid my-3" id="btnCardsNoticias">Ver el video</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                <a href=""><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/tencio.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text">Noticia 02</p>
                        <a class="btnSlid my-3" id="btnCardsNoticias">Ver el video</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                    <a href=""><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/tencio.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text">Noticia 03</p>
                        <a class="btnSlid my-3" id="btnCardsNoticias">Ver el video</a>
                    </div>
                </div>
            </div>
        </section>
        <br>
    </div>
<?php get_footer(); ?>
