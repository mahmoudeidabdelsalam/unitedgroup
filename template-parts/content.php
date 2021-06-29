<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

$featured_image = get_the_post_thumbnail_url($post, 'full'); 
?>

<div class="col col-announcements">
  <div class="card card-announcements">

    <img src="<?= $featured_image; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?= wp_trim_words(get_the_content(), '8'); ?></p>
      <div class="a-link">
        <a href="<?php the_permalink(); ?>" class="btn"><?= _e('Read More', 'unitedgroup'); ?></a>
      </div>
    </div>

  </div>
</div>
