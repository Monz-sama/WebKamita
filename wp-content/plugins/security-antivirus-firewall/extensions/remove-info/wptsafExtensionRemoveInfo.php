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

class wptsafExtensionRemoveInfo extends wptsafAbstractExtension{

	protected static $instance;

	public function __construct(){
		$this->name = 'remove-info';
		$this->title = __( 'Hide WordPress Info', 'wptsaf_security' );
		$this->description = __("This module help you to hide version of your WordPress from the front end. This information make your website even more safe. Do not allow attackers easily detect version of your software and avoid to use some security breaches of this version.", 'wptsaf_security');
		
		parent::__construct();
	}

	public static function getInstance(){
		if (!self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function init(){
		parent::init();
		
		$settings = $this->getSettings();

		if ($settings->get('is_remove_info')) {
			remove_action('wp_head', 'wp_generator');
		} 

	}

	public function isEnabled(){
		return true;
	}
}
