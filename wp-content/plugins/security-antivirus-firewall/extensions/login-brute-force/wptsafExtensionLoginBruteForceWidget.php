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

class wptsafExtensionLoginBruteForceWidget extends wptsafAbstractExtensionWidget{
	
	public function content(){
		$view = new wptsafView();
		return $view->content(
			$this->extension->getExtensionDir() . 'template/widget.php',
			array(
				'title' => $this->extension->getTitle(),
				'description' => $this->extension->getDescription(),
				'isEnabled' => $this->extension->isEnabled(),
				'logHeader' => array(
					'date_gmt' 	=> __('Date', 'wptsaf_security'),
					'ip' 		=> __('IP address', 'wptsaf_security'),
					'username' 	=> __('Username', 'wptsaf_security'),
					'status' 	=> __('Status', 'wptsaf_security')
				),
				'rows' => $this->extension->getLog()->getRows(10)
			)
		);
	}
}
