<?php
/**
 * Template name: services
 * 
 */

get_header();
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  ?>


    <div class="component-content mt-5 pt-5 mb-5">
      <div class="container">
        <div class="component-title text-center">
          <h6><?= the_title(); ?></h6>
          <p class="p-content text-center mb-5 mt-3"><?= the_content(); ?></p>
        </div>


        <div class="component-career mt-5 mb-5">
           <div class="row-services row justify-content-md-center row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php 
            if(have_rows('services_list')):
              while( have_rows('services_list') ) : the_row();  
            ?>


              <div class="col-services col mb-4">
                <div class="services-img">
                  <img src="<?= the_sub_field('img_services'); ?>" alt="<?= the_sub_field('headline_services'); ?>">
                  <div class="text-img">
                    <h6><?= the_sub_field('headline_services'); ?></h6>
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6><?= the_sub_field('headline_services'); ?></h6>
                      <p><?= the_sub_field('text_services'); ?></p>
                    </div>
                  </div>
                  <div class="services-overlay"></div>
                </div>
              </div>


            <?php 
                endwhile; 
            endif;
            ?>
          </div>
        </div>

      </div>
    </div>
    <!----->



  <?php
  endwhile;
endif;
get_footer(); 
?>