<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package StrapPress
 */

get_header(); ?>

	
  <div class="component-content mt-5 mb-5 pt-5">
    <div class="container">
      <?php
      if ( have_posts() ) : ?>
        <header class="page-header mt-5 pt-5 mb-5">
          <h3 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'strappress' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
        </header>
        <div class="row">
          <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'search' );
          endwhile;
          ?>
        </div>
          <?php c95_pagination()?>
        <?php
      else :
        get_template_part( 'template-parts/content', 'none' );
      endif; 
      ?>
		</div><!-- #div -->
	</div><!-- #div -->

<?php
get_footer();
