<?php get_header(); ?>
<div id="contenidoPagina">

  
      <div class="v-header container">
          <div class="fullscreen-video-wrap"> 
              <video src="<?php echo bloginfo('template_directory'); ?>/assets/video/extremeVideo4.mp4" autoplay playsinline loop muted>
              </video>
          </div>
          <div class="header-overlay"></div>
              <div class="container-fluid header-content">
              <div class="row text-md-center"> 
                  <div class="col-12">
                    <h1 class="h_fonts textShadow"> <?php the_field( 'tituloheader' ); ?> </h1><br>
                    <a href="<?php the_field( 'vervideo' ); ?>"><button type="button" class="btnSlid my-3"><?php the_field( 'btnvideo' ); ?></button></a>
                  </div>
              </div>
          </div>
      </div> 
  <!--    <div class="container-fluid">
          <div class="row alignVertical">
              <div class="col-12 bannerContactenos text-center" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/home/slid.png);">
                  <div class="alignVerticalContacts text-white" style="top: 30%!important;">
                  <?php
                  		if(have_posts()) :
                  			while(have_posts()) : the_post();?>
                      			<h1 class="h_fonts"><?php the_content(); ?></h1><br>
                      		<?php endwhile;
                      	else :
                      		echo "<p>No hay contenido.</p>";
                      	endif;
                      ?>
                      <button type="button" class="btnSlid my-3">Ver el video</button>
                  </div>
              </div>
          </div>
      </div>-->
<div class="container-fluid cardsSlider py-5 my-2">
    <h6 class="raya mb-3"></h6>
    <h2 class="h_fonts"><?php the_field( 'subtitulocards' ); ?></h2>
    <section class="customer-logos slider my-4">
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="<?php if ( get_field( 'imagencard1') ) { ?>  background-image: url(<?php the_field( 'imagencard1' ); ?>);  <?php } ?>">
                <div class="card-img-overlay">
                    <h3 class="card-title"><?php the_field( 'titulocard1' ); ?></h3>
                    <p class="card-text"><?php the_field( 'subtitulocard1' ); ?></p>
               </div>
            </div>
        </div>
      <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="<?php if ( get_field( 'imagencard2') ) { ?>  background-image: url(<?php the_field( 'imagencard2' ); ?>);  <?php } ?>">
                <div class="card-img-overlay">
                    <h3 class="card-title"><?php the_field( 'titulocard2' ); ?></h3>
                    <p class="card-text"><?php the_field( 'subtitulocard2' ); ?></p>
               </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="<?php if ( get_field( 'imagencard3') ) { ?>  background-image: url(<?php the_field( 'imagencard3' ); ?>);  <?php } ?>">
                <div class="card-img-overlay">
                    <h3 class="card-title"><?php the_field( 'titulocard3' ); ?></h3>
                    <p class="card-text"><?php the_field( 'subtitulocard3' ); ?></p>
               </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="<?php if ( get_field( 'imagencard4') ) { ?>  background-image: url(<?php the_field( 'imagencard4' ); ?>);  <?php } ?>">
                <div class="card-img-overlay">
                    <h3 class="card-title"><?php the_field( 'titulocard4' ); ?></h3>
                    <p class="card-text"><?php the_field( 'subtitulocard4' ); ?></p>
               </div>
            </div>
        </div>
   </section>
   <div class="paginator-center text-color text-center">
    <ul class="py-2">
        <button class="prev btnSlid prevNext mr-1"><i class="fas fa-arrow-left"></i></button>
        <button class="next btnSlid prevNext ml-1"><i class="fas fa-arrow-right"></i></button>
    </ul>
</div>
</div>

    <div class="container-fluid bg-skate alignVertical" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/skaters.png);">
        <div class="row my-auto">
            <div class="col-lg-12 col-md-10 col-sm-12 text-center text-white mx-auto px-0">
                <h2 class="h_fonts skate textShadow"><?php the_field( 'textoskate' ); ?> <button type="button" style="font-family:sans-serif;" class="btnSlid mt-4"><?php the_field( 'botonskate' ); ?></button> </h2>
            </div>
        </div>
    </div>

    <div class="container mb-lg-5 pb-lg-5 mb-md-5 pb-md-5 mb-sm-5 pb-sm-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center py-4 mt-5">
                <h6 class="raya"></h6>
                <h2 class="h_fonts"><?php the_field( 'notificacionesnoticias' ); ?></h2>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 cajaForm py-5 text-left">
                <form>
                  <div class="form-group">
                    <label runat="server"><?php the_field( 'campo1notificaciones' ); ?></label>
                    <input ID="txtEmail" runat="server" class="form-control mt-2" placeholder="<?php the_field( 'placeholdernotificaciones1' ); ?>">
                  </div>

                  <div class="form-group">
                    <label runat="server"><?php the_field( 'campo2notificaciones' ); ?></label>
                    <input ID="TextBox1" runat="server" class="form-control mt-2" placeholder="<?php the_field( 'placeholdernotificaciones2' ); ?>">
                  </div>

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1"><?php the_field( 'campo3notificaciones' ); ?></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group pt-2 text-center">
                    <button type="button" class="btnSlid btnForm mt-4"><?php the_field( 'btnnotificaciones' ); ?></button>
                  </div>

                </form>
            </div>
        </div>
    </div>
</div>
    <script>
    var cards=0;
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            dots: false,
            pauseOnHover: true,
            responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
<?php get_footer(); ?>
