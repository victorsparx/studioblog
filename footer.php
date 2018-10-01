
<section class="footer padd2">
	 <div class="container">
	 	<div class="row">
	 	 <div class="col-md-4 col-sm-4">
      <div class="footer-haed">
        <?php wp_nav_menu( array( 'menu_class' => '', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'footernav' ) ); 
        ?> 
            </div> 
	 	 </div>
	 	 <div class="col-md-4 col-sm-4">
	 	 	 <div class="footer-haed">
              <h3>Seja um franqueado</h3>
              <p>Abri uma unidade</p>
              <p>Converter meuespaco</p>
               <div class="copyright">
              <ul class="list-icon">
                <?php 
                $value = myprefix_get_theme_option( 'input_example' );
                $insta = myprefix_get_theme_option( 'input_example1' );
                $youtube = myprefix_get_theme_option( 'input_example2' );
                $copy = myprefix_get_theme_option( 'input_example4' );

                 ?>
              	<li class="active"><a href="<?php echo $value; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
              	<li><a href="<?php echo $insta; ?>"  target="_blank"><i class="fa fa-instagram"></i></a></li>
              	<li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
              <p> <?php echo $copy; ?></p>
	 	 </div>
    </div>
	 	</div>
	 	 <div class="col-md-4 col-sm-4">
             <div class="footer-haed">
              <h3>Assine e receba novidades</h3>
<div id="mc_embed_signup" style="background: none;">
  <form>
                <input type="text" name="Name" placeholder="Name">
                <input type="text" name="Email" placeholder="Email">
                 <button type="button" class="btn btn-form">Assinar</button>
              </form>>
</div>
	 	 </div>
	 	 </div>
	 	</div>
	 </div>
</section>




<!--js--->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/progress.min.js"></script>
<!--end of js--->


<?php wp_footer(); ?>
 </body>
</html>