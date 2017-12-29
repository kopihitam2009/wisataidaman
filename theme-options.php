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
		$options = array ('cpname', 'cpnote', 'cpaddress', 'email', 'phone', 'mobile', 'privacy', 'term', 'fb_link', 'li_link', 'gp_link', 'ig_link', 'yt_link', 'tw_link', 'ppp');
		foreach ( $options as $opt ) {
			delete_option ( 'wisataidaman_'.$opt, $_POST[$opt] );
			add_option ( 'wisataidaman_'.$opt, $_POST[$opt] );
		}
	}
}

function wisataidaman_setting_page(){
  ?>
<style>
.wrap {
  margin: 10px 20px 0 2px;
}
.form-table {
  border-collapse: collapse;
  margin-top: .5em;
  width: 100%;
  clear: both;
  font-size: 14px;
}
.form-table th {
  vertical-align: top;
  text-align: left;
  padding: 20px 10px 20px 0;
  width: 200px;
  line-height: 1.3;
  font-weight: 600;
  vertical-align: top;
  text-align: left;
  padding: 20px 10px 20px 0;
  width: 200px;
  line-height: 1.3;
  font-weight: 600;
  font-size: 14px;
}
.form-table td {
  margin-bottom: 9px;
  padding: 15px 10px;
  line-height: 1.3;
  vertical-align: middle;
  font-size: 14px;
}
</style>


<div class="warp">
  <h1>Web options <small>custom for Global Wisata Idaman</small></h1>

  <form method="post" novalidate="novalidate">
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row"><label for="exampleInputEmail1">Company Name</label></th>
          <td><input size="60" type="text" name="cpname" id="cpname" value="<?php echo get_option('wisataidaman_cpname'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Note</label></th>
          <td><textarea cols="58" rows="3" type="text" name="cpnote" id="cpnote" class="form-control"><?php echo get_option('wisataidaman_cpnote'); ?></textarea></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Address</label></th>
          <td><textarea cols="58" rows="3" type="text" name="cpaddress" id="cpaddress" class="form-control"><?php echo get_option('wisataidaman_cpaddress'); ?></textarea></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Email address</label></th>
          <td><input size="60" type="text" name="email" id="email" value="<?php echo get_option('wisataidaman_email'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Phone</label></th>
          <td><input size="60" type="text" name="phone" id="phone" value="<?php echo get_option('wisataidaman_phone'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Mobile / Whatsapp</label></th>
          <td><input size="60" type="text" name="mobile" id="mobile" value="<?php echo get_option('wisataidaman_mobile'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Privacy Page</label></th>
          <td><?php wp_dropdown_pages("name=privacy&hide_empty=0&show_option_none=".__('- Select -')."&selected=" .get_option('wisataidaman_privacy')); ?></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Term Page</label></th>
          <td><?php wp_dropdown_pages("name=term&hide_empty=0&show_option_none=".__('- Select -')."&selected=" .get_option('wisataidaman_term')); ?></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Facebook</label></th>
          <td><input size="60" type="text" name="fb_link" id="fb_link" value="<?php echo get_option('wisataidaman_fb_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Linkedin</label></th>
          <td><input size="60" type="text" name="li_link" id="li_link" value="<?php echo get_option('wisataidaman_li_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Google Plus</label></th>
          <td><input size="60" type="text" name="gp_link" id="gp_link" value="<?php echo get_option('wisataidaman_gp_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Instagram</label></th>
          <td><input size="60" type="text" name="ig_link" id="ig_link" value="<?php echo get_option('wisataidaman_ig_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Youtube</label></th>
          <td><input size="60" type="text" name="yt_link" id="yt_link" value="<?php echo get_option('wisataidaman_yt_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Twitter</label></th>
          <td><input size="60" type="text" name="tw_link" id="tw_link" value="<?php echo get_option('wisataidaman_tw_link'); ?>" class="form-control"></td>
        </tr>
        <tr>
          <th><label for="exampleInputEmail1">Post per page <strong>Home</strong></label></th>
          <td><input size="10" type="text" name="ppp" id="ppp" value="<?php echo get_option('wisataidaman_ppp'); ?>" class="form-control"></td>
        </tr>
        <!--
        <tr>
          <th></th>
          <td></td>
        </tr>
        -->
      </tbody>
    </table>
    <input type="hidden" name="wisataidaman_theme_settings" value="save" style="display:none;" />
    <?php submit_button(); ?>
  </form>
</div>
  <?php
}
