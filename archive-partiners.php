<?php
  get_header();
?>

  <div class="component-content mt-5 mb-5 pt-5">
    <div class="container">
      <div class="component-title text-center">
        <h6><?= _e('OUR Partiners', 'unitedgroup'); ?></h6>
      </div>

      <form class="form-search mt-5 mb-5" action="/">
        <div class="input-group mb-3">
          <button class="btn btn-outline" type="submit" id="button-addon1"><?= _e('search', 'unitedgroup'); ?></button>
          <input type="search" name="s" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
      </form>

      <?php
      if ( have_posts() ) : ?>

          <div class="row row-clientss justify-content-center mt-5 row-cols-2 row-cols-lg-5  row-cols-md-3 g-4">
          <?php
            while ( have_posts() ) : the_post();
            $featured_image = get_the_post_thumbnail_url($post, 'full'); 
          ?>
           <div class="col d-flex">
              <div class="div-partiners">
                <div class="text-partiners">
                  <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                </div>
                <div class="img-partiners">
                  <a href="<?php the_permalink(); ?>"><img src="<?= $featured_image; ?>" alt="<?php the_title(); ?>"></a>
                </div>
              </div>
            </div>
          <?php
            endwhile;
          ?>
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