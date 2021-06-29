<?php
  get_header();
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail_url($post, 'full'); 
?>
    <!--end-nav-->
    <div class="component-content mt-5 mb-5 pt-5">
      <div class="container">
        <div class="component-title text-center">
          <h6><?= _e('announcements', 'unitedgroup'); ?></h6>
        </div>
        <form class="form-search mt-5 mb-5" action="/">
          <div class="input-group mb-3">
            <button class="btn btn-outline" type="submit" id="button-addon1"><?= _e('search', 'unitedgroup'); ?></button>
            <input type="search" name="s" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          </div>
        </form>


        <div class="component-career component-announ ">
          <div class="definition-img-ann mt-5">
            <img src="<?= $featured_image; ?>" alt="">
          </div>
          <div class="defintion-text">
          <h5 class="card-title"><?= the_title(); ?></h5>
          <div class="date-defintion-announ">
            <?= get_the_date(); ?>
          </div>
          <div class="the-content">
            <?= the_content(); ?>
          </div>                                                                                 
          </div>


          <?php
            $related = get_posts( array('post_type' => 'announcements', 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
            if( $related ):
            ?>
            <div class="owl-carousel row-services-indexe mt-5"> 
              <?php
                foreach( $related as $post ):
                  setup_postdata($post); 
                ?>
                  <div class="ms-3 me-2">
                    <?php get_template_part( 'template-parts/content'); ?>
                  </div>
                <?php 
                endforeach;
              ?>
            </div>
            <?php
          endif; 
          ?>
        </div>
      </div>
      </div>
      <!----->


<?php

      endwhile;
    endif;
  get_footer(); 
?>