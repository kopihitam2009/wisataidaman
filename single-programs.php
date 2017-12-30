<?php
/**
 * Template Name: Programs
 * Template Post Type: programs page_banner
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php if(get_field('page_banner')) : ?>
  <div class="container-fluid pl-0 pr-0" style="background: url('<?php the_field('page_banner'); ?>') top center no-repeat;height:300px;">
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
      <?php if(get_field('depature')) : ?>
        <h5 class="text-center">Keberangkatan</h5>
        <?php
          $date = new DateTime(get_field('depature', false, false));
          echo '<p class="text-center">' . $date->format('j M Y') . '</p>';
        ?>
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

      <?php /*<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom:10px;">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Itinerary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Detail</a>
      </li>
      </ul>
      <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <?php echo get_field('itinerary_body' . $f); ?>

      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <div class="card-group">
          <?php if(get_field('price')) : ?>
            <div class="card">
              <div class="card-header">Harga</div>
              <div class="card-body"><?php echo get_field('price'); ?></div>
            </div>
          <?php endif; ?>
          <?php if(get_field('include')) : ?>
            <div class="card">
              <div class="card-header">Harga termasuk</div>
              <div class="card-body"><?php echo get_field('include'); ?></div>
            </div>
          <?php endif; ?>
          <?php if(get_field('exclude')) : ?>
            <div class="card">
              <div class="card-header">Harga tidak termasuk</div>
              <div class="card-body"><?php echo get_field('exclude'); ?></div>
            </div>
          <?php endif; ?>
        </div>
        <hr />
        <div class="card-group">
          <?php if(get_field('acomodation')) : ?>
            <div class="card">
              <div class="card-header">Akomodasi</div>
              <div class="card-body"><?php echo get_field('acomodation'); ?></div>
            </div>
          <?php endif; ?>
          <?php if(get_field('note')) : ?>
            <div class="card">
              <div class="card-header">Note</div>
              <div class="card-body"><?php echo get_field('note'); ?></div>
            </div>
          <?php endif; ?>
        </div>

      </div>
      </div> */ ?>

    </div>

    <div class="col-md-5 term">
      <?php echo get_field('price'); ?>
      <?php echo get_field('term-condition'); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
