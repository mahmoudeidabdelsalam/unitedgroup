<?php
get_header();
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  $featured_image = get_the_post_thumbnail_url($post, 'full'); 
  ?>


    <div class="component-content mt-5 pt-5 mb-5">
      <div class="container">
        <div class="component-title text-center">
          <h6><?= the_title(); ?></h6>
          <p class="p-content text-center mb-5 mt-3"><?= the_content(); ?></p>
        </div>


        <div class="component-career mt-5 mb-5">
          <?php 
          if(have_rows('partiners_list')):
            while( have_rows('partiners_list') ) : the_row();  
          ?>
            <div class="row-out-partiner row">
              <div class="col-out-diserbtion our-title col-md-5">
                <img src="<?= the_sub_field('logo_partiners'); ?>" alt="thermo">
                <p class="mt-3"><?= the_sub_field('text_partiners'); ?></p>
              </div>
              <div class="componet-out-img col-md-7">
                <div class="out-img-1">
                  <img src="<?= the_sub_field('img_one_partiners'); ?>" alt="out">
                </div>
                <div class="out-img-2">
                  <img src="<?= the_sub_field('img_two_partiners'); ?>" alt="out">
                </div>
              </div>
            </div> 
          <?php 
              endwhile; 
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