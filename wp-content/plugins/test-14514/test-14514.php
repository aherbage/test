<?php
/*
Plugin Name: test-14514
Version: 1.0
*/

function _14514_activate() { 

}
register_activation_hook( __FILE__, '_14514_activate' );

function detect_plugin_activation( $plugin, $network_activation ) {
  if( $plugin == plugin_basename( __FILE__ ) ) {
    get_credentials();
  }
}
add_action( 'activated_plugin', 'detect_plugin_activation', 10, 2 );

function _14514_deactivate() {
//remove_action( 'activated_plugin', 'detect_plugin_activation', 10);
}
register_deactivation_hook( __FILE__, '_14514_deactivate' );

function get_credentials()
{
    $store_url = get_site_url();
  $endpoint = '/wc-auth/v1/authorize';
  $params = [
    'app_name' => 'test-14514',
    'scope' => 'write',
    'user_id' => $store_url,
    'return_url' => 'http://mysterybuilder.com/wp-admin/plugins.php',
    'callback_url' => 'https://atek-inventory.herokuapp.com/callback'
  ];
  $encoded = http_build_query($params);
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => $encoded
    )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents('https://mysterybuilder.com' . $endpoint, false, $context);
  error_log($result);
  if ($result === FALSE) {
    //do something
  } 
  exit(wp_redirect($store_url . $endpoint . '?' . $encoded));
}