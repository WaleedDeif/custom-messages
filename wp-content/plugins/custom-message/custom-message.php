<?php
/*
Plugin Name: custom-message plugin
Plugin URI: https://github.com/WaleedDeif
Description: Adds a custom message in the store for customers.Scenario:-User installs the plugin, and goes to it settings and add a custom welcome message for his store visitors.-The plugin then takes the message and display it in the store front
Version: 1.0.0
Author: Waleed Hamdy
Author URI: https://github.com/WaleedDeif
License: 
Text Domain: 
*/

?>
<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
	//parameters details
	 //add_management_page( $page_title, $menu_title, $capability,$menu_slug, $function );
	 //add a new setting page udner setting menu
  //add_management_page('Footer Text', 'Footer Text', 'manage_options',__FILE__, //'footer_text_admin_page');
  //add new menu and its sub menu 
  add_menu_page('Header Text title', 'Custom Messages', 'manage_options',
 'footer_setting_page', 'mt_settings_page');

}


// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Custom Message Configurations', 'menu-test' ) . "</h2>";

	include_once('message_settings_page.php');
}

function header_alert() {

   echo "<div style='color: blue;
    font-size: 30px;
    margin: 20px;'>".get_option('message_text')."</div>";
}
add_action( 'wp_head', 'header_alert' );
?>