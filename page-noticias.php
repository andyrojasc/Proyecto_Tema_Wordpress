<?php get_header(); ?>
    
    <div class="container-fluid">
        <div class="row alignVertical">
            <div class="col-12 bannerContactenos text-center" style="<?php if ( get_field( 'img-inicio') ) { ?>  background-image: url(<?php the_field( 'img-inicio' ); ?>);  <?php } ?>">
                <div class="alignVerticalContacts">
                    <h1 class="h_fonts text-center textShadow text-white"><?php the_field( 'titulo-principal' ); ?></h1>
                    <br>
                    <button type="button" class="btnSlid my-3 "><?php the_field( 'boton-inicio' ); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="h_fonts"><?php the_field( 'titulo-noticias' ); ?></h2>
            </div>
        </div>

        <div class="row my-3">
            <div class="col">
                <div class="card-columns">
                    <div class="card text-white text-left rounded ">
                        <?php if ( get_field( 'img-card-1') ) { ?>
                            <img class="d-block w-100" src="<?php the_field( 'img-card-1' ); ?>" />
                        <?php } ?>
                        <div class="card-img-overlay texto-video">
                            <h6 class="card-title text-center"><?php the_field( 'titulo-noticia-1' ); ?></h6>
                            <p class="card-text text-center"><?php the_field( 'subtitulo-noticia-1' ); ?></p>              
                        </div>
                    </div>

                    <div class="card ">
                        <?php if ( get_field( 'img-card-2') ) { ?>
                            <img class="card-img-top img-fluid" src="<?php the_field( 'img-card-2' ); ?>" />
                        <?php } ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_field( 'titulo-noticia-2' ); ?></h3>
                            <p class="card-text"><?php the_field( 'subtitulo-noticia-2' ); ?></p>
                        </div>
                    </div>

                    <div class="card text-white text-left rounded ">
                        <?php if ( get_field( 'img-card-3') ) { ?>
                            <img class="d-block w-100" src="<?php the_field( 'img-card-3' ); ?>" />
                        <?php } ?>
                        <div class="card-img-overlay texto-video">
                            <h6 class="card-title text-center"><?php the_field( 'titulo-noticia-3' ); ?></h6>
                            <p class="card-text text-center"><?php the_field( 'subtitulo-noticia-3' ); ?></p>              
                        </div>
                    </div>

                    <div class="card ">
                        <?php if ( get_field( 'img-card-4') ) { ?>
                            <img class="card-img-top img-fluid" src="<?php the_field( 'img-card-4' ); ?>" />
                        <?php } ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_field( 'titulo-noticia-4' ); ?></h3>
                            <p class="card-text"><?php the_field( 'subtitulo-noticia-4' ); ?></p>
                        </div>
                    </div>

                    <div class="card text-white text-left rounded ">
                        <?php if ( get_field( 'img-card-5') ) { ?>
                            <img class="d-block w-100" src="<?php the_field( 'img-card-5' ); ?>" />
                        <?php } ?>
                        <div class="card-img-overlay texto-video">
                            <h6 class="card-title text-center"><?php the_field( 'titulo-noticia-5' ); ?></h6>
                            <p class="card-text text-center"><?php the_field( 'subtitulo-noticia-5' ); ?></p>              
                        </div>
                    </div>

                    <div class="card ">
                        <?php if ( get_field( 'img-card-6') ) { ?>
                            <img class="card-img-top img-fluid" src="<?php the_field( 'img-card-6' ); ?>" />
                        <?php } ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_field( 'titulo-noticia-6' ); ?></h3>
                            <p class="card-text"><?php the_field( 'subtitulo-noticia-6' ); ?></p>
                        </div>
                    </div>

                    <div class="card text-white text-left rounded ">
                        <?php if ( get_field( 'img-card-7') ) { ?>
                            <img class="d-block w-100" src="<?php the_field( 'img-card-7' ); ?>" />
                        <?php } ?>
                        <div class="card-img-overlay texto-video">
                            <h6 class="card-title text-center"><?php the_field( 'titulo-noticia-7' ); ?></h6>
                            <p class="card-text text-center"><?php the_field( 'subtitulo-noticia-7' ); ?></p>              
                        </div>
                    </div>

                    <div class="card ">
                        <?php if ( get_field( 'img-card-8') ) { ?>
                            <img class="card-img-top img-fluid" src="<?php the_field( 'img-card-8' ); ?>" />
                        <?php } ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_field( 'titulo-noticia-8' ); ?></h3>
                            <p class="card-text"><?php the_field( 'subtitulo-noticia-8' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>