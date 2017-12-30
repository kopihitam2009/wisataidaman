<?php get_header(); ?>

<?php $cat = get_queried_object(); ?>

<div class="container-fluid page-wrapper pt-5 pb-4 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4"><?php echo $cat->cat_name ?></h2>
    </div>
  </div>
</div>

<div class="container-fluid">

  <?php if ( have_posts() ) : ?>
    <div class="row" style="padding:0 5px 0 5px;">
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="col-md-4 card-program">
          <?php the_title(); ?>
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
<?php get_footer();
