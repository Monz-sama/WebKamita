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

require_once WPTSAF_DIR . 'core/wptsafSecurity.php';
require_once WPTSAF_DIR . 'core/wptsafSecurityAjaxHandle.php';
require_once WPTSAF_DIR . 'core/wptsafSecuritySettings.php';
wptsafSecurity::getInstance()->addExtension(wptsafSecurity::getInstance());

require_once WPTSAF_DIR . 'core/admin/wptsafAdminAssets.php';
require_once WPTSAF_DIR . 'core/admin/page/wptsafAdminPageExtensions.php';
require_once WPTSAF_DIR . 'core/admin/page/wptsafAdminPageSettings.php';
require_once WPTSAF_DIR . 'core/admin/page/wptsafAdminPageMalwareScanner.php';

new wptsafAdminAssets();
new wptsafAdminPageExtensions();
new wptsafAdminPageMalwareScanner();
new wptsafAdminPageSettings();