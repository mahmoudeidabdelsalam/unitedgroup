<?php
get_header();
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  $featured_image = get_the_post_thumbnail_url($post, 'full'); 
  ?>

<div class="component-app mt-5 pt-4 mb-5"> <!--21/6-->
  
  <div class="defintion-appliction pt-5">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img class="img-appliction" src="<?= the_field('bg_block'); ?>" alt="<?= the_title(); ?>">
          </div>
          <div class="content-defintion col-md-6">
            <h6 class="mb-3"><?= the_title(); ?></h6>
            <?= the_content(); ?>
          </div>
        </div>
    </div>
  </div>


  <div class="component-Download  mt-5 mb-5 text-center">
    <h6 class="title-download mb-3"><?= _e('You Can Download It From :', 'unitedgroup'); ?></h6>
    <a href="<?= the_field('download_app'); ?>"> <img class="img-download"src="<?php echo get_template_directory_uri(); ?>/assets/img/app.png" alt="app"></a></a>
    <a href="<?= the_field('download_google'); ?>"><img class="img-download"src="<?php echo get_template_directory_uri(); ?>/assets/img/google.png" alt="google"></a>
  </div>


  <div class="component-Feature">
    <?php 
    if(have_rows('features')):
      while( have_rows('features') ) : the_row();  
    ?>
      <div class="row row-feature mb-5">
        <div class="col-feature col-md-6">
          <img class="img-first" id="img-first-1" src="<?= the_sub_field('img_feature'); ?>" alt="<?= the_sub_field('headline_feature'); ?>">
        </div>
        <div class="col-md-6 content-defintion col-text-defintion">
          <h6><?= the_sub_field('headline_feature'); ?></h6>
          <p class="mt-3"><?= the_sub_field('text_feature'); ?></p>
        </div>
      </div>
    <?php 
        endwhile; 
    endif;
    ?>
  </div>





  
</div>
<!----->
<!-- Modal --> <!--21-6/2021-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body text-center our-title">
        <img src="./assets/img/checked.png" alt="checked">
        <p>Your request has been successfully accepted. We will contact you as 
          soon as possible.
        </p>
        <a href="index.html" type="button" class="btn btn-secondary">ok</a>

      </div>
      
    </div>
  </div>
  </div>

  <?php
  endwhile;
endif;
get_footer(); 
?>