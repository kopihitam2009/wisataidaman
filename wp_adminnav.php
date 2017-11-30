<?php
/*******************
* Customize admin
* on WP 4.5.2
* author : helmy
*******************/

add_action( 'admin_menu', 'archiprada_menu');
add_action( 'admin_menu', 'dashboard_footer_right' );
add_action('wp_before_admin_bar_render', 'custom_toolbar', 999);

add_filter( 'screen_options_show_screen', '__return_false' );
add_filter( 'contextual_help', 'remove_help', 999, 3 );
add_filter( 'admin_footer_text', '__return_false' );
add_filter('pre_site_transient_update_plugins','__return_null');

remove_action('load-update-core.php','wp_update_plugins');

function archiprada_menu() {
  remove_menu_page( 'edit-comments.php' );
  remove_menu_page( 'plugins.php' );
  remove_menu_page( 'users.php' );
  remove_menu_page( 'tools.php' );

  remove_submenu_page( 'index.php', 'update-core.php' );
  remove_submenu_page( 'themes.php', 'themes.php' );
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page ( 'options-general.php', 'options-writing.php' );
  remove_submenu_page ( 'options-general.php', 'options-reading.php' );
  remove_submenu_page ( 'options-general.php', 'options-discussion.php' );
  remove_submenu_page ( 'options-general.php', 'options-media.php' );

  remove_action('admin_menu', '_add_themes_utility_last', 101);

  global $submenu;
  unset($submenu['themes.php'][6]);
}

function dashboard_footer_right() {
  remove_filter( 'update_footer', 'core_update_footer' );
}

function remove_help( $old_help, $screen_id, $screen ){
  $screen->remove_help_tabs();
  return $old_help;
}

function custom_toolbar() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('customize');
  $wp_admin_bar->remove_menu('dashboard');
  $wp_admin_bar->remove_menu('themes');

  $wp_admin_bar->remove_node('wp-logo');
  $wp_admin_bar->remove_node('site-name');
  $wp_admin_bar->remove_node('user-info');
  $wp_admin_bar->remove_node('my-account');

  $wp_admin_bar->remove_node('new-user');

  $wp_admin_bar->add_node( array(
    'id' => 'btn-lgt',
    'title' => 'Log Out',
    'href' => wp_logout_url(),
  ) );
}
