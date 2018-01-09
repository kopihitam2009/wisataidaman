<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-title page-wrapper pt-5 pb-4 mb-4">
      <h2 class="text-center mb-4"><?php the_title(); ?></h2>
  </div>
  <div class="container content text-page">
    <div class="row">
      <!-- paste here -->
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 sidebar">
        <?php if (!is_active_sidebar( 'sidebar-1' )) return; ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div>
      <!-- end -->
    </div>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
