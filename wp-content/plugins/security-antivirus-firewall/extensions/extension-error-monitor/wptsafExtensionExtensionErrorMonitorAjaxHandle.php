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

class wptsafExtensionExtensionErrorMonitorAjaxHandle extends wptsafAbstractExtensionAjaxHandle{

	public function settingsSave(){}

	public function hideMessage($id){
		$row = $this->extension->getLog()->getRow($id);

		$row['is_show'] = 0;
		$row['hidden_by'] = wptsafEnv::getInstance()->getUsername();
		$this->extension->getLog()->updateRow($row);

		return $this->response;
	}

	public function hideAllMessages(){
		global $wpdb;
		$table = $this->extension->getLog()->getTable();

		$wpdb->query($wpdb->prepare(
			"UPDATE {$table} SET is_show = 0, hidden_by = '%s' WHERE is_show = 1",
			wptsafEnv::getInstance()->getUsername()
		));

		return $this->response;
	}
}
