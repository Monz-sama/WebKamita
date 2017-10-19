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

require_once 'wptsafExtensionNetworkMonitor.php';
require_once 'wptsafExtensionNetworkMonitorAjaxHandle.php';
require_once 'wptsafExtensionNetworkMonitorCron.php';
require_once 'wptsafExtensionNetworkMonitorLog.php';
require_once 'wptsafExtensionNetworkMonitorReportBuilder.php';
require_once 'wptsafExtensionNetworkMonitorManagerIp.php';
require_once 'wptsafExtensionNetworkMonitorManagerIpChangeLog.php';
require_once 'wptsafExtensionNetworkMonitorSettings.php';
require_once 'wptsafExtensionNetworkMonitorValidator.php';
require_once 'wptsafExtensionNetworkMonitorWidget.php';

wptsafSecurity::getInstance()->addExtension(wptsafExtensionNetworkMonitor::getInstance());
new wptsafExtensionNetworkMonitorValidator();
