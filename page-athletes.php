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

				<?php
						$lastposts = get_posts( array(
								'posts_per_page' => 100
						) );

						if ( $lastposts ) {
								foreach ( $lastposts as $post ) :
										setup_postdata( $post );
										if(get_field( 'categoriapagina' ) == 'Atleta' )
										{?>

											<div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4">
												<div class="card bg-dark text-white text-left bordeCarta rounded">
													<?php if ( get_field( 'img-deportista-vista-previa') ) { ?>
														<img class="d-block w-100" src="<?php the_field( 'img-deportista-vista-previa' ); ?>" />
													<?php } ?>
														<div class="card-img-overlay cajaTexto text-center">
															<h5 class="card-title"><?php the_field( 'nombre-deporte' ); ?></h5>
															<?php if ( get_field( 'bandera-nacionalidad-atleta') ) { ?>
																<img class="imagenNacional" src="<?php the_field( 'bandera-nacionalidad-atleta' ); ?>" />
															<?php } ?>
							        						<p class="card-text nombreAtleta"><?php the_field( 'nombre-atleta' ); ?></p>
							        						<a href="<?php the_permalink(); ?>" class="botonCard"><?php the_field( 'boton-card-1' ); ?></a>
							    						</div>
												</div>
											</div>
								<?php
							}
								endforeach;
								wp_reset_postdata();
						}
				?>




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
