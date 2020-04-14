<?php
/*
 * Plugin Name: WB Paytrail Bank Button Listener
 * Version: 1.0
 * Plugin URI: http://www.webbisivut.org/
 * Description: Redirects customer instantly to the payment gateway after choosing the payment method on checkout.
 * Author: Webbisivut.org
 * Author URI: http://www.webbisivut.org/
 * Requires at least: 4.0
 * Tested up to: 5.3.2
 *
 * @package WordPress
 * @author Webbisivut.org
 * @since 1.0.0
 */

function activate_paytrail_click_listener() {
	?>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				function listenForPaytrailClick() {
					$('.bank-button').on('click', function() { 
						$('#place_order').trigger('click');
					});
				}
				
				$(document).ready(listenForPaytrailClick);
				$(document).ajaxStop(listenForPaytrailClick);
			});
		</script>
	<?php
 }

 add_action('wp_footer', 'activate_paytrail_click_listener');