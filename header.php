<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="fixed-top">


<nav class="navbar navbar-expand-lg" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" id="collapsibleButton" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="open"><i class="fas fa-bars"></i></span>
	</button>
	<a class="navbar-brand mx-auto" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt=""></a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'navbar-collapse text-left collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'a_class'           => 'letras',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
        <!--<form class="form-inline my-2 my-lg-0 formResponsive">
        <div class="d-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="d-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
       </form>-->
       <button class="btn_seach col-1" id="searchButton" type="button">
        <span><i class="fas fa-search search" ></i></span>
       </button>

	</div>
</nav>

<div class="container-fluid px-0 bg_search pb-4">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="input-group py-2 mt-4">
                            <input type="text" class="form-control" placeholder="<?php 
                        $currLang = get_bloginfo('language');
                        if($currLang == 'es-CR'){ // Replace condition with your language code.
                            echo 'Buscar Noticia';
                        } else {
                            echo 'Search New';
                        }?>"> 
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search" id="fa-search"></i>
                              </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-4">
                    <div class="col-12 text-white">
                        <h3 class="searchCollapse" id="Busquedas"><?php 
                        $currLang = get_bloginfo('language');
                        if($currLang == "es-CR"){ // Replace condition with your language code.
                            echo 'Busquedas Recientes';
                        } else {
                            echo 'Recent Searches';
                        }
                        ?></h3>
                    </div>
                </div>

                <div class="row text-white">
                    <div class="col-3 text-center">
                        <a class="text-white" href="">Surf</a>
                    </div>
                    <div class="col-3">
                        <a class="text-white" href="">Skate</a>
                    </div>
                    <div class="col-3">
                        <a class="text-white" href="">Rally Dakar</a>
                    </div>
                    <div class="col-3">
                        <a class="text-white" href="">Downhill</a>
                    </div>
                    <div class="col-3 py-2">
                        <a class="text-white" href="">Skydiving</a>
                    </div>
                </div>
            </div>
        </div>
</header>


        <script type="text/javascript">
            var i = 0;
           // var lenguaje=window.language;
            $(document).ready(function(){
              //  console.log(lenguaje);
                $("#searchButton").click(function(){
                    i++;

                    if($("#bs-example-navbar-collapse-1").attr('class')=="navbar-collapse text-left collapse show")
                    {
                        $(".navbar-collapse text-left collapse show").slideUp(4000);
                        $("#bs-example-navbar-collapse-1").toggleClass("show");
                    }
                    if (i == 1) {
                        $(".bg_search").slideDown(300);
                        $(".search").toggleClass("fa fa-times");
                    } else {
                        i = 0;
                        $(".bg_search").slideUp(300);
                        $(".search").toggleClass("fa fa-search");
                    }
                });

                $("#collapsibleButton").click(function(){

                    if(i>0)
                    {
                        $(".bg_search").slideUp(100);
                        $(".search").toggleClass("fa fa-search");
                        i = 0;
                    }
                });
            });
        </script>
         <!-- Global site tag (gtag.js) - Google Analytics -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135097596-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-135097596-1');
        </script>
    </header>
