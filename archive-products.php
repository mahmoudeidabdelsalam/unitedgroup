<?php
  get_header();

  $paged          = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
  $order          = isset($_GET['sort']) ? $_GET['sort'] : '0';
  $brand          = isset($_GET['brand']) ? $_GET['brand'] : '-1';
  $family         = isset($_GET['family']) ? $_GET['family'] : '-1';

  $counter = $GLOBALS['wp_query']->found_posts;

  $brands = get_terms( array(
    'taxonomy' => 'brands-category',
    'hide_empty' => false,
  ));

  $families = get_terms( array(
    'taxonomy' => 'family-category',
    'hide_empty' => false,
  ));

  $args = array(
    'post_type' => 'products',
    'posts_per_page' => 9,
    'paged' => $paged,
    'order' => $order,
  );
 

  if( $brand != '-1' || $family != '-1') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'brands-category',
        'field'    => 'term_id',
        'terms'    => $brand,
      ),
      array(
        'taxonomy' => 'family-category',
        'field'    => 'term_id',
        'terms'    => $family,
      ),
    );
  }

  $query = new \WP_Query( $args );
?>

  <div class="component-content mt-5 mb-5 pt-5">
    <div class="container">
      <div class="component-title text-center">
        <h6><?= _e('products', 'unitedgroup'); ?></h6>
      </div>

      <form class="form-search mt-5 mb-5" action="<?= the_field('link_search_products', 'option'); ?>">
        <div class="input-group mb-3">
          <button class="btn btn-outline" type="submit" id="button-addon1"><?= _e('search', 'unitedgroup'); ?></button>
          <input type="text" name="title" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
      </form>

      <div class="row-products row g-5 align-items-start">
          <div class="col-md-3 col-Filters">
            <h6 class="title-filters"><?= _e('Filters', 'unitedgroup'); ?></h6>


            <form action="" class="component-form-check mt-4">

              <h6><?= _e('Brands', 'unitedgroup'); ?></h6>

                <?php 
                if ( !empty($brands) ) :
                  foreach( $brands as $b_term ):
                ?>
                <div class="form-check">
                  <input class="form-check-input" name="brand" type="radio" value="<?= $b_term->term_id; ?>" id="flexCheckDefault<?= $b_term->term_id; ?>" <?= ($b_term->term_id == $brand)? 'checked':''; ?>>
                  <label class="form-check-label" for="flexCheckDefault<?= $b_term->term_id; ?>">
                    <?= $b_term->name; ?>
                  </label>
                </div>
                <?php 
                  endforeach;
                endif;
                ?>

              <h6><?= _e('Family', 'unitedgroup'); ?></h6>

                <?php 
                if ( !empty($families) ) :
                  foreach( $families as $f_term ):
                ?>
                <div class="form-check">
                  <input class="form-check-input" name="family" type="radio" value="<?= $f_term->term_id; ?>" id="flexCheckDefault<?= $f_term->term_id; ?>" <?= ($f_term->term_id == $family)? 'checked':''; ?>>
                  <label class="form-check-label" for="flexCheckDefault<?= $f_term->term_id; ?>">
                    <?= $f_term->name; ?>
                  </label>
                </div>
                <?php 
                  endforeach;
                endif;
                ?>
                
              <div class="mt-5 pt-5 text-center">
                <button class="btn btn-secondary" type="submit"><?= _e('Apply', 'unitedgroup'); ?></button>
              </div>
            </form>
          </div>


          <div class="col-md-9"> 
            <div class="mb-3 row row-items-page justify-content-between">
              <div class="col"> 
                <?= _e('Items in this page :', 'unitedgroup'); ?> <span>(<?= $counter; ?> Item)</span>
              </div>
              <div class="col"> 
                  <?= _e('Sort by :', 'unitedgroup'); ?><span>
                  <form action="">
                    <select class="form-select" name="sort" id="postOrder" onchange="this.form.submit()">
                      <option value="0"><?= _e('select..', 'unitedgroup'); ?></option>
                      <option value="ASC"><?= _e('lowest to highest', 'unitedgroup'); ?></option>
                      <option value="DESC"><?= _e('highest to lowest', 'unitedgroup'); ?></option>
                    </select>
                  </form>
                  </span>
              </div>
            </div>


            <?php
            if ( $query->have_posts() ) : ?>
              <div class="row-products-img row  row-cols-1 row-cols-lg-3 row-cols-md-2 g-5 mb-5"><!--21/6-->
                <?php
                while ( $query->have_posts() ) : $query->the_post();
                  get_template_part( 'template-parts/content', 'search');
                endwhile;
                ?>
              </div>

              <div class="Pagination mt-4 mb-4 ">
                <?php c95_pagination(); ?>
              </div>

             <?php
            endif; 
            ?>

          </div>
        </div>



      
		</div><!-- #div -->
	</div><!-- #div -->

<?php
  get_footer(); 
?>