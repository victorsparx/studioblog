<html>
  <head>
    <title>
      <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'Nigie' ), max( $paged, $page ) );
      ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
     <?php wp_head(); ?>

     <?php $valuefbid = myprefix_get_theme_option( 'input_example6' ); ?>
     
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo  $valuefbid; ?>',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.1'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
  
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
   </head>
  <body>
<section class="bg-blog ">
  <header class="top-nav">
    <nav class="navbar" data-spy="affix" data-offset-top="90">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-black2.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'topnav' ) ); ?>
        </div>
      </div>
    </nav>  
  </header>
</section>

<!-- Modal Nav -->
<div class="modal-nav-background"></div>
<div class="modal-nav">
  <nav>
    <div class="modal-nav-container">
      <?php wp_nav_menu( array( 'menu_class' => 'modal-nav-main-menu', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'topnav' ) ); 
      ?> 
    </div>
  </nav>
</div>
<!-- Modal Menu Button -->
<button class="modal-menu-button">
  <div class="hamburger">
    <span></span>
    <span></span>
   <span></span>
  </div>
</button>
