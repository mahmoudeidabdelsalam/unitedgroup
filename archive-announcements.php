<?php
  get_header();
?>

  <div class="component-content mt-5 mb-5 pt-5">
    <div class="container">
      <div class="component-title text-center">
        <h6><?= _e('announcements', 'unitedgroup'); ?></h6>
      </div>

      <form class="form-search mt-5 mb-5" action="/">
        <div class="input-group mb-3">
          <button class="btn btn-outline" type="submit" id="button-addon1"><?= _e('search', 'unitedgroup'); ?></button>
          <input type="search" name="s" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
      </form>

      <?php
      if ( have_posts() ) : ?>
        <div class="component-career component-announ"> 
          <div class="row row-announcements row-cols-1 row-cols-lg-3  row-cols-md-2 g-4 mt-5">
          <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content');
          endwhile;
          ?>
          </div>
        </div>
          <?php c95_pagination()?>
        <?php
      endif; 
      ?>
		</div><!-- #div -->
	</div><!-- #div -->

<?php
  get_footer(); 
?>