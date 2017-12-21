<?php
/**
 * The main template file
 */
 get_header(); ?>
    <div class="container-fluid pl-0 pr-0">
      <div class="slider">
        <?php $banners = new WP_Query( array( 'post_type' => 'banner', 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC' ) );
        while ( $banners->have_posts() ) : $banners->the_post(); ?>
          <div id="slide<?php the_ID(); ?>"><img src="<?php the_field('image'); ?>" /></div>
        <?php endwhile; ?>
      </div>
    </div>

     <div class="container home">
       <div class="row">

         <?php $umroh = new WP_Query( array( 'post_type' => 'programs', 'posts_per_page' => get_option('wisataidaman_ppp'), 'cat' => get_option('wisataidaman_umroh'), 'order' => 'asc' ) ); ?>
         <div class="col-md-4">
           <img class="img-fluid mx-auto d-block" width="20%" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri(); ?>/images/icon-umroh.jpg" />
           <ul class="program">
             <?php while ( $umroh->have_posts() ) :$umroh->the_post(); ?>
               <li>
                 <div class="card">
                   <a href="<?php the_permalink();?>"><img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="image" /></a>
                   <div class="card-body">
                     <span><?php the_field('lowest_price'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
                   </div>
                 </div>
               </li>
             <?php endwhile; ?>
           </ul>
         </div>

         <?php $over = new WP_Query( array( 'post_type' => 'programs', 'posts_per_page' => get_option('wisataidaman_ppp'), 'cat' => get_option('wisataidaman_overseas'), 'order' => 'asc' ) ); ?>
         <div class="col-md-4">
           <img class="img-fluid mx-auto d-block" width="20%" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri(); ?>/images/icon-overseas.jpg" />
           <ul class="program">
             <?php while ( $over->have_posts() ) :$over->the_post(); ?>
               <li>
                 <div class="card">
                   <a href="<?php the_permalink();?>"><img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="image" /></a>
                   <div class="card-body">
                     <span><?php the_field('lowest_price'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
                   </div>
                 </div>
               </li>
             <?php endwhile; ?>
           </ul>
         </div>

         <?php $tour = new WP_Query( array( 'post_type' => 'programs', 'posts_per_page' => get_option('wisataidaman_ppp'), 'cat' => get_option('wisataidaman_tour'), 'order' => 'asc' ) ); ?>
         <div class="col-md-4">
           <img class="img-fluid mx-auto d-block" width="20%" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri(); ?>/images/icon-tour.jpg" />
           <ul class="program">
             <?php while ( $tour->have_posts() ) :$tour->the_post(); ?>
               <li>
                 <div class="card">
                   <a href="<?php the_permalink();?>"><img class="card-img-top" src="<?php the_field('thumbnail'); ?>" alt="image" /></a>
                   <div class="card-body">
                     <span><?php the_field('lowest_price'); ?> | <i class="fa fa-plane" aria-hidden="true"></i> <?php the_field('flight'); ?></span>
                   </div>
                 </div>
               </li>
             <?php endwhile; ?>
           </ul>
         </div>

       </div>
     </div>

     <div class="bottom-content">
       <div class="container">
         <div class="row">
           <?php $soup = new WP_Query( array( 'post_type' => 'superiorities', 'posts_per_page' => 4, 'order' => 'asc' ) ); ?>
           <?php while ( $soup->have_posts() ) :$soup->the_post(); ?>
             <div class="col-md-3">
               <img class="img-fluid mx-auto d-block" width="30%" style="margin-bottom:15px;" src="<?php the_field('thumbnail'); ?>" />
               <h4 class="text-center"><?php the_title() ?></h4>
               <p class="text-center"><?php the_field('body'); ?><p>
             </div>
           <?php endwhile; ?>
         </div>
       </div>
     </div>

<?php get_footer(); ?>
