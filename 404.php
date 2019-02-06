<?php get_header(); ?>
<div class="h-100 bg_404" style="overflow:hidden;" id="containerGame">
        <div class="red col-12 text-center" id="animationText">
                <div class="animated fadeInDown">
                <h1 class="h_fonts text404 text-white">¡Error 404!</h1>
                <h3 class="font404 text-white">Parece que estas algo perdido, permitenos ayudarte</h3>
                <button type="button" class="btnSlid mt-4 mb-4">Volver al inicio</button> <br>
                <p class="text-white">O puedes jugar presionando espacio o tocando la arena.</p>
                </div>
        </div>
        <div class="blue col-12 animated fadeInUp" id="arena404">
                <div class="imgMotorcicle" id="motocicle" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/404/monsterTruck.png);"></div>

                <div class="imgObs" id="obs1" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/404/balde.png);"></div>
                <div class="imgObs" id="obs2" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/404/baldeRojo.png);"></div>
                <div class="imgObs" id="obs3" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/404/balde.png);"></div> 
                <div class="trash" id="trash1"></div>
                <div class="trash" id="trash2"></div>
                <div class="trash" id="trash3"></div>
                <div class="trash" id="trash4"></div>
                <div class="trash" id="trash5"></div>
                <div class="trash" id="trash6"></div>
                <div class="trash" id="trash7"></div>
                <div class="trash" id="trash8"></div>
        </div>
</div>
