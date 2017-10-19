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

class wptsafExtensionNetworkMonitorSettings extends wptsafSettings{
	
	public function __construct(wptsafAbstractExtension $extension){
		$this->optionKey = WPTSAF_OPTION_KEY_PREFIX . 'settings_network_monitor';
		$this->defaultOptions = array(
			'is_enabled' => false,
			'log_rotation' => -1,
			'lock_duration' => 3,
			'lock_duration_second' => 10,
		);
		parent::__construct($extension);
	}
}