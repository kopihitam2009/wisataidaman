<?php
/**
 * Template Name: Programs
 * Template Post Type: programs page_banner
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php if(get_field('page_banner')) : ?>
  <div class="container-fluid" style="background: url('<?php the_field('page_banner'); ?>') top center no-repeat;height:300px;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center title-program-with-images"><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="container-fluid page-wrapper pt-5 pb-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4"><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="container-fluid mb-4 pt-3 pb-3 info-bar">
  <div class="row">
    <div class="col-md-3 border-right">
      <h5 class="text-center">Keberangkatan</h5>
      <?php if(get_field('depature')) : ?>
        <?php $date = new DateTime(get_field('depature', false, false));
          echo '<p class="text-center">' . $date->format('j M Y') . '</p>'; ?>
      <?php else : ?>
          <p class="text-center">Call us</p>
      <?php endif; ?>

    </div>
    <div class="col-md-3 border-right">
      <?php if(get_field('duration')) : ?>
        <h5 class="text-center">Lama perjalanan</h5>
        <?php echo '<p class="text-center">' . get_field('duration') . '</p>'; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3 border-right">
      <?php if(get_field('lowest_price')) : ?>
        <h5 class="text-center">Harga mulai</h5>
        <?php echo '<p class="text-center">' . get_field('lowest_price') . '</p>'; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-3 border-right-transparent">
      <?php if(get_field('flight')) : ?>
        <h5 class="text-center">Pesawat</h5>
        <?php echo '<p class="text-center"><i class="fa fa-plane" aria-hidden="true"></i> ' . get_field('flight') . '</p>'; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container content">

  <div class="row">
    <div class="col-md-7 content-itinerary">
      <?php echo get_field('itinerary_body'); ?>


      <?php if(get_field('media')) : ?>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo substr(get_field('media'), -11); ?>" allowfullscreen></iframe>
      </div>
      <?php endif; ?>

    </div>

    <div class="col-md-5 term">
      <?php echo get_field('price'); ?>
      <?php echo get_field('term-condition'); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
