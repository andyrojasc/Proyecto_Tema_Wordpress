<?php get_header(); ?>
    <div class="container-fluid">
            <div class="row alignVertical py-0">
                <div class="col-12 bannerContactenos text-center" style="background-image: url(https://images.wallpaperscraft.com/image/road_night_light_125999_1920x1080.jpg)">
                    <div class="alignVerticalContacts">
                        <h1 class="h_fonts text-center textShadow text-white">Resultado de la Busqueda</h1>
                        <br>
                        <a href="#"><button type="button" class="btnSlid my-3 ">Volver</button></a>
                    </div>
                </div>
            </div>
            <br><br>
    </div>

    <div class="container"><?php echo $_GET['text'];?>
        <?php
            $lastposts = get_posts( array(
                'posts_per_page' => 100
            ) );

            if ( $lastposts ) {
                foreach ( $lastposts as $post ) :
                    setup_postdata( $post );  
                        if(get_field( 'categoriapagina' ) == 'Noticia' )
                        {
                            if(substr_count(strtolower(get_field( 'titulonoticia')), strtolower($_GET['text'])) >= 1)
                            {?>
                                <div class="row alineado">
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <?php if ( get_field( 'imgcartanoticia') ) { ?>
                                        <img class="d-block" style="width: 200px;" src="<?php the_field( 'imgcartanoticia' ); ?>" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 margenTexto">
                                        <h3><?php the_title(); ?></h3>
                                        <br>
                                        <h6 class="margenFecha"><?php the_field( 'fechanoticia' );?></h6>
                                        <br>
                                        <a href="<?php the_permalink();?>"><button type="button" class="btnSlid">Ver mas</button></a>
                                    </div>
                                </div>
                                <hr>
                            <?php
                            }
                        }else{
                            if(get_field( 'categoriapagina' ) == 'Atleta' ){
                                if(substr_count(strtolower(get_field( 'nombre-atleta')), strtolower($_GET['text'])) >= 1)
                                {?>
                                    <div class="row alineado">
                                        <div class="col-lg-2 col-md-12 col-sm-12">
                                            <?php if ( get_field( 'img-deportista-vista-previa') ) { ?>
                                            <img class="d-block" style="width: 200px;" src="<?php the_field( 'img-deportista-vista-previa' ); ?>" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 margenTexto">
                                            <h3><?php the_field( 'nombre-deportista' ); ?></h3>
                                            <br>
                                            <h6 class="margenFecha"><?php the_field( 'pais-deportista' );?></h6>
                                            <br>
                                            <a href="<?php the_permalink();?>"><button type="button" class="btnSlid">Ver mas</button></a>
                                        </div>
                                    </div>
                                <hr>
                                <?php
                                }
                            }
                        }
                        endforeach;
                        wp_reset_postdata();
                    }
                ?>
           
    </div>
    <br>
<?php get_footer(); ?>
<style>
.margenFecha{
    margin-top:-2%!important;
}
.margenTexto{
    margin-top:1%!important;
}
@media (max-width: 768px) {
    .alineado{
        text-align:center;
    }
}
@media (min-width: 768px) {
    .alineado{
        text-align: left;
    }
}
</style>
