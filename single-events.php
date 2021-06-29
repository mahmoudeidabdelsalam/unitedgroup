<?php
  get_header();
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail_url($post, 'full'); 
?>



<div class="component-content mt-5 pt-5 mb-5">
  <div class="container">
    <div class="component-title text-center">
      <h6><?= _e('events', 'unitedgroup'); ?></h6>
    </div>

    <form class="form-search mt-5 mb-5" action="/">
      <div class="input-group mb-3">
        <button class="btn btn-outline" type="submit" id="button-addon1"><?= _e('search', 'unitedgroup'); ?></button>
        <input type="search" name="s" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
      </div>
    </form>


    <?php 
      $images = get_field('galleries_event');
      $sliders = get_field('galleries_event_slider');
    ?>

    <div class="modal fade example-gallery" id="example-gallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <div id="carouselExampleControls<?php echo get_row_index(); ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
              <?php 
              $counter = 0; 
                foreach( $sliders as $slider ): 
                  $counter++;
                ?>
                <div class="carousel-item <?= ($counter == '1')? 'active' : '' ; ?>">
                  <img src="<?= $slider; ?>" class="img-slider-gallery d-block w-100" alt="slide">
                </div>
              <?php endforeach; ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls<?php echo get_row_index(); ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls<?php echo get_row_index(); ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="col col-events d-flex text-center mb-2" data-bs-toggle="modal" data-bs-target="#example-gallery">
          <div class="card">
            <div class="row row-gallery">
              <?php foreach( $images as $image ): ?>
                <div class="col-md-6 col-sm-6">
                  <img class="gallery-img" src="<?= $image; ?>" alt="">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="our-title col-md-6">
        <h6 class="text-gallery"><?= the_title(); ?></h6>
        <div class="mt-3"><?= the_content(); ?></div>
      </div>
    </div>






        <?php
          $related = get_posts( array('post_type' => 'events', 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
          if( $related ):
        ?>

        <div class="component-career component-announ">
          <div>
            <h6 class="hading-black"><?= _e('More Announcements :', 'unitedgroup'); ?></h6>
          </div>
          <div class="row row-announcements row-cols-1 row-cols-lg-3  row-cols-md-2 g-4 mt-1">
            <?php
              foreach( $related as $post ):
                setup_postdata($post); 
                $galleries = get_field('galleries_event');
              ?>

              <div class="col col-events d-flex mb-2">
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="row row-gallery">
                    <?php foreach( $galleries as $image ): ?>
                      <div class="col-md-6 col-sm-6">
                        <img class="gallery-img" src="<?= $image; ?>" alt="">
                      </div>
                    <?php endforeach; ?>
                  </a>
                  <div class="body-events card-body">
                    <h6 class="text-gallery"> <?= get_the_title(); ?></h6>
                    <div class="p-events"><?= wp_trim_words(get_the_content(), '20'); ?></div>
                    <div class="text-center">
                      <a href="<?php the_permalink(); ?>" type="button" class="btn btn-gallery">Explore</a>
                    </div>
                  </div>
                </div>
              </div>

            <?php 
              endforeach;
              ?>
          </div>
        </div>

        <?php endif; ?>



     </div>
    </div>



<?php

      endwhile;
    endif;
  get_footer(); 
?>