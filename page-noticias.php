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

        <div class="row ">

                <?php
                    $lastposts = get_posts( array(
                        'posts_per_page' => 100
                    ) );

                    if ( $lastposts ) {
                        foreach ( $lastposts as $post ) :
                            setup_postdata( $post );
                            if(get_field( 'categoriapagina' ) == 'Noticia' )
                            {?>
                              <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                              <a href="<?php the_permalink(); ?>">
                              <div class="card text-white text-left rounded ">
                                  <?php if ( get_field( 'imgcartanoticia') ) { ?>
                                      <img class="d-block w-100" src="<?php the_field( 'imgcartanoticia' ); ?>" />
                                  <?php } ?>
                                  <div class="card-img-overlay texto-video">
                                      <h6 class="card-title text-center"><?php the_title(); ?></h6>
                                      <p class="card-text text-center"><?php the_field( 'subtitulocartapaginanoticia' ); ?></p>
                                  </div>
                              </div>
                              </a>
                              </div>
                        <?php
                      }
                        endforeach;
                        wp_reset_postdata();
                    }
                ?>

        </div>
    </div>
<?php get_footer(); ?>
