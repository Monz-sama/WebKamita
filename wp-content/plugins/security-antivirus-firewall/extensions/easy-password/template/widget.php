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

?><div class="x_title">
	<h2>
		<?php wpToolsSAFHelperClass::getCheckIcon($isEnabled);  ?>
		<?php echo $title; ?>
		&nbsp;
		<button class="btn btn-xs <?php echo $isEnabled ? 'btn-default' : 'btn-success'; ?>" type="button"
		        data-action="action=wptsaf_security&extension=easy-password&method=setEnable&args[isEnabled]=<?php echo $isEnabled ? 0 : 1; ?>">
			<?php 
				if($isEnabled){
					echo __('Deactivate', 'wptsaf_security');
				} else {
					echo __('Activate', 'wptsaf_security');
				}
			?>
		</button>
	</h2>
	<div class="clearfix"></div>
</div>
<div class="x_content">
	<p><?php echo $description; ?></p>
</div>
