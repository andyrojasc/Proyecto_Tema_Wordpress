<?php get_header(); ?>
<div class="body-perfil">
    <div class="container-fluid">
        <div class="row alignVertical">
        <div class="col-12 bannerContactenos text-center" style="<?php if ( get_field( 'main-img-deportista') ) { ?>  background-image: url(<?php the_field( 'main-img-deportista' ); ?>);  <?php } ?>">
                <div class="alignVerticalContacts texto-foto">
                    <h1 class="h_fonts text-center textShadow text-white"><?php the_field( 'nombre-deportista' ); ?></h1>
                    <h4 class="h_fonts nombre-atleta"><?php the_field( 'pais-deportista' ); ?></h4>
                    <p class="texto-citado h_fonts"><?php the_field( 'frase-deportista' ); ?></p>
                    <h2 class="h_fonts deporte"><?php the_field( 'deporte' ); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3 pt-4">
            <div class="col-12 col-lg-4 text-white borde pt-2">
                <h4><?php the_field( 'titulo-detalle-1' ); ?></h4>
                <h5><?php the_field( 'detalle-deportista-1' ); ?></h5>
            </div>
            <div class="col-12 col-lg-4 text-white borde pt-2">
                <h4><?php the_field( 'titulo-detalle-2' ); ?></h4>
                <h5><?php the_field( 'detalle-deportista-2' ); ?></h5>
            </div>
            <div class="col-12 mb-4 col-lg-4 text-white  pt-2">
                <h4><?php the_field( 'titulo-detalle-3' ); ?></h4>
                <h5><?php the_field( 'detalle-deportista-3' ); ?></h5>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-3 mb-3 ">
        <div class="row">
            <div class="col ">
            <h2 class="text-center h_fonts"><?php the_field( 'titulo-biografia' ); ?></h2>
                <p class="text-justify texto-descriptivo p-3"><?php the_field( 'biografia-texto' ); ?></p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>