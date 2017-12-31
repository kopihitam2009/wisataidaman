<?php
/**
 * The main template file
 */
 get_header(); ?>

    <?php $banners = new WP_Query( array( 'post_type' => 'banner', 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC' ) ); ?>
    <?php if ( $banners->have_posts() ) : ?>
    <div class="container-fluid pl-0 pr-0">
      <div class="slider">
        <?php while ( $banners->have_posts() ) : $banners->the_post(); ?>
          <div id="slide<?php the_ID(); ?>"><img src="<?php the_field('image'); ?>" /></div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php $umroh = new WP_Query( array( 'post_type' => 'programs', 'posts_per_page' =>  get_option('wisataidaman_ppp'), 'order' => 'asc' ) ); ?>
    <?php if ( $umroh->have_posts() ) : ?>
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12 mt-2 mb-3">
           <h2 class="text-center">Best Offers</h2>
           <p class="text-center add-info">Check out our top-rated tours</p>
         </div>
       </div>
       <div class="row" style="padding:0 5px 0 5px;">

         <?php while ( $umroh->have_posts() ) :$umroh->the_post(); ?>
           <div class="col-md-4 card-program">
             <div class="card shadow">
               <a href="<?php the_permalink();?>"><img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="image" /></a>
               <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <div class="title-program"><?php the_title(); ?></div>
                   <div class="lp-program"><?php the_field('lowest_price'); ?></div>
                </div>
                 <span class="add-info"><?php the_field('duration'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
               </div>
             </div>
            </div>
         <?php endwhile; ?>
       </div>
     </div>
     <?php endif; ?>
     <?php wp_reset_query(); ?>

     <?php $soup = new WP_Query( array( 'post_type' => 'superiorities', 'posts_per_page' => 4, 'order' => 'asc' ) ); ?>
     <?php if ( $soup->have_posts() ) : ?>
     <div class="bg-why mt-5 pt-5 pb-5">
       <div class="container">
         <div class="row">
           <div class="col-md-12"><h3 class="text-center mb-4">Why <strong>Global Wisata Idaman</strong></h3></div>
         </div>
         <div class="row">

           <?php while ( $soup->have_posts() ) :$soup->the_post(); ?>
             <div class="col-md-6">
               <div class="media shadow">
                   <img class="mr-3" width="15%" style="margin-bottom:15px;" src="<?php the_field('thumbnail'); ?>" />
                  <div class="media-body">
                    <h4 class="mt-0 mb-1"><?php the_title() ?></h4>
                    <p><?php the_field('body'); ?><p>
                  </div>
               </div>
             </div>
           <?php endwhile; ?>
         </div>
       </div>
     </div>
     <?php endif; ?>
     <?php wp_reset_query(); ?>

     <?php $testimoni = new WP_Query( array( 'post_type' => 'testimonies', 'posts_per_page' => 4, 'order' => 'asc' ) ); ?>
     <?php if ( $testimoni->have_posts() ) : ?>
    <div class="testimoni pt-5 pb-4">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <h3 class="text-center">What Customers Say</h3>
            <p class="text-center mb-4">Our clients’ testimonials are the best proof of our high level of service</p>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">


                <?php $num = 0; ?>
                <?php while ( $testimoni->have_posts() ) :$testimoni->the_post(); ?>
                  <?php $num++ ?>
                  <div class="carousel-item <?php echo $num < 2 ? 'active' : ''; ?>" style="height:200px;">
                    <?php if(get_field('photo')) : ?>

                      <img src="<?php the_field('photo'); ?>" class="img-fluid d-block mx-auto thumb shadow mb-1" width="10%" />
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/person-default.png" class="img-fluid d-block mx-auto thumb shadow mb-1" width="10%" />
                    <?php endif; ?>

                    <h5 class="text-center"><?php the_field('name'); ?></h5>
                    <div style="width:80%;text-align:center;margin:0 auto;"><?php the_field('body') ?></div>
                  </div>
                <?php endwhile; ?>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

    <?php $blog = new WP_Query( array( 'category_name' => 'blog', 'posts_per_page' => 2, 'order' => 'asc' ) ); ?>
    <?php if ( $blog->have_posts() ) : ?>
      <div class="bottom-content pt-5 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h3 class="text-center">News & Event</h3>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <?php while ( $blog->have_posts() ) :$blog->the_post(); ?>
            <div class="col-md-5">
              <div class="media blog">
              <?php  if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
              } ?>
              <img class="mr-3 blog-thumb shadow" src="<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')) : get_template_directory_uri() . '/images/default-thumb.jpg' ; ?>">

                <div class="media-body">
                  <h5 class="mt-0 mb-0"><?php the_title(); ?></h5>
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        </div>
      </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php get_footer(); ?>
