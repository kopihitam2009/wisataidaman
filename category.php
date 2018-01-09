<?php get_header(); ?>

<?php $cat = get_queried_object(); ?>

<div class="container-fluid page-title page-wrapper pt-5 pb-4 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4"><?php echo $cat->cat_name ?></h2>
    </div>
  </div>
</div>

<div class="container-fluid">
  <?php $arg = new WP_Query( array( 'post_type' => 'programs', 'cat' => get_cat_ID($cat->cat_name), 'order' => 'asc' ) ); ?>
  <?php if ( $arg->have_posts() ) : ?>
    <div class="row" style="padding:0 5px 0 5px;">
      <?php while ( $arg->have_posts() ) : $arg->the_post(); ?>

      <div class="col-md-4 card-program card-<?php the_ID(); ?>">
      <div class="card shadow">
        <img class="card-img-top program-thumb" src="<?php the_field('thumbnail'); ?>" alt="<?php the_title();  ?>" data="<?php echo get_permalink();  ?>" />
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="title-program"><?php echo mb_strimwidth( get_the_title(), 0, 20, '...' );  ?></div>
            <div class="lp-program"><?php the_field('lowest_price'); ?></div>
         </div>
          <span class="add-info"><?php the_field('duration'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
        </div>
      </div>
     </div>


      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
<?php get_footer();
