<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header-page.jpg" />
  </div>
  <div class="container content-page">
    <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
