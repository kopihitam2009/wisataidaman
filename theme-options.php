<?php
/**
 * Theme setting
 */
function wisataidaman_setting_theme_page(){
  add_menu_page( __( 'Website options', 'textdomain' ), 'Options', 'manage_options',
    'wisataidaman', 'wisataidaman_setting_page', 'dashicons-admin-generic', 90 );

    add_action( 'admin_init', 'register_wisataidaman_settings' );
}
add_action( 'admin_menu', 'wisataidaman_setting_theme_page' );

function register_wisataidaman_settings() {
  if ( count($_POST) > 0 && isset($_POST['wisataidaman_theme_settings']) ) {
		$options = array ('umroh', 'overseas', 'tour', 'cpname', 'email', 'phone', 'mobile', 'facebook', 'fb_link', 'linkedin', 'li_link', 'googleplus', 'gp_link', 'instagram', 'ig_link', 'youtube', 'yt_link', 'twitter', 'tw_link');
		foreach ( $options as $opt ) {
			delete_option ( 'wisataidaman_'.$opt, $_POST[$opt] );
			add_option ( 'wisataidaman_'.$opt, $_POST[$opt] );
		}
	}
}

function wisataidaman_setting_page(){
  ?>
  <div class="warp">
    <div class="page-header">
      <h1>Web options <small>custom for wisataidaman</small></h1>
    </div>
    <div class="container-fluid">
    <form method="post" action="">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Theme Options</div>
            <div class="card-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Category Umroh</label>
                <?php wp_dropdown_categories("name=umroh&hide_empty=0&show_option_none=".__('- Select -')."&selected=" .get_option('wisataidaman_umroh')); ?>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Category Overseas</label>
                <?php wp_dropdown_categories("name=overseas&hide_empty=0&show_option_none=".__('- Select -')."&selected=" .get_option('wisataidaman_overseas')); ?>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Category Tour</label>
                <?php wp_dropdown_categories("name=tour&hide_empty=0&show_option_none=".__('- Select -')."&selected=" .get_option('wisataidaman_tour')); ?>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="text" name="cpname" id="cpname" value="<?php echo get_option('wisataidaman_cpname'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" id="email" value="<?php echo get_option('wisataidaman_email'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo get_option('wisataidaman_phone'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile / Whatsapp</label>
                <input type="text" name="mobile" id="mobile" value="<?php echo get_option('wisataidaman_mobile'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input type="text" name="facebook" id="facebook" value="<?php echo get_option('wisataidaman_facebook'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="fb_link" id="fb_link" value="<?php echo get_option('wisataidaman_fb_link'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Linkedin</label>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('wisataidaman_linkedin'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="li_link" id="li_link" value="<?php echo get_option('wisataidaman_li_link'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Google Plus</label>
                <input type="text" name="googleplus" id="googleplus" value="<?php echo get_option('wisataidaman_googleplus'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="gp_link" id="gp_link" value="<?php echo get_option('wisataidaman_gp_link'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Instagram</label>
                <input type="text" name="instagram" id="instagram" value="<?php echo get_option('wisataidaman_instagram'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="ig_link" id="ig_link" value="<?php echo get_option('wisataidaman_ig_link'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="text" name="youtube" id="youtube" value="<?php echo get_option('wisataidaman_youtube'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="yt_link" id="yt_link" value="<?php echo get_option('wisataidaman_yt_link'); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Twitter</label>
                <input type="text" name="twitter" id="twitter" value="<?php echo get_option('wisataidaman_twitter'); ?>" class="form-control">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="tw_link" id="tw_link" value="<?php echo get_option('wisataidaman_tw_link'); ?>" class="form-control">
              </div>
            </div>
          </div>
        </div>

      </div>
        <input type="hidden" name="wisataidaman_theme_settings" value="save" style="display:none;" />
      <?php submit_button(); ?>
    </div>
  </form>
  </div>
  <?php
}
