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
                  	<?php
                  		if(have_posts()) :
                  			while(have_posts()) : the_post();?>
                      			<h1 class="h_fonts textShadow"><?php the_content(); ?></h1><br>
                      		<?php endwhile;
                      	else :
                      		echo "<p>No hay contenido.</p>";
                      	endif;
                      ?>

                      <button type="button" class="btnSlid my-3">Ver el video</button>
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
    <h2 class="h_fonts">DESCUBRE MÁS SOBRE EXTREMOS</h2>
    <section class="customer-logos slider my-4">
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/tencio.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
        </div>
      <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/tencio.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/cali.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/cali.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/gabriel.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-4 slide">
            <div class="card bg-dark text-white bg" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/gabriel.png);">
                <div class="card-img-overlay">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
                <h2 class="h_fonts skate textShadow">Las mejores noticias <br> sobre el mundo <br> del skateboard <br> <button type="button" style="font-family:sans-serif;" class="btnSlid mt-4">Ver mas</button> </h2>
            </div>
        </div>
    </div>

    <div class="container mb-lg-5 pb-lg-5 mb-md-5 pb-md-5 mb-sm-5 pb-sm-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center py-4 mt-5">
                <h6 class="raya"></h6>
                <h2 class="h_fonts">NO TE PIERDAS NUESTRAS NOTICIAS</h2>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 cajaForm py-5 text-left">
                <form>
                  <div class="form-group">
                    <label runat="server">Correo Electronico:</label>
                    <input ID="txtEmail" runat="server" class="form-control mt-2" placeholder="nombre@ejemplo.com">
                  </div>

                  <div class="form-group">
                    <label runat="server">Nombre Completo</label>
                    <input ID="TextBox1" runat="server" class="form-control mt-2" placeholder="Juan Ramirez">
                  </div>

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Cuentanos ¿Cuál es tu motivo para seguirnos?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group pt-2 text-center">
                    <button type="button" class="btnSlid btnForm mt-4">Enviar</button>
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
