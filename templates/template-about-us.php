<?php
/**
 * Template name: About us
 * 
 */

get_header();

  if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  ?>

    <div class="component-content mt-5 pt-5 mb-5">
      <div class="component-title text-center">
        <h6><?= the_title(); ?></h6>
      </div>
      <div class="row row-pag-about mt-5 mb-5">
         
        <div class="Definition-about col-md-6">
            <h6 class="hading-black"><?= the_field('headline_bwi'); ?></h6>
            <p class="mt-3"><?= the_field('text_bwi'); ?></p>
        </div>
        <div class="col-md-6 component-about-img">
          <img src="<?= the_field('image_bwi'); ?>" alt="about">
        </div>
      </div>
      <div class="container mb-5">
        <!--start-our-values-->
        <div class="text-center component-Our-Story">
          <h6 class="h-wheat mb-3"><?= the_field('headline_ca'); ?></h6>
            <p><?= the_field('text_ca'); ?></p>
        </div>
        <!--start-our-values-->
        <div class="row row-our-values justify-content-between">
          <h6 class="hading-black mb-4"><?= the_field('headline_lf'); ?></h6>
          <?php 
            if(have_rows('list_lf')):
              while( have_rows('list_lf') ) : the_row();  
          ?>
            <div class="col-md-5 our-title mb-3">
              <h6 class="h-blue"><?= the_sub_field('headline_list_lf'); ?></h6>
              <p><?= the_sub_field('text_list_lf'); ?></p>
            </div>
          <?php 
              endwhile; 
            endif;
          ?>
        </div>
        <!--start-what-we-do-->
        <div class="component-Why mt-5">
          <div class="text-center mb-3">
            <h6 class="hading-black"><?= the_field('headlne_wcu'); ?></h6>
          </div>
          <p class="p-content text-center mb-5"><?= the_field('text_wcu'); ?></p>
          <!--stert-video-->
          <div class="wrap-video mb-3">
                <div class="video-play" id="video-play"></div>  
                <video id="exampleVideo">
                  <source type="video/mp4" src="<?= the_field('video_wcu'); ?>">
                </video>
                <div class="header-overlay"></div>
          </div>  
          <!--end-video--> 
        </div>
      </div>
     
    </div>
  <?php 
  endwhile;
  endif;
get_footer(); 
?>