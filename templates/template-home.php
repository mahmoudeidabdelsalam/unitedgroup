<?php
/**
 * Template name: Home
 * 
 */

get_header();
?>

<header>
  <div class="component-header">
    <div class="component-header-img">
      <img class="img-index" src="<?php echo get_template_directory_uri(); ?>/assets/img/background-index.png" alt="background-index">
      <div id="overlay"></div>
      <div class="row-header">
        <div class="container">
          <div class="row">
            <div class="component-Definition col-lg-6 col-md-10">
              <div class="heading-h">
                <h5 class="Definition-h"><?= the_field('headline'); ?></h5>
                <h6><?= the_field('headline_sub'); ?></h6>
                <p><?= the_field('label_input_search'); ?></p>
              </div>
              <form class="row form-search mt-3 mb-2" action="<?= the_field('page_search'); ?>">
                <div class="col input-group mb-3">
                  <button class="btn btn-outline" type="submit" id="button-addon1"><?php _e('search', 'unitedgroup'); ?></button>
                  <input type="search" name="title" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div class="col-auto">
                  <button  class="btn btn-index mb-3" type="submit">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/development.png" alt="">
                  </button>
                </div>
              </form>
              <div class="heading-h">
                <p><?php _e('You can follow us on :', 'unitedgroup'); ?></p>
                <ul class="list-group list-group-horizontal link-social mt-2">
                <?php
                  if( have_rows('follow_us_link') ):
                    while( have_rows('follow_us_link') ) : the_row();
                ?>
                  <li> <a href="<?= the_sub_field('url_follow_icon'); ?>" target="_blank" > <i class="fab fa-<?= the_sub_field('class_follow_icon'); ?>"></i></a> </li>
                <?php 
                    endwhile;
                  endif;
                ?>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--end-header-->

<?php 
  $link_title = get_field('about_us_headline');
  $page = get_field('about_us_link');
  $featured_img_url = get_the_post_thumbnail_url($page, 'full'); 
?>
<!--start Pages-->
<div class="componet-event-index container">
  <div class="row-services-index row  row-cols-1 row-cols-sm-2 row-cols-md-4">
    <a href="<?php echo esc_url( get_page_link( $page ) ); ?>" class=" col mb-4">
      <div class="services-img">
        <img src="<?= $featured_img_url; ?>" alt="Success stories">
        <div class="text-img">
          <h6><?= $link_title; ?></h6>
        </div>
        <div class="services-overlay"></div>
      </div>
    </a>

    <a href="<?= get_option( 'home' ); ?>/partiners" class=" col mb-4">  <!--21/6-->
      <div class="services-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-2.png" alt="our partiner">
        <div class="text-img">
          <h6><?php _e('our partiner','unitedgroup'); ?></h6>
        </div>
        <div class="services-overlay"></div>
      </div>
    </a>

    <a href="<?= get_option( 'home' ); ?>/clients" class=" col mb-4">  <!--21/6-->
      <div class="services-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-3.png" alt="our partiner">
        <div class="text-img">
          <h6><?php _e('our clients','unitedgroup'); ?></h6>
        </div>
        <div class="services-overlay"></div>
      </div>
    </a>

    <a href="<?= get_option( 'home' ); ?>/events" class=" col mb-4">  <!--21/6-->
      <div class="services-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-4.png" alt="our partiner">
        <div class="text-img">
          <h6><?php _e('Events','unitedgroup'); ?></h6>
        </div>
        <div class="services-overlay"></div>
      </div>
    </a>
  </div>
</div>

<!-- End Page -->

