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

require_once 'wptsafExtensionEasyPassword.php';
require_once 'wptsafExtensionEasyPasswordAjaxHandle.php';
require_once 'wptsafExtensionEasyPasswordLog.php';
require_once 'wptsafExtensionEasyPasswordReportBuilder.php';
require_once 'wptsafExtensionEasyPasswordSettings.php';
require_once 'wptsafExtensionEasyPasswordWidget.php';

wptsafSecurity::getInstance()->addExtension(wptsafExtensionEasyPassword::getInstance());
