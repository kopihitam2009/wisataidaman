<?php get_header(); ?>

<div class="page-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-page.jpg" />
</div>

<div class="container content-page">
  <?php $cat = get_queried_object(); ?>
  <?php $arg = new WP_Query( array( 'post_type' => 'programs', 'cat' => get_cat_ID($cat->cat_name), 'order' => 'asc' ) ); ?>
  <?php if ( $arg->have_posts() ) : ?>
    <div class="row">
      <?php while ( $arg->have_posts() ) : $arg->the_post(); ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="<?php the_permalink();?>"><img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="image" /></a>
            <div class="card-body">
              <span><?php the_field('lowest_price'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
<?php get_footer();
