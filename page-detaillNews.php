<?php get_header(); ?>
    <div class="container">
        <!-- Section header, imagen, tirulo y categoria -->
        <section class="row topMargen justify-content-center">
            <div class="col-12 text-center">
                <p class="cajaCategoria"><?php the_field( 'categorianoticia' ); ?></p>
            </div>

            <div class="col-12">
            <h2 class="h_fonts tituloNoticia"><?php the_field( 'titulonoticia' ); ?></h2>
            </div>

            <div class="col-lg-10 col-md-11 col-sm-12">
                <?php if ( get_field( 'imagennoticia') ) { ?>
                    <img class="img-fluid imgDetalleNoticia" src="<?php the_field( 'imagennoticia' ); ?>" />
                <?php } ?>
            </div>
        </section>

        <!-- Section Texto y publicidad -->
        <section class="row justify-content-md-center px-lg-4 mt-3">
            <div class="col-lg-9 col-md-12 col-sm-12 text-justify">
                <p class="tipoNoticiaLetra"><i class="far fa-calendar-alt fa-2x mr-2"></i> <span><?php the_field( 'fechanoticia' ); ?></span></p>
                <p class="tipoNoticiaLetra mt-4"> 
                    <?php the_field( 'detallenoticia' ); ?>
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
                <a href="">
                    <?php if ( get_field( 'imagencard1') ) { ?>
                        <img class="card-img-top" src="<?php the_field( 'imagencard1' ); ?>" />
                    <?php } ?>
                </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard1' ); ?></p>
                        <a class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard1' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                <a href="">
                    <?php if ( get_field( 'imagencard2') ) { ?>
                        <img class="card-img-top" src="<?php the_field( 'imagencard2' ); ?>" />
                    <?php } ?>
                </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard2' ); ?></p>
                        <a class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard2' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                    <a href="">
                        <?php if ( get_field( 'imagencard3') ) { ?>
                            <img class="card-img-top" src="<?php the_field( 'imagencard3' ); ?>" />
                        <?php } ?>
                    </a>
                    <div class="card-body">
                        <p class="card-text"><?php the_field( 'titulocard3' ); ?></p>
                        <a class="btnSlid my-3" id="btnCardsNoticias"><?php the_field( 'botoncard3' ); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <br>
    </div>
<?php get_footer(); ?>
