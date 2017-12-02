<?php
/**
 * Template Name: Programs
 * Template Post Type: programs page_banner
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="page-wrapper">
  <?php if(get_field('page_banner')) : ?>
    <img src="<?php the_field('page_banner'); ?>" />
  <?php else : ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-default.jpg" />
  <?php endif; ?>
</div>

<div class="container content">
  <div class="col-md-12">
    <h4>
      <?php the_title(); ?>
      <span class="badge badge-secondary"><?php echo get_field('lowest_price'); ?></span> |
      <span class="badge badge-secondary"> <i class="fa fa-plane" aria-hidden="true"></i></span>
      <span class="badge badge-secondary"> <?php echo get_field('flight'); ?></span>
    </h4>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom:10px;">
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
    </div>
  </div>
  <!--div class="col-md-3"></div-->
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
