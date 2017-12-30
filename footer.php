<?php
/**
 * The template for displaying the footer
 */
?>

<div class="footer pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h5><?php echo get_option('wisataidaman_cpname') ?></h5>
        <p><?php echo get_option('wisataidaman_cpnote') ?></p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-support.png">
      </div>

      <div class="col-md-4">
        <h5>Contact us</h5>
        <?php if(!empty(get_option('wisataidaman_phone')) && !empty(get_option('wisataidaman_mobile')) && !empty(get_option('wisataidaman_email'))) : ?>
          <table cellpadding="5">
            <tr>
              <td valign="top"><i class="fa fa-map" aria-hidden="true"></i></td>
              <td valign="top"><?php echo get_option('wisataidaman_cpaddress') ?></td>
              <td></td>
              <td></td>
              <td valign="top"><i class="fa fa-whatsapp" aria-hidden="true"></i><br><i class="fa fa-phone-square" aria-hidden="true"></i></td>
              <td valign="top"><?php echo get_option('wisataidaman_phone') ?><br><?php echo get_option('wisataidaman_mobile') ?></td>
            </tr>
            <tr>
              <td valign="top"><i class="fa fa-envelope" aria-hidden="true"></i></td>
              <td valign="top"><?php echo get_option('wisataidaman_email') ?></td>
              <td></td>
              <td></td>
              <td valign="top"></td>
              <td valign="top"></td>
            </tr>
          </table>
          <?php endif; ?>
      </div>
      <div class="col-md-3">
        <h5>Link's</h5>
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
          <?php wp_nav_menu( array(
            menu_class => 'bottom-nav',
            theme_location => 'secondary',
            items_wrap => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          ) );?>
        <?php else : ?>
          <h5>Goto Appearrance -> Menu to set this menu</h5>
        <?php endif; ?>
        <br>

        <h5 class="mt-3 mb-1">Follow Us</h5>
        <ul class="social-media">
          <?php if(!empty(get_option('wisataidaman_fb_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_fb_link') ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_li_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_li_link') ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_gp_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_gp_link') ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_ig_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_ig_link') ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_yt_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_yt_link') ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_tw_link'))) : ?>
            <li><a href="<?php echo get_option('wisataidaman_tw_link') ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <hr class="w">
    <div class="text-footer">
      <span class="float-left">&copy; <?php echo date("Y"); ?> <?php echo get_option('wisataidaman_cpname') ?></span>
      <span class="float-right">
        <?php if(!empty(get_option('wisataidaman_privacy'))) : ?>
          <a class="pt-link" href="<?php the_permalink(get_option('wisataidaman_privacy')); ?>">Privacy Policy</a>
        <?php endif; ?>
        <?php if(!empty(get_option('wisataidaman_term'))) : ?>
          <a class="pt-link" href="<?php the_permalink(get_option('wisataidaman_term')); ?>">Terms of Use</a>
        <?php endif; ?>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
