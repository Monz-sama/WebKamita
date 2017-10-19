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

echo $extensionTitle; ?>

==================================================
<?php _e('Total Scans', 'wptsaf_security'); echo ': '.$rowsAmount; ?>

<?php _e('Current Scans', 'wptsaf_security'); echo ': '.$rowsAmountForPeriod; ?>

<?php _e('Added', 'wptsaf_security'); ?>: <?php echo $addedByPeriod; ?> | <?php _e('Removed', 'wptsaf_security'); ?>: <?php echo $removedByPeriod; ?> | <?php _e('Changed', 'wptsaf_security'); ?>: <?php echo $changedByPeriod; ?>