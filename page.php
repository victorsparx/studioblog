<?php get_header(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
  <div id="custom-bg" class="padd bg-blog-post" style="background-image: url('<?php echo $image[0]; ?>')">
  </div>
<?php endif; ?>
<section class="padd2 blog-post">
  <div class="container">
  	<?php if(have_posts()) :while(have_posts()) :the_post(); ?>
      <div class="row">
        <div class="col-md-12">
           <div class="blog-post1">
            <h1><?php the_title(); ?></h1>
            
           </div>
           <p><?php echo get_post_field('post_content', $post->ID); ?></p>
           
         </div>
      </div>
  <?php endwhile; endif; ?>
  </div>
  </div>
</section>

 

<?php get_footer(); ?>