<?php

/**
 * Menu Icons: IcoMoon
 *
 * @package Menu_Icons_Icomoon
 * @version 0.1.0
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 *
 *
 * Plugin name: Menu Icons: Icomoon
 * Plugin URI: http://github.com/kucrut/wp-menu-icons-icomoon
 * Description: <a href="http://icomoon.io/">IcoMoon</a> package for <a href="http://wordpress.org/plugins/menu-icons/">Menu Icons</a>
 * Version: 0.1.0
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
	 * @wp_hook action plugins_loaded/99
	 */
	public static function _load() {
		load_plugin_textdomain( 'menu-icons-icomoon', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

		if ( ! class_exists( 'Menu_Icons' ) ) {
			add_action( 'admin_notices', array( __CLASS__, '_notice' ) );
			return;
		}

		add_filter( 'menu_icons_types', array( __CLASS__, '_register' ) );
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
	 * Register type
	 *
	 * @since   0.1.0
	 * @wp_hook filter menu_icons_types
	 */
	public static function _register( $icon_types ) {
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
add_action( 'plugins_loaded', array( 'Menu_Icons_Icomoon', '_load' ), 99 );
