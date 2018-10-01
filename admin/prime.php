<?php 
function truncate_posts($amount,$quote_after=false) 
{
 $truncate = get_the_content(); 
 $truncate = apply_filters('the_content', $truncate);
 $truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
 $truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
 $truncate = strip_tags($truncate);
 $truncate = substr($truncate, 0, $amount); 
 echo $truncate;
 echo "...";
 if ($quote_after) 
 {
    echo('<span><a href="'.get_permalink().'">Leia Mais</a></span>');
}
}


 /*
/* Functions to add featured image of post,pages
*/ 

 add_theme_support( 'post-thumbnails' );
  ?>