<?php get_header(); ?>
<div class="container-fluid contenedor">
		<div class="row mt-3">
			<div class="col-12 p-0 mb-0">
				<div class="carousel slide carousel-fade" id="secondary-carousel" data-ride="carousel">
					<ol class="carousel-indicators ">
						<li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
						
						<li data-target="#secondary-carousel" data-slid-to="1"></li>
						
						<li data-target="#secondary-carousel" data-slid-to="2" ></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-caption d-block mb-2 ">
								<h4 class="titulo-slid textShadow"><?php the_field( 'titulo-slider-1' ); ?></h4>
								<?php if ( get_field( 'bandera-slider-1') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-slider-1' ); ?>" />
								<?php } ?>
								<p class="text-slid textShadow"><?php the_field( 'subtitulo-slider-1' ); ?></p>
								<a href="#" class="enlace-perfil"><?php the_field( 'boton-slider-1' ); ?></a>
							</div>
							<?php if ( get_field( 'img-slider-1') ) { ?>
								<img class="d-block w-100" src="<?php the_field( 'img-slider-1' ); ?>" />
							<?php } ?>
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block mb-2">
								<h4 class="titulo-slid textShadow"><?php the_field( 'titulo-slider-2' ); ?></h4>
								<?php if ( get_field( 'bandera-slider-2') ) { ?>
									<img src="<?php the_field( 'bandera-slider-2' ); ?>" />
								<?php } ?>
								<p class="text-slid textShadow"><?php the_field( 'subtitulo-slider-2' ); ?></p>
								<a href="#" class="enlace-perfil"><?php the_field( 'boton-slider-2' ); ?></a>
							</div>
							<?php if ( get_field( 'img-slider-2') ) { ?>
								<img class="d-block w-100" src="<?php the_field( 'img-slider-2' ); ?>" />
							<?php } ?>
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block mb-2">
								<h4 class="titulo-slid textShadow"><?php the_field( 'titulo-slider-3' ); ?></h4>
								<?php if ( get_field( 'bandera-slider-3') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-slider-3' ); ?>" />
								<?php } ?>
								<p class="text-slid textShadow"><?php the_field( 'subtitulo-slider-3' ); ?></p>
								<a href="#" class="enlace-perfil"><?php the_field( 'boton-slider-3' ); ?></a>
							</div>
							<?php if ( get_field( 'img-slider-3') ) { ?>
								<img class="d-block w-100" src="<?php the_field( 'img-slider-3' ); ?>" />
							<?php } ?>
						</div>
					</div>

					<a href="#secondary-carousel" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>

					<a href="#secondary-carousel" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="h_fonts"><?php the_field( 'titulo-principal' ); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="caja"></div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card-deck grupo-cartas">
				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-1') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-1' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-1' ); ?></h5>
								<?php if ( get_field( 'bandera-card-1') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-1' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-1' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-1' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-2') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-2' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-2' ); ?></h5>
								<?php if ( get_field( 'bandera-card-2') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-2' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-2' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-2' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-3') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-3' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-3' ); ?></h5>
								<?php if ( get_field( 'bandera-card-3') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-3' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-3' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-3' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-4') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-4' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-4' ); ?></h5>
								<?php if ( get_field( 'bandera-card-4') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-4' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-4' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-4' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-5') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-5' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-5' ); ?></h5>
								<?php if ( get_field( 'bandera-card-5') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-5' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-5' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-5' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-6') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-6' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-6' ); ?></h5>
								<?php if ( get_field( 'bandera-card-6') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-6' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-6' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-6' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-7') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-7' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-7' ); ?></h5>
								<?php if ( get_field( 'bandera-card-7') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-7' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-7' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-7' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-8') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-8' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-8' ); ?></h5>
								<?php if ( get_field( 'bandera-card-8') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-8' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-8' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-8' ); ?></a>
    						</div>
					</div>
				</div>

				<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card bg-dark text-white text-left bordeCarta rounded">
						<?php if ( get_field( 'img-deportista-9') ) { ?>
							<img class="d-block w-100" src="<?php the_field( 'img-deportista-9' ); ?>" />
						<?php } ?>
							<div class="card-img-overlay cajaTexto text-center">			
								<h5 class="card-title"><?php the_field( 'titulo-card-9' ); ?></h5>
								<?php if ( get_field( 'bandera-card-9') ) { ?>
									<img class="imagenNacional" src="<?php the_field( 'bandera-card-9' ); ?>" />
								<?php } ?>
        						<p class="card-text nombreAtleta"><?php the_field( 'subtitulo-card-9' ); ?></p>
        						<a href="#" class="botonCard"><?php the_field( 'boton-card-9' ); ?></a>
    						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row m-5">
		<div class="col">
			<a href="#" class="btn btn-danger col-12 col-lg-6 col-xl-8"><?php the_field( 'boton-cards' ); ?></a>
		</div>				
	</div>
</div>


<?php get_footer(); ?>