<!-- container About and posts -->
<div class="container">

  <!--what-ue-->
  <div class="component-Why mt-5">
    <div class="component-title text-center mb-3">
      <h6 ><?= the_field('headline_about'); ?></h6>
    </div>
    <p class="p-content text-center mb-5">
      <?= the_field('headline_sub_about'); ?>
    </p>
    <!--stert-video-->
    <?php if(get_field('video_about')): ?>
      <div class="wrap-video mb-3">
        <div class="video-play" id="video-play"></div>  
          <video controls id="exampleVideo" poster="<?= the_field('video_poster'); ?>" height="360" style="object-fit:cover; width:100%;">
            <source type="video/mp4" src="<?= the_field('video_about'); ?>">
          </video>
        <div class="header-overlay"></div>
      </div>  
    <?php endif; ?>
    <!--end-video--> 
  </div>
  <!--end-what-->

  <!--start-categories-->
  <div class="component-categories mt-5">
    <div class="row-link-one component-title text-center">
      <h6><?php _e('categories','unitedgroup'); ?></h6>
    </div>
    <?php
      $families = get_field('taxonomy_family'); 
      if( $families ):
    ?>
    <div class="owl-carousel row-services-indexe mt-5"> 
      <?php 
        foreach( $families as $family ): 
          $image = get_field('image_categories', $family);
      ?>
        <div class="ms-3 me-2">
          <a href="<?= the_field('page_search'); ?>/?family_id=<?= $family->term_id; ?>">
            <div class="services-img">
              <img src="<?= $image; ?>" alt="Fully automated chemistry analyzer">
              <div class="text-img">
                <h6><?php echo esc_html( $family->name ); ?></h6>
              </div>
              <div class="services-overlay"></div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  <!--end-categories-->

<?php
    $brands = get_field('taxonomy_brands'); 
    if( $brands ):
  ?>
  <!--start-brands-->
  <div class="component-brands mt-5">
    <div class="row-link-one component-title text-center">
      <h6><?php _e('brands', 'unitedgroup'); ?></h6>
      <a href="<?= the_field('page_search'); ?>"><?= _e('See All', 'unitedgroup'); ?> <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
    </div>
    <div class="row-brands mt-5">
      <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <?php 
        $counter = 0;
          foreach( $brands as $brand ): 
            $counter++;
            $image_brand = get_field('image_categories', $brand);
        ?>

          <li class="nav-item" role="presentation">
            <button class="nav-link <?= ($counter == '1')? 'active':''; ?>" id="pills-<?= $brand->term_id; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?= $brand->term_id; ?>" type="button" role="tab" aria-controls="pills-<?= $brand->term_id; ?>" aria-selected="true">
              <img src="<?= $image_brand; ?>" alt="<?= $brand->name; ?>">
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        
      <?php 
        $counter = 0;
          foreach( $brands as $brand ): 
            $counter++;
            $image_brand = get_field('image_categories', $brand);
            $description = get_field('description_categories', $brand);
        ?>
          <div class="tab-pane fade <?= ($counter == '1')? 'show active':''; ?>" id="pills-<?= $brand->term_id; ?>" role="tabpanel" aria-labelledby="pills-<?= $brand->term_id; ?>-tab">
            <div class="row">
              <div class="col-tab-img col-md-3">
                <img src="<?= $image_brand; ?>" alt="thermofisher">
              </div>
              <div class="col-text-tab col-md-8">
                <p> <?= $description; ?>
                <div class="text-center mt-5">
                  <a class="btn" href="<?= the_field('page_search'); ?>/?brand_id=<?= $brand->term_id; ?>"><?= _e('Read More', 'unitedgroup'); ?></a> <!--21/6-->
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!--end-brands-->
<?php endif; ?>




<?php
    $clients = get_field('clients'); 
    if( $clients ):
  ?>
  <!--start-our-clients-->
  <div class="component-our-clients mt-5">
    <div class="row-link-one component-title text-center mb-3">
      <h6 ><?= the_field('clients_title'); ?></h6>
      <a href="<?= get_option( 'home' ); ?>/clients"><?= _e('See All', 'unitedgroup'); ?><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
    </div>
    <p class="p-content text-center mb-5">
      <?= the_field('clients_content'); ?>
    </p>
    <div class="row row-clientss justify-content-center mt-5 row-cols-2 row-cols-lg-5  row-cols-md-3 g-4">
      <?php 
        foreach( $clients as $post ): 
        setup_postdata($post); 
        $featured_image = get_the_post_thumbnail_url($post, 'full'); 
      ?>
        <div class="col">
          <a href="<?php the_permalink(); ?>"><img src="<?= $featured_image; ?>" alt="<?php the_title(); ?>"></a>
        </div>
      <?php 
        endforeach; 
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <!--end-our clients-->
<?php endif; ?>



