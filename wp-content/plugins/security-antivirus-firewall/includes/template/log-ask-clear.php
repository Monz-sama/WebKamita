<?php 
/*  
 * Security Antivirus Firewall (wpTools S.A.F.)
 * http://wptools.co/wordpress-security-antivirus-firewall
 * Version:           	2.3.1
 * Build:             	84880
 * Author:            	WpTools
 * Author URI:        	http://wptools.co
 * License:           	License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * Date:              	Mon, 16 Oct 2017 18:22:24 GMT
 */ 

if ( ! defined( 'WPINC' ) )  die;
if ( ! defined( 'ABSPATH' ) ) exit;

?><div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><?php echo $extensionTitle; ?></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div>
					<?php _e('Are you sure want to clear log?', 'wptsaf_security'); ?>
				</div>
				<div class="clear"></div>

				<div class="ln_solid"></div>
				<div class="buttons">
					<button class="btn btn-default pull-right btn-popup-close">
						<?php _e('Close', 'wptsaf_security'); ?>
					</button>
					
					<button class="btn btn-danger pull-right"
					        data-action="action=wptsaf_security&extension=<?php echo $extensionName; ?>&method=logClear">
						<?php _e('Clear', 'wptsaf_security'); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>