<?php
   /*
   Plugin Name: UTM Cookie Attribution Tracking
   Plugin URI: https://www.grazitti.com
   description: A plugin to track UTM parameters using cookies
   Version: 1.0
   */
?>
<?php 
/*
*  Add UTM Cookie script into the footer.
*/
function track_campaign_attribution() {
	wp_enqueue_script( 'campaign-attribution-tracking', '//go.diamanti.com/rs/597-VSX-966/images/attribution.js','' ,null , true );
}
add_action('wp_footer', 'track_campaign_attribution');