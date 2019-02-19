<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row alignVertical">
            <div class="col-12 bannerContactenos text-center" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/assets/img/contactos/bannerPrincipal.png);">
                <div class="alignVerticalContacts">
                    <h1 class="h_fonts text-center textShadow text-white"><?php the_field( 'textobanner' ); ?></h1>
                    <br>
                    <button type="button" class="btnSlid my-3 "><?php the_field( 'btnbanner' ); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2 mb-5">
        <div class="row">
            <div class="col-12 text-center py-4 mb-4">
                <h6 class="raya"></h6>
                <h2 class="h_fonts"><?php the_field( 'subtitulocontactos' ); ?></h2>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 cajaForm py-5 text-left">
                <form>
                  <div class="form-group">
                    <label runat="server"><?php the_field( 'formtitulocampo1' ); ?></label>
                    <input ID="txtEmail" runat="server" class="form-control mt-2" placeholder="<?php the_field( 'formplaceholder1' ); ?>">
                  </div>

                  <div class="form-group">
                    <label runat="server"><?php the_field( 'formtitulocampo2' ); ?></label>
                    <input ID="TextBox1" runat="server" class="form-control mt-2" placeholder="<?php the_field( 'formplaceholder2' ); ?>">
                  </div>

                  <div class="form-group">
                    <label runat="server"><?php the_field( 'formtitulocampo3' ); ?></label>
                    <input ID="TextBox1" runat="server" class="form-control mt-2" placeholder="<?php the_field( 'formplaceholder3' ); ?>">
                  </div>

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1"><?php the_field( 'formtitulocampo4' ); ?></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group pt-2 text-center">
                    <button type="button" class="btnSlid btnForm mt-4"><?php the_field( 'btncontactos' ); ?></button>
                  </div>

                </form>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 py-3">
                <h4 class="fontMonse text-center mt-3"><?php the_field( 'titulotextonumerotelefono' ); ?></h4>
                <p class="py-3 pl-4 pr-4 text-center"><?php the_field( 'textonumerotelefono' ); ?></p>
                <div class="direct_line d-flex flex-row align-items-center justify-content-start mr-2 ml-2">
					<div class="lineaDirecta text-center contactsNumber">Telefono</div>
				    <div class="lineaDirectaNum text-center contactsNumber"><?php the_field( 'numerotelefonico' ); ?></div>
				</div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
