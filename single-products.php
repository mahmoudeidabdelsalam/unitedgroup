<?php
  get_header();
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail_url($post, 'full'); 
?>

  <div class="component-content mt-5 pt-5 mb-5">
   
    <div class="container">
      <div class="component-title text-center">
        <h6 class="title-red"><?= the_title(); ?></h6>
      </div>
      <div class="row row-pce mt-5">
          <div class="col-pce-img col-md-6">
              <ul class="list-group">
                <?php 
                $images = get_field('product_gallery');
                if( $images ): 
                  foreach( $images as $image ): 
                ?>
                  <li class="list-group-item"> <img src="<?= $image['url']; ?>" alt="<?= the_title(); ?>"></li>
                <?php 
                  endforeach; 
                endif;
                ?>
              </ul>
              <img  class="img-pce"src="<?= $featured_image; ?>" alt="<?= the_title(); ?>">
          </div> 
          <div class="pce-defintion col-md-6">
            <div class="component-title">
              <h6><?= the_title(); ?></h6>
            </div>
            <p class="mt-3"><?= the_content(); ?></p>
          </div>
      </div>
      <div class="component-Description mt-5">
        <h6 class="title-pce"><?= _e('Description', 'unitedgroup'); ?></h6>
        <p class="mt-3"><?= the_field('product_description'); ?></p>
      </div>
    </div>

    <div class="component-Device-defintion mt-5"> <!--21/6-->
      <div class="container">  <!--21-6 اضافه container يحتوى -->
        <div class="component-Device pt-5 ul-device component-Description">
          <h6 class="title-pce"><?= _e('Device Feature :', 'unitedgroup'); ?></h6>
          <?= the_field('product_feature_block'); ?>
        </div>
      </div>
    </div> 
       
    <div class="butn-Register-App mb-5 d-flex justify-content-center mt-5 bt-3 mb-3">
      <button type="button" class="btn btn-primarye" data-bs-toggle="modal" data-bs-target="#AskForQutation"><!--21/6-->
          <?= _e('Ask For Qutation', 'unitedgroup'); ?>
      </button>
    </div>    
   </div>




<?php

      endwhile;
    endif;
  get_footer(); 
?>