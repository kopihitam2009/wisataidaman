<?php
/**
 * Template Name: Team Page
 * The template for displaying pages
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-wrapper pt-5 pb-4 mb-4">
      <h2 class="text-center mb-4"><?php the_title(); ?></h2>
  </div>
  <div class="container content text-page">
    <div class="row">
      <div class="col-md-12 team text-center">
        <?php the_content(); ?>
      </div>
    </div>
    <hr>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
