<?php
/**
 * Template name: Advanced Search
 * 
 */

get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post();


  $title          = isset($_GET['title']) ? $_GET['title'] : '0';
  $description    = isset($_GET['description']) ? $_GET['description'] : false;
  $brand          = isset($_GET['brand']) ? $_GET['brand'] : '-1';
  $family         = isset($_GET['family']) ? $_GET['family'] : '-1';
  $country        = isset($_GET['country']) ? $_GET['country'] : '-1';

  $brands = array(
    'show_option_none'  => __( 'Select brand', 'textdomain' ),
    'name'              => 'brand',
    'id'                => 'validationDefault03',
    'class'             => 'form-select',
    'depth'             => 0,
    'tab_index'         => 0,
    'taxonomy'          => 'brands-category',
    'value_field'       => 'term_id',
    'selected'          => $brand,
  );

  $familys = array(
    'show_option_none'  => __( 'Select category', 'textdomain' ),
    'name'              => 'family',
    'id'                => 'validationDefault04',
    'class'             => 'form-select',
    'depth'             => 0,
    'tab_index'         => 0,
    'taxonomy'          => 'family-category',
    'value_field'       => 'term_id',
    'selected'          => $family,
  );

  $countries = array(
    'show_option_none'  => __( 'Select country', 'textdomain' ),
    'name'              => 'country',
    'id'                => 'validationDefault05',
    'class'             => 'form-select',
    'depth'             => 0,
    'tab_index'         => 0,
    'taxonomy'          => 'country-category',
    'value_field'       => 'term_id',
    'selected'          => $country,
  );  



  $args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
  );

  if($title != '0') {    
    if(!empty($description)) {
      $args['s'] = $description;
    }  else {
      $args['s'] = $title;
    } 
  }
  

  if( $brand != '-1') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'brands-category',
        'field'    => 'term_id',
        'terms'    => $brand,
      ),
    );
  }

  if( $family != '-1') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'family-category',
        'field'    => 'term_id',
        'terms'    => $family,
      ),
    );
  }

  if( $country != '-1') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'country-category',
        'field'    => 'term_id',
        'terms'    => $country,
      ),
    );
  }

  $query = new \WP_Query( $args );

?>



<div class="component-content mt-5 pt-5 mb-5">
      <div class="container">
        <div class="component-title text-center">
          <h6><?= the_title(); ?></h6>
        </div>
        <div class="component-career component-advanced mt-5">
          <form action="<?php the_permalink(); ?>"class="form-content form-advanced row g-3 needs-validation mt-2" novalidate>
            
            <div class="col-md-12 mb-1">
              <label for="validationCustom01" class="form-label"><?= _e('Product Name', 'unitedgroup'); ?></label>
              <input type="text" name="title" value="<?= ($title != '0')? $title:''; ?>" class="form-control" id="validationCustom01"  required>
              <div class="valid-feedback">
                <?= _e('Looks good!', 'unitedgroup'); ?>
              </div>
              <div class="invalid-feedback">
                <?= _e('Please choose a Product Name.', 'unitedgroup'); ?>
              </div>
            </div>

            <div class="col-md-12 mb-1">
              <label for="validationCustom02" class="form-label"><?= _e('Description', 'unitedgroup'); ?></label>
              <textarea class="form-control" name="description" id="validationCustom02" rows="5"><?= ($description)? $description:''; ?></textarea>
            </div>

            <div class="col-md-6 mb-1">
              <label for="validationCustom03" class="form-label"><?= _e('Brand', 'unitedgroup'); ?></label>
              <?php wp_dropdown_categories($brands); ?>
            </div>

            <div class="col-md-6 mb-1">
              <label for="validationCustom04" class="form-label"><?= _e('Category', 'unitedgroup'); ?></label>
              <?php wp_dropdown_categories($familys); ?>
            </div>

            <div class="col-md-12 mb-1">
              <label for="validationCustom05" class="form-label"><?= _e('Production Country', 'unitedgroup'); ?></label>
              <?php wp_dropdown_categories($countries); ?>
            </div>

            <div class="col-12 text-center">
              <button class="btn btn-primarye" type="submit"><?= _e('Apply', 'unitedgroup'); ?></button>
            </div>
          </form>
        </div>
     </div>
    </div>
    <!----->

    <div class="component-content mt-3 mb-5">
      <div class="container">
        <div class="row-products row g-5 align-items-start">
          <div class="row-products-img row  row-cols-1 row-cols-lg-3 row-cols-md-2 g-5 mb-5"><!--21/6-->
            <?php 
            if ( $query->have_posts() ):
              while ( $query->have_posts() ):
              $query->the_post();

              $featured_image = get_the_post_thumbnail_url($post, 'full'); 
            ?>
            <div class="col-products col d-flex">
              <div class="d-flex">
                <a href="<?php the_permalink(); ?>" class="card">
                  <img src="<?= $featured_image; ?>" class="card-img-top" alt="product">
                  <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?= wp_trim_words(get_the_content(), '8'); ?></p>
                    </div>
                </a>
              </div>
            </div>
            <?php 
              endwhile;
            endif;
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>

    
<?php 
    endwhile;
  endif;
get_footer(); 
?>