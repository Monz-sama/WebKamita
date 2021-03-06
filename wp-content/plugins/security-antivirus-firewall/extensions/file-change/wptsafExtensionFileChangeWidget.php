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

class wptsafExtensionFileChangeWidget extends wptsafAbstractExtensionWidget{

	public function content(){
		$view = new wptsafView();
		return $view->content(
			$this->extension->getExtensionDir() . 'template/widget.php',
			array(
				'title' => $this->extension->getTitle(),
				'description' => $this->extension->getDescription(),
				'isEnabled' => $this->extension->getSettings()->get('is_enabled'),
				'logHeader' => array(
					'date_gmt' => __('Date', 'wptsaf_security'),
					'added' => __('Added', 'wptsaf_security'),
					'removed' => __('Removed', 'wptsaf_security'),
					'changed' => __('Changed', 'wptsaf_security')/*,
					'probably_infected' => __('Probably Infected', 'wptsaf_security')*/
				),
				'rows' => $this->extension->getLog()->getRows(10)
			)
		);
	}
}
