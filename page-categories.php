<?php get_header(); ?>

<div class="container-fluid">
        <div class="row alignVertical">
            <div class="col-12 bannerContactenos text-center" style="<?php if ( get_field( 'imagenbanner') ) { ?>  background-image: url(<?php the_field( 'imagenbanner' ); ?>);  <?php } ?>">
                <div class="alignVerticalContacts">
                    <h1 class="h_fonts text-center textShadow text-white"><?php the_field( 'textoprincipalbanner' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center pt-5 pb-3">
                <h6 class="raya"></h6>
                <h2 class="h_fonts"><?php the_field( 'subtituloinicialcategorias' ); ?></h2>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria1') ) { ?>  background-image: url(<?php the_field( 'imagencategoria1' ); ?>);  <?php } ?>"> 
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria1' ); ?></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria2') ) { ?>  background-image: url(<?php the_field( 'imagencategoria2' ); ?>);  <?php } ?>">
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria2' ); ?></h2>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria3') ) { ?>  background-image: url(<?php the_field( 'imagencategoria3' ); ?>);  <?php } ?>">
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria3' ); ?></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria4') ) { ?>  background-image: url(<?php the_field( 'imagencategoria4' ); ?>);  <?php } ?>">
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria4' ); ?></h2>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria5') ) { ?>  background-image: url(<?php the_field( 'imagencategoria5' ); ?>);  <?php } ?>">
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria5' ); ?></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 imgCategorias py-auto" style="<?php if ( get_field( 'imagencategoria6') ) { ?>  background-image: url(<?php the_field( 'imagencategoria6' ); ?>);  <?php } ?>">
                <h2 class="h_fonts text-white alignVerticalContacts"><?php the_field( 'titulocategoria6' ); ?></h2>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
