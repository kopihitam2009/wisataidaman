<?php
/**
 * The template for displaying the header
 */
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?> class="no-js">
   <head>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="profile" href="http://gmpg.org/xfn/11">
     <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <?php wp_head(); ?>
   </head>
   <body>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-lg navbar-light bg-nav">
         <div class="container">
           <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo-wisata-idaman.png" width="80%" /></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <?php if ( has_nav_menu( 'primary' ) ) : ?>
             <?php wp_nav_menu( array(
               menu_class => 'navbar-nav ml-auto',
               container => 'div',
               container_class => 'collapse navbar-collapse',
               container_id => 'navbarSupportedContent',
               fallback_cb => 'WP_Bootstrap_Navwalker::fallback',
               depth => 2,
               walker => new WP_Bootstrap_Navwalker(),
               theme_location => 'primary',
               items_wrap => '<ul id="%1$s" class="%2$s">%3$s</ul>'
             ) ); ?>
           <?php else : ?>
             <h5>Goto Appearrance -> Menu to set this menu</h5>
           <?php endif; ?>
        </div>
       </nav>
     </div>
