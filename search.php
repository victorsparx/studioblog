<?php get_header(); ?>



<section class="padd2 blog-pdd main-post">
      <div class="container">
        <div class="blog-post1">
            <h2> Search</h2>
            <h4>Search Result: <?php $run = the_search_query();  ?></h4>
            <hr>
           </div>
         <div class="row">

<div class="row">
      <?php 
        if(have_posts()) : $i=1; while(have_posts()) : the_post();
        	
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
      ?>  
   <div class="col-md-4 col-sm-4">
               <div class="img-text">
                <?php if ($image) { ?>
              <img src="<?php echo $image[0]; ?>">
            <?php } ?>
              <h4><?php the_title(); ?></h4>
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
         <?php if($i%3==0) { ?> <div style="clear: both;padding: 20px;"></div>
      <?php } $i++; endwhile;

      else: echo "<h2 style='text-align:center;'>Resultado não encontrado.</h2>";   endif;   ?> 
   <div class="row" style="    overflow: hidden;
    width: 100%;
    padding-top: 30px;">
      <div col-md-2="">
      </div>
      <div col-md-8="">
        <div class="pagination1">
          <ul>
            <li> <?php post_pagination(); ?>
</li>
          </ul>
        </div>
       
      </div>
      <div col-md-2="">
      </div>
    </div>

         </div> 
              
    </div>

    </section>

 
<?php get_footer(); ?>