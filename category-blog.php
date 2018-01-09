<?php get_header(); ?>

<?php $cat = get_queried_object(); ?>

<div class="container-fluid page-title page-wrapper pt-5 pb-4 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4"><?php echo $cat->cat_name ?></h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ( have_posts() ) : ?>
        <div class="row">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-12">
              <div class="media">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail([100,100], ['class' => 'mr-3 blog-thumb shadow']); ?>
              <?php else : ?>
                <img class="mr-3 blog-thumb shadow" width="100px" height="100px;" src="<?php echo get_template_directory_uri() . '/images/default-thumb.jpg'; ?>">
              <?php endif; ?>
              <div class="media-body">
                <h5><?php the_title(); ?></h5>
                <?php the_content(); ?>
              </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-4 sidebar">
      <?php if (!is_active_sidebar( 'sidebar-1' )) return; ?>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
</div>
<?php get_footer();