<?php
    $announcements = get_field('announcement'); 
    if( $announcements ):
  ?>
  <!--start-announcement-->
  <div class="component-announcement mt-5">
    <div class="row-link-one component-title text-center">
      <h6><?= _e('announcement', 'unitedgroup'); ?></h6>
      <a href="<?= get_option( 'home' ); ?>/announcements"><?= _e('See All', 'unitedgroup'); ?> <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
    </div>
    <div class="owl-carousel row-services-indexe mt-5"> 
    <?php 
        foreach( $announcements as $post ): 
        setup_postdata($post); 
        $featured_image = get_the_post_thumbnail_url($post, 'full'); 
      ?>
      <div class="ms-3 me-2">
        <div class="col col-announcements">
          <div class="card card-announcements">
            <img src="<?= $featured_image; ?>" class="card-img-top" alt="<?php the_title(); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?= wp_trim_words(get_the_content(), '10'); ?></p>
                <div class="a-link">
                <a href="<?php the_permalink(); ?>" class="btn"><?= _e('Read More', 'unitedgroup'); ?></a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <?php 
        endforeach; 
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <!--end-announcement-->
<?php endif; ?>








<?php
if( have_rows('galleries') ):                    
  ?>
  <!--start-Gallery-->
  <div class="component-Gallery mt-5">
    <div class="row-link-one component-title text-center">
      <h6><?= the_field('galleries_title'); ?></h6>
      <a href="<?= the_field('galleries_link'); ?>"><?= _e('See All', 'unitedgroup'); ?> <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
    </div>
    <div class="row row-announcements row-cols-1 row-cols-lg-3  row-cols-md-2 g-4 mt-5">

    <?php 
      while( have_rows('galleries') ) : the_row(); 
      $images = get_sub_field('galleries_images');
      $sliders = get_sub_field('galleries_images_slider');
    ?>
      <div class="col col-events d-flex text-center mb-2" data-bs-toggle="modal" data-bs-target="#example-gallery<?php echo get_row_index(); ?>">
        <div class="card">
          <div class="row row-gallery">
            <?php foreach( $images as $image ): ?>
              <div class="col-md-6 col-sm-6">
                <img class="gallery-img" src="<?= $image; ?>" alt="">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="gallery-body card-body"> <!--21/6-->
            <h6 class="text-gallery"><?= the_sub_field('galleries_headline'); ?></h6>
            <div>
              <button type="button" class="btn btn-gallery" data-bs-toggle="modal" data-bs-target="#example-gallery<?php echo get_row_index(); ?>">
                <?= _e('Explore', 'unitedgroup'); ?>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade example-gallery" id="example-gallery<?php echo get_row_index(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo get_row_index(); ?>" aria-hidden="true">
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
    <?php endwhile; ?>
    <!---->
    </div>
  </div>
  <!--end-Gallery-->
<?php endif; ?>

  <?php $subscribe = ($_GET['subscribe']? $_GET['subscribe']:'0'); ?>

  <!--Subscribe -->
  <div class="component-Subscribe mt-5 mb-5 text-center">
      <h6 class="hading-black"><?= the_field('headline_subscribe'); ?></h6>
      <p class="mt-3"><?= the_field('subscribe_text'); ?></p>
      <?php if($subscribe == '1'): ?>
        <div class="alert alert-success mt-3" role="alert">
          <h3><?= _e('thank you for subscribe', 'unitedgroup'); ?></h3>
        </div>
      <?php else: ?>
        <form method="post" enctype="multipart/form-data" id="gform_<?= the_field('subscribe_id_form'); ?>" action="/?subscribe=<?= the_field('subscribe_id_form'); ?>">
          <div class="input-group mb-3 mt-5">
            <input name="input_1" type="email" class="form-control" placeholder="Enter your mail address" aria-label="Enter your mail address" aria-describedby="gform_submit_button_1">
            <button class="btn btn-outline-secondary" type="submit" id="gform_submit_button_1">Subscribe</button>
          </div>
          <input type="hidden" class="gform_hidden" name="is_submit_<?= the_field('subscribe_id_form'); ?>" value="1">
          <input type="hidden" class="gform_hidden" name="gform_submit" value="<?= the_field('subscribe_id_form'); ?>">
          <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
          <input type="hidden" class="gform_hidden" name="state_<?= the_field('subscribe_id_form'); ?>" value="WyJbXSIsImIzYmFlN2ZjODgxMzM4ODlkOTU3YjdmYWQ5M2UyOTVjIl0=">
          <input type="hidden" class="gform_hidden" name="gform_target_page_number_<?= the_field('subscribe_id_form'); ?>" id="gform_target_page_number_<?= the_field('subscribe_id_form'); ?>" value="0">
          <input type="hidden" class="gform_hidden" name="gform_source_page_number_<?= the_field('subscribe_id_form'); ?>" id="gform_source_page_number_<?= the_field('subscribe_id_form'); ?>" value="1">
          <input type="hidden" name="gform_field_values" value="">
        </form>
      <?php endif; ?>
    </div>
  <!--end-Subscribe -->

</div>
<!-- container About and posts -->


<!--start-contant-us-->
<div class="component-contant-us mt-5  pt-5" id="contant-us">
  <div class="animation__shapes">
    <span></span>
  </div>

  <div class="container">
    <div class="component-title text-center">
      <h6><?php _e('contact us', 'unitedgroup'); ?></h6>
    </div>
    <div class="row-content-us row mt-5 pb-5">
      <div class="col-form col-md-5">
        
        <div class="component-Contact-Info">
          <ul class="list-group  mt-3">
            <?php 
              if(have_rows('information_contact_us')):
                while( have_rows('information_contact_us') ) : the_row();  
            ?>
              <li class="list-group-iteme">
                <img src="<?= the_sub_field('icon_information'); ?>" alt="<?= the_sub_field('head_information'); ?>">
                <span><?= the_sub_field('head_information'); ?> :</span> <?= the_sub_field('data_information'); ?>
              </li>
            <?php 
                endwhile; 
              endif;
            ?>
          </ul>
        </div>

        <h6 class="hading-form"><?php _e('Send a message', 'unitedgroup'); ?></h6>

        <?php 
        $contact_form_id = get_field('contact_form_id');
        if($subscribe == $contact_form_id): 
        ?>
          <div class="alert alert-success mt-3" role="alert">
            <h3><?= _e('Your request has been successfully accepted. We will contact you as  soon as possible.', 'unitedgroup'); ?></h3>
          </div>
        <?php else: ?>

        <form class="form-content row g-3 needs-validation mt-4" method="post" enctype="multipart/form-data" id="gform_<?= the_field('contact_form_id'); ?>" action="/?subscribe=<?= $contact_form_id; ?>">

          <div class="col-md-12 mb-3">
            <input namee="input_5" type="text" class="form-control" id="validationCustom01" placeholder="<?= _e('Name', 'unitedgroup'); ?>" required="">
          </div>
          <div class="col-md-6 mb-3">
            <input namee="input_2" type="email" class="form-control" id="validationCustom01" placeholder="<?= _e('E-mail', 'unitedgroup'); ?>" required="">
          </div>
          <div class="col-md-6 mb-3">
            <input namee="input_3" type="text" class="form-control" id="validationCustom01" placeholder="<?= _e('Phone', 'unitedgroup'); ?>" required="">
          </div>
          <div class="col-md-12 mb-3">
            <textarea namee="input_4" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="<?= _e('Message', 'unitedgroup'); ?>" ></textarea>
          </div>
          <div class="col-12 button-form">
            <button class="btn btn-secondar" type="submit" id="gform_submit_button_<?= the_field('contact_form_id'); ?>"><?= _e('Send', 'unitedgroup'); ?></button>
          </div>

          <input type="hidden" class="gform_hidden" name="is_submit_<?= the_field('contact_form_id'); ?>" value="1">
          <input type="hidden" class="gform_hidden" name="gform_submit" value="<?= the_field('contact_form_id'); ?>">
          <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
          <input type="hidden" class="gform_hidden" name="state_<?= the_field('contact_form_id'); ?>" value="WyJbXSIsImIzYmFlN2ZjODgxMzM4ODlkOTU3YjdmYWQ5M2UyOTVjIl0=">
          <input type="hidden" class="gform_hidden" name="gform_target_page_number_<?= the_field('contact_form_id'); ?>" id="gform_target_page_number_<?= the_field('contact_form_id'); ?>" value="0">
          <input type="hidden" class="gform_hidden" name="gform_source_page_number_<?= the_field('contact_form_id'); ?>" id="gform_source_page_number_<?= the_field('contact_form_id'); ?>" value="1">
          <input type="hidden" name="gform_field_values" value="">

        </form>

        <?php endif; ?>
      </div>


      <div class="col-map col-md-6">
        <div class="contact-us__map">
          <?= the_field('maps'); ?>
        </div>
      </div>
    </div>
  </div>
<!--end-content-us-->
</div>


<?php 
get_footer(); 
?>