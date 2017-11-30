<?php
/**
 * The template for displaying the footer
 */
?>

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php wp_nav_menu( array(
          menu_class => 'bottom-nav',
          theme_location => 'secondary',
          items_wrap => '<ul id="%1$s" class="%2$s">%3$s</ul>'
        ) ); ?>
      </div>
      <div class="col-md-4">
        <ul class="info-contact">
          <?php if(!empty(get_option('wisataidaman_email'))) : ?>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option('wisataidaman_email') ?></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_phone'))) : ?>
            <li><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo get_option('wisataidaman_phone') ?></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_mobile'))) : ?>
            <li><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo get_option('wisataidaman_mobile') ?></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_facebook'))) : ?>
            <li><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_fb_link') ?>"><?php echo get_option('wisataidaman_facebook') ?></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_linkedin'))) : ?>
            <li><i class="fa fa-youtube-play" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_li_link') ?>"><?php echo get_option('wisataidaman_linkedin') ?></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_googleplus'))) : ?>
            <li><i class="fa fa-youtube-play" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_gp_link') ?>"><?php echo get_option('wisataidaman_googleplus') ?></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_instagram'))) : ?>
            <li><i class="fa fa-instagram" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_ig_link') ?>"><?php echo get_option('wisataidaman_instagram') ?></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_youtube'))) : ?>
            <li><i class="fa fa-youtube-play" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_yt_link') ?>"><?php echo get_option('wisataidaman_youtube') ?></a></li>
          <?php endif; ?>
          <?php if(!empty(get_option('wisataidaman_twitter'))) : ?>
            <li><i class="fa fa-youtube-play" aria-hidden="true"></i> <a href="<?php echo get_option('wisataidaman_tw_link') ?>"><?php echo get_option('wisataidaman_twitter') ?></a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-md-5">
        <form class="form-inline">
        <div class="row">

            <?php //echo do_shortcode( '[contact-form-7 id="53" title="Contact form 1"]' ); ?>
            <div class="col-md-6">
              <div class="form-group mb-1"><input type="text" class="form-control-sm" id="name" aria-describedby="emailHelp" placeholder="Name"></div>
              <div class="form-group mb-1"><input type="email" class="form-control-sm" id="email" aria-describedby="emailHelp" placeholder="Email"></div>
              <div class="form-group mb-1"><input type="text" class="form-control-sm" id="subject" aria-describedby="emailHelp" placeholder="Subject"></div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-1"><textarea class="form-control-sm" id="message" rows="2" placeholder="Message"></textarea></div>
              <button type="submit" class="btn btn-default btn-sm">Submit</button>
            </div>

        </div>
        </form>
      </div>
    </div>
    <hr>
    <p class="text-center">&copy; <?php echo date("Y"); ?> <?php echo get_option('wisataidaman_cpname') ?><p>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
