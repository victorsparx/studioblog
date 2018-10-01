<?php get_header(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
<?php if ($image) { ?>
<div id="custom-bg" class="padd bg-blog-post" style="background-image: url('<?php echo $image[0]; ?>')">
<?php } ?>
</div>
<?php endif; ?>
<section class="padd2 blog-post">
  <div class="container">
  	<?php if(have_posts()) :while(have_posts()) :the_post(); ?>
      <div class="row">
        <div class="col-md-12">
           <div class="blog-post1">
            <h1><?php the_title(); ?></h1>
              <p><?php the_time('F / Y'); ?>
                <span>
                  <?php 
                    foreach((get_the_category()) as $category){
                    echo $category->name;
                    }
                  ?>
                </span>
              </p>
             </div>
           <p><?php echo get_post_field('post_content', $post->ID); ?></p>
           <button type="button" class="btn btn-post">Por <?php the_author(); ?></button>
         </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="padd2 comments">
  <div class="container">
  </div>
</section>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=289644908536685&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <section class="padd2 comments">
  <div class="container">
     <div class="row comments-bor">

     	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10" data-order-by="social" data-colorscheme="light"</div>
      
     </div>
   </div>
</section> 
<section class="padd2 blog-pdd main-post">
      <div class="container">
        <div class="blog-post1">
            <h2> VEJA TAMBÉM</h2>
            
           </div>
         <div class="row">
<div class="row">
      <?php query_posts('post_type=post&posts_per_page=3&order=DESC');
        if(have_posts()) : while(have_posts()) : the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
      ?>  
   <div class="col-md-4 col-sm-4">
               <div class="img-text">
                <?php if ($image) { ?>
              <img src="<?php echo $image[0]; ?>">
              <h4><?php the_title(); ?></h4>
            <?php } ?>
              <p><?php the_time('F / Y'); ?>
              <span>
                  <?php
                    foreach((get_the_category()) as $category)
                    {
                      echo $category->name;
                    } 
                  ?>                
              </span>
            </p>
            <a href="<?php the_permalink(); ?>" type="button" class="btn-btn2">  Ler mais</a>
          </div>
         </div>
      <?php endwhile; endif; wp_reset_query(); ?> 
                    </div>              
    </div>
    </section>
<?php get_footer(); ?>