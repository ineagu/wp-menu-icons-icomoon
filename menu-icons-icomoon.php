<?php

/**
 * Menu Icons: IcoMoon
 *
 * @package Menu_Icons_Icomoon
 * @version 0.3.0
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 *
 *
 * Plugin name: Menu Icons: Icomoon
 * Plugin URI: http://github.com/kucrut/wp-menu-icons-icomoon
 * Description: <a href="http://icomoon.io/">IcoMoon</a> package for <a href="http://wordpress.org/plugins/menu-icons/">Menu Icons</a>
 * Version: 0.3.0
 * Author: Dzikri Aziz
 * Author URI: http://kucrut.org/
 * License: GPLv2
 * Text Domain: menu-icons-icomoon
 * Depends: Menu Icons
 */


/**
 * Main plugin class
 */
final class Menu_Icons_Icomoon {

	/**
	 * Load plugin
	 *
	 * @since   0.1.0
	 * @since   0.2.0 Register to Icon Picker instead.
	 * @wp_hook action plugins_loaded
	 */
	public static function _load() {
		load_plugin_textdomain( 'menu-icons-icomoon', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

		if ( ! class_exists( 'Menu_Icons' ) ) {
			add_action( 'admin_notices', array( __CLASS__, '_notice' ) );
			return;
		}

		add_filter( 'menu_icons_types', array( __CLASS__, '_register' ) );
		add_action( 'icon_picker_types_registry_init', array( __CLASS__, '_register_to_ip' ) );
	}


	/**
	 * Display admin notice when Menu Icons is not installed/activated
	 *
	 * @since   0.1.0
	 * @wp_hook action admin_notice
	 */
	public static function _notice() {
		?>
		<div class="error">
			<p><?php printf(
				wp_kses_post( __( 'Please install and activate <a href="%s">Menu Icons</a> to use Icomoon.', 'menu-icons-icomoon' ) ),
				'http://wordpress.org/plugins/menu-icons/'
			) ?></p>
		</div>
		<?php
	}


	/**
	 * Register type to Icon Picker
	 *
	 * @since   0.2.0
	 * @wp_hook action                      icon_picker_types_registry_init
	 * @param   Icon_Picker_Types_Registry  $ip_registry                     Icon_Picker_Types_Registry instance.
	 */
	public static function _register_to_ip( Icon_Picker_Types_Registry $ip_registry ) {
		require_once Icon_Picker::instance()->dir . '/includes/types/font.php';
		require_once dirname( __FILE__ ) . '/icomoon-ip.php';

		$ip_registry->add( new Icon_Picker_Type_Icomoon() );
	}


	/**
	 * Register type
	 *
	 * @since   0.1.0
	 * @wp_hook filter menu_icons_types
	 */
	public static function _register( $icon_types ) {
		if ( class_exists( 'Icon_Picker_Type_Font' ) ) {
			return $icon_types;
		}

		require_once dirname( __FILE__ ) . '/icomoon.php';

		$instance = new Menu_Icons_Type_Icomoon(
			array(
				'stylesheet' => sprintf(
					'%scss/icomoon%s.css',
					plugin_dir_url( __FILE__ ),
					Menu_Icons::get_script_suffix()
				),
			)
		);
		$icon_types = $instance->register( $icon_types );

		return $icon_types;
	}
}
add_action( 'plugins_loaded', array( 'Menu_Icons_Icomoon', '_load' ) );
