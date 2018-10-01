<?php get_header(); ?>
<section><!--  Hero Area -->
  <div class="slider-wrapper1" id="slick-1">
    <div class="blogcontent">
      <?php 
        // args
        $args = array(
          'numberposts' => 3,
          'post_type'   => 'post',
          'meta_key'    => '_my_meta_value_key',
          'meta_value'  => 'yes'
        );
        // query
        $the_query = new WP_Query( $args );
      ?>
      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
      ?>
      <div class="slide" style="background-image: url(<?php echo $image[0]; ?>)">
        <div class="blog-top">
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
        <a  href="<?php the_permalink(); ?>" class="btn btn-blog">Ler Mais</a>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
    </div>
    <div class="slider-progress1">
      <div class="progress2">
      </div>
    </div>
  </div>
</section>

<section class="input-box">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrap">
          <div class="search"> 
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform">
              <input type="text" class="searchTerm" placeholder="Buscar" name="s" id="search" value="<?php the_search_query(); ?>">
              <button type="submit" id="searchsubmit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="padd2 blog-pdd">
  <div class="container">
    <div class="row">
      <?php query_posts('post_type=post&posts_per_page=3&order=DESC');
        if(have_posts()) : while(have_posts()) : the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
      ?>  
      <div class="col-md-4">
        <div class="img-text">
          <?php if( $image ) { ?>
          <img src="<?php echo $image[0]; ?>">
          <?php } ?>
          <h4><?php the_title(); ?> </h4>
          <p>
            <?php the_time('F / Y'); ?>
            <span>
              <?php
                foreach((get_the_category()) as $category)
                {
                  echo $category->name;
                } 
              ?>
            </span>
          </p>
          <a  href="<?php the_permalink(); ?>" class="btn-btn2">Ler Mais</a>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <div class="blog-p">
      <div class="row">
        <div class="col-md-12">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts(array(
            'post_type' => 'post', // You can add a custom post type if you like
            'paged' => $paged,
            'posts_per_page' => 5 // limit of posts
              ));
            if(have_posts()) : while(have_posts()) : the_post();
          ?>
          <div class="blog-list">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div col-md-2="">
      </div>
      <div col-md-8="">
        <div class="pagination1">
          <ul>
            <li> <?php post_pagination(); ?>
            <?php endif;?></li>
          </ul>
        </div>
      </div>
      <div col-md-2="">
      </div>
    </div>
  </div>
</section>

<section class="padd2 new-letter main-sm">
  <div class="container-fluid">
  	 <div class="row">
  	 	 <div class="col-md-12">
  	 	 	 <h1>ASSINE NOSSA <br>NEWSLETTER</h1>
  	   </div>
      </div>
      <div class="blog-row">
        <div class="row">
     	    <div class="col-md-4">
     	 	    <div class="nwe-input">
     	        <input type="text" name="name" placeholder="Name">
     	      </div>
          </div>
       	  <div class="col-md-4">
       	 	  <div class="nwe-input">
       	      <input type="text" name="E-mail" placeholder="E-mail">
       	    </div>
          </div>
       	  <div class="col-md-4">
          <div class="nwe-button">
       	    <button type="text" class="btn btn-sutdio">ACESSE O BLOG STUDIOS</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="padd2 youtubevideo1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="map-head heade-color">
          <h1>nosso canal</h1>
        </div>
      </div>
    </div>
    <div class="row video-row">
      <figure id="video_player" class="youtubevideo">
        <?php query_posts('post_type=youtubevideo&posts_per_page=1&order=DESC');
               if(have_posts()) : the_post();
        ?>
        <iframe  id="myFrame" width="100%" height="500px" src="https://www.youtube.com/embed/<?php echo $value1 = get_post_meta( $post->ID, '_my_meta_value_key1', true ); ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <?php endif; wp_reset_query(); ?>
        <figcaption>
          <?php 
            query_posts('post_type=youtubevideo&posts_per_page=3&order=DESC');
            if(have_posts()) : while(have_posts()) : the_post();
          ?> 
          <a href="#video_player" onclick='myFrame("<?php echo $value1 = get_post_meta( $post->ID, '_my_meta_value_key1', true ); ?>");'><img src="http://img.youtube.com/vi/<?php echo $value1; ?>/0.jpg" alt="Nambia Timelapse 1"></a>
          <?php endwhile; endif; wp_reset_query(); ?>
        </figcaption>
      </figure>
    </div>
  </div>
</section>

<div class="demo" id="demo"></div>
<?php get_footer(); ?>
<script type="text/javascript">
  function myFrame(e){ 
  document.getElementById("myFrame").src = "https://www.youtube.com/embed/" + e + "?autoplay=1&rel=0"; 
}
</script>